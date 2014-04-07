<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	//se crea la tabla de shoppings
		Schema::create('shoppings', function(Blueprint $table) {
        {
			$table->increments('id');
			$table->integer('iduser'); //toma los datos de la tabla users
			$table->integer('idtype'); //el id es tomado de la tabla types
			$table->string('name', 50);
			$table->string('address', 150);
			$table->float('lat',15);
			$table->float('long',15);
			$table->string('email', 100);
			$table->string('phone', 40);
			$table->string('overview',600);
			$table->binary('photo1');
			$table->binary('photo2');
			$table->binary('photo3');
			$table->binary('photo4');
			$table->binary('photo5');
			$table->binary('photo6');
			//horarios por dia
			$table->string('monday', 50);
			$table->string('tuesday', 50);
			$table->string('wednesday', 50);
			$table->string('thursday', 50);
			$table->string('friday', 50);
			$table->string('saturday', 50);
			$table->string('sunday', 50);
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
		//la tabla shoppings es eliminada si existe
		Schema::dropIfExists('shoppings');
	}

}
