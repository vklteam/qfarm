<?php

# 升级脚本 

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF

ALTER TABLE `cdb_qqfarm_mc` add column `research` text";

EOF;

runquery($sql);

$finish = TRUE;

?>