<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFormFieldToSubmissions extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('submissions', function (Blueprint $table) {
			$table->string('form');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('submissions', function (Blueprint $table) {
			$table->dropColumn('form');
		});
	}
}
