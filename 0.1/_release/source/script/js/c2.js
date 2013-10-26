var C = window.C || {};
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
C.appId = 0;
C.isQzone = !!parent.QZONE;
C.isCampus = !!(typeof parent.FgetUin == 'function');
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
    load: function(appid) {
        C.appId = appid;
        var _js = new QZFL.JsLoader();
        _js.onload = function() {
        //    speedTimeStamp[6] = new Date();
            if (window.REGISTER) {
                C.data.regInitFn && C.data.regInitFn();
            }
            C.canvas.draw();
           // speedTimeStamp[7] = new Date();
           // C._stat.speed(speedTimeStamp);
        };
        //_js.load("source/script/js/config.js");
    },
    set: function(data) {
        C.data = data;
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
    }
};

//////////////////////////
QZFL.widget.Confirm = function(title, content, config, height) {
    this.buttonLayout = "confirm_button_" + QZFL.widget.Confirm.count;
    this.title = title || "这里是标题";
    this.hasTitle = true;
    this.content = '<div class="mode_choose_new_index" style="height:' + (height || '48px') + ';padding:18px">' + (content || "这里是内容") + '</div><div id="' + this.buttonLayout + '" class="global_tip_button tx_r" style="text-align:right !important"></div>';
    var isNewInterface = false;
    if ((config != null) && (typeof(config) == "object")) {
        var iconHash = {
            "warn": "icon_hint_warn",
            "error": "icon_hint_error",
            "succ": "icon_hint_succeed",
            "help": "icon_hint_help"
        };
        isNewInterface = true;
        this.hasTitle = (typeof(config.hastitle) == 'undefined') ? true: config.hastitle;
        if (!this.hasTitle) {
            this.content = '<div style="background-color:white;height:160px;width:350px;border:2px #6B97C1 solid"><div style="height:89px;padding:18px;"><img style="position:absolute; top:40px; left:40px;" class="' + iconHash[config.icontype] + '" alt="" src="http://imgcache.qq.com/ac/b.gif"/><h1 style="font-size: 14px; position: absolute; top: 40px; left: 76px; color:#424242;">' + (content || "test") + '</h1></div><div id="' + this.buttonLayout + '" class="global_tip_button tx_r" style="text-align:right !important"></div></div>';
        }
    }
    this.type = (isNewInterface ? config.type: config) || 1;
    var _tips = isNewInterface ? config.tips: arguments[3];
    this.tips = _tips ? [_tips[0] ? _tips[0] : "是", _tips[1] ? _tips[1] : "否", _tips[2] ? _tips[2] : "取消"] : ["是", "否", "取消"];
    this.showMask = (typeof(config.showMask) == "undefined") ? true: config.showMask;
    this.onConfirm = QZFL.emptyFn;
    this.onNo = QZFL.emptyFn;
    this.onCancel = QZFL.emptyFn;
    QZFL.widget.Confirm.count++;
};
QZFL.widget.Confirm.count = 0;
QZFL.widget.Confirm.TYPE = {
    OK: 1,
    NO: 2,
    OK_NO: 3,
    CANCEL: 4,
    OK_CANCEL: 5,
    NO_CANCEL: 6,
    OK_NO_CANCEL: 7
};
QZFL.widget.Confirm.prototype.show = function() {
    var _lastTween = QZFL.dialog.tween;
    QZFL.dialog.tween = false;
    if (!this.hasTitle) {
        this.dialog = QZFL.dialog.createBorderNone(this.content, "352", "160");
    } else {
        this.dialog = QZFL.dialog.create(this.title, this.content, "300", "140");
    }
    if (this.type & 1) {
        var _d = this._createButton(this.onConfirm, 0, "bt_tip_hit");
        _d.focus();
    }
    if (this.type & 2) {
        this._createButton(this.onNo, 1, "bt_tip_normal");
    }
    if (this.type & 4) {
        this._createButton(this.onCancel, 2, "bt_tip_normal");
    }
    this.dialog.onUnload = QZFL.event.bind(this,
    function() {
        this.hide();
        if (this.type == 1) {
            this.onConfirm();
        } else {
            this.onCancel();
        }
    });
    this._keyEvent = QZFL.event.bind(this, this.keyPress);
    QZFL.event.addEvent(document, "keydown", this._keyEvent);
    QZFL.dialog.tween = _lastTween;
    if (QZFL.maskLayout && this.showMask) {
        setTimeout((function(me, zi) {
            return function() {
                if (me.dialog) {
                    me.maskId = QZFL.maskLayout.create(--zi);
                }
            };
        })(this, this.dialog.getZIndex()), 0);
    }
};
QZFL.widget.Confirm.prototype.keyPress = function(e) {
    e = QZFL.event.getEvent(e);
    if (e.keyCode == 27) {
        this.hide();
    }
};
QZFL.widget.Confirm.prototype._createButton = function(e, tipsId, style) {
    var el = QZFL.dom.get(this.buttonLayout),
    _d = QZFL.dom.createElementIn("button", el, false);
    _d.className = style;
    _d.innerHTML = this.tips[tipsId];
    QZFL.event.addEvent(_d, "click", QZFL.event.bind(this,
    function() {
        e();
        this.hide();
    }));
    return _d;
};
QZFL.widget.Confirm.prototype.hide = function() {
    this.dialog.onUnload = QZFL.emptyFn;
    this.dialog.unload();
    this.dialog = null;
    QZFL.event.removeEvent(document, "keydown", this._keyEvent);
    this._keyEvent = null;
    if (this.maskId) {
        QZFL.maskLayout.remove(this.maskId);
    }
};

