<?php

#用户登录

if(empty($_POST['submit'])) {
	qf_getView('login');
} else {
	//远程验证
	include_once('uc_client/client.php');
	if(UC_DBCHARSET == 'gbk') {
		$_POST['username'] = iconv('UTF-8','GB2312//IGNORE', $_POST['username']);
	}
	list($uid, $uname, $password, $email) = uc_user_login($_POST['username'], $_POST['password']);
	if(UC_DBCHARSET == 'gbk') {
		$uname = iconv('GB2312','UTF-8', $uname);
	}
	//本地验证
	if($uid > 0) {
		$member = $_UFG['db']->fetchOne("SELECT uid,password FROM app_qqfarm_user WHERE uid='$uid'");
		//激活用户
		if(!$member['uid']) {
			if(!@include('core/data/_init.php')) {
				@include('core/config/_init.php');
			}
			$password = md5($password);
			$_UFG['db']->query("INSERT INTO app_qqfarm_user(uid,username,regname,money,yb,pf) VALUES({$uid},'{$uname}','{$uname}',{$_INIT['money']},{$_INIT['yb']},0)");
			$member['uid'] = $uid;
			$member['password'] = $password;
		}
		//设置 Cookie
		qf_setcookie('auth', uc_authcode("{$member['password']}\t{$member['uid']}", 'ENCODE'));
		//生成同步登录的JS
		$ucsynlogin = uc_user_synlogin($member['uid']);
		echo '本地登录成功<br><a href="./">继续</a>';
		echo $ucsynlogin;
		exit;
	} elseif($uid == -1) {
		echo '用户不存在,或者被删除';
	} elseif($uid == -2) {
		echo '密码错';
	} else {
		echo '未定义';
	}
}
