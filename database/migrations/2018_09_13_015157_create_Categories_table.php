<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Categories', function(Blueprint $table)
		{
			$table->integer('CategoryID', true);
			$table->string('CategoryName', 15)->index('CategoryName');
			$table->text('Description', 8)->nullable();
			$table->binary('Picture')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Categories');
	}

}
