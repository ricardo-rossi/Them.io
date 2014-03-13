<?php


class UsersTableSeeder extends Seeder {

    public function run()
    {
	  $users = array( 
	  	[	
	  		'id' => 1,
	  		'firstname' => 'Ricardo',
	  		'lastname' => 'Rossi',
	  		'username' => 'endata',
	  		'email' => 'rrossi@endata.com',
	  		'password' => Hash::make('passw0rd'),
	  		'telephone' => '(214) 603-4456',
	  		'admin' => 1,
	  		'company' => 'Endata',
	  		'city' => 'Richardson',
	  		'country' => 'United States',
	  		'state' => 'Texas',
			],
	  	);

		DB::table('users')->insert($users);
		
	}

}