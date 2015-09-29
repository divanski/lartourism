<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
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
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropColumn([
                'gender',
                'country_of_birth',
                'region_of_birth',
                'municipality_of_birth',
                'place_of_birth',
                'date_of_birth',
                'nationality',
                'personal_no',
                'identity_card_no',
                'date_of_issue',
                'date_of_expiry',
                'country_of_residence',
                'region_of_residence',
                'municipality_of_residennce',
                'place_of_residence',
                'address_of_residence',
                'personal_phone'
            ]);
		});
	}

}
