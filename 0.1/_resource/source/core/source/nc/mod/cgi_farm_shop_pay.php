<?php
//元宝
qf_getCache('itemtype', '/nc/');
qf_getCache('toolstype', '/nc/');
qf_getCache('upgrade', '/nc/');
qf_getCache('upblack', '/nc/');

$itemId = (int)$_REQUEST['itemId'];
$itemNum = (int)$_REQUEST['itemNum'];
$itemType = (int)$_REQUEST['itemType'];
$payType = (int)$_REQUEST['payType'];
$shopType = (int)$_REQUEST['shopType'];


$list = $_QFG['db']->fetchOne("SELECT money,yb,vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$list1 = $_QFG['db']->fetchOne("SELECT status,black,exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$vip = qf_decode($list['vip']);
$black = qf_decode($list1['black']);
if($shopType == 2){
	$ai = $itemId;
	if($vip['status']){
		$vip = 1 ;
		$buy_fb = $itemtype[$itemId]["YFBPrice"];
	} else {
		$vip = 0 ;
		$buy_fb = $itemtype[$itemId]["FBPrice"];
	} 

} elseif($shopType == 12){
	$ai = $itemId;
	$itemId += 1;
	if($vip['status']){
		$vip = 1 ;
		$buy_fb = ceil($upblack[$itemId-1]["yb"]*0.8);
	} else {
		$vip = 0 ;
		$buy_fb = $upblack[$itemId-1]["yb"];
	} 
	if($_QFG['timestamp'] < (int)$black['cd']) $buy_fb = 2 * $buy_fb;
} elseif($shopType == 13){
	$ai = $itemId;
	if($vip['status']){
		$vip = 1 ;
		$buy_fb = ceil($upgrade[$itemId-1]["yb"]*0.8);
	} else {
		$vip = 0 ;
		$buy_fb = $upgrade[$itemId-1]["yb"];
	} 
}  else {
	if( $itemType == 3 ){
		$ai = 30000 + $itemId;
	} elseif( $itemType == 24 ){
		$ai = 240000 + $itemId;
	} elseif( $itemType == 909090 ){
		$ai = $itemId;
	} elseif( $itemType == 4 ){
		$ai = 40000 + $itemId;
	} elseif( $itemType == 10 ){
		$ai = 100000 + $itemId;
	} elseif( $itemType == 2 ){

	}
	if($vip['status']){
		$vip = 1 ;
		$buy_fb = $toolstype[$ai]["YFBPrice"] * $itemNum;
	} else {
		$vip = 0 ;
		$buy_fb = $toolstype[$ai]["FBPrice"] * $itemNum;
	} 
}



$money = $list['money'];
$yb = $list['yb'];
$viplevel = qf_toVipLevel($vip['exp']);
$level =  qf_toLevel($list1['exp']);
$status = qf_decode($list1['status']);
$black = qf_decode($list1['black']);
$place = (int)$black['number'];


//echo '{"code":0,"ecode":0,"ret":0}';
echo '{"code":1,"ecode":0,"ret":0,"token":"1C494E79E02E4B0312C2135C81C9A7B115029","url_params":"pay.php?app=353&ai='.$ai.'&itemId='.$itemId.'&itemNum='.$itemNum.'&itemType='.$itemType.'&payType='.$payType.'&shopType='.$shopType.'&vip='.$vip.'&buy_fb='.$buy_fb.'"}';
//{"code":1,"ecode":0,"ret":0,"token":"93A0404DA436A80238C76CF825166B2A09341","url_params":"/v1/011/TENCENT00003/qz_goods_info?token_id=93A0404DA436A80238C76CF825166B2A09341&sig=9BE756555B71C69D10BBF604B7D12086"}
//echo 'Page.qBack({"ret":0,"balance":0,"pub_balance":0})';


?>