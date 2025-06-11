@extends('base')

@section('content')

<section class="py-12">
    <h1 class="text-2xl font-semibold text-center text-primary lg:text-left lg:px-28">Budgeting Pintar, Gak Ribet</h1>
    <p class="mt-4 italic font-semibold text-center lg:text-left lg:px-28">Masukin penghasilan kamu, tambah kebutuhan bulanan, dan biar FinMate yang ngatur budget-nya.</p>
</section>

<section class="flex flex-col gap-8 pb-24 lg:flex-row lg:justify-between lg:px-28 lg:gap-28 lg:mb-28">
    <article class="px-6 py-10 rounded-lg shadow-md bg-secondary lg:w-full lg:py-16">
        
        {{-- Menampilkan Pesan Error Validasi atau Umum --}}
        @if (session('error'))
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 border border-red-400 rounded-lg" role="alert">
                <span class="font-bold">Error!</span> {{ session('error') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 border border-red-400 rounded-lg" role="alert">
                <span class="font-bold">Harap perbaiki error berikut:</span>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="budget-form" method="POST" action="{{ route('predict') }}">
            @csrf

            <!-- Pemasukan Bulanan -->
            <div class="flex flex-col gap-3 mb-4">
                <label class="font-semibold lg:text-xl" for="income">Pemasukan bulanan (Rp)</label>
                <input id="income" class="rounded-3xl" type="number" name="monthly_income" value="{{ old('monthly_income') }}" required>
            </div>

            <!-- Mendapat Bantuan Keuangan -->
            <div class="flex flex-col gap-3 mb-4">
                <label class="font-semibold lg:text-xl" for="financial_aid">Mendapat bantuan keuangan?</label>
                <select id="financial_aid" name="financial_aid" class="rounded-3xl">
                    <option value="1" {{ old('financial_aid') == '1' ? 'selected' : '' }}>Ya</option>
                    <option value="0" {{ old('financial_aid', '0') == '0' ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>

            <!-- Usia -->
            <div class="flex flex-col gap-3 mb-4">
                <label class="font-semibold lg:text-xl" for="age">Usia</label>
                <input id="age" class="rounded-3xl" type="number" name="age" value="{{ old('age') }}" required>
            </div>
            
            <!-- Jenis Kelamin -->
            <div class="flex flex-col gap-3 mb-4">
                <label class="font-semibold lg:text-xl">Jenis Kelamin</label>
                <div class="flex flex-wrap gap-4">
                    <label><input type="radio" name="gender" value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }}> Wanita</label>
                    <label><input type="radio" name="gender" value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }}> Pria</label>
                    <label><input type="radio" name="gender" value="Non-binary" {{ old('gender') == 'Non-binary' ? 'checked' : '' }}> Non-biner</label>
                </div>
            </div>

            <!-- Tingkat Pendidikan -->
            <div class="flex flex-col gap-3 mb-4">
                <label class="font-semibold rounded-3xl lg:text-xl">Tingkat Pendidikan</label>
                <div class="flex flex-wrap gap-4">
                    <label><input type="radio" name="year_in_school" value="Freshman" {{ old('year_in_school') == 'Freshman' ? 'checked' : '' }}> Tahun Pertama</label>
                    <label><input type="radio" name="year_in_school" value="Sophomore" {{ old('year_in_school') == 'Sophomore' ? 'checked' : '' }}> Tahun Kedua</label>
                    <label><input type="radio" name="year_in_school" value="Junior" {{ old('year_in_school') == 'Junior' ? 'checked' : '' }}> Tahun Ketiga</label>
                    <label><input type="radio" name="year_in_school" value="Senior" {{ old('year_in_school') == 'Senior' ? 'checked' : '' }}> Tahun Keempat</label>
                </div>
            </div>

            <!-- Jurusan -->
            <div class="flex flex-col gap-3 mb-4">
                <label class="font-semibold rounded-3xl lg:text-xl">Jurusan</label>
                <div class="flex flex-wrap gap-4">
                    <label><input type="radio" name="major" value="Biology" {{ old('major') == 'Biology' ? 'checked' : '' }}> Biologi</label>
                    <label><input type="radio" name="major" value="Computer Science" {{ old('major') == 'Computer Science' ? 'checked' : '' }}> Ilmu Komputer</label>
                    <label><input type="radio" name="major" value="Economics" {{ old('major') == 'Economics' ? 'checked' : '' }}> Ekonomi</label>
                    <label><input type="radio" name="major" value="Engineering" {{ old('major') == 'Engineering' ? 'checked' : '' }}> Teknik</label>
                    <label><input type="radio" name="major" value="Psychology" {{ old('major') == 'Psychology' ? 'checked' : '' }}> Psikologi</label>
                </div>
            </div>

            <!-- Metode Pembayaran Favorit -->
            <div class="flex flex-col gap-3 mb-4">
                <label class="font-semibold rounded-3xl lg:text-xl">Metode Pembayaran Favorit</label>
                <div class="flex flex-wrap gap-4">
                    <label><input type="radio" name="preferred_payment_method" value="Cash" {{ old('preferred_payment_method') == 'Cash' ? 'checked' : '' }}> Tunai</label>
                    <label><input type="radio" name="preferred_payment_method" value="Credit/Debit Card" {{ old('preferred_payment_method') == 'Credit/Debit Card' ? 'checked' : '' }}> Kartu Kredit/Debit</label>
                    <label><input type="radio" name="preferred_payment_method" value="Mobile Payment App" {{ old('preferred_payment_method') == 'Mobile Payment App' ? 'checked' : '' }}> Aplikasi Pembayaran</label>
                </div>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="w-full mt-8 btn-primary">Hitung Budget-ku</button>
        </form>

    </article>

    <article class="px-6 py-10 rounded-lg shadow-md bg-secondary lg:w-full">
        <p class="mb-8 font-semibold text-center lg:text-xl">Rincian Budget Bulanan Kamu</p>
        <div id="result-container">
            @if(isset($result) && is_array($result))
                <div class="p-4 mt-4 text-black bg-white border rounded">
                    <h3 class="mb-2 text-lg font-bold">Hasil Prediksi Budget:</h3>
                    <ul>
                        @foreach($result as $key => $value)
                            <li class="py-1 border-b">
                                <span class="font-semibold capitalize">{{ str_replace('_', ' ', $key) }}:</span> 
                                @if(is_numeric($value))
                                    Rp {{ number_format($value, 2, ',', '.') }}
                                @else
                                    {{ $value }}
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <div class="p-4 mt-4 text-center text-gray-500 bg-gray-100 border rounded-lg">
                    <p>Hasil prediksimu akan muncul di sini setelah kamu mengisi data di samping dan menekan tombol hitung.</p>
                </div>
            @endif
        </div>
    </article>
</section>

@endsection