<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_kelas' => $this->faker->unique()->randomElement(['9A', '9B', '9C', '9D', '9E', '9F', '9G', '9H', '9I', '9J']),
        ];
    }
}
