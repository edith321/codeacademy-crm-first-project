<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAprProjectsTypesPersonsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apr_projects_types_persons_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('projejects_id', 36)->index('fk_pr_projects_types_persons_connections_pr_projects1_idx');
			$table->string('persons_id', 36)->index('fk_pr_projects_types_persons_connections_pr_persons1_idx');
			$table->string('types_id', 36)->index('fk_pr_projects_types_persons_connections_pr_projects_person_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apr_projects_types_persons_connections');
	}

}
