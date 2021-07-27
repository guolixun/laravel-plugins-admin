<?php
namespace Bennent\Geauth\Seeder;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Bennent\Geauth\Models\Manager;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // create super administrator
        Manager::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => encrypt_pass('admin')
        ]);

        // create init menu
        DB::table(config('admin.database.menu_table'))->insert([
            ['pid' => 0, 'name' =>'权限管理', 'url' => 'admin/permission/#', 'icon' => 'layui-icon layui-icon-auz', 'status' => 1, 'order' => 1, 'type' => 0],
            ['pid' => 1, 'name' =>'系统菜单管理', 'url' => 'admin/permission', 'icon' => 'layui-icon layui-icon-tabs', 'status' => 1, 'order' => 1, 'type' => 0],
            // 菜单管理下子集菜单
            ['pid' => 2, 'name' =>'系统菜单添加', 'url' => 'admin/permission/create', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],
            ['pid' => 2, 'name' =>'系统菜单更新', 'url' => 'admin/permission/edit', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],
            ['pid' => 2, 'name' =>'菜单ICON枚举', 'url' => 'admin/permission/icon', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],
            ['pid' => 2, 'name' =>'系统菜单导入更新', 'url' => 'admin/permission/import', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],

            ['pid' => 1, 'name' =>'系统角色管理', 'url' => 'admin/role', 'icon' => 'layui-icon layui-icon-component', 'status' => 1, 'order' => 2, 'type' => 0],
            // 角色管理下子集菜单
            ['pid' => 7, 'name' =>'系统角色添加', 'url' => 'admin/role/create', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],
            ['pid' => 7, 'name' =>'系统角色更新', 'url' => 'admin/role/edit', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],
            ['pid' => 7, 'name' =>'系统角色授权', 'url' => 'admin/role/auth', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],


            ['pid' => 1, 'name' =>'系统人员管理', 'url' => 'admin/manager', 'icon' => 'layui-icon layui-icon-group', 'status' => 1, 'order' => 3, 'type' => 0],
            // 管理员下子集菜单
            ['pid' => 11, 'name' =>'系统管理员添加', 'url' => 'admin/manager/create', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],
            ['pid' => 11, 'name' =>'系统管理员更新', 'url' => 'admin/manager/edit', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],
            ['pid' => 11, 'name' =>'系统管理员头像', 'url' => 'admin/manager/avatar', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],
            ['pid' => 11, 'name' =>'系统管理员重置密码', 'url' => 'admin/manager/pass', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],

            ['pid' => 0, 'name' =>'系统管理', 'url' => 'admin/setting/#', 'icon' => 'layui-icon layui-icon-set', 'status' => 1, 'order' => 3, 'type' => 0],
            ['pid' => 16, 'name' =>'系统设置管理', 'url' => 'admin/setting', 'icon' => 'layui-icon layui-icon-component', 'status' => 1, 'order' => 3, 'type' => 0],
            ['pid' => 16, 'name' =>'系统基础参数管理', 'url' => 'admin/setting/show', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],
            ['pid' => 16, 'name' =>'OBS存储管理', 'url' => 'admin/setting/obs', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],
            ['pid' => 16, 'name' =>'OSS存储管理', 'url' => 'admin/setting/oss', 'icon' => '', 'status' => 0, 'order' => 1, 'type' => 0],

        ]);

        // create init setting
        DB::table(config('admin.database.setting_table'))->insert([
            ['name' => 'site_title', 'value' => 'laravel-plugins-admin'],
            ['name' => 'site_name', 'value' => 'laravel-plugins-admin'],
            ['name' => 'beian', 'value' => ''],
            ['name' => 'miitbeian', 'value' => ''],
            ['name' => 'site_copy', 'value' => ''],
            ['name' => 'black_ip', 'value' => '#'],
            ['name' => 'storage_type', 'value' => 'obs'],
            ['name' => 'OBS_http_protocol', 'value' => ''],
            ['name' => 'OBS_point', 'value' => ''],
            ['name' => 'OBS_bucket', 'value' => ''],
            ['name' => 'OBS_http_domain', 'value' => ''],
            ['name' => 'OBS_access_key', 'value' => ''],
            ['name' => 'OBS_secret_key', 'value' => ''],
            ['name' => 'OSS_http_protocol', 'value' => ''],
            ['name' => 'OSS_point', 'value' => ''],
            ['name' => 'OSS_bucket', 'value' => ''],
            ['name' => 'OSS_http_domain', 'value' => ''],
            ['name' => 'OSS_access_key', 'value' => ''],
            ['name' => 'OSS_secret_key', 'value' => ''],
            ['name' => 'console_menu_name', 'value' => '控制台'],
            ['name' => 'console_menu_url', 'value' => 'javascript:;'],
        ]);
    }
}
