<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class AprClientsPersonsTypesConnections extends Model
{
    public $updated_at = false;
    protected $hidden = ['count', 'created_at'];
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_clients_persons_types_connections';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['client_id', 'client_type_id', 'persons_id', 'description'];

    public function personsData()
    {
        return $this->hasOne(AprPersons::class, 'id', 'persons_id');
    }
    public function clientsData()
    {
        return $this->hasOne(AprClients::class, 'id', 'client_id');
    }
}