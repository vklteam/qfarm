<?php
/* 
 * 请将本文件改为英文名再在浏览器运行。
 */
include_once('../common.php');
$_SGLOBAL['db']->query("ALTER TABLE ".tname('happyfarm_nc')." ADD `nc_d` INT( 1 ) NOT NULL DEFAULT '1';");
echo('ok');

?>
