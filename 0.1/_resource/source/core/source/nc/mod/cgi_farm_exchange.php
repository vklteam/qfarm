<?php
//消费,卖出

$uId = (int)$_REQUEST['uIdx'];
$values = $_QFG['db']->fetchAll('SELECT * FROM app_qqfarm_nclogs WHERE uid = ' . $uId . ' and type in(6,7,8,11,12) ORDER BY time DESC limit 0,50');

foreach($values as $value) {
	if($value['type'] == 7) {
		$msg = '"在商店里购买了' . $value['count'] . '颗' .
		$cropstype[$value['cropid']]['cName'] . '种子,共付出'.$value['money'].'金币。"';
	} elseif($value['type'] == 8) {
		if($value['cropid'] > 9000) {
			$msg = '"在商店里购买了' . $value['count'] . '个' . $toolstype[$value['cropid']]['tName'] . ',共付出'.$value['money'].'元宝。"';
		} else {
			$msg = '"在商店里购买了' . $value['count'] . '件' . $itemtype[$value['cropid']]['itemName'] . ',共付出'.$value['money'].'元宝。"';
		}
	} elseif($value['type'] == 11) {
			$msg = '"在商店里购买了' . $value['count'] . '件' . $itemtype[$value['cropid']]['itemName']. ',共付出'.$value['money'].'金币。"';
	} elseif($value['type'] == 6) {
		$msg = '"卖出了仓库里已收获的' .
		$value['count'] . '个' . $cropstype[$value['cropid']]['cName'] . '。"';
	} elseif($value['type'] == 12) {
			$msg = '"在商店里购买了' . $value['count'] . '个' . $toolstype[$value['cropid']]['tName'] . ',共付出'.$value['money'].'金币。"';
	}
	if($cost) {
		$cost .= ',{"msg":' . $msg . ',"time":' . $value['time'] . '}';
	} else {
		$cost = '{"msg":' . $msg . ',"time":' . $value['time'] . '}';
	}
}
echo '{"code":1,"cost":['.$cost.']}';

?>