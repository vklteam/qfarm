<?php

#礼包提示

//读VIP级别，根据VIP级别送不同的礼物
$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']); 
$vip = qf_decode($vip);

$vip_level = qf_toVipLevel($vip['exp']);
$Plus='';
/*if(substr($_QFG['uid'],-1,1) < 6 && substr($_QFG['uid'],-1,1) > 0 ){
	$Plus=',{"eNum":'.$vip_level.',"eParam":1033,"eType":9}';
	$PlusText='<font color=\"#666633\">【送了您不能买的中秋国庆活动作物哦】</font>';
} else {
	$Plus=',{"eNum":'.$vip_level.',"eParam":1032,"eType":9}';
	$PlusText='<font color=\"#666633\">【送了您不能买的中秋国庆活动作物哦】</font>';
}*/

switch($vip_level) {
	case 1:
		$item = '[{"eNum":50,"eParam":40,"eType":4},{"eNum":1,"eParam":1,"eType":7}'.$Plus.']';
		break;
	case 2:
		$item = '[{"eNum":60,"eParam":40,"eType":4},{"eNum":1,"eParam":1,"eType":7},{"eNum":1,"eParam":4,"eType":7}'.$Plus.']';
		break;
	case 3:
		$item = '[{"eNum":70,"eParam":40,"eType":4},{"eNum":1,"eParam":2,"eType":7},{"eNum":1,"eParam":1,"eType":7}'.$Plus.']';
		break;
	case 4:
		$item = '[{"eNum":80,"eParam":40,"eType":4},{"eNum":1,"eParam":3,"eType":7},{"eNum":1,"eParam":2,"eType":7}'.$Plus.']';
		break;
	case 5:
		$item = '[{"eNum":90,"eParam":40,"eType":4},{"eNum":1,"eParam":3,"eType":7},{"eNum":1,"eParam":3,"eType":7},{"eNum":1,"eParam":1,"eType":7}'.$Plus.']';
		break;
	case 6:
		$item = '[{"eNum":100,"eParam":40,"eType":4},{"eNum":2,"eParam":3,"eType":7},{"eNum":2,"eParam":2,"eType":7},{"eNum":2,"eParam":1,"eType":7}'.$Plus.']';
		break;
	case 7:
		$item = '[{"eNum":120,"eParam":40,"eType":4},{"eNum":3,"eParam":3,"eType":7},{"eNum":3,"eParam":2,"eType":7},{"eNum":3,"eParam":1,"eType":7}'.$Plus.']';
		break;
	default:
		$item = '';
}

if($vip['status'] == 2){
	$vipItem = '[{"eNum":1,"eParam":3,"eType":7},{"eNum":1,"eParam":101,"eType":5}]';
	$vipText = '<font color=\"#FF0000\">您是年费VIP，活动期间额外获赠以下每日奖励：<br></font>';
} else {
	$vipItem = '[]';
	$vipText = '';
}

echo '{"code":0,"direction":"恭喜您获赠VIP用户牧场大赠送活动之每日礼包：罐头+牧草<br>【罐头是缩短成长时间的道具，每个成长阶段可使用1个。】'.$PlusText.'<br>您的VIP级别为：<font color=\"#CC3300\"><B>' . $vip_level . '</B> 级</font> ，获得以下奖励：<br>","item":' . $item . ',"title":"VIP用户每日礼包","vip":'.$vip_level.',"vipItem":'.$vipItem.',"vipText":"'.$vipText.'"}';

?>