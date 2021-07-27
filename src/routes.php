<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'name' => 'geauth.'], function () {
    // 登录
    Route::any('', 'Bennent\Geauth\Controllers\LoginController@index')->name('admin.login');
    Route::middleware(\Bennent\Geauth\Middleware\AdminAuth::class)->group(function () {
        //主页
        Route::get('index', 'Bennent\Geauth\Controllers\IndexController@index')->name('admin.index');
        // 菜单管理
        Route::prefix('permission')->group(function () {
            Route::match(['get', 'post', 'delete'], '', 'Bennent\Geauth\Controllers\PermissionController@index')->name('admin.permission');
            Route::match(['get', 'post'], 'create/{id?}', 'Bennent\Geauth\Controllers\PermissionController@create')->name('admin.permission.create');
            Route::get('icon', 'Bennent\Geauth\Controllers\PermissionController@icon')->name('geauth.admin.permission.icon')->name('admin.permission.icon');
            Route::match(['get', 'post', 'put'], 'edit/{id?}', 'Bennent\Geauth\Controllers\PermissionController@edit')->name('admin.permission.edit');
            Route::put('import', 'Bennent\Geauth\Controllers\PermissionController@import')->name('admin.permission.import');
        });
        // 角色管理
        Route::prefix('role')->group(function () {
            Route::match(['get', 'post', 'delete'], '', 'Bennent\Geauth\Controllers\RoleController@index')->name('admin.role');
            Route::match(['get', 'post'], 'create', 'Bennent\Geauth\Controllers\RoleController@create')->name('admin.role.create');
            Route::match(['get', 'post', 'put'], 'edit/{id?}', 'Bennent\Geauth\Controllers\RoleController@edit')->name('admin.role.edit');
            Route::match(['get', 'post', 'put'], 'auth/{id?}', 'Bennent\Geauth\Controllers\RoleController@auth')->name('admin.role.auth');
        });
        //管理员
        Route::prefix('manager')->group(function () {
            Route::match(['get', 'post', 'delete'], '', 'Bennent\Geauth\Controllers\ManagerController@index')->name('admin.manager');
            Route::match(['get', 'post'], 'create', 'Bennent\Geauth\Controllers\ManagerController@create')->name('admin.manager.create');
            Route::post('avatar', 'Bennent\Geauth\Controllers\ManagerController@avatar')->name('admin.manager.avatar');
            Route::match(['get', 'post', 'put'], 'edit/{id?}', 'Bennent\Geauth\Controllers\ManagerController@edit')->name('admin.manager.edit');
            Route::match(['get', 'post'], 'pass/{uid?}', 'Bennent\Geauth\Controllers\ManagerController@pass')->name('admin.manager.pass');
        });
        //系统管理
        Route::prefix('setting')->group(function () {
            Route::get('', 'Bennent\Geauth\Controllers\SettingController@index')->name('admin.setting');
            Route::match(['get', 'post'], 'show', 'Bennent\Geauth\Controllers\SettingController@show')->name('admin.setting.show');
            Route::get('console', 'Bennent\Geauth\Controllers\SettingController@console')->name('admin.setting.console');
            Route::match(['get', 'post'], 'obs', 'Bennent\Geauth\Controllers\SettingController@obs')->name('admin.setting.obs');
            Route::match(['get', 'post'], 'oss', 'Bennent\Geauth\Controllers\SettingController@oss')->name('admin.setting.oss');
        });
    });

});

