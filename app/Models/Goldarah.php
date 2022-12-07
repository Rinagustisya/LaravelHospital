<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goldarah extends Model
{
    use HasFactory;
    
    protected $table = 'goldarahs';

    protected $fillable = [
        'golongan_darah',
    ];

    public function pasien()
    {
        return $this->hasMany(pasien::class);
    }
}