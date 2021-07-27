<?php
//+----------------------------------------------------------------------
// | 首页
//+----------------------------------------------------------------------
// | Author: Bennent <guolixun@gdi.com.cn>
//+----------------------------------------------------------------------
// | Date: 2020/7/31
//+----------------------------------------------------------------------

namespace Bennent\Geauth\Controllers;

use Bennent\Geauth\Models\Manager;

class IndexController extends AdminBaseController
{
    //首页
    public function index()
    {
        return view('geauth::admin.index.index', [
            'menus' => Manager::hasMenus()
        ]);
    }
}
