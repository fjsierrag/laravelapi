<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Orders', function(Blueprint $table)
		{
			$table->integer('OrderID', true);
			$table->char('CustomerID', 5)->nullable()->index('CustomersOrders');
			$table->integer('EmployeeID')->nullable()->index('EmployeesOrders');
			$table->dateTime('OrderDate')->nullable()->index('OrderDate');
			$table->dateTime('RequiredDate')->nullable();
			$table->dateTime('ShippedDate')->nullable()->index('ShippedDate');
			$table->integer('ShipVia')->nullable()->index('ShippersOrders');
			$table->integer('Freight')->nullable()->default(0);
			$table->string('ShipName', 40)->nullable();
			$table->string('ShipAddress', 60)->nullable();
			$table->string('ShipCity', 15)->nullable();
			$table->string('ShipRegion', 15)->nullable();
			$table->string('ShipPostalCode', 10)->nullable()->index('ShipPostalCode');
			$table->string('ShipCountry', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Orders');
	}

}
