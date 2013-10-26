<?php
//放牛信息
$beasts = qf_decode($list['beasts']);
$beastsall =  array();
foreach($beasts['beasts'] as $key => $value) {
	if($value['leftraise'] <= 0 && !$value['fid'] && $value['status'] ) {
 
		$beastsall[$key] = array("curblood"=>$beasts['beasts'][$key]['curblood'],"income"=>$value['income'],"isfarm"=>$value['isfarm'],"isqz"=>0,"leftraise"=>$value['leftraise'],"restleft"=>($value['totalblood']-$beasts['beasts'][$key]['curblood'])*6,"price"=>$value['price'],"status"=>5,"totalblood"=>$value['totalblood'],"type"=>$value['type']);
		
	} elseif($value['status'] == 1 && $value['curblood'] = $value['totalblood']){

		$beastsall[$key] = array("curblood"=>$value['curblood'],"income"=>$value['income'],"leftraise"=>$value['leftraise'],"price"=>$value['price'],"status"=>1,"totalblood"=>$value['totalblood'],"type"=>$value['type']);

	} elseif($_QFG['timestamp'] > $value['returntime'] && $value['returntime']){

		$beastsall[$key] = array("curblood"=>$beasts['beasts'][$key]['curblood'],"income"=>($value['income']+$income),"isfarm"=>$value['isfarm'],"isqz"=>0,"leftraise"=>$value['leftraise'],"restleft"=>($value['totalblood']-$beasts['beasts'][$key]['curblood'])*6,"price"=>$value['price'],"status"=>3,"totalblood"=>$value['totalblood'],"type"=>$value['type']);
	} 
}

?>