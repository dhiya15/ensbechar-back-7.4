<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SchoolRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SchoolCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SchoolCrudController extends CrudController
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
        CRUD::setModel(\App\Models\School::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/school');
        CRUD::setEntityNameStrings('Ecole', 'Ecole');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('email');
        CRUD::column('phone');
        CRUD::column('fr_name');

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
        CRUD::setValidation(SchoolRequest::class);

        CRUD::addField([
            'name' => 'email',
            'label' => 'Email',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Contact',
        ]);
        CRUD::addField([
            'name' => 'phone',
            'label' => 'Téléphone',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Contact',
        ]);
        CRUD::addField([
            'name' => 'fax',
            'label' => 'Fax',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Contact',
        ]);

        CRUD::addField([
            'name' => 'facebook',
            'label' => 'Facebook',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Contact',
        ]);
        CRUD::addField([
            'name' => 'instagram',
            'label' => 'Instagram',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Contact',
        ]);
        CRUD::addField([
            'name' => 'youtube',
            'label' => 'Youtube',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Contact',
        ]);

        CRUD::addField([
            'name' => 'fr_address',
            'label' => 'Address en francais',
            'type' => 'textarea',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Contact',
        ]);
        CRUD::addField([
            'name' => 'ar_address',
            'label' => 'Address en arabe',
            'type' => 'textarea',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Contact',
        ]);
        CRUD::addField([
            'name' => 'en_address',
            'label' => 'Address en arabe',
            'type' => 'textarea',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Contact',
        ]);

        CRUD::addField([
            'name' => 'fr_name',
            'label' => 'Nom en francais',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Informations Générale',
        ]);
        CRUD::addField([
            'name' => 'en_name',
            'label' => 'Nom en englais',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Informations Générale',
        ]);
        CRUD::addField([
            'name' => 'ar_name',
            'label' => 'Nom en arabe',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Informations Générale',
        ]);

        CRUD::addField([
            'name' => 'fr_description',
            'label' => 'Description en francais',
            'type' => 'textarea',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Informations Générale',
        ]);
        CRUD::addField([
            'name' => 'en_description',
            'label' => 'Description en englais',
            'type' => 'textarea',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Informations Générale',
        ]);
        CRUD::addField([
            'name' => 'ar_description',
            'label' => 'Description en arabe',
            'type' => 'textarea',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Informations Générale',
        ]);

        CRUD::addField([
            'name' => 'fr_working_days',
            'label' => 'Jours de travail en francais',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Informations Générale',
        ]);
        CRUD::addField([
            'name' => 'en_working_days',
            'label' => 'Jours de travail en englais',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Informations Générale',
        ]);
        CRUD::addField([
            'name' => 'ar_working_days',
            'label' => 'Jours de travail en arabe',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Informations Générale',
        ]);

        CRUD::addField([
            'name' => 'working_hours',
            'label' => 'Heurs de travail en arabe',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-4'],
            'tab' => 'Informations Générale',
        ]);

        CRUD::addField([
            'name' => 'latitude',
            'label' => 'Latitude',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-3'],
            'tab' => 'Contact',
        ]);
        CRUD::addField([
            'name' => 'longitude',
            'label' => 'Longitude',
            'type' => 'text',
            'wrapper' => ['class' => 'form-group col-md-3'],
            'tab' => 'Contact',
        ]);

        CRUD::addField([
            'label' => "Loo",
            'name' => 'logo',
            'type' => 'upload',
            'upload' => true,
            'tab' => 'Autre',
            'wrapper' => ['class' => 'form-group col-md-6'],
        ]);
        CRUD::addField([
            'label' => "Sur maintenance",
            'name' => 'under_maintenance',
            'tab' => 'Autre',
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
