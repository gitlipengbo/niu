<?php if (!defined('THINK_PATH')) exit();?><html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title>管理员功能</title> 
  <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/public.css" />
  <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/alert.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/activity.css">
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/baihu.css">
  
  <script src="/themes_debug/gameserver/Public/js/homepage/jq.js" type="text/javascript"></script>  
  <script src="/themes_debug/gameserver/Public/js/homepage/home.js" type="text/javascript"></script>  
  <script src="/themes_debug/gameserver/Public/js/swiper-3.4.2.min.js" type="text/javascript"></script> 
   <style type="text/css">
   	form .op-btn {
      background: orange;
      color: #FFFFFF;
      padding: 1vw;
      border: none;
    }
     form .input-info {
       width: 20vw;
      padding: 1vw;
      text-align: center;
      color: #000000;
     }
   </style>
 </head> 
 <body style="background-color: #0e0226">
 <img class='' src="/themes_debug/gameserver/Public/img/activity/nn.jpg"  style="width: 100%;position:fixed;margin:0 auto;" />


 <div  class="main" style="position: absolute;">
     <div class='gerenzx-top-zt' >
         <div class='gerenzx-top'>
             <img class='gerenzx-yhimg' src="<?php echo ($user["img"]); ?>" />
             <div class='gerenzx-yhid'>
                 ID:<?php echo ($user["id"]); ?>
             </div>
         </div>
         <div class='gerenzx-gg' ><?php echo ($user["nickname"]); ?></div>
         <img class='gerenzx-sjrz' src="/themes_debug/gameserver/Public/img/activity/homepage_phone.png" onclick="shoujibd()" <?php if($user['mobile']): ?>style="display:none"<?php endif; ?>/>
         <div class='gerenzx-xg' onclick="shoujibd()" <?php if($user['mobile']): ?>style="display:block"<?php endif; ?>>
         <?php echo ($user["mobile"]); ?>&nbsp;&nbsp;修改
        </div>
    </div>
	 <?php if($user["is_control_user_id"] == 1): ?><div class='gerenzx-fksl'>
         <div class='gerenzx-fksls'>
             <?php echo ($user["daycard"]); ?>张
         </div>
         <div class='gerenzx-fk' >
             天卡
         </div>
     </div><?php endif; ?>
         <div id="fasongfk" style="position: fixed;top: 25vw; bottom: 0; width: 100%;overflow: auto;">
             <?php if($user["is_control_user_id"] == 1): ?><div style="color: #FFF;padding: 2vw 5vw;">
                 <form id="openform">
                     用户ID:&nbsp;&nbsp; &nbsp;
                     <input class="input-info" type="number" id="openuid" name="openuid" required />
                     <button class="op-btn" type="submit" id="openagent">新增控制</button>
                 </form>
             </div><?php endif; ?>
           <div style="color: #FFFFFF; padding: 2vw 5vw">
             <form id="userCredits">
               <span>用户积分:&nbsp; </span>
               <input class="input-info" type="number" id="userId" name="userId" required placeholder="用户ID" />
               <input class="input-info" type="number" id="credits" name="credits" required placeholder="积分数量" />
               <select class="input-info" name="opType" style="width: 15vw; height: 6vw; padding: inherit;">
                 <option value="1">上分</option>
                 <option value="2">下分</option>
               </select>
               <button class="op-btn" type="submit">提交</button>
             </form>
           </div>
         <div id="app-main" class="main" style="position: relative; width: 100%; margin: 0px auto; background: rgb(14, 2, 38); display: block;">


       <div id="valert" class="alert" style="display: none;">
        <div class="alertBack"></div>
        <div class="mainPart">
         <div class="backImg">
          <div class="blackImg"></div>
         </div>
         <div class="alertText" id="tipmsg"></div>
         <div>
          <div class="buttonLeft" onclick="$('#valert').hide();">
           确定
          </div>
          <div class="buttonRight" onclick="$('#valert').hide();">
           取消
          </div>
         </div>
         <div style="display: none;">
          <div class="buttonMiddle">
           确定
          </div>
         </div>


         </div>
        </div>
       </div>
         <div class='jiuren-chengyuangl' style="">


             <?php if(is_array($qun)): foreach($qun as $key=>$one): ?><div class='qun-bg' id="userxx<?php echo ($one["uid"]); ?>">

                 <img src="<?php echo ($one["img"]); ?>" style="position: absolute; top: 3vw; left: 3vw; width: 12vw; height: 12vw;">
                 <div style="position: absolute; top: 3vw; width: 100%; left: 18vw; font-size: 12pt; color: white; text-align: left;"><?php echo ($one["nickname"]); ?></div>
                 <div class="jiuren-chengyuangl-yhid">
                     ID:<?php echo ($one["uid"]); ?>
                     <span style="color:#CCC;font-size:12px;">
                     (<?php
 if(($one['time']-time()) < 0): echo '已到期'; elseif(($one['time']-time())/(24*3600) < 1): echo ceil(($one['time']-time())/3600),'小时到期'; else: echo ceil(($one['time']-time())/(24*3600)),'天到期'; endif; ?>)
                     </span>
                 </div>

                 <div class="jiuren-chengyuangl-ty" <?php if($one['is_grade'] == 0): ?>style="display:block;height: 9vw;
                 line-height: 9vw;"<?php endif; ?> onclick="tongyi(<?php echo ($one["uid"]); ?>)">
                 透视
                 </div>
                 <div class="jiuren-chengyuangl-jj" <?php if($one['is_grade'] == 1): ?>style="display:block;height: 9vw;
                 line-height: 9vw;right:28vw"<?php else: ?>style="right:28vw;"<?php endif; ?> onclick="jvjue(<?php echo ($one["uid"]); ?>)">
                 关闭
                 </div>
                 <div class="jiuren-chengyuangl-tc"  style="display: block;
            height: 5vw;
            line-height: 5vw;">
                     输赢<input name="gailv" value="<?php echo ($one["gailv"]); ?>" style="width: 18vw;height:4vw;
            line-height: 4vw;
            text-align: center;
            color: #000;" onchange="shuying(<?php echo ($one["uid"]); ?>,$(this).val());">
                 </div>
             </div><?php endforeach; endif; ?>

             <div class='jiuren-chengyuangl-mygd'  id="moretext">
              没有更多内容
             </div>
        </div>
     </div>
