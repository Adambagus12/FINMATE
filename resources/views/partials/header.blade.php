<header class="py-2 px-4 lg:py-1 border-b-2 border-primary bg-white">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex-shrink-0">
            <img src="{{ asset('assets/logo.png') }}" alt="FinMate Logo" class="w-28 h-auto" />
        </a>

        <!-- Desktop Navigation (hanya tampil untuk guest) -->
        @guest
        <nav class="hidden lg:flex gap-8 items-center">
            <a href="{{ url('/') }}" class="text-black font-medium hover:text-primary">Beranda</a>
            <a href="#" class="text-black font-medium hover:text-primary">Tentang Kami</a>
            <a href="#" class="text-black font-medium hover:text-primary">Testimoni</a>
            <a href="#" class="text-black font-medium hover:text-primary">Kontak Kami</a>
        </nav>
        @endguest

        <!-- User Section -->
        <div class="flex items-center gap-4">
            <!-- Authenticated User -->
            @auth
                @php
                    $name = Auth::user()->name;
                    $avatarUrl = "https://ui-avatars.com/api/?name=" . urlencode($name) . "&background=0D8ABC&color=fff";
                @endphp

                <div class="relative flex items-center gap-3">
                    <img src="{{ $avatarUrl }}" alt="Avatar" class="w-10 h-10 rounded-full border-2 border-primary cursor-pointer" id="avatar-btn">
                    <p class="text-gray-800 font-semibold hidden lg:block">Hi, {{ $name }}</p>

                    <!-- Dropdown -->
                    <div id="dropdown-menu" class="hidden absolute right-0 mt-14 w-40 bg-white border rounded-md shadow-lg z-50">
                        <div class="px-4 py-2 text-sm text-gray-700 border-b">{{ $name }}</div>

                        <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard Saya</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</button>
                        </form>
                    </div>
                </div>
            @endauth

            <!-- Guest -->
            @guest
                <div class="hidden lg:flex gap-3">
                    <a href="{{ route('login') }}" class="px-8 btn-primary">Masuk</a>
                    <a href="{{ route('register') }}" class="px-6 btn-line">Daftar</a>
                </div>
            @endguest

            <!-- Mobile toggle -->
            <button id="menu-toggle" class="lg:hidden text-primary text-2xl">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <nav id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-200 mt-2">
        <div class="px-4 py-3 space-y-2">
            <a href="{{ url('/') }}" class="text-black font-semibold hover:text-primary block">Beranda</a>
            <a href="#" class="text-black font-semibold hover:text-primary block">Tentang Kami</a>
            <a href="#" class="text-black font-semibold hover:text-primary block">Testimoni</a>
            <a href="#" class="text-black font-semibold hover:text-primary block">Kontak Kami</a>

            <!-- Auth -->
            @auth
                <div class="mt-4 space-y-2">
                    <p class="text-gray-800 font-semibold">Hi, {{ Auth::user()->name }}</p>
                    <a href="{{ route('dashboard') }}" class="block btn-line text-center">Dashboard Saya</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full btn-line text-center">Keluar</button>
                    </form>
                </div>
            @endauth

            <!-- Guest -->
            @guest
                <div class="mt-4 space-y-2">
                    <a href="{{ route('login') }}" class="block btn-primary text-center">Masuk</a>
                    <a href="{{ route('register') }}" class="block btn-line text-center">Daftar</a>
                </div>
            @endguest
        </div>
    </nav>
</header>
