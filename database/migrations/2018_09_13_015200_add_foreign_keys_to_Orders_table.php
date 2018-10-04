<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Orders', function(Blueprint $table)
		{
			$table->foreign('EmployeeID', 'FK_Orders_Employees')->references('EmployeeID')->on('Employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('CustomerID', 'FK_Orders_Customers')->references('CustomerID')->on('Customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ShipVia', 'FK_Orders_Shippers')->references('ShipperID')->on('Shippers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Orders', function(Blueprint $table)
		{
			$table->dropForeign('FK_Orders_Employees');
			$table->dropForeign('FK_Orders_Customers');
			$table->dropForeign('FK_Orders_Shippers');
		});
	}

}
