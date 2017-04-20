<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AprPersons extends Model
{
    use SoftDeletes;
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
}