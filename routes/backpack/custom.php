<?php

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
    Route::crud('doctor', 'DoctorCrudController');
    Route::crud('project', 'ProjectCrudController');
    Route::crud('userapp', 'UserAppCrudController');
    Route::crud('privatepractice', 'PrivatePracticeCrudController');
    Route::crud('publicpractice', 'PublicPracticeCrudController');
    Route::crud('projectstatus', 'ProjectStatusCrudController');
    Route::crud('questionnaire', 'QuestionnaireCrudController');
}); // this should be the absolute last line of this file