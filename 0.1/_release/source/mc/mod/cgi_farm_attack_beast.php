<?php

# 赶牛
$type = $_REQUEST['attackType'];
$flag = (int)$_REQUEST['flag'];
$slotid = (int)$_REQUEST['slotid'];
$owner = (int)$_REQUEST['owner'];
$ownerId = (int)$_REQUEST['ownerId'];
$weapon = (int)$_REQUEST['weapon'];
$isfarm = (int)$_REQUEST['isfarm'];
$uIdx = (int)$_REQUEST['uIdx'];
$index = (int)$_REQUEST['index'];

$beastsinfo = $_QFG['db']->result('SELECT beasts FROM app_qqfarm_user where uid=' . $ownerId);
$list = $_QFG['db']->fetchOne("select beasts,tools from app_qqfarm_user where uid=".$_QFG['uid']);
$beasts = qf_decode($list['beasts']);
$tools = qf_decode($list['tools']);
$beastsinfo = qf_decode($beastsinfo);
$drop = '';
foreach($beastsinfo['info_mc'] as $key => $value) {
	if($slotid == $value['id'] && $index == $key && (int)$value['isfarm'] == $isfarm){
		if($value['fid']<1 && $owner==0 ){

			if($type=='Gun'){//用工具

				if($tools[100000+$weapon]<1) die('{"direction":"你的包里没有武器了！","ecode":-30306}');
				$tools[100000+$weapon] -= 1;
				if($tools[100000+$weapon]<=0) unset($tools[100000+$weapon]);
				$result = 1;
				$leftblood = $toolstype[100000+$weapon]['blood'];
				$addmoral = 1;
				$subblood = round(($beastsinfo['sys_mc'][$slotid]['returntime'] - $_QFG['timestamp'])/360) - $leftblood;
				$beastsinfo['sys_mc'][$slotid]['returntime'] -= $leftblood*360;
				$beastsinfo['sys_mc'][$slotid]['curblood'] -= $leftblood;

			} elseif ($type=='Hunter' ||$type=='Fight'||$type=='Dog'){//召唤猎人 肉

				if($ownerId != $_QFG['uid'] && ($type=='Dog' || $type=='Hunter')) die('{"direction":"只能在自己的牧场召唤狗！","ecode":-30306}');
				if(mt_rand(1,5)<2){
					$result = 3;
					$addmoral = 0;
					$subblood = round(($beastsinfo['sys_mc'][$slotid]['returntime'] - $_QFG['timestamp'])/360);
					$leftblood = 0;
				} else {
					$result = 1;
					$leftblood = mt_rand(3,10);
					$addmoral = 1;
					$subblood = round(($beastsinfo['sys_mc'][$slotid]['returntime'] - $_QFG['timestamp'])/360) - $leftblood;
					$beastsinfo['sys_mc'][$slotid]['returntime'] -= $leftblood*360;
					$beastsinfo['sys_mc'][$slotid]['curblood'] -= $leftblood;
				}
			}

			if(mt_rand(1,5)>4){
				$dropid1 = mt_rand(1,10);
				$dropid2 = mt_rand(1,10);
				$dropid3 = mt_rand(1,10);
				$dropid4 = mt_rand(1,10);
				$dropid5 = mt_rand(1,10);
				$dropid6 = mt_rand(1,10);
				$drop = ',"drop":[{"id":'.$dropid1.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid2.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid3.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid4.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid5.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid6.',"num":1,"time":'.$_QFG['timestamp'].',"type":9}]';
				$droparray1 = array("id"=>$dropid1,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
				$droparray2 = array("id"=>$dropid2,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
				$droparray3 = array("id"=>$dropid3,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
				$droparray4 = array("id"=>$dropid4,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
				$droparray5 = array("id"=>$dropid5,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
				$droparray6 = array("id"=>$dropid6,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
			} elseif(mt_rand(1,4)>1){
				$dropid1 = mt_rand(1,10);
				$dropid2 = mt_rand(1,10);
				$dropid3 = mt_rand(1,10);
				$dropid4 = mt_rand(1,10);
				$drop = ',"drop":[{"id":'.$dropid1.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid2.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid3.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid4.',"num":1,"time":'.$_QFG['timestamp'].',"type":9}]';
				$droparray1 = array("id"=>$dropid1,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
				$droparray2 = array("id"=>$dropid2,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
				$droparray3 = array("id"=>$dropid3,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
				$droparray4 = array("id"=>$dropid4,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
			} elseif(mt_rand(1,2)>1){
				$dropid1 = mt_rand(1,10);
				$dropid2 = mt_rand(1,10);
				$dropid3 = mt_rand(1,10);
				$drop = ',"drop":[{"id":'.$dropid1.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid2.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid3.',"num":1,"time":'.$_QFG['timestamp'].',"type":9}]';
				$droparray1 = array("id"=>$dropid1,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
				$droparray2 = array("id"=>$dropid2,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
				$droparray3 = array("id"=>$dropid3,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
			}

		} else {

			$beastsfid = $_QFG['db']->result('SELECT beasts FROM app_qqfarm_user where uid=' . $value['fid']);
			$beastsfid = qf_decode($beastsfid);
			if($type=='Gun'){//用工具

				if($tools[100000+$weapon]<0) die('{"direction":"你的包里没有武器了！","ecode":-30306}');
				$tools[100000+$weapon] -= 1;
				if($tools[100000+$weapon]<=0) unset($tools[100000+$weapon]);
				$result = 1;
				$leftblood = $toolstype[100000+$weapon]['blood'];
				$addmoral = 1;
				$subblood = round(($beastsfid['beasts'][$slotid]['returntime'] - $_QFG['timestamp'])/360) - $leftblood;
				$beastsfid['beasts'][$slotid]['returntime'] -= $leftblood*360;
				$beastsfid['beasts'][$slotid]['curblood'] -= $leftblood;

			} elseif ($type=='Hunter' ||$type=='Fight'||$type=='Dog'){//召唤猎人 肉

				if($ownerId != $_QFG['uid'] && ($type=='Dog' || $type=='Hunter')) die('{"direction":"只能在自己的牧场召唤猎人！","ecode":-30306}');
				if(mt_rand(1,5)<2){
					$result = 3;
					$addmoral = 0;
					$subblood = round(($beastsfid['beasts'][$slotid]['returntime'] - $_QFG['timestamp'])/360);
					$leftblood = 0;
				} else {
					$result = 1;
					$leftblood = mt_rand(1,5);
					$addmoral = 1;
					$subblood = round(($beastsfid['beasts'][$slotid]['returntime'] - $_QFG['timestamp'])/360) - $leftblood;
					$beastsfid['beasts'][$slotid]['returntime'] -= $leftblood*360;
					$beastsfid['beasts'][$slotid]['curblood'] -= $leftblood;	
				}
			}
			if(mt_rand(1,5)>4){
				$dropid1 = mt_rand(1,2);
				$dropid2 = mt_rand(1,2);
				$drop = ',"drop":[{"id":'.$dropid1.',"num":1,"time":'.$_QFG['timestamp'].',"type":9},{"id":'.$dropid2.',"num":1,"time":'.$_QFG['timestamp'].',"type":9}]';
				$droparray1 = array("id"=>$dropid1,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
				$droparray2 = array("id"=>$dropid2,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
			} elseif(mt_rand(1,4)>1){
				$dropid1 = mt_rand(1,2);
				$drop = ',"drop":[{"id":'.$dropid1.',"num":1,"time":'.$_QFG['timestamp'].',"type":9}]';
				$droparray1 = array("id"=>$dropid1,"num"=>1,"time"=>$_QFG['timestamp'],"type"=>9);
			}

			$beastsfid['beasts'] = array_values($beastsfid['beasts']);
			$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beastsfid)."' where uid=" . $value['fid']);
		}

	$beastsinfo['info_mc'][$key]['attack'][] = array("fid"=>$_QFG['uid'],"flag"=>$flag,"id"=>$weapon,"isqz"=>true,"issucc"=>true);
	if($droparray1) $beastsinfo['drop'][] = $droparray1;
	if($droparray2) $beastsinfo['drop'][] = $droparray2;
	if($droparray3) $beastsinfo['drop'][] = $droparray3;
	if($droparray4) $beastsinfo['drop'][] = $droparray4;
	if($droparray5) $beastsinfo['drop'][] = $droparray5;
	if($droparray6) $beastsinfo['drop'][] = $droparray6;
	$beasts['moralexp'] += $addmoral;
	}
}
$beastsinfo['info_mc'] = array_values($beastsinfo['info_mc']);
$beastsinfo['drop'] = array_values($beastsinfo['drop']);

$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beasts)."',tools='".qf_encode($tools)."' where uid=" . $_QFG['uid']);
$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beastsinfo)."' where uid=" . $ownerId);

echo '{"addmoral":'.$addmoral.''.$drop.',"ecode":0,"leftblood":'.$subblood.',"result":'.$result.',"subblood":'.$leftblood.'}';

?>