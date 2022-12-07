<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    
    protected $table = 'pasiens';
    protected $guarded = [
        'id'
    ];
    
    protected $filled = [];

    public function goldarah()
    {
        return $this->belongsTo(Goldarah::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
    public function jenisKelamin()
    {
        return $this->belongsTo(jenisKelamin::class);
    }
}