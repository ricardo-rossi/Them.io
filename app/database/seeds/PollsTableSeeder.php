<?php

class PollsTableSeeder extends Seeder {

    public function run()
    {
	  $polls = array( 
	  	[	
	  		'id' => 1,
	  		'uuid' => '_poll_03720785-81c7-4175-d799-1ff31ec7fab4',
	  		'slug' => 'whats_your_favorite_color',
	  		'json' => 
	  		'{"id":"_poll_03720785-81c7-4175-d799-1ff31ec7fab4","title":"What\'s your favorite color?","description":"Here is the description of the poll right here.","options":[{"id":"_option_91122804-331b-4f9f-ea85-397f9383616c","text":"Red"},{"id":"_option_83ddf74b-9c60-451c-9314-857e233abbbc","text":"Blue"},{"id":"_option_80bf0221-3081-44a3-ee90-e38d4989d137","text":"Yellow"},{"id":"_option_9cd4cd15-be1d-46b1-92ef-067cd74ad485","text":"Black"},{"id":"_option_1d440080-f519-4dae-fb50-42e9902eaacb","text":"Other"}]}'
		],
	  	[	
	  		'id' => 2,
	  		'uuid' => '_poll_03720785-81c7-4175-d799-1ff31ec7fab5',
	  		'slug' => 'another_poll',
	  		'json' => 
	  		'{"id":"_poll_03720785-81c7-4175-d799-1ff31ec7fab5","title":"Another Poll","description":"Here is the description of the poll right here.","options":[{"id":"_option_91122804-331b-4f9f-ea85-397f9383616c","text":"Red"},{"id":"_option_83ddf74b-9c60-451c-9314-857e233abbbc","text":"Blue"},{"id":"_option_80bf0221-3081-44a3-ee90-e38d4989d137","text":"Yellow"},{"id":"_option_9cd4cd15-be1d-46b1-92ef-067cd74ad485","text":"Black"},{"id":"_option_1d440080-f519-4dae-fb50-42e9902eaacb","text":"Other"}]}'
		],
	  );

	DB::table('polls')->insert($polls);

	}

}