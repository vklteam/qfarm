<?php
//鱼塘信息
$uId = (int)$_REQUEST['ownerId'];

$list = $_QFG['db']->fetchOne("SELECT fish_status,fish_open FROM app_qqfarm_nc where uid=" . $uId);
$fish_status = qf_decode($list['fish_status']);

foreach($fish_status as $key => $value) {
	//修复可能的错误
	if($key >= 6) {
		unset($fish_status[$key]);
		$isUpdate = 1;
		continue;
	}
	//更新鱼塘状态 
	if($fish_status[$key]['fid'] != 0) {
		$fid = $fish_status[$key]['fid'];
		if($_QFG['timestamp'] - $fish_status[$key]['p']>= $fishtype[$fid]['cycle']['2'] && $fish_status[$key]['o'] == 0 ) {
			$fish_status[$key]['o'] = $fishtype[$fid]['output'];
			$fish_status[$key]['l'] = $fishtype[$fid]['output'];
			$isUpdate = 1;
		}
	}
}

if($isUpdate == 1) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_status='" . qf_encode(array_values($fish_status)) . "' where uid=" . $uId);
	$isUpdate = 0;
}




foreach($fish_status as $key => $value) {
	if($value['fid'] < 1 ) {
		unset($fish_status[$key]);
	} 
}


echo '{"code":1,"fish":'.qf_jsonCode($fish_status).',"open":'.(int)$list['fish_open'].'}';

?>