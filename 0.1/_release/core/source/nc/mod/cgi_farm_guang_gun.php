<?php
//111111活动

$op = (int)$_REQUEST['op'];

$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$npc = qf_decode($npc);
$package = qf_decode($package);

//活动日
if((int)$npc['npc']!='20111111'){
	unset($npc);
	$npc['npc'] = 20111111;
	$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=" . $_QFG['uid']);

}

if($op == 1){

	$package['602'] += 11;
	$npc['bonustimes'] = $_QFG['timestamp'];

	$_QFG['db']->query("UPDATE app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=" . $_QFG['uid']);

	die( '{"ecode":0}');

} 

$time = $_QFG['timestamp'];
$cDate = (int)$npc['bonustimes'];
$dt = date('Ymd', $time);	
$ldt = date('Ymd', $cDate);
$number = 0;
if($dt == $ldt) $number = 1;

echo '{"code":1,"ecode":0,"first":0,"number":'.$number.'}';

?>