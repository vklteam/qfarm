<?php
//工具接口

include('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

//检查登录状态
if($auth = qf_checkauth()) die($auth);


//定义允许访问的模块
$mod_list = array(
	'top', //排行榜
	'exchange', //积分兑换
	'help', //游戏帮助
	'setting', //游戏设置
	'vip', //VIP升级
	'market_mc', //农牧市场
	'market_nc' //农牧市场
);

//构造模块名称
$mod_name = $_REQUEST['mod'] ? $_REQUEST['mod'] : '';
$mod_name .= $_REQUEST['act'] ? '_' . $_REQUEST['act'] : '';
$mod_name = strtolower($mod_name);

//加载模块
if(in_array($mod_name, $mod_list)) {
	$tab_name = $mod_name;
	include("source/tools/mod/{$mod_name}.php");
} else {
	die('参数错误');
}

?>