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
    $followed=\App\Follow::where('job_id',$request->get('job'))
        ->where('user_id',$request->get('user'))
        ->count();
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
    $followed=\App\Follow::where('job_id',$request->get('job'))
        ->where('user_id',$request->get('user'))
        ->first();
    if ($followed!==null)
    {
        $followed->delete();
        return response()->json(['followed'=>false]);
    }
    else
    {
        \App\Follow::create([
            'job_id'=>$request->get('job'),
            'user_id'=>$request->get('user')
        ]);
        return response()->json(['followed'=>true]);
    }
})->middleware('auth:api');