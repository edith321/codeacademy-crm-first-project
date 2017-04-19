<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAprProjectsTypesPersonsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('apr_projects_types_persons_connections', function(Blueprint $table)
		{
			$table->foreign('persons_id', 'fk_pr_projects_types_persons_connections_pr_persons1')->references('id')->on('apr_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('projejects_id', 'fk_pr_projects_types_persons_connections_pr_projects1')->references('id')->on('apr_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('types_id', 'fk_pr_projects_types_persons_connections_pr_projects_person_t1')->references('id')->on('apr_employee_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('apr_projects_types_persons_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_pr_projects_types_persons_connections_pr_persons1');
			$table->dropForeign('fk_pr_projects_types_persons_connections_pr_projects1');
			$table->dropForeign('fk_pr_projects_types_persons_connections_pr_projects_person_t1');
		});
	}

}
