<?php

# 用户背包

$list = $_QFG['db']->fetchOne("SELECT package,tools,fish_package,fish_tools FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$mctools = $_QFG['db']->result('SELECT tools FROM app_qqfarm_user where uid=' . $_QFG['uid']);

$package = qf_decode($list['package']);
foreach($package as $key => $value) {
	$hour = ($cropstype[$key]['growthCycle']) / 3600;
	if($value > 0  && $key > 0 && array_key_exists($key, $cropstype)  && $key < 2000) {
		$packagearr[] = '{"type":1,"cId":' . $key . ',"cName":"' . $cropstype[$key]['cName'] . '","amount":' . $value . ',"lifecycle":' . $hour . ',"level":' . $cropstype[$key]['cLevel'] . '}';
	} else {
		$up = 1;
		unset($package[$key]);
	}
}

$tools = qf_decode($list['tools']);
foreach($tools as $key => $value) {
	if($value > 0 && $key < 500 && array_key_exists($key + 30000, $toolstype)) {
		$packagearr[] = '{"type":3,"tId":' . $key . ',"tName":"' . $toolstype[30000 + $key]['tName'] . '","amount":' . $value . ',"depict":"' . $toolstype[30000 + $key]['depict'] . '"}';
	} else {
		$up = 1;
		unset($tools[$key]);
	}
}

$fish_tools = qf_decode($list['fish_tools']);
foreach($fish_tools as $key => $value) {
	$id= 240000 + $key;
	if($value > 0  && $key > 0 && array_key_exists($id, $toolstype)) {
		
		$packagearr[] = '{"amount":'.$value.',"fId":'.$key.',"tName":"'.$toolstype[$id]['tName'].'","depict":"' . $toolstype[$id]['depict'] . '","type":24}';
	} else {
		$up = 1;
		unset($fish_tools[$key]);
	}
}

$mctools = qf_decode($mctools);
foreach($mctools as $key => $value) {
	if($value > 0  && $key > 100000 && array_key_exists($key, $toolstype)){
		$packagearr[] = '{"type":10,"tId":' . ($key-100000) . ',"tName":"' . $toolstype[$key]['tName'] . '","amount":' . $value . ',"depict":"' . $toolstype[$key]['depict'] . '"}';
	} 
}

$fish_package = qf_decode($list['fish_package']);
foreach($fish_package as $key => $value) {
	if($value > 0  && $key > 0 && array_key_exists($key, $fishtype)) {
		$packagearr[] = '{"amount":'.$value.',"fId":'.$key.',"tName":"'.$fishtype[$key]['crop_name'].'","type":23}';
	} else {
		$up = 1;
		unset($fish_package[$key]);
	}
}


$up = 1 && $_QFG['db']->query("update app_qqfarm_nc set package='".qf_encode($package)."',tools='".qf_encode($tools)."',fish_tools='".qf_encode($fish_tools)."',fish_package='".qf_encode($fish_package)."' where uid=" . $_QFG['uid']);

echo '[' . implode(',', (array)$packagearr) . ']';

?>