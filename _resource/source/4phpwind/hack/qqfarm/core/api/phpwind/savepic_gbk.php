<?php
include_once('../../../../global.php');
header("Content-Type:text/html; charset=utf-8");

if(!$winduid) {
	die('{"error":"����δ��½���½�ѹ���,��ˢ�º����ԡ�","errno":"-900"}');
}

//����ͼƬ������
require_once(R_P.'require/imgfunc.php');

//������ձ������
$FARM_ALBUMNAME = 'ũ������';
$FARM_ALBUMNAME  = $db_charset == "utf-8" ? $FARM_ALBUMNAME : iconv("UTF-8", $db_charset, $FARM_ALBUMNAME);

$get_file=sreadfile('php://input');
$filepath = getfilepath('jpg', true);
$new_name = 'attachment/'.$filepath;
if(!$desc) $desc = $picname;

#====================================================================

if(swritefile(R_P.$new_name, $get_file)) {
	$tmp_imagesize = @getimagesize(R_P.$new_name);
	list($tmp_width, $tmp_height, $tmp_type) = (array)$tmp_imagesize;
	$tmp_size = $tmp_width * $tmp_height;
	if($tmp_size > 16777216 || $tmp_size < 4 || empty($tmp_type) || strpos($tmp_imagesize['mime'], 'flash') > 0) {
		@unlink(S_ROOT . $new_name);
		echo '{"error":"�Բ��𣬱���ʧ�ܣ��ļ��޷�����","errno":"-900"}';
		exit;
	}
	#��������ͼ
	modeImageThumb(R_P.$new_name,R_P.$new_name,700,540);
	$albumid = getalbums($winduid);
	if(!(intval($albumid)>0)){
		#�½����
		$db->update("INSERT INTO pw_cnalbum SET " . pwSqlSingle(array(
						'aname'		=> $FARM_ALBUMNAME,		'atype'		=> 0,
						'ownerid'	=> $winduid,		'owner'		=> $windid,
						'lasttime'	=> $timestamp,		'crtime'	=> $timestamp,  'photonum'  => 1
					)));
		$albumid=$db->insert_id();
	}else{
		$db->query( "UPDATE pw_cnalbum set photonum=photonum+1,lastphoto='".$filepath."' where aid=".$albumid );
	}
	#���浽���
	$picarr['aid'] = $albumid;
	$picarr['uptime'] = $timestamp;
	$picarr['pintro'] = $db_charset == "utf-8" ? $_GET['desc'] : iconv("UTF-8", $db_charset, $_GET['desc']);
	$picarr['path'] = $filepath;
	$picarr['ifthumb'] = 1;
	$picarr['uploader'] = $windid;
	$db->update("INSERT INTO pw_cnphoto SET " . pwSqlSingle($picarr));
	$picid=$db->insert_id();
	echo '{"url":"../../../mode.php?m=o&q=photos&a=view&pid='.$picid.'", "albumid":"'.$albumid.'", "lloc":"M9ovAADVC0KTpe8xDSNj767GjkUUFRYAAA!!"}';
	exit;
}
else {
	echo '{"error":"�Բ��𣬱���ʧ�ܣ��ļ��޷�����","errno":"-900"}';
	exit;
}

#=====================================================================

//��ȡ�ϴ��ļ�·��
function getfilepath($fileext, $mkdir=false) {
	global $timestamp,$o_mkdir;

	$prename	= randstr(4) . $timestamp . substr(md5($timestamp . randstr(8)),10,15);
		$filename	= "_$prename." . $fileext;
		$savedir	= 'photo/';
		if ($o_mkdir == '2') {
			$savedir .= 'Day_' . date('ymd') . '/';
		}  else {
			$savedir .= 'Mon_'.date('ym') . '/';
		}

	if($mkdir) {
		$newfilename = R_P.'attachment/'.$savedir;
		if(!is_dir($newfilename)) {
			if(!@mkdir($newfilename)) {
				return $filename;
			}
		}
		
	}
	return $savedir.$filename;
}

//��ȡ���ID
function getalbums($uid) {
	global $db,$FARM_ALBUMNAME;
	$albumid = $db->get_value("SELECT aid FROM pw_cnalbum WHERE ownerid='$uid' AND aname='$FARM_ALBUMNAME' ORDER BY aid ASC LIMIT 1");
	return $albumid;
}

//д���ļ�
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

//��ȡ�ļ�
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
?>