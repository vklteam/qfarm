<?php

#消费,卖出

$uId = intval($_REQUEST['uIdx']);
$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_mclogs WHERE uid = " . $uId . " and type in(4,9,10,11,12) ORDER BY time DESC limit 0,50");

foreach($values as $value){
	
	if($value['type'] == 12){
		$scrids = array();
		$scrids = explode(",", $value['iid']);
		$scrcots = array();
		$scrcots = explode(",", $value['count']);
		$scrougestr = "";
		for ($i = 0; $i < count($scrids); $i++) {
            $name = $animaltype[$scrids[$i]]['cName'];
			$s = '只';
			$scrougestr = $scrougestr . $scrcots[$i] . $s ."未成熟的". $name;
			if ($i + 1 < count($scrids)) {
				$scrougestr = $scrougestr . "，";
			} else {
				$scrougestr = $scrougestr . "，";
			}
		}
		$msg = '"你捐助了' . $scrougestr . '获得感谢金' . $value['money'] . '金币,爱心捐助不获得经验."';
	
	}elseif($value['type'] == 11){
		$scrids = array();
		$scrids = explode(",", $value['iid']);
		$scrcots = array();
		$scrcots = explode(",", $value['count']);
		$scrougestr = "";
		for ($i = 0; $i < count($scrids); $i++) {
			if($scrids[$i]>80000 && $scrids[$i]<90000){
				 $scrids[$i] = $scrids[$i] - 80000;
                 $name = $toolstype[$scrids[$i]]['name'];
			} 
			if($scrids[$i]>110010 && $scrids[$i]<120000){
				 $scrids[$i] = $scrids[$i] - 110000;
                 $name = $toolstype[$scrids[$i]]['name'];
			} 
			if($scrids[$i]>110000 && $scrids[$i]<110010){
				 $scrids[$i] = $scrids[$i] - 10000;
                 $name = $toolstype[$scrids[$i]]['name'];
			} 
			if($scrids[$i]>60000 && $scrids[$i]<70000){
				 $scrids[$i] = $scrids[$i] - 60000;
                 $name = $toolstype[$scrids[$i]]['name'];
			} 
			$s = '个';
			$scrougestr = $scrougestr . $scrcots[$i] . $s  . $name;
			if ($i + 1 < count($scrids)) {
				$scrougestr = $scrougestr . "，";
			} else {
				$scrougestr = $scrougestr . "，";
			}
		}
		$msg = '"从商店购买了' . $scrougestr . '共付出' . $value['money'] . '元宝。"';
	
	}elseif($value['type'] == 10){
		$scrids = array();
		$scrids = explode(",", $value['iid']);
		$scrcots = array();
		$scrcots = explode(",", $value['count']);
		$scrougestr = "";
		for ($i = 0; $i < count($scrids); $i++) {
			if($scrids[$i]<10000){
				if($scrids[$i]==1506 || $scrids[$i]==10){
					$name = '便便';
				}else{
                 $name = $animaltype[$scrids[$i]]['bName'];
				
				}
			} else {
				 $scrids[$i] = $scrids[$i] - 10000;
                 $name = $animaltype[$scrids[$i]]['cName'];
			} 
			$s = '只';
			$scrougestr = $scrougestr . $scrcots[$i] . $s  . $name;
			if ($i + 1 < count($scrids)) {
				$scrougestr = $scrougestr . "，";
			} else {
				$scrougestr = $scrougestr . "，";
			}
		}
		$msg = '"从商店购买了' . $scrougestr . '共付出' . $value['money'] . '金币。"';
	} elseif($value['type'] == 4) {
		$msg = '"共花了' . $value['money'] . '金币购买' . $value['count'] . '棵草料放入饲料机内。"';
	} elseif($value['type'] == 9) {
		$scrids = array();
		$scrids = explode(',', $value['iid']);
		$scrcots = array();
		$scrcots = explode(',', $value['count']);
		$scrougestr = '';
		for($i = 0; $i < count($scrids); $i++) {
			if($scrids[$i]<10000){
				if($scrids[$i]==1506 || $scrids[$i]==10){
				$name = '便便';
				}else{
                $name = $animaltype[$scrids[$i]]['bName'];
				}
			} else {
				$scrids[$i] = $scrids[$i] - 10000;
                $name = $animaltype[$scrids[$i]]['cName'];
			}
			$s = '只';
			$scrougestr = $scrougestr . $scrcots[$i] . $s . $name;
			if($i + 1 < count($scrids)) {
				$scrougestr = $scrougestr . '，';
			} else {
				$scrougestr = $scrougestr . '，';
			}
		}
		$msg = '"卖出了仓库里的' . $scrougestr . '共收入' . $value['money'] . '金币。"';
	}
	if($cost) {
		$cost .= ',{"msg":' . $msg . ',"time":' . $value['time'] . '}';
	} else {
		$cost = '{"msg":' . $msg . ',"time":' . $value['time'] . '}';
	}
}

echo '{"code":1,"cost":['.$cost.']}';

?>