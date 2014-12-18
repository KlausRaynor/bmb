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
        $table->timestamps();
        $table->string('name');
        $table->integer('price');
        $table->string('image');
        $table->string('add_to_cart');
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
