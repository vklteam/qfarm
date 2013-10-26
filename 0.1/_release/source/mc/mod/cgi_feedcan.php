<?php

# 喂养罐头
$uId = (int)$_REQUEST['uId'] ? (int)$_REQUEST['uId'] : $_QFG['uid'];
$serial = (int)$_REQUEST['serial']-1;
$tid = (int)$_REQUEST['tid'];
$list = $_QFG['db']->fetchOne("SELECT status,tools FROM app_qqfarm_mc where uid=" . $uId);
$tools = qf_decode($list['tools']);
$animal = qf_decode($list['status']);
$aid = $animal[$serial]['cId']; //动物ID
$s = (int)$animal[$serial]['s']; //动物的阶段
$p = (int)$animal[$serial]['p']; //动物处于生产期


#计算阶段的时间
$addtime = 0;
if($tools[$tid]<1) {
	die('{"errorContent":"你没有可用的罐头","errorType":"1001","serial":' .  $_REQUEST['serial'] . '}');
} 

$tools[$tid] = $tools[$tid] - 1;
if($tools[$tid]==0)  unset($tools[$tid]);
$cantime = $toolstype[$tid]['effect'];
if($tid<30){
	if($animal[$serial]['growtime'] < ($animaltime[$aid][1] + $animaltime[$aid][0])) {//第二阶段
		if($s==2) {die('{"errorContent":"该阶段已经喂养过了","errorType":"1001","serial":' .  $_REQUEST['serial'] . '}'); } //s为2则表示第二阶段已经喂养了两次
		$animal[$serial]['s'] = 2; //每个阶段可喂养1次
		if(($animaltime[$aid][1] + $animaltime[$aid][0] - $animal[$serial]['growtime']) < $cantime) {
			$addtime = $animaltime[$aid][1] + $animaltime[$aid][0] - $animal[$serial]['growtime'];
		} else {
			$addtime = $cantime;
		}
	}

	if($animal[$serial]['growtime']<$animaltime[$aid][0]) { //第一阶段
		if($s==1) { die('{"errorContent":"该阶段已经喂养过了","errorType":"1001","serial":' .  $_REQUEST['serial'] . '}'); } //s为1则表示第一阶段已经喂养了1次
		$animal[$serial]['s'] = 1; //每个阶段可喂养1次
		if($animaltime[$aid][0] - $animal[$serial]['growtime'] < $cantime) {
			$addtime = $animaltime[$aid][0] - $animal[$serial]['growtime'];
		} else {
			$addtime = $cantime;
		}
	} 

	if($p>0) {
		if($s==3) { die('{"errorContent":"该阶段已经喂养过了","errorType":"1001","serial":' .  $_REQUEST['serial'] . '}'); } //s为3则表示第三阶段已经喂养了1次
		$animal[$serial]['s'] = 3; //每个阶段可喂养1次
		if($animaltime[$aid][5] - $animal[$serial]['growtime'] < $cantime) {
			$addtime = $animaltime[$aid][5] - $animal[$serial]['growtime'];
		} else {
			$addtime = $cantime;
		}
	}

} else $addtime = $cantime;

$animal[$serial]['growtime'] += $addtime;

foreach($animal as $key => $value) {
	if($key == $serial) {
		$totalCome = $value['totalCome'];
		if($value['postTime'] == 0) {
			if($animaltime[$value['cId']][0] + $animaltime[$value['cId']][1] <= $value['growtime']) {
				$status = 3;
				$growTimeNext = 12993;
				$statusNext = 6;
			}
			if($animaltime[$value['cId']][0] <= $value['growtime'] && $value['growtime'] < $animaltime[$value['cId']][0] + $animaltime[$value['cId']][1]) {
				$status = 2;
				$growTimeNext = $animaltime[$value['cId']][0] + $animaltime[$value['cId']][1] - $value['growtime'];
				$statusNext = 3;
			}
			if($value['growtime'] < $animaltime[$value['cId']][0]) {
				$status = 1;
				$growTimeNext = $animaltime[$value['cId']][0] - $value['growtime'];
				$statusNext = 2;
			}
			if($animaltime[$value['cId']][5] < $value['growtime']) {
				$status = 6;
				$growTimeNext = 0;
				$statusNext = 6;
			}
		} else {
			$ptime = $value['growtime']-$value['p'];
			if($animaltime[$value['cId']][5] <= $value['growtime']) {
				$status = 6;
				$statusNext = 6;
				$growTimeNext = 0;
			}
			if($animaltime[$value['cId']][4] <= $ptime) {
				$status = 3;
				$statusNext = 6;
				$growTimeNext = 12993;
			}
			if($ptime <= $animaltime[$value['cId']][4]) {
				$status = 5;
				$statusNext = 3;
				$growTimeNext = $animaltime[$value['cId']][4] - $ptime;
			}
			if($ptime <= $animaltime[$value['cId']][3]) {
				$status = 4;
				$statusNext = 5;
				$growTimeNext = $animaltime[$value['cId']][3] - $ptime;
				$totalCome -= $animaltype[$value['cId']][output];
			}
			if($animaltime[$value['cId']][5] - $animaltime[$value['cId']][3] - $animaltime[$value['cId']][4] < $value['growtime']) {
				$status = 5;
				$statusNext = 6;
				$growTimeNext = $animaltime[$value['cId']][5] - $value['growtime'];
			}
		}
		echo '{"animal":{"buyTime":'.$value['buyTime'].',"cId":'.$value['cId'].',"canCnt":1,"growTime":'.$value['growtime'].',"growTimeNext":'.$growTimeNext.',"hungry":0,"serial":'.(int)$_REQUEST['serial'].',"status":'.$status.',"statusNext":'.$statusNext.',"totalCome":'.$totalCome.'},"increase":'.$addtime.',"ecode":0,"code":0}';
		//{"increase":3600,"animal":{"cId":1512,"status":5,"totalCome":0,"serial":17,"growTime":605298,"statusNext":3,"growTimeNext":42537,"hungry":0,"buyTime":1307957439,"canCnt":1},"ecode":0,"code":0}
		$animal[$key] = $value;//更新参数
	}
}
qf_addFeed('cgi_feedcan');
$_QFG['db']->query("UPDATE app_qqfarm_mc set status='" . qf_encode(array_values($animal)) . "',tools='" . qf_encode($tools) . "' where uid=" . $uId);

?>