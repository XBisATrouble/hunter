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

Route::get('/','HomeController@index');
Route::get('/about',function (){
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('email/verify/succeed/{token}',['as'=>'email.verify.succeed','uses'=>'EmailController@successVerify']);
Route::get('email/verify/{token}',['as'=>'email.verify','uses'=>'EmailController@verify']);

Route::resource('jobs','JobsController');
Route::resource('resumes','ResumesController');
Route::resource('questions','QuestionsController');

Route::get('/results','SearchController@searchJobsIndex');

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    $router->post('/login', 'LoginController@login');
    $router->post('/logout', 'LoginController@logout');

    $router->get('/', 'DashboardController@index');
    $router->post('/register','RegisterController@register');

    $router->get('/jobs/offline','JobsController@showOffline')->name('jobs.offline');
    $router->get('/jobs/{id}/offline','JobsController@offLine');
    $router->get('/jobs/{id}/online','JobsController@onLine');
    $router->resource('jobs','JobsController',['names' => [
        'create' => 'jobs.create',
        'show' => 'jobs.show',
        'index'=>'jobs.index',
    ]]);

    $router->get('notifications','NotificationsController@index');
    $router->get('notifications/all','NotificationsController@all');
    $router->resource('resumes','ResumesController');
    $router->get('info','AdminController@index');

    $router->get('jobs/{id}/resumes','JobsController@resumes');
});

Route::get('job/{job}/follow','JobFollowController@follow');
Route::get('user/followed','UserController@followed');
Route::get('user','UserController@index');
Route::post('user/avatar','UserController@avatarUpload');

Route::get('resume/{resume}/post','JobPostController@post');
Route::post('resume/photo','JobPostController@photo');
Route::get('test',function (){
    return view('errors.503');
});