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



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::delete('fg-misionera-image/{id}', '\Modules\Member\Http\Controllers\FgMImageController@destroy');

Route::get('mahantatra-feno/mois={mois}&jour={jour}','MHFController@getMhf');