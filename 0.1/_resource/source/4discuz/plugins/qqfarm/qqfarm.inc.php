<?php

#农场牧场插件入口

defined('IN_DISCUZ') || exit('Access Denied');

if(!$discuz_uid) {
	showmessage('not_loggedin', NULL, 'NOPERM');
}

define('FARM_ROOT', str_replace('\\', '/', dirname(__file__)));
if(!@include(FARM_ROOT . '/core/data/_qsc.php')) {
	@include(FARM_ROOT . '/core/config/_qsc.php');
}

$qf_root = 'plugins/qqfarm';

$qf_charset = $charset == 'gbk' ? 'gbk' : 'utf-8';
include template("qqfarm:qqfarm.{$qf_charset}");

?>