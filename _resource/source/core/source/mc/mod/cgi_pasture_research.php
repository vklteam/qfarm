<?php

# 科研

$action = (int)$_REQUEST['action'];
$aid = (int)$_REQUEST['aid'];
$target = (int)$_REQUEST['target'];
$index = (int)$_REQUEST['index'];


$aidini = array(
	"1100" =>array(16899,8),
	"1101" =>array(18800,16),
	"1102" =>array(27000,24),
	"1170" =>array(28000,24),
	"1171" =>array(29000,24),
	"1172" =>array(31000,24),
	"1103" =>array(42000,32),
	"1104" =>array(44900,48),
	"1605" =>array(17900,8),  
	"1607" =>array(19900,16),  
	"1606" =>array(38000,24),  
	"1672" =>array(38100,24),  
	"1673" =>array(38900,24),  
	"1604" =>array(42900,32),  
	"1602" =>array(45000,48)
);

$list = $_QFG['db']->fetchOne('SELECT goods,tools,research,decorative FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
$goods = qf_decode($list['goods']);
$decorative = qf_decode($list['decorative']);
$research = qf_decode($list['research']);
$money = $probability = 0;

if($target){//栅
	$tid = 'shed';
} else $tid = 'den';//窝

if($action){//收成
	foreach($research[$tid] as $key => $value) {
		if($value['endtime'] < $_QFG['timestamp']){
			$cnt = mt_rand(1, 2);
			$goods[$value['animalid']] += $cnt;
			$animals[] = array("id"=>$value['animalid'],"num"=>$cnt); 
			$research[$tid][$key] = array("animalid"=>0,"endtime"=>0,"index"=>$key,"type"=>$target);
			$research[$tid] = array_values($research[$tid]);
		}
	}

	echo '{"researchext":'.qf_encode($research).',"aid":0,"ecode":0,"flag":1,"animals":'.qf_encode($animals).'}';

} else {
	$money = $aidini[$aid]['0'];
	$endtime = $_QFG['timestamp'] + $aidini[$aid]['1'] * 3600;
	$research[$tid][$index] = array("animalid"=>$aid,"endtime"=>$endtime,"index"=>$index,"type"=>$target);
	$research[$tid] = array_values($research[$tid]);
	echo '{"endtime":'.$endtime.',"aid":'.$aid.',"ecode":0}';
}

$_QFG['db']->query("UPDATE app_qqfarm_user set money=money-$money where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_mc set goods='" . qf_encode($goods) . "',research='" . qf_encode($research) . "' where uid=" . $_QFG['uid']);

?>