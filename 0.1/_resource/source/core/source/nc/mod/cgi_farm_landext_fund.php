<?php

# 活动
$op = (int)$_REQUEST['op'] ;
$npc = $_QFG['db']->result("SELECT npc FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$npc = qf_decode($npc);

if($op==1){
	if((int)$npc['fund']<1){
		$npc['fund'] = 1 ;
		$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+200000,npc='" . qf_encode($npc) . "' where uid=" . $_QFG['uid']);
		echo '{"code":1,"money":200000}';
	}

} else {
	echo '{"code":1,"flag":'.(int)$npc['fund'].'}';
}


?>