<?php

# 数据库升级

include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');


//up to QFarm 6.2F Final///////////////////////////////////////////////////////

//$_QFG['db']->query("ALTER TABLE app_qqfarm_mc add column `signin` text", "quiet");
//$_QFG['db']->query("ALTER TABLE app_qqfarm_nc add column `fish_open` int(1) default '0'", "quiet");
//$_QFG['db']->query("ALTER TABLE app_qqfarm_nc add column `fish_status` text", "quiet");
//$_QFG['db']->query("ALTER TABLE app_qqfarm_nc add column `fish_unlock` text", "quiet");
//$_QFG['db']->query("ALTER TABLE app_qqfarm_nc add column `fish_package` text", "quiet");
//$_QFG['db']->query("ALTER TABLE app_qqfarm_nc add column `fish_fruit` text", "quiet");
$_QFG['db']->query("ALTER TABLE app_qqfarm_nc add column `fish_repertory` text", "quiet");


die('OK. 升级成功 QFarm 6.3 Beta3');

?>
