<?php

# QFarm System Config [QSC]
# Create by seaif@zealv.com


//QSC初始化
is_array($_QSC) || $_QSC = array();

//功能控制开关
$_QSC['apiType'] = 'ucenter';//接口类型
$_QSC['friendType'] = 2;//好友列表类型[1:默认好友,2:全站好友]
$_QSC['friendNumber'] = 500;//用户最大好友数
$_QSC['missionName'] = '0520';//当前活动[填写活动名称,留空则关闭]
$_QSC['redeem'] = 0;//积分兑换
$_QSC['gzipcompress'] = 1 ;//启用gzip
$_QSC['mc_version'] = 1 ;//选用牧场

//头像参数
$_QSC['avatarReal'] = 0;//使用真实头像[0:关|1:开]
$_QSC['avatarStatic'] = 0;//静态调用头像[0:关|1:开]

//VIP偷菜
$_QSC['vip'] = 0;//VIP偷菜[0:关|1:开]
$_QSC['diyLimitYDLevel'] = 4;//VIP免费用装饰

//模板参数
$_QSC['view']['tplId'] = 'qf_default';//模板名
$_QSC['view']['tplDir'] = 'view/';//模板根目录
$_QSC['view']['cplDir'] = 'data/view/';//编译目录
$_QSC['view']['tplBak'] = 'view/qf_default/';//备用模板
$_QSC['view']['player'] = 1; //音乐播放器[0:关|1:百度播放器]

//Cookie参数
$_QSC['cookie']['prefix'] = 'qqfarm_';//Cookie前缀
$_QSC['cookie']['domain'] = '';//Cookie作用域
$_QSC['cookie']['path'] = '/';//Cookie作用路径

//管理员列表
$_QSC['adminer'] = array(1);//格式为数组

//农场关闭
$_QSC['closefarm'] = 1;//[0:关|1:开]
$_QSC['closeinfo'] = '各位用户朋友，大家好：<br /><br />　　为表达全国各族人民对青海玉树地震遇难同胞的深切哀悼，国务院决定，2010年4月21日为全国哀悼日。其间停止所有公共娱乐活动。<br />　　为响应国务院号召，表达对青海玉树地震受灾人民的哀思之情，我们决定从2010年4月21日0:00起，停止使用所有游戏应用。将于2010年4月22日0:00开始恢复正常，感谢您的理解和配合。 让我们众志成城，贡献自己的一份力量。';//关闭农场说明

?>