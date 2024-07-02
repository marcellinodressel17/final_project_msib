@extends('user-app.app')

@section('content')
<style>
    /* Icon Rating */
    .rating {
        display: flex;
        justify-content: start;
        flex-direction: row-reverse;
        gap: 0.3rem;
        --stroke: #666;
        --fill: #ffc73a;
    }

    .rating input {
        appearance: unset;
    }

    .rating label {
        cursor: pointer;
    }

    .rating svg {
        width: 2rem;
        height: 2rem;
        overflow: visible;
        fill: transparent;
        stroke: var(--stroke);
        stroke-linejoin: bevel;
        stroke-dasharray: 12;
        animation: idle 4s linear infinite;
        transition: stroke 0.2s, fill 0.5s;

    }

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
            <h1 class="text-light" style="padding-top: 80px; font-family: Poetsen One, sans-serif;">Detail Beasiswa</h1>
        </header>
    </div>
</section>

<section>
    <article class="container">
        <header>
            <h2 class="pt-5" style="font-size: 25px;">{{ $beasiswa->title }}</h2>
        </header>
        <p>{{ $beasiswa->description_long }}</p>
        <hr class="mt-4">
        <!-- Informasi lainnya seperti gambar, waktu, tempat, kuota, sasaran, dll. -->
    </article>

    <article class="container">
        <header>
            <h2 style="font-size: 25px;">Persyaratan</h2>
        </header>
        <ul>
            <li>{{ $beasiswa->persyaratan }}</li>
            <!-- Menampilkan persyaratan beasiswa -->
        </ul>
        <hr class="mt-4">
    </article>

    <article class="container">
        <header>
            <h2 style="font-size: 25px;">Sasaran</h2>
        </header>
        <ul>
            <li>{{ $beasiswa->sasaran }}</li>
            <!-- Menampilkan sasaran beasiswa -->
        </ul>
        <hr class="mt-4">
    </article>

    <article class="container">
        <header>
            <h2 style="font-size: 25px;">Berkas Pendaftaran</h2>
        </header>
        <ul>
            <li>{{ $beasiswa->berkas_pendaftaran }}</li>
            <!-- Menampilkan berkas pendaftaran yang diperlukan -->
        </ul>
        <hr class="mt-4">
    </article>

    <article class="container">
        <header>
            <h2 style="font-size: 25px;">Mekanisme pendaftaran</h2>
        </header>
        <ol>
            <li>{{ $beasiswa->mekanisme_pendaftaran }}</li>
            <!-- Menampilkan mekanisme pendaftaran -->
        </ol>
        <hr class="mt-4">
    </article>

    <article class="container">
        <header>
            <h2 style="font-size: 25px;">Seleksi berkas</h2>
        </header>
        <section>
            <ul>
                <li>{{ $beasiswa->seleksi_berkas }}</li>
                <!-- Menampilkan informasi seleksi berkas -->
            </ul>
        </section>
        <hr class="mt-4">
    </article>

    <article class="container">
        <header>
            <h2 style="font-size: 25px;">Jadwal Beasiswa</h2>
        </header>
        <ul>
            <li>{{ $beasiswa->jadwal_beasiswa }}</li>
            <!-- Menampilkan jadwal beasiswa -->
        </ul>
        <hr class="mt-4">
    </article>

    <article class="container">
        <header>
            <h2 style="font-size: 25px;">Kontak</h2>
        </header>
        <address>
            <p>{{ $beasiswa->kontak }}</p>
            <!-- Menampilkan informasi kontak -->
        </address>
        <hr class="mt-4">
    </article>

    <div class="container-fluid text-light mt-5" style="background-color: #141E27; width: 100%; height: auto;">
        <div class="pt-4">
            <article class="container">
                <header>
                    <h4>Berikan Rating Terbaikmu 🙂</h4>
                </header>
                <div class="rating">
                    <form id="ratingForm" action="{{ route('beasiswa.rate', $beasiswa) }}" method="POST">
                        @csrf
                        @for ($i = 1; $i <= 5; $i++) <input type="radio" id="star-{{ $i }}" name="rating" value="{{ $i }}" {{ $beasiswa->ratings->where('user_id', auth()->id())->first()?->rating == $i ? 'checked' : '' }}>
                            <label for="star-{{ $i }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path pathLength="360" d="M12,17.27L18.18,21,L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                </svg>
                            </label>
                        @endfor
                    </form>
                </div>
            </article>
            <article class="container">
                <header>
                    <h4>Berikan Komentar Anda 🙂</h4>
                </header>
                <form action="{{ route('beasiswa.comment', $beasiswa) }}" method="POST">
                    @csrf
                    <div class="form-group" style="width: 300px;">
                        <textarea class="form-control" name="comment" rows="3" placeholder="Berikan Comment mu" required></textarea>
                        <button type="button" class="btn btn-outline-light mt-3 w-100">Submit Comment</button>
                    </div>
                </form>
            </article>
            <article class="container">
                <header>
                    <h4>Komentar</h4>
                </header>
                @foreach ($beasiswa->comments as $comment)
                <div class="comment mt-2">
                    <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->comment }}</p>
                </div>
                @endforeach
            </article>
        </div>
    </div>
        @include('user-app.footer')
        @endsection

        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                document.querySelectorAll('.rating input').forEach((input) => {
                    input.addEventListener('change', () => {
                        document.getElementById('ratingForm').submit();
                    });
                });
            });
        </script>
