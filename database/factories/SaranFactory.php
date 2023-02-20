<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Saran>
 */
class SaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bidang_id' => rand(1, 3),
            'tiket' => fake()->regexify('[A-Z]{5}[0-4]{7}'),
            'nama' => fake()->name(),
            'pengenal' => fake()->randomNumber(5, true),
            'judul' => fake()->slug(3, false),
            'isi' => fake()->paragraph(2, false),
            'foto' => 'Wahyudi.jpg',
            'status' =>'baru',
        ];
    }
}
