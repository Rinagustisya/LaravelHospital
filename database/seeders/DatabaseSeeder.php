<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Kamar;
use App\models\Goldarah;
use App\models\jenisKelamin;
use App\models\Penyakit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\pasien::factory(10)->create();
        \App\Models\dokter::factory(10)->create();

        Kamar::create([
            'kode_kamar' => 1001,
            'nama_kamar' => 'Konohagakure',
            'harga_kamar' => 200000
        ]);

        Kamar::create([
           'kode_kamar' => 1002,
           'nama_kamar' => 'Sunagakure',
           'harga_kamar' => 400000
        ]);

        Kamar::create([
           'kode_kamar' => 1003,
           'nama_kamar' => 'Amegakure',
           'harga_kamar' => 300000, 
        ]);

        Kamar::create([
            'kode_kamar' => 1004,
            'nama_kamar' => 'Kirigakure',
            'harga_kamar' => 500000
        ]);

        Kamar::create([
            'kode_kamar' => 1005,
            'nama_kamar' => 'Otogakure',
            'harga_kamar' => 800000
        ]);

        
        Goldarah::create([
            'kode' => 2001,
            'golongan_darah' => 'A'
        ]);

        Goldarah::create([
            'kode' => 2002,
            'golongan_darah' => 'B'
        ]);

        Goldarah::create([
            'kode' => 2003,
            'golongan_darah' => 'AB'
        ]);

        Goldarah::create([
            'kode' => 2004,
            'golongan_darah' => 'O'
        ]);

        
        jenisKelamin::create([
            'jenis_kelamin' => 'Laki - Laki'
        ]);

        jenisKelamin::create([
            'jenis_kelamin' => 'Perempuan'
        ]);

        Penyakit::create([
            'kode_penyakit' => 3001,
            'nama_penyakit' => 'Jantung'
        ]);

        Penyakit::create([
            'kode_penyakit' => 3002,
            'nama_penyakit' => 'Diabetes'
        ]);

        Penyakit::create([
            'kode_penyakit' => 3003,
            'nama_penyakit' => 'Kanker'
        ]);

        Penyakit::create([
            'kode_penyakit' => 3005,
            'nama_penyakit' => 'Stroke'
        ]);
        
    }
}