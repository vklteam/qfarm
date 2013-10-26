<?php
# 用户状态

$uId = (int)$_REQUEST['uIdx'];
$uIdx = (int)$_REQUEST['uIdx'];

$list = $_QFG['db']->fetchOne('SELECT fish_repertory FROM app_qqfarm_nc where uid=' . $uId);
$fish_repertory = qf_decode($list['fish_repertory']);

foreach($fish_repertory as $k=>$v) {
	if($rep) {
		$rep .= ',{"cName":"'.$fishtype[$v["fid"]]["crop_name"].'","cid":'.$v["fid"].',"hn":'.$v["h"].',"sn":'.$v["s"].'}';
	} else {
		$rep = '{"cName":"'.$fishtype[$v["fid"]]["crop_name"].'","cid":'.$v["fid"].',"hn":'.$v["h"].',"sn":'.$v["s"].'}';
	}
}

echo '{"repertory":['.$rep.']}';

?>