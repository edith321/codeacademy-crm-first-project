<?php

namespace App\models;


class AprClientsPersonsTypesConnections extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_clients_persons_types_connections';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['client_id', 'client_type_id', 'persons_id', 'description'];
}