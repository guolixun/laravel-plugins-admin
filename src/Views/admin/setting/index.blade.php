@extends('geauth::layouts.app')


@section('content')
    <div class="layui-card padding-20">
        <div class="layui-card-header notselect">
            <b>系统存储引擎</b><span class="color-desc font-s12 padding-left-5">Storage Engine</span>
        </div>
        <div class="layui-card-body nowrap">
            <div class="layui-btn-group">
                @if (sysConf('storage_type') == 'local')
                    <a data-model="local" data-load="{{ url('admin/setting') }}" data-tips-text="当前为本地服务器存储" class="layui-btn layui-btn-sm layui-btn-active">本地服务器存储</a>
                @else
                    <a data-model="local" data-load="{{ url('admin/setting') }}" data-tips-text="切换并配置以本地服务器存储" class="layui-btn layui-btn-sm layui-btn-primary">本地服务器存储</a>
                @endif
                @if (sysConf('storage_type') == 'obs')
                    <a data-model="obs" data-load="{{ url('admin/setting/obs') }}" data-tips-text="当前为华为云OBS存储" class="layui-btn layui-btn-sm layui-btn-active">华为云OBS存储</a>
                @else
                    <a data-model="obs" data-load="{{ url('admin/setting/obs') }}" data-tips-text="切换并配置以华为云OBS存储" class="layui-btn layui-btn-sm layui-btn-primary">华为云OBS存储</a>
                @endif
                @if (sysConf('storage_type') == 'oss')
                    <a data-model="oss" data-load="{{ url('admin/setting/oss') }}" data-tips-text="当前为阿里云OSS存储" class="layui-btn layui-btn-sm layui-btn-active">阿里云OSS存储</a>
                @else
                    <a data-model="oss" data-load="{{ url('admin/setting/oss') }}" data-tips-text="切换并配置以阿里云OSS存储" class="layui-btn layui-btn-sm layui-btn-primary">阿里云OSS存储</a>
                @endif
            </div>
        </div>
    </div>
    <div class="layui-card padding-20">
        <div class="layui-card-header notselect">
            <b>系统基础参数</b><span class="color-desc font-s12 padding-left-5">System Parameter</span>
            <span class="layui-btn layui-btn-sm layui-btn-primary" id="edit" style="position: absolute;right: 5px;bottom: 5px;">编辑参数</span>
        </div>
        <div class="layui-card-body">
            <div class="layui-form-item">
                <span class="color-green font-w7">网站标题</span><span class="margin-left-5 color-desc">WebTitle</span>
                <label class="relative block">
                    <input readonly value="{{ sysConf('site_title') }}" class="layui-input layui-bg-gray">
                    <a data-copy="{{ sysConf('site_title') }}" class="fa fa-copy input-right-icon"></a>
                </label>
                <div class="layui-icon help-block">网站title,将显示在浏览器的标签上。</div>
            </div>
            <div class="layui-form-item">
                <span class="color-green font-w7">网站名称</span><span class="margin-left-5 color-desc">Website</span>
                <label class="relative block">
                    <input readonly value="{{ sysConf('site_name') }}" class="layui-input layui-bg-gray">
                    <a data-copy="{{ sysConf('site_name') }}" class="fa fa-copy input-right-icon"></a>
                </label>
                <div class="layui-icon help-block">网站名称及网站图标，将显示在浏览器的标签上。</div>
            </div>
            <div class="layui-form-item">
                <span class="color-green font-w7">公网备案号</span><span class="margin-left-5 color-desc">Baian</span>
                <label class="relative block">
                    <input readonly value="{{ sysConf('beian') }}" placeholder="请输入公网备案号" class="layui-input layui-bg-gray">
                    <a data-copy="{{ sysConf('beian') }}" class="fa fa-copy input-right-icon"></a>
                </label>
                <p class="layui-icon help-block">公网备案号，可以在<a target="_blank" href="http://beian.miit.gov.cn">备案管理中心</a>查询获取，将在登录页面下面显示。</p>
            </div>
            <div class="layui-form-item">
                <span class="color-green font-w7">网站备案号</span><span class="margin-left-5 color-desc">Miitbeian</span>
                <label class="relative block">
                    <input readonly value="{{ sysConf('miitbeian') }}" placeholder="请输入网站备案号" class="layui-input layui-bg-gray">
                    <a data-copy="{{ sysConf('miitbeian') }}" class="fa fa-copy input-right-icon"></a>
                </label>
                <div class="layui-icon help-block">网站备案号，可以在<a target="_blank" href="http://beian.miit.gov.cn">备案管理中心</a>查询获取，将显示在登录页面下面。</div>
            </div>
            <div class="layui-form-item">
                <span class="color-green font-w7">网站版权信息</span><span class="margin-left-5 color-desc">Copyright</span>
                <label class="relative block">
                    <input readonly value="{{ sysConf('site_copy') }}" placeholder="请输入网站版权信息"  class="layui-input layui-bg-gray">
                    <a data-copy="{{ sysConf('site_copy') }}" class="fa fa-copy input-right-icon"></a>
                </label>
                <div class="layui-icon help-block">网站版权信息，在后台登录页面显示版本信息并链接到备案到信息备案管理系统。</div>
            </div>
            <div class="layui-form-item">
                <span class="color-green font-w7">IP黑名单</span><span class="margin-left-5 color-desc">Black IP Lists</span>
                <label class="relative block">
                    <textarea readonly class="layui-textarea" name="black_ip" placeholder="请输入IP">{{ sysConf('black_ip') }}</textarea>
                </label>
                <div class="layui-icon help-block">管理平台访问黑名单,默认#:不限制,多个以IP以#分割</div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var $ = layui.jquery,
            layer = layui.layer;
        //复制
        $('body').on('click', '[data-copy]', function () {
            input = document.createElement('textarea');
            input.style.position = 'absolute', input.style.left = '-100000px';
            input.style.width = '1px', input.style.height = '1px', input.innerText = this.getAttribute('data-copy');
            document.body.appendChild(input), input.select(), setTimeout(function () {
                document.execCommand('Copy') ? layer.msg('复制成功') : layer.msg('复制失败，请使用鼠标操作复制！');
                document.body.removeChild(input);
            }, 100);
        });
        //提示
        $('body').on('mouseenter', '[data-tips-text]', function () {
            $(this).attr('index', layer.tips($(this).attr('data-tips-text'), this, {tips: [$(this).attr('data-tips-type') || 3, '#78BA32']}));
        }).on('mouseleave', '[data-tips-text]', function () {
            layer.close($(this).attr('index'));
        });
        //存储引擎
        $('body').on('click', '[data-load]', function () {
            var type = this.getAttribute('data-model');
            if(type == 'local') {
                layer.msg('本地存储引擎已弃用，公司已全部迁移至obs');
            } else {
                layer.open({
                    type: 2
                    ,title: type + '存储引擎编辑'
                    ,content: this.getAttribute('data-load')
                    ,maxmin: true
                    ,area: ['80%', '80%']
                })
            }
        });
        //编辑
        $('#edit').click(function() {
            layer.open({
                type: 2
                ,title: '编辑系统参数'
                ,content: "{{url('admin/setting/show')}}"
                ,maxmin: true
                ,area: ['80%', '90%']
                ,btn: ['确定', '取消']
                ,yes: function(index, layero){
                    var iframeWindow = window['layui-layer-iframe'+ index]
                        ,submitID = 'sys_submit'
                        ,submit = layero.find('iframe').contents().find('#'+ submitID);

                    //监听提交
                    iframeWindow.layui.form.on('submit('+ submitID +')', function(data){
                        $.ajax({
                            type:'post',
                            url: "{{url('admin/setting/show')}}",
                            data: data.field,
                            success: function(res) {
                                if (res) {
                                    layer.msg('操作成功'); layer.close(index);
                                    parent.window.location.reload();
                                } else {
                                    layer.msg('操作异常');
                                }
                            }
                        });
                    });
                    submit.trigger('click');
                }
            });
        });
    </script>
@endsection
