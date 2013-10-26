<?php
# 签到活动信息
$signin = $_QFG['db']->result("select signin from app_qqfarm_user where uid=".$_QFG['uid']);
$signin = qf_decode($signin);

$time = $_QFG['timestamp'];
$cDate = $signin['timestamp'];
$dt = date('Ymd', $time);
$pdt = date('Ymd', $time-24*3600);		
$ldt = date('Ymd', $cDate);

//查询更新用户连续登陆奖励的登录设置
if(!$signin){
	$signin = array('bonus'=>0, 'days'=>1, 'number'=>0,'is_playing'=>0,"timestamp"=>$time);
} else {
	if($dt == $ldt){

	} elseif ($pdt == $ldt){
		$signin['days'] +=1;
		$signin['number'] =0;
		$signin['is_playing'] =0;
		$signin['timestamp'] =$time;
		if($signin['days'] == 3 || $signin['days'] == 5 || $signin['days'] >6) $signin['bonus'] = 1;
	} else {
		$signin = array('bonus'=>0, 'days'=>1, 'number'=>0,'is_playing'=>0,"timestamp"=>$time);
	}
}


$days = $signin['days'];
$is_playing = $signin['is_playing'];
$number = $signin['number'];
$timestamp = $signin['timestamp'];
$bonus = $signin['bonus'];

$_QFG['db']->query("update app_qqfarm_user set signin='".qf_encode($signin)."' where uid=".$_QFG['uid']);

echo '{"bonus":'.$bonus.',"code":1,"days":'.$days.',"ecode":0,"is_playing":'.$is_playing.',"number":'.$number.',"timestamp":'.$timestamp.'}';

?>
