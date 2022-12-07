@extends('layouts.main')
@section('container')
    <h1>Detail Golongan Darah Pasien</h1>
<div class="card-body">
        <div class="form-group">
        <label for="" class="form-label"></label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{ $dokter->id }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Kode Dokter</label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{ $dokter->kode_dokter }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Nama Dokter</label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{$dokter->nama_dokter }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Alamat Dokter</label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{$dokter->alamat_dokter }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Daftar Pasien</label>
        @foreach ($dokter->pasien as $perujuk)
            <ul class="list-group">
                <li class="list-group-item">{{ $perujuk->nama_pasien }}</li>
            </ul>
        @endforeach
    </div>
</div>
    
@endsection