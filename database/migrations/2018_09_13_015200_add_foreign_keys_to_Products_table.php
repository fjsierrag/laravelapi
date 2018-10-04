<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Products', function(Blueprint $table)
		{
			$table->foreign('CategoryID', 'FK_Products_Categories')->references('CategoryID')->on('Categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('SupplierID', 'FK_Products_Suppliers')->references('SupplierID')->on('Suppliers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Products', function(Blueprint $table)
		{
			$table->dropForeign('FK_Products_Categories');
			$table->dropForeign('FK_Products_Suppliers');
		});
	}

}
