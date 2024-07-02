@extends('user-app.app')

@section('content')
    <style>
        @keyframes idle {
            from {
                stroke-dashoffset: 24;
            }
        }

        .rating label:hover svg {
            stroke: var(--fill);
        }

        .rating input:checked~label svg {
            transition: 0s;
            animation: idle 4s linear infinite, yippee 0.75s backwards;
            fill: var(--fill);
            stroke: var(--fill);
            stroke-opacity: 0;
            stroke-dasharray: 0;
            stroke-linejoin: miter;
            stroke-width: 8px;
        }

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
                <h1 class="text-light" style="padding-top: 80px; font-family: Poetsen One, sans-serif;">Motivasi Beasiswa</h1>
            </header>
        </div>
    </section>

    <section>
        <article class="container">
            <header>
                <h2 class="pt-5" style="font-size: 25px;">Cerita Inspirasi: Siswi Madrasah Lolos 9 Beasiswa Universitas di Luar Negeri</h2>
            </header>
            <p>Halo teman-teman pencari beasiswa di seluruh nusantara! Kali ini Beasiswa.ID akan membagikan pengalaman nyata dari teman kita Frisca Intan Luzia yang berhasil mendapatkan 9 tawaran beasiswa di universitas luar negeri, sekolah kedinasan serta berhasil lolos SBMPTN. Semoga cerita inspirasi dari Frisca bisa membuat kalian lebih semangat dan melakukan persiapan yang matang sebelum mengajukan aplikasi beasiswa.</p>
            <p>Kesuksesan besar tidak akan digapai dengan usaha biasa-biasa saja, tentunya perlu kesungguhan yang luar biasa dan motivasi tinggi untuk bisa mencapainya, seperti kata pepatah “No pain no gain” atau mungkin “Wa Ma lLdzzatu Illa Ba’da Ta’abi”.</p>
            <hr class="mt-4">
        </article>
    </section>
    @include('user-app.footer')
@endsection
