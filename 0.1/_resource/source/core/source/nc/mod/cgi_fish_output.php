<?php
//сЦлайДЁЖ
$uId = (int)$_REQUEST['ownerId'];
$index = (int)$_REQUEST['index'];

$list = $_QFG['db']->fetchOne("SELECT fish_status FROM app_qqfarm_nc where uid=" . $uId);
$fish_status = qf_decode($list['fish_status']);

foreach($fish_status as $key => $value) {
	//╦ЭпбсЦлав╢л╛ 
	if($fish_status[$key]['fid'] != 0) {
		$fid = $fish_status[$key]['fid'];
		if($_QFG['timestamp'] - $fish_status[$key]['p']>= $fishtype[$fid]['cycle']['2'] && $fish_status[$key]['o'] == 0 ) {
			$fish_status[$key]['o'] = $fishtype[$fid]['output'];
			$fish_status[$key]['l'] = $fishtype[$fid]['output'];
		}
	}
}


$_QFG['db']->query("UPDATE app_qqfarm_nc set fish_status='" . qf_encode(array_values($fish_status)) . "' where uid=" . $uId);


echo '{"code":1,"i":'.$index.',"l":'.$fishtype[$fid]['output'].',"o":'.$fishtype[$fid]['output'].',"p":'.$_QFG['timestamp'].'}';

?>