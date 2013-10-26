<?php
//偷取作物

$ownerId = (int)$_REQUEST['ownerId'];
$place = explode(",", $_REQUEST['place']);

$list = $_QFG['db']->fetchOne("SELECT status,dog FROM app_qqfarm_nc where uid=" . $ownerId);
$vipid = $_QFG['db']->result('SELECT vip FROM app_qqfarm_user where uid=' . $ownerId);
$list1 = $_QFG['db']->fetchOne("SELECT status,fruit,repertory FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$vip = $_QFG['db']->result('SELECT vip FROM app_qqfarm_user where uid=' . $_QFG['uid']);

$farmStatus = qf_decode($list['status']);
$farm_dog = qf_decode($list['dog']);
$status = qf_decode($list1['status']);
$farm_fruit = qf_decode($list1['fruit']);
$farm_repertory = qf_decode($list1['repertory']);
$vip = qf_decode($vip);
$vipid = qf_decode($vipid);

$moneyid = $_QFG['db']->result("SELECT money FROM app_qqfarm_user where uid=" . $_QFG['uid']);

$msg_temp = array();
foreach($place as $id) {
	if($moneyid<300){
		die('{"code":0,"farmlandIndex":' . $id . ',"direction":"您身上少300　金币不能摘取！","poptype":1}');
	}
	$status_h = 0;
	foreach($status as $status_k => $status_v) {
		if(intval($status_v['a']) > 0) {
			$status_h++;
		}
	}
	if($status_h == 0) {
		die('{"code":0,"farmlandIndex":' . $id . ',"direction":"　您都没种菜，　就想来摘取！","poptype":1}');
	}
	if( $_QSC['vip'] == 1 ){
		if( $vip['status'] < 1 && $vipid['status'] > 0 ){
			die('{"code":0,"farmlandIndex":' . $id . ',"direction":"您不是VIP，不能摘取VIP的菜！","poptype":1}');
		}
	}

	if($farmStatus[$id]['j'] >= 0 && $_QFG['timestamp']-$farmStatus[$id]['q'] < $cropstime[$farmStatus[$id]['a']][4] ||$farmStatus[$id]['m']<1){
		die('{"code":0,"farmlandIndex":' . $id . ',"direction":"没有菜可以摘取！","poptype":1}');
	}

	$a = $farmStatus[$id]['a'] ;
	$b = $farmStatus[$id]['b'] ;
	$c = $farmStatus[$id]['c'] ;
	$d = $farmStatus[$id]['d'] ;
	$e = $farmStatus[$id]['e'] ;
	$f = $farmStatus[$id]['f'] ;
	$g = $farmStatus[$id]['g'] ;
	$h = $farmStatus[$id]['h'] ;
	$i = $farmStatus[$id]['i'] ;
	$j = $farmStatus[$id]['j'] ;
	$k = $farmStatus[$id]['k'] ;
	$l = $farmStatus[$id]['l'] ;
	$m = $farmStatus[$id]['m'] ;
	$n = $farmStatus[$id]['n'] ;
	$o = $farmStatus[$id]['o'] ;
	$p = $farmStatus[$id]['p'] ;
	$q = $farmStatus[$id]['q'] ;
	$r = $farmStatus[$id]['r'] ;
	$n_temp = array_flip($n);
	$bitmap = intval($farmStatus[$id]['bitmap']) ;
	$pId =  intval($farmStatus[$id]['pId']) ;
	if(in_array($_QFG['uid'], $n_temp)) {
		die('{"errorContent":"unknow act","errorType":"act"}');
	} else {
		if($_QFG['timestamp'] < $farm_dog['dogFeedTime'] ) {
			foreach($farm_dog['dogs'] as $key => $value) {
				if($value['status'] == 1) {
					$int1_temp =mt_rand(1, 10);
					$kkk = 2;
					if($key>1) $kkk = 4;
					if($int1_temp > 10 - $kkk) {
						$dog_money = mt_rand(40, 80);
						$n[$_QFG['uid']] = 0;
						//{狗咬日志
						$result = $_QFG['db']->fetchOne("SELECT `id`, `uid`, `fromid`, `count`, `type` FROM  app_qqfarm_nclogs WHERE fromid = " . $_QFG['uid'] . " and type = 4 and uid = " . $ownerId);
						if($result != null) {
							$sql = "UPDATE app_qqfarm_nclogs set count = count+" . $dog_money . ", time = " . $_QFG['timestamp'] . " where fromid = " . $_QFG['uid'] . " and type = 4 and uid = " . $ownerId;
						} else {
							$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $ownerId . ", 4," . $dog_money . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 0, 0);";
						}
						$_QFG['db']->query($sql);
						//狗咬日志}
						$dog_str = "<font color='#369937'>【农场语录】<br>路边的野花不要采，别人的果实不要摘！</font><br>你在摘取过程中被他的狗狗发现，在逃跑过程中丢失<b><font color='#FF6600'> " . $dog_money . " </font></b>金币。";
						$_QFG['db']->query("UPDATE app_qqfarm_user set money = money + " . $dog_money . " where uid=" . $ownerId);
						$_QFG['db']->query("UPDATE app_qqfarm_user set money = money - " . $dog_money . " where uid=" . $_QFG['uid']);
						$echo_str[] = '{"code":1,"direction":"' . $dog_str . '","farmlandIndex":' . $id . ',"harvest":0,"poptype":3,"money":-' . $dog_money . '}';
					} else {
						$dog_str = '';
					}
				}
			}
		}
		//被狗咬过~~
		if($dog_str == '') {
			$rand_number =mt_rand(1, 100);
			if($rand_number <= 50) {
				$n[$_QFG['uid']] = 1;
			} elseif($rand_number <= 70) {
				$n[$_QFG['uid']] = 2;
			} elseif($rand_number <= 80) {
				$n[$_QFG['uid']] = 3;
			} elseif($rand_number <= 95) {
				$n[$_QFG['uid']] = 4;
			} elseif($rand_number <= 100) {
				$n[$_QFG['uid']] = 5;
			}
			$echo_s = '';
			if($bitmap==1) {
				if($rand_number<20) {
					$n[$_QFG['uid']] = $n[$_QFG['uid']]*2;
					$echo_s = ',"money":50,"plus":"<b>红土地有悲有喜</b><br />摘到的作物 <b><font color=\'#FF6600\'>x2</font></b> 捡到了 <b><font color=\'#FF6600\'>50</font></b> 个金币哦！"';
					$_QFG['db']->query("UPDATE app_qqfarm_user set money = money+50 where uid=" . $_QFG['uid']);

				} else if($rand_number<40){
					$n[$_QFG['uid']] = 0;

					$echo_s = ',"money":-50,"plus":"<b>红土地有悲有喜</b><br />您没有摘到作物，但丢失了 <b><font color=\'#FF6600\'>50</font></b> 个金币，呜呜！"';
					$_QFG['db']->query("UPDATE app_qqfarm_user set money = money-50 where uid=" . $_QFG['uid']);
				}
			}
			if($n[$_QFG['uid']]!=0) {
				$n[$_QFG['uid']] = min(($m - $l), $n[$_QFG['uid']]); //计算最大可偷数
				$farm_fruit[$a] += $n[$_QFG['uid']];
				$m -= $n[$_QFG['uid']];
				//作物剩下产量小于最低产量或未偷取，跳过~
				if($m < $l || $n[$_QFG['uid']] == 0) {
					continue;
				}
				$flag = false;
				foreach($farm_repertory as $key_1=>$value_1) {
					if($a == $value_1['cId']) {
						$flag = true;
						$farm_repertory[$key_1]['scroungeNumber'] = $farm_repertory[$key_1]['scroungeNumber'] +$n[$_QFG['uid']] ;
					}
				}
			}
			if(!$flag) {
				$farm_repertory[] = array("cId"=>$a,"harvestNumber"=>0,"scroungeNumber"=>$n[$_QFG['uid']]);
			}
			//{偷取日志
			$counts = $_QFG['db']->result("SELECT `counts` FROM app_qqfarm_nclogs WHERE fromid = " . $_QFG['uid'] ." and type=1 and uid = " . $ownerId . " and time > " . ($_QFG['timestamp'] - 3600));
			$countid = $_QFG['db']->result("SELECT `id` FROM app_qqfarm_nclogs WHERE fromid = " . $_QFG['uid'] ." and type=1 and uid = " . $ownerId . " and time > " . ($_QFG['timestamp'] - 3600));
			if ($counts) {
				$countss = array();
				$chk = 0;
				$count_arr = explode(";",$counts);
				foreach($count_arr as $cv) {
					$count_t = explode(":", $cv);
					if($count_t[0]==$a) {
						$chk = 1;
						$count_t[1] += $n[$_QFG['uid']];
					}
					$countss[] = implode(":", $count_t);
				}
				if( $chk == 1 ) {
					$counts_all = implode(";", $countss);
				} else {
					$counts_all = $counts . ";".$a.":".$n[$_QFG['uid']];
				}
				$sql = "UPDATE app_qqfarm_nclogs set count = count+1,counts='".$counts_all."',time = " . $_QFG['timestamp'] . " where id = " . $countid;
				
			} else {
				$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`,`counts`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $ownerId . ", 1, 1,'{$a}:".$n[$_QFG['uid']]."', " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . $a . ", 0);";
			}
			$_QFG['db']->query($sql);
			//偷取日志}
			$echo_str[] = '{"code":1,"direction":"","farmlandIndex":' . $id . ',"harvest":'.$n[$_QFG['uid']].$echo_s.',"poptype":4,"status":{"action":' . qf_jsonCode($p) . ',"cId":' . $a . ',"cropStatus":' . $b . ',"fertilize":' . $o . ',"harvestTimes":' . $j . ',"health":' . $i . ',"humidity":' . $h . ',"leavings":' . $m . ',"min":' . $l . ',"oldhumidity":' . $e . ',"oldpest":' . $d . ',"oldweed":' . $c . ',"output":' . $k . ',"pest":' . $g . ',"plantTime":' . $q . ',"thief":' . qf_jsonCode($n) . ',"updateTime":' . $r . ',"weed":' . $f . ',"bitmap":'.$bitmap.',"pId":'.$pId.'}}';
		}
		$farmStatus[$id]['a'] = $a;
		$farmStatus[$id]['b'] = $b;
		$farmStatus[$id]['c'] = $c;
		$farmStatus[$id]['d'] = $d;
		$farmStatus[$id]['e'] = $e;
		$farmStatus[$id]['f'] = $f;
		$farmStatus[$id]['g'] = $g;
		$farmStatus[$id]['h'] = $h;
		$farmStatus[$id]['i'] = $i;
		$farmStatus[$id]['j'] = $j;
		$farmStatus[$id]['k'] = $k;
		$farmStatus[$id]['l'] = $l;
		$farmStatus[$id]['m'] = $m;
		$farmStatus[$id]['n'] = $n;
		$farmStatus[$id]['o'] = $o;
		$farmStatus[$id]['p'] = $p;
		$farmStatus[$id]['q'] = $q;
		$farmStatus[$id]['r'] = $r;
	}

	$_QFG['db']->query("update app_qqfarm_nc set status='" . qf_encode(array_values($farmStatus)) . "' where uid=" . $ownerId);
	$_QFG['db']->query("update app_qqfarm_nc set fruit='" . qf_encode($farm_fruit) . "',repertory='" . qf_encode($farm_repertory) . "' where uid=" . $_QFG['uid']);
}

if(count($echo_str)>1 ) {
	echo '[' . implode(',', $echo_str) . ']';
} else echo '' . implode(',', $echo_str) . '';

?>