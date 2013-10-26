<?php

# 数据库升级

include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');


//QFarm 4.8 Beta1 up to QFarm 4.8 Final///////////////////////////////////////////////////////
$_QFG['db']->query("update app_qqfarm_nc set bison=''");


die('OK. 升级成功 QFarm 4.8 Final');

?>