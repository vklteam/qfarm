<?php

# 用户拿水晶
$id = (int)$_REQUEST['id'];
$ownerId = (int)$_REQUEST['ownerId'];
$index = (int)$_REQUEST['index'];

$crystal = $_QFG['db']->result("SELECT crystal FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$crystal = qf_decode($crystal);
$beasts = $_QFG['db']->result("SELECT beasts FROM app_qqfarm_user where uid=" . $ownerId);
$beasts = qf_decode($beasts);

foreach($beasts['drop'] as $key => $value) {
	if($id == $value['id']){
		$crystal[$id] += 1;
		unset($beasts['drop'][$key]);
	} //else die('{"code":0,"direction":"您下手慢了，已经被别人捡走了。","ecode":-30315,"poptype":3}');
}

$beasts['drop'] = array_values($beasts['drop']);
$_QFG['db']->query("UPDATE app_qqfarm_user set crystal='" . qf_encode($crystal) . "' where uid=" . $_QFG['uid']);
$_QFG['db']->query("UPDATE app_qqfarm_user set beasts='" . qf_encode($beasts) . "' where uid=" . $ownerId);

echo '{"code":1,"ecode":0}';

?>