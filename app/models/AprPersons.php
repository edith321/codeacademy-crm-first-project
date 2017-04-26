<?php

namespace App\models;


class AprPersons extends BaseModel
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
    protected $fillable = ['id', 'name', 'e-mail', 'phone'];

    public function projectsTypesPersonsConnectionsData()
    {
        return $this->hasMany(AprProjectsTypesPersonsConnections::class, 'persons_id', 'id')->with(['projectsData', 'employeeTypesData']);
    }
    public function clientsPersonsTypesConnectionsData()
    {
        return $this->hasMany(AprClientsPersonsTypesConnections::class, 'persons_id', 'id')->with(['personsData', 'clientsData']);
    }
}