<?php
//升级红土地

$confirm = (int)$_REQUEST['confirm'];
$list = $_QFG['db']->fetchOne("
	SELECT U.uid,U.money,U.vip,N.status,N.black,N.exp,N.redland FROM app_qqfarm_user U
		Left JOIN app_qqfarm_nc N ON N.uid=U.uid where U.uid={$_QFG['uid']}
");

$status = qf_decode($list['status']);
$gold =  qf_decode($list['black']);

if($gold['gold'] > 0){
	foreach($status as $key => $value) {
		if(empty($status[$key]['goldLand'])){
			$status[$key]['goldLand'] = 1 ;
			$gold['gold'] -= 1;
			$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "', black='" . qf_encode($gold) . "' where uid=" . $_QFG['uid']);

			$place = $key;
			break;
		}

	}
}

echo '{"code":1,"ecode":0,"place":'.$place.'}';


?>