C.util = {
    search: function() {
        if (typeof C.data.searchOnSubmit === 'function') {
            if (C.data.searchOnSubmit()) {
                return;
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
        if (transParam) {
            var params = C.util.getAppParams();
            if (params) {
                param.push(C.paramsKey + '=' + encodeURIComponent(params));
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
                _curApp.C.util.toApp(_toAppData.appid, _toAppData.params, true);
            } else {
                _curApp.location.href = C.CANVAS_URL.replace('{%domain%}', C.CANVAS_DOMAIN[C.appId]) + "?appid=" + C.appId + "&max=0";
            }
        }
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
    toApp: function(appid, params, force) {
        var direct = {
            358 : true,
            353 : true
        };
        var hasParam = !!params;
        if (C.isCampus) {
            var p = ['appid=' + appid];
            if (hasParam) {
                p.push(C.paramsKeyCampus + '=' + encodeURIComponent(params));
            }
            p = p.join('&');
            if (direct[appid]) {
                window.location.href = 'nmc.php?' + p;
            } else { (top || window).location.href = 'http://pengyou.qq.com/index.php?mod=appmanager&act=openapp&' + p;
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
            } else {
                QZONE.FP.appendPopupFn(function() {
                    if (direct[appid]) {
                        QZONE.FP.getCurrentAppWindow().window.location.href = 'http://' + C.CANVAS_DOMAIN[appid] + '.qzone.qq.com/cgi-bin/index/appbase_run_unity.cgi?appid=' + appid + '&' + p;
                    } else {
                        QZONE.FP.toApp('/myhome/' + appid + '?' + p);
                    }
                });
                QZONE.FP.closePopup();
            }
            _toAppFromFull(appid, params);
        } else {
            force = force ? 1 : 0;
            var p = ['force=' + force];
            if (hasParam) {
                p.push(C.paramsKey + '=' + encodeURIComponent(params));
            }
            p = p.join('&');
            if (direct[appid]) {
                window.location.href = 'nmc.php?appid=' + appid + '&' + p;
            } else {
                QZONE.FP.toApp('/myhome/' + appid + '?' + p);
            }
        }
    },

    getParam: function(vname) {
        var reg = new RegExp('(?:\\?|\#|\&)' + vname + '=([^&]+)\&?');
        if (reg.test(window.location.toString())) {
            var result = reg.exec(window.location, 'im');
            return result[1];
        }
        return '';
    },
    getAppParams: function() {
        if (typeof C.paramsValue === 'undefined') {
            C.paramsValue = decodeURIComponent(C.util.getParam(C.isCampus ? C.paramsKeyCampus: C.paramsKey));
            while (C.isCampus && /\%[0-9A-F]{2}/.test(C.paramsValue)) {
                try {
                    C.paramsValue = decodeURIComponent(C.paramsValue);
                } catch(__ignored) {}
            }
        }
        return C.paramsValue;
    }
};
var $ = $ ||
function(id) {
    return document.getElementById(id);
}
var getParameter = getParameter ||
function(vname, source) {
    var reg = new RegExp('(?:\\?|\#|\&)' + vname + '=([^&]+)\&?');
    if (source) {
        if (reg.test(source)) {
            var result = reg.exec(source, 'im');
            return result[1];
        } else {
            return '';
        }
    }
    if (reg.test(window.location.toString())) {
        var result = reg.exec(window.location, 'im');
        return result[1];
    } else {
        return '';
    }
}
var SwfAppLib = SwfAppLib || {};
SwfAppLib.swfObject = null;
SwfAppLib.getSwfObject = function() {
    if (!SwfAppLib.swfObject) {
        SwfAppLib.swfObject = $('swfAppObject') || $('QQMill');
    }
    return SwfAppLib.swfObject;
};
SwfAppLib.platform = (function() {
    window._base = SwfAppLib.top = window.parent;
    do {
        if (SwfAppLib.top.g_iUin && SwfAppLib.top.QZONE && SwfAppLib.top.QZONE.FrontPage) {
            return {
                isQzone: true,
                isCampus: false
            };
        } else if (typeof SwfAppLib.top.FgetUin == 'function') {
            return {
                isQzone: false,
                isCampus: true
            };
        }
        window._base = SwfAppLib.top = SwfAppLib.top.parent;
    } while ( SwfAppLib . top != top ) return {
        isQzone: false,
        isCampus: false
    };
})();
/*
SwfAppLib.localConnection = {
    connectSwf: function(id, method) {
        var result = null;
        var swf = $(id);
        if (swf && typeof swf[method] == 'function') {
            var len = arguments.length;
            if (len > 2) {
                var args = [];
                for (var i = 2; i < len; ++i) {
                    args.push(arguments[i]);
                }
                result = swf[method].apply(null, args);
            } else {
                result = swf[method]();
            }
        }
        return result;
    }
};*/
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
SwfAppLib.method = {
    getUploadUrl: function() {
		SwfAppLib.getSwfObject().setUploadUrl('api/savepic.php');
		return 0;
    },
    selectFriend: function() {
        if (C.isCampus) {
            var uinList = [];
            function fnt(o) {
                if (o.length > 1) {
                    parent.html_loading_frame('您只能选择一位好友', 2000);
                    return;
                }
                var uin = o[0].u;
                var name = o[0].name;
                SwfAppLib.getSwfObject().friendSelected(uin, name);
                return true;
            }
            parent.ShowSelector(fnt, null, false);
            return;
        }
        var jsLoader = new QZFL.JsLoader();
        jsLoader.onload = function() {
            var div = (SwfAppLib.method.selectFriend._div = document.createElement('div'));
            div.id = 'firendSelector';
            div.style.cssText = 'position:absolute;top:100px;z-index:1000;background-color:#fff;padding:10px;border:1px solid #6b97c1;width:542px;overflow:hidden;';
            div.innerHTML = '<div style="text-align:center;clear:both;padding-top:10px;"><button type="button" onclick="SwfAppLib.method._selectFriendOK();" style="border:1px solid #87A2D3;cursor:pointer;font-size:12px;height:22px;line-height:22px;margin-right:10px;padding:0px 8px;">确定</button><button type="button" onclick="SwfAppLib.method._selectFriendCancel();" style="border:1px solid #87A2D3;cursor:pointer;font-size:12px;height:22px;line-height:22px;padding:0px 8px;">取消</button></div>'
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
        };
		jsLoader.load('script.php?friendSelector', document, 'utf-8');
    },
    _selectFriendOK: function() {
        var selected = QZONE.friends.Selector.getSelect();
        var list = [];
        for (var uin in selected) {
            list.push(selected[uin]);
        }
        if (list.length == 0) {
            QZONE.FP.showMsgbox('您还没有选择好友', 0, 2000);
        } else if (list.length > 1) {
            QZONE.FP.showMsgbox('您只能选择一位好友', 0, 2000);
        } else {
            SwfAppLib.method._selectFriendCancel();
            SwfAppLib.getSwfObject().friendSelected(list[0].uin, list[0].name);
        }
    },
    _selectFriendCancel: function() {
        SwfAppLib.method.selectFriend._div.parentNode.removeChild(SwfAppLib.method.selectFriend._div);
    },

    flashInit: function() {}
};

QZFL.lang.arg2arr = function(refArgs, start) {
    return Array.prototype.slice.apply(refArgs, [start || 0, refArgs.length]);
};

QZFL.string.StringBuilder = function() {
    this._strList = QZFL.lang.arg2arr(arguments);
};
QZFL.string.StringBuilder.prototype = {
    append: function(str) {
        if (QZFL.lang.isString(str)) {
            this._strList.push(str.toString());
        }
    },
    insertFirst: function(str) {
        if (QZFL.lang.isString(str)) {
            this._strList.unshift(str.toString());
        }
    },
    appendArray: function(arr) {
        if (isArray(arr)) {
            this._strList = this._strList.concat(arr);
        }
    },
    toString: function(spliter) {
        return this._strList.join(!spliter ? '': spliter);
    },
    clear: function() {
        this._strList.splice(0, this._strList.length);
    }
};
QZFL.media = {
    _tempImageList: [],
    _flashVersion: null,
    adjustImageSize: function(w, h, trueSrc, callback, errCallback) {
        var ele = QZFL.event.getTarget();
        if (QZFL.userAgent.firefox < 3 && ele === document) {
            ele = QZFL.event.getEvent().currentTarget;
        }
        ele.onload = null;
        var offset, _c = QZFL.media._tempImageList;
        _c[offset = _c.length] = new Image();
        _c[offset].onload = (function(mainImg, tempImg, ew, eh) {
            return function() {
                tempImg.onload = null;
                var ow = tempImg.width,
                oh = tempImg.height;
                if (ow / oh > ew / eh) {
                    if (ow > ew) {
                        mainImg.width = ew;
                    }
                } else {
                    if (oh > eh) {
                        mainImg.height = eh;
                    }
                }
                mainImg.src = tempImg.src;
                _c[offset] = null;
                delete _c[offset];
                if (typeof(callback) == 'function') {
                    callback(mainImg, w, h, tempImg, ow, oh);
                }
            };
        })(ele, _c[offset], w, h);
        _c[offset].onerror = function() {
            _c[offset] = _c[offset].onerror = null;
            delete _c[offset];
            if (typeof(errCallback) == 'function') {
                errCallback();
            }
        };
        _c[offset].src = trueSrc;
    },
    getFlashHtml: function(flashArguments, requiredVersion, flashPlayerCID) {
        var _attrs = new QZFL.string.StringBuilder(),
        _params = new QZFL.string.StringBuilder();
        if (typeof(flashPlayerCID) == 'undefined') {
            flashPlayerCID = 'D27CDB6E-AE6D-11cf-96B8-444553540000';
        }
        for (var k in flashArguments) {
            switch (k) {
            case "movie":
                continue;
                break;
            case "id":
            case "name":
            case "width":
            case "height":
            case "style":
                _attrs.append(k + '="' + flashArguments[k] + '"');
                break;
            case "src":
                if (QZFL.userAgent.ie) {
                    _params.append('<param name="movie" value="' + flashArguments[k] + '"/>');
                } else {
                    _attrs.append('data="' + flashArguments[k] + '"');
                }
                break;
            default:
                _params.append('<param name="' + k + '" value="' + flashArguments[k] + '" />');
            }
        }
        if (QZFL.userAgent.ie) {
            _attrs.append('classid="clsid:' + flashPlayerCID + '"');
        } else {
            _attrs.append('type="application/x-shockwave-flash"');
        }
        if (requiredVersion && (requiredVersion instanceof QZFL.media.SWFVersion)) {
            var _ver = QZFL.media.getFlashVersion().major;
            var _needVer = requiredVersion.major;
            _attrs.append('codeBase="swflash.cab#version=' + requiredVersion + '"');
        }
        return "<object " + _attrs + ">" + _params + "</object>";
    },
    embedSWF: function(embedDom, flashArguments, requiredVersion, flashPlayerCID) {
        var _innerHtml = this.getFlashHtml(flashArguments, requiredVersion, flashPlayerCID);
        $(embedDom).innerHTML = _innerHtml;
    },
    getWMMHtml: function(wmpArguments, cid) {
        var params = new QZFL.string.StringBuilder();
        var objArgm = new QZFL.string.StringBuilder();
        if (typeof(cid) == 'undefined') {
            cid = "clsid:6BF52A52-394A-11D3-B153-00C04F79FAA6";
        }
        for (var k in wmpArguments) {
            switch (k) {
            case "id":
            case "width":
            case "height":
            case "style":
                objArgm.append(k + '="' + wmpArguments[k] + '" ');
                break;
            case "src":
                objArgm.append(k + '="' + wmpArguments[k] + '" ');
                break;
            default:
                objArgm.append(k + '="' + wmpArguments[k] + '" ');
                params.append('<param name="' + k + '" value="' + wmpArguments[k] + '" />');
            }
        }
        if (wmpArguments["src"]) {
            params.append('<param name="URL" value="' + wmpArguments["src"] + '" />');
        }
        if (QZFL.userAgent.ie) {
            return '<object classid="' + cid + '" ' + objArgm + '>' + params + '</object>';
        } else {
            return '<embed ' + objArgm + '></embed>';
        }
    }
};
QZFL.media.SWFVersion = function() {
    var a;
    if (arguments.length > 1) {
        a = arg2arr(arguments);
    } else if (arguments.length == 1) {
        if (typeof(arguments[0]) == "object") {
            a = arguments[0];
        } else if (typeof arguments[0] == 'number') {
            a = [arguments[0]];
        } else {
            a = [];
        }
    } else {
        a = [];
    }
    this.major = parseInt(a[0], 10) || 0;
    this.minor = parseInt(a[1], 10) || 0;
    this.rev = parseInt(a[2], 10) || 0;
    this.add = parseInt(a[3], 10) || 0;
};
QZFL.media.SWFVersion.prototype.toString = function(spliter) {
    return ([this.major, this.minor, this.rev, this.add]).join((typeof spliter == 'undefined') ? ",": spliter);
};
QZFL.media.SWFVersion.prototype.toNumber = function() {
    var se = 0.001;
    return this.major + this.minor * se + this.rev * se * se + this.add * se * se * se;
};
QZFL.media.getFlashVersion = function() {
    if (!QZFL.media._flashVersion) {
        var resv = 0;
        if (navigator.plugins && navigator.mimeTypes.length) {
            var x = navigator.plugins['Shockwave Flash'];
            if (x && x.description) {
                resv = x.description.replace(/(?:[a-z]|[A-Z]|\s)+/, "").replace(/(?:\s+r|\s+b[0-9]+)/, ".").split(".");
            }
        } else {
            try {
                for (var i = (resv = 6), axo = new Object(); axo != null; ++i) {
                    axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash." + i);
                    resv = i;
                }
            } catch(e) {
                if (resv == 6) {
                    resv = 0;
                }
                resv = Math.max(resv - 1, 0);
            }
            try {
                resv = new QZFL.media.SWFVersion(axo.GetVariable("$version").split(" ")[1].split(","));
            } catch(ignore) {}
        }
        if (! (resv instanceof QZFL.media.SWFVersion)) {
            resv = new QZFL.media.SWFVersion(resv);
        }
        if (resv.major < 3) {
            resv.major = 0;
        }
        QZFL.media._flashVersion = resv;
    }
    return QZFL.media._flashVersion;
};
QZFL.media._changeFlashSrc = function(src, installVer, needVer) {
    if (installVer >= 6 && needVer > installVer) {
        src = "http://imgcache.qq.com/qzone/flashinstall.swf";
    }
    return src;
};


var insertFlash = QZFL.media.getFlashHtml;

QZFL.event.onDomReady(function() {
    C.allowFull = true;
    if (C.isQzone && !C.isFull && C.util.getParam('force') == '1') {
        C.config.load(APP_ID);
        C.util.playFull(true);
    } else {
        if (!NO_FLASH) {
            QZFL.media.embedSWF('flashMain', FLASH_PARAMS, new QZFL.media.SWFVersion(10));
        }
        C.config.load(APP_ID);
    }
});
function switchToFarm() {
    C.util.toApp(353);
}
/*  |xGv00|371ddc4acfe8ba6d47903bfe816c2399 */
