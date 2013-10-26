<?php

# QFarm Interface For PHPWind 7

# 发布: 小小宇  &  ︶ㄣ若ヤ海つ
# 链接: http://www.phpye.com
# 认证接口原始模型由 <紫雨农场 做做> 友情提供


defined('API_ROOT') || exit('Access denied');


///////////////////////////////常规函数映射////////////////////


//获取个人首页
function qf_getHomePage($uid = 0) {
	global $_QFG,$_QSC;
	return $_QSC['pa_url'] . "/u.php?uid=" . ($uid > 0 ? $uid : $_QFG['uid']);
}

//获取个人首页
function qf_getFeedurl($uid = 0) {
	global $_QFG;
	return 'hack.php?H_name=qqfarm';
}

//远程文件在不在
function remote_file_exists($url_file){
	$url_file = trim($url_file);
	if(empty($url_file))return false;
	$url_arr = parse_url($url_file);
	if(!is_array($url_arr) || empty($url_arr))return false;
	$host = $url_arr['host'];
	$path = $url_arr['path'] ;
	$port = isset($url_arr['port']) ? $url_arr['port'] : "80";
	$fp = fsockopen($host, $port, $err_no, $err_str, 30);
	if(!$fp)return false;
	$request_str = "GET ".$path." HTTP/1.1\r\n";
	$request_str .= "Host: ".$host."\r\n";
	$request_str .= "Connection: Close\r\n\r\n";
	fwrite($fp, $request_str);
	$first_header = fgets($fp, 1024);
	fclose($fp);
	if (trim($first_header) == "")return false;
	if (!preg_match("/200/", $first_header)){
		return false;
	}
	return true;
}

//获取头像地址
function qf_getheadPic($uid, $size = 'small') {
	global $_QFG,$_QSC;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	$db_ftpweb = $_QFG['db']->result("SELECT db_value FROM pap_tbpre_config WHERE db_name='db_ftpweb'");
	$db_ifftp = $_QFG['db']->result("SELECT db_value FROM pap_tbpre_config WHERE db_name='db_ifftp'");
	$face = $_QFG['db']->result("SELECT icon FROM pap_tbpre_members where uid='$uid'");
	$face = explode('|', $face);
	$faceFile = '';
	$face[1] = (int)$face[1];
	if(!$face[1]) {
		$faceFile = "/images/face/none.gif";
	}
	if($face[4]) {
		$faceFile = "/images/pig.gif";
	} elseif($face[1] == 3) {
		if($db_ifftp){
			$faceFile = $db_ftpweb."/upload/".$face[0];
			return $faceFile;
		} else {
			$faceFile = "/attachment/upload/middle/".$face[0];
			$face_m = "../../../attachment/upload/middle/".$face[0];
			$face_s = "../../../attachment/upload/".$face[0];
			if(!file_exists($face_m)) {
				$faceFile = "/attachment/upload/".$face[0];
				if(!file_exists($face_s)) {
					$faceFile = $db_ftpweb."/upload/".$face[0];
					return $faceFile;
				}
			}
		}

	} elseif ($face[1] == 2 && strncmp($face[0],'http',4) == 0) {
		return $face[0];//外部头像
	} elseif ($face[1] == 1) {
		$faceFile = "/images/face/".$face[0];
	}
	return $_QSC['pa_url'].$faceFile;
}

//获取好友列表
function qf_getFriends($uid = 0) {
	global $_QSC, $_QFG;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	$friends = array();
	$flist = $_QFG['db']->fetchAll("SELECT friendid FROM pap_tbpre_friends WHERE uid='{$uid}'");
	foreach($flist as $f) {
		$friends[] = $f['friendid'];
	}
	return implode(',', $friends);
}

//获取用户名
function qf_getUserName($uid = 0, $update = false) {
	global $_QSC, $_QFG;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	//先查询QFarm数据库
	if(!$update) {
		$member = $_QFG['db']->fetchOne("SELECT regname,username FROM app_qqfarm_user WHERE uid='$uid'");
		$uname = $member['username'] ? $member['username'] : $member['regname'];
	}
	//再查询宿主应用数据库
	if(!$uname) {
		$uname = $_QFG['db']->result("SELECT username FROM pap_tbpre_members where uid='$uid'");
		//$uname || exit('非法玩家');
		$checkUid = $_QFG['db']->result("SELECT uid FROM app_qqfarm_user where uid='$uid'");
		if($checkUid) {
			//更新用户资料
			$_QFG['db']->query("UPDATE app_qqfarm_user SET username='{$uname}',regname='{$uname}' where uid='$uid'");
		}
		else {
			//初始化新用户
			$_INIT = qf_getCache('_INIT');
			$_QFG['db']->query("INSERT INTO app_qqfarm_user(uid,username,regname,money,yb,pf) VALUES({$uid},'{$uname}','{$uname}',{$_INIT['money']},{$_INIT['yb']},0)");
		}
	}
	return addslashes($uname);
}

