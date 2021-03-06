
<!doctype html>
<html>
  <head>
    <title>Actor & Model Resume Website Template | WIX</title>
    
   <!-- BEGIN SENTRY -->
   <script src="https://browser.sentry-cdn.com/4.4.2/bundle.min.js" crossorigin="anonymous"></script>
   <script type="text/javascript">
     Sentry.init({
       dsn: 'https://b0d320ce280a492696c6716fc0fd90dd@sentry.io/1366160',
       release: "1.165.0",
       environment: "production"
     });

     Sentry.configureScope((scope) => {
       scope.setUser({
         id: "662240886|b0dacdd6-af6c-4d63-9118-40483c204dc0",
         clientId: "813258f9-bc5b-4825-8df5-36bd15d7162f",
       });
       scope.setExtra("sessionId", "f5427f43-8dfb-442f-9ab5-ae72061cb89f");
     });

   </script>
   <!-- END SENTRY -->
 
    <script type='text/javascript' >window.NREUM||(NREUM={});NREUM.info = {"agent":"","beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"c99d7f1ab0","applicationID":"31527391,90185088","applicationTime":2.761184,"transactionName":"ZFAHNkNYXUBQVEUKXF0aIBpBS1ZAQl1CTHR2YUpNXFhBWFRDWA1UHkEAD0FVUkdUGkcKVkRQF01FXF5DXVZFBkAcDxEHXElfUkVSeAc=","queueTime":0,"ttGuid":"1567c9070439030","agentToken":null}; window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1118.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
    <script type="text/javascript">
        var initialTime = new Date().getTime();
      (function () {
        var appName = 'marketing-template-viewer';
        window.appStartLoadTime = window.performance && window.performance.now();
        window.fedops = window.fedops || {};
        window.fedops.apps = window.fedops.apps || {};
        window.fedops.apps[appName] = { startLoadTime: window.appStartLoadTime };
        try { window.fedops.sessionId = window.localStorage.getItem('fedops.logger.sessionId'); } catch(e) {};
        window.fedops.sessionId = window.fedops.sessionId || 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) { var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8); return v.toString(16); });
        (new Image()).src = '//frog.wix.com/fed?appName=' + appName + '&src=72&evid=14&session_id=' + window.fedops.sessionId;
      })();
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <link type="image/png" href="//www.wix.com/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="https://static.parastorage.com/services/third-party/fonts/Helvetica/fontFace.css">
    <link rel="stylesheet" href="//static.parastorage.com/services/marketing-template-viewer/1.165.0/app.min.css">

    <meta name="description" content="Show how talented you really are with this one-of-a-kind template. Designed with actors and models in mind, this clean and bright template will surely get you noticed by everyone in the industry. With an option to add your bio, resume, and an eye-catching photo gallery, your personal website has never looked better. Start creating your own site now, by simply clicking 'Edit' below.">
    <meta name="author" content="Wixpress">
    <meta http-equiv="content-language" content="en"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <meta property="og:title" content="Actor & Model Resume Website Template | WIX"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.wix.com/website-template/view/html/1887"/>
    <meta property="og:image" content="//static.wixstatic.com/media/aaa827d442c143c0bbe8636aa569af8c.jpg"/>
    <meta content="Wix" property="og:site_name">
    <meta property="og:description" content="Show how talented you really are with this one-of-a-kind template. Designed with actors and models in mind, this clean and bright template will surely get you noticed by everyone in the industry. With an option to add your bio, resume, and an eye-catching photo gallery, your personal website has never looked better. Start creating your own site now, by simply clicking 'Edit' below."/>
    <meta property="fb:admins" content="731184828"/>
    <meta name="fb:app_id" content="236335823061286"/>
    <meta name="google-site-verification" content="QXhlrY-V2PWOmnGUb8no0L-fKzG48uJ5ozW0ukU7Rpo"/>

    <link rel="canonical" href="https://www.wix.com/website-template/view/html/1887"/>

    <link rel="alternate" hreflang="fr" href="https://fr.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="pt" href="https://pt.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="cs" href="https://cs.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="it" href="https://it.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="nl" href="https://nl.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="ko" href="https://ko.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="de" href="https://de.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="ru" href="https://ru.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="sv" href="https://sv.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="tr" href="https://tr.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="da" href="https://da.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="en" href="https://www.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="es" href="https://es.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="hi" href="https://hi.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="ja" href="https://ja.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="no" href="https://no.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="pl" href="https://pl.wix.com/website-template/view/html/1887"/>
    <link rel="alternate" hreflang="x-default" href="https://www.wix.com/website-template/view/html/1887" />

  </head>
  <body>
     <!-- Google Tag Manager -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDD5C4" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
  </noscript>
  <script type="text/javascript">
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
      var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MDD5C4');
  </script>
  <!-- End Google Tag Manager -->
    <div id="root"><div data-hooks="app-component" data-reactroot="" data-reactid="1" data-react-checksum="2110886096"><div data-hooks="ToolBar-component" class="_1GEsV" data-reactid="2"><div class="_1k3yn" data-reactid="3"><a data-hooks="logo" href="https://www.wix.com" class="_2UVAQ _1JQgh" data-reactid="4"><span class="_18myF" data-reactid="5">wix.com</span></a><div class="_1k3yn" data-reactid="6"><button data-hooks="desktop-view" class="zy9-w _37uQn" data-reactid="7"><span class="AGc6i" data-reactid="8">show desktop view</span></button><hr class="_3PFGd" data-reactid="9"/><button data-hooks="mobile-view" class="aR03A " data-reactid="10"><span class="AGc6i" data-reactid="11">show mobile view</span></button></div></div><div class="_1k3yn _3yC7e" data-reactid="12"><p data-hooks="tool-bar-title" class="_21v7p" data-reactid="13">Click Edit and create your own amazing website</p><a data-hooks="info-view" class="_1JERd " tabindex="0" role="dialog" href="#" data-reactid="14">Read More</a><a class="_1c4Ff" data-hooks="editor-link" href="https://editor.wix.com/html/editor/web/renderer/new?metaSiteId=28a077e8-599e-452b-959b-5946202e015b&amp;siteId=5d2a8f2b-b726-45f6-9db1-92596eccc9d2&amp;editorSessionId=873EDF14-3CC1-4FDE-3B69-871CD911D838" target="_blank" tabindex="0" data-reactid="15">Edit this site</a><label data-hooks="price" class="_8r8sw" data-reactid="16"><!-- react-text: 17 -->Price:<!-- /react-text --><!-- react-text: 18 --> <!-- /react-text --><!-- react-text: 19 -->Free<!-- /react-text --></label></div></div><div data-hooks="template-demo-component" class="_1qF-6 " data-reactid="20"><div data-hooks="desktop-view-component" class="_3W_Qh" data-reactid="21"><iframe data-hooks="desktop-iframe" src="https://www.wix.com/demone2/actor-model-resume" width="100%" height="100%" class="_2oDbB" data-reactid="22"></iframe></div></div><div data-hooks="info-pop-up-component" class="moyRL " data-reactid="23"><div class="_3sdF3" data-reactid="24"><button data-hooks="card-close" class="_3nPGC" data-reactid="25"><span class="b6lR7" data-reactid="26">close info popup</span></button><div class="_3G2Wr" data-reactid="27"><h1 data-hooks="card-title" class="_36ndT" data-reactid="28">Actor &amp; Model Resume - Website Template</h1><div class="_3C1IB" data-reactid="29"><h3 data-hooks="card-good-for-title" class="_3wC-t" data-reactid="30">Good For:</h3><p data-hooks="card-good-for" class="_25OEI" data-reactid="31">Actors, Models, TV Personalities</p></div><div class="_3C1IB" data-reactid="32"><h3 class="_3wC-t" data-reactid="33">Description:</h3><p data-hooks="card-description" class="_25OEI" data-reactid="34">Show how talented you really are with this one-of-a-kind template. Designed with actors and models in mind, this clean and bright template will surely get you noticed by everyone in the industry. With an option to add your bio, resume, and an eye-catching photo gallery, your personal website has never looked better. Start creating your own site now, by simply clicking &#x27;Edit&#x27; below.</p></div><p class="_25OEI _3C1IB _1favE" data-reactid="35"><span class="_3wC-t" data-reactid="36">Price:</span><!-- react-text: 37 --> <!-- /react-text --><!-- react-text: 38 -->Free<!-- /react-text --></p></div><div class="_8CQO7" data-reactid="39"><a data-hooks="card-editor-url" class="_15Xoe _2VXta" target="_blank" href="https://editor.wix.com/html/editor/web/renderer/new?metaSiteId=28a077e8-599e-452b-959b-5946202e015b&amp;siteId=5d2a8f2b-b726-45f6-9db1-92596eccc9d2&amp;editorSessionId=873EDF14-3CC1-4FDE-3B69-871CD911D838" data-reactid="40">Edit Now</a></div></div></div></div></div>
    <script>
      window.__BASEURL__ = '/website-template/view/html/';
      window.__INITIAL_I18N__ = {"locale":"en","resources":{"Price":"Price","Edit Template":"","About This Template":"","Description":"","Good For":"","template.viewer.page.title":"{{- title}} Website Template | WIX","template_button_label":"Edit Website","template_seeFeatures_label":"See All Features","template_expand_examples_text":"Great for","template_expand_header":"Template Features","template.viewer.title":"Click Edit and create your own amazing website","template.viewer.edit.button":"Edit this site","template.viewer.read.more":"Read More","template.viewer.back":"Back","template.viewer.info.edit.button":"Edit Now","template.viewer.price":"Price:","template.viewer.info.title":"{{- title}} - Website Template","template.viewer.info.goodFor":"Good For:","template.viewer.info.description":"Description:","template.viewer.info.desktop.only.notice":"Edit this template by going to Wix.com from your desktop, where you can customise any of our beautiful templates.","template.viewer.see.all.templates":"See All Templates","a11y.desktop.button":"show desktop view","a11y.mobile.button":"show mobile view","a11y.close.popup.button":"close info popup","messages_test":"test"}}
      window.__INITIAL_STATE__ = {"view":{"selected":"desktop"},"loading":{"active":false},"template":{"title":"Actor & Model Resume","description":"Show how talented you really are with this one-of-a-kind template. Designed with actors and models in mind, this clean and bright template will surely get you noticed by everyone in the industry. With an option to add your bio, resume, and an eye-catching photo gallery, your personal website has never looked better. Start creating your own site now, by simply clicking 'Edit' below.","image":"aaa827d442c143c0bbe8636aa569af8c.jpg","id":"1887","lng":"en","price":"Free","docUrl":"demone2\u002Factor-model-resume","editorUrl":"https:\u002F\u002Feditor.wix.com\u002Fhtml\u002Feditor\u002Fweb\u002Frenderer\u002Fnew?metaSiteId=28a077e8-599e-452b-959b-5946202e015b&siteId=5d2a8f2b-b726-45f6-9db1-92596eccc9d2&editorSessionId=873EDF14-3CC1-4FDE-3B69-871CD911D838","goodFor":"Actors, Models, TV Personalities","siteId":"5d2a8f2b-b726-45f6-9db1-92596eccc9d2","metaSiteId":"28a077e8-599e-452b-959b-5946202e015b","editorSessionId":"873EDF14-3CC1-4FDE-3B69-871CD911D838","url":"https:\u002F\u002Fwww.wix.com\u002Fdemone2\u002Factor-model-resume"},"info":{"show":false},"experiments":{"active":["ReleaseNotesEnableSubscription","ReleaseNotesDesignUpdate","EnableAnonMainFunnelIntro","ReleaseNotesDesignNavigation","TemplatesGallerySearchToCMS","TemplatesGalleryDatasourceToCMS","TemplateViewerUseNewLightboxDealer"]},"originUrl":"undefined","config":{"locale":"en","dealerCmsTranslationsUrl":"\u002F\u002Fstatic.parastorage.com\u002Fservices\u002Fdealer-cms-translations\u002F1.1009.0\u002F","dealerLightboxUrl":"\u002F\u002Fstatic.parastorage.com\u002Fservices\u002Fdealer-lightbox\u002F1.21.0\u002F"}};
      window.__BI__ = {"utm_source":"media_buying","utm_medium":"paid_referral","utm_campaign":"ma_freewebtemplates.com","experiment_id":"freewebtemplates.com^180x184^MiddleRight^Wixthumbnail","siteId":"5d2a8f2b-b726-45f6-9db1-92596eccc9d2"};
      window.__BI__.initialTime = initialTime;
      window.__DEVICE__ = 'desktop';
    </script>
    <script src="https://static.parastorage.com/unpkg/react@15.6.2/dist/react.min.js" crossorigin></script>
    <script src="https://static.parastorage.com/unpkg/react-dom@15.6.2/dist/react-dom.min.js" crossorigin></script>
    <script src="https://static.parastorage.com/unpkg/@wix/marketing-cookie-notification@1.0.429/dist/statics/app.bundle.min.js"></script>
    
      
        <script src="//static.parastorage.com/services/dealer-lightbox/1.21.0/dealer-lightbox.bundle.min.js"></script>
      
    

    <script src="//static.parastorage.com/services/marketing-template-viewer/1.165.0/app.bundle.min.js"></script>
  </body>
</html>
