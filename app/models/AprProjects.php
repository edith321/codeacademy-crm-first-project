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

    public function clientsData()
    {
        return $this->hasOne(AprClients::class, 'id', 'clients_id');
    }
    public function projectsTypesData()
    {
        return $this->hasMany(AprProjectsTypes::class, 'id', 'type_id');
    }
    public function projectsLoginsConnections()
    {
        return $this->hasMany(AprProjectsLoginsConnections::class, 'project_id', 'id')->with(['projectsLoginsData']);
    }
    public function projectsTypesPersonsConnections()
    {
        return $this->hasMany(AprProjectsTypesPersonsConnections::class, 'projejects_id', 'id')->with(['personsData', 'employeeTypesData']);
    }
}