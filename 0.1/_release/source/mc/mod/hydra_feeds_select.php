<?php

# 牧场操作日志
# 1偷；2帮产；3背包加草；4自己买草；5帮好友买草；6放蚊；7拍蚊；8清理便便；9出售；10购买, 13猎人。


$uId = (int)$_REQUEST['uin'];
if(!$uId) $uId = (int)$_REQUEST['uIdx'];
$mclog = array();
$values = $_QFG['db']->fetchAll('SELECT * FROM app_qqfarm_mclogs WHERE uid=' . $uId . ' and type not in(4,9,10,11,12) ORDER BY time DESC limit 0,50');
foreach($values as $value) {
	$username = qf_getUserName($value['fromid']);
	if($value['type'] == 1) {
		$scrids = array();
		$scrids = explode(',', $value['iid']);
		$scrcots = array();
		$scrcots = explode(',', $value['count']);
		$scrougestr = '';
		for($i = 0; $i < count($scrids); $i++) {
			$scrougestr = $scrougestr . $scrcots[$i] . $animaltype[$scrids[$i]]['bName'];
			if($i + 1 < count($scrids)) {
				$scrougestr = $scrougestr . '，';
			} else {
				$scrougestr = $scrougestr . '。';
			}
		}
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来牧场偷走了' . $scrougestr . '"';
	} elseif($value['type'] == 2) {
		$helpids = array();
		$helpids = explode(',', $value['iid']);
		$helpcots = array();
		$helpcots = explode(',', $value['count']);
		$helpstr = '';
		for($i = 0; $i < count($helpids); $i++) {
			$helpstr = $helpstr . $helpcots[$i] . $animaltype[$helpids[$i]]['cName'] . '赶去生产' ;
			if($i + 1 < count($helpids)) {
				$helpstr = $helpstr . '，';
			} else {
				$helpstr = $helpstr . '。';
			}
		}
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 帮忙把' . $helpstr . '"';
	} elseif($value['type'] == 3) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来牧场从自己包裹里的' . $value['count'] . '棵草料添加到饲料机内。"';
	} elseif($value['type'] == 5) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来牧场帮忙共花了' . $value['money'] . '金币购买' . $value['count'] . '棵草料放入饲料机内"';
	} elseif($value['type'] == 6) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来牧场放了' . $value['count'] . '只蚊子，真不是好人！"';
	} elseif($value['type'] == 7) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来牧场帮忙拍了' . $value['count'] . '只蚊子！"';
	} elseif($value['type'] == 8) {
		$msg = '"<font color=\"#009900\"><b>' . $username . '</b></font> 来牧场帮忙清扫了' . $value['count'] . '个便便！"';
	} elseif($value['type'] == 13) {
		$msg = '"<font color=\"#009900\"><b>'.$username.'</b></font> 来牧场抓取动物产物被<font color=\"#FF0000\"><b>看守员</b></font>发现，他为主人没收<font color=\"#FF0000\"><b>'.$value['money'].'</b></font>个金币。"';
	} elseif($value['type'] == 14) {
		$msg = '"成功领取农场VIP LV'.$value['iid'].'每日礼包。"';
		if($value['money']==2) 	$msg = '"成功领取农场VIP LV'.$value['iid'].'、年费VIP每日礼包。"';
	}
	$mclog[] = '{"cn":' . $msg . ',"domain":1,"t":' . $value['time'] . ',"opuin":'.$value['fromid'].', "triples": []}';

}
$mclog = '[' . implode(',', $mclog) . ']';


//标记已读
$_QFG['db']->query('UPDATE app_qqfarm_mclogs set isread=1 where uid=' . $_QFG['uid']);

//输出信息
echo '{"ecode": 0,"data":'.$mclog.'}';


?>