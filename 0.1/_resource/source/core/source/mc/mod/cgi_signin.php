<?php

$yellow = (int)$_REQUEST['yellow'];
$flag = (int)$_REQUEST['flag'];
$pid = (int)$_REQUEST['pid'];
$days = (int)$_REQUEST['days'];

$list = $_QFG['db']->fetchOne("SELECT U.uid,U.crystal,U.money,U.vip,M.signin,M.tools,M.goods FROM  app_qqfarm_user U Left JOIN app_qqfarm_mc M ON M.uid=U.uid where U.uid=".$_QFG['uid']);
$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($fruit);

$crystal = qf_decode($list['crystal']);
$signin = qf_decode($list['signin']);
$money = $list['money'];
$vip = qf_decode($list['vip']);

$tools = qf_decode($list['tools']);
$goods = qf_decode($list['goods']);



//3天、5天、7天礼包
if($days && $signin['bonus']==1){
	if($days == 3){
		$fruit['40'] += 100 ; 
		$daysid = 15;
	} elseif($days == 5){
		$goods['1047'] += 1 ; 
		$daysid = 16;
	} elseif($days > 6){
		$goods['1035'] += 1 ; 
		$daysid = 17;
	}

	$signin['bonus'] = 0;

	$_QFG['db']->query("update app_qqfarm_mc set goods='".qf_encode($goods)."',signin='".qf_encode($signin)."'  where uid=".$_QFG['uid']);
	$_QFG['db']->query("update app_qqfarm_nc set fruit='".qf_encode($fruit)."'  where uid=".$_QFG['uid']);

	die( '{"code":1,"ecode":0,"id":'.$daysid.',"canNum":0}');
}

$signin['number'] += 1;
//VIP用户可领两次
if($vip['status'] || $yellow) {
	if($signin['number'] >2) die('{"code":0,"ecode":0,"direction":"今天你已经领了，明天再来碰碰运气吧！"}');
	$canNum = 2 - $signin['number'];
} else {
	if($signin['number'] >1) die('{"code":0,"ecode":0,"direction":"今天你已经领了，明天再来碰碰运气吧！"}');
	$canNum = 0;
}

$input = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,18,19,20,21,22);
$id = $input[array_rand($input)];

switch($id) {
	case 1:
		$money += 100;
		break;
	case 2:
		$money += 500;
		break;
	case 3:
		$goods['1050'] += 1 ; 
		break;
	case 4:
		$goods['1054'] += 1 ; 
		break;
	case 5:
		$goods['1540'] += 1 ; 
		break;
	case 6:
		$goods['1561'] += 1 ; 
		break;
	case 7:
		$goods['1060'] += 1 ; 
		break;
	case 8:
		$goods['1062'] += 1 ; 
		break;
	case 9:
		$crystal['5'] += 1 ; 
		break;
	case 10:
		$crystal['8'] += 1 ; 
		break;
	case 11:
		$crystal['1'] += 1 ; 
		break;
	case 12:
		$crystal['2'] += 1 ; 
		break;
	case 13:
		$goods['1551'] += 1 ; 
		break;
	case 14:
		$goods['1055'] += 1 ; 
		break;
	case 18:
		$goods['1056'] += 1 ; 
		break;
	case 19:
		$goods['1560'] += 1 ; 
		break;
	case 20:
		$tools['1'] += 1 ; 
		break;
	case 21:
		$tools['2'] += 1 ; 
		break;
	case 22:
		$tools['3'] += 1 ; 
		break;
}

$_QFG['db']->query("update app_qqfarm_user set money='".$money."', crystal='".qf_encode($crystal)."' where uid=".$_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_mc set signin='".qf_encode($signin)."',tools='".qf_encode($tools)."',goods='".qf_encode($goods)."'  where uid=".$_QFG['uid']);

echo '{"code":1,"ecode":0,"id":'.$id.',"canNum":'.$canNum.'}';

?>