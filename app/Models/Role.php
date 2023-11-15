<?php

namespace App\Models;

use App\Traits\GlobalModelTrait;
use Backpack\PermissionManager\app\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    use GlobalModelTrait;
}
