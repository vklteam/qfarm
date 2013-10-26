<?PHP
/**
 * 更新牧场装饰
 * 末路の美 鑒別 日期:20100711
 */


$rep_mcit="http://appimg.qq.com/mc/";
$ymc_item_path="http://appimg.qq.com/mc/module/mc/farm/diy/";
$mc_item_path="module/mc/farm/diy";

if($sid){
	$it=array(
	remote_file_exists($ymc_item_path.'z1_'.$sid.'_1.swf')?$ymc_item_path.'z1_'.$sid.'_1.swf':'',
	remote_file_exists($ymc_item_path.'z1_'.$sid.'_1_shop.jpg')?$ymc_item_path.'z1_'.$sid.'_1_shop.jpg':''
	);
	qf_getView("admin/syncdata/mc_item");
}

if($see){
	if(!$only){
		foreach($it as $item){
			if(remote_file_exists($item)){
				get_file($item,$mc_item_path);
			}
		}
	}
	include_once("config/mc/itemtype.php");
	$itemtype[$sid]=array(
		"FBPrice"=>0,
		"YFBPrice"=>0,
		"exp"=>$_POST['iteme']?$_POST['iteme']:'0',
		"itemDesc"=>$_POST['item']?$_POST['item']:'装扮背景',
		"itemId"=>$sid,
		"itemName"=>$_POST['item']?$_POST['item']:'装扮背景',
		"itemType"=>101,
		"itemValidTime"=>15552000,
		"level"=>0,
		"price"=>$_POST['itemp']?$_POST['itemp']:'0'
	);
	cache_write('itemtype',$itemtype,"/mc/");
	die('1|&|获取成功!请更新缓存及删除浏览器记录.|&|refresh|&|1');
}

?>