<?php

namespace App\models;


class AprClientsPersonsTypes extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_clients_persons_types';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'description'];
}