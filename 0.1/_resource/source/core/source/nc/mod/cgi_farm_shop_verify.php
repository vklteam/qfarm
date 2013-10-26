<?php

# 元宝购买
	
$itemNum = (int)$_REQUEST['itemNum'];
$itemType = (int)$_REQUEST['itemType'];
$itemId = (int)$_REQUEST['itemId'];
$shopType = (int)$_REQUEST['shopType'];

if( $itemType == 12 ){
	echo '{"code":1,"direction":"","ecode":0,"itemId":1,"itemNum":1,"itemType":12,"leavings":0,"min":0,"open":1,"output":0,"place":1,"rank":1}';
} else {
	echo '{"code":1,"direction":"","ecode":0,"itemId":' . $itemId . ',"itemNum":' . $itemNum . ',"itemType":'.$itemType.'}';
}
?>