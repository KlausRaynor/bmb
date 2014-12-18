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
		//Users Table

		Schema::create('users', function($table) {
		$table->increments('id');
		$table->timestamps();

		$table->string('username'); 
		$table->string('first_name'); 
		$table->string('last_name'); 
		$table->string('email');
		$table->string('password');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Users down
		Schema::drop('users');
	}

}
