<?php

# 中秋国庆活动
$uId = (int)$_REQUEST['uId'];
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$ownernpc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $uId);
$goods = $_QFG['db']->result("SELECT goods FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$ownernpc = qf_decode($ownernpc);
$npc = qf_decode($npc);
$package = qf_decode($package);
$goods = qf_decode($goods);
if($package['1037'] <= 0) die('{"code":-12,"errorContent":"您没有饼干，无法继续投放。","type":1}');
if($npc['mc_day'] <= 0) die('{"code":-12,"errorContent":"您今天已经投放饼干10次了，无法继续投放，明天再来吧。","type":1}');

if(array_key_exists($_QFG['uid'], $ownernpc['mcput'])>0) die('{"code":-13,"errorContent":"您今天已经在该好友的盒子中投放过饼干了，去别人农场里看看吧。","type":1}');

$npc['mc_day'] -= 1;
$num = mt_rand(1, 2);
$goods['1037']  += $num;
$package['1037']  -= 1;

$ownernpc['1037'] += 1;
$ownernpc['mcput'][$_QFG['uid']] +=1;

$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($ownernpc) . "' where uid=" . $uId);
$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set package='" . qf_encode($package) . "',goods='" . qf_encode($goods) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"num":'.$num.'}';

?>