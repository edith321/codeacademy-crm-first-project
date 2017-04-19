<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAprClientsPersonsTypesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apr_clients_persons_types_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('client_id', 36)->index('fk_pr_client_connections_pr_clients_idx');
			$table->string('client_type_id', 36)->index('fk_pr_client_connections_pr_client_person_type1_idx');
			$table->string('persons_id', 36)->index('fk_pr_client_connections_pr_persons1_idx');
			$table->text('description', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apr_clients_persons_types_connections');
	}

}
