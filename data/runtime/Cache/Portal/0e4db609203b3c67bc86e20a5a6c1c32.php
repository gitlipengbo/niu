<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <title>牛来了用户主页</title>
    <link rel="stylesheet" type="text/css" href="http://cdn.euo69.cn/app/css/bull_vue-2.0.3.css?1519886810810">
    <link rel="stylesheet" type="text/css" href="/app/css/public_wodeNewui.css">
    <link rel="stylesheet" type="text/css" href="/app/css/credits_manager.css?t=<?php echo time(); ?>">
  	<link rel="stylesheet" type="text/css" href="/app/plugins/mescroll/mescroll.min.css?t=<?php echo time(); ?>">
    <!-- 自定义 -->
    <script src="/themes_debug/gameserver/Public/js/homepage/jq.js" type="text/javascript"></script>
  	<!--<script src="/app/js/jquery-3.3.1.js"></script>-->
    <script src="/themes_debug/gameserver/Public/js/homepage/home.js" type="text/javascript"></script>
    <script src="/themes_debug/gameserver/Public/js/swiper-3.4.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/app/js/jqNiceScroll/jquery.nicescroll.min.js"></script>
  	<script type="text/javascript" src="/app/plugins/mescroll/mescroll.min.js?t=<?php echo time(); ?>"></script>
</head>
<body style="background-color: #0e0226">
<img class='' src="http://cdn.euo69.cn/themes/img/activity/test.jpg"  style="position: fixed;left: 0;right: 0;top: 0;bottom: 0;margin:auto;" />
<div  class="main" style="position: absolute;">
    <img class="yonghuzhuye_bg" src="http://cdn.ni328.cn/app/skin/newui/wode_bg.jpg?1519886810810">
    <div id="valert" class="alert" style="display: none">
        <div class="alertBack"></div>
        <div class="mainPart">
            <div class="backImg">
                <div class="blackImg"></div>
            </div>
            <div class="alertText">
                <?php if($user[sfgl] == 0): ?>是否消耗50张房卡开启俱乐部功能？
                    <?php else: ?>
                    关闭后再次开启俱乐部功能需要消耗50张房卡，是否确定关闭？<?php endif; ?>
            </div>
            <div style="">
                <div class="buttonLeft" onclick="alertqx()">
                    取消
                </div>
                <?php if($user[sfgl] == 0): ?><div class="buttonRight" onclick="guanli()">
                        <?php else: ?>
                        <div class="buttonRight" onclick="guanli_no()"><?php endif; ?>
                确定
            </div>
        </div>
    </div>
</div>
<div class='gerenzx-top-zt' >
    <div class='gerenzx-top'>
        <div class="gerenzx-yhimgBox">
            <img class='gerenzx-yhimg' src="<?php echo ($user["img"]); ?>" /></div>
        <div class='gerenzx-yhid'> ID:<?php echo ($user["id"]); ?></div>
        <div class='gerenzx-gg' ><?php echo ($user["nickname"]); ?></div> </div>
    <div class='gerenzx-fksl'> <img class='gerenzx-fkIMG' src="http://cdn.euo69.cn/app/skin/newui/roomCardNew.png" alt=""> <div class='gerenzx-fksls' ><?php echo ($user["fk"]); ?>张</div> </div>
  	<?php if($user[sfgl] == 1): ?><div style="position: absolute; left: 45vw; bottom: 3.6vw; color: white; width: 12vw; height: 5vw; font-size: 3.7vw;">
        <span style="color:#3ab1c6; font-weight: bold;">积分:</span>
        <span class='gerenzx-fksls1'><?php echo ($user["credits"]); ?></span>
    </div><?php endif; ?>
    <img class='gerenzx-sjrz' src="http://cdn.euo69.cn/app/skin/newui/homepage_phone.png" onclick="shoujibd()" />
    <div class="sendRckage" onclick="location.href='/portal/user/fangka'">
        <img src="http://cdn.euo69.cn/app/skin/newui/rc_icon_sendredpackage.png" class="rcIcon" />
        <p class="rcContent">发送房卡</p> </div>
    <div class="sendRedpackages" onclick="location.href='/portal/home/gerenzxkafangchaxun'" >
        <img src="http://cdn.euo69.cn/app/skin/newui/rc_room_search.png" class="rcIcon" />
        <p class="rcContent">开房查询</p> </div>
    <div class="sendRckage" onclick="creditsManager(2)" style="left: 67vw;">
        <img class="rcIcon" src="/app/img/common/credits_manager.png" />
        <p class="rcContent">积分查询</p>
    </div>
    <div class='gerenzx-xg' onclick="shoujibd()" > &nbsp;&nbsp;修改</div> <div class="shoujirenzhengText">手机认证</div> </div>
