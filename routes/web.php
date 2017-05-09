<?php

    // Route::get('/', 'adminController@index');
    Route::get('/', function() {
        return View::make('admin.index');
    });
    Route::post('login', 'adminController@loginHandle');
    Route::get('logout', 'adminController@logout');

    // Admin
    Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
        Route::get('/', 'adminController@index');
        Route::get('/create', 'adminController@addMember');
        Route::get('/lists', 'adminController@lists');
        Route::get('/{id}/edit', 'adminController@edit')->where('id', '[0-9]+');
        Route::get('/{member_id}/remove', 'adminController@removeHandle')->where('member_id', '[0-9]+');
        Route::post('/create', 'adminController@addMemberHandle');
        Route::post('/{member_id}/edit', 'adminController@editHandle')->where('member_id', '[0-9]+');
    });

    // Gourps
    Route::group(['prefix' => 'admin/groups'], function () {
        Route::get('/', 'adminController@groups');
        Route::get('/create', 'adminController@addGroups');
        Route::get('/lists', 'adminController@groupLists');
        Route::get('/{member_id}/edit', 'adminController@groupEdit')->where('member_id', '[0-9]+');
        Route::get('/{member_id}/remove', 'adminController@groupRemoveHandle')->where('member_id', '[0-9]+');
        Route::post('/{member_id}/edit', 'adminController@groupEditHandle')->where('member_id', '[0-9]+');
        Route::post('/create', 'adminController@addGroupsHandle');
    });

    // Users
    Route::group(['prefix' => '/user'], function () {
        Route::get('/create', 'userController@addMember');
        Route::get('/lists', 'userController@lists');
        Route::get('/{id}/deposit', 'userController@deposit')->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'userController@edit')->where('id', '[0-9]+');
        Route::get('/{id}/remove', 'userController@removeHandle')->where('id', '[0-9]+');
        Route::post('/{id}/edit', 'userController@editHandle')->where('id', '[0-9]+');
        Route::post('/create', 'userController@addMemberHandle');
        Route::post('/lists', 'userController@searchHandle');
        Route::post('/{id}/deposit', 'userController@depositHandle')->where('id', '[0-9]+');
    });
