<?php

//XML入口 

include('common.php');
header('Content-Type: application/xml');
header('Cache-Control: no-cache, must-revalidate');
//检查登录状态
if($auth = qf_checkauth()) die($auth);

//定义允许访问的模块
$mod_list = array(
	'nc_main', //load_main_v_9.xml
	'nc_data',//data_zh_CN_v_17.xml
	'nc_addon',//addon_v_6.xml
	'nc_farm',//farmRestaurantConfig_v_0.xml
	'mc_main',//mcini_main_v_8.xml
	'mc_main63',//mcini_main_v_8.xml
	'mc_data',//animalConfig_7.xml
	'mc_card' //card.xml
);

//构造模块名称
$mod = $_REQUEST['mod'];
list($a,$b) = explode("_", $mod);
$mod = $a.'_'.$b ;
//echo $mod;
//特殊mod参数映射
$mod_map = array(
	'mc_main1' => 'mc_main',
	'mc_main0' => 'mc_main',
	'load_main' => 'nc_main',
	'data_zh' => 'nc_data',
	'addon_v' => 'nc_addon'
);
$mod_name = $_REQUEST['mod'] ? $mod : '';
if(array_key_exists($mod_name, $mod_map)) {
	$mod_name = $mod_map[$mod_name];
}
$mod_name = strtolower($mod_name);//转小写

//echo $mod_name;
//加载模块
if(in_array($mod_name, $mod_list)) {
	include("source/xml/mod/{$mod_name}.php");
	echo $$mod_name;
} elseif(FARM_DEBUG) {
	error_log($mod_name . "\r\n", 3, 'data/logs/#xmlmod_deny.log');
}

?>