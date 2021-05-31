<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function() {
    // 登录
    Route::any('', 'Bennent\Geauth\Controllers\LoginController@index')->name('geauth.admin');
    Route::middleware(\Bennent\Geauth\Middleware\AdminAuth::class)->group(function() {
        //控制台
        Route::get('index', 'Bennent\Geauth\Controllers\IndexController@index')->name('geauth.admin.index');
        Route::get('console', 'Bennent\Geauth\Controllers\IndexController@console')->name('geauth.admin.console');
        Route::get('show', 'Bennent\Geauth\Controllers\IndexController@show')->name('geauth.admin.show');
        // 菜单管理
        Route::prefix('permission')->group(function() {
            Route::match(['get', 'post', 'delete'], '', 'Bennent\Geauth\Controllers\PermissionController@index')->name('geauth.admin.permission');
            Route::match(['get', 'post'], 'create/{id?}', 'Bennent\Geauth\Controllers\PermissionController@create')->name('geauth.admin.permission.create');
            Route::get('icon', 'Bennent\Geauth\Controllers\PermissionController@icon')->name('geauth.admin.permission.icon');
            Route::match(['get', 'post', 'put'],'edit/{id?}', 'Bennent\Geauth\Controllers\PermissionController@edit')->name('geauth.admin.permission.edit');
            Route::put('import', 'Bennent\Geauth\Controllers\PermissionController@import')->name('geauth.admin.permission.import');
        });
        // 角色管理
        Route::prefix('role')->group(function() {
            Route::match(['get', 'post', 'delete'], '', 'Bennent\Geauth\Controllers\RoleController@index')->name('geauth.admin.role');
            Route::match(['get', 'post'], 'create', 'Bennent\Geauth\Controllers\RoleController@create')->name('geauth.admin.role.create');
            Route::match(['get', 'post', 'put'],'edit/{id?}', 'Bennent\Geauth\Controllers\RoleController@edit')->name('geauth.admin.role.edit');
            Route::match(['get', 'post', 'put'], 'auth/{id?}', 'Bennent\Geauth\Controllers\RoleController@auth')->name('geauth.admin.role.auth');
        });
        //管理员
        Route::prefix('manager')->group(function() {
            Route::match(['get', 'post', 'delete'], '', 'Bennent\Geauth\Controllers\ManagerController@index')->name('geauth.admin.manager');
            Route::match(['get', 'post'], 'create', 'Bennent\Geauth\Controllers\ManagerController@create')->name('geauth.admin.manager.create');
            Route::post('avatar', 'Bennent\Geauth\Controllers\ManagerController@avatar')->name('geauth.admin.manager.avatar');
            Route::match(['get', 'post', 'put'],'edit/{id?}', 'Bennent\Geauth\Controllers\ManagerController@edit')->name('geauth.admin.manager.edit');
            Route::match(['get', 'post'], 'pass/{uid?}', 'Bennent\Geauth\Controllers\ManagerController@pass')->name('geauth.admin.manager.pass');
        });
        //系统管理
        Route::prefix('setting')->group(function() {
            Route::get('', 'Bennent\Geauth\Controllers\SettingController@index');
            Route::match(['get', 'post'],'show', 'Bennent\Geauth\Controllers\SettingController@show');
            Route::match(['get', 'post'],'obs', 'Bennent\Geauth\Controllers\SettingController@obs');
            Route::match(['get', 'post'],'oss', 'Bennent\Geauth\Controllers\SettingController@oss');
        });
    });

});

