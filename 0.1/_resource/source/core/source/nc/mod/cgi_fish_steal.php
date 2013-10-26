<?php
//鱼塘偷鱼

$uId = (int)$_REQUEST['ownerId'];
$place = explode(",", $_REQUEST['index']);

$list = $_QFG['db']->fetchOne("SELECT fish_status FROM app_qqfarm_nc where uid=" . $uId);
$list1 = $_QFG['db']->fetchOne("SELECT fish_fruit,fish_repertory FROM app_qqfarm_nc where uid=" . $_QFG['uid']);

$fish_status = qf_decode($list['fish_status']);
$fish_fruit = qf_decode($list1['fish_fruit']);
$fish_repertory = qf_decode($list1['fish_repertory']);

foreach($place as $index) {
	$fid = $fish_status[$index]['fid'];
	if($fish_status[$index]['fid'] > 0 && $_QFG['timestamp'] - $fish_status[$index]['p'] >= $fishtype[$fid]['cycle']['2'] && $fish_status[$index]['o'] > 0 && $fish_status[$index]['l']> $fish_status[$index]['o'] / 2 ) {
		if(in_array($_QFG['uid'], $fish_status[$index]['s'])){
			die('{"code":0,"direction":"对不起，您已经收过了。","poptype":3}');
		} else {
			$rand_number =mt_rand(1, 2);
			$o = $fish_status[$index]['o'];
			$fish_fruit[$fid] += $rand_number;
			$fish_status[$index]['l'] -= $rand_number;;
			$fish_status[$index]['s'][] = $_QFG['uid'];
			$flag = false;
			foreach((array)$fish_repertory as $key => $val) {
				if($fid == $val['fid']) {
					$flag = true;
					$fish_repertory[$key]['s'] += $rand_number;
				}
			}
			if(!$flag) {
				$fish_repertory[] = array('fid'=>$fid,'h'=>0,'s'=>$rand_number);
		}
		}
		$echo_str[] = '{"code":1,"harvest":'.$rand_number.',"index":'.$index.',"status":{"fid":'.$fish_status[$index]['fid'].',"i":'.$fish_status[$index]['i'].',"l":'.$fish_status[$index]['l'].',"o":'.$fish_status[$index]['o'].',"p":'.$fish_status[$index]['p'].'}}';

	} else die( '{"code":0,"direction":"对不起，您不能偷这条鱼。","poptype":3}');
}


$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_status='" . qf_encode(array_values($fish_status)) . "' where uid=" . $uId);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_fruit='" . qf_encode($fish_fruit) . "',fish_repertory='" . qf_encode($fish_repertory) . "' where uid=" . $_QFG['uid']);


if(count($echo_str)>1 ) {
	echo '[' . implode(',', $echo_str) . ']';
} else echo '' . implode(',', $echo_str) . '';

?>