<?php
//鱼塘商店

//隐藏配置
qf_getCache('_HIDE');
$list = $_QFG['db']->fetchOne("SELECT crystal,money FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$crystal = qf_decode($list['crystal']);

$fish_unlock = $_QFG['db']->result("SELECT fish_unlock FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fish_lock_all = explode(',',$fish_unlock);

foreach($fishtype as $key => $value) {
	if(!in_array($value['id'], $_HIDE['fish'])){
//	if($value['show']){
		if(in_array($key, $fish_lock_all)){
			$lock = '1';
		} else {
			if($crystal[$value['lock_crystal']['0']] >= $value['lock_crystal']['1'] && $list['money'] >= $value['lock_money']){
				$lock = '2';
			} else $lock = '0';
		}
		
		$shop_arr[] = '{"exp":'.$value['exp'].',"fid":'.$value['id'].',"lock":'.$lock.',"name":"'.$value['crop_name'].'","output":'.$value['output'].',"price":'.$value['price'].',"sale":'.$value['sale'].',"type":23}';
	}

}

echo '[' . implode(',', $shop_arr) . ']';

?>