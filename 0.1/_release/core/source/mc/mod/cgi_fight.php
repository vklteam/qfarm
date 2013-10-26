<?php

# 抓老鼠

$uId = (int)$_REQUEST['uId'];

$enemy = $_QFG['db']->result("SELECT enemy FROM app_qqfarm_mc where uid=" . $uId);
if($enemy==0){
	die('{"errorContent":"没老鼠，回去再刷刷！","errorType":"1011"}');
}

$list = $_QFG['db']->fetchOne("SELECT repertory,package FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
$mc_package = qf_decode($list['package']);
$mc_repertory = qf_decode($list['repertory']);

//为防止金币失衡，必须合理回收金币
if( $uId == $_QFG['uid'] ){
	//随机抢取金币
	$money =mt_rand(50,100);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set enemy=0 where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money . " where uid=" . $uId);
	//返回信息
	die('{"cId":1001,"code":1,"money":' . $money . ',"tip":"杯具啊！被抓到啦！送您<font color=\"#FF6600\"> <b>' . $money . '</b> </font>金币，拜拜喽！"}');
}elseif( mt_rand(1,100) < 33) {
	//随机抢取金币
	$money =mt_rand(50,100);
	$money1 =mt_rand(5,30);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set enemy=0 where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money1 . " where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money . " where uid=" . $_QFG['uid']);
	//返回信息
	die('{"code":1,"money":' . $money . ',"tip":"杯具啊！被抓到啦！送您<font color=\"#FF6600\"> 
<b>' . $money . '</b> </font>金币，主人<font color=\"#FF6600\"> <b>' . $money1 . '</b> </font>金币！"}');
} else {
	$cId = 1001;//鸡蛋
	$cIdn =mt_rand(1,3);
	//入包
	$mc_package[$cId] += $cIdn;
	//更新成果
	$flag = false;
	//已存在的增加数量
	foreach((array)$mc_repertory as $k => $v) {
		if($cId == $v['cId']) {
			$mc_repertory[$k]['scrounge'] += $cIdn;
			$flag = true;
		}
	}
	//不存在则创建对象
	if(!$flag) {
		$mc_repertory[] = array("cId" => $cId, "harvest" => 0, "scrounge" => $cIdn);
	}
	//随机被偷金币
	$money =mt_rand(30,100);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+" . $money . " where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money-" . $money . " where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set enemy=0 where uid=" . $uId);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set repertory='" . qf_encode($mc_repertory) . "',package='" . qf_encode($mc_package) . "' where uid=" . $_QFG['uid']);
	//返回信息
	echo '{"cId":1001,"code":0,"money":-'.$money.',"tip":"哈哈！没抓到！成功偷走主人<font color=\"#009900\"> <b>'.$cIdn.'</b> </font>个鸡蛋，抢走您<font color=\"#FF6600\"> <b>'.$money.'</b> </font>金币，拜拜喽！"}';
}

?>