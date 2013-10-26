<?php

# 合并UCH配置到QFarm

define('PAP_ROOT', str_replace('/plugins/qqfarm/core', '', FARM_ROOT));

if(!$_QSC['UC_API']) {

	@include_once(PAP_ROOT . '/config.inc.php');
	@include_once(PAP_ROOT . '/forumdata/cache/cache_settings.php');
	if(!defined('UC_API') || !$_DCACHE) {
		header('Content-Type:text/html; charset=utf-8');
		die('无法加载必要的Discuz!配置文件.');
	}

	//添加UCH创始人到管理员列表
	$founder = @explode(',', $forumfounders);
	$_QSC['adminer'] = array_merge($founder, (array)$_QSC['adminer']);
	$_QSC['adminer'] = array_unique($_QSC['adminer']);

	//数据库参数
	$_QSC['db']['dbhost'] = $dbhost; //MySQL地址
	$_QSC['db']['dbuser'] = $dbuser; //MySQL用户名
	$_QSC['db']['dbpass'] = $dbpw; //MySQL密码
	$_QSC['db']['dbname'] = $dbname; //数据库名
	$_QSC['db']['charset'] = 'utf8'; //MySQL字符集,一般无需修改
	$_QSC['db']['pconnect'] = $pconnect; //是否持续连接
	$_QSC['db']['tbprefix'] = $tablepre; //表名前缀
	$_QSC['db']['logFile'] = 'data/logs/#mysql_error.log';//日志
	
	//积分类型
	$_QSC['creditType'] = 'extcredits1';

	//其他参数
	$_QSC['charset'] = $charset; //页面字符集
	$_QSC['authmask'] = $_DCACHE['settings']['authkey']; //加密掩码
	$_QSC['cookie']['prefix'] = $cookiepre; //COOKIE前缀
	$_QSC['cookie']['domain'] = $cookiedomain; //COOKIE域名
	$_QSC['cookie']['path'] = $cookiepath; //COOKIE路径

	$_QSC['UC_API'] = UC_API;
	$_QSC['UC_KEY'] = UC_KEY;
	
	//更新缓存
	qf_putCache('_QSC', $_QSC);

}

//动态加密码
$_QSC['authkey'] = md5($_QSC['authmask'].$_SERVER['HTTP_USER_AGENT']);;

?>