<?php
//农场:addon_v_25.xml

$nc_addon = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<data>
	<!-- Flash Vars 杂项配置放这里 -->
	<vars>
	  <app_key>happyfarm</app_key>
	  <diyLimitYDLevel>4</diyLimitYDLevel>
	  <domian_qz>farm.qzone</domian_qz>
	  <domian_xy>farm.xiaoyou</domian_xy>
	  <friend_list_mod_qz>1000</friend_list_mod_qz>
	  <friend_list_mod_xy>1000</friend_list_mod_xy>
	  <friend_list_tips>系统繁忙，请稍后再试！</friend_list_tips>
	  <steal_mod>1000</steal_mod>
	  <filterUrl>http://blog.qq.com/qzone/1006666002/1300264199.htm</filterUrl>
	  <friendUrl>http://id.qq.com/friends/index.html#myfriends-2-1</friendUrl>
	  <steal_tips>为保证更加稳定的服务，系统正在对部分号码进行数据维护。在此时间段系统将暂停您的 “摘取”操作以保护您的数据安全。期间好友也不能摘取您的作物，其他操作正常！谢谢您的支持！</steal_tips>
	  <enter_into_mod>1000</enter_into_mod>
	  <redirect_url_qz>http://imgcache.qq.com/qzone/v5/app/errorback/error_canvas.html#appid=353</redirect_url_qz>
	  <steal_tips_other>为保证更加稳定的服务，系统正在对部分号码进行数据维护。在此号段的农场在维护期间将停止摘取以保护数据安全。期间好友也不能摘取您的作物，其他操作正常！谢谢您的支持！</steal_tips_other>
	  <trdTimeGq>2010-9-26 14:00:00</trdTimeGq>
	  <redirect_url_xy>http://app.xiaoyou.qq.com/appframe_error.html?key=happyfarm</redirect_url_xy>
	  <ShopHeadLink>充50元话费就送50元农场大礼包，多充多送！|http://www.paipai.com/promote/2010/09/nongchang/index.html?PTAG=31395.4.2</ShopHeadLink>
	  <usercheck>7ae3d8bfd84b1cf2226c28671b093ad9</usercheck>
	  <config_url_qz>http://farm.qzone.qq.com/cgi-bin/cgi_farm_ini_run_v2?v=8</config_url_qz>
	  <config_url_xy>http://farm.xiaoyou.qq.com/cgi-bin/cgi_farm_ini_run_v2?v=8</config_url_xy>
	  <healthModeTime>00:00 - 06:00</healthModeTime>
	  <snowslide>10</snowslide>
	  <uinMode>1</uinMode>
	  <reqYellowlevel>2</reqYellowlevel>
	  <flowerDayTips>内测期间开放给黄钻以及农场15级以上（含15级）用户，每天每人可赠送一束鲜花哦！</flowerDayTips>

	  <flowerYDLevel>1</flowerYDLevel>
	  <cacheSeed>65</cacheSeed>
	  <batchStealHour>6-10,12-13,19-22</batchStealHour>
	  
	  <buyToolTips>最近化肥使用量激增导致供应紧张，目前暂不能购买。</buyToolTips>
	  <mill>appid=376</mill>
	  <buyToolHour>0-24</buyToolHour>
	  <millLimitYDLevel>1</millLimitYDLevel>
	  <noFoodTips>最近狗粮原材料供应紧张，目前暂不能购买。</noFoodTips>
	  <buyTin>1</buyTin>
	  <adSeedTabOpen>1</adSeedTabOpen>

          <WarehouseEmpty>材料仓库空空的，赶紧去好友的农场寻找、驱赶野生动物获得水晶吧！</WarehouseEmpty>       
	  <missionBeginTime>2012-02-08 00:00:00</missionBeginTime>
	  <missionEndTime>2012-02-24 00:00:00</missionEndTime>

	  <snsAdAllowLvl>0</snsAdAllowLvl>
	  <showShopMillTab>0</showShopMillTab>
	  <everyDayGiftTip><![CDATA[您的vip还有<font color = '#FF0000'><b>&nbsp;{expireDays}&nbsp;</b></font>天到期。我们温馨提醒您及时<br>vip贵族每月可领取最高<font color = '#FF0000'><b>&nbsp;420&nbsp;</b></font>Q币农牧场礼包。]]></everyDayGiftTip>
	  <vipRenewal><![CDATA[tools.php?mod=vip]]></vipRenewal>
	  <pickupGiftFunny><![CDATA[恭喜您，翻地时挖到<font color="#339933"><b>&nbsp;@num&nbsp;</b></font>颗@name种子，可以在农场里组合各种图案。后续还将推出数字、字母等趣味景观树，敬请期待！<a href="event:http://blog.qq.com/qzone/1006666001/1292920220.htm"><u><font color="#26BBE9">查看样例</font></u></a>]]></pickupGiftFunny>
      <vipReturn><![CDATA[tools.php?mod=vip]]></vipReturn>
      <newScroungeCGI>9999</newScroungeCGI>
      <vipSeedLink><![CDATA[tools.php?mod=vip]]></vipSeedLink>

      <CardsGameOpenVip><![CDATA[tools.php?mod=vip]]></CardsGameOpenVip>
