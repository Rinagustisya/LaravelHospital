@extends('layouts.main')
@section('container')
    <h1>Detail Kamar Pasien</h1>
<div class="card-body">
        <div class="form-group">
        <label for="" class="form-label"></label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{ $kamar->id }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Kode Kamar Pasien</label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{ $kamar->kode_kamar }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Nama Ruangan Pasien</label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{$kamar->nama_kamar }}" readonly>
    </div>
    <div class="form-group">
        <label for="" class="form-label">Daftar Pasien</label>
        @foreach ($kamar->pasien as $perujuk)
            <ul class="list-group">
                <li class="list-group-item">{{ $perujuk->nama_pasien }}</li>
            </ul>
        @endforeach
    </div>
</div>
    
@endsection