<?php

class PollsTableSeeder extends Seeder {

    public function run()
    {
	  $polls = array( 
	  	[	
	  		'id' => 45,
	  		'_id' => '4a0dYbe86fEd21',
	  		'slug' => 'whats_your_favorite_color',
	  		'title' => 'What\'s your favorite color?',
	  		'subtitle' => 'Subtitle here',
		],
	  );

	DB::table('polls')->insert($polls);

	}

}