<CardsGameRenewalVip><![CDATA[tools.php?mod=vip]]></CardsGameRenewalVip>
<CardsGameAllowLvl>0</CardsGameAllowLvl>
	  <ForceOpenPostWindowStr>为了保证奖品顺利邮寄</ForceOpenPostWindowStr>
          <zhaohuiOpen>1</zhaohuiOpen>
          <userActionOpenUin>1720,1720</userActionOpenUin>

          <QQSuperMarketVip>0</QQSuperMarketVip>
	  <QQSuperMarketLvl>35</QQSuperMarketLvl>
<!--是否需要给应用中心发份数据-->
	<sendRequest>1</sendRequest>
        <healthStart>10/12/2011 00:00:00</healthStart>
	<healthEnd>10/20/2011 00:00:00</healthEnd>
          
<!--签到回馈时间-->
	<cardActivityStart>3/13/2012 00:00:00</cardActivityStart>
	<cardActivityEnd>4/16/2012 00:00:00</cardActivityEnd>
<!--签到弹tip的时间到-->
	<cardActivityTipEnd>4/22/2012 00:00:00</cardActivityTipEnd>

<!-- 野外场景手工更新这里 -->
<beastLoaderUrl>$url/module/mc/farm/wild/WildShellNc_v_5.swf</beastLoaderUrl>
<wildXML><![CDATA[$url/module/mc/farm/wild/wild_v_37.xml]]></wildXML>
	  
	  <NcDrop9><![CDATA[module/ui/wild/NcDrop9_v_1.swf]]></NcDrop9>
	  <drop9><![CDATA[module/mc/farm/wild/drop9.swf]]></drop9>
	  <wildanimal><![CDATA[module/mc/farm/wild/]]></wildanimal>
	  <wildaction><![CDATA[module/mc/farm/wild/action.swf]]></wildaction>
	  <wildaweapon><![CDATA[module/mc/farm/wild/]]></wildaweapon>
	  
          <wildOpenlv>0</wildOpenlv>
	  <wildOpenexp>0</wildOpenexp>
	  <wildOpenCtrl>true</wildOpenCtrl>

          <cropUrl><![CDATA[module/ui/allcrops/]]></cropUrl>
	  <publicCropPrefix><![CDATA[Crop_1_]]></publicCropPrefix>

	  <fishNPC>http://qzs.qq.com/qzone/vas/static/2011/20110867.html</fishNPC>
	  <fishTutorial>module/ui/fish_tutorial.jpg</fishTutorial>

          <sandbox>0</sandbox>

          <pgvClickEnable>1</pgvClickEnable> <!-- 点击流上报控制 -->

	<fairy>0</fairy> <!-- 小仙灰度 0-关闭 1-VIP7 2-VIP 3-VIP5 4-ALL -->
	
<exclude_seeds>256,261,395,459,370,263,377,259,381,184,193,375,536,545,793,796,539,543,794,795,542,538,798,797,862,857,863,858,866,861,864,859,865,871,884,883</exclude_seeds>

