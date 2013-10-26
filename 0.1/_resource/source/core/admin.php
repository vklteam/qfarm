<?php
//后台入口

include('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

//检查权限
if($auth = qf_checkauth() || !in_array($_QFG['uid'], $_QSC['adminer'])) {
	die($auth ? $auth : '权限校验失败.');
}

//定义允许访问的模块
$mod_list = array(
	'home', //管理首页
	'quick', //快捷操作
	'system', //系统配置
	'notice', //公告管理
	'user_list', //用户列表
	'user_edit', //用户编辑
	'user_delete', //用户删除
	'cropstype_list', //作物参数
	'cropstype_edit', //修改作物参数
	'fishtype_list', //作物参数
	'fishtype_edit', //修改作物参数
	'itemtype_list', //装饰参数
	'itemtype_edit', //修改装饰参数
	'toolstype_list', //道具参数
	'toolstype_edit', //修改道具参数
	'mctoolstype_list', //道具参数
	'mctoolstype_edit', //修改道具参数
	'animaltype_list', //动物参数
	'animaltype_edit', //修改动物参数
	'syncdata' //同步数据
);

//构造模块名称
$mod_name = $_REQUEST['mod'] ? $_REQUEST['mod'] : 'home';
$mod_name .= $_REQUEST['act'] ? '_' . $_REQUEST['act'] : '';
$mod_name = strtolower($mod_name);

//加载模块
if(in_array($mod_name, $mod_list)) {
	$tab_name = 'admin';
	include("source/admin/mod/{$mod_name}.php");
} else {
	die("0|&|参数错误");
}

?>