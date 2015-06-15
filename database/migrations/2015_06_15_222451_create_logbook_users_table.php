<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogbookUsersTable extends Migration
{
  public function up()
	{
		Schema::create('logbook_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('logbook_id');
			$table->integer('user_id');
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
			Schema::drop('logbook_user');
	}
}
