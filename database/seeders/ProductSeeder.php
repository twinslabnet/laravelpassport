<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Eloquent\Factories\Factory;




class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            'name' => fake()->words(3, true),
            'price' => random_int(20000,100000),
            'stock' => fake()->randomDigitNotNull(),
            'toko_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
