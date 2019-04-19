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
</head>
<body>
<div class="wrap">
    <div>
        <p>
            <img src="<?php echo ($user_data["img"]); ?>" width="25"/>
            <strong><?php echo ($user_data["nickname"]); ?></strong>&nbsp;近期<?php if($type == 1): ?>战绩<?php elseif($type == 2): ?>福利<?php else: ?>其他<?php endif; ?>
        </p>
    </div>
    <ul class="nav nav-tabs">
        <li><a href="<?php echo U('AdminUser/index');?>">所有会员</a></li>
        <li class="active"><a href="<?php echo U('AdminUser/userroom', array('id' => $user_data['id'], 'type' => $type));?>"><?php if($type == 1): ?>战绩<?php elseif($type == 2): ?>福利<?php else: ?>其他<?php endif; ?></a></li>
    </ul>
    <table class="table table-hover table-bordered table-list">
        <thead>
        <tr>
            <th width="50">ID</th>
            <th>游戏类型</th>
            <th>房间号</th>
            <th><?php if($type == 1): ?>输赢<?php elseif($type == 2): ?>返利<?php else: ?>其他<?php endif; ?></th>
            <th>结束时间</th>
          	<?php if($type == 1): ?><th>操作</th><?php endif; ?>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($room_list)): foreach($room_list as $key=>$vo): ?><tr>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($types[$vo['type']]['name']); ?></td>
                <td><?php echo ($vo["room"]); ?></td>
                <td><?php echo ($vo["jifen"]); ?></td>
                <td><?php echo date('Y-m-d H:i:s',$vo['overtime']);?></td>
              	<?php if($type == 1): ?><td><a href="<?php echo U('AdminUser/userroomdetail', array('id' => $vo['id'], 'type' => $type));?>">详情</a></td><?php endif; ?>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
    <div class="pagination"><?php echo ($page); ?></div>
</div>
</body>
</html>