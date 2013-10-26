<?php

# VIP升级&每天礼包:TODO:待优化

/**
 * 预定义参数如下:
 * (bool)$vipgift 是否标记为未领取VIP礼包(默认FALSE)
 * (bool)$vipme 是否只更新当前用户VIP参数(默认FALSE)
 */


if($vipme) {
	$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=".$_QFG['uid']);
	$vip = qf_updateVipArgs(qf_decode($vip), $_QFG['timestamp']);
	if($vipgift && $vip['valid'] > $_QFG['timestamp']) {
		$vip['gift_nc'] = 1;//标记为未领取VIP礼包
		$vip['gift_mc'] = 1; //标记牧场未领取VIP礼包
	}
	$_QFG['db']->query("UPDATE app_qqfarm_user set vip='" . qf_encode($vip) . "' where uid=".$_QFG['uid']);
} else {
	$values = $_QFG['db']->fetchAll("SELECT uid,vip FROM app_qqfarm_user");
	foreach($values as $value) {
		$vip = qf_updateVipArgs(qf_decode($value['vip']), $_QFG['timestamp']);
		if($vipgift && $vip['valid'] > $_QFG['timestamp']) {
			$vip['gift_nc'] = 1;//标记为未领取VIP礼包
			$vip['gift_mc'] = 1; //标记牧场未领取VIP礼包
		}
		$_QFG['db']->query("UPDATE app_qqfarm_user set vip='" . qf_encode($vip) . "' where uid=".$value['uid']);
	}
}


/*
 * 更新VIP参数,转化时长为经验
 * $vip = array(
 *     join     => 续费时间
 *     valid    => 有效时间
 *     last     => 上次经验转化时间
 *     status   => 状态[0:无效|1:月费|2:年费]
 *     exp      => 成长经验
 *     gift_mc  => 牧场礼包状态
 *     gift_nc  => 牧场礼包状态
 * );
 */
function qf_updateVipArgs($vip, $now) {
	global $_VIP;
	$vipSpeed = $_VIP['speed'];
	if($vip['join'] == 0) { return $vip; }
	if($vip['valid'] > $now) {
		//常规经验增长
		$days = floor(($now-$vip['last'])/86400);
		$vip['exp'] += $days*$vipSpeed[$vip['status']];
		$vip['last'] += $days*86400;
	} else {
		//补发未转化的经验
		if($vip['last'] < $vip['valid']) {
			$days = floor(($vip['valid']-$vip['last'])/86400);
			$vip['exp'] += $days*$vipSpeed[$vip['status']];
			$vip['last'] += $days*86400;
		}
		//每天减少10经验直到为0
		$days = ceil(($now-$vip['last'])/86400);
		$vip['exp'] += $days*$vipSpeed['-1'];
		$vip['last'] += $days*86400;
		if($vip['exp'] <= 0) {
			$vip['exp'] = 0;
			$vip['join'] = 0;
		}
		$vip['status'] = 0;
	}
	return $vip;
}

?>