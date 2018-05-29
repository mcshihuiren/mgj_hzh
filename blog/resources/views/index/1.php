@extends('layouts.app')

@section('content')
<div id="content" class="container">
    <div class="row">
        <div class="col-md-12 personal-info">
            <div class="personal-avatar">
                <img style="" src="{{asset('img/logo.jpg')}}" alt="">
 				<img src="{{asset('img/logo-1.jpg')}}" style='float:right;' alt="">
			
           		<div class="input-group col-md-4" style="margin-top:0px positon:relative;float:right;margin-right:250px;margin-top:10px;"> 
				       <input type="text" class="form-control" style='border:1px solid #FF225D;' placeholder="请输入" / >  
				            <span class="input-group-btn">  
				               <button class="btn btn-info btn-search" style="background-color:#FF225D;border:1px solid #FF225D;">搜&nbsp;索</button>  
				            </span> 
 				</div>
 				<div class='lianjie' id='lianjie' style="margin-top:0px positon:relative;margin-left:350px;" >
 					<a href="" class='tuixiao'>拖鞋 </a> &nbsp;
 					<a href="" class='tuixiao'>阔腿 </a> &nbsp;
 					<a href="" class='tuixiao'>裤半 </a> &nbsp;
 					<a href="" class='tuixiao'>身裙 </a> &nbsp;
 					<a href="" class='tuixiao'>口红 </a> &nbsp;
 					<a href="" class='tuixiao'>包包 </a> &nbsp;
 					<a href="" class='tuixiao'>凉鞋 </a> &nbsp;
 					<a href="" class='tuixiao'>内衣 </a> &nbsp;
 				</div> 

            </div>
        </div>
		

		<div class='container-fluid' style=''>
		    <div class = 'row'>
                <div class="col-md-3" style='margin-top:10px;background-color:#FF0077;border-radius:6px 6px 0px 0px;'>
                    <div style='width:200px;height:40px;'>
                       <span style='line-height:41px;color:white;' class='glyphicon glyphicon-tasks'>&nbsp;</span> <a class="" href="javascript:;" style='font-size:17px;color:white;line-height:40px;' target="_blank">主题市场</a>
                    </div>
                </div>

                <div class='col-md-1' style='margin-top:10px;background-color:white;margin-left:5px;'>
                    <div style='width:140px;height:40px;'>
                        <a href="" style='font-size:17px;color:black;line-height:40px;'>省钱团购</a>
                    </div>
                </div>

                <div class='col-md-1' style='margin-top:10px;background-color:white;margin-left:5px;'>
                    <div style='width:140px;height:40px;'>
                        <a href="" style='font-size:17px;color:black;line-height:40px;'>限时快抢</a>
                    </div>
                </div>
		    </div>
		</div>

	</div>
</div>

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style='border-top:2px solid #FF0077;'>
			<!-- 轮播导航  -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- 轮播项目 -->
			<div class="carousel-inner" role="listbox">
			<div class="item active">
			<div class="carousel-caption">
			mmmmmmmmmmmm
			</div>
			<img src="{{asset('img/1.jpg')}}" />
			</div>
			<div class="item">
			<img src="{{asset('img/2.jpg')}}" />
			</div>
			<div class="item">
			<img src="{{asset('img/3.jpg')}}" />
			</div>
			<div class="item">
			<img src="{{asset('img/4.jpg')}}" />
			
			</div>
			</div>
			<!-- 轮播导航  -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>

		

 
@endsection

@section('js')
<script type='text/javascript'>

</script>
@endsection