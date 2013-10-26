if (typeof(QBS) == 'undefined') {
    var QBS = {
        bf: [],
        dom: {
            get: function(id) {
                return document.getElementById(id);
            }
        }
    };
    var PMT = {
        get: function() {}
    };
    var GDT = {
        bf: []
    };
    QBS.t = 'QBS';
    GDT.t = 'GDT';
    function _qbs_load_js(url, cb, charset, attr) {
        var q = document.createElement("script");
        charset = charset || 'UTF-8';
        if (cb) {
            if (window.ActiveXObject) {
                q.onreadystatechange = function() {
                    var v = this.readyState;
                    if ("loaded" === v || "complete" === v) {
                        cb();
                        q.parentNode.removeChild(q);
                        q = null;
                    }
                };
            } else {
                q.onload = function() {
                    cb();
                    q.parentNode.removeChild(q);
                    q = null;
                };
            }
        }
        q.charset = charset;
        if (attr) {
            for (var t in attr) {
                q.t = attr[t];
            }
        }
        q.src = url;
        document.getElementsByTagName("head")[0].appendChild(q);
    }
    var loading = false;
    function k(a) {
        function exec() {
            QBS.exec('get', QBS._get);
            GDT.exec('get', GDT._get);
            QBS.exec('dealpos', QBS._dealpos);
            GDT.exec('dealpos', GDT._dealpos);
        }
        a.exec = function(type, fn) {
            var arg;
            while (arg = a.dequeue(type)) {
                fn.apply(null, arg);
            }
        };
        a.enqueue = function(type, value) {
            a.bf[type] = a.bf[type] || [];
            a.bf[type].push(value);
        };
        a.dequeue = function(type) {
            var n;
            if (a.bf[type]) {
                n = a.bf[type].shift();
            }
            return n;
        };
        a.onPreGet = function() {};
        a.fp = (function() {
            var _fp = window,
            found = 0;
            var _isfp = function() {
                return !! (_fp.QZONE && _fp.QZONE.FrontPage && _fp.QZFL && _fp.g_iUin);
            };
            try {
                if (_isfp()) {
                    found = 5;
                } else {
                    do {
                        _fp = _fp.parent;
                        if (_isfp()) {
                            found = 5;
                            break;
                        }
                    } while ( _fp != top );
                }
            } catch(ex) {
                found = 0;
            }
            if (found < 5) {
                return false;
            }
            return _fp;
        })();
        var fk = a.fp;
        a.imgcacheDomain = ( !! fk && fk.imgcacheDomain) ? fk.imgcacheDomain: 'imgcache.qq.com';
        a.siDomain = ( !! fk && fk.siDomain) ? fk.siDomain: "qzonestyle.gtimg.cn";
        if (!loading) {
            loading = true;
            var d = a.siDomain;
            var __snsad_js_v = '1.3.0.0';
            //var url = 'http://' + d + '/qzone/biz/ac/comm/qbslib.js?' + __snsad_js_v;
           // var comurl = 'http://' + d + '/qzone/biz/ac/comm/qbscomm.js?' + __snsad_js_v;
		   var url = '';
		   var comurl = '';
            var _load_get = function() {
                _qbs_load_js(url,
                function() {
                    if (a._get) {
                        exec();
                    }
                },
                'utf-8', {
                    'async': true
                });
            };
            if (!fk) {
                _qbs_load_js(comurl,
                function() {
                    if (typeof __qbs_load_comm != 'undefined') {
                        _load_get();
                    }
                });
            } else {
                _load_get();
            }
        }
        var slice = Array.prototype.slice;
        a.get = function() {
            var args = slice.call(arguments, 0);
            a.enqueue('get', args);
            if (a._get) {
                exec();
            }
        };
        a.dealpos = function() {
            var args = slice.call(arguments, 0);
            a.enqueue('dealpos', args);
            if (a._dealpos) {
                exec();
            }
        };
    }
    k(QBS);
    k(GDT);
}
/*  |xGv00|49f6053d32cdf31bba0473eaa320031e */

