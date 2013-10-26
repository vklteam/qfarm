window.C = window.C || {};
C.WIDTH = 950;
C.HEIGHT = 642;
C.HINT_HEIGHT = 31;
C.CANVAS_DOMAIN = {
    353 : 'appbase',
    358 : 'mcbase',
    372 : 'appbasesh',
    376 : 'appbasesh',
    391 : 'appbase'
};
C.DIRECT = {
    358 : true,
    376 : true
};
C.GRAY = {
    USE_ALPHA: false,
    USE_UIN: false,
    UIN_HASH: 100,
    UIN_LIST: [],
    UIN_APP: {},
    SPECIAL_FLASH_VARS: {},
    SPECIAL_FLASH_PARAMS: {}
};
var SPECIAL = (function() {
    try {
        var USE_ALPHA = C.GRAY.USE_ALPHA;
        var USE_UIN = C.GRAY.USE_UIN;
        var UIN_HASH = C.GRAY.UIN_HASH;
        var UIN_LIST = C.GRAY.UIN_LIST;
        var UIN_APP = C.GRAY.UIN_APP;
        var SPECIAL_FLASH_VARS = C.GRAY.SPECIAL_FLASH_VARS;
        var SPECIAL_FLASH_PARAMS = C.GRAY.SPECIAL_FLASH_PARAMS;
        var PTISP = (function() {
            var r = new RegExp("(?:^|;+|\\s+)ptisp=([^;]*)"),
            m = document.cookie.match(r);
            var ptisp = (!m ? "": m[1]);
            var allowed = {
                ctc: true,
                cnc: true,
                edu: true,
                cn: true,
                cm: true,
                os: true
            };
            if (allowed[ptisp]) {
                return ptisp + '.';
            } else {
                return '';
            }
        })();
        var alpha = USE_ALPHA && UIN_APP[APP_ID] && parent.QZONE && parent.QZONE.FrontPage.getBitMapFlag(58) == 1;
        var uin = USE_UIN && UIN_APP[APP_ID] && (function() {
            var uin = (parent.checkLogin ? parent.checkLogin() : (parent.FgetUin ? parent.FgetUin() : 0)) % UIN_HASH;
            for (var i = 0,
            l = UIN_LIST.length; i < l; i++) {
                if (typeof UIN_LIST[i] === 'number' && uin == UIN_LIST[i]) {
                    return true;
                }
                if (UIN_LIST[i].length == 2 && uin >= UIN_LIST[i][0] && uin <= UIN_LIST[i][1]) {
                    return true;
                }
            }
            return false;
        })();
        var get = function(id) {
            return (alpha || uin) && UIN_APP[APP_ID][id];
        };
        var process = function(ori, special) {
            if (special) {
                for (var key in special) {
                    ori[key] = special[key];
                }
            }
        };
        return {
            js: get(1),
            flash: function(flashVars, flashParams) {
                if (get(2)) {
                    process(flashVars, SPECIAL_FLASH_VARS[APP_ID]);
                    process(flashParams, SPECIAL_FLASH_PARAMS[APP_ID]);
                }
            }
        };
    } catch(__) {
        return null;
    }
})();
/*  |xGv00|70e4ad9f591f69d0958778deba3540f2 */
