@extends ('layouts.main')
@section('container')
    <h1 class="text-center">Detail Kelas</h1>
    <div class="card-body">
        <div class="form-group">
            <label for="" class="form-label">Nomor Registrasi</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $pasien->nomor_registrasi }}" readonly
                placeholder="NIS">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Nama Kamar Pasien</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pasien->kamar->nama_kamar }}" readonly
                placeholder="alamat">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Nama Dokter Pasien</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pasien->dokter->nama_dokter }}" readonly
                placeholder="alamat">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pasien->nama_pasien }}" readonly
                placeholder="alamat">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Alamat Pasien Pasien</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pasien->alamat_pasien }}" readonly
                placeholder="alamat">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">No Telpon Pasien</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pasien->no_telp_pasien }}" readonly
                placeholder="alamat">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Golongan Darah Pasien</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pasien->goldarah->golongan_darah }}" readonly
                placeholder="alamat">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Jenis Kelamin Pasien</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pasien->jenisKelamin->jenis_kelamin }}" readonly
                placeholder="alamat">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Tempat lahir Pasien</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pasien->tempat_lahir_pasien }}" readonly
                placeholder="alamat">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Tanggal lahir Pasien</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pasien->tanggal_lahir_pasien }}" readonly
                placeholder="alamat">
        </div>
        <br>
        <div class="form-group">
            <label for="" class="form-label">Tanggal Daftar Pasien</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pasien->tanggal_daftar_pasien }}" readonly
                placeholder="alamat">
        </div>



        <a type="button" class="btn btn-warning mt-5" href="/pasien/all">Back</a>
    </div>
@endsection