@extends('layouts.main')
@section('container')
    <h1>Ubah Data Pasien</h1>
    <form method="post" action="/pasien/update/{{ $pasien->id }}">
        <div class="mb-3">
            <label for="nomor_registrasi" class="form-label">No Registrasi</label>
            <input type="text" class="form-control @error('nomor_registrasi') is-invalid @enderror" id="nomor_registrasi" name="nomor_registrasi" value="{{ old('nomor_registrasi', $pasien->nomor_registrasi)  }}" readonly>
            @error('nomor_registarasi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Kamar</label>
            <select class="form-select" name="kamar_id" id="kamar_id">
                @foreach ($kamar as $room)
                    @if (old("kamar_id", $pasien->kamar_id == $room->id))
                        <option name="kamar_id" value="{{ $room->id }}" selected>{{ $room->nama_kamar }}</option>
                    @else
                        <option name="kamar_id" value="{{ $room->id }}">{{ $room->nama_kamar }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Dokter Praktek</label>
            <select class="form-select" name="dokter_id" id="dokter_id">
                @foreach ($dokter as $doctor)
                    @if (old("dokter_id", $pasien->dokter_id == $doctor->id))
                        <option name="dokter_id" value="{{ $doctor->id }}" selected>{{ $doctor->nama_dokter }}</option>
                    @else
                        <option name="dokter_id" value="{{ $doctor->id }}">{{ $doctor->nama_dokter }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama_pasien" name="nama_pasien" value="{{ old('nama_pasien', $pasien->nama_pasien) }}">
            @error('nama_pasien')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat_pasien" name="alamat_pasien" value="{{ old ('alamat_pasien', $pasien->alamat_pasien) }}">
            @error('alamat_pasien')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_telp_pasien" name="no_telp_pasien" value="{{ old ('no_telp_pasien', $pasien->no_telp_pasien) }}">
            @error('no_telp_pasien')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Jenis Golongan Darah</label>
            <select class="form-select" name="goldarah_id" id="goldarah_id">
                @foreach ($goldarah as $darah)
                    @if (old("goldarah_id", $pasien->goldarah_id == $darah->id))
                        <option name="goldarah_id" value="{{ $darah->id }}" selected>{{ $darah->golongan_darah }}</option>
                    @else
                        <option name="goldarah_id" value="{{ $darah->id }}">{{ $darah->golongan_darah }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin_id" id="jenis_kelamin_id">
                @foreach ($jenisKelamin as $gender)
                    @if (old("jenis_kelamin_id", $pasien->jenis_kelamin_id == $gender->id))
                        <option name="jenis_kelamin_id" value="{{ $gender->id }}" selected>{{ $gender->jenis_kelamin }}</option>
                    @else
                        <option name="jenis_kelamin_id" value="{{ $gender->id }}">{{ $gender->jenis_kelamin }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir_pasien" name="tempat_lahir_pasien" value="{{ old ('tempat_lahir_pasien', $pasien->tempat_lahir_pasien) }}">
            @error('tempat_lahir_pasien')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir_pasien" class="form-label">Tanggal Lahir Pasien</label>
            <input type="date" class="form-control @error('tanggal_lahir_pasien') is-invalid @enderror" id="tanggal_lahir_pasien" name="tanggal_lahir_pasien" value="{{ old('tanggal_lahir_pasien', $pasien->tanggal_lahir_pasien )  }}">
            @error('tanggal_lahir_pasien')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
@endsection