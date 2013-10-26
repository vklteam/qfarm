<?php

# install script
# create by seaif@zealv.com

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'sql.txt');

runquery($sql);

$finish = TRUE;

?>