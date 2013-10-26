<?php

# 每天(0点)要执行的任务
# Modify by seaif@zealv.com

//限制每天放草、放虫共50次,除草、杀虫共150次、小丑任务3次
$_QFG['db']->query("UPDATE app_qqfarm_nc set badnum=50,zong=150");

//限制每天放蚊子25只,打蚊子100只,喂养萝卜30个
$_QFG['db']->query("UPDATE app_qqfarm_mc set badnum=25,zong=100,sfeedleft=30"); 

/*$values1 = $_QFG['db']->fetchAll("SELECT uid,npc FROM app_qqfarm_user");
foreach($values1 as $value1) {
	$npc = qf_decode($value1['npc']);
	$npc['nc_day'] = 10;
	$npc['mc_day'] = 10;
	$npc['ncput'] = array();
	$npc['mcput'] = array();
	$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=".$value1['uid']);
}*/
//VIP升级&每天礼包
$vipgift = true;
include('source/cron/vip.php');

?>