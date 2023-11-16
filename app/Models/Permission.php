<?php

namespace App\Models;

use App\Traits\GlobalModelTrait;
use Backpack\PermissionManager\app\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
{
    use GlobalModelTrait;

    public static function boot() 
    {
        parent::boot();

        static::addGlobalScope('defaultOrder', function (\Illuminate\Database\Eloquent\Builder $builder) {
            $orderBy = 'asc';
            $builder->orderBy('name', $orderBy);
        });
    }
}
