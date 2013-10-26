<?php

# NPC任务::小丑
$list = $_QFG['db']->fetchOne('SELECT * FROM app_qqfarm_nc where uid=' . $_QFG['uid']);

$npc = $list['chris'];
if($npc<1) {exit();}
$package = qf_decode($list['package']);
$tools = qf_decode($list['tools']);
$randnum = mt_rand(1,100);
if($randnum <= 20) {
	$npc--;
	$_QFG['db']->query("UPDATE app_qqfarm_nc set chris=chris-1 where uid=" . $_QFG['uid']);
	die('{"code":1,"direction":"<TEXTFORMAT LEADING=\"2\"><P ALIGN=\"LEFT\"><FONT FACE=\"Verdana\" SIZE=\"14\" COLOR=\"#FF0000\" LETTERSPACING=\"0\" KERNING=\"0\"><B>恭喜您获赠一句话</B></FONT></P></TEXTFORMAT><TEXTFORMAT LEADING=\"2\"><P ALIGN=\"LEFT\"><FONT FACE=\"Verdana\" IZE=\"14\" COLOR=\"#FF0000\" LETTERSPACING=\"0\" KERNING=\"0\"><B>      “一斤花生二斤枣，好运经常跟你跑；三斤苹四斤梨，吉祥和你不分离。”</B><FONT SIZE=\"12\"></FONT></FONT></P></TEXTFORMAT><TEXTFORMAT LEADING=\"2\"><P ALIGN=\"LEFT\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#333333\" LETTERSPACING=\"0\" ERNING=\"0\"></FONT></P></TEXTFORMAT><TEXTFORMAT LEADING=\"2\"><P ALIGN=\"LEFT\"><FONT ACE=\"Verdana\" SIZE=\"14\" COLOR=\"#333333\" LETTERSPACING=\"0\" KERNING=\"0\">有缘千里来相会，无缘对面不相逢收下我赠送给您的这句话，祝您万事如意，笑口常开。</FONT></P></TEXTFORMAT><TEXTFORMAT LEADING=\"2\"><P LIGN=\"LEFT\"><FONT FACE=\"Verdana\" SIZE=\"12\" COLOR=\"#333333\" LETTERSPACING=\"0\" ERNING=\"0\"></FONT></P></TEXTFORMAT><TEXTFORMAT LEADING=\"2\"><P ALIGN=\"LEFT\"><FONT ACE=\"Verdana\" SIZE=\"12\" COLOR=\"#333333\" LETTERSPACING=\"0\" KERNING=\"0\"><font size=\"12\">温馨提示：每每天最多获赠3次礼品，您今天还可获赠'. $npc .'次。<br /><font color=\"#ff0000\">活动截止时间：4月21日16:00(结束后所有小丑将消失)</font></font></FONT></P></TEXTFORMAT>","item":[""],"title":"活动礼品","vipText":""}');
} elseif($randnum <= 26) {
	$npc--;
	$_QFG['db']->query("UPDATE app_qqfarm_nc set chris=chris-1 where uid=" . $_QFG['uid']);
	$_QFG['db']->query("UPDATE app_qqfarm_user set money=money+10000 where uid=" . $_QFG['uid']);
	die('{"code":1,"direction":"<p align=\"center\"><b><font color=\"#ff0000\">恭喜您获赠500金币！</font></b></p>有缘千里来相会，无缘对面不相逢。我们在茫茫人海相遇，缘分啊。收下我赠送给您的礼品，祝您天天快乐。","item":[{"eNum":10000,"eParam":98088,"eType":6}],"title":"活动礼品","vipText":"<font size=\"12\">温馨提示：每人每天最多获赠次礼品，您今天还可获赠1次。<br /><font color=\"#ff0000\">活动截止时间：4月21日16:00(结束后所有小丑将消失)</font></font>"}');
} elseif($randnum <= 70)  {
	$npc--;
	$randcropstype = array_rand($cropstype);
	$randflag = true;
	foreach($package as $key=>$value) {
		if($key == $randcropstype) {
			$package[$key]++;
			$randflag = false;
		} 
	}
	if($randflag) {
		$package[$randcropstype] = 1;
	}
	$name = $cropstype[$randcropstype]['cName'];
	$eParam = $randcropstype;
	$eType = 1;
} else {
	$npc--;
	if(array_key_exists(3, $tools)) {
		$tools[3] += 1;
	} else {
		$tools[3] = 1;
	}
	$name = '极速化肥';
	$eParam = 3;
	$eType = 3;
} 

$_QFG['db']->query("UPDATE app_qqfarm_nc set tools='" . qf_encode($tools) . "', package='". qf_encode($package)."', chris=chris-1 where uid=" . $_QFG['uid']);
echo '{"code":1,"direction":"<p align=\'center\'><b><font color=\'#ff0000\'>恭喜您获赠一个神秘'. $name .'！</font></b></p>有缘千里来相会，无缘对面不相逢。我们在茫茫人海相遇，缘分啊。收下我赠送给您的礼品，祝您天天快乐。","item":[{"eNum":1,"eParam":'. $eParam .',"eType":' .$eType. '}],"title":"活动礼品","vipText":"您每天最多领取3次礼品，今天已领'.(3-$npc).'次。<br /><font size=\'12\' color=\'#ff0000\'>活动截止时间：4月21日16:00(结束后小丑将消失)</font>"}';

?>