<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class NewsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('news')->truncate();
		$faker = Faker::create();

		foreach(range(1, 5) as $index)
		{
			News::create([
                'title' =>  $faker->sentence,
                'body'  =>  $faker->text(800),
                'author'=>  $faker->name,
                'theme'   =>  $faker->word
			]);
		}
	}

}
