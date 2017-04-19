<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAprProjectsLoginsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('apr_projects_logins_connections', function(Blueprint $table)
		{
			$table->foreign('login_id', 'fk_pr_projects_logins_connections_pr_project_logins1')->references('id')->on('apr_projects_logins')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_id', 'fk_pr_projects_logins_connections_pr_projects1')->references('id')->on('apr_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('apr_projects_logins_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_pr_projects_logins_connections_pr_project_logins1');
			$table->dropForeign('fk_pr_projects_logins_connections_pr_projects1');
		});
	}

}
