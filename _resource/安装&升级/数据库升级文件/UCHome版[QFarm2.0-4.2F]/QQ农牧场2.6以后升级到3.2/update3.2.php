<?php
/* 
 * 请将本文件改为英文名再在浏览器运行。
 */
 
include_once("../common.php");
header("Content-Type:text/html; charset=gb2312");

//up to qqfarm 3.2///////////////////////////////////////////////////////

//数据库表更名

		$_SGLOBAL['db']->query("ALTER TABLE ".tname('happyfarm_config')." RENAME TO ".tname('qqfarm_config'));
		echo tname('happyfarm_config')."成功改名为".tname('qqfarm_config')."<br>";

		$_SGLOBAL['db']->query("ALTER TABLE ".tname('happyfarm_mc')." RENAME TO ".tname('qqfarm_mc'));
		echo tname('happyfarm_mc')."成功改名为".tname('qqfarm_mc')."<br>";

		$_SGLOBAL['db']->query("ALTER TABLE ".tname('happyfarm_mclogs')." RENAME TO ".tname('qqfarm_mclogs'));
		echo tname('happyfarm_mclogs')."成功改名为".tname('qqfarm_mclogs')."<br>";

		$_SGLOBAL['db']->query("ALTER TABLE ".tname('happyfarm_nc')." RENAME TO ".tname('qqfarm_nc'));
		echo tname('happyfarm_nc')."成功改名为".tname('qqfarm_nc')."<br>";


//判断是否存在username字段,不存在则添加.
$query1 = $_SGLOBAL['db']->query("desc ".tname('qqfarm_config'));
$username = true;
while( $value1 = $_SGLOBAL['db']->fetch_array($query1) ){
	if( $value1[Field] == 'username' ) {
		$username = false;
	}
}
if($username){
	$_SGLOBAL['db']->query("alter table ".tname('qqfarm_config')." add `username` varchar(20) CHARSET gbk COLLATE gbk_chinese_ci after `id`;");
	echo tname('qqfarm_config')."表中成功添加字段username<br>";
}

//判断是否存在levelup字段,不存在则添加.
$query2 = $_SGLOBAL['db']->query("desc ".tname('qqfarm_nc'));
$levelup = true;
while( $value2 = $_SGLOBAL['db']->fetch_array($query2) ){
	if( $value2[Field] == 'levelup' ) {
		$levelup = false;
	}
}
if($levelup){
	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_nc')." ADD `levelup` int(10) NOT NULL DEFAULT 200 ");
	echo tname('qqfarm_nc')."表中成功添加字段levelup<br>";
}





echo('ok 升级成功 QFarm 3.2');

?>
