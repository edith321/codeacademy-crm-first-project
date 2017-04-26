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


    protected $appends = ['is_company'];

    //protected $with = ['projects', 'clientsTypes']; - nebereikia, nes AprcClientsController pasirasom sita

    public function projectsData()
    {
        return $this->hasMany(AprProjects::class, 'clients_id', 'id');
    }
    public function clientsPersonsTypesConnectionsData()
    {
        return $this->hasMany(AprClientsPersonsTypesConnections::class, 'client_id', 'id')->with(['personsData', 'clientsPersonsTypesData']);
    }

    public function getIsCompanyAttribute()
    {
        return $this->client_type == 'J';
    }

}