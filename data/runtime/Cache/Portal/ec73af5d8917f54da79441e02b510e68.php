<?php if (!defined('THINK_PATH')) exit(); $types = []; foreach(M('game')->select() as $v) { $types[$v['id']] = $v; } ?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<script type="text/javascript">
	//全局变量
	var GV = {
	    ROOT: "/",
	    WEB_ROOT: "/",
	    JS_ROOT: "public/js/",
	    APP:'<?php echo (MODULE_NAME); ?>'/*当前应用名*/
	};
	</script>
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/wind.js"></script>
    <script src="/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script>
    	$(function(){
    		$("[data-toggle='tooltip']").tooltip();
    	});
    </script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
<style type="text/css">
    th, td {text-align: center;}
    /*牌面定位样式*/
    .card { margin: 0 7px 7px 0; display:inline-block; background:url("/app/img/cards.jpg");background-size:88.4vh 38.624vh;width: 6.8vh;height: 9.656vh;box-shadow:1px 1px 5px #333; }
    .cardA1{background-position: 0 -28.968vh;}
    .cardA2{background-position: -6.8vh -28.968vh;}
    .cardA3{background-position: -13.6vh -28.968vh;}
    .cardA4{background-position: -20.4vh -28.968vh;}
    .cardA5{background-position: -27.2vh -28.968vh;}
    .cardA6{background-position: -34vh -28.968vh;}
    .cardA7{background-position: -40.8vh -28.968vh;}
    .cardA8{background-position: -47.6vh -28.968vh;}
    .cardA9{background-position: -54.4vh -28.968vh;}
    .cardA10{background-position: -61.2vh -28.968vh;}
    .cardA11{background-position: -68vh -28.968vh;}
    .cardA12{background-position: -74.8vh -28.968vh;}
    .cardA13{background-position: -81.6vh -28.968vh;}
    .cardB1{background-position: 0 -19.312vh;}
    .cardB2{background-position: -6.8vh -19.312vh;}
    .cardB3{background-position: -13.6vh -19.312vh;}
    .cardB4{background-position: -20.4vh -19.312vh;}
    .cardB5{background-position: -27.2vh -19.312vh;}
    .cardB6{background-position: -34vh -19.312vh;}
    .cardB7{background-position: -40.8vh -19.312vh;}
    .cardB8{background-position: -47.6vh -19.312vh;}
    .cardB9{background-position: -54.4vh -19.312vh;}
    .cardB10{background-position: -61.2vh -19.312vh;}
    .cardB11{background-position: -68vh -19.312vh;}
    .cardB12{background-position: -74.8vh -19.312vh;}
    .cardB13{background-position: -81.6vh -19.312vh;}
    .cardC1{background-position: 0 0;}
    .cardC2{background-position: -6.8vh 0;}
    .cardC3{background-position: -13.6vh 0;}
    .cardC4{background-position: -20.4vh 0;}
    .cardC5{background-position: -27.2vh 0;}
    .cardC6{background-position: -34vh 0;}
    .cardC7{background-position: -40.8vh 0;}
    .cardC8{background-position: -47.6vh 0;}
    .cardC9{background-position: -54.4vh 0;}
    .cardC10{background-position: -61.2vh 0;}
    .cardC11{background-position: -68vh 0;}
    .cardC12{background-position: -74.8vh 0;}
    .cardC13{background-position: -81.6vh 0;}
    .cardD1{background-position: 0 -9.656vh;}
    .cardD2{background-position: -6.8vh -9.656vh;}
    .cardD3{background-position: -13.6vh -9.656vh;}
    .cardD4{background-position: -20.4vh -9.656vh;}
    .cardD5{background-position: -27.2vh -9.656vh;}
    .cardD6{background-position: -34vh -9.656vh;}
    .cardD7{background-position: -40.8vh -9.656vh;}
    .cardD8{background-position: -47.6vh -9.656vh;}
    .cardD9{background-position: -54.4vh -9.656vh;}
    .cardD10{background-position: -61.2vh -9.656vh;}
    .cardD11{background-position: -68vh -9.656vh;}
    .cardD12{background-position: -74.8vh -9.656vh;}
    .cardD13{background-position: -81.6vh -9.656vh;}

</style>
</head>
<body>
<div class="wrap">
    <div>
        <p>
            <img src="<?php echo ($user_data["img"]); ?>" width="25"/>
            <strong><?php echo ($user_data["nickname"]); ?></strong>
            <?php echo ($user_room["room"]); ?>号
            <strong><?php echo ($types[$user_room['type']]['name']); ?></strong>房间详情
        </p>
    </div>
    <ul class="nav nav-tabs">
        <li><a href="<?php echo U('AdminUser/userroom', array('id' => $user_data['id'], 'type' => $type));?>">返回<?php if($type == 1): ?>战绩<?php elseif($type == 2): ?>福利<?php else: ?>其他<?php endif; ?>>列表</a></li>
        <li class="active"><a href="<?php echo U('AdminUser/userroomdetail', array('id' => $user_room['id'], 'type' => $type));?>">详情</a></li>
    </ul>
    <table class="table table-hover table-bordered table-list">
        <thead>
        <tr>
            <th width="50">ID</th>
            <th width="80">局数</th>
            <th width="120">用户</th>
            <th width="40%">牌型</th>
            <th>得分</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($dj_room)): foreach($dj_room as $key=>$vo): $djxx = json_decode($vo['djxx'], TRUE); ?>
            <?php foreach( $djxx as $k => $v ): ?>
            <?php if($k == 0): ?>
            <tr>
                <th rowspan="<?php echo count($djxx);?>" style="vertical-align: top;"><?php echo ($vo["id"]); ?></th>
                <th rowspan="<?php echo count($djxx);?>" style="vertical-align: top;"><?php echo ($vo["js"]); ?>/<?php echo ($room_data["zjs"]); ?></th>
                <td><?php echo usernickname($v['user']['id']);?></td>
                <td>
                    <?php foreach( $v['user']['card'] as $card ): ?>
                    <div class="card card<?php echo ($card['card']); ?>"></div>
                    <?php endforeach; ?>
                </td>
                <td><?php echo ($v["jf"]); ?></td>
            </tr>
            <?php else: ?>
            <tr>
                <td><?php echo usernickname($v['user']['id']);?></td>
                <td>
                    <?php foreach( $v['user']['card'] as $card ): ?>
                    <div class="card card<?php echo ($card['card']); ?>"></div>
                    <?php endforeach; ?>
                </td>
                <td><?php echo ($v["jf"]); ?></td>
            </tr>
            <?php endif; ?>
            <?php endforeach; endforeach; endif; ?>
        </tbody>
    </table>
    <div class="pagination"><?php echo ($page); ?></div>
</div>
</body>
</html>