<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    
    protected $table = 'dokters';
    protected $fillable = [
        'penyakit_id',
        'nama_dokter',
        'alamat_dokter',
        'no_telp_dokter',
        'jenis_kelamin_dokter',
        'golongan_darah_dokter',
        'tempat_lahir_dokter',
        'tanggal_lahir_dokter',
        'tanggal_mulai_bekerja_dokter',
    ];

    public function pasien()
    {
        return $this->hasMany(pasien::class);
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}