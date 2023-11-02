<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Toko;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tokos')->insert([
            'nama' => fake()->company(),
            'alamat' => fake()->streetAddress(),
            'no_telp' => fake()->phoneNumber(),
            'email' => fake()->freeEmail(),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
