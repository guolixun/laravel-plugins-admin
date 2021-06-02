@extends('geauth::layouts.app')


@section('content')
    <div class="layui-card padding-20 layui-form" lay-filter="sys-form" id="sys-form">
        <div class="layui-card-body">
            <div class="layui-form-item">
                <span class="color-green font-w7">网站标题</span><span class="margin-left-5 color-desc">WebTitle</span>
                <label class="relative block">
                    <input name="site_title" value="{{ sysConf('site_title') }}" class="layui-input layui-bg-gray">
                </label>
                <div class="layui-icon help-block">网站title,将显示在浏览器的标签上。</div>
            </div>
            <div class="layui-form-item">
                <span class="color-green font-w7">网站名称</span><span class="margin-left-5 color-desc">Website</span>
                <label class="relative block">
                    <input name="site_name" value="{{ sysConf('site_name') }}" class="layui-input layui-bg-gray">
                </label>
                <div class="layui-icon help-block">网站名称及网站图标，将显示在浏览器的标签上。</div>
            </div>
            <div class="layui-form-item">
                <span class="color-green font-w7">公网备案号</span><span class="margin-left-5 color-desc">Baian</span>
                <label class="relative block">
                    <input name="beian" value="{{ sysConf('beian') }}" placeholder="请输入公网备案号" class="layui-input layui-bg-gray">
                </label>
                <p class="layui-icon help-block">公网备案号，可以在<a target="_blank" href="http://beian.miit.gov.cn">备案管理中心</a>查询获取，将在登录页面下面显示。</p>
            </div>
            <div class="layui-form-item">
                <span class="color-green font-w7">网站备案号</span><span class="margin-left-5 color-desc">Miitbeian</span>
                <label class="relative block">
                    <input name="miitbeian" value="{{ sysConf('miitbeian') }}" placeholder="请输入网站备案号" class="layui-input layui-bg-gray">
                </label>
                <div class="layui-icon help-block">网站备案号，可以在<a target="_blank" href="http://beian.miit.gov.cn">备案管理中心</a>查询获取，将显示在登录页面下面。</div>
            </div>
            <div class="layui-form-item">
                <span class="color-green font-w7">网站版权信息</span><span class="margin-left-5 color-desc">Copyright</span>
                <label class="relative block">
                    <input name="site_copy" value="{{ sysConf('site_copy') }}" placeholder="请输入网站版权信息"  class="layui-input layui-bg-gray">
                </label>
                <div class="layui-icon help-block">网站版权信息，在后台登录页面显示版本信息并链接到备案到信息备案管理系统。</div>
            </div>
            <div class="layui-form-item">
                <span class="color-green font-w7">IP黑名单</span><span class="margin-left-5 color-desc">Black IP Lists</span>
                <label class="relative block">
                    <textarea class="layui-textarea" name="black_ip" placeholder="请输入IP">{{ sysConf('black_ip') }}</textarea>
                </label>
                <div class="layui-icon help-block">管理平台访问黑名单,默认#:不限制,多个以IP以#分割</div>
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
