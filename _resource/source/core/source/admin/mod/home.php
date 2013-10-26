<?php

# 管理首页

$farmTest = array();


//环境检查
$farmTest['QQ农场版本'][0] = FARM_VERSION;
$farmTest['QQ农场版本'][1] = '(<a href="javascript:check_version();">检查最新版</a> <a href="http://www.phpye.com/forum-39-1.html" target="_blank">下载最新版</a>)';
$farmTest['数据库版本'][0] = mysql_get_server_info();
if(function_exists('json_encode') && function_exists('json_decode')) {
	$farmTest['Json函数库'][0] = true;
	if(@version_compare(PHP_VERSION, '5.2.0', '<')) {
		$farmTest['Json函数库'][1] = "(由PEAR支持,可能存在缺陷)";
	}
} else {
	$farmTest['Json函数库'][0] = false;
}

$nccount = $_QFG['db']->result("SELECT COUNT(*) FROM app_qqfarm_nc");
$mccount = $_QFG['db']->result("SELECT COUNT(*) FROM app_qqfarm_mc");
$tcount = $_QFG['db']->result("SELECT COUNT(*) FROM app_qqfarm_user where visittime>({$_QFG['timestamp']}-604800)");
$rcount = $_QFG['db']->result("SELECT COUNT(*) FROM app_qqfarm_user where visittime>({$_QFG['timestamp']}-2592000)");

qf_getCache('cropstype', '/nc/');
qf_getCache('fishtype', '/nc/');
qf_getCache('animaltype', '/mc/');
$nc_toolstype=qf_getCache('toolstype', '/nc/');
$mc_toolstype=qf_getCache('toolstype', '/mc/');
$nc_itemtype=qf_getCache('itemtype', '/nc/');
$mc_itemtype=qf_getCache('itemtype', '/mc/');

qf_getView("admin/home");

?>