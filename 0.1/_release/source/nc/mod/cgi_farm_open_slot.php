<?php

# 开启槽位
$slotid = (int)$_REQUEST['slotid'];
$moneyall = $_QFG['db']->result('SELECT money FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$beasts = $_QFG['db']->result('SELECT beasts FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$beasts = qf_decode($beasts);

$money = $slotid*300000;//槽位要的金币
if($moneyall<$money) die('{"ecode":1,"direction":"你的金币不够！"}');
$beasts['maxslotid'] = $slotid;


$_QFG['db']->query("update app_qqfarm_user set money=money - ".$money.",beasts='".qf_encode($beasts)."' where uid=" . $_QFG['uid']);

echo '{"ecode":0,"money":-'.$money.'}';

?>