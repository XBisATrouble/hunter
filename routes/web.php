<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('email/verify/succeed/{token}',['as'=>'email.verify.succeed','uses'=>'EmailController@successVerify']);
Route::get('email/verify/{token}',['as'=>'email.verify','uses'=>'EmailController@verify']);

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    $router->post('login', 'LoginController@login');
    $router->post('logout', 'LoginController@logout');

    $router->get('/', 'DashboardController@index');
    $router->post('/register','RegisterController@register');

    Route::resource('jobs','JobsController',['names' => [
        'create' => 'jobs.create',
        'show' => 'jobs.show',
        'index'=>'jobs.index',
    ]]);
});