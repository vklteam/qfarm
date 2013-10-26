<?php
/* 
 * 请将本文件改为英文名再在浏览器运行。
 */
 
include_once("../common.php");

header("Content-Type:text/html; charset=utf-8");


//up to qqfarm 4.2 Beta2///////////////////////////////////////////////////////

$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_mc')." ADD `enemy` int (1)  DEFAULT '0'");
$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_user')." ADD `visittime` int (10)  DEFAULT '0'");
$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_user')." set visittime=".$_SGLOBAL[timestamp]);

//up to qqfarm 4.2 Beta2///////////////////////////////////////////////////////

die('OK. 升级成功 QFarm 4.2 Beta2');
?>