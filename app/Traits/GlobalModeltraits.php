<?php

namespace App\Traits;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Venturecraft\Revisionable\RevisionableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait GlobalModelTraits
{
    use CrudTrait; 
    use HasFactory;
    use LogsActivity;
    use SoftDeletes;
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
