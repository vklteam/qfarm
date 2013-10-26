<?php

# 装饰品商店

//隐藏配置
qf_getCache('_HIDE');

foreach($itemtype as $key => $value) {
	if(in_array($value['itemId'], $_HIDE['mcitem'])){
		unset($itemtype[$key]);
	}
}

echo qf_jsonCode(array_values($itemtype));

?>
