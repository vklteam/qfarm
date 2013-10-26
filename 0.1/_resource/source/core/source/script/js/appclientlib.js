
//try{document.domain="qq.com";}catch(err){throw new Error("For qq.com domain only!");}
window.QZONE=window.QZONE||{};QZONE.FP=QZONE.FP||{};QZONE.AP=QZONE.AP||{};(function(){var _fp=window,found=0,appid='';try{do{_fp=_fp.parent;if(_fp.QZONE&&_fp.QZONE.FrontPage&&_fp.g_iUin){found=5;break;}}while(_fp!=top);appid=_fp.QZONE.space.getCurrApp();appid=appid[0]=='myhome'||appid[0]=='main'?appid[1]:(appid[0]||'');}catch(ex){found=0;}
QZONE.FP._t=_fp;if(found<5){return false;}
function extend(source,target){for(var k in source){if(k.charAt(0)!='_'&&typeof(source[k])=='function'){target[k]=source[k];}}}
extend(_fp.QZONE.OFP||{},QZONE.FP);extend(_fp.QZONE.FrontPage,QZONE.FP);extend({activateOFPIframe:function(){if(frameElement){if(typeof(frameElement.activate)=="function"){frameElement.activate();}}}},QZONE.FP);extend(_fp.QZONE.appPlatform||{},QZONE.AP);setTimeout(function(){if(window.QZFL&&QZFL.config&&QZFL.config.FSHelperPage){QZFL.config.FSHelperPage="http://"+_fp.imgcacheDomain+"/qzone/v5/toolpages/fp_gbk.html";}},2000);if(appid&&appid!='2'&&appid!='blog'&&appid!='bloglist'){return;}
var ignoreTags=makeMap("ADDRESS,APPLET,BLOCKQUOTE,BODY,BUTTON,CENTER,DD,DEL,DIR,DIV,DL,DT,FIELDSET,FORM,FRAMESET,HR,IFRAME,INS,ISINDEX,LI,MAP,MENU,NOFRAMES,NOSCRIPT,OBJECT,OL,P,PRE,SCRIPT,TABLE,TBODY,TD,TFOOT,TH,THEAD,TR,UL");var rCDN=/(?:^|\.)(?:qq\.com|qzonestyle\.gtimg\.cn)$/i;var CGI='http://open.qzone.qq.com/url_check';var goUser=/(?:^|\.)(?:user\.qzone\.qq\.com\/\d+)$/i;if(document.addEventListener){document.addEventListener('click',firewall,false);}else if(document.attachEvent){document.attachEvent("onclick",firewall);}
function firewall(evt){evt=evt||window.event;var elem=evt.target||evt.srcElement,deepCounter=3,tagName,href,target,meteor;while(elem&&deepCounter>-1){deepCounter--;tagName=elem.nodeName;if(!elem.getAttribute){break;}
href=elem.getAttribute('href');if(isGoUser(href)){elem.hrefbak=href;elem.href=href+"/profile";setTimeout((function(el){return function(){el.href=el.hrefbak;};})(elem),50);}else if(tagName=='A'&&!elem.onclick){href=elem.getAttribute('href');if(href.slice(0,4)=='http'&&!isCDNDomain(href)&&href.slice(0,34)!=CGI){elem.hrefbak=href;if(window.ActiveXObject&&elem.innerHTML.indexOf('<')==-1){meteor=document.createComment('');elem.appendChild(meteor);}
elem.href=CGI+'?appid=503&rappid='+appid+'&url='+encodeURIComponent(href);setTimeout((function(el){return function(){el.href=el.hrefbak;};})(elem),50);}
break;}
if(ignoreTags[tagName]){break;}
elem=elem.parentNode;}}
function isCDNDomain(href){var h=href.split('://');if(h[1]){h=h[1].split('/')[0];return rCDN.test(h);}}
function isGoUser(href){if(!href){return false;}
var h=href.split('://');if(h[1]){return goUser.test(h[1]);}}
function makeMap(str){var obj={},items=str.split(","),i=0,l=items.length;for(;i<l;i++){obj[items[i]]=true;}
return obj;}})();/*  |xGv00|229cf2280d633e2a528619109501f430 */