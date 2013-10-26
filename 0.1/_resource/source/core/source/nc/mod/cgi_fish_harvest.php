<?php
//鱼塘捞鱼

$flag = (int)$_REQUEST['flag'];
$index = explode(",", $_REQUEST['index']);
$list = $_QFG['db']->fetchOne("SELECT fish_status,fish_fruit,fish_repertory FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fish_status = qf_decode($list['fish_status']);
$fish_fruit = qf_decode($list['fish_fruit']);
$fish_repertory = qf_decode($list['fish_repertory']);

$exp_str = 0;
foreach($index as $id) {
	$fid = $fish_status[$id]['fid'];
	if($fish_status[$id]['fid'] > 0 && $_QFG['timestamp'] - $fish_status[$id]['p'] >= $fishtype[$fid]['cycle']['2'] && $fish_status[$id]['o'] > 0 ) {
		$o = $fish_status[$id]['o'];
		$output = $fish_status[$id]['l'];
		$fish_fruit[$fid] += $output;
		$exp_str += $fishtype[$fid]['exp'];
		$exp = $fishtype[$fid]['exp'];
		$fish_status[$id]['fid'] = 0;
		$fish_status[$id]['l'] = 0;
		$fish_status[$id]['o'] = 0;
		$fish_status[$id]['p'] = 0;
		$fish_status[$id]['s'] = array();

		$flag = false;
		foreach((array)$fish_repertory as $key => $val) {
			if($fid == $val['fid']) {
				$flag = true;
				$fish_repertory[$key]['h'] += $output;
			}
		}
		if(!$flag) {
			$fish_repertory[] = array('fid'=>$fid,'h'=>$output,'s'=>0);
		}

	} elseif ($flag==1) {
		$exp = $o = 0;
		$fish_status[$id]['fid'] = 0;
		$fish_status[$id]['l'] = 0;
		$fish_status[$id]['o'] = 0;
		$fish_status[$id]['p'] = 0;
		$fish_status[$id]['s'] = array();

	} else die( '{"code":0,"direction":"对不起，您没有这条鱼。","poptype":3}');
	$echo_str[] = '{"code":1,"exp":'.$exp.',"hasgift":false,"i":'.$id.',"lvup":[],"o":'.$output.'}';
}

$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_status='" . qf_encode(array_values($fish_status)) . "',fish_fruit='" . qf_encode($fish_fruit) . "',fish_repertory='" . qf_encode($fish_repertory) . "' where uid=" . $_QFG['uid']);

//升级
$_QFG['db']->query("UPDATE app_qqfarm_nc set exp=exp+$exp_str where uid=" . $_QFG['uid']);
$exp_arr = $_QFG['db']->result("SELECT exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$levelup = $_QFG['db']->result("SELECT levelup FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$levelup_arr = 'false';
if($exp_arr >= $levelup && $levelup < 93001) {
	include("source/nc/plus/levelup.php"); //升级提示
}

if(count($echo_str)>1 ) {
	echo '[' . implode(',', $echo_str) . ']';
} else echo '' . implode(',', $echo_str) . '';

?>