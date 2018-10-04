<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Employees', function(Blueprint $table)
		{
			$table->foreign('ReportsTo', 'FK_Employees_Employees')->references('EmployeeID')->on('Employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Employees', function(Blueprint $table)
		{
			$table->dropForeign('FK_Employees_Employees');
		});
	}

}
