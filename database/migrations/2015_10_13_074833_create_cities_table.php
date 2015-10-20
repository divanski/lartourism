<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('city', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('country', 2);
			$table->string('region', 5);
			$table->string('city', 50);
			$table->string('postalCode', 50);
			$table->decimal('latitude', 9, 6);
			$table->decimal('longitude', 9, 6);
			$table->timestamps();
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Schema::drop('city');
	}

}
