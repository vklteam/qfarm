<link rel="stylesheet" type="text/css" href="static/style.css" />

<!--QF主框架区域-->
<div id="qfbody">
	<iframe id="myfarm" name="myfarm" src="core/nmc.php?type=nc" frameborder="0" scrolling="no" width="800px" height="620px"></iframe>
	<div id="qfplayer">
		<div id="qfplayer_main"></div>
		<div id="qfplayer_ctrl">
			<input class="button" type="button" value="关闭播放器" onclick="loadPlayer(0);" />
			<input class="button" type="button" value="迷你版播放器" onclick="loadPlayer(48);" />
			<input class="button" type="button" value="显示实时歌词" onclick="loadPlayer(83);" />
			<input class="button" type="button" value="显示播放列表" onclick="loadPlayer(230);" />
		</div>
	</div>
	<script type="text/javascript" src="core/script.php?swfobject"></script>
	<div id="qfversion"><a href="http://www.phpye.com" target="_blank" title="PHP学院" style="color:#444;">phpYe.QFarm</a></div>
</div>

<!--QF大窗口模式-->
<div id="dlBox1_main" class="dlBox_main">
	<div id="dlBox1_head" class="dlBox_head">
		<h1>农场牧场</h1>
		<a onclick="return dlBox1_Hide();" href="#" title="关闭">&nbsp;</a>
	</div>
	<div id="dlBox1_body" class="dlBox_body">
		<iframe id="myfarm_full" name="myfarm_full" src="about:blank" frameborder="0" scrolling="no" width="900px" height="560px"></iframe>
	</div>
</div>


<!--附加JS脚本-->
<script type="text/javascript" charset="utf-8" src="core/script.php?json&squery&dialog&main"></script>