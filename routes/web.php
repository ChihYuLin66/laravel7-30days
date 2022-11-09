<?php

use Illuminate\Support\Facades\Route;

/**
 * Day 7. View: Blade
 * 模板引擎
 */
Route::get('/bladeTest', 'BladeTestController@bladeTest')->name('bladeTest');


/**
 * Day 6. 第一個頁面: Controller & View
 * 介紹路由設定
 */
Route::get('/firstView', 'FirstViewController@firstView')->name('firstView');

# ========================================================================================================

/**
 * Day 5. 路由: Router
 * 介紹路由設定
 */
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

# ========================================================================================================

/**
 * 初始頁面
 */
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
