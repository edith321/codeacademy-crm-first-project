<?php

namespace App\models;


class AprClients extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_clients';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'client_type'];
}