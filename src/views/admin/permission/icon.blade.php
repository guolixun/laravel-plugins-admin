@extends('geauth::layouts.app')

@section('link')
    <link href="/geauth/plugins/awesome/fonts.css" rel="stylesheet">
@endsection

@section('style')
    <style>
        ::-webkit-input-placeholder {
            color: #aaa
        }

        ::-webkit-scrollbar {
            width: 3px;
            height: 3px
        }

        ::-webkit-scrollbar-track {
            background: #ccc
        }

        ::-webkit-scrollbar-thumb {
            background-color: #666
        }

        ::selection {
            background-color: #ec494e;
            color: #fff
        }

        ::-moz-selection {
            background-color: #ec494e;
            color: #fff
        }

        :-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px white inset;
            -webkit-text-fill-color: #333
        }

        ul li {
            width: 20%;
            height: 65px;
            display: block;
            float: left;
            margin-right: -1px;
            margin-left: -2px;
            margin-bottom: -2px;
            cursor: pointer;
            font-size: 14px;
            overflow: hidden;
            text-align: center;
            padding: 15px 0 10px 0;
            border: 1px solid #e2e2e2;
            background-color: #efefef;
            user-select: none;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            transition: all .2s linear;
            -o-transition: all .2s linear;
            -moz-transition: all .2s linear;
            -webkit-transition: all .2s linear
        }

        ul li:hover {
            color: #fff;
            background-color: #563d7c
        }

        ul li:hover i, ul li:hover div {
            color: #fff;
        }

        ul li i {
            color: #333;
            display: inline-block;
            font-size: 30px !important
        }

        ul li div {
            color: #333;
            height: 35px;
            font-size: 13px;
            line-height: 35px;
            white-space: nowrap
        }
    </style>
@endsection