<supermarketTip><![CDATA[2012-5-17 23:59:59]]></supermarketTip>

<kfc>6/26/2012-7/11/2012 23:59:59</kfc>
<a361>6/28/2012-8/15/2012 23:59:59</a361>
<teBu>7/10/2012-8/12/2012 23:59:59</teBu>
<jinPaiLand>7/10/2012-11/12/2012 23:59:59</jinPaiLand>
<freeGiftAutopop>8/20/2012-9/3/2012 23:59:59</freeGiftAutopop><!--免费礼物的强弹-->
<freeGiftTime>8.20 — 9.3</freeGiftTime><!--免费礼物的七夕外观日期-->
</vars>


<!--月末促销-->
	<monthEnds>
		<monthEnd id="0" name="monthend" month="7月" url="module/ui/monthEnd_v_8.swf" shareImg="http://qzonestyle.gtimg.cn/qzone/sns/pics/2012/2012040631.jpg" start="7/20/2012 00:00:00" end="8/13/2012 23:59:59" blog="http://user.qzone.qq.com/1006666001/blog/1342768754"/>
	</monthEnds>

<!--联合活动-->
	<activity_list appId="353" type="xml">
<activity id="olympicGames" act_id="1003" standalone="1" enter_type="npc" bitpos="20" mouse_tip="助威中国夺金，赢取奥运奖励！" bubble_tip="夺金有我，中国奥运健儿加油！" start_time="2012-7-16 00:00" expire_time="2012-8-12 16:00" autoPop="8/3/2012-8/11/2012 23:59:59" src="OlympicGamesContext_v_5.swf" linkUrl="" npc_src="olympicGamesNpcNC_v_1.swf" x="570" y="363"/>

<activity id="collecting" standalone="1" enter_type="customize" gray="1" start_time="2012-7-31 00:00" expire_time="2050-1-1 00:00" src="module/collect/CollectingMain_v_3.swf">
<asset id="customize_icon" src="module/collect/collecting_icon_v_1.swf"/>
<asset id="serials" src="module/collect/serials_v_1.swf"/>
 <crop_serieslist>
  
<crop_series id="1" name="葫芦爱茉莉" type="0" visible="1"/>

<crop_series id="2" name="清爽蓝绿" type="0" visible="1"/>

<crop_series id="3" name="情迷紫" type="0" visible="1"/>

<crop_series id="4" name="纯真白" type="0" visible="0"/>

<crop_series id="5" name="热烈红" type="0" visible="0"/>

<crop_series id="6" name="梦幻粉" type="0" visible="0"/>

<crop_series id="7" name="温暖黄" type="0" visible="0"/>

<crop_series id="8" name="爱吃零食" type="0" visible="0"/>

<crop_series id="9" name="祝福树儿" type="1" visible="1"/>

<crop_series id="10" name="祝福花果" type="1" visible="1"/>

<crop_series id="11" name="数字" type="1" visible="0"/>

<crop_series id="12" name="童心未泯" type="1" visible="0"/>

<crop_series id="13" name="腾讯游戏Ⅱ" type="1" visible="0"/>

<crop_series id="14" name="英文字母" type="1" visible="0"/>

<crop_series id="15" name="腾讯游戏Ⅰ" type="1" visible="0"/>

<crop_series id="16" name="狠狠爱" type="1" visible="0"/>

<crop_series id="17" name="下象棋" type="2" visible="1"/>

<crop_series id="18" name="清宫美女" type="2" visible="0"/>

<crop_series id="19" name="QQ家族" type="2" visible="0"/>

<crop_series id="20" name="俄罗斯方块" type="2" visible="0"/>

<crop_series id="21" name="环游世界" type="2" visible="0"/>

<crop_series id="22" name="酷爽夏日" type="2" visible="0"/>

<crop_series id="23" name="12欧洲杯" type="2" visible="0"/>

<crop_series id="24" name="麻将麻将" type="2" visible="0"/>

<crop_series id="51" name="爱吃水果" type="0" visible="1"/>

