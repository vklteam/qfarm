<?php

# 万圣节活动
$ownerId = (int)$_REQUEST['ownerId'];
$op = (int)$_REQUEST['op'];

$beasts = $_QFG['db']->result("SELECT beasts FROM app_qqfarm_user where uid=" . $ownerId);
$beasts = qf_decode($beasts);
 
$beast_drop = '';
$drop = 0;
foreach($beasts['drop'] as $key => $value) {
	if($value['id'] > 1000) $drop++;
}
if($drop < 3 && $op == 0){
	$mt_rand = mt_rand(1,3);
	if($mt_rand==1) $dropid1 = 1593;
	if($mt_rand==2) $dropid1 = 1086;
	if($mt_rand==3) $dropid1 = 1085;
	$droparray1 = array("id"=>$dropid1,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>12);
	if($droparray1) $beasts['drop'][] = $droparray1;
	$beast_drop = '{"id":'.$dropid1.',"type":12,"num":1,"time":'.$_QFG['timestamp'].'}';
}
$beasts['drop'] = array_values($beasts['drop']);
$_QFG['db']->query("UPDATE app_qqfarm_user set beasts='" . qf_encode($beasts) . "' where uid=" . $ownerId);

echo '{"drop":'.$beast_drop.',"ecode":0,"code":1}';


?>