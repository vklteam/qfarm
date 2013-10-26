window.C = window.C || {};
window.speedTimeStamp = window.speedTimeStamp || {};
C.STATIC_PATH = "/qzone/vas/app/app_canvas/apps/";
C.DOM_APP_MENU = $e("#app_menu");
C.DOM_APP_HINT = $e("#app_hint");
C.DOM_HINT_CONTENT = $e("#hint_content");
C.DOM_APP_ADS = $e("#app_ads");
C.DOM_APP_LINKS = $e("#app_links");
C.DOM_APP_SEARCH = $("app_search");
C.DOM_APP_SEARCH_TAG = $("app_search_tag");
C.DOM_APP_SEARCH_KEY = $e("input[name='key']", C.DOM_APP_SEARCH).elements[0];
C.DOM_APP_NAV = $("app_nav");
C.DOM_APP_CLINIC = $("app_clinic");
C.DOM_APP_EXT = $("app_ext");
C.data = {};
C.appId = APP_ID;
C.isQzone = !!(parent.QZONE || parent.parent.QZONE);
//C.ingameIframe = C.isQzone && (QZONE.FP.getQzoneConfig().version == 6) && (parent != parent.parent);
C.parent = C.ingameIframe ? QZONE.FP._t: parent;
C.isCampus = !!(typeof C.parent.FgetUin == 'function');
C.isPengyou = /pengyou\.com$/i.test(window.location.host);
C.isFull = false;
C.APPID_REFERRER_REGEXP = /^(\d+)\|(.*)$/;
C.CANVAS_URL = 'http://{%domain%}.' + (C.isQzone ? 'qzone.qq.com': C.isPengyou ? 'xiaoyou.pengyou.com': 'xiaoyou.qq.com') + '/cgi-bin/index/appbase_run_unity.cgi';
C.CAMPUS_TO_APP_URL = 'http://' + (C.isPengyou ? 'www.pengyou.com': 'pengyou.qq.com') + '/index.php?mod=appmanager&act=openapp';
C.allowFull = false;
C.title = "canvas";
C.paramsKey = 'appparams';
C.paramsKeyCampus = 'xy_actkey';
C.l = {
    playFull: '<div class="hint"><strong class="icon_hint"><span>提示</span></strong>正在运行大窗口模式</div>',
    quitFull: '<div class="hint"><strong class="icon_hint"><span>提示</span></strong>正在为您切换到普通模式</div>'
};
C.config = {
    load: function() {
        var _js = new QZFL.JsLoader();
        _js.onload = function() {
            speedTimeStamp[6] = new Date();
            if (window.REGISTER) {
                C.data.regInitFn && C.data.regInitFn();
            }
            C.canvas.draw();
            speedTimeStamp[7] = new Date();
            C._stat.speed(speedTimeStamp);
            C.config.bindFeedBackPopUp();
        };
        //_js.load(C.STATIC_PATH + C.appId + "/config.js");
        var _js1 = new QZFL.JsLoader();
        _js1.load(QZFL.dialog.path);
        QZFL.css.insertCSSLink(QZFL.dialog.cssPath);
    },
    bindFeedBackPopUp: function() {
        if (!C.data.enableFeedback) {
            return false;
        }
        var _feedback = QZFL.dom.get('feedback');
        var _aMoreAppElement = C.parent ? C.parent.document.getElementById('aMoreApp') : null;
        window.onunload = function() {
            C.config.checkCurrAppIsPopUp();
        };
        if (_feedback != null) {
            QZFL.event.addEvent(_feedback, 'click',
            function() {
                C.config.popUpFeedBackDialog();
                return false;
            });
        }
        if (_aMoreAppElement != null && window.top.isBindMoreAppPopUp == undefined) {
            QZFL.event.on(_aMoreAppElement, 'click',
            function() {
                C.config.checkCurrAppIsPopUp();
                return false;
            });
            window.top.isBindMoreAppPopUp = true;
        }
    },
    checkCurrAppIsPopUp: function() {
        var _isPopUp = C.data.enableFeedback && C.config.checkIsOnRegisterPage();
        if (_isPopUp) {
            C.config.popUpFeedBackDialog();
        }
    },
    checkIsOnRegisterPage: function() {
        if (window.isOnRegisterPage == undefined) {
            return false;
        }
        return window.isOnRegisterPage;
    },
    popUpFeedBackDialog: function() {
        window.open(C.data.feedback_dialog_url);
    },
    popUpFeedBackDialogBugFixed: function() {
        if (QZFL.userAgent.ie != undefined) {
            window.onunload = null;
            C.config.checkCurrAppIsPopUp();
        }
    },
    set: function(data) {
        C.data = data;
    },
    setFeedBack: function(data) {
        C.feedBack = data;
    },
    get: function() {
        return C.data;
    },
    setFullFlag: function(status) {
        C.isFull = status;
    },
    setTitle: function(title) {
        C.title = title;
    }
};
C.canvas = {
    showFrame: function(url) {
        var _html = '<iframe frameborder="no" allowtransparency="yes" width="100%" height="' + ((window.FLASH_PARAMS && FLASH_PARAMS.height ? parseInt(FLASH_PARAMS.height) : 0) || 600) + '" onload="C.canvas.adjustHeight(this);" src="' + url + '"></iframe>';
        var flashMain = $('flashMain');
        if (C.isQzone && C.isFull) {
            flashMain.style.height = (((FLASH_PARAMS && FLASH_PARAMS.height ? parseInt(FLASH_PARAMS.height) : 0) || 600) + 3) + 'px';
            flashMain.style.overflowY = 'auto';
        }
        flashMain.innerHTML = _html;
        Clinic.monitor.flashInit();
    },
    adjustHeight: function(frame) {
        var cw, doc, height = 0,
        isBC, bdy, docEl;
        if (!frame) {
            return;
        }
        try {
            cw = frame.contentWindow;
            doc = cw.document;
        } catch(_) {
            setTimeout(function() {
                C.canvas.adjustHeight(frame);
            },
            1000);
            return;
        }
        try {
            if ((bdy = doc.body) && (docEl = doc.documentElement)) {
                isBC = doc.compatMode == "BackCompat";
                height = ua.ie ? (isBC ? bdy.scrollHeight: docEl.scrollHeight) : (isBC ? bdy.offsetHeight: docEl.offsetHeight); (frame.height != height) && (frame.height = height);
                if (!cw._frameHack) {
                    docEl.style.overflow = bdy.style.overflow = "hidden";
                    cw._frameHack = true;
                }
            }
        } catch(_) {} finally {
            if (!frame.parentNode) {
                return;
            }
            setTimeout(function() {
                C.canvas.adjustHeight(frame);
            },
            1000);
        }
    },
    switchTab: function(tab) {
        tab = tab.parentNode;
        var tabs = $e('li', tab.parentNode);
        tabs.removeClass('nowtag');
        tab.className = 'nowtag';
    },
    reload: function() {
        var param = ['appid=' + C.appId, 'max=' + (C.isFull ? 1 : 0)];
        var lastApp = C.util.getLastApp();
        if (lastApp) {
            param.push((C.isCampus ? C.paramsKeyCampus: C.paramsKey) + '=' + encodeURIComponent(lastApp + '|'));
        }
        param = param.join('&');
        window.location.href = C.CANVAS_URL.replace('{%domain%}', C.CANVAS_DOMAIN[C.appId]) + "?" + param;
    },
    draw: function() {
        if (C.DOM_APP_SEARCH_TAG && typeof C.data.searchTag === 'string') {
            C.DOM_APP_SEARCH_TAG.value = C.data.searchTag;
        }
        if (C.DOM_APP_SEARCH_KEY && typeof C.data.searchTips === 'string') {
            C.DOM_APP_SEARCH_KEY.value = C.data.searchTips;
        }
        if (C.DOM_APP_SEARCH) {
            C.DOM_APP_SEARCH.onsubmit = function() {
                return C.util.search();
            };
        }
        if (C.isQzone && C.isFull && FLASH_PARAMS && FLASH_PARAMS.height) {
            var height = parseInt(FLASH_PARAMS.height);
            if (!isNaN(height)) {
                height += 42;
                if (height != C.HEIGHT) {
                    QZONE.FP.resizePopupDialog(C.WIDTH, height);
                }
            }
        }
        C.canvas._showMenu();
        C.canvas._showNav();
        C.data.qbsPid && C.tips.loadQbs(C.data.qbsPid);
        if (C.isCampus) {
            C.tips.loadTips(C.appId);
        }
        if (C.data.enableClinic) {
            C.DOM_APP_CLINIC && (C.DOM_APP_CLINIC.style.display = '');
            Clinic.canvas.init();
        }
        C.DOM_APP_EXT && (C.DOM_APP_EXT.innerHTML = C.isFull ? (C.data.extMax || C.data.ext || '') : (C.data.extMin || C.data.ext || ''));
    },
    _showMenu: function() {
        C.DOM_APP_LINKS.setHtml(C.isFull ? (C.data.menuMax || C.data.menu || '') : (C.data.menuMin || C.data.menu || ''));
        setTimeout(function() {
            C.DOM_APP_MENU.effectMove(0, 5)
        },
        0);
    },
    _showNav: function() {
        var _navData = (C.data.nav || []);
        //var html = [C.DOM_APP_NAV.innerHTML];
        var defMask = 31;
        for (var i = 0; i < _navData.length; i++) {
            if (((QZONE && QZONE.FP && QZONE.FP.getQzoneConfig && (QZONE.FP.getQzoneConfig().version == 6)) || (/pengyou\.com$/.test(location.hostname) ? true: false)) && _navData[i].title == '大窗口模式') {
                continue;
            }
            var tag = _navData[i].flag || defMask;
            if ((! (tag & 1) || !C.isQzone) && (!(tag & 2) || !C.isCampus)) {
                continue;
            }
            if ((tag & 16) && C.isPengyou) {
                continue;
            }
            if ((! (tag & 4) || C.isFull) && (!(tag & 8) || !C.isFull)) {
                continue;
            }
            html.push('<li><a' + (_navData[i].id ? (' id="' + _navData[i].id + '"') : '') + ' href="' + _navData[i].href + '" onclick="' + _navData[i].click + '">' + _navData[i].title + '</a></li>');
        };
        //C.DOM_APP_NAV.innerHTML = html.join("");
        $e("#app_nav li:nth-child(" + HIGH_LIGHT + ")").addClass("nowtag");
        QZFL.event.on($('reload_link'), 'click',
        function() {
            C.canvas.reload();
        });
    },
    _yellowDialog: null,
    _showYellowPackage: function(appid, received, extra, vip, vipLevel, isV2) {
        if (!appid) return;
        if (this._yellowDialog) {
            return;
        }
        var _param = {
            appid: appid,
            received: received && received != "false" ? 1 : 0,
            extra: extra,
            vip: vip,
            level: vipLevel
        };
        var _r = [];
        for (var key in _param) {
            if (_param[key] !== undefined) {
                _r.push(key + "=" + encodeURIComponent(_param[key]));
            }
        }
        var _version = window.MINI_PORTAL_VER || 1;
        var _cdn = ({
            'ctc': true,
            'cnc': true,
            'edu': true,
            'cm': true,
            'cn': true,
            'os': true
        })[QZFL.cookie.get('ptisp')];
        var _host = C.isPengyou ? "imgcache.pengyou.com": (_cdn ? QZFL.cookie.get('ptisp') + ".qzs.qq.com": "qzs.qq.com");
        var _url = ["http://", _host, "/qzone/vas/dialog/mini_portal", (isV2 ? "_v2": ""), "/index.html", "?v=" + _version, "#", _r.join("&")].join("");
        var _dialogWidth = 512,
        _dialogHeight = received ? 335 : 245;
        if (isV2) {
            _dialogWidth = 618;
            _dialogHeight = 450;
        }
        this._yellowDialog = QZFL.dialog.create("每日礼包", '<iframe width="' + _dialogWidth + '" height="' + _dialogHeight + '" src="' + QZFL.string.escHTML(_url) + '" frameBorder="no" allowTransparency="" style="position:relative;top:3px;margin-top:-3px;"></iframe>', {
            width: _dialogWidth + 2,
            height: _dialogHeight
        });
        this._yellowDialog.onUnload = QZFL.bind(this,
        function() {
            this._yellowDialog = null;
        });
    },
    showYellowPackage: function(appid, received, extra, vip, vipLevel) {
        var isV2 = false;
        if ((document.domain != "" && document.domain != "pengyou.com") || (appid != 353 && appid != 358)) {
            C.canvas._showYellowPackage(appid, received, extra, vip, vipLevel, isV2);
            return;
        }
        var greyRule = new QZFL.JSONGetter("http://" + (C.parent.siDomain || C.parent.imgcacheDomain || "imgcache.qq.com") + "/qzone/vas/dialog/mini_portal_v2/js/grelease.js", null, {
            t: Math.random()
        },
        "utf-8");
        greyRule.onSuccess = function(o) {
            if (typeof(o) == "object") {
                var real_vlevel = (vip == 0) ? 0 : vipLevel;
                if (SwfAppLib.method.getLoginUin() % 1000 < o.maxuin && real_vlevel >= o.minlevel) {
                    isV2 = true;
                }
            }
            C.canvas._showYellowPackage(appid, received, extra, vip, vipLevel, isV2);
        };
        greyRule.onError = function() {
            C.canvas._showYellowPackage(appid, received, extra, vip, vipLevel, isV2);
        };
        greyRule.send("_Callback");
    },

   showYellowPackage: function(appid, received, extra, vip, vipLevel) {
        var _param = {
            appid: appid,
            received: received && received != "false" ? 1 : 0,
            extra: extra,
            vip: vip,
            level: vipLevel
        };
        var _r = [];
        for (var key in _param) {
            if (_param[key] !== undefined) {
                _r.push(key + "=" + encodeURIComponent(_param[key]));
            }
        }
        if (document.domain) var _host = C.isPengyou ? "imgcache.pengyou.com": "imgcache.qq.com";
        var _url = ["vip.php", "?", _r.join("&")].join("");
        var _dialogWidth = 512,
        _dialogHeight = received ? 260 : 260;
		_dialogHeightw = _dialogHeight + 25;
        var jsLoader = new QZFL.JsLoader();
        jsLoader.onload = function() {
            var div = (SwfAppLib.method.selectFriend._div = document.createElement('div'));
            div.id = 'firendSelector';
            div.style.cssText = 'position:absolute;top:140px;z-index:1000;background-color:#fff;padding:0px;border:1px solid #6b97c1;width:512px;height:' + _dialogHeightw + 'px;overflow:hidden;';
            div.innerHTML = '<div id="dlBox1_head" class="dlBox_head"><h1>每日礼包</h1><a onclick="SwfAppLib.method._selectFriendCancel();" href="#" title="关闭">&nbsp;</a></div><iframe width="' + _dialogWidth + '" height="' + _dialogHeight + '" src="' + QZFL.string.escHTML(_url) + '" frameBorder="no" allowTransparency=""></iframe>';
			document.body.appendChild(div);
            div.style.left = ((div.parentNode.offsetWidth - div.offsetWidth) / 2) + 'px';
        };
		jsLoader.onload();
    },

    closeYellowPackage: function() {
        this._yellowDialog.unload();
    },
    callbackYellowPackage: function(ret) {
        try {
            SwfAppLib.getSwfObject().getGiftBack(ret);
        } catch(_) {}
    }
};
C.tips = {
    show: function(html) {
        if (!html) {
            return;
        }
        if (C.isQzone && C.isFull && FLASH_PARAMS && FLASH_PARAMS.height) {
            var height = parseInt(FLASH_PARAMS.height);
            if (!isNaN(height)) {
                height += 42 + C.HINT_HEIGHT;
                if (height != C.HEIGHT) {
                    QZONE.FP.resizePopupDialog(C.WIDTH, height);
                }
            }
        }
        C.DOM_HINT_CONTENT.setHtml(html);
        C.DOM_APP_HINT.show();
    },
    loadTips: function(tid) {
        if (!tid) {
            return;
        }
        var t = new QZFL.JSONGetter("http://" + (C.parent.siDomain || C.parent.imgcacheDomain || "imgcache.qq.com") + "/qzone/brand_item/qbs/qztips.js", null, {
            t: Math.random()
        },
        "utf-8");
        t.onSuccess = function(o) {
            if (typeof(o) == "object") {
                var html = o[tid];
                html && C.tips.show(html);
            }
        };
        t.send();
    },
    _qbsCallback: function(o) {
        if (o.ret) {
            var data = o.data;
            var link = C.tips._link;
            var p = new QBS.Poller(5000, data.length);
            p.onflip = function(i) {
                if (data[i].rl.indexOf("#") == 0 || data[i].rl.indexOf("void(0)") == 0) {
                    C.tips._noLink = true;
                    link.href = 'javascript:void(0);';
                    link.onclick = function() {
                        return false;
                    };
                    link.style.cursor = "default";
                    link.style.textDecoration = "none";
                    link.innerHTML = data[i].txt
                } else {
                    link.href = data[i].rl;
                    link.onclick = function() {
                        QBS.click(data[i].cl, false, true);
                    };
                    if (C.tips._noLink) {
                        link.style.cursor = 'pointer';
                        link.style.textDecoration = '';
                        C.tips._noLink = false;
                    }
                    link.innerHTML = data[i].txt;
                }
                setTimeout(function() {
                    QBS.ping.append(data[i]);
                    QBS.ping.flush();
                },
                60000);
            };
            C.DOM_APP_ADS.show();
            p.pollPlay();
            C.tips._qbs_p = p;
        } else {
            if (C.tips._my_cont != null) {
                $('app_ads_link').parentNode.replaceChild(C.tips._my_cont, $('app_ads_link'));
            }
            C.DOM_APP_ADS.hide();
        }
    },
    loadQbs: function(pid) {
        if (!window.QBS) {
            return;
        }
        if (!C.tips.qbsPid) {
            if (!pid) {
                return;
            }
            C.tips.qbsPid = pid;
        }
        if (C.tips._qbs_p) {
            C.tips._qbs_p.clear();
            C.tips._qbs_p = null;
            QBS.clear(C.tips.qbsPid);
        }
        C.tips._link = $('app_ads_link');
        QBS.get(C.tips.qbsPid, C.tips._link, 1, false, C.tips._qbsCallback);
        setTimeout(C.tips.loadQbs, 1000 * 60 * 15);
    }
};
C.util = {
    search: function() {
        C._stat.clickCur('ISD.QZONEAPPBASE.UTIL.SEARCH');
        if (typeof C.data.searchOnSubmit === 'function') {
            if (C.data.searchOnSubmit()) {
                return false;
            }
        }
        C.DOM_APP_SEARCH.submit();
    },
    playFull: function(transParam) {
        if (!C.allowFull) {
            return;
        }
        $('flashMain').innerHTML = C.l.playFull;
        var param = ['appid=' + C.appId, 'max=1'];
        var lastApp = C.util.getLastApp();
        if (transParam) {
            var params = C.util.getAppParams(true);
            if (params) {
                param.push(C.paramsKey + '=' + encodeURIComponent(params));
            }
        } else {
            if (lastApp) {
                param.push(C.paramsKey + '=' + encodeURIComponent(lastApp + '|'));
            }
        }
        param = param.join('&');
        QZONE.FP.popupDialog(C.title, {
            src: C.CANVAS_URL.replace('{%domain%}', C.CANVAS_DOMAIN[C.appId]) + "?" + param
        },
        C.WIDTH, C.HEIGHT);
        function _popupFn() {
            var _curApp = QZONE.FP.getCurrentAppWindow();
            var _toAppData = _curApp.C.util._toAppData;
            if (_toAppData) {
                _curApp.C.util.toApp(_toAppData.appid, _toAppData.params, true, true);
            } else {
                _curApp.location.href = C.CANVAS_URL.replace('{%domain%}', C.CANVAS_DOMAIN[C.appId]) + "?appid=" + C.appId + "&max=0" + (lastApp ? ('&' + C.paramsKey + '=' + encodeURIComponent(lastApp + '|')) : '');
            }
        };
        QZONE.FP.appendPopupFn(_popupFn);
    },
    quitFull: function() {
        $('flashMain').innerHTML = C.l.quitFull;
        QZONE.FP.closePopup();
    },
    convertFlashVars: function(o) {
        var _flashvars = [];
        for (var k in o) {
            _flashvars.push(k + "=" + QZFL.string.escHTML(o[k]));
        }
        return _flashvars.join("&");
    },
    _toAppData: null,
    toAppFromFull: function(appid, params) {
        C.util._toAppData = {
            appid: appid,
            params: params
        };
        QZONE.FP.closePopup();
    },
    toApp: function(appid, params, force, original) {
        params = (original ? '': ((C.appId == appid ? (C.util.getLastApp() || C.appId) : C.appId) + '|')) + (params || '');
        if (C.isCampus) {
            var p = ['appid=' + appid, C.paramsKeyCampus + '=' + encodeURIComponent(params)].join('&');
            if (C.DIRECT[appid]) {
                window.location.href = 'nmc.php?appid=' + appid ;
            } else { (top || window).location.href = C.CAMPUS_TO_APP_URL + '&' + p;
            }
            return;
        }
        if (C.isFull) {
            var _curApp = QZONE.FP.getCurrentAppWindow();
            var _toAppFromFull;
            if (_curApp.toAppFromFull) {
                _toAppFromFull = _curApp.toAppFromFull;
            } else if (_curApp.C && _curApp.C.util && _curApp.C.util.toAppFromFull) {
                _toAppFromFull = _curApp.C.util.toAppFromFull;
            }
            setTimeout(function() {
                _toAppFromFull(appid, params);
            },
            0);
        } else {
            force = force ? 1 : 0;
            var p = ['force=' + force, C.paramsKey + '=' + encodeURIComponent(params)].join('&');
            if (C.DIRECT[appid]) {
                setTimeout(function() {
                window.location.href = 'nmc.php?appid=' + appid;
                },
                0);
            } else {
                setTimeout(function() {
                window.location.href = 'nmc.php?appid=' + appid;
                },
                0);
            }
        }
    },
    getParam: function(vname, source) {
        var reg = new RegExp('(?:\\?|\#|\&)' + vname + '=([^&]+)\&?');
        source = source || window.location.toString();
        if (reg.test(source)) {
            var result = reg.exec(source, 'im');
            return result[1];
        }
        return '';
    },
    getAppParams: function(original) {
        if (typeof C.paramsValue === 'undefined') {
            C.paramsValue = decodeURIComponent(C.util.getParam(C.isCampus ? C.paramsKeyCampus: C.paramsKey));
            while (C.isCampus && /\%[0-9A-F]{2}/.test(C.paramsValue)) {
                try {
                    C.paramsValue = decodeURIComponent(C.paramsValue);
                } catch(__ignored) {}
            }
        }
        if (original) {
            return C.paramsValue;
        }
        var re = C.APPID_REFERRER_REGEXP.exec(C.paramsValue);
        if (re) {
            return re[2];
        }
        return C.paramsValue;
    },
    getLastApp: function() {
        var param = C.util.getAppParams(true);
        var re = C.APPID_REFERRER_REGEXP.exec(C.paramsValue);
        if (re) {
            return parseInt(re[1]);
        }
        return 0;
    },
    goBack: function() {
        var appid = C.util.getLastApp();
        if (appid) {
            C.util.toApp(appid);
            return true;
        }
        return false;
    },
    getToken: function() {
        if (C.isQzone) {
            C.util.getToken = function() {
                return QZONE.FP.getACSRFToken();
            };
            return QZONE.FP.getACSRFToken();
        }
        //var str = QZFL.cookie.get("skey");
        var hash = 5381;
        for (var i = 0,
        len = str.length; i < len; ++i) {
            hash += (hash << 5) + str.charAt(i).charCodeAt();
        }
        return hash & 0x7fffffff;
    }
};
C._stat = {
    _tcisd: C.isQzone = window.TCISD,
    pv: function(path, flashVersion) {
        this._tcisd && this._tcisd.pv('appbase.qzone.qq.com', path, {
            timeout: 5000,
            flashVersion: flashVersion || ""
        });
    },
    pvCur: function(attachedPath, flashVersion) {
        attachedPath = attachedPath || '';
        this.pv('/' + (C.isQzone ? 'qz': C.isPengyou ? 'py': 'xy') + '/' + (window.APP_ID || 0) + '/' + (C.isFull ? 'full': 'normal') + attachedPath, flashVersion);
    },
    click: (function() {
        C.parent.__APP_CANVAS_CLICK_IMG = new Image();
        return function(tag, path) {
            C.parent.__APP_CANVAS_CLICK_IMG.src = ['http://pinghot.qq.com/pingd?dm=appbase.qzone.qq.com.hot&url=', path, '&hottag=', tag, '&hotx=9999&hoty=9999&sds=', Math.random()].join('');
        };
    })(),
    clickCur: function(tag, attachedPath) {
        attachedPath = attachedPath || '';
        this.click(tag, '/' + (C.isQzone ? 'qz': C.isPengyou ? 'py': 'xy') + '/' + (window.APP_ID || 0) + '/' + (C.isFull ? 'full': 'normal') + attachedPath);
    },
    speed: function(timeStamps) {
        if (!window.SPEED_STAT_FLAG || parseInt(Math.random() * 100) >= 1 || !this._tcisd) {
            return;
        }
        setTimeout(QZFL.object.bind(this,
        function() {
            var speedStat = this._tcisd.createTimeStat('QzoneVasAppCanvas_' + C.appId + (C.isFull ? '_full': '_normal'), window.SPEED_STAT_FLAG);
            speedStat.zero = timeStamps[0];
            for (var mark = 1,
            timeStamp; timeStamp = timeStamps[mark]; mark++) {
                speedStat.mark(mark, timeStamp);
            }
            speedStat.report();
        }), 5000);
    }
};
window.SwfAppLib = window.SwfAppLib || {};
window.speedTimeStamp = window.speedTimeStamp || {};
SwfAppLib.swfObject = null;
SwfAppLib.getSwfObject = function() {
    if (!SwfAppLib.swfObject) {
        SwfAppLib.swfObject = $('swfAppObject') || $('QQMill');
    }
    return SwfAppLib.swfObject;
};
SwfAppLib.getFlashVersion = function() {
    var _fv = "";
    if (ua.ie) {
        _fv = SwfAppLib.getSwfObject().GetVariable("$version");
        _fv = _fv.substr(4).split(",");
        _fv = [_fv[0], _fv[1]].join(".");
    } else {
        var _v = QZFL.media.getFlashVersion();
        _fv = [_v.major, _v.minor].join(".");
    }
    return _fv;
};
window._base = (SwfAppLib.top = C.parent);
SwfAppLib.platform = {
    isQzone: C.isQzone,
    isCampus: C.isCampus,
    isPengyou: C.isPengyou
};
SwfAppLib.method = {
    showLoginBox: function() {
        try {
            if (this._checkMethod('_base.QZONE.FrontPage.showLoginBox')) {
                _base.QZONE.FrontPage.showLoginBox(null,
                function() {
                    _base.QZONE.FrontPage.getCurrentAppWindow().location.reload();
                });
            } else {
                _base.showLoginFrame();
            }
            return true;
        } catch(e) {
            return false;
        }
    },
    getNickName: function() {
        if (SwfAppLib.method._checkMethod('_base.QZONE.FrontPage.getNickname')) {
            SwfAppLib.method.getNickName = _base.QZONE.FrontPage.getNickname;
            return _base.QZONE.FrontPage.getNickname();
        }
        if (SwfAppLib.method._checkMethod('_base.getCookieUserInfo')) {
            SwfAppLib.method.getNickName = function() {
                return _base.getCookieUserInfo().name;
            };
            return _base.getCookieUserInfo().name;
        }
        SwfAppLib.method.getNickName = function() {
            return '';
        };
        return '';
    },
    getSex: function() {
        var sex = 0;
        if (this._checkMethod('_base.QZONE.FrontPage.getGender')) {
            sex = _base.QZONE.FrontPage.getGender() ? 0 : 1;
        } else if (this._checkMethod('_base.getCookieUserInfo')) {
            sex = _base.getCookieUserInfo().sex;
            sex = sex == 0 ? 1 : 0;
        }
        return sex;
    },
    getLoginUin: function() {
        if (SwfAppLib.method._checkMethod('_base.FgetUin')) {
            SwfAppLib.method.getLoginUin = _base.FgetUin;
            return _base.FgetUin();
        } else if (SwfAppLib.method._checkMethod('_base.checkLogin')) {
            SwfAppLib.method.getLoginUin = _base.checkLogin;
            return _base.checkLogin();
        }
        return 0;
    },
    getHash: function() {
        if (SwfAppLib.method._checkMethod('_base.getCookieUserInfo')) {
            return _base.getCookieUserInfo().hash;
        }
        return this.getLoginUin();
    },
    //getCookie: QZFL.cookie.get,
    setCookie: QZFL.cookie.set,
    getHead: function(uin, size) {
        if (SwfAppLib.method._checkMethod('_base.QZONE.FrontPage.getPURL')) {
            SwfAppLib.method.getHead = _base.QZONE.FrontPage.getPURL;
            return _base.QZONE.FrontPage.getPURL(uin, size);
        }
        SwfAppLib.method.getHead = function() {
            return '';
        };
        return '';
    },
    getHeadList: function(uins, size) {
        if (SwfAppLib.method._checkMethod('_base.QZONE.FrontPage.getPortraitList')) {
            _base.QZONE.FrontPage.getPortraitList(uins,
            function(data) {
                try {
                    SwfAppLib.getSwfObject().setHeadList(data);
                } catch(_) {}
            },
            {
                size: size
            });
        }
    },
    getUploadUrl: function() {
		SwfAppLib.getSwfObject().setUploadUrl('api/savepic.php');
		return 0;
    },
    getAppDuration: function() {
        if (SwfAppLib.platform.isCampus && SwfAppLib.method._checkMethod('C.parent.XY_APP.getAppDuration')) {
            SwfAppLib.method.getAppDuration = C.parent.XY_APP.getAppDuration;
            return C.parent.XY_APP.getAppDuration();
        }
        if (SwfAppLib.platform.isQzone && SwfAppLib.method._checkMethod('QZONE.AP.getAppDuration')) {
            SwfAppLib.method.getAppDuration = QZONE.AP.getAppDuration;
            return QZONE.AP.getAppDuration();
        }
        SwfAppLib.method.getAppDuration = function() {
            return 0;
        };
        return 0;
    },
    isAppInstalled: function(appid) {
        if (SwfAppLib.platform.isCampus) {
            var installed = !!C.parent.XY_APP.ifAppInstalled(appid);
            try {
                SwfAppLib.getSwfObject().setAppInstalled(appid, installed);
            } catch(_) {}
            return;
        }
        QZONE.AP.ifAppInstalled(appid,
        function(installed) {
            try {
                SwfAppLib.getSwfObject().setAppInstalled(appid, installed);
            } catch(_) {}
        });
    },
addCampusFriend: function(uid) {
        if (SwfAppLib.platform.isCampus && C.parent.XY.AppLib && C.parent.XY.AppLib.addFriendSimple) {
            C.parent.XY.AppLib.addFriendSimple(uid,
            function(ret) {
                try {
                    var swf = SwfAppLib.getSwfObject();
                    if (ret.err) {
                        swf.showMsgbox(ret.msg);
                    } else {
                        swf.showMsgbox();
                    }
                } catch(_) {}
            });
        }
    },
    selectFriend: function() {
        if (SwfAppLib.platform.isCampus) {
            var uinList = [];
            function fnt(o) {
                if (o.length > 1) {
                    C.parent.showMsg('您只能选择一位好友', 2000);
                    return;
                }
                var uin = o[0].u;
                var name = o[0].name;
                try {
                    SwfAppLib.getSwfObject().friendSelected(uin, name);
                } catch(_) {}
                return true;
            }
            C.parent.ShowSelector(fnt, null, false);
            return;
        }
        var jsLoader = new QZFL.JsLoader();
        jsLoader.onload = function() {
            var div = (SwfAppLib.method.selectFriend._div = document.createElement('div'));
            div.id = 'firendSelector';
            div.style.cssText = 'position:absolute;top:100px;z-index:1000;background-color:#fff;padding:10px;border:1px solid #6b97c1;width:542px;overflow:hidden;';
            div.innerHTML = '<div style="text-align:center;clear:both;padding-top:10px;"><button type="button" onclick="SwfAppLib.method._selectFriendOK();" style="border:1px solid #87A2D3;cursor:pointer;font-size:12px;height:22px;line-height:22px;margin-right:10px;padding:0px 8px;">确定</button><button type="button" onclick="SwfAppLib.method._selectFriendCancel();" style="border:1px solid #87A2D3;cursor:pointer;font-size:12px;height:22px;line-height:22px;padding:0px 8px;">取消</button></div>';
            document.body.appendChild(div);
            QZONE.friends.Selector.setup({
                uin: 1,
                multiChoose: false,
                module: '000',
                row: 2,
                result: true,
                limit: 1,
                target: 'firendSelector',
                insertFirst: true,
                careInGroup: false,
                ui: true,
                showOnline: true,
                preSource: []
            });
            div.style.left = ((div.parentNode.offsetWidth - div.offsetWidth) / 2) + 'px';
            SwfAppLib.getSwfObject().width = '1';
            SwfAppLib.getSwfObject().height = '1';
        };
        jsLoader.load('source/script/js/friendSelector.js', document, 'utf-8');
    },
    _selectFriendOK: function() {
        var selected = QZONE.friends.Selector.getSelect();
        var list = [];
        for (var uin in selected) {
            list.push(selected[uin]);
        }
        if (list.length == 0) {
            _base.QZONE.FrontPage.showMsgbox('您还没有选择好友', 0, 2000);
        } else if (list.length > 1) {
            _base.QZONE.FrontPage.showMsgbox('您只能选择一位好友', 0, 2000);
        } else {
            SwfAppLib.method._selectFriendCancel();
            try {
                SwfAppLib.getSwfObject().friendSelected(list[0].uin, list[0].name);
            } catch(_) {}
        }
    },
    _selectFriendCancel: function() {
        SwfAppLib.method.selectFriend._div.parentNode.removeChild(SwfAppLib.method.selectFriend._div);
        SwfAppLib.getSwfObject().width = FLASH_PARAMS.width || '100%';
        SwfAppLib.getSwfObject().height = FLASH_PARAMS.height || '600';
    },

    getServerTime: function() {
        if (SwfAppLib.method._checkMethod('_base.QZONE.FrontPage.getSvrTime')) {
            SwfAppLib.method.getSeverTime = _base.QZONE.FrontPage.getSvrTime;
            return _base.QZONE.FrontPage.getSvrTime();
        }
        SwfAppLib.method.getSeverTime = function() {
            return new Date();
        };
        return new Date();
    },
    getVipInfo: function(isVip, vipLevel, isYear) {
        var callback = function(ownerinfo) {
            try {
                var date = ownerinfo.expiredate.split('-');
                var year = new Number(date[0]) + 0;
                var month = new Number(date[1]) - 1;
                var day = new Number(date[2]) + 0;
                var overday = (new Date(year, month, day)).getTime();
                var now = (new Date(ownerinfo.now * 1000)).getTime();
                var vipOverday = parseInt((overday - now) / 86400000);
                SwfAppLib.getSwfObject().setYellowInfo(vipOverday);
            } catch(_) {
                return;
            }
        };
        if (SwfAppLib.method._checkMethod('_base.g_JData.yellowInfo.ownerinfo[0]')) {
            callback(_base.g_JData.yellowInfo.ownerinfo[0]);
        } else {
            if (SwfAppLib.platform.isQzone) {
                isVip = _base.QZONE.FrontPage.getVipStatus() == 1;
                vipLevel = _base.QZONE.FrontPage.getUserVIPLevel();
                isYear = _base.QZONE.FrontPage.isUserVIPExpress();
            } else {
                isVip = !!isVip;
                vipLevel = vipLevel || 0;
                isYear = !!isYear;
            }
            if (!isVip && vipLevel == 0) {
                return;
            }
            var getter = new QZFL.JSONGetter('http://vip.qzone.qq.com/fcg-bin/fcg_get_mall_ex', null, {
                uin: SwfAppLib.method.getLoginUin(),
                vip: isVip ? 1 : 0,
                nf: isYear ? 1 : 0,
                mode: 1,
                sds: Math.random()
            },
            'gb2312');
            getter.onSuccess = function(obj) {
                if (!obj || !obj.ownerinfo || obj.result == '0') {
                    return;
                }
                callback(obj.ownerinfo);
            };
            getter.send('_Callback');
        }
    },
    attachDefParam: function(url) {
       /* var defParam = {
            g_tk: C.util.getToken()
        };
        var p = [];
        for (var k in defParam) {
            p.push(encodeURIComponent(k) + '=' + encodeURIComponent(defParam[k]));
        }
        p = p.join('&');
        var i = url.indexOf('?');
        if (i == -1) {
            url += '?' + p;
        } else if (i == url.length - 1) {
            url += p;
        } else {
            url += '&' + p;
        }*/
        return url;
    },
    valueStat: function(statId, resultType, returnType, rate, duration) {
        C._stat._tcisd && C._stat._tcisd.valueStat(statId, resultType, returnType, {
            reportRate: rate,
            duration: duration
        });
    },
    _pingSender: window.QZFL && QZFL.pingSender ? QZFL.pingSender: _base.QZFL && _base.QZFL.pingSender ? _base.QZFL.pingSender: null,
    speedStat: function(flags, timeStamps) {
        var ps = SwfAppLib.method._pingSender;
        if (!ps) {
            return;
        }
        var url = ['nmc.php?'];
        for (var mark = 1,
        timeStamp; typeof(timeStamp = timeStamps[mark]) !== 'undefined'; mark++) {
            url.push(mark, '=', timeStamp, '&');
        }
        for (var i = 0,
        flag; i < 3 && typeof(flag = flags[i]) !== 'undefined'; i++) {
            url.push('flag', i + 1, '=', flag, '&');
        }
        url.push('sds=', Math.random());
        ps(url.join(''));
    },
    _checkMethod: function(methodName) {
        var result = true;
        try {
            result = (typeof eval(methodName) != 'undefined');
        } catch(error) {
            result = false;
        }
        return result;
    },
    popReceiveAward: function(op, id) {
        if (arguments.length < 2) {
            return false;
        }
        if (Object.prototype.toString.call(op) == '[object Number]' || Object.prototype.toString.call(id) == '[object String]') {
            var _src = 'http://nc.qzone.qq.com/cgi-bin/cgi_farm_retrieve_userinfo?' + 'op=' + op + '&id=' + id + '&g_tk=' + C.util.getToken() + '&tm=' + new Date().getTime();
            var d = QZFL.dialog.create("QQ农场年末转盘中大奖活动", {
                src: _src
            },
            {
                showMask: true
            });
            d.setSize(430, 425);
            var iframe = d.dialogContent.firstChild;
            if (iframe.attachEvent) {
                iframe.attachEvent("onload",
                function() {
                    onload();
                });
            } else {
                iframe.onload = function() {
                    onload();
                };
            }
            function onload() {
                var win = iframe.contentWindow;
                if (win) {
                    var w = win.document.body.clientWidth,
                    h = win.document.body.clientHeight;
                    d.setSize(w, h);
                }
            };
        }
    },
    flashInit: function() {
        speedTimeStamp[4] = new Date();
        Clinic.monitor.flashInit();
    }
};
SwfAppLib.pay = {
    showDna: function(url) {
        if (SwfAppLib.platform.isPengyou) {
            url = 'http://imgcache.pengyou.com/qzone/vas/app/app_canvas/xd.htm#type=0&url=' + encodeURIComponent(url) + '&fns=newIframe_onClose';
        }
        var _html = '<iframe style="width: 400px; height: 300px;" frameborder="0" allowtransparency="yes" src="' + url + '"></iframe>';
        SwfAppLib.pay._dialog = QZFL.dialog.create('统一安全验证', _html, {
            width: 400,
            height: 300,
            needCss: !C.isQzone
        });
    },
    callbackDna: function(dnaKey) {
        if (dnaKey) {
            try {
                SwfAppLib.getSwfObject().forDNA(dnaKey, 1);
            } catch(_) {}
        }
        SwfAppLib.pay._dialog.unload();
    },
    buyDlg: null,
    showBuy: function(urlParam, sandbox) {
        if (!urlParam || SwfAppLib.pay.buyDlg) {
            return;
        }
        var url = urlParam;
        var width = 410,
        height = 300;
        window.callbackBuy = function() {
            try {
                SwfAppLib.getSwfObject().setBoughtRes({
                    ret: 'ok'
                });
            } catch(_) {}
            window.callbackBuy = undefined;
            try {
                delete window.callbackBuy;
            } catch(_) {}
        };
        var onUnload = function() {
            SwfAppLib.pay.buyDlg = null;
            window.closeBuy = undefined;
            try {
                delete window.closeBuy;
            } catch(_) {}
            if (window.callbackBuy) {
                window.callbackBuy = undefined;
                try {
                    delete window.callbackBuy;
                } catch(_) {}
            }
        };
        window.closeBuy = function() {
            SwfAppLib.pay.buyDlg && SwfAppLib.pay.buyDlg.unload();
        };
        SwfAppLib.pay.buyDlg = QZFL.dialog.create('购买道具', '<iframe id="popup_dialog_frame" frameborder="no" allowtransparency="yes" src="' + url + '" style="width:' + width + 'px;height:' + height + 'px"></iframe>', {
            width: width + 2,
            height: height
        });
        SwfAppLib.pay.buyDlg.onUnload = onUnload;
        SwfAppLib.pay.buyDlg.show();
    }
};
var newIframe_onClose = SwfAppLib.pay.callbackDna;
var getParameter = C.util.getParam;
var escHTML = QZFL.string.escHTML;
var XD = {
    mode: 2,
    manualStartHashMonitor: false,
    proxyUrl: {
    },
    _useNative: true,
    _maps: {},
    _origin: location.origin || (location.protocol + '//' + location.host),
    _onMsgFn: function(origin, e) {
        var data = e.data;
        data = JSON.parse(data);
        var fns;
        if (fns = XD._maps[origin]) {
            for (var i = 0,
            l = fns.length; i < l; i++) {
                if (fns[i].callback.call(null, data, e.origin, fns[i].param) === false) {
                    break;
                }
            }
        }
    },
    _onMsg: function(e) {
        XD._onMsgFn(e.origin, e);
        XD._onMsgFn('*', e);
    },
    _hasRegisted: false,
    _regEvt: function() {
        if (XD._hasRegisted) {
            return;
        }
        XD._hasRegisted = true;
        if (XD._useNative && window.postMessage) {
            if (window.addEventListener) {
                window.addEventListener('message', XD._onMsg, false);
            } else if (window.attachEvent) {
                window.attachEvent('onmessage', XD._onMsg);
            } else {
                window.onmessage = XD._onMsg;
            }
        } else if (XD.mode == 1) {
            if (/(#|&)xd_msg=([^&\|]*)\|([^&\|]+)\|(\d+)0\.(\d+)(&|$)/.test(location.hash)) {
                location.hash = location.hash.replace(/(#?)(&?xd_msg=([^&\|]*)\|([^&\|]+)\|(\d+)0\.(\d+)(&|$))+/, '$1');
            } ! XD.manualStartHashMonitor && XD.startHashMonitor();
        } else if (XD.mode == 2) {
            document.domain = document.domain;
        }
    },
    _isHashMonitorRunning: false,
    _canHashMonitorRun: true,
    _hashMonitor: (function() {
        var lastTime = -1;
        var lastRandom = -1;
        var runFn = function() {
            var hash = location.hash;
            var m = /(#|&)xd_msg=([^&\|]*)\|([^&\|]+)\|(\d+)0\.(\d+)(&|$)/.exec(hash);
            if (m) {
                var time = parseInt(m[4]);
                var random = parseInt(m[5]);
                if (random == lastRandom || time < lastTime) {
                    return;
                }
                lastRandom = random;
                lastTime = time;
                XD._onMsg({
                    origin: decodeURIComponent(m[3]),
                    data: decodeURIComponent(m[2])
                });
            }
        };
        var detectFn = function() {
            if (!XD._canHashMonitorRun) {
                return;
            }
            runFn();
            XD._canHashMonitorRun && setTimeout(detectFn, 100);
        };
        return detectFn;
    })(),
    startHashMonitor: function() {
        if (XD._isHashMonitorRunning) {
            return;
        }
        XD._isHashMonitorRunning = true;
        XD._canHashMonitorRun = true;
        XD._hashMonitor();
    },
    stopHashMonitor: function() {
        XD._canHashMonitorRun = false;
        XD._isHashMonitorRunning = false;
    },
    bind: function(receiveCb, fromOrigin, param) {
        fromOrigin = fromOrigin || '*';
        var m = /^([^:]+:\/\/[^\/]+)\/.*$/.exec(fromOrigin);
        m && (fromOrigin = m[1]);
        XD._maps[fromOrigin] = XD._maps[fromOrigin] || [];
        XD._maps[fromOrigin].push({
            callback: receiveCb,
            param: param
        });
        XD._regEvt();
    },
    unbind: function(receiveCb, fromOrigin) {
        var list = XD._maps[fromOrigin];
        if (list) {
            var tmp = [];
            for (var i = 0,
            l = list.length; i < l; i++) {
                if (list[i] && list[i].callback !== receiveCb) {
                    tmp.push(list[i]);
                }
            }
            XD._maps[fromOrigin] = tmp;
        }
    },
    post: function(msg, targetUrl, target) {
        msg = msg || '';
        msg = JSON.stringify(msg);
        targetUrl = targetUrl || '*';
        if (typeof target != 'object') {
            target = target == 0 ? 0 : (target || 'parent');
        }
        var m, targetOrigin;
        if (XD._useNative && window.postMessage) {
            if (typeof target === 'string' || typeof target === 'number') {
                target = window[target];
            }
            if (m = /^[^:]+:\/\/[^\/]+/.exec(targetUrl)) {
                targetOrigin = m[0];
            } else {
                targetOrigin = '*';
            }
            target.postMessage(msg, targetOrigin);
        } else if (XD.mode == 1) {
            if (!/^[^:]+:\/\/[^\/]+/.test(targetUrl)) {
                throw new Error('invalid targetUrl');
            }
            if (/(#|&)xd_msg=([^&\|]*)\|([^&\|]+)\|(\d+)0\.(\d+)(&|$)/.test(targetUrl)) {
                targetUrl = targetUrl.replace(/(#?)(&?xd_msg=([^&\|]*)\|([^&\|]+)\|(\d+)0\.(\d+)(&|$))+/, '$1');
            }
            if (typeof target === 'string' || typeof target === 'number') {
                target = window[target];
            }
            target.location.href = targetUrl + (/#$/.test(targetUrl) ? '': /#/.test(targetUrl) ? '&': '#') + 'xd_msg=' + encodeURIComponent(msg) + '|' + encodeURIComponent(XD._origin) + '|' + (new Date()).getTime() + '' + Math.random();
        } else if (XD.mode == 2) {
            if (typeof target === 'string') {
                target = '"' + target + '"';
            } else if (typeof target !== 'number') {
                throw new Error('target must be a string or number');
            }
            if (m = /^((?:[^:]+:\/\/)?[^\/]+).*$/.exec(targetUrl)) {
                targetOrigin = m[1];
            } else {
                throw new Error('invalid targetUrl');
            }
            var proxy = XD.proxyUrl[targetOrigin];
            var targetDomain = targetOrigin.replace(/^([^:]+:\/\/)?([^:]+)(:\d+)?$/, '$2');
            if (!proxy) {
                var i;
                do {
                    proxy = XD.proxyUrl[targetDomain];
                } while (! proxy && ( i = targetDomain . indexOf ('.')) != targetDomain.lastIndexOf('.') && (targetDomain = targetDomain.substr(++i)));
                if (!proxy) {
                    proxy = XD.proxyUrl['*'];
                }
                if (!proxy) {
                    throw new Error('cannot get proxy url');
                }
            }
            if (!/^[^:]+:\/\/[^\/]+/.test(proxy)) {
                if (targetOrigin == '*') {
                    throw new Error('invalid targetUrl or proxyUrl');
                }
                proxy = targetOrigin + '/' + proxy.replace(/^(?:\/)(.+)$/, '$1');
            }
            proxy += '#target=' + encodeURIComponent(target) + '&domain=' + targetDomain + '&origin=' + encodeURIComponent(XD._origin);
            var html = '<iframe name="__XD_FRAME_NAME_' + encodeURIComponent(msg) + '" src="' + proxy + '" onload="var d=this.parentNode;setTimeout(function(){d.parentNode.removeChild(d)},1000)"></iframe>';
            var div = document.createElement('div');
            div.innerHTML = html;
            if (!XD._hiddenDiv) {
                XD._hiddenDiv = document.createElement('div');
                XD._hiddenDiv.style.cssText = 'position:absolute;top:-9px;left:-9px;width:0;height:0;overflow:hidden;';
                document.body.appendChild(XD._hiddenDiv);
            }
            XD._hiddenDiv.appendChild(div);
        }
    },
    _hiddenDiv: null
};
if (!window.JSON) {
    window.JSON = {};
} (!JSON.stringify || !JSON.parse) && (function() {
    "use strict";
    function f(n) {
        return n < 10 ? '0' + n: n;
    }
    if (typeof Date.prototype.toJSON !== 'function') {
        Date.prototype.toJSON = function(key) {
            return isFinite(this.valueOf()) ? this.getUTCFullYear() + '-' + f(this.getUTCMonth() + 1) + '-' + f(this.getUTCDate()) + 'T' + f(this.getUTCHours()) + ':' + f(this.getUTCMinutes()) + ':' + f(this.getUTCSeconds()) + 'Z': null;
        };
        String.prototype.toJSON = Number.prototype.toJSON = Boolean.prototype.toJSON = function(key) {
            return this.valueOf();
        };
    }
    var cx = /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
    escapable = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
    gap, indent, meta = {
        '\b': '\\b',
        '\t': '\\t',
        '\n': '\\n',
        '\f': '\\f',
        '\r': '\\r',
        '"': '\\"',
        '\\': '\\\\'
    },
    rep;
    function quote(string) {
        escapable.lastIndex = 0;
        return escapable.test(string) ? '"' + string.replace(escapable,
        function(a) {
            var c = meta[a];
            return typeof c === 'string' ? c: '\\u' + ('0000' + a.charCodeAt(0).toString(16)).slice( - 4);
        }) + '"': '"' + string + '"';
    }
    function str(key, holder) {
        var i, k, v, length, mind = gap,
        partial, value = holder[key];
        if (value && typeof value === 'object' && typeof value.toJSON === 'function') {
            value = value.toJSON(key);
        }
        if (typeof rep === 'function') {
            value = rep.call(holder, key, value);
        }
        switch (typeof value) {
        case 'string':
            return quote(value);
        case 'number':
            return isFinite(value) ? String(value) : 'null';
        case 'boolean':
        case 'null':
            return String(value);
        case 'object':
            if (!value) {
                return 'null';
            }
            gap += indent;
            partial = [];
            if (Object.prototype.toString.apply(value) === '[object Array]') {
                length = value.length;
                for (i = 0; i < length; i += 1) {
                    partial[i] = str(i, value) || 'null';
                }
                v = partial.length === 0 ? '[]': gap ? '[\n' + gap + partial.join(',\n' + gap) + '\n' + mind + ']': '[' + partial.join(',') + ']';
                gap = mind;
                return v;
            }
            if (rep && typeof rep === 'object') {
                length = rep.length;
                for (i = 0; i < length; i += 1) {
                    k = rep[i];
                    if (typeof k === 'string') {
                        v = str(k, value);
                        if (v) {
                            partial.push(quote(k) + (gap ? ': ': ':') + v);
                        }
                    }
                }
            } else {
                for (k in value) {
                    if (Object.hasOwnProperty.call(value, k)) {
                        v = str(k, value);
                        if (v) {
                            partial.push(quote(k) + (gap ? ': ': ':') + v);
                        }
                    }
                }
            }
            v = partial.length === 0 ? '{}': gap ? '{\n' + gap + partial.join(',\n' + gap) + '\n' + mind + '}': '{' + partial.join(',') + '}';
            gap = mind;
            return v;
        }
    }
    if (typeof JSON.stringify !== 'function') {
        JSON.stringify = function(value, replacer, space) {
            var i;
            gap = '';
            indent = '';
            if (typeof space === 'number') {
                for (i = 0; i < space; i += 1) {
                    indent += ' ';
                }
            } else if (typeof space === 'string') {
                indent = space;
            }
            rep = replacer;
            if (replacer && typeof replacer !== 'function' && (typeof replacer !== 'object' || typeof replacer.length !== 'number')) {
                throw new Error('JSON.stringify');
            }
            return str('', {
                '': value
            });
        };
    }
    if (typeof JSON.parse !== 'function') {
        JSON.parse = function(text, reviver) {
            var j;
            function walk(holder, key) {
                var k, v, value = holder[key];
                if (value && typeof value === 'object') {
                    for (k in value) {
                        if (Object.hasOwnProperty.call(value, k)) {
                            v = walk(value, k);
                            if (v !== undefined) {
                                value[k] = v;
                            } else {
                                delete value[k];
                            }
                        }
                    }
                }
                return reviver.call(holder, key, value);
            }
            text = String(text);
            cx.lastIndex = 0;
            if (cx.test(text)) {
                text = text.replace(cx,
                function(a) {
                    return '\\u' + ('0000' + a.charCodeAt(0).toString(16)).slice( - 4);
                });
            }
            if (/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, '@').replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']').replace(/(?:^|:|,)(?:\s*\[)+/g, ''))) {
                j = eval('(' + text + ')');
                return typeof reviver === 'function' ? walk({
                    '': j
                },
                '') : j;
            }
            throw new SyntaxError('JSON.parse');
        };
    }
} ());
window.Clinic = window.Clinic || {};
Clinic._browser = QZFL.userAgent.ie == 6 && !window._BROWSER_SKIP;
Clinic._browserFlash = !!window._BROWSER_FLASH;
Clinic._x64 = /WOW64/i.test(navigator.userAgent);
XD.mode = 1;
Clinic.util = {
    _dialog: null,
    showDialog: function() {
        var t = '您遇到问题了吗？';
        var w = 430;
        var h = Clinic._browser ? 440 : 370;
        var s = 'http://' + (C.isPengyou ? 'imgcache.pengyou.com': C.parent.imgcacheDomain || 'qzs.qq.com') + '/qzone/vas/app/app_canvas/clinic.htm#' + w + ',' + h;
        var html = '<iframe id="clinic_popup_dialog_frame" frameborder="no" allowtransparency="yes" src="' + s + '" width="' + (w - 2) + '" height="' + h + '"></iframe>';
        this._dialog = QZFL.dialog.create(t, html, {
            width: w,
            height: h
        });
        this._dialog.onUnload = function() {
            Clinic.util._dialog = null;
            if (Clinic.log._logs.length > 0 || Clinic.caching._busted) {
                C.canvas.reload();
            }
        };
        C._stat.pvCur('/clinic');
    },
    setSize: function(width, height) {
        this._dialog.setSize(width + 2, height);
        $('clinic_popup_dialog_frame').width = width + '';
        $('clinic_popup_dialog_frame').height = height + '';
    },
    setTitle: function(title) {
        this._dialog.fillTitle(title || '您遇到问题了吗？');
    },
    getFlashVer: function() {
        try {
            try {
                var axo = new ActiveXObject('ShockwaveFlash.ShockwaveFlash.6');
                try {
                    axo.AllowScriptAccess = 'always';
                } catch(e) {
                    return '6.0.0';
                }
            } catch(e) {}
            return new ActiveXObject('ShockwaveFlash.ShockwaveFlash').GetVariable('$version').replace(/\D+/g, ',').match(/^,?(.+),?$/)[1].replace(/,/g, '.');
        } catch(e) {
            try {
                if (navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin) {
                    return ((navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]).description.replace(/\D+/g, ",").match(/^,?(.+),?$/)[1]).replace(/,/g, '.');
                }
            } catch(e) {}
        }
        return '0.0.0';
    },
    showMsgbox: function(content, style, timeout) {
        QZFL.widget.msgbox.show(content, style, timeout);
    },
    _ENV: {
        _data: (C.parent.__APP_CANVAS_DATA = C.parent.__APP_CANVAS_DATA || {}),
        get: function(key) {
            if (C.isQzone) {
                this.get = C.parent.ENV.get;
                return C.parent.ENV.get(key);
            }
            return this._data[key];
        },
        set: function(key, value) {
            if (C.isQzone) {
                this.set = C.parent.ENV.set;
                return C.parent.ENV.set(key, value);
            }
            if (typeof value === 'undefined') {
                if (typeof key === 'undefined') {
                    return false;
                } else if (! (this._data[key] === undefined)) {
                    return false;
                }
            } else {
                this._data[key] = value;
                return true;
            }
        },
        del: function(key) {
            if (C.isQzone) {
                this.del = C.parent.ENV.del;
                return C.parent.ENV.del(key);
            }
            delete this._data[key];
            return true;
        }
    }
};
Clinic.canvas = {
    _DOM: {
        CLINIC_LINK: null,
        CLINIC_ICON: null
    },
    _enabled: false,
    init: function() {
        this._DOM.CLINIC_LINK = $('clinic_link');
        this._DOM.CLINIC_ICON = $('clinic_icon');
        QZFL.event.on(this._DOM.CLINIC_LINK, 'click',
        function() {
            Clinic.util.showDialog();
        });
        if (QZFL.userAgent.ie && QZFL.userAgent.ie < 7) {
            Clinic.canvas._DOM.CLINIC_ICON.src = '/qzone/vas/app/app_canvas/img/ca.gif'
        } else {
            QZFL.event.on(this._DOM.CLINIC_LINK, 'mouseover',
            function() {
                Clinic.canvas.blinkUnderIE6();
            });
            QZFL.event.on(this._DOM.CLINIC_LINK, 'mouseout',
            function() {
                Clinic.canvas.init._timeout = setTimeout(function() {
                    Clinic.canvas.init._timeout = null;
                    Clinic.canvas._DOM.CLINIC_ICON.src = '/qzone/vas/app/app_canvas/img/c.gif';
                },
                100);
            });
        }
        this._enabled = true;
        if (Clinic._browser && Clinic._browserFlash) {
            setTimeout(function() {
                Clinic.canvas.activate();
            },
            0);
        }
        //var time = +QZFL.cookie.get('appbase_clinic_browser');
        var _tcisd = C._stat._tcisd;
        if (_tcisd && time && QZFL.userAgent.ie == 8) {
            C._stat.clickCur('ISD.QZONEAPPCLINIC.BROWSER-SUCCESS.' + (C.isQzone ? 'QZ': C.isPengyou ? 'PY': 'XY') + '-' + (window.APP_ID || 0) + '-' + (C.isFull ? 'FULL': 'NORMAL'), '/clinic');
            var speedStat = _tcisd.createTimeStat('QzoneVasAppCanvasClinicBrowser', [7721, 5, 4]);
            speedStat.zero = new Date(time);
            speedStat.mark(1, new Date());
            speedStat.report();
           // QZFL.cookie.del('appbase_clinic_browser', location.hostname, '/cgi-bin/index/');
        }
    },
    blinkUnderIE6: function() {
        Clinic.canvas.init._timeout ? clearTimeout(Clinic.canvas.init._timeout) : (Clinic.canvas._DOM.CLINIC_ICON.src = '/qzone/vas/app/app_canvas/img/ca.gif');
    },
    _isActivated: false,
    activate: function() {
        if (!this._enabled) {
            return false;
        }
        if (this._isActivated) {
            return true;
        }
        QZFL.event.removeEvent(this._DOM.CLINIC_LINK, 'mouseover');
        QZFL.event.removeEvent(this._DOM.CLINIC_LINK, 'mouseout');
        this._DOM.CLINIC_ICON.src = '/qzone/vas/app/app_canvas/img/ca.gif';
        this._isActivated = true;
        return true;
    },
    frameInit: function(_cb) {
        var _js = new QZFL.JsLoader();
        _js.onload = _cb;
        _js.load(C.STATIC_PATH + APP_ID + '/buster.js');
    }
};
//document.write('123');
Clinic.log = {
	
    _ACTIVATION_NUM: {
        1 : 1,
        2 : 5,
        3 : 20
    },
    _logCount: {},
    _logs: [],
	//document.write('123');
   // _systemInfo: ['User Agent: ' + navigator.userAgent, 'Flash 版本: ' + Clinic.util.getFlashVer(), '浏览器语言: ' + navigator.language, '显示器信息: ' + screen.width + '*' + screen.height + '[' + screen.availWidth + '*' + screen.availHeight + ']@' + screen.colorDepth, '登录用户QQ: ' + (new Number(QZFL.cookie.get('DZck_2132_sid').match(/\d+/)[0]) + 0), 'AppImg域名: {$APP_IMG_DOMAIN$}'],
   // alert("123");
		maxLevel: 0,
    report: function(level, msg) {
        if (!this.maxLevel || level < this.maxLevel) {
            this.maxLevel = level;
        }
        this._logCount[level] = (this._logCount[level] || 0) + 1;
        this._logs.push('Level ' + level + ': ' + msg);
        if (this._ACTIVATION_NUM[level] && this._logCount[level] >= this._ACTIVATION_NUM[level]) {
            if (!Clinic.canvas.activate()) {
                var interval = setInterval(function() {
                    if (Clinic.canvas.activate()) {
                        clearInterval(interval);
                    }
                },
                1000);
            }
        }
    },
    _getReport: function() {
        return this._systemInfo.concat(this._logs).join('\r\n').replace(/\{\$APP_IMG_DOMAIN\$\}/g, QZFL.util.URI(FLASH_PARAMS.src).host);
    },
    show: function(textarea) {
        if (this._logs.length == 0) {
            Clinic.util.showMsgbox('暂时没有相关的错误信息', 0, 2000);
            return false;
        }
        textarea.value = QZFL.string.escHTML(this._getReport());
        return true;
    },
    _limit: 10 * 60 * 1000,
    _maxLength: 64 * 1024,
    upload: function(targetFrame, form, hiddenFields) {
        if (this._uploading) {
            Clinic.util.showMsgbox('信息正在上报，请稍候', 0, 2000);
            return;
        }
        var key = 'VasAppCanvasClinicLastUploadTimestamp' + APP_ID;
        var now = (new Date()).getTime();
        var last = Clinic.util._ENV.get(key);
        if (last && now - last <= this._limit) {
            Clinic.util.showMsgbox('信息已经上报成功，请不要频繁上报', 0, 2000);
            return;
        }
        Clinic.util._ENV.del(key);
        this._uploading = true;
        Clinic.util.showMsgbox('正在上报信息', 6);
        var data = this._getReport();
        if (data.length >= this._maxLength) {
            data = data.substr(this._maxLength);
        }
        targetFrame.callback = function(ret) {
            Clinic.log._uploading = false;
            if (ret.ret == 0) {
                Clinic.util._ENV.set(key, now);
                Clinic.util.showMsgbox('上报信息成功', 4, 2000);
            } else {
                Clinic.util.showMsgbox('上报信息失败', 5, 2000);
            }
        };
        hiddenFields.uin.value = SwfAppLib.method.getLoginUin();
        hiddenFields.serviceid.value = C.isQzone ? 0 : C.isPengyou ? 2 : 1;
        hiddenFields.appid.value = APP_ID;
        hiddenFields.timestamp.value = now;
        hiddenFields.type.value = this.maxLevel;
        C.isPengyou && (form.action = 'http://appbasesh.xiaoyou.pengyou.com/cgi-bin/cgi_common_examine');
        form.submit();
        C._stat.clickCur('ISD.QZONEAPPCLINIC.REPORT.UPLOAD', '/clinic');
    },
    addLoadURLs: function() {
        var urls = Array.prototype.slice.call(arguments, 0);
        Clinic.caching.attachUrl(urls);
    }
};
Clinic.monitor = {
    _LOADER_PENDING_SECOND: 8000,
    _timeout: null,
    init: function() {
        Clinic.monitor._timeout = setTimeout(Clinic.monitor.loaderFailed, this._LOADER_PENDING_SECOND);
    },
    flashInit: function() {
        clearTimeout(Clinic.monitor._timeout);
    },
    loaderFailed: function() {
        Clinic.log.report(1, 'Loader未能在' + Clinic.monitor._LOADER_PENDING_SECOND + '毫秒内响应，可能加载失败。');
    }
};
Clinic.caching = {
    _conf: {},
    _frames: {},
    _busted: false,
    loadConfig: function(conf) {
        this._conf = (conf || {});
    },
    _attachedUrls: {},
    attachUrl: function(url) {
        if (typeof url === 'string') {
            this._attachedUrls[url] = 1;
        } else {
            for (var i = 0,
            u; u = url[i]; i++) {
                this._attachedUrls[u] = 1;
            }
        }
    },
    _limit: 10 * 60 * 1000,
    bust: function(container, counter, _cb, _errCb) {
        var key = 'VasAppCanvasClinicLastBustingTimestamp' + APP_ID;
        var now = (new Date()).getTime();
        var last = Clinic.util._ENV.get(key);
        if (last && now - last <= this._limit) {
            Clinic.util.showMsgbox('您已经完成清理缓存，如仍有问题请尝试手动清理缓存', 0, 2000);
            _errCb();
            return;
        }
        Clinic.util._ENV.del(key);
        if (!this._conf.loader) {
            Clinic.util.showMsgbox('暂不支持该应用，请手动清空缓存', 0, 2000);
            _errCb();
            return;
        }
        container.innerHTML = '<div>正在执行清理操作，请稍候……</div>';
        container.scrollTop = container.scrollHeight;
        counter.innerHTML = '';
        this._conf.container = container;
        this._conf.counter = counter;
        this._worker.run(function(failed) {
            Clinic.util._ENV.set(key, now);
            Clinic.caching._worker.destroy(); ! failed && (container.innerHTML += '<div style="clear:both;">清理完成。</div>');
            container.scrollTop = container.scrollHeight;
            _cb();
        });
        this._busted = true;
    },
    _worker: (function() {
        var c;
        var frameMap = {};
        var xdFnMap = {};
        if (C.isPengyou) {
            XD.bind(function(data, origin) {
                var host = origin.replace(/^[^:]+:\/\/(.+)$/, '$1');
                var fn = xdFnMap[host];
                if (fn) {
                    if (data.fn === 'onDomReady') {
                        fn.onDomReady();
                    } else if (data.fn === 'callback') {
                        fn.callback(data.res);
                    }
                }
            });
        }
        var getFrame = function(host, callback) {
            var iframe;
            if (iframe = frameMap[host]) {
                callback(iframe);
            } else if (c._conf.container) {
                iframe = document.createElement('iframe');
                iframe.style.width = '0px';
                iframe.style.height = '0px';
                iframe.border = '0';
                xdFnMap[host] = {
                    onDomReady: function() {
                        callback(iframe);
                    }
                }
                iframe.onDomReady = xdFnMap[host].onDomReady;
                iframe.src = 'http://' + host + '/cache_buster_proxy.htm' + (C.isPengyou ? ('#target=' + encodeURIComponent(location.href)) : '');
                document.body.appendChild(iframe);
                frameMap[host] = iframe;
            }
        };
        var isp = (function() {
            var ptisp = '';
            if (({
                ctc: true,
                cnc: true,
                edu: true,
                cn: true,
                cm: true,
                os: true
            })[ptisp]) {
                return ptisp + '.';
            }
            return '';
        })();
        var DOMAIN_PREFIX_RE = /^(.*)(appimg\d*\.qq\.com)$/,
        NEED_BUSTING_HOST_RE = /(\.qzone|\.xiaoyou|appimg\d*)\.qq\.com$/;
        var processUri = function(isp, url) {
            var uri = new QZFL.util.URI(url);
            if (!uri) {
                return null;
            }
            uri.host = uri.host.toLowerCase();
            if (!NEED_BUSTING_HOST_RE.test(uri.host)) {
                return null;
            }
            var dm = DOMAIN_PREFIX_RE.exec(uri.host);
            if (dm && dm[1] !== isp) {
                uri.host = isp + dm[2];
            }
            uri.href = [uri.protocol, '://', uri.host, uri.pathname, uri.search, uri.hash].join('');
            return uri;
        };
        var list = [],
        length = 0,
        successCount = 0,
        errorCount = 0;
        var asyncQueueRunner = function(fn, callback) {
            var i = 0;
            var running = false;
            var interval = setInterval(function() {
                if (running) {
                    return;
                }
                c._conf.counter.innerHTML = '已完成 ' + (successCount + errorCount) + ' 个文件，成功 <span class="suc">' + successCount + '</span> 个，失败 <span class="err">' + errorCount + '</span> 个，剩余 ' + (length - successCount - errorCount) + ' 个。';
                if (errorCount > 100) {
                    c._conf.container.innerHTML += '<div style="clear:both;">系统检测到大量文件清理失败，请尝试手动清理。</div>';
                    c._conf.container.scrollTop = c._conf.container.scrollHeight;
                    clearInterval(interval);
                    callback(true);
                    return;
                }
                running = true;
                if (i >= length || Clinic.util._dialog == null) {
                    clearInterval(interval);
                    callback();
                    return;
                }
                var one = list[i++];
                fn(one,
                function() {
                    running = false;
                });
            },
            100);
        };
        var processFn = function(one, callback) {
            var uri = processUri(isp, one.url);
            if (!uri) {
                successCount++;
                callback();
                return;
            }
            var timeExceed = false;
            var timeout = setTimeout(function() {
                timeExceed = true;
                errorCount++;
                c._conf.container.innerHTML += '<div class="rec">[' + uri.href + ']</div><div class="err">超时</div>';
                c._conf.container.scrollTop = c._conf.container.scrollHeight;
                callback();
            },
            30000);
            getFrame(uri.host,
            function(iframe) {
                xdFnMap[uri.host].callback = function(res) {
                    clearTimeout(timeout);
                    if (timeExceed) {
                        return;
                    }
                    if (res.code == 200) {
                        successCount++;
                        if (res.urls && res.urls.length) {
                            list = list.concat(res.urls);
                            length = list.length;
                        }
                    } else {
                        errorCount++;
                        var s = '失败';
                        if (res.code == 204) {
                            s = '无内容';
                        } else if (res.code == 301 || res.code == 302) {
                            s = '文件被重定向';
                        } else if (res.code == 304) {
                            s = '文件未能刷新';
                        } else if (res.code == 401) {
                            s = '需要身份验证';
                        } else if (res.code == 403) {
                            s = '请求被拒绝';
                        } else if (res.code == 404) {
                            s = '文件不存在';
                        } else if (res.code == 1001) {
                            s = '不支持当前浏览器';
                        } else if (res.code == 1002) {
                            s = '发送请求失败';
                        } else if (res.code >= 500) {
                            s = '服务器内部错误';
                        } else if (res.code >= 400) {
                            s = '服务器资源错误';
                        }
                        c._conf.container.innerHTML += '<div class="rec">[' + uri.href + ']</div><div class="err">' + s + '</div>';
                        c._conf.container.scrollTop = c._conf.container.scrollHeight;
                    }
                    callback();
                };
                iframe.callback = xdFnMap[uri.host].callback;
                try {
                    if (C.isPengyou) {
                        XD.post({
                            url: uri.href,
                            path: one.path
                        },
                        iframe.src, iframe.contentWindow);
                    } else {
                        iframe.contentWindow.run(uri.href, one.path);
                    }
                } catch(_) {
                    clearTimeout(timeout);
                    errorCount++;
                    c._conf.container.innerHTML += '<div class="rec">[' + uri.href + ']</div><div class="err">程序执行出错</div>';
                    c._conf.container.scrollTop = c._conf.container.scrollHeight;
                    callback();
                }
            });
        };
        var run = function(callback) {
            c = (c || Clinic.caching);
            list = [];
            c._conf.loader && list.push({
                url: c._conf.loader
            });
            c._conf.loading && list.push({
                url: c._conf.loading
            });
            if (c._conf.config) {
                var l;
                if (typeof c._conf.config === 'string') {
                    list.push({
                        url: c._conf.config,
                        path: c._conf.path
                    });
                } else if ((l = c._conf.config.length) > 0) {
                    for (var i = 0; i < l; i++) {
                        var one = c._conf.config[i];
                        list.push({
                            url: one.url,
                            path: one.path
                        });
                    }
                }
            }
            for (var url in c._attachedUrls) {
                list.push({
                    url: url
                });
            }
            length = list.length;
            successCount = 0;
            errorCount = 0;
            asyncQueueRunner(processFn, callback);
        };
        var destroy = function() {
            for (var host in frameMap) {
                var iframe = frameMap[host];
                try {
                    iframe.parentNode.removeChild(iframe);
                } catch(_) {}
                delete frameMap[host];
                delete xdFnMap[host];
            }
        };
        return {
            run: run,
            destroy: destroy
        };
    })()
};
Clinic.browser = {
    click: function(el, tag) {
        el.href = (Clinic._x64 ? 'http://download.tech.qq.com/soft/1/2/60674/index.shtml': 'http://download.tech.qq.com/soft/1/2/57660/index.shtml');
        C._stat.clickCur('ISD.QZONEAPPCLINIC.BROWSER.' + (C.isQzone ? 'QZ': C.isPengyou ? 'PY': 'XY') + '-' + (window.APP_ID || 0) + '-' + (C.isFull ? 'FULL': 'NORMAL') + '-' + tag, '/clinic');
        QZFL.cookie.set('appbase_clinic_browser', new Date().getTime(), location.hostname, '/cgi-bin/index/', 48);
    }
};
var FLAG = {
    NEED_REG: '__CANVAS_NEED_REG'
};
window.speedTimeStamp = window.speedTimeStamp || {};
function init() {
    if (/pengyou.com$/.test(location.host)) {
        QZFL.config.FSHelperPage = 'http://imgcache.pengyou.com/qzone/v5/toolpages/fp_gbk.html';
    }
    if (C.isQzone && !C.ingameIframe) {
        var titleDiv = QZFL.dom.getElementsByClassName('mode_gb_title')[0];
        titleDiv && (titleDiv.style.display = 'block');
    }
    QZFL.event.on($('reload_link'), 'click',
    function() {
        C.canvas.reload();
    });
    if (window.ROBOT) {
        C.config.load();
        var MSG = {
            353 : '尊敬的用户：您已被系统检测出多次使用外挂，系统将自动关闭您的农场，被封号的用户一律无法提前解封！您可于' + window.RELEASE_TIME + '重新登陆农场。并可在一个工作日后通过“<a href="http://my.qq.com/aq/" target="_blank">安全自助查询系统</a>”查询处理情况！',
            358 : '尊敬的用户：您已被系统检测出多次使用外挂，系统将自动关闭您的牧场，被封号的用户一律无法提前解封！您可于' + window.RELEASE_TIME + '重新登陆牧场。并可在一个工作日后通过“<a href="http://my.qq.com/aq/" target="_blank">安全自助查询系统</a>”查询处理情况！'
        };
        var _c = new QZONE.widget.Confirm("系统提示", MSG[APP_ID] || '', QZONE.widget.Confirm.TYPE.OK, '138px');
        _c.tips[0] = '确认';
        _c.showMask = true;
        _c.onConfirm = function() {};
        setTimeout(function(c) {
            return function() {
                c.show();
            };
        } (_c), 1000);
        return;
    }
    window.REGISTER = !!((window.FLASH_VARS ? window.FLASH_VARS.reg: 0) || C.util.getAppParams() == FLAG.NEED_REG || window.REGISTER);
    window.NO_FLASH = window.NO_FLASH || window.REGISTER;
    C.allowFull = !window.REGISTER;
    if (C.allowFull && C.isQzone && !C.isFull && C.util.getParam('force') == '1') {
        C.config.load();
        C.util.playFull(true);
    } else {
        if (!window.NO_FLASH) {
            speedTimeStamp[3] = new Date();
            if (C.isQzone && QZONE.FP.getQzoneConfig().version == 6) {
                if (QZFL.userAgent.ie) {
                    FLASH_PARAMS.wmode = 'window';
                }
                FLASH_PARAMS.width = '948';
            }
            if (FLASH_PARAMS.height) {
                $('flashMain').style.height = FLASH_PARAMS.height + 'px';
            }
            $('flashMain').innerHTML = QZFL.media.getFlashHtml(FLASH_PARAMS, new QZFL.media.SWFVersion(10, 1));
            Clinic.monitor.init();
        }
        speedTimeStamp[5] = new Date();
        C.config.load();
    }
    var _fromeApp = C.util.getParam('fromapp', location.href);
    var isIncludeRef = getRef(_fromeApp);
    if (!isIncludeRef) {
        C._stat.pvCur((_fromeApp ? "/from/" + _fromeApp: ""), SwfAppLib.getFlashVersion());
    }
}
function getRef(_fromeApp) {
    var ref = C.util.getParam('ref', C.parent.location.href);
    var path = '/' + (C.isQzone ? 'qz': C.isPengyou ? 'py': 'xy') + '/' + (window.APP_ID || 0) + '/' + (C.isFull ? 'full': 'normal') + (_fromeApp ? "/from/" + _fromeApp: "");
    if (ref != '') {
        C._stat._tcisd.pv('appbase.qzone.qq.com', path, {
            timeout: 5000,
            referDomain: 'adtag',
            referPath: ref,
            flashVersion: SwfAppLib.getFlashVersion()
        });
        return true;
    }
    return false
}
function switchToFarm() {
    C.util.toApp(353);
}
/*  |xGv00|1a2be3a365d4cdb5cd567f61e5ccfd26 */
