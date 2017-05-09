<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('member', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 191)->unique();
			$table->string('password', 191);
			$table->string('firstname', 191);
			$table->string('email', 191)->unique();
			$table->string('phone', 191);
			$table->string('qq_id', 191);
			$table->string('wechat_id', 191);
			$table->string('line_id', 191);
			$table->integer('group')->index('group');
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
		Schema::drop('member');
	}

}
