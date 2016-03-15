<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
    Route::get('/', function () {
        return View::make('pages.home');
    });
    
    Route::get('about', function () {
        return View::make('pages.about');
    });
        
    Route::get('projects', function () {
        return View::make('pages.projects');
    });
        
    Route::get('services', function () {
        return View::make('pages.services');
    });
        
    Route::get('request', function () {
        return View::make('pages.request');
    });
        
    Route::get('testimonials', function () {
        return View::make('pages.testimonials');
    });
        
    Route::get('contacts', function () {
        return View::make('pages.contacts');
    });
    
    Route::get('/{locale}', function ($locale) {
        App::setLocale($locale);
        return View::make('pages.home');
    });
    
});

