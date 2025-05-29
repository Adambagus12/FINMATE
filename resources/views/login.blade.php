<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    @vite(['resources/css/input.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<body class="min-h-screen flex flex-col">

    <main class="flex flex-col gap-5 lg:flex-row lg:justify-between lg:px-32 mt-6">
        <section class="flex flex-col gap-5 lg:w-1/2">
            <article class="bg-secondary py-8 px-6 rounded-2xl lg:h-full">
                <h2 class="text-2xl font-semibold text-black lg:text-3xl">FinMate</h2>
                <h1 class="text-3xl text-black mt-4 lg:text-4xl">Selamat Datang di FinMate</h1>
                <p class="text-gray text-sm pt-2 lg:text-lg">Silakan masuk dengan akun kamu.</p>

                {{-- Notifikasi sukses (misal dari registrasi) --}}
                @if(session('success'))
                    <div class="mb-4 p-3 bg-green-200 text-green-800 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Error Validasi --}}
                @if($errors->any())
                    <div class="mb-4 p-3 bg-red-200 text-red-800 rounded">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>- {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="pt-10 flex flex-col gap-5 lg:gap-7">
                    @csrf
                    <div class="relative">
                        <input class="rounded-3xl" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus class="w-full pl-12" />
                        <i class="fa-solid fa-envelope text-primary text-2xl absolute top-3 left-3"></i>
                    </div>
                    <div class="relative">
                        <input class="rounded-3xl" type="password" id="password" name="password" placeholder="Password" required class="w-full pl-12" />
                        <i class="fa-solid fa-lock text-primary text-2xl absolute top-3 left-3"></i>
                        <button type="button" onclick="togglePassword('password', this)" class="absolute right-3 top-3 text-gray-500">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>

                    <button class="btn-primary" type="submit">Masuk</button>
                </form>

                <p class="text-center mt-6 font-semibold">Belum punya akun? <a href="{{ route('register') }}" class="text-primary underline cursor-pointer">Daftar</a></p>
            </article>
            <article class="bg-secondary py-8 px-6 rounded-2xl flex gap-4 items-center">
                <img src="{{ asset('assets/img-login.png') }}" alt="img login" class="w-auto" />
                <p class="text-sm text-gray">Bergabung dengan 20 ribu pengguna! Lihat bagaimana kami membantu mereka.</p>
            </article>
        </section>

        <section class="bg-secondary py-8 px-6 rounded-2xl hidden lg:block w-1/2">
            <h3 class="text-gray w-3/4 text-lg">Teman setia pengelola keuangan bulananmu! Biarkan <span class="text-primary">FinMate</span> yang mengatur.</h3>
            <img src="{{ asset('assets/finMate.png') }}" alt="finmate" class="w-[80%]" />
            <h1 class="text-2xl font-semibold"><span class="text-primary">FinMate</span> bukan sekadar alat, tapi pendamping keuanganmu.</h1>
        </section>
    </main>

    <script>
        function togglePassword(fieldId, btn) {
            const field = document.getElementById(fieldId);
            if (field.type === "password") {
                field.type = "text";
                btn.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
            } else {
                field.type = "password";
                btn.innerHTML = '<i class="fa-solid fa-eye"></i>';
            }
        }
    </script>
</body>
</html>
