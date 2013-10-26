<?php
//初始化新用户数据

//读取初始配置
qf_getCache('_INIT');

//默认提示消息
$Tips = array(
	'water_b' => '谢谢帮忙，你真是个好人！',
	'weed_b' => '谢谢你，杂草清除干净了！',
	'pest_b' => '谢谢你，害虫清除干净了！',
	'weed_a' => '缺德啊！竟然做这种坏事！',
	'pest_a' => '可恶啊！你真不是个好人！'
);
//初始农田参数
$status=array(
	array('a'=>2,'b'=>6,'c'=>0,'d'=>0,'e'=>1,'f'=>0,'g'=>0,'h'=>1,'i'=>100,'j'=>0,'k'=>16,'l'=>9,'m'=>16,'n'=>array(),'o'=>0,'p'=>array(),'q'=>($_QFG['timestamp'] - 36030),'r'=>1251351720,'bitma'=>0,'pId'=>0),
	array('a'=>2,'b'=>1,'c'=>0,'d'=>0,'e'=>1,'f'=>1,'g'=>0,'h'=>1,'i'=>100,'j'=>0,'k'=>0,'l'=>0,'m'=>0,'n'=>array(),'o'=>0,'p'=>array(),'q'=>($_QFG['timestamp'] - 14400),'r'=>1251351725,'bitma'=>0,'pId'=>0),
	array('a'=>2,'b'=>1,'c'=>0,'d'=>0,'e'=>1,'f'=>0,'g'=>0,'h'=>0,'i'=>100,'j'=>0,'k'=>0,'l'=>0,'m'=>0,'n'=>array(),'o'=>0,'p'=>array(),'q'=>($_QFG['timestamp'] - 14400),'r'=>1251351725,'bitma'=>0,'pId'=>0),
	array('a'=>2,'b'=>1,'c'=>0,'d'=>0,'e'=>1,'f'=>0,'g'=>2,'h'=>1,'i'=>100,'j'=>0,'k'=>0,'l'=>0,'m'=>0,'n'=>array(),'o'=>0,'p'=>array(),'q'=>($_QFG['timestamp'] - 25200),'r'=>1251351725,'bitma'=>0,'pId'=>0),
	array('a'=>0,'b'=>0,'c'=>0,'d'=>0,'e'=>1,'f'=>0,'g'=>0,'h'=>1,'i'=>100,'j'=>0,'k'=>0,'l'=>0,'m'=>0,'n'=>array(),'o'=>0,'p'=>array(),'q'=>0,'r'=>1251351725,'bitma'=>0,'pId'=>0),
	array('a'=>0,'b'=>0,'c'=>0,'d'=>0,'e'=>1,'f'=>0,'g'=>0,'h'=>1,'i'=>100,'j'=>0,'k'=>0,'l'=>0,'m'=>0,'n'=>array(),'o'=>0,'p'=>array(),'q'=>0,'r'=>1251351725,'bitma'=>0,'pId'=>0)
);
//初始经验
$exp = $_INIT['nc_exp'];
//初始装饰
$decorative = array(
	'1'=>array('1'=>array('status'=>1,'validtime'=>1)),
	'2'=>array('2'=>array('status'=>1,'validtime'=>1)),
	'3'=>array('3'=>array('status'=>1,'validtime'=>1)),
	'4'=>array('4'=>array('status'=>1,'validtime'=>1))
);
//健康模式参数
$healthmode = array('beginTime'=>0,'canClose'=>1,'date'=>'1970-01-01|1970-01-07','endTime'=>0,'serverTime'=>$_QFG['timestamp'],'set'=>0,'time'=>'08|00','valid'=>0);
//参数入库
$uid = $_QFG['db']->result("SELECT uid FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
if(!$uid) $_QFG['db']->query("INSERT INTO app_qqfarm_nc(uid,tips,status,exp,decorative,healthmode,zong) VALUES({$_QFG['uid']},'" . qf_encode($Tips) . "','" . qf_encode($status) . "',{$exp},'" . qf_encode($decorative) . "','" . qf_encode($healthmode) . "',150)");
//Feed推送
qf_addFeed('user_init');

$Tips = $status = $exp = $decorative = $healthmode = null;

?>