<?php

# interface script
# create by seaif@zealv.com

!function_exists('readover') && exit('Forbidden');
$wind_in = 'qqfarm';
$groupid == 'guest' && Showmsg('not_login');

$qf_charset = $charset == 'gbk' ? 'gbk' : 'utf-8';

$qf_root = 'hack/qqfarm';

define('FARM_ROOT', str_replace('\\', '/', dirname(__file__)));
if(!@include(FARM_ROOT . '/core/data/_qsc.php')) {
	@include(FARM_ROOT . '/core/config/_qsc.php');
}

require_once PrintHack("qqfarm.{$qf_charset}");footer();

?>