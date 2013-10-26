<?php

define('PAP_ROOT', str_replace('/core', '', FARM_ROOT));

@include_once(PAP_ROOT .'/config.php');

if(!$_QSC['db']) {
	$_QSC['db'] = $_USC['db'];
	qf_putCache('_QSC', $_QSC);//更新缓存
}

?>