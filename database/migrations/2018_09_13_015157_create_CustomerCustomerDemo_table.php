<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerCustomerDemoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CustomerCustomerDemo', function(Blueprint $table)
		{
			$table->char('CustomerID', 5);
			$table->char('CustomerTypeID', 10);
			$table->primary(['CustomerID','CustomerTypeID'], 'PK_CustomerCustomerDemo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CustomerCustomerDemo');
	}

}
