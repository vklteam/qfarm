<?php
/* 
 * �뽫���ļ���ΪӢ����������������С�
 */
include_once('../common.php');
$_SGLOBAL['db']->query("ALTER TABLE ".tname('happyfarm_nc')." ADD `nc_d` INT( 1 ) NOT NULL DEFAULT '1';");
echo('ok');

?>
