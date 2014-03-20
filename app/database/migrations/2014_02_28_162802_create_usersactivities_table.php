<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersactivitiesTable extends Migration {

	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventsActivities', function(Blueprint $table) {
        {
			$table->increments('id');
		   	$table->integer('idevents');
		   	$table->integer('idactivities');
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
		Schema::dropIfExists('eventsActivities');
	}

}
