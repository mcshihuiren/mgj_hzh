<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='csrf-token' content="<?php echo e(csrf_token()); ?>">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>"type="text/css"/>
	<link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo e(asset('bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')); ?>">
	<style>
		
	</style>
<?php $__env->startSection('css'); ?>

<?php echo $__env->yieldSection(); ?>
</head>
<body>
	<div id="app">
		
	</div>
	<!--头部导航栏开始-->
	<div class="header-nav">
		<div class="header-wrap">
			<a class="mgj-home" href="<?php echo e(action('IndexController@index')); ?>">蘑菇街首页</a>
			<ul class="header-wrap-nav">
				<li class="login header-item">
					<a href="#">注册</a>
					<a href="#" id="login">登录</a>
				</li>
				<li class="order header-item">
					<a href="#">我的订单</a>
				</li>
				<li class="cart header-item"id="cart">
					<a href="<?php echo e(action('ShoppingController@index')); ?>">购物车</a>
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
	 <?php $__env->startSection('content'); ?>
        
    <?php echo $__env->yieldSection(); ?>
</body>
<script src='<?php echo e(mix("js/app.js")); ?>'></script>
<script src="<?php echo e(asset('js/jquery-1.7.2.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jQueryRotate.js')); ?>"></script>
<script src="<?php echo e(asset('js/snowfall.jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/index.js')); ?>"></script>
<script src='<?php echo e(asset("bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js")); ?>'></script>
<?php $__env->startSection('js'); ?>

<?php echo $__env->yieldSection(); ?>
</html>