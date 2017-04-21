<?php

namespace App\models;


class AprEmployeeTypes extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'apr_employee_types';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'description'];
}