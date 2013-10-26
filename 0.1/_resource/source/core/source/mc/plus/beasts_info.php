<?php
//放牛信息
$beast_info = $beast_drop = $beast_return = array();
$beastsinfo = qf_decode($list['beasts']);
foreach($beastsinfo['info_mc'] as $key => $value) {
	if($value['fid']==0){
		$beasts = $beastsinfo;
		$fstatus = qf_decode($list['status']);
		if($beasts['sys_mc'][$value['id']]['status'] == 2 && $_QFG['timestamp'] < $beasts['sys_mc'][$value['id']]['returntime']){

			$beasts['sys_mc'][$value['id']]['curblood'] = round(($beasts['sys_mc'][$value['id']]['returntime'] - $_QFG['timestamp'])/360);
			if((int)$beasts['sys_mc'][$value['id']]['isfarm'] == 0){		
				$beast_info[$key] = array("app"=>"pasture","attack"=>$value['attack'],"blood"=>$beasts['sys_mc'][$value['id']]['curblood'],"domain"=>"xy","fid"=>$value['fid'],"id"=>$value['id'],"income"=>$beasts['sys_mc'][$value['id']]['fincome'],"raisetime"=>$beasts['sys_mc'][$value['id']]['raisetime'],"returntime"=>$beasts['sys_mc'][$value['id']]['returntime'],"src"=>16,"status"=>2,"stealtime"=>$beasts['sys_mc'][$value['id']]['raisetime'],"type"=>$beasts['sys_mc'][$value['id']]['type']);
			}
		} elseif ($_QFG['timestamp'] > $beasts['sys_mc'][$value['id']]['returntime'] && $beasts['sys_mc'][$value['id']]['returntime']){
			$num = ($beasts['sys_mc'][$value['id']]['returntime'] - $beasts['sys_mc'][$value['id']]['raisetime'])/3600;

			if((int)$value['isfarm']==0){
				foreach($fstatus as $skey => $svalue) {
					if($fstatus[$skey]['totalCome']>0 && $fstatus[$skey]['totalCome'] > ceil($animaltype[$svalue['cId']]['output']*0.6)){
						$fstatus[$skey]['totalCome'] -=(int)$num;
						$income = $animaltype[$svalue['cId']]['byproductprice'] * (int)$num;	
						break;
					}
				}
				$_QFG['db']->query("update app_qqfarm_mc set status='" . qf_encode(array_values($fstatus)) . "' where uid=" . $uId);
			}
			$up = 1 ;
			unset($beastsinfo['info_mc'][$key]);
			unset($beastsinfo['sys_mc'][$value['id']]);
		} 

	} else {

		$beasts = $_QFG['db']->result('SELECT beasts FROM app_qqfarm_user where uid=' . $value['fid']);
		$beasts = qf_decode($beasts);
		$fstatus = qf_decode($list['status']);
		if($beasts['beasts'][$value['id']]['status'] == 2 && $_QFG['timestamp'] < $beasts['beasts'][$value['id']]['returntime']){

			$beasts['beasts'][$value['id']]['curblood'] = round(($beasts['beasts'][$value['id']]['returntime'] - $_QFG['timestamp'])/360);
			if((int)$beasts['beasts'][$value['id']]['isfarm'] == 0){		
				$beast_info[$key] = array("app"=>"pasture","attack"=>$value['attack'],"blood"=>$beasts['beasts'][$value['id']]['curblood'],"domain"=>"xy","fid"=>$value['fid'],"id"=>$value['id'],"income"=>$beasts['beasts'][$value['id']]['fincome'],"raisetime"=>$beasts['beasts'][$value['id']]['raisetime'],"returntime"=>$beasts['beasts'][$value['id']]['returntime'],"src"=>16,"status"=>2,"stealtime"=>$beasts['beasts'][$value['id']]['raisetime'],"type"=>$beasts['beasts'][$value['id']]['type']);
			}

		} elseif ($_QFG['timestamp'] > $beasts['beasts'][$value['id']]['returntime'] && $beasts['beasts'][$value['id']]['returntime']){

			$num = ($beasts['beasts'][$value['id']]['returntime'] - $beasts['beasts'][$value['id']]['raisetime'])/3600;

			if((int)$value['isfarm']==0){
				foreach($fstatus as $skey => $svalue) {
					if($fstatus[$skey]['totalCome']>0 && $fstatus[$skey]['totalCome'] > ceil($animaltype[$svalue['cId']]['output']*0.6)){
						$fstatus[$skey]['totalCome'] -=(int)$num;
						$income = $animaltype[$svalue['cId']]['byproductprice'] * (int)$num;	
						break;
					}
				}
				$_QFG['db']->query("update app_qqfarm_mc set status='" . qf_encode(array_values($fstatus)) . "' where uid=" . $uId);
			}

			$beasts['beasts'][$value['id']]['income'] += $income;
			$beasts['beasts'][$value['id']]['fincome'] += $income;
			if($_QFG['timestamp'] < $beasts['beasts'][$value['id']]['returntime'] + 5*3600){
				$up = 1 ;
				$beasts['beasts'][$value['id']]['status'] = 3;
				$beasts['beasts'][$value['id']]['return'] = 1;
				$beasts['beasts'][$value['id']]['curblood'] = round(($_QFG['timestamp']-$value['returntime'])/(5*3600/$value['totalblood']));
				unset($beastsinfo['info_mc'][$key]);
			} else {
				$up = 1 ;
				$beasts['beasts'][$value['id']]['status'] = 1;
				$beasts['beasts'][$value['id']]['return'] = 1;
				$beasts['beasts'][$value['id']]['curblood'] = $beasts['beasts'][$value['id']]['totalblood'];
				unset($beastsinfo['info_mc'][$key]);
			}
		} 
		$beasts['beasts'] = array_values($beasts['beasts']);
		$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beasts)."' where uid=" . $value['fid']);
	}
}
$beastsinfo['sys_mc'] = array_values($beastsinfo['sys_mc']);
$beastsinfo['info_mc'] = array_values($beastsinfo['info_mc']);
$up == 1 && $_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beastsinfo)."' where uid=" . $uId);

foreach($beastsinfo['drop'] as $key => $value) {
	if($beastsinfo['drop']) $beast_drop[$key] = array("id"=>$value['id'],"num"=>$value['num'],"time"=>$value['time'],"type"=>$value['type']);
}

?>