<?php

# 系统配置
	qf_getCache('cropstype', '/nc/');
	$farm_list = $cropstype;
	qf_getView("admin/cropstype_list");
?>