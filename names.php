<?php

require 'vendor/autoload.php';

$faker=Faker\Factory::create();

echo $faker->name(). "\n";
echo $faker-> name('name'). "\n";
echo $faker-> name('female')."\n";


echo $faker->firstName(). "\n";
echo $faker->firstName($gender='male')."\n";
echo $faker->firstName($gender='female')."\n";

?>
