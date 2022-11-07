<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

# Day 5. 路由: Router
Route::get('basicRouteUseClosure', function () {
    return 'basicRoute, Hello World';
});

### 交給 controller
Route::get('/basicRouteUseController', 'BasicRouteController@index');

### 參數
Route::get('/basicRouteWithParam/{id}', 'BasicRouteController@show');

### 命名
Route::get('/basicRouteDefineName', 'BasicRouteController@defineName')->name('thisIsBasicRouteDefineName');

### 群組後
Route::group(['prefix' => 'routeGroups', 'as' => 'routeGroups' ], function() {
    Route::get('/a', 'RouteGroupController@a')->name('a');
    Route::get('/b', 'RouteGroupController@b')->name('b');
    Route::get('/c', 'RouteGroupController@c')->name('c');
});

# 群組前
// Route::group(['prefix' => 'routeGroups', 'as' => 'routeGroups' ], function() {
//     Route::get('/routeGroups/a', 'RouteGroupController@a')->name('routeGroups.a');
//     Route::get('/routeGroups/b', 'RouteGroupController@b')->name('routeGroups.b');
//     Route::get('/routeGroups/c', 'RouteGroupController@c')->name('routeGroups.c');
// });