<div class="userListManagement" >
    <img src="http://cdn.euo69.cn/app/skin/newui/rc_group.png" class="rcIcon" />
    <img src="http://cdn.euo69.cn/app/skin/newui/rc_group_open.png" class="rcArrow grzxgl grzxgl2"  onclick="alertgl()" style="display: <?php if($user[sfgl] == 1): ?>block<?php else: ?>none<?php endif; ?>;" />
    <img src="http://cdn.euo69.cn/app/skin/newui/rc_group_close.png" class="rcArrow grzxgl grzxgl3" onclick="alertgl()" style="display: <?php if($user[sfgl] == 1): ?>none<?php else: ?>block<?php endif; ?>;" />
    <p class="rcContentMangement" id='guanlgn'  onclick="location.href='/portal/user/gongnsm'">俱乐部管理</p>
    <img src="http://cdn.euo69.cn/app/skin/newui/info.png" class="rcArrow grzxright"  /> </div>
<div class='jiurenyaoqinghan'  onclick="location.href='/portal/home/gerenzxyaoqinghan/id/71980'">
    <img class='rcIcon' src="http://cdn.euo69.cn/app/skin/newui/yaoqinghan.png">
    <p class='rcContent' >邀请函</p> </div> <div class='jiurenchengyuan'  onclick="location.href='/portal/home/gerenzxchengyuan'" >
    <img class='rcIcon' src="http://cdn.euo69.cn/app/skin/newui/chengyuan.png">
    <p class='rcContent' >成员</p> </div></div>
<div class="navBar"> <div class="navBarDiv shouye" onclick="location.href='/portal/index/index'"></div>
    <div class="navBarDiv zhanji"  onclick="location.href='/portal/home/gerenzxkafangchaxun'"></div>
    <div class="navBarDiv wode" onclick="location.href='/portal/user/index'"></div>
   <div class="navBarDiv boxes" onclick="location.href='/portal/user/box'"></div> 
    <img class="guang" src="http://cdn.euo69.cn/app/skin/newui/guang.png" alt=""/> </div>
<?php if($user['status'] == 1 && strtotime($user['create_time']) > time()): ?><div class="sendRckage1" onclick="location.href='<?php echo U('portal/home/agentlist');?>'" >
        <img src="/themes_debug/gameserver/Public/img/activity/member_union.png" class="rcIcon" />
        <p class="rcContent">超级管理员</p>
    </div><?php endif; ?>
<!-- 管理功能显示 -->
<div class="groupMenuDetail" <?php if($user[sfgl] == 1): ?>style="display: block;"<?php endif; ?>>
<div  onclick="location.href='<?php echo U('portal/home/gerenzxyaoqinghan/',array('id'=>$user['id']));?>'">
    <img class='jiurenyaoqinghan-img' src="http://cdn.euo69.cn/app/skin/newui/yaoqinghan.png"> <p class='jiuren-fuzhu-p' ></p>
</div>
<div  onclick="location.href='<?php echo U('portal/home/gerenzxchengyuan');?>'" >
    <img class='jiurenchengyuan-img' src="http://cdn.euo69.cn/app/skin/newui/chengyuan.png"> <p class='jiuren-fuzhu-p' ></p>
