<?php

namespace LaraStuffs\PrimaryUUID\Eloquent\Concerns;

use Illuminate\Support\Str;

trait UseUUIDAsPrimaryKey
{
    protected static function bootUseUUIDAsPrimaryKey()
    {
        self::creating(
            function ($model) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        );
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

}
