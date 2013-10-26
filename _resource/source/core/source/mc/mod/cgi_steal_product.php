<?php

#偷动物

$uId = (int)$_REQUEST['uId'];
$type = (int)$_REQUEST['type'];

$animal = $_QFG['db']->result("SELECT status FROM app_qqfarm_mc where uid=" . $uId);
$vipid = $_QFG['db']->result('SELECT vip FROM app_qqfarm_user where uid=' . $uId);
$guard = $_QFG['db']->result('SELECT guard FROM app_qqfarm_mc where uid=' . $uId);
$list = $_QFG['db']->fetchOne("SELECT repertory,package FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$vip = $_QFG['db']->result('SELECT vip FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$money = $_QFG['db']->result('SELECT money FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$animal = qf_decode($animal);
$vipid = qf_decode($vipid);
$guard = qf_decode($guard); //猎人
$mc_package = qf_decode($list['package']);
$mc_repertory = qf_decode($list['repertory']);
$vip = qf_decode($vip);

$tounum = $gmoney = 0; //$gmoney猎人抓到小偷的金钱
if($type == -1) { //一键偷取
	//开始偷取
	if( $_QSC['vip'] == 1 ){
		if( $vip['status'] < 1 && $vipid['status'] > 0 ){
			die('{"code":1,"errorContent":"您不是VIP，不能偷VIP的动物","errorType":"1011"}');
		}
	}
	if($money<500) {
		die('{"code":1,"errorContent":"您的金钱少于500,做小偷也要成本的!","errorType":"1011"}');
	}
	
	$tou_cId = $tou_total = array();
	foreach($animal as $key => $value) {
		$touID = explode(',',$value['tou']);
		$_QFG['timestamp'] - $value['postTime'] <= 15 && die('{"errorContent":"动物生产中，请稍后收获！","errorType":"1011"}');
		if($value['cId']>0 && !in_array($_QFG['uid'], $touID) && $value['totalCome']>0) {
			//猎人..
			$gp = 0;
			foreach($guard['guard'] as $gkey => $gvalue) {
				if($gvalue['status']==1) $gp = 1;
			}
			if($guard['guardFeedTime']>=$_QFG['timestamp'] && $gp==1 ) {
				$grand = mt_rand(1,10);
				if($grand>7) {
					$gmoney += mt_rand(40,80);
					$animal[$key]['tou'] .= ','.$_QFG['uid'] ;
				}
			} 
			if($animaltype[$value['cId']]['output'] / 2 < $value['totalCome'] && $grand<=8) {
				if(in_array($value['cId'], $tou_cId)) {
					foreach($tou_cId as $tk=>$tv) {
						if($tv == $value['cId']) {
							$tou_total[$tk] ++;
						}
					}
				} else {
					$tou_cId[] = $value['cId'];
					$tou_total[] = 1;
				}
				$flag = false;
				//已存在的增加数量
				foreach($mc_repertory as $k => $v) {
					if($value['cId'] == $v['cId']) {
						$mc_repertory[$k]['scrounge']++;
						$flag = true;
					}
				}
				//不存在则创建对象
				if(!$flag) {
					$mc_repertory[] = array("cId" => $value['cId'], "harvest" => 0, "scrounge" => 1);
				}
				++$tounum;
				$value['totalCome']--;
				$value['tou'] .= ','.$_QFG['uid'] ;
				
				$mc_package[$value['cId']] = $mc_package[$value['cId']] +1;//用户背包
				$animal[$key] = $value;//更新参数
			}	
		}
	}	
	$tounum==0 && $gmoney==0 && die('{"errorContent":"你来的也太晚了吧...","errorType":"1011"}');
	
	//偷完入库
	$_QFG['db']->query("UPDATE app_qqfarm_mc set repertory='" . qf_encode($mc_repertory) . "', package='" . qf_encode($mc_package) . "' where uid=" . $_QFG['uid']);
	$gmoney>0 && $_QFG['db']->query("update app_qqfarm_user set money=money-".$gmoney." where uid=".$_QFG['uid']);
	//更新主人动物状态
	$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "' where uid=" . $uId);
	$gmoney>0 && $_QFG['db']->query("update app_qqfarm_user set money=money+".$gmoney." where uid=".$uId);
	foreach($tou_cId as $tk=>$tv) {
		$tou_str .= empty($tou_str) ? "[". $tv .",". $tou_total[$tk]."]" : ",[". $tv .",". $tou_total[$tk]."]";

		//更新偷取日志
		$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid=" . $uId . " AND type=1 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid=" . $_QFG['uid']);
		foreach($values as $value) {
			if(($value[type] == 1) && ($value['fromid'] == $_QFG['uid']) ) {
				$list = $value[iid];
				$scount = $value[count];
				$stime = $value[time];
				$list = $list . "," . $tv;
				$scount = $scount . "," . $tou_total[$tk];
				$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] . ", isread = 0 where uid = " . $uId . " AND type = 1 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
			}
		}
		if((!$sql1) ) {
			$sql1 = 'INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(' . $uId . ', 1,' . $tou_total[$tk] . ', ' . $_QFG['uid'] . ', ' . $_QFG['timestamp'] . ', ' . $tv . ', 0, 0);';
		}
		if($sql1) $query = $_QFG['db']->query($sql1);
	}
	if($gmoney > 0) {
		$tou_str .= empty($tou_str) ? "[\"-". $gmoney ."\",\"你在抓动物的时候被看守员发现，<br>被他没收<font color='#FF6600'>".$gmoney."</font>金币！\"]" : ",[\"-". $gmoney ."\",\"你在抓动物的时候被看守员发现，<br>被他没收<font color='#FF6600'>".$gmoney."</font>金币！\"]";
		$_QFG['db']->query("insert into app_qqfarm_mclogs(uid,type,fromid,money,count,iid,isread,time)values({$uId},13,{$_QFG['uid']},{$gmoney},0,0,0,{$_QFG['timestamp']})");	
	}

	die('['. $tou_str .']');
}


