<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class AprProjectsTypesPersonsConnections extends Model
{
    public $updated_at = false;
    protected $hidden = ['count', 'created_at'];
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

    public function projectsData()
    {
        return $this->hasOne(AprProjects::class, 'id', 'projejects_id');
    }
    public function personsData()
    {
        return $this->hasOne(AprPersons::class, 'id', 'persons_id');
    }
    public function employeeTypesData()
    {
        return $this->hasOne(AprEmployeeTypes::class, 'id', 'types_id');
    }
}