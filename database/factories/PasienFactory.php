<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'goldarah_id' => mt_rand(1, 4),
            'dokter_id' => mt_rand(1, 10),
            'kamar_id' => mt_rand(1, 5),
            'nomor_registrasi' => fake()->numerify('#######'),
            'nama_pasien' => fake()->name(),
            'alamat_pasien' => fake()->address(),
            'no_telp_pasien' => fake()->phoneNumber(),
            'jenis_kelamin_id' => mt_rand(1, 2),
            'tempat_lahir_pasien' => fake()->city(),
            'tanggal_lahir_pasien' => fake()->date(),
            'tanggal_daftar_pasien' => fake()->date(),
        ];
    }
}