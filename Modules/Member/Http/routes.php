<?php

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'home', 'namespace' => 'Modules\Member\Http\Controllers'], function () {
    Route::get('/historique', 'MemberController@historique')->name('membres.historiques');
    Route::get('/bureau', 'MemberController@bureau')->name('membres.bureaux');

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('/histories', 'HistoryController');
//    Route::resource('/posts','PostController');
    Route::resource('/objectifs', 'ObjectifController');
    Route::resource('/bureaux', 'BureauController');
    Route::resource('/calendars', 'CalendarController');
    /**
     * for the president
     */
    Route::get('/bureaux/edit_all','BureauController@editAll')->name('bureaux.edit.all');
    Route::post('/bureaux/president/{president}', 'PresidentController@update')->name('presidents.update');
    
    Route::post('/conseiller/','ConseillerController@store')->name('conseiller.store');
    Route::delete('/conseiller/{conseiller}','ConseillerController@destroy')->name('conseiller.destroy');

    Route::get('/date_creation', 'CreationDateController@index');
    Route::post('date_creation', 'CreationDateController@store')->name('date_creation.store');
    Route::put('/date_creation', 'CreationDateController@udpate')->name('date_creation.update');

    Route::resource('/fiainam-panahy', 'FiainamPanahyController');
    Route::resource('/fiombonana', 'FiombonanaController');
    Route::resource('/fitomboana', 'FitomboanaController');
    Route::resource('/tafika-masina', 'TafikaMasinaController');
    Route::resource('/maha-olona', 'MahaOlonaController');

    Route::resource('/toriteny-member', 'ToritenyController');
    Route::resource('/mahafantatra-feno-member', 'MFHController');

    Route::resource('/fiangonana-misionera-member', 'FiangonanaMisioneraController');
    Route::resource('/fampianarana-member', 'FampianaranaController');
    

    Route::resource('/vaovao-member', 'VaovaoController');
});

