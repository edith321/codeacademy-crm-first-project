<?php

namespace App\models;


class AprProjectsLoginsConnections extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_projects_logins_connections';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['project_id', 'login_id'];
}