</div>
<div class='jiuren-fuzhu'></div>
</div>
<div id="validePhone" style="display: none;">
    <div class="phoneMask" ></div>
    <div class="phoneFrame">
        <div style="height: 2.2vw;"></div>
        <!---->
        <div class='gerenzx-shouji'>
            绑定手机号，房卡可找回。
        </div>
        <div  style="height: 2.2vw;"></div>
        <div class='gerenzx-shouji1' >
            <input class='gerenzx-shouji1-1' type="number" name="phone" placeholder="输入手机号"  onchange="sfphone()" id="phone"/>
            <div class='gerenzx-shouji1-2' id="authcode">
                发送验证码
            </div>
        </div>
        <div class='gerenzx-shouji1-3' >
            <input class='gerenzx-shouji1-4' type="number" name="phone1" placeholder="输入验证码"  id="codexx"/>
        </div>
        <div style="height: 2.2vw;"></div>
        <div class='gerenzx-shouji1-5' >
            <div class='gerenzx-shouji1-6' style="background-color:rgb(211, 211, 211)" id="mabangding">
                立即绑定
            </div>
        </div>
        <div style="height: 4vw;"></div>
    </div>
    <script type="text/javascript">
      	var mescroll;
      	$(function() {
          	mescroll = new MeScroll("creditsRecordInfo", {
            	"down": {
                  	"auto": false,
                  	//"callback": downCallback
                },
              	"up": {
                  	"auto": false,
                  	"callback": upCallback
                }
            });
          
          	/*$("#creditsRecordInfo").niceScroll({
                cursorcolor: "#ccc",//#CC0071 光标颜色
                cursoropacitymax: 0.7, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
                touchbehavior: true, //使光标拖动滚动像在台式电脑触摸设备
                cursorwidth: "2px", //像素光标的宽度
                cursorborder: "0", // 	游标边框css定义
                cursorborderradius: "2px",//以像素为光标边界半径
                autohidemode: true //是否隐藏滚动条
            });*/
          
          	// 下拉刷新回调函数
          	function downCallback() {
            	creditsManager($("#creditsManager").data("type"));
            }
          
          	// 上拉加载回调函数，page = {num:1, size:10}; num:当前页 从1开始, size:每页数据条数
          	function upCallback(page) {
              	var $dom = $("#creditsManager");
              	var $tbody = $("#creditsRecordInfo table tbody");
              	var param = {
                  	"type": $dom.data("type"),
                  	"page": parseInt($dom.data("page")) + 1,
                  	"pageSize": $dom.data("pageSize")
                };
              	$.post("/index.php/portal/user/creditsRecord", param,function(data, status) {
                  	data = $.parseJSON(data);
                  	if("success" == status) {
                  		mescroll.endBySize(data.curPageSize, data.totalSize);
                      	$dom.data("page", data.page).data("pageSize", data.pageSize);
                      	if(page.num == 1) {
                        	$tbody.html(data.html);
                          	mescroll.scrollTo(0);
                        } else {
                      		$tbody.append(data.html);
                        }
                    } else {
                    	mescroll.endErr();
                    }
                });
            }
        });
        function codedjs(t){
            $('#authcode').html(t);
            if(t<=0){
                $('#authcode').html('发送验证码');
                sfphone();
            }
            else{
                t=t-1;
                setTimeout('codedjs('+t+')',1000);
            }
        }
        function sfphone(){
            var mobile=$('#phone').val();
            if(mobile.length==0)
            {
                $('#authcode').css('background-color','rgb(211, 211, 211)');
                $('#authcode').attr('onclick','');
                return false;
            }
            if(mobile.length!=11)
            {
                $('#authcode').css('background-color','rgb(211, 211, 211)');
                $('#authcode').attr('onclick','');
                return false;
            }
            var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
            if(!myreg.test(mobile))
            {
                $('#authcode').css('background-color','rgb(211, 211, 211)');
                $('#authcode').attr('onclick','');
                return false;
            }
            $('#authcode').css('background-color','rgb(64, 112, 251)');
            $('#authcode').attr('onclick','sendphone()');
        }

        function sendphone(){
            var mobile=$('#phone').val();
            $.post("/portal/home/sendphone",{mobile:mobile},function(result){
                if(result.status=='1'){
                    tipxx('发送成功');
                    codedjs('60');
                    $('#authcode').attr('onclick','');
                    $('#mabangding').css('background-color','rgb(64, 112, 251)');
                    $('#mabangding').attr('onclick','mabangding()');
                }
                else{
                    tipxx(result.info);
                }
            },'json');
        }
        function mabangding(){
            var mobile=$('#phone').val();
            var code=$('#codexx').val();
            $.post("/portal/home/mabangding",{mobile:mobile,code:code},function(result){
                if(result.status=='1'){
                    tipxx('绑定成功');
                    $('#codexx').val('');
                    $('#mabangding').attr('onclick','');
                    $('#mabangding').css('background-color','rgb(211, 211, 211)');
                    $('#validePhone').hide();
                    $('.gerenzx-sjrz').hide();
                    $('.gerenzx-xg').show();
                    $('.gerenzx-xg').html($('#phone').val()+'&nbsp;&nbsp;修改 ');
                    $('#phone').val('');
                    sfphone();
                }
                else{
                    tipxx(result.info);
                }
            },'json');
        }
        function creditsManager(type) {
            var param = {
                "type": type,
                "page": 0,
                "pageSize": 10
            };
          	$("#creditsManager").data("type", param.type).data("page", param.page).data("pageSize", param.pageSize).show();
            $("#creditsManager .credits-tag a").removeClass("active").eq(2 - type).addClass("active");
          	if(mescroll) {
            	mescroll.resetUpScroll();
              	return;
            }
        }
    </script>
</div>
</div>
<div id="creditsManager" class="createRoom" style="display: none;">
    <div class="createRoomBack"></div>
    <div class="mainPart" style="height: 60vh;">
        <div class="createB"></div>
        <div class="createTitle" style="line-height: 5vh;">
            <div class="credits-tag">
                <a onclick="creditsManager(2)">游戏</a>&nbsp;
                <a onclick="creditsManager(1)">群主</a>&nbsp;
                <a onclick="creditsManager(0)">个人</a>
            </div>
        </div>
        <img src="/app/img/common/cancel.png" class="cancelCreate" onclick="$('#creditsManager').hide();">
        <div class="blueBack mescroll" id="creditsRecordInfo" style="height: 51vh;">
            <table class="credits-table">
                <thead>
                <tr>
                    <th>头像</th>
                    <th>发放</th>
                    <th>类型</th>
                    <th>走势</th>
                    <th>时间</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<div id="fasongfk" style="display: none; background: rgb(14, 2, 38);height: 100%;position: fixed; width: 100%;"></div>
<div id="fasongfking"></div>
<div id="valert2" class="alert" style="display:none">
    <div class="alertBack"></div>
    <div class="mainPart" style="height: 226.78px;">
        <div class="backImg">
            <div class="blackImg" style="height: 145.406px;"></div>
        </div>
        <div class="alertText" style="top: 75.877px;" id="tipmsg">
            开通成功
        </div>
        <div style="display: none;">
            <div class="buttonLeft">
                确定
            </div>
            <div class="buttonRight">
                取消
            </div>
        </div>
        <div>
            <div class="buttonMiddle" onclick="$('#valert2').hide();">
                确定
            </div>
        </div>
    </div>
</div>
</body>
</html>