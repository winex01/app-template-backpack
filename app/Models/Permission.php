<?php

namespace App\Models;

use App\Traits\GlobalModelTrait;
use Backpack\PermissionManager\app\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
{
    use GlobalModelTrait;
}
