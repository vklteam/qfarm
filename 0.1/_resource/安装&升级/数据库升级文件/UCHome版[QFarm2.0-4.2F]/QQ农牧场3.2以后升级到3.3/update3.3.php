<?php
/* 
 * �뽫���ļ���ΪӢ����������������С�
 */
 
include_once("../common.php");
header("Content-Type:text/html; charset=gb2312");



//up to qqfarm 3.3///////////////////////////////////////////////////////

//�ж��Ƿ����username�ֶ�,�����������.
$query3 = $_SGLOBAL['db']->query("desc ".tname('qqfarm_nc'));
$nc_e = true;
while( $value3 = $_SGLOBAL['db']->fetch_array($query3) ){
	if( $value3[Field] == 'nc_e' ) {
		$nc_e = false;
	}
}
if($nc_e){
   $_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_nc')." ADD `nc_e` int(10) NOT NULL DEFAULT 0 ");	echo tname('qqfarm_nc')."���гɹ�����ֶ�nc_e<br>";
}

//�ж��Ƿ����levelup�ֶ�,�����������.
$query4 = $_SGLOBAL['db']->query("desc ".tname('qqfarm_nc'));
$flower = true;
while( $value4 = $_SGLOBAL['db']->fetch_array($query4) ){
	if( $value4[Field] == 'flower' ) {
		$flower = false;
	}
}
if($flower){
	$_SGLOBAL['db']->query("ALTER TABLE ".tname('qqfarm_nc')." ADD `flower` text");
	echo tname('qqfarm_nc')."���гɹ�����ֶ�flower<br>";
}


echo('ok �����ɹ� QFarm 3.3');

?>
