<?php

# Y币购买

$value = $_QFG['db']->fetchOne("SELECT yb,vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$fb = (int)$value['yb'];
$vip = qf_decode($value['vip']);
$activeitem = $_REQUEST['payitem'];
list($ai, $number) = explode("-", $activeitem);

$type = intval($ai/10000);

if($type == 5) {
	$guard = $_QFG['db']->result("SELECT guard FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$guard = qf_decode($guard);
	$wid = $ai-50000;
	if($vip['status']) {
		$buy_fb = $toolstype[$wid]["yqdprice"] * $number;
	} else {
		$buy_fb = $toolstype[$wid]["qdprice"] * $number;
	}
	$name = $toolstype[$wid]['name'];

	if($buy_fb == 0) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"系统出错啦，请刷新以后重试！","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"余额不足,请先充值","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($guard["guardFeedTime"] < $_QFG['timestamp']) {
		$guard["guardFeedTime"] = $_QFG['timestamp'] + $toolstype[$wid]["effect"]*$number;
	} else {
		$guard["guardFeedTime"] = $guard["guardFeedTime"] + $toolstype[$wid]["effect"]*$number;
	}
	$_QFG['db']->query("UPDATE app_qqfarm_mc set guard='" . qf_encode($guard) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . " where uid=" . $_QFG['uid']);

	//消费日志
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $_QFG['uid'] . " AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if (($value['type'] == 11) && ($value['fromid'] == $_QFG['uid']) && ($number > 0)) {
			$list = $value['iid'];
			$money = $value['money'];
			$scount = $value['count'];
			$stime = $value['time'];
			$sy=explode(",",$list);
			$ct=explode(",",$scount);
			if(in_array(($activeitem+10000),$sy)){
				for($i=0;$i<count($sy);$i++){
					if($sy[$i]==($activeitem+10000)){
						$ct[$i] = $ct[$i]+$number;
					}
				}
				$scount = implode(",",$ct);
				$list = $list;
			}else{
				$list = $list . "," . ($activeitem+10000);
				$scount = $scount . "," . $number;
			}
			$money = $money + $buy_fb;
			$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list .
			"', money = '" . $money . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] .
			", isread = 1 where uid = " . $_QFG['uid'] .
			" AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" .
			$_QFG['uid'];
		}
	}
	if(!$sql1 && $number > 0) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .
		$_QFG['uid'] . ", 11," . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . 
		($activeitem+10000) . ", 1, " . $buy_fb . ");";
	}
	$query = $_QFG['db']->query($sql1);
	echo '{"code":0,"payresultcode":0,"payerrorcode":0,"msg":"购买成功。","payqb":30,"payqp":0,"dnaurl":""}';
}

if($type == 6) {
	$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$decorative = qf_decode($decorative);
	$itemID = $ai-60000;
	if($vip['status']) {
		$buy_fb = $itemtype[$itemID]["YFBPrice"] * $number;
	} else {
		$buy_fb = $itemtype[$itemID]["FBPrice"] * $number;
	}

	$buy_time = $itemtype[$itemID]['itemValidTime'];
	$buy_type = $itemtype[$itemID]['itemType'];
	$buy_exp = $itemtype[$itemID]['exp'];

	if($buy_fb == 0) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"系统出错啦，请刷新以后重试！","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"余额不足,请先充值","payqb":0,"payqp":0,"dnaurl":""}');
	}

	foreach($decorative['item1'] as $key => $value1) {
		if($key == $itemID && (int)$value1['yellowtype'] == 0) {
			die('{"code":1,"payresultcode":0,"payerrorcode":0,"msg":"你已经购买过了，不必重复购买！","payqb":0,"payqp":0,"dnaurl":""}');
		} else {
			$dec = 1;
			$decorative['item1'][$itemID]['status'] = 1;
			$decorative['item1'][$itemID]['validtime'] = $_QFG['timestamp'] + $buy_time;
			$decorative['item1'][$itemID]['yellowtype'] = 0;

		}
	}

	if($dec) {
		foreach($decorative['item1'] as $key => $value1) {
			if($key != $itemID) $decorative['item1'][$key]['status'] = 0;
		}
	}

	$_QFG['db']->query("UPDATE app_qqfarm_mc set exp = exp + " . $buy_exp . ",decorative='" . qf_encode($decorative) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . " where uid=" . $_QFG['uid']);

	echo '{"code":0,"addExp":' . $buy_exp . ',"levelUp":false}';
}

