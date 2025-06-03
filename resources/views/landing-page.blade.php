@extends('base')

@section('content')

<!-- Hero -->
<section id="home" class="py-8 flex flex-col lg:flex-row-reverse lg:items-center lg:justify-between lg:min-h-screen lg:px-16">
    <article class="items-center">
        <img class="lg:scale-125" src="{{ asset('assets/finMate.png') }}" alt="">
    </article>
    <!-- kanan -->
    <article class="items-center text-center lg:text-left">
        <h1 class="text-3xl font-bold text-primary mb-6 lg:text-5xl lg:w-4/5 ">Kendalikan Uangmu dengan Cara yang Cerdas.</h1>
        <h1 class="text-3xl font-semibold text-black lg:w-4/5 lg:text-5xl">Personalisasi, Praktis, dan Didukung oleh AI.</h1>
        <p class="mt-5 text-gray font-semibold ">FinMate bantu Gen Z kelola anggaran bulanan dengan lebih mudah.</p>
        <button class="btn-primary w-full mt-8 lg:w-1/4">Selengkapnya</button>
    </article>
    <!-- Kiri -->
</section>
<!-- End Hero -->

<!-- Our Fitur -->
<section id="fitur" class="mt-8 lg:px-16 lg:min-h-screen">
    <article class="py-8">
        <h2
            class="text-center text-xl font-semibold italic lg:text-3xl lg:w-3/4 lg:text-left lg:justify-items-start">
            Dirancang agar Mengatur Anggaran Jadi Mudah untuk <span class="text-primary"> Gen Z.</span> Mulai kelola keuanganmu dengan mudah, kapan saja dan di mana saja.</h2>


        <div class="mt-8 flex gap-6 flex-wrap justify-center block lg:justify-between lg:mt-20">
            <div class="card-fitur">
                <div>
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fa-solid fa-brain"></i> <!-- Ganti icon sesuai card -->
                    </div>
                    <h3 class="text-lg font-semibold mb-2 lg:text-xl">Saran Anggaran Cerdas</h3>
                    <p class="text-sm text-gray-600">
                        Gaji kamu bakal langsung dibagi otomatis sesuai kebutuhan & gaya hidup kamu. Anti ribet, tinggal pakai. </p>
                </div>
                <div class="mt-4">
                    <button
                        class="bg-blue-500 text-white text-sm py-2 px-4 rounded-md hover:bg-blue-600 w-full">
                        Ngobrol Yuk!
                    </button>
                </div>
            </div>
            <div class="card-fitur">
                <div>
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fa-solid fa-chart-simple"></i> <!-- Ganti icon sesuai card -->
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Insight Bulanan yang Personal</h3>
                    <p class="text-sm text-gray-600">
                        Dapetin tips dan notifikasi sesuai kebiasaan kamu belanja. Jadi bisa sadar sebelum kalap!
                    </p>
                </div>
                <div class="mt-4">
                    <button
                        class="bg-blue-500 text-white text-sm py-2 px-4 rounded-md hover:bg-blue-600 w-full">
                        Ngobrol Yuk!
                    </button>
                </div>
            </div>
            <div class="card-fitur">
                <div>
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fa-solid fa-gauge"></i> <!-- Ganti icon sesuai card -->
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Dashboard Super Gampang</h3>
                    <p class="text-sm text-gray-600">
                        Pantau semua pemasukan, pengeluaran, dan goals kamu dalam satu tampilan simpel.
                </div>
                <div class="mt-4">
                    <button
                        class="bg-blue-500 text-white text-sm py-2 px-4 rounded-md hover:bg-blue-600 w-full">
                        Ngobrol Yuk!
                    </button>
                </div>
            </div>
            <div class="card-fitur">
                <div>
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fa-solid fa-comments-dollar"></i> <!-- Ganti icon sesuai card -->
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Belajar Finansial Anti Ngebosenin</h3>
                    <p class="text-sm text-gray-600">
                        Strategi ngatur duit yang simpel dan relate banget buat Gen Z. Belajar dikit-dikit, jadi jago ngatur keuangan.
                    </p>
                </div>
                <div class="mt-4">
                    <button
                        class="bg-blue-500 text-white text-sm py-2 px-4 rounded-md hover:bg-blue-600 w-full">
                        Ngobrol Yuk!
                    </button>
                </div>
            </div>
        </div>
    </article>
