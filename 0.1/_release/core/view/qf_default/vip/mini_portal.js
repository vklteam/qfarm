(function() {
    if (!QZFL.dom.getRect) {
        QZFL.dom.getRect = function(elem) {
            if (elem = QZFL.dom.get(elem)) {
                var box = QZFL.object.extend({},
                elem.getBoundingClientRect()),
                s;
                if (typeof box.width == 'undefined') {
                    box.width = box.right - box.left;
                    box.height = box.bottom - box.top;
                }
                return box;
            }
        };
    }
    window.miniPortal = {
        _ownerInfo: null,
        _now: new Date(),
        _appid: "",
        init: function() {
            this._appid = QZFL.string.escHTML(V.getParam("appid"));
            this._getOwnerInfo(function(ownerInfo) {
                this._ownerInfo = ownerInfo;
                if (ownerInfo.nickName) {
                    this._renderUserInfo(this._ownerInfo);
                    if (ownerInfo.expiredate) {
                        this._renderReminderFee(this._ownerInfo.expiredate);
                    }
                }
                this._renderPackage(this._ownerInfo);
                this._renderPrivileges(this._ownerInfo);
                var _received = V.getParam("received") - 0;
                if (!this._ownerInfo.vip || _received) {
                    this._renderBroadcast();
                }
                this._resizePopup();
            });
        },
        _getOwnerInfo: function(callback) {
            var _ownerInfo;
            if (parent.parent.g_JData && parent.parent.g_JData.yellowInfo && parent.parent.g_JData.yellowInfo.ownerinfo && parent.parent.g_JData.yellowInfo.ownerinfo[0]) {
                var _o = parent.parent.g_JData.yellowInfo.ownerinfo[0];
                _ownerInfo = QZFL.object.extend(false, {},
                _o);
                _ownerInfo.nickName = QZFL.string.escHTML(parent.parent.QZONE.FrontPage.getNickname());
                _ownerInfo.isYearVip = parent.parent.QZONE.FrontPage.isUserVIPExpress();
                _ownerInfo.speedLevel = {
                    "10": 1,
                    "12": 2,
                    "13": 3,
                    "15": 4
                } [_ownerInfo.speed];
                this._now = new Date(_ownerInfo.now * 1000);
            } else {
                _ownerInfo = {};
                _ownerInfo.vip = (V.getParam("vip") == "1" || V.getParam("vip") == "2") ? 1 : 0;
                _ownerInfo.isYearVip = (V.getParam("vip") == "2") ? 1 : 0;
                _ownerInfo.level = V.getParam("level") ? (V.getParam("level") - 0) : 0;
            }
            if (_ownerInfo.vip && _ownerInfo.level == 0) {
                _ownerInfo.level = 1;
            }
            callback.call(this, _ownerInfo);
        },
        _renderUserInfo: function(ownerInfo) {
            var _ownerInfoElem = $("ownerInfo");
            if (ownerInfo.vip) {
                _ownerInfoElem.innerHTML = V.tmpl("ownerVipInfoTemp", {
                    ownerInfo: ownerInfo
                });
            } else {
                if (ownerInfo.level > 0) {
                    _ownerInfoElem.innerHTML = V.tmpl("ownerLossInfoTemp", {
                        ownerInfo: ownerInfo
                    });
                } else {
                    _ownerInfoElem.innerHTML = V.tmpl("ownerNoVipInfoTemp", {
                        ownerInfo: ownerInfo
                    });
                }
            }
            _ownerInfoElem.style.display = "";
        },
        _renderReminderFee: function(overDate) {
            if (this._ownerInfo.speed == 10) {
                return;
            }
            var _hasClickCookie = "hc";
            if (QZFL.cookie.get(_hasClickCookie)) {
                return;
            }
            var _arr = overDate.split("-");
            var _timeOver = new Date(_arr[0], _arr[1] - 1, _arr[2]);
            var _delta = (_timeOver.getTime() - this._now.getTime()) / (1000 * 3600 * 24);
            var _d = Math.ceil(_delta);
            if (_d <= 7 && _d > 0) {
                var _reminderFee = $("reminderFee");
                _reminderFee.innerHTML = V.tmpl("reminderFeeTemp", {
                    overDate: overDate
                });
                _reminderFee.style.display = "";
                QZFL.event.on($("closeFeeButton"), "click",
                function(e) {
                    _reminderFee.style.display = "none";
                    QZFL.cookie.set(_hasClickCookie, "true", window.location.host, "view/qf_default/vip/", 24);
                    QZFL.event.preventDefault(e);
                    QZFL.event.cancelBubble(e);
                });
            }
        },
        _renderPackage: function(ownerInfo) {
            var _received = V.getParam("received") - 0;
            var _appid = this._appid;
            var _startStr = QZFL.string.escHTML(V.getParam("start"));
            var _endStr = QZFL.string.escHTML(V.getParam("end"));
            var _activityTime;
            var _dateExpr = /^20(\d{2})([0-1]\d)([0-3]\d)$/;
            var _start = _dateExpr.exec(_startStr);
            var _end = _dateExpr.exec(_endStr);
            //_activityTime = "6月9日  ～   8月20日";
            if (_received) {
                $("packageReceived").style.display = "";
            } else {
                var _currentShowElem = null;
                var _yearVipImg = "view/qf_default/vip/" + _appid + "/is_year_vip.png",
                _noYearVipImg = "view/qf_default/vip/" + _appid + "/no_year_vip.png",
                _vipImg = "view/qf_default/vip/" + _appid + "/vip_" + ownerInfo.level + ".png",
                _noVipImg = "view/qf_default/vip/" + _appid + "/vip_0.png";
                if (ownerInfo.isYearVip) {
                    var _packageYearVip = $("packageYearVip");
                    _packageYearVip.innerHTML = V.tmpl("packageYearVipTemp", {
                        yearVipImg: _yearVipImg,
                        noYearVipImg: _noYearVipImg,
                        vipImg: _vipImg,
                        noVipImg: _noVipImg,
                        ownerInfo: ownerInfo,
                        activityTime: _activityTime
                    });
                    _packageYearVip.style.display = "";
                    _currentShowElem = _packageYearVip;
                } else if (ownerInfo.vip) {
                    var _packageVip = $("packageVip");
                    _packageVip.innerHTML = V.tmpl("packageVipTemp", {
                        yearVipImg: _yearVipImg,
                        noYearVipImg: _noYearVipImg,
                        vipImg: _vipImg,
                        noVipImg: _noVipImg,
                        ownerInfo: ownerInfo,
                        activityTime: _activityTime
                    });
                    _packageVip.style.display = "";
                    _currentShowElem = _packageVip;
                } else {
                    var _packageNoVip = $("packageNoVip");
                    _packageNoVip.innerHTML = V.tmpl("packageNoVipTemp", {
                        yearVipImg: _yearVipImg,
                        noYearVipImg: _noYearVipImg,
                        vipImg: _vipImg,
                        noVipImg: _noVipImg,
                        ownerInfo: ownerInfo,
                        activityTime: _activityTime
                    });
                    _packageNoVip.style.display = "";
                    _currentShowElem = _packageNoVip;
                }
                QZFL.event.on($("receiveButton"), "click",
                function(e) {
                    $("receiveButton").style.display = "none";
                    miniPortal._receivePackage(_currentShowElem);
                });
            }
        },
        _receivePackage: function(currentShowElem) {
            var _appConfig = miniPortal.config.app[this._appid];
            var _getPackageUrl = document.domain == "" ? _appConfig.getPackageInQzone: _appConfig.getPackageInPengyou;
            if (_getPackageUrl) {
                var _param = {};
                var _uin = QZFL.cookie.get('uin') || QZFL.cookie.get('zzpaneluin');
                if (_uin.length > 4) {
                    _param.uin = _uin.replace(/o(\d+)/g, '$1');
                }
                var _extra = V.getParam("extra");
                if (_extra) {
                    try {
                        var _extraParamStr = decodeURIComponent(_extra);
                        var _extraParam = _extraParamStr.split("&");
                        var key, value;
                        for (var i = 0,
                        l = _extraParam.length; i < l; i++) {
                            key = _extraParam[i].split("=")[0];
                            value = _extraParam[i].split("=")[1];
                            _param[key] = value;
                        }
                    } catch(e) {}
                }

                 var _proxyHost = document.domain == "" ? "imgcache.qq.com": "imgcache.pengyou.com";
				 var _host = this._appid =="358" ? "mymc.php?mod=cgi_accept_gift": "mync.php?mod=Feast&act=getPackage";
                QZFL.config.FSHelperPage = _host;
                var _fs = new QZFL.FormSender(_getPackageUrl, "post", _param, "utf-8");
                _fs.onSuccess = function(re) {
                    currentShowElem.style.display = "none";
                    $("packageReceived").style.display = "";
                    miniPortal._renderBroadcast();
                    if (re.ecode == 0) {
                        var _swfObj;
                        if (parent.parent.QZONE) {
                            parent.C.canvas.callbackYellowPackage(re);
                        } else {
                            top.document.getElementById("app_frame").contentWindow.C.canvas.callbackYellowPackage(re);
                        }
                    }
                };
                _fs.send();
            }
        },

        _renderPrivileges: function(ownerInfo) {
            $("privilegesInfo").innerHTML = V.tmpl("privilegesInfoTemp", {
                ownerInfo: this._ownerInfo
            });
        },
        _renderBroadcast: function() {
            $("broadcastInfo").innerHTML = V.tmpl("broadcastInfoTemp", {
                ownerInfo: this._ownerInfo
            });
            $("broadcastInfo").style.display = "";
            var _elems = $e("#broadcastInfo").find("div.item").elements;
            var _broadcastItemTemp = this._temp.broadcastItem;
            /*QBS.get("qzone_mnportal_img_1", _elems[0], 2, true,
            function(re) {
                _elems[0].innerHTML = V.tmpl(_broadcastItemTemp, {
                    redirectUrl: re.data[0].rl,
                    imgSrc: re.data[0].img,
                    text: re.data[0].txt,
                    cl: re.data[0].cl
                });
                miniPortal._resizePopup();
            });
            QBS.get("qzone_mnportal_img_2", _elems[1], 2, true,
            function(re) {
                _elems[1].innerHTML = V.tmpl(_broadcastItemTemp, {
                    redirectUrl: re.data[0].rl,
                    imgSrc: re.data[0].img,
                    text: re.data[0].txt,
                    cl: re.data[0].cl
                });
                miniPortal._resizePopup();
            });
            this._resizePopup();*/
        },
        _resizePopup: function() {
            frameElement.height = QZFL.dom.getRect(document.body)["height"];
            setTimeout(function() {
                frameElement.height = QZFL.dom.getRect(document.body)["height"];
            },
            200);
            setTimeout(function() {
                frameElement.height = QZFL.dom.getScrollHeight(document);
            },
            1000);
        },
        _temp: {
            broadcastItem: ['<a href="<%=redirectUrl%>" onclick="return QBS.click(\'<%=cl%>\', false, true);"  target="_blank"><img src="<%=imgSrc%>" alt="" class="pic"></a><p><%=text%></p>'].join("")
        }
    };
    window.miniPortal.config = {
        app: {
            "353": {
                getPackageInQzone: "http://farm.qzone.qq.com/cgi-bin/cgi_farm_getpackage_mini",
                getPackageInPengyou: "http://farm.xiaoyou.pengyou.com/cgi-bin/cgi_farm_getpackage_mini"
            },
            "358": {
                getPackageInQzone: "http://mc.qzone.qq.com/cgi-bin/cgi_accept_gift_mini",
                getPackageInPengyou: "http://mc.xiaoyou.pengyou.com/cgi-bin/cgi_accept_gift_mini"
            }
        }
    };
    window.V = window.V || {};
    V.tmpl = (function() {
        var cache = {};
        function _getTmplStr(rawStr, mixinTmpl) {
            if (mixinTmpl) {
                for (var p in mixinTmpl) {
                    var r = new RegExp('<%#' + p + '%>', 'g');
                    rawStr = rawStr.replace(r, mixinTmpl[p]);
                }
            }
            return rawStr;
        };
        return function tmpl(str, data, opt) {
            opt = opt || {};
            var key = opt.key,
            mixinTmpl = opt.mixinTmpl,
            strIsKey = !/\W/.test(str);
            key = key || (strIsKey ? str: null);
            var fn = key ? cache[key] = cache[key] || tmpl(_getTmplStr(strIsKey ? document.getElementById(str).innerHTML: str, mixinTmpl)) : new Function("obj", "var _p_=[],print=function(){_p_.push.apply(_p_,arguments);};with(obj){_p_.push('" + str.replace(/[\r\t\n]/g, " ").split("\\'").join("\\\\'").split("'").join("\\'").split("<%").join("\t").replace(/\t=(.*?)%>/g, "',$1,'").split("\t").join("');").split("%>").join("_p_.push('") + "');}return _p_.join('');");
            return data ? fn(data) : fn;
        };
    })();
    V.getParam = function(name) {
        var r = new RegExp("(\\?|#|&)" + name + "=([^&]*)(&|$)");
        var m = location.href.match(r);
        if (!m || m == "") m = top.location.href.match(r);
        return (!m ? "": m[2]);
    };
    V.getToken = function() {
        var hash = 5381,
        str = QZFL.cookie.get('skey');
        for (var i = 0,
        len = str.length; i < len; ++i) {
            hash += (hash << 5) + str.charCodeAt(i);
        }
        return hash & 0x7fffffff;
    };
    QZFL.event.onDomReady(function() {
        miniPortal.init();
    });
})(); /*(function() {
    setTimeout(function() {
        var t = new QZFL.JsLoader();
        t.onload = function() {};
        t.load("view/qf_default/vip/stat.js", null, {
            "charset": "utf-8"
        });
        t.onload = function() {
            var _path = (document.domain == "qq.com" ? "/qz": "/py") + location.pathname;;
            TCISD.pv("sc.qzone.qq.com", _path, {});
        };
    },
    2000);
})();*/
/*  |xGv00|1496e3e954002dadb20d18d569d103a6 */