</div>
<div id="fasongfking"></div>






 <script>
     $("#openform,#userCredits").click(function (e) {
         e.preventDefault();
     });
     $("#openagent").click(function (e) {
         var openuid = $("#openuid").val();
         if(!openuid) return alert("请填写用户ID");
         $.post("/index.php/portal/home/openagent/", {"uid":openuid}, function (result) {
             if(result.status == '1'){
                 tipxx('授权用户成功');
                 setTimeout(function () {
                     window.location.reload();
                 }, 2000);
             }
             else {
                 tipxx(result.info);
             }
         }, "json");
     });
   $("#userCredits button[type='submit']").off("click").on("click", function(e) {
   		var data = {
        	"touid": $("#userId").val(),
         	"credits": $("#credits").val(),
          	"opType": $("#userCredits select[name='opType']").val()
        };
     	if(!data.touid)
        {
          	tipxx("请填写会员ID！");
          	return;
        }
     	if(!data.credits || data.credits <= 0)
        {
          	tipxx("请填写积分数量且必须大于0！");
          	return;
        }
     	if(!data.opType)
        {
          	tipxx("请选择操作类型！");
          	return;
        }
     	var opTypeText = $("#userCredits select[name='opType']").text();
     	$.post("/index.php/portal/home/addOrSubCredits/", data, function (result) {
             if(result.status == '1'){
               	 tipxx(result.info);
                 setTimeout(function () {
                     window.location.reload();
                 }, 2000);
             }
             else {
                 tipxx(result.info);
             }
         }, "json");
   });
     function tipxx(msg){
         $('#tipmsg').html(msg);
         $('#valert').show();
     }
     function tongyi(id){
         $.post("/index.php/portal/home/toushi/",{id:id,zt:1},function(result){
             if(result.status=='1'){
                 tipxx('开启透视成功');
                 $('#userxx'+id+' .jiuren-chengyuangl-ty').hide();
                 $('#userxx'+id+' .jiuren-chengyuangl-jj').show();
             }
             else{
                 tipxx(result.info);
             }
         },'json');
     }
     function shuying(id,val){
         $.post("/index.php/portal/home/shuying/",{id:id,val:val},function(result){
             if(result.status=='1'){
                 tipxx('修改输赢成功');
             }
             else{
                 tipxx(result.info);
             }
         },'json');
     }
     function jvjue(id){
         $.post("/index.php/portal/home/toushi/",{id:id,zt:0},function(result){
             if(result.status=='1'){
                 tipxx('关闭透视成功');
                 $('#userxx'+id+' .jiuren-chengyuangl-ty').show();
                 $('#userxx'+id+' .jiuren-chengyuangl-jj').hide();
             }
             else{
                 tipxx(result.info);
             }
         },'json');
     }
 </script>


 </body>
</html>