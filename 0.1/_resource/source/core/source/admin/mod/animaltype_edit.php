<?php

# 系统配置
$id = intval($_GET['id']);
if($id < 1) {
	die('2|&|参数错误.');
}

qf_getCache('animaltype', '/mc/');

if($_GET['submit'] == 1) {
	//$animaltype[$id]['cName'] = $_REQUEST['cName'];
	$animaltype[$id]['cLevel'] = intval($_REQUEST['cLevel']);
	$animaltype[$id]['byproductprice'] = intval($_REQUEST['byproductprice']);
	$animaltype[$id]['harvestpExp'] = intval($_REQUEST['harvestpExp']);
	$animaltype[$id]['harvestbExp'] = intval($_REQUEST['harvestbExp']);
	$animaltype[$id]['output'] = intval($_REQUEST['output']);
	$animaltype[$id]['price'] = intval($_REQUEST['price']);
	$animaltype[$id]['productprice'] = intval($_REQUEST['productprice']);
	qf_putCache('animaltype', $animaltype, '/mc/');
	die('1|&|修改道具(cId:' . $id . ')的参数成功.|&|refresh|&|1');
}
else {
	$animaltype_list = $animaltype[$id];
	qf_getView("admin/animaltype_edit");
}
?>