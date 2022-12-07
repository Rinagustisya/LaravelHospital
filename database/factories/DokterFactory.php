<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dokter>
 */
class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode_dokter' => $this->faker->numberBetween(1000, 2000),
            'penyakit_id' => mt_rand(1, 4),
            'nama_dokter' => $this->faker->name,
            'alamat_dokter' => $this->faker->address,
            'no_telp_dokter' => $this->faker->phoneNumber,
            'jenis_kelamin_dokter' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir_dokter' => $this->faker->city,
            'tanggal_lahir_dokter' => $this->faker->dateTimeBetween('-40 years', '-26 years')->format('Y-m-d'),
    
        ];
    }
}