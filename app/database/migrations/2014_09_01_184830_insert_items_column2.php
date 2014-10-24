<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertItemsColumn2 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('items', function($table)
		{
			$table->integer('catalog_number');
			$table->integer('price');
			$table->integer('volume');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('items', function($table)
		{
			$table->dropColumn('catalog_number');
			$table->dropColumn('price');
			$table->dropColumn('volume');
		});
	}

}
