<?php
/* 
 * 请将本文件改为英文名再在浏览器运行。
 */
 
include_once("../common.php");

header("Content-Type:text/html; charset=utf-8");


//up to qqfarm 4.1 Final///////////////////////////////////////////////////////


$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_nc')." ADD `redland` int (10)  DEFAULT '0' NULL");



//up to qqfarm 4.1 Final///////////////////////////////////////////////////////

die('OK. 升级成功 QFarm 4.1 Final');
?>