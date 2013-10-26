<?php

# 礼包提示
$utools = $_QFG['db']->result("SELECT tools FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$utools = qf_decode($utools);

$list = $_QFG['db']->fetchOne("SELECT package,tools,dog,taskid FROM  app_qqfarm_nc where uid=" . $_QFG['uid']);
$package = qf_decode($list['package']);
$tools = qf_decode($list['tools']);
$dogstr = qf_decode($list['dog']);
$taskid = $list['taskid'];

if($taskid == 0) {
	$cId = 7;
	$package[$cId ]= $package[$cId] + 2;
	$cId1 = 1;
	$tools[$cId1] = $tools[$cId1] + 4;
	$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($tools) . "', package='" . qf_encode($package) . "',taskid=1 where uid=" . $_QFG['uid']);
	die('{"direction":"","item":[{"eNum":4,"eParam":1,"eType":3},{"eNum":2,"eParam":7,"eType":1}],"title":"","vip":0,"vipItem":[],"vipText":""}');
}

//读VIP级别，根据VIP级别送不同的
$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$vip = qf_decode($vip);
$vip_level = (int)qf_toVipLevel($vip['exp']);

if((int)$vip['gift_nc'] == 0) {
	die('<script type="text/javascript">
frameElement.callback({"direction":"","ecode":-303,"vipText":""});
</script>');
}
$Plus ='';
/*if(substr($_QFG['uid'],-1,1) < 6 && substr($_QFG['uid'],-1,1) > 0 ){
	$Plus=',{"eNum":'.$vip_level.',"eParam":153,"eType":1}';
	$Pluscard=153;
} else {
	$Plus=',{"eNum":'.$vip_level.',"eParam":154,"eType":1}';
	$Pluscard=154;
}
*/
switch($vip_level) {
	case 1:
		$tools[3] += 1;
		$utools[100001] += 1;
		$item = '[{"eNum":1,"eParam":3,"eType":3}'.$Plus.']';
		break;
	case 2:
		$tools[3] += 1;
		$tools[1] += 1;
		$utools[100001] += 1;
		$item = '[{"eNum":1,"eParam":2,"eType":3},{"eNum":1,"eParam":1,"eType":3}'.$Plus.']';
		break;
	case 3:
		$tools[3] += 1;
		$tools[1] += 2;
		$utools[100002] += 1;
		$item = '[{"eNum":1,"eParam":3,"eType":3},{"eNum":1,"eParam":2,"eType":3}'.$Plus.']';
		break;
	case 4:
		$tools[3] += 1;
		$tools[1] += 1;
		$tools[2] += 1;
		$utools[100002] += 1;
		$item = '[{"eNum":1,"eParam":7,"eType":3},{"eNum":1,"eParam":3,"eType":3}'.$Plus.']';
		break;
	case 5:
		$tools[3] += 1;
		$tools[1] += 1;
		$tools[7] += 1;
		$utools[100001] += 1;
		$utools[100002] += 1;
		$item = '[{"eNum":1,"eParam":7,"eType":3},{"eNum":1,"eParam":3,"eType":3},{"eNum":1,"eParam":2,"eType":3}'.$Plus.']';
		break;
	case 6:
		$tools[3] += 1;
		$tools[2] += 1;
		$tools[7] += 1;
		$utools[100001] += 1;
		$utools[100002] += 1;
		$item = '[{"eNum":2,"eParam":7,"eType":3},{"eNum":2,"eParam":3,"eType":3},{"eNum":2,"eParam":2,"eType":3}'.$Plus.']';
		break;
	case 7:
		$tools[3] += 1;
		$tools[2] += 1;
		$tools[1] += 1;
		$tools[7] += 1;
		$utools[100003] += 1;
		$utools[100002] += 1;
		$item = '[{"eNum":3,"eParam":7,"eType":3},{"eNum":3,"eParam":3,"eType":3},{"eNum":3,"eParam":2,"eType":3}'.$Plus.']';
		break;
	default:
		$item = '';
}
if($vip['status'] == 2){
	$tools[7] += 1;
	$package[41] += 1;
	$package[342] += 1;
	$package[343] += 1;
	if($dogstr['dogFeedTime'] < $_QFG['timestamp']) {
		$dogstr['dogFeedTime'] = $_QFG['timestamp'] + 86400;
	} else {
		$dogstr['dogFeedTime'] = $dogstr['dogFeedTime'] + 86400;
	}
	$vipItem = '[{"eNum":1,"eParam":7,"eType":3},{"eNum":1,"eParam":9001,"eType":909090}]';
} else {
	$vipItem = '[]';
}

$vip['gift_nc'] = 0;

$_QFG['db']->query("UPDATE app_qqfarm_user set vip='".qf_encode($vip)."',tools='".qf_encode($utools)."' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($tools) . "', package='" . qf_encode($package) . "', dog='" . qf_encode($dogstr) . "' where uid=" . $_QFG['uid']);
//日志

$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`, `money` ) VALUES (" . $_QFG['uid'] .
			", 13, 1, " . $_QFG['uid'] . ", " . $_QFG['timestamp'] .
			", " . $vip_level . ", 0, ".$vip['status'].");";
$_QFG['db']->query($sql);

echo '<script type="text/javascript">
frameElement.callback({"direction":"","ecode":-303,"item":' . $item . ',"title":"","vip":' . $vip_level . ',"vipItem":'.$vipItem.',"vipText":""});
</script>';
//echo '{"direction":"","item":' . $item . ',"title":"","vip":' . $vip_level . ',"vipItem":'.$vipItem.',"vipText":""}';

?>