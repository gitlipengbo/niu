<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="x5-fullscreen" content="true">
    <meta name="full-screen" content="yes">
    <title><?php echo ($room["roomid"]); ?>号鱼虾蟹房间</title>
    <link rel="stylesheet" type="text/css" href="http://cdn.euo69.cn/app/css/bull_vue-2.0.3.css?1519886810810">
    <link rel="stylesheet" type="text/css" href="/static/css/common/alert-1.1.css">
    <link rel="stylesheet" type="text/css" href="/app/css/public-fish12.css">
    <link rel="stylesheet" type="text/css" href="/app/css/public12.css"/>
  <link rel="stylesheet" href="/app/css/app.css?v=<?php echo time(); ?>" /> 
    <link rel="stylesheet" href="/static/css/app.css" />
    <link rel="stylesheet" type="text/css" href="/app/css/fish12.css"/>
<style>
  .mainPart{
    position: relative;
    height: auto;
  }
  .alert .mainPart .id{
    position: relative;
  }
.alert .mainPart .alertText{
  position: relative;
}

.alert .mainPart{
  height: auto;
}
 .lishijilu{
         position: relative;background:url(http://goss.fexteam.com/files/images/common/alert3.png) 0% 0% / 100% 100% no-repeat;width: 82%;margin-left: 3.5vh;color: black;/* margin: auto; */margin-top: 2vh;height: 9vh;line-height: 4vh;font-size: 15px;border-radius: 6px;padding-left: 10px;padding-top: 1vh;
    }
@media screen and (max-width: 320px) {
    .lishijilu{
         position: relative;background: #a2befc;width: 82%;margin-left: 3.5vh;color: black;/* margin: auto; */margin-top: 2vh;height: 9vh;line-height: 4vh;font-size: 12px;border-radius: 6px;padding-left: 10px;padding-top: 1vh;
    }

}
        .tableLogo{
        position: absolute;
    width: 30vw;
    top: 47.5vh;
    left: 34vw;
  } 
.kadunB{
  width: 80px;
  height: 29px;
  position:fixed;
  z-index: 99;
  left: 1px;
  bottom:0.75vh;
  }

</style>
<script src="/app/js/jquery3.2.1.min.js" type="text/javascript"></script>
<script src="/app/js/fastclick.js" type="text/javascript"></script>
<script src="/app/js/homepage/home.js" type="text/javascript"></script>
<script type="text/javascript" src="/static/js/base64.js"></script>
<script src="/static/js/app.js?t=<?php echo time(); ?>" type="text/javascript"></script>
<script src="/app/js/game26.js?v=<?php echo time(); ?>" type="text/javascript"></script>
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript"></script>
<script type="text/javascript">
    $.fn.touch = function(callback) {
        this.each(function() {
            if (typeof(callback) == 'function') {
                if (navigator.userAgent.indexOf('QQBrowser') > 0) {
                    $(this).on('click', callback);
                } else {
                    var time = 0;
                    this.fn = callback;
                    $(this).on('touchstart',
                        function() {
                            time = (new Date()).getTime();
                        });
                    $(this).on('touchend',
                        function() {
                            if ((new Date()).getTime() - time <= 300) {
                                this.fn(this);
                            }
                        });
                }
            } else {
                if (navigator.userAgent.indexOf('QQBrowser') > 0) {
                    $(this).click();
                } else {
                    this.fn(this);
                }
            }
        });
    };

    $.fn.overscroll = function() {
        this.on('touchstart',
            function(event) {
                $(document.body).off('touchmove');
            });
        this.on('touchend',
            function(event) {
                $(document.body).on('touchmove',
                    function(evt) {
                        evt.preventDefault();
                    });
            });
    };

    $.alert = function(msg, fn, style, sec) {
        style = style || 'success';
        if (typeof(fn) == 'string') {
            style = fn;
        }
        if (!sec) {
            if (style == 'error' || style == 'puncherror') {
                sec = 9;
            } else {
                sec = 0;
            }
        }
        var box = $('<div>').addClass('resourceBox ' + style).attr('id', 'alertBox');
        box.html('<div class="context">' + msg + '</div>');
        box.appendTo('body');
        var h = $(window).width() / 360 * 100;
        box.css({
            'opacity': 1,
            'margin-top': -1 * (box.height() + h) / 2
        });
        if (sec >= 9) {
            var alertBoxLay = $('<div>').addClass('alertBoxLay').appendTo('body');
            $('<a>').attr('href', 'javascript:void(0);').addClass('closed').appendTo(box).text('我知道了');
            $('#alertBox a.closed, .alertBoxLay').click(function() {
                box.css({
                    'opacity': 0,
                    'margin-top': -1 * (box.height() + h)
                });
                alertBoxLay.css('opacity', 0);
                setTimeout(function() {
                        box.remove();
                        alertBoxLay.remove();
                        if (typeof(fn) == 'function') fn();
                    },
                    500);
            });
        } else {
            setTimeout(function() {
                    box.css({
                        'opacity': 0,
                        'margin-top': -1 * (box.height() + h)
                    });
                    setTimeout(function() {
                            box.remove();
                            if (typeof(fn) == 'function') fn();
                        },
                        500);
                },
                1000 + sec * 1000);
        }
    };

    function alert2(msg, fn, style, sec) {
        style = style || 'success';
        if (typeof(fn) == 'string') {
            style = fn;
        }
        if (!sec) {
            if (style == 'error' || style == 'puncherror') {
                sec = 9;
            } else {
                sec = 0;
            }
        }
        var box = document.createElement('div');
        box.className = 'resourceBox ' + style;
        box.id = 'alertBox';
        box.innerHTML = '<div class="context">' + msg + '</div>';
        document.getElementsByTagName('body')[0].appendChild(box);
        var h = $(window).width() / 360 * 100;
        box.style.opacity = 1;
        box.style.marginTop = -1 * (box.offsetHeight + h) / 2 + 'px';
        if (sec >= 9) {
            var alertBoxLay = document.createElement('div');
            alertBoxLay.className = 'alertBoxLay';
            document.getElementsByTagName('body')[0].appendChild(alertBoxLay);
            var BtnA = document.createElement('a');
            BtnA.innerText = '我知道了';
            BtnA.setAttribute('href', 'javascript:void(0);');
            BtnA.className = 'closed';
            box.appendChild(BtnA);
            alertBoxLay.addEventListener('click',
                function() {
                    box.style.opacity = 0;
                    box.style.marginTop = -1 * (box.offsetHeight + h) + 'px';
                    this.style.opacity = 0;
                    setTimeout(function() {
                            document.getElementsByTagName('body')[0].removeChild(box);
                            document.getElementsByTagName('body')[0].removeChild(alertBoxLay);
                            if (typeof(fn) == 'function') fn();
                        },
                        500);
                })
        } else {
            setTimeout(function() {
                    box.style.opacity = 0;
                    box.style.marginTop = -1 * (box.offsetHeight + h) + 'px';
                    setTimeout(function() {
                            document.getElementsByTagName('body')[0].removeChild(box);
                            if (typeof(fn) == 'function') fn();
                        },
                        500);
                },
                1000 + sec * 1000);
        }
    }
</script>

<script>
    window.roomID = "<?php echo ($room['id']); ?>";
$(function() {
    FastClick.attach(document.body);
});
  var url =window.location.href;//用户要分享的网址
  var title  = '<?php echo ($room["roomid"]); ?> 号鱼虾蟹房间';//分享的标题
  var shareimg = 'http://'+window.location.hostname+'/themes_debug/gameserver/Public/img/activity/fish.png';//分享的图片
  var desc = '<?php if($room['wfname']): ?>模式： <?php echo ($room['wfname']); endif; ?> <?php if($room['df']): ?>底分：<?php echo ($room['df']); endif; ?> <?php if($room['gz']): ?>规则：<?php echo ($room['gz']); endif; ?> <?php if($room['zjs']): ?>局数：<?php echo ($room['zjs']); endif; ?>,快来嗨吧！';//分享的描述信息
    WeChat(url,title,shareimg,desc);
</script>
</head>
 <body>

 <?php $fangzhu=M('user')->find($room['uid']); ?>
 <script type="text/javascript">
     window.fangzhu = {
         "nickname" : "<?php echo ($fangzhu["nickname"]); ?>",
         "skinname" : "<?php echo ($skin[$fangzhu['password']]); ?>"
     };
 </script>

 <audio onended="mp3playandpause('1miao');" id="1miao" src="/app/video/1miao.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu0');" id="mp3niu0" src="/app/video/nan_niu0.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu1');" id="mp3niu1" src="/app/video/nan_niu1.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu2');" id="mp3niu2" src="/app/video/nan_niu2.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu3');" id="mp3niu3" src="/app/video/nan_niu3.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu4');" id="mp3niu4" src="/app/video/nan_niu4.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu5');" id="mp3niu5" src="/app/video/nan_niu5.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu6');" id="mp3niu6" src="/app/video/nan_niu6.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu7');" id="mp3niu7" src="/app/video/nan_niu7.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu8');" id="mp3niu8" src="/app/video/nan_niu8.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu9');" id="mp3niu9" src="/app/video/nan_niu9.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu10');" id="mp3niu10" src="/app/video/nan_niuniu.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu11');" id="mp3niu11" src="/app/video/nan_wuhua.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu12');" id="mp3niu12" src="/app/video/nan_zha.mp3"></audio>
 <audio onended="mp3playandpause('mp3niu13');" id="mp3niu13" src="/app/video/nan_wuxiao.mp3"></audio>

 <audio onended="mp3playandpause('mp3daojishi');" id="mp3daojishi" src="/app/video/daojishi.mp3"></audio>
 <audio onended="mp3playandpause('mp3gold');" id="mp3gold" src="/app/video/gold.mp3"></audio>
 <audio onended="mp3playandpause('mp3kaiju');" id="mp3kaiju" src="/app/video/kaiju.mp3"></audio>
 <audio onended="mp3playandpause('fapai');" id="fapai" src="/app/video/audio1.m4a"></audio>

 <audio onended="mp3playandpause('yafen_start');" id="yafen_start" src="/app/img/beastfish/mp3/xiazhu.m4a"></audio>
 <audio onended="mp3playandpause('shake');" id="shake" src="/app/img/beastfish/mp3/yaoshai1.m4a"></audio>
 <audio onended="mp3playandpause('kaizhuang');" id="kaizhuang" src="/app/img/beastfish/mp3/kaizhong.m4a"></audio>
 <audio onended="mp3playandpause('fish1');" id="fish1" src="/app/img/beastfish/mp3/s1.m4a"></audio>
 <audio onended="mp3playandpause('fish2');" id="fish2" src="/app/img/beastfish/mp3/s2.m4a"></audio>
 <audio onended="mp3playandpause('fish3');" id="fish3" src="/app/img/beastfish/mp3/s3.m4a"></audio>
 <audio onended="mp3playandpause('fish4');" id="fish4" src="/app/img/beastfish/mp3/s4.m4a"></audio>
 <audio onended="mp3playandpause('fish5');" id="fish5" src="/app/img/beastfish/mp3/s5.m4a"></audio>
 <audio onended="mp3playandpause('fish6');" id="fish6" src="/app/img/beastfish/mp3/s6.m4a"></audio>
 <audio onended="mp3playandpause('point3');" id="point3" src="/app/img/beastfish/mp3/point3.m4a"></audio>
 <audio onended="mp3playandpause('point4');" id="point4" src="/app/img/beastfish/mp3/point4.m4a"></audio>
 <audio onended="mp3playandpause('point5');" id="point5" src="/app/img/beastfish/mp3/point5.m4a"></audio>
 <audio onended="mp3playandpause('point6');" id="point6" src="/app/img/beastfish/mp3/point6.m4a"></audio>
 <audio onended="mp3playandpause('point7');" id="point7" src="/app/img/beastfish/mp3/point7.m4a"></audio>
 <audio onended="mp3playandpause('point8');" id="point8" src="/app/img/beastfish/mp3/point8.m4a"></audio>
 <audio onended="mp3playandpause('point9');" id="point9" src="/app/img/beastfish/mp3/point9.m4a"></audio>
 <audio onended="mp3playandpause('point10');" id="point10" src="/app/img/beastfish/mp3/point10.m4a"></audio>
 <audio onended="mp3playandpause('point11');" id="point11" src="/app/img/beastfish/mp3/point11.m4a"></audio>
 <audio onended="mp3playandpause('point12');" id="point12" src="/app/img/beastfish/mp3/point12.m4a"></audio>
 <audio onended="mp3playandpause('point13');" id="point13" src="/app/img/beastfish/mp3/point13.m4a"></audio>
 <audio onended="mp3playandpause('point14');" id="point14" src="/app/img/beastfish/mp3/point14.m4a"></audio>
 <audio onended="mp3playandpause('point15');" id="point15" src="/app/img/beastfish/mp3/point15.m4a"></audio>
 <audio onended="mp3playandpause('point16');" id="point16" src="/app/img/beastfish/mp3/point16.m4a"></audio>
 <audio onended="mp3playandpause('point17');" id="point17" src="/app/img/beastfish/mp3/point17.m4a"></audio>
 <audio onended="mp3playandpause('point18');" id="point18" src="/app/img/beastfish/mp3/point18.m4a"></audio>



 <audio onended="mp3playandpause('message1');" id="message1" src="/app/message/message1.mp3"></audio>
 <audio onended="mp3playandpause('message2');" id="message2" src="/app/message/message2.mp3"></audio>
 <audio onended="mp3playandpause('message3');" id="message3" src="/app/message/message3.mp3"></audio>
 <audio onended="mp3playandpause('message4');" id="message4" src="/app/message/message4.mp3"></audio>
 <audio onended="mp3playandpause('message5');" id="message5" src="/app/message/message5.mp3"></audio>
 <audio onended="mp3playandpause('message6');" id="message6" src="/app/message/message6.mp3"></audio>
 <audio onended="mp3playandpause('message7');" id="message7" src="/app/message/message7.mp3"></audio>
 <audio onended="mp3playandpause('message8');" id="message8" src="/app/message/message8.mp3"></audio>
 <audio onended="mp3playandpause('message9');" id="message9" src="/app/message/message9.mp3"></audio>
 <audio onended="mp3playandpause('message10');" id="message10" src="/app/message/message10.mp3"></audio>
 <audio onended="mp3playandpause('message11');" id="message11" src="/app/message/message11.mp3"></audio>


 <audio id="background" src="/app/img/beastfish/mp3/background1.mp3" ></audio>
 <!--下注抢庄-->
 <audio onended="mp3playandpause('xia1');" id="xia1" src="/app/video/zhuang/1.mp3"></audio>
 <audio onended="mp3playandpause('xia2');" id="xia2" src="/app/video/zhuang/2.mp3"></audio>
 <audio onended="mp3playandpause('xia4');" id="xia4" src="/app/video/zhuang/4.mp3"></audio>
 <audio onended="mp3playandpause('xia5');" id="xia5" src="/app/video/zhuang/5.mp3"></audio>
 <audio onended="mp3playandpause('qiangzhuang');" id="qiangzhuang" src="/app/video/zhuang/qiangzhuang.mp3"></audio>
 <audio onended="mp3playandpause('buqiang');" id="buqiang" src="/app/video/zhuang/buqiang.mp3"></audio>
<script type="text/javascript">
    window.AudioContext = window.AudioContext || window.webkitAudioContext || window.mozAudioContext || window.msAudioContext;
    var context = new (window.AudioContext || window.webkitAudioContext)();
    var source = [];
    var audioBuffer = [];
    var gainNodebg = null;
    var gainNode = null;

    function mp3play(id){
        if(id!='background' &&　mp3open==2){
            return false;
        }
        //document.getElementById(id).play();
        if(!audioBuffer[id]){
            loadAudioFile(id);
        }
        if(source[id]){
            if(typeof(source[id].stop)=='function'){
                source[id].stop();
            }
            source[id]=null;
        }
        source[id] = context.createBufferSource();
        source[id].buffer = audioBuffer[id];
        if(id=='background'){
            source[id].loop = true;
        }
        else{
            source[id].loop = false;
        }
        source[id].connect(context.destination);
        source[id].start(0); //立即播放
    }
    function mp3pause(id){
        //document.getElementById(id).pause();
        if (source[id]) {
            source[id].loop = false;
            source[id].stop(); //立即停止
            source[id]=null;
        }
    }

    function mp3playandpause(id){
        mp3play(id);
        mp3pause(id);
    }


    function initSound(arrayBuffer,id) {
        context.decodeAudioData(arrayBuffer, function(buffer) { //解码成功时的回调函数
            audioBuffer[id] = buffer;
            if(bgmp3open==1 && id == 'background') {
                mp3play('background');
            }
        }, function(e) { //解码出错时的回调函数
            console.log('Error decoding file '+id, e);
        });
    }


    function loadAudioFile(id) {
        var url=$('#'+id).attr('src');
        var xhr = new XMLHttpRequest(); //通过XHR下载音频文件
        xhr.open('GET', url, true);
        xhr.responseType = 'arraybuffer';
        xhr.onload = function(e) { //下载完成
            window.soundCount --;
            initSound(this.response,id);
        };
        xhr.send();
    }


    window.soundCount = 0;
    function audioAutoPlay(id){
        window.soundCount ++;
        loadAudioFile(id);
    }

    function muiscready(){
        audioAutoPlay('mp3niu0');
        audioAutoPlay('mp3niu1');
        audioAutoPlay('mp3niu2');
        audioAutoPlay('mp3niu3');
        audioAutoPlay('mp3niu4');
        audioAutoPlay('mp3niu5');
        audioAutoPlay('mp3niu6');
        audioAutoPlay('mp3niu7');
        audioAutoPlay('mp3niu8');
        audioAutoPlay('mp3niu9');
        audioAutoPlay('mp3niu10');
        audioAutoPlay('mp3niu11');
        audioAutoPlay('mp3niu12');
        audioAutoPlay('mp3niu13');
        audioAutoPlay('background');

        audioAutoPlay('mp3daojishi');
        audioAutoPlay('mp3gold');
        audioAutoPlay('mp3kaiju');

        audioAutoPlay('fapai');

        audioAutoPlay('shake');
        audioAutoPlay('yafen_start');
        audioAutoPlay('kaizhuang');
        audioAutoPlay('fish1');
        audioAutoPlay('fish2');
        audioAutoPlay('fish3');
        audioAutoPlay('fish4');
        audioAutoPlay('fish5');
        audioAutoPlay('fish6');
        audioAutoPlay('point3');
        audioAutoPlay('point4');
        audioAutoPlay('point5');
        audioAutoPlay('point6');
        audioAutoPlay('point7');
        audioAutoPlay('point8');
        audioAutoPlay('point9');
        audioAutoPlay('point10');
        audioAutoPlay('point11');
        audioAutoPlay('point12');
        audioAutoPlay('point13');
        audioAutoPlay('point14');
        audioAutoPlay('point15');
        audioAutoPlay('point16');
        audioAutoPlay('point17');
        audioAutoPlay('point18');


        audioAutoPlay('message1');
        audioAutoPlay('message2');
        audioAutoPlay('message3');
        audioAutoPlay('message4');
        audioAutoPlay('message5');
        audioAutoPlay('message6');
        audioAutoPlay('message7');
        audioAutoPlay('message8');
        audioAutoPlay('message9');
        audioAutoPlay('message10');
        audioAutoPlay('message11');


        audioAutoPlay('xia1');
        audioAutoPlay('xia2');
        audioAutoPlay('xia4');
        audioAutoPlay('xia5');
        audioAutoPlay('qiangzhuang');
        audioAutoPlay('buqiang');
        if(bgmp3open==1){
            setTimeout(function(){
                //mp3pause('background');
                //mp3play('background');
            },2000)
        }
        if(bgmp3open==2){
            mp3pause('background');
        }
    }
    $(function () {
        muiscready();
    });

    function showhistory() {
        var $obj = $("#history");
        if($obj.css("display") == "none")
            $obj.css("display", "block");
        else
            $obj.css("display", "none");
    }
</script>

    <div id="overtime" style="display: none">
        <canvas id="myCanvas" width="800" height="1297" style="display: none"></canvas>
    </div>
 <?php if($room['endtime'] > 0): $mapxx=array(); $mapxx['uid']=$user['id']; $mapxx['room']=$room['id']; if(M('user_room')->where($mapxx)->find()){ ?>
     <script type="text/javascript">
         var data={};
         data.id=<?php echo ($room['roomid']); ?>;
         data.zjs=<?php echo ($room['zjs']); ?>;
         data.time='<?php echo (date("Y-m-d H:i:s",$room['time'])); ?>';
         data.user=<?php echo ($room['overxx']); ?>;
         <?php $overxx=json_decode($room['overxx'],true); foreach($overxx as $key=>$value){ $nickname=base64_encode(usernickname($value[id])); echo 'data.user["'.$key.'"]["nickname"]="'.$nickname.'";'; } $fangzhu=M('user')->find($room['uid']); ?>
         data.fangzhu=[];
         data.fangzhu.nickname='<?php echo ($fangzhu["nickname"]); ?>';
         overroom(data);
     </script>

     <?php exit(); } else{ ?>
     <script type="text/javascript">
         document.title = '温馨提示';
     </script>
     <div id="valert2" class="alert">
         <div class="alertBack" style="opacity: 1;"></div>
         <div class="mainPart" style="height: 27%;margin-top: -113.39px;">
             <div class="backImg">
                 <div class="blackImg" style="height: 82%;"></div>
             </div>
             <div class="alertText" style="top: 45%;" id="tipmsg">房间已经关闭</div>


         </div>
     </div>
     <?php } exit(); endif; ?>


<?php if($fzuser['sfgl'] && (!$mayuser[$user['id']])): ?><script type="text/javascript">
        alert2('无法加入，请联系管理员。', function () {
            wx.closeWindow();
        });
  </script>
  <?php exit(); endif; ?>


 <div id="history" style="display: none;" class="history">
     <div id="history-box" class="history-box">
         <!--<div class="item">
             <div class="hjs">1</div>
             <div class="himg">
                 <img src="/app/img/beastfish/t1.png"/>
             </div>
             <div class="himg">
                 <img src="/app/img/beastfish/t2.png"/>
             </div>
             <div class="himg">
                 <img src="/app/img/beastfish/t3.png"/>
             </div>
             <div class="htext">大</div>
         </div>-->
     </div>
 </div>

<!-- fake-code-here --> 
<!--
 <div class="roomCard">
     <img src="/app/img/game/roomCard.png" />
     <div class="num">
         <div class='shier-fk'></div>
         <div class='shier-fk-1' id="fknum"><?php echo ($user['fk']); ?>张</div>
     </div>
 </div>
 --> 
   <img class="kadun kadunB" src="http://cdn.euo69.cn/app/img/kadun2.png" onclick="location.reload()">
   <!--<div class="roomCard" style="left: 16vh;">
     <span>积分:</span>
   	<div class="num">
        <div class='shier-fk'></div>
        <div class='shier-fk-1' id="credits"><?php echo ($user['credits']); ?></div>
    </div>
   </div>-->

 <img src="/app/img/bull9/tab_bottom.png" alt="" class="tabBottom" />
 <div style="width: 20%; right: 3%; position: absolute; top: 1.5%; z-index: 91; text-align: center; background-color: black; border-radius: 1.8vh; opacity: 0.5; height: 3.2vh;"></div>
 <div class="round shier-round" style="" id="jsxx">
     <?php echo ($room["js"]); ?>&nbsp;/&nbsp;<?php echo ($room["zjs"]); ?> 局
 </div>

 <img src="/app/img/bull9/btn_game_home.png" class="return"  onclick="opnemm('fangjian_fanhuisy','tishi')" />
 <img src="/app/img/common/f_record.png" style="right: 28.5vh;" class="return shier-return" onclick="showhistory()"/>
 <img src="/app/img/bull9/btn_game_rule.png" style="right: 22vh;" class="bGameRule shier-bGameRule" onclick="opnemm('fangjian_gz','vroomRule')" />

 <div class="myCardTypeBG"></div>
 <div class="myCardType" style="overflow: hidden;">
     <div id="df" style="
    overflow: hidden;
">
         上限：<?php echo ($room["sx"]); ?>
     </div>
 </div>
 <div class="bottomMessage"  onclick="opnemm('fangjian_kj','message')">
     <img src="/app/img/bull9/bull_message.png" style="width: 100%; height: 100%;" class='shier-bottomMessage-img'  />
 </div>
 <div class="bottomHistory shier-bottomHistory" style="right: 15.5vh;" onclick="opnemm('fangjian_yinyue','vaudioRoom')">
     <img class="shier-bottomHistory-img" style="width:100%;height: 100%;" src="/app/img/common/icon_sound91.png"/>
 </div>

 <div id="messageSay">
  </div>
  <div id="tishi" class="alert" style="display: none;"></div> 	
  <div id="vaudioRoom" class="audioRoom" style="display: none;"></div> 
  <div id="vroomRule" class="createRoom" style="display: none;"></div>
  <div id='message' class="message" style="
    display: none;overflow: hidden;
"></div>

   <div id="table" class="table">
    <img src="/app/img/bull9/bull_bg.png" class="tableBack" />
    <img src="http://cdn.euo69.cn/app/img/blue.png" class="tableLogo">
   </div>
   <div class="cardDeal" id="userfp"></div>


     <div class="myCards" style="display: none;"></div>


  <div class="myCards" style="display: none;"></div>

 <div class="myCards" style="display: none;"></div>



    <div class="cardOver" style="position: absolute; width: 100%; height: 100%; overflow: hidden;"></div>

     <div class="area">
         <!---->
         <div id="panel" class="land panel">
             <div class="middleBack ground">
                 <div class="background"></div>
                 <div style="position: relative; margin-top: 2vw;">
                     <div>
                         私无公大
                     </div>
                     <div>
                         算不骰翘
                     </div>
                 </div>
             </div>
             <div class="ground ground1 item yu" data-type="1">
                 <div class="clickArea"></div>
                 <div class="totalScore">
                     <div class="total" style="display: none;">
                         0
                     </div>
                 </div>
                 <div class="middleArea wp">
                     <div class="background"></div>
                     <div class="backgroundSelect" style="display: none;"></div>
                     <img src="http://goss.fexteam.com/files/d_30/images/fish/s1.png" />
                 </div>
                 <div class="singleScore">
                     <div class="my" style="display: none;">
                         0
                     </div>
                 </div>
             </div>
             <div class="ground ground2 item xia" data-type="2">
                 <div class="clickArea"></div>
                 <div class="totalScore">
                     <div class="total" style="display: none;">
                         0
                     </div>
                 </div>
                 <div class="middleArea wp">
                     <div class="background"></div>
                     <div class="backgroundSelect" style="display: none;"></div>
                     <img src="http://goss.fexteam.com/files/d_30/images/fish/s2.png" />
                 </div>
                 <div class="singleScore">
                     <div class="my" style="display: none;">
                         0
                     </div>
                 </div>
             </div>
             <div class="ground ground3 item hulu" data-type="3">
                 <div class="clickArea"></div>
                 <div class="totalScore">
                     <div class="total" style="display: none;">
                         0
                     </div>
                 </div>
                 <div class="middleArea wp">
                     <div class="background"></div>
                     <div class="backgroundSelect" style="display: none;"></div>
                     <img src="http://goss.fexteam.com/files/d_30/images/fish/s3.png" />
                 </div>
                 <div class="singleScore">
                     <div class="my" style="display: none;">
                         0
                     </div>
                 </div>
             </div>
             <div class="ground ground4 item qian" data-type="4">
                 <div class="clickArea"></div>
                 <div class="totalScore">
                     <div class="total" style="display: none;">
                         0
                     </div>
                 </div>
                 <div class="middleArea wp">
                     <div class="background"></div>
                     <div class="backgroundSelect" style="display: none;"></div>
                     <img src="http://goss.fexteam.com/files/d_30/images/fish/s4.png" />
                 </div>
                 <div class="singleScore">
                     <div class="my" style="display: none;">
                         0
                     </div>
                 </div>
             </div>
             <div class="ground ground5 item xie" data-type="5">
                 <div class="clickArea"></div>
                 <div class="totalScore">
                     <div class="total" style="display: none;">
                         0
                     </div>
                 </div>
                 <div class="middleArea wp">
                     <div class="background"></div>
                     <div class="backgroundSelect" style="display: none;"></div>
                     <img src="http://goss.fexteam.com/files/d_30/images/fish/s5.png" />
                 </div>
                 <div class="singleScore">
                     <div class="my" style="display: none;">
                         0
                     </div>
                 </div>
             </div>
             <div class="ground ground6 item ji" data-type="6">
                 <div class="clickArea"></div>
                 <div class="totalScore">
                     <div class="total" style="display: none;">
                         0
                     </div>
                 </div>
                 <div class="middleArea wp">
                     <div class="background"></div>
                     <div class="backgroundSelect" style="display: none;"></div>
                     <img src="http://goss.fexteam.com/files/d_30/images/fish/s6.png" />
                 </div>
                 <div class="singleScore">
                     <div class="my" style="display: none;">
                         0
                     </div>
                 </div>
             </div>
             <div class="ground ground7 item little" data-type="little">
                 <div class="clickArea"></div>
                 <div class="totalScore">
                     <div class="total" style="display: none;">
                         0
                     </div>
                 </div>
                 <div class="middleArea wp">
                     <div class="background"></div>
                     <div class="backgroundSelect" style="display: none;"></div>
                     <img src="http://goss.fexteam.com/files/d_30/images/fish/s7.png" />
                 </div>
                 <div class="singleScore">
                     <div class="my" style="display: none;">
                         0
                     </div>
                 </div>
             </div>
             <div class="ground ground8 item big" data-type="big">
                 <div class="clickArea"></div>
                 <div class="totalScore">
                     <div class="total" style="display: none;">
                         0
                     </div>
                 </div>
                 <div class="middleArea wp">
                     <div class="background"></div>
                     <div class="backgroundSelect" style="display: none;"></div>
                     <img src="http://goss.fexteam.com/files/d_30/images/fish/s8.png" />
                 </div>
                 <div class="singleScore">
                     <div class="my" style="display: none;">
                         0
                     </div>
                 </div>
             </div>

             <div class="cup zhong2 maozi"></div>
             <div class="open"></div>
         </div>
         <!---->
     </div>

    <div id="memberTimesText"></div> 
    <div id="memberTimesText2"></div> 
    
    <div id="memberRobText"></div>
    <div id="memberFreeRobText"></div>
    <div id="memberBull"></div>
    

    <div id="memberScoreText1"></div>
    
    <div id="member"></div> 


    <div id="jinbi"></div> 


    <div>
      <div class="triangle"></div>
    </div>

       <div class="rules-mask">
           <div class="content">
               <div class="title">游戏规则</div>
               <div class="niuniu-rules">
                   <div class="flex-cont" data-pos="1">
                       <div class="name">
                           底分：
                       </div>
                       <div class="flex-item"><?php echo ($room['df']); ?></div>
                   </div>
                   <div class="flex-cont" data-pos="2">
                       <div class="name">
                           规则：
                       </div>
                       <div class="flex-item"><?php echo ($room['gz']); ?></div>
                   </div>

                   <?php if( ! empty( $room['px'] ) ): ?>
                   <div class="flex-cont rules-item" data-pos="3">
                       <div class="name">
                           牌型：
                       </div>
                       <div class="flex-item">
                           <?php if(room['px']): if(is_array($room['px'])): foreach($room['px'] as $key=>$one): ?><a><?php echo ($one); ?></a>
                                   <?php if($key%2): ?>
                                   <br/>
                                   <?php endif; endforeach; endif; endif; ?>
                       </div>
                   </div>
                   <?php endif; ?>

                   <?php if( ! empty( $room['zd'] ) ): ?>
                   <div class="flex-cont rules-item" data-pos="3">
                       <div class="name">
                           单局最大下注：
                       </div>
                       <div class="flex-item" style="width: 40%;">
                           <?php if(room['zd']): echo ($room['zd']); endif; ?>
                       </div>
                   </div>
                   <?php endif; ?>

                   <div class="flex-cont" data-pos="4">
                       <div class="name">
                           局数：
                       </div>
                       <div class="flex-item"><?php echo ($room['zjs']); ?>局X<?php echo ($room['fk']); ?>房卡 </div>
                   </div>

                   <?php if( ! empty( $room['sz'] ) ): ?>
                   <div class="flex-cont" data-pos="5">
                       <div class="name">
                           上庄：
                       </div>
                       <div class="flex-item"><?php echo ($room['sz']); ?></div>
                   </div>
                   <?php endif; ?>
               </div>
           </div>
       </div>

    <div id="divRobBankerText" class='jiurenniuniu-qiangzhuang'></div> 
    <div id="" class="clock jiurenniuniu-clock">
     <img src="/app/img/beastfish/time.png" class='jiurenniuniu-memberCoin' />
     <p id='djs' class='jiurenniuniu-clock1'> 10 </p>
    </div> 

    <div id="operationButton">
    </div>

    <div class='gongg' style="display: none">
    </div>

 <script>
    function joinroom(){
        $("#valert").remove();
      token='<?php echo ($token); ?>';
      room='<?php echo ($room["id"]); ?>';
      var dkxx='<?php echo ($room["dk"]); ?>';
     load('show');
     if(dkxx){
      connect(dkxx);
    }
    else{
      load('hide');
      prompt('服务器没开启,请稍后再试');
      setTimeout("$('body').hide()",3000);
    }
    }
  </script>
 <?php if(count($room['userlist']) >= 9 && $room['userlist'][$user['id']] != 1): ?><div id="valert2" class="alert">
         <div class="alertBack"></div>
         <div class="mainPart" style="height: 31%;margin-top: -113.39px;">
             <div class="backImg">
                 <div class="blackImg" style=" height: 59%;"></div>
             </div>
             <div class="alertText" style="top: 35%;" id="tipmsg">房间人数已满</div>
             <div class="buttonRight" style="left: 31.5%;width: 17vh;height: 5.5vh;" onclick="location.href='/'">
                 返回首页
             </div>

         </div>
     </div>

     <?php exit(); endif; ?>

 <?php if((count($room['userlist']) > 0 && $room['js'] == 0) || ($room['js'] > 0 && !$room['userlist'][$user['id']])): ?><div id="valert" class="alert">
         <div class="alertBack"></div>
         <div class="mainPart" style="margin-top: -34vh;">
             <div class="backImg">
                 <div class="blackImg" style=" height: 77%;"></div>
             </div>
             <div class="id">
                 <img src="/app/img/ID.png" />
                 <div class="text">
                     你的牛来了用户ID:<?php echo ($user["id"]); ?>
                 </div>
             </div>
             <?php $count=M('user_room')->where(array('uid'=>$user['id'],'type'=>$room['type']))->count(); $count=$count+0; $max=M('user_room')->where(array('uid'=>$user['id'],'type'=>$room['type']))->order('jifen desc')->find(); ?>
             <div class='lishijilu' style="">
                 <div>历史最高分：<?php if($max): echo ($max["jifen"]); ?> (<?php echo (date("m-d H:i",$max["overtime"])); ?>)<?php else: ?>暂无游戏记录<?php endif; ?></div>
                 <div>游戏总局数：<?php echo ($count); ?></div>
             </div>
             <div class="alertText" style="top: 1vh;">
                 <div class="rull" style="font-size: 2.2vh;">
                     模式
                     <a><?php echo ($room['wfname']); ?></a> <br />
                     <?php if($room['df']): ?>底分：
                         <a><?php echo ($room['df']); ?></a>
                         <br /><?php endif; ?>
                     <?php if($room['gz']): ?>规则：
                         <a><?php echo ($room['gz']); ?></a>
                         <br /><?php endif; ?>
                     <?php if($room['px']): ?>牌型：
                         <a><?php if(is_array($room['px'])): foreach($room['px'] as $key=>$one): echo ($one); endforeach; endif; ?></a>
                         <br /><?php endif; ?>

                     <?php if($room['sz']): ?>上庄：
                         <a><?php echo ($room['sz']); ?></a>
                         <br /><?php endif; ?>

                     局数：
                     <a><?php echo ($room['zjs']); ?>局X<?php echo ($room['fk']); ?>房卡 </a>

                 </div>
                 <div style="margin-bottom: 9.5vh;
    position: relative;">
                     房间中有<?php foreach($room['userlist'] as $key=>$one){ if(!$indexxx) { $indexxx=1; } else{ echo ','; } echo username($key); } ?>,是否加入？
                 </div>
             </div>

             <div style="position: relative;
    width: 100%;
    height: 5vh;
        top: -3vh;">
                 <div class="buttonLeft" onclick="location.href='/'" style="    top: 0;
    bottom: 0;
    margin: auto;">
                     创建房间
                 </div>
                 <div class="buttonRight" onclick="joinroom()" style="   top: 0;
    bottom: 0;
    margin: auto;">
                     加入游戏
                 </div>
             </div>
         </div>
     </div>
     <?php else: ?>
     <script>
         joinroom();
     </script><?php endif; ?>

<div class="sound-mask"></div>
<div class="sound">
    <div class="sound-bg">
        <div class="sound-setting">设 置</div>
    </div>
    <div class="sound-close"></div>
    <div class="sound-box">
        <div class="sound-title">游戏音效</div>
        <div class="sound-progress" data-type="sound">
            <div class="sound-progress-con"></div>
            <div class="sound-drag"></div>
        </div>
        <div class="sounds on"></div>
    </div>
    <div class="sound-box" style="top: 45%;">
        <div class="sound-title">背景音乐</div>
        <div class="sound-progress" data-type="music">
            <div class="sound-progress-con"></div>
            <div class="sound-drag"></div>
        </div>
        <div class="music on"></div>
    </div>
</div>

<div class="chat-list-mask"></div>
<div class="chat-list">
     <ul class="chat-list-ul">
         <li data-item="0">快点吧，我等到花儿也谢了</li>
         <li data-item="1">我出去叫人</li>
         <li data-item="2">你的牌好靓哇</li>
         <li data-item="3">我当年横扫澳门九条街</li>
         <li data-item="4">算你牛逼</li>
         <li data-item="5">别吹牛逼，有本事干到底</li>
         <li data-item="6">输得裤衩都没了</li>
         <li data-item="7">我给你们送温暖了</li>
         <li data-item="8">谢谢老板</li>
         <li data-item="9">我来啦，让你们久等了</li>
         <li data-item="10">我出去一下，马上回来，等我哦</li>
         <li data-item="11">怎么断线了，网络太差了</li>
         <li data-item="12">搏一搏，单车变摩托</li>
     </ul>
</div>


<script>

function over(msg){
    alert2('房间人数已经满', function () {
        wx.closeWindow();
    });
}
var overscroll = function(el) {
  el.addEventListener('touchstart', function() {
    var top = el.scrollTop
      , totalScroll = el.scrollHeight
      , currentScroll = top + el.offsetHeight;
    //If we're at the top or the bottom of the containers
    //scroll, push up or down one pixel.
    //
    //this prevents the scroll from "passing through" to
    //the body.
    if(top === 0) {
      el.scrollTop = 1;
    } else if(currentScroll === totalScroll) {
      el.scrollTop = top - 1;
    }
  });
  el.addEventListener('touchmove', function(evt) {
    //if the content is actually scrollable, i.e. the content is long enough
    //that scrolling can occur
    if(el.offsetHeight < el.scrollHeight)
      evt._isScroller = true;
  });
}
document.body.addEventListener('touchmove', function(evt) {
  //In this case, the default behavior is scrolling the body, which
  //would result in an overflow.  Since we don't want that, we preventDefault.
  if(!evt._isScroller) {
    evt.preventDefault();
  }
});

        

// document.addEventListener("WeixinJSBridgeReady", function () {
//           mp3play('background');
// }, false);
// document.addEventListener('YixinJSBridgeReady', function() {
//           mp3play('background');      
// }, false);




function onBridgeReady(){
 WeixinJSBridge.invoke('getNetworkType',{},
    function(e){
        //WeixinJSBridge.log(e.err_msg);
         mp3play('1miao');  
      });
}

if (typeof WeixinJSBridge == "undefined"){
    if( document.addEventListener ){
        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
    }else if (document.attachEvent){
        document.attachEvent('WeixinJSBridgeReady', onBridgeReady); 
        document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
    }
}else{
    onBridgeReady();
}


</script>
 <script type="text/javascript">

     $(function () {

         $("#sound").click(function () {
             $('.sound-mask').show();
             $('.sound').show();
         });

         $('.sound-mask,.sound-close').touch(function() {
             $('.sound-mask').hide();
             $('.sound').hide();
         });
         $('.chat-list-mask').touch(function() {
             $('.chat-list-mask').hide();
             $('.chat-list').hide();
         });
         $('.chat-list li').click(function() {
             $('.chat-list-mask').hide();
             $('.chat-list').hide();
             var chat = parseInt($(this).attr('data-item'));
             sendmsg($(this).text(),'message'+indexsex[index]+(chat+1));
         });
     });
 </script>

 <script type="text/javascript">
     $(function () {
         $("div.bottomMessage,div.bottomHistory").on('touchstart', function (e) {
             $(this).css("transform", "scale(1.2)");
         }).on('touchend', function (e) {
             $(this).css("transform", "scale(1)");
         });
     });

     $('.jiurenniuniu-bGameRule').touch(function() {
         $('.rules-mask').show();
     });
     $('.rules-mask').touch(function() {
         $('.rules-mask').hide();
     });
     $(function () {
         //$("#loadings").remove();
     });
 </script>
 <script type="text/javascript">
     $(function () {
         move(
             $("div.sound-box div.sound-progress[data-type='music'] div.sound-drag"),
             localStorage.bgValue
         );
         move(
             $("div.sound-box div.sound-progress[data-type='sound'] div.sound-drag"),
             localStorage.soundValue
         );

         $("div.sound-box div.music, div.sound-box div.sounds").click(function (e) {
             var $dom = $(this).parent().find("div.sound-progress div.sound-drag");
             var w;
             if($(this).hasClass("on")) {
                 $(this).removeClass("on");
                 $(this).addClass("close");
                 w = 0;
             } else {
                 $(this).removeClass("close");
                 $(this).addClass("on");
                 w = 0.84;
             }
             move($dom, w);
         });

         $("div.sound-drag").on("touchmove", function (e) {
             var _touch = e.originalEvent.targetTouches[0];
             var offset = $(this).parent().offset();
             var x = _touch.pageX-offset.left;
             if(x<0) x = 0;
             if(x>=($(this).parent().width()-$(this).width())) x = $(this).parent().width()-$(this).width();
             move($(this), x/$(this).parent().width());
         });

         function move($dom, w) {
             $dom.parent().find("div.sound-progress-con").css("width", (w*100)+"%");
             $dom.css("left", (w*100)+"%");
             var func = $dom.parent().attr("data-type");
             if(func == "music")
                 music(w);
             if(func == "sound")
                 sound(w);
         }

         function music(pro) {
             if(pro == 0) {
                 $("div.sound-box div.music").removeClass("on");
                 $("div.sound-box div.music").addClass("close");
             } else {
                 $("div.sound-box div.music").removeClass("close");
                 $("div.sound-box div.music").addClass("on");
             }
             if(gainNodebg) {
                 localStorage.bgValue = pro;
                 gainNodebg.gain.value = localStorage.bgValue;
             }
         }

         function sound(pro) {
             if(pro == 0) {
                 $("div.sound-box div.sounds").removeClass("on");
                 $("div.sound-box div.sounds").addClass("close");
             } else {
                 $("div.sound-box div.sounds").removeClass("close");
                 $("div.sound-box div.sounds").addClass("on");
             }
             if(gainNode) {
                 localStorage.soundValue = pro;
                 gainNode.gain.value = localStorage.soundValue;
             }
         }
     });
 </script>
 </body>
</html>