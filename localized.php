<?php

require 'vendor/autoload.php';

$faker = Faker\Factory::create('ko_KR');

for ($i = 0; $i < 3; $i++) {
    $streetAddress = $faker->streetAddress;
    $barangay = $faker->phoneNumber;
    $city = $faker->postcode;

    echo "$streetAddress, $barangay, $city; \n";
}

?>

