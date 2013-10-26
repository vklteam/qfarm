<?php
/* 
 * 请将本文件改为英文名再在浏览器运行。
 */
 
include_once("../common.php");

header("Content-Type:text/html; charset=utf-8");


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