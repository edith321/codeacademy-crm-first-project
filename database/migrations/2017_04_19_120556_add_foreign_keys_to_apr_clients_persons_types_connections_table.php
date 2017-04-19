<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAprClientsPersonsTypesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('apr_clients_persons_types_connections', function(Blueprint $table)
		{
			$table->foreign('client_type_id', 'fk_pr_client_connections_pr_client_person_type1')->references('id')->on('apr_clients_persons_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('client_id', 'fk_pr_client_connections_pr_clients')->references('id')->on('apr_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('persons_id', 'fk_pr_client_connections_pr_persons1')->references('id')->on('apr_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('apr_clients_persons_types_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_pr_client_connections_pr_client_person_type1');
			$table->dropForeign('fk_pr_client_connections_pr_clients');
			$table->dropForeign('fk_pr_client_connections_pr_persons1');
		});
	}

}
