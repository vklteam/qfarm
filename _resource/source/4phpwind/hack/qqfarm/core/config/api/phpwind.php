<?php

# 合并PW配置到QFarm

define('PAP_ROOT', str_replace('/hack/qqfarm/core', '', FARM_ROOT));

if(!$_QSC['db']) {

	if(!file_exists(PAP_ROOT .'/data/sql_config.php')) {
		header('Content-Type:text/html; charset=utf-8');
		die('无法加载必要的phpwind配置文件.');
	}

	@include_once(PAP_ROOT .'/data/sql_config.php');
	@include_once(PAP_ROOT .'/data/bbscache/config.php');

	//数据库参数
	$_QSC['db']['dbhost'] = $dbhost; //MySQL地址
	$_QSC['db']['dbuser'] = $dbuser; //MySQL用户名
	$_QSC['db']['dbpass'] = $dbpw; //MySQL密码
	$_QSC['db']['dbname'] = $dbname; //数据库名
	$_QSC['db']['charset'] = 'utf8'; //MySQL字符集,一般无需修改
	$_QSC['db']['pconnect'] = $pconnect; //是否持续连接
	$_QSC['db']['tbprefix'] = $PW; //表名前缀
	$_QSC['db']['logFile'] = 'data/logs/#mysql_error.log';//日志
	
	//积分类型[money:货币,rvrc:威望,credit:贡献值,currency:交易币]
	$_QSC['creditType'] = 'money';

	//其他参数
	$_QSC['charset'] = $db_charset; //页面字符集
	$_QSC['authmask'] = $db_sitehash; //COOKIE掩码
	$_QSC['cookie']['prefix'] = $db_cookiepre; //COOKIE前缀
	$_QSC['cookie']['domain'] = $db_ckdomain; //COOKIE域名
	$_QSC['cookie']['path'] = $db_ckpath; //COOKIE路径
	
	//pw
	$_QSC['dbhash'] = $db_hash;
	$_QSC['pa_url'] = $db_bbsurl;

	//更新缓存
	qf_putCache('_QSC', $_QSC);

}

?>