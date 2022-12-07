<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $table = 'penyakits';

    protected $fillable = [
        'kode_penyakit',
        'nama_penyakit',
    ];

    public function dokter()
    {
        return $this->hasMany(dokter::class);
    }

    public function pasien()
    {
        return $this->hasMany(pasien::class);
    }
}