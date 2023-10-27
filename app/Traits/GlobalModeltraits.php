<?php

namespace App\Traits;

use App\Traits\LogsActivity;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

trait GlobalModelTraits
{
    use CrudTrait; 
    use HasFactory;
    use LogsActivity;
    use SoftDeletes;
}
