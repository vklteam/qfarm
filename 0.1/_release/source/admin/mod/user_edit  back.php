<?php

$id = intval($_GET['id']);
if($id < 1) {
	die('2|&|参数错误.');
}

$mc_itemtype=qf_getCache('itemtype', '/mc/');
qf_getCache('cropstype', '/nc/');
qf_getCache('fishtype', '/nc/');
$nc_itemtype=qf_getCache('itemtype', '/nc/');
qf_getCache('toolstype', '/nc/');
qf_getCache('animaltype', '/mc/');
qf_getCache('crystalinf', '/mc/');
qf_getCache('_HIDE','/');
$type = in_array($_GET['type'], array('index', 'edititem','additem')) ? $_GET['type'] : 'index';

if($_GET['submit'] == 1 && $type != "additem") {
	$nc_reclaim = intval($_REQUEST['nc_reclaim']);
	$nc_redland = intval($_REQUEST['nc_redland']);
	$nc_exp = intval($_REQUEST['nc_exp']);
	$mc_exp = intval($_REQUEST['mc_exp']);
	$money = intval($_REQUEST['money']);
	$yb = intval($_REQUEST['yb']);
	if($nc_reclaim < 1 || $nc_reclaim > 24) {
		die('1|&|修改失败,农田数目应大于1且小于24.');
	} 
	if( $nc_redland < 0 || $nc_redland > 24) {
		die('1|&|修改失败,红土地数目应大于1且小于24.');
	} 
	//修改farmlandstatus数据 -- START --
	$list = $_QFG['db']->fetchOne("
		SELECT N.status,U.vip FROM app_qqfarm_nc N 
			left join app_qqfarm_user U on N.uid=U.uid where N.uid={$id}
	");
	$status = qf_decode($list['status']);
	$vip = qf_decode($list['vip']);
	if(!(int)$vip['join']) $vip['join'] = $_QFG['timestamp'];
	if(!(int)$vip['last']) $vip['last'] = $_QFG['timestamp'];
	$vip['status'] = intval($_REQUEST['vipstatus']);
	$vip['valid'] = strtotime(trim($_REQUEST['vipvalid']));
	$vip['exp'] = intval($_REQUEST['vip']);
	$vip['gift_mc'] = 0;
	$vip['gift_nc'] = 0;
//人品值
$list1 = $_QFG['db']->fetchOne("select beasts,crystal from app_qqfarm_user where uid=" . $id);
$beasts = qf_decode($list1['beasts']);
$beasts['moralexp' ] = intval($_REQUEST['rpexp']);
$crystal = qf_decode($list1['crystal']);
$crystal['1' ] = intval($_REQUEST['crystal1']);
$crystal['2' ] = intval($_REQUEST['crystal2']);
$crystal['3' ] = intval($_REQUEST['crystal3']);
$crystal['4' ] = intval($_REQUEST['crystal4']);
$crystal['5' ] = intval($_REQUEST['crystal5']);
$crystal['6' ] = intval($_REQUEST['crystal6']);
$crystal['7' ] = intval($_REQUEST['crystal7']);
$crystal['8' ] = intval($_REQUEST['crystal8']);
$crystal['9' ] = intval($_REQUEST['crystal9']);
$crystal['10' ] = intval($_REQUEST['crystal10']);
//窝棚等级
$list1 = $_QFG['db']->fetchOne("select decorative from app_qqfarm_mc where uid=" . $id);
$decorative = qf_decode($list1['decorative']);
$decorative['item2' ] = intval($_REQUEST['item2']);
$decorative['item3' ] = intval($_REQUEST['item3']);
	//获取实际开垦农田数
	$farmlandCount = count($status);
	//添加需开垦的农田
	if($farmlandCount < $nc_reclaim) {
		for($i = $farmlandCount; $i < $nc_reclaim; $i++) {
			$status[$i] = array("a"=>0,"b"=>0,"c"=>0,"d"=>0,"e"=>1,"f"=>0,"g"=>0,"h"=>1,"i"=>100,"j"=>0,"k"=>0,"l"=>0,"m"=>0,"n"=>array(),"o"=>0,"p"=>array(),"q"=>0,"r"=>1251351725,"bitmap"=>0, "pId"=>0);
		}
	}
	//删除多开垦的农田
	elseif($farmlandCount > $nc_reclaim) {
		foreach($status as $k => $v) {
			if($k >= $nc_reclaim) {
				unset($status[$k]);
			}
		}
	}
	//红土地
		if($nc_redland >= 0 && $nc_redland < 25 ) {
			foreach($status as $sk=>$sv) {
				if($sk<$nc_redland) {
					$status[$sk]['bitmap'] = 1;
				} else {
					$status[$sk]['bitmap'] = 0;
				}
			}
		}
	//修改farmlandstatus数据 -- OVER --
	$_QFG['db']->query("UPDATE app_qqfarm_user set yb=" . $yb . ",money=" . $money . ", vip='".qf_encode($vip)."' where uid=" . $id);
	$_QFG['db']->query("UPDATE app_qqfarm_nc set exp=" . $nc_exp . ",reclaim=" . $nc_reclaim . ",redland=" . $nc_redland . ", status='" . qf_encode(array_values($status)) . "' where uid=" . $id);
	$_QFG['db']->query("UPDATE app_qqfarm_mc set exp=" . $mc_exp . " where uid=" . $id);
//修改人品值
	$_QFG['db']->query("UPDATE app_qqfarm_user set beasts='".qf_encode($beasts)."' where uid=" . $id);
//修改水晶
	$_QFG['db']->query("UPDATE app_qqfarm_user set crystal='".qf_encode($crystal)."' where uid=" . $id);
//修改窝棚等级
	$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative='".qf_encode($decorative)."' where uid=" . $id);

	die('1|&|修改用户(UID:' . $id . ')的信息成功.|&|refresh|&|1');
} else {
	if($type=="edititem") {
		$cid = $_GET["cid"];
		$cnumber = $_GET["number"];
		$mclass = $_GET["mclass"];
		if($cnumber < 0 ){
		die('1|&|数量必须大于等于0');
		}
		if($mclass == 1) {
			$packagearr = $_QFG['db']->result("select package from app_qqfarm_nc where uid=" . $id);
			$packagearr = qf_decode($packagearr);
			$packagearr[$cid] = $cnumber;
			foreach($packagearr as $key => $value) {
				if($value == 0) {
					unset($packagearr[$key]);
				}
			}
			$_QFG['db']->query("update app_qqfarm_nc set package='" . qf_encode($packagearr) . "' where uid=" . $id);
		} elseif($mclass == 2){
			$fertarr = $_QFG['db']->result("select tools from app_qqfarm_nc where uid=" . $id);
			$fertarr = qf_decode($fertarr);
			$fertarr[$cid] =  $cnumber;
			foreach($fertarr as $key => $value) {
				if($value == 0) {
					unset($fertarr[$key]);
				}
			}
			$_QFG['db']->query("update app_qqfarm_nc set tools='" . qf_encode($fertarr) . "' where uid=" . $id);
		} elseif($mclass == 3){
			$fruit = $_QFG['db']->result("select fruit from app_qqfarm_nc where uid=" . $id);
			$fruit = qf_decode($fruit);
			$fruit[$cid] = $cnumber;
			foreach($fruit as $key => $value) {
				if($value == 0) {
					unset($fruit[$key]);
				}
			}
			$_QFG['db']->query("UPDATE app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $id);
		}
		elseif($mclass == 4){
			$packagearr = $_QFG['db']->result("select package from app_qqfarm_mc where uid=" . $id);
			$packagearr = qf_decode($packagearr);
			$packagearr[$cid] = $cnumber;
			foreach($packagearr as $key => $value) {
				if($value == 0) {
					unset($packagearr[$key]);
				}
			}
			$_QFG['db']->query("update app_qqfarm_mc set package='" . qf_encode($packagearr) . "' where uid=" . $id);
		}
		die('3|&|编辑物品成功！|&|refresh|&|1');
	} elseif($type=="additem" && $_GET['submit'] == 1 ) {
		//nc
		$add_ncfrid = intval($_REQUEST['add_ncfrid']);
		$add_ncfrnum = intval($_REQUEST['add_ncfrnum']);
		$add_ncpaid = intval($_REQUEST['add_ncpaid']);
		$add_ncpanum = intval($_REQUEST['add_ncpanum']);
		$add_ncfrnum = intval($_REQUEST['add_ncfrnum']);
		$add_ncpaid = intval($_REQUEST['add_ncpaid']);
		$add_nctlid = intval($_REQUEST['add_nctlid']);
		$add_nctlnum = intval($_REQUEST['add_nctlnum']);
		$add_ncytid = intval($_REQUEST['add_ncytid']);
		$add_ncytnum = intval($_REQUEST['add_ncytnum']);
		//mc
		$add_mcfrid = intval($_REQUEST['add_mcfrid']);
		$add_mcfrnum = intval($_REQUEST['add_mcfrnum']);
		$add_mccpid = intval($_REQUEST['add_mccpid']);
		$add_mccpnum = intval($_REQUEST['add_mccpnum']);
		$add_mcclid = intval($_REQUEST['add_mcclid']);
		$add_mcclnum = intval($_REQUEST['add_mcclnum']);
		$add_mcbb = intval($_REQUEST['add_mcbb']);
		$add_mcbbnum = intval($_REQUEST['add_mcbbnum']);
		//装饰
		$add_mctlid = intval($_REQUEST['add_mctlid']);
		$add_nctlid2 = intval($_REQUEST['add_nctlid2']);
		//农场种子
		if($add_ncpaid >0){
			if (array_key_exists($add_ncpaid,$cropstype) || in_array($add_ncpaid,$_HIDE['seed'])){
				$package = $_QFG['db']->result("select package from app_qqfarm_nc where uid=" . $id);
				$package = qf_decode($package);
				$package[$add_ncpaid] = $package[$add_ncpaid] + $add_ncpanum;
				$_QFG['db']->query("update app_qqfarm_nc set package='" . qf_encode($package) . "' where uid=" . $id);
				}else{die('1|&|种子cid错误');}
			}
		//农场鱼苗
		if($add_ncfiid >0){
			if (array_key_exists($add_ncfiid,$fishtype) || in_array($add_ncfiid,$_HIDE['seed'])){
				$fish_package = $_QFG['db']->result("select fish_package from app_qqfarm_nc where uid=" . $id);
				$fish_package = qf_decode($fish_package);
				$fish_package[$add_ncfiid] = $fish_package[$add_ncfiid] + $add_ncfinum;
				$_QFG['db']->query("update app_qqfarm_nc set fish_package='" . qf_encode($fish_package) . "' where uid=" . $id);
				}else{die('1|&|鱼苗id错误');}
			}
		//鱼塘产品
		if($add_ncytid >0){
			if (array_key_exists($add_ncytid,$fishtype) || in_array($add_ncytid,$_HIDE['seed'])){
				$fish_fruit = $_QFG['db']->result("select fish_fruit from app_qqfarm_nc where uid=" . $id);
				$fish_fruit = qf_decode($fish_fruit);
				$fish_fruit[$add_ncytid] = $fish_fruit[$add_ncytid] + $add_ncytnum;
				$_QFG['db']->query("update app_qqfarm_nc set fish_fruit='" . qf_encode($fish_fruit) . "' where uid=" . $id);
			}else{die('1|&|鱼塘产品cid错误');}
		}
		//道具(不含狗)
		if($add_nctlid >0){
			if (array_key_exists($add_nctlid,$toolstype)){
				if(in_array($add_nctlid,array(40001,40003))){
					die('1|&|不能送狗');
				}elseif(in_array($add_nctlid,array(9001,9002))){
					$dogstr = $_QFG['db']->result("SELECT dog FROM app_qqfarm_nc where uid=" . $id);
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
					$_QFG['db']->query("UPDATE app_qqfarm_nc set dog='" . qf_encode($dogstr) . "' where uid=" . $id);
				}else{
				$fertarr = $_QFG['db']->result("SELECT tools FROM app_qqfarm_nc where uid=" . $id);
				$fertarr = qf_decode($fertarr);
				$fertarr[$add_nctlid-30000] = $fertarr[$add_nctlid-30000] + $add_nctlnum;
				$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($fertarr) . "' where uid=" . $id);
			}
		}else{die('1|&|农场道具cid错误');}
			}
		//农场产品
		if($add_ncfrid >0){
			if (array_key_exists($add_ncfrid,$cropstype) || in_array($add_ncfrid,$_HIDE['seed'])){
				$fruit = $_QFG['db']->result("select fruit from app_qqfarm_nc where uid=" . $id);
				$fruit = qf_decode($fruit);
				$fruit[$add_ncfrid] = $fruit[$add_ncfrid] + $add_ncfrnum;
				$_QFG['db']->query("update app_qqfarm_nc set fruit='" . qf_encode($fruit) . "' where uid=" . $id);
			}else{die('1|&|农场产品cid错误');}
		}
		//牧场整品
		if($add_mcfrid >0){
			if (array_key_exists($add_mcfrid,$animaltype) || array_key_exists($add_mcfrid-10000,$animaltype)){
				$package = $_QFG['db']->result("select package from app_qqfarm_mc where uid=" .  $id);
				$package = qf_decode($package);
				$package[$add_mcfrid] = $package[$add_mcfrid] + $add_mcfrnum;
				$_QFG['db']->query("update app_qqfarm_mc set package='" . qf_encode($package) . "' where uid=" .  $id);
			}else{die('1|&|牧场整品cid错误');}
			}
			//牧场幼崽
		if($add_mcbb >0){
			if (array_key_exists($add_mcbb,$animaltype) || array_key_exists($add_mcbb-10000,$animaltype)){
				$goods = $_QFG['db']->result("select goods from app_qqfarm_mc where uid=" .  $id);
				$goods = qf_decode($goods);
				$goods[$add_mcbb] = $goods[$add_mcbb] + $add_mcbbnum;
				$_QFG['db']->query("update app_qqfarm_mc set goods='" . qf_encode($goods) . "' where uid=" .  $id);
			}else{die('1|&|牧场幼崽cid错误');}
			}
			//牧场产品
		if($add_mccpid >0){
			if (array_key_exists($add_mccpid,$animaltype) || array_key_exists($add_mccpid-10000,$animaltype)){
				$package = $_QFG['db']->result("select package from app_qqfarm_mc where uid=" .  $id);
				$package = qf_decode($package);
			    $packageid = $add_mccpid-10000;
			    $package[$packageid] = $package[$packageid] + $add_mccpnum;
				$_QFG['db']->query("update app_qqfarm_mc set package='" . qf_encode($package) . "' where uid=" .  $id);
			}else{die('1|&|牧场产品cid错误');}
			}
		//材料水晶
		if($add_mcclid >0){
			if (array_key_exists($add_mcclid,$crystalinf) || array_key_exists($add_mcclid-10000,$crystalinf)){
				$crystal = $_QFG['db']->result("select crystal from app_qqfarm_user where uid=" .  $id);
				$crystal = qf_decode($crystal);
				$crystal[$add_mcclid] = $crystal[$add_mcclid] + $add_mcclnum;
				$_QFG['db']->query("update app_qqfarm_user set crystal='" . qf_encode($crystal) . "' where uid=" .  $id);
			}else{die('1|&|材料水晶cid错误');}
			}
		//农场装饰
		if($add_nctlid2 >0){
			if (array_key_exists($add_nctlid2,$nc_itemtype)){
				$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_nc where uid=" . $id);
				$decorative = qf_decode($decorative);
				$additemtype=$nc_itemtype[$add_nctlid2]['itemType'];
				foreach($decorative[$additemtype] as $key => $value1) {
					if(array_key_exists($add_nctlid2,$decorative[$additemtype])) {
						$decorative[$additemtype][$add_nctlid2]['validtime'] = $decorative[$additemtype][$add_nctlid2]['validtime'] + $nc_itemtype[$add_nctlid2]['itemValidTime'];
					} else {
						$decorative[$additemtype][$add_nctlid2]['status'] = 0;
						$decorative[$additemtype][$add_nctlid2]['validtime'] = $_QFG['timestamp'] + $nc_itemtype[$add_nctlid2]['itemValidTime'];
					
					}$_QFG['db']->query("UPDATE app_qqfarm_nc set decorative='" . qf_encode($decorative) . "' where uid=" . $id);
				}
			}else{
				die('1|&|道具cid错误');
			}
		}
		//牧场装饰
		if($add_mctlid >0){
			if (array_key_exists($add_mctlid,$mc_itemtype)){
				$decorative = $_QFG['db']->result("SELECT decorative FROM app_qqfarm_mc where uid=" . $id);
				$decorative = qf_decode($decorative);
				foreach($decorative['item1'] as $key => $value1) {
					if(array_key_exists($add_mctlid,$decorative['item1'])) {
						$decorative['item1'][$add_mctlid]['validtime'] = $decorative['item1'][$add_mctlid]['validtime'] + $mc_itemtype[$add_mctlid]['itemValidTime'];
					} else {
						$decorative['item1'][$add_mctlid]['status'] = 0;
						$decorative['item1'][$add_mctlid]['validtime'] = $_QFG['timestamp'] + $mc_itemtype[$add_mctlid]['itemValidTime'];
						
					}$_QFG['db']->query("UPDATE app_qqfarm_mc set decorative='" . qf_encode($decorative) . "' where uid=" . $id);
				}
			}else{
				die('1|&|道具cid错误');
			}
		}
		die('3|&|给用户增加物品成功！|&|refresh|&|1');
	}
	$value = $_QFG['db']->fetchOne("
		SELECT U.*,N.exp as exp_nc,N.reclaim,N.redland,M.exp as exp_mc FROM(
			(app_qqfarm_user U
				LEFT JOIN app_qqfarm_nc N ON N.uid=U.uid
			) LEFT JOIN app_qqfarm_mc M ON M.uid=U.uid
		) where U.uid={$id}
	");
	$value['level_nc'] = qf_toLevel($value['exp_nc']);//农场等级
	$value['level_mc'] = qf_toLevel($value['exp_mc']);//牧场等级
	$value['username'] = qf_getUserName($id);
	$value['vip'] = qf_decode($value['vip']);
	$value['vip']['level'] = qf_toVipLevel($value['vip']['exp'], $value['vip']['status']);
	$value['vip']['valid'] = date('Y-m-d',$value['vip']['valid']);
	//人品和水晶
	$value['beasts'] = qf_decode($value['beasts']);
	$value['beasts']['moralexp'] = intval($value['beasts']['moralexp']);
	$value['crystal'] = qf_decode($value['crystal']);
	$value['crystal']['1'] = intval($value['crystal']['1']);
	$value['crystal']['2'] = intval($value['crystal']['2']);
	$value['crystal']['3'] = intval($value['crystal']['3']);
	$value['crystal']['4'] = intval($value['crystal']['4']);
	$value['crystal']['5'] = intval($value['crystal']['5']);
	$value['crystal']['6'] = intval($value['crystal']['6']);
	$value['crystal']['7'] = intval($value['crystal']['7']);
	$value['crystal']['8'] = intval($value['crystal']['8']);
	$value['crystal']['9'] = intval($value['crystal']['9']);
	$value['crystal']['10'] = intval($value['crystal']['10']);
	//窝棚等级
	$value2 = $_QFG['db']->fetchOne("select decorative from app_qqfarm_mc where uid=" . $id);
	$value2['decorative'] = qf_decode($value2['decorative']);
	$value2['decorative']['item2'] = intval($value2['decorative']['item2']);
	$value2['decorative']['item3'] = intval($value2['decorative']['item3']);
	//物品
	$list = $_QFG['db']->fetchOne("select package,tools from app_qqfarm_nc where uid=" . $id);
	$package = qf_decode($list['package']);
	$fish_package = qf_decode($list['fish_package']);
	$tools = qf_decode($list['tools']);
	//产品
	$fruit = $_QFG['db']->result("select fruit from app_qqfarm_nc where uid=" . $id);
	$fruit = qf_decode($fruit);
	$fruitarr = array();
	//鱼塘产品
	$fish_fruit = $_QFG['db']->result("select fish_fruit from app_qqfarm_nc where uid=" . $id);
	$fish_fruit = qf_decode($fish_fruit);
	$fish_fruitarr = array();
	//牧场整品
	$fruit2 = $_QFG['db']->result("select package from app_qqfarm_mc where uid=" . $id);
	$fruit2 = qf_decode($fruit2);
	$fruitarr2 = array();
	//材料
	$list = $_QFG['db']->result("select crystal from app_qqfarm_user where uid=" . $id);
	$crystal = qf_decode($list['crystal']);
	$package = qf_decode($package);
	//牧场产品
	$package = $_QFG['db']->result("select package from app_qqfarm_mc where uid=" . $id);
	$package = qf_decode($package);
	$package = array();

	qf_getView("admin/user_edit");
}

?>