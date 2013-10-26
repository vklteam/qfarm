<?php

# 系统配置
$id = intval($_GET['id']);
if($id < 1) {
	die('2|&|参数错误.');
}

qf_getCache('toolstype', '/nc/');

if($_GET['submit'] == 1) {
	$toolstype[$id]['tName'] = $_REQUEST['tName'];
	$toolstype[$id]['price'] = intval($_REQUEST['price']);
	$toolstype[$id]['FBPrice'] = intval($_REQUEST['FBPrice']);
	$toolstype[$id]['YFBPrice'] = intval($_REQUEST['YFBPrice']);
	$toolstype[$id]['effect'] = intval($_REQUEST['effect']);
	$toolstype[$id]['depict'] = $_REQUEST['depict'];
	$toolstype[$id]['saleOut'] = $_REQUEST['saleOut'] == 'true' ? true : false;
	qf_putCache('toolstype', $toolstype, '/nc/') ;
	die('1|&|修改道具(cId:' . $id . ')的参数成功.|&|refresh|&|1');
}
else {
	$toolstype_list = $toolstype[$id];
	qf_getView("admin/toolstype_edit");
}
?>