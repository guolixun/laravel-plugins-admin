@extends('geauth::layouts.app')


@section('content')
    <div class="layui-card-body layui-form" layui-filter="obs-form" id="obs-form">

        <div class="color-text margin-left-40 margin-bottom-20 layui-code" style="border-left-width:1px;text-align: center;background-color: #fff;">
            <p class="margin-bottom-5 font-w7">文件将上传到阿里云 OSS 存储，需要配置 OSS 公开访问及跨域策略</p>
            <p>直传需要配置跨域规则，设置来源为 *，允许 Methods 为 POST，允许 Headers 为 *</p>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label label-required-prev">
                <span class="color-green font-w7">访问协议</span><br><span class="nowrap color-desc">Protocol</span>
            </label>
            <div class="layui-input-block">
                @foreach(['http','https'] as $protocol)
                <label class="think-radio">
                    @if (sysConf('OSS_http_protocol') == $protocol)
                        <input type="radio" checked name="OSS_http_protocol" value="{{ $protocol }}" lay-ignore> {{ $protocol }}
                    @else
                        <input type="radio" name="OSS_http_protocol" value="{{ $protocol }}" lay-ignore> {{ $protocol }}
                    @endif
                </label>
                @endforeach
                <p class="layui-icon help-block">阿里云OBS存储访问协议，其中 https 需要配置证书才能使用（auto 为相对协议）</p>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label label-required-prev">
                <span class="color-green font-w7">存储区域</span><br><span class="nowrap color-desc label-required">Region</span>
            </label>
            <div class="layui-input-block">
                <select name="OSS_point" lay-search>
                    @foreach( $points as $point => $title)
                        @if (sysConf('OSS_point') == $point)
                            <option selected value="{{ $point }}">{{ $title }} {{ $point }}</option>
                        @else
                            <option value="{{ $point }}">{{ $title }} {{ $point }}</option>
                        @endif
                    @endforeach
                </select>
                <p class="layui-icon help-block">阿里云OBS存储空间所在区域，需要严格对应储存所在区域才能上传文件</p>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label label-required-prev" for="storage.OSS_bucket">
                <span class="color-green font-w7">空间名称</span><br><span class="nowrap color-desc">Bucket</span>
            </label>
            <div class="layui-input-block">
                <input id="OSS_bucket" type="text" name="OSS_bucket" required value="{{ sysconf('OSS_bucket') }}" placeholder="请输入阿里云OBS存储 Bucket (空间名称)" class="layui-input">
                <p class="layui-icon help-block">填写OBS存储空间名称，如：think-admin-OBS（需要是全区唯一的值，不存在时会自动创建）</p>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label label-required-prev" for="storage.OSS_http_domain">
                <span class="color-green font-w7">访问域名</span><br><span class="nowrap color-desc">Domain</span>
            </label>
            <div class="layui-input-block">
                <input id="OSS_http_domain" type="text" name="OSS_http_domain" required value="{{ sysconf('OSS_http_domain') }}" placeholder="请输入阿里云OBS存储 Domain (访问域名)" class="layui-input">
                <p class="layui-icon help-block">填写OBS存储外部访问域名，如：static.ctolog.com</p>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label label-required-prev" for="storage.OSS_access_key">
                <span class="color-green font-w7">访问密钥</span><br><span class="nowrap color-desc">AccessKey</span>
            </label>
            <div class="layui-input-block">
                <input id="OSS_access_key" type="text" name="OSS_access_key" required value="{{ sysconf('OSS_access_key') }}" placeholder="请输入阿里云OBS存储 AccessKey (访问密钥)" class="layui-input">
                <p class="layui-icon help-block">可以在 [ 阿里云 > 个人中心 ] 设置并获取到访问密钥</p>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label label-required-prev" for="storage.OSS_secret_key">
                <span class="color-green font-w7">安全密钥</span><br><span class="nowrap color-desc">SecretKey</span>
            </label>
            <div class="layui-input-block">
                <input id="OSS_secret_key" type="text" name="OSS_secret_key" required value="{{ sysconf('OSS_secret_key') }}" maxlength="43" placeholder="请输入阿里云OBS存储 SecretKey (安全密钥)" class="layui-input">
                <p class="layui-icon help-block">可以在 [ 阿里云 > 个人中心 ] 设置并获取到安全密钥</p>
            </div>
        </div>

        <div class="hr-line-dashed margin-left-40"></div>
        <input type="hidden" name="storage.type" value="obs">

        <div class="layui-form-item" style="float:right;">
            <button class="layui-btn layui-btn-sm layui-btn-normal" lay-submit lay-filter="obs">保存</button>
            <button class="layui-btn layui-btn-sm layui-btn-primary" id="reset">取消</button>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var $ = layui.jquery,
            form = layui.form;
        //关闭
        $('#reset').click(function() {
            var index = parent.layer.getFrameIndex(window.name);
            parent.layer.close(index);
        });
        //提交
        form.on('submit(obs)', function(data) {
            $.ajax({
                type:'post',
                url: "{{url('admin/setting/show')}}",
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
    </script>
@endsection


