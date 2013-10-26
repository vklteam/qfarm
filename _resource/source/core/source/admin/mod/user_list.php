<?php

//分页参数
$psize = 19;
$pid = intval($_GET['pid']);
$pid = $pid < 1 ? 1 : $pid;
$start = ($pid - 1) * $psize;

//处理查询
$purl = "admin.php?mod=user_list";
$user_list = array();
$count = $_QFG['db']->result("SELECT COUNT(*) FROM app_qqfarm_user");
if($count) {
	$lists = $_QFG['db']->fetchAll("
		SELECT U.*,N.exp as exp_nc,N.reclaim,N.redland,N.black,M.exp as exp_mc FROM(
			(app_qqfarm_user U
				LEFT JOIN app_qqfarm_nc N ON N.uid=U.uid
			) LEFT JOIN app_qqfarm_mc M ON M.uid=U.uid
		) order by U.uid asc LIMIT {$start},{$psize}
	");

	foreach($lists as $value) {
		$value['black'] = qf_decode($value['black']);
		$value['vip'] = qf_decode($value['vip']);
		$value['level_nc'] = qf_toLevel($value['exp_nc']);
		$value['level_mc'] = qf_toLevel($value['exp_mc']);
		$value['visittime'] = date("Y-m-d",($value['visittime']));
		$value['vip'] = qf_decode($value['vip']);
		$value['vip']['level'] = qf_toVipLevel($value['vip']['exp'], $value['vip']['status']);
		$user_list[] = $value;

	}
}

qf_getView("admin/user_list");

?>