//普通偷取
if( $_QSC['vip'] == 1 ){
	if( $vip['status'] < 1 && $vipid['status'] > 0 ){
		die('{"code":1,"errorContent":"您不是VIP，不能偷VIP的动物","errorType":"1011"}');
	}
}

foreach($animal as $key => $value) {
	$touID = explode(',',$value['tou']);
	if($type == $value['cId'] && !in_array($_QFG['uid'], $touID) && $value['totalCome']>0) {
		$gp = 0;
		foreach($guard['guard'] as $gkey => $gvalue) {
			if($gvalue['status']==1) $gp = 1;
		}
		if($guard['guardFeedTime']>=$_QFG['timestamp'] && $gp == 1) {
			$grand = mt_rand(1,10);
			if($grand>7) {
				$gmoney += mt_rand(40,80);
				$animal[$key]['tou'] .= ','.$_QFG['uid'] ;
				$_QFG['db']->query("insert into app_qqfarm_mclogs(uid,type,fromid,money,count,iid,isread,time)values({$uId},13,{$_QFG['uid']},{$gmoney},0,0,0,{$_QFG['timestamp']})");
			}
		} 
		if($animaltype[$type]['output'] / 2 < $value['totalCome'] && $grand<=8) {
			$flag = false;
			//已存在的增加数量
			foreach($mc_repertory as $k => $v) {
				if($type == $v['cId']) {
					$mc_repertory[$k]['scrounge']++;
					$flag = true;
				}
			}
			//不存在则创建对象
			if(!$flag) {
				$mc_repertory[] = array("cId" => $type, "harvest" => 0, "scrounge" => 1);
			}
			++$tounum;
			$value['totalCome']--;
			$value['tou'] .= ','.$_QFG['uid'] ;
			
			$animal[$key] = $value;//更新参数
		}
	}
}
$tounum == 0 && $gmoney==0 && die('{"errorContent":"你来的也太晚了吧...","errorType":"1011"}');

//偷完入库
$mc_package[$type] = $mc_package[$type] + $tounum;//用户背包
$_QFG['db']->query("UPDATE app_qqfarm_mc set repertory='" . qf_encode($mc_repertory) . "', package='" . qf_encode($mc_package) . "' where uid=" . $_QFG['uid']);
$gmoney>0 && $_QFG['db']->query("update app_qqfarm_user set money=money+".$gmoney." where uid=".$_QFG['uid']);

//更新主人动物状态
$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "' where uid=" . $uId);
$gmoney>0 && $_QFG['db']->query("update app_qqfarm_user set money=money+".$gmoney." where uid=".$uId);

//更新偷取日志
$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid=" . $uId . " AND type=1 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid=" . $_QFG['uid']);
foreach($values as $value) {
	if(($value['type'] == 1) && ($value['fromid'] == $_QFG['uid']) && ($tounum > 0)) {
		$list = $value['iid'];
		$scount = $value['count'];
		$stime = $value['time'];
		$list = $list . "," . $type;
		$scount = $scount . "," . $tounum;
		$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] . ", isread = 0 where uid = " . $uId . " AND type = 1 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" . $_QFG['uid'];
	}
}
if((!$sql1) && ($tounum > 0)) {
	$sql1 = 'INSERT INTO app_qqfarm_mclogs(`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money`) VALUES(' . $uId . ', 1,' . $tounum . ', ' . $_QFG['uid'] . ', ' . $_QFG['timestamp'] . ', ' . $type . ', 0, 0);';
}
if($sql1) $query = $_QFG['db']->query($sql1);

//返回信息
if($gmoney==0) {
	echo '[[' . $type . ',' . $tounum . ']]';
} else {
	echo "[[" . $type . "," . $tounum . "],[\"-". $gmoney ."\",\"你在抓动物的时候被看守员发现，<br>被他没收<font color='#FF6600'>".$gmoney."</font>金币！\"]]";
}

?>