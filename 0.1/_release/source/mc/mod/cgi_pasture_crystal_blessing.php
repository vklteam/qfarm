<?php

# 卖出产品

$id = (int)$_REQUEST['id'];

$tid = array(
	"1" => array(7,1588),
	"2" => array(9,1591),
	"3" => array(2,1590),
	"4" => array(3,1592),
	"5" => array(4,1589)
);

$crystal = $_QFG['db']->result('SELECT crystal FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$crystal = qf_decode($crystal);
$goods = $_QFG['db']->result('SELECT goods FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
$goods = qf_decode($goods);

if($crystal[$tid[$id]['0']]>=8){
	$crystal[$tid[$id]['0']] -= 8;
	$goods[$tid[$id]['1']] += 1;
}

foreach($crystal as $key => $value) {
	if($value == 0) unset($crystal[$key]);
}

$_QFG['db']->query("UPDATE app_qqfarm_user set crystal='" . qf_encode($crystal) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set goods='" . qf_encode($goods) . "' where uid=" . $_QFG['uid']);



echo '{"code":1,"ecode":0}';

?>