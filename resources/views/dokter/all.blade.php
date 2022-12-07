@extends('layouts.main')
@section('container')
    <h1>Daftar Dokter</h1>
    <table class="table">
        <thead>
          <tr class="table table-dark">
            <th scope="col">No</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Alamat Dokter</th>
            <th scope="col">Nomor Telpon</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Golongan Darah</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data_dokter as $dokter)
          <tr>
            <td>{{ $dokter->id }}</td>
            <td>{{ $dokter->nama_dokter }}</td>
            <td>{{ $dokter->alamat_dokter }}</td>
            <td>{{ $dokter->no_telp_dokter}}</td>
            <td>{{ $dokter->tanggal_lahir_dokter }}</td>
            <td>{{ $dokter->jenis_kelamin_dokter }}</td>
            <td>{{ $dokter->golongan_darah_dokter }}</td>
            <td>{{ $dokter->tanggal_lahir_dokter }}</td>
            <td>
                <a href="detail/{{ $dokter->id }}" class="btn btn-info">Detail</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection