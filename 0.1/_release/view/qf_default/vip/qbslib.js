
(function(){(function(a){a.c='1';a.purl='http://qping.qq.com/p.gif?oid={cl}&wid={wid}';a.curl='http://qping.qq.com/p.gif?oid={cl}&wid={wid}';a.dataUrl={get:function(){var burl="http://broadcast.qq.com/d.fcg?p=";return burl;}};a.trimData=function(data,pconf){if(data[0]){pconf=a.mix(pconf,data[0]);}
var pid=pconf['p'];a.each(data,function(v,k){var oid=v.cl;v.l=v.cl;if(oid){a.dm.omap[oid]=pid;}});}
a._getorderdata=function(oid){var pid=a.dm.omap[oid+''];var data=a.getOrderData(pid,oid);return data;}
a.view=function(oid){var data=a._getorderdata(oid);if(!data){return;}
a.ping.append(data);a.ping.flush();}
a.click=function(oid,open_in_this,user_open_link){var pid=a.dm.omap[oid+''];return a._click(pid,oid,open_in_this,user_open_link);}})(QBS);(function(a){a.charset='GB2312';a.cbname='_bc';a.c='2';a.purl='http://qping.qq.com/p.jpg?oid={cl}&wid={wid}&type=2&uin=',a.curl='http://qping.qq.com/p.jpg?oid={cl}&wid={wid}&type=2&uin=';a.dataUrl={get:function(){var burl='http://i.gdt.qq.com/view.fcg?posid=';return burl;}};a.trimData=function(data,pconf){a.each(data,function(v,k){v.cl=v.cl||v.id;var link=v.rl;if(a.isLink(link)){var q=link.indexOf('?')>0;var pre=q?'&':'?';v.rl=link;}});pconf.playmode='npdata';}
a.fixDataURL=function(data_url){return data_url;}
a.precallback=function(o,ecb){if(o&&(o.ret==0)&&o.data){a.each(o.data,function(v,k){if(v.ret==0){var list=v.list;v.cfg.p=k;list.cfg=v.cfg;a.callback(list);}else{var list=[];list.cfg={'p':k};a.callback(list);}});}else{ecb();}}})(GDT);function _k(a){var fk=(typeof QZFL!='undefined')?QZFL:((typeof top.QZFL!='undefined')?top.QZFL:((typeof QBSCOMM!='undefined')?QBSCOMM:undefined));if(!fk){return;}
(function(a){a.dom=_d=fk.dom;a.dom.ua=fk.userAgent;a.event=fk.event;a.JSONGetter=fk.JSONGetter;a.dm={omap:{},dlist:{},clist:{}}
var isEmpty=function(o){var empty=true;each(o,function(v,k,_break){empty=false;return _break});return empty},each=function(d,a,b){if(typeof d.length=="number")for(var f=0,n=d.length;f<n;f++)a.call(b,d[f],f);else if(typeof d=="number")for(f=0;f<d;f++)a.call(b,f,f);else for(f in d)a.call(b,d[f],f)},map=function(d,a){var b=[];each(d,function(f,n){b.push(a(f,n))});return b},mix=function(r){r=r||{};for(var i=1;i<arguments.length;i++){var s=arguments[i];if(s){for(var j in s){r[j]=s[j]}}}
return r},getObjectToStringFn=function(assign_token,pair_separator,need_last,need_encode){var encode=need_encode?encodeURIComponent:function(k){return k};return function(o){return map(o,function(v,k){if(k!=null){return k+assign_token+encode(v)}}).join(pair_separator)+(need_last?pair_separator:'')}};mix(a,{isEmpty:isEmpty,each:each,map:map,getType:function(obj){return obj===null?'null':(obj===undefined?'undefined':Object.prototype.toString.call(obj).slice(8,-1).toLowerCase());},mix:mix,bind:function(method,thisObj){var args=Array.prototype.slice.call(arguments,2);return function(){var this_args=Array.prototype.slice.call(arguments,0);return method.apply(thisObj,args.concat(this_args));}},format:function(s,config,reserve){return s.replace(/\{([^}]*)\}/g,(typeof config=='object')?function(m,i){var ret=config[i];return ret==null&&reserve?m:(ret===undefined?'':ret)}:config)},getObjectToStringFn:getObjectToStringFn,serializeStyles:getObjectToStringFn(':',';',true,false),serializeAttrs:getObjectToStringFn('=',' ',true,false),serializeQuery:getObjectToStringFn('=','&',false,true)});(function(){var el_template='<{tag} {attrs}style="{styles}">{inner}</{tag}>';buildHTML=function(styles,attrs,tag,inner){return a.format(el_template,{tag:tag||'div',attrs:a.serializeAttrs(attrs||{}),styles:a.serializeStyles(styles),inner:inner||''})};a.dom.buildHTML=buildHTML;})()})(a);(function(a){var each=a.each,dom=a.dom,ua=dom.ua,buildHTML=dom.buildHTML,$=dom.get,displayer_list={},FLASH_VAR_LINK='adlink';a.__imgs=[];a.pingreq=function(url){var img=new Image();img.src=url;a.__imgs.push(img)}
var getExtension=a.getExtension=function(uri){return/\.(\w+)(?:$|\?)/.exec(uri)[1].toLowerCase()};a.getTxtStr=function(data){var txt_tpl='<a href="{_l}" target="_blank" onclick="javascript: {_t}.click(\'{cl}\', false, true);" title=\'{text}\'>{txt}</a>';var reg=/\[url\]([^\[]*)\[\/url\]/g;var txt=data.txt;var t=a.stripTag(txt);var in_str='';if(!txt.match(reg)){var in_str=a.format(txt_tpl,{'cl':data.cl,'txt':txt,'_l':data._l,'_t':a.t,'text':t});}else{var in_str=txt.replace(reg,function(mat,ltxt){return a.format(txt_tpl,{'cl':data.cl,'txt':ltxt,'_l':data._l,'_t':a.t,'text':t});});}
return in_str;}
a.stripTag=function(str){var reg=/\[url\]([^\[]+)\[\/url\]/g;str=str.replace(reg,"$1");var reg=/<br\s*\/>|<\/?[^>]*>/g
str=str.replace(reg,"");str=str.replace(/<|>/g,"");str=str.replace(/'/g,"&#39;");return str;}
a.isLink=function(str){var link_reg=/^http(s)?:\/\//;return link_reg.test(str);}
a.Helper={render:function(config,data,el,set_size){if(set_size){dom.setStyle(el,{width:config.w,height:config.h})}
var Helper=a.Helper;var t=Helper.getType(config,data,el);if(t){Helper.s[t](config,data,el);return true;}else{return false;}},getType:function(config,data,el){var t='';var v2=el.className.match(/_qbs_v2/);if(v2){return'data';}
if(data.img&&(data.txt==undefined)){if(a.getExtension(data.img)!='swf'){t='img';}else{t='flash';}}else if(data.txt&&(data.img==undefined)){t='txt';}else if(data.txt&&data.img){t='imgtxt'}
return t;},s:{'flash':(function(){var param_template='<param name="{name}" value="{value}"></param>';var buildParams=function(o){return a.map(o,function(v,k){return a.format(param_template,{name:k,value:v})}).join('')};return function(config,data,el){var params={quality:'high',allowscriptaccess:'always',wmode:'opaque',swliveconnect:true};if(config.params){a.mix(params,config.params)}
var flashvars=config.flashvars||{};if(data.ln){flashvars[FLASH_VAR_LINK]=data.ln}
params.flashvars=a.serializeQuery(flashvars);var attrs={};if(ua.ie){attrs.classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000';params.movie=data.img}else{params.type='application/x-shockwave-flash';attrs.data=data.img}
el.innerHTML=buildHTML({width:config.w+'px',height:config.h+'px'},attrs,'object',buildParams(params))};})(),'img':function(config,data,el){var styles={display:'block',cursor:'pointer',width:config.w+'px',height:config.h+'px'};var url=data.img;if(getExtension(url)=='png'&&ua.ie!=0&&ua.ie<7){styles['filter']=a.format('progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'{uri}\')',url)}else{styles['background-image']=a.format('url({uri})',url)}
el.innerHTML=buildHTML(styles);el.firstChild.onclick=function(){a.click(data.cl)}},'imgtxt':function renderImgTxt(conf,data,el){var img_tpl='<p class="qbs_img" style="{img_pstyle}"><a href="{_l}" target="_blank" onclick="javascript: {_t}.click(\'{cl}\', false, true);"><img src="{img}" title=\'{text}\' alt="" style="{style})" /></a></p>';var txt_tpl='<p class="qbs_cont" style="{txt_pstyle}">{txt_str}</p>';var txt_str=a.getTxtStr(data);var styles={width:conf.w+'px',height:conf.h+'px'}
var style=a.serializeStyles(styles);var playcfg=conf.playcfg;var layout=(playcfg&&playcfg.layout&&playcfg.layout>=1&&playcfg.layout<=4)?playcfg.layout:3;var img_pstyle='',txt_pstyle='';if(layout==1||layout==2){var img_style={};var txt_style={};if(layout==1){img_style['float']='left';}
if(layout==2){txt_style['float']='left';var width=el.clientWidth-conf.w-5;txt_style['width']=width+'px';}
img_pstyle=a.serializeStyles(img_style);txt_pstyle=a.serializeStyles(txt_style);}
var img_str=a.format(img_tpl,{'img':data.img,'cl':data.cl,'text':'','_l':data._l,'_t':a.t,'style':style,'img_pstyle':img_pstyle});var txt_str=a.format(txt_tpl,{'txt_str':txt_str,'txt_pstyle':txt_pstyle});var str='';var str=(layout==1||layout==3)?img_str+txt_str:txt_str+img_str;el.innerHTML=str;return true;},'txt':function(config,data,el){var txt_str=a.getTxtStr(data);el.innerHTML=txt_str;},'data':function(config,data,el){if(data.img){var imgs=dom.getElementsByClassName('_qbs_img',null,el);var as=el.getElementsByTagName('a');var img=imgs[0];ln=as[0];var url=data.rl;if(img&&ln){var imgurl=data.img;if(getExtension(imgurl)=='png'&&ua.ie!=0&&ua.ie<7){img.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+imgurl+"', sizingMethod='scale')";img.src="http://qzonestyle.gtimg.cn/ac/b.gif";}else{img.src=imgurl;}
img.style.width=config.w+'px';img.style.height=config.h+'px';img.alt='';img.title='';ln.href=url;ln.target="_blank";ln.onclick=function(){return a.click(data.cl,false,true);}
return true;}else{return false;}}}}}
a.init=function(pid,c,d){a.dm.clist[pid]=c;a.dm.dlist[pid]=d;}
a.getPosData=function(pid){var d=a.dm.dlist[pid];var c=a.dm.clist[pid];if(d&&c){return{'cfg':c,'data':d};}}
a.getPosCfg=function(pid){var c=a.dm.clist[pid];if(c){return c;}}
a.getOrderData=function(pid,oid){var pos=a.getPosData(pid);var data;if(pos){var datalist=pos['data'];for(var i=0,len=datalist.length;i<len;i++){var o=datalist[i];if(o.cl==oid){data=o;break;}}}
return data;};(function(){var dclass={};a.DisplayFactory={reg:function(type,klass){dclass[type]=klass},get:function(type){return dclass[type];},getByPid:function(pid){var pos=a.getPosData(pid);var mode=pos['cfg']['playmode'];return this.get(mode);}}})();var df=a.DisplayFactory;a.render=function(pid){var d=df.getByPid(pid);if(d){return d.render(pid);}else{return true;}}
a.clear=function(pid){}
a.ping=(function(){var q=['cl','wid','c'],pb={},pinged={},clearBuffer=function(f){each(q,function(k){f[k]=[]})};pc=function(d){var cd={};clearBuffer(cd);var cl=d.l||d.cl;cd['cl'].push(cl);cd['wid'].push(2);cd['c'].push(a.c);var pingurl=a.format(a.curl,cd);pingurl+='&e='+(new Date()).getTime();a.pingreq(pingurl);},clearBuffer(pb);return{append:function(d){var oid=d['cl'];if(pinged[oid]){return;}
var cl=d.l||d.cl;pb['cl'].push(cl);pb['wid'].push(1);pb['c'].push(a.c);pinged[oid]=1;},appendClick:pc,flush:function(type){if(!a.isEmpty(pb['cl'])){a.pingreq(a.format(a.purl,pb)+'&t='+Math.random());clearBuffer(pb);}}}})()
a.view=function(oid){}
a.viewpos=function(pid){}
a._click=function(pid,oid,open_in_this,user_open_link){var data=a.getOrderData(pid,oid);if(!data){return;}
a.ping.appendClick(data);var link=data.rl;if(a.isLink(link)){if(!user_open_link){var target=!open_in_this?'_blank':'';a.openUrl(link,target);return false;}}else{try{var f=new Function(link);setTimeout(f,300);return false;}catch(e){}}}
a.openUrl=function(url,target){if(!target){window.location=url;return;}
var a=document.createElement('a');a.href=url;a.target=target;a.style.diaplay='none';document.body.appendChild(a);try{a.click();}catch(e){var evt=document.createEvent("MouseEvents");evt.initEvent("click",true,true);a.dispatchEvent(evt);if(ua.firefox){window.open(url);}}
document.body.removeChild(a);}
a.action=function(oid,cmd){if(cmd=='close'){var closeurl='http://qping.qq.com/c?t='+((new Date()).getTime())+'&o=';closeurl+=oid;a.pingreq(closeurl);}}
var rendbanner=a.Helper.render;a.DisplayBase={render:function(pid){this.preRender(pid);return this.doRender(pid)},preRender:function(){},doRender:function(){}};a.PingDisplayBase=a.mix({},a.DisplayBase,{preRender:function(pid){var pos=a.getPosData(pid);data=pos.data;if(data&&data[0]){a.ping.append(data[0]);}}});var getReg=function(superclass){var _reg=function(o,type){var kclass=a.mix({},superclass,o);df.reg(type,kclass)};return function(list){each(list,_reg)}};a.regPing=getReg(a.PingDisplayBase);a.regNoPing=getReg(a.DisplayBase);a.regNoPing({'default':{doRender:function(pid){var pos=a.getPosData(pid);var data=pos['data'];var c=pos['cfg'];data=data[0];return rendbanner(c,data,c.container)}},'npdata':{doRender:function(pid){return true;}},'ns':{doRender:function(){return true;}},'roll':{doRender:function(){return true;}},'custom':{doRender:function(pid){return true;}}});a.regPing({'banner':{doRender:function(pid){var pos=a.getPosData(pid);var data=pos['data'];var c=pos['cfg'];data=data[0];return rendbanner(c,data,c.container)}},'data':{doRender:function(pid){return true;}},'imgtxt':{}})
a.renderDefault=function(conf){var el=conf.container;conf=a.mix({'playmode':'banner','w':el.clientWidth,'h':el.clientHeight},conf);var data=[{'img':a.format('http://qzs.qq.com/qzone/biz/qbs/default.swf',1),'ln':'http://life.qzone.qq.com','w':el.clientWidth,'h':el.clientHeight}];var pid=conf.pid;a.init(pid,conf,data);a.render(pid);};(function(){var Poller=function(polltime,pollnum){this.isPlaying=true;this.frun=true;this.curPoll=0;this.prePoll=0;this.pollTime=polltime;this.pollNum=pollnum;this.timer;this.onpause=function(){};this.oncontinue=function(){};this.pollArr={};}
Poller.prototype.pollPlay=function(){var poller=this;this.timer=setTimeout(function(){poller.pollPlay();},this.pollTime);if(this.isPlaying){this.prePoll=this.curPoll;this.setCurrentState(this.curPoll);this.curPoll=(this.curPoll+1)%this.pollNum;}}
Poller.prototype.setCurrentState=function(num){var poller=this;this.onflip(num);}
Poller.prototype.setCurPoll=function(num){var cur=parseInt(num);if(!isNaN(cur)){this.prePoll=this.curPoll;this.curPoll=num;this.setCurrentState(num);}}
Poller.prototype.setFrame=function(frame){this.prePoll=this.curPoll;frame=(frame>this.pollNum)?this.pollNum:frame;frame=(frame<0)?0:frame;this.curPoll=frame;this.setCurrentState(this.curPoll);}
Poller.prototype.pause=function(cur){this.isPlaying=false;this.setCurPoll(cur);if(this.timer){clearTimeout(this.timer);}
a.bind(this.onpause,this)();}
Poller.prototype.goon=function(){this.isPlaying=true;if(this.timer){clearTimeout(this.timer);}
var poller=this;this.timer=setTimeout(function(){poller.pollPlay();},this.pollTime);a.bind(this.oncontinue,this)();}
Poller.prototype.clear=function(){this.isPlaying=false;if(this.timer){clearTimeout(this.timer);}}
a.Poller=Poller;})();})(a);(function(a){var calllist={};var callnum=0;var callingnum=0;var user_data_buffer="";var call_p_buffer=[];a._get=function(pid,container,num,render_default,callback,user_data){a.onPreGet();var conf={'pid':pid,'container':container,'callback':callback,'render_default':render_default};calllist[pid]=conf;if(!callnum){callnum=num;}
call_p_buffer.push(pid);if(user_data){var query=a.serializeQuery(user_data);user_data_buffer+='&'+query;}
callingnum++;if(callnum==callingnum||callnum==1){var calledlist=call_p_buffer;var data_url=a.dataUrl.get()+call_p_buffer.join(',')+user_data_buffer;if(a.fixDataURL){data_url=a.fixDataURL(data_url);}
user_data_buffer='';call_p_buffer=[];callingnum=0;function onerror(){if(!calledlist){return;}
try{a.each(calledlist,function(pid,k){var conf=calllist[pid];calllist[pid]=null;a.dealcallback(conf,{'ret':false});});}catch(e){}
calledlist=null;}
var charset=a.charset||'utf-8';var js1=new a.JSONGetter(data_url,null,null,charset);js1.onSuccess=function(o){try{if(a.getType(o)=='function'){o(a);}else{a.precallback(o,onerror);}}catch(e){onerror();}};js1.onError=function(data){onerror();}
js1.onTimeout=function(data){onerror();}
var cb=a.cbname||'_bc';js1.send(cb);}}
a.callback=function(data){callnum--;var pconf=(data.cfg)?data.cfg:data[0];if(pconf.playcfg){a.mix(pconf,pconf.playcfg)}
var pid=pconf['p'];var conf=calllist[pid];if(!conf){return;}
if(data.length==0){a.dealcallback(conf,{'ret':false});return;}
if(!pconf.playmode){pconf.playmode='banner';}
a.trimData(data,pconf);a.each(data,function(v,k){var oid=v.cl;v._l=(a.isLink(v.rl))?v.rl:'javascript:;';});pconf.id=pid;pconf.container=conf.container;a.init(pid,pconf,data);var ret=a.render(pid);a.dealcallback(conf,{'ret':ret,'data':data,'cfg':pconf});}
a.dealcallback=function(conf,data){if(callnum==0){a.ping.flush();}
if(!conf){return;}
if(!data.ret&&conf.render_default){a.renderDefault(conf);data.ret=true;if(conf.callback){conf.callback(data);}
return;}
if(conf.callback){conf.callback(data);}}})(a);}
_k(QBS);_k(GDT);(function(a){a.ping=(function(){var plist=[];return{'append':function(data){plist.push(data['apurl']);},'appendClick':function(data){a.pingreq(data['acurl']);},'flush':function(){while(plist.length>0){var v=plist.shift();a.pingreq(v);}}}})();function pgvOrder(n,d){var opts={referURL:'http://user.qzone.qq.com/inforcenter',referDomain:'user.qzone.qq.com',referPath:'/inforcenter'}
TCISD.pv('brand.qq.com','/ic_qbs/'+d+'_'+n,opts);}
a.view=function(pid,oid){var data=a.getOrderData(pid,oid);if(!data){return;}
a.ping.append(data);a.ping.flush();}
a.click=function(pid,oid,open_in_this,user_open_link){return a._click(pid,oid,open_in_this,user_open_link);}
a.viewpos=function(pid){var c=a.getPosCfg(pid);if(c&&c.apurl){a.pingreq(c.apurl);}}
var FP=(typeof(QZONE)!='undefined')&&(QZONE.FrontPage||QZONE.FP);a.like=function(uin,pid,oid,cb){pgvOrder(oid,'like_'+pid);FP.addILike(uin,function(o){likeCallback(o,pid,oid);if(cb){cb(o);}});}
function likeCallback(o,pid,oid){if(o&&(o.ret==0)){pgvOrder(oid,'like_succ_'+pid);FP.showMsgbox('喜欢成功',0,2000);}
if(o&&(o.ret!=0)&&o.msg){if(o.ret==-20){FP.showMsgbox('你已经喜欢此空间,请勿重复操作.',0,2000);}else{FP.showMsgbox(o.msg,0,2000);}}}
a.share=function(desc,pid,oid,onSuccess){var odata=a.getOrderData(pid,oid);if(!odata){return;}
var mat=odata['rl'].match(/viewId=([^&]*)/);var viewId=mat&&mat[1];var tpl='{llimit}"spaceuin":{uin},"description":"{desc}","cgi":"http://c.gdt.qq.com/share.fcg","fields":{llimit}"title":"","type":4,"url":"","viewId":"{viewId}"{rlimit},"onSuccess":{_callback},"cgiType":"FormSender"{rlimit}';var uin=FP.getQzoneConfig('loginUin');var data={'uin':uin,'desc':desc,'viewId':viewId,'_callback':'top._gdtShareCallback','llimit':'{','rlimit':'}'}
var str=a.format(tpl,data);var param=encodeURIComponent(str);pgvOrder(oid,'share_'+pid);top._gdtShareCallback=function(){shareCallback(pid,oid,onSuccess);}
FP.popupDialog('分享',{'src':'http://'+top.imgcacheDomain+'/qzone/app/qzshare/popup.html?params='+param+'#platform='},408,300);}
function shareCallback(pid,oid,cb){pgvOrder(oid,'share_succ_'+pid);if(cb){cb();}}})(GDT);})()/*  |xGv00|a7331f94bcf791728c641d6157e31385 */