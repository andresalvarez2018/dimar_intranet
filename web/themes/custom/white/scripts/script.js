"use strict";


function cssInit(t, i) {
    return t += "ms", i += "ms", {
        "transition-duration": i,
        "animation-duration": i,
        "transition-timing-function": "ease",
        "transition-delay": t
    }
}

function initAnima(t) {
    ! function(i) {
        var e = i.fn.getGlobalVar("animaTimeout"),
            a = i.fn.getGlobalVar("animaTimeout_2"),
            s = i(t).attr("data-anima"),
            n = i(t).find(".anima,*[data-anima]"),
            o = i(t).attr("data-time"),
            r = i(t).attr("data-target"),
            l = i(t).attr("data-timeline"),
            c = i(t).attr("data-timeline-time"),
            d = i(t).attr("data-trigger"),
            h = i(n).length,
            m = i.fn.getGlobalVar("default_anima");
        "default" != s || isEmpty(m) || (s = m), isEmpty(c) && (c = 500), isEmpty(n) && (n = t), i(n).each(function(e) {
            if (!isEmpty(i(this).attr("data-anima")) && 0 === e) return n = t, !1
        }), isEmpty(r) || (n = i(r)), isEmpty(o) && (o = 500);
        var f = 0,
            u = 1;
        isEmpty(l) || "desc" !== l || (f = (h - 1) * c, u = -1);
        var p = null;
        i(n).each(function(m) {
            var $ = f;
            if (m === h - 1 && "desc" === l && ($ = 0), !i(this).hasClass("anima") && n != t && isEmpty(r)) p = this;
            else if (null != p && !i.contains(p, this) || null === p) {
                var g = this,
                    v = i(this).css("position");
                "absolute" != v && "fixed" != v && i(this).css("position", "relative");
                var b = Math.random(5) + "";
                i(g).attr("aid", b), e.length > 30 && (e.shift(), a.shift()), e.push([b, setTimeout(function() {
                    i(g).css(cssInit(0, 0));
                    var t = s;
                    if (!isEmpty(i(g).attr("class")) && -1 != i(g).attr("class").indexOf("anima-"))
                        for (var e = i(g).attr("class").split(" "), n = 0; n < e.length; n++) - 1 != e[n].indexOf("anima-") && (t = e[n].replace("anima-", ""));
                    i(window).width() < 768 && (isEmpty(d) || "scroll" === d || "load" === d) && (t = "fade-in"), a.push([b, setTimeout(function() {
                        i(g).css(cssInit(0, o)).addClass(t), i(g).css("opacity", "")
                    }, 100)])
                }, $)]), isEmpty(l) || (f += c * u)
            }
        }), i.fn.setGlobalVar(e, "animaTimeout"), i.fn.setGlobalVar(a, "animaTimeout_2")
    }(jQuery)
}

function outAnima(t) {
    ! function(i) {
        var e = i.fn.getGlobalVar("animaTimeout"),
            a = i.fn.getGlobalVar("animaTimeout_2"),
            s = i(t).attr("data-anima"),
            n = i(t).find(".anima,*[data-anima]"),
            o = i(t).attr("data-time"),
            r = i(t).attr("data-anima-out"),
            l = i(t).attr("data-target"),
            c = i.fn.getGlobalVar("default_anima");
        if ("default" != s || isEmpty(c) || (s = c), isEmpty(n) && (n = t), isEmpty(l) || (n = i(l)), isEmpty(o) && (o = 500), isEmpty(r) && (r = "back"), "back" == r || "hide" == r) {
            var d = null;
            i(n).each(function() {
                var r = i(this).attr("aid");
                if (!isEmpty(r)) {
                    for (m = 0; m < e.length; m++) e[m][0] == r && clearTimeout(e[m][1]);
                    for (m = 0; m < a.length; m++) a[m][0] == r && clearTimeout(a[m][1])
                }
                if (i(this).hasClass("anima") || n == t) {
                    if (null != d && !i.contains(d, this) || null == d) {
                        var l = i(this).css("position");
                        "absolute" != l && "fixed" != l && i(this).css("position", "relative");
                        var c = s;
                        try {
                            if (-1 != i(this).attr("class").indexOf("anima-"))
                                for (var h = i(this).attr("class").split(" "), m = 0; m < h.length; m++) - 1 != h[m].indexOf("anima-") && (c = h[m].replace("anima-", ""))
                        } catch (t) {}
                        i(this).css(cssInit(0, o)).removeClass(c);
                        var f = parseFloat(i(this).css("opacity"));
                        f > 0 && f < 1 && i(this).css("opacity", 1)
                    }
                } else d = this
            }), "hide" == r && (i(n).css(cssInit(0, o)).css("opacity", 0), setTimeout(function() {
                i(n).css("opacity", 0)
            }, 400))
        }
        i.fn.setGlobalVar(e, "animaTimeout"), i.fn.setGlobalVar(a, "animaTimeout_2")
    }(jQuery)
}

function setImgPos(t) {
    var i = parseInt($(t).find(".maso img").css("height"), 10),
        e = parseInt($(t).find(".maso").css("height"), 10);
    e < i && $(t).find(".maso img").css("margin-top", "-" + (i - e) / 2 + "px")
}

function getURLParameter(t) {
    return decodeURIComponent((new RegExp("[?|&]" + t + "=([^&;]+?)(&|#|;|$)").exec(location.search) || [, ""])[1].replace(/\+/g, "%20") || "")
}

function openWindow(t, i, e) {
    void 0 === i && (i = 550), void 0 === e && (e = 350);
    var a = screen.width / 2 - i / 2,
        s = screen.height / 2 - e / 2;
    return window.open(t, "targetWindow", "toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=" + i + ",height=" + e + ", top=" + s + ", left=" + a), !1
}

function onePageScroll(t) {
    isEmpty(t) || jQuery(t).find('a[href ^= "#"]').on("click", function(t) {
        t.preventDefault();
        var i = this.hash,
            e = jQuery(i);
        if (e.length > 0) {
            if (-1 === i.indexOf("collapse")) try {
                jQuery("html, body").stop().animate({
                    scrollTop: e.offset().top - 150
                }, 900, "swing", function() {
                    window.location.hash = i
                })
            } catch (t) {}
        } else "#" != i && i.length > 2 && jQuery(this).closest("header").length
    })
}

function getOptionsString(t, i) {
    for (var e = t.split(","), a = 0; a < e.length; a++) i[e[a].split(":")[0]] = correctValue(e[a].split(":")[1]);
    return i
}

function isEmpty(t) {
    return void 0 === t || null === t || !(t.length > 0 || "number" == typeof t || void 0 === t.length) || "undefined" === t
}

function correctValue(t) {
    return "number" == typeof t ? parseFloat(t) : "true" == t || "false" != t && t
}

