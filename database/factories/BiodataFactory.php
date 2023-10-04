<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Biodata>
 */
class BiodataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'noreg_ppdb' => 'PPDB-' . date('y') . date('y') + 1 . '-' . $this->faker->unique()->numberBetween(10000, 99999),
            'jalur_pendaftaran' => $this->faker->numberBetween(1, 7),
            'nisn' => 30 . $this->faker->unique()->numberBetween(80000000, 89999999),
            'nik' => 321518 . $this->faker->unique()->numberBetween(1000000001, 2999999999),
            'nama' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date('Y-m-d'),
            'asal_sekolah' => $this->faker->randomElement(['SMPN 1 Rawamerta', 'SMPN 2 Rawamerta', 'SMP Nihayatul Amal', 'MTsN 3 Karawang', 'MTsN 5 Karawang', 'SMP Annihayah', 'MTs Al-Islah', 'SMPN 2 Kutawaluya', 'SMPN Satu Atap 1 Rawamerta', 'SMPN 1 Cilebar', 'SMP Islam Karawang', 'MTs Nahdatul Ulama']),
            'tahun_lulus' => $this->faker->randomElement(['2023', '2024']),
            'kelas' => $this->faker->randomElement(['9A', '9B', '9C', '9D', '9E', '9F', '9G', '9H', '9I', '9J']),
            'alamat' => $this->faker->streetAddress(),
            'dusun' => $this->faker->streetName(),
            'rt' => $this->faker->numberBetween(1, 10),
            'rw' => $this->faker->numberBetween(1, 10),
            'desa' => $this->faker->streetSuffix(),
            'kecamatan' => $this->faker->citySuffix(),
            'kabupaten' => $this->faker->city(),
            'provinsi' => $this->faker->state(),
            'kode_pos' => $this->faker->numberBetween(41358, 41382),
        ];
    }
}
