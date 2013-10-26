<?php
//鱼塘商店


$list = $_QFG['db']->fetchOne("SELECT fish_rep_lock,fish_fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fish_rep_lock = $list['fish_rep_lock'];
$fish_fruit = qf_decode($list['fish_fruit']);
$fish_rep_lock_all = explode(',',$fish_rep_lock);

foreach($fish_fruit as $key => $value) {
	if($value > 0){
		if(in_array($key, $fish_rep_lock_all)){
			$lock = '1';
		} else $lock = '0';

		$fruit_arr[] = '{"fid":'.$key.',"lock":'.$lock.',"num":'.$value.',"type":23}';
		
	}

}

echo '[' . implode(',', $fruit_arr) . ']';

?>