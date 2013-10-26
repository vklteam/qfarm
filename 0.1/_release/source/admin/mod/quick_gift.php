<?php
//管理员留言和赠送

qf_getCache('cropstype', '/nc/');
qf_getCache('toolstype', '/nc/');
qf_getCache('fishtype', '/nc/');
qf_getCache('crystalinf', '/mc/');
qf_getCache('animaltype', '/mc/');
$nc_itemtype=qf_getCache('itemtype', '/nc/');
$mc_itemtype=qf_getCache('itemtype', '/mc/');

//农场
$add_ncpaid = intval($_REQUEST['add_ncpaid']);
$add_ncpanum = intval($_REQUEST['add_ncpanum']);
$add_ncfiid = intval($_REQUEST['add_ncfiid']);
$add_ncfinum = intval($_REQUEST['add_ncfinum']);
$add_ncfrid = intval($_REQUEST['add_ncfrid']);
$add_ncfrnum = intval($_REQUEST['add_ncfrnum']);
$add_nctlid = intval($_REQUEST['add_nctlid']);
$add_nctlnum = intval($_REQUEST['add_nctlnum']);
$add_mcclid = intval($_REQUEST['add_mcclid']);
$add_mcclnum = intval($_REQUEST['add_mcclnum']);
$add_ncytid = intval($_REQUEST['add_ncytid']);
$add_ncytnum = intval($_REQUEST['add_ncytnum']);
//牧场
$add_mcfrid = intval($_REQUEST['add_mcfrid']);
$add_toolsid = intval($_REQUEST['add_toolsid']);
$add_mcfrnum = intval($_REQUEST['add_mcfrnum']);
$add_mccpid = intval($_REQUEST['add_mccpid']);
$add_mccpnum = intval($_REQUEST['add_mccpnum']);
$add_mczpid = intval($_REQUEST['add_mczpid']);
$add_mczpnum = intval($_REQUEST['add_mczpnum']);
$add_tools = intval($_REQUEST['add_tools']);

//装饰
$add_nctlid2 = intval($_REQUEST['add_nctlid2']);
$add_mctlid = intval($_REQUEST['add_mctlid']);

