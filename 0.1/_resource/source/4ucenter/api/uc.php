<?php

# QFarm UC API for Discuz!X 
# Create by seaif@zealv.com


////////////////////////////////////////////////
//全局参数

define('UC_CLIENT_VERSION', '1.5.1');	//UCenter 版本标识
define('UC_CLIENT_RELEASE', '20100501');

define('API_TEST', 1);	//通信检测 开关

define('API_SYNLOGIN', 1);	//同步登录 开关
define('API_SYNLOGOUT', 1);	//同步登出 开关
define('API_RENAMEUSER', 1);	//用户名修改 开关
define('API_UPDATEPW', 1);	//更改用户密码 开关
define('API_DELETEUSER', 1);	//用户删除 开关

define('API_UPDATECLIENT', 1);	//更新客户端缓存 开关
define('API_UPDATEBADWORDS', 1);	//更新关键字列表 开关
define('API_UPDATEAPPS', 1);	//更新应用列表 开关
define('API_UPDATEHOSTS', 1);	//更新HOST文件 开关

define('API_UPDATECREDITSETTINGS', 1);	//更新应用积分设置 开关
define('API_GETCREDITSETTINGS', 1);	//向 UC 提供积分设置 开关
define('API_UPDATECREDIT', 1);	//更新用户积分 开关
define('API_GETCREDIT', 1);	//向 UC 提供积分 开关

define('API_GETTAG', 1);	//获取标签 API 接口开关
define('API_ADDFEED', 1);	//向 UCHome 添加feed 开关

define('API_RETURN_SUCCEED', '1');
define('API_RETURN_FAILED', '-1');
define('API_RETURN_FORBIDDEN', '-2');


////////////////////////////////////////////////
//调用入口

include('../core/common.php');
defined('PAP_ROOT') || exit(API_RETURN_FAILED);

//获取参数
$get = $post = array();
$code = @$_GET['code'];
parse_str(qf_authcode($code, 'DECODE', UC_KEY), $get);
if($get = qf_addslashes($get, 0)) {
	if(time() - $get['time'] > 3600) {
		exit('Authracation has expiried');
	}
	include_once PAP_ROOT . '/uc_client/lib/xml.class.php';
	$post = xml_unserialize(file_get_contents('php://input'));
}
else {
	exit('Invalid Request');
}

//执行操作
$get_action = $get['action'];
if(in_array($get_action , array('test', 'deleteuser', 'renameuser', 'gettag', 'synlogin', 'synlogout', 'updatepw', 'updatebadwords', 'updatehosts', 'updateapps', 'updateclient', 'updatecredit', 'getcredit', 'getcreditsettings', 'updatecreditsettings', 'addfeed'))) {
	eval('$API_ACTION = API_'.strtoupper($get_action ) . ';');
	if($API_ACTION) {
		$uc_note = new uc_note();
		exit($uc_note->$get_action($get, $post));
	}
	exit(API_RETURN_FORBIDDEN);
} else {
	exit(API_RETURN_FAILED);
}

////////////////////////////////////////////////
//操作集合类

class uc_note {

	var $tablepre = '';
	var $db = '';

	function uc_note() {
		global $_UFG;
		$this->db = $_UFG['db'];
	}

	#通信检测
	function test($get, $post) {
		return API_RETURN_SUCCEED;
	}

	#同步登陆
	function synlogin($get, $post) {
		$uid = intval($get['uid']);
		$password = $this->db->result($this->db->query("SELECT password FROM app_qqfarm_user WHERE uid='$uid'"), 0);
		if(is_string($password)) {
			header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
			qf_setcookie('auth', qf_authcode("$password\t$uid", 'ENCODE'), 31536000);
		}
	}

	#同步退出
	function synlogout($get, $post) {
		header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
		qf_setcookie('auth', '', 31536000);
	}

