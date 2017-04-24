<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class AprProjectsTypesPersonsConnections extends Model
{
    public $updated_at = false;
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_projects_types_persons_connections';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['projejects_id', 'persons_id', 'types_id'];
}