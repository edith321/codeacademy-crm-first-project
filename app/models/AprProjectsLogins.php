<?php

namespace App\models;


class AprProjectsLogins extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_projects_logins';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'login_places_id', 'user_name', 'password', 'login_url'];

    public function loginsPlacesData()
    {
        return $this->hasOne(AprLoginsPlaces::class, 'id', 'login_places_id');
    }
}