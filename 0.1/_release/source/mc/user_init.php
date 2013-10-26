<?php
//初始化新用户数据


//读取初始配置
qf_getCache('_INIT');

//初始动物参数
$status = array(
	array('buyTime'=>$_QFG['timestamp'],'cId'=>1002,'postTime'=>0,'totalCome'=>0,'tou'=>'','growtime'=>165601,'p'=>0),
	array('buyTime'=>$_QFG['timestamp'] , 'cId'=>1002,'postTime'=>0,'totalCome'=>0,'tou'=>'','growtime'=>36001,'p'=>0)
);
//新手任务
$taskid = 0;
//初始经验
$exp = $_INIT['mc_exp'];
//饲料
$feed = array('animalfood'=>20,"animalfeedtime"=>$_QFG['timestamp']);
//装饰
$decorative = array('item1'=>array('105'=>array('status'=>1,'validtime'=>1)),'item2'=>1,'item3'=>0);
//队列
$parade = array('i'=>'2010,我来领导...', 'p'=>0, 'v'=>1);

//写入数据库
$uid = $_QFG['db']->result("SELECT uid FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
if(!$uid) $_QFG['db']->query("INSERT INTO app_qqfarm_mc(uid,status,taskid,exp,feed,decorative,parade,badnum,zong) VALUES(" . $_QFG['uid'] . ",'" . qf_encode($status) . "','" . $taskid . "','" . $exp . "','" . qf_encode($feed) . "','" . qf_encode($decorative) . "','" . qf_encode($parade) . "',25,100)");
$_QFG['db']->query('UPDATE app_qqfarm_user set pf=1 where uid=' . $_QFG['uid']);
qf_addFeed('user_initmc');
$status = $taskid = $exp = $feed = $decorative = $parade = null;

?>