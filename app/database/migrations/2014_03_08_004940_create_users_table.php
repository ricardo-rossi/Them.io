<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function($table){
            $table->increments('id');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('telephone');
            $table->string('company');
            $table->string('org_type');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->string('source');
            $table->boolean('admin')->default(0);
            $table->timestamps();
        });   
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
