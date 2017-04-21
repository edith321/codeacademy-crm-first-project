<?php

namespace App\models;


class AprProjects extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_projects';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'type_id', 'clients_id', 'name', 'description'];
}