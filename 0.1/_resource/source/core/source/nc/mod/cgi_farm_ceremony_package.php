<?php

# 活动
$type = (int)$_REQUEST['type'];


$vip = $_QFG['db']->result("SELECT vip FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$package = $_QFG['db']->result("SELECT package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fruit = $_QFG['db']->result("SELECT fruit FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fish_package = $_QFG['db']->result("SELECT fish_package FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$decorative = $_QFG['db']->result('SELECT decorative FROM app_qqfarm_nc where uid=' . $_QFG['uid']);

$npc = qf_decode($npc);
$vip = qf_decode($vip);
$package = qf_decode($package);
$fruit = qf_decode($fruit);
$decorative_nc = qf_decode($decorative);

$fish_package = qf_decode($fish_package);


$money = 0 ;
if($type == 1){

	if($fruit['450'] < 199) die('{"code":0,"ecode":0,"direction":"你的材料不够！"}');
	$package['447'] += 1;
	$money = 2999;
	$fruit['450'] -= 199;

} elseif($type == 2){

	if(date('Ymd', $_QFG['timestamp']) == date('Ymd', (int)$npc['daytimes'])) die('{"code":0,"ecode":0,"direction":"你今天以领取过了！"}');
	if($fruit['450'] < 99) die('{"code":0,"ecode":0,"direction":"你的材料不够！"}');
	$npc['daytimes'] = $_QFG['timestamp'];
	$package['584'] += 1;
	$money = 1500;
	$fruit['450'] -= 99;

} elseif($type == 3){

	if((int)$npc['bpck'] ==1 ) die('{"code":0,"ecode":0,"direction":"你以领取过了！"}');
	if($fruit['450'] < 1999) die('{"code":0,"ecode":0,"direction":"你的材料不够！"}');
	$money = 99999;
	$package['448'] += 5;
	$fish_package['15'] += 2;
	$fruit['450'] -= 1999;
	$npc['bpck'] = 1;
	foreach((array)$decorative_nc as $item_type => $value) {
		foreach((array)$value as $key1 => $value1) {
			if($key1 == 377) {
				$buyed = 1;
				$decorative_nc[1][377]['validtime'] += 16070400;
			}
		}
	}
	if(!$buyed) {
		$decorative_nc[1][377]['status'] = 0;
		$decorative_nc[1][377]['validtime'] = $_QFG['timestamp'] + 16070400;
	}

	foreach((array)$decorative_nc as $item_type => $value) {
		foreach((array)$value as $key1 => $value1) {
			if($key1 == 378) {
				$buyed = 1;
				$decorative_nc[2][378]['validtime'] += 16070400;
			}
		}
	}
	if(!$buyed) {
		$decorative_nc[2][378]['status'] = 0;
		$decorative_nc[2][378]['validtime'] = $_QFG['timestamp'] + 16070400;
	}

	foreach((array)$decorative_nc as $item_type => $value) {
		foreach((array)$value as $key1 => $value1) {
			if($key1 == 379) {
				$buyed = 1;
				$decorative_nc[3][379]['validtime'] += 16070400;
			}
		}
	}
	if(!$buyed) {
		$decorative_nc[3][379]['status'] = 0;
		$decorative_nc[3][379]['validtime'] = $_QFG['timestamp'] + 16070400;
	}

	foreach((array)$decorative_nc as $item_type => $value) {
		foreach((array)$value as $key1 => $value1) {
			if($key1 == 380) {
				$buyed = 1;
				$decorative_nc[4][380]['validtime'] += 16070400;
			}
		}
	}
	if(!$buyed) {
		$decorative_nc[4][380]['status'] = 0;
		$decorative_nc[4][380]['validtime'] = $_QFG['timestamp'] + 16070400;
	}

	foreach((array)$decorative_nc as $item_type => $value) {
		foreach((array)$value as $key1 => $value1) {
			if($key1 == 381) {
				$buyed = 1;
				$decorative_nc[1][381]['validtime'] += 16070400;
			}
		}
	}
	if(!$buyed) {
		$decorative_nc[1][381]['status'] = 0;
		$decorative_nc[1][381]['validtime'] = $_QFG['timestamp'] + 16070400;
	}

	foreach((array)$decorative_nc as $item_type => $value) {
		foreach((array)$value as $key1 => $value1) {
			if($key1 == 382) {
				$buyed = 1;
				$decorative_nc[2][382]['validtime'] += 16070400;
			}
		}
	}
	if(!$buyed) {
		$decorative_nc[2][382]['status'] = 0;
		$decorative_nc[2][382]['validtime'] = $_QFG['timestamp'] + 16070400;
	}

	foreach((array)$decorative_nc as $item_type => $value) {
		foreach((array)$value as $key1 => $value1) {
			if($key1 == 383) {
				$buyed = 1;
				$decorative_nc[3][383]['validtime'] += 16070400;
			}
		}
	}
	if(!$buyed) {
		$decorative_nc[3][383]['status'] = 0;
		$decorative_nc[3][383]['validtime'] = $_QFG['timestamp'] + 16070400;
	}

	foreach((array)$decorative_nc as $item_type => $value) {
		foreach((array)$value as $key1 => $value1) {
			if($key1 == 384) {
				$buyed = 1;
				$decorative_nc[4][384]['validtime'] += 16070400;
			}
		}
	}
	if(!$buyed) {
		$decorative_nc[4][384]['status'] = 0;
		$decorative_nc[4][384]['validtime'] = $_QFG['timestamp'] + 16070400;
	}
}




$_QFG['db']->query("UPDATE app_qqfarm_user set npc='" . qf_encode($npc) . "',money=money+" . $money . " where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='" . qf_encode($decorative_nc) . "',package='" . qf_encode($package) . "',fish_package='" . qf_encode($fish_package) . "',fruit='" . qf_encode($fruit) . "' where uid=" . $_QFG['uid']);

echo '{"code":1,"ecode":0,"type":'.$type.'}';

?>