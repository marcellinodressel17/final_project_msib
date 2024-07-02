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
                <h2 class="pt-5" style="font-size: 25px;">Bingung Antara Kerja atau Langsung S2? Ini Alasan Mengapa Kamu Harus Tunda S2 Kamu</h2>
            </header>
            <p>Langsung kerja atau lanjut S2? Dilema ini sering dirasakan oleh fresh graduates atau mereka yang baru saja mendapatkan gelar sarjana. Tentu setiap pilihan memiliki pro dan kontranya sendiri. Bagi para fresh graduates di bidang tertentu seperti kesehatan atau psikologi yang memilih untuk langsung melanjutkan S2 telah menentukan pilihan yang tepat. Namun, para fresh graduates dari bidang lainnya yang memilih untuk langsung S2 kebanyakan takut membuang waktu atau takut ‘keseruan kerja’. Padahal, ada banyak manfaat bagi karier kita jika kita menunda S2 untuk kerja.</p>
            <p>Berikut adalah empat manfaat yang kamu dapatkan jika kamu memilih untuk bekerja dulu sebelum S2:</p>
            <h3 style="font-size: 20px;">1. Mengenal lebih baik bidang studi dan karier yang ingin kamu tekuni</h3>
            <p>Keputusan kamu untuk melanjutkan pendidikan S2 kamu bukanlah keputusan yang ringan. Selain membutuhkan persiapan mental dan finansial, kamu juga harus mempersiapkan bidang apa dan jurusan apa yang kamu ingin tekuni lebih dalam.</p>
            <p>Tentunya, persiapan tersebut harus dibuat matang-matang, karena hal ini akan mempengaruhi jenjang karirmu. Ambillah waktu untuk mencari tahu secara mendalam tentang bidang-bidang yang kamu minati dan hubungannya dengan jenjang karier yang ingin kamu ambil.</p>
            <h3 style="font-size: 20px;">2. Better application for grad school</h3>
            <p>Dengan memiliki waktu lebih untuk mempersiapkan application kamu untuk S2, kamu juga dapat mempersiapkan diri kamu betul-betul untuk mendapatacceptance letter dari universitas impianmu. Cari tahulah tentang universitas impianmu betul-betul, coursework yang mereka tawarkan, dan cari tahu juga apakah apa yang kamu inginkan sesuai dengan apa yang mereka tawarkan.</p>
            <p>Di Amerika Serikat, hanya sekitar 10% sampai 30% kandidat fresh graduatesyang diterima di universitas-universitas untuk melanjutkan S2. Universitas-universitas tidak hanya melihat kualitas kamu berdasarkan nilai saja. Mereka juga akan melihat pengalaman kamu, minat kamu, dan visi kamu ke depannya yang berkaitan dengan karier.</p>
            <p>Tentunya, universitas-universitas tersebut tidak ingin menerima kandidat yang tidak bisa memberikan insight kepada kandidat-kandidat lain (because your grad school includes networking, too). Maka dari itu, penting untuk memiliki pengalaman yang relevan untuk mendukung application kamu.</p>
            <h3 style="font-size: 20px;">3. Better application for your career</h3>
            <p>Jika kamu langsung mengambil S1, kamu akan kehilangan kesempatan untuk mendapatkan pengalaman di pekerjaan entry-level. Selain itu, setelah lulus S2, banyak perusahaan yang tidak akan melirik kamu karena pengalaman kamu yang belum cukup untuk pekerjaan manajerial, sementara kamu overqualified untuk pekerjaan entry-level. </p>
            <p>Yang harus kamu lakukan adalah mendapatkan pengalaman relevan yang cukup setelah kamu lulus dari pendidikan S1 kamu. Dengan pengalaman entry-level yang cukup dan performa akademik yang bagus saat S2, kamu akan memiliki potensi yang lebih besar untuk mendapatkan pekerjaan dengan posisi lebih tinggi di perusahaan.</p>
            <h3 style="font-size: 20px;">4. Pengalaman kerja = pengalaman belajar yang lebih luas</h3>
            <p>Pembelajaran kamu di kelas akan lebih bermakna jika kamu sudah memiliki pengalaman kerja yang berkaitan dengan apa yang kamu pelajari. Dibandingkan dengan seorang fresh graduate yang langsung melanjutkan pendidikan S2, kamu akan lebih mudah mengaitkan dan pelajaran kamu kereal-world events, sehingga pembelajaran kamu lebih efektif. Ditambah lagi, kamu juga tidak akan kesulitan untuk menerapkan apa yang kamu pelajari ke karier kamu nantinya.</p>
            <hr class="mt-4">
        </article>
    </section>
    @include('user-app.footer')
@endsection
