<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKategoriGaleriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kategori_galeri', function(Blueprint $table)
		{
			$table->foreign('users_id', 'fk_galeri_users10')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kategori_galeri', function(Blueprint $table)
		{
			$table->dropForeign('fk_kategori_users10');
		});
	}

}
