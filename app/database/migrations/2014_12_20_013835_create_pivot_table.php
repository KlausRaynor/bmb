<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//pivot table to connect users and selected bouquets

		Schema::create('user_bouquet', function($table) {
			$table->integer('user_id')->unsigned();
			$table->integer('bouquet_id')->unsigned();

			#foreign keys for linking
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('bouquet_id')->references('id')->on('bouquets');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_bouquet');
	}

}
