<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisKelamin extends Model
{
    use HasFactory;

    protected $table = 'jenis_kelamins';

    protected $guarded = [
        'id'
    ];

    public function pasien()
    {
        return $this->hasMany(pasien::class);
    }
}