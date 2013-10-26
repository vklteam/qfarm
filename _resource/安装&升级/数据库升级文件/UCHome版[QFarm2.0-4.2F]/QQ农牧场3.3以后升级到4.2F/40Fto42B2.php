<?php
/* 
 * 请将本文件改为英文名再在浏览器运行。
 */
 
include_once("../common.php");

header("Content-Type:text/html; charset=utf-8");
//up to qqfarm 4.1 Final///////////////////////////////////////////////////////

$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_mc')." change `Status` `status` text character set utf8 collate utf8_general_ci NOT NULL");

$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_nc')." change `Status` `status` text character set utf8 collate utf8_general_ci NOT NULL,change `weed` `weed` text character set utf8 collate utf8_general_ci NOT NULL,ADD `redland` int (10)  DEFAULT '0' NULL");

$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_config')." change `YB` `yb` int (10)  DEFAULT '0' NULL,ADD `password` char(32) NOT NULL,ADD `regname` char(20) NOT NULL");

//数据库表更名
$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_config')." RENAME TO ".tname('qqfarm_user'));

//up to qqfarm 4.1 Final///////////////////////////////////////////////////////

//up to qqfarm 4.2 Beta2///////////////////////////////////////////////////////

$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_nc')." ADD `randtime` int (10)  DEFAULT '0'");
$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_mc')." ADD `randtime` int (10)  DEFAULT '0',ADD `enemy` int (1)  DEFAULT '0'");
$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_user')." ADD `visittime` int (10)  DEFAULT '0'");
$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_user')." set visittime=".$_SGLOBAL[timestamp]);
$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_mc')." set decorative=REPLACE(decorative,'\"item1\":1','\"item1\":{\"105\":{\"status\":1,\"validtime\":1}}')");
$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_mc')." set decorative=REPLACE(decorative,',\"item4\":1','')");

//up to qqfarm 4.2 Beta2///////////////////////////////////////////////////////

die('OK. 升级成功 QFarm 4.2 Beta2');
?>