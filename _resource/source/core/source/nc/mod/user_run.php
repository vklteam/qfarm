<?php

# 访问自己和别人农场

if($_REQUEST['ownerId'] && $_QFG['uid'] != $_REQUEST['ownerId']) {
	$toFriend = true;
	$uId = (int)$_REQUEST['ownerId'];
}
else $uId = $_QFG['uid'];

if($toFriend) {
	$list = $_QFG['db']->fetchOne("
		SELECT U.uid,U.username,U.beasts,U.regname,U.money,U.yb,U.pf,U.tianqi,
			N.status,N.reclaim,N.exp,N.taskid,N.badnum,N.dog,N.decorative,N.activeItem,N.black,N.healthMode,N.chris,N.randtime
				FROM  app_qqfarm_user U Left JOIN app_qqfarm_nc N ON N.uid=U.uid where U.uid={$uId}
	");
} else {
	$list = $_QFG['db']->fetchOne("
		SELECT U.uid,U.username,U.beasts,U.regname,U.money,U.yb,U.vip,U.pf,U.tianqi,
			N.status,N.reclaim,N.nc_e,N.exp,N.taskid,N.badnum,N.dog,N.decorative,N.chris,N.black,N.activeItem,N.healthMode,N.randtime 
				FROM app_qqfarm_user U Left JOIN app_qqfarm_nc N ON N.uid=U.uid where U.uid={$uId}
	");
}

$username=$list['username'];
if(!$username){
	$username=$list['regname'];
	if(!$username){
		$username='农场玩家';
	}
}
//健康模式
$isUpdate = 0;
$healthMode = qf_decode($list['healthMode']);
if($_QFG['timestamp'] > $healthMode['endTime']) {
	$set = 0;
	$valid = 0;
	$canClose = 1;
	if($healthMode['valid'] != 0) {
		$isUpdate = 1;
		$healthMode['beginTime'] = 0;
		$healthMode['endTime'] = 0;
		$healthMode['set'] = 0;
		$healthMode['valid'] = 0;
		$healthMode['canClose'] = 1;
		$healthMode['date'] = '1970-01-01|1970-01-07';
	}
} elseif($_QFG['timestamp'] < $healthMode['beginTime'] && $healthMode['beginTime'] != 0) {
	$set = 1;
	$valid = 0;
	$canClose = 1;
} else {
	$set = 1;
	$valid = 1;
	$canClose = 0;
}
if($isUpdate == 1) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set healthMode='" . qf_encode($healthMode) . "' where uid=" . $uId);
	$isUpdate = 0;
}

//农田参数
$status = qf_decode($list['status']);
foreach($status as $key => $value) {
	//修复可能的错误
	if($key >= $list['reclaim']) {
		unset($status[$key]);
		$isUpdate = 1;
		continue;
	}
	if(!$status[$key]['bitmap']){
		$status[$key]['bitmap'] = 0;
	}
	if(!$status[$key]['pId']){
		$status[$key]['pId'] = 0;
	}
	if(!$status[$key]['goldLand']){
		$status[$key]['goldLand'] = 0;
	}

	//更新作物状态
	/*if($status[$key]['a'] != 0) {
		$a = $status[$key]['a'];
		$q = $status[$key]['q'];
		$k = $status[$key]['k'];
		$p = (array)$status[$key]['p'];
		if($status[$key]['bitmap'] == 2){
			$zuowutime = $_QFG['timestamp'] - $q - (0.2 * $cropstype[$a]['growthCycle']);
		}else {
			$zuowutime = $_QFG['timestamp'] - $q;
		}
		if($zuowutime >= $cropstype[$a]['growthCycle'] && $k == 0 && $q != 0) {
			$b = 6;
			$c = 0;
			$d = 0;
			$e = 1;
			$f = 0;
			$g = 0;
			$h = 1;
			$k = $cropstype[$a]['output'];
			$cnt = 0; //
			foreach($p as $pk => $pv) {
				if($pv == 1 or $pv == 2) {
					$cnt += ceil(($_QFG['timestamp'] - $pk) / 300) + 1;
				} elseif($pv == 3) {
					$cnt += ceil(($_QFG['timestamp'] - $pk) / 300) * 2 + 2;
				}
			}
			if($cnt > 50) {
				$cnt = 50;
			}
			$k = ceil($k * (100 - $cnt) / 100);
			$l = floor($k * 0.6);
			if( $status[$key]['bitmap'] == 1 && (int)$cropstype[$a]['isRed'] !=1 ){
				$k = intval($k * 1.1);
			}elseif( $status[$key]['bitmap'] == 2 && (int)$cropstype[$a]['isRed'] !=2 ){
				$k = intval($k * 1.2);
			}
			$m = $k;
			$status[$key]['b'] = $b;
			$status[$key]['c'] = $c;
			$status[$key]['d'] = $d;
			$status[$key]['e'] = $e;
			$status[$key]['f'] = $f;
			$status[$key]['g'] = $g;
			$status[$key]['h'] = $h;
			$status[$key]['k'] = $k;
			$status[$key]['l'] = $l;
			$status[$key]['m'] = $m;
			$isUpdate = 1;
		}
	}*/
}

if($isUpdate == 1) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "', randtime=".$list['randtime']." where uid=" . $uId);
	$isUpdate = 0;
}

