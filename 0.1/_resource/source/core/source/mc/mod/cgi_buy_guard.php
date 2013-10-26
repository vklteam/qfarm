<?php

# 买看守员
$type = (int)$_REQUEST['type'];
$tid = (int)$_REQUEST['id'];
$number = (int)$_REQUEST['number'];
$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);

if($type == 106) {
	$guard = $_QFG['db']->result("SELECT guard FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$guard = qf_decode($guard);
	$typeid = $tid+105;
	$buy_money = $toolstype[$typeid]['price'] * $number;
	if($money < $buy_money) {
		die('{"errorContent":"您钱不够购买了此看守员!","errorType":"logic"}');
	}			
	if($guard['guardFeedTime'] < $_QFG['timestamp']) {
		$guard['guardFeedTime'] = $_QFG['timestamp'] + $toolstype[$typeid]['validtime'];
		$striketime = $toolstype[$typeid]['validtime'];
	} else {
		$guard['guardFeedTime'] = $guard['guardFeedTime'] + $toolstype[$typeid]['validtime'];
		$striketime = $guard['guardFeedTime'] - $_QFG['timestamp'];
	}
	foreach((array)$guard as $key => $value) {
		foreach((array)$value as $k => $v){
			if($k == $tid) {
				die('{"errorContent":"您已经购买了此看守员，不能再购买!","errorType":"logic"}');
			} else {
				$dec = 1;
				$guard["guard"][$tid]['status'] = 1;
				$guard["guard"][$tid]['guardUnWorkTime'] = 1;

			}
		}
		if($dec) {
			foreach((array)$value as $k => $v){
				if($k != $tid) $guard[$key][$k]['status'] = 0;
			}
		}
	}
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money - " . $buy_money . " where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set guard='" . qf_encode($guard) . "' where uid=" . $_QFG['uid']);
}

echo '{"ecode":0,"code":1,"id":'.$tid.',"money":-'.$buy_money.',"name":"'.$toolstype[$typeid]['name'].'","striketime":'.$striketime.'}';
?>