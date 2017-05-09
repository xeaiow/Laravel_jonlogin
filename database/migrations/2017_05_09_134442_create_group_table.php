<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 191)->unique();
			$table->integer('auth')->unique();
			$table->timestamps();
			$table->integer('manager');
			$table->integer('member');
			$table->integer('game_server');
			$table->integer('firewall');
			$table->integer('finance');
			$table->integer('server_auth');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('group');
	}

}
