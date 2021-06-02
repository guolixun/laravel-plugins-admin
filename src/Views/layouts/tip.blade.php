@extends('geauth::layouts.app');

@section('script')
    <script>
        layui.use('layer', function() {
            layer.ready(function() {
                layer.msg('无操作权限,请联系管理员~');
            })
        })
    </script>
@endsection

