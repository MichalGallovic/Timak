<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();



		User::create([
            'username' => 'michalgallovic',
            'password' => Hash::make('timaktimak'),
            'firstname'=> 'Michal',
            'lastname' => 'Gallovič'
		]);
        User::create([
            'username' => 'jakubhoblik',
            'password' => Hash::make('timaktimak'),
            'firstname'=> 'Jakub',
            'lastname' => 'Hoblík'
        ]);
        User::create([
            'username' => 'ivanpolacik',
            'password' => Hash::make('timaktimak'),
            'firstname'=> 'Ivan',
            'lastname' => 'Poláčik'
        ]);
        User::create([
            'username' => 'igorpacko',
            'password' => Hash::make('timaktimak'),
            'firstname'=> 'Igor',
            'lastname' => 'Packo'
        ]);
        User::create([
            'username' => 'jakubfornadel',
            'password' => Hash::make('timaktimak'),
            'firstname'=> 'Jakub',
            'lastname' => 'Fornádeľ'
        ]);
	}

}
