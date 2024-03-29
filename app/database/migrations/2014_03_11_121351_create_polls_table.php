<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('polls', function(Blueprint $table) {
            $table->increments('id');
			$table->string('_id', 14);
			$table->string('slug')->index();
			$table->string('title');
			$table->string('subtitle');
			$table->softDeletes();
			$table->timestamps();
        });

        DB::statement('ALTER TABLE polls MODIFY COLUMN _id binary(14)');

		Schema::table('polls', function($table)
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
	    Schema::drop('polls');
	}

}
