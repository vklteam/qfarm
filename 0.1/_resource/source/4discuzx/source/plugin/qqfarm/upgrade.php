<?php

# 升级脚本 

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$qqfarm_mc = DB::table('qqfarm_mc');

$sql = <<<EOF

ALTER TABLE {$qqfarm_mc} add column `research` text";

EOF;

runquery($sql);

$finish = TRUE;

?>