<?php

# 升级房子-入库

$money = $_QFG['db']->result('SELECT money FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$list = $_QFG['db']->fetchOne('SELECT exp,decorative FROM app_qqfarm_mc where uid=' . $_QFG['uid']);

$decorative = qf_decode($list['decorative']);
$exp = $list['exp'];

if((int)$_REQUEST['type'] == '1') {
	$item = 'item2';
	$itemarr = array("1" => array(0,0), "2" => array(3000,0), "3" => array(20000,0), "4" => array(60000,0), "5" => array(120000,0), "6" => array(210000,0), "7" => array(300000,0), "8" => array(400000,0), "9" => array(800000,50), "10" => array(900000,60), "11" => array(1000000,70), "12" => array(1100000,80), "13" => array(1200000,90));
	$levelarr = array("1" => 0, "2" => 1, "3" => 4, "4" => 8, "5" => 12, "6" => 16, "7" => 20, "8" => 24, "9" => 30, "10" => 36, "11" => 42, "12" => 48, "13" => 54);
} else {
	$item = 'item3';
	$itemarr = array("1" => array(5000,0), "2" => array(40000,0), "3" => array(90000,0), "4" => array(160000,0), "5" => array(250000,0), "6" => array(350000,0), "7" => array(500000,0), "8" => array(700000,0), "9" => array(850000,55), "10" => array(950000,65), "11" => array(1050000,75), "12" => array(1150000,85), "13" => array(1250000,95));
	$levelarr = array("1" => 2, "2" => 6, "3" => 10, "4" => 14, "5" => 18, "6" => 22, "7" => 26, "8" => 28, "9" => 33, "10" => 39, "11" => 45, "12" => 51, "13" => 57);
}

$decorative[$item] = $decorative[$item] + 1;
if($money < $itemarr[$decorative[$item]]['0'] || qf_toLevel($exp) < $levelarr[$decorative[$item]]) {
	die('{"errorContent":"请不要采用非法手段！","errorType":"1011"}');
}

if($decorative[$item]>13){
	$decorative[$item] = 13;
}

$money = $money - $itemarr[$decorative[$item]]['0'];
$money1 = $itemarr[$decorative[$item]]['0'];
foreach((array)$decorative['item1'] as $key => $value) {
	if($value['status']==1) $item1 = $key;
}
$_QFG['db']->query('UPDATE app_qqfarm_user set money=' . $money . ' where uid=' . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative='".qf_encode($decorative)."' where uid=" . $_QFG['uid']);


die('{"1":{"id":'.$item1.',"lv":1},"2":{"id":102,"lv":' . $decorative['item2'] . '},"3":{"id":103,"lv":' . $decorative['item3'] . '},"code":1,"money":-' . $money1 . ',"ecode":0}');

?>