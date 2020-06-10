<?php

namespace LaraStuffs\PrimaryUUID\Eloquent\Concerns;

use Illuminate\Support\Str;

/**
 * Trait UseUUIDAsPrimaryKey
 *
 * @package LaraStuffs\PrimaryUUID\Eloquent\Concerns
 */
trait UseUUIDAsPrimaryKey
{


    /**
     * Boot this traits on the model
     *
     * @return void
     */
    protected static function bootUseUUIDAsPrimaryKey()
    {
        self::creating(
            function ($model) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        );

    }


    /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing()
    {
        return false;

    }


    /**
     * Get the key type.
     *
     * @return string
     */
    public function getKeyType()
    {
        return 'string';

    }


}
