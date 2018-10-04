<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Order Details', function(Blueprint $table)
		{
			$table->foreign('OrderID', 'FK_Order_Details_Orders')->references('OrderID')->on('Orders')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ProductID', 'FK_Order_Details_Products')->references('ProductID')->on('Products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Order Details', function(Blueprint $table)
		{
			$table->dropForeign('FK_Order_Details_Orders');
			$table->dropForeign('FK_Order_Details_Products');
		});
	}

}
