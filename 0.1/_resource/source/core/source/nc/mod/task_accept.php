<?php

# 新手任务提示

$taskid = $_QFG['db']->result("SELECT taskid FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
echo '{"taskId":' . $taskid . '}';

?>
