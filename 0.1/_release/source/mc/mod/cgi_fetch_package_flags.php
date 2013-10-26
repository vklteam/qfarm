<?php

# 活动
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = qf_decode($npc);
$fruit = $_QFG['db']->result("SELECT package FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$farm_num = qf_decode($fruit);
//$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
//$anim_num = qf_decode($package);

$bpck = $thxpck = $flag = 1;
if((int)$npc['mc_bpck']) $bpck = 0;
if((int)$npc['thxpck']) $thxpck = 0;
if(date('Ymd', $_QFG['timestamp']) == date('Ymd', $npc['mc_daytimes'])) $flag = 0;


echo '{"_qz":1,"_wb":1,"bpck":'.$bpck.',"code":1,"ecode":0,"mcnt":'.(int)$farm_num['1083'].',"thxpck":'.$thxpck.',"ypck":'.$flag.'}';

?>