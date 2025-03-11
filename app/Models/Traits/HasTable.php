<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;

trait HasTable
{
    public static function getTableName(): string
    {
        /** @var Model $model */
        $model = new static();
        return $model->getTable();
    }
}
