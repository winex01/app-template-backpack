<?php

namespace App\Traits\ExtendBackpack;

use App\Traits\ExtendBackpack\ColumnTrait;
use App\Traits\ExtendBackpack\CrudPermissionTrait;
use App\Traits\ExtendBackpack\SetEntityNameStringsTrait;


trait ExtendBackpackTrait
{
    use CrudPermissionTrait;
    use SetEntityNameStringsTrait;
    use ColumnTrait;

    // initilize
    public function extendBackpack(bool $permission = true)
    {
        if ($permission) {
            // $this->setAccessUsingPermissions();
        }
        
        $this->setEntityNameString();
    }
}
