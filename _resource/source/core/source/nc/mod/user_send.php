<?php

# 送花

//to:好友ID, w:赠言,uIdx:主人ID,fId:花ID,farmTime:赠送时间

$fId = (int)$_REQUEST['fId']; //所赠花的id
$toId = (int)$_REQUEST['to'];
$uIdx = (int)$_REQUEST['uIdx'];
//扣减自己仓库中的鲜花~_~
$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = qf_decode($fruit);
if($uIdx == $toId) die('{"code":0,"direction":"鲜花不能自己送给自己，还是请送给好友！"}');

$need_number = $allflower[$fId]['need'][0]['amount']; //花数目
$need_flower = $allflower[$fId]['need'][0]['cId']; //花类型
if($fruit[$need_flower]<$need_number) die('{"code":0,"direction":"你包里的鲜花数不够！"}');

$fruit[$need_flower] -= $need_number;
if($allflower[$fId]['need'][1]) {
	$need_number1 = $allflower[$fId]['need']['1']['amount']; //花数目
	$need_flower1 = $allflower[$fId]['need']['1']['cId']; //花类型
	$fruit[$need_flower1] -= $need_number1;
}
$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit = '" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);

//把花束放入对方花篮^_^
$flower = $_QFG['db']->result("SELECT flower FROM app_qqfarm_nc where uid=" . $toId);
$flower = qf_decode($flower);
$flower[] = array("time"=>$_REQUEST['farmTime'],"fId"=>$fId,"fromId"=>$_QFG['uid'],"friendName"=>qf_getUserName($uIdx),"word"=>$_REQUEST['w']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set flower = '" . qf_encode($flower) . "', nc_e=13 where uid=" . $toId);

echo '{"code":1,"direction":"花束已经按照您的要求包装好，跟卡片一起寄出去了~ 我想收到的人一定会非常的开心哦！"}';

?>