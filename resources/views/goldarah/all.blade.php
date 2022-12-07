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
            @foreach ($data_goldarah as $darah)
                <tr>
                    <td>{{ $darah->id }}</td>
                    <td>{{ $darah->kode }}</td>
                    <td>{{ $darah->golongan_darah }}</td>
                    <td>
                        <a href="detail/{{ $darah->id }}" class="btn btn-info">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection