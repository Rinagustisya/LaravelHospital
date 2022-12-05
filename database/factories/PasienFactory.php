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
            'nomor_registrasi' => $this->faker->unique()->numberBetween(1, 100),
            'dokter_id' => $this->faker->numberBetween(1, 10),
            'nama_pasien' => $this->faker->name,
            'alamat_pasien' => $this->faker->address,
            'no_telp_pasien' => $this->faker->phoneNumber,
            'jenis_kelamin_pasien' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'golongan_darah_pasien' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'tempat_lahir_pasien' => $this->faker->city,
            'tanggal_lahir_pasien' => $this->faker->date(),
            'tanggal_daftar_pasien' => $this->faker->date(),
        ];
    }
}