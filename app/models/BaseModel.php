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
    public $incrementing = false;

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string)$model->generateNewId();
        });
    }
    public function generateNewId()
    {
        if(isset($this->attributes['id'])) {
            return $this->attributes['id'];
        }
        return uuid4();
    }
}