<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome To FinMate</title>

    @vite(['resources/css/input.css', 'resources/js/main.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main>
        <header class="py-2 px-4 lg:py-1 border-b-2 border-primary">
            <div class="flex items-center justify-between">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-28 h-auto" />

                <nav class="hidden lg:flex gap-8 items-center">
                    <a href="#" class="text-black font-medium hover:text-primary">Home</a>
                    <a href="#" class="text-black font-medium hover:text-primary">About Us</a>
                    <a href="#" class="text-black font-medium hover:text-primary">Testimonials</a>
                    <a href="#" class="text-black font-medium hover:text-primary">Contact Us</a>
                </nav>

                <div class="flex items-center gap-4">
                    <div class="hidden lg:flex gap-3">
                        <a href="{{ url('/login') }}" class="px-8 btn-primary">Login</a>
                        <a href="{{ url('/register') }}" class="px-6 btn-line">Register</a>
                    </div>

                    <button id="menu-toggle" class="lg:hidden text-primary text-2xl">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>

            <nav id="mobile-menu" class="hidden flex flex-col gap-3 mt-4 rounded-xl p-4 lg:hidden">
                <a href="#" class="text-black font-semibold hover:text-primary">Home</a>
                <a href="#" class="text-black font-semibold hover:text-primary">About Us</a>
                <a href="#" class="text-black font-semibold hover:text-primary">Testimonials</a>
                <a href="#" class="text-black font-semibold hover:text-primary">Contact Us</a>

                <div class="flex flex-col gap-2 mt-4">
                    <a href="{{ url('/login') }}" class="btn-primary text-center">Login</a>
                    <a href="{{ url('/register') }}" class="btn-line text-center">Register</a>
                </div>
            </nav>
        </header>

        <section class="py-8 flex flex-col lg:flex-row-reverse lg:items-center lg:justify-between lg:min-h-screen lg:py-20">
            <article class="items-center">
                <img src="{{ asset('assets/finMate.png') }}" alt="" />
            </article>
           
            <article class="items-center text-center">
                <h1 class="text-2xl font-semibold text-primary mb-4">Take Control of Your Money, The Smart Way.</h1>
                <h1 class="text-2xl font-semibold text-black">Personalized, Practical, and Powered by AI.</h1>
                <p class="mt-5 text-gray font-semibold">FinMate helps Gen Z manage monthly budgets with ease.</p>
                <button class="btn-primary w-full mt-6">Learn More</button>
            </article>
        
        </section>
        
    </main>
</body>
</html>
