<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SalesrepsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Salesrep::create([
				'firstname'=>$faker->firstName($gender = null|'male'|'female'),
				'lastname'=>$faker->lastName,
				'password'=>Hash::make('1234'),
				'phone'=>$faker->phoneNumber,
				'email'=>$faker->email,
				'address'=>$faker->Address,
				'repid'=> $faker->numberBetween($min = 10000000, $max = 90000000)



			]);
		}
	}

}