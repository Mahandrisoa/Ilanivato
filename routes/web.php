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
Route::get('/sekoly-alahady', 'ssaf\sampana\sekolyAlahadyController@index')->name('sekoly-alahady');
Route::get('/stk', 'ssaf\sampana\stkController@index')->name('stk');
Route::get('/slk', 'ssaf\sampana\slkController@index')->name('slk');
Route::get('/sampati', 'ssaf\sampana\sampatiController@index')->name('sampati');
Route::get('/svm', 'ssaf\sampana\svmController@index')->name('svm');
Route::get('/vfl', 'ssaf\sampana\vflController@index')->name('vfl');
Route::get('/dorkasy', 'ssaf\sampana\dorkasyController@index')->name('dorkasy');
Route::get('/fifohazana', 'ssaf\sampana\fifohazanaController@index')->name('fifohazana');

Route::get('/sekoly','ssaf\sampanAsa\sekolyController@index')->name('sekoly');
Route::get('/asa-lazara','ssaf\sampanAsa\asaLazaraController@index')->name('asa-lazara');
Route::get('/aff','ssaf\sampanAsa\affController@index')->name('aff');

Route::get('/fifa','ssaf\fikambanana\fifaController@index')->name('fifa');
Route::get('/diakona-sy-loholona','ssaf\fikambanana\diakonaLoholonaController@index')->name('diakona-sy-loholona');
Route::get('/gafli','ssaf\fikambanana\gafliController@index')->name('gafli');
Route::get('/mpitoriteny-sy-katekista','ssaf\fikambanana\mpitoritenyKatekistaController@index')->name('mpitoriteny-sy-katekista');
/**
 * zadi
 */
Route::get('/zadi', 'zadi\zadiController@index')->name('zadi');
Route::get('/calendars', 'VisitorController@getCalendars')->name('calendars');
Route::get('/mahafantatra-feno-ny-hevitr-Andriamanitra','MHFController@index')->name('mfha');
Route::get('/fampianarana','FampianaranaController@index')->name('fampianarana');
Route::get('/fampianarana/{fampianarana}','FampianaranaController@show')->name('fampianarana.show');
Route::get('/fiangonana-misionera','FiangonanaMisioneraController@index')->name('fiangonana-misionera');
Route::get('/fiangonana-misionera-missions','FiangonanaMisioneraController@missions')->name('fiangonana-misionera.missions');

Auth::routes();

