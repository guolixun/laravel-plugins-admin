<?php

namespace Bennent\Geauth\Controllers;

use Bennent\Geauth\Models\Setting;
use Illuminate\Support\Facades\Cache;

/**
 * Class SettingController
 * @adminMenuRoot(
 *     'name'   => '系统管理',
 *     'action' => 'default',
 *     'parent' => 'admin/setting/#',
 *     'display'=> true,
 *     'order'  => 10000,
 *     'icon'   => '',
 *     'remark' => '系统管理'
 * )
 */
class SettingController extends AdminBaseController
{
    protected $obsEndpoints = [
        'obs.af-south-1.myhuaweicloud.com'     => '非洲-约翰内斯堡',
        'obs.cn-north-4.myhuaweicloud.com'     => '华北-北京四',
        'obs.cn-north-1.myhuaweicloud.com'     => '华北-北京一',
        'obs.cn-east-2.myhuaweicloud.com'      => '华东-上海二',
        'obs.cn-east-3.myhuaweicloud.com'      => '华东-上海一',
        'obs.cn-south-1.myhuaweicloud.com'     => '华南-广州',
        'obs.cn-southwest-2.myhuaweicloud.com' => '西南-贵阳一',
        'obs.ap-southeast-2.myhuaweicloud.com' => '亚太-曼谷',
        'obs.ap-southeast-1.myhuaweicloud.com' => '亚太-香港',
        'obs.ap-southeast-3.myhuaweicloud.com' => '亚太-新加坡',
    ];

    protected $ossEndpoints = [
        'oss-cn-hangzhou.aliyuncs.com'    => '华东1(杭州)',
        'oss-cn-shanghai.aliyuncs.com'    => '华东2(上海)',
        'oss-cn-qingdao.aliyuncs.com'     => '华北1(青岛)',
        'oss-cn-beijing.aliyuncs.com'     => '华北2(北京)',
        'oss-cn-zhangjiakou.aliyuncs.com' => '华北 3(张家口)',
        'oss-cn-huhehaote.aliyuncs.com'   => '华北5(呼和浩特)',
        'oss-cn-wulanchabu.aliyuncs.com'  => '华北6(乌兰察布)',
        'oss-cn-shenzhen.aliyuncs.com'    => '华南1(深圳)',
        'oss-cn-heyuan.aliyuncs.com'      => '华南2(河源)',
        'oss-cn-guangzhou.aliyuncs.com'   => '华南3(广州)',
        'oss-cn-chengdu.aliyuncs.com'     => '西南1(成都)',
        'oss-cn-hongkong.aliyuncs.com'    => '中国(香港)',
        'oss-us-west-1.aliyuncs.com'      => '美国西部1(硅谷)',
        'oss-us-east-1.aliyuncs.com'      => '美国东部1(弗吉尼亚)',
        'oss-ap-southeast-1.aliyuncs.com' => '亚太东南1(新加坡)',
        'oss-ap-southeast-2.aliyuncs.com' => '亚太东南2(悉尼)',
        'oss-ap-southeast-3.aliyuncs.com' => '亚太东南3(吉隆坡)',
        'oss-ap-southeast-5.aliyuncs.com' => '亚太东南5(雅加达)',
        'oss-ap-northeast-1.aliyuncs.com' => '亚太东北1(日本)',
        'oss-ap-south-1.aliyuncs.com'     => '亚太南部1(孟买)',
        'oss-eu-central-1.aliyuncs.com'   => '欧洲中部1(法兰克福)',
        'oss-eu-west-1.aliyuncs.com	'  => '英国(伦敦)',
        'oss-me-east-1.aliyuncs.com'      => '中东东部1(迪拜)'
    ];

    /**
     * 系统设置
     * @adminMenu(
     *     'name'   => '系统设置',
     *     'parent' => 'admin/setting/#',
     *     'router' => 'admin/set',
     *     'display'=> true,
     *     'hasView'=> true,
     *     'order'  => 50,
     *     'icon'   => '',
     *     'remark' => '系统设置',
     *     'param'  => ''
     * )
     */
    public function index()
    {
        return View('geauth::admin.setting.index');
    }

    /**
     * 系统参数管理
     * @adminMenu(
     *     'name'   => '编辑设置',
     *     'parent' => 'admin/set',
     *     'router' => 'admin/set/show',
     *     'display'=> '',
     *     'hasView'=> false,
     *     'order'  => 50,
     *     'icon'   => '',
     *     'remark' => '编辑设置',
     *     'param'  => ''
     * )
     */
    public function show()
    {
        if (request()->isMethod('post')) {
            foreach (request()->all() as $name => $value) Setting::createOrUpdate($name, $value);
            Cache::forget('siteName');
            Cache::forget('siteTitle');
            return true;
        }
        return View('geauth::admin.setting.show');
    }

    /**
     * 控制台参数设置
     * @adminMenu(
     *     'name'   => '控制台参数设置',
     *     'parent' => 'admin/set',
     *     'router' => 'admin/setting/console',
     *     'display'=> '',
     *     'hasView'=> false,
     *     'order'  => 50,
     *     'icon'   => '',
     *     'remark' => '控制台参数设置',
     *     'param'  => ''
     * )
     */
    public function console()
    {
        return View('geauth::admin.setting.console');
    }


    /**
     * 存储设置
     * @adminMenu(
     *     'name'   => '存储设置',
     *     'parent' => 'admin/set',
     *     'router' => 'admin/storage',
     *     'display'=> '',
     *     'hasView'=> false,
     *     'order'  => 50,
     *     'icon'   => '',
     *     'remark' => '存储设置',
     *     'param'  => ''
     * )
     */
    public function storage()
    {
        return View('geauth::admin.setting.storage');
    }

    /**
     * obs设置
     * @adminMenu(
     *     'name'   => 'obs设置',
     *     'parent' => 'admin/set',
     *     'router' => 'admin/storage/obs',
     *     'display'=> '',
     *     'hasView'=> false,
     *     'order'  => 50,
     *     'icon'   => '',
     *     'remark' => 'obs设置',
     *     'param'  => ''
     * )
     */
    public function obs()
    {
        return View('geauth::admin.setting.obs', [
            'points' => $this->obsEndpoints
        ]);
    }

    /**
     * oss设置
     * @adminMenu(
     *     'name'   => 'oss设置',
     *     'parent' => 'admin/set',
     *     'router' => 'admin/storage/oss',
     *     'display'=> '',
     *     'hasView'=> false,
     *     'order'  => 50,
     *     'icon'   => '',
     *     'remark' => 'oss设置',
     *     'param'  => ''
     * )
     */
    public function oss()
    {
        return View('geauth::admin.setting.oss', [
            'points' => $this->ossEndpoints
        ]);
    }

}