if($type == 7) {
	$fertarr = $_QFG['db']->result("SELECT tools FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$fertarr = qf_decode($fertarr);
	$wid = $ai-70000;
	if($vip['status']) {
		$buy_fb = $toolstype[$wid]["yqdprice"] * $number;
	} else {
		$buy_fb = $toolstype[$wid]["qdprice"] * $number;
	}
	$name = $toolstype[$wid]['name'];
	if($buy_fb == 0) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"系统出错啦，请刷新以后重试！","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"余额不足,请先充值","payqb":0,"payqp":0,"dnaurl":""}');
	}
	$fertarr[$wid] = $fertarr[$wid] + $number;

	$_QFG['db']->query("UPDATE app_qqfarm_mc set tools='" . qf_encode($fertarr) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . " where uid=" . $_QFG['uid']);

	//消费日志
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $_QFG['uid'] . " AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if (($value['type'] == 11) && ($value['fromid'] == $_QFG['uid']) && ($number > 0)) {
			$list = $value['iid'];
			$money = $value['money'];
			$scount = $value['count'];
			$stime = $value['time'];
			$sy=explode(",",$list);
			$ct=explode(",",$scount);
			if(in_array(($activeitem+10000),$sy)){
				for($i=0;$i<count($sy);$i++){
					if($sy[$i]==($activeitem+10000)){
						$ct[$i] = $ct[$i]+$number;
					}
				}
				$scount = implode(",",$ct);
				$list = $list;
			}else{
				$list = $list . "," . ($activeitem+10000);
				$scount = $scount . "," . $number;
			}
			$money = $money + $buy_fb;
			$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list .
			"', money = '" . $money . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] .
			", isread = 1 where uid = " . $_QFG['uid'] .
			" AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" .
			$_QFG['uid'];
		}
	}
	if(!$sql1 && $number > 0) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .
		$_QFG['uid'] . ", 11," . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . 
		($activeitem+10000) . ", 1, " . $buy_fb . ");";
	}
	$query = $_QFG['db']->query($sql1);

	echo '{"tId":' . $wid . ',"name":"' . $name . '","code":1,"msg":"购买成功。","num":' . $number . ',"fb":-' . $buy_fb . ',"money":0,"type":' . $type . '}';
}

