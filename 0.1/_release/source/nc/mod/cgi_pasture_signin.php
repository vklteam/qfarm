<?php

$yellow = (int)$_REQUEST['yellow'];
$flag = (int)$_REQUEST['flag'];
$pid = (int)$_REQUEST['pid'];
$days = (int)$_REQUEST['days'];

$list = $_QFG['db']->fetchOne("SELECT U.uid,U.crystal,U.money,U.signin,U.vip,N.tools,N.status,N.black,N.fruit,N.package FROM  app_qqfarm_user U Left JOIN app_qqfarm_nc N ON N.uid=U.uid where U.uid=".$_QFG['uid']);

$crystal = qf_decode($list['crystal']);
$signin = qf_decode($list['signin']);
$black = qf_decode($list['black']);
$money = $list['money'];
$vip = qf_decode($list['vip']);
$status = qf_decode($list['status']);

$tools = qf_decode($list['tools']);
$fruit = qf_decode($list['fruit']);
$package = qf_decode($list['package']);
$kk = 0;
foreach($status as $key => $value) {
	//修复可能的错误
	if($status[$key]['goldLand'] == 1){
		$kk += 1;
	}
}
$kb = 24 - $kk;
//echo $kb;exit;
//3天、5天、7天礼包
if($days && $signin['bonus']==1){
	if($days == 3){
		$package['174'] += 1 ; 
		$daysid = 15;
	} elseif($days == 5){
		$package['139'] += 1 ; 
		$daysid = 16;
	} elseif($days > 6){
		$package['166'] += 1 ; 
		$daysid = 17;
	}

	$signin['bonus'] = 0;

	$_QFG['db']->query("update app_qqfarm_user set signin='".qf_encode($signin)."'  where uid=".$_QFG['uid']);
	$_QFG['db']->query("update app_qqfarm_nc set package='".qf_encode($package)."'  where uid=".$_QFG['uid']);

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

$input = array(1,2,3,4,9,10,12,22,23,24,51,52,53,54,55);
$id = $input[array_rand($input)];

switch($id) {
	case 1:
		$fruit['40'] += 50 ; 
		break;
	case 2:
		$fruit['40'] += 200 ;
		break;
	case 3:
		$money += 100;
		break;
	case 4:
		$money += 300;
		break;
	case 9:
		$crystal['5'] += 1 ; 
		break;
	case 10:
		$crystal['8'] += 1 ; 
		break;
	case 12:
		$crystal['2'] += 1 ; 
		break;
	case 22:
		$tools['1'] += 1 ; 
		break;
	case 23:
		$tools['2'] += 1 ; 
		break;
	case 24:
		$tools['3'] += 1 ; 
		break;
	case 51:
		$package['200'] += 1 ; 
		break;
	case 52:
		$package['702'] += 1 ; 
		break;
	case 53:
		$package['704'] += 1 ; 
		break;
	case 54:
		$package['710'] += 1 ; 
		break;
	case 55:
		$package['709'] += 1 ; 
		break;
}

if($black['gold'] < $kb) $black['gold'] += 1;


$_QFG['db']->query("update app_qqfarm_user set money='".$money."',signin='".qf_encode($signin)."', crystal='".qf_encode($crystal)."' where uid=".$_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_nc set tools='".qf_encode($tools)."', black='".qf_encode($black)."', fruit='".qf_encode($fruit)."' , package='".qf_encode($package)."'  where uid=".$_QFG['uid']);

echo '{"code":1,"ecode":0,"id":'.$id.',"canNum":'.$canNum.'}';

?>