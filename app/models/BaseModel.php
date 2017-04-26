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
use Ramsey\Uuid\Uuid;

class BaseModel extends Model
{
    use SoftDeletes;
    public $incrementing = false;
    protected $hidden = ['count', 'deleted_at', 'updated_at', 'created_at'];

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string)$model->generateNewId(); // getKeyName - Model aprasyta f-ja
        });
    }

    public function generateNewId()
    {
        if (isset($this->attributes['id'])) { //attributes - key sinonimas, isset - is set (ar nustatyta)
            return $this->attributes['id'];
        }

        return Uuid::uuid4();
    }
}
