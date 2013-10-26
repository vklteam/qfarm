<?PHP
/**
 * 更新农场装饰
 * 末路の美 鑒別 日期:20100711
 */


$rep_ncit="http://appimg.qq.com/happyfarm/";
$ync_item_path="http://appimg.qq.com/happyfarm/module/ui/farm/diy/";
$nc_item_path="module/ui/farm/diy";

if($sid){
	$i=$sid;
	if($i>948){
			while($i<$sid+4) {
			$it[]=remote_file_exists($ync_item_path.$i.'.jpg')?$ync_item_path.$i.'.jpg':'';
			$it[]=remote_file_exists($ync_item_path.$i.'a.jpg')?$ync_item_path.$i.'a.jpg':'';
			$it[]=remote_file_exists($ync_item_path.$i.'.swf')?$ync_item_path.$i.'.swf':'';
			$i++;
		}
	} else {
		while($i<$sid+4) {
			$it[]=remote_file_exists($ync_item_path.$i.'.jpg')?$ync_item_path.$i.'.jpg':'';
			$it[]=remote_file_exists($ync_item_path.$i.'b.jpg')?$ync_item_path.$i.'b.jpg':'';
			$it[]=remote_file_exists($ync_item_path.$i.'.swf')?$ync_item_path.$i.'.swf':'';
			$i++;
		}
	}
	qf_getView("admin/syncdata/nc_item");
}

if($see){
	if(!$only){
		foreach($it as $k=>$ncitem){
			if(remote_file_exists($ncitem)){
				get_file($ncitem,$nc_item_path);
			}
		}
	}
	include_once("config/nc/itemtype.php");
	$itemtype[$sid] = array(
		"FBPrice"=>0,
		"YFBPrice"=>0,
		"exp"=>$_POST['item1e']?$_POST['item1e']:'0',
		"itemDesc"=>$_POST['item1']?$_POST['item1']:'装扮背景',
		"itemId"=>$sid,
		"itemName"=>$_POST['item1']?$_POST['item1'].'套装':'装扮背景套装',
		"itemType"=>1,
		"itemValidTime"=>16070400,
		"level"=>0,
		"price"=>$_POST['item1p']?$_POST['item1p']:'0'
	);
	$itemtype[$sid+1] = array(
		"FBPrice"=>0,
		"YFBPrice"=>0,
		"exp"=>$_POST['item2e']?$_POST['item2e']:'0',
		"itemDesc"=>$_POST['item2']?$_POST['item2']:'装扮小屋',
		"itemId"=>$sid+1,
		"itemName"=>$_POST['item2']?$_POST['item2'].'套装':'装扮背景套装',
		"itemType"=>2,
		"itemValidTime"=>16070400,
		"level"=>0,
		"price"=>$_POST['item2p']?$_POST['item2p']:'0'
	);
	$itemtype[$sid+2] = array(
		"FBPrice"=>0,
		"YFBPrice"=>0,
		"exp"=>$_POST['item3e']?$_POST['item3e']:'0',
		"itemDesc"=>$_POST['item3']?$_POST['item3']:'装扮栅栏',
		"itemId"=>$sid+2,
		"itemName"=>$_POST['item3']?$_POST['item3'].'套装':'装扮背景套装',
		"itemType"=>3,
		"itemValidTime"=>16070400,
		"level"=>0,
		"price"=>$_POST['item3p']?$_POST['item3p']:'0'
	);
	$itemtype[$sid+3] = array(
		"FBPrice"=>0,
		"YFBPrice"=>0,
		"exp"=>$_POST['item4e']?$_POST['item4e']:'0',
		"itemDesc"=>$_POST['item4']?$_POST['item4']:'装扮狗窝',
		"itemId"=>$sid+3,
		"itemName"=>$_POST['item4']?$_POST['item4'].'套装':'装扮背景套装',
		"itemType"=>4,
		"itemValidTime"=>16070400,
		"level"=>0,
		"price"=>$_POST['item4p']?$_POST['item4p']:'0'
	);
	cache_write('itemtype',$itemtype,"/nc/");
	die('1|&|获取成功!请更新缓存及删除浏览器记录.|&|refresh');
}


?>