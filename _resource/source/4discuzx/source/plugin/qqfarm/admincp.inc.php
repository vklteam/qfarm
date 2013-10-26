<?php
	
#农场牧场插件入口

defined('IN_DISCUZ') || exit('Access Denied');

if(!$_G['uid']) {
	showmessage('not_loggedin', NULL, array(), array('login' => 1));
}

header('location:source/plugin/qqfarm/core/admin.php?mod=home');


?>