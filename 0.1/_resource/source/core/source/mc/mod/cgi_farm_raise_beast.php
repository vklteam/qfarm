<?php

# 在好友放牛
$isfarm = (int)$_REQUEST['isfarm'];
$ownerId = (int)$_REQUEST['ownerId'];
$slotid = (int)$_REQUEST['slotid'];
$type = (int)$_REQUEST['type'];

$list1 = $_QFG['db']->fetchOne("select beasts,crystal from app_qqfarm_user where uid=".$_QFG['uid']);
$beasts = qf_decode($list1['beasts']);
$crystal = qf_decode($list1['crystal']);

$status = $_QFG['db']->result("SELECT status FROM app_qqfarm_mc where uid=" . $ownerId);
$beastsinfo = $_QFG['db']->result("SELECT beasts FROM app_qqfarm_user where uid=" . $ownerId);
$status = qf_decode($status);
$beastsinfo = qf_decode($beastsinfo);

$steal = '';
foreach($status as $key => $value) {
	if($status[$key]['totalCome']>0 && $status[$key]['totalCome'] > ceil($animaltype[$value['cId']]['output']*0.6)){
		$steal = ',"steal":{"cid":'.$value['cId'].',"serial":1}';
		$status[$key]['totalCome'] -=1;
		$income = $animaltype[$value['cId']]['byproductprice'];	
		break;
	}
}

if(count($beastsinfo['info_mc'])>=3)  die('{"direction":"您的好友不能在放动物了，换另一个好友看看！","ecode":-30306}');

foreach($beastsinfo['info_mc'] as $key => $value) {
	if($value['fid']==$_QFG['uid']  && $beasts['beasts'][$slotid]['status'] !=2 ){
		if((int)$value['isfarm'] == 0) die('{"direction":"您的动物以放好了，换另一只看看吧","ecode":-30306}');
	}
}

$beastsinfo['info_mc'][] = array("attack"=>array(),"fid"=>$_QFG['uid'],"id"=>$slotid,"isfarm"=>0);

$exp = mt_rand(1,5);
$beasts['beasts'][$slotid]['app'] = "pasture";
$beasts['beasts'][$slotid]['isfarm'] = 0;
$beasts['beasts'][$slotid]['status'] = 2;
$beasts['beasts'][$slotid]['fid'] = $ownerId;
$beasts['beasts'][$slotid]['raisetime'] = $_QFG['timestamp'];
$beasts['beasts'][$slotid]['stealtime'] = $_QFG['timestamp'];
$beasts['beasts'][$slotid]['returntime'] = $_QFG['timestamp']+$beasts['beasts'][$slotid]['curblood']*360;
$beasts['beasts'][$slotid]['leftraise'] -= 1;
$beasts['beasts'][$slotid]['income'] += ($beasts['beasts'][$slotid]['totalblood']*10 + (int)$income);
$beasts['beasts'][$slotid]['fincome'] = (int)$income;
$beasts['beasts'][$slotid]['lastExp'] = $exp;
$beasts['moralexp'] +=$exp;


$drop = '';
if(mt_rand(1,2)>1){
	$dropid = mt_rand(1,2);
	$crystal[$dropid] += 1;
	$drop = ',"drop":[{"id":'.$dropid.',"num":1,"time":'.$_QFG['timestamp'].',"type":9}]';
}

$beasts['beasts'] = array_values($beasts['beasts']);
$beastsinfo['info_mc'] = array_values($beastsinfo['info_mc']);

$_QFG['db']->query("update app_qqfarm_mc set status='".qf_encode(array_values($status))."'  where uid=" . $ownerId);
$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beastsinfo)."'  where uid=" . $ownerId);
$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beasts)."',crystal='".qf_encode($crystal)."' where uid=" . $_QFG['uid']);

$beast_info = $beast_drop = array();
foreach($beastsinfo['info_mc'] as $key => $value) {
	if($value['fid']==0){
		$beasts = $beastsinfo;
		if((int)$value['isfarm'] == 0){
			$curblood = round(($beasts['sys_mc'][$value['id']]['returntime'] - $_QFG['timestamp'])/360);
			$beast_info[] = array("app"=>'pasture',"attack"=>$value['attack'],"blood"=>$curblood ,"domain"=>"xy","fid"=>$value['fid'],"id"=>$value['id'],"income"=>$beasts['sys_mc'][$value['id']]['fincome'],"raisetime"=>$beasts['sys_mc'][$value['id']]['raisetime'],"returntime"=>$beasts['sys_mc'][$value['id']]['returntime'],"src"=>16,"status"=>2,"stealtime"=>$beasts['sys_mc'][$value['id']]['raisetime'],"type"=>$beasts['sys_mc'][$value['id']]['type']);
		}
	} else {
		$beasts = $_QFG['db']->result('SELECT beasts FROM app_qqfarm_user where uid=' . $value['fid']);
		$beasts = qf_decode($beasts);
		if((int)$value['isfarm'] == 0){
			$beast_info[] = array("app"=>'pasture',"attack"=>$value['attack'],"blood"=>$beasts['beasts'][$value['id']]['curblood'],"domain"=>"xy","fid"=>$value['fid'],"id"=>$value['id'],"income"=>$beasts['beasts'][$value['id']]['fincome'],"raisetime"=>$beasts['beasts'][$value['id']]['raisetime'],"returntime"=>$beasts['beasts'][$value['id']]['returntime'],"src"=>16,"status"=>2,"stealtime"=>$beasts['beasts'][$value['id']]['raisetime'],"type"=>$beasts['beasts'][$value['id']]['type']);
		}	
	}

}
foreach($beastsinfo['drop'] as $key => $value) {
	if($beastsinfo['drop']) $beast_drop[$key] = array("id"=>$value['id'],"num"=>$value['num'],"time"=>$value['time'],"type"=>9);
}

echo '{"beast":{"drop":'.qf_jsonCode($beast_drop).',"info":'.qf_jsonCode($beast_info).'}'.$drop.',"ecode":0,"moralexp":'.$exp.''.$steal.'}';

?>