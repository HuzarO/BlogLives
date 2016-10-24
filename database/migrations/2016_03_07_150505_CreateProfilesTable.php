<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('profile_id', false, true)->unique();
            $table->string('description', 1000)->nullable();
			$table->string('facebook_url', 2083)->nullable();
			$table->string('twitter_url', 2083)->nullable();
			$table->string('google_plus_url', 2083)->nullable();
			$table->string('linkedin_url', 2083)->nullable();
			$table->string('youtube_url', 2083)->nullable();
			$table->string('vimeo_url', 2083)->nullable();
			$table->string('instagram_url', 2083)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}
}
