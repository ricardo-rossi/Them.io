<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('poll_options', function(Blueprint $table) {
            $table->increments('id');
			$table->string('_id', 14);
			$table->integer('poll_id');
			$table->string('label');
			$table->timestamps();
        });

        DB::statement('ALTER TABLE poll_options MODIFY COLUMN _id binary(14)');

		Schema::table('poll_options', function($table)
		{
		    $table->unique('_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('poll_options');
	}

}
