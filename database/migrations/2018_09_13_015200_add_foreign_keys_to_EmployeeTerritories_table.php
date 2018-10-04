<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmployeeTerritoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('EmployeeTerritories', function(Blueprint $table)
		{
			$table->foreign('EmployeeID', 'FK_EmployeeTerritories_Employees')->references('EmployeeID')->on('Employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('TerritoryID', 'FK_EmployeeTerritories_Territories')->references('TerritoryID')->on('Territories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('EmployeeTerritories', function(Blueprint $table)
		{
			$table->dropForeign('FK_EmployeeTerritories_Employees');
			$table->dropForeign('FK_EmployeeTerritories_Territories');
		});
	}

}
