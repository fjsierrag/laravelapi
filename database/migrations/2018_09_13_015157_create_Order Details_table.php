<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Order Details', function(Blueprint $table)
		{
			$table->integer('OrderID')->index('OrdersOrder_Details');
			$table->integer('ProductID')->index('ProductsOrder_Details');
			$table->integer('UnitPrice')->default(0);
			$table->smallInteger('Quantity')->default(1);
			$table->float('Discount', 24, 0)->default(0);
			$table->primary(['OrderID','ProductID'], 'PK_Order_Details');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Order Details');
	}

}
