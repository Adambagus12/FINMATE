<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Log;

class PredictionController extends Controller
{
    /**
     * Menampilkan halaman form kalkulator budget.
     */
    public function showForm()
    {
        return view('calculate');
    }

    /**
     * Mengirim data dari request ke Flask API untuk prediksi.
     */
    public function predict(Request $request)
    {
        $request->validate([
            'monthly_income' => 'required|numeric',
            'financial_aid' => 'required|in:0,1',
            'age' => 'required|integer',
            'gender' => 'required|in:Male,Female',
            'year_in_school' => 'required|in:Freshman,Sophomore,Junior,Senior',
            'major' => 'required|in:Engineering,Business,Social Sciences,Psychology,Computer Science,Biology,Economics,Mathematics,Information Systems',
            'preferred_payment_method' => 'required|in:Cash,E-wallet,Credit Card',
        ]);

        try {
            $inputData = [
                'monthly_income' => (int) $request->input('monthly_income'),
                'financial_aid' => (int) $request->input('financial_aid'),
                'age' => (int) $request->input('age'),
            ];

            // Transformasi dropdown menjadi format One-Hot Encoding
            $this->transformInput($request, $inputData, 'gender', ['Male', 'Female']);
            $this->transformInput($request, $inputData, 'year_in_school', ['Freshman', 'Sophomore', 'Junior', 'Senior']);
            $this->transformInput($request, $inputData, 'major', [
                'Engineering', 'Business', 'Social Sciences', 'Psychology', 
                'Computer Science', 'Biology', 'Economics', 'Mathematics', 
                'Information Systems'
            ]);
            $this->transformInput($request, $inputData, 'preferred_payment_method', ['Cash', 'E-wallet', 'Credit Card']);

            $response = Http::timeout(30)->post('http://127.0.0.1:5000/predict', $inputData);

            $response->throw();

            return redirect('/calculate')
                ->with([
                    'result' => $response->json()
                ])
                ->withInput($request->input());

        } catch (ConnectionException $e) {
            Log::error('Gagal terhubung ke Flask API: ' . $e->getMessage());
            return back()->with('error', 'Tidak dapat terhubung ke layanan prediksi. Pastikan server prediksi berjalan dan coba lagi nanti.')->withInput();
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            Log::error('Terjadi kesalahan saat prediksi: ' . $e->getMessage());
            return back()->with('error', 'Terjadi kesalahan pada server saat melakukan prediksi. Silakan periksa kembali data yang Anda masukkan.')->withInput();
        }
    }

    /**
     * Helper untuk One-Hot Encoding input dropdown.
     */
    private function transformInput(Request $request, array &$data, string $formKey, array $options)
    {
        $inputValue = $request->input($formKey);
        foreach ($options as $option) {
            $data[$formKey . '_' . $option] = ($inputValue === $option) ? 1 : 0;
        }
    }
}
