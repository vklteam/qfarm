<?php

# 系统配置

$id = intval($_GET['id']);
if($id < 1) {
	die('2|&|参数错误.');
}

qf_getCache('fishtype', '/nc/');

if($_GET['submit'] == 1) {
	$fishtype[$id]['exp'] = intval($_REQUEST['exp']);
	$fishtype[$id]['lock_money'] = intval($_REQUEST['lock_money']);
	$fishtype[$id]['output'] = intval($_REQUEST['output']);
	$fishtype[$id]['price'] = intval($_REQUEST['price']);
	$fishtype[$id]['sale'] = intval($_REQUEST['sale']);
	qf_putCache('fishtype', $fishtype, '/nc/') ;
	die('1|&|修改鱼苗(id:' . $id . ')的参数成功.|&|refresh|&|1');
}
else {
	$farm_list = $fishtype[$id];
	qf_getView("admin/fishtype_edit");
}
?>