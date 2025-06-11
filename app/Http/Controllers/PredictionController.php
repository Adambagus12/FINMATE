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
        // Validasi dasar untuk memastikan input yang diperlukan ada
        $request->validate([
            'monthly_income' => 'required|numeric',
            'financial_aid' => 'required|in:0,1',
            'age' => 'required|integer',
            'gender' => 'required|string',
            'year_in_school' => 'required|string',
            'major' => 'required|string',
            'preferred_payment_method' => 'required|string',
        ]);

        try {
            // 1. Siapkan data dasar
            $inputData = [
                'monthly_income' => (int)$request->input('monthly_income'),
                'financial_aid' => (int)$request->input('financial_aid'),
                'age' => (int)$request->input('age'),
            ];

            // 2. Transformasi input form menjadi format One-Hot Encoded
            $this->transformInput($request, $inputData, 'gender', ['Female', 'Male', 'Non-binary']);
            $this->transformInput($request, $inputData, 'year_in_school', ['Freshman', 'Sophomore', 'Junior', 'Senior']);
            $this->transformInput($request, $inputData, 'major', ['Biology', 'Computer Science', 'Economics', 'Engineering', 'Psychology']);
            $this->transformInput($request, $inputData, 'preferred_payment_method', ['Cash', 'Credit/Debit Card', 'Mobile Payment App']);

            // 3. Kirim Request ke Flask API
            $response = Http::timeout(30)->post('http://127.0.0.1:5000/predict', $inputData);

            $response->throw(); // Lempar exception jika status 4xx atau 5xx

            // 4. Jika berhasil, kembalikan view dengan hasil dan input lama
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
     * Helper untuk mengubah input tunggal menjadi beberapa kolom one-hot encoded.
     * @param Request $request
     * @param array &$data Referensi ke array data yang akan dikirim
     * @param string $formKey Nama input di form (cth: 'gender')
     * @param array $options Daftar nilai yang mungkin (cth: ['Female', 'Male'])
     */
    private function transformInput(Request $request, array &$data, string $formKey, array $options)
    {
        $inputValue = $request->input($formKey);
        foreach ($options as $option) {
            $apiKey = $formKey . '_' . $option;
            $data[$apiKey] = ($inputValue === $option) ? 1 : 0;
        }
    }
}