<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::factory()->create([
            'nama' => 'Sneaker Hitam Sweet Child',
            'harga' => 'RP 164.000,00',
            'deskripsi' => 'nyaman dipake, bisa membuat anda ganteng maksimal',
            'kategori' => 'sepatu',
            'image' => 'img/product/sepatu/sepatu.jpg',
            'updated_at' => now(),
            'created_at' => now()
        ]);
        Product::factory()->create([
            'nama' => 'Sneaker Putih Long Child',
            'harga' => 'RP 279.000,00',
            'deskripsi' => 'nyaman dipake, pernah dipake ronaldowati',
            'kategori' => 'sepatu',
            'image' => 'img/product/sepatu/sepatu2.jfif',
            'updated_at' => now(),
            'created_at' => now()
        ]);
    }
}
