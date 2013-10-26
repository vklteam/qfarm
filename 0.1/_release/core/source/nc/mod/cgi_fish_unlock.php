<?php

# 鱼苗解锁
$fid = (int)$_REQUEST['fid'];
$list = $_QFG['db']->fetchOne("SELECT crystal,money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$list1 = $_QFG['db']->fetchOne("SELECT fish_status,fish_open,fish_unlock FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$crystal = qf_decode($list['crystal']);
$money = $list['money'];
$fish_unlock = $list1['fish_unlock'];
$fish_status = qf_decode($list1['fish_status']);


if((int)$list1['fish_open'] != 1){
	die( '{"code":0,"direction":"对不起，您你的鱼塘没开通无法解锁。","poptype":3}');
} 
if($money < $fishtype[$fid]['lock_money']){
	die( '{"code":0,"direction":"对不起，您金币不足无法解锁。","poptype":3}');
}
if($crystal[$fishtype[$fid]['lock_crystal']['0']] < $fishtype[$fid]['lock_crystal']['1']){
	die( '{"code":0,"direction":"对不起，您物品不足无法解锁。","poptype":3}');
}

$money -= $fishtype[$fid]['lock_money'];
$crystal[$fishtype[$fid]['lock_crystal']['0']] -= $fishtype[$fid]['lock_crystal']['1'];

if($fish_unlock) {
	$fish_unlock .= ",".$fid;
} else $fish_unlock = $fid;

$_QFG['db']->query("UPDATE app_qqfarm_user set money='" . $money . "',crystal='" . qf_encode($crystal) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_unlock='" . $fish_unlock . "' where uid=" . $_QFG['uid']);


echo '{"code":1,"crystal_id":'.(int)$fishtype[$fid]['lock_crystal']['0'].',"crystal_num":'.(int)$fishtype[$fid]['lock_crystal']['1'].',"fid":'.$fid.',"money":-'.$fishtype[$fid]['lock_money'].'}';

?>
