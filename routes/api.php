<?php


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::delete('fg-misionera-image/{id}', '\Modules\Member\Http\Controllers\FgMImageController@destroy');

Route::get('mahantatra-feno/mois={mois}&jour={jour}','MHFController@getMhf');

Route::delete('mahanfantatra-feno','\Modules\Member\Http\Controllers\MFHController@destroy')->name('api.mhf.delete');
Route::delete('perikopa', '\Modules\Member\Http\Controllers\PerikopaController@destroy')->name('api.perikopa.delete');

Route::delete('fks', '\Modules\Member\Http\Controllers\FKSController@destroy')->name('api.fks.destroy');
