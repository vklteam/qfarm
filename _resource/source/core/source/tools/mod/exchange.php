<?php
/**
 * 积分兑换
 * Modify by seaif@zealv.com
 */


if($_GET['do'] == 'save') {
	//获取当前用户积分
	$credit = qf_userCredit(0);
	$number = (int)$_GET['number'];
	$number = (!is_numeric($number) || $number < 1) ? 0 : $number;
	$type = $_GET['type'];
	if($type == "yb") {
		if($number * 10 > $credit)
			die('0|&|你积分不够.');
		elseif($number <= 0)
			die('0|&|输入的数目不能小于或等于0.');
		else {
			qf_userCredit(0, "-" . ($number * 10));
			$_QFG['db']->query("UPDATE app_qqfarm_user set yb=yb+" . $number . " where uid=" . $_QFG['uid']);
			die('3|&|积分成功兑换了.|&|refresh|&|1');
		}
	} elseif ($type == "jb") {
		if($number > $credit)
			echo '0|&|你积分不够.';
		elseif($number <= 0)
			echo '0|&|输入的数目不能小于或等于0.';
		else {
			qf_userCredit(0, "-" . $number);
			$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . ($number * 100) . " where uid=" . $_QFG['uid']);
			die('3|&|积分成功兑换了.|&|refresh|&|1');
		}
	} elseif ($type == "enyb") {
		$yb = $_QFG['db']->result("SELECT yb FROM app_qqfarm_user where uid=" . $_QFG['uid']);
		if($number > $yb)
			die('0|&|你元宝不够.');
		elseif($number <= 0)
			die('0|&|输入的数目不能小于或等于0.');
		else {
			qf_userCredit(0, "+" . ($number * 8));
			$_QFG['db']->query("UPDATE app_qqfarm_user set yb=yb-" . $number . " where uid=" . $_QFG['uid']);
			die('3|&|积分成功兑换了.|&|refresh|&|1');
		}
	} elseif ($type == "enjb") {
		$money = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
		if($number * 120 > $money)
			echo '0|&|你金币不够.';
		elseif($number <= 0)
			echo '0|&|输入的数目不能小于或等于0.';
		else {
			qf_userCredit(0, "+" . $number);
			$_QFG['db']->query("UPDATE app_qqfarm_user set money=money-" . ($number * 120) . " where uid=" . $_QFG['uid']);
			die('3|&|积分成功兑换了.|&|refresh|&|1');
		}
	}
} else {
	qf_getView("tools/exchange");
}

?>