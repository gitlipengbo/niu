<?php
global $Room;
$id = ceil($data2['room']);
if ($Room[$id] && count($Room[$id]['index']) <= 0 && !$Room[$id]['user'][$connection->user['id']]) {
	act('over', '该房间已经满员了', $connection);
	return false;
}
$roomInfo = $db->getOne("SELECT rule,uid FROM jz_room WHERE id='{$id}'");
$rules = json_decode($roomInfo["rule"], true);
$admittances = explode(',', $rules['play']['admittance']);
preg_match_all('/\d+/', $admittances[$rules['admittance']], $admittance);
if($rules["mode"])
{
  	$isQunZhu = $roomInfo["uid"] == $connection->user["id"];
  	$mem = $db->getOne("SELECT * FROM jz_qun WHERE open='{$roomInfo["uid"]}' AND uid='{$connection->user["id"]}'");
  	if(!$isQunZhu && (!$mem || 0 == count($mem))) {
    	return tip("加入积分模式游戏需要先加入群组，请联系群主邀请加入！", $connection);
    }
  	if(($isQunZhu && $admittance['0']['0'] > $connection->user['credits']) || (!$isQunZhu && $admittance['0']['0'] > $mem['credits'])) {
  		return tip('积分不足' . $admittance['0']['0'] . '，请联系' .  ($isQunZhu ? '客服' : '群主') . '上分！', $connection);
    }
}
if (!$Room[$id]) {
	$Room[$id]['xx'] = $db->getOne("select * from jz_room where id='" . $id . "'");
	if ($Room[$id]['xx']['endtime'] > 0) {
		act('over', '房间已关闭', $connection);
		unset($Room[$id]);
		return false;
	}
	$dkxx = $db->getOne("select * from jz_server where dk='" . $Room[$id]['xx']['dk'] . "'");
	$save = array();
	$save['num'] = $dkxx['num'] + 1;
	$db->update('jz_server', $save, 'id=' . $dkxx['id']);
	global $connection2;
	$dataxx = array();
	$dataxx['act'] = 'creatroom';
	$connection2->send(json_encode($dataxx));
	$Room[$id]['index'] = array(0, 1, 2, 3, 4, 5, 6, 7, 8);
	$rule = json_decode($Room[$id]['xx']['rule'], true);
	$cmxx = explode(',', $rule['play']['cm']);
	$gz2xx = explode(',', $rule['play']['gz2']);
	$sxxx = explode(',', $rule['play']['sx']);
	foreach ($gz2xx as $key => $value) {
		if ($rule['gz2'][$key] == 1) {
			$Room[$id]['gz' . $key] = 1;
		}
	}
	$Room[$id]['type'] = $rule['play']['id'];
	$Room[$id]['lx'] = $rule['play']['type'];
	$Room[$id]['sx'] = $sxxx[$rule['sx']];
	$cmlist = explode('-', $cmxx[$rule['cm']]);
	foreach ($cmlist as $key => $value) {
		$sj = explode('/', $value);
		$Room[$id]['cm'][] = $sj[0];
		$Room[$id]['cm2'][] = $sj[1];
	}
}
if ($Room[$id]['xx']['zt'] == '-1') {
	$Room[$id]['xx']['zt'] = 0;
	cleardjs($Room[$id]['djs'], $id);
	$Room[$id]['timeover'] = 0;
}
$connection->user['online'] = 1;
$connection->user['zt'] = 0;
if (!$Room[$id]['user'][$connection->user['id']]) {
	$connection->user['room'] = $id;
	$index = rand(0, count($Room[$id]['index']) - 1);
	$connection->user['index'] = $Room[$id]['index'][$index];
	$connection->user['dqjf'] = 0;
	foreach ($Room[$id]['user'] as $connection3) {
		$userlist[$connection3->user['id']] = 1;
	}
	$userlist[$connection->user['id']] = 1;
	$save['user'] = json_encode($userlist);
	$db->update('jz_room', $save, 'id=' . $id);
	array_splice($Room[$id]['index'], $index, 1);
} else {
	$connection->user['room'] = $id;
	$connection->user['card'] = $Room[$id]['user'][$connection->user['id']]->user['card'];
	$connection->user['cardmax'] = $Room[$id]['user'][$connection->user['id']]->user['cardmax'];
	$connection->user['typexx'] = $Room[$id]['user'][$connection->user['id']]->user['typexx'];
	$connection->user['index'] = $Room[$id]['user'][$connection->user['id']]->user['index'];
	$connection->user['dqjf'] = $Room[$id]['user'][$connection->user['id']]->user['dqjf'];
	$connection->user['djjf'] = $Room[$id]['user'][$connection->user['id']]->user['djjf'];
	$connection->user['zt'] = $Room[$id]['user'][$connection->user['id']]->user['zt'];
	$connection->user['tpzt'] = $Room[$id]['user'][$connection->user['id']]->user['tpzt'];
	$connection->user['beishu'] = $Room[$id]['user'][$connection->user['id']]->user['beishu'];
	$connection->user['qbank'] = $Room[$id]['user'][$connection->user['id']]->user['qbank'];
	$connection->user['niu'] = $Room[$id]['user'][$connection->user['id']]->user['niu'];
}
act('gxindex', $connection->user['index'], $connection);
$Room[$id]['user'][$connection->user['id']] = $connection;
foreach ($Room[$id]['user'] as $connection3) {
  	$mem = $db->getOne("SELECT * FROM jz_qun WHERE open='{$roomInfo["uid"]}' AND uid='{$connection->user["id"]}'");
	$mem3 = $db->getOne("SELECT * FROM jz_qun WHERE open='{$roomInfo["uid"]}' AND uid='{$connection3->user["id"]}'");
	if ($connection3->user['online'] == '-1' && $Room[$id]['xx']['zt'] < 2) {
		$Room[$id]['user'][$connection3->user['id']]->user['zt'] = 0;
	}
	if ($connection->user['id'] != $connection3->user['id'] && $connection3->user['online'] != '-1') {
		$msg = array();
      	if($roomInfo["uid"] != $connection->user["id"]) {
            $connection->user['credits'] = $mem['credits'];
        }
		$msg['user'] = $connection->user;
      	$msg['mode'] = $rules['mode'];
		act('adduser', $msg, $connection3);
	}
	$msg = array();
  	if($roomInfo["uid"] != $connection3->user["id"]) {
      	$connection3->user['credits'] = $mem3['credits'];
    }
	$msg['user'] = $connection3->user;
  	$msg['mode'] = $rules['mode'];
	act('adduser', $msg, $connection);
}
$data = array();
$data['act'] = 'step' . $Room[$id]['xx']['zt'];
reqact($data, $connection); 