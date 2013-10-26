<?php

# 单个卖出水晶
qf_getCache('crystalinf', '/mc/');
$crystal = $_QFG['db']->result("SELECT crystal FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$crystal = qf_decode($crystal);
$num = (int)$_REQUEST['num'];
$id = (int)$_REQUEST['id'];


if($crystal[$id] < $num) {
	die('{"id":0,"code":0,"direction":"请确认数值！"}');
}
$price= $crystalinf[$id]['sale'];
$crystal[$id] -= $num;
foreach($crystal as $key => $value) {
	if($value == 0) {
		unset($crystal[$key]);
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $price * $num . " ,crystal='" . qf_encode($crystal) . "'where uid=" . $_QFG['uid']);

echo '{"code":1,"direction":"成功卖出<font color=\"#0099FF\"> <b>' . $num . '</b> </font>个' . $crystalinf[$id]['name'] . '，得到金币<font color=\"#FF6600\"> <b>' . $price * $num . '</b> </font>","ecode":0,"money":' . $price * $num . '}';

?>