<?php
//升级提示

$mylevel = $_QFG['db']->result("SELECT exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$mylevel = qf_toLevel($mylevel);

exit('{"code":1,"direction":"<font color=\"#0099FF\"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;成功级第'. $mylevel. '级，继续努力！</font>"}');

?>