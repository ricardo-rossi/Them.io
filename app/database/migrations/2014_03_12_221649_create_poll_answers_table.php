<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('poll_answers', function(Blueprint $table) {
            $table->increments('id');
			$table->string('_id');
			$table->integer('poll_id');
			$table->integer('poll_option_id');
			$table->boolean('answer');
			$table->timestamps();
        });

        DB::statement('ALTER TABLE poll_answers MODIFY COLUMN _id binary(14)');

		Schema::table('poll_answers', function($table)
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
	    Schema::drop('poll_answers');
	}

}
