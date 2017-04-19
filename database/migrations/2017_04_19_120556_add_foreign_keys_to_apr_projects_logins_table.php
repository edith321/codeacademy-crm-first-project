<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAprProjectsLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('apr_projects_logins', function(Blueprint $table)
		{
			$table->foreign('login_places_id', 'fk_pr_project_logins_pr_login_places1')->references('id')->on('apr_logins_places')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('apr_projects_logins', function(Blueprint $table)
		{
			$table->dropForeign('fk_pr_project_logins_pr_login_places1');
		});
	}

}
