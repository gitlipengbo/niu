<?php if (!defined('THINK_PATH')) exit();?><html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title><?php echo ($open["nickname"]); ?>的邀请函</title> 
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
     <script type="text/javascript" src="/app/js/base64.js"></script>
  <script src="/app/js/app.js" type="text/javascript"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript"></script>


<script>
  var url = window.location.href;//用户要分享的网址
  var title  = '<?php echo ($open["nickname"]); ?>的邀请函'//分享的标题
  var shareimg = 'http://'+window.location.hostname+'/app/invitation.png';//分享的图片
  var desc = '<?php echo ($open["nickname"]); ?>邀请你加入群组';//分享的描述信息
  WeChat(url,title,shareimg,desc);
</script>

 </head> 
 <body style="background-color: #0e0226"> 
  
  <div  class="main" style="background: rgb(14, 2, 38);">
 
 <div id="fasongfk" background: rgb(14, 2, 38);height: 100%;position: fixed; width: 100%;">

<div class="main" style="">
  
  <img src="http://goss.fexteam.com/files/images/activity/union_bg.jpg" style="top: 0;left: 0;width: 100%;height: 100%;position: relative;">
  

        
       <div style="position: absolute;top: 10vh;left: 50%;margin-left: -25vh;height: 80vh;width: 50vh;" ng-if="showType==1" class="ng-scope">
            <img src="http://goss.fexteam.com/files/images/activity/union_card.jpg" style="position: absolute;top: 0;left: 1vh;width: 48vh;height: 100%;">
            <img src="http://goss.fexteam.com/files/images/activity/union_card_bottom.png" style="position: absolute;bottom: 0;width: 50vh;height: 35.25vh;">
            <div class="imgOpen " onclick="xuanzhuan(<?php echo ($open["id"]); ?>)" style="position: absolute;bottom: 10vh;left: 50%;margin-left: -10vh;width: 20vh;height: 20vh;backface-visibility:hidden;">
                <img  style="position: absolute;width: 20vh;height: 20vh;transform: rotate(deg);" src="http://goss.fexteam.com/files/images/activity/union_join.png">
            </div>

            <img style="position: absolute;top: 12vh;left: 50%;margin-left: -6vh;width: 12vh;height: 12vh;border-radius: 6vh;" src="<?php echo ($open["img"]); ?>">
            <div style="position: absolute;top: 25vh;width: 100%;height: 5vh;line-height: 5vh;text-align: center;color: orange;font-size: 2.5vh" class="ng-binding">
                　　　　　　
            </div>
            <div style="position: absolute;top: 32vh;width: 100%;height: 5vh;line-height: 5vh;text-align: center;color: orange;font-size: 3vh;">
                <?php echo ($open["nickname"]); ?>邀请你玩游戏
            </div>
        </div>


    

</div>


 </div>
<div id="fasongfking"></div>
<script>
    function xuanzhuan(id){
    $('.imgOpen').addClass('transf');
    window.setTimeout("location.href = '/index.php/portal/home/gerenzxjiaruchengg/id/"+id+"'",'1000');
  }
</script>
 </body>
</html>