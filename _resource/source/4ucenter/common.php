<?php
//公共加载项

#@error_reporting(0);

//加载配置
if(!@include('core/data/_qsc.php')) {
	@include('core/config/_qsc.php');
}
include_once('config.php');


//全局变量
$_UFG = array();
$_UFG['uid'] = 0;
$_UFG['timestamp'] = time();

//加载公共函数
include('source/common.func.php');

//取消魔术引用
if(get_magic_quotes_gpc()) {
	$_GET = qf_stripslashes($_GET);
	$_POST = qf_stripslashes($_POST);
	$_COOKIE = qf_stripslashes($_COOKIE);
}
if(get_magic_quotes_runtime()) {
	set_magic_quotes_runtime(0);
}

//连接数据库
include('source/mysql.class.php');
$_UFG['db'] = new dbstuff($_USC['db']);
if(isset($_USC['db']['tbprefix'])) {
	$_UFG['db']->tbPrefix = array(
		array('app_qqfarm_', 'pap_tbpre_'),
		array($_USC['db']['tbprefix'].'qqfarm_', $_USC['db']['tbprefix'])
	); 
}

//检查权限
$auth = qf_checkauth();

?>