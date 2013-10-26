<?php
/* 
 * 请将本文件改为英文名再在浏览器运行。
 */
 
include_once("../common.php");
header("Content-Type:text/html; charset=utf-8");



//up qqfarm 4.0 beta to qqfarm 4.0 Final///////////////////////////////////////////////////////




	$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_nc')." SET `repertory` = '',`flower` = ''");
	$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_mc')." SET `repertory` = '', `parade` = ''");
	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_config')." change `vip` `vip` text character set utf8 collate utf8_general_ci NOT NULL");
	# 并创建留言表
    $_SGLOBAL['db']->query("DROP TABLE IF EXISTS ".tname('qqfarm_message')." ");
	$_SGLOBAL['db']->query("CREATE TABLE ".tname('qqfarm_message')." ( `id` int(10) unsigned NOT NULL auto_increment, `toID` int(10) NOT NULL, `toName` varchar(50) NOT NULL default '', `fromID` int(10) NOT NULL, `fromName` varchar(50) NOT NULL default '',  `msg` text character set gbk NOT NULL,  `time` int(10) NOT NULL,  `isReply` int(2) default '0', `isread` int(2) default '0', PRIMARY KEY  (`id`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8");
	# 并创建农场日志表
    $_SGLOBAL['db']->query("DROP TABLE IF EXISTS ".tname('qqfarm_nclogs')." ");
	$_SGLOBAL['db']->query("CREATE TABLE ".tname('qqfarm_nclogs')." ( `id` int(10) NOT NULL auto_increment, `uid` int(10) NOT NULL, `type` tinyint(4) NOT NULL, `count` int(10) NOT NULL, `fromid` int(10) NOT NULL, `time` int(10) NOT NULL, `cropid` int(10) NOT NULL, `isread` int(10) NOT NULL, `counts` text NOT NULL,`money` text NOT NULL, PRIMARY KEY (`id`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8");


	# 旧VIP转新VIP #
	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1267197119,"last":1267197119,"valid":1272381032,"status":1,"exp":300,"rsign":0}\' WHERE vip =\'2\'');

	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1263309198,"last":1263309198,"valid":1272381032,"status":1,"exp":700,"rsign":0}\' WHERE vip =\'3\'');

	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1258989287,"last":1258989287,"valid":1272381032,"status":1,"exp":1200,"rsign":0}\' WHERE vip =\'4\'');

	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1253805348,"last":1253805348,"valid":1272381032,"status":1,"exp":1800,"rsign":0}\' WHERE vip =\'5\'');

	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1247757408,"last":1247757408,"valid":1272381032,"status":1,"exp":2500,"rsign":0}\' WHERE vip =\'6\'');

	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1240845467,"last":1240845467,"valid":1272381032,"status":1,"exp":3300,"rsign":0}\' WHERE vip =\'7\'');

	die('OK. 升级成功 QFarm 4.0 Final');



?>