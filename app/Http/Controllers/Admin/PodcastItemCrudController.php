<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PodcastItemRequest as StoreRequest;
use App\Http\Requests\PodcastItemRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class PodcastItemCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PodcastItemCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\PodcastItem');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/podcastitem');
        $this->crud->setEntityNameStrings('podcastitem', 'podcast_items');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();
        $this->crud->enableExportButtons();
        $this->crud->addColumns(['podcast_id', 'title', 'description', 'url', 'audio_url', 'published_at', 'created_at']); 

        $this->crud->setColumnDetails(
            'podcast_id',
            [
                'label' => 'Podcasts',
                'attribute' => 'name_ar',
                'type' => 'select',
                'name' => 'podcast_id',
                'entity' => 'podcast',
                'model' => \App\Podcast::class
            ]
        ); // adjusts the properties of the passed in column (by name)

        // add asterisk for fields that are required in PodcastItemRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->removeButton('create');
        $this->crud->removeButton('update');
        
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
