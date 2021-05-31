<?php
//+----------------------------------------------------------------------
// |
//+----------------------------------------------------------------------
// | Author: Bennent <guolixun@gdi.com.cn>
//+----------------------------------------------------------------------
// | Date: 2020/8/8
//+----------------------------------------------------------------------
namespace Bennent\Geauth\Controllers;

use Bennent\Geauth\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends AdminBaseController
{

    public function index()
    {
        if (request()->isMethod('post')) {
            $params = request()->all();
            if (!captcha_check($params['code']))
                return response()->json(['code' => 0, 'msg' => '验证码错误']);
            //账户密码验证
            $user = Manager::where('name', $params['username'])->first();
            if (!$user || !verify_pass($params['password'], $user->password)) return response()->json(['code' => 0, 'msg' => '账户密码不匹配']);
            Session::put('users', $user->toArray());
            return response()->json(['code' => 1]);
        }
        if (request()->isMethod('delete')) {
            Session::flush();
            return true;
        }
        return view('geauth::admin.login.login');
    }

}
