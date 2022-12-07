@extends('layouts.main')
@section('container')
    <h1>Detail Golongan Darah Pasien</h1>
<div class="card-body">
        <div class="form-group">
        <label for="" class="form-label"></label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{ $jenisKelamin->id }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label"> Jenis Kelamin Pasien</label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{ $jenisKelamin->jenis_kelamin }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Daftar Pasien</label>
        @foreach ($jenisKelamin->pasien as $perujuk)
            <ul class="list-group">
                <li class="list-group-item">{{ $perujuk->nama_pasien }}</li>
            </ul>
        @endforeach
    </div>
</div>
    
@endsection