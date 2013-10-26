<?php
//农场:load_main_v_9.xml
$nc_main = <<<XML
<?xml version="1.0" encoding="utf-8" ?>
<data>
    <version value="" loginurl="" />
    <loading url="$url/module/loading2_v_3.swf" />
    <!-- 模块列表 -->
    <moduleList>
        <module name="main" url="$url/module/main3_v_221.swf" statusText="加载主文件...">
            <material url="$url/module/ui/main/farmui_full_v_40.swf" statusText="加载UI素材..." />
            <material url="$url/module/ui/main/farmui2_v_58.swf" statusText="加载UI素材..." />
			<material url="$url/module/ui/water_ui_v_0.swf" statusText="加载UI素材..." />
        </module>
		<!-- 异步加载的模块 -->
		<module name="Shop Module" url="$url/module/ui/shop_v_7.swf" />
		<module name="Decorate Module" url="$url/module/ui/decorate_v_0.swf" />
		<module name="Warehouse Module" url="$url/module/ui/warehouse_v_23.swf" />

		<module name="Quick Shoot Module" url="$url/module/ui/quickshoot_v_0.swf"/>
		<module name="Cards Module" url="$url/module/ui/cards_v_1.swf"/>
		<module name="FreeGift Module" url="$url/module/ui/gifts_v_11.swf"/>
		<module name="Water Pool Module" url="$url/module/ui/pool_v_13.swf"/>
    </moduleList>
</data>
XML;
?>
