<?php
//出售成鱼

$tid = (int)$_REQUEST['tid'];
$index = (int)$_REQUEST['index'];

$list = $_QFG['db']->fetchOne("SELECT fish_status,fish_tools FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fish_status = qf_decode($list['fish_status']);
$fish_tools = qf_decode($list['fish_tools']);

$ii = 0;
$fid = $fish_status[$index]['fid'];

$zuowutime = $_QFG['timestamp'] - $fish_status[$index]['p'];

foreach($fishtype[$fid]['cycle'] as $key => $value) {
	if($value <= $zuowutime) {
		$ii = $key + 1;
	}
}
if($fish_status[$index]['f'] == $ii + 1) die( '{"code":0,"direction":"对不起，你已经使用过鱼食！","poptype":3}');
$p = $fish_status[$index]['p'];
$zuowutime += $toolstype[240000 + $tid]['effect'];
$fish_status[$index]['f'] = $ii + 1;
$fish_status[$index]['p'] = $_QFG['timestamp'] - $zuowutime;

if($zuowutime >= $fishtype[$fid]['cycle']['2']){
	$fish_status[$index]['o'] = $fishtype[$fid]['output'];
	$fish_status[$index]['l'] = $fishtype[$fid]['output'];
}

$fish_tools[$tid] -= 1;
foreach($fish_tools as $key => $value) {
	if($value == 0) {
		unset($fish_tools[$key]);
	}
}



$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_status='" . qf_encode(array_values($fish_status)) . "',fish_tools='" . qf_encode($fish_tools) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"f":'.$fish_status[$index]['f'].',"i":'.$index.',"l":'.$fish_status[$index]['l'].',"o":'.$fish_status[$index]['o'].',"p":'.$fish_status[$index]['p'].'}';

?>