<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeachesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	//se crea la tabla de beaches
		Schema::create('beaches', function(Blueprint $table) {
        {
			$table->increments('id');
			$table->string('name', 50);
			$table->string('address', 150);
			$table->float('lat',15);
			$table->float('long',15);
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
		//la tabla beaches es eliminada si existe
		Schema::dropIfExists('beaches');
	}

}
