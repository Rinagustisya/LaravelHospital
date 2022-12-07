@extends('layouts.main')
@section('container')
    <h1 class="mt-3 mb-3">Tambah Data Pasien</h1>
    <div class="col-lg-8">
        <form method="post" action="/pasien/add">
        @csrf
        <div class="mt-5 mb-1">
            <label for="nis" class="from-label">Nomor Registrasi</label>
            <input type="text" class="form-control" id="nomor_registrasi" name="nomor_registrasi" value="{{old('nomor_registrasi')}}">
        </div>
        <div class="mb-3">
            <label for="penyakit_id" class="from-label">Pilih Penyakit</label>
            <select class="form-select"  name="penyakit_id" id="penyakit_id">
                <option selected>Pilih Penyakit Pasien</option>
                @foreach ($penyakit as $sakit)
                    <option value="{{ $sakit->id }}">{{ $sakit->nama_penyakit }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="kamarid" class="from-label">Pilih Kamar</label>
            <select class="form-select"  name="kamar_id" id="kamar_id">
                <option selected>Pilih kamar yang dimau</option>
                @foreach ($kamar as $room)
                    <option value="{{ $room->id }}">{{ $room->nama_kamar }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="dokter-id" class="from-label">Pilih Dokter</label>
            <select class="form-select"  name="dokter_id" id="dokter_id">
                <option selected>Pilih Dokter yang menangani</option>
                @if (old("penyakit_id", $dokter->penyakit_id == $doctor->penyakit_id))
                    @foreach ($dokter as $doctor)
                        <option name="nama-dokter" value="{{ $doctor->id }}">{{ $doctor->nama_dokter }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="from-label">Nama Pasien</label>
            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="{{old('nama_pasien')}}">
        </div>
        <div class="mb-3">
            <label for="pasien" class="from-label">Alamat Pasien</label>
            <input type="text" class="form-control" id="alamat_pasien" name="alamat_pasien" value="{{old('alamat_pasien')}}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="from-label">Nomor Telfon</label>
            <input type="text" class="form-control" id="no_telp_pasien" name="no_telp_pasien" value="{{old('no_telp_pasien')}}">
        </div>
        <div class="mb-3">
            <label for="golongan-darah" class="from-label">Golongan Darah</label>
            <select class="form-select"  name="goldarah_id" id="goldarah_id">
                <option selected>Pilih Golongan Darah</option>
                @foreach ($goldarah as $darah)
                    <option value="{{ $darah->id }}">{{ $darah->golongan_darah }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jenis-kelamin" class="from-label">Jenis Kelamin</label>
            <select class="form-select"  name="jenis_kelamin_id" id="jenis_kelamin_id">
                <option selected>Pilih Jenis Kelamin</option>
                @foreach ($jenisKelamin as $kelamin)
                    <option value="{{ $kelamin->id }}">{{ $kelamin->jenis_kelamin }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tempat-lahir" class="from-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir_pasien" name="tempat_lahir_pasien" value="{{old('tempat_lahir_pasien')}}">
        </div>
        <div class="mb-3">
            <label for="tanggal-lahir" class="from-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir_pasien" name="tanggal_lahir_pasien" value="{{old('tanggal_lahir_pasien')}}">
        </div>
        <div class="mb-3">
            <label for="tanggal-daftar" class="from-label">Tanggal Daftar</label>       
            <input type="date" class="form-control" id="tanggal_daftar_pasien" name="tanggal_daftar_pasien" value="{{old('tanggal_daftar_pasien')}}">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
    </div>
@endsection