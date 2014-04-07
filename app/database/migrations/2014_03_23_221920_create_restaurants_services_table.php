<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//se crea la tabla de restaurants servicios
		Schema::create('restaurants_services', function(Blueprint $table) {
        {
        	$table->integer('idrestaurant');
        	$table->integer('idservice');
        }});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//la tabla restaurants services es eliminada si existe
		Schema::dropIfExists('restaurants_services');
	}

}
