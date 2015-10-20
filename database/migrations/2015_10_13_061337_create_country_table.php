<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('country', function(Blueprint $table)
		{
			$table->string('ISO', 2);
			$table->string('ISO3', 3);
			$table->integer('ISONumeric', false, true)->length(11);
			$table->string('fips', 2)->nullable();
			$table->string('Country', 44);
			$table->string('Capital', 20)->nullable();
			$table->decimal('Areain_sq_km', 10, 2);
			$table->integer('Population', false, true)->length(11);
			$table->string('Continent', 2);
			$table->string('tld', 3)->nullable();
			$table->string('CurrencyCode', 3)->nullable();
			$table->string('CurrencyName', 13)->nullable();
			$table->string('Phone', 16)->nullable();
			$table->string('Postal_Code_Format', 55)->nullable();
			$table->string('Postal_Code_Regex', 155)->nullable();
			$table->string('Languages', 89)->nullable();
			$table->integer('geonameid', false, true)->length(11)->nullable();
			$table->string('neighbours', 45)->nullable();
			$table->string('EquivalentFipsCode', 2)->nullable();
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
		// Schema::drop('country');
	}

}
