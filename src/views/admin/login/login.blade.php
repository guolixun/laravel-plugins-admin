@extends('geauth::layouts.app')

@section('link')
    <link rel="stylesheet" href="/geauth/css/login.css">
@endsection

@section('content')
    <div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">
        <div class="layadmin-user-login-main">
            <div class="layadmin-user-login-box layadmin-user-login-header">
                <h2>{{ sysConf('site_title') }}</h2>
                <p>{{ sysConf('site_name') }}</p>
            </div>
            <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-username"
                           for="LAY-user-login-username"></label>
                    <input type="text" name="username" id="username" lay-verify="required" placeholder="用户名"
                           class="layui-input">
                </div>
                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-password"
                           for="LAY-user-login-password"></label>
                    <input type="password" name="password" id="login-password" lay-verify="required"
                           placeholder="密码" class="layui-input">
                </div>
                <div class="layui-row">
                    <div class="layui-form-item layui-col-md8">
                        <label class="layadmin-user-login-icon layui-icon layui-icon-password"
                               for="LAY-user-login-password"></label>
                        <input name="code" id="login-code" lay-verify="required"
                               placeholder="验证码" class="layui-input">
                    </div>
                    <div class="layui-col-md4">
                        <img id="captcha" src="{{captcha_src()}}" class="layadmin-user-login-codeimg" onclick="this.src='{{captcha_src()}}'+Math.random()">
                    </div>
                </div>
                <div class="layui-form-item">
                    <button class="layui-btn layui-btn-fluid" lay-submit lay-filter="login-submit">登 陆</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var $ = layui.jquery,
            form = layui.form;

        form.render();
        //回车事件监听
        $(document).keydown(function(e){
            if(e.keyCode === 13){
                $('button[lay-filter="login-submit"]').click();
                return false;
            }
        })
        //提交
        form.on('submit(login-submit)', function(obj){
            $.ajax({
                type: 'post',
                data: obj.field,
                url: "{{ url('admin') }}",
                success: function(res) {
                    console.log(res);
                    if(res.code == 1) {
                        layer.msg('登录成功', {offset: '15px', icon:1,time:1000}, function() {
                            location.href = "{{ url('admin/index') }}";
                        })
                    } else {
                        layer.msg(res.msg);
                        $('#captcha').attr('src', "{{ captcha_src() }}" + Math.random() );
                    }
                }
            })
        });
    </script>
@endsection



