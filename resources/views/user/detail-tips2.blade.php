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
                <h1 class="text-light" style="padding-top: 80px; font-family: Poetsen One, sans-serif;">Tips Beasiswa</h1>
            </header>
        </div>
    </section>

    <section>
        <article class="container">
            <header>
                <h2 class="pt-5" style="font-size: 25px;">Sebelum Lanjut S2, Tanyakan 3 Hal Ini ke Dirimu</h2>
            </header>
            <p>Beberapa waktu lalu aku mengikuti sebuah acara yang membahas tentang pendidikan pascasarjana di Amerika Serikat. Seperti kebanyakan pengunjung lainnya, ekspektasiku dari mengikuti acara tersebut adalah mengetahui seperti apa rasanya belajar di US, cara membuat recommendation letter, tips-tips membuat personal statement, dan lain-lain. Beberapa pembicara dengan bersemangat menceritakan pengalaman mereka dan memberikan tips tentang cara mendapatkan beasiswa di US.</p>
            <p>Kemudian, sampailah acara pada sesi seorang pembicara yang tiba-tiba membawakan topik yang sangat berbeda dengan apa yang dibawakan oleh pembicara sebelumnya. Alih-alih meyakinkan kami bahwa belajar di US itu baik atau memberikan tips-tips untuk mendapatkan beasiswa, ia malah memberikan saran yang begitu mengena.</p>
            <p>Jeng jeng jeng. Bagiku, ini merupakan saran yang menohok karena memang benar adanya. Di dalam konteks pendidikan pascasarjana, terkadang kita memulai dengan menentukan universitas yang kita mau terlebih dahulu, bukan dari menentukan apa yang kita ingin cari atau butuhkan. Risiko terbesar dari memulai di ujung yang salah adalah besarnya kemungkinan kita memilih langkah yang salah juga.</p>
            <p>Oleh karena itu, aku sangat menyukai langkah yang direkomendasikan oleh Simon Sinek, pembicara TED Talk favoritku. Ia memperkenalkan suatu konsep sangat sederhana yang disebut dengan golden circle.</p>
            <p>Konsep ini menyarankan bahwa kita harusnya memulai pengambilan keputusan dari why. Dalam konteks memilih pendidikan pascasarjana, kita disarankan untuk memulai dengan “Mengapa kita membutuhkan pendidikan pasca sarjana dengan jurusan X di kampus Y?” bukan dengan “Apa yang harus kita lakukan untuk mendapatkan beasiswa pendidikan pascasarjana dengan jurusan X di kampus Y?”</p>
            <hr class="mt-4">
        </article>
    </section>
    @include('user-app.footer')
@endsection
