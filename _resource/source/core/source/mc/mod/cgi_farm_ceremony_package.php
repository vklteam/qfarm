<?php

# 活动
$type = (int)$_REQUEST['type'];


$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$package = $_QFG['db']->result("SELECT goods FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$fruit = $_QFG['db']->result("SELECT package FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$guard = $_QFG['db']->result("SELECT guard FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$decorative = $_QFG['db']->result('SELECT decorative FROM app_qqfarm_mc where uid=' . $_QFG['uid']);


$npc = qf_decode($npc);
$vip = qf_decode($vip);
$package = qf_decode($package);
$fruit = qf_decode($fruit);
$decorative_nc = qf_decode($decorative);
$guard = qf_decode($guard);


$money = 0 ;
if($type == 4){

	if($fruit['1083'] < 39) die('{"code":0,"ecode":0,"direction":"你的材料不够！"}');
	$package['1586'] += 1;
	$money = 7999;
	$fruit['1083'] -= 39;

} elseif($type == 5){

	if(date('Ymd', $_QFG['timestamp']) == date('Ymd', (int)$npc['mc_daytimes'])) die('{"code":0,"ecode":0,"direction":"你今天以领取过了！"}');
	if($fruit['1083'] < 29) die('{"code":0,"ecode":0,"direction":"你的材料不够！"}');
	$npc['mc_daytimes'] = $_QFG['timestamp'];
	$package['1084'] += 1;
	$money = 3900;
	$fruit['1083'] -= 29;

} elseif($type == 6){

	if((int)$npc['mc_bpck'] ==1 ) die('{"code":0,"ecode":0,"direction":"你以领取过了！"}');
	if($fruit['1083'] < 199) die('{"code":0,"ecode":0,"direction":"你的材料不够！"}');
	$money = 99999;
	$package['1572'] += 3;
	$fruit['1083'] -= 199;
	$npc['mc_bpck'] = 1;
	$guard['guard']['10']['status'] = 0;
	$guard['guard']['10']['guardUnWorkTime'] = 1;

	foreach((array)$decorative_nc as $item_type => $value) {
		foreach((array)$value as $key1 => $value1) {
			if($key1 == 211) {
				$buyed = 1;
				$decorative_nc['item1']['211']['validtime'] += 16070400;
			}
		}
	}
	if(!$buyed) {
		$decorative_nc['item1']['211']['status'] = 0;
		$decorative_nc['item1']['211']['validtime'] = $_QFG['timestamp'] + 16070400;
	}
	foreach((array)$decorative_nc as $item_type => $value) {
		foreach((array)$value as $key1 => $value1) {
			if($key1 == 212) {
				$buyed = 1;
				$decorative_nc['item1']['212']['validtime'] += 16070400;
			}
		}
	}
	if(!$buyed) {
		$decorative_nc['item1']['212']['status'] = 0;
		$decorative_nc['item1']['212']['validtime'] = $_QFG['timestamp'] + 16070400;
	}

}




$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "',money=money+" . $money . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative='" . qf_encode($decorative_nc) . "',goods='" . qf_encode($package) . "',guard='" . qf_encode($guard) . "',package='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"ecode":0,"type":'.$type.'}';

?>