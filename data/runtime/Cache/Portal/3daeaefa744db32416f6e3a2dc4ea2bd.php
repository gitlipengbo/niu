<?php if (!defined('THINK_PATH')) exit();?><html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title>领取房卡</title> 
  <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/public.css" /> 
  <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/alert.css" /> 
  <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/swiper-3.4.2.min.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/bull_vue-1.0.0.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/bullalert.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/bullshop.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/common/alert.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/activity.css">
  <script src="/themes_debug/gameserver/Public/js/homepage/jq.js" type="text/javascript"></script>  
  <script src="/themes_debug/gameserver/Public/js/homepage/home.js" type="text/javascript"></script>  
  <script src="/themes_debug/gameserver/Public/js/swiper-3.4.2.min.js" type="text/javascript"></script> 

    <script src="/app/js/app.js" type="text/javascript"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript"></script>


<script>
  var url = window.location.href;//用户要分享的网址
  var title  = '<?php echo ($send_user['nickname']); ?>的房卡包'//分享的标题
  var shareimg = 'http://'+window.location.hostname+'/app/share_icon.jpg';//分享的图片
  var desc = '<?php echo ($send_user['nickname']); ?>给你发了一个房卡包';//分享的描述信息
  WeChat(url,title,shareimg,desc);
</script>


 </head> 
 <body style="background-color: #0e0226"> 

<div id="fasongfking">
<div class="main" style="">
  
  <img class='hb-bj' src="http://cdn.euo69.cn/app/skin/newui/wode_bg.jpg"> 
  
    <div class='hb-bj-1' id="notopen">
        <img class='hb-bj-img' src="/themes_debug/gameserver/Public/img/redpackage/redpackage_new.png">
        
        <div class=" hb-yh-img" >
            <img class="avatar hb-yh-img-zt"  src="<?php echo ($send_user['img']); ?>">      
        </div>

        <p class=" hb-yh-p" id="sendname"><?php echo ($send_user['nickname']); ?> <br>给你发了一个房卡包
        </p>
        
        <div class="btnOpen ling"  onclick="lingqufangka()">
            <img class='ling-img' src="/themes_debug/gameserver/Public/img/redpackage/rp_get.png">
        </div> 

        <div class='hb-display-1'>
        <p class='hb-display-2'></p>
        </div>
    </div>

    <div id="ropen" class='hb-display-zt'>
        <img src="/themes_debug/gameserver/Public/img/redpackage/redpackage_receive_new.png" class='hb-display-zt-img'>

        <div class="hb-display-zt-div">
            <img class="hb-display-zt1-img  avatar"  src="<?php echo ($send_user['img']); ?>">      
        </div>
        
        <p class='hb-display-zt1-p ng-binding' ><span id="send_name"></span>的房卡包</p>
        
       
        <img  class="avatarReceiver hb-yhtx"  src="<?php echo ($user["img"]); ?>">
        <p class='hb-yhlingqu' >
            <span  class="hb-binding"><?php echo ($user["nickname"]); ?></span>
            <br>
            <span  class="hb-binding1" id="end_time_id"></span>
        </p>

        <p class='hb-jizhang' ><span id="fk_id"></span>张房卡</p>
    </div>

</div>
</div>

<?php if($or=='1'){ $bags = json_encode($bag); }else{ $bags = 'aa'; } ?>
 </body>
 <script> 

 $(document).ready(function() {
     var or = <?php echo ($or); ?>;
     if(or=='1'){
       var bag = <?php echo ($bags); ?>;
       console.log(bag);
        $('#send_name').text(bag.sendname);
        $('#end_time_id').text(bag.end_time);
        $('#fk_id').text(bag.number);
        $('#ropen').css('display','block');
     }
  });


  var mis = <?php echo ($mis); ?>;
  console.log(mis);

  
 function lingqufangka(){  //领取房卡包
  $('.ling-img').addClass('transf');


  var updataimgurl = '/index.php/portal/user/lingqufangka';
   $.ajax({
     type:"post",
     data:{mis:mis},
     url:updataimgurl,
     dataType: "json",
     success: function(suc){
      console.log(suc);
       if(suc.act=='1'){
        $('#send_name').text(suc.msg.sendname);
        $('#end_time_id').text(suc.msg.end_time);
        $('#fk_id').text(suc.msg.number);
        $('.ling-img').removeClass('transf');
        $('#ropen').css('display','block');


        //location.href = '/index.php/portal/user/fangka_houxu/mis/'+suc.msg;
       }else{
        window.reload();
       }
     }
   });

 }
var mySwiper = new Swiper('.swiper-container', {
  slidesPerView : 5,
  freeMode : true,
})
</script>
</html>