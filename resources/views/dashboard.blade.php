@extends('base')

@section('content')

<!-- Hero -->
<section id="home" class="py-8 flex flex-col lg:flex-row-reverse lg:items-center lg:justify-between lg:min-h-screen lg:px-16">
    <article class="items-center">
        <img class="lg:scale-125" src="{{ asset('assets/finMate.png') }}" alt="">
    </article>
    <!-- kanan -->
    <article class="items-center text-center lg:text-left">
        <h1 class="text-3xl font-bold text-primary mb-6 lg:text-6xl lg:w-4/5 "> Hallo, {{ Auth::user()->name }}</h1>
        <h1 class="text-3xl font-semibold text-black lg:w-4/5 lg:text-5xl"> Yuk, Ambil Kendali Keuanganmu dengan Cara yang Cerdas.</h1>
        <p class="mt-5 text-gray font-semibold ">FinMate bantu Gen Z atur budget bulanan dengan gampang dan tepat.</p>

        <a href="{{ route('calculate') }}">
            <button class="btn-primary w-full mt-8 lg:w-1/4">Atur Budget Sekarang</button>
        </a>

    </article>
    <!-- Kiri -->
</section>

@endsection