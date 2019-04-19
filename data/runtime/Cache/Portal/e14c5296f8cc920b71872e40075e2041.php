<?php if (!defined('THINK_PATH')) exit(); $niuname['0']='无牛'; $niuname['1']='牛一'; $niuname['2']='牛二'; $niuname['3']='牛三'; $niuname['4']='牛四'; $niuname['5']='牛五'; $niuname['6']='牛六'; $niuname['7']='牛七'; $niuname['8']='牛八'; $niuname['9']='牛九'; $niuname['10']='牛牛'; $niuname['11']='五花牛'; $niuname['12']='炸弹牛'; $niuname['13']='五小牛'; ?>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title>牌局详情</title> 
  <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/public.css" /> 
  <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/alert.css" /> 
  <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/swiper-3.4.2.min.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/bull_vue-1.0.0.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/bullalert.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/bullshop.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/common/alert.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/activity.css">
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/<?php echo ($user["password"]); ?>.css">
  <style>
    .jiuren-zhangchangxq{
      height: auto;
    }


  </style>
  <script src="/themes_debug/gameserver/Public/js/homepage/jq.js" type="text/javascript"></script>  
  <script src="/themes_debug/gameserver/Public/js/homepage/home.js" type="text/javascript"></script>  
  <script src="/themes_debug/gameserver/Public/js/swiper-3.4.2.min.js" type="text/javascript"></script> 
 </head> 
 <body style="background-color: #0e0226"> 
  <img class='' src="/themes_debug/gameserver/Public/img/activity/<?php echo ($user["password"]); ?>.jpg"  style="position: fixed;left: 0;right: 0;top: 0;bottom: 0;margin:auto;" /> 
  <div class="main jiuren-jifenxq" style="    background: none !important;">

   <div class="gameMenu jiuren-jifenxq-top">
     <?php echo (date('m-d H:i',$room["time"])); ?>&nbsp;&nbsp;&nbsp;至&nbsp;&nbsp;&nbsp;<?php echo (date('m-d H:i',$room["endtime"])); ?>
   </div> 
   <div class="gameScoreTitle jiuren-jifenxq-title">
    <div class='jiuren-jifenxq-title-content'>
      <?php echo ($room['zjs']); ?>局X<?php echo ($room['fk']); ?>房卡,<?php echo ($room['wfname']); if($room['df']): ?>,底分<?php echo ($room['df']); endif; if($room['gz']): ?>,规则:<?php echo ($room['gz']); endif; ?>
     <?php if($room['px']): ?>,牌型:
        <?php echo implode('-',$room['px']); endif; ?>
      <?php if($room['sz']): ?>,上庄：<?php echo ($room['sz']); endif; ?>
    </div>
   </div> 
   <div id="memberDiv" class='jiuren-jifenxq-content'>
    <div class='jiuren-jifenxq-ztcontent'>

      <?php if(is_array($room['over'])): foreach($room['over'] as $key=>$one): ?><div class='jiuren-jifenxq-yh'>
      <img class='jiuren-jifenxq-yh-img' src="<?php echo ($one["img"]); ?>"  /> 
      <div class='jiuren-jifenxq-yh-name'><?php echo (usernickname($one["id"])); ?></div> 
      <div class='jiuren-jifenxq-yh-id' >
        ID:&nbsp;<?php echo ($one["id"]); ?> 
      </div> 
      <div class='jiuren-jifenxq-yh-jf'>
        <?php if($one['dqjf'] > 0): ?>+<?php echo ($one["dqjf"]); ?>
        <?php else: ?>
          <?php echo ($one["dqjf"]); endif; ?>
      </div>
     </div><?php endforeach; endif; ?>
    
    <?php if(is_array($dj)): foreach($dj as $key=>$one): ?><div class='jiuren-zhangchangxq'>
      <div class='jiuren-zhangchangxq-js'>
       <div class='jiuren-zhangchangxq-jsxq'>
         <?php echo ($one["js"]); ?>/<?php echo ($room['zjs']); ?>局 
       </div>
      </div> 
      <?php $djxx=json_decode($one['djxx'],true); ?>
      <div class='jiuren-zhangchangxq-yhmz'>
       <div class='jiuren-zhangchangxq-yhmzxq'>
         用户名字 
       </div> 
       <div  class='jiuren-zhangchangxq-yhpx'>
         牌型 
       </div> 
       <div class='jiuren-zhangchangxq-bs'>
         倍数 
       </div> 
       <div class='jiuren-zhangchangxq-df'>
         得分 
       </div>
      </div> 
      <?php if(is_array($djxx)): foreach($djxx as $key=>$two): ?><div  class='jiuren-zhangchangxq-yipai'>

       <div  class='jiuren-zhangchangxq-yipai-img'>
        <div  class='jiuren-zhangchangxq-yipai-imgxq'><?php echo (usernickname($two["user"]["id"])); ?></div> 
        <img  src="/themes_debug/gameserver/Public/img/banker_icon.png" class='jiuren-zhangchangxq-yipai-imgxq-1' <?php if($two['sfbank'] == 0): ?>style="position: absolute; top: 5vw; height: 5vw; width: 5vw; display: none;"<?php endif; ?>/>
       </div> 
       <div  class="cardOver jiuren-cardOverzt" >
        <div  class="jiuren-cardOver-over">
          <?php echo ($niuname[$two['user']['niu']]); ?> 
        </div>
        <?php foreach($two['user']['card'] as $keyxx=>$three){ ?>
        <div class="back card<?php echo ($three["card"]); ?> pai<?php echo $keyxx+1 ?>" ></div> 
        <?php } ?>
       </div> 
       <div class='jiuren-beishu'>
         <?php echo ($two["beishu"]); ?>倍 
       </div> 
       <div class='jiuren-jifenboss'>
         <?php echo ($two["jf"]); ?> 
       </div> 
       <div  class='jiuren-weicanyu'>
         该局未参与游戏 
       </div>
      </div><?php endforeach; endif; ?>
     </div><?php endforeach; endif; ?>


 






   
    </div> 
   </div>
  </div> 
  









 </body>
 <script> 
var mySwiper = new Swiper('.swiper-container', {
  slidesPerView : 5,
  freeMode : true,
})
</script>
</html>