<?php

namespace Database\Seeders;

use Faker\Factory;
use Faker\Provider\ar_EG\Text;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i=0; $i < 10; $i++) { 
            DB::table('steps')->insert([
                'step'=>$faker->text(),
                'recipe_id'=>1
            ]);
        }
    }
}
