<?php

# 单个卖出
$cid = (int)$_REQUEST['cId'];
$number = (int)$_REQUEST['number'];
$cIds = $_REQUEST['cIds'];

$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$package = qf_decode($package);

if($cid){
	if($package[$cid] < $number) {
		die('{"cId":'.$cid.',"code":0,"direction":"你没有该物品。"}');
	} else {
		$money = ceil($cropstype[$cid]["price"] * 0.5) * $number;
		$package[$cid] -= $number;
		foreach($package as $key => $value) {
			if($value == 0) {
				unset($package[$key]);
			}
		}
	}
	echo'{"cId":'.$cid.',"code":1,"direction":"成功卖出<font color=\"#0099FF\"> <b>'.$number.'</b> </font>个'.$cropstype[$cid]["cName"].'种子，得到金币<font color=\"#FF6600\"> <b>'.$money.'</b> </font>","money":'.$money.'}';	
	
} else {
	$money = 0;
	$sellary = explode(',', $cIds);
	foreach($package as $key => $value) {
		if(0 < $value && in_array($key, $sellary)) {
			$money = $money + ceil($cropstype[$key]["price"] * 0.5) * $value;
			unset($package[$key]);
		}
	}
	echo '{"code":1,"direction":"","money":' . $money . '}';
}
$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);

?>