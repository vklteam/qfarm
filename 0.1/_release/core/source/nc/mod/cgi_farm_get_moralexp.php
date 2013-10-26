<?php

# 用户放牛信息
$beasts = $_QFG['db']->result('SELECT beasts FROM app_qqfarm_user where uid=' . $_QFG['uid']);
$beasts = qf_decode($beasts);

echo '{"ecode":0,"moralexp":'.(int)$beasts['moralexp'].'}';

?>