<?php

# 数据库升级

include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');


//up to QFarm 5.1F Final///////////////////////////////////////////////////////

$_QFG['db']->query("ALTER TABLE app_qqfarm_user add column `npc` text NOT NULL", "quiet");



die('OK. 升级成功 QFarm 5.5 Final');

?>