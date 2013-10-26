<?php
//升级红土地

$list = $_QFG['db']->fetchOne("
	SELECT U.uid,U.money,U.vip,N.status,N.reclaim,N.exp,N.redland FROM app_qqfarm_user U
		Left JOIN app_qqfarm_nc N ON N.uid=U.uid where U.uid={$_QFG['uid']}
");
$vip = qf_decode($list['vip']);
$vip1 = 0;
$buy_fb = 50 ;
if($vip['status']){
	$vip1 = 1 ;
	$buy_fb = 40 ;
}


echo '{"code":1,"ecode":0,"ret":0,"url":"pay.php?app=353&ai=460001&itemId=1&itemNum=1&itemType=46&payType=1&shopType=46&vip='.$vip1.'&buy_fb='.$buy_fb.'"}';


?>
