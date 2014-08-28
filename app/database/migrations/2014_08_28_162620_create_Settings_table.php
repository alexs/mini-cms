<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('site_name');
			$table->string('site_logo');
			$table->string('site_logo2');
			$table->string('slogan');
			$table->string('subsection1_title');
			$table->string('subsection1_desc');
			$table->string('subsection1_image');
			$table->string('subsection2_title');
			$table->string('subsection2_desc');
			$table->string('subsection2_image');
			$table->string('subsection3_title');
			$table->string('subsection3_desc');
			$table->string('subsection3_image');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('settings');
	}

}
