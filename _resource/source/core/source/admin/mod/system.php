<?php

# 系统配置

if($_GET['submit'] == 1) {
	//系统配置参数
	$_QSC['friendType'] = (int)$_POST['friendType'];
	$_QSC['friendNumber'] = (int)$_POST['friendNumber'];
	$_QSC['closefarm'] = (int)$_POST['closefarm'];
	$_QSC['vip'] = (int)$_POST['vip'];
	$_QSC['creditType'] = $_POST['creditType'];
	$_QSC['redeem'] = (int)$_POST['redeem'];
	$_QSC['avatarStatic'] = (int)$_POST['avatarStatic'];
	$_QSC['closeinfo'] = $_POST['closeinfo'];
	$_QSC['missionName'] = $_POST['missionName'];
	$_QSC['diyLimitYDLevel'] = (int)$_POST['diyLimitYDLevel'];
	$_QSC['gzipcompress'] = (int)$_POST['gzipcompress'];
	$_QSC['view']['tplId'] = $_POST['view_tplId'];
	$_QSC['view']['player'] = (int)$_POST['view_player'];
	$_QSC['adminer'] = explode(',', $_POST['adminer']);
	//用户初始化参数
	$_INIT['money'] = (int)$_POST['init_money'];
	$_INIT['yb'] = (int)$_POST['init_yb'];
	$_INIT['nc_exp'] = (int)$_POST['init_nc_exp'];
	$_INIT['mc_exp'] = (int)$_POST['init_mc_exp'];
	//隐藏鱼苗
	$_HIDE['fish'] = explode(',', $_POST['hide_fish']);
	//隐藏种子和装饰
	$_HIDE['seed'] = explode(',', $_POST['hide_seed']);
	$_HIDE['item'] = explode(',', $_POST['hide_item']);
	//隐藏幼崽和牧场装饰
	$_HIDE['animal'] = explode(',', $_POST['hide_animal']);
	$_HIDE['mcitem'] = explode(',', $_POST['hide_mcitem']);
	//验证参数有效性
	qf_getCache('cropstype', '/nc/');
	$crop = array_keys($cropstype);
	$noCrop = array_diff($_HIDE['seed'], array_intersect($_HIDE['seed'], $crop));
	if($noCrop) {
		die('0|&|修改失败: '.implode(',', $noCrop).'不是有效的种子ID.');
	}
	qf_getCache('itemtype', '/nc/');
	$item = array_keys($itemtype);
	$noItem = array_diff($_HIDE['item'], array_intersect($_HIDE['item'], $item));
	if($noItem) {
		die('0|&|修改失败: '.implode(',', $noItem).'不是有效的装饰ID.');
	}
	//验证牧场参数有效性
	qf_getCache('cropstype', '/mc/');
	$animal = array_keys($animaltype);
	$noanimal = array_diff($_HIDE['animal'], array_intersect($_HIDE['animal'], $animal));
	if($noanimal) {
		die('0|&|修改失败: '.implode(',', $noanimal).'不是有效的幼崽ID.');
	}
	qf_getCache('itemtype', '/mc/');
	$mcitem = array_keys($itemtype);
	$noItem = array_diff($_HIDE['mcitem'], array_intersect($_HIDE['mcitem'], $mcitem));
	if($noItem) {
		die('0|&|修改失败: '.implode(',', $noItem).'不是有效的装饰ID.');
	}
	//保存系统配置
	if(qf_putCache('_QSC', $_QSC) && qf_putCache('_INIT', $_INIT) && qf_putCache('_HIDE', $_HIDE)) {
		die('1|&|修改成功|&|refresh');
	}
	die('0|&|修改失败');
}

//加载缓存
qf_getCache('_INIT');
qf_getCache('_HIDE');

//视图列表
$views = glob('view/qf_*');
foreach($views as $k=>$v) {
	$views[$k] = str_replace('view/', '', $v);
}

//加载模板
qf_getView("admin/system");

?>