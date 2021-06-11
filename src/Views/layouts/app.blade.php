<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ sysConf('site_title') }}</title>
    <link rel="stylesheet" href="/geauth/layui/css/layui.css">
    <link rel="stylesheet" href="/geauth/plugins/awesome/fonts.css">
    <link rel="stylesheet" href="/geauth/css/admin.css">
    <link rel="stylesheet" href="/geauth/css/common.css">

    {{--  自定义样式css  --}}
    @yield('link')

    {{--  页面样式style  --}}
    @yield('style')

</head>

<body>

    {{--  主体内容  --}}
    @yield('content')

</body>

<script src="/geauth/layui/layui.js"></script>

{{--自定义js--}}
@yield('script')


</html>
