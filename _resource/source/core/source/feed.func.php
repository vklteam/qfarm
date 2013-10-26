<?php

# 事件抽取函数
# create by seaif@zealv.com

function qf_getFeed($type, $oid = 0, $url = '') {
	global $_QFG;
	//应用链接
	$app = "<b><a href='" . qf_getFeedurl($_QFG['uid']) . "'>农场</a></b>";
	$appmc = "<b><a href='" . qf_getFeedurl($_QFG['uid']) . "'>牧场</a></b>";
	//自己链接
	$actor = "<a href=" . qf_getHomePage($_QFG['uid']) . ">" . $_QFG['uname'] . "</a>";
	//好友链接
	if($oid > 0) {
		$owner = "<a href=" . qf_getHomePage($oid) . ">" . qf_getUserName($oid) . "</a>";
	}
	//事件信息
	switch($type) {
		case 'user_init':
			$title = "{$actor} 添加了 {$app} 这个游戏。";
			$body = "做农民最光荣，做农场的农民更光荣";
			break;
		case 'user_initmc':
			$title = "{$actor} 添加了 {$appmc} 这个游戏。";
			$body = "做牧民最光荣，做农场的牧民更光荣";
			break;
		case 'cgi_post_product1':
			$title = "{$actor} 在自己的 {$appmc} 生产动物";
			$body = "呵呵~~这可是老鹰生小鸡啊！";
			break;
		case 'cgi_post_product2':
			$title = "{$actor} 去 {$owner} 的 {$appmc} 生产动物。";
			$body = "我为人人，人人为我！";
			break;
		case 'cgi_harvest_product':
			$title = "{$actor} 在自己的 {$appmc} 收获动物！";
			$body = "这次可是大丰收啊！";
			break;
		case 'cgi_sale_product':
			$title = "{$actor} 把自己的 {$appmc} 果实出售了";
			$body = "最近闹紧急危机！";
		case 'cgi_feedcan':
			$title = "{$actor} 去自己的 {$appmc} 喂养罐头";
			$body = "锄禾日当午，汗滴禾下土，谁知盘中餐，粒粒皆辛苦！";
			break;
		case 'cgi_help_pasture1':
			$title = "{$actor} 在自己的 {$appmc} 清理便便呢";
			$body = "锄禾日当午，汗滴禾下土，谁知盘中餐，粒粒皆辛苦！";
			break;
		case 'cgi_help_pasture2':
			$title = "{$actor} 去 {$owner} 的 {$appmc} 帮忙清理便便呢。";
			$body = "我为人人，人人为我！";
			break;
		case 'cgi_help_pasture3':
			$title = "{$actor} 在自己的 {$appmc} 拍蚊子呢";
			$body = "锄禾日当午，汗滴禾下土，谁知盘中餐，粒粒皆辛苦！";
			break;
		case 'cgi_help_pasture4':
			$title = "{$actor} 去 {$owner} 的 {$appmc} 帮忙拍蚊子呢。";
			$body = "我为人人，人人为我！";
			break;
		case 'farmlandstaus_clearweed1':
			$title = "{$actor} 在自己的 {$app} 除草呢";
			$body = "锄禾日当午，汗滴禾下土，谁知盘中餐，粒粒皆辛苦！";
			break;
		case 'farmlandstaus_clearweed2':
			$title = "{$actor} 去 {$owner} 的 {$app} 帮忙除草呢。";
			$body = "我为人人，人人为我！";
			break;
		case 'farmlandstatus_fertilize':
			$title = "{$actor} 去自己的 {$app} 施肥";
			$body = "锄禾日当午，汗滴禾下土，谁知盘中餐，粒粒皆辛苦！";
			break;
		case 'farmlandstatus_harvest':
			$title = "{$actor} 在自己的 {$app} 收获作物";
			$body = "这次可是大丰收啊！";
			break;
		case 'farmlandstatus_planting':
			$title = "{$actor} 去自己的 {$app } 播种呢";
			$body = "锄禾日当午，汗滴禾下土，谁知盘中餐，粒粒皆辛苦！";
			break;
		case 'farmlandstatus_scarify':
			$title = "{$actor} 去自己的 {$app} 辛勤工作了一番";
			$body = "锄禾日当午，汗滴禾下土，谁知盘中餐，粒粒皆辛苦！";
			break;
		case 'farmlandstatus_spraying1':
			$title = "{$actor} 的 {$app}作物生病啦，正在杀虫！";
			$body = "锄禾日当午，汗滴禾下土，谁知盘中餐，粒粒皆辛苦！";
			break;
		case 'farmlandstatus_spraying2':
			$title = "{$actor} 去 {$owner} 的 {$app} 帮忙杀虫。";
			$body = "我为人人，人人为我！";
			break;
		case 'farmlandstatus_water1':
			$title = "{$actor} 去自己的 {$app} 浇水呢。";
			$body = "锄禾日当午，汗滴禾下土，谁知盘中餐，粒粒皆辛苦！";
			break;
		case 'farmlandstatus_water2':
			$title = "{$actor} 去 {$owner} 的 {$app} 帮忙浇水。";
			$body = "我为人人，人人为我！";
			break;
		case 'farmlandstatus_sale':
			$title = "{$actor} 把自己的 {$app} 果实出售了";
			$body = "一份耕耘，一份收获！";
			break;
		case 'farmlandstatus_saleall':
			$title = "{$actor} 把 {$app}的所有果实都卖了。";
			$body = "最近闹紧急危机！";
			break;
		default:
			$title = "{$type}";
			$body = "锄禾日当午，汗滴禾下土，谁知盘中餐，粒粒皆辛苦！";
			break;
	}
	return array($title, $body);
}

?>