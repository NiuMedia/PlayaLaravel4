<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeachTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('beaches', function(Blueprint $table) {
        {
			$table->increments('id_beach');
			$table->integer('id_user');
		   	$table->string('name', 20);
		   	$table->string('address', 20);
		   	$table->float('lat', 15);
		   	$table->float('long', 15);
		   	$table->string('overview', 500);
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
