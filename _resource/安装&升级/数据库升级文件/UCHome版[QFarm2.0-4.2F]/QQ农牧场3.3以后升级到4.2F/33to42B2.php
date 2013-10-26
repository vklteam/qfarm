<?php
/* 
 * 请将本文件改为英文名再在浏览器运行。
 */
 
include_once("../common.php");
header("Content-Type:text/html; charset=utf-8");

$step = $_GET['step'] > 0 ? (int)$_GET['step'] : 0;

$dest = array(
	0=>'开始升级',
	1=>'设置字符集',
	2=>'清空一些数据',
	3=>'删除农场日志字段，并创建农场日志表，改mc_a为 tips(text)，牧场改tools为 feed(text) 和新键mclock',
	4=>'转化用户设置和旧VIP转新VIP',
	5=>'转化 qqfarm_nc.Status 的数据',
	6=>'转化 qqfarm_mc.Status 的数据',
	7=>'升级到4.1 Final',
	8=>'升级到4.2 beta2',
	9=>'升级完成'
);


//up to qqfarm 4.0 beta1///////////////////////////////////////////////////////

echo '<p>当前步骤:<b>' . $dest[$step] . '</b></p>';

if($step == 0) {

} elseif($step == 1) {

	#########################################
	# 设置字符集 #

	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_config')." DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_mc')." DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_mclogs')." DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_nc')." DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");

	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_config')." change `username` `username` varchar(20) character set utf8 collate utf8_general_ci NOT NULL,change `vip` `vip` text character set utf8 collate utf8_general_ci NOT NULL");
	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_nc')." change `flower` `flower` text character set utf8 collate utf8_general_ci NOT NULL,change `repertory` `repertory` text character set utf8 collate utf8_general_ci NOT NULL");
	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_mc')." change `parade` `parade` text character set utf8 collate utf8_general_ci NOT NULL,change `repertory` `repertory` text character set utf8 collate utf8_general_ci NOT NULL");

} elseif($step == 2) {

	#########################################
	# 清空一些数据 #

	$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_config')." SET `Message` = '', `exchange` = ''");
	$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_nc')." SET `repertory` = '',`flower` = ''");
	$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_mc')." SET `repertory` = '', `parade` = ''");

} elseif($step == 3) {

	#########################################
	# 农场：删除日志字段，创建农场日志表，改 mc_a 为 tips(text) #
	# 牧场：改 tools 为 feed(text) 并 新键 mclock #

	//判断是否存在tips字段,不存在则添加.
	$query = $_SGLOBAL['db']->query("desc ".tname('qqfarm_nc'));
	$tips = true;
	while( $value = $_SGLOBAL['db']->fetch_array($query) ){
		if( $value[Field] == 'tips' ) {
			$tips = false;
		}
	}
	if($tips){
    $_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_nc')." ADD `tips` text NULL ");	echo tname('qqfarm_nc')."表中成功添加字段tips<br>";
    }

	# qqfarm_mc 改 tools 为 feed(text) 并 新键 mclock
	//判断是否存在feed字段,不存在则添加.
	$query1 = $_SGLOBAL['db']->query("desc ".tname('qqfarm_mc'));
	$feed = true;
	while( $value1 = $_SGLOBAL['db']->fetch_array($query1) ){
		if( $value1[Field] == 'feed' ) {
			$feed = false;
		}
	}
	if($feed){
    $_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_mc')." ADD `feed` text NULL ");	echo tname('qqfarm_mc')."表中成功添加字段feed<br>";
    }
    //判断是否存在mclock字段,不存在则添加.
	$query2 = $_SGLOBAL['db']->query("desc ".tname('qqfarm_mc'));
	$mclock = true;
	while( $value2 = $_SGLOBAL['db']->fetch_array($query2) ){
		if( $value2[Field] == 'mclock' ) {
			$mclock = false;
		}
	}
	if($mclock){
    $_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_mc')." ADD `mclock` text NULL ");	echo tname('qqfarm_mc')."表中成功添加字段mclock<br>";
    }
	# 并创建VIP表
    $_SGLOBAL['db']->query("DROP TABLE IF EXISTS ".tname('qqfarm_vip')." ");
	$_SGLOBAL['db']->query("CREATE TABLE ".tname('qqfarm_vip')." ( `uid` int(10) unsigned NOT NULL, `level` int(10) NOT NULL,`vipstatus` int(10) NOT NULL default '0', `validtime` int(10) NOT NULL, `jointime` int(10) NOT NULL,  `vippoint` int(10) NOT NULL,  `endtime` int(10) NOT NULL,  `rsign` int(10) NOT NULL, PRIMARY KEY  (`uid`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8");
	# 并创建留言表
    $_SGLOBAL['db']->query("DROP TABLE IF EXISTS ".tname('qqfarm_message')." ");
	$_SGLOBAL['db']->query("CREATE TABLE ".tname('qqfarm_message')." ( `id` int(10) unsigned NOT NULL auto_increment, `toID` int(10) NOT NULL, `toName` varchar(50) NOT NULL default '', `fromID` int(10) NOT NULL, `fromName` varchar(50) NOT NULL default '',  `msg` text character set gbk NOT NULL,  `time` int(10) NOT NULL,  `isReply` int(2) default '0', `isread` int(2) default '0', PRIMARY KEY  (`id`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8");
	# 并创建农场日志表
    $_SGLOBAL['db']->query("DROP TABLE IF EXISTS ".tname('qqfarm_nclogs')." ");
	$_SGLOBAL['db']->query("CREATE TABLE ".tname('qqfarm_nclogs')." ( `id` int(10) NOT NULL auto_increment, `uid` int(10) NOT NULL, `type` tinyint(4) NOT NULL, `count` int(10) NOT NULL, `fromid` int(10) NOT NULL, `time` int(10) NOT NULL, `cropid` int(10) NOT NULL, `isread` int(10) NOT NULL, `counts` text NOT NULL,`money` text NOT NULL, PRIMARY KEY (`id`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8");

} elseif($step == 4) {

	#########################################
	# 转化用户设置 #

    $_SGLOBAL['db']->query( "update ".tname('qqfarm_nc')." set tips='{\"water_b\":\"谢谢帮忙，你真是个好人！\",\"weed_b\":\"谢谢你，杂草清除干净了！\",\"pest_b\":\"谢谢你，害虫清除干净了！\",\"weed_a\":\"缺德啊！竟然做这种坏事！\",\"pest_a\":\"可恶啊！你真不是个好人！\"}'");


	# 旧VIP转新VIP #
	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1267197119,"last":1267197119,"valid":1272381032,"status":1,"exp":300,"gift_nc":0,"gift_mc":0}\' WHERE vip =\'2\'');

	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1263309198,"last":1263309198,"valid":1272381032,"status":1,"exp":700,"gift_nc":0,"gift_mc":0}\' WHERE vip =\'3\'');

	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1258989287,"last":1258989287,"valid":1272381032,"status":1,"exp":1200,"gift_nc":0,"gift_mc":0}\' WHERE vip =\'4\'');

	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1253805348,"last":1253805348,"valid":1272381032,"status":1,"exp":1800,"gift_nc":0,"gift_mc":0}\' WHERE vip =\'5\'');

	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1247757408,"last":1247757408,"valid":1272381032,"status":1,"exp":2500,"gift_nc":0,"gift_mc":0}\' WHERE vip =\'6\'');

	$_SGLOBAL['db']->query('update '.tname("qqfarm_config").' set vip = \'{"join":1240845467,"last":1240845467,"valid":1272381032,"status":1,"exp":3300,"gift_nc":0,"gift_mc":0}\' WHERE vip =\'7\'');

} elseif($step == 5) {

	#########################################
	# 转化 qqfarm_nc.Status 的数据 #
	
	//计算分页参数
	$pleft = (int)$_GET['pleft'];
	if($pleft == 0) {
		$count = $_SGLOBAL['db']->result($_SGLOBAL['db']->query("SELECT COUNT(*) FROM " . tname('qqfarm_nc')), 0);
		$pleft = ceil($count/100);
	}
	if($pleft > 0) {
		$p1 = ($pleft-1)*100;
		$p2 = $pleft*100;
		//处理数据
		$query = $_SGLOBAL['db']->query("SELECT uid,Status FROM " . tname("qqfarm_nc")  . " ORDER BY uid ASC LIMIT {$p1},{$p2}");
		while($row = $_SGLOBAL['db']->fetch_array($query)) {
			if(strstr($row['Status'],'farmlandstatus')) {
				$s = '';
				if(preg_match("/\{\"farmlandstatus\":(.*)\}/i", $row['Status'], $matches)) {
					$s = $matches[1];
				} 

				$_SGLOBAL['db']->query("UPDATE " . tname("qqfarm_nc") . " set Status='{$s}' where uid=" .$row['uid']);
			}
		}
		//下一页
		if($pleft > 1) {
			$nextPageUrl = "33to42B2.php?step=" . $step . "&pleft="  . ($pleft-1);
			Header("Location: {$nextPageUrl}");
			echo "剩余{$pleft}页，如果未跳转，请点<a href='{$nextPageUrl}'>这里</a>...";
			die;
		}
	}

} elseif($step == 6) {

	#########################################
	# 转化 qqfarm_mc.Status 的数据 #

	//计算分页参数
	$pleft = (int)$_GET['pleft'];
	if($pleft == 0) {
		$count = $_SGLOBAL['db']->result($_SGLOBAL['db']->query("SELECT COUNT(*) FROM " . tname('qqfarm_mc')), 0);
		$pleft = ceil($count/100);
	}
	if($pleft > 0) {
		$p1 = ($pleft-1)*100;
		$p2 = $pleft*100;
		//处理数据
		$query = $_SGLOBAL['db']->query("SELECT uid,Status FROM " . tname("qqfarm_mc") . " ORDER BY uid ASC LIMIT {$p1},{$p2}");
		while($row = $_SGLOBAL['db']->fetch_array($query)) {
		if(strstr($row['Status'],'animal')) {
			if(preg_match("/\{(.+),(\"item1.+),\"animal\":(.*)\}/i", $row['Status'], $matches)) {
				$f = '{'.$matches[1].'}';
				$i = '{'.$matches[2].'}';
				$s = $matches[3];
				$_SGLOBAL['db']->query("UPDATE " . tname("qqfarm_mc") . " set Status='{$s}',feed='{$f}',decorative='{$i}' where uid=" . $row['uid']);
			} 
		 }
	  }
		//下一页
		if($pleft > 1) {
			$nextPageUrl = "33to42B2.php?step=" . $step . "&pleft="  . ($pleft-1);
			Header("Location: {$nextPageUrl}");
			echo "剩余{$pleft}页，如果未跳转，请点<a href='{$nextPageUrl}'>这里</a>...";
			die;
		}
	}
} elseif($step == 7) {	
	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_mc')." change `Status` `status` text character set utf8 collate utf8_general_ci NOT NULL");

	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_nc')." change `Status` `status` text character set utf8 collate utf8_general_ci NOT NULL,change `weed` `weed` text character set utf8 collate utf8_general_ci NOT NULL,ADD `redland` int (10)  DEFAULT '0' NULL");

	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_config')." change `YB` `yb` int (10)  DEFAULT '0' NULL,ADD `password` char(32) NOT NULL,ADD `regname` char(20) NOT NULL");
	//数据库表更名
    $_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_config')." RENAME TO ".tname('qqfarm_user'));
} elseif($step == 8) {
//up to qqfarm 4.2 Beta2///////////////////////////////////////////////////////

	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_nc')." ADD `randtime` int (10)  DEFAULT '0'");
	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_mc')." ADD `randtime` int (10)  DEFAULT '0',ADD `enemy` int (1)  DEFAULT '0'");
	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_user')." ADD `visittime` int(10)  DEFAULT '0'");
	$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_user')." set visittime=".$_SGLOBAL[timestamp]);
	$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_mc')." set decorative=REPLACE(decorative,'\"item1\":1','\"item1\":{\"105\":{\"status\":1,\"validtime\":1}}')");
	$_SGLOBAL['db']->query("UPDATE ".tname('qqfarm_mc')." set decorative=REPLACE(decorative,',\"item4\":1','')");

//up to qqfarm 4.2 Beta2///////////////////////////////////////////////////////
} else {

	#########################################
	# 步骤结束 #

	die('OK. 升级成功 QFarm 4.2 Beta2');

}

$nextStep = $step + 1;
$nextDest = $dest[$nextStep];

echo "<p>下一步: <a href='33to42B2.php?step=".$nextStep."'>".$nextDest."</a></p>"

?>