@extends('user-app.app')

@section('content')
    <style>
    </style>

    <header class="pt-3">
        <div class="container-fluid" style="background-image: url('/assets/animasi.svg'); width: 100%; height: 250px;">
            <h1 class="text-light text-center"
                style="padding-top: 80px; font-size: 50px; font-family: Poetsen One, sans-serif;">Kebijakan Privasi</h1>
        </div>
    </header>

    <main>
        <section>
            <div class="container">
                <article class="pt-5">
                    <h2 style="font-size: 25px;"><strong>Informasi yang Dikumpulkan :</strong></h2>
                    <p>1. Kami dapat mengumpulkan informasi pribadi pada saat Anda mengunjungi layanan kami, termasuk namun tidak terbatas pada: nama, alamat email, nomor telepon saja.
                    </p>
                    <h2 style="font-size: 25px;"><strong>Tujuan Pengumpulan Informasi :</strong></h2>
                    <p>1. Informasi pribadi Anda dapat digunakan untuk:
                        Mengelola dan mengevaluasi website beasiswa. <br>2. Mengirimkan pemberitahuan dan informasi terkait status aplikasi. <br>3. Menyediakan layanan pelanggan dan dukungan. Mematuhi peraturan dan kebijakan yang berlaku.</p>
                    <h2 style="font-size: 25px;"><strong>Keamanan Informasi :</strong></h2>
                    <p>1. Kami mengimplementasikan langkah-langkah keamanan fisik, teknis, dan administratif yang sesuai untuk melindungi informasi pribadi Anda dari akses yang tidak sah atau tidak sah, pengungkapan, perubahan, atau penghancuran.</p>
                    <h2 style="font-size: 25px;"><strong>Akses dan Pilihan :</strong></h2>
                    <p> 1. Anda memiliki hak untuk mengakses, memperbarui, atau menghapus informasi pribadi Anda yang kami simpan. Silakan hubungi kami jika Anda memiliki pertanyaan atau permintaan terkait ini.</p>
                    <h2 style="font-size: 25px;"><strong>Kontak Kami :</strong></h2>
                    <p> 1. Jika Anda memiliki pertanyaan atau kekhawatiran tentang kebijakan privasi kami, silakan hubungi kami di [alamat email kontak].</p>
                    <hr class="mt-4" style="width: 1305px;">
                </article>
            </div>
        </section>
    </main>

    @include('user-app.footer')
@endsection