	#用户重命名
	function renameuser($get, $post) {
		$uid = $get['uid'];
		$usernamenew = $get['newusername'];
		$this->db->query("UPDATE app_qqfarm_user SET regname='$usernamenew' WHERE uid='$uid'");
		return API_RETURN_SUCCEED;
	}

	#更新用户密码
	function updatepw($get, $post) {
		$regname = $get['username'];
		$newpw = md5(time().rand(100000, 999999));
		$this->db->query("UPDATE app_qqfarm_user SET password='$newpw' WHERE regname='$regname'");
		return API_RETURN_SUCCEED;
	}

	#用户删除(保留)
	function deleteuser($get, $post) {
		return API_RETURN_SUCCEED;
	}

	#更新客户端设置
	function updateclient($get, $post) {
		$cachefile = PAP_ROOT . '/uc_client/data/cache/settings.php';
		$c = '$_CACHE[\'settings\'] = '.var_export($post, TRUE).';';
		file_put_contents($cachefile, "<?php\r\n{$c}\r\n?>");
		return API_RETURN_SUCCEED;
	}

	#更新词语过滤列表(保留)
	function updatebadwords($get, $post) {
		return API_RETURN_SUCCEED;
	}

	#更新应用列表
	function updateapps($get, $post) {
		if($post['UC_API']) {
			$config = trim(file_get_contents(FARM_ROOT.'/config/api/ucenter.php'));
			$config = preg_replace("/define\('UC_API',\s*'.*?'\);/i", "define('UC_API', '{$post['UC_API']}');", $config);
			file_put_contents(FARM_ROOT.'/config/api/ucenter.php', $config);
		}
		unset($post['UC_API']);
		$cachefile = PAP_ROOT . '/uc_client/data/cache/apps.php';
		$c = '$_CACHE[\'apps\'] = '.var_export($post, TRUE).';';
		file_put_contents($cachefile, "<?php\r\n{$c}\r\n?>");
		return API_RETURN_SUCCEED;
	}

	#更新域名解析列表
	function updatehosts($get, $post) {
		$cachefile = PAP_ROOT . '/uc_client/data/cache/hosts.php';
		$c = '$_CACHE[\'hosts\'] = '.var_export($post, TRUE).';';
		file_put_contents($cachefile, "<?php\r\n{$c}\r\n?>");
		return API_RETURN_SUCCEED;
	}

	#更新积分设置
	function updatecreditsettings($get, $post) {
		$outextcredits = array();
		foreach($get['credit'] as $appid => $credititems) {
			if($appid == UC_APPID) {
				foreach($credititems as $value) {
					$outextcredits[$value['appiddesc'].'|'.$value['creditdesc']] = array(
						'creditsrc' => $value['creditsrc'],
						'title' => $value['title'],
						'unit' => $value['unit'],
						'ratio' => $value['ratio']
					);
				}
			}
		}
		$cachefile = PAP_ROOT . '/uc_client/data/cache/creditsettings.php';
		$c = '$_CACHE[\'creditsettings\'] = '.var_export($outextcredits, TRUE).';';
		file_put_contents($cachefile, "<?php\r\n{$c}\r\n?>");
		return API_RETURN_SUCCEED;
	}

	#获取积分设置(保留)
	function getcreditsettings($get, $post) {
		$credits = array();
		return xml_serialize($credits);
	}

	#获取积分
	function getcredit($get, $post) {
		$uid = intval($get['uid']);
		$credit = $this->db->result($this->db->query("SELECT money FROM app_qqfarm_user WHERE uid='$uid'"), 0);
		return $credit;
	}

	#更新积分(保留)
	function updatecredit($get, $post) {
		$uid = intval($get['uid']);
		$amount = $get['amount'];
		return API_RETURN_SUCCEED;
	}

	#获取标签(保留)
	function gettag($get, $post) {
		return xml_unserialize('', 1);
	}

	#添加事件(保留)
	function addfeed($get, $post) {
		return API_RETURN_SUCCEED;
	}

}

?>