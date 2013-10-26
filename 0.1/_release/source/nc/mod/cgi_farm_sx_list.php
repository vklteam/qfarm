<?php

# 访问自己和别人农场

if($_REQUEST['ownerId'] && $_QFG['uid'] != $_REQUEST['ownerId']) {
	$toFriend = true;
	$uId = (int)$_REQUEST['ownerId'];
}
else $uId = $_QFG['uid'];

if($toFriend) {
	$list = $_QFG['db']->fetchOne("
		SELECT U.uid,U.username,U.beasts,U.regname,U.money,U.yb,U.pf,U.tianqi,
			N.status,N.reclaim,N.exp,N.taskid,N.badnum,N.dog,N.decorative,N.activeItem,N.healthMode,N.chris,N.randtime
				FROM  app_qqfarm_user U Left JOIN app_qqfarm_nc N ON N.uid=U.uid where U.uid={$uId}
	");
} else {
	$list = $_QFG['db']->fetchOne("
		SELECT U.uid,U.username,U.beasts,U.regname,U.money,U.yb,U.vip,U.pf,U.tianqi,
			N.status,N.reclaim,N.nc_e,N.exp,N.taskid,N.badnum,N.dog,N.decorative,N.chris,N.activeItem,N.healthMode,N.randtime 
				FROM app_qqfarm_user U Left JOIN app_qqfarm_nc N ON N.uid=U.uid where U.uid={$uId}
	");
}

echo '{"code":1,"ecode":0,"id":0,"item":[{"id":92001,"lv":1,"rate":6},{"id":92002,"lv":1,"rate":5},{"id":92003,"lv":1,"rate":5}],"lv":3,"money":0,"rate":27,"validTime":1332262861}';

?>