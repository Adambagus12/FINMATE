@extends('base')

@section('content')

<!-- Hero -->
<section id="home" class="py-8 flex flex-col lg:flex-row-reverse lg:items-center lg:justify-between lg:min-h-screen lg:px-16">
    <article class="items-center">
        <img class="lg:scale-125" src="{{ asset('assets/finMate.png') }}" alt="">
    </article>
    <!-- kanan -->
    <article class="items-center text-center lg:text-left">
        <h1 class="text-3xl font-bold text-primary mb-6 lg:text-5xl lg:w-4/5 ">Take Control of Your Money, The
            Smart Way.</h1>
        <h1 class="text-3xl font-semibold text-black lg:w-4/5 lg:text-5xl">Personalized, Practical, and Powered
            by AI.</h1>
        <p class="mt-5 text-gray font-semibold ">FinMate helps Gen Z manage monthly budgets with ease.</p>
        <button class="btn-primary w-full mt-8 lg:w-1/4">Learn More</button>
    </article>
    <!-- Kiri -->
</section>
<!-- End Hero -->

<!-- Our Fitur -->
<section id="fitur" class="mt-8 lg:px-16 lg:min-h-screen">
    <article class="py-8">
        <h2
            class="text-center text-xl font-semibold italic lg:text-3xl lg:w-3/4 lg:text-left lg:justify-items-start">
            Built to Make Budgeting Effortless for <span class="text-primary"> Gen Z.</span> Start managing your
            money with ease, anytime, anywhere.</h2>


        <div class="mt-8 flex gap-6 flex-wrap justify-center block lg:justify-between lg:mt-20">
            <div class="card-fitur">
                <div>
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fa-solid fa-brain"></i> <!-- Ganti icon sesuai card -->
                    </div>
                    <h3 class="text-lg font-semibold mb-2 lg:text-xl">Smart Budget Suggestions</h3>
                    <p class="text-sm text-gray-600">
                        Automatically allocate your income based on your needs and lifestyle.
                    </p>
                </div>
                <div class="mt-4">
                    <button
                        class="bg-blue-500 text-white text-sm py-2 px-4 rounded-md hover:bg-blue-600 w-full">
                        Talk With Us
                    </button>
                </div>
            </div>
            <div class="card-fitur">
                <div>
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fa-solid fa-chart-simple"></i> <!-- Ganti icon sesuai card -->
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Personalized Monthly Insights</h3>
                    <p class="text-sm text-gray-600">
                        Get tips and alerts based on your spending habits.
                    </p>
                </div>
                <div class="mt-4">
                    <button
                        class="bg-blue-500 text-white text-sm py-2 px-4 rounded-md hover:bg-blue-600 w-full">
                        Talk With Us
                    </button>
                </div>
            </div>
            <div class="card-fitur">
                <div>
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fa-solid fa-gauge"></i> <!-- Ganti icon sesuai card -->
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Easy-to-Use Dashboard</h3>
                    <p class="text-sm text-gray-600">
                        Track income, expenses, and goals — all in one place.
                </div>
                <div class="mt-4">
                    <button
                        class="bg-blue-500 text-white text-sm py-2 px-4 rounded-md hover:bg-blue-600 w-full">
                        Talk With Us
                    </button>
                </div>
            </div>
            <div class="card-fitur">
                <div>
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fa-solid fa-comments-dollar"></i> <!-- Ganti icon sesuai card -->
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Financial Education</h3>
                    <p class="text-sm text-gray-600">
                        Learn simple budgeting strategies designed for Gen Z.
                    </p>
                </div>
                <div class="mt-4">
                    <button
                        class="bg-blue-500 text-white text-sm py-2 px-4 rounded-md hover:bg-blue-600 w-full">
                        Talk With Us
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
        <h2 class="text-2xl font-semibold italic text-white lg:text-3xl">FinMate YOUR PARTNER TO DEAL</h2>
        <p class="mt-3 text-white italic lg:text-lg">FinMate is a trusted platform dedicated to helping individuals and communities manage their finances with confidence. We combine technology, innovation, and human understanding to deliver financial tools and guidance that truly make a difference.</p>
    </article>

</section>
<!-- End About us -->


<!-- Testimonials -->
<section id="testimonials" class="py-16">
    <article>
        <h1 class="text-3xl font-bold text-center">What <span class="text-primary">Our Client</span> Says</h1>
        <p class="mt-2 font-semibold text-gray text-center">Hear Directly Our Satisfied Client</p>
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
                    “FinMate really changed the way I manage my monthly expenses. The app is simple and effective!”
                </p>
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
                    “Layanan FinMate sangat membantu saya mengatur anggaran keluarga setiap bulan. Super recommended!”
                </p>
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
                    “Thanks to FinMate, I was finally able to track my spending and save money every month.” </p>
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