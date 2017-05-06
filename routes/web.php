<?php

/* index */
Route::get('/', 'adminController@index');

// ADMIN
Route::get('/admin', 'adminController@index');
Route::get('/admin/create', 'adminController@addMember');
Route::post('/admin/create', 'adminController@addMemberHandle');
Route::get('/admin/lists', 'adminController@lists');

/* edit */
Route::get('/admin/{id}/edit', 'adminController@edit')->where('id', '[0-9]+');
Route::post('/admin/{member_id}/edit', 'adminController@editHandle')->where('member_id', '[0-9]+');

/* remove */
Route::get('/admin/{member_id}/remove', 'adminController@removeHandle')->where('member_id', '[0-9]+');


// GROUPS
Route::get('/admin/groups', 'adminController@groups');
Route::get('/admin/groups/create', 'adminController@addGroups');
Route::post('/admin/groups/create', 'adminController@addGroupsHandle');

Route::get('/admin/groups/lists', 'adminController@groupLists');

Route::get('/admin/groups/{member_id}/edit', 'adminController@groupEdit')->where('member_id', '[0-9]+');
Route::post('/admin/groups/{member_id}/edit', 'adminController@groupEditHandle')->where('member_id', '[0-9]+');
Route::get('/admin/groups/{member_id}/remove', 'adminController@groupRemoveHandle')->where('member_id', '[0-9]+');
