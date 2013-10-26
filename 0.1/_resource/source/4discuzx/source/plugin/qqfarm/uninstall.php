<?php

# uninstall script
# create by seaif@zealv.com

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF

DROP TABLE IF EXISTS `pre_qqfarm_user`;
DROP TABLE IF EXISTS `pre_qqfarm_nc`;
DROP TABLE IF EXISTS `pre_qqfarm_nclogs`;
DROP TABLE IF EXISTS `pre_qqfarm_mc`;
DROP TABLE IF EXISTS `pre_qqfarm_mclogs`;
DROP TABLE IF EXISTS `pre_qqfarm_message`;
DROP TABLE IF EXISTS `pre_qqfarm_market`;

EOF;

runquery($sql);

$finish = TRUE;