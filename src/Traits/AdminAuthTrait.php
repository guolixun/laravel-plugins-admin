<?php
//+----------------------------------------------------------------------
// | 后台鉴权Trait
//+----------------------------------------------------------------------
// | Author: Bennent <guolixun@gdi.com.cn>
//+----------------------------------------------------------------------
// | Date: 2021/1/26
//+----------------------------------------------------------------------
namespace Bennent\Geauth\Traits;

use Bennent\Geauth\Models\Manager;
use Bennent\Geauth\Models\RoleManager;
use Bennent\Geauth\Models\RolePermission;
use Illuminate\Support\Facades\Cache as Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

trait AdminAuthTrait
{

    public static $exceptUid = [1];

    public static $commonUrls = [
        "admin",
        "admin/index",
        "admin/console",
        "admin/show",
        "admin/area"
    ];

    public static $uri;

    public static $checkUid;

    /**
     * notes:鉴权
     * user: Bennent_G
     * @param $uri
     * @return bool
     */
    public static function checkAuth($uri)
    {
        if(!Session::has('users.id')) return false;
        self::$checkUid = Session::get('users.id');
        self::$uri = self::handleUri($uri);
        //超级管理员-放行
        if (in_array(self::$checkUid, self::$exceptUid)) return true;
        //其它管理员
        self::handleUserCacheMenu();
        return in_array($uri, self::handleAuth());
    }

    /**
     * @notes: 路由处理(admin/role/1;admin/role/show/1;admin/cate/show?id=5)
     * user: Bennent_G
     * @param $uri
     * @return false|mixed|string
     */
    private static function handleUri($uri)
    {
        //处理路由?拼接参数形式
        if(Str::contains($uri, '?')) {
            return substr($uri, 0, strpos($uri,'?'));
        }
        //处理路由后直接拼接参数形式
        if (substr_count($uri, '/') == 2 || substr_count($uri, '/') == 3) {
            $uriLast = substr($uri, strrpos($uri,"/")+1);
            return is_numeric($uriLast) ? substr($uri, 0, strrpos($uri,"/")) : $uri;
        }
        return $uri;
    }

    /**
     * notes:用户权限缓存
     * user: Bennent_G
     */
    private static function handleUserCacheMenu()
    {
        $roleIds = self::handleUserRole();
        Cache::remember(self::$checkUid . '_auth', 43200, function() use ($roleIds) {
            return RolePermission::leftJoin('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                ->whereIn('role_id', explode(',', $roleIds))
                ->select('permissions.id', 'permissions.pid', 'name', 'url', 'icon')
                ->groupBy('permissions.id')
                ->get()
                ->toArray();
        });
    }


    /**
     * notes:用户权限列表
     * user: Bennent_G
     * @return array
     */
    private static function handleAuth()
    {
        $urls = array_column(Cache::get(self::$checkUid . '_auth'), 'url');
        return array_merge($urls, self::$commonUrls);
    }


    /**
     * notes:用户角色ID
     * user: Bennent_G
     * @return mixed
     */
    private static function handleUserRole()
    {
        return RoleManager::where('u_id', self::$checkUid)->value('role_id');
    }

}
