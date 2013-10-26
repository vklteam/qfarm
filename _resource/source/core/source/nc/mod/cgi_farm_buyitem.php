<?php

# 金币购买装饰

$itemId = (int)$_REQUEST['itemId'];
$useFB = $_REQUEST['useFB'];
$value = $_QFG['db']->fetchOne("SELECT yb,vip,money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$fb = (int)$value['yb'];
$vip = qf_decode($value['vip']);
$money = (int)$value['money'];

$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$decorative = qf_decode($decorative);
$buy_time = $itemtype[$itemId]['itemValidTime'];
$buy_type = $itemtype[$itemId]['itemType'];
$buy_exp = $itemtype[$itemId]['exp'];
$buy_fb = $buy_money =0;

if($useFB){
	$buy_fb = $vip['status'] ? $itemtype[$itemId]['FBPrice'] : $itemtype[$itemId]['YFBPrice'];
	if($fb < $buy_fb || $buy_fb <= 0) die('{"code":50,"direction":"余额不足,请先充值"}');
	foreach($decorative as $item_type => $value) {
		if($buy_type == $item_type) {
			foreach((array)$value as $key => $v) {
				if($key == $itemId) {
					die('{"code":50,"direction":"你已经购买过了，不必重复购买！"}');
				} else {
					$dec = 1;
					$decorative[$item_type][$itemId]['status'] = 1;
					$decorative[$item_type][$itemId]['validtime'] = $_QFG['timestamp'] + $buy_time;
				}
			}
			if($dec) {
				foreach((array)$value as $key => $v) {
					if($key != $itemId) $decorative[$item_type][$key]['status'] = 0;
				}
			}
		}
	}

	//消费日志
	$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`, `money` ) VALUES (" . $_QFG['uid'] .
			", 8, 1, " . $_QFG['uid'] . ", " . $_QFG['timestamp'] .
			", '" . $itemId . "', 1, '".$buy_fb."');";
	$_QFG['db']->query($sql);

} else {
	$buy_money = $itemtype[$itemId]['price'];
	if($money < $buy_money) die('{"code":50,direction":"你没有钱购买装饰品！"}');
	foreach((array)$decorative as $item_type => $value) {
		if($buy_type == $item_type) {
			foreach((array)$value as $key => $value1) {
				if($key == $itemId) {
					die('{"code":50,"direction":"你已经购买过了，不必重复购买！"}');
				} else {
					$dec = 1;
					$decorative[$item_type][$itemId]['status'] = 1;
					$decorative[$item_type][$itemId]['validtime'] = $_QFG['timestamp'] + $buy_time;
				}
			}
			if($dec) {
				foreach((array)$value as $key => $value1) {
					if($key != $itemId) $decorative[$item_type][$key]['status'] = 0;
				}
			}
		}
	}


	//消费日志
	$_QFG['db']->query("INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`, `money` ) VALUES (" . $_QFG['uid'] . ", 11, 1, " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", '" . $itemId . "', 1, '".$buy_money."');");
}

$_QFG['db']->query("UPDATE app_qqfarm_nc set exp = exp + " . $buy_exp . ",decorative='" . qf_encode($decorative) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_user set money=money - " . $buy_money . ",yb=yb -" . $buy_fb . " where uid=" . $_QFG['uid']);

//升级
$exp_arr = $_QFG['db']->result("SELECT exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$levelup = $_QFG['db']->result("SELECT levelup FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$levelup_arr = 'false';
if($exp_arr >= $levelup && $levelup < 93001) include("source/nc/plus/levelup.php"); //升级提示

echo '{"code":1,"direction":"","exp":' . $buy_exp . ',"itemId":'.$itemId.',"itemName":"'.$itemtype[$itemId]['itemName'].'","levelUp":false,"money":-' . $buy_money . ',"FB":-' . $buy_fb . ',"num":1}';
?>