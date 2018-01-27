<?php

Route::group(['middleware' => [ 'web','auth', 'isAdmin'], 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function () {
    Route::get('/', 'AdminController@index');
    Route::resource('users', 'UserController');
    Route::resource('groups', 'GroupController');
    Route::get('posts','PostController@index')->name('admin.posts.index');
    Route::post('posts/{post}', 'PostController@validate')->name('admin.posts.validate');
});
