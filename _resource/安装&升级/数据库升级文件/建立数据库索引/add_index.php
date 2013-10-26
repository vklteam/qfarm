<?php
/* 【升级工具】
 *     请将此文件放在 x/qfarm/core/
 *     浏览器里运行 http://您的域名/x/qfarm/core/add_index.php
 */

include_once('common.php');
$_QFG['db']->query("ALTER TABLE app_qqfarm_user add index `uid` (`uid`);");
$_QFG['db']->query("ALTER TABLE app_qqfarm_nc add index `uid` (`uid`);");
$_QFG['db']->query("ALTER TABLE app_qqfarm_mc add index `uid` (`uid`);");
$_QFG['db']->query("ALTER TABLE app_qqfarm_nclogs add index `uid` (`uid`);");
$_QFG['db']->query("ALTER TABLE app_qqfarm_mclogs add index `uid` (`uid`);");
$_QFG['db']->query("ALTER TABLE app_qqfarm_message add index `toID` (`toID`);");

echo('ok');

?>