<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Employees', function(Blueprint $table)
		{
			$table->integer('EmployeeID', true);
			$table->string('LastName', 20)->index('LastName');
			$table->string('FirstName', 10);
			$table->string('Title', 30)->nullable();
			$table->string('TitleOfCourtesy', 25)->nullable();
			$table->dateTime('BirthDate')->nullable();
			$table->dateTime('HireDate')->nullable();
			$table->string('Address', 60)->nullable();
			$table->string('City', 15)->nullable();
			$table->string('Region', 15)->nullable();
			$table->string('PostalCode', 10)->nullable()->index('PostalCode');
			$table->string('Country', 15)->nullable();
			$table->string('HomePhone', 24)->nullable();
			$table->string('Extension', 4)->nullable();
			$table->binary('Photo')->nullable();
			$table->text('Notes', 8)->nullable();
			$table->integer('ReportsTo')->nullable();
			$table->string('PhotoPath')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Employees');
	}

}
