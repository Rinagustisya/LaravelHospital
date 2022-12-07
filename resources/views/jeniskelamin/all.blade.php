@extends('layouts.main')
@section('container')
    <h1>Golongan Darah</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Golongan Darah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_jeniskelamin as $gender)
                <tr>
                    <td>{{ $gender->id }}</td>
                    <td>{{ $gender->jenis_kelamin }}</td>
                    <td>
                        <a href="detail/{{ $gender->id }}" class="btn btn-info">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection