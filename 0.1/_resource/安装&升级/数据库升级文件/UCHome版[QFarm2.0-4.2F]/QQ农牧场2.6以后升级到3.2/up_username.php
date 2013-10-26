<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('../common.php');



//更新用户名
$query = $_SGLOBAL['db']->query( "SELECT uid,name,username FROM ".tname( "space" )." order by uid asc" );
while ( $value = $_SGLOBAL['db']->fetch_array( $query ) ){
  $list[] = $value;
}


foreach ( $list as $value ){
$username = $value[name];

if ( empty( $value[name] )){ 
$username = $value[username];
}

$username = str_replace(array(",","\\\"","'","\\","\t","\r\n","\n","\r"),array('','','','|','','','',''),$username);
$_SGLOBAL['db']->query( "UPDATE ".tname( "qqfarm_config" )." set username='".$username."' where uid=".$value[uid] );
}


echo('<HTML>
<HEAD>

</HEAD>
<BODY>
用户加载成功！
</BODY>
</HTML>
');
exit();
?>
