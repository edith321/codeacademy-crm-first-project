<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAprProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('apr_projects', function(Blueprint $table)
		{
			$table->foreign('clients_id', 'fk_pr_projects_pr_clients1')->references('id')->on('apr_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('type_id', 'fk_pr_projects_pr_project_types1')->references('id')->on('apr_projects_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('apr_projects', function(Blueprint $table)
		{
			$table->dropForeign('fk_pr_projects_pr_clients1');
			$table->dropForeign('fk_pr_projects_pr_project_types1');
		});
	}

}
