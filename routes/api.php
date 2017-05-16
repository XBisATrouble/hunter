<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/jobType','JobsController@typeClass');
Route::get('/jobType/{id}','JobsController@typeDivision');
Route::get('/jobSection/{id}','JobsController@typeSection');

Route::post('/job/follower',function (Request $request){
    $user = Auth::guard('api')->user();
    $followed=$user->followed($request->get('job'));
    if ($followed)
    {
        return response()->json(['followed'=>true]);
    }
    else
    {
        return response()->json(['followed'=>false]);
    }
})->middleware('auth:api');

Route::post('/job/follow',function (Request $request){
    $user = Auth::guard('api')->user();
    $job=\App\Job::find($request->get('job'));
    $followed=$user->followThis($job->id);

    if (count($followed['detached']) > 0)
    {
        $job->decrement('followers_count');
        return response()->json(['followed'=>false]);
    }

    $job->increment('followers_count');
    return response()->json(['followed'=>true]);
})->middleware('auth:api');