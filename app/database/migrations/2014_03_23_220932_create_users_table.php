<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//users table is created in the database
		Schema::create('users', function(Blueprint $table) {
        {
			$table->increments('id');
		   	$table->string('firstname', 20);
		   	$table->string('lastname', 20);
		   	$table->string('email', 100)->unique();
		   	$table->string('password', 64);
		   	$table->string('rol', 50);
		   	$table->string('status',20);
		   	//idlocation is related with locations table
		   	$table->integer('idlocation');
		   	$table->string('phone',50);
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
		//users table is dropped if exists in the database
		Schema::dropIfExists('users');
	}

}