<crop_series id="52" name="热带水果" type="1" visible="1"/>

<crop_series id="53" name="星座" type="2" visible="1"/>

<crop_series id="54" name="十二生肖" type="2" visible="1"/>

<crop_series id="55" name="表情" type="2" visible="1"/>

<crop_series id="56" name="美花儿Ⅰ" type="1" visible="1"/>

<crop_series id="57" name="美花儿Ⅱ" type="1" visible="1"/>

<crop_series id="58" name="蔬菜Ⅰ" type="0" visible="1"/>

<crop_series id="59" name="蔬菜Ⅱ" type="0" visible="1"/>

<crop_series id="60" name="药用植物" type="1" visible="1"/>

<crop_series id="61" name="童趣" type="2" visible="1"/>

 </crop_serieslist>
</activity> 
	</activity_list>
	<cardsGameRewards>
	  <cardsGameReward id = "1" bid = "1" cId="40" type="1" name="牧草果实" num="50" store="农场仓库" per="个"/>
	  <cardsGameReward id = "2" bid = "2" cId="40" type="1" name="牧草果实" num="200" store="农场仓库" per="个"/>
	  <cardsGameReward id = "3" bid = "3" cId="1" type="6" name="金币" num="100" store="金币帐户" per="个"/>
	  <cardsGameReward id = "4" bid = "4" cId="1" type="6" name="金币" num="300" store="金币帐户" per="个"/>
	  <cardsGameReward id = "9" bid = "9" cId="5" type="9" name="红水晶" num="1" store="农场仓库-材料" per="个"/>
	  <cardsGameReward id = "12" bid = "12" cId="2" type="9" name="绿水晶" num="1" store="农场仓库-材料" per="个"/>
	  <cardsGameReward id = "10" bid = "10" cId="8" type="9" name="橙水晶" num="1" store="农场仓库-材料" per="个"/>
	  <cardsGameReward id = "15" bid = "15" cId="174" type="1" name="晚香玉种子" num="1" store="农场物品包" per="个" exp="18" growTime = "111600" harvestTimes = "5" level = "25" output = "27" sale="31"/>
	  <cardsGameReward id = "16" bid = "16" cId="139" type="1" name="糖槭树花种子" num="1" store="农场物品包" per="个" exp="15" growTime = "72000" harvestTimes = "2" level = "10" output = "22" sale="24"/>
	  <cardsGameReward id = "17" bid = "17" cId="166" type="1" name="七彩果种子" num="1" store="农场物品包" per="个" exp="21" growTime = "169200" harvestTimes = "7" level = "50" output = "30" sale="63"/>
	  <cardsGameReward id = "22" bid = "22" cId="1" type="3" name="普通化肥" num="1" store="农场物品包" per="袋"/>
	  <cardsGameReward id = "23" bid = "23" cId="2" type="3" name="高速化肥" num="1" store="农场物品包" per="袋"/>
	  <cardsGameReward id = "24" bid = "24" cId="3" type="3" name="急速化肥" num="1" store="农场物品包" per="袋"/>
       <cardsGameReward id = "51" bid = "51" cId="200" type="1" name="蓝田玉" num="1" store="农场物品包" per="个"/>
		<cardsGameReward id = "52" bid = "52" cId="702" type="1" name="扶桑神树" num="1" store="农场物品包" per="个"/>
        <cardsGameReward id = "53" bid = "53" cId="704" type="1" name="天女花" num="1" store="农场物品包" per="个"/>
       <cardsGameReward id = "54" bid = "54" cId="710" type="1" name="富贵有鱼" num="1" store="农场物品包" per="个"/>
	<cardsGameReward id = "55" bid = "55" cId="709" type="1" name="福袋树" num="1" store="农场物品包" per="个"/>
	</cardsGameRewards>

<!--免费送礼配置-->
	<freegifts>
        <freegift id="1" bid="1" visible="0" type="1" cId="429" name="鸢尾巧克力" num="1" ground="普通" store="我的物品包" per="个" use="农场普通土地上种植" url="module/ui/icons/award4.png"/>
