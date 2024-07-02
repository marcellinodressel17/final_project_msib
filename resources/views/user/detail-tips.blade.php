@extends('user-app.app')

@section('content')
    <style>
        @keyframes yippee {
            0% {
                transform: scale(1);
                fill: var(--fill);
                fill-opacity: 0;
                stroke-opacity: 1;
                stroke: var(--stroke);
                stroke-dasharray: 10;
                stroke-width: 1px;
                stroke-linejoin: bevel;
            }

            30% {
                transform: scale(0);
                fill: var(--fill);
                fill-opacity: 0;
                stroke-opacity: 1;
                stroke: var(--stroke);
                stroke-dasharray: 10;
                stroke-width: 1px;
                stroke-linejoin: bevel;
            }

            30.1% {
                stroke: var(--fill);
                stroke-dasharray: 0;
                stroke-linejoin: miter;
                stroke-width: 8px;
            }

            60% {
                transform: scale(1.2);
                fill: var(--fill);
            }
        }
    </style>

    <section class="pt-3">
        <div class="container-fluid" style="background-image: url('/assets/animasi.svg'); width: 100%; height: 250px;">
            <header class="text-center">
                <h1 class="text-light" style="padding-top: 80px; font-family: Poetsen One, sans-serif;">Tips Beasiswa</h1>
            </header>
        </div>
    </section>

    <section>
        <article class="container">
            <header>
                <h2 class="pt-5" style="font-size: 25px;">Tips Raih Beasiswa LPDP 2017/2018 di Luar Negeri</h2>
            </header>
            <p>Ada banyak cara untuk melanjutkan kuliah keluar negeri, salah satunya adalah mendaftarkan diri melalui program Beasiswa Pendidikan Indonesia yang dikelola oleh LPDP. Beasiswa LPDP membuka kesempatan Anda untuk melanjutkan program magister dan doktor di dalam dan luar negeri. Berikut ini adalah wawancara eksklusif langsung dari penerima beasiswa LPDP yang akan menjelaskan tips raih beasiswa LPDP 2017</p>
            <hr class="mt-4">
        </article>
    </section>
    @include('user-app.footer')
@endsection