//装饰参数
$decorative = qf_decode($list['decorative']);
foreach($decorative as $item_type => $value) {
	foreach($value as $key => $value1) {
		if($value1['status'] == 1) {
			if(($_QFG['timestamp'] < $value1['validtime'] || $value1['validtime'] == 1) && array_key_exists($key, $itemtype)) {
				$decorative_echo[$item_type]['itemId'] = $key;
			} else {
				unset($decorative[$item_type][$key]);
				$isUpdate = 1;
				$decorative[$item_type][$item_type]['status'] = 1;
				$decorative[$item_type][$item_type]['validtime'] = 1;
				$decorative_echo[$item_type]['itemId'] = $item_type;
			}
		} else {
			if($value1['validtime'] != 1 && $_QFG['timestamp'] >= $value1['validtime']) {
				unset($decorative[$item_type][$key]);
				$isUpdate = 1;
			}
		}
	}

	 if(!$decorative[$item_type]){
		 $isUpdate = 1;
		 $decorative[$item_type][$item_type]['status'] = 1;
		 $decorative[$item_type][$item_type]['validtime'] = 1;
		 $decorative_echo[$item_type]['itemId'] = $item_type;
	 }
}

if($isUpdate == 1) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='" . qf_encode($decorative) . "' where uid=" . $uId);
	$isUpdate = 0;
}

//狗狗参数
$dog = qf_decode($list['dog']);
$dogstr['dogId'] = 0;
$dogstr['isHungry'] = 0;
if($_QFG['timestamp'] > $dog['dogFeedTime']) {
	$dogstr['isHungry'] = 1;
} else {
	$dogstr['isHungry'] = 0;
}

foreach((array)$dog['dogs'] as $key => $value) {
	if($value['dogUnWorkTime'] == 1 || $value['dogUnWorkTime'] > $_QFG['timestamp']){
	} else {
		$isUpdate = 1;
		unset($dog['dogs'][$key]);
	}
}

if($dog) {
	foreach((array)$dog['dogs'] as $key => $value) {
		if($value['status'] == 1) {
			$decorative_echo['8']['itemId'] = 80000 + $key;
			$dogstr['dogId'] = $key;
		}
	}
}
if($isUpdate == 1) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set dog='" . qf_encode($dog) . "' where uid=" . $uId);
	$isUpdate = 0;
}
//广告牌
if($list['activeItem'] > 0) $decorative_echo['9']['itemId'] = $list['activeItem'];	

//农场形象
if($decorative['10'] > 0) $decorative_echo['10']['itemId'] = (int)$decorative['10'];

//新手任务
$taskid = '';
if($list['taskid'] < 12) {
	$taskid = ',"task":{"taskId":' . $list['taskid'] . ',"taskFlag":1}';
}
if($list['taskid'] == 0) {
	$taskid = ',"task":{"taskId":1,"taskFlag":1},"welcome":1';

}

//返回信息
$items = qf_jsonCode($decorative_echo);
if($items == 'null') {
	$items = '{"1":{"itemId":1},"2":{"itemId":2},"3":{"itemId":3},"4":{"itemId":4}}';
	$itemsdb = '{"1":{"1":{"status":1,"validtime":1}},"2":{"2":{"status":1,"validtime":1}},"3":{"3":{"status":1,"validtime":1}},"4":{"4":{"status":1,"validtime":1}}}';
	$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='".$itemsdb."' where uid=" . $uId);
	
}
//放牛信息
@include("source/nc/plus/beast_info.php");

