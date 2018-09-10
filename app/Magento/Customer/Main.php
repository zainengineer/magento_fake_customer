<?php
namespace App\Magento\Customer;

use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;
class Main
{
    protected $fakerCached;
    protected function getFakerGenerator() : FakerGenerator
    {
        if (!$this->fakerCached){
            $this->fakerCached = FakerFactory::create();;
        }
        return $this->fakerCached;

    }
    public function getOneCustomer() : array
    {
        $faker = $this->getFakerGenerator();
        $customer = [
            'firstname' => $faker->firstName,
            'lastname' => $faker->lastName,
            'email' => $faker->email,
            'created_at' => $faker->date(),
            'gender' => rand(0,1) ? 'Male': 'Female',
        ];
        return $customer;

    }
}