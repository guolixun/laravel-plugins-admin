@extends('geauth::layouts.app')


@section('content')
    <div class="layui-card padding-20 layui-form" lay-filter="sys-form" id="sys-form">
        <div class="layui-card-body">
            <div class="layui-form-item">
                <span class="color-green font-w7">控制台显示名称</span><span class="margin-left-5 color-desc">Console Show Name</span>
                <label class="relative block">
                    <input name="site_title" value="{{ sysConf('console_menu_name') }}" class="layui-input layui-bg-gray">
                </label>
                <div class="layui-icon help-block">后台默认首页菜单第一项显示, 默认'控制台'</div>
            </div>
            <div class="layui-form-item">
                <span class="color-green font-w7">控制台URL</span><span class="margin-left-5 color-desc">Console Jump Url</span>
                <label class="relative block">
                    <input name="site_name" value="{{ sysConf('console_menu_url') }}" class="layui-input layui-bg-gray">
                </label>
                <div class="layui-icon help-block">后台默认首页菜单第一项点击后跳转自定义的路由地址</div>
            </div>
            <div class="layui-form-item layui-hide">
                <button class="layui-btn" lay-submit lay-filter="sys_submit" id="sys_submit">提交</button>
            </div>
        </div>
    </div>
@endsection


@section('scriptPrevTag')
    <script>
@endsection

@section('scriptNextTag')
    </script>
@endsection
