<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class AprProjectsLoginsConnections extends Model
{
    public $updated_at = false;
    protected $hidden = ['count', 'created_at'];
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

    public function projectsLoginsData()
    {
        return $this->hasMany(AprProjectsLogins::class, 'id', 'login_id')->with('loginsPlacesData');
    }
    public function projectsData()
    {
        return $this->hasOne(AprProjects::class, 'id', 'projects_id');
    }
}