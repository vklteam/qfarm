<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include_once('../common.php');



//�����û���
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
�û����سɹ���
</BODY>
</HTML>
');
exit();
?>
