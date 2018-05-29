<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='csrf-token' content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/index.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
    <style>
        
    </style>
@section('css')

@show
</head>
<body>
    <div id="app">
        
    </div>
    <!--头部导航栏开始-->
    <div class="header-nav">
        <div class="header-wrap">
            <a class="mgj-home" href="{{action('IndexController@index')}}">蘑菇街首页</a>
            <ul class="header-wrap-nav">
                <li class="login header-item">
                    <a href="#">注册</a>
                    <a href="#" id="login">登录</a>
                </li>
                <li class="order header-item">
                    <a href="#">我的订单</a>
                </li>
                <li class="cart header-item"id="cart">
                    <a href="{{action('ShoppingController@index')}}">购物车</a>
                    <div class="empty-cart">购物车里没有商品</div>
                    
                </li>
                <li class="custom header-item" id="custom">
                    <a href="#">客户服务</a>
                    <i class="icon_delta"></i>
                    <ol class="custom-con">
                        <li class="cs2">
                            <a href="#">消费者服务</a>
                        </li>
                        <li class="cs2">
                            <a href="#">商家服务</a>
                        </li>
                        <li class="cs2">
                            <a href="#">规则中心</a>
                        </li>
                    </ol>
                </li>
                <li class="store header-item"id="store">
                    <a href="#">我的小店</a>
                    <ol class="store-con">
                        <li class="s2">
                            <a href="#">管理后台</a>
                        </li>
                        <li class="s2">
                            <a href="#">商家社区</a>
                        </li>
                        <li class="s2">
                            <a href="#">商家培训</a>
                        </li>
                        <li class="s2">
                            <a href="#">市场入驻</a>
                        </li>
                    </ol>
                </li>
            </ul>
        </div>
    </div>
    <!--头部导航栏结束-->
     @section('content')
        
    @show
</body>
<script src='{{mix("js/app.js")}}'></script>
<script src="{{asset('js/jquery-1.7.2.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jQueryRotate.js')}}"></script>
<script src="{{asset('js/snowfall.jquery.js')}}"></script>
<script src="{{asset('js/index.js')}}"></script>
<script src='{{asset("bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js")}}'></script>
@section('js')

@show
</html>