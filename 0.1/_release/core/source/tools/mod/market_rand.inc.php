<?php

//出售和购买市场时机遇事件

if($suiji <= 20) {
	if($suiji <= 14) {
		if($suiji <= 3) {
			$sjmoney = mt_rand(40,70);
			$_QFG['db']->query("update app_qqfarm_user set money=money+".$sjmoney." where uid=".$_QFG['uid']);
			$suijihua = '哇，人品大爆发，逛市场时捡到'.$sjmoney.'金币！';
		} elseif($suiji < 6) {
			$sjexp = mt_rand(10,30);
			$_QFG['db']->query("update app_qqfarm_nc set exp=exp+".$sjexp." where uid=".$_QFG['uid']);
			$suijihua = '哇，人品大爆发，逛市场时获得经验'.$sjexp.'！';
		} else {
			$sjmoney = mt_rand(10,30);
			$_QFG['db']->query("update app_qqfarm_user set money=money+".$sjmoney." where uid=".$_QFG['uid']);
			$suijihua = '哇，人品爆发，逛市场时捡到'.$sjmoney.'金币！';
		}
	} elseif($suiji <= 17) {
		$sjmoney = mt_rand(10,30);
		$_QFG['db']->query("update app_qqfarm_user set money=money-".$sjmoney." where uid=".$_QFG['uid']);
		$suijihua = '掏钱包时不小心掉了'.$sjmoney.'金币！';
	} else {
		$sjmoney = mt_rand(40,70);
		$_QFG['db']->query("update app_qqfarm_user set money=money-".$sjmoney." where uid=".$_QFG['uid']);
		$suijihua = '非常不幸，钱包被小偷偷走了，损失'.$sjmoney.'金币！';
	}
}

?>