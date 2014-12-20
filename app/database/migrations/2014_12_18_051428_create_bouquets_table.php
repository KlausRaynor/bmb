<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBouquetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Bouquet Table
		Schema::create('bouquets', function($table) {

        $table->increments('id');
        $table->string('name');
        $table->integer('price');
        $table->string('image');
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
		//Drop bouquets

		Schema::drop('bouquets');
	}

}
