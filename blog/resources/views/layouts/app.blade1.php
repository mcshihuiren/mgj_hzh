<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='csrf-token' content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{asset('bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/lunbo.css')}}">
	<style>
		.tuixiao{
			text-decoration:none;
			font-size:11px;
			color:#666666;
		}

		.tuixiao:hover{
			color:#FF225D;
			text-decoration:none;
		}	
	</style>

	@section('css')
	
	@show
</head>
<body>
	<div id="app">
		

		
	</div>

	<nav id="nav" class="navbar navbar-default" role="navigation">
		    <div class="container"> 
				    <div class="navbar-header">
				        <button type="button" class="navbar-toggle" data-toggle="collapse"
				                data-target="#example-navbar-collapse">
				            <span class="sr-only">切换导航</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				        </button>
				    </div>
			    	<div class="row"  id="head">
					    <div class="collapse navbar-collapse" id="example-navbar-collapse">
							<ul class="nav navbar-nav">
					            <li><a class='fontColor' href=""> <span class='glyphicon glyphicon-home'></span> 蘑菇街首页</a></li>
								<li><SearchForm></SearchForm></li>
					        </ul>

							<ul class="nav navbar-nav navbar-right"> 
					            @guest
		                            <li><a href="{{ route('login') }}">登录</a></li>
		                            <li><a href="{{ route('register') }}">注册</a></li>
		                        @else
		                            <li class="dropdown">
		                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
		                                    {{ Auth::user()->name }} <span class="caret"></span>
		                                </a>

		                                <ul class="dropdown-menu">
		                                    <li>
		                                        <a href="">
		                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;账号与安全
		                                        </a>
		                                        <a href="{{ route('logout') }}"
		                                            onclick="event.preventDefault();
		                                                     document.getElementById('logout-form').submit();">
		                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 退出
		                                        </a>

		                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                                            {{ csrf_field() }}
		                                        </form>
		                                    </li>
		                                </ul>
		                            </li>
		                        @endguest
					            <li class='fontColor'>
					            	<a  href="#"> <span class='glyphicon glyphicon-list' ></span> 订单</a></li>
					            <li class='fontColor'><a href="#"> <span class='glyphicon glyphicon-shopping-cart' style='color:red;'></span> 购物车</a>

					            </li>
					            
					            <li class="dropdown" id='bangzhu'>
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                                <span class="">@{{message}}</span>
		                                <!-- <b class="caret"></b> -->
		                            </a>
		                            <ul class="dropdown-menu">
		                                <li><a href="#">买家服务</a></li>
		                                <li><a href="#">商家服务</a></li>
		                                <li><a href="#">规则中心</a></li>
		                            </ul>
		                        </li>
									
					            </li>
					            <li class="dropdown" id='bangzhu'>
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                                <span class="glyphicon glyphicon-user">商家后台</span>
		                                <!-- <b class="caret"></b> -->
		                            </a>
		                            <ul class="dropdown-menu" id='items'>
		                                <li v-for="item in items">
		                                	<a :href="item.link">
		                                	@{{ item.message }}</a>
		                                </li>
		                                
		                            </ul>
		                        </li>
								<li><SearchForm></SearchForm></li>
					        </ul> 
					    </div>
					</div>
		    </div>
	</nav>
	@section('content')

	@show
</body>

@section('js')

@show
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="http://www.jq22.com/jquery/1.8.3/jquery.min.js"></script>
<script src='{{mix("js/app.js")}}'></script>
<script src='{{asset("js/lunbo.js")}}'></script>

<script type='text/javascript'>
	var items = new Vue({
		el:'#items',
		data:{
			items:[
				{message:'管理后台',link:'/'},
				{message:'商家社区',link:'/'},
				{message:'商家培训',link:'/'},
				{message:'商家入驻',link:'/'}
			],
		}
	})

	var text = new Vue({
		el:'#bangzhu',
		data:{
			message:'帮助中心'
		}

	})
</script>
</html>