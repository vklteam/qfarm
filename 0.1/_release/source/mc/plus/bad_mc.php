<?php

# 牧场刷大便/蚊子

//大便
$dabian_add = 0;
if($list['dabian'] < 8) {
	$dabian_add =mt_rand(1, 4);
}

//蚊子
$bad_sj =mt_rand(1,6);
if($list['bad'] == '') {
	$bad_add = '0';
	if($bad_sj > 1) {
		for($i=2; $i<=$bad_sj; $i++) {
			$bad_add .= ',0';
		}
	}
} else {
	$bad_array = explode(',', $list['bad']);
	$bad_count = count($bad_array);
	if(($bad_sj+$bad_count) > 8) {
		for($i=$bad_count; $i<=8; $i++) {
			$bad_add .= ',0';
		}
	} else {
		for($i=1; $i<$bad_sj; $i++) {
			$bad_add .= ',0';
		}
	}
	$bad_add = $list['bad'].$bad_add;
}

//老鼠
foreach($animal as $ank => $anv) {
	if($anv['cId']==1001 || $anv['cId']==1003 || $anv['cId']==1006 || $anv['cId']==1015 || $anv['cId']==1012){
			if(mt_rand(1,100) < 66){
				$_QFG['db']->query("UPDATE app_qqfarm_mc set enemy=1 where uid=".$uId);
		}
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_mc set bad='{$bad_add}', dabian=dabian+{$dabian_add} where uid=".$uId);

/*
if(count($beastsinfo['info_mc'])<1){
	$sys_key=count($beastsinfo['sys_mc']);
	$beastsinfo['info_mc'][] = array("attack"=>array(),"fid"=>0,"id"=>$sys_key,"isfarm"=>0);
	$beastsinfo['sys_mc'][$sys_key] =array("adopttime"=>$_QFG['timestamp'],"curblood"=>230,"income"=>24438,"leftraise"=>1,"price"=>23000,"status"=>2,"totalblood"=>230,"type"=>19,"app"=>"pasture","isfarm"=>0,"raisetime"=>$_QFG['timestamp'],"stealtime"=>$_QFG['timestamp'],"returntime"=>($_QFG['timestamp']+230*360),"fincome"=>88,"lastExp"=>5,"return"=>1,"fid"=>0);

	$beastsinfo['info_mc'] = array_values($beastsinfo['info_mc']);
	$beastsinfo['sys_mc'] = array_values($beastsinfo['sys_mc']);
	$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beastsinfo)."' where uid=" . $uId);
}
*/
?>