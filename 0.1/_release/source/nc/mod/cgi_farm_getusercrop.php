<?php

# 用户仓库

$list = $_QFG['db']->fetchOne("SELECT fruit,nclock FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($list['fruit']);

if( $_QFG['timestamp']>1320854400 && $_QFG['timestamp']<1321632000 ){
	$twoid = 602;
	//$twoid = array('1'=>602);
}

$nclock_all = explode(',',$list['nclock']);
$fruitarr = array();
foreach($fruit as $key => $value) {
	if(in_array($key, $nclock_all)){
		$lock = '1';
	} else $lock = '0';

	if($value > 0  && $key > 0 && array_key_exists($key, $cropstype)) {
		if($key==$twoid){
		//if(array_key_exists($key, $twoid)){
			$high_price= 11*$cropstype[$key]['sale'];
		}else{
			$high_price= 0;
		}
		$fruitarr[] = '{"amount":' . $value . ',"cId":' . $key . ',"cName":"' . $cropstype[$key]['cName'] . '","ext":"","high_price":'.$high_price.',"isLock":'.$lock.',"level":' . $cropstype[$key]['cLevel'] . ',"price":' . $cropstype[$key]['sale'] . ',"type":' . $cropstype[$key]['cType'] . '}';
	}else {
		unset($fruit[$key]);
		$_QFG['db']->query("update app_qqfarm_nc set fruit='".qf_encode($fruit)."' where uid=" . $_QFG['uid']);
	}
}

if($fruitarr) {
	$fruitarr = '[' . implode(',', $fruitarr) . ']';
} else 	$fruitarr = '[]';

echo '{"allFlower":' . qf_jsonCode(array_values($allflower)) . ',"crop":' . $fruitarr . ',"flowerPath":"module/ui/flower"}';

?>