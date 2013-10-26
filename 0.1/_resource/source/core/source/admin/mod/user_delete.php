<?php

$id = intval($_GET['id']);
if($id < 1) {
	die('1|&|参数错误. ');
}

$_QFG['db']->query("DELETE FROM app_qqfarm_user WHERE uid=" . $id);
$_QFG['db']->query("DELETE FROM app_qqfarm_nc WHERE uid=" . $id);
$_QFG['db']->query("DELETE FROM app_qqfarm_mc WHERE uid=" . $id);
$_QFG['db']->query("DELETE FROM app_qqfarm_mclogs WHERE uid=" . $id);
$_QFG['db']->query("DELETE FROM app_qqfarm_nclogs WHERE uid=" . $id);

die('1|&|删除UID为' . $id . '的用户的农牧场成功.|&|refresh|&|1');

?>