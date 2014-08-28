<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Storage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('storages', function($table)
		{
			$table->increments('id');
			$table->string('order_date');
			$table->string('arrive_date')->nullable();
			$table->string('open_date')->nullable();
			$table->string('period_day')->nullable();
			$table->string('lot')->nullable();
			$table->string('exp_date')->nullable();
			$table->string('item_id');
			$table->string('order_id');
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
		Schema::drop('storages');
	}

}
