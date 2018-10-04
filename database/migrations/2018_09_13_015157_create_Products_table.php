<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Products', function(Blueprint $table)
		{
			$table->integer('ProductID', true);
			$table->string('ProductName', 40)->index('ProductName');
			$table->integer('SupplierID')->nullable()->index('SuppliersProducts');
			$table->integer('CategoryID')->nullable()->index('CategoryID');
			$table->string('QuantityPerUnit', 20)->nullable();
			$table->integer('UnitPrice')->nullable()->default(0);
			$table->smallInteger('UnitsInStock')->nullable()->default(0);
			$table->smallInteger('UnitsOnOrder')->nullable()->default(0);
			$table->smallInteger('ReorderLevel')->nullable()->default(0);
			$table->boolean('Discontinued')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Products');
	}

}
