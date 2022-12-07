<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use App\Models\Goldarah;
use App\Models\Dokter;
use App\Models\Kamar;
use App\Models\jenisKelamin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        return view('pasien.all', ['data_pasien' => pasien::all()]);
    }

    public function create()
    {
        return view('pasien.create', ['kamar' => Kamar::all(), 'dokter' => Dokter::all(), 'goldarah' => Goldarah::all(),
          'jenisKelamin' => jenisKelamin::all()]);      
    }

    public function store(Request $request)
    {
        
        pasien::create($request->all());
        return redirect('/pasien/all')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function show(pasien $pasien)
    {
        return view('pasien.detail', ['pasien' => $pasien]);
    }

    public function edit(pasien $pasien)
    {
        return view('pasien.edit', ['kamar' => Kamar::all(), 'dokter' => Dokter::all(), 'goldarah' => Goldarah::all(),
          'jenisKelamin' => jenisKelamin::all(), 'pasien' => $pasien]);
    }

    public function update(Request $request, pasien $pasien)
    {
        pasien::where('id', $pasien->id)
            ->update([
                'nomor_registrasi' => $request->nomor_registrasi,
                'kamar_id' => $request->kamar_id,
                'dokter_id' => $request->dokter_id,
                'nama_pasien' => $request->nama_pasien,
                'alamat_pasien' => $request->alamat_pasien,
                'no_telp_pasien' => $request->no_telp_pasien,
                'goldarah_id' => $request->goldarah_id,
                'jenis_kelamin_id' => $request->jenis_kelamin_id,
                'tempat_lahir_pasien' => $request->tempat_lahir_pasien,
                'tanggal_lahir_pasien' => $request->tanggal_lahir_pasien,
            ]);
        return redirect('/pasien/all')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy(pasien $pasien)
    {
        pasien::destroy($pasien->id);
        return redirect('/pasien/all')->with('success', 'Data Berhasil Dihapus!');
    }
       
}