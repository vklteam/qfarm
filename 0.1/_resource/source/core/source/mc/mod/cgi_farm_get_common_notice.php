<?php

# 牧场公告
//消费提示
$isread = $_QFG['db']->result('SELECT COUNT(*) FROM app_qqfarm_mclogs WHERE uid = ' . $_QFG['uid'] . ' and isread = 0');
$a = $isread ? 'true' : 'false';

$mc_notice = $_NOTICE['mc'];
echo '{"code":1,"content":"' . str_replace('"', '\"', $mc_notice) . '","time":' . $_QFG['timestamp'] . ',"id":' . $_QFG['timestamp'] . ',"flags":"0000000000000000000000000000000000000001000000000000000000000000","have_new_feeds":'.$a.',"have_new_msg":false,"have_new_sysmsg":false,"have_new_warnmsg":false}';

?>