<freegift id="2" bid="2" visible="0" type="7" cId="1" name="农场经验" num="10" per="点" use="直接增加农场经验" url="module/ui/icons/expicon.png"/>
<freegift id="3" bid="3" visible="0" type="1" cId="207" name="八仙花" num="1" ground="普通" store="我的物品包" per="个" use="农场普通土地上种植" url="module/ui/icons/award1.png"/>
<freegift id="4" bid="4" visible="0" type="10" cId="7" name="黄金飞刀" num="1" store="我的物品包-道具" per="把" use="减少野生动物体力35点，并获得更多奖励" url="module/ui/icons/weapon3.png"/>
<freegift id="5" bid="5" visible="0" type="1" cId="265" name="朱雀花" num="1" ground="红" store="我的物品包" per="个" use="农场红土地上种植" url="module/ui/icons/award5.png"/>
<freegift id="6" bid="6" visible="0" type="24" cId="1" name="普通鱼食" num="1" store="我的物品包-道具" per="袋" use="使用后缩短鱼该阶段生长时间2小时" url="module/ui/icons/fishfood.png"/>
<freegift id="7" bid="7" visible="0" type="1" cId="257" name="孔雀草" num="1" ground="红" store="我的物品包" per="个" use="农场红土地上种植" url="module/ui/icons/award2.png"/>
<freegift id="8" bid="8" visible="0" type="1" cId="40" name="牧草果实" num="50" store="仓库" per="个" use="供牧场喂养动物，也可直接卖掉获得金币" url="module/ui/icons/award3.png"/>
<freegift id="9" bid="9" visible="0" type="10" cId="5" name="青铜飞刀" num="1" store="我的物品包-道具" per="把" use="减少野生动物体力8点，并获得更多奖励" url="module/ui/icons/weapon1.png"/>
<freegift id="10" bid="10" visible="0" type="1" cId="457" name="火鹤花" num="1" ground="普通" store="我的物品包" per="个" use="农场普通土地上种植" url="module/ui/icons/award4.png"/>
<freegift id="11" bid="11" visible="0" type="1" cId="456" name="红露珍" num="1" ground="红" store="我的物品包" per="个" use="农场红土地上种植" url="module/ui/icons/award1.png"/>
<freegift id="12" bid="12" visible="0" type="1" cId="192" name="黄番红花" num="1" ground="普通" store="我的物品包" per="个" use="农场普通土地上种植" url="module/ui/icons/award5.png"/>
<freegift id="13" bid="13" visible="0" type="1" cId="260" name="桉树" num="1" ground="红" store="我的物品包" per="个" use="农场红土地上种植" url="module/ui/icons/award2.png"/>

<freegift id="14" bid="14" visible="0" type="1" cId="753" name="象棋红兵" num="1" ground="普通" store="我的物品包" per="个" use="农场普通土地上种植(有机种子)" url="http://qzonestyle.gtimg.cn/qzone/sns/pics/2012/2012031322.jpg"/>
<freegift id="15" bid="15" visible="0" type="1" cId="751" name="象棋绿卒" num="1" ground="普通" store="我的物品包" per="个" use="农场普通土地上种植(有机种子)" url="http://qzonestyle.gtimg.cn/qzone/sns/pics/2012/2012031325.jpg"/>
<freegift id="16" bid="16" visible="0" type="1" cId="752" name="象棋红仕" num="1" ground="普通" store="我的物品包" per="个" use="农场普通土地上种植(有机种子)" url="http://qzonestyle.gtimg.cn/qzone/sns/pics/2012/2012031323.jpg"/>
<freegift id="17" bid="17" visible="0" type="1" cId="750" name="象棋绿士" num="1" ground="普通" store="我的物品包" per="个" use="农场普通土地上种植(有机种子)" url="http://qzonestyle.gtimg.cn/qzone/sns/pics/2012/2012031324.jpg"/>