if($type == 10) {
	$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$mctools = $_QFG['db']->result("SELECT tools FROM app_qqfarm_user where uid=" . $_QFG['uid']);
	$tools = $_QFG['db']->result("SELECT tools FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
	$fertarr = $_QFG['db']->result("SELECT tools FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$fruit = qf_decode($fruit);
	$mctools = qf_decode($mctools);
	$tools = qf_decode($tools);
	$fertarr = qf_decode($fertarr);
	$wid = $ai-100000;
	$wd = $ai-100010;
	if($ai < 100009 && $ai > 100000) $wid = $ai;
	if($vip['status']) {
		$buy_fb = $toolstype[$wid]["yqdprice"] * $number;
	} else {
		$buy_fb = $toolstype[$wid]["qdprice"] * $number;
	}
	$name = $toolstype[$wid]['name'];
	if($buy_fb == 0) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"系统出错啦，请刷新以后重试！","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"余额不足,请先充值","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($ai < 100009){
		$mctools[$ai] += $number;
		//$name = $toolstype[$ai]['name'];
	} elseif($ai == 100015){
		$fertarr[1] = $fertarr[1] + 5 * $number;
		$tools[7] = $tools[7] + $number;
	} elseif($ai == 100016){
		$fertarr[2] = $fertarr[2] + 5 * $number;
		$tools[7] = $tools[7] +2 * $number;
	} elseif($ai == 100017){
		$fertarr[3] = $fertarr[3] + 3 * $number;
		$fertarr[2] = $fertarr[2] + $number;
		$fertarr[1] = $fertarr[1] + $number;
		$fertarr[4] = $fertarr[4] + 5 * $number;
		$fruit[2001] += $number;
	} elseif($ai == 100018){
		$fertarr[3] = $fertarr[3] + 3 * $number;
		$fertarr[2] = $fertarr[2] + $number;
		$fertarr[1] = $fertarr[1] + $number;
		$fertarr[4] = $fertarr[4] + 5 * $number;
		$fruit[2003] += $number;
	} elseif($ai == 100019){
		$fertarr[3] = $fertarr[3] + 3 * $number;
		$fertarr[2] = $fertarr[2] + $number;
		$fertarr[1] = $fertarr[1] + $number;
		$fertarr[4] = $fertarr[4] + 5 * $number;
		$fruit[2007] += $number;
	} else {
		$fertarr[$wd] = $fertarr[$wd] + 7 * $number;
	}


	$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($tools) . "',fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set tools='" . qf_encode($fertarr) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . ",tools='" . qf_encode($mctools) . "' where uid=" . $_QFG['uid']);

	//消费日志
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $_QFG['uid'] . " AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if (($value['type'] == 11) && ($value['fromid'] == $_QFG['uid']) && ($number > 0)) {
			$list = $value['iid'];
			$money = $value['money'];
			$scount = $value['count'];
			$stime = $value['time'];
			$sy=explode(",",$list);
			$ct=explode(",",$scount);
			if(in_array(($activeitem+10000),$sy)){
				for($i=0;$i<count($sy);$i++){
					if($sy[$i]==($activeitem+10000)){
						$ct[$i] = $ct[$i]+$number;
					}
				}
				$scount = implode(",",$ct);
				$list = $list;
			}else{
				$list = $list . "," . ($activeitem+10000);
				$scount = $scount . "," . $number;
			}
			$money = $money + $buy_fb;
			$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list .
			"', money = '" . $money . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] .
			", isread = 1 where uid = " . $_QFG['uid'] .
			" AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" .
			$_QFG['uid'];
		}
	}
	if(!$sql1 && $number > 0) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .
		$_QFG['uid'] . ", 11," . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . 
		($activeitem+10000) . ", 1, " . $buy_fb . ");";
	}
	$query = $_QFG['db']->query($sql1);

	echo '{"tId":' . $wid . ',"name":"' . $name . '","code":1,"msg":"购买成功。","num":' . $number . ',"fb":-' . $buy_fb . ',"money":0,"type":' . $type . '}';
}

if($type == 12) {
	$fertarr = $_QFG['db']->result("SELECT tools FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
	$fertarr = qf_decode($fertarr);
	$wid = $ai-120000;
	if($vip['status']) {
		$buy_fb = $toolstype[$wid]["yqdprice"] * $number;
	} else {
		$buy_fb = $toolstype[$wid]["qdprice"] * $number;
	}
	$name = $toolstype[$wid]['name'];
	if($buy_fb == 0) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"系统出错啦，请刷新以后重试！","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"余额不足,请先充值","payqb":0,"payqp":0,"dnaurl":""}');
	}
	$fertarr[$wid] = $fertarr[$wid] + $number;

	$_QFG['db']->query("UPDATE app_qqfarm_mc set tools='" . qf_encode($fertarr) . "' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . " where uid=" . $_QFG['uid']);

	//消费日志
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $_QFG['uid'] . " AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if (($value['type'] == 11) && ($value['fromid'] == $_QFG['uid']) && ($number > 0)) {
			$list = $value['iid'];
			$money = $value['money'];
			$scount = $value['count'];
			$stime = $value['time'];
			$sy=explode(",",$list);
			$ct=explode(",",$scount);
			if(in_array(($activeitem+10000),$sy)){
				for($i=0;$i<count($sy);$i++){
					if($sy[$i]==($activeitem+10000)){
						$ct[$i] = $ct[$i]+$number;
					}
				}
				$scount = implode(",",$ct);
				$list = $list;
			}else{
				$list = $list . "," . ($activeitem+10000);
				$scount = $scount . "," . $number;
			}
			$money = $money + $buy_fb;
			$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list .
			"', money = '" . $money . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] .
			", isread = 1 where uid = " . $_QFG['uid'] .
			" AND type = 11 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" .
			$_QFG['uid'];
		}
	}
	if(!$sql1 && $number > 0) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .
		$_QFG['uid'] . ", 11," . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . 
		($activeitem+10000) . ", 1, " . $buy_fb . ");";
	}
	$query = $_QFG['db']->query($sql1);

	echo '{"tId":' . $wid . ',"name":"' . $name . '","code":1,"msg":"购买成功。","num":' . $number . ',"fb":-' . $buy_fb . ',"money":0,"type":' . $type . '}';
}

