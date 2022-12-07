@extends('layouts.main')
@section('container')
    <h1>Detail Golongan Darah Pasien</h1>
<div class="card-body">
        <div class="form-group">
        <label for="" class="form-label"></label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{ $goldarah->id }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Kode Golongan Darah Pasien</label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{ $goldarah->kode }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Nama Golongan Darah Pasien</label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{$goldarah->golongan_darah }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Daftar Pasien</label>
        @foreach ($goldarah->pasien as $perujuk)
            <ul class="list-group">
                <li class="list-group-item">{{ $perujuk->nama_pasien }}</li>
            </ul>
        @endforeach
    </div>
</div>
    
@endsection