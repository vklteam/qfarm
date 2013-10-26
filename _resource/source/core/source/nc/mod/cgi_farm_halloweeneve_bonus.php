<?php

# 万圣节活动
$list = $_QFG['db']->fetchOne("SELECT package,fish_package,exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$list1 = $_QFG['db']->fetchOne("SELECT money,yb FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);

$fish_package = qf_decode($list['fish_package']);
$package = qf_decode($list['package']);
$exp = $list['exp'];
$npc = qf_decode($npc);
$money = $list1['money'];
$yb = $list1['yb'];
if($money < 1000){
	die( '{"code":0,"direction":"对不起，您金币不足。","poptype":3}');
}
$money -= 1000;
$id = mt_rand(1,13);;

if($id == 1){
	$package['453'] += 1 ; 
} elseif($id == 2){
	$fish_package['16'] += 1 ; 
} elseif($id == 3){
	$package['454'] += 1 ; 
} elseif($id == 4){
	$exp += 200;
} elseif($id == 5){
	$money+=2000 ; 
} elseif($id == 6){
	$money+=3000 ; 
} elseif($id == 7){
	$exp += 300;
} elseif($id == 8){
	$package['455'] += 1 ; 
} elseif($id == 9){
	$yb +=200 ; 
} elseif($id == 10){
	$dogstr = $_QFG['db']->result("SELECT dog FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$dogstr = qf_decode($dogstr);
	if($dogstr['dogFeedTime'] < $_QFG['timestamp']) {
			$dogstr['dogFeedTime'] = $_QFG['timestamp'] + 86400;
	}
	foreach((array)$dogstr as $key => $value) {
		foreach((array)$value as $k => $v){
			if($k == 15) {
				} else {
					$dec = 1;
					$dogstr["dogs"][15]['status'] = 1;
					$dogstr["dogs"][15]['dogUnWorkTime'] = 1;

				}
		}
		if($dec) {
			foreach((array)$value as $k => $v){
				if($k != 15) $dogstr[$key][$k]['status'] = 0;
			}
		}
	}
	$_QFG['db']->query("UPDATE app_qqfarm_nc set dog='" . qf_encode($dogstr) . "' where uid=" . $_QFG['uid']);
} elseif($id == 11){
	$exp += 100;
} elseif($id == 12){
	$yb +=50 ; 
} elseif($id == 13){
	$yb +=100 ;
}
if(empty($npc['number'])){
	$npc['number']  = 2;
} else {
	$time = $_QFG['timestamp'];
	$cDate = $npc['bonustimes'];
	$dt = date('Ymd', $time);	
	$ldt = date('Ymd', $cDate);
	if($dt == $ldt)	{
		if($npc['number']<= 0){
			$bonus=0;
		} else {
			$npc['number']=$npc['number']-1;
		}
	} else {
		$npc['number']  = 2;
	}	
}
$npc['bonustimes']  = $_QFG['timestamp'];

$_QFG['db']->query("UPDATE app_qqfarm_user set money=" . $money . ",yb=".$yb.",npc='".qf_encode($npc)."' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_package='" . qf_encode($fish_package) . "',package='" . qf_encode($package) . "',exp=" . $exp . " where uid=" . $_QFG['uid']);

echo '{"code":1,"ecode":0,"pkgid":'.$id.'}';
?>