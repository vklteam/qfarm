<?php

# 公共函数库
# create by seaif@zealv.com


/**
 * 模板调用
 */
function qf_getView($name) {
	global $_UFG, $_USC;
	if(!$_UFG['TPL']) {
		include_once('source/template.class.php');
		$_UFG['TPL'] = STemplate::getInstance($_USC['view']);
	}
	$tplId = $_USC['view']['tplId'];
	if(strpos($name, ':') > 0) {
		list($tplId ,$name) = explode(':', $name);
	}
	$_UFG['TPL']->tplId = $tplId;
	$_UFG['TPL']->show($name);
}

/**
 * Cookie操作
 */
function qf_setcookie($var, $value = '', $life = 0, $prefix = 1, $httponly = false) {
	global $_QSC, $_UFG;
	$coo = $_QSC['cookie'];
	$var = $prefix ? $coo['prefix'].$var : $var;
	unset($_COOKIE[$var]);
	if($value == '' || $life < 0) {
		$value = '';
		$life = -1;
	}
	$life = $life > 0 ? $_UFG['timestamp']+$life : ($life < 0 ? $_UFG['timestamp']-31536000 : 0);
	$secure = $_SERVER['SERVER_PORT'] == 443 ? 1 : 0;
	if(PHP_VERSION < '5.2.0') {
		$coo['path'] .= $httponly ? '; HttpOnly' : '';
		setcookie($var, $value, $life, $coo['path'], $coo['domain'], $secure);
	} else {
		setcookie($var, $value, $life, $coo['path'], $coo['domain'], $secure, $httponly);
	}
}

/**
 * 检查是否登录
 */
function qf_checkauth() {
	global $_QSC, $_UFG;
	if($auth = $_COOKIE[$_QSC['cookie']['prefix'].'auth']) {
		@list($pwd, $uid) = explode("\t", qf_authcode($auth, 'DECODE'));
		if($uid > 0) {
			$member = $_UFG['db']->fetchOne("SELECT username,regname,password FROM app_qqfarm_user WHERE uid='$uid'");
			if($member['password'] == $pwd) {
				$_UFG['uid'] = (int)$uid;
				$_UFG['uname'] = $member['username'] ? $member['username'] : $member['regname'];
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

/**
 * 基础函数: addslashes()
 * 功能描述: 添加字符串或数组转义
 */
function qf_addslashes($value) {
	if(is_array($value)) {
		foreach($value as $k => $v) {
			$value[$k] = qf_addslashes($v);
		}
		return $value;
	}
	return addslashes($value);
}

/**
 * 基础函数: stripslashes()
 * 功能描述: 取消字符串或数组转义
 */
function qf_stripslashes($value) {
	if(is_array($value)) {
		foreach($value as $k => $v) {
			$value[$k] = qf_stripslashes($v);
		}
		return $value;
	}
	return stripslashes($value);
}

?>