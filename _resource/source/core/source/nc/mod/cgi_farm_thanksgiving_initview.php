<?php
//111111活动

$opt = (int)$_REQUEST['opt'];

$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = qf_decode($npc);

//活动日
if((int)$npc['npc']!='20111122'){
	unset($npc);
	$npc['npc'] = 20111122;
	$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=" . $_QFG['uid']);
}

$upgraded = 'false';
if((int)$npc['days']> 5 ) $upgraded = 'true';
$freed = 'false';
$time = $_QFG['timestamp'];
$cDate = (int)$npc['bonustimes'];
$dt = date('Ymd', $time);	
$ldt = date('Ymd', $cDate);
if($dt > $ldt){
	$npc['fid'] = array();
	$npc['count'] = 0;
}

if(in_array((int)$_REQUEST['ownerId'], $npc['fid'])) $freed = 'true';

if($opt == '0'){
	echo '{"code":1,"count":'.(int)$npc['count'].',"days":'.(int)$npc['days'].',"ecode":0,"popupwin":false,"upgraded":'.$upgraded.'}';
}elseif($opt == '1'){
	echo '{"code":1,"count":'.(int)$npc['count'].',"ecode":0,"freed":'.$freed.',"popupwin":false,"upgraded":false}';
}

?>