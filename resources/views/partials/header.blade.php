<header class="py-2 px-4 lg:py-1 border-b-2 border-primary">
    <div class="flex items-center justify-between">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-28 h-auto" />

        <nav class="hidden lg:flex gap-8 items-center">
            <a href="{{ url('/') }}" class="text-black font-medium hover:text-primary">Home</a>
            <a href="#" class="text-black font-medium hover:text-primary">About Us</a>
            <a href="#" class="text-black font-medium hover:text-primary">Testimonials</a>
            <a href="#" class="text-black font-medium hover:text-primary">Contact Us</a>
        </nav>

        <div class="flex items-center gap-4">
            <div class="hidden lg:flex gap-3">
                @guest
                    <a href="{{ route('login') }}" class="px-8 btn-primary">Login</a>
                    <a href="{{ route('register') }}" class="px-6 btn-line">Register</a>
                @else
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn-line px-6 py-3 rounded-full font-semibold">Logout</button>
                    </form>
                @endguest
            </div>
            <button id="menu-toggle" class="lg:hidden text-primary text-2xl">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>

    <nav id="mobile-menu" class="hidden flex flex-col gap-3 mt-4 rounded-xl p-4 lg:hidden">
        <a href="{{ url('/') }}" class="text-black font-semibold hover:text-primary">Home</a>
        <a href="#" class="text-black font-semibold hover:text-primary">About Us</a>
        <a href="#" class="text-black font-semibold hover:text-primary">Testimonials</a>
        <a href="#" class="text-black font-semibold hover:text-primary">Contact Us</a>

        <div class="flex flex-col gap-2 mt-4">
            @guest
                <a href="{{ route('login') }}" class="btn-primary text-center">Login</a>
                <a href="{{ route('register') }}" class="btn-line text-center">Register</a>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-line">Logout</button>
                </form>
            @endguest
        </div>
    </nav>
</header>
