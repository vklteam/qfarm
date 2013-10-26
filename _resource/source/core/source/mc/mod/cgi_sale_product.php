<?php

# 卖出产品

$cId = (int)$_REQUEST['cId'];
$num = (int)$_REQUEST['num'];


$package = $_QFG['db']->result('SELECT package FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
$mclock = $_QFG['db']->result('SELECT mclock FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
$package = qf_decode($package);
$money = 0;
$mclock = explode(',',$mclock);

if((int)$_REQUEST['saleAll'] == '1') {
	foreach($package as $key => $value) {
			if( !in_array($key, $mclock) && $value > 0 ) {
				if($key<10001){
					if($key==1506){
						$price = 30;
					}else{
						if( $_QFG['timestamp']>1328630400 && $_QFG['timestamp']<1330012800 && $value%99==0){
							$twoid = 1599;
							//$twoid = array('1'=>1599);
						}
						if($key==$twoid){
						//if(array_key_exists($key,$twoid)){
							$price= 9*$animaltype[$key]['byproductprice'];
						}else{
							$price = $animaltype[$key]['byproductprice'];
						}
					}
				} else {
					$key1 = $key - 10000;
					$price = $animaltype[$key1]['productprice'];
				}
				$iid .= $iid==null ? $key : ",".$key;
				$count .= $count==null ? $value : ",".$value;
				$money += $price * $value;
				unset($package[$key]);
			}	
	}
	$echo_str = '{"direction":"操作成功，共获得收入和感谢金 <font color=\"#FF6600\"><b>' . $money . '</b> </font>金币","money":' . $money . '}';
	$query = $_QFG['db']->query("INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .	$_QFG['uid'] . ", 9,'" . $count . "', " . $_QFG['uid'] .", " . $_QFG['timestamp'] . ", '" . $iid. "', 1, " . $money . ");");

} else {
	if( $_QFG['timestamp']>1328630400 && $_QFG['timestamp']<1330012800 && $num%99==0){
		$twoid = 1599;
		//$twoid = array('1'=>1599);
	}
	if($package[$cId] < $num) {
		exit();
	}

	if($cId<10001){
		if($cId==1506){
			$cName = '便便';
			$price = 30;
		}else{
			$cName = $animaltype[$cId]['bName'];
			if($cId==$twoid){
			//if(array_key_exists($cId,$twoid)){
				$price= 9*$animaltype[$cId]['byproductprice'];
			}else{
				$price = $animaltype[$cId]['byproductprice'];
			}
		}
	} else {
		$key1 = $cId - 10000;
		$cName = $animaltype[$key1]['cName'];
		$price = $animaltype[$key1]['productprice'];
	}
	$money = $price * $num;
	$package[$cId] = $package[$cId] - $num;
	foreach($package as $key => $value) {
		if($value == 0) unset($package[$key]);
	}
	$echo_str = '{"cId":' . $cId . ',"direction":"成功卖出 <font color=\"#0099FF\"><b>' . $num . '</b></font> 只' . $cName . '，赚到 <font color=\"#FF6600\"><b>' . $money . '</b></font> 金币","money":' . $money . '}';
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
			if(!in_array($cId,$iid_arr)) {
				$list = $list . "," . $cId;
				$scount = $scount . "," . $num;
			} else {
				foreach($iid_arr as $key=>$iidv) {
					if($iidv==$cId) {
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
		$sql1 = "INSERT INTO app_qqfarm_mclogs (`uid`, `type`, `count`, `fromid`, `time`, `iid`, `isread`, `money` ) VALUES (" .	$_QFG['uid'] . ", 9," . $num . ", " . $_QFG['uid'] .", " . $_QFG['timestamp'] . ", " . $cId . ", 1, " . $money . ");";	
	}
	$query = $_QFG['db']->query($sql1);
}
$_QFG['db']->query('UPDATE app_qqfarm_user set money=money+' . $money . ' where uid=' . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set package='" . qf_encode($package) . "' where uid=" . $_QFG['uid']);


qf_addFeed('cgi_sale_product');
echo $echo_str;

?>