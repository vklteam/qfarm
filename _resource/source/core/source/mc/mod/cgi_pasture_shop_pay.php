<?php
# 元宝购买



$activeitem = $_REQUEST['payitem'];
list($ai, $number) = explode("-", $activeitem);
$type = intval($ai/10000);

$itemId = $ai - $type*10000;
$itemNum = $number;
$itemType = $type;
$payType = $type;
$shopType = $type;

if($type =='13') {	//窝
	$itemarr = array("1" => array(0,0), "2" => array(3000,0), "3" => array(20000,0), "4" => array(60000,0), "5" => array(120000,0), "6" => array(210000,0), "7" => array(300000,0), "8" => array(400000,0), "9" => array(800000,50), "10" => array(900000,60), "11" => array(1000000,70), "12" => array(1100000,80), "13" => array(1200000,90));
	$levelarr = array("1" => 0, "2" => 1, "3" => 4, "4" => 8, "5" => 12, "6" => 16, "7" => 20, "8" => 24, "9" => 30, "10" => 36, "11" => 42, "12" => 48, "13" => 54);
}elseif($type =='14') {	//棚
	$itemarr = array("1" => array(5000,0), "2" => array(40000,0), "3" => array(90000,0), "4" => array(160000,0), "5" => array(250000,0), "6" => array(350000,0), "7" => array(500000,0), "8" => array(700000,0), "9" => array(850000,55), "10" => array(950000,65), "11" => array(1050000,75), "12" => array(1150000,85), "13" => array(1250000,95));
	$levelarr = array("1" => 2, "2" => 6, "3" => 10, "4" => 14, "5" => 18, "6" => 22, "7" => 26, "8" => 28, "9" => 33, "10" => 39, "11" => 45, "12" => 51, "13" => 57);
}

$list = $_QFG['db']->fetchOne("SELECT money,yb,vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
//$list1 = $_QFG['db']->fetchOne("SELECT status,black,exp FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$vip = qf_decode($list['vip']);

if($shopType == 13){
	//$ai = $itemId;
	$uplevel = $levelarr[$itemId];
	if($vip['status']){
		$vip = 1 ;
		$buy_fb = ceil($itemarr[$itemId]['1']*0.8);
	} else {
		$vip = 0 ;
		$buy_fb = $itemarr[$itemId]['1'];
	} 
} elseif($shopType == 14){
	//$ai = $itemId;
	$uplevel = $levelarr[$itemId];
	if($vip['status']){
		$vip = 1 ;
		$buy_fb = ceil($itemarr[$itemId]['1']*0.8);
	} else {
		$vip = 0 ;
		$buy_fb = $itemarr[$itemId]['1'];
	} 
}



echo '{"code":1,"ecode":0,"ret":0,"token":"1C494E79E02E4B0312C2135C81C9A7B115029","url_params":"pay.php?app=358&ai='.$ai.'&itemId='.$itemId.'&itemNum='.$itemNum.'&itemType='.$itemType.'&payType='.$payType.'&shopType='.$shopType.'&vip='.$vip.'&buy_fb='.$buy_fb.'&uplevel='.$uplevel.'"}';



?>