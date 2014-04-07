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
		//se crea la tabla hotels
		Schema::create('hotels', function(Blueprint $table) {
        {
			$table->increments('id');
			$table->integer('iduser'); //toma los datos de la tabla users
			$table->integer('idtype'); //el id es tomado de la tabla types
			$table->string('name', 50);
			$table->string('address', 150);
			$table->float('lat',15);
			$table->float('long',15);
			$table->string('phone', 40);
			$table->string('pls',50);
			$table->string('phs',50);
			$table->string('avgp',50);
			$table->string('stars',10);
			$table->string('email', 100);
			$table->string('overview',600);
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
		//la tabla hotels es eliminada si existe
		Schema::dropIfExists('hotels');
	}

}
