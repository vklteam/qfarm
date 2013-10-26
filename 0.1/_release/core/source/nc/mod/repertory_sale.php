<?php

# 单个卖出

$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($fruit);
$number = (int)$_REQUEST['number'];
$cid = (int)$_REQUEST['cId'];

if( $_QFG['timestamp']>1328630400 && $_QFG['timestamp']<1330012800 && $number%99==0){
	$twoid = 627;
	//$twoid = array('1'=>602);
}

if($fruit[$cid] < $number) {
	die('{"cId":0,"code":0,"direction":"请确认数值！"}');
}
if($cid == $twoid){
//if(array_key_exists($cid, $twoid)){
	$price= 9*$cropstype[$cid]['sale'];
}else{
	$price= $cropstype[$cid]['sale'];
}

$fruit[$cid] -= $number;
foreach($fruit as $key => $value) {
	if($value == 0) {
		unset($fruit[$key]);
	}
}

$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $price * $number . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);


//出售日志
$_QFG['db']->query("INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $_QFG['uid'] . ", 6, " . $number . ", " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", " . $cid . ", 1);");

echo '{"cId":' . $cid . ',"code":1,"direction":"成功卖出<font color=\"#0099FF\"> <b>' . $number . '<\/b> <\/font>个' . $cropstype[$cid]['cName'] . '，得到金币<font color=\"#FF6600\"> <b>' . $price * $number . '<\/b> <\/font>","money":' . $price * $number . '}';

qf_addFeed('farmlandstatus_sale');

?>