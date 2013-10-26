<?php

# 元宝购买
$activeitem = $_REQUEST['payitem'];
list($ai, $number) = explode("-", $activeitem);
$itemId = $ai - 60000;
$type = intval($ai/10000);

if($type==14 || $type==13 ){
	echo '{"ecode":0,"code":0,"open":1}';
} else echo '{"code":1,"direction":"","ecode":0,"itemId":12,"itemNum":1,"itemType":'.$type.'}';


?>