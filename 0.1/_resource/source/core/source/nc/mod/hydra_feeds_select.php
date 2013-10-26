<?php
# 用户状态

//type:1偷东西,2帮忙,3放虫，4狗咬，5放草，6出售 7消费 8Y币购买工具 9牛


$uId = (int)$_REQUEST['uin'];

$log = array();
$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_nclogs WHERE uid = {$uId} and type not in(6,7,8,11,12) ORDER BY time DESC limit 0,50");
foreach($values as $value) {
	$username = qf_getUserName($value['fromid']);
	if($value['type'] == 1) {
		$counts_ = explode(';', $value['counts']);
		$counts_all = "";
		foreach($counts_ as $value_) {
			$counts_t = explode(':', $value_);
			$counts_all .= $counts_t[1] . "个" . $cropstype[$counts_t[0]]['cName'] . "、";
		}
		if($counts_all != "") {
			$counts_all = substr($counts_all, 0, -3);
		}
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来农场偷窃，偷走' . $counts_all. '。"';
	}
	elseif($value['type'] == 2) {
		$counts_all = "";
		$counts_ = explode(':', $value['counts']);
		if($counts_[0] > 0) {
			$counts_all .= "除草" . $counts_[0] . "次、";
		}
		if($counts_[1] > 0) {
			$counts_all .= "杀虫" . $counts_[1] . "次、";
		}
		if($counts_[2] > 0) {
			$counts_all .= "浇水" . $counts_[2] . "次、";
		}
		if($counts_all != "") {
			$counts_all = substr($counts_all, 0, -3);
		}
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来农场帮忙' . $counts_all . '！"';
	}
	elseif($value['type'] == 3) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来农场放虫，作物“生病”了！"';
	}
	elseif($value['type'] == 4) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来农场偷东西被<font color=\"#FF0000\"><b>狗狗</b></font>抓住，逃跑时遗落了<font color=\"#FF0000\"><b>' . $value['count'] . '</b></font>个金币。"';
	}
	elseif($value['type'] == 5) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来农场放草，作物“生病”了！"';
	}
	elseif($value['type'] == 9) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 的野牛在你家吃了1个'.$cropstype[$value['cropid']]['cName'].'。"';
	}
	elseif($value['type'] == 13) {
		$msg = '"成功领取农场VIP LV'.$value['cropid'].'每日礼包。"';
		if($value['money']==2) 	$msg = '"成功领取农场VIP LV'.$value['cropid'].'、年费VIP每日礼包。"';
	}
	$log[] = '{"cn":' . $msg . ',"domain":1,"t":' . $value['time'] . ',"opuin":'.$value['fromid'].', "triples": []}';
}
$log = '[' . implode(',', $log) . ']';

echo '{"ecode": 0,"data":'.$log.'}';

?>