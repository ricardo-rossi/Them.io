<?php

class PollOptionsTableSeeder extends Seeder {

    public function run()
    {
		$poll_options = array( 
			[	
				'poll_id' => 45,
				'_id' => 'Ra0dsbet6y2d37',
				'label' => 'Green',
			],
			[	
				'poll_id' => 45,
				'_id' => 'wS0rsbet6yEdw8',
				'label' => 'Blue',
			],
			[	
				'poll_id' => 45,
				'_id' => 'iaedRbet6y2d21',
				'label' => 'Red',
			],
			[	
				'poll_id' => 45,
				'_id' => 'uewdsbet6yfd34',
				'label' => 'Other',
			],
		);

		DB::table('poll_options')->insert($poll_options);
    }

}