@section('content')
    <ul class="site-doc-icon">
        <li>
            <i class="layui-icon layui-icon-slider"></i>
            <div class="icon-title">layui-icon-slider</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-print"></i>
            <div class="icon-title">layui-icon-print</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-export"></i>
            <div class="icon-title">layui-icon-export</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-cols"></i>
            <div class="icon-title">layui-icon-cols</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-screen-restore"></i>
            <div class="icon-title">layui-icon-screen-restore</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-screen-full"></i>
            <div class="icon-title">layui-icon-screen-full</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-rate-half"></i>
            <div class="icon-title">layui-icon-rate-half</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-rate"></i>
            <div class="icon-title">layui-icon-rate</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-rate-solid"></i>
            <div class="icon-title">layui-icon-rate-solid</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-cellphone"></i>
            <div class="icon-title">layui-icon-cellphone</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-vercode"></i>
            <div class="icon-title">layui-icon-vercode</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-login-wechat"></i>
            <div class="icon-title">layui-icon-login-wechat</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-login-qq"></i>
            <div class="icon-title">layui-icon-login-qq</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-login-weibo"></i>
            <div class="icon-title">layui-icon-login-weibo</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-password"></i>
            <div class="icon-title">layui-icon-password</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-username"></i>
            <div class="icon-title">layui-icon-username</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-refresh-3"></i>
            <div class="icon-title">layui-icon-refresh-3</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-auz"></i>
            <div class="icon-title">layui-icon-auz</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-spread-left"></i>
            <div class="icon-title">layui-icon-spread-left</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-shrink-right"></i>
            <div class="icon-title">layui-icon-shrink-right</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-snowflake"></i>
            <div class="icon-title">layui-icon-snowflake</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-tips"></i>
            <div class="icon-title">layui-icon-tips</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-note"></i>
            <div class="icon-title">layui-icon-note</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-home"></i>
            <div class="icon-title">layui-icon-home</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-senior"></i>
            <div class="icon-title">layui-icon-senior</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-refresh"></i>
            <div class="icon-title">layui-icon-refresh</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-refresh-1"></i>
            <div class="icon-title">layui-icon-refresh-1</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-flag"></i>
            <div class="icon-title">layui-icon-flag</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-theme"></i>
            <div class="icon-title">layui-icon-theme</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-notice"></i>
            <div class="icon-title">layui-icon-notice</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-website"></i>
            <div class="icon-title">layui-icon-website</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-console"></i>
            <div class="icon-title">layui-icon-console</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-face-surprised"></i>
            <div class="icon-title">layui-icon-face-surprised</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-set"></i>
            <div class="icon-title">layui-icon-set</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-template-1"></i>
            <div class="icon-title">layui-icon-template-1</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-app"></i>
            <div class="icon-title">layui-icon-app</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-template"></i>
            <div class="icon-title">layui-icon-template</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-praise"></i>
            <div class="icon-title">layui-icon-praise</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-tread"></i>
            <div class="icon-title">layui-icon-tread</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-male"></i>
            <div class="icon-title">layui-icon-male</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-female"></i>
            <div class="icon-title">layui-icon-female</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-camera"></i>
            <div class="icon-title">layui-icon-camera</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-camera-fill"></i>
            <div class="icon-title">layui-icon-camera-fill</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-more"></i>
            <div class="icon-title">layui-icon-more</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-more-vertical"></i>
            <div class="icon-title">layui-icon-more-vertical</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-rmb"></i>
            <div class="icon-title">layui-icon-rmb</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-dollar"></i>
            <div class="icon-title">layui-icon-dollar</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-diamond"></i>
            <div class="icon-title">layui-icon-diamond</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-fire"></i>
            <div class="icon-title">layui-icon-fire</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-return"></i>
            <div class="icon-title">layui-icon-return</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-location"></i>
            <div class="icon-title">layui-icon-location</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-read"></i>
            <div class="icon-title">layui-icon-read</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-survey"></i>
            <div class="icon-title">layui-icon-survey</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-face-smile"></i>
            <div class="icon-title">layui-icon-face-smile</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-face-cry"></i>
            <div class="icon-title">layui-icon-face-cry</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-cart-simple"></i>
            <div class="icon-title">layui-icon-cart-simple</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-cart"></i>
            <div class="icon-title">layui-icon-cart</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-next"></i>
            <div class="icon-title">layui-icon-next</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-prev"></i>
            <div class="icon-title">layui-icon-prev</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-upload-drag"></i>
            <div class="icon-title">layui-icon-upload-drag</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-upload"></i>
            <div class="icon-title">layui-icon-upload</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-download-circle"></i>
            <div class="icon-title">layui-icon-download-circle</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-component"></i>
            <div class="icon-title">layui-icon-component</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-file-b"></i>
            <div class="icon-title">layui-icon-file-b</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-user"></i>
            <div class="icon-title">layui-icon-user</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-find-fill"></i>
            <div class="icon-title">layui-icon-find-fill</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-loading layui-icon layui-anim layui-anim-rotate layui-anim-loop"></i>
            <div class="icon-title">layui-icon-loading</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-loading-1 layui-icon layui-anim layui-anim-rotate layui-anim-loop"></i>
            <div class="icon-title">layui-icon-loading-1</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-add-1"></i>
            <div class="icon-title">layui-icon-add-1</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-play"></i>
            <div class="icon-title">layui-icon-play</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-pause"></i>
            <div class="icon-title">layui-icon-pause</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-headset"></i>
            <div class="icon-title">layui-icon-headset</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-video"></i>
            <div class="icon-title">layui-icon-video</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-voice"></i>
            <div class="icon-title">layui-icon-voice</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-speaker"></i>
            <div class="icon-title">layui-icon-speaker</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-fonts-del"></i>
            <div class="icon-title">layui-icon-fonts-del</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-fonts-code"></i>
            <div class="icon-title">layui-icon-fonts-code</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-fonts-html"></i>
            <div class="icon-title">layui-icon-fonts-html</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-fonts-strong"></i>
            <div class="icon-title">layui-icon-fonts-strong</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-unlink"></i>
            <div class="icon-title">layui-icon-unlink</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-picture"></i>
            <div class="icon-title">layui-icon-picture</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-link"></i>
            <div class="icon-title">layui-icon-link</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-face-smile-b"></i>
            <div class="icon-title">layui-icon-face-smile-b</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-align-left"></i>
            <div class="icon-title">layui-icon-align-left</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-align-right"></i>
            <div class="icon-title">layui-icon-align-right</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-align-center"></i>
            <div class="icon-title">layui-icon-align-center</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-fonts-u"></i>
            <div class="icon-title">layui-icon-fonts-u</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-fonts-i"></i>
            <div class="icon-title">layui-icon-fonts-i</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-tabs"></i>
            <div class="icon-title">layui-icon-tabs</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-radio"></i>
            <div class="icon-title">layui-icon-radio</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-circle"></i>
            <div class="icon-title">layui-icon-circle</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-edit"></i>
            <div class="icon-title">layui-icon-edit</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-share"></i>
            <div class="icon-title">layui-icon-share</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-delete"></i>
            <div class="icon-title">layui-icon-delete</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-form"></i>
            <div class="icon-title">layui-icon-form</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-cellphone-fine"></i>
            <div class="icon-title">layui-icon-cellphone-fine</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-dialogue"></i>
            <div class="icon-title">layui-icon-dialogue</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-fonts-clear"></i>
            <div class="icon-title">layui-icon-fonts-clear</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-layer"></i>
            <div class="icon-title">layui-icon-layer</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-date"></i>
            <div class="icon-title">layui-icon-date</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-water"></i>
            <div class="icon-title">layui-icon-water</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-code-circle"></i>
            <div class="icon-title">layui-icon-code-circle</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-carousel"></i>
            <div class="icon-title">layui-icon-carousel</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-prev-circle"></i>
            <div class="icon-title">layui-icon-prev-circle</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-layouts"></i>
            <div class="icon-title">layui-icon-layouts</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-util"></i>
            <div class="icon-title">layui-icon-util</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-templeate-1"></i>
            <div class="icon-title">layui-icon-templeate-1</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-upload-circle"></i>
            <div class="icon-title">layui-icon-upload-circle</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-tree"></i>
            <div class="icon-title">layui-icon-tree</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-table"></i>
            <div class="icon-title">layui-icon-table</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-chart"></i>
            <div class="icon-title">layui-icon-chart</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-chart-screen"></i>
            <div class="icon-title">layui-icon-chart-screen</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-engine"></i>
            <div class="icon-title">layui-icon-engine</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-triangle-d"></i>
            <div class="icon-title">layui-icon-triangle-d</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-triangle-r"></i>
            <div class="icon-title">layui-icon-triangle-r</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-file"></i>
            <div class="icon-title">layui-icon-file</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-set-sm"></i>
            <div class="icon-title">layui-icon-set-sm</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-reduce-circle"></i>
            <div class="icon-title">layui-icon-reduce-circle</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-add-circle"></i>
            <div class="icon-title">layui-icon-add-circle</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-404"></i>
            <div class="icon-title">layui-icon-404</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-about"></i>
            <div class="icon-title">layui-icon-about</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-up"></i>
            <div class="icon-title">layui-icon-up</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-down"></i>
            <div class="icon-title">layui-icon-down</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-left"></i>
            <div class="icon-title">layui-icon-left</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-right"></i>
            <div class="icon-title">layui-icon-right</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-circle-dot"></i>
            <div class="icon-title">layui-icon-circle-dot</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-search"></i>
            <div class="icon-title">layui-icon-search</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-set-fill"></i>
            <div class="icon-title">layui-icon-set-fill</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-group"></i>
            <div class="icon-title">layui-icon-group</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-friends"></i>
            <div class="icon-title">layui-icon-friends</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-reply-fill"></i>
            <div class="icon-title">layui-icon-reply-fill</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-menu-fill"></i>
            <div class="icon-title">layui-icon-menu-fill</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-log"></i>
            <div class="icon-title">layui-icon-log</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-picture-fine"></i>
            <div class="icon-title">layui-icon-picture-fine</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-face-smile-fine"></i>
            <div class="icon-title">layui-icon-face-smile-fine</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-list"></i>
            <div class="icon-title">layui-icon-list</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-release"></i>
            <div class="icon-title">layui-icon-release</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-ok"></i>
            <div class="icon-title">layui-icon-ok</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-help"></i>
            <div class="icon-title">layui-icon-help</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-chat"></i>
            <div class="icon-title">layui-icon-chat</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-top"></i>
            <div class="icon-title">layui-icon-top</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-star"></i>
            <div class="icon-title">layui-icon-star</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-star-fill"></i>
            <div class="icon-title">layui-icon-star-fill</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-close-fill"></i>
            <div class="icon-title">layui-icon-close-fill</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-close"></i>
            <div class="icon-title">layui-icon-close</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-ok-circle"></i>
            <div class="icon-title">layui-icon-ok-circle</div>
        </li>
        <li>
            <i class="layui-icon layui-icon-add-circle-fine"></i>
            <div class="icon-title">layui-icon-add-circle-fine</div>
        </li>
    </ul>
    <ul>
        <li>
            <i class="fa fa-address-book"></i>
            <div class="icon-title">fa-address-book</div>
        </li>
        <li>
            <i class="fa fa-address-book-o"></i>
            <div class="icon-title">fa-address-book-o</div>
        </li>
        <li>
            <i class="fa fa-address-card"></i>
            <div class="icon-title">fa-address-card</div>
        </li>
        <li>
            <i class="fa fa-address-card-o"></i>
            <div class="icon-title">fa-address-card-o</div>
        </li>
        <li>
            <i class="fa fa-adjust"></i>
            <div class="icon-title">fa-adjust</div>
        </li>
        <li>
            <i class="fa fa-american-sign-language-interpreting"></i>
            <div class="icon-title">fa-american-sign-language-interpreting</div>
        </li>
        <li>
            <i class="fa fa-anchor"></i>
            <div class="icon-title">fa-anchor</div>
        </li>
        <li>
            <i class="fa fa-archive"></i>
            <div class="icon-title">fa-archive</div>
        </li>
        <li>
            <i class="fa fa-area-chart"></i>
            <div class="icon-title">fa-area-chart</div>
        </li>
        <li>
            <i class="fa fa-arrows"></i>
            <div class="icon-title">fa-arrows</div>
        </li>
        <li>
            <i class="fa fa-arrows-h"></i>
            <div class="icon-title">fa-arrows-h</div>
        </li>
        <li>
            <i class="fa fa-arrows-v"></i>
            <div class="icon-title">fa-arrows-v</div>
        </li>
        <li>
            <i class="fa fa-asl-interpreting"></i>
            <div class="icon-title">fa-asl-interpreting</div>
        </li>
        <li>
            <i class="fa fa-assistive-listening-systems"></i>
            <div class="icon-title">fa-assistive-listening-systems</div>
        </li>
        <li>
            <i class="fa fa-asterisk"></i>
            <div class="icon-title">fa-asterisk</div>
        </li>
        <li>
            <i class="fa fa-at"></i>
            <div class="icon-title">fa-at</div>
        </li>
        <li>
            <i class="fa fa-audio-description"></i>
            <div class="icon-title">fa-audio-description</div>
        </li>
        <li>
            <i class="fa fa-automobile"></i>
            <div class="icon-title">fa-automobile</div>
        </li>
        <li>
            <i class="fa fa-balance-scale"></i>
            <div class="icon-title">fa-balance-scale</div>
        </li>
        <li>
            <i class="fa fa-ban"></i>
            <div class="icon-title">fa-ban</div>
        </li>
        <li>
            <i class="fa fa-bank"></i>
            <div class="icon-title">fa-bank</div>
        </li>
        <li>
            <i class="fa fa-bar-chart"></i>
            <div class="icon-title">fa-bar-chart</div>
        </li>
        <li>
            <i class="fa fa-bar-chart-o"></i>
            <div class="icon-title">fa-bar-chart-o</div>
        </li>
        <li>
            <i class="fa fa-barcode"></i>
            <div class="icon-title">fa-barcode</div>
        </li>
        <li>
            <i class="fa fa-bars"></i>
            <div class="icon-title">fa-bars</div>
        </li>
        <li>
            <i class="fa fa-bath"></i>
            <div class="icon-title">fa-bath</div>
        </li>
        <li>
            <i class="fa fa-bathtub"></i>
            <div class="icon-title">fa-bathtub</div>
        </li>
        <li>
            <i class="fa fa-battery"></i>
            <div class="icon-title">fa-battery</div>
        </li>
        <li>
            <i class="fa fa-battery-0"></i>
            <div class="icon-title">fa-battery-0</div>
        </li>
        <li>
            <i class="fa fa-battery-1"></i>
            <div class="icon-title">fa-battery-1</div>
        </li>
        <li>
            <i class="fa fa-battery-2"></i>
            <div class="icon-title">fa-battery-2</div>
        </li>
        <li>
            <i class="fa fa-battery-3"></i>
            <div class="icon-title">fa-battery-3</div>
        </li>
        <li>
            <i class="fa fa-battery-4"></i>
            <div class="icon-title">fa-battery-4</div>
        </li>
        <li>
            <i class="fa fa-battery-empty"></i>
            <div class="icon-title">fa-battery-empty</div>
        </li>
        <li>
            <i class="fa fa-battery-full"></i>
            <div class="icon-title">fa-battery-full</div>
        </li>
        <li>
            <i class="fa fa-battery-half"></i>
            <div class="icon-title">fa-battery-half</div>
        </li>
        <li>
            <i class="fa fa-battery-quarter"></i>
            <div class="icon-title">fa-battery-quarter</div>
        </li>
        <li>
            <i class="fa fa-battery-three-quarters"></i>
            <div class="icon-title">fa-battery-three-quarters</div>
        </li>
        <li>
            <i class="fa fa-bed"></i>
            <div class="icon-title">fa-bed</div>
        </li>
        <li>
            <i class="fa fa-beer"></i>
            <div class="icon-title">fa-beer</div>
        </li>
        <li>
            <i class="fa fa-bell"></i>
            <div class="icon-title">fa-bell</div>
        </li>
        <li>
            <i class="fa fa-bell-o"></i>
            <div class="icon-title">fa-bell-o</div>
        </li>
        <li>
            <i class="fa fa-bell-slash"></i>
            <div class="icon-title">fa-bell-slash</div>
        </li>
        <li>
            <i class="fa fa-bell-slash-o"></i>
            <div class="icon-title">fa-bell-slash-o</div>
        </li>
        <li>
            <i class="fa fa-bicycle"></i>
            <div class="icon-title">fa-bicycle</div>
        </li>
        <li>
            <i class="fa fa-binoculars"></i>
            <div class="icon-title">fa-binoculars</div>
        </li>
        <li>
            <i class="fa fa-birthday-cake"></i>
            <div class="icon-title">fa-birthday-cake</div>
        </li>
        <li>
            <i class="fa fa-blind"></i>
            <div class="icon-title">fa-blind</div>
        </li>
        <li>
            <i class="fa fa-bluetooth"></i>
            <div class="icon-title">fa-bluetooth</div>
        </li>
        <li>
            <i class="fa fa-bluetooth-b"></i>
            <div class="icon-title">fa-bluetooth-b</div>
        </li>
        <li>
            <i class="fa fa-bolt"></i>
            <div class="icon-title">fa-bolt</div>
        </li>
        <li>
            <i class="fa fa-bomb"></i>
            <div class="icon-title">fa-bomb</div>
        </li>
        <li>
            <i class="fa fa-book"></i>
            <div class="icon-title">fa-book</div>
        </li>
        <li>
            <i class="fa fa-bookmark"></i>
            <div class="icon-title">fa-bookmark</div>
        </li>
        <li>
            <i class="fa fa-bookmark-o"></i>
            <div class="icon-title">fa-bookmark-o</div>
        </li>
        <li>
            <i class="fa fa-braille"></i>
            <div class="icon-title">fa-braille</div>
        </li>
        <li>
            <i class="fa fa-briefcase"></i>
            <div class="icon-title">fa-briefcase</div>
        </li>
        <li>
            <i class="fa fa-bug"></i>
            <div class="icon-title">fa-bug</div>
        </li>
        <li>
            <i class="fa fa-building"></i>
            <div class="icon-title">fa-building</div>
        </li>
        <li>
            <i class="fa fa-building-o"></i>
            <div class="icon-title">fa-building-o</div>
        </li>
        <li>
            <i class="fa fa-bullhorn"></i>
            <div class="icon-title">fa-bullhorn</div>
        </li>
        <li>
            <i class="fa fa-bullseye"></i>
            <div class="icon-title">fa-bullseye</div>
        </li>
        <li>
            <i class="fa fa-bus"></i>
            <div class="icon-title">fa-bus</div>
        </li>
        <li>
            <i class="fa fa-cab"></i>
            <div class="icon-title">fa-cab</div>
        </li>
        <li>
            <i class="fa fa-calculator"></i>
            <div class="icon-title">fa-calculator</div>
        </li>
        <li>
            <i class="fa fa-calendar"></i>
            <div class="icon-title">fa-calendar</div>
        </li>
        <li>
            <i class="fa fa-calendar-check-o"></i>
            <div class="icon-title">fa-calendar-check-o</div>
        </li>
        <li>
            <i class="fa fa-calendar-minus-o"></i>
            <div class="icon-title">fa-calendar-minus-o</div>
        </li>
        <li>
            <i class="fa fa-calendar-o"></i>
            <div class="icon-title">fa-calendar-o</div>
        </li>
        <li>
            <i class="fa fa-calendar-plus-o"></i>
            <div class="icon-title">fa-calendar-plus-o</div>
        </li>
        <li>
            <i class="fa fa-calendar-times-o"></i>
            <div class="icon-title">fa-calendar-times-o</div>
        </li>
        <li>
            <i class="fa fa-camera"></i>
            <div class="icon-title">fa-camera</div>
        </li>
        <li>
            <i class="fa fa-camera-retro"></i>
            <div class="icon-title">fa-camera-retro</div>
        </li>
        <li>
            <i class="fa fa-car"></i>
            <div class="icon-title">fa-car</div>
        </li>
        <li>
            <i class="fa fa-caret-square-o-down"></i>
            <div class="icon-title">fa-caret-square-o-down</div>
        </li>
        <li>
            <i class="fa fa-caret-square-o-left"></i>
            <div class="icon-title">fa-caret-square-o-left</div>
        </li>
        <li>
            <i class="fa fa-caret-square-o-right"></i>
            <div class="icon-title">fa-caret-square-o-right</div>
        </li>
        <li>
            <i class="fa fa-caret-square-o-up"></i>
            <div class="icon-title">fa-caret-square-o-up</div>
        </li>
        <li>
            <i class="fa fa-cart-arrow-down"></i>
            <div class="icon-title">fa-cart-arrow-down</div>
        </li>
        <li>
            <i class="fa fa-cart-plus"></i>
            <div class="icon-title">fa-cart-plus</div>
        </li>
        <li>
            <i class="fa fa-cc"></i>
            <div class="icon-title">fa-cc</div>
        </li>
        <li>
            <i class="fa fa-certificate"></i>
            <div class="icon-title">fa-certificate</div>
        </li>
        <li>
            <i class="fa fa-check"></i>
            <div class="icon-title">fa-check</div>
        </li>
        <li>
            <i class="fa fa-check-circle"></i>
            <div class="icon-title">fa-check-circle</div>
        </li>
        <li>
            <i class="fa fa-check-circle-o"></i>
            <div class="icon-title">fa-check-circle-o</div>
        </li>
        <li>
            <i class="fa fa-check-square"></i>
            <div class="icon-title">fa-check-square</div>
        </li>
        <li>
            <i class="fa fa-check-square-o"></i>
            <div class="icon-title">fa-check-square-o</div>
        </li>
        <li>
            <i class="fa fa-child"></i>
            <div class="icon-title">fa-child</div>
        </li>
        <li>
            <i class="fa fa-circle"></i>
            <div class="icon-title">fa-circle</div>
        </li>
        <li>
            <i class="fa fa-circle-o"></i>
            <div class="icon-title">fa-circle-o</div>
        </li>
        <li>
            <i class="fa fa-circle-o-notch"></i>
            <div class="icon-title">fa-circle-o-notch</div>
        </li>
        <li>
            <i class="fa fa-circle-thin"></i>
            <div class="icon-title">fa-circle-thin</div>
        </li>
        <li>
            <i class="fa fa-clock-o"></i>
            <div class="icon-title">fa-clock-o</div>
        </li>
        <li>
            <i class="fa fa-clone"></i>
            <div class="icon-title">fa-clone</div>
        </li>
        <li>
            <i class="fa fa-close"></i>
            <div class="icon-title">fa-close</div>
        </li>
        <li>
            <i class="fa fa-cloud"></i>
            <div class="icon-title">fa-cloud</div>
        </li>
        <li>
            <i class="fa fa-cloud-download"></i>
            <div class="icon-title">fa-cloud-download</div>
        </li>
        <li>
            <i class="fa fa-cloud-upload"></i>
            <div class="icon-title">fa-cloud-upload</div>
        </li>
        <li>
            <i class="fa fa-code"></i>
            <div class="icon-title">fa-code</div>
        </li>
        <li>
            <i class="fa fa-code-fork"></i>
            <div class="icon-title">fa-code-fork</div>
        </li>
        <li>
            <i class="fa fa-coffee"></i>
            <div class="icon-title">fa-coffee</div>
        </li>
        <li>
            <i class="fa fa-cog"></i>
            <div class="icon-title">fa-cog</div>
        </li>
        <li>
            <i class="fa fa-cogs"></i>
            <div class="icon-title">fa-cogs</div>
        </li>
        <li>
            <i class="fa fa-comment"></i>
            <div class="icon-title">fa-comment</div>
        </li>
        <li>
            <i class="fa fa-comment-o"></i>
            <div class="icon-title">fa-comment-o</div>
        </li>
        <li>
            <i class="fa fa-commenting"></i>
            <div class="icon-title">fa-commenting</div>
        </li>
        <li>
            <i class="fa fa-commenting-o"></i>
            <div class="icon-title">fa-commenting-o</div>
        </li>
        <li>
            <i class="fa fa-comments"></i>
            <div class="icon-title">fa-comments</div>
        </li>
        <li>
            <i class="fa fa-comments-o"></i>
            <div class="icon-title">fa-comments-o</div>
        </li>
        <li>
            <i class="fa fa-compass"></i>
            <div class="icon-title">fa-compass</div>
        </li>
        <li>
            <i class="fa fa-copyright"></i>
            <div class="icon-title">fa-copyright</div>
        </li>
        <li>
            <i class="fa fa-creative-commons"></i>
            <div class="icon-title">fa-creative-commons</div>
        </li>
        <li>
            <i class="fa fa-credit-card"></i>
            <div class="icon-title">fa-credit-card</div>
        </li>
        <li><i class="fa fa-credit-card-alt"></i>
            <div class="icon-title">fa-credit-card-alt</div>
        </li>
        <li><i class="fa fa-crop"></i>
            <div class="icon-title">fa-crop</div>
        </li>
        <li><i class="fa fa-crosshairs"></i>
            <div class="icon-title">fa-crosshairs</div>
        </li>
        <li><i class="fa fa-cube"></i>
            <div class="icon-title">fa-cube</div>
        </li>
        <li><i class="fa fa-cubes"></i>
            <div class="icon-title">fa-cubes</div>
        </li>
        <li><i class="fa fa-cutlery"></i>
            <div class="icon-title">fa-cutlery</div>
        </li>
        <li><i class="fa fa-dashboard"></i>
            <div class="icon-title">fa-dashboard</div>
        </li>
        <li><i class="fa fa-database"></i>
            <div class="icon-title">fa-database</div>
        </li>
        <li><i class="fa fa-deaf"></i>
            <div class="icon-title">fa-deaf</div>
        </li>
        <li><i class="fa fa-deafness"></i>
            <div class="icon-title">fa-deafness</div>
        </li>
        <li><i class="fa fa-desktop"></i>
            <div class="icon-title">fa-desktop</div>
        </li>
        <li><i class="fa fa-diamond"></i>
            <div class="icon-title">fa-diamond</div>
        </li>
        <li><i class="fa fa-dot-circle-o"></i>
            <div class="icon-title">fa-dot-circle-o</div>
        </li>
        <li><i class="fa fa-download"></i>
            <div class="icon-title">fa-download</div>
        </li>
        <li><i class="fa fa-drivers-license"></i>
            <div class="icon-title">fa-drivers-license</div>
        </li>
        <li><i class="fa fa-drivers-license-o"></i>
            <div class="icon-title">fa-drivers-license-o</div>
        </li>
        <li><i class="fa fa-edit"></i>
            <div class="icon-title">fa-edit</div>
        </li>
        <li><i class="fa fa-ellipsis-h"></i>
            <div class="icon-title">fa-ellipsis-h</div>
        </li>
        <li><i class="fa fa-ellipsis-v"></i>
            <div class="icon-title">fa-ellipsis-v</div>
        </li>
        <li><i class="fa fa-envelope"></i>
            <div class="icon-title">fa-envelope</div>
        </li>
        <li><i class="fa fa-envelope-o"></i>
            <div class="icon-title">fa-envelope-o</div>
        </li>
        <li><i class="fa fa-envelope-open"></i>
            <div class="icon-title">fa-envelope-open</div>
        </li>
        <li><i class="fa fa-envelope-open-o"></i>
            <div class="icon-title">fa-envelope-open-o</div>
        </li>
        <li><i class="fa fa-envelope-square"></i>
            <div class="icon-title">fa-envelope-square</div>
        </li>
        <li><i class="fa fa-eraser"></i>
            <div class="icon-title">fa-eraser</div>
        </li>
        <li><i class="fa fa-exchange"></i>
            <div class="icon-title">fa-exchange</div>
        </li>
        <li><i class="fa fa-exclamation"></i>
            <div class="icon-title">fa-exclamation</div>
        </li>
        <li><i class="fa fa-exclamation-circle"></i>
            <div class="icon-title">fa-exclamation-circle</div>
        </li>
        <li><i class="fa fa-exclamation-triangle"></i>
            <div class="icon-title">fa-exclamation-triangle</div>
        </li>
        <li><i class="fa fa-external-link"></i>
            <div class="icon-title">fa-external-link</div>
        </li>
        <li><i class="fa fa-external-link-square"></i>
            <div class="icon-title">fa-external-link-square</div>
        </li>
        <li><i class="fa fa-eye"></i>
            <div class="icon-title">fa-eye</div>
        </li>
        <li><i class="fa fa-eye-slash"></i>
            <div class="icon-title">fa-eye-slash</div>
        </li>
        <li><i class="fa fa-eyedropper"></i>
            <div class="icon-title">fa-eyedropper</div>
        </li>
        <li><i class="fa fa-fax"></i>
            <div class="icon-title">fa-fax</div>
        </li>
        <li><i class="fa fa-feed"></i>
            <div class="icon-title">fa-feed</div>
        </li>
        <li><i class="fa fa-female"></i>
            <div class="icon-title">fa-female</div>
        </li>
        <li><i class="fa fa-fighter-jet"></i>
            <div class="icon-title">fa-fighter-jet</div>
        </li>
        <li><i class="fa fa-file-archive-o"></i>
            <div class="icon-title">fa-file-archive-o</div>
        </li>
        <li><i class="fa fa-file-audio-o"></i>
            <div class="icon-title">fa-file-audio-o</div>
        </li>
        <li><i class="fa fa-file-code-o"></i>
            <div class="icon-title">fa-file-code-o</div>
        </li>
        <li><i class="fa fa-file-excel-o"></i>
            <div class="icon-title">fa-file-excel-o</div>
        </li>
        <li><i class="fa fa-file-image-o"></i>
            <div class="icon-title">fa-file-image-o</div>
        </li>
        <li><i class="fa fa-file-movie-o"></i>
            <div class="icon-title">fa-file-movie-o</div>
        </li>
        <li><i class="fa fa-file-pdf-o"></i>
            <div class="icon-title">fa-file-pdf-o</div>
        </li>
        <li><i class="fa fa-file-photo-o"></i>
            <div class="icon-title">fa-file-photo-o</div>
        </li>
        <li><i class="fa fa-file-picture-o"></i>
            <div class="icon-title">fa-file-picture-o</div>
        </li>
        <li><i class="fa fa-file-powerpoint-o"></i>
            <div class="icon-title">fa-file-powerpoint-o</div>
        </li>
        <li><i class="fa fa-file-sound-o"></i>
            <div class="icon-title">fa-file-sound-o</div>
        </li>
        <li><i class="fa fa-file-video-o"></i>
            <div class="icon-title">fa-file-video-o</div>
        </li>
        <li><i class="fa fa-file-word-o"></i>
            <div class="icon-title">fa-file-word-o</div>
        </li>
        <li><i class="fa fa-file-zip-o"></i>
            <div class="icon-title">fa-file-zip-o</div>
        </li>
        <li><i class="fa fa-film"></i>
            <div class="icon-title">fa-film</div>
        </li>
        <li><i class="fa fa-filter"></i>
            <div class="icon-title">fa-filter</div>
        </li>
        <li><i class="fa fa-fire"></i>
            <div class="icon-title">fa-fire</div>
        </li>
        <li><i class="fa fa-fire-extinguisher"></i>
            <div class="icon-title">fa-fire-extinguisher</div>
        </li>
        <li><i class="fa fa-flag"></i>
            <div class="icon-title">fa-flag</div>
        </li>
        <li><i class="fa fa-flag-checkered"></i>
            <div class="icon-title">fa-flag-checkered</div>
        </li>
        <li><i class="fa fa-flag-o"></i>
            <div class="icon-title">fa-flag-o</div>
        </li>
        <li><i class="fa fa-flash"></i>
            <div class="icon-title">fa-flash</div>
        </li>
        <li><i class="fa fa-flask"></i>
            <div class="icon-title">fa-flask</div>
        </li>
        <li><i class="fa fa-folder"></i>
            <div class="icon-title">fa-folder</div>
        </li>
        <li><i class="fa fa-folder-o"></i>
            <div class="icon-title">fa-folder-o</div>
        </li>
        <li><i class="fa fa-folder-open"></i>
            <div class="icon-title">fa-folder-open</div>
        </li>
        <li><i class="fa fa-folder-open-o"></i>
            <div class="icon-title">fa-folder-open-o</div>
        </li>
        <li><i class="fa fa-frown-o"></i>
            <div class="icon-title">fa-frown-o</div>
        </li>
        <li><i class="fa fa-futbol-o"></i>
            <div class="icon-title">fa-futbol-o</div>
        </li>
        <li><i class="fa fa-gamepad"></i>
            <div class="icon-title">fa-gamepad</div>
        </li>
        <li><i class="fa fa-gavel"></i>
            <div class="icon-title">fa-gavel</div>
        </li>
        <li><i class="fa fa-gear"></i>
            <div class="icon-title">fa-gear</div>
        </li>
        <li><i class="fa fa-gears"></i>
            <div class="icon-title">fa-gears</div>
        </li>
        <li><i class="fa fa-gift"></i>
            <div class="icon-title">fa-gift</div>
        </li>
        <li><i class="fa fa-glass"></i>
            <div class="icon-title">fa-glass</div>
        </li>
        <li><i class="fa fa-globe"></i>
            <div class="icon-title">fa-globe</div>
        </li>
        <li><i class="fa fa-graduation-cap"></i>
            <div class="icon-title">fa-graduation-cap</div>
        </li>
        <li><i class="fa fa-group"></i>
            <div class="icon-title">fa-group</div>
        </li>
        <li><i class="fa fa-hand-grab-o"></i>
            <div class="icon-title">fa-hand-grab-o</div>
        </li>
        <li><i class="fa fa-hand-lizard-o"></i>
            <div class="icon-title">fa-hand-lizard-o</div>
        </li>
        <li><i class="fa fa-hand-paper-o"></i>
            <div class="icon-title">fa-hand-paper-o</div>
        </li>
        <li><i class="fa fa-hand-peace-o"></i>
            <div class="icon-title">fa-hand-peace-o</div>
        </li>
        <li><i class="fa fa-hand-pointer-o"></i>
            <div class="icon-title">fa-hand-pointer-o</div>
        </li>
        <li><i class="fa fa-hand-rock-o"></i>
            <div class="icon-title">fa-hand-rock-o</div>
        </li>
        <li><i class="fa fa-hand-scissors-o"></i>
            <div class="icon-title">fa-hand-scissors-o</div>
        </li>
        <li><i class="fa fa-hand-spock-o"></i>
            <div class="icon-title">fa-hand-spock-o</div>
        </li>
        <li><i class="fa fa-hand-stop-o"></i>
            <div class="icon-title">fa-hand-stop-o</div>
        </li>
        <li><i class="fa fa-handshake-o"></i>
            <div class="icon-title">fa-handshake-o</div>
        </li>
        <li><i class="fa fa-hard-of-hearing"></i>
            <div class="icon-title">fa-hard-of-hearing</div>
        </li>
        <li><i class="fa fa-hashtag"></i>
            <div class="icon-title">fa-hashtag</div>
        </li>
        <li><i class="fa fa-hdd-o"></i>
            <div class="icon-title">fa-hdd-o</div>
        </li>
        <li><i class="fa fa-headphones"></i>
            <div class="icon-title">fa-headphones</div>
        </li>
        <li><i class="fa fa-heart"></i>
            <div class="icon-title">fa-heart</div>
        </li>
        <li><i class="fa fa-heart-o"></i>
            <div class="icon-title">fa-heart-o</div>
        </li>
        <li><i class="fa fa-heartbeat"></i>
            <div class="icon-title">fa-heartbeat</div>
        </li>
        <li><i class="fa fa-history"></i>
            <div class="icon-title">fa-history</div>
        </li>
        <li><i class="fa fa-home"></i>
            <div class="icon-title">fa-home</div>
        </li>
        <li><i class="fa fa-hotel"></i>
            <div class="icon-title">fa-hotel</div>
        </li>
        <li><i class="fa fa-hourglass"></i>
            <div class="icon-title">fa-hourglass</div>
        </li>
        <li><i class="fa fa-hourglass-1"></i>
            <div class="icon-title">fa-hourglass-1</div>
        </li>
        <li><i class="fa fa-hourglass-2"></i>
            <div class="icon-title">fa-hourglass-2</div>
        </li>
        <li><i class="fa fa-hourglass-3"></i>
            <div class="icon-title">fa-hourglass-3</div>
        </li>
        <li><i class="fa fa-hourglass-end"></i>
            <div class="icon-title">fa-hourglass-end</div>
        </li>
        <li><i class="fa fa-hourglass-half"></i>
            <div class="icon-title">fa-hourglass-half</div>
        </li>
        <li><i class="fa fa-hourglass-o"></i>
            <div class="icon-title">fa-hourglass-o</div>
        </li>
        <li><i class="fa fa-hourglass-start"></i>
            <div class="icon-title">fa-hourglass-start</div>
        </li>
        <li><i class="fa fa-i-cursor"></i>
            <div class="icon-title">fa-i-cursor</div>
        </li>
        <li><i class="fa fa-id-badge"></i>
            <div class="icon-title">fa-id-badge</div>
        </li>
        <li><i class="fa fa-id-card"></i>
            <div class="icon-title">fa-id-card</div>
        </li>
        <li><i class="fa fa-id-card-o"></i>
            <div class="icon-title">fa-id-card-o</div>
        </li>
        <li><i class="fa fa-image"></i>
            <div class="icon-title">fa-image</div>
        </li>
        <li><i class="fa fa-inbox"></i>
            <div class="icon-title">fa-inbox</div>
        </li>
        <li><i class="fa fa-industry"></i>
            <div class="icon-title">fa-industry</div>
        </li>
        <li><i class="fa fa-info"></i>
            <div class="icon-title">fa-info</div>
        </li>
        <li><i class="fa fa-info-circle"></i>
            <div class="icon-title">fa-info-circle</div>
        </li>
        <li><i class="fa fa-institution"></i>
            <div class="icon-title">fa-institution</div>
        </li>
        <li><i class="fa fa-key"></i>
            <div class="icon-title">fa-key</div>
        </li>
        <li><i class="fa fa-keyboard-o"></i>
            <div class="icon-title">fa-keyboard-o</div>
        </li>
        <li><i class="fa fa-language"></i>
            <div class="icon-title">fa-language</div>
        </li>
        <li><i class="fa fa-laptop"></i>
            <div class="icon-title">fa-laptop</div>
        </li>
        <li><i class="fa fa-leaf"></i>
            <div class="icon-title">fa-leaf</div>
        </li>
        <li><i class="fa fa-legal"></i>
            <div class="icon-title">fa-legal</div>
        </li>
        <li><i class="fa fa-lemon-o"></i>
            <div class="icon-title">fa-lemon-o</div>
        </li>
        <li><i class="fa fa-level-down"></i>
            <div class="icon-title">fa-level-down</div>
        </li>
        <li><i class="fa fa-level-up"></i>
            <div class="icon-title">fa-level-up</div>
        </li>
        <li><i class="fa fa-life-bouy"></i>
            <div class="icon-title">fa-life-bouy</div>
        </li>
        <li><i class="fa fa-life-buoy"></i>
            <div class="icon-title">fa-life-buoy</div>
        </li>
        <li><i class="fa fa-life-ring"></i>
            <div class="icon-title">fa-life-ring</div>
        </li>
        <li><i class="fa fa-life-saver"></i>
            <div class="icon-title">fa-life-saver</div>
        </li>
        <li><i class="fa fa-lightbulb-o"></i>
            <div class="icon-title">fa-lightbulb-o</div>
        </li>
        <li><i class="fa fa-line-chart"></i>
            <div class="icon-title">fa-line-chart</div>
        </li>
        <li><i class="fa fa-location-arrow"></i>
            <div class="icon-title">fa-location-arrow</div>
        </li>
        <li><i class="fa fa-lock"></i>
            <div class="icon-title">fa-lock</div>
        </li>
        <li><i class="fa fa-low-vision"></i>
            <div class="icon-title">fa-low-vision</div>
        </li>
        <li><i class="fa fa-magic"></i>
            <div class="icon-title">fa-magic</div>
        </li>
        <li><i class="fa fa-magnet"></i>
            <div class="icon-title">fa-magnet</div>
        </li>
        <li><i class="fa fa-mail-forward"></i>
            <div class="icon-title">fa-mail-forward</div>
        </li>
        <li><i class="fa fa-mail-reply"></i>
            <div class="icon-title">fa-mail-reply</div>
        </li>
        <li><i class="fa fa-mail-reply-all"></i>
            <div class="icon-title">fa-mail-reply-all</div>
        </li>
        <li><i class="fa fa-male"></i>
            <div class="icon-title">fa-male</div>
        </li>
        <li><i class="fa fa-map"></i>
            <div class="icon-title">fa-map</div>
        </li>
        <li><i class="fa fa-map-marker"></i>
            <div class="icon-title">fa-map-marker</div>
        </li>
        <li><i class="fa fa-map-o"></i>
            <div class="icon-title">fa-map-o</div>
        </li>
        <li><i class="fa fa-map-pin"></i>
            <div class="icon-title">fa-map-pin</div>
        </li>
        <li><i class="fa fa-map-signs"></i>
            <div class="icon-title">fa-map-signs</div>
        </li>
        <li><i class="fa fa-meh-o"></i>
            <div class="icon-title">fa-meh-o</div>
        </li>
        <li><i class="fa fa-microchip"></i>
            <div class="icon-title">fa-microchip</div>
        </li>
        <li><i class="fa fa-microphone"></i>
            <div class="icon-title">fa-microphone</div>
        </li>
        <li><i class="fa fa-microphone-slash"></i>
            <div class="icon-title">fa-microphone-slash</div>
        </li>
        <li><i class="fa fa-minus"></i>
            <div class="icon-title">fa-minus</div>
        </li>
        <li><i class="fa fa-minus-circle"></i>
            <div class="icon-title">fa-minus-circle</div>
        </li>
        <li><i class="fa fa-minus-square"></i>
            <div class="icon-title">fa-minus-square</div>
        </li>
        <li><i class="fa fa-minus-square-o"></i>
            <div class="icon-title">fa-minus-square-o</div>
        </li>
        <li><i class="fa fa-mobile"></i>
            <div class="icon-title">fa-mobile</div>
        </li>
        <li><i class="fa fa-mobile-phone"></i>
            <div class="icon-title">fa-mobile-phone</div>
        </li>
        <li><i class="fa fa-money"></i>
            <div class="icon-title">fa-money</div>
        </li>
        <li><i class="fa fa-moon-o"></i>
            <div class="icon-title">fa-moon-o</div>
        </li>
        <li><i class="fa fa-mortar-board"></i>
            <div class="icon-title">fa-mortar-board</div>
        </li>
        <li><i class="fa fa-motorcycle"></i>
            <div class="icon-title">fa-motorcycle</div>
        </li>
        <li><i class="fa fa-mouse-pointer"></i>
            <div class="icon-title">fa-mouse-pointer</div>
        </li>
        <li><i class="fa fa-music"></i>
            <div class="icon-title">fa-music</div>
        </li>
        <li><i class="fa fa-navicon"></i>
            <div class="icon-title">fa-navicon</div>
        </li>
        <li><i class="fa fa-newspaper-o"></i>
            <div class="icon-title">fa-newspaper-o</div>
        </li>
        <li><i class="fa fa-object-group"></i>
            <div class="icon-title">fa-object-group</div>
        </li>
        <li><i class="fa fa-object-ungroup"></i>
            <div class="icon-title">fa-object-ungroup</div>
        </li>
        <li><i class="fa fa-paint-brush"></i>
            <div class="icon-title">fa-paint-brush</div>
        </li>
        <li><i class="fa fa-paper-plane"></i>
            <div class="icon-title">fa-paper-plane</div>
        </li>
        <li><i class="fa fa-paper-plane-o"></i>
            <div class="icon-title">fa-paper-plane-o</div>
        </li>
        <li><i class="fa fa-paw"></i>
            <div class="icon-title">fa-paw</div>
        </li>
        <li><i class="fa fa-pencil"></i>
            <div class="icon-title">fa-pencil</div>
        </li>
        <li><i class="fa fa-pencil-square"></i>
            <div class="icon-title">fa-pencil-square</div>
        </li>
        <li><i class="fa fa-pencil-square-o"></i>
            <div class="icon-title">fa-pencil-square-o</div>
        </li>
        <li><i class="fa fa-percent"></i>
            <div class="icon-title">fa-percent</div>
        </li>
        <li><i class="fa fa-phone"></i>
            <div class="icon-title">fa-phone</div>
        </li>
        <li><i class="fa fa-phone-square"></i>
            <div class="icon-title">fa-phone-square</div>
        </li>
        <li><i class="fa fa-photo"></i>
            <div class="icon-title">fa-photo</div>
        </li>
        <li><i class="fa fa-picture-o"></i>
            <div class="icon-title">fa-picture-o</div>
        </li>
        <li><i class="fa fa-pie-chart"></i>
            <div class="icon-title">fa-pie-chart</div>
        </li>
        <li><i class="fa fa-plane"></i>
            <div class="icon-title">fa-plane</div>
        </li>
        <li><i class="fa fa-plug"></i>
            <div class="icon-title">fa-plug</div>
        </li>
        <li><i class="fa fa-plus"></i>
            <div class="icon-title">fa-plus</div>
        </li>
        <li><i class="fa fa-plus-circle"></i>
            <div class="icon-title">fa-plus-circle</div>
        </li>
        <li><i class="fa fa-plus-square"></i>
            <div class="icon-title">fa-plus-square</div>
        </li>
        <li><i class="fa fa-plus-square-o"></i>
            <div class="icon-title">fa-plus-square-o</div>
        </li>
        <li><i class="fa fa-podcast"></i>
            <div class="icon-title">fa-podcast</div>
        </li>
        <li><i class="fa fa-power-off"></i>
            <div class="icon-title">fa-power-off</div>
        </li>
        <li><i class="fa fa-print"></i>
            <div class="icon-title">fa-print</div>
        </li>
        <li><i class="fa fa-puzzle-piece"></i>
            <div class="icon-title">fa-puzzle-piece</div>
        </li>
        <li><i class="fa fa-qrcode"></i>
            <div class="icon-title">fa-qrcode</div>
        </li>
        <li><i class="fa fa-question"></i>
            <div class="icon-title">fa-question</div>
        </li>
        <li><i class="fa fa-question-circle"></i>
            <div class="icon-title">fa-question-circle</div>
        </li>
        <li><i class="fa fa-question-circle-o"></i>
            <div class="icon-title">fa-question-circle-o</div>
        </li>
        <li><i class="fa fa-quote-left"></i>
            <div class="icon-title">fa-quote-left</div>
        </li>
        <li><i class="fa fa-quote-right"></i>
            <div class="icon-title">fa-quote-right</div>
        </li>
        <li><i class="fa fa-random"></i>
            <div class="icon-title">fa-random</div>
        </li>
        <li><i class="fa fa-recycle"></i>
            <div class="icon-title">fa-recycle</div>
        </li>
        <li><i class="fa fa-refresh"></i>
            <div class="icon-title">fa-refresh</div>
        </li>
        <li><i class="fa fa-registered"></i>
            <div class="icon-title">fa-registered</div>
        </li>
        <li><i class="fa fa-remove"></i>
            <div class="icon-title">fa-remove</div>
        </li>
        <li><i class="fa fa-reorder"></i>
            <div class="icon-title">fa-reorder</div>
        </li>
        <li><i class="fa fa-reply"></i>
            <div class="icon-title">fa-reply</div>
        </li>
        <li><i class="fa fa-reply-all"></i>
            <div class="icon-title">fa-reply-all</div>
        </li>
        <li><i class="fa fa-retweet"></i>
            <div class="icon-title">fa-retweet</div>
        </li>
        <li><i class="fa fa-road"></i>
            <div class="icon-title">fa-road</div>
        </li>
        <li><i class="fa fa-rocket"></i>
            <div class="icon-title">fa-rocket</div>
        </li>
        <li><i class="fa fa-rss"></i>
            <div class="icon-title">fa-rss</div>
        </li>
        <li><i class="fa fa-rss-square"></i>
            <div class="icon-title">fa-rss-square</div>
        </li>
        <li><i class="fa fa-s15"></i>
            <div class="icon-title">fa-s15</div>
        </li>
        <li><i class="fa fa-search"></i>
            <div class="icon-title">fa-search</div>
        </li>
        <li><i class="fa fa-search-minus"></i>
            <div class="icon-title">fa-search-minus</div>
        </li>
        <li><i class="fa fa-search-plus"></i>
            <div class="icon-title">fa-search-plus</div>
        </li>
        <li><i class="fa fa-send"></i>
            <div class="icon-title">fa-send</div>
        </li>
        <li><i class="fa fa-send-o"></i>
            <div class="icon-title">fa-send-o</div>
        </li>
        <li><i class="fa fa-server"></i>
            <div class="icon-title">fa-server</div>
        </li>
        <li><i class="fa fa-share"></i>
            <div class="icon-title">fa-share</div>
        </li>
        <li><i class="fa fa-share-alt"></i>
            <div class="icon-title">fa-share-alt</div>
        </li>
        <li><i class="fa fa-share-alt-square"></i>
            <div class="icon-title">fa-share-alt-square</div>
        </li>
        <li><i class="fa fa-share-square"></i>
            <div class="icon-title">fa-share-square</div>
        </li>
        <li><i class="fa fa-share-square-o"></i>
            <div class="icon-title">fa-share-square-o</div>
        </li>
        <li><i class="fa fa-shield"></i>
            <div class="icon-title">fa-shield</div>
        </li>
        <li><i class="fa fa-ship"></i>
            <div class="icon-title">fa-ship</div>
        </li>
        <li><i class="fa fa-shopping-bag"></i>
            <div class="icon-title">fa-shopping-bag</div>
        </li>
        <li><i class="fa fa-shopping-basket"></i>
            <div class="icon-title">fa-shopping-basket</div>
        </li>
        <li><i class="fa fa-shopping-cart"></i>
            <div class="icon-title">fa-shopping-cart</div>
        </li>
        <li><i class="fa fa-shower"></i>
            <div class="icon-title">fa-shower</div>
        </li>
        <li><i class="fa fa-sign-in"></i>
            <div class="icon-title">fa-sign-in</div>
        </li>
        <li><i class="fa fa-sign-language"></i>
            <div class="icon-title">fa-sign-language</div>
        </li>
        <li><i class="fa fa-sign-out"></i>
            <div class="icon-title">fa-sign-out</div>
        </li>
        <li><i class="fa fa-signal"></i>
            <div class="icon-title">fa-signal</div>
        </li>
        <li><i class="fa fa-signing"></i>
            <div class="icon-title">fa-signing</div>
        </li>
        <li><i class="fa fa-sitemap"></i>
            <div class="icon-title">fa-sitemap</div>
        </li>
        <li><i class="fa fa-sliders"></i>
            <div class="icon-title">fa-sliders</div>
        </li>
        <li><i class="fa fa-smile-o"></i>
            <div class="icon-title">fa-smile-o</div>
        </li>
        <li><i class="fa fa-snowflake-o"></i>
            <div class="icon-title">fa-snowflake-o</div>
        </li>
        <li><i class="fa fa-soccer-ball-o"></i>
            <div class="icon-title">fa-soccer-ball-o</div>
        </li>
        <li><i class="fa fa-sort"></i>
            <div class="icon-title">fa-sort</div>
        </li>
        <li><i class="fa fa-sort-alpha-asc"></i>
            <div class="icon-title">fa-sort-alpha-asc</div>
        </li>
        <li><i class="fa fa-sort-alpha-desc"></i>
            <div class="icon-title">fa-sort-alpha-desc</div>
        </li>
        <li><i class="fa fa-sort-amount-asc"></i>
            <div class="icon-title">fa-sort-amount-asc</div>
        </li>
        <li><i class="fa fa-sort-amount-desc"></i>
            <div class="icon-title">fa-sort-amount-desc</div>
        </li>
        <li><i class="fa fa-sort-asc"></i>
            <div class="icon-title">fa-sort-asc</div>
        </li>
        <li><i class="fa fa-sort-desc"></i>
            <div class="icon-title">fa-sort-desc</div>
        </li>
        <li><i class="fa fa-sort-down"></i>
            <div class="icon-title">fa-sort-down</div>
        </li>
        <li><i class="fa fa-sort-numeric-asc"></i>
            <div class="icon-title">fa-sort-numeric-asc</div>
        </li>
        <li><i class="fa fa-sort-numeric-desc"></i>
            <div class="icon-title">fa-sort-numeric-desc</div>
        </li>
        <li><i class="fa fa-sort-up"></i>
            <div class="icon-title">fa-sort-up</div>
        </li>
        <li><i class="fa fa-space-shuttle"></i>
            <div class="icon-title">fa-space-shuttle</div>
        </li>
        <li><i class="fa fa-spinner"></i>
            <div class="icon-title">fa-spinner</div>
        </li>
        <li><i class="fa fa-spoon"></i>
            <div class="icon-title">fa-spoon</div>
        </li>
        <li><i class="fa fa-square"></i>
            <div class="icon-title">fa-square</div>
        </li>
        <li><i class="fa fa-square-o"></i>
            <div class="icon-title">fa-square-o</div>
        </li>
        <li><i class="fa fa-star"></i>
            <div class="icon-title">fa-star</div>
        </li>
        <li><i class="fa fa-star-half"></i>
            <div class="icon-title">fa-star-half</div>
        </li>
        <li><i class="fa fa-star-half-empty"></i>
            <div class="icon-title">fa-star-half-empty</div>
        </li>
        <li><i class="fa fa-star-half-full"></i>
            <div class="icon-title">fa-star-half-full</div>
        </li>
        <li><i class="fa fa-star-half-o"></i>
            <div class="icon-title">fa-star-half-o</div>
        </li>
        <li><i class="fa fa-star-o"></i>
            <div class="icon-title">fa-star-o</div>
        </li>
        <li><i class="fa fa-sticky-note"></i>
            <div class="icon-title">fa-sticky-note</div>
        </li>
        <li><i class="fa fa-sticky-note-o"></i>
            <div class="icon-title">fa-sticky-note-o</div>
        </li>
        <li><i class="fa fa-street-view"></i>
            <div class="icon-title">fa-street-view</div>
        </li>
        <li><i class="fa fa-suitcase"></i>
            <div class="icon-title">fa-suitcase</div>
        </li>
        <li><i class="fa fa-sun-o"></i>
            <div class="icon-title">fa-sun-o</div>
        </li>
        <li><i class="fa fa-support"></i>
            <div class="icon-title">fa-support</div>
        </li>
        <li><i class="fa fa-tablet"></i>
            <div class="icon-title">fa-tablet</div>
        </li>
        <li><i class="fa fa-tachometer"></i>
            <div class="icon-title">fa-tachometer</div>
        </li>
        <li><i class="fa fa-tag"></i>
            <div class="icon-title">fa-tag</div>
        </li>
        <li><i class="fa fa-tags"></i>
            <div class="icon-title">fa-tags</div>
        </li>
        <li><i class="fa fa-tasks"></i>
            <div class="icon-title">fa-tasks</div>
        </li>
        <li><i class="fa fa-taxi"></i>
            <div class="icon-title">fa-taxi</div>
        </li>
        <li><i class="fa fa-television"></i>
            <div class="icon-title">fa-television</div>
        </li>
        <li><i class="fa fa-terminal"></i>
            <div class="icon-title">fa-terminal</div>
        </li>
        <li><i class="fa fa-thermometer"></i>
            <div class="icon-title">fa-thermometer</div>
        </li>
        <li><i class="fa fa-thermometer-0"></i>
            <div class="icon-title">fa-thermometer-0</div>
        </li>
        <li><i class="fa fa-thermometer-1"></i>
            <div class="icon-title">fa-thermometer-1</div>
        </li>
        <li><i class="fa fa-thermometer-2"></i>
            <div class="icon-title">fa-thermometer-2</div>
        </li>
        <li><i class="fa fa-thermometer-3"></i>
            <div class="icon-title">fa-thermometer-3</div>
        </li>
        <li><i class="fa fa-thermometer-4"></i>
            <div class="icon-title">fa-thermometer-4</div>
        </li>
        <li><i class="fa fa-thermometer-empty"></i>
            <div class="icon-title">fa-thermometer-empty</div>
        </li>
        <li><i class="fa fa-thermometer-full"></i>
            <div class="icon-title">fa-thermometer-full</div>
        </li>
        <li><i class="fa fa-thermometer-half"></i>
            <div class="icon-title">fa-thermometer-half</div>
        </li>
        <li><i class="fa fa-thermometer-quarter"></i>
            <div class="icon-title">fa-thermometer-quarter</div>
        </li>
        <li><i class="fa fa-thermometer-three-quarters"></i>
            <div class="icon-title">fa-thermometer-three-quarters</div>
        </li>
        <li><i class="fa fa-thumb-tack"></i>
            <div class="icon-title">fa-thumb-tack</div>
        </li>
        <li><i class="fa fa-thumbs-down"></i>
            <div class="icon-title">fa-thumbs-down</div>
        </li>
        <li><i class="fa fa-thumbs-o-down"></i>
            <div class="icon-title">fa-thumbs-o-down</div>
        </li>
        <li><i class="fa fa-thumbs-o-up"></i>
            <div class="icon-title">fa-thumbs-o-up</div>
        </li>
        <li><i class="fa fa-thumbs-up"></i>
            <div class="icon-title">fa-thumbs-up</div>
        </li>
        <li><i class="fa fa-ticket"></i>
            <div class="icon-title">fa-ticket</div>
        </li>
        <li><i class="fa fa-times"></i>
            <div class="icon-title">fa-times</div>
        </li>
        <li><i class="fa fa-times-circle"></i>
            <div class="icon-title">fa-times-circle</div>
        </li>
        <li><i class="fa fa-times-circle-o"></i>
            <div class="icon-title">fa-times-circle-o</div>
        </li>
        <li><i class="fa fa-times-rectangle"></i>
            <div class="icon-title">fa-times-rectangle</div>
        </li>
        <li><i class="fa fa-times-rectangle-o"></i>
            <div class="icon-title">fa-times-rectangle-o</div>
        </li>
        <li><i class="fa fa-tint"></i>
            <div class="icon-title">fa-tint</div>
        </li>
        <li><i class="fa fa-toggle-down"></i>
            <div class="icon-title">fa-toggle-down</div>
        </li>
        <li><i class="fa fa-toggle-left"></i>
            <div class="icon-title">fa-toggle-left</div>
        </li>
        <li><i class="fa fa-toggle-off"></i>
            <div class="icon-title">fa-toggle-off</div>
        </li>
        <li><i class="fa fa-toggle-on"></i>
            <div class="icon-title">fa-toggle-on</div>
        </li>
        <li><i class="fa fa-toggle-right"></i>
            <div class="icon-title">fa-toggle-right</div>
        </li>
        <li><i class="fa fa-toggle-up"></i>
            <div class="icon-title">fa-toggle-up</div>
        </li>
        <li><i class="fa fa-trademark"></i>
            <div class="icon-title">fa-trademark</div>
        </li>
        <li><i class="fa fa-trash"></i>
            <div class="icon-title">fa-trash</div>
        </li>
        <li><i class="fa fa-trash-o"></i>
            <div class="icon-title">fa-trash-o</div>
        </li>
        <li><i class="fa fa-tree"></i>
            <div class="icon-title">fa-tree</div>
        </li>
        <li><i class="fa fa-trophy"></i>
            <div class="icon-title">fa-trophy</div>
        </li>
        <li><i class="fa fa-truck"></i>
            <div class="icon-title">fa-truck</div>
        </li>
        <li><i class="fa fa-tty"></i>
            <div class="icon-title">fa-tty</div>
        </li>
        <li><i class="fa fa-tv"></i>
            <div class="icon-title">fa-tv</div>
        </li>
        <li><i class="fa fa-umbrella"></i>
            <div class="icon-title">fa-umbrella</div>
        </li>
        <li><i class="fa fa-universal-access"></i>
            <div class="icon-title">fa-universal-access</div>
        </li>
        <li><i class="fa fa-university"></i>
            <div class="icon-title">fa-university</div>
        </li>
        <li><i class="fa fa-unlock"></i>
            <div class="icon-title">fa-unlock</div>
        </li>
        <li><i class="fa fa-unlock-alt"></i>
            <div class="icon-title">fa-unlock-alt</div>
        </li>
        <li><i class="fa fa-unsorted"></i>
            <div class="icon-title">fa-unsorted</div>
        </li>
        <li><i class="fa fa-upload"></i>
            <div class="icon-title">fa-upload</div>
        </li>
        <li><i class="fa fa-user"></i>
            <div class="icon-title">fa-user</div>
        </li>
        <li><i class="fa fa-user-circle"></i>
            <div class="icon-title">fa-user-circle</div>
        </li>
        <li><i class="fa fa-user-circle-o"></i>
            <div class="icon-title">fa-user-circle-o</div>
        </li>
        <li><i class="fa fa-user-o"></i>
            <div class="icon-title">fa-user-o</div>
        </li>
        <li><i class="fa fa-user-plus"></i>
            <div class="icon-title">fa-user-plus</div>
        </li>
        <li><i class="fa fa-user-secret"></i>
            <div class="icon-title">fa-user-secret</div>
        </li>
        <li><i class="fa fa-user-times"></i>
            <div class="icon-title">fa-user-times</div>
        </li>
        <li><i class="fa fa-users"></i>
            <div class="icon-title">fa-users</div>
        </li>
        <li><i class="fa fa-vcard"></i>
            <div class="icon-title">fa-vcard</div>
        </li>
        <li><i class="fa fa-vcard-o"></i>
            <div class="icon-title">fa-vcard-o</div>
        </li>
        <li><i class="fa fa-video-camera"></i>
            <div class="icon-title">fa-video-camera</div>
        </li>
        <li><i class="fa fa-volume-control-phone"></i>
            <div class="icon-title">fa-volume-control-phone</div>
        </li>
        <li><i class="fa fa-volume-down"></i>
            <div class="icon-title">fa-volume-down</div>
        </li>
        <li><i class="fa fa-volume-off"></i>
            <div class="icon-title">fa-volume-off</div>
        </li>
        <li><i class="fa fa-volume-up"></i>
            <div class="icon-title">fa-volume-up</div>
        </li>
        <li><i class="fa fa-warning"></i>
            <div class="icon-title">fa-warning</div>
        </li>
        <li><i class="fa fa-wheelchair"></i>
            <div class="icon-title">fa-wheelchair</div>
        </li>
        <li><i class="fa fa-wheelchair-alt"></i>
            <div class="icon-title">fa-wheelchair-alt</div>
        </li>
        <li><i class="fa fa-wifi"></i>
            <div class="icon-title">fa-wifi</div>
        </li>
        <li><i class="fa fa-window-close"></i>
            <div class="icon-title">fa-window-close</div>
        </li>
        <li><i class="fa fa-window-close-o"></i>
            <div class="icon-title">fa-window-close-o</div>
        </li>
        <li><i class="fa fa-window-maximize"></i>
            <div class="icon-title">fa-window-maximize</div>
        </li>
        <li><i class="fa fa-window-minimize"></i>
            <div class="icon-title">fa-window-minimize</div>
        </li>
        <li><i class="fa fa-window-restore"></i>
            <div class="icon-title">fa-window-restore</div>
        </li>
        <li><i class="fa fa-wrench"></i>
            <div class="icon-title">fa-wrench</div>
        </li>
        <li><i class="fa fa-american-sign-language-interpreting"></i>
            <div class="icon-title">fa-american-sign-language-interpreting</div>
        </li>
        <li><i class="fa fa-asl-interpreting"></i>
            <div class="icon-title">fa-asl-interpreting</div>
        </li>
        <li><i class="fa fa-assistive-listening-systems"></i>
            <div class="icon-title">fa-assistive-listening-systems</div>
        </li>
        <li><i class="fa fa-audio-description"></i>
            <div class="icon-title">fa-audio-description</div>
        </li>
        <li><i class="fa fa-blind"></i>
            <div class="icon-title">fa-blind</div>
        </li>
        <li><i class="fa fa-braille"></i>
            <div class="icon-title">fa-braille</div>
        </li>
        <li><i class="fa fa-cc"></i>
            <div class="icon-title">fa-cc</div>
        </li>
        <li><i class="fa fa-deaf"></i>
            <div class="icon-title">fa-deaf</div>
        </li>
        <li><i class="fa fa-deafness"></i>
            <div class="icon-title">fa-deafness</div>
        </li>
        <li><i class="fa fa-hard-of-hearing"></i>
            <div class="icon-title">fa-hard-of-hearing</div>
        </li>
        <li><i class="fa fa-low-vision"></i>
            <div class="icon-title">fa-low-vision</div>
        </li>
        <li><i class="fa fa-question-circle-o"></i>
            <div class="icon-title">fa-question-circle-o</div>
        </li>
        <li><i class="fa fa-sign-language"></i>
            <div class="icon-title">fa-sign-language</div>
        </li>
        <li><i class="fa fa-signing"></i>
            <div class="icon-title">fa-signing</div>
        </li>
        <li><i class="fa fa-tty"></i>
            <div class="icon-title">fa-tty</div>
        </li>
        <li><i class="fa fa-universal-access"></i>
            <div class="icon-title">fa-universal-access</div>
        </li>
        <li><i class="fa fa-volume-control-phone"></i>
            <div class="icon-title">fa-volume-control-phone</div>
        </li>
        <li><i class="fa fa-wheelchair"></i>
            <div class="icon-title">fa-wheelchair</div>
        </li>
        <li><i class="fa fa-wheelchair-alt"></i>
            <div class="icon-title">fa-wheelchair-alt</div>
        </li>
        <li><i class="fa fa-hand-grab-o"></i>
            <div class="icon-title">fa-hand-grab-o</div>
        </li>
        <li><i class="fa fa-hand-lizard-o"></i>
            <div class="icon-title">fa-hand-lizard-o</div>
        </li>
        <li><i class="fa fa-hand-o-down"></i>
            <div class="icon-title">fa-hand-o-down</div>
        </li>
        <li><i class="fa fa-hand-o-left"></i>
            <div class="icon-title">fa-hand-o-left</div>
        </li>
        <li><i class="fa fa-hand-o-right"></i>
            <div class="icon-title">fa-hand-o-right</div>
        </li>
        <li><i class="fa fa-hand-o-up"></i>
            <div class="icon-title">fa-hand-o-up</div>
        </li>
        <li><i class="fa fa-hand-paper-o"></i>
            <div class="icon-title">fa-hand-paper-o</div>
        </li>
        <li><i class="fa fa-hand-peace-o"></i>
            <div class="icon-title">fa-hand-peace-o</div>
        </li>
        <li><i class="fa fa-hand-pointer-o"></i>
            <div class="icon-title">fa-hand-pointer-o</div>
        </li>
        <li><i class="fa fa-hand-rock-o"></i>
            <div class="icon-title">fa-hand-rock-o</div>
        </li>
        <li><i class="fa fa-hand-scissors-o"></i>
            <div class="icon-title">fa-hand-scissors-o</div>
        </li>
        <li><i class="fa fa-hand-spock-o"></i>
            <div class="icon-title">fa-hand-spock-o</div>
        </li>
        <li><i class="fa fa-hand-stop-o"></i>
            <div class="icon-title">fa-hand-stop-o</div>
        </li>
        <li><i class="fa fa-thumbs-down"></i>
            <div class="icon-title">fa-thumbs-down</div>
        </li>
        <li><i class="fa fa-thumbs-o-down"></i>
            <div class="icon-title">fa-thumbs-o-down</div>
        </li>
        <li><i class="fa fa-thumbs-o-up"></i>
            <div class="icon-title">fa-thumbs-o-up</div>
        </li>
        <li><i class="fa fa-thumbs-up"></i>
            <div class="icon-title">fa-thumbs-up</div>
        </li>
        <li><i class="fa fa-ambulance"></i>
            <div class="icon-title">fa-ambulance</div>
        </li>
        <li><i class="fa fa-automobile"></i>
            <div class="icon-title">fa-automobile</div>
        </li>
        <li><i class="fa fa-bicycle"></i>
            <div class="icon-title">fa-bicycle</div>
        </li>
        <li><i class="fa fa-bus"></i>
            <div class="icon-title">fa-bus</div>
        </li>
        <li><i class="fa fa-cab"></i>
            <div class="icon-title">fa-cab</div>
        </li>
        <li><i class="fa fa-car"></i>
            <div class="icon-title">fa-car</div>
        </li>
        <li><i class="fa fa-fighter-jet"></i>
            <div class="icon-title">fa-fighter-jet</div>
        </li>
        <li><i class="fa fa-motorcycle"></i>
            <div class="icon-title">fa-motorcycle</div>
        </li>
        <li><i class="fa fa-plane"></i>
            <div class="icon-title">fa-plane</div>
        </li>
        <li><i class="fa fa-rocket"></i>
            <div class="icon-title">fa-rocket</div>
        </li>
        <li><i class="fa fa-ship"></i>
            <div class="icon-title">fa-ship</div>
        </li>
        <li><i class="fa fa-space-shuttle"></i>
            <div class="icon-title">fa-space-shuttle</div>
        </li>
        <li><i class="fa fa-subway"></i>
            <div class="icon-title">fa-subway</div>
        </li>
        <li><i class="fa fa-taxi"></i>
            <div class="icon-title">fa-taxi</div>
        </li>
        <li><i class="fa fa-train"></i>
            <div class="icon-title">fa-train</div>
        </li>
        <li><i class="fa fa-truck"></i>
            <div class="icon-title">fa-truck</div>
        </li>
        <li><i class="fa fa-wheelchair"></i>
            <div class="icon-title">fa-wheelchair</div>
        </li>
        <li><i class="fa fa-wheelchair-alt"></i>
            <div class="icon-title">fa-wheelchair-alt</div>
        </li>
        <li><i class="fa fa-genderless"></i>
            <div class="icon-title">fa-genderless</div>
        </li>
        <li><i class="fa fa-intersex"></i>
            <div class="icon-title">fa-intersex</div>
        </li>
        <li><i class="fa fa-mars"></i>
            <div class="icon-title">fa-mars</div>
        </li>
        <li><i class="fa fa-mars-double"></i>
            <div class="icon-title">fa-mars-double</div>
        </li>
        <li><i class="fa fa-mars-stroke"></i>
            <div class="icon-title">fa-mars-stroke</div>
        </li>
        <li><i class="fa fa-mars-stroke-h"></i>
            <div class="icon-title">fa-mars-stroke-h</div>
        </li>
        <li><i class="fa fa-mars-stroke-v"></i>
            <div class="icon-title">fa-mars-stroke-v</div>
        </li>
        <li><i class="fa fa-mercury"></i>
            <div class="icon-title">fa-mercury</div>
        </li>
        <li><i class="fa fa-neuter"></i>
            <div class="icon-title">fa-neuter</div>
        </li>
        <li><i class="fa fa-transgender"></i>
            <div class="icon-title">fa-transgender</div>
        </li>
        <li><i class="fa fa-transgender-alt"></i>
            <div class="icon-title">fa-transgender-alt</div>
        </li>
        <li><i class="fa fa-venus"></i>
            <div class="icon-title">fa-venus</div>
        </li>
        <li><i class="fa fa-venus-double"></i>
            <div class="icon-title">fa-venus-double</div>
        </li>
        <li><i class="fa fa-venus-mars"></i>
            <div class="icon-title">fa-venus-mars</div>
        </li>
        <li><i class="fa fa-file"></i>
            <div class="icon-title">fa-file</div>
        </li>
        <li><i class="fa fa-file-archive-o"></i>
            <div class="icon-title">fa-file-archive-o</div>
        </li>
        <li><i class="fa fa-file-audio-o"></i>
            <div class="icon-title">fa-file-audio-o</div>
        </li>
        <li><i class="fa fa-file-code-o"></i>
            <div class="icon-title">fa-file-code-o</div>
        </li>
        <li><i class="fa fa-file-excel-o"></i>
            <div class="icon-title">fa-file-excel-o</div>
        </li>
        <li><i class="fa fa-file-image-o"></i>
            <div class="icon-title">fa-file-image-o</div>
        </li>
        <li><i class="fa fa-file-movie-o"></i>
            <div class="icon-title">fa-file-movie-o</div>
        </li>
        <li><i class="fa fa-file-o"></i>
            <div class="icon-title">fa-file-o</div>
        </li>
        <li><i class="fa fa-file-pdf-o"></i>
            <div class="icon-title">fa-file-pdf-o</div>
        </li>
        <li><i class="fa fa-file-photo-o"></i>
            <div class="icon-title">fa-file-photo-o</div>
        </li>
        <li><i class="fa fa-file-picture-o"></i>
            <div class="icon-title">fa-file-picture-o</div>
        </li>
        <li><i class="fa fa-file-powerpoint-o"></i>
            <div class="icon-title">fa-file-powerpoint-o</div>
        </li>
        <li><i class="fa fa-file-sound-o"></i>
            <div class="icon-title">fa-file-sound-o</div>
        </li>
        <li><i class="fa fa-file-text"></i>
            <div class="icon-title">fa-file-text</div>
        </li>
        <li><i class="fa fa-file-text-o"></i>
            <div class="icon-title">fa-file-text-o</div>
        </li>
        <li><i class="fa fa-file-video-o"></i>
            <div class="icon-title">fa-file-video-o</div>
        </li>
        <li><i class="fa fa-file-word-o"></i>
            <div class="icon-title">fa-file-word-o</div>
        </li>
        <li><i class="fa fa-file-zip-o"></i>
            <div class="icon-title">fa-file-zip-o</div>
        </li>
        <li><i class="fa fa-circle-o-notch"></i>
            <div class="icon-title">fa-circle-o-notch</div>
        </li>
        <li><i class="fa fa-cog"></i>
            <div class="icon-title">fa-cog</div>
        </li>
        <li><i class="fa fa-gear"></i>
            <div class="icon-title">fa-gear</div>
        </li>
        <li><i class="fa fa-refresh"></i>
            <div class="icon-title">fa-refresh</div>
        </li>
        <li><i class="fa fa-spinner"></i>
            <div class="icon-title">fa-spinner</div>
        </li>
        <li><i class="fa fa-check-square"></i>
            <div class="icon-title">fa-check-square</div>
        </li>
        <li><i class="fa fa-check-square-o"></i>
            <div class="icon-title">fa-check-square-o</div>
        </li>
        <li><i class="fa fa-circle"></i>
            <div class="icon-title">fa-circle</div>
        </li>
        <li><i class="fa fa-circle-o"></i>
            <div class="icon-title">fa-circle-o</div>
        </li>
        <li><i class="fa fa-dot-circle-o"></i>
            <div class="icon-title">fa-dot-circle-o</div>
        </li>
        <li><i class="fa fa-minus-square"></i>
            <div class="icon-title">fa-minus-square</div>
        </li>
        <li><i class="fa fa-minus-square-o"></i>
            <div class="icon-title">fa-minus-square-o</div>
        </li>
        <li><i class="fa fa-plus-square"></i>
            <div class="icon-title">fa-plus-square</div>
        </li>
        <li><i class="fa fa-plus-square-o"></i>
            <div class="icon-title">fa-plus-square-o</div>
        </li>
        <li><i class="fa fa-square"></i>
            <div class="icon-title">fa-square</div>
        </li>
        <li><i class="fa fa-square-o"></i>
            <div class="icon-title">fa-square-o</div>
        </li>
        <li><i class="fa fa-cc-amex"></i>
            <div class="icon-title">fa-cc-amex</div>
        </li>
        <li><i class="fa fa-cc-diners-club"></i>
            <div class="icon-title">fa-cc-diners-club</div>
        </li>
        <li><i class="fa fa-cc-discover"></i>
            <div class="icon-title">fa-cc-discover</div>
        </li>
        <li><i class="fa fa-cc-jcb"></i>
            <div class="icon-title">fa-cc-jcb</div>
        </li>
        <li><i class="fa fa-cc-mastercard"></i>
            <div class="icon-title">fa-cc-mastercard</div>
        </li>
        <li><i class="fa fa-cc-paypal"></i>
            <div class="icon-title">fa-cc-paypal</div>
        </li>
        <li><i class="fa fa-cc-stripe"></i>
            <div class="icon-title">fa-cc-stripe</div>
        </li>
        <li><i class="fa fa-cc-visa"></i>
            <div class="icon-title">fa-cc-visa</div>
        </li>
        <li><i class="fa fa-credit-card"></i>
            <div class="icon-title">fa-credit-card</div>
        </li>
        <li><i class="fa fa-credit-card-alt"></i>
            <div class="icon-title">fa-credit-card-alt</div>
        </li>
        <li><i class="fa fa-google-wallet"></i>
            <div class="icon-title">fa-google-wallet</div>
        </li>
        <li><i class="fa fa-paypal"></i>
            <div class="icon-title">fa-paypal</div>
        </li>
        <li><i class="fa fa-area-chart"></i>
            <div class="icon-title">fa-area-chart</div>
        </li>
        <li><i class="fa fa-bar-chart"></i>
            <div class="icon-title">fa-bar-chart</div>
        </li>
        <li><i class="fa fa-bar-chart-o"></i>
            <div class="icon-title">fa-bar-chart-o</div>
        </li>
        <li><i class="fa fa-line-chart"></i>
            <div class="icon-title">fa-line-chart</div>
        </li>
        <li><i class="fa fa-pie-chart"></i>
            <div class="icon-title">fa-pie-chart</div>
        </li>
        <li><i class="fa fa-bitcoin"></i>
            <div class="icon-title">fa-bitcoin</div>
        </li>
        <li><i class="fa fa-btc"></i>
            <div class="icon-title">fa-btc</div>
        </li>
        <li><i class="fa fa-cny"></i>
            <div class="icon-title">fa-cny</div>
        </li>
        <li><i class="fa fa-dollar"></i>
            <div class="icon-title">fa-dollar</div>
        </li>
        <li><i class="fa fa-eur"></i>
            <div class="icon-title">fa-eur</div>
        </li>
        <li><i class="fa fa-euro"></i>
            <div class="icon-title">fa-euro</div>
        </li>
        <li><i class="fa fa-gbp"></i>
            <div class="icon-title">fa-gbp</div>
        </li>
        <li><i class="fa fa-gg"></i>
            <div class="icon-title">fa-gg</div>
        </li>
        <li><i class="fa fa-gg-circle"></i>
            <div class="icon-title">fa-gg-circle</div>
        </li>
        <li><i class="fa fa-ils"></i>
            <div class="icon-title">fa-ils</div>
        </li>
        <li><i class="fa fa-inr"></i>
            <div class="icon-title">fa-inr</div>
        </li>
        <li><i class="fa fa-jpy"></i>
            <div class="icon-title">fa-jpy</div>
        </li>
        <li><i class="fa fa-krw"></i>
            <div class="icon-title">fa-krw</div>
        </li>
        <li><i class="fa fa-money"></i>
            <div class="icon-title">fa-money</div>
        </li>
        <li><i class="fa fa-rmb"></i>
            <div class="icon-title">fa-rmb</div>
        </li>
        <li><i class="fa fa-rouble"></i>
            <div class="icon-title">fa-rouble</div>
        </li>
        <li><i class="fa fa-rub"></i>
            <div class="icon-title">fa-rub</div>
        </li>
        <li><i class="fa fa-ruble"></i>
            <div class="icon-title">fa-ruble</div>
        </li>
        <li><i class="fa fa-rupee"></i>
            <div class="icon-title">fa-rupee</div>
        </li>
        <li><i class="fa fa-shekel"></i>
            <div class="icon-title">fa-shekel</div>
        </li>
        <li><i class="fa fa-sheqel"></i>
            <div class="icon-title">fa-sheqel</div>
        </li>
        <li><i class="fa fa-try"></i>
            <div class="icon-title">fa-try</div>
        </li>
        <li><i class="fa fa-turkish-lira"></i>
            <div class="icon-title">fa-turkish-lira</div>
        </li>
        <li><i class="fa fa-usd"></i>
            <div class="icon-title">fa-usd</div>
        </li>
        <li><i class="fa fa-won"></i>
            <div class="icon-title">fa-won</div>
        </li>
        <li><i class="fa fa-yen"></i>
            <div class="icon-title">fa-yen</div>
        </li>
        <li><i class="fa fa-align-center"></i>
            <div class="icon-title">fa-align-center</div>
        </li>
        <li><i class="fa fa-align-justify"></i>
            <div class="icon-title">fa-align-justify</div>
        </li>
        <li><i class="fa fa-align-left"></i>
            <div class="icon-title">fa-align-left</div>
        </li>
        <li><i class="fa fa-align-right"></i>
            <div class="icon-title">fa-align-right</div>
        </li>
        <li><i class="fa fa-bold"></i>
            <div class="icon-title">fa-bold</div>
        </li>
        <li><i class="fa fa-chain"></i>
            <div class="icon-title">fa-chain</div>
        </li>
        <li><i class="fa fa-chain-broken"></i>
            <div class="icon-title">fa-chain-broken</div>
        </li>
        <li><i class="fa fa-clipboard"></i>
            <div class="icon-title">fa-clipboard</div>
        </li>
        <li><i class="fa fa-columns"></i>
            <div class="icon-title">fa-columns</div>
        </li>
        <li><i class="fa fa-copy"></i>
            <div class="icon-title">fa-copy</div>
        </li>
        <li><i class="fa fa-cut"></i>
            <div class="icon-title">fa-cut</div>
        </li>
        <li><i class="fa fa-dedent"></i>
            <div class="icon-title">fa-dedent</div>
        </li>
        <li><i class="fa fa-eraser"></i>
            <div class="icon-title">fa-eraser</div>
        </li>
        <li><i class="fa fa-file"></i>
            <div class="icon-title">fa-file</div>
        </li>
        <li><i class="fa fa-file-o"></i>
            <div class="icon-title">fa-file-o</div>
        </li>
        <li><i class="fa fa-file-text"></i>
            <div class="icon-title">fa-file-text</div>
        </li>
        <li><i class="fa fa-file-text-o"></i>
            <div class="icon-title">fa-file-text-o</div>
        </li>
        <li><i class="fa fa-files-o"></i>
            <div class="icon-title">fa-files-o</div>
        </li>
        <li><i class="fa fa-floppy-o"></i>
            <div class="icon-title">fa-floppy-o</div>
        </li>
        <li><i class="fa fa-font"></i>
            <div class="icon-title">fa-font</div>
        </li>
        <li><i class="fa fa-header"></i>
            <div class="icon-title">fa-header</div>
        </li>
        <li><i class="fa fa-indent"></i>
            <div class="icon-title">fa-indent</div>
        </li>
        <li><i class="fa fa-italic"></i>
            <div class="icon-title">fa-italic</div>
        </li>
        <li><i class="fa fa-link"></i>
            <div class="icon-title">fa-link</div>
        </li>
        <li><i class="fa fa-list"></i>
            <div class="icon-title">fa-list</div>
        </li>
        <li><i class="fa fa-list-alt"></i>
            <div class="icon-title">fa-list-alt</div>
        </li>
        <li><i class="fa fa-list-ol"></i>
            <div class="icon-title">fa-list-ol</div>
        </li>
        <li><i class="fa fa-list-ul"></i>
            <div class="icon-title">fa-list-ul</div>
        </li>
        <li><i class="fa fa-outdent"></i>
            <div class="icon-title">fa-outdent</div>
        </li>
        <li><i class="fa fa-paperclip"></i>
            <div class="icon-title">fa-paperclip</div>
        </li>
        <li><i class="fa fa-paragraph"></i>
            <div class="icon-title">fa-paragraph</div>
        </li>
        <li><i class="fa fa-paste"></i>
            <div class="icon-title">fa-paste</div>
        </li>
        <li><i class="fa fa-repeat"></i>
            <div class="icon-title">fa-repeat</div>
        </li>
        <li><i class="fa fa-rotate-left"></i>
            <div class="icon-title">fa-rotate-left</div>
        </li>
        <li><i class="fa fa-rotate-right"></i>
            <div class="icon-title">fa-rotate-right</div>
        </li>
        <li><i class="fa fa-save"></i>
            <div class="icon-title">fa-save</div>
        </li>
        <li><i class="fa fa-scissors"></i>
            <div class="icon-title">fa-scissors</div>
        </li>
        <li><i class="fa fa-strikethrough"></i>
            <div class="icon-title">fa-strikethrough</div>
        </li>
        <li><i class="fa fa-subscript"></i>
            <div class="icon-title">fa-subscript</div>
        </li>
        <li><i class="fa fa-superscript"></i>
            <div class="icon-title">fa-superscript</div>
        </li>
        <li><i class="fa fa-table"></i>
            <div class="icon-title">fa-table</div>
        </li>
        <li><i class="fa fa-text-height"></i>
            <div class="icon-title">fa-text-height</div>
        </li>
        <li><i class="fa fa-text-width"></i>
            <div class="icon-title">fa-text-width</div>
        </li>
        <li><i class="fa fa-th"></i>
            <div class="icon-title">fa-th</div>
        </li>
        <li><i class="fa fa-th-large"></i>
            <div class="icon-title">fa-th-large</div>
        </li>
        <li><i class="fa fa-th-list"></i>
            <div class="icon-title">fa-th-list</div>
        </li>
        <li><i class="fa fa-underline"></i>
            <div class="icon-title">fa-underline</div>
        </li>
        <li><i class="fa fa-undo"></i>
            <div class="icon-title">fa-undo</div>
        </li>
        <li><i class="fa fa-unlink"></i>
            <div class="icon-title">fa-unlink</div>
        </li>
        <li><i class="fa fa-angle-double-down"></i>
            <div class="icon-title">fa-angle-double-down</div>
        </li>
        <li><i class="fa fa-angle-double-left"></i>
            <div class="icon-title">fa-angle-double-left</div>
        </li>
        <li><i class="fa fa-angle-double-right"></i>
            <div class="icon-title">fa-angle-double-right</div>
        </li>
        <li><i class="fa fa-angle-double-up"></i>
            <div class="icon-title">fa-angle-double-up</div>
        </li>
        <li><i class="fa fa-angle-down"></i>
            <div class="icon-title">fa-angle-down</div>
        </li>
        <li><i class="fa fa-angle-left"></i>
            <div class="icon-title">fa-angle-left</div>
        </li>
        <li><i class="fa fa-angle-right"></i>
            <div class="icon-title">fa-angle-right</div>
        </li>
        <li><i class="fa fa-angle-up"></i>
            <div class="icon-title">fa-angle-up</div>
        </li>
        <li><i class="fa fa-arrow-circle-down"></i>
            <div class="icon-title">fa-arrow-circle-down</div>
        </li>
        <li><i class="fa fa-arrow-circle-left"></i>
            <div class="icon-title">fa-arrow-circle-left</div>
        </li>
        <li><i class="fa fa-arrow-circle-o-down"></i>
            <div class="icon-title">fa-arrow-circle-o-down</div>
        </li>
        <li><i class="fa fa-arrow-circle-o-left"></i>
            <div class="icon-title">fa-arrow-circle-o-left</div>
        </li>
        <li><i class="fa fa-arrow-circle-o-right"></i>
            <div class="icon-title">fa-arrow-circle-o-right</div>
        </li>
        <li><i class="fa fa-arrow-circle-o-up"></i>
            <div class="icon-title">fa-arrow-circle-o-up</div>
        </li>
        <li><i class="fa fa-arrow-circle-right"></i>
            <div class="icon-title">fa-arrow-circle-right</div>
        </li>
        <li><i class="fa fa-arrow-circle-up"></i>
            <div class="icon-title">fa-arrow-circle-up</div>
        </li>
        <li><i class="fa fa-arrow-down"></i>
            <div class="icon-title">fa-arrow-down</div>
        </li>
        <li><i class="fa fa-arrow-left"></i>
            <div class="icon-title">fa-arrow-left</div>
        </li>
        <li><i class="fa fa-arrow-right"></i>
            <div class="icon-title">fa-arrow-right</div>
        </li>
        <li><i class="fa fa-arrow-up"></i>
            <div class="icon-title">fa-arrow-up</div>
        </li>
        <li><i class="fa fa-arrows"></i>
            <div class="icon-title">fa-arrows</div>
        </li>
        <li><i class="fa fa-arrows-alt"></i>
            <div class="icon-title">fa-arrows-alt</div>
        </li>
        <li><i class="fa fa-arrows-h"></i>
            <div class="icon-title">fa-arrows-h</div>
        </li>
        <li><i class="fa fa-arrows-v"></i>
            <div class="icon-title">fa-arrows-v</div>
        </li>
        <li><i class="fa fa-caret-down"></i>
            <div class="icon-title">fa-caret-down</div>
        </li>
        <li><i class="fa fa-caret-left"></i>
            <div class="icon-title">fa-caret-left</div>
        </li>
        <li><i class="fa fa-caret-right"></i>
            <div class="icon-title">fa-caret-right</div>
        </li>
        <li><i class="fa fa-caret-square-o-down"></i>
            <div class="icon-title">fa-caret-square-o-down</div>
        </li>
        <li><i class="fa fa-caret-square-o-left"></i>
            <div class="icon-title">fa-caret-square-o-left</div>
        </li>
        <li><i class="fa fa-caret-square-o-right"></i>
            <div class="icon-title">fa-caret-square-o-right</div>
        </li>
        <li><i class="fa fa-caret-square-o-up"></i>
            <div class="icon-title">fa-caret-square-o-up</div>
        </li>
        <li><i class="fa fa-caret-up"></i>
            <div class="icon-title">fa-caret-up</div>
        </li>
        <li><i class="fa fa-chevron-circle-down"></i>
            <div class="icon-title">fa-chevron-circle-down</div>
        </li>
        <li><i class="fa fa-chevron-circle-left"></i>
            <div class="icon-title">fa-chevron-circle-left</div>
        </li>
        <li><i class="fa fa-chevron-circle-right"></i>
            <div class="icon-title">fa-chevron-circle-right</div>
        </li>
        <li><i class="fa fa-chevron-circle-up"></i>
            <div class="icon-title">fa-chevron-circle-up</div>
        </li>
        <li><i class="fa fa-chevron-down"></i>
            <div class="icon-title">fa-chevron-down</div>
        </li>
        <li><i class="fa fa-chevron-left"></i>
            <div class="icon-title">fa-chevron-left</div>
        </li>
        <li><i class="fa fa-chevron-right"></i>
            <div class="icon-title">fa-chevron-right</div>
        </li>
        <li><i class="fa fa-chevron-up"></i>
            <div class="icon-title">fa-chevron-up</div>
        </li>
        <li><i class="fa fa-exchange"></i>
            <div class="icon-title">fa-exchange</div>
        </li>
        <li><i class="fa fa-hand-o-down"></i>
            <div class="icon-title">fa-hand-o-down</div>
        </li>
        <li><i class="fa fa-hand-o-left"></i>
            <div class="icon-title">fa-hand-o-left</div>
        </li>
        <li><i class="fa fa-hand-o-right"></i>
            <div class="icon-title">fa-hand-o-right</div>
        </li>
        <li><i class="fa fa-hand-o-up"></i>
            <div class="icon-title">fa-hand-o-up</div>
        </li>
        <li><i class="fa fa-long-arrow-down"></i>
            <div class="icon-title">fa-long-arrow-down</div>
        </li>
        <li><i class="fa fa-long-arrow-left"></i>
            <div class="icon-title">fa-long-arrow-left</div>
        </li>
        <li><i class="fa fa-long-arrow-right"></i>
            <div class="icon-title">fa-long-arrow-right</div>
        </li>
        <li><i class="fa fa-long-arrow-up"></i>
            <div class="icon-title">fa-long-arrow-up</div>
        </li>
        <li><i class="fa fa-toggle-down"></i>
            <div class="icon-title">fa-toggle-down</div>
        </li>
        <li><i class="fa fa-toggle-left"></i>
            <div class="icon-title">fa-toggle-left</div>
        </li>
        <li><i class="fa fa-toggle-right"></i>
            <div class="icon-title">fa-toggle-right</div>
        </li>
        <li><i class="fa fa-toggle-up"></i>
            <div class="icon-title">fa-toggle-up</div>
        </li>
        <li><i class="fa fa-arrows-alt"></i>
            <div class="icon-title">fa-arrows-alt</div>
        </li>
        <li><i class="fa fa-backward"></i>
            <div class="icon-title">fa-backward</div>
        </li>
        <li><i class="fa fa-compress"></i>
            <div class="icon-title">fa-compress</div>
        </li>
        <li><i class="fa fa-eject"></i>
            <div class="icon-title">fa-eject</div>
        </li>
        <li><i class="fa fa-expand"></i>
            <div class="icon-title">fa-expand</div>
        </li>
        <li><i class="fa fa-fast-backward"></i>
            <div class="icon-title">fa-fast-backward</div>
        </li>
        <li><i class="fa fa-fast-forward"></i>
            <div class="icon-title">fa-fast-forward</div>
        </li>
        <li><i class="fa fa-forward"></i>
            <div class="icon-title">fa-forward</div>
        </li>
        <li><i class="fa fa-pause"></i>
            <div class="icon-title">fa-pause</div>
        </li>
        <li><i class="fa fa-pause-circle"></i>
            <div class="icon-title">fa-pause-circle</div>
        </li>
        <li><i class="fa fa-pause-circle-o"></i>
            <div class="icon-title">fa-pause-circle-o</div>
        </li>
        <li><i class="fa fa-play"></i>
            <div class="icon-title">fa-play</div>
        </li>
        <li><i class="fa fa-play-circle"></i>
            <div class="icon-title">fa-play-circle</div>
        </li>
        <li><i class="fa fa-play-circle-o"></i>
            <div class="icon-title">fa-play-circle-o</div>
        </li>
        <li><i class="fa fa-random"></i>
            <div class="icon-title">fa-random</div>
        </li>
        <li><i class="fa fa-step-backward"></i>
            <div class="icon-title">fa-step-backward</div>
        </li>
        <li><i class="fa fa-step-forward"></i>
            <div class="icon-title">fa-step-forward</div>
        </li>
        <li><i class="fa fa-stop"></i>
            <div class="icon-title">fa-stop</div>
        </li>
        <li><i class="fa fa-stop-circle"></i>
            <div class="icon-title">fa-stop-circle</div>
        </li>
        <li><i class="fa fa-stop-circle-o"></i>
            <div class="icon-title">fa-stop-circle-o</div>
        </li>
        <li><i class="fa fa-youtube-play"></i>
            <div class="icon-title">fa-youtube-play</div>
        </li>
        <li><i class="fa fa-500px"></i>
            <div class="icon-title">fa-500px</div>
        </li>
        <li><i class="fa fa-adn"></i>
            <div class="icon-title">fa-adn</div>
        </li>
        <li><i class="fa fa-amazon"></i>
            <div class="icon-title">fa-amazon</div>
        </li>
        <li><i class="fa fa-android"></i>
            <div class="icon-title">fa-android</div>
        </li>
        <li><i class="fa fa-angellist"></i>
            <div class="icon-title">fa-angellist</div>
        </li>
        <li><i class="fa fa-apple"></i>
            <div class="icon-title">fa-apple</div>
        </li>
        <li><i class="fa fa-bandcamp"></i>
            <div class="icon-title">fa-bandcamp</div>
        </li>
        <li><i class="fa fa-behance"></i>
            <div class="icon-title">fa-behance</div>
        </li>
        <li><i class="fa fa-behance-square"></i>
            <div class="icon-title">fa-behance-square</div>
        </li>
        <li><i class="fa fa-bitbucket"></i>
            <div class="icon-title">fa-bitbucket</div>
        </li>
        <li><i class="fa fa-bitbucket-square"></i>
            <div class="icon-title">fa-bitbucket-square</div>
        </li>
        <li><i class="fa fa-bitcoin"></i>
            <div class="icon-title">fa-bitcoin</div>
        </li>
        <li><i class="fa fa-black-tie"></i>
            <div class="icon-title">fa-black-tie</div>
        </li>
        <li><i class="fa fa-bluetooth"></i>
            <div class="icon-title">fa-bluetooth</div>
        </li>
        <li><i class="fa fa-bluetooth-b"></i>
            <div class="icon-title">fa-bluetooth-b</div>
        </li>
        <li><i class="fa fa-btc"></i>
            <div class="icon-title">fa-btc</div>
        </li>
        <li><i class="fa fa-buysellads"></i>
            <div class="icon-title">fa-buysellads</div>
        </li>
        <li><i class="fa fa-cc-amex"></i>
            <div class="icon-title">fa-cc-amex</div>
        </li>
        <li><i class="fa fa-cc-diners-club"></i>
            <div class="icon-title">fa-cc-diners-club</div>
        </li>
        <li><i class="fa fa-cc-discover"></i>
            <div class="icon-title">fa-cc-discover</div>
        </li>
        <li><i class="fa fa-cc-jcb"></i>
            <div class="icon-title">fa-cc-jcb</div>
        </li>
        <li><i class="fa fa-cc-mastercard"></i>
            <div class="icon-title">fa-cc-mastercard</div>
        </li>
        <li><i class="fa fa-cc-paypal"></i>
            <div class="icon-title">fa-cc-paypal</div>
        </li>
        <li><i class="fa fa-cc-stripe"></i>
            <div class="icon-title">fa-cc-stripe</div>
        </li>
        <li><i class="fa fa-cc-visa"></i>
            <div class="icon-title">fa-cc-visa</div>
        </li>
        <li><i class="fa fa-chrome"></i>
            <div class="icon-title">fa-chrome</div>
        </li>
        <li><i class="fa fa-codepen"></i>
            <div class="icon-title">fa-codepen</div>
        </li>
        <li><i class="fa fa-codiepie"></i>
            <div class="icon-title">fa-codiepie</div>
        </li>
        <li><i class="fa fa-connectdevelop"></i>
            <div class="icon-title">fa-connectdevelop</div>
        </li>
        <li><i class="fa fa-contao"></i>
            <div class="icon-title">fa-contao</div>
        </li>
        <li><i class="fa fa-css3"></i>
            <div class="icon-title">fa-css3</div>
        </li>
        <li><i class="fa fa-dashcube"></i>
            <div class="icon-title">fa-dashcube</div>
        </li>
        <li><i class="fa fa-delicious"></i>
            <div class="icon-title">fa-delicious</div>
        </li>
        <li><i class="fa fa-deviantart"></i>
            <div class="icon-title">fa-deviantart</div>
        </li>
        <li><i class="fa fa-digg"></i>
            <div class="icon-title">fa-digg</div>
        </li>
        <li><i class="fa fa-dribbble"></i>
            <div class="icon-title">fa-dribbble</div>
        </li>
        <li><i class="fa fa-dropbox"></i>
            <div class="icon-title">fa-dropbox</div>
        </li>
        <li><i class="fa fa-drupal"></i>
            <div class="icon-title">fa-drupal</div>
        </li>
        <li><i class="fa fa-edge"></i>
            <div class="icon-title">fa-edge</div>
        </li>
        <li><i class="fa fa-eercast"></i>
            <div class="icon-title">fa-eercast</div>
        </li>
        <li><i class="fa fa-empire"></i>
            <div class="icon-title">fa-empire</div>
        </li>
        <li><i class="fa fa-envira"></i>
            <div class="icon-title">fa-envira</div>
        </li>
        <li><i class="fa fa-etsy"></i>
            <div class="icon-title">fa-etsy</div>
        </li>
        <li><i class="fa fa-expeditedssl"></i>
            <div class="icon-title">fa-expeditedssl</div>
        </li>
        <li><i class="fa fa-fa"></i>
            <div class="icon-title">fa-fa</div>
        </li>
        <li><i class="fa fa-facebook"></i>
            <div class="icon-title">fa-facebook</div>
        </li>
        <li><i class="fa fa-facebook-f"></i>
            <div class="icon-title">fa-facebook-f</div>
        </li>
        <li><i class="fa fa-facebook-official"></i>
            <div class="icon-title">fa-facebook-official</div>
        </li>
        <li><i class="fa fa-facebook-square"></i>
            <div class="icon-title">fa-facebook-square</div>
        </li>
        <li><i class="fa fa-firefox"></i>
            <div class="icon-title">fa-firefox</div>
        </li>
        <li><i class="fa fa-first-order"></i>
            <div class="icon-title">fa-first-order</div>
        </li>
        <li><i class="fa fa-flickr"></i>
            <div class="icon-title">fa-flickr</div>
        </li>
        <li><i class="fa fa-font-awesome"></i>
            <div class="icon-title">fa-font-awesome</div>
        </li>
        <li><i class="fa fa-fonticons"></i>
            <div class="icon-title">fa-fonticons</div>
        </li>
        <li><i class="fa fa-fort-awesome"></i>
            <div class="icon-title">fa-fort-awesome</div>
        </li>
        <li><i class="fa fa-forumbee"></i>
            <div class="icon-title">fa-forumbee</div>
        </li>
        <li><i class="fa fa-foursquare"></i>
            <div class="icon-title">fa-foursquare</div>
        </li>
        <li><i class="fa fa-free-code-camp"></i>
            <div class="icon-title">fa-free-code-camp</div>
        </li>
        <li><i class="fa fa-ge"></i>
            <div class="icon-title">fa-ge</div>
        </li>
        <li><i class="fa fa-get-pocket"></i>
            <div class="icon-title">fa-get-pocket</div>
        </li>
        <li><i class="fa fa-gg"></i>
            <div class="icon-title">fa-gg</div>
        </li>
        <li><i class="fa fa-gg-circle"></i>
            <div class="icon-title">fa-gg-circle</div>
        </li>
        <li><i class="fa fa-git"></i>
            <div class="icon-title">fa-git</div>
        </li>
        <li><i class="fa fa-git-square"></i>
            <div class="icon-title">fa-git-square</div>
        </li>
        <li><i class="fa fa-github"></i>
            <div class="icon-title">fa-github</div>
        </li>
        <li><i class="fa fa-github-alt"></i>
            <div class="icon-title">fa-github-alt</div>
        </li>
        <li><i class="fa fa-github-square"></i>
            <div class="icon-title">fa-github-square</div>
        </li>
        <li><i class="fa fa-gitlab"></i>
            <div class="icon-title">fa-gitlab</div>
        </li>
        <li><i class="fa fa-gittip"></i>
            <div class="icon-title">fa-gittip</div>
        </li>
        <li><i class="fa fa-glide"></i>
            <div class="icon-title">fa-glide</div>
        </li>
        <li><i class="fa fa-glide-g"></i>
            <div class="icon-title">fa-glide-g</div>
        </li>
        <li><i class="fa fa-google"></i>
            <div class="icon-title">fa-google</div>
        </li>
        <li><i class="fa fa-google-plus"></i>
            <div class="icon-title">fa-google-plus</div>
        </li>
        <li><i class="fa fa-google-plus-circle"></i>
            <div class="icon-title">fa-google-plus-circle</div>
        </li>
        <li><i class="fa fa-google-plus-official"></i>
            <div class="icon-title">fa-google-plus-official</div>
        </li>
        <li><i class="fa fa-google-plus-square"></i>
            <div class="icon-title">fa-google-plus-square</div>
        </li>
        <li><i class="fa fa-google-wallet"></i>
            <div class="icon-title">fa-google-wallet</div>
        </li>
        <li><i class="fa fa-gratipay"></i>
            <div class="icon-title">fa-gratipay</div>
        </li>
        <li><i class="fa fa-grav"></i>
            <div class="icon-title">fa-grav</div>
        </li>
        <li><i class="fa fa-hacker-news"></i>
            <div class="icon-title">fa-hacker-news</div>
        </li>
        <li><i class="fa fa-houzz"></i>
            <div class="icon-title">fa-houzz</div>
        </li>
        <li><i class="fa fa-html5"></i>
            <div class="icon-title">fa-html5</div>
        </li>
        <li><i class="fa fa-imdb"></i>
            <div class="icon-title">fa-imdb</div>
        </li>
        <li><i class="fa fa-instagram"></i>
            <div class="icon-title">fa-instagram</div>
        </li>
        <li><i class="fa fa-internet-explorer"></i>
            <div class="icon-title">fa-internet-explorer</div>
        </li>
        <li><i class="fa fa-ioxhost"></i>
            <div class="icon-title">fa-ioxhost</div>
        </li>
        <li><i class="fa fa-joomla"></i>
            <div class="icon-title">fa-joomla</div>
        </li>
        <li><i class="fa fa-jsfiddle"></i>
            <div class="icon-title">fa-jsfiddle</div>
        </li>
        <li><i class="fa fa-lastfm"></i>
            <div class="icon-title">fa-lastfm</div>
        </li>
        <li><i class="fa fa-lastfm-square"></i>
            <div class="icon-title">fa-lastfm-square</div>
        </li>
        <li><i class="fa fa-leanpub"></i>
            <div class="icon-title">fa-leanpub</div>
        </li>
        <li><i class="fa fa-linkedin"></i>
            <div class="icon-title">fa-linkedin</div>
        </li>
        <li>
            <i class="fa fa-linkedin-square"></i>
            <div class="icon-title">fa-linkedin-square</div>
        </li>
        <li>
            <i class="fa fa-linode"></i>
            <div class="icon-title">fa-linode</div>
        </li>
        <li>
            <i class="fa fa-linux"></i>
            <div class="icon-title">fa-linux</div>
        </li>
        <li>
            <i class="fa fa-maxcdn"></i>
            <div class="icon-title">fa-maxcdn</div>
        </li>
        <li>
            <i class="fa fa-meanpath"></i>
            <div class="icon-title">fa-meanpath</div>
        </li>
        <li>
            <i class="fa fa-medium"></i>
            <div class="icon-title">fa-medium</div>
        </li>
        <li>
            <i class="fa fa-meetup"></i>
            <div class="icon-title">fa-meetup</div>
        </li>
        <li>
            <i class="fa fa-mixcloud"></i>
            <div class="icon-title">fa-mixcloud</div>
        </li>
        <li>
            <i class="fa fa-modx"></i>
            <div class="icon-title">fa-modx</div>
        </li>
        <li>
            <i class="fa fa-odnoklassniki"></i>
            <div class="icon-title">fa-odnoklassniki</div>
        </li>
        <li>
            <i class="fa fa-odnoklassniki-square"></i>
            <div class="icon-title">fa-odnoklassniki-square</div>
        </li>
        <li>
            <i class="fa fa-opencart"></i>
            <div class="icon-title">fa-opencart</div>
        </li>
        <li>
            <i class="fa fa-openid"></i>
            <div class="icon-title">fa-openid</div>
        </li>
        <li>
            <i class="fa fa-opera"></i>
            <div class="icon-title">fa-opera</div>
        </li>
        <li>
            <i class="fa fa-optin-monster"></i>
            <div class="icon-title">fa-optin-monster</div>
        </li>
        <li>
            <i class="fa fa-pagelines"></i>
            <div class="icon-title">fa-pagelines</div>
        </li>
        <li>
            <i class="fa fa-paypal"></i>
            <div class="icon-title">fa-paypal</div>
        </li>
        <li>
            <i class="fa fa-pied-piper"></i>
            <div class="icon-title">fa-pied-piper</div>
        </li>
        <li>
            <i class="fa fa-pied-piper-alt"></i>
            <div class="icon-title">fa-pied-piper-alt</div>
        </li>
        <li>
            <i class="fa fa-pied-piper-pp"></i>
            <div class="icon-title">fa-pied-piper-pp</div>
        </li>
        <li>
            <i class="fa fa-pinterest"></i>
            <div class="icon-title">fa-pinterest</div>
        </li>
        <li>
            <i class="fa fa-pinterest-p"></i>
            <div class="icon-title">fa-pinterest-p</div>
        </li>
        <li>
            <i class="fa fa-pinterest-square"></i>
            <div class="icon-title">fa-pinterest-square</div>
        </li>
        <li>
            <i class="fa fa-product-hunt"></i>
            <div class="icon-title">fa-product-hunt</div>
        </li>
        <li>
            <i class="fa fa-qq"></i>
            <div class="icon-title">fa-qq</div>
        </li>
        <li>
            <i class="fa fa-quora"></i>
            <div class="icon-title">fa-quora</div>
        </li>
        <li>
            <i class="fa fa-ra"></i>
            <div class="icon-title">fa-ra</div>
        </li>
        <li>
            <i class="fa fa-ravelry"></i>
            <div class="icon-title">fa-ravelry</div>
        </li>
        <li>
            <i class="fa fa-rebel"></i>
            <div class="icon-title">fa-rebel</div>
        </li>
        <li>
            <i class="fa fa-reddit"></i>
            <div class="icon-title">fa-reddit</div>
        </li>
        <li>
            <i class="fa fa-reddit-alien"></i>
            <div class="icon-title">fa-reddit-alien</div>
        </li>
        <li>
            <i class="fa fa-reddit-square"></i>
            <div class="icon-title">fa-reddit-square</div>
        </li>
        <li>
            <i class="fa fa-renren"></i>
            <div class="icon-title">fa-renren</div>
        </li>
        <li>
            <i class="fa fa-resistance"></i>
            <div class="icon-title">fa-resistance</div>
        </li>
        <li>
            <i class="fa fa-safari"></i>
            <div class="icon-title">fa-safari</div>
        </li>
        <li>
            <i class="fa fa-scribd"></i>
            <div class="icon-title">fa-scribd</div>
        </li>
        <li>
            <i class="fa fa-sellsy"></i>
            <div class="icon-title">fa-sellsy</div>
        </li>
        <li>
            <i class="fa fa-share-alt"></i>
            <div class="icon-title">fa-share-alt</div>
        </li>
        <li>
            <i class="fa fa-share-alt-square"></i>
            <div class="icon-title">fa-share-alt-square</div>
        </li>
        <li>
            <i class="fa fa-shirtsinbulk"></i>
            <div class="icon-title">fa-shirtsinbulk</div>
        </li>
        <li>
            <i class="fa fa-simplybuilt"></i>
            <div class="icon-title">fa-simplybuilt</div>
        </li>
        <li>
            <i class="fa fa-skyatlas"></i>
            <div class="icon-title">fa-skyatlas</div>
        </li>
        <li>
            <i class="fa fa-skype"></i>
            <div class="icon-title">fa-skype</div>
        </li>
        <li>
            <i class="fa fa-slack"></i>
            <div class="icon-title">fa-slack</div>
        </li>
        <li>
            <i class="fa fa-slideshare"></i>
            <div class="icon-title">fa-slideshare</div>
        </li>
        <li>
            <i class="fa fa-snapchat"></i>
            <div class="icon-title">fa-snapchat</div>
        </li>
        <li>
            <i class="fa fa-snapchat-ghost"></i>
            <div class="icon-title">fa-snapchat-ghost</div>
        </li>
        <li>
            <i class="fa fa-snapchat-square"></i>
            <div class="icon-title">fa-snapchat-square</div>
        </li>
        <li>
            <i class="fa fa-soundcloud"></i>
            <div class="icon-title">fa-soundcloud</div>
        </li>
        <li>
            <i class="fa fa-spotify"></i>
            <div class="icon-title">fa-spotify</div>
        </li>
        <li>
            <i class="fa fa-stack-exchange"></i>
            <div class="icon-title">fa-stack-exchange</div>
        </li>
        <li>
            <i class="fa fa-stack-overflow"></i>
            <div class="icon-title">fa-stack-overflow</div>
        </li>
        <li>
            <i class="fa fa-steam"></i>
            <div class="icon-title">fa-steam</div>
        </li>
        <li>
            <i class="fa fa-steam-square"></i>
            <div class="icon-title">fa-steam-square</div>
        </li>
        <li>
            <i class="fa fa-stumbleupon"></i>
            <div class="icon-title">fa-stumbleupon</div>
        </li>
        <li>
            <i class="fa fa-stumbleupon-circle"></i>
            <div class="icon-title">fa-stumbleupon-circle</div>
        </li>
        <li>
            <i class="fa fa-superpowers"></i>
            <div class="icon-title">fa-superpowers</div>
        </li>
        <li>
            <i class="fa fa-telegram"></i>
            <div class="icon-title">fa-telegram</div>
        </li>
        <li>
            <i class="fa fa-tencent-weibo"></i>
            <div class="icon-title">fa-tencent-weibo</div>
        </li>
        <li>
            <i class="fa fa-themeisle"></i>
            <div class="icon-title">fa-themeisle</div>
        </li>
        <li>
            <i class="fa fa-trello"></i>
            <div class="icon-title">fa-trello</div>
        </li>
        <li>
            <i class="fa fa-tripadvisor"></i>
            <div class="icon-title">fa-tripadvisor</div>
        </li>
        <li>
            <i class="fa fa-tumblr"></i>
            <div class="icon-title">fa-tumblr</div>
        </li>
        <li>
            <i class="fa fa-tumblr-square"></i>
            <div class="icon-title">fa-tumblr-square</div>
        </li>
        <li>
            <i class="fa fa-twitch"></i>
            <div class="icon-title">fa-twitch</div>
        </li>
        <li>
            <i class="fa fa-twitter"></i>
            <div class="icon-title">fa-twitter</div>
        </li>
        <li>
            <i class="fa fa-twitter-square"></i>
            <div class="icon-title">fa-twitter-square</div>
        </li>
        <li>
            <i class="fa fa-usb"></i>
            <div class="icon-title">fa-usb</div>
        </li>
        <li>
            <i class="fa fa-viacoin"></i>
            <div class="icon-title">fa-viacoin</div>
        </li>
        <li>
            <i class="fa fa-viadeo"></i>
            <div class="icon-title">fa-viadeo</div>
        </li>
        <li>
            <i class="fa fa-viadeo-square"></i>
            <div class="icon-title">fa-viadeo-square</div>
        </li>
        <li>
            <i class="fa fa-vimeo"></i>
            <div class="icon-title">fa-vimeo</div>
        </li>
        <li>
            <i class="fa fa-vimeo-square"></i>
            <div class="icon-title">fa-vimeo-square</div>
        </li>
        <li>
            <i class="fa fa-vine"></i>
            <div class="icon-title">fa-vine</div>
        </li>
        <li>
            <i class="fa fa-vk"></i>
            <div class="icon-title">fa-vk</div>
        </li>
        <li>
            <i class="fa fa-wechat"></i>
            <div class="icon-title">fa-wechat</div>
        </li>
        <li>
            <i class="fa fa-weibo"></i>
            <div class="icon-title">fa-weibo</div>
        </li>
        <li>
            <i class="fa fa-weixin"></i>
            <div class="icon-title">fa-weixin</div>
        </li>
        <li>
            <i class="fa fa-whatsapp"></i>
            <div class="icon-title">fa-whatsapp</div>
        </li>
        <li>
            <i class="fa fa-wikipedia-w"></i>
            <div class="icon-title">fa-wikipedia-w</div>
        </li>
        <li>
            <i class="fa fa-windows"></i>
            <div class="icon-title">fa-windows</div>
        </li>
        <li>
            <i class="fa fa-wordpress"></i>
            <div class="icon-title">fa-wordpress</div>
        </li>
        <li>
            <i class="fa fa-wpbeginner"></i>
            <div class="icon-title">fa-wpbeginner</div>
        </li>
        <li>
            <i class="fa fa-wpexplorer"></i>
            <div class="icon-title">fa-wpexplorer</div>
        </li>
        <li>
            <i class="fa fa-wpforms"></i>
            <div class="icon-title">fa-wpforms</div>
        </li>
        <li>
            <i class="fa fa-xing"></i>
            <div class="icon-title">fa-xing</div>
        </li>
        <li>
            <i class="fa fa-xing-square"></i>
            <div class="icon-title">fa-xing-square</div>
        </li>
        <li>
            <i class="fa fa-y-combinator"></i>
            <div class="icon-title">fa-y-combinator</div>
        </li>
        <li>
            <i class="fa fa-y-combinator-square"></i>
            <div class="icon-title">fa-y-combinator-square</div>
        </li>
        <li>
            <i class="fa fa-yahoo"></i>
            <div class="icon-title">fa-yahoo</div>
        </li>
        <li>
            <i class="fa fa-yc"></i>
            <div class="icon-title">fa-yc</div>
        </li>
        <li>
            <i class="fa fa-yc-square"></i>
            <div class="icon-title">fa-yc-square</div>
        </li>
        <li>
            <i class="fa fa-yelp"></i>
            <div class="icon-title">fa-yelp</div>
        </li>
        <li>
            <i class="fa fa-yoast"></i>
            <div class="icon-title">fa-yoast</div>
        </li>
        <li>
            <i class="fa fa-youtube"></i>
            <div class="icon-title">fa-youtube</div>
        </li>
        <li>
            <i class="fa fa-youtube-play"></i>
            <div class="icon-title">fa-youtube-play</div>
        </li>
        <li>
            <i class="fa fa-youtube-square"></i>
            <div class="icon-title">fa-youtube-square</div>
        </li>
        <li>
            <i class="fa fa-ambulance"></i>
            <div class="icon-title">fa-ambulance</div>
        </li>
        <li>
            <i class="fa fa-h-square"></i>
            <div class="icon-title">fa-h-square</div>
        </li>
        <li>
            <i class="fa fa-heart"></i>
            <div class="icon-title">fa-heart</div>
        </li>
        <li>
            <i class="fa fa-heart-o"></i>
            <div class="icon-title">fa-heart-o</div>
        </li>
        <li>
            <i class="fa fa-heartbeat"></i>
            <div class="icon-title">fa-heartbeat</div>
        </li>
        <li>
            <i class="fa fa-hospital-o"></i>
            <div class="icon-title">fa-hospital-o</div>
        </li>
        <li>
            <i class="fa fa-medkit"></i>
            <div class="icon-title">fa-medkit</div>
        </li>
        <li>
            <i class="fa fa-plus-square"></i>
            <div class="icon-title">fa-plus-square</div>
        </li>
        <li>
            <i class="fa fa-stethoscope"></i>
            <div class="icon-title">fa-stethoscope</div>
        </li>
        <li>
            <i class="fa fa-user-md"></i>
            <div class="icon-title">fa-user-md</div>
        </li>
        <li>
            <i class="fa fa-wheelchair"></i>
            <div class="icon-title">fa-wheelchair</div>
        </li>
        <li>
            <i class="fa fa-wheelchair-alt"></i>
            <div class="icon-title">fa-wheelchair-alt</div>
        </li>
    </ul>
@endsection

@section('script')
    <script src="/geauth/plugins/jquery/jquery.min.js" type="text/javascript"></script>
    <script>
        $(function () {
            $('li').on('click', function (className) {
                className = $(this).find('i').get(0).className;
                if (className) {
                    parent.window.$('[name="icon"]').val(className);
                    parent.window.$('#icon-wrap').removeClass().addClass(className);
                    //获取当前窗口的name
                    var index=parent.layer.getFrameIndex(window.name);
                    parent.layer.close(index);
                }
            });
        });
    </script>
@endsection
