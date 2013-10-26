<?php

//¿ªÍ¨ÓãÌÁ

$fish_open = $_QFG['db']->result("SELECT fish_open FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$fish_status = qf_decode($fish_status);


for($i == 6; $i < 6; $i++) {
	$fish_status[$i] = array("f"=>0,"fid"=>0,"i"=>(int)$i,"l"=>0,"o"=>0,"p"=>0,"s"=>array());
}

$fish_open = 1;

$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_open='" . $fish_open . "',fish_status='" . qf_encode(array_values($fish_status)) . "' where uid=" . $_QFG['uid']);

echo '{"code":1}';

?>
