<?php

# 新手任务1

$taskid = $_QFG['db']->result('SELECT taskid FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
echo '{"taskFlag":1,"taskId":' . $taskid . '}';

?>
