<?php
//前台入口

include('common.php');
header('Content-Type:text/html; charset=utf-8');

//检查登录状态
if($auth = qf_checkauth()) die($auth);

//关闭农场提示
if(!in_array($_QFG['uid'],$_QSC['adminer']) && $_QSC['closefarm'] == 0)  die(qf_getView('closed'));
qf_getCache('itemtype', '/nc/');
qf_getCache('toolstype', '/nc/');
qf_getCache('upgrade', '/nc/');
qf_getCache('upblack', '/nc/');
$app = (int)$_REQUEST['app'];
$ai = (int)$_REQUEST['ai'];
$go_pay = (int)$_REQUEST['go_pay'];
$itemId = (int)$_REQUEST['itemId'];
$itemNum = (int)$_REQUEST['itemNum'];
$itemType = (int)$_REQUEST['itemType'];
$payType = (int)$_REQUEST['payType'];
$shopType = (int)$_REQUEST['shopType'];
$buy_fb = (int)$_REQUEST['buy_fb'];
$vip = (int)$_REQUEST['vip'];

$list = $_QFG['db']->fetchOne("SELECT yb,vip,tools FROM app_qqfarm_user where uid=" . $_QFG['uid']);
$list1 = $_QFG['db']->fetchOne("SELECT dog,decorative,exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$yb = $list['yb'];
$dog = qf_decode($list1['dog']);
$decorative = qf_decode($list1['decorative']);
$level = qf_toLevel($list1['exp']);

if($vip==1){
	$prompt = '您是VIP用户，已享受8折优惠。';
} else $prompt = '成为VIP用户，可以享受8折优惠。';
$show = 1;
if($buy_fb ==0){
	$show = 0;
	$prompt = '系统出错啦，请刷新以后重试！';
}
if( $yb < $buy_fb || $buy_fb ==0){
	$show = 0;
	$prompt = '您的元宝不够！';
}

$yes = 0;

if($app==358){//牧场
	if( $shopType == 13 ){#升级窝
		$id = 20000 + $itemId;
		$payitem = ''.$ai.'-'.$itemNum.'';
		$itemname = '升级第'.$itemId.'级窝';
		$pic = 'module/mc/main/updateDen/update.jpg';
		foreach($decorative[$itemType] as $key => $value) {
			if($key==$itemId){
				$show = 0;
				$prompt = '您已经购买过了，不必重复购买！';
			}
		}
	}elseif( $shopType == 14 ){#升级棚
		$id = 30000 + $itemId;
		$payitem = ''.$ai.'-'.$itemNum.'';
		$itemname = '升级第'.$itemId.'级棚';
		$pic = 'module/mc/main/updateDen/update.jpg';
	}

	if($go_pay == 1) {
		$yes = 1;
		$show = 2;
		$url = 'mymc.php?mod=gb_buy&payitem='.$payitem.'';
	}

} elseif($app==353){
	if( $shopType == 2 ){#买装饰品
		$id = 20000 + $itemId;
		$payitem = ''.$id.'-'.$itemNum.'';
		$itemname = $itemtype[$itemId]["itemName"];
		$pic = 'module/ui/farm/diy/'.$itemId.'b.jpg';
		if(!file_exists($pic)) {
			$pic = 'module/ui/farm/diy/'.$itemId.'a.jpg';
		}
		foreach($decorative[$itemType] as $key => $value) {
			if($key==$itemId){
				$show = 0;
				$prompt = '您已经购买过了，不必重复购买！';
			}
		}
	} elseif( $shopType == 3 ){#买化肥
		$id = 30000 + $itemId;
		$payitem = ''.$id.'-'.$itemNum.'';
		$itemname = $toolstype[$id]["tName"];
		$pic = 'module/ui/tools/f'.$itemId.'.jpg';
	} elseif( $shopType == 24 ){#买鱼食
		$id = 240000 + $itemId;
		$payitem = ''.$id.'-'.$itemNum.'';
		$itemname = $toolstype[$id]["tName"];
		$pic = 'module/ui/tools/y'.$itemId.'.jpg';
	} elseif( $shopType == 4 ){#买狗食
		$id = 40000 + $itemId;
		$payitem = ''.$id.'-'.$itemNum.'';
		$itemname = $toolstype[$itemId]["tName"];
		$pic = 'module/ui/tools/DogFood'.$itemId.'.jpg';
	} elseif( $shopType == 7 ){#买狗
		$id = 40000 + $itemId;
		$payitem = ''.$id.'-'.$itemNum.'';
		$itemname = $toolstype[$id]["tName"];
		$pic = 'module/ui/tools/Dog'.$itemId.'.jpg';
		foreach($dog['dogs'] as $key => $value) {
			if($key==$itemId){
				$show = 0;
				$prompt = '您已经拥有了这条狗了。';
			}
		}
	} elseif( $shopType == 10 ){#买武器
		$id = 100000 + $itemId;
		$payitem = ''.$id.'-'.$itemNum.'';
		$itemname = $toolstype[$id]["tName"];
		$pic = 'module/mc/farm/wild/pic/weapon'.$itemId.'.jpg';
	} elseif( $shopType == 12 ){#升级黑土地
		$pic = 'module/ui/tools/blackup.jpg';
		$itemname = '第'.$itemId.'块黑土地';
		$id = 120000 + $itemId;
		$payitem = ''.$id.'-'.$itemNum.'';
		if($level < $upblack[$itemId-1]['level']){
			$show = 0;
			$prompt = '您的级别不够升级黑土地！';
		}
	} elseif( $shopType == 13 ){#升级红土地
		$pic = 'module/ui/tools/redLand.jpg';
		$itemname = '第'.$itemId.'块红土地';
		$id = 130000 + $itemId;
		$payitem = ''.$id.'-'.$itemNum.'';
		if($level < $upgrade[$itemId-1]['level']){
			$show = 0;
			$prompt = '您的级别不够升级红土地！';
		}
	} elseif( $shopType == 46 ){#升级黄金土地
		$pic = 'module/ui/tools/1009_46.jpg';
		$itemname = '金牌土地';
		$id = 460000 + $itemId;
		$payitem = ''.$id.'-'.$itemNum.'';

	}

	if($go_pay == 1) {
		$yes = 1;
		$show = 2;
		$url = 'mync.php?mod=gb_buy&payitem='.$payitem.'';
	}
}

qf_getView('pay/pay');

?>