<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DepartmentRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DepartmentCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DepartmentCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    //use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Department::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/department');
        CRUD::setEntityNameStrings('departement', 'departements');
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
            'name' => 'fr_title',
            'label' => 'Nom département',
            'type'  => 'text',
            'limit'  => 200
        ]);

        CRUD::addColumn([
            'name' => 'fr_responsible_name',
            'label' => 'Résponsable',
            'type'  => 'text',
            'limit'  => 200
        ]);

        CRUD::addColumn([
            'name' => 'is_active',
            'label' => 'Status',
            'type'  => 'boolean',
            'options' => [1 => 'Active', 0 => 'Inactive']
        ]);

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
        CRUD::setValidation(DepartmentRequest::class);

        CRUD::addField([
            'name' => 'fr_title',
            'label' => 'Nom en français',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        CRUD::addField([
            'name' => 'en_title',
            'label' => 'Nom en englais',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        CRUD::addField([
            'name' => 'ar_title',
            'label' => 'Nom en arabe',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);

        CRUD::addField([
            'name' => 'fr_description',
            'label' => "Description en francais",
            'type'  => 'textarea',
            'wrapper' => ['class' => 'form-group col-md-12'],
        ]);
        CRUD::addField([
            'name' => 'en_description',
            'label' => "Description en englais",
            'type'  => 'textarea',
            'wrapper' => ['class' => 'form-group col-md-12'],
        ]);
        CRUD::addField([
            'name' => 'ar_description',
            'label' => "Description en arabe",
            'type'  => 'textarea',
            'wrapper' => ['class' => 'form-group col-md-12'],
        ]);


        CRUD::addField([
            'name' => 'fr_responsible_name',
            'label' => 'Nom résponsable en français',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        CRUD::addField([
            'name' => 'en_responsible_name',
            'label' => 'Nom résponsable en englais',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        CRUD::addField([
            'name' => 'ar_responsible_name',
            'label' => 'Nom résponsable en arabe',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);

        CRUD::addField([
            'name' => 'responsible_email',
            'label' => 'Email du résponsable',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);

        CRUD::addField([
            'label' => "Image du résponsable",
            'name' => 'responsible_image',
            'type' => 'upload',
            'upload' => true,
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        CRUD::addField([
            'label' => "Image département",
            'name' => 'image',
            'type' => 'upload',
            'upload' => true,
            'wrapper' => ['class' => 'form-group col-md-4'],
        ]);
        CRUD::addField([
            'name' => 'is_active',
            'label' => 'Active'
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
