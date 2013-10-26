<?php

# 万圣节活动
$id = (int)$_REQUEST['id'];
$ownerId = (int)$_REQUEST['ownerId'];
$bitpos = (int)$_REQUEST['bitpos'];
$opt = (int)$_REQUEST['opt'];

$list = $_QFG['db']->fetchOne("select money,beasts,crystal from app_qqfarm_user where uid=".$_QFG['uid']);
$goods = $_QFG['db']->result("SELECT goods FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$beasts = $_QFG['db']->result("SELECT beasts FROM app_qqfarm_user where uid=" . $ownerId);
$crystal = qf_decode($list['crystal']);
$beasts_my = qf_decode($list['beasts']);
$goods = qf_decode($goods);
$beasts = qf_decode($beasts);

if($id=='1085'){
	if($list['money'] < 2000) die('{"code":0,"direction":"您的金币不够，不能回收此动物！。","ecode":-30315,"poptype":3}');
	$list['money'] -= 2000;
}elseif($id=='1593'){
	if($beasts_my['moralexp'] < 200) die('{"code":0,"direction":"您的人品不够，不能回收此动物！。","ecode":-30315,"poptype":3}');
}elseif($id=='1086'){
	if($crystal['1'] < 15) die('{"code":0,"direction":"您的蓝水晶不够，不能回收此动物！。","ecode":-30315,"poptype":3}');
	$crystal['1'] -=15;
}
foreach($beasts['drop'] as $key => $value) {
	if($id == $value['id']){
		$goods[$id] += 1;
		unset($beasts['drop'][$key]);
	} else die('{"code":0,"direction":"您下手慢了，已经被别人捡走了。","ecode":-30315,"poptype":3}');
}

$beasts['drop'] = array_values($beasts['drop']);
$_QFG['db']->query("UPDATE app_qqfarm_user set money='" . $list['money'] . "',crystal='" . qf_encode($crystal) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set goods='" . qf_encode($goods) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_user set beasts='" . qf_encode($beasts) . "' where uid=" . $ownerId);

echo '{"ecode":0,"code":1,"bit_flag":1}';
?>