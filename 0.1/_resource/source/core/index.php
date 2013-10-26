<?php
/**
 * 用户入口
 * QFarm User Interface
 */


include('common.php');
$auth = qf_checkauth(); //检查登录状态

//计划任务
if($_GET['mod'] == 'cron') {
	include("source/cron/run.php");
}

?>