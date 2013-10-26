<?php

# 万圣节活动
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = qf_decode($npc);
 
$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$package = qf_decode($package);
$goods = $_QFG['db']->result("SELECT goods FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$goods = qf_decode($goods);
/*
if($npc['thxpck']==1) die('{"code":0,"ecode":0}');

$npc['thxpck'] = 1;
$package['106'] += 3;
$goods['1540'] += 3;

$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set goods='" . qf_encode($goods) . "' where uid=" . $_QFG['uid']);
*/
echo '{"animal_timeout":"3600","begin_date_ex":"2011-10-27 00:00:00","bit_flag":false,"code":1,"ecode":0,"end_date_ex":"2011-11-15 00:30:00","switch":"1","update_timespan":"600"}';

?>