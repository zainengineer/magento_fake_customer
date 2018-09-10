<?php
// require the Faker autoloader
//require_once '/path/to/Faker/src/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

$result = [
    'name'=>$faker->name,
    'address'=>$faker->address,
    'text'=>$faker->text,
];
var_dump($result);