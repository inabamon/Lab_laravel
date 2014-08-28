<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function($table)
		{
			$table->increments('id');
			$table->string('order_date');
			$table->integer('amount');
			$table->string('catalog_number');
			$table->string('price');
			$table->string('volume');
			$table->tinyInteger('is_storage');
			$table->string('item_id');
			$table->string('remark')->nullable();
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
		Schema::drop(' orders');
	}

}
