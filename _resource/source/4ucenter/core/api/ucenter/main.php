<?php

# QFarm Interface For UCenter 1.5.1

# 发布: 小小宇  &  ︶ㄣ若ヤ海つ
# 版本: QFarm 4.1 Build 2010/04/09 14:00


defined('API_ROOT') || exit('Access denied');


///////////////////////////////常规函数映射////////////////////

//获取个人首页
function qf_getHomePage($uid = 0) {
	global $_QFG;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	return "./index.php?uid=" . $uid;
}

//获取个人首页
function qf_getFeedurl($uid = 0) {
	global $_QFG;
	return 'qqfarm.php';
}

//获取头像地址
function qf_getheadPic($uid = 0, $size = 'small') {
	global $_QFG, $_QSC;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	if($_QSC['avatarStatic']) {
		$uid = sprintf("%09d", $uid);
		$type = $_QSC['avatarReal'] ? '_real' : '';
		$subdir = substr($uid, 0, 3).'/'.substr($uid, 3, 2).'/'.substr($uid, 5, 2).'/';
		$avatar = '/data/avatar/'.$subdir.substr($uid, -2).$type.'_avatar_'.$size.'.jpg';
	} else {
		$type = $_QSC['avatarReal'] ? '&type=real' : '';
		$avatar = '/avatar.php?uid='.$uid.'&size='.$size.$type;
	}
	return UC_API.$avatar;
}

//获取好友列表
function qf_getFriends($uid = 0) {
	global $_QFG;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	$friends = array();
	include_once(PAP_ROOT . '/uc_client/client.php');
	$fnum = uc_friend_totalnum($uid);
	$flist = uc_friend_ls($uid, 1, 999, $fnum);
	foreach($flist as $f) {
		$friends[] = $f['friendid'];
	}
	return implode(',', $friends);
}

//获取用户实名
function qf_getUserName($uid = 0) {
	global $_QFG;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	$member = $_QFG['db']->fetchOne("SELECT regname,username FROM app_qqfarm_user WHERE uid='$uid'");
	$uname = $member['username'] ? $member['username'] : $member['regname'];
	return addslashes($uname);
}

//宿主应用用户积分操作(
function qf_userCredit($uid = 0, $credit = null) {
	global $_QFG;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	if($credit === null) {//获取积分
		return 0;
	}
	else {//修改积分
		return true;
	}
}

//获取QFarm金币和元宝数量
function qf_getMoney($uid = 0) {
	global $_QFG;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	$value = $_QFG['db']->fetchOne("select yb,money FROM app_qqfarm_user where uid='$uid'");
	return array((int)$value['money'], (int)$value['yb']);
}


///////////////////////////////系统函数映射////////////////////

//事件推送
function qf_addFeed($type) {
	global $_QFG;
	include_once('source/feed.func.php');
	$ownerId = intval($_REQUEST['ownerId']);
	list($title, $body) = qf_getFeed($type, $ownerId);
	//推送事件到UC
	if($title) {
		include_once(PAP_ROOT . '/uc_client/client.php');
		uc_feed_add('farm', $_QFG['uid'], $_QFG['uname'], $title, null, null, null, $body);
	}
}

//检查是否登录
function qf_checkauth() {
	global $_QSC, $_QFG;
	if($auth = $_COOKIE[$_QSC['cookie']['prefix'].'auth']) {
		@list($pwd, $uid) = explode("\t", qf_authcode($auth, 'DECODE'));
		if($uid > 0) {
			$member = $_QFG['db']->fetchOne("SELECT username,regname,password FROM app_qqfarm_user WHERE uid='$uid'");
			if($member['password'] == $pwd) {
				$_QFG['uid'] = (int)$uid;
				$_QFG['uname'] = $member['username'] ? $member['username'] : $member['regname'];
				return '';//已登陆
			}
		}
	}
	return '请先登录.';//未登录
}


/**
 * 字符串加密以及解密函数
 *
 * @param string $string     原文或者密文
 * @param string $operation  操作(ENCODE | DECODE), 默认为 DECODE
 * @param string $key        密钥
 * @param int $expiry        密文有效期, 加密时候有效， 单位 秒，0 为永久有效
 * @return string            处理后的 原文或者 经过 base64_encode 处理后的密文
 *
 * @example
 *
 *  $a = authcode('abc', 'ENCODE', 'key');
 *  $b = authcode($a, 'DECODE', 'key');  // $b(abc)
 *
 *  $a = authcode('abc', 'ENCODE', 'key', 3600);
 *  $b = authcode('abc', 'DECODE', 'key'); // 在一个小时内，$b(abc)，否则 $b 为空
 */
function qf_authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {
	$ckey_length = 4; //随机密钥长度 取值 0-32;
	//加入随机密钥，可以令密文无任何规律，即便是原文和密钥完全相同，加密结果也会每次不同，增大破解难度。
	//取值越大，密文变动规律越大，密文变化 = 16 的 $ckey_length 次方
	//当此值为 0 时，则不产生随机密钥
	$key = md5($key ? $key : UC_KEY);
	$keya = md5(substr($key, 0, 16));
	$keyb = md5(substr($key, 16, 16));
	$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length) : substr(md5(microtime()), -$ckey_length)) : '';
	$cryptkey = $keya . md5($keya . $keyc);
	$key_length = strlen($cryptkey);
	$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0) . substr(md5($string . $keyb), 0, 16) . $string;
	$string_length = strlen($string);
	$result = '';
	$box = range(0, 255);
	$rndkey = array();
	for($i = 0; $i <= 255; $i++) {
		$rndkey[$i] = ord($cryptkey[$i % $key_length]);
	}
	for($j = $i = 0; $i < 256; $i++) {
		$j = ($j + $box[$i] + $rndkey[$i]) % 256;
		$tmp = $box[$i];
		$box[$i] = $box[$j];
		$box[$j] = $tmp;
	}
	for($a = $j = $i = 0; $i < $string_length; $i++) {
		$a = ($a + 1) % 256;
		$j = ($j + $box[$a]) % 256;
		$tmp = $box[$a];
		$box[$a] = $box[$j];
		$box[$j] = $tmp;
		$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
	}
	if($operation == 'DECODE') {
		if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26) . $keyb), 0, 16)) {
			return substr($result, 26);
		} else {
			return '';
		}
	} else {
		return $keyc . str_replace('=', '', base64_encode($result));
	}
}

?>