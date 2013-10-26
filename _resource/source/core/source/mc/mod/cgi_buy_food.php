<?php

# 帮自己、好友加草

if(!is_numeric((int)$_REQUEST['foodnum']) || (int)$_REQUEST['foodnum'] < 1) {
	exit();
}
$foodnum = (int)$_REQUEST['foodnum'] < 1001 ? (int)$_REQUEST['foodnum'] : 1000;


$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$list = $_QFG['db']->fetchOne("SELECT money,vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$money = $list['money'];
$vip = qf_decode($list['vip']);
$fruit = qf_decode($fruit);
if($vip['status']) {
		$mc_price = 30;
	} else {
		$mc_price = 60;
}

if($money < $mc_price * $foodnum) {
	die('{"errorContent":"你的金币不足，购买' . $foodnum . '棵牧草，共需要' . ($mc_price * $foodnum) . '个金币。","errorType":"1011"}');
}
$fruit[40] = $fruit[40] + $foodnum;

$money = $money - ($mc_price * $foodnum);

$_QFG['db']->query("UPDATE app_qqfarm_user set money=" . $money . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);

//加草日志
$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $_QFG['uid'] . " AND type = 4 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
foreach($values as $value) {
	if(($value['type'] == 4) && ($value['fromid'] == $_QFG['uid']) && ($foodnum > 0)) {
		$money = $value['money'];
		$scount = $value['count'];
		$stime = $value['time'];
		$money = $money + ($mc_price * $foodnum);
		$scount = $scount + $foodnum;
		$sql1 = "UPDATE app_qqfarm_mclogs set money = '" . $money . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] . ", isread = 1 where uid = " . $_QFG['uid'] . " AND type = 4 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
	}
}
if((!$sql1) && ($foodnum > 0)) {
	$sql1 = "INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(" . $_QFG['uid'] . ", 4," . $foodnum . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 40, 1, " . ($mc_price * $foodnum) . ");";
}
if($sql1) $query = $_QFG['db']->query($sql1);

echo '{"alert":"成功购买<font color=\"#009900\"> <b>'.$foodnum.'</b> </font>棵牧草，共花费金币<font color=\"#FF6600\"> <b>' . ($mc_price * $foodnum) . '</b> </font>，已放入您的食物包内。","money":' . ($mc_price * $foodnum) . '}';
?>