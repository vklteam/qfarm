<?php
//前台入口

include('common.php');
header('Content-Type:text/html; charset=utf-8');

//检查登录状态
if($auth = qf_checkauth()) die($auth);

//关闭农场提示
if(!in_array($_QFG['uid'],$_QSC['adminer']) && $_QSC['closefarm'] == 0)  die(qf_getView('closed'));

//获取参数
$type = in_array($_GET['type'], array('nc', 'mc', 'kn', 'mill')) ? $_GET['type'] : 'nc';

if($_REQUEST['1'] || $_REQUEST['1'] == "1" || $_REQUEST['1'] == "100") die('<?xml version="1.0" encoding="GB2312"?><results>ok</results>');

//NPC任务参数
if($_QSC['missionName']) {
	include("source/nc/mission/{$_QSC['missionName']}_vars.php");
}

//加载模板
if( $_REQUEST['appid']==358) {
	$tab_name = 'mc';
	qf_getView('mc');
} else {
	$tab_name = 'nc';
	qf_getView('nc');
}
?>