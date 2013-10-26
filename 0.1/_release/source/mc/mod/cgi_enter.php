<?php

# 牧场用户信息

$uId = (int)$_REQUEST['uId'] > 0 ? (int)$_REQUEST['uId'] : $_QFG['uid'];

$list = $_QFG['db']->fetchOne("
	SELECT U.uid,U.username,U.regname,U.money,U.vip,
		M.status,M.exp,U.beasts,M.randtime,M.taskid,M.feed,M.decorative,M.bad,M.parade,M.guard,M.dabian,M.enemy,M.research
			FROM app_qqfarm_user U Left JOIN app_qqfarm_mc M ON M.uid=U.uid where U.uid={$uId}
");
$parade = qf_decode($list['parade']);
$animal = qf_decode($list['status']);
$feed = qf_decode($list['feed']);
$decorative = qf_decode($list['decorative']);
$beastsinfo = qf_decode($list['beasts']);
$touarr = array();

//便便
$dabian_mynum = 0;
$dabian_num = $list['dabian'];

//bad
$bad_num = 0;
$bad_mynum = 0;
if($list[bad] != '') {
	$bad = explode(',', $list['bad']);
	$bad_num = count($bad);
	if($uId != $_QFG['uid']) {
		for($i = 0; $i < $bad_num; $i++) {
			if($bad[$i] == $_QFG['uid']) {
				$bad_mynum = $bad_mynum + 1;
			}
		}
		if($bad_mynum > 8) {
			$bad_mynum = 8;
		}
	}
}
//bad

$animalFlag = $needfood = $hourfood = $totaltime = $hungry = 0;
//xieph 计算动物食用的总时间
foreach($animal as $k => $v) {
	$v['cId'] > 0 && $hourfood += $animaltype[$v['cId']]['consum'] /4 ; //动物每小时所需要的食物
	$v['cId'] > 0 && $animalFlag=1;
}
$totaltime = $feed['animalfood'] / $hourfood * 3600; //totaltime:当前食物供动物食用的总时间
$need = 0; //距动物成熟所需要的草
$harvestarr = array();
foreach($animal as $k1 => $v1) { //计算是否有动物即将可收获
	if($v1['cId'] > 0) {
		$animal[$k1]['growtime']==null && $animal[$k1]['growtime']=$_QFG['timestamp']-$animal[$k1]['buyTime'];
		if($v1['postTime']==0){
			$animal[$k1]['p']==null && $animal[$k1]['p'] = 0;
		} else {
			$animal[$k1]['p']==null && $animal[$k1]['p'] = $animal[$k1]['growtime']-3600;
		}
		$growtime = 0;
		if(($_QFG['timestamp'] -  $feed['animalfeedtime']) >= $totaltime ) {
			$growtime = $v1['growtime'] + $totaltime;
			if($growtime >= $animaltime[$v1['cId']][5]) {
				$need += ($animaltime[$v1['cId']][5] - $v1['growtime'])>0 ? ($animaltime[$v1['cId']][5] - $v1['growtime']) / 3600 * $animaltype[$v1['cId']]['consum'] / 4 : 0;
				$harvestarr[] = $k1;
			}
		} else {
			$growtime += $v1['growtime'] + ($_QFG['timestamp'] - $feed['animalfeedtime']);
			if($growtime >= $animaltime[$v1['cId']][5]) {
				$need += ($animaltime[$v1['cId']][5] - $v1['growtime']) > 0 ? ($animaltime[$v1['cId']][5] - $v1['growtime']) / 3600 * $animaltype[$v1['cId']]['consum'] /4 : 0;
				$harvestarr[] = $k1;
			}
		}
	}
}

if($harvestarr) {
	$hourfood = 0;
	foreach($animal as $k2 => $v2) {
		if($v2['cId']>0 && !in_array($k2, $harvestarr)) {
			$hourfood += $animaltype[$v2['cId']]['consum'] / 4;
		}
	}
	if($hourfood>0) {
		$totaltime = ($feed['animalfood'] - $need) / $hourfood * 3600;
	}
}
foreach($animal as $key => $value) {
	if(0 < $value['cId']) {
		if($uId != $_QFG['uid']) {
			if($value['totalCome'] > $animaltype[$value['cId']]['output'] / 2) {
				$touID = explode(',',$value['tou']);
				if(in_array($_QFG['uid'], $touID)) {
					if($touarr[$value['cId']] != 3) {
						$touarr[$value['cId']] = 2;
					}
				} else {
					$touarr[$value['cId']] = 3;
				}
			} elseif($value['totalCome']>0 || $value['totalCome']<=$animaltype[$value['cId']]['output'] / 2) {
				if($touarr[$value['cId']] != 3) {
					$touarr[$value['cId']] = 1;
				}
			} else {
				if($touarr[$value['cId']] != 3) {
					$touarr[$value['cId']] = 0;
				}
			}
		} else {
				$touarr[$value['cId']] = 3;
		}
		$growtime1 = $value['growtime'];
		if( ($_QFG['timestamp'] - $feed['animalfeedtime']) >= $totaltime ) {
			$value['growtime'] += $totaltime;
			if($value['growtime'] >= $animaltime[$value['cId']][5]) {
				$value_feedtime = $animaltime[$value['cId']][5]-$growtime1;
			} else {
				$value_feedtime = $totaltime;
			}
			$hungry = 1;
		} else {
			$value['growtime'] += $_QFG['timestamp'] - $feed['animalfeedtime'];
			if($value['growtime'] >= $animaltime[$value['cId']][5] ) {
				$value_feedtime = $animaltime[$value['cId']][5]-$growtime1;
			} else {
				$value_feedtime = $_QFG['timestamp'] - $feed['animalfeedtime'];
			}
			$hungry = 0;
		}
		$needfood = $value_feedtime / 3600 * $animaltype[$value['cId']]['consum'] / 4;
		$needfood = $needfood > 0 ? $needfood : 0;
		$feed['animalfood'] -= $needfood;
		$totalCome = $value['totalCome'];
		if($value['postTime'] == 0) {
			if($animaltime[$value['cId']][0] + $animaltime[$value['cId']][1] <= $value['growtime']) {
				$status = 3;
				$growTimeNext = 12993;
				$statusNext = 6;
			}
			if($animaltime[$value['cId']][0] <= $value['growtime'] && $value['growtime'] < $animaltime[$value['cId']][0] + $animaltime[$value['cId']][1]) {
				$status = 2;
				$growTimeNext = $animaltime[$value['cId']][0] + $animaltime[$value['cId']][1] - $value['growtime'];
				$statusNext = 3;
			}
			if($value['growtime'] < $animaltime[$value['cId']][0]) {
				$status = 1;
				$growTimeNext = $animaltime[$value['cId']][0] - $value['growtime'];
				$statusNext = 2;
			}
			if($animaltime[$value['cId']][5] <= $value['growtime']) {
				$status = 6;
				$growTimeNext = 0;
				$statusNext = 6;
				$hungry = 0;
			}
		} else {
			$ptime = $value['growtime']-$value['p'];
			if($animaltime[$value['cId']][5] <= $value['growtime']) {
				$status = 6;
				$statusNext = 6;
				$growTimeNext = 0;
				$hungry = 0;
			}
			if($animaltime[$value['cId']][4] <= $ptime) {
				$status = 3;
				$statusNext = 6;
				$growTimeNext = 12993;
			}
			if($ptime <= $animaltime[$value['cId']][4]) {
				$status = 5;
				$statusNext = 3;
				$growTimeNext = $animaltime[$value['cId']][4] - $ptime;
			}
			if($ptime <= $animaltime[$value['cId']][3]) {
				$status = 4;
				$statusNext = 5;
				$growTimeNext = $animaltime[$value['cId']][3] - $ptime;
				$totalCome -= $animaltype[$value['cId']][output];
			}
			if($animaltime[$value['cId']][5] - $animaltime[$value['cId']][3] - $animaltime[$value['cId']][4] < $value['growtime']) {
				$status = 5;
				$statusNext = 6;
				$growTimeNext = $animaltime[$value['cId']][5] - $value['growtime'];
			}
		}
		$growTimeNext = $growTimeNext > 0 ? $growTimeNext : 0;
		// _xieph
		$newanimal[] = array('buyTime'=>$value['buyTime'],'cId'=>$value['cId'],'growTime'=>$value['growtime'],'growTimeNext'=>$growTimeNext,'hungry'=>$hungry,'serial'=>($key+1),'status'=>$status,'statusNext'=>$statusNext,'totalCome'=>$totalCome);
		$animal[$key] = $value;//更新参数
	}
}
$newanimal = str_replace('null', '[]', qf_jsonCode($newanimal));


//更新用户数据
$feed['animalfeedtime'] = $_QFG['timestamp'];
$feed['animalfood'] = ceil($feed['animalfood']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "',feed='".qf_encode($feed)."' where uid=" . $uId);

//新手任务
$taskFlag = $list['taskid'] == 10 ? 0 : 1;

//牧场装饰
foreach($decorative['item1'] as $key => $value1) {
		if($value1['status'] == 1) {
			if($_QFG['timestamp'] < $value1['validtime'] || $value1['yellowtype'] == 1 || $value1['validtime'] == 1  && array_key_exists($key, $itemtypeID)) {
				$itemtypeID = $key;
			} else {
				unset($decorative['item1'][$key]);
				$isUpdate = 1;
				$decorative['item1']['105']['status'] = 1;
				$decorative['item1']['105']['validtime'] = 1;
				$itemtypeID = 105;
			}
		} else {
			if($value1['validtime'] != 1 && $_QFG['timestamp'] >= $value1['validtime'] && array_key_exists($key, $itemtypeID)) {
				unset($decorative['item1'][$key]);
				$isUpdate = 1;
			}
		}
}

is_array($itemtypeID) && $itemtypeID = 105;

if(!$decorative['item1'] || !$decorative['item1'][105]){
		$isUpdate = 1;
		$decorative['item1']['105']['status'] = 0;
		$decorative['item1']['105']['validtime'] = 1;
		$itemtypeID = 105;
}

if($isUpdate == 1) {
	$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative='" . qf_encode($decorative) . "' where uid=" . $uId);
	$isUpdate = 0;
}


$research = qf_decode($list['research']);
if(!$decorative['item5']) {
	$decorative['item5'] = 20120307;
	unset($research);
	$research = array("den"=>array(),"shed"=>array());
	$isUpdate = 1;
}

if($decorative['item2'] > 8){
	$item2Count = count($research['den']);
	if($item2Count < $decorative['item2'] - 8 ){
		$isUpdate = 1;
		$ct2 = $decorative['item2'] - 8;
		for($i = $item2Count; $i < $ct2; $i++) {
			$research['den'][$i] = array("animalid"=>0,"endtime"=>0,"index"=>$i,"type"=>0);
		}
	}
	$research['den'] = array_values($research['den']);
}

if($decorative['item3'] > 8){
	$item3Count = count($research['shed']);
	if($item3Count < $decorative['item3'] - 8 ){
		$isUpdate = 1;
		$ct3 = $decorative['item3'] - 8;
		for($i = $item3Count; $i < $ct3; $i++) {
			$research['shed'][$i] = array("animalid"=>0,"endtime"=>0,"index"=>$i,"type"=>1);
		}
	}
	$research['shed'] = array_values($research['shed']);
}



if($isUpdate == 1) {
	$_QFG['db']->query("UPDATE app_qqfarm_mc set research='" . qf_encode($research) . "',decorative='" . qf_encode($decorative) . "' where uid=" . $uId);
	$isUpdate = 0;
}

//动物收获,偷状态提示
foreach($touarr as $tk=>$tv) {
	if($stealflag) {
		$stealflag .= ',"'.$tk.'":'.$tv;
	} else {
		$stealflag = '"'.$tk.'":'.$tv;
	}
}
//用户名
$username = $list['username'];
if(!$username) {
	$username = $list['regname'];
	if(!$username) {
		$username='牧场玩家';
	}
}

//看守员参数
$guard = qf_decode($list['guard']);
$guardid = '';
if($guard) {
	if($_QFG['timestamp'] < $guard['guardFeedTime']) {
		$striketime = $guard['guardFeedTime'] - $_QFG['timestamp'];
	} else {
		$striketime = 0;
	}
	foreach((array)$guard['guard'] as $key => $value) {
		if($value['status'] == 1) {
			$id = $key;
			$typeid = $id + 105;
			$guardid = ',"guard":{"id":'.(int)$id.',"name":"'.$toolstype[$typeid]['name'].'","striketime":'.$striketime.'}';
		}
	}
}

//放牛信息
@include("source/mc/plus/beasts_info.php");

$ncexp = $_QFG['db']->result('SELECT exp FROM app_qqfarm_nc where uid=' . $uId);

if($uId != $_QFG['uid']) {
	//输出信息
	echo stripslashes('{"animal":' . $newanimal . ',"animalFood":' . $feed['animalfood'] . ',"badinfo":[{"mynum":' . $bad_mynum . ',"num":' . $bad_num . ',"type":1},{"mynum":' . $dabian_mynum . ',"num":' . $dabian_num . ',"type":2}],"c":0,"enemy":{"type":1,"num":' . $list['enemy'] . '},"items":{"1":{"id":'.$itemtypeID.',"lv":1},"2":{"id":102,"lv":' . $decorative['item2'] . '},"3":{"id":103,"lv":' . $decorative['item3'] . '}},"stealflag":{'.$stealflag.'},"parade":' . qf_jsonCode($parade) . ',"task":{"taskFlag":' . $taskFlag .
		',"taskId":' . $list['taskid'] . '},"user":{"exp":' . $list['exp'] . ',"money":' . $list['money'] . ',"moralexp":'.(int)$beastsinfo['moralexp'].',"flv":' . qf_toLevel($ncexp) . ',"uId":' . $uId . '}'.$guardid.',"research":{"den":{"endtime":0,"animalid":0}, "shed":{"endtime":0, "animalid":0}}, "researchext":' . qf_encode($research) . ',"beast":{"drop":'.qf_jsonCode(array_values($beast_drop)).',"info":'.qf_jsonCode(array_values($beast_info)).'}}');
} else {
	//消费提示
	$isread = $_QFG['db']->result('SELECT COUNT(*) FROM app_qqfarm_mclogs WHERE uid=' . $uId . ' and isread = 0');
	$a = $isread ? 1 : 0;
	//留言提示
	$isread = $_QFG['db']->result('SELECT COUNT(*) FROM app_qqfarm_message WHERE toID = ' . $_QFG['uid'] . ' and isread = 0');
	$c = $isread ? 1 : 0;
	//用户头像
	$image = qf_getheadPic(0, 'small');
	//VIP状态
	$vip = qf_decode($list['vip']);
	$yellowstatus = (int)$vip['status'];
	$yellowlevel = qf_toVipLevel($vip['exp']);
	$d = (int)$vip['gift_mc'];
	if($vip['exp']<0){
		$yellowlevel = 0; 
		$yellowstatus = 0; 
		$d = 0;
	} 
	$uin = $uId;
	
	//放牛信息
	@include("source/mc/plus/beasts_return.php");
	//输出信息
	echo '{"animal":' . $newanimal . ',"stealflag":{'.$stealflag.'},"enemy":{"type":1,"num":' . $list['enemy'] . '}'.$guardid.',"items":{"1":{"id":'.$itemtypeID.',"lv":1,"skin":'.(int)$itemtype[$itemtypeID]['skin'].',"msg":'.(int)$itemtype[$itemtypeID]['msg'].'},"2":{"id":102,"lv":' . $decorative['item2'] . '},"3":{"id":103,"lv":' . $decorative['item3'] . '}},"a":' . $a . ',"c":' . $c . ',"d":' . $d. ',"notice":"","animalFood":' . $feed['animalfood'] . ',"badinfo":[{"mynum":' . $bad_mynum . ',"num":' . $bad_num . ',"type":1},{"mynum":' . $dabian_mynum . ',"num":' . $dabian_num . ',"type":2}],"parade":' . qf_jsonCode($parade) . ',"serverTime":{"time":' . $_QFG['timestamp'] . '},"task":{"taskFlag":' . $taskFlag . ',"taskId":' . $list['taskid'] . '},"user":{"exp":' . $list['exp'] . ',"headPic":"'.$image.'","money":' . $list['money'] . ',"moralexp":'.(int)$beastsinfo['moralexp'].',"flv":' . qf_toLevel($ncexp) . ',"FBPrice":' . $list['money'] . ',"uId":' . $uId . ',"uin":' . (int)$uin . ',"userName":"' . $username . '","yellowlevel":' . $yellowlevel . ',"yellowstatus":' . $yellowstatus . '},"weather":{"weatherDesc":"晴天","weatherId":1},"research":{"den":{"endtime":0,"animalid":0}, "shed":{"endtime":0, "animalid":0}}, "researchext":' . qf_encode($research) . ',"beast":{"drop":'.qf_jsonCode(array_values($beast_drop)).',"info":'.qf_jsonCode(array_values($beast_info)).',"return":'.qf_jsonCode(array_values($beastsall)).'}}';
}
//随机刷蚊子、便便、老鼠
if(($_QFG['timestamp']-$list['randtime'])>20 && $animalFlag==5) {
	$_QFG['db']->query("UPDATE app_qqfarm_mc set randtime=".$_QFG['timestamp']." where uid=" . $uId);
	if(mt_rand(0, 100) < 21) {
		include("source/mc/plus/bad_mc.php");
	}
}
		


?>