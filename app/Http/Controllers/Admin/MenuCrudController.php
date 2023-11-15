<?php

namespace App\Http\Controllers\Admin;

use App\Traits\CrudPermissionTrait;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\PermissionManager\app\Models\Permission;

/**
 * Class MenuCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MenuCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
    use \Backpack\ReviseOperation\ReviseOperation;

    use CrudPermissionTrait;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Menu::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/menu');
        CRUD::setEntityNameStrings('menu', 'menus');

        // parameters add 'reorder' permission to the existing/default crud operation permission
        // $this->setAccessUsingPermissions('reorder'); 
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        $this->crud->removeColumns($this->reorderColumns());
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::field('label')->validationRules('required|min:3');
        CRUD::setFromDb(); // set fields from db columns.

        $this->crud->removeFields($this->reorderColumns());

        CRUD::modifyField('permission',[   // select_from_array
            'type'        => 'select_from_array',
            'options'     => Permission::select('name')->pluck('name', 'name'),
            'allows_null' => true,
        ]);

        $iconLink = 'https://icons8.com/line-awesome';
        $this->crud->modifyField('icon', [
            'hint' => '<a href="'.$iconLink.'" target="_blank">'.$iconLink.'</a> '
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupReorderOperation()
    {
        // model attribute to be shown on draggable items
        CRUD::set('reorder.label', 'label');
        // maximum number of nesting allowed
        CRUD::set('reorder.max_level', 3);
    }
    
    // extend update operation
    public function update()
    {
        // get entry ID from Request (makes sure its the last ID for nested resources)
        $id = $this->crud->getCurrentEntryId();

        if ($id != null && $id == 8) { //hard code id 8 = elfinder in menu

            $configElfidnerUrl = ltrim(config('elfinder.route.prefix'), '/');
    
            // the config elfinder should match the route.prefix and URL field to avoid security breach, please check FileManager middleware
            if ($configElfidnerUrl != request()->url) { 
                \Alert::error('The elfinder config route prefix should match the URL field.')->flash();
                return redirect()->back();
            }
        }elseif ($id != null && $id == 12) { # NOTE:: $id 12 is for activity log, dont let Users update the URL
            if (request()->url != 'activity-log') {
                \Alert::error('You\'re not allowed to modify the activity logs URL.')->flash();
                return redirect()->back();
            }
        }elseif ($id != null && $id == 13) { # NOTE:: $id 13 is for telescope, dont let Users update the URL
            // the config telescope path should match
            if (config('telescope.path') != request()->url) { 
                \Alert::error('The telescope config path should match the URL field.')->flash();
                return redirect()->back();
            }
        }
        else {
            #
        }

        // Continue with the update logic for other cases
        return $this->traitUpdate();
    }

    private function reorderColumns()
    {
        return [
            'parent_id',
            'lft',
            'rgt',
            'depth',
        ];
    }
}
