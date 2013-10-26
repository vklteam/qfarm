<?php

# 加沙漏

$index = (int)$_REQUEST['index'];
$id = (int)$_REQUEST['id'];
$type = (int)$_REQUEST['type'];

$list = $_QFG['db']->fetchOne('SELECT tools,research FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
$tools = qf_decode($list['tools']);
$research = qf_decode($list['research']);

if($tools[$id]<1) die( '{"ecode":-50111,"code":0,"direction":"您的沙漏已用完！","errorType":"您的沙漏已用完！","errorContent":"您的沙漏已用完！"}');

if($type){//栅
	$tid = 'shed';
} else $tid = 'den';//窝

$research[$tid][$index]['endtime'] -= $toolstype[$id]['effect'];
$tools[$id] -= 1;
$research[$tid] = array_values($research[$tid]);


$_QFG['db']->query("UPDATE app_qqfarm_mc set tools='" . qf_encode($tools) . "',research='" . qf_encode($research) . "' where uid=" . $_QFG['uid']);

echo '{"ecode":0,"endtime":'.$research[$tid][$index]['endtime'].'}';

?>