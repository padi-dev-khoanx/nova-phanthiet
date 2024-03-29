"function" != typeof String.prototype.startsWith &&
(String.prototype.startsWith = function (t) {
    return 0 === this.lastIndexOf(t, 0);
}),
"function" != typeof String.prototype.endsWith &&
(String.prototype.endsWith = function (t) {
    return -1 !== this.indexOf(t, this.length - t.length);
}),
"function" != typeof String.prototype.trim &&
(String.prototype.trim = function () {
    return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "");
}),
"function" != typeof Array.prototype.find &&
(Array.prototype.find = function (t) {
    if (null == this) throw new TypeError('"this" is null or not defined');
    var e = Object(this),
        i = e.length >>> 0;
    if ("function" != typeof t) throw new TypeError("callback must be a function");
    for (var a = arguments[1], n = 0; n < i; ) {
        var r = e[n];
        if (t.call(a, r, n, e)) return r;
        n++;
    }
}),
"function" != typeof Array.prototype.findIndex &&
Object.defineProperty(Array.prototype, "findIndex", {
    value: function (t) {
        if (null == this) throw new TypeError('"this" is null or not defined');
        var e = Object(this),
            i = e.length >>> 0;
        if ("function" != typeof t) throw new TypeError("predicate must be a function");
        for (var a = arguments[1], n = 0; n < i; ) {
            var r = e[n];
            if (t.call(a, r, n, e)) return n;
            n++;
        }
        return -1;
    },
    configurable: !0,
    writable: !0,
}),
"function" != typeof Array.prototype.filter &&
(Array.prototype.filter = function (t, e) {
    "use strict";
    if ("function" != typeof t || !this) throw new TypeError();
    var i = this.length >>> 0,
        a = new Array(i),
        n = this,
        r = 0,
        o = -1;
    if (void 0 === e)
        for (; ++o !== i; )
            if (o in this)
                if (t(n[o], o, n)) a[r++] = n[o];
                else for (; ++o !== i; ) o in this && t.call(e, n[o], o, n) && (a[r++] = n[o]);
    return (a.length = r), a;
}),
"function" != typeof Array.prototype.map &&
(Array.prototype.map = function (t) {
    var e, i, a;
    if (null == this) throw new TypeError("this is null or not defined");
    var n = Object(this),
        r = n.length >>> 0;
    if ("function" != typeof t) throw new TypeError(t + " is not a function");
    for (arguments.length > 1 && (e = arguments[1]), i = new Array(r), a = 0; a < r; ) {
        var o, s;
        a in n && ((o = n[a]), (s = t.call(e, o, a, n)), (i[a] = s)), a++;
    }
    return i;
}),
"function" != typeof Array.prototype.reduce &&
(Array.prototype.reduce = function (t) {
    if (null === this) throw new TypeError("Array.prototype.reduce called on null or undefined");
    if ("function" != typeof t) throw new TypeError(t + " is not a function");
    var e,
        i = Object(this),
        a = i.length >>> 0,
        n = 0;
    if (arguments.length >= 2) e = arguments[1];
    else {
        for (; n < a && !(n in i); ) n++;
        if (n >= a) throw new TypeError("Reduce of empty array with no initial value");
        e = i[n++];
    }
    for (; n < a; ) n in i && (e = t(e, i[n], n, i)), n++;
    return e;
}),
"function" != typeof Object.keys &&
(Object.keys = (function () {
    "use strict";
    var t = Object.prototype.hasOwnProperty,
        e = !{ toString: null }.propertyIsEnumerable("toString"),
        i = ["toString", "toLocaleString", "valueOf", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "constructor"],
        a = i.length;
    return function (n) {
        if ("function" != typeof n && ("object" != typeof n || null === n)) throw new TypeError("Object.keys called on non-object");
        var r,
            o,
            s = [];
        for (r in n) t.call(n, r) && s.push(r);
        if (e) for (o = 0; o < a; o++) t.call(n, i[o]) && s.push(i[o]);
        return s;
    };
})()),
    (String.prototype.replaceAll = function (t, e) {
        return this.valueOf().split(t).join(e);
    }),
    (String.prototype.format = function () {
        for (var t = this, e = 0; e < arguments.length; e++) {
            var i = new RegExp("\\{" + e + "\\}", "gi");
            t = t.replace(i, arguments[e]);
        }
        return t.valueOf();
    }),
    (Array.prototype.removeSpace = function () {
        var t = [];
        return (
            this.forEach(function (e) {
                (e = e.trim()).length > 0 && t.push(e);
            }),
                t
        );
    }),
    (Array.prototype.random = function () {
        return this[Math.floor(Math.random() * this.length)];
    }),
    (Array.prototype.unique = function () {
        return this.filter(function (t, e, i) {
            return i.indexOf(t) == e;
        });
    }),
    (Array.prototype.except = function (t) {
        var e = this;
        return (
            Array.isArray(t) &&
            t.forEach(function (t) {
                var i = e.indexOf(t);
                -1 != i && e.splice(i, 1);
            }),
                e
        );
    }),
    (Array.prototype.only = function (t) {
        var e = [];
        return (
            Array.isArray(t) &&
            this.forEach(function (i) {
                -1 != t.indexOf(i) && e.push(i);
            }),
                e
        );
    }),
    (Array.prototype.insert = function (t, e) {
        this.splice(t, 0, e);
    });
var LadiPageScriptV2 = LadiPageScriptV2 || function () {};
(LadiPageScriptV2.prototype.init = function () {
    (this.const = {
        DESKTOP: "desktop",
        MOBILE: "mobile",
        DOMAIN_GOOGLE_DOCS: "docs.google.com",
        POWERED_BY_IMAGE: "https://w.ladicdn.com/source/v3/by/ladipage.svg",
        STATIC_W_DOMAIN: "w.ladicdn.com",
        STATIC_S_DOMAIN: "s.ladicdn.com",
        APP_RUNTIME_PREFIX: "_runtime",
        ACTION_TYPE: { action: "action", hover: "hover", complete: "complete" },
        DATA_ACTION_TYPE: {
            link: "link",
            section: "section",
            email: "email",
            phone: "phone",
            popup: "popup",
            hidden_show: "hidden_show",
            collapse: "collapse",
            set_value: "set_value",
            copy_clipboard: "copy_clipboard",
            change_index: "change_index",
            lightbox: "lightbox",
            popup_cart: "popup_cart",
            popup_checkout: "popup_checkout",
        },
        DATA_ACTION_LIGHTBOX_TYPE: { image: "image", video: "video", iframe: "iframe" },
        COUNTDOWN_TYPE: { countdown: "countdown", daily: "daily", endtime: "endtime" },
        COUNTDOWN_ITEM_TYPE: { day: "day", hour: "hour", minute: "minute", seconds: "seconds" },
        VIDEO_TYPE: { youtube: "youtube", direct: "direct" },
        BACKGROUND_STYLE: { solid: "solid", gradient: "gradient", image: "image", video: "video" },
        PUBLISH_PLATFORM: { ladipage: "LADIPAGE", ladipagedns: "LADIPAGEDNS", wordpress: "WORDPRESS", haravan: "HARAVAN", sapo: "SAPO", shopify: "SHOPIFY", itop: "ITOPWEBSITE", ftp: "FTP", other: "OTHER" },
        TRACKING_NAME: "ladicid",
        ACCESS_KEY_NAME: "ladiack",
        REF_NAME: "ref",
        PUBLISH_STYLE: { desktop_min_width: 768, mobile_small_min_width: 320 },
        ANIMATED_LIST: ["rotate-1", "rotate-2", "rotate-3", "type", "scale", "loading-bar", "slide", "clip", "zoom", "push"],
        POSITION_TYPE: {
            default: "default",
            top: "top",
            bottom: "bottom",
            top_left: "top_left",
            top_center: "top_center",
            top_right: "top_right",
            center_left: "center_left",
            center_right: "center_right",
            bottom_left: "bottom_left",
            bottom_center: "bottom_center",
            bottom_right: "bottom_right",
        },
        COLLECTION_TYPE: { carousel: "carousel", readmore: "readmore" },
        INPUT_TYPE: {
            tel: "tel",
            password: "password",
            text: "text",
            date: "date",
            select_multiple: "select_multiple",
            number: "number",
            email: "email",
            textarea: "textarea",
            select: "select",
            radio: "radio",
            checkbox: "checkbox",
            file: "file",
            product_variant: "product_variant",
        },
        CONTENT_TYPE: { form_data: "FORM_DATA", form_urlencoded: "X_WWW_FORM_URLENCODED", json: "JSON" },
        SORT_BY_TYPE: { asc: "asc", desc: "desc" },
        PRODUCT_VARIANT_TYPE: { combined: "combined", combobox: "combobox", label: "label" },
        PRODUCT_VARIANT_OPTION_TYPE: { color: 1, image: 2 },
        PRODUCT_VARIANT_TITLE: { left: "left", top: "top" },
        FORM_THANKYOU_TYPE: { default: "default", url: "url", popup: "popup" },
        GAME_RESULT_TYPE: { default: "default", popup: "popup" },
        PERCENT_TRACKING_SCROLL: [0, 25, 50, 75, 100],
        TIME_ONPAGE_TRACKING: [10, 30, 60, 120, 180, 300, 600],
        FORM_CONFIG_TYPE: {
            email: "EMAIL",
            mail_chimp: "MAIL_CHIMP",
            infusion_soft: "INFUSION_SOFT",
            infusion_soft_ladi: "INFUSION_SOFT_LADI",
            active_campaign: "ACTIVE_CAMPAIGN",
            sendgrid: "SENDGRID",
            hubspot: "HUBSPOT",
            smtp: "SMTP",
            esms: "ESMS",
            get_response: "GET_RESPONSE",
            convertkit: "CONVERTKIT",
            ladiflow: "LADIFLOW",
            telegram: "TELEGRAM",
            slack: "SLACK",
            zalo_zns: "ZALO_ZNS",
            mautic: "MAUTIC",
            google_sheet: "GOOGLE_SHEET",
            google_form: "GOOGLE_FORM",
            custom_api: "CUSTOM_API",
            ladisales: "LADISALES",
            haravan: "HARAVAN",
            sapo: "SAPO",
            shopify: "SHOPIFY",
            nhanh_vn: "NHANH_VN",
            google_recaptcha: "GOOGLE_RECAPTCHA",
            google_recaptcha_enterprise: "GOOGLE_RECAPTCHA_ENTERPRISE",
            kiotviet: "KIOTVIET",
            wordpress: "WORDPRESS",
            metu: "METU",
            ladichat: "LADICHAT",
            shopping: "SHOPPING",
            blog: "BLOG",
            conversion_api: "CONVERSION_API",
            popupx: "POPUPX",
        },
        FORM_UPLOAD_FILE_LENGTH: 20,
        FORM_UPLOAD_FILE_SIZE: 25,
        CART_LAYOUT: { editable: "editable", viewonly: "viewonly" },
        WIDTH_SECTION_RESIZE: {},
        RESIZE_ADD_PIXEL: 300,
        RESIZE_ADD_PIXEL_THUMB: 50,
        RESIZE_RANGE: 50,
        TOOLTIP_TYPE: { default: "default", info: "info", success: "success", error: "error", notice: "notice" },
        TOOLTIP_POSITION: {
            top_middle: "top_middle",
            top_left: "top_left",
            top_right: "top_right",
            bottom_middle: "bottom_middle",
            bottom_left: "bottom_left",
            bottom_right: "bottom_right",
            left_middle: "left_middle",
            left_top: "left_top",
            left_bottom: "left_bottom",
            right_middle: "right_middle",
            right_top: "right_top",
            right_bottom: "right_bottom",
        },
        TOOLTIP_SIZE: { small: "small", medium: "medium", big: "big" },
        STORY_PAGE: { horizontal: "horizontal", vertical: "vertical", none: "none" },
        COMBOBOX_TYPE: { delivery_method: "delivery_method" },
        PRODUCT_TYPE: { event: "Event", service: "Service", physical: "Physical" },
    }),
        (this.runtime = {
            backdrop_popup_id: "backdrop-popup",
            lightbox_screen_id: "lightbox-screen",
            builder_section_popup_id: "SECTION_POPUP",
            builder_section_background_id: "BODY_BACKGROUND",
            ladipage_powered_by_classname: "ladipage_powered_by",
            current_element_mouse_down_carousel: null,
            current_element_mouse_down_carousel_position_x: 0,
            current_element_mouse_down_carousel_diff: 40,
            current_element_mouse_down_gallery_control: null,
            current_element_mouse_down_gallery_control_time: 0,
            current_element_mouse_down_gallery_control_time_click: 300,
            current_element_mouse_down_gallery_control_position_x: 0,
            current_element_mouse_down_gallery_view: null,
            current_element_mouse_down_gallery_view_position_x: 0,
            current_element_mouse_down_gallery_view_diff: 40,
            scroll_show_popup: {},
            scroll_depth: [],
            scroll_to_section: {},
            send_request_response: {},
            is_mobile_only: !1,
            interval_countdown: null,
            interval_gallery: null,
            timeout_gallery: {},
            interval_carousel: null,
            timenext_carousel: {},
            time_click: 300,
            isClient: !1,
            isDesktop: !0,
            isIE: !1,
            isYouTubeIframeAPIReady: !1,
            isLoadYouTubeIframeAPI: !1,
            isVideoButtonUnmute: !0,
            device: this.const.DESKTOP,
            ladipage_id: null,
            list_collapse: {},
            list_scroll_func: {},
            list_loaded_func: [],
            list_show_popup_func: {},
            list_youtube_ready_exec: [],
            list_scrolling_exec: {},
            list_scrolled_exec: {},
            list_lightbox_id: {},
            list_set_value_name_country: ["ward", "district", "state", "country"],
            tmp: {},
            tabindexForm: 0,
            eventData: {},
            timenow: 0,
            widthScrollBar: 0,
            replaceStr: {},
            replacePrefixStart: "{{",
            replacePrefixEnd: "}}",
            replaceNewPrefixStart: "!::",
            replaceNewPrefixEnd: "::!",
        }),
        (this.const.WIDTH_SECTION_RESIZE[this.const.DESKTOP] = 1440),
        (this.const.WIDTH_SECTION_RESIZE[this.const.MOBILE] = 768);
}),
    (LadiPageScriptV2.prototype.isObject = function (t) {
        return !this.isFunction(t) && !this.isArray(t) && t instanceof Object;
    }),
    (LadiPageScriptV2.prototype.isArray = function (t) {
        return t instanceof Array;
    }),
    (LadiPageScriptV2.prototype.isFunction = function (t) {
        return "function" == typeof t || t instanceof Function;
    }),
    (LadiPageScriptV2.prototype.isBoolean = function (t) {
        return "boolean" == typeof t;
    }),
    (LadiPageScriptV2.prototype.isString = function (t) {
        return "string" == typeof t || t instanceof String;
    }),
    (LadiPageScriptV2.prototype.isEmpty = function (t) {
        return !!this.isNull(t) || (this.isString(t) ? 0 == (t = t.trim()).length || "undefined" == t.toLowerCase() : !!this.isArray(t) && 0 == t.length);
    }),
    (LadiPageScriptV2.prototype.isNull = function (t) {
        return void 0 === t || void 0 == t;
    }),
    (LadiPageScriptV2.prototype.equals = function (t, e) {
        return typeof t == typeof e && JSON.stringify(t) == JSON.stringify(e);
    }),
    (LadiPageScriptV2.prototype.copy = function (t) {
        return this.isNull(t) ? t : JSON.parse(JSON.stringify(t));
    });
var Base64 = {
        _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
        encode: function (t) {
            var e,
                i,
                a,
                n,
                r,
                o,
                s,
                l = "",
                c = 0;
            for (t = Base64._utf8_encode(t); c < t.length; )
                (n = (e = t.charCodeAt(c++)) >> 2),
                    (r = ((3 & e) << 4) | ((i = t.charCodeAt(c++)) >> 4)),
                    (o = ((15 & i) << 2) | ((a = t.charCodeAt(c++)) >> 6)),
                    (s = 63 & a),
                    isNaN(i) ? (o = s = 64) : isNaN(a) && (s = 64),
                    (l = l + Base64._keyStr.charAt(n) + Base64._keyStr.charAt(r) + Base64._keyStr.charAt(o) + Base64._keyStr.charAt(s));
            return l;
        },
        decode: function (t) {
            var e,
                i,
                a,
                n,
                r,
                o,
                s = "",
                l = 0;
            for (t = t.replace(/[^A-Za-z0-9\+\/\=]/g, ""); l < t.length; )
                (e = (Base64._keyStr.indexOf(t.charAt(l++)) << 2) | ((n = Base64._keyStr.indexOf(t.charAt(l++))) >> 4)),
                    (i = ((15 & n) << 4) | ((r = Base64._keyStr.indexOf(t.charAt(l++))) >> 2)),
                    (a = ((3 & r) << 6) | (o = Base64._keyStr.indexOf(t.charAt(l++)))),
                    (s += String.fromCharCode(e)),
                64 != r && (s += String.fromCharCode(i)),
                64 != o && (s += String.fromCharCode(a));
            return (s = Base64._utf8_decode(s));
        },
        _utf8_encode: function (t) {
            t = t.replace(/\r\n/g, "\n");
            for (var e = "", i = 0; i < t.length; i++) {
                var a = t.charCodeAt(i);
                a < 128
                    ? (e += String.fromCharCode(a))
                    : a > 127 && a < 2048
                        ? ((e += String.fromCharCode((a >> 6) | 192)), (e += String.fromCharCode((63 & a) | 128)))
                        : ((e += String.fromCharCode((a >> 12) | 224)), (e += String.fromCharCode(((a >> 6) & 63) | 128)), (e += String.fromCharCode((63 & a) | 128)));
            }
            return e;
        },
        _utf8_decode: function (t) {
            for (var e = "", i = 0, a = 0, n = 0, r = 0; i < t.length; )
                (a = t.charCodeAt(i)) < 128
                    ? ((e += String.fromCharCode(a)), i++)
                    : a > 191 && a < 224
                        ? ((r = t.charCodeAt(i + 1)), (e += String.fromCharCode(((31 & a) << 6) | (63 & r))), (i += 2))
                        : ((r = t.charCodeAt(i + 1)), (n = t.charCodeAt(i + 2)), (e += String.fromCharCode(((15 & a) << 12) | ((63 & r) << 6) | (63 & n))), (i += 3));
            return e;
        },
    },
    LadiPageScript = LadiPageScript || new LadiPageScriptV2();
LadiPageScript.init();
var LadiFormApi = LadiFormApi || {},
    parseFloatLadiPage = function (t, e) {
        var i = parseFloat(t);
        return parseFloat(LadiPageScript.formatNumber(i, 21, null, e || 6));
    },
    decodeURIComponentLadiPage = function (t) {
        try {
            return decodeURIComponent(t);
        } catch (e) {
            return t;
        }
    };
(LadiPageScriptV2.prototype.loadDataset = function (t, e, i, a, n, r, o, s) {
    var l = this;
    l.runTimeout(function () {
        l.loadDataset(t, e, i, a, n, r, o, s);
    }, 100);
}),
    (LadiPageScriptV2.prototype.postMessageWindow = function (t, e, i) {
        t.postMessage(JSON.stringify(e), i);
    }),
    (LadiPageScriptV2.prototype.updateHeightElement = function (t, e, i, a, n, r, o) {
        for (var s = this, l = [], c = [], d = e.parentElement.children, p = 0; p < d.length; p++) d[p].id != e.id && d[p].classList.contains("ladi-element") && c.push(d[p]);
        var u = "style_update_height_element";
        if (t) {
            var m = "#" + s.runtime.builder_section_popup_id + " > .ladi-container > .ladi-element { max-height: none !important;}";
            s.createStyleElement(u, m);
        }
        for (
            var _ = function (t) {
                    var e = !s.isArray(o) || -1 != o.indexOf(t.id);
                    if (
                        (e = e ? t.id != s.runtime.builder_section_popup_id : e) &&
                        "fixed" == getComputedStyle(t).position &&
                        (!t.classList.contains("ladi-element") || 0 == t.getElementsByClassName("ladi-popup").length) &&
                        ((e = !1), t.classList.contains("ladi-section"))
                    ) {
                        var i = s.runtime.eventData[t.id],
                            a = s.runtime.isDesktop ? s.const.DESKTOP : s.const.MOBILE;
                        s.isEmpty(i) || i[a + ".option.sticky_position"] != s.const.POSITION_TYPE.top || (e = !0);
                    }
                    return e;
                },
                y = n - a,
                g = parseFloatLadiPage(getComputedStyle(e).top) || 0,
                f = function (t) {
                    s.runTimeout(function () {
                        t.classList.remove("transition-parent-collapse-top");
                    }, 1e3 * parseFloatLadiPage(getComputedStyle(t).transitionDuration));
                },
                h = 0;
            h < c.length;
            h++
        )
            if (_(c[h])) {
                var v = parseFloatLadiPage(getComputedStyle(c[h]).top) || 0;
                v >= g + a && (r && (c[h].classList.add("transition-parent-collapse-top"), f(c[h])), c[h].style.setProperty("top", (parseFloatLadiPage(v + y) || 0) + "px"), l.push(c[h].id));
            }
        var E = 0,
            P = 0;
        if (
            (!this.isEmpty(i) &&
            0 != y &&
            _(i) &&
            ((E = parseFloatLadiPage(getComputedStyle(i).height) || 0),
                (P = parseFloatLadiPage(E + y) || 0),
            r &&
            (i.classList.add("transition-parent-collapse-height"),
                s.runTimeout(function () {
                    i.classList.remove("transition-parent-collapse-height");
                }, 1e3 * parseFloatLadiPage(getComputedStyle(i).transitionDuration))),
                i.style.setProperty("height", P + "px"),
                l.push(i.id)),
            E != P)
        ) {
            var A = this.findAncestor(i.parentElement, "ladi-element");
            this.isEmpty(A) && (A = this.findAncestor(i.parentElement, "ladi-section")), (l = l.concat(this.updateHeightElement(!1, i, A, E, P, r, o)));
        }
        if (t) {
            var L = document.getElementById(u);
            this.isEmpty(L) || L.parentElement.removeChild(L);
        }
        return l.unique();
    }),
    (LadiPageScriptV2.prototype.showParentVisibility = function (t, e) {
        var i = this.findAncestor(t, "ladi-popup");
        if (!this.isEmpty(i) && ((i = this.findAncestor(i, "ladi-element")), !this.isEmpty(i)))
            return "none" == getComputedStyle(i).display && i.classList.add("hide-visibility"), this.isFunction(e) && e(), void i.classList.remove("hide-visibility");
        this.isFunction(e) && e();
    }),
    (LadiPageScriptV2.prototype.pauseAllVideo = function (t) {
        var e = document.getElementById(this.runtime.lightbox_screen_id).getElementsByClassName("lightbox-close")[0];
        if (!this.isEmpty(e)) return e.click(), this.pauseAllVideo(t);
        delete this.runtime.tmp.gallery_playing_video;
        for (var i = (t = t || document).querySelectorAll(".iframe-video-preload:not(.no-pause)"), a = 0; a < i.length; a++) this.runEventReplayVideo(i[a].id, i[a].getAttribute("data-video-type"), !1);
    }),
    (LadiPageScriptV2.prototype.runEventReplayVideo = function (t, e, i) {
        var a = this,
            n = document.getElementById(t),
            r = null;
        if (!a.isEmpty(n)) {
            var o = document.getElementById(t + "_button_unmute"),
                s = a.isEmpty(o);
            if (e == a.const.VIDEO_TYPE.youtube) {
                r = i ? "playVideo" : "pauseVideo";
                var l = !1;
                if (a.runtime.isYouTubeIframeAPIReady) {
                    var c = window.YT.get(t);
                    if (!a.isEmpty(c)) {
                        if ((s && i && a.isFunction(c.unMute) && c.unMute(), !s && i && a.isFunction(c.mute) && c.mute(), !a.isFunction(c[r])))
                            return void a.runTimeout(function () {
                                a.runEventReplayVideo(t, e, i);
                            }, 100);
                        c[r](), (l = !0);
                    }
                }
                l ||
                (s && i && a.postMessageWindow(n.contentWindow, { event: "command", func: "unMute", args: [] }, "*"),
                !s && i && a.postMessageWindow(n.contentWindow, { event: "command", func: "mute", args: [] }, "*"),
                    a.postMessageWindow(n.contentWindow, { event: "command", func: r, args: [] }, "*"));
            }
            e == a.const.VIDEO_TYPE.direct && ((r = i ? "play" : "pause"), s && i && (n.muted = !1), !s && i && (n.muted = !0), a.isFunction(n[r]) && n[r]()),
                i ? (n.classList.remove("ladi-hidden"), a.isEmpty(o) || o.style.removeProperty("display")) : (n.classList.add("ladi-hidden"), a.isEmpty(o) || o.style.setProperty("display", "none"));
        }
    }),
    (LadiPageScriptV2.prototype.runEventPlayVideo = function (t, e, i, a, n, r, o, s, l, c) {
        var d = this,
            p = d.runtime.isVideoButtonUnmute;
        (d.runtime.isDesktop || o || s || n || a) && (p = !1);
        var u = function (t, i) {
                if (p && !t.hasAttribute("data-remove-button-unmute")) {
                    var a = t.id + "_button_unmute",
                        n = document.getElementById(a);
                    d.isEmpty(n) &&
                    (((n = document.createElement("div")).id = a),
                        (n.innerHTML = "<div></div>"),
                        (n.className = "button-unmute ladi-hidden"),
                        n.addEventListener("click", function (i) {
                            if ((i.stopPropagation(), (t = document.getElementById(t.id)), e == d.const.VIDEO_TYPE.youtube)) {
                                var a = !1;
                                if (d.runtime.isYouTubeIframeAPIReady) {
                                    var r = window.YT.get(t.id);
                                    !d.isEmpty(r) && d.isFunction(r.unMute) && (r.unMute(), (a = !0));
                                }
                                a || d.postMessageWindow(t.contentWindow, { event: "command", func: "unMute", args: [] }, "*");
                            }
                            e == d.const.VIDEO_TYPE.direct && (t.muted = !1), n.parentElement.removeChild(n), t.setAttribute("data-remove-button-unmute", !0);
                        }),
                        t.parentElement.appendChild(n)),
                    i && n.classList.remove("ladi-hidden");
                    var r = d.findAncestor(t, "lightbox-screen");
                    d.isEmpty(r) || (n.style.setProperty("width", getComputedStyle(t).width), n.style.setProperty("height", getComputedStyle(t).height));
                }
            },
            m = document.getElementById(t);
        if (!d.isEmpty(m)) {
            var _ = d.findAncestor(m, "ladi-video");
            d.isEmpty(_) || (_ = d.findAncestor(_, "ladi-element")), !a || r || d.isEmpty(_) || (_.classList.add("pointer-events-none"), m.classList.add("no-pause")), o && m.classList.add("ladi-hidden");
            var y = "";
            if (!d.isEmpty(_)) {
                var g = _.getElementsByClassName("ladi-video-background")[0];
                if (!d.isEmpty(g)) {
                    var f = getComputedStyle(g).backgroundImage;
                    f.toLowerCase().startsWith('url("') && f.toLowerCase().endsWith('")') && ((f = (f = f.substr('url("'.length)).substr(0, f.length - '")'.length)), d.isEmpty(f) || (y = f));
                }
            }
            if (e == d.const.VIDEO_TYPE.youtube) {
                var h = d.getVideoId(e, i),
                    v = function () {
                        try {
                            if (
                                ((d.runtime.isLoadYouTubeIframeAPI && d.runtime.isYouTubeIframeAPIReady) ||
                                !d.isObject(window.YT) ||
                                !d.isFunction(window.YT.Player) ||
                                ((d.runtime.isLoadYouTubeIframeAPI = !0), (d.runtime.isYouTubeIframeAPIReady = !0)),
                                d.runtime.isLoadYouTubeIframeAPI ||
                                ((d.runtime.isLoadYouTubeIframeAPI = !0),
                                    (window.onYouTubeIframeAPIReady = function () {
                                        d.runtime.isYouTubeIframeAPIReady = !0;
                                        for (; d.runtime.list_youtube_ready_exec.length > 0; ) d.runtime.list_youtube_ready_exec.shift()();
                                    }),
                                    d.loadScript("//www.youtube.com/iframe_api")),
                                    !d.runtime.isYouTubeIframeAPIReady)
                            )
                                return void d.runtime.list_youtube_ready_exec.push(v);
                            (m.outerHTML = m.outerHTML.replaceAll("<iframe", "<div").replaceAll("</iframe>", "</div>")), (m = document.getElementById(t)), n && m.classList.add("opacity-0");
                            var e = function () {
                                    n && (m = document.getElementById(t)).classList.remove("opacity-0");
                                },
                                i = e,
                                _ = function (e) {
                                    m = document.getElementById(t);
                                    var i = window.YT.get(t);
                                    d.isEmpty(i) || d.isEmpty(m) ? d.runTimeout(_, 100) : (d.runResizeAll(), a || p ? i.mute() : i.unMute(), o || s || i.playVideo(), d.isFunction(c) && c(), u(m));
                                };
                            new window.YT.Player(t, {
                                videoId: h,
                                playerVars: { rel: 0, modestbranding: 0, playsinline: n || a || l || p ? 1 : 0, controls: !n && r ? 1 : 0 },
                                events: {
                                    onReady: _,
                                    onStateChange: function (i) {
                                        if (i.data == window.YT.PlayerState.PLAYING) {
                                            if (((m = document.getElementById(t)), n)) {
                                                var a = function () {
                                                    window.YT.get(t).getCurrentTime() >= 0.1 ? e() : d.runTimeout(a, 100);
                                                };
                                                a();
                                            }
                                            u(m, !0);
                                            var r = document.getElementById(t + "_button_unmute");
                                            d.isEmpty(r) || window.YT.get(t).mute();
                                        }
                                        i.data == window.YT.PlayerState.ENDED && window.YT.get(t).playVideo();
                                    },
                                    onError: i,
                                },
                            });
                        } catch (t) {}
                    };
                v();
            }
            if (e == d.const.VIDEO_TYPE.direct) {
                d.isEmpty(y) || m.setAttribute("poster", y),
                    m.setAttribute("preload", "auto"),
                    m.setAttribute("controlslist", "nodownload"),
                    m.setAttribute("loop", ""),
                o || s || m.setAttribute("autoplay", ""),
                (n || a || l || p) && (m.setAttribute("playsinline", ""), m.setAttribute("webkit-playsinline", "")),
                !n && r && m.setAttribute("controls", ""),
                    a || p ? m.setAttribute("muted", "") : m.removeAttribute("muted"),
                n && m.classList.add("opacity-0");
                var E = function () {
                    n && (m = document.getElementById(t)).classList.remove("opacity-0");
                };
                m.removeAttribute("src"),
                    m.setAttribute("data-src", i),
                    (m.outerHTML = m.outerHTML.replaceAll("data-src=", "src=")),
                    (m = document.getElementById(t)),
                d.isFunction(c) && c(m),
                    m.addEventListener("loadedmetadata", function (t) {
                        u(m);
                    }),
                    m.addEventListener("error", E),
                    m.addEventListener("playing", function (t) {
                        if (n) {
                            var e = function () {
                                m.currentTime >= 0.1 ? E() : d.runTimeout(e, 100);
                            };
                            e();
                        }
                        u(m, !0);
                        var i = document.getElementById(m.id + "_button_unmute");
                        d.isEmpty(i) || (m.muted = !0);
                    });
            }
        }
    }),
    (LadiPageScriptV2.prototype.playVideo = function (t, e, i, a, n, r) {
        var o = document.getElementById(t);
        if (!this.isEmpty(o)) {
            var s = document.getElementById(t + "_player");
            if ((r || n || this.pauseAllVideo(), this.isEmpty(s))) {
                var l = o.getElementsByClassName("ladi-video")[0],
                    c = t + "_player";
                e == this.const.VIDEO_TYPE.youtube &&
                ((l.innerHTML =
                    l.innerHTML +
                    '<iframe id="' +
                    c +
                    '" class="iframe-video-preload" data-video-type="' +
                    e +
                    '" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
                    this.runEventPlayVideo(c, e, i, n, !1, a, r)),
                e == this.const.VIDEO_TYPE.direct &&
                ((l.innerHTML = l.innerHTML + '<video id="' + c + '" class="iframe-video-preload" data-video-type="' + e + '" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; object-fit: cover;"></video>'),
                    this.runEventPlayVideo(c, e, i, n, !1, a, r));
            } else this.runEventReplayVideo(s.id, e, !0);
        }
    }),
    (LadiPageScriptV2.prototype.checkResizeImage = function (t) {
        var e = [".jpg", ".jpeg", ".png"],
            i = function (t) {
                for (var i = !1, a = 0; a < e.length; a++)
                    if (t.endsWith(e[a])) {
                        i = !0;
                        break;
                    }
                return i;
            };
        if (!i(t.toLowerCase())) {
            var a = this.getElementAHref(t, !0);
            return (a.search = ""), i(a.href);
        }
        return !0;
    }),
    (LadiPageScriptV2.prototype.getOptimizeImage = function (t, e, i, a, n, r, o) {
        if (this.isEmpty(t) || !this.isString(t)) return t;
        var s = t.split("/"),
            l = s.indexOf("");
        if (
            (-1 != l && s.length > l + 1 && (s[l + 1] = s[l + 1].toLowerCase()),
                (l = s.indexOf(this.const.STATIC_W_DOMAIN.toLowerCase())),
            this.checkResizeImage(t) && -1 != l && (s.length == l + 3 || (s.length == l + 6 && "ls" == s[3] && "product" == s[5]) || (s.length == l + 4 && "luid" == s[3] && "avatar" == s[4]) || (s.length == l + 4 && "rbg" == s[4])))
        ) {
            var c = s[l + 1].toLowerCase(),
                d = !0;
            if (c.startsWith("s")) {
                var p = c.split("x");
                2 == p.length && parseFloatLadiPage(p[1]) == p[1] && (d = !1);
            }
            if (d) {
                if (o || n) {
                    if (((e = parseInt(e) || 0), (i = parseInt(i) || 0), a)) {
                        var u = this.const.RESIZE_RANGE + (r ? this.const.RESIZE_ADD_PIXEL_THUMB : this.const.RESIZE_ADD_PIXEL);
                        (e <= 0 || i <= 0) && (u *= 2), (e = e - (e % this.const.RESIZE_RANGE) + u), (i = i - (i % this.const.RESIZE_RANGE) + u);
                    }
                } else (e = this.const.WIDTH_SECTION_RESIZE[LadiPage.data.device_screen]), (i = this.const.WIDTH_SECTION_RESIZE[LadiPage.data.device_screen]);
                s.insert(l + 1, "s" + e + "x" + i);
            }
        }
        return (t = s.join("/"));
    }),
    (LadiPageScriptV2.prototype.historyReplaceState = function (t) {
        try {
            window.history.replaceState(null, null, t);
        } catch (t) {}
    }),
    (LadiPageScriptV2.prototype.resetViewport = function () {
        this.isEmpty(this.runtime.tmp.timeoutViewport) || this.removeTimeout(this.runtime.tmp.timeoutViewport), this.isFunction(window.ladi_viewport) && (this.runtime.tmp.timeoutViewport = this.runTimeout(window.ladi_viewport, 10));
    }),
    (LadiPageScriptV2.prototype.runStoryPage = function () {
        var t = this,
            e = t.runtime.story_page;
        if (this.isObject(e)) {
            var i = document.getElementsByClassName("ladi-wraper")[0];
            if (!this.isEmpty(i)) {
                var a = document.getElementsByClassName("ladi-story-page-progress-bar")[0];
                this.isEmpty(a) || a.parentElement.removeChild(a);
                var n = document.querySelectorAll('.ladi-section:not([id="' + this.runtime.builder_section_popup_id + '"]):not([id="' + this.runtime.builder_section_background_id + '"])');
                if (0 != n.length) {
                    (a = document.createElement("div")).className = "ladi-story-page-progress-bar";
                    for (
                        var r = null,
                            o =
                                (n[0],
                                    function (e, i) {
                                        e.addEventListener("click", function (e) {
                                            e.stopPropagation(), t.removeTimeout(t.runtime.tmp.story_page_next_timeout_id), window.ladi(i.id, i).scroll();
                                        });
                                    }),
                            s = 0;
                        s < n.length;
                        s++
                    ) {
                        var l = document.createElement("div");
                        (l.className = "ladi-story-page-progress-bar-item"), l.style.setProperty("width", "calc(100% / " + n.length + " - 10px)"), o(l, n[s]), a.appendChild(l), 0 == s && (r = l);
                    }
                    i.appendChild(a), (t.runtime.tmp.story_page_mouse_down = !1), (t.runtime.tmp.story_page_current_page = 1);
                    var c = function (i, a) {
                            if (!t.isEmpty(i)) {
                                a && i.click();
                                for (var n = i; !t.isEmpty(n.previousElementSibling); ) (n = n.previousElementSibling).classList.add("active");
                                for (var r = i; !t.isEmpty(r.nextElementSibling); ) (r = r.nextElementSibling).classList.remove("active");
                                i.classList.remove("active");
                                var o = i.parentElement.getElementsByTagName("span")[0];
                                t.isEmpty(o) || o.parentElement.removeChild(o), (o = document.createElement("span")), i.appendChild(o), e.is_autoplay || o.style.setProperty("width", "100%");
                            }
                        },
                        d = function () {
                            if (e.is_autoplay) {
                                var i = 300,
                                    a = null;
                                if (
                                    t.isEmpty(t.runtime.tmp.current_default_popup_id) &&
                                    !t.runtime.tmp.story_page_mouse_down &&
                                    !t.runtime.tmp.story_page_scroll &&
                                    ((a = document.querySelector(".ladi-story-page-progress-bar-item span")), !t.isEmpty(a))
                                ) {
                                    var n = parseFloatLadiPage(a.style.getPropertyValue("width")) || 0;
                                    (n = (n = (((n = (1e3 * e.autoplay_time) / (100 / n)) + i) / (1e3 * e.autoplay_time)) * 100) > 100 ? 100 : n),
                                        a.style.setProperty("width", n + "%"),
                                    n >= 100 &&
                                    ((t.runtime.tmp.story_page_next_timeout_id = t.runTimeout(function () {
                                        t.isEmpty(a.parentElement) || c(a.parentElement.nextElementSibling, !0);
                                    }, i)),
                                        (i *= 2));
                                }
                                t.runtime.tmp.story_page_timeout_id = t.runTimeout(d, i);
                            }
                        };
                    c(r, !1),
                        (t.runtime.tmp.story_page_timeout_id = t.runTimeout(d, 300)),
                        document.addEventListener("mousedown", function (e) {
                            t.runtime.tmp.story_page_mouse_down = !0;
                        }),
                        document.addEventListener(
                            "touchstart",
                            function (e) {
                                t.runtime.tmp.story_page_mouse_down = !0;
                            },
                            t.runtime.scrollEventPassive
                        ),
                        document.addEventListener("mouseup", function (e) {
                            t.runtime.tmp.story_page_mouse_down = !1;
                        }),
                        document.addEventListener("touchend", function (e) {
                            t.runtime.tmp.story_page_mouse_down = !1;
                        }),
                        i.addEventListener(
                            "scroll",
                            function (a) {
                                t.isEmpty(t.runtime.tmp.current_default_popup_id) &&
                                ((t.runtime.tmp.story_page_scroll = !0),
                                    t.removeTimeout(t.runtime.tmp.story_page_scroll_timeout_id),
                                    t.removeTimeout(t.runtime.tmp.story_page_timeout_id),
                                    (t.runtime.tmp.story_page_scroll_timeout_id = t.runTimeout(function () {
                                        var a = 0,
                                            n = e.type == t.const.STORY_PAGE.horizontal ? i.scrollLeft / i.clientWidth : i.scrollTop / i.clientHeight;
                                        if ((n = Math.floor(n + 1.5)) != t.runtime.tmp.story_page_current_page) {
                                            t.runtime.tmp.story_page_current_page = n;
                                            var r = document.querySelector(".ladi-story-page-progress-bar-item:nth-child(" + n + ")");
                                            t.removeTimeout(t.runtime.tmp.story_page_next_timeout_id), c(r, !1), (a = 100);
                                        }
                                        (t.runtime.tmp.story_page_scroll = !1), delete t.runtime.tmp.story_page_scroll_timeout_id, (t.runtime.tmp.story_page_timeout_id = t.runTimeout(d, a));
                                    }, 300)));
                            },
                            t.runtime.scrollEventPassive
                        );
                }
            }
        }
    }),
    (LadiPageScriptV2.prototype.runResizeSectionBackground = function () {
        var t = this;
        t instanceof LadiPageScriptV2 || (t = LadiPageScript);
        try {
            for (var e = document.querySelectorAll(".ladi-section .ladi-section-background iframe.ladi-section-background-video"), i = 0; i < e.length; i++) {
                var a = e[i],
                    n = parseFloatLadiPage(a.getAttribute("width")) || 0,
                    r = parseFloatLadiPage(a.getAttribute("height")) || 0;
                if (!(n <= 0 || r <= 0)) {
                    var o = t.findAncestor(a, "ladi-section-background"),
                        s = o.clientWidth,
                        l = (r / n) * s;
                    l < o.clientHeight && ((s = (o.clientHeight / l) * s), (l = o.clientHeight));
                    var c = (o.clientHeight - l) / 2,
                        d = (o.clientWidth - s) / 2;
                    a.style.setProperty("top", (parseFloatLadiPage(c) || 0) + "px"),
                        a.style.setProperty("left", (parseFloatLadiPage(d) || 0) + "px"),
                        a.style.setProperty("width", (parseFloatLadiPage(s) || 0) + "px"),
                        a.style.setProperty("height", (parseFloatLadiPage(l) || 0) + "px");
                }
            }
        } catch (t) {}
    }),
    (LadiPageScriptV2.prototype.runResizeAll = function () {
        var t = this;
        t instanceof LadiPageScriptV2 || (t = LadiPageScript);
        try {
            t.isFunction(window.ladi_viewport) && window.ladi_viewport(), t.runtime.tmp.generateCart();
            for (var e = document.querySelectorAll("#" + t.runtime.builder_section_popup_id + " .ladi-container > .ladi-element"), i = 0; i < e.length; i++) "none" != getComputedStyle(e[i]).display && window.ladi(e[i].id).show(!0);
            t.runResizeSectionBackground();
        } catch (t) {}
    }),
    (LadiPageScriptV2.prototype.runEventResize = function (t) {
        var e = this;
        e instanceof LadiPageScriptV2 || (e = LadiPageScript), e.isEmpty(e.runtime.tmp.timeoutResizeAll) || e.removeTimeout(e.runtime.tmp.timeoutResizeAll), (e.runtime.tmp.timeoutResizeAll = e.runTimeout(e.runResizeAll, 10));
    }),
    (LadiPageScriptV2.prototype.runEventOrientationChange = function (t) {
        var e = this;
        e instanceof LadiPageScriptV2 || (e = LadiPageScript), e.runEventResize(t);
    }),
    (LadiPageScriptV2.prototype.runAfterLocation = function () {
        var t = this;
        for (t instanceof LadiPageScriptV2 || (t = LadiPageScript); t.runtime.tmp.runAfterLocation.length > 0; ) {
            t.runtime.tmp.runAfterLocation.shift()();
        }
        t.reloadFeeShipping();
    }),
    (LadiPageScriptV2.prototype.removeLazyloadPopup = function (t) {
        var e = document.getElementById(t);
        if (!this.isEmpty(e)) for (var i = e.getElementsByClassName("ladi-lazyload"); i.length > 0; ) i[0].classList.remove("ladi-lazyload");
    }),
    (LadiPageScriptV2.prototype.reloadLazyload = function (t) {
        var e = this;
        e instanceof LadiPageScriptV2 || (e = LadiPageScript);
        var i = [];
        if (t && e.isObject(e.runtime.story_page)) {
            var a = document.getElementsByClassName("ladi-section")[0];
            if (!e.isEmpty(a)) for (i = a.getElementsByClassName("ladi-lazyload"); i.length > 0; ) i[0].classList.remove("ladi-lazyload");
        } else {
            i = document.getElementsByClassName("ladi-lazyload");
            for (var n = [], r = 0; r < i.length; r++) {
                var o = e.getElementBoundingClientRect(i[r]).y + window.scrollY;
                window.scrollY + e.getHeightDevice() > o && o + i[r].offsetHeight > window.scrollY && n.push(i[r]);
            }
            n.forEach(function (t) {
                t.classList.remove("ladi-lazyload");
            });
            for (var s = document.querySelectorAll(".ladi-gallery .ladi-gallery-view-item.selected:not(.ladi-lazyload)"), l = 0; l < s.length; l++)
                if (e.isEmpty(s[l].getAttribute("data-lazyload"))) {
                    s[l].setAttribute("data-lazyload", !0);
                    for (var c = s[l].parentElement.getElementsByClassName("ladi-lazyload"); c.length > 0; ) c[0].classList.remove("ladi-lazyload");
                }
        }
    }),
    (LadiPageScriptV2.prototype.documentLoaded = function () {
        var t = this;
        t instanceof LadiPageScriptV2 || (t = LadiPageScript);
        var e = t.getURLSearchParams(null, null, !0),
            i = e.ladishow,
            a = e.ladihide,
            n = e.laditop,
            r = window.location.hash;
        t.isEmpty(i) ? (i = []) : t.isArray(i) || (i = i.split(",").removeSpace()),
            t.isEmpty(a) ? (a = []) : t.isArray(a) || (a = a.split(",").removeSpace()),
            t.isEmpty(n) ? (n = []) : t.isArray(n) || (n = n.split(",").removeSpace().reverse());
        try {
            var o = window.ladi("LADI_CAMP_END_DATE").get_cookie(),
                s = window.ladi("LADI_CAMP_CONFIG").get_cookie();
            if (!t.isEmpty(o) && !t.isEmpty(s)) {
                s = JSON.parse(Base64.decode(s));
                var l = ((o = parseInt(o) || 0) - Date.now()) / 24 / 60 / 60 / 1e3;
                if (l > 0 && t.isArray(s.dynamic_content.cookie)) {
                    var c = [];
                    s.dynamic_content.cookie.forEach(function (e) {
                        var i = e.split("=");
                        2 != (i = i.removeSpace()).length || t.isEmpty(i[0]) || t.isEmpty(i[1]) || c.push({ name: i[0], value: i[1] });
                    }),
                        c.forEach(function (t) {
                            window.ladi(t.name).set_cookie(t.value, l);
                        });
                }
                (a = s.dynamic_content.hide || []),
                    (i = s.dynamic_content.show || []),
                    (n = s.dynamic_content.top || []),
                t.isArray(s.dynamic_content.scroll) && s.dynamic_content.scroll.length > 0 && (r = "#" + s.dynamic_content.scroll.pop());
            }
        } catch (t) {}
        var d = null,
            p = [];
        if (
            (i.forEach(function (e) {
                var i = document.getElementById(e);
                t.isEmpty(i) || (i.getElementsByClassName("ladi-popup").length > 0 && p.push(e));
            }),
            p.length > 0 && !t.isEmpty(r))
        )
            try {
                (d = document.querySelector(r)), t.isEmpty(d) || t.isEmpty(d.id) || !d.classList.contains("ladi-section") || (window.ladi(d.id).scroll(!1, !0), (r = null));
            } catch (t) {}
        if (
            (a.forEach(function (t) {
                window.ladi(t).hide();
            }),
                i.forEach(function (t) {
                    window.ladi(t).show();
                }),
                n.forEach(function (t) {
                    window.ladi(t).top();
                }),
                !t.isEmpty(r))
        )
            try {
                (d = document.querySelector(r)),
                t.isEmpty(d) ||
                t.isEmpty(d.id) ||
                t.runTimeout(function () {
                    window.ladi(d.id).scroll();
                }, 300);
            } catch (t) {}
        if ((t.resetViewport(), t.runEventScroll(), !t.isEmpty(t.runtime.tracking_global_url))) {
            var u = !1,
                m = window;
            t.isObject(t.runtime.story_page) && (m = document.getElementsByClassName("ladi-wraper")[0]);
            var _ = function () {
                u || ((u = !0), t.loadScript(t.runtime.tracking_global_url + "?v=" + Date.now()), m.removeEventListener("scroll", _), document.removeEventListener("mousemove", _), document.removeEventListener("touchstart", _));
            };
            m.addEventListener("scroll", _, t.runtime.scrollEventPassive),
                document.addEventListener("mousemove", _),
                document.addEventListener("touchstart", _, t.runtime.scrollEventPassive),
                t.runTimeout(_, t.runtime.tracking_global_delay);
        }
        for (; t.runtime.list_loaded_func.length > 0; ) {
            t.runtime.list_loaded_func.shift()();
        }
    }),
    (LadiPageScriptV2.prototype.runConversionApi = function (t, e, i) {
        !this.isEmpty(t) && !this.isEmpty(e) && this.isObject(window.ladi_conversion_api) && this.isObject(window.ladi_conversion_api[t]) && (window.ladi_conversion_api[t][e] = i);
        if (this.isObject(window.ladi_conversion_api) && this.isObject(window.ladi_conversion_api.facebook) && this.isArray(window.ladi_conversion_api.facebook.pixels) && this.isArray(window.ladi_conversion_api.facebook.events)) {
            (window.ladi_conversion_api.facebook.pixels = window.ladi_conversion_api.facebook.pixels.unique()),
                (window.ladi_conversion_api.facebook.fbc = window.ladi("_fbc").get_cookie()),
                (window.ladi_conversion_api.facebook.fbp = window.ladi("_fbp").get_cookie());
            for (var a = 0; a < window.ladi_conversion_api.facebook.events.length; a++) {
                var n = window.ladi_conversion_api.facebook.events[a].data;
                (n.event_id = n.eventID), delete n.eventID, (window.ladi_conversion_api.facebook.events[a].data = n);
            }
            this.runtime.tmp.runTrackingAnalytics("ConversionApi", { data: window.ladi_conversion_api }),
                delete window.ladi_conversion_api.facebook.fbc,
                delete window.ladi_conversion_api.facebook.fbp,
                delete window.ladi_conversion_api.facebook.events;
        }
    }),
    (LadiPageScriptV2.prototype.getWidthDevice = function () {
        if (this.runtime.is_mobile_only) {
            var t = document.getElementsByClassName("ladi-wraper")[0];
            if (!this.isEmpty(t)) return t.clientWidth;
        }
        var e = window.ladi_screen_width || window.screen.width;
        return window.outerWidth > 0 ? window.outerWidth : e;
    }),
    (LadiPageScriptV2.prototype.getHeightDevice = function (t) {
        return window.outerHeight > 0 && !this.runtime.isDesktop && ((t && window.outerHeight > window.innerHeight) || (!t && window.innerHeight > window.outerHeight)) ? window.outerHeight : window.innerHeight;
    }),
    (LadiPageScriptV2.prototype.startAutoScroll = function (t, e, i, a) {
        if (this.runtime.isDesktop ? i : a) {
            var n = document.getElementById(t);
            if (!this.isEmpty(n) && !n.classList.contains("ladi-auto-scroll")) {
                var r = 0;
                if ("section" != e) {
                    if (n.clientWidth <= this.getWidthDevice()) return;
                    r = (r = parseFloatLadiPage(getComputedStyle(n).left) || 0) > 0 ? 0 : -1 * r;
                } else {
                    for (var o = n.querySelectorAll(".ladi-container > .ladi-element"), s = 0; s < o.length; s++) {
                        var l = parseFloatLadiPage(getComputedStyle(o[s]).left) || 0;
                        l < r && (r = l);
                    }
                    (r = r > 0 ? 0 : -1 * r), n.querySelector(".ladi-container").style.setProperty("margin-left", r + "px");
                }
                n.classList.add("ladi-auto-scroll"), (n.scrollLeft = r);
            }
        }
    }),
    (LadiPageScriptV2.prototype.getLinkUTMRedirect = function (t, e) {
        var i = this.createTmpElement("a", "", { href: t }),
            a = this.getURLSearchParams(e, null, !1),
            n = a.utm_source;
        if (!this.isEmpty(n)) {
            n = "utm_source=" + encodeURIComponent(n);
            var r = a.utm_medium,
                o = a.utm_campaign,
                s = a.utm_term,
                l = a.utm_content;
            this.isEmpty(r) || (n += "&utm_medium=" + encodeURIComponent(r)),
            this.isEmpty(o) || (n += "&utm_campaign=" + encodeURIComponent(o)),
            this.isEmpty(s) || (n += "&utm_term=" + encodeURIComponent(s)),
            this.isEmpty(l) || (n += "&utm_content=" + encodeURIComponent(l)),
            this.isEmpty(i.href) || this.isEmpty(i.host) || !this.isEmpty(this.getURLSearchParams(i.search, "utm_source", !1)) || (i.search = i.search + (this.isEmpty(i.search) ? "?" : "&") + n);
        }
        return i.href;
    }),
    (LadiPageScriptV2.prototype.randomInt = function (t, e) {
        return (t = Math.ceil(t)), (e = Math.floor(e)), Math.floor(Math.random() * (e - t + 1)) + t;
    }),
    (LadiPageScriptV2.prototype.randomString = function (t) {
        for (var e = "", i = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz", a = i.length, n = 0; n < t; n++) e += i.charAt(Math.floor(Math.random() * a));
        return e;
    }),
    (LadiPageScriptV2.prototype.runCallback = function (t, e) {
        if (this.isFunction(e)) {
            var i = this;
            if (t) {
                var a = i.runInterval(function () {
                    i.removeInterval(a), i.runCallback(!1, e);
                }, 0);
                return;
            }
            e();
        }
    }),
    (LadiPageScriptV2.prototype.runTimeout = function (t, e) {
        if (this.isFunction(t)) {
            if (!this.isEmpty(e) && e > 0) return setTimeout(t, e);
            t();
        }
    }),
    (LadiPageScriptV2.prototype.removeTimeout = function (t) {
        return clearTimeout(t);
    }),
    (LadiPageScriptV2.prototype.removeInterval = function (t) {
        return clearInterval(t);
    }),
    (LadiPageScriptV2.prototype.runInterval = function (t, e) {
        if (this.isFunction(t)) return setInterval(t, e);
    }),
    (LadiPageScriptV2.prototype.getURLSearchParams = function (t, e, i) {
        var a = this,
            n = {},
            r = this.isNull(t);
        if (((t = r ? window.location.search : t), !this.isEmpty(t)))
            for (var o = t.substr(1).split("&"), s = 0; s < o.length; ++s) {
                var l = o[s].split("=", 2);
                if (this.isNull(n[l[0]])) {
                    1 == l.length ? (n[l[0]] = "") : (n[l[0]] = decodeURIComponentLadiPage(l[1].replace(/\+/g, " ")));
                    try {
                        if (i) {
                            var c = JSON.parse(n[l[0]]);
                            Number.isInteger(c) || ((n[l[0]] = c), 0 == n[l[0]].length ? (n[l[0]] = "") : 1 == n[l[0]].length && (n[l[0]] = n[l[0]][0]));
                        }
                    } catch (t) {}
                } else i && (this.isArray(n[l[0]]) || (n[l[0]] = [n[l[0]]]), 1 == l.length ? n[l[0]].push("") : n[l[0]].push(decodeURIComponentLadiPage(l[1].replace(/\+/g, " "))));
            }
        return (
            r &&
            ["email", "phone"].forEach(function (t) {
                try {
                    var e = n[t];
                    if (!a.isEmpty(e)) {
                        var i = Base64.decode(e);
                        e == Base64.encode(i) && (n[t] = i);
                    }
                } catch (t) {}
            }),
                this.isEmpty(e) ? n : n[e]
        );
    }),
    (LadiPageScriptV2.prototype.getVideoId = function (t, e) {
        if (this.isEmpty(e)) return e;
        if (t == this.const.VIDEO_TYPE.youtube) {
            var i = this.createTmpElement("a", "", { href: e });
            -1 != e.toLowerCase().indexOf("watch")
                ? (e = this.getURLSearchParams(i.search, "v", !1))
                : -1 != e.toLowerCase().indexOf("embed/")
                    ? (e = i.pathname.substring("/embed/".length))
                    : -1 != e.toLowerCase().indexOf("shorts/")
                        ? (e = i.pathname.substring("/shorts/".length))
                        : -1 != e.toLowerCase().indexOf("youtu.be") && (e = i.pathname.substring("/".length));
        }
        return e;
    }),
    (LadiPageScriptV2.prototype.sendRequest = function (t, e, i, a, n, r) {
        this.sendRequestWithOption(t, e, i, a, n, null, r);
    }),
    (LadiPageScriptV2.prototype.sendRequestWithOption = function (t, e, i, a, n, r, o) {
        var s = new XMLHttpRequest();
        try {
            if (this.isFunction(this.runtime.send_request_response[e])) if (this.runtime.send_request_response[e](e, i, o)) return;
            this.isFunction(o) &&
            (s.onreadystatechange = function () {
                var t = null;
                try {
                    t = s.responseText;
                } catch (t) {}
                o(t, s.status, s, e);
            }),
                s.open(t, e, a);
            this.isObject(n) &&
            Object.keys(n).forEach(function (t) {
                s.setRequestHeader(t, n[t]);
            }),
            this.isObject(r) &&
            Object.keys(r).forEach(function (t) {
                s[t] = r[t];
            }),
                s.send(i);
        } catch (t) {
            this.isFunction(o) && o(t, 0, s, e);
        }
    }),
    (LadiPageScriptV2.prototype.deleteCookie = function (t) {
        return window.ladi(t).delete_cookie();
    }),
    (LadiPageScriptV2.prototype.setCookie = function (t, e, i, a, n, r) {
        return window.ladi(e).set_cookie(i, a, r, t, n);
    }),
    (LadiPageScriptV2.prototype.getCookie = function (t) {
        return window.ladi(t).get_cookie();
    }),
    (LadiPageScriptV2.prototype.removeSticky = function () {
        var t = this;
        t instanceof LadiPageScriptV2 || (t = LadiPageScript);
        for (var e = document.querySelectorAll('[data-sticky="true"]'), i = 0; i < e.length; i++)
            e[i].removeAttribute("data-top"),
                e[i].removeAttribute("data-left"),
                e[i].style.removeProperty("top"),
                e[i].style.removeProperty("left"),
                e[i].style.removeProperty("width"),
                e[i].style.removeProperty("position"),
                e[i].style.removeProperty("z-index");
        t.runEventScroll();
    }),
    (LadiPageScriptV2.prototype.runEventBackdropClick = function (t) {
        t.stopPropagation();
        var e = this;
        e instanceof LadiPageScriptV2 || (e = LadiPageScript);
        for (var i = null, a = document.querySelectorAll('[data-popup-backdrop="true"]'), n = 0; n < a.length; n++) "none" != getComputedStyle(a[n]).display && (i = a[n].id);
        if (!e.isEmpty(i)) {
            var r = document.querySelector("#" + i + " .popup-close");
            if (!e.isEmpty(r) && "none" == getComputedStyle(r).display) return;
        }
        e.runRemovePopup(i, e.runtime.isClient);
    }),
    (LadiPageScriptV2.prototype.runEventMouseMove = function (t) {
        t.stopPropagation();
        var e = this;
        e instanceof LadiPageScriptV2 || (e = LadiPageScript), (t = e.getEventCursorData(t));
        var i = null,
            a = 0,
            n = 0,
            r = 0;
        e.isEmpty(e.runtime.current_element_mouse_down_carousel) ||
        ((i = document.getElementById(e.runtime.current_element_mouse_down_carousel)),
            (a = t.pageX - e.runtime.current_element_mouse_down_carousel_position_x),
            (n = parseFloatLadiPage(i.getElementsByClassName("ladi-carousel-content")[0].getAttribute("data-left")) || 0),
        (n += a) < (r = -((parseFloatLadiPage(e.runtime.eventData[e.runtime.current_element_mouse_down_carousel][e.runtime.device + ".option.carousel_crop.width"]) || 0) - i.clientWidth)) && (n = r),
        n > 0 && (n = 0),
            i.getElementsByClassName("ladi-carousel-content")[0].style.setProperty("left", n + "px"));
        if (!e.isEmpty(e.runtime.current_element_mouse_down_gallery_view)) {
            (i = document.querySelector('[data-runtime-id="' + e.runtime.current_element_mouse_down_gallery_view + '"]')), (a = t.pageX - e.runtime.current_element_mouse_down_gallery_view_position_x);
            var o = parseFloatLadiPage(i.getAttribute("data-current")) || 0;
            o == (parseFloatLadiPage(i.getAttribute("data-max-item")) || 0) - 1 && a < 0 && (a = 0),
            a > 0 && 0 == o && (a = 0),
                a >= e.runtime.current_element_mouse_down_gallery_view_diff
                    ? ((e.runtime.current_element_mouse_down_gallery_view = null), (e.runtime.current_element_mouse_down_gallery_view_position_x = 0), i.getElementsByClassName("ladi-gallery-view-arrow-left")[0].click())
                    : a <= -e.runtime.current_element_mouse_down_gallery_view_diff
                        ? ((e.runtime.current_element_mouse_down_gallery_view = null), (e.runtime.current_element_mouse_down_gallery_view_position_x = 0), i.getElementsByClassName("ladi-gallery-view-arrow-right")[0].click())
                        : i.querySelectorAll(".ladi-gallery-view-item.selected").length > 0 && i.querySelectorAll(".ladi-gallery-view-item.selected")[0].style.setProperty("left", a + "px");
        }
        e.isEmpty(e.runtime.current_element_mouse_down_gallery_control) ||
        ((i = document.querySelector('[data-runtime-id="' + e.runtime.current_element_mouse_down_gallery_control + '"]')),
            (a = t.pageX - e.runtime.current_element_mouse_down_gallery_control_position_x),
            (n = parseFloatLadiPage(i.getElementsByClassName("ladi-gallery-control-box")[0].getAttribute("data-left")) || 0),
        (n += a) <
        (r = (parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control")[0]).width) || 0) - (parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control-box")[0]).width) || 0)) &&
        (n = r),
        n > 0 && (n = 0),
            i.getElementsByClassName("ladi-gallery-control-box")[0].style.setProperty("left", n + "px"));
    }),
    (LadiPageScriptV2.prototype.runEventMouseUp = function (t) {
        t.stopPropagation();
        var e = this;
        e instanceof LadiPageScriptV2 || (e = LadiPageScript), (t = e.getEventCursorData(t));
        var i = null,
            a = 0;
        if (!e.isEmpty(e.runtime.current_element_mouse_down_carousel)) {
            delete e.runtime.timenext_carousel[e.runtime.current_element_mouse_down_carousel], (a = t.pageX - e.runtime.current_element_mouse_down_carousel_position_x);
            var n = (i = document.getElementById(e.runtime.current_element_mouse_down_carousel)).getElementsByClassName("ladi-carousel-content")[0].getAttribute("data-left");
            i.getElementsByClassName("ladi-carousel-content")[0].removeAttribute("data-left"),
                i.getElementsByClassName("ladi-carousel-content")[0].style.removeProperty("transition-duration"),
                (e.runtime.current_element_mouse_down_carousel = null),
                a >= e.runtime.current_element_mouse_down_carousel_diff
                    ? i.getElementsByClassName("ladi-carousel-arrow-left")[0].click()
                    : a <= -e.runtime.current_element_mouse_down_carousel_diff
                        ? i.getElementsByClassName("ladi-carousel-arrow-right")[0].click()
                        : i.getElementsByClassName("ladi-carousel-content").length > 0 &&
                        (i.getElementsByClassName("ladi-carousel-content")[0].style.setProperty("transition-duration", "100ms"),
                            i.getElementsByClassName("ladi-carousel-content")[0].style.setProperty("left", n),
                            e.runTimeout(function () {
                                i.getElementsByClassName("ladi-carousel-content")[0].style.removeProperty("transition-duration");
                            }, 1));
        }
        if (
            (e.isEmpty(e.runtime.current_element_mouse_down_gallery_view) ||
            ((i = document.querySelector('[data-runtime-id="' + e.runtime.current_element_mouse_down_gallery_view + '"]')).querySelectorAll(".ladi-gallery-view-item.selected").length > 0 &&
                i.querySelectorAll(".ladi-gallery-view-item.selected")[0].style.removeProperty("left")),
                !e.isEmpty(e.runtime.current_element_mouse_down_gallery_control))
        )
            if (
                ((i = document.querySelector('[data-runtime-id="' + e.runtime.current_element_mouse_down_gallery_control + '"]')).getElementsByClassName("ladi-gallery-control-box")[0].removeAttribute("data-left"),
                    i.getElementsByClassName("ladi-gallery-control-box")[0].style.removeProperty("transition-duration"),
                    i.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.remove("opacity-0"),
                    i.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.remove("opacity-0"),
                i.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-top") || i.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-bottom"))
            ) {
                var r = parseFloatLadiPage(i.getElementsByClassName("ladi-gallery-control-box")[0].style.getPropertyValue("left")) || 0,
                    o = parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control-box")[0]).width) || 0;
                (o = (o = -(o -= parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control")[0]).width) || 0)) > 0 ? 0 : o),
                r > 0 && (r = 0),
                r >= 0 && i.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.add("opacity-0"),
                r <= o && i.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.add("opacity-0");
            } else {
                var s = parseFloatLadiPage(i.getElementsByClassName("ladi-gallery-control-box")[0].style.getPropertyValue("top")) || 0,
                    l = parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control-box")[0]).height) || 0;
                (l = (l = -(l -= parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control")[0]).height) || 0)) > 0 ? 0 : l),
                s > 0 && (s = 0),
                s >= 0 && i.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.add("opacity-0"),
                s <= l && i.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.add("opacity-0");
            }
        (e.runtime.current_element_mouse_down_carousel_position_x = 0), (e.runtime.current_element_mouse_down_gallery_view = null), (e.runtime.current_element_mouse_down_gallery_view_position_x = 0);
        var c = 0;
        e.runtime.current_element_mouse_down_gallery_control_time + e.runtime.current_element_mouse_down_gallery_control_time_click < Date.now() && (c = 5),
            e.runTimeout(function () {
                (e.runtime.current_element_mouse_down_gallery_control = null), (e.runtime.current_element_mouse_down_gallery_control_time = 0), (e.runtime.current_element_mouse_down_gallery_control_position_x = 0);
            }, c);
    }),
    (LadiPageScriptV2.prototype.runEventMouseLeave = function (t) {
        var e = this;
        e instanceof LadiPageScriptV2 || (e = LadiPageScript),
            Object.keys(e.runtime.eventData).forEach(function (t) {
                var i = e.runtime.eventData[t];
                if ("popup" == i.type && i["option.show_popup_exit_page"]) {
                    if ((e.isObject(e.runtime.tmp.popup_leave_show) || (e.runtime.tmp.popup_leave_show = {}), e.runtime.tmp.popup_leave_show[t])) return;
                    (e.runtime.tmp.popup_leave_show[t] = !0), window.ladi(t).show();
                }
            });
    }),
    (LadiPageScriptV2.prototype.runEventScroll = function (t) {
        var e = this;
        if ((e instanceof LadiPageScriptV2 || (e = LadiPageScript), !e.isEmpty(e.runtime.eventData) && !e.runtime.tmp.is_run_show_popup)) {
            for (var i = null, a = document.querySelectorAll('[data-popup-backdrop="true"]'), n = 0; n < a.length; n++) "none" != getComputedStyle(a[n]).display && (i = a[n].id);
            var r = [];
            if (!e.isEmpty(i)) for (var o = document.querySelectorAll("#" + i + " .ladi-element"), s = 0; s < o.length; s++) r.push(o[s].id);
            if (
                (Object.keys(e.runtime.eventData).forEach(function (t) {
                    var a = e.runtime.eventData[t],
                        n = null,
                        o = null,
                        s = null,
                        l = Object.keys(e.runtime.list_scroll_func),
                        c = [];
                    c = "gallery" == a.type ? document.querySelectorAll("#" + t) : [(s = document.getElementById(t))];
                    for (var d = 0; d < c.length; d++)
                        if (((s = c[d]), !e.isEmpty(s))) {
                            var p = "gallery" == a.type ? s.getAttribute("data-runtime-id") : s.getAttribute("id");
                            if (-1 != l.indexOf(p)) {
                                var u = !1;
                                "section" == a.type
                                    ? ((n = s.offsetTop),
                                    ((window.scrollY >= n && window.scrollY <= n + s.offsetHeight) ||
                                        (window.scrollY + e.getHeightDevice() >= n && window.scrollY + e.getHeightDevice() <= n + s.offsetHeight) ||
                                        (n >= window.scrollY && window.scrollY + e.getHeightDevice() >= n)) &&
                                    (u = !0))
                                    : ((n = e.getElementBoundingClientRect(s).y + window.scrollY),
                                    ((window.scrollY >= n && window.scrollY <= n + s.offsetHeight) ||
                                        (window.scrollY + e.getHeightDevice(!0) >= n && window.scrollY + e.getHeightDevice(!0) <= n + s.offsetHeight) ||
                                        (n >= window.scrollY && window.scrollY + e.getHeightDevice(!0) >= n)) &&
                                    (u = !0)),
                                u && ((o = e.runtime.list_scroll_func[p]), delete e.runtime.list_scroll_func[p], o());
                            }
                        }
                    var m = a[e.runtime.device + ".style.animation-name"];
                    if (!e.isEmpty(m) && ((s = document.getElementById(t)), !e.isEmpty(s) && !s.classList.contains("ladi-animation"))) {
                        var _ = parseFloatLadiPage(a[e.runtime.device + ".style.animation-delay"]) || 0;
                        n = e.getElementBoundingClientRect(s).y + window.scrollY;
                        var y =
                            (window.scrollY >= n && window.scrollY <= n + s.offsetHeight) ||
                            (window.scrollY + e.getHeightDevice(!0) >= n && window.scrollY + e.getHeightDevice(!0) <= n + s.offsetHeight) ||
                            (n >= window.scrollY && window.scrollY + e.getHeightDevice(!0) >= n);
                        e.runtime.tmp.isFirstScroll && _ > 0 && !y && s.classList.add("ladi-animation-hidden"),
                        y &&
                        (s.classList.add("ladi-animation"),
                            e.runTimeout(function () {
                                s.classList.remove("ladi-animation-hidden");
                            }, 1e3 * _));
                    }
                    if (e.isEmpty(i) || -1 != r.indexOf(t)) {
                        var g = null,
                            f = null,
                            h = null;
                        if (
                            (a[e.runtime.device + ".option.sticky"] &&
                            ((g = a[e.runtime.device + ".option.sticky_position"]),
                                (f = parseFloatLadiPage(a[e.runtime.device + ".option.sticky_position_top"])),
                                (h = parseFloatLadiPage(a[e.runtime.device + ".option.sticky_position_bottom"]))),
                            !e.runtime.has_popupx && !e.isEmpty(g))
                        ) {
                            var v = document.getElementById(t);
                            if (!e.isEmpty(v) && v.clientWidth > 0 && v.clientHeight > 0 && -1 != ["default", "top", "bottom"].indexOf(g)) {
                                var E = e.getElementBoundingClientRect(v),
                                    P = v.getAttribute("data-top"),
                                    A = v.getAttribute("data-left");
                                e.isEmpty(P) ? (v.setAttribute("data-top", E.y + window.scrollY), (P = E.y)) : (P = parseFloatLadiPage(P)),
                                    e.isEmpty(A) ? (v.setAttribute("data-left", E.x + window.scrollX), (A = E.x)) : (A = parseFloatLadiPage(A));
                                var L = null,
                                    b = null;
                                if (
                                    ("default" == g &&
                                    (f > P - window.scrollY ? ((L = f + "px"), (b = A + "px")) : e.getHeightDevice() - h - v.clientHeight < P - window.scrollY && ((L = "calc(100% - " + (h + v.clientHeight) + "px)"), (b = A + "px"))),
                                    "top" == g && (f > P - window.scrollY || e.getHeightDevice() - 0 < P - window.scrollY) && ((L = f + "px"), (b = A + "px")),
                                    "bottom" == g && (e.getHeightDevice() - h - v.clientHeight < P - window.scrollY || 0 > P + v.clientHeight - window.scrollY) && ((L = "calc(100% - " + (h + v.clientHeight) + "px)"), (b = A + "px")),
                                    e.isEmpty(L) || e.isEmpty(b))
                                )
                                    v.style.removeProperty("top"), v.style.removeProperty("left"), v.style.removeProperty("width"), v.style.removeProperty("position"), v.style.removeProperty("z-index");
                                else if (
                                    (v.style.setProperty("top", L),
                                        v.style.setProperty("left", b),
                                    "section" == a.type &&
                                    (e.runtime.is_mobile_only ? v.style.setProperty("width", document.getElementsByClassName("ladi-wraper")[0].clientWidth + "px") : e.runtime.isDesktop && v.style.setProperty("width", "100%")),
                                        v.style.setProperty("position", "fixed"),
                                        v.style.setProperty("z-index", "90000050"),
                                        !v.hasAttribute("data-sticky"))
                                ) {
                                    v.setAttribute("data-sticky", !0), v.classList.contains("ladi-animation-hidden") && (v.classList.remove("ladi-animation-hidden"), v.classList.add("ladi-animation"));
                                    for (var w = v.getElementsByClassName("ladi-animation-hidden"); w.length > 0; ) w[0].classList.add("ladi-animation"), w[0].classList.remove("ladi-animation-hidden");
                                    v.classList.remove("ladi-lazyload");
                                    for (var S = v.getElementsByClassName("ladi-lazyload"); S.length > 0; ) S[0].classList.remove("ladi-lazyload");
                                }
                            }
                        }
                    }
                    if ("popup" == a.type) {
                        if (!e.isEmpty(e.runtime.scroll_show_popup[t])) return;
                        e.isEmpty(a["option.popup_welcome_page_scroll_to"]) ||
                        ((s = document.getElementById(a["option.popup_welcome_page_scroll_to"])),
                        !e.isEmpty(s) &&
                        s.offsetHeight > 0 &&
                        ((n = s.offsetTop),
                        ((window.scrollY >= n && window.scrollY <= n + s.offsetHeight) ||
                            (window.scrollY + e.getHeightDevice() >= n && window.scrollY + e.getHeightDevice() <= n + s.offsetHeight) ||
                            (n >= window.scrollY && window.scrollY + e.getHeightDevice() >= n)) &&
                        ((e.runtime.scroll_show_popup[t] = !0), window.ladi(t).show())));
                    }
                    if ("section" == a.type) {
                        if (!e.isEmpty(e.runtime.scroll_to_section[t])) return;
                        (s = document.getElementById(t)),
                        e.isEmpty(s) ||
                        ((n = s.offsetTop),
                        ((window.scrollY >= n && window.scrollY <= n + s.offsetHeight) ||
                            (window.scrollY + e.getHeightDevice() >= n && window.scrollY + e.getHeightDevice() <= n + s.offsetHeight) ||
                            (n >= window.scrollY && window.scrollY + e.getHeightDevice() >= n)) &&
                        ((e.runtime.scroll_to_section[t] = !0), e.runEventTracking(t, !1)));
                    }
                }),
                    e.runtime.isClient)
            ) {
                if (e.runtime.is_popupx) return;
                for (var l = Math.round(((window.scrollY + e.getHeightDevice()) / document.body.clientHeight) * 100), c = 1; c < e.const.PERCENT_TRACKING_SCROLL.length; c++)
                    l > e.const.PERCENT_TRACKING_SCROLL[c - 1] &&
                    l <= e.const.PERCENT_TRACKING_SCROLL[c] &&
                    -1 == e.runtime.scroll_depth.indexOf(e.const.PERCENT_TRACKING_SCROLL[c]) &&
                    (e.runtime.scroll_depth.push(e.const.PERCENT_TRACKING_SCROLL[c]),
                    e.isFunction(window.gtag) &&
                    window.gtag("event", "ScrollDepth_" + e.const.PERCENT_TRACKING_SCROLL[c] + "_percent", {
                        event_category: "LadiPageScrollDepth",
                        event_label: window.location.host + window.location.pathname,
                        non_interaction: !0,
                    }),
                    e.isFunction(window.fbq) && window.fbq("trackCustom", "ScrollDepth_" + e.const.PERCENT_TRACKING_SCROLL[c] + "_percent"));
            }
            if (((e.runtime.tmp.isFirstScroll = !1), !e.isEmpty(t))) {
                var d = 0,
                    p = Object.values(e.runtime.list_scrolling_exec);
                if (e.isEmpty(e.runtime.tmp.timeout_scrolling_id)) for (d = 0; d < p.length; d++) p[d]();
                e.removeTimeout(e.runtime.tmp.timeout_scrolling_id),
                    (e.runtime.tmp.timeout_scrolling_id = e.runTimeout(function () {
                        for (delete e.runtime.tmp.timeout_scrolling_id, p = Object.values(e.runtime.list_scrolled_exec), d = 0; d < p.length; d++) p[d]();
                    }, 1e3));
            }
        }
    }),
    (LadiPageScriptV2.prototype.runRemovePopup = function (t, e, i, a, n) {
        var r = this,
            o = document.querySelectorAll("#" + this.runtime.builder_section_popup_id + " .ladi-container > .ladi-element"),
            s = !1,
            l = !1;
        e || (LadiPagePlugin.getPlugin("popup").removeStyleShowPopupBuilder(), LadiPagePlugin.getPlugin("popup").removeStyleShowPopupBuilderScroll());
        var c = function () {
                var t = document.getElementById("style_popup");
                r.isEmpty(t) || t.parentElement.removeChild(t);
            },
            d = [],
            p = 0;
        if (this.isEmpty(t)) for (p = 0; p < o.length; p++) d.push(o[p].id);
        else d.push(t);
        if (
            (d.forEach(function (t) {
                var i = document.getElementById(t);
                if (!r.isEmpty(i)) {
                    r.runtime.has_popupx && ("none" != getComputedStyle(i).display && (l = !0), document.body.style.removeProperty("height"));
                    var a = parseFloatLadiPage(i.getAttribute("data-timeout-id")) || null;
                    r.removeTimeout(a), i.removeAttribute("data-timeout-id"), (a = parseFloatLadiPage(i.getAttribute("data-timeout-id-2")) || null), r.removeTimeout(a), i.removeAttribute("data-timeout-id-2");
                    var n = i.getElementsByClassName("popup-close")[0];
                    if (
                        (r.isEmpty(n) || ((a = parseFloatLadiPage(n.getAttribute("data-timeout-id")) || null), r.removeTimeout(a), n.removeAttribute("data-timeout-id")),
                            r.pauseAllVideo(i),
                        r.isEmpty(i.style.getPropertyValue("display")) || (s = !0),
                            i.style.removeProperty("display"),
                            i.style.removeProperty("z-index"),
                            i.hasAttribute("data-popup-backdrop"))
                    ) {
                        c(), e && (r.isEmpty(r.runtime.tmp.bodyScrollY) || window.scrollTo(0, r.runtime.tmp.bodyScrollY)), (r.runtime.tmp.bodyScrollY = null);
                        for (var d = 0; d < o.length; d++) o[d].style.removeProperty("z-index");
                    }
                    i.removeAttribute("data-scroll"),
                        i.removeAttribute("data-fixed-close"),
                        i.style.removeProperty("overflow-y"),
                        i.style.removeProperty("overflow-x"),
                        i.getElementsByClassName("ladi-popup")[0].style.removeProperty("height"),
                        i.style.removeProperty("max-height");
                }
            }),
            s && this.isFunction(i) && i(),
            a && c(),
            !n && l)
        ) {
            r.runtime.tmp.runActionPopupX({ id: t, dimension: { display: "none" }, action: { type: "set_iframe_dimension" } });
        }
        delete this.runtime.tmp.current_default_popup_id;
    }),
    (LadiPageScriptV2.prototype.runShowPopup = function (t, e, i, a, n, r) {
        var o = this;
        if (!o.isEmpty(e)) {
            var s = document.getElementById(e),
                l = null;
            if (!n || (!o.isEmpty(s) && o.isObject(o.runtime.eventData) && !o.isEmpty(o.runtime.eventData[e]))) {
                o.runtime.tmp.is_run_show_popup = !0;
                var c = 0,
                    d = "";
                n || LadiPagePlugin.getPlugin("popup").showStyleShowPopupBuilder(e),
                n && ((i = o.runtime.eventData[e][o.runtime.device + ".option.popup_position"]), (a = o.runtime.eventData[e][o.runtime.device + ".option.popup_backdrop"]));
                var p = function () {
                    if (!o.runtime.has_popupx && n) {
                        var t = window.scrollY;
                        if (!o.isEmpty(o.runtime.tmp.bodyScrollY)) {
                            var i = getComputedStyle(document.body);
                            "fixed" == i.position && (parseFloatLadiPage(i.top) || 0) == -1 * o.runtime.tmp.bodyScrollY && (t = o.runtime.tmp.bodyScrollY);
                        }
                        "block" != s.style.getPropertyValue("display") || o.isEmpty(o.runtime.tmp.bodyScrollY) || (t = o.runtime.tmp.bodyScrollY),
                            (d += "body {"),
                            (d += "position: fixed !important;"),
                            (d += "width: 100% !important;"),
                            (d += "top: -" + t + "px"),
                            (d += "}"),
                            (o.runtime.tmp.bodyScrollY = t),
                            (l = function () {
                                o.runtime.tmp.bodyScrollY = t;
                            });
                    }
                    for (var a = document.querySelectorAll("#" + o.runtime.builder_section_popup_id + " .ladi-container > .ladi-element"), r = 0; r < a.length; r++) a[r].id != e && a[r].style.setProperty("z-index", "1", "important");
                    c = 500;
                };
                i == o.const.POSITION_TYPE.default
                    ? ((d += "#" + o.runtime.backdrop_popup_id + " { display: block !important; " + a + "}"), s.setAttribute("data-popup-backdrop", !0), p(), (this.runtime.tmp.current_default_popup_id = e))
                    : n || ((d += "#" + o.runtime.backdrop_popup_id + " { display: block !important;}"), s.setAttribute("data-popup-backdrop", !0), p());
                var u = "block" == s.style.getPropertyValue("display");
                if ((o.isFunction(r) && !u && (r(), o.isFunction(l) && l()), o.isArray(o.runtime.list_show_popup_func[e])))
                    for (; o.runtime.list_show_popup_func[e].length > 0; ) {
                        o.runtime.list_show_popup_func[e].shift()();
                    }
                var m = s.hasAttribute("data-scroll"),
                    _ = s.hasAttribute("data-fixed-close"),
                    y = !1,
                    g = s.getElementsByClassName("ladi-popup")[0],
                    f = 1e3 * (parseFloatLadiPage(getComputedStyle(g).animationDuration) || 0),
                    h = 1e3 * (parseFloatLadiPage(getComputedStyle(g).animationDelay) || 0),
                    v = parseFloatLadiPage(s.getAttribute("data-timeout-id")) || null;
                o.removeTimeout(v),
                    (v = parseFloatLadiPage(s.getAttribute("data-timeout-id-2")) || null),
                    o.removeTimeout(v),
                    s.classList.add("ladi-animation-hidden"),
                    s.style.setProperty("display", "block", "important"),
                    (v = o.runTimeout(function () {
                        s.classList.remove("ladi-animation-hidden"), s.removeAttribute("data-timeout-id");
                    }, h)),
                o.isEmpty(v) || s.setAttribute("data-timeout-id", v),
                t &&
                (!m &&
                s.clientHeight > 0.8 * o.getHeightDevice() &&
                (n
                    ? o.runtime.has_popupx
                        ? (y = !0)
                        : (s.setAttribute("data-scroll", !0), s.style.setProperty("overflow-y", "auto", "important"), s.style.setProperty("overflow-x", "hidden", "important"), (m = !0))
                    : (_ = !0)),
                o.runtime.has_popupx && (y ? (s.setAttribute("data-fixed-close", !0), document.body.style.setProperty("height", s.clientHeight + "px")) : document.body.style.removeProperty("height")),
                m &&
                n &&
                (s.getElementsByClassName("ladi-popup")[0].style.removeProperty("height"),
                    s.style.removeProperty("max-height"),
                    s.getElementsByClassName("ladi-popup")[0].style.setProperty("height", s.clientHeight + "px", "important"),
                    s.style.setProperty("max-height", "80vh"))),
                !n && _ && LadiPagePlugin.getPlugin("popup").styleShowPopupBuilderScroll(e),
                o.runtime.has_popupx && ((d += "#" + o.runtime.backdrop_popup_id + " { display: none !important;}"), s.style.removeProperty("max-height"), s.style.removeProperty("overflow-y"), s.style.removeProperty("overflow-x")),
                o.isEmpty(d) || o.createStyleElement("style_popup", d);
                var E = null;
                if (n && !o.isEmpty(s)) {
                    var P = s.getElementsByClassName("popup-close")[0];
                    o.isEmpty(P) &&
                    (((P = document.createElement("div")).className = "popup-close"),
                        s.appendChild(P),
                        P.addEventListener("click", function (t) {
                            t.stopPropagation(), o.runRemovePopup(e, n);
                        })),
                        (v = parseFloatLadiPage(P.getAttribute("data-timeout-id")) || null),
                        o.removeTimeout(v),
                        P.classList.add("opacity-0"),
                    o.runtime.has_popupx && o.runtime.tmp.popupx_is_inline && P.classList.add("ladi-hidden");
                    var A = function () {
                        var t = s.getElementsByClassName("popup-close")[0];
                        if (!o.isEmpty(t)) {
                            var e = o.getElementBoundingClientRect(s),
                                i = e.y,
                                a = window.innerWidth - e.x - e.width;
                            (m || y) && (a += o.runtime.widthScrollBar), t.style.setProperty("right", a + "px"), t.style.setProperty("top", i + "px"), t.style.setProperty("position", "fixed");
                        }
                    };
                    (E = function () {
                        (v = o.runTimeout(function () {
                            A(), P.classList.remove("opacity-0"), P.removeAttribute("data-timeout-id");
                        }, f + h + 100)),
                            P.setAttribute("data-timeout-id", v);
                    }),
                    (m || y) && (s.hasAttribute("data-resize-scroll") || (s.setAttribute("data-resize-scroll", !0), window.addEventListener("resize", A)));
                }
                n && !u && o.runEventTracking(e, !1);
                var L = function () {
                    (v = o.runTimeout(function () {
                        delete o.runtime.tmp.is_run_show_popup, o.runEventScroll(), o.isFunction(E) && E(), s.removeAttribute("data-timeout-id-2");
                    }, c)),
                    o.isEmpty(v) || s.setAttribute("data-timeout-id-2", v);
                };
                if (t) L();
                else {
                    (v = o.runTimeout(function () {
                        "none" == getComputedStyle(s).display ? ((c -= 100), L()) : o.runShowPopup(!0, e, i, a, n, r), s.removeAttribute("data-timeout-id-2");
                    }, 100)),
                        s.setAttribute("data-timeout-id-2", v);
                }
            }
        }
    }),
    (LadiPageScriptV2.prototype.runEventTracking = function (t, e, i, a) {
        var n = this;
        if (this.runtime.isClient && !this.isEmpty(t)) {
            var r = n.runtime.eventData[t],
                o = r.type,
                s = null,
                l = null,
                c = null,
                d = null,
                p = null,
                u = n.runtime.currency;
            e && "form" == o
                ? ((s = r["option.form_conversion_name"]),
                    (l = r["option.form_google_ads_conversion"]),
                    (c = r["option.form_google_ads_label"]),
                    (d = r["option.form_event_custom_script"]),
                    (p = n.isEmpty(r["option.form_purchase_value"]) ? null : parseFloatLadiPage(r["option.form_purchase_value"]) || 0),
                n.runtime.shopping && (p = n.getCartCheckoutPrice(p)))
                : ((s = r["option.conversion_name"]), (l = r["option.google_ads_conversion"]), (c = r["option.google_ads_label"]), (d = r["option.event_custom_script"]));
            var m = function (t) {
                    if (!n.isEmpty(s)) {
                        var a = "trackCustom";
                        -1 !=
                        [
                            "AddPaymentInfo",
                            "AddToCart",
                            "AddToWishlist",
                            "CompleteRegistration",
                            "Contact",
                            "CustomizeProduct",
                            "Donate",
                            "FindLocation",
                            "InitiateCheckout",
                            "Lead",
                            "PageView",
                            "Purchase",
                            "Schedule",
                            "Search",
                            "StartTrial",
                            "SubmitApplication",
                            "Subscribe",
                            "ViewContent",
                        ].indexOf(s) && (a = "track");
                        var r = null,
                            o = null;
                        if ((n.isEmpty(p) || n.isEmpty(u) || (((r = {}).value = p), (r.currency = u)), t))
                            n.runtime.tmp.runActionPopupX({ fbq_track_name: a, conversion_name: s, fbq_data: r, fbq_event_data: o, action: { type: "run_tracking_fbq" } });
                        else {
                            if (n.isObject(window.ladi_conversion_api) && n.isObject(window.ladi_conversion_api.facebook) && n.isArray(window.ladi_conversion_api.facebook.pixels)) {
                                o = { eventID: "ladi." + Date.now() + "." + (Math.floor(9e10 * Math.random()) + 1e10) };
                            }
                            if ((window.fbq(a, s, r, o), n.runtime.shopping && e)) {
                                var l = n.getCartProducts();
                                n.isNull(l) || (n.isObject(o) || (o = {}), (o.cart_products = l));
                            }
                        }
                        n.isObject(i) && (n.isObject(o) || (o = {}), (o.email = i.email), (o.phone = i.phone)),
                            t
                                ? n.runtime.tmp.runActionPopupX({ type: "facebook", key: "events", keyData: [{ key: a, name: s, custom_data: r, data: o }], action: { type: "run_conversion_api" } })
                                : n.runConversionApi("facebook", "events", [{ key: a, name: s, custom_data: r, data: o }]);
                    }
                },
                _ = function (t) {
                    if (
                        (n.isEmpty(l) ||
                        n.isEmpty(c) ||
                        (t
                            ? n.runtime.tmp.runActionPopupX({ conversion_name: "conversion", gtag_data: { send_to: "AW-" + l + "/" + c }, action: { type: "run_tracking_gtag" } })
                            : window.gtag("event", "conversion", { send_to: "AW-" + l + "/" + c })),
                            !n.isEmpty(s))
                    ) {
                        var e = "";
                        e = "section" == o ? "LadiPageSection" : "popup" == o ? "LadiPagePopup" : "form" == o ? "LadiPageConversion" : "LadiPageClick";
                        var i = LadiPageApp[r.type + n.const.APP_RUNTIME_PREFIX];
                        if (!n.isEmpty(i)) {
                            var a = i(r, n.runtime.isClient);
                            n.isFunction(a.getEventTrackingCategory) && (e = i(r, n.runtime.isClient).getEventTrackingCategory());
                        }
                        var d = { event_category: e, event_label: window.location.host + window.location.pathname };
                        n.isEmpty(p) || n.isEmpty(u) || ((d.value = p), (d.currency = u)), t ? n.runtime.tmp.runActionPopupX({ conversion_name: s, gtag_data: d, action: { type: "run_tracking_gtag" } }) : window.gtag("event", s, d);
                    }
                };
            if (!n.isEmpty(a)) {
                var y = !1;
                return (
                    n.isEmpty(l) || n.isEmpty(c) || (y = !0),
                    n.isEmpty(s) || (y = !0),
                    n.isEmpty(d) || (y = !0),
                        void (
                            y &&
                            a.addEventListener("click", function (r) {
                                "false" != a.getAttribute("data-click") && n.runEventTracking(t, e, i);
                            })
                        )
                );
            }
            if (n.runtime.is_popupx) return m(!0), _(!0), void n.runtime.tmp.runActionPopupX({ script: d, action: { type: "event_custom_script" } });
            n.isFunction(window.fbq) && m(), n.isFunction(window.gtag) && _(), n.isEmpty(d) || n.runFunctionString(d);
        }
    }),
    (LadiPageScriptV2.prototype.runFunctionString = function (t) {
        try {
            new Function(t)();
        } catch (t) {}
    }),
    (LadiPageScriptV2.prototype.formatCurrency = function (t, e, i, a) {
        var n = { VND: "{0}đ", KHR: "{0}៛", USD: "${0}", EUR: "€{0}", GBP: "£{0}", THB: "฿{0}", LAK: "₭{0}", PHP: "₱{0}", SGD: "S${0}", HKD: "HK${0}", TWD: "NT${0}", MYR: "RM{0}", IDR: "Rp{0}" };
        if (
            (Object.keys(n).forEach(function (t) {
                var i = n[t].replaceAll("{0}", "");
                (i = i.trim()) == e && (e = t);
            }),
                a)
        )
            return this.isEmpty(n[e]) ? e : n[e].format("").trim();
        var r = this.formatNumber(t, 3, null, { VND: 0, USD: 2, EUR: 2, GBP: 2, SGD: 2, MYR: 2, HKD: 2, TWD: 0, THB: 0, PHP: 0, KHR: 0, LAK: 0, IDR: 0 }[e] || 0);
        return i && (r = this.isEmpty(n[e]) ? r + " " + e : n[e].format(r)), r;
    }),
    (LadiPageScriptV2.prototype.formatNumber = function (t, e, i, a) {
        if (void 0 != t) {
            void 0 == i && (i = 0), void 0 == a && (a = 0);
            var n = "\\d(?=(\\d{" + (e || 3) + "})+" + (a > 0 ? "\\." : "$") + ")";
            t = t.toFixed(Math.max(0, ~~a)).replace(new RegExp(n, "g"), "$&,");
            var r = null,
                o = null;
            i >= 1 && ((o = (r = t.split("."))[0]), (t = o = new Array(i - o.length + 1).join("0") + o), 2 == r.length && (t += "." + r[1])),
            a >= 1 && 2 == (r = t.split(".")).length && ((o = r[1]), (o = new Array(a - o.length + 1).join("0") + o), (t = r[0] + "." + o));
        }
        return t;
    }),
    (LadiPageScriptV2.prototype.setDataReplaceStr = function (t, e) {
        this.runtime.replaceStr[t] = e;
    }),
    (LadiPageScriptV2.prototype.getDataReplaceStr = function (t, e) {
        var i = null;
        return this.isNull(e) || (i = e[t]), this.isNull(i) && (i = this.runtime.replaceStr[t]), i;
    }),
    (LadiPageScriptV2.prototype.highlightText = function (t, e, i, a) {
        if (!this.isEmpty(t) && 0 != e.length) {
            var n = i ? "gi" : "g",
                r = [];
            e.forEach(function (t) {
                r.push(t.replaceAll("|", "\\|"));
            }),
                r.sort(function (t, e) {
                    return e.length - t.length;
                });
            for (
                var o = this,
                    s = function (t) {
                        var s = new RegExp(r.join("|"), n);
                        if (3 !== t.nodeType) o.highlightText(t, e, i, a);
                        else if (s.test(t.textContent)) {
                            var l = document.createDocumentFragment(),
                                c = 0;
                            t.textContent.replace(s, function (e, i) {
                                var n = document.createTextNode(t.textContent.slice(c, i)),
                                    r = null;
                                o.isFunction(a) ? (r = a(e)) : ((r = document.createElement("span")).textContent = e), l.appendChild(n), l.appendChild(r), (c = i + e.length);
                            });
                            var d = document.createTextNode(t.textContent.slice(c));
                            l.appendChild(d), t.parentNode.replaceChild(l, t);
                        }
                    },
                    l = 0;
                l < t.childNodes.length;
                l++
            ) {
                s(t.childNodes[l]);
            }
        }
    }),
    (LadiPageScriptV2.prototype.convertDataReplaceStr = function (t, e, i, a, n, r) {
        var o = this,
            s = o.runtime.replacePrefixStart,
            l = o.runtime.replacePrefixEnd;
        o.runtime.convert_replace_str && ((s = o.runtime.replaceNewPrefixStart), (l = o.runtime.replaceNewPrefixEnd));
        for (
            var c = (t = o.isEmpty(t) ? "" : t),
                d = new RegExp(s + "[^" + s + "$" + l + "]*" + l, "gi"),
                p = null,
                u = [],
                m = function (t) {
                    if (a) u.push(t);
                    else {
                        var i = t,
                            d = i.split("|");
                        (i = d[0].substr(s.length)), 1 == d.length && (i = i.substr(0, i.length - l.length));
                        var p = o.getDataReplaceStr(i, n);
                        if (o.isEmpty(p))
                            if (d.length > 1) {
                                var m = o.randomInt(1, d.length - 1);
                                (p = d[m]), m == d.length - 1 && (p = p.substr(0, p.length - l.length));
                            } else p = "";
                        e && (o.isArray(p) && p.length > 1 && (p = JSON.stringify(p)), (p = encodeURIComponent(p))), (c = r && o.isArray(p) && p.length > 1 ? p : c.replaceAll(t, p));
                    }
                };
            null !== (p = d.exec(t));

        )
            p.index === d.lastIndex && d.lastIndex++, p.forEach(m);
        return (
            (u = u.unique()),
                o.highlightText(i, u, !0, function (t) {
                    var e = document.createElement("span");
                    return e.setAttribute("data-replace-str", t), e;
                }),
            o.runtime.isDesktop &&
            e &&
            !o.isEmpty(c) &&
            ["fb://profile/", "fb://page/?id=", "fb://page/"].forEach(function (t) {
                c.startsWith(t) && (c = c.replaceAll(t, window.location.protocol + "//www.facebook.com/"));
            }),
                c
        );
    }),
    (LadiPageScriptV2.prototype.setDataReplaceElement = function (t, e, i, a, n) {
        for (var r = this.isEmpty(a) ? document : document.getElementById(a), o = r.querySelectorAll("span[data-replace-str]"), s = 0; s < o.length; s++) {
            var l = o[s].getAttribute("data-replace-str");
            o[s].innerHTML = this.convertDataReplaceStr(l, !1, null, !1, i);
        }
        for (var c = r.querySelectorAll("a[data-replace-href]"), d = 0; d < c.length; d++) {
            var p = c[d].getAttribute("data-replace-href");
            (p = this.convertDataReplaceStr(p, !0, null, !1, i)), (c[d].href = p);
        }
        for (var u = r.querySelectorAll(".ladi-element .ladi-form-item-container [name]"), m = 0; m < u.length; m++) {
            var _ = null,
                y = null,
                g = !1,
                f = null,
                h = u[m].getAttribute("type");
            if (((h = this.isEmpty(h) ? h : h.trim()), t)) {
                var v = u[m].getAttribute("name").trim();
                (g = !0) && -1 == n.indexOf(v) && (g = !1), g && "country" == v && "true" == u[m].getAttribute("data-is-select-country") && (g = !1), g && (_ = this.getDataReplaceStr(v, i));
            }
            if (!g) {
                if (((f = this.findAncestor(u[m], "ladi-element")), this.isEmpty(f))) continue;
                var E = this.runtime.eventData[f.id];
                if (this.isEmpty(E)) continue;
                var P = E["option.input_default_value"];
                if (this.isEmpty(P)) continue;
                var A = !1;
                "INPUT" == u[m].tagName && "checkbox" == h && (A = !0), (_ = this.convertDataReplaceStr(P, !1, null, !1, i, A));
            }
            if (!this.isNull(_)) {
                if (((y = this.isArray(_) ? _[0] : _), (y = this.isNull(y) ? "" : y), (y += ""), "INPUT" == u[m].tagName))
                    if ("checkbox" == h || "radio" == h) {
                        var L = !1;
                        if ("checkbox" == h) {
                            var b = _;
                            this.isArray(b) || (b = [b]), (L = -1 != b.indexOf(u[m].getAttribute("value")));
                        }
                        "radio" == h && (L = u[m].getAttribute("value") == y.trim()), L ? ((u[m].checked = !0), e && u[m].setAttribute("checked", "checked")) : ((u[m].checked = !1), e && u[m].removeAttribute("checked"));
                        var w = this.findAncestor(u[m], "ladi-form-checkbox-item");
                        if (!this.isEmpty(w)) {
                            var S = w.querySelector("span");
                            this.isEmpty(S) || S.setAttribute("data-checked", u[m].checked);
                        }
                    } else (f = this.findAncestor(u[m], "ladi-element")), (this.isEmpty(f) || "true" != f.getAttribute("data-quantity")) && ((u[m].value = y.trim()), e && u[m].setAttribute("value", u[m].value));
                if (("TEXTAREA" == u[m].tagName && ((u[m].value = y.trim()), e && (u[m].innerHTML = u[m].value)), "SELECT" == u[m].tagName)) {
                    var T = u[m].querySelector('option[value="' + y.trim() + '"]');
                    if (!this.isEmpty(T) && ((u[m].value = T.getAttribute("value")), e && !T.hasAttribute("selected"))) {
                        for (var O = u[m].querySelectorAll("option"), C = 0; C < O.length; C++) O[C].removeAttribute("selected");
                        T.setAttribute("selected", "selected");
                    }
                }
            }
        }
    }),
    (LadiPageScriptV2.prototype.setDataReplaceStart = function () {
        for (var t = document.querySelectorAll(".ladi-headline, .ladi-paragraph, .ladi-list-paragraph ul"), e = 0; e < t.length; e++) this.convertDataReplaceStr(t[e].innerHTML, !1, t[e], !0);
        this.setDataReplaceElement(!0, !0, null, null, Object.keys(this.runtime.replaceStr));
    }),
    (LadiPageScriptV2.prototype.runLimitRequest = function (t, e) {
        var i = this,
            a = 1e3 / t;
        if (i.runtime.tmp.time_limit_request_next > Date.now())
            return i.runTimeout(function () {
                i.runLimitRequest(t, e);
            }, a / 5);
        (i.runtime.tmp.time_limit_request_next = Date.now() + a), i.isFunction(e) && e();
    }),
    (LadiPageScriptV2.prototype.showMessage = function (t, e, i) {
        var a = this;
        if (((t = a.convertDataReplaceStr(t, !1, null, !1, e)), a.runtime.has_popupx)) (a.runtime.tmp.popupx_show_message_callback = i), a.runtime.tmp.runActionPopupX({ message: t, action: { type: "show_message" } });
        else {
            var n = document.getElementsByClassName("ladipage-message")[0];
            if ((this.isEmpty(n) || n.parentElement.removeChild(n), this.isEmpty(t))) return void (this.isFunction(i) && i());
            ((n = document.createElement("div")).className = "ladipage-message"), document.body.appendChild(n);
            var r = document.createElement("div");
            (r.className = "ladipage-message-box"), n.appendChild(r);
            var o = document.createElement("span");
            r.appendChild(o), (o.textContent = this.const.LANG.ALERT_TITLE);
            var s = document.createElement("div");
            (s.className = "ladipage-message-text"), r.appendChild(s), (s.innerHTML = t);
            var l = document.createElement("button");
            (l.className = "ladipage-message-close"),
                r.appendChild(l),
                (l.textContent = this.const.LANG.ALERT_BUTTON_TEXT),
                l.focus(),
                l.addEventListener("click", function (t) {
                    t.stopPropagation(), n.parentElement.removeChild(n), a.isFunction(i) && i();
                });
        }
    }),
    (LadiPageScriptV2.prototype.getTextClipboard = function (t, e) {
        var i = this,
            a = function (a) {
                i.isFunction(e) && ((a = i.isEmpty(a) ? (i.isEmpty(t) ? "" : t) : a), e(!0, a));
            },
            n = function () {
                try {
                    var t = document.createElement("textarea");
                    t.setAttribute("style", "position: fixed; top: 0, left: 0, width: 1px; height: 1px; opacity: 0;"), document.body.appendChild(t), t.focus();
                    var n = document.execCommand("paste"),
                        r = t.value;
                    if ((t.parentElement.removeChild(t), n)) return void a(r);
                } catch (t) {}
                i.isFunction(e) && e(!1, null);
            };
        window.navigator.clipboard ? window.navigator.clipboard.readText().then(a).catch(n) : n();
    }),
    (LadiPageScriptV2.prototype.copyTextClipboard = function (t, e) {
        var i = this,
            a = function () {
                i.isFunction(e) && e(!0);
            },
            n = function () {
                try {
                    var n = document.createElement("textarea");
                    n.setAttribute("style", "position: fixed; top: 0, left: 0, width: 1px; height: 1px; opacity: 0;"), document.body.appendChild(n), (n.value = t), n.select();
                    var r = document.execCommand("copy");
                    if ((n.parentElement.removeChild(n), r)) return void a();
                } catch (t) {}
                i.isFunction(e) && e(!1);
            };
        window.navigator.clipboard ? window.navigator.clipboard.writeText(t).then(a).catch(n) : n();
    }),
    (LadiPageScriptV2.prototype.fireEvent = function (t, e, i) {
        t = this.isString(t) ? document.querySelector(t) : t;
        var a = document.createEvent("HTMLEvents");
        (a.initEvent(e, !0, !0), this.isObject(i)) &&
        Object.keys(i).forEach(function (t) {
            a[t] = i[t];
        });
        return !t.dispatchEvent(a);
    }),
    (LadiPageScriptV2.prototype.tapEventListener = function (t, e) {
        var i = this,
            a = function (t) {
                i.isFunction(e) && e(t);
            };
        if ((t.addEventListener("click", a), "ontouchstart" in window)) {
            var n = 0,
                r = 0,
                o = i.getWidthDevice(),
                s = Math.max(1, Math.floor(0.01 * o)),
                l = null;
            t.addEventListener(
                "touchstart",
                function (e) {
                    (e = i.getEventCursorData(e)), i.removeTimeout(l), (n = e.screenX), (r = e.screenY), t.removeEventListener("click", a);
                },
                i.runtime.scrollEventPassive
            ),
                t.addEventListener("touchend", function (e) {
                    (e = i.getEventCursorData(e)),
                    Math.abs(e.screenX - n) <= s && Math.abs(e.screenY - r) <= s && a(e),
                        (l = i.runTimeout(function () {
                            t.addEventListener("click", a);
                        }, i.runtime.time_click));
                });
        }
    }),
    (LadiPageScriptV2.prototype.findAncestor = function (t, e) {
        if (this.isNull(t) || this.isNull(t.classList) || !t.classList.contains(e)) for (; (t = t.parentElement) && !t.classList.contains(e); );
        return t;
    }),
    (LadiPageScriptV2.prototype.createStyleElement = function (t, e) {
        var i = document.getElementById(t);
        return this.isEmpty(i) && (((i = document.createElement("style")).id = t), (i.type = "text/css"), document.head.appendChild(i)), i.innerHTML != e && (i.innerHTML = e), i;
    }),
    (LadiPageScriptV2.prototype.createTmpElement = function (t, e, i, a, n) {
        var r = document.createElement(t);
        this.isEmpty(i) ||
        Object.keys(i).forEach(function (t) {
            r.setAttribute(t, i[t]);
        });
        var o = document.createElement("div");
        return o.appendChild(r), a ? (r.outerHTML = e) : (r.innerHTML = e), n ? o : o.firstChild;
    }),
    (LadiPageScriptV2.prototype.getCountdownTime = function (t, e) {
        var i = Math.floor(t / 1e3),
            a = i % 86400,
            n = a % 3600,
            r = Math.floor(i / 86400),
            o = Math.floor(a / 3600),
            s = Math.floor(n / 60),
            l = n % 60;
        (r = r < 0 ? 0 : r), (o = o < 0 ? 0 : o), (s = s < 0 ? 0 : s), (l = l < 0 ? 0 : l), (r = r < 10 ? "0" + r : r), (o = o < 10 ? "0" + o : o), (s = s < 10 ? "0" + s : s), (l = l < 10 ? "0" + l : l);
        var c = {};
        return (c[this.const.COUNTDOWN_ITEM_TYPE.day] = r), (c[this.const.COUNTDOWN_ITEM_TYPE.hour] = o), (c[this.const.COUNTDOWN_ITEM_TYPE.minute] = s), (c[this.const.COUNTDOWN_ITEM_TYPE.seconds] = l), this.isEmpty(e) ? c : c[e];
    }),
    (LadiPageScriptV2.prototype.getElementBoundingClientRect = function (t) {
        var e = t.getBoundingClientRect();
        return (this.isNull(e.x) || this.isNull(e.y)) && ((e.x = e.left), (e.y = e.top)), e;
    }),
    (LadiPageScriptV2.prototype.getElementViewBox = function (t) {
        var e = { x: 0, y: 0, width: 0, height: 0 },
            i = t.getAttribute("viewBox").split(" ");
        return (e.x = parseFloatLadiPage(i[0]) || 0), (e.y = parseFloatLadiPage(i[1]) || 0), (e.width = parseFloatLadiPage(i[2]) || 0), (e.height = parseFloatLadiPage(i[3]) || 0), e;
    }),
    (LadiPageScriptV2.prototype.getEventCursorData = function (t) {
        var e = this;
        return (
            ["pageX", "pageY", "screenX", "screenY"].forEach(function (i) {
                e.isNull(t[i]) &&
                (!e.isEmpty(t.touches) && t.touches.length > 0
                    ? (t[i] = t.touches[0][i])
                    : !e.isEmpty(t.targetTouches) && t.targetTouches.length > 0
                        ? (t[i] = t.targetTouches[0][i])
                        : !e.isEmpty(t.changedTouches) && t.changedTouches.length > 0 && (t[i] = t.changedTouches[0][i]));
            }),
                t
        );
    }),
    (LadiPageScriptV2.prototype.getElementAHref = function (t, e) {
        var i = document.createElement("a");
        return !e || t.toLowerCase().startsWith("http://") || t.toLowerCase().startsWith("https://") || t.startsWith("//") || (t = "http://" + t), (i.href = t), i;
    }),
    (LadiPageScriptV2.prototype.loadScript = function (t, e, i, a) {
        var n = document.createElement("script");
        ((n.type = "text/javascript"), this.isFunction(i) && ((a = i), (i = e), (e = null)), i && (n.async = !0), this.isObject(e)) &&
        Object.keys(e).forEach(function (t) {
            n.setAttribute(t, e[t]);
        });
        n.addEventListener("load", a), (n.src = t), document.head.appendChild(n);
    }),
    (LadiPageScriptV2.prototype.showLoadingBlur = function () {
        var t = document.getElementsByClassName("ladi-loading")[0];
        this.isEmpty(t) &&
        (((t = document.createElement("div")).className = "ladi-loading"),
            (t.innerHTML = "<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>"),
            document.body.appendChild(t));
    }),
    (LadiPageScriptV2.prototype.hideLoadingBlur = function () {
        var t = document.getElementsByClassName("ladi-loading")[0];
        this.isEmpty(t) || t.parentElement.removeChild(t);
    }),
    (LadiPageScriptV2.prototype.randomId = function () {
        var t = Date.now(),
            e = (window.performance && window.performance.now && 1e3 * window.performance.now()) || 0;
        return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function (i) {
            var a = 16 * Math.random();
            return t > 0 ? ((a = (t + a) % 16 | 0), (t = Math.floor(t / 16))) : ((a = (e + a) % 16 | 0), (e = Math.floor(e / 16))), ("x" === i ? a : (3 & a) | 8).toString(16);
        });
    }),
    (LadiPageScriptV2.prototype.run = function (t) {
        var e = this;
        (this.runtime.isIE = !!document.documentMode), (this.runtime.isIE = this.runtime.isIE ? this.runtime.isIE : !this.runtime.isIE && !!window.StyleMedia), (this.runtime.scrollEventPassive = null);
        try {
            var i = Object.defineProperty({}, "passive", {
                get: function () {
                    e.runtime.scrollEventPassive = { passive: !0 };
                },
            });
            window.addEventListener("testPassive", null, i), window.removeEventListener("testPassive", null, i);
        } catch (t) {}
        (this.runtime.isClient = t),
            (this.runtime.timenow = window.ladi("_timenow").get_cookie()),
            this.isEmpty(this.runtime.timenow) ? ((this.runtime.timenow = Date.now()), window.ladi("_timenow").set_cookie(this.runtime.timenow, 1)) : (this.runtime.timenow = parseFloatLadiPage(this.runtime.timenow) || 0);
        try {
            this.runtime.widthScrollBar = window.innerWidth - document.documentElement.clientWidth;
        } catch (t) {}
        if (t) {
            if (this.isString(this.runtime.eventData))
                try {
                    var a = decodeURIComponentLadiPage(this.runtime.eventData);
                    this.runtime.eventData = JSON.parse(a);
                } catch (t) {
                    String.prototype.decode = function () {
                        return this.valueOf()
                            .replaceAll(/&amp;/g, "&")
                            .replaceAll(/&gt;/g, ">")
                            .replaceAll(/&lt;/g, "<")
                            .replaceAll(/&quot;/g, '"');
                    };
                    var n = this.runtime.eventData.decode();
                    (n = n.replaceAll("\r\n", "").replaceAll("\n", "")), (this.runtime.eventData = JSON.parse(n));
                }
        } else
            (this.runtime.is_mobile_only = LadiPage.data.is_mobile_only),
                (this.runtime.eventData = LadiPage.generateEventDataAll(t)),
                (this.runtime.ladipage_id = LadiPage.publish.id),
                (this.runtime.publish_platform = LadiPage.publish.type),
                (this.runtime.bodyFontSize = 12),
                (this.runtime.store_id = LadiPage.getRootScope().getStoreId()),
                (this.runtime.time_zone = LadiPage.getRootScope().getStoreTimezone(!0)),
                (this.runtime.currency = LadiPage.getRootScope().getStoreCurrency());
        this.isNull(window.ladi_is_desktop)
            ? (this.runtime.isDesktop = t ? !/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(window.navigator.userAgent.toLowerCase()) : LadiPage.isDesktop())
            : (this.runtime.isDesktop = t ? window.ladi_is_desktop : LadiPage.isDesktop()),
            (this.runtime.device = this.runtime.isDesktop ? this.const.DESKTOP : this.const.MOBILE),
            (this.runtime.tmp.isFirstScroll = !0),
            (this.runtime.tmp.capture_form_data_last = {}),
            (this.runtime.tmp.runAfterLocation = []),
            (this.runtime.tmp.product_info = {}),
            (this.runtime.tmp.timeout_product_info = {}),
            (this.runtime.tmp.product_tag_info = {}),
            (this.runtime.tmp.timeout_product_tag_info = {}),
            (this.runtime.tmp.dataset_check_load = !1),
            (this.runtime.tmp.dataset_data = {}),
            (this.runtime.tmp.timeout_dataset_data = {}),
            (this.runtime.tmp.cart = []),
            (this.runtime.tmp.add_to_cart_discount = 0),
            (this.runtime.tmp.add_to_cart_fee_shipping = 0),
            (this.runtime.tmp.is_click_add_to_cart = !1),
            (this.runtime.tmp.is_click_check_price_discount = !1),
            (this.runtime.tmp.current_use_coupon = null),
            Object.keys(e.runtime.eventData).forEach(function (t) {
                Object.keys(e.runtime.eventData[t]).forEach(function (i) {
                    if (e.runtime.isDesktop) {
                        if (i.toLowerCase().startsWith(e.const.DESKTOP)) {
                            var a = e.const.MOBILE + i.substring(e.const.DESKTOP.length);
                            e.runtime.eventData[t][a] = e.runtime.eventData[t][i];
                        }
                    } else if (i.toLowerCase().startsWith(e.const.MOBILE)) {
                        var n = e.const.DESKTOP + i.substring(e.const.MOBILE.length);
                        e.runtime.eventData[t][n] = e.runtime.eventData[t][i];
                    }
                });
            }),
            this.changeTotalPriceCart();
        var r = window.ladi("LADI_DATA").get_cookie();
        try {
            (r = JSON.parse(Base64.decode(r || Base64.encode("{}")))),
                Object.keys(r).forEach(function (t) {
                    e.setDataReplaceStr(t, r[t]);
                });
        } catch (t) {}
        var o = function (t) {
                var i = e.copy(t);
                return (
                    e.isObject(i) &&
                    e.runtime.list_set_value_name_country.forEach(function (t) {
                        if (!e.isEmpty(i[t])) {
                            var a = i[t].split(":");
                            a.length > 1 && a.shift(), (i[t] = a.join(":"));
                        }
                    }),
                        i
                );
            },
            s = e.getURLSearchParams(null, null, !0),
            l = e.getURLSearchParams(window.location.search, null, !0),
            c = o(s),
            d = Object.keys(c),
            p = "";
        d.forEach(function (t) {
            if (t != e.const.TRACKING_NAME && t != e.const.ACCESS_KEY_NAME) {
                if ((e.setDataReplaceStr(t, c[t]), "products" == t && e.isString(c[t]))) {
                    var i = c[t].split("|");
                    2 == i.length && -1 == d.indexOf("product_id") && e.setDataReplaceStr("product_value", i[0]), 2 == i.length && -1 == d.indexOf("product_name") && e.setDataReplaceStr("product_name", i[1]);
                }
                (e.isArray(l[t]) ? l[t] : [l[t]]).forEach(function (i) {
                    e.isEmpty(p) ? (p += "?") : (p += "&"), (p += t + "=" + encodeURIComponent(i));
                });
            }
        }),
            window.ladi(this.const.TRACKING_NAME).delete_cookie("/"),
            this.historyReplaceState(window.location.pathname + p + window.location.hash);
        var u = l[this.const.REF_NAME];
        e.isEmpty(u) ? (u = window.ladi("ladi_ref").get_cookie()) : window.ladi("ladi_ref").set_cookie(u, 90, "/", window.location.host);
        var m = Object.keys(this.runtime.eventData),
            _ = window.ladi("LADI_CLIENT_ID").get_cookie(),
            y = parseFloatLadiPage(window.ladi("LADI_PAGE_VIEW").get_cookie()) || 0,
            g = parseFloatLadiPage(window.ladi("LADI_FORM_SUBMIT").get_cookie()) || 0,
            f = window.ladi("LADI_FUNNEL_NEXT_URL").get_cookie(),
            h = window.ladi("LADI_CAMP_ID").get_cookie(),
            v = window.ladi("LADI_CAMP_NAME").get_cookie(),
            E = window.ladi("LADI_CAMP_TYPE").get_cookie(),
            P = window.ladi("LADI_CAMP_TARGET_URL").get_cookie(),
            A = window.ladi("LADI_CAMP_ORIGIN_URL").get_cookie(),
            L = parseFloatLadiPage(window.ladi("LADI_CAMP_PAGE_VIEW").get_cookie()) || 0,
            b = parseFloatLadiPage(window.ladi("LADI_CAMP_FORM_SUBMIT").get_cookie()) || 0,
            w = window.ladi("LADI_CAMP_CONFIG").get_cookie(),
            S = [],
            T = function (t, i, a) {
                if ("FormSubmit" == t && e.isEmpty(_)) e.isFunction(a) && a();
                else
                    e.runTimeout(function () {
                        T(t, i, a);
                    }, 100);
            },
            O = function (t, i, a, n) {
                var r = null,
                    o = null,
                    s = null,
                    l = 0;
                if (e.isEmpty(i) || "POPUP_PRODUCT" != i.id)
                    if (e.isEmpty(i) || "POPUP_BLOG" != i.id) e.isFunction(n) && n();
                    else {
                        if (
                            ((r = e.generateVariantProduct(a, !1, null, null, null, null, !0, !0, function (e) {
                                O(t, i, a, n);
                            })),
                            !e.isObject(r) || !e.isObject(r.product) || !e.isObject(r.store_info))
                        )
                            return;
                        var c = function () {
                            var t,
                                a,
                                d = !0;
                            if (
                                (Object.keys(r.product).forEach(function (t) {
                                    if (d && e.isString(r.product[t]) && r.product[t].startsWith("ladisources/global/dataset/") && r.product[t].endsWith(".html")) {
                                        var i = r.product[t].replaceAll("ladisources/global/dataset/", e.const.API_DATASET_BLOG);
                                        (d = !1),
                                            e.showLoadingBlur(),
                                            e.sendRequest("GET", i, null, !0, null, function (e, i, a) {
                                                a.readyState == XMLHttpRequest.DONE && ((r.product[t] = e), c());
                                            });
                                    }
                                }),
                                    d)
                            ) {
                                e.hideLoadingBlur(), i.classList.add("opacity-0"), (o = document.querySelectorAll("#" + i.id + " .ladi-element"));
                                var p = null,
                                    u = function (t) {
                                        e.removeTimeout(p);
                                        var a = function (t, i) {
                                            var a = e.findAncestor(t.parentElement, "ladi-element");
                                            e.updateHeightElement(!0, t, a, i, t.clientHeight);
                                        };
                                        p = e.runTimeout(
                                            function () {
                                                e.showParentVisibility(o[0], function () {
                                                    for (l = 0; l < o.length; l++) {
                                                        if (o[l].querySelectorAll(".ladi-headline, .ladi-paragraph").length > 0 && o[l].hasAttribute("data-height")) {
                                                            var t = parseFloatLadiPage(o[l].getAttribute("data-height")) || 0;
                                                            t != o[l].clientHeight && (o[l].setAttribute("data-height", o[l].clientHeight), a(o[l], t));
                                                        }
                                                    }
                                                }),
                                                    e.runShowPopup(!0, i.id, null, null, !0);
                                            },
                                            e.isEmpty(t) ? 0 : 100
                                        );
                                    };
                                e.showParentVisibility(o[0], function () {
                                    for (l = 0; l < o.length; l++) {
                                        o[l].querySelectorAll(".ladi-headline, .ladi-paragraph").length > 0 && !o[l].hasAttribute("data-height") && o[l].setAttribute("data-height", o[l].clientHeight);
                                    }
                                });
                                var m = function (t) {
                                    (!e.runtime.isDesktop || (e.isEmpty(t.getAttribute("height")) && e.isEmpty(t.style.getPropertyValue("height")))) && (t.addEventListener("load", u), t.addEventListener("error", u));
                                };
                                for (l = 0; l < o.length; l++)
                                    e.runtime.tmp.runLadiSaleProductKey(o[l].id, !1, !1, s, r, !0, null, !0),
                                        (t = o[l]),
                                        void 0,
                                        (a = e.runtime.eventData[t.id]),
                                    e.isFunction(e.runtime.tmp.runOptionAction) && e.isObject(a) && e.runtime.tmp.runOptionAction(t, t.id, a.type, a, r);
                                for (l = 0; l < o.length; l++) for (var _ = o[l].querySelectorAll(".ladi-headline img, .ladi-paragraph img"), y = 0; y < _.length; y++) m(_[y]);
                                e.isFunction(n) && n(),
                                    u(),
                                    e.runTimeout(function () {
                                        i.classList.remove("opacity-0");
                                    }, 150);
                            }
                        };
                        c();
                    }
                else {
                    if (
                        ((r = e.generateVariantProduct(a, !1, null, null, null, null, !0, !0, function (e) {
                            O(t, i, a, n);
                        })),
                        !e.isObject(r) || !e.isObject(r.store_info) || !e.isObject(r.product) || !e.isArray(r.product.variants) || r.product.variants.length <= 0)
                    )
                        return;
                    if (e.isEmpty(a["option.product_variant_id"])) {
                        s = r.product.variants[0];
                        var d = e.findAncestor(t, "ladi-collection-item"),
                            p = null;
                        if (e.isEmpty(d)) {
                            for (var u = document.querySelectorAll('[data-variant="true"] select[data-store-id="' + r.store_info.id + '"][data-product-id="' + r.product.product_id + '"]'), m = 0; m < u.length; m++)
                                if (e.isEmpty(e.findAncestor(u[m], "ladi-collection-item"))) {
                                    p = u[m];
                                    break;
                                }
                        } else p = d.querySelector('[data-variant="true"]');
                        if (!e.isEmpty(p)) {
                            p = e.findAncestor(p, "ladi-element");
                            var _ = e.getProductVariantId(p, r.product);
                            e.isEmpty(_) ||
                            (s = r.product.variants.find(function (t) {
                                return t.product_variant_id == _;
                            }));
                        }
                    } else
                        s = r.product.variants.find(function (t) {
                            return t.product_variant_id == a["option.product_variant_id"];
                        });
                    if (e.isEmpty(s)) return;
                    var y = function (t) {
                        var i = e.runtime.eventData[t.id];
                        e.isFunction(e.runtime.tmp.runOptionAction) && e.isObject(i) && e.runtime.tmp.runOptionAction(t, t.id, i.type, i, r);
                    };
                    for (o = document.querySelectorAll("#" + i.id + " .ladi-element"), l = 0; l < o.length; l++) e.runtime.tmp.runLadiSaleProductKey(o[l].id, !1, !1, s, r), y(o[l]);
                    e.isFunction(n) && n();
                }
            },
            C = function (t, i) {
                var a = e.runtime.eventData[t.id],
                    n = i.findIndex(function (t) {
                        return t.action_type == e.const.ACTION_TYPE.complete && (t.type == e.const.DATA_ACTION_TYPE.popup || t.type == e.const.DATA_ACTION_TYPE.popup_cart || t.type == e.const.DATA_ACTION_TYPE.popup_checkout);
                    });
                (n = -1 != n),
                    i.forEach(function (i) {
                        if (i.action_type == e.const.ACTION_TYPE.complete) {
                            var r = null;
                            if (i.type == e.const.DATA_ACTION_TYPE.section) {
                                var o = 0,
                                    s = document.getElementById(i.action);
                                if (!e.isEmpty(s)) {
                                    if (n) return void window.ladi(s.id).scroll(!1, !0);
                                    if (((r = e.findAncestor(t, "ladi-popup")), !e.isEmpty(r))) {
                                        var l = e.findAncestor(r, "ladi-element");
                                        l.hasAttribute("data-popup-backdrop") && (window.ladi(l.id).hide(), (o = 100));
                                    }
                                    e.runTimeout(function () {
                                        window.ladi(s.id).scroll();
                                    }, o);
                                }
                            }
                            if (
                                (i.type == e.const.DATA_ACTION_TYPE.popup &&
                                ((r = document.getElementById(i.action)),
                                e.isEmpty(r) ||
                                O(t, r, a, function () {
                                    window.ladi(i.action).show();
                                })),
                                i.type == e.const.DATA_ACTION_TYPE.hidden_show &&
                                (e.isArray(i.hidden_ids) &&
                                i.hidden_ids.forEach(function (t) {
                                    window.ladi(t).hide();
                                }),
                                e.isArray(i.show_ids) &&
                                i.show_ids.forEach(function (t) {
                                    window.ladi(t).show();
                                })),
                                i.type == e.const.DATA_ACTION_TYPE.change_index)
                            ) {
                                var c = window.ladi(i.action);
                                e.isFunction(c[i.change_index_type]) ? c[i.change_index_type]() : c.index(i.change_index_number || 1);
                            }
                        }
                    });
            },
            N = function (t, i, a, n, r) {
                if (((t = t || document.getElementById(i)), !e.isEmpty(t))) {
                    var o = n["option.is_submit_form"],
                        s = n["option.data_submit_form_id"];
                    if (!n["option.action_funnel"] || e.isEmpty(f))
                        if (!o || e.isEmpty(s)) {
                            var l = n["option.data_event"];
                            if (!e.isArray(l) && ((l = []), e.isObject(n["option.data_action"]))) {
                                var c = e.copy(n["option.data_action"]);
                                (c.action_type = e.const.ACTION_TYPE.action), l.push(c);
                            }
                            var d = function (i, a) {
                                    var n = parseFloatLadiPage(t.getAttribute("data-timeout-id-copied")) || 0;
                                    e.removeTimeout(n);
                                    var r = "hint-{0}-middle-s-small-hint-anim-d-short",
                                        o = !0;
                                    e.getElementBoundingClientRect(t).y < 35 && (o = !1),
                                        o ? (t.classList.add(r.format("top")), t.classList.remove(r.format("bottom"))) : (t.classList.remove(r.format("top")), t.classList.add(r.format("bottom"))),
                                        i ? (a ? t.setAttribute("data-hint", e.const.LANG.PASTED) : t.setAttribute("data-hint", e.const.LANG.COPIED)) : t.setAttribute("data-hint", e.const.LANG.FALIED),
                                        (n = e.runTimeout(function () {
                                            t.classList.remove(r.format("top")), t.classList.remove(r.format("bottom")), t.removeAttribute("data-hint"), t.removeAttribute("data-timeout-id-copied");
                                        }, 1e3)),
                                        t.setAttribute("data-timeout-id-copied", n);
                                },
                                p = l.findIndex(function (t) {
                                    return t.action_type == e.const.ACTION_TYPE.action && (t.type == e.const.DATA_ACTION_TYPE.popup || t.type == e.const.DATA_ACTION_TYPE.popup_cart || t.type == e.const.DATA_ACTION_TYPE.popup_checkout);
                                });
                            (p = -1 != p),
                                l.forEach(function (a) {
                                    if (a.action_type == e.const.ACTION_TYPE.action) {
                                        if (a.type == e.const.DATA_ACTION_TYPE.link) {
                                            var o = null;
                                            t.addEventListener("click", function (i) {
                                                "false" != t.getAttribute("data-click") &&
                                                "true" == t.getAttribute("data-action") &&
                                                ((o = a.action),
                                                e.isEmpty(a.action_mapping) || (o = a.action_mapping),
                                                e.isEmpty(o) || ((o = e.getLinkUTMRedirect(o, null)), (o = e.convertDataReplaceStr(o, !0)), window.ladi(o).open_url(a.target, a.nofollow)));
                                            });
                                            var s = function () {
                                                if ((e.isNull(r) && (r = e.generateVariantProduct(n, !1, null, null, null, null, !0, !0, s)), e.isObject(r) && e.isObject(r.store_info) && e.isObject(r.product))) {
                                                    o = a.action;
                                                    var i = a.link_mapping;
                                                    e.isEmpty(i) && (i = a.link_mapping_custom),
                                                    e.isEmpty(i) || ((a.action_mapping = r.product[i]), e.isEmpty(a.action_mapping) || (o = a.action_mapping)),
                                                        e.isEmpty(o)
                                                            ? (t.removeAttribute("data-replace-href"), t.removeAttribute("href"))
                                                            : ((o = e.getLinkUTMRedirect(o, null)), t.setAttribute("data-replace-href", o), (t.href = e.convertDataReplaceStr(o, !0)));
                                                }
                                            };
                                            s();
                                        }
                                        a.type == e.const.DATA_ACTION_TYPE.email &&
                                        t.addEventListener("click", function (i) {
                                            "false" != t.getAttribute("data-click") && ("true" != t.getAttribute("data-action") || e.isEmpty(a.action) || window.ladi("mailto:" + a.action).open_url());
                                        }),
                                        a.type == e.const.DATA_ACTION_TYPE.phone &&
                                        t.addEventListener("click", function (i) {
                                            "false" != t.getAttribute("data-click") && ("true" != t.getAttribute("data-action") || e.isEmpty(a.action) || window.ladi("tel:" + a.action).open_url());
                                        }),
                                        a.type == e.const.DATA_ACTION_TYPE.collapse &&
                                        t.addEventListener("click", function (i) {
                                            if ("false" != t.getAttribute("data-click")) {
                                                var n = document.getElementById(a.action);
                                                e.isEmpty(n) || window.ladi(a.action).collapse();
                                            }
                                        }),
                                        a.type == e.const.DATA_ACTION_TYPE.section &&
                                        t.addEventListener("click", function (i) {
                                            if ("false" != t.getAttribute("data-click")) {
                                                var n = 0,
                                                    r = document.getElementById(a.action);
                                                if (!e.isEmpty(r)) {
                                                    if (p) return void window.ladi(r.id).scroll(!1, !0);
                                                    var o = e.findAncestor(t, "ladi-popup");
                                                    if (!e.isEmpty(o)) {
                                                        var s = e.findAncestor(o, "ladi-element");
                                                        s.hasAttribute("data-popup-backdrop") && (window.ladi(s.id).hide(), (n = 100));
                                                    }
                                                    e.runTimeout(function () {
                                                        window.ladi(r.id).scroll();
                                                    }, n);
                                                }
                                            }
                                        }),
                                        a.type == e.const.DATA_ACTION_TYPE.popup &&
                                        t.addEventListener("click", function (i) {
                                            if ("false" != t.getAttribute("data-click")) {
                                                var r = document.getElementById(a.action);
                                                e.isEmpty(r) ||
                                                O(t, r, n, function () {
                                                    window.ladi(a.action).show();
                                                });
                                            }
                                        }),
                                        a.type == e.const.DATA_ACTION_TYPE.hidden_show &&
                                        t.addEventListener("click", function (i) {
                                            "false" != t.getAttribute("data-click") &&
                                            (e.isArray(a.hidden_ids) &&
                                            a.hidden_ids.forEach(function (t) {
                                                window.ladi(t).hide();
                                            }),
                                            e.isArray(a.show_ids) &&
                                            a.show_ids.forEach(function (t) {
                                                window.ladi(t).show();
                                            }));
                                        }),
                                        a.type == e.const.DATA_ACTION_TYPE.change_index &&
                                        t.addEventListener("click", function (i) {
                                            if ("false" != t.getAttribute("data-click")) {
                                                var n = window.ladi(a.action);
                                                e.isEmpty(n) || (e.isFunction(n[a.change_index_type]) ? n[a.change_index_type]() : n.index(a.change_index_number || 1));
                                            }
                                        }),
                                        a.type == e.const.DATA_ACTION_TYPE.set_value &&
                                        t.addEventListener("click", function (i) {
                                            if ("false" != t.getAttribute("data-click")) {
                                                var n = window.ladi(a.action);
                                                e.isEmpty(n) ||
                                                (a.is_clipboard
                                                    ? e.getTextClipboard(a.str, function (t, e) {
                                                        n.value(t ? e : a.str), d(t, !0);
                                                    })
                                                    : n.value(a.str));
                                            }
                                        }),
                                        a.type == e.const.DATA_ACTION_TYPE.copy_clipboard &&
                                        t.addEventListener("click", function (i) {
                                            if ("false" != t.getAttribute("data-click")) {
                                                var n = null,
                                                    r = window.ladi(a.action);
                                                e.isEmpty(r) || (n = r.value(null, null, { only_text: !0 })), (n = e.isEmpty(n) ? a.str : n), e.isEmpty(n) || e.copyTextClipboard(n, d);
                                            }
                                        });
                                        var l = null;
                                        if (
                                            (a.type == e.const.DATA_ACTION_TYPE.lightbox
                                                ? (l = a.lightbox_type)
                                                : "lightbox_image" == a.type
                                                    ? (l = e.const.DATA_ACTION_LIGHTBOX_TYPE.image)
                                                    : "lightbox_video" == a.type
                                                        ? (l = e.const.DATA_ACTION_LIGHTBOX_TYPE.video)
                                                        : "lightbox_iframe" == a.type && (l = e.const.DATA_ACTION_LIGHTBOX_TYPE.iframe),
                                            l == e.const.DATA_ACTION_LIGHTBOX_TYPE.image &&
                                            t.addEventListener("click", function (e) {
                                                "false" != t.getAttribute("data-click") && lightbox_image(a.image_url);
                                            }),
                                            l == e.const.DATA_ACTION_LIGHTBOX_TYPE.video)
                                        ) {
                                            var c = document.querySelectorAll("#" + i + ".preload").length > 0;
                                            c && lightbox_video(a.video_url, a.video_type, c),
                                                t.addEventListener("click", function (e) {
                                                    "false" != t.getAttribute("data-click") && lightbox_video(a.video_url, a.video_type, !1);
                                                });
                                        }
                                        l == e.const.DATA_ACTION_LIGHTBOX_TYPE.iframe &&
                                        t.addEventListener("click", function (e) {
                                            "false" != t.getAttribute("data-click") && lightbox_iframe(a.iframe_url);
                                        }),
                                        a.type == e.const.DATA_ACTION_TYPE.popup_cart &&
                                        t.addEventListener("click", function (i) {
                                            if ("false" != t.getAttribute("data-click")) {
                                                var a = document.getElementById("POPUP_CART");
                                                e.isEmpty(a) || window.ladi(a.id).show();
                                            }
                                        }),
                                        a.type == e.const.DATA_ACTION_TYPE.popup_checkout &&
                                        t.addEventListener("click", function (i) {
                                            "false" != t.getAttribute("data-click") && (e.runtime.shopping_third_party ? e.getThirdPartyCheckoutUrl(!0) : window.ladi("POPUP_CHECKOUT").show());
                                        });
                                    }
                                }),
                                e.runEventTracking(i, !1, null, t);
                        } else
                            t.addEventListener("click", function (e) {
                                "false" != t.getAttribute("data-click") && window.ladi(s).submit();
                            });
                    else
                        t.addEventListener("click", function (a) {
                            if ("false" != t.getAttribute("data-click")) {
                                a.preventDefault();
                                var n = f;
                                (n = e.getLinkUTMRedirect(n, null)), (n = e.convertDataReplaceStr(n, !0)), window.ladi(n).open_url(), e.runEventTracking(i, !1);
                            }
                        });
                }
            },
            I = function (t, i, a, n) {
                if (((t = t || document.getElementById(i)), !e.isEmpty(t))) {
                    if (!e.isArray(n)) {
                        var r = e.copy(n);
                        (n = []), e.isObject(r) && ((r.action_type = e.const.ACTION_TYPE.hover), n.push(r));
                    }
                    n.forEach(function (i) {
                        i.action_type == e.const.ACTION_TYPE.hover &&
                        (i.type == e.const.DATA_ACTION_TYPE.hidden_show &&
                        (t.addEventListener("mouseenter", function (t) {
                            e.isArray(i.hidden_ids) &&
                            i.hidden_ids.forEach(function (t) {
                                window.ladi(t).hide();
                            }),
                            e.isArray(i.show_ids) &&
                            i.show_ids.forEach(function (t) {
                                window.ladi(t).show();
                            });
                        }),
                            t.addEventListener("mouseleave", function (t) {
                                e.isArray(i.hidden_ids) &&
                                i.hidden_ids.forEach(function (t) {
                                    window.ladi(t).show();
                                }),
                                e.isArray(i.show_ids) &&
                                i.show_ids.forEach(function (t) {
                                    window.ladi(t).hide();
                                });
                            })),
                        i.type == e.const.DATA_ACTION_TYPE.change_index &&
                        t.addEventListener("mouseenter", function (t) {
                            var a = window.ladi(i.action);
                            e.isFunction(a[i.change_index_type]) ? a[i.change_index_type]() : a.index(i.change_index_number || 1);
                        }));
                    });
                }
            },
            k = function (t) {
                var i = document.getElementById(t);
                if (!e.isEmpty(i) && t != e.runtime.builder_section_popup_id && t != e.runtime.builder_section_background_id) {
                    var a = i.classList.contains("ladi-section") ? "section" : null;
                    if (e.runtime.is_popupx && "section" == a) {
                        var n = document.createElement("div");
                        (n.className = "ladi-section-close"),
                            n.addEventListener("click", function (e) {
                                e.stopPropagation(), window.ladi(t).hide();
                            }),
                            i.appendChild(n);
                    }
                }
            },
            x = function (t, i, a, n, r, o, s, l) {
                "countdown" != a ||
                e.isEmpty(n) ||
                ((i = i || document.getElementById(t)),
                e.isEmpty(i) ||
                (i.setAttribute("data-type", n),
                n != e.const.COUNTDOWN_TYPE.countdown || e.isEmpty(r) || i.setAttribute("data-minute", r),
                n != e.const.COUNTDOWN_TYPE.endtime || e.isEmpty(l) || i.setAttribute("data-endtime", l),
                n != e.const.COUNTDOWN_TYPE.daily || e.isEmpty(o) || e.isEmpty(s) || (i.setAttribute("data-daily-start", o), i.setAttribute("data-daily-end", s))));
            },
            D = function (t, i, a, n) {
                "countdown_item" != a || e.isEmpty(n) || ((i = i || document.getElementById(t)), e.isEmpty(i) || i.setAttribute("data-item-type", n));
            },
            R = function () {
                m.forEach(function (t) {
                    var i = document.getElementById(t);
                    if (!e.isEmpty(i) && "true" != i.getAttribute("data-action")) {
                        var a = e.runtime.eventData[t],
                            n = a["option.data_event"];
                        if (!e.isArray(n) && ((n = []), e.isObject(a["option.data_action"]))) {
                            var r = e.copy(a["option.data_action"]);
                            (r.action_type = e.const.ACTION_TYPE.action), n.push(r);
                        }
                        !(function (t, i) {
                            i.forEach(function (i) {
                                if (i.action_type == e.const.ACTION_TYPE.action && i.type == e.const.DATA_ACTION_TYPE.link)
                                    if (e.isEmpty(t.getAttribute("href"))) t.removeAttribute("href");
                                    else {
                                        var a = e.getLinkUTMRedirect(t.href, null);
                                        t.setAttribute("data-replace-href", a), (t.href = e.convertDataReplaceStr(a, !0));
                                    }
                            });
                        })(i, n);
                    }
                });
                for (var t = document.querySelectorAll(".ladi-headline a[href], .ladi-paragraph a[href], .ladi-list-paragraph a[href]"), i = 0; i < t.length; i++)
                    if (e.isEmpty(t[i].getAttribute("href"))) t[i].removeAttribute("href");
                    else {
                        var a = e.getLinkUTMRedirect(t[i].href, null);
                        t[i].setAttribute("data-replace-href", a), (t[i].href = e.convertDataReplaceStr(a, !0));
                    }
            },
            F = function () {
                if (t) {
                    var i = function () {
                            if (((e.runtime.ladipage_powered_by_classname = e.randomString(e.randomInt(6, 32))), e.runtime.isClient)) {
                                var t = document.createElement("div");
                                document.body.insertBefore(t, document.body.childNodes[e.randomInt(0, document.body.childNodes.length)]), (t.className = e.runtime.ladipage_powered_by_classname);
                                var i =
                                        "." +
                                        e.runtime.ladipage_powered_by_classname +
                                        ' {width: 140px; height: 30px; position: fixed; bottom: -40px; left: 10px; z-index: 10000000000; background: url("' +
                                        e.const.POWERED_BY_IMAGE +
                                        '") no-repeat center #fafafa; background-size: 90% 70%; border-radius: 4px 4px 0 0; display: block; animation: ' +
                                        e.runtime.ladipage_powered_by_classname +
                                        " 10s;} @keyframes " +
                                        e.runtime.ladipage_powered_by_classname +
                                        " {0% {bottom: -40px;} 10% {bottom: 0;} 90% {bottom: 0;} 100% {bottom: -40px;}}",
                                    a = document.createElement("style");
                                (a.type = "text/css"),
                                    document.head.insertBefore(a, document.head.childNodes[e.randomInt(0, document.head.childNodes.length)]),
                                    (a.innerHTML = i),
                                    e.runTimeout(function () {
                                        e.isEmpty(t) || t.parentElement.removeChild(t), e.isEmpty(a) || a.parentElement.removeChild(a);
                                    }, 1e4);
                            }
                        },
                        a = !1,
                        n = e.isArray(e.runtime.DOMAIN_FREE) ? e.runtime.DOMAIN_FREE : [],
                        r = window.location.href;
                    ["/", ".", "/"].forEach(function (t) {
                        for (; r.endsWith(t); ) r = r.substr(0, r.length - t.length);
                    });
                    var o = e.getElementAHref(r).host.toLowerCase();
                    n.forEach(function (t) {
                        a || (a = o.endsWith(t.toLowerCase()));
                    }),
                    a && e.runTimeout(i, 3e3),
                        T("PageView", {}, function (t, n) {
                            if ((-1 != t || a || e.runTimeout(i, 3e3), 200 == t)) {
                                var r = JSON.parse(n),
                                    o = !1,
                                    s = null;
                                e.isObject(r.data) ? ((o = 1 == r.data.verified_domain), (s = r.data.google_captcha)) : (o = 1 == r.data),
                                a || o || e.runTimeout(i, 3e3),
                                e.isObject(s) &&
                                ((l = s.site_key),
                                    (c = s.enterprise),
                                e.isEmpty(l) ||
                                ((e.runtime.tmp.google_captcha = { api_key: l, enterprise: c }),
                                    c ? e.loadScript("//www.google.com/recaptcha/enterprise.js?render=" + l) : e.loadScript("//www.google.com/recaptcha/api.js?render=" + l)));
                            }
                            var l, c;
                        });
                }
            },
            q = function (t, i, a, n) {
                if (e.isEmpty(e.runtime.current_element_mouse_down_gallery_view) && e.isEmpty(e.runtime.current_element_mouse_down_gallery_control)) {
                    var r = t.getAttribute("data-runtime-id");
                    if (e.isEmpty(e.runtime.timeout_gallery[r]) && (!e.runtime.tmp.gallery_playing_video || !i)) {
                        var o = t.getElementsByClassName("ladi-gallery-view-item"),
                            s = t.getElementsByClassName("ladi-gallery-control-item");
                        if (0 != o.length && 0 != o.length) {
                            var l = t.getAttribute("data-is-next") || "true";
                            l = "true" == l.toLowerCase();
                            var c = parseFloatLadiPage(t.getAttribute("data-current")) || 0,
                                d = parseFloatLadiPage(t.getAttribute("data-max-item")) || 0;
                            i ? (l ? (c >= d - 1 ? ((c = d - 2), (l = !1)) : c++) : c <= 0 ? ((c = 1), (l = !0)) : c--) : l ? c++ : c--,
                            c < 0 && (c = 0),
                            c >= d - 1 && (c = d - 1),
                            e.isEmpty(a) && (a = l ? "next" : "prev"),
                            e.isEmpty(n) && (n = l ? "left" : "right"),
                            e.runtime.tmp.gallery_playing_video && !o[c].classList.contains("selected") && e.pauseAllVideo(),
                                o[c].classList.add(a);
                            var p = t.querySelectorAll(".ladi-gallery-view-item.selected")[0];
                            e.isEmpty(p) || p.classList.add(n);
                            var u = 1e3 * (parseFloatLadiPage(getComputedStyle(o[c]).transitionDuration) || 0);
                            e.runtime.timeout_gallery[r] = e.runTimeout(function () {
                                o[c].classList.add(n),
                                    (e.runtime.timeout_gallery[r] = e.runTimeout(function () {
                                        for (var t = 0; t < o.length; t++) t == c ? o[t].classList.add("selected") : o[t].classList.remove("selected"), o[t].style.removeProperty("left"), o[t].classList.remove(a), o[t].classList.remove(n);
                                        delete e.runtime.timeout_gallery[r];
                                    }, u - 5));
                            }, 5);
                            for (var m = 0; m < s.length; m++) (parseFloatLadiPage(s[m].getAttribute("data-index")) || 0) == c ? s[m].classList.add("selected") : s[m].classList.remove("selected");
                            var _ = e.getElementBoundingClientRect(t),
                                y = e.getElementBoundingClientRect(t.getElementsByClassName("ladi-gallery-control-item")[c]);
                            if (
                                (t.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.remove("opacity-0"),
                                    t.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.remove("opacity-0"),
                                t.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-top") || t.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-bottom"))
                            ) {
                                var g = parseFloatLadiPage(getComputedStyle(t.getElementsByClassName("ladi-gallery-control")[0]).width) || 0,
                                    f = parseFloatLadiPage(getComputedStyle(t.getElementsByClassName("ladi-gallery-control-item")[c]).width) || 0,
                                    h = y.x - _.x - (g - f) / 2;
                                h = -(h -= parseFloatLadiPage(t.getElementsByClassName("ladi-gallery-control-box")[0].style.getPropertyValue("left")) || 0) > 0 ? 0 : -h;
                                var v = parseFloatLadiPage(getComputedStyle(t.getElementsByClassName("ladi-gallery-control-box")[0]).width) || 0;
                                h < (v = (v = -(v -= parseFloatLadiPage(getComputedStyle(t.getElementsByClassName("ladi-gallery-control")[0]).width) || 0)) > 0 ? 0 : v) && (h = v),
                                    t.getElementsByClassName("ladi-gallery-control-box")[0].style.setProperty("left", h + "px"),
                                h >= 0 && t.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.add("opacity-0"),
                                h <= v && t.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.add("opacity-0");
                            } else {
                                var E = parseFloatLadiPage(getComputedStyle(t.getElementsByClassName("ladi-gallery-control")[0]).height) || 0,
                                    P = parseFloatLadiPage(getComputedStyle(t.getElementsByClassName("ladi-gallery-control-item")[c]).height) || 0,
                                    A = y.y - _.y - (E - P) / 2;
                                A = -(A -= parseFloatLadiPage(t.getElementsByClassName("ladi-gallery-control-box")[0].style.getPropertyValue("top")) || 0) > 0 ? 0 : -A;
                                var L = parseFloatLadiPage(getComputedStyle(t.getElementsByClassName("ladi-gallery-control-box")[0]).height) || 0;
                                A < (L = (L = -(L -= parseFloatLadiPage(getComputedStyle(t.getElementsByClassName("ladi-gallery-control")[0]).height) || 0)) > 0 ? 0 : L) && (A = L),
                                    t.getElementsByClassName("ladi-gallery-control-box")[0].style.setProperty("top", A + "px"),
                                A >= 0 && t.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.add("opacity-0"),
                                A <= L && t.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.add("opacity-0");
                            }
                            t.setAttribute("data-is-next", l),
                                t.setAttribute("data-current", c),
                                t.getElementsByClassName("ladi-gallery-view-arrow-left")[0].classList.remove("opacity-0"),
                                t.getElementsByClassName("ladi-gallery-view-arrow-right")[0].classList.remove("opacity-0"),
                            c <= 0 && t.getElementsByClassName("ladi-gallery-view-arrow-left")[0].classList.add("opacity-0"),
                            c >= d - 1 && t.getElementsByClassName("ladi-gallery-view-arrow-right")[0].classList.add("opacity-0"),
                            (t.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-left") || t.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-right")) && e.reloadLazyload(!1),
                            !i && t.hasAttribute("data-loaded") && t.setAttribute("data-stop", !0);
                        }
                    }
                }
            },
            M = function (t, i, a) {
                var n = i.getAttribute("data-video-type"),
                    r = i.getAttribute("data-video-url"),
                    o = i.getAttribute("data-index"),
                    s = t.getAttribute("data-runtime-id") + "_" + o + "_player",
                    l = document.getElementById(s);
                a || (e.pauseAllVideo(), (e.runtime.tmp.gallery_playing_video = !0)),
                    e.isEmpty(l)
                        ? (n == e.const.VIDEO_TYPE.youtube &&
                        ((l = document.createElement("iframe")),
                            i.parentElement.insertBefore(l, i.nextSibling),
                            (l.outerHTML =
                                '<iframe id="' +
                                s +
                                '" class="iframe-video-preload" data-video-type="' +
                                n +
                                '" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
                            e.runEventPlayVideo(s, n, r, !1, !1, !0, a, !1, !0)),
                        n == e.const.VIDEO_TYPE.direct &&
                        ((l = document.createElement("video")),
                            i.parentElement.insertBefore(l, i.nextSibling),
                            (l.outerHTML = '<video id="' + s + '" class="iframe-video-preload" data-video-type="' + n + '" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; object-fit: cover;"></video>'),
                            e.runEventPlayVideo(s, n, r, !1, !1, !0, a, !1, !0)))
                        : e.runEventReplayVideo(s, n, !0);
            },
            B = function (t, i, a, n) {
                if ("gallery" == n && (a || (i = document.getElementById(t)), !e.isEmpty(i))) {
                    var r = i.getElementsByClassName("ladi-gallery-control-item").length;
                    i.setAttribute("data-max-item", r), i.setAttribute("data-runtime-id", e.randomString(12));
                    var o = function (t) {
                            t.stopPropagation(), M(i, t.target, !1);
                        },
                        s = i.classList.contains("preload");
                    if (r > 0) {
                        for (var l = 0; l < r; l++) {
                            var c = i.getElementsByClassName("ladi-gallery-view-item")[l];
                            e.isEmpty(c) || (s && M(i, c, s), c.classList.contains("play-video") && c.addEventListener("click", o));
                        }
                        i.setAttribute("data-current", 0), i.setAttribute("data-is-next", !0);
                    }
                    for (var d = i.getElementsByClassName("ladi-gallery-view-arrow"), p = 0; p < d.length; p++) r <= 1 ? d[p].classList.add("ladi-hidden") : d[p].classList.remove("ladi-hidden");
                }
            },
            Y = function (t, i) {
                t.stopPropagation();
                var a = e.runtime.eventData[i.id],
                    n = a[e.runtime.device + ".option.gallery_control.autoplay"],
                    r = a[e.runtime.device + ".option.gallery_control.autoplay_time"],
                    o = 0;
                n && !e.isEmpty(r) && (o = r);
                var s = parseFloatLadiPage(t.target.getAttribute("data-index")) || 0,
                    l = null,
                    c = null;
                (parseFloatLadiPage(i.getAttribute("data-current")) || 0) > s ? ((l = "prev"), (c = "right")) : ((l = "next"), (c = "left"));
                var d = i.getAttribute("data-is-next") || "true";
                (d = "true" == d.toLowerCase()) ? s-- : s++, i.setAttribute("data-current", s), i.setAttribute("data-next-time", Date.now() + 1e3 * o), q(i, !1, l, c);
            },
            V = function () {
                m.forEach(function (t) {
                    var i = e.runtime.eventData[t];
                    if ("gallery" == i.type)
                        for (var a = document.querySelectorAll("#" + t), n = 0; n < a.length; n++) {
                            var r = a[n];
                            if ("true" == r.getAttribute("data-scrolled") && "true" != r.getAttribute("data-stop")) {
                                var o = i[e.runtime.device + ".option.gallery_control.autoplay"],
                                    s = i[e.runtime.device + ".option.gallery_control.autoplay_time"],
                                    l = 0;
                                if ((o && !e.isEmpty(s) && (l = s), l > 0)) {
                                    var c = r.getAttribute("data-next-time"),
                                        d = Date.now();
                                    e.isEmpty(c) && ((c = d + 1e3 * (l - 1)), r.setAttribute("data-next-time", c)), d >= c && (q(r, !0), r.setAttribute("data-next-time", d + 1e3 * l));
                                }
                            }
                        }
                });
            },
            H = function (t, i) {
                var a = e.runtime.eventData[t];
                if ("gallery" == a.type) {
                    var n = i.getAttribute("data-runtime-id");
                    if (!i.hasAttribute("data-scrolled")) {
                        i.setAttribute("data-scrolled", !1);
                        e.runtime.list_scroll_func[n] = function () {
                            i.setAttribute("data-scrolled", !0);
                        };
                    }
                    var r = a[e.runtime.device + ".option.gallery_control.autoplay"],
                        o = a[e.runtime.device + ".option.gallery_control.autoplay_time"],
                        s = 0;
                    r && !e.isEmpty(o) && (s = o);
                    var l = function (t) {
                            Y(t, i);
                        },
                        c = function (t) {
                            if ((t.stopPropagation(), !(t = e.getEventCursorData(t)).target.classList.contains("ladi-gallery-view-arrow"))) {
                                var a = i.getAttribute("data-runtime-id");
                                e.isEmpty(e.runtime.timeout_gallery[a]) && ((e.runtime.current_element_mouse_down_gallery_view = a), (e.runtime.current_element_mouse_down_gallery_view_position_x = t.pageX));
                            }
                        },
                        d = function (t) {
                            t.stopPropagation(),
                                (t = e.getEventCursorData(t)),
                            (i.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-top") || i.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-bottom")) &&
                            (t.target.classList.contains("ladi-gallery-control-arrow") ||
                                ((e.runtime.current_element_mouse_down_gallery_control = n),
                                    (e.runtime.current_element_mouse_down_gallery_control_time = Date.now()),
                                    (e.runtime.current_element_mouse_down_gallery_control_position_x = t.pageX),
                                    i.getElementsByClassName("ladi-gallery-control-box")[0].style.setProperty("transition-duration", "0ms"),
                                    i.getElementsByClassName("ladi-gallery-control-box")[0].setAttribute("data-left", getComputedStyle(i.getElementsByClassName("ladi-gallery-control-box")[0]).left)));
                        };
                    i.getElementsByClassName("ladi-gallery-view-arrow-left")[0].addEventListener("click", function (t) {
                        t.stopPropagation(), i.setAttribute("data-is-next", !1), i.setAttribute("data-next-time", Date.now() + 1e3 * s), q(i, !1);
                    }),
                    i.getElementsByClassName("ladi-gallery-view-item").length > 1 && i.getElementsByClassName("ladi-gallery-view-arrow-right")[0].classList.remove("opacity-0"),
                        i.getElementsByClassName("ladi-gallery-view-arrow-right")[0].addEventListener("click", function (t) {
                            t.stopPropagation(), i.setAttribute("data-is-next", !0), i.setAttribute("data-next-time", Date.now() + 1e3 * s), q(i, !1);
                        }),
                        i.getElementsByClassName("ladi-gallery-control-arrow-left")[0].addEventListener("click", function (t) {
                            t.stopPropagation();
                            var a = i.getElementsByClassName("ladi-gallery-control-item")[0];
                            if (!e.isEmpty(a)) {
                                var n = getComputedStyle(a);
                                if (
                                    (i.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.remove("opacity-0"),
                                        i.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.remove("opacity-0"),
                                    i.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-top") || i.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-bottom"))
                                ) {
                                    var r = (parseFloatLadiPage(n.width) || 0) + (parseFloatLadiPage(n.marginRight) || 0);
                                    r += parseFloatLadiPage(i.getElementsByClassName("ladi-gallery-control-box")[0].style.getPropertyValue("left")) || 0;
                                    var o = parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control-box")[0]).width) || 0;
                                    (o = (o = -(o -= parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control")[0]).width) || 0)) > 0 ? 0 : o),
                                    r > 0 && (r = 0),
                                        i.getElementsByClassName("ladi-gallery-control-box")[0].style.setProperty("left", r + "px"),
                                    r >= 0 && i.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.add("opacity-0"),
                                    r <= o && i.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.add("opacity-0");
                                } else {
                                    var l = (parseFloatLadiPage(n.height) || 0) + (parseFloatLadiPage(n.marginBottom) || 0);
                                    l += parseFloatLadiPage(i.getElementsByClassName("ladi-gallery-control-box")[0].style.getPropertyValue("top")) || 0;
                                    var c = parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control-box")[0]).height) || 0;
                                    (c = (c = -(c -= parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control")[0]).height) || 0)) > 0 ? 0 : c),
                                    l > 0 && (l = 0),
                                        i.getElementsByClassName("ladi-gallery-control-box")[0].style.setProperty("top", l + "px"),
                                    l >= 0 && i.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.add("opacity-0"),
                                    l <= c && i.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.add("opacity-0");
                                }
                                i.setAttribute("data-next-time", Date.now() + 1e3 * s);
                            }
                        }),
                    (parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control-box")[0]).width) || 0) > (parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control")[0]).width) || 0) &&
                    i.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.remove("opacity-0"),
                        i.getElementsByClassName("ladi-gallery-control-arrow-right")[0].addEventListener("click", function (t) {
                            t.stopPropagation();
                            var a = i.getElementsByClassName("ladi-gallery-control-item")[0];
                            if (!e.isEmpty(a)) {
                                var n = getComputedStyle(a);
                                if (
                                    (i.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.remove("opacity-0"),
                                        i.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.remove("opacity-0"),
                                    i.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-top") || i.getElementsByClassName("ladi-gallery")[0].classList.contains("ladi-gallery-bottom"))
                                ) {
                                    var r = (parseFloatLadiPage(n.width) || 0) + (parseFloatLadiPage(n.marginRight) || 0);
                                    r = -r + (parseFloatLadiPage(i.getElementsByClassName("ladi-gallery-control-box")[0].style.getPropertyValue("left")) || 0);
                                    var o = parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control-box")[0]).width) || 0;
                                    r < (o = (o = -(o -= parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control")[0]).width) || 0)) > 0 ? 0 : o) && (r = o),
                                        i.getElementsByClassName("ladi-gallery-control-box")[0].style.setProperty("left", r + "px"),
                                    r >= 0 && i.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.add("opacity-0"),
                                    r <= o && i.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.add("opacity-0");
                                } else {
                                    var l = (parseFloatLadiPage(n.height) || 0) + (parseFloatLadiPage(n.marginBottom) || 0);
                                    l = -l + (parseFloatLadiPage(i.getElementsByClassName("ladi-gallery-control-box")[0].style.getPropertyValue("top")) || 0);
                                    var c = parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control-box")[0]).height) || 0;
                                    l < (c = (c = -(c -= parseFloatLadiPage(getComputedStyle(i.getElementsByClassName("ladi-gallery-control")[0]).height) || 0)) > 0 ? 0 : c) && (l = c),
                                        i.getElementsByClassName("ladi-gallery-control-box")[0].style.setProperty("top", l + "px"),
                                    l >= 0 && i.getElementsByClassName("ladi-gallery-control-arrow-left")[0].classList.add("opacity-0"),
                                    l <= c && i.getElementsByClassName("ladi-gallery-control-arrow-right")[0].classList.add("opacity-0");
                                }
                                i.setAttribute("data-next-time", Date.now() + 1e3 * s);
                            }
                        }),
                        i.getElementsByClassName("ladi-gallery-view")[0].addEventListener("mousedown", c),
                        i.getElementsByClassName("ladi-gallery-view")[0].addEventListener("touchstart", c, e.runtime.scrollEventPassive),
                        i.getElementsByClassName("ladi-gallery-control")[0].addEventListener("mousedown", d),
                        i.getElementsByClassName("ladi-gallery-control")[0].addEventListener("touchstart", d, e.runtime.scrollEventPassive);
                    for (var p = i.getElementsByClassName("ladi-gallery-control-item"), u = 0; u < p.length; u++) p[u].addEventListener("click", l);
                    e.isEmpty(a["option.product_mapping_name"]) &&
                    !i.hasAttribute("data-loaded") &&
                    e.runTimeout(function () {
                        i.setAttribute("data-loaded", !0);
                    }, 300);
                }
            },
            G = function (t, i) {
                if ((e.isEmpty(e.runtime.timenext_carousel[t]) || !(e.runtime.timenext_carousel[t] > Date.now())) && e.isEmpty(e.runtime.current_element_mouse_down_carousel)) {
                    var a = document.getElementById(t);
                    if (!e.isEmpty(a)) {
                        var n = a.getAttribute("data-is-next") || "true";
                        n = "true" == n.toLowerCase();
                        var r = parseFloatLadiPage(a.getAttribute("data-current")) || 0,
                            o = parseFloatLadiPage(e.runtime.eventData[t][e.runtime.device + ".option.carousel_crop.width"]) || 0,
                            s = parseFloatLadiPage(e.runtime.eventData[t][e.runtime.device + ".option.carousel_crop.width_item"]) || 0;
                        s > a.clientWidth && (s = a.clientWidth);
                        var l = Math.ceil(o / s);
                        i ? (n ? (r >= l - 1 ? ((r = l - 2), (n = !1)) : r++) : r <= 0 ? ((r = 1), (n = !0)) : r--) : n ? r++ : r--, r < 0 && (r = 0), r >= l - 1 && (r = l - 1);
                        var c = 1e3 * (parseFloatLadiPage(getComputedStyle(a.getElementsByClassName("ladi-carousel-content")[0]).transitionDuration) || 0);
                        e.runtime.timenext_carousel[t] = Date.now() + c;
                        var d = e.getElementBoundingClientRect(a),
                            p = d.x + r * s - d.x - (a.clientWidth - s) / 2;
                        p = -p > 0 ? 0 : -p;
                        var u = -(o - a.clientWidth);
                        p < u && (p = u), a.getElementsByClassName("ladi-carousel-content")[0].style.setProperty("left", p + "px"), a.setAttribute("data-is-next", n), a.setAttribute("data-current", r), i || a.setAttribute("data-stop", !0);
                        var m = a.getElementsByClassName("ladi-carousel-arrow-left")[0],
                            _ = a.getElementsByClassName("ladi-carousel-arrow-right")[0];
                        e.isEmpty(m) || m.classList.remove("opacity-0"), e.isEmpty(_) || _.classList.remove("opacity-0"), p >= 0 && m.classList.add("opacity-0"), p <= u && _.classList.add("opacity-0");
                    }
                }
            },
            U = function () {
                var i,
                    a = document.getElementsByClassName("ladi-form"),
                    n = null,
                    r = null,
                    l = null,
                    c = null,
                    d = null,
                    p = null,
                    m = null,
                    _ = null,
                    y = null,
                    g = null,
                    h = null,
                    v = null,
                    E = null,
                    A = e.runtime.shopping,
                    L = null,
                    b = ["utm_source", "utm_medium", "utm_campaign", "utm_term", "utm_content"],
                    S = ["name", "email", "phone", "address", "ward", "district", "state", "country"],
                    O = ["email", "phone"],
                    N = e.copy(e.runtime.list_set_value_name_country).reverse(),
                    I = function (t, i) {
                        var a = window.ladi("_capture_" + t).get_cookie();
                        if (e.isEmpty(a)) {
                            a = i + "|" + e.runtime.ladipage_id + "|" + Date.now() + "|" + e.randomId();
                            var n = new Date();
                            n.setTime(n.getTime() + 3e5), window.ladi("_capture_" + t).set_cookie(a, n);
                        }
                        return a;
                    },
                    k = function (t, i, a) {
                        if (i && e.isEmpty(n[a])) return !1;
                        var r = [];
                        if (
                            (v.forEach(function (t) {
                                e.isEmpty(n[t]) && r.push(t);
                            }),
                            i && (r = r.only([a])),
                            r.length > 0)
                        )
                            return (
                                i ||
                                e.showMessage(e.const.LANG.FORM_INPUT_REQUIRED_ERROR, null, function () {
                                    var i = t.querySelector('[name="' + r[0] + '"]');
                                    e.isEmpty(i) || i.focus();
                                }),
                                    !1
                            );
                        var o = !0,
                            s = 0,
                            l = function () {
                                var i = t.querySelector('[name="' + E[s].name + '"]');
                                e.isEmpty(i) || i.focus();
                            };
                        for (s = 0; s < E.length; s++)
                            if (!i || E[s].name == a) {
                                var c = n[E[s].name];
                                if (!e.isEmpty(c))
                                    try {
                                        if (!new RegExp("^" + E[s].pattern + "$", E[s].pattern_flag).test(c)) {
                                            i || e.showMessage(E[s].title, null, l), (o = !1);
                                            break;
                                        }
                                    } catch (t) {}
                            }
                        return o;
                    },
                    x = function (t, i) {
                        (n = {}), (r = {}), (l = {});
                        for (var a = t.querySelectorAll(".ladi-element .ladi-form-item-container [name]"), s = {}, d = null, u = 0; u < a.length; u++) (d = a[u].getAttribute("name")), (s[d] = parseInt(a[u].getAttribute("tabindex")) || 0);
                        var m = Object.keys(s).sort(function (t, e) {
                            return s[t] - s[e];
                        });
                        if (m.only(e.runtime.list_set_value_name_country).length == e.runtime.list_set_value_name_country.length)
                            for (var _ = 0; _ < m.length; _++) {
                                var y = e.runtime.list_set_value_name_country.indexOf(m[_]);
                                -1 != y && (m[_] = N[y]);
                            }
                        for (var g = 0; g < m.length; g++) n[m[g]] = "";
                        p = m;
                        for (var f = 0; f < a.length; f++) {
                            (d = a[f].getAttribute("name")), a[f].required && -1 == v.indexOf(d) && v.push(d);
                            var h = null;
                            if ("INPUT" == a[f].tagName) {
                                h = a[f].getAttribute("type").trim().toLowerCase();
                                var P = a[f].getAttribute("pattern"),
                                    A = a[f].getAttribute("title");
                                if (
                                    ("email" == h
                                        ? E.push({
                                            name: d,
                                            pattern: '(([^<>()\\[\\]\\\\.,;:\\s@"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@"]+)*)|(".+"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))',
                                            pattern_flag: "gi",
                                            title: e.const.LANG.FORM_INPUT_EMAIL_REGEX,
                                        })
                                        : e.isEmpty(P) || E.push({ name: d, pattern: P, title: e.isEmpty(A) ? e.const.LANG.FORM_INPUT_TEXT_REGEX : A }),
                                    "checkbox" == h)
                                ) {
                                    e.isArray(n[d]) || (n[d] = []), a[f].checked && n[d].push(a[f].value);
                                    continue;
                                }
                                if ("radio" == h) {
                                    a[f].checked && (n[d] = a[f].value);
                                    continue;
                                }
                            }
                            if (
                                ((n[d] = a[f].value),
                                a[f].classList.contains("ladi-form-control-file") && ((n[d] = JSON.parse(a[f].getAttribute("data-path-file") || "[]")), (l[d] = !0)),
                                "coupon" == d && "INPUT" == a[f].tagName && "text" == h && "true" == a[f].getAttribute("data-replace-coupon") && (n[d] = e.runtime.tmp.current_use_coupon || ""),
                                "INPUT" == a[f].tagName && "date" == h && !e.isEmpty(n[d]))
                            ) {
                                var L = a[f].getAttribute("date-format") || "dd-mm-yyyy",
                                    b = new Date(n[d]);
                                (L = (L = (L = (L = L.replaceAll("dd", (b.getDate() < 10 ? "0" : "") + b.getDate())).replaceAll("mm", (b.getMonth() + 1 < 10 ? "0" : "") + (b.getMonth() + 1))).replaceAll("yyyy", b.getFullYear())).replaceAll(
                                    "yy",
                                    b.getFullYear() - 2e3
                                )),
                                    (n[d] = L);
                            }
                        }
                        i ||
                        S.forEach(function (t) {
                            e.isNull(n[t]) ||
                            (window.ladi("_ladipage_" + t).set_cookie(n[t], 365, "/", window.location.host),
                            e.isArray(e.runtime.DOMAIN_SET_COOKIE) &&
                            e.runtime.DOMAIN_SET_COOKIE.forEach(function (e) {
                                e != window.location.host && window.ladi("_ladipage_" + t).set_cookie(n[t], 365, "/", e);
                            }));
                        }),
                            (c = o(n));
                    },
                    D = function (t, i, a) {
                        var r = { form_config_id: m, ladi_form_id: _, ladipage_id: e.runtime.ladipage_id, tracking_form: [], form_data: [], data_key: i };
                        if (t) r.status_send = 1;
                        else if (((r.status_send = 2), A)) {
                            var o = window.ladi("_checkout_token").get_cookie();
                            e.isEmpty(o) || (r.checkout_token = o);
                        }
                        e.isEmpty(h) || (r.captcha_token = h), e.isEmpty(y) || (r.total_revenue = y), e.isEmpty(e.runtime.time_zone) || (r.time_zone = e.runtime.time_zone);
                        var s = Object.keys(LadiFormApi);
                        if (
                            (p.forEach(function (t) {
                                var i = n[t];
                                e.isArray(i) && 0 == i.length && (i = "");
                                var a = { name: t, value: (i = -1 != s.indexOf(t) ? LadiFormApi[t] : i) };
                                l[t] && (a.is_file = !0), r.form_data.push(a);
                            }),
                                (s = s.except(p)).forEach(function (t) {
                                    r.form_data.push({ name: t, value: LadiFormApi[t] });
                                }),
                                A)
                        ) {
                            if (!e.isNull(g)) {
                                r.form_data.push({ name: "cart_products", value: g, is_ladipage: !0 }),
                                e.isEmpty(e.runtime.tmp.add_to_cart_shipping_method_id) ||
                                r.form_data.push({ name: "cart_shipping", value: e.runtime.tmp.add_to_cart_shipping_method_id + "|" + (e.runtime.tmp.add_to_cart_fee_shipping || 0), is_ladipage: !0 });
                                var c = r.form_data.findIndex(function (t) {
                                    return "coupon" == t.name;
                                });
                                -1 != c && (r.form_data[c].is_ladipage = !0);
                            }
                            e.isEmpty(y) || r.form_data.push({ name: "cart_revenue", value: y, is_ladipage: !0 }),
                            e.isEmpty(e.runtime.tmp.current_use_coupon) || r.form_data.push({ name: "cart_coupon_amount", value: e.runtime.tmp.add_to_cart_discount || 0, is_ladipage: !0 });
                        }
                        r.tracking_form.push({ name: "url_page", value: window.location.href }),
                        e.runtime.has_popupx && r.tracking_form.push({ name: "origin_url_page", value: e.runtime.tmp.popupx_origin_url }),
                            b.forEach(function (t) {
                                var i = L[t];
                                (i = e.isNull(i) ? "" : i), r.tracking_form.push({ name: t, value: i });
                            }),
                            r.tracking_form.push({ name: "variant_url", value: P }),
                            r.tracking_form.push({ name: "variant_content", value: e.generateVariantContentString(w, !0) }),
                        e.isEmpty(u) || r.tracking_form.push({ name: e.const.REF_NAME, value: u }),
                        e.isFunction(a) && a(r);
                    },
                    R = function (t) {
                        t.reset();
                        for (var i = t.querySelectorAll(".ladi-element .ladi-form-item-container .ladi-form-checkbox-item input"), a = 0; a < i.length; a++) {
                            var n = e.findAncestor(i[a], "ladi-form-checkbox-item").querySelector("span");
                            e.isEmpty(n) || n.setAttribute("data-checked", i[a].checked);
                        }
                        var r = e.findAncestor(t, "ladi-element");
                        if (!e.isEmpty(r))
                            for (var o = document.querySelectorAll('.ladi-form [data-submit-form-id="' + r.id + '"]'), s = 0; s < o.length; s++) {
                                var l = e.findAncestor(o[s], "ladi-form");
                                if (!e.isEmpty(l) && ((l = e.findAncestor(l, "ladi-element")), !e.isEmpty(l))) {
                                    var c = l.querySelector(".ladi-form-remove-coupon");
                                    if (e.isEmpty(c)) {
                                        var d = l.querySelector('input[name="coupon"]');
                                        e.isEmpty(d) || ((d.value = ""), e.fireEvent(d, "change"));
                                    } else c.click();
                                }
                            }
                        for (var p = document.querySelectorAll('[data-combobox-type="delivery_method"]'), u = 0; u < p.length; u++)
                            p[u].hasAttribute("data-placeholder") && (p[u].innerHTML = '<option value="">' + p[u].getAttribute("data-placeholder") + "</option>"), p[u].setAttribute("data-selected", "");
                        e.runtime.tmp.add_to_cart_shipping_method_id = null;
                    },
                    F = function (t, i) {
                        x(t, !1),
                        k(t, !1, null) &&
                        (D(!1, i, function (t) {
                            e.sendRequest("POST", e.const.API_FORM_DATA, JSON.stringify(t), !0, { "Content-Type": "application/json" });
                        }),
                            e.showMessage(e.const.LANG.FORM_SEND_DATA_NO_CONFIG),
                            R(t));
                    },
                    q = function () {
                        e.showMessage(e.const.LANG.FORM_CAPTCHA_ERROR);
                    },
                    M = function (t, i, a, r) {
                        if (((c = {}), (d = {}), (p = []), (v = []), (E = []), x(t, a), k(t, a, r))) {
                            for (var o = t.querySelectorAll(".ladi-element .ladi-form-item-container [name]"), s = {}, l = null, u = 0; u < o.length; u++) (l = e.findAncestor(o[u], "ladi-element")), (s[o[u].getAttribute("name")] = l.id);
                            var m = i["option.form_setting"],
                                _ = Object.keys(s);
                            if (
                                ((m.mapping_form_id || []).forEach(function (t) {
                                    var i = document.getElementById(t);
                                    if (!e.isEmpty(i)) {
                                        if (a) {
                                            var n = e.runtime.eventData[i.id];
                                            if (e.isEmpty(n) || !n["option.form_auto_capture"]) return;
                                        }
                                        var c = [];
                                        if (
                                            (_.forEach(function (t) {
                                                var a = window.ladi(s[t]).value();
                                                o = i.querySelectorAll('.ladi-element .ladi-form-item-container [name="' + t + '"]');
                                                var n = [];
                                                for (u = 0; u < o.length; u++) (l = e.findAncestor(o[u], "ladi-element")), n.push(l.id), t == r && c.push(o[u]);
                                                for (n = n.unique(), u = 0; u < n.length; u++) window.ladi(n[u]).value(a);
                                            }),
                                                a)
                                        )
                                            for (u = 0; u < c.length; u++) e.fireEvent(c[u], "focusout");
                                    }
                                }),
                                    !a)
                            ) {
                                var y = i["option.data_event"];
                                if (!e.isArray(y)) {
                                    var g = e.copy(m);
                                    if (
                                        ((y = []),
                                        e.isObject(g) &&
                                        ((g.type = g.event_type),
                                            (g.value = g.event_value),
                                            (g.is_hide_parent = g.event_is_hide_parent),
                                            (g.change_index_type = g.event_change_index_type),
                                            (g.change_index_number = g.event_change_index_number),
                                            !e.isEmpty(g.value)))
                                    ) {
                                        if (
                                            ((g.type != e.const.DATA_ACTION_TYPE.section && g.type != e.const.DATA_ACTION_TYPE.popup) || y.push({ action_type: e.const.ACTION_TYPE.complete, type: g.type, action: g.value }),
                                            (g.type == e.const.DATA_ACTION_TYPE.section && g.is_hide_parent) || g.type == e.const.DATA_ACTION_TYPE.popup)
                                        ) {
                                            var f = e.findAncestor(t, "ladi-popup"),
                                                h = e.findAncestor(t, "ladi-section"),
                                                P = null;
                                            e.isEmpty(f) ? e.isEmpty(h) || (P = h.id) : (P = (f = e.findAncestor(f, "ladi-element")).id),
                                            e.isEmpty(P) || y.push({ action_type: e.const.ACTION_TYPE.complete, type: e.const.DATA_ACTION_TYPE.hidden_show, hidden_ids: [P], show_ids: [] });
                                        }
                                        g.type == e.const.DATA_ACTION_TYPE.change_index &&
                                        y.push({ action_type: e.const.ACTION_TYPE.complete, type: g.type, action: g.value, change_index_type: g.change_index_type, change_index_number: g.change_index_number });
                                    }
                                }
                                C(t, y);
                            }
                            e.runEventTracking(t.id, !0, n);
                        }
                    },
                    B = function (i, a, o, s, u) {
                        (L = e.getURLSearchParams(null, null, !1)),
                            (n = {}),
                            (r = {}),
                            (l = {}),
                            (c = {}),
                            (d = {}),
                            (p = []),
                            (m = null),
                            (_ = null),
                            (y = null),
                            (g = null),
                            (h = a.captcha_token),
                            (v = []),
                            (E = []),
                            (A = e.findAncestor(i, "ladi-popup")),
                            e.isEmpty(A) ? (A = !1) : ((A = e.findAncestor(A, "ladi-element")), (A = !e.isEmpty(A) && "POPUP_CHECKOUT" == A.id));
                        var P = i.getElementsByClassName("ladi-form")[0];
                        if (!e.isEmpty(P)) {
                            var w = e.runtime.eventData[i.id];
                            if (!e.isEmpty(w)) {
                                if (w["option.is_add_to_cart"]) return;
                                (m = w["option.form_config_id"]), (_ = i.id), (y = parseFloatLadiPage(w["option.form_purchase_value"]) || 0), A && ((y = e.getCartCheckoutPrice(y)), (g = e.getCartProducts()));
                            }
                            if (o) {
                                if (e.isEmpty(s)) return;
                                if ((x(P, o), !k(P, o, u))) return;
                                return a.captcha && !e.isEmpty(w) && w["option.form_captcha"] && e.isObject(e.runtime.tmp.google_captcha)
                                    ? void (
                                        window.grecaptcha &&
                                        (e.runtime.tmp.google_captcha.enterprise && window.grecaptcha.enterprise
                                            ? window.grecaptcha.enterprise.ready(function () {
                                                try {
                                                    window.grecaptcha.enterprise.execute(e.runtime.tmp.google_captcha.api_key, { action: "submit" }).then(function (t) {
                                                        B(i, { captcha_token: t }, o, s, u);
                                                    });
                                                } catch (t) {}
                                            })
                                            : window.grecaptcha.ready(function () {
                                                try {
                                                    window.grecaptcha.execute(e.runtime.tmp.google_captcha.api_key, { action: "submit" }).then(function (t) {
                                                        B(i, { captcha_token: t }, o, s, u);
                                                    });
                                                } catch (t) {}
                                            }))
                                    )
                                    : void D(o, s, function (t) {
                                        var i = t.form_data.findIndex(function (t) {
                                                return t.name == u;
                                            }),
                                            a = -1 != i ? t.form_data[i].value : null;
                                        (!e.isEmpty(e.runtime.tmp.capture_form_data_last[s + "_" + u]) && e.equals(e.runtime.tmp.capture_form_data_last[s + "_" + u], a)) ||
                                        ((e.runtime.tmp.capture_form_data_last[s + "_" + u] = a), e.sendRequest("POST", e.const.API_FORM_DATA, JSON.stringify(t), !0, { "Content-Type": "application/json" }));
                                    });
                            }
                            if (e.isEmpty(w)) F(P, s);
                            else if (
                                (e.isNull(e.runtime.tmp.form_sending) && (e.runtime.tmp.form_sending = {}), e.isNull(e.runtime.tmp.form_button_headline) && (e.runtime.tmp.form_button_headline = {}), !e.runtime.tmp.form_sending[i.id])
                            ) {
                                var S = function () {
                                        e.runtime.tmp.form_sending[i.id] = !0;
                                        var t = P.querySelector(".ladi-button > .ladi-element > .ladi-headline");
                                        e.isNull(e.runtime.tmp.form_button_headline[i.id]) && (e.runtime.tmp.form_button_headline[i.id] = t.innerHTML), (t.innerHTML = "● ● ●");
                                    },
                                    O = function () {
                                        delete e.runtime.tmp.form_sending[i.id], (P.querySelector(".ladi-button > .ladi-element > .ladi-headline").innerHTML = e.runtime.tmp.form_button_headline[i.id]);
                                    };
                                if (a.captcha && !e.isEmpty(w) && w["option.form_captcha"] && e.isObject(e.runtime.tmp.google_captcha))
                                    window.grecaptcha
                                        ? (S(),
                                            e.runtime.tmp.google_captcha.enterprise && window.grecaptcha.enterprise
                                                ? window.grecaptcha.enterprise.ready(function () {
                                                    try {
                                                        window.grecaptcha.enterprise
                                                            .execute(e.runtime.tmp.google_captcha.api_key, { action: "submit" })
                                                            .then(function (t) {
                                                                O(), B(i, { captcha_token: t }, o, s, u);
                                                            })
                                                            .catch(function () {
                                                                q(), O();
                                                            });
                                                    } catch (t) {
                                                        q(), O();
                                                    }
                                                })
                                                : window.grecaptcha.ready(function () {
                                                    try {
                                                        window.grecaptcha
                                                            .execute(e.runtime.tmp.google_captcha.api_key, { action: "submit" })
                                                            .then(function (t) {
                                                                O(), B(i, { captcha_token: t }, o, s, u);
                                                            })
                                                            .catch(function () {
                                                                q(), O();
                                                            });
                                                    } catch (t) {
                                                        q(), O();
                                                    }
                                                }))
                                        : e.showMessage(e.const.LANG.FORM_CAPTCHA_LOADING);
                                else {
                                    var C = w["option.form_send_ladipage"],
                                        N = w["option.form_api_data"],
                                        I = w["option.thankyou_type"],
                                        M = w["option.thankyou_value"],
                                        Y = w["option.deeplink_value"],
                                        V = w["option.form_auto_funnel"],
                                        H = w["option.form_thankyou_funnel"];
                                    if (e.isEmpty(m)) F(P, s);
                                    else if ((x(P, o), k(P, o, u))) {
                                        var G = 0,
                                            U = 0,
                                            j = [],
                                            W = !1,
                                            z = !1,
                                            X = !0,
                                            K = function (t) {
                                                t && R(P), O();
                                            },
                                            J = function (t) {
                                                if (
                                                    -1 != [e.const.FORM_CONFIG_TYPE.sapo, e.const.FORM_CONFIG_TYPE.shopify, e.const.FORM_CONFIG_TYPE.haravan, e.const.FORM_CONFIG_TYPE.wordpress].indexOf(e.runtime.shopping_product_type) &&
                                                    e.runtime.tmp.cart.length > 0
                                                ) {
                                                    var i = !1;
                                                    -1 != [e.const.FORM_CONFIG_TYPE.haravan, e.const.FORM_CONFIG_TYPE.wordpress].indexOf(e.runtime.shopping_product_type) && (i = !0);
                                                    var a = e.runtime.tmp.cart[0];
                                                    return (
                                                        (a = JSON.stringify(a)),
                                                            (a = encodeURIComponent(a)),
                                                            void e.removeAddToCartProduct(a, !1, i, function (i) {
                                                                i ? J(t) : e.isFunction(t) && t();
                                                            })
                                                    );
                                                }
                                                -1 != [e.const.FORM_CONFIG_TYPE.ladisales].indexOf(e.runtime.shopping_product_type) &&
                                                (window.ladi("_cart_token").delete_cookie(), window.ladi("_checkout_token").delete_cookie(), e.createCartData()),
                                                e.isFunction(t) && t();
                                            },
                                            Z = function (a, o, s, l) {
                                                if (s.readyState == XMLHttpRequest.DONE) {
                                                    if (l == e.const.API_FORM_DATA) {
                                                        var p = {};
                                                        try {
                                                            p = JSON.parse(a);
                                                        } catch (t) {}
                                                        200 == p.code ? G++ : (U++, (X = !1));
                                                    } else 200 == o || 201 == o ? G++ : e.getElementAHref(l).host == e.const.DOMAIN_GOOGLE_DOCS ? G++ : U++;
                                                    G + U == j.length &&
                                                    (X && !W && G >= 1
                                                        ? ((W = !0),
                                                            (r = e.copy(n)),
                                                            (d = e.copy(c)),
                                                            Object.keys(e.runtime.replaceStr).forEach(function (t) {
                                                                r.hasOwnProperty(t) || (r[t] = e.runtime.replaceStr[t]), d.hasOwnProperty(t) || (d[t] = e.runtime.replaceStr[t]);
                                                            }),
                                                            (function (t, i, a) {
                                                                var n = null,
                                                                    r = !1,
                                                                    o = function (t, i) {
                                                                        r || (e.isFunction(a) && a(t, i), e.removeTimeout(n), (r = !0));
                                                                    };
                                                                (n = e.runTimeout(o, 3e3)), T("FormSubmit", { ladi_form_id: t, total_revenue: i }, o);
                                                            })(i.id, y, function (a, o) {
                                                                e.runEventTracking(i.id, !0, n),
                                                                    window.ladi("_capture_" + i.id).delete_cookie(),
                                                                    J(function () {
                                                                        e.runTimeout(function () {
                                                                            K(!0),
                                                                                (e.runtime.tmp.current_use_coupon = null),
                                                                                (function () {
                                                                                    if (I != e.const.FORM_THANKYOU_TYPE.url) {
                                                                                        var a = e.findAncestor(i, "ladi-popup");
                                                                                        e.isEmpty(a) || ((a = e.findAncestor(a, "ladi-element")), e.runRemovePopup(a.id, t));
                                                                                    }
                                                                                    var n = 0;
                                                                                    if (!e.runtime.isDesktop && !e.isEmpty(Y)) {
                                                                                        n = 1e3;
                                                                                        var o = e.convertDataReplaceStr(Y, !0, null, !1, d);
                                                                                        window.ladi(o).open_url();
                                                                                    }
                                                                                    if (!H || e.isEmpty(f)) {
                                                                                        if (
                                                                                            (I == e.const.FORM_THANKYOU_TYPE.default && (e.isEmpty(M) || e.showMessage(M, d)),
                                                                                            I == e.const.FORM_THANKYOU_TYPE.popup && (V && e.setDataReplaceElement(!1, !1, d, M), window.ladi(M).show()),
                                                                                            I == e.const.FORM_THANKYOU_TYPE.url && !e.isEmpty(M))
                                                                                        ) {
                                                                                            var s = window.ladi(M).get_url(r, V, !1);
                                                                                            e.runTimeout(function () {
                                                                                                window.ladi(s).open_url();
                                                                                            }, n);
                                                                                        }
                                                                                    } else {
                                                                                        var l = window.ladi(f).get_url(r, V, !1);
                                                                                        e.runTimeout(function () {
                                                                                            window.ladi(l).open_url();
                                                                                        }, n);
                                                                                    }
                                                                                })();
                                                                        }, 500);
                                                                    });
                                                            }))
                                                        : !z && U >= 1 && ((z = !0), e.showMessage(e.const.LANG.REQUEST_SEND_ERROR), K(!1)));
                                                }
                                            },
                                            Q = function (t) {
                                                j.push({ url: e.const.API_FORM_DATA, data: JSON.stringify(t), async: !0, headers: { "Content-Type": "application/json" }, callback: Z });
                                            };
                                        C && D(o, s, Q),
                                        e.isArray(N) &&
                                        N.forEach(function (t) {
                                            if (!e.isEmpty(t.api_url) && e.isArray(t.custom_fields)) {
                                                var i = e.getElementAHref(t.api_url).host == e.const.DOMAIN_GOOGLE_DOCS,
                                                    a = {},
                                                    n = null,
                                                    r = null,
                                                    o = null,
                                                    s = null;
                                                t.custom_fields.forEach(function (t) {
                                                    if (
                                                        (A &&
                                                        ("cart_products" == t.ladi_name && (n = t.name),
                                                        "cart_revenue" == t.ladi_name && (r = t.name),
                                                        "cart_shipping" == t.ladi_name && (o = t.name),
                                                        "cart_coupon_amount" == t.ladi_name && (s = t.name)),
                                                            !l[t.ladi_name])
                                                    ) {
                                                        var i = c[t.ladi_name];
                                                        e.isNull(i) || (e.isArray(i) ? (0 == i.length ? (a[t.name] = "") : (a[t.name] = JSON.stringify(i))) : (a[t.name] = i));
                                                    }
                                                }),
                                                e.isEmpty(n) || e.isNull(g) || (a[n] = JSON.stringify(g)),
                                                e.isEmpty(r) || e.isNull(y) || (a[r] = y),
                                                e.isEmpty(o) ||
                                                e.isNull(e.runtime.tmp.add_to_cart_shipping_method_id) ||
                                                (a[o] = e.runtime.tmp.add_to_cart_shipping_method_id + "|" + (e.runtime.tmp.add_to_cart_fee_shipping || 0)),
                                                e.isEmpty(s) || e.isEmpty(e.runtime.tmp.current_use_coupon) || (a[s] = e.runtime.tmp.add_to_cart_discount || 0);
                                                var d = {};
                                                if (!e.isEmpty(t.api_request_header))
                                                    try {
                                                        var p = JSON.parse(t.api_request_header);
                                                        Object.keys(p).forEach(function (t) {
                                                            d[t] = p[t];
                                                        });
                                                    } catch (t) {}
                                                if (!i)
                                                    (a.link = window.location.href),
                                                    e.runtime.has_popupx && (a.origin_link = e.runtime.tmp.popupx_origin_url),
                                                        Object.keys(LadiFormApi).forEach(function (t) {
                                                            a[t] = LadiFormApi[t];
                                                        }),
                                                        b.forEach(function (t) {
                                                            var i = L[t];
                                                            e.isNull(i) || (a[t] = i);
                                                        });
                                                var u = null,
                                                    m = t.content_type || e.const.CONTENT_TYPE.form_urlencoded;
                                                if (
                                                    (m == e.const.CONTENT_TYPE.form_urlencoded &&
                                                    ((d["Content-Type"] = "application/x-www-form-urlencoded"),
                                                        (u = Object.keys(a)
                                                            .reduce(function (t, e) {
                                                                return t.push(e + "=" + encodeURIComponent(a[e])), t;
                                                            }, [])
                                                            .join("&"))),
                                                    m == e.const.CONTENT_TYPE.json && ((d["Content-Type"] = "application/json"), (u = JSON.stringify(a))),
                                                    m == e.const.CONTENT_TYPE.form_data)
                                                )
                                                    (u = new FormData()),
                                                        Object.keys(a).forEach(function (t) {
                                                            u.append(t, a[t]);
                                                        });
                                                j.push({ url: t.api_url, data: u, async: !0, headers: d, callback: Z });
                                            }
                                        });
                                        j.length > 0 ? S() : C ? F(P, s) : (S(), D(o, s, Q)),
                                            j.forEach(function (t) {
                                                e.sendRequest("POST", t.url, t.data, t.async, t.headers, t.callback);
                                            });
                                    }
                                }
                            }
                        }
                    },
                    Y = function (t) {
                        var i = e.findAncestor(t.target, "ladi-element");
                        if (!e.isEmpty(i)) for (var a = i.querySelectorAll('[type="checkbox"]'), n = 0; n < a.length; n++) a[n].removeAttribute("required");
                    },
                    V = function (t) {
                        var i = e.findAncestor(t.target, "ladi-element");
                        if (!e.isEmpty(i)) {
                            for (var a = i.querySelectorAll('[ladi-checkbox-required="true"]'), r = -1, o = 0; o < a.length; o++)
                                if (0 == a[o].querySelectorAll('[type="checkbox"]:checked').length) {
                                    r = o;
                                    break;
                                }
                            if (-1 == r) {
                                var s = null,
                                    l = e.runtime.eventData[i.id];
                                if (!e.isEmpty(l) && l["option.is_form_login"])
                                    !(function (t, i) {
                                        var a = t.querySelector('input[name="access_key"]');
                                        if (!e.isEmpty(a) && !e.isEmpty(a.value)) {
                                            for (var n = [], r = 0, o = 1; o <= 50; o++) {
                                                var s = window.ladi("_login_token_" + o).get_cookie();
                                                0 == r && e.isEmpty(s) && (r = o), n.push(s);
                                            }
                                            if (0 == r) {
                                                for (o = 1; o <= 50; o++) window.ladi("_login_token_" + o).delete_cookie();
                                                (n = []), (r = 1);
                                            }
                                            e.sendRequest(
                                                "POST",
                                                e.const.API_ACCESS_KEY_LOGIN,
                                                JSON.stringify({ tokens: n.removeSpace(), url: window.location.href, code: a.value.toUpperCase() }),
                                                !0,
                                                { "Content-Type": "application/json" },
                                                function (t, i, a, o) {
                                                    if (a.readyState == XMLHttpRequest.DONE) {
                                                        var s = {};
                                                        try {
                                                            if (200 == (s = JSON.parse(t)).code) {
                                                                var l = n.findIndex(function (t) {
                                                                    return t == s.data.token;
                                                                });
                                                                -1 != l && (r = l + 1), window.ladi("_login_token_" + r).set_cookie(s.data.token, 7);
                                                                var c = e.getElementAHref(s.data.url, !0),
                                                                    d = window.location.search;
                                                                (d.startsWith("?") || d.startsWith("&")) && (d = d.substring(1)), e.isEmpty(d) || (c.search = c.search + (e.isEmpty(c.search) ? "?" : "&") + d), window.ladi(c.href).open_url();
                                                            } else e.showMessage(s.message);
                                                            return;
                                                        } catch (t) {}
                                                        e.showMessage(e.const.LANG.FORM_LOGIN_SEND_ERROR);
                                                    }
                                                }
                                            );
                                        }
                                    })(i);
                                else if (!e.isEmpty(l) && e.isObject(l["option.form_setting"]) && l["option.form_setting"].is_multiple) M(i, l, !1);
                                else {
                                    if (e.runtime.shopping_product_type == e.const.FORM_CONFIG_TYPE.ladisales && !e.isNull(e.runtime.shopping_config_checkout_id)) {
                                        var m = e.findAncestor(i, "ladi-popup");
                                        if (!e.isEmpty(m) && ((m = e.findAncestor(m, "ladi-element")), !e.isEmpty(m) && "POPUP_CHECKOUT" == m.id))
                                            return (
                                                (function (t) {
                                                    var i = window.ladi("_cart_token").get_cookie(),
                                                        a = window.ladi("_checkout_token").get_cookie();
                                                    (c = {}), (d = {}), (p = []), (v = []), (E = []), x(t, !1);
                                                    var r = n.email,
                                                        o = n.phone;
                                                    if (e.isEmpty(i) || e.isEmpty(a)) e.showMessage(e.const.LANG.FORM_INPUT_REQUIRED_ERROR);
                                                    else if (e.isEmpty(r) && e.isEmpty(o)) e.showMessage(e.const.LANG.FORM_INPUT_REQUIRED_ERROR);
                                                    else {
                                                        var s = (L = e.getURLSearchParams(null, null, !1)).utm_source,
                                                            l = L.utm_medium,
                                                            m = L.utm_campaign,
                                                            _ = L.utm_term,
                                                            y = L.utm_content,
                                                            g = n.name,
                                                            f = n.address,
                                                            h = n.message,
                                                            P = n.country || "";
                                                        P = P.split(":")[0];
                                                        var A = n.state || "";
                                                        A = A.split(":")[0];
                                                        var b = n.district || "";
                                                        b = b.split(":")[0];
                                                        var w = n.ward || "";
                                                        w = w.split(":")[0];
                                                        var S = n.coupon,
                                                            T = e.runtime.tmp.add_to_cart_shipping_method_id,
                                                            O = e.getLadiSaleCheckoutCartProducts(),
                                                            C = {
                                                                cart_token: i,
                                                                checkout_token: a,
                                                                discount_code: S,
                                                                customer_first_name: g,
                                                                customer_email: r,
                                                                customer_phone: o,
                                                                customer_address: f,
                                                                customer_note: h,
                                                                customer_country_code: P,
                                                                customer_state_id: A,
                                                                customer_district_id: b,
                                                                customer_ward_id: w,
                                                                shipping_method_id: T,
                                                                shipping_first_name: g,
                                                                shipping_address: f,
                                                                shipping_phone: o,
                                                                shipping_email: r,
                                                                shipping_country_code: P,
                                                                shipping_state_id: A,
                                                                shipping_district_id: b,
                                                                shipping_ward_id: w,
                                                                shipping_note: h,
                                                                checkout_config_id: e.runtime.shopping_config_checkout_id,
                                                                is_export_invoice: 0,
                                                                is_generate_url: !0,
                                                                variants: O,
                                                                utm: { url_page: window.location.href, utm_source: s, utm_medium: l, utm_campaign: m, utm_term: _, utm_content: y },
                                                            };
                                                        e.runtime.has_popupx && (C.utm.origin_url_page = e.runtime.tmp.popupx_origin_url), e.isEmpty(u) || (C.utm[e.const.REF_NAME] = u), (C.custom_fields = {});
                                                        var N = Object.keys(n);
                                                        (N = N.except(["name", "email", "phone", "address", "country", "state", "district", "ward", "message", "coupon"])).forEach(function (t) {
                                                            C.custom_fields[t] = n[t];
                                                        }),
                                                            e.sendRequest("POST", e.const.API_LADISALE_CHECKOUT_CREATE, JSON.stringify(C), !0, { "Content-Type": "application/json" }, function (t, i, a) {
                                                                if (a.readyState == XMLHttpRequest.DONE) {
                                                                    if (200 == i)
                                                                        try {
                                                                            var n = JSON.parse(t);
                                                                            if (200 == n.code && e.isObject(n.data) && !e.isEmpty(n.data.url)) return void window.ladi(n.data.url).open_url();
                                                                            e.showMessage(n.message);
                                                                        } catch (t) {}
                                                                    e.showMessage(e.const.LANG.REQUEST_SEND_ERROR);
                                                                }
                                                            });
                                                    }
                                                })(i),
                                                    !1
                                            );
                                    }
                                    e.isEmpty(l) || !l["option.form_auto_capture"] || e.isEmpty(l["option.form_config_id"]) || (s = I(i.id, l["option.form_config_id"])), B(i, { captcha: !0 }, !1, s);
                                }
                            } else {
                                var _ = a[r].querySelectorAll('[type="checkbox"]');
                                if (_.length > 0) {
                                    _[0].setAttribute("required", "required");
                                    for (var y = 0; y < _.length; y++) _[y].removeEventListener("change", Y), _[y].addEventListener("change", Y);
                                    i.querySelector(".ladi-form").reportValidity();
                                }
                            }
                        }
                        return !1;
                    },
                    H = function (t, i, a, n) {
                        var r = e.findAncestor(t.target, "ladi-form");
                        if (!e.isEmpty(r)) {
                            var o = e.findAncestor(r, "ladi-element");
                            if (
                                !(
                                    e.isEmpty(o) ||
                                    ((a = i ? a : e.runtime.eventData[o.id]), e.isEmpty(a) || (!a["option.is_buy_now"] && !a["option.is_add_to_cart"]) || e.isEmpty(a["option.product_type"]) || e.isEmpty(a["option.product_id"]))
                                )
                            ) {
                                var s = function () {
                                    var r = e.generateVariantProduct(a, !1, null, null, null, null, !0, !0, s);
                                    if (e.isEmpty(r) || e.isEmpty(r.store_info) || e.isEmpty(r.product))
                                        e.isEmpty(e.runtime.tmp.timeout_product_info[a["option.product_type"]][a["option.product_id"]]) && e.showMessage(e.const.LANG.ADD_TO_CART_NO_PRODUCT, { name: e.getMessageNameProduct() });
                                    else {
                                        var l = -1,
                                            c = null;
                                        if (i) {
                                            var d = o.querySelector('[data-variant="true"]');
                                            (c = e.getProductVariantId(d, r.product)),
                                            e.isEmpty(c) ||
                                            (l = r.product.variants.findIndex(function (t) {
                                                return t.product_variant_id == c;
                                            }));
                                        } else l = e.getProductVariantIndex(o.id, a);
                                        if (-1 != l) {
                                            var p = r.product.variants[l].product_id;
                                            c = r.product.variants[l].product_variant_id;
                                            var u = r.product.name,
                                                m = r.product.variants[l].title,
                                                _ = r.product.variants[l].price,
                                                y = r.product.variants[l].quantity,
                                                g = r.product.variants[l].quantity_stock;
                                            y = e.isNull(g) ? y : g;
                                            var f = e.isEmpty(r.product.variants[l].src) ? "" : r.product.variants[l].src;
                                            (f = e.isEmpty(f) && e.isObject(r.product.image) ? r.product.image.src : f),
                                            e.isEmpty(f) || !e.isString(f) || f.startsWith("http://") || f.startsWith("https://") || f.startsWith("//") || (f = "https://" + e.const.STATIC_W_DOMAIN + "/" + f);
                                            if (
                                                0 == r.product.select_many_service &&
                                                e.isArray(e.runtime.tmp.cart) &&
                                                -1 !=
                                                e.runtime.tmp.cart.findIndex(function (t) {
                                                    return t.product_id == p && t.product_variant_id != c && t.quantity > 0;
                                                })
                                            )
                                                e.showMessage(e.const.LANG.ADD_TO_CART_PRODUCT_ONLY_ONE, { name: e.getMessageNameProduct(r.product.variants[l]) });
                                            else {
                                                var h = e.runtime.tmp.cart.findIndex(function (t) {
                                                        return t.product_variant_id == c;
                                                    }),
                                                    v = !1;
                                                -1 == h &&
                                                ((v = !0),
                                                    e.runtime.tmp.cart.push({
                                                        store_id: r.store_info.id,
                                                        product_id: p,
                                                        product_variant_id: c,
                                                        name: u,
                                                        title: m,
                                                        price: _,
                                                        image: f,
                                                        quantity: 0,
                                                        min_buy: r.product.variants[l].min_buy,
                                                        max_buy: r.product.variants[l].max_buy,
                                                        inventory_checked: r.product.variants[l].inventory_checked,
                                                        available_quantity: y,
                                                        currency: r.store_info.currency,
                                                        product_type: r.product.variants[l].product_type,
                                                        package_quantity: r.product.variants[l].package_quantity,
                                                    }),
                                                    (h = e.runtime.tmp.cart.length - 1));
                                                var E = o.querySelector('input[name="quantity"]');
                                                if (e.isEmpty(E) || e.isEmpty(E.value)) e.showMessage(e.const.LANG.ADD_TO_CART_QUANTITY_REQUIRED);
                                                else {
                                                    var P = parseInt(E.value) || 0;
                                                    if (P <= 0) return void e.showMessage(e.const.LANG.ADD_TO_CART_QUANTITY_REQUIRED);
                                                    var A = null,
                                                        L = 1;
                                                    L = r.product.variants[l].min_buy || L;
                                                    var b = r.product.variants[l].max_buy;
                                                    L > e.runtime.tmp.cart[h].quantity + P && (P = L - e.runtime.tmp.cart[h].quantity);
                                                    var w = !1;
                                                    if ((!e.isEmpty(b) && e.runtime.tmp.cart[h].quantity + P > b && (P = b - e.runtime.tmp.cart[h].quantity) <= 0 && ((w = !0), (A = b)), 1 == r.product.variants[l].inventory_checked)) {
                                                        if (L > y) return void e.showMessage(e.const.LANG.ADD_TO_CART_NO_QUANTITY, { name: e.getMessageNameProduct(r.product.variants[l], !0) });
                                                        e.runtime.tmp.cart[h].quantity + P > y && ((P = y - e.runtime.tmp.cart[h].quantity), y > 0 && ((w = !0), (e.isEmpty(A) || A > y) && (A = y)));
                                                    }
                                                    if (w || (P <= 0 && y > 0))
                                                        e.showMessage(e.const.LANG.ADD_TO_CART_MAX_QUANTITY, { max: A, name: e.getMessageNameProduct(r.product.variants[l]) }, function () {
                                                            var i = t.target;
                                                            (i = e.findAncestor(i, "ladi-button")), e.isEmpty(i) || (i = e.findAncestor(i, "ladi-element"));
                                                            var a = e.runtime.eventData[i.id];
                                                            if (!e.isEmpty(a)) {
                                                                var n = a["option.data_event"];
                                                                if (!e.isArray(n) && ((n = []), e.isObject(a["option.data_action"]))) {
                                                                    var r = e.copy(a["option.data_action"]);
                                                                    (r.action_type = e.const.ACTION_TYPE.action), n.push(r);
                                                                }
                                                                n.forEach(function (t) {
                                                                    t.action_type == e.const.ACTION_TYPE.action &&
                                                                    (t.type == e.const.DATA_ACTION_TYPE.popup_cart && window.ladi("POPUP_CART").show(),
                                                                    t.type == e.const.DATA_ACTION_TYPE.popup_checkout && (e.runtime.shopping_third_party ? e.getThirdPartyCheckoutUrl(!0) : window.ladi("POPUP_CHECKOUT").show()));
                                                                });
                                                            }
                                                        });
                                                    else if (P > 0) {
                                                        var S = !e.isEmpty(r.product.variants[l].start_date) && new Date(r.product.variants[l].start_date).getTime() > Date.now(),
                                                            T = !e.isEmpty(r.product.variants[l].end_date) && new Date(r.product.variants[l].end_date).getTime() < Date.now();
                                                        if (S) e.showMessage(e.const.LANG.ADD_TO_CART_PRODUCT_BEFORE_START_DATE, { name: e.getMessageNameProduct(r.product.variants[l]) });
                                                        else if (T) e.showMessage(e.const.LANG.ADD_TO_CART_PRODUCT_AFTER_END_DATE, { name: e.getMessageNameProduct(r.product.variants[l]) });
                                                        else {
                                                            var O = function () {
                                                                e.runtime.tmp.cart[h].quantity += P;
                                                                var t = { product_id: p, product_variant_id: c, quantity: P };
                                                                (t.product_type = e.runtime.tmp.cart[h].product_type),
                                                                    (t.package_quantity = e.runtime.tmp.cart[h].package_quantity),
                                                                    e.addCartCookie(
                                                                        r.store_info.id,
                                                                        t,
                                                                        function () {
                                                                            e.isFunction(n) && n();
                                                                            var t = document.getElementsByClassName("ladi-form-remove-coupon")[0];
                                                                            e.isEmpty(t) || t.click(), e.updateCartPromotion();
                                                                        },
                                                                        function (t) {
                                                                            (e.runtime.tmp.cart[h].quantity -= P), v && e.runtime.tmp.cart.splice(h, 1), e.showMessage(t.message);
                                                                        },
                                                                        function () {
                                                                            e.runtime.tmp.generateCart(),
                                                                                e.changeTotalPriceCart(),
                                                                                (e.runtime.tmp.is_click_add_to_cart = !1),
                                                                            0 == e.runtime.tmp.cart.length &&
                                                                            -1 != [e.const.FORM_CONFIG_TYPE.ladisales].indexOf(e.runtime.shopping_product_type) &&
                                                                            (window.ladi("_cart_token").delete_cookie(), window.ladi("_checkout_token").delete_cookie()),
                                                                                e.runResizeAll();
                                                                        }
                                                                    );
                                                            };
                                                            if (e.isEmpty(window.ladi("_cart_token").get_cookie()))
                                                                if (e.runtime.tmp.is_click_add_to_cart) {
                                                                    var C = function () {
                                                                        e.runTimeout(function () {
                                                                            if (e.runtime.tmp.is_click_add_to_cart) return C();
                                                                            s();
                                                                        }, 100);
                                                                    };
                                                                    C();
                                                                } else (e.runtime.tmp.is_click_add_to_cart = !0), O();
                                                            else O();
                                                        }
                                                    } else y <= 0 && e.showMessage(e.const.LANG.ADD_TO_CART_NO_QUANTITY, { name: e.getMessageNameProduct(r.product.variants[l], !0) });
                                                }
                                            }
                                        } else e.showMessage(e.const.LANG.ADD_TO_CART_PRODUCT_REQUIRED, { name: e.getMessageNameProduct(r.product.variants[l]) });
                                    }
                                };
                                s();
                            }
                        }
                    },
                    G = function (t) {
                        H(t, !1, null, function () {
                            var i = e.findAncestor(t.target, "ladi-button");
                            i = e.findAncestor(i || t.target, "ladi-element");
                            var a = e.runtime.eventData[i.id];
                            if (!e.isEmpty(a)) {
                                var n = a["option.data_event"];
                                if (!e.isArray(n) && ((n = []), e.isObject(a["option.data_action"]))) {
                                    var r = e.copy(a["option.data_action"]);
                                    (r.action_type = e.const.ACTION_TYPE.action), n.push(r);
                                }
                                n.forEach(function (t) {
                                    if (t.action_type == e.const.ACTION_TYPE.action) {
                                        var i = null;
                                        t.type == e.const.DATA_ACTION_TYPE.popup_cart && (i = "POPUP_CART"),
                                        t.type == e.const.DATA_ACTION_TYPE.popup_checkout && (i = "POPUP_CHECKOUT"),
                                            t.type == e.const.DATA_ACTION_TYPE.popup_checkout && e.runtime.shopping_third_party ? e.getThirdPartyCheckoutUrl(!0) : e.isEmpty(i) || window.ladi(i).show();
                                    }
                                }),
                                    e.runEventTracking(i.id, !1);
                            }
                        });
                    },
                    U = function (t) {
                        var i = e.findAncestor(t.target, "ladi-form");
                        e.isEmpty(i) || ((i = e.findAncestor(i, "ladi-element")), e.isEmpty(i) || window.ladi(i.id).submit());
                    },
                    j = function (t) {
                        var i = e.findAncestor(t.target, "ladi-form");
                        if (!e.isEmpty(i)) {
                            var a = e.findAncestor(i, "ladi-element");
                            if (!e.isEmpty(a)) {
                                var n = e.runtime.eventData[a.id];
                                if (!e.isEmpty(n))
                                    if (e.isObject(n["option.form_setting"]) && n["option.form_setting"].is_multiple) M(a, n, !0, t.target.getAttribute("name"));
                                    else if (n["option.form_auto_capture"] && !e.isEmpty(n["option.form_config_id"])) {
                                        var r = I(a.id, n["option.form_config_id"]);
                                        B(a, { captcha: !0 }, !0, r, t.target.getAttribute("name"));
                                    }
                            }
                        }
                    },
                    W = {};
                S.forEach(function (t) {
                    (W[t] = window.ladi("_ladipage_" + t).get_cookie()), e.isEmpty(s[t]) || (W[t] = s[t]);
                }),
                    (i = o(W));
                var z = 0,
                    X = !1,
                    K = function (t) {
                        for (var n = a[z].querySelectorAll('.ladi-element .ladi-form-item-container [name="' + t + '"]'), r = 0; r < n.length; r++) {
                            var o = W[t];
                            if (!e.isEmpty(o))
                                if (("true" != n[r].getAttribute("data-is-select-country") && (o = i[t]), "SELECT" == n[r].tagName))
                                    n[r].querySelectorAll('option[value="' + o + '"]').length > 0 && ((n[r].value = o), X && e.fireEvent(n[r], "change"));
                                else {
                                    if ("country" == t && "true" == n[r].getAttribute("data-is-select-country")) continue;
                                    (n[r].value = o), X && e.fireEvent(n[r], "change");
                                }
                        }
                    },
                    J = function (t) {
                        (t.target.type = "date"), t.target.focus();
                    },
                    Z = function (t) {
                        e.isEmpty(t.target.value) && (t.target.type = "text");
                    };
                for (z = 0; z < a.length; z++) {
                    a[z].onsubmit = V;
                    for (var Q = e.findAncestor(a[z], "ladi-element"), $ = a[z].getElementsByClassName("ladi-button"), tt = 0; tt < $.length; tt++) {
                        var et = a[z].getElementsByClassName("ladi-button")[tt];
                        if (!e.isEmpty(et)) {
                            var it = e.findAncestor(et, "ladi-element");
                            e.isEmpty(Q) || e.isEmpty(e.runtime.eventData[Q.id]) || !e.runtime.eventData[Q.id]["option.is_add_to_cart"]
                                ? it.addEventListener("click", U)
                                : (it.setAttribute("data-click", !1), it.addEventListener("click", G));
                        }
                    }
                    var at = a[z].querySelector('[data-is-select-country="true"][name="country"]');
                    if (!e.isEmpty(at) && "true" == at.getAttribute("data-no-ward")) {
                        var nt = a[z].querySelector('select[data-is-select-country="true"][name="ward"]');
                        e.isEmpty(nt) || nt.removeAttribute("required");
                    }
                    for (var rt = a[z].querySelectorAll('input[data-type="date"]'), ot = 0; ot < rt.length; ot++)
                        e.isEmpty(rt[ot].getAttribute("placeholder")) || (rt[ot].setAttribute("type", "text"), rt[ot].addEventListener("focus", J), rt[ot].addEventListener("blur", Z));
                    var st = a[z].querySelectorAll("[tabindex]"),
                        lt = 0;
                    for (ot = 0; ot < st.length; ot++) {
                        var ct = parseInt(st[ot].getAttribute("tabindex")) || 0;
                        ct > lt && (lt = ct), st[ot].setAttribute("tabindex", e.runtime.tabindexForm + ct);
                    }
                    e.runtime.tabindexForm += lt;
                    for (var dt = 0; dt < O.length; dt++) {
                        var pt = a[z].querySelector('.ladi-element .ladi-form-item-container input[name="' + O[dt] + '"]');
                        e.isEmpty(pt) || pt.addEventListener("focusout", j);
                    }
                }
                var ut = function (t, i) {
                    for (X = i, z = 0; z < a.length; z++) {
                        var n = e.findAncestor(a[z], "ladi-element");
                        !e.isEmpty(e.runtime.eventData[n.id]) && e.runtime.eventData[n.id]["option.form_auto_complete"] && t.forEach(K);
                    }
                };
                ut(e.copy(S).except(e.runtime.list_set_value_name_country));
                e.runtime.tmp.runAfterLocation.push(function () {
                    var t = "",
                        i = "",
                        n = "",
                        r = "",
                        o = null,
                        s = function (t, e) {
                            var i = "" + o[t].name,
                                a = "" + o[e].name;
                            try {
                                return i.localeCompare(a);
                            } catch (t) {}
                            return i == a ? 0 : i > a ? 1 : -1;
                        },
                        l = function (a) {
                            var n = window.LadiLocation[i].data[a];
                            e.isEmpty(n) || (t += '<option value="' + n.id + ":" + n.name + '">' + n.name + "</option>");
                        },
                        c = function (t) {
                            var i = window.LadiLocation[t.target.getAttribute("data-country")].data[t.target.value.split(":")[0]];
                            if (((n = ""), !e.isEmpty(i))) {
                                var a = Object.keys(i.data);
                                (o = i.data),
                                    a.sort(s),
                                    a.forEach(function (t) {
                                        var e = i.data[t];
                                        n += '<option value="' + e.id + ":" + e.name + '">' + e.name + "</option>";
                                    });
                            }
                            var r = e.findAncestor(t.target, "ladi-element");
                            if (!e.isEmpty(r)) {
                                var l = r.querySelector('select[name="district"]');
                                e.isEmpty(l) || (l.setAttribute("data-selected", ""), (l.innerHTML = l.querySelector("option").outerHTML + n));
                                var c = r.querySelector('select[name="ward"]');
                                e.isEmpty(c) || (c.setAttribute("data-selected", ""), (c.innerHTML = c.querySelector("option").outerHTML)), e.reloadFeeShipping({ target: c });
                            }
                        },
                        d = function (t) {
                            var i = e.findAncestor(t.target, "ladi-element");
                            if (!e.isEmpty(i)) {
                                var a = i.querySelector('select[name="ward"]');
                                if (!e.isEmpty(a)) {
                                    a.setAttribute("data-selected", ""), (r = "");
                                    var n = i.querySelector('select[name="state"]');
                                    if (!e.isEmpty(n)) {
                                        var l = n.getAttribute("data-selected");
                                        if (!e.isEmpty(l)) {
                                            l = l.split(":")[0];
                                            var c = window.LadiLocation[n.getAttribute("data-country")].data[l];
                                            if (!e.isEmpty(c)) {
                                                var d = c.data[t.target.value.split(":")[0]];
                                                if (!e.isEmpty(d)) {
                                                    var p = Object.keys(d.data);
                                                    (o = d.data),
                                                        p.sort(s),
                                                        p.forEach(function (t) {
                                                            var e = d.data[t];
                                                            r += '<option value="' + e.id + ":" + e.name + '">' + e.name + "</option>";
                                                        });
                                                }
                                            }
                                        }
                                    }
                                    a.innerHTML = a.querySelector("option").outerHTML + r;
                                }
                                e.reloadFeeShipping({ target: a });
                            }
                        },
                        p = function (t) {
                            var i = e.findAncestor(t.target, "ladi-element");
                            if (!e.isEmpty(i)) {
                                var a = i.querySelector('select[name="ward"]');
                                e.reloadFeeShipping({ target: a });
                            }
                        };
                    for (z = 0; z < a.length; z++) {
                        var u = a[z].querySelectorAll('.ladi-element .ladi-form-item-container [name="state"]'),
                            m = 0,
                            _ = null;
                        for (m = 0; m < u.length; m++)
                            if (
                                ((_ = e.findAncestor(u[m], "ladi-element")), !e.isEmpty(_) && ((i = e.runtime.eventData[_.id]["option.input_country"]), !e.isEmpty(i) && ((t = ""), (i = i.split(":")[0]), !e.isEmpty(window.LadiLocation[i]))))
                            ) {
                                var y = window.LadiLocation[i].data,
                                    g = Object.keys(y);
                                (o = y),
                                    g.sort(s),
                                "VN" == i && ((g = g.except(["201", "202", "224", "220", "203"])), (g = ["201", "202", "224", "220", "203"].concat(g))),
                                    g.forEach(l),
                                    (u[m].innerHTML = u[m].querySelector("option").outerHTML + t),
                                    u[m].setAttribute("data-country", i),
                                    u[m].addEventListener("change", c);
                            }
                        var f = a[z].querySelectorAll('.ladi-element .ladi-form-item-container [name="district"]');
                        for (m = 0; m < f.length; m++) f[m].addEventListener("change", d);
                        var h = a[z].querySelectorAll('.ladi-element .ladi-form-item-container [name="ward"]');
                        for (m = 0; m < h.length; m++) h[m].addEventListener("change", p);
                    }
                }),
                    e.runtime.tmp.runAfterLocation.push(function () {
                        ut(N, !0);
                    }),
                    (e.runtime.tmp.buttonAddToCartClick = H);
            },
            j = function () {
                for (
                    var t = document.querySelectorAll(".ladi-form .ladi-element .ladi-form-control-file"),
                        i = function (t) {
                            var i = t.target,
                                a = document.getElementById("input-file-tmp");
                            e.isEmpty(a) &&
                            (((a = document.createElement("input")).id = "input-file-tmp"),
                                (a.multiple = !0),
                                (a.type = "file"),
                                (a.className = "ladi-hidden"),
                                a.setAttribute("accept", ".jpg, .jpeg, .png, .gif, .svg, .ico, .mp3, .mp4, .ttf, .otf, .woff2, .txt, .doc, .docx, .xls, .xlsx, .pdf"),
                                document.body.appendChild(a),
                                a.addEventListener("change", function (t) {
                                    !(function (t, i, a) {
                                        if (i.length > e.const.FORM_UPLOAD_FILE_LENGTH) e.showMessage(e.const.LANG.FORM_UPLOAD_FILE_MAX_LENGTH_ERROR, { max_length: e.const.FORM_UPLOAD_FILE_LENGTH });
                                        else {
                                            for (var n = new FormData(), r = 0, o = 0; o < i.length; o++) (r += i[o].size), n.append("file[]", i[o]);
                                            if (r > 1024 * e.const.FORM_UPLOAD_FILE_SIZE * 1024) e.showMessage(e.const.LANG.FORM_UPLOAD_FILE_MAX_SIZE_ERROR, { max_size: e.const.FORM_UPLOAD_FILE_SIZE });
                                            else {
                                                var s = { ladipage_id: e.runtime.ladipage_id, lang: e.runtime.lang };
                                                n.append("json_data", JSON.stringify(s)),
                                                    e.showLoadingBlur(),
                                                    e.sendRequest("POST", e.const.API_FILE_UPLOAD, n, !0, null, function (i, a, n) {
                                                        if (n.readyState == XMLHttpRequest.DONE) {
                                                            if ((e.hideLoadingBlur(), 200 == a))
                                                                try {
                                                                    var r = JSON.parse(i);
                                                                    if (200 == r.code) {
                                                                        var o = [],
                                                                            s = [];
                                                                        return (
                                                                            r.data.success.forEach(function (t) {
                                                                                o.push(t.name), s.push({ id: t._id, path: t.path, name: t.name });
                                                                            }),
                                                                                (t.value = o.length > 0 ? "[" + o.join(", ") + "]" : ""),
                                                                                void t.setAttribute("data-path-file", JSON.stringify(s))
                                                                        );
                                                                    }
                                                                    if (!e.isEmpty(r.message)) return void e.showMessage(r.message);
                                                                } catch (t) {}
                                                            e.showMessage(e.const.LANG.REQUEST_SEND_ERROR);
                                                        }
                                                    }),
                                                e.isFunction(a) && a();
                                            }
                                        }
                                    })(i, t.target.files, function () {
                                        t.target.parentElement.removeChild(t.target);
                                    });
                                })),
                                a.click();
                        },
                        a = 0;
                    a < t.length;
                    a++
                ) {
                    var n = t[a],
                        r = e.findAncestor(n, "ladi-form");
                    r = e.findAncestor(r, "ladi-element");
                    var o = e.runtime.eventData[r.id];
                    !e.isEmpty(o) && o["option.form_send_ladipage"] && ((n.readOnly = !0), n.style.setProperty("cursor", "pointer"), n.addEventListener("click", i));
                }
            },
            W = function (t) {
                if (e.runtime.isClient && !e.runtime.isDesktop && !e.isEmpty(e.runtime.bodyFontSize)) {
                    var i = (parseFloatLadiPage(getComputedStyle(document.body).fontSize) || 0) / e.runtime.bodyFontSize;
                    if (1 != i)
                        for (var a = document.querySelectorAll(".ladi-paragraph, .ladi-list-paragraph, .ladi-headline, .ladi-countdown, .ladi-form, .ladi-table, .ladi-spin-lucky"), n = 0; n < a.length; n++) {
                            var r = (parseFloatLadiPage(getComputedStyle(a[n]).fontSize) || 0) / (i * i);
                            a[n].style.setProperty("font-size", r + "px");
                        }
                    else
                        t > Date.now() &&
                        e.runTimeout(function () {
                            W(t);
                        }, 100);
                }
            },
            z = function (t) {
                var i = null;
                return e.isEmpty(t) || (i = t.classList.contains("no-value") ? null : t.getAttribute("data-value")), (i = e.isEmpty(i) ? "" : i);
            },
            X = function (t, i) {
                var a = t.querySelectorAll(".ladi-form-label-item");
                i = e.isEmpty(i) ? "" : i;
                for (var n = 0; n < a.length; n++) {
                    z(a[n]) == i ? a[n].classList.add("selected") : a[n].classList.remove("selected");
                }
            },
            K = function (t) {
                var e = t.querySelector(".ladi-form-label-item.selected");
                return z(e);
            },
            J = function (t, i) {
                var a = t.target;
                if (a.classList.contains("disabled"))
                    for (var n = e.findAncestor(a, "ladi-element").querySelectorAll(".ladi-form-label-item"), r = 0; r < n.length; r++)
                        n[r].classList.contains("no-value") ? n[r].classList.add("selected") : n[r].classList.remove("selected"), n[r].classList.remove("disabled");
                var o = z(a);
                !t.is_fire_event && a.classList.contains("selected") && (o = "");
                var s = e.findAncestor(a, "ladi-form-label-container");
                X(s, o), e.isFunction(i) && i(s);
            },
            Z = function (i, a, n, r) {
                if ("form" == a) {
                    var o = e.runtime.eventData[i];
                    if (!e.isEmpty(o) && o["option.is_add_to_cart"]) {
                        var s = document.getElementById(i);
                        if (!e.isEmpty(s) && (!n || e.isEmpty(e.findAncestor(s, "ladi-collection-item")))) {
                            var l = s.querySelector('[data-variant="true"]');
                            if (!e.isEmpty(l)) {
                                var c = e.runtime.eventData[l.id];
                                if (!e.isEmpty(c)) {
                                    var d = o["option.product_type"],
                                        p = o["option.product_id"];
                                    if (!e.isEmpty(d) && !e.isEmpty(p)) {
                                        var u = e.generateVariantProduct(o, !1, null, null, null, null, !0, !0, function (t) {
                                            Z(i, a, n, r);
                                        });
                                        if (!(e.isEmpty(u) || e.isEmpty(u.store_info) || e.isEmpty(u.product))) {
                                            var m = e.generateVariantProduct(o, !0, c["option.product_variant_type"], c["option.product_variant_title"], c["option.product_variant_price"], c["option.input_tabindex"], t, !0, function (t) {
                                                    Z(i, a, n, r);
                                                }),
                                                _ = function (t) {
                                                    e.updateProductVariantSelectOption(t, o, c, r, function () {
                                                        if (r) {
                                                            var a = e.generateVariantProduct(o, !1, null, null, null, null, !0, !0),
                                                                n = e.getProductVariantId(t.target, a.product);
                                                            if (!e.isArray(a.product.variants)) return;
                                                            var s = a.product.variants.find(function (t) {
                                                                return t.product_variant_id == n;
                                                            });
                                                            if (e.isEmpty(s)) return;
                                                            for (var l = document.querySelectorAll("#POPUP_PRODUCT .ladi-element"), c = 0; c < l.length; c++) l[c].id != i && e.runtime.tmp.runLadiSaleProductKey(l[c].id, !1, !0, s, a);
                                                        } else e.runtime.tmp.generateLadiSaleProduct(!1, !0, t);
                                                    });
                                                },
                                                y = function (t) {
                                                    J(t, function (t) {
                                                        _({ target: t });
                                                    });
                                                };
                                            e.showParentVisibility(l, function () {
                                                for (var t = l.clientHeight, i = t, a = l.querySelectorAll("select.ladi-form-control"), n = {}, r = 0; r < a.length; r++)
                                                    n[a[r].getAttribute("data-store-id") + "_" + a[r].getAttribute("data-product-id") + "_" + a[r].getAttribute("data-product-option-id")] = a[r].value;
                                                var d = l.querySelectorAll(".ladi-form-label-container");
                                                for (r = 0; r < d.length; r++) n[d[r].getAttribute("data-store-id") + "_" + d[r].getAttribute("data-product-id") + "_" + d[r].getAttribute("data-product-option-id")] = K(d[r]);
                                                l.innerHTML = m;
                                                for (var p = null, u = null, g = l.querySelectorAll("select.ladi-form-control"), f = 0; f < g.length; f++)
                                                    g[f].addEventListener("change", _),
                                                        (p = n[g[f].getAttribute("data-store-id") + "_" + g[f].getAttribute("data-product-id") + "_" + g[f].getAttribute("data-product-option-id")]),
                                                    e.isNull(p) && ((u = g[f].querySelector("option")), e.isEmpty(u) || (p = u.getAttribute("value"))),
                                                        (g[f].value = p);
                                                var h = l.querySelectorAll(".ladi-form-label-container");
                                                for (f = 0; f < h.length; f++) {
                                                    for (var v = h[f].querySelectorAll(".ladi-form-label-item"), E = 0; E < v.length; E++) e.tapEventListener(v[E], y);
                                                    (p = n[h[f].getAttribute("data-store-id") + "_" + h[f].getAttribute("data-product-id") + "_" + h[f].getAttribute("data-product-option-id")]),
                                                    e.isNull(p) && ((u = v[1]), e.isEmpty(u) || (p = z(u))),
                                                        X(h[f], p);
                                                }
                                                if ((e.updateProductVariantSelectOptionFirst(o, c, l), c["option.product_variant_type"] != e.const.PRODUCT_VARIANT_TYPE.combined))
                                                    l.style.setProperty("height", "auto"),
                                                        (i = l.clientHeight),
                                                        l.style.removeProperty("height"),
                                                    i > 0 && t != i && (l.style.setProperty("height", i + "px"), e.updateHeightElement(!0, l, s, t, i));
                                                else if (!e.isEmpty(o["option.product_variant_id"]))
                                                    for (var P = 0; P < g.length; P++) {
                                                        var A = g[P].querySelector('option[data-product-variant-id="' + o["option.product_variant_id"] + '"]');
                                                        e.isEmpty(A) || g[P].value == A.getAttribute("value") || ((g[P].value = A.getAttribute("value")), e.fireEvent(g[P], "change"));
                                                    }
                                            });
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            },
            Q = function (i, a, n) {
                if (e.isObject(a) && e.isObject(a.variant) && e.isObject(a.product)) {
                    var r = a.variant.src;
                    if ((e.isEmpty(r) && ((r = a.product.image), e.isObject(r) && (r = r.src)), !e.isEmpty(r))) {
                        !e.isString(r) || r.startsWith("http://") || r.startsWith("https://") || r.startsWith("//") || (r = "https://" + e.const.STATIC_W_DOMAIN + "/" + r);
                        var o = e.findAncestor(i, "ladi-collection-item"),
                            s = [],
                            l = 0,
                            c = null;
                        if (e.isEmpty(o)) {
                            var d = document.querySelectorAll("[data-runtime-id]");
                            for (l = 0; l < d.length; l++)
                                (o = e.findAncestor(d[l], "ladi-collection-item")),
                                e.isEmpty(o) && ((c = e.runtime.eventData[d[l].id]), e.isEmpty(c) || c["option.product_type"] != n["option.product_type"] || c["option.product_id"] != n["option.product_id"] || s.push(d[l]));
                        } else s = o.querySelectorAll("[data-runtime-id]");
                        for (l = 0; l < s.length; l++)
                            if (((c = e.runtime.eventData[s[l].id]), !e.isEmpty(c) && !e.isEmpty(c["option.product_mapping_name"]))) {
                                var p = s[l].getElementsByClassName("ladi-gallery-view")[0],
                                    u = e.getOptimizeImage(r, p.clientWidth, p.clientHeight, !0, !1, !1, t);
                                u = 'url("' + u + '")';
                                var m = e.getOptimizeImage(r, 0, 0, !0, !1, !1, t);
                                m = 'url("' + m + '")';
                                for (var _ = p.getElementsByClassName("ladi-gallery-view-item"), y = 0; y < _.length; y++)
                                    if (u == getComputedStyle(_[y]).backgroundImage || m == getComputedStyle(_[y]).backgroundImage) {
                                        var g = (parseFloatLadiPage(_[y].getAttribute("data-index")) || 0) + 1;
                                        window.ladi(s[l].id, s[l]).index(g);
                                    }
                            }
                    }
                }
            },
            $ = function (i, a, n, r, o, s, l, c) {
                var d = e.runtime.eventData[i];
                if (!e.isEmpty(d)) {
                    var p = d["option.product_mapping_name"],
                        u = !e.isEmpty(p),
                        _ = d.type,
                        y = JSON.stringify(d),
                        g = null,
                        f = null;
                    if (s) g = o.product[p];
                    else if (e.isEmpty(r)) {
                        if (e.isEmpty(d) || e.isEmpty(d["option.product_type"]) || e.isEmpty(d["option.product_id"]) || e.isEmpty(p)) return;
                        var h = d["option.product_variant_id"],
                            v = !1;
                        if (
                            e.isEmpty(h) &&
                            (a &&
                            (v = !(function () {
                                for (var t = !1, i = 0; i < m.length; i++) {
                                    var a = e.runtime.eventData[m[i]];
                                    if ("form" == a.type && a["option.product_type"] == d["option.product_type"] && a["option.product_id"] == d["option.product_id"]) {
                                        t = !0;
                                        break;
                                    }
                                }
                                return t;
                            })()),
                                !e.isEmpty(l))
                        ) {
                            if (d["option.product_id"] != l.target.getAttribute("data-product-id")) return;
                            d["option.product_type"];
                            var E = e.generateVariantProduct(d, !1, null, null, null, null, !0, !0, function (t) {
                                $(i, a, n, r, o, !1, l);
                            });
                            e.isObject(E) && (h = e.getProductVariantId(l.target, E.product));
                        }
                        if (
                            y ===
                            (g = (f = e.generateProductKey(!0, y, !0, d, v, h, r, function (t) {
                                $(i, a, n, r, o, s, l);
                            })).value)
                        )
                            return;
                    } else {
                        if ("form" == _ && d["option.is_add_to_cart"]) return (d["option.product_id"] = r.product_id), (d["option.product_variant_id"] = r.product_variant_id), void Z(i, _, !1, !0);
                        if (!u) return;
                        g = (g = (f = e.generateProductKey(!0, null, !0, d, !1, r.product_variant_id, r)).value) || "";
                    }
                    var P = null,
                        A = null,
                        L = null;
                    if ("headline" == _ || "paragraph" == _) {
                        var b = c ? "ladi-html" : null;
                        window.ladi(i).value(e.isNull(g) ? "" : g, b);
                    }
                    if ("image" == _) {
                        if (((P = document.getElementById(i)), e.isEmpty(P))) return;
                        (L = e.getOptimizeImage(g, P.clientWidth, P.clientHeight, !0, !1, !1, t)), (A = "style_add_to_cart_image_" + i);
                        var w = "";
                        (w = e.isEmpty(L) ? "#" + i + "  > .ladi-image > .ladi-image-background {background-image: none;}" : "#" + i + '  > .ladi-image > .ladi-image-background {background-image: url("' + L + '");}'),
                            e.createStyleElement(A, w);
                    }
                    if ("gallery" == _) {
                        if (!e.isArray(g)) return;
                        if (((P = document.getElementById(i)), e.isEmpty(P))) return;
                        if (n && "true" == P.getAttribute("data-loaded")) return void Q(P, f, d);
                        for (var S = P.getElementsByClassName("ladi-gallery-view")[0], T = P.getElementsByClassName("ladi-gallery-view-item"); T.length < g.length; ) {
                            var O = e.createTmpElement("div", '<div class="ladi-gallery-view-item" data-index="' + T.length + '"></div>', null, !0);
                            P.getElementsByClassName("ladi-gallery-view")[0].appendChild(O);
                        }
                        for (; T.length > g.length; ) T[T.length - 1].parentElement.removeChild(T[T.length - 1]);
                        for (
                            var C = P.getElementsByClassName("ladi-gallery-control-item"),
                                N = function (t) {
                                    Y(t, P);
                                };
                            C.length < g.length;

                        ) {
                            var I = e.createTmpElement("div", '<div class="ladi-gallery-control-item" data-index="' + C.length + '"></div>', null, !0);
                            I.addEventListener("click", N), P.getElementsByClassName("ladi-gallery-control-box")[0].appendChild(I);
                        }
                        for (; C.length > g.length; ) C[C.length - 1].parentElement.removeChild(C[C.length - 1]);
                        A = "style_add_to_cart_gallery_" + i;
                        var k = "";
                        g.length <= 1 &&
                        ((k += "#" + i + " .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow {display: none;}"),
                            (k += "#" + i + " > .ladi-gallery > .ladi-gallery-view {height: 100%;}"),
                            (k += "#" + i + " > .ladi-gallery > .ladi-gallery-control {display: none;}"));
                        var x = P.getElementsByClassName("ladi-gallery-control-item")[0];
                        g.forEach(function (a, n) {
                            (L = e.getOptimizeImage(a.src, S.clientWidth, S.clientHeight, !0, !1, !1, t)),
                                (k += "#" + i + ' .ladi-gallery .ladi-gallery-view-item[data-index="' + n + '"] {background-image: url("' + L + '");}'),
                                (L = e.getOptimizeImage(a.src, x.clientWidth, x.clientHeight, !0, !1, !1, t)),
                                (k += "#" + i + ' .ladi-gallery .ladi-gallery-control-item[data-index="' + n + '"] {background-image: url("' + L + '");}');
                        }),
                            P.setAttribute("data-max-item", g.length),
                            P.setAttribute("data-loaded", !0),
                            e.createStyleElement(A, k);
                    }
                }
            },
            tt = function (t) {
                var i = { type: "POPUPX", iframe_id: e.runtime.tmp.popupx_iframe_id };
                Object.keys(t).forEach(function (e) {
                    i[e] = t[e];
                }),
                    e.postMessageWindow(window.parent, i, "*");
            },
            et = function (t) {
                e.runtime.tmp.popupx_is_desktop || ((window.outerWidth = parseFloatLadiPage(t) || window.outerWidth), (window.ladi_screen_width = window.outerWidth), e.isFunction(window.ladi_viewport) && window.ladi_viewport());
            },
            it = function (t, i, a, n) {
                var r = e.isEmpty(e.runtime.tmp.popupx_current_element_id);
                (e.runtime.tmp.popupx_current_element_id = t), !i || r || a || n || T("PageView", {});
            },
            at = function (t, i) {
                for (var a = !1, n = !1, r = document.querySelectorAll("#" + e.runtime.builder_section_popup_id + " .ladi-container > .ladi-element"), o = 0; o < r.length; o++)
                    "none" != getComputedStyle(r[o]).display && (r[o].id == t && (a = !0), e.runRemovePopup(r[o].id, !0, null, !1, !0));
                for (r = document.querySelectorAll(".ladi-section:not(#" + e.runtime.builder_section_popup_id + ")"), o = 0; o < r.length; o++)
                    "none" != getComputedStyle(r[o]).display && (r[o].id == t && (n = !0), window.ladi(r[o].id).hide(!0));
                return { isCurrentPopup: a, isCurrentSection: n };
            },
            nt = function (t, i) {
                var a = e.runtime.eventData[t],
                    n = document.getElementById(t),
                    r = null,
                    o = null,
                    s = !1,
                    l = !1,
                    c = { width_device: e.runtime.desktop_width },
                    d = document.getElementById("style_container_desktop");
                if (((e.isEmpty(d) || "print" == d.getAttribute("media")) && (c = { width_device: e.runtime.mobile_width }), !e.isEmpty(a) && !e.isEmpty(n))) {
                    var p = getComputedStyle(n);
                    if ("popup" == a.type) {
                        (r = {}), (s = (o = at(t)).isCurrentPopup), (l = o.isCurrentSection);
                        var u = a[e.runtime.device + ".option.popup_position"];
                        ["width", "height", "position", "margin", "top", "left", "bottom", "right", "z-index"].forEach(function (t) {
                            r[t] = p[t];
                        }),
                            et(r.width),
                            (c.width = r.width);
                        var m = null;
                        return (
                            u == e.const.POSITION_TYPE.default && (m = a[e.runtime.device + ".option.popup_backdrop"]),
                                tt({ id: t, position: u, data_backdrop: m, data_scale: c, is_opacity: !s, set_scroll_popup: !0, dimension: r, action: { type: "set_iframe_dimension" } }),
                                window.ladi(t).show(!0),
                                it(t, i, s, l),
                                !0
                        );
                    }
                    if ("section" == a.type) {
                        if (((s = (o = at(t)).isCurrentPopup), (l = o.isCurrentSection), a[e.runtime.device + ".option.sticky"])) {
                            r = { height: p.height };
                            var _ = n.getElementsByClassName("ladi-container")[0],
                                y = getComputedStyle(_);
                            et(y.width),
                                (c.width = y.width),
                                (c.is_sticky_bar = !0),
                                tt({ id: t, data_scale: c, dimension: r, element: a, device: e.runtime.device, action: { type: "set_iframe_sticky" } }),
                                window.ladi(t).show(!0),
                                it(t, i, s, l);
                        }
                        return !0;
                    }
                }
                return !1;
            },
            rt = function (t, i) {
                var a = e.runtime.eventData[t],
                    n = document.getElementById(t),
                    r = null;
                if (!e.isEmpty(a) && !e.isEmpty(n)) {
                    var o = getComputedStyle(n),
                        s = at(t),
                        l = s.isCurrentPopup,
                        c = s.isCurrentSection,
                        d = { width_device: e.runtime.desktop_width },
                        p = document.getElementById("style_container_desktop");
                    if (((e.isEmpty(p) || "print" == p.getAttribute("media")) && (d = { width_device: e.runtime.mobile_width }), (r = { width: o.width, height: o.height }), "popup" == a.type && (d.width = r.width), "section" == a.type)) {
                        var u = n.getElementsByClassName("ladi-container")[0],
                            m = getComputedStyle(u);
                        (r.width = m.width), (d.width = m.width), (d.is_sticky_bar = !0);
                    }
                    return et(r.width), tt({ id: t, data_scale: d, dimension: r, action: { type: "set_iframe_dimension" } }), window.ladi(t).show(!0), it(t, i, l, c), !0;
                }
                return !1;
            },
            ot = function (t) {
                for (var i = ["style_element_desktop", "style_container_desktop", "style_ladi_media_desktop"], a = ["style_element_mobile", "style_container_mobile", "style_ladi_media_mobile"], n = 0; n < i.length; n++) {
                    var r = document.getElementById(i[n]);
                    e.isEmpty(r) || (t ? r.removeAttribute("media") : r.setAttribute("media", "print"));
                }
                for (n = 0; n < a.length; n++) {
                    var o = document.getElementById(a[n]);
                    e.isEmpty(o) || (t ? o.setAttribute("media", "print") : o.removeAttribute("media"));
                }
            };
        (e.runtime.tmp.generateLadiSaleProduct = function (t, i, a) {
            var n = function () {
                    m.forEach(function (n) {
                        e.runtime.eventData[n];
                        $(n, t, i, null, null, !1, a);
                    });
                },
                r = function (t) {
                    if (t && e.isEmpty(a)) n();
                    else {
                        var i = a.target,
                            o = e.findAncestor(i, "ladi-element");
                        if (!e.isEmpty(o)) {
                            var s = e.findAncestor(o, "ladi-form");
                            if (!e.isEmpty(s)) {
                                var l = e.findAncestor(s, "ladi-element");
                                if (!e.isEmpty(l)) {
                                    var c = e.runtime.eventData[l.id];
                                    if (!e.isEmpty(c)) {
                                        var d = c["option.product_id"];
                                        if (!e.isEmpty(d)) {
                                            var p = e.generateVariantProduct(c, !1, null, null, null, null, !0, !0, function (t) {
                                                r(!1);
                                            });
                                            if (e.isObject(p) && e.isObject(p.store_info) && e.isObject(p.product)) {
                                                var u = e.getProductVariantIndex(l.id, c),
                                                    m = document.querySelectorAll('[data-variant="true"]');
                                                if (-1 != u)
                                                    for (var _ = 0; _ < m.length; _++)
                                                        if (m[_].id != o.id && e.isEmpty(e.findAncestor(m[_], "ladi-collection"))) {
                                                            var y = e.runtime.eventData[m[_].id];
                                                            if (!e.isEmpty(y)) {
                                                                var g = e.findAncestor(m[_], "ladi-form");
                                                                if (!e.isEmpty(g)) {
                                                                    var f = e.findAncestor(g, "ladi-element");
                                                                    if (!e.isEmpty(f)) {
                                                                        var h = e.runtime.eventData[f.id];
                                                                        if (!e.isEmpty(h) && !e.isEmpty(h["option.product_variant_id"])) continue;
                                                                    }
                                                                    var v = null,
                                                                        E = null,
                                                                        P = null,
                                                                        A = 0;
                                                                    if (y["option.product_variant_type"] == e.const.PRODUCT_VARIANT_TYPE.combobox) {
                                                                        if (!e.isArray(p.product.variants)) continue;
                                                                        if (((E = p.product.variants[u]), e.isString(E.option_ids)))
                                                                            for (P = E.option_ids.split("/"), A = 0; A < P.length; A++)
                                                                                (v = document.querySelector("#" + m[_].id + ' .ladi-form-item select[data-product-option-id="' + P[A] + '"]')),
                                                                                e.isEmpty(v) ||
                                                                                v.getAttribute("data-store-id") != p.store_info.id ||
                                                                                v.getAttribute("data-product-id") != E.product_id ||
                                                                                (v.value = E["option" + (A + 1)]);
                                                                    }
                                                                    if (y["option.product_variant_type"] == e.const.PRODUCT_VARIANT_TYPE.label) {
                                                                        if (!e.isArray(p.product.variants)) continue;
                                                                        if (((E = p.product.variants[u]), e.isString(E.option_ids)))
                                                                            for (P = E.option_ids.split("/"), A = 0; A < P.length; A++)
                                                                                (v = document.querySelector("#" + m[_].id + ' .ladi-form-label-container[data-product-option-id="' + P[A] + '"]')),
                                                                                e.isEmpty(v) ||
                                                                                v.getAttribute("data-store-id") != p.store_info.id ||
                                                                                v.getAttribute("data-product-id") != E.product_id ||
                                                                                e.runtime.tmp.updateLabelValue(v, E["option" + (A + 1)]);
                                                                    }
                                                                    if (y["option.product_variant_type"] == e.const.PRODUCT_VARIANT_TYPE.combined) {
                                                                        if (
                                                                            ((v = m[_].querySelector("select.ladi-form-control")),
                                                                            e.isEmpty(v) || v.getAttribute("data-store-id") != p.store_info.id || v.getAttribute("data-product-id") != p.product.product_id)
                                                                        )
                                                                            continue;
                                                                        var L = e.getProductVariantId(o, p);
                                                                        if (!e.isEmpty(L)) {
                                                                            var b = v.querySelector('option[data-product-variant-id="' + L + '"]');
                                                                            e.isEmpty(b) || (u = b.getAttribute("value"));
                                                                        }
                                                                        v.value = u + "";
                                                                    }
                                                                }
                                                            }
                                                        }
                                                for (var w = 0; w < m.length; w++) {
                                                    var S = e.findAncestor(m[w], "ladi-form");
                                                    if (!e.isEmpty(S)) {
                                                        var T = S.querySelector('input[name="quantity"]');
                                                        e.isEmpty(T) || e.fireEvent(T, "input");
                                                    }
                                                }
                                                n();
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                };
            r(!0);
        }),
            (e.runtime.tmp.generateCart = function () {
                m.forEach(function (i) {
                    !(function (i, a) {
                        if ("cart" == a) {
                            var n = e.runtime.eventData[i];
                            if (!e.isEmpty(n)) {
                                var r = document.getElementById(i);
                                e.isEmpty(r) ||
                                e.showParentVisibility(r, function () {
                                    var i = parseFloatLadiPage(getComputedStyle(r).height) || 0,
                                        a = parseFloatLadiPage(r.getAttribute("data-height")) || 0;
                                    r.hasAttribute("data-height") || (r.setAttribute("data-height", i), (a = i));
                                    var o = e.generateHtmlCart(n["option.cart_layout"], n["option.message_no_product"], t);
                                    r.getElementsByClassName("ladi-cart")[0].innerHTML = o;
                                    var s = r.getElementsByClassName("ladi-cart")[0].scrollHeight;
                                    if (i != (s = s < a ? a : s)) {
                                        r.style.setProperty("height", s + "px");
                                        var l = e.findAncestor(r.parentElement, "ladi-element");
                                        e.isEmpty(l) && (l = e.findAncestor(r.parentElement, "ladi-section")), e.updateHeightElement(!0, r, l, i, s);
                                    }
                                });
                            }
                        }
                    })(i, e.runtime.eventData[i].type);
                });
            }),
            (e.runtime.tmp.runButtonSectionClose = k),
            (e.runtime.tmp.runOptionAction = N),
            (e.runtime.tmp.runOptionHover = I),
            (e.runtime.tmp.runTrackingAnalytics = T),
            (e.runtime.tmp.runLadiSaleProductKey = $),
            (e.runtime.tmp.eventClickGalleryControlItem = Y),
            (e.runtime.tmp.runGallery = B),
            (e.runtime.tmp.setGalleryStart = H),
            (e.runtime.tmp.updateImageGalleryProduct = Q),
            (e.runtime.tmp.runOptionCountdown = x),
            (e.runtime.tmp.runOptionCountdownItem = D),
            (e.runtime.tmp.getOptionLabelValue = z),
            (e.runtime.tmp.updateLabelValue = X),
            (e.runtime.tmp.getLabelValue = K),
            (e.runtime.tmp.clickLabelProductChangeCallback = J),
            (e.runtime.tmp.fireEventLabelChange = function (t) {
                var i = t.querySelector(".ladi-form-label-item.selected");
                e.isEmpty(i) || e.fireEvent(i, "click", { is_fire_event: !0 });
            }),
            (e.runtime.tmp.showPopupX = nt),
            (e.runtime.tmp.runActionPopupX = tt);
        var st = function () {
            var i;
            e.runtime.tmp.generateLadiSaleProduct(!0),
            e.runtime.shopping && e.createCartData(),
                e.loadDataset(null, null, null, null, null, !0, t),
                m.forEach(function (i) {
                    var a,
                        n,
                        r = e.runtime.eventData[i],
                        o = LadiPageApp[r.type + e.const.APP_RUNTIME_PREFIX];
                    e.isEmpty(o)
                        ? (!(function (t, i, a, n, r, o) {
                            var s = document.getElementById(t);
                            if (!e.isEmpty(s) && (k(t), "section" == i && !e.isEmpty(r) && !e.isEmpty(o))) {
                                var l = s.getElementsByClassName("ladi-section-background")[0];
                                e.isEmpty(l) ||
                                (e.runtime.list_scroll_func[t] = function () {
                                    if ((!e.runtime.isDesktop || a == e.const.BACKGROUND_STYLE.video) && (e.runtime.isDesktop || n == e.const.BACKGROUND_STYLE.video)) {
                                        var i = "",
                                            s = t + "_background_video";
                                        r == e.const.VIDEO_TYPE.youtube &&
                                        ((i =
                                            '<iframe id="' +
                                            s +
                                            '" class="ladi-section-background-video" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>'),
                                            (l.innerHTML += i),
                                            e.runEventPlayVideo(s, r, o, !0, !0, !1)),
                                        r == e.const.VIDEO_TYPE.direct &&
                                        ((i = '<video id="' + s + '" class="ladi-section-background-video" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;"></video>'),
                                            (l.innerHTML += i),
                                            e.runEventPlayVideo(s, r, o, !0, !0, !1));
                                    }
                                });
                            }
                        })(i, r.type, r[e.const.DESKTOP + ".option.background-style"], r[e.const.MOBILE + ".option.background-style"], r["option.background_video.video_type"], r["option.background_video.video_value"]),
                            N(null, i, r.type, r),
                            (a = r.type),
                            (n = r["option.data_event"] || r["option.data_action"]),
                            e.runtime.list_loaded_func.push(function () {
                                var t = 0;
                                if ((-1 != ["headline", "paragraph", "list_paragraph"].indexOf(a) && (t = 1e3), !e.isArray(n))) {
                                    var i = e.copy(n);
                                    (n = []), e.isObject(i) && ((i.action_type = e.const.ACTION_TYPE.action), n.push(i));
                                }
                                e.runTimeout(function () {
                                    n.forEach(function (t) {
                                        t.action_type == e.const.ACTION_TYPE.action &&
                                        (t.type != e.const.DATA_ACTION_TYPE.collapse || e.isEmpty(t.action) || (!e.isNull(t.collapse_start_is_show) && t.collapse_start_is_show) || window.ladi(t.action).collapse(!1));
                                    });
                                }, t);
                            }),
                            I(null, i, r.type, r["option.data_event"] || r["option.data_hover"]),
                            (function (t, i, a, n, r, o, s) {
                                if ("video" == i && !e.isEmpty(a)) {
                                    var l = document.getElementById(t);
                                    if (!e.isEmpty(l)) {
                                        var c = function () {
                                                var i = e.runtime.eventData[t];
                                                e.isEmpty(i) || ((n = i["option.video_type"]), (a = i["option.video_value"]), (r = i["option.video_control"]));
                                            },
                                            d = (e.runtime.isDesktop && o) || (!e.runtime.isDesktop && s);
                                        if (d) {
                                            var p = function () {
                                                    c(), e.playVideo(t, n, a, r, d);
                                                },
                                                u = e.findAncestor(l, "ladi-popup");
                                            e.isEmpty(u)
                                                ? (e.runtime.list_scroll_func[t] = p)
                                                : ((u = e.findAncestor(u, "ladi-element")), e.isArray(e.runtime.list_show_popup_func[u.id]) || (e.runtime.list_show_popup_func[u.id] = []), e.runtime.list_show_popup_func[u.id].push(p));
                                        } else {
                                            var m = document.querySelectorAll("#" + t + ".preload").length > 0;
                                            m && e.playVideo(t, n, a, r, !1, m);
                                        }
                                        l.addEventListener("click", function (i) {
                                            i.stopPropagation(), c(), (n == e.const.VIDEO_TYPE.direct && "VIDEO" == i.target.tagName) || (n == e.const.VIDEO_TYPE.youtube && "IFRAME" == i.target.tagName) || e.playVideo(t, n, a, r);
                                        });
                                    }
                                }
                            })(i, r.type, r["option.video_value"], r["option.video_type"], r["option.video_control"], r[e.const.DESKTOP + ".option.video_autoplay"], r[e.const.MOBILE + ".option.video_autoplay"]),
                            (function (t, i, a, n) {
                                "popup" == i &&
                                a &&
                                ((e.isEmpty(n) || n < 0) && (n = 0),
                                    e.runTimeout(function () {
                                        window.ladi(t).show();
                                    }, 1e3 * n));
                            })(i, r.type, r["option.show_popup_welcome_page"], r["option.delay_popup_welcome_page"]),
                            x(i, null, r.type, r["option.countdown_type"], r["option.countdown_minute"], r["option.countdown_daily_start"], r["option.countdown_daily_end"], r["option.countdown_endtime"]),
                            D(i, null, r.type, r["option.countdown_item_type"]),
                            (function (t, i, a, n) {
                                if ("section" == i) {
                                    var r = document.getElementById(t);
                                    if (!e.isEmpty(r)) {
                                        var o = r.getElementsByClassName("ladi-section-arrow-down")[0];
                                        S.push(function () {
                                            if (e.isEmpty(o)) {
                                                if (e.runtime.isDesktop) {
                                                    if (e.isEmpty(a)) return void r.removeAttribute("data-opacity");
                                                    var t = (parseFloatLadiPage(a) || 0) + 50;
                                                    if (t > r.clientHeight) return void r.removeAttribute("data-opacity");
                                                    r.setAttribute("data-height", r.clientHeight), r.style.setProperty("height", t + "px"), r.classList.add("overflow-hidden");
                                                } else {
                                                    if (e.isEmpty(n)) return void r.removeAttribute("data-opacity");
                                                    var i = (parseFloatLadiPage(n) || 0) + 50;
                                                    if (i > r.clientHeight) return void r.removeAttribute("data-opacity");
                                                    r.setAttribute("data-height", r.clientHeight), r.style.setProperty("height", i + "px"), r.classList.add("overflow-hidden");
                                                }
                                                ((o = document.createElement("div")).className = "ladi-section-arrow-down"),
                                                    r.appendChild(o),
                                                    r.removeAttribute("data-opacity"),
                                                    o.addEventListener("click", function (t) {
                                                        t.stopPropagation(),
                                                            r.classList.add("transition-readmore"),
                                                            r.style.removeProperty("height"),
                                                            o.parentElement.removeChild(o),
                                                            e.runTimeout(function () {
                                                                r.classList.remove("transition-readmore"),
                                                                    r.classList.remove("overflow-hidden"),
                                                                r.clientHeight != r.getAttribute("data-height") && r.style.setProperty("height", r.getAttribute("data-height") + "px"),
                                                                    r.removeAttribute("data-height"),
                                                                    e.runTimeout(e.removeSticky, 100);
                                                            }, 1e3 * parseFloatLadiPage(getComputedStyle(r).transitionDuration));
                                                    });
                                            }
                                        });
                                    }
                                }
                            })(i, r.type, r[e.const.DESKTOP + ".option.readmore_range"], r[e.const.MOBILE + ".option.readmore_range"]),
                            (function (t, i, a) {
                                if ("form_item" == i) {
                                    var n = null;
                                    if (a == e.const.INPUT_TYPE.select || a == e.const.INPUT_TYPE.select_multiple)
                                        for (var r = document.getElementById(t).getElementsByClassName("ladi-form-control"), o = 0; o < r.length; o++)
                                            r[o].addEventListener("change", function (t) {
                                                t.target.setAttribute("data-selected", t.target.value);
                                            });
                                    if (a == e.const.INPUT_TYPE.checkbox) {
                                        n = document.getElementById(t).getElementsByClassName("ladi-form-checkbox-item");
                                        for (
                                            var s = function (t) {
                                                    t.stopPropagation();
                                                    var i = e.findAncestor(t.target, "ladi-form-checkbox-item");
                                                    e.isEmpty(i) || i.getElementsByTagName("span")[0].setAttribute("data-checked", t.target.checked);
                                                },
                                                l = function (t) {
                                                    t.stopPropagation();
                                                    var i = e.findAncestor(t.target, "ladi-form-checkbox-item");
                                                    e.isEmpty(i) || i.getElementsByTagName("input")[0].click();
                                                },
                                                c = 0;
                                            c < n.length;
                                            c++
                                        ) {
                                            var d = n[c].getElementsByTagName("input")[0];
                                            n[c].getElementsByTagName("span")[0].addEventListener("click", l), d.addEventListener("change", s);
                                        }
                                    }
                                    if (a == e.const.INPUT_TYPE.radio) {
                                        n = document.getElementById(t).getElementsByClassName("ladi-form-checkbox-item");
                                        for (
                                            var p = function (t) {
                                                    var i = e.findAncestor(t.target, "ladi-form-checkbox-item"),
                                                        a = e.findAncestor(i, "ladi-form-checkbox");
                                                    if (!e.isEmpty(a)) {
                                                        for (var n = a.querySelectorAll(".ladi-form-checkbox-item span"), r = 0; r < n.length; r++) n[r].setAttribute("data-checked", !1);
                                                        e.isEmpty(i) || i.getElementsByTagName("span")[0].setAttribute("data-checked", t.target.checked);
                                                    }
                                                },
                                                u = function (t) {
                                                    t.stopPropagation();
                                                    var i = e.findAncestor(t.target, "ladi-form-checkbox-item");
                                                    e.isEmpty(i) || i.getElementsByTagName("input")[0].click();
                                                },
                                                m = 0;
                                            m < n.length;
                                            m++
                                        ) {
                                            var _ = n[m].getElementsByTagName("input")[0];
                                            n[m].getElementsByTagName("span")[0].addEventListener("click", u), _.addEventListener("change", p);
                                        }
                                    }
                                }
                            })(i, r.type, r["option.input_type"]),
                            B(i, null, !1, r.type),
                            e.startAutoScroll(i, r.type, r[e.const.DESKTOP + ".option.auto_scroll"], r[e.const.MOBILE + ".option.auto_scroll"]),
                            Z(i, r.type, !0, !1),
                            (function (t, i) {
                                if ("form" == i) {
                                    var a = document.getElementById(t);
                                    if (!e.isEmpty(a)) {
                                        var n = a.querySelector('input[name="quantity"]');
                                        if (!e.isEmpty(n)) {
                                            var r = function (i) {
                                                if (!e.isEmpty(i.target.value)) {
                                                    var a = e.runtime.eventData[t];
                                                    if (!e.isEmpty(a) && a["option.is_add_to_cart"]) {
                                                        var n = e.generateVariantProduct(a, !1, null, null, null, null, !0, !0, function () {
                                                            r(i);
                                                        });
                                                        if (!(e.isEmpty(n) || e.isEmpty(n.store_info) || e.isEmpty(n.product))) {
                                                            var o = e.getProductVariantIndex(t, a);
                                                            if (-1 != o) {
                                                                var s = n.product.variants[o].quantity,
                                                                    l = n.product.variants[o].quantity_stock;
                                                                s = e.isNull(l) ? s : l;
                                                                var c = parseInt(i.target.value) || 0,
                                                                    d = 1;
                                                                d = n.product.variants[o].min_buy || d;
                                                                var p = n.product.variants[o].max_buy,
                                                                    u = 0,
                                                                    m = e.runtime.tmp.cart.findIndex(function (t) {
                                                                        return t.product_id == n.product.variants[o].product_id && t.product_variant_id == n.product.variants[o].product_variant_id;
                                                                    });
                                                                -1 != m && (u = e.runtime.tmp.cart[m].quantity),
                                                                d > c + u && (c = d - u),
                                                                1 == n.product.variants[o].inventory_checked && c + u > s && (c = s - u),
                                                                !e.isEmpty(p) && c + u > p && (c = p - u),
                                                                    (c = c < 1 ? 1 : c),
                                                                    i.target.setAttribute("min", d),
                                                                e.isEmpty(p) || i.target.setAttribute("max", p),
                                                                    (i.target.value = c);
                                                            }
                                                        }
                                                    }
                                                }
                                            };
                                            n.addEventListener("input", r), e.fireEvent(n, "input");
                                            var o = a.querySelectorAll("button")[0],
                                                s = a.querySelectorAll("button")[1];
                                            e.isEmpty(o) ||
                                            e.isEmpty(s) ||
                                            (o.addEventListener("click", function (t) {
                                                (n.value = (parseFloatLadiPage(n.value) || 0) - 1), e.fireEvent(n, "input");
                                            }),
                                                s.addEventListener("click", function (t) {
                                                    (n.value = (parseFloatLadiPage(n.value) || 0) + 1), e.fireEvent(n, "input");
                                                }));
                                        }
                                    }
                                }
                            })(i, r.type),
                            (function (t, i) {
                                if ("collection" == i) {
                                    var a = document.getElementById(t);
                                    if (!e.isEmpty(a)) {
                                        var n = e.runtime.eventData[t];
                                        if (!e.isEmpty(n)) {
                                            var r = n["option.collection_setting.type"],
                                                o = a.getElementsByClassName("ladi-collection")[0];
                                            if ((r == e.const.COLLECTION_TYPE.carousel && o.classList.add("carousel"), r == e.const.COLLECTION_TYPE.carousel)) {
                                                var s = document.createElement("div");
                                                s.className = "ladi-collection-arrow ladi-collection-arrow-left opacity-0";
                                                var l = document.createElement("div");
                                                (l.className = "ladi-collection-arrow ladi-collection-arrow-right opacity-0"),
                                                    o.appendChild(s),
                                                    o.appendChild(l),
                                                    s.addEventListener("click", function (i) {
                                                        i.stopPropagation();
                                                        var r = parseFloatLadiPage(a.getAttribute("data-page")) || 1;
                                                        (r = (r -= 1) < 1 ? 1 : r), e.loadCollectionData(t, n, r, !1);
                                                    }),
                                                    l.addEventListener("click", function (i) {
                                                        i.stopPropagation();
                                                        var r = parseFloatLadiPage(a.getAttribute("data-page")) || 1;
                                                        if (((r += 1), a.hasAttribute("data-max-page"))) {
                                                            var o = parseFloatLadiPage(a.getAttribute("data-max-page")) || 1;
                                                            r = r > o ? o : r;
                                                        }
                                                        e.loadCollectionData(t, n, r, !1);
                                                    });
                                            }
                                            if (r == e.const.COLLECTION_TYPE.readmore) {
                                                var c = document.createElement("div");
                                                (c.className = "ladi-collection-button-next opacity-0"),
                                                    o.appendChild(c),
                                                    c.addEventListener("click", function (i) {
                                                        i.stopPropagation();
                                                        var r = parseFloatLadiPage(a.getAttribute("data-page")) || 1;
                                                        if (((r += 1), a.hasAttribute("data-max-page"))) {
                                                            var o = parseFloatLadiPage(a.getAttribute("data-max-page")) || 1;
                                                            r = r > o ? o : r;
                                                        }
                                                        e.loadCollectionData(t, n, r, !1, !0);
                                                    });
                                            }
                                            e.loadCollectionData(t, n, 1, !0);
                                        }
                                    }
                                }
                            })(i, r.type),
                            (function (t, i, a, n) {
                                if ("survey" == i) {
                                    var r = document.getElementById(t);
                                    if (!e.isEmpty(r)) {
                                        a && r.setAttribute("data-multiple", !0);
                                        var o = r.getElementsByClassName("ladi-survey-option"),
                                            s = r.querySelector(".ladi-survey-button-next button"),
                                            l = [],
                                            c = n.mapping_form_name,
                                            d = n.mapping_form_id,
                                            p = e.runtime.eventData[t]["option.data_event"];
                                        if (!e.isArray(p)) {
                                            var u = e.copy(n);
                                            if (((p = []), e.isObject(u) && !e.isEmpty(u.value))) {
                                                if (
                                                    ((u.type != e.const.DATA_ACTION_TYPE.section && u.type != e.const.DATA_ACTION_TYPE.popup) || p.push({ action_type: e.const.ACTION_TYPE.complete, type: u.type, action: u.value }),
                                                    (u.type == e.const.DATA_ACTION_TYPE.section && u.is_hide_parent) || u.type == e.const.DATA_ACTION_TYPE.popup)
                                                ) {
                                                    var m = e.findAncestor(r, "ladi-popup"),
                                                        _ = e.findAncestor(r, "ladi-section"),
                                                        y = null;
                                                    e.isEmpty(m) ? e.isEmpty(_) || (y = _.id) : (y = (m = e.findAncestor(m, "ladi-element")).id),
                                                    e.isEmpty(y) || p.push({ action_type: e.const.ACTION_TYPE.complete, type: e.const.DATA_ACTION_TYPE.hidden_show, hidden_ids: [y], show_ids: [] });
                                                }
                                                u.type == e.const.DATA_ACTION_TYPE.change_index &&
                                                p.push({ action_type: e.const.ACTION_TYPE.complete, type: u.type, action: u.value, change_index_type: u.change_index_type, change_index_number: u.change_index_number });
                                            }
                                        }
                                        for (
                                            var g = function () {
                                                    var i = window.ladi(t).value(),
                                                        n = c || "";
                                                    d.forEach(function (t) {
                                                        var r = document.getElementById(t);
                                                        if (!e.isEmpty(r)) {
                                                            for (var o = null; 0 != (o = r.querySelectorAll('.ladi-form-item-survey[data-name="' + n + '"]')).length; ) o[0].parentElement.removeChild(o[0]);
                                                            var s = [],
                                                                c = r.querySelectorAll(".ladi-element .ladi-form-item-container [name]"),
                                                                d = null,
                                                                p = 0;
                                                            for (P = 0; P < c.length; P++) {
                                                                c[P].getAttribute("name") == n && ((d = e.findAncestor(c[P], "ladi-element")), s.push(d.id));
                                                                var u = parseFloatLadiPage(c[P].getAttribute("tabindex")) || 0;
                                                                u > p && (p = u);
                                                            }
                                                            if (0 == (s = s.unique()).length) {
                                                                p++, ((d = document.createElement("div")).className = "ladi-element ladi-hidden ladi-form-item-survey"), (d.id = e.randomString(10)), d.setAttribute("data-name", n);
                                                                var m = "";
                                                                if (((m += '<div class="ladi-form-item-container">'), (m += '   <div class="ladi-form-item-background"></div>'), a)) {
                                                                    m += '   <div class="ladi-form-item ladi-form-checkbox ladi-form-checkbox-vertical">';
                                                                    for (var _ = 0; _ < l.length; _++)
                                                                        m +=
                                                                            '   <div class="ladi-form-checkbox-item"><input tabindex="' +
                                                                            p +
                                                                            '" name="' +
                                                                            n +
                                                                            '" type="checkbox" value="' +
                                                                            l[_] +
                                                                            '"><span data-checked="false">' +
                                                                            l[_] +
                                                                            "</span></div>";
                                                                    m += "   </div>";
                                                                } else
                                                                    (m += '   <div class="ladi-form-item">'),
                                                                        (m += '       <input autocomplete="off" tabindex="' + p + '" name="' + n + '" class="ladi-form-control" type="text">'),
                                                                        (m += "   </div>");
                                                                (m += "</div>"), (d.innerHTML = m), r.getElementsByClassName("ladi-form")[0].appendChild(d), s.push(d.id);
                                                            }
                                                            for (P = 0; P < s.length; P++) window.ladi(s[P]).value(i);
                                                        }
                                                    });
                                                },
                                                f = function () {
                                                    for (var t = !1, e = 0; e < o.length; e++)
                                                        if (o[e].classList.contains("selected")) {
                                                            t = !0;
                                                            break;
                                                        }
                                                    return t;
                                                },
                                                h = function () {
                                                    f() && C(r, p), g();
                                                },
                                                v = function (t) {
                                                    e.tapEventListener(t, function (i) {
                                                        if ((i.stopPropagation(), a)) t.classList.contains("selected") ? t.classList.remove("selected") : t.classList.add("selected");
                                                        else for (var n = t.parentElement.getElementsByClassName("ladi-survey-option"), r = 0; r < n.length; r++) n[r] === t ? n[r].classList.add("selected") : n[r].classList.remove("selected");
                                                        E(), e.isEmpty(s) && h();
                                                    });
                                                },
                                                E = function () {
                                                    var t = f();
                                                    e.isEmpty(s) || (t ? s.parentElement.classList.remove("no-select") : s.parentElement.classList.add("no-select"));
                                                },
                                                P = 0;
                                            P < o.length;
                                            P++
                                        )
                                            l.push(o[P].getAttribute("data-value")), v(o[P]);
                                        e.isEmpty(s) ||
                                        s.addEventListener("click", function (t) {
                                            t.stopPropagation(), h();
                                        }),
                                            E(),
                                            e.runtime.list_loaded_func.push(g);
                                    }
                                }
                            })(i, r.type, r["option.survey_setting.is_multiple"], r["option.survey_setting"] || r["option.survey_setting.event"]))
                        : o(r, t).run(i, e.runtime.isDesktop);
                }),
                W(Date.now() + 1e3),
                U(),
                j(),
                (i = function () {
                    m.forEach(function (t) {
                        if ("countdown" == e.runtime.eventData[t].type)
                            for (var i = document.querySelectorAll("#" + t), a = 0; a < i.length; a++) {
                                var n = i[a],
                                    r = n.getAttribute("data-type"),
                                    o = 0,
                                    s = 0,
                                    l = Date.now();
                                if (n.hasAttribute("data-date-start") || n.hasAttribute("data-date-end")) (o = parseFloatLadiPage(n.getAttribute("data-date-start")) || 0), (s = parseFloatLadiPage(n.getAttribute("data-date-end")) || 0);
                                else {
                                    if (r == e.const.COUNTDOWN_TYPE.countdown) {
                                        var c = parseInt(n.getAttribute("data-minute")) || 0;
                                        if (c <= 0) return;
                                        for (s = e.runtime.timenow; s <= l; ) s += 60 * c * 1e3;
                                    }
                                    if ((r == e.const.COUNTDOWN_TYPE.endtime && (s = parseInt(n.getAttribute("data-endtime")) || 0), r == e.const.COUNTDOWN_TYPE.daily)) {
                                        var d = n.getAttribute("data-daily-start"),
                                            p = n.getAttribute("data-daily-end");
                                        if (!e.isEmpty(d) && !e.isEmpty(p)) {
                                            var u = new Date().toDateString();
                                            (o = new Date(u + " " + d).getTime()), (s = new Date(u + " " + p).getTime());
                                        }
                                    }
                                    n.setAttribute("data-date-start", o), n.setAttribute("data-date-end", s);
                                }
                                if (o > l) return;
                                var m = s - l;
                                m < 0 && (m = 0);
                                for (var _ = e.getCountdownTime(m), y = n.querySelectorAll("[data-item-type]"), g = 0; g < y.length; g++)
                                    y[g].querySelectorAll(".ladi-countdown-text span")[0].textContent = _[y[g].getAttribute("data-item-type")];
                            }
                    });
                })(),
                (e.runtime.interval_countdown = e.runInterval(i, 1e3)),
                m.forEach(function (t) {
                    var i = document.getElementById(t);
                    e.isEmpty(i) || H(t, i);
                }),
                (e.runtime.interval_gallery = e.runInterval(V, 1e3)),
                m.forEach(function (t) {
                    var i = e.runtime.eventData[t];
                    if ("carousel" == i.type) {
                        var a = document.getElementById(t);
                        if (!e.isEmpty(a)) {
                            a.hasAttribute("data-scrolled") ||
                            (a.setAttribute("data-scrolled", !1),
                                (e.runtime.list_scroll_func[t] = function () {
                                    a.setAttribute("data-scrolled", !0);
                                }));
                            var n = i[e.runtime.device + ".option.carousel_setting.autoplay"],
                                r = i[e.runtime.device + ".option.carousel_setting.autoplay_time"],
                                o = 0;
                            n && !e.isEmpty(r) && (o = r);
                            var s = function (i) {
                                i.stopPropagation(),
                                    (i = e.getEventCursorData(i)),
                                (!e.isEmpty(e.runtime.timenext_carousel[t]) && e.runtime.timenext_carousel[t] > Date.now()) ||
                                i.target.classList.contains("ladi-carousel-arrow") ||
                                ((e.runtime.timenext_carousel[t] = Date.now() + 864e5),
                                    (e.runtime.current_element_mouse_down_carousel = t),
                                    (e.runtime.current_element_mouse_down_carousel_position_x = i.pageX),
                                    a.getElementsByClassName("ladi-carousel-content")[0].style.setProperty("transition-duration", "0ms"),
                                    a.getElementsByClassName("ladi-carousel-content")[0].setAttribute("data-left", getComputedStyle(a.getElementsByClassName("ladi-carousel-content")[0]).left));
                            };
                            a.getElementsByClassName("ladi-carousel-arrow-left")[0].addEventListener("click", function (e) {
                                e.stopPropagation(),
                                    a.getElementsByClassName("ladi-carousel-content")[0].style.removeProperty("transition-duration"),
                                    a.setAttribute("data-is-next", !1),
                                    a.setAttribute("data-next-time", Date.now() + 1e3 * o),
                                    G(t, !1);
                            }),
                            -((parseFloatLadiPage(i[e.runtime.device + ".option.carousel_crop.width"]) || 0) - a.clientWidth) < 0 && a.getElementsByClassName("ladi-carousel-arrow-right")[0].classList.remove("opacity-0"),
                                a.getElementsByClassName("ladi-carousel-arrow-right")[0].addEventListener("click", function (e) {
                                    e.stopPropagation(),
                                        a.getElementsByClassName("ladi-carousel-content")[0].style.removeProperty("transition-duration"),
                                        a.setAttribute("data-is-next", !0),
                                        a.setAttribute("data-next-time", Date.now() + 1e3 * o),
                                        G(t, !1);
                                }),
                                a.getElementsByClassName("ladi-carousel")[0].addEventListener("mousedown", s),
                                a.getElementsByClassName("ladi-carousel")[0].addEventListener("touchstart", s, e.runtime.scrollEventPassive);
                        }
                    }
                }),
                (e.runtime.interval_carousel = e.runInterval(function () {
                    m.forEach(function (t) {
                        var i = e.runtime.eventData[t];
                        if ("carousel" == i.type) {
                            var a = document.getElementById(t);
                            if (!e.isEmpty(a) && "true" == a.getAttribute("data-scrolled") && "true" != a.getAttribute("data-stop")) {
                                var n = i[e.runtime.device + ".option.carousel_setting.autoplay"],
                                    r = i[e.runtime.device + ".option.carousel_setting.autoplay_time"],
                                    o = 0;
                                if ((n && !e.isEmpty(r) && (o = r), o > 0)) {
                                    var s = a.getAttribute("data-next-time"),
                                        l = Date.now();
                                    e.isEmpty(s) && ((s = l + 1e3 * (o - 1)), a.setAttribute("data-next-time", s)), l >= s && (G(t, !0), a.setAttribute("data-next-time", l + 1e3 * o));
                                }
                            }
                        }
                    });
                }, 1e3)),
                (function () {
                    var t = ["phone", "email", "coupon"],
                        i = document.querySelectorAll(".ladi-form .ladi-button");
                    e.runtime.tmp.list_form_checkout = [];
                    for (
                        var a = function (t, i) {
                                var a = e.findAncestor(t.target, "ladi-form");
                                if (!e.isEmpty(a) && ((a = a.querySelector("[data-submit-form-id]")), !e.isEmpty(a))) {
                                    var n = a.getAttribute("data-submit-form-id");
                                    if (!e.isEmpty(n)) {
                                        var r = document.querySelector("#" + n + ' .ladi-form-item input[name="coupon"]');
                                        e.isEmpty(r) || ((r.value = t.target.value), e.fireEvent(r, i));
                                    }
                                }
                            },
                            n = function (t) {
                                a(t, "change");
                            },
                            r = function (t) {
                                a(t, "input");
                            },
                            o = function (t) {
                                e.isEmpty(e.runtime.tmp.current_use_coupon) && e.reloadPriceDiscount(t);
                            },
                            s = 0;
                        s < i.length;
                        s++
                    ) {
                        var l = e.findAncestor(i[s], "ladi-element");
                        if (!e.isEmpty(l)) {
                            var c = e.findAncestor(i[s], "ladi-form");
                            if (!e.isEmpty(c)) {
                                var d = e.findAncestor(c, "ladi-element");
                                if (!e.isEmpty(d)) {
                                    var p = e.runtime.eventData[l.id];
                                    if (!e.isEmpty(p)) {
                                        var u = e.runtime.eventData[d.id];
                                        if (!e.isEmpty(u))
                                            if (e.isEmpty(p["option.data_submit_form_id"])) {
                                                if (!u["option.is_form_login"] && !u["option.is_form_coupon"]) {
                                                    var m = e.findAncestor(d, "ladi-popup");
                                                    e.isEmpty(m) || (m = e.findAncestor(m, "ladi-element")), e.isEmpty(m) || "POPUP_CHECKOUT" != m.id || e.runtime.tmp.list_form_checkout.push(d.id);
                                                }
                                            } else if (u["option.is_form_coupon"]) {
                                                l.setAttribute("data-submit-form-id", p["option.data_submit_form_id"]),
                                                    l.addEventListener("click", o),
                                                    (c.onsubmit = function () {
                                                        return !1;
                                                    });
                                                var _ = c.querySelector('.ladi-form-item input[name="coupon"]');
                                                if (!e.isEmpty(_)) {
                                                    _.addEventListener("change", n), _.addEventListener("input", r);
                                                    var y = document.querySelector("#" + p["option.data_submit_form_id"] + ' .ladi-form-item input[name="coupon"]');
                                                    e.isEmpty(y) || y.setAttribute("data-replace-coupon", !0);
                                                }
                                                e.runtime.tmp.list_form_checkout.push(p["option.data_submit_form_id"]);
                                            }
                                    }
                                }
                            }
                        }
                    }
                    e.runtime.tmp.list_form_checkout = e.runtime.tmp.list_form_checkout.unique();
                    for (
                        var g = function (t) {
                                -1 == [e.const.FORM_CONFIG_TYPE.sapo, e.const.FORM_CONFIG_TYPE.haravan, e.const.FORM_CONFIG_TYPE.shopify, e.const.FORM_CONFIG_TYPE.wordpress].indexOf(e.runtime.shopping_product_type) &&
                                e.reloadPriceDiscount();
                            },
                            f = 0;
                        f < e.runtime.tmp.list_form_checkout.length;
                        f++
                    )
                        for (var h = document.querySelectorAll("#" + e.runtime.tmp.list_form_checkout[f] + " .ladi-form-item input.ladi-form-control"), v = 0; v < h.length; v++)
                            -1 != t.indexOf(h[v].getAttribute("name")) && (h[v].addEventListener("change", g), h[v].addEventListener("input", g));
                })(),
                R(),
            t &&
            (e.runtime.is_popupx ||
                e.const.TIME_ONPAGE_TRACKING.forEach(function (t) {
                    e.runTimeout(function () {
                        e.isFunction(window.gtag) && window.gtag("event", "TimeOnPage_" + t + "_seconds", { event_category: "LadiPageTimeOnPage", event_label: window.location.host + window.location.pathname, non_interaction: !0 }),
                        e.isFunction(window.fbq) && window.fbq("trackCustom", "TimeOnPage_" + t + "_seconds");
                    }, 1e3 * t);
                })),
                m.forEach(function (t) {
                    var i = document.getElementById(t);
                    if (!e.isEmpty(i)) {
                        var a = e.runtime.eventData[t],
                            n = a["option.data_tooltip.text"];
                        if (!e.isEmpty(n)) {
                            var r = a["option.data_tooltip.type"] || e.const.TOOLTIP_TYPE.default,
                                o = a["option.data_tooltip.position"] || e.const.TOOLTIP_POSITION.top_middle,
                                s = a["option.data_tooltip.size"] || e.const.TOOLTIP_SIZE.medium;
                            i.setAttribute("data-hint", n);
                            var l = "hint";
                            o == e.const.TOOLTIP_POSITION.top_middle && (l += "-top-middle"),
                            o == e.const.TOOLTIP_POSITION.top_left && (l += "-top-left"),
                            o == e.const.TOOLTIP_POSITION.top_right && (l += "-top-right"),
                            o == e.const.TOOLTIP_POSITION.bottom_middle && (l += "-bottom-middle"),
                            o == e.const.TOOLTIP_POSITION.bottom_left && (l += "-bottom-left"),
                            o == e.const.TOOLTIP_POSITION.bottom_right && (l += "-bottom-right"),
                            o == e.const.TOOLTIP_POSITION.left_middle && (l += "-left-middle"),
                            o == e.const.TOOLTIP_POSITION.left_top && (l += "-left-top"),
                            o == e.const.TOOLTIP_POSITION.left_bottom && (l += "-left-bottom"),
                            o == e.const.TOOLTIP_POSITION.right_middle && (l += "-right-middle"),
                            o == e.const.TOOLTIP_POSITION.right_top && (l += "-right-top"),
                            o == e.const.TOOLTIP_POSITION.right_bottom && (l += "-right-bottom"),
                            r == e.const.TOOLTIP_TYPE.info && (l += "-t-info"),
                            r == e.const.TOOLTIP_TYPE.success && (l += "-t-success"),
                            r == e.const.TOOLTIP_TYPE.error && (l += "-t-error"),
                            r == e.const.TOOLTIP_TYPE.notice && (l += "-t-notice"),
                            s == e.const.TOOLTIP_SIZE.small && (l += "-s-small"),
                            s == e.const.TOOLTIP_SIZE.medium && (l += "-s-med"),
                            s == e.const.TOOLTIP_SIZE.big && (l += "-s-big"),
                                (l += "-hint-anim-d-short"),
                                i.classList.add(l);
                        }
                    }
                }),
                (function () {
                    var t = 2500,
                        i = 3800,
                        a = 800,
                        n = 50,
                        r = 150,
                        o = 500,
                        s = 1300,
                        l = 600,
                        c = 1500,
                        d = t,
                        p = function (p) {
                            var u = !1;
                            if (
                                (e.const.ANIMATED_LIST.forEach(function (t) {
                                    p.classList.contains(t) && (u = !0);
                                }),
                                    u)
                            ) {
                                var m = p.getElementsByClassName("ladipage-animated-words-wrapper")[0];
                                if (!e.isEmpty(m)) {
                                    var _ = e.isEmpty(m.getAttribute("data-word")) ? [] : JSON.parse(m.getAttribute("data-word"));
                                    if (0 != _.length) {
                                        var y = !1,
                                            g = e.randomId(),
                                            f = function (i, a, n, r) {
                                                if (!y) {
                                                    e.isEmpty(i) || (i.classList.remove("in"), i.classList.add("out"));
                                                    var o = e.isEmpty(i) ? null : i.nextSibling;
                                                    if (
                                                        (e.isEmpty(o)
                                                            ? n &&
                                                            e.runTimeout(function () {
                                                                A(v(a));
                                                            }, t)
                                                            : e.runTimeout(function () {
                                                                f(o, a, n, r);
                                                            }, r),
                                                        e.isEmpty(o) && document.querySelectorAll("html")[0].classList.contains("no-csstransitions"))
                                                    ) {
                                                        var s = v(a);
                                                        E(a, s);
                                                    }
                                                }
                                            },
                                            h = function (i, a, n, r) {
                                                if (!y) {
                                                    var o = a.parentElement,
                                                        s = o.parentElement;
                                                    s.classList.contains("ladipage-animated-headline") || (s = s.parentElement), e.isEmpty(i) || (i.classList.add("in"), i.classList.remove("out"));
                                                    var l = e.isEmpty(i) ? null : i.nextSibling;
                                                    e.isEmpty(l)
                                                        ? ((s.classList.contains("rotate-2") || s.classList.contains("rotate-3") || s.classList.contains("scale")) && o.style.setProperty("width", a.clientWidth + "px"),
                                                        e.isEmpty(e.findAncestor(a, "type")) ||
                                                        e.runTimeout(function () {
                                                            var t = e.findAncestor(a, "ladipage-animated-words-wrapper");
                                                            e.isEmpty(t) || t.classList.add("waiting");
                                                        }, 200),
                                                        n ||
                                                        e.runTimeout(function () {
                                                            A(a);
                                                        }, t))
                                                        : e.runTimeout(function () {
                                                            h(l, a, n, r);
                                                        }, r);
                                                }
                                            },
                                            v = function (t) {
                                                if (!y) {
                                                    var i = t.nextSibling;
                                                    return e.isEmpty(i) || i.classList.contains("after") ? t.parentElement.firstChild : i;
                                                }
                                            },
                                            E = function (t, e) {
                                                y || (t.classList.remove("is-visible"), t.classList.add("is-hidden"), e.classList.remove("is-hidden"), e.classList.add("is-visible"));
                                            },
                                            P = function (t, i) {
                                                y ||
                                                (e.isEmpty(e.findAncestor(t, "type"))
                                                    ? e.isEmpty(e.findAncestor(t, "clip")) ||
                                                    (e.findAncestor(t, "ladipage-animated-words-wrapper").style.setProperty("width", t.clientWidth + 5 + "px"),
                                                        e.runTimeout(function () {
                                                            A(t);
                                                        }, l + c))
                                                    : (h(t.querySelectorAll("i")[0], t, !1, i), t.classList.add("is-visible"), t.classList.remove("is-hidden")));
                                            },
                                            A = function (c) {
                                                if (!y && !e.isEmpty(c)) {
                                                    var d = v(c);
                                                    if (e.isEmpty(e.findAncestor(c, "type")))
                                                        if (e.isEmpty(e.findAncestor(c, "letters")))
                                                            e.isEmpty(e.findAncestor(c, "clip"))
                                                                ? e.isEmpty(e.findAncestor(c, "loading-bar"))
                                                                    ? (E(c, d),
                                                                        e.runTimeout(function () {
                                                                            A(d);
                                                                        }, t))
                                                                    : (e.findAncestor(c, "ladipage-animated-words-wrapper").classList.remove("is-loading"),
                                                                        E(c, d),
                                                                        e.runTimeout(function () {
                                                                            A(d);
                                                                        }, i),
                                                                        e.runTimeout(function () {
                                                                            e.findAncestor(c, "ladipage-animated-words-wrapper").classList.add("is-loading");
                                                                        }, a))
                                                                : (e.findAncestor(c, "ladipage-animated-words-wrapper").style.setProperty("width", "2px"),
                                                                    e.runTimeout(function () {
                                                                        E(c, d), P(d);
                                                                    }, l));
                                                        else {
                                                            var p = c.querySelectorAll("i").length >= d.querySelectorAll("i").length;
                                                            f(c.querySelectorAll("i")[0], c, p, n), h(d.querySelectorAll("i")[0], d, p, n);
                                                        }
                                                    else {
                                                        var u = e.findAncestor(c, "ladipage-animated-words-wrapper");
                                                        u.classList.add("selected"),
                                                            u.classList.remove("waiting"),
                                                            e.runTimeout(function () {
                                                                u.classList.remove("selected"), c.classList.remove("is-visible"), c.classList.add("is-hidden");
                                                                for (var t = c.querySelectorAll("i"), e = 0; e < t.length; e++) t[e].classList.remove("in"), t[e].classList.add("out");
                                                            }, o),
                                                            e.runTimeout(function () {
                                                                P(d, r);
                                                            }, s);
                                                    }
                                                }
                                            },
                                            L = document.createElement(p.tagName);
                                        p.parentElement.insertBefore(L, p.nextSibling),
                                            (L.outerHTML = p.outerHTML),
                                            (L = p.nextSibling).classList.add("ladipage-animated-headline-duplicate"),
                                            (e.runtime.list_scrolling_exec[g] = function () {
                                                p.parentElement.removeChild(p), L.classList.remove("ladipage-animated-headline-duplicate"), (y = !0), delete e.runtime.list_scrolling_exec[g];
                                            });
                                        var b = m.textContent.trim();
                                        if (
                                            ((m.textContent = ""),
                                                (m.innerHTML = m.innerHTML + '<b class="is-visible">' + b + "</b>"),
                                                _.forEach(function (t) {
                                                    e.isEmpty(t) ? (m.innerHTML = m.innerHTML + "<b>" + b + "</b>") : (m.innerHTML = m.innerHTML + "<b>" + t.trim() + "</b>");
                                                }),
                                            !e.isEmpty(e.findAncestor(m, "type")) || !e.isEmpty(e.findAncestor(m, "loading-bar")) || !e.isEmpty(e.findAncestor(m, "clip")))
                                        ) {
                                            m.innerHTML = m.innerHTML + '<div class="after"></div>';
                                            for (var w = getComputedStyle(m).color, S = m.getElementsByClassName("after"), T = 0; T < S.length; T++) S[T].style.setProperty("background-color", w);
                                        }
                                        if (
                                            (p.classList.contains("type") && m.classList.add("waiting"),
                                            (p.classList.contains("type") || p.classList.contains("rotate-2") || p.classList.contains("rotate-3") || p.classList.contains("scale")) && p.classList.add("letters"),
                                                (function (t) {
                                                    if (!y)
                                                        for (var i = 0; i < t.length; i++) {
                                                            var a = t[i],
                                                                n = a.textContent.trim().split(""),
                                                                r = a.classList.contains("is-visible");
                                                            for (var o in n) {
                                                                " " == n[o] && (n[o] = "&nbsp;");
                                                                var s = e.findAncestor(a, "rotate-2");
                                                                e.isEmpty(s) || (n[o] = "<em>" + n[o] + "</em>"), (n[o] = r ? '<i class="in">' + n[o] + "</i>" : "<i>" + n[o] + "</i>");
                                                            }
                                                            var l = n.join("");
                                                            (a.innerHTML = l), a.style.setProperty("opacity", 1);
                                                        }
                                                })(document.querySelectorAll(".letters b")),
                                                p.classList.contains("loading-bar"))
                                        )
                                            (d = i),
                                                e.runTimeout(function () {
                                                    m.classList.add("is-loading");
                                                }, a);
                                        else if (p.classList.contains("clip")) {
                                            var O = m.clientWidth + 5;
                                            m.style.setProperty("width", O + "px");
                                        }
                                        e.runTimeout(function () {
                                            A(p.getElementsByClassName("is-visible")[0]);
                                        }, d);
                                    }
                                }
                            }
                        },
                        u = function () {
                            for (var t = document.getElementsByClassName("ladipage-animated-headline"), e = [], i = 0; i < t.length; i++) e.push(t[i]);
                            e.forEach(p);
                        };
                    u();
                    var m = e.randomId();
                    e.runtime.list_scrolled_exec[m] = u;
                })(),
                (function () {
                    for (
                        var t = document.querySelectorAll(".ladi-button-group > .ladi-element"),
                            i = function (t) {
                                var i = e.findAncestor(t.target, "ladi-button");
                                (i = e.isEmpty(i) ? t.target : e.findAncestor(i, "ladi-element")).classList.add("selected");
                                var a = e.findAncestor(t.target, "ladi-button-group");
                                if (!e.isEmpty(a)) for (var n = (a = e.findAncestor(a, "ladi-element")).querySelectorAll(".ladi-button-group > .ladi-element"), r = 0; r < n.length; r++) n[r].id != i.id && n[r].classList.remove("selected");
                            },
                            a = 0;
                        a < t.length;
                        a++
                    )
                        t[a].addEventListener("click", i);
                })(),
                (function () {
                    document.addEventListener("mouseleave", e.runEventMouseLeave),
                        document.addEventListener("mousemove", e.runEventMouseMove),
                        document.addEventListener("touchmove", e.runEventMouseMove, e.runtime.scrollEventPassive),
                        document.addEventListener("mouseup", e.runEventMouseUp),
                        document.addEventListener("touchend", e.runEventMouseUp);
                    var t = window;
                    e.isObject(e.runtime.story_page) && (t = document.getElementsByClassName("ladi-wraper")[0]),
                        t.addEventListener("scroll", e.runEventScroll, e.runtime.scrollEventPassive),
                        window.addEventListener("resize", e.runEventResize),
                        window.addEventListener("orientationchange", e.runEventOrientationChange),
                        document.getElementById(e.runtime.backdrop_popup_id).addEventListener("click", e.runEventBackdropClick);
                })(),
                e.reloadLazyload(!0),
                F(),
                e.setDataReplaceStart(),
                e.resetViewport(),
                e.runConversionApi(),
                e.runStoryPage(),
            t || e.runAfterLocation(),
                (e.runtime.list_loaded_func = e.runtime.list_loaded_func.concat(S)),
                "complete" === document.readyState || ("loading" !== document.readyState && !document.documentElement.doScroll) ? e.documentLoaded() : document.addEventListener("DOMContentLoaded", e.documentLoaded);
        };
        e.runtime.is_popupx
            ? ((e.runtime.tmp.popupx_iframe_id = e.randomId()),
                tt({ ladipage_id: e.runtime.ladipage_id, action: { type: "set_iframe_loaded" } }),
                window.addEventListener("message", function (t) {
                    try {
                        var i = JSON.parse(t.data);
                        "POPUPX" == i.type &&
                        i.iframe_id == e.runtime.tmp.popupx_iframe_id &&
                        i.action.value.forEach(function (t) {
                            !(function (t, i) {
                                var a = null,
                                    n = null;
                                if ("set_style_device" == t) {
                                    if ((ot(i.is_desktop), (n = document.getElementById(e.runtime.tmp.popupx_current_element_id)), e.isEmpty(n))) return;
                                    "none" != getComputedStyle(n).display && (e.runtime.tmp.popupx_is_inline ? rt(e.runtime.tmp.popupx_current_element_id, !1) : nt(e.runtime.tmp.popupx_current_element_id, !1));
                                }
                                if ("set_iframe_info" == t) {
                                    e.isEmpty(_) && ((_ = i.ladi_client_id || e.randomId()), window.ladi("LADI_CLIENT_ID").set_cookie(_, 3650)),
                                        (e.runtime.tmp.popupx_is_desktop = i.is_desktop),
                                        (e.runtime.isDesktop = i.is_desktop),
                                        (e.runtime.device = e.runtime.isDesktop ? e.const.DESKTOP : e.const.MOBILE),
                                        (e.runtime.tmp.popupx_origin_store_id = i.origin_store_id),
                                        (e.runtime.tmp.popupx_origin_referer = i.origin_referer),
                                        (e.runtime.tmp.popupx_origin_domain = i.origin_domain),
                                        (e.runtime.tmp.popupx_origin_url = i.origin_url),
                                        (e.runtime.tmp.popupx_is_inline = i.is_inline),
                                        ot(i.is_desktop);
                                    var r = "#" + e.runtime.builder_section_popup_id + " .ladi-container {width: 100% !important;}";
                                    e.runtime.tmp.popupx_is_inline && (r += ".ladi-section > .ladi-section-close {display: none !important;}"), e.createStyleElement("style_popup_container", r), (e.runtime.has_popupx = !0), st();
                                }
                                "hide_popupx" == t && ((a = e.runtime.eventData[i]), (n = document.getElementById(i)), e.isEmpty(a) || e.isEmpty(n) || window.ladi(i).hide()),
                                "show_popupx" == t && nt(i, !0),
                                "show_popupx_inline_iframe" == t && rt(i, !0),
                                "show_message_callback" == t && (e.isFunction(e.runtime.tmp.popupx_show_message_callback) && e.runtime.tmp.popupx_show_message_callback(), delete e.runtime.tmp.popupx_show_message_callback);
                            })(i.action.type, t);
                        });
                    } catch (t) {}
                }))
            : st();
    }),
    (LadiPageScriptV2.prototype.getListProductByTagId = function (t, e, i, a, n) {
        var r = this,
            o = t["option.form_account_id"],
            s = t["option.product_type"],
            l = t["option.ladisale_store_id"] || null,
            c = t["option.product_tag_id"],
            d = t["option.data_setting.value"],
            p = t["option.data_setting.type_dataset"],
            u = t["option.collection_setting.type"],
            m = t["option.data_setting.sort_name"],
            _ = t["option.data_setting.sort_by"],
            y = null,
            g = null,
            f = null,
            h = null,
            v = null;
        if (r.isArray(c) && c.length > 0) {
            if (
                (r.isEmpty(r.runtime.tmp.product_tag_info[s]) && (r.runtime.tmp.product_tag_info[s] = {}),
                r.isEmpty(r.runtime.tmp.timeout_product_tag_info[s]) && (r.runtime.tmp.timeout_product_tag_info[s] = {}),
                    c.sort(),
                    (f = JSON.stringify(c) + "_page_" + i + "_limit_" + e),
                    (h = r.runtime.tmp.product_tag_info[s][f]),
                -1 != [r.const.FORM_CONFIG_TYPE.ladisales, r.const.FORM_CONFIG_TYPE.sapo, r.const.FORM_CONFIG_TYPE.haravan, r.const.FORM_CONFIG_TYPE.shopify, r.const.FORM_CONFIG_TYPE.wordpress].indexOf(s))
            ) {
                g = function () {
                    var t = null;
                    return (
                        r.isObject(h) &&
                        r.isArray(h.products) &&
                        ((t = { products: h.products, total_record: h.total_record }),
                        r.isEmpty(r.runtime.tmp.product_info[s]) && (r.runtime.tmp.product_info[s] = {}),
                            t.products.forEach(function (t) {
                                r.runtime.tmp.product_info[s][t.product_id] = { store_info: h.store_info, product: t };
                            })),
                            t
                    );
                };
                var E = null;
                if ((r.isString(h) && ((E = h), (h = null)), r.isNull(h))) {
                    r.runtime.tmp.product_tag_info[s][f] = !0;
                    var P = function () {
                            (r.runtime.tmp.product_tag_info[s][f] = !1),
                            r.isEmpty(r.runtime.tmp.timeout_product_tag_info[s][f]) || (r.removeTimeout(r.runtime.tmp.timeout_product_tag_info[s][f]), delete r.runtime.tmp.timeout_product_tag_info[s][f]);
                        },
                        A = function (t) {
                            if (((h = t.data), r.isObject(h))) {
                                if (!r.isObject(h.store_info)) {
                                    var a = r.runtime.currency;
                                    r.runtime.isClient || (a = LadiPage.getRootScope().getStoreCurrency()), (h.store_info = { currency: { code: a, symbol: r.formatCurrency(null, a, !1, !0) } });
                                }
                                if ((s != r.const.FORM_CONFIG_TYPE.ladisales && (h.store_info.id = -1), r.isArray(h.products)))
                                    for (
                                        var o = null,
                                            l = function (t) {
                                                return t.option1 == o;
                                            },
                                            d = 0;
                                        d < h.products.length;
                                        d++
                                    )
                                        if (r.isArray(h.products[d].options) && r.isArray(h.products[d].variants)) {
                                            var p = h.products[d].options.map(function (t) {
                                                return t.product_option_id;
                                            });
                                            p = p.join("/");
                                            for (var u = 0; u < h.products[d].variants.length; u++)
                                                -1 != [r.const.FORM_CONFIG_TYPE.ladisales].indexOf(s) && 1 == h.products[d].variants[u].allow_sold_out && (h.products[d].variants[u].inventory_checked = 0),
                                                r.isNull(h.products[d].variants[u].compare_price) && (h.products[d].variants[u].compare_price = h.products[d].variants[u].price_compare),
                                                r.isNull(h.products[d].variants[u].variant_start_date) && (h.products[d].variants[u].variant_start_date = h.products[d].variants[u].start_date),
                                                r.isNull(h.products[d].variants[u].variant_end_date) && (h.products[d].variants[u].variant_end_date = h.products[d].variants[u].end_date),
                                                r.isNull(h.products[d].variants[u].variant_timezone) && (h.products[d].variants[u].variant_timezone = h.products[d].variants[u].timezone),
                                                r.isEmpty(h.products[d].variants[u].option_ids) && (h.products[d].variants[u].option_ids = p),
                                                -1 != [r.const.FORM_CONFIG_TYPE.sapo, r.const.FORM_CONFIG_TYPE.haravan, r.const.FORM_CONFIG_TYPE.shopify].indexOf(s) &&
                                                1 == h.products[d].variants.length &&
                                                "Default Title" == h.products[d].variants[u].title &&
                                                ((h.products[d].variants[u].title = null), (h.products[d].variants[u].option1 = null), (h.products[d].options = [])),
                                                -1 != [r.const.FORM_CONFIG_TYPE.wordpress].indexOf(s) &&
                                                1 == h.products[d].variants.length &&
                                                h.products[d].variants[u].title == h.products[d].variants[u].product_name &&
                                                ((h.products[d].variants[u].title = null), (h.products[d].variants[u].option1 = null), (h.products[d].options = [])),
                                                r.isEmpty(h.products[d].variants[u].package_quantity) ||
                                                r.isEmpty(h.products[d].variants[u].package_quantity_unit) ||
                                                (r.isNull(h.products[d].variants[u].title_old) && (h.products[d].variants[u].title_old = h.products[d].variants[u].title),
                                                    (h.products[d].variants[u].title =
                                                        h.products[d].variants[u].title_old + " (" + h.products[d].variants[u].package_quantity + " " + h.products[d].variants[u].package_quantity_unit + ")"));
                                            if (r.isArray(h.products[d].options) && 1 == h.products[d].options.length && r.isArray(h.products[d].options[0].values))
                                                for (var m = 0; m < h.products[d].options[0].values.length; m++) {
                                                    o = h.products[d].options[0].values[m].name;
                                                    var _ = h.products[d].variants.find(l);
                                                    (h.products[d].options[0].values[m].name_new = h.products[d].options[0].values[m].label || h.products[d].options[0].values[m].name),
                                                    r.isEmpty(_) ||
                                                    r.isEmpty(_.package_quantity) ||
                                                    r.isEmpty(_.package_quantity_unit) ||
                                                    (h.products[d].options[0].values[m].name_new = h.products[d].options[0].values[m].name_new + " (" + _.package_quantity + " " + _.package_quantity_unit + ")");
                                                }
                                        }
                                if (r.isString(h.page_next)) {
                                    var v = JSON.stringify(c) + "_page_" + (i + 1) + "_limit_" + e;
                                    r.runtime.tmp.product_tag_info[s][v] = h.page_next;
                                }
                                (r.runtime.tmp.product_tag_info[s][f] = h), (y = g()), r.isFunction(n) && n(y);
                            } else P();
                        },
                        L = { product_tag_ids: c, limit: e };
                    r.isEmpty(u) ? (L.type = "group") : (L.paged = i), r.isEmpty(m) || r.isEmpty(_) || ((L.sort = {}), (L.sort[m] = _ == r.const.SORT_BY_TYPE.desc ? -1 : 1));
                    var b = null,
                        w = "POST";
                    return (
                        r.runLimitRequest(20, function () {
                            if (r.runtime.isClient) {
                                var a = r.const.API_LADISALE_COLLECTION_PRODUCT;
                                s == r.const.FORM_CONFIG_TYPE.ladisales
                                    ? (((b = { "Content-Type": "application/json" })["Store-Id"] = l), (L = JSON.stringify(L)))
                                    : s == r.const.FORM_CONFIG_TYPE.wordpress
                                        ? ((w = "GET"), (a = window.location.origin + "/ladipage/api?action=product_list&category_ids=" + c.join("|") + "&page=" + i + "&limit=" + e), (L = null))
                                        : ((b = { "Content-Type": "application/json" }),
                                            (a = r.const.API_COLLECTION_PRODUCT),
                                            (L = { form_account_id: o, tags: c, limit: e }),
                                            r.isEmpty(E) ? (L.page = i) : (L.page_info = E),
                                            (L = JSON.stringify(L))),
                                    r.sendRequest(w, a, L, !0, b, function (t, e, i) {
                                        if (i.readyState == XMLHttpRequest.DONE)
                                            try {
                                                var a = JSON.parse(t);
                                                A(a);
                                            } catch (t) {
                                                P();
                                            }
                                    });
                            } else {
                                var n = function (t) {
                                        if (r.isArray(t) && t.length > 1) {
                                            var e = { products: [] };
                                            t.forEach(function (t) {
                                                if (r.isNull(t.product) && !r.isNull(t.store_info) && !r.isNull(t.total_record)) return (e.store_info = t.store_info), void (e.total_record = t.total_record);
                                                r.isNull(t.product) || e.products.push(t.product);
                                            }),
                                                A({ data: e });
                                        }
                                    },
                                    d = LadiPage.mapping_attribute_option_product_id(t.element, "", c, e, i, !1, !0, function (t) {
                                        n(t);
                                    });
                                n(d);
                            }
                        }),
                            y
                    );
                }
            }
        } else
            r.isEmpty(d) ||
            ((g = function () {
                var t = null;
                if (r.isArray(v)) {
                    var a = r.copy(v);
                    (t = { products: (a = a.splice((i - 1) * e, e)), total_record: v.length }),
                    r.isEmpty(r.runtime.tmp.product_info[s]) && (r.runtime.tmp.product_info[s] = {}),
                        v.forEach(function (t) {
                            r.runtime.tmp.product_info[s][t.id] = { store_info: {}, product: t };
                        });
                }
                return t;
            }),
                (v = r.loadDataset(d, d, p, m, _, !0, r.runtime.isClient, function (t) {
                    (v = t), (y = g()), r.isFunction(n) && n(y);
                })));
        return (
            r.isFunction(g) &&
            (!0 === h
                ? (r.runtime.tmp.timeout_product_tag_info[s][f] = r.runTimeout(function () {
                    r.getListProductByTagId(t, e, i, !1, n);
                }, 100))
                : ((y = g()), !a && r.isFunction(n) && n(y))),
                y
        );
    }),
    (LadiPageScriptV2.prototype.getLadiSaleCheckoutCartProducts = function () {
        var t = [];
        return (
            this.isArray(this.runtime.tmp.cart) &&
            this.runtime.tmp.cart.forEach(function (e) {
                e.quantity <= 0 || t.push({ product_id: e.product_id, product_variant_id: e.product_variant_id, quantity: e.quantity });
            }),
                t
        );
    }),
    (LadiPageScriptV2.prototype.getCartProducts = function () {
        var t = this,
            e = function () {
                var e = [];
                return (
                    t.runtime.tmp.cart.forEach(function (i) {
                        if (!(i.quantity <= 0)) {
                            var a = i.name;
                            t.isEmpty(i.title) || a == i.title || (a += " - " + i.title);
                            var n = [[i.product_variant_id, i.quantity, i.price, i.weight, i.weight_unit].join(":"), a];
                            t.isObject(i.promotion) && n.push([i.promotion.discount.discount_id, i.promotion.discount.note, i.promotion.total].join(":")), (n = n.join("|")), e.push(n);
                        }
                    }),
                        e
                );
            };
        if (-1 != [t.const.FORM_CONFIG_TYPE.sapo, t.const.FORM_CONFIG_TYPE.haravan, t.const.FORM_CONFIG_TYPE.shopify, t.const.FORM_CONFIG_TYPE.wordpress].indexOf(t.runtime.shopping_product_type)) return e();
        var i = window.ladi("_checkout_token").get_cookie();
        return this.isArray(this.runtime.tmp.cart) && !this.isEmpty(i) ? e() : void 0;
    }),
    (LadiPageScriptV2.prototype.getCartCheckoutPrice = function (t) {
        var e = this.changeTotalPriceCart(!0);
        if (-1 != [this.const.FORM_CONFIG_TYPE.sapo, this.const.FORM_CONFIG_TYPE.haravan, this.const.FORM_CONFIG_TYPE.shopify, this.const.FORM_CONFIG_TYPE.wordpress].indexOf(this.runtime.shopping_product_type)) return e.cart_checkout_price;
        var i = window.ladi("_checkout_token").get_cookie();
        return this.isArray(this.runtime.tmp.cart) && !this.isEmpty(i) ? e.cart_checkout_price : t;
    }),
    (LadiPageScriptV2.prototype.createCartData = function (t) {
        (this.runtime.tmp.cart = []), (this.runtime.tmp.add_to_cart_discount = 0), (this.runtime.tmp.add_to_cart_fee_shipping = 0);
        var e = this,
            i = function () {
                e.runtime.tmp.generateCart(), e.changeTotalPriceCart(), e.runResizeAll(), e.isFunction(t) && t();
            };
        if (
            (e.isEmpty(e.runtime.shopping_product_type) ||
            (window.ladi("_shopping_product_type").get_cookie() != e.runtime.shopping_product_type &&
                (window.ladi("_cart_token").delete_cookie(), window.ladi("_checkout_token").delete_cookie(), window.ladi("_shopping_product_type").set_cookie(e.runtime.shopping_product_type, 30))),
            -1 == [e.const.FORM_CONFIG_TYPE.sapo, e.const.FORM_CONFIG_TYPE.haravan, e.const.FORM_CONFIG_TYPE.wordpress].indexOf(e.runtime.shopping_product_type))
        )
            if (-1 == [e.const.FORM_CONFIG_TYPE.shopify].indexOf(e.runtime.shopping_product_type)) {
                var a = window.ladi("_cart_token").get_cookie(),
                    n = { "Content-Type": "application/json" };
                if (!this.isEmpty(a))
                    return (
                        (n["cart-token"] = a),
                            void this.sendRequest("POST", this.const.API_LADISALE_SHOW, JSON.stringify({ type: "LP" }), !0, n, function (t, a, n) {
                                if (n.readyState == XMLHttpRequest.DONE) {
                                    if (200 == a)
                                        try {
                                            var r = JSON.parse(t);
                                            200 == r.code &&
                                            ((e.runtime.tmp.ladisales_checkout_url = r.data.url),
                                                r.data.items.forEach(function (t) {
                                                    var i = e.isEmpty(t.src) ? "" : t.src;
                                                    e.isEmpty(i) || !e.isString(i) || i.startsWith("http://") || i.startsWith("https://") || i.startsWith("//") || (i = "https://" + e.const.STATIC_W_DOMAIN + "/" + i);
                                                    var a = e.runtime.tmp.cart.findIndex(function (e) {
                                                            return e.store_id == t.store_id && e.product_id == t.product_id && e.product_variant_id == t.product_variant_id;
                                                        }),
                                                        n = t.quantity,
                                                        o = t.option_name,
                                                        s = t.price;
                                                    e.isEmpty(t.package_quantity) || e.isEmpty(t.package_quantity_unit) || (o = o + " (" + t.package_quantity + " " + t.package_quantity_unit + ")"),
                                                    -1 == a &&
                                                    e.runtime.tmp.cart.push({
                                                        store_id: t.store_id,
                                                        product_id: t.product_id,
                                                        product_variant_id: t.product_variant_id,
                                                        name: t.product_name,
                                                        title: o,
                                                        price: s,
                                                        image: i,
                                                        quantity: n,
                                                        inventory_checked: t.inventory_checked,
                                                        available_quantity: t.available_quantity,
                                                        min_buy: t.min_buy,
                                                        max_buy: t.max_buy,
                                                        currency: r.data.store_info.currency,
                                                        product_type: t.product_type,
                                                        package_quantity: t.package_quantity,
                                                    });
                                                }),
                                                e.updateCartPromotion());
                                        } catch (t) {}
                                    i();
                                }
                            })
                    );
                i();
            } else
                e.getCheckoutShopify(
                    null,
                    function (t, a) {
                        e.updateCartPromotion(null, !0, i);
                    },
                    function () {
                        e.updateCartPromotion(null, !0, i);
                    }
                );
        else this.updateCartPromotion(null, !0, i);
    }),
    (LadiPageScriptV2.prototype.changeTotalPriceCart = function (t) {
        var e = this,
            i = 0,
            a = 0;
        this.runtime.tmp.cart.forEach(function (t) {
            (a += t.quantity), e.isObject(t.promotion) ? (i += t.promotion.total) : (i += t.price * t.quantity);
        }),
            (i = i < 0 ? 0 : i);
        var n = this.runtime.tmp.add_to_cart_fee_shipping || 0,
            r = this.runtime.tmp.add_to_cart_discount || 0,
            o = i + n - r;
        if (((o = o < 0 ? 0 : o), t)) return { cart_price: i, cart_checkout_price: o, cart_fee_shipping: n, cart_discount: r, total_quantity: a };
        var s = this.formatNumber(i, 3),
            l = this.formatNumber(o, 3),
            c = this.formatNumber(n, 3),
            d = this.formatNumber(r, 3);
        if (this.runtime.tmp.cart.length > 0 && !this.isEmpty(this.runtime.tmp.cart[0].currency) && !this.isEmpty(this.runtime.tmp.cart[0].currency.symbol)) {
            var p = this.runtime.tmp.cart[0].currency.symbol;
            (s = this.formatCurrency(i, p, !0)), (l = this.formatCurrency(o, p, !0)), (c = this.formatCurrency(n, p, !0)), (d = this.formatCurrency(r, p, !0));
        }
        this.setDataReplaceStr("cart_price", s),
            this.setDataReplaceStr("cart_checkout_price", l),
            this.setDataReplaceStr("cart_fee_shipping", c),
            this.setDataReplaceStr("cart_discount", d),
            this.setDataReplaceStr("cart_quantity", a),
            this.setDataReplaceElement(!1);
    }),
    (LadiPageScriptV2.prototype.removeAddToCartProduct = function (t, e, i, a) {
        var n = this,
            r = { product_variant_id: t };
        try {
            (t = decodeURIComponentLadiPage(t)), (r = JSON.parse(t));
        } catch (t) {}
        var o = function (t) {
                return n.isEmpty(t.cart_item_key) ? t.product_variant_id == r.product_variant_id : t.cart_item_key == r.cart_item_key;
            },
            s = this.runtime.tmp.cart.findIndex(o);
        -1 != s &&
        this.updateCartCookie(
            { cart_item_key: this.runtime.tmp.cart[s].cart_item_key, product_variant_id: this.runtime.tmp.cart[s].product_variant_id, quantity: 0 },
            i,
            function () {
                -1 != (s = n.runtime.tmp.cart.findIndex(o)) && n.runtime.tmp.cart.splice(s, 1), i && (n.runtime.tmp.cart = []), n.runtime.tmp.generateCart(), n.changeTotalPriceCart();
                var t = document.getElementsByClassName("ladi-form-remove-coupon")[0];
                n.isEmpty(t) || t.click(),
                    n.updateCartPromotion(),
                0 == n.runtime.tmp.cart.length && -1 != [n.const.FORM_CONFIG_TYPE.ladisales].indexOf(n.runtime.shopping_product_type) && (window.ladi("_cart_token").delete_cookie(), window.ladi("_checkout_token").delete_cookie()),
                    n.runResizeAll(),
                n.isFunction(a) && a(!0);
            },
            function (t) {
                e && n.showMessage(t.message), n.isFunction(a) && a(!1);
            }
        );
    }),
    (LadiPageScriptV2.prototype.buttonAddToCartProductQuantity = function (t, e) {
        if (this.isArray(this.runtime.tmp.cart) && 0 != this.runtime.tmp.cart.length) {
            var i = this.findAncestor(t, "ladi-cart-quantity");
            if (!this.isEmpty(i)) {
                var a = i.querySelector("input");
                if (!this.isEmpty(a)) {
                    var n = parseInt(a.value) || 0;
                    (a.value = n + e < a.getAttribute("min") ? a.getAttribute("min") : n + e), a.value != n && this.fireEvent(a, "input");
                }
            }
        }
    }),
    (LadiPageScriptV2.prototype.changeAddToCartProductQuantity = function (t, e, i) {
        var a = this,
            n = { product_variant_id: e };
        try {
            (e = decodeURIComponentLadiPage(e)), (n = JSON.parse(e));
        } catch (t) {}
        var r = function (t) {
                return a.isEmpty(t.cart_item_key) ? t.product_variant_id == n.product_variant_id : t.cart_item_key == n.cart_item_key;
            },
            o = this.runtime.tmp.cart.findIndex(r);
        if (-1 != o) {
            var s = !1,
                l = -1,
                c = 1,
                d = null,
                p = null,
                u = this.runtime.tmp.cart[o];
            a.isEmpty(u) || ((c = u.min_buy || c), (d = u.max_buy));
            var m = this.runtime.tmp.cart[o].quantity;
            if (this.isEmpty(t.value)) i && (t.value = c), (this.runtime.tmp.cart[o].quantity = c);
            else {
                var _ = parseInt(t.value) || 0;
                1 == this.runtime.tmp.cart[o].inventory_checked && _ > (l = this.runtime.tmp.cart[o].available_quantity) && ((_ = l), (s = !0), (p = l)),
                    (_ = _ < c ? c : _),
                !this.isEmpty(d) && _ > d && ((_ = d), (s = !0), (a.isEmpty(p) || p > d) && (p = d)),
                    (this.runtime.tmp.cart[o].quantity = _),
                    (t.value = _);
            }
            s && this.showMessage(this.const.LANG.ADD_TO_CART_MAX_QUANTITY, { max: p, name: a.getMessageNameProduct(u) });
            var y = this.runtime.tmp.cart[o].quantity;
            if (m == y) return void (t.value = m);
            var g = { cart_item_key: this.runtime.tmp.cart[o].cart_item_key, product_variant_id: this.runtime.tmp.cart[o].product_variant_id, quantity: y };
            (g.product_type = this.runtime.tmp.cart[o].product_type),
                (g.package_quantity = this.runtime.tmp.cart[o].package_quantity),
                this.updateCartCookie(
                    g,
                    !1,
                    function () {
                        var t = document.getElementsByClassName("ladi-form-remove-coupon")[0];
                        a.isEmpty(t) || t.click(), a.updateCartPromotion();
                    },
                    function (t) {
                        (a.runtime.tmp.cart[o].quantity -= y - m), a.showMessage(t.message);
                    },
                    function () {
                        if ((a.changeTotalPriceCart(), -1 != (o = a.runtime.tmp.cart.findIndex(r)))) {
                            var e = a.runtime.tmp.cart[o].price * a.runtime.tmp.cart[o].quantity,
                                i = a.formatNumber(e, 3);
                            a.isObject(a.runtime.tmp.cart[o].currency) && !a.isEmpty(a.runtime.tmp.cart[o].currency.symbol) && (i = a.formatCurrency(e, a.runtime.tmp.cart[o].currency.symbol, !0));
                            for (var n = document.querySelectorAll(".ladi-cart-price span[data-product-variant-id]"), s = 0; s < n.length; s++)
                                if (n[s].getAttribute("data-store-id") == a.runtime.tmp.cart[o].store_id && n[s].getAttribute("data-product-id") == a.runtime.tmp.cart[o].product_id) {
                                    if (a.isEmpty(a.runtime.tmp.cart[o].cart_item_key)) {
                                        if (n[s].getAttribute("data-product-variant-id") != a.runtime.tmp.cart[o].product_variant_id) continue;
                                    } else if (n[s].getAttribute("data-cart-item-key") != a.runtime.tmp.cart[o].cart_item_key) continue;
                                    n[s].innerHTML = i;
                                    var l = a.findAncestor(n[s], "ladi-cart-row");
                                    if (!a.isEmpty(l)) {
                                        var c = a.findAncestor(t, "ladi-element"),
                                            d = a.findAncestor(l, "ladi-element");
                                        if (!a.isEmpty(c) && !a.isEmpty(d) && c.id == d.id) continue;
                                        var p = l.querySelector(".ladi-cart-image-quantity");
                                        a.isEmpty(p) || (p.innerHTML = a.runtime.tmp.cart[o].quantity);
                                        var u = l.querySelector(".ladi-cart-quantity input");
                                        a.isEmpty(u) || (u.value = a.runtime.tmp.cart[o].quantity);
                                    }
                                }
                        }
                    }
                );
        }
    }),
    (LadiPageScriptV2.prototype.updateProductVariantSelectOption = function (t, e, i, a, n) {
        var r = this,
            o = t.target,
            s = r.generateVariantProduct(e, !1, null, null, null, null, !0, !0, function (o) {
                r.updateProductVariantSelectOption(t, e, i, a, n);
            });
        if (r.isObject(s)) {
            var l = r.getProductVariantId(o, s.product),
                c = r.findAncestor(o, "ladi-collection-item"),
                d = [],
                p = 0;
            if (r.isEmpty(c))
                for (var u = document.querySelectorAll('[data-variant="true"]'), m = 0; m < u.length; m++) {
                    var _ = r.findAncestor(u[m], "ladi-form");
                    if (!r.isEmpty(_) && ((_ = r.findAncestor(_, "ladi-element")), r.isEmpty(r.findAncestor(_, "ladi-collection")))) {
                        var y = r.runtime.eventData[_.id];
                        r.isEmpty(y) || y["option.product_type"] != e["option.product_type"] || y["option.product_id"] != e["option.product_id"] || d.push(u[m]);
                    }
                }
            else d = c.querySelectorAll('[data-variant="true"]');
            var g = [];
            for (p = 0; p < d.length; p++) {
                if (a) {
                    var f = r.findAncestor(d[p], "ladi-popup");
                    if (r.isEmpty(f)) continue;
                    if ("POPUP_PRODUCT" != (f = r.findAncestor(f, "ladi-element")).id && "POPUP_BLOG" != f.id) continue;
                }
                g.push(d[p]);
            }
            var h = o.getAttribute("data-product-option-id"),
                v = null,
                E = null,
                P = null;
            if (r.isArray(s.product.variants) && 0 != s.product.variants.length) {
                if (r.isString(s.product.variants[0].option_ids)) {
                    for (P = s.product.variants[0].option_ids.split("/"), p = 0; p < P.length; p++)
                        if (P[p] == h) {
                            E = p;
                            break;
                        }
                    if (!r.isEmpty(E)) {
                        v = {};
                        var A = o.value;
                        o.classList.contains("ladi-form-label-container") && (A = r.runtime.tmp.getLabelValue(o)),
                            s.product.variants.forEach(function (t) {
                                if (r.isEmpty(A) || A == t["option" + (E + 1)]) for (p = 0; p < P.length; p++) r.isArray(v[P[p]]) || (v[P[p]] = []), p != E && v[P[p]].push(t["option" + (p + 1)]);
                            });
                    }
                }
                for (var L = v, b = [], w = [], S = null, T = 0; T < g.length; T++) {
                    var O = r.runtime.eventData[g[T].id];
                    if (!r.isEmpty(O)) {
                        v = r.copy(L);
                        var C = 0,
                            N = 0,
                            I = 0,
                            k = 0,
                            x = null,
                            D = null,
                            R = null,
                            F = null;
                        if (O["option.product_variant_type"] == r.const.PRODUCT_VARIANT_TYPE.combobox) {
                            if (((S = g[T].querySelectorAll("select[data-product-option-id]")), r.isObject(v))) {
                                for (C = 0; C < S.length; C++)
                                    if ((x = S[C].getAttribute("data-product-option-id")) != h)
                                        for ((r.isArray(v[x]) && -1 != v[x].indexOf(S[C].value)) || (S[C].value = ""), D = S[C].getElementsByTagName("option"), N = 0; N < D.length; N++)
                                            r.isEmpty(D[N].getAttribute("value")) || D[N].removeAttribute("disabled");
                                for (C = 0; C < S.length; C++) {
                                    for (x = S[C].getAttribute("data-product-option-id"), v = {}, I = 0; I < s.product.variants.length; I++)
                                        if (((F = s.product.variants[I]), (P = F.option_ids.split("/")), -1 != (E = P.indexOf(x)) && (r.isEmpty(S[C].value) || S[C].value == F["option" + (E + 1)])))
                                            for (p = 0; p < P.length; p++) r.isArray(v[P[p]]) || (v[P[p]] = []), p != E && v[P[p]].push(F["option" + (p + 1)]);
                                    for (k = 0; k < S.length; k++)
                                        if ((R = S[k].getAttribute("data-product-option-id")) != x)
                                            for (D = S[k].getElementsByTagName("option"), N = 0; N < D.length; N++)
                                                r.isEmpty(D[N].getAttribute("value")) || (r.isArray(v[R]) && -1 != v[R].indexOf(D[N].getAttribute("value"))) || D[N].setAttribute("disabled", "");
                                }
                            }
                            if (!r.isObject(v)) for (C = 0; C < S.length; C++) b.push(S[C]);
                        }
                        if (O["option.product_variant_type"] == r.const.PRODUCT_VARIANT_TYPE.label) {
                            if (((S = g[T].querySelectorAll(".ladi-form-label-container[data-product-option-id]")), r.isObject(v))) {
                                for (C = 0; C < S.length; C++)
                                    if ((x = S[C].getAttribute("data-product-option-id")) != h) {
                                        var q = r.runtime.tmp.getLabelValue(S[C]);
                                        for ((r.isArray(v[x]) && -1 != v[x].indexOf(q)) || r.runtime.tmp.updateLabelValue(S[C], null), D = S[C].getElementsByClassName("ladi-form-label-item"), N = 0; N < D.length; N++)
                                            D[N].classList.contains("no-value") || D[N].classList.remove("disabled");
                                    }
                                for (C = 0; C < S.length; C++) {
                                    for (x = S[C].getAttribute("data-product-option-id"), v = {}, I = 0; I < s.product.variants.length; I++)
                                        if (((F = s.product.variants[I]), (P = F.option_ids.split("/")), -1 != (E = P.indexOf(x)))) {
                                            var M = r.runtime.tmp.getLabelValue(S[C]);
                                            if (r.isEmpty(M) || M == F["option" + (E + 1)]) for (p = 0; p < P.length; p++) r.isArray(v[P[p]]) || (v[P[p]] = []), p != E && v[P[p]].push(F["option" + (p + 1)]);
                                        }
                                    for (k = 0; k < S.length; k++)
                                        if ((R = S[k].getAttribute("data-product-option-id")) != x)
                                            for (D = S[k].getElementsByClassName("ladi-form-label-item"), N = 0; N < D.length; N++)
                                                if (!D[N].classList.contains("no-value")) {
                                                    var B = r.runtime.tmp.getOptionLabelValue(D[N]);
                                                    (r.isArray(v[R]) && -1 != v[R].indexOf(B)) || D[N].classList.add("disabled");
                                                }
                                }
                            }
                            if (!r.isObject(v)) for (C = 0; C < S.length; C++) w.push(S[C]);
                        }
                    }
                }
                !r.isEmpty(l) && r.isFunction(n) && n();
                for (var Y = null; b.length > 0; ) (Y = b.shift()), r.fireEvent(Y, "change");
                for (; w.length > 0; ) (Y = w.shift()), r.runtime.tmp.fireEventLabelChange(Y);
                for (S = document.querySelectorAll(".ladi-form .ladi-form-label-container"), T = 0; T < S.length; T++) {
                    var V = r.runtime.tmp.getLabelValue(S[T]);
                    if (!r.isEmpty(V)) r.findAncestor(S[T], "ladi-element").getAttribute("data-title-type") == r.const.PRODUCT_VARIANT_TITLE.top && (V = ": " + V);
                    var H = r.findAncestor(S[T], "ladi-form-item-box");
                    r.isEmpty(H) || ((H = H.querySelector(".ladi-form-item-title-value")), r.isEmpty(H) || (H.innerHTML = V));
                }
            }
        }
    }),
    (LadiPageScriptV2.prototype.updateProductVariantSelectOptionFirst = function (t, e, i) {
        var a = this,
            n = a.generateVariantProduct(t, !1, null, null, null, null, !0, !0, function () {
                a.updateProductVariantSelectOptionFirst(t, e, i);
            });
        if (a.isObject(n) && a.isObject(n.product)) {
            var r = i.querySelectorAll("select.ladi-form-control"),
                o = i.querySelectorAll(".ladi-form-label-container"),
                s = 0;
            if (a.isArray(n.product.variants) && 0 != n.product.variants.length) {
                var l = null,
                    c = null;
                if (
                    (a.isEmpty(t["option.product_variant_id"]) ||
                    (l = n.product.variants.find(function (e) {
                        return e.product_variant_id == t["option.product_variant_id"];
                    })),
                    a.isEmpty(l) && (l = n.product.variants[0]),
                    e["option.product_variant_type"] == a.const.PRODUCT_VARIANT_TYPE.combined)
                )
                    for (s = 0; s < r.length; s++) (c = r[s].querySelector('option[data-product-variant-id="' + l.product_variant_id + '"]')), a.isEmpty(c) || ((r[s].value = c.getAttribute("value")), a.fireEvent(r[s], "change"));
                e["option.product_variant_type"] == a.const.PRODUCT_VARIANT_TYPE.combobox &&
                a.isString(l.option_ids) &&
                l.option_ids.split("/").forEach(function (t, e) {
                    for (s = 0; s < r.length; s++) r[s].getAttribute("data-product-option-id") == t && ((r[s].value = l["option" + (e + 1)] || ""), a.fireEvent(r[s], "change"));
                }),
                e["option.product_variant_type"] == a.const.PRODUCT_VARIANT_TYPE.label &&
                a.isString(l.option_ids) &&
                l.option_ids.split("/").forEach(function (t, e) {
                    for (s = 0; s < o.length; s++) o[s].getAttribute("data-product-option-id") == t && (a.runtime.tmp.updateLabelValue(o[s], l["option" + (e + 1)] || ""), a.runtime.tmp.fireEventLabelChange(o[s]));
                });
            } else {
                for (s = 0; s < r.length; s++) (r[s].value = ""), a.fireEvent(r[s], "change");
                for (s = 0; s < o.length; s++) a.runtime.tmp.updateLabelValue(o[s], null), a.runtime.tmp.fireEventLabelChange(o[s]);
            }
        }
    }),
    (LadiPageScriptV2.prototype.generateHtmlCart = function (t, e, i) {
        var a = this,
            n = [];
        if (i) n = a.runtime.tmp.cart;
        else {
            var r = LadiPage.getRootScope().getStoreCurrency();
            n = [
                {
                    name: "Product Name",
                    title: "Product Variant",
                    price: 9999,
                    image: LadiPage.getRootScope().logoUrlColor,
                    quantity: 1,
                    inventory_checked: 0,
                    available_quantity: 999,
                    currency: { code: r, symbol: a.formatCurrency(null, r, !1, !0) },
                },
            ];
        }
        var o = "";
        if (((o += "<tbody>"), 0 == n.length)) o += '<tr><td class="ladi-cart-no-product">' + e + "</td></tr>";
        else {
            n.forEach(function (e, n) {
                if (!(e.quantity <= 0)) {
                    var r = { product_variant_id: e.product_variant_id, cart_item_key: e.cart_item_key };
                    (r = JSON.stringify(r)), (r = encodeURIComponent(r));
                    var s = a.getOptimizeImage(e.image, 60, 60, !0, !1, !0, i);
                    (o += '<tr class="ladi-cart-row' + (a.isObject(e.promotion) ? " has-promotion" : "") + '"><td class="ladi-cart-image"><img src="' + s + '" />'),
                    t == a.const.CART_LAYOUT.viewonly && (o += '<span class="ladi-cart-image-quantity">' + e.quantity + "</span>"),
                        (o += "</td>"),
                        (o += '<td class="ladi-cart-title"><span class="ladi-cart-title-name">' + e.name + '</span><span class="ladi-cart-title-variant">' + (e.title || "") + "</span>"),
                    a.isObject(e.promotion) && (o += '<span class="promotion-name">' + e.promotion.discount.note + "</span>"),
                        (o += "</td>"),
                    t == a.const.CART_LAYOUT.editable &&
                    (o +=
                        '<td class="ladi-cart-quantity"><div class="ladi-cart-quantity-content"><button onclick="javascript: LadiPageScript.buttonAddToCartProductQuantity(this, -1);" type="button"><span>-</span></button><input' +
                        (i ? "" : " disabled") +
                        ' type="number" min="1" value="' +
                        e.quantity +
                        '" oninput="javascript: LadiPageScript.changeAddToCartProductQuantity(this, \'' +
                        r +
                        '\', true);" /><button onclick="javascript: LadiPageScript.buttonAddToCartProductQuantity(this, 1);" type="button"><span>+</span></button></div></td>'),
                        (o +=
                            '<td class="ladi-cart-price"><span' +
                            (a.isNull(e.store_id) ? "" : ' data-store-id="' + e.store_id + '"') +
                            ' data-product-id="' +
                            e.product_id +
                            '" data-product-variant-id="' +
                            e.product_variant_id +
                            '" data-cart-item-key="' +
                            e.cart_item_key +
                            '">');
                    var l = e.price * e.quantity,
                        c = a.formatNumber(l, 3);
                    a.isObject(e.currency) && !a.isEmpty(e.currency.symbol) && (c = a.formatCurrency(l, e.currency.symbol, !0)),
                        (o += c + "</span>"),
                    a.isObject(e.promotion) &&
                    ((l = e.promotion.total),
                        (c = a.formatNumber(l, 3)),
                    a.isObject(e.currency) && !a.isEmpty(e.currency.symbol) && (c = a.formatCurrency(l, e.currency.symbol, !0)),
                        (o += '<span class="price-compare">' + c + "</span>")),
                        (o += "</td>"),
                    t == a.const.CART_LAYOUT.editable &&
                    ((o += '<td class="ladi-cart-action"><button onclick="javascript: LadiPageScript.removeAddToCartProduct(\'' + r + '\', true);" type="button"><span>X</span></button></td>'), (o += "</tr>"));
                }
            });
        }
        return (o += "</tbody>");
    }),
    (LadiPageScriptV2.prototype.getProductVariantId = function (t, e) {
        var i = null,
            a = this.findAncestor(t, "ladi-element"),
            n = this;
        if (!this.isEmpty(a)) {
            var r = this.runtime.eventData[a.id];
            if (!this.isEmpty(r) && r["option.product_variant_type"] == this.const.PRODUCT_VARIANT_TYPE.combined) {
                var o = a.querySelector("select.ladi-form-control");
                if (!this.isEmpty(o) && !this.isEmpty(o.value)) {
                    var s = o.querySelector('option[value="' + o.value + '"]');
                    this.isEmpty(s) || (i = s.getAttribute("data-product-variant-id"));
                }
            }
            var l = null,
                c = null;
            if (!this.isEmpty(r) && (r["option.product_variant_type"] == this.const.PRODUCT_VARIANT_TYPE.combobox || r["option.product_variant_type"] == this.const.PRODUCT_VARIANT_TYPE.label)) {
                (c = {}), (l = a.querySelectorAll(".ladi-form-item select[data-product-option-id]"));
                for (var d = 0; d < l.length; d++) c[l[d].getAttribute("data-product-option-id")] = (n.isEmpty(l[d].value) ? "" : l[d].value).trim();
                for (l = a.querySelectorAll(".ladi-form-label-container[data-product-option-id]"), d = 0; d < l.length; d++) c[l[d].getAttribute("data-product-option-id")] = n.runtime.tmp.getLabelValue(l[d]).trim();
                this.isArray(e.variants) &&
                e.variants.forEach(function (t) {
                    if (n.isEmpty(i)) {
                        var e = !0;
                        if (n.isString(t.option_ids))
                            for (var a = t.option_ids.split("/"), r = 0; r < a.length; r++)
                                if (c[a[r].trim()] != (t["option" + (r + 1)] || "").trim()) {
                                    e = !1;
                                    break;
                                }
                        e && (i = t.product_variant_id);
                    }
                });
            }
        }
        return i;
    }),
    (LadiPageScriptV2.prototype.getProductVariantIndex = function (t, e) {
        var i = this,
            a = -1,
            n = e["option.product_type"],
            r = e["option.ladisale_store_id"] || null,
            o = e["option.product_id"],
            s = i.generateVariantProduct(e, !1, null, null, null, null, !0, !0);
        if (!i.isObject(s) || !i.isObject(s.store_info) || !i.isObject(s.product) || !i.isArray(s.product.variants) || s.product.variants.length <= 0) return a;
        this.runtime.isClient
            ? Object.keys(this.runtime.eventData).forEach(function (e) {
                if ((i.isEmpty(t) || t == e) && -1 == a) {
                    var l = i.runtime.eventData[e];
                    if ("form" == l.type && l["option.is_add_to_cart"] && l["option.product_type"] == n && l["option.product_id"] == o && l["option.ladisale_store_id"] == r) {
                        var c = document.getElementById(e);
                        if (!i.isEmpty(c)) {
                            var d = c.querySelector('[data-variant="true"]');
                            if (!i.isEmpty(d)) {
                                var p = i.runtime.eventData[d.id];
                                if (!i.isEmpty(p)) {
                                    var u = null;
                                    if (
                                        (p["option.product_variant_type"] == i.const.PRODUCT_VARIANT_TYPE.combobox &&
                                        ((u = d.querySelectorAll(".ladi-form-item select[data-product-option-id]")),
                                            (a = s.product.variants.findIndex(function (t) {
                                                for (
                                                    var e = !0,
                                                        a = null,
                                                        n = function (t) {
                                                            return t == a;
                                                        },
                                                        r = 0;
                                                    r < u.length;
                                                    r++
                                                )
                                                    if (u[r].getAttribute("data-store-id") == s.store_info.id && u[r].getAttribute("data-product-id") == t.product_id) {
                                                        a = u[r].getAttribute("data-product-option-id");
                                                        var o = u[r].value;
                                                        if (i.isString(t.option_ids)) {
                                                            var l = t.option_ids.split("/").findIndex(n);
                                                            if (-1 != l && t["option" + (l + 1)] != o) {
                                                                e = !1;
                                                                break;
                                                            }
                                                        }
                                                    }
                                                return e;
                                            }))),
                                        p["option.product_variant_type"] == i.const.PRODUCT_VARIANT_TYPE.label &&
                                        ((u = d.querySelectorAll(".ladi-form-label-container[data-product-option-id]")),
                                            (a = s.product.variants.findIndex(function (t) {
                                                for (
                                                    var e = !0,
                                                        a = null,
                                                        n = function (t) {
                                                            return t == a;
                                                        },
                                                        r = 0;
                                                    r < u.length;
                                                    r++
                                                )
                                                    if (u[r].getAttribute("data-store-id") == s.store_info.id && u[r].getAttribute("data-product-id") == t.product_id) {
                                                        a = u[r].getAttribute("data-product-option-id");
                                                        var o = i.runtime.tmp.getLabelValue(u[r]);
                                                        if (i.isString(t.option_ids)) {
                                                            var l = t.option_ids.split("/").findIndex(n);
                                                            if (-1 != l && t["option" + (l + 1)] != o) {
                                                                e = !1;
                                                                break;
                                                            }
                                                        }
                                                    }
                                                return e;
                                            }))),
                                        p["option.product_variant_type"] == i.const.PRODUCT_VARIANT_TYPE.combined)
                                    ) {
                                        var m = d.querySelector(".ladi-form-control");
                                        if (i.isEmpty(m) || m.getAttribute("data-store-id") != s.store_info.id || m.getAttribute("data-product-id") != s.product.product_id) return;
                                        (a = m.value), (a = i.isEmpty(a) ? -1 : parseInt(a));
                                    }
                                }
                            }
                        }
                    }
                }
            })
            : (a = 0);
        return a;
    }),
    (LadiPageScriptV2.prototype.generateProductKey = function (t, e, i, a, n, r, o, s) {
        var l = this;
        l.isEmpty(o) || (a["option.product_id"] = o.product_id);
        var c = a["option.product_type"],
            d = a["option.product_mapping_name"],
            p = l.generateVariantProduct(a, !1, null, null, null, null, !0, !0, function (i) {
                l.generateProductKey(t, e, !1, a, n, r, o, s);
            }),
            u = null;
        function m(t) {
            return (t >= 10 ? "" : "0") + t;
        }
        if (l.isObject(p) && l.isObject(p.product)) {
            var _ = null,
                y = null;
            p.product.type == l.const.PRODUCT_TYPE.event && "description" == d && (d = "content");
            var g = function () {
                if (-1 != [l.const.FORM_CONFIG_TYPE.ladisales, l.const.FORM_CONFIG_TYPE.sapo, l.const.FORM_CONFIG_TYPE.haravan, l.const.FORM_CONFIG_TYPE.shopify, l.const.FORM_CONFIG_TYPE.wordpress].indexOf(c)) {
                    if ((-1 != ["name", "description", "content", "location", "timezone", "external_link"].indexOf(d) && ((_ = p.product[d]), (e = _)), -1 != ["start_date", "end_date"].indexOf(d))) {
                        _ = p.product[d];
                        try {
                            (y = new Date(_)).toISOString() == _ && (_ = y.getFullYear() + "-" + m(y.getMonth() + 1) + "-" + m(y.getDate()) + " " + m(y.getHours()) + ":" + m(y.getMinutes()) + ":" + m(y.getSeconds()));
                        } catch (t) {}
                        e = _;
                    }
                    if (
                        (-1 != ["image"].indexOf(d) &&
                        ((_ = p.product[d]),
                        l.isObject(_) && ((e = _.src), l.isEmpty(e) || !l.isString(e) || e.startsWith("http://") || e.startsWith("https://") || e.startsWith("//") || (e = "https://" + l.const.STATIC_W_DOMAIN + "/" + e))),
                        -1 != ["images"].indexOf(d) &&
                        ((_ = p.product[d]),
                        l.isArray(_) &&
                        ((e = []),
                            _.forEach(function (t) {
                                l.isEmpty(t.src) ||
                                (!l.isString(t.src) || t.src.startsWith("http://") || t.src.startsWith("https://") || t.src.startsWith("//")
                                    ? e.push({ src: t.src })
                                    : e.push({ src: "https://" + l.const.STATIC_W_DOMAIN + "/" + t.src }));
                            }))),
                        l.isArray(p.product.variants) && p.product.variants.length > 0)
                    ) {
                        var t = n ? 0 : l.getProductVariantIndex(null, a);
                        if (
                            (l.isEmpty(r) ||
                            (t = p.product.variants.findIndex(function (t) {
                                return t.product_variant_id == r;
                            })),
                            -1 != t)
                        ) {
                            var o = p.product.variants[t];
                            if (((u = o), -1 != ["variant_start_date", "variant_end_date"].indexOf(d))) {
                                _ = o[d];
                                try {
                                    (y = new Date(_)).toISOString() == _ && (_ = y.getFullYear() + "-" + m(y.getMonth() + 1) + "-" + m(y.getDate()) + " " + m(y.getHours()) + ":" + m(y.getMinutes()) + ":" + m(y.getSeconds()));
                                } catch (t) {}
                                e = _;
                            }
                            if (
                                (-1 != ["sku", "variant_timezone"].indexOf(d) && ((_ = o[d]), (e = _)),
                                -1 != ["title"].indexOf(d) && ((_ = o[d] || o.product_name), (e = _)),
                                -1 != ["text_quantity"].indexOf(d) && ((_ = 1 == o.inventory_checked ? o[d] : ""), (e = _)),
                                -1 != ["weight"].indexOf(d) && ((_ = o[d]), l.isEmpty(o.weight_unit) || (_ += o.weight_unit), (e = _)),
                                -1 != ["price", "compare_price"].indexOf(d) &&
                                (l.isEmpty(o[d])
                                    ? (_ = "")
                                    : ((_ = l.formatNumber(o[d], 3)),
                                    l.isObject(p.store_info) && l.isObject(p.store_info.currency) && !l.isEmpty(p.store_info.currency.symbol) && (_ = l.formatCurrency(o[d], p.store_info.currency.symbol, !0))),
                                    (e = _)),
                                -1 != ["price_sale"].indexOf(d))
                            ) {
                                var f = 0;
                                l.isEmpty(o.price) || l.isEmpty(o.compare_price) || (f = o.compare_price - o.price),
                                    0 != f
                                        ? ((_ = l.formatNumber(f, 3)), l.isObject(p.store_info) && l.isObject(p.store_info.currency) && !l.isEmpty(p.store_info.currency.symbol) && (_ = l.formatCurrency(f, p.store_info.currency.symbol, !0)))
                                        : (_ = ""),
                                    (e = _);
                            }
                            if (-1 != ["price_sale_percent"].indexOf(d)) {
                                var h = 0;
                                l.isEmpty(o.price) || l.isEmpty(o.compare_price) || (h = Math.floor(((o.compare_price - o.price) / o.compare_price) * 100)), (e = _ = 0 != h ? h + "%" : "");
                            }
                            if (-1 != ["src"].indexOf(d)) {
                                if (((_ = o[d]), l.isEmpty(_))) return (d = "image"), g();
                                !l.isString(_) || _.startsWith("http://") || _.startsWith("https://") || _.startsWith("//") || (_ = "https://" + l.const.STATIC_W_DOMAIN + "/" + _), (e = _);
                            }
                            -1 != ["description"].indexOf(d) && ((_ = o[d]), l.isEmpty(_) || (e = _));
                        } else e = _ = "";
                    }
                } else {
                    if (((_ = p.product[d]), l.isBoolean(_))) _ = _ ? l.const.LANG.OPTION_TRUE : l.const.LANG.OPTION_FALSE;
                    else
                        try {
                            (y = new Date(_)).toISOString() == _ && (_ = y.getFullYear() + "-" + m(y.getMonth() + 1) + "-" + m(y.getDate()) + " " + m(y.getHours()) + ":" + m(y.getMinutes()) + ":" + m(y.getSeconds()));
                        } catch (t) {}
                    e = _;
                }
                !i && l.isFunction(s) && s(e);
            };
            g();
        }
        return t ? { product: p, variant: u, value: e } : e;
    }),
    (LadiPageScriptV2.prototype.generateVariantProduct = function (t, e, i, a, n, r, o, s, l) {
        var c = e ? "" : null,
            d = this,
            p = function (t) {
                if (!e) return d.isObject(t) ? t : null;
                var s = "";
                if (d.isObject(t)) {
                    if (!d.isObject(t.product)) return s;
                    i == d.const.PRODUCT_VARIANT_TYPE.combined &&
                    ((s +=
                        '<div class="ladi-form-item-container"><div class="ladi-form-item-background"></div><div class="ladi-form-item"><select' +
                        (d.isObject(t.store_info) && !d.isNull(t.store_info.id) ? ' data-store-id="' + t.store_info.id + '"' : "") +
                        ' data-product-id="' +
                        t.product.product_id +
                        '" required tabindex="' +
                        r +
                        '" class="ladi-form-control ladi-form-control-select" data-selected=""' +
                        (o ? "" : ' onmousedown="javascript: event.preventDefault();"') +
                        ">"),
                    d.runtime.isClient && (s += '<option value="" data-product-variant-id="">' + d.const.LANG.OPTION_NO_SELECT + "</option>"),
                    d.isArray(t.product.variants) &&
                    t.product.variants.forEach(function (e, i) {
                        var a = e.title || e.product_name;
                        if (n) {
                            var r = d.formatNumber(e.price, 3);
                            d.isObject(t.store_info) && d.isObject(t.store_info.currency) && !d.isEmpty(t.store_info.currency.symbol) && (r = d.formatCurrency(e.price, t.store_info.currency.symbol, !0)), (a += " - " + r);
                        }
                        s += '<option value="' + i + '" data-product-variant-id="' + e.product_variant_id + '">' + a + "</option>";
                    }),
                        (s += "</select></div></div>")),
                    i == d.const.PRODUCT_VARIANT_TYPE.combobox &&
                    d.isArray(t.product.options) &&
                    t.product.options.forEach(function (e) {
                        if (e.is_tmp) s += '<div class="ladi-form-item-box"></div>';
                        else if (d.isArray(e.values) && 0 != e.values.length) {
                            (s += '<div class="ladi-form-item-box">'),
                            d.isEmpty(a) || (s += '<div class="ladi-form-item-title"><span>' + e.name + "</span></div>"),
                                (s +=
                                    '<div class="ladi-form-item-container"><div class="ladi-form-item-background"></div><div class="ladi-form-item"><select' +
                                    (d.isObject(t.store_info) && !d.isNull(t.store_info.id) ? ' data-store-id="' + t.store_info.id + '"' : "") +
                                    ' data-product-id="' +
                                    e.product_id +
                                    '" data-product-option-id="' +
                                    e.product_option_id +
                                    '" required tabindex="' +
                                    r +
                                    '" class="ladi-form-control ladi-form-control-select" data-selected=""' +
                                    (o ? "" : ' onmousedown="javascript: event.preventDefault();"') +
                                    ">"),
                            d.runtime.isClient && (s += '<option value="">' + d.const.LANG.OPTION_NO_SELECT + "</option>");
                            var i = null;
                            d.isArray(t.product.variants) && (i = t.product.variants[0]);
                            var n = null;
                            d.isEmpty(i) || (d.isString(i.option_ids) && (n = i.option_ids.split("/")));
                            e.values.forEach(function (t) {
                                var a = (function (t) {
                                    var a = "";
                                    return (
                                        d.isArray(n) &&
                                        n.forEach(function (n, r) {
                                            e.product_option_id == n && t == i["option" + (r + 1)] && (a = " selected");
                                        }),
                                            a
                                    );
                                })(t.name);
                                s += "<option" + a + ' value="' + t.name + '">' + (t.name_new || t.name) + "</option>";
                            }),
                                (s += "</select></div></div></div>");
                        }
                    }),
                    i == d.const.PRODUCT_VARIANT_TYPE.label &&
                    d.isArray(t.product.options) &&
                    t.product.options.forEach(function (e) {
                        if (d.isArray(e.values) && 0 != e.values.length) {
                            (s += '<div class="ladi-form-item-box">'),
                            d.isEmpty(a) || ((s += '<div class="ladi-form-item-title">'), (s += "<span>" + e.name + "</span>"), (s += '<span class="ladi-form-item-title-value"></span>'), (s += "</div>")),
                                (s +=
                                    '<div class="ladi-form-label-container"' +
                                    (d.isObject(t.store_info) && !d.isNull(t.store_info.id) ? ' data-store-id="' + t.store_info.id + '"' : "") +
                                    ' data-product-id="' +
                                    e.product_id +
                                    '" data-product-option-id="' +
                                    e.product_option_id +
                                    '" data-selected="">');
                            var i = null;
                            d.isArray(t.product.variants) && (i = t.product.variants[0]);
                            var n = null;
                            d.isEmpty(i) || (d.isString(i.option_ids) && (n = i.option_ids.split("/")));
                            e.values.forEach(function (t, a) {
                                0 == a &&
                                (t.type == d.const.PRODUCT_VARIANT_OPTION_TYPE.image
                                    ? (s += '<div class="ladi-form-label-item image no-value" data-value=""></div>')
                                    : t.type == d.const.PRODUCT_VARIANT_OPTION_TYPE.color
                                        ? (s += '<div class="ladi-form-label-item color no-value" data-value=""></div>')
                                        : (s += '<div class="ladi-form-label-item text no-value" data-value="">&nbsp;</div>'));
                                var r = (function (t) {
                                    var a = "";
                                    return (
                                        d.isArray(n) &&
                                        n.forEach(function (n, r) {
                                            e.product_option_id == n && t == i["option" + (r + 1)] && (a = " selected");
                                        }),
                                            a
                                    );
                                })(t.name);
                                if (t.type == d.const.PRODUCT_VARIANT_OPTION_TYPE.image) {
                                    var o = t.value;
                                    d.isEmpty(o) || !d.isString(o) || o.startsWith("http://") || o.startsWith("https://") || o.startsWith("//") || (o = "https://" + d.const.STATIC_W_DOMAIN + "/" + o),
                                        (o = d.getOptimizeImage(o, 100, 100, !1, !1, !1, !0)),
                                        (s += '<div class="ladi-form-label-item image' + r + '" style=\'background-image: url("' + o + '");\' title="' + (t.name_new || t.name) + '" data-value="' + t.name + '"></div>');
                                } else t.type == d.const.PRODUCT_VARIANT_OPTION_TYPE.color ? (s += '<div class="ladi-form-label-item color' + r + "\" style='background-color: " + t.value + ";' title=\"" + (t.name_new || t.name) + '" data-value="' + t.name + '"></div>') : (s += '<div class="ladi-form-label-item text' + r + '" data-value="' + t.name + '">' + (t.name_new || t.name) + "</div>");
                            }),
                                (s += "</div></div>");
                        }
                    });
                }
                return s;
            };
        if (!d.isNull(t.dataProduct)) return p(t.dataProduct);
        var u = t["option.form_account_id"],
            m = t["option.product_type"],
            _ = t["option.ladisale_store_id"] || null,
            y = t["option.product_id"],
            g = t["option.data_setting.value"],
            f = t["option.data_setting.type_dataset"],
            h = t["option.data_setting.sort_name"],
            v = t["option.data_setting.sort_by"],
            E = null,
            P = null;
        if (-1 != [d.const.FORM_CONFIG_TYPE.ladisales, d.const.FORM_CONFIG_TYPE.sapo, d.const.FORM_CONFIG_TYPE.haravan, d.const.FORM_CONFIG_TYPE.shopify, d.const.FORM_CONFIG_TYPE.wordpress].indexOf(m)) {
            if (!d.isEmpty(y)) {
                if (
                    (d.isEmpty(d.runtime.tmp.product_info[m]) && (d.runtime.tmp.product_info[m] = {}),
                    d.isEmpty(d.runtime.tmp.timeout_product_info[m]) && (d.runtime.tmp.timeout_product_info[m] = {}),
                        (y = parseInt(y) || y),
                        (E = d.runtime.tmp.product_info[m][y]),
                        (P = function () {
                            return p(E);
                        }),
                        d.isNull(E))
                ) {
                    d.runtime.tmp.product_info[m][y] = !0;
                    var A = function () {
                            (d.runtime.tmp.product_info[m][y] = !1), d.isEmpty(d.runtime.tmp.timeout_product_info[m][y]) || (d.removeTimeout(d.runtime.tmp.timeout_product_info[m][y]), delete d.runtime.tmp.timeout_product_info[m][y]);
                        },
                        L = function (t) {
                            if (((E = d.isObject(d.runtime.tmp.product_info[m][y]) ? d.runtime.tmp.product_info[m][y] : t.data), d.isObject(E))) {
                                if (!d.isObject(E.store_info)) {
                                    var e = d.runtime.currency;
                                    d.runtime.isClient || (e = LadiPage.getRootScope().getStoreCurrency()), (E.store_info = { currency: { code: e, symbol: d.formatCurrency(null, e, !1, !0) } });
                                }
                                if ((m != d.const.FORM_CONFIG_TYPE.ladisales && (E.store_info.id = -1), d.isObject(E.product) && d.isArray(E.product.options) && d.isArray(E.product.variants))) {
                                    var i = E.product.options.map(function (t) {
                                        return t.product_option_id;
                                    });
                                    i = i.join("/");
                                    for (var a = 0; a < E.product.variants.length; a++)
                                        -1 != [d.const.FORM_CONFIG_TYPE.ladisales].indexOf(m) && 1 == E.product.variants[a].allow_sold_out && (E.product.variants[a].inventory_checked = 0),
                                        d.isNull(E.product.variants[a].compare_price) && (E.product.variants[a].compare_price = E.product.variants[a].price_compare),
                                        d.isNull(E.product.variants[a].variant_start_date) && (E.product.variants[a].variant_start_date = E.product.variants[a].start_date),
                                        d.isNull(E.product.variants[a].variant_end_date) && (E.product.variants[a].variant_end_date = E.product.variants[a].end_date),
                                        d.isNull(E.product.variants[a].variant_timezone) && (E.product.variants[a].variant_timezone = E.product.variants[a].timezone),
                                        d.isEmpty(E.product.variants[a].option_ids) && (E.product.variants[a].option_ids = i),
                                        -1 != [d.const.FORM_CONFIG_TYPE.sapo, d.const.FORM_CONFIG_TYPE.haravan, d.const.FORM_CONFIG_TYPE.shopify].indexOf(m) &&
                                        1 == E.product.variants.length &&
                                        "Default Title" == E.product.variants[a].title &&
                                        ((E.product.variants[a].title = null), (E.product.variants[a].option1 = null), (E.product.options = [])),
                                        -1 != [d.const.FORM_CONFIG_TYPE.wordpress].indexOf(m) &&
                                        1 == E.product.variants.length &&
                                        E.product.variants[a].title == E.product.variants[a].product_name &&
                                        ((E.product.variants[a].title = null), (E.product.variants[a].option1 = null), (E.product.options = [])),
                                        d.isEmpty(E.product.variants[a].package_quantity) ||
                                        d.isEmpty(E.product.variants[a].package_quantity_unit) ||
                                        (d.isNull(E.product.variants[a].title_old) && (E.product.variants[a].title_old = E.product.variants[a].title),
                                            (E.product.variants[a].title = E.product.variants[a].title_old + " (" + E.product.variants[a].package_quantity + " " + E.product.variants[a].package_quantity_unit + ")"));
                                    if (d.isArray(E.product.options) && 1 == E.product.options.length && d.isArray(E.product.options[0].values))
                                        for (
                                            var n = null,
                                                r = function (t) {
                                                    return t.option1 == n;
                                                },
                                                o = 0;
                                            o < E.product.options[0].values.length;
                                            o++
                                        ) {
                                            n = E.product.options[0].values[o].name;
                                            var s = E.product.variants.find(r);
                                            (E.product.options[0].values[o].name_new = E.product.options[0].values[o].label || E.product.options[0].values[o].name),
                                            d.isEmpty(s) ||
                                            d.isEmpty(s.package_quantity) ||
                                            d.isEmpty(s.package_quantity_unit) ||
                                            (E.product.options[0].values[o].name_new = E.product.options[0].values[o].name_new + " (" + s.package_quantity + " " + s.package_quantity_unit + ")");
                                        }
                                }
                                (d.runtime.tmp.product_info[m][y] = E), (c = P()), d.isFunction(l) && l(c);
                            } else A();
                        },
                        b = { product_id: y },
                        w = null,
                        S = "POST";
                    return (
                        d.runLimitRequest(20, function () {
                            if (d.runtime.isClient) {
                                var t = d.const.API_LADISALE_SHOW_PRODUCT;
                                m == d.const.FORM_CONFIG_TYPE.ladisales
                                    ? (((w = { "Content-Type": "application/json" })["Store-Id"] = _), (b = JSON.stringify(b)))
                                    : m == d.const.FORM_CONFIG_TYPE.wordpress
                                        ? ((S = "GET"), (t = window.location.origin + "/ladipage/api?action=product_info&product_id=" + y), (b = null))
                                        : ((w = { "Content-Type": "application/json" }), (t = d.const.API_SHOW_PRODUCT), (b = { form_account_id: u, product_id: y }), (b = JSON.stringify(b))),
                                    d.sendRequest(S, t, b, !0, w, function (t, e, i) {
                                        if (i.readyState == XMLHttpRequest.DONE)
                                            try {
                                                var a = JSON.parse(t);
                                                L(a);
                                            } catch (t) {
                                                A();
                                            }
                                    });
                            } else {
                                var e = function (t) {
                                        d.isNull(t) || L({ data: t });
                                    },
                                    i = LadiPage.getProductInfo(u, y, function (t) {
                                        e(t);
                                    });
                                e(i);
                            }
                        }),
                            c
                    );
                }
                !0 === E
                    ? (d.runtime.tmp.timeout_product_info[m][y] = d.runTimeout(function () {
                        d.generateVariantProduct(t, e, i, a, n, r, o, !1, l);
                    }, 100))
                    : ((c = P()), !s && d.isFunction(l) && l(c));
            }
        } else if (!d.isEmpty(y)) {
            if (
                (d.isEmpty(d.runtime.tmp.product_info[m]) && (d.runtime.tmp.product_info[m] = {}),
                d.isEmpty(d.runtime.tmp.timeout_product_info[m]) && (d.runtime.tmp.timeout_product_info[m] = {}),
                    (y += ""),
                    (E = d.runtime.tmp.product_info[m][y]),
                    (P = function () {
                        return e ? "" : d.isObject(E) ? E : null;
                    }),
                    d.isNull(E))
            )
                return (
                    (d.runtime.tmp.product_info[m][y] = !0),
                        d.loadDataset(g, g, f, h, v, !0, d.runtime.isClient, function (t) {
                            (c = P()), d.isFunction(l) && l(c);
                        }),
                        c
                );
            !0 === E
                ? (d.runtime.tmp.timeout_product_info[m][y] = d.runTimeout(function () {
                    d.generateVariantProduct(t, e, i, a, n, r, o, !1, l);
                }, 100))
                : ((c = P()), !s && d.isFunction(l) && l(c));
        }
        return c;
    }),
    (LadiPageScriptV2.prototype.generateVariantContentString = function (t, e, i, a) {
        var n = [];
        i = this.isEmpty(i) ? " | " : i;
        try {
            this.isEmpty(t) ||
            (e && (t = Base64.decode(t)),
                (t = JSON.parse(t)),
            this.isArray(t.dynamic_content.hide) && t.dynamic_content.hide.length > 0 && n.push(this.const.LANG.HIDE_ELEMENT + " " + t.dynamic_content.hide.join(", ")),
            this.isArray(t.dynamic_content.show) && t.dynamic_content.show.length > 0 && n.push(this.const.LANG.SHOW_ELEMENT + " " + t.dynamic_content.show.join(", ")),
            this.isArray(t.dynamic_content.top) && t.dynamic_content.top.length > 0 && n.push(this.const.LANG.TOP_ELEMENT + " " + t.dynamic_content.top.join(", ")),
            this.isArray(t.dynamic_content.scroll) && t.dynamic_content.scroll.length > 0 && n.push(this.const.LANG.SCROLL_ELEMENT + " " + t.dynamic_content.scroll.join(", ")),
            this.isArray(t.dynamic_content.cookie) && t.dynamic_content.cookie.length > 0 && n.push(this.const.LANG.SET_COOKIE + " " + t.dynamic_content.cookie.join("; ")));
        } catch (t) {}
        return a ? n : n.join(i);
    }),
    (LadiPageScriptV2.prototype.reloadFeeShipping = function (t) {
        var e = this;
        e instanceof LadiPageScriptV2 || (e = LadiPageScript);
        var i = function (t, i) {
            window.ladi("_ladipage_" + t).set_cookie(i, 365, "/", window.location.host),
            e.isArray(e.runtime.DOMAIN_SET_COOKIE) &&
            e.runtime.DOMAIN_SET_COOKIE.forEach(function (e) {
                e != window.location.host && window.ladi("_ladipage_" + t).set_cookie(i, 365, "/", e);
            });
        };
        e.isEmpty(e.runtime.tmp.timeout_reload_fee_shipping) || e.removeTimeout(e.runtime.tmp.timeout_reload_fee_shipping);
        var a = function (t, i) {
            (e.runtime.tmp.add_to_cart_fee_shipping = t), e.changeTotalPriceCart(), e.isNull(i) && ((e.runtime.tmp.add_to_cart_shipping_method_id = null), (i = []));
            for (
                var a = null,
                    n = e.runtime.tmp.add_to_cart_shipping_method_id,
                    r = function (t) {
                        l.setAttribute("data-selected", t.target.value || ""),
                            (e.runtime.tmp.add_to_cart_shipping_method_id = e.isEmpty(l.getAttribute("data-selected")) ? null : l.getAttribute("data-selected")),
                        (parseFloatLadiPage(e.runtime.tmp.add_to_cart_shipping_method_id) || 0) == e.runtime.tmp.add_to_cart_shipping_method_id &&
                        (e.runtime.tmp.add_to_cart_shipping_method_id = parseFloatLadiPage(e.runtime.tmp.add_to_cart_shipping_method_id) || 0),
                            (a = t.target.querySelector('option[value="' + t.target.value + '"]')),
                            (e.runtime.tmp.add_to_cart_fee_shipping = e.isEmpty(a) ? 0 : parseFloatLadiPage(a.getAttribute("data-fee")) || 0),
                            e.changeTotalPriceCart();
                    },
                    o = document.querySelectorAll('select[data-combobox-type="' + e.const.COMBOBOX_TYPE.delivery_method + '"]'),
                    s = 0;
                s < o.length;
                s++
            ) {
                var l = o[s],
                    c = l.getElementsByTagName("option");
                for (
                    "true" != l.getAttribute("data-event") && (l.setAttribute("data-event", !0), l.addEventListener("change", r)), e.isNull(l.getAttribute("data-placeholder")) && l.setAttribute("data-placeholder", c[0].innerHTML);
                    c.length > 0;

                )
                    c[0].parentElement.removeChild(c[0]);
                i.length <= 0 && (((a = document.createElement("option")).innerHTML = l.getAttribute("data-placeholder")), l.appendChild(a));
                for (var d = 0; d < i.length; d++) {
                    a = document.createElement("option");
                    var p = e.formatNumber(i[d].fee, 3);
                    if (e.runtime.tmp.cart.length > 0 && !e.isEmpty(e.runtime.tmp.cart[0].currency) && !e.isEmpty(e.runtime.tmp.cart[0].currency.symbol)) {
                        var u = e.runtime.tmp.cart[0].currency.symbol;
                        p = e.formatCurrency(i[d].fee, u, !0);
                    }
                    (a.innerHTML = i[d].name + " - " + p), a.setAttribute("data-fee", i[d].fee), a.setAttribute("value", i[d].shipping_method_id), n == i[d].shipping_method_id && a.setAttribute("selected", "selected"), l.appendChild(a);
                }
                l.setAttribute("data-selected", n || "");
            }
        };
        e.runtime.tmp.timeout_reload_fee_shipping = e.runTimeout(function () {
            if (0 != e.runtime.tmp.list_form_checkout.length) {
                var n = null;
                if (((n = e.isEmpty(t) ? document.getElementById(e.runtime.tmp.list_form_checkout[0]) : e.findAncestor(t.target, "ladi-form")), e.isEmpty(n))) a(0);
                else {
                    var r = n.querySelector('.ladi-form-item select[name="state"]'),
                        o = n.querySelector('.ladi-form-item select[name="district"]'),
                        s = n.querySelector('.ladi-form-item select[name="ward"]');
                    if (e.isEmpty(r) || e.isEmpty(o) || e.isEmpty(s)) a(0);
                    else {
                        var l = r.value,
                            c = o.value,
                            d = s.value;
                        if (e.isEmpty(l) || e.isEmpty(c)) return void a(0);
                        var p = { state_id: l.split(":")[0], district_id: c.split(":")[0], ward_id: d.split(":")[0] };
                        (p.state_id = parseInt(p.state_id) || p.state_id), (p.district_id = parseInt(p.district_id) || p.district_id), (p.ward_id = parseInt(p.ward_id) || p.ward_id);
                        var u = null,
                            m = null,
                            _ = null;
                        if (e.runtime.shopping_product_type == e.const.FORM_CONFIG_TYPE.sapo)
                            return (
                                (m = function (t, n) {
                                    (t = t.querySelector("#checkoutForm")),
                                        (u = new FormData()).append("_method", "patch"),
                                        u.append("billingProvince", p.state_id),
                                        u.append("billingDistrict", p.district_id),
                                        u.append("billingWard", p.ward_id),
                                        e.sendRequest("POST", window.location.origin + t.getAttribute("action"), u, !0, _, function (t, n, r) {
                                            if (r.readyState == XMLHttpRequest.DONE) {
                                                if (200 == n)
                                                    try {
                                                        for (var o = 0, s = [], d = e.createTmpElement("div", t, null, !1).querySelectorAll('[for^="shippingMethod-"]'), p = 0; p < d.length; p++) {
                                                            var u = "",
                                                                m = 0,
                                                                _ = "",
                                                                y = d[p].querySelector("span.radio__label__primary");
                                                            e.isEmpty(y) || (u = y.textContent.trim()),
                                                                (y = d[p].querySelector("span.content-box__emphasis")),
                                                            e.isEmpty(y) || (m = parseFloatLadiPage(y.textContent.trim().replaceAll(".", "").replaceAll(",", ".")) || 0);
                                                            var g = e.findAncestor(d[p], "content-box__row");
                                                            e.isEmpty(g) || ((g = g.querySelector('input[name="shippingMethod"]')), e.isEmpty(g) || (_ = g.value)),
                                                            e.isEmpty(u) || e.isEmpty(_) || s.push({ name: u, fee: m, shipping_method_id: _ });
                                                        }
                                                        return (
                                                            -1 ==
                                                            s.findIndex(function (t) {
                                                                return t.shipping_method_id == e.runtime.tmp.add_to_cart_shipping_method_id;
                                                            }) && (e.runtime.tmp.add_to_cart_shipping_method_id = null),
                                                                s.forEach(function (t) {
                                                                    e.isEmpty(e.runtime.tmp.add_to_cart_shipping_method_id) && (e.runtime.tmp.add_to_cart_shipping_method_id = t.shipping_method_id),
                                                                    e.runtime.tmp.add_to_cart_shipping_method_id == t.shipping_method_id && (o = t.fee || 0);
                                                                }),
                                                                i("state", l),
                                                                i("district", c),
                                                                void a(o, s)
                                                        );
                                                    } catch (t) {}
                                                a(0);
                                            }
                                        });
                                }),
                                    void e.getCheckoutSapo(null, m, a)
                            );
                        if (e.runtime.shopping_product_type == e.const.FORM_CONFIG_TYPE.haravan)
                            return (
                                (m = function (t) {
                                    _ = { "X-Requested-With": "XMLHttpRequest" };
                                    var n = e.createTmpElement("a", "", { href: t });
                                    (n.search = n.search + (e.isEmpty(n.search) ? "?" : "&") + "customer_shipping_province=" + p.state_id + "&customer_shipping_district=" + p.district_id + "&form_name=form_update_location"),
                                        (t = n.href),
                                        e.sendRequest("GET", t, null, !0, _, function (t, n, r) {
                                            if (r.readyState == XMLHttpRequest.DONE) {
                                                if (200 == n)
                                                    try {
                                                        for (var o = 0, s = [], d = e.createTmpElement("div", t, null, !1).querySelectorAll('[for^="shipping_rate_id_"]'), p = 0; p < d.length; p++) {
                                                            var u = "",
                                                                m = 0,
                                                                _ = "",
                                                                y = d[p].querySelector("span.radio-label-primary");
                                                            e.isEmpty(y) || (u = y.textContent.trim()),
                                                                (y = d[p].querySelector("span.content-box-emphasis")),
                                                            e.isEmpty(y) || (m = parseFloatLadiPage(y.textContent.trim().replaceAll(",", "")) || 0);
                                                            var g = d[p].querySelector("input");
                                                            e.isEmpty(g) || (_ = g.value), e.isEmpty(u) || e.isEmpty(_) || s.push({ name: u, fee: m, shipping_method_id: _ });
                                                        }
                                                        return (
                                                            -1 ==
                                                            s.findIndex(function (t) {
                                                                return t.shipping_method_id == e.runtime.tmp.add_to_cart_shipping_method_id;
                                                            }) && (e.runtime.tmp.add_to_cart_shipping_method_id = null),
                                                                s.forEach(function (t) {
                                                                    e.isEmpty(e.runtime.tmp.add_to_cart_shipping_method_id) && (e.runtime.tmp.add_to_cart_shipping_method_id = t.shipping_method_id),
                                                                    e.runtime.tmp.add_to_cart_shipping_method_id == t.shipping_method_id && (o = t.fee || 0);
                                                                }),
                                                                i("state", l),
                                                                i("district", c),
                                                                void a(o, s)
                                                        );
                                                    } catch (t) {}
                                                a(0);
                                            }
                                        });
                                }),
                                    void e.getThirdPartyCheckoutUrl(!1, m)
                            );
                        if (e.runtime.shopping_product_type == e.const.FORM_CONFIG_TYPE.shopify) return void a(0);
                        if (e.runtime.shopping_product_type == e.const.FORM_CONFIG_TYPE.wordpress) return void a(0);
                        var y = window.ladi("_cart_token").get_cookie(),
                            g = window.ladi("_checkout_token").get_cookie();
                        if (e.isEmpty(y) || e.isEmpty(g)) return void a(0);
                        (_ = { "Content-Type": "application/json", "cart-token": y }),
                            e.sendRequest("POST", e.const.API_LADISALE_GET_SHIPPING.format(g), JSON.stringify(p), !0, _, function (t, i, n) {
                                if (n.readyState == XMLHttpRequest.DONE) {
                                    if (200 == i)
                                        try {
                                            var r = JSON.parse(t);
                                            if (200 == r.code) {
                                                var o = 0;
                                                if (e.isArray(r.data.shipping_methods))
                                                    -1 ==
                                                    r.data.shipping_methods.findIndex(function (t) {
                                                        return t.shipping_method_id == e.runtime.tmp.add_to_cart_shipping_method_id;
                                                    }) && (e.runtime.tmp.add_to_cart_shipping_method_id = null),
                                                        r.data.shipping_methods.forEach(function (t) {
                                                            e.isEmpty(e.runtime.tmp.add_to_cart_shipping_method_id) && (e.runtime.tmp.add_to_cart_shipping_method_id = t.shipping_method_id),
                                                            e.runtime.tmp.add_to_cart_shipping_method_id == t.shipping_method_id && (o = t.fee || 0);
                                                        });
                                                return void a(o, r.data.shipping_methods);
                                            }
                                        } catch (t) {}
                                    a(0);
                                }
                            });
                    }
                }
            }
        }, 1e3);
    }),
    (LadiPageScriptV2.prototype.getThirdPartyCheckoutUrl = function (t, e) {
        var i = this,
            a = window.location.origin + "/checkout",
            n = function (n, r, o) {
                t && ((a = i.getLinkUTMRedirect(a, null)), (a = i.convertDataReplaceStr(a, !0)), window.ladi(a).open_url()), i.isFunction(e) && e(a, n, r, o);
            };
        -1 != [i.const.FORM_CONFIG_TYPE.sapo, i.const.FORM_CONFIG_TYPE.haravan, i.const.FORM_CONFIG_TYPE.shopify].indexOf(i.runtime.shopping_product_type) &&
        i.sendRequest("GET", a, null, !0, null, function (t, e, i) {
            i.readyState == XMLHttpRequest.HEADERS_RECEIVED && (a = i.responseURL), i.readyState == XMLHttpRequest.DONE && 200 == e && n(t, e, i);
        }),
        -1 != [i.const.FORM_CONFIG_TYPE.wordpress].indexOf(i.runtime.shopping_product_type) && n(),
        -1 != [i.const.FORM_CONFIG_TYPE.ladisales].indexOf(i.runtime.shopping_product_type) &&
        (i.isNull(i.runtime.shopping_config_checkout_id) ? ((a = i.runtime.tmp.ladisales_checkout_url), n()) : (t && window.ladi("POPUP_CHECKOUT").show(), i.isFunction(e) && e()));
    }),
    (LadiPageScriptV2.prototype.getCheckoutAll = function (t, e, i) {
        var a = this;
        a.getThirdPartyCheckoutUrl(!1, function (t, i, n, r) {
            try {
                var o = a.createTmpElement("div", i, null, !1);
                return void (a.isFunction(e) && e(o, i));
            } catch (t) {}
        });
    }),
    (LadiPageScriptV2.prototype.getCheckoutSapo = function (t, e, i) {
        this.getCheckoutAll(t, e, i);
    }),
    (LadiPageScriptV2.prototype.getCheckoutHaravan = function (t, e, i) {
        this.getCheckoutAll(t, e, i);
    }),
    (LadiPageScriptV2.prototype.getCheckoutWordpress = function (t, e, i) {
        this.getCheckoutAll(t, e, i);
    }),
    (LadiPageScriptV2.prototype.getCheckoutShopify = function (t, e, i) {
        return this.getCheckoutAll(t, e, i);
    }),
(LadiPageScriptV2.prototype.reloadCheckoutSapo = function () {
    var t = this;
    t.getCheckoutSapo(null, function (e, i) {
        var a = 0,
            n = (e = e.querySelector("#checkoutForm")).querySelector("#discountCode .discount-code span.ui-tag__label");
        if (!t.isEmpty(n)) {
            var r = e.querySelector("#discountCode .discount-code .col-block");
            t.isEmpty(r) || (a = parseFloatLadiPage(r.textContent.trim().replaceAll(".", "").replaceAll(",", ".")) || 0);
            var o = document.querySelector("#POPUP_CHECKOUT .ladi-form .ladi-element[data-submit-form-id]");
            if (!t.isEmpty(o)) {
                var s = t.findAncestor(o, "ladi-form").querySelector('input[name="coupon"]');
                t.isEmpty(s) || ((s.value = n.textContent.trim()), t.fireEvent(s, "change"), (t.runtime.tmp.current_use_coupon = s.value), t.reloadPriceDiscount({ target: o, discount_price: a }));
            }
        }
    });
}),
(LadiPageScriptV2.prototype.reloadCheckoutHaravan = function () {
    var t = this;
    t.getCheckoutHaravan(null, function (e, i) {
        var a = 0,
            n = e.querySelector(".applied-reduction-code-information");
        if (!t.isEmpty(n)) {
            var r = e.querySelector(".total-line-price span[data-checkout-discount-amount-target]");
            t.isEmpty(r) || (a = (parseFloatLadiPage(r.getAttribute("data-checkout-discount-amount-target")) || 0) / 100);
            var o = document.querySelector("#POPUP_CHECKOUT .ladi-form .ladi-element[data-submit-form-id]");
            if (!t.isEmpty(o)) {
                var s = t.findAncestor(o, "ladi-form").querySelector('input[name="coupon"]');
                t.isEmpty(s) || ((s.value = n.textContent.trim()), t.fireEvent(s, "change"), (t.runtime.tmp.current_use_coupon = s.value), t.reloadPriceDiscount({ target: o, discount_price: a, docCrawl: e }));
            }
        }
    });
}),
(LadiPageScriptV2.prototype.reloadCheckoutWordpress = function () {
    var t = this;
    this.getCheckoutWordpress(null, function (e, i) {
        var a = 0,
            n = e.querySelector("#order_review .cart-discount");
        if (!t.isEmpty(n)) {
            var r = n.querySelector("a[data-coupon]");
            if (!t.isEmpty(r)) {
                var o = n.querySelector(".woocommerce-Price-amount");
                t.isEmpty(o) || (a = parseFloatLadiPage(o.textContent.trim().replaceAll(".", "").replaceAll(",", ".")) || 0);
                var s = document.querySelector("#POPUP_CHECKOUT .ladi-form .ladi-element[data-submit-form-id]");
                if (!t.isEmpty(s)) {
                    var l = t.findAncestor(s, "ladi-form").querySelector('input[name="coupon"]');
                    t.isEmpty(l) || ((l.value = r.getAttribute("data-coupon")), t.fireEvent(l, "change"), (t.runtime.tmp.current_use_coupon = l.value), t.reloadPriceDiscount({ target: s, discount_price: a, docCrawl: e }));
                }
            }
        }
    });
}),
(LadiPageScriptV2.prototype.reloadPriceDiscount = function (t) {
    var e = this;
    e instanceof LadiPageScriptV2 || (e = LadiPageScript);
    var i = e.runtime.tmp.current_use_coupon,
        a = function (n, r) {
            (e.runtime.tmp.add_to_cart_discount = n), (e.runtime.tmp.is_click_check_price_discount = !1), e.changeTotalPriceCart();
            var o = null,
                s = document.getElementsByClassName("ladi-form-remove-coupon")[0];
            e.isEmpty(s) || ((o = e.findAncestor(s, "ladi-form")), s.parentElement.removeChild(s));
            var l = document.querySelector('.ladi-form-item input[name="coupon"].pointer-events-none');
            if ((e.isEmpty(l) || l.classList.remove("pointer-events-none"), !e.isEmpty(e.runtime.tmp.current_use_coupon))) {
                if ((e.isEmpty(o) && !e.isEmpty(t) && (o = e.findAncestor(t.target, "ladi-form")), e.isEmpty(o))) return;
                if (((l = o.querySelector('.ladi-form-item input[name="coupon"]')), e.isEmpty(l))) return;
                ((s = document.createElement("span")).className = "ladi-form-remove-coupon"),
                    (s.innerHTML = "⌫"),
                    s.addEventListener("click", function (t) {
                        t.stopPropagation();
                        var i = e.runtime.tmp.current_use_coupon;
                        if (
                            ((l.value = ""),
                                e.fireEvent(l, "change"),
                                (e.runtime.tmp.current_use_coupon = null),
                                a(0),
                            -1 != [e.const.FORM_CONFIG_TYPE.sapo, e.const.FORM_CONFIG_TYPE.haravan, e.const.FORM_CONFIG_TYPE.shopify, e.const.FORM_CONFIG_TYPE.wordpress].indexOf(e.runtime.shopping_product_type))
                        ) {
                            var n = document.querySelector("#POPUP_CHECKOUT .ladi-form .ladi-element[data-submit-form-id]");
                            e.isEmpty(n) || e.reloadPriceDiscount({ isRemoveCoupon: !0, couponOld: i, target: n });
                        }
                    }),
                    e.findAncestor(l, "ladi-form-item").appendChild(s),
                    l.classList.add("pointer-events-none");
            }
            if ((i != e.runtime.tmp.current_use_coupon || e.isEmpty(t) || !t.isRemoveCoupon || !e.isEmpty(t.docCrawl)) && e.runtime.shopping_product_type == e.const.FORM_CONFIG_TYPE.haravan) {
                if ((delete e.runtime.tmp.use_cart_line_price_original, !e.isEmpty(e.runtime.tmp.current_use_coupon))) {
                    var c = r.querySelector(".order-summary-emphasis[data-checkout-subtotal-price-target]");
                    if (!e.isEmpty(c)) (c = (parseFloatLadiPage(c.getAttribute("data-checkout-subtotal-price-target")) || 0) / 100), e.changeTotalPriceCart(!0).cart_price != c && (e.runtime.tmp.use_cart_line_price_original = !0);
                }
                e.updateCartPromotion();
            }
        };
    e.isEmpty(t) || e.isEmpty(t.discount_price)
        ? e.runtime.tmp.is_click_check_price_discount ||
        (e.isEmpty(t) && e.isEmpty(e.runtime.tmp.current_use_coupon)) ||
        (e.isEmpty(e.runtime.tmp.timeout_reload_price_discount) || e.removeTimeout(e.runtime.tmp.timeout_reload_price_discount),
            (e.runtime.tmp.timeout_reload_price_discount = e.runTimeout(
                function () {
                    if (0 != e.runtime.tmp.list_form_checkout.length) {
                        var i = null;
                        if (
                            (e.isEmpty(t)
                                ? (i = document.getElementById(e.runtime.tmp.list_form_checkout[0]))
                                : ((i = e.findAncestor(t.target, "ladi-form")), e.isEmpty(i) || ((i = i.querySelector("[data-submit-form-id]")), e.isEmpty(i) || (i = document.getElementById(i.getAttribute("data-submit-form-id"))))),
                                e.isEmpty(i))
                        )
                            a(0);
                        else {
                            var n = null,
                                r = i.querySelector('.ladi-form-item input[name="email"]'),
                                o = i.querySelector('.ladi-form-item input[name="phone"]'),
                                s = i.querySelector('.ladi-form-item input[name="coupon"]');
                            if (e.isEmpty(s)) a(0);
                            else {
                                var l = e.runtime.tmp.current_use_coupon;
                                e.runtime.tmp.current_use_coupon = null;
                                var c = s.value;
                                if (e.isEmpty(c) && (e.isEmpty(t) || !t.isRemoveCoupon)) return void a(0);
                                if (e.isEmpty(t) && c != l) return void a(0);
                                (n = { discount_code: c }), e.isEmpty(r) || (n.email = r.value), e.isEmpty(o) || (n.phone = o.value), (e.runtime.tmp.is_click_check_price_discount = !0);
                                var d = null,
                                    p = null,
                                    u = null;
                                if (e.runtime.shopping_product_type == e.const.FORM_CONFIG_TYPE.sapo)
                                    return (
                                        (p = function (i, r) {
                                            (i = i.querySelector("#checkoutForm")),
                                                (u = new FormData()).append("_method", "patch"),
                                                u.append("reductionCode", n.discount_code),
                                                u.append("email", n.email),
                                                e.sendRequest("POST", window.location.origin + i.getAttribute("action"), u, !0, d, function (i, n, r) {
                                                    if (r.readyState == XMLHttpRequest.DONE) {
                                                        if (200 == n)
                                                            try {
                                                                var o = 0,
                                                                    s = e.createTmpElement("div", i, null, !1),
                                                                    l = s.querySelector("#discountCode .discount-code span.ui-tag__label");
                                                                if (e.isEmpty(l)) {
                                                                    var d = s.querySelector("#discountCode .field__message--error");
                                                                    e.isEmpty(d) || e.isEmpty(d.textContent.trim()) || e.isEmpty(t) || e.showMessage(d.textContent.trim());
                                                                } else {
                                                                    e.runtime.tmp.current_use_coupon = c;
                                                                    var p = s.querySelector("#discountCode .discount-code .col-block");
                                                                    e.isEmpty(p) || (o = parseFloatLadiPage(p.textContent.trim().replaceAll(".", "").replaceAll(",", ".")) || 0);
                                                                }
                                                                return void a(o);
                                                            } catch (t) {}
                                                        e.isEmpty(t) || e.showMessage(e.const.LANG.REQUEST_SEND_ERROR), a(0);
                                                    }
                                                });
                                        }),
                                            void e.getCheckoutSapo(t, p, a)
                                    );
                                if (e.runtime.shopping_product_type == e.const.FORM_CONFIG_TYPE.haravan)
                                    return (
                                        (p = function (i) {
                                            d = { "X-Requested-With": "XMLHttpRequest" };
                                            var r = e.createTmpElement("a", "", { href: i });
                                            e.isEmpty(n.discount_code)
                                                ? (r.search = r.search + (e.isEmpty(r.search) ? "?" : "&") + "form_name=form_discount_remove")
                                                : (r.search = r.search + (e.isEmpty(r.search) ? "?" : "&") + "discount.code=" + n.discount_code + "&form_name=form_discount_add"),
                                                (i = r.href),
                                                e.sendRequest("GET", i, null, !0, d, function (i, n, r) {
                                                    if (r.readyState == XMLHttpRequest.DONE) {
                                                        if (200 == n)
                                                            try {
                                                                var o = 0,
                                                                    s = e.createTmpElement("div", i, null, !1),
                                                                    l = s.querySelector(".applied-reduction-code-information");
                                                                if (e.isEmpty(l) || l.textContent.trim().toLowerCase() != c.trim().toLowerCase()) {
                                                                    var d = s.querySelector("#form_discount_add .field-message-error");
                                                                    e.isEmpty(d) || e.isEmpty(d.textContent.trim()) || e.isEmpty(t) || e.showMessage(d.textContent.trim());
                                                                } else {
                                                                    e.runtime.tmp.current_use_coupon = c;
                                                                    var p = s.querySelector(".total-line-price span[data-checkout-discount-amount-target]");
                                                                    e.isEmpty(p) || (o = (parseFloatLadiPage(p.getAttribute("data-checkout-discount-amount-target")) || 0) / 100);
                                                                }
                                                                return void a(o, s);
                                                            } catch (t) {}
                                                        e.isEmpty(t) || e.showMessage(e.const.LANG.REQUEST_SEND_ERROR), a(0);
                                                    }
                                                });
                                        }),
                                            void e.getThirdPartyCheckoutUrl(!1, p)
                                    );
                                if (e.runtime.shopping_product_type == e.const.FORM_CONFIG_TYPE.shopify) return void a(0);
                                if (e.runtime.shopping_product_type == e.const.FORM_CONFIG_TYPE.wordpress) {
                                    var m = window.location.origin + "/ladipage/api";
                                    return (
                                        e.isEmpty(n.discount_code) ? (m += "?action=remove_coupon&coupon=" + (e.isEmpty(t) ? "" : t.couponOld)) : (m += "?action=apply_coupon&coupon=" + n.discount_code),
                                            void e.sendRequest("GET", m, null, !0, d, function (i, n, r) {
                                                if (r.readyState == XMLHttpRequest.DONE) {
                                                    if (200 == n)
                                                        try {
                                                            var o = JSON.parse(i);
                                                            if (200 == o.code) return (e.runtime.tmp.current_use_coupon = c), void a(o.data);
                                                            e.isEmpty(o.message) || e.isEmpty(t) || e.showMessage(o.message);
                                                        } catch (t) {}
                                                    a(0);
                                                }
                                            })
                                    );
                                }
                                var _ = window.ladi("_cart_token").get_cookie(),
                                    y = window.ladi("_checkout_token").get_cookie();
                                if (e.isEmpty(_) || e.isEmpty(y)) return void a(0);
                                (d = { "Content-Type": "application/json", "cart-token": _ }),
                                    e.sendRequest("POST", e.const.API_LADISALE_VALIDATE_DISCOUNT.format(y), JSON.stringify(n), !0, d, function (i, n, r) {
                                        if (r.readyState == XMLHttpRequest.DONE) {
                                            if (200 == n)
                                                try {
                                                    var o = JSON.parse(i);
                                                    if (200 == o.code) return e.isEmpty(o.data.discount_error) ? (e.runtime.tmp.current_use_coupon = c) : e.isEmpty(t) || e.showMessage(o.data.discount_error), void a(o.data.discount_price);
                                                } catch (t) {}
                                            a(0);
                                        }
                                    });
                            }
                        }
                    }
                },
                e.isEmpty(t) ? 1e3 : 0
            )))
        : a(t.discount_price, t.docCrawl);
}),
(LadiPageScriptV2.prototype.updateCartPromotion = function (t, e, i) {
    var a = this,
        n = function (t) {
            for (var e = 0; e < a.runtime.tmp.cart.length; e++) {
                var i = a.runtime.tmp.cart[e];
                if (i.product_id == t.product_id && i.product_variant_id == t.product_variant_id) {
                    a.runtime.tmp.use_cart_line_price_original || t.sub_total == t.total ? delete i.promotion : (i.promotion = t), (a.runtime.tmp.cart[e] = i);
                    for (var n = document.querySelectorAll('.ladi-cart .ladi-cart-row .ladi-cart-price span[data-product-variant-id="' + i.product_variant_id + '"]'), r = 0; r < n.length; r++) {
                        var o = a.findAncestor(n[r], "ladi-cart-row"),
                            s = o.querySelector(".ladi-cart-price"),
                            l = o.querySelector(".ladi-cart-title"),
                            c = s.querySelector("span.price-compare"),
                            d = l.querySelector("span.promotion-name");
                        if (a.isObject(i.promotion)) {
                            o.classList.add("has-promotion"), a.isEmpty(c) && (((c = document.createElement("span")).className = "price-compare"), s.appendChild(c));
                            var p = a.formatNumber(t.total, 3);
                            a.isObject(i.currency) && !a.isEmpty(i.currency.symbol) && (p = a.formatCurrency(t.total, i.currency.symbol, !0)),
                                (c.innerHTML = p),
                            a.isEmpty(d) && (((d = document.createElement("span")).className = "promotion-name"), l.appendChild(d)),
                                (d.innerHTML = i.promotion.discount.note);
                        } else o.classList.remove("has-promotion"), a.isEmpty(c) || c.parentElement.removeChild(c), a.isEmpty(d) || d.parentElement.removeChild(d);
                    }
                }
            }
        },
        r = function () {
            var t = [];
            return (
                a.isArray(a.runtime.tmp.cart) &&
                a.runtime.tmp.cart.forEach(function (e) {
                    var i = e.quantity;
                    t.push({ product_id: e.product_id, product_variant_id: e.product_variant_id, quantity: i });
                }),
                    { variants: t }
            );
        },
        o = r(),
        s = JSON.stringify(o);
    if ((a.isObject(a.runtime.tmp.info_update_cart_promotion) || (a.runtime.tmp.info_update_cart_promotion = {}), !a.isEmpty(t))) {
        var l = [],
            c = a.runtime.tmp.cart;
        a.runtime.tmp.cart = [];
        return (
            -1 != [a.const.FORM_CONFIG_TYPE.sapo, a.const.FORM_CONFIG_TYPE.haravan, a.const.FORM_CONFIG_TYPE.shopify].indexOf(a.runtime.shopping_product_type) &&
            t.items.forEach(function (t) {
                var e = null;
                -1 != [a.const.FORM_CONFIG_TYPE.sapo].indexOf(a.runtime.shopping_product_type) && t.name == t.title && "Default Title" == t.variant_title && (t.variant_title = null),
                -1 != [a.const.FORM_CONFIG_TYPE.haravan, a.const.FORM_CONFIG_TYPE.shopify].indexOf(a.runtime.shopping_product_type) && t.product_title == t.title && "Default Title" == t.variant_title && (t.variant_title = null),
                -1 != [a.const.FORM_CONFIG_TYPE.sapo, a.const.FORM_CONFIG_TYPE.haravan].indexOf(a.runtime.shopping_product_type) &&
                (e = {
                    store_id: -1,
                    product_id: t.product_id,
                    product_variant_id: t.variant_id,
                    name: t.title,
                    title: t.variant_title,
                    image: t.image,
                    quantity: t.quantity,
                    inventory_checked: 0,
                    available_quantity: 0,
                    min_buy: 1,
                    max_buy: null,
                }),
                -1 != [a.const.FORM_CONFIG_TYPE.shopify].indexOf(a.runtime.shopping_product_type) &&
                (e = {
                    store_id: -1,
                    product_id: t.product_id,
                    product_variant_id: t.variant_id,
                    name: t.product_title,
                    title: t.variant_title,
                    image: t.image,
                    quantity: t.quantity,
                    inventory_checked: 0,
                    available_quantity: 0,
                    min_buy: 1,
                    max_buy: null,
                });
                var i = a.runtime.currency;
                a.runtime.isClient || (i = LadiPage.getRootScope().getStoreCurrency()), (e.currency = { code: i, symbol: a.formatCurrency(null, i, !1, !0) });
                var n = c.findIndex(function (t) {
                    return t.product_id == e.product_id && t.product_variant_id == e.product_variant_id;
                });
                -1 != n && (e.title = c[n].title);
                var r = null,
                    o = null;
                if (-1 != [a.const.FORM_CONFIG_TYPE.sapo, a.const.FORM_CONFIG_TYPE.haravan].indexOf(a.runtime.shopping_product_type)) {
                    if (((e.price = t.price_original), a.isObject(t.properties))) {
                        var s = Object.keys(t.properties);
                        s.length > 0 &&
                        ((r = t.properties[s[0]]),
                        -1 != [a.const.FORM_CONFIG_TYPE.haravan].indexOf(a.runtime.shopping_product_type) && ((r = r.split("-")).shift(), (r = (r = r.join("-")).trim())),
                            (o = { product_id: t.product_id, product_variant_id: t.variant_id, sub_total: t.line_price_original, total: t.line_price, discount: { note: r } }),
                            (e.promotion = o),
                            l.push(o));
                    }
                    a.isEmpty(e.promotion) && -1 != [a.const.FORM_CONFIG_TYPE.sapo].indexOf(a.runtime.shopping_product_type) && (e.price = t.price);
                }
                -1 != [a.const.FORM_CONFIG_TYPE.shopify].indexOf(a.runtime.shopping_product_type) &&
                ((e.price = t.original_price),
                t.original_line_price != t.line_price &&
                a.isArray(t.discounts) &&
                t.discounts.length > 0 &&
                ((r = t.discounts[0].title), (o = { product_id: t.product_id, product_variant_id: t.variant_id, sub_total: t.original_line_price, total: t.line_price, discount: { note: r } }), (e.promotion = o), l.push(o))),
                -1 != [a.const.FORM_CONFIG_TYPE.haravan, a.const.FORM_CONFIG_TYPE.shopify].indexOf(a.runtime.shopping_product_type) &&
                ((e.price = e.price / 100), a.isEmpty(e.promotion) || ((e.promotion.total = e.promotion.total / 100), (e.promotion.sub_total = e.promotion.sub_total / 100))),
                    a.runtime.tmp.cart.push(e);
            }),
            -1 != [a.const.FORM_CONFIG_TYPE.wordpress].indexOf(a.runtime.shopping_product_type) &&
            t.data.forEach(function (t) {
                var e = null;
                a.isObject(t.variation) && (e = Object.values(t.variation).join(", "));
                var i = {
                        store_id: -1,
                        product_id: t.product_id,
                        product_variant_id: t.variation_id,
                        name: t.product_name,
                        title: e,
                        min_buy: 1,
                        max_buy: null,
                        price: t.price,
                        image: t.image || "",
                        quantity: t.quantity,
                        inventory_checked: 0,
                        available_quantity: 0,
                    },
                    n = a.runtime.currency;
                a.runtime.isClient || (n = LadiPage.getRootScope().getStoreCurrency()), (i.currency = { code: n, symbol: a.formatCurrency(null, n, !1, !0) });
                var r = c.findIndex(function (t) {
                    return t.product_id == i.product_id && t.product_variant_id == i.product_variant_id;
                });
                -1 != r && (i.title = c[r].title), (i.cart_item_key = t.key), a.runtime.tmp.cart.push(i);
            }),
                (o = r()),
                (s = JSON.stringify(o)),
                l.forEach(n),
                void (a.runtime.tmp.info_update_cart_promotion[s] = l)
        );
    }
    if (!0 !== a.runtime.tmp.info_update_cart_promotion[s]) {
        if (a.isArray(a.runtime.tmp.info_update_cart_promotion[s])) return a.runtime.tmp.info_update_cart_promotion[s].forEach(n), void a.changeTotalPriceCart();
        if (((a.runtime.tmp.info_update_cart_promotion[s] = !0), -1 == [a.const.FORM_CONFIG_TYPE.sapo, a.const.FORM_CONFIG_TYPE.haravan, a.const.FORM_CONFIG_TYPE.shopify].indexOf(a.runtime.shopping_product_type)))
            if (-1 == [a.const.FORM_CONFIG_TYPE.wordpress].indexOf(a.runtime.shopping_product_type)) {
                var d = window.ladi("_cart_token").get_cookie(),
                    p = { "Content-Type": "application/json" };
                a.isEmpty(d) || (p["cart-token"] = d),
                    a.sendRequest("POST", a.const.API_LADISALE_PROMOTION, JSON.stringify(o), !0, p, function (t, e, r) {
                        if (r.readyState == XMLHttpRequest.DONE) {
                            if (200 == e)
                                try {
                                    var o = JSON.parse(t);
                                    if (200 == o.code && a.isObject(o.data) && a.isArray(o.data.variants))
                                        return o.data.variants.forEach(n), (a.runtime.tmp.info_update_cart_promotion[s] = o.data.variants), a.changeTotalPriceCart(), void (a.isFunction(i) && i());
                                } catch (t) {}
                            delete a.runtime.tmp.info_update_cart_promotion[s], a.isFunction(i) && i();
                        }
                    });
            } else
                a.sendRequest("GET", window.location.origin + "/ladipage/api?action=cart_info", null, !0, null, function (t, n, r) {
                    if (r.readyState == XMLHttpRequest.DONE) {
                        if (200 == n)
                            try {
                                var o = JSON.parse(t);
                                delete a.runtime.tmp.info_update_cart_promotion[s];
                                a.updateCartPromotion(o);
                                return e && a.runtime.tmp.cart.length > 0 && a.reloadCheckoutWordpress(), a.changeTotalPriceCart(), void (a.isFunction(i) && i());
                            } catch (t) {}
                        delete a.runtime.tmp.info_update_cart_promotion[s], a.isFunction(i) && i();
                    }
                });
        else
            a.sendRequest("GET", window.location.origin + "/cart.js", null, !0, null, function (t, n, r) {
                if (r.readyState == XMLHttpRequest.DONE) {
                    if (200 == n)
                        try {
                            var o = JSON.parse(t);
                            delete a.runtime.tmp.info_update_cart_promotion[s];
                            a.updateCartPromotion(o);
                            return (
                                e &&
                                a.runtime.tmp.cart.length > 0 &&
                                (-1 != [a.const.FORM_CONFIG_TYPE.sapo].indexOf(a.runtime.shopping_product_type) && a.reloadCheckoutSapo(),
                                -1 != [a.const.FORM_CONFIG_TYPE.haravan].indexOf(a.runtime.shopping_product_type) && a.reloadCheckoutHaravan(),
                                    [a.const.FORM_CONFIG_TYPE.shopify].indexOf(a.runtime.shopping_product_type)),
                                    a.changeTotalPriceCart(),
                                    void (a.isFunction(i) && i())
                            );
                        } catch (t) {}
                    delete a.runtime.tmp.info_update_cart_promotion[s], a.isFunction(i) && i();
                }
            });
    }
}),
(LadiPageScriptV2.prototype.addCartCookie = function (t, e, i, a, n) {
    var r = this,
        o = {},
        s = null,
        l = null;
    if (-1 != [r.const.FORM_CONFIG_TYPE.sapo, r.const.FORM_CONFIG_TYPE.haravan, r.const.FORM_CONFIG_TYPE.shopify].indexOf(r.runtime.shopping_product_type))
        return (
            -1 != [r.const.FORM_CONFIG_TYPE.sapo].indexOf(r.runtime.shopping_product_type) && ((l = new FormData()).append("variantId", e.product_variant_id), l.append("quantity", e.quantity)),
            -1 != [r.const.FORM_CONFIG_TYPE.haravan].indexOf(r.runtime.shopping_product_type) &&
            ((s = { "Content-Type": "application/x-www-form-urlencoded", "X-Requested-With": "XMLHttpRequest" }),
                (l = { id: e.product_variant_id, quantity: e.quantity }),
                (l = Object.keys(l)
                    .reduce(function (t, e) {
                        return t.push(e + "=" + encodeURIComponent(l[e])), t;
                    }, [])
                    .join("&"))),
            -1 != [r.const.FORM_CONFIG_TYPE.shopify].indexOf(r.runtime.shopping_product_type) &&
            ((s = { "Content-Type": "application/x-www-form-urlencoded", "X-Requested-With": "XMLHttpRequest" }),
                (l = { id: e.product_variant_id, quantity: e.quantity, form_type: "product" }),
                (l = Object.keys(l)
                    .reduce(function (t, e) {
                        return t.push(e + "=" + encodeURIComponent(l[e])), t;
                    }, [])
                    .join("&"))),
                void this.sendRequest("POST", window.location.origin + "/cart/add.js", l, !0, s, function (t, e, s) {
                    if (s.readyState == XMLHttpRequest.DONE) {
                        if (200 == e)
                            try {
                                if (((o = JSON.parse(t)), !r.isEmpty(o.id))) return r.isFunction(i) && i(), r.isFunction(n) && n(), r.reloadPriceDiscount(), void r.reloadFeeShipping();
                            } catch (t) {}
                        r.isFunction(a) && a(o), r.isFunction(n) && n();
                    }
                })
        );
    if (-1 == [r.const.FORM_CONFIG_TYPE.wordpress].indexOf(r.runtime.shopping_product_type)) {
        var c = window.ladi("_cart_token").get_cookie();
        ((s = { "Content-Type": "application/json" })["store-id"] = t), this.isEmpty(c) || (s["cart-token"] = c);
        var d = e.quantity;
        (l = JSON.stringify({ type: "LP", product_variant_id: e.product_variant_id, quantity: d })),
            this.sendRequest("POST", this.const.API_LADISALE_ADD, l, !0, s, function (t, e, s) {
                if (s.readyState == XMLHttpRequest.DONE) {
                    if (200 == e)
                        try {
                            if (200 == (o = JSON.parse(t)).code)
                                return (
                                    window.ladi("_cart_token").set_cookie(o.data.cart_token, 30),
                                        window.ladi("_checkout_token").set_cookie(o.data.checkout_token, 30),
                                        (r.runtime.tmp.ladisales_checkout_url = o.data.url),
                                    r.isFunction(i) && i(),
                                    r.isFunction(n) && n(),
                                        r.reloadPriceDiscount(),
                                        void r.reloadFeeShipping()
                                );
                        } catch (t) {}
                    r.isFunction(a) && a(o), r.isFunction(n) && n();
                }
            });
    } else
        this.sendRequest("POST", window.location.origin + "/ladipage/api?action=cart_add&product_id=" + e.product_id + "&variant_id=" + e.product_variant_id + "&qty=" + e.quantity, l, !0, s, function (t, e, s) {
            if (s.readyState == XMLHttpRequest.DONE) {
                if (200 == e)
                    try {
                        if (200 == (o = JSON.parse(t)).code) return r.updateCartPromotion(o), r.isFunction(i) && i(), r.isFunction(n) && n(), r.reloadPriceDiscount(), void r.reloadFeeShipping();
                    } catch (t) {}
                r.isFunction(a) && a(o), r.isFunction(n) && n();
            }
        });
}),
(LadiPageScriptV2.prototype.updateCartCookie = function (t, e, i, a, n) {
    var r = this,
        o = {},
        s = null,
        l = null,
        c = null;
    if (-1 == [r.const.FORM_CONFIG_TYPE.sapo, r.const.FORM_CONFIG_TYPE.haravan, r.const.FORM_CONFIG_TYPE.shopify].indexOf(r.runtime.shopping_product_type)) {
        if (-1 != [r.const.FORM_CONFIG_TYPE.wordpress].indexOf(r.runtime.shopping_product_type))
            return (
                (c = window.location.origin + "/ladipage/api?action=cart_update_item_qty&cart_item_key=" + t.cart_item_key + "&qty=" + t.quantity),
                e && (c = 0 == t.quantity ? window.location.origin + "/ladipage/api?action=cart_empty" : window.location.origin + "/ladipage/api?action=cart_update_item_qty&qty=" + t.quantity),
                    void this.sendRequest("POST", c, s, !0, l, function (t, e, s) {
                        if (s.readyState == XMLHttpRequest.DONE) {
                            if (200 == e)
                                try {
                                    if (200 == (o = JSON.parse(t)).code) return r.updateCartPromotion(o), r.isFunction(i) && i(), r.isFunction(n) && n(), r.reloadPriceDiscount(), void r.reloadFeeShipping();
                                } catch (t) {}
                            r.isFunction(a) && a(o), r.isFunction(n) && n();
                        }
                    })
            );
        var d = window.ladi("_cart_token").get_cookie();
        (l = { "Content-Type": "application/json" }), this.isEmpty(d) || (l["cart-token"] = d);
        var p = t.quantity;
        (s = JSON.stringify({ product_variant_id: t.product_variant_id, quantity: p })),
            this.sendRequest("POST", this.const.API_LADISALE_UPDATE, s, !0, l, function (t, e, s) {
                if (s.readyState == XMLHttpRequest.DONE) {
                    if (200 == e)
                        try {
                            if (200 == (o = JSON.parse(t)).code) return r.isFunction(i) && i(), r.isFunction(n) && n(), r.reloadPriceDiscount(), void r.reloadFeeShipping();
                        } catch (t) {}
                    r.isFunction(a) && a(o), r.isFunction(n) && n();
                }
            });
    } else {
        if (
            (-1 != [r.const.FORM_CONFIG_TYPE.sapo].indexOf(r.runtime.shopping_product_type) &&
            ((c = window.location.origin + "/cart/change.js"), (s = new FormData()).append("variantId", t.product_variant_id), s.append("quantity", t.quantity)),
            -1 != [r.const.FORM_CONFIG_TYPE.haravan].indexOf(r.runtime.shopping_product_type) &&
            ((c = window.location.origin + "/cart/update.js"),
                (l = { "Content-Type": "application/x-www-form-urlencoded", "X-Requested-With": "XMLHttpRequest" }),
                (s = r.runtime.tmp.cart
                    .reduce(function (i, a) {
                        var n = a.quantity;
                        return (e || a.product_variant_id == t.product_variant_id) && (n = t.quantity), i.push("updates[]=" + encodeURIComponent(n)), i;
                    }, [])
                    .join("&"))),
            -1 != [r.const.FORM_CONFIG_TYPE.shopify].indexOf(r.runtime.shopping_product_type))
        ) {
            (c = window.location.origin + "/cart/change.js"), (l = { "Content-Type": "application/json", "X-Requested-With": "XMLHttpRequest" });
            var u = r.runtime.tmp.cart.findIndex(function (e) {
                return e.product_variant_id == t.product_variant_id;
            });
            if (-1 == u) return;
            s = JSON.stringify({ line: u + 1, quantity: t.quantity });
        }
        this.sendRequest("POST", c, s, !0, l, function (t, e, s) {
            if (s.readyState == XMLHttpRequest.DONE) {
                if (200 == e)
                    try {
                        if (((o = JSON.parse(t)), !r.isEmpty(o.token))) return r.updateCartPromotion(o), r.isFunction(i) && i(), r.isFunction(n) && n(), r.reloadPriceDiscount(), void r.reloadFeeShipping();
                    } catch (t) {}
                r.isFunction(a) && a(o), r.isFunction(n) && n();
            }
        });
    }
}),
(LadiPageScriptV2.prototype.getMessageNameProduct = function (t, e) {
    var i = this.const.LANG.PRODUCT;
    return this.isObject(t) && (t.product_type == this.const.PRODUCT_TYPE.event ? (i = this.const.LANG.TICKET) : t.product_type == this.const.PRODUCT_TYPE.service && (i = this.const.LANG.SERVICE)), e || (i = i.toLowerCase()), i;
}),
(LadiPageScriptV2.prototype.loadCollectionData = function (t, e, i, a, n) {
    var r = this,
        o = e["option.product_type"],
        s = e["option.ladisale_store_id"],
        l = e["option.product_tag_id"],
        c = e["option.collection_setting.type"],
        d = r.runtime.eventData[t];
    if (!r.isEmpty(d) && "collection" == d.type) {
        var p = this.runtime.isDesktop ? this.const.DESKTOP : this.const.MOBILE,
            u = d[p + ".option.collection_setting.row"],
            m = d[p + ".option.collection_setting.column"],
            _ = function (t, e, i, a, n, o) {
                if (
                    ((i = r.copy(i)),
                        Object.keys(a).forEach(function (t) {
                            i[t] = a[t];
                        }),
                    a["option.input_type"] == r.const.INPUT_TYPE.product_variant)
                ) {
                    var s = r.generateVariantProduct(i, !0, a["option.product_variant_type"], a["option.product_variant_title"], a["option.product_variant_price"], a["option.input_tabindex"], r.runtime.isClient, !0, function (r) {
                            _(t, e, i, a, n, o);
                        }),
                        l = function (e) {
                            r.updateProductVariantSelectOption(e, i, a, !1, function () {
                                var i = r.getProductVariantId(e.target, n),
                                    a = n.variants.findIndex(function (t) {
                                        return t.product_variant_id == i;
                                    }),
                                    s = r.findAncestor(e.target, "ladi-element");
                                if (!r.isEmpty(s)) {
                                    var l = r.findAncestor(s, "ladi-collection-item");
                                    if (!r.isEmpty(l))
                                        for (var c = l.querySelectorAll('[data-variant="true"]'), d = 0; d < c.length; d++)
                                            if (c[d].id != s.id) {
                                                var p = r.runtime.eventData[c[d].id],
                                                    u = null,
                                                    m = null,
                                                    _ = null,
                                                    y = 0;
                                                if (p["option.product_variant_type"] == r.const.PRODUCT_VARIANT_TYPE.combobox && ((m = n.variants[a]), r.isObject(m) && r.isString(m.option_ids)))
                                                    for (_ = m.option_ids.split("/"), y = 0; y < _.length; y++)
                                                        (u = c[d].querySelector('select[data-product-option-id="' + _[y] + '"]')), r.isEmpty(u) || (u.value = m["option" + (y + 1)]);
                                                if (p["option.product_variant_type"] == r.const.PRODUCT_VARIANT_TYPE.label && ((m = n.variants[a]), r.isObject(m) && r.isString(m.option_ids)))
                                                    for (_ = m.option_ids.split("/"), y = 0; y < _.length; y++)
                                                        (u = c[d].querySelector('.ladi-form-label-container[data-product-option-id="' + _[y] + '"]')), r.isEmpty(u) || r.runtime.tmp.updateLabelValue(u, m["option" + (y + 1)]);
                                                if (p["option.product_variant_type"] == r.const.PRODUCT_VARIANT_TYPE.combined) {
                                                    if (((u = c[d].querySelector("select.ladi-form-control")), !r.isEmpty(i))) {
                                                        var g = u.querySelector('option[data-product-variant-id="' + i + '"]');
                                                        r.isEmpty(g) || (a = g.getAttribute("value"));
                                                    }
                                                    u.value = (-1 == a ? "" : a) + "";
                                                }
                                            }
                                }
                                o(t, n, !1, i, !0, !0);
                            });
                        },
                        c = r.runtime.tmp.getOptionLabelValue,
                        d = r.runtime.tmp.updateLabelValue,
                        p = r.runtime.tmp.getLabelValue,
                        u = function (t) {
                            r.runtime.tmp.clickLabelProductChangeCallback(t, function (t) {
                                l({ target: t });
                            });
                        };
                    r.showParentVisibility(e, function () {
                        for (var t = e.clientHeight, n = t, o = e.querySelectorAll("select.ladi-form-control"), m = {}, _ = 0; _ < o.length; _++)
                            m[o[_].getAttribute("data-store-id") + "_" + o[_].getAttribute("data-product-id") + "_" + o[_].getAttribute("data-product-option-id")] = o[_].value;
                        var y = e.querySelectorAll(".ladi-form-label-container");
                        for (_ = 0; _ < y.length; _++) m[y[_].getAttribute("data-store-id") + "_" + y[_].getAttribute("data-product-id") + "_" + y[_].getAttribute("data-product-option-id")] = p(y[_]);
                        e.innerHTML = s;
                        for (var g = e.querySelectorAll("select.ladi-form-control"), f = null, h = null, v = 0; v < g.length; v++)
                            g[v].removeEventListener("change", l),
                                g[v].addEventListener("change", l),
                                (f = m[g[v].getAttribute("data-store-id") + "_" + g[v].getAttribute("data-product-id") + "_" + g[v].getAttribute("data-product-option-id")]),
                            r.isNull(f) && ((h = g[v].querySelector("option")), r.isEmpty(h) || (f = h.getAttribute("value"))),
                                (g[v].value = f);
                        var E = e.querySelectorAll(".ladi-form-label-container");
                        for (v = 0; v < E.length; v++) {
                            for (var P = E[v].querySelectorAll(".ladi-form-label-item"), A = 0; A < P.length; A++) r.tapEventListener(P[A], u);
                            (f = m[E[v].getAttribute("data-store-id") + "_" + E[v].getAttribute("data-product-id") + "_" + E[v].getAttribute("data-product-option-id")]),
                            r.isNull(f) && ((h = P[1]), r.isEmpty(h) || (f = c(h))),
                                d(E[v], f);
                        }
                        if (
                            (r.updateProductVariantSelectOptionFirst(i, a, e),
                            a["option.product_variant_type"] != r.const.PRODUCT_VARIANT_TYPE.combined && (e.style.setProperty("height", "auto"), (n = e.clientHeight), e.style.removeProperty("height"), n > 0 && t != n))
                        ) {
                            e.style.setProperty("height", n + "px");
                            var L = r.findAncestor(e, "ladi-form");
                            r.isEmpty(L) || ((L = r.findAncestor(L, "ladi-element")), r.updateHeightElement(!0, e, L, t, n));
                        }
                    });
                }
                if (a["option.input_type"] == r.const.INPUT_TYPE.number) {
                    var m = e.querySelector('input[name="quantity"]'),
                        y = function (t) {
                            if (!r.isEmpty(t.target.value)) {
                                var e = r.generateVariantProduct(i, !1, null, null, null, null, !0, !0, function () {
                                    y(t);
                                });
                                if (!(r.isEmpty(e) || r.isEmpty(e.store_info) || r.isEmpty(e.product))) {
                                    var a = t.target;
                                    a = (a = r.findAncestor(a, "ladi-form")).querySelector('[data-variant="true"]');
                                    var n = r.getProductVariantId(a, e.product),
                                        o = e.product.variants.findIndex(function (t) {
                                            return t.product_variant_id == n;
                                        });
                                    if (-1 != o) {
                                        var s = e.product.variants[o].quantity,
                                            l = e.product.variants[o].quantity_stock;
                                        s = r.isNull(l) ? s : l;
                                        var c = parseInt(t.target.value) || 0,
                                            d = 1;
                                        d = e.product.variants[o].min_buy || d;
                                        var p = e.product.variants[o].max_buy,
                                            u = 0,
                                            m = r.runtime.tmp.cart.findIndex(function (t) {
                                                return t.product_id == e.product.variants[o].product_id && t.product_variant_id == e.product.variants[o].product_variant_id;
                                            });
                                        -1 != m && (u = r.runtime.tmp.cart[m].quantity),
                                        d > c + u && (c = d - u),
                                        1 == e.product.variants[o].inventory_checked && c + u > s && (c = s - u),
                                        !r.isEmpty(p) && c + u > p && (c = p - u),
                                            (c = c < 1 ? 1 : c),
                                            t.target.setAttribute("min", d),
                                        r.isEmpty(p) || t.target.setAttribute("max", p),
                                            (t.target.value = c);
                                    }
                                }
                            }
                        };
                    m.addEventListener("input", y), r.fireEvent(m, "input");
                    var g = e.querySelectorAll("button")[0],
                        f = e.querySelectorAll("button")[1];
                    if (r.isEmpty(g) || r.isEmpty(f)) return;
                    g.addEventListener("click", function (t) {
                        (m.value = (parseFloatLadiPage(m.value) || 0) - 1), r.fireEvent(m, "input");
                    }),
                        f.addEventListener("click", function (t) {
                            (m.value = (parseFloatLadiPage(m.value) || 0) + 1), r.fireEvent(m, "input");
                        });
                }
                if ("button" == a.type && (a["option.is_buy_now"] || a["option.is_add_to_cart"])) {
                    var h = function () {
                        var t = i["option.data_event"];
                        if (!r.isArray(t) && ((t = []), r.isObject(i["option.data_action"]))) {
                            var a = r.copy(i["option.data_action"]);
                            (a.action_type = r.const.ACTION_TYPE.action), t.push(a);
                        }
                        t.forEach(function (t) {
                            t.action_type == r.const.ACTION_TYPE.action &&
                            (t.type == r.const.DATA_ACTION_TYPE.popup_cart && (window.ladi("POPUP_CART").show(), r.runEventTracking(e.id, !1)),
                            t.type == r.const.DATA_ACTION_TYPE.popup_checkout && (r.runtime.shopping_third_party ? r.getThirdPartyCheckoutUrl(!0) : window.ladi("POPUP_CHECKOUT").show(), r.runEventTracking(e.id, !1)));
                        });
                    };
                    e.setAttribute("data-click", !1),
                        e.addEventListener("click", function (t) {
                            r.runtime.tmp.buttonAddToCartClick(t, !0, i, h);
                        });
                }
            },
            y = function (t, e, i, a, n, o) {
                var s = !r.isEmpty(e["option.product_mapping_name"]),
                    l = JSON.stringify(e),
                    c = null,
                    d = null;
                if (s)
                    if (a && r.isEmpty(i)) c = "";
                    else if (
                        !r.isEmpty(e["option.product_id"]) &&
                        l ===
                        (c = (d = r.generateProductKey(!0, l, !0, e, !0, i, null, function (r) {
                            y(t, e, i, a, n, o);
                        })).value)
                    )
                        return;
                var p = e.type,
                    u = null,
                    m = null;
                if (
                    (s && "headline" == p && ((m = t.getElementsByClassName("ladi-headline")[0]), r.isEmpty(m) || (m.innerHTML = r.isNull(c) ? "" : c)),
                    s && "paragraph" == p && ((m = t.getElementsByClassName("ladi-paragraph")[0]), r.isEmpty(m) || (m.innerHTML = r.isNull(c) ? "" : c)),
                    s && "image" == p)
                ) {
                    u = r.getOptimizeImage(c, t.clientWidth, t.clientHeight, !0, !1, !1, !0);
                    var _ = t.getElementsByClassName("ladi-image-background")[0];
                    r.isEmpty(_) || (r.isEmpty(u) ? _.style.setProperty("background-image", "none") : _.style.setProperty("background-image", 'url("' + u + '")'));
                }
                if ("gallery" == p) {
                    if (s && !r.isArray(c)) return;
                    if (o && !n && "true" == t.getAttribute("data-collection")) return void r.runtime.tmp.updateImageGalleryProduct(t, d, e);
                    t.setAttribute("data-collection", !0),
                        t.removeAttribute("data-stop"),
                        t.removeAttribute("data-loaded"),
                        t.removeAttribute("data-scrolled"),
                        t.removeAttribute("data-current"),
                        t.removeAttribute("data-is-next"),
                        t.removeAttribute("data-runtime-id"),
                        t.removeAttribute("data-next-time");
                    var g = t.querySelector(".ladi-gallery-view-item.selected");
                    r.isEmpty(g) || g.classList.remove("selected");
                    var f = t.querySelector(".ladi-gallery-control-item.selected");
                    r.isEmpty(f) || f.classList.remove("selected");
                    var h = t.getElementsByClassName("ladi-gallery-view")[0];
                    (f = t.getElementsByClassName("ladi-gallery-control-item")[0]), (g = t.getElementsByClassName("ladi-gallery-view-item")[0]), r.isEmpty(g) || g.classList.add("selected"), r.isEmpty(f) || f.classList.add("selected");
                    var v = t.getElementsByClassName("ladi-gallery-control-box")[0];
                    if ((r.isEmpty(v) || v.style.removeProperty("left"), s)) {
                        for (var E = t.getElementsByClassName("ladi-gallery-view-item"); E.length < c.length; ) {
                            var P = r.createTmpElement("div", '<div class="ladi-gallery-view-item" data-index="' + E.length + '"></div>', null, !0);
                            t.getElementsByClassName("ladi-gallery-view")[0].appendChild(P);
                        }
                        for (; E.length > c.length; ) E[E.length - 1].parentElement.removeChild(E[E.length - 1]);
                        for (
                            var A = t.getElementsByClassName("ladi-gallery-control-item"),
                                L = function (e) {
                                    r.runtime.tmp.eventClickGalleryControlItem(e, t);
                                };
                            A.length < c.length;

                        ) {
                            var b = r.createTmpElement("div", '<div class="ladi-gallery-control-item" data-index="' + A.length + '"></div>', null, !0);
                            b.addEventListener("click", L), t.getElementsByClassName("ladi-gallery-control-box")[0].appendChild(b);
                        }
                        for (; A.length > c.length; ) A[A.length - 1].parentElement.removeChild(A[A.length - 1]);
                        for (var w = t.querySelectorAll(".ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow"), S = 0; S < w.length; S++)
                            c.length <= 1 ? w[S].style.setProperty("display", "none") : w[S].style.removeProperty("display");
                        for (w = t.querySelectorAll(".ladi-gallery > .ladi-gallery-control"), S = 0; S < w.length; S++) c.length <= 1 ? w[S].style.setProperty("display", "none") : w[S].style.removeProperty("display");
                        for (w = t.querySelectorAll(".ladi-gallery > .ladi-gallery-view"), S = 0; S < w.length; S++) c.length <= 1 ? w[S].style.setProperty("height", "100%") : w[S].style.removeProperty("height");
                        c.forEach(function (e, i) {
                            (u = e.src), r.isEmpty(h) || (u = r.getOptimizeImage(e.src, h.clientWidth, h.clientHeight, !0, !1, !1, r.runtime.isClient));
                            var a = t.querySelector('.ladi-gallery .ladi-gallery-view-item[data-index="' + i + '"]');
                            r.isEmpty(a) || a.style.setProperty("background-image", 'url("' + u + '")'),
                            r.isEmpty(f) || (u = r.getOptimizeImage(e.src, f.clientWidth, f.clientHeight, !0, !1, !1, r.runtime.isClient)),
                                (a = t.querySelector('.ladi-gallery .ladi-gallery-control-item[data-index="' + i + '"]')),
                            r.isEmpty(a) || a.style.setProperty("background-image", 'url("' + u + '")');
                        }),
                            r.runTimeout(function () {
                                t.setAttribute("data-loaded", !0);
                            }, 300);
                    }
                    r.runtime.tmp.runGallery(t.id, t, !0, p), r.runtime.tmp.setGalleryStart(t.id, t);
                }
                "countdown_item" == p && r.runtime.tmp.runOptionCountdownItem(t.id, t, p, e["option.countdown_item_type"]),
                "countdown" == p &&
                r.runtime.tmp.runOptionCountdown(t.id, t, p, e["option.countdown_type"], e["option.countdown_minute"], e["option.countdown_daily_start"], e["option.countdown_daily_end"], e["option.countdown_endtime"]);
            },
            g = function (t, e) {
                var d = u * m,
                    p = r.getListProductByTagId(e, d, i, !0, function () {
                        g(t, e);
                    });
                if (r.isObject(p) && r.isArray(p.products)) {
                    var f = document.getElementById(t);
                    if (r.isEmpty(f)) return;
                    if (f.getAttribute("data-page") == i) return;
                    var h = i,
                        v = !1;
                    if (!r.isEmpty(p.total_record) && i * d >= p.total_record) {
                        if (c == r.const.COLLECTION_TYPE.readmore) {
                            var E = f.getElementsByClassName("ladi-collection-button-next")[0];
                            r.isEmpty(E) || E.setAttribute("data-opacity", "0");
                        }
                        f.setAttribute("data-max-page", h), (v = !0);
                    }
                    f.setAttribute("data-page", i > h ? h : i);
                    var P = f.getElementsByClassName("ladi-collection-arrow-left")[0],
                        A = f.getElementsByClassName("ladi-collection-arrow-right")[0],
                        L = f.getElementsByClassName("ladi-collection-button-next")[0];
                    if (
                        (r.isEmpty(P) || P.classList.remove("opacity-0"),
                        r.isEmpty(A) || A.classList.remove("opacity-0"),
                        r.isEmpty(L) || L.classList.remove("opacity-0"),
                        1 == f.getAttribute("data-page") && c == r.const.COLLECTION_TYPE.carousel && (r.isEmpty(P) || P.classList.add("opacity-0")),
                        f.getAttribute("data-page") == f.getAttribute("data-max-page") &&
                        (c == r.const.COLLECTION_TYPE.readmore && (r.isEmpty(L) || L.classList.add("opacity-0")), c == r.const.COLLECTION_TYPE.carousel && (r.isEmpty(A) || A.classList.add("opacity-0"))),
                        h < i)
                    )
                        return;
                    var b = f.getElementsByClassName("ladi-collection-item");
                    if (0 == b.length) return;
                    var w = 0,
                        S = 0;
                    if (f.hasAttribute("data-max-option-length")) w = parseFloatLadiPage(f.getAttribute("data-max-option-length"));
                    else {
                        var T = f.querySelectorAll('.ladi-form [data-variant="true"]');
                        for (S = 0; S < T.length; S++) {
                            var O = T[S].getElementsByClassName("ladi-form-item-box");
                            O.length > w && (w = O.length);
                        }
                    }
                    var C = f.getElementsByClassName("ladi-collection-content")[0],
                        N = { className: b[0].className, innerHTML: b[0].innerHTML };
                    a && b[0].parentElement.removeChild(b[0]);
                    for (var I = C.getElementsByClassName("ladi-collection-page"); I.length < i; ) {
                        var k = document.createElement("div");
                        (k.className = "ladi-collection-page"), C.appendChild(k);
                    }
                    var x = I[i - 1],
                        D = x.getElementsByClassName("ladi-collection-item");
                    if (D.length != p.products.length) for (; D.length > 0; ) D[0].parentElement.removeChild(D[0]);
                    var R = function (t, i, a, n, c, d) {
                        r.isEmpty(i.id) && !r.isEmpty(i.product_id) && (i.id = i.product_id);
                        for (
                            var p = function (t, e) {
                                    if (t.classList.contains("ladi-animation-hidden")) {
                                        var i = parseFloatLadiPage(e[r.runtime.device + ".style.animation-delay"]) || 0;
                                        t.classList.add("ladi-animation"),
                                            r.runTimeout(function () {
                                                t.classList.remove("ladi-animation-hidden");
                                            }, 1e3 * i);
                                    }
                                },
                                u = 0;
                            u < t.length;
                            u++
                        ) {
                            var m = r.copy(r.runtime.eventData[t[u].id]);
                            r.isEmpty(m) ||
                            (p(t[u], m),
                                (m["option.product_type"] = o),
                                (m["option.ladisale_store_id"] = s),
                                (m["option.product_tag_id"] = l),
                                (m["option.product_id"] = i.id),
                            a &&
                            (r.isFunction(r.runtime.tmp.runOptionAction) && r.runtime.tmp.runOptionAction(t[u], t[u].id, m.type, m),
                            r.isFunction(r.runtime.tmp.runOptionHover) && r.runtime.tmp.runOptionHover(t[u], t[u].id, m.type, m["option.data_event"] || m["option.data_hover"]),
                                _(t, t[u], e, m, i, R)),
                                y(t[u], m, n, c, a, d));
                        }
                    };
                    for (S = 0; S < p.products.length; S++) r.isArray(p.products[S].options) && p.products[S].options.length > w && (w = p.products[S].options.length);
                    for (f.setAttribute("data-max-option-length", w), S = 0; S < p.products.length; S++)
                        if (!(D.length > S)) {
                            var F = document.createElement("div");
                            (F.className = N.className), x.appendChild(F), (F.innerHTML = N.innerHTML);
                            for (var q = F.getElementsByClassName("ladi-element"); r.isArray(p.products[S].options) && p.products[S].options.length < w; ) p.products[S].options.push({ is_tmp: !0 });
                            R(q, p.products[S], !0, null, !1, !1);
                        }
                    v && x.classList.add("last"),
                    c == r.const.COLLECTION_TYPE.carousel &&
                    (function (t) {
                        var e = document.getElementById(t);
                        if (!r.isEmpty(e) && e.hasAttribute("data-page")) {
                            var i = "0",
                                a = getComputedStyle(e).width,
                                n = a,
                                o = parseFloatLadiPage(e.getAttribute("data-page")) || 1,
                                s = e.getElementsByClassName("ladi-collection-content")[0].getElementsByClassName("ladi-collection-page"),
                                l = s[s.length - 1].getElementsByClassName("ladi-collection-item"),
                                c = m - l.length,
                                d = "";
                            c > 0
                                ? (o > 1 && (i = o != s.length ? "calc(-" + a + " * " + (o - 1) + ")" : "calc(-" + a + " * " + (o - 1) + " + (" + a + " / " + m + " * " + c + "))"),
                                    (n = "calc(" + a + " * " + s.length + " - (" + a + " / " + m + " * " + c + "))"),
                                    (d += "#" + t + " .ladi-collection-content .ladi-collection-page.last {"),
                                    (d += "width: calc(" + getComputedStyle(e).width + " / " + m + " * " + l.length + ");"),
                                    (d += "}"))
                                : (o > 1 && (i = "calc(-" + a + " * " + (o - 1) + ")"), (n = "calc(" + a + " * " + s.length + ")"));
                            var p = "style_collection_" + t,
                                u = document.getElementById(p);
                            r.isEmpty(u) || u.parentElement.removeChild(u);
                            var _ = "#" + t + " .ladi-collection-content {";
                            (_ += "width: " + n + ";"), (_ += "left: " + i + ";"), (_ += "}"), (_ += d), r.createStyleElement(p, _);
                        }
                    })(t),
                    n &&
                    c == r.const.COLLECTION_TYPE.readmore &&
                    (function (t) {
                        var e = document.getElementById(t);
                        if (!r.isEmpty(e)) {
                            var i = e.getElementsByClassName("ladi-collection-content")[0];
                            if (e.hasAttribute("data-max-page")) {
                                var a = i.querySelector(".ladi-collection-page.last"),
                                    n = a.getElementsByClassName("ladi-collection-item"),
                                    o = Math.ceil(n.length / m);
                                a.style.setProperty("height", (parseFloatLadiPage(((parseFloatLadiPage(getComputedStyle(a).height) || 0) / u) * o) || 0) + "px");
                            }
                            var s = parseFloatLadiPage(getComputedStyle(e).height) || 0,
                                l = i.scrollHeight;
                            if (s != l) {
                                e.style.setProperty("height", l + "px");
                                var c = r.findAncestor(e.parentElement, "ladi-element");
                                r.isEmpty(c) && (c = r.findAncestor(e.parentElement, "ladi-section")), r.updateHeightElement(!0, e, c, s, l);
                            }
                        }
                    })(t),
                        r.runEventScroll(),
                        r.runResizeAll();
                }
            },
            f = d["option.product_tag_id"],
            h = d["option.data_setting.value"];
        (!r.isArray(f) && r.isEmpty(h)) || g(t, d);
    }
}),
(LadiPageScript.const.API_ANALYTICS_EVENT = ""),
(LadiPageScript.const.API_ACCESS_KEY_LOGIN = "https://api.ladipage.com/2.0/access-key-login"),
(LadiPageScript.const.API_COLLECTION_PRODUCT = "https://api.checkout.ladisales.com/1.0/product-list"),
(LadiPageScript.const.API_SHOW_PRODUCT = "https://api.checkout.ladisales.com/1.0/product-detail"),
(LadiPageScript.const.API_LADISALE_COLLECTION_PRODUCT = "https://api.ladisales.com/2.0/public/collections/products"),
(LadiPageScript.const.API_LADISALE_SHOW_PRODUCT = "https://api.ladisales.com/2.0/public/product/show"),
(LadiPageScript.const.API_LADISALE_ADD = "https://api.ladisales.com/2.0/cart/add"),
(LadiPageScript.const.API_LADISALE_UPDATE = "https://api.ladisales.com/2.0/cart/update"),
(LadiPageScript.const.API_LADISALE_SHOW = "https://api.ladisales.com/2.0/cart/show"),
(LadiPageScript.const.API_LADISALE_GET_SHIPPING = "https://api.ladisales.com/2.0/checkout/{0}/get-shipping"),
(LadiPageScript.const.API_LADISALE_VALIDATE_DISCOUNT = "https://api.ladisales.com/2.0/checkout/{0}/validate-discount"),
(LadiPageScript.const.API_LADISALE_PROMOTION = "https://api.checkout.ladisales.com/1.0/checkout/get-promotion"),
(LadiPageScript.const.API_LADISALE_CHECKOUT_CREATE = "https://api.checkout.ladisales.com/1.0/checkout/create"),
(LadiPageScript.const.API_FORM_DATA = "/api/send-info"),
(LadiPageScript.const.API_FILE_UPLOAD = "https://api.files.ladicdn.com/2.0/ladipage-upload-file"),
(LadiPageScript.const.API_DATASET_DATA = "https://g.ladicdn.com/dataset/{0}.json?id={1}"),
(LadiPageScript.const.API_DATASET_BLOG = "https://g.ladicdn.com/blog-"),
(LadiPageScript.const.CDN_LIBRARY_JS_URL = "https://w.ladicdn.com/v2/source/"),
(LadiPageScript.const.CDN_LIBRARY_CSS_URL = "https://w.ladicdn.com/v2/source/");
var lightbox_run = function (t, e, i, a, n, r, o, s) {
        var l = document.getElementById(LadiPageScript.runtime.lightbox_screen_id);
        if (!LadiPageScript.isEmpty(l)) {
            var c = JSON.stringify({ html: t, url: e, is_video: i, video_type: r, video_value: o }),
                d = Object.keys(LadiPageScript.runtime.list_lightbox_id);
            -1 == d.indexOf(c) && (LadiPageScript.runtime.list_lightbox_id[c] = d.length + 1);
            var p = LadiPageScript.runtime.list_lightbox_id[c];
            n = n + "_" + p;
            var u = document.getElementById(n),
                m = !1;
            LadiPageScript.isEmpty(u) ? ((u = document.createElement("div")), l.appendChild(u), (u.outerHTML = t), (u = l.lastChild), (m = !0)) : i && LadiPageScript.runEventReplayVideo(n, r, !0);
            var _ = document.createElement("div");
            (_.className = "lightbox-close"), _.setAttribute("data-hidden", !0), l.appendChild(_), u.setAttribute("id", n), u.setAttribute("data-hidden", !0), u.classList.remove("lightbox-hidden");
            var y = function () {
                    if (((u = document.getElementById(n)), !LadiPageScript.isEmpty(u))) {
                        if ("IFRAME" == u.tagName) {
                            var t = parseFloatLadiPage(getComputedStyle(u).width) || 0,
                                e = parseFloatLadiPage(getComputedStyle(u).height) || 0;
                            if (t > 0 || e > 0) {
                                var i = 0.8 * document.body.clientWidth,
                                    a = 0.8 * LadiPageScript.getHeightDevice(),
                                    r = i,
                                    o = (e / t) * r;
                                o > a && (r = (o = a) * (t / e)), u.style.setProperty("width", (parseFloatLadiPage(r) || 0) + "px"), u.style.setProperty("height", (parseFloatLadiPage(o) || 0) + "px");
                            }
                        }
                        if (((_ = l.getElementsByClassName("lightbox-close")[0]), !LadiPageScript.isEmpty(_))) {
                            var s = LadiPageScript.getElementBoundingClientRect(u),
                                c = 10,
                                d = 10;
                            s.x - 5 - _.clientWidth > d && (d = s.x - 5 - _.clientWidth),
                            s.y - 5 - _.clientHeight > c && (c = s.y - 5 - _.clientHeight),
                                (d += LadiPageScript.runtime.widthScrollBar),
                                (c -= 6),
                                (d -= 6),
                                _.style.setProperty("right", d + "px"),
                                _.style.setProperty("top", c + "px");
                        }
                        var p = document.getElementById(u.id + "_button_unmute");
                        LadiPageScript.isEmpty(p) || (p.style.setProperty("width", getComputedStyle(u).width), p.style.setProperty("height", getComputedStyle(u).height));
                    }
                },
                g = function () {
                    LadiPageScript.runTimeout(function () {
                        (u = document.getElementById(n)),
                        LadiPageScript.isEmpty(u) || (u.setAttribute("data-opacity", 0), u.removeAttribute("data-hidden")),
                            (_ = l.getElementsByClassName("lightbox-close")[0]),
                        LadiPageScript.isEmpty(_) || (_.setAttribute("data-opacity", 0), _.removeAttribute("data-hidden")),
                            y(),
                        LadiPageScript.isEmpty(u) || u.removeAttribute("data-opacity"),
                        LadiPageScript.isEmpty(_) || _.removeAttribute("data-opacity");
                    }, 100);
                };
            _.style.setProperty("top", "-100px"), _.style.setProperty("right", "-100px");
            var f = "load";
            if ((i && r == LadiPageScript.const.VIDEO_TYPE.direct && (f = "loadedmetadata"), m && (u.addEventListener(f, g), u.addEventListener("error", g)), i)) {
                var h = e;
                r == LadiPageScript.const.VIDEO_TYPE.youtube && ((e = null), (h = o)),
                    m
                        ? LadiPageScript.runEventPlayVideo(n, r, h, !1, !1, !0, !1, s, !1, function (t) {
                            LadiPageScript.isEmpty(t) ? g() : (t.addEventListener(f, g), t.addEventListener("error", g));
                        })
                        : g();
            }
            s || l.style.setProperty("display", "block"), LadiPageScript.isEmpty(e) || (m ? (u.src = e) : g());
            var v = function () {
                    var t = document.getElementById(LadiPageScript.runtime.backdrop_popup_id);
                    return LadiPageScript.isEmpty(t) || "none" == getComputedStyle(t).display;
                },
                E = 0;
            v() ? ((E = window.scrollY), (LadiPageScript.runtime.tmp.bodyScrollY = E)) : (E = LadiPageScript.runtime.tmp.bodyScrollY);
            var P = function () {
                l.style.removeProperty("display"),
                    (u = document.getElementById(n)),
                LadiPageScript.isEmpty(u) || (a && !i ? u.parentElement.removeChild(u) : (u.classList.add("lightbox-hidden"), i && LadiPageScript.runEventReplayVideo(n, r, !1))),
                    (_ = l.getElementsByClassName("lightbox-close")[0]),
                LadiPageScript.isEmpty(_) || _.parentElement.removeChild(_);
                var t = document.getElementById("style_lightbox");
                LadiPageScript.isEmpty(t) || t.parentElement.removeChild(t);
                var e = v();
                e && !LadiPageScript.isEmpty(LadiPageScript.runtime.tmp.bodyScrollY) && window.scrollTo(0, LadiPageScript.runtime.tmp.bodyScrollY), e && (LadiPageScript.runtime.tmp.bodyScrollY = null);
            };
            if (
                (_.addEventListener("click", function (t) {
                    t.stopPropagation(), P();
                }),
                    !s)
            ) {
                var A = "body {";
                (A += "position: fixed !important;"), (A += "width: 100% !important;"), (A += "top: -" + E + "px"), (A += "}"), LadiPageScript.createStyleElement("style_lightbox", A);
            }
            LadiPageScript.isEmpty(l.getAttribute("data-load-event")) &&
            (l.setAttribute("data-load-event", !0),
                l.addEventListener("click", function (t) {
                    t.stopPropagation(), t.target.id == l.id && ((_ = l.getElementsByClassName("lightbox-close")[0]), LadiPageScript.isEmpty(_) || _.click());
                }),
                window.addEventListener("resize", y)),
            s && P();
        }
    },
    lightbox_iframe = function (t, e, i, a, n, r) {
        if (!LadiPageScript.isEmpty(t)) {
            var o = "margin: auto; position: absolute; top: 0; left: 0; bottom: 0; right: 0; max-width: 80%; max-height: 80%;",
                s = '<iframe id="' + (i = i || "lightbox_iframe") + '" class="lightbox-item" style="' + o + '" frameborder="0" allowfullscreen></iframe>',
                l = t,
                c = LadiPageScript.createTmpElement("iframe", l, null, !0);
            LadiPageScript.isEmpty(c) || "IFRAME" != c.tagName || ((l = c.src), (i = c.id || i), c.removeAttribute("src"), c.setAttribute("style", o), c.classList.add("lightbox-item"), (s = c.outerHTML)),
                lightbox_run(s, l, e, !0, i, a, n, r);
        }
    },
    lightbox_image = function (t) {
        if (!LadiPageScript.isEmpty(t)) {
            lightbox_run('<img class="lightbox-item" style="margin: auto; position: absolute; top: 0; left: 0; bottom: 0; right: 0; object-fit: scale-down; max-width: 80%; max-height: 80%;" />', t, !1, !1, "lightbox_image");
        }
    },
    lightbox_video = function (t, e, i) {
        if (!LadiPageScript.isEmpty(t) && !LadiPageScript.isEmpty(e)) {
            LadiPageScript.pauseAllVideo();
            var a = "lightbox_player";
            if (
                (e == LadiPageScript.const.VIDEO_TYPE.youtube &&
                lightbox_iframe('<iframe id="' + a + '" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>', !0, a, e, t, i),
                e == LadiPageScript.const.VIDEO_TYPE.direct)
            ) {
                lightbox_run(
                    '<video class="lightbox-item" id="lightbox_player" style="margin: auto; position: absolute; top: 0; left: 0; bottom: 0; right: 0; max-width: 80%; max-height: 80%; object-fit: cover;"></video>',
                    t,
                    !0,
                    !1,
                    a,
                    e,
                    null,
                    i
                );
            }
        }
    },
    LadiPageLibraryV2 = LadiPageLibraryV2 || function () {};
(LadiPageLibraryV2.prototype.get_url = function (t, e, i) {
    if (!LadiPageScript.isEmpty(this.id)) {
        var a = this.id,
            n = "";
        if (e && LadiPageScript.isObject(t))
            Object.keys(t).forEach(function (e) {
                LadiPageScript.isEmpty(n) || (n += "&");
                var a = t[e];
                i && -1 != ["email", "phone"].indexOf(e) && (a = Base64.encode(a)), LadiPageScript.isArray(a) && a.length > 1 && (a = JSON.stringify(a)), (a = encodeURIComponent(a)), (n += e + "=" + a);
            });
        if (!LadiPageScript.isEmpty(n)) {
            var r = LadiPageScript.createTmpElement("a", "", { href: a });
            (r.search = r.search + (LadiPageScript.isEmpty(r.search) ? "?" : "&") + n), (a = r.href);
        }
        return (a = LadiPageScript.getLinkUTMRedirect(a, null)), (a = LadiPageScript.convertDataReplaceStr(a, !0, null, !1, t));
    }
}),
    (LadiPageLibraryV2.prototype.open_url = function (t, e) {
        if (!LadiPageScript.isEmpty(this.id))
            if (LadiPageScript.runtime.has_popupx) LadiPageScript.runtime.tmp.runActionPopupX({ url: this.id, target: t, nofollow: e, action: { type: "open_url" } });
            else {
                var i = this.id,
                    a = null;
                e && ((a = LadiPageScript.getElementAHref(i, !1)).setAttribute("rel", "nofollow"), document.body.appendChild(a)),
                    LadiPageScript.isEmpty(t) || "_self" == t.toLowerCase() ? (e ? a.click() : (window.location.href = i)) : e ? (a.setAttribute("target", t), a.click()) : window.open(i, t),
                e && a.parentElement.removeChild(a);
            }
    }),
    (LadiPageLibraryV2.prototype.get_cookie = function () {
        if (!LadiPageScript.isEmpty(this.id)) {
            for (var t = this.id + "=", e = document.cookie.split(";"), i = "", a = 0; a < e.length; a++) {
                for (var n = e[a]; " " == n.charAt(0); ) n = n.substring(1);
                if (0 == n.indexOf(t)) {
                    i = n.substring(t.length, n.length);
                    break;
                }
            }
            return decodeURIComponentLadiPage(i);
        }
    }),
    (LadiPageLibraryV2.prototype.delete_cookie = function (t, e) {
        this.set_cookie(null, -3650, t, e, !1);
    }),
    (LadiPageLibraryV2.prototype.set_cookie = function (t, e, i, a, n) {
        if (!LadiPageScript.isEmpty(this.id)) {
            var r = "";
            if (n) r = "expires = 0";
            else {
                var o = new Date();
                !LadiPageScript.isNull(e) && e instanceof Date ? (o = e) : ((e = LadiPageScript.isEmpty(e) ? 365 : e), o.setTime(o.getTime() + 24 * e * 60 * 60 * 1e3)), (r = "expires = " + o.toUTCString());
            }
            t = LadiPageScript.isEmpty(t) ? "" : t;
            var s = this.id + " = " + t;
            LadiPageScript.isEmpty(r) || (s += "; " + r),
            LadiPageScript.isEmpty(a) || (s += "; domain = " + a),
                (i = i || window.location.pathname),
            LadiPageScript.runtime.isIE || (s += "; path = " + i),
            "https:" == window.location.protocol && (s += "; SameSite = None; secure"),
                (document.cookie = s);
        }
    }),
    (LadiPageLibraryV2.prototype.submit = function () {
        var t = this.doc || document.getElementById(this.id);
        if (!LadiPageScript.isEmpty(t)) {
            var e = t.querySelector('.ladi-form button[type="submit"]');
            LadiPageScript.isEmpty(e) || e.click();
        }
    }),
    (LadiPageLibraryV2.prototype.scroll = function (t, e) {
        var i = this.doc || document.getElementById(this.id);
        if (!LadiPageScript.isEmpty(i))
            if (LadiPageScript.runtime.has_popupx) this.show();
            else {
                t && "none" == getComputedStyle(i).display && this.show();
                for (var a = document.querySelectorAll("#" + LadiPageScript.runtime.builder_section_popup_id + " .ladi-container > .ladi-element"), n = 0; n < a.length; n++)
                    if (a[n].id != this.id && a[n].hasAttribute("data-popup-backdrop") && "none" != getComputedStyle(a[n]).display) {
                        var r = LadiPageScript.findAncestor(i, "ladi-popup");
                        LadiPageScript.isEmpty(r) || (r = LadiPageScript.findAncestor(r, "ladi-element")), (LadiPageScript.isEmpty(r) || r.id != a[n].id) && (LadiPageScript.runRemovePopup(a[n].id, !0), 100);
                    }
                var o = LadiPageScript.isObject(LadiPageScript.runtime.story_page),
                    s = function (t, e, i) {
                        LadiPageScript.removeTimeout(LadiPageScript.runtime.tmp.scroll_timeout_id);
                        var a = function (t, e, i, a) {
                                return (t /= a / 2) < 1 ? (i / 2) * t * t + e : (-i / 2) * (--t * (t - 2) - 1) + e;
                            },
                            n = 0;
                        n = o ? ("left" == t ? e.scrollLeft : e.scrollTop) : "left" == t ? e.scrollX : e.scrollY;
                        var r = "left" == t ? window.innerWidth : window.innerHeight,
                            s = i - n;
                        if (0 != s) {
                            var l = s < 0 ? -1 * s : s,
                                c = 0,
                                d = 1e3;
                            (d = l <= 4 * r ? 750 : d), (d = l <= 2 * r ? 525 : d), (d = l <= r ? 300 : d), (d = o ? 300 : d);
                            var p = "left" == t ? "scrollLeft" : "scrollTop",
                                u = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame || window.oRequestAnimationFrame,
                                m = null,
                                _ = null,
                                y = function (i) {
                                    o ? (e[p] = i) : "left" == t ? e.scrollTo(i, e.scrollY) : e.scrollTo(e.scrollX, i);
                                };
                            if (u) {
                                var g = Date.now() + d;
                                u(
                                    (m = function () {
                                        (c = d - (g - Date.now())), (_ = a(c, n, s, d)), y(_), c < d ? u(m) : y(i);
                                    })
                                );
                            } else
                                (m = function () {
                                    (_ = a((c += 20), n, s, d)), y(_), c < d ? (LadiPageScript.runtime.tmp.scroll_timeout_id = LadiPageScript.runTimeout(m, 20)) : y(i);
                                })();
                        }
                    },
                    l = function (t) {
                        var e = LadiPageScript.getElementBoundingClientRect(i).top + (o ? t.scrollTop : t.scrollY),
                            a = 0,
                            n = 0,
                            r = Object.keys(LadiPageScript.runtime.eventData),
                            s = LadiPageScript.runtime.isDesktop ? LadiPageScript.const.DESKTOP : LadiPageScript.const.MOBILE;
                        return (
                            r.forEach(function (t) {
                                var e = LadiPageScript.runtime.eventData[t];
                                if ("section" == e.type && e[s + ".option.sticky"] && e[s + ".option.sticky_position"] == LadiPageScript.const.POSITION_TYPE.top) {
                                    var r = document.getElementById(t);
                                    LadiPageScript.isEmpty(r) ||
                                    (i.id != t &&
                                        ((n = parseFloatLadiPage(e[s + ".option.sticky_position_top"]) || 0), (a = (parseFloatLadiPage(getComputedStyle(r).height) || 0) + n), "fixed" != getComputedStyle(r).position && (a *= 2)));
                                }
                            }),
                                { scrollTop: (e -= a), stickyHeight: a, positionTop: n }
                        );
                    },
                    c = null,
                    d = null,
                    p = null;
                e
                    ? o
                        ? i.scrollIntoView()
                        : ((c = l(window)), window.scrollTo({ top: c.scrollTop }))
                    : LadiPageScript.runTimeout(function () {
                        var t;
                        o
                            ? LadiPageScript.runtime.isDesktop
                                ? i.scrollIntoView({ behavior: "smooth" })
                                : ((p = document.getElementsByClassName("ladi-wraper")[0]),
                                LadiPageScript.runtime.story_page.type == LadiPageScript.const.STORY_PAGE.horizontal &&
                                ((t = p), (d = { scrollLeft: LadiPageScript.getElementBoundingClientRect(i).left + (o ? t.scrollLeft : t.scrollX) }), s("left", p, d.scrollLeft)),
                                LadiPageScript.runtime.story_page.type == LadiPageScript.const.STORY_PAGE.vertical && ((c = l(p)), s("top", p, c.scrollTop)))
                            : ((p = window), (c = l(p)), LadiPageScript.runtime.isDesktop ? window.scrollTo({ top: c.scrollTop, behavior: "smooth" }) : s("top", p, c.scrollTop));
                    }, 100);
            }
    }),
    (LadiPageLibraryV2.prototype.value = function (t, e, i) {
        var a = this.doc || document.getElementById(this.id);
        if (!LadiPageScript.isEmpty(a)) {
            var n = [],
                r = !1,
                o = 0,
                s = LadiPageScript.isArray(t) ? t : [t],
                l = a.querySelectorAll('.ladi-form-item > [data-is-select-country="true"]');
            if (4 == l.length)
                if (LadiPageScript.isNull(t)) {
                    for (o = 0; o < l.length; o++) n.push(l[o].value);
                    r = !0;
                } else
                    s.forEach(function (t, e) {
                        LadiPageScript.isEmpty(l[e]) || ((l[e].value = t), LadiPageScript.fireEvent(l[e], "change"));
                    });
            else {
                var c = document.querySelectorAll("#" + this.id + " > ." + ["ladi-button .ladi-headline", "ladi-headline", "ladi-paragraph", "ladi-list-paragraph"].join(", #" + this.id + " > .")),
                    d = document.querySelectorAll(
                        "#" + this.id + " > ." + ["ladi-form-item-container .ladi-form-item > input", "ladi-form-item-container .ladi-form-item > textarea", "ladi-form-item-container .ladi-form-item > select"].join(", #" + this.id + " > .")
                    ),
                    p = document.querySelectorAll("#" + this.id + " > ." + ["ladi-form-item-container .ladi-form-checkbox-item > input"].join(", #" + this.id + " > .")),
                    u = document.querySelectorAll("#" + this.id + " > .ladi-image .ladi-image-background"),
                    m = document.querySelectorAll("#" + this.id + " > .ladi-video"),
                    _ = document.querySelectorAll("#" + this.id + " > .ladi-survey > .ladi-survey-option"),
                    y = function (t) {
                        var e = [];
                        return (
                            LadiPageScript.isArray(t) &&
                            t.forEach(function (t) {
                                e.push(t.name);
                            }),
                                (e = e.length > 0 ? "[" + e.join(", ") + "]" : "")
                        );
                    };
                for (o = 0; o < c.length; o++)
                    if (LadiPageScript.isNull(t)) LadiPageScript.isObject(i) && i.only_text ? n.push(c[o].innerText) : n.push(c[o].innerHTML);
                    else if (((c[o].innerHTML = t), !LadiPageScript.isEmpty(e))) {
                        var g = LadiPageScript.findAncestor(c[o], "ladi-element");
                        LadiPageScript.isEmpty(g) || g.classList.add(e);
                    }
                for (o = 0; o < d.length; o++)
                    if (LadiPageScript.isNull(t))
                        if (d[o].classList.contains("ladi-form-control-file")) {
                            var f = d[o].getAttribute("data-path-file") || "[]";
                            (f = JSON.parse(f)), n.push(f);
                        } else n.push(d[o].value);
                    else
                        d[o].classList.contains("ladi-form-control-file")
                            ? (d[o].setAttribute("data-path-file", JSON.stringify(t)), (d[o].value = y(t)))
                            : ((d[o].value = t), "date" == d[o].getAttribute("data-type") && (LadiPageScript.isEmpty(t) ? d[o].setAttribute("type", "text") : d[o].setAttribute("type", "date")));
                var h = !1;
                for (o = 0; o < p.length; o++)
                    LadiPageScript.isNull(t)
                        ? (p[o].checked && n.push(p[o].value), "checkbox" == p[o].getAttribute("type").toLowerCase() && (r = !0))
                        : ((h = !1),
                        "checkbox" == p[o].getAttribute("type").toLowerCase() && -1 != s.indexOf(p[o].value) && (h = !0),
                        "radio" == p[o].getAttribute("type").toLowerCase() && s.length > 0 && s[0] == p[o].value && (h = !0),
                            h ? p[o].checked || p[o].click() : p[o].checked && p[o].click());
                for (o = 0; o < u.length; o++)
                    if (LadiPageScript.isNull(t)) {
                        var v = getComputedStyle(u[o]).backgroundImage;
                        (v = v || "").startsWith('url("') && (v = v.substring('url("'.length)), v.endsWith('")') && (v = v.substring(0, v.length - '")'.length)), n.push(v);
                    } else if (LadiPageScript.isEmpty(t)) u[o].style.setProperty("background-image", "none");
                    else {
                        var E = LadiPageScript.findAncestor(u[o], "ladi-element"),
                            P = LadiPageScript.getOptimizeImage(t, E.clientWidth, E.clientHeight, !0, !1, !1, !0);
                        u[o].style.setProperty("background-image", 'url("' + P + '")');
                    }
                for (o = 0; o < m.length; o++) {
                    var A = LadiPageScript.runtime.eventData[this.id];
                    if (LadiPageScript.isNull(t)) LadiPageScript.isEmpty(A) || n.push({ type: A["option.video_type"], value: A["option.video_value"] });
                    else {
                        A["option.video_value"] = t;
                        var L = m[o].getElementsByClassName("iframe-video-preload")[0],
                            b = null;
                        if (A["option.video_type"] == LadiPageScript.const.VIDEO_TYPE.youtube) {
                            var w = "https://img.youtube.com/vi/" + (b = LadiPageScript.getVideoId(A["option.video_type"], t)) + "/hqdefault.jpg",
                                S = m[o].getElementsByClassName("ladi-video-background")[0];
                            LadiPageScript.isEmpty(S) || S.style.setProperty("background-image", 'url("' + w + '")');
                        }
                        if (LadiPageScript.isEmpty(L)) LadiPageScript.playVideo(this.id, A["option.video_type"], A["option.video_value"], A["option.video_control"]);
                        else {
                            LadiPageScript.pauseAllVideo();
                            var T = !1;
                            if (A["option.video_type"] == LadiPageScript.const.VIDEO_TYPE.youtube) {
                                var O = window.YT.get(L.id);
                                !LadiPageScript.isEmpty(O) && LadiPageScript.isFunction(O.loadVideoById) && (O.loadVideoById(b, 0), O.seekTo(0), (T = !0));
                            }
                            A["option.video_type"] == LadiPageScript.const.VIDEO_TYPE.direct && LadiPageScript.isFunction(L.play) && ((L.src = t), (L.currentTime = 0), (T = !0)),
                            T && LadiPageScript.runEventReplayVideo(L.id, A["option.video_type"], !0);
                        }
                    }
                }
                for (o = 0; o < _.length; o++)
                    LadiPageScript.isNull(t)
                        ? (_[o].classList.contains("selected") && n.push(_[o].getAttribute("data-value")), "true" == a.getAttribute("data-multiple") && (r = !0))
                        : ((h = !1), -1 != s.indexOf(_[o].getAttribute("data-value")) && (h = !0), h ? _[o].classList.contains("selected") || _[o].click() : _[o].classList.contains("selected") && _[o].click());
            }
            return r ? n : n.length > 0 ? n[0] : null;
        }
    }),
    (LadiPageLibraryV2.prototype.top = function () {
        var t = this.doc || document.getElementById(this.id);
        if (!LadiPageScript.isEmpty(t) && t.classList.contains("ladi-section"))
            try {
                var e = t.parentElement.firstChild;
                LadiPageScript.isEmpty(e) || e.id != LadiPageScript.runtime.builder_section_background_id || (e = e.nextElementSibling), t.parentElement.insertBefore(t, e), LadiPageScript.reloadLazyload(!1);
            } catch (t) {}
    }),
    (LadiPageLibraryV2.prototype.pause = function () {
        var t = this.doc || document.getElementById(this.id);
        if (!LadiPageScript.isEmpty(t)) {
            var e = LadiPageScript.runtime.eventData[this.id];
            if (!LadiPageScript.isEmpty(e) && "video" == e.type) {
                var i = t.querySelector(".iframe-video-preload:not(.no-pause)");
                LadiPageScript.isEmpty(i) || LadiPageScript.runEventReplayVideo(i.id, i.getAttribute("data-video-type"), !1);
            }
        }
    }),
    (LadiPageLibraryV2.prototype.play = function () {
        var t = this.doc || document.getElementById(this.id);
        if (!LadiPageScript.isEmpty(t)) {
            var e = LadiPageScript.runtime.eventData[this.id];
            if (!LadiPageScript.isEmpty(e) && "video" == e.type) {
                var i = e["option.video_type"],
                    a = e["option.video_value"],
                    n = e["option.video_control"];
                LadiPageScript.playVideo(this.id, i, a, n);
            }
        }
    }),
    (LadiPageLibraryV2.prototype.prevSectionTabs = function () {
        var t = document.querySelectorAll('.ladi-section[data-tab-id="' + this.id + '"]');
        if (0 != t.length)
            for (var e = 0; e < t.length; e++)
                if (t[e].classList.contains("selected")) {
                    var i = e - 1;
                    (i = i < 0 ? 0 : i), (this.doc = t[i]), this.show();
                    break;
                }
    }),
    (LadiPageLibraryV2.prototype.nextSectionTabs = function () {
        var t = document.querySelectorAll('.ladi-section[data-tab-id="' + this.id + '"]');
        if (0 != t.length)
            for (var e = 0; e < t.length; e++)
                if (t[e].classList.contains("selected")) {
                    var i = e + 1;
                    (i = i >= t.length ? t.length - 1 : i), (this.doc = t[i]), this.show();
                    break;
                }
    }),
    (LadiPageLibraryV2.prototype.indexSectionTabs = function (t) {
        var e = document.querySelectorAll('.ladi-section[data-tab-id="' + this.id + '"]');
        e.length < t || ((this.doc = e[t - 1]), this.show());
    }),
    (LadiPageLibraryV2.prototype.prev = function () {
        var t = this.doc || document.getElementById(this.id);
        if (LadiPageScript.isEmpty(t)) this.prevSectionTabs();
        else {
            var e = LadiPageScript.runtime.eventData[this.id];
            if (!LadiPageScript.isEmpty(e)) {
                var i = null;
                if (
                    ("gallery" == e.type && (i = t.querySelector(".ladi-gallery-view-arrow.ladi-gallery-view-arrow-left")),
                    "carousel" == e.type && (i = t.querySelector(".ladi-carousel-arrow.ladi-carousel-arrow-left")),
                    "collection" == e.type && (i = t.querySelector(".ladi-collection-arrow.ladi-collection-arrow-left")),
                    "tabs" == e.type)
                ) {
                    var a = t.querySelector(".ladi-tabs > .ladi-element.selected[data-index]");
                    return (
                        LadiPageScript.isEmpty(a) && (a = t.querySelector(".ladi-tabs > .ladi-element")),
                            void (LadiPageScript.isEmpty(a) || LadiPageScript.isEmpty(a.previousElementSibling) || (a.previousElementSibling.classList.add("selected"), a.classList.remove("selected"), LadiPageScript.reloadLazyload(!1)))
                    );
                }
                LadiPageScript.isEmpty(i) || i.click();
            }
        }
    }),
    (LadiPageLibraryV2.prototype.next = function () {
        var t = this.doc || document.getElementById(this.id);
        if (LadiPageScript.isEmpty(t)) this.nextSectionTabs();
        else {
            var e = LadiPageScript.runtime.eventData[this.id];
            if (!LadiPageScript.isEmpty(e)) {
                var i = null;
                if (
                    ("gallery" == e.type && (i = t.querySelector(".ladi-gallery-view-arrow.ladi-gallery-view-arrow-right")),
                    "carousel" == e.type && (i = t.querySelector(".ladi-carousel-arrow.ladi-carousel-arrow-right")),
                    "collection" == e.type && (i = t.querySelector(".ladi-collection-arrow.ladi-collection-arrow-right, .ladi-collection-button-next")),
                    "survey" == e.type && (i = t.querySelector(".ladi-survey-button-next button")),
                    "tabs" == e.type)
                ) {
                    var a = t.querySelector(".ladi-tabs > .ladi-element.selected[data-index]");
                    return (
                        LadiPageScript.isEmpty(a) && (a = t.querySelector(".ladi-tabs > .ladi-element")),
                            void (LadiPageScript.isEmpty(a) || LadiPageScript.isEmpty(a.nextElementSibling) || (a.nextElementSibling.classList.add("selected"), a.classList.remove("selected"), LadiPageScript.reloadLazyload(!1)))
                    );
                }
                LadiPageScript.isEmpty(i) || i.click();
            }
        }
    }),
    (LadiPageLibraryV2.prototype.index = function (t) {
        var e = this.doc || document.getElementById(this.id);
        if (LadiPageScript.isEmpty(e)) this.indexSectionTabs(t);
        else {
            var i = LadiPageScript.runtime.eventData[this.id];
            if (!LadiPageScript.isEmpty(i)) {
                var a = 0;
                ("gallery" != i.type && "carousel" != i.type) || ((a = parseFloatLadiPage(e.getAttribute("data-current")) || 0), (a += 1)), "collection" == i.type && (a = parseFloatLadiPage(e.getAttribute("data-page")) || 1);
                var n = null;
                if (
                    ("tabs" == i.type &&
                    ((n = e.querySelector(".ladi-tabs > .ladi-element.selected[data-index]")),
                    LadiPageScript.isEmpty(n) && (n = e.querySelector(".ladi-tabs > .ladi-element")),
                    LadiPageScript.isEmpty(n) || (a = parseFloatLadiPage(n.getAttribute("data-index")) || 1)),
                        LadiPageScript.isEmpty(t))
                )
                    return a;
                if ("tabs" != i.type) {
                    if ((("gallery" != i.type && "carousel" != i.type) || ((t -= 1), (a -= 1)), t == a))
                        return "carousel" == i.type && e.setAttribute("data-stop", !0), void ("gallery" == i.type && e.hasAttribute("data-loaded") && e.setAttribute("data-stop", !0));
                    t > a
                        ? (("gallery" != i.type && "carousel" != i.type) || e.setAttribute("data-current", t - 1), "collection" == i.type && e.setAttribute("data-page", t - 1), this.next())
                        : (("gallery" != i.type && "carousel" != i.type) || e.setAttribute("data-current", t + 1), "collection" == i.type && e.setAttribute("data-page", t + 1), this.prev());
                } else {
                    var r = e.querySelector('.ladi-tabs > .ladi-element[data-index="' + t + '"]');
                    LadiPageScript.isEmpty(r) || (LadiPageScript.isEmpty(n) || n.classList.remove("selected"), r.classList.add("selected"), LadiPageScript.reloadLazyload(!1));
                }
            }
        }
    }),
    (LadiPageLibraryV2.prototype.readmore = function () {
        var t = this.doc || document.getElementById(this.id);
        if (!LadiPageScript.isEmpty(t)) {
            var e = t.getElementsByClassName("ladi-section-arrow-down")[0];
            LadiPageScript.isEmpty(e) || e.click();
        }
    }),
    (LadiPageLibraryV2.prototype.collapse = function (t) {
        var e = this.doc || document.getElementById(this.id);
        if (!LadiPageScript.isEmpty(e) && !e.classList.contains("ladi-section")) {
            var i = e.getElementsByClassName("ladi-popup")[0];
            if (LadiPageScript.isEmpty(i)) {
                var a = LadiPageScript.isNull(t),
                    n = document.querySelector(["#" + this.id + " > .ladi-headline", "#" + this.id + " > .ladi-paragraph", "#" + this.id + " > .ladi-list-paragraph"].join(", ")),
                    r = LadiPageScript.isEmpty(n),
                    o = 0,
                    s = 0,
                    l = null,
                    c = this,
                    d = function (t) {
                        var i = LadiPageScript.findAncestor(e.parentElement, "ladi-element");
                        LadiPageScript.isEmpty(i) && (i = LadiPageScript.findAncestor(e.parentElement, "ladi-section")),
                        r || (t = !1),
                            (LadiPageScript.runtime.list_collapse[c.id] = LadiPageScript.updateHeightElement(!0, e, i, o, s, t, LadiPageScript.runtime.list_collapse[c.id]));
                    };
                if ("none" == getComputedStyle(e).display) {
                    if (a || t)
                        if (a && r) {
                            if (((l = parseFloatLadiPage(e.getAttribute("data-timeout-id")) || null), !LadiPageScript.isEmpty(l))) return;
                            e.classList.remove("height-0"),
                                e.classList.remove("overflow-hidden"),
                                e.classList.remove("transition-collapse"),
                                c.show(),
                                (s = parseFloatLadiPage(getComputedStyle(e).height) || 0),
                                e.classList.add("overflow-hidden"),
                                e.classList.add("height-0"),
                                (l = LadiPageScript.runTimeout(function () {
                                    e.classList.add("transition-collapse"),
                                        e.classList.remove("height-0"),
                                        (l = LadiPageScript.runTimeout(function () {
                                            e.classList.remove("overflow-hidden"), e.classList.remove("transition-collapse"), e.removeAttribute("data-timeout-id");
                                        }, 1e3 * parseFloatLadiPage(getComputedStyle(e).transitionDuration))),
                                        e.setAttribute("data-timeout-id", l),
                                        d(!0);
                                }, 100)),
                                e.setAttribute("data-timeout-id", l);
                        } else c.show(), (s = parseFloatLadiPage(getComputedStyle(e).height) || 0), d();
                } else if (a || !t)
                    if (a && r) {
                        if (((l = parseFloatLadiPage(e.getAttribute("data-timeout-id")) || null), !LadiPageScript.isEmpty(l))) return;
                        e.classList.remove("height-0"),
                            e.classList.remove("overflow-hidden"),
                            e.classList.remove("transition-collapse"),
                            (o = parseFloatLadiPage(getComputedStyle(e).height) || 0),
                            e.classList.add("overflow-hidden"),
                            (l = LadiPageScript.runTimeout(function () {
                                e.classList.add("transition-collapse"),
                                    e.classList.add("height-0"),
                                    (l = LadiPageScript.runTimeout(function () {
                                        e.classList.remove("overflow-hidden"), e.classList.remove("transition-collapse"), e.classList.remove("height-0"), e.removeAttribute("data-timeout-id"), c.hide();
                                    }, 1e3 * parseFloatLadiPage(getComputedStyle(e).transitionDuration))),
                                    e.setAttribute("data-timeout-id", l),
                                    d(!0);
                            }, 100)),
                            e.setAttribute("data-timeout-id", l);
                    } else (o = parseFloatLadiPage(getComputedStyle(e).height) || 0), c.hide(), d();
            }
        }
    }),
    (LadiPageLibraryV2.prototype.hide = function (t) {
        var e = this.doc || document.getElementById(this.id);
        if (!LadiPageScript.isEmpty(e)) {
            var i = !1;
            if (0 == e.getElementsByClassName("ladi-popup").length) {
                if (
                    (LadiPageScript.runtime.has_popupx && e.classList.contains("ladi-section") && "none" != getComputedStyle(e).display && (i = !0),
                        e.style.setProperty("display", "none", "important"),
                        LadiPageScript.reloadLazyload(!1),
                    !t && i)
                ) {
                    LadiPageScript.runtime.tmp.runActionPopupX({ id: this.id, dimension: { display: "none" }, action: { type: "set_iframe_dimension" } });
                }
            } else
                LadiPageScript.runRemovePopup(this.id, !0, function () {
                    for (var t = document.querySelectorAll("#" + LadiPageScript.runtime.builder_section_popup_id + " .ladi-container > .ladi-element"), e = 0; e < t.length; e++)
                        t[e].id != this.id && t[e].hasAttribute("data-popup-backdrop") && "none" != getComputedStyle(t[e]).display && LadiPageScript.runRemovePopup(t[e].id, !0);
                });
        }
    }),
    (LadiPageLibraryV2.prototype.show = function (t) {
        var e = this.doc || document.getElementById(this.id);
        if (!LadiPageScript.isEmpty(e)) {
            if (e.classList.contains("ladi-section")) {
                var i = e.getAttribute("data-tab-id");
                if (!LadiPageScript.isEmpty(i))
                    for (var a = document.querySelectorAll('.ladi-section[data-tab-id="' + i + '"]'), n = 0; n < a.length; n++)
                        a[n].id == e.id ? a[n].classList.add("selected") : (a[n].classList.remove("selected"), window.ladi(a[n].id).hide());
            }
            var r = this,
                o = function () {
                    if (LadiPageScript.isObject(LadiPageScript.runtime.eventData)) {
                        var t = LadiPageScript.runtime.eventData[r.id];
                        LadiPageScript.isEmpty(t) || LadiPageScript.startAutoScroll(r.id, t.type, t[LadiPageScript.const.DESKTOP + ".option.auto_scroll"], t[LadiPageScript.const.MOBILE + ".option.auto_scroll"]);
                        for (var i = e.getElementsByClassName("ladi-element"), a = 0; a < i.length; a++) {
                            var n = LadiPageScript.runtime.eventData[i[a].id];
                            LadiPageScript.isEmpty(n) || LadiPageScript.startAutoScroll(i[a].id, n.type, n[LadiPageScript.const.DESKTOP + ".option.auto_scroll"], n[LadiPageScript.const.MOBILE + ".option.auto_scroll"]);
                        }
                    }
                },
                s = function () {
                    for (var t = e.getElementsByClassName("ladi-element"), i = -1; i < t.length; i++) {
                        var a = -1 == i ? e : t[i];
                        "true" == a.getAttribute("data-sticky") &&
                        (a.removeAttribute("data-top"),
                            a.removeAttribute("data-left"),
                            a.removeAttribute("data-sticky"),
                            a.style.removeProperty("top"),
                            a.style.removeProperty("left"),
                            a.style.removeProperty("width"),
                            a.style.removeProperty("position"),
                            a.style.removeProperty("z-index"));
                    }
                    LadiPageScript.runEventScroll();
                };
            if (t) {
                e.getElementsByClassName("ladi-popup").length > 0
                    ? (LadiPageScript.runShowPopup(!1, this.id, null, null, !0, function () {
                        for (var t = document.querySelectorAll("#" + LadiPageScript.runtime.builder_section_popup_id + " .ladi-container > .ladi-element"), e = 0; e < t.length; e++)
                            t[e].id != this.id && t[e].hasAttribute("data-popup-backdrop") && "none" != getComputedStyle(t[e]).display && LadiPageScript.runRemovePopup(t[e].id, !0);
                    }),
                        LadiPageScript.removeLazyloadPopup(this.id),
                        o(),
                        s(),
                        LadiPageScript.runResizeSectionBackground())
                    : (e.style.setProperty("display", "block", "important"), o(), s(), LadiPageScript.runResizeSectionBackground(), LadiPageScript.reloadLazyload(!1));
            } else {
                if (LadiPageScript.runtime.has_popupx && LadiPageScript.runtime.tmp.showPopupX(e.id, !0)) return;
                r.show(!0);
            }
        }
    }),
    (LadiPageLibraryV2.prototype.toggle = function (t) {
        var e = this.doc || document.getElementById(this.id);
        LadiPageScript.isEmpty(e) || ("none" == getComputedStyle(e).display ? this.show(t) : this.hide(t));
    }),
    (LadiPageLibraryV2.prototype.element = function () {
        return this.doc || document.getElementById(this.id);
    }),
    ["start", "add_turn"].forEach(function (t) {
        LadiPageLibraryV2.prototype[t] = function () {
            var e = LadiPageScript.runtime.eventData[this.id];
            if (!LadiPageScript.isEmpty(e)) {
                var i = LadiPageApp[e.type + LadiPageScript.const.APP_RUNTIME_PREFIX];
                if (!LadiPageScript.isEmpty(i)) {
                    var a = i(e, !0);
                    LadiPageScript.isFunction(a[t]) && a[t](this.id);
                }
            }
        };
    });
var LadiPageAppV2,
    ladi =
        ladi ||
        function (t, e) {
            if (!LadiPageScript.isEmpty(t)) {
                var i = new LadiPageLibraryV2();
                return (i.id = t), (i.doc = e), i;
            }
        },
    ladi_fbq = function (t, e, i, a) {
        if (LadiPageScript.isFunction(window.fbq)) {
            if (LadiPageScript.isObject(window.ladi_conversion_api) && LadiPageScript.isObject(window.ladi_conversion_api.facebook) && LadiPageScript.isArray(window.ladi_conversion_api.facebook.pixels)) {
                LadiPageScript.isObject(a) || (a = {});
                a.eventID = "ladi." + Date.now() + "." + (Math.floor(9e10 * Math.random()) + 1e10);
            }
            window.fbq(t, e, i, a), LadiPageScript.runConversionApi("facebook", "events", [{ key: t, name: e, custom_data: i, data: a }]);
        }
    };
LadiPageScript.isArray(window.ladi_fbq_data) &&
(window.ladi_fbq_data.forEach(function (t) {
    ladi_fbq(t[0], t[1], t[2], t[3]);
}),
    delete window.ladi_fbq_data),
    ((LadiPageAppV2 = LadiPageAppV2 || function () {}).prototype.notify_runtime = function (t, e) {
        var i = function () {},
            a = "top_left",
            n = "top_center",
            r = "top_right",
            o = "bottom_left",
            s = "bottom_center",
            l = "bottom_right";
        return (
            (i.prototype.run = function (e, i) {
                LadiPageScript.isObject(LadiPageScript.runtime.tmp.timeout_notify) || (LadiPageScript.runtime.tmp.timeout_notify = {});
                var c = t["option.sheet_id"],
                    d = t.dataset_value,
                    p = document.getElementById(e);
                if ((p.classList.add("ladi-hidden"), !LadiPageScript.isEmpty(c) || !LadiPageScript.isEmpty(d))) {
                    var u = i ? LadiPageScript.const.DESKTOP : LadiPageScript.const.MOBILE,
                        m = t[u + ".option.position"],
                        _ = 1e3 * (parseFloatLadiPage(t["option.time_show"]) || 5),
                        y = 1e3 * (parseFloatLadiPage(t["option.time_delay"]) || 10);
                    y = y < 501 ? 501 : y;
                    var g = "https://w.ladicdn.com/source/notify.svg",
                        f = [
                            { key: "gsx$title", className: ".ladi-notify-title" },
                            { key: "gsx$content", className: ".ladi-notify-content" },
                            { key: "gsx$time", className: ".ladi-notify-time" },
                            { key: "gsx$image", className: ".ladi-notify-image img" },
                        ];
                    p.classList.remove("ladi-hidden");
                    var h = function () {
                        p.style.setProperty("opacity", 0),
                        (m != a && m != n && m != r) || p.style.setProperty("top", -p.clientHeight - 100 + "px"),
                        (m != o && m != s && m != l) || p.style.setProperty("bottom", -p.clientHeight - 100 + "px");
                    };
                    h(),
                        f.forEach(function (t) {
                            "gsx$image" == t.key ? (p.querySelectorAll(t.className)[0].src = g) : (p.querySelectorAll(t.className)[0].textContent = "");
                        });
                    var v = function (t) {
                            t = t.sort(function () {
                                return 0.5 - Math.random();
                            });
                            var i = -1,
                                c = function () {
                                    if (i + 1 < t.length) {
                                        var d = t[++i],
                                            u = Object.keys(d);
                                        p.style.removeProperty("opacity"),
                                        (m != a && m != n && m != r) || p.style.removeProperty("top"),
                                        (m != o && m != s && m != l) || p.style.removeProperty("bottom"),
                                            f.forEach(function (t) {
                                                -1 != u.indexOf(t.key) &&
                                                ("gsx$image" == t.key ? (p.querySelectorAll(t.className)[0].src = LadiPageScript.isEmpty(d[t.key].$t) ? g : d[t.key].$t) : (p.querySelectorAll(t.className)[0].textContent = d[t.key].$t));
                                            });
                                        var E = function () {
                                            var a = f.findIndex(function (t) {
                                                return "gsx$image" == t.key;
                                            });
                                            if (-1 != a) {
                                                var n = t[i + 1 >= t.length ? 0 : i + 1];
                                                n.hasOwnProperty(f[a].key) && (p.querySelectorAll(f[a].className)[0].src = LadiPageScript.isEmpty(n[f[a].key].$t) ? g : n[f[a].key].$t);
                                            }
                                            LadiPageScript.runtime.tmp.timeout_notify[e] = LadiPageScript.runTimeout(c, y - 500);
                                        };
                                        LadiPageScript.runtime.tmp.timeout_notify[e] = LadiPageScript.runTimeout(function () {
                                            h(), (LadiPageScript.runtime.tmp.timeout_notify[e] = LadiPageScript.runTimeout(E, 500));
                                        }, _);
                                    } else v(t);
                                };
                            LadiPageScript.runtime.tmp.timeout_notify[e] = LadiPageScript.runTimeout(c, y);
                        },
                        E = function (t) {
                            p.querySelector(".ladi-notify").classList.remove("ladi-hidden"), p.classList.add("ladi-notify-transition"), v(t);
                        };
                    LadiPageScript.isEmpty(d) || E(d),
                    LadiPageScript.isEmpty(c) ||
                    LadiPageScript.sendRequest("GET", "https://docs.google.com/spreadsheets/d/" + c + "/gviz/tq?tqx=out:json", null, !0, null, function (t, e, i) {
                        if (i.readyState == XMLHttpRequest.DONE && 200 == e) {
                            t = (t = t.substr(t.indexOf('"table":{') + '"table":'.length)).substr(0, t.indexOf("});"));
                            var a = JSON.parse(t),
                                n = [],
                                r = a.cols;
                            LadiPageScript.isObject(a) &&
                            0 == a.parsedNumHeaders &&
                            LadiPageScript.isArray(a.rows) &&
                            a.rows.length > 0 &&
                            LadiPageScript.isObject(a.rows[0]) &&
                            LadiPageScript.isArray(a.rows[0].c) &&
                            a.rows[0].c.length > 0 &&
                            ((r = []),
                                a.rows[0].c.forEach(function (t) {
                                    r.push({ label: LadiPageScript.isObject(t) ? t.v : "" });
                                }),
                                a.rows.shift()),
                            LadiPageScript.isObject(a) &&
                            LadiPageScript.isArray(a.rows) &&
                            LadiPageScript.isArray(r) &&
                            a.rows.forEach(function (t) {
                                if (LadiPageScript.isObject(t)) {
                                    var e = {};
                                    r.forEach(function (i, a) {
                                        if (LadiPageScript.isArray(t.c)) {
                                            var n = t.c[a];
                                            LadiPageScript.isObject(i) && !LadiPageScript.isEmpty(i.label) && LadiPageScript.isObject(n) && (e["gsx$" + i.label.toLowerCase()] = { $t: n.v });
                                        }
                                    }),
                                        n.push(e);
                                }
                            }),
                                E(n);
                        }
                    });
                }
            }),
                new i()
        );
    }),
    ((LadiPageAppV2 = LadiPageAppV2 || function () {}).prototype.spinlucky_runtime = function (t, e) {
        var i = function () {},
            a = function (t) {
                return parseFloatLadiPage(window.ladi("_total_turn_" + t).get_cookie()) || 0;
            };
        return (
            (i.prototype.getEventTrackingCategory = function () {
                return "LadiPageFinish";
            }),
                (i.prototype.run = function (e, i) {
                    var n = t["option.spinlucky_setting.list_value"],
                        r = t.dataset_value,
                        o = t["option.spinlucky_setting.result_popup_id"],
                        s = t["option.spinlucky_setting.result_message"],
                        l = t["option.spinlucky_setting.max_turn"],
                        c = a(e);
                    if (!LadiPageScript.isEmpty(n) || !LadiPageScript.isEmpty(r)) {
                        (n = n || r), LadiPageScript.setDataReplaceStr("spin_turn_left", l - c);
                        var d = document.getElementById(e),
                            p = d.getElementsByClassName("ladi-spin-lucky-start")[0],
                            u = d.getElementsByClassName("ladi-spin-lucky-screen")[0],
                            m = "";
                        n.forEach(function (t, e) {
                            var i = Base64.decode(t).split("|");
                            if (3 == i.length) {
                                var a = (360 / n.length) * e + 180 / n.length,
                                    r = "rotate(" + (a *= -1) + "deg) translateY(-50%)";
                                m += '<div class="ladi-spin-lucky-label" style="transform: ' + r + "; -webkit-transform: " + r + ';">' + i[1].trim() + "</div>";
                            }
                        }),
                            (u.innerHTML = m);
                        var _ = !1;
                        p.addEventListener("click", function (t) {
                            if ((t.stopPropagation(), !_))
                                if ((c = a(e)) >= l) LadiPageScript.showMessage(LadiPageScript.const.LANG.GAME_MAX_TURN_MESSAGE.format(l));
                                else {
                                    _ = !0;
                                    var i = [],
                                        r = 0,
                                        d = 1;
                                    n.forEach(function (t, e) {
                                        var a = Base64.decode(t).split("|"),
                                            n = a[0].trim(),
                                            o = a[1].trim(),
                                            s = parseFloatLadiPage(a[2].trim()) || 0;
                                        i.push({ min: d, max: d + s - 1, value: n, text: o, percent: s, index: e }), (d += s), (r += s);
                                    });
                                    for (var p = LadiPageScript.randomInt(1, r), m = null, y = 0; y < i.length; y++)
                                        if (i[y].min <= p && i[y].max >= p) {
                                            m = i[y];
                                            break;
                                        }
                                    if (LadiPageScript.isEmpty(m)) _ = !1;
                                    else {
                                        var g = parseFloatLadiPage(u.getAttribute("data-rotate")) || 0,
                                            f = m.index * (360 / i.length) + 360 * (4 + Math.ceil(g / 360)) + 180 / i.length,
                                            h = "rotate(" + f + "deg)";
                                        u.setAttribute("data-rotate", f),
                                            u.style.setProperty("transform", h),
                                            u.style.setProperty("-webkit-transform", h),
                                        "NEXT_TURN" != m.value.toUpperCase() && (c++, window.ladi("_total_turn_" + e).set_cookie(c, 1));
                                        LadiPageScript.runTimeout(function () {
                                            "NEXT_TURN" == m.value.toUpperCase()
                                                ? LadiPageScript.isEmpty(m.text) || LadiPageScript.showMessage(m.text)
                                                : (LadiPageScript.setDataReplaceStr("coupon", m.value),
                                                    LadiPageScript.setDataReplaceStr("coupon_code", m.value),
                                                    LadiPageScript.setDataReplaceStr("coupon_text", m.text),
                                                    LadiPageScript.setDataReplaceStr("spin_turn_left", l - c),
                                                    LadiPageScript.setDataReplaceElement(!0, !1, null, null, ["coupon", "coupon_code", "coupon_text", "spin_turn_left"]),
                                                    o == LadiPageScript.const.GAME_RESULT_TYPE.default ? LadiPageScript.isEmpty(s) || LadiPageScript.showMessage(s) : window.ladi(o).show(),
                                                    LadiPageScript.runEventTracking(e, !1)),
                                                (_ = !1);
                                        }, 1e3 * parseFloatLadiPage(getComputedStyle(u).transitionDuration) + 1e3);
                                    }
                                }
                        });
                    }
                }),
                (i.prototype.start = function (t) {
                    var e = document.getElementById(t);
                    if (!LadiPageScript.isEmpty(e) && e.getElementsByClassName("ladi-spin-lucky").length > 0) {
                        var i = e.getElementsByClassName("ladi-spin-lucky-start")[0];
                        LadiPageScript.isEmpty(i) || i.click();
                    }
                }),
                (i.prototype.add_turn = function (e) {
                    var i = t["option.spinlucky_setting.max_turn"],
                        n = a(e);
                    n > 0 && n--, window.ladi("_total_turn_" + e).set_cookie(n, 1), LadiPageScript.setDataReplaceStr("spin_turn_left", i - n), LadiPageScript.setDataReplaceElement(!1);
                }),
                new i()
        );
    });
(LadiPageScript.runtime.lang = "vi"),
    (LadiPageScript.const.LANG = {
        ALERT_TITLE: "Alert",
        ALERT_BUTTON_TEXT: "OK",
        COPIED: "Copied!",
        PASTED: "Pasted!",
        FALIED: "Failed!",
        OPTION_NO_SELECT: "Không chọn",
        OPTION_TRUE: "Có",
        OPTION_FALSE: "Không",
        REQUEST_SEND_ERROR: "Đã xảy ra lỗi, vui lòng thử lại!",
        FORM_LOGIN_SEND_ERROR: "Mã của bạn không đúng hoặc đã hết hạn!",
        FORM_SEND_DATA_NO_CONFIG: "Vui lòng kiểm tra lại cấu hình Form!",
        FORM_UPLOAD_FILE_MAX_SIZE_ERROR: "Bạn chỉ được upload file tổng dung lượng tối đa !::max_size::!MB.",
        FORM_UPLOAD_FILE_MAX_LENGTH_ERROR: "Bạn chỉ được upload tối đa !::max_length::! file.",
        FORM_CAPTCHA_ERROR: "Mã xác thực Captcha không đúng!",
        FORM_CAPTCHA_LOADING: "Vui lòng chờ xác thực Captcha trong giây lát!",
        FORM_THANKYOU_MESSAGE_DEFAULT: "Cảm ơn bạn đã quan tâm!",
        FORM_INPUT_REQUIRED_ERROR: "Vui lòng nhập đầy đủ các trường thông tin!",
        FORM_INPUT_EMAIL_REGEX: "Vui lòng nhập đúng định dạng email!",
        FORM_INPUT_TEXT_REGEX: "Vui lòng nhập đúng định dạng!",
        PRODUCT: "Sản phẩm",
        SERVICE: "Dịch vụ",
        TICKET: "Vé",
        ADD_TO_CART_QUANTITY_REQUIRED: "Vui lòng nhập số lượng!",
        ADD_TO_CART_NO_PRODUCT: "Không tìm thấy thông tin !::name::!, vui lòng thử lại sau!",
        ADD_TO_CART_PRODUCT_REQUIRED: "Vui lòng chọn !::name::!!",
        ADD_TO_CART_NO_QUANTITY: "!::name::! đã hết số lượng!",
        ADD_TO_CART_MAX_QUANTITY: "Bạn chỉ được mua tối đa !::max::! !::name::!.",
        ADD_TO_CART_PRODUCT_BEFORE_START_DATE: "Chưa đến thời gian mở bán !::name::!!",
        ADD_TO_CART_PRODUCT_AFTER_END_DATE: "Thời gian mua !::name::! đã hết!",
        ADD_TO_CART_PRODUCT_ONLY_ONE: "Bạn chỉ được mua 1 !::name::! cùng lúc.",
        GAME_RESULT_MESSAGE: "Chúc mừng bạn nhận được !::coupon_text::!. Nhập mã: !::coupon_code::! để sử dụng. Bạn còn !::spin_turn_left::! lượt quay.",
        GAME_MAX_TURN_MESSAGE: "Bạn đã hết lượt quay.",
        HIDE_ELEMENT: "Ẩn phần tử",
        SHOW_ELEMENT: "Hiện phần tử",
        TOP_ELEMENT: "Kéo Section lên đầu",
        SCROLL_ELEMENT: "Kéo tới Section",
        SET_COOKIE: "Thiết lập Cookie",
    });
