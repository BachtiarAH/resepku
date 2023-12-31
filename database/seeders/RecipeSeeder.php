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
        DB::table('recipes')->insert([
            'title'=> 'Sambal jamur ala SS',
            'description' => $faker->paragraph(),
            'user_id'=>1,
            'thumbnail'=>'asset\thumbnail\image 1.png',
            'slug'=>'resep_masakan_bunda'.$faker->asciify('*****')
        ]);

        DB::table('recipes')->insert([
            'title'=> "Sambal jamur ala Bachtiar",
            'description' => $faker->paragraph(),
            'user_id'=>1,
            'thumbnail'=>'asset\thumbnail\image 1.png',
            'slug'=>'resep_masakan_bunda'.$faker->asciify('*****')
        ]);
    }
}
