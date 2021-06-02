@extends('layouts.app')


@section('content')
    <div class="layui-card-body layui-form">
        <div class="color-text margin-left-40 margin-bottom-20 layui-code" style="border-left-width:1px;text-align: center;background-color: #fff;">
            <p class="margin-bottom-5 font-w7">文件将存储在本地服务器，默认保存在 public/特定文件/ 目录，文件以源文件命名。</p>
            <p>文件存储的目录需要有读写权限，有足够的存储空间</p>
        </div>
        <input type="hidden" name="storage.type" value="local">

        <div class="layui-form-item" style="float:right;">
            <button class="layui-btn layui-btn-sm layui-btn-normal" lay-submit lay-filter="obs">保存</button>
            <button class="layui-btn layui-btn-sm layui-btn-primary" id="reset">取消</button>
        </div>
    </div>
@endsection

@section('scriptPrevTag')
    <script>
@endsection

@section('layJS')
    //关闭
    $('#reset').click(function() {
        var index = parent.layer.getFrameIndex(window.name);
        parent.layer.close(index);
    });
    //提交
    form.on('submit(obs)', function(data) {
        $.ajax({
            type:'post',
            url: "{{url('admin/set/edit')}}",
            data: data.field,
            success: function(res) {
                if (res) {
                    layer.msg('操作成功');
                    var index = parent.layer.getFrameIndex(window.name);
                    parent.layer.close(index);
                } else {
                    layer.msg('操作异常');
                }
            }
        });
    })
@endsection

@section('scriptNextTag')
    </script>
@endsection


