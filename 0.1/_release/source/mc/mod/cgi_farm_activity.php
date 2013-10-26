<?php

# 4.1活动
$id = (int)$_REQUEST['id'];
$crystal = $_QFG['db']->result("SELECT crystal FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$goods = $_QFG['db']->result("SELECT goods FROM app_qqfarm_mc where uid=" . $_QFG['uid']);

$crystal = qf_decode($crystal);
$package = qf_decode($package);
$goods = qf_decode($goods);

if($id==1){
	if($crystal['2']<3) die('{"code":0,"ecode":-30318,"info":[{"id":2,"num":'.(3-$crystal['2']).'}]}');
	$name = '绵羊海盗';
	$appid = '353';
	$crystal['2'] -= 3;
	$package['405']  += 1;
} elseif($id==2) {
	if($crystal['4']<5 || $crystal['7']<5 || $crystal['8']<5){
		if($crystal['4']<5) $info[] = '{"id":4,"num":'.(5-$crystal['4']).'}';
		if($crystal['7']<5) $info[] = '{"id":7,"num":'.(5-$crystal['7']).'}';
		if($crystal['8']<5) $info[] = '{"id":8,"num":'.(5-$crystal['8']).'}';
		$info_str = '[' . implode(',',$info) . ']';
		die('{"code":0,"ecode":-30318,"info":'.$info_str.'}');
	} 
	$name = '河马新娘';
	$appid = '353';
	$crystal['4'] -= 5;
	$crystal['7'] -= 5;
	$crystal['8'] -= 5;
	$package['403']  += 1;
} elseif($id==3) {
	if($crystal['1']<5)  die('{"code":0,"ecode":-30318,"info":[{"id":1,"num":'.(5-$crystal['1']).'}]}');
	$name = '橙橙猴';
	$appid = '358';
	$crystal['1'] -= 5;
	$goods['1055']  += 1;
} elseif($id==4) {
	if($crystal['2']<5 || $crystal['5']<5) {
		if($crystal['2']<5) $info[] = '{"id":2,"num":'.(5-$crystal['2']).'}';
		if($crystal['5']<5) $info[] = '{"id":5,"num":'.(5-$crystal['5']).'}';
		$info_str = '[' . implode(',',$info) . ']';
		die('{"code":0,"ecode":-30318,"info":'.$info_str.'}');
	}
	$name = '辣辣狗';
	$appid = '358';
	$crystal['2'] -= 5;
	$crystal['5'] -= 5;
	$goods['1551']  += 1;
} elseif($id==5) {
	if($crystal['1']<8 || $crystal['3']<8 || $crystal['6']<8) {
		if($crystal['2']<8) $info[] = '{"id":1,"num":'.(8-$crystal['1']).'}';
		if($crystal['3']<8) $info[] = '{"id":3,"num":'.(8-$crystal['3']).'}';
		if($crystal['6']<8) $info[] = '{"id":6,"num":'.(8-$crystal['6']).'}';
		$info_str = '[' . implode(',',$info) . ']';
		die('{"code":0,"ecode":-30318,"info":'.$info_str.'}');	
	}
	$name = '雅利鸭';
	$appid = '358';
	$crystal['1'] -= 8;
	$crystal['3'] -= 8;
	$crystal['6'] -= 8;
	$goods['1056']  += 1;
} elseif($id==6) {
	if($crystal['9']<5 || $crystal['10']<5) {
		if($crystal['9']<5) $info[] = '{"id":9,"num":'.(5-$crystal['9']).'}';
		if($crystal['10']<5) $info[] = '{"id":10,"num":'.(5-$crystal['10']).'}';
		$info_str = '[' . implode(',',$info) . ']';
		die('{"code":0,"ecode":-30318,"info":'.$info_str.'}');	
	}
	$name = '疯狂摇滚猫';
	$appid = '353';
	$crystal['9'] -= 5;
	$crystal['10'] -= 5;
	$package['402']  += 1;
} 

$_QFG['db']->query("UPDATE app_qqfarm_user set crystal='" . qf_encode($crystal) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set goods='" . qf_encode($goods) . "' where uid=" . $_QFG['uid']);

echo '{"appid":'.$appid.',"code":1,"ecode":0,"name":"'.$name.'"}';

?>