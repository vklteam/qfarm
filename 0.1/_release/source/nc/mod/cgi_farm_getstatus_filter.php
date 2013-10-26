<?php
//好友状态


qf_getCache('cropstime', '/nc/');;

//查询条件
$condition = ' limit 0,'.$_QSC['friendNumber'].'';
if($_QSC['friendType'] == 1) {
	$friends = qf_getFriends(0);
	$friends .= (empty($friends) ? '' : ',') . $_QFG['uid'];
	$condition = " WHERE uid IN({$friends}) group by uid " . $condition;
} else {
	$condition = " group by uid " . $condition;
}

$list = $_QFG['db']->fetchAll("SELECT uid,status FROM app_qqfarm_nc" . $condition);
$list = $_QFG['db']->fetchAll("SELECT uid,status FROM app_qqfarm_nc" . $condition);

foreach($list as $value) {
	$farmStatus = qf_decode($value['status']);
	foreach($farmStatus as $value_1) {
		$cId = intval($value_1['a']);
		if($cId > 0) {
			$time1 = $cropstime[$cId][4];
			$time3 = $_QFG['timestamp'] - $value_1['q'];
			$flag = $time3 >= $time1;
			if($flag && $value_1['q'] > 0) {
				if($value_1['m'] == 0) {
					$temp = $value_1['q'] + $time1;
					$n = $value_1['n'];
					if(!isset($n[$_QFG['uid']])) {
						$exp[$value['uid']]["1"] = $temp;
					}
				} else {
					if($value_1['m'] > $value_1['l']) {
						$temp = $value_1['q'] + $time1;
						$n = $value_1['n'];
						if(!isset($n[$_QFG['uid']])) {
							$exp[$value['uid']]["1"] = $temp;
						}
					}
				}
			} elseif(!$flag && $value_1['a'] != '0') {
				if($value_1['f'] > 0) {
					$exp[$value['uid']]["2"] = 1;
				}
				if($value_1['g'] > 0) {
					$exp[$value['uid']]["3"] = 1;
				}
			} 
		}
	}
	$beasts = $_QFG['db']->result("SELECT beasts FROM app_qqfarm_user where uid=" . $value['uid']);
	$beasts = qf_decode($beasts);
	foreach($beasts['info_nc'] as $value_2) {
		$id4 = 1;
		$attack = $value_2['attack'];
		foreach($attack as $value_3) {
			if($value_3['fid']== $_QFG['uid']){
				$id4 = 0;
			}
		}

		if($value_2['fid']!= $_QFG['uid'] && $id4){
			$exp[$value['uid']]["4"] = $_QFG['timestamp']+3600*8;
		}
	}

	$fish_status = $_QFG['db']->result("SELECT fish_status FROM app_qqfarm_nc where uid=" . $value['uid']);
	$fish_status = qf_decode($fish_status);
	foreach($fish_status as $value_3) {
		$fid = intval($value_3['fid']);
		if($fid > 0) {
			if($_QFG['timestamp'] - $value_3['p']>= $fishtype[$fid]['cycle']['2'] && $value_3['p'] > 0 ) {
				if($value_3['l']==0 && $value_3['o'] == 0){
					$exp[$value['uid']]["6"] = 1;
				} elseif($value_3['l']> $value_3['o'] / 2){
					if(!in_array($_QFG['uid'], $value_3['s'])) {
						$exp[$value['uid']]["6"] = 1;
					}
				}
	        }
	    }
	}
}

$exp = qf_jsonCode($exp);
$int = strlen($exp);
$str = substr($exp, $int - 1, 1);
if($str == ",") {
	$exp = substr($exp, 0, $int - 1);
}
echo '{"status":' . $exp . '}';

?>