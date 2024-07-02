@extends('user-app.app')

@section('content')
    <style>
    </style>

    <header class="pt-3">
        <div class="container-fluid" style="background-image: url('/assets/animasi.svg'); width: 100%; height: 250px;">
            <h1 class="text-light text-center"
                style="padding-top: 80px; font-size: 50px; font-family: Poetsen One, sans-serif;">Syarat & Ketentuan</h1>
        </div>
    </header>

    <main>
        <section>
            <div class="container">
                <article class="pt-5">
                    <h2 style="font-size: 25px;"><strong>Kelayakan Umum :</strong></h2>
                    <p>1. Peserta harus merupakan warga negara Indonesia.
                        <br>2. Peserta harus sedang atau akan mengikuti pendidikan di tingkat yang sesuai dengan jenis beasiswa yang ditawarkan (misalnya, SMA, Sarjana, atau Pascasarjana).
                    </p>
                    <h2 style="font-size: 25px;"><strong>Prosedur Website :</strong></h2>
                    <p>1. Mengisi formulir website secara lengkap dan akurat untuk pembuatan akun.</p>
                    <h2 style="font-size: 25px;"><strong> Perubahan Syarat dan Ketentuan :</strong></h2>
                    <p>1. Pihak penyelenggara berhak untuk mengubah syarat dan ketentuan dengan menghubungi admin.</p>
                    <h2 style="font-size: 25px;"><strong>Ketentuan Pihak Penyelenggara :</strong></h2>
                    <p>1. Ketentuan tambahan bisa ditambahkan sesuai dengan kebijakan pihak penyelenggara.</p>
                    <hr class="mt-4" style="width: 1305px;">
                </article>
            </div>
        </section>
    </main>

    @include('user-app.footer')
@endsection
