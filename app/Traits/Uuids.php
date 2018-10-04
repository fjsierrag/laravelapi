<?php
/**
 * Created by PhpStorm.
 * User: Francisco
 * Date: 18/8/2018
 * Time: 21:27
 */

namespace App\Traits;

use Webpatser\Uuid\Uuid;
trait Uuids
{

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}