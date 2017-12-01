<?php

Route::group(['middleware' => [ 'web','auth', 'isAdmin'], 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function () {
    Route::get('/', 'AdminController@index');
    Route::resource('users', 'UserController');
    Route::resource('groups', 'GroupController');
    /*
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    */
});
