<?php $__env->startSection('css'); ?>
<style type="text/css">
    .head{
        width:60%;
       display: block;
        margin-left: auto;
        margin-right: auto;
    }

    body{
        background:#F4F4F4;
        padding:0px;
    }

    .cart_dh{
       font-size:15px;
       line-height:60px;
       color:black;
        border-radius:5px;
       padding:8px;
    }

    ul{
        margin:0px;
    }
     

    .cart_table{
        padding:2.5%;
        background-color:#FFF;
    }
    
    .dp{
        height:60px;
        margin:0px;
        padding:0px;
    }

    .cart_head{
        
        padding-top:30px;

    }
    
    .dp td a{
        font-size:12px;
        font-weight:normal;
        color:black;
    }

    .cart_first{
        width:45px;
    }
    
    th{
        font-size:12px;
        font-weight:normal;
    }

    .cart_two{
        width:640px;    
        
    }

    .cart_three{
        padding-left:0px !important;
        padding-right:0px !important;
        width:75px;
        
    }
    


    .cart_data_sprice{
        font-size:12px !important;
        font-weight:bold;
    }

    .cart_four{
        width:95px;
    }

    .cart_lable{
        font-size:12px;
        font-weight:normal;
        color:#999999;
    }

    .cart_img{
        border:1px solid #CCCCCC;
    }

    .cart_lh20{
        font-size:13px;
    }

    .cart_data p{
        text-align:center;


    }
    
    .cart_title th{
        text-align:center;
    }

    .cart_del{

        font-size:12px;
        color:black;

    }

    .cart_deep_red{
        color:red;  
    }

    .cart_a{
        display:block;
        padding:0px;
        margin:0px;
        text-align:center;
       
    }

    .cart_a_1{
        font-size:11px;
        padding:0px;
        float:left;
    }

    .cart_a_2{
        font-size:20px;
        font-weight:bold;
        color:#f13e3a;
        padding-left:5px;
        padding-right:5px;
        text-align:center;
        
        
    }

    .cart_a_3{
        font-size:20px;
        background-color:#D8D8D8;
        width:152px; 
    }

    .cart_bom{
        line-height:50px;
    }

    .back{
        border-top:1px solid #DDD;
        background-color:#FFF;
    }


    .changeColor{
        background-color:#f13e3a;
        color:#FFFFFF; 
    }

    .tail p{
        text-align:center;
        line-height:50px;
        display: block;
        -webkit-margin-before: 1em;
        -webkit-margin-after: 1em;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        font-size:11px;
        color:#999999;
    }

    .indi{
        font-size:22px;
        line-height:33px;
        text-align:center;
        width:90px;
    }

   
    .xinxi{
        font-size:12px;
    }

    .logo{
        
        line-height:66px;   
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid" id='dh'>
        <div class="center-block" style="border-bottom:1px solid #DDDDDD">
             <div class="row head">
                    <div class="col-md-6 logo">
                        <img src="<?php echo e(asset('images/2018-05-24_091727.png')); ?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <div style='float:right'>
                         <span class="glyphicon glyphicon-chevron-right indi" aria-hidden="true" style='-webkit-column-rule: #FF4266;
                         -moz-column-rule: #FF4266;
                         -o-column-rule: #FF4266;
                         column-rule: #FF4266;'>
                             <div class='xinxi'>购物车</div>
                         </span>
                         <span class="glyphicon glyphicon-chevron-right indi" aria-hidden="true">
                             <div class='xinxi'>确认支付</div>
                         </span>
                         <span class="glyphicon glyphicon-chevron-right indi" aria-hidden="true">
                             <div class='xinxi'>支付</div>
                         </span>
                         <span class="glyphicon glyphicon-chevron-right indi" aria-hidden="true">
                             <div class='xinxi'>完成</div>
                         </span>
                         </div>
                    </div>
            </div>      
        </div>
        
        <div class="row head">
            <div class="col-md-12" id='biao'>
                <ul class="list-inline" >
                  <li v-for='biao in biaos'>
                      <a :href='biao.link' class='cart_dh' >{{biao.title}}<span>(0)</span></a>
                  </li> 
                </ul>
                <div class="col-md-l2 cen">
                    <div class="table-responsive cart_table">
                      <table class="table">
                          <thead>
                              <tr class='cart_title'>
                                <th class='cart_first'>
                                    <input type="checkbox" name="s_all" class="cart_all" id="s_all_h">            
                                    <a class='cart_del cart_all'>全选</a>
                                </th>
                                <th class='cart_two'>商品</th>
                                <th>商品信息</th>
                                <th style='text-align:center'>单价(元)</th>
                                <th class='cart_four'>数量</th>
                                <th class='cart_three'>小计(元)</th>
                                <th>操作</th>
                            </tr>
                          </thead>
                          <tbody>
                                <tr class='dp'>
                                  <td colspan="7">
                                     <div class='cart_head'>
                                        <input type="checkbox" class=''>
                                        <label for="" class='cart_lable'>店铺：</label>
                                        <a href="http://s.meilishuo.com/14p9g" target="_blank" class="">饰麦麦官方旗舰店</a>
                                        <a href="javascript:;" data-shopid="14p9g" class=""><img src='<?php echo e(asset("af3e6589ef804b1aa8067d4709154b3e.png")); ?>'/>联系客服</a>
                                     </div>   
                                  </td>
                                </tr>
                                <tr class='cart_data'>
                                    <td>
                                        <input type="checkbox" class="cart_thcheck" data-stockid="1sruxuk">
                                    </td>
                                    <td>
                                        <a href="http://item.meilishuo.com/detail/1kg12to?ptp=1.effi8b._shoppingcart.0.FngYtB6" target="_blank" class="cart_goods_img" data-ptp-cache-id="1.effi8b._shoppingcart.0.FngYtB6"> <img class="cart_img" src="http://s3.mogucdn.com/mlcdn/c45406/171122_7a17e4495kbci2k7jdlb5haje273d_640x960.jpg_100x100.jpg" width="78" height="78" alt="Darnell Wallington简约32mm按扣钢带手表"> Darnell Wallington简约32mm按扣钢带手表</a>
                                    </td>
                                    <td class='cart_three'>
                                        <p class="cart_lh20">颜色：银色表带黑色表盘</p>
                                    </td>
                                    <td class='cart_three'>
                                        <p class="cart_lh20 cart_data_sprice"> 240.00 </p>
                                    </td>
                                    <td class='cart_four'>
                                        <p>数量</p>
                                    </td>
                                    <td>
                                        <p class="cart_deep_red" >240.00</p>
                                    </td>
                                    <td>
                                        <p><a href="javescript:;" class='cart_del del'>删除</a></p>
                                    </td>
                                </tr>
                                <tr class='dp'>
                                  <td colspan="7">
                                     <div class='cart_head'>
                                        <input type="checkbox" class=''>
                                        <label for="" class='cart_lable'>店铺：</label>
                                       <a href="http://s.meilishuo.com/1owu8k" target="_blank" class="cart_hoverline">鹿可可</a>
                                        <a href="javascript:;" data-shopid="14p9g" class=""><img src='<?php echo e(asset("af3e6589ef804b1aa8067d4709154b3e.png")); ?>'/>联系客服</a>
                                     </div>   
                                  </td>
                                </tr>
                                <tr class='cart_data'>
                                    <td>
                                        <input type="checkbox" class="cart_thcheck" data-stockid="1sruxuk">
                                    </td>
                                    <td>
                                        <a href="http://item.meilishuo.com/detail/1lrsy1c" target="_blank" class="cart_goods_img"> <img class="cart_img" src="http://s3.mogucdn.com/mlcdn/c45406/180226_2d6667hc943ee3kl9jaafel5hd2dk_640x960.jpg_100x100.jpg" width="78" height="78" alt="春秋新款韩版学生长袖恶魔笑脸夹克两面穿bf宽松棒球服外套女"> 春秋新款韩版学生长袖恶魔笑脸夹克两面穿bf宽松棒球服外套女 </a>

                                    </td>
                                    <td class='cart_three'>
                                        <p class="cart_lh20">颜色：黑色</p>
                                        <p class="cart_lh20">尺码：XL</p>
                                    </td>
                                    <td class='cart_three'>
                                        <p class="cart_lh20 cart_data_sprice"> 79.00 </p>
                                    </td>
                                    <td class='cart_four'>
                                        <p>数量</p>
                                    </td>
                                    <td>
                                        <p class="cart_deep_red" >79.00</p>
                                    </td>
                                    <td>
                                        <p><a href="javescript:;" class='cart_del del'>删除</a></p>
                                    </td>
                                </tr>
                          </tbody>
                      </table>
                    </div>
                     <div class='col-md-12 '>
                        <div class="row cart_bom back">
                            <div class="col-sm-8 ">
                                <input type="checkbox" name="s" class="cart_all" id="s_all_f">
                                <a class='cart_del cart_all'>全选</a>
                                <a href="javascript:;" class="cart_del" id="cartRemoveChecked">删除</a>
                                <a href="javascript:;" class="cart_del" id="cartRemoveUnuse">清空失效商品</a>
                            </div>
                            <div class="cart_a cart_a_1">
                                 共有 
                                 <span class="goodsNum" style='color:red'>0</span>
                                  款商品，总计： 
                            </div>
                            <div class="col-md-1 cart_a_2">$0.00</div>
                            <div class="col-md-2 cart_a cart_a_3"><a style='color:#EEEEEE;'>去付款></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='col-md-12 tail'>
         <p title="mofa015027">
            <a href="http://www.meilishuo.com" target="_blank" style='color:#999999'>美丽说</a>
            © 2016 Meilishuo.com,All Rights Reserved.
        </p>
    </div>
 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        new Vue({
            el:'#biao',
            data:{
                biaos:[
                    {title:'全部商品',link:'/'},
                    {title:'优惠',link:'/'},
                    {title:'库存紧张',link:'/'}
                ]
            }
        })
    </script>

    <script type="text/javascript"> 

        $(function(){
            $('.cart_dh').first().css({'background-color':'#333333','color':'white'});
        });

       $('.cart_dh').click(function(){

            $('.cart_dh').css({'background-color':'','color':'#333333'});
            $(this).css({'background-color':'#333333','color':'white'});
            return false;
       })


       $('.cart_all').click(function(){

           var aa = $(this).attr('checked');

           if(aa){
                
                $('input[type=checkbox]').removeAttr('checked');
                $('.cart_a_2').html('$0.00');
                $('.goodsNum').html('0');
                $('.cart_a_3').removeClass('changeColor');
           }else{
                
                var mm = $('.cart_deep_red');
                var num=0;
                $(mm).each(function(){
                    num += $(this).text()*1.0;
                });

                $('input[type=checkbox]').attr('checked',true);
                $('.cart_a_2').html('$'+num+'.00');
                $('.goodsNum').html($(mm).length);
                $('.cart_a_3').addClass('changeColor');
           }         
       })

        var money=0;
       $('.cart_thcheck').click(function(){

            var aa = $(this).is(':checked');

            var price = $(this).parent().next().next().next().next().next().find('p').text();
            if(aa){
                money += price*1.0;
            }else{
                money -= price*1.0;
            }

            $('.cart_a_2').html('$'+money+'.00');

            if(money){
                $('.cart_a_3').addClass('changeColor');
            }else{
                $('.cart_a_3').removeClass('changeColor');
            }
                   
       })


       //删除
       $('.del').click(function(){

            $(this).parent().parent().parent().prev().remove();
            $(this).parent().parent().parent().remove();
       })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>