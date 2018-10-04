<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Customers', function(Blueprint $table)
		{
			$table->char('CustomerID', 5)->primary('PK_Customers');
			$table->string('CompanyName', 40)->index('CompanyName');
			$table->string('ContactName', 30)->nullable();
			$table->string('ContactTitle', 30)->nullable();
			$table->string('Address', 60)->nullable();
			$table->string('City', 15)->nullable()->index('City');
			$table->string('Region', 15)->nullable()->index('Region');
			$table->string('PostalCode', 10)->nullable()->index('PostalCode');
			$table->string('Country', 15)->nullable();
			$table->string('Phone', 24)->nullable();
			$table->string('Fax', 24)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Customers');
	}

}
