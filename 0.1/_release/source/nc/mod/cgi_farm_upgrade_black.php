<?php
//ษýผถบฺอมตุ
qf_getCache('upblack', '/nc/');

$op = (int)$_REQUEST['op'];

$list = $_QFG['db']->fetchOne("SELECT money,yb,vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$list1 = $_QFG['db']->fetchOne("SELECT status,black,exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$vip = qf_decode($list['vip']);
$money = $list['money'];
$yb = $list['yb'];
$viplevel = qf_toVipLevel($vip['exp']);
$level =  qf_toLevel($list1['exp']);
$status = qf_decode($list1['status']);
$black = qf_decode($list1['black']);
$place = (int)$black['number'];

if($op==0){
	if($level >= $upblack[$place]['level'] && $status[$place]['bitmap'] == 1 ){
		$ecode = 0 ;
	} else $ecode = -30342 ;

	$upmoney = 2 * $upblack[$place]['money'];
	$upyb = 2 * $upblack[$place]['yb'];
	if($_QFG['timestamp'] > (int)$black['cd']){
		$upmoney = $upblack[$place]['money']; 
		$upyb = $upblack[$place]['yb'];
	}

	echo '{"cd":'.(int)$black['cd'].',"code":1,"ecode":'.$ecode.',"leavings":0,"level":'.$upblack[$place]['level'].',"min":0,"money":'.$upmoney.',"output":0,"place":'.$place.',"qd":'.$upyb.',"rank":0,"yqd":'.$upyb * 0.8 .'}';

}elseif($op==1){

	$upmoney = 2 * $upblack[$place]['money'];
	$upyb = 2 * $upblack[$place]['yb'];

	if($_QFG['timestamp'] > (int)$black['cd']){
		$upmoney = $upblack[$place]['money']; 
		$upyb = $upblack[$place]['yb'];
	} 

	$money -= $upmoney;
	$status[$place]['bitmap'] = 2 ;
	$black['number'] += 1 ;
	$black['cd'] = $_QFG['timestamp'] + 86400;

	echo '{"cd":'.(int)$black['cd'].',"code":1,"ecode":0,"leavings":0,"level":'.$upblack[$place]['level'].',"min":0,"money":-'.$upmoney.',"output":0,"place":'.$place.',"qd":'.$upyb.',"rank":0,"yqd":'.$upyb * 0.8 .'}';

	$_QFG['db']->query("UPDATE app_qqfarm_user set money=$money where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "',black='" . qf_encode($black) . "' where uid=" . $_QFG['uid']);
}

?>