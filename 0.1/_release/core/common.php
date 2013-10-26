<?php
//公共加载项
//检查登录状态

//@error_reporting(0);
@session_start();
define('FARM_SET', 1); //内部标示符,请勿修改
define('FARM_DEBUG', 3); //调试模式[=0:关闭|>0:记录MySQL错误|=2:记录PHP错误]
define('FARM_VERSION', '7.0 Final Build 20120905.1700'); //系统版本,请勿修改
define('FARM_DAY',  substr(FARM_VERSION,16,8)); //系统版本日期,请勿修改
define('FARM_ROOT', str_replace('\\', '/', dirname(__file__))); //QF安装路径
function_exists('date_default_timezone_set') && date_default_timezone_set('PRC');
chdir(FARM_ROOT);//切换工作目录
$verson = FARM_DAY;
//安装农场目录
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"];
$url = preg_replace('/core.*$/i', '' ,$url);
$url = $url.'core';

//for PHP of Version < 5.2.0
if(version_compare(PHP_VERSION, '5.2.0', '<')) {
	if(version_compare(PHP_VERSION, '5.0.0', '<')) {
		die('您的PHP版本不被支持');
	}
	include('source/json.func.php');
}

//加载缓存
include('source/cache.func.php');
qf_getCache('_QSC');
qf_getCache('_VIP');
qf_getCache('_NOTICE');

//全局变量
$_QFG = array();
$_QFG['uid'] = 0;
$_QFG['timestamp'] = time();

//启用gzip
if ($_QSC['gzipcompress'] == 1 && function_exists('ob_gzhandler') && !strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 6.0')) {
	ob_start('ob_gzhandler');
} else 	ob_start();

//加载公共函数
include('source/common.func.php');
error_reporting(FARM_DEBUG == 3 ? 2037 : 0);
FARM_DEBUG == 2 && set_error_handler('qf_error_handler');

//取消魔术引用
if(get_magic_quotes_gpc()) {
	$_GET = qf_stripslashes($_GET);
	$_POST = qf_stripslashes($_POST);
	$_COOKIE = qf_stripslashes($_COOKIE);
}
if(get_magic_quotes_runtime()) {
	set_magic_quotes_runtime(0);
}

//生成XML
if($_QSC['gzipcompress'] == 0){
	$xml ='data/xml/';
	$xml_list = array('nc_main', 'nc_data','nc_addon','nc_farm','mc_main','mc_data','mc_card');
	foreach($xml_list as $key => $value) {
		if(!file_exists('data/xml/'.$value.'_'.FARM_DAY.'.xml')){
			include('source/xml/mod/'.$value.'.php');
			qf_getXML($value.'_'.FARM_DAY,$$value,'/xml/');
		}
	}
} else 
$xml ='xml.php?mod=';

///////////////////////////////////////////////////////////////////////

//加载接口配置
define('API_ROOT', 'api/' . $_QSC['apiType']);
include('config/api/'.$_QSC['apiType'].'.php');


//连接数据库
include('source/mysql.class.php');
$_QFG['db'] = new dbstuff($_QSC['db']);
FARM_DEBUG ||$_QSC['db']->logFile = null;
if(isset($_QSC['db']['tbprefix'])) {
	$_QFG['db']->tbPrefix = array(
		array('app_qqfarm_', 'pap_tbpre_'),
		array($_QSC['db']['tbprefix'].'qqfarm_', $_QSC['db']['tbprefix'])
	); 
}

//加载接口函数
include(API_ROOT . '/main.php');

//FLASH src
$animalConfig = '145';
$nc_src = 'module/happyfarm3_v_149.swf' ;
$mc_src = 'module/mcloader_v_53.swf';

?>