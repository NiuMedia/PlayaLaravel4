<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotels', function(Blueprint $table) {
        {
			$table->increments('id');
			$table->integer('id_user');
			$table->integer('id_type');
			$table->string('name', 40);
			$table->string('address', 100);
			$table->float('lat',10);
			$table->float('long',10);
			$table->string('phone', 40);
			$table->string('pricelow',20);
			$table->string('pricehigh',20);
			$table->string('priceavg',20);
			$table->integer('stars');
			$table->string('overview',500);
			$table->binary('photo1');
			$table->binary('photo2');
			$table->binary('photo3');
			$table->binary('photo4');
			$table->binary('photo5');
			$table->binary('photo6');
		   	$table->timestamps();
		}});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('hotels');
	}

}
