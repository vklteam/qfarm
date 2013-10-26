<?php

# 放牛回来奖励提示
$slotid = (int)$_REQUEST['slotid'];
$list = $_QFG['db']->fetchOne("select beasts,crystal from app_qqfarm_user where uid=".$_QFG['uid']);
$beasts = qf_decode($list['beasts']);
$crystal = qf_decode($list['crystal']);

if($beasts['beasts'][$slotid]['status'] != 3) die('{"direction":"您的动物回来了吗？","ecode":-30306}');
$exp = mt_rand(1,3);
$dropid = mt_rand(1,2);
$crystal[$dropid] += 1;
$beasts['moralexp'] += $exp;

$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beasts)."',crystal='".qf_encode($crystal)."' where uid=" . $_QFG['uid']);

echo '{"drop":[{"id":'.$dropid.',"num":1,"time":'.$_QFG['timestamp'].',"type":9}],"ecode":0,"money":'.$beasts['beasts'][$slotid]['fincome'].',"moralexp":'.$exp.'}';

?>