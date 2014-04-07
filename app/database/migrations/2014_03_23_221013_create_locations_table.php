<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//locations table is created
		Schema::create('locations', function(Blueprint $table) {
        {
			$table->increments('id');
		   	$table->string('name', 20);
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
		//locations table is dropped if exists in the database
		Schema::dropIfExists('locations');
	}

}
