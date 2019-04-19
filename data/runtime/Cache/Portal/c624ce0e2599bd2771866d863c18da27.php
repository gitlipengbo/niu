<?php if (!defined('THINK_PATH')) exit();?><html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title>俱乐部成员管理</title> 
  <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/public.css?v=<?php echo time(); ?>" /> 
  <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/alert.css" /> 
  <link rel="stylesheet" href="/themes_debug/gameserver/Public/css/swiper-3.4.2.min.css" />  
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/bullalert.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/bullshop.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/common/alert.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/activity.css">
  <link rel="stylesheet" type="text/css" href="/themes_debug/gameserver/Public/css/test.css?v=<?php echo time(); ?>"> 
  <script src="/themes_debug/gameserver/Public/js/homepage/jq.js" type="text/javascript"></script>  
  <script src="/themes_debug/gameserver/Public/js/homepage/home.js" type="text/javascript"></script>  
  <script src="/themes_debug/gameserver/Public/js/swiper-3.4.2.min.js" type="text/javascript"></script> 
 <style type="text/css">
h1 {font-size: 13px}
</style>
  </head> 
   <body> 
  <img class='' src="/themes_debug/gameserver/Public/img/activity/nn.jpg" style="width: 100%;position:fixed;margin:0 auto;" />
 <div id="fasongfk" background: rgb(14, 2, 38);height: 100%;position: fixed; width: 100%;">
 <div id="app-main" class="main" style="position: relative; width: 100%; margin: 0px auto; background: rgb(14, 2, 38); display: block;">
   <div id="valert" class="alert" style="display: none;">
    <div class="alertBack"></div> 
    <div class="mainPart">
     <div class="backImg">
      <div class="blackImg"></div>
     </div> 
     <div class="alertText" id="tipmsg"></div> 
     <div>
      <div class="buttonLeft">
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
      <?php if(is_array($qun)): foreach($qun as $key=>$one): ?><div style="<?php if($one["zt"] == 1): ?>height: 28vw;<?php endif; ?>" class='qun-bg' id="userxx<?php echo ($one["uid"]); ?>">
      <img src="<?php echo (userimg($one["uid"])); ?>" style="position: absolute; top: 3vw; left: 3vw; width: 12vw; height: 12vw;" /> 
      <div style="position: absolute; top: 3vw; width: 100%; left: 18vw; font-size: 12pt; color: white; text-align: left;"><?php echo (username($one["uid"])); ?></div> 
      <div class="jiuren-chengyuangl-yhid">ID:<?php echo ($one["uid"]); ?></div> 
      <div class="jiuren-chengyuangl-ty" <?php if($one['zt'] == 0): ?>style="display:block"<?php endif; ?> onclick="tongyi(<?php echo ($one["uid"]); ?>)">
        同意 
      </div> 
      <div class="jiuren-chengyuangl-jj" <?php if($one['zt'] == 0): ?>style="display:block"<?php endif; ?> onclick="jvjue(<?php echo ($one["uid"]); ?>)">
        拒绝 
      </div>
      <div class="jiuren-chengyuangl-tc" <?php if($one['zt'] == 1): ?>style="display:block"<?php endif; ?> onclick="tichu(<?php echo ($one["uid"]); ?>)">
        踢出 
      </div>
	  <?php if($one['zt'] == 1): ?><div class="jiuren-chengyuangl-credits">
		<span>积分:</span>
		<span><?php echo ($one["credits"]); ?></span>
	  </div>
	  <div>
		<!-- <div class="jiuren-chengyuangl-asc" <?php if($one['zt'] == 1): ?>style="display:block"<?php endif; ?> onclick="addSubCredits(this)">上下分</div> -->
		<div class="addOrSubCredits" style="display: block">
		  <input type="text" class="creditsCount" placeholder="积分数量" />
          <div class="addCredits" onclick="addCredits(this, <?php echo ($one["uid"]); ?>)"><h1>上分</h1></div>
		  <div class="subCredits" onclick="subCredits(this, <?php echo ($one["uid"]); ?>)"><h1>下分</h1></div>
		</div>
	  </div><?php endif; ?>
     </div><?php endforeach; endif; ?>
     <div class='jiuren-chengyuangl-mygd'  id="moretext">
      没有更多内容
     </div>
    </div>
   </div>
  </div>
 </div>
<div id="fasongfking"></div>
 </body>
 <script>
 function tipxx(msg, callback){
  $('#tipmsg').html(msg);
  $('#valert').show();
  $("#valert .buttonLeft").off("click").on("click", function(e) {
  	$("#valert").hide();
    if(callback) {
    	callback();
    }
  });
}
function addSubCredits(obj) {
	var $_this = $(obj);
  	if($_this.is(":hidden")) {
    	$_this.show().next().hide();
    } else {
    	$_this.hide().next().show();
    }
}

function addCredits(obj, wjuid) {
	var $_this = $(obj);
  	var credits = $_this.prev().val();
  	addOrSubCredits(credits, 1, wjuid);
}
   
function subCredits(obj, wjuid) {
	var $_this = $(obj);
  	var credits = $_this.prev().prev().val();
  	addOrSubCredits(credits, 2, wjuid);
}
   
function addOrSubCredits(credits, opType, touid) {
	if(credits <= 0) {
    	tipxx("操作积分数量必须大于0！");
      	return;
    }
  	var param = {
    	"credits": credits,
      	"opType": opType,
      	"touid": touid
    };
  	$.post("/Portal/Home/addOrSubCredits", param, function(result) {
    	tipxx(result.info);
      	if(result.status == '1'){
          	setTimeout(function () {
              	window.location.reload();
            }, 2000);
        }
    }, "json");
}
   
function tongyi(id){
      $.post("/index.php/portal/home/quncz/",{id:id,zt:1},function(result){
        if(result.status == "1"){
            tipxx("同意成功", function() {
            	window.location.reload();
            });
            /* $('#userxx'+id+' .jiuren-chengyuangl-ty').hide();
            $('#userxx'+id+' .jiuren-chengyuangl-jj').hide();
            $('#userxx'+id+' .jiuren-chengyuangl-tc').show(); */
        }
        else{
          tipxx(result.info);
        }
      },'json');
}
function jvjue(id){
      $.post("/index.php/portal/home/quncz/",{id:id,zt:0},function(result){
        if(result.status=='1'){
            tipxx('拒绝成功');
            $('#userxx'+id).remove();
        }
        else{
          tipxx(result.info);
        }
      },'json');
}
function tichu(id){
      $.post("/index.php/portal/home/quncz/",{id:id,zt:0},function(result){
        if(result.status=='1'){
            tipxx('踢出成功');
            $('#userxx'+id).remove();
        }
        else{
          tipxx(result.info);
        }
      },'json');
}
</script>
</html>