<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1" id="wixDesktopViewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <link rel="stylesheet" href="/assets/style.css">
  <script nomodule="" src="https://static.parastorage.com/unpkg/core-js-bundle@3.2.1/minified.js"></script>
  <script nomodule=""
    src="https://static.parastorage.com/unpkg/focus-within-polyfill@5.0.9/dist/focus-within-polyfill.js"></script>
  <script nomodule="" src="https://polyfill.io/v3/polyfill.min.js?features=fetch"></script>
 

 
  <script type="application/json"
    id="wix-fedops">{"data":{"site":{"metaSiteId":"1e0b0d35-783a-46fe-b689-34428327a179","userId":"f8d1672c-fd81-46f8-a4b1-92292c3646ec","siteId":"721b1d9a-937b-4409-831a-8b7f5427299f","externalBaseUrl":"https:\/\/www.jongrobbqny.com","siteRevision":124,"siteType":"UGC","dc":"uw2-pub-1","isResponsive":false,"editorName":"Unknown","sessionId":"0e78c1af-f62a-4c8b-a2b1-3155b6ac2db1","isSEO":false,"appNameForBiEvents":"thunderbolt"},"rollout":{"siteAssetsVersionsRollout":false,"isDACRollout":0,"isTBRollout":false},"fleetConfig":{"fleetName":"wix-thunderbolt","type":"GA","code":0},"requestUrl":"https:\/\/www.jongrobbqny.com\/","isInSEO":false,"platformOnSite":true}}</script>
  <script>window.fedops = JSON.parse(document.getElementById('wix-fedops').textContent)</script>
  <script id='sendFedopsLoadStarted'>
    function e(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var n = Object.getOwnPropertySymbols(e); r && (n = n.filter((function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable }))), t.push.apply(t, n) } return t } function r(e, r, t) { return (r = function (e) { var r = function (e, r) { if ("object" != typeof e || null === e) return e; var t = e[Symbol.toPrimitive]; if (void 0 !== t) { var n = t.call(e, r || "default"); if ("object" != typeof n) return n; throw new TypeError("@@toPrimitive must return a primitive value.") } return ("string" === r ? String : Number)(e) }(e, "string"); return "symbol" == typeof r ? r : String(r) }(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e } !function () { var t = function (e) { var r, t, n, i = !1; if (null === (r = window.viewerModel) || void 0 === r || !r.experiments["specs.thunderbolt.checkIOSToAvoidBeacon"] || !/\(iP(hone|ad|od);/i.test(null === (t = window) || void 0 === t || null === (n = t.navigator) || void 0 === n ? void 0 : n.userAgent)) try { i = navigator.sendBeacon(e) } catch (e) { } i || ((new Image).src = e) }; var n = window.fedops.data, i = n.site, o = n.rollout, a = n.fleetConfig, s = n.requestUrl, c = n.isInSEO, u = n.frogOnUserDomain, d = function (e) { var r = e.navigator.userAgent; return /instagram.+google\/google/i.test(r) ? "" : /bot|google(?!play)|phantom|crawl|spider|headless|slurp|facebookexternal|Lighthouse|PTST|^mozilla\/4\.0$|^\s*$/i.test(r) ? "ua" : "" }(window) || function () { try { if (window.self === window.top) return "" } catch (e) { } return "iframe" }() || function () { var e; if (!Function.prototype.bind) return "bind"; var r = window, t = r.document, n = r.navigator; if (!t || !n) return "document"; var i = n.webdriver, o = n.userAgent, a = n.plugins, s = n.languages; if (i) return "webdriver"; if (!a || Array.isArray(a)) return "plugins"; if (null !== (e = Object.getOwnPropertyDescriptor(a, "0")) && void 0 !== e && e.writable) return "plugins-extra"; if (!o) return "userAgent"; if (o.indexOf("Snapchat") > 0 && t.hidden) return "Snapchat"; if (!s || 0 === s.length || !Object.isFrozen(s)) return "languages"; try { throw Error() } catch (e) { if (e instanceof Error) { var c = e.stack; if (c && / (\(internal\/)|(\(?file:\/)/.test(c)) return "stack" } } return "" }() || (c ? "seo" : ""), p = !!d, l = function (t, n) { var i, o = "none", a = t.match(/ssr-caching="?cache[,#]\s*desc=([\w-]+)(?:[,#]\s*varnish=(\w+))?(?:[,#]\s*dc[,#]\s*desc=([\w-]+))?(?:"|;|$)/); if (!a && window.PerformanceServerTiming) { var s = function (e) { var r, t; try { r = e() } catch (e) { r = [] } var n = []; return r.forEach((function (e) { switch (e.name) { case "cache": n[1] = e.description; break; case "varnish": n[2] = e.description; break; case "dc": t = e.description } })), { microPop: t, matches: n } }(n); i = s.microPop, a = s.matches } if (a && a.length && (o = `${a[1]},${a[2] || "none"}`, i || (i = a[3])), "none" === o) { var c = "undefined" != typeof performance ? performance.timing : null; c && c.responseStart - c.requestStart == 0 && (o = "browser") } return function (t) { for (var n = 1; n < arguments.length; n++) { var i = null != arguments[n] ? arguments[n] : {}; n % 2 ? e(Object(i), !0).forEach((function (e) { r(t, e, i[e]) })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(i)) : e(Object(i)).forEach((function (e) { Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(i, e)) })) } return t }({ caching: o, isCached: 0 === o.indexOf("hit") }, i ? { microPop: i } : {}) }(document.cookie, (function () { return performance.getEntriesByType("navigation")[0].serverTiming || [] })), f = l.isCached, v = l.caching, m = l.microPop, g = { WixSite: 1, UGC: 2, Template: 3 }[i.siteType] || 0, w = i.isResponsive ? "thunderbolt-responsive" : "thunderbolt", h = o.isDACRollout, b = o.siteAssetsVersionsRollout, x = h ? 1 : 0, y = b ? 1 : 0, O = 0 === a.code || 1 === a.code ? a.code : null, P = Date.now() - window.initialTimestamps.initialTimestamp, S = Math.round(performance.now()), j = document.visibilityState, _ = window, E = _.fedops, T = _.addEventListener, $ = _.thunderboltVersion; E.apps = E.apps || {}, E.apps[w] = { startLoadTime: S }, E.sessionId = i.sessionId, E.vsi = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, (function (e) { var r = 16 * Math.random() | 0; return ("x" === e ? r : 3 & r | 8).toString(16) })), E.is_cached = f, E.phaseStarted = A(28), E.phaseEnded = A(22), performance.mark("[cache] " + v + (m ? " [" + m + "]" : "")), E.reportError = function (e) { var r = (null == e ? void 0 : e.reason) || (null == e ? void 0 : e.message); r ? D(26, `&errorInfo=${r}&errorType=load`) : e.preventDefault() }, T("error", E.reportError), T("unhandledrejection", E.reportError); var k = !1; function D(e) { var r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : ""; if (!s.includes("suppressbi=true")) { var n = (u ? i.externalBaseUrl.replace(/^https?:\/\//, "") + "/_frog" : "//frog.wix.com") + "/" + "bolt-performance?src=72&evid=" + e + "&appName=" + w + "&is_rollout=" + O + "&is_sav_rollout=" + y + "&is_dac_rollout=" + x + "&dc=" + i.dc + (m ? "&microPop=" + m : "") + "&is_cached=" + f + "&msid=" + i.metaSiteId + "&session_id=" + window.fedops.sessionId + "&ish=" + p + "&isb=" + p + (p ? "&isbr=" + d : "") + "&vsi=" + window.fedops.vsi + "&caching=" + v + (k ? ",browser_cache" : "") + "&pv=" + j + "&pn=1&v=" + $ + "&url=" + encodeURIComponent(s) + "&st=" + g + `&ts=${P}&tsn=${S}` + r; t(n) } } function A(e) { return function (r, t) { var n = `&name=${r}&duration=${Date.now() - P}`, i = t && t.paramsOverrides ? Object.keys(t.paramsOverrides).map((function (e) { return e + "=" + t.paramsOverrides[e] })).join("&") : ""; D(e, i ? `${n}&${i}` : n) } } T("pageshow", (function (e) { e.persisted && (k || (k = !0, E.is_cached = !0)) }), !0), window.__browser_deprecation__ || D(21, `&platformOnSite=${window.fedops.data.platformOnSite}`) }();
  </script>

  <!-- Polyfills check -->
  <script>
    if (
      typeof Promise === 'undefined' ||
      typeof Set === 'undefined' ||
      typeof Object.assign === 'undefined' ||
      typeof Array.from === 'undefined' ||
      typeof Symbol === 'undefined'
    ) {
      // send bi in order to detect the browsers in which polyfills are not working
      window.fedops.phaseStarted('missing_polyfills')
    }
  </script>

  <!-- Essential Viewer Model -->
  <script type="application/json"
    id="wix-essential-viewer-model">{"fleetConfig":{"fleetName":"wix-thunderbolt","type":"GA","code":0},"mode":{"qa":false,"enableTestApi":false,"debug":false,"ssrIndicator":false,"ssrOnly":false,"siteAssetsFallback":"enable"},"componentsLibrariesTopology":[{"artifactId":"editor-elements","namespace":"wixui","url":"https:\/\/static.parastorage.com\/services\/editor-elements\/1.11595.0"},{"artifactId":"editor-elements","namespace":"dsgnsys","url":"https:\/\/static.parastorage.com\/services\/editor-elements\/1.11595.0"}],"siteFeaturesConfigs":{"sessionManager":{"isRunningInDifferentSiteContext":false}},"language":{"userLanguage":"en"},"siteAssets":{"clientTopology":{"mediaRootUrl":"https:\/\/static.wixstatic.com","staticMediaUrl":"https:\/\/static.wixstatic.com\/media","moduleRepoUrl":"https:\/\/static.parastorage.com\/unpkg","fileRepoUrl":"https:\/\/static.parastorage.com\/services","siteAssetsUrl":"https:\/\/siteassets.parastorage.com","pageJsonServerUrls":["https:\/\/pages.parastorage.com","https:\/\/staticorigin.wixstatic.com","https:\/\/www.jongrobbqny.com","https:\/\/fallback.wix.com\/wix-html-editor-pages-webapp\/page"],"pathOfTBModulesInFileRepoForFallback":"wix-thunderbolt\/dist\/"}},"siteFeatures":["assetsLoader","businessLogger","captcha","clickHandlerRegistrar","commonConfig","componentsLoader","componentsRegistry","consentPolicy","cyclicTabbing","environmentWixCodeSdk","environment","lightbox","locationWixCodeSdk","navigationManager","navigationPhases","ooi","pages","panorama","renderer","reporter","routerFetch","router","scrollRestoration","seoWixCodeSdk","seo","sessionManager","siteMembersWixCodeSdk","siteMembers","siteScrollBlocker","siteWixCodeSdk","stores","structureApi","thunderboltInitializer","tpaCommons","translations","warmupData","windowMessageRegistrar","windowWixCodeSdk","wixCustomElementComponent","wixEmbedsApi","componentsReact","platform"],"site":{"externalBaseUrl":"https:\/\/www.jongrobbqny.com","isSEO":false},"media":{"staticMediaUrl":"https:\/\/static.wixstatic.com\/media","mediaRootUrl":"https:\/\/static.wixstatic.com\/","staticVideoUrl":"https:\/\/video.wixstatic.com\/"},"requestUrl":"https:\/\/www.jongrobbqny.com\/","rollout":{"siteAssetsVersionsRollout":false,"isDACRollout":0,"isTBRollout":false},"commonConfig":{"brand":"wix","host":"VIEWER","bsi":"","consentPolicy":{},"consentPolicyHeader":{}},"interactionSampleRatio":0.01,"dynamicModelUrl":"https:\/\/www.jongrobbqny.com\/_api\/v2\/dynamicmodel","experiments":{"specs.thunderbolt.wowImageRelayout":true}}</script>
  <script>window.viewerModel = JSON.parse(document.getElementById('wix-essential-viewer-model').textContent)</script>

  <script>
    window.fetchDynamicModel = () => (window.viewerModel.siteFeaturesConfigs.sessionManager.isRunningInDifferentSiteContext ? Promise.resolve({}) : fetch(window.viewerModel.dynamicModelUrl, { credentials: 'same-origin' }).then(function (r) { if (!r.ok) throw new Error(`[${r.status}]${r.statusText}`); return r.json() }))
    window.dynamicModelPromise = window.fetchDynamicModel()
    window.commonConfig = viewerModel.commonConfig
  </script> 
</head>

<body class=''>
  <script type="text/javascript">
    var bodyCacheable = true;

    var exclusionReason = { "shouldRender": true, "forced": false };
    var ssrInfo = { "cacheExclusionReason": "", "renderBodyTime": 223, "renderTimeStamp": 1703905658130 }
  </script>





  <!--pageHtmlEmbeds.bodyStart start-->
  <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart start"></script>

  <script type="wix/htmlEmbeds" id="pageHtmlEmbeds.bodyStart end"></script>
  <!--pageHtmlEmbeds.bodyStart end-->




  <script id="wix-first-paint">
    if (window.ResizeObserver &&
      (!window.PerformanceObserver || !PerformanceObserver.supportedEntryTypes || PerformanceObserver.supportedEntryTypes.indexOf('paint') === -1)) {
      new ResizeObserver(function (entries, observer) {
        entries.some(function (entry) {
          var contentRect = entry.contentRect;
          if (contentRect.width > 0 && contentRect.height > 0) {
            requestAnimationFrame(function (now) {
              window.wixFirstPaint = now;
              dispatchEvent(new CustomEvent('wixFirstPaint'));
            });
            observer.disconnect();
            return true;
          }
        });
      }).observe(document.body);
    }
  </script>






  <pages-css id="pages-css">
    <style id="css_masterPage"></style>
    <style id="css_c1dmp">
      #comp-kkt4613o {
        --height: 332px;
        --width: 951px
      }

      #comp-iiyomgay {
        --height: 487px;
        --width: 438px
      }

      #comp-iiyp7ttr {
        --height: 320px;
        --width: 558px
      }

      #comp-lar0agms {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        min-width: 980px
      }

      #comp-lar0agms1 {
        --bg-overlay-color: rgb(var(--color_11));
        --bg-gradient: none;
        min-width: 980px
      }

      #comp-iiynwx6x {
        --bg-overlay-color: transparent;
        --bg-gradient: none;
        --padding: 0px;
        --margin: 0px;
        min-width: 980px;
        --firstChildMarginTop: -1px;
        --lastChildMarginBottom: -1px;
        --items-direction: row
      }

      #mediaisk4n9id1 {
        --fill-layer-image-opacity: 1;
        --fill-layer-video-opacity: 1;
        --fill-layer-background-media-position: fixed;
        --fill-layer-background-media-pointer-events: none;
        --bg-overlay-color: rgb(var(--color_11));
        --bg-gradient: none;
        width: 100%;
        --column-width: 980px;
        --column-flex: 980
      }

      #c1dmp {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
      }

      #masterPage {
        --pinned-layers-in-page: 0;
      }

      [data-mesh-id=Containerc1dmpinlineContent] {
        height: auto;
        width: 100%;
      }

      [data-mesh-id=Containerc1dmpinlineContent-gridContainer] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 40px;
        grid-template-rows: min-content 1fr;
        grid-template-columns: 100%;
        padding-bottom: 0px;
        box-sizing: border-box;
      }

      [data-mesh-id=Containerc1dmpinlineContent-gridContainer]>[id="comp-lar0agms"] {
        position: relative;
        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }

      [data-mesh-id=Containerc1dmpinlineContent-gridContainer]>[id="comp-lar0agms1"] {
        position: relative;
        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }

      #c1dmp {
        width: auto;
        min-height: 40px;
      }

      #pageBackground_c1dmp {
        --bg-position: absolute;
        --fill-layer-background-overlay-color: transparent;
        --fill-layer-background-overlay-position: absolute;
        --bg-overlay-color: rgb(var(--color_11));
        --bg-gradient: none;
      }

      #comp-lar0agms {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
      }

      [data-mesh-id=comp-lar0agmsinlineContent] {
        height: auto;
        width: 100%;
      }

      [data-mesh-id=comp-lar0agmsinlineContent-gridContainer] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
      }

      [data-mesh-id=comp-lar0agmsinlineContent-gridContainer]>[id="comp-iiynwx6x"] {
        position: relative;
        margin: 1px 0px 0px calc((100% - 980px) * 0.5);
        left: 0px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }

      [data-mesh-id=comp-lar0agmsinlineContent-gridContainer]>[id="comp-jf1l87or"] {
        position: absolute;
        top: 116px;
        left: 440px;
        margin-left: calc((100% - 980px) * 0.5);
      }

      #comp-iiynwx6x {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 980px;
      }

      [data-mesh-id=mediaisk4n9id1inlineContent] {
        height: auto;
        width: 100%;
      }

      [data-mesh-id=mediaisk4n9id1inlineContent-gridContainer] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: 591px;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
      }

      [data-mesh-id=mediaisk4n9id1inlineContent-gridContainer]>[id="comp-k668r3wk"] {
        position: relative;
        margin: 279px 0px 10px calc((100% - 980px) * 0.5);
        left: 817px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }

      #mediaisk4n9id1 {
        width: 980px;
      }

      #comp-k668r3wk {
        --bg: var(--color_11);
        --alpha-bg: 1;
      }

      #comp-k668r3wk {
        width: 355px;
      }

      [data-mesh-id=comp-k668r3wkinlineContent] {
        height: auto;
        width: 355px;
      }

      [data-mesh-id=comp-k668r3wkinlineContent-gridContainer] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: 1fr;
        grid-template-columns: 100%;
      }

      [data-mesh-id=comp-k668r3wkinlineContent-gridContainer]>[id="comp-k668rui3"] {
        position: relative;
        margin: 18px 0px 18px 0;
        left: 19px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }

      #comp-k668r3wk {
        --shc-mutated-brightness: 128, 128, 128;
      }

      #comp-k668rui3 {
        width: 321px;
        height: auto;
      }

      #comp-k668rui3 {
        height: auto;
      }

      #comp-lar0agms1 {
        left: 0;
        margin-left: 0;
        width: 100%;
        min-width: 0;
      }

      [data-mesh-id=comp-lar0agms1inlineContent] {
        height: auto;
        width: 100%;
      }

      [data-mesh-id=comp-lar0agms1inlineContent-gridContainer] {
        position: static;
        display: grid;
        height: auto;
        width: 100%;
        min-height: auto;
        grid-template-rows: repeat(5, min-content) 1fr;
        grid-template-columns: 100%;
      }

      [data-mesh-id=comp-lar0agms1inlineContent-gridContainer]>[id="comp-iiyovcdd"] {
        position: relative;
        margin: 55px 0px 20px calc((100% - 980px) * 0.5);
        left: 684px;
        grid-area: 1 / 1 / 2 / 2;
        justify-self: start;
        align-self: start;
      }

      [data-mesh-id=comp-lar0agms1inlineContent-gridContainer]>[id="comp-iiyox278"] {
        position: relative;
        margin: 0px 0px 15px calc((100% - 980px) * 0.5);
        left: 46px;
        grid-area: 2 / 1 / 3 / 2;
        justify-self: start;
        align-self: start;
      }

      [data-mesh-id=comp-lar0agms1inlineContent-gridContainer]>[id="comp-kkt4613o"] {
        position: relative;
        margin: 0px 0px 26px calc((100% - 980px) * 0.5);
        left: 14px;
        grid-area: 3 / 1 / 4 / 2;
        justify-self: start;
        align-self: start;
      }

      [data-mesh-id=comp-lar0agms1inlineContent-gridContainer]>[id="comp-iiyomgay"] {
        position: relative;
        margin: 0px 0px 33px calc((100% - 980px) * 0.5);
        left: 57px;
        grid-area: 4 / 1 / 5 / 2;
        justify-self: start;
        align-self: start;
      }

      [data-mesh-id=comp-lar0agms1inlineContent-gridContainer]>[id="comp-iiyp0tvu"] {
        position: relative;
        margin: 61px 0px 10px calc((100% - 980px) * 0.5);
        left: 556px;
        grid-area: 4 / 1 / 5 / 2;
        justify-self: start;
        align-self: start;
      }

      [data-mesh-id=comp-lar0agms1inlineContent-gridContainer]>[id="comp-kk2vm6tn"] {
        position: relative;
        margin: 35px 0px 54px calc((100% - 980px) * 0.5);
        left: 51px;
        grid-area: 5 / 1 / 6 / 2;
        justify-self: start;
        align-self: start;
      }

      [data-mesh-id=comp-lar0agms1inlineContent-gridContainer]>[id="comp-iiyp7ttr"] {
        position: relative;
        margin: 0px 0px 19px calc((100% - 980px) * 0.5);
        left: 400px;
        grid-area: 5 / 1 / 6 / 2;
        justify-self: start;
        align-self: start;
      }

      [data-mesh-id=comp-lar0agms1inlineContent-gridContainer]>[id="comp-kk309w4n"] {
        position: relative;
        margin: 0px 0px 0px calc((100% - 980px) * 0.5);
        left: 654px;
        grid-area: 6 / 1 / 7 / 2;
        justify-self: start;
        align-self: start;
      }

      #comp-iiyovcdd {
        width: 174px;
        height: auto;
      }

      #comp-iiyovcdd {
        height: auto;
      }

      #comp-iiyox278 {
        width: 888px;
        height: auto;
      }

      #comp-iiyox278 {
        height: auto;
      }

      #comp-kkt4613o {
        --contentPaddingLeft: 0px;
        --contentPaddingRight: 0px;
        --contentPaddingTop: 0px;
        --contentPaddingBottom: 0px;
      }

      #comp-kkt4613o {
        width: 951px;
        height: 332px;
      }

      #comp-iiyomgay {
        --contentPaddingLeft: 0px;
        --contentPaddingRight: 0px;
        --contentPaddingTop: 0px;
        --contentPaddingBottom: 0px;
      }

      #comp-iiyomgay {
        width: 438px;
        height: 487px;
      }

      #comp-iiyp0tvu {
        width: 366px;
        height: auto;
      }

      #comp-iiyp0tvu {
        height: auto;
      }

      #comp-kk2vm6tn {
        width: 317px;
        height: auto;
      }

      #comp-kk2vm6tn {
        height: auto;
      }

      #comp-iiyp7ttr {
        --contentPaddingLeft: 0px;
        --contentPaddingRight: 0px;
        --contentPaddingTop: 0px;
        --contentPaddingBottom: 0px;
      }

      #comp-iiyp7ttr {
        width: 558px;
        height: 320px;
      }

      #comp-kk309w4n {
        width: 310px;
        height: auto;
      }

      #comp-kk309w4n {
        height: auto;
      }
    </style>
  </pages-css>


  <!-- initCustomElements # 1-->
  <script>!function () { "use strict"; var e, n, r, t, o, a = {}, i = {}; function d(e) { var n = i[e]; if (void 0 !== n) return n.exports; var r = i[e] = { id: e, loaded: !1, exports: {} }; return a[e].call(r.exports, r, r.exports, d), r.loaded = !0, r.exports } d.m = a, e = [], d.O = function (n, r, t, o) { if (!r) { var a = 1 / 0; for (f = 0; f < e.length; f++) { r = e[f][0], t = e[f][1], o = e[f][2]; for (var i = !0, c = 0; c < r.length; c++)(!1 & o || a >= o) && Object.keys(d.O).every((function (e) { return d.O[e](r[c]) })) ? r.splice(c--, 1) : (i = !1, o < a && (a = o)); if (i) { e.splice(f--, 1); var u = t(); void 0 !== u && (n = u) } } return n } o = o || 0; for (var f = e.length; f > 0 && e[f - 1][2] > o; f--)e[f] = e[f - 1]; e[f] = [r, t, o] }, d.n = function (e) { var n = e && e.__esModule ? function () { return e.default } : function () { return e }; return d.d(n, { a: n }), n }, r = Object.getPrototypeOf ? function (e) { return Object.getPrototypeOf(e) } : function (e) { return e.__proto__ }, d.t = function (e, t) { if (1 & t && (e = this(e)), 8 & t) return e; if ("object" == typeof e && e) { if (4 & t && e.__esModule) return e; if (16 & t && "function" == typeof e.then) return e } var o = Object.create(null); d.r(o); var a = {}; n = n || [null, r({}), r([]), r(r)]; for (var i = 2 & t && e; "object" == typeof i && !~n.indexOf(i); i = r(i))Object.getOwnPropertyNames(i).forEach((function (n) { a[n] = function () { return e[n] } })); return a.default = function () { return e }, d.d(o, a), o }, d.d = function (e, n) { for (var r in n) d.o(n, r) && !d.o(e, r) && Object.defineProperty(e, r, { enumerable: !0, get: n[r] }) }, d.f = {}, d.e = function (e) { return Promise.all(Object.keys(d.f).reduce((function (n, r) { return d.f[r](e, n), n }), [])) }, d.u = function (e) { return 862 === e ? "thunderbolt-commons.3aa0e6a0.bundle.min.js" : 6008 === e ? "fastdom.inline.cbb90a94.bundle.min.js" : 2081 === e ? "render-indicator.inline.3809a4a7.bundle.min.js" : ({ 233: "group_2", 263: "widget", 306: "GhostComp", 446: "programs-component-index", 515: "gift-card-index", 612: "group_41", 613: "group_28", 638: "groups-post-index", 679: "events-page-structured-data-index", 687: "triggersAndReactions", 763: "bookings-service-index", 783: "video-component-index", 872: "componentsqaapi", 897: "group_19", 899: "group_47", 964: "popups", 991: "group_9", 1084: "group_29", 1218: "wixDomSanitizer", 1335: "thank-you-page-index", 1344: "Repeater_FluidColumns", 1398: "editorWixCodeSdk", 1407: "TPAModal", 1475: "tpaWidgetNativeDeadComp", 1711: "debug", 1900: "animations", 2044: "tpaModuleProvider", 2126: "wix-data-page-item-index", 2144: "module-executor", 2203: "group_40", 2244: "group_48", 2258: "RemoteRefDeadComp", 2262: "TPAPopup", 2283: "presenceApi", 2351: "dashboardWixCodeSdk", 2355: "widgetWixCodeSdk", 2375: "group_22", 2511: "reviews-component-index", 2945: "bookings-form-index", 2964: "stores-gallery-component-index", 3001: "group_46", 3071: "portfolio-projects-index", 3096: "customCss", 3133: "static-page-v2-schema-presets-index", 3639: "businessManager", 3669: "group_20", 3732: "restaurants-menu-component-index", 3742: "blog-hashtags-index", 3756: "static-page-index", 3786: "group_7", 3862: "restaurants-menu-page-index", 3888: "group_42", 3948: "group_5", 3955: "TPAWorker", 3973: "Repeater_FixedColumns", 3987: "schedule-page-index", 4022: "cyclicTabbing", 4102: "AppPart", 4193: "group_45", 4222: "challenges-page-index", 4281: "qaApi", 4316: "group_51", 4323: "group_10", 4417: "group_30", 4522: "siteMembers", 4794: "portfolio-collections-index", 4825: "group_18", 4909: "group_0", 4919: "stores-product-schema-presets-index", 5060: "santa-platform-utils", 5122: "group_31", 5130: "motionEffects", 5170: "events-page-index", 5246: "TPAPreloaderOverlay", 5333: "group_27", 5350: "group_23", 5705: "group_37", 5776: "tpaCommons", 5810: "presence-lazy", 5831: "externalComponent", 5860: "group_49", 5918: "group_25", 5921: "reporter-api", 5989: "windowScroll", 6107: "group_38", 6121: "group_8", 6127: "containerSlider", 6144: "panorama", 6158: "services-component-index", 6161: "group_3", 6239: "group_21", 6464: "SEO_DEFAULT", 6499: "blog-tags-index", 6537: "pro-gallery-item-index", 6570: "group_24", 6670: "group_43", 6692: "group_4", 6805: "editorElementsDynamicTheme", 6997: "group_44", 7122: "seo-api-converters", 7212: "siteMembersWixCodeSdk", 7290: "breadcrumbs-component-index", 7514: "ByocStyles", 7698: "SiteStyles", 7699: "group_14", 7740: "group_35", 7745: "platform", 7802: "restaurants-order-page-index", 7858: "members-area-profile-index", 7880: "stores-product-index", 8009: "group_6", 8050: "tslib.inline", 8094: "blog-post-index", 8097: "group_13", 8138: "AppPart2", 8179: "testApi", 8200: "seo-api", 8219: "groups-page-index", 8317: "events-page-calculated-index", 8333: "routerFetch", 8389: "TPAUnavailableMessageOverlay", 8391: "dynamicPages", 8392: "blog-archive-index", 8488: "group_32", 8559: "forum-category-index", 8643: "group_36", 8656: "feedback", 8681: "environmentWixCodeSdk", 8693: "search-page-index", 8794: "searchBox", 8836: "group_11", 8860: "stores-category-index", 8945: "renderIndicator", 8951: "payment-page-index", 9040: "static-page-v2-index", 9110: "forum-post-index", 9187: "members-area-profile-tabs-index", 9279: "FontRulersContainer", 9339: "stickyToComponent", 9487: "bookings-calendar-index", 9521: "FontFaces", 9540: "blog-category-index", 9689: "group_50", 9895: "thunderbolt-components-registry", 9928: "group_39", 9941: "TPABaseComponent" }[e] || e) + "." + { 233: "645bdb49", 263: "566c32aa", 306: "e7f6c1d0", 446: "060c194e", 515: "8bfe29b9", 612: "118ecc30", 613: "c950959a", 638: "6181e847", 679: "62ca1799", 687: "e918d585", 763: "abb359e9", 783: "3544dd57", 872: "18672379", 897: "2cb08f9e", 899: "75577b31", 964: "8cf06f24", 975: "f806de0c", 991: "495ee951", 1084: "a0385a61", 1218: "e397a725", 1335: "d211f519", 1344: "487208ab", 1398: "f60e7a5a", 1407: "e7fc1582", 1475: "d18b09cd", 1602: "0b37fb55", 1643: "105f3548", 1711: "b85fd181", 1900: "359f6483", 1969: "4c5509c5", 2044: "a8427393", 2126: "0f76faf3", 2144: "3d3d8c20", 2203: "692897bc", 2244: "db8217d1", 2258: "0cde4608", 2262: "737ea906", 2283: "f7feace8", 2351: "82c7dc00", 2355: "0c1c2349", 2375: "c8746031", 2511: "a30fdc70", 2945: "1bfdf84b", 2964: "2ccc5bd5", 3001: "67f8a78f", 3071: "4d95608c", 3096: "2724ba96", 3133: "d8086482", 3639: "8f1db994", 3669: "c4ce16d1", 3732: "e7cd7f5e", 3742: "93a5a652", 3756: "c66e2cde", 3786: "962bd0d6", 3862: "3fb9ae0e", 3888: "09baa819", 3948: "c660647b", 3955: "5e4f43d2", 3973: "6772ca92", 3987: "81647280", 4022: "706f48fd", 4102: "7054efbe", 4193: "07272975", 4222: "d97408c2", 4281: "765f27a8", 4316: "1452850b", 4323: "96f3dc38", 4417: "bc54ab89", 4522: "41c2dff3", 4794: "047dccb4", 4825: "db0f7127", 4909: "fccdd87f", 4919: "31d95355", 5060: "6cf3992f", 5122: "abe83565", 5130: "1769d8d8", 5170: "dd4379ed", 5246: "98042c29", 5333: "26249c24", 5350: "21e9fa29", 5705: "d874b857", 5776: "095c50a7", 5810: "eeaca04f", 5831: "268bbd4b", 5860: "6bc693e1", 5918: "9184754f", 5921: "5cdad7a0", 5989: "7a5a9635", 6107: "b105f697", 6121: "e8a9817a", 6127: "71489125", 6144: "94210094", 6158: "669babfc", 6161: "589bfc0d", 6239: "c2d4c85e", 6464: "5130d6a8", 6499: "581ab8bc", 6537: "b6d4b31d", 6570: "e8e57546", 6670: "082f507f", 6692: "24e99cb4", 6805: "67e0ca26", 6997: "91905fc0", 7122: "cef1d9e2", 7212: "944df650", 7290: "c092bb67", 7514: "da73f74a", 7698: "e0321122", 7699: "66a39810", 7740: "c737bf04", 7745: "88789026", 7802: "e905ccdf", 7858: "d530d3a1", 7880: "5ced22fb", 8009: "8f3d2dd3", 8050: "541db4c6", 8094: "013c90cf", 8097: "d5c95dc0", 8138: "d42dd97d", 8179: "76381e87", 8200: "7a7e4004", 8219: "104743b2", 8317: "8e99d927", 8333: "95b70b04", 8389: "65fd83ab", 8391: "cf5910de", 8392: "0992e55f", 8488: "2e3f0290", 8559: "997886b6", 8643: "b2c60d0c", 8656: "2aa29e68", 8681: "27929a11", 8693: "4ed32f80", 8794: "589beb43", 8836: "dd1c56bc", 8860: "e80dcdd5", 8945: "5b2ea225", 8951: "7ca41ae0", 9040: "c538cf86", 9110: "f3044640", 9187: "f23d64cf", 9279: "26e807d8", 9339: "f0b8e2fd", 9487: "879f03e3", 9521: "1471c979", 9540: "24784af7", 9689: "3c5a8e5d", 9895: "87f93a88", 9928: "1575eb44", 9941: "6704fabe" }[e] + ".chunk.min.js" }, d.miniCssF = function (e) { return 2081 === e ? "render-indicator.inline.044c11cb.min.css" : { 1344: "Repeater_FluidColumns", 1407: "TPAModal", 1475: "tpaWidgetNativeDeadComp", 2262: "TPAPopup", 3786: "group_7", 3973: "Repeater_FixedColumns", 4102: "AppPart", 5246: "TPAPreloaderOverlay", 8138: "AppPart2", 8389: "TPAUnavailableMessageOverlay", 9279: "FontRulersContainer", 9941: "TPABaseComponent" }[e] + "." + { 1344: "2b7b96dd", 1407: "52dc3d33", 1475: "edad7c2d", 2262: "7e7f441d", 3786: "bae0ce0c", 3973: "9abcda74", 4102: "34a92bc1", 5246: "6dbffa0c", 8138: "0a2601ec", 8389: "fb1e5320", 9279: "2b93f1ca", 9941: "0f6643a8" }[e] + ".chunk.min.css" }, d.g = function () { if ("object" == typeof globalThis) return globalThis; try { return this || new Function("return this")() } catch (e) { if ("object" == typeof window) return window } }(), d.o = function (e, n) { return Object.prototype.hasOwnProperty.call(e, n) }, t = {}, o = "_wix_thunderbolt_app:", d.l = function (e, n, r, a) { if (t[e]) t[e].push(n); else { var i, c; if (void 0 !== r) for (var u = document.getElementsByTagName("script"), f = 0; f < u.length; f++) { var p = u[f]; if (p.getAttribute("src") == e || p.getAttribute("data-webpack") == o + r) { i = p; break } } i || (c = !0, (i = document.createElement("script")).charset = "utf-8", i.timeout = 120, d.nc && i.setAttribute("nonce", d.nc), i.setAttribute("data-webpack", o + r), i.src = e, 0 !== i.src.indexOf(window.location.origin + "/") && (i.crossOrigin = "anonymous")), t[e] = [n]; var s = function (n, r) { i.onerror = i.onload = null, clearTimeout(l); var o = t[e]; if (delete t[e], i.parentNode && i.parentNode.removeChild(i), o && o.forEach((function (e) { return e(r) })), n) return n(r) }, l = setTimeout(s.bind(null, void 0, { type: "timeout", target: i }), 12e4); i.onerror = s.bind(null, i.onerror), i.onload = s.bind(null, i.onload), c && document.head.appendChild(i) } }, d.r = function (e) { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 }) }, d.nmd = function (e) { return e.paths = [], e.children || (e.children = []), e }, d.p = "https://static.parastorage.com/services/wix-thunderbolt/dist/", function () { if ("undefined" != typeof document) { var e = function (e) { return new Promise((function (n, r) { var t = d.miniCssF(e), o = d.p + t; if (function (e, n) { for (var r = document.getElementsByTagName("link"), t = 0; t < r.length; t++) { var o = (i = r[t]).getAttribute("data-href") || i.getAttribute("href"); if ("stylesheet" === i.rel && (o === e || o === n)) return i } var a = document.getElementsByTagName("style"); for (t = 0; t < a.length; t++) { var i; if ((o = (i = a[t]).getAttribute("data-href")) === e || o === n) return i } }(t, o)) return n(); !function (e, n, r, t, o) { var a = document.createElement("link"); a.rel = "stylesheet", a.type = "text/css", a.onerror = a.onload = function (r) { if (a.onerror = a.onload = null, "load" === r.type) t(); else { var i = r && ("load" === r.type ? "missing" : r.type), d = r && r.target && r.target.href || n, c = new Error("Loading CSS chunk " + e + " failed.\n(" + d + ")"); c.code = "CSS_CHUNK_LOAD_FAILED", c.type = i, c.request = d, a.parentNode && a.parentNode.removeChild(a), o(c) } }, a.href = n, 0 !== a.href.indexOf(window.location.origin + "/") && (a.crossOrigin = "anonymous"), r ? r.parentNode.insertBefore(a, r.nextSibling) : document.head.appendChild(a) }(e, o, null, n, r) })) }, n = { 6658: 0 }; d.f.miniCss = function (r, t) { n[r] ? t.push(n[r]) : 0 !== n[r] && { 1344: 1, 1407: 1, 1475: 1, 2081: 1, 2262: 1, 3786: 1, 3973: 1, 4102: 1, 5246: 1, 8138: 1, 8389: 1, 9279: 1, 9941: 1 }[r] && t.push(n[r] = e(r).then((function () { n[r] = 0 }), (function (e) { throw delete n[r], e }))) } } }(), function () { var e = { 6658: 0 }; d.f.j = function (n, r) { var t = d.o(e, n) ? e[n] : void 0; if (0 !== t) if (t) r.push(t[2]); else if (6658 != n) { var o = new Promise((function (r, o) { t = e[n] = [r, o] })); r.push(t[2] = o); var a = d.p + d.u(n), i = new Error; d.l(a, (function (r) { if (d.o(e, n) && (0 !== (t = e[n]) && (e[n] = void 0), t)) { var o = r && ("load" === r.type ? "missing" : r.type), a = r && r.target && r.target.src; i.message = "Loading chunk " + n + " failed.\n(" + o + ": " + a + ")", i.name = "ChunkLoadError", i.type = o, i.request = a, t[1](i) } }), "chunk-" + n, n) } else e[n] = 0 }, d.O.j = function (n) { return 0 === e[n] }; var n = function (n, r) { var t, o, a = r[0], i = r[1], c = r[2], u = 0; if (a.some((function (n) { return 0 !== e[n] }))) { for (t in i) d.o(i, t) && (d.m[t] = i[t]); if (c) var f = c(d) } for (n && n(r); u < a.length; u++)o = a[u], d.o(e, o) && e[o] && e[o][0](), e[o] = 0; return d.O(f) }, r = self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []; r.forEach(n.bind(null, 0)), r.push = n.bind(null, r.push.bind(r)) }() }(); </script>
  <script >(self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([[6008], { 96114: function (t, e, n) { var i; !function (e) { "use strict"; var r = function () { }, s = e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.msRequestAnimationFrame || function (t) { return setTimeout(t, 16) }; function a() { var t = this; t.reads = [], t.writes = [], t.raf = s.bind(e), r("initialized", t) } function u(t) { t.scheduled || (t.scheduled = !0, t.raf(o.bind(null, t)), r("flush scheduled")) } function o(t) { r("flush"); var e, n = t.writes, i = t.reads; try { r("flushing reads", i.length), t.runTasks(i), r("flushing writes", n.length), t.runTasks(n) } catch (t) { e = t } if (t.scheduled = !1, (i.length || n.length) && u(t), e) { if (r("task errored", e.message), !t.catch) throw e; t.catch(e) } } function c(t, e) { var n = t.indexOf(e); return !!~n && !!t.splice(n, 1) } a.prototype = { constructor: a, runTasks: function (t) { var e; for (r("run tasks"); e = t.shift();)e() }, measure: function (t, e) { r("measure"); var n = e ? t.bind(e) : t; return this.reads.push(n), u(this), n }, mutate: function (t, e) { r("mutate"); var n = e ? t.bind(e) : t; return this.writes.push(n), u(this), n }, clear: function (t) { return r("clear", t), c(this.reads, t) || c(this.writes, t) }, extend: function (t) { if (r("extend", t), "object" != typeof t) throw new Error("expected object"); var e = Object.create(this); return function (t, e) { for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]) }(e, t), e.fastdom = this, e.initialize && e.initialize(), e }, catch: null }; var f = e.fastdom = e.fastdom || new a; void 0 === (i = function () { return f }.call(f, n, f, t)) || (t.exports = i) }("undefined" != typeof window ? window : this) } }]); </script>
  <script>"use strict"; (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([[774], { 80483: function (t, e, i) { i.r(e), i.d(e, { STATIC_MEDIA_URL: function () { return Ht }, alignTypes: function () { return _ }, fittingTypes: function () { return h }, getData: function () { return Nt }, getPlaceholder: function () { return Ft }, htmlTag: function () { return d }, populateGlobalFeatureSupport: function () { return M }, sdk: function () { return Yt }, upscaleMethods: function () { return g } }); const n = "v1", a = 2, r = 1920, o = 1920, c = 1e3, s = 1e3, h = { SCALE_TO_FILL: "fill", SCALE_TO_FIT: "fit", STRETCH: "stretch", ORIGINAL_SIZE: "original_size", TILE: "tile", TILE_HORIZONTAL: "tile_horizontal", TILE_VERTICAL: "tile_vertical", FIT_AND_TILE: "fit_and_tile", LEGACY_STRIP_TILE: "legacy_strip_tile", LEGACY_STRIP_TILE_HORIZONTAL: "legacy_strip_tile_horizontal", LEGACY_STRIP_TILE_VERTICAL: "legacy_strip_tile_vertical", LEGACY_STRIP_SCALE_TO_FILL: "legacy_strip_fill", LEGACY_STRIP_SCALE_TO_FIT: "legacy_strip_fit", LEGACY_STRIP_FIT_AND_TILE: "legacy_strip_fit_and_tile", LEGACY_STRIP_ORIGINAL_SIZE: "legacy_strip_original_size", LEGACY_ORIGINAL_SIZE: "actual_size", LEGACY_FIT_WIDTH: "fitWidth", LEGACY_FIT_HEIGHT: "fitHeight", LEGACY_FULL: "full", LEGACY_BG_FIT_AND_TILE: "legacy_tile", LEGACY_BG_FIT_AND_TILE_HORIZONTAL: "legacy_tile_horizontal", LEGACY_BG_FIT_AND_TILE_VERTICAL: "legacy_tile_vertical", LEGACY_BG_NORMAL: "legacy_normal" }, u = { FIT: "fit", FILL: "fill", FILL_FOCAL: "fill_focal", CROP: "crop", LEGACY_CROP: "legacy_crop", LEGACY_FILL: "legacy_fill" }, _ = { CENTER: "center", TOP: "top", TOP_LEFT: "top_left", TOP_RIGHT: "top_right", BOTTOM: "bottom", BOTTOM_LEFT: "bottom_left", BOTTOM_RIGHT: "bottom_right", LEFT: "left", RIGHT: "right" }, T = { [_.CENTER]: { x: .5, y: .5 }, [_.TOP_LEFT]: { x: 0, y: 0 }, [_.TOP_RIGHT]: { x: 1, y: 0 }, [_.TOP]: { x: .5, y: 0 }, [_.BOTTOM_LEFT]: { x: 0, y: 1 }, [_.BOTTOM_RIGHT]: { x: 1, y: 1 }, [_.BOTTOM]: { x: .5, y: 1 }, [_.RIGHT]: { x: 1, y: .5 }, [_.LEFT]: { x: 0, y: .5 } }, l = { center: "c", top: "t", top_left: "tl", top_right: "tr", bottom: "b", bottom_left: "bl", bottom_right: "br", left: "l", right: "r" }, d = { BG: "bg", IMG: "img", SVG: "svg" }, g = { AUTO: "auto", CLASSIC: "classic", SUPER: "super" }, I = { classic: 1, super: 2 }, L = { radius: "0.66", amount: "1.00", threshold: "0.01" }, E = { uri: "", css: { img: {}, container: {} }, attr: { img: {}, container: {} }, transformed: !1 }, p = 25e6, f = [1.5, 2, 4], m = { HIGH: { size: 196e4, quality: 90, maxUpscale: 1 }, MEDIUM: { size: 36e4, quality: 85, maxUpscale: 1 }, LOW: { size: 16e4, quality: 80, maxUpscale: 1.2 }, TINY: { size: 0, quality: 80, maxUpscale: 1.4 } }, A = { HIGH: "HIGH", MEDIUM: "MEDIUM", LOW: "LOW", TINY: "TINY" }, O = { CONTRAST: "contrast", BRIGHTNESS: "brightness", SATURATION: "saturation", HUE: "hue", BLUR: "blur" }, G = { JPG: "jpg", JPEG: "jpeg", JPE: "jpe", PNG: "png", WEBP: "webp", WIX_ICO_MP: "wix_ico_mp", WIX_MP: "wix_mp", GIF: "gif", SVG: "svg", UNRECOGNIZED: "unrecognized" }, R = (G.JPG, G.JPEG, G.JPE, G.PNG, G.GIF, G.WEBP, { isMobile: !1 }), b = function (t) { return R[t] }, w = function (t, e) { R[t] = e }; function M() { if ("undefined" != typeof window && "undefined" != typeof navigator) { const t = window.matchMedia && window.matchMedia("(max-width: 767px)").matches, e = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent); w("isMobile", t && e) } } function C(t, ...e) { return function (...i) { const n = i[i.length - 1] || {}, a = [t[0]]; return e.forEach((function (e, r) { const o = Number.isInteger(e) ? i[e] : n[e]; a.push(o, t[r + 1]) })), a.join("") } } function F(t) { return t[t.length - 1] } const N = [G.PNG, G.JPEG, G.JPG, G.JPE, G.WIX_ICO_MP, G.WIX_MP, G.WEBP], S = [G.JPEG, G.JPG, G.JPE]; function P(t, e, i) { return i && e && !(!(n = e.id) || !n.trim() || "none" === n.toLowerCase()) && Object.values(h).includes(t); var n } function k(t, e, i) { return !function (t, e, i = !1) { return x(t) && (e || !i) }(t, e, i) && function (t) { return N.includes($(t)) }(t) && !/(^https?)|(^data)|(^\/\/)/.test(t) } function y(t) { return $(t) === G.PNG } function x(t) { return $(t) === G.WEBP } const Y = ["/", "\\", "?", "<", ">", "|", "\u201c", ":", '"'].map(encodeURIComponent), H = ["\\.", "\\*"], B = "_"; function U(t) { return function (t) { return S.includes($(t)) }(t) ? G.JPG : y(t) ? G.PNG : x(t) ? G.WEBP : G.UNRECOGNIZED } function $(t) { return (/[.]([^.]+)$/.exec(t) && /[.]([^.]+)$/.exec(t)[1] || "").toLowerCase() } function v(t, e, i, n, a) { let r; return r = a === u.FILL ? function (t, e, i, n) { return Math.max(i / t, n / e) }(t, e, i, n) : a === u.FIT ? function (t, e, i, n) { return Math.min(i / t, n / e) }(t, e, i, n) : 1, r } function j(t, e, i, n, a, r) { t = t || n.width, e = e || n.height; const { scaleFactor: o, width: c, height: s } = function (t, e, i, n, a) { let r, o = i, c = n; if (r = v(t, e, i, n, a), a === u.FIT && (o = t * r, c = e * r), o && c && o * c > p) { const i = Math.sqrt(p / (o * c)); o *= i, c *= i, r = v(t, e, o, c, a) } return { scaleFactor: r, width: o, height: c } }(t, e, n.width * a, n.height * a, i); return function (t, e, i, n, a, r, o) { const { optimizedScaleFactor: c, upscaleMethodValue: s, forceUSM: h } = function (t, e, i, n) { if ("auto" === n) return function (t, e) { const i = V(t, e); return { optimizedScaleFactor: m[i].maxUpscale, upscaleMethodValue: I.classic, forceUSM: !1 } }(t, e); if ("super" === n) return function (t) { return { optimizedScaleFactor: F(f), upscaleMethodValue: I.super, forceUSM: !(f.includes(t) || t > F(f)) } }(i); return function (t, e) { const i = V(t, e); return { optimizedScaleFactor: m[i].maxUpscale, upscaleMethodValue: I.classic, forceUSM: !1 } }(t, e) }(t, e, r, a); let _ = i, T = n; if (r <= c) return { width: _, height: T, scaleFactor: r, upscaleMethodValue: s, forceUSM: h, cssUpscaleNeeded: !1 }; switch (o) { case u.FILL: _ = i * (c / r), T = n * (c / r); break; case u.FIT: _ = t * c, T = e * c }return { width: _, height: T, scaleFactor: c, upscaleMethodValue: s, forceUSM: h, cssUpscaleNeeded: !0 } }(t, e, c, s, r, o, i) } function D(t, e, i, n) { const a = Z(i) || function (t = _.CENTER) { return T[t] }(n); return { x: Math.max(0, Math.min(t.width - e.width, a.x * t.width - e.width / 2)), y: Math.max(0, Math.min(t.height - e.height, a.y * t.height - e.height / 2)), width: Math.min(t.width, e.width), height: Math.min(t.height, e.height) } } function z(t) { return t.alignment && l[t.alignment] || l[_.CENTER] } function Z(t) { let e; return !t || "number" != typeof t.x || isNaN(t.x) || "number" != typeof t.y || isNaN(t.y) || (e = { x: W(Math.max(0, Math.min(100, t.x)) / 100, 2), y: W(Math.max(0, Math.min(100, t.y)) / 100, 2) }), e } function V(t, e) { const i = t * e; return i > m[A.HIGH].size ? A.HIGH : i > m[A.MEDIUM].size ? A.MEDIUM : i > m[A.LOW].size ? A.LOW : A.TINY } function W(t, e) { const i = Math.pow(10, e || 0); return (t * i / i).toFixed(e) } function q(t) { return t && t.upscaleMethod && g[t.upscaleMethod.toUpperCase()] || g.AUTO } function J(t, e) { const i = { css: { container: {} } }, { css: n } = i, { fittingType: a } = t; switch (a) { case h.ORIGINAL_SIZE: case h.LEGACY_ORIGINAL_SIZE: case h.LEGACY_STRIP_ORIGINAL_SIZE: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat"; break; case h.SCALE_TO_FIT: case h.LEGACY_STRIP_SCALE_TO_FIT: n.container.backgroundSize = "contain", n.container.backgroundRepeat = "no-repeat"; break; case h.STRETCH: n.container.backgroundSize = "100% 100%", n.container.backgroundRepeat = "no-repeat"; break; case h.SCALE_TO_FILL: case h.LEGACY_STRIP_SCALE_TO_FILL: n.container.backgroundSize = "cover", n.container.backgroundRepeat = "no-repeat"; break; case h.TILE_HORIZONTAL: case h.LEGACY_STRIP_TILE_HORIZONTAL: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x"; break; case h.TILE_VERTICAL: case h.LEGACY_STRIP_TILE_VERTICAL: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y"; break; case h.TILE: case h.LEGACY_STRIP_TILE: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat"; break; case h.LEGACY_STRIP_FIT_AND_TILE: n.container.backgroundSize = "contain", n.container.backgroundRepeat = "repeat"; break; case h.FIT_AND_TILE: case h.LEGACY_BG_FIT_AND_TILE: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat"; break; case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x"; break; case h.LEGACY_BG_FIT_AND_TILE_VERTICAL: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y"; break; case h.LEGACY_BG_NORMAL: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat" }switch (e.alignment) { case _.CENTER: n.container.backgroundPosition = "center center"; break; case _.LEFT: n.container.backgroundPosition = "left center"; break; case _.RIGHT: n.container.backgroundPosition = "right center"; break; case _.TOP: n.container.backgroundPosition = "center top"; break; case _.BOTTOM: n.container.backgroundPosition = "center bottom"; break; case _.TOP_RIGHT: n.container.backgroundPosition = "right top"; break; case _.TOP_LEFT: n.container.backgroundPosition = "left top"; break; case _.BOTTOM_RIGHT: n.container.backgroundPosition = "right bottom"; break; case _.BOTTOM_LEFT: n.container.backgroundPosition = "left bottom" }return i } const X = { [_.CENTER]: "center", [_.TOP]: "top", [_.TOP_LEFT]: "top left", [_.TOP_RIGHT]: "top right", [_.BOTTOM]: "bottom", [_.BOTTOM_LEFT]: "bottom left", [_.BOTTOM_RIGHT]: "bottom right", [_.LEFT]: "left", [_.RIGHT]: "right" }, K = { position: "absolute", top: "auto", right: "auto", bottom: "auto", left: "auto" }; function Q(t, e) { const i = { css: { container: {}, img: {} } }, { css: n } = i, { fittingType: a } = t, r = e.alignment; switch (n.container.position = "relative", a) { case h.ORIGINAL_SIZE: case h.LEGACY_ORIGINAL_SIZE: t.parts && t.parts.length ? (n.img.width = t.parts[0].width, n.img.height = t.parts[0].height) : (n.img.width = t.src.width, n.img.height = t.src.height); break; case h.SCALE_TO_FIT: case h.LEGACY_FIT_WIDTH: case h.LEGACY_FIT_HEIGHT: case h.LEGACY_FULL: n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "contain", n.img.objectPosition = X[r] || "unset"; break; case h.LEGACY_BG_NORMAL: n.img.width = "100%", n.img.height = "100%", n.img.objectFit = "none", n.img.objectPosition = X[r] || "unset"; break; case h.STRETCH: n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "fill"; break; case h.SCALE_TO_FILL: n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "cover" }if ("number" == typeof n.img.width && "number" == typeof n.img.height && (n.img.width !== e.width || n.img.height !== e.height)) { const t = Math.round((e.height - n.img.height) / 2), i = Math.round((e.width - n.img.width) / 2); Object.assign(n.img, K, function (t, e, i) { return { [_.TOP_LEFT]: { top: 0, left: 0 }, [_.TOP_RIGHT]: { top: 0, right: 0 }, [_.TOP]: { top: 0, left: e }, [_.BOTTOM_LEFT]: { bottom: 0, left: 0 }, [_.BOTTOM_RIGHT]: { bottom: 0, right: 0 }, [_.BOTTOM]: { bottom: 0, left: e }, [_.RIGHT]: { top: t, right: 0 }, [_.LEFT]: { top: t, left: 0 }, [_.CENTER]: { width: i.width, height: i.height, objectFit: "none" } } }(t, i, e)[r]) } return i } function tt(t, e) { const i = { css: { container: {} }, attr: { container: {}, img: {} } }, { css: n, attr: a } = i, { fittingType: r } = t, o = e.alignment, { width: c, height: s } = t.src; let T; switch (n.container.position = "relative", r) { case h.ORIGINAL_SIZE: case h.LEGACY_ORIGINAL_SIZE: case h.TILE: t.parts && t.parts.length ? (a.img.width = t.parts[0].width, a.img.height = t.parts[0].height) : (a.img.width = c, a.img.height = s), a.img.preserveAspectRatio = "xMidYMid slice"; break; case h.SCALE_TO_FIT: case h.LEGACY_FIT_WIDTH: case h.LEGACY_FIT_HEIGHT: case h.LEGACY_FULL: a.img.width = "100%", a.img.height = "100%", a.img.transform = "", a.img.preserveAspectRatio = ""; break; case h.STRETCH: a.img.width = e.width, a.img.height = e.height, a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "none"; break; case h.SCALE_TO_FILL: k(t.src.id) ? (a.img.width = e.width, a.img.height = e.height) : (T = function (t, e, i, n, a) { const r = v(t, e, i, n, a); return { width: Math.round(t * r), height: Math.round(e * r) } }(c, s, e.width, e.height, u.FILL), a.img.width = T.width, a.img.height = T.height), a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "xMidYMid slice" }if ("number" == typeof a.img.width && "number" == typeof a.img.height && (a.img.width !== e.width || a.img.height !== e.height)) { let t, i, n = 0, c = 0; r === h.TILE ? (t = e.width % a.img.width, i = e.height % a.img.height) : (t = e.width - a.img.width, i = e.height - a.img.height); const s = Math.round(t / 2), u = Math.round(i / 2); switch (o) { case _.TOP_LEFT: n = 0, c = 0; break; case _.TOP: n = s, c = 0; break; case _.TOP_RIGHT: n = t, c = 0; break; case _.LEFT: n = 0, c = u; break; case _.CENTER: n = s, c = u; break; case _.RIGHT: n = t, c = u; break; case _.BOTTOM_LEFT: n = 0, c = i; break; case _.BOTTOM: n = s, c = i; break; case _.BOTTOM_RIGHT: n = t, c = i }a.img.x = n, a.img.y = c } return a.container.width = e.width, a.container.height = e.height, a.container.viewBox = [0, 0, e.width, e.height].join(" "), i } function et(t, e, i) { let n; switch (e.crop && (n = function (t, e) { const i = Math.max(0, Math.min(t.width, e.x + e.width) - Math.max(0, e.x)), n = Math.max(0, Math.min(t.height, e.y + e.height) - Math.max(0, e.y)); return i && n && (t.width !== i || t.height !== n) ? { x: Math.max(0, e.x), y: Math.max(0, e.y), width: i, height: n } : null }(e, e.crop), n && (t.src.width = n.width, t.src.height = n.height, t.src.isCropped = !0, t.parts.push(nt(n)))), t.fittingType) { case h.SCALE_TO_FIT: case h.LEGACY_FIT_WIDTH: case h.LEGACY_FIT_HEIGHT: case h.LEGACY_FULL: case h.FIT_AND_TILE: case h.LEGACY_BG_FIT_AND_TILE: case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL: case h.LEGACY_BG_FIT_AND_TILE_VERTICAL: case h.LEGACY_BG_NORMAL: t.parts.push(it(t, i)); break; case h.SCALE_TO_FILL: t.parts.push(function (t, e) { const i = j(t.src.width, t.src.height, u.FILL, e, t.devicePixelRatio, t.upscaleMethod), n = Z(t.focalPoint); return { transformType: n ? u.FILL_FOCAL : u.FILL, width: Math.round(i.width), height: Math.round(i.height), alignment: z(e), focalPointX: n && n.x, focalPointY: n && n.y, upscale: i.scaleFactor > 1, forceUSM: i.forceUSM, scaleFactor: i.scaleFactor, cssUpscaleNeeded: i.cssUpscaleNeeded, upscaleMethodValue: i.upscaleMethodValue } }(t, i)); break; case h.STRETCH: t.parts.push(function (t, e) { const i = v(t.src.width, t.src.height, e.width, e.height, u.FILL), n = Object.assign({}, e); return n.width = t.src.width * i, n.height = t.src.height * i, it(t, n) }(t, i)); break; case h.TILE_HORIZONTAL: case h.TILE_VERTICAL: case h.TILE: case h.LEGACY_ORIGINAL_SIZE: case h.ORIGINAL_SIZE: n = D(t.src, i, t.focalPoint, i.alignment), t.src.isCropped ? (Object.assign(t.parts[0], n), t.src.width = n.width, t.src.height = n.height) : t.parts.push(nt(n)); break; case h.LEGACY_STRIP_TILE_HORIZONTAL: case h.LEGACY_STRIP_TILE_VERTICAL: case h.LEGACY_STRIP_TILE: case h.LEGACY_STRIP_ORIGINAL_SIZE: t.parts.push(function (t) { return { transformType: u.LEGACY_CROP, width: Math.round(t.width), height: Math.round(t.height), alignment: z(t), upscale: !1, forceUSM: !1, scaleFactor: 1, cssUpscaleNeeded: !1 } }(i)); break; case h.LEGACY_STRIP_SCALE_TO_FIT: case h.LEGACY_STRIP_FIT_AND_TILE: t.parts.push(function (t) { return { transformType: u.FIT, width: Math.round(t.width), height: Math.round(t.height), upscale: !1, forceUSM: !0, scaleFactor: 1, cssUpscaleNeeded: !1 } }(i)); break; case h.LEGACY_STRIP_SCALE_TO_FILL: t.parts.push(function (t) { return { transformType: u.LEGACY_FILL, width: Math.round(t.width), height: Math.round(t.height), alignment: z(t), upscale: !1, forceUSM: !0, scaleFactor: 1, cssUpscaleNeeded: !1 } }(i)) } } function it(t, e) { const i = j(t.src.width, t.src.height, u.FIT, e, t.devicePixelRatio, t.upscaleMethod); return { transformType: !t.src.width || !t.src.height ? u.FIT : u.FILL, width: Math.round(i.width), height: Math.round(i.height), alignment: l.center, upscale: i.scaleFactor > 1, forceUSM: i.forceUSM, scaleFactor: i.scaleFactor, cssUpscaleNeeded: i.cssUpscaleNeeded, upscaleMethodValue: i.upscaleMethodValue } } function nt(t) { return { transformType: u.CROP, x: Math.round(t.x), y: Math.round(t.y), width: Math.round(t.width), height: Math.round(t.height), upscale: !1, forceUSM: !1, scaleFactor: 1, cssUpscaleNeeded: !1 } } function at(t, e) { var i; e = e || {}, t.quality = function (t, e) { const i = t.fileType === G.PNG, n = t.fileType === G.JPG, a = t.fileType === G.WEBP, r = n || i || a; if (r) { const n = F(t.parts), a = (o = n.width, c = n.height, m[V(o, c)].quality); let r = e.quality && e.quality >= 5 && e.quality <= 90 ? e.quality : a; return r = i ? r + 5 : r, r } var o, c; return 0 }(t, e), t.progressive = function (t) { return !1 !== t.progressive }(e), t.watermark = function (t) { return t.watermark }(e), t.autoEncode = null === (i = e.autoEncode) || void 0 === i || i, t.unsharpMask = function (t, e) { var i, n, a; if (function (t) { const e = "number" == typeof (t = t || {}).radius && !isNaN(t.radius) && t.radius >= .1 && t.radius <= 500, i = "number" == typeof t.amount && !isNaN(t.amount) && t.amount >= 0 && t.amount <= 10, n = "number" == typeof t.threshold && !isNaN(t.threshold) && t.threshold >= 0 && t.threshold <= 255; return e && i && n }(e.unsharpMask)) return { radius: W(null === (i = e.unsharpMask) || void 0 === i ? void 0 : i.radius, 2), amount: W(null === (n = e.unsharpMask) || void 0 === n ? void 0 : n.amount, 2), threshold: W(null === (a = e.unsharpMask) || void 0 === a ? void 0 : a.threshold, 2) }; if (("number" != typeof (r = (r = e.unsharpMask) || {}).radius || isNaN(r.radius) || 0 !== r.radius || "number" != typeof r.amount || isNaN(r.amount) || 0 !== r.amount || "number" != typeof r.threshold || isNaN(r.threshold) || 0 !== r.threshold) && function (t) { const e = F(t.parts); return !(e.scaleFactor >= 1) || e.forceUSM || e.transformType === u.FIT }(t)) return L; var r; return }(t, e), t.filters = function (t) { const e = t.filters || {}, i = {}; rt(e[O.CONTRAST], -100, 100) && (i[O.CONTRAST] = e[O.CONTRAST]); rt(e[O.BRIGHTNESS], -100, 100) && (i[O.BRIGHTNESS] = e[O.BRIGHTNESS]); rt(e[O.SATURATION], -100, 100) && (i[O.SATURATION] = e[O.SATURATION]); rt(e[O.HUE], -180, 180) && (i[O.HUE] = e[O.HUE]); rt(e[O.BLUR], 0, 100) && (i[O.BLUR] = e[O.BLUR]); return i }(e) } function rt(t, e, i) { return "number" == typeof t && !isNaN(t) && 0 !== t && t >= e && t <= i } function ot(t, e, i, n) { const r = function (t) { var e; return null !== (e = null == t ? void 0 : t.isSEOBot) && void 0 !== e && e }(n), o = U(e.id), c = function (t, e) { const i = /\.([^.]*)$/, n = new RegExp(`(${Y.concat(H).join("|")})`, "g"); if (e && e.length) { let t = e; const a = e.match(i); return a && N.includes(a[1]) && (t = e.replace(i, "")), encodeURIComponent(t).replace(n, B) } const a = t.match(/\/(.*?)$/); return (a ? a[1] : t).replace(i, "") }(e.id, e.name), s = r ? 1 : function (t) { return Math.min(t.pixelAspectRatio || 1, a) }(i), h = $(e.id), u = h, _ = k(e.id, null == n ? void 0 : n.hasAnimation, null == n ? void 0 : n.allowWEBPTransform), T = { fileName: c, fileExtension: h, fileType: o, fittingType: t, preferredExtension: u, src: { id: e.id, width: e.width, height: e.height, isCropped: !1 }, focalPoint: { x: e.focalPoint && e.focalPoint.x, y: e.focalPoint && e.focalPoint.y }, parts: [], devicePixelRatio: s, quality: 0, upscaleMethod: q(n), progressive: !0, watermark: "", unsharpMask: {}, filters: {}, transformed: _ }; return _ && (et(T, e, i), at(T, n)), T } function ct(t, e, i) { const n = Object.assign({}, i), a = b("isMobile"); switch (t) { case h.LEGACY_BG_FIT_AND_TILE: case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL: case h.LEGACY_BG_FIT_AND_TILE_VERTICAL: case h.LEGACY_BG_NORMAL: const t = a ? c : r, i = a ? s : o; n.width = Math.min(t, e.width), n.height = Math.min(i, Math.round(n.width / (e.width / e.height))), n.pixelAspectRatio = 1 }return n } const st = C`fit/w_${"width"},h_${"height"}`, ht = C`fill/w_${"width"},h_${"height"},al_${"alignment"}`, ut = C`fill/w_${"width"},h_${"height"},fp_${"focalPointX"}_${"focalPointY"}`, _t = C`crop/x_${"x"},y_${"y"},w_${"width"},h_${"height"}`, Tt = C`crop/w_${"width"},h_${"height"},al_${"alignment"}`, lt = C`fill/w_${"width"},h_${"height"},al_${"alignment"}`, dt = C`,lg_${"upscaleMethodValue"}`, gt = C`,q_${"quality"}`, It = C`,usm_${"radius"}_${"amount"}_${"threshold"}`, Lt = C`,bl`, Et = C`,wm_${"watermark"}`, pt = { [O.CONTRAST]: C`,con_${"contrast"}`, [O.BRIGHTNESS]: C`,br_${"brightness"}`, [O.SATURATION]: C`,sat_${"saturation"}`, [O.HUE]: C`,hue_${"hue"}`, [O.BLUR]: C`,blur_${"blur"}` }, ft = C`,enc_auto`; function mt(t, e, i, a = {}, r) { return k(e.id, null == a ? void 0 : a.hasAnimation, null == a ? void 0 : a.allowWEBPTransform) ? function (t) { const e = []; t.parts.forEach((t => { switch (t.transformType) { case u.CROP: e.push(_t(t)); break; case u.LEGACY_CROP: e.push(Tt(t)); break; case u.LEGACY_FILL: let i = lt(t); t.upscale && (i += dt(t)), e.push(i); break; case u.FIT: let n = st(t); t.upscale && (n += dt(t)), e.push(n); break; case u.FILL: let a = ht(t); t.upscale && (a += dt(t)), e.push(a); break; case u.FILL_FOCAL: let r = ut(t); t.upscale && (r += dt(t)), e.push(r) } })); let i = e.join("/"); return t.quality && (i += gt(t)), t.unsharpMask && (i += It(t.unsharpMask)), t.progressive || (i += Lt(t)), t.watermark && (i += Et(t)), t.filters && (i += Object.keys(t.filters).map((e => pt[e](t.filters))).join("")), t.autoEncode && t.fileType !== G.GIF && (i += ft(t)), `${t.src.id}/${n}/${i}/${t.fileName}.${t.preferredExtension}` }(r = r || ot(t, e, i, a)) : e.id } const At = { [_.CENTER]: "50% 50%", [_.TOP_LEFT]: "0% 0%", [_.TOP_RIGHT]: "100% 0%", [_.TOP]: "50% 0%", [_.BOTTOM_LEFT]: "0% 100%", [_.BOTTOM_RIGHT]: "100% 100%", [_.BOTTOM]: "50% 100%", [_.RIGHT]: "100% 50%", [_.LEFT]: "0% 50%" }, Ot = Object.entries(At).reduce(((t, [e, i]) => (t[i] = e, t)), {}), Gt = [h.TILE, h.TILE_HORIZONTAL, h.TILE_VERTICAL, h.LEGACY_BG_FIT_AND_TILE, h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL, h.LEGACY_BG_FIT_AND_TILE_VERTICAL], Rt = [h.LEGACY_ORIGINAL_SIZE, h.ORIGINAL_SIZE, h.LEGACY_BG_NORMAL]; function bt(t, e, { width: i, height: n }) { return t === h.TILE && e.width > i && e.height > n } function wt(t, e, i, n = "center") { const a = { img: {}, container: {} }; if (t === h.SCALE_TO_FILL) { const t = e.focalPoint && function (t) { const e = `${t.x}% ${t.y}%`; return Ot[e] || "" }(e.focalPoint), r = t || n; e.focalPoint && !t ? a.img = { objectPosition: Mt(e, i, e.focalPoint) } : a.img = { objectPosition: At[r] } } else[h.LEGACY_ORIGINAL_SIZE, h.ORIGINAL_SIZE].includes(t) ? a.img = { objectFit: "none", top: "auto", left: "auto", right: "auto", bottom: "auto" } : Gt.includes(t) && (a.container = { backgroundSize: `${e.width}px ${e.height}px` }); return a } function Mt(t, e, i) { const { width: n, height: a } = t, { width: r, height: o } = e, { x: c, y: s } = i; if (!r || !o) return `${c}% ${s}%`; const h = Math.max(r / n, o / a), u = n * h, _ = a * h, T = Math.max(0, Math.min(u - r, u * (c / 100) - r / 2)), l = Math.max(0, Math.min(_ - o, _ * (s / 100) - o / 2)); return `${T && Math.floor(T / (u - r) * 100)}% ${l && Math.floor(l / (_ - o) * 100)}%` } const Ct = { width: "100%", height: "100%" }; function Ft(t, e, i, n = {}) { if (!P(t, e, i)) return E; const { autoEncode: a = !0, isSEOBot: r, shouldLoadHQImage: o, hasAnimation: c, allowWEBPTransform: s } = n, u = k(e.id, c, s); if (!u || o) return Nt(t, e, i, Object.assign(Object.assign({}, n), { autoEncode: a, useSrcset: u })); const _ = Object.assign(Object.assign({}, i), function (t, { width: e, height: i }) { if (!e || !i) { const n = e || Math.min(980, t.width), a = n / t.width; return { width: n, height: i || t.height * a } } return { width: e, height: i } }(e, i)), { alignment: T, htmlTag: l } = _, d = bt(t, e, _), g = function (t, e, { width: i, height: n }, a = !1) { if (a) return { width: i, height: n }; const r = !Rt.includes(t), o = bt(t, e, { width: i, height: n }), c = !o && Gt.includes(t), s = c ? e.width : i, h = c ? e.height : n, u = r ? function (t, e) { return t > 900 ? e ? .05 : .15 : t > 500 ? e ? .1 : .18 : t > 200 ? .25 : 1 }(s, y(e.id)) : 1; return { width: o ? 1920 : s * u, height: h * u } }(t, e, _, r), I = function (t, e, i) { return i ? 0 : Gt.includes(e) ? 1 : t > 200 ? 2 : 3 }(_.width, t, r), L = function (t, e) { const i = Gt.includes(t) && !e; return t === h.SCALE_TO_FILL || i ? h.SCALE_TO_FIT : t }(t, d), p = wt(t, e, i, T), { uri: f } = Nt(L, e, Object.assign(Object.assign({}, g), { alignment: T, htmlTag: l }), { autoEncode: a, filters: I ? { blur: I } : {}, hasAnimation: c, allowWEBPTransform: s }), { attr: m = {}, css: A } = Nt(t, e, Object.assign(Object.assign({}, _), { alignment: T, htmlTag: l }), {}); return A.img = A.img || {}, A.container = A.container || {}, Object.assign(A.img, p.img, Ct), Object.assign(A.container, p.container), { uri: f, css: A, attr: m, transformed: !0 } } function Nt(t, e, i, n) { let a = {}; if (P(t, e, i)) { const r = ct(t, e, i), o = ot(t, e, r, n); a.uri = mt(t, e, r, n, o), (null == n ? void 0 : n.useSrcset) && (a.srcset = function (t, e, i, n, a) { const r = i.pixelAspectRatio || 1; return { dpr: [`${1 === r ? a.uri : mt(t, e, Object.assign(Object.assign({}, i), { pixelAspectRatio: 1 }), n)} 1x`, `${2 === r ? a.uri : mt(t, e, Object.assign(Object.assign({}, i), { pixelAspectRatio: 2 }), n)} 2x`] } }(t, e, r, n, a)), Object.assign(a, function (t, e) { let i; return i = e.htmlTag === d.BG ? J : e.htmlTag === d.SVG ? tt : Q, i(t, e) }(o, r), { transformed: o.transformed }) } else a = E; return a } function St(t, e, i, n) { if (P(t, e, i)) { const a = ct(t, e, i); return { uri: mt(t, e, a, n || {}, ot(t, e, a, n)) } } return { uri: "" } } const Pt = "https://static.wixstatic.com/media/", kt = /^media\//i, yt = "undefined" != typeof window ? window.devicePixelRatio : 1, xt = (t, e) => { const i = e && e.baseHostURL; return i ? `${i}${t}` : (t => kt.test(t) ? `https://static.wixstatic.com/${t}` : `${Pt}${t}`)(t) }; M(), M(); const Yt = { getScaleToFitImageURL: function (t, e, i, n, a, r) { const o = St(h.SCALE_TO_FIT, { id: t, width: e, height: i, name: r && r.name }, { width: n, height: a, htmlTag: d.IMG, alignment: _.CENTER, pixelAspectRatio: yt }, r); return xt(o.uri, r) }, getScaleToFillImageURL: function (t, e, i, n, a, r) { const o = St(h.SCALE_TO_FILL, { id: t, width: e, height: i, name: r && r.name, focalPoint: { x: r && r.focalPoint && r.focalPoint.x, y: r && r.focalPoint && r.focalPoint.y } }, { width: n, height: a, htmlTag: d.IMG, alignment: _.CENTER, pixelAspectRatio: yt }, r); return xt(o.uri, r) }, getCropImageURL: function (t, e, i, n, a, r, o, c, s, u) { const T = St(h.SCALE_TO_FILL, { id: t, width: e, height: i, name: u && u.name, crop: { x: n, y: a, width: r, height: o } }, { width: c, height: s, htmlTag: d.IMG, alignment: _.CENTER, pixelAspectRatio: yt }, u); return xt(T.uri, u) } }, Ht = Pt }, 10718: function (t, e, i) { i.d(e, { Md: function () { return _ }, X3: function () { return h }, Yu: function () { return mt } }); const n = "v1", a = 2, r = 1920, o = 1920, c = 1e3, s = 1e3, h = { SCALE_TO_FILL: "fill", SCALE_TO_FIT: "fit", STRETCH: "stretch", ORIGINAL_SIZE: "original_size", TILE: "tile", TILE_HORIZONTAL: "tile_horizontal", TILE_VERTICAL: "tile_vertical", FIT_AND_TILE: "fit_and_tile", LEGACY_STRIP_TILE: "legacy_strip_tile", LEGACY_STRIP_TILE_HORIZONTAL: "legacy_strip_tile_horizontal", LEGACY_STRIP_TILE_VERTICAL: "legacy_strip_tile_vertical", LEGACY_STRIP_SCALE_TO_FILL: "legacy_strip_fill", LEGACY_STRIP_SCALE_TO_FIT: "legacy_strip_fit", LEGACY_STRIP_FIT_AND_TILE: "legacy_strip_fit_and_tile", LEGACY_STRIP_ORIGINAL_SIZE: "legacy_strip_original_size", LEGACY_ORIGINAL_SIZE: "actual_size", LEGACY_FIT_WIDTH: "fitWidth", LEGACY_FIT_HEIGHT: "fitHeight", LEGACY_FULL: "full", LEGACY_BG_FIT_AND_TILE: "legacy_tile", LEGACY_BG_FIT_AND_TILE_HORIZONTAL: "legacy_tile_horizontal", LEGACY_BG_FIT_AND_TILE_VERTICAL: "legacy_tile_vertical", LEGACY_BG_NORMAL: "legacy_normal" }, u = { FIT: "fit", FILL: "fill", FILL_FOCAL: "fill_focal", CROP: "crop", LEGACY_CROP: "legacy_crop", LEGACY_FILL: "legacy_fill" }, _ = { CENTER: "center", TOP: "top", TOP_LEFT: "top_left", TOP_RIGHT: "top_right", BOTTOM: "bottom", BOTTOM_LEFT: "bottom_left", BOTTOM_RIGHT: "bottom_right", LEFT: "left", RIGHT: "right" }, T = { [_.CENTER]: { x: .5, y: .5 }, [_.TOP_LEFT]: { x: 0, y: 0 }, [_.TOP_RIGHT]: { x: 1, y: 0 }, [_.TOP]: { x: .5, y: 0 }, [_.BOTTOM_LEFT]: { x: 0, y: 1 }, [_.BOTTOM_RIGHT]: { x: 1, y: 1 }, [_.BOTTOM]: { x: .5, y: 1 }, [_.RIGHT]: { x: 1, y: .5 }, [_.LEFT]: { x: 0, y: .5 } }, l = { center: "c", top: "t", top_left: "tl", top_right: "tr", bottom: "b", bottom_left: "bl", bottom_right: "br", left: "l", right: "r" }, d = { BG: "bg", IMG: "img", SVG: "svg" }, g = { AUTO: "auto", CLASSIC: "classic", SUPER: "super" }, I = { classic: 1, super: 2 }, L = { radius: "0.66", amount: "1.00", threshold: "0.01" }, E = { uri: "", css: { img: {}, container: {} }, attr: { img: {}, container: {} }, transformed: !1 }, p = 25e6, f = [1.5, 2, 4], m = { HIGH: { size: 196e4, quality: 90, maxUpscale: 1 }, MEDIUM: { size: 36e4, quality: 85, maxUpscale: 1 }, LOW: { size: 16e4, quality: 80, maxUpscale: 1.2 }, TINY: { size: 0, quality: 80, maxUpscale: 1.4 } }, A = { HIGH: "HIGH", MEDIUM: "MEDIUM", LOW: "LOW", TINY: "TINY" }, O = { CONTRAST: "contrast", BRIGHTNESS: "brightness", SATURATION: "saturation", HUE: "hue", BLUR: "blur" }, G = { JPG: "jpg", JPEG: "jpeg", JPE: "jpe", PNG: "png", WEBP: "webp", WIX_ICO_MP: "wix_ico_mp", WIX_MP: "wix_mp", GIF: "gif", SVG: "svg", UNRECOGNIZED: "unrecognized" }, R = (G.JPG, G.JPEG, G.JPE, G.PNG, G.GIF, G.WEBP, { isMobile: !1 }), b = function (t) { return R[t] }; function w() { if ("undefined" != typeof window && "undefined" != typeof navigator) { const e = window.matchMedia && window.matchMedia("(max-width: 767px)").matches, i = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent); t = e && i, R["isMobile"] = t } var t } function M(t, ...e) { return function (...i) { const n = i[i.length - 1] || {}, a = [t[0]]; return e.forEach((function (e, r) { const o = Number.isInteger(e) ? i[e] : n[e]; a.push(o, t[r + 1]) })), a.join("") } } function C(t) { return t[t.length - 1] } const F = [G.PNG, G.JPEG, G.JPG, G.JPE, G.WIX_ICO_MP, G.WIX_MP, G.WEBP], N = [G.JPEG, G.JPG, G.JPE]; function S(t, e, i) { return i && e && !(!(n = e.id) || !n.trim() || "none" === n.toLowerCase()) && Object.values(h).includes(t); var n } function P(t, e, i) { return !function (t, e, i = !1) { return k(t) && (e || !i) }(t, e, i) && function (t) { return F.includes(B(t)) }(t) && !/(^https?)|(^data)|(^\/\/)/.test(t) } function k(t) { return B(t) === G.WEBP } const y = ["/", "\\", "?", "<", ">", "|", "\u201c", ":", '"'].map(encodeURIComponent), x = ["\\.", "\\*"], Y = "_"; function H(t) { return function (t) { return N.includes(B(t)) }(t) ? G.JPG : function (t) { return B(t) === G.PNG }(t) ? G.PNG : k(t) ? G.WEBP : G.UNRECOGNIZED } function B(t) { return (/[.]([^.]+)$/.exec(t) && /[.]([^.]+)$/.exec(t)[1] || "").toLowerCase() } function U(t, e, i, n, a) { let r; return r = a === u.FILL ? function (t, e, i, n) { return Math.max(i / t, n / e) }(t, e, i, n) : a === u.FIT ? function (t, e, i, n) { return Math.min(i / t, n / e) }(t, e, i, n) : 1, r } function $(t, e, i, n, a, r) { t = t || n.width, e = e || n.height; const { scaleFactor: o, width: c, height: s } = function (t, e, i, n, a) { let r, o = i, c = n; if (r = U(t, e, i, n, a), a === u.FIT && (o = t * r, c = e * r), o && c && o * c > p) { const i = Math.sqrt(p / (o * c)); o *= i, c *= i, r = U(t, e, o, c, a) } return { scaleFactor: r, width: o, height: c } }(t, e, n.width * a, n.height * a, i); return function (t, e, i, n, a, r, o) { const { optimizedScaleFactor: c, upscaleMethodValue: s, forceUSM: h } = function (t, e, i, n) { if ("auto" === n) return function (t, e) { const i = z(t, e); return { optimizedScaleFactor: m[i].maxUpscale, upscaleMethodValue: I.classic, forceUSM: !1 } }(t, e); if ("super" === n) return function (t) { return { optimizedScaleFactor: C(f), upscaleMethodValue: I.super, forceUSM: !(f.includes(t) || t > C(f)) } }(i); return function (t, e) { const i = z(t, e); return { optimizedScaleFactor: m[i].maxUpscale, upscaleMethodValue: I.classic, forceUSM: !1 } }(t, e) }(t, e, r, a); let _ = i, T = n; if (r <= c) return { width: _, height: T, scaleFactor: r, upscaleMethodValue: s, forceUSM: h, cssUpscaleNeeded: !1 }; switch (o) { case u.FILL: _ = i * (c / r), T = n * (c / r); break; case u.FIT: _ = t * c, T = e * c }return { width: _, height: T, scaleFactor: c, upscaleMethodValue: s, forceUSM: h, cssUpscaleNeeded: !0 } }(t, e, c, s, r, o, i) } function v(t, e, i, n) { const a = D(i) || function (t = _.CENTER) { return T[t] }(n); return { x: Math.max(0, Math.min(t.width - e.width, a.x * t.width - e.width / 2)), y: Math.max(0, Math.min(t.height - e.height, a.y * t.height - e.height / 2)), width: Math.min(t.width, e.width), height: Math.min(t.height, e.height) } } function j(t) { return t.alignment && l[t.alignment] || l[_.CENTER] } function D(t) { let e; return !t || "number" != typeof t.x || isNaN(t.x) || "number" != typeof t.y || isNaN(t.y) || (e = { x: Z(Math.max(0, Math.min(100, t.x)) / 100, 2), y: Z(Math.max(0, Math.min(100, t.y)) / 100, 2) }), e } function z(t, e) { const i = t * e; return i > m[A.HIGH].size ? A.HIGH : i > m[A.MEDIUM].size ? A.MEDIUM : i > m[A.LOW].size ? A.LOW : A.TINY } function Z(t, e) { const i = Math.pow(10, e || 0); return (t * i / i).toFixed(e) } function V(t) { return t && t.upscaleMethod && g[t.upscaleMethod.toUpperCase()] || g.AUTO } function W(t, e) { const i = { css: { container: {} } }, { css: n } = i, { fittingType: a } = t; switch (a) { case h.ORIGINAL_SIZE: case h.LEGACY_ORIGINAL_SIZE: case h.LEGACY_STRIP_ORIGINAL_SIZE: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat"; break; case h.SCALE_TO_FIT: case h.LEGACY_STRIP_SCALE_TO_FIT: n.container.backgroundSize = "contain", n.container.backgroundRepeat = "no-repeat"; break; case h.STRETCH: n.container.backgroundSize = "100% 100%", n.container.backgroundRepeat = "no-repeat"; break; case h.SCALE_TO_FILL: case h.LEGACY_STRIP_SCALE_TO_FILL: n.container.backgroundSize = "cover", n.container.backgroundRepeat = "no-repeat"; break; case h.TILE_HORIZONTAL: case h.LEGACY_STRIP_TILE_HORIZONTAL: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x"; break; case h.TILE_VERTICAL: case h.LEGACY_STRIP_TILE_VERTICAL: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y"; break; case h.TILE: case h.LEGACY_STRIP_TILE: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat"; break; case h.LEGACY_STRIP_FIT_AND_TILE: n.container.backgroundSize = "contain", n.container.backgroundRepeat = "repeat"; break; case h.FIT_AND_TILE: case h.LEGACY_BG_FIT_AND_TILE: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat"; break; case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-x"; break; case h.LEGACY_BG_FIT_AND_TILE_VERTICAL: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "repeat-y"; break; case h.LEGACY_BG_NORMAL: n.container.backgroundSize = "auto", n.container.backgroundRepeat = "no-repeat" }switch (e.alignment) { case _.CENTER: n.container.backgroundPosition = "center center"; break; case _.LEFT: n.container.backgroundPosition = "left center"; break; case _.RIGHT: n.container.backgroundPosition = "right center"; break; case _.TOP: n.container.backgroundPosition = "center top"; break; case _.BOTTOM: n.container.backgroundPosition = "center bottom"; break; case _.TOP_RIGHT: n.container.backgroundPosition = "right top"; break; case _.TOP_LEFT: n.container.backgroundPosition = "left top"; break; case _.BOTTOM_RIGHT: n.container.backgroundPosition = "right bottom"; break; case _.BOTTOM_LEFT: n.container.backgroundPosition = "left bottom" }return i } const q = { [_.CENTER]: "center", [_.TOP]: "top", [_.TOP_LEFT]: "top left", [_.TOP_RIGHT]: "top right", [_.BOTTOM]: "bottom", [_.BOTTOM_LEFT]: "bottom left", [_.BOTTOM_RIGHT]: "bottom right", [_.LEFT]: "left", [_.RIGHT]: "right" }, J = { position: "absolute", top: "auto", right: "auto", bottom: "auto", left: "auto" }; function X(t, e) { const i = { css: { container: {}, img: {} } }, { css: n } = i, { fittingType: a } = t, r = e.alignment; switch (n.container.position = "relative", a) { case h.ORIGINAL_SIZE: case h.LEGACY_ORIGINAL_SIZE: t.parts && t.parts.length ? (n.img.width = t.parts[0].width, n.img.height = t.parts[0].height) : (n.img.width = t.src.width, n.img.height = t.src.height); break; case h.SCALE_TO_FIT: case h.LEGACY_FIT_WIDTH: case h.LEGACY_FIT_HEIGHT: case h.LEGACY_FULL: n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "contain", n.img.objectPosition = q[r] || "unset"; break; case h.LEGACY_BG_NORMAL: n.img.width = "100%", n.img.height = "100%", n.img.objectFit = "none", n.img.objectPosition = q[r] || "unset"; break; case h.STRETCH: n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "fill"; break; case h.SCALE_TO_FILL: n.img.width = e.width, n.img.height = e.height, n.img.objectFit = "cover" }if ("number" == typeof n.img.width && "number" == typeof n.img.height && (n.img.width !== e.width || n.img.height !== e.height)) { const t = Math.round((e.height - n.img.height) / 2), i = Math.round((e.width - n.img.width) / 2); Object.assign(n.img, J, function (t, e, i) { return { [_.TOP_LEFT]: { top: 0, left: 0 }, [_.TOP_RIGHT]: { top: 0, right: 0 }, [_.TOP]: { top: 0, left: e }, [_.BOTTOM_LEFT]: { bottom: 0, left: 0 }, [_.BOTTOM_RIGHT]: { bottom: 0, right: 0 }, [_.BOTTOM]: { bottom: 0, left: e }, [_.RIGHT]: { top: t, right: 0 }, [_.LEFT]: { top: t, left: 0 }, [_.CENTER]: { width: i.width, height: i.height, objectFit: "none" } } }(t, i, e)[r]) } return i } function K(t, e) { const i = { css: { container: {} }, attr: { container: {}, img: {} } }, { css: n, attr: a } = i, { fittingType: r } = t, o = e.alignment, { width: c, height: s } = t.src; let T; switch (n.container.position = "relative", r) { case h.ORIGINAL_SIZE: case h.LEGACY_ORIGINAL_SIZE: case h.TILE: t.parts && t.parts.length ? (a.img.width = t.parts[0].width, a.img.height = t.parts[0].height) : (a.img.width = c, a.img.height = s), a.img.preserveAspectRatio = "xMidYMid slice"; break; case h.SCALE_TO_FIT: case h.LEGACY_FIT_WIDTH: case h.LEGACY_FIT_HEIGHT: case h.LEGACY_FULL: a.img.width = "100%", a.img.height = "100%", a.img.transform = "", a.img.preserveAspectRatio = ""; break; case h.STRETCH: a.img.width = e.width, a.img.height = e.height, a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "none"; break; case h.SCALE_TO_FILL: P(t.src.id) ? (a.img.width = e.width, a.img.height = e.height) : (T = function (t, e, i, n, a) { const r = U(t, e, i, n, a); return { width: Math.round(t * r), height: Math.round(e * r) } }(c, s, e.width, e.height, u.FILL), a.img.width = T.width, a.img.height = T.height), a.img.x = 0, a.img.y = 0, a.img.transform = "", a.img.preserveAspectRatio = "xMidYMid slice" }if ("number" == typeof a.img.width && "number" == typeof a.img.height && (a.img.width !== e.width || a.img.height !== e.height)) { let t, i, n = 0, c = 0; r === h.TILE ? (t = e.width % a.img.width, i = e.height % a.img.height) : (t = e.width - a.img.width, i = e.height - a.img.height); const s = Math.round(t / 2), u = Math.round(i / 2); switch (o) { case _.TOP_LEFT: n = 0, c = 0; break; case _.TOP: n = s, c = 0; break; case _.TOP_RIGHT: n = t, c = 0; break; case _.LEFT: n = 0, c = u; break; case _.CENTER: n = s, c = u; break; case _.RIGHT: n = t, c = u; break; case _.BOTTOM_LEFT: n = 0, c = i; break; case _.BOTTOM: n = s, c = i; break; case _.BOTTOM_RIGHT: n = t, c = i }a.img.x = n, a.img.y = c } return a.container.width = e.width, a.container.height = e.height, a.container.viewBox = [0, 0, e.width, e.height].join(" "), i } function Q(t, e, i) { let n; switch (e.crop && (n = function (t, e) { const i = Math.max(0, Math.min(t.width, e.x + e.width) - Math.max(0, e.x)), n = Math.max(0, Math.min(t.height, e.y + e.height) - Math.max(0, e.y)); return i && n && (t.width !== i || t.height !== n) ? { x: Math.max(0, e.x), y: Math.max(0, e.y), width: i, height: n } : null }(e, e.crop), n && (t.src.width = n.width, t.src.height = n.height, t.src.isCropped = !0, t.parts.push(et(n)))), t.fittingType) { case h.SCALE_TO_FIT: case h.LEGACY_FIT_WIDTH: case h.LEGACY_FIT_HEIGHT: case h.LEGACY_FULL: case h.FIT_AND_TILE: case h.LEGACY_BG_FIT_AND_TILE: case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL: case h.LEGACY_BG_FIT_AND_TILE_VERTICAL: case h.LEGACY_BG_NORMAL: t.parts.push(tt(t, i)); break; case h.SCALE_TO_FILL: t.parts.push(function (t, e) { const i = $(t.src.width, t.src.height, u.FILL, e, t.devicePixelRatio, t.upscaleMethod), n = D(t.focalPoint); return { transformType: n ? u.FILL_FOCAL : u.FILL, width: Math.round(i.width), height: Math.round(i.height), alignment: j(e), focalPointX: n && n.x, focalPointY: n && n.y, upscale: i.scaleFactor > 1, forceUSM: i.forceUSM, scaleFactor: i.scaleFactor, cssUpscaleNeeded: i.cssUpscaleNeeded, upscaleMethodValue: i.upscaleMethodValue } }(t, i)); break; case h.STRETCH: t.parts.push(function (t, e) { const i = U(t.src.width, t.src.height, e.width, e.height, u.FILL), n = Object.assign({}, e); return n.width = t.src.width * i, n.height = t.src.height * i, tt(t, n) }(t, i)); break; case h.TILE_HORIZONTAL: case h.TILE_VERTICAL: case h.TILE: case h.LEGACY_ORIGINAL_SIZE: case h.ORIGINAL_SIZE: n = v(t.src, i, t.focalPoint, i.alignment), t.src.isCropped ? (Object.assign(t.parts[0], n), t.src.width = n.width, t.src.height = n.height) : t.parts.push(et(n)); break; case h.LEGACY_STRIP_TILE_HORIZONTAL: case h.LEGACY_STRIP_TILE_VERTICAL: case h.LEGACY_STRIP_TILE: case h.LEGACY_STRIP_ORIGINAL_SIZE: t.parts.push(function (t) { return { transformType: u.LEGACY_CROP, width: Math.round(t.width), height: Math.round(t.height), alignment: j(t), upscale: !1, forceUSM: !1, scaleFactor: 1, cssUpscaleNeeded: !1 } }(i)); break; case h.LEGACY_STRIP_SCALE_TO_FIT: case h.LEGACY_STRIP_FIT_AND_TILE: t.parts.push(function (t) { return { transformType: u.FIT, width: Math.round(t.width), height: Math.round(t.height), upscale: !1, forceUSM: !0, scaleFactor: 1, cssUpscaleNeeded: !1 } }(i)); break; case h.LEGACY_STRIP_SCALE_TO_FILL: t.parts.push(function (t) { return { transformType: u.LEGACY_FILL, width: Math.round(t.width), height: Math.round(t.height), alignment: j(t), upscale: !1, forceUSM: !0, scaleFactor: 1, cssUpscaleNeeded: !1 } }(i)) } } function tt(t, e) { const i = $(t.src.width, t.src.height, u.FIT, e, t.devicePixelRatio, t.upscaleMethod); return { transformType: !t.src.width || !t.src.height ? u.FIT : u.FILL, width: Math.round(i.width), height: Math.round(i.height), alignment: l.center, upscale: i.scaleFactor > 1, forceUSM: i.forceUSM, scaleFactor: i.scaleFactor, cssUpscaleNeeded: i.cssUpscaleNeeded, upscaleMethodValue: i.upscaleMethodValue } } function et(t) { return { transformType: u.CROP, x: Math.round(t.x), y: Math.round(t.y), width: Math.round(t.width), height: Math.round(t.height), upscale: !1, forceUSM: !1, scaleFactor: 1, cssUpscaleNeeded: !1 } } function it(t, e) { var i; e = e || {}, t.quality = function (t, e) { const i = t.fileType === G.PNG, n = t.fileType === G.JPG, a = t.fileType === G.WEBP, r = n || i || a; if (r) { const n = C(t.parts), a = (o = n.width, c = n.height, m[z(o, c)].quality); let r = e.quality && e.quality >= 5 && e.quality <= 90 ? e.quality : a; return r = i ? r + 5 : r, r } var o, c; return 0 }(t, e), t.progressive = function (t) { return !1 !== t.progressive }(e), t.watermark = function (t) { return t.watermark }(e), t.autoEncode = null === (i = e.autoEncode) || void 0 === i || i, t.unsharpMask = function (t, e) { var i, n, a; if (function (t) { const e = "number" == typeof (t = t || {}).radius && !isNaN(t.radius) && t.radius >= .1 && t.radius <= 500, i = "number" == typeof t.amount && !isNaN(t.amount) && t.amount >= 0 && t.amount <= 10, n = "number" == typeof t.threshold && !isNaN(t.threshold) && t.threshold >= 0 && t.threshold <= 255; return e && i && n }(e.unsharpMask)) return { radius: Z(null === (i = e.unsharpMask) || void 0 === i ? void 0 : i.radius, 2), amount: Z(null === (n = e.unsharpMask) || void 0 === n ? void 0 : n.amount, 2), threshold: Z(null === (a = e.unsharpMask) || void 0 === a ? void 0 : a.threshold, 2) }; if (("number" != typeof (r = (r = e.unsharpMask) || {}).radius || isNaN(r.radius) || 0 !== r.radius || "number" != typeof r.amount || isNaN(r.amount) || 0 !== r.amount || "number" != typeof r.threshold || isNaN(r.threshold) || 0 !== r.threshold) && function (t) { const e = C(t.parts); return !(e.scaleFactor >= 1) || e.forceUSM || e.transformType === u.FIT }(t)) return L; var r; return }(t, e), t.filters = function (t) { const e = t.filters || {}, i = {}; nt(e[O.CONTRAST], -100, 100) && (i[O.CONTRAST] = e[O.CONTRAST]); nt(e[O.BRIGHTNESS], -100, 100) && (i[O.BRIGHTNESS] = e[O.BRIGHTNESS]); nt(e[O.SATURATION], -100, 100) && (i[O.SATURATION] = e[O.SATURATION]); nt(e[O.HUE], -180, 180) && (i[O.HUE] = e[O.HUE]); nt(e[O.BLUR], 0, 100) && (i[O.BLUR] = e[O.BLUR]); return i }(e) } function nt(t, e, i) { return "number" == typeof t && !isNaN(t) && 0 !== t && t >= e && t <= i } function at(t, e, i, n) { const r = function (t) { var e; return null !== (e = null == t ? void 0 : t.isSEOBot) && void 0 !== e && e }(n), o = H(e.id), c = function (t, e) { const i = /\.([^.]*)$/, n = new RegExp(`(${y.concat(x).join("|")})`, "g"); if (e && e.length) { let t = e; const a = e.match(i); return a && F.includes(a[1]) && (t = e.replace(i, "")), encodeURIComponent(t).replace(n, Y) } const a = t.match(/\/(.*?)$/); return (a ? a[1] : t).replace(i, "") }(e.id, e.name), s = r ? 1 : function (t) { return Math.min(t.pixelAspectRatio || 1, a) }(i), h = B(e.id), u = h, _ = P(e.id, null == n ? void 0 : n.hasAnimation, null == n ? void 0 : n.allowWEBPTransform), T = { fileName: c, fileExtension: h, fileType: o, fittingType: t, preferredExtension: u, src: { id: e.id, width: e.width, height: e.height, isCropped: !1 }, focalPoint: { x: e.focalPoint && e.focalPoint.x, y: e.focalPoint && e.focalPoint.y }, parts: [], devicePixelRatio: s, quality: 0, upscaleMethod: V(n), progressive: !0, watermark: "", unsharpMask: {}, filters: {}, transformed: _ }; return _ && (Q(T, e, i), it(T, n)), T } function rt(t, e, i) { const n = Object.assign({}, i), a = b("isMobile"); switch (t) { case h.LEGACY_BG_FIT_AND_TILE: case h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL: case h.LEGACY_BG_FIT_AND_TILE_VERTICAL: case h.LEGACY_BG_NORMAL: const t = a ? c : r, i = a ? s : o; n.width = Math.min(t, e.width), n.height = Math.min(i, Math.round(n.width / (e.width / e.height))), n.pixelAspectRatio = 1 }return n } const ot = M`fit/w_${"width"},h_${"height"}`, ct = M`fill/w_${"width"},h_${"height"},al_${"alignment"}`, st = M`fill/w_${"width"},h_${"height"},fp_${"focalPointX"}_${"focalPointY"}`, ht = M`crop/x_${"x"},y_${"y"},w_${"width"},h_${"height"}`, ut = M`crop/w_${"width"},h_${"height"},al_${"alignment"}`, _t = M`fill/w_${"width"},h_${"height"},al_${"alignment"}`, Tt = M`,lg_${"upscaleMethodValue"}`, lt = M`,q_${"quality"}`, dt = M`,usm_${"radius"}_${"amount"}_${"threshold"}`, gt = M`,bl`, It = M`,wm_${"watermark"}`, Lt = { [O.CONTRAST]: M`,con_${"contrast"}`, [O.BRIGHTNESS]: M`,br_${"brightness"}`, [O.SATURATION]: M`,sat_${"saturation"}`, [O.HUE]: M`,hue_${"hue"}`, [O.BLUR]: M`,blur_${"blur"}` }, Et = M`,enc_auto`; function pt(t, e, i, a = {}, r) { return P(e.id, null == a ? void 0 : a.hasAnimation, null == a ? void 0 : a.allowWEBPTransform) ? function (t) { const e = []; t.parts.forEach((t => { switch (t.transformType) { case u.CROP: e.push(ht(t)); break; case u.LEGACY_CROP: e.push(ut(t)); break; case u.LEGACY_FILL: let i = _t(t); t.upscale && (i += Tt(t)), e.push(i); break; case u.FIT: let n = ot(t); t.upscale && (n += Tt(t)), e.push(n); break; case u.FILL: let a = ct(t); t.upscale && (a += Tt(t)), e.push(a); break; case u.FILL_FOCAL: let r = st(t); t.upscale && (r += Tt(t)), e.push(r) } })); let i = e.join("/"); return t.quality && (i += lt(t)), t.unsharpMask && (i += dt(t.unsharpMask)), t.progressive || (i += gt(t)), t.watermark && (i += It(t)), t.filters && (i += Object.keys(t.filters).map((e => Lt[e](t.filters))).join("")), t.autoEncode && t.fileType !== G.GIF && (i += Et(t)), `${t.src.id}/${n}/${i}/${t.fileName}.${t.preferredExtension}` }(r = r || at(t, e, i, a)) : e.id } const ft = { [_.CENTER]: "50% 50%", [_.TOP_LEFT]: "0% 0%", [_.TOP_RIGHT]: "100% 0%", [_.TOP]: "50% 0%", [_.BOTTOM_LEFT]: "0% 100%", [_.BOTTOM_RIGHT]: "100% 100%", [_.BOTTOM]: "50% 100%", [_.RIGHT]: "100% 50%", [_.LEFT]: "0% 50%" }; Object.entries(ft).reduce(((t, [e, i]) => (t[i] = e, t)), {}), h.TILE, h.TILE_HORIZONTAL, h.TILE_VERTICAL, h.LEGACY_BG_FIT_AND_TILE, h.LEGACY_BG_FIT_AND_TILE_HORIZONTAL, h.LEGACY_BG_FIT_AND_TILE_VERTICAL, h.LEGACY_ORIGINAL_SIZE, h.ORIGINAL_SIZE, h.LEGACY_BG_NORMAL; function mt(t, e, i, n) { let a = {}; if (S(t, e, i)) { const r = rt(t, e, i), o = at(t, e, r, n); a.uri = pt(t, e, r, n, o), (null == n ? void 0 : n.useSrcset) && (a.srcset = function (t, e, i, n, a) { const r = i.pixelAspectRatio || 1; return { dpr: [`${1 === r ? a.uri : pt(t, e, Object.assign(Object.assign({}, i), { pixelAspectRatio: 1 }), n)} 1x`, `${2 === r ? a.uri : pt(t, e, Object.assign(Object.assign({}, i), { pixelAspectRatio: 2 }), n)} 2x`] } }(t, e, r, n, a)), Object.assign(a, function (t, e) { let i; return i = e.htmlTag === d.BG ? W : e.htmlTag === d.SVG ? K : X, i(t, e) }(o, r), { transformed: o.transformed }) } else a = E; return a } "undefined" != typeof window && window.devicePixelRatio; w(), w() }, 84240: function (t, e, i) { i.d(e, { A_: function () { return a.A_ }, At: function () { return a.At }, BU: function () { return n.BU }, KT: function () { return a.KT }, P2: function () { return a.P2 }, U2: function () { return r.U2 }, pR: function () { return n.pR } }); var n = i(58047), a = i(65377), r = i(24027) } }]);
      //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/custom-element-utils.inline.12d4ed1c.bundle.min.js.map</script>
  <script
    data-url="https://static.parastorage.com/services/wix-thunderbolt/dist/initCustomElements.inline.66255c78.bundle.min.js">"use strict"; (self.webpackJsonp__wix_thunderbolt_app = self.webpackJsonp__wix_thunderbolt_app || []).push([[3727], {
        87175: function (e, t, i) { i.d(t, { KK: function () { return n }, Ld: function () { return o }, TE: function () { return r }, Vl: function () { return s } }); function n(e, t, i, n, r) { return (r - e) * (n - i) / (t - e) + i } function r(e, t) { let [i, n] = e, [r, s] = t; return Math.sqrt((r - i) ** 2 + (s - n) ** 2) } function s(e) { return e * Math.PI / 180 } function o(e, t, i) { void 0 === e && (e = [0, 0]), void 0 === t && (t = [0, 0]), void 0 === i && (i = 0); return (360 + i + 180 * Math.atan2(t[1] - e[1], t[0] - e[0]) / Math.PI) % 360 } }, 65377: function (e, t, i) { i.d(t, { A_: function () { return s }, At: function () { return o }, KT: function () { return r }, P2: function () { return u }, Yu: function () { return a }, a_: function () { return c }, dL: function () { return d }, tE: function () { return l } }); const n = { columnCount: 1, columns: 1, fontWeight: 1, lineHeight: 1, opacity: 1, zIndex: 1, zoom: 1 }, r = (e, t) => e && t && Object.keys(t).forEach((i => e.setAttribute(i, t[i]))), s = (e, t) => e && t && Object.keys(t).forEach((i => { const r = t[i]; void 0 !== r ? e.style[i] = ((e, t) => "number" != typeof t || n[e] ? t : `${t}px`)(i, r) : e.style.removeProperty(i) })), o = (e, t) => e && t && Object.keys(t).forEach((i => { e.style.setProperty(i, t[i]) })), a = (e, t, i = !0) => { return e && i ? (n = e.dataset[t]) ? "true" === n || "false" !== n && ("null" === n ? null : "" + +n === n ? +n : n) : n : e.dataset[t]; var n }, c = (e, t) => e && t && Object.assign(e.dataset, t), u = e => e || document.documentElement.clientHeight || window.innerHeight || 0, d = () => window ? window.pageYOffset || document.documentElement.scrollTop : 0, l = { fit: "contain", fill: "cover" } }, 58047: function (e, t, i) { i.d(t, { BU: function () { return r }, F$: function () { return c }, Q4: function () { return a }, pR: function () { return u } }); var n = i(80483); const r = (e, t, i, r) => { const { targetWidth: a, targetHeight: c, imageData: u, filters: d, displayMode: l = n.fittingTypes.SCALE_TO_FILL, hasAnimation: h } = e; if (!a || !c || !u.uri) return { uri: "", css: {} }; const { width: g, height: m, crop: v, name: f, focalPoint: b, upscaleMethod: p, quality: w, devicePixelRatio: y = t.devicePixelRatio } = u, O = { filters: d, upscaleMethod: p, ...w, ...r && { allowWEBPTransform: r }, hasAnimation: h }, E = o(y), S = { id: u.uri, width: g, height: m, ...v && { crop: v }, ...b && { focalPoint: b }, ...f && { name: f } }, I = { width: a, height: c, htmlTag: i || "img", pixelAspectRatio: E, alignment: e.alignType || n.alignTypes.CENTER }, x = (0, n.getData)(l, S, I, O); return x.uri = s(x.uri, t.staticMediaUrl, t.mediaRootUrl), x }, s = (e, t, i) => { if (/(^https?)|(^data)|(^blob)|(^\/\/)/.test(e)) return e; let n = `${t}/`; return e && (/^micons\//.test(e) ? n = i : "ico" === /[^.]+$/.exec(e)[0] && (n = n.replace("media", "ficons"))), n + e }, o = e => { const t = window.location.search.split("&").map((e => e.split("="))).find((e => e[0].toLowerCase().includes("devicepixelratio"))); return (t ? Number(t[1]) : null) || e || 1 }, a = (e, t) => e.getAttribute(t ? "xlink:href" : "src"); function c(e) { if (e) { const { type: t } = e.dataset; if (t && "ugc" !== t) { if (!e.dataset.bbox) { const { x: t, y: i, width: n, height: r } = e.getBBox(); return `${t} ${i} ${n} ${r}` } } } return null } function u(e) { return e.isExperimentOpen("specs.thunderbolt.tb_stop_client_images") || e.isExperimentOpen("specs.thunderbolt.final_force_webp") || e.isExperimentOpen("specs.thunderbolt.final_force_no_webp") } }, 97471: function (e, t, i) { i.d(t, { Y: function () { return n } }); const n = () => { const e = { observedElementToRelayoutTarget: new Map, getLayoutTargets(t) { const i = new Set; return t.forEach((t => i.add(e.observedElementToRelayoutTarget.get(t)))), i }, observe: i => { e.observedElementToRelayoutTarget.set(i, i), t.observe(i) }, unobserve: i => { e.observedElementToRelayoutTarget.delete(i), t.unobserve(i) }, observeChild: (i, n) => { e.observedElementToRelayoutTarget.set(i, n), t.observe(i) }, unobserveChild: i => { e.observedElementToRelayoutTarget.delete(i), t.unobserve(i) } }, t = new window.ResizeObserver((t => { e.getLayoutTargets(t.map((e => e.target))).forEach((e => e.reLayout())) })); return e } }, 24027: function (e, t, i) { i.d(t, { Ax: function () { return o }, Tw: function () { return s }, U2: function () { return n }, hr: function () { return a }, w_: function () { return r }, xn: function () { return c } }); const n = (e, t, i) => { const n = (Array.isArray(t) ? t : t.split(".")).reduce(((e, t) => e && void 0 !== e[t] ? e[t] : null), e); return null !== n ? n : i }, r = (e, t) => Object.keys(e).find((i => t(e[i], i))), s = (e, t) => { const i = e.reduce(((e, i) => (e[t(i)] = i, e)), {}); return Object.values(i) }, o = e => e && e.split ? e.split(";").reduce((function (e, t) { const i = t.split(":"); return i[0] && i[1] && (e[i[0].trim()] = i[1].trim()), e }), {}) : {}, a = (e, t = window) => { let i = !1; return (...n) => { i || (i = !0, t.requestAnimationFrame((() => { i = !1, e(...n) }))) } }; function c(...e) { let t = e[0]; for (let i = 1; i < e.length; ++i)t = `${t.replace(/\/$/, "")}/${e[i].replace(/^\//, "")}`; return t } }, 47040: function (e, t, i) {
          var n = {}; i.r(n), i.d(n, { BackgroundParallax: function () { return u }, BackgroundParallaxZoom: function () { return d }, BackgroundReveal: function () { return l }, BgCloseUp: function () { return h }, BgExpand: function () { return g }, BgFabeBack: function () { return m }, BgFadeIn: function () { return v }, BgFadeOut: function () { return f }, BgFake3D: function () { return b }, BgPanLeft: function () { return p }, BgPanRight: function () { return w }, BgParallax: function () { return y }, BgPullBack: function () { return O }, BgReveal: function () { return E }, BgRotate: function () { return S }, BgShrink: function () { return I }, BgSkew: function () { return x }, BgUnwind: function () { return M }, BgZoomIn: function () { return R }, BgZoomOut: function () { return L }, ImageParallax: function () { return A }, ImageReveal: function () { return C } }); var r = i(96114), s = i.n(r), o = i(87175); const a = (e, t) => ({ width: e, height: t }), c = (e, t, i) => ({ width: e, height: Math.max(t, i) }); const u = { hasParallax: !0, getMediaDimensions: c }, d = { hasParallax: !0, getMediaDimensions: c }, l = { hasParallax: !0, getMediaDimensions: c }, h = { getMediaDimensions: a }, g = { getMediaDimensions: a }, m = { getMediaDimensions: a }, v = { getMediaDimensions: a }, f = { getMediaDimensions: a }, b = { hasParallax: !0, getMediaDimensions: c }, p = { getMediaDimensions: (e, t) => ({ width: 1.2 * e, height: t }) }, w = { getMediaDimensions: (e, t) => ({ width: 1.2 * e, height: t }) }, y = { hasParallax: !0, getMediaDimensions: c }, O = { getMediaDimensions: a }, E = { hasParallax: !0, getMediaDimensions: c }, S = { getMediaDimensions: (e, t) => function (e, t, i) { const n = (0, o.Vl)(i), r = Math.hypot(e, t) / 2, s = Math.acos(e / 2 / r), a = e * Math.abs(Math.cos(n)) + t * Math.abs(Math.sin(n)), c = e * Math.abs(Math.sin(n)) + t * Math.abs(Math.cos(n)); return { width: Math.ceil(n < s ? a : 2 * r), height: Math.ceil(n < (0, o.Vl)(90) - s ? c : 2 * r) } }(e, t, 22) }, I = { getMediaDimensions: a }, x = { getMediaDimensions: (e, t) => function (e, t, i) { const n = (0, o.Vl)(i); return { width: e, height: e * Math.tan(n) + t } }(e, t, 20) }, M = { getMediaDimensions: a }, R = { hasParallax: !0, getMediaDimensions: c }, L = { getMediaDimensions: (e, t) => ({ width: 1.15 * e, height: 1.15 * t }) }, A = { getMediaDimensions: (e, t) => ({ width: e, height: 1.5 * t }) }, C = { getMediaDimensions: (e, t, i) => ({ width: e, height: i }) }; var P = i(80483), H = i(24027), T = i(84240); var B = function (e, t, i = window) { const n = { width: void 0, height: void 0, left: void 0 }; return class extends e { constructor() { super() } reLayout() { const { containerId: e, pageId: r, useCssVars: s, bgEffectName: o } = this.dataset, a = i.document.getElementById(`${e}`), c = i.document.getElementById(`${r}`), u = {}; t.mutationService.measure((() => { const e = "fixed" === i.getComputedStyle(this).position, n = (0, T.P2)(t.getScreenHeightOverride?.()), r = a.getBoundingClientRect(), d = t.getMediaDimensionsByEffect(o, r.width, r.height, n), { hasParallax: l } = d, h = (i.getComputedStyle(c).transition || "").includes("transform"), { width: g, height: m } = d, v = `${g}px`, f = `${m}px`; let b = (r.width - g) / 2 + "px"; if (e) { const e = i.document.documentElement.clientLeft; b = h ? a.offsetLeft - e + "px" : r.left - e + "px" } const p = e || l ? 0 : (r.height - m) / 2 + "px", w = s ? { "--containerW": v, "--containerH": f, "--containerL": b, "--screenH_val": `${n}` } : { width: v, height: f, left: b, top: p }; Object.assign(u, w) })), t.mutationService.mutate((() => { s ? ((0, T.A_)(this, n), (0, T.At)(this, u)) : (0, T.A_)(this, u) })) } connectedCallback() { super.connectedCallback(), t.windowResizeService.observe(this) } disconnectedCallback() { super.disconnectedCallback(), t.windowResizeService.unobserve(this) } attributeChangedCallback(e, t) { t && this.reLayout() } static get observedAttributes() { return ["data-is-full-height", "data-container-size"] } } }; var D = function (e, t = window) { class i extends t.HTMLElement { constructor() { super() } reLayout() { } connectedCallback() { this.observeResize(), this.reLayout() } disconnectedCallback() { this.unobserveResize(), this.unobserveChildren() } observeResize() { e.resizeService.observe(this) } unobserveResize() { e.resizeService.unobserve(this) } observeChildren(e) { this.childListObserver || (this.childListObserver = new t.MutationObserver((() => this.reLayout()))), this.childListObserver.observe(e, { childList: !0 }) } observeChildAttributes(e, i = []) { this.childrenAttributesObservers || (this.childrenAttributesObservers = []); const n = new t.MutationObserver((() => this.reLayout())); n.observe(e, { attributeFilter: i }), this.childrenAttributesObservers.push(n) } observeChildResize(t) { this.childrenResizeObservers || (this.childrenResizeObservers = []), e.resizeService.observeChild(t, this), this.childrenResizeObservers.push(t) } unobserveChildrenResize() { this.childrenResizeObservers && (this.childrenResizeObservers.forEach((t => { e.resizeService.unobserveChild(t) })), this.childrenResizeObservers = null) } unobserveChildren() { if (this.childListObserver && (this.childListObserver.disconnect(), this.childListObserver = null), this.childrenAttributesObservers) { for (let e of this.childrenAttributesObservers) e.disconnect(), e = null; this.childrenAttributesObservers = null } this.unobserveChildrenResize() } } return i }, z = i(58047); const k = "scroll-css-var--scrollEffect"; var _ = class { constructor(e, t = window) { this.mutationService = e, (e => e && "IntersectionObserver" in e && "IntersectionObserverEntry" in e && "intersectionRatio" in e.IntersectionObserverEntry.prototype && "isIntersecting" in e.IntersectionObserverEntry.prototype && !(e => /Edge\/18/.test(e.navigator.userAgent))(e))(t) && (this.intersectionObserver = new t.IntersectionObserver(this.getViewPortIntersectionHandler(), { rootMargin: "50% 0px" }), this.scrollEffectsIntersectionObserver = new t.IntersectionObserver(this.getScrollEffectsIntersectionHandler(), { rootMargin: "10% 0px" })) } isImageInViewPort(e, t) { return e.top + e.height >= 0 && e.bottom - e.height <= t } loadImage(e, { screenHeight: t, boundingRect: i, withScrollEffectVars: n }) { !this.intersectionObserver || this.isImageInViewPort(i, t) ? this.setImageSource(e) : (this.intersectionObserver.unobserve(e), this.intersectionObserver.observe(e)), n && this.scrollEffectsIntersectionObserver && (this.scrollEffectsIntersectionObserver.unobserve(e), this.scrollEffectsIntersectionObserver.observe(e)) } onImageDisconnected(e) { this.intersectionObserver && this.intersectionObserver.unobserve(e), this.scrollEffectsIntersectionObserver && this.scrollEffectsIntersectionObserver.unobserve(e) } setSrcAttribute(e, t, i, n) { (0, z.Q4)(e, t) !== n && (t ? e.setAttributeNS("http://www.w3.org/1999/xlink", "xlink:href", n) : (e.hasAttribute("loading") && e.removeAttribute("loading"), i && e.setAttribute("srcset", n), e.setAttribute("fetchpriority", "high"), e.src = n)) } setSourceSetAttribute(e, t) { e.srcset !== t && (e.srcset = t) } setImageSource(e) { const t = "true" === e.dataset.isSvg, i = e.querySelector(t ? "image" : "img"), n = i.hasAttribute("srcset"), r = e.querySelector("picture"); this.setSrcAttribute(i, t, n, e.dataset.src), r && Array.from(r.querySelectorAll("source")).forEach((e => { this.setSourceSetAttribute(e, e.dataset.srcset) })) } getViewPortIntersectionHandler() { return (e, t) => { e.filter((e => e.isIntersecting)).forEach((e => { const i = e.target; this.setImageSource(i), t.unobserve(i) })) } } getScrollEffectsIntersectionHandler() { return e => e.forEach((e => { const t = e.target; e.isIntersecting ? this.mutationService.mutate((() => t.classList.add(k))) : this.mutationService.mutate((() => t.classList.remove(k))) })) } }; const j = 80; var W = { measure: function (e, t, i, { containerElm: n, isSvgImage: r, isSvgMask: s, mediaHeightOverrideType: o, bgEffectName: a }, c) { const u = i.image, d = i[e], l = (0, T.P2)(c.getScreenHeightOverride?.()), h = n && a ? n : d, { width: g, height: m } = c.getMediaDimensionsByEffect(a, h.offsetWidth, h.offsetHeight, l); if (!u) return; const v = (0, z.Q4)(u, r); t.width = g, t.screenHeight = l, t.height = function (e, t) { return "fixed" === e || "viewport" === e ? document.documentElement.clientHeight + j : t }(o, m), t.isZoomed = d.getAttribute("data-image-zoomed"), t.isSvgImage = r, t.imgSrc = v, t.renderedStyles = d.getAttribute("data-style"), t.boundingRect = d.getBoundingClientRect(), t.mediaHeightOverrideType = o, s && (t.bBox = (0, z.F$)(i.maskSvg)) }, patch: function (e, t, i, n, r, s, o, a) { if (!Object.keys(t).length) return; const c = (0, H.Ax)(t.renderedStyles), { imageData: u } = n; a && (u.devicePixelRatio = 1); const d = n.targetScale || 1, l = { ...n, ...n.skipMeasure ? {} : { targetWidth: (t.isZoomed ? u.width : t.width) * d, targetHeight: (t.isZoomed ? u.height : t.height) * d }, displayMode: u.displayMode }; let h; if (t.isSvgImage) h = (0, T.BU)(l, s, "svg"), (0, T.KT)(i.svg, t.isZoomed ? h.attr.container : {}); else { h = (0, T.BU)(l, s, "img"); const e = (0, T.U2)(h, ["css", "img"]) || {}, n = function (e, t, i, n) { const r = function (e, t = 1) { return 1 !== t ? { ...e, width: "100%", height: "100%" } : e }(t, n); if (!e) return r; const s = { ...r }; return "fill" === i && (s.position = "absolute", s.top = 0), "fit" === i && (s.height = "100%"), "fixed" === e && (s["will-change"] = "transform"), s.objectPosition && (s.objectPosition = t.objectPosition.replace(/(center|bottom)$/, "top")), s }(t.mediaHeightOverrideType, e, u.displayMode, d); (0, T.A_)(i.image, n) } t.bBox && i.maskSvg && (0, T.KT)(i.maskSvg, { viewBox: t.bBox }); const g = function (e, t) { const i = function (e) { const { ...t } = e, i = {}; for (e in t) "" !== t[e] && (i[e] = t[e]); return i }(e); return "number" == typeof t && (i.opacity = t), i }(c, u.opacity); (0, T.A_)(i[e], g); const m = (0, T.U2)(h, "uri"), v = { "data-src": m, "data-has-ssr-src": "" }; (0, T.KT)(i[e], v), s.disableImagesLazyLoading && (0, T.KT)(i.image, { src: m }), o && r.imageLoader.loadImage(i[e], { screenHeight: t.screenHeight, boundingRect: t.boundingRect }) } }, U = i(65377); const $ = "--compH", q = "--top", N = "--scroll", V = { parallax: "ImageParallax", fixed: "ImageReveal" }; function F(e, t, i = 1.5) { return { parallax: e.height * i, fixed: e.screenHeight }[t] || e.height } var K = { measure: function (e, t, i) { const n = i.image; if (!n) return; const r = (0, z.Q4)(n); t.width = i[e].offsetWidth, t.height = i[e].offsetHeight, t.imgSrc = r, t.screenHeight = (0, T.P2)(), t.boundingRect = i[e].getBoundingClientRect(), t.documentScroll = (0, U.dL)() }, patch: function (e, t, i, n, r, s, o) { const { imageData: a, parallaxSpeed: c } = n, u = !r.isExperimentOpen?.("specs.thunderbolt.useNewImageParallax"), d = { ...n, targetWidth: t.width, targetHeight: u ? F(t, a.scrollEffect, c) : r.getMediaDimensionsByEffect(V[a.scrollEffect], t.width, t.height, t.screenHeight).height, displayMode: a.displayMode }, l = function (e) { const t = {}; return "number" == typeof e && (t.opacity = e), t }(a.opacity); (0, T.A_)(i[e], l); const h = r.isExperimentOpen?.("specs.thunderbolt.allowWEBPTransformation"), g = (0, T.BU)(d, s, "img", h), m = (0, T.U2)(g, "uri"); (0, T.KT)(i[e], { "data-src": m }); const v = function (e, t = []) { return "parallax" === e || t.some((e => "parallax" === e.scrollEffect)) }(a.scrollEffect, n.sourceSets); v && (0, T.At)(i[e], function (e) { return { [$]: e.height, [q]: Math.ceil(e.boundingRect.top) + e.documentScroll, [N]: e.documentScroll } }(t)); const f = function (e) { const t = (0, T.U2)(e, ["css", "img"]); return { width: "100%", objectFit: t ? t.objectFit : void 0 } }(g); (0, T.A_)(i.image, f), i.picture && function (e, t, i, n, r, s) { const { sourceSets: o } = t; if (!o || !o.length) return; const a = JSON.parse(JSON.stringify(t)), { parallaxSpeed: c } = a; o.forEach((t => { const o = n.querySelector(`source[media='${t.mediaQuery}']`); a.imageData.crop = t.crop, a.imageData.displayMode = t.displayMode, a.imageData.focalPoint = t.focalPoint, a.targetHeight = r ? F(e, a.imageData.scrollEffect, c) : s.getMediaDimensionsByEffect(V[t.scrollEffect], e.width, e.height, e.screenHeight).height; const u = (0, T.BU)(a, i, "img"); (0, T.KT)(o, { "data-srcset": (0, T.U2)(u, "uri") }) })) }(t, d, s, i.picture, u, r), (0, T.KT)(i[e], { "data-has-ssr-src": "" }), o && r.imageLoader.loadImage(i[e], { screenHeight: t.screenHeight, boundingRect: t.boundingRect, withScrollEffectVars: v }) } }; var Q = function (e, t, i, n = window) { return t.imageLoader || (t.imageLoader = new _(t.mutationService, n)), class extends e { constructor() { super(), this.childListObserver = null, this.timeoutId = null } reLayout() { if ((0, T.pR)(t)) return; const e = {}, r = {}, s = this.getAttribute("id"), o = JSON.parse(this.dataset.imageInfo), a = "true" === this.dataset.isSvg, c = "true" === this.dataset.isSvgMask, u = "true" === this.dataset.isResponsive, { bgEffectName: d } = this.dataset; e[s] = this, o.containerId && (e[o.containerId] = n.document.getElementById(`${o.containerId}`)), e.image = this.querySelector(a ? "image" : "img"), e.svg = a ? this.querySelector("svg") : null, e.picture = this.querySelector("picture"); const l = o.containerId && e[o.containerId], h = l && l.dataset.mediaHeightOverrideType; if (c && (e.maskSvg = e.svg && e.svg.querySelector("svg")), !e.image) { const t = a && e.svg || this; return void this.observeChildren(t) } this.unobserveChildren(), this.observeChildren(this); const g = u || e.picture ? K : W; t.mutationService.measure((() => { g.measure(s, r, e, { containerElm: l, isSvg: a, isSvgMask: c, mediaHeightOverrideType: h, bgEffectName: d }, t) })); const m = n => { t.mutationService.mutate((() => { g.patch(s, r, e, o, t, i, n, d) })) }; !(0, z.Q4)(e.image, a) || this.dataset.hasSsrSrc ? m(!0) : this.debounceImageLoad(m) } debounceImageLoad(e) { clearTimeout(this.timeoutId), this.timeoutId = setTimeout((() => { e(!0) }), 250), e(!1) } attributeChangedCallback(e, t) { t && this.reLayout() } disconnectedCallback() { super.disconnectedCallback(), t.imageLoader.onImageDisconnected(this), this.unobserveChildren() } static get observedAttributes() { return ["data-image-info"] } } }; var Z = i(97471); var J = {
            imageClientApi: P, ...{
              init: function (e, t = window) {
                !
function (e) { if (void 0 === e.Reflect || void 0 === e.customElements || e.customElements.hasOwnProperty("polyfillWrapFlushCallback")) return; const t = e.HTMLElement; e.HTMLElement = function () { return e.Reflect.construct(t, [], this.constructor) }, e.HTMLElement.prototype = t.prototype, e.HTMLElement.prototype.constructor = e.HTMLElement, e.Object.setPrototypeOf(e.HTMLElement, t), e.Object.defineProperty(e.HTMLElement, "name", { value: t.name }) }(t); const i = { registry: new Set, observe(e) { i.registry.add(e) }, unobserve(e) { i.registry.delete(e) } }; e.windowResizeService.init((0, H.hr)((() => i.registry.forEach((e => e.reLayout())))), t); const n = (0, Z.Y)(), r = (e, i) => { void 0 === t.customElements.get(e) && t.customElements.define(e, i) }, s = D({ resizeService: n }, t); return t.customElementNamespace = { WixElement: s }, r("wix-element", s), { contextWindow: t, defineWixImage: (e, i) => { const n = Q(s, e, i, t); r("wix-image", n) }, defineWixBgMedia: e => { const n = B(s, { windowResizeService: i, ...e }, t); r("wix-bg-media", n) } }
              }
            }
          }, Y = i(10718); const X = { columnCount: 1, columns: 1, fontWeight: 1, lineHeight: 1, opacity: 1, zIndex: 1, zoom: 1 }, G = (e, t) => (Array.isArray(t) ? t : [t]).reduce(((t, i) => { const n = e[i]; return void 0 !== n ? Object.assign(t, { [i]: n }) : t }), {}), ee = (e, t) => e && t && Object.keys(t).forEach((i => { const n = t[i]; void 0 !== n ? e.style[i] = ((e, t) => "number" != typeof t || X[e] ? t : `${t}px`)(i, n) : e.style.removeProperty(i) })), te = (e, t, i) => { var n; if (/(^https?)|(^data)|(^blob)|(^\/\/)/.test(e)) return e; let r = `${t}/`; return e && (/^micons\//.test(e) ? r = i : "ico" === (null === (n = /[^.]+$/.exec(e)) || void 0 === n ? void 0 : n[0]) && (r = r.replace("media", "ficons"))), r + e }, ie = e => { const t = window.location.search.split("&").map((e => e.split("="))).find((e => e[0].toLowerCase().includes("devicepixelratio"))); return (t ? Number(t[1]) : null) || e || 1 }, ne = e => e.getAttribute("src"), re = () => window && "IntersectionObserver" in window && "IntersectionObserverEntry" in window && "intersectionRatio" in window.IntersectionObserverEntry.prototype && "isIntersecting" in window.IntersectionObserverEntry.prototype && !/Edge\/18/.test(window.navigator.userAgent); var se = class { constructor(e) { this.mutationService = e, re() && (this.intersectionObserver = new IntersectionObserver(this.getViewPortIntersectionHandler(), { rootMargin: "50% 0px" })) } isImageInViewPort(e, t) { return e.top + e.height >= 0 && e.bottom - e.height <= t } loadImage(e, { screenHeight: t, boundingRect: i }) { !this.intersectionObserver || this.isImageInViewPort(i, t) ? this.setImageSource(e) : (this.intersectionObserver.unobserve(e), this.intersectionObserver.observe(e)) } onImageDisconnected(e) { this.intersectionObserver && this.intersectionObserver.unobserve(e) } setSrcAttribute(e, t) { ne(e) !== t && (e.setAttribute("fetchpriority", "high"), e.src = t, e.hasAttribute("srcset") && (e.srcset = t)) } setImageSource(e) { const t = e.querySelector("img"); this.setSrcAttribute(t, e.dataset.src) } getViewPortIntersectionHandler() { return (e, t) => { e.filter((e => e.isIntersecting)).forEach((e => { const i = e.target; this.setImageSource(i), t.unobserve(i) })) } } }; const oe = 80; function ae(e, t, i, n) { const r = function (e, t = 1) { return 1 !== t ? Object.assign(Object.assign({}, e), { width: "100%", height: "100%" }) : e }(t, n); if (!e) return r; const s = Object.assign({}, r); return "fill" === i ? (s.position = "absolute", s.top = "0") : "fit" === i && (s.height = "100%"), "fixed" === e && (s["will-change"] = "transform"), s.objectPosition && (s.objectPosition = t.objectPosition.replace(/(center|bottom)$/, "top")), s } var ce = { measure: function (e, t, i, { containerElm: n, bgEffectName: r = "none" }, s) { var o, a; const c = i.image, u = i[e], d = (null === (o = s.getScreenHeightOverride) || void 0 === o ? void 0 : o.call(s)) || document.documentElement.clientHeight || window.innerHeight || 0, l = null == n ? void 0 : n.dataset.mediaHeightOverrideType, h = n && r && "none" !== r ? n : u, { width: g, height: m } = (null === (a = s.getMediaDimensionsByEffect) || void 0 === a ? void 0 : a.call(s, r, h.offsetWidth, h.offsetHeight, d)) || { width: u.offsetWidth, height: u.offsetHeight }; if (!c) return; const v = ne(c); t.width = g, t.height = function (e, t) { return "fixed" === t || "viewport" === t ? document.documentElement.clientHeight + oe : e }(m, l), t.screenHeight = d, t.imgSrc = v, t.boundingRect = u.getBoundingClientRect(), t.mediaHeightOverrideType = l }, patch: function (e, t, i, n, r, s, o, a) { var c, u, d, l; if (!Object.keys(t).length) return; const { imageData: h } = n, g = i[e], m = i.image; a && (h.devicePixelRatio = 1); const v = n.targetScale || 1, f = ((e, t, i, n) => { if (!e.targetWidth || !e.targetHeight || !e.imageData.uri) return { uri: "", css: {}, transformed: !1 }; const { imageData: r } = e, s = e.displayMode || Y.X3.SCALE_TO_FILL, o = Object.assign(G(r, ["upscaleMethod", "hasAnimation"]), G(e, "filters"), e.quality || r.quality, n && { allowWEBPTransform: n }), a = e.imageData.devicePixelRatio || t.devicePixelRatio, c = ie(a), u = Object.assign(G(r, ["width", "height", "crop", "name", "focalPoint"]), { id: r.uri }), d = { width: e.targetWidth, height: e.targetHeight, htmlTag: i || "img", pixelAspectRatio: c, alignment: e.alignType || Y.Md.CENTER }, l = (0, Y.Yu)(s, u, d, o); return l.uri = te(l.uri, t.staticMediaUrl, t.mediaRootUrl), l })(Object.assign(Object.assign(Object.assign({}, n), !n.skipMeasure && { targetWidth: (t.width || 0) * v, targetHeight: (t.height || 0) * v }), { displayMode: h.displayMode }), s, "img", null === (c = r.isExperimentOpen) || void 0 === c ? void 0 : c.call(r, "specs.thunderbolt.allowWEBPTransformation")), b = (null === (u = null == f ? void 0 : f.css) || void 0 === u ? void 0 : u.img) || {}, p = ae(t.mediaHeightOverrideType, b, h.displayMode, v); ee(m, p); const w = (null == f ? void 0 : f.uri) || ""; g.setAttribute("data-src", w), g.setAttribute("data-has-ssr-src", ""), !(null === (d = r.isExperimentOpen) || void 0 === d ? void 0 : d.call(r, "specs.thunderbolt.wowImageRelayout")) && s.disableImagesLazyLoading && m.setAttribute("src", w), n.isLQIP && n.lqipTransition && !("transitioned" in g.dataset) && (g.dataset.transitioned = "", m.complete ? m.onload = function () { m.dataset.loadDone = "" } : m.onload = function () { m.complete ? m.dataset.loadDone = "" : m.onload = function () { m.dataset.loadDone = "" } }), o && ((null === (l = r.isExperimentOpen) || void 0 === l ? void 0 : l.call(r, "specs.thunderbolt.wowImageRelayout")) ? (m.setAttribute("fetchpriority", "high"), m.currentSrc !== w && m.setAttribute("src", w), m.srcset && m.srcset !== w && m.setAttribute("srcset", w)) : r.imageLoader.loadImage(g, { screenHeight: t.screenHeight, boundingRect: t.boundingRect })) } }; var ue = function (e, t, i) { var n; const r = null === (n = e.isExperimentOpen) || void 0 === n ? void 0 : n.call(e, "specs.thunderbolt.wowImageRelayout"); return e.imageLoader || r || (e.imageLoader = new se(e.mutationService)), class extends i.HTMLElement { constructor() { super(), this.childListObserver = null, this.timeoutId = null } attributeChangedCallback(e, t) { t && this.reLayout() } connectedCallback() { r ? t.disableImagesLazyLoading ? this.reLayout() : this.observeIntersect() : (this.observeResize(), this.reLayout()) } disconnectedCallback() { this.unobserveResize(), this.unobserveIntersect(), !r && e.imageLoader.onImageDisconnected(this), this.unobserveChildren() } static get observedAttributes() { return ["data-image-info"] } reLayout() { const n = {}, r = {}, s = this.getAttribute("id"), o = JSON.parse(this.dataset.imageInfo || ""), { bgEffectName: a } = this.dataset; n[s] = this, o.containerId && (n[o.containerId] = i.document.getElementById(`${o.containerId}`)), n.image = this.querySelector("img"); const c = o.containerId ? n[o.containerId] : void 0; if (!n.image) { const e = this; return void this.observeChildren(e) } this.unobserveChildren(), this.observeChildren(this), e.mutationService.measure((() => { ce.measure(s, r, n, { containerElm: c, bgEffectName: a }, e) })); const u = i => { e.mutationService.mutate((() => { ce.patch(s, r, n, o, e, t, i, a) })) }; !ne(n.image) || this.dataset.hasSsrSrc ? u(!0) : this.debounceImageLoad(u) } debounceImageLoad(e) { clearTimeout(this.timeoutId), this.timeoutId = i.setTimeout((() => { e(!0) }), 250), e(!1) } observeResize() { var t; null === (t = e.resizeService) || void 0 === t || t.observe(this) } unobserveResize() { var t; null === (t = e.resizeService) || void 0 === t || t.unobserve(this) } observeIntersect() { var t; null === (t = e.intersectionService) || void 0 === t || t.observe(this) } unobserveIntersect() { var t; null === (t = e.intersectionService) || void 0 === t || t.unobserve(this) } observeChildren(e) { this.childListObserver || (this.childListObserver = new i.MutationObserver((() => { this.reLayout() }))), this.childListObserver.observe(e, { childList: !0 }) } unobserveChildren() { this.childListObserver && (this.childListObserver.disconnect(), this.childListObserver = null) } } }; function de(e = {}, t = null, i = {}) { var n; if ("undefined" == typeof window) return; const r = Object.assign({ staticMediaUrl: "https://static.wixstatic.com/media", mediaRootUrl: "https://static.wixstatic.com", experiments: {}, devicePixelRatio: /iemobile/i.test(navigator.userAgent) ? Math.round(window.screen.availWidth / (window.screen.width || window.document.documentElement.clientWidth)) : window.devicePixelRatio }, i), o = function (e, t) { const i = "wow-image"; if (void 0 === (e = e || window).customElements.get(i)) { let n, r; return e.ResizeObserver && (n = new e.ResizeObserver((e => e.map((e => e.target.reLayout()))))), t && e.IntersectionObserver && (r = new IntersectionObserver(((e, t) => e.map((e => { const t = e.target; return e.isIntersecting && (t.unobserveIntersect(), t.observeResize()), e }))), { rootMargin: "50% 0px" })), function (t, s) { const o = ue(Object.assign({ resizeService: n, intersectionService: r }, t), s, e); e.customElements.define(i, o) } } }(t, !!(null === (n = e.isExperimentOpen) || void 0 === n ? void 0 : n.call(e, "specs.thunderbolt.wowImageRelayout"))); o && o(Object.assign({ mutationService: s() }, e), r) } const le = () => ({ getSiteScale: () => { const e = document.querySelector("#site-root"); return e ? e.getBoundingClientRect().width / e.offsetWidth : 1 } }), he = () => { const e = { init: e => new ResizeObserver(e) }, t = { init: e => window.addEventListener("resize", e) }, i = le(); return J.init({ resizeService: e, windowResizeService: t, siteService: i }) }, ge = (e, t, i, r) => { const { getMediaDimensions: s, ...o } = n[e] || {}; return s ? { ...s(t, i, r), ...o } : { width: t, height: i, ...o } }, { experiments: me, media: ve, requestUrl: fe } = window.viewerModel; ((e, t, i, n) => { const { environmentConsts: r, wixCustomElements: o, media: a, requestUrl: c, mediaServices: u } = ((e, t, i, n) => { const r = { staticMediaUrl: e.media.staticMediaUrl, mediaRootUrl: e.media.mediaRootUrl, experiments: {}, isViewerMode: !0, devicePixelRatio: /iemobile/i.test(navigator.userAgent) ? Math.round(window.screen.availWidth / (window.screen.width || window.document.documentElement.clientWidth)) : window.devicePixelRatio, ...n }, o = { mutationService: s(), isExperimentOpen: t => Boolean(e.experiments[t]), siteService: le() }, a = { getMediaDimensionsByEffect: ge, ...o, ...i }; return { ...e, wixCustomElements: t || he(), services: o, environmentConsts: r, mediaServices: a } })(e, t, i, n), d = o?.contextWindow || window; d.wixCustomElements = o, Object.assign(d.customElementNamespace, { mediaServices: u, environmentConsts: r, requestUrl: c, staticVideoUrl: a.staticVideoUrl }), de({ ...u }, o.contextWindow, r), o.defineWixImage(u, r), o.defineWixBgMedia(u), window.__imageClientApi__ = J.imageClientApi })({ experiments: me, media: ve, requestUrl: fe })
        }
      }, function (e) { e.O(0, [6008, 774], (function () { return t = 47040, e(e.s = t); var t })); e.O() }]);
      //# sourceMappingURL=https://static.parastorage.com/services/wix-thunderbolt/dist/initCustomElements.inline.66255c78.bundle.min.js.map</script>


  <div id="SITE_CONTAINER">
    <div id="main_MF" class="wix-global-css">
      <div id="SCROLL_TO_TOP" class="Vd6aQZ ignore-focus SCROLL_TO_TOP" tabindex="-1" role="region"
        aria-label="top of page"><span class="mHZSwn">top of page</span></div>
      <div id="BACKGROUND_GROUP" class="BACKGROUND_GROUP">
        <div id="BACKGROUND_GROUP_TRANSITION_GROUP">
          <div id="pageBackground_c1dmp" data-media-height-override-type="" data-media-position-override="false"
            class="pageBackground_c1dmp BmZ5pC">
            <div id="bgLayers_pageBackground_c1dmp" data-hook="bgLayers" class="MW5IWV">
              <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
              <div id="bgMedia_pageBackground_c1dmp" class="VgO9Yg"></div>
              <div data-testid="bgOverlay" class="m4khSP"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="site-root" class="site-root">
        <div id="masterPage" class="mesh-layout masterPage css-editing-scope">
          <header class="SITE_HEADER_WRAPPER" tabindex="-1" id="SITE_HEADER_WRAPPER">
            <div id="SITE_HEADER" class="AT7o0U SITE_HEADER wixui-header" tabindex="-1">
              <div class="lvxhkV"></div>
              <div class="cKxVkc">
                <div class="vlM3HR"></div>
                <div class="VrZrC0">
                  <div data-mesh-id="SITE_HEADERinlineContent" data-testid="inline-content" class="">
                    <div data-mesh-id="SITE_HEADERinlineContent-gridContainer" data-testid="mesh-container-content">
                      <div id="comp-iiyoh68p" class="KcpHeO tz5f0K comp-iiyoh68p wixui-rich-text"
                        data-testid="richTextElement">
                        <p class="font_8 wixui-rich-text__text" style="font-size:14px; line-height:1.4em;"><span
                            style="font-size:14px;" class="wixui-rich-text__text"><span style="letter-spacing:0.04em;"
                              class="wixui-rich-text__text">22 W 32nd St. 2nd FL</span></span></p>

                        <p class="font_8 wixui-rich-text__text" style="font-size:14px; line-height:1.4em;"><span
                            style="font-size:14px;" class="wixui-rich-text__text"><span style="letter-spacing:0.04em;"
                              class="wixui-rich-text__text">New York, </span></span><span style="font-size:14px;"
                            class="wixui-rich-text__text"><span style="letter-spacing:0.04em;"
                              class="wixui-rich-text__text">NY 10001<br class="wixui-rich-text__text">
                              Tel: 212-473-2233</span></span></p>

                        <p class="font_8 wixui-rich-text__text" style="font-size:14px; line-height:1.4em;"><span
                            style="color:#605e5e;" class="wixui-rich-text__text"><span style="font-style:normal;"
                              class="wixui-rich-text__text"><span style="font-family:futura-lt-w01-light,sans-serif;"
                                class="wixui-rich-text__text"><span style="font-weight:400;"
                                  class="wixui-rich-text__text"><span style="font-size:15px;"
                                    class="wixui-rich-text__text"><span class="wixui-rich-text__text"><span
                                        style="letter-spacing:0.04em;" class="wixui-rich-text__text">SUN - THUR: 11:30
                                        AM</span></span></span></span></span></span></span><span style="color:#605e5e;"
                            class="wixui-rich-text__text"><span style="font-style:normal;"
                              class="wixui-rich-text__text"><span style="font-family:futura-lt-w01-light,sans-serif;"
                                class="wixui-rich-text__text"><span style="font-weight:400;"
                                  class="wixui-rich-text__text"><span style="font-size:15px;"
                                    class="wixui-rich-text__text"><span class="wixui-rich-text__text"><span
                                        style="letter-spacing:0.04em;" class="wixui-rich-text__text">&nbsp;to 12
                                        AM</span></span></span></span></span></span></span></p>

                        <p class="font_8 wixui-rich-text__text" style="font-size:14px; line-height:1.4em;"><span
                            style="color:#605e5e;" class="wixui-rich-text__text"><span style="font-style:normal;"
                              class="wixui-rich-text__text"><span style="font-family:futura-lt-w01-light,sans-serif;"
                                class="wixui-rich-text__text"><span style="font-weight:400;"
                                  class="wixui-rich-text__text"><span style="font-size:15px;"
                                    class="wixui-rich-text__text"><span class="wixui-rich-text__text"><span
                                        style="letter-spacing:0.04em;" class="wixui-rich-text__text">FRI - SAT: 11:30
                                        AM</span></span></span></span></span></span></span><span style="color:#605e5e;"
                            class="wixui-rich-text__text"><span style="font-style:normal;"
                              class="wixui-rich-text__text"><span style="font-family:futura-lt-w01-light,sans-serif;"
                                class="wixui-rich-text__text"><span style="font-weight:400;"
                                  class="wixui-rich-text__text"><span style="font-size:15px;"
                                    class="wixui-rich-text__text"><span class="wixui-rich-text__text"><span
                                        style="letter-spacing:0.04em;" class="wixui-rich-text__text">&nbsp;to 1
                                        AM</span></span></span></span></span></span></span></p>
                      </div>
                      <div id="comp-lar1zhpq" class="MazNVa comp-lar1zhpq wixui-image rYiAuL"><a
                          data-testid="linkElement" data-anchor="anchors-lar0agp8" href="https://www.jongrobbqny.com"
                          target="_self" class="j7pOnl"><wow-image id="img_comp-lar1zhpq" class="HlRz5e BI8PVQ"
                            data-image-info="{&quot;containerId&quot;:&quot;comp-lar1zhpq&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:239,&quot;targetHeight&quot;:48,&quot;isLQIP&quot;:false,&quot;imageData&quot;:{&quot;width&quot;:1092,&quot;height&quot;:219,&quot;uri&quot;:&quot;f8d167_d92fbeb7008441ae9616eac63fc5ec17~mv2.png&quot;,&quot;name&quot;:&quot;jongro -logo.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}"
                            data-bg-effect-name="" data-has-ssr-src=""><img
                              src="https://static.wixstatic.com/media/f8d167_d92fbeb7008441ae9616eac63fc5ec17~mv2.png/v1/fill/w_239,h_48,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/jongro%20-logo.png"
                              alt="jongro -logo.png" style="width:239px;height:48px;object-fit:cover" width="239"
                              height="48"
                              srcSet="https://static.wixstatic.com/media/f8d167_d92fbeb7008441ae9616eac63fc5ec17~mv2.png/v1/fill/w_239,h_48,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/jongro%20-logo.png 1x, https://static.wixstatic.com/media/f8d167_d92fbeb7008441ae9616eac63fc5ec17~mv2.png/v1/fill/w_478,h_96,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/jongro%20-logo.png 2x"
                              fetchpriority="high" /></wow-image></a></div>
                      <div id="comp-isk4ohho" class="OQ8Tzd comp-isk4ohho pvlz2w"><iframe class="nKphmK"
                          title="Restaurant Social Bar" aria-label="Restaurant Social Bar" scrolling="no"
                          allowfullscreen="" allowtransparency="true" allowvr="true" frameBorder="0"
                          allow="autoplay;camera;microphone;geolocation;vr"></iframe></div>
                      <div id="comp-ikma4r17" class="comp-ikma4r17 aVng1S wixui-horizontal-line"></div>
                      
                        <nav class="M7xqIM" id="comp-iiyocj9vnavContainer" aria-label="Site">
                          <ul class="u3EESp" id="comp-iiyocj9vitemsContainer" style="text-align:center"
                            data-marginallchildren="true">
                            <li id="comp-iiyocj9v0" data-direction="ltr" data-listposition="left"
                              data-data-id="dataItem-ldd7xvio" data-state="menu selected  link" data-index="0"
                              class="TafeAK wixui-dropdown-menu__item YpXDcR"><a data-testid="linkElement"
                                href="https://www.jongrobbqny.com" target="_self" class="k4lUhh" aria-haspopup="false">
                                <div class="ob2JAA">
                                  <div class="" style="text-align:center">
                                    <p class="Y6hOVq" style="text-align:center" id="comp-iiyocj9v0label">Home</p>
                                  </div>
                                </div>
                              </a></li>
                            <li id="comp-iiyocj9v1" data-direction="ltr" data-listposition="center"
                              data-data-id="dataItem-ldd7xviq" data-state="menu false  link" data-index="1"
                              class="TafeAK wixui-dropdown-menu__item YpXDcR"><a data-testid="linkElement"
                                href="https://www.jongrobbqny.com/menu" target="_self" class="k4lUhh"
                                aria-haspopup="false">
                                <div class="ob2JAA">
                                  <div class="" style="text-align:center">
                                    <p class="Y6hOVq" style="text-align:center" id="comp-iiyocj9v1label">Dinner Menu</p>
                                  </div>
                                </div>
                              </a></li>
                            <li id="comp-iiyocj9v2" data-direction="ltr" data-listposition="center"
                              data-data-id="dataItem-ldd7xviq1" data-state="menu false  link" data-index="2"
                              class="TafeAK wixui-dropdown-menu__item YpXDcR"><a data-testid="linkElement"
                                href="https://www.jongrobbqny.com/drink-menu" target="_self" class="k4lUhh"
                                aria-haspopup="false">
                                <div class="ob2JAA">
                                  <div class="" style="text-align:center">
                                    <p class="Y6hOVq" style="text-align:center" id="comp-iiyocj9v2label">Drink Menu</p>
                                  </div>
                                </div>
                              </a></li>
                            <li id="comp-iiyocj9v3" data-direction="ltr" data-listposition="center"
                              data-data-id="dataItem-ldd7xviq3" data-state="menu false  link" data-index="3"
                              class="TafeAK wixui-dropdown-menu__item YpXDcR"><a data-testid="linkElement"
                                href="https://www.jongrobbqny.com/lunch-menu" target="_self" class="k4lUhh"
                                aria-haspopup="false">
                                <div class="ob2JAA">
                                  <div class="" style="text-align:center">
                                    <p class="Y6hOVq" style="text-align:center" id="comp-iiyocj9v3label">Lunch Menu</p>
                                  </div>
                                </div>
                              </a></li>
                            <li id="comp-iiyocj9v4" data-direction="ltr" data-listposition="center"
                              data-data-id="dataItem-ldd7xviq8" data-state="menu false  link" data-index="4"
                              class="TafeAK wixui-dropdown-menu__item YpXDcR"><a data-testid="linkElement"
                                href="https://www.jongrobbqny.com/gallery-03" target="_self" class="k4lUhh"
                                aria-haspopup="false">
                                <div class="ob2JAA">
                                  <div class="" style="text-align:center">
                                    <p class="Y6hOVq" style="text-align:center" id="comp-iiyocj9v4label">Gallery</p>
                                  </div>
                                </div>
                              </a></li>
                            <li id="comp-iiyocj9v5" data-direction="ltr" data-listposition="right"
                              data-data-id="dataItem-ldd7xviq10" data-state="menu false  link" data-index="5"
                              class="TafeAK wixui-dropdown-menu__item YpXDcR"><a data-testid="linkElement"
                                href="https://www.jongrobbqny.com/contact-us" target="_self" class="k4lUhh"
                                aria-haspopup="false">
                                <div class="ob2JAA">
                                  <div class="" style="text-align:center">
                                    <p class="Y6hOVq" style="text-align:center" id="comp-iiyocj9v5label">Contact Us</p>
                                  </div>
                                </div>
                              </a></li>
                            <li id="comp-iiyocj9v__more__" data-direction="ltr" data-listposition="right"
                              data-state="menu false  header" data-index="__more__" data-dropdown="false"
                              class="_xHFQk YpXDcR">
                              <div data-testid="linkElement" class="k4lUhh" tabindex="0" aria-haspopup="false">
                                <div class="ob2JAA">
                                  <div class="" style="text-align:center">
                                    <p class="Y6hOVq" style="text-align:center" id="comp-iiyocj9v__more__label">More...
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <div class="P19w8a" id="comp-iiyocj9vdropWrapper" data-dropalign="center"
                            data-dropdown-shown="false">
                            <ul class="K4Tw6A wixui-dropdown-menu__submenu" id="comp-iiyocj9vmoreContainer"></ul>
                          </div>
                          <div style="display:none" id="comp-iiyocj9vnavContainer-hiddenA11ySubMenuIndication">Use tab
                            to navigate through the menu items.</div>
                        </nav>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <main id="PAGES_CONTAINER" class="PAGES_CONTAINER" tabindex="-1" data-main-content="true">
            <div id="SITE_PAGES" data-page-transition="OutIn" class="JshATs SITE_PAGES">
              <div id="SITE_PAGES_TRANSITION_GROUP" class="fcNEqv">
                <div id="c1dmp" class="dBAkHi c1dmp">
                  <div class="PFkO7r wixui-page" data-testid="page-bg"></div>
                  <div class="HT5ybB">
                    <div id="Containerc1dmp" class="Containerc1dmp SPY_vo">
                      <div data-mesh-id="Containerc1dmpinlineContent" data-testid="inline-content" class="">
                        <div data-mesh-id="Containerc1dmpinlineContent-gridContainer"
                          data-testid="mesh-container-content">
                          <section id="comp-lar0agms" tabindex="-1" class="Oqnisf comp-lar0agms wixui-section"
                            data-block-level-container="ClassicSection">
                            <div id="bgLayers_comp-lar0agms" data-hook="bgLayers" class="MW5IWV">
                              <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                              <div id="bgMedia_comp-lar0agms" class="VgO9Yg"></div>
                            </div>
                            <div data-mesh-id="comp-lar0agmsinlineContent" data-testid="inline-content" class="">
                              <div data-mesh-id="comp-lar0agmsinlineContent-gridContainer"
                                data-testid="mesh-container-content">
                                <section id="comp-iiynwx6x" class="comp-iiynwx6x CohWsy wixui-column-strip">
                                  <div id="bgLayers_comp-iiynwx6x" data-hook="bgLayers" class="if7Vw2">
                                    <div data-testid="colorUnderlay" class="tcElKx i1tH8h"></div>
                                    <div id="bgMedia_comp-iiynwx6x" class="wG8dni"></div>
                                  </div>
                                  <div data-testid="columns" class="V5AUxf">
                                    <div id="mediaisk4n9id1" class="mediaisk4n9id1 YzqVVZ wixui-column-strip__column">
                                      <div id="bgLayers_mediaisk4n9id1" data-hook="bgLayers" class="MW5IWV N3eg0s">
                                        <wix-bg-media id="bgMedia_mediaisk4n9id1" class="SUz0WK"
                                          data-container-id="mediaisk4n9id1" data-container-size="0, 0"
                                          data-page-id="c1dmp" data-bg-effect-name="BgParallax"><wix-video
                                            id="videoContainer_mediaisk4n9id1"
                                            data-video-info="{&quot;fittingType&quot;:&quot;fill&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;hasBgScrollEffect&quot;:&quot;true&quot;,&quot;bgEffectName&quot;:&quot;BgParallax&quot;,&quot;videoId&quot;:&quot;f8d167_61869a2867d54cb9a0982b0860ef3354&quot;,&quot;videoWidth&quot;:1920,&quot;videoHeight&quot;:1080,&quot;qualities&quot;:[{&quot;quality&quot;:&quot;480p&quot;,&quot;size&quot;:409920,&quot;url&quot;:&quot;video/f8d167_61869a2867d54cb9a0982b0860ef3354/480p/mp4/file.mp4&quot;},{&quot;quality&quot;:&quot;720p&quot;,&quot;size&quot;:921600,&quot;url&quot;:&quot;video/f8d167_61869a2867d54cb9a0982b0860ef3354/720p/mp4/file.mp4&quot;},{&quot;quality&quot;:&quot;1080p&quot;,&quot;size&quot;:2073600,&quot;url&quot;:&quot;video/f8d167_61869a2867d54cb9a0982b0860ef3354/1080p/mp4/file.mp4&quot;}],&quot;isVideoDataExists&quot;:&quot;1&quot;,&quot;videoFormat&quot;:&quot;mp4&quot;,&quot;playbackRate&quot;:1,&quot;autoPlay&quot;:true,&quot;containerId&quot;:&quot;mediaisk4n9id1&quot;,&quot;animatePoster&quot;:&quot;none&quot;}"
                                            class="bX9O_S bgVideo yK6aSC"><video id="mediaisk4n9id1_video"
                                              class="K8MSra" role="presentation" crossorigin="anonymous" playsinline=""
                                              preload="auto" muted="" loop="" tabindex="-1"></video><wow-image
                                              id="mediaisk4n9id1_img" class="HlRz5e Z_wCwr Jxk_UL bgVideoposter yK6aSC"
                                              data-image-info="{&quot;containerId&quot;:&quot;mediaisk4n9id1&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:980,&quot;targetHeight&quot;:591,&quot;isLQIP&quot;:true,&quot;imageData&quot;:{&quot;width&quot;:1920,&quot;height&quot;:1080,&quot;uri&quot;:&quot;f8d167_61869a2867d54cb9a0982b0860ef3354f000.jpg&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;quality&quot;:{&quot;unsharpMask&quot;:{&quot;radius&quot;:0.33,&quot;amount&quot;:1,&quot;threshold&quot;:0}},&quot;devicePixelRatio&quot;:1}}"
                                              data-bg-effect-name="BgParallax" data-has-ssr-src="true"><img
                                                src="https://static.wixstatic.com/media/f8d167_61869a2867d54cb9a0982b0860ef3354f000.jpg/v1/fill/w_147,h_83,al_c,q_80,usm_0.66_1.00_0.01,blur_2,enc_auto/f8d167_61869a2867d54cb9a0982b0860ef3354f000.jpg"
                                                alt=""
                                                style="width:100%;height:100%;object-fit:cover;object-position:50% 50%"
                                                width="980" height="591" /></wow-image></wix-video></wix-bg-media></div>
                                      <div data-mesh-id="mediaisk4n9id1inlineContent" data-testid="inline-content"
                                        class="mwF7X1">
                                        <div data-mesh-id="mediaisk4n9id1inlineContent-gridContainer"
                                          data-testid="mesh-container-content">
                                          <div id="comp-k668r3wk" class="tI1Qp6 comp-k668r3wk">
                                            <div class="xPEAfP wixui-box" data-testid="container-bg"></div>
                                            <div data-mesh-id="comp-k668r3wkinlineContent" data-testid="inline-content"
                                              class="">
                                              <div data-mesh-id="comp-k668r3wkinlineContent-gridContainer"
                                                data-testid="mesh-container-content">
                                                <div id="comp-k668rui3"
                                                  class="BaOVQ8 tz5f0K comp-k668rui3 wixui-rich-text"
                                                  data-testid="richTextElement">
                                                  <h1 class="font_8 wixui-rich-text__text"
                                                    style="font-size:18px; line-height:1.5em; text-align:center;"><span
                                                      style="font-size:18px;" class="wixui-rich-text__text"><span
                                                        style="font-weight:bold;" class="wixui-rich-text__text"><span
                                                          style="letter-spacing:0.3em;" class="wixui-rich-text__text">An
                                                          Authentic Experience to Korean BBQ</span></span></span></h1>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </section>
                                <div id="comp-jf1l87or" style="display:none"></div>
                              </div>
                            </div>
                          </section>
                          <section id="comp-lar0agms1" tabindex="-1" class="Oqnisf comp-lar0agms1 wixui-section"
                            data-block-level-container="ClassicSection">
                            <div id="bgLayers_comp-lar0agms1" data-hook="bgLayers" class="MW5IWV">
                              <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                              <div id="bgMedia_comp-lar0agms1" class="VgO9Yg"></div>
                            </div>
                            <div data-mesh-id="comp-lar0agms1inlineContent" data-testid="inline-content" class="">
                              <div data-mesh-id="comp-lar0agms1inlineContent-gridContainer"
                                data-testid="mesh-container-content">
                                <div id="comp-iiyovcdd" class="BaOVQ8 tz5f0K comp-iiyovcdd wixui-rich-text"
                                  data-testid="richTextElement">
                                  <h2 class="font_6 wixui-rich-text__text" style="font-size:15px;"><span
                                      style="font-size:15px;" class="wixui-rich-text__text"><span
                                        style="letter-spacing:0.2em;" class="wixui-rich-text__text">OUR
                                        RESTAURANT</span></span></h2>
                                </div>
                                <div id="comp-iiyox278" class="BaOVQ8 tz5f0K comp-iiyox278 wixui-rich-text"
                                  data-testid="richTextElement">
                                  <h3 class="font_4 wixui-rich-text__text" style="font-size:35px;"><span
                                      style="font-size:35px;" class="wixui-rich-text__text"><span
                                        style="font-weight:bold;" class="wixui-rich-text__text"><span
                                          style="letter-spacing:0.04em;" class="wixui-rich-text__text">Top-tier Korean
                                          BBQ with an unbeatable price point in Koreatown</span></span></span></h3>
                                </div>
                                <div id="comp-kkt4613o" class="MazNVa comp-kkt4613o wixui-image">
                                  <div data-testid="linkElement" class="j7pOnl"><wow-image id="img_comp-kkt4613o"
                                      class="HlRz5e BI8PVQ"
                                      data-image-info="{&quot;containerId&quot;:&quot;comp-kkt4613o&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:951,&quot;targetHeight&quot;:332,&quot;isLQIP&quot;:false,&quot;imageData&quot;:{&quot;width&quot;:9834,&quot;height&quot;:3435,&quot;uri&quot;:&quot;f8d167_086e48ab68e64bc99c011e3d226b4127~mv2.jpg&quot;,&quot;name&quot;:&quot;jongrobbq.jpg&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}"
                                      data-bg-effect-name="" data-has-ssr-src=""><img
                                        src="https://static.wixstatic.com/media/f8d167_086e48ab68e64bc99c011e3d226b4127~mv2.jpg/v1/fill/w_951,h_332,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/jongrobbq.jpg"
                                        alt="jongrobbq.jpg" style="width:951px;height:332px;object-fit:cover"
                                        width="951" height="332"
                                        srcSet="https://static.wixstatic.com/media/f8d167_086e48ab68e64bc99c011e3d226b4127~mv2.jpg/v1/fill/w_951,h_332,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/jongrobbq.jpg 1x, https://static.wixstatic.com/media/f8d167_086e48ab68e64bc99c011e3d226b4127~mv2.jpg/v1/fill/w_1902,h_664,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/jongrobbq.jpg 2x"
                                        fetchpriority="high" /></wow-image></div>
                                </div>
                                <div id="comp-iiyomgay" class="MazNVa comp-iiyomgay wixui-image">
                                  <div data-testid="linkElement" class="j7pOnl"><wow-image id="img_comp-iiyomgay"
                                      class="HlRz5e BI8PVQ"
                                      data-image-info="{&quot;containerId&quot;:&quot;comp-iiyomgay&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:438,&quot;targetHeight&quot;:487,&quot;isLQIP&quot;:true,&quot;imageData&quot;:{&quot;width&quot;:1980,&quot;height&quot;:1320,&quot;uri&quot;:&quot;f8d167_09f54a7316494ad29f821deb4e204fcb~mv2.jpg&quot;,&quot;name&quot;:&quot;12.JPG&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}"
                                      data-bg-effect-name="" data-has-ssr-src="true"><img
                                        src="https://static.wixstatic.com/media/f8d167_09f54a7316494ad29f821deb4e204fcb~mv2.jpg/v1/fill/w_110,h_73,al_c,q_80,usm_0.66_1.00_0.01,blur_2,enc_auto/12_JPG.jpg"
                                        alt="12.JPG"
                                        style="width:100%;height:100%;object-fit:cover;object-position:50% 50%"
                                        width="438" height="487" /></wow-image></div>
                                </div>
                                <div id="comp-iiyp0tvu" class="BaOVQ8 tz5f0K comp-iiyp0tvu wixui-rich-text"
                                  data-testid="richTextElement">
                                  <p class="font_7 wixui-rich-text__text" style="font-size:19px; line-height:1.4em;">
                                    <span class="color_15 wixui-rich-text__text"><span style="font-size:19px;"
                                        class="wixui-rich-text__text"><span style="letter-spacing:0.04em;"
                                          class="wixui-rich-text__text">Jongro BBQ is one of the many elite chain
                                          restaurants in South Korea.&nbsp;Jongro BBQ&nbsp;first opened its doors in
                                          America in 2015, in the heart of New York City, at&nbsp;Koreatown.&nbsp;At
                                          Jongro BBQ, we are committed&nbsp;to freshness and tradition. To
                                          guarantee&nbsp;freshness of our meats to all our customers, we never
                                          use&nbsp;frozen meat. Instead,&nbsp;Jongro BBQ operates on having
                                          our&nbsp;primal cuts delivered daily. All meats are&nbsp;butchered in-house,
                                          marinated to order, and cooked at your table&nbsp;with laser thermometers and
                                          overhead smoke lamps to ensure unparalleled
                                          freshness.&nbsp;</span></span></span></p>
                                </div>
                                <div id="comp-kk2vm6tn" class="BaOVQ8 tz5f0K comp-kk2vm6tn wixui-rich-text"
                                  data-testid="richTextElement">
                                  <p class="font_7 wixui-rich-text__text" style="font-size:19px;"><span
                                      class="color_15 wixui-rich-text__text"><span style="font-size:19px;"
                                        class="wixui-rich-text__text"><span style="letter-spacing:0.04em;"
                                          class="wixui-rich-text__text">One dish in particular that keeps everyone
                                          coming back is&nbsp;the Beef Platter. It&#39;s a decadent spread of brisket,
                                          skirt steak, ribeye, marinated chuck, and&nbsp;kalbi,&nbsp;or marinated short
                                          rib. The Beef Platter is&nbsp;fully equipped with
                                          traditional&nbsp;banchan&nbsp;offerings such as kimchi, sliced
                                          jalape&ntilde;os, clay pot-cooked egg, stew, and
                                          more.&nbsp;</span></span></span></p>
                                </div>
                                <div id="comp-iiyp7ttr" class="MazNVa comp-iiyp7ttr wixui-image">
                                  <div data-testid="linkElement" class="j7pOnl"><wow-image id="img_comp-iiyp7ttr"
                                      class="HlRz5e BI8PVQ"
                                      data-image-info="{&quot;containerId&quot;:&quot;comp-iiyp7ttr&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:558,&quot;targetHeight&quot;:320,&quot;isLQIP&quot;:true,&quot;imageData&quot;:{&quot;width&quot;:1080,&quot;height&quot;:809,&quot;uri&quot;:&quot;f8d167_8c34ba9dc8e244368a9c4a091a9c1f4d~mv2.jpg&quot;,&quot;name&quot;:&quot;129197835_743147146306667_71220626140907&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}"
                                      data-bg-effect-name="" data-has-ssr-src="true"><img
                                        src="https://static.wixstatic.com/media/f8d167_8c34ba9dc8e244368a9c4a091a9c1f4d~mv2.jpg/v1/fill/w_77,h_58,al_c,q_80,usm_0.66_1.00_0.01,blur_2,enc_auto/129197835_743147146306667_71220626140907.jpg"
                                        alt="129197835_743147146306667_71220626140907"
                                        style="width:100%;height:100%;object-fit:cover;object-position:50% 50%"
                                        width="558" height="320" /></wow-image></div>
                                </div>
                                <div id="comp-kk309w4n" class="BaOVQ8 tz5f0K comp-kk309w4n wixui-rich-text"
                                  data-testid="richTextElement">
                                  <p class="font_7 wixui-rich-text__text" style="font-size:15px;">Photo Credits: IG
                                    @partyoftwofoodies</p>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
          <footer class="SITE_FOOTER_WRAPPER" tabindex="-1" id="SITE_FOOTER_WRAPPER">
            <div id="SITE_FOOTER" class="xU8fqS SITE_FOOTER wixui-footer" tabindex="-1">
              <div class="_C0cVf">
                <div class="_4XcTfy" data-testid="screenWidthContainerBg"></div>
              </div>
              <div class="U4Bvut">
                <div class="G5K6X8">
                  <div class="gUbusX" data-testid="screenWidthContainerBgCenter"></div>
                </div>
                <div class="CJF7A2">
                  <div data-mesh-id="SITE_FOOTERinlineContent" data-testid="inline-content" class="">
                    <div data-mesh-id="SITE_FOOTERinlineContent-gridContainer" data-testid="mesh-container-content">
                      <div id="comp-isk4pse2" class="OQ8Tzd comp-isk4pse2 pvlz2w"><iframe class="nKphmK"
                          title="Restaurant Social Bar" aria-label="Restaurant Social Bar" scrolling="no"
                          allowfullscreen="" allowtransparency="true" allowvr="true" frameBorder="0"
                          allow="autoplay;camera;microphone;geolocation;vr"></iframe></div>
                      <div id="comp-iiypz9bh" class="KcpHeO tz5f0K comp-iiypz9bh wixui-rich-text"
                        data-testid="richTextElement">
                        <p class="font_7 wixui-rich-text__text" style="font-size:13px; line-height:normal;"><span
                            style="font-size:13px;" class="wixui-rich-text__text"><span style="letter-spacing:0.04em;"
                              class="wixui-rich-text__text"><span class="color_11 wixui-rich-text__text">&copy;2022 by
                                Jongro BBQ</span></span></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
      <div id="SCROLL_TO_BOTTOM" class="Vd6aQZ ignore-focus SCROLL_TO_BOTTOM" tabindex="-1" role="region"
        aria-label="bottom of page"><span class="mHZSwn">bottom of page</span></div>
    </div>
  </div>
 


  <link
    href="https://siteassets.parastorage.com/pages/pages/thunderbolt?appDefinitionIdToSiteRevision=%7B%2214271d6f-ba62-d045-549b-ab972ae1f70e%22%3A%2218%22%2C%2214bcded7-0066-7c35-14d7-466cb3f09103%22%3A%221035%22%7D&beckyExperiments=specs.thunderbolt.compCssMappers_catharsis%3Atrue%2Cspecs.thunderbolt.supportSpxInEEMappers%3Atrue%2Cspecs.thunderbolt.one_cell_grid_display_flex%3Atrue%2Cspecs.thunderbolt.MediaContainerAndPageBackgroundMapper%3Atrue%2Cspecs.thunderbolt.backgroundColorPerBreakpoint%3Atrue%2Cspecs.thunderbolt.edixIsInFirstFold%3Atrue%2Cspecs.thunderbolt.expandColorPalette%3Atrue%2Cspecs.thunderbolt.app_reflow_with_lightboxes%3Atrue%2Cspecs.thunderbolt.DatePickerPortal%3Atrue%2Cspecs.thunderbolt.wowImageRelayout%3Atrue%2Cspecs.thunderbolt.useElementoryRelativePath%3Atrue%2Cspecs.thunderbolt.removeStickyTopVar%3Atrue%2Cspecs.thunderbolt.render_all_tabs%3Atrue%2Cspecs.thunderbolt.enableTriggersOnDynamicMount%3Atrue%2Cspecs.thunderbolt.mesh_css_catharsis%3Atrue%2Cspecs.thunderbolt.DDMenuMigrateCssCarmiMapper%3Atrue%2Cspecs.thunderbolt.responsiveShapeDividersPublic%3Atrue%2Cspecs.thunderbolt.compsMeasuresCss_catharsis%3Atrue%2Cspecs.thunderbolt.customElemCollapsedheight%3Atrue%2Cspecs.thunderbolt.displayRefComponentsAsBlock%3Atrue%2Cspecs.thunderbolt.theme_fonts_colors_catharsis%3Atrue%2Cspecs.thunderbolt.catharsis_fontFaces%3Atrue&contentType=application%2Fjson&deviceType=Desktop&dfCk=6&dfVersion=1.2837.0&disableStaticPagesUrlHierarchy=false&editorName=Unknown&experiments=bv_remove_add_chat_viewer_fixer%2Cdm_linkTargetDefaults%2Cdm_removePageDataUnderTranslations&externalBaseUrl=https%3A%2F%2Fwww.jongrobbqny.com&fileId=3d1cc950.bundle.min&formFactor=desktop&hasTPAWorkerOnSite=false&isHttps=true&isInSeo=false&isMultilingualEnabled=false&isPremiumDomain=true&isTrackClicksAnalyticsEnabled=false&isUrlMigrated=true&isWixCodeOnPage=false&isWixCodeOnSite=false&language=en&languageResolutionMethod=QueryParam&metaSiteId=1e0b0d35-783a-46fe-b689-34428327a179&module=thunderbolt-features&originalLanguage=en&pageId=f8d167_ab6734b5e8acaa62ea53ae7fc632df59_124.json&quickActionsMenuEnabled=false&registryLibrariesTopology=%5B%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22wixui%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11595.0%22%7D%2C%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22dsgnsys%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11595.0%22%7D%5D&remoteWidgetStructureBuilderVersion=1.238.0&siteId=721b1d9a-937b-4409-831a-8b7f5427299f&siteRevision=124&staticHTMLComponentUrl=https%3A%2F%2Fwww-jongrobbqny-com.filesusr.com%2F&useSandboxInHTMLComp=false&viewMode=desktop"
    id="features_masterPage" as="fetch" position="post-scripts" rel="preload" crossorigin="anonymous">
  </link>


  <link
    href="https://siteassets.parastorage.com/pages/pages/thunderbolt?appDefinitionIdToSiteRevision=%7B%2214271d6f-ba62-d045-549b-ab972ae1f70e%22%3A%2218%22%2C%2214bcded7-0066-7c35-14d7-466cb3f09103%22%3A%221035%22%7D&beckyExperiments=specs.thunderbolt.compCssMappers_catharsis%3Atrue%2Cspecs.thunderbolt.supportSpxInEEMappers%3Atrue%2Cspecs.thunderbolt.one_cell_grid_display_flex%3Atrue%2Cspecs.thunderbolt.MediaContainerAndPageBackgroundMapper%3Atrue%2Cspecs.thunderbolt.backgroundColorPerBreakpoint%3Atrue%2Cspecs.thunderbolt.edixIsInFirstFold%3Atrue%2Cspecs.thunderbolt.expandColorPalette%3Atrue%2Cspecs.thunderbolt.app_reflow_with_lightboxes%3Atrue%2Cspecs.thunderbolt.DatePickerPortal%3Atrue%2Cspecs.thunderbolt.wowImageRelayout%3Atrue%2Cspecs.thunderbolt.useElementoryRelativePath%3Atrue%2Cspecs.thunderbolt.removeStickyTopVar%3Atrue%2Cspecs.thunderbolt.render_all_tabs%3Atrue%2Cspecs.thunderbolt.enableTriggersOnDynamicMount%3Atrue%2Cspecs.thunderbolt.mesh_css_catharsis%3Atrue%2Cspecs.thunderbolt.DDMenuMigrateCssCarmiMapper%3Atrue%2Cspecs.thunderbolt.responsiveShapeDividersPublic%3Atrue%2Cspecs.thunderbolt.compsMeasuresCss_catharsis%3Atrue%2Cspecs.thunderbolt.customElemCollapsedheight%3Atrue%2Cspecs.thunderbolt.displayRefComponentsAsBlock%3Atrue%2Cspecs.thunderbolt.theme_fonts_colors_catharsis%3Atrue%2Cspecs.thunderbolt.catharsis_fontFaces%3Atrue&contentType=application%2Fjson&deviceType=Desktop&dfCk=6&dfVersion=1.2837.0&disableStaticPagesUrlHierarchy=false&editorName=Unknown&experiments=bv_remove_add_chat_viewer_fixer%2Cdm_linkTargetDefaults%2Cdm_removePageDataUnderTranslations&externalBaseUrl=https%3A%2F%2Fwww.jongrobbqny.com&fileId=3d1cc950.bundle.min&formFactor=desktop&hasTPAWorkerOnSite=false&isHttps=true&isInSeo=false&isMultilingualEnabled=false&isPremiumDomain=true&isTrackClicksAnalyticsEnabled=false&isUrlMigrated=true&isWixCodeOnPage=false&isWixCodeOnSite=false&language=en&languageResolutionMethod=QueryParam&metaSiteId=1e0b0d35-783a-46fe-b689-34428327a179&module=thunderbolt-features&originalLanguage=en&pageId=f8d167_f98f7fb741c8fab9929473a085ae248e_123.json&quickActionsMenuEnabled=false&registryLibrariesTopology=%5B%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22wixui%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11595.0%22%7D%2C%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22dsgnsys%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11595.0%22%7D%5D&remoteWidgetStructureBuilderVersion=1.238.0&siteId=721b1d9a-937b-4409-831a-8b7f5427299f&siteRevision=124&staticHTMLComponentUrl=https%3A%2F%2Fwww-jongrobbqny-com.filesusr.com%2F&useSandboxInHTMLComp=false&viewMode=desktop"
    id="features_c1dmp" as="fetch" position="post-scripts" rel="preload" crossorigin="anonymous">
  </link>


  <link
    href="https://siteassets.parastorage.com/pages/pages/thunderbolt?appDefinitionIdToSiteRevision=%7B%2214271d6f-ba62-d045-549b-ab972ae1f70e%22%3A%2218%22%2C%2214bcded7-0066-7c35-14d7-466cb3f09103%22%3A%221035%22%7D&beckyExperiments=specs.thunderbolt.compCssMappers_catharsis%3Atrue%2Cspecs.thunderbolt.supportSpxInEEMappers%3Atrue%2Cspecs.thunderbolt.one_cell_grid_display_flex%3Atrue%2Cspecs.thunderbolt.MediaContainerAndPageBackgroundMapper%3Atrue%2Cspecs.thunderbolt.backgroundColorPerBreakpoint%3Atrue%2Cspecs.thunderbolt.edixIsInFirstFold%3Atrue%2Cspecs.thunderbolt.expandColorPalette%3Atrue%2Cspecs.thunderbolt.app_reflow_with_lightboxes%3Atrue%2Cspecs.thunderbolt.DatePickerPortal%3Atrue%2Cspecs.thunderbolt.wowImageRelayout%3Atrue%2Cspecs.thunderbolt.useElementoryRelativePath%3Atrue%2Cspecs.thunderbolt.removeStickyTopVar%3Atrue%2Cspecs.thunderbolt.render_all_tabs%3Atrue%2Cspecs.thunderbolt.enableTriggersOnDynamicMount%3Atrue%2Cspecs.thunderbolt.mesh_css_catharsis%3Atrue%2Cspecs.thunderbolt.DDMenuMigrateCssCarmiMapper%3Atrue%2Cspecs.thunderbolt.responsiveShapeDividersPublic%3Atrue%2Cspecs.thunderbolt.compsMeasuresCss_catharsis%3Atrue%2Cspecs.thunderbolt.customElemCollapsedheight%3Atrue%2Cspecs.thunderbolt.displayRefComponentsAsBlock%3Atrue%2Cspecs.thunderbolt.theme_fonts_colors_catharsis%3Atrue%2Cspecs.thunderbolt.catharsis_fontFaces%3Atrue&contentType=application%2Fjson&dfCk=6&dfVersion=1.2837.0&editorName=Unknown&experiments=bv_remove_add_chat_viewer_fixer%2Cdm_linkTargetDefaults%2Cdm_removePageDataUnderTranslations&externalBaseUrl=https%3A%2F%2Fwww.jongrobbqny.com&fileId=cd01d7bf.bundle.min&formFactor=desktop&hasTPAWorkerOnSite=false&isHttps=true&isInSeo=false&isPremiumDomain=true&isUrlMigrated=true&isWixCodeOnPage=false&isWixCodeOnSite=false&language=en&metaSiteId=1e0b0d35-783a-46fe-b689-34428327a179&module=thunderbolt-platform&originalLanguage=en&pageId=f8d167_ab6734b5e8acaa62ea53ae7fc632df59_124.json&quickActionsMenuEnabled=false&registryLibrariesTopology=%5B%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22wixui%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11595.0%22%7D%2C%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22dsgnsys%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11595.0%22%7D%5D&remoteWidgetStructureBuilderVersion=1.238.0&siteId=721b1d9a-937b-4409-831a-8b7f5427299f&siteRevision=124&staticHTMLComponentUrl=https%3A%2F%2Fwww-jongrobbqny-com.filesusr.com%2F&viewMode=desktop"
    id="platform_masterPage" as="fetch" position="post-scripts" rel="preload" crossorigin="anonymous">
  </link>


  <link
    href="https://siteassets.parastorage.com/pages/pages/thunderbolt?appDefinitionIdToSiteRevision=%7B%2214271d6f-ba62-d045-549b-ab972ae1f70e%22%3A%2218%22%2C%2214bcded7-0066-7c35-14d7-466cb3f09103%22%3A%221035%22%7D&beckyExperiments=specs.thunderbolt.compCssMappers_catharsis%3Atrue%2Cspecs.thunderbolt.supportSpxInEEMappers%3Atrue%2Cspecs.thunderbolt.one_cell_grid_display_flex%3Atrue%2Cspecs.thunderbolt.MediaContainerAndPageBackgroundMapper%3Atrue%2Cspecs.thunderbolt.backgroundColorPerBreakpoint%3Atrue%2Cspecs.thunderbolt.edixIsInFirstFold%3Atrue%2Cspecs.thunderbolt.expandColorPalette%3Atrue%2Cspecs.thunderbolt.app_reflow_with_lightboxes%3Atrue%2Cspecs.thunderbolt.DatePickerPortal%3Atrue%2Cspecs.thunderbolt.wowImageRelayout%3Atrue%2Cspecs.thunderbolt.useElementoryRelativePath%3Atrue%2Cspecs.thunderbolt.removeStickyTopVar%3Atrue%2Cspecs.thunderbolt.render_all_tabs%3Atrue%2Cspecs.thunderbolt.enableTriggersOnDynamicMount%3Atrue%2Cspecs.thunderbolt.mesh_css_catharsis%3Atrue%2Cspecs.thunderbolt.DDMenuMigrateCssCarmiMapper%3Atrue%2Cspecs.thunderbolt.responsiveShapeDividersPublic%3Atrue%2Cspecs.thunderbolt.compsMeasuresCss_catharsis%3Atrue%2Cspecs.thunderbolt.customElemCollapsedheight%3Atrue%2Cspecs.thunderbolt.displayRefComponentsAsBlock%3Atrue%2Cspecs.thunderbolt.theme_fonts_colors_catharsis%3Atrue%2Cspecs.thunderbolt.catharsis_fontFaces%3Atrue&contentType=application%2Fjson&dfCk=6&dfVersion=1.2837.0&editorName=Unknown&experiments=bv_remove_add_chat_viewer_fixer%2Cdm_linkTargetDefaults%2Cdm_removePageDataUnderTranslations&externalBaseUrl=https%3A%2F%2Fwww.jongrobbqny.com&fileId=cd01d7bf.bundle.min&formFactor=desktop&hasTPAWorkerOnSite=false&isHttps=true&isInSeo=false&isPremiumDomain=true&isUrlMigrated=true&isWixCodeOnPage=false&isWixCodeOnSite=false&language=en&metaSiteId=1e0b0d35-783a-46fe-b689-34428327a179&module=thunderbolt-platform&originalLanguage=en&pageId=f8d167_f98f7fb741c8fab9929473a085ae248e_123.json&quickActionsMenuEnabled=false&registryLibrariesTopology=%5B%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22wixui%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11595.0%22%7D%2C%7B%22artifactId%22%3A%22editor-elements%22%2C%22namespace%22%3A%22dsgnsys%22%2C%22url%22%3A%22https%3A%2F%2Fstatic.parastorage.com%2Fservices%2Feditor-elements%2F1.11595.0%22%7D%5D&remoteWidgetStructureBuilderVersion=1.238.0&siteId=721b1d9a-937b-4409-831a-8b7f5427299f&siteRevision=124&staticHTMLComponentUrl=https%3A%2F%2Fwww-jongrobbqny-com.filesusr.com%2F&viewMode=desktop"
    id="platform_c1dmp" as="fetch" position="post-scripts" rel="preload" crossorigin="anonymous">
  </link>

 

</body>

</html>