if($toFriend) {
	//NPC任务参数
	if($_QSC['missionName']) {
		@include("source/nc/mission/{$_QSC['missionName']}_vars_2.php");
	}
	isset($npc) || $npc = '';
	//返回信息
	echo '{"a":0,"c":0,"dog":' . qf_jsonCode($dogstr) . ',"exp":' . $list['exp'] . ',"farmlandStatus":' . qf_jsonCode($status) . ',"items":' . $items . $npc.',"user":{"healthMode":{"beginTime":' . $healthMode['beginTime'] . ',"canClose":' . $canClose . ',"date":"' . $healthMode['date'] . '","endTime":' . $healthMode['endTime'] . ',"serverTime":' . $_QFG['timestamp'] . ',"set":' . $set . ',"time":"' . $healthMode['time'] . '","valid":' . $valid . '},"moralexp":'.(int)$beastsinfo['moralexp'].',"pf":' . $list['pf'] . '},"beast":{"drop":'.qf_jsonCode(array_values($beast_drop)).',"info":'.qf_jsonCode(array_values($beast_info)).'}}';
} else {
	//使坏次数
	$canbad = $list['badnum'];
	//消费提示
	$isread = $_QFG['db']->result('SELECT COUNT(*) FROM app_qqfarm_nclogs WHERE uid = ' . $_QFG['uid'] . ' and isread = 0');
	$a = $isread ? 1 : 0;
	//留言提示
	$isread = $_QFG['db']->result('SELECT COUNT(*) FROM app_qqfarm_message WHERE toID = ' . $_QFG['uid'] . ' and isread = 0');
	$c = $isread ? 1 : 0;
	//天气
	$tqq = $list['tianqi'] == 1 ? '晴天' : '雨天';
	//更新访问时间
	$_QFG['db']->query("UPDATE app_qqfarm_user set visittime=".$_QFG['timestamp']." where uid=" . $uId);
	//VIP状态
	$vip = qf_decode($list['vip']);
	$yellowlevel = qf_toVipLevel($vip['exp']);
	$yellowstatus = (int)$vip['status'];
	$d = (int)$vip['gift_nc'];
	if($vip['exp']<0) {
		$yellowlevel = 0;
		$yellowstatus = 0;
		$d = 0;
	}  
	//黄金土地
	$gold = qf_decode($list['black']);
	
	//uinLogin
	$uinLogin = $_QFG['uid'];
	//NPC任务参数
	if($_QSC['missionName']) {
		@include("source/nc/mission/{$_QSC['missionName']}_vars.php");
	}
	$missionTime =$mission['PrepareTime'] ? strtotime($mission['PrepareTime']) : $_QFG['timestamp'];
	//放牛信息
	@include("source/nc/plus/beasts_return.php");
	//返回信息
	echo '{"a":' . $a . ',"b":1,"c":' . $c . ',"d":' . $d . ',"dog":' . qf_jsonCode($dogstr) . ',"e":' . $list['nc_e'] . ',"exp":' . $list['exp'] . ',"farmlandStatus":' . qf_jsonCode($status) . ',"items":' . $items . ',"serverTime":{"time":' . $_QFG['timestamp'] . '}' . $taskid . ',"user":{"canbad":' . $canbad . ',"exp":' . $list['exp'] . ',"headPic":"' . qf_getheadPic(0, 'small') . '","healthMode":{"beginTime":' . $healthMode['beginTime'] . ',"canClose":' . $canClose . ',"date":"' . $healthMode['date'] . '","endTime":' . $healthMode['endTime'] . ',"serverTime":' . $_QFG['timestamp'] . ',"set":' . $set . ',"time":"' . $healthMode['time'] . '","valid":' . $valid . '},"missionTime":' . $missionTime . ',"money":' . $list['money'] . ',"FB":' . $list['yb'] . ',"moralexp":'.(int)$beastsinfo['moralexp'].',"pf":1,"uId":' . $_QFG['uid'] . ',"uinLogin":'.$uinLogin.',"userName":"' . $username . '","yellowlevel":' . $yellowlevel . ',"yellowstatus":' . $yellowstatus . '},"weather":{"weatherDesc":"' . $tqq . '","weatherId":' . $list['tianqi'] . '},"beast":{"drop":'.qf_jsonCode(array_values($beast_drop)).',"info":'.qf_jsonCode(array_values($beast_info)).',"return":'.qf_jsonCode(array_values($beastsall)).'},"actInfo":{"goldLandCard":'.(int)$gold['gold'].'}}';
}

//随机刷草，虫，旱，放牛
if(($_QFG['timestamp']-$list['randtime']) > 3600 ) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set randtime=".$_QFG['timestamp']." where uid=" . $uId);
	if(mt_rand(0, 100) < 21) {
		include("source/nc/plus/bad_nc.php");
	}
}

?>