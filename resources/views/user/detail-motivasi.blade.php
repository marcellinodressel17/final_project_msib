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
                <h1 class="text-light" style="padding-top: 80px; font-family: Poetsen One, sans-serif;">Motivasi Beasiswa</h1>
            </header>
        </div>
    </section>

    <section>
        <article class="container">
            <header>
                <h2 class="pt-5" style="font-size: 25px;">Percaya Diri, Kunci Meraih Beasiswa ke Luar Negeri</h2>
            </header>
            <p>“Jon, sebenarnya apa sih kunci meraih beasiswa?” tanya Tono.
                “Kuncinya ada pada diri masing-masing Ton, kayak kamu yang punya kunci atas kamarmu sendiri, begitu juga dengan aku,” jawab Jono.</p>
            <p>Itu tadi percakapan antara Tono dan Jono mengenai kunci untuk bisa mendapatkan beasiswa ke luar negeri, yang ternyata Jono menjawab ada pada diri kita sendiri. Dari ilustrasi jawaban Jono, maka dapat dijabarkan secara rinci beserta contohnya berikut ini:</p>
            <p>Terkadang saat kita melihat si kawan peraih beasiswa memposting kegiatan foto-fotonya yang di luar negeri melalui timeline Facebook, Instagram dan beragam sosial media seakan jiwa ini terusik. Antara rasa iri dan penyemangat untuk segera mendaftar beasiswa keluar negeri. Padahal tentu tak ada jalan mudah untuk menggapai sebuah cita-cita, terutama meraih beasiswa. Juga tak sulit bagi mereka yang sudah tahu jalan untuk meraih beasiswa. Namun adakah yang membuat kita, terutama yang baru pertama kali mencoba mendaftar beasiswa, bisa meraihnya dengan mudah?</p>
            <p>Saya menyebutnya percaya diri sebagai awal dari semua langkah kita bila ingin meraih beasiswa. Mengapa? Bila kita dari awal sudah tak ada rasa percaya diri, buat apa kita jauh-jauh memikirkan hiruk pikuk dan langkah demi langkah proses seleksi yang masih jauh rasanya. Meskipun kadang tak dipungkiri kita lemah di beberapa persyaratan, misalkan Bahasa Inggris dan bahasa penunjuang lainnya, tergantung negara mana yang mau dituju. Wajar bila kita kadang kurang percaya diri, namun bukan berarti kamu tak mau belajar dari hal-hal yang dianggap kamu anggap kurang. Maka ada beberapa langkah yang perlu kamu ambil agar percaya diri itu tumbuh.</p>
            <p>Diperlukan niat, kesabaran, dan usaha yang kuat. Sebagian dari kita yang awalnya mempunyai niat besar belajar di luar negeri merasa sibuk dengan urusannya masing-masing dan akhirnya memilih mengundurkan diri dari melamar beasiswa ini. Padahal mungkin dari kita sudah melengkapi sebagian persyaratannya. Kita merasa tidak sanggup karena kita berpikir persyaratannya terlalu rumit. Padahal kebanyakan beasiswa luar negeri yang ditawarkan memang seperti itu, membutuhkan banyak persyaratan yang harus disiapkan untuk mencari mahasiswa sesuai kriteria penyedia beasiswa, sehingga membutuhkan niat, kesabaran, serta usaha yang kuat dalam mengurusnya.</p>
            <p>Secara tidak langsung dan tidak sadar langkah tersebut seperti menyeleksi diri sendiri untuk tidak diterima beasiswa. Padahal bagi penyedia beasiswa, persyaratan tersebut digunakan untuk referensi siapa diri anda, apakah Anda orang pilihan yang sesuai kriteria mereka? Untuk menjadi tidak biasa, kita harus menjadi luar biasa, luar biasa dalam niat, kesabaran, dan usaha. Dan semua itu ada pada diri sendiri!</p>
            <hr class="mt-4">
        </article>
    </section>
    @include('user-app.footer')
@endsection
