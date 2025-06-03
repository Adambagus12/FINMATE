@extends('base')

@section('content')

<section class="py-12 ">
    <h1 class="text-2xl font-semibold text-primary text-center lg:text-left lg:px-28">Budgeting Pintar, Gak Ribet</h1>
    <p class="mt-4 text-center font-semibold italic lg:text-left lg:px-28">Masukin penghasilan kamu, tambah kebutuhan bulanan, dan biar FinMate yang ngatur budget-nya.</p>
</section>

<section class="flex flex-col gap-8 pb-24 lg:flex-row lg:justify-between lg:px-28 lg:gap-28 lg:mb-28">
    <article class="bg-secondary py-10 px-6 rounded-lg shadow-md lg:w-full lg:py-16">
        <div class="flex flex-col gap-3 mb-4">
            <label class="rounded-3xl" class="font-semibold lg:text-xl" for="income">Masukin Penghasilan Kamu</label>
            <input class="rounded-3xl" class="rounded-3xl" type="number">
        </div>
        <div class="flex flex-col gap-3 mb-4 lg:gap-6">
            <label class="rounded-3xl" class="font-semibold lg:text-xl" for="income">Tambah Kategori Pengeluaran</label>
            <input class="rounded-3xl" type="text" value="Transportasi">
            <input class="rounded-3xl" type="text" value="Makan">
            <input class="rounded-3xl" type="text" value="Listrik">
        </div>

        <div class="flex items-center">
            <input  class="rounded-3xl" type="text" name="new-value" placeholder="Tambah kategori baru" class="flex-1" />
            <button
                class="ml-4 w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center hover:bg-primary/80 transition shadow-md">
                <i class="fa-solid fa-plus"></i>
            </button>
        </div>

        <button class="mt-8 btn-primary w-full">Hitung Budget-ku</button>
    </article>

    <article class="bg-secondary py-10 px-6 rounded-lg shadow-md lg:w-full">
        <p class="text-center font-semibold mb-8 lg:text-xl">Rincian Budget Bulanan Kamu</p>

        <table class="w-full text-sm lg:text-lg">
            <!-- Header -->
            <thead>
                <tr class="bg-primary text-white text-left">
                    <th class="px-4 py-3 rounded-tl-lg">Kategori</th>
                    <th class="px-4 py-3 rounded-tr-lg text-right">Jumlah</th>
                </tr>
            </thead>

            <!-- Body -->
            <tbody class="text-black">
                <tr class="border-b border-primary/30">
                    <td class="px-4 py-3">Kost</td>
                    <td class="px-4 py-3 text-right">Rp. 700.000</td>
                </tr>
                <tr class="border-b border-primary/30">
                    <td class="px-4 py-3">Makan</td>
                    <td class="px-4 py-3 text-right">Rp. 800.000</td>
                </tr>
                <tr class="border-b border-primary/30">
                    <td class="px-4 py-3">Transport</td>
                    <td class="px-4 py-3 text-right">Rp. 200.000</td>
                </tr>
                <tr class="border-b border-primary/30">
                    <td class="px-4 py-3">Skincare</td>
                    <td class="px-4 py-3 text-right">Rp. 250.000</td>
                </tr>
                <tr>
                    <td class="px-4 py-3">Ngopi</td>
                    <td class="px-4 py-3 text-right">Rp. 150.000</td>
                </tr>
            </tbody>
        </table>
    </article>
</section>


@endsection