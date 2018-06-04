<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalesrepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salesreps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstname', 20);
            $table->string('lastname', 20);
            $table->string('password', 64);
            $table->string('phone')->unique();
			$table->string('email')->unique();
			$table->string('repid')->unique();
			$table->text('address');
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
		Schema::drop('salesreps');
	}

}
