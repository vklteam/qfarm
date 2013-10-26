<?php

# 每日礼包
$taskid = $_QFG['db']->result("SELECT taskid FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
if($taskid == 0) {
	echo '{"direction":"<font color=\"#0099ff\">亲爱的用户'.$_QFG['uname'].'：</font><br>  欢迎你加入《QQ农场》大家庭，我们为你准备了以下礼包：","item":[{"eNum":4,"eParam":1,"eType":3},{"eNum":2,"eParam":7,"eType":1}],"title":"新手礼包","vip":0,"vipItem":"","vipText":"VIP用户应用游戏特权，可享受牧场试用奖励<br>每天登录还可获赠一份惊喜 "}';
	exit();
}

//读VIP级别，根据VIP级别送不同的礼物
$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']); 
$vip = qf_decode($vip);
$vip_level = qf_toVipLevel($vip['exp']);
$Plus ='';
/*if(substr($_QFG['uid'],-1,1) < 6 && substr($_QFG['uid'],-1,1) > 0 ){
	$Plus=',{"eNum":'.$vip['level'].',"eParam":153,"eType":1}';
	$PlusText='<font color=\"#666633\">【送了您不能买的中秋国庆活动作物哦】</font>';
} else {
	$Plus=',{"eNum":'.$vip['level'].',"eParam":154,"eType":1}';
	$PlusText='<font color=\"#666633\">【送了您不能买的中秋国庆活动作物哦】</font>';
}*/

switch($vip_level) {
	case 1:
		$item = '[{"eNum":1,"eParam":41,"eType":1}'.$Plus.']';
		break;
	case 2:
		$item = '[{"eNum":1,"eParam":2,"eType":3},{"eNum":1,"eParam":1,"eType":3}'.$Plus.']';
		break;
	case 3:
		$item = '[{"eNum":1,"eParam":3,"eType":3},{"eNum":1,"eParam":2,"eType":3}'.$Plus.']';
		break;
	case 4:
		$item = '[{"eNum":1,"eParam":7,"eType":3},{"eNum":1,"eParam":3,"eType":3}'.$Plus.']';
		break;
	case 5:
		$item = '[{"eNum":1,"eParam":7,"eType":3},{"eNum":1,"eParam":3,"eType":3},{"eNum":1,"eParam":2,"eType":3}'.$Plus.']';
		break;
	case 6:
		$item = '[{"eNum":2,"eParam":7,"eType":3},{"eNum":2,"eParam":3,"eType":3},{"eNum":2,"eParam":2,"eType":3}'.$Plus.']';
		break;
	case 7:
		$item = '[{"eNum":3,"eParam":7,"eType":3},{"eNum":3,"eParam":3,"eType":3},{"eNum":3,"eParam":2,"eType":3}'.$Plus.']';
		break;
	default:
		$item = '';
}

if($vip['status'] == 2){
	$vipItem = '[{"eNum":1,"eParam":7,"eType":3},{"eNum":1,"eParam":9001,"eType":909090}]';
	$vipText = '<font color=\"#FF0000\">年费VIP每日礼包豪华升级：每日获赠飞速化肥和普通狗粮。<br></font>';
} else {
	$vipItem = '""';
	$vipText = '';
}

echo '{"direction":"您当前领取的是VIP用户每日礼包。<br>您的VIP级别为：</b><font color=\"#CC3300\">' . $vip_level . '</font> ，获得以下奖励：'.$PlusText.'<br>","item":' . $item . ',"title":"每日礼包","vip":' . $vip_level . ',"vipItem":'.$vipItem.',"vipText":"'.$vipText.'"}';

?>