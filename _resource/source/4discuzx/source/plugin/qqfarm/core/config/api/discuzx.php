<?php

# 合并UCH配置到QFarm

define('PAP_ROOT', str_replace('/source/plugin/qqfarm/core', '', FARM_ROOT));

if(!$_QSC['UC_API']) {

	@include_once(PAP_ROOT . '/config/config_ucenter.php');
	@include_once(PAP_ROOT . '/config/config_global.php');
	$_config || $_config = $GLOBALS['_config'];
	if(!$_config || !defined('UC_API')) {
		header('Content-Type:text/html; charset=utf-8');
		die('无法加载必要的Discuz!X配置文件.');
	}
	//添加UCH创始人到管理员列表
	$founder = @explode(',', $_config['admincp']['founder']);
	$_QSC['adminer'] = array_merge($founder, (array)$_QSC['adminer']);
	$_QSC['adminer'] = array_unique($_QSC['adminer']);

	//数据库参数
	$_QSC['db']['dbhost'] = $_config['db']['1']['dbhost']; //MySQL地址
	$_QSC['db']['dbuser'] = $_config['db']['1']['dbuser']; //MySQL用户名
	$_QSC['db']['dbpass'] = $_config['db']['1']['dbpw']; //MySQL密码
	$_QSC['db']['dbname'] = $_config['db']['1']['dbname']; //数据库名
	$_QSC['db']['charset'] = 'utf8'; //MySQL字符集,一般无需修改
	$_QSC['db']['pconnect'] = $_config['db']['1']['pconnect']; //是否持续连接
	$_QSC['db']['tbprefix'] = $_config['db']['1']['tablepre']; //表名前缀
	$_QSC['db']['logFile'] = 'data/logs/#mysql_error.log';//日志
	
	//积分类型
	$_QSC['creditType'] = 'extcredits1';

	//其他参数cookiepre
	$_QSC['charset'] = $_config['output']['charset']; //页面字符集
	$_QSC['authmask'] = $_config['security']['authkey']; //COOKIE掩码

	$_QSC['cookie']['prefix'] = $_config['cookie']['cookiepre'].substr(md5($_config['cookie']['cookiepath'].'|'.$_config['cookie']['cookiedomain']), 0, 4).'_'; //COOKIE前缀
	$_QSC['cookie']['domain'] = $_config['cookie']['cookiedomain']; //COOKIE域名
	$_QSC['cookie']['path'] = $_config['cookie']['cookiepath']; //COOKIE路径
	$_QSC['saltkey'] = $_COOKIE[$_QSC['cookie']['prefix'].'saltkey']; //COOKIE掩码
	$_QSC['UC_API'] = UC_API;
	
	//更新缓存
	qf_putCache('_QSC', $_QSC);

}

//动态加密码
if(!isset($_COOKIE[$_QSC['cookie']['prefix'].'saltkey'])) {
	$_QSC['authkey'] = md5($_QSC['authmask'].$_SERVER['HTTP_USER_AGENT']);
} else $_QSC['authkey'] = md5($_QSC['authmask'].$_COOKIE[$_QSC['cookie']['prefix'].'saltkey']);


?>