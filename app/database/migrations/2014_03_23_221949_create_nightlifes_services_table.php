<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNightlifesServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//se crea la tabla de nigthlifes servicios
		Schema::create('nightlifes_services', function(Blueprint $table) {
        {
        	$table->integer('idnightlife');
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
		//la tabla nightlifes services es eliminada si existe
		Schema::dropIfExists('nightlifes_services');
	}

}
