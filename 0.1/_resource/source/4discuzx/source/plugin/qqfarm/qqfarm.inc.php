<?php

#农场牧场插件入口

defined('IN_DISCUZ') || exit('Access Denied');

if(!$_G['uid']) {
	showmessage('not_loggedin', NULL, array(), array('login' => 1));
}

$qf_charset = $_G['charset'] == 'gbk' ? 'gbk' : 'utf-8';

$qf_root = 'source/plugin/qqfarm';

$navtitle = $_G['charset'] == "utf-8" ? "农场庄园" : iconv("UTF-8", "GBK", "农场庄园");

define('FARM_ROOT', str_replace('\\', '/', dirname(__file__)));
if(!@include(FARM_ROOT . '/core/data/_qsc.php')) {
	@include(FARM_ROOT . '/core/config/_qsc.php');
}

include_once template("qqfarm:qqfarm.{$qf_charset}");

?>