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
		Schema::create('beaches', function(Blueprint $table) {
        {
			$table->increments('id');
			$table->integer('id_user');
			$table->integer('id_type');
		   	$table->string('name', 20);
		   	$table->string('address', 20);
		   	$table->float('lat', 15);
		   	$table->float('long', 15);
		   	$table->string('overview', 500);
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
		Schema::dropIfExists('beaches');
	}

}

