<?php

# 系统配置
$id = intval($_GET['id']);
if($id < 1) {
	die('2|&|参数错误.');
}

qf_getCache('toolstype', '/mc/');

if($_GET['submit'] == 1) {
	$toolstype[$id]['name'] = $_REQUEST['name'];
	$toolstype[$id]['price'] = intval($_REQUEST['price']);
	$toolstype[$id]['qdprice'] = intval($_REQUEST['qdprice']);
	$toolstype[$id]['yqdprice'] = intval($_REQUEST['yqdprice']);
	$toolstype[$id]['effect'] = intval($_REQUEST['effect']);
	$toolstype[$id]['description'] = $_REQUEST['description'];
	$toolstype[$id]['saleOut'] = $_REQUEST['saleOut'] == 'true' ? true : false;
	qf_putCache('toolstype', $toolstype, '/mc/') ;
	die('1|&|修改道具(cId:' . $id . ')的参数成功.|&|refresh|&|1');
}
else {
	$toolstype_list = $toolstype[$id];
	qf_getView("admin/mctoolstype_edit");
}
?>