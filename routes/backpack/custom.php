<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('ad', 'AdCrudController');
    Route::crud('department', 'DepartmentCrudController');
    Route::crud('news', 'NewsCrudController');
    Route::crud('post', 'PostCrudController');
    Route::crud('school', 'SchoolCrudController');
    Route::crud('speciality', 'SpecialityCrudController');
    Route::crud('topic', 'TopicCrudController');
    Route::crud('important-website', 'ImportantWebsiteCrudController');
    Route::crud('school-in-numbers', 'SchoolInNumbersCrudController');
    Route::crud('school-description', 'SchoolDescriptionCrudController');
    Route::crud('services', 'ServicesCrudController');

    Route::crud('livre', 'LivreCrudController');
    Route::crud('etudiant', 'EtudiantCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::crud('mad', 'MadCrudController');
    Route::crud('application', 'ApplicationCrudController');
}); // this should be the absolute last line of this file