<!--七夕-->
<freegift id="18" bid="18" visible="1" type="1" cId="888" name="热恋圣代杯" num="1" ground="普通" store="我的物品包" per="个" use="赶紧在今年七夕给你好友送礼吧" url="module/ui/icons/888.png"/>
<freegift id="19" bid="19" visible="1" type="1" cId="889" name="绝恋甜筒卷" num="1" ground="普通" store="我的物品包" per="个" use="赶紧在今年七夕给你好友送礼吧" url="module/ui/icons/889.png"/>
<freegift id="20" bid="20" visible="1" type="1" cId="890" name="妙恋甜心脆" num="1" ground="普通" store="我的物品包" per="个" use="赶紧在今年七夕给你好友送礼吧" url="module/ui/icons/890.png"/>
<freegift id="21" bid="21" visible="1" type="1" cId="916" name="冰棍如雪" num="1" ground="普通" store="我的物品包" per="个" use="赶紧在今年七夕给你好友送礼吧" url="module/ui/icons/916.png"/>

<freegift id="22" bid="22" visible="1" type="1" cId="917" name="奶油雪人" num="1" ground="普通" store="我的物品包" per="个" use="赶紧在今年七夕给你好友送礼吧" url="module/ui/icons/917.png"/>
<freegift id="23" bid="23" visible="1" type="1" cId="918" name="果冰一夏" num="1" ground="普通" store="我的物品包" per="个" use="赶紧在今年七夕给你好友送礼吧" url="module/ui/icons/918.png"/>
<freegift id="24" bid="24" visible="1" type="1" cId="919" name="欢乐脆皮" num="1" ground="普通" store="我的物品包" per="个" use="赶紧在今年七夕给你好友送礼吧" url="module/ui/icons/919.png"/>
<freegift id="25" bid="25" visible="1" type="1" cId="920" name="冰淇淋盛宴" num="1" ground="普通" store="我的物品包" per="个" use="赶紧在今年七夕给你好友送礼吧" url="module/ui/icons/920.png"/>
	</freegifts>

	<!-- http请求地址及其他杂项环境配置 -->
	<environment>
	</environment>
	
	<!-- 次要异步下载资源 -->
	<secondList type="json"><![CDATA[
	{"secondList" : [      
{"id":"levelUpUI", "src":"module/levelUp/levelUpUI_v_1.swf"},      
{"id":"feedsNPC", "src":"module/NPC/feedsNPC/feedsNPC_v_0.swf"},
{"id":"pengyouHead", "src":"module/NPC/feedsNPC/pengyouHead.jpg"},

{"id":"Fertilizer", "src":"module/ui/tools/Fertilizer_v_7.swf", "className":"Fertilizer"},

{"id":"vipReturnButton", "src":"module/ui/buttons/vipReturnButton.png"},

{"id":"VipSeedTabBg", "src":"module/ui/vipseeds/VipSeedTabBg.jpg"},

{"id":"VipSeedBuyBg", "src":"module/ui/vipseeds/VipSeedBuyBg.jpg"},

{"id":"VipSeedButtonVip", "src":"module/ui/vipseeds/VipSeedButtonVip.png"},

{"id":"VipSeedButtonNonVip", "src":"module/ui/vipseeds/VipSeedButtonNonVip.png"},

{"id":"water", "src":"module/ui/water_v_5.swf"},

{"id":"landExtPic", "src":"module/ui/landExtPic.jpg"},

{"id":"fishNPC", "src":"module/ui/fishNPC1.swf"},
{"id":"recall", "src":"module/ui/recall_v_3.swf"},
{"id":"freegift", "src":"module/ui/freegift_v_6.swf"},{"id":"plane", "src":"module/ui/plane_v_0.swf"},

{"id":"CardsGameWindow", "src":"module/ui/cardgames/CardsGameWindow_v_0.swf"},
{"id":"CardsGameActivityWindow", "src":"module/ui/cardgames/CardsGameWindowActivity_v_0.swf"},

{"id":"QQSecurity", "src":"module/ui/gj_icon_v_0.swf"},
{"id":"QQAlarmClock", "src":"module/ui/nz_icon_v_1.swf"}
]}
		]]>
         </secondList>

	<!-- 每个plugin可能会有多个不同类型的挂载点amount，对于type=0来说，挂载背景上，需要进行深度排序，layer控制是背景还是前景，zIndex控制在同一layer中的先后顺序-->
	<plugins type="json">
		<![CDATA[
		{"plugins":[

	{"id":2, "proxy":"plugins.FairyPluginProxy", "url":"module/plugin/FairyPlugin_v_21.swf","amount":[{"type":0,"zIndex":0,"layer":3,"x":140,"y":510},{"type":5,"tip":"请小仙"},{"type":5,"tip":"升级仙皇"}], 
        "rewards":[
	[{"type" : 7, "num" : 50, "tip" : "经验50"},
	{"id" : 3, "type" : 24, "num" : 1, "tip" : "超级鱼食1袋"}, 
	{"id" : 3, "type" : 3, "num" : 1, "tip" : "急速化肥1袋"}, 
	{"type" : 909090, "num" : 1, "tip" : "普通狗粮1天"}, 
	{"type" : 31, "tip" : "小仙女体验1天"}],
	[{"id" : 32, "type" : 3, "num" : 2, "tip" : "急速有机肥2袋"},
	{"id" : 2, "type" : 24, "num" : 1, "tip" : "高级鱼食1袋"}, 
	{"id" : 7, "type" : 3, "num" : 1, "tip" : "飞速化肥1袋"},
	{"type" : 909090, "num" : 1, "tip" : "普通狗粮1天"},
	{"type" : 31, "tip" : "土地公体验1天"}],
	[{"type" : 6, "num" : 100000, "tip" : "金币100000"}, 
	{"id" : 3, "type" : 24, "num" : 1, "tip" : "超级鱼食1袋"}, 
	{"id" : 3, "type" : 3, "num" : 1, "tip" : "急速化肥1袋"},
	{"type" : 909090, "num" : 1, "tip" : "普通狗粮1天"},
	{"type" : 31, "tip" : "财神爷体验1天"}],
[{"type" : 7, "num" : 50, "tip" : "经验50"},{"type" : 6, "num" : 100000, "tip" : "金币100000"},
	{"id" : 32, "type" : 3, "num" : 1, "tip" : "急速有机肥1袋"},
	{"type" : 909090, "num" : 1, "tip" : "普通狗粮1天"},
	{"type" : 31, "tip" : "无奖励"}]
    ],"fairy" :[{"id":92001,"name":"小仙女","url":"module/plugin/f0.swf"},
	{"id":92002,"name":"土地公公","url":"module/plugin/f1.swf"},
	{"id":92003,"name":"财神爷","url":"module/plugin/f2.swf"},{"id":92004,"name":"仙皇","url":"module/plugin/f3.swf"}]}
	]}
	]]>
	</plugins>

        <!-- ===== PLEASE === DO === NOT === EDIT === CONTENT  ===  BELOW === MANUALLY ===== -->

	<!-- 素材列表-->
	<assets>
        
	</assets>

	<!-- 农场牌子 -->
	<boards type="json">
		<![CDATA[
		{"boards": [
			
		]}
		]]>
	</boards>

	<!-- 农场作物 -->
	<crops type="json">
		<![CDATA[
		{"crops": [
			
		]}
		]]>
	</crops>

	<!-- 农场背景装饰 -->
	<item_info type="json">
		<![CDATA[
		{"item_info": [
			
		]}
		]]>
	</item_info>

	<!-- 可编辑提示语 -->
	<dynamicTips>
		<shopLinkTip value="交流论坛" url="http://www.phpye.com"/>
		<shopVipTip value="尊贵的年费vip用户，快免费购买普通化肥浇作物吧！"/>
		<shopUnvipTip value="年费vip点燃夏日激情，商店普通化肥免费买！"/>
<shopVipDIYTip value="稀有装扮限时购买，截至购买时间：2012年04月28日15点"/>
<!-- 		<shopLinkTip value="可编辑的商店广告位" url="http://game.paipai.com/promote/2011/index_30.shtml?PTAG=32122.1.1"/>
		<shopVipTip value="可编辑的商店vipVIP广告" />
		<shopUnvipTip value="可编辑的商店普通用户提示" />
-->
	</dynamicTips>

</data>
XML;

?>