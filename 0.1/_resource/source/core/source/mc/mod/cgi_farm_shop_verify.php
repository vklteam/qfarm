<?php

# 买看守员
/*$type = (int)$_REQUEST['type'];
$tid = (int)$_REQUEST['tId'];
$number = (int)$_REQUEST['number'];
$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);

if($type == 10) {
	$tools = $_QFG['db']->result("SELECT tools FROM app_qqfarm_user where uid=" . $_QFG['uid']);
	$tools = qf_decode($tools);
	$typeid = $tid+100000;
	$buy_money = $toolstype[$typeid]['price'] * $number;
	if($money < $buy_money) die('{"errorContent":"您钱不够购买了此工具!","errorType":"logic"}');		
	$tools[$typeid] += $number;
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money - " . $buy_money . ",tools='" . qf_encode($tools) . "' where uid=" . $_QFG['uid']);
}
*/
echo '{"ecode":0,"code":1}';
?>