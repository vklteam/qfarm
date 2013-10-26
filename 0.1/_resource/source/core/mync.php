<?php
//农场入口

include('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

//检查登录状态
if($auth = qf_checkauth()) {
	die($auth);
}

//新用户检查
if(!$_QFG['db']->result("SELECT uid FROM app_qqfarm_nc where uid=" . $_QFG['uid'])) {
	include("source/nc/user_init.php");
}


//定义允许访问的模块
$mod_list = array(
	'chat_clearchat', //清空留言
	'chat_clearlog', //清空日志
	'chat_getallinfo', //用户状态
	'chat_sendchat', //用户留言
	'dog_feedmoney', //狗粮提示
	'cgi_ws_com', 
	'cgi_fetch_package_flags', //中秋活动
	'cgi_get_thanks_package', //中秋活动
	'cgi_farm_ceremony_package', //中秋活动
	'cgi_farm_halloweeneve_initview', //鬼节活动
	'cgi_farm_halloweeneve_bonus', //鬼节活动
	'cgi_farm_activity',//4.1活动
	'cgi_farm_login_home',//签到提示
	'cgi_farm_login_click',//签到
	'cgi_pasture_signin',//签到
	'farmlandstatus_clearweed', //作物除草
	'farmlandstatus_fertilize', //作物加肥
	'farmlandstatus_getoutput', //作物输出
	'farmlandstatus_harvest', //收获作物
	'farmlandstatus_pest', //恶意放虫
	'farmlandstatus_planting', //播种作物
	'farmlandstatus_scarify', //起地作物
	'farmlandstatus_scatterseed', //恶意种草
	'farmlandstatus_scrounge', //偷取作物
	'farmlandstatus_spraying', //作物杀虫
	'farmlandstatus_water', //作物浇水
	'feast_getpackagelist', //礼包提示
	'feast_getpackage', //每日礼包
	'feast_levelup', //升级提示
	'friend', //好友列表
	'cgi_farm_getstatus_filter', //好友状态
	'cgi_farm_shop_verify', //y币购买
	'cgi_farm_buyweapon', //金币购买
	'gb_buy', //y币购买
	'item_activeitem', //农场装饰
	'cgi_farm_buyitem', //金币购买装饰
	'cgi_farm_item_vip', //VIP装饰
	'item_deactiveitem', //取消装饰
	'item_getuseritems', //初始化装饰
	'item_healthmode', //健康模式
	'item_shop', //装饰品商店
	'cgi_register', //开通牧场
	'feeds_select', //开通牧场
	'feeds_delete', //开通牧场
	'repertory_buyseed', //作物购买
	'usertool_getseedinfo', //作物商店
	'usertool_getseedinfo', //作物商店
	'cgi_farm_getusercrop', //用户仓库
	'repertory_getuserseed', //用户包果
	'repertory_sale', //单个卖出
	'repertory_saleall', //全部卖出
	'repertory_getseedinfo', //作物商店
	'cgi_farm_seed_list', //种子仓库	
	'cgi_farm_seed_sell', //种子单卖
	'tool_list', //种子仓库
	'task_accept', //新手任务提示
	'task_npc', //NPC任务
	'task_qixiflag', //NPC任务
	'task_activity', //NPC任务
	'task_halloween', //NPC任务
	'task_halloweenseed', //NPC任务
	'task_checkbitmap',//圣诞NPC任务
	'task_putin', //NPC任务
	'task_update', //新手任务
	'cgi_farm_flower_get_card', //赠花留言
	'user_case', //加工厂
	'cgi_farm_flower_del_msg', //删除好友送花
	'user_checkstatus', //备用
	'cgi_farm_exchange', //种子消费
	'user_getnotice', //农场公告
	'user_received', //收到花的信息
	'user_reclaimpay', //开垦土地
	'user_reclaim', //开地提示
	'user_run', //访问自己和别人农场
	'cgi_farm_flower_send', //送花信息
	'cgi_farm_flower_received', //收到花的信息
	'user_welcome', //农场欢迎
	'user_costfeeds', //农场欢迎
	'cgi_farm_upgrade', //升级红地
	'usertool_buytool', //狗粮购买
	'usertool_gettools', //狗粮商店
	'cgi_farm_set_lock',//包上锁
	'fcg_ws_get_costfeeds',//用户成果
	'sysmsg_select',
	'view_fcg',//活动
	'shop_verify',//活动
	'user_qqshow',//活动
	'cgi_pasture_chunjie',//活动
	'cgi_pasture_checkbitmap',//活动
	'qqshow_activeitem',//活动
	'qqshow_deactiveitem',//活动
	'cgi_farm_attack_beast',
	'cgi_farm_beast_getnick',//用户放牛
	'cgi_farm_get_userbeast',//用户牛信息
	'cgi_farm_get_moralexp',//用户人品值
	'cgi_farm_adopt_beast',//用户购买牛
	'cgi_farm_raise_beast',//在好友放牛
	'cgi_farm_get_usercrystal',//水晶仓库
	'cgi_farm_sell_crystal',//出售水晶
	'cgi_farm_pickup_crystal',//用户拿水晶
	'cgi_farm_reward_beast',//放牛奖励
	'cgi_farm_donate_beast',//收成放牛
	'cgi_farm_open_slot',//开启槽位
	'cgi_farm_hpage_beast',//
	'cgi_farm_beast_getnick',
	'cgi_return_gift',
	'cgi_farm_landext_fund',
	'request_get_count',
	'cgi_ua_stat',
	'cgi_fish_register',//开通鱼塘
	'cgi_fish_index',//鱼塘信息
	'cgi_fish_harvest',//鱼塘捞鱼
	'cgi_fish_buy',//购买鱼苗
	'cgi_fish_list',//鱼塘商店
	'cgi_fish_unlock',//鱼苗解锁
	'cgi_fish_user_rep',//鱼塘成鱼
	'cgi_fish_plant',//鱼塘放鱼
	'cgi_fish_rep_lock',//鱼塘仓库上锁
	'cgi_fish_sale',//出售成鱼
	'cgi_fish_output',//鱼塘输出
	'cgi_fish_steal',//鱼塘偷鱼
	'cgi_fish_fertilize',//鱼苗加肥
	'cgi_fish_getall',//成鱼
	'cgi_farm_housekeeper',
	'cgi_farm_sendrequest',//发送召回请求
	'cgi_farm_request_count',
	'cgi_farm_upgrade_black',//升级黑土地
	'cgi_farm_shop_pay',//元宝升级黑土地
	'cgi_farm_request_list',//礼包
	'cgi_farm_request_gift_recv',//接收礼包
	'cgi_farm_guang_gun',//1111活动
	'cgi_farm_thanksgiving_initview',//1122活动
	'cgi_farm_thanksgiving_setfree',//1122活动
	'cgi_farm_guang_gun',//1111活动
	'hydra_feeds_select',
	'hydra_feeds_delete',
	'cgi_fetch_strategy_rules',//NPC提示
	'cgi_farm_newyear_getflag',
	'cgi_farm_sx_dedicate',
	'cgi_farm_sx_dedicate_list',
	'cgi_farm_sx_get_money',
	'cgi_farm_sx_list',
	'cgi_farm_sx_ref',
	'cgi_farm_tree',
	'cgi_farm_tree_qqalarmclock',
	'cgi_farm_upgrade_gold',//升级完金黄土地
	'price_goods',//买升级完金黄土地次数
	''
);


//构造模块名称
if($_REQUEST['phpye'] == "phpye"){
	$mod_name = "cgi_farm_get_usercrystal"; 
} else {
	$mod_name = $_REQUEST['mod'] ? $_REQUEST['mod'] : '';
	$mod_name .= $_REQUEST['act'] ? '_' . $_REQUEST['act'] : '';
}
$mod_name = strtolower($mod_name);

//加载模块
if(in_array($mod_name, $mod_list)) {
	qf_getCache('cropstype', '/nc/');
	qf_getCache('itemtype', '/nc/');
	qf_getCache('toolstype', '/nc/');
	qf_getCache('upgrade', '/nc/');
	qf_getCache('allflower', '/nc/');
	qf_getCache('fishtype', '/nc/');
	include("source/nc/mod/{$mod_name}.php");
} elseif(FARM_DEBUG) {
	error_log($mod_name . "\r\n", 3, 'data/logs/#ncmod_deny.log');
}

?>