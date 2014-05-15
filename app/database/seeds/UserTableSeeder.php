<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Mehdi Balouchi',
			'username' => 'admin',
			'email'    => 'admin@admin.com',
			'password' => Hash::make('admin'),
		));
	}

}
