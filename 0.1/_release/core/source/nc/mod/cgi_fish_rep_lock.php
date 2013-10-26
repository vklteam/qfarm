<?php
# 仓库上锁

$fId = (int)$_REQUEST['fId'];
$flag = $_REQUEST['flag'];

if($flag == 'unlock') {
	$fish_rep_lock = $_QFG['db']->result('SELECT fish_rep_lock FROM app_qqfarm_nc where uid=' . $_QFG['uid']);
	$fish_rep_lock_arr = explode(',',$fish_rep_lock);
	$mc_lock = '';
	$lock = 0;
	foreach($fish_rep_lock_arr as $key=>$value) {
		if($fId == $value) {
			unset($fish_rep_lock_arr[$key]);
		} else {
			if($mc_lock) {
				$mc_lock .= ",".$value;
			} else {
				$mc_lock =$value;
			}
		}
	}
} elseif( $flag == 'lock' ) {
	$mc_lock = $_QFG['db']->result('SELECT fish_rep_lock FROM app_qqfarm_nc where uid=' . $_QFG['uid']);
	$lock = 1;
	if($mc_lock) {
		$mc_lock .= ",".$fId;
	} else {
		$mc_lock =$fId;
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_rep_lock='" . $mc_lock . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"fid":'.$fId.',"lock":'.$lock.'}';

?>