//宿主应用积分操作
function qf_userCredit($uid = 0, $credit = null) {
	global $_QFG,$_QSC;
	$uid = $uid > 0 ? $uid : $_QFG['uid'];
	if($credit === null) {//获取积分
		return (int)$_QFG['db']->result("SELECT {$_QSC['creditType']} FROM pap_tbpre_memberdata where uid={$uid}");
	}
	else {//修改积分
		return $_QFG['db']->query("UPDATE pap_tbpre_memberdata set {$_QSC['creditType']}={$_QSC['creditType']}{$credit} where uid={$uid}");
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
	list($title, $body) = qf_getFeed($type, $ownerId, '');
	//推送事件到PW
	if($title) {
		pwAddFeed($_QFG['uid'], 'farm', 100, $title.$body);
	}
}

//检查是否登录
function qf_checkauth() {
	global $_QSC, $_QFG;
	$cookiePre = $_QSC['cookie']['prefix'] ? $_QSC['cookie']['prefix'] : substr(md5($_QSC['authmask']),0,5);
	@list($uid, $pwd) = explode("\t", addslashes(qf_authcode($_COOKIE[$cookiePre.'_winduser'], 'DECODE')));
	//验证登陆状态
	if($uid > 0) {
		$pwcode = $_QFG['db']->result("SELECT password FROM pap_tbpre_members WHERE uid='$uid'");
		$pwcode = md5($pwcode.$_QSC['dbhash']);
		if($pwcode == $pwd) {
			$_QFG['uid'] = (int)$uid;
			$update = $_COOKIE['update_'.$_QFG['uid']] ? 1 : 0;
			$_QFG['uname'] = qf_getUserName($_QFG['uid'], $update);
			setcookie('update_'.$_QFG['uid'], 'true', time()+86400);
			return '';
		}
	}
	return '请先登录.';
}

/**
 * 字符串加密以及解密函数
 */
function qf_authcode($string, $action='ENCODE') {
	global $_QSC;
	$action != 'ENCODE' && $string = base64_decode($string);
	$code = '';
	$key  = substr(md5($_QSC['dbhash']),8,18);
	$keylen = strlen($key);
	$strlen = strlen($string);
	for($i = 0; $i < $strlen; $i++) {
		$k = $i % $keylen;
		$code .= $string[$i] ^ $key[$k];
	}
	return ($action!='DECODE' ? base64_encode($code) : $code);
}

/**
 * 针对SQL语句的变量进行反斜线过滤,并两边添加单引号
 */
function pwEscape($var, $strip = true, $is_array=false) {
	if (is_array($var)) {
		if (!$is_array) return " '' ";
		foreach ($var as $key => $value) {
			$var[$key] = trim(pwEscape($value,$strip));
		}
		return $var;
	} elseif (is_numeric($var)) {
		return " '".$var."' ";
	} else {
		return " '".addslashes($strip ? stripslashes($var) : $var)."' ";
	}
}

/**
 * 构造单记录数据更新SQL语句
 */
function pwSqlSingle($array, $strip=true) {
	$array = pwEscape($array, $strip,true);
	$str = '';
	foreach ($array as $key => $val) {
		$str .= ($str ? ', ' : ' ').$key.'='.$val;
	}
	return $str;
}

/**
 * 添加会员最新动作
 *
 * @param int $uid		动作会员UID
 * @param string $type	动作类型
 * @param mixed $log	动作描述
 */
function pwAddFeed($uid,$type,$typeid,$log) {
	global $_QSC, $_QFG;
	$isnewfeed = $_QFG['db']->result("SELECT descrip FROM pap_tbpre_feed WHERE descrip=\"$log\" and uid='$uid'");
	if($isnewfeed) {
		$_QFG['db']->query("UPDATE pap_tbpre_feed SET timestamp= {$_QFG['timestamp']} where descrip=\"$log\"  and uid='$uid'");
	}
	else {
		$_QFG['db']->query(
			"INSERT INTO pap_tbpre_feed SET " . 
			pwSqlSingle(array(
				'uid'		=> $uid,
				'type'		=> $type,
				'typeid'	=> (int)$typeid,
				'descrip'	=> $log,
				'timestamp'	=> $_QFG['timestamp']
			), false)
		);
	}
	return true;
}

?>