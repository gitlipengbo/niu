<?php if (!defined('THINK_PATH')) exit();?><html onapp="app" style="height: 100%;width: 100%;"> <head> <meta charset="utf-8" /> <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
<meta name="format-detection" content="telephone=no" /> 
<meta name="msapplication-tap-highlight" content="no" /> 
<meta name="x5-fullscreen" content="true"> 
<meta name="full-screen" content="yes"> 
<title>牛来了大厅</title> 
<link rel="stylesheet" href="/app/css/loading.css" /> 
<link rel="stylesheet" type="text/css" href="/app/css/public_newui.css?t=<?php echo time(); ?>"> 
<link rel="stylesheet" href="/app/css/app.css?t=<?php echo time(); ?>" /> 
<link rel="stylesheet" type="text/css" href="/app/css/common/common.css?t=<?php echo time(); ?>" />
<style>   .blueBack{
        height: 50vh !important;
   }

   .main{
    position: absolute;
   } 
  </style> 
  <script src="/app/open/js/jweixin-1.0.0.js"></script> 
  <script src="/app/js/homepage/jq.js" type="text/javascript"></script> 
  <script src="/app/js/homepage/home.js" type="text/javascript"></script>
  <script type="text/javascript" src="/app/js/base64.js"></script>
  <script src="/app/js/app.js?t=<?php echo time(); ?>" type="text/javascript"></script>
  <script src="/app/js/jquery-3.3.1.js"></script>
  <script src="/app/js/jqNiceScroll/jquery.nicescroll.min.js"></script>
  <script src="/index.php/portal/index/gamejs" type="text/javascript"></script> 
  <script type="text/javascript" src="/app/js/tinybox.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    document.getElementById("room").addEventListener("click",function(e) {
      if(e.target && e.target.className == "cancelCreate") {
        // 真正的处理过程在这里
        $('#room').hide();
      }
    });
  });
  </script> 
  <style type="text/css">
  .cjfj-home-img9,.cjfj-home-img8,.cjfj-home-img7,.cjfj-home-img6,.cjfj-home-img5,.cjfj-home-img4,.cjfj-home-img3,.cjfj-home-img2,.cjfj-home-img12,.cjfj-home-img11,.cjfj-home-img10,.cjfj-home-img1{
    z-index: 100;
  }
  .createRoom .mainPart .cancelCreate{
    z-index: 200;
     cursor: pointer;
  }

  .information{font-size: 0.85rem; color: white; padding-top: 0.75rem; margin: 0 0.75rem; white-space: nowrap; overflow: hidden;width: 300px; z-index:193;}
  .myInfor{ width:1000px;overflow:hidden; z-index:193;}
  .myInfor p{ display:inline-block; z-index:193;font-size: 12px;}
  .information2 {
    width: 90%;
    height: 3%;
    position: fixed;
    top: 16.1vw;
    left: 1.2vw;
    color: white;
    z-index: 193;
    display: none;
}   
//*.xuanchuanyu1{
    color: white;
    position: absolute;
    top: 21vw;
    left: 10vw;
    text-align: center;
    width: 55vw;
    height: 5vw;
}*//
    
  </style> </head> 
  <body style="background: #000;height: 100%;width: 100%;" class="onscope">
    <div onclick="createRoom()" class="cjfj-puls"></div> 
    <img class="chuangjfj-bj" src="http://cdn.euo69.cn/app/skin/newui/background.jpg" />
    <img class="topImg" src="http://cdn.euo69.cn/app/skin/newui/topBackground.png" />
    <div style="display: none;">useless code just for fun</div> 
    <div class="user"> 
      <img  class="avatar" onclick="location.href='/portal/user/index'" src="" id="userimg"/> 
      <div class="name" id="nickname"></div>
    </div> 
    <div class="roomCard1">
      <img src="http://cdn.euo69.cn/app/skin/newui/roomCardNew.png"> 
      <div class="num" id="fknum">--</div>
      <!-- <div class="num1" id="credits">--</div> -->
    </div>
    <!-- <div id="credits-label" style="top: 6vw; left: 56vw; position: fixed; z-index: 99; font-size: 3.5vw; font-weight: 900;
                background-image: -webkit-gradient(linear, 0 0, 0 bottom, from(rgb(251, 253, 253)), to(rgb(147, 232, 89)));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;">
      <div style="font-size:3.5vw;left:20%">积分</div>
    </div> -->
    <div class="information information2" id="information">
      <div class="myInfor" id="myInfor">
        <p class="txt" id="myText"></p>
      </div>
    </div>
    <div class="enterRoom" onclick="enterRoom()"></div>
    <div class="enterMask" onclick="enterMask()" style="display:none"></div>
    <div class="enterNumber" style="display: none">
      <div class="enterClose"></div> 
      <div class="enterTitle">加入房间</div>
      <div class="enterDi">输入口令，和朋友一起玩</div>
      <div class="mainNumber">
        <span class="number0"></span>
        <span class="number1"></span>
        <span class="number2"></span>
        <span class="number3"></span>
        <span class="number4"></span>
        <span class="number5"></span>
        <span class="number6"></span>
      </div>
      <div class="mainKey">
        <div>
          <span class="mainKeyNum mainKey1">1</span> 
          <span class="mainKeyNum mainKey2">2</span> 
          <span class="mainKeyNum mainKey3">3</span>
        </div>
        <div>
          <span class="mainKeyNum mainKey4">4</span> 
          <span class="mainKeyNum mainKey5">5</span> 
          <span class="mainKeyNum mainKey6">6</span>
        </div>
        <div> 
          <span class="mainKeyNum mainKey7">7</span> 
          <span class="mainKeyNum mainKey8">8</span> 
          <span class="mainKeyNum mainKey9">9</span>
        </div>
        <div>
          <span class="mainKey10">重输</span>
          <span class="mainKeyNum mainKey11">0</span>
          <span class="mainKey12">回退</span>
        </div>
      </div>
    </div> 
  <div class="alertRoomM">请输入正确的房间号</div> 
  <div  style="width: 100%;height: auto;    position: absolute;z-index: 93;"> 
  <div class="cjfj-home-img99"> <div class="xuanchuanyu"></div> </div> 
 <!--div class="xuanchuanyu1"><marquee loop="15" behavior="scroll" scrollamount="3"><span style="font-weight: bolder;font-size: 14px;color:#CD00CD;font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;">官方牛来了，新版本房卡，积分双模式，绿色，公正游戏平台，招收代理或购卡联系客服VX--kf2018s</span></marquee></div-->
  <div class="cjfj-home-img0"> <div class="clickEnterRoom" onclick="send('gameserver',{id:2 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
  <div class="cjfj-home-img1"> <div class="clickEnterRoom" onclick="send('gameserver',{id:16 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
  <div class="cjfj-home-img2"> <div class="clickEnterRoom" onclick="send('gameserver',{id:1 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
  <div class="cjfj-home-img3"> <div class="clickEnterRoom" onclick="send('gameserver',{id:5 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
  <div class="cjfj-home-img4"> <div class="clickEnterRoom" onclick="send('gameserver',{id:10 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
  <div class="cjfj-home-img5"> <div class="clickEnterRoom" onclick="send('gameserver',{id:15 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
  <div class="cjfj-home-img6"> <div class="clickEnterRoom" onclick="send('gameserver',{id:14 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
  <div class="cjfj-home-img7"> <div class="clickEnterRoom" onclick="send('gameserver',{id:3 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
  <div class="cjfj-home-img8"> <div class="clickEnterRoom" onclick="send('gameserver',{id:4 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
  <div class="cjfj-home-img9"> <div class="clickEnterRoom" onclick="send('gameserver',{id:17 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
  <div class="cjfj-home-img10"> <div class="clickEnterRoom" onclick="send('gameserver',{id:6 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
    <div class="cjfj-home-img11"> <div class="clickEnterRoom" onclick="send('gameserver',{id:27 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
    <div class="cjfj-home-img12"> <div class="clickEnterRoom" onclick="send('gameserver',{id:26 ,uid:71980,flag:1,utm:'niulaile_auth_wx'})"></div> </div>
    <div class="cjfj-home-img999"></div>
  <div class="createRoom" style="display: none" id="room"></div> 
  <div class="navBar"> 
  <div class="navBarDiv shouye" onclick="location.href='/portal/index/index'"></div> 
  <div class="navBarDiv zhanji"  onclick="location.href='/portal/home/gerenzxkafangchaxun'"></div> 
  <div class="navBarDiv wode" onclick="location.href='/portal/user/index'"></div> 
  <div class="navBarDiv boxes" onclick="location.href='/portal/user/box'"></div>  
  <img class="guang" src="http://cdn.euo69.cn/app/skin/newui/guang.png" alt=""> </div> 
  <script>
      var wrapper = document.getElementById('information');
      var inner = document.getElementById('myInfor');
      var p = document.getElementById('myText');
      var p_w = p.offsetWidth;
      var wrapper_w = wrapper.offsetWidth;
      window.onload=function fun(){
          if(wrapper_w > p_w){ return false;}

          setTimeout("fun1()",2000);
      }
      function fun1(){
          if(p_w > wrapper.scrollLeft){
              wrapper.scrollLeft++;
              setTimeout("fun1()",30);
          }
          else{
              setTimeout("fun2()",2000);
          }
      }
      function fun2(){
          wrapper.scrollLeft=0;
          fun1();
      }


    function GoUrl(id){
		location.href="/game1.php?id="+id;
	}
     load('show');
     token='<?php echo ($token); ?>';
     if(dkxx){
      connect(dkxx);
    }
    else{
      load('hide');
      prompt('服务器没开启,请稍后再试');
      setTimeout("$('body').hide()",3000);
    }


     var numberArr = [];

     function enterRoom(){
        $('.enterMask').show();  
        $('.enterNumber').show();  
    };
    function enterMask(){
        $('.enterMask').hide();  
        $('.enterNumber').hide();  
    };

    $(".enterClose").on('click',function(){
      $('.enterMask').hide();  
        $('.enterNumber').hide(); 
   });
  
  function pushNumber(){
      for(var i=0;i<numberArr.length;i++){
      $('.number'+i).html(numberArr[i]);  
     }
  };

  $('.mainKeyNum').on('click', function(){
      var numArr = parseInt($(this).text());
      numberArr.push(numArr);
      pushNumber();
      if(numberArr.length > 7){
          numberArr.pop();
      }
      else if(numberArr.length == 7){
          roomNumber=numberArr.join("")
           $.post('/portal/index/checkRoomId', {'roomid':roomNumber}, function(result){
               if(result.code == 0){
                   window.location.href = '/portal/index/room.html?room=' + result.id;
               } else {
                  //  alert(result.msg);
                   $('.alertRoomM').show();
                   $('.alertRoomM').text(result.msg);
                   setTimeout("$('.alertRoomM').hide()", 5000);
               }
           }, 'json');

      }
      
 });

 $('.mainKey10').on('click', function(){
      numberArr = [];
      $('.mainNumber span').empty();
 });

 $('.mainKey12').on('click', function(){
  numberArr.pop()
  $('.mainNumber span').empty();
  pushNumber()

 });
 
  </script> </body> </html>