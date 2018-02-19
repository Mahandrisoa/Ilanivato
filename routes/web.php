<?php

Route::get('/','VisitorController@index')->name('pejy-voalohany');
Route::get('/fiangonana-lehibe','FgLehibeController@index')->name('fg-lehibe');
Route::get('/fiangonana-mitory','FgMitoryController@index')->name('fg-mitory');
Route::get('/A-propos','AboutController@index')->name('fg-about');
Route::get('/SSAF','SsafController@index')->name('fg-ssaf');
Route::get('/Blog','BlogController@index')->name('fg-blog');
Route::get('/toriteny','ToritenyController@index')->name('fg-toriteny');
Route::resource('/toriteny', 'ToritenyController');

/**
 * fgLehibe
 */
Route::get('/fahateraham-baovao', 'fgLehibe\fiainamPanahyController@fahaterahamBaovao')->name('fahateraham-baovao');
Route::get('/fiainam-panahy-velona-sy-miaina', 'fgLehibe\fiainamPanahyController@velonaSyMiaina')->name('velona-sy-miaina');

Route::get('/soratra-masina', 'fgLehibe\fitomboanaController@soratraMasina')->name('soratra-masina');
Route::get('/fiainam-bavaka', 'fgLehibe\fitomboanaController@fiainamBavaka')->name('fiainam-bavaka');

Route::get('/miaraka', 'fgLehibe\fiombonanaController@miaraka')->name('miaraka');
Route::get('/mifampiresaka', 'fgLehibe\fiombonanaController@mifampiresaka')->name('mifampiresaka');
Route::get('/mifankahita', 'fgLehibe\fiombonanaController@mifankahita')->name('mifankahita');
Route::get('/mifanampy', 'fgLehibe\fiombonanaController@mifanampy')->name('mifanampy');
Route::get('/miara-miasa', 'fgLehibe\fiombonanaController@miaraMiasa')->name('miara-miasa');

/**
 * fgMitory
 */
Route::get('/fiofanana', 'fgMitory\tafikaMasinaController@fiofanana')->name('fiofanana');
Route::get('/fanatanterahana', 'fgMitory\tafikaMasinaController@fanatanterahana')->name('fanatanterahana');
Route::get('/asa-sosialy', 'fgMitory\fieveranaMahaOlonaController@asaSosialy')->name('asa-sosialy');
Route::get('/asa-vavolombelona', 'fgMitory\fieveranaMahaOlonaController@asaVavolombelona')->name('asa-vavolombelona');


/**
 * ssaf
 */

/**
 * zadi
 */
Route::get('/zadi', 'zadi\zadiController@index');
Route::get('/calendars', 'VisitorController@getCalendars')->name('calendars');

Auth::routes();

