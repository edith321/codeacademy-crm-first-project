<?php

namespace App\models;


class AprLoginsPlaces extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_logins_places';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'description'];
}