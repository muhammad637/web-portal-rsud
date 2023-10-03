<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use App\Models\BeritaDanArtikel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(2)->create();
        // \App\Models\Kategori::factory(10)->create();
        // \App\Models\BeritaDanArtikel::factory(10)->create();
        // \App\Models\Spesialis::factory(10)->create();
        // \App\Models\Dokter::factory(10)->create();
        User::create([
            'name' => fake()->name(),
            'username' => 'admin',
            // 'username' => 
            // 'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => '12334345465757576',
        ]);
    }
}
