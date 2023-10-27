<?php

namespace App\Models;

use App\Traits\GlobalModelTraits;
use Backpack\PermissionManager\app\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    use GlobalModelTraits;
}
