<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//types table is created
		Schema::create('types', function(Blueprint $table) {
        {
			$table->increments('id');
		   	$table->string('name', 20);
		   	$table->string('category', 20);//category is refered to the categories of the app, like hotels, etc.
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
		//types table is dropped if exists
		Schema::dropIfExists('types');
	}

}
