<?php
namespace App\Repository;

use Faker\Factory;

class Repository{
    public function slugMaker($string)
    {
        $convertedString = str_replace(' ', '_', $string);
        $randomNumber = Factory::create()->asciify('*****');

        return $convertedString.$randomNumber;
    }
}