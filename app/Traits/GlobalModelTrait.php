<?php

namespace App\Traits;

use App\Traits\LogsActivityTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Venturecraft\Revisionable\RevisionableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait GlobalModelTrait
{
    use CrudTrait; 
    use HasFactory;
    use SoftDeletes;
    use LogsActivityTrait;
    use RevisionableTrait;


    /**
     * RevisionableTrait
     *
     * https://github.com/laravel-backpack/revise-operation
     * 
     * @return void
     */ 
    protected $revisionFormattedFields = [
        'deleted_at' => 'isEmpty:Active|Deleted'
    ];

    protected $revisionFormattedFieldNames = [
        'deleted_at' => 'Deleted At'
    ];

    public function identifiableName()
    {
        return $this->name;
    }
    
}
