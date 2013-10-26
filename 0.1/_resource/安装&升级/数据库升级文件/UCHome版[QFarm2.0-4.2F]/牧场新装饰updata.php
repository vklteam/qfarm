<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('../common.php');

$query = $_SGLOBAL['db']->query( "SELECT Status,uid FROM ".tname( "happyfarm_mc" )."  ");
while ( $value = $_SGLOBAL['db']->fetch_array( $query ) )
{


//更新牧场房子
$animal=$value['Status'];
$key1 = '/animalfeedtime.*animal/';
$key2 = 'animalfeedtime":"1263825252","item1":1,"item2":3,"item3":3,"item4":1,"animal';

$animal= preg_replace($key1,$key2,$animal);

$_SGLOBAL['db']->query("UPDATE ".tname('happyfarm_mc')." set Status='".$animal."'  where uid=".$value['uid']);
}


echo('<HTML>
<HEAD>

</HEAD>
<BODY>
升级成功！

</BODY>
</HTML>
');
exit();
?>
