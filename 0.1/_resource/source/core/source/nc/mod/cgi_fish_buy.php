<?php

# 购买鱼苗
$fid = (int)$_REQUEST['fid'];
$num = (int)$_REQUEST['num'];

$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$fish_package = $_QFG['db']->result("SELECT fish_package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fish_package = qf_decode($fish_package);

if($money < $fishtype[$fid]['price'] * $num){
	die( '{"code":0,"direction":"对不起，您金币不足。","poptype":3}');
}

$fish_package[$fid] += $num;
$money -= $fishtype[$fid]['price'] * $num ;
$_QFG['db']->query("UPDATE app_qqfarm_user set money='" . $money . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_package='" . qf_encode($fish_package) . "' where uid=" . $_QFG['uid']);


echo '{"cId":'.$fid.',"code":1,"direction":"","money":-'.$fishtype[$fid]['price'] * $num.',"name":"'.$fishtype[$fid]['crop_name'].'","num":'.$num.'}';

?>
