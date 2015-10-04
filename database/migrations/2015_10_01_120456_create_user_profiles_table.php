<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name', 100);
            $table->string('middle_name', 100);
            $table->string('family_name', 100);
            $table->string('gender',1);
            $table->string('country_of_birth',2);
            $table->string('region_of_birth',50);
            $table->string('municipality_of_birth',50);
            $table->string('place_of_birth',50);
            $table->dateTime('date_of_birth');
            $table->string('nationality',2);
            $table->string('personal_no',10);
            $table->string('identity_card_no',9);
            $table->dateTime('date_of_issue');
            $table->dateTime('date_of_expiry');
            $table->string('country_of_residence',2);
            $table->string('region_of_residence',50);
            $table->string('municipality_of_residennce',50);
            $table->string('place_of_residence',50);
            $table->string('address_of_residence',150);
            $table->string('personal_phone',50);
            $table->timestamps();

            $table  ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_profiles');
	}

}
