<?php
//牧场:mcini_main_v_8.xml

$mc_main = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<main>
	<postUrl url = "$url/mymc.php?mod=" commonFarm="$url/mymc.php?mod=" commonNc="$url/mymc.php?mod=" url_pengyou = "$url/mymc.php?mod=" commonFarm_pengyou="$url/mymc.php?mod=" commonNc_pengyou="$url/mymc.php?mod=" fbRequest = "gb_buy" cftRequest="gb_buy" verifyRequest = "shop_verify"/><!-- http请求地址 -->
	<folder url = "$url/module/mc/" />
	<version value = "" loginurl = "http://i.qzone.qq.com/" />	
	<openControl><!-- 功能开放控制 -->
		<item name = "tool" open = "true" /><!-- 道具 -->
		<item name = "pack" open = "false" /><!-- 好友背包 -->
		<item name = "quickshoot" open="true" openlv="1"/><!--快照-->
		<item name = "harvestall" open="true" openlv="7" time="5|6|7|8|9|10|12|13|19|20|21|22"/><!--一键收获-->
		<item name = "sprice" open="true" openlv="0" time="5/1/2010 15:00|5/13/2010 15:00"/>
		<item name = "wild" open="true" openlv="1" openexp="0" />
	</openControl>
	<security host="127.0.0.1" port="3333" />	
	<moduleList><!-- 模块列表 -->
		<module name="main" url="$url/module/Master2_v_142.swf" statusText="加载主文件...">
            <material url="$url/module/mc/main/farmui1_v_42.swf" statusText="加载UI素材..." />
            <material url="$url/module/mc/main/farmui2_v_44.swf" statusText="加载UI素材..." />
            <material url="$url/module/mc/main/commonui_v_12.swf" statusText="加载UI素材..." />
			<material url="$url/module/mc/farm/wild/wild_ui_v_10.swf" statusText="加载图标素材..." />
            <material url="$url/module/mc/main/title_v_7.swf" statusText="加载窗口标题..."  />
		</module>
	</moduleList>
	<moduleList2><!-- 模块列表2 -->		
		<module name="task" url="$url/module/mc/main/task_v_1.swf" statusText="任务素材" />
		<module name="upgrade" url="$url/module/mc/main/upgrade_v_1.swf?v=1" statusText="升级素材"  />
		<module name="hunter" url="$url/module/mc/farm/hunter/" statusText="猎人素材" />
		<module name="drop9" url="$url/module/mc/farm/wild/drop9.swf" statusText="野生动物水晶" />
		<module name="wildanimal" url="$url/module/mc/farm/wild/" statusText="野生动物" />
		<module name="wildaction" url="$url/module/mc/farm/wild/action.swf" statusText="野生动物" />
		<module name="wildaweapon" url="$url/module/mc/farm/wild/" statusText="野生动物" />
<module name="intel" url="$url/module/mc/farm/intel/intel_134.swf" statusText="Intel活动" />
		<module name="mouse" url="$url/module/mc/farm/enemy/mouse.swf" statusText="天灾老鼠" />
	</moduleList2>

<vipRenewal>
		<tips><![CDATA[您的黄钻还有<font color = '#FF0000'><b>&nbsp;{expireDays}&nbsp;</b></font>天到期。我们温馨提醒您及时<br>黄钻贵族每月可领取最高<font color = '#FF0000'><b>&nbsp;420&nbsp;</b></font>Q币农牧场礼包。]]></tips>
		<link><![CDATA[tools.php?mod=vip]]></link>
	</vipRenewal>
	<vipReturn>
	<vipReturnLink><![CDATA[tools.php?mod=vip]]></vipReturnLink>
        <vipReturnButton><![CDATA[module/ui/buttons/vipReturnButton.png]]></vipReturnButton>
	</vipReturn>
	<hunter>
		<food>{"buyexp":0,"description":"一次性购买5天工资，即可额外获赠2天的工资。让看守员为您看守牧场一周。","effect":604800,"id":102,"left":9972551,"name":"普通工资5+2礼包","order":8,"price":0,"qdprice":20,"status":1,"type":5,"validtime":0,"yqdprice":16}</food>
	</hunter>
