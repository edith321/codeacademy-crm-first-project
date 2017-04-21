<?php

namespace App\models;


class AprProjectsTypesPersonsConnections extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_persons';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['projejects_id', 'persons_id', 'types_id'];
}