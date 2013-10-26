<?php

# 拍照上传
require '../../../class/class_core.php';
$discuz = & discuz_core::instance();
$discuz->cachelist = $cachelist;
$discuz->init();
header("Content-Type:text/html; charset=utf-8");
if(!$_G['uid']) {
	showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$_SC['attachdir'] = $_G['setting']['attachdir'];
//定义快照保存相册
$FARM_ALBUMNAME = '农场牧场';

//加载UCH图片处理函数
//include_once ('../../../function/function_image.php');

$get_file = sreadfile('php://input');
$filepath = getfilepath('jpg', true);
$new_name = $_SC['attachdir'] . 'album/' . $filepath;

#=====================================================================

if(swritefile($new_name, $get_file)) {
	$tmp_imagesize = @getimagesize($new_name);
	list($tmp_width, $tmp_height, $tmp_type) = (array)$tmp_imagesize;
	$tmp_size = $tmp_width * $tmp_height;
	if($tmp_size > 16777216 || $tmp_size < 4 || empty($tmp_type) || strpos($tmp_imagesize['mime'], 'flash') > 0) {
		@unlink($new_name);
		echo '{"error":"对不起，保存失败，文件无法保存","errno":"-900"}';
		exit;
	}
	#生成缩略图
	//$thumbpath = @makethumb($new_name);
	$thumb = empty($thumbpath) ? 0 : 1;
	#获取相册
	$albumid = getalbums($_G['uid'], $FARM_ALBUMNAME);
	if(!(intval($albumid) > 0)) {
		#新建相册
		$setarr = array();
		$setarr['albumname'] = $FARM_ALBUMNAME;
		$setarr['uid'] = $_G['uid'];
		$setarr['username'] = $_G['username'];
		$setarr['dateline'] = $setarr['updatetime'] = $_G['timestamp'];
		$setarr['friend'] = 0;
		$setarr['password'] = "";
		$setarr['target_ids'] = "";
		$setarr['picnum'] = 1;
		$setarr['pic'] = $filepath;
		$setarr['picflag'] = 1;
		$albumid = DB::insert('home_album', $setarr, 1);
	} else {
		$albumtop = $filepath;
		DB::query("UPDATE " . DB::table('home_album') . " set picnum=picnum+1,pic='{$albumtop}' where albumid={$albumid}");
	}
	#保存到相册
	$picarr['albumid'] = $albumid;
	$picarr['uid'] = $_G['uid'];
	$picarr['dateline'] = $_G['timestamp'];
	$picarr['postip'] = $_SERVER['REMOTE_ADDR'];
	$picarr['filename'] = $_GET['picname'];
	$picarr['title'] = $_GET['desc'];
	$picarr['type'] = "image/pjpeg";
	$picarr['size'] = $tmp_size;
	$picarr['filepath'] = $filepath;
	$picarr['thumb'] = $thumb;
	$picarr['username'] = $_G['username'];
	$picid = DB::insert('home_pic', $picarr, 1);
	echo '{"url":"../../../../home.php?mod=space&uid='.$_G['uid'].'&do=album&picid='.$picid.'", "albumid":"'.$albumid.'", "lloc":"M9ovAADVC0KTpe8xDSNj767GjkUUFRYAAA!!"}';
	exit;
} else {
	echo '"error":"对不起，保存失败，文件无法保存","errno":"-900"';
	exit;
}

#=====================================================================

//获取上传文件路径
function getfilepath($fileext, $mkdir = false) {
	global $_G, $_SC;
	$filepath = $_G['uid'].'_'.$_G['timestamp'] . random(4) .'.'. $fileext;
	$name1 = gmdate('Ym');
	$name2 = gmdate('j');
	if($mkdir) {
		$newfilename = $_SC['attachdir'] . 'album/' . $name1;
		if(!is_dir($newfilename)) {
			if(!@mkdir($newfilename)) {
				return $filepath;
			}
		}
		$newfilename .= '/' . $name2;
		if(!is_dir($newfilename)) {
			if(!@mkdir($newfilename)) {
				return $name1 . '/' . $filepath;
			}
		}
	}
	return $name1 . '/' . $name2 . '/' . $filepath;
}

//获取相册ID
function getalbums($uid, $albumname) {
	global $_G;
	$albumid = DB::result_first("SELECT albumid FROM " . DB::table('home_album') . " WHERE uid='$_G[uid]' AND albumname='$albumname' ");
	return $albumid;
}
//获取文件内容
function sreadfile($filename) {
	$content = '';
	if(function_exists('file_get_contents')) {
		@$content = file_get_contents($filename);
	} else {
		if(@$fp = fopen($filename, 'r')) {
			@$content = fread($fp, filesize($filename));
			@fclose($fp);
		}
	}
	return $content;
}
//写入文件
function swritefile($filename, $writetext, $openmod='w') {
	if(@$fp = fopen($filename, $openmod)) {
		flock($fp, 2);
		fwrite($fp, $writetext);
		fclose($fp);
		return true;
	} else {
		runlog('error', "File: $filename write error.");
		return false;
	}
}
?>