<flopCards><!-- 牧场签到信息 -->
		<gift sid='1' name='金币' num='100' vid='' swf='' cla='GoldCardsGame' per='个'/>
		<gift sid='2' name='金币' num='500' vid='' swf='' cla='GoldCardsGame' per='个'/>
		<gift sid='3' name='白鸽' num='1' vid='1050' swf='' cla='' per='只'/>
		<gift sid='4' name='春燕' num='1' vid='1054' swf='' cla='' per='只'/>
		<gift sid='5' name='短尾猫' num='1' vid='1540' swf='' cla='' per='只'/>
		<gift sid='6' name='呼呼牛' num='1' vid='1561' swf='' cla='' per='头'/>
		<gift sid='7' name='叻叻兔' num='1' vid='1060' swf='' cla='' per='只'/>
		<gift sid='8' name='哧哧鸡' num='1' vid='1062' swf='' cla='' per='只'/>
		<gift sid='9' name='红水晶' num='1' vid='' swf='$url/module/mc/farm/wild/drop9.swf' cla='Drop_9_5' per='个'/>
		<gift sid='10' name='橙水晶' num='1' vid='' swf='$url/module/mc/farm/wild/drop9.swf' cla='Drop_9_8' per='个'/>
		<gift sid='11' name='蓝水晶' num='1' vid='' swf='$url/module/mc/farm/wild/drop9.swf' cla='Drop_9_1' per='个'/>
		<gift sid='12' name='绿水晶' num='1' vid='' swf='$url/module/mc/farm/wild/drop9.swf' cla='Drop_9_2' per='个'/>
		<gift sid='13' name='辣辣狗' num='1' vid='1551' swf='' cla='' per='只'/>
		<gift sid='14' name='橙橙猴' num='1' vid='1055' swf='' cla='' per='只'/>
		<gift sid='18' name='雅利鸭' num='1' vid='1056' swf='' cla='' per='只'/>
		<gift sid='19' name='咩咩羊' num='1' vid='1560' swf='' cla='' per='头'/><!--http://ctc.appimg.qq.com/mc/module/mc/farm/wild/drop9.swf-->
		<gift sid='20' name='普通罐头' num='1' vid='' swf='' cla='Tool_7_4' per='罐'/>
		<gift sid='21' name='高速罐头' num='1' vid='' swf='' cla='Tool_7_2' per='罐'/>
		<gift sid='22' name='极速罐头' num='1' vid='' swf='' cla='Tool_7_3' per='罐'/>
	</flopCards>
	<flopGifts>
		<gift id='15' days='3' name='牧草' num='100' cla='Crop_40_Seed'/>
		<gift id='16' days='5' name='丝光鸡' num='1' cla='SiGuangJi'/>
		<gift id='17' days='7' name='千年龟' num='1' cla='QianNianGui'/>	
</flopGifts>
<!--外部联合活动-->
<activity_list appId="358" type="xml"> 
		<activity id="wildAdvanture" act_id="1004" standalone="1" enter_type="icon" mouse_tip="点击开始丛林寻宝" bubble_tip="牧场大冒险" start_time="2012-8-20 00:00" expire_time="2012-9-3 23:59" src="module/wildAdv/WildAdvMain_v_9.swf">
		   <rewards>
				<i name="金币" id="0" type="6"/> 
				<i name="经验" id="1" type="20"/> 
				<i name="牧草" id="40" type="5"/> 
				<i name="普通有机罐头" id="31" type="7"/> 
				<i name="普通沙漏" id="41" type="12"/> 
				<i name="猎人工资" id="101" type="5"/> 
				<i name="粉海狮" id="1164" type="1"/> 
				<i name="薄荷鳄鱼" id="1165" type="1"/>
				<i name="月光狼" id="1166" type="1"/> 
				<i name="紫媚狐" id="1167" type="1"/>
				<i name="薄荷飞马" id="1626" type="1"/>
				<i name="阿拉丁神鹿" id="1627" type="1"/> 
				<i name="三叶草河马" id="1666" type="1"/> 
				<i name="彩虹虎" id="1667" type="1"/> 
				<i name="墨镜狮" id="1668" type="1"/> 
		   </rewards>
		 </activity> 
</activity_list>

<vipAnimal>
		<yellowText>
			<vip content='您是尊贵的黄钻用户，可以饲养以下黄钻专属动物。'/>
			<vip content='黄钻动物专区，您可以开通黄钻饲养以下动物。'/>
		</yellowText>
	</vipAnimal>
	<wild url="$url/module/mc/farm/wild/wild_v_37.xml" loader="$url/module/mc/farm/wild/WildShell_v_33.swf"></wild>
<!--沙箱:1为开沙箱-->
	 <sanbox>0</sanbox>
<!--翻牌-->
	 <flopSWF>module/mc/main/windows/flopGift_v_5.swf</flopSWF>
<!--窝棚升级-->
	 <updataDen url="$url/module/mc/main/updateDen/updataDen_v_7.swf" firstOpen="$url/module/mc/main/updateDen/firstIn_v_2.swf" shareImg="icon/updataimg/share.jpg"/>
<!--神奇宝贝-->	 
	 <magicalBaby uiUrl="http://appimg.qq.com/mc/module/mc/submodule/magicalBabyUI2_v_1.swf" start="7/2/2012 00:00:00" end="8/3/2012 23:59:59" tip="神奇宝宝大抽奖"/>
<!--限时专区-->	 
	 <limitSales end="5/24/2012 00:00:00" id="16" tip="有新动物了！"/>

	 <hourglass>
		<item id="40" type="12" name="迷你沙漏" des="缩短1小时"/>
		<item id="41" type="12" name="普通沙漏" des="缩短3小时"/>
		<item id="42" type="12" name="告诉沙漏" des="缩短8小时"/>
		<item id="43" type="12" name="极速沙漏" des="缩短12小时"/>
	 </hourglass>
 <levelup url="module/levelup/levelUpUI_v_1.swf" picUrl="module/mc/farm/tools/share/levelUp.jpg"/>

<levels>0</levels>
<kfc>6/26/2012-7/1/2012 23:59:59</kfc>
<a361>6/26/2012-7/1/2012 23:59:59</a361>
<hp>7/17/2012 11:00:00-8/15/2012 23:59:59</hp>
</main>
XML;
?>