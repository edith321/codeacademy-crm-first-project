<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017.04.21
 * Time: 09:15
 */

namespace App\models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use SoftDeletes;
}