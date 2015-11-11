<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguagesTable extends Migration {

	public function up()
	{
		Schema::create('languages', function(Blueprint $table) {
			$table->string('locale', 2)->primary();
			$table->string('name')->nullable();
			$table->integer('order');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('languages');
	}
}