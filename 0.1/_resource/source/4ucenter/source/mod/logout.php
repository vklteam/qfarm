<?php

#用户退出

qf_setcookie('auth', '', -86400);

//生成同步退出的JS
$ucsynlogout = uc_user_synlogout();
echo '本地退出成功功<br><a href="./">继续</a>';
echo $ucsynlogout;

?>