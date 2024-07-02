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
                <h2 class="pt-5" style="font-size: 25px;">Bagaimana Cara Mendapatkan Beasiswa Kuliah di Luar Negeri?</h2>
            </header>
            <p>“Bagaimana sih caranya bisa mendapatkan beasiswa kuliah di negeri?” <br>“Aku pingin sih kuliah di luar negeri, tapi bisa nggak ya?” <br>Well, beberapa pertanyaan di atas sering banget kita pikirkan saat kita melihat seseorang berhasil mendapatkan beasiswa untuk kuliah di luar negeri. Kita bertanya-tanya dan bahkan sempat ragu apakah kita bisa atau nggak untuk lolos beasiswa kuliah di luar negeri tersebut. Nah, dari beberapa pengalaman mereka yang sudah berhasil mendapatkan beasiswa untuk kuliah di negeri impiannya, kami merangkumnya dalam beberapa tips yang perlu kalian tahu sebelum merencanakan kuliah di luar negeri :</p>
            <h3 style="font-size: 20px;">1. JANGAN RAGU!</h3>
            <p>Pertama yang harus kalian pastikan adalah apa yang menjadi prioritas kalian saat ini. Kuliah? Kerja? Atau Nikah? Kalau kuliah, mau di dalam negeri atau di luar negeri? Setiap orang punya prioritas masing-masing yang berbeda-beda. Kalau kalian yakin untuk melanjutkan studi di luar negeri, mulai saat ini tekadkan diri untuk mencari beasiswa yang dapat mendukung destinasi studi yang kalian impikan. YAKIN dan USAHA!</p>
            <h3 style="font-size: 20px;">2. QUADRUPLE W ( WHY, WHAT, WHERE, & WHEN )</h3>
            <p>Jurusan apa yang diinginkan dan kenapa memilih jurusan tersebut? Tanyakan pada diri kamu sendiri, kamu ingin mendalami pada bidang studi apa. Setelah itu, kamu bisa googling universitas mana yang terbaik sesuai dengan jurusan yang kamu inginkan. Disini kamu bakalan menemukan banyak pilihan terutama memilih antara universitas yang memiliki ranking tinggi di dunia dengan jurusan yang kamu minati dan memiliki ranking tinggi. Sebaiknya kamu mempertimbangkan untuk memilih universitas yang memiliki ranking tinggi untuk jurusan yang kamu minati. Karena biasanya orang-orang yang bekerja di bidang atau jurusan tersebut akan lebih mempertimbangkan karyawan yang berasal dari universitas yang rankingnya lebih tinggi pada jurusan tersebut daripada universitas yang punya ranking tinggi di dunia namun rendah di jurusan tersebut. Selain itu, lihat juga jadwal mereka membuka penerimaan mahasiswa baru. Biasanya dalam setahun terdapat beberapa intake, dan kebanyakan universitas memulai intake pada bulan September. Dengan mengetahui informasi ini, kamu jadi bisa planning dan persiapan lebih awal untuk mengambil intake yang mana.</p>
            <h3 style="font-size: 20px;">3. HOW?</h3>
            <p>Setelah mendapatkan referensi universitas yang kamu minati, saatnya buat mengumpulkan persyaratan yang diminta. Pada dasarnya yang diminta oleh universitas adalah ijazah, transkrip, dan dokumen dasar lainnya. Selain itu, kamu juga perlu mempersiapkan dari awal untuk TOEFL / IELTS, Surat Referensi yang berjumlah 2 buah biasanya dari dosen dan dari atasan tempat kamu bekerja, serta motivation letter. Di motivation letter ini kamu benar-benar harus perhatikan karena biasanya mereka akan menilai apakah kamu sesuai atau tidak dengan kriteria mereka terutama bagi universitas yang tidak mengadakan interview. Disini sebaiknya kamu tunjukkan kelebihan diri kamu dan kasih alasan yang jelas mengapa kamu ingin kuliah di universitas tersebut.</p>
            <h3 style="font-size: 20px;">4. GET SCHOLARSHIP</h3>
            <p>Kalau kamu mendaftar kuliah di luar negeri berdasarkan beasiswa, sebaiknya sambil mencari universitas yang kamu tuju juga sambil mencari beasiswa yang dapat kamu apply nantinya. Beasiswa terdapat berbagai macam, ada yang harus dapat beasiswa dulu baru penentuan universitasnya belakangan ( seperti Fulbright Scholarship ), ada juga beasiswa yang mensyaratkan untuk harus ada LoA ( Letter of Acceptance ) dari universitas yang kamu tuju baru bisa di apply beasiswanya ( misal DIKTI, Diknas, dan LPDP ), lalu ada juga beasiswa dari pemerintah Indonesia dengan negara yang dituju ( misal beasiswa Chevening untuk destinasi Inggris ), dan ada juga beasiswa yang disediakan dari universitas yang dituju itu sendiri.</p>
            <hr class="mt-4">
        </article>
    </section>
    @include('user-app.footer')
@endsection
