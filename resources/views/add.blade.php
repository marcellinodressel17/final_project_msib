@extends('layouts.user_type.auth')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <article class="card mb-4">
                    <header class="card-header">
                        <h6>Menambahkan Data Beasiswa</h6>
                    </header>
                    <div class="card-body px-0 pt-0">
                        <section class="table-responsive p-0">
                            <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column align-items-center">
                                @csrf

                                <fieldset class="row d-flex justify-content-center">
                                    <legend class="sr-only">Gambar & nama</legend>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="image">Gambar</label>
                                        <input type="file" class="form-control" id="image" name="image" required>
                                    </div>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="title">Nama Beasiswa</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Nama Beasiswa" required>
                                    </div>
                                </fieldset>

                                <fieldset class="row d-flex justify-content-center">
                                    <legend class="sr-only">Deskripsi</legend>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="description_short">Deskripsi Singkat</label>
                                        <textarea class="form-control" id="description_short" name="description_short" rows="3" placeholder="Masukkan Deskripsi Singkat" required></textarea>
                                    </div>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="description_long">Deskripsi Panjang</label>
                                        <textarea class="form-control" id="description_long" name="description_long" rows="5" placeholder="Masukkan Deskripsi Panjang" required></textarea>
                                    </div>
                                </fieldset>

                                <fieldset class="row d-flex justify-content-center">
                                    <legend class="sr-only">Waktu dan Tempat</legend>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="waktu">Waktu</label>
                                        <input type="date" class="form-control" id="waktu" name="waktu" placeholder="Masukkan Waktu" required>
                                    </div>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="tempat">Tempat</label>
                                        <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan Tempat" required>
                                    </div>
                                </fieldset>

                                <fieldset class="row d-flex justify-content-center">
                                    <legend class="sr-only">Kuota dan Sasaran</legend>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="kuota">Kuota</label>
                                        <input type="number" class="form-control" id="kuota" name="kuota" placeholder="Masukkan Kuota" required>
                                    </div>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="sasaran">Sasaran</label>
                                        <input type="text" class="form-control" id="sasaran" name="sasaran" placeholder="Masukkan Sasaran">
                                    </div>
                                </fieldset>

                                <fieldset class="row d-flex justify-content-center">
                                    <legend class="sr-only">Persyaratan dan Berkas Pendaftaran</legend>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="persyaratan">Persyaratan</label>
                                        <textarea class="form-control" id="persyaratan" name="persyaratan" rows="3" placeholder="Masukkan Persyaratan" required></textarea>
                                    </div>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="berkas_pendaftaran">Berkas Pendaftaran</label>
                                        <textarea class="form-control" id="berkas_pendaftaran" name="berkas_pendaftaran" rows="3" placeholder="Masukkan Berkas Pendaftaran" required></textarea>
                                    </div>
                                </fieldset>

                                <fieldset class="row d-flex justify-content-center">
                                    <legend class="sr-only">Mekanisme Pendaftaran dan Seleksi Berkas</legend>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="mekanisme_pendaftaran">Mekanisme Pendaftaran</label>
                                        <textarea class="form-control" id="mekanisme_pendaftaran" name="mekanisme_pendaftaran" rows="3" placeholder="Masukkan Mekanisme Pendaftaran" required></textarea>
                                    </div>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="seleksi_berkas">Seleksi Berkas</label>
                                        <textarea class="form-control" id="seleksi_berkas" name="seleksi_berkas" rows="3" placeholder="Masukkan Seleksi Berkas" required></textarea>
                                    </div>
                                </fieldset>

                                <fieldset class="row d-flex justify-content-center">
                                    <legend class="sr-only">Jadwal Beasiswa dan Kontak</legend>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="jadwal_beasiswa">Jadwal Beasiswa</label>
                                        <textarea class="form-control" id="jadwal_beasiswa" name="jadwal_beasiswa" rows="3" placeholder="Masukkan Jadwal Beasiswa" required></textarea>
                                    </div>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="kontak">Kontak</label>
                                        <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Masukkan Kontak" required>
                                    </div>
                                </fieldset>

                                <fieldset class="row d-flex justify-content-center">
                                    <legend class="sr-only">Jenis Pendidikan</legend>
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <label for="jenis_pendidikan">Jenis Pendidikan</label>
                                        <select class="form-control" id="jenis_pendidikan" name="jenis_pendidikan" required>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </fieldset>

                                <div class="row text-center">
                                    <div class="form-group mb-3" style="width: 600px;">
                                        <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
@endsection
