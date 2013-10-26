<?php
/**
 * QQFarm自动获取更新
 * 末路の美 鑒別 日期:20100812
 */

defined('FARM_SET') || die('Forbidden');

//子目录
define('SYNC_ROOT', 'source/admin/mod/syncdata/');

$tx_xml=array(
	'tx_nc'=>'http://farm.qzone.qq.com/cgi-bin/cgi_farm_ini_run_v2?v='.$_QFG['timestamp'].'',
	'tx_mc'=>'http://appimg.qq.com/mc/data/mcini_qzone_v_11.xml?v='.$_QFG['timestamp'].'',
	'tx_mc1'=>'http://mc.qzone.qq.com/animalConfig.xml?v='.$_QFG['timestamp'].''
);

//备份文件
if($back = $_GET['back']) {
	if(rename($back, $back.'.bak')) {
		die('1|&|备份成功.|&|refresh|&|1');
	}else{
		die('0|&|备份失败!|&|refresh|&|1');
	}
}

include(SYNC_ROOT . 'inc_common.php');

//下载远程单一文件
if($updown = $_GET['updown']) {
	if(remote_file_exists($updown)) {
		get_file($updown, ($_GET['path'] ? dirname($_GET['path']) : ''));
		if((int)$_GET['dot']) {
			die('1|&|获取成功!您需要手动设置xml文件|&|refresh|&|1');
		} else {
			die('1|&|获取成功!|&|refresh|&|1');
		}
	} else {
		die('1|&|获取失败!远程文件丢失|&|refresh|&|1');
	}
}

if($_GET['xmlid']==1){
	$doc=new DOMDocument();
	$doc->load($tx_xml['tx_nc']);
	$doc->save('data/nc/cgi_farm_ini_run.xml');
	die('1|&|获取成功!|&|refresh|&|1');
}elseif($_GET['xmlid']==2){
	$doc=new DOMDocument();
	$doc->load($tx_xml['tx_mc']);
	$doc->save('data/mc/cgi_pasture_ini_run.xml');
	$doc->load($tx_xml['tx_mc1']);
	$doc->save('data/mc/animalConfig.xml');
	die('1|&|获取成功!|&|refresh|&|1');
}
$yn_xml = file_exists("data/nc/cgi_farm_ini_run.xml")?"data/nc/cgi_farm_ini_run.xml":"";
$ym_xml = file_exists("data/mc/cgi_pasture_ini_run.xml")?"data/mc/cgi_pasture_ini_run.xml":"";
$ym_xml1= file_exists("data/mc/animalConfig.xml")?"data/mc/animalConfig.xml":"";

if(filesize($yn_xml)>50 && filesize($ym_xml)>50){
	$doc=new DOMDocument();
	$doc->load($yn_xml);
	$ye_ncswf=basename($doc->getElementsByTagName('module')->item(0)->getAttribute('url'));
	$doc->load($ym_xml);
	$ye_mcswf=basename($doc->getElementsByTagName('module')->item(0)->getAttribute('url'));  
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$nID = getItemID($yn_xml,'crop');
$mID = getItemID($ym_xml1,'animal');

if(in_array($_GET['sync'], array('mc_animal','mc_item','nc_crop','nc_item','swf'))) {
	$sid = (int)$_GET['sid'];
	$see = (int)$_GET['see'];
	$only = (int)$_POST['only'];
	//nc_crop
	$n_xml = end(glob("module/ui/ui_ini_v_*.xml", GLOB_MARK));
	$replace_ncword = "/http\:\/\/appimg(.)?\.qq\.com\/happyfarm\//s";
	$p_ncswf = "http://www.phpye.com/source/plugin/qqfarm/core/module/ui/$ye_ncswf";
	//mc_animal
	$m_xml = end(glob("module/mc/mc_ini_v_*.xml", GLOB_MARK));
	$m_xml1 = "module/mc/animalConfig.xml";
	$ym_fun = "http://mc.qzone.qq.com/cgi-bin/cgi_get_animals";
	$replace_mcword = "/http\:\/\/appimg(.)?\.qq\.com\/([mc]+?|[happyfarm]+?)\//s";
	$p_mcswf = "http://www.phpye.com/source/plugin/qqfarm/core/module/mc/$ye_mcswf";
	//load model
	include(SYNC_ROOT . "{$_GET['sync']}.php");
} else {
	qf_getView("admin/syncdata");
}

?>