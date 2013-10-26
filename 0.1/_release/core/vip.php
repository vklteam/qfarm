<?php
//前台入口

include('common.php');
header('Content-Type:text/html; charset=utf-8');

//检查登录状态
if($auth = qf_checkauth()) die($auth);

//关闭农场提示
if(!in_array($_QFG['uid'],$_QSC['adminer']) && $_QSC['closefarm'] == 0)  die(qf_getView('closed'));

$appid = (int)$_REQUEST['appid'];
$received = (int)$_REQUEST['received'];
$level = (int)$_REQUEST['level'];
$ivip = (int)$_REQUEST['vip'];
$extra = $_REQUEST['extra'];

//读VIP级别，根据VIP级别送不同的
$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$vip = qf_decode($vip);


if( $received == 0 && $vip['gift_nc'] == 0 && $appid==353 && $ivip) {
	header("location:vip.php?appid=".$appid."&received=1&extra=".$extra."&vip=".$ivip."&level=".$level."");
} elseif( $received == 0 && $vip['gift_mc'] == 0 && $appid==358 && $ivip){
	header("location:vip.php?appid=".$appid."&received=1&extra=".$extra."&vip=".$ivip."&level=".$level."");
}

qf_getView('vip/vip');

?>