<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function(){
    Route::apiResource("/person","Api\V1\PersonController")->only('index');
    Route::apiResource("/person","Api\V1\PersonController")->only(['show','update','destroy','store']);
});

Route::prefix('v2')->group(function(){
    Route::apiResource('/person', 'Api\V2\PersonController')->only('show');
});