function isScrollView(t) {
    var i = .5 * jQuery(window).height() + jQuery(window).scrollTop();
    return jQuery(t).offset().top < i + 300 || jQuery(window).scrollTop() + jQuery(window).height() == jQuery(document).height()
}
window.onload = function() {
        var t, i = document.getElementsByTagName("*");
        for (t in i) i[t].hasAttribute && i[t].hasAttribute("data-include") && function(t, i) {
            var e = /^(?:file):/,
                a = new XMLHttpRequest,
                s = 0;
            a.onreadystatechange = function() {
                4 == a.readyState && (s = a.status), e.test(location.href) && a.responseText && (s = 200), 4 == a.readyState && 200 == s && (t.outerHTML = a.responseText)
            };
            try {
                a.open("GET", i, !0), a.send()
            } catch (t) {}
        }(i[t], i[t].getAttribute("data-include"))
    },
    function($) {
        var arrFA = [],
            firstLoad = !0,
            animaTimeout = [],
            animaTimeout_2 = [],
            default_anima;
        ! function(t) {
            if ("function" == typeof define && define.amd) define(t);
            else if ("object" == typeof exports) module.exports = t();
            else {
                var i = window.Cookies,
                    e = window.Cookies = t();
                e.noConflict = function() {
                    return window.Cookies = i, e
                }
            }
        }(function() {
            function t() {
                for (var t, i, e = 0, a = {}; e < arguments.length; e++) {
                    t = arguments[e];
                    for (i in t) a[i] = t[i]
                }
                return a
            }

            function i(e) {
                function a(i, s, n) {
                    var o, r;
                    if (arguments.length > 1) {
                        "number" == typeof(n = t({
                            path: "/"
                        }, a.defaults, n)).expires && ((r = new Date).setMilliseconds(r.getMilliseconds() + 864e5 * n.expires), n.expires = r);
                        try {
                            o = JSON.stringify(s), /^[\{\[]/.test(o) && (s = o)
                        } catch (t) {}
                        return s = encodeURIComponent(String(s)), s = s.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent), i = encodeURIComponent(String(i)), i = i.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent), i = i.replace(/[\(\)]/g, escape), document.cookie = [i, "=", s, n.expires && "; expires=" + n.expires.toUTCString(), n.path && "; path=" + n.path, n.domain && "; domain=" + n.domain, n.secure ? "; secure" : ""].join("")
                    }
                    i || (o = {});
                    for (var l = document.cookie ? document.cookie.split("; ") : [], c = /(%[0-9A-Z]{2})+/g, d = 0; d < l.length; d++) {
                        var h = l[d].split("="),
                            m = h[0].replace(c, decodeURIComponent),
                            f = h.slice(1).join("=");
                        '"' === f.charAt(0) && (f = f.slice(1, -1));
                        try {
                            if (f = e && e(f, m) || f.replace(c, decodeURIComponent), this.json) try {
                                f = JSON.parse(f)
                            } catch (t) {}
                            if (i === m) {
                                o = f;
                                break
                            }
                            i || (o[m] = f)
                        } catch (t) {}
                    }
                    return o
                }
                return a.get = a.set = a, a.getJSON = function() {
                    return a.apply({
                        json: !0
                    }, [].slice.call(arguments))
                }, a.defaults = {}, a.remove = function(i, e) {
                    a(i, "", t(e, {
                        expires: -1
                    }))
                }, a.withConverter = i, a
            }
            return i()
        }), $.fn.toggleClick = function(t) {
            var i = arguments,
                e = t.guid || $.guid++,
                a = 0,
                s = function(e) {
                    var s = ($._data(this, "lastToggle" + t.guid) || 0) % a;
                    return $._data(this, "lastToggle" + t.guid, s + 1), e.preventDefault(), i[s].apply(this, arguments) || !1
                };
            for (s.guid = e; a < i.length;) i[a++].guid = e;
            return this.click(s)
        }, $.fn.showAnima = function(t, i) {
            var e = this;
            "default" === t && (t = $.fn.getGlobalVar("default_anima")), $(e).removeClass(t), isEmpty(i) || "complete" !== i ? setTimeout(function() {
                $(e).css(cssInit(0, 300)).addClass(t), $(e).css("opacity", "")
            }, 100) : ($(e).attr("data-anima", t).attr("data-trigger", "manual"), initAnima(e))
        }, $.fn.titleFullScreen = function(t) {
            if (!isEmpty(this)) {
                var i = $(this).find(".overlaybox");
                $(this).sizeFullScreen(t), "absolute" !== $("header").css("position") && "fixed" !== $("header").css("position") && $(this).css("height", $(this).height() - $("header").height() + "px"), isEmpty(i) || $(i).css("margin-top", "-" + $(i).height() / 2 - 10 + "px")
            }
        }, $.fn.sizeFullScreen = function(t) {
            isEmpty(this) || (t = $(window).outerHeight() - parseInt($(this).css("margin-top").replace("px", ""), 10) - parseInt($(this).css("margin-bottom").replace("px", ""), 10) - (isEmpty(t) ? 0 : parseInt(t, 10))) > $(this).height() && $(this).css("height", t + "px")
        }, $.fn.setMiddleBox = function(t) {
            isEmpty(t) && (t = ".box-middle");
            var i = $(this).find(t),
                e = parseInt($(this).outerHeight(), 10),
                a = parseInt($(i).outerHeight(!0), 10);
            a < e && $(i).css("margin-top", (e - a) / 2 + "px")
        }, $.fn.scrollTo = function() {
            isEmpty(this) || $("html, body").animate({
                scrollTop: $(this).offset().top - 50
            }, 1e3)
        }, $.fn.expandItem = function() {
            var t = this;
            $(t).css("display", "block").css("height", "");
            var i = $(t).height();
            $(t).css("height", 0).css("opacity", 1), $(t).animate({
                height: i
            }, 300, function() {
                $(t).css("height", "")
            })
        }, $.fn.collapseItem = function() {
            var t = this;
            $(t).animate({
                height: 0
            }, 300, function() {
                $(t).css("display", "none")
            })
        }, $.fn.setVideoBgSize = function(t, i) {
            var e = this,
                a = t,
                s = i,
                n = $(o).find("iframe").length,
                o = this;
            setTimeout(function() {
                ($(o).hasClass("section-bg-video") || $(o).hasClass("header-video")) && (e = $(o).find("video"), a = $(o).height(), s = $(o).width()), i > 992 && n && $(o).find(".videobox").css("height", "130%");
                var t = $(e).height(),
                    r = $(e).width(),
                    l = r * (a / t);
                l / r > 1 && ($(window).width() < l && t < a || $(window).width() < 769) && (i < 992 && !n && (l += 100), $(e).css("width", Math.ceil(l) + "px"), $(e).css("margin-left", "-" + Math.floor((l - s) / 2) + "px"))
            }, 300)
        }, $.fn.getHeight = function() {
            return isEmpty(this) ? 0 : $(this)[0].clientHeight
        }, $.fn.executeFunction = function(t, i) {
            var e;
            $(this).length > 0 && ("function" == typeof window.jQuery.fn[t] || "function" == typeof window[t] ? i() : e = setInterval(function() {
                "function" != typeof window.jQuery.fn[t] && "function" != typeof window[t] || (i(), clearInterval(e))
            }, 300))
        }, $.fn.getGlobalVar = function(name) {
            return eval(name)
        }, $.fn.setGlobalVar = function(t, i) {
            window[i] = t
        }, $.fn.renderLoadedImgs = function() {
            if ($.isFunction($.fn.imagesLoaded)) {
                var t, i = !1,
                    e = imagesLoaded($(this));
                $(this).hasClass("maso-box") && (i = !0, t = this), e.on("progress", function(e, a) {
                    var s = a.isLoaded ? "loaded" : "broken",
                        n = "a";
                    $(a.img).closest("ul.slides").length && (n = ".slides li"), $(a.img).closest(".img-box").length && (n = ".img-box"), $(a.img).closest(".img-box.thumbnail span img").length && (n = "span"), $(a.img).closest("figure").length && (n = "figure");
                    var o = $(a.img).closest(n),
                        r = a.img.clientHeight,
                        l = a.img.clientWidth,
                        c = 0,
                        d = 0;
                    if (isEmpty(o.get(0)) || (c = o.get(0).clientWidth, d = o.get(0).clientHeight), "loaded" == s) {
                        if (i) {
                            t.isotope("layout");
                            var h = $(a.img).closest(".maso-item");
                            $(h).css("visibility", "visible"), $(h).find("> *").animate({
                                opacity: 1
                            }, 300)
                        }
                        if (r > d) $(a.img).css("margin-top", "-" + Math.floor((r - d) / 2) + "px");
                        else {
                            var m = l * (d / r);
                            m / l > 1 && ($(a.img).css("max-width", Math.ceil(m) + "px").css("width", Math.ceil(m) + "px"), $(a.img).css("margin-left", "-" + Math.floor((m - c) / 2) + "px"))
                        }
                    }
                })
            }
        }, $.fn.initPagination = function() {
            function t(t) {
                var i = $(t).attr("data-current-page");
                isEmpty(i) && (i = 1), i++, $(t).attr("data-current-page", i);
                for (var a = e * i, r = e * (i - 1); r < e * i; r++) s.isotope("insert", n[r]);
                s.isotope("layout"), $.isFunction($.fn.renderLoadedImgs) && $(s).renderLoadedImgs(), a >= o && $(t).hide(300)
            }
            var i = $(this).attr("data-options"),
                e = ($(this).attr("data-pagination-anima"), parseInt($(this).attr("data-page-items"), 10)),
                a = $(this).closest(".maso-list"),
                s = $(a).find(".maso-box"),
                n = s.isotope("getItemElements"),
                o = $(n).length,
                r = "";
            $(this).hasClass("load-more-maso") && (r = "load-more"), $(this).hasClass("pagination-maso") && (r = "pagination");
            for (var l = e; l < o; l++) s.isotope("remove", n[l]);
            if (s.isotope("layout"), "pagination" == r) {
                var c = {
                    totalPages: Math.ceil(o / e),
                    visiblePages: 7,
                    first: "<i class='fa fa-angle-double-left'></i> <span>First</span>",
                    last: "<span>Last</span> <i class='fa fa-angle-double-right'></i>",
                    next: "<span>Next</span> <i class='fa fa-angle-right'></i>",
                    prev: " <i class='fa fa-angle-left'></i> <span>Previous</span>",
                    onPageClick: function(t, o) {
                        s.isotope("remove", s.isotope("getItemElements"));
                        for (var r = e * (o - 1); r < e * o; r++) s.isotope("insert", n[r]);
                        s.isotope("layout"), isEmpty(i) || -1 == i.indexOf("scrollTop:true") || $(a).scrollTo()
                    }
                };
                isEmpty(i) || (i.split(","), c = getOptionsString(i, c)), $(this).twbsPagination(c)
            }
            if ("load-more" == r) {
                var d = this;
                $(d).on("click", function(i) {
                    t(this)
                }), isEmpty(i) || -1 == i.indexOf("lazyLoad:true") || $(window).scroll(function() {
                    $(window).scrollTop() + $(window).height() == $(document).height() && ($.fn.getGlobalVar("firstLoad") ? setTimeout(function() {
                        t(d)
                    }, 800) : t(d))
                })
            }
        }, $.fn.initIsotope = function() {
            var t = $(this).find(".maso-box"),
                i = $(this).find(".maso-filters"),
                e = $(this).attr("data-options"),
                a = {
                    itemSelector: ".maso-item",
                    percentPosition: !0,
                    masonry: {
                        columnWidth: ".maso-item"
                    },
                    getSortData: {
                        number: function(t) {
                            return parseInt(jQuery(t).attr("data-sort"), 10)
                        }
                    },
                    sortBy: "number"
                };
            if (isEmpty(e) || (e.split(","), a = getOptionsString(e, a)), $(i).length) {
                var s = $(t).find(".maso-item").length;
                $(i).find("li a:not(.maso-filter-auto)").each(function() {
                    var i = $(t).find("." + $(this).attr("data-filter")).length;
                    i != s && 0 != i || $(this).closest("li").remove()
                })
            }
            if ($(t).isotope(a), $.isFunction($.fn.renderLoadedImgs)) {
                t.isotope("getItemElements");
                $(t).renderLoadedImgs()
            }
            $(this).find(".pagination-maso,.load-more-maso").initPagination()
        }, $.fn.showPopupBanner = function() {
            var t = this,
                i = $(t).attr("data-popup-anima");
            isEmpty(i) && (i = "fade-in"), $(t).css("opacity", 0), $(t).showAnima(i), $(t).css("display", "block")
        }, $.fn.initMagnificPopup = function() {
            var t = this,
                i = $(t).attr("data-options"),
                e = $(t).attr("data-trigger");
            isEmpty(e) && (e = "");
            var a = $(t).attr("data-lightbox-anima"),
                s = $(t).attr("href");
            isEmpty(s) && (s = "");
            var n = {
                type: "iframe"
            };
            if (isEmpty(i) || (i.split(","), n = getOptionsString(i, n)), isEmpty(n.mainClass) && (n.mainClass = ""), "load" == e || "scroll" == e) {
                var o = $(t).attr("data-link"),
                    r = $(t).attr("data-click");
                isEmpty(o) ? (s = "#" + $(this).attr("id"), n.mainClass += " custom-lightbox") : s = o, isEmpty(r) || $("body").on("click", ".lightbox-on-load", function() {
                    "_blank" == $(t).attr("data-click-target") ? window.open(r) : document.location = r
                })
            }($(t).hasClass("grid-box") || $(t).hasClass("maso-box")) && (n.type = "image", n.delegate = "a.img-box,.advs-box a:not(.img-box)", n.gallery = {
                enabled: 1
            }), -1 == s.indexOf(".jpg") && -1 == s.indexOf(".png") || (n.type = "image"), 0 == s.indexOf("#") && (n.type = "inline", n.mainClass += " box-inline", n.closeBtnInside = 0), n.callbacks = {
                open: function() {
                    var t = $(".mfp-content");
                    if (isEmpty(a) ? isEmpty(i) || -1 == i.indexOf("anima:") || ($(t).showAnima(n.anima), $(t).css("opacity", 0)) : ($(t).showAnima(a), $(t).css("opacity", 0)), 0 == s.indexOf("#") && $(s).css("display", "block"), $.isFunction($.fn.initFlexSlider)) {
                        var e = 0;
                        $(t).find(".flexslider").each(function() {
                            $(this).initFlexSlider(), e++
                        }), e && $(window).trigger("resize").trigger("scroll")
                    }
                    var o = $(t).find(".google-map");
                    $.isFunction($.fn.googleMap) && $(o).length && $(o).googleMap()
                },
                change: function(t) {
                    var i = this.content;
                    $(".mfp-container").removeClass("active"), setTimeout(function() {
                        $(".mfp-container").addClass("active")
                    }, 500), $.isFunction($.fn.initFlexSlider) && setTimeout(function() {
                        var t = 0;
                        $(i).find(".flexslider").each(function() {
                            $(this).initFlexSlider(), t++
                        }), t && $(window).trigger("resize").trigger("scroll")
                    }, 100);
                    var e = $(i).find(".google-map");
                    $.isFunction($.fn.googleMap) && $(e).length && $(e).googleMap()
                },
                close: function() {
                    $.isFunction($.fn.fullpage) && $.isFunction($.fn.fullpage.setMouseWheelScrolling) && $.fn.fullpage.setMouseWheelScrolling(!0)
                }
            }, "load" != e && "scroll" != e ? $(t).magnificPopup(n) : (0 == s.indexOf("#") && $(s).css("display", "block"), n.items = {
                src: s
            }, n.mainClass += " lightbox-on-load", $.magnificPopup.open(n))
        }, $.fn.initSlimScroll = function() {
            var t = $(window).width();
            if (!$(this).hasClass("scroll-mobile-disabled") || t > 993) {
                var i = $(this).attr("data-options"),
                    e = {
                        height: 0,
                        size: "4px"
                    };
                isEmpty(i) || (i.split(","), e = getOptionsString(i, e)), t < 993 && (e.alwaysVisible = !0);
                var a = function(t, i) {
                        var e = $(t).attr("data-height"),
                            a = $(t).attr("data-height-remove");
                        if (isEmpty(e) || "auto" == e) {
                            var s = i - $(t)[0].getBoundingClientRect().top - $("footer").outerHeight(),
                                n = $(t).outerHeight();
                            isEmpty(a) || (s = i - a), e = n < s ? n + 30 : s - 30
                        }
                        "fullscreen" == e && (s = i, e = s = !isEmpty(a) && i - a > 150 ? i - a : i - 100);
                        return e
                    }(this, $(window).height()),
                    s = $(this).attr("data-height-remove");
                isEmpty(s) && (s = 0), -1 == (a += "").indexOf("#") && -1 == a.indexOf(".") || (a = "" + ($(this).closest(a).height() - s)), e.height = a + "px", $(this).slimScroll(e);
                var n = $(this).find(".google-map");
                $.isFunction($.fn.googleMap) && $(n).length && $(n).googleMap(), e.alwaysVisible || $(".slimScrollBar").hide()
            }
        }, $.fn.restartFlexSlider = function() {
            var t = this;
            setTimeout(function() {
                $(t).removeData("flexslider"), $(t).find("li.clone").remove(), $(t).find(".flex-control-nav").remove(), $(t).initFlexSlider()
            }, 100)
        }, $.fn.initFlexSlider = function() {
            function t(t) {
                var i = $(t).find(".flex-active-slide"),
                    e = $(i).attr("data-slider-anima");
                isEmpty(e) || ($(i).attr("data-anima", e), initAnima(i))
            }
            var i, e = this,
                a = 250,
                s = $(e).attr("data-options"),
                n = {
                    animation: "slide",
                    slideshowSpeed: 6e3,
                    controlNav: !$(e).hasClass("thumb") || "thumbnails",
                    start: function() {
                        !$(e).hasClass("advanced-slider") && $.fn.renderLoadedImgs && $(e).find(".slides").renderLoadedImgs(), $(e).hasClass("carousel") && $(e).find(".slides > li").css("width", a + "px"), ($(e).hasClass("thumb") || $(e).hasClass("nav-middle")) && $(e).find(".flex-prev,.flex-next").css("top", $(e).find(".slides > li img")[0].clientHeight / 2 + "px"), $(e).find(".background-page video,.section-bg-video").each(function() {
                            $(this).setVideoBgSize($(window).height(), $(window).width())
                        }), $(e).find(".pos-slider.pos-center").each(function() {
                            $(this).css("margin-left", "-" + $(this).width() / 2 + "px")
                        }), $(e).find(".pos-slider.pos-middle").each(function() {
                            $(this).css("margin-top", "-" + $(this).height() / 2 + "px")
                        }), t(e)
                    },
                    after: function() {
                        t(e)
                    }
                };
            if (isEmpty(s) || (i = s.split(","), n = getOptionsString(s, n), -1 != s.indexOf("controlNav:false") && $(this).addClass("no-navs")), $(e).hasClass("carousel")) {
                var o = $(e).find(".slides > li"),
                    r = 110;
                $(window).width() < 993 && (r = 180);
                var l = 5,
                    c = 3,
                    d = $(e).outerWidth();
                if (!isEmpty(s))
                    for (var h = 0; h < i.length; h++) {
                        var m = i[h].split(":");
                        "minWidth" == m[0] && (r = m[1]), "itemWidth" == m[0] && (a = m[1]), "itemMargin" == m[0] && (l = m[1]), "numItems" == m[0] && (c = parseInt(m[1], 10))
                    }(a = d / c) < r && (c = 1, d / 2 > r && (c = 2), d / 3 > r && (c = 3), a = d / c), 1 == c && (l = 0), r = a = (a += l / c).toFixed(1), n.itemWidth = a, n.itemMargin = l;
                var f = Math.ceil(o.length / c);
                n.move = f > c ? c : f, o.length < c && (n.move = 0), n.numItems = c, l > 0 && $(o).css("padding-right", l + "px")
            }
            var u = $("[data-slider-anima] .anima");
            $(u).each(function() {
                $(this).css("opacity", 0)
            }), $(e).flexslider(n)
        }, $(document).ready(function() {
            function t(t) {
                var i = $(t).attr("data-menu-anima");
                isEmpty(i) && (i = "fade-in"), $(".hamburger-menu,.side-menu-fixed").css("visibility", "hidden").css("opacity", "0").removeClass(i), $(t).removeClass("active"), $("body").css("overflow", "")
            }

            function i(t) {
                var i = $(t).attr("data-menu-anima");
                isEmpty(i) && (i = "fade-in"), $(".hamburger-menu,.side-menu-fixed").css("visibility", "visible").showAnima(i), $(t).addClass("active"), "device-xs" == n && $("body").css("overflow", "hidden")
            }

            function a(t) {
                var i = $(t).closest("header"),
                    e = $(i).find(".subline-bar ul:eq(" + $(t).index() + ")");
                $(i).find(".subline-bar ul").css("display", "none"), $(e).css("opacity", "0").css("display", "block").animate({
                    opacity: 1
                }, 300)
            }

            function s() {
                $("meta[content='wordpress']").length && $(".shop-menu-cnt").length && jQuery.ajax({
                    method: "POST",
                    url: ajax_url,
                    data: {
                        action: "hc_get_wc_cart_items"
                    }
                }).done(function(t) {
                    if (!isEmpty(t) && t.length > 10) {
                        var i = JSON.parse(t);
                        if (i.length > 0) {
                            for (var e = $(".shop-menu-cnt"), a = $(e).find(".cart-total").attr("data-currency"), s = 0, n = "", o = 0; o < i.length; o++) s += i[o].price * i[o].quantity, n += "<li onclick=\"document.location = '" + i[o].link + '\'" class="cart-item"><img src="' + i[o].image + '" alt=""><div class="cart-content"><h5>' + i[o].title + '</h5><span class="cart-quantity">' + i[o].quantity + " x " + a + i[o].price + "</span></div></li>";
                            $(e).find(".shop-cart").html(n), $(e).find(".cart-total span").html(a + "" + s), $(e).removeClass("shop-menu-empty"), $(e).find("i").html('<span class="cart-count">' + i.length + "</span>")
                        }
                    }
                })
            }
            var n, o, r = $(window).width(),
                l = $(window).height();
            if (r < 993 && (n = "device-xs"), r > 992 && r < 1200 && (n = "device-m"), r > 1200 && (n = "device-l"), $("body").addClass(n), o = $(".background-page video,.section-bg-video,.header-video"), $(o).each(function() {
                    $(this).setVideoBgSize(l, r)
                }), r < 992 && $(".section-bg-video,.header-video").length && setInterval(function() {
                    o = $(".background-page video,.section-bg-video"), $(o).each(function() {
                        $(this).setVideoBgSize()
                    })
                }, 600), $("body").on("click", "[data-social]", function() {
                    var t = $(this).attr("data-social"),
                        i = $(this).attr("data-social-url"),
                        e = i;
                    isEmpty(i) && (e = window.location.href);
                    var a = "https://www.facebook.com/sharer/sharer.php?u=" + e;
                    "share-twitter" == t && (a = "https://twitter.com/intent/tweet?url="+e+"&text=" + $("meta[name=description]").attr("content"), isEmpty(i) || (a = "https://twitter.com/intent/tweet?url=" + i)), "share-google" == t && (a = "https://plus.google.com/share?url=" + e), "share-linkedin" == t && (a = "https://www.linkedin.com/shareArticle?url=" + e), openWindow(a)
                }), $(".navbar-toggle").toggleClick(function() {
                    $(this).closest(".navbar").find(".navbar-collapse").expandItem()
                }, function() {
                    $(this).closest(".navbar").find(".navbar-collapse").collapseItem(), $(".subline-bar ul").hide()
                }), $("body").on("click", "[data-toggle='dropdown']", function() {
                    var t = $(this).attr("href");
                    !isEmpty(t) && t.length > 5 && !t.startsWith("#") && (document.location = t)
                }), setTimeout(function() {
                    isEmpty($("header").attr("data-menu-height")) ? $("header.fixed-top").css("height", $("header > div").height() + "px") : $("header").css("height", $("header").attr("data-menu-height") + "px")
                }, 150), o = $(".fixed-area"), $(o).each(function(t) {
                    $(this).css("width", $(this).outerWidth() + "px");
                    var i = $(this).attr("data-topscroll");
                    isEmpty(i) && (i = $("header div").outerHeight(!0)), arrFA[t] = [$(this).offset().top, $(this).offset().left, i], $(this).closest(".section-item").css("z-index", "4").css("overflow", "visible")
                }), o = $("[data-anima]"), $(o).each(function() {
                    var t = $(this).attr("data-trigger");
                    if (isEmpty(t) || "scroll" == t || "load" == t) {
                        var i = $(this).find(".anima,*[data-anima]");
                        isEmpty(i) && (i = this);
                        var e = null,
                            a = 0;
                        $(i).each(function() {
                            $(this).hasClass("anima") || i == this ? (null != e && !$.contains(e, this) || null == e) && ($(this).css("opacity", 0), a++) : e = this
                        }), 0 == a && $(this).css("opacity", 0)
                    }
                    isEmpty(t) || "load" != t || initAnima(this)
                }), $("body").on("click", '*[data-anima]*[data-trigger="click"]', function() {
                    outAnima(this), initAnima(this)
                }), $('*[data-anima]*[data-trigger="hover"]').on("mouseenter", function() {
                    initAnima(this)
                }).mouseleave(function() {
                    $(this).stop(!0, !1), outAnima(this)
                }), $("body").on("click", ".nav > li", function() {
                    var t = $(this).closest(".nav");
                    $(t).find("li").removeClass("active").removeClass("current-active"), $(this).addClass("active current-active")
                }), "device-xs" != n && (o = $("[data-menu-anima]"), $(o).each(function() {
                    var t = $(this).closest("[data-menu-anima]").attr("data-menu-anima");
                    $(this).find("ul:not(.side-menu):first-child li").on("mouseenter", function() {
                        $(this).find(" > ul, > .mega-menu").css("opacity", 0).css("transition-duration", "0ms").showAnima(t)
                    }), $(this).find(".side-menu li").on("mouseenter", function() {
                        $(this).find(".panel").css("opacity", 0).css("transition-duration", "0ms").showAnima(t)
                    }), $(this).hasClass("side-menu-lateral") && $(this).find(".side-menu li").on("mouseenter", function() {
                        $(this).find("ul").css("opacity", 0).css("transition-duration", "0ms").showAnima(t)
                    })
                }), $("body").on("mouseenter", ".nav > li", function() {
                    $(this).closest(".nav").find("li").removeClass("open")
                })), "device-xs" == n && ($("body").on("click", ".side-menu > li.panel-item", function(t) {
                    0 == $(t.target).closest(".collapse").length && $(this).toggleClass("active")
                }), $("body").on("click", ".side-menu > li", function(i) {
                    var e = this;
                    o = $(".side-menu > li"), $(o).each(function() {
                        e !== this && ($(this).removeClass("active"), $(this).find(".collapse").removeClass("in").removeClass("open"))
                    });
                    var a = $(e).find("ul");
                    0 == $(a).length ? t($(".hamburger-button")) : $(e).hasClass("active") ? ($(e).removeClass("active"), $(a).removeClass("in").removeClass("open")) : ($(e).addClass("active"), $(a).addClass("in").addClass("open"))
                }), $("header .dropdown-toggle").attr("href", "#")), $(".side-menu-fixed").length) {
                var c = $(window).height() - ($(".side-menu-fixed .top-area").outerHeight(!0) + $(".side-menu-fixed .bottom-area").outerHeight(!0));
                $(".side-menu-fixed .sidebar").css("height", c + "px"), $(".side-menu-fixed .scroll-content").attr("data-height", c), $.isFunction($.fn.slimScroll) && $("body").on("click", ".side-menu li", function() {
                    $(".side-menu-fixed .scroll-content").slimScroll()
                })
            }
            if ($("body").on("click", ".side-menu .panel-item", function() {
                    $(this).find(".panel").toggleClass("open")
                }), $("body").on("click", ".side-menu .panel-item li", function() {
                    $(this).closest(".panel").toggleClass("open")
                }), o = $(".side-menu"), $(o).each(function() {
                    $.isFunction($.fn.metisMenu) && $(this).metisMenu()
                }), o = $(".one-page-menu,.navbar-nav.inner,.side-menu:not(#fullpage-menu)"), $(o).each(function() {
                    onePageScroll(this)
                }), $(".side-menu .panel-item").length) {
                var d = $(".side-menu-fixed").css("width");
                $(".side-menu .panel-item .panel").css("left", d)
            }
            $(".hamburger-button").toggleClick(function() {
                i(this)
            }, function() {
                $(this).hasClass("active") ? t(this) : i(this)
            }), $('a[href="#"]').on("click", function(t) {
                t.preventDefault()
            }), $("body").on("click", ".img-box .caption", function() {
                var t = $(this).closest(".img-box").find("a.img-box"),
                    i = $(t).attr("href");
                if ($(t).click(), !isEmpty(i) && i.indexOf("http") > -1) {
                    var e = t.attr("target");
                    isEmpty(e) || "_blank" != e ? document.location = i : window.open(i)
                }
            }), o = $(".grid-list[class^='row-'], .grid-list[class*=' row-'],.maso-list[class^='row-'], .maso-list[class*=' row-']"), $(o).each(function() {
                var t = $.grep(this.className.split(" "), function(t, i) {
                    return 0 === t.indexOf("row")
                }).join();
                $(this).find(".grid-item > *,.grid-item .flexslider li > *").addClass(t)
            }), $(".header-slider,.header-video,.header-title").setMiddleBox(".container > div"), $(".full-screen-title .container > div").css("margin-top", ""), o = $(".full-screen-size"), $(o).each(function() {
                var t = $(this).attr("data-sub-height");
                $(this).sizeFullScreen(isEmpty(t) ? null : t)
            }), o = $(".full-screen-title"), $(o).each(function() {
                var t = $(this).attr("data-sub-height");
                $(this).titleFullScreen(isEmpty(t) ? null : t)
            }), o = $(".box-middle-container"), $(o).each(function() {
                $(this).setMiddleBox()
            }), $(".social-group-button .social-button").toggleClick(function() {
                var t = $(this).closest(".social-group-button");
                $(t).find(".social-group").css("display", "block"), $(t).find(".social-group i").showAnima("fade-left")
            }, function() {
                var t = $(this).closest(".social-group-button");
                $(t).find(".social-group").css("display", "none"), $(t).find(".social-group i").css("opacity", "0")
            }), "device-xs" != n && (o = $(".section-two-blocks .content"), $(o).each(function() {
                var t = this;
                setTimeout(function() {
                    var i = $(t).outerHeight(),
                        e = $(t).closest(".section-two-blocks");
                    isEmpty($(e).attr("data-parallax")) && $(e).css("height", i), $(e.find(".row > div:first-child")).renderLoadedImgs()
                }, 300)
            })), $("#wpadminbar").length && ($("header").hasClass("fixed-top") && $("header > .navbar").css("margin-top", "32px"), $("header").hasClass("side-menu-header") && $("header .side-menu-fixed,header .navbar-fixed-top").css("margin-top", "32px")), o = $("header a"), $(o).each(function() {
                $(this).attr("href") == window.location.href && ($(this).closest(".dropdown-menu").length ? $(this).closest(".dropdown.multi-level:not(.dropdown-submenu),.dropdown.mega-dropdown").addClass("active") : $(this).closest("li").addClass("active"))
            }), o = $("[data-video-youtube]"), $(o).each(function() {
                var t = $(this).attr("data-video-youtube"); - 1 == t.indexOf("http:") && -1 == t.indexOf("www.you") && -1 == t.indexOf("youtu.be") || (-1 != t.indexOf("?v=") && (t = t.substring(t.indexOf("v=") + 2)), -1 != t.indexOf("youtu.be") && (t = t.substring(t.lastIndexOf("/") + 1)));
                var i = $(this).attr("data-video-quality"),
                    e = "";
                isEmpty(i) || "hc-hd" == i && (e += "&amp;vq=hd1080"), $(this).html('<iframe frameborder="0" allowfullscreen="0" src="https://www.youtube.com/embed/' + t + "?playlist=" + t + "&amp;vq=hd1080&amp;loop=1&amp;start=0&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;wmode=transparent&amp;iv_load_policy=3&amp;modestbranding=1&amp;rel=0&amp;enablejsapi=1&amp;volume=0" + e + '"></iframe>')
            }), $(".background-page iframe").length && $(".background-page iframe").css("height", $(window).height() + 300 + "px").css("width", $(window).width() + 300 + "px").css("margin-left", "-150px"), $(".btn-search").toggleClick(function() {
                $(this).closest(".search-box-menu").find(".search-box").css("opacity", 0).css("display", "block").showAnima("fade-bottom")
            }, function() {
                $(this).closest(".search-box-menu").find(".search-box").css("display", "none")
            }), $(".subline-menu > li").mouseover(function() {
                a(this)
            }), $(".subline-bar").on("mouseleave", function() {
                $(this).find("ul").css("display", "none")
            }), $("header").hasClass("fixed-top") && $(".subline-bar").css("margin-top", $("header").height() + "px"), $(".navbar-mini .form-control").focusin(function() {
                $(this).toggleClass("focus")
            }), $(".navbar-mini .form-control").focusout(function() {
                $(this).toggleClass("focus")
            }), setTimeout(function() {
                $(window).scroll()
            }, 50), $("body").on("click", ".scroll-top", function() {
                $("html, body").stop().animate({
                    scrollTop: 0
                }, "500", "swing")
            }), $("body").on("click", ".scroll-to", function(t) {
                var i = $(this).attr("data-scroll-to");
                isEmpty(i) && (i = $(this).attr("href"));
                try {
                    $(i).scrollTo()
                } catch (t) {}
                0 == i.indexOf("#") && ($(this).hasClass("btn") || $(this).hasClass("btn-text")) && t.preventDefault()
            }), $("#preloader").fadeOut(300);
            var h = $(".header-slider .container,.header-video .container,.header-title .container,.header-animation .container"),
                m = $(".header-parallax"),
                f = $(".fixed-area"),
                u = $("*[data-anima]"),
                p = 0;
            $(window).scroll(function() {
                var t = window.pageYOffset;
                $(h).css("margin-top", t / 2).css("opacity", 100 / t < 1 ? 100 / t : 1);
                var i = $(window).scrollTop(),
                    e = !0,
                    a = $(document).height();
                $(m).length && (t > $(window).outerHeight() ? $(m).css("visibility", "hidden") : $(m).css("visibility", "visible"), $(m).find(".layer-parallax").css("margin-top", -1 * t / 2)), $(f).each(function(t) {
                    arrFA.length && i > arrFA[t][0] ? $(this).css("top", arrFA[t][2] + "px").css("left", arrFA[t][1] + "px").css("position", "fixed").addClass("active") : $(this).css("top", "").css("position", "").css("left", "").removeClass("active");
                    var e = $(this).attr("data-bottom");
                    isEmpty(e) || (i + l > a - e ? p < i && $(this).animate({
                        "margin-top": "-" + e
                    }, 200) : p > i && ($(this).clearQueue(), $(this).css("margin-top", "")))
                }), i > 100 && e && (e = !1, $(".scroll-hide").addClass("hidden"), $(".scroll-change").addClass("scroll-css"), $(".scroll-show").addClass("showed"), $(".menu-transparent").removeClass("bg-transparent"), $(".scroll-top-mobile").css("opacity", 1), "device-xs" == n && $(".scroll-show-mobile").removeClass("hidden"), i + l > a - l ? $(".footer-parallax").css("opacity", 1) : $(".footer-parallax").css("opacity", 0)), i < 100 && (e = !0, $(".scroll-hide").removeClass("hidden"), $(".fp-enabled").length || $(".scroll-change").removeClass("scroll-css"), $(".scroll-show").removeClass("showed"), $(".menu-transparent").addClass("bg-transparent"), $(".scroll-top-mobile").css("opacity", 0)), $(u).each(function() {
                    var t = $(this).attr("data-trigger");
                    (isEmpty(t) || "scroll" == t) && isScrollView(this) && (isEmpty($(this).attr("data-anima")) || initAnima(this), $(this).attr("data-anima", ""))
                }), p = i
            }), s(), $("body").on("click", ".ajax_add_to_cart,.product-remove a", function() {
                setTimeout(function() {
                    s()
                }, 2e3)
            }), $(".img-box").executeFunction("imagesLoaded", function() {
                $(".img-box").each(function() {
                    $(this).renderLoadedImgs()
                })
            }), $(".maso-list").executeFunction("isotope", function() {
                setTimeout(function() {
                    $.fn.setGlobalVar(!1, "firstLoad")
                }, 1e3), $(".maso-list").each(function() {
                    "manual" != $(this).attr("data-trigger") && $(this).initIsotope()
                })
            }), $("body").on("click", ".maso-filters a", function() {
                var t = $(this).attr("data-filter"),
                    i = $(this).closest(".maso-list");
                isEmpty(t) || $(i).find(".maso-box").isotope({
                    filter: "." + $(this).attr("data-filter")
                });
                var e = $(i).find(".load-more-maso");
                e.length && setTimeout(function() {
                    var t = 0;
                    $(i).find(".maso-box .maso-item").each(function() {
                        -1 == $(this).attr("style").indexOf("display: none") && t++
                    }), parseInt($(e).attr("data-page-items")), $(i).find(".load-more-maso").click()
                }, 450), $(i).find(".maso-box .maso-item").length < 3 && $(i).find(".load-more-maso").click()
            }), $("body").on("click", ".maso-order", function() {
                var t = $(this).closest(".maso-list").find(".maso-box");
                "asc" == $(this).attr("data-sort") ? (t.isotope({
                    sortAscending: !1
                }), $(this).attr("data-sort", "desc"), $(this).html("<i class='fa fa-arrow-up'></i>")) : (t.isotope({
                    sortAscending: !0
                }), $(this).attr("data-sort", "asc"), $(this).html("data-sort"), $(this).html("<i class='fa fa-arrow-down'></i>"))
            }), $(".maso-item .advs-box").each(function() {
                $(this).css("visibility", "visible").css("opacity", "1"), $(this).find("> *").animate({
                    opacity: 1
                }, 300)
            }), $(".bootgrid-table").executeFunction("bootgrid", function() {
                $(".bootgrid-table").each(function() {
                    var t = $(this).attr("data-options"),
                        i = {
                            caseSensitive: !1,
                            formatters: {
                                image: function(t, i) {
                                    var e, a, s = i[t.id];
                                    return s.split(",").length > 1 ? (e = s.split(",")[0], a = s.split(",")[1]) : e = a = s, '<a class="lightbox" href="' + e + '"><img src="' + a + '"></a>'
                                },
                                button: function(t, i) {
                                    var e = i[t.id];
                                    return '<a href="' + e.split(",")[1] + '" class="btn btn-default btn-xs">' + e.split(",")[0] + "</a>"
                                },
                                link: function(t, i) {
                                    var e = i[t.id];
                                    return '<a href="' + e.split(",")[1] + '" class="link">' + e.split(",")[0] + "</a>"
                                },
                                "link-icon": function(t, i) {
                                    var e = i[t.id];
                                    return '<a target="_blank" href="' + e.split(",")[1] + '" class="link"><i class="fa ' + e.split(",")[0] + '"></i></a>'
                                }
                            }
                        };
                    isEmpty(t) || (t.split(","), i = getOptionsString(t, i)), $(this).bootgrid(i).on("loaded.rs.jquery.bootgrid", function(t) {
                        $.isFunction($.fn.magnificPopup) && $(this).find("a.lightbox").magnificPopup({
                            type: "image"
                        })
                    })
                })
            }), $(".coverflow-slider").executeFunction("flipster", function() {
                $(".coverflow-slider").each(function() {
                    if ("manual" != $(this).attr("data-trigger")) {
                        var t = $(this).attr("data-width"),
                            i = $(this).attr("data-mobile-width");
                        $(window).width() < 768 && !isEmpty(i) && (t = i);
                        var e = {},
                            a = $(this).attr("data-options");
                        isEmpty(a) || (e = getOptionsString(a, e)), isEmpty(t) || $(this).find("ul > li").css("width", t + "%"), $(this).flipster(e)
                    }
                })
            }), $("body").on("click", ".coverflow-slider .coverflow-lightbox", function() {
                var t = $(this).closest(".flip-item");
                $(t).hasClass("flip-current") && ($.magnificPopup.open({
                    items: {
                        src: $(this).attr("href")
                    },
                    type: $(this).hasClass("mfp-iframe") ? "iframe" : "image"
                }), e.preventDefault())
            }), $(".grid-list.gallery .grid-box,.maso-list.gallery .maso-box, .lightbox,.box-lightbox,.popup-banner,.popup-trigger,.lightbox-trigger,.woocommerce-product-gallery__image a").executeFunction("magnificPopup", function() {
                $(".grid-list.gallery .grid-box,.maso-list.gallery .maso-box,.lightbox,.woocommerce-product-gallery__image a").each(function() {
                    $(this).initMagnificPopup()
                }), $('*[data-trigger="load"].popup-banner').each(function() {
                    var t = $(this).attr("data-expire");
                    if (!isEmpty(t) && t > 0) {
                        var i = $(this).attr("id");
                        isEmpty(Cookies.get(i)) && ($(this).showPopupBanner(), Cookies.set(i, "expiration-cookie", {
                            expire: t
                        }))
                    } else $(this).showPopupBanner()
                }), $(".popup-trigger").on("click", function() {
                    $($(this).attr("href")).showPopupBanner()
                }), $(".popup-banner [data-click]").each(function() {
                    var t = this,
                        i = $(t).attr("data-click");
                    isEmpty(i) || $("body").on("click", $(t).attr("data-click-trigger"), function() {
                        "_blank" == $(t).attr("data-click-target") ? window.open(i) : document.location = i
                    })
                }), $(window).scroll(function(t) {
                    $('*[data-trigger="scroll"].popup-trigger').each(function() {
                        if (isScrollView(this)) {
                            var t = $(this).attr("href"),
                                i = $(t).attr("data-popup-anima");
                            isEmpty(i) || ($(t).css("opacity", 0), $(t).showAnima(i)), $(t).css("display", "block"), $(this).removeClass("popup-trigger")
                        }
                    }), $('*[data-trigger="scroll"].lightbox-trigger').each(function() {
                        isScrollView(this) && ($($(this).attr("href")).initMagnificPopup(), $(this).attr("data-trigger", "null"))
                    })
                });
                var t = getURLParameter("lightbox"),
                    i = getURLParameter("id");
                if (isEmpty(i) || (i = "#" + i + " "), !isEmpty(t))
                    if (t.indexOf("list") > -1) $(i + ".grid-box .grid-item:nth-child(" + t.replace("list-", "") + ") .img-box").click(), $(i + ".maso-box .maso-item:nth-child(" + t.replace("list-", "") + ") .img-box").click();
                    else if (t.indexOf("slide") > -1) $(i + ".slides > li:nth-child(" + t.replace("slide-", "") + ") .img-box").click();
                else {
                    var e = $("#" + t);
                    if ($(e).length)
                        if ($(e).hasClass(".img-box") || $(e).hasClass(".lightbox")) $(e).click();
                        else {
                            var a = $(e).find(".img-box,.lightbox");
                            a.length ? $(a).click() : $(e).hasClass("box-lightbox") && $.magnificPopup.open({
                                type: "inline",
                                items: {
                                    src: "#" + t
                                },
                                mainClass: "lightbox-on-load"
                            })
                        }
                }
            }), $("body").on("click", ".popup-close", function() {
                $(this).closest(".popup-banner").hide()
            }), $('[data-trigger="load"].box-lightbox').each(function() {
                var t = $(this).attr("data-expire");
                if (!isEmpty(t) && t > 0) {
                    var i = $(this).attr("id");
                    isEmpty(Cookies.get(i)) && ($(this).initMagnificPopup(), Cookies.set(i, "expiration-cookie", {
                        expire: t
                    }))
                } else $(this).initMagnificPopup()
            }), $(".scroll-content").executeFunction("slimScroll", function() {
                $(".scroll-content").each(function() {
                    $(this).initSlimScroll(), $(window).width() < 993 && $(".slimScrollBar").css("height", "50px")
                }), $(".scroll-content").on("mousewheel DOMMouseScroll", function(t) {
                    t.preventDefault()
                })
            }), $(".section-bg-animation,.header-animation").executeFunction("pan", function() {
                $(".header-animation .overlay.center").each(function() {
                    $(this).css("margin-left", "-" + $(this).width() / 2 + "px")
                });
                var t = $(".section-bg-animation,.header-animation").find("img.overlay");
                $("#anima-layer-a").pan({
                    fps: 30,
                    speed: .7,
                    dir: "left",
                    depth: 30
                }), $("#anima-layer-b").pan({
                    fps: 30,
                    speed: 1.2,
                    dir: "left",
                    depth: 70
                }), $(window).scroll(function() {
                    var i = window.pageYOffset;
                    $(t).css("opacity", 100 / i < 1 ? 100 / i : 1)
                })
            }), $("[data-parallax]").executeFunction("parallax", function() {
                $("[data-parallax]").each(function() {
                    var t = $(this).attr("data-bleed");
                    isEmpty(t) && (t = 70), $(this).parallax({
                        bleed: t,
                        positionY: "center"
                    })
                }), $(".section-bg-image,.section-bg-animation,[data-parallax].header-title").each(function(t) {
                    var i = "";
                    $(this).hasClass("ken-burn") && (i = "ken-burn"), $(this).hasClass("ken-burn-out") && (i = "ken-burn-out"), $(this).hasClass("ken-burn-center") && (i = "ken-burn-center"), $(this).hasClass("parallax-side") && (i += " parallax-side-cnt"), i.length > 0 && setTimeout(function() {
                        $(".parallax-mirror:eq(" + (t - 1) + ")").addClass(i)
                    }, 100)
                });
                var t, i = 0,
                    e = $("html").hasClass("fp-enabled");
                if (t = self.setInterval(function() {
                        i > 30 ? clearInterval(t) : e || $(window).trigger("resize").trigger("scroll"), i += 1
                    }, 100), $(".section-bg-animation,.header-animation").length) {
                    var a = $(".section-bg-animation,.header-animation"),
                        s = $(a).find(".anima-layer");
                    $(window).scroll(function() {
                        var t = window.pageYOffset - (a.offset().top - a.getHeight() / 4);
                        $(s).css("margin-top", t / 1.5)
                    })
                }
                $("[data-parallax]").length && setInterval(function() {
                    $(window).trigger("resize").trigger("scroll")
                }, 400)
            }), $(".flexslider").executeFunction("flexslider", function() {
                $(".flexslider.slider,.flexslider.carousel").each(function() {
                    "manual" != $(this).attr("data-trigger") && $(this).initFlexSlider()
                }), $(".list-full-screen li").css("height", $(".list-full-screen ").height() - 10)
            })
        });


$(document).ready(function () {
    var complemento = "/intranet";
    var url = window.location.origin + complemento;
    $("img").each(function(key, item){
        if($(item).attr("src") != undefined){
            if($(item).attr("src").indexOf("/sites/") == 0){
                var imagen = $(item).attr("src");
                $(item).attr("src", url + imagen);
            }
        }
    });

    $("a").each(function(key, item){
        if($(item).attr("href") != undefined){
            if($(item).attr("href").indexOf("/sites/") === 0){
                var a = $(item).attr("href");
                $(item).attr("href", url + a);
            }
        }
    });
});

}(jQuery);
