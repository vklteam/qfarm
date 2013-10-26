<?php

////////////////////////////////////////////////////////////
//UCenter配置参数

define('UC_CONNECT', 'mysql');
define('UC_DBHOST', '127.0.0.1');
define('UC_DBUSER', 'root');
define('UC_DBPW', '');
define('UC_DBNAME', 'ucenter');
define('UC_DBCHARSET', 'utf8');
define('UC_DBTABLEPRE', '`ucenter`.uc_');
define('UC_DBCONNECT', '0');
define('UC_KEY', 'd974+EzH+1k9BwvCM38jfbZwXf9Lu+CDxzkBh3c');
define('UC_API', 'http://127.1.1.1/uc-utf8');
define('UC_CHARSET', 'utf-8');
define('UC_IP', '');
define('UC_APPID', '4');
define('UC_PPP', '20');



////////////////////////////////////////////////////////////
//核心配置

$_USC = array();

//模板参数
$_USC['view']['tplId'] = 'api_ucenter';//模板名
$_USC['view']['tplDir'] = 'view/';//模板根目录
$_USC['view']['tplBak'] = 'view/api_ucenter/';//备用模板
$_USC['view']['cplDir'] = 'core/data/view/';//编译目录

//数据库参数
$_USC['db']['dbhost'] = 'localhost'; //MySQL地址
$_USC['db']['dbuser'] = 'root'; //MySQL用户名
$_USC['db']['dbpass'] = ''; //MySQL密码
$_USC['db']['dbname'] = 'farm'; //数据库名
$_USC['db']['tbprefix'] = 'pre_'; //表名前缀
$_USC['db']['charset'] = 'utf8'; //MySQL字符集
$_USC['db']['pconnect'] = 0; //是否持续连接
$_USC['db']['logFile'] = 'data/logs/#mysql_error.log';//日志

?>