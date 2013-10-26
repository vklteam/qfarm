<?php
//鱼塘放鱼
$fid = (int)$_REQUEST['fid'];

$list = $_QFG['db']->fetchOne("SELECT fish_status,fish_package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fish_status = qf_decode($list['fish_status']);
$fish_package = qf_decode($list['fish_package']);

if($fish_package[$fid] < 1 ) {
	die( '{"code":0,"direction":"对不起，您没有这个鱼苗。","poptype":3}');
}
if(count($fish_status)<6){
	for($i == 6; $i < 6; $i++) {
		$fish_status[$i] = array("f"=>0,"fid"=>0,"i"=>(int)$i,"l"=>0,"o"=>0,"p"=>0,"s"=>array());
	}
};
foreach($fish_status as $key => $value) {
	if($value['fid'] < 1 && $fish_status[$key]['i'] == $key){
		$fish_package[$fid] -= 1;
		$fish_status[$key]['f'] = 0;
		$fish_status[$key]['fid'] = $fid;
		$fish_status[$key]['l'] = 0;
		$fish_status[$key]['o'] = 0;
		$fish_status[$key]['p'] = $_QFG['timestamp'];
		$fish_status[$key]['s'] = array();
		break;
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_status='" . qf_encode(array_values($fish_status)) . "',fish_package='" . qf_encode($fish_package) . "' where uid=" . $_QFG['uid']);

//升级
$_QFG['db']->query("UPDATE app_qqfarm_nc set exp=exp+2 where uid=" . $_QFG['uid']);
$exp_arr = $_QFG['db']->result("SELECT exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$levelup = $_QFG['db']->result("SELECT levelup FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$levelup_arr = 'false';
if($exp_arr >= $levelup && $levelup < 93001) {
	include("source/nc/plus/levelup.php"); //升级提示
}

echo '{"code":1,"exp":2,"fid":'.$fid.',"hasgift":false,"i":'.$fish_status[$key]['i'].',"lvup":[],"o":0,"p":'.$_QFG['timestamp'].'}';


?>