<?php
# 签到活动信息
$signin = $_QFG['db']->result("select signin from app_qqfarm_user where uid=".$_QFG['uid']);
$signin = qf_decode($signin);

$signin['is_playing'] = 1;



$days = $signin['days'];
$is_playing = $signin['is_playing'];
$number = $signin['number'];
$timestamp = $signin['timestamp'];
$bonus = $signin['bonus'];

$_QFG['db']->query("update app_qqfarm_user set signin='".qf_encode($signin)."' where uid=".$_QFG['uid']);

echo '{"bonus":'.$bonus.',"code":1,"days":'.$days.',"ecode":0,"is_playing":'.$is_playing.',"number":'.$number.',"timestamp":'.$timestamp.'}';

?>