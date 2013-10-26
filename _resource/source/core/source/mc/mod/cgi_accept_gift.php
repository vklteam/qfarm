<?php

# 领取礼包根据VIP级别送不同的
$utools = $_QFG['db']->result("SELECT tools FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$utools = qf_decode($utools);
$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$vip = qf_decode($vip);
$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($fruit);
$list = $_QFG['db']->fetchOne("SELECT goods,tools,guard FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$goods = qf_decode($list['goods']);
$tools = qf_decode($list['tools']);
$guard = qf_decode($list['guard']);

$vip_level = (int)qf_toVipLevel($vip['exp']);

if((int)$vip['gift_mc'] == 0) {
	die('<script type="text/javascript">
frameElement.callback({"direction":"","ecode":-303,"vipText":""});
</script>');
}
$Plus='';
/*if(substr($_QFG['uid'],-1,1) < 6 && substr($_QFG['uid'],-1,1) > 0 ){
	$Plus=',{"eNum":'.$vip_level.',"eParam":1033,"eType":9}';
	$PlusCID=1033;
} else {
	$Plus=',{"eNum":'.$vip_level.',"eParam":1032,"eType":9}';
	$PlusCID=1032;
}*/

switch($vip_level) {
	case 1:
		$item = '[{"eNum":40,"eParam":40,"eType":4},{"eNum":1,"eParam":1,"eType":7}'.$Plus.']';
		$fruit["40"] += 40;
		$tools["1"] += 1;
		$utools[100001] += 1;
		break;
	case 2:
		$item = '[{"eNum":50,"eParam":40,"eType":4},{"eNum":1,"eParam":1,"eType":7},{"eNum":1,"eParam":4,"eType":7}'.$Plus.']';
		$fruit["40"] += 50;
		$tools["1"] += 1;
		$utools[100001] += 1;
		break;
	case 3:
		$item = '[{"eNum":50,"eParam":40,"eType":4},{"eNum":1,"eParam":2,"eType":7},{"eNum":1,"eParam":1,"eType":7}'.$Plus.']';
		$fruit["40"] += 50;
		$tools["1"] += 1;
		$tools["4"] += 1;
		$utools[100002] += 1;
		break;
	case 4:
		$item = '[{"eNum":60,"eParam":40,"eType":4},{"eNum":1,"eParam":3,"eType":7},{"eNum":1,"eParam":2,"eType":7}'.$Plus.']';
		$fruit["40"] += 60;
		$tools["1"] += 1;
		$tools["4"] += 1;
		$utools[100002] += 1;
		break;
	case 5:
		$item = '[{"eNum":60,"eParam":40,"eType":4},{"eNum":1,"eParam":3,"eType":7},{"eNum":1,"eParam":3,"eType":7},{"eNum":1,"eParam":1,"eType":7}'.$Plus.']';
		$fruit["40"] += 60;
		$utools[100001] += 1;
		$tools["1"] += 2;
		$utools[100002] += 1;
		break;
	case 6:
		$item = '[{"eNum":60,"eParam":40,"eType":4},{"eNum":2,"eParam":3,"eType":7},{"eNum":2,"eParam":2,"eType":7},{"eNum":2,"eParam":1,"eType":7}'.$Plus.']';
		$fruit["40"] += 60;
		$utools[100001] += 1;
		$tools["1"] += 1;
		$tools["2"] += 1;
		$utools[100002] += 1;
		break;
	case 7:
		$item = '[{"eNum":60,"eParam":40,"eType":4},{"eNum":3,"eParam":3,"eType":7},{"eNum":3,"eParam":2,"eType":7},{"eNum":3,"eParam":1,"eType":7}'.$Plus.']';
		$fruit["40"] += 60;
		$utools[100003] += 1;
		$tools["1"] += 1;
		$tools["4"] += 1;
		$tools["2"] += 1;
		$utools[100002] += 1;
		break;
}

if($vip['status'] == 2){
	//$tools[3] += 1;
	if($guard['guardFeedTime'] < $_QFG['timestamp']) {
		$guard['guardFeedTime'] = $_QFG['timestamp'] + 86400;
		$striketime = 86400;
	} else {
		$guard['guardFeedTime'] = $guard['guardFeedTime'] + 86400;
		$striketime = $guard['guardFeedTime'] - $_QFG['timestamp'];
	}
	$vipItem = '[{"eNum":1,"eParam":3,"eType":7},{"eNum":1,"eParam":101,"eType":5}]';
} else {
	$vipItem = '[]';
}

$guardid = '';
if($guard) {
	foreach((array)$guard['guard'] as $key => $value) {
		if($value['status'] == 1) {
			$id = $key;
			$typeid = $id + 105;
			$guardid = ',"guard":{"id":'.(int)$id.',"name":"'.$toolstype[$typeid]['name'].'","striketime":'.$striketime.'}';
		}
	}
}

$vip['gift_mc'] = 0;
$_QFG['db']->query("UPDATE app_qqfarm_user set vip='".qf_encode($vip)."',tools='".qf_encode($utools)."' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set tools='" . qf_encode($tools) . "',goods='" . qf_encode($goods) . "',guard='" . qf_encode($guard) . "' where uid=" . $_QFG['uid']);

//日志

$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .
		$_QFG['uid'] . ", 14,0, " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . 
		$vip_level . ", 0, ".$vip['status'].");";
$query = $_QFG['db']->query($sql1);

echo '<script type="text/javascript">
frameElement.callback({"code":0,"direction":""'.$guardid.',"ecode":-303,"item":' . $item . ',"title":"","vip":'.$vip_level.',"vipItem":'.$vipItem.',"vipText":""});
</script>';
//echo '{"code":0,"direction":""'.$guardid.',"ecode":-303,"item":' . $item . ',"title":"","vip":'.$vip_level.',"vipItem":'.$vipItem.',"vipText":""}';

?>