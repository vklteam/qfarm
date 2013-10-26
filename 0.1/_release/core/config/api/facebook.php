<?php

# 合并UCH配置到QFarm
$_config || $_config = $GLOBALS['_config'];

if(!$_config || !defined('UC_API')) {
	header('Content-Type:text/html; charset=utf-8');
	//die('无法加载必要的Discuz!X配置文件.');
}

//添加UCH创始人到管理员列表
$founder = @explode(',', '1');
$_QSC['adminer'] = array_merge($founder, (array)$_QSC['adminer']);
$_QSC['adminer'] = array_unique($_QSC['adminer']);

//数据库参数
$_QSC['db']['dbhost'] = 'localhost'; //MySQL地址
$_QSC['db']['dbuser'] = 'root'; //MySQL用户名
$_QSC['db']['dbpass'] = ''; //MySQL密码
$_QSC['db']['dbname'] = 'qqfarm'; //数据库名
$_QSC['db']['charset'] = 'utf8'; //MySQL字符集,一般无需修改
$_QSC['db']['pconnect'] = true; //是否持续连接
$_QSC['db']['tbprefix'] = ''; //表名前缀
$_QSC['db']['logFile'] = 'data/logs/#mysql_error.log';//日志

//积分类型
$_QSC['creditType'] = 'extcredits1';

//其他参数cookiepre
$_QSC['charset'] = 'utf-8'; //页面字符集
$_QSC['authmask'] = '456456456456'; //COOKIE掩码

$_QSC['cookie']['prefix'] = 'qqfarm_'; //COOKIE前缀
$_QSC['cookie']['domain'] = ''; //COOKIE域名
$_QSC['cookie']['path'] = '/'; //COOKIE路径
$_QSC['saltkey'] = $_COOKIE[$_QSC['cookie']['prefix'].'saltkey']; //COOKIE掩码
$_QSC['UC_API'] = UC_API;

//更新缓存
qf_putCache('_QSC', $_QSC);

$_QSC['authkey'] = md5($_QSC['authmask'].$_SERVER['HTTP_USER_AGENT']);
?>