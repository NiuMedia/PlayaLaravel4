<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//se crea la tabla de hoteles servicios
		Schema::create('hotels_services', function(Blueprint $table) {
        {
        	$table->integer('idhotel');
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
		//la tabla hotels services es eliminada si existe
		Schema::dropIfExists('hotels_services');
	}

}
