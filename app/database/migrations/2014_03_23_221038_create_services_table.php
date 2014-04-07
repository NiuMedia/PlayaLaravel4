<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//services table is created
		Schema::create('services', function(Blueprint $table) {
        {
			$table->increments('id');
		   	$table->string('name', 20);
		   	$table->string('category',20); //category is refered to the categories of the app like restaurants, etc.
		   	$table->string('facilitytype',20); //facilitytype is refered to the clasification of the services, like general.
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
		//services table is dropped if exists
		Schema::dropIfExists('services');
	}

}