</section>
<!-- end out fitur -->


<!-- About us -->
<section id="about" class="bg-primary -mx-6 px-6 py-16 flex flex-col items-center">
    <!-- Right side (teks) -->
    <article class="text-center lg:w-2/5">
        <h2 class="text-2xl font-semibold italic text-white lg:text-3xl">FinMate, Teman Andalan Buat Ngatur Duit</h2>
        <p class="mt-3 text-white italic lg:text-lg">inMate hadir buat bantu kamu dan komunitas kamu jadi lebih pede ngatur keuangan. Teknologi, inovasi, dan empati kita gabungin biar kamu punya alat & arahan finansial yang beneran berguna.</p>
    </article>

</section>
<!-- End About us -->


<!-- Testimonials -->
<section id="testimonials" class="py-16">
    <article>
        <h1 class="text-3xl font-bold text-center">Apa <span class="text-primary">Kata Mereka</span> Tentang FinMate</h1>
        <p class="mt-2 font-semibold text-gray text-center">Langsung dari Pengguna yang Udah Coba Sendiri</p>
    </article>

    <article class="mt-12 flex flex-col gap-8 lg:flex-row lg:gap-8 lg:px-16 lg:mt-20 lg:mb-20 lg:justify-center">
        <div class="bg-secondary flex flex-col justify-between h-full py-4 px-6 rounded-xl shadow-md lg:w-1/5 min-h-[300px]">
            <div>
                <div class="flex justify-end">
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                </div>
                <p class="mt-6 text-lg">
                    “FinMate tuh bener-bener ngerubah cara aku ngatur pengeluaran bulanan. Simple tapi ngaruh banget!” </p>
            </div>

            <!-- USER -->
            <div class="flex items-center gap-3 pt-6">
                <img src="../assets/pp.png" alt="profile" width="30" class="rounded-full">
                <p class="text-gray font-semibold text-sm">Aulia Rahman</p>
            </div>
        </div>
        <div class="bg-secondary flex flex-col justify-between h-full py-4 px-6 rounded-xl shadow-md lg:w-1/5 min-h-[300px]">
            <div>
                <div class="flex justify-end">
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                </div>
                <p class="mt-6 text-lg">
                    “Fitur FinMate bikin aku lebih gampang atur budget keluarga tiap bulan. Parah sih, recommended!” </p>
            </div>

            <!-- USER -->
            <div class="flex items-center gap-3 pt-6">
                <img src="../assets/pp.png" alt="profile" width="30" class="rounded-full">
                <p class="text-gray font-semibold text-sm">Cecep</p>
            </div>
        </div>
        <div class="bg-secondary flex flex-col justify-between h-full py-4 px-6 rounded-xl shadow-md lg:w-1/5 min-h-[300px]">
            <div>
                <div class="flex justify-end">
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                </div>
                <p class="mt-6 text-lg">
                    “Dulu susah banget nabung, sekarang bisa tracking semua pengeluaran. Makasih FinMate!”
            </div>

            <!-- USER -->
            <div class="flex items-center gap-3 pt-6">
                <img src="../assets/pp.png" alt="profile" width="30" class="rounded-full">
                <p class="text-gray font-semibold text-sm">Wida Mudrikah</p>
            </div>
        </div>
        <div class="bg-secondary flex flex-col justify-between h-full py-4 px-6 rounded-xl shadow-md lg:w-1/5 min-h-[300px]">
            <div>
                <div class="flex justify-end">
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                    <i class="fa-solid fa-star text-yellow-500"></i>
                </div>
                <p class="mt-6 text-lg">
                    “FinMate really changed the way I manage my monthly expenses. The app is simple and effective!”
                </p>
            </div>

            <!-- USER -->
            <div class="flex items-center gap-3 pt-6">
                <img src="../assets/pp.png" alt="profile" width="30" class="rounded-full">
                <p class="text-gray font-semibold text-sm">Jhon Due</p>
            </div>
        </div>
    </article>
</section>
<!-- End Testimonials -->


@endsection