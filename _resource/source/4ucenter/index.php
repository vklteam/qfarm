<?php

# 用户登陆

header('Content-Type:text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");

include('common.php');


//定义允许访问的模块
$mod_list = array(
	'login', //登录
	'logout' //退出
);

//构造模块名称
$mod_name = $_REQUEST['mod'] ? $_REQUEST['mod'] : '';
$mod_name .= $_REQUEST['act'] ? '_' . $_REQUEST['act'] : '';
$mod_name = strtolower($mod_name);

//加载模块
if(in_array($mod_name, $mod_list)) {
	include('uc_client/client.php');
	include("source/mod/{$mod_name}.php");
} else {
	echo $auth;
	$auth ? qf_getView('index') : qf_getView('main');
}

?>