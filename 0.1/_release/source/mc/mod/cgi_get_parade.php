<?php

# 读取队行

$parade = $_QFG['db']->result("SELECT parade FROM app_qqfarm_mc where uid=" . $_QFG['uid']);
echo qf_jsonCode(qf_decode($parade));

?>