<?php

# 用户购买牛	
qf_getCache('wildinf', '/mc/');

$slotid = (int)$_REQUEST['slotid'];
$farmTime = (int)$_REQUEST['farmTime'];
$type = (int)$_REQUEST['type'];
$slotid = (int)$_REQUEST['slotid'];
$money = $_QFG['db']->result('SELECT money FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$beasts = $_QFG['db']->result('SELECT beasts FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$beasts = qf_decode($beasts);
$price = $wildinf[$type]['price'];

if($money<$price) die('{"ecode":1,"direction":"你的金币不够！"}');
if($beasts['beasts'][$slotid]['status']) die('{"ecode":1,"direction":"槽位以有动物！"}');
if($beasts['moralexp']<$wildinf[$type]['buyNeedExp']) die('{"ecode":1,"direction":"人品不足！"}');
$beasts['beasts'][$slotid] = array("adopttime"=>$_QFG['timestamp'],"curblood"=>$wildinf[$type]['blood'],"income"=>$price,"leftraise"=>$wildinf[$type]['raiseTimes'],"price"=>$price,"status"=>1,"totalblood"=>$wildinf[$type]['blood'],"type"=>$type);

$_QFG['db']->query("update app_qqfarm_user set money=money - ".$price.",beasts='".qf_encode($beasts)."' where uid=" . $_QFG['uid']);

echo '{"beast":{"adopttime":'.$_QFG['timestamp'].',"curFriUin":0,"desc":"canraise","id":'.$slotid.',"lastExp":0,"lastIncome":0,"raisenum":0,"returntime":0,"status":1,"type":'.$type.'},"ecode":0,"money":-'.$price.'}';

?>