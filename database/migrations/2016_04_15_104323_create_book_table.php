<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('room');
            $table->string('time');
            $table->date('checkin');
            $table->date('checkout');
            $table->string('name',100);
            $table->string('surname',100);
            $table->string('phone_number',20);
            $table->string('email');
            $table->string('address');
            $table->string('address2');
            $table->string('state');
            $table->string('city');
            $table->string('country');
            $table->string('postal_code');
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
		Schema::drop('books');
	}

}
