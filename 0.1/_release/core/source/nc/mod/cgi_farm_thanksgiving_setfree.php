<?php
//20111122活动

$ownerId = (int)$_REQUEST['ownerId'];
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$npc = qf_decode($npc);
$package = qf_decode($package);

$time = $_QFG['timestamp'];
$cDate = (int)$npc['bonustimes'];
$dt = date('Ymd', $time);	
$ldt = date('Ymd', $cDate);

if($dt > $ldt) {
	unset($npc['fid']);
	unset($npc['count']);
	$npc['bonustimes'] = $_QFG['timestamp'];
	$npc['days'] += 1;
}

if((int)$npc['count']>15 || in_array($ownerId, $npc['fid'])) die( '{"ecode":0}');

$npc['fid'][] = $ownerId; 
$npc['count'] += 1;


if((int)$npc['days']>5){
	$rand =mt_rand(1, 8);
	if($rand == 1){
		$pkg = 134;
		$package[$pkg] += 1;
	}elseif($rand == 2){
		$pkg = 92;
		$package[$pkg] += 1;
	}elseif($rand == 3){
		$pkg = 400;
		$package[$pkg] += 1;
	}elseif($rand == 4){
		$pkg = 141;
		$package[$pkg] += 1;
	}elseif($rand == 5){
		$pkg = 82;
		$package[$pkg] += 1;
	}elseif($rand == 6){
		$pkg = 94;
		$package[$pkg] += 1;
	}elseif($rand == 7){
		$pkg = 146;
		$package[$pkg] += 1;
	}elseif($rand == 8){
		$pkg = 1000;
		$package[$pkg] += 1;
	}
}else{
	$rand =mt_rand(1, 5);
	if($rand == 1){
		$pkg = 25;
		$package[$pkg] += 1;
	}elseif($rand == 2){
		$pkg = 105;
		$package[$pkg] += 1;
	}elseif($rand == 3){
		$pkg = 117;
		$package[$pkg] += 1;
	}elseif($rand == 4){
		$pkg = 200;
		$money +=$pkg;
	}elseif($rand == 5){
		$pkg = 500;
		$money +=$pkg;
	}
}


$_QFG['db']->query("UPDATE app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "',money=$money where uid=" . $_QFG['uid']);

echo '{"code":1,"days":'.(int)$npc['days'].',"ecode":0,"isupgrade":false,"pkg":'.$pkg.',"popup":false}';

?>