if($type == 13) {//升级窝
	$item = 'item2';
	$itemarr = array("1" => array(0,0), "2" => array(3000,0), "3" => array(20000,0), "4" => array(60000,0), "5" => array(120000,0), "6" => array(210000,0), "7" => array(300000,0), "8" => array(400000,0), "9" => array(800000,50), "10" => array(900000,60), "11" => array(1000000,70), "12" => array(1100000,80), "13" => array(1200000,90));
	$levelarr = array("1" => 0, "2" => 1, "3" => 4, "4" => 8, "5" => 12, "6" => 16, "7" => 20, "8" => 24, "9" => 30, "10" => 36, "11" => 42, "12" => 48, "13" => 54);

	$list = $_QFG['db']->fetchOne('SELECT exp,decorative FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
	$decorative = qf_decode($list['decorative']);
	$exp = $list['exp'];

	$wid = $ai-130000;
	$name = '升'.$wid.'级窝';
	if($vip['status']) {
		$buy_fb = ceil($itemarr[$wid]['1']*0.8);
	} else {
		$buy_fb = $itemarr[$wid]['1'];
	}
	if($buy_fb == 0 || qf_toLevel($exp) < $levelarr[$wid] || $decorative[$item] >= $wid) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"系统出错啦，请刷新以后重试！","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"余额不足,请先充值","payqb":0,"payqp":0,"dnaurl":""}');
	}

	$decorative[$item] = $wid;
	if($decorative[$item] > 13){
		$decorative[$item] = 13;
	}

	$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative='".qf_encode($decorative)."' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . " where uid=" . $_QFG['uid']);

	echo '{"tId":' . $wid . ',"name":"' . $name . '","code":1,"msg":"购买成功。","num":' . $number . ',"fb":-' . $buy_fb . ',"money":0,"type":' . $type . '}';
}

if($type == 14) {//升级棚
	$item = 'item3';
	$itemarr = array("1" => array(5000,0), "2" => array(40000,0), "3" => array(90000,0), "4" => array(160000,0), "5" => array(250000,0), "6" => array(350000,0), "7" => array(500000,0), "8" => array(700000,0), "9" => array(850000,55), "10" => array(950000,65), "11" => array(1050000,75), "12" => array(1150000,85), "13" => array(1250000,95));
	$levelarr = array("1" => 2, "2" => 6, "3" => 10, "4" => 14, "5" => 18, "6" => 22, "7" => 26, "8" => 28, "9" => 33, "10" => 39, "11" => 45, "12" => 51, "13" => 57);

	$list = $_QFG['db']->fetchOne('SELECT exp,decorative FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
	$decorative = qf_decode($list['decorative']);
	$exp = $list['exp'];

	$wid = $ai-140000;
	$name = '升'.$wid.'级棚';
	if($vip['status']) {
		$buy_fb = ceil($itemarr[$wid]['1']*0.8);
	} else {
		$buy_fb = $itemarr[$wid]['1'];
	}
	if($buy_fb == 0 || qf_toLevel($exp) < $levelarr[$wid] || $decorative[$item] >= $wid) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"系统出错啦，请刷新以后重试！","payqb":0,"payqp":0,"dnaurl":""}');
	}
	if($fb < $buy_fb) {
		die('{"code":50,"payresultcode":0,"payerrorcode":0,"msg":"余额不足,请先充值","payqb":0,"payqp":0,"dnaurl":""}');
	}

	$decorative[$item] = $wid;
	if($decorative[$item] > 13){
		$decorative[$item] = 13;
	}

	$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative='".qf_encode($decorative)."' where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . ($fb-$buy_fb) . " where uid=" . $_QFG['uid']);

	echo '{"tId":' . $wid . ',"name":"' . $name . '","code":1,"msg":"购买成功。","num":' . $number . ',"fb":-' . $buy_fb . ',"money":0,"type":' . $type . '}';
}
?>