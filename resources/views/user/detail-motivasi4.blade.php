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
                <h2 class="pt-5" style="font-size: 25px;">Pengalaman Beasiswa LPDP dari Achmad Rofi Irsyad</h2>
            </header>
            <p>Berbicara mengenai beasiswa pendidikan semua orang pasti sangat ingin mendapatkan beasiswa tersebut, LPDP salah satunya. Beasiswa LPDP merupakan beasiswa paling bergengsi yang di sediakan oleh pemerintah indonesia khusus anak indonesia yang memiliki jiwa kepemimpinan, berprestasi dan berjiwa sosial.</p>
            <p>Dengan Beasiswa Pendidikan Indonesia (BPI) oleh Lembaga Pengelola Dana Pendidikan (LPDP). Melanjutkan kuliah program master dan doktor di luar negeri kini bukan mimpi lagi. Pasalnya, beragam beasiswa akan membantumu menanggung biaya kuliah, bahkan biaya hidup di luar negeri. Namun untuk mendaftar beasiswa ini setidaknya kamu harus memenuhi beberapa persyaratan umum berikut.</p>
            <h2 style="font-size: 20px;">1. Warga Negara Indonesia (WNI)</h2>
            <p>Pendaftar harus orang Indonesia karena saat lulus nanti mereka diwajibkan kembali ke Tanah Air.</p>
            <h2 style="font-size: 20px;">2. Telah Menyelesaikan Studi Program Sarjana atau Magister</h2>
            <p>Pendaftar adalah lulusan perguruan tinggi di dalam negeri yang terakreditasi oleh BAN-PT. Lulusan perguruan tinggi kedinasan dalam negeri atau perguruan tinggi di luar negeri yang terdaftar pada Kemristekdikti juga diperkenankan untuk mendaftar.</p>
            <h2 style="font-size: 20px;">3. Memiliki Karakter</h2>
            <p>Calon penerima beasiswa harus memiliki karakter, di antaranya kepemimpinan, profesionalisme, nasionalisme, patriotisme, integritas, memiliki kepercayaan diri, kegigihan, kemandirian, serta mampu beradaptasi.</p>
            <h2 style="font-size: 20px;">4. Aktif</h2>
            <p>Pendaftar beasiwa adalah orang yang berpartisipasi dalam kegiatan sosial kemasyarakatan, keilmuan, inovasi, kreasi, atau budaya.</p>
            <h2 style="font-size: 20px;">5. Memenuhi Beberapa Surat Pernyataan</h2>
            <p>Beberapa pernyataan yang harus dipenuhi, seperti bersedia kembali ke Indonesia, tidak sedang atau pernah terlibat dalam tindakan melanggar hukum, tidak sedang menerima beasiswa lain, serta mau mengabdi dan setia terhadap bangsa.</p>
            <hr class="mt-4">
        </article>
    </section>
    @include('user-app.footer')
@endsection
