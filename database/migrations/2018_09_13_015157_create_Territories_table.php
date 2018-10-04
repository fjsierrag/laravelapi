<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTerritoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Territories', function(Blueprint $table)
		{
			$table->string('TerritoryID', 20)->primary('PK_Territories');
			$table->char('TerritoryDescription', 50);
			$table->integer('RegionID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Territories');
	}

}
