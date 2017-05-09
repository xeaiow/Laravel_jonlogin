<?php

    Route::get('/', 'adminController@index');

    // Admin
    Route::group(['prefix' => '/admin'], function () {
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
