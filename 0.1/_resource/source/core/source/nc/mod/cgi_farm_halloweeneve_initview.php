<?php
# 万圣节活动
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = qf_decode($npc);

$time = $_QFG['timestamp'];
$cDate = $npc['bonustimes'];
$dt = date('Ymd', $time);	
$ldt = date('Ymd', $cDate);
if($dt == $ldt){
	$bonus=$npc['number'];
	$popup=1;
} else {
	$bonus=3;
	$popup=0;
}

echo '{"code":1,"display":1,"ecode":0,"popup":'.$popup.',"prizes":[],"rest":'.$bonus.'}';
?>