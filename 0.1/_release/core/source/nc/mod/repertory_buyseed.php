<?php

# 作物商店

$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$list = $_QFG['db']->fetchOne("SELECT exp,package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$vip = qf_decode($vip);

$number = (int)$_REQUEST['number'];
$cid = (int)$_REQUEST['cId'];
$money_1 = $cropstype[$cid]['price'] * $number;
$mylevel = qf_toLevel($list['exp']);

if($money < $money_1) die('{"cId":0,"code":0,"direction":"您的金币不足！"}');
if($mylevel < $cropstype[$cid]['cLevel']) die('{"cId":0,"code":0,"direction":"您的等级无法购买该种子！"}');
if(in_array($cid, $_HIDE['seed'])) die('{"cId":0,"code":0,"direction":"您无权购买此种子！"}');
if((int)$cropstype[$cid]['isvip']==1 && !(int)$vip['status']) die('{"cId":0,"code":0,"direction":"您不是VIP用户，无权购买此种子！"}');


$package = qf_decode($list['package']);
$package[$cid] += $number;

$_QFG['db']->query("UPDATE app_qqfarm_user set money=money-" . $money_1 . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);

//消费日志
$_QFG['db']->query(
	"INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`, `money` ) VALUES (" . $_QFG['uid'] .
	", 7, " . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] .
	", " . $cid . ", 1, '".$money_1."');"
);

echo '{"code":1,"cId":' . $cid . ',"cName":"' . $cropstype[$cid]['cName'] . '","num":' . $number . ',"money":-' . $money_1 . '}';

?>