//入库处理
$users = $_QFG['db']->fetchAll("SELECT uid FROM app_qqfarm_user");
foreach($users as $value) {
	$uId = $value['uid'];
	//农场种子
	if($add_ncpaid > 0 && $add_ncpanum > 0) {
		if(array_key_exists($add_ncpaid, $cropstype)) {
			$package = $_QFG['db']->result("select package from app_qqfarm_nc where uid=" . $uId);
			$package = qf_decode($package);
			$package[$add_ncpaid] = $package[$add_ncpaid] + $add_ncpanum;
			$_QFG['db']->query("update app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $uId);
		} else {
			die('1|&|种子cid错误');
		}
	}
			//鱼塘产品
	if($add_ncytid > 0 && $add_ncytnum > 0) {
		if(array_key_exists($add_ncytid, $fishtype)) {
			$fish_fruit = $_QFG['db']->result("select fish_fruit from app_qqfarm_nc where uid=" . $uId);
			$fish_fruit = qf_decode($fish_fruit);
			$fish_fruit[$add_ncytid] = $fish_fruit[$add_ncytid] + $add_ncytnum;
			$_QFG['db']->query("update app_qqfarm_nc set fish_fruit='" . qf_encode($fish_fruit) . "' where uid=" . $uId);
		} else {
			die('1|&|鱼苗cid错误');
		}
	}
			//水晶
	if($add_mcclid > 0 && $add_mcclnum > 0) {
		if(array_key_exists($add_mcclid, $crystalinf)) {
			$crystal = $_QFG['db']->result("select crystal from app_qqfarm_user where uid=" . $uId);
			$crystal = qf_decode($crystal);
			$crystal[$add_mcclid] = $crystal[$add_mcclid] + $add_mcclnum;
			$_QFG['db']->query("update app_qqfarm_user set crystal='" . qf_encode($crystal) . "' where uid=" . $uId);
		} else {
			die('1|&|水晶cid错误');
		}
	}
	//农场产品
	if($add_ncfrid >0 && $add_ncfrnum >0) {
		if(array_key_exists($add_ncfrid, $cropstype)) {
			$fruit = $_QFG['db']->result("select fruit from app_qqfarm_nc where uid=" . $uId);
			$fruit = qf_decode($fruit);
			$fruit[$add_ncfrid] = $fruit[$add_ncfrid] + $add_ncfrnum;
			$_QFG['db']->query("update app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $uId);
		} else{
			die('1|&|农场产品cid错误');
		}
	}
	//农场鱼苗
	if($add_ncfiid > 0 && $add_ncfinum > 0) {
		if(array_key_exists($add_ncfiid, $fishtype)) {
			$fish_package = $_QFG['db']->result("select fish_package from app_qqfarm_nc where uid=" . $uId);
			$fish_package = qf_decode($fish_package);
			$fish_package[$add_ncfiid] = $fish_package[$add_ncfiid] + $add_ncfinum;
			$_QFG['db']->query("update app_qqfarm_nc set fish_package='" . qf_encode($fish_package) . "' where uid=" . $uId);
		} else {
			die('1|&|鱼苗id错误');
		}
	}
	//道具(不含狗)
	if($add_nctlid >0 && $add_nctlnum > 0) {
		if(array_key_exists($add_nctlid,$toolstype)) {
			if(in_array($add_nctlid, array(40001, 40003))) {
				die('1|&|不能送狗');
			} elseif(in_array($add_nctlid, array(9001, 9002))) {
				$dogstr = $_QFG['db']->result("SELECT dog FROM app_qqfarm_nc where uid=" . $uId);
				$dogstr = qf_decode($dogstr);
				if($add_nctlid == 9001) {
					$dogFeed = 86400*$add_nctlnum;
				} elseif($add_nctlid == 9002) {
					$dogFeed = 604800*$add_nctlnum;
				}
				if($dogstr["dogFeedTime"] < $_QFG['timestamp']) {
					$dogstr["dogFeedTime"] = $_QFG['timestamp'] + $dogFeed;
				} else {
					$dogstr["dogFeedTime"] = $dogstr["dogFeedTime"] + $dogFeed;
				}
				$_QFG['db']->query("UPDATE app_qqfarm_nc set dog='" . qf_encode($dogstr) . "' where uid=" . $uId);
			} else {
				$fertarr = $_QFG['db']->result("SELECT tools FROM app_qqfarm_nc where uid=" . $uId);
				$fertarr = qf_decode($fertarr);
				if($add_nctlid > 39000){
					$fertarr[$add_nctlid-39099] = $fertarr[$add_nctlid-39099] + 7*$add_nctlnum;
				} else {
					$fertarr[$add_nctlid-30000] = $fertarr[$add_nctlid-30000] + $add_nctlnum;
				}
				$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($fertarr) . "' where uid=" . $uId);
			}
		} else {
			die('1|&|农场道具cid错误');
		}
	}
	//牧场幼崽
	if($add_mcfrid >0 && $add_mcfrnum > 0) {
		if(array_key_exists($add_mcfrid, $animaltype) || array_key_exists($add_mcfrid-10000, $animaltype)) {
			$goods = $_QFG['db']->result("select goods from app_qqfarm_mc where uid=" .  $uId);
			$goods = qf_decode($goods);
			$goodsid = $add_mcfrid-10000;
			$goods[$goodsid] = $goods[$goodsid] + $add_mcfrnum;
			$_QFG['db']->query("update app_qqfarm_mc set goods='" . qf_encode($goods) . "' where uid=" .  $uId);
		} else {
			die('1|&|牧场幼崽cid错误');
		}
	}
	//牧场产品
	if($add_mccpid >0 && $add_mccpnum > 0) {
		if(array_key_exists($add_mccpid, $animaltype) || array_key_exists($add_mccpid-10000, $animaltype)) {
			$package = $_QFG['db']->result("select package from app_qqfarm_mc where uid=" .  $uId);
			$package = qf_decode($package);
			$packageid = $add_mccpid-10000;
			$package[$packageid] = $package[$packageid] + $add_mccpnum;
			$_QFG['db']->query("update app_qqfarm_mc set package='" . qf_encode($package) . "' where uid=" .  $uId);
		} else {
			die('1|&|牧场产品cid错误');
		}
	}
	//牧场整品
	if($add_mczpid >0 && $add_mczpnum > 0) {
		if(array_key_exists($add_mczpid, $animaltype) || array_key_exists($add_mczpid-10000, $animaltype)) {
			$package = $_QFG['db']->result("select package from app_qqfarm_mc where uid=" .  $uId);
			$package = qf_decode($package);
			$package[$add_mczpid] = $package[$add_mczpid] + $add_mczpnum;
			$_QFG['db']->query("update app_qqfarm_mc set package='" . qf_encode($package) . "' where uid=" .  $uId);
		} else {
			die('1|&|牧场整品cid错误');
		}
	}
	//牧场罐头
	if($add_toolsid >0 && $add_tools > 0) {
			$tools = $_QFG['db']->result("select tools from app_qqfarm_mc where uid=" .  $uId);
			$tools = qf_decode($tools);
			$tools[$add_toolsid] = $tools[$add_toolsid] + $add_tools;
			$_QFG['db']->query("update app_qqfarm_mc set tools='" . qf_encode($tools) . "' where uid=" .  $uId);

	}
	//农场装饰
	if($add_nctlid2 >0) {
		if(array_key_exists($add_nctlid2, $nc_itemtype)) {
			$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_nc where uid=" . $uId);
			$decorative = qf_decode($decorative);
			$additemtype = $nc_itemtype[$add_nctlid2]['itemType'];
			foreach($decorative[$additemtype] as $key => $value1) {
				if(array_key_exists($add_nctlid2,$decorative[$additemtype])) {
					$decorative[$additemtype][$add_nctlid2]['validtime'] = $decorative[$additemtype][$add_nctlid2]['validtime'] + $nc_itemtype[$add_nctlid2]['itemValidTime'];
				} else {
					$decorative[$additemtype][$add_nctlid2]['status'] = 0;
					$decorative[$additemtype][$add_nctlid2]['validtime'] = $_QFG['timestamp'] + $nc_itemtype[$add_nctlid2]['itemValidTime'];
				}
			}
			$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='" . qf_encode($decorative) . "' where uid=" . $uId);
		} else {
			die('1|&|道具cid错误');
		}
	}
	//牧场装饰
	if($add_mctlid >0) {
		if(array_key_exists($add_mctlid, $mc_itemtype)) {
			$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_mc where uid=" . $uId);
			$decorative = qf_decode($decorative);
			foreach($decorative['item1'] as $key => $value1) {
				if(array_key_exists($add_mctlid,$decorative['item1'])) {
					$decorative['item1'][$add_mctlid]['validtime'] = $decorative['item1'][$add_mctlid]['validtime'] + $mc_itemtype[$add_mctlid]['itemValidTime'];
				} else {
					$decorative['item1'][$add_mctlid]['status'] = 0;
					$decorative['item1'][$add_mctlid]['validtime'] = $_QFG['timestamp'] + $mc_itemtype[$add_mctlid]['itemValidTime'];
				}
				$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative='" . qf_encode($decorative) . "' where uid=" . $uId);
			}
		} else {
			die('1|&|道具cid错误');
		}
	}
}
die('3|&|给所有用户赠送礼物成功.');

?>