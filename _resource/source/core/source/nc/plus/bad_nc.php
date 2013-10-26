<?php

# 农场刷草/虫/旱

qf_getCache('cropstime', '/nc/');;

foreach($status as $k =>$v) {
	$t_p = $_QFG['timestamp'] - $v['q'];
	if($t_p < $cropstime[$v['a']][4]) {
		//草
		if($v['f'] == 0) {
			$suiji = mt_rand(0, 100);
			if($suiji < 3) {
				$v['f'] = 3;
			} elseif ($suiji < 6) {
				$v['f'] = 2;
			} elseif($suiji < 20) {
				$v['f'] = 1;
			}
		}
		//虫
		if($v['g'] == 0 && $t_p > $cropstime[$v['a']][2]) {
			$suiji = mt_rand(0, 100);
			if($suiji < 3) {
				$v['g'] = 3;
			} elseif ($suiji < 6) {
				$v['g'] = 2;
			} elseif($suiji < 15) {
				$v['g'] = 1;
			}
		}
		//旱
		if($list['tianqi'] == 1 && $v['h'] == 1) {
			if(mt_rand(0, 100) < 8) {
				$v['h'] = 0;
			}
		}
	}
	$status[$k] = $v;//回写参数
}

$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "' where uid=" . $uId);


/*
if(count($beastsinfo['info_nc'])<1){
	$sys_key=count($beastsinfo['info_nc']);
	$beastsinfo['info_nc'][] = array("attack"=>array(),"fid"=>0,"id"=>$sys_key,"isfarm"=>1);
	$beastsinfo['sys_nc'][$sys_key] =array("adopttime"=>$_QFG['timestamp'],"curblood"=>230,"income"=>24438,"leftraise"=>1,"price"=>23000,"status"=>2,"totalblood"=>230,"type"=>19,"app"=>"farm","isfarm"=>1,"raisetime"=>$_QFG['timestamp'],"stealtime"=>$_QFG['timestamp'],"returntime"=>($_QFG['timestamp']+230*360),"fincome"=>88,"lastExp"=>5,"return"=>1,"fid"=>0);

	$beastsinfo['info_nc'] = array_values($beastsinfo['info_nc']);
	$beastsinfo['sys_nc'] = array_values($beastsinfo['sys_nc']);
	$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beastsinfo)."' where uid=" . $uId);

}*/
?>