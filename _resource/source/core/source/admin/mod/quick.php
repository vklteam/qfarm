<?php

# 快速管理

$go = $_GET['go'];

if($go == "cache_clean") {
	qf_delCache('data/*.php');
	qf_delCache('data/nc/*.php');
	qf_delCache('data/mc/*.php');
	qf_delCache('data/xml/*.xml');
	qf_delCache('data/view/*.php');
	qf_delCache('data/friend/*.php');
	die('1|&|清理全部缓存成功.');
} elseif($go == "cache_clean1") {
	qf_delCache('data/nc/*.php');
	die('1|&|清理农场缓存成功.');
} elseif($go == "cache_clean2") {
	qf_delCache('data/mc/*.php');
	die('1|&|清理牧场缓存成功.');
} elseif($go == "cache_clean3") {
	qf_delCache('data/view/*.php');
	die('1|&|清理风格缓存成功.');
} elseif($go == "exchange_clean") {
	$_QFG['db']->query("DELETE FROM app_qqfarm_nclogs ");
	$_QFG['db']->query("DELETE FROM app_qqfarm_mclogs ");
	$_QFG['db']->query("DELETE FROM app_qqfarm_message");
	die('1|&|清理消费日志成功.');
} elseif($go == "mc_clean") {
	$_QFG['db']->query("update app_qqfarm_mc set bad='',dabian=0");
	die('1|&|清理牧场蚊子和便便成功.');
} elseif($go == "repertory_clean") {
	$_QFG['db']->query("update app_qqfarm_nc set repertory=''");
	$_QFG['db']->query("update app_qqfarm_mc set repertory=''");
	die('1|&|初始化成果.');
} elseif($go == "add_money") {
	$_QFG['db']->query("update app_qqfarm_user set money=money+" . intval($_GET["money"]));
	die('1|&|增加金币成功.');
} elseif($go == "add_yb") {
	$_QFG['db']->query("update app_qqfarm_user set yb=yb+" . intval($_GET["yb"]));
	die('1|&|增加元宝成功.');
} elseif($go == "add_exp") {
	$_QFG['db']->query("update app_qqfarm_nc set exp=exp+" . intval($_GET["nc"]));
	$_QFG['db']->query("update app_qqfarm_mc set exp=exp+" . intval($_GET["mc"]));
	die('1|&|增加经验成功.');
} elseif($go == "healthmode") {

	$list1 = $_QFG['db']->fetchAll("SELECT uid,vip FROM app_qqfarm_user");
	foreach($list1 as $key1 => $value1) {
		//修复VIP
		$vip = qf_decode($value1['vip']);
		if( $vip['status'] > 0 || $vip['valid'] >$_QFG['timestamp'] ){
			if(!(int)$vip['join']) $vip['join'] = $_QFG['timestamp'];
			if(!(int)$vip['last']) $vip['last'] = $_QFG['timestamp'];
			if(!(int)$vip['valid']) $vip['valid'] = $_QFG['timestamp'];
			if(!(int)$vip['status']) $vip['status'] = 0;
			if(!(int)$vip['exp']) $vip['exp'] = 0;
			if(!(int)$vip['gift_mc']) $vip['gift_mc'] = 0;
			if(!(int)$vip['gift_nc']) $vip['gift_nc'] = 0;
		} else {
			$vip['join'] = 0;
			$vip['last'] = 0;
			$vip['valid'] = 0;
			$vip['status'] = 0;
			$vip['exp'] = 0;
			$vip['gift_mc'] = 0;
			$vip['gift_nc'] = 0;		
		}
		$_QFG['db']->query("UPDATE app_qqfarm_user set vip='" . qf_encode($vip) . "' where uid=" . $value1['uid']);
	}

	$hm = '{"beginTime":0,"canClose":1,"date":"1970-01-01|1970-01-07","endTime":0,"serverTime":1266900062,"set":0,"time":"08|00","valid":0}';
	$_QFG['db']->query("update app_qqfarm_nc set healthmode='{$hm}'");
	die('1|&|修复健康模式、VIP成功.');
} elseif($go == "sendgift") {
	include('source/admin/mod/quick_gift.php');
} elseif($go == "sendmsg") {
	$name = $_GET["name"];
	$msg = $_POST["msg"];
	if(!$name || !$msg) {
		die('0|&|操作失败：管理员名称或留言不能为空.');
	}
	$users = $_QFG['db']->fetchAll("SELECT uid FROM app_qqfarm_user");
	foreach($users as $v) {
		$_QFG['db']->query("INSERT INTO app_qqfarm_message (`toid`, `toname`, `fromid`, `fromname`, `msg`, `time`, `isreply`, `isread`) VALUES ({$v['uid']}, '". qf_getUserName($v['uid'])."', {$_QFG['uid']}, '{$name}', '{$msg}', {$_QFG['timestamp']}, 0, 0)");
	}
	die('1|&|管理员留言成功.');
} elseif($go == "delmsg") {
	$name = $_GET["name"];
	if(!$name) {
		die('0|&|操作失败：管理员名称不能为空.');
	}
	$_QFG['db']->query("DELETE FROM app_qqfarm_message where fromname ='{$name}'");
	die('1|&|删除管理员名为“'. $name .'”的所有留言成功.');
} elseif($go == "farmland") {
	qf_getCache('cropstype', '/nc/');
	//修正牧场数据
	$list2 = $_QFG['db']->fetchAll("SELECT uid, status FROM app_qqfarm_mc");
	foreach($list2 as $key => $value) {
		$mc_status =  qf_decode($value['status']);
		foreach($mc_status as $mkey=>$v) {
			if($mc_status[$mkey]['cId']>0){
				$buyTime = $mc_status[$mkey]['buyTime'];
				$cId = $mc_status[$mkey]['cId'];
				$growtime = $_QFG['timestamp'] - $buyTime;
				$mc_status[$mkey] = array('buyTime'=>$buyTime,'cId'=>$cId,'postTime'=>0,'totalCome'=>0,'tou'=>'','growtime'=>$growtime,'p'=>0);
			} else unset($mc_status[$mkey]);
		}
		//保存参数
		$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($mc_status)) . "' where uid=" . $value['uid']);
	}

	$list1 = $_QFG['db']->fetchAll("SELECT uid, beasts FROM app_qqfarm_user");
	foreach($list1 as $key => $value) {
		//修复种子
		$beasts = qf_decode($value['beasts']);
		foreach($beasts['info_nc'] as $ik=>$iv) {
			if($iv['fid']==0) {
				unset($beasts['info_nc'][$ik]);
			}
		}
		foreach($beasts['info_mc'] as $ik=>$iv) {
			if($iv['fid']==0) {
				unset($beasts['info_mc'][$ik]);
			}
		}
		//获取农田参数
		foreach($beasts['sys_nc'] as $ik=>$iv) {
			if($iv['fid']==0) {
				unset($beasts['sys_nc'][$ik]);
			}
		}
		foreach($beasts['sys_mc'] as $ik=>$iv) {
			if($iv['fid']==0) {
				unset($beasts['sys_mc'][$ik]);
			}
		}
		$beasts['drop']=array();
		$beasts['info_nc'] = array_values($beasts['info_nc']);
		$beasts['info_mc'] = array_values($beasts['info_mc']);
		$beasts['sys_nc'] = array_values($beasts['sys_nc']);
		$beasts['sys_mc'] = array_values($beasts['sys_mc']);
		//保存参数
		$_QFG['db']->query("UPDATE app_qqfarm_user set beasts='" . qf_encode($beasts) . "' where uid=" . $value['uid']);
	}

	$list = $_QFG['db']->fetchAll("SELECT uid, status, package, reclaim,redland,black FROM app_qqfarm_nc");
	foreach($list as $key => $value) {
		//修复种子
		$package = qf_decode($value['package']);
		foreach($package as $pk=>$pv) {
			if(!in_array($pk, array_keys($cropstype))) {
				unset($package[$pk]);
			}
		}
		//获取农田参数
		$status = qf_decode($value['status']);
		$black = qf_decode($value['black']);
		//获取实际开垦农田数
		$farmlandCount = count($status);
		//添加需开垦的农田
		if($farmlandCount < $value['reclaim']) {
			for($i = $farmlandCount; $i < $value['reclaim']; $i++) {
				$status[$i] = array("a"=>0,"b"=>0,"c"=>0,"d"=>0,"e"=>1,"f"=>0,"g"=>0,"h"=>1,"i"=>100,"j"=>0,"k"=>0,"l"=>0,"m"=>0,"n"=>array(),"o"=>0,"p"=>array(),"q"=>0,"r"=>1251351725,"bitmap"=>0,"pId"=>0);
			}
		}
		//删除多开垦的农田
		elseif($farmlandCount > $value['reclaim']) {
			foreach($status as $k => $v) {
				if($k >= $value['reclaim']) {
					unset($status[$k]);
				}
			}
		}
		//红土地
		if($value['redland']>0 && $value['redland']<25 && $value['reclaim']>=18) {
			foreach($status as $sk=>$sv) {
				if($sk<$value['redland']) {
					$status[$sk]['bitmap'] = 1;
				} else {
					$status[$sk]['bitmap'] = 0;
				}
			}
		}
		//黑土地
		if($value['redland']>0 && $black['number']<25 && $value['reclaim']>=18) {
			foreach($status as $sk=>$sv) {
				if($sk<$black['number']) {
					$status[$sk]['bitmap'] = 2;
				}
			}
		}
		//保存农田参数
		$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "',package='" . qf_encode($package) . "' where uid=" . $value['uid']);
	}

	die('1|&|修复农田参数,种子,背包,修正动物参数成功.');
} else {
	qf_getCache('cropstype', '/nc/');
	qf_getCache('fishtype', '/nc/');
	qf_getCache('crystalinf', '/mc/');
	$nc_itemtype = qf_getCache('itemtype', '/nc/');
	qf_getCache('toolstype', '/nc/');
	$mc_itemtype = qf_getCache('itemtype', '/mc/');
	qf_getCache('animaltype', '/mc/');
	qf_getView("admin/quick");
}

?>