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
/*
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
    
});

Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
    return View::make('pages.home');
    //
});*/

// app/routes.php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
 * Set up route patterns - patterns will have to be the same as in translated route for current language
 */
foreach(Lang::get('routes') as $k => $v) {
    Route::pattern($k, $v);
}
/*
 *  Set up locale and locale_prefix if other language is selected
 */
if (in_array(Request::segment(1), Config::get('app.alt_langs'))) {

    App::setLocale(Request::segment(1));
    Config::set('app.locale_prefix', Request::segment(1));
}

Route::group(array('prefix' => Config::get('app.locale_prefix')), function()
{
    Route::get(
        '/',
        function () {
            return View::make('pages.home');
        }
    );


    Route::get(
        '/{contacts}/',
        function () {
            return View::make('pages.contacts');
        }
    )->where('contacts', Lang::get('routes.contacts'));



    Route::get(
        '/{about}/',
        function () {
            return View::make('pages.about');

        }
    )->where('about', Lang::get('routes.about'));


});