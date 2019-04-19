<?php if (!defined('THINK_PATH')) exit();?><html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title>房卡记录</title> 
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
 </head> 
 <body style="background-color: #0e0226">
  



 <div id="fasongfk" style="height: 100%;position: fixed; width: 100%;">


  <div class="main"> 
   <div class="outDiv fachufangka"> 
    <div style="position: relative;width: 100%;"> 
    <div id="qh1">
    <?php if(is_array($send)): foreach($send as $key=>$vo): ?><div class='fachufangka-1'> 
      <div class='fachufangka-height' > 
       <label class='fachufangka-fkabao' > 房卡包</label> 
       <label class='fachufangka-zhang' class='fachufangka-zhang' > <?php echo ($vo["number"]); ?>张</label> 
       <label  class='hongbao-shijian' > <?php echo (datetime($vo["add_time"])); ?></label> 
       <label  class='hongbao-lingqu' > <?php if(empty($vo["get_id"])): ?>未领取<?php else: ?> 已领取<?php endif; ?> </label>
      </div> 
     </div><?php endforeach; endif; ?>
    </div>
      <div id="qh2" style="display: none">
      <?php if(is_array($get)): foreach($get as $key=>$vo): ?><div class='fachufangka-1'> 
      <div class='fachufangka-height' > 
       <label class='fachufangka-fkabao' ><?php echo (usernickname($vo["get_id"])); ?></label> 
       <label class='fachufangka-zhang' class='fachufangka-zhang' > <?php echo ($vo["number"]); ?>张</label> 
       <label  class='hongbao-shijian' ><?php echo (datetime($vo["end_time"])); ?></label> 
       <label  class='hongbao-lingqu' > 已领取</label>
      </div> 
     </div><?php endforeach; endif; ?>
     </div>

    </div> 
   </div>



   <div class="fangka-zt"></div> 
   <div class='buff' id="selectTab"></div> 
   <label class='fc-fangka' id="outRP" onclick="fasongfk(1)">发出房卡</label> 
   <label class='sd-fangka' id="reveiveRP" onclick="fasongfk(2)">收到房卡</label> 
  </div> 


 </div>
<div id="fasongfking"></div>



 </body>
 <?php  ?>
 <script> 

var mySwiper = new Swiper('.swiper-container', {
  slidesPerView : 5,
  freeMode : true,
})
</script>
</html>