<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class AprProjectsLoginsConnections extends Model
{
    public $updated_at = false;
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