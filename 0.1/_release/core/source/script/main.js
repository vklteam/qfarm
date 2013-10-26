/*!
 * 提示: 此文件继承UCH模板中加载的js定义
 */


/*!
 * 音乐播放器控制
 * height:48|83|230
 */
function loadPlayer(height) {
	if(height > 0) {
		if(!loadPlayer.status) {
			loadPlayer.status = 1;
			SQuery("#qfplayer_main").className = 'qfplayer_main';
			SQuery("#qfplayer_main").innerHTML = '<div id="mp3Player"></div>';
			swfobject.embedSWF(
				"http://box.baidu.com/widget/flash/list.swf?id=3257558&autoPlay=true", 
				"mp3Player", "100%", "100%",
				"9.0.124", "qqfarm/source/script/swfobject/expressInstall.swf",
				{}, {wmode:"opaque", allowscriptaccess:"always"}
			);
		}
		SQuery("#qfplayer_main").style.height = height + 'px';
	}
	else {
		loadPlayer.status = 0;
		SQuery("#qfplayer_main").className = '';
		SQuery("#qfplayer_main").innerHTML = '';
		SQuery("#qfplayer_main").style.height = '0px';
	}
}


//////////////////////////////////////////////////////////////////////

curQFWindow = 'myfarm';
var dlBox = new DialogBox();

//大窗口模式
dlBox.Add({Boxid: 'dlBox1_main'});
dlBox.Drag('dlBox1_head', 'dlBox1_main');
function dlBox1_Show() {
	var docEl = document.documentElement;
	var cfMsg = "提示: \r\n    当前浏览器直接可视区域大小不适合大窗口模式, 是否继续? ";
	if((docEl.clientWidth > 910 && docEl.clientHeight > 600) || confirm(cfMsg)) {
		dlBox.Show('dlBox1_main');
		SQuery('#myfarm_full').src = SQuery('#myfarm').src ;
		SQuery('#myfarm').src = 'about:blank';
		curQFWindow = 'myfarm_full';
	}
	return false;
}
dlBox.Add({Boxid: 'dlBox2_main'});
dlBox.Drag('dlBox1_head', 'dlBox2_main');
function dlBox2_Show() {
	
	var docEl = document.documentElement;
		dlBox.Show('dlBox2_main');
		//SQuery('#myfarm_full').src = SQuery('#myfarm').src ;
		//SQuery('#myfarm').src = 'about:blank';
		//window.alert(appid);
		curQFWindow = 'myfarm_full';
	return false;
}

function dlBox1_Hide() {
	dlBox.Hide('dlBox1_main');
	SQuery('#myfarm').src = SQuery('#myfarm_full').src;
	SQuery('#myfarm_full').src = 'about:blank';
	curQFWindow = 'myfarm';
	return false; 
}

function dlBox2_Hide() {
	dlBox.Hide('dlBox2_main');
	//SQuery('#myfarm').src = SQuery('#myfarm_full').src;
	//SQuery('#myfarm_full').src = 'about:blank';
	curQFWindow = 'myfarm';
	return false; 
}