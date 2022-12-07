@extends('layouts.main')
@section('container')
    <h1>Daftar Kamar</h1>
    <table class="table">
        <thead>
          <tr class="table table-dark">
            <th scope="col">No</th>
            <th scope="col">Kode Kamar</th>
            <th scope="col">Nama Kamar</th>
            <th scope="col">Harga Kamar</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data_kamar as $kamars)
          <tr>
            <td>{{ $kamars->id }}</td>
            <td>{{ $kamars->kode_kamar }}</td>
            <td>{{ $kamars->nama_kamar }}</td>
            <td>{{ $kamars->harga_kamar }}</td>
            <td>
                <a href="detail/{{ $kamars->id }}" class="btn btn-info">Detail</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>    
@endsection