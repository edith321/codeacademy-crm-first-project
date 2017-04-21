<?php

namespace App\models;


class AprProjectsTypes extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_projects_types';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'description'];
}