
## About Laravel-plugins-admin

plugins-admin是基于laravel8的RBAC权限的纯粹后台管理UI扩展包。

Install
- 首先确保安装好了 laravel8,并且数据库连接设置正确
- 加载扩展
```
composer require bennent/laravel-plugins-admin
```
- 发布资源
```
php artisan vendor:publish --provider="Bennent\laravel-plugins-admin\GeauthServiceProvider"
```
- 安装
```
php artisan geauth:install
```
```
- Notice
运行这个命令的时候，如果遇到了下面的错误:
SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 1000 bytes (SQL: alter tableusersadd uniqueusers_email_unique(email))
参考如下解决：
在 app\Providers\AppServiceProvider.php修改如下
<?php
...
+++ use Illuminate\Support\Facades\Schema;
...

public function boot()
{
+++ Schema::defaultStringLength(191);   
}

```
- 安装完成后，目录结构如下：
```
app
├── Http
│   ├── Controllers
│   ├──    ├── Admin
│   ├──    ├──  ├── HomeController.php
│   ├──    ├──  ├── ...  //this will backend business logic
routes
└── admin.php // this is backend router
... 
```
- Settings
```
app\Providers\RouteServiceProvider.php
public function boot()
{
    ...
+    Route::prefix('admin')
+           ->namespace($this->namespace)
+           ->group(base_path('routes/admin.php'));
}

app\Http\Kernel.php

protected $middlewareGroups = [
    ...
+++  // the admin route middleware groups
+++ 'admin' => [
+++    \App\Http\Middleware\EncryptCookies::class,
+++    \Illuminate\Session\Middleware\StartSession::class
+++ ]
    ...
];
```

- Start Service，access http://localhost/admin, user[admin] pass[admin123]