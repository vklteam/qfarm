<?php
//全部卖出

$list = $_QFG['db']->fetchOne("SELECT fruit,nclock FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($list['fruit']);
$nclock_all = explode(',',$list['nclock']);
if( $_QFG['timestamp']>1320854400 && $_QFG['timestamp']<1321632000 ){
	$twoid = 602;
	//$twoid = array('1'=>602);
}
$money = 0;
$sellary = explode(',', $_REQUEST['cIds']);
foreach($fruit as $key => $value) {
	if(0 < $value && $cropstype[$key]['cType'] == 1 && in_array($key, $sellary) && !in_array($key, $nclock)) {
		if($key == $twoid){
		//if(array_key_exists($key, $twoid)){
			$price= 11*$cropstype[$key]['sale'];
		}else{
			$price= $cropstype[$key]['sale'];
		}
		$money = $money + $price * $value;
		$_QFG['db']->query("INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $_QFG['uid'] . ", 6, '".$value."', " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ",'".$key."', 1);");
		unset($fruit[$key]);
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"direction":"","money":' . $money . '}';

qf_addFeed('farmlandstatus_saleall');

?>