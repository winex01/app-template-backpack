<?php

namespace App\Models;

use App\Traits\GlobalModelTraits;
use Backpack\PermissionManager\app\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
{
    use GlobalModelTraits;
}
