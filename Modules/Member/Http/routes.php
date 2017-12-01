<?php

Route::group(['middleware' => ['web','auth'], 'prefix' => 'home', 'namespace' => 'Modules\Member\Http\Controllers'], function()
{
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/historique','MemberController@historique')->name('membres.historiques');
    Route::resource('/histories','HistoryController');
    Route::get('/bureau','MemberController@bureau')->name('membres.bureaux');
});
