!function(e,t){function r(e){return e in w||(w[e]=new RegExp("(^|\\s+)"+e+"(\\s+|$)","")),w[e]}function o(e,t){return r(t).test(e.className||"")}function n(e,t){o(e,t)||(e.className+=" "+t)}function i(e,t){e&&(e.className=e.className.replace(new RegExp("((?:^|\\s+)"+t+"|"+t+"(?:\\s+|$))","g"),""))}function a(e,t){var r=e;do if(o(r,t))return r;while(r=r.parentNode);return null}function s(e,t){var r=e.relatedTarget;try{for(;r&&r!==t;)r=r.parentNode;if(r!==t)return!0}catch(o){}}function c(e){try{e.preventDefault()}catch(t){e.returnValue=!1}}function b(){var e=function(e){e=e.toLowerCase();var t=/(webkit)[ \/]([\w.]+)/.exec(e)||/(opera)(?:.*version)?[ \/]([\w.]+)/.exec(e)||/(msie) ([\w.]+)/.exec(e)||!/compatible/.test(e)&&/(mozilla)(?:.*? rv:([\w.]+))?/.exec(e)||[];return{browser:t[1]||"",version:t[2]||"0"}}(navigator.userAgent),r='.b-share-form-button{font:86%/17px Verdana,Arial,sans-serif;display:-moz-inline-box;display:inline-block;position:relative;height:19px;margin:0 3px;padding:0 4px;cursor:default;white-space:nowrap;text-decoration:none!important;color:#000!important;border:none;outline:none;background:url("//yastatic.net/share/static/b-share-form-button.png") 0 -20px repeat-x}.b-share-form-button:link:hover,.b-share-form-button:visited:hover{color:#000!important}.b-share-form-button__before,.b-share-form-button__after{position:absolute;width:3px;height:19px;background:url("//yastatic.net/share/static/b-share-form-button.png")}.b-share-form-button__before{margin-left:-7px}.b-share-form-button__after{margin-left:4px;background-position:-3px 0}.b-share-form-button::-moz-focus-inner{border:none}button.b-share-form-button .b-share-form-button__before,button.b-share-form-button .b-share-form-button__after{margin-top:-1px}@-moz-document url-prefix(){button.b-share-form-button .b-share-form-button__after{margin-top:-2px;margin-left:6px}button.b-share-form-button .b-share-form-button__before{margin-top:-2px;margin-left:-9px}}SPAN.b-share-form-button:hover,.b-share-form-button_state_hover{background-position:0 -60px}SPAN.b-share-form-button:hover .b-share-form-button__before,.b-share-form-button_state_hover .b-share-form-button__before{background-position:0 -40px}SPAN.b-share-form-button:hover .b-share-form-button__after,.b-share-form-button_state_hover .b-share-form-button__after{background-position:-3px -40px}.b-share-form-button_state_pressed,.b-share-form-button_state_pressed .b-share-form-button_share{background-position:0 -100px!important}.b-share-form-button_state_pressed .b-share-form-button__before{background-position:0 -80px!important}.b-share-form-button_state_pressed .b-share-form-button__after{background-position:-3px -80px!important}button.b-share-form-button_state_pressed{overflow:visible}.b-share-form-button_icons{position:relative;padding:0;background-position:0 -20px!important}.b-share-form-button_icons .b-share-form-button__before{left:0;margin-left:-3px;background-position:0 0!important}.b-share-form-button_icons .b-share-form-button__after{z-index:-1;margin-left:0;background-position:-3px 0!important}.b-share-form-button_icons .b-share__handle{padding:2px!important}.b-share-form-button_icons .b-share__handle_more{position:relative;padding-right:6px!important;margin-right:-4px}.b-share-form-button_icons .b-share-icon{opacity:.5;background-image:url("//yastatic.net/share/static/b-share-icon_size_14.png")}.b-share-form-button_icons A.b-share__handle:hover .b-share-icon{opacity:1}.b-share{font:86%/1.4545em Arial,sans-serif;display:-moz-inline-box;display:inline-block;padding:1px 3px 1px 4px!important;vertical-align:middle}.b-share .b-share-form-button{font-size:1em}.b-share__text .b-share-icon{margin:0 5px 0 0;border:none}.b-share__text{margin-right:5px}.b-share__handle{float:left;height:16px;padding:5px 3px 5px 2px!important;cursor:pointer;text-align:left;text-decoration:none!important}.b-share__handle_cursor_default{cursor:default}.b-share__handle .b-share-form-button{margin-top:-2px}.b-share__hr{display:none;float:left;width:1px;height:26px;margin:0 3px 0 2px}a.b-share__handle:hover .b-share__text{text-decoration:underline;color:red}.b-share_bordered{padding:0 2px 0 3px!important;border:1px solid #E4E4E4;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px}.b-share_bordered .b-share__hr{display:inline;background:#E4E4E4}.b-share_link{margin:-8px 0}a.b-share_link{margin:0}.b-share_link .b-share__text{text-decoration:underline;color:#1A3DC1}.b-share-form-button_share{padding-left:26px!important;vertical-align:top}.b-share-form-button_share .b-share-form-button__before{margin-left:-29px}.b-share-form-button_share .b-share-form-button__icon{position:absolute;width:20px;height:17px;margin:1px 0 0 -23px;background:url("//yastatic.net/share/static/b-share-form-button_share__icon.png") 0 0 no-repeat}.b-share-pseudo-link{border-bottom:1px dotted;cursor:pointer;text-decoration:none!important}.b-share_font_fixed{font-size:11px}.b-share__handle_more{font-size:9px;margin-top:-1px;color:#7B7B7B}A.b-share__handle_more:hover{color:#000}.b-share__group{float:left}.b-share-icon{float:left;display:inline;overflow:hidden;width:16px;height:16px;padding:0!important;vertical-align:top;border:0;background:url("//yastatic.net/share/static/b-share-icon.png") 0 99px no-repeat}.b-share-icon_vkontakte,.b-share-icon_custom{background-position:0 0}.b-share-icon_yaru,.b-share-icon_yaru_photo,.b-share-icon_yaru_wishlist{background-position:0 -17px}.b-share-icon_lj{background-position:0 -34px}.b-share-icon_twitter{background-position:0 -51px}.b-share-icon_facebook{background-position:0 -68px}.b-share-icon_moimir{background-position:0 -85px}.b-share-icon_friendfeed{background-position:0 -102px}.b-share-icon_mail{background-position:0 -119px}.b-share-icon_html{background-position:0 -136px}.b-share-icon_postcard{background-position:0 -153px}.b-share-icon_odnoklassniki{background-position:0 -170px}.b-share-icon_blogger{background-position:0 -187px}.b-share-icon_delicious{background-position:0 -221px}.b-share-icon_gbuzz{background-position:0 -238px}.b-share-icon_linkedin{background-position:0 -255px}.b-share-icon_myspace{background-position:0 -272px}.b-share-icon_evernote{background-position:0 -289px}.b-share-icon_digg{background-position:0 -306px}.b-share-icon_juick{background-position:0 -324px}.b-share-icon_moikrug{background-position:0 -341px}.b-share-icon_yazakladki{background-position:0 -358px}.b-share-icon_liveinternet{background-position:0 -375px}.b-share-icon_tutby{background-position:0 -392px}.b-share-icon_diary{background-position:0 -409px}.b-share-icon_gplus{background-position:0 -426px}.b-share-icon_pocket{background-position:0 -443px}.b-share-icon_surfingbird{background-position:0 -460px}.b-share-icon_pinterest{background-position:0 -477px}.b-share-icon_renren{background-position:0 0}.b-share-icon_renren,.b-share-icon_sina_weibo{background:url("//yastatic.net/share/static/b-share-icon__china.png") no-repeat}.b-share-icon_sina_weibo{background-position:-18px 0}.b-share-icon_qzone{background-position:-36px 0}.b-share-icon_qzone,.b-share-icon_tencent_weibo{background:url("//yastatic.net/share/static/b-share-icon__china.png") no-repeat}.b-share-icon_tencent_weibo{background-position:-54px 0}.b-share_theme_counter .b-share{display:inline-block;vertical-align:middle;white-space:nowrap}.b-share-counter{font:14px Arial,sans-serif;line-height:18px;display:none;float:left;margin:3px 6px 3px 3px;color:#fff}.b-share_theme_counter .b-share_type_small .b-share-counter{font-size:11px;line-height:14px;margin:2px 6px 2px 1px}.b-share_theme_counter .b-share-btn__counter .b-share-counter{display:block}.b-share-btn__counter{text-decoration:none}.b-share_theme_counter .b-share-btn__wrap{position:relative;float:left;margin-left:5px}.b-share_theme_counter .b-share_type_small .b-share-btn__wrap{margin-left:4px}.b-share_theme_counter .b-share-btn__wrap:first-child{margin-left:0}.b-share_theme_counter .b-share__link{display:inline-block;cursor:pointer;-webkit-border-radius:3px;border-radius:3px}.b-share_theme_counter .b-share_type_small .b-share__link{-webkit-border-radius:2px;border-radius:2px}.b-share_theme_counter .b-share-icon{display:block;float:left;width:24px;height:24px;background-image:url("//yastatic.net/share/static/b-share_counter_large.png");background-position:-20px 0}.b-share_theme_counter .b-share_type_small .b-share-icon{width:18px;height:18px;background-image:url("//yastatic.net/share/static/b-share_counter_small.png")}.b-share_theme_counter .b-share-icon_facebook{background-position:0 0}.b-share_theme_counter .b-share-btn__facebook{background-color:#3c5a98}.b-share_theme_counter .b-share-btn__facebook:hover{background-color:#30487a}.b-share_theme_counter .b-share-btn__facebook:active{border-top:2px solid #24365a;background-color:#334d81}.b-share_theme_counter .b-share-icon_moimir{background-position:0 -29px}.b-share_theme_counter .b-share-btn__moimir{background-color:#226eb7}.b-share_theme_counter .b-share-btn__moimir:hover{background-color:#1b5892}.b-share_theme_counter .b-share-btn__moimir:active{border-top:2px solid #14426d;background-color:#1d5e9c}.b-share_theme_counter .b-share-icon_vkontakte{background-position:0 -58px}.b-share_theme_counter .b-share-btn__vkontakte{background-color:#48729e}.b-share_theme_counter .b-share-btn__vkontakte:hover{background-color:#3a5b7e}.b-share_theme_counter .b-share-btn__vkontakte:active{border-top:2px solid #2b445e;background-color:#3d6186}.b-share_theme_counter .b-share-icon_twitter{background-position:0 -87px}.b-share_theme_counter .b-share-btn__twitter{background-color:#00aced}.b-share_theme_counter .b-share-btn__twitter:hover{background-color:#008abe}.b-share_theme_counter .b-share-btn__twitter:active{border-top:2px solid #00668d;background-color:#0092ca}.b-share_theme_counter .b-share-icon_odnoklassniki{background-position:0 -116px}.b-share_theme_counter .b-share-btn__odnoklassniki{background-color:#ff9f4d}.b-share_theme_counter .b-share-btn__odnoklassniki:hover{background-color:#cc7f3e}.b-share_theme_counter .b-share-btn__odnoklassniki:active{border-top:2px solid #975e2e;background-color:#d98742}.b-share_theme_counter .b-share-icon_gplus{background-position:0 -145px}.b-share_theme_counter .b-share-btn__gplus{background-color:#c25234}.b-share_theme_counter .b-share-btn__gplus:hover{background-color:#9b422a}.b-share_theme_counter .b-share-btn__gplus:active{border-top:2px solid #73311f;background-color:#a5462c}.b-share_theme_counter .b-share-icon_yaru{background-position:0 -174px}.b-share_theme_counter .b-share-btn__yaru{background-color:#d83933}.b-share_theme_counter .b-share-btn__yaru:hover{background-color:#ad2e29}.b-share_theme_counter .b-share-btn__yaru:active{border-top:2px solid #80221e;background-color:#b8312b}.b-share_theme_counter .b-share-icon_pinterest{background-position:0 -203px}.b-share_theme_counter .b-share-btn__pinterest{background-color:#cd1e27}.b-share_theme_counter .b-share-btn__pinterest:hover{background-color:#a4181f}.b-share_theme_counter .b-share-btn__pinterest:active{border-top:2px solid #7b1217;background-color:#ae1921}.b-share_theme_counter .b-share__link:active{height:22px}.b-share_theme_counter .b-share_type_small .b-share__link:active{height:16px}.b-share_theme_counter .b-share__link:active .b-share-icon,.b-share_theme_counter .b-share__link:active .b-share-counter{position:relative;top:-1px}.b-share_theme_counter .b-share__link::after{position:absolute;top:0;right:0;bottom:0;left:0;content:"";background-image:url(data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==)}.b-share_theme_counter .b-share__handle{height:auto;padding:0!important}',o='.b-share-popup__i,.b-share-popup__icon,.b-share-popup__main,.b-share-popup_full .b-share-popup__extra{zoom:1;display:inline}.b-share-popup_to-left{left:0}.b-share-popup_to-right .b-share-popup__expander{direction:ltr}.b-share-popup_to-right .b-share-popup__expander .b-share-popup__item{direction:rtl}.b-share-popup__icon{margin-top:-1px}.b-share-popup__icon_input{margin-top:-4px}.b-share-popup__icon__input{width:14px}.b-share-popup__spacer{overflow:hidden;font:1px/1 Arial}.b-share-popup__input__input{width:100px;direction:ltr}.b-share-popup_full .b-share-popup__input_link .b-share-popup__input__input,.b-share-popup_full .b-share-popup__form .b-share-popup__input__input{width:200px}.b-share-popup-wrap{margin-bottom:25px}.b-share-popup__form{direction:ltr}.b-share-popup__form__button,.b-share-popup__form__close,.b-share-popup__form__link{float:none;display:inline-block}.b-share-popup_full .b-share-popup__form__close{margin-left:70px}* HTML .b-share-popup_up .b-share-popup__tail{overflow:hidden;bottom:-10px}* html .b-share-form-button{text-decoration:none!important}.b-share-form-button{position:relative;overflow:visible}.b-share-form-button__before,.b-share-form-button__after{top:0}button.b-share-form-button .b-share-form-button__before,button.b-share-form-button .b-share-form-button__after{margin-top:auto}.b-share-form-button__icon{top:0}.b-share{zoom:1;display:inline}* HTML .b-share-form-button_share .b-share-form-button__icon{margin-top:-1px;background-image:url("//yastatic.net/share/static/b-share-form-button_share__icon.gif")}',n=document.createElement("style");n.type="text/css",n.id="ya_share_style",n.styleSheet?n.styleSheet.cssText="msie"===e.browser&&(e.version<8||t.documentMode<8)?r+o:r:n.appendChild(t.createTextNode(r)),r=o="",F.appendChild(n),b=function(){}}function l(r,o){if(b(),!r||!r.element)throw new Error("Invalid parameters");var i=r.element;if("string"==typeof i?i=t.getElementById(i):1===!i.nodeType&&(i=null),i&&!i.yashareInited){i.yashareInited=!0;var a={};r.style&&(a.type=r.style.button===!1?"link":"button",a.linkUnderline=r.style.link,a.border=r.style.border,a.linkIcon=r.style.icon);var s=r.l10n,c=(r.link||e.location)+"",l=r.elementStyle||a||{type:"button"},u=l.quickServices||r.services||["|","vkontakte","odnoklassniki","twitter","facebook","moimir","lj"],d=r.title||t.title,h=r.serviceSpecific||r.override||{};if("ya-share-"+Math.random()+"-"+ +new Date,!/(?:moikrug\.ru|ya\.ru|yandex\.by|yandex\.com|yandex\.com\.tr|yandex\.kz|yandex\.net|yandex\.ru|yandex\.ua|yandex-team\.ru)$/.test(location.hostname),r.servicesDeclaration,!(s&&s in j))switch(s=location.hostname.split(".").splice(-1,1)[0]){case"by":s="be";break;case"kz":s="kk";break;case"ua":s="uk";break;default:s="ru"}if("counter"==r.theme){var _,m,k,y=['<span class="b-share'+("small"==l.type?" b-share_type_small":"")+'">'];for(_=0,m=u.length;m>_;_++)k=u[_],y.push(g({serviceName:k,serviceTitle:p(k,"serviceTitle","",h),link:p(k,"link",c,h),title:p(k,"title",d,h),description:p(k,"description",r.description||"",h),image:p(k,"image",r.image||"",h),lang:s}));window.postMessage&&y.push('<iframe style="display: none" src="'+P+"/ya-share-cnt.html?url="+encodeURIComponent(c)+"&services="+u.join(",")+'"></iframe>'),S(e,"message",o.onMessage),i.setAttribute("data-yasharelink",i.getAttribute("data-yasharelink")||c)}return i.innerHTML=y.join(""),r.theme&&n(i,"b-share_theme_"+r.theme.replace(/\"/g,"")),f(i,o,"","none"===l.type),[i]}}function u(e){var r=t.createElement("script");r.setAttribute("src",location.protocol+"//clck.yandex.ru/jclck/dtype=stred/pid=52/cid=70685/path="+e+"/rnd="+Math.round(1e5*Math.random())+"/*"+encodeURIComponent(location.href)),F.appendChild(r)}function p(e,t,r,o){var n=r,i=o[e];return i&&t in i&&(n=i[t]),"description"==t||"image"==t||"serviceTitle"==t?n:B(n)}function d(e,t){var r=(j[t][e],""),o="";return r+=e,'<span class="b-share-icon b-share-icon_'+r+'"'+o+"></span>"}function h(e,t){return j[t]&&j[t][e]||""}function _(e,t,r,o,n){n=n?B(n):"",o=o?B(o):"";var i=C+"/go.xml?service="+e;return i+"&amp;url="+t+"&amp;title="+r+(o?"&amp;description="+o:"")+(n?"&amp;image="+n:"")}function g(e,t,r,o,n){var i,a="ru";if(1==arguments.length&&"object"==typeof arguments[0]){var s=arguments[0];i=s.serviceTitle,e=s.serviceName,t=s.link,r=s.title,o=s.description,n=s.image,a=s.lang||a}return"pinterest"!=e||n?e in j[a]?'<span class="b-share-btn__wrap"><a rel="nofollow" target="_blank" title="'+(i||h(e,a))+'" class="b-share__handle b-share__link b-share-btn__'+e+'" href="'+_(e,t,r,o,n)+'" data-service="'+e+'">'+d(e,a)+'<span class="b-share-counter"></span></a></span>':"|"==e?'<span class="b-share__hr"></span>':void 0:""}function f(e,t){var r,o=0,n=y(e,"b-share__handle"),i=n.length,a=i;for(r=a;r>o;o++)S(n[o],"click",t.onshare)}function m(e){var t,r,o;if((t=e.currentTarget)||(o=e.target||e.srcElement,(t=a(o,"b-share__handle"))||(t=a(o,"b-share-popup__item"))),t&&(r=t.getAttribute("data-service")))switch(u(r),r){case"facebook":k(e,t,800,520);break;case"moimir":k(e,t,560,400);break;case"twitter":k(e,t,650,520);break;case"vkontakte":k(e,t,550,420);break;case"odnoklassniki":k(e,t,560,370);break;case"gplus":k(e,t,560,370);break;case"surfingbird":k(e,t,500,170)}return r}function k(e,t,r,o){c(e),window.open(t.href,"yashare_popup","scrollbars=1,resizable=1,menubar=0,toolbar=0,status=0,left="+(screen.width-r)/2+",top="+(screen.height-o)/2+",width="+r+",height="+o).focus()}var y,v,x=t.documentElement,w={},z=y=function(e,r){e=e||t;for(var n=e[E]&&e[E]("*"),i=[],a=0,s=n.length;s>a;a++)o(n[a],r)&&i.push(n[a]);return i};t.querySelectorAll?y=function(e,t){return e.querySelectorAll("."+t)}:t.getElementsByClassName&&(y=function(e,t){return e.getElementsByClassName?e.getElementsByClassName(t):z(e,t)}),v=e.innerHeight?function(){return{width:e.innerWidth,height:e.innerHeight}}:x&&x.clientHeight?function(){return{width:x.clientWidth,height:x.clientHeight}}:function(){var e=t.body;return{width:e.clientWidth,height:e.clientHeight}};var T,L,S=t.addEventListener?function(e,t,r){e.addEventListener(t,r,!1)}:function(e,t,r){e.attachEvent("on"+t,r)};t.removeEventListener?function(e,t,r){e.removeEventListener(t,r,!1)}:function(e,t,r){e.detachEvent("on"+t,r)},"onmouseenter"in x?(T=function(e,t){S(e,"mouseenter",t)},L=function(e,t){S(e,"mouseleave",t)}):(T=function(e,t){S(e,"mouseover",function(e){s(e,this)&&t(e)})},L=function(e,t){S(e,"mouseout",function(e){s(e,this)&&t(e)})});var A=(function(e,t){function r(e,t,r){var o,n=e.style;if(!r&&n&&n[t])o=n[t];else if(a){t=t.replace(s,"-$1").toLowerCase();var i=e.ownerDocument.defaultView;if(!i)return null;var p=i.getComputedStyle(e,null);p&&(o=p.getPropertyValue(t))}else if(e.currentStyle){var d=t.replace(c,b);if(o=e.currentStyle[t]||e.currentStyle[d],!l.test(o)&&u.test(o)){var h=n.left,_=e.runtimeStyle.left;e.runtimeStyle.left=e.currentStyle.left,n.left="fontSize"===d?"1em":o||0,o=n.pixelLeft+"px",n.left=h,e.runtimeStyle.left=_}}return o}function o(){var e=t.createElement("div");e.style.width=e.style.paddingLeft="1px",t.body.appendChild(e),i.boxModel=2===e.offsetWidth,t.body.removeChild(e).style.display="none",e=null,o=p}function n(){var e,a,s,c,b=t.body,l=t.createElement("div"),u=parseFloat(r(b,"marginTop",!0),10)||0,d="<div style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;'><div></div></div><table style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>";l.style.cssText="position:absolute;top:0;lefto:0;margin:0;border:0;width:1px;height:1px;visibility:hidden;",l.innerHTML=d,b.insertBefore(l,b.firstChild),e=l.firstChild,a=e.firstChild,c=e.nextSibling.firstChild.firstChild,i.doesNotAddBorder=5!==a.offsetTop,i.doesAddBorderForTableAndCells=5===c.offsetTop,a.style.position="fixed",a.style.top="20px",i.supportsFixedPosition=20===a.offsetTop||15===a.offsetTop,a.style.position=a.style.top="",e.style.overflow="hidden",e.style.position="relative",i.subtractsBorderForOverflowNotVisible=-5===a.offsetTop,i.doesNotIncludeMarginInBodyOffset=b.offsetTop!==u,b.removeChild(l),b=l=e=a=s=c=null,o(),n=p}var i={boxModel:null},a=t.defaultView&&t.defaultView.getComputedStyle,s=/([A-Z])/g,c=/-([a-z])/gi,b=function(e,t){return t.toUpperCase()},l=/^-?\d+(?:px)?$/i,u=/^-?\d/,p=function(){};return"getBoundingClientRect"in x?function(t){if(!t||!t.ownerDocument)return null;o();var r=t.getBoundingClientRect(),n=t.ownerDocument,a=n.body,s=(x.clientTop||a.clientTop||0)+(parseInt(a.style.marginTop,10)||0),c=(x.clientLeft||a.clientLeft||0)+(parseInt(a.style.marginLeft,10)||0),b=r.top+(e.pageYOffset||i.boxModel&&x.scrollTop||a.scrollTop)-s,l=r.left+(e.pageXOffset||i.boxModel&&x.scrollLeft||a.scrollLeft)-c;return{top:b,left:l}}:function(e){if(!e||!e.ownerDocument)return null;n();for(var t,r=e.offsetParent,o=e,a=e.ownerDocument,s=a.body,c=a.defaultView,b=c?c.getComputedStyle(e,null):e.currentStyle,l=e.offsetTop,u=e.offsetLeft;(e=e.parentNode)&&e!==s&&e!==x&&(!i.supportsFixedPosition||"fixed"!==b.position);)t=c?c.getComputedStyle(e,null):e.currentStyle,l-=e.scrollTop,u-=e.scrollLeft,e===r&&(l+=e.offsetTop,u+=e.offsetLeft,!i.doesNotAddBorder||i.doesAddBorderForTableAndCells&&/^t(able|d|h)$/i.test(e.nodeName)||(l+=parseFloat(t.borderTopWidth,10)||0,u+=parseFloat(t.borderLeftWidth,10)||0),o=r,r=e.offsetParent),i.subtractsBorderForOverflowNotVisible&&"visible"!==t.overflow&&(l+=parseFloat(t.borderTopWidth,10)||0,u+=parseFloat(t.borderLeftWidth,10)||0),b=t;return("relative"===b.position||"static"===b.position)&&(l+=s.offsetTop,u+=s.offsetLeft),i.supportsFixedPosition&&"fixed"===b.position&&(l+=Math.max(x.scrollTop,s.scrollTop),u+=Math.max(x.scrollLeft,s.scrollLeft)),{top:l,left:u}}}(e,t),function(e,t){function r(){if(!a){if(!t.body)return setTimeout(r,13);if(a=!0,c){for(var e,o=0;e=c[o++];)e.call(null);c=null}}}function o(){if(!s){if(s=!0,"complete"===t.readyState)return r();if(t.addEventListener)t.addEventListener("DOMContentLoaded",i,!1),e.addEventListener("load",r,!1);else if(t.attachEvent){t.attachEvent("onreadystatechange",i),e.attachEvent("onload",r);var o=!1;try{o=null==e.frameElement}catch(a){}x.doScroll&&o&&n()}}}function n(){if(!a){try{x.doScroll("left")}catch(e){return void setTimeout(n,1)}r()}}var i,a=!1,s=!1,c=[];return t.addEventListener?i=function(){t.removeEventListener("DOMContentLoaded",i,!1),r()}:t.attachEvent&&(i=function(){"complete"===t.readyState&&(t.detachEvent("onreadystatechange",i),r())}),function(e){o(),a?e.call(null):c.push(e)}}(e,t)),M=function(){},E="getElementsByTagName",B=encodeURIComponent,F=t[E]("head")[0]||t.body,P="//yastatic.net/share",C="http://share.yandex.ru",j={az:{blogger:"Blogger",delicious:"delicious",diary:"Diary",digg:"Digg",evernote:"Evernote",facebook:"Facebook",friendfeed:"FriendFeed",gbuzz:"Google Buzz",gplus:"Google Plus",juick:"Juick",linkedin:"LinkedIn",liveinternet:"LiveInternet",lj:"LiveJournal",moikrug:"Moy Kruq",moimir:"Moy Mir",myspace:"MySpace",odnoklassniki:"Odnoklassniki",pinterest:"Pinterest",pocket:"Pocket",qzone:"Qzone",renren:"Renren",sina_weibo:"Sina Weibo",surfingbird:"Surfingbird",tencent_weibo:"Tencent Weibo",tutby:"YA TUT!",twitter:"Twitter",vkontakte:"ВКонтакте",yazakladki:"Yandex.Əlfəcinlər"},be:{blogger:"Blogger",delicious:"delicious",diary:"Diary",digg:"Digg",evernote:"Evernote",facebook:"Facebook",friendfeed:"FriendFeed",gbuzz:"Google Buzz",gplus:"Google Plus",juick:"Juick",linkedin:"LinkedIn",liveinternet:"LiveInternet",lj:"LiveJournal",moikrug:"Мой Круг",moimir:"Мой Мир",myspace:"MySpace",odnoklassniki:"Одноклассники",pinterest:"Pinterest",pocket:"Pocket",qzone:"Qzone",renren:"Renren",sina_weibo:"Sina Weibo",surfingbird:"Surfingbird",tencent_weibo:"Tencent Weibo",tutby:"Я ТУТ!",twitter:"Twitter",vkontakte:"ВКонтакте",yazakladki:"Яндекс.Закладкі"},en:{blogger:"Blogger",delicious:"delicious",diary:"Diary",digg:"Digg",evernote:"Evernote",facebook:"Facebook",friendfeed:"FriendFeed",gbuzz:"Google Buzz",gplus:"Google Plus",juick:"Juick",linkedin:"LinkedIn",liveinternet:"LiveInternet",lj:"LiveJournal",moikrug:"Moi Krug",moimir:"Moi Mir",myspace:"MySpace",odnoklassniki:"Odnoklassniki",pinterest:"Pinterest",pocket:"Pocket",qzone:"Qzone",renren:"Renren",sina_weibo:"Sina Weibo",surfingbird:"Surfingbird",tencent_weibo:"Tencent Weibo",tutby:"Tut.by",twitter:"Twitter",vkontakte:"VKontakte",yazakladki:"Yandex.Bookmarks"},hy:{blogger:"Blogger",delicious:"delicious",diary:"Diary",digg:"Digg",evernote:"Evernote",facebook:"Facebook",friendfeed:"FriendFeed",gbuzz:"Google Buzz",gplus:"Google Plus",juick:"Juick",linkedin:"LinkedIn",liveinternet:"LiveInternet",lj:"LiveJournal",moikrug:"Moi Krug",moimir:"Moi Mir",myspace:"MySpace",odnoklassniki:"Odnoklassniki",pinterest:"Pinterest",pocket:"Pocket",qzone:"",renren:"",sina_weibo:"",surfingbird:"Surfingbird",tencent_weibo:"",tutby:"YA TUT",twitter:"Twitter",vkontakte:"VKontakte",yazakladki:"Yandex.Էջանիշներ"},ka:{blogger:"Blogger",delicious:"delicious",diary:"Diary",digg:"Digg",evernote:"Evernote",facebook:"Facebook",friendfeed:"FriendFeed",gbuzz:"Google Buzz",gplus:"Google Plus",juick:"Juick",linkedin:"LinkedIn",liveinternet:"LiveInternet",lj:"LiveJournal",moikrug:"Moi Krug",moimir:"Moi Mir",myspace:"MySpace",odnoklassniki:"Odnoklasniki",pinterest:"Pinterest",pocket:"Pocket",qzone:"",renren:"",sina_weibo:"",surfingbird:"Surfingbird",tencent_weibo:"",tutby:"Ya Tut!",twitter:"Twitter",vkontakte:"VKontakte",yazakladki:"Yandex ჩანართები"},kk:{blogger:"Blogger",delicious:"delicious",diary:"Diary",digg:"Digg",evernote:"Evernote",facebook:"Facebook",friendfeed:"Friendfeed",gbuzz:"Google Buzz",gplus:"Google Plus",juick:"Juick",linkedin:"LinkedIn",liveinternet:"LiveInternet",lj:"LiveJournal",moikrug:"Мой Круг",moimir:"Мой Мир",myspace:"MySpace",odnoklassniki:"Одноклассники",pinterest:"Pinterest",pocket:"Pocket",qzone:"Qzone",renren:"Renren",sina_weibo:"Sina Weibo",surfingbird:"Surfingbird",tencent_weibo:"Tencent Weibo",tutby:"Я ТУТ!",twitter:"Twitter",vkontakte:"ВКонтакте",yazakladki:"Яндекс.Бетбелгілер"},ro:{blogger:"Blogger",delicious:"delicious",diary:"Diary",digg:"Digg",evernote:"Evernote",facebook:"Facebook",friendfeed:"FriendFeed",gbuzz:"Google Buzz",gplus:"Google Plus",juick:"Juick",linkedin:"LinkedIn",liveinternet:"LiveInternet",lj:"LiveJournal",moikrug:"Moi Krug",moimir:"Moi Mir",myspace:"MySpace",odnoklassniki:"Odnoklassniki",pinterest:"Pinterest",pocket:"Pocket",qzone:"",renren:"",sina_weibo:"",surfingbird:"Surfingbird",tencent_weibo:"",tutby:"YA TUT!",twitter:"Twitter",vkontakte:"VKontakte",yazakladki:"Yandex.Notiţe"},ru:{blogger:"Blogger",delicious:"delicious",diary:"Diary",digg:"Digg",evernote:"Evernote",facebook:"Facebook",friendfeed:"FriendFeed",gbuzz:"Google Buzz",gplus:"Google Plus",juick:"Juick",linkedin:"LinkedIn",liveinternet:"LiveInternet",lj:"LiveJournal",moikrug:"Мой Круг",moimir:"Мой Мир",myspace:"MySpace",odnoklassniki:"Одноклассники",pinterest:"Pinterest",pocket:"Pocket",qzone:"Qzone",renren:"Renren",sina_weibo:"Sina Weibo",surfingbird:"Surfingbird",tencent_weibo:"Tencent Weibo",tutby:"Я ТУТ!",twitter:"Twitter",vkontakte:"ВКонтакте",yazakladki:"Яндекс.Закладки"},tr:{blogger:"Blogger",delicious:"delicious",diary:"Diary",digg:"Digg",evernote:"Evernote",facebook:"Facebook ",friendfeed:"FriendFeed",gbuzz:"Google Buzz",gplus:"Google Plus",juick:"Juick",linkedin:"LinkedIn",liveinternet:"LiveInternet",lj:"LiveJournal ",moikrug:"Moy Krug",moimir:"Moi Mir",myspace:"MySpace",odnoklassniki:"Odnoklasniki",pinterest:"Pinterest",pocket:"Pocket",qzone:"",renren:"",sina_weibo:"",surfingbird:"Surfingbird",tencent_weibo:"",tutby:"Tut.by!",twitter:"Twitter ",vkontakte:"VKontakte ",yazakladki:"Yandex.Favoriler"},tt:{blogger:"Blogger",delicious:"delicious",diary:"Diary",digg:"Digg",evernote:"Evernote",facebook:"Facebook",friendfeed:"FriendFeed",gbuzz:"Google Buzz",gplus:"Google Plus",juick:"Juick",linkedin:"LinkedIn",liveinternet:"LiveInternet",lj:"LiveJournal",moikrug:"Мой Круг",moimir:"Мой Мир",myspace:"MySpace",odnoklassniki:"Одноклассники",pinterest:"Pinterest",pocket:"Pocket",qzone:"Qzone",renren:"Renren",sina_weibo:"Sina Weibo",surfingbird:"Surfingbird",tencent_weibo:"Tencent Weibo",tutby:"Я ТУТ!",twitter:"Twitter",vkontakte:"ВКонтакте",yazakladki:"Яндекс.Кыстыргычлар"},uk:{blogger:"Blogger",delicious:"delicious",diary:"Diary",digg:"Digg",evernote:"Evernote",facebook:"Facebook",friendfeed:"FriendFeed",gbuzz:"Google Buzz",gplus:"Google Plus",juick:"Juick",linkedin:"LinkedIn",liveinternet:"LiveInternet",lj:"LiveJournal",moikrug:"Мой Круг",moimir:"Мой Мир",myspace:"MySpace",odnoklassniki:"Однокласники",pinterest:"Pinterest",pocket:"Pocket",qzone:"Qzone",renren:"Renren",sina_weibo:"Sina Weibo",surfingbird:"Surfingbird",tencent_weibo:"Tencent Weibo",tutby:"Я ТУТ!",twitter:"Twitter",vkontakte:"ВКонтакті",yazakladki:"Яндекс.Закладки"}};"Ya"in e||(e.Ya={}),Ya.share=function(r){function o(e){return e=(""+e).replace(/\s/g,"").match(/^\-?\d+\+?/),e&&e[0]}function a(e){var t=new RegExp("(\\d)(\\d{3})( |\\+|$)","g");return t.test(""+e)?a((""+e).replace(t,function(){return arguments[1]+" "+arguments[2]+arguments[3]})):e}if(!(this instanceof Ya.share))return new Ya.share(r);r&&(P=r.STATIC_HOST||P,C=r.SHARE_HOST||C),this._loaded=!1;var s=this,c=r.onshare||M,b=r.onBeforeShare||null,u={onready:r.onready||r.onload||M,onbeforeclose:r.onbeforeclose||M,onclose:r.onclose||M,onbeforeopen:r.onbeforeopen||M,onopen:r.onopen||M,onshare:function(e){if(b)try{if(b(s)===!1)return e.preventDefault(),!1}catch(t){return e.preventDefault(),!1}var r=m(e);r&&(s.incrementCounter(r),c(r,s))},_this:s};u.onMessage=function(e){s.onMessage(e)},this.onMessage=function(e){try{var t=P.match(/\/\/([^\/]+)(\/|$)/);if(e&&e.data&&(e.origin.match(RegExp("//"+(t&&t[1].replace(".","\\.")+"$")))||e.origin==window.location.origin)){var r=(""+e.data).split("|"),n={};if(3!=r.length)return;n.service=r.shift(),n.counter=o(r.shift()),n.url=r.join("|"),n.url.length&&n.service&&s.showCounter(n)}}catch(e){}},this.incrementCounter=function(e){if(!window.postMessage)return!1;var t=y(s._block,"b-share-btn__"+e)[0],r=t?y(t,"b-share-counter")[0]:!1,i=r&&o(r.innerHTML||"0");r&&i&&/^[\d ]+$/.test(i)&&(i=parseInt(o(i)||0,10)+1,r.innerHTML=a(""+i),n(t,"b-share-btn__counter"))},this.showCounter=function(e){var t=y(s._block,"b-share-btn__"+e.service)[0],r=t?y(t,"b-share-counter")[0]:!1;r&&s._block.getAttribute("data-yasharelink")==e.url&&(r.innerHTML=a(e.counter)||"",e.counter<0?r.parentNode.removeChild(r):e.counter&&"0"!=e.counter?n(t,"b-share-btn__counter"):i(t,"b-share-btn__counter"))},this.appendMetrika=function(){if(!e.Ya._globalShareLoaded){var r=t.getElementsByTagName("script")[0],o=t.createElement("script"),n=function(){r.parentNode.insertBefore(o,r)};o.type="text/javascript",o.async=!0,o.src=("https:"==t.location.protocol?"https:":"http:")+"//mc.yandex.ru/metrika/watch.js","[object Opera]"==e.opera?t.addEventListener("DOMContentLoaded",n,!1):n(),(e.yandex_metrika_callbacks=e.yandex_metrika_callbacks||[]).push(function(){try{e.yaCounter26812653=new Ya.Metrika({id:26812653,trackLinks:!0,accurateTrackBounce:!0,params:{jquery:"function"==typeof e.jQuery,version:"function"==typeof e.jQuery&&e.jQuery().jquery}}),o.remove()}catch(t){}}),e.Ya._globalShareLoaded=!0}},A(function(){var e=l(r,u);r=null,e&&(s._block=e[0],s._loaded=!0,s.appendMetrika())})},Ya.share.prototype={updateShareLink:function(r,o,n){if(!this._loaded)return this;var i,a,s,c,b="",l="";if(1==arguments.length&&"object"==typeof arguments[0]){var u=arguments[0];r=u.link||e.location.toString(),o=u.title||t.title,b=u.description||"",l=u.image||"",n=u.serviceSpecific||{}}else r=r||e.location.toString(),o=o||t.title,n=n||{};for(s=y(this._block,"b-share__link"),i=0,a=s.length;a>i;i++)c=s[i].getAttribute("data-service"),s[i].href=_(c,p(c,"link",r,n),p(c,"title",o,n),p(c,"description",b,n),p(c,"image",l,n));return this}},A(function(){for(var e,r,o,n,i=y(t.body,"yashare-auto-init"),a=0,s=i.length;s>a;a++)e=i[a],r=e.getAttribute("data-yashareQuickServices"),o=e.getAttribute("data-yasharePopupServices"),r="string"==typeof r?r.split(","):null,n={element:e,theme:e.getAttribute("data-yashareTheme"),l10n:e.getAttribute("data-yashareL10n"),image:e.getAttribute("data-yashareImage"),link:e.getAttribute("data-yashareLink"),title:e.getAttribute("data-yashareTitle"),description:e.getAttribute("data-yashareDescription"),elementStyle:{type:e.getAttribute("data-yashareType"),quickServices:r}},o&&"string"==typeof o&&(o=o.split(","),n.popupStyle={blocks:o}),new Ya.share(n)
})}(window,document);