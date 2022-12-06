<?php

use Illuminate\Support\Facades\Route;

/**
 * ToDo CRUD
 * Day 22. CRUD 很簡單 Resource Controllers
 * Day 23. 實作 TODO 練習 上篇:前置作業
 * Day 24. 實作 TODO 練習 下篇:畫面及功能
 * Day 25. Validation
 */
Route::resource('tasks', 'TaskController');

/**
 * Day 13. 第二個頁面: 個人資料維護 & csrf
 * Day 14. 中介層 Middleware
 */
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => 'auth' ], function() {
    Route::get('/', 'ProfileController@edit')->name('edit');
    Route::post('/', 'ProfileController@update')->name('update');
});

/**
 * Day 8. Authentication-1 登入註冊
 * Day 9. Authentication-2 信箱驗證
 * Day 10. Authentication-3 忘記密碼/重設密碼
 * 文件: https://laravel.com/docs/7.x/authentication
 */
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

# ======================================================================================================== #

/**
 * Day 7. View: Blade
 * 模板引擎
 * 文件: https://laravel.com/docs/7.x/blade
 */
Route::get('/bladeTest', 'BladeTestController@bladeTest')->name('bladeTest');

# ======================================================================================================== #

/**
 * Day 6. 第一個頁面: Controller & View
 * 介紹路由設定
 */
Route::get('/firstView', 'FirstViewController@firstView')->name('firstView');

# ======================================================================================================== #

/**
 * Day 5. 路由: Router
 * 介紹路由設定
 * 文件: https://laravel.com/docs/7.x/routing
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
Route::group(['prefix' => 'routeGroups', 'as' => 'routeGroups.' ], function() {
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

# ======================================================================================================== #

/**
 * 初始頁面
 */
Route::get('/', function () {
    return view('welcome');
});
