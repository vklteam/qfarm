<?php

# 清空日志

$query = $_QFG['db']->query("DELETE FROM app_qqfarm_mclogs where uid = " . $_QFG['uid']);
echo '{"code":1}';
?>
