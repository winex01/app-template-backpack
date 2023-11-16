<?php

namespace App\Traits;

use Illuminate\Support\Str;
use App\Traits\SetEntityNameStringsTrait;

/**
 * CrudPermissionTrait: use Permissions to configure Backpack
 */
trait CrudPermissionTrait
{
    use SetEntityNameStringsTrait;

    // the operations defined for CRUD controller
    public array $operations = ['list', 'show', 'create', 'update', 'delete', 'revise'];


    /**
     * set CRUD access using spatie Permissions defined for logged in user
     *
     * @return void
     */
    public function setAccessUsingPermissions($moreOperations = null)
    {
        $this->setEntityNameString();

        if ($moreOperations != null) {
            // array_push($this->operations, $moreOperations);
            if (is_array($moreOperations)) {
                $this->operations = array_merge($this->operations, $moreOperations);
            }else {
                $this->operations[] = $moreOperations;
            }
        }

        // default
        $this->crud->denyAccess($this->operations); 

        // get context
        $table = $this->crud->getModel()->getTable();
        $user = request()->user();

        // double check if no authenticated user
        if (!$user) {
            return; // allow nothing
        }

        // enable operations depending on permission
        foreach ($this->operations as $operation) {
            $permission = $table . '.' . $operation;

            if ($user->can($permission)) {
                $this->crud->allowAccess($operation);
            }
        }
    }
}

/* 

NOTE:: Admin permissions
admin_web_tinker   ---> check AuthServiceProvider
admin_file_manager ---> check middleware,
admin_debugbar     ---> check middleware
admin_telescope    ---> check TeslescopeServiceProvider, 
                        if APP_ENV = local even if enabled always shows the 
                        telescope regardless of permissions, try changing 
                        the APP_ENV to production to test.

                        
*/