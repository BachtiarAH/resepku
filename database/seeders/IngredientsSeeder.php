<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i=0; $i < 10; $i++) { 
            DB::table('ingredients')->insert([
                'ingredient'=>$faker->text(25),
                'recipe_id'=>1,
                
            ]);
        }
    }
}
