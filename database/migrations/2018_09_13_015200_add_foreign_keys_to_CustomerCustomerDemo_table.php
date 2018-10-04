<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerCustomerDemoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('CustomerCustomerDemo', function(Blueprint $table)
		{
			$table->foreign('CustomerTypeID', 'FK_CustomerCustomerDemo')->references('CustomerTypeID')->on('CustomerDemographics')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('CustomerID', 'FK_CustomerCustomerDemo_Customers')->references('CustomerID')->on('Customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('CustomerCustomerDemo', function(Blueprint $table)
		{
			$table->dropForeign('FK_CustomerCustomerDemo');
			$table->dropForeign('FK_CustomerCustomerDemo_Customers');
		});
	}

}
