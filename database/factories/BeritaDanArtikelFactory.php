<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BeritaDanArtikel>
 */
class BeritaDanArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "judul" => fake()->sentence(4),
            "slug" => fake()->sentence(3),
            "isi" => fake()->text(100),
            "video" => "",
            "gambar" => fake()->word(),
            "jenis" => "berita"
        ];
    }
}
