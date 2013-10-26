<?php
//农场:data_zh_CN_v_17.xml

/*qf_getCache('cropstime', '/nc/');
qf_getCache('cropstype', '/nc/');

foreach($cropstime as $key => $value) {
	$cropstime[$key] = implode(",", $cropstime[$key]);
}
$cropstime[2002];
foreach($cropstype as $key => $value) {
	$maturingTime[$key] = $cropstype[$key]['maturingTime'];
}
*/
$nc_data = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<data>

	<!-- http请求地址及其他杂项环境配置 -->
	<environment>
		<postUrl_qz url="$url/mync.php?" />
		<postUrl_xy_pengyou url="$url/mync.php?" />
		<postUrl_xy_qq url="$url/mync.php?" />
		<fbRequest url="mod=gb_buy" />
		<!-- <cftRequest url="mod=gb_buy" /> -->
		<vipIntroduce url="$url/tools.php?mod=vip" />
		<defaultPhoto url="" />
		<speedReport url="nmc.php?" />
		<items maxid="90012" />
	</environment>

	<!-- 次要异步下载资源 -->
	<secondList type="json">
		<![CDATA[
		{"secondList" : [{"id":"RequestErrorBG", "src":"$url/module/ui/main/RequestError_2.swf", "className":"RequestErrorBG"},
		{"id":"redUpBanner", "src":"$url/module/ui/main/redUpBanner_v_2.swf", "className":"redUpBanner"},
		{"id":"redup", "src":"$url/module/ui/main/RedUp.swf", "className":"Red"},
		{"id":"help", "src":"$url/module/ui/main/outswf/help.swf"},
		{"id":"fresherTask", "src":"$url/module/ui/main/task_v_2.swf", "className":"taskAwokeButton"},
		{"id":"98088", "src":"$url/module/ui/farm/diy/98088.jpg"},
		{"id":"98088b", "src":"$url/module/ui/farm/diy/98088b.jpg"}]}
		]]>
	</secondList>

	<!-- ===== PLEASE === DO === NOT === EDIT === CONTENT  ===  BELOW === MANUALLY ===== -->

	<!-- 素材列表 -->
	<assets>
        
        <asset id="946" src="$url/module/ui/farm/diy/1.jpg"/>
        <asset id="945" src="$url/module/ui/farm/diy/1.swf"/>
        <asset id="947" src="$url/module/ui/farm/diy/1b.jpg"/>
        <asset id="1183" src="$url/module/ui/farm/diy/100.jpg"/>
        <asset id="1182" src="$url/module/ui/farm/diy/100.swf"/>
        <asset id="1184" src="$url/module/ui/farm/diy/100b.jpg"/>
        <asset id="958" src="$url/module/ui/farm/diy/11.jpg"/>
        <asset id="957" src="$url/module/ui/farm/diy/11.swf"/>
        <asset id="959" src="$url/module/ui/farm/diy/11b.jpg"/>
        <asset id="961" src="$url/module/ui/farm/diy/12.jpg"/>
        <asset id="960" src="$url/module/ui/farm/diy/12.swf"/>
        <asset id="962" src="$url/module/ui/farm/diy/12b.jpg"/>
        <asset id="964" src="$url/module/ui/farm/diy/13.jpg"/>
        <asset id="963" src="$url/module/ui/farm/diy/13.swf"/>
        <asset id="965" src="$url/module/ui/farm/diy/13b.jpg"/>
        <asset id="967" src="$url/module/ui/farm/diy/14.jpg"/>
        <asset id="966" src="$url/module/ui/farm/diy/14.swf"/>
        <asset id="968" src="$url/module/ui/farm/diy/14b.jpg"/>
        <asset id="970" src="$url/module/ui/farm/diy/16.jpg"/>
        <asset id="969" src="$url/module/ui/farm/diy/16.swf"/>
        <asset id="971" src="$url/module/ui/farm/diy/16b.jpg"/>
        <asset id="973" src="$url/module/ui/farm/diy/17.jpg"/>
        <asset id="972" src="$url/module/ui/farm/diy/17.swf"/>
        <asset id="974" src="$url/module/ui/farm/diy/17b.jpg"/>
        <asset id="976" src="$url/module/ui/farm/diy/18.jpg"/>
        <asset id="975" src="$url/module/ui/farm/diy/18.swf"/>
        <asset id="977" src="$url/module/ui/farm/diy/18b.jpg"/>
        <asset id="979" src="$url/module/ui/farm/diy/19.jpg"/>
        <asset id="978" src="$url/module/ui/farm/diy/19.swf"/>
        <asset id="980" src="$url/module/ui/farm/diy/19b.jpg"/>
        <asset id="947" src="$url/module/ui/farm/diy/1b.jpg"/>
        <asset id="949" src="$url/module/ui/farm/diy/2.jpg"/>
        <asset id="948" src="$url/module/ui/farm/diy/2.swf"/>
        <asset id="1186" src="$url/module/ui/farm/diy/201.jpg"/>
        <asset id="1185" src="$url/module/ui/farm/diy/201.swf"/>
        <asset id="1187" src="$url/module/ui/farm/diy/201b.jpg"/>
        <asset id="1189" src="$url/module/ui/farm/diy/202.jpg"/>
        <asset id="1188" src="$url/module/ui/farm/diy/202.swf"/>
        <asset id="1190" src="$url/module/ui/farm/diy/202b.jpg"/>
        <asset id="1192" src="$url/module/ui/farm/diy/203.jpg"/>
        <asset id="1191" src="$url/module/ui/farm/diy/203.swf"/>
        <asset id="1193" src="$url/module/ui/farm/diy/203b.jpg"/>
        <asset id="1195" src="$url/module/ui/farm/diy/204.jpg"/>
        <asset id="1194" src="$url/module/ui/farm/diy/204.swf"/>
        <asset id="1196" src="$url/module/ui/farm/diy/204b.jpg"/>
        <asset id="1198" src="$url/module/ui/farm/diy/205.jpg"/>
        <asset id="1197" src="$url/module/ui/farm/diy/205.swf"/>
        <asset id="1199" src="$url/module/ui/farm/diy/205b.jpg"/>
        <asset id="1201" src="$url/module/ui/farm/diy/206.jpg"/>
        <asset id="1200" src="$url/module/ui/farm/diy/206.swf"/>
        <asset id="1202" src="$url/module/ui/farm/diy/206b.jpg"/>
        <asset id="1204" src="$url/module/ui/farm/diy/207.jpg"/>
        <asset id="1203" src="$url/module/ui/farm/diy/207.swf"/>
        <asset id="1205" src="$url/module/ui/farm/diy/207b.jpg"/>
        <asset id="1207" src="$url/module/ui/farm/diy/208.jpg"/>
        <asset id="1206" src="$url/module/ui/farm/diy/208.swf"/>
        <asset id="1208" src="$url/module/ui/farm/diy/208b.jpg"/>
        <asset id="1210" src="$url/module/ui/farm/diy/209.jpg"/>
        <asset id="1209" src="$url/module/ui/farm/diy/209.swf"/>
        <asset id="1211" src="$url/module/ui/farm/diy/209b.jpg"/>
        <asset id="981" src="$url/module/ui/farm/diy/21.jpg"/>
        <asset id="1213" src="$url/module/ui/farm/diy/210.jpg"/>
        <asset id="1212" src="$url/module/ui/farm/diy/210.swf"/>
        <asset id="1214" src="$url/module/ui/farm/diy/210b.jpg"/>
        <asset id="1216" src="$url/module/ui/farm/diy/211.jpg"/>
        <asset id="1215" src="$url/module/ui/farm/diy/211.swf"/>
        <asset id="1217" src="$url/module/ui/farm/diy/211b.jpg"/>
        <asset id="1219" src="$url/module/ui/farm/diy/212.jpg"/>
        <asset id="1218" src="$url/module/ui/farm/diy/212.swf"/>
        <asset id="1220" src="$url/module/ui/farm/diy/212b.jpg"/>
        <asset id="1222" src="$url/module/ui/farm/diy/213.jpg"/>
        <asset id="1221" src="$url/module/ui/farm/diy/213.swf"/>
        <asset id="1223" src="$url/module/ui/farm/diy/213b.jpg"/>
        <asset id="1225" src="$url/module/ui/farm/diy/214.jpg"/>
        <asset id="1224" src="$url/module/ui/farm/diy/214.swf"/>
        <asset id="1226" src="$url/module/ui/farm/diy/214b.jpg"/>
        <asset id="1228" src="$url/module/ui/farm/diy/215.jpg"/>
        <asset id="1227" src="$url/module/ui/farm/diy/215.swf"/>
        <asset id="1229" src="$url/module/ui/farm/diy/215b.jpg"/>
        <asset id="1231" src="$url/module/ui/farm/diy/216.jpg"/>
        <asset id="1230" src="$url/module/ui/farm/diy/216.swf"/>
        <asset id="1232" src="$url/module/ui/farm/diy/216b.jpg"/>
        <asset id="1234" src="$url/module/ui/farm/diy/217.jpg"/>
        <asset id="1233" src="$url/module/ui/farm/diy/217.swf"/>
        <asset id="1235" src="$url/module/ui/farm/diy/217b.jpg"/>
        <asset id="1237" src="$url/module/ui/farm/diy/218.jpg"/>
        <asset id="1236" src="$url/module/ui/farm/diy/218.swf"/>
        <asset id="1238" src="$url/module/ui/farm/diy/218b.jpg"/>
        <asset id="1240" src="$url/module/ui/farm/diy/219.jpg"/>
        <asset id="1239" src="$url/module/ui/farm/diy/219.swf"/>
        <asset id="1241" src="$url/module/ui/farm/diy/219b.jpg"/>
        <asset id="982" src="$url/module/ui/farm/diy/21b.jpg"/>
        <asset id="984" src="$url/module/ui/farm/diy/22.jpg"/>
        <asset id="983" src="$url/module/ui/farm/diy/22.swf"/>
        <asset id="1243" src="$url/module/ui/farm/diy/220.jpg"/>
        <asset id="1242" src="$url/module/ui/farm/diy/220.swf"/>
        <asset id="1244" src="$url/module/ui/farm/diy/220b.jpg"/>
        <asset id="1246" src="$url/module/ui/farm/diy/221.jpg"/>
        <asset id="1245" src="$url/module/ui/farm/diy/221.swf"/>
        <asset id="1247" src="$url/module/ui/farm/diy/221b.jpg"/>
        <asset id="1249" src="$url/module/ui/farm/diy/222.jpg"/>
        <asset id="1248" src="$url/module/ui/farm/diy/222.swf"/>
        <asset id="1250" src="$url/module/ui/farm/diy/222b.jpg"/>
        <asset id="1252" src="$url/module/ui/farm/diy/223.jpg"/>
        <asset id="1251" src="$url/module/ui/farm/diy/223.swf"/>
        <asset id="1253" src="$url/module/ui/farm/diy/223b.jpg"/>
        <asset id="1255" src="$url/module/ui/farm/diy/224.jpg"/>
        <asset id="1254" src="$url/module/ui/farm/diy/224.swf"/>
        <asset id="1256" src="$url/module/ui/farm/diy/224b.jpg"/>
        <asset id="1258" src="$url/module/ui/farm/diy/225.jpg"/>
        <asset id="1257" src="$url/module/ui/farm/diy/225.swf"/>
        <asset id="1259" src="$url/module/ui/farm/diy/225b.jpg"/>
        <asset id="1261" src="$url/module/ui/farm/diy/226.jpg"/>
        <asset id="1260" src="$url/module/ui/farm/diy/226.swf"/>
        <asset id="1262" src="$url/module/ui/farm/diy/226b.jpg"/>
        <asset id="1264" src="$url/module/ui/farm/diy/227.jpg"/>
        <asset id="1263" src="$url/module/ui/farm/diy/227.swf"/>
        <asset id="1265" src="$url/module/ui/farm/diy/227b.jpg"/>
        <asset id="1267" src="$url/module/ui/farm/diy/228.jpg"/>
        <asset id="1266" src="$url/module/ui/farm/diy/228.swf"/>
        <asset id="1268" src="$url/module/ui/farm/diy/228b.jpg"/>
        <asset id="1270" src="$url/module/ui/farm/diy/229.jpg"/>
        <asset id="1269" src="$url/module/ui/farm/diy/229.swf"/>
        <asset id="1271" src="$url/module/ui/farm/diy/229b.jpg"/>
        <asset id="985" src="$url/module/ui/farm/diy/22b.jpg"/>
        <asset id="987" src="$url/module/ui/farm/diy/23.jpg"/>
        <asset id="986" src="$url/module/ui/farm/diy/23.swf"/>
        <asset id="1273" src="$url/module/ui/farm/diy/230.jpg"/>
        <asset id="1272" src="$url/module/ui/farm/diy/230.swf"/>
        <asset id="1274" src="$url/module/ui/farm/diy/230b.jpg"/>
        <asset id="1276" src="$url/module/ui/farm/diy/231.jpg"/>
        <asset id="1275" src="$url/module/ui/farm/diy/231.swf"/>
        <asset id="1277" src="$url/module/ui/farm/diy/231b.jpg"/>
        <asset id="1279" src="$url/module/ui/farm/diy/232.jpg"/>
        <asset id="1278" src="$url/module/ui/farm/diy/232.swf"/>
        <asset id="1280" src="$url/module/ui/farm/diy/232b.jpg"/>
        <asset id="1282" src="$url/module/ui/farm/diy/233.jpg"/>
        <asset id="1281" src="$url/module/ui/farm/diy/233.swf"/>
        <asset id="1283" src="$url/module/ui/farm/diy/233b.jpg"/>
        <asset id="1285" src="$url/module/ui/farm/diy/234.jpg"/>
        <asset id="1284" src="$url/module/ui/farm/diy/234.swf"/>
        <asset id="1286" src="$url/module/ui/farm/diy/234b.jpg"/>
        <asset id="1288" src="$url/module/ui/farm/diy/235.jpg"/>
        <asset id="1287" src="$url/module/ui/farm/diy/235.swf"/>
        <asset id="1289" src="$url/module/ui/farm/diy/235b.jpg"/>
        <asset id="1291" src="$url/module/ui/farm/diy/236.jpg"/>
        <asset id="1290" src="$url/module/ui/farm/diy/236.swf"/>
        <asset id="1292" src="$url/module/ui/farm/diy/236b.jpg"/>
        <asset id="1294" src="$url/module/ui/farm/diy/237.jpg"/>
        <asset id="1293" src="$url/module/ui/farm/diy/237.swf"/>
        <asset id="1295" src="$url/module/ui/farm/diy/237b.jpg"/>
        <asset id="1297" src="$url/module/ui/farm/diy/238.jpg"/>
        <asset id="1296" src="$url/module/ui/farm/diy/238.swf"/>
        <asset id="1298" src="$url/module/ui/farm/diy/238b.jpg"/>
        <asset id="1300" src="$url/module/ui/farm/diy/239.jpg"/>
        <asset id="1299" src="$url/module/ui/farm/diy/239.swf"/>
        <asset id="1301" src="$url/module/ui/farm/diy/239b.jpg"/>
        <asset id="988" src="$url/module/ui/farm/diy/23b.jpg"/>
        <asset id="990" src="$url/module/ui/farm/diy/24.jpg"/>
        <asset id="989" src="$url/module/ui/farm/diy/24.swf"/>
        <asset id="1303" src="$url/module/ui/farm/diy/240.jpg"/>
        <asset id="1302" src="$url/module/ui/farm/diy/240.swf"/>
        <asset id="1304" src="$url/module/ui/farm/diy/240b.jpg"/>
        <asset id="1306" src="$url/module/ui/farm/diy/241.jpg"/>
        <asset id="1305" src="$url/module/ui/farm/diy/241.swf"/>
        <asset id="1307" src="$url/module/ui/farm/diy/241b.jpg"/>
        <asset id="1309" src="$url/module/ui/farm/diy/242.jpg"/>
        <asset id="1308" src="$url/module/ui/farm/diy/242.swf"/>
        <asset id="1310" src="$url/module/ui/farm/diy/242b.jpg"/>
        <asset id="1312" src="$url/module/ui/farm/diy/243.jpg"/>
        <asset id="1311" src="$url/module/ui/farm/diy/243.swf"/>
        <asset id="1313" src="$url/module/ui/farm/diy/243b.jpg"/>
        <asset id="1315" src="$url/module/ui/farm/diy/244.jpg"/>
        <asset id="1314" src="$url/module/ui/farm/diy/244.swf"/>
        <asset id="1316" src="$url/module/ui/farm/diy/244b.jpg"/>
        <asset id="1318" src="$url/module/ui/farm/diy/245.jpg"/>
        <asset id="1317" src="$url/module/ui/farm/diy/245.swf"/>
        <asset id="1319" src="$url/module/ui/farm/diy/245b.jpg"/>
        <asset id="1321" src="$url/module/ui/farm/diy/246.jpg"/>
        <asset id="1320" src="$url/module/ui/farm/diy/246.swf"/>
        <asset id="1322" src="$url/module/ui/farm/diy/246b.jpg"/>
        <asset id="1324" src="$url/module/ui/farm/diy/247.jpg"/>
        <asset id="1323" src="$url/module/ui/farm/diy/247.swf"/>
        <asset id="1325" src="$url/module/ui/farm/diy/247b.jpg"/>
        <asset id="1327" src="$url/module/ui/farm/diy/248.jpg"/>
        <asset id="1326" src="$url/module/ui/farm/diy/248.swf"/>
        <asset id="1328" src="$url/module/ui/farm/diy/248b.jpg"/>
        <asset id="1330" src="$url/module/ui/farm/diy/249.jpg"/>
        <asset id="1329" src="$url/module/ui/farm/diy/249.swf"/>
        <asset id="1331" src="$url/module/ui/farm/diy/249b.jpg"/>
        <asset id="991" src="$url/module/ui/farm/diy/24b.jpg"/>
        <asset id="1333" src="$url/module/ui/farm/diy/250.jpg"/>
        <asset id="1332" src="$url/module/ui/farm/diy/250.swf"/>
        <asset id="1334" src="$url/module/ui/farm/diy/250b.jpg"/>
        <asset id="1336" src="$url/module/ui/farm/diy/251.jpg"/>
        <asset id="1335" src="$url/module/ui/farm/diy/251.swf"/>
        <asset id="1337" src="$url/module/ui/farm/diy/251b.jpg"/>
        <asset id="1339" src="$url/module/ui/farm/diy/252.jpg"/>
        <asset id="1338" src="$url/module/ui/farm/diy/252.swf"/>
        <asset id="1340" src="$url/module/ui/farm/diy/252b.jpg"/>
        <asset id="1342" src="$url/module/ui/farm/diy/253.jpg"/>
        <asset id="1341" src="$url/module/ui/farm/diy/253.swf"/>
        <asset id="1343" src="$url/module/ui/farm/diy/253b.jpg"/>
        <asset id="1345" src="$url/module/ui/farm/diy/254.jpg"/>
        <asset id="1344" src="$url/module/ui/farm/diy/254.swf"/>
        <asset id="1346" src="$url/module/ui/farm/diy/254b.jpg"/>
        <asset id="1348" src="$url/module/ui/farm/diy/255.jpg"/>
        <asset id="1347" src="$url/module/ui/farm/diy/255.swf"/>
        <asset id="1349" src="$url/module/ui/farm/diy/255b.jpg"/>
        <asset id="1351" src="$url/module/ui/farm/diy/256.jpg"/>
        <asset id="1350" src="$url/module/ui/farm/diy/256.swf"/>
        <asset id="1352" src="$url/module/ui/farm/diy/256b.jpg"/>
        <asset id="1354" src="$url/module/ui/farm/diy/257.jpg"/>
        <asset id="1353" src="$url/module/ui/farm/diy/257.swf"/>
        <asset id="1355" src="$url/module/ui/farm/diy/257b.jpg"/>
        <asset id="1357" src="$url/module/ui/farm/diy/258.jpg"/>
        <asset id="1356" src="$url/module/ui/farm/diy/258.swf"/>
        <asset id="1358" src="$url/module/ui/farm/diy/258b.jpg"/>
        <asset id="1360" src="$url/module/ui/farm/diy/259.jpg"/>
        <asset id="1359" src="$url/module/ui/farm/diy/259.swf"/>
        <asset id="1361" src="$url/module/ui/farm/diy/259b.jpg"/>
        <asset id="992" src="$url/module/ui/farm/diy/26.jpg"/>
        <asset id="1363" src="$url/module/ui/farm/diy/260.jpg"/>
        <asset id="1362" src="$url/module/ui/farm/diy/260.swf"/>
        <asset id="1364" src="$url/module/ui/farm/diy/260b.jpg"/>
        <asset id="1366" src="$url/module/ui/farm/diy/261.jpg"/>
        <asset id="1365" src="$url/module/ui/farm/diy/261.swf"/>
        <asset id="1367" src="$url/module/ui/farm/diy/261b.jpg"/>
        <asset id="1369" src="$url/module/ui/farm/diy/262.jpg"/>
        <asset id="1368" src="$url/module/ui/farm/diy/262.swf"/>
        <asset id="1370" src="$url/module/ui/farm/diy/262b.jpg"/>
        <asset id="1372" src="$url/module/ui/farm/diy/263.jpg"/>
        <asset id="1371" src="$url/module/ui/farm/diy/263.swf"/>
        <asset id="1373" src="$url/module/ui/farm/diy/263b.jpg"/>
        <asset id="1375" src="$url/module/ui/farm/diy/264.jpg"/>
        <asset id="1374" src="$url/module/ui/farm/diy/264.swf"/>
        <asset id="1376" src="$url/module/ui/farm/diy/264b.jpg"/>
        <asset id="1378" src="$url/module/ui/farm/diy/265.jpg"/>
        <asset id="1377" src="$url/module/ui/farm/diy/265.swf"/>
        <asset id="1379" src="$url/module/ui/farm/diy/265b.jpg"/>
        <asset id="1381" src="$url/module/ui/farm/diy/266.jpg"/>
        <asset id="1380" src="$url/module/ui/farm/diy/266.swf"/>
        <asset id="1382" src="$url/module/ui/farm/diy/266b.jpg"/>
        <asset id="1384" src="$url/module/ui/farm/diy/267.jpg"/>
        <asset id="1383" src="$url/module/ui/farm/diy/267.swf"/>
        <asset id="1385" src="$url/module/ui/farm/diy/267b.jpg"/>
        <asset id="1387" src="$url/module/ui/farm/diy/268.jpg"/>
        <asset id="1386" src="$url/module/ui/farm/diy/268.swf"/>
        <asset id="1388" src="$url/module/ui/farm/diy/268b.jpg"/>
        <asset id="1390" src="$url/module/ui/farm/diy/269.jpg"/>
        <asset id="1389" src="$url/module/ui/farm/diy/269.swf"/>
        <asset id="1391" src="$url/module/ui/farm/diy/269b.jpg"/>
        <asset id="993" src="$url/module/ui/farm/diy/26b.jpg"/>
        <asset id="995" src="$url/module/ui/farm/diy/27.jpg"/>
        <asset id="994" src="$url/module/ui/farm/diy/27.swf"/>
        <asset id="1393" src="$url/module/ui/farm/diy/270.jpg"/>
        <asset id="1392" src="$url/module/ui/farm/diy/270.swf"/>
        <asset id="1394" src="$url/module/ui/farm/diy/270b.jpg"/>
        <asset id="1396" src="$url/module/ui/farm/diy/271.jpg"/>
        <asset id="1395" src="$url/module/ui/farm/diy/271.swf"/>
        <asset id="1397" src="$url/module/ui/farm/diy/271b.jpg"/>
        <asset id="1399" src="$url/module/ui/farm/diy/272.jpg"/>
        <asset id="1398" src="$url/module/ui/farm/diy/272.swf"/>
        <asset id="1400" src="$url/module/ui/farm/diy/272b.jpg"/>
        <asset id="1402" src="$url/module/ui/farm/diy/273.jpg"/>
        <asset id="1401" src="$url/module/ui/farm/diy/273.swf"/>
        <asset id="1403" src="$url/module/ui/farm/diy/273b.jpg"/>
        <asset id="1405" src="$url/module/ui/farm/diy/274.jpg"/>
        <asset id="1404" src="$url/module/ui/farm/diy/274.swf"/>
        <asset id="1406" src="$url/module/ui/farm/diy/274b.jpg"/>
        <asset id="1408" src="$url/module/ui/farm/diy/275.jpg"/>
        <asset id="1407" src="$url/module/ui/farm/diy/275.swf"/>
        <asset id="1409" src="$url/module/ui/farm/diy/275b.jpg"/>
        <asset id="1411" src="$url/module/ui/farm/diy/276.jpg"/>
        <asset id="1410" src="$url/module/ui/farm/diy/276.swf"/>
        <asset id="1412" src="$url/module/ui/farm/diy/276b.jpg"/>
        <asset id="1414" src="$url/module/ui/farm/diy/277.jpg"/>
        <asset id="1413" src="$url/module/ui/farm/diy/277.swf"/>
        <asset id="1415" src="$url/module/ui/farm/diy/277b.jpg"/>
        <asset id="1417" src="$url/module/ui/farm/diy/278.jpg"/>
        <asset id="1416" src="$url/module/ui/farm/diy/278.swf"/>
        <asset id="1418" src="$url/module/ui/farm/diy/278b.jpg"/>
        <asset id="1420" src="$url/module/ui/farm/diy/279.jpg"/>
        <asset id="1419" src="$url/module/ui/farm/diy/279.swf"/>
        <asset id="1421" src="$url/module/ui/farm/diy/279b.jpg"/>
        <asset id="996" src="$url/module/ui/farm/diy/27b.jpg"/>
        <asset id="998" src="$url/module/ui/farm/diy/28.jpg"/>
        <asset id="997" src="$url/module/ui/farm/diy/28.swf"/>
        <asset id="1423" src="$url/module/ui/farm/diy/280.jpg"/>
        <asset id="1422" src="$url/module/ui/farm/diy/280.swf"/>
        <asset id="1424" src="$url/module/ui/farm/diy/280b.jpg"/>
        <asset id="1426" src="$url/module/ui/farm/diy/281.jpg"/>
        <asset id="1425" src="$url/module/ui/farm/diy/281.swf"/>
        <asset id="1427" src="$url/module/ui/farm/diy/281b.jpg"/>
        <asset id="1429" src="$url/module/ui/farm/diy/282.jpg"/>
        <asset id="1428" src="$url/module/ui/farm/diy/282.swf"/>
        <asset id="1430" src="$url/module/ui/farm/diy/282b.jpg"/>
        <asset id="1432" src="$url/module/ui/farm/diy/283.jpg"/>
        <asset id="1431" src="$url/module/ui/farm/diy/283.swf"/>
        <asset id="1433" src="$url/module/ui/farm/diy/283b.jpg"/>
        <asset id="1435" src="$url/module/ui/farm/diy/284.jpg"/>
        <asset id="1434" src="$url/module/ui/farm/diy/284.swf"/>
        <asset id="1436" src="$url/module/ui/farm/diy/284b.jpg"/>
        <asset id="1438" src="$url/module/ui/farm/diy/285.jpg"/>
        <asset id="1437" src="$url/module/ui/farm/diy/285.swf"/>
        <asset id="1439" src="$url/module/ui/farm/diy/285b.jpg"/>
        <asset id="1441" src="$url/module/ui/farm/diy/286.jpg"/>
        <asset id="1440" src="$url/module/ui/farm/diy/286.swf"/>
        <asset id="1442" src="$url/module/ui/farm/diy/286b.jpg"/>
        <asset id="1444" src="$url/module/ui/farm/diy/287.jpg"/>
        <asset id="1443" src="$url/module/ui/farm/diy/287.swf"/>
        <asset id="1445" src="$url/module/ui/farm/diy/287b.jpg"/>
        <asset id="1447" src="$url/module/ui/farm/diy/288.jpg"/>
        <asset id="1446" src="$url/module/ui/farm/diy/288.swf"/>
        <asset id="1448" src="$url/module/ui/farm/diy/288b.jpg"/>
        <asset id="999" src="$url/module/ui/farm/diy/28b.jpg"/>
        <asset id="1001" src="$url/module/ui/farm/diy/29.jpg"/>
        <asset id="1000" src="$url/module/ui/farm/diy/29.swf"/>
        <asset id="1450" src="$url/module/ui/farm/diy/293.jpg"/>
        <asset id="1449" src="$url/module/ui/farm/diy/293.swf"/>
        <asset id="1451" src="$url/module/ui/farm/diy/293b.jpg"/>
        <asset id="1453" src="$url/module/ui/farm/diy/294.jpg"/>
        <asset id="1452" src="$url/module/ui/farm/diy/294.swf"/>
        <asset id="1454" src="$url/module/ui/farm/diy/294b.jpg"/>
        <asset id="1456" src="$url/module/ui/farm/diy/295.jpg"/>
        <asset id="1455" src="$url/module/ui/farm/diy/295.swf"/>
        <asset id="1457" src="$url/module/ui/farm/diy/295b.jpg"/>
        <asset id="1459" src="$url/module/ui/farm/diy/296.jpg"/>
        <asset id="1458" src="$url/module/ui/farm/diy/296.swf"/>
        <asset id="1460" src="$url/module/ui/farm/diy/296b.jpg"/>
        <asset id="1462" src="$url/module/ui/farm/diy/297.jpg"/>
        <asset id="1461" src="$url/module/ui/farm/diy/297.swf"/>
        <asset id="1463" src="$url/module/ui/farm/diy/297b.jpg"/>
        <asset id="1465" src="$url/module/ui/farm/diy/298.jpg"/>
        <asset id="1464" src="$url/module/ui/farm/diy/298.swf"/>
        <asset id="1466" src="$url/module/ui/farm/diy/298b.jpg"/>
        <asset id="1468" src="$url/module/ui/farm/diy/299.jpg"/>
        <asset id="1467" src="$url/module/ui/farm/diy/299.swf"/>
        <asset id="1469" src="$url/module/ui/farm/diy/299b.jpg"/>
        <asset id="1002" src="$url/module/ui/farm/diy/29b.jpg"/>
        <asset id="950" src="$url/module/ui/farm/diy/2b.jpg"/>
        <asset id="952" src="$url/module/ui/farm/diy/3.jpg"/>
        <asset id="951" src="$url/module/ui/farm/diy/3.swf"/>
        <asset id="1471" src="$url/module/ui/farm/diy/300.jpg"/>
        <asset id="1470" src="$url/module/ui/farm/diy/300.swf"/>
        <asset id="1472" src="$url/module/ui/farm/diy/300b.jpg"/>
        <asset id="1474" src="$url/module/ui/farm/diy/301.jpg"/>
        <asset id="1473" src="$url/module/ui/farm/diy/301.swf"/>
        <asset id="1475" src="$url/module/ui/farm/diy/301b.jpg"/>
        <asset id="1477" src="$url/module/ui/farm/diy/302.jpg"/>
        <asset id="1476" src="$url/module/ui/farm/diy/302.swf"/>
        <asset id="1478" src="$url/module/ui/farm/diy/302b.jpg"/>
        <asset id="1480" src="$url/module/ui/farm/diy/303.jpg"/>
        <asset id="1479" src="$url/module/ui/farm/diy/303.swf"/>
        <asset id="1481" src="$url/module/ui/farm/diy/303b.jpg"/>
        <asset id="1483" src="$url/module/ui/farm/diy/304.jpg"/>
        <asset id="1482" src="$url/module/ui/farm/diy/304.swf"/>
        <asset id="1484" src="$url/module/ui/farm/diy/304b.jpg"/>
        <asset id="1486" src="$url/module/ui/farm/diy/305.jpg"/>
        <asset id="1485" src="$url/module/ui/farm/diy/305.swf"/>
        <asset id="1487" src="$url/module/ui/farm/diy/305b.jpg"/>
        <asset id="1489" src="$url/module/ui/farm/diy/306.jpg"/>
        <asset id="1488" src="$url/module/ui/farm/diy/306.swf"/>
        <asset id="1490" src="$url/module/ui/farm/diy/306b.jpg"/>
        <asset id="1492" src="$url/module/ui/farm/diy/307.jpg"/>
        <asset id="1491" src="$url/module/ui/farm/diy/307.swf"/>
        <asset id="1493" src="$url/module/ui/farm/diy/307b.jpg"/>
        <asset id="1495" src="$url/module/ui/farm/diy/308.jpg"/>
        <asset id="1494" src="$url/module/ui/farm/diy/308.swf"/>
        <asset id="1496" src="$url/module/ui/farm/diy/308b.jpg"/>
        <asset id="1498" src="$url/module/ui/farm/diy/309.jpg"/>
        <asset id="1497" src="$url/module/ui/farm/diy/309.swf"/>
        <asset id="1499" src="$url/module/ui/farm/diy/309b.jpg"/>
        <asset id="1003" src="$url/module/ui/farm/diy/31.jpg"/>
        <asset id="1501" src="$url/module/ui/farm/diy/310.jpg"/>
        <asset id="1500" src="$url/module/ui/farm/diy/310.swf"/>
        <asset id="1502" src="$url/module/ui/farm/diy/310b.jpg"/>
        <asset id="1504" src="$url/module/ui/farm/diy/311.jpg"/>
        <asset id="1503" src="$url/module/ui/farm/diy/311.swf"/>
        <asset id="1505" src="$url/module/ui/farm/diy/311b.jpg"/>
        <asset id="1507" src="$url/module/ui/farm/diy/312.jpg"/>
        <asset id="1506" src="$url/module/ui/farm/diy/312.swf"/>
        <asset id="1508" src="$url/module/ui/farm/diy/312b.jpg"/>
        <asset id="1891" src="$url/module/ui/farm/diy/313.jpg"/>
        <asset id="1890" src="$url/module/ui/farm/diy/313.swf"/>
        <asset id="1892" src="$url/module/ui/farm/diy/313b.jpg"/>
        <asset id="1894" src="$url/module/ui/farm/diy/314.jpg"/>
        <asset id="1893" src="$url/module/ui/farm/diy/314.swf"/>
        <asset id="1895" src="$url/module/ui/farm/diy/314b.jpg"/>
        <asset id="1897" src="$url/module/ui/farm/diy/315.jpg"/>
        <asset id="1896" src="$url/module/ui/farm/diy/315.swf"/>
        <asset id="1898" src="$url/module/ui/farm/diy/315b.jpg"/>
        <asset id="1900" src="$url/module/ui/farm/diy/316.jpg"/>
        <asset id="1899" src="$url/module/ui/farm/diy/316.swf"/>
        <asset id="1901" src="$url/module/ui/farm/diy/316b.jpg"/>
        <asset id="1004" src="$url/module/ui/farm/diy/31b.jpg"/>
        <asset id="3447" src="$url/module/ui/farm/diy/321.jpg"/>
        <asset id="3446" src="$url/module/ui/farm/diy/321.swf"/>
        <asset id="3448" src="$url/module/ui/farm/diy/321b.jpg"/>
        <asset id="3450" src="$url/module/ui/farm/diy/322.jpg"/>
        <asset id="3449" src="$url/module/ui/farm/diy/322.swf"/>
        <asset id="3451" src="$url/module/ui/farm/diy/322b.jpg"/>
        <asset id="3453" src="$url/module/ui/farm/diy/323.jpg"/>
        <asset id="3452" src="$url/module/ui/farm/diy/323.swf"/>
        <asset id="3454" src="$url/module/ui/farm/diy/323b.jpg"/>
        <asset id="3456" src="$url/module/ui/farm/diy/324.jpg"/>
        <asset id="3455" src="$url/module/ui/farm/diy/324.swf"/>
        <asset id="3457" src="$url/module/ui/farm/diy/324b.jpg"/>
        <asset id="3573" src="$url/module/ui/farm/diy/325.jpg"/>
        <asset id="3572" src="$url/module/ui/farm/diy/325.swf"/>
        <asset id="3574" src="$url/module/ui/farm/diy/325b.jpg"/>
        <asset id="3576" src="$url/module/ui/farm/diy/326.jpg"/>
        <asset id="3575" src="$url/module/ui/farm/diy/326.swf"/>
        <asset id="3577" src="$url/module/ui/farm/diy/326b.jpg"/>
        <asset id="3579" src="$url/module/ui/farm/diy/327.jpg"/>
        <asset id="3578" src="$url/module/ui/farm/diy/327.swf"/>
        <asset id="3580" src="$url/module/ui/farm/diy/327b.jpg"/>
        <asset id="3582" src="$url/module/ui/farm/diy/328.jpg"/>
        <asset id="3581" src="$url/module/ui/farm/diy/328.swf"/>
        <asset id="3583" src="$url/module/ui/farm/diy/328b.jpg"/>
        <asset id="3661" src="$url/module/ui/farm/diy/329.jpg"/>
        <asset id="3660" src="$url/module/ui/farm/diy/329.swf"/>
        <asset id="3662" src="$url/module/ui/farm/diy/329b.jpg"/>
        <asset id="3664" src="$url/module/ui/farm/diy/330.jpg"/>
        <asset id="3663" src="$url/module/ui/farm/diy/330.swf"/>
        <asset id="3665" src="$url/module/ui/farm/diy/330b.jpg"/>
        <asset id="3667" src="$url/module/ui/farm/diy/331.jpg"/>
        <asset id="3666" src="$url/module/ui/farm/diy/331.swf"/>
        <asset id="3668" src="$url/module/ui/farm/diy/331b.jpg"/>
        <asset id="3670" src="$url/module/ui/farm/diy/332.jpg"/>
        <asset id="3669" src="$url/module/ui/farm/diy/332.swf"/>
        <asset id="3671" src="$url/module/ui/farm/diy/332b.jpg"/>
        <asset id="3697" src="$url/module/ui/farm/diy/333.jpg"/>
        <asset id="3696" src="$url/module/ui/farm/diy/333.swf"/>
        <asset id="3698" src="$url/module/ui/farm/diy/333b.jpg"/>
        <asset id="3700" src="$url/module/ui/farm/diy/334.jpg"/>
        <asset id="3699" src="$url/module/ui/farm/diy/334.swf"/>
        <asset id="3701" src="$url/module/ui/farm/diy/334b.jpg"/>
        <asset id="3703" src="$url/module/ui/farm/diy/335.jpg"/>
        <asset id="3702" src="$url/module/ui/farm/diy/335.swf"/>
        <asset id="3704" src="$url/module/ui/farm/diy/335b.jpg"/>
        <asset id="3706" src="$url/module/ui/farm/diy/336.jpg"/>
        <asset id="3705" src="$url/module/ui/farm/diy/336.swf"/>
        <asset id="3707" src="$url/module/ui/farm/diy/336b.jpg"/>
        <asset id="4352" src="$url/module/ui/farm/diy/337.jpg"/>
        <asset id="4351" src="$url/module/ui/farm/diy/337.swf"/>
        <asset id="4353" src="$url/module/ui/farm/diy/337b.jpg"/>
        <asset id="4355" src="$url/module/ui/farm/diy/338.jpg"/>
        <asset id="4354" src="$url/module/ui/farm/diy/338.swf"/>
        <asset id="4356" src="$url/module/ui/farm/diy/338b.jpg"/>
        <asset id="4358" src="$url/module/ui/farm/diy/339.jpg"/>
        <asset id="4357" src="$url/module/ui/farm/diy/339.swf"/>
        <asset id="4359" src="$url/module/ui/farm/diy/339b.jpg"/>
        <asset id="4361" src="$url/module/ui/farm/diy/340.jpg"/>
        <asset id="4360" src="$url/module/ui/farm/diy/340.swf"/>
        <asset id="4362" src="$url/module/ui/farm/diy/340b.jpg"/>
        <asset id="4622" src="$url/module/ui/farm/diy/341.jpg"/>
        <asset id="4621" src="$url/module/ui/farm/diy/341.swf"/>
        <asset id="4623" src="$url/module/ui/farm/diy/341b.jpg"/>
        <asset id="4625" src="$url/module/ui/farm/diy/342.jpg"/>
        <asset id="4624" src="$url/module/ui/farm/diy/342.swf"/>
        <asset id="4626" src="$url/module/ui/farm/diy/342b.jpg"/>
        <asset id="4628" src="$url/module/ui/farm/diy/343.jpg"/>
        <asset id="4627" src="$url/module/ui/farm/diy/343.swf"/>
        <asset id="4629" src="$url/module/ui/farm/diy/343b.jpg"/>
        <asset id="4631" src="$url/module/ui/farm/diy/344.jpg"/>
        <asset id="4630" src="$url/module/ui/farm/diy/344.swf"/>
        <asset id="4632" src="$url/module/ui/farm/diy/344b.jpg"/>
        <asset id="6368" src="$url/module/ui/farm/diy/345.jpg"/>
        <asset id="6367" src="$url/module/ui/farm/diy/345.swf"/>
        <asset id="6369" src="$url/module/ui/farm/diy/345b.jpg"/>
        <asset id="6603" src="$url/module/ui/farm/diy/346.jpg"/>
        <asset id="6602" src="$url/module/ui/farm/diy/346.swf"/>
        <asset id="6604" src="$url/module/ui/farm/diy/346b.jpg"/>
        <asset id="6606" src="$url/module/ui/farm/diy/347.jpg"/>
        <asset id="6605" src="$url/module/ui/farm/diy/347.swf"/>
        <asset id="6607" src="$url/module/ui/farm/diy/347b.jpg"/>
        <asset id="6609" src="$url/module/ui/farm/diy/348.jpg"/>
        <asset id="6608" src="$url/module/ui/farm/diy/348.swf"/>
        <asset id="6610" src="$url/module/ui/farm/diy/348b.jpg"/>
        <asset id="7983" src="$url/module/ui/farm/diy/349.jpg"/>
        <asset id="7982" src="$url/module/ui/farm/diy/349.swf"/>
        <asset id="7984" src="$url/module/ui/farm/diy/349b.jpg"/>
        <asset id="7986" src="$url/module/ui/farm/diy/350.jpg"/>
        <asset id="7985" src="$url/module/ui/farm/diy/350.swf"/>
        <asset id="7987" src="$url/module/ui/farm/diy/350b.jpg"/>
        <asset id="7989" src="$url/module/ui/farm/diy/351.jpg"/>
        <asset id="7988" src="$url/module/ui/farm/diy/351.swf"/>
        <asset id="7990" src="$url/module/ui/farm/diy/351b.jpg"/>
        <asset id="7992" src="$url/module/ui/farm/diy/352.jpg"/>
        <asset id="7991" src="$url/module/ui/farm/diy/352.swf"/>
        <asset id="7993" src="$url/module/ui/farm/diy/352b.jpg"/>
        <asset id="8117" src="$url/module/ui/farm/diy/353.jpg"/>
        <asset id="8116" src="$url/module/ui/farm/diy/353.swf"/>
        <asset id="8118" src="$url/module/ui/farm/diy/353b.jpg"/>
        <asset id="8120" src="$url/module/ui/farm/diy/354.jpg"/>
        <asset id="8119" src="$url/module/ui/farm/diy/354.swf"/>
        <asset id="8121" src="$url/module/ui/farm/diy/354b.jpg"/>
        <asset id="8123" src="$url/module/ui/farm/diy/355.jpg"/>
        <asset id="8122" src="$url/module/ui/farm/diy/355.swf"/>
        <asset id="8124" src="$url/module/ui/farm/diy/355b.jpg"/>
        <asset id="8126" src="$url/module/ui/farm/diy/356.jpg"/>
        <asset id="8125" src="$url/module/ui/farm/diy/356.swf"/>
        <asset id="8127" src="$url/module/ui/farm/diy/356b.jpg"/>
        <asset id="8129" src="$url/module/ui/farm/diy/357.jpg"/>
        <asset id="8128" src="$url/module/ui/farm/diy/357.swf"/>
        <asset id="8130" src="$url/module/ui/farm/diy/357b.jpg"/>
        <asset id="8132" src="$url/module/ui/farm/diy/358.jpg"/>
        <asset id="8131" src="$url/module/ui/farm/diy/358.swf"/>
        <asset id="8133" src="$url/module/ui/farm/diy/358b.jpg"/>
        <asset id="8135" src="$url/module/ui/farm/diy/359.jpg"/>
        <asset id="8134" src="$url/module/ui/farm/diy/359.swf"/>
        <asset id="8136" src="$url/module/ui/farm/diy/359b.jpg"/>
        <asset id="8138" src="$url/module/ui/farm/diy/360.jpg"/>
        <asset id="8137" src="$url/module/ui/farm/diy/360.swf"/>
        <asset id="8139" src="$url/module/ui/farm/diy/360b.jpg"/>
        <asset id="8141" src="$url/module/ui/farm/diy/361.jpg"/>
        <asset id="8140" src="$url/module/ui/farm/diy/361.swf"/>
        <asset id="8142" src="$url/module/ui/farm/diy/361b.jpg"/>
        <asset id="8144" src="$url/module/ui/farm/diy/362.jpg"/>
        <asset id="8143" src="$url/module/ui/farm/diy/362.swf"/>
        <asset id="8145" src="$url/module/ui/farm/diy/362b.jpg"/>
        <asset id="8147" src="$url/module/ui/farm/diy/363.jpg"/>
        <asset id="8146" src="$url/module/ui/farm/diy/363.swf"/>
        <asset id="8148" src="$url/module/ui/farm/diy/363b.jpg"/>
        <asset id="8150" src="$url/module/ui/farm/diy/364.jpg"/>
        <asset id="8149" src="$url/module/ui/farm/diy/364.swf"/>
        <asset id="8151" src="$url/module/ui/farm/diy/364b.jpg"/>
        <asset id="8518" src="$url/module/ui/farm/diy/365.jpg"/>
        <asset id="8517" src="$url/module/ui/farm/diy/365.swf"/>
        <asset id="8519" src="$url/module/ui/farm/diy/365b.jpg"/>
        <asset id="8524" src="$url/module/ui/farm/diy/366.jpg"/>
        <asset id="8523" src="$url/module/ui/farm/diy/366.swf"/>
        <asset id="8525" src="$url/module/ui/farm/diy/366b.jpg"/>
        <asset id="8527" src="$url/module/ui/farm/diy/367.jpg"/>
        <asset id="8526" src="$url/module/ui/farm/diy/367.swf"/>
        <asset id="8528" src="$url/module/ui/farm/diy/367b.jpg"/>
        <asset id="8530" src="$url/module/ui/farm/diy/368.jpg"/>
        <asset id="8529" src="$url/module/ui/farm/diy/368.swf"/>
        <asset id="8531" src="$url/module/ui/farm/diy/368b.jpg"/>
        <asset id="8684" src="$url/module/ui/farm/diy/373.jpg"/>
        <asset id="8683" src="$url/module/ui/farm/diy/373.swf"/>
        <asset id="8685" src="$url/module/ui/farm/diy/373b.jpg"/>
        <asset id="8687" src="$url/module/ui/farm/diy/374.jpg"/>
        <asset id="8686" src="$url/module/ui/farm/diy/374.swf"/>
        <asset id="8688" src="$url/module/ui/farm/diy/374b.jpg"/>
        <asset id="8690" src="$url/module/ui/farm/diy/375.jpg"/>
        <asset id="8689" src="$url/module/ui/farm/diy/375.swf"/>
        <asset id="8691" src="$url/module/ui/farm/diy/375b.jpg"/>
        <asset id="8693" src="$url/module/ui/farm/diy/376.jpg"/>
        <asset id="8692" src="$url/module/ui/farm/diy/376.swf"/>
        <asset id="8694" src="$url/module/ui/farm/diy/376b.jpg"/>
        <asset id="8874" src="$url/module/ui/farm/diy/377.jpg"/>
        <asset id="8873" src="$url/module/ui/farm/diy/377.swf"/>
        <asset id="8875" src="$url/module/ui/farm/diy/377b.jpg"/>
        <asset id="8879" src="$url/module/ui/farm/diy/378.jpg"/>
        <asset id="8878" src="$url/module/ui/farm/diy/378.swf"/>
        <asset id="8880" src="$url/module/ui/farm/diy/378b.jpg"/>
        <asset id="8883" src="$url/module/ui/farm/diy/379.jpg"/>
        <asset id="8882" src="$url/module/ui/farm/diy/379.swf"/>
        <asset id="8884" src="$url/module/ui/farm/diy/379b.jpg"/>
        <asset id="8887" src="$url/module/ui/farm/diy/380.jpg"/>
        <asset id="8886" src="$url/module/ui/farm/diy/380.swf"/>
        <asset id="8888" src="$url/module/ui/farm/diy/380b.jpg"/>
        <asset id="8971" src="$url/module/ui/farm/diy/381.jpg"/>
        <asset id="8970" src="$url/module/ui/farm/diy/381.swf"/>
        <asset id="8972" src="$url/module/ui/farm/diy/381b.jpg"/>
        <asset id="8974" src="$url/module/ui/farm/diy/382.jpg"/>
        <asset id="8973" src="$url/module/ui/farm/diy/382.swf"/>
        <asset id="8975" src="$url/module/ui/farm/diy/382b.jpg"/>
        <asset id="8977" src="$url/module/ui/farm/diy/383.jpg"/>
        <asset id="8976" src="$url/module/ui/farm/diy/383.swf"/>
        <asset id="8978" src="$url/module/ui/farm/diy/383b.jpg"/>
        <asset id="8980" src="$url/module/ui/farm/diy/384.jpg"/>
        <asset id="8979" src="$url/module/ui/farm/diy/384.swf"/>
        <asset id="8981" src="$url/module/ui/farm/diy/384b.jpg"/>
        <asset id="8912" src="$url/module/ui/farm/diy/385.jpg"/>
        <asset id="8911" src="$url/module/ui/farm/diy/385.swf"/>
        <asset id="8913" src="$url/module/ui/farm/diy/385b.jpg"/>
        <asset id="8915" src="$url/module/ui/farm/diy/386.jpg"/>
        <asset id="8914" src="$url/module/ui/farm/diy/386.swf"/>
        <asset id="8916" src="$url/module/ui/farm/diy/386b.jpg"/>
        <asset id="8918" src="$url/module/ui/farm/diy/387.jpg"/>
        <asset id="8917" src="$url/module/ui/farm/diy/387.swf"/>
        <asset id="8919" src="$url/module/ui/farm/diy/387b.jpg"/>
        <asset id="8921" src="$url/module/ui/farm/diy/388.jpg"/>
        <asset id="8920" src="$url/module/ui/farm/diy/388.swf"/>
        <asset id="8922" src="$url/module/ui/farm/diy/388b.jpg"/>
        <asset id="953" src="$url/module/ui/farm/diy/3b.jpg"/>
        <asset id="955" src="$url/module/ui/farm/diy/4.jpg"/>
        <asset id="954" src="$url/module/ui/farm/diy/4.swf"/>
        <asset id="1006" src="$url/module/ui/farm/diy/41.jpg"/>
        <asset id="1005" src="$url/module/ui/farm/diy/41.swf"/>
        <asset id="1007" src="$url/module/ui/farm/diy/41b.jpg"/>
        <asset id="1009" src="$url/module/ui/farm/diy/42.jpg"/>
        <asset id="1008" src="$url/module/ui/farm/diy/42.swf"/>
        <asset id="1010" src="$url/module/ui/farm/diy/42b.jpg"/>
        <asset id="1012" src="$url/module/ui/farm/diy/43.jpg"/>
        <asset id="1011" src="$url/module/ui/farm/diy/43.swf"/>
        <asset id="1013" src="$url/module/ui/farm/diy/43b.jpg"/>
        <asset id="1015" src="$url/module/ui/farm/diy/44.jpg"/>
        <asset id="1014" src="$url/module/ui/farm/diy/44.swf"/>
        <asset id="1016" src="$url/module/ui/farm/diy/44b.jpg"/>
        <asset id="1018" src="$url/module/ui/farm/diy/45.jpg"/>
        <asset id="1017" src="$url/module/ui/farm/diy/45.swf"/>
        <asset id="1019" src="$url/module/ui/farm/diy/45b.jpg"/>
        <asset id="1021" src="$url/module/ui/farm/diy/46.jpg"/>
        <asset id="1020" src="$url/module/ui/farm/diy/46.swf"/>
        <asset id="1022" src="$url/module/ui/farm/diy/46b.jpg"/>
        <asset id="1024" src="$url/module/ui/farm/diy/47.jpg"/>
        <asset id="1023" src="$url/module/ui/farm/diy/47.swf"/>
        <asset id="1025" src="$url/module/ui/farm/diy/47b.jpg"/>
        <asset id="1027" src="$url/module/ui/farm/diy/48.jpg"/>
        <asset id="1026" src="$url/module/ui/farm/diy/48.swf"/>
        <asset id="1028" src="$url/module/ui/farm/diy/48b.jpg"/>
        <asset id="1030" src="$url/module/ui/farm/diy/49.jpg"/>
        <asset id="1029" src="$url/module/ui/farm/diy/49.swf"/>
        <asset id="1031" src="$url/module/ui/farm/diy/49b.jpg"/>
        <asset id="956" src="$url/module/ui/farm/diy/4b.jpg"/>
        <asset id="1033" src="$url/module/ui/farm/diy/50.jpg"/>
        <asset id="1032" src="$url/module/ui/farm/diy/50.swf"/>
        <asset id="1510" src="$url/module/ui/farm/diy/501.jpg"/>
        <asset id="1509" src="$url/module/ui/farm/diy/501.swf"/>
        <asset id="1511" src="$url/module/ui/farm/diy/501b.jpg"/>
        <asset id="1513" src="$url/module/ui/farm/diy/502.jpg"/>
        <asset id="1512" src="$url/module/ui/farm/diy/502.swf"/>
        <asset id="1514" src="$url/module/ui/farm/diy/502b.jpg"/>
        <asset id="1516" src="$url/module/ui/farm/diy/503.jpg"/>
        <asset id="1515" src="$url/module/ui/farm/diy/503.swf"/>
        <asset id="1517" src="$url/module/ui/farm/diy/503b.jpg"/>
        <asset id="1519" src="$url/module/ui/farm/diy/504.jpg"/>
        <asset id="1518" src="$url/module/ui/farm/diy/504.swf"/>
        <asset id="1520" src="$url/module/ui/farm/diy/504b.jpg"/>
        <asset id="1522" src="$url/module/ui/farm/diy/505.jpg"/>
        <asset id="1521" src="$url/module/ui/farm/diy/505.swf"/>
        <asset id="1523" src="$url/module/ui/farm/diy/505b.jpg"/>
        <asset id="1525" src="$url/module/ui/farm/diy/506.jpg"/>
        <asset id="1524" src="$url/module/ui/farm/diy/506.swf"/>
        <asset id="1526" src="$url/module/ui/farm/diy/506b.jpg"/>
        <asset id="1528" src="$url/module/ui/farm/diy/507.jpg"/>
        <asset id="1527" src="$url/module/ui/farm/diy/507.swf"/>
        <asset id="1529" src="$url/module/ui/farm/diy/507b.jpg"/>
        <asset id="1531" src="$url/module/ui/farm/diy/508.jpg"/>
        <asset id="1530" src="$url/module/ui/farm/diy/508.swf"/>
        <asset id="1532" src="$url/module/ui/farm/diy/508b.jpg"/>
        <asset id="1534" src="$url/module/ui/farm/diy/509.jpg"/>
        <asset id="1533" src="$url/module/ui/farm/diy/509.swf"/>
        <asset id="1535" src="$url/module/ui/farm/diy/509b.jpg"/>
        <asset id="1034" src="$url/module/ui/farm/diy/50b.jpg"/>
        <asset id="1036" src="$url/module/ui/farm/diy/51.jpg"/>
        <asset id="1035" src="$url/module/ui/farm/diy/51.swf"/>
        <asset id="1537" src="$url/module/ui/farm/diy/510.jpg"/>
        <asset id="1536" src="$url/module/ui/farm/diy/510.swf"/>
        <asset id="1538" src="$url/module/ui/farm/diy/510b.jpg"/>
        <asset id="1540" src="$url/module/ui/farm/diy/511.jpg"/>
        <asset id="1539" src="$url/module/ui/farm/diy/511.swf"/>
        <asset id="1541" src="$url/module/ui/farm/diy/511b.jpg"/>
        <asset id="1543" src="$url/module/ui/farm/diy/512.jpg"/>
        <asset id="1542" src="$url/module/ui/farm/diy/512.swf"/>
        <asset id="1544" src="$url/module/ui/farm/diy/512b.jpg"/>
        <asset id="1546" src="$url/module/ui/farm/diy/513.jpg"/>
        <asset id="1545" src="$url/module/ui/farm/diy/513.swf"/>
        <asset id="1547" src="$url/module/ui/farm/diy/513b.jpg"/>
        <asset id="1549" src="$url/module/ui/farm/diy/514.jpg"/>
        <asset id="1548" src="$url/module/ui/farm/diy/514.swf"/>
        <asset id="1550" src="$url/module/ui/farm/diy/514b.jpg"/>
        <asset id="1552" src="$url/module/ui/farm/diy/515.jpg"/>
        <asset id="1551" src="$url/module/ui/farm/diy/515.swf"/>
        <asset id="1553" src="$url/module/ui/farm/diy/515b.jpg"/>
        <asset id="1555" src="$url/module/ui/farm/diy/516.jpg"/>
        <asset id="1554" src="$url/module/ui/farm/diy/516.swf"/>
        <asset id="1556" src="$url/module/ui/farm/diy/516b.jpg"/>
        <asset id="1558" src="$url/module/ui/farm/diy/517.jpg"/>
        <asset id="1557" src="$url/module/ui/farm/diy/517.swf"/>
        <asset id="1559" src="$url/module/ui/farm/diy/517b.jpg"/>
        <asset id="1561" src="$url/module/ui/farm/diy/518.jpg"/>
        <asset id="1560" src="$url/module/ui/farm/diy/518.swf"/>
        <asset id="1562" src="$url/module/ui/farm/diy/518b.jpg"/>
        <asset id="1564" src="$url/module/ui/farm/diy/519.jpg"/>
        <asset id="1563" src="$url/module/ui/farm/diy/519.swf"/>
        <asset id="1565" src="$url/module/ui/farm/diy/519b.jpg"/>
        <asset id="1037" src="$url/module/ui/farm/diy/51b.jpg"/>
        <asset id="1039" src="$url/module/ui/farm/diy/52.jpg"/>
        <asset id="1038" src="$url/module/ui/farm/diy/52.swf"/>
        <asset id="1567" src="$url/module/ui/farm/diy/520.jpg"/>
        <asset id="1566" src="$url/module/ui/farm/diy/520.swf"/>
        <asset id="1568" src="$url/module/ui/farm/diy/520b.jpg"/>
        <asset id="1570" src="$url/module/ui/farm/diy/521.jpg"/>
        <asset id="1569" src="$url/module/ui/farm/diy/521.swf"/>
        <asset id="1571" src="$url/module/ui/farm/diy/521b.jpg"/>
        <asset id="1573" src="$url/module/ui/farm/diy/522.jpg"/>
        <asset id="1572" src="$url/module/ui/farm/diy/522.swf"/>
        <asset id="1574" src="$url/module/ui/farm/diy/522b.jpg"/>
        <asset id="1576" src="$url/module/ui/farm/diy/523.jpg"/>
        <asset id="1575" src="$url/module/ui/farm/diy/523.swf"/>
        <asset id="1577" src="$url/module/ui/farm/diy/523b.jpg"/>
        <asset id="1579" src="$url/module/ui/farm/diy/524.jpg"/>
        <asset id="1578" src="$url/module/ui/farm/diy/524.swf"/>
        <asset id="1580" src="$url/module/ui/farm/diy/524b.jpg"/>
        <asset id="1582" src="$url/module/ui/farm/diy/525.jpg"/>
        <asset id="1581" src="$url/module/ui/farm/diy/525.swf"/>
        <asset id="1583" src="$url/module/ui/farm/diy/525b.jpg"/>
        <asset id="1585" src="$url/module/ui/farm/diy/526.jpg"/>
        <asset id="1584" src="$url/module/ui/farm/diy/526.swf"/>
        <asset id="1586" src="$url/module/ui/farm/diy/526b.jpg"/>
        <asset id="1588" src="$url/module/ui/farm/diy/527.jpg"/>
        <asset id="1587" src="$url/module/ui/farm/diy/527.swf"/>
        <asset id="1589" src="$url/module/ui/farm/diy/527b.jpg"/>
        <asset id="1591" src="$url/module/ui/farm/diy/528.jpg"/>
        <asset id="1590" src="$url/module/ui/farm/diy/528.swf"/>
        <asset id="1592" src="$url/module/ui/farm/diy/528b.jpg"/>
        <asset id="1594" src="$url/module/ui/farm/diy/529.jpg"/>
        <asset id="1593" src="$url/module/ui/farm/diy/529.swf"/>
        <asset id="1595" src="$url/module/ui/farm/diy/529b.jpg"/>
        <asset id="1040" src="$url/module/ui/farm/diy/52b.jpg"/>
        <asset id="1042" src="$url/module/ui/farm/diy/53.jpg"/>
        <asset id="1041" src="$url/module/ui/farm/diy/53.swf"/>
        <asset id="1597" src="$url/module/ui/farm/diy/530.jpg"/>
        <asset id="1596" src="$url/module/ui/farm/diy/530.swf"/>
        <asset id="1598" src="$url/module/ui/farm/diy/530b.jpg"/>
        <asset id="1600" src="$url/module/ui/farm/diy/531.jpg"/>
        <asset id="1599" src="$url/module/ui/farm/diy/531.swf"/>
        <asset id="1601" src="$url/module/ui/farm/diy/531b.jpg"/>
        <asset id="1603" src="$url/module/ui/farm/diy/532.jpg"/>
        <asset id="1602" src="$url/module/ui/farm/diy/532.swf"/>
        <asset id="1604" src="$url/module/ui/farm/diy/532b.jpg"/>
        <asset id="1606" src="$url/module/ui/farm/diy/533.jpg"/>
        <asset id="1605" src="$url/module/ui/farm/diy/533.swf"/>
        <asset id="1607" src="$url/module/ui/farm/diy/533b.jpg"/>
        <asset id="1609" src="$url/module/ui/farm/diy/534.jpg"/>
        <asset id="1608" src="$url/module/ui/farm/diy/534.swf"/>
        <asset id="1610" src="$url/module/ui/farm/diy/534b.jpg"/>
        <asset id="1612" src="$url/module/ui/farm/diy/535.jpg"/>
        <asset id="1611" src="$url/module/ui/farm/diy/535.swf"/>
        <asset id="1613" src="$url/module/ui/farm/diy/535b.jpg"/>
        <asset id="1615" src="$url/module/ui/farm/diy/536.jpg"/>
        <asset id="1614" src="$url/module/ui/farm/diy/536.swf"/>
        <asset id="1616" src="$url/module/ui/farm/diy/536b.jpg"/>
        <asset id="1618" src="$url/module/ui/farm/diy/537.jpg"/>
        <asset id="1617" src="$url/module/ui/farm/diy/537.swf"/>
        <asset id="1619" src="$url/module/ui/farm/diy/537b.jpg"/>
        <asset id="1621" src="$url/module/ui/farm/diy/538.jpg"/>
        <asset id="1620" src="$url/module/ui/farm/diy/538.swf"/>
        <asset id="1622" src="$url/module/ui/farm/diy/538b.jpg"/>
        <asset id="1624" src="$url/module/ui/farm/diy/539.jpg"/>
        <asset id="1623" src="$url/module/ui/farm/diy/539.swf"/>
        <asset id="1625" src="$url/module/ui/farm/diy/539b.jpg"/>
        <asset id="1043" src="$url/module/ui/farm/diy/53b.jpg"/>
        <asset id="1045" src="$url/module/ui/farm/diy/54.jpg"/>
        <asset id="1044" src="$url/module/ui/farm/diy/54.swf"/>
        <asset id="1627" src="$url/module/ui/farm/diy/540.jpg"/>
        <asset id="1626" src="$url/module/ui/farm/diy/540.swf"/>
        <asset id="1628" src="$url/module/ui/farm/diy/540b.jpg"/>
        <asset id="1630" src="$url/module/ui/farm/diy/541.jpg"/>
        <asset id="1629" src="$url/module/ui/farm/diy/541.swf"/>
        <asset id="1631" src="$url/module/ui/farm/diy/541b.jpg"/>
        <asset id="1633" src="$url/module/ui/farm/diy/542.jpg"/>
        <asset id="1632" src="$url/module/ui/farm/diy/542.swf"/>
        <asset id="1634" src="$url/module/ui/farm/diy/542b.jpg"/>
        <asset id="1636" src="$url/module/ui/farm/diy/543.jpg"/>
        <asset id="1635" src="$url/module/ui/farm/diy/543.swf"/>
        <asset id="1637" src="$url/module/ui/farm/diy/543b.jpg"/>
        <asset id="1639" src="$url/module/ui/farm/diy/544.jpg"/>
        <asset id="1638" src="$url/module/ui/farm/diy/544.swf"/>
        <asset id="1640" src="$url/module/ui/farm/diy/544b.jpg"/>
        <asset id="1642" src="$url/module/ui/farm/diy/545.jpg"/>
        <asset id="1641" src="$url/module/ui/farm/diy/545.swf"/>
        <asset id="1643" src="$url/module/ui/farm/diy/545b.jpg"/>
        <asset id="1645" src="$url/module/ui/farm/diy/546.jpg"/>
        <asset id="1644" src="$url/module/ui/farm/diy/546.swf"/>
        <asset id="1646" src="$url/module/ui/farm/diy/546b.jpg"/>
        <asset id="1648" src="$url/module/ui/farm/diy/547.jpg"/>
        <asset id="1647" src="$url/module/ui/farm/diy/547.swf"/>
        <asset id="1649" src="$url/module/ui/farm/diy/547b.jpg"/>
        <asset id="1651" src="$url/module/ui/farm/diy/548.jpg"/>
        <asset id="1650" src="$url/module/ui/farm/diy/548.swf"/>
        <asset id="1652" src="$url/module/ui/farm/diy/548b.jpg"/>
        <asset id="1654" src="$url/module/ui/farm/diy/549.jpg"/>
        <asset id="1653" src="$url/module/ui/farm/diy/549.swf"/>
        <asset id="1655" src="$url/module/ui/farm/diy/549b.jpg"/>
        <asset id="1046" src="$url/module/ui/farm/diy/54b.jpg"/>
        <asset id="1048" src="$url/module/ui/farm/diy/55.jpg"/>
        <asset id="1047" src="$url/module/ui/farm/diy/55.swf"/>
        <asset id="1657" src="$url/module/ui/farm/diy/550.jpg"/>
        <asset id="1656" src="$url/module/ui/farm/diy/550.swf"/>
        <asset id="1658" src="$url/module/ui/farm/diy/550b.jpg"/>
        <asset id="1660" src="$url/module/ui/farm/diy/551.jpg"/>
        <asset id="1659" src="$url/module/ui/farm/diy/551.swf"/>
        <asset id="1661" src="$url/module/ui/farm/diy/551b.jpg"/>
        <asset id="1663" src="$url/module/ui/farm/diy/552.jpg"/>
        <asset id="1662" src="$url/module/ui/farm/diy/552.swf"/>
        <asset id="1664" src="$url/module/ui/farm/diy/552b.jpg"/>
        <asset id="1666" src="$url/module/ui/farm/diy/553.jpg"/>
        <asset id="1665" src="$url/module/ui/farm/diy/553.swf"/>
        <asset id="1667" src="$url/module/ui/farm/diy/553b.jpg"/>
        <asset id="1669" src="$url/module/ui/farm/diy/554.jpg"/>
        <asset id="1668" src="$url/module/ui/farm/diy/554.swf"/>
        <asset id="1670" src="$url/module/ui/farm/diy/554b.jpg"/>
        <asset id="1672" src="$url/module/ui/farm/diy/555.jpg"/>
        <asset id="1671" src="$url/module/ui/farm/diy/555.swf"/>
        <asset id="1673" src="$url/module/ui/farm/diy/555b.jpg"/>
        <asset id="1675" src="$url/module/ui/farm/diy/556.jpg"/>
        <asset id="1674" src="$url/module/ui/farm/diy/556.swf"/>
        <asset id="1676" src="$url/module/ui/farm/diy/556b.jpg"/>
        <asset id="1678" src="$url/module/ui/farm/diy/557.jpg"/>
        <asset id="1677" src="$url/module/ui/farm/diy/557.swf"/>
        <asset id="1679" src="$url/module/ui/farm/diy/557b.jpg"/>
        <asset id="1681" src="$url/module/ui/farm/diy/558.jpg"/>
        <asset id="1680" src="$url/module/ui/farm/diy/558.swf"/>
        <asset id="1682" src="$url/module/ui/farm/diy/558b.jpg"/>
        <asset id="1684" src="$url/module/ui/farm/diy/559.jpg"/>
        <asset id="1683" src="$url/module/ui/farm/diy/559.swf"/>
        <asset id="1685" src="$url/module/ui/farm/diy/559b.jpg"/>
        <asset id="1049" src="$url/module/ui/farm/diy/55b.jpg"/>
        <asset id="1051" src="$url/module/ui/farm/diy/56.jpg"/>
        <asset id="1050" src="$url/module/ui/farm/diy/56.swf"/>
        <asset id="1687" src="$url/module/ui/farm/diy/560.jpg"/>
        <asset id="1686" src="$url/module/ui/farm/diy/560.swf"/>
        <asset id="1688" src="$url/module/ui/farm/diy/560b.jpg"/>
        <asset id="1929" src="$url/module/ui/farm/diy/561.jpg"/>
        <asset id="1928" src="$url/module/ui/farm/diy/561.swf"/>
        <asset id="1930" src="$url/module/ui/farm/diy/561b.jpg"/>
        <asset id="1932" src="$url/module/ui/farm/diy/562.jpg"/>
        <asset id="1931" src="$url/module/ui/farm/diy/562.swf"/>
        <asset id="1933" src="$url/module/ui/farm/diy/562b.jpg"/>
        <asset id="1935" src="$url/module/ui/farm/diy/563.jpg"/>
        <asset id="1934" src="$url/module/ui/farm/diy/563.swf"/>
        <asset id="1936" src="$url/module/ui/farm/diy/563b.jpg"/>
        <asset id="1938" src="$url/module/ui/farm/diy/564.jpg"/>
        <asset id="1937" src="$url/module/ui/farm/diy/564.swf"/>
        <asset id="1939" src="$url/module/ui/farm/diy/564b.jpg"/>
        <asset id="1905" src="$url/module/ui/farm/diy/565.jpg"/>
        <asset id="1904" src="$url/module/ui/farm/diy/565.swf"/>
        <asset id="1906" src="$url/module/ui/farm/diy/565b.jpg"/>
        <asset id="1908" src="$url/module/ui/farm/diy/566.jpg"/>
        <asset id="1907" src="$url/module/ui/farm/diy/566.swf"/>
        <asset id="1909" src="$url/module/ui/farm/diy/566b.jpg"/>
        <asset id="1911" src="$url/module/ui/farm/diy/567.jpg"/>
        <asset id="1910" src="$url/module/ui/farm/diy/567.swf"/>
        <asset id="1912" src="$url/module/ui/farm/diy/567b.jpg"/>
        <asset id="1914" src="$url/module/ui/farm/diy/568.jpg"/>
        <asset id="1913" src="$url/module/ui/farm/diy/568.swf"/>
        <asset id="1915" src="$url/module/ui/farm/diy/568b.jpg"/>
        <asset id="1917" src="$url/module/ui/farm/diy/569.jpg"/>
        <asset id="1916" src="$url/module/ui/farm/diy/569.swf"/>
        <asset id="1918" src="$url/module/ui/farm/diy/569b.jpg"/>
        <asset id="1052" src="$url/module/ui/farm/diy/56b.jpg"/>
        <asset id="1054" src="$url/module/ui/farm/diy/57.jpg"/>
        <asset id="1053" src="$url/module/ui/farm/diy/57.swf"/>
        <asset id="1920" src="$url/module/ui/farm/diy/570.jpg"/>
        <asset id="1919" src="$url/module/ui/farm/diy/570.swf"/>
        <asset id="1921" src="$url/module/ui/farm/diy/570b.jpg"/>
        <asset id="1923" src="$url/module/ui/farm/diy/571.jpg"/>
        <asset id="1922" src="$url/module/ui/farm/diy/571.swf"/>
        <asset id="1924" src="$url/module/ui/farm/diy/571b.jpg"/>
        <asset id="1926" src="$url/module/ui/farm/diy/572.jpg"/>
        <asset id="1925" src="$url/module/ui/farm/diy/572.swf"/>
        <asset id="1927" src="$url/module/ui/farm/diy/572b.jpg"/>
        <asset id="2008" src="$url/module/ui/farm/diy/573.jpg"/>
        <asset id="2007" src="$url/module/ui/farm/diy/573.swf"/>
        <asset id="2009" src="$url/module/ui/farm/diy/573b.jpg"/>
        <asset id="2011" src="$url/module/ui/farm/diy/574.jpg"/>
        <asset id="2010" src="$url/module/ui/farm/diy/574.swf"/>
        <asset id="2012" src="$url/module/ui/farm/diy/574b.jpg"/>
        <asset id="2014" src="$url/module/ui/farm/diy/575.jpg"/>
        <asset id="2013" src="$url/module/ui/farm/diy/575.swf"/>
        <asset id="2015" src="$url/module/ui/farm/diy/575b.jpg"/>
        <asset id="2017" src="$url/module/ui/farm/diy/576.jpg"/>
        <asset id="2016" src="$url/module/ui/farm/diy/576.swf"/>
        <asset id="2018" src="$url/module/ui/farm/diy/576b.jpg"/>
        <asset id="2056" src="$url/module/ui/farm/diy/577.jpg"/>
        <asset id="2055" src="$url/module/ui/farm/diy/577.swf"/>
        <asset id="2057" src="$url/module/ui/farm/diy/577b.jpg"/>
        <asset id="2059" src="$url/module/ui/farm/diy/578.jpg"/>
        <asset id="2058" src="$url/module/ui/farm/diy/578.swf"/>
        <asset id="2060" src="$url/module/ui/farm/diy/578b.jpg"/>
        <asset id="2062" src="$url/module/ui/farm/diy/579.jpg"/>
        <asset id="2061" src="$url/module/ui/farm/diy/579.swf"/>
        <asset id="2063" src="$url/module/ui/farm/diy/579b.jpg"/>
        <asset id="1055" src="$url/module/ui/farm/diy/57b.jpg"/>
        <asset id="1057" src="$url/module/ui/farm/diy/58.jpg"/>
        <asset id="1056" src="$url/module/ui/farm/diy/58.swf"/>
        <asset id="2065" src="$url/module/ui/farm/diy/580.jpg"/>
        <asset id="2064" src="$url/module/ui/farm/diy/580.swf"/>
        <asset id="2066" src="$url/module/ui/farm/diy/580b.jpg"/>
        <asset id="2071" src="$url/module/ui/farm/diy/581.jpg"/>
        <asset id="2070" src="$url/module/ui/farm/diy/581.swf"/>
        <asset id="2072" src="$url/module/ui/farm/diy/581b.jpg"/>
        <asset id="2074" src="$url/module/ui/farm/diy/582.jpg"/>
        <asset id="2073" src="$url/module/ui/farm/diy/582.swf"/>
        <asset id="2075" src="$url/module/ui/farm/diy/582b.jpg"/>
        <asset id="2077" src="$url/module/ui/farm/diy/583.jpg"/>
        <asset id="2076" src="$url/module/ui/farm/diy/583.swf"/>
        <asset id="2078" src="$url/module/ui/farm/diy/583b.jpg"/>
        <asset id="2080" src="$url/module/ui/farm/diy/584.jpg"/>
        <asset id="2079" src="$url/module/ui/farm/diy/584.swf"/>
        <asset id="2081" src="$url/module/ui/farm/diy/584b.jpg"/>
        <asset id="2083" src="$url/module/ui/farm/diy/585.jpg"/>
        <asset id="2082" src="$url/module/ui/farm/diy/585.swf"/>
        <asset id="2084" src="$url/module/ui/farm/diy/585b.jpg"/>
        <asset id="2086" src="$url/module/ui/farm/diy/586.jpg"/>
        <asset id="2085" src="$url/module/ui/farm/diy/586.swf"/>
        <asset id="2087" src="$url/module/ui/farm/diy/586b.jpg"/>
        <asset id="2089" src="$url/module/ui/farm/diy/587.jpg"/>
        <asset id="2088" src="$url/module/ui/farm/diy/587.swf"/>
        <asset id="2090" src="$url/module/ui/farm/diy/587b.jpg"/>
        <asset id="2092" src="$url/module/ui/farm/diy/588.jpg"/>
        <asset id="2091" src="$url/module/ui/farm/diy/588.swf"/>
        <asset id="2093" src="$url/module/ui/farm/diy/588b.jpg"/>
        <asset id="2147" src="$url/module/ui/farm/diy/589.jpg"/>
        <asset id="2146" src="$url/module/ui/farm/diy/589.swf"/>
        <asset id="2148" src="$url/module/ui/farm/diy/589b.jpg"/>
        <asset id="1058" src="$url/module/ui/farm/diy/58b.jpg"/>
        <asset id="1060" src="$url/module/ui/farm/diy/59.jpg"/>
        <asset id="1059" src="$url/module/ui/farm/diy/59.swf"/>
        <asset id="2150" src="$url/module/ui/farm/diy/590.jpg"/>
        <asset id="2149" src="$url/module/ui/farm/diy/590.swf"/>
        <asset id="2151" src="$url/module/ui/farm/diy/590b.jpg"/>
        <asset id="2153" src="$url/module/ui/farm/diy/591.jpg"/>
        <asset id="2152" src="$url/module/ui/farm/diy/591.swf"/>
        <asset id="2154" src="$url/module/ui/farm/diy/591b.jpg"/>
        <asset id="2156" src="$url/module/ui/farm/diy/592.jpg"/>
        <asset id="2155" src="$url/module/ui/farm/diy/592.swf"/>
        <asset id="2157" src="$url/module/ui/farm/diy/592b.jpg"/>
        <asset id="2159" src="$url/module/ui/farm/diy/593.jpg"/>
        <asset id="2158" src="$url/module/ui/farm/diy/593.swf"/>
        <asset id="2160" src="$url/module/ui/farm/diy/593b.jpg"/>
        <asset id="2162" src="$url/module/ui/farm/diy/594.jpg"/>
        <asset id="2161" src="$url/module/ui/farm/diy/594.swf"/>
        <asset id="2163" src="$url/module/ui/farm/diy/594b.jpg"/>
        <asset id="2165" src="$url/module/ui/farm/diy/595.jpg"/>
        <asset id="2164" src="$url/module/ui/farm/diy/595.swf"/>
        <asset id="2166" src="$url/module/ui/farm/diy/595b.jpg"/>
        <asset id="2168" src="$url/module/ui/farm/diy/596.jpg"/>
        <asset id="2167" src="$url/module/ui/farm/diy/596.swf"/>
        <asset id="2169" src="$url/module/ui/farm/diy/596b.jpg"/>
        <asset id="2171" src="$url/module/ui/farm/diy/597.jpg"/>
        <asset id="2170" src="$url/module/ui/farm/diy/597.swf"/>
        <asset id="2172" src="$url/module/ui/farm/diy/597b.jpg"/>
        <asset id="2174" src="$url/module/ui/farm/diy/598.jpg"/>
        <asset id="2173" src="$url/module/ui/farm/diy/598.swf"/>
        <asset id="2175" src="$url/module/ui/farm/diy/598b.jpg"/>
        <asset id="2177" src="$url/module/ui/farm/diy/599.jpg"/>
        <asset id="2176" src="$url/module/ui/farm/diy/599.swf"/>
        <asset id="2178" src="$url/module/ui/farm/diy/599b.jpg"/>
        <asset id="1061" src="$url/module/ui/farm/diy/59b.jpg"/>
        <asset id="1063" src="$url/module/ui/farm/diy/60.jpg"/>
        <asset id="1062" src="$url/module/ui/farm/diy/60.swf"/>
        <asset id="2180" src="$url/module/ui/farm/diy/600.jpg"/>
        <asset id="2179" src="$url/module/ui/farm/diy/600.swf"/>
        <asset id="2181" src="$url/module/ui/farm/diy/600b.jpg"/>
        <asset id="2589" src="$url/module/ui/farm/diy/601.jpg"/>
        <asset id="2588" src="$url/module/ui/farm/diy/601.swf"/>
        <asset id="2590" src="$url/module/ui/farm/diy/601b.jpg"/>
        <asset id="2592" src="$url/module/ui/farm/diy/602.jpg"/>
        <asset id="2591" src="$url/module/ui/farm/diy/602.swf"/>
        <asset id="2593" src="$url/module/ui/farm/diy/602b.jpg"/>
        <asset id="2595" src="$url/module/ui/farm/diy/603.jpg"/>
        <asset id="2594" src="$url/module/ui/farm/diy/603.swf"/>
        <asset id="2596" src="$url/module/ui/farm/diy/603b.jpg"/>
        <asset id="2598" src="$url/module/ui/farm/diy/604.jpg"/>
        <asset id="2597" src="$url/module/ui/farm/diy/604.swf"/>
        <asset id="2599" src="$url/module/ui/farm/diy/604b.jpg"/>
        <asset id="2601" src="$url/module/ui/farm/diy/605.jpg"/>
        <asset id="2600" src="$url/module/ui/farm/diy/605.swf"/>
        <asset id="2602" src="$url/module/ui/farm/diy/605b.jpg"/>
        <asset id="2604" src="$url/module/ui/farm/diy/606.jpg"/>
        <asset id="2603" src="$url/module/ui/farm/diy/606.swf"/>
        <asset id="2605" src="$url/module/ui/farm/diy/606b.jpg"/>
        <asset id="2607" src="$url/module/ui/farm/diy/607.jpg"/>
        <asset id="2606" src="$url/module/ui/farm/diy/607.swf"/>
        <asset id="2608" src="$url/module/ui/farm/diy/607b.jpg"/>
        <asset id="2610" src="$url/module/ui/farm/diy/608.jpg"/>
        <asset id="2609" src="$url/module/ui/farm/diy/608.swf"/>
        <asset id="2611" src="$url/module/ui/farm/diy/608b.jpg"/>
        <asset id="2742" src="$url/module/ui/farm/diy/609.jpg"/>
        <asset id="2741" src="$url/module/ui/farm/diy/609.swf"/>
        <asset id="2743" src="$url/module/ui/farm/diy/609b.jpg"/>
        <asset id="1064" src="$url/module/ui/farm/diy/60b.jpg"/>
        <asset id="1066" src="$url/module/ui/farm/diy/61.jpg"/>
        <asset id="1065" src="$url/module/ui/farm/diy/61.swf"/>
        <asset id="2745" src="$url/module/ui/farm/diy/610.jpg"/>
        <asset id="2744" src="$url/module/ui/farm/diy/610.swf"/>
        <asset id="2746" src="$url/module/ui/farm/diy/610b.jpg"/>
        <asset id="2748" src="$url/module/ui/farm/diy/611.jpg"/>
        <asset id="2747" src="$url/module/ui/farm/diy/611.swf"/>
        <asset id="2749" src="$url/module/ui/farm/diy/611b.jpg"/>
        <asset id="2751" src="$url/module/ui/farm/diy/612.jpg"/>
        <asset id="2750" src="$url/module/ui/farm/diy/612.swf"/>
        <asset id="2752" src="$url/module/ui/farm/diy/612b.jpg"/>
        <asset id="2754" src="$url/module/ui/farm/diy/613.jpg"/>
        <asset id="2753" src="$url/module/ui/farm/diy/613.swf"/>
        <asset id="2755" src="$url/module/ui/farm/diy/613b.jpg"/>
        <asset id="2757" src="$url/module/ui/farm/diy/614.jpg"/>
        <asset id="2756" src="$url/module/ui/farm/diy/614.swf"/>
        <asset id="2758" src="$url/module/ui/farm/diy/614b.jpg"/>
        <asset id="2760" src="$url/module/ui/farm/diy/615.jpg"/>
        <asset id="2759" src="$url/module/ui/farm/diy/615.swf"/>
        <asset id="2761" src="$url/module/ui/farm/diy/615b.jpg"/>
        <asset id="2763" src="$url/module/ui/farm/diy/616.jpg"/>
        <asset id="2762" src="$url/module/ui/farm/diy/616.swf"/>
        <asset id="2764" src="$url/module/ui/farm/diy/616b.jpg"/>
        <asset id="2766" src="$url/module/ui/farm/diy/617.jpg"/>
        <asset id="2765" src="$url/module/ui/farm/diy/617.swf"/>
        <asset id="2767" src="$url/module/ui/farm/diy/617b.jpg"/>
        <asset id="2769" src="$url/module/ui/farm/diy/618.jpg"/>
        <asset id="2768" src="$url/module/ui/farm/diy/618.swf"/>
        <asset id="2770" src="$url/module/ui/farm/diy/618b.jpg"/>
        <asset id="2772" src="$url/module/ui/farm/diy/619.jpg"/>
        <asset id="2771" src="$url/module/ui/farm/diy/619.swf"/>
        <asset id="2773" src="$url/module/ui/farm/diy/619b.jpg"/>
        <asset id="1067" src="$url/module/ui/farm/diy/61b.jpg"/>
        <asset id="1069" src="$url/module/ui/farm/diy/62.jpg"/>
        <asset id="1068" src="$url/module/ui/farm/diy/62.swf"/>
        <asset id="2775" src="$url/module/ui/farm/diy/620.jpg"/>
        <asset id="2774" src="$url/module/ui/farm/diy/620.swf"/>
        <asset id="2776" src="$url/module/ui/farm/diy/620b.jpg"/>
        <asset id="2822" src="$url/module/ui/farm/diy/621.jpg"/>
        <asset id="2821" src="$url/module/ui/farm/diy/621.swf"/>
        <asset id="2823" src="$url/module/ui/farm/diy/621b.jpg"/>
        <asset id="2825" src="$url/module/ui/farm/diy/622.jpg"/>
        <asset id="2824" src="$url/module/ui/farm/diy/622.swf"/>
        <asset id="2826" src="$url/module/ui/farm/diy/622b.jpg"/>
        <asset id="2828" src="$url/module/ui/farm/diy/623.jpg"/>
        <asset id="2827" src="$url/module/ui/farm/diy/623.swf"/>
        <asset id="2829" src="$url/module/ui/farm/diy/623b.jpg"/>
        <asset id="2831" src="$url/module/ui/farm/diy/624.jpg"/>
        <asset id="2830" src="$url/module/ui/farm/diy/624.swf"/>
        <asset id="2832" src="$url/module/ui/farm/diy/624b.jpg"/>
        <asset id="2790" src="$url/module/ui/farm/diy/625.jpg"/>
        <asset id="2789" src="$url/module/ui/farm/diy/625.swf"/>
        <asset id="2791" src="$url/module/ui/farm/diy/625b.jpg"/>
        <asset id="2793" src="$url/module/ui/farm/diy/626.jpg"/>
        <asset id="2792" src="$url/module/ui/farm/diy/626.swf"/>
        <asset id="2794" src="$url/module/ui/farm/diy/626b.jpg"/>
        <asset id="2796" src="$url/module/ui/farm/diy/627.jpg"/>
        <asset id="2795" src="$url/module/ui/farm/diy/627.swf"/>
        <asset id="2797" src="$url/module/ui/farm/diy/627b.jpg"/>
        <asset id="2799" src="$url/module/ui/farm/diy/628.jpg"/>
        <asset id="2798" src="$url/module/ui/farm/diy/628.swf"/>
        <asset id="2800" src="$url/module/ui/farm/diy/628b.jpg"/>
        <asset id="2810" src="$url/module/ui/farm/diy/629.jpg"/>
        <asset id="2809" src="$url/module/ui/farm/diy/629.swf"/>
        <asset id="2811" src="$url/module/ui/farm/diy/629b.jpg"/>
        <asset id="1070" src="$url/module/ui/farm/diy/62b.jpg"/>
        <asset id="1072" src="$url/module/ui/farm/diy/63.jpg"/>
        <asset id="1071" src="$url/module/ui/farm/diy/63.swf"/>
        <asset id="2813" src="$url/module/ui/farm/diy/630.jpg"/>
        <asset id="2812" src="$url/module/ui/farm/diy/630.swf"/>
        <asset id="2814" src="$url/module/ui/farm/diy/630b.jpg"/>
        <asset id="2816" src="$url/module/ui/farm/diy/631.jpg"/>
        <asset id="2815" src="$url/module/ui/farm/diy/631.swf"/>
        <asset id="2817" src="$url/module/ui/farm/diy/631b.jpg"/>
        <asset id="2819" src="$url/module/ui/farm/diy/632.jpg"/>
        <asset id="2818" src="$url/module/ui/farm/diy/632.swf"/>
        <asset id="2820" src="$url/module/ui/farm/diy/632b.jpg"/>
        <asset id="3351" src="$url/module/ui/farm/diy/633.jpg"/>
        <asset id="3350" src="$url/module/ui/farm/diy/633.swf"/>
        <asset id="3352" src="$url/module/ui/farm/diy/633b.jpg"/>
        <asset id="3354" src="$url/module/ui/farm/diy/634.jpg"/>
        <asset id="3353" src="$url/module/ui/farm/diy/634.swf"/>
        <asset id="3355" src="$url/module/ui/farm/diy/634b.jpg"/>
        <asset id="3357" src="$url/module/ui/farm/diy/635.jpg"/>
        <asset id="3356" src="$url/module/ui/farm/diy/635.swf"/>
        <asset id="3358" src="$url/module/ui/farm/diy/635b.jpg"/>
        <asset id="3360" src="$url/module/ui/farm/diy/636.jpg"/>
        <asset id="3359" src="$url/module/ui/farm/diy/636.swf"/>
        <asset id="3361" src="$url/module/ui/farm/diy/636b.jpg"/>
        <asset id="3464" src="$url/module/ui/farm/diy/637.jpg"/>
        <asset id="3463" src="$url/module/ui/farm/diy/637.swf"/>
        <asset id="3465" src="$url/module/ui/farm/diy/637b.jpg"/>
        <asset id="3467" src="$url/module/ui/farm/diy/638.jpg"/>
        <asset id="3466" src="$url/module/ui/farm/diy/638.swf"/>
        <asset id="3468" src="$url/module/ui/farm/diy/638b.jpg"/>
        <asset id="3470" src="$url/module/ui/farm/diy/639.jpg"/>
        <asset id="3469" src="$url/module/ui/farm/diy/639.swf"/>
        <asset id="3471" src="$url/module/ui/farm/diy/639b.jpg"/>
        <asset id="1073" src="$url/module/ui/farm/diy/63b.jpg"/>
        <asset id="1075" src="$url/module/ui/farm/diy/64.jpg"/>
        <asset id="1074" src="$url/module/ui/farm/diy/64.swf"/>
        <asset id="3473" src="$url/module/ui/farm/diy/640.jpg"/>
        <asset id="3472" src="$url/module/ui/farm/diy/640.swf"/>
        <asset id="3474" src="$url/module/ui/farm/diy/640b.jpg"/>
        <asset id="3498" src="$url/module/ui/farm/diy/641.jpg"/>
        <asset id="3497" src="$url/module/ui/farm/diy/641.swf"/>
        <asset id="3499" src="$url/module/ui/farm/diy/641b.jpg"/>
        <asset id="3503" src="$url/module/ui/farm/diy/642.jpg"/>
        <asset id="3502" src="$url/module/ui/farm/diy/642.swf"/>
        <asset id="3504" src="$url/module/ui/farm/diy/642b.jpg"/>
        <asset id="3507" src="$url/module/ui/farm/diy/643.jpg"/>
        <asset id="3506" src="$url/module/ui/farm/diy/643.swf"/>
        <asset id="3508" src="$url/module/ui/farm/diy/643b.jpg"/>
        <asset id="3510" src="$url/module/ui/farm/diy/644.jpg"/>
        <asset id="3509" src="$url/module/ui/farm/diy/644.swf"/>
        <asset id="3511" src="$url/module/ui/farm/diy/644b.jpg"/>
        <asset id="3528" src="$url/module/ui/farm/diy/645.jpg"/>
        <asset id="3527" src="$url/module/ui/farm/diy/645.swf"/>
        <asset id="3529" src="$url/module/ui/farm/diy/645b.jpg"/>
        <asset id="3531" src="$url/module/ui/farm/diy/646.jpg"/>
        <asset id="3530" src="$url/module/ui/farm/diy/646.swf"/>
        <asset id="3532" src="$url/module/ui/farm/diy/646b.jpg"/>
        <asset id="3534" src="$url/module/ui/farm/diy/647.jpg"/>
        <asset id="3533" src="$url/module/ui/farm/diy/647.swf"/>
        <asset id="3535" src="$url/module/ui/farm/diy/647b.jpg"/>
        <asset id="3537" src="$url/module/ui/farm/diy/648.jpg"/>
        <asset id="3536" src="$url/module/ui/farm/diy/648.swf"/>
        <asset id="3538" src="$url/module/ui/farm/diy/648b.jpg"/>
        <asset id="3585" src="$url/module/ui/farm/diy/649.jpg"/>
        <asset id="3584" src="$url/module/ui/farm/diy/649.swf"/>
        <asset id="3586" src="$url/module/ui/farm/diy/649b.jpg"/>
        <asset id="1076" src="$url/module/ui/farm/diy/64b.jpg"/>
        <asset id="1078" src="$url/module/ui/farm/diy/65.jpg"/>
        <asset id="1077" src="$url/module/ui/farm/diy/65.swf"/>
        <asset id="3588" src="$url/module/ui/farm/diy/650.jpg"/>
        <asset id="3587" src="$url/module/ui/farm/diy/650.swf"/>
        <asset id="3589" src="$url/module/ui/farm/diy/650b.jpg"/>
        <asset id="3591" src="$url/module/ui/farm/diy/651.jpg"/>
        <asset id="3590" src="$url/module/ui/farm/diy/651.swf"/>
        <asset id="3592" src="$url/module/ui/farm/diy/651b.jpg"/>
        <asset id="3594" src="$url/module/ui/farm/diy/652.jpg"/>
        <asset id="3593" src="$url/module/ui/farm/diy/652.swf"/>
        <asset id="3595" src="$url/module/ui/farm/diy/652b.jpg"/>
        <asset id="3646" src="$url/module/ui/farm/diy/653.jpg"/>
        <asset id="3645" src="$url/module/ui/farm/diy/653.swf"/>
        <asset id="3647" src="$url/module/ui/farm/diy/653b.jpg"/>
        <asset id="3651" src="$url/module/ui/farm/diy/654.jpg"/>
        <asset id="3650" src="$url/module/ui/farm/diy/654.swf"/>
        <asset id="3652" src="$url/module/ui/farm/diy/654b.jpg"/>
        <asset id="3655" src="$url/module/ui/farm/diy/655.jpg"/>
        <asset id="3654" src="$url/module/ui/farm/diy/655.swf"/>
        <asset id="3656" src="$url/module/ui/farm/diy/655b.jpg"/>
        <asset id="3658" src="$url/module/ui/farm/diy/656.jpg"/>
        <asset id="3657" src="$url/module/ui/farm/diy/656.swf"/>
        <asset id="3659" src="$url/module/ui/farm/diy/656b.jpg"/>
        <asset id="3709" src="$url/module/ui/farm/diy/657.jpg"/>
        <asset id="3708" src="$url/module/ui/farm/diy/657.swf"/>
        <asset id="3710" src="$url/module/ui/farm/diy/657b.jpg"/>
        <asset id="3712" src="$url/module/ui/farm/diy/658.jpg"/>
        <asset id="3711" src="$url/module/ui/farm/diy/658.swf"/>
        <asset id="3713" src="$url/module/ui/farm/diy/658b.jpg"/>
        <asset id="3715" src="$url/module/ui/farm/diy/659.jpg"/>
        <asset id="3714" src="$url/module/ui/farm/diy/659.swf"/>
        <asset id="3716" src="$url/module/ui/farm/diy/659b.jpg"/>
        <asset id="1079" src="$url/module/ui/farm/diy/65b.jpg"/>
        <asset id="1081" src="$url/module/ui/farm/diy/66.jpg"/>
        <asset id="1080" src="$url/module/ui/farm/diy/66.swf"/>
        <asset id="3718" src="$url/module/ui/farm/diy/660.jpg"/>
        <asset id="3717" src="$url/module/ui/farm/diy/660.swf"/>
        <asset id="3719" src="$url/module/ui/farm/diy/660b.jpg"/>
        <asset id="3733" src="$url/module/ui/farm/diy/661.jpg"/>
        <asset id="3732" src="$url/module/ui/farm/diy/661.swf"/>
        <asset id="3734" src="$url/module/ui/farm/diy/661b.jpg"/>
        <asset id="3736" src="$url/module/ui/farm/diy/662.jpg"/>
        <asset id="3735" src="$url/module/ui/farm/diy/662.swf"/>
        <asset id="3737" src="$url/module/ui/farm/diy/662b.jpg"/>
        <asset id="3739" src="$url/module/ui/farm/diy/663.jpg"/>
        <asset id="3738" src="$url/module/ui/farm/diy/663.swf"/>
        <asset id="3740" src="$url/module/ui/farm/diy/663b.jpg"/>
        <asset id="3742" src="$url/module/ui/farm/diy/664.jpg"/>
        <asset id="3741" src="$url/module/ui/farm/diy/664.swf"/>
        <asset id="3743" src="$url/module/ui/farm/diy/664b.jpg"/>
        <asset id="3745" src="$url/module/ui/farm/diy/665.jpg"/>
        <asset id="3744" src="$url/module/ui/farm/diy/665.swf"/>
        <asset id="3746" src="$url/module/ui/farm/diy/665b.jpg"/>
        <asset id="3748" src="$url/module/ui/farm/diy/666.jpg"/>
        <asset id="3747" src="$url/module/ui/farm/diy/666.swf"/>
        <asset id="3749" src="$url/module/ui/farm/diy/666b.jpg"/>
        <asset id="3751" src="$url/module/ui/farm/diy/667.jpg"/>
        <asset id="3750" src="$url/module/ui/farm/diy/667.swf"/>
        <asset id="3752" src="$url/module/ui/farm/diy/667b.jpg"/>
        <asset id="3754" src="$url/module/ui/farm/diy/668.jpg"/>
        <asset id="3753" src="$url/module/ui/farm/diy/668.swf"/>
        <asset id="3755" src="$url/module/ui/farm/diy/668b.jpg"/>
        <asset id="3861" src="$url/module/ui/farm/diy/669.jpg"/>
        <asset id="3860" src="$url/module/ui/farm/diy/669.swf"/>
        <asset id="3862" src="$url/module/ui/farm/diy/669b.jpg"/>
        <asset id="1082" src="$url/module/ui/farm/diy/66b.jpg"/>
        <asset id="1084" src="$url/module/ui/farm/diy/67.jpg"/>
        <asset id="1083" src="$url/module/ui/farm/diy/67.swf"/>
        <asset id="3864" src="$url/module/ui/farm/diy/670.jpg"/>
        <asset id="3863" src="$url/module/ui/farm/diy/670.swf"/>
        <asset id="3865" src="$url/module/ui/farm/diy/670b.jpg"/>
        <asset id="3867" src="$url/module/ui/farm/diy/671.jpg"/>
        <asset id="3866" src="$url/module/ui/farm/diy/671.swf"/>
        <asset id="3868" src="$url/module/ui/farm/diy/671b.jpg"/>
        <asset id="3870" src="$url/module/ui/farm/diy/672.jpg"/>
        <asset id="3869" src="$url/module/ui/farm/diy/672.swf"/>
        <asset id="3871" src="$url/module/ui/farm/diy/672b.jpg"/>
        <asset id="3873" src="$url/module/ui/farm/diy/673.jpg"/>
        <asset id="3872" src="$url/module/ui/farm/diy/673.swf"/>
        <asset id="3874" src="$url/module/ui/farm/diy/673b.jpg"/>
        <asset id="3876" src="$url/module/ui/farm/diy/674.jpg"/>
        <asset id="3875" src="$url/module/ui/farm/diy/674.swf"/>
        <asset id="3877" src="$url/module/ui/farm/diy/674b.jpg"/>
        <asset id="3879" src="$url/module/ui/farm/diy/675.jpg"/>
        <asset id="3878" src="$url/module/ui/farm/diy/675.swf"/>
        <asset id="3880" src="$url/module/ui/farm/diy/675b.jpg"/>
        <asset id="3882" src="$url/module/ui/farm/diy/676.jpg"/>
        <asset id="3881" src="$url/module/ui/farm/diy/676.swf"/>
        <asset id="3883" src="$url/module/ui/farm/diy/676b.jpg"/>
        <asset id="3885" src="$url/module/ui/farm/diy/677.jpg"/>
        <asset id="3884" src="$url/module/ui/farm/diy/677.swf"/>
        <asset id="3886" src="$url/module/ui/farm/diy/677b.jpg"/>
        <asset id="3888" src="$url/module/ui/farm/diy/678.jpg"/>
        <asset id="3887" src="$url/module/ui/farm/diy/678.swf"/>
        <asset id="3889" src="$url/module/ui/farm/diy/678b.jpg"/>
        <asset id="3891" src="$url/module/ui/farm/diy/679.jpg"/>
        <asset id="3890" src="$url/module/ui/farm/diy/679.swf"/>
        <asset id="3892" src="$url/module/ui/farm/diy/679b.jpg"/>
        <asset id="1085" src="$url/module/ui/farm/diy/67b.jpg"/>
        <asset id="1087" src="$url/module/ui/farm/diy/68.jpg"/>
        <asset id="1086" src="$url/module/ui/farm/diy/68.swf"/>
        <asset id="3896" src="$url/module/ui/farm/diy/680.jpg"/>
        <asset id="3895" src="$url/module/ui/farm/diy/680.swf"/>
        <asset id="3897" src="$url/module/ui/farm/diy/680b.jpg"/>
        <asset id="3996" src="$url/module/ui/farm/diy/681.jpg"/>
        <asset id="3995" src="$url/module/ui/farm/diy/681.swf"/>
        <asset id="3997" src="$url/module/ui/farm/diy/681b.jpg"/>
        <asset id="3999" src="$url/module/ui/farm/diy/682.jpg"/>
        <asset id="3998" src="$url/module/ui/farm/diy/682.swf"/>
        <asset id="4000" src="$url/module/ui/farm/diy/682b.jpg"/>
        <asset id="4002" src="$url/module/ui/farm/diy/683.jpg"/>
        <asset id="4001" src="$url/module/ui/farm/diy/683.swf"/>
        <asset id="4003" src="$url/module/ui/farm/diy/683b.jpg"/>
        <asset id="4005" src="$url/module/ui/farm/diy/684.jpg"/>
        <asset id="4004" src="$url/module/ui/farm/diy/684.swf"/>
        <asset id="4006" src="$url/module/ui/farm/diy/684b.jpg"/>
        <asset id="4008" src="$url/module/ui/farm/diy/685.jpg"/>
        <asset id="4007" src="$url/module/ui/farm/diy/685.swf"/>
        <asset id="4009" src="$url/module/ui/farm/diy/685b.jpg"/>
        <asset id="4011" src="$url/module/ui/farm/diy/686.jpg"/>
        <asset id="4010" src="$url/module/ui/farm/diy/686.swf"/>
        <asset id="4012" src="$url/module/ui/farm/diy/686b.jpg"/>
        <asset id="4014" src="$url/module/ui/farm/diy/687.jpg"/>
        <asset id="4013" src="$url/module/ui/farm/diy/687.swf"/>
        <asset id="4015" src="$url/module/ui/farm/diy/687b.jpg"/>
        <asset id="4017" src="$url/module/ui/farm/diy/688.jpg"/>
        <asset id="4016" src="$url/module/ui/farm/diy/688.swf"/>
        <asset id="4019" src="$url/module/ui/farm/diy/688b.jpg"/>
        <asset id="4049" src="$url/module/ui/farm/diy/689.jpg"/>
        <asset id="4048" src="$url/module/ui/farm/diy/689.swf"/>
        <asset id="4050" src="$url/module/ui/farm/diy/689b.jpg"/>
        <asset id="1088" src="$url/module/ui/farm/diy/68b.jpg"/>
        <asset id="1090" src="$url/module/ui/farm/diy/69.jpg"/>
        <asset id="1089" src="$url/module/ui/farm/diy/69.swf"/>
        <asset id="4052" src="$url/module/ui/farm/diy/690.jpg"/>
        <asset id="4051" src="$url/module/ui/farm/diy/690.swf"/>
        <asset id="4053" src="$url/module/ui/farm/diy/690b.jpg"/>
        <asset id="4055" src="$url/module/ui/farm/diy/691.jpg"/>
        <asset id="4054" src="$url/module/ui/farm/diy/691.swf"/>
        <asset id="4056" src="$url/module/ui/farm/diy/691b.jpg"/>
        <asset id="4058" src="$url/module/ui/farm/diy/692.jpg"/>
        <asset id="4057" src="$url/module/ui/farm/diy/692.swf"/>
        <asset id="4059" src="$url/module/ui/farm/diy/692b.jpg"/>
        <asset id="4061" src="$url/module/ui/farm/diy/693.jpg"/>
        <asset id="4060" src="$url/module/ui/farm/diy/693.swf"/>
        <asset id="4062" src="$url/module/ui/farm/diy/693b.jpg"/>
        <asset id="4064" src="$url/module/ui/farm/diy/694.jpg"/>
        <asset id="4063" src="$url/module/ui/farm/diy/694.swf"/>
        <asset id="4065" src="$url/module/ui/farm/diy/694b.jpg"/>
        <asset id="4067" src="$url/module/ui/farm/diy/695.jpg"/>
        <asset id="4066" src="$url/module/ui/farm/diy/695.swf"/>
        <asset id="4068" src="$url/module/ui/farm/diy/695b.jpg"/>
        <asset id="4070" src="$url/module/ui/farm/diy/696.jpg"/>
        <asset id="4069" src="$url/module/ui/farm/diy/696.swf"/>
        <asset id="4071" src="$url/module/ui/farm/diy/696b.jpg"/>
        <asset id="4134" src="$url/module/ui/farm/diy/697.jpg"/>
        <asset id="4133" src="$url/module/ui/farm/diy/697.swf"/>
        <asset id="4135" src="$url/module/ui/farm/diy/697b.jpg"/>
        <asset id="4137" src="$url/module/ui/farm/diy/698.jpg"/>
        <asset id="4136" src="$url/module/ui/farm/diy/698.swf"/>
        <asset id="4138" src="$url/module/ui/farm/diy/698b.jpg"/>
        <asset id="4140" src="$url/module/ui/farm/diy/699.jpg"/>
        <asset id="4139" src="$url/module/ui/farm/diy/699.swf"/>
        <asset id="4141" src="$url/module/ui/farm/diy/699b.jpg"/>
        <asset id="1091" src="$url/module/ui/farm/diy/69b.jpg"/>
        <asset id="1093" src="$url/module/ui/farm/diy/70.jpg"/>
        <asset id="1092" src="$url/module/ui/farm/diy/70.swf"/>
        <asset id="4143" src="$url/module/ui/farm/diy/700.jpg"/>
        <asset id="4142" src="$url/module/ui/farm/diy/700.swf"/>
        <asset id="4144" src="$url/module/ui/farm/diy/700b.jpg"/>
        <asset id="4164" src="$url/module/ui/farm/diy/701.jpg"/>
        <asset id="4163" src="$url/module/ui/farm/diy/701.swf"/>
        <asset id="4165" src="$url/module/ui/farm/diy/701b.jpg"/>
        <asset id="4167" src="$url/module/ui/farm/diy/702.jpg"/>
        <asset id="4166" src="$url/module/ui/farm/diy/702.swf"/>
        <asset id="4168" src="$url/module/ui/farm/diy/702b.jpg"/>
        <asset id="4170" src="$url/module/ui/farm/diy/703.jpg"/>
        <asset id="4169" src="$url/module/ui/farm/diy/703.swf"/>
        <asset id="4171" src="$url/module/ui/farm/diy/703b.jpg"/>
        <asset id="4173" src="$url/module/ui/farm/diy/704.jpg"/>
        <asset id="4172" src="$url/module/ui/farm/diy/704.swf"/>
        <asset id="4174" src="$url/module/ui/farm/diy/704b.jpg"/>
        <asset id="4176" src="$url/module/ui/farm/diy/705.jpg"/>
        <asset id="4175" src="$url/module/ui/farm/diy/705.swf"/>
        <asset id="4177" src="$url/module/ui/farm/diy/705b.jpg"/>
        <asset id="4179" src="$url/module/ui/farm/diy/706.jpg"/>
        <asset id="4178" src="$url/module/ui/farm/diy/706.swf"/>
        <asset id="4180" src="$url/module/ui/farm/diy/706b.jpg"/>
        <asset id="4182" src="$url/module/ui/farm/diy/707.jpg"/>
        <asset id="4181" src="$url/module/ui/farm/diy/707.swf"/>
        <asset id="4183" src="$url/module/ui/farm/diy/707b.jpg"/>
        <asset id="4185" src="$url/module/ui/farm/diy/708.jpg"/>
        <asset id="4184" src="$url/module/ui/farm/diy/708.swf"/>
        <asset id="4186" src="$url/module/ui/farm/diy/708b.jpg"/>
        <asset id="4213" src="$url/module/ui/farm/diy/709.jpg"/>
        <asset id="4212" src="$url/module/ui/farm/diy/709.swf"/>
        <asset id="4214" src="$url/module/ui/farm/diy/709b.jpg"/>
        <asset id="1094" src="$url/module/ui/farm/diy/70b.jpg"/>
        <asset id="1096" src="$url/module/ui/farm/diy/71.jpg"/>
        <asset id="1095" src="$url/module/ui/farm/diy/71.swf"/>
        <asset id="4216" src="$url/module/ui/farm/diy/710.jpg"/>
        <asset id="4215" src="$url/module/ui/farm/diy/710.swf"/>
        <asset id="4217" src="$url/module/ui/farm/diy/710b.jpg"/>
        <asset id="4219" src="$url/module/ui/farm/diy/711.jpg"/>
        <asset id="4218" src="$url/module/ui/farm/diy/711.swf"/>
        <asset id="4220" src="$url/module/ui/farm/diy/711b.jpg"/>
        <asset id="4222" src="$url/module/ui/farm/diy/712.jpg"/>
        <asset id="4221" src="$url/module/ui/farm/diy/712.swf"/>
        <asset id="4223" src="$url/module/ui/farm/diy/712b.jpg"/>
        <asset id="4236" src="$url/module/ui/farm/diy/713.jpg"/>
        <asset id="4235" src="$url/module/ui/farm/diy/713.swf"/>
        <asset id="4237" src="$url/module/ui/farm/diy/713b.jpg"/>
        <asset id="4239" src="$url/module/ui/farm/diy/714.jpg"/>
        <asset id="4238" src="$url/module/ui/farm/diy/714.swf"/>
        <asset id="4240" src="$url/module/ui/farm/diy/714b.jpg"/>
        <asset id="4242" src="$url/module/ui/farm/diy/715.jpg"/>
        <asset id="4241" src="$url/module/ui/farm/diy/715.swf"/>
        <asset id="4243" src="$url/module/ui/farm/diy/715b.jpg"/>
        <asset id="4245" src="$url/module/ui/farm/diy/716.jpg"/>
        <asset id="4244" src="$url/module/ui/farm/diy/716.swf"/>
        <asset id="4246" src="$url/module/ui/farm/diy/716b.jpg"/>
        <asset id="4276" src="$url/module/ui/farm/diy/717.jpg"/>
        <asset id="4275" src="$url/module/ui/farm/diy/717.swf"/>
        <asset id="4277" src="$url/module/ui/farm/diy/717b.jpg"/>
        <asset id="4279" src="$url/module/ui/farm/diy/718.jpg"/>
        <asset id="4278" src="$url/module/ui/farm/diy/718.swf"/>
        <asset id="4280" src="$url/module/ui/farm/diy/718b.jpg"/>
        <asset id="4288" src="$url/module/ui/farm/diy/719.jpg"/>
        <asset id="4287" src="$url/module/ui/farm/diy/719.swf"/>
        <asset id="4289" src="$url/module/ui/farm/diy/719b.jpg"/>
        <asset id="1097" src="$url/module/ui/farm/diy/71b.jpg"/>
        <asset id="1099" src="$url/module/ui/farm/diy/72.jpg"/>
        <asset id="1098" src="$url/module/ui/farm/diy/72.swf"/>
        <asset id="4291" src="$url/module/ui/farm/diy/720.jpg"/>
        <asset id="4290" src="$url/module/ui/farm/diy/720.swf"/>
        <asset id="4292" src="$url/module/ui/farm/diy/720b.jpg"/>
        <asset id="4364" src="$url/module/ui/farm/diy/721.jpg"/>
        <asset id="4363" src="$url/module/ui/farm/diy/721.swf"/>
        <asset id="4365" src="$url/module/ui/farm/diy/721b.jpg"/>
        <asset id="4367" src="$url/module/ui/farm/diy/722.jpg"/>
        <asset id="4366" src="$url/module/ui/farm/diy/722.swf"/>
        <asset id="4368" src="$url/module/ui/farm/diy/722b.jpg"/>
        <asset id="4370" src="$url/module/ui/farm/diy/723.jpg"/>
        <asset id="4369" src="$url/module/ui/farm/diy/723.swf"/>
        <asset id="4371" src="$url/module/ui/farm/diy/723b.jpg"/>
        <asset id="4373" src="$url/module/ui/farm/diy/724.jpg"/>
        <asset id="4372" src="$url/module/ui/farm/diy/724.swf"/>
        <asset id="4374" src="$url/module/ui/farm/diy/724b.jpg"/>
        <asset id="4376" src="$url/module/ui/farm/diy/725.jpg"/>
        <asset id="4375" src="$url/module/ui/farm/diy/725.swf"/>
        <asset id="4377" src="$url/module/ui/farm/diy/725b.jpg"/>
        <asset id="4379" src="$url/module/ui/farm/diy/726.jpg"/>
        <asset id="4378" src="$url/module/ui/farm/diy/726.swf"/>
        <asset id="4380" src="$url/module/ui/farm/diy/726b.jpg"/>
        <asset id="4382" src="$url/module/ui/farm/diy/727.jpg"/>
        <asset id="4381" src="$url/module/ui/farm/diy/727.swf"/>
        <asset id="4383" src="$url/module/ui/farm/diy/727b.jpg"/>
        <asset id="4385" src="$url/module/ui/farm/diy/728.jpg"/>
        <asset id="4384" src="$url/module/ui/farm/diy/728.swf"/>
        <asset id="4386" src="$url/module/ui/farm/diy/728b.jpg"/>
        <asset id="4455" src="$url/module/ui/farm/diy/729.jpg"/>
        <asset id="4454" src="$url/module/ui/farm/diy/729.swf"/>
        <asset id="4456" src="$url/module/ui/farm/diy/729b.jpg"/>
        <asset id="1100" src="$url/module/ui/farm/diy/72b.jpg"/>
        <asset id="1102" src="$url/module/ui/farm/diy/73.jpg"/>
        <asset id="1101" src="$url/module/ui/farm/diy/73.swf"/>
        <asset id="4458" src="$url/module/ui/farm/diy/730.jpg"/>
        <asset id="4457" src="$url/module/ui/farm/diy/730.swf"/>
        <asset id="4459" src="$url/module/ui/farm/diy/730b.jpg"/>
        <asset id="4461" src="$url/module/ui/farm/diy/731.jpg"/>
        <asset id="4460" src="$url/module/ui/farm/diy/731.swf"/>
        <asset id="4462" src="$url/module/ui/farm/diy/731b.jpg"/>
        <asset id="4466" src="$url/module/ui/farm/diy/732.jpg"/>
        <asset id="4463" src="$url/module/ui/farm/diy/732.swf"/>
        <asset id="4472" src="$url/module/ui/farm/diy/732b.jpg"/>
        <asset id="4474" src="$url/module/ui/farm/diy/733.jpg"/>
        <asset id="4473" src="$url/module/ui/farm/diy/733.swf"/>
        <asset id="4475" src="$url/module/ui/farm/diy/733b.jpg"/>
        <asset id="4477" src="$url/module/ui/farm/diy/734.jpg"/>
        <asset id="4476" src="$url/module/ui/farm/diy/734.swf"/>
        <asset id="4478" src="$url/module/ui/farm/diy/734b.jpg"/>
        <asset id="4480" src="$url/module/ui/farm/diy/735.jpg"/>
        <asset id="4479" src="$url/module/ui/farm/diy/735.swf"/>
        <asset id="4481" src="$url/module/ui/farm/diy/735b.jpg"/>
        <asset id="4483" src="$url/module/ui/farm/diy/736.jpg"/>
        <asset id="4482" src="$url/module/ui/farm/diy/736.swf"/>
        <asset id="4484" src="$url/module/ui/farm/diy/736b.jpg"/>
        <asset id="4574" src="$url/module/ui/farm/diy/737.jpg"/>
        <asset id="4573" src="$url/module/ui/farm/diy/737.swf"/>
        <asset id="4575" src="$url/module/ui/farm/diy/737b.jpg"/>
        <asset id="4577" src="$url/module/ui/farm/diy/738.jpg"/>
        <asset id="4576" src="$url/module/ui/farm/diy/738.swf"/>
        <asset id="4578" src="$url/module/ui/farm/diy/738b.jpg"/>
        <asset id="4580" src="$url/module/ui/farm/diy/739.jpg"/>
        <asset id="4579" src="$url/module/ui/farm/diy/739.swf"/>
        <asset id="4581" src="$url/module/ui/farm/diy/739b.jpg"/>
        <asset id="1103" src="$url/module/ui/farm/diy/73b.jpg"/>
        <asset id="1105" src="$url/module/ui/farm/diy/74.jpg"/>
        <asset id="1104" src="$url/module/ui/farm/diy/74.swf"/>
        <asset id="4583" src="$url/module/ui/farm/diy/740.jpg"/>
        <asset id="4582" src="$url/module/ui/farm/diy/740.swf"/>
        <asset id="4584" src="$url/module/ui/farm/diy/740b.jpg"/>
        <asset id="4586" src="$url/module/ui/farm/diy/741.jpg"/>
        <asset id="4585" src="$url/module/ui/farm/diy/741.swf"/>
        <asset id="4587" src="$url/module/ui/farm/diy/741b.jpg"/>
        <asset id="4589" src="$url/module/ui/farm/diy/742.jpg"/>
        <asset id="4588" src="$url/module/ui/farm/diy/742.swf"/>
        <asset id="4590" src="$url/module/ui/farm/diy/742b.jpg"/>
        <asset id="4592" src="$url/module/ui/farm/diy/743.jpg"/>
        <asset id="4591" src="$url/module/ui/farm/diy/743.swf"/>
        <asset id="4593" src="$url/module/ui/farm/diy/743b.jpg"/>
        <asset id="4595" src="$url/module/ui/farm/diy/744.jpg"/>
        <asset id="4594" src="$url/module/ui/farm/diy/744.swf"/>
        <asset id="4596" src="$url/module/ui/farm/diy/744b.jpg"/>
        <asset id="4634" src="$url/module/ui/farm/diy/745.jpg"/>
        <asset id="4633" src="$url/module/ui/farm/diy/745.swf"/>
        <asset id="4635" src="$url/module/ui/farm/diy/745b.jpg"/>
        <asset id="4637" src="$url/module/ui/farm/diy/746.jpg"/>
        <asset id="4636" src="$url/module/ui/farm/diy/746.swf"/>
        <asset id="4638" src="$url/module/ui/farm/diy/746b.jpg"/>
        <asset id="4640" src="$url/module/ui/farm/diy/747.jpg"/>
        <asset id="4639" src="$url/module/ui/farm/diy/747.swf"/>
        <asset id="4641" src="$url/module/ui/farm/diy/747b.jpg"/>
        <asset id="4643" src="$url/module/ui/farm/diy/748.jpg"/>
        <asset id="4642" src="$url/module/ui/farm/diy/748.swf"/>
        <asset id="4644" src="$url/module/ui/farm/diy/748b.jpg"/>
        <asset id="4646" src="$url/module/ui/farm/diy/749.jpg"/>
        <asset id="4645" src="$url/module/ui/farm/diy/749.swf"/>
        <asset id="4647" src="$url/module/ui/farm/diy/749b.jpg"/>
        <asset id="1106" src="$url/module/ui/farm/diy/74b.jpg"/>
        <asset id="1108" src="$url/module/ui/farm/diy/75.jpg"/>
        <asset id="1107" src="$url/module/ui/farm/diy/75.swf"/>
        <asset id="4649" src="$url/module/ui/farm/diy/750.jpg"/>
        <asset id="4648" src="$url/module/ui/farm/diy/750.swf"/>
        <asset id="4650" src="$url/module/ui/farm/diy/750b.jpg"/>
        <asset id="4652" src="$url/module/ui/farm/diy/751.jpg"/>
        <asset id="4651" src="$url/module/ui/farm/diy/751.swf"/>
        <asset id="4653" src="$url/module/ui/farm/diy/751b.jpg"/>
        <asset id="4655" src="$url/module/ui/farm/diy/752.jpg"/>
        <asset id="4654" src="$url/module/ui/farm/diy/752.swf"/>
        <asset id="4656" src="$url/module/ui/farm/diy/752b.jpg"/>
        <asset id="4658" src="$url/module/ui/farm/diy/753.jpg"/>
        <asset id="4657" src="$url/module/ui/farm/diy/753.swf"/>
        <asset id="4659" src="$url/module/ui/farm/diy/753b.jpg"/>
        <asset id="4661" src="$url/module/ui/farm/diy/754.jpg"/>
        <asset id="4660" src="$url/module/ui/farm/diy/754.swf"/>
        <asset id="4662" src="$url/module/ui/farm/diy/754b.jpg"/>
        <asset id="4664" src="$url/module/ui/farm/diy/755.jpg"/>
        <asset id="4663" src="$url/module/ui/farm/diy/755.swf"/>
        <asset id="4665" src="$url/module/ui/farm/diy/755b.jpg"/>
        <asset id="4667" src="$url/module/ui/farm/diy/756.jpg"/>
        <asset id="4666" src="$url/module/ui/farm/diy/756.swf"/>
        <asset id="4668" src="$url/module/ui/farm/diy/756b.jpg"/>
        <asset id="4762" src="$url/module/ui/farm/diy/757.jpg"/>
        <asset id="4761" src="$url/module/ui/farm/diy/757.swf"/>
        <asset id="4763" src="$url/module/ui/farm/diy/757b.jpg"/>
        <asset id="4765" src="$url/module/ui/farm/diy/758.jpg"/>
        <asset id="4764" src="$url/module/ui/farm/diy/758.swf"/>
        <asset id="4766" src="$url/module/ui/farm/diy/758b.jpg"/>
        <asset id="4768" src="$url/module/ui/farm/diy/759.jpg"/>
        <asset id="4767" src="$url/module/ui/farm/diy/759.swf"/>
        <asset id="4769" src="$url/module/ui/farm/diy/759b.jpg"/>
        <asset id="1109" src="$url/module/ui/farm/diy/75b.jpg"/>
        <asset id="1111" src="$url/module/ui/farm/diy/76.jpg"/>
        <asset id="1110" src="$url/module/ui/farm/diy/76.swf"/>
        <asset id="4771" src="$url/module/ui/farm/diy/760.jpg"/>
        <asset id="4770" src="$url/module/ui/farm/diy/760.swf"/>
        <asset id="4772" src="$url/module/ui/farm/diy/760b.jpg"/>
        <asset id="4830" src="$url/module/ui/farm/diy/761.jpg"/>
        <asset id="4829" src="$url/module/ui/farm/diy/761.swf"/>
        <asset id="4831" src="$url/module/ui/farm/diy/761b.jpg"/>
        <asset id="4833" src="$url/module/ui/farm/diy/762.jpg"/>
        <asset id="4832" src="$url/module/ui/farm/diy/762.swf"/>
        <asset id="4834" src="$url/module/ui/farm/diy/762b.jpg"/>
        <asset id="4836" src="$url/module/ui/farm/diy/763.jpg"/>
        <asset id="4835" src="$url/module/ui/farm/diy/763.swf"/>
        <asset id="4837" src="$url/module/ui/farm/diy/763b.jpg"/>
        <asset id="4839" src="$url/module/ui/farm/diy/764.jpg"/>
        <asset id="4838" src="$url/module/ui/farm/diy/764.swf"/>
        <asset id="4840" src="$url/module/ui/farm/diy/764b.jpg"/>
        <asset id="4848" src="$url/module/ui/farm/diy/765.jpg"/>
        <asset id="4847" src="$url/module/ui/farm/diy/765.swf"/>
        <asset id="4849" src="$url/module/ui/farm/diy/765b.jpg"/>
        <asset id="4851" src="$url/module/ui/farm/diy/766.jpg"/>
        <asset id="4850" src="$url/module/ui/farm/diy/766.swf"/>
        <asset id="4852" src="$url/module/ui/farm/diy/766b.jpg"/>
        <asset id="4854" src="$url/module/ui/farm/diy/767.jpg"/>
        <asset id="4853" src="$url/module/ui/farm/diy/767.swf"/>
        <asset id="4855" src="$url/module/ui/farm/diy/767b.jpg"/>
        <asset id="4857" src="$url/module/ui/farm/diy/768.jpg"/>
        <asset id="4856" src="$url/module/ui/farm/diy/768.swf"/>
        <asset id="4858" src="$url/module/ui/farm/diy/768b.jpg"/>
        <asset id="4860" src="$url/module/ui/farm/diy/769.jpg"/>
        <asset id="4859" src="$url/module/ui/farm/diy/769.swf"/>
        <asset id="4861" src="$url/module/ui/farm/diy/769b.jpg"/>
        <asset id="1112" src="$url/module/ui/farm/diy/76b.jpg"/>
        <asset id="1114" src="$url/module/ui/farm/diy/77.jpg"/>
        <asset id="1113" src="$url/module/ui/farm/diy/77.swf"/>
        <asset id="4863" src="$url/module/ui/farm/diy/770.jpg"/>
        <asset id="4862" src="$url/module/ui/farm/diy/770.swf"/>
        <asset id="4864" src="$url/module/ui/farm/diy/770b.jpg"/>
        <asset id="4866" src="$url/module/ui/farm/diy/771.jpg"/>
        <asset id="4865" src="$url/module/ui/farm/diy/771.swf"/>
        <asset id="4867" src="$url/module/ui/farm/diy/771b.jpg"/>
        <asset id="4869" src="$url/module/ui/farm/diy/772.jpg"/>
        <asset id="4868" src="$url/module/ui/farm/diy/772.swf"/>
        <asset id="4870" src="$url/module/ui/farm/diy/772b.jpg"/>
        <asset id="5035" src="$url/module/ui/farm/diy/773.jpg"/>
        <asset id="5034" src="$url/module/ui/farm/diy/773.swf"/>
        <asset id="5036" src="$url/module/ui/farm/diy/773b.jpg"/>
        <asset id="5038" src="$url/module/ui/farm/diy/774.jpg"/>
        <asset id="5037" src="$url/module/ui/farm/diy/774.swf"/>
        <asset id="5039" src="$url/module/ui/farm/diy/774b.jpg"/>
        <asset id="5041" src="$url/module/ui/farm/diy/775.jpg"/>
        <asset id="5040" src="$url/module/ui/farm/diy/775.swf"/>
        <asset id="5042" src="$url/module/ui/farm/diy/775b.jpg"/>
        <asset id="5044" src="$url/module/ui/farm/diy/776.jpg"/>
        <asset id="5043" src="$url/module/ui/farm/diy/776.swf"/>
        <asset id="5045" src="$url/module/ui/farm/diy/776b.jpg"/>
        <asset id="5047" src="$url/module/ui/farm/diy/777.jpg"/>
        <asset id="5046" src="$url/module/ui/farm/diy/777.swf"/>
        <asset id="5048" src="$url/module/ui/farm/diy/777b.jpg"/>
        <asset id="5050" src="$url/module/ui/farm/diy/778.jpg"/>
        <asset id="5049" src="$url/module/ui/farm/diy/778.swf"/>
        <asset id="5051" src="$url/module/ui/farm/diy/778b.jpg"/>
        <asset id="5053" src="$url/module/ui/farm/diy/779.jpg"/>
        <asset id="5052" src="$url/module/ui/farm/diy/779.swf"/>
        <asset id="5054" src="$url/module/ui/farm/diy/779b.jpg"/>
        <asset id="1115" src="$url/module/ui/farm/diy/77b.jpg"/>
        <asset id="1117" src="$url/module/ui/farm/diy/78.jpg"/>
        <asset id="1116" src="$url/module/ui/farm/diy/78.swf"/>
        <asset id="5056" src="$url/module/ui/farm/diy/780.jpg"/>
        <asset id="5055" src="$url/module/ui/farm/diy/780.swf"/>
        <asset id="5057" src="$url/module/ui/farm/diy/780b.jpg"/>
        <asset id="5189" src="$url/module/ui/farm/diy/781.jpg"/>
        <asset id="5188" src="$url/module/ui/farm/diy/781.swf"/>
        <asset id="5190" src="$url/module/ui/farm/diy/781b.jpg"/>
        <asset id="5192" src="$url/module/ui/farm/diy/782.jpg"/>
        <asset id="5191" src="$url/module/ui/farm/diy/782.swf"/>
        <asset id="5193" src="$url/module/ui/farm/diy/782b.jpg"/>
        <asset id="5195" src="$url/module/ui/farm/diy/783.jpg"/>
        <asset id="5194" src="$url/module/ui/farm/diy/783.swf"/>
        <asset id="5196" src="$url/module/ui/farm/diy/783b.jpg"/>
        <asset id="5198" src="$url/module/ui/farm/diy/784.jpg"/>
        <asset id="5197" src="$url/module/ui/farm/diy/784.swf"/>
        <asset id="5199" src="$url/module/ui/farm/diy/784b.jpg"/>
        <asset id="5201" src="$url/module/ui/farm/diy/785.jpg"/>
        <asset id="5200" src="$url/module/ui/farm/diy/785.swf"/>
        <asset id="5202" src="$url/module/ui/farm/diy/785b.jpg"/>
        <asset id="5204" src="$url/module/ui/farm/diy/786.jpg"/>
        <asset id="5203" src="$url/module/ui/farm/diy/786.swf"/>
        <asset id="5205" src="$url/module/ui/farm/diy/786b.jpg"/>
        <asset id="5207" src="$url/module/ui/farm/diy/787.jpg"/>
        <asset id="5206" src="$url/module/ui/farm/diy/787.swf"/>
        <asset id="5208" src="$url/module/ui/farm/diy/787b.jpg"/>
        <asset id="5210" src="$url/module/ui/farm/diy/788.jpg"/>
        <asset id="5209" src="$url/module/ui/farm/diy/788.swf"/>
        <asset id="5211" src="$url/module/ui/farm/diy/788b.jpg"/>
        <asset id="5213" src="$url/module/ui/farm/diy/789.jpg"/>
        <asset id="5212" src="$url/module/ui/farm/diy/789.swf"/>
        <asset id="5214" src="$url/module/ui/farm/diy/789b.jpg"/>
        <asset id="1118" src="$url/module/ui/farm/diy/78b.jpg"/>
        <asset id="1120" src="$url/module/ui/farm/diy/79.jpg"/>
        <asset id="1119" src="$url/module/ui/farm/diy/79.swf"/>
        <asset id="5216" src="$url/module/ui/farm/diy/790.jpg"/>
        <asset id="5215" src="$url/module/ui/farm/diy/790.swf"/>
        <asset id="5217" src="$url/module/ui/farm/diy/790b.jpg"/>
        <asset id="5219" src="$url/module/ui/farm/diy/791.jpg"/>
        <asset id="5218" src="$url/module/ui/farm/diy/791.swf"/>
        <asset id="5220" src="$url/module/ui/farm/diy/791b.jpg"/>
        <asset id="5222" src="$url/module/ui/farm/diy/792.jpg"/>
        <asset id="5221" src="$url/module/ui/farm/diy/792.swf"/>
        <asset id="5223" src="$url/module/ui/farm/diy/792b.jpg"/>
        <asset id="5456" src="$url/module/ui/farm/diy/793.jpg"/>
        <asset id="5455" src="$url/module/ui/farm/diy/793.swf"/>
        <asset id="5457" src="$url/module/ui/farm/diy/793b.jpg"/>
        <asset id="5459" src="$url/module/ui/farm/diy/794.jpg"/>
        <asset id="5458" src="$url/module/ui/farm/diy/794.swf"/>
        <asset id="5460" src="$url/module/ui/farm/diy/794b.jpg"/>
        <asset id="5462" src="$url/module/ui/farm/diy/795.jpg"/>
        <asset id="5461" src="$url/module/ui/farm/diy/795.swf"/>
        <asset id="5463" src="$url/module/ui/farm/diy/795b.jpg"/>
        <asset id="5465" src="$url/module/ui/farm/diy/796.jpg"/>
        <asset id="5464" src="$url/module/ui/farm/diy/796.swf"/>
        <asset id="5466" src="$url/module/ui/farm/diy/796b.jpg"/>
        <asset id="6356" src="$url/module/ui/farm/diy/797.jpg"/>
        <asset id="6355" src="$url/module/ui/farm/diy/797.swf"/>
        <asset id="6357" src="$url/module/ui/farm/diy/797b.jpg"/>
        <asset id="6359" src="$url/module/ui/farm/diy/798.jpg"/>
        <asset id="6358" src="$url/module/ui/farm/diy/798.swf"/>
        <asset id="6360" src="$url/module/ui/farm/diy/798b.jpg"/>
        <asset id="6362" src="$url/module/ui/farm/diy/799.jpg"/>
        <asset id="6361" src="$url/module/ui/farm/diy/799.swf"/>
        <asset id="6363" src="$url/module/ui/farm/diy/799b.jpg"/>
        <asset id="1121" src="$url/module/ui/farm/diy/79b.jpg"/>
        <asset id="1123" src="$url/module/ui/farm/diy/80.jpg"/>
        <asset id="1122" src="$url/module/ui/farm/diy/80.swf"/>
        <asset id="6365" src="$url/module/ui/farm/diy/800.jpg"/>
        <asset id="6364" src="$url/module/ui/farm/diy/800.swf"/>
        <asset id="6366" src="$url/module/ui/farm/diy/800b.jpg"/>
        <asset id="6312" src="$url/module/ui/farm/diy/801.jpg"/>
        <asset id="6311" src="$url/module/ui/farm/diy/801.swf"/>
        <asset id="6313" src="$url/module/ui/farm/diy/801b.jpg"/>
        <asset id="6315" src="$url/module/ui/farm/diy/802.jpg"/>
        <asset id="6314" src="$url/module/ui/farm/diy/802.swf"/>
        <asset id="6316" src="$url/module/ui/farm/diy/802b.jpg"/>
        <asset id="6318" src="$url/module/ui/farm/diy/803.jpg"/>
        <asset id="6317" src="$url/module/ui/farm/diy/803.swf"/>
        <asset id="6319" src="$url/module/ui/farm/diy/803b.jpg"/>
        <asset id="6321" src="$url/module/ui/farm/diy/804.jpg"/>
        <asset id="6320" src="$url/module/ui/farm/diy/804.swf"/>
        <asset id="6322" src="$url/module/ui/farm/diy/804b.jpg"/>
        <asset id="6612" src="$url/module/ui/farm/diy/805.jpg"/>
        <asset id="6611" src="$url/module/ui/farm/diy/805.swf"/>
        <asset id="6613" src="$url/module/ui/farm/diy/805b.jpg"/>
        <asset id="6615" src="$url/module/ui/farm/diy/806.jpg"/>
        <asset id="6614" src="$url/module/ui/farm/diy/806.swf"/>
        <asset id="6616" src="$url/module/ui/farm/diy/806b.jpg"/>
        <asset id="6618" src="$url/module/ui/farm/diy/807.jpg"/>
        <asset id="6617" src="$url/module/ui/farm/diy/807.swf"/>
        <asset id="6619" src="$url/module/ui/farm/diy/807b.jpg"/>
        <asset id="6621" src="$url/module/ui/farm/diy/808.jpg"/>
        <asset id="6620" src="$url/module/ui/farm/diy/808.swf"/>
        <asset id="6622" src="$url/module/ui/farm/diy/808b.jpg"/>
        <asset id="6624" src="$url/module/ui/farm/diy/809.jpg"/>
        <asset id="6623" src="$url/module/ui/farm/diy/809.swf"/>
        <asset id="6625" src="$url/module/ui/farm/diy/809b.jpg"/>
        <asset id="1124" src="$url/module/ui/farm/diy/80b.jpg"/>
        <asset id="1126" src="$url/module/ui/farm/diy/81.jpg"/>
        <asset id="1125" src="$url/module/ui/farm/diy/81.swf"/>
        <asset id="6626" src="$url/module/ui/farm/diy/810.jpg"/>
        <asset id="6628" src="$url/module/ui/farm/diy/810.swf"/>
        <asset id="6627" src="$url/module/ui/farm/diy/810b.jpg"/>
        <asset id="6630" src="$url/module/ui/farm/diy/811.jpg"/>
        <asset id="6629" src="$url/module/ui/farm/diy/811.swf"/>
        <asset id="6631" src="$url/module/ui/farm/diy/811b.jpg"/>
        <asset id="6633" src="$url/module/ui/farm/diy/812.jpg"/>
        <asset id="6632" src="$url/module/ui/farm/diy/812.swf"/>
        <asset id="6634" src="$url/module/ui/farm/diy/812b.jpg"/>
        <asset id="6765" src="$url/module/ui/farm/diy/813.jpg"/>
        <asset id="6764" src="$url/module/ui/farm/diy/813.swf"/>
        <asset id="6766" src="$url/module/ui/farm/diy/813b.jpg"/>
        <asset id="6768" src="$url/module/ui/farm/diy/814.jpg"/>
        <asset id="6767" src="$url/module/ui/farm/diy/814.swf"/>
        <asset id="6769" src="$url/module/ui/farm/diy/814b.jpg"/>
        <asset id="6771" src="$url/module/ui/farm/diy/815.jpg"/>
        <asset id="6770" src="$url/module/ui/farm/diy/815.swf"/>
        <asset id="6772" src="$url/module/ui/farm/diy/815b.jpg"/>
        <asset id="6774" src="$url/module/ui/farm/diy/816.jpg"/>
        <asset id="6773" src="$url/module/ui/farm/diy/816.swf"/>
        <asset id="6775" src="$url/module/ui/farm/diy/816b.jpg"/>
        <asset id="6777" src="$url/module/ui/farm/diy/817.jpg"/>
        <asset id="6776" src="$url/module/ui/farm/diy/817.swf"/>
        <asset id="6778" src="$url/module/ui/farm/diy/817b.jpg"/>
        <asset id="6780" src="$url/module/ui/farm/diy/818.jpg"/>
        <asset id="6779" src="$url/module/ui/farm/diy/818.swf"/>
        <asset id="6781" src="$url/module/ui/farm/diy/818b.jpg"/>
        <asset id="6783" src="$url/module/ui/farm/diy/819.jpg"/>
        <asset id="6782" src="$url/module/ui/farm/diy/819.swf"/>
        <asset id="6784" src="$url/module/ui/farm/diy/819b.jpg"/>
        <asset id="1127" src="$url/module/ui/farm/diy/81b.jpg"/>
        <asset id="1129" src="$url/module/ui/farm/diy/82.jpg"/>
        <asset id="1128" src="$url/module/ui/farm/diy/82.swf"/>
        <asset id="6786" src="$url/module/ui/farm/diy/820.jpg"/>
        <asset id="6785" src="$url/module/ui/farm/diy/820.swf"/>
        <asset id="7000" src="$url/module/ui/farm/diy/821.jpg"/>
        <asset id="6999" src="$url/module/ui/farm/diy/821.swf"/>
        <asset id="7001" src="$url/module/ui/farm/diy/821b.jpg"/>
        <asset id="7003" src="$url/module/ui/farm/diy/822.jpg"/>
        <asset id="7002" src="$url/module/ui/farm/diy/822.swf"/>
        <asset id="7004" src="$url/module/ui/farm/diy/822b.jpg"/>
        <asset id="7006" src="$url/module/ui/farm/diy/823.jpg"/>
        <asset id="7005" src="$url/module/ui/farm/diy/823.swf"/>
        <asset id="7007" src="$url/module/ui/farm/diy/823b.jpg"/>
        <asset id="7009" src="$url/module/ui/farm/diy/824.jpg"/>
        <asset id="7008" src="$url/module/ui/farm/diy/824.swf"/>
        <asset id="7010" src="$url/module/ui/farm/diy/824b.jpg"/>
        <asset id="7012" src="$url/module/ui/farm/diy/825.jpg"/>
        <asset id="7011" src="$url/module/ui/farm/diy/825.swf"/>
        <asset id="7013" src="$url/module/ui/farm/diy/825b.jpg"/>
        <asset id="7015" src="$url/module/ui/farm/diy/826.jpg"/>
        <asset id="7014" src="$url/module/ui/farm/diy/826.swf"/>
        <asset id="7016" src="$url/module/ui/farm/diy/826b.jpg"/>
        <asset id="7018" src="$url/module/ui/farm/diy/827.jpg"/>
        <asset id="7017" src="$url/module/ui/farm/diy/827.swf"/>
        <asset id="7019" src="$url/module/ui/farm/diy/827b.jpg"/>
        <asset id="7021" src="$url/module/ui/farm/diy/828.jpg"/>
        <asset id="7020" src="$url/module/ui/farm/diy/828.swf"/>
        <asset id="7022" src="$url/module/ui/farm/diy/828b.jpg"/>
        <asset id="7117" src="$url/module/ui/farm/diy/829.jpg"/>
        <asset id="7116" src="$url/module/ui/farm/diy/829.swf"/>
        <asset id="7118" src="$url/module/ui/farm/diy/829b.jpg"/>
        <asset id="6787" src="$url/module/ui/farm/diy/820b.jpg"/>
        <asset id="1130" src="$url/module/ui/farm/diy/82b.jpg"/>
        <asset id="1132" src="$url/module/ui/farm/diy/83.jpg"/>
        <asset id="1131" src="$url/module/ui/farm/diy/83.swf"/>
        <asset id="7120" src="$url/module/ui/farm/diy/830.jpg"/>
        <asset id="7119" src="$url/module/ui/farm/diy/830.swf"/>
        <asset id="7121" src="$url/module/ui/farm/diy/830b.jpg"/>
        <asset id="7123" src="$url/module/ui/farm/diy/831.jpg"/>
        <asset id="7122" src="$url/module/ui/farm/diy/831.swf"/>
        <asset id="7124" src="$url/module/ui/farm/diy/831b.jpg"/>
        <asset id="7126" src="$url/module/ui/farm/diy/832.jpg"/>
        <asset id="7125" src="$url/module/ui/farm/diy/832.swf"/>
        <asset id="7127" src="$url/module/ui/farm/diy/832b.jpg"/>
        <asset id="7129" src="$url/module/ui/farm/diy/833.jpg"/>
        <asset id="7128" src="$url/module/ui/farm/diy/833.swf"/>
        <asset id="7130" src="$url/module/ui/farm/diy/833b.jpg"/>
        <asset id="7132" src="$url/module/ui/farm/diy/834.jpg"/>
        <asset id="7131" src="$url/module/ui/farm/diy/834.swf"/>
        <asset id="7133" src="$url/module/ui/farm/diy/834b.jpg"/>
        <asset id="7135" src="$url/module/ui/farm/diy/835.jpg"/>
        <asset id="7134" src="$url/module/ui/farm/diy/835.swf"/>
        <asset id="7136" src="$url/module/ui/farm/diy/835b.jpg"/>
        <asset id="7138" src="$url/module/ui/farm/diy/836.jpg"/>
        <asset id="7137" src="$url/module/ui/farm/diy/836.swf"/>
        <asset id="7139" src="$url/module/ui/farm/diy/836b.jpg"/>
        <asset id="7143" src="$url/module/ui/farm/diy/837.jpg"/>
        <asset id="7142" src="$url/module/ui/farm/diy/837.swf"/>
        <asset id="7144" src="$url/module/ui/farm/diy/837b.jpg"/>
        <asset id="7146" src="$url/module/ui/farm/diy/838.jpg"/>
        <asset id="7145" src="$url/module/ui/farm/diy/838.swf"/>
        <asset id="7147" src="$url/module/ui/farm/diy/838b.jpg"/>
        <asset id="7149" src="$url/module/ui/farm/diy/839.jpg"/>
        <asset id="7148" src="$url/module/ui/farm/diy/839.swf"/>
        <asset id="7150" src="$url/module/ui/farm/diy/839b.jpg"/>
        <asset id="1133" src="$url/module/ui/farm/diy/83b.jpg"/>
        <asset id="1135" src="$url/module/ui/farm/diy/84.jpg"/>
        <asset id="1134" src="$url/module/ui/farm/diy/84.swf"/>
        <asset id="7152" src="$url/module/ui/farm/diy/840.jpg"/>
        <asset id="7151" src="$url/module/ui/farm/diy/840.swf"/>
        <asset id="7153" src="$url/module/ui/farm/diy/840b.jpg"/>
        <asset id="7553" src="$url/module/ui/farm/diy/841.jpg"/>
        <asset id="7552" src="$url/module/ui/farm/diy/841.swf"/>
        <asset id="7554" src="$url/module/ui/farm/diy/841b.jpg"/>
        <asset id="7550" src="$url/module/ui/farm/diy/842.jpg"/>
        <asset id="7549" src="$url/module/ui/farm/diy/842.swf"/>
        <asset id="7551" src="$url/module/ui/farm/diy/842b.jpg"/>
        <asset id="7556" src="$url/module/ui/farm/diy/843.jpg"/>
        <asset id="7555" src="$url/module/ui/farm/diy/843.swf"/>
        <asset id="7557" src="$url/module/ui/farm/diy/843b.jpg"/>
        <asset id="7559" src="$url/module/ui/farm/diy/844.jpg"/>
        <asset id="7558" src="$url/module/ui/farm/diy/844.swf"/>
        <asset id="7560" src="$url/module/ui/farm/diy/844b.jpg"/>
        <asset id="7568" src="$url/module/ui/farm/diy/845.jpg"/>
        <asset id="7567" src="$url/module/ui/farm/diy/845.swf"/>
        <asset id="7569" src="$url/module/ui/farm/diy/845b.jpg"/>
        <asset id="7565" src="$url/module/ui/farm/diy/846.jpg"/>
        <asset id="7564" src="$url/module/ui/farm/diy/846.swf"/>
        <asset id="7566" src="$url/module/ui/farm/diy/846b.jpg"/>
        <asset id="7571" src="$url/module/ui/farm/diy/847.jpg"/>
        <asset id="7570" src="$url/module/ui/farm/diy/847.swf"/>
        <asset id="7572" src="$url/module/ui/farm/diy/847b.jpg"/>
        <asset id="7574" src="$url/module/ui/farm/diy/848.jpg"/>
        <asset id="7573" src="$url/module/ui/farm/diy/848.swf"/>
        <asset id="7575" src="$url/module/ui/farm/diy/848b.jpg"/>
        <asset id="8007" src="$url/module/ui/farm/diy/849.jpg"/>
        <asset id="8006" src="$url/module/ui/farm/diy/849.swf"/>
        <asset id="8008" src="$url/module/ui/farm/diy/849b.jpg"/>
        <asset id="1136" src="$url/module/ui/farm/diy/84b.jpg"/>
        <asset id="1138" src="$url/module/ui/farm/diy/85.jpg"/>
        <asset id="1137" src="$url/module/ui/farm/diy/85.swf"/>
        <asset id="8010" src="$url/module/ui/farm/diy/850.jpg"/>
        <asset id="8009" src="$url/module/ui/farm/diy/850.swf"/>
        <asset id="8011" src="$url/module/ui/farm/diy/850b.jpg"/>
        <asset id="8013" src="$url/module/ui/farm/diy/851.jpg"/>
        <asset id="8012" src="$url/module/ui/farm/diy/851.swf"/>
        <asset id="8014" src="$url/module/ui/farm/diy/851b.jpg"/>
        <asset id="8159" src="$url/module/ui/farm/diy/852.jpg"/>
        <asset id="8158" src="$url/module/ui/farm/diy/852.swf"/>
        <asset id="8160" src="$url/module/ui/farm/diy/852b.jpg"/>
        <asset id="7366" src="$url/module/ui/farm/diy/853.jpg"/>
        <asset id="7365" src="$url/module/ui/farm/diy/853.swf"/>
        <asset id="7367" src="$url/module/ui/farm/diy/853b.jpg"/>
        <asset id="7369" src="$url/module/ui/farm/diy/854.jpg"/>
        <asset id="7368" src="$url/module/ui/farm/diy/854.swf"/>
        <asset id="7370" src="$url/module/ui/farm/diy/854b.jpg"/>
        <asset id="7372" src="$url/module/ui/farm/diy/855.jpg"/>
        <asset id="7371" src="$url/module/ui/farm/diy/855.swf"/>
        <asset id="7373" src="$url/module/ui/farm/diy/855b.jpg"/>
        <asset id="7375" src="$url/module/ui/farm/diy/856.jpg"/>
        <asset id="7374" src="$url/module/ui/farm/diy/856.swf"/>
        <asset id="7376" src="$url/module/ui/farm/diy/856b.jpg"/>
        <asset id="7995" src="$url/module/ui/farm/diy/857.jpg"/>
        <asset id="7994" src="$url/module/ui/farm/diy/857.swf"/>
        <asset id="7996" src="$url/module/ui/farm/diy/857b.jpg"/>
        <asset id="7998" src="$url/module/ui/farm/diy/858.jpg"/>
        <asset id="7997" src="$url/module/ui/farm/diy/858.swf"/>
        <asset id="7999" src="$url/module/ui/farm/diy/858b.jpg"/>
        <asset id="8001" src="$url/module/ui/farm/diy/859.jpg"/>
        <asset id="8000" src="$url/module/ui/farm/diy/859.swf"/>
        <asset id="8002" src="$url/module/ui/farm/diy/859b.jpg"/>
        <asset id="1139" src="$url/module/ui/farm/diy/85b.jpg"/>
        <asset id="1141" src="$url/module/ui/farm/diy/86.jpg"/>
        <asset id="1140" src="$url/module/ui/farm/diy/86.swf"/>
        <asset id="8004" src="$url/module/ui/farm/diy/860.jpg"/>
        <asset id="8003" src="$url/module/ui/farm/diy/860.swf"/>
        <asset id="8005" src="$url/module/ui/farm/diy/860b.jpg"/>
        <asset id="8271" src="$url/module/ui/farm/diy/861.jpg"/>
        <asset id="8270" src="$url/module/ui/farm/diy/861.swf"/>
        <asset id="8272" src="$url/module/ui/farm/diy/861b.jpg"/>
        <asset id="8274" src="$url/module/ui/farm/diy/862.jpg"/>
        <asset id="8273" src="$url/module/ui/farm/diy/862.swf"/>
        <asset id="8275" src="$url/module/ui/farm/diy/862b.jpg"/>
        <asset id="8277" src="$url/module/ui/farm/diy/863.jpg"/>
        <asset id="8276" src="$url/module/ui/farm/diy/863.swf"/>
        <asset id="8278" src="$url/module/ui/farm/diy/863b.jpg"/>
        <asset id="8280" src="$url/module/ui/farm/diy/864.jpg"/>
        <asset id="8279" src="$url/module/ui/farm/diy/864.swf"/>
        <asset id="8281" src="$url/module/ui/farm/diy/864b.jpg"/>
        <asset id="8016" src="$url/module/ui/farm/diy/865.jpg"/>
        <asset id="8015" src="$url/module/ui/farm/diy/865.swf"/>
        <asset id="8017" src="$url/module/ui/farm/diy/865b.jpg"/>
        <asset id="8019" src="$url/module/ui/farm/diy/866.jpg"/>
        <asset id="8018" src="$url/module/ui/farm/diy/866.swf"/>
        <asset id="8020" src="$url/module/ui/farm/diy/866b.jpg"/>
        <asset id="8022" src="$url/module/ui/farm/diy/867.jpg"/>
        <asset id="8021" src="$url/module/ui/farm/diy/867.swf"/>
        <asset id="8023" src="$url/module/ui/farm/diy/867b.jpg"/>
        <asset id="8025" src="$url/module/ui/farm/diy/868.jpg"/>
        <asset id="8024" src="$url/module/ui/farm/diy/868.swf"/>
        <asset id="8026" src="$url/module/ui/farm/diy/868b.jpg"/>
        <asset id="8365" src="$url/module/ui/farm/diy/869.jpg"/>
        <asset id="8364" src="$url/module/ui/farm/diy/869.swf"/>
        <asset id="8366" src="$url/module/ui/farm/diy/869b.jpg"/>
        <asset id="1142" src="$url/module/ui/farm/diy/86b.jpg"/>
        <asset id="1144" src="$url/module/ui/farm/diy/87.jpg"/>
        <asset id="1143" src="$url/module/ui/farm/diy/87.swf"/>
        <asset id="8368" src="$url/module/ui/farm/diy/870.jpg"/>
        <asset id="8367" src="$url/module/ui/farm/diy/870.swf"/>
        <asset id="8369" src="$url/module/ui/farm/diy/870b.jpg"/>
        <asset id="8371" src="$url/module/ui/farm/diy/871.jpg"/>
        <asset id="8370" src="$url/module/ui/farm/diy/871.swf"/>
        <asset id="8372" src="$url/module/ui/farm/diy/871b.jpg"/>
        <asset id="8374" src="$url/module/ui/farm/diy/872.jpg"/>
        <asset id="8373" src="$url/module/ui/farm/diy/872.swf"/>
        <asset id="8375" src="$url/module/ui/farm/diy/872b.jpg"/>
        <asset id="8561" src="$url/module/ui/farm/diy/873.jpg"/>
        <asset id="8560" src="$url/module/ui/farm/diy/873.swf"/>
        <asset id="8562" src="$url/module/ui/farm/diy/873b.jpg"/>
        <asset id="8564" src="$url/module/ui/farm/diy/874.jpg"/>
        <asset id="8563" src="$url/module/ui/farm/diy/874.swf"/>
        <asset id="8565" src="$url/module/ui/farm/diy/874b.jpg"/>
        <asset id="8567" src="$url/module/ui/farm/diy/875.jpg"/>
        <asset id="8566" src="$url/module/ui/farm/diy/875.swf"/>
        <asset id="8568" src="$url/module/ui/farm/diy/875b.jpg"/>
        <asset id="8570" src="$url/module/ui/farm/diy/876.jpg"/>
        <asset id="8569" src="$url/module/ui/farm/diy/876.swf"/>
        <asset id="8571" src="$url/module/ui/farm/diy/876b.jpg"/>
        <asset id="9033" src="$url/module/ui/farm/diy/877.jpg"/>
        <asset id="9032" src="$url/module/ui/farm/diy/877.swf"/>
        <asset id="9034" src="$url/module/ui/farm/diy/877b.jpg"/>
        <asset id="9036" src="$url/module/ui/farm/diy/878.jpg"/>
        <asset id="9035" src="$url/module/ui/farm/diy/878.swf"/>
        <asset id="9037" src="$url/module/ui/farm/diy/878b.jpg"/>
        <asset id="9039" src="$url/module/ui/farm/diy/879.jpg"/>
        <asset id="9038" src="$url/module/ui/farm/diy/879.swf"/>
        <asset id="9040" src="$url/module/ui/farm/diy/879b.jpg"/>
        <asset id="1145" src="$url/module/ui/farm/diy/87b.jpg"/>
        <asset id="1147" src="$url/module/ui/farm/diy/88.jpg"/>
        <asset id="1146" src="$url/module/ui/farm/diy/88.swf"/>
        <asset id="9042" src="$url/module/ui/farm/diy/880.jpg"/>
        <asset id="9041" src="$url/module/ui/farm/diy/880.swf"/>
        <asset id="9043" src="$url/module/ui/farm/diy/880b.jpg"/>
        <asset id="9673" src="$url/module/ui/farm/diy/881.jpg"/>
        <asset id="9672" src="$url/module/ui/farm/diy/881.swf"/>
        <asset id="9674" src="$url/module/ui/farm/diy/881b.jpg"/>
        <asset id="9676" src="$url/module/ui/farm/diy/882.jpg"/>
        <asset id="9675" src="$url/module/ui/farm/diy/882.swf"/>
        <asset id="9677" src="$url/module/ui/farm/diy/882b.jpg"/>
        <asset id="9679" src="$url/module/ui/farm/diy/883.jpg"/>
        <asset id="9678" src="$url/module/ui/farm/diy/883.swf"/>
        <asset id="9680" src="$url/module/ui/farm/diy/883b.jpg"/>
        <asset id="9682" src="$url/module/ui/farm/diy/884.jpg"/>
        <asset id="9681" src="$url/module/ui/farm/diy/884.swf"/>
        <asset id="9683" src="$url/module/ui/farm/diy/884b.jpg"/>
        <asset id="9872" src="$url/module/ui/farm/diy/885.jpg"/>
        <asset id="9871" src="$url/module/ui/farm/diy/885.swf"/>
        <asset id="9873" src="$url/module/ui/farm/diy/885b.jpg"/>
        <asset id="9875" src="$url/module/ui/farm/diy/886.jpg"/>
        <asset id="9874" src="$url/module/ui/farm/diy/886.swf"/>
        <asset id="9876" src="$url/module/ui/farm/diy/886b.jpg"/>
        <asset id="9878" src="$url/module/ui/farm/diy/887.jpg"/>
        <asset id="9877" src="$url/module/ui/farm/diy/887.swf"/>
        <asset id="9879" src="$url/module/ui/farm/diy/887b.jpg"/>
        <asset id="9881" src="$url/module/ui/farm/diy/888.jpg"/>
        <asset id="9880" src="$url/module/ui/farm/diy/888.swf"/>
        <asset id="9882" src="$url/module/ui/farm/diy/888b.jpg"/>
        <asset id="10187" src="$url/module/ui/farm/diy/889.jpg"/>
        <asset id="10186" src="$url/module/ui/farm/diy/889.swf"/>
        <asset id="10188" src="$url/module/ui/farm/diy/889b.jpg"/>
        <asset id="1148" src="$url/module/ui/farm/diy/88b.jpg"/>
        <asset id="1150" src="$url/module/ui/farm/diy/89.jpg"/>
        <asset id="1149" src="$url/module/ui/farm/diy/89.swf"/>
        <asset id="10190" src="$url/module/ui/farm/diy/890.jpg"/>
        <asset id="10189" src="$url/module/ui/farm/diy/890.swf"/>
        <asset id="10191" src="$url/module/ui/farm/diy/890b.jpg"/>
        <asset id="10193" src="$url/module/ui/farm/diy/891.jpg"/>
        <asset id="10192" src="$url/module/ui/farm/diy/891.swf"/>
        <asset id="10194" src="$url/module/ui/farm/diy/891b.jpg"/>
        <asset id="10196" src="$url/module/ui/farm/diy/892.jpg"/>
        <asset id="10195" src="$url/module/ui/farm/diy/892.swf"/>
        <asset id="10197" src="$url/module/ui/farm/diy/892b.jpg"/>
        <asset id="1151" src="$url/module/ui/farm/diy/89b.jpg"/>
        <asset id="1153" src="$url/module/ui/farm/diy/90.jpg"/>
        <asset id="1152" src="$url/module/ui/farm/diy/90.swf"/>
        <asset id="10231" src="$url/module/ui/farm/diy/900.jpg"/>
        <asset id="10230" src="$url/module/ui/farm/diy/900.swf"/>
        <asset id="10232" src="$url/module/ui/farm/diy/900b.jpg"/>
        <asset id="10234" src="$url/module/ui/farm/diy/901.jpg"/>
        <asset id="10233" src="$url/module/ui/farm/diy/901.swf"/>
        <asset id="10235" src="$url/module/ui/farm/diy/901b.jpg"/>
        <asset id="10237" src="$url/module/ui/farm/diy/902.jpg"/>
        <asset id="10236" src="$url/module/ui/farm/diy/902.swf"/>
        <asset id="10238" src="$url/module/ui/farm/diy/902b.jpg"/>
        <asset id="10240" src="$url/module/ui/farm/diy/903.jpg"/>
        <asset id="10239" src="$url/module/ui/farm/diy/903.swf"/>
        <asset id="10241" src="$url/module/ui/farm/diy/903b.jpg"/>
        <asset id="10279" src="$url/module/ui/farm/diy/904.jpg"/>
        <asset id="10278" src="$url/module/ui/farm/diy/904.swf"/>
        <asset id="10280" src="$url/module/ui/farm/diy/904b.jpg"/>
        <asset id="10282" src="$url/module/ui/farm/diy/905.jpg"/>
        <asset id="10281" src="$url/module/ui/farm/diy/905.swf"/>
        <asset id="10283" src="$url/module/ui/farm/diy/905b.jpg"/>
        <asset id="10285" src="$url/module/ui/farm/diy/906.jpg"/>
        <asset id="10284" src="$url/module/ui/farm/diy/906.swf"/>
        <asset id="10286" src="$url/module/ui/farm/diy/906b.jpg"/>
        <asset id="10288" src="$url/module/ui/farm/diy/907.jpg"/>
        <asset id="10287" src="$url/module/ui/farm/diy/907.swf"/>
        <asset id="10289" src="$url/module/ui/farm/diy/907b.jpg"/>
        <asset id="10291" src="$url/module/ui/farm/diy/908.jpg"/>
        <asset id="10290" src="$url/module/ui/farm/diy/908.swf"/>
        <asset id="10292" src="$url/module/ui/farm/diy/908b.jpg"/>
        <asset id="10294" src="$url/module/ui/farm/diy/909.jpg"/>
        <asset id="10293" src="$url/module/ui/farm/diy/909.swf"/>
        <asset id="10295" src="$url/module/ui/farm/diy/909b.jpg"/>
        <asset id="1154" src="$url/module/ui/farm/diy/90b.jpg"/>
        <asset id="1156" src="$url/module/ui/farm/diy/91.jpg"/>
        <asset id="1155" src="$url/module/ui/farm/diy/91.swf"/>
        <asset id="10297" src="$url/module/ui/farm/diy/910.jpg"/>
        <asset id="10296" src="$url/module/ui/farm/diy/910.swf"/>
        <asset id="10298" src="$url/module/ui/farm/diy/910b.jpg"/>
        <asset id="10300" src="$url/module/ui/farm/diy/911.jpg"/>
        <asset id="10299" src="$url/module/ui/farm/diy/911.swf"/>
        <asset id="10301" src="$url/module/ui/farm/diy/911b.jpg"/>
        <asset id="10304" src="$url/module/ui/farm/diy/912.jpg"/>
        <asset id="10303" src="$url/module/ui/farm/diy/912.swf"/>
        <asset id="10305" src="$url/module/ui/farm/diy/912b.jpg"/>
        <asset id="10307" src="$url/module/ui/farm/diy/913.jpg"/>
        <asset id="10306" src="$url/module/ui/farm/diy/913.swf"/>
        <asset id="10308" src="$url/module/ui/farm/diy/913b.jpg"/>
        <asset id="10310" src="$url/module/ui/farm/diy/914.jpg"/>
        <asset id="10309" src="$url/module/ui/farm/diy/914.swf"/>
        <asset id="10311" src="$url/module/ui/farm/diy/914b.jpg"/>
        <asset id="10313" src="$url/module/ui/farm/diy/915.jpg"/>
        <asset id="10312" src="$url/module/ui/farm/diy/915.swf"/>
        <asset id="10314" src="$url/module/ui/farm/diy/915b.jpg"/>
        <asset id="10766" src="$url/module/ui/farm/diy/916.jpg"/>
        <asset id="10765" src="$url/module/ui/farm/diy/916.swf"/>
        <asset id="10767" src="$url/module/ui/farm/diy/916b.jpg"/>
        <asset id="10769" src="$url/module/ui/farm/diy/917.jpg"/>
        <asset id="10768" src="$url/module/ui/farm/diy/917.swf"/>
        <asset id="10770" src="$url/module/ui/farm/diy/917b.jpg"/>
        <asset id="10772" src="$url/module/ui/farm/diy/918.jpg"/>
        <asset id="10771" src="$url/module/ui/farm/diy/918.swf"/>
        <asset id="10773" src="$url/module/ui/farm/diy/918b.jpg"/>
        <asset id="10776" src="$url/module/ui/farm/diy/919.jpg"/>
        <asset id="10775" src="$url/module/ui/farm/diy/919.swf"/>
        <asset id="10777" src="$url/module/ui/farm/diy/919b.jpg"/>
        <asset id="1157" src="$url/module/ui/farm/diy/91b.jpg"/>
        <asset id="1159" src="$url/module/ui/farm/diy/92.jpg"/>
        <asset id="1158" src="$url/module/ui/farm/diy/92.swf"/>
        <asset id="11035" src="$url/module/ui/farm/diy/920.jpg"/>
        <asset id="11034" src="$url/module/ui/farm/diy/920.swf"/>
        <asset id="11036" src="$url/module/ui/farm/diy/920b.jpg"/>
        <asset id="11038" src="$url/module/ui/farm/diy/921.jpg"/>
        <asset id="11037" src="$url/module/ui/farm/diy/921.swf"/>
        <asset id="11039" src="$url/module/ui/farm/diy/921b.jpg"/>
        <asset id="11041" src="$url/module/ui/farm/diy/922.jpg"/>
        <asset id="11040" src="$url/module/ui/farm/diy/922.swf"/>
        <asset id="11042" src="$url/module/ui/farm/diy/922b.jpg"/>
        <asset id="11044" src="$url/module/ui/farm/diy/923.jpg"/>
        <asset id="11043" src="$url/module/ui/farm/diy/923.swf"/>
        <asset id="11045" src="$url/module/ui/farm/diy/923b.jpg"/>
        <asset id="11167" src="$url/module/ui/farm/diy/924.jpg"/>
        <asset id="11166" src="$url/module/ui/farm/diy/924.swf"/>
        <asset id="11168" src="$url/module/ui/farm/diy/924b.jpg"/>
        <asset id="11170" src="$url/module/ui/farm/diy/925.jpg"/>
        <asset id="11169" src="$url/module/ui/farm/diy/925.swf"/>
        <asset id="11171" src="$url/module/ui/farm/diy/925b.jpg"/>
        <asset id="11173" src="$url/module/ui/farm/diy/926.jpg"/>
        <asset id="11172" src="$url/module/ui/farm/diy/926.swf"/>
        <asset id="11174" src="$url/module/ui/farm/diy/926b.jpg"/>
        <asset id="11176" src="$url/module/ui/farm/diy/927.jpg"/>
        <asset id="11175" src="$url/module/ui/farm/diy/927.swf"/>
        <asset id="11177" src="$url/module/ui/farm/diy/927b.jpg"/>
        <asset id="11207" src="$url/module/ui/farm/diy/928.jpg"/>
        <asset id="11206" src="$url/module/ui/farm/diy/928.swf"/>
        <asset id="11208" src="$url/module/ui/farm/diy/928b.jpg"/>
        <asset id="11211" src="$url/module/ui/farm/diy/929.jpg"/>
        <asset id="11209" src="$url/module/ui/farm/diy/929.swf"/>
        <asset id="11210" src="$url/module/ui/farm/diy/929b.jpg"/>
        <asset id="1160" src="$url/module/ui/farm/diy/92b.jpg"/>
        <asset id="1162" src="$url/module/ui/farm/diy/93.jpg"/>
        <asset id="1161" src="$url/module/ui/farm/diy/93.swf"/>
        <asset id="11214" src="$url/module/ui/farm/diy/930.jpg"/>
        <asset id="11212" src="$url/module/ui/farm/diy/930.swf"/>
        <asset id="11213" src="$url/module/ui/farm/diy/930b.jpg"/>
        <asset id="11217" src="$url/module/ui/farm/diy/931.jpg"/>
        <asset id="11215" src="$url/module/ui/farm/diy/931.swf"/>
        <asset id="11216" src="$url/module/ui/farm/diy/931b.jpg"/>
        <asset id="11513" src="$url/module/ui/farm/diy/932.jpg"/>
        <asset id="11511" src="$url/module/ui/farm/diy/932.swf"/>
        <asset id="11512" src="$url/module/ui/farm/diy/932b.jpg"/>
        <asset id="11516" src="$url/module/ui/farm/diy/933.jpg"/>
        <asset id="11514" src="$url/module/ui/farm/diy/933.swf"/>
        <asset id="11515" src="$url/module/ui/farm/diy/933b.jpg"/>
        <asset id="11519" src="$url/module/ui/farm/diy/934.jpg"/>
        <asset id="11517" src="$url/module/ui/farm/diy/934.swf"/>
        <asset id="11518" src="$url/module/ui/farm/diy/934b.jpg"/>
        <asset id="11522" src="$url/module/ui/farm/diy/935.jpg"/>
        <asset id="11520" src="$url/module/ui/farm/diy/935.swf"/>
        <asset id="11521" src="$url/module/ui/farm/diy/935b.jpg"/>
        <asset id="11765" src="$url/module/ui/farm/diy/936.jpg"/>
        <asset id="11764" src="$url/module/ui/farm/diy/936.swf"/>
        <asset id="11766" src="$url/module/ui/farm/diy/936b.jpg"/>
        <asset id="11768" src="$url/module/ui/farm/diy/937.jpg"/>
        <asset id="11767" src="$url/module/ui/farm/diy/937.swf"/>
        <asset id="11769" src="$url/module/ui/farm/diy/937b.jpg"/>
        <asset id="11771" src="$url/module/ui/farm/diy/938.jpg"/>
        <asset id="11770" src="$url/module/ui/farm/diy/938.swf"/>
        <asset id="11772" src="$url/module/ui/farm/diy/938b.jpg"/>
        <asset id="11774" src="$url/module/ui/farm/diy/939.jpg"/>
        <asset id="11773" src="$url/module/ui/farm/diy/939.swf"/>
        <asset id="11775" src="$url/module/ui/farm/diy/939b.jpg"/>
        <asset id="1163" src="$url/module/ui/farm/diy/93b.jpg"/>
        <asset id="1165" src="$url/module/ui/farm/diy/94.jpg"/>
        <asset id="1164" src="$url/module/ui/farm/diy/94.swf"/>
        <asset id="11698" src="$url/module/ui/farm/diy/940.jpg"/>
        <asset id="11697" src="$url/module/ui/farm/diy/940.swf"/>
        <asset id="11699" src="$url/module/ui/farm/diy/940b.jpg"/>
        <asset id="11700" src="$url/module/ui/farm/diy/941.swf"/>
        <asset id="11702" src="$url/module/ui/farm/diy/941b.jpg"/>
        <asset id="11701" src="$url/module/ui/farm/diy/942.jpg"/>
        <asset id="11703" src="$url/module/ui/farm/diy/942.swf"/>
        <asset id="11705" src="$url/module/ui/farm/diy/942b.jpg"/>
        <asset id="11704" src="$url/module/ui/farm/diy/943.jpg"/>
        <asset id="11714" src="$url/module/ui/farm/diy/944.jpg"/>
        <asset id="11713" src="$url/module/ui/farm/diy/944.swf"/>
        <asset id="11715" src="$url/module/ui/farm/diy/944b.jpg"/>
        <asset id="11970" src="$url/module/ui/farm/diy/945.jpg"/>
        <asset id="11969" src="$url/module/ui/farm/diy/945.swf"/>
        <asset id="11971" src="$url/module/ui/farm/diy/945b.jpg"/>
        <asset id="11973" src="$url/module/ui/farm/diy/946.jpg"/>
        <asset id="11972" src="$url/module/ui/farm/diy/946.swf"/>
        <asset id="11974" src="$url/module/ui/farm/diy/946b.jpg"/>
        <asset id="11976" src="$url/module/ui/farm/diy/947.jpg"/>
        <asset id="11975" src="$url/module/ui/farm/diy/947.swf"/>
        <asset id="11977" src="$url/module/ui/farm/diy/947b.jpg"/>
        <asset id="11979" src="$url/module/ui/farm/diy/948.jpg"/>
        <asset id="11978" src="$url/module/ui/farm/diy/948.swf"/>
        <asset id="11980" src="$url/module/ui/farm/diy/948b.jpg"/>
        <asset id="12063" src="$url/module/ui/farm/diy/949.jpg"/>
        <asset id="12062" src="$url/module/ui/farm/diy/949.swf"/>
        <asset id="12064" src="$url/module/ui/farm/diy/949a.jpg"/>
        <asset id="1166" src="$url/module/ui/farm/diy/94b.jpg"/>
        <asset id="1168" src="$url/module/ui/farm/diy/95.jpg"/>
        <asset id="1167" src="$url/module/ui/farm/diy/95.swf"/>
        <asset id="12066" src="$url/module/ui/farm/diy/950.jpg"/>
        <asset id="12065" src="$url/module/ui/farm/diy/950.swf"/>
        <asset id="12067" src="$url/module/ui/farm/diy/950a.jpg"/>
        <asset id="12069" src="$url/module/ui/farm/diy/951.jpg"/>
        <asset id="12068" src="$url/module/ui/farm/diy/951.swf"/>
        <asset id="12070" src="$url/module/ui/farm/diy/951a.jpg"/>
        <asset id="12072" src="$url/module/ui/farm/diy/952.jpg"/>
        <asset id="12071" src="$url/module/ui/farm/diy/952.swf"/>
        <asset id="12073" src="$url/module/ui/farm/diy/952a.jpg"/>
        <asset id="12089" src="$url/module/ui/farm/diy/953.jpg"/>
        <asset id="12088" src="$url/module/ui/farm/diy/953.swf"/>
        <asset id="12090" src="$url/module/ui/farm/diy/953a.jpg"/>
        <asset id="12092" src="$url/module/ui/farm/diy/954.jpg"/>
        <asset id="12091" src="$url/module/ui/farm/diy/954.swf"/>
        <asset id="12093" src="$url/module/ui/farm/diy/954a.jpg"/>
        <asset id="12095" src="$url/module/ui/farm/diy/955.jpg"/>
        <asset id="12094" src="$url/module/ui/farm/diy/955.swf"/>
        <asset id="12096" src="$url/module/ui/farm/diy/955a.jpg"/>
        <asset id="12107" src="$url/module/ui/farm/diy/956.jpg"/>
        <asset id="12106" src="$url/module/ui/farm/diy/956.swf"/>
        <asset id="12108" src="$url/module/ui/farm/diy/956a.jpg"/>
        <asset id="12165" src="$url/module/ui/farm/diy/957.jpg"/>
        <asset id="12164" src="$url/module/ui/farm/diy/957.swf"/>
        <asset id="12166" src="$url/module/ui/farm/diy/957a.jpg"/>
        <asset id="12168" src="$url/module/ui/farm/diy/958.jpg"/>
        <asset id="12167" src="$url/module/ui/farm/diy/958.swf"/>
        <asset id="12169" src="$url/module/ui/farm/diy/958a.jpg"/>
        <asset id="12171" src="$url/module/ui/farm/diy/959.jpg"/>
        <asset id="12170" src="$url/module/ui/farm/diy/959.swf"/>
        <asset id="12172" src="$url/module/ui/farm/diy/959a.jpg"/>
        <asset id="1169" src="$url/module/ui/farm/diy/95b.jpg"/>
        <asset id="1171" src="$url/module/ui/farm/diy/96.jpg"/>
        <asset id="1170" src="$url/module/ui/farm/diy/96.swf"/>
        <asset id="12174" src="$url/module/ui/farm/diy/960.jpg"/>
        <asset id="12173" src="$url/module/ui/farm/diy/960.swf"/>
        <asset id="12175" src="$url/module/ui/farm/diy/960a.jpg"/>
        <asset id="12247" src="$url/module/ui/farm/diy/961.jpg"/>
        <asset id="12246" src="$url/module/ui/farm/diy/961.swf"/>
        <asset id="12248" src="$url/module/ui/farm/diy/961a.jpg"/>
        <asset id="12250" src="$url/module/ui/farm/diy/962.jpg"/>
        <asset id="12249" src="$url/module/ui/farm/diy/962.swf"/>
        <asset id="12251" src="$url/module/ui/farm/diy/962a.jpg"/>
        <asset id="12253" src="$url/module/ui/farm/diy/963.jpg"/>
        <asset id="12252" src="$url/module/ui/farm/diy/963.swf"/>
        <asset id="12254" src="$url/module/ui/farm/diy/963a.jpg"/>
        <asset id="12256" src="$url/module/ui/farm/diy/964.jpg"/>
        <asset id="12255" src="$url/module/ui/farm/diy/964.swf"/>
        <asset id="12257" src="$url/module/ui/farm/diy/964a.jpg"/>
        <asset id="12766" src="$url/module/ui/farm/diy/965.jpg"/>
        <asset id="12765" src="$url/module/ui/farm/diy/965.swf"/>
        <asset id="12767" src="$url/module/ui/farm/diy/965b.jpg"/>
        <asset id="12769" src="$url/module/ui/farm/diy/966.jpg"/>
        <asset id="12768" src="$url/module/ui/farm/diy/966.swf"/>
        <asset id="12770" src="$url/module/ui/farm/diy/966b.jpg"/>
        <asset id="12772" src="$url/module/ui/farm/diy/967.jpg"/>
        <asset id="12771" src="$url/module/ui/farm/diy/967.swf"/>
        <asset id="12773" src="$url/module/ui/farm/diy/967b.jpg"/>
        <asset id="12775" src="$url/module/ui/farm/diy/968.jpg"/>
        <asset id="12774" src="$url/module/ui/farm/diy/968.swf"/>
        <asset id="12776" src="$url/module/ui/farm/diy/968b.jpg"/>
        <asset id="13312" src="$url/module/ui/farm/diy/969.jpg"/>
        <asset id="13311" src="$url/module/ui/farm/diy/969.swf"/>
        <asset id="13313" src="$url/module/ui/farm/diy/969a.jpg"/>
        <asset id="1172" src="$url/module/ui/farm/diy/96b.jpg"/>
        <asset id="1174" src="$url/module/ui/farm/diy/97.jpg"/>
        <asset id="1173" src="$url/module/ui/farm/diy/97.swf"/>
        <asset id="13315" src="$url/module/ui/farm/diy/970.jpg"/>
        <asset id="13314" src="$url/module/ui/farm/diy/970.swf"/>
        <asset id="13316" src="$url/module/ui/farm/diy/970a.jpg"/>
        <asset id="13318" src="$url/module/ui/farm/diy/971.jpg"/>
        <asset id="13317" src="$url/module/ui/farm/diy/971.swf"/>
        <asset id="13319" src="$url/module/ui/farm/diy/971a.jpg"/>
        <asset id="13321" src="$url/module/ui/farm/diy/972.jpg"/>
        <asset id="13320" src="$url/module/ui/farm/diy/972.swf"/>
        <asset id="13322" src="$url/module/ui/farm/diy/972a.jpg"/>
        <asset id="13666" src="$url/module/ui/farm/diy/977.jpg"/>
        <asset id="13665" src="$url/module/ui/farm/diy/977.swf"/>
        <asset id="13667" src="$url/module/ui/farm/diy/977a.jpg"/>
        <asset id="13669" src="$url/module/ui/farm/diy/978.jpg"/>
        <asset id="13668" src="$url/module/ui/farm/diy/978.swf"/>
        <asset id="13670" src="$url/module/ui/farm/diy/978a.jpg"/>
        <asset id="13672" src="$url/module/ui/farm/diy/979.jpg"/>
        <asset id="13671" src="$url/module/ui/farm/diy/979.swf"/>
        <asset id="13673" src="$url/module/ui/farm/diy/979a.jpg"/>
        <asset id="1175" src="$url/module/ui/farm/diy/97b.jpg"/>
        <asset id="1177" src="$url/module/ui/farm/diy/98.jpg"/>
        <asset id="1176" src="$url/module/ui/farm/diy/98.swf"/>
        <asset id="13675" src="$url/module/ui/farm/diy/980.jpg"/>
        <asset id="13674" src="$url/module/ui/farm/diy/980.swf"/>
        <asset id="13676" src="$url/module/ui/farm/diy/980a.jpg"/>
        <asset id="26806" src="$url/module/ui/farm/diy/981.jpg"/>
        <asset id="26805" src="$url/module/ui/farm/diy/981.swf"/>
        <asset id="26807" src="$url/module/ui/farm/diy/981a.jpg"/>
        <asset id="26809" src="$url/module/ui/farm/diy/982.jpg"/>
        <asset id="26808" src="$url/module/ui/farm/diy/982.swf"/>
        <asset id="26810" src="$url/module/ui/farm/diy/982a.jpg"/>
        <asset id="26812" src="$url/module/ui/farm/diy/983.jpg"/>
        <asset id="26811" src="$url/module/ui/farm/diy/983.swf"/>
        <asset id="26813" src="$url/module/ui/farm/diy/983a.jpg"/>
        <asset id="26815" src="$url/module/ui/farm/diy/984.jpg"/>
        <asset id="26814" src="$url/module/ui/farm/diy/984.swf"/>
        <asset id="26816" src="$url/module/ui/farm/diy/984a.jpg"/>
        <asset id="27693" src="$url/module/ui/farm/diy/985.jpg"/>
        <asset id="27690" src="$url/module/ui/farm/diy/985.swf"/>
        <asset id="27694" src="$url/module/ui/farm/diy/985b.jpg"/>
        <asset id="27696" src="$url/module/ui/farm/diy/986.jpg"/>
        <asset id="27695" src="$url/module/ui/farm/diy/986.swf"/>
        <asset id="27697" src="$url/module/ui/farm/diy/986b.jpg"/>
        <asset id="27699" src="$url/module/ui/farm/diy/987.jpg"/>
        <asset id="27698" src="$url/module/ui/farm/diy/987.swf"/>
        <asset id="27700" src="$url/module/ui/farm/diy/987b.jpg"/>
        <asset id="27701" src="$url/module/ui/farm/diy/988.jpg"/>
        <asset id="27703" src="$url/module/ui/farm/diy/988.swf"/>
        <asset id="27702" src="$url/module/ui/farm/diy/988b.jpg"/>
        <asset id="26880" src="$url/module/ui/farm/diy/989.jpg"/>
        <asset id="26879" src="$url/module/ui/farm/diy/989.swf"/>
        <asset id="26881" src="$url/module/ui/farm/diy/989a.jpg"/>
        <asset id="1178" src="$url/module/ui/farm/diy/98b.jpg"/>
        <asset id="1180" src="$url/module/ui/farm/diy/99.jpg"/>
        <asset id="1179" src="$url/module/ui/farm/diy/99.swf"/>
        <asset id="26883" src="$url/module/ui/farm/diy/990.jpg"/>
        <asset id="26882" src="$url/module/ui/farm/diy/990.swf"/>
        <asset id="26884" src="$url/module/ui/farm/diy/990a.jpg"/>
        <asset id="26886" src="$url/module/ui/farm/diy/991.jpg"/>
        <asset id="26885" src="$url/module/ui/farm/diy/991.swf"/>
        <asset id="26887" src="$url/module/ui/farm/diy/991a.jpg"/>
        <asset id="26889" src="$url/module/ui/farm/diy/992.jpg"/>
        <asset id="26888" src="$url/module/ui/farm/diy/992.swf"/>
        <asset id="26890" src="$url/module/ui/farm/diy/992a.jpg"/>
        <asset id="1181" src="$url/module/ui/farm/diy/99b.jpg"/>
        <asset id="1720" src="$url/module/ui/farm/diy/board/1.png"/>
        <asset id="1719" src="$url/module/ui/farm/diy/board/1.swf"/>
        <asset id="1738" src="$url/module/ui/farm/diy/board/10.png"/>
        <asset id="1737" src="$url/module/ui/farm/diy/board/10.swf"/>
        <asset id="1740" src="$url/module/ui/farm/diy/board/11.png"/>
        <asset id="1739" src="$url/module/ui/farm/diy/board/11.swf"/>
        <asset id="1742" src="$url/module/ui/farm/diy/board/12.png"/>
        <asset id="1741" src="$url/module/ui/farm/diy/board/12.swf"/>
        <asset id="1744" src="$url/module/ui/farm/diy/board/13.png"/>
        <asset id="1743" src="$url/module/ui/farm/diy/board/13.swf"/>
        <asset id="1746" src="$url/module/ui/farm/diy/board/14.png"/>
        <asset id="1745" src="$url/module/ui/farm/diy/board/14.swf"/>
        <asset id="1748" src="$url/module/ui/farm/diy/board/15.png"/>
        <asset id="1747" src="$url/module/ui/farm/diy/board/15.swf"/>
        <asset id="4224" src="$url/module/ui/farm/diy/board/16.swf"/>
        <asset id="4225" src="$url/module/ui/farm/diy/board/17.swf"/>
        <asset id="4226" src="$url/module/ui/farm/diy/board/18.swf"/>
        <asset id="1722" src="$url/module/ui/farm/diy/board/2.png"/>
        <asset id="1721" src="$url/module/ui/farm/diy/board/2.swf"/>
        <asset id="1724" src="$url/module/ui/farm/diy/board/3.png"/>
        <asset id="1723" src="$url/module/ui/farm/diy/board/3.swf"/>
        <asset id="1726" src="$url/module/ui/farm/diy/board/4.png"/>
        <asset id="1725" src="$url/module/ui/farm/diy/board/4.swf"/>
        <asset id="1728" src="$url/module/ui/farm/diy/board/5.png"/>
        <asset id="1727" src="$url/module/ui/farm/diy/board/5.swf"/>
        <asset id="1730" src="$url/module/ui/farm/diy/board/6.png"/>
        <asset id="1729" src="$url/module/ui/farm/diy/board/6.swf"/>
        <asset id="1732" src="$url/module/ui/farm/diy/board/7.png"/>
        <asset id="1731" src="$url/module/ui/farm/diy/board/7.swf"/>
        <asset id="1734" src="$url/module/ui/farm/diy/board/8.png"/>
        <asset id="1733" src="$url/module/ui/farm/diy/board/8.swf"/>
        <asset id="1736" src="$url/module/ui/farm/diy/board/9.png"/>
        <asset id="1735" src="$url/module/ui/farm/diy/board/9.swf"/>
        <asset id="4228" src="$url/module/ui/farm/diy/board/90019.png"/>
        <asset id="4227" src="$url/module/ui/farm/diy/board/90019.swf"/>
        <asset id="4126" src="$url/module/ui/farm/diy/board/90020.png"/>
        <asset id="4125" src="$url/module/ui/farm/diy/board/90020.swf"/>
        <asset id="5162" src="$url/module/ui/farm/diy/board/90021.png"/>
        <asset id="5161" src="$url/module/ui/farm/diy/board/90021.swf"/>
        <asset id="5164" src="$url/module/ui/farm/diy/board/90022.png"/>
        <asset id="5163" src="$url/module/ui/farm/diy/board/90022.swf"/>
        <asset id="5166" src="$url/module/ui/farm/diy/board/90023.png"/>
        <asset id="5165" src="$url/module/ui/farm/diy/board/90023.swf"/>
        <asset id="7141" src="$url/module/ui/farm/diy/board/90024.png"/>
        <asset id="7140" src="$url/module/ui/farm/diy/board/90024.swf"/>
        <asset id="8286" src="$url/module/ui/farm/diy/board/90025.png"/>
        <asset id="8285" src="$url/module/ui/farm/diy/board/90025.swf"/>
        <asset id="8288" src="$url/module/ui/farm/diy/board/90026.png"/>
        <asset id="8287" src="$url/module/ui/farm/diy/board/90026.swf"/>
        <asset id="8290" src="$url/module/ui/farm/diy/board/90027.png"/>
        <asset id="8289" src="$url/module/ui/farm/diy/board/90027.swf"/>
        <asset id="8292" src="$url/module/ui/farm/diy/board/90028.png"/>
        <asset id="8291" src="$url/module/ui/farm/diy/board/90028.swf"/>
        <asset id="8533" src="$url/module/ui/farm/diy/board/90029.png"/>
        <asset id="8532" src="$url/module/ui/farm/diy/board/90029.swf"/>
        <asset id="8535" src="$url/module/ui/farm/diy/board/90030.png"/>
        <asset id="8534" src="$url/module/ui/farm/diy/board/90030.swf"/>
		<asset id="8611" src="$url/module/ui/farm/diy/board/90031.swf"/>
        <asset id="9718" src="$url/module/ui/farm/diy/board/90032.swf"/>
		<asset id="7379400" src="$url/module/ui/farm/diy/board/90473.swf"/>
		<asset id="7379401" src="$url/module/ui/farm/diy/board/90474.swf"/>
		<asset id="7379402" src="$url/module/ui/farm/diy/board/90475.swf"/>
        <asset id="4529" src="$url/module/ui/allcards/Card_2001.swf"/>
        <asset id="4530" src="$url/module/ui/allcards/Card_2002.swf"/>
        <asset id="4531" src="$url/module/ui/allcards/Card_2003.swf"/>
        <asset id="4532" src="$url/module/ui/allcards/Card_2004.swf"/>
        <asset id="4533" src="$url/module/ui/allcards/Card_2005.swf"/>
        <asset id="4534" src="$url/module/ui/allcards/Card_2006.swf"/>
        <asset id="4535" src="$url/module/ui/allcards/Card_2007.swf"/>
        <asset id="4536" src="$url/module/ui/allcards/Card_2008.swf"/>
        <asset id="5808" src="$url/module/ui/allcrops/Crop_100_0.swf"/>
        <asset id="5809" src="$url/module/ui/allcrops/Crop_100_1.swf"/>
        <asset id="5810" src="$url/module/ui/allcrops/Crop_100_2.swf"/>
        <asset id="5811" src="$url/module/ui/allcrops/Crop_100_3.swf"/>
        <asset id="2447" src="$url/module/ui/allcrops/Crop_100_Seed.swf"/>
        <asset id="5812" src="$url/module/ui/allcrops/Crop_101_1.swf"/>
        <asset id="5813" src="$url/module/ui/allcrops/Crop_101_2.swf"/>
        <asset id="5814" src="$url/module/ui/allcrops/Crop_101_3.swf"/>
        <asset id="2449" src="$url/module/ui/allcrops/Crop_101_Seed.swf"/>
        <asset id="5815" src="$url/module/ui/allcrops/Crop_102_1.swf"/>
        <asset id="5816" src="$url/module/ui/allcrops/Crop_102_2.swf"/>
        <asset id="5817" src="$url/module/ui/allcrops/Crop_102_3.swf"/>
        <asset id="2451" src="$url/module/ui/allcrops/Crop_102_Seed.swf"/>
        <asset id="5818" src="$url/module/ui/allcrops/Crop_103_1.swf"/>
        <asset id="5819" src="$url/module/ui/allcrops/Crop_103_2.swf"/>
        <asset id="5820" src="$url/module/ui/allcrops/Crop_103_3.swf"/>
        <asset id="2453" src="$url/module/ui/allcrops/Crop_103_Seed.swf"/>
        <asset id="5821" src="$url/module/ui/allcrops/Crop_104_1.swf"/>
        <asset id="5822" src="$url/module/ui/allcrops/Crop_104_2.swf"/>
        <asset id="5823" src="$url/module/ui/allcrops/Crop_104_3.swf"/>
        <asset id="2455" src="$url/module/ui/allcrops/Crop_104_Seed.swf"/>
        <asset id="5824" src="$url/module/ui/allcrops/Crop_105_1.swf"/>
        <asset id="5825" src="$url/module/ui/allcrops/Crop_105_2.swf"/>
        <asset id="5826" src="$url/module/ui/allcrops/Crop_105_3.swf"/>
        <asset id="2457" src="$url/module/ui/allcrops/Crop_105_Seed.swf"/>
        <asset id="5827" src="$url/module/ui/allcrops/Crop_106_1.swf"/>
        <asset id="5828" src="$url/module/ui/allcrops/Crop_106_2.swf"/>
        <asset id="5829" src="$url/module/ui/allcrops/Crop_106_3.swf"/>
        <asset id="2459" src="$url/module/ui/allcrops/Crop_106_Seed.swf"/>
        <asset id="5830" src="$url/module/ui/allcrops/Crop_107_1.swf"/>
        <asset id="5831" src="$url/module/ui/allcrops/Crop_107_2.swf"/>
        <asset id="5832" src="$url/module/ui/allcrops/Crop_107_3.swf"/>
        <asset id="2461" src="$url/module/ui/allcrops/Crop_107_Seed.swf"/>
        <asset id="5833" src="$url/module/ui/allcrops/Crop_108_1.swf"/>
        <asset id="5834" src="$url/module/ui/allcrops/Crop_108_2.swf"/>
        <asset id="5835" src="$url/module/ui/allcrops/Crop_108_3.swf"/>
        <asset id="2463" src="$url/module/ui/allcrops/Crop_108_Seed.swf"/>
        <asset id="5836" src="$url/module/ui/allcrops/Crop_109_1.swf"/>
        <asset id="5837" src="$url/module/ui/allcrops/Crop_109_2.swf"/>
        <asset id="5838" src="$url/module/ui/allcrops/Crop_109_3.swf"/>
        <asset id="2465" src="$url/module/ui/allcrops/Crop_109_Seed.swf"/>
        <asset id="5505" src="$url/module/ui/allcrops/Crop_10_1.swf"/>
        <asset id="5506" src="$url/module/ui/allcrops/Crop_10_2.swf"/>
        <asset id="5507" src="$url/module/ui/allcrops/Crop_10_3.swf"/>
        <asset id="2271" src="$url/module/ui/allcrops/Crop_10_Seed.swf"/>
        <asset id="5839" src="$url/module/ui/allcrops/Crop_110_1.swf"/>
        <asset id="5840" src="$url/module/ui/allcrops/Crop_110_2.swf"/>
        <asset id="5841" src="$url/module/ui/allcrops/Crop_110_3.swf"/>
        <asset id="2467" src="$url/module/ui/allcrops/Crop_110_Seed.swf"/>
        <asset id="5842" src="$url/module/ui/allcrops/Crop_111_1.swf"/>
        <asset id="5843" src="$url/module/ui/allcrops/Crop_111_2.swf"/>
        <asset id="5844" src="$url/module/ui/allcrops/Crop_111_3.swf"/>
        <asset id="2469" src="$url/module/ui/allcrops/Crop_111_Seed.swf"/>
        <asset id="5845" src="$url/module/ui/allcrops/Crop_112_1.swf"/>
        <asset id="5846" src="$url/module/ui/allcrops/Crop_112_2.swf"/>
        <asset id="5847" src="$url/module/ui/allcrops/Crop_112_3.swf"/>
        <asset id="2471" src="$url/module/ui/allcrops/Crop_112_Seed.swf"/>
        <asset id="5848" src="$url/module/ui/allcrops/Crop_113_1.swf"/>
        <asset id="5849" src="$url/module/ui/allcrops/Crop_113_2.swf"/>
        <asset id="5850" src="$url/module/ui/allcrops/Crop_113_3.swf"/>
        <asset id="2473" src="$url/module/ui/allcrops/Crop_113_Seed.swf"/>
        <asset id="5851" src="$url/module/ui/allcrops/Crop_114_1.swf"/>
        <asset id="5852" src="$url/module/ui/allcrops/Crop_114_2.swf"/>
        <asset id="5853" src="$url/module/ui/allcrops/Crop_114_3.swf"/>
        <asset id="2475" src="$url/module/ui/allcrops/Crop_114_Seed.swf"/>
        <asset id="27903" src="$url/module/ui/allcrops/Crop_115_0.swf"/>
        <asset id="27904" src="$url/module/ui/allcrops/Crop_115_1.swf"/>
        <asset id="27905" src="$url/module/ui/allcrops/Crop_115_2.swf"/>
        <asset id="27906" src="$url/module/ui/allcrops/Crop_115_3.swf"/>
        <asset id="27907" src="$url/module/ui/allcrops/Crop_115_4.swf"/>
        <asset id="27920" src="$url/module/ui/allcrops/Crop_115_Seed.swf"/>
        <asset id="6556" src="$url/module/ui/allcrops/Crop_116_1.swf"/>
        <asset id="6557" src="$url/module/ui/allcrops/Crop_116_2.swf"/>
        <asset id="6558" src="$url/module/ui/allcrops/Crop_116_3.swf"/>
        <asset id="6709" src="$url/module/ui/allcrops/Crop_116_Seed.swf"/>
        <asset id="5854" src="$url/module/ui/allcrops/Crop_117_1.swf"/>
        <asset id="5855" src="$url/module/ui/allcrops/Crop_117_2.swf"/>
        <asset id="5856" src="$url/module/ui/allcrops/Crop_117_3.swf"/>
        <asset id="2477" src="$url/module/ui/allcrops/Crop_117_Seed.swf"/>
        <asset id="5857" src="$url/module/ui/allcrops/Crop_118_0.swf"/>
        <asset id="5858" src="$url/module/ui/allcrops/Crop_118_1.swf"/>
        <asset id="5859" src="$url/module/ui/allcrops/Crop_118_2.swf"/>
        <asset id="5860" src="$url/module/ui/allcrops/Crop_118_3.swf"/>
        <asset id="2479" src="$url/module/ui/allcrops/Crop_118_Seed.swf"/>
        <asset id="5861" src="$url/module/ui/allcrops/Crop_119_1.swf"/>
        <asset id="5862" src="$url/module/ui/allcrops/Crop_119_2.swf"/>
        <asset id="5863" src="$url/module/ui/allcrops/Crop_119_3.swf"/>
        <asset id="2481" src="$url/module/ui/allcrops/Crop_119_Seed.swf"/>
        <asset id="5508" src="$url/module/ui/allcrops/Crop_11_1.swf"/>
        <asset id="5509" src="$url/module/ui/allcrops/Crop_11_2.swf"/>
        <asset id="5510" src="$url/module/ui/allcrops/Crop_11_3.swf"/>
        <asset id="2273" src="$url/module/ui/allcrops/Crop_11_Seed.swf"/>
        <asset id="5864" src="$url/module/ui/allcrops/Crop_121_1.swf"/>
        <asset id="5865" src="$url/module/ui/allcrops/Crop_121_2.swf"/>
        <asset id="5866" src="$url/module/ui/allcrops/Crop_121_3.swf"/>
        <asset id="2483" src="$url/module/ui/allcrops/Crop_121_Seed.swf"/>
        <asset id="5867" src="$url/module/ui/allcrops/Crop_122_1.swf"/>
        <asset id="5868" src="$url/module/ui/allcrops/Crop_122_2.swf"/>
        <asset id="5869" src="$url/module/ui/allcrops/Crop_122_3.swf"/>
        <asset id="2485" src="$url/module/ui/allcrops/Crop_122_Seed.swf"/>
        <asset id="5870" src="$url/module/ui/allcrops/Crop_123_1.swf"/>
        <asset id="5871" src="$url/module/ui/allcrops/Crop_123_2.swf"/>
        <asset id="5872" src="$url/module/ui/allcrops/Crop_123_3.swf"/>
        <asset id="2487" src="$url/module/ui/allcrops/Crop_123_Seed.swf"/>
        <asset id="9699" src="$url/module/ui/allcrops/Crop_124_1.swf"/>
        <asset id="9700" src="$url/module/ui/allcrops/Crop_124_2.swf"/>
        <asset id="9701" src="$url/module/ui/allcrops/Crop_124_3.swf"/>
        <asset id="9702" src="$url/module/ui/allcrops/Crop_124_Seed.swf"/>
        <asset id="5873" src="$url/module/ui/allcrops/Crop_125_1.swf"/>
        <asset id="5874" src="$url/module/ui/allcrops/Crop_125_2.swf"/>
        <asset id="5875" src="$url/module/ui/allcrops/Crop_125_3.swf"/>
        <asset id="2489" src="$url/module/ui/allcrops/Crop_125_Seed.swf"/>
        <asset id="5877" src="$url/module/ui/allcrops/Crop_126_1.swf"/>
        <asset id="5878" src="$url/module/ui/allcrops/Crop_126_2.swf"/>
        <asset id="5879" src="$url/module/ui/allcrops/Crop_126_3.swf"/>
        <asset id="2491" src="$url/module/ui/allcrops/Crop_126_Seed.swf"/>
        <asset id="5880" src="$url/module/ui/allcrops/Crop_128_0.swf"/>
        <asset id="5881" src="$url/module/ui/allcrops/Crop_128_1.swf"/>
        <asset id="5882" src="$url/module/ui/allcrops/Crop_128_2.swf"/>
        <asset id="5883" src="$url/module/ui/allcrops/Crop_128_3.swf"/>
        <asset id="2495" src="$url/module/ui/allcrops/Crop_128_Seed.swf"/>
        <asset id="5884" src="$url/module/ui/allcrops/Crop_129_1.swf"/>
        <asset id="5885" src="$url/module/ui/allcrops/Crop_129_2.swf"/>
        <asset id="5886" src="$url/module/ui/allcrops/Crop_129_3.swf"/>
        <asset id="3571" src="$url/module/ui/allcrops/Crop_129_Seed.swf"/>
        <asset id="5888" src="$url/module/ui/allcrops/Crop_130_1.swf"/>
        <asset id="5889" src="$url/module/ui/allcrops/Crop_130_2.swf"/>
        <asset id="5890" src="$url/module/ui/allcrops/Crop_130_3.swf"/>
        <asset id="2696" src="$url/module/ui/allcrops/Crop_130_Seed.swf"/>
        <asset id="5891" src="$url/module/ui/allcrops/Crop_131_1.swf"/>
        <asset id="5892" src="$url/module/ui/allcrops/Crop_131_2.swf"/>
        <asset id="5893" src="$url/module/ui/allcrops/Crop_131_3.swf"/>
        <asset id="4130" src="$url/module/ui/allcrops/Crop_131_Seed.swf"/>
        <asset id="27908" src="$url/module/ui/allcrops/Crop_132_0.swf"/>
        <asset id="27909" src="$url/module/ui/allcrops/Crop_132_1.swf"/>
        <asset id="27910" src="$url/module/ui/allcrops/Crop_132_2.swf"/>
        <asset id="27911" src="$url/module/ui/allcrops/Crop_132_3.swf"/>
        <asset id="27912" src="$url/module/ui/allcrops/Crop_132_4.swf"/>
        <asset id="27913" src="$url/module/ui/allcrops/Crop_132_Seed.swf"/>
        <asset id="5894" src="$url/module/ui/allcrops/Crop_133_1.swf"/>
        <asset id="5895" src="$url/module/ui/allcrops/Crop_133_2.swf"/>
        <asset id="5896" src="$url/module/ui/allcrops/Crop_133_3.swf"/>
        <asset id="3677" src="$url/module/ui/allcrops/Crop_133_Seed.swf"/>
        <asset id="6467" src="$url/module/ui/allcrops/Crop_134_1.swf"/>
        <asset id="6468" src="$url/module/ui/allcrops/Crop_134_2.swf"/>
        <asset id="6469" src="$url/module/ui/allcrops/Crop_134_3.swf"/>
        <asset id="2497" src="$url/module/ui/allcrops/Crop_134_Seed.swf"/>
        <asset id="5898" src="$url/module/ui/allcrops/Crop_135_1.swf"/>
        <asset id="5899" src="$url/module/ui/allcrops/Crop_135_2.swf"/>
        <asset id="5900" src="$url/module/ui/allcrops/Crop_135_3.swf"/>
        <asset id="2499" src="$url/module/ui/allcrops/Crop_135_Seed.swf"/>
        <asset id="5901" src="$url/module/ui/allcrops/Crop_136_1.swf"/>
        <asset id="5902" src="$url/module/ui/allcrops/Crop_136_2.swf"/>
        <asset id="5903" src="$url/module/ui/allcrops/Crop_136_3.swf"/>
        <asset id="2501" src="$url/module/ui/allcrops/Crop_136_Seed.swf"/>
        <asset id="5904" src="$url/module/ui/allcrops/Crop_137_1.swf"/>
        <asset id="5905" src="$url/module/ui/allcrops/Crop_137_2.swf"/>
        <asset id="5906" src="$url/module/ui/allcrops/Crop_137_3.swf"/>
        <asset id="2503" src="$url/module/ui/allcrops/Crop_137_Seed.swf"/>
        <asset id="5907" src="$url/module/ui/allcrops/Crop_138_1.swf"/>
        <asset id="5908" src="$url/module/ui/allcrops/Crop_138_2.swf"/>
        <asset id="5909" src="$url/module/ui/allcrops/Crop_138_3.swf"/>
        <asset id="2505" src="$url/module/ui/allcrops/Crop_138_Seed.swf"/>
        <asset id="5910" src="$url/module/ui/allcrops/Crop_139_0.swf"/>
        <asset id="5911" src="$url/module/ui/allcrops/Crop_139_1.swf"/>
        <asset id="5912" src="$url/module/ui/allcrops/Crop_139_2.swf"/>
        <asset id="5913" src="$url/module/ui/allcrops/Crop_139_3.swf"/>
        <asset id="2694" src="$url/module/ui/allcrops/Crop_139_Seed.swf"/>
        <asset id="5511" src="$url/module/ui/allcrops/Crop_13_0.swf"/>
        <asset id="5512" src="$url/module/ui/allcrops/Crop_13_1.swf"/>
        <asset id="5513" src="$url/module/ui/allcrops/Crop_13_2.swf"/>
        <asset id="5514" src="$url/module/ui/allcrops/Crop_13_3.swf"/>
        <asset id="2275" src="$url/module/ui/allcrops/Crop_13_Seed.swf"/>
        <asset id="5915" src="$url/module/ui/allcrops/Crop_140_0.swf"/>
        <asset id="5916" src="$url/module/ui/allcrops/Crop_140_1.swf"/>
        <asset id="5917" src="$url/module/ui/allcrops/Crop_140_2.swf"/>
        <asset id="5918" src="$url/module/ui/allcrops/Crop_140_3.swf"/>
        <asset id="3789" src="$url/module/ui/allcrops/Crop_140_Seed.swf"/>
        <asset id="5919" src="$url/module/ui/allcrops/Crop_141_1.swf"/>
        <asset id="5920" src="$url/module/ui/allcrops/Crop_141_2.swf"/>
        <asset id="5921" src="$url/module/ui/allcrops/Crop_141_3.swf"/>
        <asset id="3936" src="$url/module/ui/allcrops/Crop_141_Seed.swf"/>
        <asset id="5922" src="$url/module/ui/allcrops/Crop_142_1.swf"/>
        <asset id="5923" src="$url/module/ui/allcrops/Crop_142_2.swf"/>
        <asset id="5924" src="$url/module/ui/allcrops/Crop_142_3.swf"/>
        <asset id="4722" src="$url/module/ui/allcrops/Crop_142_Seed.swf"/>
        <asset id="5925" src="$url/module/ui/allcrops/Crop_143_1.swf"/>
        <asset id="5926" src="$url/module/ui/allcrops/Crop_143_2.swf"/>
        <asset id="5927" src="$url/module/ui/allcrops/Crop_143_3.swf"/>
        <asset id="2507" src="$url/module/ui/allcrops/Crop_143_Seed.swf"/>
        <asset id="5928" src="$url/module/ui/allcrops/Crop_144_1.swf"/>
        <asset id="5929" src="$url/module/ui/allcrops/Crop_144_2.swf"/>
        <asset id="5930" src="$url/module/ui/allcrops/Crop_144_3.swf"/>
        <asset id="2509" src="$url/module/ui/allcrops/Crop_144_Seed.swf"/>
        <asset id="5931" src="$url/module/ui/allcrops/Crop_145_1.swf"/>
        <asset id="5932" src="$url/module/ui/allcrops/Crop_145_2.swf"/>
        <asset id="5933" src="$url/module/ui/allcrops/Crop_145_3.swf"/>
        <asset id="2511" src="$url/module/ui/allcrops/Crop_145_Seed.swf"/>
        <asset id="5934" src="$url/module/ui/allcrops/Crop_146_1.swf"/>
        <asset id="5935" src="$url/module/ui/allcrops/Crop_146_2.swf"/>
        <asset id="5936" src="$url/module/ui/allcrops/Crop_146_3.swf"/>
        <asset id="2513" src="$url/module/ui/allcrops/Crop_146_Seed.swf"/>
        <asset id="5938" src="$url/module/ui/allcrops/Crop_147_1.swf"/>
        <asset id="5939" src="$url/module/ui/allcrops/Crop_147_2.swf"/>
        <asset id="5940" src="$url/module/ui/allcrops/Crop_147_3.swf"/>
        <asset id="2515" src="$url/module/ui/allcrops/Crop_147_Seed.swf"/>
        <asset id="5941" src="$url/module/ui/allcrops/Crop_148_1.swf"/>
        <asset id="5942" src="$url/module/ui/allcrops/Crop_148_2.swf"/>
        <asset id="5943" src="$url/module/ui/allcrops/Crop_148_3.swf"/>
        <asset id="2692" src="$url/module/ui/allcrops/Crop_148_Seed.swf"/>
        <asset id="5515" src="$url/module/ui/allcrops/Crop_14_1.swf"/>
        <asset id="5516" src="$url/module/ui/allcrops/Crop_14_2.swf"/>
        <asset id="5517" src="$url/module/ui/allcrops/Crop_14_3.swf"/>
        <asset id="2277" src="$url/module/ui/allcrops/Crop_14_Seed.swf"/>
        <asset id="7427" src="$url/module/ui/allcrops/Crop_150_1.swf"/>
        <asset id="7428" src="$url/module/ui/allcrops/Crop_150_2.swf"/>
        <asset id="7429" src="$url/module/ui/allcrops/Crop_150_3.swf"/>
        <asset id="7426" src="$url/module/ui/allcrops/Crop_150_Seed.swf"/>
        <asset id="5944" src="$url/module/ui/allcrops/Crop_151_1.swf"/>
        <asset id="5945" src="$url/module/ui/allcrops/Crop_151_2.swf"/>
        <asset id="5946" src="$url/module/ui/allcrops/Crop_151_3.swf"/>
        <asset id="3397" src="$url/module/ui/allcrops/Crop_151_Seed.swf"/>
        <asset id="6744" src="$url/module/ui/allcrops/Crop_152_1.swf"/>
        <asset id="6745" src="$url/module/ui/allcrops/Crop_152_2.swf"/>
        <asset id="6746" src="$url/module/ui/allcrops/Crop_152_3.swf"/>
        <asset id="6747" src="$url/module/ui/allcrops/Crop_152_Seed.swf"/>
        <asset id="5948" src="$url/module/ui/allcrops/Crop_153_1.swf"/>
        <asset id="5949" src="$url/module/ui/allcrops/Crop_153_2.swf"/>
        <asset id="5950" src="$url/module/ui/allcrops/Crop_153_3.swf"/>
        <asset id="2681" src="$url/module/ui/allcrops/Crop_153_Seed.swf"/>
        <asset id="5951" src="$url/module/ui/allcrops/Crop_154_0.swf"/>
        <asset id="5952" src="$url/module/ui/allcrops/Crop_154_1.swf"/>
        <asset id="5953" src="$url/module/ui/allcrops/Crop_154_2.swf"/>
        <asset id="5954" src="$url/module/ui/allcrops/Crop_154_3.swf"/>
        <asset id="2683" src="$url/module/ui/allcrops/Crop_154_Seed.swf"/>
        <asset id="5955" src="$url/module/ui/allcrops/Crop_158_1.swf"/>
        <asset id="5956" src="$url/module/ui/allcrops/Crop_158_2.swf"/>
        <asset id="5957" src="$url/module/ui/allcrops/Crop_158_3.swf"/>
        <asset id="3476" src="$url/module/ui/allcrops/Crop_158_movie.swf"/>
        <asset id="3401" src="$url/module/ui/allcrops/Crop_158_Seed.swf"/>
        <asset id="5958" src="$url/module/ui/allcrops/Crop_159_1.swf"/>
        <asset id="5959" src="$url/module/ui/allcrops/Crop_159_2.swf"/>
        <asset id="5960" src="$url/module/ui/allcrops/Crop_159_3.swf"/>
        <asset id="4084" src="$url/module/ui/allcrops/Crop_159_Seed.swf"/>
        <asset id="5518" src="$url/module/ui/allcrops/Crop_15_0.swf"/>
        <asset id="5519" src="$url/module/ui/allcrops/Crop_15_1.swf"/>
        <asset id="5520" src="$url/module/ui/allcrops/Crop_15_2.swf"/>
        <asset id="5521" src="$url/module/ui/allcrops/Crop_15_3.swf"/>
        <asset id="2279" src="$url/module/ui/allcrops/Crop_15_Seed.swf"/>
        <asset id="5961" src="$url/module/ui/allcrops/Crop_160_1.swf"/>
        <asset id="5962" src="$url/module/ui/allcrops/Crop_160_2.swf"/>
        <asset id="5963" src="$url/module/ui/allcrops/Crop_160_3.swf"/>
        <asset id="3399" src="$url/module/ui/allcrops/Crop_160_Seed.swf"/>
        <asset id="5964" src="$url/module/ui/allcrops/Crop_161_1.swf"/>
        <asset id="5965" src="$url/module/ui/allcrops/Crop_161_2.swf"/>
        <asset id="5966" src="$url/module/ui/allcrops/Crop_161_3.swf"/>
        <asset id="3673" src="$url/module/ui/allcrops/Crop_161_Seed.swf"/>
        <asset id="5968" src="$url/module/ui/allcrops/Crop_162_1.swf"/>
        <asset id="5969" src="$url/module/ui/allcrops/Crop_162_2.swf"/>
        <asset id="5970" src="$url/module/ui/allcrops/Crop_162_3.swf"/>
        <asset id="3765" src="$url/module/ui/allcrops/Crop_162_Seed.swf"/>
        <asset id="11818" src="$url/module/ui/allcrops/Crop_163_0.swf"/>
        <asset id="11819" src="$url/module/ui/allcrops/Crop_163_1.swf"/>
        <asset id="11820" src="$url/module/ui/allcrops/Crop_163_2.swf"/>
        <asset id="11821" src="$url/module/ui/allcrops/Crop_163_3.swf"/>
        <asset id="11822" src="$url/module/ui/allcrops/Crop_163_4.swf"/>
        <asset id="11823" src="$url/module/ui/allcrops/Crop_163_Seed.swf"/>
        <asset id="5971" src="$url/module/ui/allcrops/Crop_164_1.swf"/>
        <asset id="5972" src="$url/module/ui/allcrops/Crop_164_2.swf"/>
        <asset id="5973" src="$url/module/ui/allcrops/Crop_164_3.swf"/>
        <asset id="3757" src="$url/module/ui/allcrops/Crop_164_Seed.swf"/>
        <asset id="5974" src="$url/module/ui/allcrops/Crop_165_1.swf"/>
        <asset id="5975" src="$url/module/ui/allcrops/Crop_165_2.swf"/>
        <asset id="5976" src="$url/module/ui/allcrops/Crop_165_3.swf"/>
        <asset id="3675" src="$url/module/ui/allcrops/Crop_165_Seed.swf"/>
        <asset id="5977" src="$url/module/ui/allcrops/Crop_166_1.swf"/>
        <asset id="5978" src="$url/module/ui/allcrops/Crop_166_2.swf"/>
        <asset id="5979" src="$url/module/ui/allcrops/Crop_166_3.swf"/>
        <asset id="3759" src="$url/module/ui/allcrops/Crop_166_Seed.swf"/>
        <asset id="5980" src="$url/module/ui/allcrops/Crop_167_1.swf"/>
        <asset id="5981" src="$url/module/ui/allcrops/Crop_167_2.swf"/>
        <asset id="5982" src="$url/module/ui/allcrops/Crop_167_3.swf"/>
        <asset id="3761" src="$url/module/ui/allcrops/Crop_167_Seed.swf"/>
        <asset id="5984" src="$url/module/ui/allcrops/Crop_168_1.swf"/>
        <asset id="5985" src="$url/module/ui/allcrops/Crop_168_2.swf"/>
        <asset id="5986" src="$url/module/ui/allcrops/Crop_168_3.swf"/>
        <asset id="3942" src="$url/module/ui/allcrops/Crop_168_movie.swf"/>
        <asset id="3941" src="$url/module/ui/allcrops/Crop_168_Seed.swf"/>
        <asset id="5987" src="$url/module/ui/allcrops/Crop_169_1.swf"/>
        <asset id="5988" src="$url/module/ui/allcrops/Crop_169_2.swf"/>
        <asset id="5989" src="$url/module/ui/allcrops/Crop_169_3.swf"/>
        <asset id="4118" src="$url/module/ui/allcrops/Crop_169_Seed.swf"/>
        <asset id="5522" src="$url/module/ui/allcrops/Crop_16_0.swf"/>
        <asset id="5523" src="$url/module/ui/allcrops/Crop_16_1.swf"/>
        <asset id="5524" src="$url/module/ui/allcrops/Crop_16_2.swf"/>
        <asset id="5525" src="$url/module/ui/allcrops/Crop_16_3.swf"/>
        <asset id="2281" src="$url/module/ui/allcrops/Crop_16_Seed.swf"/>
        <asset id="5990" src="$url/module/ui/allcrops/Crop_170_1.swf"/>
        <asset id="5991" src="$url/module/ui/allcrops/Crop_170_2.swf"/>
        <asset id="5992" src="$url/module/ui/allcrops/Crop_170_3.swf"/>
        <asset id="4120" src="$url/module/ui/allcrops/Crop_170_Seed.swf"/>
        <asset id="5993" src="$url/module/ui/allcrops/Crop_171_1.swf"/>
        <asset id="5994" src="$url/module/ui/allcrops/Crop_171_2.swf"/>
        <asset id="5995" src="$url/module/ui/allcrops/Crop_171_3.swf"/>
        <asset id="4122" src="$url/module/ui/allcrops/Crop_171_Seed.swf"/>
        <asset id="5996" src="$url/module/ui/allcrops/Crop_172_1.swf"/>
        <asset id="5997" src="$url/module/ui/allcrops/Crop_172_2.swf"/>
        <asset id="5998" src="$url/module/ui/allcrops/Crop_172_3.swf"/>
        <asset id="4939" src="$url/module/ui/allcrops/Crop_172_Seed.swf"/>
        <asset id="5999" src="$url/module/ui/allcrops/Crop_173_1.swf"/>
        <asset id="6000" src="$url/module/ui/allcrops/Crop_173_2.swf"/>
        <asset id="6001" src="$url/module/ui/allcrops/Crop_173_3.swf"/>
        <asset id="4342" src="$url/module/ui/allcrops/Crop_173_Seed.swf"/>
        <asset id="6002" src="$url/module/ui/allcrops/Crop_174_1.swf"/>
        <asset id="6003" src="$url/module/ui/allcrops/Crop_174_2.swf"/>
        <asset id="6004" src="$url/module/ui/allcrops/Crop_174_3.swf"/>
        <asset id="4234" src="$url/module/ui/allcrops/Crop_174_Seed.swf"/>
        <asset id="6005" src="$url/module/ui/allcrops/Crop_175_1.swf"/>
        <asset id="6006" src="$url/module/ui/allcrops/Crop_175_2.swf"/>
        <asset id="6007" src="$url/module/ui/allcrops/Crop_175_3.swf"/>
        <asset id="4344" src="$url/module/ui/allcrops/Crop_175_Seed.swf"/>
        <asset id="6008" src="$url/module/ui/allcrops/Crop_176_1.swf"/>
        <asset id="6009" src="$url/module/ui/allcrops/Crop_176_2.swf"/>
        <asset id="6010" src="$url/module/ui/allcrops/Crop_176_3.swf"/>
        <asset id="4128" src="$url/module/ui/allcrops/Crop_176_Seed.swf"/>
        <asset id="6011" src="$url/module/ui/allcrops/Crop_177_1.swf"/>
        <asset id="6012" src="$url/module/ui/allcrops/Crop_177_2.swf"/>
        <asset id="6013" src="$url/module/ui/allcrops/Crop_177_3.swf"/>
        <asset id="4111" src="$url/module/ui/allcrops/Crop_177_Seed.swf"/>
        <asset id="6014" src="$url/module/ui/allcrops/Crop_178_1.swf"/>
        <asset id="6015" src="$url/module/ui/allcrops/Crop_178_2.swf"/>
        <asset id="6016" src="$url/module/ui/allcrops/Crop_178_3.swf"/>
        <asset id="4569" src="$url/module/ui/allcrops/Crop_178_Seed.swf"/>
        <asset id="6018" src="$url/module/ui/allcrops/Crop_179_0.swf"/>
        <asset id="6019" src="$url/module/ui/allcrops/Crop_179_1.swf"/>
        <asset id="6020" src="$url/module/ui/allcrops/Crop_179_2.swf"/>
        <asset id="6021" src="$url/module/ui/allcrops/Crop_179_3.swf"/>
        <asset id="4332" src="$url/module/ui/allcrops/Crop_179_Seed.swf"/>
        <asset id="5526" src="$url/module/ui/allcrops/Crop_17_1.swf"/>
        <asset id="5527" src="$url/module/ui/allcrops/Crop_17_2.swf"/>
        <asset id="5528" src="$url/module/ui/allcrops/Crop_17_3.swf"/>
        <asset id="2283" src="$url/module/ui/allcrops/Crop_17_Seed.swf"/>
        <asset id="6991" src="$url/module/ui/allcrops/Crop_180_1.swf"/>
        <asset id="6992" src="$url/module/ui/allcrops/Crop_180_2.swf"/>
        <asset id="6993" src="$url/module/ui/allcrops/Crop_180_3.swf"/>
        <asset id="6994" src="$url/module/ui/allcrops/Crop_180_Seed.swf"/>
        <asset id="6371" src="$url/module/ui/allcrops/Crop_181_1.swf"/>
        <asset id="6372" src="$url/module/ui/allcrops/Crop_181_2.swf"/>
        <asset id="6373" src="$url/module/ui/allcrops/Crop_181_3.swf"/>
        <asset id="5454" src="$url/module/ui/allcrops/Crop_181_Seed.swf"/>
        <asset id="6741" src="$url/module/ui/allcrops/Crop_182_1.swf"/>
        <asset id="6742" src="$url/module/ui/allcrops/Crop_182_2.swf"/>
        <asset id="6743" src="$url/module/ui/allcrops/Crop_182_3.swf"/>
        <asset id="6740" src="$url/module/ui/allcrops/Crop_182_Seed.swf"/>
        <asset id="6729" src="$url/module/ui/allcrops/Crop_183_1.swf"/>
        <asset id="6730" src="$url/module/ui/allcrops/Crop_183_2.swf"/>
        <asset id="6731" src="$url/module/ui/allcrops/Crop_183_3.swf"/>
        <asset id="6728" src="$url/module/ui/allcrops/Crop_183_Seed.swf"/>
        <asset id="12299" src="$url/module/ui/allcrops/Crop_184_0.swf"/>
        <asset id="12300" src="$url/module/ui/allcrops/Crop_184_1.swf"/>
        <asset id="12301" src="$url/module/ui/allcrops/Crop_184_2.swf"/>
        <asset id="12302" src="$url/module/ui/allcrops/Crop_184_3.swf"/>
        <asset id="12303" src="$url/module/ui/allcrops/Crop_184_4.swf"/>
        <asset id="12304" src="$url/module/ui/allcrops/Crop_184_Seed.swf"/>
        <asset id="6733" src="$url/module/ui/allcrops/Crop_185_1.swf"/>
        <asset id="6734" src="$url/module/ui/allcrops/Crop_185_2.swf"/>
        <asset id="6735" src="$url/module/ui/allcrops/Crop_185_3.swf"/>
        <asset id="6732" src="$url/module/ui/allcrops/Crop_185_Seed.swf"/>
        <asset id="6022" src="$url/module/ui/allcrops/Crop_186_1.swf"/>
        <asset id="6023" src="$url/module/ui/allcrops/Crop_186_2.swf"/>
        <asset id="6024" src="$url/module/ui/allcrops/Crop_186_3.swf"/>
        <asset id="5255" src="$url/module/ui/allcrops/Crop_186_Seed.swf"/>
        <asset id="6025" src="$url/module/ui/allcrops/Crop_187_1.swf"/>
        <asset id="6026" src="$url/module/ui/allcrops/Crop_187_2.swf"/>
        <asset id="6027" src="$url/module/ui/allcrops/Crop_187_3.swf"/>
        <asset id="4941" src="$url/module/ui/allcrops/Crop_187_Seed.swf"/>
        <asset id="6736" src="$url/module/ui/allcrops/Crop_188_1.swf"/>
        <asset id="6737" src="$url/module/ui/allcrops/Crop_188_2.swf"/>
        <asset id="6738" src="$url/module/ui/allcrops/Crop_188_3.swf"/>
        <asset id="6739" src="$url/module/ui/allcrops/Crop_188_Seed.swf"/>
        <asset id="7483" src="$url/module/ui/allcrops/Crop_189_1.swf"/>
        <asset id="7484" src="$url/module/ui/allcrops/Crop_189_2.swf"/>
        <asset id="7485" src="$url/module/ui/allcrops/Crop_189_3.swf"/>
        <asset id="7482" src="$url/module/ui/allcrops/Crop_189_Seed.swf"/>
        <asset id="5529" src="$url/module/ui/allcrops/Crop_18_1.swf"/>
        <asset id="5530" src="$url/module/ui/allcrops/Crop_18_2.swf"/>
        <asset id="5531" src="$url/module/ui/allcrops/Crop_18_3.swf"/>
        <asset id="2285" src="$url/module/ui/allcrops/Crop_18_Seed.swf"/>
        <asset id="6470" src="$url/module/ui/allcrops/Crop_190_1.swf"/>
        <asset id="6471" src="$url/module/ui/allcrops/Crop_190_2.swf"/>
        <asset id="6472" src="$url/module/ui/allcrops/Crop_190_3.swf"/>
        <asset id="4676" src="$url/module/ui/allcrops/Crop_190_Seed.swf"/>
        <asset id="6028" src="$url/module/ui/allcrops/Crop_191_1.swf"/>
        <asset id="6029" src="$url/module/ui/allcrops/Crop_191_2.swf"/>
        <asset id="6030" src="$url/module/ui/allcrops/Crop_191_3.swf"/>
        <asset id="4776" src="$url/module/ui/allcrops/Crop_191_Seed.swf"/>
        <asset id="10721" src="$url/module/ui/allcrops/Crop_192_1.swf"/>
        <asset id="10722" src="$url/module/ui/allcrops/Crop_192_2.swf"/>
        <asset id="10723" src="$url/module/ui/allcrops/Crop_192_3.swf"/>
        <asset id="10724" src="$url/module/ui/allcrops/Crop_192_Seed.swf"/>
        <asset id="12305" src="$url/module/ui/allcrops/Crop_193_0.swf"/>
        <asset id="12306" src="$url/module/ui/allcrops/Crop_193_1.swf"/>
        <asset id="12307" src="$url/module/ui/allcrops/Crop_193_2.swf"/>
        <asset id="12308" src="$url/module/ui/allcrops/Crop_193_3.swf"/>
        <asset id="12309" src="$url/module/ui/allcrops/Crop_193_4.swf"/>
        <asset id="12310" src="$url/module/ui/allcrops/Crop_193_Seed.swf"/>
        <asset id="6031" src="$url/module/ui/allcrops/Crop_194_1.swf"/>
        <asset id="6032" src="$url/module/ui/allcrops/Crop_194_2.swf"/>
        <asset id="6033" src="$url/module/ui/allcrops/Crop_194_3.swf"/>
        <asset id="4817" src="$url/module/ui/allcrops/Crop_194_Seed.swf"/>
        <asset id="6034" src="$url/module/ui/allcrops/Crop_195_1.swf"/>
        <asset id="6035" src="$url/module/ui/allcrops/Crop_195_2.swf"/>
        <asset id="6036" src="$url/module/ui/allcrops/Crop_195_3.swf"/>
        <asset id="5373" src="$url/module/ui/allcrops/Crop_195_Seed.swf"/>
        <asset id="6037" src="$url/module/ui/allcrops/Crop_197_1.swf"/>
        <asset id="6038" src="$url/module/ui/allcrops/Crop_197_2.swf"/>
        <asset id="6039" src="$url/module/ui/allcrops/Crop_197_3.swf"/>
        <asset id="5091" src="$url/module/ui/allcrops/Crop_197_Seed.swf"/>
        <asset id="6040" src="$url/module/ui/allcrops/Crop_198_1.swf"/>
        <asset id="6041" src="$url/module/ui/allcrops/Crop_198_2.swf"/>
        <asset id="6042" src="$url/module/ui/allcrops/Crop_198_3.swf"/>
        <asset id="5257" src="$url/module/ui/allcrops/Crop_198_Seed.swf"/>
        <asset id="5532" src="$url/module/ui/allcrops/Crop_19_1.swf"/>
        <asset id="5533" src="$url/module/ui/allcrops/Crop_19_2.swf"/>
        <asset id="5534" src="$url/module/ui/allcrops/Crop_19_3.swf"/>
        <asset id="2287" src="$url/module/ui/allcrops/Crop_19_Seed.swf"/>
        <asset id="5478" src="$url/module/ui/allcrops/Crop_1_1.swf"/>
        <asset id="5479" src="$url/module/ui/allcrops/Crop_1_2.swf"/>
        <asset id="5480" src="$url/module/ui/allcrops/Crop_1_3.swf"/>
        <asset id="2253" src="$url/module/ui/allcrops/Crop_1_Seed.swf"/>
        <asset id="11022" src="$url/module/ui/allcrops/Crop_200_0.swf"/>
        <asset id="11023" src="$url/module/ui/allcrops/Crop_200_1.swf"/>
        <asset id="11024" src="$url/module/ui/allcrops/Crop_200_2.swf"/>
        <asset id="11025" src="$url/module/ui/allcrops/Crop_200_3.swf"/>
        <asset id="11026" src="$url/module/ui/allcrops/Crop_200_4.swf"/>
        <asset id="11027" src="$url/module/ui/allcrops/Crop_200_Seed.swf"/>
        <asset id="6044" src="$url/module/ui/allcrops/Crop_201_0.swf"/>
        <asset id="6045" src="$url/module/ui/allcrops/Crop_201_1.swf"/>
        <asset id="6046" src="$url/module/ui/allcrops/Crop_201_2.swf"/>
        <asset id="6047" src="$url/module/ui/allcrops/Crop_201_3.swf"/>
        <asset id="2517" src="$url/module/ui/allcrops/Crop_201_Seed.swf"/>
        <asset id="6048" src="$url/module/ui/allcrops/Crop_202_0.swf"/>
        <asset id="6049" src="$url/module/ui/allcrops/Crop_202_1.swf"/>
        <asset id="6050" src="$url/module/ui/allcrops/Crop_202_2.swf"/>
        <asset id="6051" src="$url/module/ui/allcrops/Crop_202_3.swf"/>
        <asset id="6052" src="$url/module/ui/allcrops/Crop_202_4.swf"/>
        <asset id="2519" src="$url/module/ui/allcrops/Crop_202_Seed.swf"/>
        <asset id="8822" src="$url/module/ui/allcrops/Crop_203_1.swf"/>
        <asset id="8823" src="$url/module/ui/allcrops/Crop_203_2.swf"/>
        <asset id="8824" src="$url/module/ui/allcrops/Crop_203_3.swf"/>
        <asset id="8821" src="$url/module/ui/allcrops/Crop_203_Seed.swf"/>
        <asset id="6053" src="$url/module/ui/allcrops/Crop_204_1.swf"/>
        <asset id="6054" src="$url/module/ui/allcrops/Crop_204_2.swf"/>
        <asset id="6055" src="$url/module/ui/allcrops/Crop_204_3.swf"/>
        <asset id="2615" src="$url/module/ui/allcrops/Crop_204_Seed.swf"/>
        <asset id="8744" src="$url/module/ui/allcrops/Crop_205_1.swf"/>
        <asset id="8745" src="$url/module/ui/allcrops/Crop_205_2.swf"/>
        <asset id="8746" src="$url/module/ui/allcrops/Crop_205_3.swf"/>
        <asset id="2521" src="$url/module/ui/allcrops/Crop_205_Seed.swf"/>
        <asset id="9778" src="$url/module/ui/allcrops/Crop_207_1.swf"/>
        <asset id="9779" src="$url/module/ui/allcrops/Crop_207_2.swf"/>
        <asset id="9780" src="$url/module/ui/allcrops/Crop_207_3.swf"/>
        <asset id="9777" src="$url/module/ui/allcrops/Crop_207_Seed.swf"/>
        <asset id="6056" src="$url/module/ui/allcrops/Crop_208_1.swf"/>
        <asset id="6057" src="$url/module/ui/allcrops/Crop_208_2.swf"/>
        <asset id="6058" src="$url/module/ui/allcrops/Crop_208_3.swf"/>
        <asset id="3395" src="$url/module/ui/allcrops/Crop_208_Seed.swf"/>
        <asset id="6059" src="$url/module/ui/allcrops/Crop_209_1.swf"/>
        <asset id="6060" src="$url/module/ui/allcrops/Crop_209_2.swf"/>
        <asset id="6061" src="$url/module/ui/allcrops/Crop_209_3.swf"/>
        <asset id="3939" src="$url/module/ui/allcrops/Crop_209_Seed.swf"/>
        <asset id="5535" src="$url/module/ui/allcrops/Crop_20_0.swf"/>
        <asset id="5536" src="$url/module/ui/allcrops/Crop_20_1.swf"/>
        <asset id="5537" src="$url/module/ui/allcrops/Crop_20_2.swf"/>
        <asset id="5538" src="$url/module/ui/allcrops/Crop_20_3.swf"/>
        <asset id="2289" src="$url/module/ui/allcrops/Crop_20_Seed.swf"/>
        <asset id="6062" src="$url/module/ui/allcrops/Crop_210_1.swf"/>
        <asset id="6063" src="$url/module/ui/allcrops/Crop_210_2.swf"/>
        <asset id="6064" src="$url/module/ui/allcrops/Crop_210_3.swf"/>
        <asset id="4232" src="$url/module/ui/allcrops/Crop_210_Seed.swf"/>
        <asset id="6065" src="$url/module/ui/allcrops/Crop_211_1.swf"/>
        <asset id="6066" src="$url/module/ui/allcrops/Crop_211_2.swf"/>
        <asset id="6067" src="$url/module/ui/allcrops/Crop_211_3.swf"/>
        <asset id="4678" src="$url/module/ui/allcrops/Crop_211_Seed.swf"/>
        <asset id="7704" src="$url/module/ui/allcrops/Crop_212_1.swf"/>
        <asset id="7705" src="$url/module/ui/allcrops/Crop_212_2.swf"/>
        <asset id="7706" src="$url/module/ui/allcrops/Crop_212_3.swf"/>
        <asset id="7703" src="$url/module/ui/allcrops/Crop_212_Seed.swf"/>
        <asset id="6068" src="$url/module/ui/allcrops/Crop_218_0.swf"/>
        <asset id="6069" src="$url/module/ui/allcrops/Crop_218_1.swf"/>
        <asset id="6070" src="$url/module/ui/allcrops/Crop_218_2.swf"/>
        <asset id="6071" src="$url/module/ui/allcrops/Crop_218_3.swf"/>
        <asset id="2525" src="$url/module/ui/allcrops/Crop_218_Seed.swf"/>
        <asset id="6073" src="$url/module/ui/allcrops/Crop_219_1.swf"/>
        <asset id="6074" src="$url/module/ui/allcrops/Crop_219_2.swf"/>
        <asset id="6075" src="$url/module/ui/allcrops/Crop_219_3.swf"/>
        <asset id="2527" src="$url/module/ui/allcrops/Crop_219_Seed.swf"/>
        <asset id="5539" src="$url/module/ui/allcrops/Crop_21_1.swf"/>
        <asset id="5540" src="$url/module/ui/allcrops/Crop_21_2.swf"/>
        <asset id="5541" src="$url/module/ui/allcrops/Crop_21_3.swf"/>
        <asset id="2291" src="$url/module/ui/allcrops/Crop_21_Seed.swf"/>
        <asset id="6076" src="$url/module/ui/allcrops/Crop_220_0.swf"/>
        <asset id="6077" src="$url/module/ui/allcrops/Crop_220_1.swf"/>
        <asset id="6078" src="$url/module/ui/allcrops/Crop_220_2.swf"/>
        <asset id="6079" src="$url/module/ui/allcrops/Crop_220_3.swf"/>
        <asset id="2529" src="$url/module/ui/allcrops/Crop_220_Seed.swf"/>
        <asset id="6080" src="$url/module/ui/allcrops/Crop_221_1.swf"/>
        <asset id="6081" src="$url/module/ui/allcrops/Crop_221_2.swf"/>
        <asset id="6082" src="$url/module/ui/allcrops/Crop_221_3.swf"/>
        <asset id="2531" src="$url/module/ui/allcrops/Crop_221_Seed.swf"/>
        <asset id="6084" src="$url/module/ui/allcrops/Crop_222_0.swf"/>
        <asset id="6085" src="$url/module/ui/allcrops/Crop_222_1.swf"/>
        <asset id="6086" src="$url/module/ui/allcrops/Crop_222_2.swf"/>
        <asset id="6087" src="$url/module/ui/allcrops/Crop_222_3.swf"/>
        <asset id="2533" src="$url/module/ui/allcrops/Crop_222_Seed.swf"/>
        <asset id="6088" src="$url/module/ui/allcrops/Crop_223_1.swf"/>
        <asset id="6089" src="$url/module/ui/allcrops/Crop_223_2.swf"/>
        <asset id="6090" src="$url/module/ui/allcrops/Crop_223_3.swf"/>
        <asset id="2535" src="$url/module/ui/allcrops/Crop_223_Seed.swf"/>
        <asset id="6091" src="$url/module/ui/allcrops/Crop_224_1.swf"/>
        <asset id="6092" src="$url/module/ui/allcrops/Crop_224_2.swf"/>
        <asset id="6093" src="$url/module/ui/allcrops/Crop_224_3.swf"/>
        <asset id="2537" src="$url/module/ui/allcrops/Crop_224_Seed.swf"/>
        <asset id="6094" src="$url/module/ui/allcrops/Crop_225_1.swf"/>
        <asset id="6095" src="$url/module/ui/allcrops/Crop_225_2.swf"/>
        <asset id="6096" src="$url/module/ui/allcrops/Crop_225_3.swf"/>
        <asset id="2539" src="$url/module/ui/allcrops/Crop_225_Seed.swf"/>
        <asset id="6097" src="$url/module/ui/allcrops/Crop_226_1.swf"/>
        <asset id="6098" src="$url/module/ui/allcrops/Crop_226_2.swf"/>
        <asset id="6099" src="$url/module/ui/allcrops/Crop_226_3.swf"/>
        <asset id="2541" src="$url/module/ui/allcrops/Crop_226_Seed.swf"/>
        <asset id="6100" src="$url/module/ui/allcrops/Crop_227_1.swf"/>
        <asset id="6101" src="$url/module/ui/allcrops/Crop_227_2.swf"/>
        <asset id="6102" src="$url/module/ui/allcrops/Crop_227_3.swf"/>
        <asset id="2543" src="$url/module/ui/allcrops/Crop_227_Seed.swf"/>
        <asset id="6103" src="$url/module/ui/allcrops/Crop_228_0.swf"/>
        <asset id="6104" src="$url/module/ui/allcrops/Crop_228_1.swf"/>
        <asset id="6105" src="$url/module/ui/allcrops/Crop_228_2.swf"/>
        <asset id="6106" src="$url/module/ui/allcrops/Crop_228_3.swf"/>
        <asset id="2545" src="$url/module/ui/allcrops/Crop_228_Seed.swf"/>
        <asset id="6107" src="$url/module/ui/allcrops/Crop_229_1.swf"/>
        <asset id="6108" src="$url/module/ui/allcrops/Crop_229_2.swf"/>
        <asset id="6109" src="$url/module/ui/allcrops/Crop_229_3.swf"/>
        <asset id="2547" src="$url/module/ui/allcrops/Crop_229_Seed.swf"/>
        <asset id="5542" src="$url/module/ui/allcrops/Crop_22_0.swf"/>
        <asset id="5543" src="$url/module/ui/allcrops/Crop_22_1.swf"/>
        <asset id="5544" src="$url/module/ui/allcrops/Crop_22_2.swf"/>
        <asset id="5545" src="$url/module/ui/allcrops/Crop_22_3.swf"/>
        <asset id="2293" src="$url/module/ui/allcrops/Crop_22_Seed.swf"/>
        <asset id="6110" src="$url/module/ui/allcrops/Crop_230_1.swf"/>
        <asset id="6111" src="$url/module/ui/allcrops/Crop_230_2.swf"/>
        <asset id="6112" src="$url/module/ui/allcrops/Crop_230_3.swf"/>
        <asset id="2549" src="$url/module/ui/allcrops/Crop_230_Seed.swf"/>
        <asset id="6113" src="$url/module/ui/allcrops/Crop_231_0.swf"/>
        <asset id="6114" src="$url/module/ui/allcrops/Crop_231_1.swf"/>
        <asset id="6115" src="$url/module/ui/allcrops/Crop_231_2.swf"/>
        <asset id="6116" src="$url/module/ui/allcrops/Crop_231_3.swf"/>
        <asset id="2551" src="$url/module/ui/allcrops/Crop_231_Seed.swf"/>
        <asset id="6117" src="$url/module/ui/allcrops/Crop_232_0.swf"/>
        <asset id="6118" src="$url/module/ui/allcrops/Crop_232_1.swf"/>
        <asset id="6119" src="$url/module/ui/allcrops/Crop_232_2.swf"/>
        <asset id="6120" src="$url/module/ui/allcrops/Crop_232_3.swf"/>
        <asset id="2553" src="$url/module/ui/allcrops/Crop_232_Seed.swf"/>
        <asset id="6121" src="$url/module/ui/allcrops/Crop_233_0.swf"/>
        <asset id="6122" src="$url/module/ui/allcrops/Crop_233_1.swf"/>
        <asset id="6123" src="$url/module/ui/allcrops/Crop_233_2.swf"/>
        <asset id="6124" src="$url/module/ui/allcrops/Crop_233_3.swf"/>
        <asset id="2555" src="$url/module/ui/allcrops/Crop_233_Seed.swf"/>
        <asset id="6125" src="$url/module/ui/allcrops/Crop_234_1.swf"/>
        <asset id="6126" src="$url/module/ui/allcrops/Crop_234_2.swf"/>
        <asset id="6127" src="$url/module/ui/allcrops/Crop_234_3.swf"/>
        <asset id="2617" src="$url/module/ui/allcrops/Crop_234_Seed.swf"/>
        <asset id="6129" src="$url/module/ui/allcrops/Crop_235_1.swf"/>
        <asset id="6130" src="$url/module/ui/allcrops/Crop_235_2.swf"/>
        <asset id="6131" src="$url/module/ui/allcrops/Crop_235_3.swf"/>
        <asset id="2557" src="$url/module/ui/allcrops/Crop_235_Seed.swf"/>
        <asset id="6132" src="$url/module/ui/allcrops/Crop_236_1.swf"/>
        <asset id="6133" src="$url/module/ui/allcrops/Crop_236_2.swf"/>
        <asset id="6134" src="$url/module/ui/allcrops/Crop_236_3.swf"/>
        <asset id="2559" src="$url/module/ui/allcrops/Crop_236_Seed.swf"/>
        <asset id="6135" src="$url/module/ui/allcrops/Crop_237_1.swf"/>
        <asset id="6136" src="$url/module/ui/allcrops/Crop_237_2.swf"/>
        <asset id="6137" src="$url/module/ui/allcrops/Crop_237_3.swf"/>
        <asset id="2561" src="$url/module/ui/allcrops/Crop_237_Seed.swf"/>
        <asset id="6138" src="$url/module/ui/allcrops/Crop_238_1.swf"/>
        <asset id="6139" src="$url/module/ui/allcrops/Crop_238_2.swf"/>
        <asset id="6140" src="$url/module/ui/allcrops/Crop_238_3.swf"/>
        <asset id="2563" src="$url/module/ui/allcrops/Crop_238_Seed.swf"/>
        <asset id="6141" src="$url/module/ui/allcrops/Crop_239_1.swf"/>
        <asset id="6142" src="$url/module/ui/allcrops/Crop_239_2.swf"/>
        <asset id="6143" src="$url/module/ui/allcrops/Crop_239_3.swf"/>
        <asset id="2565" src="$url/module/ui/allcrops/Crop_239_Seed.swf"/>
        <asset id="5546" src="$url/module/ui/allcrops/Crop_23_1.swf"/>
        <asset id="5547" src="$url/module/ui/allcrops/Crop_23_2.swf"/>
        <asset id="5548" src="$url/module/ui/allcrops/Crop_23_3.swf"/>
        <asset id="2295" src="$url/module/ui/allcrops/Crop_23_Seed.swf"/>
        <asset id="6144" src="$url/module/ui/allcrops/Crop_240_1.swf"/>
        <asset id="6145" src="$url/module/ui/allcrops/Crop_240_2.swf"/>
        <asset id="6146" src="$url/module/ui/allcrops/Crop_240_3.swf"/>
        <asset id="2567" src="$url/module/ui/allcrops/Crop_240_Seed.swf"/>
        <asset id="6147" src="$url/module/ui/allcrops/Crop_241_1.swf"/>
        <asset id="6148" src="$url/module/ui/allcrops/Crop_241_2.swf"/>
        <asset id="6149" src="$url/module/ui/allcrops/Crop_241_3.swf"/>
        <asset id="2569" src="$url/module/ui/allcrops/Crop_241_Seed.swf"/>
        <asset id="6150" src="$url/module/ui/allcrops/Crop_242_1.swf"/>
        <asset id="6151" src="$url/module/ui/allcrops/Crop_242_2.swf"/>
        <asset id="6152" src="$url/module/ui/allcrops/Crop_242_3.swf"/>
        <asset id="3393" src="$url/module/ui/allcrops/Crop_242_Seed.swf"/>
        <asset id="6153" src="$url/module/ui/allcrops/Crop_243_1.swf"/>
        <asset id="6154" src="$url/module/ui/allcrops/Crop_243_2.swf"/>
        <asset id="6155" src="$url/module/ui/allcrops/Crop_243_3.swf"/>
        <asset id="3763" src="$url/module/ui/allcrops/Crop_243_Seed.swf"/>
        <asset id="6156" src="$url/module/ui/allcrops/Crop_244_1.swf"/>
        <asset id="6157" src="$url/module/ui/allcrops/Crop_244_2.swf"/>
        <asset id="6158" src="$url/module/ui/allcrops/Crop_244_3.swf"/>
        <asset id="4724" src="$url/module/ui/allcrops/Crop_244_Seed.swf"/>
        <asset id="6159" src="$url/module/ui/allcrops/Crop_245_1.swf"/>
        <asset id="6160" src="$url/module/ui/allcrops/Crop_245_2.swf"/>
        <asset id="6161" src="$url/module/ui/allcrops/Crop_245_3.swf"/>
        <asset id="2571" src="$url/module/ui/allcrops/Crop_245_Seed.swf"/>
        <asset id="6163" src="$url/module/ui/allcrops/Crop_246_1.swf"/>
        <asset id="6164" src="$url/module/ui/allcrops/Crop_246_2.swf"/>
        <asset id="6165" src="$url/module/ui/allcrops/Crop_246_3.swf"/>
        <asset id="4132" src="$url/module/ui/allcrops/Crop_246_Seed.swf"/>
        <asset id="6166" src="$url/module/ui/allcrops/Crop_247_1.swf"/>
        <asset id="6167" src="$url/module/ui/allcrops/Crop_247_2.swf"/>
        <asset id="6168" src="$url/module/ui/allcrops/Crop_247_3.swf"/>
        <asset id="4433" src="$url/module/ui/allcrops/Crop_247_Seed.swf"/>
        <asset id="6169" src="$url/module/ui/allcrops/Crop_249_1.swf"/>
        <asset id="6170" src="$url/module/ui/allcrops/Crop_249_2.swf"/>
        <asset id="6171" src="$url/module/ui/allcrops/Crop_249_3.swf"/>
        <asset id="4943" src="$url/module/ui/allcrops/Crop_249_Seed.swf"/>
        <asset id="5549" src="$url/module/ui/allcrops/Crop_24_1.swf"/>
        <asset id="5550" src="$url/module/ui/allcrops/Crop_24_2.swf"/>
        <asset id="5551" src="$url/module/ui/allcrops/Crop_24_3.swf"/>
        <asset id="2297" src="$url/module/ui/allcrops/Crop_24_Seed.swf"/>
        <asset id="7843" src="$url/module/ui/allcrops/Crop_250_1.swf"/>
        <asset id="7844" src="$url/module/ui/allcrops/Crop_250_2.swf"/>
        <asset id="7845" src="$url/module/ui/allcrops/Crop_250_3.swf"/>
        <asset id="7842" src="$url/module/ui/allcrops/Crop_250_Seed.swf"/>
        <asset id="6376" src="$url/module/ui/allcrops/Crop_251_1.swf"/>
        <asset id="6377" src="$url/module/ui/allcrops/Crop_251_2.swf"/>
        <asset id="6378" src="$url/module/ui/allcrops/Crop_251_3.swf"/>
        <asset id="5469" src="$url/module/ui/allcrops/Crop_251_Seed.swf"/>
        <asset id="6756" src="$url/module/ui/allcrops/Crop_253_1.swf"/>
        <asset id="6757" src="$url/module/ui/allcrops/Crop_253_2.swf"/>
        <asset id="6758" src="$url/module/ui/allcrops/Crop_253_3.swf"/>
        <asset id="6759" src="$url/module/ui/allcrops/Crop_253_Seed.swf"/>
        <asset id="12082" src="$url/module/ui/allcrops/Crop_256_0.swf"/>
        <asset id="12083" src="$url/module/ui/allcrops/Crop_256_1.swf"/>
        <asset id="12084" src="$url/module/ui/allcrops/Crop_256_2.swf"/>
        <asset id="12085" src="$url/module/ui/allcrops/Crop_256_3.swf"/>
        <asset id="12086" src="$url/module/ui/allcrops/Crop_256_4.swf"/>
        <asset id="12087" src="$url/module/ui/allcrops/Crop_256_Seed.swf"/>
        <asset id="9782" src="$url/module/ui/allcrops/Crop_257_1.swf"/>
        <asset id="9783" src="$url/module/ui/allcrops/Crop_257_2.swf"/>
        <asset id="9784" src="$url/module/ui/allcrops/Crop_257_3.swf"/>
        <asset id="9781" src="$url/module/ui/allcrops/Crop_257_Seed.swf"/>
        <asset id="12317" src="$url/module/ui/allcrops/Crop_258_0.swf"/>
        <asset id="12318" src="$url/module/ui/allcrops/Crop_258_1.swf"/>
        <asset id="12319" src="$url/module/ui/allcrops/Crop_258_2.swf"/>
        <asset id="12320" src="$url/module/ui/allcrops/Crop_258_3.swf"/>
        <asset id="12321" src="$url/module/ui/allcrops/Crop_258_4.swf"/>
        <asset id="12322" src="$url/module/ui/allcrops/Crop_258_Seed.swf"/>
        <asset id="12287" src="$url/module/ui/allcrops/Crop_259_0.swf"/>
        <asset id="12288" src="$url/module/ui/allcrops/Crop_259_1.swf"/>
        <asset id="12289" src="$url/module/ui/allcrops/Crop_259_2.swf"/>
        <asset id="12290" src="$url/module/ui/allcrops/Crop_259_3.swf"/>
        <asset id="12291" src="$url/module/ui/allcrops/Crop_259_4.swf"/>
        <asset id="12292" src="$url/module/ui/allcrops/Crop_259_Seed.swf"/>
        <asset id="5552" src="$url/module/ui/allcrops/Crop_25_1.swf"/>
        <asset id="5553" src="$url/module/ui/allcrops/Crop_25_2.swf"/>
        <asset id="5554" src="$url/module/ui/allcrops/Crop_25_3.swf"/>
        <asset id="2299" src="$url/module/ui/allcrops/Crop_25_Seed.swf"/>
        <asset id="10729" src="$url/module/ui/allcrops/Crop_260_1.swf"/>
        <asset id="10730" src="$url/module/ui/allcrops/Crop_260_2.swf"/>
        <asset id="10731" src="$url/module/ui/allcrops/Crop_260_3.swf"/>
        <asset id="10732" src="$url/module/ui/allcrops/Crop_260_Seed.swf"/>
        <asset id="8613" src="$url/module/ui/allcrops/Crop_262_1.swf"/>
        <asset id="8614" src="$url/module/ui/allcrops/Crop_262_2.swf"/>
        <asset id="8615" src="$url/module/ui/allcrops/Crop_262_3.swf"/>
        <asset id="8612" src="$url/module/ui/allcrops/Crop_262_Seed.swf"/>
        <asset id="12275" src="$url/module/ui/allcrops/Crop_263_0.swf"/>
        <asset id="12276" src="$url/module/ui/allcrops/Crop_263_1.swf"/>
        <asset id="12277" src="$url/module/ui/allcrops/Crop_263_2.swf"/>
        <asset id="12278" src="$url/module/ui/allcrops/Crop_263_3.swf"/>
        <asset id="12279" src="$url/module/ui/allcrops/Crop_263_4.swf"/>
        <asset id="12280" src="$url/module/ui/allcrops/Crop_263_Seed.swf"/>
        <asset id="11016" src="$url/module/ui/allcrops/Crop_264_0.swf"/>
        <asset id="11017" src="$url/module/ui/allcrops/Crop_264_1.swf"/>
        <asset id="11018" src="$url/module/ui/allcrops/Crop_264_2.swf"/>
        <asset id="11019" src="$url/module/ui/allcrops/Crop_264_3.swf"/>
        <asset id="11020" src="$url/module/ui/allcrops/Crop_264_4.swf"/>
        <asset id="11021" src="$url/module/ui/allcrops/Crop_264_Seed.swf"/>
        <asset id="9790" src="$url/module/ui/allcrops/Crop_265_1.swf"/>
        <asset id="9791" src="$url/module/ui/allcrops/Crop_265_2.swf"/>
        <asset id="9792" src="$url/module/ui/allcrops/Crop_265_3.swf"/>
        <asset id="9789" src="$url/module/ui/allcrops/Crop_265_Seed.swf"/>
        <asset id="7700" src="$url/module/ui/allcrops/Crop_266_1.swf"/>
        <asset id="7701" src="$url/module/ui/allcrops/Crop_266_2.swf"/>
        <asset id="7702" src="$url/module/ui/allcrops/Crop_266_3.swf"/>
        <asset id="7699" src="$url/module/ui/allcrops/Crop_266_Seed.swf"/>
        <asset id="11125" src="$url/module/ui/allcrops/Crop_267_0.swf"/>
        <asset id="11126" src="$url/module/ui/allcrops/Crop_267_1.swf"/>
        <asset id="11127" src="$url/module/ui/allcrops/Crop_267_2.swf"/>
        <asset id="11128" src="$url/module/ui/allcrops/Crop_267_3.swf"/>
        <asset id="11129" src="$url/module/ui/allcrops/Crop_267_4.swf"/>
        <asset id="11130" src="$url/module/ui/allcrops/Crop_267_Seed.swf"/>
        <asset id="8740" src="$url/module/ui/allcrops/Crop_268_1.swf"/>
        <asset id="8741" src="$url/module/ui/allcrops/Crop_268_2.swf"/>
        <asset id="8742" src="$url/module/ui/allcrops/Crop_268_3.swf"/>
        <asset id="8743" src="$url/module/ui/allcrops/Crop_268_Seed.swf"/>
        <asset id="11028" src="$url/module/ui/allcrops/Crop_269_0.swf"/>
        <asset id="11029" src="$url/module/ui/allcrops/Crop_269_1.swf"/>
        <asset id="11030" src="$url/module/ui/allcrops/Crop_269_2.swf"/>
        <asset id="11031" src="$url/module/ui/allcrops/Crop_269_3.swf"/>
        <asset id="11032" src="$url/module/ui/allcrops/Crop_269_4.swf"/>
        <asset id="11033" src="$url/module/ui/allcrops/Crop_269_Seed.swf"/>
        <asset id="5555" src="$url/module/ui/allcrops/Crop_26_0.swf"/>
        <asset id="5556" src="$url/module/ui/allcrops/Crop_26_1.swf"/>
        <asset id="5557" src="$url/module/ui/allcrops/Crop_26_2.swf"/>
        <asset id="5558" src="$url/module/ui/allcrops/Crop_26_3.swf"/>
        <asset id="2301" src="$url/module/ui/allcrops/Crop_26_Seed.swf"/>
        <asset id="5559" src="$url/module/ui/allcrops/Crop_27_0.swf"/>
        <asset id="5560" src="$url/module/ui/allcrops/Crop_27_1.swf"/>
        <asset id="5561" src="$url/module/ui/allcrops/Crop_27_2.swf"/>
        <asset id="5562" src="$url/module/ui/allcrops/Crop_27_3.swf"/>
        <asset id="2303" src="$url/module/ui/allcrops/Crop_27_Seed.swf"/>
        <asset id="5563" src="$url/module/ui/allcrops/Crop_28_1.swf"/>
        <asset id="5564" src="$url/module/ui/allcrops/Crop_28_2.swf"/>
        <asset id="5565" src="$url/module/ui/allcrops/Crop_28_3.swf"/>
        <asset id="2305" src="$url/module/ui/allcrops/Crop_28_Seed.swf"/>
        <asset id="5566" src="$url/module/ui/allcrops/Crop_29_1.swf"/>
        <asset id="5567" src="$url/module/ui/allcrops/Crop_29_2.swf"/>
        <asset id="5568" src="$url/module/ui/allcrops/Crop_29_3.swf"/>
        <asset id="2307" src="$url/module/ui/allcrops/Crop_29_Seed.swf"/>
        <asset id="5481" src="$url/module/ui/allcrops/Crop_2_1.swf"/>
        <asset id="5482" src="$url/module/ui/allcrops/Crop_2_2.swf"/>
        <asset id="5483" src="$url/module/ui/allcrops/Crop_2_3.swf"/>
        <asset id="2255" src="$url/module/ui/allcrops/Crop_2_Seed.swf"/>
        <asset id="6172" src="$url/module/ui/allcrops/Crop_301_1.swf"/>
        <asset id="6173" src="$url/module/ui/allcrops/Crop_301_2.swf"/>
        <asset id="6174" src="$url/module/ui/allcrops/Crop_301_3.swf"/>
        <asset id="2573" src="$url/module/ui/allcrops/Crop_301_Seed.swf"/>
        <asset id="6175" src="$url/module/ui/allcrops/Crop_302_0.swf"/>
        <asset id="6176" src="$url/module/ui/allcrops/Crop_302_1.swf"/>
        <asset id="6177" src="$url/module/ui/allcrops/Crop_302_2.swf"/>
        <asset id="6178" src="$url/module/ui/allcrops/Crop_302_3.swf"/>
        <asset id="2575" src="$url/module/ui/allcrops/Crop_302_Seed.swf"/>
        <asset id="6179" src="$url/module/ui/allcrops/Crop_303_1.swf"/>
        <asset id="6180" src="$url/module/ui/allcrops/Crop_303_2.swf"/>
        <asset id="6181" src="$url/module/ui/allcrops/Crop_303_3.swf"/>
        <asset id="4263" src="$url/module/ui/allcrops/Crop_303_Seed.swf"/>
        <asset id="6182" src="$url/module/ui/allcrops/Crop_304_1.swf"/>
        <asset id="6183" src="$url/module/ui/allcrops/Crop_304_2.swf"/>
        <asset id="6184" src="$url/module/ui/allcrops/Crop_304_3.swf"/>
        <asset id="2619" src="$url/module/ui/allcrops/Crop_304_Seed.swf"/>
        <asset id="6185" src="$url/module/ui/allcrops/Crop_305_1.swf"/>
        <asset id="6186" src="$url/module/ui/allcrops/Crop_305_2.swf"/>
        <asset id="6187" src="$url/module/ui/allcrops/Crop_305_3.swf"/>
        <asset id="5377" src="$url/module/ui/allcrops/Crop_305_Seed.swf"/>
        <asset id="6380" src="$url/module/ui/allcrops/Crop_306_1.swf"/>
        <asset id="6381" src="$url/module/ui/allcrops/Crop_306_2.swf"/>
        <asset id="6382" src="$url/module/ui/allcrops/Crop_306_3.swf"/>
        <asset id="5375" src="$url/module/ui/allcrops/Crop_306_Seed.swf"/>
        <asset id="7724" src="$url/module/ui/allcrops/Crop_308_1.swf"/>
        <asset id="7725" src="$url/module/ui/allcrops/Crop_308_2.swf"/>
        <asset id="7726" src="$url/module/ui/allcrops/Crop_308_3.swf"/>
        <asset id="7723" src="$url/module/ui/allcrops/Crop_308_Seed.swf"/>
        <asset id="6189" src="$url/module/ui/allcrops/Crop_309_1.swf"/>
        <asset id="6190" src="$url/module/ui/allcrops/Crop_309_2.swf"/>
        <asset id="6191" src="$url/module/ui/allcrops/Crop_309_3.swf"/>
        <asset id="4409" src="$url/module/ui/allcrops/Crop_309_Seed.swf"/>
        <asset id="5569" src="$url/module/ui/allcrops/Crop_30_1.swf"/>
        <asset id="5570" src="$url/module/ui/allcrops/Crop_30_2.swf"/>
        <asset id="5571" src="$url/module/ui/allcrops/Crop_30_3.swf"/>
        <asset id="2309" src="$url/module/ui/allcrops/Crop_30_Seed.swf"/>
        <asset id="6192" src="$url/module/ui/allcrops/Crop_310_0.swf"/>
        <asset id="6193" src="$url/module/ui/allcrops/Crop_310_1.swf"/>
        <asset id="6194" src="$url/module/ui/allcrops/Crop_310_2.swf"/>
        <asset id="6195" src="$url/module/ui/allcrops/Crop_310_3.swf"/>
        <asset id="6196" src="$url/module/ui/allcrops/Crop_310_4.swf"/>
        <asset id="4411" src="$url/module/ui/allcrops/Crop_310_Seed.swf"/>
        <asset id="6197" src="$url/module/ui/allcrops/Crop_311_1.swf"/>
        <asset id="6198" src="$url/module/ui/allcrops/Crop_311_2.swf"/>
        <asset id="6199" src="$url/module/ui/allcrops/Crop_311_3.swf"/>
        <asset id="4346" src="$url/module/ui/allcrops/Crop_311_Seed.swf"/>
        <asset id="6200" src="$url/module/ui/allcrops/Crop_312_1.swf"/>
        <asset id="6201" src="$url/module/ui/allcrops/Crop_312_2.swf"/>
        <asset id="6202" src="$url/module/ui/allcrops/Crop_312_3.swf"/>
        <asset id="4348" src="$url/module/ui/allcrops/Crop_312_Seed.swf"/>
        <asset id="6203" src="$url/module/ui/allcrops/Crop_313_1.swf"/>
        <asset id="6204" src="$url/module/ui/allcrops/Crop_313_2.swf"/>
        <asset id="6205" src="$url/module/ui/allcrops/Crop_313_3.swf"/>
        <asset id="4350" src="$url/module/ui/allcrops/Crop_313_Seed.swf"/>
        <asset id="6206" src="$url/module/ui/allcrops/Crop_314_1.swf"/>
        <asset id="6207" src="$url/module/ui/allcrops/Crop_314_2.swf"/>
        <asset id="6208" src="$url/module/ui/allcrops/Crop_314_3.swf"/>
        <asset id="4334" src="$url/module/ui/allcrops/Crop_314_Seed.swf"/>
        <asset id="6209" src="$url/module/ui/allcrops/Crop_315_1.swf"/>
        <asset id="6210" src="$url/module/ui/allcrops/Crop_315_2.swf"/>
        <asset id="6211" src="$url/module/ui/allcrops/Crop_315_3.swf"/>
        <asset id="4336" src="$url/module/ui/allcrops/Crop_315_Seed.swf"/>
        <asset id="6212" src="$url/module/ui/allcrops/Crop_316_1.swf"/>
        <asset id="6213" src="$url/module/ui/allcrops/Crop_316_2.swf"/>
        <asset id="6214" src="$url/module/ui/allcrops/Crop_316_3.swf"/>
        <asset id="4338" src="$url/module/ui/allcrops/Crop_316_Seed.swf"/>
        <asset id="6215" src="$url/module/ui/allcrops/Crop_317_1.swf"/>
        <asset id="6216" src="$url/module/ui/allcrops/Crop_317_2.swf"/>
        <asset id="6217" src="$url/module/ui/allcrops/Crop_317_3.swf"/>
        <asset id="4340" src="$url/module/ui/allcrops/Crop_317_Seed.swf"/>
        <asset id="6218" src="$url/module/ui/allcrops/Crop_318_1.swf"/>
        <asset id="6219" src="$url/module/ui/allcrops/Crop_318_2.swf"/>
        <asset id="6220" src="$url/module/ui/allcrops/Crop_318_3.swf"/>
        <asset id="4418" src="$url/module/ui/allcrops/Crop_318_Seed.swf"/>
        <asset id="6221" src="$url/module/ui/allcrops/Crop_319_1.swf"/>
        <asset id="6222" src="$url/module/ui/allcrops/Crop_319_2.swf"/>
        <asset id="6223" src="$url/module/ui/allcrops/Crop_319_3.swf"/>
        <asset id="4420" src="$url/module/ui/allcrops/Crop_319_Seed.swf"/>
        <asset id="5572" src="$url/module/ui/allcrops/Crop_31_1.swf"/>
        <asset id="5573" src="$url/module/ui/allcrops/Crop_31_2.swf"/>
        <asset id="5574" src="$url/module/ui/allcrops/Crop_31_3.swf"/>
        <asset id="2311" src="$url/module/ui/allcrops/Crop_31_Seed.swf"/>
        <asset id="6224" src="$url/module/ui/allcrops/Crop_320_1.swf"/>
        <asset id="6225" src="$url/module/ui/allcrops/Crop_320_2.swf"/>
        <asset id="6226" src="$url/module/ui/allcrops/Crop_320_3.swf"/>
        <asset id="4422" src="$url/module/ui/allcrops/Crop_320_Seed.swf"/>
        <asset id="6228" src="$url/module/ui/allcrops/Crop_321_1.swf"/>
        <asset id="6229" src="$url/module/ui/allcrops/Crop_321_2.swf"/>
        <asset id="6230" src="$url/module/ui/allcrops/Crop_321_3.swf"/>
        <asset id="4561" src="$url/module/ui/allcrops/Crop_321_Seed.swf"/>
        <asset id="6232" src="$url/module/ui/allcrops/Crop_322_1.swf"/>
        <asset id="6233" src="$url/module/ui/allcrops/Crop_322_2.swf"/>
        <asset id="6234" src="$url/module/ui/allcrops/Crop_322_3.swf"/>
        <asset id="4563" src="$url/module/ui/allcrops/Crop_322_Seed.swf"/>
        <asset id="6235" src="$url/module/ui/allcrops/Crop_323_1.swf"/>
        <asset id="6236" src="$url/module/ui/allcrops/Crop_323_2.swf"/>
        <asset id="6237" src="$url/module/ui/allcrops/Crop_323_3.swf"/>
        <asset id="4567" src="$url/module/ui/allcrops/Crop_323_Seed.swf"/>
        <asset id="6238" src="$url/module/ui/allcrops/Crop_324_1.swf"/>
        <asset id="6239" src="$url/module/ui/allcrops/Crop_324_2.swf"/>
        <asset id="6240" src="$url/module/ui/allcrops/Crop_324_3.swf"/>
        <asset id="4672" src="$url/module/ui/allcrops/Crop_324_Seed.swf"/>
        <asset id="6242" src="$url/module/ui/allcrops/Crop_325_1.swf"/>
        <asset id="6243" src="$url/module/ui/allcrops/Crop_325_2.swf"/>
        <asset id="6244" src="$url/module/ui/allcrops/Crop_325_3.swf"/>
        <asset id="4674" src="$url/module/ui/allcrops/Crop_325_Seed.swf"/>
        <asset id="6246" src="$url/module/ui/allcrops/Crop_326_1.swf"/>
        <asset id="6247" src="$url/module/ui/allcrops/Crop_326_2.swf"/>
        <asset id="6248" src="$url/module/ui/allcrops/Crop_326_3.swf"/>
        <asset id="4230" src="$url/module/ui/allcrops/Crop_326_Seed.swf"/>
        <asset id="6249" src="$url/module/ui/allcrops/Crop_327_1.swf"/>
        <asset id="6250" src="$url/module/ui/allcrops/Crop_327_2.swf"/>
        <asset id="6251" src="$url/module/ui/allcrops/Crop_327_3.swf"/>
        <asset id="4945" src="$url/module/ui/allcrops/Crop_327_Seed.swf"/>
        <asset id="6252" src="$url/module/ui/allcrops/Crop_328_1.swf"/>
        <asset id="6253" src="$url/module/ui/allcrops/Crop_328_2.swf"/>
        <asset id="6254" src="$url/module/ui/allcrops/Crop_328_3.swf"/>
        <asset id="4947" src="$url/module/ui/allcrops/Crop_328_Seed.swf"/>
        <asset id="6255" src="$url/module/ui/allcrops/Crop_329_1.swf"/>
        <asset id="6256" src="$url/module/ui/allcrops/Crop_329_2.swf"/>
        <asset id="6257" src="$url/module/ui/allcrops/Crop_329_3.swf"/>
        <asset id="4949" src="$url/module/ui/allcrops/Crop_329_Seed.swf"/>
        <asset id="5575" src="$url/module/ui/allcrops/Crop_32_1.swf"/>
        <asset id="5576" src="$url/module/ui/allcrops/Crop_32_2.swf"/>
        <asset id="5577" src="$url/module/ui/allcrops/Crop_32_3.swf"/>
        <asset id="2313" src="$url/module/ui/allcrops/Crop_32_Seed.swf"/>
        <asset id="6258" src="$url/module/ui/allcrops/Crop_330_1.swf"/>
        <asset id="6259" src="$url/module/ui/allcrops/Crop_330_2.swf"/>
        <asset id="6260" src="$url/module/ui/allcrops/Crop_330_3.swf"/>
        <asset id="4681" src="$url/module/ui/allcrops/Crop_330_Seed.swf"/>
        <asset id="6261" src="$url/module/ui/allcrops/Crop_332_1.swf"/>
        <asset id="6262" src="$url/module/ui/allcrops/Crop_332_2.swf"/>
        <asset id="6263" src="$url/module/ui/allcrops/Crop_332_3.swf"/>
        <asset id="4571" src="$url/module/ui/allcrops/Crop_332_Seed.swf"/>
        <asset id="6264" src="$url/module/ui/allcrops/Crop_333_1.swf"/>
        <asset id="6265" src="$url/module/ui/allcrops/Crop_333_2.swf"/>
        <asset id="6266" src="$url/module/ui/allcrops/Crop_333_3.swf"/>
        <asset id="4726" src="$url/module/ui/allcrops/Crop_333_Seed.swf"/>
        <asset id="6267" src="$url/module/ui/allcrops/Crop_334_0.swf"/>
        <asset id="6268" src="$url/module/ui/allcrops/Crop_334_1.swf"/>
        <asset id="6269" src="$url/module/ui/allcrops/Crop_334_2.swf"/>
        <asset id="6270" src="$url/module/ui/allcrops/Crop_334_3.swf"/>
        <asset id="4729" src="$url/module/ui/allcrops/Crop_334_movie.swf"/>
        <asset id="4728" src="$url/module/ui/allcrops/Crop_334_Seed.swf"/>
        <asset id="6975" src="$url/module/ui/allcrops/Crop_335_1.swf"/>
        <asset id="6976" src="$url/module/ui/allcrops/Crop_335_2.swf"/>
        <asset id="6977" src="$url/module/ui/allcrops/Crop_335_3.swf"/>
        <asset id="6974" src="$url/module/ui/allcrops/Crop_335_Seed.swf"/>
        <asset id="6982" src="$url/module/ui/allcrops/Crop_336_1.swf"/>
        <asset id="6983" src="$url/module/ui/allcrops/Crop_336_2.swf"/>
        <asset id="6984" src="$url/module/ui/allcrops/Crop_336_3.swf"/>
        <asset id="6985" src="$url/module/ui/allcrops/Crop_336_Seed.swf"/>
        <asset id="6971" src="$url/module/ui/allcrops/Crop_337_1.swf"/>
        <asset id="6972" src="$url/module/ui/allcrops/Crop_337_2.swf"/>
        <asset id="6973" src="$url/module/ui/allcrops/Crop_337_3.swf"/>
        <asset id="6970" src="$url/module/ui/allcrops/Crop_337_Seed.swf"/>
        <asset id="6987" src="$url/module/ui/allcrops/Crop_338_1.swf"/>
        <asset id="6988" src="$url/module/ui/allcrops/Crop_338_2.swf"/>
        <asset id="6989" src="$url/module/ui/allcrops/Crop_338_3.swf"/>
        <asset id="6986" src="$url/module/ui/allcrops/Crop_338_Seed.swf"/>
        <asset id="6978" src="$url/module/ui/allcrops/Crop_339_1.swf"/>
        <asset id="6979" src="$url/module/ui/allcrops/Crop_339_2.swf"/>
        <asset id="6980" src="$url/module/ui/allcrops/Crop_339_3.swf"/>
        <asset id="6981" src="$url/module/ui/allcrops/Crop_339_Seed.swf"/>
        <asset id="5578" src="$url/module/ui/allcrops/Crop_33_0.swf"/>
        <asset id="5579" src="$url/module/ui/allcrops/Crop_33_1.swf"/>
        <asset id="5580" src="$url/module/ui/allcrops/Crop_33_2.swf"/>
        <asset id="5581" src="$url/module/ui/allcrops/Crop_33_3.swf"/>
        <asset id="2315" src="$url/module/ui/allcrops/Crop_33_Seed.swf"/>
        <asset id="6383" src="$url/module/ui/allcrops/Crop_340_1.swf"/>
        <asset id="6384" src="$url/module/ui/allcrops/Crop_340_2.swf"/>
        <asset id="6385" src="$url/module/ui/allcrops/Crop_340_3.swf"/>
        <asset id="5093" src="$url/module/ui/allcrops/Crop_340_Seed.swf"/>
        <asset id="6386" src="$url/module/ui/allcrops/Crop_341_1.swf"/>
        <asset id="6387" src="$url/module/ui/allcrops/Crop_341_2.swf"/>
        <asset id="6388" src="$url/module/ui/allcrops/Crop_341_3.swf"/>
        <asset id="5259" src="$url/module/ui/allcrops/Crop_341_Seed.swf"/>
        <asset id="6389" src="$url/module/ui/allcrops/Crop_342_1.swf"/>
        <asset id="6390" src="$url/module/ui/allcrops/Crop_342_2.swf"/>
        <asset id="6391" src="$url/module/ui/allcrops/Crop_342_3.swf"/>
        <asset id="5261" src="$url/module/ui/allcrops/Crop_342_Seed.swf"/>
        <asset id="6392" src="$url/module/ui/allcrops/Crop_343_1.swf"/>
        <asset id="6393" src="$url/module/ui/allcrops/Crop_343_2.swf"/>
        <asset id="6394" src="$url/module/ui/allcrops/Crop_343_3.swf"/>
        <asset id="5263" src="$url/module/ui/allcrops/Crop_343_Seed.swf"/>
        <asset id="6395" src="$url/module/ui/allcrops/Crop_344_1.swf"/>
        <asset id="6396" src="$url/module/ui/allcrops/Crop_344_2.swf"/>
        <asset id="6397" src="$url/module/ui/allcrops/Crop_344_3.swf"/>
        <asset id="5095" src="$url/module/ui/allcrops/Crop_344_Seed.swf"/>
        <asset id="6398" src="$url/module/ui/allcrops/Crop_345_1.swf"/>
        <asset id="6399" src="$url/module/ui/allcrops/Crop_345_2.swf"/>
        <asset id="6400" src="$url/module/ui/allcrops/Crop_345_3.swf"/>
        <asset id="5265" src="$url/module/ui/allcrops/Crop_345_Seed.swf"/>
        <asset id="6401" src="$url/module/ui/allcrops/Crop_346_1.swf"/>
        <asset id="6402" src="$url/module/ui/allcrops/Crop_346_2.swf"/>
        <asset id="6403" src="$url/module/ui/allcrops/Crop_346_3.swf"/>
        <asset id="5267" src="$url/module/ui/allcrops/Crop_346_Seed.swf"/>
        <asset id="6404" src="$url/module/ui/allcrops/Crop_347_1.swf"/>
        <asset id="6405" src="$url/module/ui/allcrops/Crop_347_2.swf"/>
        <asset id="6406" src="$url/module/ui/allcrops/Crop_347_3.swf"/>
        <asset id="5097" src="$url/module/ui/allcrops/Crop_347_Seed.swf"/>
        <asset id="6407" src="$url/module/ui/allcrops/Crop_348_1.swf"/>
        <asset id="6408" src="$url/module/ui/allcrops/Crop_348_2.swf"/>
        <asset id="6409" src="$url/module/ui/allcrops/Crop_348_3.swf"/>
        <asset id="5269" src="$url/module/ui/allcrops/Crop_348_Seed.swf"/>
        <asset id="6410" src="$url/module/ui/allcrops/Crop_349_1.swf"/>
        <asset id="6411" src="$url/module/ui/allcrops/Crop_349_2.swf"/>
        <asset id="6412" src="$url/module/ui/allcrops/Crop_349_3.swf"/>
        <asset id="5271" src="$url/module/ui/allcrops/Crop_349_Seed.swf"/>
        <asset id="5582" src="$url/module/ui/allcrops/Crop_34_1.swf"/>
        <asset id="5583" src="$url/module/ui/allcrops/Crop_34_2.swf"/>
        <asset id="5584" src="$url/module/ui/allcrops/Crop_34_3.swf"/>
        <asset id="2317" src="$url/module/ui/allcrops/Crop_34_Seed.swf"/>
        <asset id="6414" src="$url/module/ui/allcrops/Crop_351_1.swf"/>
        <asset id="6415" src="$url/module/ui/allcrops/Crop_351_2.swf"/>
        <asset id="6416" src="$url/module/ui/allcrops/Crop_351_3.swf"/>
        <asset id="5275" src="$url/module/ui/allcrops/Crop_351_Seed.swf"/>
        <asset id="6417" src="$url/module/ui/allcrops/Crop_352_1.swf"/>
        <asset id="6418" src="$url/module/ui/allcrops/Crop_352_2.swf"/>
        <asset id="6419" src="$url/module/ui/allcrops/Crop_352_3.swf"/>
        <asset id="5277" src="$url/module/ui/allcrops/Crop_352_Seed.swf"/>
        <asset id="6420" src="$url/module/ui/allcrops/Crop_353_1.swf"/>
        <asset id="6421" src="$url/module/ui/allcrops/Crop_353_2.swf"/>
        <asset id="6422" src="$url/module/ui/allcrops/Crop_353_3.swf"/>
        <asset id="5099" src="$url/module/ui/allcrops/Crop_353_Seed.swf"/>
        <asset id="6423" src="$url/module/ui/allcrops/Crop_354_1.swf"/>
        <asset id="6424" src="$url/module/ui/allcrops/Crop_354_2.swf"/>
        <asset id="6425" src="$url/module/ui/allcrops/Crop_354_3.swf"/>
        <asset id="5279" src="$url/module/ui/allcrops/Crop_354_Seed.swf"/>
        <asset id="6426" src="$url/module/ui/allcrops/Crop_355_1.swf"/>
        <asset id="6427" src="$url/module/ui/allcrops/Crop_355_2.swf"/>
        <asset id="6428" src="$url/module/ui/allcrops/Crop_355_3.swf"/>
        <asset id="5101" src="$url/module/ui/allcrops/Crop_355_Seed.swf"/>
        <asset id="6429" src="$url/module/ui/allcrops/Crop_356_1.swf"/>
        <asset id="6430" src="$url/module/ui/allcrops/Crop_356_2.swf"/>
        <asset id="6431" src="$url/module/ui/allcrops/Crop_356_3.swf"/>
        <asset id="5281" src="$url/module/ui/allcrops/Crop_356_Seed.swf"/>
        <asset id="6432" src="$url/module/ui/allcrops/Crop_357_1.swf"/>
        <asset id="6433" src="$url/module/ui/allcrops/Crop_357_2.swf"/>
        <asset id="6434" src="$url/module/ui/allcrops/Crop_357_3.swf"/>
        <asset id="5103" src="$url/module/ui/allcrops/Crop_357_Seed.swf"/>
        <asset id="6435" src="$url/module/ui/allcrops/Crop_358_1.swf"/>
        <asset id="6436" src="$url/module/ui/allcrops/Crop_358_2.swf"/>
        <asset id="6437" src="$url/module/ui/allcrops/Crop_358_3.swf"/>
        <asset id="5283" src="$url/module/ui/allcrops/Crop_358_Seed.swf"/>
        <asset id="6438" src="$url/module/ui/allcrops/Crop_359_1.swf"/>
        <asset id="6439" src="$url/module/ui/allcrops/Crop_359_2.swf"/>
        <asset id="6440" src="$url/module/ui/allcrops/Crop_359_3.swf"/>
        <asset id="5285" src="$url/module/ui/allcrops/Crop_359_Seed.swf"/>
        <asset id="5585" src="$url/module/ui/allcrops/Crop_35_1.swf"/>
        <asset id="5586" src="$url/module/ui/allcrops/Crop_35_2.swf"/>
        <asset id="5587" src="$url/module/ui/allcrops/Crop_35_3.swf"/>
        <asset id="2319" src="$url/module/ui/allcrops/Crop_35_Seed.swf"/>
        <asset id="6441" src="$url/module/ui/allcrops/Crop_360_1.swf"/>
        <asset id="6442" src="$url/module/ui/allcrops/Crop_360_2.swf"/>
        <asset id="6443" src="$url/module/ui/allcrops/Crop_360_3.swf"/>
        <asset id="5287" src="$url/module/ui/allcrops/Crop_360_Seed.swf"/>
        <asset id="6444" src="$url/module/ui/allcrops/Crop_361_1.swf"/>
        <asset id="6445" src="$url/module/ui/allcrops/Crop_361_2.swf"/>
        <asset id="6446" src="$url/module/ui/allcrops/Crop_361_3.swf"/>
        <asset id="5289" src="$url/module/ui/allcrops/Crop_361_Seed.swf"/>
        <asset id="6447" src="$url/module/ui/allcrops/Crop_362_1.swf"/>
        <asset id="6448" src="$url/module/ui/allcrops/Crop_362_2.swf"/>
        <asset id="6449" src="$url/module/ui/allcrops/Crop_362_3.swf"/>
        <asset id="5105" src="$url/module/ui/allcrops/Crop_362_Seed.swf"/>
        <asset id="6450" src="$url/module/ui/allcrops/Crop_363_1.swf"/>
        <asset id="6451" src="$url/module/ui/allcrops/Crop_363_2.swf"/>
        <asset id="6452" src="$url/module/ui/allcrops/Crop_363_3.swf"/>
        <asset id="5291" src="$url/module/ui/allcrops/Crop_363_Seed.swf"/>
        <asset id="6453" src="$url/module/ui/allcrops/Crop_364_1.swf"/>
        <asset id="6454" src="$url/module/ui/allcrops/Crop_364_2.swf"/>
        <asset id="6455" src="$url/module/ui/allcrops/Crop_364_3.swf"/>
        <asset id="5107" src="$url/module/ui/allcrops/Crop_364_Seed.swf"/>
        <asset id="6456" src="$url/module/ui/allcrops/Crop_365_1.swf"/>
        <asset id="6457" src="$url/module/ui/allcrops/Crop_365_2.swf"/>
        <asset id="6458" src="$url/module/ui/allcrops/Crop_365_3.swf"/>
        <asset id="5293" src="$url/module/ui/allcrops/Crop_365_Seed.swf"/>
        <asset id="6271" src="$url/module/ui/allcrops/Crop_366_1.swf"/>
        <asset id="6272" src="$url/module/ui/allcrops/Crop_366_2.swf"/>
        <asset id="6273" src="$url/module/ui/allcrops/Crop_366_3.swf"/>
        <asset id="4953" src="$url/module/ui/allcrops/Crop_366_Seed.swf"/>
        <asset id="6274" src="$url/module/ui/allcrops/Crop_367_1.swf"/>
        <asset id="6275" src="$url/module/ui/allcrops/Crop_367_2.swf"/>
        <asset id="6276" src="$url/module/ui/allcrops/Crop_367_3.swf"/>
        <asset id="4951" src="$url/module/ui/allcrops/Crop_367_Seed.swf"/>
        <asset id="5588" src="$url/module/ui/allcrops/Crop_36_0.swf"/>
        <asset id="5589" src="$url/module/ui/allcrops/Crop_36_1.swf"/>
        <asset id="5590" src="$url/module/ui/allcrops/Crop_36_2.swf"/>
        <asset id="5591" src="$url/module/ui/allcrops/Crop_36_3.swf"/>
        <asset id="2321" src="$url/module/ui/allcrops/Crop_36_Seed.swf"/>
        <asset id="5592" src="$url/module/ui/allcrops/Crop_37_0.swf"/>
        <asset id="5593" src="$url/module/ui/allcrops/Crop_37_1.swf"/>
        <asset id="5594" src="$url/module/ui/allcrops/Crop_37_2.swf"/>
        <asset id="5595" src="$url/module/ui/allcrops/Crop_37_3.swf"/>
        <asset id="12269" src="$url/module/ui/allcrops/Crop_370_0.swf"/>
        <asset id="12270" src="$url/module/ui/allcrops/Crop_370_1.swf"/>
        <asset id="12271" src="$url/module/ui/allcrops/Crop_370_2.swf"/>
        <asset id="12272" src="$url/module/ui/allcrops/Crop_370_3.swf"/>
        <asset id="12273" src="$url/module/ui/allcrops/Crop_370_4.swf"/>
        <asset id="12274" src="$url/module/ui/allcrops/Crop_370_Seed.swf"/>
        <asset id="10999" src="$url/module/ui/allcrops/Crop_371_0.swf"/>
        <asset id="11000" src="$url/module/ui/allcrops/Crop_371_1.swf"/>
        <asset id="11001" src="$url/module/ui/allcrops/Crop_371_2.swf"/>
        <asset id="11002" src="$url/module/ui/allcrops/Crop_371_3.swf"/>
        <asset id="11003" src="$url/module/ui/allcrops/Crop_371_4.swf"/>
        <asset id="11004" src="$url/module/ui/allcrops/Crop_371_Seed.swf"/>
        <asset id="12311" src="$url/module/ui/allcrops/Crop_375_0.swf"/>
        <asset id="12312" src="$url/module/ui/allcrops/Crop_375_1.swf"/>
        <asset id="12313" src="$url/module/ui/allcrops/Crop_375_2.swf"/>
        <asset id="12314" src="$url/module/ui/allcrops/Crop_375_3.swf"/>
        <asset id="12315" src="$url/module/ui/allcrops/Crop_375_4.swf"/>
        <asset id="12316" src="$url/module/ui/allcrops/Crop_375_Seed.swf"/>
        <asset id="12204" src="$url/module/ui/allcrops/Crop_376_0.swf"/>
        <asset id="12205" src="$url/module/ui/allcrops/Crop_376_1.swf"/>
        <asset id="12206" src="$url/module/ui/allcrops/Crop_376_2.swf"/>
        <asset id="12207" src="$url/module/ui/allcrops/Crop_376_3.swf"/>
        <asset id="12208" src="$url/module/ui/allcrops/Crop_376_4.swf"/>
        <asset id="12209" src="$url/module/ui/allcrops/Crop_376_Seed.swf"/>
        <asset id="12281" src="$url/module/ui/allcrops/Crop_377_0.swf"/>
        <asset id="12282" src="$url/module/ui/allcrops/Crop_377_1.swf"/>
        <asset id="12283" src="$url/module/ui/allcrops/Crop_377_2.swf"/>
        <asset id="12284" src="$url/module/ui/allcrops/Crop_377_3.swf"/>
        <asset id="12285" src="$url/module/ui/allcrops/Crop_377_4.swf"/>
        <asset id="12286" src="$url/module/ui/allcrops/Crop_377_Seed.swf"/>
        <asset id="6561" src="$url/module/ui/allcrops/Crop_378_1.swf"/>
        <asset id="6562" src="$url/module/ui/allcrops/Crop_378_2.swf"/>
        <asset id="6563" src="$url/module/ui/allcrops/Crop_378_3.swf"/>
        <asset id="6708" src="$url/module/ui/allcrops/Crop_378_Seed.swf"/>
        <asset id="12198" src="$url/module/ui/allcrops/Crop_379_0.swf"/>
        <asset id="12199" src="$url/module/ui/allcrops/Crop_379_1.swf"/>
        <asset id="12200" src="$url/module/ui/allcrops/Crop_379_2.swf"/>
        <asset id="12201" src="$url/module/ui/allcrops/Crop_379_3.swf"/>
        <asset id="12202" src="$url/module/ui/allcrops/Crop_379_4.swf"/>
        <asset id="12203" src="$url/module/ui/allcrops/Crop_379_Seed.swf"/>
        <asset id="2323" src="$url/module/ui/allcrops/Crop_37_Seed.swf"/>
        <asset id="8617" src="$url/module/ui/allcrops/Crop_380_1.swf"/>
        <asset id="8618" src="$url/module/ui/allcrops/Crop_380_2.swf"/>
        <asset id="8619" src="$url/module/ui/allcrops/Crop_380_3.swf"/>
        <asset id="8616" src="$url/module/ui/allcrops/Crop_380_Seed.swf"/>
        <asset id="12293" src="$url/module/ui/allcrops/Crop_381_0.swf"/>
        <asset id="12294" src="$url/module/ui/allcrops/Crop_381_1.swf"/>
        <asset id="12295" src="$url/module/ui/allcrops/Crop_381_2.swf"/>
        <asset id="12296" src="$url/module/ui/allcrops/Crop_381_3.swf"/>
        <asset id="12297" src="$url/module/ui/allcrops/Crop_381_4.swf"/>
        <asset id="12298" src="$url/module/ui/allcrops/Crop_381_Seed.swf"/>
        <asset id="6859" src="$url/module/ui/allcrops/Crop_382_1.swf"/>
        <asset id="6860" src="$url/module/ui/allcrops/Crop_382_2.swf"/>
        <asset id="6861" src="$url/module/ui/allcrops/Crop_382_3.swf"/>
        <asset id="6858" src="$url/module/ui/allcrops/Crop_382_Seed.swf"/>
        <asset id="6473" src="$url/module/ui/allcrops/Crop_383_1.swf"/>
        <asset id="6474" src="$url/module/ui/allcrops/Crop_383_2.swf"/>
        <asset id="6475" src="$url/module/ui/allcrops/Crop_383_3.swf"/>
        <asset id="6352" src="$url/module/ui/allcrops/Crop_383_Seed.swf"/>
        <asset id="6476" src="$url/module/ui/allcrops/Crop_384_1.swf"/>
        <asset id="6477" src="$url/module/ui/allcrops/Crop_384_2.swf"/>
        <asset id="6478" src="$url/module/ui/allcrops/Crop_384_3.swf"/>
        <asset id="6354" src="$url/module/ui/allcrops/Crop_384_Seed.swf"/>
        <asset id="6843" src="$url/module/ui/allcrops/Crop_385_1.swf"/>
        <asset id="6844" src="$url/module/ui/allcrops/Crop_385_2.swf"/>
        <asset id="6845" src="$url/module/ui/allcrops/Crop_385_3.swf"/>
        <asset id="6842" src="$url/module/ui/allcrops/Crop_385_Seed.swf"/>
        <asset id="6851" src="$url/module/ui/allcrops/Crop_386_1.swf"/>
        <asset id="6852" src="$url/module/ui/allcrops/Crop_386_2.swf"/>
        <asset id="6853" src="$url/module/ui/allcrops/Crop_386_3.swf"/>
        <asset id="6850" src="$url/module/ui/allcrops/Crop_386_Seed.swf"/>
        <asset id="6870" src="$url/module/ui/allcrops/Crop_387_1.swf"/>
        <asset id="6871" src="$url/module/ui/allcrops/Crop_387_2.swf"/>
        <asset id="6872" src="$url/module/ui/allcrops/Crop_387_3.swf"/>
        <asset id="6873" src="$url/module/ui/allcrops/Crop_387_Seed.swf"/>
        <asset id="6855" src="$url/module/ui/allcrops/Crop_388_1.swf"/>
        <asset id="6856" src="$url/module/ui/allcrops/Crop_388_2.swf"/>
        <asset id="6857" src="$url/module/ui/allcrops/Crop_388_3.swf"/>
        <asset id="6854" src="$url/module/ui/allcrops/Crop_388_Seed.swf"/>
        <asset id="6867" src="$url/module/ui/allcrops/Crop_389_1.swf"/>
        <asset id="6868" src="$url/module/ui/allcrops/Crop_389_2.swf"/>
        <asset id="6869" src="$url/module/ui/allcrops/Crop_389_3.swf"/>
        <asset id="6866" src="$url/module/ui/allcrops/Crop_389_Seed.swf"/>
        <asset id="5596" src="$url/module/ui/allcrops/Crop_38_1.swf"/>
        <asset id="5597" src="$url/module/ui/allcrops/Crop_38_2.swf"/>
        <asset id="5598" src="$url/module/ui/allcrops/Crop_38_3.swf"/>
        <asset id="2325" src="$url/module/ui/allcrops/Crop_38_Seed.swf"/>
        <asset id="6847" src="$url/module/ui/allcrops/Crop_390_1.swf"/>
        <asset id="6848" src="$url/module/ui/allcrops/Crop_390_2.swf"/>
        <asset id="6849" src="$url/module/ui/allcrops/Crop_390_3.swf"/>
        <asset id="6846" src="$url/module/ui/allcrops/Crop_390_Seed.swf"/>
        <asset id="6875" src="$url/module/ui/allcrops/Crop_391_1.swf"/>
        <asset id="6876" src="$url/module/ui/allcrops/Crop_391_2.swf"/>
        <asset id="6877" src="$url/module/ui/allcrops/Crop_391_3.swf"/>
        <asset id="6874" src="$url/module/ui/allcrops/Crop_391_Seed.swf"/>
        <asset id="6879" src="$url/module/ui/allcrops/Crop_392_1.swf"/>
        <asset id="6880" src="$url/module/ui/allcrops/Crop_392_2.swf"/>
        <asset id="6881" src="$url/module/ui/allcrops/Crop_392_3.swf"/>
        <asset id="6878" src="$url/module/ui/allcrops/Crop_392_Seed.swf"/>
        <asset id="6863" src="$url/module/ui/allcrops/Crop_393_1.swf"/>
        <asset id="6864" src="$url/module/ui/allcrops/Crop_393_2.swf"/>
        <asset id="6865" src="$url/module/ui/allcrops/Crop_393_3.swf"/>
        <asset id="6862" src="$url/module/ui/allcrops/Crop_393_Seed.swf"/>
        <asset id="12234" src="$url/module/ui/allcrops/Crop_395_0.swf"/>
        <asset id="12235" src="$url/module/ui/allcrops/Crop_395_1.swf"/>
        <asset id="12236" src="$url/module/ui/allcrops/Crop_395_2.swf"/>
        <asset id="12237" src="$url/module/ui/allcrops/Crop_395_3.swf"/>
        <asset id="12238" src="$url/module/ui/allcrops/Crop_395_4.swf"/>
        <asset id="12239" src="$url/module/ui/allcrops/Crop_395_Seed.swf"/>
        <asset id="10615" src="$url/module/ui/allcrops/Crop_396_1.swf"/>
        <asset id="10616" src="$url/module/ui/allcrops/Crop_396_2.swf"/>
        <asset id="10617" src="$url/module/ui/allcrops/Crop_396_3.swf"/>
        <asset id="10618" src="$url/module/ui/allcrops/Crop_396_Seed.swf"/>
        <asset id="6890" src="$url/module/ui/allcrops/Crop_397_1.swf"/>
        <asset id="6891" src="$url/module/ui/allcrops/Crop_397_2.swf"/>
        <asset id="6892" src="$url/module/ui/allcrops/Crop_397_3.swf"/>
        <asset id="6893" src="$url/module/ui/allcrops/Crop_397_Seed.swf"/>
        <asset id="6886" src="$url/module/ui/allcrops/Crop_398_1.swf"/>
        <asset id="6887" src="$url/module/ui/allcrops/Crop_398_2.swf"/>
        <asset id="6888" src="$url/module/ui/allcrops/Crop_398_3.swf"/>
        <asset id="6889" src="$url/module/ui/allcrops/Crop_398_Seed.swf"/>
        <asset id="6882" src="$url/module/ui/allcrops/Crop_399_1.swf"/>
        <asset id="6883" src="$url/module/ui/allcrops/Crop_399_2.swf"/>
        <asset id="6884" src="$url/module/ui/allcrops/Crop_399_3.swf"/>
        <asset id="6885" src="$url/module/ui/allcrops/Crop_399_Seed.swf"/>
        <asset id="5599" src="$url/module/ui/allcrops/Crop_39_1.swf"/>
        <asset id="5600" src="$url/module/ui/allcrops/Crop_39_2.swf"/>
        <asset id="5601" src="$url/module/ui/allcrops/Crop_39_3.swf"/>
        <asset id="2327" src="$url/module/ui/allcrops/Crop_39_Seed.swf"/>
        <asset id="5484" src="$url/module/ui/allcrops/Crop_3_1.swf"/>
        <asset id="5485" src="$url/module/ui/allcrops/Crop_3_2.swf"/>
        <asset id="5486" src="$url/module/ui/allcrops/Crop_3_3.swf"/>
        <asset id="2257" src="$url/module/ui/allcrops/Crop_3_Seed.swf"/>
        <asset id="6460" src="$url/module/ui/allcrops/Crop_400_1.swf"/>
        <asset id="6461" src="$url/module/ui/allcrops/Crop_400_2.swf"/>
        <asset id="6462" src="$url/module/ui/allcrops/Crop_400_3.swf"/>
        <asset id="5471" src="$url/module/ui/allcrops/Crop_400_Seed.swf"/>
        <asset id="9000" src="$url/module/ui/allcrops/Crop_401_1.swf"/>
        <asset id="9001" src="$url/module/ui/allcrops/Crop_401_2.swf"/>
        <asset id="9002" src="$url/module/ui/allcrops/Crop_401_3.swf"/>
        <asset id="9003" src="$url/module/ui/allcrops/Crop_401_Seed.swf"/>
        <asset id="6567" src="$url/module/ui/allcrops/Crop_402_1.swf"/>
        <asset id="6568" src="$url/module/ui/allcrops/Crop_402_2.swf"/>
        <asset id="6569" src="$url/module/ui/allcrops/Crop_402_3.swf"/>
        <asset id="6707" src="$url/module/ui/allcrops/Crop_402_Seed.swf"/>
        <asset id="6571" src="$url/module/ui/allcrops/Crop_403_1.swf"/>
        <asset id="6572" src="$url/module/ui/allcrops/Crop_403_2.swf"/>
        <asset id="6573" src="$url/module/ui/allcrops/Crop_403_3.swf"/>
        <asset id="6706" src="$url/module/ui/allcrops/Crop_403_Seed.swf"/>
        <asset id="6576" src="$url/module/ui/allcrops/Crop_404_1.swf"/>
        <asset id="6577" src="$url/module/ui/allcrops/Crop_404_2.swf"/>
        <asset id="6578" src="$url/module/ui/allcrops/Crop_404_3.swf"/>
        <asset id="6705" src="$url/module/ui/allcrops/Crop_404_Seed.swf"/>
        <asset id="6582" src="$url/module/ui/allcrops/Crop_405_1.swf"/>
        <asset id="6583" src="$url/module/ui/allcrops/Crop_405_2.swf"/>
        <asset id="6584" src="$url/module/ui/allcrops/Crop_405_3.swf"/>
        <asset id="6704" src="$url/module/ui/allcrops/Crop_405_Seed.swf"/>
        <asset id="10333" src="$url/module/ui/allcrops/Crop_406_1.swf"/>
        <asset id="10334" src="$url/module/ui/allcrops/Crop_406_2.swf"/>
        <asset id="10335" src="$url/module/ui/allcrops/Crop_406_3.swf"/>
        <asset id="10332" src="$url/module/ui/allcrops/Crop_406_Seed.swf"/>
        <asset id="11812" src="$url/module/ui/allcrops/Crop_407_0.swf"/>
        <asset id="11813" src="$url/module/ui/allcrops/Crop_407_1.swf"/>
        <asset id="11814" src="$url/module/ui/allcrops/Crop_407_2.swf"/>
        <asset id="11815" src="$url/module/ui/allcrops/Crop_407_3.swf"/>
        <asset id="11816" src="$url/module/ui/allcrops/Crop_407_4.swf"/>
        <asset id="11817" src="$url/module/ui/allcrops/Crop_407_Seed.swf"/>
        <asset id="11806" src="$url/module/ui/allcrops/Crop_408_0.swf"/>
        <asset id="11807" src="$url/module/ui/allcrops/Crop_408_1.swf"/>
        <asset id="11808" src="$url/module/ui/allcrops/Crop_408_2.swf"/>
        <asset id="11809" src="$url/module/ui/allcrops/Crop_408_3.swf"/>
        <asset id="11810" src="$url/module/ui/allcrops/Crop_408_4.swf"/>
        <asset id="11811" src="$url/module/ui/allcrops/Crop_408_Seed.swf"/>
        <asset id="11800" src="$url/module/ui/allcrops/Crop_409_0.swf"/>
        <asset id="11801" src="$url/module/ui/allcrops/Crop_409_1.swf"/>
        <asset id="11802" src="$url/module/ui/allcrops/Crop_409_2.swf"/>
        <asset id="11803" src="$url/module/ui/allcrops/Crop_409_3.swf"/>
        <asset id="11804" src="$url/module/ui/allcrops/Crop_409_4.swf"/>
        <asset id="11805" src="$url/module/ui/allcrops/Crop_409_Seed.swf"/>
        <asset id="5602" src="$url/module/ui/allcrops/Crop_40_1.swf"/>
        <asset id="5603" src="$url/module/ui/allcrops/Crop_40_2.swf"/>
        <asset id="5604" src="$url/module/ui/allcrops/Crop_40_3.swf"/>
        <asset id="2329" src="$url/module/ui/allcrops/Crop_40_Seed.swf"/>
        <asset id="11010" src="$url/module/ui/allcrops/Crop_410_0.swf"/>
        <asset id="11011" src="$url/module/ui/allcrops/Crop_410_1.swf"/>
        <asset id="11012" src="$url/module/ui/allcrops/Crop_410_2.swf"/>
        <asset id="11013" src="$url/module/ui/allcrops/Crop_410_3.swf"/>
        <asset id="11014" src="$url/module/ui/allcrops/Crop_410_4.swf"/>
        <asset id="11015" src="$url/module/ui/allcrops/Crop_410_Seed.swf"/>
        <asset id="11794" src="$url/module/ui/allcrops/Crop_411_0.swf"/>
        <asset id="11795" src="$url/module/ui/allcrops/Crop_411_1.swf"/>
        <asset id="11796" src="$url/module/ui/allcrops/Crop_411_2.swf"/>
        <asset id="11797" src="$url/module/ui/allcrops/Crop_411_3.swf"/>
        <asset id="11798" src="$url/module/ui/allcrops/Crop_411_4.swf"/>
        <asset id="11799" src="$url/module/ui/allcrops/Crop_411_Seed.swf"/>
        <asset id="6464" src="$url/module/ui/allcrops/Crop_41_1.swf"/>
        <asset id="6465" src="$url/module/ui/allcrops/Crop_41_2.swf"/>
        <asset id="6466" src="$url/module/ui/allcrops/Crop_41_3.swf"/>
        <asset id="2331" src="$url/module/ui/allcrops/Crop_41_Seed.swf"/>
        <asset id="7039" src="$url/module/ui/allcrops/Crop_412_1.swf"/>
        <asset id="7040" src="$url/module/ui/allcrops/Crop_412_2.swf"/>
        <asset id="7041" src="$url/module/ui/allcrops/Crop_412_3.swf"/>
        <asset id="7042" src="$url/module/ui/allcrops/Crop_412_Seed.swf"/>
        <asset id="7720" src="$url/module/ui/allcrops/Crop_413_1.swf"/>
        <asset id="7721" src="$url/module/ui/allcrops/Crop_413_2.swf"/>
        <asset id="7722" src="$url/module/ui/allcrops/Crop_413_3.swf"/>
        <asset id="7719" src="$url/module/ui/allcrops/Crop_413_Seed.swf"/>
        <asset id="6996" src="$url/module/ui/allcrops/Crop_415_1.swf"/>
        <asset id="6997" src="$url/module/ui/allcrops/Crop_415_2.swf"/>
        <asset id="6998" src="$url/module/ui/allcrops/Crop_415_3.swf"/>
        <asset id="6995" src="$url/module/ui/allcrops/Crop_415_Seed.swf"/>
        <asset id="7165" src="$url/module/ui/allcrops/Crop_416_1.swf"/>
        <asset id="7162" src="$url/module/ui/allcrops/Crop_416_2.swf"/>
        <asset id="7163" src="$url/module/ui/allcrops/Crop_416_3.swf"/>
        <asset id="7164" src="$url/module/ui/allcrops/Crop_416_Seed.swf"/>
        <asset id="7158" src="$url/module/ui/allcrops/Crop_417_1.swf"/>
        <asset id="7159" src="$url/module/ui/allcrops/Crop_417_2.swf"/>
        <asset id="7160" src="$url/module/ui/allcrops/Crop_417_3.swf"/>
        <asset id="7161" src="$url/module/ui/allcrops/Crop_417_Seed.swf"/>
        <asset id="7167" src="$url/module/ui/allcrops/Crop_418_1.swf"/>
        <asset id="7168" src="$url/module/ui/allcrops/Crop_418_2.swf"/>
        <asset id="7169" src="$url/module/ui/allcrops/Crop_418_3.swf"/>
        <asset id="7166" src="$url/module/ui/allcrops/Crop_418_Seed.swf"/>
        <asset id="7155" src="$url/module/ui/allcrops/Crop_419_1.swf"/>
        <asset id="7156" src="$url/module/ui/allcrops/Crop_419_2.swf"/>
        <asset id="7157" src="$url/module/ui/allcrops/Crop_419_3.swf"/>
        <asset id="7154" src="$url/module/ui/allcrops/Crop_419_Seed.swf"/>
        <asset id="7208" src="$url/module/ui/allcrops/Crop_423_1.swf"/>
        <asset id="7209" src="$url/module/ui/allcrops/Crop_423_2.swf"/>
        <asset id="7210" src="$url/module/ui/allcrops/Crop_423_3.swf"/>
        <asset id="7207" src="$url/module/ui/allcrops/Crop_423_Seed.swf"/>
        <asset id="7212" src="$url/module/ui/allcrops/Crop_424_1.swf"/>
        <asset id="7213" src="$url/module/ui/allcrops/Crop_424_2.swf"/>
        <asset id="7214" src="$url/module/ui/allcrops/Crop_424_3.swf"/>
        <asset id="7211" src="$url/module/ui/allcrops/Crop_424_Seed.swf"/>
        <asset id="7423" src="$url/module/ui/allcrops/Crop_425_1.swf"/>
        <asset id="7424" src="$url/module/ui/allcrops/Crop_425_2.swf"/>
        <asset id="7425" src="$url/module/ui/allcrops/Crop_425_3.swf"/>
        <asset id="7422" src="$url/module/ui/allcrops/Crop_425_Seed.swf"/>
        <asset id="7502" src="$url/module/ui/allcrops/Crop_426_1.swf"/>
        <asset id="7503" src="$url/module/ui/allcrops/Crop_426_2.swf"/>
        <asset id="7504" src="$url/module/ui/allcrops/Crop_426_3.swf"/>
        <asset id="7505" src="$url/module/ui/allcrops/Crop_426_Seed.swf"/>
        <asset id="8043" src="$url/module/ui/allcrops/Crop_427_1.swf"/>
        <asset id="8044" src="$url/module/ui/allcrops/Crop_427_2.swf"/>
        <asset id="8045" src="$url/module/ui/allcrops/Crop_427_3.swf"/>
        <asset id="8046" src="$url/module/ui/allcrops/Crop_427_Seed.swf"/>
        <asset id="11788" src="$url/module/ui/allcrops/Crop_428_0.swf"/>
        <asset id="11789" src="$url/module/ui/allcrops/Crop_428_1.swf"/>
        <asset id="11790" src="$url/module/ui/allcrops/Crop_428_2.swf"/>
        <asset id="11791" src="$url/module/ui/allcrops/Crop_428_3.swf"/>
        <asset id="11792" src="$url/module/ui/allcrops/Crop_428_4.swf"/>
        <asset id="11793" src="$url/module/ui/allcrops/Crop_428_Seed.swf"/>
        <asset id="9786" src="$url/module/ui/allcrops/Crop_429_1.swf"/>
        <asset id="9787" src="$url/module/ui/allcrops/Crop_429_2.swf"/>
        <asset id="9788" src="$url/module/ui/allcrops/Crop_429_3.swf"/>
        <asset id="9785" src="$url/module/ui/allcrops/Crop_429_Seed.swf"/>
        <asset id="5605" src="$url/module/ui/allcrops/Crop_42_1.swf"/>
        <asset id="5606" src="$url/module/ui/allcrops/Crop_42_2.swf"/>
        <asset id="5607" src="$url/module/ui/allcrops/Crop_42_3.swf"/>
        <asset id="2333" src="$url/module/ui/allcrops/Crop_42_Seed.swf"/>
        <asset id="7716" src="$url/module/ui/allcrops/Crop_430_1.swf"/>
        <asset id="7717" src="$url/module/ui/allcrops/Crop_430_2.swf"/>
        <asset id="7718" src="$url/module/ui/allcrops/Crop_430_3.swf"/>
        <asset id="7715" src="$url/module/ui/allcrops/Crop_430_Seed.swf"/>
        <asset id="7835" src="$url/module/ui/allcrops/Crop_431_1.swf"/>
        <asset id="7836" src="$url/module/ui/allcrops/Crop_431_2.swf"/>
        <asset id="7837" src="$url/module/ui/allcrops/Crop_431_3.swf"/>
        <asset id="7834" src="$url/module/ui/allcrops/Crop_431_Seed.swf"/>
        <asset id="7854" src="$url/module/ui/allcrops/Crop_433_1.swf"/>
        <asset id="7855" src="$url/module/ui/allcrops/Crop_433_2.swf"/>
        <asset id="7856" src="$url/module/ui/allcrops/Crop_433_3.swf"/>
        <asset id="7857" src="$url/module/ui/allcrops/Crop_433_Seed.swf"/>
        <asset id="8236" src="$url/module/ui/allcrops/Crop_434_1.swf"/>
        <asset id="8237" src="$url/module/ui/allcrops/Crop_434_2.swf"/>
        <asset id="8238" src="$url/module/ui/allcrops/Crop_434_3.swf"/>
        <asset id="8235" src="$url/module/ui/allcrops/Crop_434_Seed.swf"/>
        <asset id="8377" src="$url/module/ui/allcrops/Crop_435_0.swf"/>
        <asset id="8378" src="$url/module/ui/allcrops/Crop_435_1.swf"/>
        <asset id="8379" src="$url/module/ui/allcrops/Crop_435_2.swf"/>
        <asset id="8380" src="$url/module/ui/allcrops/Crop_435_3.swf"/>
        <asset id="8376" src="$url/module/ui/allcrops/Crop_435_4.swf"/>
        <asset id="8411" src="$url/module/ui/allcrops/Crop_435_Seed.swf"/>
        <asset id="8382" src="$url/module/ui/allcrops/Crop_436_1.swf"/>
        <asset id="8383" src="$url/module/ui/allcrops/Crop_436_2.swf"/>
        <asset id="8384" src="$url/module/ui/allcrops/Crop_436_3.swf"/>
        <asset id="8381" src="$url/module/ui/allcrops/Crop_436_4.swf"/>
        <asset id="8410" src="$url/module/ui/allcrops/Crop_436_Seed.swf"/>
        <asset id="8386" src="$url/module/ui/allcrops/Crop_437_1.swf"/>
        <asset id="8387" src="$url/module/ui/allcrops/Crop_437_2.swf"/>
        <asset id="8388" src="$url/module/ui/allcrops/Crop_437_3.swf"/>
        <asset id="8385" src="$url/module/ui/allcrops/Crop_437_4.swf"/>
        <asset id="8409" src="$url/module/ui/allcrops/Crop_437_Seed.swf"/>
        <asset id="8391" src="$url/module/ui/allcrops/Crop_438_1.swf"/>
        <asset id="8390" src="$url/module/ui/allcrops/Crop_438_2.swf"/>
        <asset id="8389" src="$url/module/ui/allcrops/Crop_438_3.swf"/>
        <asset id="8408" src="$url/module/ui/allcrops/Crop_438_Seed.swf"/>
        <asset id="8498" src="$url/module/ui/allcrops/Crop_439_1.swf"/>
        <asset id="8499" src="$url/module/ui/allcrops/Crop_439_2.swf"/>
        <asset id="8500" src="$url/module/ui/allcrops/Crop_439_3.swf"/>
        <asset id="8497" src="$url/module/ui/allcrops/Crop_439_Seed.swf"/>
        <asset id="5608" src="$url/module/ui/allcrops/Crop_43_1.swf"/>
        <asset id="5609" src="$url/module/ui/allcrops/Crop_43_2.swf"/>
        <asset id="5610" src="$url/module/ui/allcrops/Crop_43_3.swf"/>
        <asset id="4330" src="$url/module/ui/allcrops/Crop_43_Seed.swf"/>
        <asset id="2334" src="$url/module/ui/allcrops/Crop_44.swf"/>
        <asset id="8493" src="$url/module/ui/allcrops/Crop_440_1.swf"/>
        <asset id="8494" src="$url/module/ui/allcrops/Crop_440_2.swf"/>
        <asset id="8495" src="$url/module/ui/allcrops/Crop_440_3.swf"/>
        <asset id="8496" src="$url/module/ui/allcrops/Crop_440_Seed.swf"/>
        <asset id="8490" src="$url/module/ui/allcrops/Crop_441_1.swf"/>
        <asset id="8491" src="$url/module/ui/allcrops/Crop_441_2.swf"/>
        <asset id="8492" src="$url/module/ui/allcrops/Crop_441_3.swf"/>
        <asset id="8489" src="$url/module/ui/allcrops/Crop_441_Seed.swf"/>
        <asset id="8515" src="$url/module/ui/allcrops/Crop_442_1.swf"/>
        <asset id="8516" src="$url/module/ui/allcrops/Crop_442_2.swf"/>
        <asset id="8513" src="$url/module/ui/allcrops/Crop_442_3.swf"/>
        <asset id="8514" src="$url/module/ui/allcrops/Crop_442_Seed.swf"/>
        <asset id="8621" src="$url/module/ui/allcrops/Crop_443_1.swf"/>
        <asset id="8622" src="$url/module/ui/allcrops/Crop_443_2.swf"/>
        <asset id="8623" src="$url/module/ui/allcrops/Crop_443_3.swf"/>
        <asset id="8620" src="$url/module/ui/allcrops/Crop_443_Seed.swf"/>
        <asset id="8787" src="$url/module/ui/allcrops/Crop_444_1.swf"/>
        <asset id="8788" src="$url/module/ui/allcrops/Crop_444_2.swf"/>
        <asset id="8789" src="$url/module/ui/allcrops/Crop_444_3.swf"/>
        <asset id="8786" src="$url/module/ui/allcrops/Crop_444_Seed.swf"/>
        <asset id="8795" src="$url/module/ui/allcrops/Crop_445_1.swf"/>
        <asset id="8796" src="$url/module/ui/allcrops/Crop_445_2.swf"/>
        <asset id="8797" src="$url/module/ui/allcrops/Crop_445_3.swf"/>
        <asset id="8794" src="$url/module/ui/allcrops/Crop_445_Seed.swf"/>
        <asset id="8791" src="$url/module/ui/allcrops/Crop_446_1.swf"/>
        <asset id="8792" src="$url/module/ui/allcrops/Crop_446_2.swf"/>
        <asset id="8793" src="$url/module/ui/allcrops/Crop_446_3.swf"/>
        <asset id="8790" src="$url/module/ui/allcrops/Crop_446_Seed.swf"/>
        <asset id="8840" src="$url/module/ui/allcrops/Crop_447_1.swf"/>
        <asset id="8841" src="$url/module/ui/allcrops/Crop_447_2.swf"/>
        <asset id="8842" src="$url/module/ui/allcrops/Crop_447_3.swf"/>
        <asset id="8839" src="$url/module/ui/allcrops/Crop_447_Seed.swf"/>
        <asset id="8836" src="$url/module/ui/allcrops/Crop_448_1.swf"/>
        <asset id="8837" src="$url/module/ui/allcrops/Crop_448_2.swf"/>
        <asset id="8838" src="$url/module/ui/allcrops/Crop_448_3.swf"/>
        <asset id="8835" src="$url/module/ui/allcrops/Crop_448_Seed.swf"/>
        <asset id="8826" src="$url/module/ui/allcrops/Crop_449_1.swf"/>
        <asset id="8827" src="$url/module/ui/allcrops/Crop_449_2.swf"/>
        <asset id="8828" src="$url/module/ui/allcrops/Crop_449_3.swf"/>
        <asset id="8825" src="$url/module/ui/allcrops/Crop_449_Seed.swf"/>
        <asset id="5611" src="$url/module/ui/allcrops/Crop_44_0.swf"/>
        <asset id="5612" src="$url/module/ui/allcrops/Crop_44_1.swf"/>
        <asset id="5613" src="$url/module/ui/allcrops/Crop_44_2.swf"/>
        <asset id="5614" src="$url/module/ui/allcrops/Crop_44_3.swf"/>
        <asset id="2335" src="$url/module/ui/allcrops/Crop_44_Seed.swf"/>>
        <asset id="8844" src="$url/module/ui/allcrops/Crop_450_1.swf"/>
        <asset id="8845" src="$url/module/ui/allcrops/Crop_450_2.swf"/>
        <asset id="8846" src="$url/module/ui/allcrops/Crop_450_3.swf"/>
        <asset id="8843" src="$url/module/ui/allcrops/Crop_450_Seed.swf"/>
        <asset id="9660" src="$url/module/ui/allcrops/Crop_451_1.swf"/>
        <asset id="9661" src="$url/module/ui/allcrops/Crop_451_2.swf"/>
        <asset id="9662" src="$url/module/ui/allcrops/Crop_451_3.swf"/>
        <asset id="9663" src="$url/module/ui/allcrops/Crop_451_Seed.swf"/>
        <asset id="9665" src="$url/module/ui/allcrops/Crop_452_1.swf"/>
        <asset id="9666" src="$url/module/ui/allcrops/Crop_452_2.swf"/>
        <asset id="9667" src="$url/module/ui/allcrops/Crop_452_3.swf"/>
        <asset id="9664" src="$url/module/ui/allcrops/Crop_452_Seed.swf"/>
        <asset id="9738" src="$url/module/ui/allcrops/Crop_453_1.swf"/>
        <asset id="9739" src="$url/module/ui/allcrops/Crop_453_2.swf"/>
        <asset id="9740" src="$url/module/ui/allcrops/Crop_453_3.swf"/>
        <asset id="9737" src="$url/module/ui/allcrops/Crop_453_Seed.swf"/>
        <asset id="9734" src="$url/module/ui/allcrops/Crop_454_1.swf"/>
        <asset id="9735" src="$url/module/ui/allcrops/Crop_454_2.swf"/>
        <asset id="9736" src="$url/module/ui/allcrops/Crop_454_3.swf"/>
        <asset id="9733" src="$url/module/ui/allcrops/Crop_454_Seed.swf"/>
        <asset id="9730" src="$url/module/ui/allcrops/Crop_455_1.swf"/>
        <asset id="9731" src="$url/module/ui/allcrops/Crop_455_2.swf"/>
        <asset id="9732" src="$url/module/ui/allcrops/Crop_455_3.swf"/>
        <asset id="9729" src="$url/module/ui/allcrops/Crop_455_Seed.swf"/>
        <asset id="10725" src="$url/module/ui/allcrops/Crop_456_1.swf"/>
        <asset id="10726" src="$url/module/ui/allcrops/Crop_456_2.swf"/>
        <asset id="10727" src="$url/module/ui/allcrops/Crop_456_3.swf"/>
        <asset id="10728" src="$url/module/ui/allcrops/Crop_456_Seed.swf"/>
        <asset id="10717" src="$url/module/ui/allcrops/Crop_457_1.swf"/>
        <asset id="10718" src="$url/module/ui/allcrops/Crop_457_2.swf"/>
        <asset id="10719" src="$url/module/ui/allcrops/Crop_457_3.swf"/>
        <asset id="10720" src="$url/module/ui/allcrops/Crop_457_Seed.swf"/>
        <asset id="9774" src="$url/module/ui/allcrops/Crop_458_1.swf"/>
        <asset id="9775" src="$url/module/ui/allcrops/Crop_458_2.swf"/>
        <asset id="9776" src="$url/module/ui/allcrops/Crop_458_3.swf"/>
        <asset id="9773" src="$url/module/ui/allcrops/Crop_458_Seed.swf"/>
        <asset id="12240" src="$url/module/ui/allcrops/Crop_459_0.swf"/>
        <asset id="12241" src="$url/module/ui/allcrops/Crop_459_1.swf"/>
        <asset id="12242" src="$url/module/ui/allcrops/Crop_459_2.swf"/>
        <asset id="12243" src="$url/module/ui/allcrops/Crop_459_3.swf"/>
        <asset id="12244" src="$url/module/ui/allcrops/Crop_459_4.swf"/>
        <asset id="12245" src="$url/module/ui/allcrops/Crop_459_Seed.swf"/>
        <asset id="5615" src="$url/module/ui/allcrops/Crop_45_0.swf"/>
        <asset id="5616" src="$url/module/ui/allcrops/Crop_45_1.swf"/>
        <asset id="5617" src="$url/module/ui/allcrops/Crop_45_2.swf"/>
        <asset id="5618" src="$url/module/ui/allcrops/Crop_45_3.swf"/>
        <asset id="2337" src="$url/module/ui/allcrops/Crop_45_Seed.swf"/>
        <asset id="10163" src="$url/module/ui/allcrops/Crop_460_1.swf"/>
        <asset id="10164" src="$url/module/ui/allcrops/Crop_460_2.swf"/>
        <asset id="10165" src="$url/module/ui/allcrops/Crop_460_3.swf"/>
        <asset id="10162" src="$url/module/ui/allcrops/Crop_460_Seed.swf"/>
        <asset id="10143" src="$url/module/ui/allcrops/Crop_461_1.swf"/>
        <asset id="10144" src="$url/module/ui/allcrops/Crop_461_2.swf"/>
        <asset id="10145" src="$url/module/ui/allcrops/Crop_461_3.swf"/>
        <asset id="10142" src="$url/module/ui/allcrops/Crop_461_Seed.swf"/>
        <asset id="10159" src="$url/module/ui/allcrops/Crop_463_1.swf"/>
        <asset id="10160" src="$url/module/ui/allcrops/Crop_463_2.swf"/>
        <asset id="10161" src="$url/module/ui/allcrops/Crop_463_3.swf"/>
        <asset id="10158" src="$url/module/ui/allcrops/Crop_463_Seed.swf"/>
        <asset id="10155" src="$url/module/ui/allcrops/Crop_465_1.swf"/>
        <asset id="10156" src="$url/module/ui/allcrops/Crop_465_2.swf"/>
        <asset id="10157" src="$url/module/ui/allcrops/Crop_465_3.swf"/>
        <asset id="10154" src="$url/module/ui/allcrops/Crop_465_Seed.swf"/>
        <asset id="10151" src="$url/module/ui/allcrops/Crop_468_1.swf"/>
        <asset id="10152" src="$url/module/ui/allcrops/Crop_468_2.swf"/>
        <asset id="10153" src="$url/module/ui/allcrops/Crop_468_3.swf"/>
        <asset id="10150" src="$url/module/ui/allcrops/Crop_468_Seed.swf"/>
        <asset id="10183" src="$url/module/ui/allcrops/Crop_469_1.swf"/>
        <asset id="10184" src="$url/module/ui/allcrops/Crop_469_2.swf"/>
        <asset id="10185" src="$url/module/ui/allcrops/Crop_469_3.swf"/>
        <asset id="10182" src="$url/module/ui/allcrops/Crop_469_Seed.swf"/>
        <asset id="5619" src="$url/module/ui/allcrops/Crop_46_1.swf"/>
        <asset id="5620" src="$url/module/ui/allcrops/Crop_46_2.swf"/>
        <asset id="5621" src="$url/module/ui/allcrops/Crop_46_3.swf"/>
        <asset id="2339" src="$url/module/ui/allcrops/Crop_46_Seed.swf"/>
        <asset id="10167" src="$url/module/ui/allcrops/Crop_470_1.swf"/>
        <asset id="10168" src="$url/module/ui/allcrops/Crop_470_2.swf"/>
        <asset id="10169" src="$url/module/ui/allcrops/Crop_470_3.swf"/>
        <asset id="10166" src="$url/module/ui/allcrops/Crop_470_Seed.swf"/>
        <asset id="10139" src="$url/module/ui/allcrops/Crop_471_1.swf"/>
        <asset id="10140" src="$url/module/ui/allcrops/Crop_471_2.swf"/>
        <asset id="10141" src="$url/module/ui/allcrops/Crop_471_3.swf"/>
        <asset id="10138" src="$url/module/ui/allcrops/Crop_471_Seed.swf"/>
        <asset id="9855" src="$url/module/ui/allcrops/Crop_472_1.swf"/>
        <asset id="9856" src="$url/module/ui/allcrops/Crop_472_2.swf"/>
        <asset id="9857" src="$url/module/ui/allcrops/Crop_472_3.swf"/>
        <asset id="9854" src="$url/module/ui/allcrops/Crop_472_Seed.swf"/>
        <asset id="5622" src="$url/module/ui/allcrops/Crop_47_0.swf"/>
        <asset id="5623" src="$url/module/ui/allcrops/Crop_47_1.swf"/>
        <asset id="5624" src="$url/module/ui/allcrops/Crop_47_2.swf"/>
        <asset id="5625" src="$url/module/ui/allcrops/Crop_47_3.swf"/>
        <asset id="2341" src="$url/module/ui/allcrops/Crop_47_Seed.swf"/>
        <asset id="5626" src="$url/module/ui/allcrops/Crop_48_1.swf"/>
        <asset id="5627" src="$url/module/ui/allcrops/Crop_48_2.swf"/>
        <asset id="5628" src="$url/module/ui/allcrops/Crop_48_3.swf"/>
        <asset id="2343" src="$url/module/ui/allcrops/Crop_48_Seed.swf"/>
        <asset id="10219" src="$url/module/ui/allcrops/Crop_490_1.swf"/>
        <asset id="10220" src="$url/module/ui/allcrops/Crop_490_2.swf"/>
        <asset id="10221" src="$url/module/ui/allcrops/Crop_490_3.swf"/>
        <asset id="10218" src="$url/module/ui/allcrops/Crop_490_Seed.swf"/>
        <asset id="10215" src="$url/module/ui/allcrops/Crop_491_1.swf"/>
        <asset id="10216" src="$url/module/ui/allcrops/Crop_491_2.swf"/>
        <asset id="10217" src="$url/module/ui/allcrops/Crop_491_3.swf"/>
        <asset id="10214" src="$url/module/ui/allcrops/Crop_491_Seed.swf"/>
        <asset id="5629" src="$url/module/ui/allcrops/Crop_49_1.swf"/>
        <asset id="5630" src="$url/module/ui/allcrops/Crop_49_2.swf"/>
        <asset id="5631" src="$url/module/ui/allcrops/Crop_49_3.swf"/>
        <asset id="2345" src="$url/module/ui/allcrops/Crop_49_Seed.swf"/>
        <asset id="5487" src="$url/module/ui/allcrops/Crop_4_1.swf"/>
        <asset id="5488" src="$url/module/ui/allcrops/Crop_4_2.swf"/>
        <asset id="5489" src="$url/module/ui/allcrops/Crop_4_3.swf"/>
        <asset id="2259" src="$url/module/ui/allcrops/Crop_4_Seed.swf"/>
        <asset id="5632" src="$url/module/ui/allcrops/Crop_50_0.swf"/>
        <asset id="6942" src="$url/module/ui/allcrops/Crop_501_1.swf"/>
        <asset id="6943" src="$url/module/ui/allcrops/Crop_501_2.swf"/>
        <asset id="6944" src="$url/module/ui/allcrops/Crop_501_3.swf"/>
        <asset id="6941" src="$url/module/ui/allcrops/Crop_501_Seed.swf"/>
        <asset id="6964" src="$url/module/ui/allcrops/Crop_502_1.swf"/>
        <asset id="6965" src="$url/module/ui/allcrops/Crop_502_2.swf"/>
        <asset id="6966" src="$url/module/ui/allcrops/Crop_502_3.swf"/>
        <asset id="6963" src="$url/module/ui/allcrops/Crop_502_Seed.swf"/>
        <asset id="6926" src="$url/module/ui/allcrops/Crop_503_1.swf"/>
        <asset id="6927" src="$url/module/ui/allcrops/Crop_503_2.swf"/>
        <asset id="6928" src="$url/module/ui/allcrops/Crop_503_3.swf"/>
        <asset id="6925" src="$url/module/ui/allcrops/Crop_503_Seed.swf"/>
        <asset id="6951" src="$url/module/ui/allcrops/Crop_504_1.swf"/>
        <asset id="6952" src="$url/module/ui/allcrops/Crop_504_2.swf"/>
        <asset id="6953" src="$url/module/ui/allcrops/Crop_504_3.swf"/>
        <asset id="6954" src="$url/module/ui/allcrops/Crop_504_Seed.swf"/>
        <asset id="6947" src="$url/module/ui/allcrops/Crop_505_1.swf"/>
        <asset id="6948" src="$url/module/ui/allcrops/Crop_505_2.swf"/>
        <asset id="6949" src="$url/module/ui/allcrops/Crop_505_3.swf"/>
        <asset id="6950" src="$url/module/ui/allcrops/Crop_505_Seed.swf"/>
        <asset id="5633" src="$url/module/ui/allcrops/Crop_50_1.swf"/>
        <asset id="5634" src="$url/module/ui/allcrops/Crop_50_2.swf"/>
        <asset id="5635" src="$url/module/ui/allcrops/Crop_50_3.swf"/>
        <asset id="5636" src="$url/module/ui/allcrops/Crop_50_4.swf"/>
        <asset id="2347" src="$url/module/ui/allcrops/Crop_50_Seed.swf"/>
        <asset id="7216" src="$url/module/ui/allcrops/Crop_507_1.swf"/>
        <asset id="7217" src="$url/module/ui/allcrops/Crop_507_2.swf"/>
        <asset id="7218" src="$url/module/ui/allcrops/Crop_507_3.swf"/>
        <asset id="7215" src="$url/module/ui/allcrops/Crop_507_Seed.swf"/>
        <asset id="7060" src="$url/module/ui/allcrops/Crop_508_1.swf"/>
        <asset id="7061" src="$url/module/ui/allcrops/Crop_508_2.swf"/>
        <asset id="7062" src="$url/module/ui/allcrops/Crop_508_3.swf"/>
        <asset id="7059" src="$url/module/ui/allcrops/Crop_508_Seed.swf"/>
        <asset id="7224" src="$url/module/ui/allcrops/Crop_509_1.swf"/>
        <asset id="7225" src="$url/module/ui/allcrops/Crop_509_2.swf"/>
        <asset id="7226" src="$url/module/ui/allcrops/Crop_509_3.swf"/>
        <asset id="7223" src="$url/module/ui/allcrops/Crop_509_Seed.swf"/>
        <asset id="5637" src="$url/module/ui/allcrops/Crop_51_1.swf"/>
        <asset id="5638" src="$url/module/ui/allcrops/Crop_51_2.swf"/>
        <asset id="5639" src="$url/module/ui/allcrops/Crop_51_3.swf"/>
        <asset id="2349" src="$url/module/ui/allcrops/Crop_51_Seed.swf"/>
        <asset id="7076" src="$url/module/ui/allcrops/Crop_510_1.swf"/>
        <asset id="7077" src="$url/module/ui/allcrops/Crop_510_2.swf"/>
        <asset id="7078" src="$url/module/ui/allcrops/Crop_510_3.swf"/>
        <asset id="7075" src="$url/module/ui/allcrops/Crop_510_Seed.swf"/>
        <asset id="7072" src="$url/module/ui/allcrops/Crop_511_1.swf"/>
        <asset id="7073" src="$url/module/ui/allcrops/Crop_511_2.swf"/>
        <asset id="7074" src="$url/module/ui/allcrops/Crop_511_3.swf"/>
        <asset id="7071" src="$url/module/ui/allcrops/Crop_511_Seed.swf"/>
        <asset id="7064" src="$url/module/ui/allcrops/Crop_512_1.swf"/>
        <asset id="7065" src="$url/module/ui/allcrops/Crop_512_2.swf"/>
        <asset id="7066" src="$url/module/ui/allcrops/Crop_512_3.swf"/>
        <asset id="7063" src="$url/module/ui/allcrops/Crop_512_Seed.swf"/>
        <asset id="7056" src="$url/module/ui/allcrops/Crop_513_1.swf"/>
        <asset id="7057" src="$url/module/ui/allcrops/Crop_513_2.swf"/>
        <asset id="7058" src="$url/module/ui/allcrops/Crop_513_3.swf"/>
        <asset id="7055" src="$url/module/ui/allcrops/Crop_513_Seed.swf"/>
        <asset id="7220" src="$url/module/ui/allcrops/Crop_514_1.swf"/>
        <asset id="7221" src="$url/module/ui/allcrops/Crop_514_2.swf"/>
        <asset id="7222" src="$url/module/ui/allcrops/Crop_514_3.swf"/>
        <asset id="7219" src="$url/module/ui/allcrops/Crop_514_Seed.swf"/>
        <asset id="7068" src="$url/module/ui/allcrops/Crop_515_1.swf"/>
        <asset id="7069" src="$url/module/ui/allcrops/Crop_515_2.swf"/>
        <asset id="7070" src="$url/module/ui/allcrops/Crop_515_3.swf"/>
        <asset id="7067" src="$url/module/ui/allcrops/Crop_515_Seed.swf"/>
        <asset id="7418" src="$url/module/ui/allcrops/Crop_516_1.swf"/>
        <asset id="7419" src="$url/module/ui/allcrops/Crop_516_2.swf"/>
        <asset id="7420" src="$url/module/ui/allcrops/Crop_516_3.swf"/>
        <asset id="7421" src="$url/module/ui/allcrops/Crop_516_Seed.swf"/>
        <asset id="7413" src="$url/module/ui/allcrops/Crop_517_1.swf"/>
        <asset id="7410" src="$url/module/ui/allcrops/Crop_517_2.swf"/>
        <asset id="7411" src="$url/module/ui/allcrops/Crop_517_3.swf"/>
        <asset id="7412" src="$url/module/ui/allcrops/Crop_517_Seed.swf"/>
        <asset id="7406" src="$url/module/ui/allcrops/Crop_518_1.swf"/>
        <asset id="7407" src="$url/module/ui/allcrops/Crop_518_2.swf"/>
        <asset id="7408" src="$url/module/ui/allcrops/Crop_518_3.swf"/>
        <asset id="7409" src="$url/module/ui/allcrops/Crop_518_Seed.swf"/>
        <asset id="7415" src="$url/module/ui/allcrops/Crop_519_1.swf"/>
        <asset id="7416" src="$url/module/ui/allcrops/Crop_519_2.swf"/>
        <asset id="7417" src="$url/module/ui/allcrops/Crop_519_3.swf"/>
        <asset id="7414" src="$url/module/ui/allcrops/Crop_519_Seed.swf"/>
        <asset id="7475" src="$url/module/ui/allcrops/Crop_520_1.swf"/>
        <asset id="7476" src="$url/module/ui/allcrops/Crop_520_2.swf"/>
        <asset id="7477" src="$url/module/ui/allcrops/Crop_520_3.swf"/>
        <asset id="7474" src="$url/module/ui/allcrops/Crop_520_Seed.swf"/>
        <asset id="7479" src="$url/module/ui/allcrops/Crop_521_1.swf"/>
        <asset id="7480" src="$url/module/ui/allcrops/Crop_521_2.swf"/>
        <asset id="7481" src="$url/module/ui/allcrops/Crop_521_3.swf"/>
        <asset id="7478" src="$url/module/ui/allcrops/Crop_521_Seed.swf"/>
        <asset id="7466" src="$url/module/ui/allcrops/Crop_522_1.swf"/>
        <asset id="7467" src="$url/module/ui/allcrops/Crop_522_2.swf"/>
        <asset id="7468" src="$url/module/ui/allcrops/Crop_522_3.swf"/>
        <asset id="7469" src="$url/module/ui/allcrops/Crop_522_Seed.swf"/>
        <asset id="7470" src="$url/module/ui/allcrops/Crop_523_1.swf"/>
        <asset id="7471" src="$url/module/ui/allcrops/Crop_523_2.swf"/>
        <asset id="7472" src="$url/module/ui/allcrops/Crop_523_3.swf"/>
        <asset id="7473" src="$url/module/ui/allcrops/Crop_523_Seed.swf"/>
        <asset id="7487" src="$url/module/ui/allcrops/Crop_524_1.swf"/>
        <asset id="7488" src="$url/module/ui/allcrops/Crop_524_2.swf"/>
        <asset id="7489" src="$url/module/ui/allcrops/Crop_524_3.swf"/>
        <asset id="7486" src="$url/module/ui/allcrops/Crop_524_Seed.swf"/>
        <asset id="7495" src="$url/module/ui/allcrops/Crop_525_1.swf"/>
        <asset id="7496" src="$url/module/ui/allcrops/Crop_525_2.swf"/>
        <asset id="7497" src="$url/module/ui/allcrops/Crop_525_3.swf"/>
        <asset id="7494" src="$url/module/ui/allcrops/Crop_525_Seed.swf"/>
        <asset id="7499" src="$url/module/ui/allcrops/Crop_526_1.swf"/>
        <asset id="7500" src="$url/module/ui/allcrops/Crop_526_2.swf"/>
        <asset id="7501" src="$url/module/ui/allcrops/Crop_526_3.swf"/>
        <asset id="7498" src="$url/module/ui/allcrops/Crop_526_Seed.swf"/>
        <asset id="7491" src="$url/module/ui/allcrops/Crop_527_1.swf"/>
        <asset id="7492" src="$url/module/ui/allcrops/Crop_527_2.swf"/>
        <asset id="7493" src="$url/module/ui/allcrops/Crop_527_3.swf"/>
        <asset id="7490" src="$url/module/ui/allcrops/Crop_527_Seed.swf"/>
        <asset id="7839" src="$url/module/ui/allcrops/Crop_528_1.swf"/>
        <asset id="7840" src="$url/module/ui/allcrops/Crop_528_2.swf"/>
        <asset id="7841" src="$url/module/ui/allcrops/Crop_528_3.swf"/>
        <asset id="7838" src="$url/module/ui/allcrops/Crop_528_Seed.swf"/>
        <asset id="7846" src="$url/module/ui/allcrops/Crop_529_1.swf"/>
        <asset id="7847" src="$url/module/ui/allcrops/Crop_529_2.swf"/>
        <asset id="7848" src="$url/module/ui/allcrops/Crop_529_3.swf"/>
        <asset id="7849" src="$url/module/ui/allcrops/Crop_529_Seed.swf"/>
        <asset id="5640" src="$url/module/ui/allcrops/Crop_52_0.swf"/>
        <asset id="5641" src="$url/module/ui/allcrops/Crop_52_1.swf"/>
        <asset id="5642" src="$url/module/ui/allcrops/Crop_52_2.swf"/>
        <asset id="5643" src="$url/module/ui/allcrops/Crop_52_3.swf"/>
        <asset id="5644" src="$url/module/ui/allcrops/Crop_52_4.swf"/>
        <asset id="2351" src="$url/module/ui/allcrops/Crop_52_Seed.swf"/>
        <asset id="7851" src="$url/module/ui/allcrops/Crop_530_1.swf"/>
        <asset id="7852" src="$url/module/ui/allcrops/Crop_530_2.swf"/>
        <asset id="7853" src="$url/module/ui/allcrops/Crop_530_3.swf"/>
        <asset id="7850" src="$url/module/ui/allcrops/Crop_530_Seed.swf"/>
        <asset id="8510" src="$url/module/ui/allcrops/Crop_533_1.swf"/>
        <asset id="8511" src="$url/module/ui/allcrops/Crop_533_2.swf"/>
        <asset id="8512" src="$url/module/ui/allcrops/Crop_533_3.swf"/>
        <asset id="8509" src="$url/module/ui/allcrops/Crop_533_Seed.swf"/>
        <asset id="8501" src="$url/module/ui/allcrops/Crop_534_1.swf"/>
        <asset id="8502" src="$url/module/ui/allcrops/Crop_534_2.swf"/>
        <asset id="8503" src="$url/module/ui/allcrops/Crop_534_3.swf"/>
        <asset id="8504" src="$url/module/ui/allcrops/Crop_534_Seed.swf"/>
        <asset id="8506" src="$url/module/ui/allcrops/Crop_535_1.swf"/>
        <asset id="8507" src="$url/module/ui/allcrops/Crop_535_2.swf"/>
        <asset id="8508" src="$url/module/ui/allcrops/Crop_535_3.swf"/>
        <asset id="8505" src="$url/module/ui/allcrops/Crop_535_Seed.swf"/>
        <asset id="12632" src="$url/module/ui/allcrops/Crop_536_0.swf"/>
        <asset id="12633" src="$url/module/ui/allcrops/Crop_536_1.swf"/>
        <asset id="12634" src="$url/module/ui/allcrops/Crop_536_2.swf"/>
        <asset id="12635" src="$url/module/ui/allcrops/Crop_536_3.swf"/>
        <asset id="12636" src="$url/module/ui/allcrops/Crop_536_4.swf"/>
        <asset id="12637" src="$url/module/ui/allcrops/Crop_536_Seed.swf"/>
        <asset id="12662" src="$url/module/ui/allcrops/Crop_538_0.swf"/>
        <asset id="12663" src="$url/module/ui/allcrops/Crop_538_1.swf"/>
        <asset id="12664" src="$url/module/ui/allcrops/Crop_538_2.swf"/>
        <asset id="12665" src="$url/module/ui/allcrops/Crop_538_3.swf"/>
        <asset id="12666" src="$url/module/ui/allcrops/Crop_538_4.swf"/>
        <asset id="12667" src="$url/module/ui/allcrops/Crop_538_Seed.swf"/>
        <asset id="12644" src="$url/module/ui/allcrops/Crop_539_0.swf"/>
        <asset id="12645" src="$url/module/ui/allcrops/Crop_539_1.swf"/>
        <asset id="12646" src="$url/module/ui/allcrops/Crop_539_2.swf"/>
        <asset id="12647" src="$url/module/ui/allcrops/Crop_539_3.swf"/>
        <asset id="12648" src="$url/module/ui/allcrops/Crop_539_4.swf"/>
        <asset id="12649" src="$url/module/ui/allcrops/Crop_539_Seed.swf"/>
        <asset id="5645" src="$url/module/ui/allcrops/Crop_53_0.swf"/>
        <asset id="5646" src="$url/module/ui/allcrops/Crop_53_1.swf"/>
        <asset id="5647" src="$url/module/ui/allcrops/Crop_53_2.swf"/>
        <asset id="5648" src="$url/module/ui/allcrops/Crop_53_3.swf"/>
        <asset id="2353" src="$url/module/ui/allcrops/Crop_53_Seed.swf"/>
        <asset id="12656" src="$url/module/ui/allcrops/Crop_542_0.swf"/>
        <asset id="12657" src="$url/module/ui/allcrops/Crop_542_1.swf"/>
        <asset id="12658" src="$url/module/ui/allcrops/Crop_542_2.swf"/>
        <asset id="12659" src="$url/module/ui/allcrops/Crop_542_3.swf"/>
        <asset id="12660" src="$url/module/ui/allcrops/Crop_542_4.swf"/>
        <asset id="12661" src="$url/module/ui/allcrops/Crop_542_Seed.swf"/>
        <asset id="12650" src="$url/module/ui/allcrops/Crop_543_0.swf"/>
        <asset id="12651" src="$url/module/ui/allcrops/Crop_543_1.swf"/>
        <asset id="12652" src="$url/module/ui/allcrops/Crop_543_2.swf"/>
        <asset id="12653" src="$url/module/ui/allcrops/Crop_543_3.swf"/>
        <asset id="12654" src="$url/module/ui/allcrops/Crop_543_4.swf"/>
        <asset id="12655" src="$url/module/ui/allcrops/Crop_543_Seed.swf"/>
        <asset id="12638" src="$url/module/ui/allcrops/Crop_545_0.swf"/>
        <asset id="12639" src="$url/module/ui/allcrops/Crop_545_1.swf"/>
        <asset id="12640" src="$url/module/ui/allcrops/Crop_545_2.swf"/>
        <asset id="12641" src="$url/module/ui/allcrops/Crop_545_3.swf"/>
        <asset id="12642" src="$url/module/ui/allcrops/Crop_545_4.swf"/>
        <asset id="12643" src="$url/module/ui/allcrops/Crop_545_Seed.swf"/>
        <asset id="5649" src="$url/module/ui/allcrops/Crop_54_0.swf"/>
        <asset id="5650" src="$url/module/ui/allcrops/Crop_54_1.swf"/>
        <asset id="5651" src="$url/module/ui/allcrops/Crop_54_2.swf"/>
        <asset id="5652" src="$url/module/ui/allcrops/Crop_54_3.swf"/>
        <asset id="2355" src="$url/module/ui/allcrops/Crop_54_Seed.swf"/>
        <asset id="8240" src="$url/module/ui/allcrops/Crop_557_1.swf"/>
        <asset id="8241" src="$url/module/ui/allcrops/Crop_557_2.swf"/>
        <asset id="8242" src="$url/module/ui/allcrops/Crop_557_3.swf"/>
        <asset id="8239" src="$url/module/ui/allcrops/Crop_557_Seed.swf"/>
        <asset id="8244" src="$url/module/ui/allcrops/Crop_558_1.swf"/>
        <asset id="8245" src="$url/module/ui/allcrops/Crop_558_2.swf"/>
        <asset id="8246" src="$url/module/ui/allcrops/Crop_558_3.swf"/>
        <asset id="8243" src="$url/module/ui/allcrops/Crop_558_Seed.swf"/>
        <asset id="8248" src="$url/module/ui/allcrops/Crop_559_1.swf"/>
        <asset id="8249" src="$url/module/ui/allcrops/Crop_559_2.swf"/>
        <asset id="8250" src="$url/module/ui/allcrops/Crop_559_3.swf"/>
        <asset id="8247" src="$url/module/ui/allcrops/Crop_559_Seed.swf"/>
        <asset id="5653" src="$url/module/ui/allcrops/Crop_55_1.swf"/>
        <asset id="5654" src="$url/module/ui/allcrops/Crop_55_2.swf"/>
        <asset id="5655" src="$url/module/ui/allcrops/Crop_55_3.swf"/>
        <asset id="2357" src="$url/module/ui/allcrops/Crop_55_Seed.swf"/>
        <asset id="8252" src="$url/module/ui/allcrops/Crop_560_1.swf"/>
        <asset id="8253" src="$url/module/ui/allcrops/Crop_560_2.swf"/>
        <asset id="8282" src="$url/module/ui/allcrops/Crop_560_3.swf"/>
        <asset id="8251" src="$url/module/ui/allcrops/Crop_560_Seed.swf"/>
        <asset id="8255" src="$url/module/ui/allcrops/Crop_561_1.swf"/>
        <asset id="8256" src="$url/module/ui/allcrops/Crop_561_2.swf"/>
        <asset id="8257" src="$url/module/ui/allcrops/Crop_561_3.swf"/>
        <asset id="8254" src="$url/module/ui/allcrops/Crop_561_Seed.swf"/>
        <asset id="8259" src="$url/module/ui/allcrops/Crop_562_1.swf"/>
        <asset id="8260" src="$url/module/ui/allcrops/Crop_562_2.swf"/>
        <asset id="8261" src="$url/module/ui/allcrops/Crop_562_3.swf"/>
        <asset id="8262" src="$url/module/ui/allcrops/Crop_562_4.swf"/>
        <asset id="8258" src="$url/module/ui/allcrops/Crop_562_Seed.swf"/>
        <asset id="8263" src="$url/module/ui/allcrops/Crop_563_1.swf"/>
        <asset id="8264" src="$url/module/ui/allcrops/Crop_563_2.swf"/>
        <asset id="8265" src="$url/module/ui/allcrops/Crop_563_3.swf"/>
        <asset id="8266" src="$url/module/ui/allcrops/Crop_563_Seed.swf"/>
        <asset id="8050" src="$url/module/ui/allcrops/Crop_564_1.swf"/>
        <asset id="8049" src="$url/module/ui/allcrops/Crop_564_2.swf"/>
        <asset id="8048" src="$url/module/ui/allcrops/Crop_564_3.swf"/>
        <asset id="8047" src="$url/module/ui/allcrops/Crop_564_Seed.swf"/>
        <asset id="8054" src="$url/module/ui/allcrops/Crop_565_1.swf"/>
        <asset id="8053" src="$url/module/ui/allcrops/Crop_565_2.swf"/>
        <asset id="8052" src="$url/module/ui/allcrops/Crop_565_3.swf"/>
        <asset id="8051" src="$url/module/ui/allcrops/Crop_565_Seed.swf"/>
        <asset id="8058" src="$url/module/ui/allcrops/Crop_566_1.swf"/>
        <asset id="8057" src="$url/module/ui/allcrops/Crop_566_2.swf"/>
        <asset id="8056" src="$url/module/ui/allcrops/Crop_566_3.swf"/>
        <asset id="8055" src="$url/module/ui/allcrops/Crop_566_Seed.swf"/>
        <asset id="8059" src="$url/module/ui/allcrops/Crop_567_1.swf"/>
        <asset id="8061" src="$url/module/ui/allcrops/Crop_567_2.swf"/>
        <asset id="8181" src="$url/module/ui/allcrops/Crop_567_3.swf"/>
        <asset id="8060" src="$url/module/ui/allcrops/Crop_567_Seed.swf"/>
        <asset id="8062" src="$url/module/ui/allcrops/Crop_568_1.swf"/>
        <asset id="8065" src="$url/module/ui/allcrops/Crop_568_2.swf"/>
        <asset id="8064" src="$url/module/ui/allcrops/Crop_568_3.swf"/>
        <asset id="8063" src="$url/module/ui/allcrops/Crop_568_Seed.swf"/>
        <asset id="8066" src="$url/module/ui/allcrops/Crop_569_1.swf"/>
        <asset id="8069" src="$url/module/ui/allcrops/Crop_569_2.swf"/>
        <asset id="8068" src="$url/module/ui/allcrops/Crop_569_3.swf"/>
        <asset id="8067" src="$url/module/ui/allcrops/Crop_569_Seed.swf"/>
        <asset id="5656" src="$url/module/ui/allcrops/Crop_56_1.swf"/>
        <asset id="5657" src="$url/module/ui/allcrops/Crop_56_2.swf"/>
        <asset id="5658" src="$url/module/ui/allcrops/Crop_56_3.swf"/>
        <asset id="2359" src="$url/module/ui/allcrops/Crop_56_Seed.swf"/>
        <asset id="8072" src="$url/module/ui/allcrops/Crop_570_1.swf"/>
        <asset id="8071" src="$url/module/ui/allcrops/Crop_570_2.swf"/>
		<asset id="8180" src="$url/module/ui/allcrops/Crop_570_3.swf"/>
        <asset id="8070" src="$url/module/ui/allcrops/Crop_570_Seed.swf"/>
        <asset id="8073" src="$url/module/ui/allcrops/Crop_571_1.swf"/>
        <asset id="8076" src="$url/module/ui/allcrops/Crop_571_2.swf"/>
        <asset id="8075" src="$url/module/ui/allcrops/Crop_571_3.swf"/>
        <asset id="8074" src="$url/module/ui/allcrops/Crop_571_Seed.swf"/>
        <asset id="8077" src="$url/module/ui/allcrops/Crop_572_1.swf"/>
        <asset id="8079" src="$url/module/ui/allcrops/Crop_572_2.swf"/>
		<asset id="8182" src="$url/module/ui/allcrops/Crop_572_3.swf"/>
        <asset id="8078" src="$url/module/ui/allcrops/Crop_572_Seed.swf"/>
        <asset id="8080" src="$url/module/ui/allcrops/Crop_573_1.swf"/>
        <asset id="8083" src="$url/module/ui/allcrops/Crop_573_2.swf"/>
        <asset id="8082" src="$url/module/ui/allcrops/Crop_573_3.swf"/>
        <asset id="8081" src="$url/module/ui/allcrops/Crop_573_Seed.swf"/>
        <asset id="8084" src="$url/module/ui/allcrops/Crop_574_1.swf"/>
        <asset id="8087" src="$url/module/ui/allcrops/Crop_574_2.swf"/>
        <asset id="8086" src="$url/module/ui/allcrops/Crop_574_3.swf"/>
        <asset id="8085" src="$url/module/ui/allcrops/Crop_574_Seed.swf"/>
        <asset id="8088" src="$url/module/ui/allcrops/Crop_575_1.swf"/>
        <asset id="8091" src="$url/module/ui/allcrops/Crop_575_2.swf"/>
        <asset id="8090" src="$url/module/ui/allcrops/Crop_575_3.swf"/>
        <asset id="8089" src="$url/module/ui/allcrops/Crop_575_Seed.swf"/>
        <asset id="8095" src="$url/module/ui/allcrops/Crop_576_1.swf"/>
        <asset id="8094" src="$url/module/ui/allcrops/Crop_576_2.swf"/>
        <asset id="8093" src="$url/module/ui/allcrops/Crop_576_3.swf"/>
        <asset id="8092" src="$url/module/ui/allcrops/Crop_576_Seed.swf"/>
        <asset id="8096" src="$url/module/ui/allcrops/Crop_577_1.swf"/>
        <asset id="8099" src="$url/module/ui/allcrops/Crop_577_2.swf"/>
		<asset id="8098" src="$url/module/ui/allcrops/Crop_577_3.swf"/>
        <asset id="8097" src="$url/module/ui/allcrops/Crop_577_Seed.swf"/>
        <asset id="8100" src="$url/module/ui/allcrops/Crop_578_1.swf"/>
        <asset id="8103" src="$url/module/ui/allcrops/Crop_578_2.swf"/>
        <asset id="8102" src="$url/module/ui/allcrops/Crop_578_3.swf"/>
        <asset id="8101" src="$url/module/ui/allcrops/Crop_578_Seed.swf"/>
        <asset id="8112" src="$url/module/ui/allcrops/Crop_579_1.swf"/>
        <asset id="8115" src="$url/module/ui/allcrops/Crop_579_2.swf"/>
        <asset id="8114" src="$url/module/ui/allcrops/Crop_579_3.swf"/>
        <asset id="8113" src="$url/module/ui/allcrops/Crop_579_Seed.swf"/>
        <asset id="5659" src="$url/module/ui/allcrops/Crop_57_0.swf"/>
        <asset id="5660" src="$url/module/ui/allcrops/Crop_57_1.swf"/>
        <asset id="5661" src="$url/module/ui/allcrops/Crop_57_2.swf"/>
        <asset id="5662" src="$url/module/ui/allcrops/Crop_57_3.swf"/>
        <asset id="2361" src="$url/module/ui/allcrops/Crop_57_Seed.swf"/>
        <asset id="8104" src="$url/module/ui/allcrops/Crop_580_1.swf"/>
        <asset id="8107" src="$url/module/ui/allcrops/Crop_580_2.swf"/>
        <asset id="8106" src="$url/module/ui/allcrops/Crop_580_3.swf"/>
        <asset id="8105" src="$url/module/ui/allcrops/Crop_580_Seed.swf"/>
        <asset id="8108" src="$url/module/ui/allcrops/Crop_581_1.swf"/>
        <asset id="8111" src="$url/module/ui/allcrops/Crop_581_2.swf"/>
        <asset id="8110" src="$url/module/ui/allcrops/Crop_581_3.swf"/>
        <asset id="8109" src="$url/module/ui/allcrops/Crop_581_Seed.swf"/>
        <asset id="11782" src="$url/module/ui/allcrops/Crop_582_0.swf"/>
        <asset id="11783" src="$url/module/ui/allcrops/Crop_582_1.swf"/>
        <asset id="11784" src="$url/module/ui/allcrops/Crop_582_2.swf"/>
        <asset id="11785" src="$url/module/ui/allcrops/Crop_582_3.swf"/>
        <asset id="11786" src="$url/module/ui/allcrops/Crop_582_4.swf"/>
        <asset id="11787" src="$url/module/ui/allcrops/Crop_582_Seed.swf"/>
        <asset id="8748" src="$url/module/ui/allcrops/Crop_583_1.swf"/>
        <asset id="8749" src="$url/module/ui/allcrops/Crop_583_2.swf"/>
        <asset id="8750" src="$url/module/ui/allcrops/Crop_583_3.swf"/>
        <asset id="8747" src="$url/module/ui/allcrops/Crop_583_Seed.swf"/>
        <asset id="8832" src="$url/module/ui/allcrops/Crop_584_1.swf"/>
        <asset id="8833" src="$url/module/ui/allcrops/Crop_584_2.swf"/>
        <asset id="8834" src="$url/module/ui/allcrops/Crop_584_3.swf"/>
        <asset id="8831" src="$url/module/ui/allcrops/Crop_584_Seed.swf"/>
        <asset id="10356" src="$url/module/ui/allcrops/Crop_585_1.swf"/>
        <asset id="10357" src="$url/module/ui/allcrops/Crop_585_2.swf"/>
        <asset id="10358" src="$url/module/ui/allcrops/Crop_585_3.swf"/>
        <asset id="10359" src="$url/module/ui/allcrops/Crop_585_Seed.swf"/>
        <asset id="10360" src="$url/module/ui/allcrops/Crop_586_1.swf"/>
        <asset id="10361" src="$url/module/ui/allcrops/Crop_586_2.swf"/>
        <asset id="10362" src="$url/module/ui/allcrops/Crop_586_3.swf"/>
        <asset id="10363" src="$url/module/ui/allcrops/Crop_586_Seed.swf"/>
        <asset id="5663" src="$url/module/ui/allcrops/Crop_58_1.swf"/>
        <asset id="5664" src="$url/module/ui/allcrops/Crop_58_2.swf"/>
        <asset id="5665" src="$url/module/ui/allcrops/Crop_58_3.swf"/>
        <asset id="2363" src="$url/module/ui/allcrops/Crop_58_Seed.swf"/>
        <asset id="5666" src="$url/module/ui/allcrops/Crop_59_1.swf"/>
        <asset id="5667" src="$url/module/ui/allcrops/Crop_59_2.swf"/>
        <asset id="5668" src="$url/module/ui/allcrops/Crop_59_3.swf"/>
        <asset id="2365" src="$url/module/ui/allcrops/Crop_59_Seed.swf"/>
        <asset id="5490" src="$url/module/ui/allcrops/Crop_5_1.swf"/>
        <asset id="5491" src="$url/module/ui/allcrops/Crop_5_2.swf"/>
        <asset id="5492" src="$url/module/ui/allcrops/Crop_5_3.swf"/>
        <asset id="2261" src="$url/module/ui/allcrops/Crop_5_Seed.swf"/>
        <asset id="10227" src="$url/module/ui/allcrops/Crop_600_1.swf"/>
        <asset id="10228" src="$url/module/ui/allcrops/Crop_600_2.swf"/>
        <asset id="10229" src="$url/module/ui/allcrops/Crop_600_3.swf"/>
        <asset id="10226" src="$url/module/ui/allcrops/Crop_600_Seed.swf"/>
        <asset id="10171" src="$url/module/ui/allcrops/Crop_601_1.swf"/>
        <asset id="10172" src="$url/module/ui/allcrops/Crop_601_2.swf"/>
        <asset id="10173" src="$url/module/ui/allcrops/Crop_601_3.swf"/>
        <asset id="10170" src="$url/module/ui/allcrops/Crop_601_Seed.swf"/>
        <asset id="10179" src="$url/module/ui/allcrops/Crop_602_1.swf"/>
        <asset id="10180" src="$url/module/ui/allcrops/Crop_602_2.swf"/>
        <asset id="10181" src="$url/module/ui/allcrops/Crop_602_3.swf"/>
        <asset id="10178" src="$url/module/ui/allcrops/Crop_602_Seed.swf"/>
        <asset id="10590" src="$url/module/ui/allcrops/Crop_603_1.swf"/>
        <asset id="10591" src="$url/module/ui/allcrops/Crop_603_2.swf"/>
        <asset id="10592" src="$url/module/ui/allcrops/Crop_603_3.swf"/>
        <asset id="10593" src="$url/module/ui/allcrops/Crop_603_Seed.swf"/>
        <asset id="10346" src="$url/module/ui/allcrops/Crop_604_1.swf"/>
        <asset id="10347" src="$url/module/ui/allcrops/Crop_604_2.swf"/>
        <asset id="10348" src="$url/module/ui/allcrops/Crop_604_3.swf"/>
        <asset id="10349" src="$url/module/ui/allcrops/Crop_604_Seed.swf"/>
        <asset id="10379" src="$url/module/ui/allcrops/Crop_605_1.swf"/>
        <asset id="10380" src="$url/module/ui/allcrops/Crop_605_2.swf"/>
        <asset id="10381" src="$url/module/ui/allcrops/Crop_605_3.swf"/>
        <asset id="10382" src="$url/module/ui/allcrops/Crop_605_Seed.swf"/>
        <asset id="10383" src="$url/module/ui/allcrops/Crop_606_1.swf"/>
        <asset id="10384" src="$url/module/ui/allcrops/Crop_606_2.swf"/>
        <asset id="10385" src="$url/module/ui/allcrops/Crop_606_3.swf"/>
        <asset id="10386" src="$url/module/ui/allcrops/Crop_606_Seed.swf"/>
        <asset id="10387" src="$url/module/ui/allcrops/Crop_607_1.swf"/>
        <asset id="10388" src="$url/module/ui/allcrops/Crop_607_2.swf"/>
        <asset id="10389" src="$url/module/ui/allcrops/Crop_607_3.swf"/>
        <asset id="10390" src="$url/module/ui/allcrops/Crop_607_Seed.swf"/>
        <asset id="10391" src="$url/module/ui/allcrops/Crop_608_1.swf"/>
        <asset id="10392" src="$url/module/ui/allcrops/Crop_608_2.swf"/>
        <asset id="10393" src="$url/module/ui/allcrops/Crop_608_3.swf"/>
        <asset id="10394" src="$url/module/ui/allcrops/Crop_608_Seed.swf"/>
        <asset id="10371" src="$url/module/ui/allcrops/Crop_609_1.swf"/>
        <asset id="10372" src="$url/module/ui/allcrops/Crop_609_2.swf"/>
        <asset id="10373" src="$url/module/ui/allcrops/Crop_609_3.swf"/>
        <asset id="10374" src="$url/module/ui/allcrops/Crop_609_Seed.swf"/>
        <asset id="5669" src="$url/module/ui/allcrops/Crop_60_1.swf"/>
        <asset id="5670" src="$url/module/ui/allcrops/Crop_60_2.swf"/>
        <asset id="5671" src="$url/module/ui/allcrops/Crop_60_3.swf"/>
        <asset id="2367" src="$url/module/ui/allcrops/Crop_60_Seed.swf"/>
        <asset id="10375" src="$url/module/ui/allcrops/Crop_610_1.swf"/>
        <asset id="10376" src="$url/module/ui/allcrops/Crop_610_2.swf"/>
        <asset id="10377" src="$url/module/ui/allcrops/Crop_610_3.swf"/>
        <asset id="10378" src="$url/module/ui/allcrops/Crop_610_Seed.swf"/>
        <asset id="10627" src="$url/module/ui/allcrops/Crop_611_1.swf"/>
        <asset id="10628" src="$url/module/ui/allcrops/Crop_611_2.swf"/>
        <asset id="10629" src="$url/module/ui/allcrops/Crop_611_3.swf"/>
        <asset id="10630" src="$url/module/ui/allcrops/Crop_611_Seed.swf"/>
        <asset id="10649" src="$url/module/ui/allcrops/Crop_612_0.swf"/>
        <asset id="10650" src="$url/module/ui/allcrops/Crop_612_1.swf"/>
        <asset id="10651" src="$url/module/ui/allcrops/Crop_612_2.swf"/>
        <asset id="10652" src="$url/module/ui/allcrops/Crop_612_3.swf"/>
        <asset id="10653" src="$url/module/ui/allcrops/Crop_612_4.swf"/>
        <asset id="10654" src="$url/module/ui/allcrops/Crop_612_Seed.swf"/>
        <asset id="10655" src="$url/module/ui/allcrops/Crop_613_0.swf"/>
        <asset id="10656" src="$url/module/ui/allcrops/Crop_613_1.swf"/>
        <asset id="10657" src="$url/module/ui/allcrops/Crop_613_2.swf"/>
        <asset id="10658" src="$url/module/ui/allcrops/Crop_613_3.swf"/>
        <asset id="10659" src="$url/module/ui/allcrops/Crop_613_4.swf"/>
        <asset id="10660" src="$url/module/ui/allcrops/Crop_613_Seed.swf"/>
        <asset id="10643" src="$url/module/ui/allcrops/Crop_614_0.swf"/>
        <asset id="10644" src="$url/module/ui/allcrops/Crop_614_1.swf"/>
        <asset id="10645" src="$url/module/ui/allcrops/Crop_614_2.swf"/>
        <asset id="10646" src="$url/module/ui/allcrops/Crop_614_3.swf"/>
        <asset id="10647" src="$url/module/ui/allcrops/Crop_614_4.swf"/>
        <asset id="10648" src="$url/module/ui/allcrops/Crop_614_Seed.swf"/>
        <asset id="10667" src="$url/module/ui/allcrops/Crop_615_0.swf"/>
        <asset id="10668" src="$url/module/ui/allcrops/Crop_615_1.swf"/>
        <asset id="10669" src="$url/module/ui/allcrops/Crop_615_2.swf"/>
        <asset id="10670" src="$url/module/ui/allcrops/Crop_615_3.swf"/>
        <asset id="10671" src="$url/module/ui/allcrops/Crop_615_4.swf"/>
        <asset id="10672" src="$url/module/ui/allcrops/Crop_615_Seed.swf"/>
        <asset id="10637" src="$url/module/ui/allcrops/Crop_616_0.swf"/>
        <asset id="10638" src="$url/module/ui/allcrops/Crop_616_1.swf"/>
        <asset id="10639" src="$url/module/ui/allcrops/Crop_616_2.swf"/>
        <asset id="10640" src="$url/module/ui/allcrops/Crop_616_3.swf"/>
        <asset id="10641" src="$url/module/ui/allcrops/Crop_616_4.swf"/>
        <asset id="10642" src="$url/module/ui/allcrops/Crop_616_Seed.swf"/>
        <asset id="10621" src="$url/module/ui/allcrops/Crop_617_0.swf"/>
        <asset id="10622" src="$url/module/ui/allcrops/Crop_617_1.swf"/>
        <asset id="10623" src="$url/module/ui/allcrops/Crop_617_2.swf"/>
        <asset id="10624" src="$url/module/ui/allcrops/Crop_617_3.swf"/>
        <asset id="10625" src="$url/module/ui/allcrops/Crop_617_4.swf"/>
        <asset id="10626" src="$url/module/ui/allcrops/Crop_617_Seed.swf"/>
        <asset id="10661" src="$url/module/ui/allcrops/Crop_618_0.swf"/>
        <asset id="10662" src="$url/module/ui/allcrops/Crop_618_1.swf"/>
        <asset id="10663" src="$url/module/ui/allcrops/Crop_618_2.swf"/>
        <asset id="10664" src="$url/module/ui/allcrops/Crop_618_3.swf"/>
        <asset id="10665" src="$url/module/ui/allcrops/Crop_618_4.swf"/>
        <asset id="10666" src="$url/module/ui/allcrops/Crop_618_Seed.swf"/>
        <asset id="10707" src="$url/module/ui/allcrops/Crop_619_1.swf"/>
        <asset id="10708" src="$url/module/ui/allcrops/Crop_619_2.swf"/>
        <asset id="10709" src="$url/module/ui/allcrops/Crop_619_3.swf"/>
        <asset id="10710" src="$url/module/ui/allcrops/Crop_619_Seed.swf"/>
        <asset id="5672" src="$url/module/ui/allcrops/Crop_61_1.swf"/>
        <asset id="5673" src="$url/module/ui/allcrops/Crop_61_2.swf"/>
        <asset id="5674" src="$url/module/ui/allcrops/Crop_61_3.swf"/>
        <asset id="2369" src="$url/module/ui/allcrops/Crop_61_Seed.swf"/>
        <asset id="10973" src="$url/module/ui/allcrops/Crop_620_1.swf"/>
        <asset id="10974" src="$url/module/ui/allcrops/Crop_620_2.swf"/>
        <asset id="10975" src="$url/module/ui/allcrops/Crop_620_3.swf"/>
        <asset id="10976" src="$url/module/ui/allcrops/Crop_620_4.swf"/>
        <asset id="10977" src="$url/module/ui/allcrops/Crop_620_Seed.swf"/>
        <asset id="11099" src="$url/module/ui/allcrops/Crop_621_0.swf"/>
        <asset id="11100" src="$url/module/ui/allcrops/Crop_621_1.swf"/>
        <asset id="11101" src="$url/module/ui/allcrops/Crop_621_2.swf"/>
        <asset id="11102" src="$url/module/ui/allcrops/Crop_621_3.swf"/>
        <asset id="11103" src="$url/module/ui/allcrops/Crop_621_4.swf"/>
        <asset id="11104" src="$url/module/ui/allcrops/Crop_621_Seed.swf"/>
        <asset id="10691" src="$url/module/ui/allcrops/Crop_622_0.swf"/>
        <asset id="10692" src="$url/module/ui/allcrops/Crop_622_1.swf"/>
        <asset id="10693" src="$url/module/ui/allcrops/Crop_622_2.swf"/>
        <asset id="10694" src="$url/module/ui/allcrops/Crop_622_3.swf"/>
        <asset id="10695" src="$url/module/ui/allcrops/Crop_622_4.swf"/>
        <asset id="10696" src="$url/module/ui/allcrops/Crop_622_Seed.swf"/>
        <asset id="10685" src="$url/module/ui/allcrops/Crop_623_0.swf"/>
        <asset id="10686" src="$url/module/ui/allcrops/Crop_623_1.swf"/>
        <asset id="10687" src="$url/module/ui/allcrops/Crop_623_2.swf"/>
        <asset id="10688" src="$url/module/ui/allcrops/Crop_623_3.swf"/>
        <asset id="10689" src="$url/module/ui/allcrops/Crop_623_4.swf"/>
        <asset id="10690" src="$url/module/ui/allcrops/Crop_623_Seed.swf"/>
        <asset id="10697" src="$url/module/ui/allcrops/Crop_624_0.swf"/>
        <asset id="10698" src="$url/module/ui/allcrops/Crop_624_1.swf"/>
        <asset id="10699" src="$url/module/ui/allcrops/Crop_624_2.swf"/>
        <asset id="10700" src="$url/module/ui/allcrops/Crop_624_3.swf"/>
        <asset id="10701" src="$url/module/ui/allcrops/Crop_624_4.swf"/>
        <asset id="10702" src="$url/module/ui/allcrops/Crop_624_Seed.swf"/>
        <asset id="11087" src="$url/module/ui/allcrops/Crop_625_0.swf"/>
        <asset id="11088" src="$url/module/ui/allcrops/Crop_625_1.swf"/>
        <asset id="11089" src="$url/module/ui/allcrops/Crop_625_2.swf"/>
        <asset id="11090" src="$url/module/ui/allcrops/Crop_625_3.swf"/>
        <asset id="11091" src="$url/module/ui/allcrops/Crop_625_4.swf"/>
        <asset id="11092" src="$url/module/ui/allcrops/Crop_625_Seed.swf"/>
        <asset id="11093" src="$url/module/ui/allcrops/Crop_626_0.swf"/>
        <asset id="11094" src="$url/module/ui/allcrops/Crop_626_1.swf"/>
        <asset id="11095" src="$url/module/ui/allcrops/Crop_626_2.swf"/>
        <asset id="11096" src="$url/module/ui/allcrops/Crop_626_3.swf"/>
        <asset id="11097" src="$url/module/ui/allcrops/Crop_626_4.swf"/>
        <asset id="11098" src="$url/module/ui/allcrops/Crop_626_Seed.swf"/>
        <asset id="11218" src="$url/module/ui/allcrops/Crop_627_0.swf"/>
        <asset id="11219" src="$url/module/ui/allcrops/Crop_627_1.swf"/>
        <asset id="11220" src="$url/module/ui/allcrops/Crop_627_2.swf"/>
        <asset id="11221" src="$url/module/ui/allcrops/Crop_627_3.swf"/>
        <asset id="11222" src="$url/module/ui/allcrops/Crop_627_4.swf"/>
        <asset id="11223" src="$url/module/ui/allcrops/Crop_627_Seed.swf"/>
        <asset id="5675" src="$url/module/ui/allcrops/Crop_62_1.swf"/>
        <asset id="5676" src="$url/module/ui/allcrops/Crop_62_2.swf"/>
        <asset id="5677" src="$url/module/ui/allcrops/Crop_62_3.swf"/>
        <asset id="2371" src="$url/module/ui/allcrops/Crop_62_Seed.swf"/>
        <asset id="5678" src="$url/module/ui/allcrops/Crop_63_1.swf"/>
        <asset id="5679" src="$url/module/ui/allcrops/Crop_63_2.swf"/>
        <asset id="5680" src="$url/module/ui/allcrops/Crop_63_3.swf"/>
        <asset id="2373" src="$url/module/ui/allcrops/Crop_63_Seed.swf"/>
        <asset id="5681" src="$url/module/ui/allcrops/Crop_64_1.swf"/>
        <asset id="5682" src="$url/module/ui/allcrops/Crop_64_2.swf"/>
        <asset id="5683" src="$url/module/ui/allcrops/Crop_64_3.swf"/>
        <asset id="2375" src="$url/module/ui/allcrops/Crop_64_Seed.swf"/>
        <asset id="5684" src="$url/module/ui/allcrops/Crop_65_0.swf"/>
        <asset id="5685" src="$url/module/ui/allcrops/Crop_65_1.swf"/>
        <asset id="5686" src="$url/module/ui/allcrops/Crop_65_2.swf"/>
        <asset id="5687" src="$url/module/ui/allcrops/Crop_65_3.swf"/>
        <asset id="2377" src="$url/module/ui/allcrops/Crop_65_Seed.swf"/>
        <asset id="5688" src="$url/module/ui/allcrops/Crop_66_0.swf"/>
        <asset id="5689" src="$url/module/ui/allcrops/Crop_66_1.swf"/>
        <asset id="5690" src="$url/module/ui/allcrops/Crop_66_2.swf"/>
        <asset id="5691" src="$url/module/ui/allcrops/Crop_66_3.swf"/>
        <asset id="2379" src="$url/module/ui/allcrops/Crop_66_Seed.swf"/>
        <asset id="5692" src="$url/module/ui/allcrops/Crop_67_1.swf"/>
        <asset id="5693" src="$url/module/ui/allcrops/Crop_67_2.swf"/>
        <asset id="5694" src="$url/module/ui/allcrops/Crop_67_3.swf"/>
        <asset id="2381" src="$url/module/ui/allcrops/Crop_67_Seed.swf"/>
        <asset id="5695" src="$url/module/ui/allcrops/Crop_68_1.swf"/>
        <asset id="5696" src="$url/module/ui/allcrops/Crop_68_2.swf"/>
        <asset id="5697" src="$url/module/ui/allcrops/Crop_68_3.swf"/>
        <asset id="2383" src="$url/module/ui/allcrops/Crop_68_Seed.swf"/>
        <asset id="5698" src="$url/module/ui/allcrops/Crop_69_1.swf"/>
        <asset id="5699" src="$url/module/ui/allcrops/Crop_69_2.swf"/>
        <asset id="5700" src="$url/module/ui/allcrops/Crop_69_3.swf"/>
        <asset id="2385" src="$url/module/ui/allcrops/Crop_69_Seed.swf"/>
        <asset id="5493" src="$url/module/ui/allcrops/Crop_6_1.swf"/>
        <asset id="5494" src="$url/module/ui/allcrops/Crop_6_2.swf"/>
        <asset id="5495" src="$url/module/ui/allcrops/Crop_6_3.swf"/>
        <asset id="2263" src="$url/module/ui/allcrops/Crop_6_Seed.swf"/>
        <asset id="10223" src="$url/module/ui/allcrops/Crop_700_1.swf"/>
        <asset id="10224" src="$url/module/ui/allcrops/Crop_700_2.swf"/>
        <asset id="10225" src="$url/module/ui/allcrops/Crop_700_3.swf"/>
        <asset id="10222" src="$url/module/ui/allcrops/Crop_700_Seed.swf"/>
        <asset id="11119" src="$url/module/ui/allcrops/Crop_702_0.swf"/>
        <asset id="11120" src="$url/module/ui/allcrops/Crop_702_1.swf"/>
        <asset id="11121" src="$url/module/ui/allcrops/Crop_702_2.swf"/>
        <asset id="11122" src="$url/module/ui/allcrops/Crop_702_3.swf"/>
        <asset id="11123" src="$url/module/ui/allcrops/Crop_702_4.swf"/>
        <asset id="11124" src="$url/module/ui/allcrops/Crop_702_Seed.swf"/>
        <asset id="11691" src="$url/module/ui/allcrops/Crop_703_0.swf"/>
        <asset id="11692" src="$url/module/ui/allcrops/Crop_703_1.swf"/>
        <asset id="11693" src="$url/module/ui/allcrops/Crop_703_2.swf"/>
        <asset id="11694" src="$url/module/ui/allcrops/Crop_703_3.swf"/>
        <asset id="11695" src="$url/module/ui/allcrops/Crop_703_4.swf"/>
        <asset id="11696" src="$url/module/ui/allcrops/Crop_703_Seed.swf"/>
        <asset id="11194" src="$url/module/ui/allcrops/Crop_704_0.swf"/>
        <asset id="11195" src="$url/module/ui/allcrops/Crop_704_1.swf"/>
        <asset id="11196" src="$url/module/ui/allcrops/Crop_704_2.swf"/>
        <asset id="11197" src="$url/module/ui/allcrops/Crop_704_3.swf"/>
        <asset id="11198" src="$url/module/ui/allcrops/Crop_704_4.swf"/>
        <asset id="11199" src="$url/module/ui/allcrops/Crop_704_Seed.swf"/>
        <asset id="11673" src="$url/module/ui/allcrops/Crop_706_0.swf"/>
        <asset id="11674" src="$url/module/ui/allcrops/Crop_706_1.swf"/>
        <asset id="11675" src="$url/module/ui/allcrops/Crop_706_2.swf"/>
        <asset id="11676" src="$url/module/ui/allcrops/Crop_706_3.swf"/>
        <asset id="11677" src="$url/module/ui/allcrops/Crop_706_4.swf"/>
        <asset id="11678" src="$url/module/ui/allcrops/Crop_706_Seed.swf"/>
        <asset id="11200" src="$url/module/ui/allcrops/Crop_707_0.swf"/>
        <asset id="11201" src="$url/module/ui/allcrops/Crop_707_1.swf"/>
        <asset id="11202" src="$url/module/ui/allcrops/Crop_707_2.swf"/>
        <asset id="11203" src="$url/module/ui/allcrops/Crop_707_3.swf"/>
        <asset id="11204" src="$url/module/ui/allcrops/Crop_707_4.swf"/>
        <asset id="11205" src="$url/module/ui/allcrops/Crop_707_Seed.swf"/>
        <asset id="11131" src="$url/module/ui/allcrops/Crop_708_0.swf"/>
        <asset id="11132" src="$url/module/ui/allcrops/Crop_708_1.swf"/>
        <asset id="11133" src="$url/module/ui/allcrops/Crop_708_2.swf"/>
        <asset id="11134" src="$url/module/ui/allcrops/Crop_708_3.swf"/>
        <asset id="11135" src="$url/module/ui/allcrops/Crop_708_4.swf"/>
        <asset id="11136" src="$url/module/ui/allcrops/Crop_708_Seed.swf"/>
        <asset id="11113" src="$url/module/ui/allcrops/Crop_709_0.swf"/>
        <asset id="11114" src="$url/module/ui/allcrops/Crop_709_1.swf"/>
        <asset id="11115" src="$url/module/ui/allcrops/Crop_709_2.swf"/>
        <asset id="11116" src="$url/module/ui/allcrops/Crop_709_3.swf"/>
        <asset id="11117" src="$url/module/ui/allcrops/Crop_709_4.swf"/>
        <asset id="11118" src="$url/module/ui/allcrops/Crop_709_Seed.swf"/>
        <asset id="5703" src="$url/module/ui/allcrops/Crop_70_1.swf"/>
        <asset id="5704" src="$url/module/ui/allcrops/Crop_70_2.swf"/>
        <asset id="5705" src="$url/module/ui/allcrops/Crop_70_3.swf"/>
        <asset id="2387" src="$url/module/ui/allcrops/Crop_70_Seed.swf"/>
        <asset id="11107" src="$url/module/ui/allcrops/Crop_710_0.swf"/>
        <asset id="11108" src="$url/module/ui/allcrops/Crop_710_1.swf"/>
        <asset id="11109" src="$url/module/ui/allcrops/Crop_710_2.swf"/>
        <asset id="11110" src="$url/module/ui/allcrops/Crop_710_3.swf"/>
        <asset id="11111" src="$url/module/ui/allcrops/Crop_710_4.swf"/>
        <asset id="11112" src="$url/module/ui/allcrops/Crop_710_Seed.swf"/>
        <asset id="11241" src="$url/module/ui/allcrops/Crop_711_0.swf"/>
        <asset id="11242" src="$url/module/ui/allcrops/Crop_711_1.swf"/>
        <asset id="11243" src="$url/module/ui/allcrops/Crop_711_2.swf"/>
        <asset id="11244" src="$url/module/ui/allcrops/Crop_711_3.swf"/>
        <asset id="11245" src="$url/module/ui/allcrops/Crop_711_4.swf"/>
        <asset id="11246" src="$url/module/ui/allcrops/Crop_711_Seed.swf"/>
        <asset id="11391" src="$url/module/ui/allcrops/Crop_712_0.swf"/>
        <asset id="11392" src="$url/module/ui/allcrops/Crop_712_1.swf"/>
        <asset id="11393" src="$url/module/ui/allcrops/Crop_712_2.swf"/>
        <asset id="11394" src="$url/module/ui/allcrops/Crop_712_3.swf"/>
        <asset id="11395" src="$url/module/ui/allcrops/Crop_712_4.swf"/>
        <asset id="11396" src="$url/module/ui/allcrops/Crop_712_Seed.swf"/>
        <asset id="11301" src="$url/module/ui/allcrops/Crop_713_0.swf"/>
        <asset id="11302" src="$url/module/ui/allcrops/Crop_713_1.swf"/>
        <asset id="11303" src="$url/module/ui/allcrops/Crop_713_2.swf"/>
        <asset id="11304" src="$url/module/ui/allcrops/Crop_713_3.swf"/>
        <asset id="11305" src="$url/module/ui/allcrops/Crop_713_4.swf"/>
        <asset id="11306" src="$url/module/ui/allcrops/Crop_713_Seed.swf"/>
        <asset id="11283" src="$url/module/ui/allcrops/Crop_714_0.swf"/>
        <asset id="11284" src="$url/module/ui/allcrops/Crop_714_1.swf"/>
        <asset id="11285" src="$url/module/ui/allcrops/Crop_714_2.swf"/>
        <asset id="11286" src="$url/module/ui/allcrops/Crop_714_3.swf"/>
        <asset id="11287" src="$url/module/ui/allcrops/Crop_714_4.swf"/>
        <asset id="11288" src="$url/module/ui/allcrops/Crop_714_Seed.swf"/>
        <asset id="11265" src="$url/module/ui/allcrops/Crop_715_0.swf"/>
        <asset id="11266" src="$url/module/ui/allcrops/Crop_715_1.swf"/>
        <asset id="11267" src="$url/module/ui/allcrops/Crop_715_2.swf"/>
        <asset id="11268" src="$url/module/ui/allcrops/Crop_715_3.swf"/>
        <asset id="11269" src="$url/module/ui/allcrops/Crop_715_4.swf"/>
        <asset id="11270" src="$url/module/ui/allcrops/Crop_715_Seed.swf"/>
        <asset id="11343" src="$url/module/ui/allcrops/Crop_716_0.swf"/>
        <asset id="11344" src="$url/module/ui/allcrops/Crop_716_1.swf"/>
        <asset id="11345" src="$url/module/ui/allcrops/Crop_716_2.swf"/>
        <asset id="11346" src="$url/module/ui/allcrops/Crop_716_3.swf"/>
        <asset id="11347" src="$url/module/ui/allcrops/Crop_716_4.swf"/>
        <asset id="11348" src="$url/module/ui/allcrops/Crop_716_Seed.swf"/>
        <asset id="11319" src="$url/module/ui/allcrops/Crop_717_0.swf"/>
        <asset id="11320" src="$url/module/ui/allcrops/Crop_717_1.swf"/>
        <asset id="11321" src="$url/module/ui/allcrops/Crop_717_2.swf"/>
        <asset id="11322" src="$url/module/ui/allcrops/Crop_717_3.swf"/>
        <asset id="11323" src="$url/module/ui/allcrops/Crop_717_4.swf"/>
        <asset id="11324" src="$url/module/ui/allcrops/Crop_717_Seed.swf"/>
        <asset id="11427" src="$url/module/ui/allcrops/Crop_718_0.swf"/>
        <asset id="11428" src="$url/module/ui/allcrops/Crop_718_1.swf"/>
        <asset id="11429" src="$url/module/ui/allcrops/Crop_718_2.swf"/>
        <asset id="11430" src="$url/module/ui/allcrops/Crop_718_3.swf"/>
        <asset id="11431" src="$url/module/ui/allcrops/Crop_718_4.swf"/>
        <asset id="11432" src="$url/module/ui/allcrops/Crop_718_Seed.swf"/>
        <asset id="11361" src="$url/module/ui/allcrops/Crop_719_0.swf"/>
        <asset id="11362" src="$url/module/ui/allcrops/Crop_719_1.swf"/>
        <asset id="11363" src="$url/module/ui/allcrops/Crop_719_2.swf"/>
        <asset id="11364" src="$url/module/ui/allcrops/Crop_719_3.swf"/>
        <asset id="11365" src="$url/module/ui/allcrops/Crop_719_4.swf"/>
        <asset id="11366" src="$url/module/ui/allcrops/Crop_719_Seed.swf"/>
        <asset id="5706" src="$url/module/ui/allcrops/Crop_71_1.swf"/>
        <asset id="5707" src="$url/module/ui/allcrops/Crop_71_2.swf"/>
        <asset id="5708" src="$url/module/ui/allcrops/Crop_71_3.swf"/>
        <asset id="2389" src="$url/module/ui/allcrops/Crop_71_Seed.swf"/>
        <asset id="11247" src="$url/module/ui/allcrops/Crop_720_0.swf"/>
        <asset id="11248" src="$url/module/ui/allcrops/Crop_720_1.swf"/>
        <asset id="11249" src="$url/module/ui/allcrops/Crop_720_2.swf"/>
        <asset id="11250" src="$url/module/ui/allcrops/Crop_720_3.swf"/>
        <asset id="11251" src="$url/module/ui/allcrops/Crop_720_4.swf"/>
        <asset id="11252" src="$url/module/ui/allcrops/Crop_720_Seed.swf"/>
        <asset id="11397" src="$url/module/ui/allcrops/Crop_721_0.swf"/>
        <asset id="11398" src="$url/module/ui/allcrops/Crop_721_1.swf"/>
        <asset id="11399" src="$url/module/ui/allcrops/Crop_721_2.swf"/>
        <asset id="11400" src="$url/module/ui/allcrops/Crop_721_3.swf"/>
        <asset id="11401" src="$url/module/ui/allcrops/Crop_721_4.swf"/>
        <asset id="11402" src="$url/module/ui/allcrops/Crop_721_Seed.swf"/>
        <asset id="11307" src="$url/module/ui/allcrops/Crop_722_0.swf"/>
        <asset id="11308" src="$url/module/ui/allcrops/Crop_722_1.swf"/>
        <asset id="11309" src="$url/module/ui/allcrops/Crop_722_2.swf"/>
        <asset id="11310" src="$url/module/ui/allcrops/Crop_722_3.swf"/>
        <asset id="11311" src="$url/module/ui/allcrops/Crop_722_4.swf"/>
        <asset id="11312" src="$url/module/ui/allcrops/Crop_722_Seed.swf"/>
        <asset id="11289" src="$url/module/ui/allcrops/Crop_723_0.swf"/>
        <asset id="11290" src="$url/module/ui/allcrops/Crop_723_1.swf"/>
        <asset id="11291" src="$url/module/ui/allcrops/Crop_723_2.swf"/>
        <asset id="11292" src="$url/module/ui/allcrops/Crop_723_3.swf"/>
        <asset id="11293" src="$url/module/ui/allcrops/Crop_723_4.swf"/>
        <asset id="11294" src="$url/module/ui/allcrops/Crop_723_Seed.swf"/>
        <asset id="11271" src="$url/module/ui/allcrops/Crop_724_0.swf"/>
        <asset id="11272" src="$url/module/ui/allcrops/Crop_724_1.swf"/>
        <asset id="11273" src="$url/module/ui/allcrops/Crop_724_2.swf"/>
        <asset id="11274" src="$url/module/ui/allcrops/Crop_724_3.swf"/>
        <asset id="11275" src="$url/module/ui/allcrops/Crop_724_4.swf"/>
        <asset id="11276" src="$url/module/ui/allcrops/Crop_724_Seed.swf"/>
        <asset id="11349" src="$url/module/ui/allcrops/Crop_725_0.swf"/>
        <asset id="11350" src="$url/module/ui/allcrops/Crop_725_1.swf"/>
        <asset id="11351" src="$url/module/ui/allcrops/Crop_725_2.swf"/>
        <asset id="11352" src="$url/module/ui/allcrops/Crop_725_3.swf"/>
        <asset id="11353" src="$url/module/ui/allcrops/Crop_725_4.swf"/>
        <asset id="11354" src="$url/module/ui/allcrops/Crop_725_Seed.swf"/>
        <asset id="11325" src="$url/module/ui/allcrops/Crop_726_0.swf"/>
        <asset id="11326" src="$url/module/ui/allcrops/Crop_726_1.swf"/>
        <asset id="11327" src="$url/module/ui/allcrops/Crop_726_2.swf"/>
        <asset id="11328" src="$url/module/ui/allcrops/Crop_726_3.swf"/>
        <asset id="11329" src="$url/module/ui/allcrops/Crop_726_4.swf"/>
        <asset id="11330" src="$url/module/ui/allcrops/Crop_726_Seed.swf"/>
        <asset id="11433" src="$url/module/ui/allcrops/Crop_727_0.swf"/>
        <asset id="11434" src="$url/module/ui/allcrops/Crop_727_1.swf"/>
        <asset id="11435" src="$url/module/ui/allcrops/Crop_727_2.swf"/>
        <asset id="11436" src="$url/module/ui/allcrops/Crop_727_3.swf"/>
        <asset id="11437" src="$url/module/ui/allcrops/Crop_727_4.swf"/>
        <asset id="11438" src="$url/module/ui/allcrops/Crop_727_Seed.swf"/>
        <asset id="11367" src="$url/module/ui/allcrops/Crop_728_0.swf"/>
        <asset id="11368" src="$url/module/ui/allcrops/Crop_728_1.swf"/>
        <asset id="11369" src="$url/module/ui/allcrops/Crop_728_2.swf"/>
        <asset id="11370" src="$url/module/ui/allcrops/Crop_728_3.swf"/>
        <asset id="11371" src="$url/module/ui/allcrops/Crop_728_4.swf"/>
        <asset id="11372" src="$url/module/ui/allcrops/Crop_728_Seed.swf"/>
        <asset id="11253" src="$url/module/ui/allcrops/Crop_729_0.swf"/>
        <asset id="11254" src="$url/module/ui/allcrops/Crop_729_1.swf"/>
        <asset id="11255" src="$url/module/ui/allcrops/Crop_729_2.swf"/>
        <asset id="11256" src="$url/module/ui/allcrops/Crop_729_3.swf"/>
        <asset id="11257" src="$url/module/ui/allcrops/Crop_729_4.swf"/>
        <asset id="11258" src="$url/module/ui/allcrops/Crop_729_Seed.swf"/>
        <asset id="5709" src="$url/module/ui/allcrops/Crop_72_0.swf"/>
        <asset id="5710" src="$url/module/ui/allcrops/Crop_72_1.swf"/>
        <asset id="5711" src="$url/module/ui/allcrops/Crop_72_2.swf"/>
        <asset id="5712" src="$url/module/ui/allcrops/Crop_72_3.swf"/>
        <asset id="2391" src="$url/module/ui/allcrops/Crop_72_Seed.swf"/>
        <asset id="11403" src="$url/module/ui/allcrops/Crop_730_0.swf"/>
        <asset id="11404" src="$url/module/ui/allcrops/Crop_730_1.swf"/>
        <asset id="11405" src="$url/module/ui/allcrops/Crop_730_2.swf"/>
        <asset id="11406" src="$url/module/ui/allcrops/Crop_730_3.swf"/>
        <asset id="11407" src="$url/module/ui/allcrops/Crop_730_4.swf"/>
        <asset id="11408" src="$url/module/ui/allcrops/Crop_730_Seed.swf"/>
        <asset id="11313" src="$url/module/ui/allcrops/Crop_731_0.swf"/>
        <asset id="11314" src="$url/module/ui/allcrops/Crop_731_1.swf"/>
        <asset id="11315" src="$url/module/ui/allcrops/Crop_731_2.swf"/>
        <asset id="11316" src="$url/module/ui/allcrops/Crop_731_3.swf"/>
        <asset id="11317" src="$url/module/ui/allcrops/Crop_731_4.swf"/>
        <asset id="11318" src="$url/module/ui/allcrops/Crop_731_Seed.swf"/>
        <asset id="11295" src="$url/module/ui/allcrops/Crop_732_0.swf"/>
        <asset id="11296" src="$url/module/ui/allcrops/Crop_732_1.swf"/>
        <asset id="11297" src="$url/module/ui/allcrops/Crop_732_2.swf"/>
        <asset id="11298" src="$url/module/ui/allcrops/Crop_732_3.swf"/>
        <asset id="11299" src="$url/module/ui/allcrops/Crop_732_4.swf"/>
        <asset id="11300" src="$url/module/ui/allcrops/Crop_732_Seed.swf"/>
        <asset id="11277" src="$url/module/ui/allcrops/Crop_733_0.swf"/>
        <asset id="11278" src="$url/module/ui/allcrops/Crop_733_1.swf"/>
        <asset id="11279" src="$url/module/ui/allcrops/Crop_733_2.swf"/>
        <asset id="11280" src="$url/module/ui/allcrops/Crop_733_3.swf"/>
        <asset id="11281" src="$url/module/ui/allcrops/Crop_733_4.swf"/>
        <asset id="11282" src="$url/module/ui/allcrops/Crop_733_Seed.swf"/>
        <asset id="11355" src="$url/module/ui/allcrops/Crop_734_0.swf"/>
        <asset id="11356" src="$url/module/ui/allcrops/Crop_734_1.swf"/>
        <asset id="11357" src="$url/module/ui/allcrops/Crop_734_2.swf"/>
        <asset id="11358" src="$url/module/ui/allcrops/Crop_734_3.swf"/>
        <asset id="11359" src="$url/module/ui/allcrops/Crop_734_4.swf"/>
        <asset id="11360" src="$url/module/ui/allcrops/Crop_734_Seed.swf"/>
        <asset id="11331" src="$url/module/ui/allcrops/Crop_735_0.swf"/>
        <asset id="11332" src="$url/module/ui/allcrops/Crop_735_1.swf"/>
        <asset id="11333" src="$url/module/ui/allcrops/Crop_735_2.swf"/>
        <asset id="11334" src="$url/module/ui/allcrops/Crop_735_3.swf"/>
        <asset id="11335" src="$url/module/ui/allcrops/Crop_735_4.swf"/>
        <asset id="11336" src="$url/module/ui/allcrops/Crop_735_Seed.swf"/>
        <asset id="11439" src="$url/module/ui/allcrops/Crop_736_0.swf"/>
        <asset id="11440" src="$url/module/ui/allcrops/Crop_736_1.swf"/>
        <asset id="11441" src="$url/module/ui/allcrops/Crop_736_2.swf"/>
        <asset id="11442" src="$url/module/ui/allcrops/Crop_736_3.swf"/>
        <asset id="11443" src="$url/module/ui/allcrops/Crop_736_4.swf"/>
        <asset id="11444" src="$url/module/ui/allcrops/Crop_736_Seed.swf"/>
        <asset id="11373" src="$url/module/ui/allcrops/Crop_737_0.swf"/>
        <asset id="11374" src="$url/module/ui/allcrops/Crop_737_1.swf"/>
        <asset id="11375" src="$url/module/ui/allcrops/Crop_737_2.swf"/>
        <asset id="11376" src="$url/module/ui/allcrops/Crop_737_3.swf"/>
        <asset id="11377" src="$url/module/ui/allcrops/Crop_737_4.swf"/>
        <asset id="11378" src="$url/module/ui/allcrops/Crop_737_Seed.swf"/>
        <asset id="11379" src="$url/module/ui/allcrops/Crop_738_0.swf"/>
        <asset id="11380" src="$url/module/ui/allcrops/Crop_738_1.swf"/>
        <asset id="11381" src="$url/module/ui/allcrops/Crop_738_2.swf"/>
        <asset id="11382" src="$url/module/ui/allcrops/Crop_738_3.swf"/>
        <asset id="11383" src="$url/module/ui/allcrops/Crop_738_4.swf"/>
        <asset id="11384" src="$url/module/ui/allcrops/Crop_738_Seed.swf"/>
        <asset id="11385" src="$url/module/ui/allcrops/Crop_739_0.swf"/>
        <asset id="11386" src="$url/module/ui/allcrops/Crop_739_1.swf"/>
        <asset id="11387" src="$url/module/ui/allcrops/Crop_739_2.swf"/>
        <asset id="11388" src="$url/module/ui/allcrops/Crop_739_3.swf"/>
        <asset id="11389" src="$url/module/ui/allcrops/Crop_739_4.swf"/>
        <asset id="11390" src="$url/module/ui/allcrops/Crop_739_Seed.swf"/>
        <asset id="27898" src="$url/module/ui/allcrops/Crop_73_0.swf"/>
        <asset id="27899" src="$url/module/ui/allcrops/Crop_73_1.swf"/>
        <asset id="27900" src="$url/module/ui/allcrops/Crop_73_2.swf"/>
        <asset id="27901" src="$url/module/ui/allcrops/Crop_73_3.swf"/>
        <asset id="27902" src="$url/module/ui/allcrops/Crop_73_4.swf"/>
        <asset id="2393" src="$url/module/ui/allcrops/Crop_73_Seed.swf"/>
        <asset id="11421" src="$url/module/ui/allcrops/Crop_740_0.swf"/>
        <asset id="11422" src="$url/module/ui/allcrops/Crop_740_1.swf"/>
        <asset id="11423" src="$url/module/ui/allcrops/Crop_740_2.swf"/>
        <asset id="11424" src="$url/module/ui/allcrops/Crop_740_3.swf"/>
        <asset id="11425" src="$url/module/ui/allcrops/Crop_740_4.swf"/>
        <asset id="11426" src="$url/module/ui/allcrops/Crop_740_Seed.swf"/>
        <asset id="11409" src="$url/module/ui/allcrops/Crop_741_0.swf"/>
        <asset id="11410" src="$url/module/ui/allcrops/Crop_741_1.swf"/>
        <asset id="11411" src="$url/module/ui/allcrops/Crop_741_2.swf"/>
        <asset id="11412" src="$url/module/ui/allcrops/Crop_741_3.swf"/>
        <asset id="11413" src="$url/module/ui/allcrops/Crop_741_4.swf"/>
        <asset id="11414" src="$url/module/ui/allcrops/Crop_741_Seed.swf"/>
        <asset id="11337" src="$url/module/ui/allcrops/Crop_742_0.swf"/>
        <asset id="11338" src="$url/module/ui/allcrops/Crop_742_1.swf"/>
        <asset id="11339" src="$url/module/ui/allcrops/Crop_742_2.swf"/>
        <asset id="11340" src="$url/module/ui/allcrops/Crop_742_3.swf"/>
        <asset id="11341" src="$url/module/ui/allcrops/Crop_742_4.swf"/>
        <asset id="11342" src="$url/module/ui/allcrops/Crop_742_Seed.swf"/>
        <asset id="11259" src="$url/module/ui/allcrops/Crop_743_0.swf"/>
        <asset id="11260" src="$url/module/ui/allcrops/Crop_743_1.swf"/>
        <asset id="11261" src="$url/module/ui/allcrops/Crop_743_2.swf"/>
        <asset id="11262" src="$url/module/ui/allcrops/Crop_743_3.swf"/>
        <asset id="11263" src="$url/module/ui/allcrops/Crop_743_4.swf"/>
        <asset id="11264" src="$url/module/ui/allcrops/Crop_743_Seed.swf"/>
        <asset id="11415" src="$url/module/ui/allcrops/Crop_744_0.swf"/>
        <asset id="11416" src="$url/module/ui/allcrops/Crop_744_1.swf"/>
        <asset id="11417" src="$url/module/ui/allcrops/Crop_744_2.swf"/>
        <asset id="11418" src="$url/module/ui/allcrops/Crop_744_3.swf"/>
        <asset id="11419" src="$url/module/ui/allcrops/Crop_744_4.swf"/>
        <asset id="11420" src="$url/module/ui/allcrops/Crop_744_Seed.swf"/>
        <asset id="11957" src="$url/module/ui/allcrops/Crop_745_0.swf"/>
        <asset id="11958" src="$url/module/ui/allcrops/Crop_745_1.swf"/>
        <asset id="11959" src="$url/module/ui/allcrops/Crop_745_2.swf"/>
        <asset id="11960" src="$url/module/ui/allcrops/Crop_745_3.swf"/>
        <asset id="11961" src="$url/module/ui/allcrops/Crop_745_4.swf"/>
        <asset id="11962" src="$url/module/ui/allcrops/Crop_745_Seed.swf"/>
        <asset id="11679" src="$url/module/ui/allcrops/Crop_746_0.swf"/>
        <asset id="11680" src="$url/module/ui/allcrops/Crop_746_1.swf"/>
        <asset id="11681" src="$url/module/ui/allcrops/Crop_746_2.swf"/>
        <asset id="11682" src="$url/module/ui/allcrops/Crop_746_3.swf"/>
        <asset id="11683" src="$url/module/ui/allcrops/Crop_746_4.swf"/>
        <asset id="11684" src="$url/module/ui/allcrops/Crop_746_Seed.swf"/>
        <asset id="11685" src="$url/module/ui/allcrops/Crop_747_0.swf"/>
        <asset id="11686" src="$url/module/ui/allcrops/Crop_747_1.swf"/>
        <asset id="11687" src="$url/module/ui/allcrops/Crop_747_2.swf"/>
        <asset id="11688" src="$url/module/ui/allcrops/Crop_747_3.swf"/>
        <asset id="11689" src="$url/module/ui/allcrops/Crop_747_4.swf"/>
        <asset id="11690" src="$url/module/ui/allcrops/Crop_747_Seed.swf"/>
        <asset id="11737" src="$url/module/ui/allcrops/Crop_749_1.swf"/>
        <asset id="11738" src="$url/module/ui/allcrops/Crop_749_2.swf"/>
        <asset id="11739" src="$url/module/ui/allcrops/Crop_749_3.swf"/>
        <asset id="11736" src="$url/module/ui/allcrops/Crop_749_Seed.swf"/>
        <asset id="5713" src="$url/module/ui/allcrops/Crop_74_0.swf"/>
        <asset id="5714" src="$url/module/ui/allcrops/Crop_74_1.swf"/>
        <asset id="5715" src="$url/module/ui/allcrops/Crop_74_2.swf"/>
        <asset id="5716" src="$url/module/ui/allcrops/Crop_74_3.swf"/>
        <asset id="2395" src="$url/module/ui/allcrops/Crop_74_Seed.swf"/>
        <asset id="11654" src="$url/module/ui/allcrops/Crop_750_0.swf"/>
        <asset id="11655" src="$url/module/ui/allcrops/Crop_750_1.swf"/>
        <asset id="11656" src="$url/module/ui/allcrops/Crop_750_2.swf"/>
        <asset id="11657" src="$url/module/ui/allcrops/Crop_750_3.swf"/>
        <asset id="11658" src="$url/module/ui/allcrops/Crop_750_4.swf"/>
        <asset id="11659" src="$url/module/ui/allcrops/Crop_750_Seed.swf"/>
        <asset id="11642" src="$url/module/ui/allcrops/Crop_751_0.swf"/>
        <asset id="11643" src="$url/module/ui/allcrops/Crop_751_1.swf"/>
        <asset id="11644" src="$url/module/ui/allcrops/Crop_751_2.swf"/>
        <asset id="11645" src="$url/module/ui/allcrops/Crop_751_3.swf"/>
        <asset id="11646" src="$url/module/ui/allcrops/Crop_751_4.swf"/>
        <asset id="11647" src="$url/module/ui/allcrops/Crop_751_Seed.swf"/>
        <asset id="11648" src="$url/module/ui/allcrops/Crop_752_0.swf"/>
        <asset id="11649" src="$url/module/ui/allcrops/Crop_752_1.swf"/>
        <asset id="11650" src="$url/module/ui/allcrops/Crop_752_2.swf"/>
        <asset id="11651" src="$url/module/ui/allcrops/Crop_752_3.swf"/>
        <asset id="11652" src="$url/module/ui/allcrops/Crop_752_4.swf"/>
        <asset id="11653" src="$url/module/ui/allcrops/Crop_752_Seed.swf"/>
        <asset id="11636" src="$url/module/ui/allcrops/Crop_753_0.swf"/>
        <asset id="11637" src="$url/module/ui/allcrops/Crop_753_1.swf"/>
        <asset id="11638" src="$url/module/ui/allcrops/Crop_753_2.swf"/>
        <asset id="11639" src="$url/module/ui/allcrops/Crop_753_3.swf"/>
        <asset id="11640" src="$url/module/ui/allcrops/Crop_753_4.swf"/>
        <asset id="11641" src="$url/module/ui/allcrops/Crop_753_Seed.swf"/>
        <asset id="11732" src="$url/module/ui/allcrops/Crop_754_1.swf"/>
        <asset id="11733" src="$url/module/ui/allcrops/Crop_754_2.swf"/>
        <asset id="11734" src="$url/module/ui/allcrops/Crop_754_3.swf"/>
        <asset id="11735" src="$url/module/ui/allcrops/Crop_754_Seed.swf"/>
        <asset id="11903" src="$url/module/ui/allcrops/Crop_757_0.swf"/>
        <asset id="11904" src="$url/module/ui/allcrops/Crop_757_1.swf"/>
        <asset id="11905" src="$url/module/ui/allcrops/Crop_757_2.swf"/>
        <asset id="11906" src="$url/module/ui/allcrops/Crop_757_3.swf"/>
        <asset id="11907" src="$url/module/ui/allcrops/Crop_757_4.swf"/>
        <asset id="11908" src="$url/module/ui/allcrops/Crop_757_Seed.swf"/>
        <asset id="11845" src="$url/module/ui/allcrops/Crop_758_0.swf"/>
        <asset id="11846" src="$url/module/ui/allcrops/Crop_758_1.swf"/>
        <asset id="11847" src="$url/module/ui/allcrops/Crop_758_2.swf"/>
        <asset id="11848" src="$url/module/ui/allcrops/Crop_758_3.swf"/>
        <asset id="11849" src="$url/module/ui/allcrops/Crop_758_4.swf"/>
        <asset id="11850" src="$url/module/ui/allcrops/Crop_758_Seed.swf"/>
        <asset id="11909" src="$url/module/ui/allcrops/Crop_759_0.swf"/>
        <asset id="11910" src="$url/module/ui/allcrops/Crop_759_1.swf"/>
        <asset id="11911" src="$url/module/ui/allcrops/Crop_759_2.swf"/>
        <asset id="11912" src="$url/module/ui/allcrops/Crop_759_3.swf"/>
        <asset id="11913" src="$url/module/ui/allcrops/Crop_759_4.swf"/>
        <asset id="11914" src="$url/module/ui/allcrops/Crop_759_Seed.swf"/>
        <asset id="5717" src="$url/module/ui/allcrops/Crop_75_1.swf"/>
        <asset id="5718" src="$url/module/ui/allcrops/Crop_75_2.swf"/>
        <asset id="5719" src="$url/module/ui/allcrops/Crop_75_3.swf"/>
        <asset id="2397" src="$url/module/ui/allcrops/Crop_75_Seed.swf"/>
        <asset id="11915" src="$url/module/ui/allcrops/Crop_760_0.swf"/>
        <asset id="11916" src="$url/module/ui/allcrops/Crop_760_1.swf"/>
        <asset id="11917" src="$url/module/ui/allcrops/Crop_760_2.swf"/>
        <asset id="11918" src="$url/module/ui/allcrops/Crop_760_3.swf"/>
        <asset id="11955" src="$url/module/ui/allcrops/Crop_760_4.swf"/>
        <asset id="11956" src="$url/module/ui/allcrops/Crop_760_Seed.swf"/>
        <asset id="11833" src="$url/module/ui/allcrops/Crop_761_0.swf"/>
        <asset id="11834" src="$url/module/ui/allcrops/Crop_761_1.swf"/>
        <asset id="11835" src="$url/module/ui/allcrops/Crop_761_2.swf"/>
        <asset id="11836" src="$url/module/ui/allcrops/Crop_761_3.swf"/>
        <asset id="11837" src="$url/module/ui/allcrops/Crop_761_4.swf"/>
        <asset id="11838" src="$url/module/ui/allcrops/Crop_761_Seed.swf"/>
        <asset id="11919" src="$url/module/ui/allcrops/Crop_762_0.swf"/>
        <asset id="11920" src="$url/module/ui/allcrops/Crop_762_1.swf"/>
        <asset id="11921" src="$url/module/ui/allcrops/Crop_762_2.swf"/>
        <asset id="11922" src="$url/module/ui/allcrops/Crop_762_3.swf"/>
        <asset id="11923" src="$url/module/ui/allcrops/Crop_762_4.swf"/>
        <asset id="11924" src="$url/module/ui/allcrops/Crop_762_Seed.swf"/>
        <asset id="11925" src="$url/module/ui/allcrops/Crop_763_0.swf"/>
        <asset id="11926" src="$url/module/ui/allcrops/Crop_763_1.swf"/>
        <asset id="11927" src="$url/module/ui/allcrops/Crop_763_2.swf"/>
        <asset id="11928" src="$url/module/ui/allcrops/Crop_763_3.swf"/>
        <asset id="11929" src="$url/module/ui/allcrops/Crop_763_4.swf"/>
        <asset id="11930" src="$url/module/ui/allcrops/Crop_763_Seed.swf"/>
        <asset id="11931" src="$url/module/ui/allcrops/Crop_764_0.swf"/>
        <asset id="11932" src="$url/module/ui/allcrops/Crop_764_1.swf"/>
        <asset id="11933" src="$url/module/ui/allcrops/Crop_764_2.swf"/>
        <asset id="11934" src="$url/module/ui/allcrops/Crop_764_3.swf"/>
        <asset id="11935" src="$url/module/ui/allcrops/Crop_764_4.swf"/>
        <asset id="11936" src="$url/module/ui/allcrops/Crop_764_Seed.swf"/>
        <asset id="11937" src="$url/module/ui/allcrops/Crop_765_0.swf"/>
        <asset id="11938" src="$url/module/ui/allcrops/Crop_765_1.swf"/>
        <asset id="11939" src="$url/module/ui/allcrops/Crop_765_2.swf"/>
        <asset id="11940" src="$url/module/ui/allcrops/Crop_765_3.swf"/>
        <asset id="11941" src="$url/module/ui/allcrops/Crop_765_4.swf"/>
        <asset id="11942" src="$url/module/ui/allcrops/Crop_765_Seed.swf"/>
        <asset id="11839" src="$url/module/ui/allcrops/Crop_766_0.swf"/>
        <asset id="11840" src="$url/module/ui/allcrops/Crop_766_1.swf"/>
        <asset id="11841" src="$url/module/ui/allcrops/Crop_766_2.swf"/>
        <asset id="11842" src="$url/module/ui/allcrops/Crop_766_3.swf"/>
        <asset id="11843" src="$url/module/ui/allcrops/Crop_766_4.swf"/>
        <asset id="11844" src="$url/module/ui/allcrops/Crop_766_Seed.swf"/>
        <asset id="11943" src="$url/module/ui/allcrops/Crop_767_0.swf"/>
        <asset id="11944" src="$url/module/ui/allcrops/Crop_767_1.swf"/>
        <asset id="11945" src="$url/module/ui/allcrops/Crop_767_2.swf"/>
        <asset id="11946" src="$url/module/ui/allcrops/Crop_767_3.swf"/>
        <asset id="11947" src="$url/module/ui/allcrops/Crop_767_4.swf"/>
        <asset id="11948" src="$url/module/ui/allcrops/Crop_767_Seed.swf"/>
        <asset id="11949" src="$url/module/ui/allcrops/Crop_768_0.swf"/>
        <asset id="11950" src="$url/module/ui/allcrops/Crop_768_1.swf"/>
        <asset id="11951" src="$url/module/ui/allcrops/Crop_768_2.swf"/>
        <asset id="11952" src="$url/module/ui/allcrops/Crop_768_3.swf"/>
        <asset id="11953" src="$url/module/ui/allcrops/Crop_768_4.swf"/>
        <asset id="11954" src="$url/module/ui/allcrops/Crop_768_Seed.swf"/>
        <asset id="11963" src="$url/module/ui/allcrops/Crop_769_0.swf"/>
        <asset id="11964" src="$url/module/ui/allcrops/Crop_769_1.swf"/>
        <asset id="11965" src="$url/module/ui/allcrops/Crop_769_2.swf"/>
        <asset id="11966" src="$url/module/ui/allcrops/Crop_769_3.swf"/>
        <asset id="11967" src="$url/module/ui/allcrops/Crop_769_4.swf"/>
        <asset id="11968" src="$url/module/ui/allcrops/Crop_769_Seed.swf"/>
        <asset id="5720" src="$url/module/ui/allcrops/Crop_76_0.swf"/>
        <asset id="5721" src="$url/module/ui/allcrops/Crop_76_1.swf"/>
        <asset id="5722" src="$url/module/ui/allcrops/Crop_76_2.swf"/>
        <asset id="5723" src="$url/module/ui/allcrops/Crop_76_3.swf"/>
        <asset id="2399" src="$url/module/ui/allcrops/Crop_76_Seed.swf"/>
        <asset id="12023" src="$url/module/ui/allcrops/Crop_770_0.swf"/>
        <asset id="12024" src="$url/module/ui/allcrops/Crop_770_1.swf"/>
        <asset id="12025" src="$url/module/ui/allcrops/Crop_770_2.swf"/>
        <asset id="12026" src="$url/module/ui/allcrops/Crop_770_3.swf"/>
        <asset id="12027" src="$url/module/ui/allcrops/Crop_770_4.swf"/>
        <asset id="12028" src="$url/module/ui/allcrops/Crop_770_Seed.swf"/>
        <asset id="12036" src="$url/module/ui/allcrops/Crop_771_0.swf"/>
        <asset id="12037" src="$url/module/ui/allcrops/Crop_771_1.swf"/>
        <asset id="12038" src="$url/module/ui/allcrops/Crop_771_2.swf"/>
        <asset id="12039" src="$url/module/ui/allcrops/Crop_771_3.swf"/>
        <asset id="12040" src="$url/module/ui/allcrops/Crop_771_4.swf"/>
        <asset id="12041" src="$url/module/ui/allcrops/Crop_771_Seed.swf"/>
        <asset id="12043" src="$url/module/ui/allcrops/Crop_772_0.swf"/>
        <asset id="12044" src="$url/module/ui/allcrops/Crop_772_1.swf"/>
        <asset id="12045" src="$url/module/ui/allcrops/Crop_772_2.swf"/>
        <asset id="12046" src="$url/module/ui/allcrops/Crop_772_3.swf"/>
        <asset id="12047" src="$url/module/ui/allcrops/Crop_772_4.swf"/>
        <asset id="12048" src="$url/module/ui/allcrops/Crop_772_Seed.swf"/>
        <asset id="12176" src="$url/module/ui/allcrops/Crop_773_0.swf"/>
        <asset id="12177" src="$url/module/ui/allcrops/Crop_773_1.swf"/>
        <asset id="12178" src="$url/module/ui/allcrops/Crop_773_2.swf"/>
        <asset id="12179" src="$url/module/ui/allcrops/Crop_773_3.swf"/>
        <asset id="12180" src="$url/module/ui/allcrops/Crop_773_4.swf"/>
        <asset id="12181" src="$url/module/ui/allcrops/Crop_773_Seed.swf"/>
        <asset id="12134" src="$url/module/ui/allcrops/Crop_774_0.swf"/>
        <asset id="12135" src="$url/module/ui/allcrops/Crop_774_1.swf"/>
        <asset id="12136" src="$url/module/ui/allcrops/Crop_774_2.swf"/>
        <asset id="12137" src="$url/module/ui/allcrops/Crop_774_3.swf"/>
        <asset id="12138" src="$url/module/ui/allcrops/Crop_774_4.swf"/>
        <asset id="12139" src="$url/module/ui/allcrops/Crop_774_Seed.swf"/>
        <asset id="12158" src="$url/module/ui/allcrops/Crop_775_0.swf"/>
        <asset id="12159" src="$url/module/ui/allcrops/Crop_775_1.swf"/>
        <asset id="12160" src="$url/module/ui/allcrops/Crop_775_2.swf"/>
        <asset id="12161" src="$url/module/ui/allcrops/Crop_775_3.swf"/>
        <asset id="12162" src="$url/module/ui/allcrops/Crop_775_4.swf"/>
        <asset id="12163" src="$url/module/ui/allcrops/Crop_775_Seed.swf"/>
        <asset id="12182" src="$url/module/ui/allcrops/Crop_776_0.swf"/>
        <asset id="12183" src="$url/module/ui/allcrops/Crop_776_1.swf"/>
        <asset id="12184" src="$url/module/ui/allcrops/Crop_776_2.swf"/>
        <asset id="12185" src="$url/module/ui/allcrops/Crop_776_3.swf"/>
        <asset id="12186" src="$url/module/ui/allcrops/Crop_776_4.swf"/>
        <asset id="12187" src="$url/module/ui/allcrops/Crop_776_Seed.swf"/>
        <asset id="12140" src="$url/module/ui/allcrops/Crop_778_0.swf"/>
        <asset id="12141" src="$url/module/ui/allcrops/Crop_778_1.swf"/>
        <asset id="12142" src="$url/module/ui/allcrops/Crop_778_2.swf"/>
        <asset id="12143" src="$url/module/ui/allcrops/Crop_778_3.swf"/>
        <asset id="12144" src="$url/module/ui/allcrops/Crop_778_4.swf"/>
        <asset id="12145" src="$url/module/ui/allcrops/Crop_778_Seed.swf"/>
        <asset id="12128" src="$url/module/ui/allcrops/Crop_779_0.swf"/>
        <asset id="12129" src="$url/module/ui/allcrops/Crop_779_1.swf"/>
        <asset id="12130" src="$url/module/ui/allcrops/Crop_779_2.swf"/>
        <asset id="12131" src="$url/module/ui/allcrops/Crop_779_3.swf"/>
        <asset id="12132" src="$url/module/ui/allcrops/Crop_779_4.swf"/>
        <asset id="12133" src="$url/module/ui/allcrops/Crop_779_Seed.swf"/>
        <asset id="5724" src="$url/module/ui/allcrops/Crop_77_0.swf"/>
        <asset id="5725" src="$url/module/ui/allcrops/Crop_77_1.swf"/>
        <asset id="5726" src="$url/module/ui/allcrops/Crop_77_2.swf"/>
        <asset id="5727" src="$url/module/ui/allcrops/Crop_77_3.swf"/>
        <asset id="2401" src="$url/module/ui/allcrops/Crop_77_Seed.swf"/>
        <asset id="12152" src="$url/module/ui/allcrops/Crop_780_0.swf"/>
        <asset id="12153" src="$url/module/ui/allcrops/Crop_780_1.swf"/>
        <asset id="12154" src="$url/module/ui/allcrops/Crop_780_2.swf"/>
        <asset id="12155" src="$url/module/ui/allcrops/Crop_780_3.swf"/>
        <asset id="12156" src="$url/module/ui/allcrops/Crop_780_4.swf"/>
        <asset id="12157" src="$url/module/ui/allcrops/Crop_780_Seed.swf"/>
        <asset id="12146" src="$url/module/ui/allcrops/Crop_781_0.swf"/>
        <asset id="12147" src="$url/module/ui/allcrops/Crop_781_1.swf"/>
        <asset id="12148" src="$url/module/ui/allcrops/Crop_781_2.swf"/>
        <asset id="12149" src="$url/module/ui/allcrops/Crop_781_3.swf"/>
        <asset id="12150" src="$url/module/ui/allcrops/Crop_781_4.swf"/>
        <asset id="12151" src="$url/module/ui/allcrops/Crop_781_Seed.swf"/>
        <asset id="12395" src="$url/module/ui/allcrops/Crop_783_0.swf"/>
        <asset id="12396" src="$url/module/ui/allcrops/Crop_783_1.swf"/>
        <asset id="12397" src="$url/module/ui/allcrops/Crop_783_2.swf"/>
        <asset id="12398" src="$url/module/ui/allcrops/Crop_783_3.swf"/>
        <asset id="12399" src="$url/module/ui/allcrops/Crop_783_4.swf"/>
        <asset id="12400" src="$url/module/ui/allcrops/Crop_783_Seed.swf"/>
        <asset id="5728" src="$url/module/ui/allcrops/Crop_78_0.swf"/>
        <asset id="5729" src="$url/module/ui/allcrops/Crop_78_1.swf"/>
        <asset id="5730" src="$url/module/ui/allcrops/Crop_78_2.swf"/>
        <asset id="5731" src="$url/module/ui/allcrops/Crop_78_3.swf"/>
        <asset id="2403" src="$url/module/ui/allcrops/Crop_78_Seed.swf"/>
        <asset id="12100" src="$url/module/ui/allcrops/Crop_790_0.swf"/>
        <asset id="12101" src="$url/module/ui/allcrops/Crop_790_1.swf"/>
        <asset id="12102" src="$url/module/ui/allcrops/Crop_790_2.swf"/>
        <asset id="12103" src="$url/module/ui/allcrops/Crop_790_3.swf"/>
        <asset id="12104" src="$url/module/ui/allcrops/Crop_790_4.swf"/>
        <asset id="12105" src="$url/module/ui/allcrops/Crop_790_Seed.swf"/>
        <asset id="12258" src="$url/module/ui/allcrops/Crop_791_0.swf"/>
        <asset id="12259" src="$url/module/ui/allcrops/Crop_791_1.swf"/>
        <asset id="12260" src="$url/module/ui/allcrops/Crop_791_2.swf"/>
        <asset id="12261" src="$url/module/ui/allcrops/Crop_791_3.swf"/>
        <asset id="12262" src="$url/module/ui/allcrops/Crop_791_4.swf"/>
        <asset id="12263" src="$url/module/ui/allcrops/Crop_791_Seed.swf"/>
        <asset id="13160" src="$url/module/ui/allcrops/Crop_792_0.swf"/>
        <asset id="13161" src="$url/module/ui/allcrops/Crop_792_1.swf"/>
        <asset id="13162" src="$url/module/ui/allcrops/Crop_792_2.swf"/>
        <asset id="13163" src="$url/module/ui/allcrops/Crop_792_3.swf"/>
        <asset id="13164" src="$url/module/ui/allcrops/Crop_792_4.swf"/>
        <asset id="13165" src="$url/module/ui/allcrops/Crop_792_Seed.swf"/>
        <asset id="12668" src="$url/module/ui/allcrops/Crop_793_0.swf"/>
        <asset id="12669" src="$url/module/ui/allcrops/Crop_793_1.swf"/>
        <asset id="12670" src="$url/module/ui/allcrops/Crop_793_2.swf"/>
        <asset id="12671" src="$url/module/ui/allcrops/Crop_793_3.swf"/>
        <asset id="12672" src="$url/module/ui/allcrops/Crop_793_4.swf"/>
        <asset id="12673" src="$url/module/ui/allcrops/Crop_793_Seed.swf"/>
        <asset id="12680" src="$url/module/ui/allcrops/Crop_794_0.swf"/>
        <asset id="12681" src="$url/module/ui/allcrops/Crop_794_1.swf"/>
        <asset id="12682" src="$url/module/ui/allcrops/Crop_794_2.swf"/>
        <asset id="12683" src="$url/module/ui/allcrops/Crop_794_3.swf"/>
        <asset id="12684" src="$url/module/ui/allcrops/Crop_794_4.swf"/>
        <asset id="12685" src="$url/module/ui/allcrops/Crop_794_Seed.swf"/>
        <asset id="12686" src="$url/module/ui/allcrops/Crop_795_0.swf"/>
        <asset id="12687" src="$url/module/ui/allcrops/Crop_795_1.swf"/>
        <asset id="12688" src="$url/module/ui/allcrops/Crop_795_2.swf"/>
        <asset id="12689" src="$url/module/ui/allcrops/Crop_795_3.swf"/>
        <asset id="12690" src="$url/module/ui/allcrops/Crop_795_4.swf"/>
        <asset id="12691" src="$url/module/ui/allcrops/Crop_795_Seed.swf"/>
        <asset id="12674" src="$url/module/ui/allcrops/Crop_796_0.swf"/>
        <asset id="12675" src="$url/module/ui/allcrops/Crop_796_1.swf"/>
        <asset id="12676" src="$url/module/ui/allcrops/Crop_796_2.swf"/>
        <asset id="12677" src="$url/module/ui/allcrops/Crop_796_3.swf"/>
        <asset id="12678" src="$url/module/ui/allcrops/Crop_796_4.swf"/>
        <asset id="12679" src="$url/module/ui/allcrops/Crop_796_Seed.swf"/>
        <asset id="12698" src="$url/module/ui/allcrops/Crop_797_0.swf"/>
        <asset id="12699" src="$url/module/ui/allcrops/Crop_797_1.swf"/>
        <asset id="12700" src="$url/module/ui/allcrops/Crop_797_2.swf"/>
        <asset id="12701" src="$url/module/ui/allcrops/Crop_797_3.swf"/>
        <asset id="12702" src="$url/module/ui/allcrops/Crop_797_4.swf"/>
        <asset id="12703" src="$url/module/ui/allcrops/Crop_797_Seed.swf"/>
        <asset id="12692" src="$url/module/ui/allcrops/Crop_798_0.swf"/>
        <asset id="12693" src="$url/module/ui/allcrops/Crop_798_1.swf"/>
        <asset id="12694" src="$url/module/ui/allcrops/Crop_798_2.swf"/>
        <asset id="12695" src="$url/module/ui/allcrops/Crop_798_3.swf"/>
        <asset id="12696" src="$url/module/ui/allcrops/Crop_798_4.swf"/>
        <asset id="12697" src="$url/module/ui/allcrops/Crop_798_Seed.swf"/>
        <asset id="12710" src="$url/module/ui/allcrops/Crop_799_0.swf"/>
        <asset id="12711" src="$url/module/ui/allcrops/Crop_799_1.swf"/>
        <asset id="12712" src="$url/module/ui/allcrops/Crop_799_2.swf"/>
        <asset id="12713" src="$url/module/ui/allcrops/Crop_799_3.swf"/>
        <asset id="12714" src="$url/module/ui/allcrops/Crop_799_4.swf"/>
        <asset id="12715" src="$url/module/ui/allcrops/Crop_799_Seed.swf"/>
        <asset id="5732" src="$url/module/ui/allcrops/Crop_79_0.swf"/>
        <asset id="5733" src="$url/module/ui/allcrops/Crop_79_1.swf"/>
        <asset id="5734" src="$url/module/ui/allcrops/Crop_79_2.swf"/>
        <asset id="5735" src="$url/module/ui/allcrops/Crop_79_3.swf"/>
        <asset id="2405" src="$url/module/ui/allcrops/Crop_79_Seed.swf"/>
        <asset id="5496" src="$url/module/ui/allcrops/Crop_7_1.swf"/>
        <asset id="5497" src="$url/module/ui/allcrops/Crop_7_2.swf"/>
        <asset id="5498" src="$url/module/ui/allcrops/Crop_7_3.swf"/>
        <asset id="2265" src="$url/module/ui/allcrops/Crop_7_Seed.swf"/>
        <asset id="12704" src="$url/module/ui/allcrops/Crop_800_0.swf"/>
        <asset id="12705" src="$url/module/ui/allcrops/Crop_800_1.swf"/>
        <asset id="12706" src="$url/module/ui/allcrops/Crop_800_2.swf"/>
        <asset id="12707" src="$url/module/ui/allcrops/Crop_800_3.swf"/>
        <asset id="12708" src="$url/module/ui/allcrops/Crop_800_4.swf"/>
        <asset id="12709" src="$url/module/ui/allcrops/Crop_800_Seed.swf"/>
        <asset id="12783" src="$url/module/ui/allcrops/Crop_801_0.swf"/>
        <asset id="12784" src="$url/module/ui/allcrops/Crop_801_1.swf"/>
        <asset id="12785" src="$url/module/ui/allcrops/Crop_801_2.swf"/>
        <asset id="12786" src="$url/module/ui/allcrops/Crop_801_3.swf"/>
        <asset id="12787" src="$url/module/ui/allcrops/Crop_801_4.swf"/>
        <asset id="12788" src="$url/module/ui/allcrops/Crop_801_Seed.swf"/>
        <asset id="12777" src="$url/module/ui/allcrops/Crop_802_0.swf"/>
        <asset id="12778" src="$url/module/ui/allcrops/Crop_802_1.swf"/>
        <asset id="12779" src="$url/module/ui/allcrops/Crop_802_2.swf"/>
        <asset id="12780" src="$url/module/ui/allcrops/Crop_802_3.swf"/>
        <asset id="12781" src="$url/module/ui/allcrops/Crop_802_4.swf"/>
        <asset id="12782" src="$url/module/ui/allcrops/Crop_802_Seed.swf"/>
        <asset id="12789" src="$url/module/ui/allcrops/Crop_803_0.swf"/>
        <asset id="12790" src="$url/module/ui/allcrops/Crop_803_1.swf"/>
        <asset id="12791" src="$url/module/ui/allcrops/Crop_803_2.swf"/>
        <asset id="12792" src="$url/module/ui/allcrops/Crop_803_3.swf"/>
        <asset id="12793" src="$url/module/ui/allcrops/Crop_803_4.swf"/>
        <asset id="12794" src="$url/module/ui/allcrops/Crop_803_Seed.swf"/>
        <asset id="12795" src="$url/module/ui/allcrops/Crop_804_0.swf"/>
        <asset id="12796" src="$url/module/ui/allcrops/Crop_804_1.swf"/>
        <asset id="12797" src="$url/module/ui/allcrops/Crop_804_2.swf"/>
        <asset id="12798" src="$url/module/ui/allcrops/Crop_804_3.swf"/>
        <asset id="12799" src="$url/module/ui/allcrops/Crop_804_4.swf"/>
        <asset id="12800" src="$url/module/ui/allcrops/Crop_804_Seed.swf"/>
        <asset id="12559" src="$url/module/ui/allcrops/Crop_805_0.swf"/>
        <asset id="12560" src="$url/module/ui/allcrops/Crop_805_1.swf"/>
        <asset id="12561" src="$url/module/ui/allcrops/Crop_805_2.swf"/>
        <asset id="12562" src="$url/module/ui/allcrops/Crop_805_3.swf"/>
        <asset id="12563" src="$url/module/ui/allcrops/Crop_805_4.swf"/>
        <asset id="12564" src="$url/module/ui/allcrops/Crop_805_Seed.swf"/>
        <asset id="12571" src="$url/module/ui/allcrops/Crop_806_0.swf"/>
        <asset id="12572" src="$url/module/ui/allcrops/Crop_806_1.swf"/>
        <asset id="12573" src="$url/module/ui/allcrops/Crop_806_2.swf"/>
        <asset id="12574" src="$url/module/ui/allcrops/Crop_806_3.swf"/>
        <asset id="12575" src="$url/module/ui/allcrops/Crop_806_4.swf"/>
        <asset id="12576" src="$url/module/ui/allcrops/Crop_806_Seed.swf"/>
        <asset id="12577" src="$url/module/ui/allcrops/Crop_807_0.swf"/>
        <asset id="12578" src="$url/module/ui/allcrops/Crop_807_1.swf"/>
        <asset id="12579" src="$url/module/ui/allcrops/Crop_807_2.swf"/>
        <asset id="12580" src="$url/module/ui/allcrops/Crop_807_3.swf"/>
        <asset id="12581" src="$url/module/ui/allcrops/Crop_807_4.swf"/>
        <asset id="12582" src="$url/module/ui/allcrops/Crop_807_Seed.swf"/>
        <asset id="12553" src="$url/module/ui/allcrops/Crop_808_0.swf"/>
        <asset id="12554" src="$url/module/ui/allcrops/Crop_808_1.swf"/>
        <asset id="12555" src="$url/module/ui/allcrops/Crop_808_2.swf"/>
        <asset id="12556" src="$url/module/ui/allcrops/Crop_808_3.swf"/>
        <asset id="12557" src="$url/module/ui/allcrops/Crop_808_4.swf"/>
        <asset id="12558" src="$url/module/ui/allcrops/Crop_808_Seed.swf"/>
        <asset id="12565" src="$url/module/ui/allcrops/Crop_809_0.swf"/>
        <asset id="12566" src="$url/module/ui/allcrops/Crop_809_1.swf"/>
        <asset id="12567" src="$url/module/ui/allcrops/Crop_809_2.swf"/>
        <asset id="12568" src="$url/module/ui/allcrops/Crop_809_3.swf"/>
        <asset id="12569" src="$url/module/ui/allcrops/Crop_809_4.swf"/>
        <asset id="12570" src="$url/module/ui/allcrops/Crop_809_Seed.swf"/>
        <asset id="5736" src="$url/module/ui/allcrops/Crop_80_0.swf"/>
        <asset id="5737" src="$url/module/ui/allcrops/Crop_80_1.swf"/>
        <asset id="5738" src="$url/module/ui/allcrops/Crop_80_2.swf"/>
        <asset id="5739" src="$url/module/ui/allcrops/Crop_80_3.swf"/>
        <asset id="2407" src="$url/module/ui/allcrops/Crop_80_Seed.swf"/>
        <asset id="13306" src="$url/module/ui/allcrops/Crop_813_0.swf"/>
        <asset id="13307" src="$url/module/ui/allcrops/Crop_813_1.swf"/>
        <asset id="13308" src="$url/module/ui/allcrops/Crop_813_2.swf"/>
        <asset id="13309" src="$url/module/ui/allcrops/Crop_813_3.swf"/>
        <asset id="13310" src="$url/module/ui/allcrops/Crop_813_Seed.swf"/>
        <asset id="13300" src="$url/module/ui/allcrops/Crop_814_0.swf"/>
        <asset id="13301" src="$url/module/ui/allcrops/Crop_814_1.swf"/>
        <asset id="13302" src="$url/module/ui/allcrops/Crop_814_2.swf"/>
        <asset id="13303" src="$url/module/ui/allcrops/Crop_814_3.swf"/>
        <asset id="13304" src="$url/module/ui/allcrops/Crop_814_4.swf"/>
        <asset id="13305" src="$url/module/ui/allcrops/Crop_814_Seed.swf"/>
        <asset id="13294" src="$url/module/ui/allcrops/Crop_815_0.swf"/>
        <asset id="13295" src="$url/module/ui/allcrops/Crop_815_1.swf"/>
        <asset id="13296" src="$url/module/ui/allcrops/Crop_815_2.swf"/>
        <asset id="13297" src="$url/module/ui/allcrops/Crop_815_3.swf"/>
        <asset id="13298" src="$url/module/ui/allcrops/Crop_815_4.swf"/>
        <asset id="13299" src="$url/module/ui/allcrops/Crop_815_Seed.swf"/>
        <asset id="13479" src="$url/module/ui/allcrops/Crop_816_0.swf"/>
        <asset id="13480" src="$url/module/ui/allcrops/Crop_816_1.swf"/>
        <asset id="13481" src="$url/module/ui/allcrops/Crop_816_2.swf"/>
        <asset id="13482" src="$url/module/ui/allcrops/Crop_816_3.swf"/>
        <asset id="13483" src="$url/module/ui/allcrops/Crop_816_4.swf"/>
        <asset id="13484" src="$url/module/ui/allcrops/Crop_816_Seed.swf"/>
        <asset id="13485" src="$url/module/ui/allcrops/Crop_817_0.swf"/>
        <asset id="13486" src="$url/module/ui/allcrops/Crop_817_1.swf"/>
        <asset id="13487" src="$url/module/ui/allcrops/Crop_817_2.swf"/>
        <asset id="13488" src="$url/module/ui/allcrops/Crop_817_3.swf"/>
        <asset id="13489" src="$url/module/ui/allcrops/Crop_817_4.swf"/>
        <asset id="13490" src="$url/module/ui/allcrops/Crop_817_Seed.swf"/>
        <asset id="13491" src="$url/module/ui/allcrops/Crop_818_0.swf"/>
        <asset id="13492" src="$url/module/ui/allcrops/Crop_818_1.swf"/>
        <asset id="13493" src="$url/module/ui/allcrops/Crop_818_2.swf"/>
        <asset id="13494" src="$url/module/ui/allcrops/Crop_818_3.swf"/>
        <asset id="13495" src="$url/module/ui/allcrops/Crop_818_4.swf"/>
        <asset id="13496" src="$url/module/ui/allcrops/Crop_818_Seed.swf"/>
        <asset id="13497" src="$url/module/ui/allcrops/Crop_819_0.swf"/>
        <asset id="13498" src="$url/module/ui/allcrops/Crop_819_1.swf"/>
        <asset id="13499" src="$url/module/ui/allcrops/Crop_819_2.swf"/>
        <asset id="13500" src="$url/module/ui/allcrops/Crop_819_3.swf"/>
        <asset id="13501" src="$url/module/ui/allcrops/Crop_819_4.swf"/>
        <asset id="13502" src="$url/module/ui/allcrops/Crop_819_Seed.swf"/>
        <asset id="5740" src="$url/module/ui/allcrops/Crop_81_0.swf"/>
        <asset id="5741" src="$url/module/ui/allcrops/Crop_81_1.swf"/>
        <asset id="5742" src="$url/module/ui/allcrops/Crop_81_2.swf"/>
        <asset id="5743" src="$url/module/ui/allcrops/Crop_81_3.swf"/>
        <asset id="2409" src="$url/module/ui/allcrops/Crop_81_Seed.swf"/>
        <asset id="13503" src="$url/module/ui/allcrops/Crop_820_0.swf"/>
        <asset id="13504" src="$url/module/ui/allcrops/Crop_820_1.swf"/>
        <asset id="13505" src="$url/module/ui/allcrops/Crop_820_2.swf"/>
        <asset id="13506" src="$url/module/ui/allcrops/Crop_820_3.swf"/>
        <asset id="13507" src="$url/module/ui/allcrops/Crop_820_4.swf"/>
        <asset id="13508" src="$url/module/ui/allcrops/Crop_820_Seed.swf"/>
        <asset id="13509" src="$url/module/ui/allcrops/Crop_821_0.swf"/>
        <asset id="13510" src="$url/module/ui/allcrops/Crop_821_1.swf"/>
        <asset id="13511" src="$url/module/ui/allcrops/Crop_821_2.swf"/>
        <asset id="13512" src="$url/module/ui/allcrops/Crop_821_3.swf"/>
        <asset id="13513" src="$url/module/ui/allcrops/Crop_821_4.swf"/>
        <asset id="13514" src="$url/module/ui/allcrops/Crop_821_Seed.swf"/>
        <asset id="13515" src="$url/module/ui/allcrops/Crop_822_0.swf"/>
        <asset id="13516" src="$url/module/ui/allcrops/Crop_822_1.swf"/>
        <asset id="13517" src="$url/module/ui/allcrops/Crop_822_2.swf"/>
        <asset id="13518" src="$url/module/ui/allcrops/Crop_822_3.swf"/>
        <asset id="13519" src="$url/module/ui/allcrops/Crop_822_4.swf"/>
        <asset id="13520" src="$url/module/ui/allcrops/Crop_822_Seed.swf"/>
        <asset id="13521" src="$url/module/ui/allcrops/Crop_823_0.swf"/>
        <asset id="13522" src="$url/module/ui/allcrops/Crop_823_1.swf"/>
        <asset id="13523" src="$url/module/ui/allcrops/Crop_823_2.swf"/>
        <asset id="13524" src="$url/module/ui/allcrops/Crop_823_3.swf"/>
        <asset id="13525" src="$url/module/ui/allcrops/Crop_823_4.swf"/>
        <asset id="13526" src="$url/module/ui/allcrops/Crop_823_Seed.swf"/>
        <asset id="13527" src="$url/module/ui/allcrops/Crop_824_0.swf"/>
        <asset id="13528" src="$url/module/ui/allcrops/Crop_824_1.swf"/>
        <asset id="13529" src="$url/module/ui/allcrops/Crop_824_2.swf"/>
        <asset id="13530" src="$url/module/ui/allcrops/Crop_824_3.swf"/>
        <asset id="13531" src="$url/module/ui/allcrops/Crop_824_4.swf"/>
        <asset id="13532" src="$url/module/ui/allcrops/Crop_824_Seed.swf"/>
        <asset id="13533" src="$url/module/ui/allcrops/Crop_825_0.swf"/>
        <asset id="13534" src="$url/module/ui/allcrops/Crop_825_1.swf"/>
        <asset id="13535" src="$url/module/ui/allcrops/Crop_825_2.swf"/>
        <asset id="13536" src="$url/module/ui/allcrops/Crop_825_3.swf"/>
        <asset id="13537" src="$url/module/ui/allcrops/Crop_825_4.swf"/>
        <asset id="13538" src="$url/module/ui/allcrops/Crop_825_Seed.swf"/>
        <asset id="13539" src="$url/module/ui/allcrops/Crop_826_0.swf"/>
        <asset id="13540" src="$url/module/ui/allcrops/Crop_826_1.swf"/>
        <asset id="13541" src="$url/module/ui/allcrops/Crop_826_2.swf"/>
        <asset id="13542" src="$url/module/ui/allcrops/Crop_826_3.swf"/>
        <asset id="13543" src="$url/module/ui/allcrops/Crop_826_4.swf"/>
        <asset id="13544" src="$url/module/ui/allcrops/Crop_826_Seed.swf"/>
        <asset id="13545" src="$url/module/ui/allcrops/Crop_827_0.swf"/>
        <asset id="13546" src="$url/module/ui/allcrops/Crop_827_1.swf"/>
        <asset id="13547" src="$url/module/ui/allcrops/Crop_827_2.swf"/>
        <asset id="13548" src="$url/module/ui/allcrops/Crop_827_3.swf"/>
        <asset id="13549" src="$url/module/ui/allcrops/Crop_827_4.swf"/>
        <asset id="13550" src="$url/module/ui/allcrops/Crop_827_Seed.swf"/>
        <asset id="13551" src="$url/module/ui/allcrops/Crop_828_0.swf"/>
        <asset id="13552" src="$url/module/ui/allcrops/Crop_828_1.swf"/>
        <asset id="13553" src="$url/module/ui/allcrops/Crop_828_2.swf"/>
        <asset id="13554" src="$url/module/ui/allcrops/Crop_828_3.swf"/>
        <asset id="13555" src="$url/module/ui/allcrops/Crop_828_4.swf"/>
        <asset id="13556" src="$url/module/ui/allcrops/Crop_828_Seed.swf"/>
        <asset id="13557" src="$url/module/ui/allcrops/Crop_829_0.swf"/>
        <asset id="13558" src="$url/module/ui/allcrops/Crop_829_1.swf"/>
        <asset id="13559" src="$url/module/ui/allcrops/Crop_829_2.swf"/>
        <asset id="13560" src="$url/module/ui/allcrops/Crop_829_3.swf"/>
        <asset id="13561" src="$url/module/ui/allcrops/Crop_829_4.swf"/>
        <asset id="13562" src="$url/module/ui/allcrops/Crop_829_Seed.swf"/>
        <asset id="5744" src="$url/module/ui/allcrops/Crop_82_1.swf"/>
        <asset id="5745" src="$url/module/ui/allcrops/Crop_82_2.swf"/>
        <asset id="5746" src="$url/module/ui/allcrops/Crop_82_3.swf"/>
        <asset id="2411" src="$url/module/ui/allcrops/Crop_82_Seed.swf"/>
        <asset id="13563" src="$url/module/ui/allcrops/Crop_830_0.swf"/>
        <asset id="13564" src="$url/module/ui/allcrops/Crop_830_1.swf"/>
        <asset id="13565" src="$url/module/ui/allcrops/Crop_830_2.swf"/>
        <asset id="13566" src="$url/module/ui/allcrops/Crop_830_3.swf"/>
        <asset id="13567" src="$url/module/ui/allcrops/Crop_830_4.swf"/>
        <asset id="13568" src="$url/module/ui/allcrops/Crop_830_Seed.swf"/>
        <asset id="13569" src="$url/module/ui/allcrops/Crop_831_0.swf"/>
        <asset id="13570" src="$url/module/ui/allcrops/Crop_831_1.swf"/>
        <asset id="13571" src="$url/module/ui/allcrops/Crop_831_2.swf"/>
        <asset id="13572" src="$url/module/ui/allcrops/Crop_831_3.swf"/>
        <asset id="13573" src="$url/module/ui/allcrops/Crop_831_4.swf"/>
        <asset id="13574" src="$url/module/ui/allcrops/Crop_831_Seed.swf"/>
        <asset id="13650" src="$url/module/ui/allcrops/Crop_832_0.swf"/>
        <asset id="13651" src="$url/module/ui/allcrops/Crop_832_1.swf"/>
        <asset id="13652" src="$url/module/ui/allcrops/Crop_832_2.swf"/>
        <asset id="13653" src="$url/module/ui/allcrops/Crop_832_3.swf"/>
        <asset id="13654" src="$url/module/ui/allcrops/Crop_832_4.swf"/>
        <asset id="13655" src="$url/module/ui/allcrops/Crop_832_Seed.swf"/>
        <asset id="13638" src="$url/module/ui/allcrops/Crop_833_0.swf"/>
        <asset id="13639" src="$url/module/ui/allcrops/Crop_833_1.swf"/>
        <asset id="13640" src="$url/module/ui/allcrops/Crop_833_2.swf"/>
        <asset id="13641" src="$url/module/ui/allcrops/Crop_833_3.swf"/>
        <asset id="13642" src="$url/module/ui/allcrops/Crop_833_4.swf"/>
        <asset id="13643" src="$url/module/ui/allcrops/Crop_833_Seed.swf"/>
        <asset id="13644" src="$url/module/ui/allcrops/Crop_834_0.swf"/>
        <asset id="13645" src="$url/module/ui/allcrops/Crop_834_1.swf"/>
        <asset id="13646" src="$url/module/ui/allcrops/Crop_834_2.swf"/>
        <asset id="13647" src="$url/module/ui/allcrops/Crop_834_3.swf"/>
        <asset id="13648" src="$url/module/ui/allcrops/Crop_834_4.swf"/>
        <asset id="13649" src="$url/module/ui/allcrops/Crop_834_Seed.swf"/>
        <asset id="13632" src="$url/module/ui/allcrops/Crop_835_0.swf"/>
        <asset id="13633" src="$url/module/ui/allcrops/Crop_835_1.swf"/>
        <asset id="13634" src="$url/module/ui/allcrops/Crop_835_2.swf"/>
        <asset id="13635" src="$url/module/ui/allcrops/Crop_835_3.swf"/>
        <asset id="13636" src="$url/module/ui/allcrops/Crop_835_4.swf"/>
        <asset id="13637" src="$url/module/ui/allcrops/Crop_835_Seed.swf"/>
        <asset id="5747" src="$url/module/ui/allcrops/Crop_83_0.swf"/>
        <asset id="5748" src="$url/module/ui/allcrops/Crop_83_1.swf"/>
        <asset id="5749" src="$url/module/ui/allcrops/Crop_83_2.swf"/>
        <asset id="5750" src="$url/module/ui/allcrops/Crop_83_3.swf"/>
        <asset id="2413" src="$url/module/ui/allcrops/Crop_83_Seed.swf"/>
        <asset id="13247" src="$url/module/ui/allcrops/Crop_848_0.swf"/>
        <asset id="13248" src="$url/module/ui/allcrops/Crop_848_1.swf"/>
        <asset id="13249" src="$url/module/ui/allcrops/Crop_848_2.swf"/>
        <asset id="13250" src="$url/module/ui/allcrops/Crop_848_3.swf"/>
        <asset id="13251" src="$url/module/ui/allcrops/Crop_848_4.swf"/>
        <asset id="13252" src="$url/module/ui/allcrops/Crop_848_Seed.swf"/>
        <asset id="13277" src="$url/module/ui/allcrops/Crop_849_0.swf"/>
        <asset id="13278" src="$url/module/ui/allcrops/Crop_849_1.swf"/>
        <asset id="13279" src="$url/module/ui/allcrops/Crop_849_2.swf"/>
        <asset id="13280" src="$url/module/ui/allcrops/Crop_849_3.swf"/>
        <asset id="13281" src="$url/module/ui/allcrops/Crop_849_4.swf"/>
        <asset id="13282" src="$url/module/ui/allcrops/Crop_849_Seed.swf"/>
        <asset id="5751" src="$url/module/ui/allcrops/Crop_84_0.swf"/>
        <asset id="5752" src="$url/module/ui/allcrops/Crop_84_1.swf"/>
        <asset id="5753" src="$url/module/ui/allcrops/Crop_84_2.swf"/>
        <asset id="5754" src="$url/module/ui/allcrops/Crop_84_3.swf"/>
        <asset id="2415" src="$url/module/ui/allcrops/Crop_84_Seed.swf"/>
        <asset id="13283" src="$url/module/ui/allcrops/Crop_850_0.swf"/>
        <asset id="13284" src="$url/module/ui/allcrops/Crop_850_1.swf"/>
        <asset id="13285" src="$url/module/ui/allcrops/Crop_850_2.swf"/>
        <asset id="13286" src="$url/module/ui/allcrops/Crop_850_3.swf"/>
        <asset id="13287" src="$url/module/ui/allcrops/Crop_850_4.swf"/>
        <asset id="13288" src="$url/module/ui/allcrops/Crop_850_Seed.swf"/>
        <asset id="27027" src="$url/module/ui/allcrops/Crop_851_0.swf"/>
        <asset id="27028" src="$url/module/ui/allcrops/Crop_851_1.swf"/>
        <asset id="27029" src="$url/module/ui/allcrops/Crop_851_2.swf"/>
        <asset id="27030" src="$url/module/ui/allcrops/Crop_851_3.swf"/>
        <asset id="27025" src="$url/module/ui/allcrops/Crop_851_4.swf"/>
        <asset id="27026" src="$url/module/ui/allcrops/Crop_851_Seed.swf"/>
        <asset id="27199" src="$url/module/ui/allcrops/Crop_852_0.swf"/>
        <asset id="27200" src="$url/module/ui/allcrops/Crop_852_1.swf"/>
        <asset id="27201" src="$url/module/ui/allcrops/Crop_852_2.swf"/>
        <asset id="27202" src="$url/module/ui/allcrops/Crop_852_3.swf"/>
        <asset id="27203" src="$url/module/ui/allcrops/Crop_852_4.swf"/>
        <asset id="27204" src="$url/module/ui/allcrops/Crop_852_Seed.swf"/>
        <asset id="27211" src="$url/module/ui/allcrops/Crop_853_0.swf"/>
        <asset id="27212" src="$url/module/ui/allcrops/Crop_853_1.swf"/>
        <asset id="27213" src="$url/module/ui/allcrops/Crop_853_2.swf"/>
        <asset id="27214" src="$url/module/ui/allcrops/Crop_853_3.swf"/>
        <asset id="27215" src="$url/module/ui/allcrops/Crop_853_4.swf"/>
        <asset id="27216" src="$url/module/ui/allcrops/Crop_853_Seed.swf"/>
        <asset id="27205" src="$url/module/ui/allcrops/Crop_854_0.swf"/>
        <asset id="27206" src="$url/module/ui/allcrops/Crop_854_1.swf"/>
        <asset id="27207" src="$url/module/ui/allcrops/Crop_854_2.swf"/>
        <asset id="27208" src="$url/module/ui/allcrops/Crop_854_3.swf"/>
        <asset id="27209" src="$url/module/ui/allcrops/Crop_854_4.swf"/>
        <asset id="27210" src="$url/module/ui/allcrops/Crop_854_Seed.swf"/>
        <asset id="20409" src="$url/module/ui/allcrops/Crop_855_0.swf"/>
        <asset id="20410" src="$url/module/ui/allcrops/Crop_855_1.swf"/>
        <asset id="20411" src="$url/module/ui/allcrops/Crop_855_2.swf"/>
        <asset id="20412" src="$url/module/ui/allcrops/Crop_855_3.swf"/>
        <asset id="20413" src="$url/module/ui/allcrops/Crop_855_4.swf"/>
        <asset id="20414" src="$url/module/ui/allcrops/Crop_855_Seed.swf"/>
        <asset id="26851" src="$url/module/ui/allcrops/Crop_856_0.swf"/>
        <asset id="26852" src="$url/module/ui/allcrops/Crop_856_1.swf"/>
        <asset id="26853" src="$url/module/ui/allcrops/Crop_856_2.swf"/>
        <asset id="26854" src="$url/module/ui/allcrops/Crop_856_3.swf"/>
        <asset id="26855" src="$url/module/ui/allcrops/Crop_856_4.swf"/>
        <asset id="26856" src="$url/module/ui/allcrops/Crop_856_Seed.swf"/>
        <asset id="20525" src="$url/module/ui/allcrops/Crop_857_0.swf"/>
        <asset id="20526" src="$url/module/ui/allcrops/Crop_857_1.swf"/>
        <asset id="20527" src="$url/module/ui/allcrops/Crop_857_2.swf"/>
        <asset id="20528" src="$url/module/ui/allcrops/Crop_857_3.swf"/>
        <asset id="20529" src="$url/module/ui/allcrops/Crop_857_4.swf"/>
        <asset id="20530" src="$url/module/ui/allcrops/Crop_857_Seed.swf"/>
        <asset id="20537" src="$url/module/ui/allcrops/Crop_858_0.swf"/>
        <asset id="20538" src="$url/module/ui/allcrops/Crop_858_1.swf"/>
        <asset id="20539" src="$url/module/ui/allcrops/Crop_858_2.swf"/>
        <asset id="20540" src="$url/module/ui/allcrops/Crop_858_3.swf"/>
        <asset id="20541" src="$url/module/ui/allcrops/Crop_858_4.swf"/>
        <asset id="20542" src="$url/module/ui/allcrops/Crop_858_Seed.swf"/>
        <asset id="20561" src="$url/module/ui/allcrops/Crop_859_0.swf"/>
        <asset id="20562" src="$url/module/ui/allcrops/Crop_859_1.swf"/>
        <asset id="20563" src="$url/module/ui/allcrops/Crop_859_2.swf"/>
        <asset id="20564" src="$url/module/ui/allcrops/Crop_859_3.swf"/>
        <asset id="20565" src="$url/module/ui/allcrops/Crop_859_4.swf"/>
        <asset id="20566" src="$url/module/ui/allcrops/Crop_859_Seed.swf"/>
        <asset id="5755" src="$url/module/ui/allcrops/Crop_85_0.swf"/>
        <asset id="5756" src="$url/module/ui/allcrops/Crop_85_1.swf"/>
        <asset id="5757" src="$url/module/ui/allcrops/Crop_85_2.swf"/>
        <asset id="5758" src="$url/module/ui/allcrops/Crop_85_3.swf"/>
        <asset id="2417" src="$url/module/ui/allcrops/Crop_85_Seed.swf"/>
        <asset id="20549" src="$url/module/ui/allcrops/Crop_861_0.swf"/>
        <asset id="20550" src="$url/module/ui/allcrops/Crop_861_1.swf"/>
        <asset id="20551" src="$url/module/ui/allcrops/Crop_861_2.swf"/>
        <asset id="20552" src="$url/module/ui/allcrops/Crop_861_3.swf"/>
        <asset id="20553" src="$url/module/ui/allcrops/Crop_861_4.swf"/>
        <asset id="20554" src="$url/module/ui/allcrops/Crop_861_Seed.swf"/>
        <asset id="20519" src="$url/module/ui/allcrops/Crop_862_0.swf"/>
        <asset id="20520" src="$url/module/ui/allcrops/Crop_862_1.swf"/>
        <asset id="20521" src="$url/module/ui/allcrops/Crop_862_2.swf"/>
        <asset id="20522" src="$url/module/ui/allcrops/Crop_862_3.swf"/>
        <asset id="20523" src="$url/module/ui/allcrops/Crop_862_4.swf"/>
        <asset id="20524" src="$url/module/ui/allcrops/Crop_862_Seed.swf"/>
        <asset id="20531" src="$url/module/ui/allcrops/Crop_863_0.swf"/>
        <asset id="20532" src="$url/module/ui/allcrops/Crop_863_1.swf"/>
        <asset id="20533" src="$url/module/ui/allcrops/Crop_863_2.swf"/>
        <asset id="20534" src="$url/module/ui/allcrops/Crop_863_3.swf"/>
        <asset id="20535" src="$url/module/ui/allcrops/Crop_863_4.swf"/>
        <asset id="20536" src="$url/module/ui/allcrops/Crop_863_Seed.swf"/>
        <asset id="20555" src="$url/module/ui/allcrops/Crop_864_0.swf"/>
        <asset id="20556" src="$url/module/ui/allcrops/Crop_864_1.swf"/>
        <asset id="20557" src="$url/module/ui/allcrops/Crop_864_2.swf"/>
        <asset id="20558" src="$url/module/ui/allcrops/Crop_864_3.swf"/>
        <asset id="20559" src="$url/module/ui/allcrops/Crop_864_4.swf"/>
        <asset id="20560" src="$url/module/ui/allcrops/Crop_864_Seed.swf"/>
        <asset id="20567" src="$url/module/ui/allcrops/Crop_865_0.swf"/>
        <asset id="20568" src="$url/module/ui/allcrops/Crop_865_1.swf"/>
        <asset id="20569" src="$url/module/ui/allcrops/Crop_865_2.swf"/>
        <asset id="20570" src="$url/module/ui/allcrops/Crop_865_3.swf"/>
        <asset id="20571" src="$url/module/ui/allcrops/Crop_865_4.swf"/>
        <asset id="20572" src="$url/module/ui/allcrops/Crop_865_Seed.swf"/>
        <asset id="20543" src="$url/module/ui/allcrops/Crop_866_0.swf"/>
        <asset id="20544" src="$url/module/ui/allcrops/Crop_866_1.swf"/>
        <asset id="20545" src="$url/module/ui/allcrops/Crop_866_2.swf"/>
        <asset id="20546" src="$url/module/ui/allcrops/Crop_866_3.swf"/>
        <asset id="20547" src="$url/module/ui/allcrops/Crop_866_4.swf"/>
        <asset id="20548" src="$url/module/ui/allcrops/Crop_866_Seed.swf"/>
        <asset id="5759" src="$url/module/ui/allcrops/Crop_86_0.swf"/>
        <asset id="5760" src="$url/module/ui/allcrops/Crop_86_1.swf"/>
        <asset id="5761" src="$url/module/ui/allcrops/Crop_86_2.swf"/>
        <asset id="5762" src="$url/module/ui/allcrops/Crop_86_3.swf"/>
        <asset id="2419" src="$url/module/ui/allcrops/Crop_86_Seed.swf"/>
        <asset id="20573" src="$url/module/ui/allcrops/Crop_871_0.swf"/>
        <asset id="20574" src="$url/module/ui/allcrops/Crop_871_1.swf"/>
        <asset id="20575" src="$url/module/ui/allcrops/Crop_871_2.swf"/>
        <asset id="20576" src="$url/module/ui/allcrops/Crop_871_3.swf"/>
        <asset id="20577" src="$url/module/ui/allcrops/Crop_871_4.swf"/>
        <asset id="20578" src="$url/module/ui/allcrops/Crop_871_Seed.swf"/>
        <asset id="5763" src="$url/module/ui/allcrops/Crop_87_0.swf"/>
        <asset id="5764" src="$url/module/ui/allcrops/Crop_87_1.swf"/>
        <asset id="5765" src="$url/module/ui/allcrops/Crop_87_2.swf"/>
        <asset id="5766" src="$url/module/ui/allcrops/Crop_87_3.swf"/>
        <asset id="2421" src="$url/module/ui/allcrops/Crop_87_Seed.swf"/>
        <asset id="20585" src="$url/module/ui/allcrops/Crop_883_0.swf"/>
        <asset id="20586" src="$url/module/ui/allcrops/Crop_883_1.swf"/>
        <asset id="20587" src="$url/module/ui/allcrops/Crop_883_2.swf"/>
        <asset id="20588" src="$url/module/ui/allcrops/Crop_883_3.swf"/>
        <asset id="20589" src="$url/module/ui/allcrops/Crop_883_4.swf"/>
        <asset id="20590" src="$url/module/ui/allcrops/Crop_883_Seed.swf"/>
        <asset id="20579" src="$url/module/ui/allcrops/Crop_884_0.swf"/>
        <asset id="20580" src="$url/module/ui/allcrops/Crop_884_1.swf"/>
        <asset id="20581" src="$url/module/ui/allcrops/Crop_884_2.swf"/>
        <asset id="20582" src="$url/module/ui/allcrops/Crop_884_3.swf"/>
        <asset id="20583" src="$url/module/ui/allcrops/Crop_884_4.swf"/>
        <asset id="20584" src="$url/module/ui/allcrops/Crop_884_Seed.swf"/>
        <asset id="26817" src="$url/module/ui/allcrops/Crop_887_0.swf"/>
        <asset id="26818" src="$url/module/ui/allcrops/Crop_887_1.swf"/>
        <asset id="26819" src="$url/module/ui/allcrops/Crop_887_2.swf"/>
        <asset id="26820" src="$url/module/ui/allcrops/Crop_887_3.swf"/>
        <asset id="26821" src="$url/module/ui/allcrops/Crop_887_4.swf"/>
        <asset id="26822" src="$url/module/ui/allcrops/Crop_887_Seed.swf"/>
        <asset id="27426" src="$url/module/ui/allcrops/Crop_888_0.swf"/>
        <asset id="27427" src="$url/module/ui/allcrops/Crop_888_1.swf"/>
        <asset id="27428" src="$url/module/ui/allcrops/Crop_888_2.swf"/>
        <asset id="27429" src="$url/module/ui/allcrops/Crop_888_3.swf"/>
        <asset id="27430" src="$url/module/ui/allcrops/Crop_888_4.swf"/>
        <asset id="27431" src="$url/module/ui/allcrops/Crop_888_Seed.swf"/>
        <asset id="27432" src="$url/module/ui/allcrops/Crop_889_0.swf"/>
        <asset id="27433" src="$url/module/ui/allcrops/Crop_889_1.swf"/>
        <asset id="27434" src="$url/module/ui/allcrops/Crop_889_2.swf"/>
        <asset id="27435" src="$url/module/ui/allcrops/Crop_889_3.swf"/>
        <asset id="27436" src="$url/module/ui/allcrops/Crop_889_4.swf"/>
        <asset id="27437" src="$url/module/ui/allcrops/Crop_889_Seed.swf"/>
        <asset id="5767" src="$url/module/ui/allcrops/Crop_88_0.swf"/>
        <asset id="5768" src="$url/module/ui/allcrops/Crop_88_1.swf"/>
        <asset id="5769" src="$url/module/ui/allcrops/Crop_88_2.swf"/>
        <asset id="5770" src="$url/module/ui/allcrops/Crop_88_3.swf"/>
        <asset id="2423" src="$url/module/ui/allcrops/Crop_88_Seed.swf"/>
        <asset id="27438" src="$url/module/ui/allcrops/Crop_890_0.swf"/>
        <asset id="27439" src="$url/module/ui/allcrops/Crop_890_1.swf"/>
        <asset id="27440" src="$url/module/ui/allcrops/Crop_890_2.swf"/>
        <asset id="27441" src="$url/module/ui/allcrops/Crop_890_3.swf"/>
        <asset id="27442" src="$url/module/ui/allcrops/Crop_890_4.swf"/>
        <asset id="27443" src="$url/module/ui/allcrops/Crop_890_Seed.swf"/>
        <asset id="26891" src="$url/module/ui/allcrops/Crop_894_0.swf"/>
        <asset id="26892" src="$url/module/ui/allcrops/Crop_894_1.swf"/>
        <asset id="26893" src="$url/module/ui/allcrops/Crop_894_2.swf"/>
        <asset id="26894" src="$url/module/ui/allcrops/Crop_894_3.swf"/>
        <asset id="26895" src="$url/module/ui/allcrops/Crop_894_4.swf"/>
        <asset id="26896" src="$url/module/ui/allcrops/Crop_894_Seed.swf"/>
        <asset id="26897" src="$url/module/ui/allcrops/Crop_895_0.swf"/>
        <asset id="26898" src="$url/module/ui/allcrops/Crop_895_1.swf"/>
        <asset id="26899" src="$url/module/ui/allcrops/Crop_895_2.swf"/>
        <asset id="26900" src="$url/module/ui/allcrops/Crop_895_3.swf"/>
        <asset id="26901" src="$url/module/ui/allcrops/Crop_895_4.swf"/>
        <asset id="26902" src="$url/module/ui/allcrops/Crop_895_Seed.swf"/>
        <asset id="26903" src="$url/module/ui/allcrops/Crop_896_0.swf"/>
        <asset id="26904" src="$url/module/ui/allcrops/Crop_896_1.swf"/>
        <asset id="26905" src="$url/module/ui/allcrops/Crop_896_2.swf"/>
        <asset id="26906" src="$url/module/ui/allcrops/Crop_896_3.swf"/>
        <asset id="26907" src="$url/module/ui/allcrops/Crop_896_4.swf"/>
        <asset id="26908" src="$url/module/ui/allcrops/Crop_896_Seed.swf"/>
        <asset id="26909" src="$url/module/ui/allcrops/Crop_897_0.swf"/>
        <asset id="26910" src="$url/module/ui/allcrops/Crop_897_1.swf"/>
        <asset id="26911" src="$url/module/ui/allcrops/Crop_897_2.swf"/>
        <asset id="26912" src="$url/module/ui/allcrops/Crop_897_3.swf"/>
        <asset id="26913" src="$url/module/ui/allcrops/Crop_897_4.swf"/>
        <asset id="26914" src="$url/module/ui/allcrops/Crop_897_Seed.swf"/>
        <asset id="26915" src="$url/module/ui/allcrops/Crop_898_0.swf"/>
        <asset id="26916" src="$url/module/ui/allcrops/Crop_898_1.swf"/>
        <asset id="26917" src="$url/module/ui/allcrops/Crop_898_2.swf"/>
        <asset id="26918" src="$url/module/ui/allcrops/Crop_898_3.swf"/>
        <asset id="26919" src="$url/module/ui/allcrops/Crop_898_4.swf"/>
        <asset id="26920" src="$url/module/ui/allcrops/Crop_898_Seed.swf"/>
        <asset id="26921" src="$url/module/ui/allcrops/Crop_899_0.swf"/>
        <asset id="26922" src="$url/module/ui/allcrops/Crop_899_1.swf"/>
        <asset id="26923" src="$url/module/ui/allcrops/Crop_899_2.swf"/>
        <asset id="26924" src="$url/module/ui/allcrops/Crop_899_3.swf"/>
        <asset id="26925" src="$url/module/ui/allcrops/Crop_899_4.swf"/>
        <asset id="26926" src="$url/module/ui/allcrops/Crop_899_Seed.swf"/>
        <asset id="5771" src="$url/module/ui/allcrops/Crop_89_0.swf"/>
        <asset id="5772" src="$url/module/ui/allcrops/Crop_89_1.swf"/>
        <asset id="5773" src="$url/module/ui/allcrops/Crop_89_2.swf"/>
        <asset id="5774" src="$url/module/ui/allcrops/Crop_89_3.swf"/>
        <asset id="2425" src="$url/module/ui/allcrops/Crop_89_Seed.swf"/>
        <asset id="5499" src="$url/module/ui/allcrops/Crop_8_1.swf"/>
        <asset id="5500" src="$url/module/ui/allcrops/Crop_8_2.swf"/>
        <asset id="5501" src="$url/module/ui/allcrops/Crop_8_3.swf"/>
        <asset id="2267" src="$url/module/ui/allcrops/Crop_8_Seed.swf"/>
        <asset id="26927" src="$url/module/ui/allcrops/Crop_900_0.swf"/>
        <asset id="26928" src="$url/module/ui/allcrops/Crop_900_1.swf"/>
        <asset id="26929" src="$url/module/ui/allcrops/Crop_900_2.swf"/>
        <asset id="26930" src="$url/module/ui/allcrops/Crop_900_3.swf"/>
        <asset id="26931" src="$url/module/ui/allcrops/Crop_900_4.swf"/>
        <asset id="26932" src="$url/module/ui/allcrops/Crop_900_Seed.swf"/>
        <asset id="26933" src="$url/module/ui/allcrops/Crop_901_0.swf"/>
        <asset id="26934" src="$url/module/ui/allcrops/Crop_901_1.swf"/>
        <asset id="26935" src="$url/module/ui/allcrops/Crop_901_2.swf"/>
        <asset id="26936" src="$url/module/ui/allcrops/Crop_901_3.swf"/>
        <asset id="26937" src="$url/module/ui/allcrops/Crop_901_4.swf"/>
        <asset id="26938" src="$url/module/ui/allcrops/Crop_901_Seed.swf"/>
        <asset id="26939" src="$url/module/ui/allcrops/Crop_902_0.swf"/>
        <asset id="26940" src="$url/module/ui/allcrops/Crop_902_1.swf"/>
        <asset id="26941" src="$url/module/ui/allcrops/Crop_902_2.swf"/>
        <asset id="26942" src="$url/module/ui/allcrops/Crop_902_3.swf"/>
        <asset id="26943" src="$url/module/ui/allcrops/Crop_902_4.swf"/>
        <asset id="26944" src="$url/module/ui/allcrops/Crop_902_Seed.swf"/>
        <asset id="26945" src="$url/module/ui/allcrops/Crop_903_0.swf"/>
        <asset id="26946" src="$url/module/ui/allcrops/Crop_903_1.swf"/>
        <asset id="26947" src="$url/module/ui/allcrops/Crop_903_2.swf"/>
        <asset id="26948" src="$url/module/ui/allcrops/Crop_903_3.swf"/>
        <asset id="26949" src="$url/module/ui/allcrops/Crop_903_4.swf"/>
        <asset id="26950" src="$url/module/ui/allcrops/Crop_903_Seed.swf"/>
        <asset id="26951" src="$url/module/ui/allcrops/Crop_904_0.swf"/>
        <asset id="26952" src="$url/module/ui/allcrops/Crop_904_1.swf"/>
        <asset id="26953" src="$url/module/ui/allcrops/Crop_904_2.swf"/>
        <asset id="26954" src="$url/module/ui/allcrops/Crop_904_3.swf"/>
        <asset id="26955" src="$url/module/ui/allcrops/Crop_904_4.swf"/>
        <asset id="26956" src="$url/module/ui/allcrops/Crop_904_Seed.swf"/>
        <asset id="26957" src="$url/module/ui/allcrops/Crop_905_0.swf"/>
        <asset id="26958" src="$url/module/ui/allcrops/Crop_905_1.swf"/>
        <asset id="26959" src="$url/module/ui/allcrops/Crop_905_2.swf"/>
        <asset id="26960" src="$url/module/ui/allcrops/Crop_905_3.swf"/>
        <asset id="26961" src="$url/module/ui/allcrops/Crop_905_4.swf"/>
        <asset id="26962" src="$url/module/ui/allcrops/Crop_905_Seed.swf"/>
        <asset id="26963" src="$url/module/ui/allcrops/Crop_906_0.swf"/>
        <asset id="26964" src="$url/module/ui/allcrops/Crop_906_1.swf"/>
        <asset id="26965" src="$url/module/ui/allcrops/Crop_906_2.swf"/>
        <asset id="26966" src="$url/module/ui/allcrops/Crop_906_3.swf"/>
        <asset id="26967" src="$url/module/ui/allcrops/Crop_906_4.swf"/>
        <asset id="26968" src="$url/module/ui/allcrops/Crop_906_Seed.swf"/>
        <asset id="26969" src="$url/module/ui/allcrops/Crop_907_0.swf"/>
        <asset id="26970" src="$url/module/ui/allcrops/Crop_907_1.swf"/>
        <asset id="26971" src="$url/module/ui/allcrops/Crop_907_2.swf"/>
        <asset id="26972" src="$url/module/ui/allcrops/Crop_907_3.swf"/>
        <asset id="26973" src="$url/module/ui/allcrops/Crop_907_4.swf"/>
        <asset id="26974" src="$url/module/ui/allcrops/Crop_907_Seed.swf"/>
        <asset id="26975" src="$url/module/ui/allcrops/Crop_908_0.swf"/>
        <asset id="26976" src="$url/module/ui/allcrops/Crop_908_1.swf"/>
        <asset id="26977" src="$url/module/ui/allcrops/Crop_908_2.swf"/>
        <asset id="26978" src="$url/module/ui/allcrops/Crop_908_3.swf"/>
        <asset id="26979" src="$url/module/ui/allcrops/Crop_908_4.swf"/>
        <asset id="26980" src="$url/module/ui/allcrops/Crop_908_Seed.swf"/>
        <asset id="26981" src="$url/module/ui/allcrops/Crop_909_0.swf"/>
        <asset id="26982" src="$url/module/ui/allcrops/Crop_909_1.swf"/>
        <asset id="26983" src="$url/module/ui/allcrops/Crop_909_2.swf"/>
        <asset id="26984" src="$url/module/ui/allcrops/Crop_909_3.swf"/>
        <asset id="26985" src="$url/module/ui/allcrops/Crop_909_4.swf"/>
        <asset id="26986" src="$url/module/ui/allcrops/Crop_909_Seed.swf"/>
        <asset id="5775" src="$url/module/ui/allcrops/Crop_90_0.swf"/>
        <asset id="5776" src="$url/module/ui/allcrops/Crop_90_1.swf"/>
        <asset id="5777" src="$url/module/ui/allcrops/Crop_90_2.swf"/>
        <asset id="5778" src="$url/module/ui/allcrops/Crop_90_3.swf"/>
        <asset id="2427" src="$url/module/ui/allcrops/Crop_90_Seed.swf"/>
        <asset id="26987" src="$url/module/ui/allcrops/Crop_910_0.swf"/>
        <asset id="26988" src="$url/module/ui/allcrops/Crop_910_1.swf"/>
        <asset id="26989" src="$url/module/ui/allcrops/Crop_910_2.swf"/>
        <asset id="26990" src="$url/module/ui/allcrops/Crop_910_3.swf"/>
        <asset id="26991" src="$url/module/ui/allcrops/Crop_910_4.swf"/>
        <asset id="26992" src="$url/module/ui/allcrops/Crop_910_Seed.swf"/>
        <asset id="26993" src="$url/module/ui/allcrops/Crop_911_0.swf"/>
        <asset id="26994" src="$url/module/ui/allcrops/Crop_911_1.swf"/>
        <asset id="26995" src="$url/module/ui/allcrops/Crop_911_2.swf"/>
        <asset id="26996" src="$url/module/ui/allcrops/Crop_911_3.swf"/>
        <asset id="26997" src="$url/module/ui/allcrops/Crop_911_4.swf"/>
        <asset id="26998" src="$url/module/ui/allcrops/Crop_911_Seed.swf"/>
        <asset id="26999" src="$url/module/ui/allcrops/Crop_912_0.swf"/>
        <asset id="27000" src="$url/module/ui/allcrops/Crop_912_1.swf"/>
        <asset id="27001" src="$url/module/ui/allcrops/Crop_912_2.swf"/>
        <asset id="27002" src="$url/module/ui/allcrops/Crop_912_3.swf"/>
        <asset id="27003" src="$url/module/ui/allcrops/Crop_912_4.swf"/>
        <asset id="27004" src="$url/module/ui/allcrops/Crop_912_Seed.swf"/>
        <asset id="27005" src="$url/module/ui/allcrops/Crop_913_0.swf"/>
        <asset id="27006" src="$url/module/ui/allcrops/Crop_913_1.swf"/>
        <asset id="27007" src="$url/module/ui/allcrops/Crop_913_2.swf"/>
        <asset id="27008" src="$url/module/ui/allcrops/Crop_913_3.swf"/>
        <asset id="27009" src="$url/module/ui/allcrops/Crop_913_4.swf"/>
        <asset id="27010" src="$url/module/ui/allcrops/Crop_913_Seed.swf"/>
        <asset id="27011" src="$url/module/ui/allcrops/Crop_914_0.swf"/>
        <asset id="27012" src="$url/module/ui/allcrops/Crop_914_1.swf"/>
        <asset id="27013" src="$url/module/ui/allcrops/Crop_914_2.swf"/>
        <asset id="27014" src="$url/module/ui/allcrops/Crop_914_3.swf"/>
        <asset id="27015" src="$url/module/ui/allcrops/Crop_914_4.swf"/>
        <asset id="27016" src="$url/module/ui/allcrops/Crop_914_Seed.swf"/>
        <asset id="27017" src="$url/module/ui/allcrops/Crop_915_0.swf"/>
        <asset id="27018" src="$url/module/ui/allcrops/Crop_915_1.swf"/>
        <asset id="27019" src="$url/module/ui/allcrops/Crop_915_2.swf"/>
        <asset id="27020" src="$url/module/ui/allcrops/Crop_915_3.swf"/>
        <asset id="27021" src="$url/module/ui/allcrops/Crop_915_4.swf"/>
        <asset id="27022" src="$url/module/ui/allcrops/Crop_915_Seed.swf"/>
        <asset id="27444" src="$url/module/ui/allcrops/Crop_916_0.swf"/>
        <asset id="27445" src="$url/module/ui/allcrops/Crop_916_1.swf"/>
        <asset id="27446" src="$url/module/ui/allcrops/Crop_916_2.swf"/>
        <asset id="27447" src="$url/module/ui/allcrops/Crop_916_3.swf"/>
        <asset id="27448" src="$url/module/ui/allcrops/Crop_916_4.swf"/>
        <asset id="27449" src="$url/module/ui/allcrops/Crop_916_Seed.swf"/>
        <asset id="27450" src="$url/module/ui/allcrops/Crop_917_0.swf"/>
        <asset id="27451" src="$url/module/ui/allcrops/Crop_917_1.swf"/>
        <asset id="27452" src="$url/module/ui/allcrops/Crop_917_2.swf"/>
        <asset id="27453" src="$url/module/ui/allcrops/Crop_917_3.swf"/>
        <asset id="27454" src="$url/module/ui/allcrops/Crop_917_4.swf"/>
        <asset id="27455" src="$url/module/ui/allcrops/Crop_917_Seed.swf"/>
        <asset id="27456" src="$url/module/ui/allcrops/Crop_918_0.swf"/>
        <asset id="27457" src="$url/module/ui/allcrops/Crop_918_1.swf"/>
        <asset id="27458" src="$url/module/ui/allcrops/Crop_918_2.swf"/>
        <asset id="27459" src="$url/module/ui/allcrops/Crop_918_3.swf"/>
        <asset id="27460" src="$url/module/ui/allcrops/Crop_918_4.swf"/>
        <asset id="27461" src="$url/module/ui/allcrops/Crop_918_Seed.swf"/>
        <asset id="27462" src="$url/module/ui/allcrops/Crop_919_0.swf"/>
        <asset id="27463" src="$url/module/ui/allcrops/Crop_919_1.swf"/>
        <asset id="27464" src="$url/module/ui/allcrops/Crop_919_2.swf"/>
        <asset id="27465" src="$url/module/ui/allcrops/Crop_919_3.swf"/>
        <asset id="27466" src="$url/module/ui/allcrops/Crop_919_4.swf"/>
        <asset id="27467" src="$url/module/ui/allcrops/Crop_919_Seed.swf"/>
        <asset id="5779" src="$url/module/ui/allcrops/Crop_91_0.swf"/>
        <asset id="5780" src="$url/module/ui/allcrops/Crop_91_1.swf"/>
        <asset id="5781" src="$url/module/ui/allcrops/Crop_91_2.swf"/>
        <asset id="5782" src="$url/module/ui/allcrops/Crop_91_3.swf"/>
        <asset id="2429" src="$url/module/ui/allcrops/Crop_91_Seed.swf"/>
        <asset id="27468" src="$url/module/ui/allcrops/Crop_920_0.swf"/>
        <asset id="27469" src="$url/module/ui/allcrops/Crop_920_1.swf"/>
        <asset id="27470" src="$url/module/ui/allcrops/Crop_920_2.swf"/>
        <asset id="27471" src="$url/module/ui/allcrops/Crop_920_3.swf"/>
        <asset id="27472" src="$url/module/ui/allcrops/Crop_920_4.swf"/>
        <asset id="27473" src="$url/module/ui/allcrops/Crop_920_Seed.swf"/>
        <asset id="27250" src="$url/module/ui/allcrops/Crop_921_0.swf"/>
        <asset id="27251" src="$url/module/ui/allcrops/Crop_921_1.swf"/>
        <asset id="27252" src="$url/module/ui/allcrops/Crop_921_2.swf"/>
        <asset id="27253" src="$url/module/ui/allcrops/Crop_921_3.swf"/>
        <asset id="27254" src="$url/module/ui/allcrops/Crop_921_4.swf"/>
        <asset id="27255" src="$url/module/ui/allcrops/Crop_921_Seed.swf"/>
        <asset id="27244" src="$url/module/ui/allcrops/Crop_922_0.swf"/>
        <asset id="27245" src="$url/module/ui/allcrops/Crop_922_1.swf"/>
        <asset id="27246" src="$url/module/ui/allcrops/Crop_922_2.swf"/>
        <asset id="27247" src="$url/module/ui/allcrops/Crop_922_3.swf"/>
        <asset id="27248" src="$url/module/ui/allcrops/Crop_922_4.swf"/>
        <asset id="27249" src="$url/module/ui/allcrops/Crop_922_Seed.swf"/>
        <asset id="27232" src="$url/module/ui/allcrops/Crop_923_0.swf"/>
        <asset id="27233" src="$url/module/ui/allcrops/Crop_923_1.swf"/>
        <asset id="27234" src="$url/module/ui/allcrops/Crop_923_2.swf"/>
        <asset id="27235" src="$url/module/ui/allcrops/Crop_923_3.swf"/>
        <asset id="27236" src="$url/module/ui/allcrops/Crop_923_4.swf"/>
        <asset id="27237" src="$url/module/ui/allcrops/Crop_923_Seed.swf"/>
        <asset id="27238" src="$url/module/ui/allcrops/Crop_924_0.swf"/>
        <asset id="27239" src="$url/module/ui/allcrops/Crop_924_1.swf"/>
        <asset id="27240" src="$url/module/ui/allcrops/Crop_924_2.swf"/>
        <asset id="27241" src="$url/module/ui/allcrops/Crop_924_3.swf"/>
        <asset id="27242" src="$url/module/ui/allcrops/Crop_924_4.swf"/>
        <asset id="27243" src="$url/module/ui/allcrops/Crop_924_Seed.swf"/>
        <asset id="5783" src="$url/module/ui/allcrops/Crop_92_1.swf"/>
        <asset id="5784" src="$url/module/ui/allcrops/Crop_92_2.swf"/>
        <asset id="5785" src="$url/module/ui/allcrops/Crop_92_3.swf"/>
        <asset id="2431" src="$url/module/ui/allcrops/Crop_92_Seed.swf"/>
        <asset id="27921" src="$url/module/ui/allcrops/Crop_933_0.swf"/>
        <asset id="27922" src="$url/module/ui/allcrops/Crop_933_1.swf"/>
        <asset id="27923" src="$url/module/ui/allcrops/Crop_933_2.swf"/>
        <asset id="27924" src="$url/module/ui/allcrops/Crop_933_3.swf"/>
        <asset id="27925" src="$url/module/ui/allcrops/Crop_933_4.swf"/>
        <asset id="27926" src="$url/module/ui/allcrops/Crop_933_Seed.swf"/>
        <asset id="27927" src="$url/module/ui/allcrops/Crop_934_0.swf"/>
        <asset id="27928" src="$url/module/ui/allcrops/Crop_934_1.swf"/>
        <asset id="27929" src="$url/module/ui/allcrops/Crop_934_2.swf"/>
        <asset id="27930" src="$url/module/ui/allcrops/Crop_934_3.swf"/>
        <asset id="27931" src="$url/module/ui/allcrops/Crop_934_4.swf"/>
        <asset id="27932" src="$url/module/ui/allcrops/Crop_934_Seed.swf"/>
        <asset id="27939" src="$url/module/ui/allcrops/Crop_935_0.swf"/>
        <asset id="27940" src="$url/module/ui/allcrops/Crop_935_1.swf"/>
        <asset id="27941" src="$url/module/ui/allcrops/Crop_935_2.swf"/>
        <asset id="27942" src="$url/module/ui/allcrops/Crop_935_3.swf"/>
        <asset id="27943" src="$url/module/ui/allcrops/Crop_935_4.swf"/>
        <asset id="27944" src="$url/module/ui/allcrops/Crop_935_Seed.swf"/>
        <asset id="27842" src="$url/module/ui/allcrops/Crop_936_0.swf"/>
        <asset id="27843" src="$url/module/ui/allcrops/Crop_936_1.swf"/>
        <asset id="27844" src="$url/module/ui/allcrops/Crop_936_2.swf"/>
        <asset id="27845" src="$url/module/ui/allcrops/Crop_936_3.swf"/>
        <asset id="27846" src="$url/module/ui/allcrops/Crop_936_4.swf"/>
        <asset id="27847" src="$url/module/ui/allcrops/Crop_936_Seed.swf"/>
        <asset id="27828" src="$url/module/ui/allcrops/Crop_937_0.swf"/>
        <asset id="27829" src="$url/module/ui/allcrops/Crop_937_1.swf"/>
        <asset id="27830" src="$url/module/ui/allcrops/Crop_937_2.swf"/>
        <asset id="27831" src="$url/module/ui/allcrops/Crop_937_3.swf"/>
        <asset id="27832" src="$url/module/ui/allcrops/Crop_937_4.swf"/>
        <asset id="27833" src="$url/module/ui/allcrops/Crop_937_Seed.swf"/>
        <asset id="27848" src="$url/module/ui/allcrops/Crop_938_0.swf"/>
        <asset id="27849" src="$url/module/ui/allcrops/Crop_938_1.swf"/>
        <asset id="27850" src="$url/module/ui/allcrops/Crop_938_2.swf"/>
        <asset id="27851" src="$url/module/ui/allcrops/Crop_938_3.swf"/>
        <asset id="27852" src="$url/module/ui/allcrops/Crop_938_4.swf"/>
        <asset id="27853" src="$url/module/ui/allcrops/Crop_938_Seed.swf"/>
        <asset id="27854" src="$url/module/ui/allcrops/Crop_939_0.swf"/>
        <asset id="27855" src="$url/module/ui/allcrops/Crop_939_1.swf"/>
        <asset id="27856" src="$url/module/ui/allcrops/Crop_939_2.swf"/>
        <asset id="27857" src="$url/module/ui/allcrops/Crop_939_3.swf"/>
        <asset id="27858" src="$url/module/ui/allcrops/Crop_939_4.swf"/>
        <asset id="27859" src="$url/module/ui/allcrops/Crop_939_Seed.swf"/>
        <asset id="5786" src="$url/module/ui/allcrops/Crop_93_0.swf"/>
        <asset id="5787" src="$url/module/ui/allcrops/Crop_93_1.swf"/>
        <asset id="5788" src="$url/module/ui/allcrops/Crop_93_2.swf"/>
        <asset id="5789" src="$url/module/ui/allcrops/Crop_93_3.swf"/>
        <asset id="2433" src="$url/module/ui/allcrops/Crop_93_Seed.swf"/>
        <asset id="27872" src="$url/module/ui/allcrops/Crop_940_0.swf"/>
        <asset id="27873" src="$url/module/ui/allcrops/Crop_940_1.swf"/>
        <asset id="27874" src="$url/module/ui/allcrops/Crop_940_2.swf"/>
        <asset id="27875" src="$url/module/ui/allcrops/Crop_940_3.swf"/>
        <asset id="27876" src="$url/module/ui/allcrops/Crop_940_4.swf"/>
        <asset id="27877" src="$url/module/ui/allcrops/Crop_940_Seed.swf"/>
        <asset id="27860" src="$url/module/ui/allcrops/Crop_941_0.swf"/>
        <asset id="27861" src="$url/module/ui/allcrops/Crop_941_1.swf"/>
        <asset id="27862" src="$url/module/ui/allcrops/Crop_941_2.swf"/>
        <asset id="27863" src="$url/module/ui/allcrops/Crop_941_3.swf"/>
        <asset id="27864" src="$url/module/ui/allcrops/Crop_941_4.swf"/>
        <asset id="27865" src="$url/module/ui/allcrops/Crop_941_Seed.swf"/>
        <asset id="27866" src="$url/module/ui/allcrops/Crop_942_0.swf"/>
        <asset id="27867" src="$url/module/ui/allcrops/Crop_942_1.swf"/>
        <asset id="27868" src="$url/module/ui/allcrops/Crop_942_2.swf"/>
        <asset id="27869" src="$url/module/ui/allcrops/Crop_942_3.swf"/>
        <asset id="27870" src="$url/module/ui/allcrops/Crop_942_4.swf"/>
        <asset id="27871" src="$url/module/ui/allcrops/Crop_942_Seed.swf"/>
        <asset id="5790" src="$url/module/ui/allcrops/Crop_94_1.swf"/>
        <asset id="5791" src="$url/module/ui/allcrops/Crop_94_2.swf"/>
        <asset id="5792" src="$url/module/ui/allcrops/Crop_94_3.swf"/>
        <asset id="2435" src="$url/module/ui/allcrops/Crop_94_Seed.swf"/>
        <asset id="28107" src="$url/module/ui/allcrops/Crop_951_0.swf"/>
        <asset id="28108" src="$url/module/ui/allcrops/Crop_951_1.swf"/>
        <asset id="28109" src="$url/module/ui/allcrops/Crop_951_2.swf"/>
        <asset id="28110" src="$url/module/ui/allcrops/Crop_951_3.swf"/>
        <asset id="28111" src="$url/module/ui/allcrops/Crop_951_4.swf"/>
        <asset id="28112" src="$url/module/ui/allcrops/Crop_951_Seed.swf"/>
        <asset id="28089" src="$url/module/ui/allcrops/Crop_952_0.swf"/>
        <asset id="28090" src="$url/module/ui/allcrops/Crop_952_1.swf"/>
        <asset id="28091" src="$url/module/ui/allcrops/Crop_952_2.swf"/>
        <asset id="28092" src="$url/module/ui/allcrops/Crop_952_3.swf"/>
        <asset id="28093" src="$url/module/ui/allcrops/Crop_952_4.swf"/>
        <asset id="28094" src="$url/module/ui/allcrops/Crop_952_Seed.swf"/>
        <asset id="28095" src="$url/module/ui/allcrops/Crop_953_0.swf"/>
        <asset id="28096" src="$url/module/ui/allcrops/Crop_953_1.swf"/>
        <asset id="28097" src="$url/module/ui/allcrops/Crop_953_2.swf"/>
        <asset id="28098" src="$url/module/ui/allcrops/Crop_953_3.swf"/>
        <asset id="28099" src="$url/module/ui/allcrops/Crop_953_4.swf"/>
        <asset id="28100" src="$url/module/ui/allcrops/Crop_953_Seed.swf"/>
        <asset id="28101" src="$url/module/ui/allcrops/Crop_954_0.swf"/>
        <asset id="28102" src="$url/module/ui/allcrops/Crop_954_1.swf"/>
        <asset id="28103" src="$url/module/ui/allcrops/Crop_954_2.swf"/>
        <asset id="28104" src="$url/module/ui/allcrops/Crop_954_3.swf"/>
        <asset id="28105" src="$url/module/ui/allcrops/Crop_954_4.swf"/>
        <asset id="28106" src="$url/module/ui/allcrops/Crop_954_Seed.swf"/>
        <asset id="28113" src="$url/module/ui/allcrops/Crop_955_0.swf"/>
        <asset id="28114" src="$url/module/ui/allcrops/Crop_955_1.swf"/>
        <asset id="28115" src="$url/module/ui/allcrops/Crop_955_2.swf"/>
        <asset id="28116" src="$url/module/ui/allcrops/Crop_955_3.swf"/>
        <asset id="28117" src="$url/module/ui/allcrops/Crop_955_4.swf"/>
        <asset id="28118" src="$url/module/ui/allcrops/Crop_955_Seed.swf"/>
        <asset id="28083" src="$url/module/ui/allcrops/Crop_956_0.swf"/>
        <asset id="28084" src="$url/module/ui/allcrops/Crop_956_1.swf"/>
        <asset id="28085" src="$url/module/ui/allcrops/Crop_956_2.swf"/>
        <asset id="28086" src="$url/module/ui/allcrops/Crop_956_3.swf"/>
        <asset id="28087" src="$url/module/ui/allcrops/Crop_956_4.swf"/>
        <asset id="28088" src="$url/module/ui/allcrops/Crop_956_Seed.swf"/>
        <asset id="5793" src="$url/module/ui/allcrops/Crop_95_1.swf"/>
        <asset id="5794" src="$url/module/ui/allcrops/Crop_95_2.swf"/>
        <asset id="5795" src="$url/module/ui/allcrops/Crop_95_3.swf"/>
        <asset id="2437" src="$url/module/ui/allcrops/Crop_95_Seed.swf"/>
        <asset id="5796" src="$url/module/ui/allcrops/Crop_96_1.swf"/>
        <asset id="5797" src="$url/module/ui/allcrops/Crop_96_2.swf"/>
        <asset id="5798" src="$url/module/ui/allcrops/Crop_96_3.swf"/>
        <asset id="2439" src="$url/module/ui/allcrops/Crop_96_Seed.swf"/>
        <asset id="5799" src="$url/module/ui/allcrops/Crop_97_1.swf"/>
        <asset id="5800" src="$url/module/ui/allcrops/Crop_97_2.swf"/>
        <asset id="5801" src="$url/module/ui/allcrops/Crop_97_3.swf"/>
        <asset id="2441" src="$url/module/ui/allcrops/Crop_97_Seed.swf"/>
        <asset id="5802" src="$url/module/ui/allcrops/Crop_98_1.swf"/>
        <asset id="5803" src="$url/module/ui/allcrops/Crop_98_2.swf"/>
        <asset id="5804" src="$url/module/ui/allcrops/Crop_98_3.swf"/>
        <asset id="2443" src="$url/module/ui/allcrops/Crop_98_Seed.swf"/>
        <asset id="5805" src="$url/module/ui/allcrops/Crop_99_1.swf"/>
        <asset id="5806" src="$url/module/ui/allcrops/Crop_99_2.swf"/>
        <asset id="5807" src="$url/module/ui/allcrops/Crop_99_3.swf"/>
        <asset id="2445" src="$url/module/ui/allcrops/Crop_99_Seed.swf"/>
        <asset id="5502" src="$url/module/ui/allcrops/Crop_9_1.swf"/>
        <asset id="5503" src="$url/module/ui/allcrops/Crop_9_2.swf"/>
        <asset id="5504" src="$url/module/ui/allcrops/Crop_9_3.swf"/>
        <asset id="2269" src="$url/module/ui/allcrops/Crop_9_Seed.swf"/>
        <asset id="7479310" src="$url/module/ui/allcrops/Crop_206_1.swf"/>
        <asset id="7479311" src="$url/module/ui/allcrops/Crop_206_2.swf"/>
        <asset id="7479312" src="$url/module/ui/allcrops/Crop_206_3.swf"/>
        <asset id="7479313" src="$url/module/ui/allcrops/Crop_206_Seed.swf"/>
        <asset id="7479314" src="$url/module/ui/allcrops/Crop_350_1.swf"/>
        <asset id="6413" src="$url/module/ui/allcrops/Crop_350_2.swf"/>
        <asset id="7479315" src="$url/module/ui/allcrops/Crop_350_3.swf"/>
	    <asset id="5273" src="$url/module/ui/allcrops/Crop_350_Seed.swf"/>
        <asset id="7479317" src="$url/module/ui/allcrops/Crop_1000_1.swf"/>
        <asset id="7479318" src="$url/module/ui/allcrops/Crop_1000_2.swf"/>
        <asset id="7479319" src="$url/module/ui/allcrops/Crop_1000_3.swf"/>
        <asset id="7479320" src="$url/module/ui/allcrops/Crop_1000_Seed.swf"/>
        <asset id="7479322" src="$url/module/ui/allcrops/Crop_1001_1.swf"/>
        <asset id="7479323" src="$url/module/ui/allcrops/Crop_1001_2.swf"/>
        <asset id="7479324" src="$url/module/ui/allcrops/Crop_1001_3.swf"/>
        <asset id="7479325" src="$url/module/ui/allcrops/Crop_1001_Seed.swf"/>
        <asset id="7479327" src="$url/module/ui/allcrops/Crop_1002_1.swf"/>
        <asset id="7479328" src="$url/module/ui/allcrops/Crop_1002_2.swf"/>
        <asset id="7479329" src="$url/module/ui/allcrops/Crop_1002_3.swf"/>
        <asset id="7479330" src="$url/module/ui/allcrops/Crop_1002_Seed.swf"/>
        <asset id="7479332" src="$url/module/ui/allcrops/Crop_1003_1.swf"/>
        <asset id="7479333" src="$url/module/ui/allcrops/Crop_1003_2.swf"/>
        <asset id="7479334" src="$url/module/ui/allcrops/Crop_1003_3.swf"/>>
        <asset id="7479335" src="$url/module/ui/allcrops/Crop_1003_Seed.swf"/>
        <asset id="7479337" src="$url/module/ui/allcrops/Crop_1004_1.swf"/>
        <asset id="7479338" src="$url/module/ui/allcrops/Crop_1004_2.swf"/>
        <asset id="7479339" src="$url/module/ui/allcrops/Crop_1004_3.swf"/>
        <asset id="7479340" src="$url/module/ui/allcrops/Crop_1004_Seed.swf"/>
        <asset id="7479342" src="$url/module/ui/allcrops/Crop_1005_1.swf"/>
        <asset id="7479343" src="$url/module/ui/allcrops/Crop_1005_2.swf"/>
        <asset id="7479344" src="$url/module/ui/allcrops/Crop_1005_3.swf"/>
        <asset id="7479345" src="$url/module/ui/allcrops/Crop_1005_Seed.swf"/>
        <asset id="7479347" src="$url/module/ui/allcrops/Crop_1006_1.swf"/>
        <asset id="7479348" src="$url/module/ui/allcrops/Crop_1006_2.swf"/>
        <asset id="7479349" src="$url/module/ui/allcrops/Crop_1006_3.swf"/>
        <asset id="7479350" src="$url/module/ui/allcrops/Crop_1006_Seed.swf"/>
        <asset id="7479352" src="$url/module/ui/allcrops/Crop_1007_1.swf"/>
        <asset id="7479353" src="$url/module/ui/allcrops/Crop_1007_2.swf"/>
        <asset id="7479354" src="$url/module/ui/allcrops/Crop_1007_3.swf"/>
        <asset id="7479355" src="$url/module/ui/allcrops/Crop_1007_Seed.swf"/>
        <asset id="7479357" src="$url/module/ui/allcrops/Crop_1008_1.swf"/>
        <asset id="7479358" src="$url/module/ui/allcrops/Crop_1008_2.swf"/>
        <asset id="7479359" src="$url/module/ui/allcrops/Crop_1008_3.swf"/>
        <asset id="7479360" src="$url/module/ui/allcrops/Crop_1008_Seed.swf"/>
        <asset id="7479362" src="$url/module/ui/allcrops/Crop_1009_1.swf"/>
        <asset id="7479363" src="$url/module/ui/allcrops/Crop_1009_2.swf"/>
        <asset id="7479364" src="$url/module/ui/allcrops/Crop_1009_3.swf"/>
        <asset id="7479365" src="$url/module/ui/allcrops/Crop_1009_Seed.swf"/>
        <asset id="7479367" src="$url/module/ui/allcrops/Crop_1010_1.swf"/>
        <asset id="7479368" src="$url/module/ui/allcrops/Crop_1010_2.swf"/>
        <asset id="7479369" src="$url/module/ui/allcrops/Crop_1010_3.swf"/>
        <asset id="7479370" src="$url/module/ui/allcrops/Crop_1010_Seed.swf"/>
        <asset id="7479371" src="$url/module/ui/allcrops/Crop_1011_0.swf"/>
        <asset id="7479372" src="$url/module/ui/allcrops/Crop_1011_1.swf"/>
        <asset id="7479373" src="$url/module/ui/allcrops/Crop_1011_2.swf"/>
        <asset id="7479374" src="$url/module/ui/allcrops/Crop_1011_3.swf"/>
        <asset id="7479375" src="$url/module/ui/allcrops/Crop_1011_Seed.swf"/>
        <asset id="7479377" src="$url/module/ui/allcrops/Crop_1012_1.swf"/>
        <asset id="7479378" src="$url/module/ui/allcrops/Crop_1012_2.swf"/>
        <asset id="7479379" src="$url/module/ui/allcrops/Crop_1012_3.swf"/>
        <asset id="7479380" src="$url/module/ui/allcrops/Crop_1012_Seed.swf"/>
        <asset id="7479382" src="$url/module/ui/allcrops/Crop_1013_1.swf"/>
        <asset id="7479383" src="$url/module/ui/allcrops/Crop_1013_2.swf"/>
        <asset id="7479384" src="$url/module/ui/allcrops/Crop_1013_3.swf"/>
        <asset id="7479385" src="$url/module/ui/allcrops/Crop_1013_Seed.swf"/>
        <asset id="7479387" src="$url/module/ui/allcrops/Crop_1014_1.swf"/>
        <asset id="7479388" src="$url/module/ui/allcrops/Crop_1014_2.swf"/>
        <asset id="7479389" src="$url/module/ui/allcrops/Crop_1014_3.swf"/>
        <asset id="7479390" src="$url/module/ui/allcrops/Crop_1014_Seed.swf"/>
        <asset id="7479392" src="$url/module/ui/allcrops/Crop_1015_1.swf"/>
        <asset id="7479393" src="$url/module/ui/allcrops/Crop_1015_2.swf"/>
        <asset id="7479394" src="$url/module/ui/allcrops/Crop_1015_3.swf"/>
        <asset id="7479395" src="$url/module/ui/allcrops/Crop_1015_Seed.swf"/>
        <asset id="7479397" src="$url/module/ui/allcrops/Crop_1016_1.swf"/>
        <asset id="7479398" src="$url/module/ui/allcrops/Crop_1016_2.swf"/>
        <asset id="7479399" src="$url/module/ui/allcrops/Crop_1016_3.swf"/>
        <asset id="7479400" src="$url/module/ui/allcrops/Crop_1016_Seed.swf"/>
        <asset id="7479401" src="$url/module/ui/allcrops/Crop_1017_0.swf"/>
        <asset id="7479402" src="$url/module/ui/allcrops/Crop_1017_1.swf"/>
        <asset id="7479403" src="$url/module/ui/allcrops/Crop_1017_2.swf"/>
        <asset id="7479404" src="$url/module/ui/allcrops/Crop_1017_3.swf"/>
        <asset id="7479405" src="$url/module/ui/allcrops/Crop_1017_Seed.swf"/>
        <asset id="7479407" src="$url/module/ui/allcrops/Crop_1018_1.swf"/>
        <asset id="7479408" src="$url/module/ui/allcrops/Crop_1018_2.swf"/>
        <asset id="7479409" src="$url/module/ui/allcrops/Crop_1018_3.swf"/>
        <asset id="7479410" src="$url/module/ui/allcrops/Crop_1018_Seed.swf"/>
        <asset id="7479406" src="$url/module/ui/allcrops/Crop_1019_1.swf"/>
        <asset id="7479411" src="$url/module/ui/allcrops/Crop_1019_2.swf"/>
        <asset id="7479412" src="$url/module/ui/allcrops/Crop_1019_3.swf"/>
        <asset id="7479413" src="$url/module/ui/allcrops/Crop_1019_Seed.swf"/>
        <asset id="7479417" src="$url/module/ui/allcrops/Crop_1020_1.swf"/>
        <asset id="7479418" src="$url/module/ui/allcrops/Crop_1020_2.swf"/>
        <asset id="7479419" src="$url/module/ui/allcrops/Crop_1020_3.swf"/>
        <asset id="7479420" src="$url/module/ui/allcrops/Crop_1020_Seed.swf"/>
        <asset id="7479422" src="$url/module/ui/allcrops/Crop_1021_1.swf"/>
        <asset id="7479423" src="$url/module/ui/allcrops/Crop_1021_2.swf"/>
        <asset id="7479424" src="$url/module/ui/allcrops/Crop_1021_3.swf"/>
        <asset id="7479425" src="$url/module/ui/allcrops/Crop_1021_Seed.swf"/>
        <asset id="7479427" src="$url/module/ui/allcrops/Crop_1022_1.swf"/>
        <asset id="7479428" src="$url/module/ui/allcrops/Crop_1022_2.swf"/>
        <asset id="7479429" src="$url/module/ui/allcrops/Crop_1022_3.swf"/>
        <asset id="7479430" src="$url/module/ui/allcrops/Crop_1022_Seed.swf"/>
        <asset id="7479432" src="$url/module/ui/allcrops/Crop_1023_1.swf"/>
        <asset id="7479433" src="$url/module/ui/allcrops/Crop_1023_2.swf"/>
        <asset id="7479434" src="$url/module/ui/allcrops/Crop_1023_3.swf"/>
        <asset id="7479435" src="$url/module/ui/allcrops/Crop_1023_Seed.swf"/>
        <asset id="7479436" src="$url/module/ui/allcrops/Crop_1024_0.swf"/>
        <asset id="7479437" src="$url/module/ui/allcrops/Crop_1024_1.swf"/>
        <asset id="7479438" src="$url/module/ui/allcrops/Crop_1024_2.swf"/>
        <asset id="7479439" src="$url/module/ui/allcrops/Crop_1024_3.swf"/>
        <asset id="7479440" src="$url/module/ui/allcrops/Crop_1024_Seed.swf"/>
        <asset id="7479441" src="$url/module/ui/allcrops/Crop_1025_1.swf"/>
        <asset id="7479442" src="$url/module/ui/allcrops/Crop_1025_2.swf"/>
        <asset id="7479443" src="$url/module/ui/allcrops/Crop_1025_3.swf"/>
        <asset id="7479444" src="$url/module/ui/allcrops/Crop_1025_Seed.swf"/>
        <asset id="7479445" src="$url/module/ui/allcrops/Crop_1026_1.swf"/>
        <asset id="7479446" src="$url/module/ui/allcrops/Crop_1026_2.swf"/>
        <asset id="7479447" src="$url/module/ui/allcrops/Crop_1026_3.swf"/>
        <asset id="7479448" src="$url/module/ui/allcrops/Crop_1026_Seed.swf"/>
        <asset id="7479449" src="$url/module/ui/allcrops/Crop_1027_1.swf"/>
        <asset id="7479450" src="$url/module/ui/allcrops/Crop_1027_2.swf"/>
        <asset id="7479451" src="$url/module/ui/allcrops/Crop_1027_3.swf"/>
        <asset id="7479452" src="$url/module/ui/allcrops/Crop_1027_Seed.swf"/>
        <asset id="7479453" src="$url/module/ui/allcrops/Crop_1028_0.swf"/>
        <asset id="7479454" src="$url/module/ui/allcrops/Crop_1028_1.swf"/>
        <asset id="7479455" src="$url/module/ui/allcrops/Crop_1028_2.swf"/>
        <asset id="7479456" src="$url/module/ui/allcrops/Crop_1028_3.swf"/>
        <asset id="7479457" src="$url/module/ui/allcrops/Crop_1028_Seed.swf"/>
        <asset id="7479458" src="$url/module/ui/allcrops/Crop_1029_0.swf"/>
        <asset id="7479459" src="$url/module/ui/allcrops/Crop_1029_1.swf"/>
        <asset id="7479460" src="$url/module/ui/allcrops/Crop_1029_2.swf"/>
        <asset id="7479461" src="$url/module/ui/allcrops/Crop_1029_3.swf"/>
        <asset id="7479462" src="$url/module/ui/allcrops/Crop_1029_Seed.swf"/>
        <asset id="7479463" src="$url/module/ui/allcrops/Crop_1030_0.swf"/>
        <asset id="7479464" src="$url/module/ui/allcrops/Crop_1030_1.swf"/>
        <asset id="7479465" src="$url/module/ui/allcrops/Crop_1030_2.swf"/>
        <asset id="7479466" src="$url/module/ui/allcrops/Crop_1030_3.swf"/>
        <asset id="7479467" src="$url/module/ui/allcrops/Crop_1030_Seed.swf"/>
        <asset id="7479468" src="$url/module/ui/allcrops/Crop_1031_0.swf"/>
        <asset id="7479469" src="$url/module/ui/allcrops/Crop_1031_1.swf"/>
        <asset id="7479470" src="$url/module/ui/allcrops/Crop_1031_2.swf"/>
        <asset id="7479471" src="$url/module/ui/allcrops/Crop_1031_3.swf"/>
        <asset id="7479472" src="$url/module/ui/allcrops/Crop_1031_Seed.swf"/>
        <asset id="7479473" src="$url/module/ui/allcrops/Crop_1032_0.swf"/>
        <asset id="7479474" src="$url/module/ui/allcrops/Crop_1032_1.swf"/>
        <asset id="7479475" src="$url/module/ui/allcrops/Crop_1032_2.swf"/>
        <asset id="7479476" src="$url/module/ui/allcrops/Crop_1032_3.swf"/>
        <asset id="7479477" src="$url/module/ui/allcrops/Crop_1032_Seed.swf"/>
        <asset id="7479478" src="$url/module/ui/allcrops/Crop_1033_0.swf"/>
        <asset id="7479479" src="$url/module/ui/allcrops/Crop_1033_1.swf"/>
        <asset id="7479480" src="$url/module/ui/allcrops/Crop_1033_2.swf"/>
        <asset id="7479481" src="$url/module/ui/allcrops/Crop_1033_3.swf"/>
        <asset id="7479482" src="$url/module/ui/allcrops/Crop_1033_Seed.swf"/>
        <asset id="7479483" src="$url/module/ui/allcrops/Crop_1034_0.swf"/>
        <asset id="7479484" src="$url/module/ui/allcrops/Crop_1034_1.swf"/>
        <asset id="7479485" src="$url/module/ui/allcrops/Crop_1034_2.swf"/>
        <asset id="7479486" src="$url/module/ui/allcrops/Crop_1034_3.swf"/>
        <asset id="7479487" src="$url/module/ui/allcrops/Crop_1034_Seed.swf"/>
        <asset id="7479488" src="$url/module/ui/allcrops/Crop_1035_0.swf"/>
        <asset id="7479489" src="$url/module/ui/allcrops/Crop_1035_1.swf"/>
        <asset id="7479490" src="$url/module/ui/allcrops/Crop_1035_2.swf"/>
        <asset id="7479491" src="$url/module/ui/allcrops/Crop_1035_3.swf"/>
        <asset id="7479492" src="$url/module/ui/allcrops/Crop_1035_Seed.swf"/>
        <asset id="7479493" src="$url/module/ui/allcrops/Crop_1036_0.swf"/>
        <asset id="7479494" src="$url/module/ui/allcrops/Crop_1036_1.swf"/>
        <asset id="7479495" src="$url/module/ui/allcrops/Crop_1036_2.swf"/>
        <asset id="7479496" src="$url/module/ui/allcrops/Crop_1036_3.swf"/>
        <asset id="7479497" src="$url/module/ui/allcrops/Crop_1036_Seed.swf"/>
        <asset id="7479498" src="$url/module/ui/allcrops/Crop_1037_0.swf"/>
        <asset id="7479499" src="$url/module/ui/allcrops/Crop_1037_1.swf"/>
        <asset id="7479500" src="$url/module/ui/allcrops/Crop_1037_2.swf"/>
        <asset id="7479501" src="$url/module/ui/allcrops/Crop_1037_3.swf"/>
        <asset id="7479502" src="$url/module/ui/allcrops/Crop_1037_Seed.swf"/>
        <asset id="7479503" src="$url/module/ui/allcrops/Crop_1038_1.swf"/>
        <asset id="7479504" src="$url/module/ui/allcrops/Crop_1038_2.swf"/>
        <asset id="7479505" src="$url/module/ui/allcrops/Crop_1038_3.swf"/>
        <asset id="7479506" src="$url/module/ui/allcrops/Crop_1038_Seed.swf"/>
        <asset id="7479507" src="$url/module/ui/allcrops/Crop_1039_1.swf"/>
        <asset id="7479508" src="$url/module/ui/allcrops/Crop_1039_2.swf"/>
        <asset id="7479509" src="$url/module/ui/allcrops/Crop_1039_3.swf"/>
        <asset id="7479510" src="$url/module/ui/allcrops/Crop_1039_Seed.swf"/>
        <asset id="7479511" src="$url/module/ui/allcrops/Crop_1040_1.swf"/>
        <asset id="7479512" src="$url/module/ui/allcrops/Crop_1040_2.swf"/>
        <asset id="7479513" src="$url/module/ui/allcrops/Crop_1040_3.swf"/>
        <asset id="7479514" src="$url/module/ui/allcrops/Crop_1040_Seed.swf"/>
        <asset id="7479515" src="$url/module/ui/allcrops/Crop_1041_1.swf"/>
        <asset id="7479516" src="$url/module/ui/allcrops/Crop_1041_2.swf"/>
        <asset id="7479517" src="$url/module/ui/allcrops/Crop_1041_3.swf"/>
        <asset id="7479518" src="$url/module/ui/allcrops/Crop_1041_Seed.swf"/>
        <asset id="7479519" src="$url/module/ui/allcrops/Crop_1042_1.swf"/>
        <asset id="7479520" src="$url/module/ui/allcrops/Crop_1042_2.swf"/>
        <asset id="7479521" src="$url/module/ui/allcrops/Crop_1042_3.swf"/>
        <asset id="7479522" src="$url/module/ui/allcrops/Crop_1042_Seed.swf"/>
        <asset id="7479523" src="$url/module/ui/allcrops/Crop_1043_1.swf"/>
        <asset id="7479524" src="$url/module/ui/allcrops/Crop_1043_2.swf"/>
        <asset id="7479525" src="$url/module/ui/allcrops/Crop_1043_3.swf"/>
        <asset id="7479526" src="$url/module/ui/allcrops/Crop_1043_Seed.swf"/>
        <asset id="7479527" src="$url/module/ui/allcrops/Crop_1044_1.swf"/>
        <asset id="7479528" src="$url/module/ui/allcrops/Crop_1044_2.swf"/>
        <asset id="7479529" src="$url/module/ui/allcrops/Crop_1044_3.swf"/>
        <asset id="7479530" src="$url/module/ui/allcrops/Crop_1044_Seed.swf"/>
        <asset id="7479531" src="$url/module/ui/allcrops/Crop_1045_1.swf"/>
        <asset id="7479532" src="$url/module/ui/allcrops/Crop_1045_2.swf"/>
        <asset id="7479533" src="$url/module/ui/allcrops/Crop_1045_3.swf"/>
        <asset id="7479534" src="$url/module/ui/allcrops/Crop_1045_Seed.swf"/>
        <asset id="7479535" src="$url/module/ui/allcrops/Crop_1046_1.swf"/>
        <asset id="7479536" src="$url/module/ui/allcrops/Crop_1046_2.swf"/>
        <asset id="7479537" src="$url/module/ui/allcrops/Crop_1046_3.swf"/>
        <asset id="7479538" src="$url/module/ui/allcrops/Crop_1046_Seed.swf"/>
        <asset id="7479539" src="$url/module/ui/allcrops/Crop_1047_1.swf"/>
        <asset id="7479540" src="$url/module/ui/allcrops/Crop_1047_2.swf"/>
        <asset id="7479541" src="$url/module/ui/allcrops/Crop_1047_3.swf"/>
        <asset id="7479542" src="$url/module/ui/allcrops/Crop_1047_Seed.swf"/>
        <asset id="7479543" src="$url/module/ui/allcrops/Crop_1048_0.swf"/>
        <asset id="7479544" src="$url/module/ui/allcrops/Crop_1048_1.swf"/>
        <asset id="7479545" src="$url/module/ui/allcrops/Crop_1048_2.swf"/>
        <asset id="7479546" src="$url/module/ui/allcrops/Crop_1048_3.swf"/>
        <asset id="7479547" src="$url/module/ui/allcrops/Crop_1048_Seed.swf"/>
        <asset id="7762" src="$url/module/ui/dogs/Dog1.jpg"/>
        <asset id="7763" src="$url/module/ui/dogs/Dog3.jpg"/>
        <asset id="7764" src="$url/module/ui/dogs/Dog4.jpg"/>
        <asset id="7765" src="$url/module/ui/dogs/Dog5.jpg"/>
        <asset id="7766" src="$url/module/ui/dogs/Dog6.jpg"/>
        <asset id="7767" src="$url/module/ui/dogs/Dog7.jpg"/>
        <asset id="10331" src="$url/module/ui/dogs/FDog10_v_1_v_1.jpg"/>
        <asset id="10315" src="$url/module/ui/dogs/FDog10_v_1_v_1.swf"/>
        <asset id="10316" src="$url/module/ui/dogs/FDog10b_v_1_v_1.swf"/>
        <asset id="10320" src="$url/module/ui/dogs/FDog12_v_1_v_2.jpg"/>
        <asset id="10318" src="$url/module/ui/dogs/FDog12_v_1_v_2.swf"/>
        <asset id="10319" src="$url/module/ui/dogs/FDog12b_v_1_v_2.swf"/>
        <asset id="8542" src="$url/module/ui/dogs/FDog13_v_1.jpg"/>
        <asset id="8541" src="$url/module/ui/dogs/FDog13_v_2.swf"/>
        <asset id="8539" src="$url/module/ui/dogs/FDog13b_v_1.swf"/>
        <asset id="8984" src="$url/module/ui/dogs/FDog14_v_1_v_1.jpg"/>
        <asset id="8982" src="$url/module/ui/dogs/FDog14_v_2_v_1.swf"/>
        <asset id="8983" src="$url/module/ui/dogs/FDog14b_v_1_v_1.swf"/>
        <asset id="9759" src="$url/module/ui/dogs/FDog15_v_1.jpg"/>
        <asset id="9757" src="$url/module/ui/dogs/FDog15_v_1.swf"/>
        <asset id="9758" src="$url/module/ui/dogs/FDog15b_v_1.swf"/>
        <asset id="10515" src="$url/module/ui/dogs/FDog16_v_1_v_1.swf"/>
        <asset id="10516" src="$url/module/ui/dogs/FDog16b_v_1.swf"/>
        <asset id="10329" src="$url/module/ui/dogs/FDog17_v_1_v_2.swf"/>
        <asset id="10330" src="$url/module/ui/dogs/FDog17b_v_1_v_2.swf"/>
        <asset id="10678" src="$url/module/ui/dogs/FDog18_v_1.swf"/>
        <asset id="10679" src="$url/module/ui/dogs/Dog18b_v_1.swf"/>
        <asset id="11189" src="$url/module/ui/dogs/Dog20_v_1.swf"/>
        <asset id="11190" src="$url/module/ui/dogs/Dog20b_v_1.swf"/>
        <asset id="11744" src="$url/module/ui/dogs/FDog22_v_1.swf"/>
        <asset id="11745" src="$url/module/ui/dogs/FDog22b_v_1.swf"/>
        <asset id="12109" src="$url/module/ui/dogs/FDog23_v_1.swf"/>
        <asset id="12110" src="$url/module/ui/dogs/FDog23b_v_1.swf"/>
        <asset id="5392" src="$url/module/ui/dogs/FDog1_v_1.swf"/>
        <asset id="5393" src="$url/module/ui/dogs/FDog1b.swf"/>
        <asset id="5390" src="$url/module/ui/dogs/FDog2_v_1.swf"/>
        <asset id="5391" src="$url/module/ui/dogs/FDog2b.swf"/>
        <asset id="5394" src="$url/module/ui/dogs/FDog3_v_1.swf"/>
        <asset id="5395" src="$url/module/ui/dogs/FDog3b.swf"/>
        <asset id="5396" src="$url/module/ui/dogs/FDog4_v_2.swf"/>
        <asset id="5397" src="$url/module/ui/dogs/FDog4b.swf"/>
        <asset id="5398" src="$url/module/ui/dogs/FDog5_v_1.swf"/>
        <asset id="5399" src="$url/module/ui/dogs/FDog5b.swf"/>
        <asset id="5400" src="$url/module/ui/dogs/FDog6_v_1.swf"/>
        <asset id="5401" src="$url/module/ui/dogs/FDog6b.swf"/>
        <asset id="5402" src="$url/module/ui/dogs/FDog7_v_1.swf"/>
        <asset id="5403" src="$url/module/ui/dogs/FDog7b.swf"/>
        <asset id="197421" src="$url/module/ui/dogs/FDog90_v_1.swf"/>
        <asset id="197422" src="$url/module/ui/dogs/FDog90b.swf"/>
        <asset id="197423" src="$url/module/ui/dogs/FDog91_v_1.swf"/>
        <asset id="197424" src="$url/module/ui/dogs/FDog91b.swf"/>
        <asset id="197425" src="$url/module/ui/dogs/FDog92_v_1.swf"/>
        <asset id="197426" src="$url/module/ui/dogs/FDog92b.swf"/>
        <asset id="197427" src="$url/module/ui/dogs/FDog93_v_1.swf"/>
        <asset id="197428" src="$url/module/ui/dogs/FDog93b.swf"/>
        <asset id="197429" src="$url/module/ui/dogs/FDog94_v_1.swf"/>
        <asset id="197430" src="$url/module/ui/dogs/FDog94b.swf"/>
        <asset id="197431" src="$url/module/ui/dogs/FDog95_v_1.swf"/>
        <asset id="197432" src="$url/module/ui/dogs/FDog95b.swf"/>
        <asset id="197433" src="$url/module/ui/dogs/FDog96_v_1.swf"/>
        <asset id="197434" src="$url/module/ui/dogs/FDog96b.swf"/>
        <asset id="197435" src="$url/module/ui/dogs/FDog97_v_1.swf"/>
        <asset id="197436" src="$url/module/ui/dogs/FDog97b.swf"/>
        <asset id="197437" src="$url/module/ui/dogs/FDog98_v_1.swf"/>
        <asset id="197438" src="$url/module/ui/dogs/FDog98b.swf"/>
        <asset id="197439" src="$url/module/ui/dogs/FDog99_v_1.swf"/>
        <asset id="197440" src="$url/module/ui/dogs/FDog99b.swf"/>
        <asset id="197441" src="$url/module/ui/dogs/FDog100_v_1.swf"/>
        <asset id="197442" src="$url/module/ui/dogs/FDog100b.swf"/>

        <asset id="8695" src="$url/module/ui/farm/fish/fish_seed_01.swf"/>
        <asset id="8696" src="$url/module/ui/farm/fish/fish_01.swf"/>
        <asset id="8723" src="$url/module/ui/farm/fish/fish_02.swf"/>
        <asset id="8724" src="$url/module/ui/farm/fish/fish_seed_02.swf"/>
        <asset id="8770" src="$url/module/ui/farm/fish/fish_seed_03.swf"/>
        <asset id="8771" src="$url/module/ui/farm/fish/fish_03.swf"/>
        <asset id="8798" src="$url/module/ui/farm/fish/fish_seed_04.swf"/>
        <asset id="8799" src="$url/module/ui/farm/fish/fish_04.swf"/>
        <asset id="8800" src="$url/module/ui/farm/fish/fish_seed_05.swf"/>
        <asset id="8801" src="$url/module/ui/farm/fish/fish_05.swf"/>
        <asset id="8802" src="$url/module/ui/farm/fish/fish_seed_06.swf"/>
        <asset id="8803" src="$url/module/ui/farm/fish/fish_06.swf"/>
        <asset id="8804" src="$url/module/ui/farm/fish/fish_seed_07.swf"/>
        <asset id="8805" src="$url/module/ui/farm/fish/fish_07.swf"/>
        <asset id="8961" src="$url/module/ui/farm/fish/fish_seed_08.swf"/>
        <asset id="8962" src="$url/module/ui/farm/fish/fish_08.swf"/>
        <asset id="8963" src="$url/module/ui/farm/fish/fish_seed_09.swf"/>
        <asset id="8964" src="$url/module/ui/farm/fish/fish_09.swf"/>
        <asset id="8965" src="$url/module/ui/farm/fish/fish_seed_10.swf"/>
        <asset id="8966" src="$url/module/ui/farm/fish/fish_10.swf"/>
        <asset id="8998" src="$url/module/ui/farm/fish/fish_seed_15.swf"/>
        <asset id="8999" src="$url/module/ui/farm/fish/fish_15.swf"/>
        <asset id="9670" src="$url/module/ui/farm/fish/fish_seed_14.swf"/>
        <asset id="9671" src="$url/module/ui/farm/fish/fish_14.swf"/>
        <asset id="9693" src="$url/module/ui/farm/fish/fish_seed_11.swf"/>
        <asset id="9694" src="$url/module/ui/farm/fish/fish_11.swf"/>
        <asset id="9695" src="$url/module/ui/farm/fish/fish_seed_12.swf"/>
        <asset id="9696" src="$url/module/ui/farm/fish/fish_12.swf"/>
        <asset id="9697" src="$url/module/ui/farm/fish/fish_seed_13.swf"/>
        <asset id="9698" src="$url/module/ui/farm/fish/fish_13.swf"/>
        <asset id="9769" src="$url/module/ui/farm/fish/fish_seed_16.swf"/>
        <asset id="9770" src="$url/module/ui/farm/fish/fish_16.swf"/>
        <asset id="11085" src="$url/module/ui/farm/fish/fish_seed_17.swf"/>
        <asset id="11086" src="$url/module/ui/farm/fish/fish_17.swf"/>
	</assets>

	<!-- 农场牌子 -->
	<boards type="json">
		<![CDATA[
		{"boards": [
			{"asset_id": "1719", "id": 90001, "name": "牌子"},
			{"asset_id": "1721", "id": 90002, "name": "牌子"},
			{"asset_id": "1723", "id": 90003, "name": "牌子"},
			{"asset_id": "1725", "id": 90004, "name": "牌子"},
			{"asset_id": "1727", "id": 90005, "name": "牌子"},
			{"asset_id": "1729", "id": 90006, "name": "牌子"},
			{"asset_id": "1731", "id": 90007, "name": "牌子"},
			{"asset_id": "1733", "id": 90008, "name": "牌子"},
			{"asset_id": "1735", "id": 90009, "name": "牌子"},
			{"asset_id": "1737", "id": 90010, "name": "牌子"},
			{"asset_id": "1739", "id": 90011, "name": "牌子"},
			{"asset_id": "1741", "id": 90012, "name": "牌子"},
			{"asset_id": "1743", "id": 90013, "name": "牌子"},
			{"asset_id": "1745", "id": 90014, "name": "牌子"},
			{"asset_id": "1747", "id": 90015, "name": "牌子"},
			{"asset_id": "4224", "id": 90016, "name": "神秘星球牌子1"},
			{"asset_id": "4225", "id": 90017, "name": "神秘星球牌子2"},
			{"asset_id": "4226", "id": 90018, "name": "神秘星球牌子3"},
			{"asset_id": "4227", "id": 90019, "name": "神秘星球牌子3"},
			{"asset_id": "4125", "id": 90020, "name": "一路同行"},
			{"asset_id": "5161", "id": 90021, "name": "兔年1"},
			{"asset_id": "5163", "id": 90022, "name": "兔年2"},
			{"asset_id": "5165", "id": 90023, "name": "兔年3"},
			{"asset_id": "7140", "id": 90024, "name": "农场两周年"},
			{"asset_id": "8285", "id": 90025, "name": "长颈鹿哥"},
			{"asset_id": "8287", "id": 90026, "name": "长颈鹿姐"},
			{"asset_id": "8289", "id": 90027, "name": "穷河马"},
			{"asset_id": "8291", "id": 90028, "name": "励志猪"},
			{"asset_id": "8532", "id": 90029, "name": "可爱军人"},
			{"asset_id": "8534", "id": 90030, "name": "送果实"},
			{"asset_id": "8611", "id": 90031, "name": "七夕牌子"},
			{"asset_id": "9718", "id": 90032, "name": "恶魔之恨"},
			{"asset_id": "7379400", "id": 90473, "name": "豐收女神"},
			{"asset_id": "7379401", "id": 90474, "name": "万圣砸蛋仔"},
			{"asset_id": "7379402", "id": 90475, "name": "万圣砸蛋仔"}
		]}
		]]>
	</boards>

	<!-- 农场作物 -->
	<crops type="json">
		<![CDATA[
		{"crops": [
			{"asset_id": {"m1": "5478", "m2": "5479", "m3": "5480", "s": "2253"}, "cropGrow": "14400,28800,46800,64800,86400,2000000000", "gossip": "", "harvestNum": 2, "id": 1, "insect": "0,0,0,0,0,0|50,10,65,-30,110,-2|50,10,65,-30,110,-2|0,0,0,0,0,0", "name": "草莓", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：草莓(英文：strawberry)外观呈浆果状圆体或心形，鲜美红嫩，果肉多汁，酸甜可口，香味浓郁，被称为水果皇后。", "type": 1},
			{"asset_id": {"m1": "5481", "m2": "5482", "m3": "5483", "s": "2255"}, "cropGrow": "7200,14400,25200,36000,36000,2000000000", "gossip": "", "harvestNum": 1, "id": 2, "insect": "0,0,0,0,0,0|74,8,92,2,109,33|74,8,92,2,109,33|0,0,0,0,0,0",  "name": "白萝卜", "nextText": "种子,发芽,小叶子,大叶子,成熟,成熟,已成熟", "offsetX": 35, "offsetY": -63, "tip": "小贴士：白萝卜(英文：radish)是一种非常常见的蔬菜，生食熟食均可，其味略带辛辣味。白萝卜不能与人参、西洋参一起吃。", "type": 1},
			{"asset_id": {"m1": "5484", "m2": "5485", "m3": "5486", "s": "2257"}, "cropGrow": "7200,18000,32400,46800,46800,2000000000", "gossip": "", "harvestNum": 1, "id": 3, "insect": "0,0,0,0,0,0|74,8,92,2,109,33|74,8,92,2,109,33|0,0,0,0,0,0", "isFood": "1", "isLock": "1", "name": "胡萝卜", "nextText": "种子,发芽,小叶子,大叶子,成熟,成熟,已成熟", "offsetX": 35, "offsetY": -63, "tip": "小贴士：胡萝卜(英文：carrot)是大自然的红宝石，营养很丰富。胡萝卜素可以预防心脏病和癌症，有益肝明目的作用哦！", "type": 1},
			{"asset_id": {"m1": "5487", "m2": "5488", "m3": "5489", "s": "2259"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 4, "insect": "0,0,0,0,0,0|56,-17,92,-61,115,-11|56,-17,92,-61,115,-11|0,0,0,0,0,0",  "name": "玉米", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：玉米(英文：corn)是世界分布最广的粮食作物，在许多地区作为主要食物，纤维素含量很高，具有长寿、美容作用。", "type": 1},
			{"asset_id": {"m1": "5490", "m2": "5491", "m3": "5492", "s": "2261"}, "cropGrow": "7200,14400,25200,39600,54000,2000000000", "gossip": "", "harvestNum": 1, "id": 5, "insect": "0,0,0,0,0,0|45,0,99,-10,129,-24|45,-5,99,-15,129,-29|0,0,0,0,0,0",  "name": "土豆", "nextText": "幼株,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：土豆(英文：potato)又叫马铃薯，含有大量淀粉以及蛋白质、维生素等。土豆一般切块种植，生长第一阶段为幼株。", "type": 1},
			{"asset_id": {"m1": "5493", "m2": "5494", "m3": "5495", "s": "2263"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 6, "insect": "0,0,0,0,0,0|64,-4,45,-19,103,-17|64,-3,48,-17.5,128,-6|0,0,0,0,0,0",  "name": "茄子", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：茄子(英文：aubergine)中维生素P的含量很高，保护心血管，还是抗癌高手。拍照时我们还喜欢一起喊茄子微笑。", "type": 1},
			{"asset_id": {"m1": "5496", "m2": "5497", "m3": "5498", "s": "2265"}, "cropGrow": "7200,18000,32400,46800,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 7, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0",  "name": "番茄", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：番茄(英文：tomato)含有丰富的胡萝卜素、维生素C和B族维生素，是维生素C含量蔬菜之冠哦！还有惊人的减肥效果。", "type": 1},
			{"asset_id": {"m1": "5499", "m2": "5500", "m3": "5501", "s": "2267"}, "cropGrow": "10800,21600,32400,46800,64800,2000000000", "gossip": "", "harvestNum": 1, "id": 8, "insect": "0,0,0,0,0,0|50,-13,85,-51,107,1|50,-13,85,-51,107,1|0,0,0,0,0,0",  "name": "豌豆", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：豌豆(英文：pea)富含人体所需的各种营养物质，尤其是含有优质蛋白质，可以提高机体的抗病能力和康复能力。", "type": 1},
			{"asset_id": {"m1": "5502", "m2": "5503", "m3": "5504", "s": "2269"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 9, "insect": "0,0,0,0,0,0|65,13,92,-11,120,-15|65,13,92,-11,120,-15|0,0,0,0,0,0",  "name": "辣椒", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：辣椒(英文：chili)味道爽口刺激，很多人的最爱哦！不仅可以健胃助消化，还能燃烧脂肪，具有减肥的功效。", "type": 1},
			{"asset_id": {"m1": "5505", "m2": "5506", "m3": "5507", "s": "2271"}, "cropGrow": "10800,25200,43200,61200,79200,2000000000", "gossip": "", "harvestNum": 1, "id": 10, "insect": "0,0,0,0,0,0|65,13,92,-11,120,-15|65,13,92,-11,120,-15|0,0,0,0,0,0",  "name": "南瓜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：南瓜(英文：pumpkin)含有多种营养成分，能润肺益气，治咳止喘。味道香甜，还有重金属解毒和美容等作用。", "type": 1},
			{"asset_id": {"m1": "5508", "m2": "5509", "m3": "5510", "s": "2273"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 11, "insect": "0,0,0,0,0,0|65,13,92,-11,120,-15|65,13,92,-11,120,-15|0,0,0,0,0,0", "name": "苹果", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：苹果(英文：apple)富含多种维生素、矿物质等构成大脑所必须的营养成分，能增加记忆力，还能美容美体。苹果一般嫁接种植，生长第一阶段为嫁接的幼枝。", "type": 1},
			{"asset_id": {"m0": "5511", "m1": "5512", "m2": "5513", "m3": "5514", "s": "2275"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 13, "insect": "0,0,0,0,0,0|65,-13,92,-26,120,-30|65,-13,92,-26,120,-30|0,0,0,0,0,0", "name": "葡萄", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：葡萄(英文：grape)所富含的葡萄糖可以很快的被人吸收，人体出现低血糖时喝葡萄汁就能很快使症状缓解。葡萄一般插扦种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m1": "5515", "m2": "5516", "m3": "5517", "s": "2277"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 14, "insect": "0,0,0,0,0,0|105,44,70,13,119,13|105,44,70,13,119,13|0,0,0,0,0,0", "name": "西瓜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：西瓜(英文：watermelon)顾名思义，是西域传来的瓜。它全身都是宝，果肉清甜美味，果皮可腌制成密饯，种子还可榨油。", "type": 1},
			{"asset_id": {"m0": "5518", "m1": "5519", "m2": "5520", "m3": "5521", "s": "2279"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 15, "insect": "0,0,0,0,0,0|63,-6,80,-30,111,-13|63,-6,80,-30,111,-13|0,0,0,0,0,0", "name": "香蕉", "nextText": "幼芽,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：香蕉(英文：banana)欧洲人因为它能解除忧郁而称它为“快乐水果”，也是女孩们钟爱的减肥佳果。香蕉一般切块种植，生长第一阶段为幼芽。", "type": 1},
			{"asset_id": {"m0": "5522", "m1": "5523", "m2": "5524", "m3": "5525", "s": "2281"}, "cropGrow": "28800,46800,64800,86400,100800,2000000000", "gossip": "", "harvestNum": 7, "id": 16, "insect": "0,0,0,0,0,0|55,-2,87,-35,119,-4|55,-2,87,-35,119,-4|0,0,0,0,0,0", "name": "菠萝蜜", "nextText": "幼枝,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：菠萝蜜（英文：jackfruit）是非常著名的热带水果，清甜可口，香味浓郁，故被誉为“热带水果皇后”。菠萝蜜一般嫁接种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m1": "5526", "m2": "5527", "m3": "5528", "s": "2283"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 7, "id": 17, "insect": "0,0,0,0,0,0|41,-18,85,-47,113,6|41,-18,85,-47,113,6|0,0,0,0,0,0", "name": "黑布仑", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：黑布仑又叫黑李子（英文：black plum），果实呈黑紫色，口感厚实甘甜，含有大量的蛋白质、纤维素等。黑布仑一般嫁接种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m1": "5529", "m2": "5530", "m3": "5531", "s": "2285"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 2, "id": 18, "insect": "0,0,0,0,0,0|71,-24,69,-63,116,-53|71,-24,69,-63,116,-53|0,0,0,0,0,0", "isFood": "1", "isLock": "1", "name": "桃子", "nextText": "种子,发芽,开花,小叶子,大叶子,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：桃子(英文：peach)先开花，后长叶子，在全世界有三千多个品种，味道鲜美，营养丰富，有补益气血、养阴生津的作用。", "type": 1},
			{"asset_id": {"m1": "5532", "m2": "5533", "m3": "5534", "s": "2287"}, "cropGrow": "25200,50400,75600,104400,133200,2000000000", "gossip": "", "harvestNum": 3, "id": 19, "insect": "0,0,0,0,0,0|60,-7,80,-26,105,-10|60,-7,80,-26,105,-10|0,0,0,0,0,0", "name": "橙子", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：橙子(英文：orange)酸甜可口，生津止渴，有开胃下气的功效；切片敷面还可以祛除面部色素，治疗黄褐斑。", "type": 1},
			{"asset_id": {"m0": "5535", "m1": "5536", "m2": "5537", "m3": "5538", "s": "2289"}, "cropGrow": "21600,39600,61200,82800,104400,2000000000", "gossip": "", "harvestNum": 7, "id": 20, "insect": "0,0,0,0,0,0|67,-10,79,-61,91,-24|60,-19,100,-22,83,-48|0,0,0,0,0,0", "name": "乌饭子", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：乌饭子（英文：Vaccinium fragile franch）花型玲珑秀美，球果累累，叶片层叠有致，姿态优美，具有可食用和药用效果。乌饭子一般嫁接种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m1": "5539", "m2": "5540", "m3": "5541", "s": "2291"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "", "harvestNum": 7, "id": 21, "insect": "0,0,0,0,0,0|49,-14,90,-57,124,-31|49,-14,90,-57,124,-31|0,0,0,0,0,0", "name": "可可豆", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：可可（英文：cacao）是一种经济价值很高的热带多年生经济作物，可可的果实可可豆蛋白质含量较高，营养丰富，是制造巧克力的主要原料。", "type": 1},
			{"asset_id": {"m0": "5542", "m1": "5543", "m2": "5544", "m3": "5545", "s": "2293"}, "cropGrow": "25200,54000,75600,97200,115200,2000000000", "gossip": "", "harvestNum": 7, "id": 22, "insect": "0,0,0,0,0,0|44,-22,84,-53,124,-18|44,-22,84,-53,124,-18|0,0,0,0,0,0", "name": "鳄梨", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：鳄梨（英文：avocado）是一种营养价值很高的水果，果肉柔软似乳酪，风味独特，含多种维生素和蛋白质。", "type": 1},
			{"asset_id": {"m1": "5546", "m2": "5547", "m3": "5548", "s": "2295"}, "cropGrow": "36000,72000,108000,147600,187200,2000000000", "gossip": "", "harvestNum": 3, "id": 23, "insect": "0,0,0,0,0,0|55,-30,92,-11,120,-15|55,-30,92,-11,120,-15|0,0,0,0,0,0", "name": "石榴", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：石榴(英文：pomegranate)原产波斯一带，花语是成熟美丽。石榴含有丰富的营养，但不可与西红柿、螃蟹一起吃。", "type": 1},
			{"asset_id": {"m1": "5549", "m2": "5550", "m3": "5551", "s": "2297"}, "cropGrow": "18000,39600,64800,93600,126000,2000000000", "gossip": "", "harvestNum": 7, "id": 24, "insect": "0,0,0,0,0,0|45,-12,69,-51,110,-13|45,-12,69,-51,110,-13|0,0,0,0,0,0", "name": "莲雾", "nextText": "幼苗,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：莲雾（英文：Wax apple）又名天桃，味道清甜，清凉爽口，由于含有许多水分，在食疗上有解热、宁心安神的作用。莲雾一般扦插种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m1": "5552", "m2": "5553", "m3": "5554", "s": "2299"}, "cropGrow": "18000,43200,72000,97200,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 25, "insect": "0,0,0,0,0,0|67,-16,86,-53,100,-25|67,-16,86,-53,100,-25|0,0,0,0,0,0", "name": "银杏树苗", "nextText": "种子,发芽,小叶子,大叶子,长枝,成苗", "offsetX": 0, "offsetY": 0, "tip": "小贴士：银杏树（英文：maidenhair tree）是世界上最古老的树种之一，成年银杏树高大挺拔，叶似扇形，但其生长较慢，寿命极长，可达上千岁。", "type": 1},
			{"asset_id": {"m0": "5555", "m1": "5556", "m2": "5557", "m3": "5558", "s": "2301"}, "cropGrow": "39600,82800,126000,172800,219600,2000000000", "gossip": "", "harvestNum": 3, "id": 26, "insect": "0,0,0,0,0,0|54,-5,87,-27,130,-21|54,-5,87,-27,130,-21|0,0,0,0,0,0", "name": "柚子", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：柚子(英文：grapefruit)味道酸甜，略带苦味，含有丰富的维生素C及大量其他营养素，是医学界公认的最具食疗效果的水果。柚子一般嫁接种植，生长第一阶段为嫁接的幼枝。", "type": 1},
			{"asset_id": {"m0": "5559", "m1": "5560", "m2": "5561", "m3": "5562", "s": "2303"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 27, "insect": "0,0,0,0,0,0|68,23,95,25,126,8|68,23,95,25,126,8|0,0,0,0,0,0", "isRestaurant": 1, "name": "菠萝", "nextText": "幼芽,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：菠萝(英文：pineapple)营养丰富，香甜可口。含有一种“菠萝酶”，可以增进食欲，但也有副作用，所以要适量食用。菠萝一般冠芽种植，生长第一阶段为幼芽。", "type": 1},
			{"asset_id": {"m1": "5563", "m2": "5564", "m3": "5565", "s": "2305"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 28, "insect": "0,0,0,0,0,0|46,-2,95,-52,125,-18|46,-2,95,-52,125,-18|0,0,0,0,0,0", "isAnimation": 1, "isLock": 1, "name": "娃哈哈营养果粒", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "5566", "m2": "5567", "m3": "5568", "s": "2307"}, "cropGrow": "36000,75600,115200,154800,198000,2000000000", "gossip": "", "harvestNum": 4, "id": 29, "insect": "0,0,0,0,0,0|61,-52,96,-30,120,-12|61,-52,96,-30,120,-12|0,0,0,0,0,0", "name": "椰子", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：椰子(英文：coconut)是海南特产，无污染，椰汁可以作为饮料，椰壳可以做成工艺品，全身是宝。体内热盛的人不宜常吃椰子。", "type": 1},
			{"asset_id": {"m1": "5569", "m2": "5570", "m3": "5571", "s": "2309"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 30, "insect": "0,0,0,0,0,0|52,-11,79,-54,100,6|52,-11,79,-54,100,6|0,0,0,0,0,0", "name": "星之愿", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：Qzone5年，感谢一路有你相伴。送你一颗星之愿种子，愿你的梦想成真！", "type": 1},
			{"asset_id": {"m1": "5572", "m2": "5573", "m3": "5574", "s": "2311"}, "cropGrow": "39600,82800,126000,172800,219600,2000000000", "gossip": "", "harvestNum": 4, "id": 31, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "葫芦", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：葫芦（英文：gourd）有很多传说故事，葫芦娃很熟悉吧？葫芦果实成熟后经一定处理可作为容器，如酒壶、水瓢、观赏品等。", "type": 1},
			{"asset_id": {"m1": "5575", "m2": "5576", "m3": "5577", "s": "2313"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 2, "id": 32, "insect": "0,0,0,0,0,0|42,-9,73,-39,97,-11|42,-9,73,-39,97,-11|0,0,0,0,0,0", "name": "彩钻果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：彩钻是来自钻石家族的新成员，是拍拍买家的身份象征。播下彩钻种子，开启你的缤纷网购生活！", "type": 1},
			{"asset_id": {"m0": "5578", "m1": "5579", "m2": "5580", "m3": "5581", "s": "2315"}, "cropGrow": "46800,97200,147600,198000,252000,2000000000", "gossip": "", "harvestNum": 4, "id": 33, "insect": "0,0,0,0,0,0|65,-15,80,-45,120,-34|65,-15,80,-45,120,-34|0,0,0,0,0,0", "name": "火龙果", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：火龙果(英文：pitaya)也称“吉祥果”，是营养丰富、功能独特、低热量、高纤维的水果，可以防止“都市富贵病”的蔓延。火龙果一般插枝种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m1": "5582", "m2": "5583", "m3": "5584", "s": "2317"}, "cropGrow": "50400,100800,151200,205200,259200,2000000000", "gossip": "", "harvestNum": 4, "id": 34, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "樱桃", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：樱桃(英文：cherry)也叫车厘子，成熟时颜色鲜红，酸甜多汁。可以用来酿酒，樱桃含铁量位于各种水果之首，可以抗贫血。", "type": 1},
			{"asset_id": {"m1": "5585", "m2": "5586", "m3": "5587", "s": "2319"}, "cropGrow": "54000,108000,165600,219600,277200,2000000000", "gossip": "", "harvestNum": 4, "id": 35, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "荔枝", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：荔枝(英文：litchi)富含维生素防止雀斑的发生，令皮肤更加光滑。对大脑组织也有很好的补养作用。", "type": 1},
			{"asset_id": {"m0": "5588", "m1": "5589", "m2": "5590", "m3": "5591", "s": "2321"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 3, "id": 36, "insect": "0,0,0,0,0,0|70,9,85,-38,104,-4|70,9,85,-38,104,-4|0,0,0,0,0,0", "name": "箬竹", "nextText": "幼株,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：箬竹（英文：indocalamus）是一种小型竹，喜在低山谷间和河岸生长。箬竹叶宽而大，可以编制器物或竹笠，还可用于包粽子。", "type": 1},
			{"asset_id": {"m0": "5592", "m1": "5593", "m2": "5594", "m3": "5595", "s": "2323"}, "cropGrow": "21600,46800,75600,100800,122400,2000000000", "gossip": "", "harvestNum": 1, "id": 37, "insect": "0,0,0,0,0,0|55,16,92,1,113,24|41,17,75,0,119,27|0,0,0,0,0,0",  "name": "莲藕", "nextText": "幼株,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：莲藕（英文：lotus root）微甜而脆，可生食也可做菜，而且药用价值相当高，它的根根叶叶，花须果实，无不为宝，都可滋补入药。", "type": 1},
			{"asset_id": {"m1": "5596", "m2": "5597", "m3": "5598", "s": "2325"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 38, "insect": "0,0,0,0,0,0|63,-40,85,-74,106,-40|63,-40,85,-74,106,-40|0,0,0,0,0,0", "name": "木瓜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：木瓜(英文：papaya)原产我国西南地区，生吃能舒缓咽喉不适，对感冒咳痰、便秘、慢性气管炎等亦有帮助。", "type": 1},
			{"asset_id": {"m1": "5599", "m2": "5600", "m3": "5601", "s": "2327"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 39, "insect": "0,0,0,0,0,0|56,-20,80,-58,104,-27|56,-20,80,-58,104,-27|0,0,0,0,0,0", "name": "杨桃", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：杨桃(英文：carambola)的原产地是中国，是久负盛名的岭南佳果之一。因横切面如五角星，故国外又称之为“星梨”( Star fruit)。", "type": 1},
			{"asset_id": {"m1": "5602", "m2": "5603", "m3": "5604", "s": "2329"}, "cropGrow": "7200,14400,21600,28800,28800,2000000000", "gossip": "", "harvestNum": 1, "id": 40, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "isFood": "1", "isLock": "1", "name": "牧草", "nextText": "种子,发芽,小叶子,大叶子,成熟,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：牧草(英文：pasture)是作为家畜饲料而栽培的植物，牧场里的可爱动物们可是很喜欢它呢！多种一些吧！", "type": 1},
			{"asset_id": {"m1": "6464", "m2": "6465", "m3": "6466", "s": "2331"}, "cropGrow": "10800,21600,32400,46800,64800,2000000000", "gossip": "", "harvestNum": 1, "id": 41, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "isFlower": "1", "name": "红玫瑰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：红玫瑰(英文：red rose)代表热情真爱，一般带刺。玫瑰花瓣可以加工食用，制作成玫瑰茶或玫瑰花糕，也可以制作成香料。", "type": 1},
			{"asset_id": {"m1": "5605", "m2": "5606", "m3": "5607", "s": "2333"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 42, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "柠檬", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：柠檬(英文：lemon)属芸香科柑橘属常绿小乔木，是世界上最有药用价值的水果之一，它富含维生素C、柠檬酸、苹果酸、高量钾元素和低量钠元素等，对人体十分有益。", "type": 1},
			{"asset_id": {"m1": "5608", "m2": "5609", "m3": "5610", "s": "4330"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 3, "id": 43, "insect": "0,0,0,0,0,0|67,-20,100,-49,105,-20|63,-36,89,-70,109,-24|0,0,0,0,0,0", "name": "无花果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：无花果（英文：fig）又叫明目果、映日果等，由于无花果树叶厚大浓绿，而所开的花却很小，经常被枝叶掩盖，不易发现，当果子露出时，花已脱落，所以人们认为它是不花而实，故命名为无花果。", "type": 1},
			{"asset_id": {"m0": "5611", "m1": "5612", "m2": "5613", "m3": "5614", "s": "2335"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 44, "insect": "0,0,0,0,0,0|81,7,90,-43,109,-3|81,7,90,-43,109,-3|0,0,0,0,0,0", "name": "丝瓜", "nextText": "幼株,长枝,开花,小叶子,大叶子,结果,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：丝瓜(英文：towel gourd)中含防止皮肤老化的B族维生素，增白皮肤的维生素C等成分，是不可多得的美容佳品。丝瓜一般插株种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m0": "5615", "m1": "5616", "m2": "5617", "m3": "5618", "s": "2337"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 4, "id": 45, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "name": "猕猴桃", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：猕猴桃(英文：kiwifruit)味甘酸而寒，有解热、止渴、健胃的功效。它的维生素C含量在水果中名列前茅，被誉为“维C之王”。猕猴桃一般插枝种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m1": "5619", "m2": "5620", "m3": "5621", "s": "2339"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 46, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "爱心果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：传说中的爱心果(英文：benevolence fruit)，专为腾讯“月捐”网友而绽放！爱心无价，爱心果如金子般闪亮，美好生活全因有你！", "type": 1},
			{"asset_id": {"m0": "5622", "m1": "5623", "m2": "5624", "m3": "5625", "s": "2341"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 47, "insect": "0,0,0,0,0,0|63,-7,85,-36,106,-15|63,-7,85,-36,106,-15|0,0,0,0,0,0", "name": "甘蔗", "nextText": "幼苗,发芽,幼苗,分叶,伸长,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：甘蔗(英文：cane)含有丰富的糖分、水份以及对人体新陈代谢非常有益的各种维生素等物质。新植甘蔗采用栽种甘蔗苗繁殖，生长周期为：甘蔗苗、发芽、幼苗、分叶、伸长、成熟", "type": 1},
			{"asset_id": {"m1": "5626", "m2": "5627", "m3": "5628", "s": "2343"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 48, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "杨梅", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：杨梅(英文：waxberry)营养价值高，是天然的绿色保健食品。果实成熟时丹实点点，烂漫可爱，是优良的观果树种。", "type": 1},
			{"asset_id": {"m1": "5629", "m2": "5630", "m3": "5631", "s": "2345"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 49, "insect": "0,0,0,0,0,0|54,7,78,-28,98,-3|54,7,78,-28,98,-3|0,0,0,0,0,0",  "name": "花生", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：花生(英文：peanut)滋养补益，有助于延年益寿，所以民间又称之为“长生果”，并且和黄豆一同被誉为“植物肉”，“素中之荤”。", "type": 1},
			{"asset_id": {"m0": "5632", "m1": "5633", "m2": "5634", "m3": "5635", "m4": "5636", "s": "2347"}, "cropGrow": "25200,50400,79200,108000,108000,2000000000", "gossip": "", "harvestNum": 3, "id": 50, "insect": "0,0,0,0,0,0|64,11,87,-19,104,3|64,11,87,-19,104,3|0,0,0,0,0,0",  "name": "蘑菇", "nextText": "原基,菇蕾,幼菇,初熟,成熟,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：蘑菇(英文：mushroom)种类繁多，可食用蘑菇是理想的天然食品和多功能食品，对降低血压有明显效果，还可提高身体免疫力。蘑菇生长周期为：原基、菇蕾、幼菇、初熟、成熟。", "type": 1},
			{"asset_id": {"m1": "5637", "m2": "5638", "m3": "5639", "s": "2349"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 51, "insect": "0,0,0,0,0,0|54,-5,79,-44,105,-23|54,-5,79,-44,105,-23|0,0,0,0,0,0", "name": "红枣", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：红枣(英文：red jujube)含有蛋白质、脂肪、糖类、有机酸、维生素A、维生素C等丰富的营养成份，对病后体虚的人有良好的滋补作用。", "type": 1},
			{"asset_id": {"m0": "5640", "m1": "5641", "m2": "5642", "m3": "5643", "m4": "5644", "s": "2351"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 52, "insect": "0,0,0,0,0,0|70,4,84,-15,102,5|70,2,86,-27,110,-1|0,0,0,0,0,0", "name": "金针菇", "nextText": "菌种,发菌,出菇,幼菇,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：金针菇（英文：Enoki mushrooms）因其菌柄细长，似金针菜，故称金针菇，属伞菌目白蘑科金针菇属。金针菇具有很高的药用食疗作用。", "type": 1},
			{"asset_id": {"m0": "5645", "m1": "5646", "m2": "5647", "m3": "5648", "s": "2353"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 53, "insect": "0,0,0,0,0,0|58,5,87,-35,104,-4|58,5,87,-35,104,-4|0,0,0,0,0,0", "name": "桂圆", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：桂圆(英文：longan)亦称龙眼，味甘、性温，含有多种营养物质，有补血安神，健脑益智，补养心脾的功效。桂圆一般采用嫁接的方式种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m0": "5649", "m1": "5650", "m2": "5651", "m3": "5652", "s": "2355"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 54, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "name": "梨", "nextText": "幼枝,长枝,开花,小叶子,大叶子,结果,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：梨(英文：pear)酸甜可口，富含多种维生素，对人体健康有重要作用。梨树一般嫁接种植，并且先花后叶，故梨的生长周期为：幼枝，长枝，开花，小叶子，大叶子，成熟。", "type": 1},
			{"asset_id": {"m1": "5653", "m2": "5654", "m3": "5655", "s": "2357"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 55, "insect": "0,0,0,0,0,0|54,-5,79,-44,105,-23|54,-5,79,-44,105,-23|0,0,0,0,0,0", "name": "枇杷", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：枇杷(英文：loquat)果肉柔软多汁、酸甜适度、味道鲜美，被誉为“果中之皇”。 枇杷果实及叶有抑制流感病毒作用，常吃还可以预防感冒。", "type": 1},
			{"asset_id": {"m1": "5656", "m2": "5657", "m3": "5658", "s": "2359"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 56, "insect": "0,0,0,0,0,0|66,-11,80,-37,118,-16|66,-11,80,-37,118,-16|0,0,0,0,0,0", "name": "哈密瓜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：哈密瓜(英文：cantaloupe)有清凉消暑，除烦热，生津止渴的作用，是夏季解暑的佳品。同时它对人体造血机能有显著的促进作用，可以用来作为贫血的食疗之品。", "type": 1},
			{"asset_id": {"m0": "5659", "m1": "5660", "m2": "5661", "m3": "5662", "s": "2361"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 57, "insect": "0,0,0,0,0,0|57,-9,64,-54,108,-14|57,-9,64,-54,108,-14|0,0,0,0,0,0", "name": "芒果", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：芒果(英文：mango)果实含有糖、蛋白质、粗纤维等营养素，同时它所含有的维生素A成分特别高，是所有水果中少见的。芒果一般采用嫁接的方式种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m1": "5663", "m2": "5664", "m3": "5665", "s": "2363"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 58, "insect": "0,0,0,0,0,0|57,-14,80,-48,104,-16|57,-14,80,-48,104,-16|0,0,0,0,0,0", "name": "榴莲", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：榴莲(英文：durian)被誉为“水果之王”。它含有丰富的蛋白质和脂类，对机体有很好的补养作用，是良好的果品类营养来源。", "type": 1},
			{"asset_id": {"m1": "5666", "m2": "5667", "m3": "5668", "s": "2365"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 59, "insect": "0,0,0,0,0,0|66,23,86,-10,111,15|66,0,87,-28,105,-2|0,0,0,0,0,0",  "name": "大白菜", "nextText": "种子,发芽,幼苗,成株,卷心,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：大白菜(英文：Chinese cabbage)是我国原产蔬菜，有悠久的栽培历史，含有丰富的粗纤维，能润肠排毒、帮助消化，对预防肠癌有良好作用。大白菜的生长周期为：发芽、幼苗、成株、卷心、成熟。", "type": 1},
			{"asset_id": {"m1": "5669", "m2": "5670", "m3": "5671", "s": "2367"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 60, "insect": "0,0,0,0,0,0|60,-5,87,-27,112,-2|60,-5,87,-27,112,-2|0,0,0,0,0,0",  "name": "水稻", "nextText": "种子,幼苗,秧苗,幼穗,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：水稻(英文：paddy)是一年生禾本科植物。稻谷通过去除稻壳加工等方法还能成为稻米、胚芽米、白米等人类的主要粮食。水稻一般采用在水田中插苗的方法种植，生长周期为：幼苗、秧苗、幼穗、开花、成熟。", "type": 1},
			{"asset_id": {"m1": "5672", "m2": "5673", "m3": "5674", "s": "2369"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 61, "insect": "0,0,0,0,0,0|60,-5,87,-27,112,-2|60,-5,87,-27,112,-2|0,0,0,0,0,0", "name": "小麦", "nextText": "种子,发芽,小叶子,大叶子,幼穗,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：小麦(英文：wheat)富含淀粉、蛋白质、脂肪、矿物质、钙、铁、硫胺素、核黄素、烟酸及维生素A等。经磨制加工后，即成为面粉，也称小麦粉。小麦的生长周期为：发芽、小叶子、大叶子、幼穗、成熟。", "type": 1},
			{"asset_id": {"m1": "5675", "m2": "5676", "m3": "5677", "s": "2371"}, "cropGrow": "14400,28800,46800,64800,82800,2000000000", "gossip": "", "harvestNum": 2, "id": 62, "insect": "0,0,0,0,0,0|64,13,89,-3,114,12|47,4,87,-27,117,2|0,0,0,0,0,0", "name": "四叶草", "nextText": "种子,发芽,一叶,两叶,三叶,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：四叶草（英文：clover）代表真爱、健康、名誉、幸福，专为校友用户量身打造的炫丽种子。四叶草生长周期为：种子，发芽，一叶，两叶，三叶，成熟。", "type": 1},
			{"asset_id": {"m1": "5678", "m2": "5679", "m3": "5680", "s": "2373"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 63, "insect": "0,0,0,0,0,0|42,11,87,-12,124,-11|42,11,87,-12,124,-11|0,0,0,0,0,0", "name": "苦瓜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：苦瓜(英文：balsam pear)又称凉瓜，为葫芦科植物，具有清热消暑、养血益气、补肾健脾、滋肝明目的功效。", "type": 1},
			{"asset_id": {"m1": "5681", "m2": "5682", "m3": "5683", "s": "2375"}, "cropGrow": "7200,14400,25200,39600,39600,2000000000", "gossip": "", "harvestNum": 1, "id": 64, "insect": "0,0,0,0,0,0|71,13,81,-13,102,19|71,13,81,-13,102,19|0,0,0,0,0,0", "name": "大葱", "nextText": "种子,发芽,小叶子,大叶子,成熟,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：大葱（英文：scallion）是一种很普遍的调味品或蔬菜，种类较多，可分为普通大葱、分葱、胡葱和楼葱四个类型。", "type": 1},
			{"asset_id": {"m0": "5684", "m1": "5685", "m2": "5686", "m3": "5687", "s": "2377"}, "cropGrow": "7200,18000,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 65, "insect": "0,0,0,0,0,0|73,-10,95,-46,101,-18|65,-10,84,-49,107,-22|0,0,0,0,0,0",  "name": "大蒜", "nextText": "幼株,发芽,幼苗,伸长,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：大蒜（英文：garlic）有刺激性辛辣气味，可食用或供调味，也可入药。大蒜一般用蒜头种植，生长第一阶段为幼株。", "type": 1},
			{"asset_id": {"m0": "5688", "m1": "5689", "m2": "5690", "m3": "5691", "s": "2379"}, "cropGrow": "7200,14400,25200,39600,39600,2000000000", "gossip": "", "harvestNum": 1, "id": 66, "insect": "0,0,0,0,0,0|68,-12,85,-35,102,-12|68,-12,85,-35,102,-12|0,0,0,0,0,0", "name": "鲜姜", "nextText": "幼芽,幼苗,小叶子,大叶子,成熟,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：鲜姜（英文：ginger）又称生姜、干姜等，它是一种极为重要的调味品，而且还是重要的中药材。姜一般切块种植，生长第一阶段是幼芽。", "type": 1},
			{"asset_id": {"m1": "5692", "m2": "5693", "m3": "5694", "s": "2381"}, "cropGrow": "21600,43200,68400,97200,126000,2000000000", "gossip": "", "harvestNum": 4, "id": 67, "insect": "0,0,0,0,0,0|49,7,78,-20,118,2|49,7,78,-20,118,2|0,0,0,0,0,0", "name": "香瓜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：香瓜(英文：muskmelon)又称甘瓜或甜瓜，因其清香袭人而得名，是夏令消暑瓜果，其营养价值可与西瓜媲美。", "type": 1},
			{"asset_id": {"m1": "5695", "m2": "5696", "m3": "5697", "s": "2383"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 68, "insect": "0,0,0,0,0,0|48,-7,94,-47,134,-14|48,-7,94,-47,134,-14|0,0,0,0,0,0",  "name": "冬瓜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：冬瓜（英文：wax gourd）属葫芦科作物，内含大量的维生素、矿物质和蛋白质，对护肤美白有很好的作用。", "type": 1},
			{"asset_id": {"m1": "5698", "m2": "5699", "m3": "5700", "s": "2385"}, "cropGrow": "36000,75600,115200,154800,198000,2000000000", "gossip": "", "harvestNum": 4, "id": 69, "insect": "0,0,0,0,0,0|74,12,86,-2,98,20|59,10,86,-21,100,16|0,0,0,0,0,0", "name": "莴笋", "nextText": "种子,发芽,幼苗,莲座期,成株期,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：莴笋（英文：lettuce）又叫“莴苣”，含有多种维生素和矿物质，常吃可增强胃液和消化液的分泌。", "type": 1},
			{"asset_id": {"m1": "5703", "m2": "5704", "m3": "5705", "s": "2387"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 70, "insect": "0,0,0,0,0,0|71,3,81,-28,113,-3|71,3,81,-28,113,-3|0,0,0,0,0,0", "name": "黄豆", "nextText": "种子,发芽,细苗,分枝,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：黄豆（英文：soybean）有“豆中之王”之称，被人们叫做“植物肉”、“绿色的乳牛”，营养价值丰富。", "type": 1},
			{"asset_id": {"m1": "5706", "m2": "5707", "m3": "5708", "s": "2389"}, "cropGrow": "7200,14400,25200,39600,39600,2000000000", "gossip": "", "harvestNum": 1, "id": 71, "insect": "0,0,0,0,0,0|80,-2,90,-19,105,16|80,-2,90,-19,105,16|0,0,0,0,0,0", "name": "小白菜", "nextText": "种子,发芽,小叶子,大叶子,成熟,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：小白菜（英文：pakchoi）含有丰富的钙、磷、铁，味道清香，为大众化蔬菜，一年四季都有供应。", "type": 1},
			{"asset_id": {"m0": "5709", "m1": "5710", "m2": "5711", "m3": "5712", "s": "2391"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 72, "insect": "0,0,0,0,0,0|61,-9,84,-35,109,-10|61,-9,84,-35,109,-10|0,0,0,0,0,0", "isFood": 1, "isLock": 1, "name": "榛子", "nextText": "幼苗,发芽,开花,小叶子,大叶子,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：榛子(英文：filbert)营养丰富，果仁中含有丰富的蛋白质、胡萝卜素、维生素等，是松鼠爱吃的食物之一。榛子先开花，后长叶子，一般嫁接种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m": "2392", "m0": "27898", "m1": "27899", "m2": "27900", "m3": "27901", "m4": "27902", "s": "2393"}, "cropGrow": "10800,25200,43200,43200,61200,2000000000", "eo": 24, "gossip": "", "harvestNum": 1, "id": 73, "insect": "0,0,0,0,0,0|67,11,89,-5,98,26|67,11,89,-5,98,26|0,0,0,0,0,0", "lv": 9, "name": "菠菜", "nextText": "种子,发芽,小叶子,大叶子,成熟,已成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：菠菜（英文：spinach）又叫“波斯草”，相传是二千多年前由尼泊尔人传入中国，含有钙，铁及维生素A、维生素C等多种营养物质。", "type": 1, "vipDesc": ""},
			{"asset_id": {"m0": "5713", "m1": "5714", "m2": "5715", "m3": "5716", "s": "2395"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 74, "insect": "0,0,0,0,0,0|62,-12,83,-48,109,-19|62,-12,83,-48,109,-19|0,0,0,0,0,0", "name": "金桔", "nextText": "幼苗,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：金桔（英文：kumquat）是著名的观果植物，果实金黄，具清香，盆栽金桔碧叶金丸，扶疏长荣，观赏价值极高。金桔一般嫁接种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m1": "5717", "m2": "5718", "m3": "5719", "s": "2397"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 75, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "name": "桑葚", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：桑葚（英文：mulberry）又叫桑果、桑枣，味甜多汁，具有补肝益肾、生津润肠、乌发明目等功效。", "type": 1},
			{"asset_id": {"m0": "5720", "m1": "5721", "m2": "5722", "m3": "5723", "s": "2399"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 76, "insect": "0,0,0,0,0,0|54,-12,80,-56,119,-20|54,-12,80,-56,119,-20|0,0,0,0,0,0", "name": "山竹", "nextText": "幼苗,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：山竹（英文：mangosteen）有厚紫色外皮，果肉纯白，幽香气爽，滑润而不腻，与榴莲齐名，号称“果中皇后”。山竹一般嫁接种植，第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m0": "5724", "m1": "5725", "m2": "5726", "m3": "5727", "s": "2401"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 77, "insect": "0,0,0,0,0,0|62,-5,89,-28,109,-6|62,-5,89,-28,109,-6|0,0,0,0,0,0", "name": "蓝莓", "nextText": "幼苗,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：蓝莓（英文：blueberry）是一种小浆果，果实呈蓝色，色泽美丽、悦目，是许多点心与佳肴的成分之一。蓝莓一般扦插种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m0": "5728", "m1": "5729", "m2": "5730", "m3": "5731", "s": "2403"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 78, "insect": "0,0,0,0,0,0|54,-5,73,-45,109,-19|54,-5,73,-45,109,-19|0,0,0,0,0,0", "name": "杏子", "nextText": "幼枝,发芽,开花,小叶子,大叶子,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：杏子（英文：apricot）味道酸甜，具有很高的营养价值。杏子一般嫁接种植，且先花后叶，生长周期是：幼枝，发芽，开花，小叶子，大叶子，成熟。", "type": 1},
			{"asset_id": {"m0": "5732", "m1": "5733", "m2": "5734", "m3": "5735", "s": "2405"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 79, "insect": "0,0,0,0,0,0|57,-13,71,-42,104,-21|57,-13,71,-42,104,-21|0,0,0,0,0,0", "name": "番石榴", "nextText": "幼苗,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：番石榴（英文：guava）营养丰富，维生素C含量特高。果实具有治疗糖尿病及降血糖的药效，叶片也可治腹泻。番石榴一般嫁接种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m0": "5736", "m1": "5737", "m2": "5738", "m3": "5739", "s": "2407"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 80, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "name": "月柿", "nextText": "幼苗,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：月柿（英文：persimmon）俗称柿饼，以个大、形圆、肉厚、质软、味甜而享有盛誉。月柿一般嫁接种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m0": "5740", "m1": "5741", "m2": "5742", "m3": "5743", "s": "2409"}, "cropGrow": "7200,14400,25200,36000,46800,2000000000", "gossip": "", "harvestNum": 1, "id": 81, "insect": "0,0,0,0,0,0|71,-13,85,-56,103,-28|71,-13,85,-56,103,-28|0,0,0,0,0,0", "name": "圣诞树", "nextText": "幼枝,小叶子,大叶子,幼株,成树,装饰,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：圣诞树（英文：Christmas tree）是圣诞节庆祝中最有名的传统之一。农场圣诞树专为圣诞活动装点，生长周期为：幼枝，小叶子，大叶子，幼株，成树，装饰。", "type": 1},
			{"asset_id": {"m1": "5744", "m2": "5745", "m3": "5746", "s": "2411"}, "cropGrow": "18000,39600,75600,104400,133200,2000000000", "gossip": "", "harvestNum": 3, "id": 82, "insect": "0,0,0,0,0,0|54,-5,89,-44,116,-17|54,-5,89,-44,116,-17|0,0,0,0,0,0", "name": "摇钱树", "nextText": "种子,发芽,小枝,大枝,初熟,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：传说中的摇钱树，在新年之际为农场用户带来祝福与好运，祝愿大家新的一年财源滚滚。", "type": 1},
			{"asset_id": {"m0": "5747", "m1": "5748", "m2": "5749", "m3": "5750", "s": "2413"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 83, "insect": "0,0,0,0,0,0|54,-5,98,-38,122,-10|54,-5,98,-38,122,-10|0,0,0,0,0,0", "name": "红毛丹", "nextText": "幼枝,发芽,小叶子,大叶子,开花,结果,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：红毛丹（英文：rambutan）又名毛荔枝，是热带多年生常绿乔木植物，也是著名的热带水果。红毛丹一般嫁接种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m0": "5751", "m1": "5752", "m2": "5753", "m3": "5754", "s": "2415"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 5, "id": 84, "insect": "0,0,0,0,0,0|60,-14,82,-38,116,-16|60,-14,82,-38,116,-16|0,0,0,0,0,0", "name": "芭蕉", "nextText": "幼株,发芽,小叶子,大叶子,开花,结果,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：芭蕉（英文：plantain）是多年生草本植物，叶子大而宽，喜温暖，耐寒力弱。芭蕉一般分株种植，生长第一阶段为幼株。", "type": 1},
			{"asset_id": {"m0": "5755", "m1": "5756", "m2": "5757", "m3": "5758", "s": "2417"}, "cropGrow": "18000,43200,64800,93600,111600,2000000000", "gossip": "", "harvestNum": 6, "id": 85, "insect": "0,0,0,0,0,0|54,-14,90,-52,113,-19|54,-14,90,-52,113,-19|0,0,0,0,0,0", "name": "番荔枝", "nextText": "幼枝,发芽,小叶子,大叶子,开花,结果,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：番荔枝（英文：sweetsop）为热带水果，果实味道清甜，以其独特香味被列为热带名果之一。番荔枝一般嫁接种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m0": "5759", "m1": "5760", "m2": "5761", "m3": "5762", "s": "2419"}, "cropGrow": "21600,43200,61200,82800,108000,2000000000", "gossip": "", "harvestNum": 6, "id": 86, "insect": "0,0,0,0,0,0|54,-14,81,-44,109,-26|54,-14,81,-44,109,-26|0,0,0,0,0,0", "name": "橄榄", "nextText": "幼苗,发芽,小叶子,大叶子,开花,结果,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：橄榄（英文：olive）树姿优美，果实营养丰富，有“天堂之果”的美称。橄榄一般插苗种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m0": "5763", "m1": "5764", "m2": "5765", "m3": "5766", "s": "2421"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 6, "id": 87, "insect": "0,0,0,0,0,0|53,-17,89,-55,120,-8|53,-17,89,-55,120,-8|0,0,0,0,0,0", "name": "百香果", "nextText": "幼苗,发芽,小叶子,大叶子,开花,结果,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：百香果（英文：passion fruit）俗称“巴西果”，果汁营养丰富，气味特别芳香，有“果汁之王”的美称。百香果一般插苗种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m0": "5767", "m1": "5768", "m2": "5769", "m3": "5770", "s": "2423"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 88, "insect": "0,0,0,0,0,0|51,-7,78,-49,106,-12|51,-7,78,-49,106,-12|0,0,0,0,0,0", "name": "灯笼果", "nextText": "幼枝,发芽,小叶子,大叶子,开花,结果,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：灯笼果（英文：Physalis peruviana）果实是一个像灯笼型的小圆果，完全成熟后呈紫红色，非常甜。灯笼果一般插枝种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m0": "5771", "m1": "5772", "m2": "5773", "m3": "5774", "s": "2425"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 89, "insect": "0,0,0,0,0,0|60,14,87,-1,97,12|61,18,75,-52,106,-1|0,0,0,0,0,0", "name": "芦荟", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：芦荟（英文：aloe）是一种集医药、美容、保健、观赏为一体的纯天然绿色植物。芦荟一般扦插种植，生长第一阶段为幼枝。", "type": 1},
			{"asset_id": {"m0": "5775", "m1": "5776", "m2": "5777", "m3": "5778", "s": "2427"}, "cropGrow": "21600,39600,57600,82800,108000,2000000000", "gossip": "", "harvestNum": 6, "id": 90, "insect": "0,0,0,0,0,0|52,9,71,-23,101,15|52,9,71,-23,101,15|0,0,0,0,0,0", "name": "薄荷", "nextText": "幼苗,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：薄荷（英文：peppermint）是常用中药之一，平常以薄荷泡茶，清爽可口，清心明目。薄荷一般扦插种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m0": "5779", "m1": "5780", "m2": "5781", "m3": "5782", "s": "2429"}, "cropGrow": "10800,25200,43200,57600,79200,2000000000", "gossip": "", "harvestNum": 1, "id": 91, "insect": "0,0,0,0,0,0|54,-11,101,-15,75,-34|46,-19,107,-9,86,-37|0,0,0,0,0,0", "name": "山楂", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：山楂（英文：Hawthorn fruit）又叫山里红、仙果。花期5-6个月，果期7-10月。生于海拔400-1000米间的向阳山坡、杂木林缘、灌丛间、蔬林内。山里红果实酸甜可口，能生津止渴，具有很高的营养和药用价值。", "type": 1},
			{"asset_id": {"m1": "5783", "m2": "5784", "m3": "5785", "s": "2431"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 4, "id": 92, "insect": "0,0,0,0,0,0|54,-5,87,-35,113,-13|54,-5,87,-35,113,-13|0,0,0,0,0,0", "name": "稀世琉璃果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：浏览器专属“稀世琉璃果”，三千年一开花，三千年一结果，三千年才有一颗种子。", "type": 1},
			{"asset_id": {"m0": "5786", "m1": "5787", "m2": "5788", "m3": "5789", "s": "2433"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 93, "insect": "0,0,0,0,0,0|64,-5,92,-22,120,-5|64,-5,92,-22,120,-5|0,0,0,0,0,0", "name": "炫舞之星", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "5790", "m2": "5791", "m3": "5792", "s": "2435"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 94, "insect": "0,0,0,0,0,0|65,-17,95,-18,118,-39|58,-17,83,-41,118,-27|0,0,0,0,0,0", "name": "海洋之心", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "5793", "m2": "5794", "m3": "5795", "s": "2437"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 3, "id": 95, "insect": "0,0,0,0,0,0|58,7,72,-25,112,-5|52,-3,73,-47,104,-11|0,0,0,0,0,0",  "name": "栗子", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：栗子（英文：chestnut）又称板栗，是一种可食用的坚果，味道甜美。栗树的木材坚实，还可供建筑和制器具用，树皮可供染色用，叶子可喂柞蚕。", "type": 1},
			{"asset_id": {"m1": "5796", "m2": "5797", "m3": "5798", "s": "2439"}, "cropGrow": "10800,21600,36000,50400,68400,2000000000", "gossip": "", "harvestNum": 1, "id": 96, "insect": "0,0,0,0,0,0|76,22,78,4,103,24|64,23,86,-6,112,25|0,0,0,0,0,0",  "name": "生菜", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：生菜（英文：lettuce）是叶用莴苣的俗称，富含水分，清脆爽口，特别鲜嫩，为大众蔬菜，深受人们喜爱。", "type": 1},
			{"asset_id": {"m1": "5799", "m2": "5800", "m3": "5801", "s": "2441"}, "cropGrow": "14400,32400,54000,79200,100800,2000000000", "gossip": "", "harvestNum": 1, "id": 97, "insect": "0,0,0,0,0,0|57,0,74,-55,90,-34|57,0,74,-55,90,-34|0,0,0,0,0,0",  "name": "黄瓜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：黄瓜（英文：cucumber）也称胡瓜、青瓜，营养丰富，是最常见的蔬菜之一，黄瓜还含有丰富的维生素E，可起到延年益寿、抗衰老的作用。", "type": 1},
			{"asset_id": {"m1": "5802", "m2": "5803", "m3": "5804", "s": "2443"}, "cropGrow": "21600,43200,64800,82800,100800,2000000000", "gossip": "", "harvestNum": 1, "id": 98, "insect": "0,0,0,0,0,0|67,32,84,10,108,30|59,33,92,1,118,30|0,0,0,0,0,0",  "name": "花菜", "nextText": "种子,发芽,幼苗,卷心,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：花菜（英文：cauliflower）又名花椰菜，营养丰富，更是一种保健蔬菜，有强肾壮骨、补脑填髓、健脾养胃、清肺润喉作用。 ", "type": 1},
			{"asset_id": {"m1": "5805", "m2": "5806", "m3": "5807", "s": "2445"}, "cropGrow": "14400,28800,46800,61200,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 99, "insect": "0,0,0,0,0,0|59,5,76,-27,112,13|59,5,76,-27,112,13|0,0,0,0,0,0",  "name": "油菜", "nextText": "种子,发芽,小叶子,大叶子,成熟,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：油菜（英文：rape）清爽可口，营养丰富，是最常见的蔬菜作物之一。 ", "type": 1},
			{"asset_id": {"m0": "5808", "m1": "5809", "m2": "5810", "m3": "5811", "s": "2447"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 100, "insect": "0,0,0,0,0,0|72,17,80,-24,101,8|62,14,82,-30,112,3|0,0,0,0,0,0",  "name": "竹笋", "nextText": "幼株,发芽,幼苗,伸长,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：竹笋（英文：bamboo shoots）食用部分为初生、嫩肥、短壮的芽或鞭，在我国自古被当作“菜中珍品”。", "type": 1},
			{"asset_id": {"m1": "5812", "m2": "5813", "m3": "5814", "s": "2449"}, "cropGrow": "39600,82800,126000,172800,219600,2000000000", "gossip": "", "harvestNum": 3, "id": 101, "insect": "0,0,0,0,0,0|68,5,94,-27,113,-9|68,5,94,-27,113,-9|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "薰衣草", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：薰衣草(英文：lavender)是一种馥郁的紫蓝色小花。这种小花就像起源地普鲁旺斯具有浪漫的情怀，花语是等待爱情的奇迹。", "type": 1},
			{"asset_id": {"m1": "5815", "m2": "5816", "m3": "5817", "s": "2451"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 102, "insect": "0,0,0,0,0,0|54,-2,75,-32,116,-3|54,-2,75,-32,116,-3|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "马蹄莲", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：马蹄莲(英文：calla)清雅美丽，它的花语是“忠贞不渝,永结同心”。 代表纯洁无暇的爱，高贵，永恒。", "type": 1},
			{"asset_id": {"m1": "5818", "m2": "5819", "m3": "5820", "s": "2453"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 103, "insect": "0,0,0,0,0,0|54,-2,75,-32,116,-3|54,-2,75,-32,116,-3|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "天香百合", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：天香百合(英文：goldband lily)有着百年好合的美好寓意，代表高贵，优雅，祝福和心想事成。", "type": 1},
			{"asset_id": {"m1": "5821", "m2": "5822", "m3": "5823", "s": "2455"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 104, "insect": "0,0,0,0,0,0|52,22,84,-3,113,21|52,22,84,-3,113,21|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "非洲菊", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：非洲菊(英文：African daisy)又叫扶郎花，清雅、高洁、隐逸。它的花语是永远快乐，热情和神秘。", "type": 1},
			{"asset_id": {"m1": "5824", "m2": "5825", "m3": "5826", "s": "2457"}, "cropGrow": "7200,18000,32400,46800,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 105, "insect": "0,0,0,0,0,0|68,5,94,-27,113,-9|68,5,94,-27,113,-9|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "小雏菊", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：小雏菊(英文：daisy)有三个花语，第一是永远的快乐，第二是暗恋，第三是离别，小雏菊也代表无邪和天真。", "type": 1},
			{"asset_id": {"m1": "5827", "m2": "5828", "m3": "5829", "s": "2459"}, "cropGrow": "36000,72000,108000,147600,187200,2000000000", "gossip": "", "harvestNum": 3, "id": 106, "insect": "0,0,0,0,0,0|53,1,81,-15,115,5|53,1,81,-15,115,5|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "郁金香", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：郁金香(英文：tulip)是荷兰的国花，它花色繁多，色彩丰润、艳丽。郁金香花语是：博爱、体贴、高雅、富贵、能干、聪颖。", "type": 1},
			{"asset_id": {"m1": "5830", "m2": "5831", "m3": "5832", "s": "2461"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 107, "insect": "0,0,0,0,0,0|53,-7,86,-48,112,-9|53,-7,86,-48,112,-9|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "仙人掌", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：仙人掌(英文：cactus)为肉质多年生植物，多生活在干燥地区。仙人掌拥有外刚内柔之心，花语是：坚强。", "type": 1},
			{"asset_id": {"m1": "5833", "m2": "5834", "m3": "5835", "s": "2463"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 108, "insect": "0,0,0,0,0,0|49,3,64,-27,108,-2|43,-3,64,-35,112,-9|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "铃兰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：铃兰(英文：lily of the valley)株形小巧，花香怡人，花为小型钟状花。铃兰花语是：纯洁、幸福的到来、吉祥和好运。", "type": 1},
			{"asset_id": {"m1": "5836", "m2": "5837", "m3": "5838", "s": "2465"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 109, "insect": "0,0,0,0,0,0|60,16,87,-5,122,14|60,16,87,-5,122,14|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "蝴蝶兰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：蝴蝶兰(英文：moth orchid)因花形似蝴蝶而得名，花姿婀娜，花色高雅繁多。蝴蝶兰花语是：我爱你、幸福向你飞来。", "type": 1},
			{"asset_id": {"m1": "5839", "m2": "5840", "m3": "5841", "s": "2467"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 3, "id": 110, "insect": "0,0,0,0,0,0|75,19,85,-21,101,15|71,13,85,-54,113,-12|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "isMill": "0", "name": "满天星", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：七夕节活动期间，收集满天星，和牵牛花搭配，可以在月老处换取七夕礼包。", "type": 1},
			{"asset_id": {"m1": "5842", "m2": "5843", "m3": "5844", "s": "2469"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 111, "insect": "0,0,0,0,0,0|48,-8,77,-31,114,-18|48,-8,77,-31,114,-18|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "粉玫瑰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：粉玫瑰（英文：pink rose）花呈浅粉红色，花语是“喜欢你那灿烂的微笑”，同时还代表“初恋”。", "type": 1},
			{"asset_id": {"m1": "5845", "m2": "5846", "m3": "5847", "s": "2471"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 112, "insect": "0,0,0,0,0,0|67,3,84,-12,113,-3|59,-9,85,-31,114,-13|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "风信子", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：风信子（英文：hyacinth）花序端庄，花色丰富，花姿美丽，花语为“只要点燃生命之火，便可同享丰盛人生”。 ", "type": 1},
			{"asset_id": {"m1": "5848", "m2": "5849", "m3": "5850", "s": "2473"}, "cropGrow": "25200,50400,75600,104400,133200,2000000000", "gossip": "", "harvestNum": 3, "id": 113, "insect": "0,0,0,0,0,0|59,12,85,-18,108,6|59,12,85,-18,108,6|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "栀子花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：栀子花（英文：gardenia）绿叶白花，芳香素雅，花语是“永恒的爱与约定”，也有人把栀子花的花语定为“喜悦”。", "type": 1},
			{"asset_id": {"m1": "5851", "m2": "5852", "m3": "5853", "s": "2475"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 114, "insect": "0,0,0,0,0,0|53,3,76,-36,109,-10|53,3,76,-36,109,-10|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "蓝玫瑰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：蓝玫瑰（英文：blue rose）色彩华贵，是玫瑰花中的新贵，让人着迷，其花语代表“清纯的爱和敦厚善良”。", "type": 1},
			{"asset_id": {"m0": "27903", "m1": "27904", "m2": "27905", "m3": "27906", "m4": "27907", "s": "27920"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "eo": 32, "gossip": "", "harvestNum": 4, "id": 115, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "isFlower": 1, "lv": 21, "name": "兰花", "nextText": "种子,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": ""},
			{"asset_id": {"m1": "6556", "m2": "6557", "m3": "6558", "s": "6709"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "我是白色的彼岸花。", "harvestNum": 8, "id": 116, "insect": "0,0,0,0,0,0|75,8,97,-26,110,-1|63,-2,88,-40,110,-1|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "曼陀罗华", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：曼陀罗华是白色的彼岸花，也就是白花石蒜，和曼珠沙华是同一种类不同颜色的花，传说中它花开一千年，花落一千年，花叶永不相见。", "type": 1},
			{"asset_id": {"m1": "5854", "m2": "5855", "m3": "5856", "s": "2477"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 117, "insect": "0,0,0,0,0,0|59,-3,88,-39,107,-6|59,-3,88,-39,107,-6|0,0,0,0,0,0", "isFlower": "1", "name": "康乃馨", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：康乃馨（英文：carnation）花色娇艳，有芳香，粉红色康乃馨被作为母亲节的象征，为献给母亲的花。花语有“温馨的祝福”、“母亲我爱你”等。", "type": 1},
			{"asset_id": {"m0": "5857", "m1": "5858", "m2": "5859", "m3": "5860", "s": "2479"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 118, "insect": "0,0,0,0,0,0|67,-2,85,-38,97,-14|67,-2,85,-38,97,-14|0,0,0,0,0,0", "isFlower": 1, "name": "水仙花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：水仙花（英文：narcissus）为我国十大名花之一，花朵秀丽，清香典雅，在过年象征“思念”，表示团圆，花语是“敬意”。", "type": 1},
			{"asset_id": {"m1": "5861", "m2": "5862", "m3": "5863", "s": "2481"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 119, "insect": "0,0,0,0,0,0|65,15,80,-13,115,11|60,11,85,-43,111,6|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "紫罗兰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：紫罗兰（英文：violet）花朵茂盛，花色鲜艳，香气浓郁，花期长，适宜于盆栽观赏，整株花朵可作为花束。紫罗兰的花语：永恒的美，质朴，美德。", "type": 1},
			{"asset_id": {}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 120, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "isFlower": "1", "name": "蒲公英", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "5864", "m2": "5865", "m3": "5866", "s": "2483"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 121, "insect": "0,0,0,0,0,0|62,3,87,-54,126,-6|62,3,87,-54,126,-6|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "蔷薇", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "5867", "m2": "5868", "m3": "5869", "s": "2485"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 122, "insect": "0,0,0,0,0,0|63,17,89,-16,110,16|63,17,89,-16,110,16|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "丁香花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：丁香花（英文：lilac）拥有天国之花的光荣外号，也许是因为它高贵的香味，自古就倍受珍视，因此丁香花的花语，也是配得上天国之花外号的光辉。", "type": 1},
			{"asset_id": {"m1": "5870", "m2": "5871", "m3": "5872", "s": "2487"}, "cropGrow": "54000,108000,165600,219600,277200,2000000000", "gossip": "", "harvestNum": 4, "id": 123, "insect": "0,0,0,0,0,0|41,-11,62,-31,115,-6|65,-27,97,-38,115,-5|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "海棠花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：海棠花（英文：Malus spectabilis）海棠花姿潇洒，花开似锦，自古以来是雅俗共赏的名花，素有花中神仙、花贵妃之称。", "type": 1},
			{"asset_id": {"m1": "9699", "m2": "9700", "m3": "9701", "s": "9702"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 124, "insect": "0,0,0,0,0,0|48,-14,83,-48,110,-1|48,-14,83,-48,110,-1|0,0,0,0,0,0", "isFlower": 1, "name": "月季花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": ""},
			{"asset_id": {"m1": "5873", "m2": "5874", "m3": "5875", "s": "2489"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 125, "insect": "0,0,0,0,0,0|59,6,86,-26,116,-2|59,6,86,-26,116,-2|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "太阳花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：太阳花（英文：heronsbill）花色丰富、色彩鲜艳，喜欢生长在阳光充足的环境，是非常优秀的景观花种。", "type": 1},
			{"asset_id": {"m1": "5877", "m2": "5878", "m3": "5879", "s": "2491"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "我有红花石蒜、彼岸花等十几个名字。", "harvestNum": 8, "id": 126, "insect": "0,0,0,0,0,0|71,-1,100,-32,107,-1|64,-4,92,-48,107,-10|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "曼珠沙华", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：曼珠沙华（英文：red spider lily）又叫红花石蒜、红色彼岸花，传说中它花开一千年，花落一千年，花叶永不相见。在中国，曼珠沙华代表喜庆，经常被作为观赏之花栽培。", "type": 1},
			{"asset_id": {"m0": "5880", "m1": "5881", "m2": "5882", "m3": "5883", "s": "2495"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 128, "insect": "0,0,0,0,0,0|68,4,80,-15,109,-1|54,3,79,-37,103,1|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "茉莉花", "nextText": "幼苗,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：茉莉花（英文：jasmine flower）花色洁白，香味浓厚，是常见的观赏芳香花卉。茉莉花一般扦插种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m1": "5884", "m2": "5885", "m3": "5886", "s": "3571"}, "cropGrow": "21600,43200,64800,93600,122400,2000000000", "gossip": "", "harvestNum": 3, "id": 129, "insect": "0,0,0,0,0,0|71,15,92,-7,113,11|64,-20,94,-47,102,-19|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "勿忘我", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：勿忘我（英文：Forget-me-not），又名深波叶补血草、星辰花、补血草等，花朵小巧秀丽，色彩搭配和谐醒目，青年男女互赠勿忘我，以表达深切情意。", "type": 1},
			{"asset_id": {"m1": "5888", "m2": "5889", "m3": "5890", "s": "2696"}, "cropGrow": "25200,50400,72000,93600,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 130, "insect": "0,0,0,0,0,0|57,-1,65,-39,115,-11|58,-14,65,-68,100,-5|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "琼花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：琼花（英文：Wild  Chinese Viburnum）又叫木绣球、聚八仙花等，花大如盘，洁白如玉，独具风姿雅韵。", "type": 1},
			{"asset_id": {"m1": "5891", "m2": "5892", "m3": "5893", "s": "4130"}, "cropGrow": "18000,32400,50400,82800,97200,2000000000", "gossip": "", "harvestNum": 3, "id": 131, "insect": "0,0,0,0,0,0|52,-15,79,-36,106,4|57,-14,80,-49,101,2|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "六月雪", "nextText": "幼苗,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：xxxx", "type": 1},
			{"asset_id": {"m0": "27908", "m1": "27909", "m2": "27910", "m3": "27911", "m4": "27912", "s": "27913"}, "cropGrow": "25200,39600,64800,97200,115200,2000000000", "eo": 30, "gossip": "", "harvestNum": 3, "id": 132, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isFlower": 1, "lv": 23, "name": "蓝铃花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：xxxx", "type": 1, "vipDesc": ""},
			{"asset_id": {"m1": "5894", "m2": "5895", "m3": "5896", "s": "3677"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 3, "id": 133, "insect": "0,0,0,0,0,0|60,4,83,-39,104,5|48,-10,83,-48,110,-1|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "凤仙花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：凤仙花（英文：garden balsam）又名指甲花、染指甲花、小桃红等，花语：别碰我。", "type": 1},
			{"asset_id": {"m1": "6467", "m2": "6468", "m3": "6469", "s": "2497"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 134, "insect": "0,0,0,0,0,0|48,-14,83,-48,110,-1|48,-14,83,-48,110,-1|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "绿牡丹", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：绿牡丹又叫豆绿，是牡丹四大名品之一，花开呈皇冠型或绣球型，因栽培方法较为独特，所以极为名贵。", "type": 1},
			{"asset_id": {"m1": "5898", "m2": "5899", "m3": "5900", "s": "2499"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 135, "insect": "0,0,0,0,0,0|46,7,82,-35,124,8|46,7,82,-35,124,8|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "火绒草", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "5901", "m2": "5902", "m3": "5903", "s": "2501"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 136, "insect": "0,0,0,0,0,0|65,-2,85,-35,107,3|64,5,80,-30,107,7|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "毛蟹爪莲", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：毛蟹爪莲是原产巴西、墨西哥热带雨林中的一种植物，其株形优美、花色艳丽，是巴西的国花。", "type": 1},
			{"asset_id": {"m1": "5904", "m2": "5905", "m3": "5906", "s": "2503"}, "cropGrow": "54000,108000,162000,216000,270000,2000000000", "gossip": "", "harvestNum": 1, "id": 137, "insect": "0,0,0,0,0,0|64,8,89,-38,130,-21|64,8,89,-38,130,-21|0,0,0,0,0,0", "isFlower": 1, "name": "花儿朵朵", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：花儿朵朵是这个夏天最神奇闪耀的花。", "type": 1},
			{"asset_id": {"m1": "5907", "m2": "5908", "m3": "5909", "s": "2505"}, "cropGrow": "14400,28800,46800,64800,82800,2000000000", "gossip": "", "harvestNum": 2, "id": 138, "insect": "0,0,0,0,0,0|69,4,92,-35,113,3|65,1,91,-55,107,-1|0,0,0,0,0,0", "isFlower": "1", "name": "车神之恋", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：车神之恋是飞车王国中极其罕见的神圣之花，只有车神才能真正拥有它，因此也象征着至高无上的荣誉。", "type": 1},
			{"asset_id": {"m0": "5910", "m1": "5911", "m2": "5912", "m3": "5913", "s": "2694"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 139, "insect": "0,0,0,0,0,0|61,-5,88,-40,100,-8|62,-15,82,-62,119,-6|0,0,0,0,0,0", "isFlower": 1, "name": "糖槭树花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：xxxxx", "type": 1},
			{"asset_id": {"m0": "5915", "m1": "5916", "m2": "5917", "m3": "5918", "s": "3789"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 140, "insect": "0,0,0,0,0,0|52,1,87,-43,108,-14|49,-7,104,-49,117,-16|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "象牙红", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：xxxxx", "type": 1},
			{"asset_id": {"m1": "5919", "m2": "5920", "m3": "5921", "s": "3936"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 141, "insect": "0,0,0,0,0,0|74,23,70,-9,102,13|56,1,78,-20,107,13|0,0,0,0,0,0", "isFlower": 1, "name": "花香根鸢尾", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：xxxxx", "type": 1},
			{"asset_id": {"m1": "5922", "m2": "5923", "m3": "5924", "s": "4722"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 142, "insect": "0,0,0,0,0,0|73,2,91,-24,103,3|54,-2,80,-35,121,-32|0,0,0,0,0,0", "isFlower": 1, "name": "虞美人", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：xxxxx", "type": 1},
			{"asset_id": {"m1": "5925", "m2": "5926", "m3": "5927", "s": "2507"}, "cropGrow": "10800,21600,32400,46800,64800,2000000000", "gossip": "", "harvestNum": 1, "id": 143, "insect": "0,0,0,0,0,0|84,-29,108,2,60,13|112,9,91,-41,57,11|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "含羞草", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：含羞草（Bashfulgrass）的花语是怕羞，又名怕羞草、怕丑草，它的叶片一碰即闭合，给人以文弱清秀的印象，植物学上把这种有趣的感应现象叫做感震运动。", "type": 1},
			{"asset_id": {"m1": "5928", "m2": "5929", "m3": "5930", "s": "2509"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 144, "insect": "0,0,0,0,0,0|89,-37,112,-6,55,-2|112,-4,98,-52,54,-9|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "七里香", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：七里香（Seatung）不只是情歌名，也是一种植物，它喜爱温暖湿润的气候，适合种植于海滨地区，有“爱的俘虏”之花语。", "type": 1},
			{"asset_id": {"m1": "5931", "m2": "5932", "m3": "5933", "s": "2511"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 145, "insect": "0,0,0,0,0,0|78,-46,112,7,66,0|115,8,79,-49,65,-6|0,0,0,0,0,0", "isMill": "0", "name": "向日葵", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：向日葵（Sunflower）是艺术作品中常见的菊科植物，因花序随太阳转动而得名，外形酷似太阳，葵花籽可食用。", "type": 1},
			{"asset_id": {"m1": "5934", "m2": "5935", "m3": "5936", "s": "2513"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 146, "insect": "0,0,0,0,0,0|85,-22,107,-1,74,14|109,12,72,-26,55,0|0,0,0,0,0,0", "isMill": "0", "name": "冰爽之星", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：冰爽之星（Ice Star）是为炎夏特供的一种特殊作物，可产出如星星般闪烁凉爽的冰块，供在加工坊中加工使用。种植冰爽之星，可为农场打造酷爽之感。", "type": 1},
			{"asset_id": {"m1": "5938", "m2": "5939", "m3": "5940", "s": "2515"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 3, "id": 147, "insect": "0,0,0,0,0,0|68,10,83,-43,101,15|63,9,79,-47,110,10|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "isMill": "0", "name": "牵牛花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：七夕节活动期间，收集牵牛花，和满天星搭配，可以在月老处换取七夕礼包。", "type": 1},
			{"asset_id": {"m1": "5941", "m2": "5942", "m3": "5943", "s": "2692"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 148, "insect": "0,0,0,0,0,0|57,1,79,-37,99,-1|48,-14,83,-48,110,-1|0,0,0,0,0,0", "isLock": 1, "name": "炫舞璀璨", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：炫舞璀璨是炫舞游戏花园中星舞璀璨的化身。", "type": 1},
			{"asset_id": {"m1": "7427", "m2": "7428", "m3": "7429", "s": "7426"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 150, "insect": "0,0,0,0,0,0|81,15,70,-21,94,-2|67,-5,72,-55,103,-25|0,0,0,0,0,0", "isLock": 1, "name": "梦幻圣果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：象征着梦想和童趣的梦幻圣果，拥有开启梦幻浪漫园的力量。栽种梦幻圣果，等你做它的主人哦！", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "5944", "m2": "5945", "m3": "5946", "s": "3397"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 151, "insect": "0,0,0,0,0,0|76,26,76,-26,99,20|76,27,72,-37,100,19|0,0,0,0,0,0", "isLock": 1, "name": "幻想彩虹树", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：自由幻想的幻想彩虹树，果实能让你幻想成真。", "type": 1},
			{"asset_id": {"m1": "6744", "m2": "6745", "m3": "6746", "s": "6747"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 152, "insect": "0,0,0,0,0,0|62,21,75,7,96,18|53,12,80,-61,105,17|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "幻想幸运星", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：超萌超可爱的幸运之星，能带来超越想象的惊喜，凭果实到，可兑换超给力珍贵大礼包，还有稀有神宠“红毛小Q”等着你。", "type": 1},
			{"asset_id": {"m1": "5948", "m2": "5949", "m3": "5950", "s": "2681"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 1, "id": 153, "insect": "0,0,0,0,0,0|64,-11,97,-35,102,10|56,-23,101,-46,102,8|0,0,0,0,0,0", "isLock": 1, "isMill": "0", "name": "月亮果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：中秋国庆活动期间，收集月亮果，和月桂花搭配，可以在嫦娥处换取中秋国庆礼包。", "type": 1},
			{"asset_id": {"m0": "5951", "m1": "5952", "m2": "5953", "m3": "5954", "s": "2683"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 1, "id": 154, "insect": "0,0,0,0,0,0|64,-11,97,-35,104,1|58,-13,90,-56,102,-1|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "isMill": "0", "name": "月桂花", "nextText": "幼苗,发芽,小叶子,大叶子,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：中秋国庆活动期间，收集月桂花，和月亮果搭配，可以在嫦娥处换取中秋国庆礼包。", "type": 1},
			{"asset_id": {"h": "3476", "m1": "5955", "m2": "5956", "m3": "5957", "s": "3401"}, "cropGrow": "14400,28800,46800,64800,82800,2000000000", "gossip": "", "harvestNum": 2, "id": 158, "insect": "0,0,0,0,0,0|57,4,77,-19,100,4|54,-4,77,-34,118,-11|0,0,0,0,0,0", "isAnimation": 1, "isLock": 1, "name": "银鹭花生", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "5958", "m2": "5959", "m3": "5960", "s": "4084"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 159, "insect": "0,0,0,0,0,0|49,-4,83,-39,111,-11|42,-10,71,-55,120,-17|0,0,0,0,0,0", "isLock": 1, "name": "幻世天缘果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：充满美丽情缘的“幻想世界”种子，", "type": 1},
			{"asset_id": {"m1": "5961", "m2": "5962", "m3": "5963", "s": "3399"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 5, "id": 160, "insect": "0,0,0,0,0,0|60,5,66,-19,100,3|48,-5,81,-54,108,-12|0,0,0,0,0,0", "name": "彩灯果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：彩灯果源于彩灯的形象，彩灯又名花灯，是非常流行的传统民间工艺品，象征幸福和快乐，在节日种下彩灯果，让你的农场光彩夺目！", "type": 1},
			{"asset_id": {"m1": "5964", "m2": "5965", "m3": "5966", "s": "3673"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 3, "id": 161, "insect": "0,0,0,0,0,0|59,1,80,-40,104,-1|55,-2,85,-41,101,7|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "秋菊（黄色）", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：秋菊（英文：florists chrysanthemum），是花中四君子之一，为名贵的观赏花卉，颜色繁多。", "type": 1},
			{"asset_id": {"m1": "5968", "m2": "5969", "m3": "5970", "s": "3765"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 3, "id": 162, "insect": "0,0,0,0,0,0|63,-8,84,-32,98,1|64,-11,87,-43,107,-5|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "秋菊（红色）", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m0": "11818", "m1": "11819", "m2": "11820", "m3": "11821", "m4": "11822", "s": "11823"}, "cropGrow": "18000,39600,61200,86400,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 163, "insect": "0,0,0,0,0,0|65,-30,82,-2,83,-15|94,-31,83,-48,89,-64|0,0,0,0,0,0", "isYouji": 1, "name": "祈福果", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "5971", "m2": "5972", "m3": "5973", "s": "3757"}, "cropGrow": "18000,39600,61200,90000,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 164, "insect": "0,0,0,0,0,0|57,-3,82,-15,110,-1|64,10,80,-30,110,-1|0,0,0,0,0,0", "name": "万圣南瓜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "5974", "m2": "5975", "m3": "5976", "s": "3675"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 165, "insect": "0,0,0,0,0,0|41,-17,98,-42,112,-9|54,-21,95,-56,121,-13|0,0,0,0,0,0", "isMill": "0", "name": "茱萸", "nextText": "种子,幼枝,长枝,开花,大叶子,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：茱萸（英文：cornel）雅号“辟邪翁”，重阳佩茱萸的习俗在唐代很盛行，人们认为插茱萸可避难消灾。茱萸是先花后叶，生长状态为：种子,幼枝,长枝,开花,大叶子,成熟。", "type": 1},
			{"asset_id": {"m1": "5977", "m2": "5978", "m3": "5979", "s": "3759"}, "cropGrow": "36000,68400,104400,140400,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 166, "insect": "0,0,0,0,0,0|61,-26,99,-52,122,-21|58,-29,81,-43,123,-20|0,0,0,0,0,0", "name": "七彩果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "5980", "m2": "5981", "m3": "5982", "s": "3761"}, "cropGrow": "14400,32400,50400,68400,86400,2000000000", "gossip": "", "harvestNum": 1, "id": 167, "insect": "0,0,0,0,0,0|68,-25,85,-43,114,-8|57,-10,85,-44,114,-11|0,0,0,0,0,0", "isLock": 1, "name": "糖果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"h": "3942", "m1": "5984", "m2": "5985", "m3": "5986", "s": "3941"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 168, "insect": "0,0,0,0,0,0|68,-3,79,-24,97,1|58,-11,53,-53,112,-28|0,0,0,0,0,0", "isAnimation": 1, "isLock": 1, "name": "魔法士爱心树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m": "4117", "m1": "5987", "m2": "5988", "m3": "5989", "s": "4118"}, "cropGrow": "7200,18000,28800,39600,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 169, "insect": "0,0,0,0,0,0|73,12,84,-8,103,13|56,4,87,-20,113,8|0,0,0,0,0,0", "isVIP": 1, "name": "红色景观树", "nextText": "种子,发芽,小叶子,大叶子,初形,成形", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的景观树，让我们一起DIY与众不同的农场！", "type": 1, "vipDesc": "神奇的红色景观树"},
			{"asset_id": {"m": "4119", "m1": "5990", "m2": "5991", "m3": "5992", "s": "4120"}, "cropGrow": "7200,18000,28800,39600,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 170, "insect": "0,0,0,0,0,0|73,12,84,-8,102,9|56,4,83,-13,117,0|0,0,0,0,0,0", "isVIP": 1, "name": "黄色景观树", "nextText": "种子,发芽,小叶子,大叶子,初形,成形", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的景观树，让我们一起DIY与众不同的农场！", "type": 1, "vipDesc": "神奇的黄色景观树"},
			{"asset_id": {"m": "4121", "m1": "5993", "m2": "5994", "m3": "5995", "s": "4122"}, "cropGrow": "7200,18000,28800,39600,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 171, "insect": "0,0,0,0,0,0|73,12,84,-8,97,7|56,4,83,-18,103,0|0,0,0,0,0,0", "isVIP": 1, "name": "绿色景观树", "nextText": "种子,发芽,小叶子,大叶子,初形,成形", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的景观树，让我们一起DIY与众不同的农场！", "type": 1, "vipDesc": "神奇的绿色景观树"},
			{"asset_id": {"m1": "5996", "m2": "5997", "m3": "5998", "s": "4939"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 172, "insect": "0,0,0,0,0,0|72,9,87,-14,98,6|61,-6,95,-37,102,7|0,0,0,0,0,0", "isFlower": 1, "name": "宋梅", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "5999", "m2": "6000", "m3": "6001", "s": "4342"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 173, "insect": "0,0,0,0,0,0|68,6,86,-15,97,8|58,5,87,-29,99,10|0,0,0,0,0,0", "isFlower": 1, "name": "夜来香", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6002", "m2": "6003", "m3": "6004", "s": "4234"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 174, "insect": "0,0,0,0,0,0|72,26,106,15,76,12|70,23,104,12,80,-3|0,0,0,0,0,0", "isFlower": 1, "name": "晚香玉", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6005", "m2": "6006", "m3": "6007", "s": "4344"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 175, "insect": "0,0,0,0,0,0|55,8,77,-25,107,13|54,-8,95,-43,105,3|0,0,0,0,0,0", "isFlower": 1, "name": "黄花魁", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6008", "m2": "6009", "m3": "6010", "s": "4128"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 176, "insect": "0,0,0,0,0,0|63,-16,79,-36,96,0|59,-15,94,-40,100,-6|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "金银花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6011", "m2": "6012", "m3": "6013", "s": "4111"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 177, "insect": "0,0,0,0,0,0|67,5,92,-20,103,4|59,-28,92,-48,106,-10|0,0,0,0,0,0", "name": "搜搜智慧果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6014", "m2": "6015", "m3": "6016", "s": "4569"}, "cropGrow": "28800,57600,93600,136800,165600,2000000000", "ext": "", "gossip": "", "harvestNum": 3, "id": 178, "insect": "0,0,0,0,0,0|74,20,91,-40,103,19|67,21,91,-48,107,18|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "三国诸葛羽", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：三国诸葛亮手执羽扇所化的“诸葛羽”种子，", "type": 1},
			{"asset_id": {"m0": "6018", "m1": "6019", "m2": "6020", "m3": "6021", "s": "4332"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 179, "insect": "0,0,0,0,0,0|61,25,83,-6,106,23|56,29,85,1,108,27|0,0,0,0,0,0", "isFlower": 1, "name": "家园挚爱花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6991", "m2": "6992", "m3": "6993", "s": "6994"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 180, "insect": "0,0,0,0,0,0|71,20,85,6,107,22|76,17,83,-48,109,22|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "战地之星", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：这是一种能给你带来神奇力量的生物。凭果实到，可兑换AVA幸运大礼包，稀有道具等你拿！", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "6371", "m2": "6372", "m3": "6373", "s": "5454"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 181, "insect": "0,0,0,0,0,0|65,-7,74,-56,101,-9|67,-3,76,-57,112,-30|0,0,0,0,0,0", "isLock": 1, "name": "音速星语", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：音速种子降临农场！", "type": 1},
			{"asset_id": {"m1": "6741", "m2": "6742", "m3": "6743", "s": "6740"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 182, "insect": "0,0,0,0,0,0|63,10,98,-13,92,10|59,3,91,-35,94,10|0,0,0,0,0,0", "isFlower": 1, "name": "艳蝶兰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6729", "m2": "6730", "m3": "6731", "s": "6728"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 183, "insect": "0,0,0,0,0,0|52,-39,93,-54,109,-4|57,-31,90,-59,108,-14|0,0,0,0,0,0", "isFlower": 1, "name": "木棉花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": ""},
			{"asset_id": {"m0": "12299", "m1": "12300", "m2": "12301", "m3": "12302", "m4": "12303", "s": "12304"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 184, "insect": "0,0,0,0,0,0|88,2,91,-17,78,-4|90,-14,70,-19,82,-33|0,0,0,0,0,0", "isYouji": 1, "name": "卡特兰", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "6733", "m2": "6734", "m3": "6735", "s": "6732"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 185, "insect": "0,0,0,0,0,0|65,-3,90,-43,100,-3|50,-17,86,-65,108,-7|0,0,0,0,0,0", "isFlower": 1, "name": "似何莲", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6022", "m2": "6023", "m3": "6024", "s": "5255"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 186, "insect": "0,0,0,0,0,0|62,17,86,-21,102,5|48,-14,83,-48,110,-1|0,0,0,0,0,0", "isFlower": 1, "name": "米兰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6025", "m2": "6026", "m3": "6027", "s": "4941"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 187, "insect": "0,0,0,0,0,0|72,9,87,-14,98,6|60,9,88,-37,110,13|0,0,0,0,0,0", "isFlower": 1, "name": "君子兰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6736", "m2": "6737", "m3": "6738", "s": "6739"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 188, "insect": "0,0,0,0,0,0|69,8,87,-13,103,21|59,3,86,-40,108,21|0,0,0,0,0,0", "isFlower": 1, "name": "文殊兰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "7483", "m2": "7484", "m3": "7485", "s": "7482"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 189, "insect": "0,0,0,0,0,0|80,22,83,-8,95,8|80,6,86,-33,93,-13|0,0,0,0,0,0", "isFlower": 1, "name": "鸡冠花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "6470", "m2": "6471", "m3": "6472", "s": "4676"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 190, "insect": "0,0,0,0,0,0|82,13,91,-23,98,-1|72,1,83,-48,100,-4|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "阿拉德之花", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：嗜血的魔界花朵，凭果实到“道具唤醒”页面，可兑换超炫DNF道具大礼包，挑战书、袖珍罐、超实用消耗品等着你来。", "type": 1},
			{"asset_id": {"m1": "6028", "m2": "6029", "m3": "6030", "s": "4776"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 191, "insect": "0,0,0,0,0,0|61,-22,93,-43,101,-15|62,-22,92,-58,111,-23|0,0,0,0,0,0", "isLock": 1, "name": "西游仙桃", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：九千年一开花，九千年一结果。", "type": 1},
			{"asset_id": {"m1": "10721", "m2": "10722", "m3": "10723", "s": "10724"}, "cropGrow": "28800,54000,79200,108000,136800,2000000000", "gossip": "", "harvestNum": 8, "id": 192, "insect": "0,0,0,0,0,0|82,14,85,7,87,0|84,14,54,-2,90,-12|0,0,0,0,0,0", "isFlower": 1, "name": "黄番红花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12305", "m1": "12306", "m2": "12307", "m3": "12308", "m4": "12309", "s": "12310"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 193, "insect": "0,0,0,0,0,0|88,2,91,-17,78,-4|90,-14,70,-19,82,-33|0,0,0,0,0,0", "isYouji": 1, "name": "红云飞片", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "6031", "m2": "6032", "m3": "6033", "s": "4817"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 194, "insect": "0,0,0,0,0,0|64,26,86,-38,103,29|65,24,89,-61,104,28|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "七雄璧玉花", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：象征爱情的幸福之花，凭果实到道具唤醒活动页面兑换50Q币“七雄争霸”大礼包，更有机会赢得珍贵的“七雄新年城堡”！ ", "type": 1},
			{"asset_id": {"m1": "6034", "m2": "6035", "m3": "6036", "s": "5373"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 195, "insect": "0,0,0,0,0,0|79,24,90,-20,103,21|74,26,90,-39,100,20|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "飞车花匙", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：飞车的神秘宝藏钥匙的化身！", "type": 1},
			{"asset_id": {"m1": "6037", "m2": "6038", "m3": "6039", "s": "5091"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 197, "insect": "0,0,0,0,0,0|74,-30,93,-54,107,-28|61,-27,85,-67,103,-37|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "火线夜玫瑰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：激情与冷艳交织的玫瑰，兑换总值45Q币“穿越火线”新春回馈礼包，体验枪战快感！", "type": 1},
			{"asset_id": {"m1": "6040", "m2": "6041", "m3": "6042", "s": "5257"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 198, "insect": "0,0,0,0,0,0|70,29,91,-37,99,20|71,23,93,-59,103,20|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "大明龙纹花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：大明朝龙魂所化，兑换550Q点“大明龙权”游戏大礼包！“天授羽衣”、“经验宝珠”等你来拿！", "type": 1},
			{"asset_id": {"m0": "11022", "m1": "11023", "m2": "11024", "m3": "11025", "m4": "11026", "s": "11027"}, "cropGrow": "25200,50400,79200,108000,144000,2000000000", "gossip": "只能对我施有机肥哦\n", "harvestNum": 5, "id": 200, "insect": "0,0,0,0,0,0|80,-3,73,-15,96,-8|89,-18,83,-33,74,-6|0,0,0,0,0,0", "isYouji": 1, "name": "蓝田玉", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：“亲，有机种子只能使用有机化肥减少生长时间哦”", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "6044", "m1": "6045", "m2": "6046", "m3": "6047", "s": "2517"}, "cropGrow": "32400,64800,90000,115200,133200,2000000000", "gossip": "我是国家重点保护的名贵天然药物。", "harvestNum": 9, "id": 201, "insect": "0,0,0,0,0,0|64,1,87,-4,104,10|64,1,88,-14,103,3|0,0,0,0,0,0", "isRed": "1", "name": "天山雪莲", "nextText": "种子,发芽,小叶子,大叶子,幼株,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：天山雪莲（英文：saussurea involucrata）大如莲花，叶色如碧玉，一般生长在高寒山地，有神奇的药理作用，被称为“药中极品”。雪莲花的花语是：纯洁的爱。", "type": 1},
			{"asset_id": {"m0": "6048", "m1": "6049", "m2": "6050", "m3": "6051", "m4": "6052", "s": "2519"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "很多传说中，我能令人起死回生。", "harvestNum": 9, "id": 202, "insect": "0,0,0,0,0,0|95,-1,73,-14,117,-15|93,-4,77,-28,118,-20|0,0,0,0,0,0", "isRed": "1", "name": "金边灵芝", "nextText": "原基,发芽,芝蕾,幼芝,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：灵芝（英文：ganoderma）俗称“仙草”，在我国数千年的历史长河中，关于灵芝的神奇传说绵延不断，有“百草之王”的称号。金边灵芝是灵芝系列产品中的上品。", "type": 1},
			{"asset_id": {"m1": "8822", "m2": "8823", "m3": "8824", "s": "8821"}, "cropGrow": "32400,64800,97200,133200,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 203, "insect": "0,0,0,0,0,0|99,3,100,-14,69,-3|91,0,104,-20,62,-6|0,0,0,0,0,0", "name": "三七", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：三七（英文：pseudo ginseng）又名田七，明代著名的药学家李时珍称其为“金不换”。三七是中药材中的一颗明珠，茎、叶、花均可入药。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "6053", "m2": "6054", "m3": "6055", "s": "2615"}, "cropGrow": "28800,61200,90000,122400,151200,2000000000", "gossip": "听说长白山上有我好多亲戚。", "harvestNum": 9, "id": 204, "insect": "0,0,0,0,0,0|75,-9,87,-26,101,-3|57,-28,80,-39,102,-14|0,0,0,0,0,0", "isFlower": "0", "isFood": "0", "isLock": "0", "isRed": "1", "isRestaurant": "0", "name": "人参", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：人参（英文：ginseng）野生的称为“野山参”，栽培的称“园参”，因其药用价值极高，且濒临绝迹，所以被列为国家一级保护植物。", "type": 1},
			{"asset_id": {"m1": "8744", "m2": "8745", "m3": "8746", "s": "2521"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "", "harvestNum": 8, "id": 205, "insect": "0,0,0,0,0,0|48,-9,78,-38,122,-4|44,-13,94,-46,127,-5|0,0,0,0,0,0", "name": "一点红", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：一点红（英文：emilia sonchifolia）又名叶下红、红背叶等，是常见的中药作物，有凉血解毒，活血散瘀，利水消肿等功效。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"actPeriod": "", "actProvideAmt": "", "asset_id": {"m1": "9778", "m2": "9779", "m3": "9780", "s": "9777"}, "cropGrow": "28800,54000,79200,108000,136800,2000000000", "gossip": "", "harvestNum": 8, "id": 207, "insect": "0,0,0,0,0,0|59,-3,93,-30,107,-1|63,-5,75,-40,100,-7|0,0,0,0,0,0", "isFlower": 1, "name": "八仙花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "6056", "m2": "6057", "m3": "6058", "s": "3395"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "", "harvestNum": 7, "id": 208, "insect": "0,0,0,0,0,0|64,5,89,-48,107,2|65,-10,86,-56,123,2|0,0,0,0,0,0", "name": "决明子", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：决明子（英文：cassia seed）是中药作物，味甘苦咸、性微寒，主治目赤涩痛，羞明多泪，头痛眩晕等。", "type": 1},
			{"asset_id": {"m1": "6059", "m2": "6060", "m3": "6061", "s": "3939"}, "cropGrow": "32400,64800,100800,133200,165600,2000000000", "gossip": "", "harvestNum": 7, "id": 209, "insect": "0,0,0,0,0,0|67,12,79,-24,97,1|70,15,73,-25,100,3|0,0,0,0,0,0", "name": "关苍术", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：关苍术（英文：japanese artactylodes rhizome）有浓郁的特异香气，喜凉爽气候，是重要的中药作物，可治愈食欲不振，时气感冒等病症。", "type": 1},
			{"asset_id": {"m1": "6062", "m2": "6063", "m3": "6064", "s": "4232"}, "cropGrow": "36000,68400,100800,133200,165600,2000000000", "gossip": "", "harvestNum": 7, "id": 210, "insect": "0,0,0,0,0,0|63,22,73,-13,94,13|67,24,69,-32,97,17|0,0,0,0,0,0", "name": "冬凌草", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：冬凌草（英文：rabdosia rubescens）因其植株凝结薄如蝉翼、形态各异的蝶状冰凌片而得名，同时它具有清热解毒、消炎止痛、健胃活血之效，药用部位是全株。", "type": 1},
			{"asset_id": {"m1": "6065", "m2": "6066", "m3": "6067", "s": "4678"}, "cropGrow": "32400,64800,97200,129600,165600,2000000000", "gossip": "", "harvestNum": 7, "id": 211, "insect": "0,0,0,0,0,0|72,19,92,-24,92,4|71,15,96,-43,97,-9|0,0,0,0,0,0", "name": "关白附子", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：关白附子（英文：Korean Monkshood Root）主产区集中在低山丘陵地带，是重要的中药作物。", "type": 1},
			{"asset_id": {"m1": "7704", "m2": "7705", "m3": "7706", "s": "7703"}, "cropGrow": "32400,64800,100800,133200,165600,2000000000", "gossip": "", "harvestNum": 7, "id": 212, "insect": "0,0,0,0,0,0|70,4,94,-22,123,-2|64,2,83,-23,110,-9|0,0,0,0,0,0", "name": "兔儿伞", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：兔儿伞（英文：Syneilesis aconitifolia）别名有七里麻、一把伞、南天扇等，是有名的中药作物，有祛风除湿、解毒活血、消肿止痛等功效。", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m0": "6068", "m1": "6069", "m2": "6070", "m3": "6071", "s": "2525"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "我是贮水本领最大的树。", "harvestNum": 8, "id": 218, "insect": "0,0,0,0,0,0|59,-34,98,-71,116,-41|59,-34,98,-71,116,-41|0,0,0,0,0,0", "isRed": "1", "name": "瓶子树", "nextText": "幼苗,长枝,小叶子,大叶子,初熟,成树", "offsetX": 0, "offsetY": 0, "tip": "小贴士：瓶子树也叫佛肚树，可高达30米，最粗的地方直径可达5米，据说是最能贮水的植物，可以为荒漠上的旅行者提供水源。", "type": 1},
			{"asset_id": {"m1": "6073", "m2": "6074", "m3": "6075", "s": "2527"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "我的名字是尊贵与权威的象征。", "harvestNum": 9, "id": 219, "insect": "0,0,0,0,0,0|54,-5,87,-32,113,4|54,-5,87,-32,113,4|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "isRed": "1", "name": "路易十四", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：路易十四产地法国，是深紫色的珍稀玫瑰花品种，以“路易十四”的名字命名，象征了尊贵与权威。", "type": 1},
			{"asset_id": {"m0": "6076", "m1": "6077", "m2": "6078", "m3": "6079", "s": "2529"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "我不吃素，我爱吃昆虫。", "harvestNum": 8, "id": 220, "insect": "0,0,0,0,0,0|53,-18,87,-36,115,-8|54,-33,87,-52,118,-20|0,0,0,0,0,0", "isRed": "1", "name": "猪笼草", "nextText": "幼苗,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：猪笼草（英文：pitcher plant）为热带食虫植物的代表，其美丽的叶笼特别诱人，造型十分优雅别致。猪笼草一般扦插种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m1": "6080", "m2": "6081", "m3": "6082", "s": "2531"}, "cropGrow": "18000,32400,54000,79200,108000,2000000000", "gossip": "我被视为“自由、吉祥、幸福”的象征。", "harvestNum": 8, "id": 221, "insect": "0,0,0,0,0,0|66,-1,78,-27,102,5|61,-1,84,-37,103,5|0,0,0,0,0,0", "isRed": "1", "name": "天堂鸟", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：天堂鸟又叫鹤望兰，因花形酷似鸟冠和鸟嘴而得名，被视为“自由、吉祥、幸福”的象征。", "type": 1},
			{"asset_id": {"m0": "6084", "m1": "6085", "m2": "6086", "m3": "6087", "s": "2533"}, "cropGrow": "25200,50400,75600,104400,133200,2000000000", "gossip": "我的花色与金钱豹的毛皮极为相似。", "harvestNum": 8, "id": 222, "insect": "0,0,0,0,0,0|65,-2,87,-36,107,10|65,-2,87,-36,107,10|0,0,0,0,0,0", "isRed": "1", "name": "豹皮花", "nextText": "幼苗,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：豹皮花（英文：leopard skin flower）花朵呈五角星状，别具一格，是观赏价值很高的盆栽花卉。豹皮花一般扦插种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m1": "6088", "m2": "6089", "m3": "6090", "s": "2535"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "我到初夏才会吐露芬芳。", "harvestNum": 8, "id": 223, "insect": "0,0,0,0,0,0|58,-7,71,-54,111,-22|58,-7,71,-54,111,-22|0,0,0,0,0,0", "isRed": "1", "name": "夏蜡梅", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：夏蜡梅（英文：calycanthus chinensis）花朵大而美丽，一般到初夏才开始绽放，具有较大的观赏价值，也是国家二级重点保护植物。", "type": 1},
			{"asset_id": {"m1": "6091", "m2": "6092", "m3": "6093", "s": "2537"}, "cropGrow": "54000,108000,165600,219600,277200,2000000000", "gossip": "我的别名是：月下美人。", "harvestNum": 1, "id": 224, "insect": "0,0,0,0,0,0|55,-6,88,-39,123,-10|55,-6,88,-39,123,-10|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "昙花", "nextText": "幼苗,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：昙花（英文：epiphyllum）又叫韦驮花，总是在黎明时分绽放，开放时间很短，故有“昙花一现”之说。昙花一般扦插种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m1": "6094", "m2": "6095", "m3": "6096", "s": "2539"}, "cropGrow": "32400,68400,104400,140400,176400,2000000000", "gossip": "我是稀罕的品种，被誉为国家一级保护植物。", "harvestNum": 8, "id": 225, "insect": "0,0,0,0,0,0|59,3,111,-13,75,-34|54,-6,108,-15,102,-35|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "宝华玉兰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：宝华玉兰（英文：Baohua magnolia）树干挺拔，花大美丽，芳香，是非常珍贵的园林观赏落叶乔木。由于它们的种群数量稀少，被定为国家一级保护植物。", "type": 1},
			{"asset_id": {"m1": "6097", "m2": "6098", "m3": "6099", "s": "2541"}, "cropGrow": "21600,43200,64800,93600,118800,2000000000", "gossip": "我的花瓣有4种颜色，神奇吧。", "harvestNum": 8, "id": 226, "insect": "0,0,0,0,0,0|64,-21,92,-43,114,-9|64,-21,92,-43,114,-9|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "依米花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：依米花是生长在非洲戈壁滩上的神奇之花，它有四个花瓣，一个花瓣一种颜色，煞是娇艳绚丽。", "type": 1},
			{"asset_id": {"m1": "6100", "m2": "6101", "m3": "6102", "s": "2543"}, "cropGrow": "18000,39600,72000,104400,136800,2000000000", "gossip": "他们说我是世界上最大的花。", "harvestNum": 8, "id": 227, "insect": "0,0,0,0,0,0|77,31,82,6,99,25|71,20,88,-1,104,32|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "大王花", "nextText": "种子,发芽,幼蕾,含苞,初放,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：大王花（英文：Rafflesia）又叫大花草，生长在热带森林中，据说花朵能够长到直径三英尺，最大的直径可达1.4米，号称是世界上最大的花。", "type": 1},
			{"asset_id": {"m0": "6103", "m1": "6104", "m2": "6105", "m3": "6106", "s": "2545"}, "cropGrow": "28800,61200,100800,129600,158400,2000000000", "gossip": "很多小说中都爱赋予我神奇的色彩。", "harvestNum": 8, "id": 228, "insect": "0,0,0,0,0,0|61,-6,72,-64,114,5|61,-6,72,-64,114,5|0,0,0,0,0,0", "isRed": "1", "name": "人参果", "nextText": "幼苗,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：人参果又名香瓜茄，富含多种营养物质，具有保健功效，中国古代小说经常提及并赋予了它能令人起死回生等神奇色彩。人参果一般扦插种植，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m1": "6107", "m2": "6108", "m3": "6109", "s": "2547"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "传说何首乌最开始是一个人的名字。", "harvestNum": 9, "id": 229, "insect": "0,0,0,0,0,0|74,6,87,-17,113,-3|73,-4,88,-28,110,-10|0,0,0,0,0,0", "isRed": "1", "name": "何首乌", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：何首乌（英文：polygonum multiflorum）的块根、藤茎及叶均可供药用，具有补肝肾，益精血，乌须发，生发，强筋骨之功效。", "type": 1},
			{"asset_id": {"m1": "6110", "m2": "6111", "m3": "6112", "s": "2549"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "", "harvestNum": 3, "id": 230, "insect": "0,0,0,0,0,0|48,1,89,-50,128,-21|51,0,85,-54,136,-13|0,0,0,0,0,0", "name": "多彩葫芦", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：多彩葫芦（Colorful Gourd）象征吉祥，多彩葫芦给人带来好运。葫芦果实成熟后经一定处理可作为容器，如酒壶、水瓢、观赏品等。", "type": 1},
			{"asset_id": {"m0": "6113", "m1": "6114", "m2": "6115", "m3": "6116", "s": "2551"}, "cropGrow": "28800,54000,82800,115200,144000,2000000000", "gossip": "", "harvestNum": 3, "id": 231, "insect": "0,0,0,0,0,0|35,-16,67,-66,134,-24|35,-16,67,-66,134,-24|0,0,0,0,0,0", "isMill": "0", "name": "人参娃", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：xxxxxx", "type": 1},
			{"asset_id": {"m0": "6117", "m1": "6118", "m2": "6119", "m3": "6120", "s": "2553"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 232, "insect": "0,0,0,0,0,0|63,11,85,-26,113,12|63,11,85,-26,113,12|0,0,0,0,0,0", "isMill": "0", "name": "七色花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：xxxxxx", "type": 1},
			{"asset_id": {"m0": "6121", "m1": "6122", "m2": "6123", "m3": "6124", "s": "2555"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "", "harvestNum": 3, "id": 233, "insect": "0,0,0,0,0,0|76,-24,86,-40,94,-27|73,-35,100,-39,81,-41|0,0,0,0,0,0", "isMill": "0", "name": "宝莲灯", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：宝莲灯（英文：Lotus Lantern）神话传说中的宝物，里面具有神奇的功效，假如吃了它的灯蕊，就能具有千年的法力。", "type": 1},
			{"asset_id": {"m1": "6125", "m2": "6126", "m3": "6127", "s": "2617"}, "cropGrow": "25200,46800,79200,97200,129600,2000000000", "gossip": "", "harvestNum": 3, "id": 234, "insect": "0,0,0,0,0,0|57,5,74,-22,98,13|55,10,84,-32,94,13|0,0,0,0,0,0", "isFlower": "1", "isFood": "0", "isLock": "0", "isMill": "0", "isRed": "0", "isRestaurant": "0", "name": "食人花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：食人花（英文：CannibalPlant）传说中的神奇作物，经常出现在科幻小说中。传说食人花拥有美丽的花盘，散发出浓厚的香味，但其毒液非常厉害。", "type": 1},
			{"asset_id": {"m1": "6129", "m2": "6130", "m3": "6131", "s": "2557"}, "cropGrow": "21600,54000,82800,111600,136800,2000000000", "gossip": "我有“茶族皇后”的美誉。", "harvestNum": 8, "id": 235, "insect": "0,0,0,0,0,0|54,-8,78,-40,103,-6|53,-9,72,-44,108,-15|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "金花茶", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：金花茶（英文：Camellia nitidissima）是一种古老的，极为稀有的珍贵植物，国外称之为神奇的东方魔茶，被誉为“植物界大熊猫”、“茶族皇后”。 ", "type": 1},
			{"asset_id": {"m1": "6132", "m2": "6133", "m3": "6134", "s": "2559"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 236, "insect": "0,0,0,0,0,0|52,-6,87,-42,99,-14|55,-9,100,-39,101,-7|0,0,0,0,0,0", "name": "橙葫芦", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：橙葫芦（orange Gourd）来源于很多神奇的传说故事，可供在加工坊中加工使用。葫芦果实成熟后经一定处理可作为容器，如酒壶、水瓢、观赏品等。", "type": 1},
			{"asset_id": {"m1": "6135", "m2": "6136", "m3": "6137", "s": "2561"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 237, "insect": "0,0,0,0,0,0|58,-5,69,-47,106,-23|59,-5,69,-43,108,-24|0,0,0,0,0,0", "name": "黄葫芦", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：黄葫芦（yellow Gourd）来源于很多神奇的传说故事，可供在加工坊中加工使用。葫芦果实成熟后经一定处理可作为容器，如酒壶、水瓢、观赏品等。", "type": 1},
			{"asset_id": {"m1": "6138", "m2": "6139", "m3": "6140", "s": "2563"}, "cropGrow": "36000,72000,108000,147600,187200,2000000000", "gossip": "", "harvestNum": 3, "id": 238, "insect": "0,0,0,0,0,0|65,7,72,-23,105,-14|63,5,73,-26,109,-13|0,0,0,0,0,0", "name": "绿葫芦", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：绿葫芦（green Gourd）来源于很多神奇的传说故事，可供在加工坊中加工使用。葫芦果实成熟后经一定处理可作为容器，如酒壶、水瓢、观赏品等。", "type": 1},
			{"asset_id": {"m1": "6141", "m2": "6142", "m3": "6143", "s": "2565"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 239, "insect": "0,0,0,0,0,0|70,-4,109,-62,91,-22|69,-4,88,-62,90,-22|0,0,0,0,0,0", "name": "青葫芦", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：青葫芦（cyan Gourd）来源于很多神奇的传说故事，可供在加工坊中加工使用。葫芦果实成熟后经一定处理可作为容器，如酒壶、水瓢、观赏品等。", "type": 1},
			{"asset_id": {"m1": "6144", "m2": "6145", "m3": "6146", "s": "2567"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 240, "insect": "0,0,0,0,0,0|75,1,100,-55,67,-22|72,4,77,-65,70,-22|0,0,0,0,0,0", "name": "蓝葫芦", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：蓝葫芦（blue Gourd）来源于很多神奇的传说故事，可供在加工坊中加工使用。葫芦果实成熟后经一定处理可作为容器，如酒壶、水瓢、观赏品等。", "type": 1},
			{"asset_id": {"m1": "6147", "m2": "6148", "m3": "6149", "s": "2569"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 241, "insect": "0,0,0,0,0,0|107,-36,98,-57,80,-11|90,-20,97,-63,88,2|0,0,0,0,0,0", "name": "紫葫芦", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：紫葫芦（purple Gourd）来源于很多神奇的传说故事，可供在加工坊中加工使用。葫芦果实成熟后经一定处理可作为容器，如酒壶、水瓢、观赏品等。", "type": 1},
			{"asset_id": {"m1": "6150", "m2": "6151", "m3": "6152", "s": "3393"}, "cropGrow": "36000,72000,108000,144000,180000,2000000000", "gossip": "我的花色是多么的红艳夺目。", "harvestNum": 9, "id": 242, "insect": "0,0,0,0,0,0|52,5,82,-44,114,-2|47,-3,75,-52,128,-9|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "似血杜鹃", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：似血杜鹃（英文：Rhododendron haematodes）花色丰富多彩，红艳夺目，盛放时极为美观，具有较高的观赏价值。", "type": 1},
			{"asset_id": {"m1": "6153", "m2": "6154", "m3": "6155", "s": "3763"}, "cropGrow": "36000,72000,108000,144000,180000,2000000000", "gossip": "不知道为什么他们叫我“断肠草”。", "harvestNum": 9, "id": 243, "insect": "0,0,0,0,0,0|63,-8,86,-29,106,-6|57,-10,83,-36,114,-11|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "芹叶铁线莲", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：芹叶铁线莲（英文：clematis aethusifolia）别名断肠草，花形奇特，花色呈淡黄，无花瓣，较为罕见。", "type": 1},
			{"asset_id": {"m1": "6156", "m2": "6157", "m3": "6158", "s": "4724"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "为啥叫我袋鼠花呢？", "harvestNum": 9, "id": 244, "insect": "0,0,0,0,0,0|69,-7,100,-28,91,9|54,-10,55,-41,109,-26|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "袋鼠花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：袋鼠花（英文：anigozanthos）是多年生常绿草本植物，叶浓绿有光泽，排列整齐紧凑，花色橘黄，花形奇特，中部膨大，两端小，前有一个小的开口。", "type": 1},
			{"asset_id": {"m1": "6159", "m2": "6160", "m3": "6161", "s": "2571"}, "cropGrow": "7200,14400,25200,39600,54000,2000000000", "gossip": "", "harvestNum": 1, "id": 245, "insect": "0,0,0,0,0,0|59,-18,76,-56,91,8|58,-38,83,-59,90,5|0,0,0,0,0,0", "name": "红葫芦", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：红葫芦（red Gourd）来源于很多神奇的传说故事，可供在加工坊中加工使用。葫芦果实成熟后经一定处理可作为容器，如酒壶、水瓢、观赏品等。", "type": 1},
			{"asset_id": {"m1": "6163", "m2": "6164", "m3": "6165", "s": "4132"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "看我像葡萄吗？", "harvestNum": 9, "id": 246, "insect": "0,0,0,0,0,0|72,-13,93,-37,100,-2|72,-9,94,-45,110,-1|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "葡萄风信子", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：葡萄风信子（英文：muscari botryoides）又名蓝壶花、葡萄百合，整个花序犹如蓝紫色的葡萄串，秀丽高雅，花语为：悲恋。", "type": 1},
			{"asset_id": {"m1": "6166", "m2": "6167", "m3": "6168", "s": "4433"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "蝴蝶看到我都会陶醉！", "harvestNum": 9, "id": 247, "insect": "0,0,0,0,0,0|65,-28,95,-32,98,6|57,-37,107,-46,110,-1|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "醉蝶花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：醉蝶花（英文：Cleome spinosa）—花多色，颇为美丽，适于布置花坛或在路边成片栽植。", "type": 1},
			{"asset_id": {"m1": "6169", "m2": "6170", "m3": "6171", "s": "4943"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "也有人叫我兔儿牡丹。", "harvestNum": 9, "id": 249, "insect": "0,0,0,0,0,0|58,-8,100,-26,109,16|49,-18,104,-42,121,13|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "荷包牡丹", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：荷包牡丹（英文：Dicentra spectabilis），叶丛美丽，花朵玲珑，形似荷包，色彩绚丽，是盆栽和切花的好材料，也适宜于布置花径和在树丛，景观效果极好。", "type": 1},
			{"asset_id": {"m1": "7843", "m2": "7844", "m3": "7845", "s": "7842"}, "cropGrow": "28800,57600,90000,122400,151200,2000000000", "gossip": "我开放在寒冷的冬末时节。", "harvestNum": 8, "id": 250, "insect": "0,0,0,0,0,0|70,8,84,-10,110,4|48,-3,97,-37,110,-1|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "冰凌花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：冰凌花开放时间正是冬末春初冰雪尚未消融的极为寒冷时节，在没有其他植物萌生的情况下，它一花独放是多么难能可贵。因此，它有很好的观赏价值。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "6376", "m2": "6377", "m3": "6378", "s": "5469"}, "cropGrow": "28800,57600,90000,122400,151200,2000000000", "gossip": "看我像不像白鹭在飞翔。", "harvestNum": 8, "id": 251, "insect": "0,0,0,0,0,0|66,8,89,-31,101,-1|47,-18,79,-71,104,-14|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "鹭草", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：鹭草（英文：white egret flower）因花的形状就象白鹭展翅飞翔的样子故取其名，目前已经属于濒临绝种的植物。", "type": 1},
			{"asset_id": {"m1": "6756", "m2": "6757", "m3": "6758", "s": "6759"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "看我像不像挂着的灯笼。", "harvestNum": 8, "id": 253, "insect": "0,0,0,0,0,0|58,-5,91,-38,105,7|54,-4,98,-51,113,2|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "吊钟花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：吊钟花（英文：canterbury bell）又名灯笼花、倒挂金钟、吊钟海棠等，因灯笼在中国代表的是吉祥、安宁，而吊钟花酷似灯笼，所以，它的花语是感恩、谢错。\n", "type": 1},
			{"asset_id": {"m0": "12082", "m1": "12083", "m2": "12084", "m3": "12085", "m4": "12086", "s": "12087"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 256, "insect": "0,0,0,0,0,0|74,-13,87,-28,108,-31|105,-67,83,-48,81,-30|0,0,0,0,0,0", "isYouji": 1, "name": "石竹花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"actPeriod": "", "actProvideAmt": "", "asset_id": {"m1": "9782", "m2": "9783", "m3": "9784", "s": "9781"}, "cropGrow": "21600,39600,61200,82800,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 257, "insect": "0,0,0,0,0,0|59,-3,93,-30,94,7|71,-1,107,-32,100,-7|0,0,0,0,0,0", "isRed": 1, "name": "孔雀草", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12317", "m1": "12318", "m2": "12319", "m3": "12320", "m4": "12321", "s": "12322"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 4, "id": 258, "insect": "0,0,0,0,0,0|88,2,91,-17,78,-4|90,-14,70,-19,82,-33|0,0,0,0,0,0", "isYouji": 1, "name": "欧石楠", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12287", "m1": "12288", "m2": "12289", "m3": "12290", "m4": "12291", "s": "12292"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 259, "insect": "0,0,0,0,0,0|67,-16,91,-17,78,-4|90,-14,84,1,93,-35|0,0,0,0,0,0", "isYouji": 1, "name": "银莲花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10729", "m2": "10730", "m3": "10731", "s": "10732"}, "cropGrow": "21600,39600,61200,82800,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 260, "insect": "0,0,0,0,0,0|96,-22,73,-39,92,-55|77,-48,95,-67,93,-34|0,0,0,0,0,0", "isRed": 1, "name": "桉树", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8613", "m2": "8614", "m3": "8615", "s": "8612"}, "cropGrow": "36000,72000,108000,144000,180000,2000000000", "gossip": "", "harvestNum": 9, "id": 262, "insect": "0,0,0,0,0,0|65,0,82,-30,110,-1|66,-3,83,-48,110,-1|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "帝王花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：帝王花（英文：Protea cynaroides）又名菩提花， 俗称「木百合花」或「龙眼花」，原产南非，是南非共和国的国花。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12275", "m1": "12276", "m2": "12277", "m3": "12278", "m4": "12279", "s": "12280"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 263, "insect": "0,0,0,0,0,0|80,16,75,-20,78,-4|90,-14,84,1,93,-35|0,0,0,0,0,0", "isYouji": 1, "name": "天竺葵", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11016", "m1": "11017", "m2": "11018", "m3": "11019", "m4": "11020", "s": "11021"}, "cropGrow": "18000,39600,61200,86400,115200,2000000000", "gossip": "只能对我施有机肥哦\n", "harvestNum": 4, "id": 264, "insect": "0,0,0,0,0,0|80,-3,73,-15,96,-8|89,-18,83,-33,74,-6|0,0,0,0,0,0", "isYouji": 1, "name": "红色郁金香", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：火红郁金香为多年生草本植物，鳞茎扁圆锥形或扁卵圆形，长约2厘米，具棕褐色皮股，外被淡黄色纤维状皮膜。\n“亲，有机种子只能使用有机化肥减少生长时间哦”", "type": 1, "vipDesc": "黄钻简单描述"},
			{"actPeriod": "", "actProvideAmt": "", "asset_id": {"m1": "9790", "m2": "9791", "m3": "9792", "s": "9789"}, "cropGrow": "32400,68400,104400,136800,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 265, "insect": "0,0,0,0,0,0|82,7,82,-8,103,-10|73,-12,95,-62,112,2|0,0,0,0,0,0", "isRed": 1, "name": "朱雀花", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "7700", "m2": "7701", "m3": "7702", "s": "7699"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "我是美丽的羊乳花。", "harvestNum": 8, "id": 266, "insect": "0,0,0,0,0,0|61,6,81,-23,110,-1|56,2,88,-33,101,-15|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "羊乳花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：羊乳花（英文：Feta flowers）属于桔梗科，别名有四叶参、牛奶参等，常生长在山坡灌木林下的阴湿地区。", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m0": "11125", "m1": "11126", "m2": "11127", "m3": "11128", "m4": "11129", "s": "11130"}, "cropGrow": "21600,43200,72000,100800,136800,2000000000", "gossip": "", "harvestNum": 5, "id": 267, "insect": "0,0,0,0,0,0|89,-9,93,-19,72,-12|83,-3,90,-28,84,-22|0,0,0,0,0,0", "isYouji": 1, "name": "地涌金莲", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8740", "m2": "8741", "m3": "8742", "s": "8743"}, "cropGrow": "36000,72000,108000,144000,180000,2000000000", "gossip": "", "harvestNum": 9, "id": 268, "insect": "0,0,0,0,0,0|68,0,78,-38,110,-1|66,-15,83,-48,109,-3|0,0,0,0,0,0", "isRed": 1, "name": "猴面包树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：猴面包树（英文：baobab）属木棉种植物，树干高不过20米左右，而胸径却可达15米以上，往往要40个成年人拉手才能合抱，由于它看上去活像个大胖子，因此又称它为“大胖子树”、“树中之象”。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11028", "m1": "11029", "m2": "11030", "m3": "11031", "m4": "11032", "s": "11033"}, "cropGrow": "10800,21600,39600,61200,86400,2000000000", "gossip": "只能对我施有机肥哦\n", "harvestNum": 2, "id": 269, "insect": "0,0,0,0,0,0|59,-7,79,-6,110,-1|55,-15,80,5,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "桔梗花", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：桔梗花又名僧冠帽、铃铛花、属桔梗科桔梗属的多年生宿根草本花卉。别名为铃铛花、六角荷、梗草、白药。\n“亲，有机种子只能使用有机化肥减少生长时间哦”", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "6172", "m2": "6173", "m3": "6174", "s": "2573"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "", "harvestNum": 7, "id": 301, "insect": "0,0,0,0,0,0|64,-11,60,-51,103,-34|64,-11,60,-51,103,-34|0,0,0,0,0,0", "name": "蛋黄果", "nextText": "幼苗,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：蛋黄果（英文：egg fruit）也叫鸡蛋果，果实为浆果，果肉间充满果汁，像煮熟鸡蛋黄一样，所以被称为蛋黄果。", "type": 1},
			{"asset_id": {"m0": "6175", "m1": "6176", "m2": "6177", "m3": "6178", "s": "2575"}, "cropGrow": "32400,68400,104400,136800,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 302, "insect": "0,0,0,0,0,0|53,-15,84,-40,108,-8|59,-13,78,-45,112,-11|0,0,0,0,0,0", "name": "沙棘", "nextText": "幼苗,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：沙棘（英文：sea-buckthorn）常生长于河边、高山、草原等地，有止咳祛痰，消食化滞，活血散瘀的作用。沙棘一般直接栽种苗木，生长第一阶段为幼苗。", "type": 1},
			{"asset_id": {"m1": "6179", "m2": "6180", "m3": "6181", "s": "4263"}, "cropGrow": "36000,72000,108000,144000,180000,2000000000", "gossip": "", "harvestNum": 7, "id": 303, "insect": "0,0,0,0,0,0|50,-20,83,-48,112,-12|49,-23,83,-48,109,-9|0,0,0,0,0,0", "isFlower": "0", "isFood": "0", "isLock": "0", "isRed": "0", "isRestaurant": "0", "name": "榅桲", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：榅桲（拼音：wēn bó）果实芳香味浓，含有多种营养物质，能增进血管强度，保证人体健康。", "type": 1},
			{"asset_id": {"m1": "6182", "m2": "6183", "m3": "6184", "s": "2619"}, "cropGrow": "32400,64800,97200,133200,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 304, "insect": "0,0,0,0,0,0|47,-19,99,-56,119,-7|38,-23,83,-59,117,-9|0,0,0,0,0,0", "name": "黄金果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：黄金果（英文：Gold Berry）又名五指茄、乳茄。果形奇特，果色呈鲜艳的金黄色，耀眼醒目，可整枝剪下瓶插观果，也可将果实摘下，摆放桌案之上，气氛热烈。", "type": 1},
			{"asset_id": {"m1": "6185", "m2": "6186", "m3": "6187", "s": "5377"}, "cropGrow": "7200,18000,32400,46800,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 305, "insect": "0,0,0,0,0,0|87,9,86,-13,93,23|83,3,90,-39,97,20|0,0,0,0,0,0", "name": "韭菜", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：韭菜（英文：leek）有促进食欲的作用，除做菜用外，还有良好的药用价值，具健胃、提神等功效。", "type": 1},
			{"asset_id": {"m1": "6380", "m2": "6381", "m3": "6382", "s": "5375"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 306, "insect": "0,0,0,0,0,0|87,9,86,-13,93,23|83,3,90,-39,97,20|0,0,0,0,0,0", "name": "芹菜", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：芹菜（英文：celery）是常见的食用蔬菜，含有丰富的营养，同时还具有一定药理和治疗价值，有降血压、降血脂等功效。", "type": 1},
			{"asset_id": {"m1": "7724", "m2": "7725", "m3": "7726", "s": "7723"}, "cropGrow": "10800,25200,43200,43200,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 308, "insect": "0,0,0,0,0,0|62,-12,87,-43,111,-18|60,-11,76,-57,112,-16|0,0,0,0,0,0", "name": "核桃", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：核桃（英文：walnut）又名胡桃，与扁桃、腰果、榛子并称为世界著名的“四大干果”。既可以生食、炒食，也可以榨油、配制糕点、糖果等，不仅味美，而且营养价值很高，被誉为“万岁子”、“长寿果”。  ", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "6189", "m2": "6190", "m3": "6191", "s": "4409"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 8, "id": 309, "insect": "0,0,0,0,0,0|52,-6,61,-48,105,5|55,-13,69,-48,111,2|0,0,0,0,0,0", "isFlower": 1, "name": "雪梅", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m0": "6192", "m1": "6193", "m2": "6194", "m3": "6195", "m4": "6196", "s": "4411"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 310, "insect": "0,0,0,0,0,0|72,13,84,-18,108,9|72,14,100,-47,109,10|0,0,0,0,0,0", "name": "雪人", "nextText": "雪种,雪堆,雪球,成形,雏形,雪人", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6197", "m2": "6198", "m3": "6199", "s": "4346"}, "cropGrow": "14400,32400,50400,68400,86400,2000000000", "gossip": "", "harvestNum": 1, "id": 311, "insect": "0,0,0,0,0,0|58,-6,84,-47,106,-11|63,-13,83,-43,109,-5|0,0,0,0,0,0", "isActivity": 1, "name": "星星圣诞树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：圣诞活动期间，收获或摘取果实时，可能获得活动卡片，该卡片用于兑换活动礼包。", "type": 1},
			{"asset_id": {"m1": "6200", "m2": "6201", "m3": "6202", "s": "4348"}, "cropGrow": "14400,32400,50400,68400,86400,2000000000", "gossip": "", "harvestNum": 1, "id": 312, "insect": "0,0,0,0,0,0|68,-6,92,-54,106,-20|63,-13,92,-47,114,-11|0,0,0,0,0,0", "isActivity": 1, "name": "姜饼人圣诞树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：圣诞活动期间，收获或摘取果实时，可能获得活动卡片，该卡片用于兑换活动礼包。", "type": 1},
			{"asset_id": {"m1": "6203", "m2": "6204", "m3": "6205", "s": "4350"}, "cropGrow": "14400,32400,50400,68400,86400,2000000000", "gossip": "", "harvestNum": 1, "id": 313, "insect": "0,0,0,0,0,0|68,-6,85,-53,106,-20|66,-1,86,-42,105,-22|0,0,0,0,0,0", "isActivity": 1, "name": "拐杖圣诞树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：圣诞活动期间，收获或摘取果实时，可能获得活动卡片，该卡片用于兑换活动礼包。", "type": 1},
			{"asset_id": {"m1": "6206", "m2": "6207", "m3": "6208", "s": "4334"}, "cropGrow": "32400,68400,104400,136800,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 314, "insect": "0,0,0,0,0,0|70,-3,93,-43,105,-1|61,-5,90,-62,116,-8|0,0,0,0,0,0", "name": "金色圣诞树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6209", "m2": "6210", "m3": "6211", "s": "4336"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 8, "id": 315, "insect": "0,0,0,0,0,0|53,10,78,-28,95,-3|38,-22,78,-49,116,-25|0,0,0,0,0,0", "isMill": "0", "name": "幸福平安果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6212", "m2": "6213", "m3": "6214", "s": "4338"}, "cropGrow": "7200,18000,32400,39600,46800,2000000000", "gossip": "", "harvestNum": 1, "id": 316, "insect": "0,0,0,0,0,0|76,22,83,-3,93,18|74,11,87,-29,102,0|0,0,0,0,0,0", "name": "幸运数字0", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6215", "m2": "6216", "m3": "6217", "s": "4340"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 317, "insect": "0,0,0,0,0,0|83,23,90,-1,98,18|79,19,87,-29,93,0|0,0,0,0,0,0", "name": "幸运数字1", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6218", "m2": "6219", "m3": "6220", "s": "4418"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 318, "insect": "0,0,0,0,0,0|82,10,91,-3,92,26|81,0,84,-40,100,26|0,0,0,0,0,0", "name": "幸运数字2", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6221", "m2": "6222", "m3": "6223", "s": "4420"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 319, "insect": "0,0,0,0,0,0|84,-1,86,-24,87,24|81,0,85,-32,93,25|0,0,0,0,0,0", "name": "幸运数字3", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6224", "m2": "6225", "m3": "6226", "s": "4422"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 320, "insect": "0,0,0,0,0,0|92,12,94,-9,87,24|80,2,92,-27,93,25|0,0,0,0,0,0", "name": "幸运数字4", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6228", "m2": "6229", "m3": "6230", "s": "4561"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 321, "insect": "0,0,0,0,0,0|79,22,85,-12,94,8|76,16,86,-32,96,-1|0,0,0,0,0,0", "name": "幸运数字5", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6232", "m2": "6233", "m3": "6234", "s": "4563"}, "cropGrow": "7200,18000,32400,46800,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 322, "insect": "0,0,0,0,0,0|81,26,82,3,95,18|76,16,78,-23,96,-1|0,0,0,0,0,0", "name": "幸运数字6", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6235", "m2": "6236", "m3": "6237", "s": "4567"}, "cropGrow": "10800,21600,32400,46800,64800,2000000000", "gossip": "", "harvestNum": 1, "id": 323, "insect": "0,0,0,0,0,0|84,19,92,-7,93,6|76,16,94,-24,96,-1|0,0,0,0,0,0", "name": "幸运数字7", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6238", "m2": "6239", "m3": "6240", "s": "4672"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 324, "insect": "0,0,0,0,0,0|71,23,76,4,91,20|72,19,78,-23,99,12|0,0,0,0,0,0", "name": "幸运数字8", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6242", "m2": "6243", "m3": "6244", "s": "4674"}, "cropGrow": "10800,25200,43200,61200,79200,2000000000", "gossip": "", "harvestNum": 1, "id": 325, "insect": "0,0,0,0,0,0|71,23,76,4,91,20|72,19,78,-23,99,12|0,0,0,0,0,0", "name": "幸运数字9", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6246", "m2": "6247", "m3": "6248", "s": "4230"}, "cropGrow": "32400,68400,104400,136800,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 326, "insect": "0,0,0,0,0,0|71,11,90,-22,106,7|63,9,85,-32,109,4|0,0,0,0,0,0", "name": "VIP之星", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6249", "m2": "6250", "m3": "6251", "s": "4945"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 327, "insect": "0,0,0,0,0,0|57,2,97,-35,107,13|57,-37,89,-49,108,7|0,0,0,0,0,0", "name": "爆竹树", "nextText": "种子,发芽,小枝,大枝,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6252", "m2": "6253", "m3": "6254", "s": "4947"}, "cropGrow": "21600,39600,61200,82800,104400,2000000000", "gossip": "", "harvestNum": 7, "id": 328, "insect": "0,0,0,0,0,0|68,14,94,-16,99,4|55,-21,90,-43,114,-1|0,0,0,0,0,0", "isFlower": 1, "name": "合家欢", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6255", "m2": "6256", "m3": "6257", "s": "4949"}, "cropGrow": "21600,43200,61200,82800,108000,2000000000", "gossip": "", "harvestNum": 6, "id": 329, "insect": "0,0,0,0,0,0|60,-6,95,-27,118,-3|45,-18,98,-48,131,-19|0,0,0,0,0,0", "name": "红包树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6258", "m2": "6259", "m3": "6260", "s": "4681"}, "cropGrow": "18000,39600,61200,82800,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 330, "insect": "0,0,0,0,0,0|62,-4,92,-24,92,10|60,4,82,-43,111,4|0,0,0,0,0,0", "name": "浮云树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6261", "m2": "6262", "m3": "6263", "s": "4571"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 332, "insect": "0,0,0,0,0,0|45,-15,77,-45,128,2|54,-26,74,-59,120,0|0,0,0,0,0,0", "name": "新年灯笼树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6264", "m2": "6265", "m3": "6266", "s": "4726"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 4, "id": 333, "insect": "0,0,0,0,0,0|68,20,87,-4,108,21|63,11,92,-34,106,15|0,0,0,0,0,0", "name": "吉祥豆", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"h": "4729", "m0": "6267", "m1": "6268", "m2": "6269", "m3": "6270", "s": "4728"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 334, "insect": "0,0,0,0,0,0|73,1,93,-38,103,-2|62,-16,94,-65,101,-4|0,0,0,0,0,0", "isAnimation": 1, "isLock": 1, "name": "悦活绿植娃娃", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：悦活绿植娃娃（英文：lohas  baby）是悦活家族2011年新春的吉祥物，种植悦活绿植娃娃可以收获一年的健康和快乐，和你的朋友一起来种LOHAS吧。收听悦活lohas微博还可以免费获得哦！ ", "type": 1},
			{"asset_id": {"m1": "6975", "m2": "6976", "m3": "6977", "s": "6974"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 335, "insect": "0,0,0,0,0,0|74,18,83,-5,94,14|74,13,83,-21,91,4|0,0,0,0,0,0", "isVIP": 1, "name": "＆符号", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的符号作物，长成了＆符号的造型，种上它，让你的农场与众不同。", "type": 1, "vipDesc": "神奇的＆符号"},
			{"asset_id": {"m1": "6982", "m2": "6983", "m3": "6984", "s": "6985"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 336, "insect": "0,0,0,0,0,0|84,25,78,-2,91,12|78,21,95,-12,81,-2|0,0,0,0,0,0", "isVIP": 1, "name": "爱心符号", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的符号作物，长成了爱心的造型，种上它，让你的农场爱心满溢。", "type": 1, "vipDesc": "爱心满满的符号作物"},
			{"asset_id": {"m1": "6971", "m2": "6972", "m3": "6973", "s": "6970"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 337, "insect": "0,0,0,0,0,0|74,18,83,-5,94,14|74,13,73,-21,91,4|0,0,0,0,0,0", "isVIP": 1, "name": "五角星符号", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的符号作物，长成了五角星的造型，种上它，让你的农场星光熠熠。", "type": 1, "vipDesc": "神奇的五角星作物"},
			{"asset_id": {"m1": "6987", "m2": "6988", "m3": "6989", "s": "6986"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 338, "insect": "0,0,0,0,0,0|84,25,93,-9,86,8|83,25,100,-27,89,-2|0,0,0,0,0,0", "isVIP": 1, "name": "问号", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的符号作物，长成了问号“？”的造型，种上它，让你的农场与众不同。", "type": 1, "vipDesc": "神奇的问号作物"},
			{"asset_id": {"m1": "6978", "m2": "6979", "m3": "6980", "s": "6981"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 339, "insect": "0,0,0,0,0,0|82,31,90,18,92,25|85,27,95,-12,81,-2|0,0,0,0,0,0", "isVIP": 1, "name": "感叹符号", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的符号作物，长成了感吧号“！”的造型，种上它，让你的农场与众不同。", "type": 1, "vipDesc": "神奇的符号感叹一下"},
			{"asset_id": {"m1": "6383", "m2": "6384", "m3": "6385", "s": "5093"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 340, "insect": "0,0,0,0,0,0|74,21,82,5,93,21|72,17,81,-20,93,7|0,0,0,0,0,0", "name": "字母A", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6386", "m2": "6387", "m3": "6388", "s": "5259"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 341, "insect": "0,0,0,0,0,0|75,24,79,9,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "字母B", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6389", "m2": "6390", "m3": "6391", "s": "5261"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 342, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "字母C", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6392", "m2": "6393", "m3": "6394", "s": "5263"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 343, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "字母D", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6395", "m2": "6396", "m3": "6397", "s": "5095"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 344, "insect": "0,0,0,0,0,0|77,25,82,-5,83,13|77,21,80,-19,90,3|0,0,0,0,0,0", "name": "字母E", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6398", "m2": "6399", "m3": "6400", "s": "5265"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 345, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "字母F", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6401", "m2": "6402", "m3": "6403", "s": "5267"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 346, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "字母G", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6404", "m2": "6405", "m3": "6406", "s": "5097"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 347, "insect": "0,0,0,0,0,0|74,21,77,-4,98,24|77,21,78,-29,95,1|0,0,0,0,0,0", "name": "字母H", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6407", "m2": "6408", "m3": "6409", "s": "5269"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 348, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "字母I", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6410", "m2": "6411", "m3": "6412", "s": "5271"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 349, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "字母J", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "7479314", "m2": "6413", "m3": "7479315", "s": "5273"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 350, "insect": "0,0,0,0,0,0|80,25,82,-1,93,17|75,24,84,-24,90,0|0,0,0,0,0,0", "name": "字母K", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6414", "m2": "6415", "m3": "6416", "s": "5275"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 351, "insect": "0,0,0,0,0,0|80,25,82,9,93,21|75,24,84,-6,90,12|0,0,0,0,0,0", "name": "字母L", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6417", "m2": "6418", "m3": "6419", "s": "5277"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 352, "insect": "0,0,0,0,0,0|75,27,75,1,94,14|75,24,81,-13,93,8|0,0,0,0,0,0", "name": "字母M", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6420", "m2": "6421", "m3": "6422", "s": "5099"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 353, "insect": "0,0,0,0,0,0|74,21,77,-4,98,24|77,21,78,-29,95,1|0,0,0,0,0,0", "name": "字母N", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6423", "m2": "6424", "m3": "6425", "s": "5279"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 354, "insect": "0,0,0,0,0,0|75,27,75,1,94,14|75,24,81,-13,93,8|0,0,0,0,0,0", "name": "字母O", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6426", "m2": "6427", "m3": "6428", "s": "5101"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 355, "insect": "0,0,0,0,0,0|74,21,77,-4,87,13|77,21,78,-29,95,1|0,0,0,0,0,0", "name": "字母P", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6429", "m2": "6430", "m3": "6431", "s": "5281"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 356, "insect": "0,0,0,0,0,0|75,27,75,1,94,14|75,24,81,-13,93,8|0,0,0,0,0,0", "name": "字母Q", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6432", "m2": "6433", "m3": "6434", "s": "5103"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 357, "insect": "0,0,0,0,0,0|74,21,77,-4,87,13|77,21,78,-29,95,1|0,0,0,0,0,0", "name": "字母R", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6435", "m2": "6436", "m3": "6437", "s": "5283"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 358, "insect": "0,0,0,0,0,0|79,24,82,1,94,14|75,24,81,-13,93,8|0,0,0,0,0,0", "name": "字母S", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6438", "m2": "6439", "m3": "6440", "s": "5285"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 359, "insect": "0,0,0,0,0,0|79,24,82,1,94,14|75,24,81,-13,93,8|0,0,0,0,0,0", "name": "字母T", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6441", "m2": "6442", "m3": "6443", "s": "5287"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 360, "insect": "0,0,0,0,0,0|79,24,83,2,94,14|75,24,81,-10,93,8|0,0,0,0,0,0", "name": "字母U", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6444", "m2": "6445", "m3": "6446", "s": "5289"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 361, "insect": "0,0,0,0,0,0|79,24,83,2,94,14|75,24,81,-10,93,8|0,0,0,0,0,0", "name": "字母V", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6447", "m2": "6448", "m3": "6449", "s": "5105"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 362, "insect": "0,0,0,0,0,0|74,21,77,-4,87,13|77,21,78,-29,95,1|0,0,0,0,0,0", "name": "字母W", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6450", "m2": "6451", "m3": "6452", "s": "5291"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 363, "insect": "0,0,0,0,0,0|79,24,83,2,94,14|75,24,81,-10,93,8|0,0,0,0,0,0", "name": "字母X", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6453", "m2": "6454", "m3": "6455", "s": "5107"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 364, "insect": "0,0,0,0,0,0|77,25,82,3,87,18|77,21,80,-19,94,13|0,0,0,0,0,0", "name": "字母Y", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6456", "m2": "6457", "m3": "6458", "s": "5293"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 365, "insect": "0,0,0,0,0,0|79,24,87,4,94,20|75,24,81,-10,93,8|0,0,0,0,0,0", "name": "字母Z", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6271", "m2": "6272", "m3": "6273", "s": "4953"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 366, "insect": "0,0,0,0,0,0|68,7,81,-32,106,-4|47,-6,77,-36,112,8|0,0,0,0,0,0", "isFlower": 1, "name": "彩虹玫瑰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6274", "m2": "6275", "m3": "6276", "s": "4951"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 367, "insect": "0,0,0,0,0,0|55,-7,87,-32,106,-4|54,-10,92,-39,113,-11|0,0,0,0,0,0", "isActivity": 1, "isLock": 1, "name": "金条树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m0": "12269", "m1": "12270", "m2": "12271", "m3": "12272", "m4": "12273", "s": "12274"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 370, "insect": "0,0,0,0,0,0|94,-17,75,-20,80,-9|90,-14,84,1,93,-35|0,0,0,0,0,0", "isYouji": 1, "name": "朱顶红", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "10999", "m1": "11000", "m2": "11001", "m3": "11002", "m4": "11003", "s": "11004"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "只能对我施有机肥哦\n", "harvestNum": 5, "id": 371, "insect": "0,0,0,0,0,0|62,-18,96,-33,87,6|60,-30,83,-48,98,-20|0,0,0,0,0,0", "isYouji": 1, "name": "扶桑花", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：　扶桑花，扶桑又名朱槿，原产中国南部，喜温暖湿润气候。茎直立而多分枝，树冠远方形，高可达6米。\n“亲，有机种子只能使用有机化肥减少生长时间哦”", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12311", "m1": "12312", "m2": "12313", "m3": "12314", "m4": "12315", "s": "12316"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 375, "insect": "0,0,0,0,0,0|88,2,91,-17,78,-4|90,-14,70,-19,82,-33|0,0,0,0,0,0", "isYouji": 1, "name": "木槿", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12204", "m1": "12205", "m2": "12206", "m3": "12207", "m4": "12208", "s": "12209"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 376, "insect": "0,0,0,0,0,0|76,2,79,16,89,7|81,15,89,-16,91,6|0,0,0,0,0,0", "isYouji": 1, "name": "龙舌兰", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12281", "m1": "12282", "m2": "12283", "m3": "12284", "m4": "12285", "s": "12286"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 377, "insect": "0,0,0,0,0,0|80,16,81,7,78,-4|90,-14,84,1,93,-35|0,0,0,0,0,0", "isYouji": 1, "name": "红掌", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "6561", "m2": "6562", "m3": "6563", "s": "6708"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 378, "insect": "0,0,0,0,0,0|64,-5,92,-22,120,-5|64,-5,92,-22,120,-5|0,0,0,0,0,0", "isLock": 1, "name": "洛克小灵桃", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：孕育可爱宠物的魔力之花，凭果实到，可兑换“洛克王国”大礼包，稀有宠物“小灵桃”，“红毛小Q”等你来拿喔。", "type": 1},
			{"asset_id": {"m0": "12198", "m1": "12199", "m2": "12200", "m3": "12201", "m4": "12202", "s": "12203"}, "cropGrow": "28800,54000,79200,108000,136800,2000000000", "gossip": "", "harvestNum": 3, "id": 379, "insect": "0,0,0,0,0,0|84,22,90,14,89,7|81,15,89,-16,91,6|0,0,0,0,0,0", "isYouji": 1, "name": "雀翠花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8617", "m2": "8618", "m3": "8619", "s": "8616"}, "cropGrow": "32400,64800,97200,133200,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 380, "insect": "0,0,0,0,0,0|66,8,80,-24,110,-1|53,5,71,-44,114,8|0,0,0,0,0,0", "isFlower": 1, "name": "益母草", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：益母草（英文：herba leonuri）是重要的中药作物，生于山野荒地、田埂、草地等，具有活血、祛淤等功效。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12293", "m1": "12294", "m2": "12295", "m3": "12296", "m4": "12297", "s": "12298"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 381, "insect": "0,0,0,0,0,0|88,2,91,-17,78,-4|90,-14,70,-19,93,-35|0,0,0,0,0,0", "isYouji": 1, "name": " 鸡蛋花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "6859", "m2": "6860", "m3": "6861", "s": "6858"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 382, "insect": "0,0,0,0,0,0|73,16,87,-9,109,15|71,5,86,-38,99,7|0,0,0,0,0,0", "isVIP": 1, "name": "摩羯座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12星座作物，12月22日-1月19日出生是摩羯座，别名山羊座，摩羯座象征符号是摩羯的头部与尾部，守护星是土星，守护神是牧神。", "type": 1, "vipDesc": "阳历12月22日-1月19日"},
			{"asset_id": {"m": "6351", "m1": "6473", "m2": "6474", "m3": "6475", "s": "6352"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 383, "insect": "0,0,0,0,0,0|78,20,70,-26,92,7|81,25,83,-33,95,8|0,0,0,0,0,0", "isVIP": 1, "name": "水瓶座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12星座作物，阳历1月20日-2月19日出生为水瓶座，又称宝瓶座，符号表示象征着流水，在南方天空排成Y字形的小星就是水瓶。", "type": 1, "vipDesc": "阳历1月20日-2月19日"},
			{"asset_id": {"m": "6353", "m1": "6476", "m2": "6477", "m3": "6478", "s": "6354"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 384, "insect": "0,0,0,0,0,0|67,9,89,-22,108,5|67,15,83,-33,110,3|0,0,0,0,0,0", "isVIP": 1, "name": "双鱼座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12星座作物，阳历2月19日-3月20日出生为双鱼座，双鱼的图案起源是两只海豚，他们各依相反方向，悠游于浩渺的宇宙海。这象征其性格中的二元性、矛盾性、复杂性，以及隐秘的色彩。 ", "type": 1, "vipDesc": "阳历2月19日-3月20日"},
			{"asset_id": {"m1": "6843", "m2": "6844", "m3": "6845", "s": "6842"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 385, "insect": "0,0,0,0,0,0|81,6,96,-11,95,25|88,4,83,-48,96,21|0,0,0,0,0,0", "isVIP": 1, "name": "白羊座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神秘的12星座作物，阳历3月21日-4月20日出生为白羊座，白羊座的符号用羊的角来表示，其守护星为火星，守护神为战争之神阿勒斯。 ", "type": 1, "vipDesc": "阳历3月21日-4月20日"},
			{"asset_id": {"m1": "6851", "m2": "6852", "m3": "6853", "s": "6850"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 386, "insect": "0,0,0,0,0,0|71,6,107,-3,87,27|64,4,87,-40,106,8|0,0,0,0,0,0", "isVIP": 1, "name": "金牛座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12星座作物，阳历4月20日-5月21日出生为金牛座，金牛座的符号，象征牛的头部，其守护星为金星，守护神为爱与美的女神-维纳斯。", "type": 1, "vipDesc": "阳历4月20日-5月21日"},
			{"asset_id": {"m1": "6870", "m2": "6871", "m3": "6872", "s": "6873"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 387, "insect": "0,0,0,0,0,0|74,12,99,-9,99,9|70,22,83,-33,100,7|0,0,0,0,0,0", "isVIP": 1, "name": "双子座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12星座作物，阳历5月21日-6月21日出生为双子座，双子座的符号表示一对双生子。这是十二个座中，唯一完全用人来表示的符号。", "type": 1, "vipDesc": "阳历5月21日-6月21日"},
			{"asset_id": {"m1": "6855", "m2": "6856", "m3": "6857", "s": "6854"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 388, "insect": "0,0,0,0,0,0|58,16,112,15,86,32|65,21,86,-38,116,18|0,0,0,0,0,0", "isVIP": 1, "name": "巨蟹座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12星座作物，阳历6月22日-7月22日出生为巨蟹座，符号是以螃蟹的脚爪为代表。巨蟹座的守护星为太阴，即月亮，守护神为女神戴安娜。", "type": 1, "vipDesc": "阳历6月22日-7月22日"},
			{"asset_id": {"m1": "6867", "m2": "6868", "m3": "6869", "s": "6866"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 389, "insect": "0,0,0,0,0,0|65,17,87,-9,97,20|66,20,83,-33,96,16|0,0,0,0,0,0", "isVIP": 1, "name": "狮子座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12星座作物，阳历7月23日-8月22日出生为狮子座，狮子座的符号象征狮子的尾巴，高高扬起的尾巴，充分显示了狮子的个性。", "type": 1, "vipDesc": "阳历7月23日-8月22日"},
			{"asset_id": {"m1": "6847", "m2": "6848", "m3": "6849", "s": "6846"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 390, "insect": "0,0,0,0,0,0|81,6,96,-11,95,25|88,4,87,-40,96,21|0,0,0,0,0,0", "isVIP": 1, "name": "处女座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12星座作物，阳历8月23日-9月22日出生为处女座，其象徵图形是一名手持麦穗的少女，是以许多大小不同的星星而构成为天使似的少女模样，意味著处女座的独立自主。", "type": 1, "vipDesc": "阳历8月23日-9月22日"},
			{"asset_id": {"m1": "6875", "m2": "6876", "m3": "6877", "s": "6874"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 391, "insect": "0,0,0,0,0,0|66,11,88,-9,99,9|78,12,83,-33,100,7|0,0,0,0,0,0", "isVIP": 1, "name": "天秤座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12星座作物，阳历9月23日-10月23日出生为天秤座，天秤座符号象征一杆秤子，代表了衡量，在天秤座的神话中可以看出天秤座公平的特质。", "type": 1, "vipDesc": "阳历9月23日-10月23日"},
			{"asset_id": {"m1": "6879", "m2": "6880", "m3": "6881", "s": "6878"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 392, "insect": "0,0,0,0,0,0|73,11,97,-18,99,9|72,12,107,-25,100,7|0,0,0,0,0,0", "isVIP": 1, "name": "天蝎座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12星座作物，阳历10月23日-11月22日出生为天蝎座，天蝎座又大亮星又多，是夏夜星座的代表，星座符号是毒蝎之尾。", "type": 1, "vipDesc": "阳历10月23日-11月22日"},
			{"asset_id": {"m1": "6863", "m2": "6864", "m3": "6865", "s": "6862"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 393, "insect": "0,0,0,0,0,0|73,16,87,-9,109,15|71,5,86,-38,99,7|0,0,0,0,0,0", "isVIP": 1, "name": "射手座作物", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12星座作物，阳历11月23日-12月21日出生的为射手座，星座符号是射向右上方的一支箭，守护神是宙斯。", "type": 1, "vipDesc": "阳历11月23日-12月21日"},
			{"asset_id": {"m0": "12234", "m1": "12235", "m2": "12236", "m3": "12237", "m4": "12238", "s": "12239"}, "cropGrow": "10800,21600,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 2, "id": 395, "insect": "0,0,0,0,0,0|94,-17,75,-20,80,-29|78,-49,66,-32,93,-35|0,0,0,0,0,0", "isYouji": 1, "name": "杨柳", "nextText": "种子,发芽,小叶,大叶,初成,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10615", "m2": "10616", "m3": "10617", "s": "10618"}, "cropGrow": "10800,21600,39600,57600,86400,2000000000", "gossip": "", "harvestNum": 1, "id": 396, "insect": "0,0,0,0,0,0|84,3,83,-25,110,-1|72,-19,91,-37,110,-1|0,0,0,0,0,0", "name": "迎春花", "nextText": "种子,幼芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：迎春花（英文：Jasminum nudiflorum），系木犀科落叶灌木，因其在百花之中开花最早，花后即迎来百花齐放的春天而得名。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "6890", "m2": "6891", "m3": "6892", "s": "6893"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 397, "insect": "0,0,0,0,0,0|61,5,96,1,98,29|55,3,91,-19,95,27|0,0,0,0,0,0", "isFlower": 1, "name": "仙客来", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6886", "m2": "6887", "m3": "6888", "s": "6889"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 398, "insect": "0,0,0,0,0,0|70,5,87,-20,97,4|63,-1,86,-38,96,-3|0,0,0,0,0,0", "isFlower": 1, "name": "金雀花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6882", "m2": "6883", "m3": "6884", "s": "6885"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 399, "insect": "0,0,0,0,0,0|70,5,97,-18,94,-5|63,-1,86,-38,96,-3|0,0,0,0,0,0", "isFlower": 1, "name": "含笑花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6460", "m2": "6461", "m3": "6462", "s": "5471"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 400, "insect": "0,0,0,0,0,0|73,22,90,-11,105,24|52,3,105,-38,108,0|0,0,0,0,0,0", "isFlower": 1, "name": "美女樱", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "9000", "m2": "9001", "m3": "9002", "s": "9003"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 401, "insect": "0,0,0,0,0,0|72,-2,89,-22,110,-1|70,-2,94,-44,118,-9|0,0,0,0,0,0", "isLock": 1, "name": "LOL琴音水仙", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：琴音水仙是符文之地中神奇的鲜花，其花朵拥有一种神秘力量。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "6567", "m2": "6568", "m3": "6569", "s": "6707"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 3, "id": 402, "insect": "0,0,0,0,0,0|67,-9,85,-39,111,-19|61,-46,83,-71,117,-46|0,0,0,0,0,0", "name": "疯狂摇滚猫", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6571", "m2": "6572", "m3": "6573", "s": "6706"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 403, "insect": "0,0,0,0,0,0|67,-9,93,-45,102,-21|78,6,91,-18,104,5|0,0,0,0,0,0", "name": "河马新娘", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6576", "m2": "6577", "m3": "6578", "s": "6705"}, "cropGrow": "39600,82800,126000,172800,219600,2000000000", "gossip": "", "harvestNum": 4, "id": 404, "insect": "0,0,0,0,0,0|69,1,80,-28,90,-7|65,-3,87,-47,98,-7|0,0,0,0,0,0", "name": "英雄大象", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "6582", "m2": "6583", "m3": "6584", "s": "6704"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 405, "insect": "0,0,0,0,0,0|68,-1,80,-28,96,7|62,-11,79,-47,98,3|0,0,0,0,0,0", "name": "绵羊海盗", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "10333", "m2": "10334", "m3": "10335", "s": "10332"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 406, "insect": "0,0,0,0,0,0|64,-13,71,-42,95,-14|68,-22,82,-58,98,-24|0,0,0,0,0,0", "isFlower": 1, "name": "早樱", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11812", "m1": "11813", "m2": "11814", "m3": "11815", "m4": "11816", "s": "11817"}, "cropGrow": "21600,43200,72000,104400,140400,2000000000", "gossip": "", "harvestNum": 5, "id": 407, "insect": "0,0,0,0,0,0|65,-30,88,-40,83,-15|94,-31,83,-48,89,-64|0,0,0,0,0,0", "isYouji": 1, "name": "晚樱", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11806", "m1": "11807", "m2": "11808", "m3": "11809", "m4": "11810", "s": "11811"}, "cropGrow": "25200,54000,82800,115200,151200,2000000000", "gossip": "", "harvestNum": 5, "id": 408, "insect": "0,0,0,0,0,0|65,-30,88,-40,81,-24|94,-31,83,-48,89,-64|0,0,0,0,0,0", "isYouji": 1, "name": "大山樱", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11800", "m1": "11801", "m2": "11802", "m3": "11803", "m4": "11804", "s": "11805"}, "cropGrow": "21600,43200,72000,104400,136800,2000000000", "gossip": "", "harvestNum": 5, "id": 409, "insect": "0,0,0,0,0,0|65,-30,88,-40,83,-15|94,-31,83,-48,89,-64|0,0,0,0,0,0", "isYouji": 1, "name": "云南樱花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11010", "m1": "11011", "m2": "11012", "m3": "11013", "m4": "11014", "s": "11015"}, "cropGrow": "18000,36000,57600,82800,108000,2000000000", "gossip": "只能对我施有机肥哦\n", "harvestNum": 3, "id": 410, "insect": "0,0,0,0,0,0|66,-43,78,-27,101,-37|84,-53,83,-33,66,-51|0,0,0,0,0,0", "isYouji": 1, "name": "红白樱花", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：红白樱花，蔷薇科，属落叶乔木，花呈淡红色，重瓣。\n“亲，有机种子只能使用有机化肥减少生长时间哦”", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11794", "m1": "11795", "m2": "11796", "m3": "11797", "m4": "11798", "s": "11799"}, "cropGrow": "25200,50400,79200,108000,144000,2000000000", "gossip": "", "harvestNum": 5, "id": 411, "insect": "0,0,0,0,0,0|65,-30,88,-40,81,-24|48,-14,83,-48,89,-64|0,0,0,0,0,0", "isYouji": 1, "name": "垂枝樱花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "7039", "m2": "7040", "m3": "7041", "s": "7042"}, "cropGrow": "25200,50400,75600,104400,133200,2000000000", "ext": "", "gossip": "", "harvestNum": 3, "id": 412, "insect": "0,0,0,0,0,0|68,-2,91,-20,108,13|54,-6,83,-48,103,-7|0,0,0,0,0,0", "name": "大运UU树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "7720", "m2": "7721", "m3": "7722", "s": "7719"}, "cropGrow": "50400,100800,151200,205200,259200,2000000000", "gossip": "", "harvestNum": 4, "id": 413, "insect": "0,0,0,0,0,0|51,-14,80,-52,111,-18|48,-5,76,-57,112,-16|0,0,0,0,0,0", "name": "李子", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：李子（英文：plum）是蔷薇科植物李树的果实，饱满圆润，玲珑剔透，形态美艳，口味甘甜，是人们喜爱的传统水果之一。", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "6996", "m2": "6997", "m3": "6998", "s": "6995"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 415, "insect": "0,0,0,0,0,0|73,1,90,-20,95,-1|67,-20,99,-39,113,-10|0,0,0,0,0,0", "isLock": 1, "name": "西游芭蕉扇", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：铁扇公主被悟空借走的芭蕉扇，在西游落地生根长成指引大家前进的标志。", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "7165", "m2": "7162", "m3": "7163", "s": "7164"}, "cropGrow": "39600,82800,126000,172800,219600,2000000000", "gossip": "", "harvestNum": 4, "id": 416, "insect": "0,0,0,0,0,0|56,17,93,-22,102,28|42,20,78,-15,94,23|0,0,0,0,0,0", "name": "哈哈南瓜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "7158", "m2": "7159", "m3": "7160", "s": "7161"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 417, "insect": "0,0,0,0,0,0|69,8,82,-28,101,10|61,-3,88,-31,109,6|0,0,0,0,0,0", "name": "咔咔番茄", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "7167", "m2": "7168", "m3": "7169", "s": "7166"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 418, "insect": "0,0,0,0,0,0|61,10,87,-22,91,7|65,7,95,-49,100,-10|0,0,0,0,0,0", "name": "嘻嘻玉米", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "7155", "m2": "7156", "m3": "7157", "s": "7154"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 419, "insect": "0,0,0,0,0,0|62,26,88,-10,106,16|65,6,80,-26,101,-9|0,0,0,0,0,0", "name": "呲牙白菜", "nextText": "种子,发芽,幼苗,成株,卷心,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "7208", "m2": "7209", "m3": "7210", "s": "7207"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 423, "insect": "0,0,0,0,0,0|63,-52,102,-65,97,-29|52,-67,104,-81,102,-34|0,0,0,0,0,0", "isLock": 1, "name": "寻仙八卦葫芦", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：传说八卦葫芦拥有神奇的力量。", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "7212", "m2": "7213", "m3": "7214", "s": "7211"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 424, "insect": "0,0,0,0,0,0|83,16,126,12,111,29|67,30,81,11,111,27|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "仙侠星界莲花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：生长在仙界坠星湖的玉莲。培于水中，待莲花育出莲子。", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "7423", "m2": "7424", "m3": "7425", "s": "7422"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 425, "insect": "0,0,0,0,0,0|81,15,96,-55,98,-21|81,4,93,-62,103,-25|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "七雄重楼花", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：七雄重楼花闯过千重楼，只有沐浴重楼的洗礼才能开放出七雄最美丽的花朵！", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "7502", "m2": "7503", "m3": "7504", "s": "7505"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 4, "id": 426, "insect": "0,0,0,0,0,0|55,-8,85,-32,103,-4|48,-14,83,-48,110,-1|0,0,0,0,0,0", "name": "许愿果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "8043", "m2": "8044", "m3": "8045", "s": "8046"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 427, "insect": "0,0,0,0,0,0|71,25,93,-20,107,23|54,4,83,-48,110,-1|0,0,0,0,0,0", "name": "微博蒲公英", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11788", "m1": "11789", "m2": "11790", "m3": "11791", "m4": "11792", "s": "11793"}, "cropGrow": "28800,57600,90000,122400,158400,2000000000", "gossip": "", "harvestNum": 6, "id": 428, "insect": "0,0,0,0,0,0|90,12,82,-2,90,-5|71,8,86,-4,103,-80|0,0,0,0,0,0", "isYouji": 1, "name": "快乐圣代果", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"actPeriod": "", "actProvideAmt": "", "asset_id": {"m1": "9786", "m2": "9787", "m3": "9788", "s": "9785"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 7, "id": 429, "insect": "0,0,0,0,0,0|86,14,78,-8,102,-7|73,7,100,-19,107,-5|0,0,0,0,0,0", "name": "鸢尾巧克力", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "7716", "m2": "7717", "m3": "7718", "s": "7715"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 430, "insect": "0,0,0,0,0,0|64,1,88,-36,110,-1|65,-5,88,-48,110,-11|0,0,0,0,0,0", "isLock": 1, "name": "DNF小灯笼果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：阿拉德大陆的小灯笼果，是来自DNF新NPC“小灯笼”的神秘祝福。栽种小灯笼果，凭果实到", "type": 1, "vipDesc": "VIP简单描述"},
			{"asset_id": {"m1": "7835", "m2": "7836", "m3": "7837", "s": "7834"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 431, "insect": "0,0,0,0,0,0|55,2,85,-35,110,4|52,-10,83,-48,110,-1|0,0,0,0,0,0", "name": "旅游树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "7854", "m2": "7855", "m3": "7856", "s": "7857"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 433, "insect": "0,0,0,0,0,0|70,8,84,-10,96,8|66,11,80,-23,98,7|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "丝路雪莲", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：丝路雪莲拥有神奇的力量将让您穿越古代，沿着丝绸之路，感受征战的豪情！ ", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8236", "m2": "8237", "m3": "8238", "s": "8235"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000","gossip": "", "harvestNum": 2, "id": 434, "insect": "0,0,0,0,0,0|84,-23,83,5,97,-4|95,-28,100,-3,65,-36|0,0,0,0,0,0", "isLock": 1, "name": "火线灵狐草", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士:火线灵狐草有俏皮的灵气与神秘的力量，拥有它您仿佛沉浸在快乐海洋中。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "8377", "m1": "8378", "m2": "8379", "m3": "8380", "m4": "8376", "s": "8411"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 435, "insect": "0,0,0,0,0,0|87,-28,97,24,76,8|78,-50,76,8,99,24|0,0,0,0,0,0", "name": "山丹丹", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8382", "m2": "8383", "m3": "8384", "m4": "8381", "s": "8410"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 436, "insect": "0,0,0,0,0,0|86,-12,116,-17,90,9|82,-28,115,-4,134,-20|0,0,0,0,0,0", "name": "红梅", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8386", "m2": "8387", "m3": "8388", "m4": "8385", "s": "8409"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 437, "insect": "0,0,0,0,0,0|70,-8,99,-5,72,5|70,-14,102,-19,87,3|0,0,0,0,0,0", "name": "杜鹃", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8391", "m2": "8390", "m3": "8389", "s": "8408"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 438, "insect": "0,0,0,0,0,0|87,-18,89,-4,69,-5|99,-20,51,-21,76,-1|0,0,0,0,0,0", "name": "映山红", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8498", "m2": "8499", "m3": "8500", "s": "8497"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 439, "insect": "0,0,0,0,0,0|69,-23,87,-40,110,-17|55,-64,55,-33,128,-53|0,0,0,0,0,0", "isFlower": 1, "name": "连理枝", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8493", "m2": "8494", "m3": "8495", "s": "8496"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 8, "id": 440, "insect": "0,0,0,0,0,0|60,3,73,-27,93,4|68,-44,61,0,94,6|0,0,0,0,0,0", "isFlower": 1, "name": "七彩皇后", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8490", "m2": "8491", "m3": "8492", "s": "8489"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 441, "insect": "0,0,0,0,0,0|64,-14,88,-19,99,4|64,-41,97,-55,101,-4|0,0,0,0,0,0", "name": "红豆", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8515", "m2": "8516", "m3": "8513", "s": "8514"}, "cropGrow": "39600,82800,126000,172800,219600,2000000000", "gossip": "", "harvestNum": 4, "id": 442, "insect": "0,0,0,0,0,0|75,-18,111,-3,113,25|76,-17,108,26,109,-3|0,0,0,0,0,0", "isFlower": 1, "name": "睡莲", "nextText": "种子,发芽,小叶子,大叶子,幼株,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8621", "m2": "8622", "m3": "8623", "s": "8620"}, "cropGrow": "54000,108000,165600,219600,277200,2000000000", "gossip": "", "harvestNum": 4, "id": 443, "insect": "0,0,0,0,0,0|71,13,99,-35,94,6|59,10,75,-4,107,-1|0,0,0,0,0,0", "isFlower": 1, "name": "乞巧相思果", "nextText": "种子,发芽,小叶子,大叶子,小果,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8787", "m2": "8788", "m3": "8789", "s": "8786"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 444, "insect": "0,0,0,0,0,0|75,12,85,-29,91,0|75,13,83,-48,92,3|0,0,0,0,0,0", "isLock": 1, "name": "功夫大乐斗", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：传说中汇聚上乘武功于一身的功夫大乐豆，拥有它就拥有了江湖。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8795", "m2": "8796", "m3": "8797", "s": "8794"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 445, "insect": "0,0,0,0,0,0|59,21,95,-29,106,10|73,-3,91,-44,119,-10|0,0,0,0,0,0", "isVIP": 1, "name": "汽车人", "nextText": "种子,雏形,初成,变形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的黄钻专属作物，我是可以变形的汽车人，地球由我来保护！汽车人，出发！", "type": 1, "vipDesc": "汽车人，出发！"},
			{"asset_id": {"m1": "8791", "m2": "8792", "m3": "8793", "s": "8790"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 446, "insect": "0,0,0,0,0,0|70,19,73,-9,103,14|75,13,83,-48,100,11|0,0,0,0,0,0", "isVIP": 1, "name": "金色飞贼", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的黄钻专属作物，与胡桃一般大小的金属球，有着银子做成的翅膀，想要抓住它吗？想要抓住它吗？", "type": 1, "vipDesc": "想要抓住我吗？"},
			{"asset_id": {"m1": "8840", "m2": "8841", "m3": "8842", "s": "8839"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 447, "insect": "0,0,0,0,0,0|65,22,79,3,105,22|51,2,84,-9,102,9|0,0,0,0,0,0", "name": "并蒂果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8836", "m2": "8837", "m3": "8838", "s": "8835"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 448, "insect": "0,0,0,0,0,0|67,-3,87,-17,90,12|59,-12,85,-38,95,-7|0,0,0,0,0,0", "isFlower": 1, "name": "天娇", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8826", "m2": "8827", "m3": "8828", "s": "8825"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 449, "insect": "0,0,0,0,0,0|85,25,82,-22,92,10|82,28,83,-31,90,8|0,0,0,0,0,0", "isLock": 1, "name": "西游盘丝草", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：西游中盘丝洞内的仙草，灵气馥郁，长年繁盛葱郁，可谓“藤薜挂悬三五树，芝兰香散万千花”。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8844", "m2": "8845", "m3": "8846", "s": "8843"}, "cropGrow": "7200,25200,57600,82800,100800,2000000000", "gossip": "", "harvestNum": 1, "id": 450, "insect": "0,0,0,0,0,0|69,21,79,3,105,22|61,8,90,-25,102,9|0,0,0,0,0,0", "name": "火舞果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "9660", "m2": "9661", "m3": "9662", "s": "9663"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 451, "insect": "0,0,0,0,0,0|81,20,88,-4,106,11|73,13,85,-29,107,14|0,0,0,0,0,0", "isLock": 1, "name": "飞车漂流果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：飞车漂流果是飞车世界中赛车手们传递心灵之音和心愿的神奇植物，“心漂流、新朋友“。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "9665", "m2": "9666", "m3": "9667", "s": "9664"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 452, "insect": "0,0,0,0,0,0|81,20,88,-4,106,11|88,16,85,-29,114,2|0,0,0,0,0,0", "isLock": 1, "name": "楚汉云龙果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：楚汉云龙果是楚河汉界中兵家圣地云龙山的特产，养育了一代代骁勇善战的英雄豪杰，力挽历史狂澜。楚汉世界驰骋天下。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"actPeriod": "", "actProvideAmt": "", "asset_id": {"m1": "9738", "m2": "9739", "m3": "9740", "s": "9737"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "", "harvestNum": 3, "id": 453, "insect": "0,0,0,0,0,0|75,-21,89,-40,109,-5|69,-30,93,-64,114,-8|0,0,0,0,0,0", "name": "漫天花雨", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"actPeriod": "", "actProvideAmt": "", "asset_id": {"m0": "9712", "m1": "9734", "m2": "9735", "m3": "9736", "s": "9733"}, "cropGrow": "21600,43200,61200,82800,108000,2000000000", "gossip": "", "harvestNum": 3, "id": 454, "insect": "0,0,0,0,0,0|75,-21,85,-48,92,-30|69,-30,93,-64,92,-42|0,0,0,0,0,0", "isFlower": 1, "name": "扫把烟花", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"actPeriod": "", "actProvideAmt": "", "asset_id": {"m1": "9730", "m2": "9731", "m3": "9732", "s": "9729"}, "cropGrow": "21600,39600,57600,75600,100800,2000000000", "gossip": "", "harvestNum": 4, "id": 455, "insect": "0,0,0,0,0,0|70,18,90,-9,109,17|63,22,88,-17,115,19|0,0,0,0,0,0", "isFlower": 1, "name": "冰蓝蝶影", "nextText": "种子,发芽,小叶子,大叶子,初熟,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10725", "m2": "10726", "m3": "10727", "s": "10728"}, "cropGrow": "32400,68400,104400,136800,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 456, "insect": "0,0,0,0,0,0|88,-25,81,8,96,-4|66,-14,95,5,96,-17|0,0,0,0,0,0", "isRed": 1, "name": "红露珍", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10717", "m2": "10718", "m3": "10719", "s": "10720"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 7, "id": 457, "insect": "0,0,0,0,0,0|66,-22,92,-22,96,-4|66,-5,83,-48,96,-17|0,0,0,0,0,0", "name": "火鹤花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"actPeriod": "", "actProvideAmt": "", "asset_id": {"m1": "9774", "m2": "9775", "m3": "9776", "s": "9773"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 4, "id": 458, "insect": "0,0,0,0,0,0|59,-14,93,-39,108,-7|45,-1,67,-44,114,-17|0,0,0,0,0,0", "isFlower": 1, "name": "海芋", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12240", "m1": "12241", "m2": "12242", "m3": "12243", "m4": "12244", "s": "12245"}, "cropGrow": "10800,21600,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 2, "id": 459, "insect": "0,0,0,0,0,0|94,-17,75,-20,80,-9|78,-49,66,-32,93,-35|0,0,0,0,0,0", "isYouji": 1, "name": "月苋草", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10163", "m2": "10164", "m3": "10165", "s": "10162"}, "cropGrow": "32400,64800,100800,144000,187200,2000000000", "gossip": "", "harvestNum": 6, "id": 460, "insect": "0,0,0,0,0,0|84,23,73,-32,94,11|104,16,89,28,65,-55|0,0,0,0,0,0", "isRed": 2, "name": "园艺熊猫", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：精心修剪的园艺熊猫，只能在黑土地上种植。\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10143", "m2": "10144", "m3": "10145", "s": "10142"}, "cropGrow": "28800,57600,93600,129600,172800,2000000000", "gossip": "", "harvestNum": 5, "id": 461, "insect": "0,0,0,0,0,0|95,18,119,9,65,0|100,19,70,-22,123,-6|0,0,0,0,0,0", "isRed": 2, "name": "园艺鲸鱼", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：精心修剪的园艺鲸鱼，只能在黑土地上种植。\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10159", "m2": "10160", "m3": "10161", "s": "10158"}, "cropGrow": "28800,57600,97200,136800,176400,2000000000", "gossip": "", "harvestNum": 6, "id": 463, "insect": "0,0,0,0,0,0|70,19,73,1,101,2|105,14,71,2,102,-12|0,0,0,0,0,0", "isRed": 2, "name": "园艺兔子", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：精心修剪的园艺兔子，只能在黑土地上种植。\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10155", "m2": "10156", "m3": "10157", "s": "10154"}, "cropGrow": "28800,57600,93600,133200,172800,2000000000", "gossip": "", "harvestNum": 6, "id": 465, "insect": "0,0,0,0,0,0|68,13,95,8,94,-10|75,10,69,-8,105,-10|0,0,0,0,0,0", "isRed": 2, "name": "园艺天鹅", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10151", "m2": "10152", "m3": "10153", "s": "10150"}, "cropGrow": "28800,57600,93600,136800,180000,2000000000", "gossip": "", "harvestNum": 6, "id": 468, "insect": "0,0,0,0,0,0|77,9,94,3,81,-14|81,9,81,-16,105,-17|0,0,0,0,0,0", "isRed": 2, "name": "园艺麋鹿", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：精心修剪的园艺麋鹿，只能在黑土地上种植。\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10183", "m2": "10184", "m3": "10185", "s": "10182"}, "cropGrow": "28800,57600,93600,129600,169200,2000000000", "gossip": "", "harvestNum": 5, "id": 469, "insect": "0,0,0,0,0,0|79,-12,97,-19,83,8|97,-11,61,-25,96,-39|0,0,0,0,0,0", "isRed": 2, "name": "园艺孔雀", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：精心修剪的园艺孔雀，只能在黑土地上种植。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10167", "m2": "10168", "m3": "10169", "s": "10166"}, "cropGrow": "36000,72000,111600,154800,198000,2000000000", "gossip": "", "harvestNum": 7, "id": 470, "insect": "0,0,0,0,0,0|72,16,90,-7,107,13|104,16,69,18,99,-22|0,0,0,0,0,0", "isRed": 2, "name": "园艺章鱼", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：精心修剪的园艺章鱼，只能在黑土地上种植。\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10139", "m2": "10140", "m3": "10141", "s": "10138"}, "cropGrow": "28800,57600,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 471, "insect": "0,0,0,0,0,0|82,-15,97,-23,101,1|79,-21,92,-32,106,-15|0,0,0,0,0,0", "isRed": 2, "name": "园艺海豚", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：精心修剪的园艺海豚，只能在黑土地上种植。\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "9855", "m2": "9856", "m3": "9857", "s": "9854"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 472, "insect": "0,0,0,0,0,0|59,-14,83,-48,103,-25|59,-17,78,-59,108,-25|0,0,0,0,0,0", "name": "奇幻神灯", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10219", "m2": "10220", "m3": "10221", "s": "10218"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 490, "insect": "0,0,0,0,0,0|78,7,88,-17,97,3|71,-1,83,-21,116,0|0,0,0,0,0,0", "isLock": 1, "name": "王朝轮回果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：代表了历史轮转生生不息的力量。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10215", "m2": "10216", "m3": "10217", "s": "10214"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 491, "insect": "0,0,0,0,0,0|86,3,88,-17,105,-2|76,-2,93,-31,105,-10|0,0,0,0,0,0", "isLock": 1, "name": "海岛之恋", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：传说这是一个美丽的姑娘为了向爱人表白而精心培育出来的神奇植物。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "6942", "m2": "6943", "m3": "6944", "s": "6941"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 501, "insect": "0,0,0,0,0,0|72,5,88,-26,109,5|68,4,83,-48,108,9|0,0,0,0,0,0", "isFlower": 1, "isVIP": 1, "name": "酷酷有型表情", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它来表达你今天的心情吧。让我们一起华丽丽的表现得酷酷又有型。", "type": 1, "vipDesc": "华丽丽的酷一下"},
			{"asset_id": {"m1": "6964", "m2": "6965", "m3": "6966", "s": "6963"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 502, "insect": "0,0,0,0,0,0|72,-4,88,-26,109,5|68,4,83,-48,108,9|0,0,0,0,0,0", "isFlower": 1, "isVIP": 1, "name": "心动跳跳表情", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它来表达你今天的心情吧。是什么让我们心动了呢？是美食？是美女？还是美好的一天！！！", "type": 1, "vipDesc": "心动了有木有！！！"},
			{"asset_id": {"m1": "6926", "m2": "6927", "m3": "6928", "s": "6925"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 503, "insect": "0,0,0,0,0,0|62,3,88,-26,107,11|68,4,83,-48,108,9|0,0,0,0,0,0", "isFlower": 1, "isVIP": 1, "name": "呲牙笑笑表情", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它来再现你今天的心情吧。让我们一起呲牙笑笑，让牙齿晒晒太阳。", "type": 1, "vipDesc": "呲牙笑笑，快乐每一天"},
			{"asset_id": {"m1": "6951", "m2": "6952", "m3": "6953", "s": "6954"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 504, "insect": "0,0,0,0,0,0|72,5,88,-26,109,5|68,4,83,-48,108,9|0,0,0,0,0,0", "isFlower": 1, "isVIP": 1, "name": "郁闷表情", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它来表达你今天的心情吧。是什么让我们如此郁闷？让我们一起种下郁闷表情，发泄一下我们的不满。明天，摘掉它，让坏心情统统不见。", "type": 1, "vipDesc": "什么事让我们郁闷了呢"},
			{"asset_id": {"m1": "6947", "m2": "6948", "m3": "6949", "s": "6950"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 505, "insect": "0,0,0,0,0,0|72,5,88,-26,109,5|68,4,83,-48,108,9|0,0,0,0,0,0", "isFlower": 1, "isVIP": 1, "name": "可爱咪咪笑表情", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它来表达你今天的心情吧。让我们一起，咪眼笑笑，绽放最纯真可爱的笑容。", "type": 1, "vipDesc": "装装可爱，咪眼一笑"},
			{"asset_id": {"m1": "7216", "m2": "7217", "m3": "7218", "s": "7215"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 507, "insect": "0,0,0,0,0,0|68,19,93,-26,104,19|75,18,86,-32,100,13|0,0,0,0,0,0", "isFlower": 1, "isVIP": 1, "name": "难过表情", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它来表达你今天的心情吧。什么事情让我们难过了呢？伤心只能一会儿哦，伤心过后，还得笑对每一天。", "type": 1, "vipDesc": "难过就表达一下"},
			{"asset_id": {"m1": "7060", "m2": "7061", "m3": "7062", "s": "7059"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 508, "insect": "0,0,0,0,0,0|74,6,87,-22,108,-1|72,14,91,-43,109,-15|0,0,0,0,0,0", "isFlower": 1, "isVIP": 1, "name": "鬼脸吓吓表情", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它来表达你今天的心情吧。做个鬼脸，轻松一下。", "type": 1, "vipDesc": "做个鬼脸，轻松一下"},
			{"asset_id": {"m1": "7224", "m2": "7225", "m3": "7226", "s": "7223"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 509, "insect": "0,0,0,0,0,0|69,13,88,-16,103,9|77,22,84,-38,109,1|0,0,0,0,0,0", "isFlower": 1, "isVIP": 1, "name": "疑惑表情", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它来表达你今天的心情吧。这是为什么呢？打个问号疑惑一下。", "type": 1, "vipDesc": "打个问号表示疑惑"},
			{"asset_id": {"m1": "7076", "m2": "7077", "m3": "7078", "s": "7075"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 510, "insect": "0,0,0,0,0,0|69,12,94,-17,94,18|72,15,90,-31,96,15|0,0,0,0,0,0", "isFlower": 1, "isVIP": 1, "name": "困啊困表情", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它展现你今天的心情吧。困了？那就休息休息，有了饱满的精神再好好的学习工作。", "type": 1, "vipDesc": "困啊困……"},
			{"asset_id": {"m1": "7072", "m2": "7073", "m3": "7074", "s": "7071"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 511, "insect": "0,0,0,0,0,0|69,12,83,-5,94,18|59,4,90,-23,96,15|0,0,0,0,0,0", "isVIP": 1, "name": "囧", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它展现你今天的心情吧。瞧这表情，囧了吧！", "type": 1, "vipDesc": "囧……"},
			{"asset_id": {"m1": "7064", "m2": "7065", "m3": "7066", "s": "7063"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 512, "insect": "0,0,0,0,0,0|74,12,105,-17,102,6|72,14,101,-23,100,3|0,0,0,0,0,0", "isVIP": 1, "name": "尴尬一笑", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它展现你今天的心情吧。什么事这么尴尬，让你会做出这样无奈的表情呢？再尴尬也没关系，咱一笑而过。", "type": 1, "vipDesc": "让尴尬一笑而过"},
			{"asset_id": {"m1": "7056", "m2": "7057", "m3": "7058", "s": "7055"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 513, "insect": "0,0,0,0,0,0|55,2,73,-20,110,-1|49,5,81,-31,110,-1|0,0,0,0,0,0", "isVIP": 1, "name": "号啕大哭", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它展现你今天的心情吧。貌似心情有点不佳，偶尔放纵大哭一下，发泄后再展笑颜。", "type": 1, "vipDesc": "我要号啕大哭"},
			{"asset_id": {"m1": "7220", "m2": "7221", "m3": "7222", "s": "7219"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 514, "insect": "0,0,0,0,0,0|69,13,92,4,98,16|75,12,83,-27,109,1|0,0,0,0,0,0", "isVIP": 1, "name": "亲亲表情", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它展现你今天的心情吧。想表达爱意还是谢意呢？都种上亲亲表情来表达吧。", "type": 1, "vipDesc": "亲亲亲爱的"},
			{"asset_id": {"m1": "7068", "m2": "7069", "m3": "7070", "s": "7067"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 515, "insect": "0,0,0,0,0,0|69,12,83,-5,94,18|59,4,90,-23,96,15|0,0,0,0,0,0", "isVIP": 1, "name": "大惊失色", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它展现你今天的心情吧。什么事让我们这么惊讶呢？发现新大陆了还是发现怪兽了？", "type": 1, "vipDesc": "有怪兽！！！"},
			{"asset_id": {"m1": "7418", "m2": "7419", "m3": "7420", "s": "7421"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 516, "insect": "0,0,0,0,0,0|76,17,79,-3,91,12|74,12,85,-22,96,-1|0,0,0,0,0,0", "isVIP": 1, "name": "航海鼠", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是聪明的航海鼠，最爱安静的画世界航海图。", "type": 1, "vipDesc": "我是聪明的航海鼠"},
			{"asset_id": {"m1": "7413", "m2": "7410", "m3": "7411", "s": "7412"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 517, "insect": "0,0,0,0,0,0|76,17,79,-3,91,12|74,12,85,-22,96,-1|0,0,0,0,0,0", "isVIP": 1, "name": "制造牛", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是帅帅的制造牛，谁能比我更拉风！", "type": 1, "vipDesc": "我是拉风的制造牛"},
			{"asset_id": {"m1": "7406", "m2": "7407", "m3": "7408", "s": "7409"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 518, "insect": "0,0,0,0,0,0|76,17,79,-3,98,14|84,12,85,-22,106,0|0,0,0,0,0,0", "isVIP": 1, "name": "剑士虎", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是酷酷的剑士虎，还是耍三把刀的三刀流哦。", "type": 1, "vipDesc": "我是酷酷的剑士虎"},
			{"asset_id": {"m1": "7415", "m2": "7416", "m3": "7417", "s": "7414"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 519, "insect": "0,0,0,0,0,0|76,17,79,-3,91,12|74,12,85,-22,96,-1|0,0,0,0,0,0", "isVIP": 1, "name": "公主兔", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是乖乖公主兔，甩手逛街街。", "type": 1, "vipDesc": "我是乖乖公主兔"},
			{"asset_id": {"m1": "7475", "m2": "7476", "m3": "7477", "s": "7474"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 520, "insect": "0,0,0,0,0,0|80,22,83,-8,95,8|80,6,86,-33,93,-13|0,0,0,0,0,0", "isVIP": 1, "name": "考古龙", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是爱读书，爱研究，博学多才的考古龙。", "type": 1, "vipDesc": "我是博学的考古龙"},
			{"asset_id": {"m1": "7479", "m2": "7480", "m3": "7481", "s": "7478"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 521, "insect": "0,0,0,0,0,0|80,22,83,-8,95,8|80,6,86,-33,93,-13|0,0,0,0,0,0", "isVIP": 1, "name": "美女蛇", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是爱音乐，爱打扮的美女蛇。", "type": 1, "vipDesc": "我是爱打扮的美女蛇"},
			{"asset_id": {"m1": "7466", "m2": "7467", "m3": "7468", "s": "7469"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 522, "insect": "0,0,0,0,0,0|80,22,83,-8,95,8|80,6,86,-33,93,-13|0,0,0,0,0,0", "isVIP": 1, "name": "厨师马", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是卷卷眉的厨师马，爱厨房爱生活。", "type": 1, "vipDesc": "我是卷卷眉的厨师马"},
			{"asset_id": {"m1": "7470", "m2": "7471", "m3": "7472", "s": "7473"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 523, "insect": "0,0,0,0,0,0|80,22,83,-8,95,8|80,6,86,-33,93,-13|0,0,0,0,0,0", "isVIP": 1, "name": "护士羊", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是可爱的羊MM，我也是可爱的护士小姐，请叫我护士羊，要打针咩？", "type": 1, "vipDesc": "我是可爱的护士羊"},
			{"asset_id": {"m1": "7487", "m2": "7488", "m3": "7489", "s": "7486"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 524, "insect": "0,0,0,0,0,0|80,22,83,-8,95,8|80,6,86,-33,93,-13|0,0,0,0,0,0", "isVIP": 1, "name": "冒险猴", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是俏皮的小猴子，爱冒险的小猴子。", "type": 1, "vipDesc": "让我们一起自由冒险吧"},
			{"asset_id": {"m1": "7495", "m2": "7496", "m3": "7497", "s": "7494"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 525, "insect": "0,0,0,0,0,0|80,22,83,-8,95,8|80,6,92,-20,85,-8|0,0,0,0,0,0", "isVIP": 1, "name": "弹弓鸡", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是狙击之王弹弓鸡，看招！", "type": 1, "vipDesc": "我是狙击之王弹弓鸡"},
			{"asset_id": {"m1": "7499", "m2": "7500", "m3": "7501", "s": "7498"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 526, "insect": "0,0,0,0,0,0|80,22,83,-8,95,8|80,6,92,-20,85,-8|0,0,0,0,0,0", "isVIP": 1, "name": "提琴狗", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是爱音乐爱拉小提琴的狗狗，和我一起畅游音乐世界吧。", "type": 1, "vipDesc": "我是爱音乐的提琴狗"},
			{"asset_id": {"m1": "7491", "m2": "7492", "m3": "7493", "s": "7490"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 527, "insect": "0,0,0,0,0,0|80,22,83,-8,95,8|80,6,92,-20,85,-8|0,0,0,0,0,0", "isVIP": 1, "name": "啤酒猪", "nextText": "种子,发芽,雏形,长成,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的12生肖作物登场了，我是爱喝啤酒的小猪猪，瞧我这啤酒肚，小朋友别学我哦。", "type": 1, "vipDesc": "我是大肚的啤酒猪"},
			{"asset_id": {"m1": "7839", "m2": "7840", "m3": "7841", "s": "7838"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 528, "insect": "0,0,0,0,0,0|60,8,84,-10,110,4|56,11,83,-31,110,-1|0,0,0,0,0,0", "isVIP": 1, "name": "傲慢表情", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它展现你今天的心情吧。什么事，让我们一脸不屑呢？偶尔装装傲慢也不错。", "type": 1, "vipDesc": "咱不屑，哼"},
			{"asset_id": {"m1": "7846", "m2": "7847", "m3": "7848", "s": "7849"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 529, "insect": "0,0,0,0,0,0|70,8,84,-10,110,4|48,-3,80,-23,110,-1|0,0,0,0,0,0", "isVIP": 1, "name": "糗表情", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它展现你今天的心情吧。做错啥事情，说错啥话，让我们这么糗？糗了，笑笑就过了，下次记住不再犯同样的糗事哦。", "type": 1, "vipDesc": "犯糗了"},
			{"asset_id": {"m1": "7851", "m2": "7852", "m3": "7853", "s": "7850"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 530, "insect": "0,0,0,0,0,0|70,8,84,-10,96,8|66,11,80,-23,98,7|0,0,0,0,0,0", "isVIP": 1, "name": "委屈表情", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的表情作物，种上它展现你今天的心情吧。啥事让我们受委屈了呢？没关系，要使自己的生命获得极值和炫彩，就不能太在乎委屈。", "type": 1, "vipDesc": "委屈了，难过一下"},
			{"asset_id": {"m1": "8510", "m2": "8511", "m3": "8512", "s": "8509"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 533, "insect": "0,0,0,0,0,0|66,-11,99,-6,106,23|65,-41,100,20,99,-32|0,0,0,0,0,0", "isVIP": 1, "name": "我", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "自我表现一下吧"},
			{"asset_id": {"m1": "8501", "m2": "8502", "m3": "8503", "s": "8504"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 534, "insect": "0,0,0,0,0,0|67,-2,86,-2,95,9|62,-33,90,-33,103,-13|0,0,0,0,0,0", "isVIP": 1, "name": "爱", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "用爱的宣言"},
			{"asset_id": {"m1": "8506", "m2": "8507", "m3": "8508", "s": "8505"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 535, "insect": "0,0,0,0,0,0|70,2,74,17,101,16|59,-33,104,3,92,-16|0,0,0,0,0,0", "isVIP": 1, "name": "你", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "来个给对方吧"},
			{"asset_id": {"m0": "12632", "m1": "12633", "m2": "12634", "m3": "12635", "m4": "12636", "s": "12637"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 536, "insect": "0,0,0,0,0,0|76,13,89,8,96,5|48,-14,75,-44,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "雷表情", "nextText": "种子,发芽,小叶,大叶,初成,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12662", "m1": "12663", "m2": "12664", "m3": "12665", "m4": "12666", "s": "12667"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 538, "insect": "0,0,0,0,0,0|101,-6,89,8,95,5|59,0,75,-44,77,-32|0,0,0,0,0,0", "isYouji": 1, "name": "眯眼表情", "nextText": "种子,发芽,小叶,大叶,初成,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12644", "m1": "12645", "m2": "12646", "m3": "12647", "m4": "12648", "s": "12649"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 539, "insect": "0,0,0,0,0,0|67,-2,89,8,96,5|59,-17,75,-44,89,-8|0,0,0,0,0,0", "isYouji": 1, "name": "怒表情", "nextText": "种子,发芽,小叶,大叶,初成,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12656", "m1": "12657", "m2": "12658", "m3": "12659", "m4": "12660", "s": "12661"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 542, "insect": "0,0,0,0,0,0|101,-6,89,8,95,5|59,0,75,-44,77,-32|0,0,0,0,0,0", "isYouji": 1, "name": "喷表情", "nextText": "种子,发芽,小叶,大叶,初成,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12650", "m1": "12651", "m2": "12652", "m3": "12653", "m4": "12654", "s": "12655"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 543, "insect": "0,0,0,0,0,0|67,-2,89,8,96,5|59,-17,75,-44,89,-8|0,0,0,0,0,0", "isYouji": 1, "name": "冒泡表情", "nextText": "种子,发芽,小叶,大叶,初成,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12638", "m1": "12639", "m2": "12640", "m3": "12641", "m4": "12642", "s": "12643"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 545, "insect": "0,0,0,0,0,0|67,-2,89,8,96,5|48,-14,75,-44,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "愣表情", "nextText": "种子,发芽,小叶,大叶,初成,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8240", "m2": "8241", "m3": "8242", "s": "8239"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 557, "insect": "0,0,0,0,0,0|98,1,79,18,93,-23|77,4,91,-47,97,-25|0,0,0,0,0,0", "isVIP": 1, "name": "俄罗斯方块作物一", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8244", "m2": "8245", "m3": "8246", "s": "8243"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 558, "insect": "0,0,0,0,0,0|98,1,79,18,93,-24|88,10,79,-27,106,8|0,0,0,0,0,0", "isVIP": 1, "name": "俄罗斯方块作物二", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8248", "m2": "8249", "m3": "8250", "s": "8247"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 559, "insect": "0,0,0,0,0,0|98,1,79,18,93,-24|88,10,79,-27,106,8|0,0,0,0,0,0", "isVIP": 1, "name": "俄罗斯方块作物三", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8252", "m2": "8253", "m3": "8282", "s": "8251"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 560, "insect": "0,0,0,0,0,0|79,-8,71,1,97,10|65,-5,108,-19,87,-17|0,0,0,0,0,0", "isVIP": 1, "name": "俄罗斯方块作物四", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8255", "m2": "8256", "m3": "8257", "s": "8254"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 561, "insect": "0,0,0,0,0,0|79,-8,82,5,106,7|93,11,110,7,75,-29|0,0,0,0,0,0", "isVIP": 1, "name": "俄罗斯方块作物五", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8259", "m2": "8260", "m3": "8261", "m4": "8262", "s": "8258"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 562, "insect": "0,0,0,0,0,0|76,-27,92,11,106,7|80,-21,111,15,65,-36|0,0,0,0,0,0", "isVIP": 1, "name": "俄罗斯方块作物六", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8263", "m2": "8264", "m3": "8265", "s": "8266"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 563, "insect": "0,0,0,0,0,0|74,21,82,5,93,21|72,17,81,-20,93,7|0,0,0,0,0,0", "isVIP": 1, "name": "俄罗斯方块作物七", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8050", "m2": "8049", "m3": "8048", "s": "8047"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 564, "insect": "0,0,0,0,0,0|76,9,107,5,97,-25|109,2,69,-17,95,-47|0,0,0,0,0,0", "isVIP": 1, "name": "夏日紫色贝壳", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩度假系列作物，让你夏日不再炎热度过，来个浪花一朵朵作物——夏日紫色贝壳。", "type": 1, "vipDesc": "海浪红仔珊瑚"},
			{"asset_id": {"m1": "8054", "m2": "8053", "m3": "8052", "s": "8051"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 565, "insect": "0,0,0,0,0,0|76,11,108,-1,85,-18|116,-8,87,-13,76,-41|0,0,0,0,0,0", "name": "夏日黄色贝壳", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩度假系列作物，让你夏日不再炎热度过，来个浪花一朵朵作物——夏日黄色贝壳。", "type": 1, "vipDesc": "海浪夏日黄色贝壳"},
			{"asset_id": {"m1": "8058", "m2": "8057", "m3": "8056", "s": "8055"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 566, "insect": "0,0,0,0,0,0|73,1,107,8,89,-20|63,5,88,-12,89,-49|0,0,0,0,0,0", "isVIP": 1, "name": "夏日紫色海螺", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩度假系列作物，让你的夏日不再炎热度过，赶快种下夏日紫色海螺作物吧。", "type": 1, "vipDesc": "夏日一起摘贝壳"},
			{"asset_id": {"m1": "8059", "m2": "8061", "m3": "8181", "s": "8060"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 567, "insect": "0,0,0,0,0,0|70,2,103,16,93,-13|59,-13,106,6,91,-45|0,0,0,0,0,0", "name": "夏日黄色海螺", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩度假系列作物，让你的夏日不再炎热度过，赶快种下夏日黄色海螺作物吧。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8062", "m2": "8065", "m3": "8064", "s": "8063"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 568, "insect": "0,0,0,0,0,0|70,3,107,12,92,-24|72,-3,106,6,99,-31|0,0,0,0,0,0", "isVIP": 1, "name": "夏日紫色海星", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩度假系列作物，让你的夏日不再炎热度过，赶快种下夏日紫色海星作物吧。", "type": 1, "vipDesc": "夏日摘下紫色海星"},
			{"asset_id": {"m1": "8066", "m2": "8069", "m3": "8068", "s": "8067"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 569, "insect": "0,0,0,0,0,0|70,3,107,12,92,-24|72,-3,106,6,99,-31|0,0,0,0,0,0", "isVIP": 1, "name": "夏日黄色海星", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩度假系列作物，让你的夏日不再炎热度过，赶快种下夏日黄色海星作物吧。", "type": 1, "vipDesc": "夏日一起摘海星"},
			{"asset_id": {"m1": "8072", "m2": "8071", "m3": "8180", "s": "8070"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 570, "insect": "0,0,0,0,0,0|71,11,108,1,73,-12|71,-26,112,6,85,-57|0,0,0,0,0,0", "isVIP": 1, "name": "夏日泡泡凉拖", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快种下夏日泡泡凉拖作物吧。", "type": 1, "vipDesc": "夏日来双可爱凉拖"},
			{"asset_id": {"m1": "8073", "m2": "8076", "m3": "8075", "s": "8074"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 571, "insect": "0,0,0,0,0,0|71,11,115,-4,90,-36|65,5,123,-16,84,-53|0,0,0,0,0,0", "isVIP": 1, "name": "夏日Y字凉拖", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快拥有双时尚的夏日Y字凉拖。", "type": 1, "vipDesc": "夏日最时尚Y字凉拖"},
			{"asset_id": {"m1": "8077", "m2": "8079", "m3": "8182", "s": "8078"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 572, "insect": "0,0,0,0,0,0|73,10,101,10,87,-5|65,-4,104,-20,86,-42|0,0,0,0,0,0", "isVIP": 1, "name": "夏日瘦身茶", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快种下夏日瘦身茶作物吧。", "type": 1, "vipDesc": "夏日一起瘦身"},
			{"asset_id": {"m1": "8080", "m2": "8083", "m3": "8082", "s": "8081"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 573, "insect": "0,0,0,0,0,0|73,10,98,15,79,-14|102,12,106,-20,74,-40|0,0,0,0,0,0", "isVIP": 1, "name": "夏日鸡尾酒", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快来份夏日鸡尾酒作物吧。", "type": 1, "vipDesc": "夏日来杯冰镇饮料"},
			{"asset_id": {"m1": "8084", "m2": "8087", "m3": "8086", "s": "8085"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 574, "insect": "0,0,0,0,0,0|66,4,108,12,104,-30|62,-6,114,-24,92,-60|0,0,0,0,0,0", "isVIP": 1, "name": "桃心潜水镜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快种下桃心潜水镜作物吧。", "type": 1, "vipDesc": "戴上潜水镜一起游泳吧"},
			{"asset_id": {"m1": "8088", "m2": "8091", "m3": "8090", "s": "8089"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 575, "insect": "0,0,0,0,0,0|66,4,108,12,104,-30|62,-6,114,-24,92,-60|0,0,0,0,0,0", "isVIP": 1, "name": "五星潜水镜", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快种下五星潜水镜作物吧。", "type": 1, "vipDesc": "夏日戴上潜水镜潜水"},
			{"asset_id": {"m1": "8095", "m2": "8094", "m3": "8093", "s": "8092"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 576, "insect": "0,0,0,0,0,0|66,4,109,-5,71,-21|63,1,113,-12,72,-55|0,0,0,0,0,0", "isVIP": 1, "name": "魅惑热带鱼", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快种下魅惑热带鱼作物吧。", "type": 1, "vipDesc": "夏日拥有缤纷热带鱼"},
			{"asset_id": {"m1": "8096", "m2": "8099", "m3": "8098", "s": "8097"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 577, "insect": "0,0,0,0,0,0|64,1,103,-31,105,11|73,-12,117,-29,90,-63|0,0,0,0,0,0", "isVIP": 1, "name": "酷酷小丑鱼", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快种下酷酷小丑鱼作物吧。", "type": 1, "vipDesc": "夏日一起拥有酷酷小鱼"},
			{"asset_id": {"m1": "8100", "m2": "8103", "m3": "8102", "s": "8101"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 578, "insect": "0,0,0,0,0,0|68,-18,103,-31,104,1|62,-25,111,-6,73,-49|0,0,0,0,0,0", "isVIP": 1, "name": "夏威夷游泳圈", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快种下夏威夷游泳圈作物吧。", "type": 1, "vipDesc": "套上泳圈游泳去"},
			{"asset_id": {"m1": "8112", "m2": "8115", "m3": "8114", "s": "8113"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 579, "insect": "0,0,0,0,0,0|76,12,85,-35,115,-3|68,4,85,-55,124,-20|0,0,0,0,0,0", "isVIP": 1, "name": "海军救生圈", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快种下夏日海军救生圈作物吧。", "type": 1, "vipDesc": "夏日安全游泳"},
			{"asset_id": {"m1": "8104", "m2": "8107", "m3": "8106", "s": "8105"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 580, "insect": "0,0,0,0,0,0|73,-10,72,8,106,9|68,0,106,0,85,-37|0,0,0,0,0,0", "isVIP": 1, "name": "紫妖珊瑚", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快种下紫妖珊瑚作物吧。", "type": 1, "vipDesc": "夏日享有冷艳感"},
			{"asset_id": {"m1": "8108", "m2": "8111", "m3": "8110", "s": "8109"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 581, "insect": "0,0,0,0,0,0|80,-20,76,13,103,13|72,-38,105,8,104,-37|0,0,0,0,0,0", "isVIP": 1, "name": "红仔珊瑚", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "夏日海滩系列作物，让你的夏日不再炎热度过，赶快种下夏日红仔珊瑚作物吧。", "type": 1, "vipDesc": "夏日的热情"},
			{"asset_id": {"m0": "11782", "m1": "11783", "m2": "11784", "m3": "11785", "m4": "11786", "s": "11787"}, "cropGrow": "28800,57600,90000,126000,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 582, "insect": "0,0,0,0,0,0|90,12,82,-2,90,-5|71,8,86,-4,76,-26|0,0,0,0,0,0", "isYouji": 1, "name": "婚礼蛋糕", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "8748", "m2": "8749", "m3": "8750", "s": "8747"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 583, "insect": "0,0,0,0,0,0|63,18,89,14,119,5|51,12,91,3,128,4|0,0,0,0,0,0", "isVIP": 1, "name": "求包养", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：神奇的字牌作物，赤裸裸的求包养哦，瞧那水汪汪的眼神，快包养它吧。", "type": 1, "vipDesc": "求包养啊求包养！"},
			{"asset_id": {"m1": "8832", "m2": "8833", "m3": "8834", "s": "8831"}, "cropGrow": "39600,82800,126000,172800,219600,2000000000", "gossip": "", "harvestNum": 4, "id": 584, "insect": "0,0,0,0,0,0|57,-5,89,-26,99,11|48,-8,77,-48,117,-4|0,0,0,0,0,0", "isFlower": 1, "isVIP": 1, "name": "花好月圆", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "中秋佳节 花好月圆"},
			{"asset_id": {"m1": "10356", "m2": "10357", "m3": "10358", "s": "10359"}, "cropGrow": "28800,61200,86400,111600,129600,2000000000", "gossip": "", "harvestNum": 5, "id": 585, "insect": "0,0,0,0,0,0|48,-14,79,-34,110,-20|60,-21,62,-48,141,-50|0,0,0,0,0,0", "isRed": 2, "name": "年费黄钻", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：至尊的年费黄钻， 尊贵身份的代表，从空间闪耀到农场，一路温暖照亮，伴随您的成长", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10360", "m2": "10361", "m3": "10362", "s": "10363"}, "cropGrow": "28800,57600,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 586, "insect": "0,0,0,0,0,0|95,-17,86,6,110,-1|77,-13,87,-31,110,-1|0,0,0,0,0,0", "isRed": 2, "name": "向日葵精灵花束", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：作为太阳之子的向日葵，是开朗与阳光的化身，花束的聚集伴随着精灵的光环，带给你最强的正面力量。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10227", "m2": "10228", "m3": "10229", "s": "10226"}, "cropGrow": "36000,72000,111600,151200,194400,2000000000", "gossip": "", "harvestNum": 7, "id": 600, "insect": "0,0,0,0,0,0|77,5,95,5,84,23|85,19,78,-10,100,9|0,0,0,0,0,0", "isRed": 2, "name": "园艺南瓜", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10171", "m2": "10172", "m3": "10173", "s": "10170"}, "cropGrow": "36000,72000,111600,151200,194400,2000000000", "gossip": "", "harvestNum": 7, "id": 601, "insect": "0,0,0,0,0,0|74,14,88,-25,102,1|106,1,72,10,72,-29|0,0,0,0,0,0", "isRed": 2, "name": "园艺海星", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10179", "m2": "10180", "m3": "10181", "s": "10178"}, "cropGrow": "14400,32400,50400,79200,111600,2000000000", "gossip": "", "harvestNum": 1, "id": 602, "insect": "0,0,0,0,0,0|82,-7,95,-33,87,17|95,4,86,-26,97,-47|0,0,0,0,0,0", "isLock": 1, "name": "大大光棍节", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10590", "m2": "10591", "m3": "10592", "s": "10593"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 603, "insect": "0,0,0,0,0,0|84,-11,72,-36,83,16|87,-16,83,-48,104,-29|0,0,0,0,0,0", "isLock": 1, "name": "魔幻能量球", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：魔幻能量球是历经万年上古空间魔法淬炼而成的天然圣物，它是魔幻大陆上所有勇士们毕生锲而不舍的最高追求。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10346", "m2": "10347", "m3": "10348", "s": "10349"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 604, "insect": "0,0,0,0,0,0|82,15,83,-14,110,-1|82,16,83,-30,110,-1|0,0,0,0,0,0", "isLock": 1, "name": "魔法神花", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：有代表着神圣魔力的结晶，浓缩了日月精华，盛开出奇异炫目的卡片形状的花朵。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10379", "m2": "10380", "m3": "10381", "s": "10382"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 605, "insect": "0,0,0,0,0,0|83,6,104,3,80,28|70,-9,112,8,89,20|0,0,0,0,0,0", "name": "男生符", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：爱神丘比特的弓箭袋", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10383", "m2": "10384", "m3": "10385", "s": "10386"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 606, "insect": "0,0,0,0,0,0|88,23,86,8,110,-1|82,-2,99,16,110,-1|0,0,0,0,0,0", "name": "女生符", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：女神维纳爱美的镜子。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10387", "m2": "10388", "m3": "10389", "s": "10390"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 607, "insect": "0,0,0,0,0,0|85,25,87,10,110,-1|84,-11,93,22,110,-1|0,0,0,0,0,0", "name": "新郎钻戒", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：新郎结婚戒指，象征着火红的太阳。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10391", "m2": "10392", "m3": "10393", "s": "10394"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 608, "insect": "0,0,0,0,0,0|85,25,73,0,110,-1|75,-21,93,22,110,-1|0,0,0,0,0,0", "name": "新娘钻戒", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：新娘结婚戒指，象征着皎洁的月亮。\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10371", "m2": "10372", "m3": "10373", "s": "10374"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 609, "insect": "0,0,0,0,0,0|86,16,100,-34,110,-1|90,19,83,-48,108,-14|0,0,0,0,0,0", "name": "GG心钥匙", "nextText": "幼枝,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：GG心匙，打开爱人的心房。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10375", "m2": "10376", "m3": "10377", "s": "10378"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 610, "insect": "0,0,0,0,0,0|72,-8,79,-33,80,28|70,-9,75,-38,89,20|0,0,0,0,0,0", "name": "MM心锁", "nextText": "幼枝,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：MM心锁，等待爱的人来打开心房。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10627", "m2": "10628", "m3": "10629", "s": "10630"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 611, "insect": "0,0,0,0,0,0|61,12,78,-21,102,1|48,-14,83,-39,100,-15|0,0,0,0,0,0", "name": "相思豆项链", "nextText": "种子,发芽,小叶子,大叶子,初熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：相思豆，种出长相思。 \n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "10649", "m1": "10650", "m2": "10651", "m3": "10652", "m4": "10653", "s": "10654"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 612, "insect": "0,0,0,0,0,0|70,5,89,13,110,11|66,-15,91,11,107,7|0,0,0,0,0,0", "name": "丘比特之箭", "nextText": "种子,发芽,小叶子,大叶子,初熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：爱神丘比特之箭，射中你爱的人", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "10655", "m1": "10656", "m2": "10657", "m3": "10658", "m4": "10659", "s": "10660"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 613, "insect": "0,0,0,0,0,0|70,5,89,13,110,11|66,-15,91,11,107,7|0,0,0,0,0,0", "name": "QGG公仔", "nextText": "种子,发芽,小叶子,大叶子,初熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：帅气的QGG给你带来最美的爱情。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "10643", "m1": "10644", "m2": "10645", "m3": "10646", "m4": "10647", "s": "10648"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 614, "insect": "0,0,0,0,0,0|70,5,89,13,110,11|66,-15,91,11,107,7|0,0,0,0,0,0", "name": "QMM公仔", "nextText": "种子,发芽,小叶子,大叶子,初熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：可爱的QMM送上最美的爱情祝福", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "10667", "m1": "10668", "m2": "10669", "m3": "10670", "m4": "10671", "s": "10672"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 615, "insect": "0,0,0,0,0,0|70,5,85,-7,98,-13|66,-15,91,11,107,7|0,0,0,0,0,0", "name": "贝壳", "nextText": "种子,发芽,小叶子,大叶子,初熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：爱的贝壳种出最美的珍珠", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "10637", "m1": "10638", "m2": "10639", "m3": "10640", "m4": "10641", "s": "10642"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 616, "insect": "0,0,0,0,0,0|70,5,89,13,110,11|66,-15,91,11,107,7|0,0,0,0,0,0", "name": "同心花种子", "nextText": "种子,发芽,小叶子,大叶子,初熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：同心花，永远开在一起。\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "10621", "m1": "10622", "m2": "10623", "m3": "10624", "m4": "10625", "s": "10626"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 617, "insect": "0,0,0,0,0,0|70,5,89,13,110,11|66,-15,91,11,107,7|0,0,0,0,0,0", "name": "情歌", "nextText": "种子,发芽,小叶子,大叶子,初熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：凑出最美爱情音符的种子。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "10661", "m1": "10662", "m2": "10663", "m3": "10664", "m4": "10665", "s": "10666"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 618, "insect": "0,0,0,0,0,0|70,5,85,-7,98,-13|66,-15,91,11,107,7|0,0,0,0,0,0", "name": "丘比特玫瑰", "nextText": "种子,发芽,小叶子,大叶子,初熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：爱神丘比特种下的玫瑰，充满爱意", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10707", "m2": "10708", "m3": "10709", "s": "10710"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 619, "insect": "0,0,0,0,0,0|95,-6,89,20,87,1|91,7,81,-24,95,-11|0,0,0,0,0,0", "isLock": 1, "name": "七雄轩辕果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：七雄轩辕果是远古轩辕帝时代流传下来的神奇植物。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10973", "m2": "10974", "m3": "10975", "m4": "10976", "s": "10977"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 2, "id": 620, "insect": "0,0,0,0,0,0|82,2,89,-16,100,2|76,-22,83,-48,101,-4|0,0,0,0,0,0", "isLock": 1, "name": "飞车宝石树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：飞车宝石树是庆祝飞车四周年庆典的专属种子，飞车四载辉煌、真情服务感谢有你。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11099", "m1": "11100", "m2": "11101", "m3": "11102", "m4": "11103", "s": "11104"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 2, "id": 621, "insect": "0,0,0,0,0,0|91,-14,86,5,97,0|94,0,90,-33,70,-1|0,0,0,0,0,0", "isLock": 1, "name": "九仙逍遥果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：九仙逍遥果是九仙的仙境神果，传说只有在云雾缭绕的静谧圣地才会开花结果，也只有历经磨难的修真勇士才能得到这神奇的果实。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "10691", "m1": "10692", "m2": "10693", "m3": "10694", "m4": "10695", "s": "10696"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 622, "insect": "0,0,0,0,0,0|75,-24,88,-50,101,-5|70,-36,87,-61,106,-45|0,0,0,0,0,0", "name": "礼花树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "10685", "m1": "10686", "m2": "10687", "m3": "10688", "m4": "10689", "s": "10690"}, "cropGrow": "28800,54000,79200,108000,136800,2000000000", "gossip": "", "harvestNum": 3, "id": 623, "insect": "0,0,0,0,0,0|67,-4,72,-38,110,-1|63,-27,83,-48,116,-5|0,0,0,0,0,0", "name": "彩灯树", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "10697", "m1": "10698", "m2": "10699", "m3": "10700", "m4": "10701", "s": "10702"}, "cropGrow": "21600,39600,54000,68400,93600,2000000000", "gossip": "", "harvestNum": 4, "id": 624, "insect": "0,0,0,0,0,0|75,-24,88,-50,101,-5|78,-52,87,-61,94,-11|0,0,0,0,0,0", "name": "红袜树 ", "nextText": "种子,发芽,小叶子,大叶子,初熟,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11087", "m1": "11088", "m2": "11089", "m3": "11090", "m4": "11091", "s": "11092"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000","gossip": "", "harvestNum": 2, "id": 625, "insect": "0,0,0,0,0,0|91,-14,86,5,97,0|94,0,90,-33,110,-1|0,0,0,0,0,0", "isLock": 1, "name": "TNT欢乐果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：TNT欢乐果是TNT世界中所有武器和道具的精华集合而成！", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11093", "m1": "11094", "m2": "11095", "m3": "11096", "m4": "11097", "s": "11098"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 2, "id": 626, "insect": "0,0,0,0,0,0|91,-14,86,5,97,0|94,0,90,-33,70,-4|0,0,0,0,0,0", "isLock": 1, "name": "寻仙雪凝果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：广寒宫里的广寒仙子用月光的精华培育了寻仙雪凝果，该果实有驻颜的功效、颇受人间修道者的青睐，种植寻仙雪凝果，", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11218", "m1": "11219", "m2": "11220", "m3": "11221", "m4": "11222", "s": "11223"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 627, "insect": "0,0,0,0,0,0|70,11,88,18,104,9|61,-5,86,16,110,-1|0,0,0,0,0,0", "isFlower": 1, "isYouji": 1, "name": "红宝石情花", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：具有魔法的情花，可孕育出桃心红宝石，带给您爱情美满一辈子！活动期间可在“丘比特”处以9倍价格卖出99倍数（含99）的果实。\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "10223", "m2": "10224", "m3": "10225", "s": "10222"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 2, "id": 700, "insect": "0,0,0,0,0,0|77,5,101,0,92,20|85,19,82,-9,100,9|0,0,0,0,0,0", "name": "红钻璀璨", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11119", "m1": "11120", "m2": "11121", "m3": "11122", "m4": "11123", "s": "11124"}, "cropGrow": "21600,43200,72000,100800,136800,2000000000", "gossip": "", "harvestNum": 4, "id": 702, "insect": "0,0,0,0,0,0|88,-1,79,-24,98,-9|82,-12,86,-56,75,-26|0,0,0,0,0,0", "isYouji": 1, "name": "扶桑神树", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11691", "m1": "11692", "m2": "11693", "m3": "11694", "m4": "11695", "s": "11696"}, "cropGrow": "28800,61200,97200,133200,172800,2000000000", "gossip": "", "harvestNum": 6, "id": 703, "insect": "0,0,0,0,0,0|94,-15,80,13,95,-1|76,4,87,-16,98,6|0,0,0,0,0,0", "isYouji": 1, "name": "小仙花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11194", "m1": "11195", "m2": "11196", "m3": "11197", "m4": "11198", "s": "11199"}, "cropGrow": "25200,54000,82800,115200,151200,2000000000", "gossip": "只能对我施有机肥哦！", "harvestNum": 5, "id": 704, "insect": "0,0,0,0,0,0|78,3,90,-23,91,-7|62,-12,83,-48,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "天女花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：天女花是木兰科玉兰属的名贵花木。在我国东北辽宁及朝鲜、日本均有分布。\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11673", "m1": "11674", "m2": "11675", "m3": "11676", "m4": "11677", "s": "11678"}, "cropGrow": "28800,61200,93600,126000,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 706, "insect": "0,0,0,0,0,0|89,3,80,13,95,-1|76,4,87,-16,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "生灵骨草", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11200", "m1": "11201", "m2": "11202", "m3": "11203", "m4": "11204", "s": "11205"}, "cropGrow": "28800,57600,90000,122400,162000,2000000000", "gossip": "只能对我施有机肥哦！", "harvestNum": 6, "id": 707, "insect": "0,0,0,0,0,0|70,-4,90,-23,85,-16|62,-12,83,-48,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "蟠桃树", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：蟠桃是一种枝桠蟠曲的异种桃树，所产果实蟠桃有“仙果”、“寿桃”之美称。\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11131", "m1": "11132", "m2": "11133", "m3": "11134", "m4": "11135", "s": "11136"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 708, "insect": "0,0,0,0,0,0|74,1,93,-19,72,-12|83,-3,70,-60,84,-22|0,0,0,0,0,0", "isYouji": 1, "name": "聚宝盆", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11113", "m1": "11114", "m2": "11115", "m3": "11116", "m4": "11117", "s": "11118"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 4, "id": 709, "insect": "0,0,0,0,0,0|78,0,79,-24,98,-9|89,-1,97,-41,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "福袋树", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11107", "m1": "11108", "m2": "11109", "m3": "11110", "m4": "11111", "s": "11112"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 710, "insect": "0,0,0,0,0,0|78,0,79,-24,110,-1|68,-14,83,-48,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "富贵有鱼", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11241", "m1": "11242", "m2": "11243", "m3": "11244", "m4": "11245", "s": "11246"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 711, "insect": "0,0,0,0,0,0|79,-2,84,-16,100,0|78,11,84,-22,110,-1|0,0,0,0,0,0", "name": "麻将一万", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11391", "m1": "11392", "m2": "11393", "m3": "11394", "m4": "11395", "s": "11396"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 712, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将二万", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11301", "m1": "11302", "m2": "11303", "m3": "11304", "m4": "11305", "s": "11306"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 713, "insect": "0,0,0,0,0,0|73,10,93,9,83,-11|81,14,89,-23,80,-20|0,0,0,0,0,0", "name": "麻将三万", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11283", "m1": "11284", "m2": "11285", "m3": "11286", "m4": "11287", "s": "11288"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 714, "insect": "0,0,0,0,0,0|73,10,93,9,110,-1|81,14,89,-23,110,-1|0,0,0,0,0,0", "name": "麻将四万", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11265", "m1": "11266", "m2": "11267", "m3": "11268", "m4": "11269", "s": "11270"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 715, "insect": "0,0,0,0,0,0|79,-2,84,-16,76,20|78,11,84,-22,110,-1|0,0,0,0,0,0", "name": "麻将五万", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11343", "m1": "11344", "m2": "11345", "m3": "11346", "m4": "11347", "s": "11348"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 716, "insect": "0,0,0,0,0,0|73,10,91,3,83,-11|81,14,89,-23,80,-20|0,0,0,0,0,0", "name": "麻将六万", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11319", "m1": "11320", "m2": "11321", "m3": "11322", "m4": "11323", "s": "11324"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 717, "insect": "0,0,0,0,0,0|73,10,91,3,83,-11|81,14,89,-23,80,-20|0,0,0,0,0,0", "name": "麻将七万", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11427", "m1": "11428", "m2": "11429", "m3": "11430", "m4": "11431", "s": "11432"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 718, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将八万", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11361", "m1": "11362", "m2": "11363", "m3": "11364", "m4": "11365", "s": "11366"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 719, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将九万", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11247", "m1": "11248", "m2": "11249", "m3": "11250", "m4": "11251", "s": "11252"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 720, "insect": "0,0,0,0,0,0|79,-2,84,-16,76,20|78,11,84,-22,110,-1|0,0,0,0,0,0", "name": "麻将一筒", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11397", "m1": "11398", "m2": "11399", "m3": "11400", "m4": "11401", "s": "11402"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 721, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将二筒", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11307", "m1": "11308", "m2": "11309", "m3": "11310", "m4": "11311", "s": "11312"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 722, "insect": "0,0,0,0,0,0|73,10,93,9,83,-11|81,14,89,-23,80,-20|0,0,0,0,0,0", "name": "麻将三筒", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11289", "m1": "11290", "m2": "11291", "m3": "11292", "m4": "11293", "s": "11294"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 723, "insect": "0,0,0,0,0,0|73,10,93,9,83,-11|81,14,89,-23,110,-1|0,0,0,0,0,0", "name": "麻将四筒", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11271", "m1": "11272", "m2": "11273", "m3": "11274", "m4": "11275", "s": "11276"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 724, "insect": "0,0,0,0,0,0|90,9,84,-16,76,20|78,11,84,-22,107,0|0,0,0,0,0,0", "name": "麻将五筒", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11349", "m1": "11350", "m2": "11351", "m3": "11352", "m4": "11353", "s": "11354"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 725, "insect": "0,0,0,0,0,0|73,10,91,3,83,-11|81,14,89,-23,80,-20|0,0,0,0,0,0", "name": "麻将六筒", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11325", "m1": "11326", "m2": "11327", "m3": "11328", "m4": "11329", "s": "11330"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 726, "insect": "0,0,0,0,0,0|73,10,91,3,83,-11|81,14,89,-23,80,-20|0,0,0,0,0,0", "name": "麻将七筒", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11433", "m1": "11434", "m2": "11435", "m3": "11436", "m4": "11437", "s": "11438"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 727, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将八筒", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11367", "m1": "11368", "m2": "11369", "m3": "11370", "m4": "11371", "s": "11372"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 728, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将九筒", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11253", "m1": "11254", "m2": "11255", "m3": "11256", "m4": "11257", "s": "11258"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 729, "insect": "0,0,0,0,0,0|79,-2,84,-16,76,20|78,11,84,-22,110,-1|0,0,0,0,0,0", "name": "麻将一条", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11403", "m1": "11404", "m2": "11405", "m3": "11406", "m4": "11407", "s": "11408"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 730, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将二条", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11313", "m1": "11314", "m2": "11315", "m3": "11316", "m4": "11317", "s": "11318"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 731, "insect": "0,0,0,0,0,0|73,10,91,3,83,-11|81,14,89,-23,80,-20|0,0,0,0,0,0", "name": "麻将三条", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11295", "m1": "11296", "m2": "11297", "m3": "11298", "m4": "11299", "s": "11300"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 732, "insect": "0,0,0,0,0,0|73,10,93,9,83,-11|81,14,89,-23,74,-16|0,0,0,0,0,0", "name": "麻将四条", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11277", "m1": "11278", "m2": "11279", "m3": "11280", "m4": "11281", "s": "11282"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 733, "insect": "0,0,0,0,0,0|67,4,84,-16,76,20|78,11,84,-22,107,0|0,0,0,0,0,0", "name": "麻将五条", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11355", "m1": "11356", "m2": "11357", "m3": "11358", "m4": "11359", "s": "11360"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 734, "insect": "0,0,0,0,0,0|73,10,91,3,83,-11|81,14,89,-23,80,-20|0,0,0,0,0,0", "name": "麻将六条", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11331", "m1": "11332", "m2": "11333", "m3": "11334", "m4": "11335", "s": "11336"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 735, "insect": "0,0,0,0,0,0|73,10,91,3,83,-11|81,14,89,-23,80,-20|0,0,0,0,0,0", "name": "麻将七条", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11439", "m1": "11440", "m2": "11441", "m3": "11442", "m4": "11443", "s": "11444"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 736, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,77,25,91,-30|0,0,0,0,0,0", "name": "麻将八条", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11373", "m1": "11374", "m2": "11375", "m3": "11376", "m4": "11377", "s": "11378"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 737, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将九条", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11379", "m1": "11380", "m2": "11381", "m3": "11382", "m4": "11383", "s": "11384"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 738, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将红中", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11385", "m1": "11386", "m2": "11387", "m3": "11388", "m4": "11389", "s": "11390"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 739, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将发财", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11421", "m1": "11422", "m2": "11423", "m3": "11424", "m4": "11425", "s": "11426"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 740, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将白板", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11409", "m1": "11410", "m2": "11411", "m3": "11412", "m4": "11413", "s": "11414"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 741, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将东风", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11337", "m1": "11338", "m2": "11339", "m3": "11340", "m4": "11341", "s": "11342"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 742, "insect": "0,0,0,0,0,0|73,10,91,3,83,-11|81,14,89,-23,80,-20|0,0,0,0,0,0", "name": "麻将南风", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11259", "m1": "11260", "m2": "11261", "m3": "11262", "m4": "11263", "s": "11264"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 743, "insect": "0,0,0,0,0,0|73,16,87,-9,109,15|71,5,86,-38,99,7|0,0,0,0,0,0", "name": "麻将西风", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11415", "m1": "11416", "m2": "11417", "m3": "11418", "m4": "11419", "s": "11420"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 744, "insect": "0,0,0,0,0,0|73,10,86,-22,83,-11|81,14,89,-23,91,-30|0,0,0,0,0,0", "name": "麻将北风", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11957", "m1": "11958", "m2": "11959", "m3": "11960", "m4": "11961", "s": "11962"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 745, "insect": "0,0,0,0,0,0|90,-4,85,17,89,24|85,-18,91,24,101,19|0,0,0,0,0,0", "isLock": 1, "name": "乐斗斗神塔", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：传说中各路斗神曾聚集了大量乐斗斗神塔果，该果实具有斩妖除魔之功效！", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11679", "m1": "11680", "m2": "11681", "m3": "11682", "m4": "11683", "s": "11684"}, "cropGrow": "28800,64800,97200,129600,169200,2000000000", "gossip": "", "harvestNum": 6, "id": 746, "insect": "0,0,0,0,0,0|89,3,80,13,95,-1|76,4,87,-16,98,6|0,0,0,0,0,0", "isYouji": 1, "name": "富贵丽花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11685", "m1": "11686", "m2": "11687", "m3": "11688", "m4": "11689", "s": "11690"}, "cropGrow": "28800,57600,93600,129600,169200,2000000000", "gossip": "", "harvestNum": 6, "id": 747, "insect": "0,0,0,0,0,0|94,-15,80,13,95,-1|76,4,87,-16,98,6|0,0,0,0,0,0", "isYouji": 1, "name": "柔紫千红", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "11737", "m2": "11738", "m3": "11739", "s": "11736"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 4, "id": 749, "insect": "0,0,0,0,0,0|71,14,92,-18,107,15|56,-20,83,-48,107,-24|0,0,0,0,0,0", "isYouji": 1, "name": "环保卫士", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11654", "m1": "11655", "m2": "11656", "m3": "11657", "m4": "11658", "s": "11659"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 750, "insect": "0,0,0,0,0,0|89,3,90,34,94,-26|74,22,92,-32,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "象棋绿士", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11642", "m1": "11643", "m2": "11644", "m3": "11645", "m4": "11646", "s": "11647"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 751, "insect": "0,0,0,0,0,0|89,3,90,-17,110,-1|90,6,92,-32,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "象棋绿卒", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11648", "m1": "11649", "m2": "11650", "m3": "11651", "m4": "11652", "s": "11653"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 752, "insect": "0,0,0,0,0,0|89,3,90,-17,94,-26|74,22,92,-32,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "象棋红仕", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11636", "m1": "11637", "m2": "11638", "m3": "11639", "m4": "11640", "s": "11641"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 753, "insect": "0,0,0,0,0,0|89,3,90,-17,110,-1|90,6,92,-32,110,-1|0,0,0,0,0,0", "isYouji": 1, "name": "象棋红兵", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m1": "11732", "m2": "11733", "m3": "11734", "s": "11735"}, "cropGrow": "14400,28800,46800,64800,86400,2000000000", "gossip": "", "harvestNum": 1, "id": 754, "insect": "0,0,0,0,0,0|71,-13,92,-40,110,-8|56,-24,83,-48,107,-24|0,0,0,0,0,0", "isYouji": 1, "name": "绿色环保树", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11903", "m1": "11904", "m2": "11905", "m3": "11906", "m4": "11907", "s": "11908"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 757, "insect": "0,0,0,0,0,0|87,-10,85,17,81,2|65,17,90,9,82,-5|0,0,0,0,0,0", "isYouji": 1, "name": "埃菲尔铁塔 ", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11845", "m1": "11846", "m2": "11847", "m3": "11848", "m4": "11849", "s": "11850"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 758, "insect": "0,0,0,0,0,0|82,-9,89,9,84,-36|80,7,80,-47,82,-29|0,0,0,0,0,0", "isYouji": 1, "name": "纽约自由女神像", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11909", "m1": "11910", "m2": "11911", "m3": "11912", "m4": "11913", "s": "11914"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 759, "insect": "0,0,0,0,0,0|87,-10,85,17,81,2|65,17,90,9,82,-5|0,0,0,0,0,0", "isYouji": 1, "name": "悉尼歌剧院", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11915", "m1": "11916", "m2": "11917", "m3": "11918", "m4": "11955", "s": "11956"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 760, "insect": "0,0,0,0,0,0|87,-10,85,17,81,2|88,-55,98,24,82,-5|0,0,0,0,0,0", "isYouji": 1, "name": "上海东方明珠", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11833", "m1": "11834", "m2": "11835", "m3": "11836", "m4": "11837", "s": "11838"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 761, "insect": "0,0,0,0,0,0|82,-9,89,9,98,2|80,7,88,-25,94,-6|0,0,0,0,0,0", "isYouji": 1, "name": "北京天坛", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11919", "m1": "11920", "m2": "11921", "m3": "11922", "m4": "11923", "s": "11924"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 762, "insect": "0,0,0,0,0,0|87,-10,85,17,109,4|85,-18,91,24,82,-5|0,0,0,0,0,0", "isYouji": 1, "name": "埃及狮身人面像", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11925", "m1": "11926", "m2": "11927", "m3": "11928", "m4": "11929", "s": "11930"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 763, "insect": "0,0,0,0,0,0|87,-10,85,17,109,4|85,-18,91,24,60,9|0,0,0,0,0,0", "isYouji": 1, "name": "克里姆林宫", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11931", "m1": "11932", "m2": "11933", "m3": "11934", "m4": "11935", "s": "11936"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 764, "insect": "0,0,0,0,0,0|68,20,85,17,109,4|85,-18,91,24,60,9|0,0,0,0,0,0", "isYouji": 1, "name": "罗马竞技场", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11937", "m1": "11938", "m2": "11939", "m3": "11940", "m4": "11941", "s": "11942"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 765, "insect": "0,0,0,0,0,0|90,-4,85,17,94,-20|85,-18,91,24,74,30|0,0,0,0,0,0", "isYouji": 1, "name": "香港中银大厦", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11839", "m1": "11840", "m2": "11841", "m3": "11842", "m4": "11843", "s": "11844"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 766, "insect": "0,0,0,0,0,0|82,-9,89,9,94,-20|80,7,88,-25,86,-12|0,0,0,0,0,0", "isYouji": 1, "name": "迪拜帆船酒店", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11943", "m1": "11944", "m2": "11945", "m3": "11946", "m4": "11947", "s": "11948"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 767, "insect": "0,0,0,0,0,0|90,-4,85,17,77,25|85,-18,91,24,74,30|0,0,0,0,0,0", "isYouji": 1, "name": "伦敦大笨钟", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11949", "m1": "11950", "m2": "11951", "m3": "11952", "m4": "11953", "s": "11954"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 768, "insect": "0,0,0,0,0,0|90,-4,85,17,78,26|85,-18,91,24,74,26|0,0,0,0,0,0", "isYouji": 1, "name": "台北101大厦", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "11963", "m1": "11964", "m2": "11965", "m3": "11966", "m4": "11967", "s": "11968"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 4, "id": 769, "insect": "0,0,0,0,0,0|89,-17,84,0,93,-5|72,-1,83,-48,89,-7|0,0,0,0,0,0", "isYouji": 1, "name": "愚人节小丑", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12023", "m1": "12024", "m2": "12025", "m3": "12026", "m4": "12027", "s": "12028"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 770, "insect": "0,0,0,0,0,0|84,-5,94,4,110,-1|85,6,85,-12,100,1|0,0,0,0,0,0", "isYouji": 1, "name": "华夏白羽果", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12036", "m1": "12037", "m2": "12038", "m3": "12039", "m4": "12040", "s": "12041"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 771, "insect": "0,0,0,0,0,0|69,-6,84,-1,110,-1|72,-22,83,-48,95,-25|0,0,0,0,0,0", "isYouji": 1, "name": "洛阳红", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12043", "m1": "12044", "m2": "12045", "m3": "12046", "m4": "12047", "s": "12048"}, "cropGrow": "7200,14400,25200,39600,54000,2000000000", "gossip": "", "harvestNum": 1, "id": 772, "insect": "0,0,0,0,0,0|48,-14,86,-39,89,-20|70,-14,83,-48,110,-1|0,0,0,0,0,0", "name": "自由幻想果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：王母娘娘的九千年蟠桃落入人间的桃源村，化身为自由幻想果，该果可以使人自由自在、幻想成真，被凡间百姓称之为圣果。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12176", "m1": "12177", "m2": "12178", "m3": "12179", "m4": "12180", "s": "12181"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 773, "insect": "0,0,0,0,0,0|80,-16,68,6,87,6|93,-1,84,-18,77,14|0,0,0,0,0,0", "isYouji": 1, "name": "闹铃宝宝", "nextText": "种子,发芽,初成,成型,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12134", "m1": "12135", "m2": "12136", "m3": "12137", "m4": "12138", "s": "12139"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 4, "id": 774, "insect": "0,0,0,0,0,0|80,-16,84,2,82,23|65,-5,84,-18,71,27|0,0,0,0,0,0", "isYouji": 1, "name": "象棋绿象", "nextText": "种子,发芽,初成,成型,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12158", "m1": "12159", "m2": "12160", "m3": "12161", "m4": "12162", "s": "12163"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 775, "insect": "0,0,0,0,0,0|80,-16,67,21,98,-27|65,-5,84,-18,71,27|0,0,0,0,0,0", "isYouji": 1, "name": "象棋绿将", "nextText": "种子,发芽,初成,成型,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12182", "m1": "12183", "m2": "12184", "m3": "12185", "m4": "12186", "s": "12187"}, "cropGrow": "28800,61200,93600,126000,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 776, "insect": "0,0,0,0,0,0|80,-16,68,6,87,6|93,-1,84,-18,77,14|0,0,0,0,0,0", "isYouji": 1, "name": "象棋绿炮", "nextText": "种子,发芽,初成,成型,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12140", "m1": "12141", "m2": "12142", "m3": "12143", "m4": "12144", "s": "12145"}, "cropGrow": "28800,57600,90000,122400,162000,2000000000", "gossip": "", "harvestNum": 5, "id": 778, "insect": "0,0,0,0,0,0|80,-16,67,21,82,23|65,-5,84,-18,71,27|0,0,0,0,0,0", "isYouji": 1, "name": "象棋绿马", "nextText": "种子,发芽,初成,成型,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12128", "m1": "12129", "m2": "12130", "m3": "12131", "m4": "12132", "s": "12133"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 4, "id": 779, "insect": "0,0,0,0,0,0|80,-16,84,2,82,23|65,-5,84,-18,71,27|0,0,0,0,0,0", "isYouji": 1, "name": "象棋红相", "nextText": "种子,发芽,初成,成型,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12152", "m1": "12153", "m2": "12154", "m3": "12155", "m4": "12156", "s": "12157"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 780, "insect": "0,0,0,0,0,0|80,-16,67,21,98,-27|65,-5,84,-18,71,27|0,0,0,0,0,0", "isYouji": 1, "name": "象棋红帅 ", "nextText": "种子,发芽,初成,成型,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12146", "m1": "12147", "m2": "12148", "m3": "12149", "m4": "12150", "s": "12151"}, "cropGrow": "28800,61200,93600,126000,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 781, "insect": "0,0,0,0,0,0|80,-16,67,21,98,-27|65,-5,84,-18,71,27|0,0,0,0,0,0", "isYouji": 1, "name": "象棋红炮", "nextText": "种子,发芽,初成,成型,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12395", "m1": "12396", "m2": "12397", "m3": "12398", "m4": "12399", "s": "12400"}, "cropGrow": "28800,57600,90000,122400,162000,2000000000", "gossip": "", "harvestNum": 5, "id": 783, "insect": "0,0,0,0,0,0|85,6,83,-9,91,-22|75,30,83,-17,84,10|0,0,0,0,0,0", "isYouji": 1, "name": "象棋红马", "nextText": "种子,发芽,初成,成型,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12100", "m1": "12101", "m2": "12102", "m3": "12103", "m4": "12104", "s": "12105"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 2, "id": 790, "insect": "0,0,0,0,0,0|63,-34,83,-48,86,-30|73,-36,83,-48,107,-41|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "BMW奥运悦之树", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12258", "m1": "12259", "m2": "12260", "m3": "12261", "m4": "12262", "s": "12263"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 4, "id": 791, "insect": "0,0,0,0,0,0|94,-17,75,-20,80,-9|78,-49,66,-32,93,-35|0,0,0,0,0,0", "isYouji": 1, "name": "劳动节", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13160", "m1": "13161", "m2": "13162", "m3": "13163", "m4": "13164", "s": "13165"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 792, "insect": "0,0,0,0,0,0|87,-18,83,-48,88,-37|93,-73,83,-48,91,-66|0,0,0,0,0,0", "isLock": 1, "name": "夜店之王花", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：夜王之花是女神留下的神秘果，可以唤醒沉睡的力量，守护我们的世界。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12668", "m1": "12669", "m2": "12670", "m3": "12671", "m4": "12672", "s": "12673"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 793, "insect": "0,0,0,0,0,0|101,-6,79,0,95,5|59,0,87,4,77,-32|0,0,0,0,0,0", "isYouji": 1, "name": "橙茉莉", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12680", "m1": "12681", "m2": "12682", "m3": "12683", "m4": "12684", "s": "12685"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 794, "insect": "0,0,0,0,0,0|101,-6,79,0,95,5|59,0,87,4,77,-32|0,0,0,0,0,0", "isYouji": 1, "name": "红茉莉", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12686", "m1": "12687", "m2": "12688", "m3": "12689", "m4": "12690", "s": "12691"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 795, "insect": "0,0,0,0,0,0|101,-6,79,0,95,5|59,0,87,4,77,-32|0,0,0,0,0,0", "isYouji": 1, "name": "绿茉莉", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12674", "m1": "12675", "m2": "12676", "m3": "12677", "m4": "12678", "s": "12679"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 796, "insect": "0,0,0,0,0,0|101,-6,79,0,95,5|59,0,87,4,77,-32|0,0,0,0,0,0", "isYouji": 1, "name": "蓝茉莉", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12698", "m1": "12699", "m2": "12700", "m3": "12701", "m4": "12702", "s": "12703"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 797, "insect": "0,0,0,0,0,0|101,-6,79,0,82,-14|59,0,87,9,77,-32|0,0,0,0,0,0", "isYouji": 1, "name": "青茉莉", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12692", "m1": "12693", "m2": "12694", "m3": "12695", "m4": "12696", "s": "12697"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 798, "insect": "0,0,0,0,0,0|101,-6,79,0,82,-14|59,0,87,4,77,-32|0,0,0,0,0,0", "isYouji": 1, "name": "黄茉莉", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12710", "m1": "12711", "m2": "12712", "m3": "12713", "m4": "12714", "s": "12715"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 799, "insect": "0,0,0,0,0,0|90,10,92,-35,89,-25|101,-36,83,-48,91,7|0,0,0,0,0,0", "isYouji": 1, "name": "高考状元果", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12704", "m1": "12705", "m2": "12706", "m3": "12707", "m4": "12708", "s": "12709"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 800, "insect": "0,0,0,0,0,0|88,-30,85,10,82,-14|92,-43,87,9,77,-32|0,0,0,0,0,0", "isLock": 1, "name": "仙境女神果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：仙境世界守护女神留下的神秘果，可以唤醒沉睡的力量，守护我们的仙境世界。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12783", "m1": "12784", "m2": "12785", "m3": "12786", "m4": "12787", "s": "12788"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 801, "insect": "0,0,0,0,0,0|94,11,87,20,85,27|84,21,83,-48,89,16|0,0,0,0,0,0", "isYouji": 1, "name": "黄色棒棒糖", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12777", "m1": "12778", "m2": "12779", "m3": "12780", "m4": "12781", "s": "12782"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "gossip": "", "harvestNum": 4, "id": 802, "insect": "0,0,0,0,0,0|94,11,87,20,85,27|68,-17,83,-48,89,16|0,0,0,0,0,0", "isYouji": 1, "name": "红色棒棒糖", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12789", "m1": "12790", "m2": "12791", "m3": "12792", "m4": "12793", "s": "12794"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "gossip": "", "harvestNum": 3, "id": 803, "insect": "0,0,0,0,0,0|94,11,81,12,85,27|84,21,83,-48,89,16|0,0,0,0,0,0", "isYouji": 1, "name": "蓝色棒棒糖", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12795", "m1": "12796", "m2": "12797", "m3": "12798", "m4": "12799", "s": "12800"}, "cropGrow": "28800,54000,79200,108000,136800,2000000000", "gossip": "", "harvestNum": 3, "id": 804, "insect": "0,0,0,0,0,0|88,-29,79,-19,85,27|84,21,83,-48,89,16|0,0,0,0,0,0", "isYouji": 1, "name": "棉花糖", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12559", "m1": "12560", "m2": "12561", "m3": "12562", "m4": "12563", "s": "12564"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 805, "insect": "0,0,0,0,0,0|86,21,83,-48,81,-41|87,5,83,-48,97,-4|0,0,0,0,0,0", "isYouji": 1, "name": "善意海棠", "nextText": "种子,发芽,小叶,初成,成型,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12571", "m1": "12572", "m2": "12573", "m3": "12574", "m4": "12575", "s": "12576"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 806, "insect": "0,0,0,0,0,0|86,21,83,-48,81,-41|87,5,83,-48,77,26|0,0,0,0,0,0", "isYouji": 1, "name": "绚丽葵花", "nextText": "种子,发芽,小叶,初成,成型,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12577", "m1": "12578", "m2": "12579", "m3": "12580", "m4": "12581", "s": "12582"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 807, "insect": "0,0,0,0,0,0|86,21,78,-25,81,-41|87,5,83,-48,77,26|0,0,0,0,0,0", "isYouji": 1, "name": "温顺紫鸢", "nextText": "种子,发芽,小叶,初成,成型,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12553", "m1": "12554", "m2": "12555", "m3": "12556", "m4": "12557", "s": "12558"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 808, "insect": "0,0,0,0,0,0|86,21,83,-48,91,1|87,5,83,-48,97,-4|0,0,0,0,0,0", "isYouji": 1, "name": "娴雅水仙", "nextText": "种子,发芽,小叶,初成,成型,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "12565", "m1": "12566", "m2": "12567", "m3": "12568", "m4": "12569", "s": "12570"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 809, "insect": "0,0,0,0,0,0|86,21,83,-48,81,-41|87,5,83,-48,77,26|0,0,0,0,0,0", "isYouji": 1, "name": "高贵牡丹", "nextText": "种子,发芽,小叶,初成,成型,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13306", "m1": "13307", "m2": "13308", "m3": "13309", "s": "13310"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 813, "insect": "0,0,0,0,0,0|73,6,110,-6,70,28|60,0,90,-33,101,1|0,0,0,0,0,0", "isYouji": 1, "name": "香粽龙舟", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13300", "m1": "13301", "m2": "13302", "m3": "13303", "m4": "13304", "s": "13305"}, "cropGrow": "28800,54000,79200,108000,136800,2000000000", "gossip": "", "harvestNum": 3, "id": 814, "insect": "0,0,0,0,0,0|73,6,83,2,87,18|60,0,90,-33,101,1|0,0,0,0,0,0", "isYouji": 1, "name": "雄黄艾草", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13294", "m1": "13295", "m2": "13296", "m3": "13297", "m4": "13298", "s": "13299"}, "cropGrow": "10800,21600,39600,61200,86400,2000000000", "gossip": "", "harvestNum": 1, "id": 815, "insect": "0,0,0,0,0,0|73,6,83,2,95,-3|60,0,72,-48,101,1|0,0,0,0,0,0", "isYouji": 1, "name": "粽香果", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13479", "m1": "13480", "m2": "13481", "m3": "13482", "m4": "13483", "s": "13484"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 816, "insect": "0,0,0,0,0,0|83,1,90,-9,91,-23|95,-21,83,-48,75,-12|0,0,0,0,0,0", "isYouji": 1, "name": "热血白鹰", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13485", "m1": "13486", "m2": "13487", "m3": "13488", "m4": "13489", "s": "13490"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 817, "insect": "0,0,0,0,0,0|83,1,76,-29,91,-23|95,-21,83,-48,75,-12|0,0,0,0,0,0", "isYouji": 1, "name": "神话", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13491", "m1": "13492", "m2": "13493", "m3": "13494", "m4": "13495", "s": "13496"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 818, "insect": "0,0,0,0,0,0|83,1,76,-29,91,-23|95,-21,83,-48,75,-12|0,0,0,0,0,0", "isYouji": 1, "name": "沙皇大帝", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13497", "m1": "13498", "m2": "13499", "m3": "13500", "m4": "13501", "s": "13502"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 819, "insect": "0,0,0,0,0,0|83,1,88,-21,83,-10|95,-21,83,-48,75,-12|0,0,0,0,0,0", "isYouji": 1, "name": "东欧铁骑", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13503", "m1": "13504", "m2": "13505", "m3": "13506", "m4": "13507", "s": "13508"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 820, "insect": "0,0,0,0,0,0|81,12,88,-21,83,-10|63,-31,83,-48,75,-12|0,0,0,0,0,0", "isYouji": 1, "name": "橙衣军团", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13509", "m1": "13510", "m2": "13511", "m3": "13512", "m4": "13513", "s": "13514"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 821, "insect": "0,0,0,0,0,0|81,12,88,-21,83,-10|63,-31,83,-48,75,-12|0,0,0,0,0,0", "isYouji": 1, "name": "童话", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13515", "m1": "13516", "m2": "13517", "m3": "13518", "m4": "13519", "s": "13520"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 822, "insect": "0,0,0,0,0,0|81,12,88,-21,83,-10|63,-31,83,-48,75,-12|0,0,0,0,0,0", "isYouji": 1, "name": "德意志战车", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13521", "m1": "13522", "m2": "13523", "m3": "13524", "m4": "13525", "s": "13526"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 823, "insect": "0,0,0,0,0,0|86,-34,88,-21,75,-18|63,-31,83,-48,75,-12|0,0,0,0,0,0", "isYouji": 1, "name": "冒险家", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13527", "m1": "13528", "m2": "13529", "m3": "13530", "m4": "13531", "s": "13532"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 824, "insect": "0,0,0,0,0,0|86,-34,88,20,75,-18|63,-31,83,-48,84,17|0,0,0,0,0,0", "isYouji": 1, "name": "狂舞斗牛", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13533", "m1": "13534", "m2": "13535", "m3": "13536", "m4": "13537", "s": "13538"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 825, "insect": "0,0,0,0,0,0|86,-34,88,20,75,-18|75,-31,83,-48,84,17|0,0,0,0,0,0", "isYouji": 1, "name": "蓝衣军团 ", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13539", "m1": "13540", "m2": "13541", "m3": "13542", "m4": "13543", "s": "13544"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 826, "insect": "0,0,0,0,0,0|86,-34,88,20,75,-18|75,-31,83,-48,84,17|0,0,0,0,0,0", "isYouji": 1, "name": "欧洲绿魔", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13545", "m1": "13546", "m2": "13547", "m3": "13548", "m4": "13549", "s": "13550"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 827, "insect": "0,0,0,0,0,0|92,14,88,20,97,-2|75,-31,83,-48,84,17|0,0,0,0,0,0", "isYouji": 1, "name": "狂想曲", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13551", "m1": "13552", "m2": "13553", "m3": "13554", "m4": "13555", "s": "13556"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 828, "insect": "0,0,0,0,0,0|78,2,81,11,77,-16|75,-31,83,-48,84,17|0,0,0,0,0,0", "isYouji": 1, "name": "核弹头", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13557", "m1": "13558", "m2": "13559", "m3": "13560", "m4": "13561", "s": "13562"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 829, "insect": "0,0,0,0,0,0|86,-25,86,-38,77,-16|75,-31,83,-48,88,-13|0,0,0,0,0,0", "isYouji": 1, "name": "北欧海盗", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13563", "m1": "13564", "m2": "13565", "m3": "13566", "m4": "13567", "s": "13568"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 830, "insect": "0,0,0,0,0,0|86,-25,86,-38,77,-16|75,-31,83,-48,88,-13|0,0,0,0,0,0", "isYouji": 1, "name": "高卢雄鸡", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13569", "m1": "13570", "m2": "13571", "m3": "13572", "m4": "13573", "s": "13574"}, "cropGrow": "7200,18000,36000,54000,86400,2000000000", "gossip": "", "harvestNum": 3, "id": 831, "insect": "0,0,0,0,0,0|84,-2,84,14,80,5|75,-31,83,-48,88,-13|0,0,0,0,0,0", "isYouji": 1, "name": "三狮军团", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13650", "m1": "13651", "m2": "13652", "m3": "13653", "m4": "13654", "s": "13655"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 832, "insect": "0,0,0,0,0,0|80,19,98,14,66,31|81,20,93,12,59,33|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "银色圆型球场", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13638", "m1": "13639", "m2": "13640", "m3": "13641", "m4": "13642", "s": "13643"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 833, "insect": "0,0,0,0,0,0|80,19,98,14,101,1|81,20,93,12,110,-1|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "琥珀竞技场", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13644", "m1": "13645", "m2": "13646", "m3": "13647", "m4": "13648", "s": "13649"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 834, "insect": "0,0,0,0,0,0|80,19,98,14,66,31|81,20,93,12,59,33|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "市政球场", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13632", "m1": "13633", "m2": "13634", "m3": "13635", "m4": "13636", "s": "13637"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 6, "id": 835, "insect": "0,0,0,0,0,0|80,19,98,14,101,1|81,20,93,12,110,-1|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "豪华专用球场", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13247", "m1": "13248", "m2": "13249", "m3": "13250", "m4": "13251", "s": "13252"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 848, "insect": "0,0,0,0,0,0|80,8,83,-8,84,3|74,5,81,-22,86,-2|0,0,0,0,0,0", "name": "三国军团花", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13277", "m1": "13278", "m2": "13279", "m3": "13280", "m4": "13281", "s": "13282"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 849, "insect": "0,0,0,0,0,0|82,-5,80,3,83,5|75,-15,85,-29,81,2|0,0,0,0,0,0", "name": "三国枭姬弓", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "13283", "m1": "13284", "m2": "13285", "m3": "13286", "m4": "13287", "s": "13288"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 850, "insect": "0,0,0,0,0,0|82,-5,80,3,73,17|75,-15,85,-29,81,2|0,0,0,0,0,0", "name": "三国奉先戟", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27027", "m1": "27028", "m2": "27029", "m3": "27030", "m4": "27025", "s": "27026"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 851, "insect": "0,0,0,0,0,0|68,9,91,-9,93,18|67,14,87,-23,104,13|0,0,0,0,0,0", "lv": 52, "name": "火炬盛开", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27199", "m1": "27200", "m2": "27201", "m3": "27202", "m4": "27203", "s": "27204"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 852, "insect": "0,0,0,0,0,0|79,24,88,4,87,11|55,-14,80,-17,102,-1|0,0,0,0,0,0", "lv": 52, "name": "金牌之辉", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 0, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27211", "m1": "27212", "m2": "27213", "m3": "27214", "m4": "27215", "s": "27216"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 853, "insect": "0,0,0,0,0,0|79,24,88,4,87,11|80,1,80,-17,102,-1|0,0,0,0,0,0", "lv": 52, "name": "银牌之耀", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 0, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27205", "m1": "27206", "m2": "27207", "m3": "27208", "m4": "27209", "s": "27210"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 854, "insect": "0,0,0,0,0,0|79,24,88,4,87,11|55,-14,80,-17,102,-1|0,0,0,0,0,0", "lv": 52, "name": "铜牌之光", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 0, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20409", "m1": "20410", "m2": "20411", "m3": "20412", "m4": "20413", "s": "20414"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 855, "insect": "0,0,0,0,0,0|63,-3,85,11,88,22|59,-17,85,17,110,-1|0,0,0,0,0,0", "isLock": 1, "name": "宝石琥珀花", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：宝石琥珀花是生长在宝石王国彩虹泉的圣灵之花，会结出圣灵的宝石琥珀，让人们拥有圣灵守卫者的力量，守护宝石王国。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26851", "m1": "26852", "m2": "26853", "m3": "26854", "m4": "26855", "s": "26856"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 2, "id": 856, "insect": "0,0,0,0,0,0|91,-11,89,-22,110,-1|77,-26,83,-48,110,-1|0,0,0,0,0,0", "isLock": 1, "name": "金牌雪梨", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：娃哈哈蜂蜜冰糖雪梨汁。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20525", "m1": "20526", "m2": "20527", "m3": "20528", "m4": "20529", "s": "20530"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 857, "insect": "0,0,0,0,0,0|82,9,81,18,88,0|64,0,92,-44,77,-15|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "橙色冰凌花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：7月14日-7月15日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20537", "m1": "20538", "m2": "20539", "m3": "20540", "m4": "20541", "s": "20542"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 858, "insect": "0,0,0,0,0,0|84,6,91,-7,83,19|66,-28,87,-44,74,0|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "红色冰凌花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：7月21日-7月22日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20561", "m1": "20562", "m2": "20563", "m3": "20564", "m4": "20565", "s": "20566"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 859, "insect": "0,0,0,0,0,0|93,20,80,-12,73,2|66,-28,81,8,88,-40|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "蓝色冰凌花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：8月4日-8月5日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20549", "m1": "20550", "m2": "20551", "m3": "20552", "m4": "20553", "s": "20554"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 861, "insect": "0,0,0,0,0,0|85,8,80,-12,74,11|66,-28,77,5,88,-40|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "黄色冰凌花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：7月28日-7月29日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20519", "m1": "20520", "m2": "20521", "m3": "20522", "m4": "20523", "s": "20524"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 862, "insect": "0,0,0,0,0,0|68,-13,83,-48,76,-30|67,-35,83,-48,90,-29|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "橙色天缘树", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：7月14日-7月15日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20531", "m1": "20532", "m2": "20533", "m3": "20534", "m4": "20535", "s": "20536"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 863, "insect": "0,0,0,0,0,0|90,-27,69,-30,95,-40|71,-35,92,-44,66,-57|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "红色天缘树", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：7月21日-7月22日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20555", "m1": "20556", "m2": "20557", "m3": "20558", "m4": "20559", "s": "20560"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 864, "insect": "0,0,0,0,0,0|90,-31,80,-12,72,-34|66,-28,96,-47,88,-40|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "蓝色天缘树", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：8月4日-8月5日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20567", "m1": "20568", "m2": "20569", "m3": "20570", "m4": "20571", "s": "20572"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 865, "insect": "0,0,0,0,0,0|77,-27,89,-33,69,-17|66,-28,90,-31,88,-40|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "青色天缘树", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：8月11日-8月12日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20543", "m1": "20544", "m2": "20545", "m3": "20546", "m4": "20547", "s": "20548"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 866, "insect": "0,0,0,0,0,0|84,-31,80,-12,69,-29|66,-28,87,-44,80,-39|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "黄色天缘树", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：7月28日-7月29日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20573", "m1": "20574", "m2": "20575", "m3": "20576", "m4": "20577", "s": "20578"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 871, "insect": "0,0,0,0,0,0|92,-4,89,-33,78,2|77,-12,90,-31,88,-40|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "黄色孔雀草", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士：8月11日-8月12日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20585", "m1": "20586", "m2": "20587", "m3": "20588", "m4": "20589", "s": "20590"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 883, "insect": "0,0,0,0,0,0|92,-4,87,-15,78,2|77,-12,82,8,88,-40|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "小红花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士:8月18日-8月19日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "20579", "m1": "20580", "m2": "20581", "m3": "20582", "m4": "20583", "s": "20584"}, "cropGrow": "7200,14400,28800,46800,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 884, "insect": "0,0,0,0,0,0|92,-4,87,-15,78,2|77,-12,82,8,88,-40|0,0,0,0,0,0", "isLock": 1, "isYouji": 1, "name": "小蓝花", "nextText": "种子,发芽,小叶,大叶,花蕾,开花", "offsetX": 0, "offsetY": 0, "tip": "小贴士:8月18日-8月19日可通过活动界面“刷倍数”刷取产物卖出倍数，倍数限活动期间当次卖出有效。<TEXTFORMAT LEADING=\"2\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#0000FF\" LETTERSPACING=\"0\" KERNING=\"0\"><A HREF=\"event: http://user.qzone.qq.com/1006666001/blog/1334113707\" TARGET=\"_blank\"><B><U>点击查看活动详情</U></B></A></FONT></TEXTFORMAT>", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26817", "m1": "26818", "m2": "26819", "m3": "26820", "m4": "26821", "s": "26822"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 887, "insect": "0,0,0,0,0,0|93,-20,91,4,96,-7|75,-21,96,-24,95,-5|0,0,0,0,0,0", "isLock": 1, "name": "趣", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27426", "m1": "27427", "m2": "27428", "m3": "27429", "m4": "27430", "s": "27431"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "eo": 33, "gossip": "", "harvestNum": 3, "id": 888, "insect": "0,0,0,0,0,0|60,-3,84,-39,110,-1|58,-9,83,-47,110,-1|0,0,0,0,0,0", "lv": 50, "name": "热恋圣代杯", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27432", "m1": "27433", "m2": "27434", "m3": "27435", "m4": "27436", "s": "27437"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "eo": 33, "gossip": "", "harvestNum": 3, "id": 889, "insect": "0,0,0,0,0,0|72,1,88,-24,96,20|70,2,98,-31,89,-8|0,0,0,0,0,0", "lv": 50, "name": "绝恋甜筒卷", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27438", "m1": "27439", "m2": "27440", "m3": "27441", "m4": "27442", "s": "27443"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "eo": 33, "gossip": "", "harvestNum": 3, "id": 890, "insect": "0,0,0,0,0,0|56,2,75,-18,96,20|57,3,98,-31,97,6|0,0,0,0,0,0", "lv": 50, "name": "妙恋甜心脆", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26891", "m1": "26892", "m2": "26893", "m3": "26894", "m4": "26895", "s": "26896"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 894, "insect": "0,0,0,0,0,0|69,21,87,8,92,23|74,4,81,-19,96,3|0,0,0,0,0,0", "lv": 52, "name": "QQ帆船", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26897", "m1": "26898", "m2": "26899", "m3": "26900", "m4": "26901", "s": "26902"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 895, "insect": "0,0,0,0,0,0|69,21,87,8,114,13|74,4,81,-19,71,28|0,0,0,0,0,0", "lv": 52, "name": "QQ击剑", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26903", "m1": "26904", "m2": "26905", "m3": "26906", "m4": "26907", "s": "26908"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 896, "insect": "0,0,0,0,0,0|69,21,87,8,114,13|74,4,81,-19,71,28|0,0,0,0,0,0", "lv": 52, "name": "QQ举重", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26909", "m1": "26910", "m2": "26911", "m3": "26912", "m4": "26913", "s": "26914"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 897, "insect": "0,0,0,0,0,0|69,21,87,8,92,-1|96,31,81,-19,71,28|0,0,0,0,0,0", "lv": 52, "name": "QQ篮球", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26915", "m1": "26916", "m2": "26917", "m3": "26918", "m4": "26919", "s": "26920"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 898, "insect": "0,0,0,0,0,0|69,21,87,8,76,36|96,31,81,-19,71,28|0,0,0,0,0,0", "lv": 52, "name": "QQ排球", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26921", "m1": "26922", "m2": "26923", "m3": "26924", "m4": "26925", "s": "26926"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 899, "insect": "0,0,0,0,0,0|69,21,87,8,76,36|96,31,81,-19,71,28|0,0,0,0,0,0", "lv": 52, "name": "QQ皮划艇", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26927", "m1": "26928", "m2": "26929", "m3": "26930", "m4": "26931", "s": "26932"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 900, "insect": "0,0,0,0,0,0|69,21,87,8,76,36|96,31,81,-19,71,28|0,0,0,0,0,0", "lv": 52, "name": "QQ乒乓球", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26933", "m1": "26934", "m2": "26935", "m3": "26936", "m4": "26937", "s": "26938"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 901, "insect": "0,0,0,0,0,0|69,21,87,8,76,36|100,-24,81,-19,71,28|0,0,0,0,0,0", "lv": 52, "name": "QQ曲棍球", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26939", "m1": "26940", "m2": "26941", "m3": "26942", "m4": "26943", "s": "26944"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 902, "insect": "0,0,0,0,0,0|69,21,87,8,76,36|100,-24,72,38,71,28|0,0,0,0,0,0", "lv": 52, "name": "QQ拳击", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26945", "m1": "26946", "m2": "26947", "m3": "26948", "m4": "26949", "s": "26950"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 903, "insect": "0,0,0,0,0,0|69,21,87,8,76,36|100,-24,72,38,119,18|0,0,0,0,0,0", "lv": 52, "name": "QQ柔道", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26951", "m1": "26952", "m2": "26953", "m3": "26954", "m4": "26955", "s": "26956"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 904, "insect": "0,0,0,0,0,0|94,-5,87,8,76,36|100,-24,72,38,51,23|0,0,0,0,0,0", "lv": 52, "name": "QQ射击", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26957", "m1": "26958", "m2": "26959", "m3": "26960", "m4": "26961", "s": "26962"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 905, "insect": "0,0,0,0,0,0|94,-5,87,8,76,36|100,-24,72,38,87,5|0,0,0,0,0,0", "lv": 52, "name": "QQ射箭", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26963", "m1": "26964", "m2": "26965", "m3": "26966", "m4": "26967", "s": "26968"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 906, "insect": "0,0,0,0,0,0|94,-5,87,8,76,36|100,-24,72,38,112,17|0,0,0,0,0,0", "lv": 52, "name": "QQ摔跤", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26969", "m1": "26970", "m2": "26971", "m3": "26972", "m4": "26973", "s": "26974"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 907, "insect": "0,0,0,0,0,0|94,-5,87,8,76,36|100,-24,72,38,85,-27|0,0,0,0,0,0", "lv": 52, "name": "QQ水球", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26975", "m1": "26976", "m2": "26977", "m3": "26978", "m4": "26979", "s": "26980"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 908, "insect": "0,0,0,0,0,0|94,-5,87,8,76,36|100,-24,72,38,85,-27|0,0,0,0,0,0", "lv": 52, "name": "QQ跆拳道", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26981", "m1": "26982", "m2": "26983", "m3": "26984", "m4": "26985", "s": "26986"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 909, "insect": "0,0,0,0,0,0|94,-5,87,8,76,36|100,-24,72,38,81,-1|0,0,0,0,0,0", "lv": 52, "name": "QQ体操", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26987", "m1": "26988", "m2": "26989", "m3": "26990", "m4": "26991", "s": "26992"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 910, "insect": "0,0,0,0,0,0|94,-5,87,8,78,-6|100,-24,72,38,81,-1|0,0,0,0,0,0", "lv": 52, "name": "QQ田径", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26993", "m1": "26994", "m2": "26995", "m3": "26996", "m4": "26997", "s": "26998"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 911, "insect": "0,0,0,0,0,0|94,-5,87,8,78,-6|100,-24,86,-10,81,-1|0,0,0,0,0,0", "lv": 52, "name": "QQ跳水", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "26999", "m1": "27000", "m2": "27001", "m3": "27002", "m4": "27003", "s": "27004"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 912, "insect": "0,0,0,0,0,0|94,-5,114,10,78,-6|100,-24,86,-10,81,-1|0,0,0,0,0,0", "lv": 52, "name": "QQ网球", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27005", "m1": "27006", "m2": "27007", "m3": "27008", "m4": "27009", "s": "27010"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 913, "insect": "0,0,0,0,0,0|94,-5,114,10,78,-6|100,-24,79,18,81,-1|0,0,0,0,0,0", "lv": 52, "name": "QQ游泳", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27011", "m1": "27012", "m2": "27013", "m3": "27014", "m4": "27015", "s": "27016"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 914, "insect": "0,0,0,0,0,0|94,-5,114,10,78,-6|100,-24,79,18,81,-1|0,0,0,0,0,0", "lv": 52, "name": "QQ羽毛球", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27017", "m1": "27018", "m2": "27019", "m3": "27020", "m4": "27021", "s": "27022"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 46, "gossip": "", "harvestNum": 3, "id": 915, "insect": "0,0,0,0,0,0|94,-5,114,10,78,-6|100,-24,79,18,81,-1|0,0,0,0,0,0", "lv": 52, "name": "QQ足球", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27444", "m1": "27445", "m2": "27446", "m3": "27447", "m4": "27448", "s": "27449"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "eo": 33, "gossip": "", "harvestNum": 3, "id": 916, "insect": "0,0,0,0,0,0|66,-4,71,-45,93,-14|69,-8,76,-43,107,12|0,0,0,0,0,0", "lv": 50, "name": "冰棍如雪", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27450", "m1": "27451", "m2": "27452", "m3": "27453", "m4": "27454", "s": "27455"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "eo": 33, "gossip": "", "harvestNum": 3, "id": 917, "insect": "0,0,0,0,0,0|83,18,67,-25,111,-3|75,14,65,-28,106,4|0,0,0,0,0,0", "lv": 50, "name": "奶油雪人", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27456", "m1": "27457", "m2": "27458", "m3": "27459", "m4": "27460", "s": "27461"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "eo": 33, "gossip": "", "harvestNum": 3, "id": 918, "insect": "0,0,0,0,0,0|83,18,61,-13,107,4|75,14,52,-25,106,4|0,0,0,0,0,0", "lv": 50, "name": "果冰一夏", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27462", "m1": "27463", "m2": "27464", "m3": "27465", "m4": "27466", "s": "27467"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "eo": 33, "gossip": "", "harvestNum": 3, "id": 919, "insect": "0,0,0,0,0,0|99,18,61,-13,97,-16|69,2,70,-27,106,4|0,0,0,0,0,0", "lv": 50, "name": "欢乐脆皮", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27468", "m1": "27469", "m2": "27470", "m3": "27471", "m4": "27472", "s": "27473"}, "cropGrow": "21600,43200,68400,93600,126000,2000000000", "eo": 33, "gossip": "", "harvestNum": 3, "id": 920, "insect": "0,0,0,0,0,0|99,18,73,-7,97,-16|75,9,70,-27,106,4|0,0,0,0,0,0", "lv": 50, "name": "冰淇淋盛宴", "nextText": "种子,发芽,初成,成形,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27250", "m1": "27251", "m2": "27252", "m3": "27253", "m4": "27254", "s": "27255"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "eo": 28, "gossip": "", "harvestNum": 2, "id": 921, "insect": "0,0,0,0,0,0|93,-26,97,-37,89,-21|89,-34,93,-54,84,-46|0,0,0,0,0,0", "isLock": 1, "lv": 12, "name": "弑神之魂", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 0, "sr": 0, "tip": "小贴士：弑神之魂本是轩辕传奇游戏内最强大的伙伴。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27244", "m1": "27245", "m2": "27246", "m3": "27247", "m4": "27248", "s": "27249"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "eo": 23, "gossip": "", "harvestNum": 2, "id": 922, "insect": "0,0,0,0,0,0|88,15,97,-37,89,-21|83,17,93,-54,89,10|0,0,0,0,0,0", "isLock": 1, "lv": 10, "name": "天使之翼", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 0, "sr": 0, "tip": "小贴士：天使之翼种子中蕴藏着无穷无尽的力量，当它绽放时，如同圣洁的天使羽翼，释放出的光芒给予人们爱的勇气，它拥有净化世界的能力。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27232", "m1": "27233", "m2": "27234", "m3": "27235", "m4": "27236", "s": "27237"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "eo": 29, "gossip": "", "harvestNum": 2, "id": 923, "insect": "0,0,0,0,0,0|78,21,86,5,96,17|82,12,89,-23,104,8|0,0,0,0,0,0", "isLock": 1, "lv": 12, "name": "九界无忧果", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 0, "sr": 0, "tip": "小贴士：九界无忧果是酒界老祖隐居山林后取用仙界甘露孕育的奇花异果，生长在厚土界最圣洁的沐芳谷中。可以让人忘记凡世间恩怨情仇，自身修为突破紫府，对灵胎后天凝结大有裨益。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27238", "m1": "27239", "m2": "27240", "m3": "27241", "m4": "27242", "s": "27243"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "eo": 28, "gossip": "", "harvestNum": 2, "id": 924, "insect": "0,0,0,0,0,0|78,21,86,5,97,-13|82,12,89,-23,84,-8|0,0,0,0,0,0", "isLock": 1, "lv": 13, "name": "炫音花", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 0, "sr": 0, "tip": "小贴士：炫音花是生长在炫舞小镇的神奇花朵，此花可以吸收小镇音符，成熟后结出炫音果实，食得果实的人们，可以唱出天籁之音！", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27921", "m1": "27922", "m2": "27923", "m3": "27924", "m4": "27925", "s": "27926"}, "cropGrow": "7200,14400,25200,36000,36000,2000000000", "eo": 55, "gossip": "", "harvestNum": 2, "id": 933, "insect": "0,0,0,0,0,0|76,3,95,-1,108,-17|65,0,83,-22,104,1|0,0,0,0,0,0", "isRestaurant": 2, "isYouji": 1, "lv": 0, "name": "有机白萝卜", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：亲，这是超市特供种子。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27927", "m1": "27928", "m2": "27929", "m3": "27930", "m4": "27931", "s": "27932"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "eo": 123, "gossip": "", "harvestNum": 3, "id": 934, "insect": "0,0,0,0,0,0|76,3,71,-35,108,-11|45,-14,103,-64,120,-9|0,0,0,0,0,0", "isRestaurant": 2, "isYouji": 1, "lv": 0, "name": "有机苹果", "nextText": "幼枝,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：亲，这是超市特供种子。", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27939", "m1": "27940", "m2": "27941", "m3": "27942", "m4": "27943", "s": "27944"}, "cropGrow": "32400,64800,97200,133200,169200,2000000000", "eo": 31, "gossip": "", "harvestNum": 7, "id": 935, "insect": "0,0,0,0,0,0|64,-4,95,-24,110,-1|48,-14,83,-48,110,-1|0,0,0,0,0,0", "lv": 52, "name": "守护竹林", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：守护竹林，守护大熊猫。\r\n", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27842", "m1": "27843", "m2": "27844", "m3": "27845", "m4": "27846", "s": "27847"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 53, "gossip": "", "harvestNum": 4, "id": 936, "insect": "0,0,0,0,0,0|73,10,98,-27,98,12|70,-4,82,-35,111,-11|0,0,0,0,0,0", "lv": 60, "name": "茄老大", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27828", "m1": "27829", "m2": "27830", "m3": "27831", "m4": "27832", "s": "27833"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 53, "gossip": "", "harvestNum": 4, "id": 937, "insect": "0,0,0,0,0,0|89,24,92,-9,117,3|77,17,84,-5,106,13|0,0,0,0,0,0", "lv": 60, "name": "南瓜小弟", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27848", "m1": "27849", "m2": "27850", "m3": "27851", "m4": "27852", "s": "27853"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 53, "gossip": "", "harvestNum": 4, "id": 938, "insect": "0,0,0,0,0,0|80,17,90,-50,112,-7|70,-4,63,-49,110,-40|0,0,0,0,0,0", "lv": 60, "name": "玉米君", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27854", "m1": "27855", "m2": "27856", "m3": "27857", "m4": "27858", "s": "27859"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 53, "gossip": "", "harvestNum": 4, "id": 939, "insect": "0,0,0,0,0,0|85,21,76,-1,100,13|82,13,78,-22,93,-39|0,0,0,0,0,0", "lv": 60, "name": "胡富帅", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27872", "m1": "27873", "m2": "27874", "m3": "27875", "m4": "27876", "s": "27877"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 53, "gossip": "", "harvestNum": 4, "id": 940, "insect": "0,0,0,0,0,0|77,25,92,19,78,-5|74,23,97,18,101,-1|0,0,0,0,0,0", "lv": 60, "name": "土豆妹子", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27860", "m1": "27861", "m2": "27862", "m3": "27863", "m4": "27864", "s": "27865"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 53, "gossip": "", "harvestNum": 4, "id": 941, "insect": "0,0,0,0,0,0|89,27,85,14,106,16|86,29,75,2,99,15|0,0,0,0,0,0", "lv": 60, "name": "萌洋葱", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "27866", "m1": "27867", "m2": "27868", "m3": "27869", "m4": "27870", "s": "27871"}, "cropGrow": "21600,43200,61200,79200,104400,2000000000", "eo": 53, "gossip": "", "harvestNum": 4, "id": 942, "insect": "0,0,0,0,0,0|79,0,63,-16,106,3|85,28,72,-17,71,5|0,0,0,0,0,0", "lv": 60, "name": "番茄小子", "nextText": "种子,发芽,小叶,大叶,初熟,成熟", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "28107", "m1": "28108", "m2": "28109", "m3": "28110", "m4": "28111", "s": "28112"}, "cropGrow": "21600,43200,72000,100800,136800,2000000000", "eo": 53, "gossip": "", "harvestNum": 5, "id": 951, "insect": "0,0,0,0,0,0|83,23,88,-12,107,6|111,8,92,-18,69,10|0,0,0,0,0,0", "lv": 58, "name": "圆规", "nextText": "种子,发芽,小叶,大叶,开花,结果", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：圆规", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "28089", "m1": "28090", "m2": "28091", "m3": "28092", "m4": "28093", "s": "28094"}, "cropGrow": "21600,43200,72000,100800,136800,2000000000", "eo": 53, "gossip": "", "harvestNum": 5, "id": 952, "insect": "0,0,0,0,0,0|91,6,84,-18,78,20|66,-8,90,-26,91,20|0,0,0,0,0,0", "lv": 58, "name": "水果橡皮", "nextText": "种子,发芽,小叶,大叶,开花,结果", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "水果橡皮", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "28095", "m1": "28096", "m2": "28097", "m3": "28098", "m4": "28099", "s": "28100"}, "cropGrow": "21600,43200,72000,100800,136800,2000000000", "eo": 53, "gossip": "", "harvestNum": 5, "id": 953, "insect": "0,0,0,0,0,0|85,4,92,-28,78,20|83,1,93,-44,91,20|0,0,0,0,0,0", "lv": 58, "name": "彩色铅笔", "nextText": "种子,发芽,小叶,大叶,开花,结果", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：彩色铅笔", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "28101", "m1": "28102", "m2": "28103", "m3": "28104", "m4": "28105", "s": "28106"}, "cropGrow": "21600,43200,72000,100800,136800,2000000000", "eo": 53, "gossip": "", "harvestNum": 5, "id": 954, "insect": "0,0,0,0,0,0|83,23,88,-12,107,6|111,8,92,-18,69,10|0,0,0,0,0,0", "lv": 58, "name": "塑料卷尺", "nextText": "种子,发芽,小叶,大叶,开花,结果", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：塑料卷尺", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "28113", "m1": "28114", "m2": "28115", "m3": "28116", "m4": "28117", "s": "28118"}, "cropGrow": "21600,43200,72000,100800,136800,2000000000", "eo": 53, "gossip": "", "harvestNum": 5, "id": 955, "insect": "0,0,0,0,0,0|83,23,88,-12,107,6|111,8,92,-18,69,10|0,0,0,0,0,0", "lv": 58, "name": "削笔刀", "nextText": "种子,发芽,小叶,大叶,开花,结果", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "小贴士：削笔刀", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m0": "28083", "m1": "28084", "m2": "28085", "m3": "28086", "m4": "28087", "s": "28088"}, "cropGrow": "21600,43200,72000,100800,136800,2000000000", "eo": 53, "gossip": "", "harvestNum": 5, "id": 956, "insect": "0,0,0,0,0,0|91,6,84,-18,78,20|66,-8,90,-26,91,20|0,0,0,0,0,0", "lv": 58, "name": "两用橡皮擦", "nextText": "种子,发芽,小叶,大叶,开花,结果", "offsetX": 0, "offsetY": 0, "qd": 50, "sr": 0, "tip": "两用橡皮擦", "type": 1, "vipDesc": "黄钻简单描述"},
			{"asset_id": {"m": "4529"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2001, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "圣诞老人卡", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "product": "圣诞老人卡", "sale": 20, "show": 0, "tip": "小贴士：", "type": 11},
			{"asset_id": {"m": "4530"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2002, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "圣诞树卡", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "product": "圣诞树卡", "sale": 10, "show": 0, "tip": "小贴士：", "type": 11},
			{"asset_id": {"m": "4531"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2003, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "元旦卡", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "product": "元旦卡", "sale": 25, "show": 0, "tip": "小贴士：", "type": 11},
			{"asset_id": {"m": "4532"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2004, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "雪人卡", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "product": "雪人卡", "sale": 15, "show": 0, "tip": "小贴士：", "type": 11},
			{"asset_id": {"m": "4533"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2005, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "驯鹿卡", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "product": "驯鹿卡", "sale": 10, "show": 0, "tip": "小贴士：", "type": 11},
			{"asset_id": {"m": "4534"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2006, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "爆竹卡", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "product": "爆竹卡", "sale": 10, "show": 0, "tip": "小贴士：", "type": 11},
			{"asset_id": {"m": "4535"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2007, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "春节卡", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "product": "春节卡", "sale": 20, "show": 0, "tip": "小贴士：", "type": 11},
			{"asset_id": {"m": "4536"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2008, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "兔兔卡", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "product": "兔兔卡", "sale": 10, "show": 0, "tip": "小贴士：", "type": 11},
			{"asset_id": {"m1": "7479310", "m2": "7479311", "m3": "7479312", "s": "7479313"}, "cropGrow": "28800,54000,82800,115200,144000,2000000000", "gossip": "有佛教祝福之意，因此称之为“佛手”、“福寿”，深受人们喜爱。", "harvestNum": 7, "id": 206, "insect": "0,0,0,0,0,0|45,0,99,-10,129,-24|45,-5,99,-15,129,-29|0,0,0,0,0,0", "isFlower": "1", "isFood": "0", "isLock": "0", "isRed": "0", "isRestaurant": "0", "name": "佛手瓜", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：佛手瓜(英文：Chayote)属葫芦科，原产于墨西哥和印尼群岛，19世纪初由日本传入我国。佛手瓜形如两掌合十，有佛教祝福之意，因此称之为“佛手”、“福寿”，深受人们喜爱。佛手瓜清脆多汁，味美可口，营养价值较高，既可做菜，又能当水果生吃。", "type": 1},
			{"asset_id": {"m1": "7479317", "m2": "7479318", "m3": "7479319", "s": "7479320"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 1000, "insect": "0,0,0,0,0,0|73,1,93,-38,103,-2|62,-16,94,-65,101,-4|0,0,0,0,0,0", "isFlower": "0", "isFood": "0", "isLock": "0", "isRed": "0", "isRestaurant": "0", "name": "紅色農民果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：紅色農民果(英文：RedFruitFarmers)清脆多汁，味美可口，营养价值较高。", "type": 1},
			{"asset_id": {"m1": "7479322", "m2": "7479323", "m3": "7479324", "s": "7479325"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 1001, "insect": "0,0,0,0,0,0|73,1,93,-38,103,-2|62,-16,94,-65,101,-4|0,0,0,0,0,0", "isFlower": "0", "isFood": "0", "isLock": "0", "isRed": "0", "isRestaurant": "0", "name": "绿色农民果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：绿色农民果(英文：RedFruitFarmers)清脆多汁，味美可口，营养价值较高。", "type": 1},
			{"asset_id": {"m1": "7479327", "m2": "7479328", "m3": "7479329", "s": "7479330"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 1002, "insect": "0,0,0,0,0,0|73,1,93,-38,103,-2|62,-16,94,-65,101,-4|0,0,0,0,0,0", "isFlower": "0", "isFood": "0", "isLock": "0", "isRed": "0", "isRestaurant": "0", "name": "蓝色农民果", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：蓝色农民果(英文：RedFruitFarmers)清脆多汁，味美可口，营养价值较高。", "type": 1},
			{"asset_id": {"m1": "7479332", "m2": "7479333", "m3": "7479334", "s": "7479335"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 1003, "insect": "0,0,0,0,0,0|85,-22,107,-1,74,14|109,12,72,-26,55,0|0,0,0,0,0,0", "isMill": "0", "name": "玉潔冰星", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：冰爽之星（Ice Star）是为炎夏特供的一种特殊作物，可产出如星星般闪烁玉潔的冰块，种植玉潔冰星，可为农场打造酷玉潔之感。", "type": 1},
			{"asset_id": {"m1": "7479337", "m2": "7479338", "m3": "7479339", "s": "7479340"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 1004, "insect": "0,0,0,0,0,0|54,-2,75,-32,116,-3|54,-2,75,-32,116,-3|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "嘉兰百合", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：嘉兰百合(英文：LilyJialan)别名:嘉兰百合、火焰百合、蔓生百合，原产:我国云南南部、海南省及热带亚洲和非洲。我国云南西双版纳海拔1200m以下有野生零星分布。多年生攀援型草本花卉。", "type": 1},
			{"asset_id": {"m1": "7479342", "m2": "7479343", "m3": "7479344", "s": "7479345"},"cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 1005, "insect": "0,0,0,0,0,0|63,11,85,-26,113,12|63,11,85,-26,113,12|0,0,0,0,0,0", "isMill": "0", "name": "三色樱桃", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：xxxxxx", "type": 1},
			{"asset_id": {"m1": "7479347", "m2": "7479348", "m3": "7479349", "s": "7479350"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 1006, "insect": "0,0,0,0,0,0|72,13,84,-18,108,9|72,14,100,-47,109,10|0,0,0,0,0,0", "name": "黄金竖琴", "nextText": "幼枝,发芽,小叶子,大叶子,开花,结果,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "7479352", "m2": "7479353", "m3": "7479354", "s": "7479355"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "", "harvestNum": 9, "id": 1007, "insect": "0,0,0,0,0,0|58,-8,100,-26,109,16|49,-18,104,-42,121,13|0,0,0,0,0,0", "isFlower": 1, "isRed": 0, "name": "梦境花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：梦境花（英文：AliceTso），人生宛若梦境，花开花落几度春秋。", "type": 1},
			{"asset_id": {"m1": "7479357", "m2": "7479358", "m3": "7479359", "s": "7479360"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 1008, "insect": "0,0,0,0,0,0|60,-5,87,-27,112,-2|60,-5,87,-27,112,-2|0,0,0,0,0,0", "name": "红麦", "nextText": "种子,发芽,小叶子,大叶子,幼穗,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：红麦(英文：Redwheat)富含淀粉、蛋白质、脂肪、矿物质、钙、铁、硫胺素、核黄素、烟酸及维生素A等。经磨制加工后，即成为面粉，也称红麦粉。红麦的生长周期为：发芽、小叶子、大叶子、幼穗、成熟。", "type": 1},
			{"asset_id": {"m1": "7479362", "m2": "7479363", "m3": "7479364", "s": "7479365"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "", "harvestNum": 7, "id": 1009, "insect": "0,0,0,0,0,0|64,5,89,-48,107,2|65,-10,86,-56,123,2|0,0,0,0,0,0", "name": "聚果榕", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：聚果榕（英文：Racemosa）为桑科常绿大乔木，高达25—30米，胸径60—90厘米，果实数量众多，常常一串串，一嘟噜地挂满树干，且由生至熟，色彩各异，或红或黄，或青或绿，煞是惹人喜爱。果子成熟后香甜可口，令人垂涎欲滴。", "type": 1},
			{"asset_id": {"m1": "7479367", "m2": "7479368", "m3": "7479369", "s": "7479370"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 1010, "insect": "0,0,0,0,0,0|54,-5,79,-44,105,-23|54,-5,79,-44,105,-23|0,0,0,0,0,0", "name": "油橄榄树", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：油橄榄树(英文：Olive oil)是一种高大的常绿乔木，它所结的淡绿色果实含油脂35％，一般采摘下来后便立即进行加工榨磨成油，保持了天然的果香和新鲜的口感。", "type": 1},
			{"asset_id": {"m0": "7479371", "m1": "7479372", "m2": "7479373", "m3": "7479374", "s": "7479375"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "", "harvestNum": 9, "id": 1011, "insect": "0,0,0,0,0,0|58,-8,100,-26,109,16|49,-18,104,-42,121,13|0,0,0,0,0,0", "isFlower": 1, "isRed": 0, "name": "樱花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：樱花（英文：Cherry Blossom）樱花是一种植物，蔷薇科，落叶乔木，花于3月与叶同放或叶后开花。有热烈、纯洁、高尚，它是爱情与希望的象征。樱花在很多人的心目中是美丽、漂亮和浪漫的象征。", "type": 1},
			{"asset_id": {"m1": "7479377", "m2": "7479378", "m3": "7479379", "s": "7479380"}, "cropGrow": "21600,43200,68400,111600,158400,2000000000", "gossip": "", "harvestNum": 3, "id": 1012, "insect": "0,0,0,0,0,0|63,11,85,-26,113,12|63,11,85,-26,113,12|0,0,0,0,0,0", "isFlower": 0, "isRed": 0, "name": "咖啡豆", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：咖啡豆（英文：CoffeeBean）小而圆滚的深褐色咖啡豆、在研磨机中悄悄地散发出芬芳的清香，注入杯中呈现琥珀的美丽颜色，这就是一般人对于咖啡非常深刻的三个印象。", "type": 1},
			{"asset_id": {"m1": "7479382", "m2": "7479383", "m3": "7479384", "s": "7479385"}, "cropGrow": "43200,86400,129600,165600,205200,2000000000", "gossip": "", "harvestNum": 3, "id": 1013, "insect": "0,0,0,0,0,0|65,13,92,-11,120,-15|65,13,92,-11,120,-15|0,0,0,0,0,0", "isFlower": 0, "isRed": 0, "name": "红薯", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：红薯（学名：Ipomoea batatas），又名番薯、甘薯、山芋、地瓜、红苕、线苕、白薯、金薯、甜薯、朱薯、枕薯等。常见的多年生双子叶植物，草本，其蔓细长，茎匍匐地面。块根，无氧呼吸产生乳酸，皮色发白或发红，肉大多为黄白色，但也有紫色，除供食用外，还可以制糖和酿酒、制酒精。", "type": 1},
			{"asset_id": {"m1": "7479387", "m2": "7479388", "m3": "7479389", "s": "7479390"}, "cropGrow": "36000,68400,104400,140400,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 1014, "insect": "0,0,0,0,0,0|61,-26,99,-52,122,-21|58,-29,81,-43,123,-20|0,0,0,0,0,0", "name": "飞火流樱", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "7479392", "m2": "7479393", "m3": "7479394", "s": "7479395"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "我为城乡绿化遮光挡风雨鸟儿饲料", "harvestNum": 3, "id": 1015, "insect": "0,0,0,0,0,0|81,7,90,-43,109,-3|81,7,90,-43,109,-3|0,0,0,0,0,0", "name": "冬青", "nextText": "幼株,长枝,开花,小叶子,大叶子,结果,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：冬青(英文：Holly)国家重点保护植物; 庭院绿篱--冬青 ,冬青枝叶茂密，树形整齐，历来作为城乡绿化 和庭院观赏植物。这种植物的果实，具有在整个冬季都不会从树枝上掉下来的特性。当鸟儿没有饲料，饥 饿 的时候冬青树的果实正好可以维持生命。", "type": 1},
			{"asset_id": {"m1": "7479397", "m2": "7479398", "m3": "7479399", "s": "7479400"}, "cropGrow": "36000,68400,104400,140400,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 1016, "insect": "0,0,0,0,0,0|61,-26,99,-52,122,-21|58,-29,81,-43,123,-20|0,0,0,0,0,0", "name": "彩虹蘋果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m0": "7479401", "m1": "7479402", "m2": "7479403", "m3": "7479404", "s": "7479405"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 1017, "insect": "0,0,0,0,0,0|54,-5,79,-44,105,-23|54,-5,79,-44,105,-23|0,0,0,0,0,0", "name": "茶树", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：茶树（学名：tea plant），山茶科山茶属，为多年生常绿木本植物。茶树的叶子呈椭圆形，边缘有锯齿，叶间开五瓣白花，果实扁圆，呈三角形，果实开列后露出种子。春、秋季时可采茶树的嫩叶制茶，种子可以榨油，茶树材质细密，其木可用于雕刻。", "type": 1},
			{"asset_id": {"m1": "7479407", "m2": "7479408", "m3": "7479409", "s": "7479410"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "", "harvestNum": 7, "id": 1018, "insect": "0,0,0,0,0,0|49,-14,90,-57,124,-31|49,-14,90,-57,124,-31|0,0,0,0,0,0", "name": "百香果", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：百香果（英文：Passionfruit）百香果，俗称“巴西果”，原产于巴西，属西番莲科。因其果汁营养丰富，气味特别芳香，可散发出香蕉、菠萝、柠檬??、草莓、番桃、石榴等多种水果的浓郁香味而被举为“百香果”，又有“百香果”“果汁之王”之美称。", "type": 1},
			{"asset_id": {"m1": "7479417", "m2": "7479418", "m3": "7479419", "s": "7479420"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "", "harvestNum": 2, "id": 1020, "insect": "0,0,0,0,0,0|64,5,89,-48,107,2|65,-10,86,-56,123,2|0,0,0,0,0,0", "name": "覆盆子", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：覆盆子（英文：Rosaceae）作为大宗水果栽培!其化学成分如蛋白质、有机酸,及维生素C的含量均高于栽培果树桃、葡萄和草莓等.其果实可加工成果酱、果酒、果汁和蜜饯等,其中马林果酱和香莓酒都是著名的出口商品.而且其果实,茎,根都可入药!", "type": 1},
			{"asset_id": {"m1": "7479422", "m2": "7479423", "m3": "7479424", "s": "7479425"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 1021, "insect": "0,0,0,0,0,0|49,-14,90,-57,124,-31|49,-14,90,-57,124,-31|0,0,0,0,0,0", "name": "红加仑", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：红加仑（英文：Red gallons）红加仑是醋栗科的小型灌木，红醋栗的俗称，原产于欧洲。其成熟果实为红色透亮之小浆果，内富含维生素C、花青素。其红色品种的果实酸味较强，一般用来加工。白色品种的果实略甜，可生吃。其的果实可加工做果汁,果酱、果冻、果酒等。红加仑可扦插繁殖。。", "type": 1},
			{"asset_id": {"m1": "7479427", "m2": "7479428", "m3": "7479429", "s": "7479430"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 1022, "insect": "0,0,0,0,0,0|49,-14,90,-57,124,-31|49,-14,90,-57,124,-31|0,0,0,0,0,0", "name": "青稞", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：青稞（英文：Hullessbarley）是禾本科大麦属的一种禾谷类作物，因其内外颖壳分离，籽粒裸露，故又称裸大麦、元麦、米大麦。青稞在青藏高原具有悠久的栽培历史，距今已有3500年。是西藏四宝之首糌粑的主要原料。", "type": 1},
			{"asset_id": {"m1": "7479432", "m2": "7479433", "m3": "7479434", "s": "7479435"}, "cropGrow": "28800,54000,82800,115200,144000,2000000000", "gossip": "", "harvestNum": 3, "id": 1023, "insect": "0,0,0,0,0,0|35,-16,67,-66,134,-24|35,-16,67,-66,134,-24|0,0,0,0,0,0", "isMill": "0", "name": "桫椤", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：桫椤（英文：Alsophila spinulosa（Hook.） Tryon）是现存唯一的木本蕨类植物，极其珍贵，堪称国宝，被众多国家列为一级保护的濒危植物。桫椤是古老蕨类家族的后裔，可制作成工艺品和中药，还是一种很好的庭园观赏树木。", "type": 1},
			{"asset_id": {"m0": "7479436", "m1": "7479437", "m2": "7479438", "m3": "7479439", "s": "7479440"}, "cropGrow": "28800,54000,82800,115200,144000,2000000000", "gossip": "", "harvestNum": 3, "id": 1024, "insect": "0,0,0,0,0,0|35,-16,67,-66,134,-24|35,-16,67,-66,134,-24|0,0,0,0,0,0", "isMill": "0", "name": "竹", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：竹（英文：Bamboo）是常绿多年生植物，一般的竹子在春.冬.夏生笋，且有年份之分。茎有很多节，中间是空的，质地坚硬，种类很多。是种坚强的植物，有君子之称，一生中仅开一次花。", "type": 1},
			{"asset_id": {"m1": "7479406", "m2": "7479411", "m3": "7479412", "s": "7479413"}, "cropGrow": "21600,43200,64800,93600,122400,2000000000", "gossip": "", "harvestNum": 4, "id": 1019, "insect": "0,0,0,0,0,0|71,15,92,-7,113,11|64,-20,94,-47,102,-19|0,0,0,0,0,0", "isFlower": 0, "isMill": "0", "name": "北京棗樹", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：", "type": 1},
			{"asset_id": {"m1": "7479441", "m2": "7479442", "m3": "7479443", "s": "7479444"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 1025, "insect": "0,0,0,0,0,0|52,-6,61,-48,105,5|55,-13,69,-48,111,2|0,0,0,0,0,0", "isFlower": 1, "name": "桃花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：桃花（英文：PeachBlossom）桃花，即蔷薇科植物桃树盛开的花朵。桃花原产于中国中部、北部，现已在世界温带国家及地区广泛种植。桃花具有很高的观赏价值，是文学创作的常用素材。", "type": 1},
			{"asset_id": {"m1": "7479445", "m2": "7479446", "m3": "7479447", "s": "7479448"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 7, "id": 1026, "insect": "0,0,0,0,0,0|52,-6,61,-48,105,5|55,-13,69,-48,111,2|0,0,0,0,0,0", "isFlower": 0, "name": "水萝卜", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：水萝卜（英文：Radish）含热量较少，纤维素较多，能诱导人体自身产生干扰素，增加机体免疫力，并能抑制癌细胞的生长，对防癌、抗癌有重要作用。常吃可降低血脂、软化血管、稳定血压，预防冠心病、动脉硬化、胆石症等疾病。还是一味中药。", "type": 1},
			{"asset_id": {"m1": "7479449", "m2": "7479450", "m3": "7479451", "s": "7479452"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 7, "id": 1027, "insect": "0,0,0,0,0,0|52,-6,61,-48,105,5|55,-13,69,-48,111,2|0,0,0,0,0,0", "isFlower": 0, "name": "圣女果", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：圣女果（英文：cherry tomato）又稱珍珠小番茄，櫻桃小番茄。果實直徑約1～3釐米，鮮紅碧透（另有中黄、橙黄、翡翠綠等顏色的新品種），味清甜，無核，口感好，營養價值高（其維生素含量是普通番茄的1．7倍）且風味獨特。", "type": 1},
			{"asset_id": {"m0": "7479453", "m1": "7479454", "m2": "7479455", "m3": "7479456", "s": "7479457"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 9, "id": 1028, "insect": "0,0,0,0,0,0|83,16,126,12,111,29|67,30,81,11,111,27|0,0,0,0,0,0", "isFlower": 1, "isLock": 0, "isRed": "1", "name": "多色荷花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：清白、高尚而谦虚。被子植物中起源最早的植物之一。中国的十大名花之一，印度国花。既可广植湖泊，又能盆栽瓶插 ...。", "type": 1},
			{"asset_id": {"m0": "7479458", "m1": "7479459", "m2": "7479460", "m3": "7479461", "s": "7479462"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 1029, "insect": "0,0,0,0,0,0|52,-39,93,-54,109,-4|57,-31,90,-59,108,-14|0,0,0,0,0,0", "isFlower": 1, "name": "扶桑花", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：扶桑花（英文：Hibiscus rosa sinensis）别名朱槿、大红花、朱槿牡丹等。为锦葵科常绿大灌木。茎直立而多分枝，树冠远方形，高可达6米。通常玫瑰红色，重瓣者非漏斗形，呈红、黄、粉等色，花期全年，夏秋最盛。为马来西亚国花。", "type": 1},
			{"asset_id": {"m0": "7479463", "m1": "7479464", "m2": "7479465", "m3": "7479466", "s": "7479467"}, "cropGrow": "21600,43200,64800,93600,122400,2000000000", "gossip": "", "harvestNum": 7, "id": 1030, "insect": "0,0,0,0,0,0|71,15,92,-7,113,11|64,-20,94,-47,102,-19|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "绿绒蒿", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：绿绒蒿（英文：Meconopsis）一年或多年生草本，共49种。一种产西欧，其余48种均分布于东亚的中国-喜马拉雅地区，但最原始种在华中。我国有38种，集中分布于西南部。为著名的观赏植物，有些种类可入药。", "type": 1},
			{"asset_id": {"m0": "7479468", "m1": "7479469", "m2": "7479470", "m3": "7479471", "s": "7479472"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 6, "id": 1031, "insect": "0,0,0,0,0,0|65,15,80,-13,115,11|60,11,85,-43,111,6|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "缅栀", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：缅栀（英文：Mexican frangipani）又叫鸡蛋花、蛋黄花、印度素馨、大季花，在我国西双版纳以及东南亚一些国家，鸡蛋花被佛教寺院定为“五树六花”之一而被广泛栽植，故又名庙树或塔树。", "type": 1},
			{"asset_id": {"m0": "7479473", "m1": "7479474", "m2": "7479475", "m3": "7479476", "s": "7479477"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 1032, "insect": "0,0,0,0,0,0|63,10,98,-13,92,10|59,3,91,-35,94,10|0,0,0,0,0,0", "isFlower": 1, "name": "三色堇", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：三色堇（英文：Viola tricolor L.）是堇菜科堇菜属的一年生或短期多年生草本植物，在欧洲是常见的野花，也常栽培于公园中。三色菫以露天栽种为宜，无论花坛、庭园、盆栽皆适合。不应移入室内，以长保花朵寿命。", "type": 1},
			{"asset_id": {"m0": "7479478", "m1": "7479479", "m2": "7479480", "m3": "7479481", "s": "7479482"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 9, "id": 1033, "insect": "0,0,0,0,0,0|83,16,126,12,111,29|67,30,81,11,111,27|0,0,0,0,0,0", "isFlower": 1, "isLock": 0, "isRed": "1", "name": "睡火莲 ", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：（别名）子午莲、水浮莲、水芹花、紫睡莲 这种花每年只开七天，睡火莲外面是紫色的花瓣，中间只有许多金色的触角，里面有一个含苞欲放的花蕊，只有在凋谢的前一刻才会张开。是格兰蒂亚最娇贵的花。", "type": 1},
			{"asset_id": {"m0": "7479483", "m1": "7479484", "m2": "7479485", "m3": "7479486", "s": "7479487"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 4, "id": 1034, "insect": "0,0,0,0,0,0|89,-37,112,-6,55,-2|112,-4,98,-52,54,-9|0,0,0,0,0,0", "isFlower": "1", "isMill": "0", "name": "珙桐", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：珙桐（Nyssaceae）双子叶植物，3属，约12种，分布于北美和亚洲，我国有3属，8种，除供庭园观赏外，木材可用，喜树含喜树碱，能抗癌。", "type": 1},
			{"asset_id": {"m0": "7479488", "m1": "7479489", "m2": "7479490", "m3": "7479491", "s": "7479492"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "ext": "", "gossip": "", "harvestNum": 5, "id": 1035, "insect": "0,0,0,0,0,0|81,15,96,-55,98,-21|81,4,93,-62,103,-25|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "友谊花", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：友谊之花每个人心中都有，它含苞待放，散发着淡淡的清香。每个人都希望会有知心朋友来浇灌心中之花。", "type": 1},
			{"asset_id": {"m0": "7479493", "m1": "7479494", "m2": "7479495", "m3": "7479496", "s": "7479497"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 1036, "insect": "0,0,0,0,0,0|69,8,87,-13,103,21|59,3,86,-40,108,21|0,0,0,0,0,0", "isFlower": 1, "name": "玉兰", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：玉兰（英文：Magnolia）别名白玉兰，望春花，玉兰花，木兰科。玉兰原产我国中部各省，现北京及黄河流域以南均有栽培。古时多在亭，台，楼，阁前栽植。", "type": 1},
			{"asset_id": {"m0": "7479498", "m1": "7479499", "m2": "7479500", "m3": "7479501", "s": "7479502"}, "cropGrow": "18000,32400,50400,82800,97200,2000000000", "gossip": "", "harvestNum": 3, "id": 1037, "insect": "0,0,0,0,0,0|52,-15,79,-36,106,4|57,-14,80,-49,101,2|0,0,0,0,0,0", "isFlower": 1, "isMill": "0", "name": "鸢尾花", "nextText": "幼苗,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：鸢尾花（英文：Roof Iris）鸢尾之名来源于希腊语，意思是彩虹。这种花有红，橙，紫，蓝，白，黑各色，不愧彩虹之称。", "type": 1},
			{"asset_id": {"m1": "7479503", "m2": "7479504", "m3": "7479505", "s": "7479506"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 3, "id": 1038, "insect": "0,0,0,0,0,0|67,-20,100,-49,105,-20|63,-36,89,-70,109,-24|0,0,0,0,0,0", "name": "芋头", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：芋头（学名：Colocasia esculenta (L.) Schoot ）营养丰富，含有大量的淀粉、矿物质及维生素，既是蔬菜，又是粮食，可熟食、干制或制粉。", "type": 1},
			{"asset_id": {"m1": "7479507", "m2": "7479508", "m3": "7479509", "s": "7479510"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 1039, "insect": "0,0,0,0,0,0|45,-15,77,-45,128,2|54,-26,74,-59,120,0|0,0,0,0,0,0", "name": "紫薯", "nextText": "种子,发芽,小叶子,大叶子,初熟,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：紫薯（英文：Purple Potato）薯肉呈紫色至深紫色。它除了具有普通红薯的营养成分外，还富含硒元素和花青素。", "type": 1},
			{"asset_id": {"m1": "7479511", "m2": "7479512", "m3": "7479513", "s": "7479514"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 1040, "insect": "0,0,0,0,0,0|105,44,70,13,119,13|105,44,70,13,119,13|0,0,0,0,0,0", "name": "蚕豆", "nextText": "种子,发芽,小叶子,大叶子,开花,成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：蚕豆(英文：Horsebean，Broadbean，Fava Bean )又称胡豆、佛豆、胡豆、川豆、倭豆、罗汉豆。一年生或二年生草本。为粮食、蔬菜和饲料、绿肥兼用作物。起源于西南亚和北非。相传西汉张骞自西域引入中国。蚕豆含8种必需氨基酸。", "type": 1},
			{"asset_id": {"m1": "7479515", "m2": "7479516", "m3": "7479517", "s": "7479518"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 1, "id": 1041, "insect": "0,0,0,0,0,0|71,-24,69,-63,116,-53|71,-24,69,-63,116,-53|0,0,0,0,0,0", "name": "灯笼草", "nextText": "种子,发芽,开花,小叶子,大叶子,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：灯笼草(英文：Grass lantern)又称灯笼果、打额泡、地灯笼、天泡果、打扑草、苦灯笼草、炮仔草、母炮草。茄科灯笼草，以全草入药。主治清热解毒，消炎利水。主治感冒发热，腮腺炎，支气管炎，急性肾盂肾炎，睾丸炎，泡疹，疖疮，疝气痛。", "type": 1},
			{"asset_id": {"m1": "7479519", "m2": "7479520", "m3": "7479521", "s": "7479522"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 2, "id": 1042, "insect": "0,0,0,0,0,0|71,-24,69,-63,116,-53|71,-24,69,-63,116,-53|0,0,0,0,0,0", "isFlower": 1, "name": "西红花", "nextText": "种子,发芽,开花,小叶子,大叶子,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：（学名：Crocus sativus）又称藏红花、西红花，是一种鸢尾科番红花属的多年生花卉，也是一种常见的香料。", "type": 1},
			{"asset_id": {"m1": "7479523", "m2": "7479524", "m3": "7479525", "s": "7479526"}, "cropGrow": "54000,108000,165600,219600,277200,2000000000", "gossip": "", "harvestNum": 2, "id": 1043, "insect": "0,0,0,0,0,0|71,-24,69,-63,116,-53|71,-24,69,-63,116,-53|0,0,0,0,0,0", "name": "开心果", "nextText": "种子,发芽,开花,小叶子,大叶子,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：又名必思答，绿仁果等。传说五世纪时的波希战争中，波斯人英勇无比，在恶劣的环境中愈战愈勇，最终打败了希腊人，其“秘密武器”就是士兵们吃了一种神奇的干果——开心果。因此，古代波斯国国王将开心果视为“仙果”。开心果也被称为是“美国花生”。", "type": 1},
			{"asset_id": {"m1": "7479527", "m2": "7479528", "m3": "7479529", "s": "7479530"}, "cropGrow": "36000,75600,115200,154800,198000,2000000000", "gossip": "", "harvestNum": 4, "id": 1044, "insect": "0,0,0,0,0,0|61,-52,96,-30,120,-12|61,-52,96,-30,120,-12|0,0,0,0,0,0", "name": "女神果", "nextText": "种子,发芽,开花,小叶子,大叶子,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：女神最喜歡的水果。", "type": 1},
			{"asset_id": {"m1": "7479531", "m2": "7479532", "m3": "7479533", "s": "7479534"}, "cropGrow": "25200,39600,64800,97200,115200,2000000000", "gossip": "", "harvestNum": 3, "id": 1045, "insect": "0,0,0,0,0,0|41,-17,98,-42,112,-9|54,-21,95,-56,121,-13|0,0,0,0,0,0", "isFlower": 1, "name": "女神花", "nextText": "种子,发芽,开花,小叶子,大叶子,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：女神最喜歡的水果。", "type": 1},
			{"asset_id": {"m1": "7479535", "m2": "7479536", "m3": "7479537", "s": "7479538"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 5, "id": 1046, "insect": "0,0,0,0,0,0|64,-14,88,-19,99,4|64,-41,97,-55,101,-4|0,0,0,0,0,0", "name": "赤豆", "nextText": "种子,发芽,开花,小叶子,大叶子,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：赤豆（学名：Vigna angularis）赤豆是一年生直立或缠绕草本植物，花期夏季，果期9~10月，种子供食用与药用，常用于煮粥、制豆沙。", "type": 1},
			{"asset_id": {"m1": "7479539", "m2": "7479540", "m3": "7479541", "s": "7479542"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 1047, "insect": "0,0,0,0,0,0|61,5,96,1,98,29|55,3,91,-19,95,27|0,0,0,0,0,0", "isFlower": 1, "name": "四季櫻草", "nextText": "种子,发芽,开花,小叶子,大叶子,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：四季樱草，又称四季报春、鄂报春、仙鹤莲，为报春科多年生草本植物，株高约30厘米，叶长圆形至卵圆形。伞形花序较大，花漏斗状，繁多且色彩鲜艳，有白、洋红、紫红、蓝、淡红或淡紫等色。", "type": 1},
			{"asset_id": {"m0": "7479543", "m1": "7479544", "m2": "7479545", "m3": "7479546", "s": "7479547"}, "cropGrow": "54000,108000,165600,219600,324000,2000000000", "gossip": "", "harvestNum": 4, "id": 1048, "insect": "0,0,0,0,0,0|71,-24,69,-63,116,-53|71,-24,69,-63,116,-53|0,0,0,0,0,0", "name": "蝴蝶树", "nextText": "种子,发芽,开花,小叶子,大叶子,成熟,已成熟", "offsetX": 0, "offsetY": 0, "tip": "小贴士：树皮银灰色，内皮浅红色；嫩枝被锈色鳞批。叶革质，椭圆状披针形。花开时分，如梦如幻，流连忘返，混若仙境。梧桐科.", "type": 1}
			]}
		]]>
	</crops>

	<!-- 农场背景装饰 -->
	<item_info type="json">
		<![CDATA[
		{"item_info": [
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "947", "m": "945", "s": "946"}, "desc": "默认的", "exp": 0, "id": 1, "level": 0, "name": "田园风光背景", "price": 0, "type": 1, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "950", "m": "948", "s": "949"}, "desc": "默认的", "exp": 0, "id": 2, "level": 0, "name": "茅草屋", "price": 0, "type": 2, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "953", "m": "951", "s": "952"}, "desc": "送的", "exp": 0, "id": 3, "level": 0, "name": "木桩栅栏", "price": 0, "type": 3, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "956", "m": "954", "s": "955"}, "desc": "送的", "exp": 0, "id": 4, "level": 0, "name": "茅草狗屋", "price": 0, "type": 4, "valid": 0},
			{"FBPrice": 50, "YFBPrice": 40, "asset_id": {"b": "959", "m": "957", "s": "958"}, "desc": "荷兰葵花系列", "exp": 288, "id": 11, "level": 0, "name": "春日风车背景", "price": 14499, "type": 1, "valid": 2592000},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "962", "m": "960", "s": "961"}, "desc": "荷兰葵花系列", "exp": 200, "id": 12, "level": 0, "name": "绿顶小木屋", "price": 9999, "type": 2, "valid": 2592000},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "965", "m": "963", "s": "964"}, "desc": "荷兰葵花系列", "exp": 120, "id": 13, "level": 0, "name": "爱心木栅栏", "price": 5999, "type": 3, "valid": 2592000},
			{"FBPrice": 20, "YFBPrice": 16, "asset_id": {"b": "968", "m": "966", "s": "967"}, "desc": "荷兰葵花系列", "exp": 96, "id": 14, "level": 0, "name": "木制小狗窝", "price": 4999, "type": 4, "valid": 2592000},
			{"FBPrice": 21, "YFBPrice": 0, "asset_id": {"b": "971", "m": "969", "s": "970"}, "desc": "圣诞快乐背景", "exp": 432, "id": 16, "level": 0, "name": "圣诞背景", "price": 21999, "type": 1, "valid": 2592000},
			{"FBPrice": 14, "YFBPrice": 0, "asset_id": {"b": "974", "m": "972", "s": "973"}, "desc": "圣诞节房子", "exp": 300, "id": 17, "level": 0, "name": "圣诞小屋", "price": 14999, "type": 2, "valid": 2592000},
			{"FBPrice": 8, "YFBPrice": 0, "asset_id": {"b": "977", "m": "975", "s": "976"}, "desc": "圣诞系列", "exp": 180, "id": 18, "level": 0, "name": "圣诞节栅栏 ", "price": 8999, "type": 3, "valid": 2592000},
			{"FBPrice": 7, "YFBPrice": 0, "asset_id": {"b": "980", "m": "978", "s": "979"}, "desc": "圣诞系列", "exp": 144, "id": 19, "level": 0, "name": "圣诞节狗窝 ", "price": 7199, "type": 4, "valid": 2592000},
			{"FBPrice": 25, "YFBPrice": 0, "asset_id": {"b": "982", "s": "981"}, "desc": "春暖花开套装", "exp": 518, "id": 21, "level": 0, "name": "春暖花开背景", "price": 25999, "type": 1, "valid": 2592000},
			{"FBPrice": 17, "YFBPrice": 0, "asset_id": {"b": "985", "m": "983", "s": "984"}, "desc": "春暖花开套装", "exp": 360, "id": 22, "level": 0, "name": "春意小木屋", "price": 17999, "type": 2, "valid": 2592000},
			{"FBPrice": 10, "YFBPrice": 0, "asset_id": {"b": "988", "m": "986", "s": "987"}, "desc": "春暖花开套装", "exp": 216, "id": 23, "level": 0, "name": "积木白栅栏 ", "price": 10999, "type": 3, "valid": 2592000},
			{"FBPrice": 8, "YFBPrice": 0, "asset_id": {"b": "991", "m": "989", "s": "990"}, "desc": "春暖花开套装", "exp": 173, "id": 24, "level": 0, "name": "绿色木狗窝", "price": 8888, "type": 4, "valid": 2592000},
			{"FBPrice": 16, "YFBPrice": 0, "asset_id": {"b": "993", "s": "992"}, "desc": "恭贺新禧套装", "exp": 346, "id": 26, "level": 0, "name": "春节快乐背景", "price": 16888, "type": 1, "valid": 2592000},
			{"FBPrice": 11, "YFBPrice": 0, "asset_id": {"b": "996", "m": "994", "s": "995"}, "desc": "恭贺新禧套装", "exp": 240, "id": 27, "level": 0, "name": "新春小瓦房", "price": 11888, "type": 2, "valid": 2592000},
			{"FBPrice": 7, "YFBPrice": 0, "asset_id": {"b": "999", "m": "997", "s": "998"}, "desc": "恭贺新禧套装", "exp": 144, "id": 28, "level": 0, "name": "新春石头围墙", "price": 7188, "type": 3, "valid": 2592000},
			{"FBPrice": 5, "YFBPrice": 0, "asset_id": {"b": "1002", "m": "1000", "s": "1001"}, "desc": "恭贺新禧套装", "exp": 115, "id": 29, "level": 0, "name": "新春小狗窝", "price": 5888, "type": 4, "valid": 2592000},
			{"FBPrice": 25, "YFBPrice": 0, "asset_id": {"b": "1004", "s": "1003"}, "desc": "清凉一夏套装", "exp": 518, "id": 31, "level": 0, "name": "清凉一夏背景", "price": 25999, "type": 1, "valid": 2592000},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "1007", "m": "1005", "s": "1006"}, "desc": "青春草原套装", "exp": 346, "id": 41, "level": 0, "name": "浓情原野", "price": 17280, "type": 1, "valid": 2592000},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "1010", "m": "1008", "s": "1009"}, "desc": "青春草原套装", "exp": 240, "id": 42, "level": 0, "name": "温情蒙古包", "price": 12000, "type": 2, "valid": 2592000},
			{"FBPrice": 28, "YFBPrice": 22, "asset_id": {"b": "1013", "m": "1011", "s": "1012"}, "desc": "青春草原套装", "exp": 144, "id": 43, "level": 0, "name": "怡情围毡", "price": 7200, "type": 3, "valid": 2592000},
			{"FBPrice": 22, "YFBPrice": 17, "asset_id": {"b": "1016", "m": "1014", "s": "1015"}, "desc": "青春草原套装", "exp": 115, "id": 44, "level": 0, "name": "风情獒窝", "price": 5760, "type": 4, "valid": 2592000},
			{"FBPrice": 144, "YFBPrice": 115, "asset_id": {"b": "1019", "m": "1017", "s": "1018"}, "desc": "魔幻乐园套装", "exp": 720, "id": 45, "level": 0, "name": "魔幻乐园背景", "price": 42199, "type": 1, "valid": 2592000},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "1022", "m": "1020", "s": "1021"}, "desc": "魔幻乐园套装", "exp": 500, "id": 46, "level": 0, "name": "蘑菇小屋", "price": 29888, "type": 2, "valid": 2592000},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "1025", "m": "1023", "s": "1024"}, "desc": "魔幻乐园套装", "exp": 300, "id": 47, "level": 0, "name": "迷幻栅栏", "price": 18088, "type": 3, "valid": 2592000},
			{"FBPrice": 48, "YFBPrice": 38, "asset_id": {"b": "1028", "m": "1026", "s": "1027"}, "desc": "魔幻乐园套装", "exp": 240, "id": 48, "level": 0, "name": "迷你狗窝", "price": 14399, "type": 4, "valid": 2592000},
			{"FBPrice": 77, "YFBPrice": 61, "asset_id": {"b": "1031", "m": "1029", "s": "1030"}, "desc": "午日阳光套装", "exp": 384, "id": 49, "level": 0, "name": "午日阳光背景", "price": 27799, "type": 1, "valid": 2592000},
			{"FBPrice": 53, "YFBPrice": 42, "asset_id": {"b": "1034", "m": "1032", "s": "1033"}, "desc": "午日阳光套装", "exp": 267, "id": 50, "level": 0, "name": "粉色小洋房", "price": 19988, "type": 2, "valid": 2592000},
			{"FBPrice": 32, "YFBPrice": 25, "asset_id": {"b": "1037", "m": "1035", "s": "1036"}, "desc": "午日阳光套装", "exp": 160, "id": 51, "level": 0, "name": "白木栅栏", "price": 11888, "type": 3, "valid": 2592000},
			{"FBPrice": 26, "YFBPrice": 20, "asset_id": {"b": "1040", "m": "1038", "s": "1039"}, "desc": "午日阳光套装", "exp": 160, "id": 52, "level": 0, "name": "温情狗窝", "price": 9588, "type": 4, "valid": 2592000},
			{"FBPrice": 104, "YFBPrice": 83, "asset_id": {"b": "1043", "m": "1041", "s": "1042"}, "desc": "山里人家套装", "exp": 518, "id": 53, "level": 0, "name": "山间小溪背景", "price": 38099, "type": 1, "valid": 2592000},
			{"FBPrice": 72, "YFBPrice": 57, "asset_id": {"b": "1046", "m": "1044", "s": "1045"}, "desc": "山里人家套装", "exp": 360, "id": 54, "level": 0, "name": "农家大宅", "price": 26888, "type": 2, "valid": 2592000},
			{"FBPrice": 43, "YFBPrice": 34, "asset_id": {"b": "1049", "m": "1047", "s": "1048"}, "desc": "山里人家套装", "exp": 216, "id": 55, "level": 0, "name": "柴火栅栏", "price": 16299, "type": 3, "valid": 2592000},
			{"FBPrice": 35, "YFBPrice": 28, "asset_id": {"b": "1052", "m": "1050", "s": "1051"}, "desc": "山里人家套装", "exp": 173, "id": 56, "level": 0, "name": "实木狗窝", "price": 12599, "type": 4, "valid": 2592000},
			{"FBPrice": 88, "YFBPrice": 70, "asset_id": {"b": "1055", "m": "1053", "s": "1054"}, "desc": "地中海套装", "exp": 442, "id": 57, "level": 0, "name": "地中海风情", "price": 33088, "type": 1, "valid": 2592000},
			{"FBPrice": 61, "YFBPrice": 48, "asset_id": {"b": "1058", "m": "1056", "s": "1057"}, "desc": "地中海套装", "exp": 307, "id": 58, "level": 0, "name": "迷情蓝堡", "price": 22299, "type": 2, "valid": 2592000},
			{"FBPrice": 37, "YFBPrice": 29, "asset_id": {"b": "1061", "m": "1059", "s": "1060"}, "desc": "地中海套装", "exp": 184, "id": 59, "level": 0, "name": "白沙围廊", "price": 13788, "type": 3, "valid": 2592000},
			{"FBPrice": 29, "YFBPrice": 23, "asset_id": {"b": "1064", "m": "1062", "s": "1063"}, "desc": "地中海套装", "exp": 147, "id": 60, "level": 0, "name": "贝鲁特犬舍", "price": 11088, "type": 4, "valid": 2592000},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "1067", "m": "1065", "s": "1066"}, "desc": "云顶山林套装", "exp": 340, "id": 61, "level": 0, "name": "云海风林背景", "price": 35999, "type": 1, "valid": 2592000},
			{"FBPrice": 67, "YFBPrice": 54, "asset_id": {"b": "1070", "m": "1068", "s": "1069"}, "desc": "云顶山林套装", "exp": 268, "id": 62, "level": 0, "name": "鼎园别墅", "price": 24999, "type": 2, "valid": 2592000},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1073", "m": "1071", "s": "1072"}, "desc": "云顶山林套装", "exp": 160, "id": 63, "level": 0, "name": "篱笆围栏", "price": 14999, "type": 3, "valid": 2592000},
			{"FBPrice": 32, "YFBPrice": 26, "asset_id": {"b": "1076", "m": "1074", "s": "1075"}, "desc": "云顶山林套装", "exp": 128, "id": 64, "level": 0, "name": "炫彩狗窝", "price": 11999, "type": 4, "valid": 2592000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1079", "m": "1077", "s": "1078"}, "desc": "豌豆公主套装", "exp": 0, "id": 65, "level": 0, "name": "欢乐童年背景", "price": 0, "type": 1, "valid": 2592000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1082", "m": "1080", "s": "1081"}, "desc": "豌豆公主套装", "exp": 0, "id": 66, "level": 0, "name": "长耳朵小屋", "price": 0, "type": 2, "valid": 2592000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1085", "m": "1083", "s": "1084"}, "desc": "豌豆公主套装", "exp": 0, "id": 67, "level": 0, "name": "七彩栅栏", "price": 0, "type": 3, "valid": 2592000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1088", "m": "1086", "s": "1087"}, "desc": "豌豆公主套装", "exp": 0, "id": 68, "level": 0, "name": "甜蜜狗窝", "price": 0, "type": 4, "valid": 2592000},
			{"FBPrice": 92, "YFBPrice": 73, "asset_id": {"b": "1091", "m": "1089", "s": "1090"}, "desc": "水墨江南背景", "exp": 367, "id": 69, "level": 0, "name": "水墨江南背景", "price": 40288, "type": 1, "valid": 2592000},
			{"FBPrice": 64, "YFBPrice": 51, "asset_id": {"b": "1094", "m": "1092", "s": "1093"}, "desc": "江南小院", "exp": 255, "id": 70, "level": 0, "name": "江南小院", "price": 27999, "type": 2, "valid": 2592000},
			{"FBPrice": 38, "YFBPrice": 31, "asset_id": {"b": "1097", "m": "1095", "s": "1096"}, "desc": "石玉栅栏", "exp": 153, "id": 71, "level": 0, "name": "石玉栅栏", "price": 16788, "type": 3, "valid": 2592000},
			{"FBPrice": 31, "YFBPrice": 24, "asset_id": {"b": "1100", "m": "1098", "s": "1099"}, "desc": "幽径狗舍", "exp": 122, "id": 72, "level": 0, "name": "幽径狗舍", "price": 13488, "type": 4, "valid": 2592000},
			{"FBPrice": 57, "YFBPrice": 46, "asset_id": {"b": "1103", "m": "1101", "s": "1102"}, "desc": "月光狂想背景", "exp": 199, "id": 73, "level": 0, "name": "月光狂想背景", "price": 25888, "type": 1, "valid": 15552000},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1106", "m": "1104", "s": "1105"}, "desc": "精灵小屋", "exp": 138, "id": 74, "level": 0, "name": "精灵小屋", "price": 17999, "type": 2, "valid": 15552000},
			{"FBPrice": 24, "YFBPrice": 19, "asset_id": {"b": "1109", "m": "1107", "s": "1108"}, "desc": "月下连桩", "exp": 83, "id": 75, "level": 0, "name": "月下连桩", "price": 10888, "type": 3, "valid": 15552000},
			{"FBPrice": 19, "YFBPrice": 15, "asset_id": {"b": "1112", "m": "1110", "s": "1111"}, "desc": "光影狗窝", "exp": 66, "id": 76, "level": 0, "name": "光影狗窝", "price": 8599, "type": 4, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1115", "m": "1113", "s": "1114"}, "desc": "校友暑期套装", "exp": 0, "id": 77, "level": 0, "name": "青青校园背景", "price": 0, "type": 1, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1118", "m": "1116", "s": "1117"}, "desc": "校友暑期套装", "exp": 0, "id": 78, "level": 0, "name": "教学大楼", "price": 0, "type": 2, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1121", "m": "1119", "s": "1120"}, "desc": "校友暑期套装", "exp": 0, "id": 79, "level": 0, "name": "绿树栅栏", "price": 0, "type": 3, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1124", "m": "1122", "s": "1123"}, "desc": "校友暑期套装", "exp": 0, "id": 80, "level": 0, "name": "实验室", "price": 0, "type": 4, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1127", "m": "1125", "s": "1126"}, "desc": "丛林绿地套装", "exp": 0, "id": 81, "level": 0, "name": "丛林绿地背景", "price": 0, "type": 1, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1130", "m": "1128", "s": "1129"}, "desc": "丛林绿地套装", "exp": 0, "id": 82, "level": 0, "name": "绿顶树屋", "price": 0, "type": 2, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1133", "m": "1131", "s": "1132"}, "desc": "丛林绿地套装", "exp": 0, "id": 83, "level": 0, "name": "松木栅栏", "price": 0, "type": 3, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1136", "m": "1134", "s": "1135"}, "desc": "丛林绿地套装", "exp": 0, "id": 84, "level": 0, "name": "树穴狗窝", "price": 0, "type": 4, "valid": 15552000},
			{"FBPrice": 55, "YFBPrice": 44, "asset_id": {"b": "1139", "m": "1137", "s": "1138"}, "desc": "甜心农场套装", "exp": 165, "id": 85, "level": 0, "name": "甜心广场背景", "price": 23088, "type": 1, "valid": 15552000},
			{"FBPrice": 38, "YFBPrice": 30, "asset_id": {"b": "1142", "m": "1140", "s": "1141"}, "desc": "甜心农场套装", "exp": 114, "id": 86, "level": 0, "name": "糖果小屋", "price": 15999, "type": 2, "valid": 15552000},
			{"FBPrice": 23, "YFBPrice": 18, "asset_id": {"b": "1145", "m": "1143", "s": "1144"}, "desc": "甜心农场套装", "exp": 69, "id": 87, "level": 0, "name": "棒棒糖栅栏", "price": 9588, "type": 3, "valid": 15552000},
			{"FBPrice": 18, "YFBPrice": 15, "asset_id": {"b": "1148", "m": "1146", "s": "1147"}, "desc": "甜心农场套装", "exp": 55, "id": 88, "level": 0, "name": "甜点狗窝", "price": 7688, "type": 4, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1151", "m": "1149", "s": "1150"}, "desc": "一生一世套装", "exp": 0, "id": 89, "level": 0, "name": "一生一世背景", "price": 0, "type": 1, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1154", "m": "1152", "s": "1153"}, "desc": "一生一世套装", "exp": 0, "id": 90, "level": 0, "name": "鹊桥小屋", "price": 0, "type": 2, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1157", "m": "1155", "s": "1156"}, "desc": "一生一世套装", "exp": 0, "id": 91, "level": 0, "name": "环形栅栏", "price": 0, "type": 3, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1160", "m": "1158", "s": "1159"}, "desc": "一生一世套装", "exp": 0, "id": 92, "level": 0, "name": "凉亭小窝", "price": 0, "type": 4, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1163", "m": "1161", "s": "1162"}, "desc": "依旧爱你套装", "exp": 0, "id": 93, "level": 0, "name": "依旧爱你背景", "price": 0, "type": 1, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1166", "m": "1164", "s": "1165"}, "desc": "依旧爱你套装", "exp": 0, "id": 94, "level": 0, "name": "粉色小屋", "price": 0, "type": 2, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1169", "m": "1167", "s": "1168"}, "desc": "依旧爱你套装", "exp": 0, "id": 95, "level": 0, "name": "粉蝶栅栏", "price": 0, "type": 3, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1172", "m": "1170", "s": "1171"}, "desc": "依旧爱你套装", "exp": 0, "id": 96, "level": 0, "name": "粉色小窝", "price": 0, "type": 4, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1175", "m": "1173", "s": "1174"}, "desc": "狮子座套装", "exp": 0, "id": 97, "level": 0, "name": "狮子座背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1178", "m": "1176", "s": "1177"}, "desc": "狮子座套装", "exp": 0, "id": 98, "level": 0, "name": "狮子座城堡", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1181", "m": "1179", "s": "1180"}, "desc": "狮子座套装", "exp": 0, "id": 99, "level": 0, "name": "城堡围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1184", "m": "1182", "s": "1183"}, "desc": "狮子座套装", "exp": 0, "id": 100, "level": 0, "name": "城堡狗窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1187", "m": "1185", "s": "1186"}, "desc": "热情沙漠套装", "exp": 0, "id": 201, "level": 0, "name": "热情沙漠背景", "price": 0, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1190", "m": "1188", "s": "1189"}, "desc": "热情沙漠套装", "exp": 0, "id": 202, "level": 0, "name": "沙漠小屋", "price": 0, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1193", "m": "1191", "s": "1192"}, "desc": "热情沙漠套装", "exp": 0, "id": 203, "level": 0, "name": "沙石围栏", "price": 0, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1196", "m": "1194", "s": "1195"}, "desc": "热情沙漠套装", "exp": 0, "id": 204, "level": 0, "name": "石堡狗窝", "price": 0, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1199", "m": "1197", "s": "1198"}, "desc": "都市霓虹套装", "exp": 0, "id": 205, "level": 0, "name": "都市霓虹背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1202", "m": "1200", "s": "1201"}, "desc": "都市霓虹套装", "exp": 0, "id": 206, "level": 0, "name": "玻璃花房", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1205", "m": "1203", "s": "1204"}, "desc": "都市霓虹套装", "exp": 0, "id": 207, "level": 0, "name": "白金花栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1208", "m": "1206", "s": "1207"}, "desc": "都市霓虹套装", "exp": 0, "id": 208, "level": 0, "name": "花亭小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1211", "m": "1209", "s": "1210"}, "desc": "绿色校园套装", "exp": 0, "id": 209, "level": 0, "name": "绿色校园背景", "price": 0, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1214", "m": "1212", "s": "1213"}, "desc": "绿色校园套装", "exp": 0, "id": 210, "level": 0, "name": "教学大楼", "price": 0, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1217", "m": "1215", "s": "1216"}, "desc": "绿色校园套装", "exp": 0, "id": 211, "level": 0, "name": "彩旗飘飘", "price": 0, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1220", "m": "1218", "s": "1219"}, "desc": "绿色校园套装", "exp": 0, "id": 212, "level": 0, "name": "广播站", "price": 0, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1223", "m": "1221", "s": "1222"}, "desc": "碧草云天套装", "exp": 0, "id": 213, "level": 0, "name": "碧草云天", "price": 0, "type": 1, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1226", "m": "1224", "s": "1225"}, "desc": "碧草云天套装", "exp": 0, "id": 214, "level": 0, "name": "风情木屋", "price": 0, "type": 2, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1229", "m": "1227", "s": "1228"}, "desc": "碧草云天套装", "exp": 0, "id": 215, "level": 0, "name": "积木栅栏", "price": 0, "type": 3, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1232", "m": "1230", "s": "1231"}, "desc": "碧草云天套装", "exp": 0, "id": 216, "level": 0, "name": "简约狗窝", "price": 0, "type": 4, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1235", "m": "1233", "s": "1234"}, "desc": "七雄争霸套装 ", "exp": 0, "id": 217, "level": 0, "name": "七雄仙境", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1238", "m": "1236", "s": "1237"}, "desc": "七雄争霸套装", "exp": 0, "id": 218, "level": 0, "name": "七雄小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1241", "m": "1239", "s": "1240"}, "desc": "七雄争霸套装", "exp": 0, "id": 219, "level": 0, "name": "七雄栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1244", "m": "1242", "s": "1243"}, "desc": "七雄争霸套装", "exp": 0, "id": 220, "level": 0, "name": "七雄小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1247", "m": "1245", "s": "1246"}, "desc": "咖啡物语套装", "exp": 0, "id": 221, "level": 0, "name": "咖啡物语", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1250", "m": "1248", "s": "1249"}, "desc": "咖啡物语套装", "exp": 0, "id": 222, "level": 0, "name": "咖啡杯房", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1253", "m": "1251", "s": "1252"}, "desc": "咖啡物语套装", "exp": 0, "id": 223, "level": 0, "name": "方饼栅栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1256", "m": "1254", "s": "1255"}, "desc": "咖啡物语套装", "exp": 0, "id": 224, "level": 0, "name": "蛋糕狗窝", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 50, "YFBPrice": 40, "asset_id": {"b": "1259", "m": "1257", "s": "1258"}, "desc": "加州阳光套装", "exp": 288, "id": 225, "level": 0, "name": "加州阳光背景", "price": 14499, "type": 1, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1262", "m": "1260", "s": "1261"}, "desc": "加州阳光套装", "exp": 200, "id": 226, "level": 0, "name": "阳光农家", "price": 9999, "type": 2, "valid": 16070400},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "1265", "m": "1263", "s": "1264"}, "desc": "加州阳光套装", "exp": 120, "id": 227, "level": 0, "name": "圆木围栏", "price": 5999, "type": 3, "valid": 16070400},
			{"FBPrice": 20, "YFBPrice": 16, "asset_id": {"b": "1268", "m": "1266", "s": "1267"}, "desc": "加州阳光套装", "exp": 96, "id": 228, "level": 0, "name": "阳光小窝", "price": 4999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1271", "m": "1269", "s": "1270"}, "desc": "蔚蓝海滩套装", "exp": 0, "id": 229, "level": 0, "name": "蔚蓝海滩背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1274", "m": "1272", "s": "1273"}, "desc": "蔚蓝海滩套装", "exp": 0, "id": 230, "level": 0, "name": "红顶别墅", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1277", "m": "1275", "s": "1276"}, "desc": "蔚蓝海滩套装", "exp": 0, "id": 231, "level": 0, "name": "钉桩栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1280", "m": "1278", "s": "1279"}, "desc": "蔚蓝海滩套装", "exp": 0, "id": 232, "level": 0, "name": "雅致小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1283", "m": "1281", "s": "1282"}, "desc": "浓情绿野套装", "exp": 0, "id": 233, "level": 0, "name": "浓情绿野背景", "price": 1, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1286", "m": "1284", "s": "1285"}, "desc": "浓情绿野套装", "exp": 0, "id": 234, "level": 0, "name": "尚品小屋", "price": 1, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1289", "m": "1287", "s": "1288"}, "desc": "浓情绿野套装", "exp": 0, "id": 235, "level": 0, "name": "云白排桩", "price": 1, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1292", "m": "1290", "s": "1291"}, "desc": "浓情绿野套装", "exp": 0, "id": 236, "level": 0, "name": "名雅小窝", "price": 1, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1295", "m": "1293", "s": "1294"}, "desc": "冬日雪原套装", "exp": 0, "id": 237, "level": 0, "name": "冬日雪原背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1298", "m": "1296", "s": "1297"}, "desc": "冬日雪原套装", "exp": 0, "id": 238, "level": 0, "name": "浓情雅阁", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1301", "m": "1299", "s": "1300"}, "desc": "冬日雪原套装", "exp": 0, "id": 239, "level": 0, "name": "松雪围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1304", "m": "1302", "s": "1303"}, "desc": "冬日雪原套装", "exp": 0, "id": 240, "level": 0, "name": "红木小屋", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1307", "m": "1305", "s": "1306"}, "desc": "瑞雪迎春套装", "exp": 0, "id": 241, "level": 0, "name": "瑞雪迎春背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1310", "m": "1308", "s": "1309"}, "desc": "瑞雪迎春套装", "exp": 0, "id": 242, "level": 0, "name": "喜乐小居", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1313", "m": "1311", "s": "1312"}, "desc": "瑞雪迎春套装", "exp": 0, "id": 243, "level": 0, "name": "节节栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1316", "m": "1314", "s": "1315"}, "desc": "瑞雪迎春套装", "exp": 0, "id": 244, "level": 0, "name": "喜乐小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1319", "m": "1317", "s": "1318"}, "desc": "世博家园套装", "exp": 0, "id": 245, "level": 0, "name": "世博家园背景", "price": 1, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1322", "m": "1320", "s": "1321"}, "desc": "世博家园套装", "exp": 0, "id": 246, "level": 0, "name": "中国馆小屋", "price": 1, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1325", "m": "1323", "s": "1324"}, "desc": "世博家园套装", "exp": 0, "id": 247, "level": 0, "name": "绿草红栏", "price": 1, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1328", "m": "1326", "s": "1327"}, "desc": "世博家园套装", "exp": 0, "id": 248, "level": 0, "name": "红乐小窝", "price": 1, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1331", "m": "1329", "s": "1330"}, "desc": "年费迎新套装", "exp": 0, "id": 249, "level": 0, "name": "年费迎新背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1334", "m": "1332", "s": "1333"}, "desc": "年费迎新套装", "exp": 0, "id": 250, "level": 0, "name": "迎新阁楼", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1337", "m": "1335", "s": "1336"}, "desc": "年费迎新套装", "exp": 0, "id": 251, "level": 0, "name": "迎新栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1340", "m": "1338", "s": "1339"}, "desc": "年费迎新套装", "exp": 0, "id": 252, "level": 0, "name": "迎新小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "1343", "m": "1341", "s": "1342"}, "desc": "薰衣草之恋套装", "exp": 420, "id": 253, "level": 0, "name": "薰衣草之恋", "price": 82899, "type": 1, "valid": 16070400},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "1346", "m": "1344", "s": "1345"}, "desc": "薰衣草之恋套装", "exp": 320, "id": 254, "level": 0, "name": "薰香别墅", "price": 57599, "type": 2, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "1349", "m": "1347", "s": "1348"}, "desc": "薰衣草之恋套装", "exp": 220, "id": 255, "level": 0, "name": "浪漫围栏", "price": 34599, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "1352", "m": "1350", "s": "1351"}, "desc": "薰衣草之恋套装", "exp": 150, "id": 256, "level": 0, "name": "薰香小窝", "price": 27688, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1355", "m": "1353", "s": "1354"}, "desc": "炫舞乐园套装", "exp": 0, "id": 257, "level": 0, "name": "炫舞乐园背景", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1358", "m": "1356", "s": "1357"}, "desc": "炫舞乐园套装", "exp": 0, "id": 258, "level": 0, "name": "炫舞小屋", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1361", "m": "1359", "s": "1360"}, "desc": "炫舞乐园套装", "exp": 0, "id": 259, "level": 0, "name": "炫舞栅栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1364", "m": "1362", "s": "1363"}, "desc": "炫舞乐园套装", "exp": 0, "id": 260, "level": 0, "name": "炫舞小窝", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1367", "m": "1365", "s": "1366"}, "desc": "公益梦想套装", "exp": 0, "id": 261, "level": 0, "name": "希望的田野", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1370", "m": "1368", "s": "1369"}, "desc": "公益梦想套装", "exp": 0, "id": 262, "level": 0, "name": "爱心学校", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1373", "m": "1371", "s": "1372"}, "desc": "公益梦想套装", "exp": 0, "id": 263, "level": 0, "name": "心心相连", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1376", "m": "1374", "s": "1375"}, "desc": "公益梦想套装", "exp": 0, "id": 264, "level": 0, "name": "暖洋洋窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "1379", "m": "1377", "s": "1378"}, "desc": "碧海风情套装", "exp": 518, "id": 265, "level": 0, "name": "碧海风情", "price": 25999, "type": 1, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "1382", "m": "1380", "s": "1381"}, "desc": "碧海风情套装", "exp": 360, "id": 266, "level": 0, "name": "清凉度假屋", "price": 17999, "type": 2, "valid": 16070400},
			{"FBPrice": 50, "YFBPrice": 40, "asset_id": {"b": "1385", "m": "1383", "s": "1384"}, "desc": "碧海风情套装", "exp": 216, "id": 267, "level": 0, "name": "双排木桩", "price": 10999, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "1388", "m": "1386", "s": "1387"}, "desc": "碧海风情套装", "exp": 173, "id": 268, "level": 0, "name": "风情小窝", "price": 8888, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1391", "m": "1389", "s": "1390"}, "desc": "植树节套装", "exp": 0, "id": 269, "level": 0, "name": "绿意草林", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1394", "m": "1392", "s": "1393"}, "desc": "植树节套装", "exp": 0, "id": 270, "level": 0, "name": "绿色家园", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1397", "m": "1395", "s": "1396"}, "desc": "植树节套装", "exp": 0, "id": 271, "level": 0, "name": "春意围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1400", "m": "1398", "s": "1399"}, "desc": "植树节套装", "exp": 0, "id": 272, "level": 0, "name": "绿荫小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1403", "m": "1401", "s": "1402"}, "desc": "心心相印套装", "exp": 80, "id": 273, "level": 0, "name": "心心相印背景", "price": 18999, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1406", "m": "1404", "s": "1405"}, "desc": "心心相印套装", "exp": 48, "id": 274, "level": 0, "name": "恋恋花房", "price": 12999, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1409", "m": "1407", "s": "1408"}, "desc": "心心相印套装", "exp": 24, "id": 275, "level": 0, "name": "珍爱栅栏", "price": 5888, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1412", "m": "1410", "s": "1411"}, "desc": "心心相印套装", "exp": 16, "id": 276, "level": 0, "name": "迷情小窝", "price": 3888, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1415", "m": "1413", "s": "1414"}, "desc": "购物天堂套装", "exp": 0, "id": 277, "level": 0, "name": "购物天堂背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1418", "m": "1416", "s": "1417"}, "desc": "购物天堂套装", "exp": 0, "id": 278, "level": 0, "name": "缤纷小店", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1421", "m": "1419", "s": "1420"}, "desc": "购物天堂套装", "exp": 0, "id": 279, "level": 0, "name": "流金栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1424", "m": "1422", "s": "1423"}, "desc": "购物天堂套装", "exp": 0, "id": 280, "level": 0, "name": "绯红小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1427", "m": "1425", "s": "1426"}, "desc": "格兰之森套装", "exp": 0, "id": 281, "level": 0, "name": "格兰之森背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1430", "m": "1428", "s": "1429"}, "desc": "格兰之森套装", "exp": 0, "id": 282, "level": 0, "name": "月光酒店", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1433", "m": "1431", "s": "1432"}, "desc": "格兰之森套装", "exp": 0, "id": 283, "level": 0, "name": "图腾栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1436", "m": "1434", "s": "1435"}, "desc": "格兰之森套装", "exp": 0, "id": 284, "level": 0, "name": "邮箱小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1439", "m": "1437", "s": "1438"}, "desc": "彩钻之光套装", "exp": 0, "id": 285, "level": 0, "name": "彩钻之光", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1442", "m": "1440", "s": "1441"}, "desc": "彩钻之光套装", "exp": 0, "id": 286, "level": 0, "name": "缤纷香榭", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1445", "m": "1443", "s": "1444"}, "desc": "彩钻之光套装", "exp": 0, "id": 287, "level": 0, "name": "玉带晴虹", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1448", "m": "1446", "s": "1447"}, "desc": "彩钻之光套装", "exp": 0, "id": 288, "level": 0, "name": "星梦小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1451", "m": "1449", "s": "1450"}, "desc": "劳动颂套装", "exp": 0, "id": 293, "level": 0, "name": "劳动颂背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1454", "m": "1452", "s": "1453"}, "desc": "劳动颂套装", "exp": 0, "id": 294, "level": 0, "name": "劳动厂房", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1457", "m": "1455", "s": "1456"}, "desc": "劳动颂套装", "exp": 0, "id": 295, "level": 0, "name": "红砖围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1460", "m": "1458", "s": "1459"}, "desc": "劳动颂套装", "exp": 0, "id": 296, "level": 0, "name": "仓库小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1463", "m": "1461", "s": "1462"}, "desc": "小熊梦工厂套装", "exp": 0, "id": 297, "level": 0, "name": "小熊梦工厂", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1466", "m": "1464", "s": "1465"}, "desc": "小熊梦工厂套装", "exp": 0, "id": 298, "level": 0, "name": "小熊梦想屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1469", "m": "1467", "s": "1468"}, "desc": "小熊梦工厂套装", "exp": 0, "id": 299, "level": 0, "name": "小熊栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1472", "m": "1470", "s": "1471"}, "desc": "小熊梦工厂套装", "exp": 0, "id": 300, "level": 0, "name": "小熊狗窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1475", "m": "1473", "s": "1474"}, "desc": "qzone五周年套装", "exp": 0, "id": 301, "level": 0, "name": "qzone五周年背景", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1478", "m": "1476", "s": "1477"}, "desc": "qzone五周年套装", "exp": 0, "id": 302, "level": 0, "name": "缤纷五年", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1481", "m": "1479", "s": "1480"}, "desc": "qzone五周年套装", "exp": 0, "id": 303, "level": 0, "name": "星星栅栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1484", "m": "1482", "s": "1483"}, "desc": "qzone五周年套装", "exp": 0, "id": 304, "level": 0, "name": "星蓝狗窝", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1487", "m": "1485", "s": "1486"}, "desc": "农牧乐园套装", "exp": 0, "id": 305, "level": 0, "name": "农牧乐园背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1490", "m": "1488", "s": "1489"}, "desc": "农牧乐园套装", "exp": 0, "id": 306, "level": 0, "name": "趣味工坊", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1493", "m": "1491", "s": "1492"}, "desc": "农牧乐园套装", "exp": 0, "id": 307, "level": 0, "name": "圆桩木栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1496", "m": "1494", "s": "1495"}, "desc": "农牧乐园套装", "exp": 0, "id": 308, "level": 0, "name": "红顶木窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1499", "m": "1497", "s": "1498"}, "desc": "3366好玩公测套装", "exp": 0, "id": 309, "level": 0, "name": "小游乐天下", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1502", "m": "1500", "s": "1501"}, "desc": "3366好玩公测套装", "exp": 0, "id": 310, "level": 0, "name": "游乐小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1505", "m": "1503", "s": "1504"}, "desc": "3366好玩公测套装", "exp": 0, "id": 311, "level": 0, "name": "缤纷围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1508", "m": "1506", "s": "1507"}, "desc": "3366好玩公测套装", "exp": 0, "id": 312, "level": 0, "name": "五彩狗舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1892", "m": "1890", "s": "1891"}, "desc": "校园广场背景", "exp": 0, "id": 313, "level": 0, "name": "校园广场背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1895", "m": "1893", "s": "1894"}, "desc": "橙色大楼", "exp": 0, "id": 314, "level": 0, "name": "橙色大楼", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1898", "m": "1896", "s": "1897"}, "desc": "卷轴栅栏", "exp": 0, "id": 315, "level": 0, "name": "卷轴栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1901", "m": "1899", "s": "1900"}, "desc": "橙色小窝", "exp": 0, "id": 316, "level": 0, "name": "橙色小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3448", "m": "3446", "s": "3447"}, "desc": "超级套装", "exp": 0, "id": 321, "level": 0, "name": "精灵天空", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3451", "m": "3449", "s": "3450"}, "desc": "超级套装", "exp": 0, "id": 322, "level": 0, "name": "超Q之家", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3454", "m": "3452", "s": "3453"}, "desc": "超级套装", "exp": 0, "id": 323, "level": 0, "name": "超Q栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3457", "m": "3455", "s": "3456"}, "desc": "超级套装", "exp": 0, "id": 324, "level": 0, "name": "超Q小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3574", "m": "3572", "s": "3573"}, "desc": "宝贝套装", "exp": 0, "id": 325, "level": 0, "name": "灿烂宝贝", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3577", "m": "3575", "s": "3576"}, "desc": "宝贝套装", "exp": 0, "id": 326, "level": 0, "name": "宝贝小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3580", "m": "3578", "s": "3579"}, "desc": "宝贝套装", "exp": 0, "id": 327, "level": 0, "name": "花园围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3583", "m": "3581", "s": "3582"}, "desc": "宝贝套装", "exp": 0, "id": 328, "level": 0, "name": "宠物小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3662", "m": "3660", "s": "3661"}, "desc": "冰爽之星", "exp": 0, "id": 329, "level": 0, "name": "冰爽之星", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3665", "m": "3663", "s": "3664"}, "desc": "冰爽之星", "exp": 0, "id": 330, "level": 0, "name": "星之小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3668", "m": "3666", "s": "3667"}, "desc": "冰爽之星", "exp": 0, "id": 331, "level": 0, "name": "星之栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3671", "m": "3669", "s": "3670"}, "desc": "冰爽之星", "exp": 0, "id": 332, "level": 0, "name": "星之狗舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3698", "m": "3696", "s": "3697"}, "desc": "Q宠大乐斗", "exp": 0, "id": 333, "level": 0, "name": "青松翠柏", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3701", "m": "3699", "s": "3700"}, "desc": "Q宠大乐斗", "exp": 0, "id": 334, "level": 0, "name": "乐斗武道馆", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3704", "m": "3702", "s": "3703"}, "desc": "Q宠大乐斗", "exp": 0, "id": 335, "level": 0, "name": "柏木栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3707", "m": "3705", "s": "3706"}, "desc": "Q宠大乐斗", "exp": 0, "id": 336, "level": 0, "name": "犬神庙", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4353", "m": "4351", "s": "4352"}, "desc": "soso套装", "exp": 0, "id": 337, "level": 0, "name": "搜客帝国", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4356", "m": "4354", "s": "4355"}, "desc": "soso套装", "exp": 0, "id": 338, "level": 0, "name": "搜客小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4359", "m": "4357", "s": "4358"}, "desc": "soso套装", "exp": 0, "id": 339, "level": 0, "name": "搜客栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4362", "m": "4360", "s": "4361"}, "desc": "soso套装", "exp": 0, "id": 340, "level": 0, "name": "搜客狗窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4623", "m": "4621", "s": "4622"}, "desc": "云顶山庄套装", "exp": 0, "id": 341, "level": 0, "name": "云顶山庄背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4626", "m": "4624", "s": "4625"}, "desc": "云顶山庄套装", "exp": 0, "id": 342, "level": 0, "name": "云顶小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4629", "m": "4627", "s": "4628"}, "desc": "云顶山庄套装", "exp": 0, "id": 343, "level": 0, "name": "云顶栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4632", "m": "4630", "s": "4631"}, "desc": "云顶山庄套装", "exp": 0, "id": 344, "level": 0, "name": "云顶小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6369", "m": "6367", "s": "6368"}, "desc": "丝路英雄套装", "exp": 0, "id": 345, "level": 0, "name": "丝路绿洲", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6604", "m": "6602", "s": "6603"}, "desc": "丝路英雄套装", "exp": 0, "id": 346, "level": 0, "name": "丝路城堡", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6607", "m": "6605", "s": "6606"}, "desc": "丝路英雄套装", "exp": 0, "id": 347, "level": 0, "name": "丝路栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6610", "m": "6608", "s": "6609"}, "desc": "丝路英雄套装", "exp": 0, "id": 348, "level": 0, "name": "丝路小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7984", "m": "7982", "s": "7983"}, "desc": "梦想热带海套装", "exp": 0, "id": 349, "level": 0, "name": "梦想热带海", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7987", "m": "7985", "s": "7986"}, "desc": "海滩遮阳棚", "exp": 0, "id": 350, "level": 0, "name": "海滩遮阳棚", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7990", "m": "7988", "s": "7989"}, "desc": "热带海滩栅栏", "exp": 0, "id": 351, "level": 0, "name": "热带海滩栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7993", "m": "7991", "s": "7992"}, "desc": "夏日娱乐小窝", "exp": 0, "id": 352, "level": 0, "name": "夏日娱乐小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8118", "m": "8116", "s": "8117"}, "desc": "月下精灵套装", "exp": 0, "id": 353, "level": 0, "name": "月下精灵", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8121", "m": "8119", "s": "8120"}, "desc": "夜灯蘑菇房", "exp": 0, "id": 354, "level": 0, "name": "夜灯蘑菇房", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8124", "m": "8122", "s": "8123"}, "desc": "蔓藤栅栏", "exp": 0, "id": 355, "level": 0, "name": "蔓藤栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8127", "m": "8125", "s": "8126"}, "desc": "小夜灯蘑菇房", "exp": 0, "id": 356, "level": 0, "name": "小夜灯蘑菇房", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8130", "m": "8128", "s": "8129"}, "desc": "招财神猫", "exp": 0, "id": 357, "level": 0, "name": "招财神猫", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8133", "m": "8131", "s": "8132"}, "desc": "积雪木屋", "exp": 0, "id": 358, "level": 0, "name": "积雪木屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8136", "m": "8134", "s": "8135"}, "desc": "神木栅栏", "exp": 0, "id": 359, "level": 0, "name": "神木栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8139", "m": "8137", "s": "8138"}, "desc": "积雪小木屋", "exp": 0, "id": 360, "level": 0, "name": "积雪小木屋", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8142", "m": "8140", "s": "8141"}, "desc": "时光机", "exp": 0, "id": 361, "level": 0, "name": "时光机", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8145", "m": "8143", "s": "8144"}, "desc": "神奇时钟", "exp": 0, "id": 362, "level": 0, "name": "神奇时钟", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8148", "m": "8146", "s": "8147"}, "desc": "时钟拉杆围栏", "exp": 0, "id": 363, "level": 0, "name": "时钟拉杆围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8151", "m": "8149", "s": "8150"}, "desc": "时钟调速器", "exp": 0, "id": 364, "level": 0, "name": "时钟调速器", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8519", "m": "8517", "s": "8518"}, "desc": "宏耀宣言", "exp": 0, "id": 365, "level": 0, "name": "宏耀宣言", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8525", "m": "8523", "s": "8524"}, "desc": "金星窑洞", "exp": 0, "id": 366, "level": 0, "name": "金星窑洞", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8528", "m": "8526", "s": "8527"}, "desc": "红旗飘围栏", "exp": 0, "id": 367, "level": 0, "name": "红旗飘围栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8531", "m": "8529", "s": "8530"}, "desc": "宣言雕塑", "exp": 0, "id": 368, "level": 0, "name": "宣言雕塑", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8685", "m": "8683", "s": "8684"}, "desc": "楚河汉界套装", "exp": 0, "id": 373, "level": 0, "name": "楚河营地", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8688", "m": "8686", "s": "8687"}, "desc": "楚河汉界套装", "exp": 0, "id": 374, "level": 0, "name": "楚汉小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8691", "m": "8689", "s": "8690"}, "desc": "楚河汉界套装", "exp": 0, "id": 375, "level": 0, "name": "楚汉栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8694", "m": "8692", "s": "8693"}, "desc": "楚河汉界套装", "exp": 0, "id": 376, "level": 0, "name": "楚汉小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8875", "m": "8873", "s": "8874"}, "desc": "花好月圆", "exp": 0, "id": 377, "isNew": 0, "level": 0, "name": "花好月圆", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8880", "m": "8878", "s": "8879"}, "desc": "月下凉亭", "exp": 0, "id": 378, "isNew": 0, "level": 0, "name": "月下凉亭", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8884", "m": "8882", "s": "8883"}, "desc": "莲花围栏", "exp": 0, "id": 379, "isNew": 0, "level": 0, "name": "莲花围栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8888", "m": "8886", "s": "8887"}, "desc": "凉亭小窝", "exp": 0, "id": 380, "isNew": 0, "level": 0, "name": "凉亭小窝", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8972", "m": "8970", "s": "8971"}, "desc": "普天同庆", "exp": 0, "id": 381, "isNew": 0, "level": 0, "name": "普天同庆", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8975", "m": "8973", "s": "8974"}, "desc": "十一金座", "exp": 0, "id": 382, "isNew": 0, "level": 0, "name": "十一金座", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8978", "m": "8976", "s": "8977"}, "desc": "十一金栏", "exp": 0, "id": 383, "isNew": 0, "level": 0, "name": "十一金栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8981", "m": "8979", "s": "8980"}, "desc": "十一金柱", "exp": 0, "id": 384, "isNew": 0, "level": 0, "name": "十一金柱", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8913", "m": "8911", "s": "8912"}, "desc": "互联时空", "exp": 0, "id": 385, "isNew": 0, "level": 0, "name": "互联时空", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8916", "m": "8914", "s": "8915"}, "desc": "科技小站", "exp": 0, "id": 386, "isNew": 0, "level": 0, "name": "科技小站", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8919", "m": "8917", "s": "8918"}, "desc": "科技围栏", "exp": 0, "id": 387, "isNew": 0, "level": 0, "name": "科技围栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8922", "m": "8920", "s": "8921"}, "desc": "精巧小窝", "exp": 0, "id": 388, "isNew": 0, "level": 0, "name": "精巧小窝", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1511", "m": "1509", "s": "1510"}, "desc": "草地春色套装", "exp": 0, "id": 501, "level": 0, "name": "草地春色背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1514", "m": "1512", "s": "1513"}, "desc": "草地春色套装", "exp": 0, "id": 502, "level": 0, "name": "清水楼阁", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1517", "m": "1515", "s": "1516"}, "desc": "草地春色套装", "exp": 0, "id": 503, "level": 0, "name": "水木围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1520", "m": "1518", "s": "1519"}, "desc": "草地春色套装", "exp": 0, "id": 504, "level": 0, "name": "和煦小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1523", "m": "1521", "s": "1522"}, "desc": "星花斑斓套装", "exp": 0, "id": 505, "level": 0, "name": "星花斑斓背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1526", "m": "1524", "s": "1525"}, "desc": "星花斑斓套装", "exp": 0, "id": 506, "level": 0, "name": "春乐小居", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1529", "m": "1527", "s": "1528"}, "desc": "星花斑斓套装", "exp": 0, "id": 507, "level": 0, "name": "卷花围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1532", "m": "1530", "s": "1531"}, "desc": "星花斑斓套装", "exp": 0, "id": 508, "level": 0, "name": "童话小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "1535", "m": "1533", "s": "1534"}, "desc": "海底迷情套装", "exp": 600, "id": 509, "level": 0, "name": "海底迷情", "price": 30000, "type": 1, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "1538", "m": "1536", "s": "1537"}, "desc": "海底迷情套装", "exp": 500, "id": 510, "level": 0, "name": "海螺居", "price": 25000, "type": 2, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1541", "m": "1539", "s": "1540"}, "desc": "海底迷情套装", "exp": 300, "id": 511, "level": 0, "name": "迷情围栏", "price": 15000, "type": 3, "valid": 16070400},
			{"FBPrice": 35, "YFBPrice": 28, "asset_id": {"b": "1544", "m": "1542", "s": "1543"}, "desc": "海底迷情套装", "exp": 260, "id": 512, "level": 0, "name": "龟壳小窝", "price": 13000, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1547", "m": "1545", "s": "1546"}, "desc": "精灵之树套装", "exp": 0, "id": 513, "level": 0, "name": "精灵之树", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1550", "m": "1548", "s": "1549"}, "desc": "精灵之树套装", "exp": 0, "id": 514, "level": 0, "name": "精灵小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1553", "m": "1551", "s": "1552"}, "desc": "精灵之树套装", "exp": 0, "id": 515, "level": 0, "name": "蘑菇围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1556", "m": "1554", "s": "1555"}, "desc": "精灵之树套装", "exp": 0, "id": 516, "level": 0, "name": "精灵小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1559", "m": "1557", "s": "1558"}, "desc": "欢乐游园套装", "exp": 96, "id": 517, "level": 0, "name": "欢乐游园背景", "price": 24000, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1562", "m": "1560", "s": "1561"}, "desc": "欢乐游园套装", "exp": 68, "id": 518, "level": 0, "name": "欢乐城堡", "price": 17000, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1565", "m": "1563", "s": "1564"}, "desc": "欢乐游园套装", "exp": 40, "id": 519, "level": 0, "name": "绿色草圃", "price": 10000, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1568", "m": "1566", "s": "1567"}, "desc": "欢乐游园套装", "exp": 35, "id": 520, "level": 0, "name": "欢乐小窝", "price": 8800, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1571", "m": "1569", "s": "1570"}, "desc": "童话乐园", "exp": 0, "id": 521, "level": 0, "name": "童话乐园背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1574", "m": "1572", "s": "1573"}, "desc": "童话乐园", "exp": 0, "id": 522, "level": 0, "name": "梦幻小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1577", "m": "1575", "s": "1576"}, "desc": "童话乐园", "exp": 0, "id": 523, "level": 0, "name": "粉粉栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1580", "m": "1578", "s": "1579"}, "desc": "童话乐园", "exp": 0, "id": 524, "level": 0, "name": "狗狗小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1583", "m": "1581", "s": "1582"}, "desc": "月球基地", "exp": 0, "id": 525, "level": 0, "name": "月球基地背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1586", "m": "1584", "s": "1585"}, "desc": "月球基地", "exp": 0, "id": 526, "level": 0, "name": "梦幻小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1589", "m": "1587", "s": "1588"}, "desc": "月球基地", "exp": 0, "id": 527, "level": 0, "name": "粉粉栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1592", "m": "1590", "s": "1591"}, "desc": "月球基地", "exp": 0, "id": 528, "level": 0, "name": "狗狗小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1595", "m": "1593", "s": "1594"}, "desc": "激情足球套装", "exp": 0, "id": 529, "level": 0, "name": "激情足球背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1598", "m": "1596", "s": "1597"}, "desc": "激情足球套装", "exp": 0, "id": 530, "level": 0, "name": "激情球房", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1601", "m": "1599", "s": "1600"}, "desc": "激情足球套装", "exp": 0, "id": 531, "level": 0, "name": "特色栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1604", "m": "1602", "s": "1603"}, "desc": "激情足球套装", "exp": 0, "id": 532, "level": 0, "name": "激情球窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1607", "m": "1605", "s": "1606"}, "desc": "龙舟闹端午套装", "exp": 120, "id": 533, "level": 0, "name": "龙舟闹端午背景", "price": 30000, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1610", "m": "1608", "s": "1609"}, "desc": "龙舟闹端午套装", "exp": 72, "id": 534, "level": 0, "name": "端午凉亭", "price": 18000, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1613", "m": "1611", "s": "1612"}, "desc": "龙舟闹端午套装", "exp": 36, "id": 535, "level": 0, "name": "古木栅栏", "price": 9000, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1616", "m": "1614", "s": "1615"}, "desc": "龙舟闹端午套装", "exp": 24, "id": 536, "level": 0, "name": "古木小窝", "price": 6000, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1619", "m": "1617", "s": "1618"}, "desc": "巴西风情套装", "exp": 0, "id": 537, "level": 0, "name": "巴西风光", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1622", "m": "1620", "s": "1621"}, "desc": "巴西风情套装", "exp": 0, "id": 538, "level": 0, "name": "巴西酒吧", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1625", "m": "1623", "s": "1624"}, "desc": "巴西风情套装", "exp": 0, "id": 539, "level": 0, "name": "木栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1628", "m": "1626", "s": "1627"}, "desc": "巴西风情套装", "exp": 0, "id": 540, "level": 0, "name": "酒吧狗窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1631", "m": "1629", "s": "1630"}, "desc": "马尔代夫风情套装", "exp": 0, "id": 541, "level": 0, "name": "马尔代夫", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1634", "m": "1632", "s": "1633"}, "desc": "马尔代夫风情套装", "exp": 0, "id": 542, "level": 0, "name": "海中别墅", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1637", "m": "1635", "s": "1636"}, "desc": "马尔代夫风情套装", "exp": 0, "id": 543, "level": 0, "name": "海中围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1640", "m": "1638", "s": "1639"}, "desc": "马尔代夫风情套装", "exp": 0, "id": 544, "level": 0, "name": "海中小屋", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "1643", "m": "1641", "s": "1642"}, "desc": "浪漫山谷套装", "exp": 346, "id": 545, "level": 0, "name": "浪漫山谷", "price": 16888, "type": 1, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "1646", "m": "1644", "s": "1645"}, "desc": "浪漫山谷套装", "exp": 240, "id": 546, "level": 0, "name": "谷中小屋", "price": 11888, "type": 2, "valid": 16070400},
			{"FBPrice": 28, "YFBPrice": 22, "asset_id": {"b": "1649", "m": "1647", "s": "1648"}, "desc": "浪漫山谷套装", "exp": 144, "id": 547, "level": 0, "name": "浪漫拱栏", "price": 7188, "type": 3, "valid": 16070400},
			{"FBPrice": 22, "YFBPrice": 18, "asset_id": {"b": "1652", "m": "1650", "s": "1651"}, "desc": "浪漫山谷套装", "exp": 115, "id": 548, "level": 0, "name": "谷中狗舍", "price": 5888, "type": 4, "valid": 16070400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "1655", "m": "1653", "s": "1654"}, "desc": "疯狂足球世界套装", "exp": 400, "id": 549, "level": 0, "name": "疯狂足球场背景", "price": 60000, "type": 1, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "1658", "m": "1656", "s": "1657"}, "desc": "疯狂足球世界套装", "exp": 300, "id": 550, "level": 0, "name": "足球鞋房子", "price": 46000, "type": 2, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1661", "m": "1659", "s": "1660"}, "desc": "疯狂足球世界套装", "exp": 200, "id": 551, "level": 0, "name": "彩旗栅栏", "price": 30000, "type": 3, "valid": 16070400},
			{"FBPrice": 26, "YFBPrice": 20, "asset_id": {"b": "1664", "m": "1662", "s": "1663"}, "desc": "疯狂足球世界套装", "exp": 130, "id": 552, "level": 0, "name": "足球狗屋", "price": 20000, "type": 4, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "1667", "m": "1665", "s": "1666"}, "desc": "沙城风情背景套装", "exp": 300, "id": 553, "level": 0, "name": "沙城风情背景", "price": 49999, "type": 1, "valid": 16070400},
			{"FBPrice": 44, "YFBPrice": 35, "asset_id": {"b": "1670", "m": "1668", "s": "1669"}, "desc": "沙城风情背景套装", "exp": 220, "id": 554, "level": 0, "name": "沙城小屋", "price": 35999, "type": 2, "valid": 16070400},
			{"FBPrice": 24, "YFBPrice": 20, "asset_id": {"b": "1673", "m": "1671", "s": "1672"}, "desc": "沙城风情背景套装", "exp": 120, "id": 555, "level": 0, "name": "沙城栅栏", "price": 19999, "type": 3, "valid": 16070400},
			{"FBPrice": 20, "YFBPrice": 16, "asset_id": {"b": "1676", "m": "1674", "s": "1675"}, "desc": "沙城风情背景套装", "exp": 100, "id": 556, "level": 0, "name": "沙城狗窝", "price": 15999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1679", "m": "1677", "s": "1678"}, "desc": "荷塘月色套装", "exp": 0, "id": 557, "level": 0, "name": "荷塘月色背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1682", "m": "1680", "s": "1681"}, "desc": "荷塘月色套装", "exp": 0, "id": 558, "level": 0, "name": "月下凉亭", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1685", "m": "1683", "s": "1684"}, "desc": "荷塘月色套装", "exp": 0, "id": 559, "level": 0, "name": "红木古栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1688", "m": "1686", "s": "1687"}, "desc": "荷塘月色套装", "exp": 0, "id": 560, "level": 0, "name": "月色小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 120, "YFBPrice": 96, "asset_id": {"b": "1930", "m": "1928", "s": "1929"}, "desc": "傣族风情背景", "exp": 600, "id": 561, "level": 0, "name": "傣族风情背景", "price": 99999, "type": 1, "valid": 16070400},
			{"FBPrice": 88, "YFBPrice": 70, "asset_id": {"b": "1933", "m": "1931", "s": "1932"}, "desc": "傣族竹楼", "exp": 440, "id": 562, "level": 0, "name": "傣族竹楼", "price": 71999, "type": 2, "valid": 16070400},
			{"FBPrice": 48, "YFBPrice": 40, "asset_id": {"b": "1936", "m": "1934", "s": "1935"}, "desc": "傣族竹栏", "exp": 240, "id": 563, "level": 0, "name": "傣族竹栏", "price": 39999, "type": 3, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1939", "m": "1937", "s": "1938"}, "desc": "傣族竹窝", "exp": 200, "id": 564, "level": 0, "name": "傣族竹窝", "price": 31999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1906", "m": "1904", "s": "1905"}, "desc": "妙趣剪纸", "exp": 0, "id": 565, "level": 0, "name": "妙趣剪纸", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1909", "m": "1907", "s": "1908"}, "desc": "剪纸小屋", "exp": 0, "id": 566, "level": 0, "name": "剪纸小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1912", "m": "1910", "s": "1911"}, "desc": "别针围栏", "exp": 0, "id": 567, "level": 0, "name": "别针围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1915", "m": "1913", "s": "1914"}, "desc": "剪纸小窝", "exp": 0, "id": 568, "level": 0, "name": "剪纸小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1918", "m": "1916", "s": "1917"}, "desc": "左岸咖啡背景", "exp": 0, "id": 569, "level": 0, "name": "左岸咖啡背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1921", "m": "1919", "s": "1920"}, "desc": "咖啡小屋", "exp": 0, "id": 570, "level": 0, "name": "咖啡小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1924", "m": "1922", "s": "1923"}, "desc": "休闲围栏", "exp": 0, "id": 571, "level": 0, "name": "休闲围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1927", "m": "1925", "s": "1926"}, "desc": "休闲小窝", "exp": 0, "id": 572, "level": 0, "name": "休闲小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 72, "YFBPrice": 58, "asset_id": {"b": "2009", "m": "2007", "s": "2008"}, "desc": "神秘星球", "exp": 360, "id": 573, "level": 0, "name": "神秘星球背景", "price": 59999, "type": 1, "valid": 16070400},
			{"FBPrice": 53, "YFBPrice": 42, "asset_id": {"b": "2012", "m": "2010", "s": "2011"}, "desc": "神秘星球", "exp": 264, "id": 574, "level": 0, "name": "星际飞船", "price": 43199, "type": 2, "valid": 16070400},
			{"FBPrice": 29, "YFBPrice": 23, "asset_id": {"b": "2015", "m": "2013", "s": "2014"}, "desc": "神秘星球", "exp": 144, "id": 575, "level": 0, "name": "能量光栅", "price": 23999, "type": 3, "valid": 16070400},
			{"FBPrice": 24, "YFBPrice": 20, "asset_id": {"b": "2018", "m": "2016", "s": "2017"}, "desc": "神秘星球", "exp": 120, "id": 576, "level": 0, "name": "星际狗舍", "price": 19199, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2057", "m": "2055", "s": "2056"}, "desc": "缘分星空", "exp": 0, "id": 577, "level": 0, "name": "缘分星空背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2060", "m": "2058", "s": "2059"}, "desc": "缘分星空", "exp": 0, "id": 578, "level": 0, "name": "梦幻紫屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2063", "m": "2061", "s": "2062"}, "desc": "缘分星空", "exp": 0, "id": 579, "level": 0, "name": "梦幻花栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2066", "m": "2064", "s": "2065"}, "desc": "缘分星空", "exp": 0, "id": 580, "level": 0, "name": "梦幻小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "2072", "m": "2070", "s": "2071"}, "desc": "七夕之恋", "exp": 500, "id": 581, "level": 0, "name": "七夕之恋背景", "price": 79999, "type": 1, "valid": 16070400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "2075", "m": "2073", "s": "2074"}, "desc": "七夕之恋", "exp": 400, "id": 582, "level": 0, "name": "七夕琼楼", "price": 63999, "type": 2, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "2078", "m": "2076", "s": "2077"}, "desc": "七夕之恋", "exp": 350, "id": 583, "level": 0, "name": "七夕石栏", "price": 55999, "type": 3, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "2081", "m": "2079", "s": "2080"}, "desc": "七夕之恋", "exp": 300, "id": 584, "level": 0, "name": "七夕小窝", "price": 47999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2084", "m": "2082", "s": "2083"}, "desc": "白领生活", "exp": 0, "id": 585, "level": 0, "name": "白领生活背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2087", "m": "2085", "s": "2086"}, "desc": "白领生活", "exp": 0, "id": 586, "level": 0, "name": "显示屏小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2090", "m": "2088", "s": "2089"}, "desc": "白领生活", "exp": 0, "id": 587, "level": 0, "name": "铅笔围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2093", "m": "2091", "s": "2092"}, "desc": "白领生活", "exp": 0, "id": 588, "level": 0, "name": "打印机小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2148", "m": "2146", "s": "2147"}, "desc": "非洲风情", "exp": 0, "id": 589, "level": 0, "name": "非洲风情", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2151", "m": "2149", "s": "2150"}, "desc": "非洲风情", "exp": 0, "id": 590, "level": 0, "name": "非洲民居", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2154", "m": "2152", "s": "2153"}, "desc": "非洲风情", "exp": 0, "id": 591, "level": 0, "name": "非洲木栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2157", "m": "2155", "s": "2156"}, "desc": "非洲风情", "exp": 0, "id": 592, "level": 0, "name": "非洲小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2160", "m": "2158", "s": "2159"}, "desc": "印第安风情", "exp": 0, "id": 593, "level": 0, "name": "印第安风情", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2163", "m": "2161", "s": "2162"}, "desc": "印第安风情", "exp": 0, "id": 594, "level": 0, "name": "印第安帐篷", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2166", "m": "2164", "s": "2165"}, "desc": "印第安风情", "exp": 0, "id": 595, "level": 0, "name": "印第安栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2169", "m": "2167", "s": "2168"}, "desc": "印第安风情", "exp": 0, "id": 596, "level": 0, "name": "印第安狗窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 124, "YFBPrice": 99, "asset_id": {"b": "2172", "m": "2170", "s": "2171"}, "desc": "侏罗纪公园", "exp": 625, "id": 597, "level": 0, "name": "侏罗纪公园", "price": 99999, "type": 1, "valid": 16070400},
			{"FBPrice": 110, "YFBPrice": 88, "asset_id": {"b": "2175", "m": "2173", "s": "2174"}, "desc": "侏罗纪公园", "exp": 550, "id": 598, "level": 0, "name": "侏罗纪石屋", "price": 87999, "type": 2, "valid": 16070400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "2178", "m": "2176", "s": "2177"}, "desc": "侏罗纪公园", "exp": 450, "id": 599, "level": 0, "name": "侏罗纪木栏", "price": 71999, "type": 3, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "2181", "m": "2179", "s": "2180"}, "desc": "侏罗纪公园", "exp": 350, "id": 600, "level": 0, "name": "侏罗纪石窝", "price": 55999, "type": 4, "valid": 16070400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "2590", "m": "2588", "s": "2589"}, "desc": "崖顶风情", "exp": 400, "id": 601, "level": 0, "name": "崖顶风情", "price": 63999, "type": 1, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "2593", "m": "2591", "s": "2592"}, "desc": "崖顶风情", "exp": 350, "id": 602, "level": 0, "name": "崖顶古楼", "price": 55999, "type": 2, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "2596", "m": "2594", "s": "2595"}, "desc": "崖顶风情", "exp": 300, "id": 603, "level": 0, "name": "崖顶石栏", "price": 47999, "type": 3, "valid": 16070400},
			{"FBPrice": 50, "YFBPrice": 40, "asset_id": {"b": "2599", "m": "2597", "s": "2598"}, "desc": "崖顶风情", "exp": 250, "id": 604, "level": 0, "name": "崖顶狗舍", "price": 39999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2602", "m": "2600", "s": "2601"}, "desc": "陕北故乡", "exp": 0, "id": 605, "level": 0, "name": "陕北故乡", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2605", "m": "2603", "s": "2604"}, "desc": "陕北故乡", "exp": 0, "id": 606, "level": 0, "name": "陕北民居", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2608", "m": "2606", "s": "2607"}, "desc": "陕北故乡", "exp": 0, "id": 607, "level": 0, "name": "民居栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2611", "m": "2609", "s": "2610"}, "desc": "陕北故乡", "exp": 0, "id": 608, "level": 0, "name": "砖块狗舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2743", "m": "2741", "s": "2742"}, "desc": "科技之城", "exp": 0, "id": 609, "level": 0, "name": "科技之城", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2746", "m": "2744", "s": "2745"}, "desc": "科技之城", "exp": 0, "id": 610, "level": 0, "name": "科技之屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2749", "m": "2747", "s": "2748"}, "desc": "科技之城", "exp": 0, "id": 611, "level": 0, "name": "科技栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2752", "m": "2750", "s": "2751"}, "desc": "科技之城", "exp": 0, "id": 612, "level": 0, "name": "科技小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2755", "m": "2753", "s": "2754"}, "desc": "悠然户外", "exp": 0, "id": 613, "level": 0, "name": "悠然户外", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2758", "m": "2756", "s": "2757"}, "desc": "悠然户外", "exp": 0, "id": 614, "level": 0, "name": "户外房车", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2761", "m": "2759", "s": "2760"}, "desc": "悠然户外", "exp": 0, "id": 615, "level": 0, "name": "户外栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2764", "m": "2762", "s": "2763"}, "desc": "悠然户外", "exp": 0, "id": 616, "level": 0, "name": "户外小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2767", "m": "2765", "s": "2766"}, "desc": "月圆中秋", "exp": 0, "id": 617, "level": 0, "name": "月圆中秋", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2770", "m": "2768", "s": "2769"}, "desc": "月圆中秋", "exp": 0, "id": 618, "level": 0, "name": "月饼小房", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2773", "m": "2771", "s": "2772"}, "desc": "月圆中秋", "exp": 0, "id": 619, "level": 0, "name": "筷子栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2776", "m": "2774", "s": "2775"}, "desc": "月圆中秋", "exp": 0, "id": 620, "level": 0, "name": "月饼小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2823", "m": "2821", "s": "2822"}, "desc": "欢庆国庆", "exp": 0, "id": 621, "level": 0, "name": "欢庆国庆", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2826", "m": "2824", "s": "2825"}, "desc": "欢庆国庆", "exp": 0, "id": 622, "level": 0, "name": "特色天坛", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2829", "m": "2827", "s": "2828"}, "desc": "欢庆国庆", "exp": 0, "id": 623, "level": 0, "name": "喜庆红栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2832", "m": "2830", "s": "2831"}, "desc": "欢庆国庆", "exp": 0, "id": 624, "level": 0, "name": "喜庆狗舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2791", "m": "2789", "s": "2790"}, "desc": "三尺讲台", "exp": 0, "id": 625, "level": 0, "name": "三尺讲台", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2794", "m": "2792", "s": "2793"}, "desc": "三尺讲台", "exp": 0, "id": 626, "level": 0, "name": "粉笔盒屋", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2797", "m": "2795", "s": "2796"}, "desc": "三尺讲台", "exp": 0, "id": 627, "level": 0, "name": "粉笔栅栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2800", "m": "2798", "s": "2799"}, "desc": "三尺讲台", "exp": 0, "id": 628, "level": 0, "name": "粉笔擦窝", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "2811", "m": "2809", "s": "2810"}, "desc": "水涧莲池", "exp": 420, "id": 629, "level": 0, "name": "水涧莲池", "price": 82899, "type": 1, "valid": 16070400},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "2814", "m": "2812", "s": "2813"}, "desc": "水涧莲池", "exp": 320, "id": 630, "level": 0, "name": "水涧石屋", "price": 57599, "type": 2, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "2817", "m": "2815", "s": "2816"}, "desc": "水涧莲池", "exp": 220, "id": 631, "level": 0, "name": "水涧石栏", "price": 34599, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "2820", "m": "2818", "s": "2819"}, "desc": "水涧莲池", "exp": 150, "id": 632, "level": 0, "name": "水涧石窝", "price": 27688, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3352", "m": "3350", "s": "3351"}, "desc": "蒙古风情", "exp": 0, "id": 633, "level": 0, "name": "蒙古风情", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3355", "m": "3353", "s": "3354"}, "desc": "蒙古风情", "exp": 0, "id": 634, "level": 0, "name": "风情蒙古包", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3358", "m": "3356", "s": "3357"}, "desc": "蒙古风情", "exp": 0, "id": 635, "level": 0, "name": "蒙古木栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3361", "m": "3359", "s": "3360"}, "desc": "蒙古风情", "exp": 0, "id": 636, "level": 0, "name": "蒙古犬舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3465", "m": "3463", "s": "3464"}, "desc": "中秋寄情", "exp": 0, "id": 637, "level": 0, "name": "中秋寄情", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3468", "m": "3466", "s": "3467"}, "desc": "中秋寄情", "exp": 0, "id": 638, "level": 0, "name": "月夜花舟", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3471", "m": "3469", "s": "3470"}, "desc": "中秋寄情", "exp": 0, "id": 639, "level": 0, "name": "月夜星栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3474", "m": "3472", "s": "3473"}, "desc": "中秋寄情", "exp": 0, "id": 640, "level": 0, "name": "月夜小窝", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3499", "m": "3497", "s": "3498"}, "desc": "海岛风情", "exp": 0, "id": 641, "level": 0, "name": "海岛风情", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3504", "m": "3502", "s": "3503"}, "desc": "海岛风情", "exp": 0, "id": 642, "level": 0, "name": "海岛小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3508", "m": "3506", "s": "3507"}, "desc": "海岛风情", "exp": 0, "id": 643, "level": 0, "name": "海岛栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3511", "m": "3509", "s": "3510"}, "desc": "海岛风情", "exp": 0, "id": 644, "level": 0, "name": "海岛小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3529", "m": "3527", "s": "3528"}, "desc": "天山雪峰", "exp": 0, "id": 645, "level": 0, "name": "天山雪峰", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3532", "m": "3530", "s": "3531"}, "desc": "天山雪峰", "exp": 0, "id": 646, "level": 0, "name": "天山木屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3535", "m": "3533", "s": "3534"}, "desc": "天山雪峰", "exp": 0, "id": 647, "level": 0, "name": "天山木栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3538", "m": "3536", "s": "3537"}, "desc": "天山雪峰", "exp": 0, "id": 648, "level": 0, "name": "天山木窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3586", "m": "3584", "s": "3585"}, "desc": "重阳寄情", "exp": 0, "id": 649, "level": 0, "name": "重阳寄情", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3589", "m": "3587", "s": "3588"}, "desc": "重阳寄情", "exp": 0, "id": 650, "level": 0, "name": "重阳亭阁", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3592", "m": "3590", "s": "3591"}, "desc": "重阳寄情", "exp": 0, "id": 651, "level": 0, "name": "亭阁石栏 ", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3595", "m": "3593", "s": "3594"}, "desc": "重阳寄情", "exp": 0, "id": 652, "level": 0, "name": "铁鼎小窝 ", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3647", "m": "3645", "s": "3646"}, "desc": "雾林仙境", "exp": 0, "id": 653, "level": 0, "name": "雾林仙境", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3652", "m": "3650", "s": "3651"}, "desc": "雾林仙境", "exp": 0, "id": 654, "level": 0, "name": "雾林树屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3656", "m": "3654", "s": "3655"}, "desc": "雾林仙境", "exp": 0, "id": 655, "level": 0, "name": "雾林围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3659", "m": "3657", "s": "3658"}, "desc": "雾林仙境", "exp": 0, "id": 656, "level": 0, "name": "雾林犬舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "3710", "m": "3708", "s": "3709"}, "desc": "鬼夜传说套装", "exp": 420, "id": 657, "level": 0, "name": "鬼夜传说", "price": 82899, "type": 1, "valid": 16070400},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "3713", "m": "3711", "s": "3712"}, "desc": "鬼夜传说套装", "exp": 320, "id": 658, "level": 0, "name": "鬼夜树屋", "price": 57599, "type": 2, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "3716", "m": "3714", "s": "3715"}, "desc": "鬼夜传说套装", "exp": 220, "id": 659, "level": 0, "name": "鬼夜铁栏", "price": 34599, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "3719", "m": "3717", "s": "3718"}, "desc": "鬼夜传说套装", "exp": 150, "id": 660, "level": 0, "name": "鬼夜杰克窝", "price": 27688, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3734", "m": "3732", "s": "3733"}, "desc": "欢乐万圣节套装", "exp": 0, "id": 661, "level": 0, "name": "欢乐万圣节", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3737", "m": "3735", "s": "3736"}, "desc": "欢乐万圣节套装", "exp": 0, "id": 662, "level": 0, "name": "欢乐南瓜屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3740", "m": "3738", "s": "3739"}, "desc": "欢乐万圣节套装", "exp": 0, "id": 663, "level": 0, "name": "欢乐双排栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3743", "m": "3741", "s": "3742"}, "desc": "欢乐万圣节套装", "exp": 150, "id": 664, "level": 0, "name": "欢乐南瓜窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3746", "m": "3744", "s": "3745"}, "desc": "万圣惊魂夜套装", "exp": 0, "id": 665, "level": 0, "name": "万圣惊魂夜", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3749", "m": "3747", "s": "3748"}, "desc": "万圣惊魂夜套装", "exp": 0, "id": 666, "level": 0, "name": "杰克灯屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3752", "m": "3750", "s": "3751"}, "desc": "万圣惊魂夜套装", "exp": 0, "id": 667, "level": 0, "name": "惊魂铁栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3755", "m": "3753", "s": "3754"}, "desc": "万圣惊魂夜套装", "exp": 0, "id": 668, "level": 0, "name": "南瓜犬舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3862", "m": "3860", "s": "3861"}, "desc": "多彩葫芦套装", "exp": 0, "id": 669, "level": 0, "name": "多彩葫芦", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3865", "m": "3863", "s": "3864"}, "desc": "多彩葫芦套装", "exp": 0, "id": 670, "level": 0, "name": "葫芦小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3868", "m": "3866", "s": "3867"}, "desc": "多彩葫芦套装", "exp": 0, "id": 671, "level": 0, "name": "葫芦栏架", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3871", "m": "3869", "s": "3870"}, "desc": "多彩葫芦套装", "exp": 0, "id": 672, "level": 0, "name": "葫芦犬舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3874", "m": "3872", "s": "3873"}, "desc": "玫瑰庄园套装", "exp": 0, "id": 673, "level": 0, "name": "玫瑰庄园", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3877", "m": "3875", "s": "3876"}, "desc": "玫瑰庄园套装", "exp": 0, "id": 674, "level": 0, "name": "庄园城堡", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3880", "m": "3878", "s": "3879"}, "desc": "玫瑰庄园套装", "exp": 0, "id": 675, "level": 0, "name": "庄园栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3883", "m": "3881", "s": "3882"}, "desc": "玫瑰庄园套装", "exp": 0, "id": 676, "level": 0, "name": "城堡犬舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 124, "YFBPrice": 99, "asset_id": {"b": "3886", "m": "3884", "s": "3885"}, "desc": "异度空间套装", "exp": 625, "id": 677, "level": 0, "name": "异度空间", "price": 99999, "type": 1, "valid": 16070400},
			{"FBPrice": 110, "YFBPrice": 88, "asset_id": {"b": "3889", "m": "3887", "s": "3888"}, "desc": "异度空间套装", "exp": 550, "id": 678, "level": 0, "name": "异度小屋", "price": 87999, "type": 2, "valid": 16070400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "3892", "m": "3890", "s": "3891"}, "desc": "异度空间套装", "exp": 450, "id": 679, "level": 0, "name": "悬梯栅栏", "price": 71999, "type": 3, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "3897", "m": "3895", "s": "3896"}, "desc": "异度空间套装", "exp": 350, "id": 680, "level": 0, "name": "陀螺狗窝", "price": 55999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3997", "m": "3995", "s": "3996"}, "desc": "彩虹之城套装", "exp": 0, "id": 681, "level": 0, "name": "彩虹之城", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4000", "m": "3998", "s": "3999"}, "desc": "彩虹之城套装", "exp": 0, "id": 682, "level": 0, "name": "彩虹神殿", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4003", "m": "4001", "s": "4002"}, "desc": "彩虹之城套装", "exp": 0, "id": 683, "level": 0, "name": "神殿石栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4006", "m": "4004", "s": "4005"}, "desc": "彩虹之城套装", "exp": 0, "id": 684, "level": 0, "name": "神殿狗舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "4009", "m": "4007", "s": "4008"}, "desc": "神秘玛雅套装", "exp": 500, "id": 685, "level": 0, "name": "神秘玛雅", "price": 79999, "type": 1, "valid": 16070400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "4012", "m": "4010", "s": "4011"}, "desc": "神秘玛雅套装", "exp": 400, "id": 686, "level": 0, "name": "丛林帐篷", "price": 63999, "type": 2, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "4015", "m": "4013", "s": "4014"}, "desc": "神秘玛雅套装", "exp": 350, "id": 687, "level": 0, "name": "丛林木栏", "price": 55999, "type": 3, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "4019", "m": "4016", "s": "4017"}, "desc": "神秘玛雅套装", "exp": 300, "id": 688, "level": 0, "name": "帐篷狗舍", "price": 47999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4050", "m": "4048", "s": "4049"}, "desc": "积木之城套装", "exp": 0, "id": 689, "level": 0, "name": "积木之城", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4053", "m": "4051", "s": "4052"}, "desc": "积木之城套装", "exp": 0, "id": 690, "level": 0, "name": "积木小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4056", "m": "4054", "s": "4055"}, "desc": "积木之城套装", "exp": 0, "id": 691, "level": 0, "name": "积木栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4059", "m": "4057", "s": "4058"}, "desc": "积木之城套装", "exp": 0, "id": 692, "level": 0, "name": "积木狗屋", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4062", "m": "4060", "s": "4061"}, "desc": "电视之城套装", "exp": 0, "id": 693, "level": 0, "name": "电视之城", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4065", "m": "4063", "s": "4064"}, "desc": "电视之城套装", "exp": 0, "id": 694, "level": 0, "name": "电视房屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4068", "m": "4066", "s": "4067"}, "desc": "电视之城套装", "exp": 0, "id": 695, "level": 0, "name": "仓库铁栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4071", "m": "4069", "s": "4070"}, "desc": "电视之城套装", "exp": 0, "id": 696, "level": 0, "name": "机器小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4135", "m": "4133", "s": "4134"}, "desc": "极地风情套装", "exp": 0, "id": 697, "level": 0, "name": "极地风情", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4138", "m": "4136", "s": "4137"}, "desc": "极地风情套装", "exp": 0, "id": 698, "level": 0, "name": "极地冰屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4141", "m": "4139", "s": "4140"}, "desc": "极地风情套装", "exp": 0, "id": 699, "level": 0, "name": "极地木栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4144", "m": "4142", "s": "4143"}, "desc": "极地风情套装", "exp": 0, "id": 700, "level": 0, "name": "极地冰窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "4165", "m": "4163", "s": "4164"}, "desc": "布艺之家套装", "exp": 420, "id": 701, "level": 0, "name": "布艺之家", "price": 82899, "type": 1, "valid": 16070400},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "4168", "m": "4166", "s": "4167"}, "desc": "布艺之家套装", "exp": 320, "id": 702, "level": 0, "name": "布艺小屋", "price": 57599, "type": 2, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "4171", "m": "4169", "s": "4170"}, "desc": "布艺之家套装", "exp": 220, "id": 703, "level": 0, "name": "毛毛线团", "price": 34599, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "4174", "m": "4172", "s": "4173"}, "desc": "布艺之家套装", "exp": 150, "id": 704, "level": 0, "name": "布艺小窝", "price": 27688, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4177", "m": "4175", "s": "4176"}, "desc": "幽野仙境套装", "exp": 0, "id": 705, "level": 0, "name": "幽野仙境", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4180", "m": "4178", "s": "4179"}, "desc": "幽野仙境套装", "exp": 0, "id": 706, "level": 0, "name": "幽野小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4183", "m": "4181", "s": "4182"}, "desc": "幽野仙境套装", "exp": 0, "id": 707, "level": 0, "name": "幽野木栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4186", "m": "4184", "s": "4185"}, "desc": "幽野仙境套装", "exp": 0, "id": 708, "level": 0, "name": "幽野狗窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4214", "m": "4212", "s": "4213"}, "desc": "12年相伴套装", "exp": 0, "id": 709, "level": 0, "name": "12年相伴", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4217", "m": "4215", "s": "4216"}, "desc": "12年相伴套装", "exp": 0, "id": 710, "level": 0, "name": "12年相伴", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4220", "m": "4218", "s": "4219"}, "desc": "12年相伴套装", "exp": 0, "id": 711, "level": 0, "name": "红绸围带", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4223", "m": "4221", "s": "4222"}, "desc": "12年相伴套装", "exp": 0, "id": 712, "level": 0, "name": "咖啡杯狗舍", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4237", "m": "4235", "s": "4236"}, "desc": "魔法小屋套装", "exp": 0, "id": 713, "level": 0, "name": "魔法小屋背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4240", "m": "4238", "s": "4239"}, "desc": "魔法小屋套装", "exp": 0, "id": 714, "level": 0, "name": "魔法帽", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4243", "m": "4241", "s": "4242"}, "desc": "魔法小屋", "exp": 0, "id": 715, "level": 0, "name": "魔法流光", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4246", "m": "4244", "s": "4245"}, "desc": "魔法小屋套装", "exp": 0, "id": 716, "level": 0, "name": "魔法水晶", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4277", "m": "4275", "s": "4276"}, "desc": "感恩节套装", "exp": 0, "id": 717, "level": 0, "name": "感恩节背景", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4280", "m": "4278", "s": "4279"}, "desc": "感恩节套装", "exp": 0, "id": 718, "level": 0, "name": "火鸡小屋", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4289", "m": "4287", "s": "4288"}, "desc": "感恩节套装", "exp": 0, "id": 719, "level": 0, "name": "玉米栅栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4292", "m": "4290", "s": "4291"}, "desc": "感恩节套装", "exp": 0, "id": 720, "level": 0, "name": "奶酪狗窝", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4365", "m": "4363", "s": "4364"}, "desc": "时光入口套装", "exp": 0, "id": 721, "level": 0, "name": "时光入口", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4368", "m": "4366", "s": "4367"}, "desc": "时光入口套装", "exp": 0, "id": 722, "level": 0, "name": "时光之镜", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4371", "m": "4369", "s": "4370"}, "desc": "时光入口套装", "exp": 0, "id": 723, "level": 0, "name": "时光围纸", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4374", "m": "4372", "s": "4373"}, "desc": "时光入口套装", "exp": 0, "id": 724, "level": 0, "name": "时光之窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4377", "m": "4375", "s": "4376"}, "desc": "吊桥人家套装", "exp": 0, "id": 725, "level": 0, "name": "吊桥人家", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4380", "m": "4378", "s": "4379"}, "desc": "吊桥人家套装", "exp": 0, "id": 726, "level": 0, "name": "吊桥小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4383", "m": "4381", "s": "4382"}, "desc": "吊桥人家套装", "exp": 0, "id": 727, "level": 0, "name": "吊桥栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4386", "m": "4384", "s": "4385"}, "desc": "吊桥人家套装", "exp": 0, "id": 728, "level": 0, "name": "吊桥狗窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4456", "m": "4454", "s": "4455"}, "desc": "圣诞活动套装", "exp": 0, "id": 729, "level": 0, "name": "圣诞之家", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4459", "m": "4457", "s": "4458"}, "desc": "圣诞活动套装", "exp": 0, "id": 730, "level": 0, "name": "绿顶圣诞屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4462", "m": "4460", "s": "4461"}, "desc": "圣诞活动套装", "exp": 0, "id": 731, "level": 0, "name": "圣诞树栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4472", "m": "4463", "s": "4466"}, "desc": "圣诞活动套装", "exp": 0, "id": 732, "level": 0, "name": "马车狗舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4475", "m": "4473", "s": "4474"}, "desc": "圣诞之夜套装", "exp": 0, "id": 733, "level": 0, "name": "圣诞之夜", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4478", "m": "4476", "s": "4477"}, "desc": "圣诞之夜套装", "exp": 0, "id": 734, "level": 0, "name": "雪顶圣诞屋", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4481", "m": "4479", "s": "4480"}, "desc": "圣诞之夜套装", "exp": 0, "id": 735, "level": 0, "name": "圣诞木栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4484", "m": "4482", "s": "4483"}, "desc": "圣诞之夜", "exp": 0, "id": 736, "level": 0, "name": "圣诞狗舍", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4575", "m": "4573", "s": "4574"}, "desc": "欢乐圣诞套装", "exp": 0, "id": 737, "level": 0, "name": "欢乐圣诞", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4578", "m": "4576", "s": "4577"}, "desc": "欢乐圣诞套装", "exp": 0, "id": 738, "level": 0, "name": "圣诞摇摇屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4581", "m": "4579", "s": "4580"}, "desc": "欢乐圣诞套装", "exp": 0, "id": 739, "level": 0, "name": "圣诞花栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4584", "m": "4582", "s": "4583"}, "desc": "欢乐圣诞套装", "exp": 0, "id": 740, "level": 0, "name": "飘雪狗舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4587", "m": "4585", "s": "4586"}, "desc": "兔子小镇套装", "exp": 0, "id": 741, "level": 0, "name": "兔子小镇", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4590", "m": "4588", "s": "4589"}, "desc": "兔子小镇套装", "exp": 0, "id": 742, "level": 0, "name": "橙顶兔屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4593", "m": "4591", "s": "4592"}, "desc": "兔子小镇套装", "exp": 0, "id": 743, "level": 0, "name": "胡萝卜栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4596", "m": "4594", "s": "4595"}, "desc": "兔子小镇套装", "exp": 0, "id": 744, "level": 0, "name": "欢乐犬舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4635", "m": "4633", "s": "4634"}, "desc": "欢庆元旦套装", "exp": 0, "id": 745, "level": 0, "name": "欢庆元旦", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4638", "m": "4636", "s": "4637"}, "desc": "欢庆元旦套装", "exp": 0, "id": 746, "level": 0, "name": "喜乐鼓屋", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4641", "m": "4639", "s": "4640"}, "desc": "欢庆元旦套装", "exp": 0, "id": 747, "level": 0, "name": "喜乐绸栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4644", "m": "4642", "s": "4643"}, "desc": "欢庆元旦套装", "exp": 0, "id": 748, "level": 0, "name": "喜乐鼓窝", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4647", "m": "4645", "s": "4646"}, "desc": "元旦夜市套装", "exp": 0, "id": 749, "level": 0, "name": "新年夜市背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4650", "m": "4648", "s": "4649"}, "desc": "元旦夜市套装", "exp": 0, "id": 750, "level": 0, "name": "对联摊位", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4653", "m": "4651", "s": "4652"}, "desc": "元旦夜市套装", "exp": 0, "id": 751, "level": 0, "name": "对联围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4656", "m": "4654", "s": "4655"}, "desc": "元旦夜市套装", "exp": 0, "id": 752, "level": 0, "name": "夜市狗舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4659", "m": "4657", "s": "4658"}, "desc": "元旦快乐套装", "exp": 0, "id": 753, "level": 0, "name": "元旦快乐", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4662", "m": "4660", "s": "4661"}, "desc": "元旦快乐套装", "exp": 0, "id": 754, "level": 0, "name": "快乐年历", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4665", "m": "4663", "s": "4664"}, "desc": "元旦快乐套装", "exp": 0, "id": 755, "level": 0, "name": "窗台绿栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4668", "m": "4666", "s": "4667"}, "desc": "元旦快乐套装", "exp": 0, "id": 756, "level": 0, "name": "兔形狗舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4763", "m": "4761", "s": "4762"}, "desc": "青春的回忆套装", "exp": 0, "id": 757, "level": 0, "name": "青春的回忆", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4766", "m": "4764", "s": "4765"}, "desc": "青春的回忆套装", "exp": 0, "id": 758, "level": 0, "name": "积木城堡", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4769", "m": "4767", "s": "4768"}, "desc": "青春的回忆套装", "exp": 0, "id": 759, "level": 0, "name": "弹珠围栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4772", "m": "4770", "s": "4771"}, "desc": "青春的回忆套装", "exp": 0, "id": 760, "level": 0, "name": "魔方狗舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4831", "m": "4829", "s": "4830"}, "desc": "冬日雪夜套装", "exp": 0, "id": 761, "level": 0, "name": "冬日雪夜", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4834", "m": "4832", "s": "4833"}, "desc": "冬日雪夜套装", "exp": 0, "id": 762, "level": 0, "name": "雪夜暖屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4837", "m": "4835", "s": "4836"}, "desc": "冬日雪夜套装", "exp": 0, "id": 763, "level": 0, "name": "雪夜栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4840", "m": "4838", "s": "4839"}, "desc": "冬日雪夜套装", "exp": 0, "id": 764, "level": 0, "name": "雪夜暖屋", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4849", "m": "4847", "s": "4848"}, "desc": "年夜饭套装", "exp": 0, "id": 765, "level": 0, "name": "年夜饭背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4852", "m": "4850", "s": "4851"}, "desc": "年夜饭套装", "exp": 0, "id": 766, "level": 0, "name": "年夜饭桌", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4855", "m": "4853", "s": "4854"}, "desc": "年夜饭套装", "exp": 0, "id": 767, "level": 0, "name": "新年福毯", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4858", "m": "4856", "s": "4857"}, "desc": "年夜饭套装", "exp": 0, "id": 768, "level": 0, "name": "虎娃玩偶", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 120, "YFBPrice": 96, "asset_id": {"b": "4861", "m": "4859", "s": "4860"}, "desc": "白雪皑皑套状", "exp": 600, "id": 769, "level": 0, "name": "白雪皑皑", "price": 99999, "type": 1, "valid": 16070400},
			{"FBPrice": 88, "YFBPrice": 70, "asset_id": {"b": "4864", "m": "4862", "s": "4863"}, "desc": "白雪皑皑套状", "exp": 440, "id": 770, "level": 0, "name": "雪日素屋", "price": 71999, "type": 2, "valid": 16070400},
			{"FBPrice": 48, "YFBPrice": 40, "asset_id": {"b": "4867", "m": "4865", "s": "4866"}, "desc": "白雪皑皑套状", "exp": 240, "id": 771, "level": 0, "name": "素屋栅栏", "price": 39999, "type": 3, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "4870", "m": "4868", "s": "4869"}, "desc": "白雪皑皑套状", "exp": 200, "id": 772, "level": 0, "name": "雪日素窝", "price": 31999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5036", "m": "5034", "s": "5035"}, "desc": "爱琴海之恋套装", "exp": 0, "id": 773, "level": 0, "name": "爱琴海之恋", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5039", "m": "5037", "s": "5038"}, "desc": "爱琴海之恋套装", "exp": 0, "id": 774, "level": 0, "name": "情侣餐桌", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5042", "m": "5040", "s": "5041"}, "desc": "爱琴海之恋套装", "exp": 0, "id": 775, "level": 0, "name": "爱琴海花栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5045", "m": "5043", "s": "5044"}, "desc": "爱琴海之恋套装", "exp": 0, "id": 776, "level": 0, "name": "浪漫推车", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5048", "m": "5046", "s": "5047"}, "desc": "喜庆迎春套装", "exp": 0, "id": 777, "level": 0, "name": "喜庆迎春", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5051", "m": "5049", "s": "5050"}, "desc": "喜庆迎春套装", "exp": 0, "id": 778, "level": 0, "name": "喜庆房舍", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5054", "m": "5052", "s": "5053"}, "desc": "喜庆迎春套装", "exp": 0, "id": 779, "level": 0, "name": "喜庆栅栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5057", "m": "5055", "s": "5056"}, "desc": "喜庆迎春套装", "exp": 0, "id": 780, "level": 0, "name": "喜庆狗舍", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5190", "m": "5188", "s": "5189"}, "desc": "甜蜜蜜套装", "exp": 0, "id": 781, "level": 0, "name": "甜蜜餐桌", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5193", "m": "5191", "s": "5192"}, "desc": "甜蜜蜜套装", "exp": 0, "id": 782, "level": 0, "name": "甜蜜巧克力", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5196", "m": "5194", "s": "5195"}, "desc": "甜蜜蜜套装", "exp": 0, "id": 783, "level": 0, "name": "甜蜜玫瑰", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5199", "m": "5197", "s": "5198"}, "desc": "甜蜜蜜套装", "exp": 0, "id": 784, "level": 0, "name": "甜蜜饼舍", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5202", "m": "5200", "s": "5201"}, "desc": "婚礼的祝福套装", "exp": 0, "id": 785, "level": 0, "name": "婚礼的祝福", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5205", "m": "5203", "s": "5204"}, "desc": "婚礼的祝福套装", "exp": 0, "id": 786, "level": 0, "name": "婚礼教堂", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5208", "m": "5206", "s": "5207"}, "desc": "婚礼的祝福套装", "exp": 0, "id": 787, "level": 0, "name": "礼花围栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5211", "m": "5209", "s": "5210"}, "desc": "婚礼的祝福套装", "exp": 0, "id": 788, "level": 0, "name": "婚礼狗舍", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5214", "m": "5212", "s": "5213"}, "desc": "欢乐元宵套装", "exp": 0, "id": 789, "level": 0, "name": "欢乐元宵", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5217", "m": "5215", "s": "5216"}, "desc": "欢乐元宵套装", "exp": 0, "id": 790, "level": 0, "name": "元宵花灯", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5220", "m": "5218", "s": "5219"}, "desc": "欢乐元宵套装", "exp": 0, "id": 791, "level": 0, "name": "元宵栅栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5223", "m": "5221", "s": "5222"}, "desc": "欢乐元宵套装", "exp": 0, "id": 792, "level": 0, "name": "花灯狗舍", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5457", "m": "5455", "s": "5456"}, "desc": "爱的梳妆套装", "exp": 0, "id": 793, "level": 0, "name": "爱的梳妆", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5460", "m": "5458", "s": "5459"}, "desc": "爱的梳妆套装", "exp": 0, "id": 794, "level": 0, "name": "动人音乐盒", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5463", "m": "5461", "s": "5462"}, "desc": "爱的梳妆套装", "exp": 0, "id": 795, "level": 0, "name": "迷人珍珠链", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5466", "m": "5464", "s": "5465"}, "desc": "爱的梳妆套装", "exp": 0, "id": 796, "level": 0, "name": "魅惑香水", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 50, "YFBPrice": 40, "asset_id": {"b": "6357", "m": "6355", "s": "6356"}, "desc": "飞车套装", "exp": 288, "id": 797, "level": 0, "name": "飞车时空背景", "price": 14499, "type": 1, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "6360", "m": "6358", "s": "6359"}, "desc": "飞车套装", "exp": 200, "id": 798, "level": 0, "name": "飞车巴士", "price": 9999, "type": 2, "valid": 16070400},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "6363", "m": "6361", "s": "6362"}, "desc": "飞车套装", "exp": 120, "id": 799, "level": 0, "name": "飞车围栏", "price": 5999, "type": 3, "valid": 16070400},
			{"FBPrice": 20, "YFBPrice": 16, "asset_id": {"b": "6366", "m": "6364", "s": "6365"}, "desc": "飞车套装", "exp": 96, "id": 800, "level": 0, "name": "飞车狗窝", "price": 4999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6313", "m": "6311", "s": "6312"}, "desc": "绿色家园套装", "exp": 0, "id": 801, "level": 0, "name": "绿色家园", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6316", "m": "6314", "s": "6315"}, "desc": "绿色家园套装", "exp": 0, "id": 802, "level": 0, "name": "绿色树屋", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6319", "m": "6317", "s": "6318"}, "desc": "绿色家园套装", "exp": 0, "id": 803, "level": 0, "name": "绿色栅栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6322", "m": "6320", "s": "6321"}, "desc": "绿色家园套装", "exp": 0, "id": 804, "level": 0, "name": "树桩狗舍", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6613", "m": "6611", "s": "6612"}, "desc": "火车之家套装", "exp": 0, "id": 805, "level": 0, "name": "火车之家", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6616", "m": "6614", "s": "6615"}, "desc": "火车之家套装", "exp": 0, "id": 806, "level": 0, "name": "老式火车头", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6619", "m": "6617", "s": "6618"}, "desc": "火车之家套装", "exp": 0, "id": 807, "level": 0, "name": "火车栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6622", "m": "6620", "s": "6621"}, "desc": "火车之家套装", "exp": 0, "id": 808, "level": 0, "name": "车厢狗窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "6625", "m": "6623", "s": "6624"}, "desc": "海底晶矿套装", "exp": 400, "id": 809, "level": 0, "name": "海底晶矿", "price": 60000, "type": 1, "valid": 2678400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "6627", "m": "6628", "s": "6626"}, "desc": "海底晶矿套装", "exp": 300, "id": 810, "level": 0, "name": "晶矿小屋", "price": 46000, "type": 2, "valid": 2678400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "6631", "m": "6629", "s": "6630"}, "desc": "海底晶矿套装", "exp": 200, "id": 811, "level": 0, "name": "晶矿栅栏", "price": 30000, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6634", "m": "6632", "s": "6633"}, "desc": "海底晶矿套装", "exp": 0, "id": 812, "level": 0, "name": "晶矿小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6766", "m": "6764", "s": "6765"}, "desc": "愚人节快乐套装", "exp": 0, "id": 813, "level": 0, "name": "愚人节快乐", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6769", "m": "6767", "s": "6768"}, "desc": "愚人节快乐套装", "exp": 0, "id": 814, "level": 0, "name": "愚人小丑盒", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6772", "m": "6770", "s": "6771"}, "desc": "愚人节快乐套装", "exp": 0, "id": 815, "level": 0, "name": "彩球栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "6775", "m": "6773", "s": "6774"}, "desc": "愚人节快乐套装", "exp": 0, "id": 816, "level": 0, "name": "愚人娃娃窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 72, "YFBPrice": 58, "asset_id": {"b": "6778", "m": "6776", "s": "6777"}, "desc": "马戏团之家套装", "exp": 360, "id": 817, "level": 0, "name": "马戏团之家", "price": 59999, "type": 1, "valid": 16070400},
			{"FBPrice": 53, "YFBPrice": 42, "asset_id": {"b": "6781", "m": "6779", "s": "6780"}, "desc": "马戏团之家套装", "exp": 264, "id": 818, "level": 0, "name": "小丑马戏房", "price": 43199, "type": 2, "valid": 16070400},
			{"FBPrice": 29, "YFBPrice": 23, "asset_id": {"b": "6784", "m": "6782", "s": "6783"}, "desc": "马戏团之家套装", "exp": 144, "id": 819, "level": 0, "name": "棒棒糖栅栏", "price": 23999, "type": 3, "valid": 16070400},
			{"FBPrice": 24, "YFBPrice": 20, "asset_id": {"b": "6787", "m": "6785", "s": "6786"}, "desc": "马戏团之家套装", "exp": 120, "id": 820, "level": 0, "name": "马戏小窝", "price": 19199, "type": 4, "valid": 16070400},
			{"FBPrice": 120, "YFBPrice": 96, "asset_id": {"b": "7001", "m": "6999", "s": "7000"}, "desc": "空岛民居套装", "exp": 600, "id": 821, "level": 0, "name": "空岛民居", "price": 99999, "type": 1, "valid": 16070400},
			{"FBPrice": 88, "YFBPrice": 70, "asset_id": {"b": "7004", "m": "7002", "s": "7003"}, "desc": "空岛民居套装", "exp": 440, "id": 822, "level": 0, "name": "民居小房", "price": 71999, "type": 2, "valid": 16070400},
			{"FBPrice": 48, "YFBPrice": 40, "asset_id": {"b": "7007", "m": "7005", "s": "7006"}, "desc": "空岛民居套装", "exp": 240, "id": 823, "level": 0, "name": "民居栅栏", "price": 39999, "type": 3, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "7010", "m": "7008", "s": "7009"}, "desc": "空岛民居套装", "exp": 200, "id": 824, "level": 0, "name": "民居狗窝", "price": 31999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7013", "m": "7011", "s": "7012"}, "desc": "荷花岛套装", "exp": 0, "id": 825, "level": 0, "name": "荷花岛", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7016", "m": "7014", "s": "7015"}, "desc": "荷花岛套装", "exp": 0, "id": 826, "level": 0, "name": "荷花岛居", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7019", "m": "7017", "s": "7018"}, "desc": "荷花岛套装", "exp": 0, "id": 827, "level": 0, "name": "岛居栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7022", "m": "7020", "s": "7021"}, "desc": "荷花岛套装", "exp": 0, "id": 828, "level": 0, "name": "荷花岛窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7118", "m": "7116", "s": "7117"}, "desc": "沙漠绿洲套装", "exp": 0, "id": 829, "level": 0, "name": "沙漠绿洲", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7121", "m": "7119", "s": "7120"}, "desc": "沙漠绿洲套装", "exp": 0, "id": 830, "level": 0, "name": "绿洲驿站", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7124", "m": "7122", "s": "7123"}, "desc": "沙漠绿洲套装", "exp": 0, "id": 831, "level": 0, "name": "驿站栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7127", "m": "7125", "s": "7126"}, "desc": "沙漠绿洲套装", "exp": 0, "id": 832, "level": 0, "name": "驿站小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7130", "m": "7128", "s": "7129"}, "desc": "农场两周年套装", "exp": 0, "id": 833, "level": 0, "name": "农场两周年背景", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7133", "m": "7131", "s": "7132"}, "desc": "农场两周年套装", "exp": 0, "id": 834, "level": 0, "name": "菜园子小屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7136", "m": "7134", "s": "7135"}, "desc": "农场两周年套装", "exp": 0, "id": 835, "level": 0, "name": "木纹栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7139", "m": "7137", "s": "7138"}, "desc": "农场两周年套装", "exp": 0, "id": 836, "level": 0, "name": "谷仓狗窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 72, "YFBPrice": 58, "asset_id": {"b": "7144", "m": "7142", "s": "7143"}, "desc": "生日快乐套装", "exp": 360, "id": 837, "level": 0, "name": "生日快乐", "price": 59999, "type": 1, "valid": 16070400},
			{"FBPrice": 53, "YFBPrice": 42, "asset_id": {"b": "7147", "m": "7145", "s": "7146"}, "desc": "生日快乐套装", "exp": 264, "id": 838, "level": 0, "name": "蛋糕小屋", "price": 43199, "type": 2, "valid": 16070400},
			{"FBPrice": 29, "YFBPrice": 23, "asset_id": {"b": "7150", "m": "7148", "s": "7149"}, "desc": "生日快乐套装", "exp": 144, "id": 839, "level": 0, "name": "彩纸栅栏", "price": 23999, "type": 3, "valid": 16070400},
			{"FBPrice": 24, "YFBPrice": 20, "asset_id": {"b": "7153", "m": "7151", "s": "7152"}, "desc": "生日快乐套装", "exp": 120, "id": 840, "level": 0, "name": "彩盒小窝", "price": 19199, "type": 4, "valid": 16070400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "7554", "m": "7552", "s": "7553"}, "desc": "秘密花园套装", "exp": 500, "id": 841, "level": 0, "name": "秘密花园", "price": 79999, "type": 1, "valid": 16070400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "7551", "m": "7549", "s": "7550"}, "desc": "秘密花园套装", "exp": 400, "id": 842, "level": 0, "name": "紫瓦小屋", "price": 63999, "type": 2, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "7557", "m": "7555", "s": "7556"}, "desc": "秘密花园套装", "exp": 350, "id": 843, "level": 0, "name": "粉桩栅栏", "price": 55999, "type": 3, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "7560", "m": "7558", "s": "7559"}, "desc": "秘密花园套装", "exp": 300, "id": 844, "level": 0, "name": "紫瓦小窝", "price": 47999, "type": 4, "valid": 16070400},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "7569", "m": "7567", "s": "7568"}, "desc": "阿拉伯传说套装", "exp": 420, "id": 845, "level": 0, "name": "阿拉伯传说", "price": 82899, "type": 1, "valid": 16070400},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "7566", "m": "7564", "s": "7565"}, "desc": "阿拉伯传说套装", "exp": 320, "id": 846, "level": 0, "name": "飞空神毯", "price": 57599, "type": 2, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "7572", "m": "7570", "s": "7571"}, "desc": "阿拉伯传说套装", "exp": 220, "id": 847, "level": 0, "name": "浮空灯栏", "price": 34599, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "7575", "m": "7573", "s": "7574"}, "desc": "阿拉伯传说套装", "exp": 150, "id": 848, "level": 0, "name": "阿拉丁神灯", "price": 27688, "type": 4, "valid": 16070400},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "8008", "m": "8006", "s": "8007"}, "desc": "蘑菇森林套装", "exp": 420, "id": 849, "level": 0, "name": "蘑菇森林", "price": 82899, "type": 1, "valid": 16070400},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "8011", "m": "8009", "s": "8010"}, "desc": "红顶菇房", "exp": 420, "id": 850, "level": 0, "name": "红顶菇房", "price": 82899, "type": 2, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "8014", "m": "8012", "s": "8013"}, "desc": "白菇围栏", "exp": 220, "id": 851, "level": 0, "name": "白菇围栏", "price": 34599, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "8160", "m": "8158", "s": "8159"}, "desc": "红顶菇窝", "exp": 150, "id": 852, "level": 0, "name": "红顶菇窝", "price": 27688, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7367", "m": "7365", "s": "7366"}, "desc": "深圳大运会套装", "exp": 0, "id": 853, "level": 0, "name": "深圳大运会背景", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7367", "m": "7365", "s": "7366"}, "desc": "深圳大运会套装", "exp": 0, "id": 853, "level": 0, "name": "深圳大运会背景", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7370", "m": "7368", "s": "7369"}, "desc": "深圳大运会套装", "exp": 0, "id": 854, "level": 0, "name": "深圳大运会场馆", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7373", "m": "7371", "s": "7372"}, "desc": "深圳大运会套装", "exp": 0, "id": 855, "level": 0, "name": "深圳大运会火炬", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "7376", "m": "7374", "s": "7375"}, "desc": "深圳大运会套装", "exp": 0, "id": 856, "level": 0, "name": "深圳大运中转站", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 120, "YFBPrice": 96, "asset_id": {"b": "7996", "m": "7994", "s": "7995"}, "desc": "温暖蜗居套装", "exp": 600, "id": 857, "level": 0, "name": "温暖蜗居", "price": 99999, "type": 1, "valid": 16070400},
			{"FBPrice": 88, "YFBPrice": 70, "asset_id": {"b": "7999", "m": "7997", "s": "7998"}, "desc": "蜗牛壳房子", "exp": 440, "id": 858, "level": 0, "name": "蜗牛壳房子", "price": 71999, "type": 2, "valid": 16070400},
			{"FBPrice": 48, "YFBPrice": 40, "asset_id": {"b": "8002", "m": "8000", "s": "8001"}, "desc": "小碎石围栏", "exp": 240, "id": 859, "level": 0, "name": "小碎石围栏", "price": 39999, "type": 3, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "8005", "m": "8003", "s": "8004"}, "desc": "小绿叶狗屋", "exp": 200, "id": 860, "level": 0, "name": "小绿叶狗屋", "price": 31999, "type": 4, "valid": 16070400},
			{"FBPrice": 124, "YFBPrice": 99, "asset_id": {"b": "8272", "m": "8270", "s": "8271"}, "desc": "竹屋映画套装", "exp": 625, "id": 861, "level": 0, "name": "竹屋映画", "price": 99999, "type": 1, "valid": 16070400},
			{"FBPrice": 110, "YFBPrice": 88, "asset_id": {"b": "8275", "m": "8273", "s": "8274"}, "desc": "熊猫竹屋", "exp": 550, "id": 862, "level": 0, "name": "熊猫竹屋", "price": 87999, "type": 2, "valid": 16070400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "8278", "m": "8276", "s": "8277"}, "desc": "竹筒栅栏", "exp": 450, "id": 863, "level": 0, "name": "竹筒栅栏", "price": 71999, "type": 3, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "8281", "m": "8279", "s": "8280"}, "desc": "竹筒狗屋", "exp": 350, "id": 864, "level": 0, "name": "竹筒狗屋", "price": 55999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8017", "m": "8015", "s": "8016"}, "desc": "活力UU套装", "exp": 0, "id": 865, "level": 0, "name": "活力UU", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8020", "m": "8018", "s": "8019"}, "desc": "大运会颁奖台", "exp": 0, "id": 866, "level": 0, "name": "大运会颁奖台", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8023", "m": "8021", "s": "8022"}, "desc": "UU栅栏", "exp": 0, "id": 867, "level": 0, "name": "UU栅栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8026", "m": "8024", "s": "8025"}, "desc": "活力火炬", "exp": 0, "id": 868, "level": 0, "name": "活力火炬", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8366", "m": "8364", "s": "8365"}, "desc": "仙境城堡", "exp": 0, "id": 869, "level": 0, "name": "仙境城堡", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8369", "m": "8367", "s": "8368"}, "desc": "彩瓦城堡", "exp": 0, "id": 870, "level": 0, "name": "彩瓦城堡", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8372", "m": "8370", "s": "8371"}, "desc": "多彩铁栏", "exp": 0, "id": 871, "level": 0, "name": "多彩铁栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8375", "m": "8373", "s": "8374"}, "desc": "红瓦骨头窝", "exp": 0, "id": 872, "level": 0, "name": "红瓦骨头窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8562", "m": "8560", "s": "8561"}, "desc": "星空云雾", "exp": 0, "id": 873, "level": 0, "name": "星空云雾", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8565", "m": "8563", "s": "8564"}, "desc": "红锦喜鹊桥", "exp": 0, "id": 874, "level": 0, "name": "红锦喜鹊桥", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8568", "m": "8566", "s": "8567"}, "desc": "红锦连绵", "exp": 0, "id": 875, "level": 0, "name": "红锦连绵", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "8571", "m": "8569", "s": "8570"}, "desc": "荷花灯座", "exp": 0, "id": 876, "level": 0, "name": "荷花灯座", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "9034", "m": "9032", "s": "9033"}, "desc": "中秋赏花", "exp": 500, "id": 877, "isNew": 0, "level": 0, "name": "中秋赏花", "price": 79999, "type": 1, "valid": 16070400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "9037", "m": "9035", "s": "9036"}, "desc": "月饼礼盒", "exp": 400, "id": 878, "isNew": 0, "level": 0, "name": "月饼礼盒", "price": 63999, "type": 2, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "9040", "m": "9038", "s": "9039"}, "desc": "礼珠围栏", "exp": 350, "id": 879, "isNew": 0, "level": 0, "name": "礼珠围栏", "price": 55999, "type": 3, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "9043", "m": "9041", "s": "9042"}, "desc": "月兔花灯", "exp": 300, "id": 880, "isNew": 0, "level": 0, "name": "月兔花灯", "price": 47999, "type": 4, "valid": 16070400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "9674", "m": "9672", "s": "9673"}, "desc": "举国欢庆", "exp": 500, "id": 881, "isNew": 0, "level": 0, "name": "举国欢庆", "price": 79999, "type": 1, "valid": 16070400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "9677", "m": "9675", "s": "9676"}, "desc": "欢腾座雕", "exp": 400, "id": 882, "isNew": 0, "level": 0, "name": "欢腾座雕", "price": 63999, "type": 2, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "9680", "m": "9678", "s": "9679"}, "desc": "欢腾彩绸", "exp": 350, "id": 883, "isNew": 0, "level": 0, "name": "欢腾彩绸", "price": 55999, "type": 3, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "9683", "m": "9681", "s": "9682"}, "desc": "欢腾红鼓", "exp": 300, "id": 884, "isNew": 0, "level": 0, "name": "欢腾红鼓", "price": 47999, "type": 4, "valid": 16070400},
			{"FBPrice": 72, "YFBPrice": 58, "asset_id": {"b": "9873", "m": "9871", "s": "9872"}, "desc": "万圣城堡夜", "exp": 360, "id": 885, "isNew": 0, "level": 0, "name": "万圣城堡夜", "price": 59999, "type": 1, "valid": 16070400},
			{"FBPrice": 53, "YFBPrice": 42, "asset_id": {"b": "9876", "m": "9874", "s": "9875"}, "desc": "万圣城堡", "exp": 264, "id": 886, "isNew": 0, "level": 0, "name": "万圣城堡", "price": 43199, "type": 2, "valid": 16070400},
			{"FBPrice": 29, "YFBPrice": 23, "asset_id": {"b": "9879", "m": "9877", "s": "9878"}, "desc": "城堡小栏", "exp": 144, "id": 887, "isNew": 0, "level": 0, "name": "城堡小栏", "price": 23999, "type": 3, "valid": 16070400},
			{"FBPrice": 24, "YFBPrice": 20, "asset_id": {"b": "9882", "m": "9880", "s": "9881"}, "desc": "南瓜小舍", "exp": 120, "id": 888, "isNew": 0, "level": 0, "name": "南瓜小舍", "price": 19199, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "10188", "m": "10186", "s": "10187"}, "desc": "棋盘农场", "exp": 0, "id": 889, "isNew": 0, "level": 0, "name": "棋盘农场", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "10191", "m": "10189", "s": "10190"}, "desc": "茶壶房子", "exp": 0, "id": 890, "isNew": 0, "level": 0, "name": "茶壶房子", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "10194", "m": "10192", "s": "10193"}, "desc": "纸扇栅栏", "exp": 0, "id": 891, "isNew": 0, "level": 0, "name": "纸扇栅栏", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "10197", "m": "10195", "s": "10196"}, "desc": "茶壶狗窝", "exp": 0, "id": 892, "isNew": 0, "level": 0, "name": "茶杯小舍", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "10232", "m": "10230", "s": "10231"}, "desc": "时间科技\t", "exp": 720, "id": 900, "isNew": 0, "level": 0, "name": "时间科技\t", "price": 0, "type": 1, "valid": 16070400},
			{"FBPrice": 75, "YFBPrice": 60, "asset_id": {"b": "10235", "m": "10233", "s": "10234"}, "desc": "时光小屋", "exp": 500, "id": 901, "isNew": 0, "level": 0, "name": "时光小屋", "price": 0, "type": 2, "valid": 16070400},
			{"FBPrice": 35, "YFBPrice": 28, "asset_id": {"b": "10238", "m": "10236", "s": "10237"}, "desc": "科技栅栏", "exp": 300, "id": 902, "isNew": 0, "level": 0, "name": "科技栅栏", "price": 0, "type": 3, "valid": 16070400},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "10241", "m": "10239", "s": "10240"}, "desc": "科技小窝", "exp": 240, "id": 903, "isNew": 0, "level": 0, "name": "科技小窝", "price": 0, "type": 4, "valid": 16070400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "10280", "m": "10278", "s": "10279"}, "desc": "桃园三结义", "exp": 800, "id": 904, "isNew": 0, "level": 0, "name": "桃园三结义", "price": 0, "type": 1, "valid": 16070400},
			{"FBPrice": 83, "YFBPrice": 66, "asset_id": {"b": "10283", "m": "10281", "s": "10282"}, "desc": "桃园结义台", "exp": 660, "id": 905, "isNew": 0, "level": 0, "name": "桃园结义台", "price": 0, "type": 2, "valid": 16070400},
			{"FBPrice": 38, "YFBPrice": 30, "asset_id": {"b": "10286", "m": "10284", "s": "10285"}, "desc": "桃园栅栏", "exp": 300, "id": 906, "isNew": 0, "level": 0, "name": "桃园栅栏", "price": 0, "type": 3, "valid": 16070400},
			{"FBPrice": 28, "YFBPrice": 22, "asset_id": {"b": "10289", "m": "10287", "s": "10288"}, "desc": "结义酒坛", "exp": 220, "id": 907, "isNew": 0, "level": 0, "name": "结义酒坛", "price": 0, "type": 4, "valid": 16070400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "10292", "m": "10290", "s": "10291"}, "desc": "招财猫", "exp": 720, "id": 908, "isNew": 0, "level": 0, "name": "招财猫", "price": 0, "type": 1, "valid": 16070400},
			{"FBPrice": 75, "YFBPrice": 60, "asset_id": {"b": "10295", "m": "10293", "s": "10294"}, "desc": "招财小屋", "exp": 600, "id": 909, "isNew": 0, "level": 0, "name": "招财小屋", "price": 0, "type": 2, "valid": 16070400},
			{"FBPrice": 35, "YFBPrice": 28, "asset_id": {"b": "10298", "m": "10296", "s": "10297"}, "desc": "护财栅栏", "exp": 300, "id": 910, "isNew": 0, "level": 0, "name": "护财栅栏", "price": 0, "type": 3, "valid": 16070400},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "10301", "m": "10299", "s": "10300"}, "desc": "守财狗窝", "exp": 240, "id": 911, "isNew": 0, "level": 0, "name": "守财狗窝", "price": 0, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "10305", "m": "10303", "s": "10304"}, "desc": "神秘森林", "exp": 0, "id": 912, "isNew": 0, "level": 0, "name": "神秘森林", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "10308", "m": "10306", "s": "10307"}, "desc": "神秘树屋", "exp": 0, "id": 913, "isNew": 0, "level": 0, "name": "神秘树屋", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "10311", "m": "10309", "s": "10310"}, "desc": "神秘栅栏", "exp": 0, "id": 914, "isNew": 0, "level": 0, "name": "神秘栅栏", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "10314", "m": "10312", "s": "10313"}, "desc": "神秘小窝", "exp": 0, "id": 915, "isNew": 0, "level": 0, "name": "神秘小窝", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "10767", "m": "10765", "s": "10766"}, "desc": "圣诞工厂", "exp": 720, "id": 916, "isNew": 0, "level": 0, "name": "圣诞工厂", "price": 0, "tips": "", "type": 1, "valid": 16070400},
			{"FBPrice": 75, "YFBPrice": 60, "asset_id": {"b": "10770", "m": "10768", "s": "10769"}, "desc": "礼物小屋", "exp": 600, "id": 917, "isNew": 0, "level": 0, "name": "礼物小屋", "price": 0, "tips": "", "type": 2, "valid": 16070400},
			{"FBPrice": 35, "YFBPrice": 28, "asset_id": {"b": "10773", "m": "10771", "s": "10772"}, "desc": "圣诞小栅栏", "exp": 300, "id": 918, "isNew": 0, "level": 0, "name": "圣诞小栅栏", "price": 0, "tips": "", "type": 3, "valid": 16070400},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "10777", "m": "10775", "s": "10776"}, "desc": "礼物盒狗舍", "exp": 240, "id": 919, "isNew": 0, "level": 0, "name": "礼物盒狗舍", "price": 0, "tips": "", "type": 4, "valid": 16070400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "11036", "m": "11034", "s": "11035"}, "desc": "新年快乐", "exp": 720, "id": 920, "isNew": 0, "level": 0, "name": "新年快乐", "price": 0, "tips": "", "type": 1, "valid": 16070400},
			{"FBPrice": 75, "YFBPrice": 60, "asset_id": {"b": "11039", "m": "11037", "s": "11038"}, "desc": "玉龙客栈", "exp": 600, "id": 921, "isNew": 0, "level": 0, "name": "玉龙客栈", "price": 0, "tips": "", "type": 2, "valid": 16070400},
			{"FBPrice": 35, "YFBPrice": 28, "asset_id": {"b": "11042", "m": "11040", "s": "11041"}, "desc": "雕刻栅栏", "exp": 300, "id": 922, "isNew": 0, "level": 0, "name": "雕刻栅栏", "price": 0, "tips": "", "type": 3, "valid": 16070400},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "11045", "m": "11043", "s": "11044"}, "desc": "红鼓狗窝", "exp": 240, "id": 923, "isNew": 0, "level": 0, "name": "红鼓狗窝", "price": 0, "tips": "", "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11168", "m": "11166", "s": "11167"}, "desc": "瑞雪迎春", "exp": 0, "id": 924, "isNew": 0, "level": 0, "name": "瑞雪迎春", "price": 0, "tips": "", "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11171", "m": "11169", "s": "11170"}, "desc": "雪人屋", "exp": 0, "id": 925, "isNew": 0, "level": 0, "name": "雪人屋", "price": 0, "tips": "", "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11174", "m": "11172", "s": "11173"}, "desc": "迎春栅栏", "exp": 0, "id": 926, "isNew": 0, "level": 0, "name": "迎春栅栏", "price": 0, "tips": "", "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11177", "m": "11175", "s": "11176"}, "desc": "爆竹小窝", "exp": 0, "id": 927, "isNew": 0, "level": 0, "name": "爆竹小窝", "price": 0, "tips": "", "type": 4, "valid": 2678400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "11207", "m": "11206", "s": "11208"}, "desc": "云海深处", "exp": 720, "id": 928, "isNew": 0, "level": 0, "name": "云海深处", "price": 0, "tips": "", "type": 1, "valid": 16070400},
			{"FBPrice": 75, "YFBPrice": 60, "asset_id": {"b": "11211", "m": "11209", "s": "11210"}, "desc": "宫廷小楼", "exp": 600, "id": 929, "isNew": 0, "level": 0, "name": "宫廷小楼", "price": 0, "tips": "", "type": 2, "valid": 16070400},
			{"FBPrice": 35, "YFBPrice": 28, "asset_id": {"b": "11214", "m": "11212", "s": "11213"}, "desc": "宫廷栅栏", "exp": 300, "id": 930, "isNew": 0, "level": 0, "name": "宫廷栅栏", "price": 0, "tips": "", "type": 3, "valid": 16070400},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "11217", "m": "11215", "s": "11216"}, "desc": "宫廷小窝", "exp": 240, "id": 931, "isNew": 0, "level": 0, "name": "宫廷小窝", "price": 0, "tips": "", "type": 4, "valid": 16070400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "11513", "m": "11511", "s": "11512"}, "desc": "甜蜜爱情套装", "exp": 720, "id": 932, "isNew": 0, "level": 0, "name": "甜蜜爱情套装", "price": 0, "tips": "", "type": 1, "valid": 16070400},
			{"FBPrice": 75, "YFBPrice": 60, "asset_id": {"b": "11516", "m": "11514", "s": "11515"}, "desc": "甜蜜屋", "exp": 600, "id": 933, "isNew": 0, "level": 0, "name": "甜蜜屋", "price": 0, "tips": "", "type": 2, "valid": 16070400},
			{"FBPrice": 35, "YFBPrice": 28, "asset_id": {"b": "11519", "m": "11517", "s": "11518"}, "desc": "玫瑰小栏", "exp": 300, "id": 934, "isNew": 0, "level": 0, "name": "玫瑰小栏", "price": 0, "tips": "", "type": 3, "valid": 16070400},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "11522", "m": "11520", "s": "11521"}, "desc": "爱情小舍", "exp": 240, "id": 935, "isNew": 0, "level": 0, "name": "爱情小舍", "price": 0, "tips": "", "type": 4, "valid": 16070400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "11766", "m": "11764", "s": "11765"}, "desc": "温馨爱", "exp": 720, "id": 936, "isNew": 0, "level": 0, "name": "温馨爱", "price": 0, "tips": "", "type": 1, "valid": 16070400},
			{"FBPrice": 75, "YFBPrice": 60, "asset_id": {"b": "11769", "m": "11767", "s": "11768"}, "desc": "芬芳屋", "exp": 600, "id": 937, "isNew": 0, "level": 0, "name": "芬芳屋", "price": 0, "tips": "", "type": 2, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 28, "asset_id": {"b": "11772", "m": "11770", "s": "11771"}, "desc": "粉色栅栏", "exp": 300, "id": 938, "isNew": 0, "level": 0, "name": "粉色栅栏", "price": 0, "tips": "", "type": 3, "valid": 0},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "11775", "m": "11773", "s": "11774"}, "desc": "相框小窝", "exp": 240, "id": 939, "isNew": 0, "level": 0, "name": "相框小窝", "price": 0, "tips": "", "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11699", "m": "11697", "s": "11698"}, "desc": "绿色秘境", "exp": 0, "id": 940, "isNew": 0, "level": 0, "name": "绿色秘境", "price": 1, "tips": "", "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11702", "m": "11700", "s": "11701"}, "desc": "秘境小屋", "exp": 0, "id": 941, "isNew": 0, "level": 0, "name": "秘境小屋", "price": 1, "tips": "", "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11705", "m": "11703", "s": "11704"}, "desc": "秘境小栏", "exp": 0, "id": 942, "isNew": 0, "level": 0, "name": "秘境小栏", "price": 1, "tips": "", "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11715", "m": "11713", "s": "11714"}, "desc": "秘境小舍", "exp": 0, "id": 944, "isNew": 0, "level": 0, "name": "秘境小舍", "price": 1, "tips": "", "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11971", "m": "11969", "s": "11970"}, "desc": "愚人小屋", "exp": 0, "id": 945, "isNew": 0, "level": 0, "name": "愚人小屋", "price": 1, "tips": "", "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11974", "m": "11972", "s": "11973"}, "desc": "神秘屋", "exp": 0, "id": 946, "isNew": 0, "level": 0, "name": "神秘屋", "price": 1, "tips": "", "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11977", "m": "11975", "s": "11976"}, "desc": "丝带小栏", "exp": 0, "id": 947, "isNew": 0, "level": 0, "name": "丝带小栏", "price": 1, "tips": "", "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "11980", "m": "11978", "s": "11979"}, "desc": "愚人小舍", "exp": 0, "id": 948, "isNew": 0, "level": 0, "name": "愚人小舍", "price": 1, "tips": "", "type": 4, "valid": 2678400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "12064", "m": "12062", "s": "12063"}, "desc": "清明时节", "exp": 720, "id": 949, "isNew": 0, "level": 0, "name": "清明时节", "price": 0, "tips": "", "type": 1, "valid": 16070400},
			{"FBPrice": 75, "YFBPrice": 60, "asset_id": {"b": "12067", "m": "12065", "s": "12066"}, "desc": "风筝小房", "exp": 600, "id": 950, "isNew": 0, "level": 0, "name": "风筝小房", "price": 0, "tips": "", "type": 2, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 28, "asset_id": {"b": "12070", "m": "12068", "s": "12069"}, "desc": "木桩小栏", "exp": 280, "id": 951, "isNew": 0, "level": 0, "name": "木桩小栏", "price": 0, "tips": "", "type": 3, "valid": 16070400},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "12073", "m": "12071", "s": "12072"}, "desc": "风筝小舍", "exp": 240, "id": 952, "isNew": 0, "level": 0, "name": "风筝小舍", "price": 0, "tips": "", "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12090", "m": "12088", "s": "12089"}, "desc": "BMW奥运之悦", "exp": 0, "id": 953, "isNew": 0, "level": 0, "name": "BMW奥运之悦", "price": 1, "tips": "", "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12093", "m": "12091", "s": "12092"}, "desc": "BMW奥运悦跑道", "exp": 0, "id": 954, "isNew": 0, "level": 0, "name": "BMW奥运悦跑道", "price": 1, "tips": "", "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12096", "m": "12094", "s": "12095"}, "desc": "BMW奥运悦小栏", "exp": 0, "id": 955, "isNew": 0, "level": 0, "name": "BMW奥运悦小栏", "price": 1, "tips": "", "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12108", "m": "12106", "s": "12107"}, "desc": "BMW奥运悦小窝", "exp": 0, "id": 956, "isNew": 0, "level": 0, "name": "BMW奥运悦小窝", "price": 1, "tips": "", "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12166", "m": "12164", "s": "12165"}, "desc": "椰风树语", "exp": 0, "id": 957, "isNew": 0, "level": 0, "name": "椰风树语", "price": 1, "tips": "", "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12169", "m": "12167", "s": "12168"}, "desc": "椰风小屋", "exp": 0, "id": 958, "isNew": 0, "level": 0, "name": "椰风小屋", "price": 1, "tips": "", "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12172", "m": "12170", "s": "12171"}, "desc": "椰风小栏", "exp": 0, "id": 959, "isNew": 0, "level": 0, "name": "椰风小栏", "price": 1, "tips": "", "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12175", "m": "12173", "s": "12174"}, "desc": "椰风小舍", "exp": 0, "id": 960, "isNew": 0, "level": 0, "name": "椰风小舍", "price": 1, "tips": "", "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12248", "m": "12246", "s": "12247"}, "desc": "劳动者之家", "exp": 0, "id": 961, "isNew": 0, "level": 0, "name": "劳动者之家", "price": 1, "tips": "", "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12251", "m": "12249", "s": "12250"}, "desc": "劳动小屋", "exp": 0, "id": 962, "isNew": 0, "level": 0, "name": "劳动小屋", "price": 1, "tips": "", "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12254", "m": "12252", "s": "12253"}, "desc": "劳动者小栏", "exp": 0, "id": 963, "isNew": 0, "level": 0, "name": "劳动者小栏", "price": 1, "tips": "", "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12257", "m": "12255", "s": "12256"}, "desc": "劳动小窝", "exp": 0, "id": 964, "isNew": 0, "level": 0, "name": "劳动小窝", "price": 1, "tips": "", "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12767", "m": "12765", "s": "12766"}, "desc": "儿童动漫城", "exp": 0, "id": 965, "isNew": 0, "level": 0, "name": "儿童动漫城", "price": 1, "tips": "", "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12770", "m": "12768", "s": "12769"}, "desc": "动漫小屋", "exp": 0, "id": 966, "isNew": 0, "level": 0, "name": "动漫小屋", "price": 1, "tips": "", "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12773", "m": "12771", "s": "12772"}, "desc": "爱心小栏", "exp": 0, "id": 967, "isNew": 0, "level": 0, "name": "爱心小栏", "price": 1, "tips": "", "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "12776", "m": "12774", "s": "12775"}, "desc": "汽车小舍", "exp": 0, "id": 968, "isNew": 0, "level": 0, "name": "汽车小舍", "price": 1, "tips": "", "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "13313", "m": "13311", "s": "13312"}, "desc": "端午粽香", "exp": 0, "id": 969, "isNew": 0, "level": 0, "name": "端午粽香", "price": 1, "tips": "", "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "13316", "m": "13314", "s": "13315"}, "desc": "粽香小屋", "exp": 0, "id": 970, "isNew": 0, "level": 0, "name": "粽香小屋", "price": 1, "tips": "", "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "13319", "m": "13317", "s": "13318"}, "desc": "粽香小栏", "exp": 0, "id": 971, "isNew": 0, "level": 0, "name": "粽香小栏", "price": 1, "tips": "", "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "13322", "m": "13320", "s": "13321"}, "desc": "龙鼓小舍", "exp": 0, "id": 972, "isNew": 0, "level": 0, "name": "龙鼓小舍", "price": 1, "tips": "", "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "13667", "m": "13665", "s": "13666"}, "desc": "整装待发", "exp": 0, "id": 977, "isNew": 0, "level": 0, "name": "整装待发", "price": 1, "tips": "", "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "13670", "m": "13668", "s": "13669"}, "desc": "小屋", "exp": 0, "id": 978, "isNew": 0, "level": 0, "name": "小屋", "price": 1, "tips": "", "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "13673", "m": "13671", "s": "13672"}, "desc": "棚栏", "exp": 0, "id": 979, "isNew": 0, "level": 0, "name": "棚栏", "price": 1, "tips": "", "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "13676", "m": "13674", "s": "13675"}, "desc": "狗窝", "exp": 0, "id": 980, "isNew": 0, "level": 0, "name": "狗窝", "price": 1, "tips": "", "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "26807", "m": "26805", "s": "26806"}, "desc": "趣跑无限", "exp": 0, "id": 981, "isNew": 0, "level": 0, "name": "趣跑无限", "price": 1, "tips": "", "type": 1, "valid": 3678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "26810", "m": "26808", "s": "26809"}, "desc": "趣跑小屋", "exp": 0, "id": 982, "isNew": 0, "level": 0, "name": "趣跑小屋", "price": 1, "tips": "", "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "26813", "m": "26811", "s": "26812"}, "desc": "趣跑栅栏", "exp": 0, "id": 983, "isNew": 0, "level": 0, "name": "趣跑栅栏", "price": 1, "tips": "", "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "26816", "m": "26814", "s": "26815"}, "desc": "趣跑狗窝", "exp": 0, "id": 984, "isNew": 0, "level": 0, "name": "趣跑狗窝", "price": 1, "tips": "", "type": 4, "valid": 2678400},
			{"FBPrice": 160, "YFBPrice": 130, "asset_id": {"b": "27694", "m": "27690", "s": "27693"}, "desc": "冰爽美味", "exp": 346, "id": 985, "isNew": 0, "level": 0, "name": "冰爽美味", "price": 17777, "tips": "", "type": 1, "valid": 2592000},
			{"FBPrice": 110, "YFBPrice": 90, "asset_id": {"b": "27697", "m": "27695", "s": "27696"}, "desc": " 冰爽美味小屋", "exp": 240, "id": 986, "isNew": 0, "level": 0, "name": "冰爽美味小屋", "price": 10777, "tips": "", "type": 2, "valid": 2592000},
			{"FBPrice": 70, "YFBPrice": 60, "asset_id": {"b": "27700", "m": "27698", "s": "27699"}, "desc": "冰爽美味栅栏", "exp": 144, "id": 987, "isNew": 0, "level": 0, "name": "冰爽美味栅栏", "price": 7777, "tips": "", "type": 3, "valid": 2592000},
			{"FBPrice": 50, "YFBPrice": 40, "asset_id": {"b": "27702", "m": "27703", "s": "27701"}, "desc": "冰爽美味狗窝", "exp": 115, "id": 988, "isNew": 0, "level": 0, "name": "冰爽美味狗窝", "price": 7777, "tips": "", "type": 4, "valid": 2592000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "26881", "m": "26879", "s": "26880"}, "desc": "私人天台", "exp": 0, "id": 989, "isNew": 0, "level": 0, "name": "私人天台", "price": 0, "tips": "", "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "26884", "m": "26882", "s": "26883"}, "desc": "私人小屋", "exp": 0, "id": 990, "isNew": 0, "level": 0, "name": "私人小屋", "price": 0, "tips": "", "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "26887", "m": "26885", "s": "26886"}, "desc": "私人栅栏", "exp": 0, "id": 991, "isNew": 0, "level": 0, "name": "私人栅栏", "price": 0, "tips": "", "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "26890", "m": "26888", "s": "26889"}, "desc": "狗窝", "exp": 0, "id": 992, "isNew": 0, "level": 0, "name": "狗窝", "price": 0, "tips": "", "type": 4, "valid": 2678400}

		]}
		]]>
	</item_info>

        <!-- 农场狗 -->
        <dog_info type="json">
                <![CDATA[
                {"dog_info": [
                       {"asset_id": {"b": "5392", "s": "5393"}, "id": "FDog1"},
            {"asset_id": {"b": "5390", "s": "5391"}, "id": "FDog2"},
			{"asset_id": {"b": "5394", "s": "5395"}, "id": "FDog3"},
			{"asset_id": {"b": "5396", "s": "5397"}, "id": "FDog4"},
			{"asset_id": {"b": "5398", "s": "5399"}, "id": "FDog5"},
			{"asset_id": {"b": "5400", "s": "5401"}, "id": "FDog6"},
			{"asset_id": {"b": "5402", "s": "5403"}, "id": "FDog7"},
			{"asset_id": {"b": "10315", "s": "10316"}, "id": "FDog10"},
			{"asset_id": {"b": "10318", "s": "10319"}, "id": "FDog12"},
			{"asset_id": {"b": "8541", "s": "8539"}, "id": "FDog13"},
			{"asset_id": {"b": "8982", "s": "8983"}, "id": "FDog14"},
			{"asset_id": {"b": "9757", "s": "9758"}, "id": "FDog15"},
			{"asset_id": {"b": "10515", "s": "10516"}, "id": "FDog16"},
			{"asset_id": {"b": "10329", "s": "10330"}, "id": "FDog17"},
			{"asset_id": {"b": "10678", "s": "10679"}, "id": "FDog18"},
			{"asset_id": {"b": "11189", "s": "11190"}, "id": "FDog20"},
			{"asset_id": {"b": "11744", "s": "11745"}, "id": "FDog22"},
			{"asset_id": {"b": "12109", "s": "12110"}, "id": "FDog23"},
			{"asset_id": {"b": "197421", "s": "197422"}, "id": "FDog90"},
			{"asset_id": {"b": "197423", "s": "197424"}, "id": "FDog91"},
			{"asset_id": {"b": "197425", "s": "197426"}, "id": "FDog92"},
			{"asset_id": {"b": "197427", "s": "197428"}, "id": "FDog93"},
			{"asset_id": {"b": "197429", "s": "197430"}, "id": "FDog94"},
			{"asset_id": {"b": "197431", "s": "197432"}, "id": "FDog95"},
			{"asset_id": {"b": "197433", "s": "197434"}, "id": "FDog96"},
			{"asset_id": {"b": "197435", "s": "197436"}, "id": "FDog97"},
			{"asset_id": {"b": "197437", "s": "197438"}, "id": "FDog98"},
			{"asset_id": {"b": "197439", "s": "197440"}, "id": "FDog99"},
			{"asset_id": {"b": "197441", "s": "197442"}, "id": "FDog100"}
                ]}
                ]]>
        </dog_info>

         <!-- 池塘鱼 --> 
         <waterPool type="json"> 
                 <![CDATA[ 
                 {"fish_info":
                        [{"asset_id": {"m": 8696, "s": 8695}, "crop_name": "测试鱼", "cycle": "3600,3600,3600", "exp": 100, "id": 1, "isMill": 1, "isRestaurant": 1, "lock_crystal": "1,0", "lock_money": "500", "mature": 8, "output": 10, "pool_size": 1, "price": 500, "sale": 600, "show": 0, "tip": "demo测试用，不要对外发布哦"}, {"asset_id": {"m": 8723, "s": 8724}, "crop_name": "小丑鱼", "cycle": "21600,50400,82800", "exp": 42, "id": 2, "isMill": 1, "isRestaurant": 1, "lock_crystal": "", "lock_money": "10000", "mature": 23, "output": 15, "pool_size": 1, "price": 650, "sale": 90, "show": 1, "tip": "小贴士：小丑鱼（英文：clown fish）是一种热带咸水鱼，分布在西太平洋的珊瑚礁海域。"}, {"asset_id": {"m": 8771, "s": 8770}, "crop_name": "龙虾", "cycle": "43200,93600,144000", "exp": 61, "id": 3, "isMill": 1, "isRestaurant": 1, "lock_crystal": "", "lock_money": "50000", "mature": 40, "output": 29, "pool_size": 1, "price": 1570, "sale": 115, "show": 0, "tip": "小贴士：龙虾（英文：Palinuridae），又名大虾、龙头虾、虾魁、海虾等。它头胸部较粗大，外壳坚硬，色彩斑斓，腹部短小，是虾类中最大的一类。一般栖息于温暖海洋的近海海底或岸边。"}, {"asset_id": {"m": 8799, "s": 8798}, "crop_name": "蝶鱼", "cycle": "28800,64800,108000", "exp": 50, "id": 4, "isMill": 1, "isRestaurant": 1, "lock_crystal": "1,10", "lock_money": "50000", "mature": 30, "output": 24, "pool_size": 1, "price": 940, "sale": 85, "show": 1, "tip": "小贴士：蝶鱼（英文名：butterfly fish）属于蝴蝶鱼科，它们是典型的珊瑚礁鱼类，有着侧面压缩的体形和稍微突出的吻部。蝶鱼科鱼类种类繁多，色彩艳丽，姿态高雅，是海水观赏鱼类中最主要的成员。"}, {"asset_id": {"m": 8801, "s": 8800}, "crop_name": "皇家丝鲈", "cycle": "36000,75600,118800", "exp": 52, "id": 5, "isMill": 1, "isRestaurant": 1, "lock_crystal": "1,10", "lock_money": "100000", "mature": 33, "output": 27, "pool_size": 1, "price": 1100, "sale": 85, "show": 1, "tip": "小贴士：皇家丝鲈（英文名：Gramma loreto）绚丽的体色最为迷人：头部及前半身为紫色，晶莹剔透，后半身则呈亮黄色；背鳍上有黑色斑纹；另有一条黑色带状斜跨眼眶。 "}, {"asset_id": {"m": 8803, "s": 8802}, "crop_name": "鹦鹉鱼", "cycle": "43200,86400,136800", "exp": 59, "id": 6, "isMill": 1, "isRestaurant": 1, "lock_crystal": "2,10", "lock_money": "100000", "mature": 38, "output": 28, "pool_size": 1, "price": 1340, "sale": 100, "show": 1, "tip": "小贴士：鹦鹉鱼或称鹦嘴鱼，体长而深，头圆钝，体色鲜豔，鳞大。其腭齿硬化演变为鹦鹉嘴状，用以从珊瑚礁上刮食藻类和珊瑚的软质部分，牙齿坚硬，能够在珊瑚上留下显著的啄食痕迹。\r\n"}, {"asset_id": {"m": 8805, "s": 8804}, "crop_name": "蓝唐王鱼", "cycle": "28800,57600,90000", "exp": 43, "id": 7, "isMill": 1, "isRestaurant": 1, "lock_crystal": "1,5", "lock_money": "20000", "mature": 25, "output": 20, "pool_size": 1, "price": 741, "sale": 78, "show": 1, "tip": "小贴士：蓝唐王鱼学名黄尾副刺尾鱼，又称黄尾副刺尾鱼，俗名蓝唐王鱼、蓝倒吊、剥皮鱼，为辐鳍鱼纲鲈形目刺尾鱼亚目刺尾鱼科的其中一个种。"}, {"asset_id": {"m": 8962, "s": 8961}, "crop_name": "孔雀鱼", "cycle": "43200,86400,144000", "exp": 62, "id": 8, "isMill": 1, "isRestaurant": 1, "lock_crystal": "2,50", "lock_money": "200000", "mature": 40, "output": 28, "pool_size": 1, "price": 1450, "sale": 110, "show": 1, "tip": "小贴士：孔雀鱼，又名孔雀花鳉、虹鳉，是一种常见的小型热带观赏鱼，颜色鲜艳，品系多。原产于南美洲的委内瑞拉，巴巴多斯，特立尼达，巴西北部与圭亚那。"}, {"asset_id": {"m": 8964, "s": 8963}, "crop_name": "虎皮鱼", "cycle": "36000,79200,126000", "exp": 54, "id": 9, "isMill": 1, "isRestaurant": 1, "lock_crystal": "2,30", "lock_money": "150000", "mature": 35, "output": 25, "pool_size": 1, "price": 1200, "sale": 100, "show": 1, "tip": "小贴士：虎皮鱼（英文名：Puntius tetrazona）又名四间鱼、四间鲫鱼。原产于马来西亚，印尼苏门答腊岛、加里曼丹岛等内陆水域。虎皮鱼体高，似棱形，体色基调浅黄，布有红色斑纹和小点，从头至尾有垂直的黑色条纹，斑谰似虎皮。"}, {"asset_id": {"m": 8966, "s": 8965}, "crop_name": "绿海龟", "cycle": "54000,108000,180000", "exp": 78, "id": 10, "isMill": 1, "isRestaurant": 1, "lock_crystal": "7,30", "lock_money": "300000", "mature": 50, "output": 30, "pool_size": 1, "price": 2025, "sale": 145, "show": 1, "tip": "小贴士：绿海龟因其身上的脂肪为绿色而得名。它的身体庞大，外被扁圆形的甲壳，只有头和四肢露在壳外。广泛分布于太平洋、印度洋及大西洋温水水域。"}, {"asset_id": {"m": 9694, "s": 9693}, "crop_name": "彩虹鱼", "cycle": "43200,93600,151200", "exp": 65, "id": 11, "isMill": 1, "isRestaurant": 1, "lock_crystal": "1,50", "lock_money": "250000", "mature": 42, "output": 28, "pool_size": 1, "price": 1550, "sale": 120, "show": 1, "tip": "小贴士：彩虹鱼原产于南美洲的委内瑞拉、圭亚那、西印度群岛、巴西北部等地，作为观赏用鱼引入新加坡、中国台湾和内地，现已繁衍分布于部分热带地区的河川下游及湖沼、沟渠中，其野生栖地呈现多样化，主要栖息于淡水流域及湖沼。"}, {"asset_id": {"m": 9696, "s": 9695}, "crop_name": "宽带蝴蝶鱼", "cycle": "32400,72000,118800", "exp": 51, "id": 12, "isMill": 1, "isRestaurant": 1, "lock_crystal": "1,20", "lock_money": "150000", "mature": 33, "output": 26, "pool_size": 1, "price": 1070, "sale": 88, "show": 1, "tip": "小贴士：宽带蝴蝶（英文名：Moorii），深黑的体色，有一延伸至尾部的黄色横带。"}, {"asset_id": {"m": 9698, "s": 9697}, "crop_name": "蝠鲼", "cycle": "54000,126000,216000", "exp": 180, "id": 13, "isMill": 1, "isRestaurant": 1, "lock_crystal": "7,20", "lock_money": "500000", "mature": 60, "output": 29, "pool_size": 2, "price": 4800, "sale": 350, "show": 1, "tip": "小贴士：蝠鲼是软骨鱼纲、蝠鲼科几个海产属鱼类的统称。体扁平，有强大的胸鳍，类似翅膀，在海洋中巡游，胸鳍前有两个薄、窄、似耳朵的突起，可以向口中收集食物，牙齿细小，主要以浮游生物和小鱼为食。"}, {"asset_id": {"m": 9671, "s": 9670}, "crop_name": "海豚", "cycle": "57600,129600,244800", "exp": 285, "id": 14, "isMill": 1, "isRestaurant": 1, "lock_crystal": "", "lock_money": "500000", "mature": 68, "output": 25, "pool_size": 3, "price": 8200, "sale": 700, "show": 0, "tip": "小贴士：海豚是体型较小的鲸类，共有近62种，分布于世界各大洋，主要以小鱼、乌贼、虾、蟹为食。海豚是一种本领超群、聪明伶俐的海中哺乳动物。"}, {"asset_id": {"m": 8999, "s": 8998}, "crop_name": "团圆鱼", "cycle": "36000,79200,129600", "exp": 57, "id": 15, "isMill": 1, "isRestaurant": 1, "lock_crystal": "", "lock_money": "0", "mature": 36, "output": 27, "pool_size": 1, "price": 1200, "sale": 100, "show": 0, "tip": "小贴士：活动鱼苗。"}, {"asset_id": {"m": 9770, "s": 9769}, "crop_name": "假面鱼", "cycle": "43200,93600,151200", "exp": 65, "id": 16, "isMill": 1, "isRestaurant": 1, "lock_crystal": "", "lock_money": "0", "mature": 42, "output": 30, "pool_size": 1, "price": 1660, "sale": 115, "show": 0, "tip": "小贴士：万圣节活动鱼苗。"}, {"asset_id": {"m": 11086, "s": 11085}, "crop_name": "金鱼", "cycle": "28800,57600,90000", "exp": 45, "id": 17, "isMill": 1, "isRestaurant": 1, "lock_crystal": "", "lock_money": "50000", "mature": 25, "output": 30, "pool_size": 1, "price": 1500, "sale": 230, "show": 1, "tip": "小贴士：金鱼也称“金鲫鱼”，是由鲫鱼演化而成的观赏鱼类。金鱼易于饲养，形态优美的金鱼能美化环境，很受人们的喜爱，是我国特有的观赏鱼。 "}]  
                 }
                 ]]> 
         </waterPool> 

</data>
XML;
?>