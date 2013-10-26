<?php
//出售成鱼

$fId = $_REQUEST['fIds'];
$num = (int)$_REQUEST['num'];
$flag = $_REQUEST['flag'];

$list = $_QFG['db']->fetchOne("SELECT fish_rep_lock,fish_fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fish_rep_lock = $list['fish_rep_lock'];
$fish_fruit = qf_decode($list['fish_fruit']);
$fish_rep_lock_all = explode(',',$fish_rep_lock);

if($flag == 'single'){//单个出售
	$fish_fruit[$fId] -= $num;
	$money = $fishtype[$fId]['sale'] * $num;

	foreach($fish_fruit as $key => $value) {
		if( $value < 1 ) {
			unset($fish_fruit[$key]);
		} 
	}

	echo '{"cId":'.$fId.',"code":1,"direction":"","money":'.$money.',"name":"'.$fishtype[$fId]['crop_name'].'","number":'.$num.'}';

} else {

	$money = 0;
	$sellary = explode(',', $fId);
	foreach($fish_fruit as $key => $value) {
		if($value > 0  && in_array($key, $sellary) && !in_array($key, $fish_rep_lock_all)) {
			$money = $money + $fishtype[$key]['sale'] * $value;
			unset($fish_fruit[$key]);
		}
	}

	echo '{"code":1,"direction":"","money":'.$money.'}';
}

$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_fruit='" . qf_encode($fish_fruit) . "' where uid=" . $_QFG['uid']);

?>