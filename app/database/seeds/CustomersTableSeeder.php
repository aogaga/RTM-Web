<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Customer::create([
				'name'=>$faker->name, 
				'phone'=>$faker->phoneNumber,
				'email'=>$faker->freeEmail,
				'address'=>$faker->streetAddress,
				'customerId'=>$faker->numberBetween($min = 400000000, $max = 900000000)

			]);
		}
	}

}