@extends('layouts.main')

@section('container')
<center><h1 class="mt-5 mb-4">Daftar Pasien</h1></center>
@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>    
@endif
<table class="table">
    <a href="create" class="btn btn-primary mb-3">Tambah Pasien</a>
    <thead>
      <tr class="table table-dark">
        <th scope="col">ID</th>
        <th scope="col">Nomor Registrasi</th>
        <th scope="col">Penyakit yang Diderita</th>
        <th scope="col">Nama Kamar</th>
        <th scope="col">Nama Dokter Praktek</th>
        <th scope="col">Nama Pasien</th>
        <th scope="col">Alamat Pasien</th>
        <th scope="col">No Telp</th>
        <th scope="col">Golongan Darah</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Tanggal Daftar</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data_pasien as $pasien)
      <tr>
        
        <td>{{ $pasien->id }}</td>
        <td>{{ $pasien->nomor_registrasi }}</td>
        <td>{{ $pasien->penyakit->nama_penyakit }}</td>
        <td>{{ $pasien->kamar->nama_kamar }}</td>
        <td>{{ $pasien->dokter->nama_dokter }}</td>
        <td>{{ $pasien->nama_pasien }}</td>
        <td>{{ $pasien->alamat_pasien }}</td>
        <td>{{ $pasien->no_telp_pasien }}</td>
        <td>{{ $pasien->goldarah->golongan_darah }}</td>
        <td>{{ $pasien->jenisKelamin->jenis_kelamin }}</td>
        <td>{{ $pasien->tempat_lahir_pasien }}</td>
        <td>{{ $pasien->tanggal_lahir_pasien }}</td>
        <td>{{ $pasien->tanggal_daftar_pasien }}</td>
        <td>
          <a href="detail/{{ $pasien->id}}" class="btn btn-info">Detail</a>
          <a href="edit/{{ $pasien->id }}" class="btn btn-warning">Edit</a>
          <form action="/pasien/delete/{{$pasien->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    
@endsection