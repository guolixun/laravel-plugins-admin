<?php

namespace Bennent\Geauth\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class AdminAuth
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //处理登录用户session失效时重新跳转登录页面
        if(!$request->session()->has('users')) return redirect('/admin');
        $current_uri = substr($request->getRequestUri(), 1);
        if (!\Bennent\Geauth\Traits\AdminAuthTrait::checkAuth($current_uri)) return response()->view('geauth::layouts.tip', '', 404);;
        return $next($request);
    }
}
