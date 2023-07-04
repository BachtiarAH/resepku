<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('recipe')->insert([
            'title'=> $faker->text(),
            'description' => $faker->paragraph(),
            'user_id'=>1,
            'thumbnail'=>'asset\thumbnail\image 1.png'
        ]);

        DB::table('recipe')->insert([
            'title'=> $faker->text(),
            'description' => $faker->paragraph(),
            'user_id'=>1,
            'thumbnail'=>'asset\thumbnail\image 1.png'
        ]);
    }
}
