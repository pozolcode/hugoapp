<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DoctorRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\UserApp;

/**
 * Class DoctorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DoctorCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Doctor::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/doctor');
        CRUD::setEntityNameStrings('doctor', 'doctors');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([  
            // any type of relationship
            'name'         => 'user', // name of relationship method in the model
            'type'         => 'relationship',
            'label'        => 'Correo', // Table column heading
            // OPTIONAL
            // 'entity'    => 'tags', // the method that defines the relationship in your Model
            'attribute' => 'email', // foreign key attribute that is shown to user
            // 'model'     => App\Models\UserApp::class, // foreign key model
        ]);

        // CRUD::column('user_id');

        CRUD::column('address1');
        CRUD::column('address2');
        CRUD::column('phone');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(DoctorRequest::class);

        $users = UserApp::where('type', '=', 'DOCTOR')->get();
        $values = [];

        foreach($users as $user) {
            $values[$user->id] = $user->email;
        }

        CRUD::addField([
            'name'        => 'user_id',
            'label'       => "Usuario",
            'type'        => 'select2_from_array',
            'options'     => $values,
            'allows_null' => false,
            'default'     => 'one',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);

        CRUD::field('address1');
        CRUD::field('address2');
        CRUD::field('phone');

        CRUD::addField([
            'label'     => 'Practica Publica',
            'type'      => 'select2_multiple',
            'name'      => 'publicPractices', // the method that defines the relationship in your Model
            'entity'    => 'publicPractices', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "App\Models\PublicPractice", // foreign key model
            'pivot'     => false, // on create&update, do you need to add/delete pivot table entries?
        ]);

        CRUD::addField([
            'label'     => 'Practica Privada',
            'type'      => 'select2_multiple',
            'name'      => 'privatePractices', // the method that defines the relationship in your Model
            'entity'    => 'privatePractices', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "App\Models\PrivatePractice", // foreign key model
            'pivot'     => false, // on create&update, do you need to add/delete pivot table entries?
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
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
}
