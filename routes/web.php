<?php

Route::get('/','VisitorController@index')->name('pejy-voalohany');
Route::get('/fiangonana-lehibe','FgLehibeController@index')->name('fg-lehibe');
Route::get('/fiangonana-mitory','FgMitoryController@index')->name('fg-mitory');
Route::get('/A-propos','AboutController@index')->name('fg-about');
Route::get('/SSAF','SsafController@index')->name('fg-ssaf');
Route::get('/Blog','BlogController@index')->name('fg-blog');
Route::get('/toriteny','ToritenyController@index')->name('fg-toriteny');
Route::get('/toriteny/{toriteny}','ToritenyController@show')->name('fg-toriteny-show');

Auth::routes();

