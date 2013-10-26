<?php

# 卖出产品

$id = (int)$_REQUEST['id'];
$type = (int)$_REQUEST['type'];
$num = (int)$_REQUEST['num'];

$goods = $_QFG['db']->result('SELECT goods FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
$goods = qf_decode($goods);
$money = 0;
$mclock = explode(',',$mclock);

if($type == '0') {
	foreach($goods as $key => $value) {
		if($value > 0) {
			$price = $animaltype[$key]['price'] / 2;
			$iid .= $iid==null ? $key : ",".$key;
			$count .= $count==null ? $value : ",".$value;
			$money += $price * $value;
			unset($goods[$key]);
		}	
	}
	$echo_str = '{"ecode":0,"money":' . $money . '}';
	
	$query = $_QFG['db']->query("INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .	$_QFG['uid'] . ", 9,'" . $count . "', " . $_QFG['uid'] .", " . $_QFG['timestamp'] . ", '" . $iid. "', 1, " . $money . ");");

} elseif($type == '1') {
	if($goods[$id] < $num) {
		exit();
	}

	$cName = $animaltype[$id]['cName'];
	$price = $animaltype[$id]['price'] / 2;
	$money = $price * $num;
	$goods[$id] -= $num;
	foreach($goods as $key => $value) {
		if($value == 0) unset($goods[$key]);
	}
	$echo_str = '{"ecode":0,"money":' . $money . ',"name":"'.$cName.'","num":' . $num . '}';
	//出售日志
	$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " .$_QFG['uid'] . " AND type = 9 AND time > " . ($_QFG['timestamp'] -3600) . " AND fromid =" . $_QFG['uid']);
	foreach($values as $value) {
		if (($value['type'] == 9) && ($value['fromid'] == $_QFG['uid']) && ($num > 0)) {
			$list = $value['iid'];
			$moneyt = $value['money'];
			$scount = $value['count'];
			$stime = $value['time'];
			$iid_arr = explode(',',$value['iid']);
			$count_arr = explode(',',$value['count']);
			if(!in_array($id,$iid_arr)) {
				$list = $list . "," . $id;
				$scount = $scount . "," . $num;
			} else {
				foreach($iid_arr as $key=>$iidv) {
					if($iidv==$id) {
						$count_arr[$key] += $num;
					}
				}
				$scount = implode(',',$count_arr);
			}
			$moneyt = $moneyt + $money;
			$sql1 = "UPDATE app_qqfarm_mclogs set iid = '" . $list ."', money = '" . $moneyt . "', count ='" . $scount . "', time = " . $_QFG['timestamp'] .", isread = 1 where uid = " . $_QFG['uid'] ." AND type = 9 AND time > " . ($_QFG['timestamp'] - 3600) . " AND fromid =" .$_QFG['uid'];

		}
	}
	if ((!$sql1) && ($num > 0)) {
		$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .	$_QFG['uid'] . ", 9," . $num . ", " . $_QFG['uid'] .", " . $_QFG['timestamp'] . ", " . $id . ", 1, " . $money . ");";	
	}
	$query = $_QFG['db']->query($sql1);
}
$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+' . $money . ' where uid=' . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set goods='" . qf_encode($goods) . "' where uid=" . $_QFG['uid']);


qf_addFeed('cgi_sale_product');
echo $echo_str;

?>