/**
 * Often used vanilla js functions, so that we don't need
 * to use all of underscore/jQuery
 */
(function (undefined) {
    "use strict";

    var v = (window.VAMTAM = window.VAMTAM || {}); // Namespace

    // Returns a function, that, as long as it continues to be invoked, will not
    // be triggered. The function will be called after it stops being called for
    // N milliseconds. If `immediate` is passed, trigger the function on the
    // leading edge, instead of the trailing.
    v.debounce = function (func, wait, immediate) {
        var timeout;
        return function () {
            var context = this,
                args = arguments;
            var later = function () {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };

    // vanilla jQuery.fn.offset() replacement
    // @see https://plainjs.com/javascript/styles/get-the-position-of-an-element-relative-to-the-document-24/

    v.offset = function (el) {
        var rect = el.getBoundingClientRect(),
            scrollLeft =
                window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop =
                window.pageYOffset || document.documentElement.scrollTop;
        return { top: rect.top + scrollTop, left: rect.left + scrollLeft };
    };

    // Faster scroll-based animations

    v.scroll_handlers = [];
    v.latestKnownScrollY = 0;

    var ticking = false;

    v.addScrollHandler = function (handler) {
        requestAnimationFrame(function () {
            handler.init();
            v.scroll_handlers.push(handler);

            handler.measure(v.latestKnownScrollY);
            handler.mutate(v.latestKnownScrollY);
        });
    };

    v.onScroll = function () {
        v.latestKnownScrollY = window.pageYOffset;

        if (!ticking) {
            ticking = true;

            requestAnimationFrame(function () {
                var i;

                for (i = 0; i < v.scroll_handlers.length; i++) {
                    v.scroll_handlers[i].measure(v.latestKnownScrollY);
                }

                for (i = 0; i < v.scroll_handlers.length; i++) {
                    v.scroll_handlers[i].mutate(v.latestKnownScrollY);
                }

                ticking = false;
            });
        }
    };

    window.addEventListener("scroll", v.onScroll, { passive: true });

    // Load an async script
    v.load_script = function (src, callback) {
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = src;

        if (callback) {
            s.onload = callback;
        }

        document.getElementsByTagName("script")[0].before(s);
    };
})();
(function ($, undefined) {
    "use strict";

    window.vamtam_yepnope = (function (a, b) {
        function c() {}
        function d(a) {
            return Object(a) === a;
        }
        function e(a) {
            return "string" == typeof a;
        }
        function f() {
            return "yn_" + q++;
        }
        function g() {
            (o && o.parentNode) || (o = b.getElementsByTagName("script")[0]);
        }
        function h(a) {
            return (
                !a || "loaded" == a || "complete" == a || "uninitialized" == a
            );
        }
        function i(b, c) {
            c.call(a);
        }
        function j(a, j) {
            var k, l, m;
            e(a)
                ? (k = a)
                : d(a) &&
                  ((k = a._url || a.src), (l = a.attrs), (m = a.timeout)),
                (j = j || c),
                (l = l || {});
            var q,
                r,
                t = b.createElement("script");
            (m = m || n.errorTimeout),
                (t.src = k),
                s && ((t.event = "onclick"), (t.id = t.htmlFor = l.id || f()));
            for (r in l) t.setAttribute(r, l[r]);
            (t.onreadystatechange = t.onload =
                function () {
                    if (!q && h(t.readyState)) {
                        if (((q = 1), s))
                            try {
                                t.onclick();
                            } catch (a) {}
                        i(k, j);
                    }
                    t.onload = t.onreadystatechange = t.onerror = null;
                }),
                (t.onerror = function () {
                    (q = 1), j(new Error("Script Error: " + k));
                }),
                p(function () {
                    q ||
                        ((q = 1),
                        j(new Error("Timeout: " + k)),
                        t.parentNode.removeChild(t));
                }, m),
                g(),
                o.parentNode.insertBefore(t, o);
        }
        function k(f, h) {
            var i,
                j,
                k = {};
            d(f)
                ? ((i = f._url || f.href), (k = f.attrs || {}))
                : e(f) && (i = f);
            var l = b.createElement("link");
            (h = h || c),
                (l.href = i),
                (l.rel = "stylesheet"),
                (l.media = "only x"),
                (l.type = "text/css"),
                p(function () {
                    l.media = k.media || "all";
                });
            for (j in k) l.setAttribute(j, k[j]);
            g(),
                o.parentNode.appendChild(l),
                p(function () {
                    h.call(a);
                });
        }
        function l(a) {
            var b = a.split("?")[0];
            return b.substr(b.lastIndexOf(".") + 1);
        }
        function m(a, b) {
            var c = a,
                d = [],
                e = [];
            for (var f in b)
                b.hasOwnProperty(f) &&
                    (b[f]
                        ? d.push(encodeURIComponent(f))
                        : e.push(encodeURIComponent(f)));
            return (
                (d.length || e.length) && (c += "?"),
                d.length && (c += "yep=" + d.join(",")),
                e.length &&
                    (c += (d.length ? "&" : "") + "nope=" + e.join(",")),
                c
            );
        }
        function n(a, b, c) {
            var e;
            d(a) && ((e = a), (a = e.src || e.href)),
                (a = n.urlFormatter(a, b)),
                e ? (e._url = a) : (e = { _url: a });
            var f = l(a);
            if ("js" === f) j(e, c);
            else {
                if ("css" !== f)
                    throw new Error("Unable to determine filetype.");
                k(e, c);
            }
        }
        var o,
            p = a.setTimeout,
            q = 0,
            r = {}.toString,
            s = !(
                !b.attachEvent ||
                (a.opera && "[object Opera]" == r.call(a.opera))
            );
        return (
            (n.errorTimeout = 1e4),
            (n.injectJs = j),
            (n.injectCss = k),
            (n.urlFormatter = m),
            n
        );
    })(window, document); // jshint ignore:line

    $(function () {
        var scripts = [
            window.VAMTAM_FRONT.jspath +
                "plugins/thirdparty/gsap/TweenLite.min.js",
            window.VAMTAM_FRONT.jspath +
                "plugins/thirdparty/gsap/TimelineLite.min.js",
            // window.VAMTAM_FRONT.jspath + 'plugins/thirdparty/gsap/jquery.gsap.min.js',
            window.VAMTAM_FRONT.jspath +
                "plugins/thirdparty/gsap/plugins/CSSPlugin.min.js",
            window.VAMTAM_FRONT.jspath +
                "plugins/thirdparty/gsap/plugins/ScrollToPlugin.min.js",
            window.VAMTAM_FRONT.jspath +
                "plugins/thirdparty/gsap/easing/EasePack.min.js",
        ];

        var total_ready = 0;
        var maybe_ready = function () {
            if (++total_ready === scripts.length) {
                window.GreenSockGlobals =
                    window._gsQueue =
                    window._gsDefine =
                        null;

                window.vamtam_greensock_loaded = true;
                $(window).trigger("vamtam-greensock-loaded");
            }
        };

        window.vamtamgs = window.GreenSockGlobals = {};
        window._gsQueue = window._gsDefine = null;
        window.vamtam_greensock_loaded = false;

        for (var i = 0; i < scripts.length; i++) {
            vamtam_yepnope.injectJs(scripts[i], maybe_ready);
        }
    });

    window.vamtam_greensock_wait = function (callback) {
        if (window.vamtam_greensock_loaded) {
            callback();
        } else {
            $(window).one("vamtam-greensock-loaded", callback);
        }
    };
})(jQuery);
/*
 * smoothscroll polyfill - v0.3.5
 * https://iamdustan.github.io/smoothscroll
 * 2016 (c) Dustan Kasten, Jeremias Menichelli - MIT License
 */

(function (w, d, undefined) {
    "use strict";

    /*
     * aliases
     * w: window global object
     * d: document
     * undefined: undefined
     */

    // polyfill
    function polyfill() {
        // return when scrollBehavior interface is supported
        if ("scrollBehavior" in d.documentElement.style) {
            return;
        }

        /*
         * globals
         */
        var Element = w.HTMLElement || w.Element;
        var SCROLL_TIME = 468;

        /*
         * object gathering original scroll methods
         */
        var original = {
            scroll: w.scroll || w.scrollTo,
            scrollBy: w.scrollBy,
            elScroll: Element.prototype.scroll || scrollElement,
            scrollIntoView: Element.prototype.scrollIntoView,
        };

        /*
         * define timing method
         */
        var now =
            w.performance && w.performance.now
                ? w.performance.now.bind(w.performance)
                : Date.now;

        /**
         * changes scroll position inside an element
         * @method scrollElement
         * @param {Number} x
         * @param {Number} y
         */
        function scrollElement(x, y) {
            this.scrollLeft = x;
            this.scrollTop = y;
        }

        /**
         * returns result of applying ease math function to a number
         * @method ease
         * @param {Number} k
         * @returns {Number}
         */
        function ease(k) {
            return 0.5 * (1 - Math.cos(Math.PI * k));
        }

        /**
         * indicates if a smooth behavior should be applied
         * @method shouldBailOut
         * @param {Number|Object} x
         * @returns {Boolean}
         */
        function shouldBailOut(x) {
            if (
                typeof x !== "object" ||
                x === null ||
                x.behavior === undefined ||
                x.behavior === "auto" ||
                x.behavior === "instant"
            ) {
                // first arg not an object/null
                // or behavior is auto, instant or undefined
                return true;
            }

            if (typeof x === "object" && x.behavior === "smooth") {
                // first argument is an object and behavior is smooth
                return false;
            }

            // throw error when behavior is not supported
            throw new TypeError("behavior not valid");
        }

        /**
         * finds scrollable parent of an element
         * @method findScrollableParent
         * @param {Node} el
         * @returns {Node} el
         */
        function findScrollableParent(el) {
            var isBody;
            var hasScrollableSpace;
            var hasVisibleOverflow;

            do {
                el = el.parentNode;

                // set condition variables
                isBody = el === d.body;
                hasScrollableSpace =
                    el.clientHeight < el.scrollHeight ||
                    el.clientWidth < el.scrollWidth;
                hasVisibleOverflow =
                    w.getComputedStyle(el, null).overflow === "visible";
            } while (!isBody && !(hasScrollableSpace && !hasVisibleOverflow));

            isBody = hasScrollableSpace = hasVisibleOverflow = null;

            return el;
        }

        /**
         * self invoked function that, given a context, steps through scrolling
         * @method step
         * @param {Object} context
         */
        function step(context) {
            var time = now();
            var value;
            var currentX;
            var currentY;
            var elapsed = (time - context.startTime) / SCROLL_TIME;

            // avoid elapsed times higher than one
            elapsed = elapsed > 1 ? 1 : elapsed;

            // apply easing to elapsed time
            value = ease(elapsed);

            currentX = context.startX + (context.x - context.startX) * value;
            currentY = context.startY + (context.y - context.startY) * value;

            context.method.call(context.scrollable, currentX, currentY);

            // scroll more if we have not reached our destination
            if (currentX !== context.x || currentY !== context.y) {
                w.requestAnimationFrame(step.bind(w, context));
            }
        }

        /**
         * scrolls window with a smooth behavior
         * @method smoothScroll
         * @param {Object|Node} el
         * @param {Number} x
         * @param {Number} y
         */
        function smoothScroll(el, x, y) {
            var scrollable;
            var startX;
            var startY;
            var method;
            var startTime = now();

            // define scroll context
            if (el === d.body) {
                scrollable = w;
                startX = w.scrollX || w.pageXOffset;
                startY = w.scrollY || w.pageYOffset;
                method = original.scroll;
            } else {
                scrollable = el;
                startX = el.scrollLeft;
                startY = el.scrollTop;
                method = scrollElement;
            }

            // scroll looping over a frame
            step({
                scrollable: scrollable,
                method: method,
                startTime: startTime,
                startX: startX,
                startY: startY,
                x: x,
                y: y,
            });
        }

        /*
         * ORIGINAL METHODS OVERRIDES
         */

        // w.scroll and w.scrollTo
        w.scroll = w.scrollTo = function () {
            // avoid smooth behavior if not required
            if (shouldBailOut(arguments[0])) {
                original.scroll.call(
                    w,
                    arguments[0].left || arguments[0],
                    arguments[0].top || arguments[1]
                );
                return;
            }

            // LET THE SMOOTHNESS BEGIN!
            smoothScroll.call(
                w,
                d.body,
                ~~arguments[0].left,
                ~~arguments[0].top
            );
        };

        // w.scrollBy
        w.scrollBy = function () {
            // avoid smooth behavior if not required
            if (shouldBailOut(arguments[0])) {
                original.scrollBy.call(
                    w,
                    arguments[0].left || arguments[0],
                    arguments[0].top || arguments[1]
                );
                return;
            }

            // LET THE SMOOTHNESS BEGIN!
            smoothScroll.call(
                w,
                d.body,
                ~~arguments[0].left + (w.scrollX || w.pageXOffset),
                ~~arguments[0].top + (w.scrollY || w.pageYOffset)
            );
        };

        // Element.prototype.scroll and Element.prototype.scrollTo
        Element.prototype.scroll = Element.prototype.scrollTo = function () {
            // avoid smooth behavior if not required
            if (shouldBailOut(arguments[0])) {
                original.elScroll.call(
                    this,
                    arguments[0].left || arguments[0],
                    arguments[0].top || arguments[1]
                );
                return;
            }

            var left = arguments[0].left;
            var top = arguments[0].top;

            // LET THE SMOOTHNESS BEGIN!
            smoothScroll.call(
                this,
                this,
                typeof left === "number" ? left : this.scrollLeft,
                typeof top === "number" ? top : this.scrollTop
            );
        };

        // Element.prototype.scrollBy
        Element.prototype.scrollBy = function () {
            var arg0 = arguments[0];

            if (typeof arg0 === "object") {
                this.scroll({
                    left: arg0.left + this.scrollLeft,
                    top: arg0.top + this.scrollTop,
                    behavior: arg0.behavior,
                });
            } else {
                this.scroll(
                    this.scrollLeft + arg0,
                    this.scrollTop + arguments[1]
                );
            }
        };

        // Element.prototype.scrollIntoView
        Element.prototype.scrollIntoView = function () {
            // avoid smooth behavior if not required
            if (shouldBailOut(arguments[0])) {
                original.scrollIntoView.call(this, arguments[0] || true);
                return;
            }

            // LET THE SMOOTHNESS BEGIN!
            var scrollableParent = findScrollableParent(this);
            var parentRects = scrollableParent.getBoundingClientRect();
            var clientRects = this.getBoundingClientRect();

            if (scrollableParent !== d.body) {
                // reveal element inside parent
                smoothScroll.call(
                    this,
                    scrollableParent,
                    scrollableParent.scrollLeft +
                        clientRects.left -
                        parentRects.left,
                    scrollableParent.scrollTop +
                        clientRects.top -
                        parentRects.top
                );
                // reveal parent in viewport
                w.scrollBy({
                    left: parentRects.left,
                    top: parentRects.top,
                    behavior: "smooth",
                });
            } else {
                // reveal element in viewport
                w.scrollBy({
                    left: clientRects.left,
                    top: clientRects.top,
                    behavior: "smooth",
                });
            }
        };
    }

    if (typeof exports === "object") {
        // commonjs
        module.exports = { polyfill: polyfill };
    } else {
        // global
        polyfill();
    }
})(window, document);
(function (window, $, undefined) {
    /*!
     * imagesLoaded PACKAGED v4.1.0
     * JavaScript is all like "You images are done yet or what?"
     * MIT License
     */

    /**
     * EvEmitter v1.0.1
     * Lil' event emitter
     * MIT License
     */

    /* jshint unused: true, undef: true, strict: true */

    (function (global, factory) {
        // universal module definition
        /* jshint strict: false */ /* globals define, module */
        if (typeof define == "function" && define.amd) {
            // AMD - RequireJS
            define("ev-emitter/ev-emitter", factory);
        } else if (typeof module == "object" && module.exports) {
            // CommonJS - Browserify, Webpack
            module.exports = factory();
        } else {
            // Browser globals
            global.EvEmitter = factory();
        }
    })(this, function () {
        function EvEmitter() {}

        var proto = EvEmitter.prototype;

        proto.on = function (eventName, listener) {
            if (!eventName || !listener) {
                return;
            }
            // set events hash
            var events = (this._events = this._events || {});
            // set listeners array
            var listeners = (events[eventName] = events[eventName] || []);
            // only add once
            if (listeners.indexOf(listener) == -1) {
                listeners.push(listener);
            }

            return this;
        };

        proto.once = function (eventName, listener) {
            if (!eventName || !listener) {
                return;
            }
            // add event
            this.on(eventName, listener);
            // set once flag
            // set onceEvents hash
            var onceEvents = (this._onceEvents = this._onceEvents || {});
            // set onceListeners array
            var onceListeners = (onceEvents[eventName] =
                onceEvents[eventName] || []);
            // set flag
            onceListeners[listener] = true;

            return this;
        };

        proto.off = function (eventName, listener) {
            var listeners = this._events && this._events[eventName];
            if (!listeners || !listeners.length) {
                return;
            }
            var index = listeners.indexOf(listener);
            if (index != -1) {
                listeners.splice(index, 1);
            }

            return this;
        };

        proto.emitEvent = function (eventName, args) {
            var listeners = this._events && this._events[eventName];
            if (!listeners || !listeners.length) {
                return;
            }
            var i = 0;
            var listener = listeners[i];
            args = args || [];
            // once stuff
            var onceListeners = this._onceEvents && this._onceEvents[eventName];

            while (listener) {
                var isOnce = onceListeners && onceListeners[listener];
                if (isOnce) {
                    // remove listener
                    // remove before trigger to prevent recursion
                    this.off(eventName, listener);
                    // unset once flag
                    delete onceListeners[listener];
                }
                // trigger listener
                listener.apply(this, args);
                // get next listener
                i += isOnce ? 0 : 1;
                listener = listeners[i];
            }

            return this;
        };

        return EvEmitter;
    });

    /*!
     * imagesLoaded v4.1.0
     * JavaScript is all like "You images are done yet or what?"
     * MIT License
     */

    (function (window, factory) {
        "use strict";
        // universal module definition

        /*global define: false, module: false, require: false */

        if (typeof define == "function" && define.amd) {
            // AMD
            define(["ev-emitter/ev-emitter"], function (EvEmitter) {
                return factory(window, EvEmitter);
            });
        } else if (typeof module == "object" && module.exports) {
            // CommonJS
            module.exports = factory(window, require("ev-emitter"));
        } else {
            // browser global
            window.imagesLoaded = factory(window, window.EvEmitter);
        }
    })(
        window,

        // --------------------------  factory -------------------------- //

        function factory(window, EvEmitter) {
            var $ = window.jQuery;
            var console = window.console;

            // -------------------------- helpers -------------------------- //

            // extend objects
            function extend(a, b) {
                for (var prop in b) {
                    a[prop] = b[prop];
                }
                return a;
            }

            // turn element or nodeList into an array
            function makeArray(obj) {
                var ary = [];
                if (Array.isArray(obj)) {
                    // use object if already an array
                    ary = obj;
                } else if (typeof obj.length == "number") {
                    // convert nodeList to array
                    for (var i = 0; i < obj.length; i++) {
                        ary.push(obj[i]);
                    }
                } else {
                    // array of single index
                    ary.push(obj);
                }
                return ary;
            }

            // -------------------------- imagesLoaded -------------------------- //

            /**
             * @param {Array, Element, NodeList, String} elem
             * @param {Object or Function} options - if function, use as callback
             * @param {Function} onAlways - callback function
             */
            function ImagesLoaded(elem, options, onAlways) {
                // coerce ImagesLoaded() without new, to be new ImagesLoaded()
                if (!(this instanceof ImagesLoaded)) {
                    return new ImagesLoaded(elem, options, onAlways);
                }
                // use elem as selector string
                if (typeof elem == "string") {
                    elem = document.querySelectorAll(elem);
                }

                this.elements = makeArray(elem);
                this.options = extend({}, this.options);

                if (typeof options == "function") {
                    onAlways = options;
                } else {
                    extend(this.options, options);
                }

                if (onAlways) {
                    this.on("always", onAlways);
                }

                this.getImages();

                if ($) {
                    // add jQuery Deferred object
                    this.jqDeferred = new $.Deferred();
                }

                // HACK check async to allow time to bind listeners
                setTimeout(
                    function () {
                        this.check();
                    }.bind(this)
                );
            }

            ImagesLoaded.prototype = Object.create(EvEmitter.prototype);

            ImagesLoaded.prototype.options = {};

            ImagesLoaded.prototype.getImages = function () {
                this.images = [];

                // filter & find items if we have an item selector
                this.elements.forEach(this.addElementImages, this);
            };

            /**
             * @param {Node} element
             */
            ImagesLoaded.prototype.addElementImages = function (elem) {
                // filter siblings
                if (elem.nodeName == "IMG") {
                    this.addImage(elem);
                }
                // get background image on element
                if (this.options.background === true) {
                    this.addElementBackgroundImages(elem);
                }

                // find children
                // no non-element nodes, #143
                var nodeType = elem.nodeType;
                if (!nodeType || !elementNodeTypes[nodeType]) {
                    return;
                }
                var childImgs = elem.querySelectorAll("img");
                // concat childElems to filterFound array
                for (var i = 0; i < childImgs.length; i++) {
                    var img = childImgs[i];
                    this.addImage(img);
                }

                // get child background images
                if (typeof this.options.background == "string") {
                    var children = elem.querySelectorAll(
                        this.options.background
                    );
                    for (i = 0; i < children.length; i++) {
                        var child = children[i];
                        this.addElementBackgroundImages(child);
                    }
                }
            };

            var elementNodeTypes = {
                1: true,
                9: true,
                11: true,
            };

            ImagesLoaded.prototype.addElementBackgroundImages = function (
                elem
            ) {
                var style = getComputedStyle(elem);
                if (!style) {
                    // Firefox returns null if in a hidden iframe https://bugzil.la/548397
                    return;
                }
                // get url inside url("...")
                var reURL = /url\((['"])?(.*?)\1\)/gi;
                var matches = reURL.exec(style.backgroundImage);
                while (matches !== null) {
                    var url = matches && matches[2];
                    if (url) {
                        this.addBackground(url, elem);
                    }
                    matches = reURL.exec(style.backgroundImage);
                }
            };

            /**
             * @param {Image} img
             */
            ImagesLoaded.prototype.addImage = function (img) {
                var loadingImage = new LoadingImage(img);
                this.images.push(loadingImage);
            };

            ImagesLoaded.prototype.addBackground = function (url, elem) {
                var background = new Background(url, elem);
                this.images.push(background);
            };

            ImagesLoaded.prototype.check = function () {
                var _this = this;
                this.progressedCount = 0;
                this.hasAnyBroken = false;
                // complete if no images
                if (!this.images.length) {
                    this.complete();
                    return;
                }

                function onProgress(image, elem, message) {
                    // HACK - Chrome triggers event before object properties have changed. #83
                    setTimeout(function () {
                        _this.progress(image, elem, message);
                    });
                }

                this.images.forEach(function (loadingImage) {
                    loadingImage.once("progress", onProgress);
                    loadingImage.check();
                });
            };

            ImagesLoaded.prototype.progress = function (image, elem, message) {
                this.progressedCount++;
                this.hasAnyBroken = this.hasAnyBroken || !image.isLoaded;
                // progress event
                this.emitEvent("progress", [this, image, elem]);
                if (this.jqDeferred && this.jqDeferred.notify) {
                    this.jqDeferred.notify(this, image);
                }
                // check if completed
                if (this.progressedCount == this.images.length) {
                    this.complete();
                }

                if (this.options.debug && console) {
                    console.log("progress: " + message, image, elem);
                }
            };

            ImagesLoaded.prototype.complete = function () {
                var eventName = this.hasAnyBroken ? "fail" : "done";
                this.isComplete = true;
                this.emitEvent(eventName, [this]);
                this.emitEvent("always", [this]);
                if (this.jqDeferred) {
                    var jqMethod = this.hasAnyBroken ? "reject" : "resolve";
                    this.jqDeferred[jqMethod](this);
                }
            };

            // --------------------------  -------------------------- //

            function LoadingImage(img) {
                this.img = img;
            }

            LoadingImage.prototype = Object.create(EvEmitter.prototype);

            LoadingImage.prototype.check = function () {
                // If complete is true and browser supports natural sizes,
                // try to check for image status manually.
                var isComplete = this.getIsImageComplete();
                if (isComplete) {
                    // report based on naturalWidth
                    this.confirm(this.img.naturalWidth !== 0, "naturalWidth");
                    return;
                }

                // If none of the checks above matched, simulate loading on detached element.
                this.proxyImage = new Image();
                this.proxyImage.addEventListener("load", this);
                this.proxyImage.addEventListener("error", this);
                // bind to image as well for Firefox. #191
                this.img.addEventListener("load", this);
                this.img.addEventListener("error", this);
                this.proxyImage.src = this.img.src;
            };

            LoadingImage.prototype.getIsImageComplete = function () {
                return this.img.complete && this.img.naturalWidth !== undefined;
            };

            LoadingImage.prototype.confirm = function (isLoaded, message) {
                this.isLoaded = isLoaded;
                this.emitEvent("progress", [this, this.img, message]);
            };

            // ----- events ----- //

            // trigger specified handler for event type
            LoadingImage.prototype.handleEvent = function (event) {
                var method = "on" + event.type;
                if (this[method]) {
                    this[method](event);
                }
            };

            LoadingImage.prototype.onload = function () {
                this.confirm(true, "onload");
                this.unbindEvents();
            };

            LoadingImage.prototype.onerror = function () {
                this.confirm(false, "onerror");
                this.unbindEvents();
            };

            LoadingImage.prototype.unbindEvents = function () {
                this.proxyImage.removeEventListener("load", this);
                this.proxyImage.removeEventListener("error", this);
                this.img.removeEventListener("load", this);
                this.img.removeEventListener("error", this);
            };

            // -------------------------- Background -------------------------- //

            function Background(url, element) {
                this.url = url;
                this.element = element;
                this.img = new Image();
            }

            // inherit LoadingImage prototype
            Background.prototype = Object.create(LoadingImage.prototype);

            Background.prototype.check = function () {
                this.img.addEventListener("load", this);
                this.img.addEventListener("error", this);
                this.img.src = this.url;
                // check if image is already complete
                var isComplete = this.getIsImageComplete();
                if (isComplete) {
                    this.confirm(this.img.naturalWidth !== 0, "naturalWidth");
                    this.unbindEvents();
                }
            };

            Background.prototype.unbindEvents = function () {
                this.img.removeEventListener("load", this);
                this.img.removeEventListener("error", this);
            };

            Background.prototype.confirm = function (isLoaded, message) {
                this.isLoaded = isLoaded;
                this.emitEvent("progress", [this, this.element, message]);
            };

            // -------------------------- jQuery -------------------------- //

            ImagesLoaded.makeJQueryPlugin = function (jQuery) {
                jQuery = jQuery || window.jQuery;
                if (!jQuery) {
                    return;
                }
                // set local variable
                $ = jQuery;
                // $().imagesLoaded()
                $.fn.imagesLoaded = function (options, callback) {
                    var instance = new ImagesLoaded(this, options, callback);
                    return instance.jqDeferred.promise($(this));
                };
            };
            // try making plugin
            ImagesLoaded.makeJQueryPlugin();

            // --------------------------  -------------------------- //

            return ImagesLoaded;
        }
    );
})(window, jQuery);
(function () {
    "use strict";

    var lastTime = 0;
    var vendors = ["ms", "moz", "webkit", "o"];
    for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame =
            window[vendors[x] + "RequestAnimationFrame"];
        window.cancelAnimationFrame =
            window[vendors[x] + "CancelAnimationFrame"] ||
            window[vendors[x] + "CancelRequestAnimationFrame"];
    }

    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function (callback) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));

            var id = window.setTimeout(function () {
                callback(currTime + timeToCall);
            }, timeToCall);

            lastTime = currTime + timeToCall;
            return id;
        };

    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function (id) {
            clearTimeout(id);
        };
})();
(function ($, undefined) {
    "use strict";

    // Namespace
    jQuery.VAMTAM = jQuery.VAMTAM || {};

    jQuery.VAMTAM.MEDIA = jQuery.VAMTAM.MEDIA || {
        layout: {},
    };

    var LAYOUT_SIZES = [
        { min: 0, max: 479, className: "layout-smallest" },
        { min: 480, max: 958, className: "layout-small" },
        { min: 959, max: Infinity, className: "layout-max" },
        { min: 959, max: 1280, className: "layout-max-low" },

        { min: 0, max: 958, className: "layout-below-max" },
    ];

    $(function () {
        if ($("body").hasClass("responsive-layout") && "matchMedia" in window) {
            var sizesLength = LAYOUT_SIZES.length;

            var remap = function () {
                var map = {};

                for (var i = 0; i < sizesLength; i++) {
                    var mq = "(min-width: " + LAYOUT_SIZES[i].min + "px)";
                    if (LAYOUT_SIZES[i].max !== Infinity)
                        mq += " and (max-width: " + LAYOUT_SIZES[i].max + "px)";

                    if (window.matchMedia(mq).matches) {
                        map[LAYOUT_SIZES[i].className] = true;
                    } else {
                        map[LAYOUT_SIZES[i].className] = false;
                    }
                }

                jQuery.VAMTAM.MEDIA.layout = map;
            };

            $(window).bind("smartresize.sizeClass load.sizeClass", remap);
            remap();
        } else {
            $.VAMTAM.MEDIA.layout = { "layout-max": true };
        }
    });

    $.VAMTAM.MEDIA.is_mobile = function () {
        var check = false;
        (function (a) {
            if (
                /(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(
                    a
                ) ||
                /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                    a.substr(0, 4)
                )
            )
                check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);
        return check;
    };
})(jQuery);
(function ($, undefined) {
    "use strict";

    $(function () {
        var lightbox = $("#vamtam-overlay-search");
        var inside = lightbox.find("> *").hide();

        $(".vamtam-overlay-search-trigger").click(function (e) {
            e.preventDefault();

            lightbox.addClass("vamtam-animated vamtam-fadein").show();

            setTimeout(function () {
                inside
                    .show()
                    .css("animation-duration", "300ms")
                    .addClass("vamtam-animated vamtam-zoomin");

                lightbox.find("input[type=search]").focus();
            }, 200);
        });

        $("#vamtam-overlay-search-close").click(function (e) {
            e.preventDefault();

            lightbox
                .removeClass("vamtam-animated vamtam-fadein")
                .addClass("vamtam-animated vamtam-fadeout");
            inside
                .removeClass("vamtam-animated vamtam-zoomin")
                .addClass("vamtam-animated vamtam-zoomout");

            lightbox.one(
                "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
                function () {
                    lightbox
                        .hide()
                        .removeClass("vamtam-animated vamtam-fadeout");
                    inside.hide().removeClass("vamtam-animated vamtam-zoomout");
                }
            );
        });
    });
})(jQuery);
(function ($, undefined) {
    "use strict";

    $(function () {
        var has_customize = "undefined" !== typeof wp && "customize" in wp;

        if ("tabs" in $.fn) {
            $(".vamtam-tabs").tabs({
                beforeLoad: function () {
                    if (has_customize) {
                        return false;
                    }
                },
                activate: function (event, ui) {
                    if (!has_customize) {
                        var hash = ui.newTab.context.hash;
                        var element = $(hash);
                        element.attr("id", "");
                        window.location.hash = hash;
                        element.attr("id", hash.replace("#", ""));
                    }
                },
                heightStyle: "content",
            });
        }

        if ("accordion" in $.fn) {
            $(".vamtam-accordion")
                .accordion({
                    heightStyle: "content",
                })
                .each(function () {
                    if ($(this).attr("data-collapsible") === "true") {
                        $(this)
                            .accordion("option", "collapsible", true)
                            .accordion("option", "active", false);
                    }
                });
        }
    });
})(jQuery);

(function ($, undefined) {
    "use strict";

    var win = $(window);

    win.one("vamtam-greensock-loaded", function () {
        var mainHeader = $("header.main-header"),
            main = $("#main"),
            body = $("body"),
            header_contents = mainHeader.find(".header-contents");

        var menu_toggle = document.getElementById(
            "vamtam-megamenu-main-menu-toggle"
        );
        var original_toggle = document.querySelector(
            "#main-menu > .mega-menu-wrap > .mega-menu-toggle"
        );

        // main menu custom toggle

        menu_toggle.addEventListener("click", function (e) {
            e.preventDefault();

            requestAnimationFrame(function () {
                var is_open =
                    original_toggle.classList.contains("mega-menu-open");

                menu_toggle.classList.toggle("mega-menu-open", !is_open);
                original_toggle.classList.toggle("mega-menu-open", !is_open);
            });
        });

        // add left/right classes to submenus depending on resolution

        var allSubMenus = $("#main-menu .sub-menu, #top-nav-wrapper .sub-menu");

        win.bind("smartresize.vamtam-menu-classes", function () {
            var winWidth = win.width();

            allSubMenus
                .show()
                .removeClass("invert-position")
                .each(function () {
                    if ($(this).offset().left + $(this).width() > winWidth) {
                        $(this).addClass("invert-position");
                    }
                });
            allSubMenus.css("display", "");
        });

        // scrolling below

        var adminbar = $("#wpadminbar") ? $("#wpadminbar").height() : 0;

        var scrollToEl = function (el) {
            menu_toggle && menu_toggle.classList.remove("mega-menu-open");
            original_toggle &&
                original_toggle.classList.remove("mega-menu-open");

            var el_offset = el.offset().top;

            $.VAMTAM.blockStickyHeaderAnimation = true;

            // measure header height
            var header_height = 0;

            if (
                mainHeader.hasClass("layout-standard") ||
                mainHeader.hasClass("logo-text-menu")
            ) {
                if (el_offset >= main.offset().top) {
                    header_height = mainHeader
                        .find(".second-row-columns")
                        .height();
                } else {
                    header_height = mainHeader.height();
                }
            } else {
                if (body.hasClass("no-sticky-header-animation")) {
                    // single line header with a special page template

                    header_height = mainHeader.height();
                } else {
                    header_height = header_contents.height();

                    // in this case stick the header,
                    // we'd like the menu to be visible after scrolling
                    win.trigger("vamtam-single-row-header-stick");
                    body.addClass("no-sticky-header-animation-tmp");
                }
            }
            if (typeof adminbar === "undefined") {
                adminbar = 0;
            }
            var scroll_position = el_offset - adminbar - header_height;

            win.on(
                "scroll.smoothscroll",
                _.debounce(function () {
                    $.WPV.blockStickyHeaderAnimation = false;
                    body.removeClass("no-sticky-header-animation-tmp");

                    win.off("scroll.smoothscroll");
                }, 500)
            );
            window.scrollTo({
                behavior: "smooth",
                left: 0,
                top: scroll_position,
            });
        };

        $(document.body).on(
            "click",
            ".vamtam-animated-page-scroll[href], .vamtam-animated-page-scroll [href], .vamtam-animated-page-scroll [data-href], .mega-vamtam-animated-page-scroll[href], .mega-vamtam-animated-page-scroll [href], .mega-vamtam-animated-page-scroll [data-href]",
            function (e) {
                var href = $(this).prop("href") || $(this).data("href");
                var el = $("#" + href.split("#")[1]);

                var l = document.createElement("a");
                l.href = href;

                if (el.length && l.pathname === window.location.pathname) {
                    menu_toggle.classList.toggle("mega-menu-open", false);
                    original_toggle.classList.toggle("mega-menu-open", false);
                    console.log(el);
                    scrollToEl(el);
                    e.preventDefault();
                }
            }
        );

        if (
            window.location.hash !== "" &&
            ($(
                '.vamtam-animated-page-scroll[href*="' +
                    window.location.hash +
                    '"]'
            ).length ||
                $(
                    '.vamtam-animated-page-scroll [href*="' +
                        window.location.hash +
                        '"]'
                ).length ||
                $(
                    '.vamtam-animated-page-scroll [data-href*="' +
                        window.location.hash +
                        '"]'
                ).length ||
                $(
                    '.mega-vamtam-animated-page-scroll[href*="' +
                        window.location.hash +
                        '"]'
                ).length ||
                $(
                    '.mega-vamtam-animated-page-scroll [href*="' +
                        window.location.hash +
                        '"]'
                ).length ||
                $(
                    '.mega-vamtam-animated-page-scroll [data-href*="' +
                        window.location.hash +
                        '"]'
                ).length ||
                $('.vamtam-tabs [href*="' + window.location.hash + '"]').length)
        ) {
            var el = $(window.location.hash);

            if (
                $('.vamtam-tabs [href*="' + window.location.hash + '"]').length
            ) {
                el = el.closest(".vamtam-tabs");
            }

            if (el.length > 0) {
                win.add("html, body, #page").scrollTop(0);
            }

            setTimeout(function () {
                scrollToEl(el);
            }, 400);
        }

        // adds .current-menu-item classes

        var hashes = [
            // ['top', $('<div></div>'), $('#top')]
        ];

        var add_current_menu_item = function (hash) {
            for (var i = 0; i < hashes.length; i++) {
                if (hashes[i][0] === hash) {
                    hashes[i][1].addClass(
                        "mega-current-menu-item current-menu-item"
                    );
                } else {
                    hashes[i][1][0].childNodes[0].blur();
                }
            }
        };

        $("#main-menu")
            .find(".mega-menu, .menu")
            .find(
                ".maybe-current-menu-item, .mega-current-menu-item, .current-menu-item"
            )
            .each(function () {
                var link = $("> a", this);

                if (link.prop("href").indexOf("#") > -1) {
                    var link_hash = link.prop("href").split("#")[1];

                    if ("#" + link_hash !== window.location.hash) {
                        $(this).removeClass(
                            "mega-current-menu-item current-menu-item"
                        );
                    }

                    hashes.push([link_hash, $(this), $("#" + link_hash)]);
                }
            });

        var scroll_snap = $(".vamtam-scroll-snap");

        if (scroll_snap.length) {
            body.addClass("with-scroll-snap");

            var scroll_snap_nav = $('<nav id="vamtam-scroll-snap-nav"></nav>');
            var scroll_snap_nav_by_id = {};

            scroll_snap_nav.attr("aria-hidden", "true"); // hide for screen readers only, this nav is redundant and should not be read aloud twice

            body.append(scroll_snap_nav);

            scroll_snap.each(function () {
                var col = $(this);

                scroll_snap_nav.append(function () {
                    var id = col.attr("id");
                    var link = $("<a />");

                    link.attr("href", "#" + id);
                    link.addClass("vamtam-animated-page-scroll");

                    scroll_snap_nav_by_id[id] = link;

                    hashes.push([id, link, col]);

                    return link;
                });
            });

            scroll_snap_nav.css(
                "margin-top",
                -scroll_snap_nav.outerHeight() / 2
            );

            win.on("wheel mousewheel", function (e) {
                var direction =
                    e.originalEvent.deltaY || e.originalEvent.wheelDelta;

                if (direction !== 0) {
                    var visible_top =
                        win.scrollTop() + mainHeader.outerHeight() + adminbar; // top of visible area
                    var visible_bottom = win.scrollTop() + win.height(); // bottom of visible area

                    var to_el;

                    scroll_snap.each(function () {
                        var col = $(this);

                        // top edge of snap if scrolling down, bottom edge if scrolling up
                        var line = Math.floor(
                            direction > 0
                                ? col.offset().top
                                : col.offset().top + col.outerHeight()
                        );

                        if (
                            line > visible_top + 10 &&
                            line < visible_bottom - 10
                        ) {
                            // line is visible, allow a few px buffer on each side erring towards "invisible"
                            to_el = col;

                            return;
                        }
                    });

                    if (to_el) {
                        e.preventDefault();

                        scrollToEl(to_el);
                    } else {
                        if (!$.VAMTAM.blockStickyHeaderAnimation) {
                            $.VAMTAM.blockStickyHeaderAnimation = true;

                            setTimeout(function () {
                                $.VAMTAM.blockStickyHeaderAnimation = false;
                            }, 1000);
                        }
                    }
                }
            });
        }

        if (hashes.length) {
            var winHeight = 0;
            var documentHeight = 0;

            var prev_upmost_data = null;

            win.scroll(function () {
                winHeight = win.height();
                documentHeight = $(document).height();

                var cpos = win.scrollTop();
                var upmost = Infinity;
                var upmost_data = null;

                for (var i = 0; i < hashes.length; i++) {
                    var el = hashes[i][2];

                    if (el.length) {
                        var top = el.offset().top + 10;

                        if (
                            top > cpos &&
                            top < upmost &&
                            (top < cpos + winHeight / 2 ||
                                (top < cpos + winHeight &&
                                    cpos + winHeight === documentHeight))
                        ) {
                            upmost_data = hashes[i];
                            upmost = top;
                        }

                        hashes[i][1].removeClass(
                            "mega-current-menu-item current-menu-item"
                        );
                    }
                }

                if (upmost_data) {
                    add_current_menu_item(upmost_data[0]);

                    if (
                        "history" in window &&
                        (prev_upmost_data !== null
                            ? prev_upmost_data[0]
                            : "") !== upmost_data[0]
                    ) {
                        window.history.pushState(
                            upmost_data[0],
                            $("> a", upmost_data[1]).text(),
                            cpos !== 0
                                ? "#" + upmost_data[0]
                                : location.href.replace(location.hash, "")
                        );
                        prev_upmost_data = $.extend({}, upmost_data);
                    }
                } else if (upmost_data === null && prev_upmost_data !== null) {
                    add_current_menu_item(prev_upmost_data[0]);
                }
            });
        }
    });
})(jQuery);
(function ($, undefined) {
    "use strict";

    $(function () {
        var body = $("body");
        var admin_bar_fix = body.hasClass("admin-bar") ? 32 : 0;
        var win = $(window);

        
    });
})(jQuery);
(function ($, undefined) {
    "use strict";

    var win = $(window),
        win_height = 0;

    var explorer = /MSIE (\d+)/.exec(navigator.userAgent),
        mobileSafari =
            navigator.userAgent.match(/(iPod|iPhone|iPad)/) &&
            navigator.userAgent.match(/AppleWebKit/);

    win.resize(function () {
        win_height = win.height();
		 
        if (
            (explorer && parseInt(explorer[1], 10) === 8) ||
            mobileSafari ||
            $.VAMTAM.MEDIA.layout["layout-below-max"]
        ) {
            $(".vamtam-grid.animated-active")
                .removeClass("animated-active")
                .addClass("animated-suspended");
        } else {
            $(".vamtam-grid.animated-suspended")
                .removeClass("animated-suspended")
                .addClass("animated-active");
        }
    }).resize();

    var maybe_activate = _.throttle(function () {
        var win_height = win.height();
        var all_in = $(window).scrollTop() + win_height;

        $(".vamtam-grid.animated-active:not(.animation-ended)").each(
            function () {
                var el = $(this);
                var el_height = el.outerHeight();
                var visible =
                    all_in >
                    el.offset().top + el_height * (el_height > 100 ? 0.3 : 0.6);

                if (visible || mobileSafari) {
                    el.addClass("animation-ended");
                } else {
                    return false;
                }
            }
        );
    }, 100);

    win.bind("scroll touchmove load", maybe_activate);

    maybe_activate();
})(jQuery);
(function ($, undefined) {
    "use strict";

    var win = $(window);
    var win_height = win.height();

    var cpos = -1;
    var prev_scroll;

    var columns = $("[data-progressive-animation]");

    var blocked = false;

    var build_timeline = function (type, target) {
        var timeline = new vamtamgs.TimelineLite({ paused: true });

        if (type === "fade-top") {
            timeline.fromTo(
                target,
                1,
                { y: 0, opacity: 1 },
                { y: -20, opacity: 0 },
                "0"
            );
        } else if (type === "fade-bottom") {
            timeline.fromTo(
                target,
                1,
                { y: 0, opacity: 1 },
                { y: 500, opacity: 0 },
                "0"
            );
        } else if (type === "page-title") {
            var line = target.find(".page-header-line");

            timeline.fromTo(
                target.find("h1"),
                1,
                { y: 0, opacity: 1 },
                { y: -10, opacity: 0, ease: vamtamgs.Quad.easeIn },
                "0.1"
            );
            timeline.fromTo(
                target.find(".desc"),
                1,
                { y: 0, opacity: 1 },
                { y: 30, opacity: 0, ease: vamtamgs.Quad.easeIn },
                "0"
            );
            timeline.fromTo(
                target.closest("#sub-header").find(".text-shadow"),
                1,
                { opacity: 0.3 },
                { opacity: 0.7, ease: vamtamgs.Quad.easeIn },
                "0"
            );
            timeline.to(
                line,
                1,
                { width: 0, y: 30, opacity: 0, ease: vamtamgs.Quad.easeIn },
                "0"
            );
        } else if (type === "custom") {
            timeline.to(
                target,
                1,
                { className: target.data("progressive-animation-custom") },
                "0"
            );
        }

        return timeline;
    };

    var repaint = function () {
        blocked = true;

        columns.each(function () {
            var col = $(this);

            var data = col.data("progressive-timeline");

            var from = data.top + data.height / 2;

            var progress = 1 - (from - cpos) / Math.min(win_height / 2, from);

            progress = Math.min(1, Math.max(0, progress)); // clip

            data.timeline.progress(progress);
        });

        blocked = false;
    };

    var reposition = function () {
        cpos = window.pageYOffset;

        if (cpos !== prev_scroll) {
            repaint();

            prev_scroll = cpos;
        }
    };

    if (columns.length) {
        vamtam_greensock_wait(function () {
            columns.each(function () {
                var col = $(this);

                col.data("progressive-timeline", {
                    timeline: build_timeline(
                        col.data("progressive-animation"),
                        col
                    ),
                    top: col.offset().top,
                    height: col.height(),
                });
            });

            var maybe_reposition = _.throttle(function () {
                if (!blocked) {
                    requestAnimationFrame(reposition);
                }
            }, 16);

            win.scroll(maybe_reposition);

            maybe_reposition();

            
        });
    }
})(jQuery);
(function ($, undefined) {
    "use strict";

    var win = $(window),
        win_height = win.height(),
        columns;

    var cpos = window.pageYOffset;
    var prev_scroll = -1;

    var new_pos = function (method, top, inertia, height) {
        if ("to-centre" === method) {
            return (top + height / 2 - cpos - win_height / 2) * inertia;
        }

        if ("fixed" === method) {
            return (cpos - top) * inertia;
        }
    };

    var measure_columns = function () {
        columns.each(function () {
            var t = $(this);

            $(this).data("parallax-column-top", t.offset().top);
            $(this).data("parallax-column-height", t.outerHeight());
        });
    };

    var blocked = false;

    var repaint_parallax = function () {
        blocked = true;

        var all_visible = cpos + win_height;
        var move = [];

        // measure
        columns.each(function () {
            var column = $(this);

            var top = column.data("parallax-column-top"),
                height = column.data("parallax-column-height"),
                fakebg = column.data("parallax-img");

            if (top + height < cpos || top > all_visible || !fakebg.length) {
                return;
            }

            var inertia = column.data("parallax-inertia");
            var method = column.data("parallax-method");
            var new_y = new_pos(method, top, inertia, height);

            move.push([fakebg, new_y]);
        });

        var ml = move.length;

        // then mutate
        if (ml > 0) {
            for (var i = 0; i < ml; i++) {
                vamtamgs.TweenLite.to(move[i][0], 0, { y: move[i][1] });
            }
        }

        blocked = false;
    };

    win.bind("vamtam-force-parallax-repaint", repaint_parallax);

    var reposition = function () {
        if (cpos !== prev_scroll) {
            repaint_parallax(cpos);

            prev_scroll = cpos;
        }

        // requestAnimationFrame( reposition );
    };

    var bgprops = "position image color size attachment".split(" ");

    $(function () {
        $(".vamtam-grid.parallax-bg:not(.parallax-loaded)").each(function () {
            var self = $(this);

            var local_bgprops = {};
            $.each(bgprops, function (i, p) {
                local_bgprops["background-" + p] = self.css("background-" + p);
            });

            local_bgprops["background-repeat"] = "no-repeat";

            self.addClass("parallax-loaded")
                .wrapInner(function () {
                    return $("<div></div>").addClass(
                        "vamtam-parallax-bg-content"
                    );
                })
                .prepend(function () {
                    var outer_div = $("<div></div>")
                        .addClass("vamtam-parallax-bg-wrapper")
                        .append(function () {
                            var div = $("<div></div>")
                                .addClass("vamtam-parallax-bg-img")
                                .css(local_bgprops);

                            self.data("parallax-img", div);

                            return div;
                        });

                    return outer_div;
                })
                .css("background", "");
        });

        columns = $(".vamtam-grid.parallax-bg");

        if (columns.length > 0) {
            
            measure_columns();

            vamtam_greensock_wait(function () {
                var maybe_reposition = _.throttle(function () {
                    cpos = window.pageYOffset;

                    if (!blocked) {
                        requestAnimationFrame(reposition);
                    }
                }, 16);

                win.scroll(maybe_reposition);

                maybe_reposition();

               
            });
        }
    });
})(jQuery);
/* jshint multistr:true */
(function () {
    "use strict";

    jQuery.VAMTAM = jQuery.VAMTAM || {}; // Namespace

    (function ($, undefined) {
        var J_WIN = $(window);

        $(function () {
            if (top !== window && /vamtam\.com/.test(document.location.href)) {
                var width = 0;

                setInterval(function () {
                    if ($(window).width() !== width) {
                        $(window).resize();
                        setTimeout(function () {
                            $(window).resize();
                        }, 100);
                        setTimeout(function () {
                            $(window).resize();
                        }, 200);
                        setTimeout(function () {
                            $(window).resize();
                        }, 300);
                        setTimeout(function () {
                            $(window).resize();
                        }, 500);
                        width = $(window).width();
                    }
                }, 200);
            }

            var body = $("body");

            if (body.is(".responsive-layout")) {
                J_WIN.triggerHandler("resize.sizeClass");
            }

            // prevent hover when scrolling
            (function () {
                var box = document.querySelector(".boxed-layout"),
                    timer;
                requestAnimationFrame(function () {
                    box.style.pointerEvents = "none";

                    timer = setTimeout(function () {
                        box.style.pointerEvents = "";
                    }, 300);
                });
                window.addEventListener(
                    "scroll",
                    function () {
                        clearTimeout(timer);

                        requestAnimationFrame(function () {
                            box.style.pointerEvents = "none";

                            timer = setTimeout(function () {
                                box.style.pointerEvents = "";
                            }, 300);
                        });
                    },
                    { passive: true }
                );
            })();

            J_WIN.bind("resize.vamtam-footer", function () {
                requestAnimationFrame(function () {
                    var footer = document.querySelector(".footer-wrapper");

                    footer.style.bottom = "0px";

                    if (
                        !document.body.classList.contains("boxed") &&
                        document.body.classList.contains("sticky-footer") &&
                        !$.VAMTAM.MEDIA.layout["layout-below-max"]
                    ) {
                        document.getElementById("main-content").style[
                            "margin-bottom"
                        ] = footer.offsetHeight + "px";
                    } else {
                        document.getElementById("main-content").style[
                            "margin-bottom"
                        ] = "0px";
                    }
                });
            }).triggerHandler("resize.vamtam-footer");

            // Video resizing
            // =====================================================================
            J_WIN.bind("resize.vamtam-video load.vamtam-video", function () {
                $(
                    ".portfolio-image-wrapper,\
					.boxed-layout .media-inner,\
					.boxed-layout .loop-wrapper.news .thumbnail,\
					.boxed-layout .portfolio-image .thumbnail,\
					.boxed-layout .vamtam-video-frame"
                )
                    .find("iframe, object, embed, video")
                    .each(function () {
                        var v = $(this);

                        if (
                            v.prop("width") === "0" &&
                            v.prop("height") === "0"
                        ) {
                            v.css({ width: "100%" }).css({
                                height: (v.width() * 9) / 16,
                            });
                        } else {
                            v.css({
                                height:
                                    (v.prop("height") * v.width()) /
                                    v.prop("width"),
                            });
                        }

                        v.trigger("vamtam-video-resized");
                    });

                setTimeout(function () {
                    $(".mejs-time-rail").css("width", "-=1px");
                }, 100);
            }).triggerHandler("resize.vamtam-video");

            if ("mediaelementplayer" in $.fn) {
                $(".vamtam-background-video").mediaelementplayer({
                    videoWidth: "100%",
                    videoHeight: "100%",
                    loop: true,
                    enableAutosize: true,
                    features: [],
                });
            }

            $(".vamtam-grid.has-video-bg").addClass("video-bg-loaded");

            // Animated buttons
            // =====================================================================
            $(document).on(
                "mouseover focus click",
                ".animated.flash, .animated.wiggle",
                function () {
                    $(this).removeClass("animated");
                }
            );

            // Tooltip
            // =====================================================================
            var tooltip_animation = 250;
            $(".shortcode-tooltip").hover(
                function () {
                    var tt = $(this)
                        .find(".tooltip")
                        .fadeIn(tooltip_animation)
                        .animate(
                            {
                                bottom: 25,
                            },
                            tooltip_animation
                        );
                    tt.css({ marginLeft: -tt.width() / 2 });
                },
                function () {
                    $(this)
                        .find(".tooltip")
                        .animate(
                            {
                                bottom: 35,
                            },
                            tooltip_animation
                        )
                        .fadeOut(tooltip_animation);
                }
            );

            $(".sitemap li:not(:has(.children))").addClass("single");

            // Scroll to top button
            // =====================================================================

            if ($("#scroll-to-top").length > 0) {
                $(window).bind(
                    "resize scroll",
                    _.debounce(function () {
                        $("#scroll-to-top").toggleClass(
                            "visible",
                            window.pageYOffset > 0
                        );
                    }, 500)
                );
            }

            $("#scroll-to-top, .vamtam-scroll-to-top").click(function (e) {
                $("html,body").animate(
                    {
                        scrollTop: 0,
                    },
                    300
                );

                e.preventDefault();
            });
        });

        $("#feedback.slideout").click(function (e) {
            $(this).parent().toggleClass("expanded");
            e.preventDefault();
        });

        J_WIN.triggerHandler("resize.sizeClass");

        $(window).bind("load", function () {
            setTimeout(function () {
                $(window).trigger("resize");
            }, 1);
        });
    })(jQuery);

    document.addEventListener("DOMContentLoaded", function () {
        if (
            !(
                window.CSS &&
                window.CSS.supports &&
                window.CSS.supports("(--foo: red)")
            )
        ) {
            document.querySelector(
                "header.main-header.layout-logo-menu .first-row .logo-wrapper"
            ).style.minHeight = "auto";
        }
    });
})();
(function ($, undefined) {
    "use strict";

    $(function () {
        var body = $("body");

        var wrapper = $(".vamtam-splash-screen");
        var progress = wrapper.find(".vamtam-splash-screen-progress");

        var removeSplashScreen = function () {
            body.trigger("vamtam-hide-splash-screen");
        };

        body.bind("vamtam-content-resized", function () {
            // allow the first image at most 1000ms to load
            var timeout = setTimeout(removeSplashScreen, 1000);

            var images = -1;
            var loaded = 0;

            body.imagesLoaded()
                .progress(function (instance) {
                    if (images < 0) {
                        images = instance.images.length;
                    }

                    requestAnimationFrame(function () {
                        progress.css("width", (++loaded / images) * 100 + "%");
                    });

                    // allow any consecutive image at most 500ms to load
                    clearTimeout(timeout);
                    timeout = setTimeout(removeSplashScreen, 500);
                })
                .always(removeSplashScreen);
        })
            .one("vamtam-hide-splash-screen", function () {
                requestAnimationFrame(function () {
                    progress.css("width", "100%");

                    setTimeout(function () {
                        wrapper.fadeOut(500);
                    }, 250);
                });
            })
            .bind("vamtam-preview-splash-screen", function () {
                progress.css({
                    "transition-duration": 0,
                    width: "0%",
                });

                progress.css({
                    "transition-duration": "1s",
                });

                wrapper.css("display", "");

                setTimeout(function () {
                    requestAnimationFrame(function () {
                        progress.css("width", "100%");

                        setTimeout(function () {
                            wrapper.fadeOut(500);
                        }, 1000);
                    });
                }, 100);
            });
    });
})(jQuery);
(function ($, undefined) {
    "use strict";

    $(function () {
        var win = $(window);

        var cube_single_page = {
            portfolio: function (url) {
                var t = this;

                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "html",
                })
                    .done(function (result) {
                        t.updateSinglePage(result);

                        $(document).trigger("vamtam-attempt-cube-load");

                        $(document).trigger(
                            "vamtam-single-page-project-loaded"
                        );
                    })
                    .fail(function () {
                        t.updateSinglePage(
                            "AJAX Error! Please refresh the page!"
                        );
                    });
            },
        };

        var cube_narrow = function (el) {
            var inner = el.find(".cbp-wrapper");
            var outer = el.find(".cbp-wrapper-outer");

            if (inner.width() <= outer.width()) {
                el.addClass("vamtam-cube-narrow");
            } else {
                el.removeClass("vamtam-cube-narrow");
            }
        };

        $(document).bind("vamtam-attempt-cube-load", function () {
            $(
                ".vamtam-cubeportfolio[data-options]:not(.vamtam-cube-loaded)"
            ).each(function () {
                var self = $(this);
                var options = self.data("options");

                if (!("singlePageCallback" in options)) {
                    options.singlePageDelegate = null;
                }

                options.singlePageCallback =
                    cube_single_page[options.singlePageCallback] || null;

                self.bind("initComplete.cbp", function () {
                    if ("slider" === options.layoutMode) {
                        cube_narrow(self);

                        win.bind("resize.vamtamcube", function () {
                            cube_narrow(self);
                        });
                    }
                });

                self.addClass("vamtam-cube-loaded").cubeportfolio(options);

                self.on(
                    "vamtam-video-resized",
                    "iframe, object, embed, video",
                    function () {
                        self.data("cubeportfolio").layoutAndAdjustment();
                    }
                );
            });
        });

        $(document).trigger("vamtam-attempt-cube-load");
    });
})(jQuery);
(function ($, undefined) {
    "use strict";

    $(function () {
        if (
            VAMTAM_HIDDEN_WIDGETS !== undefined &&
            VAMTAM_HIDDEN_WIDGETS.length > 0
        ) {
            var width = -1;
            var win = $(window);

           
        }
    });
})(jQuery);
(function ($, undefined) {
    "use strict";

    $(function () {
        var elements;

        var group_elements = function () {
            elements = [];

            $(".row:has(> div.has-background)").each(function (i, row_el) {
                var row = $(row_el),
                    columns = row.find("> div");

                if (columns.length > 1) {
                    row.addClass("has-nomargin-column");
                    elements.push(columns);
                }
            });

            $(".row:has(> div > .linkarea)").each(function (i, row_el) {
                var row = $(row_el),
                    columns = row.find("> div > .linkarea");

                if (columns.length > 1) {
                    elements.push(columns);
                }
            });

            $(".row:has(> div > .services.has-more)").each(function (
                i,
                row_el
            ) {
                var row = $(row_el),
                    columns = row.find("> div > .services.has-more > .closed");

                if (columns.length > 1) {
                    elements.push(columns);
                }

                var open = row.find("> div > .services.has-more > .open");

                if (Modernizr.touchevents && open.length > 1) {
                    elements.push(open);
                }
            });

            $("#footer-sidebars .row").each(function () {
                elements.push($(this).find("aside"));
            });
        };

        group_elements();

        var fix_heights = _.throttle(function () {
            var i;
            if ($.VAMTAM.MEDIA.layout["layout-below-max"]) {
                for (i = 0; i < elements.length; ++i) {
                    elements[i].matchHeight("remove");
                }
            } else {
                for (i = 0; i < elements.length; ++i) {
                    elements[i].matchHeight({
                        byRow: false,
                        property: "min-height",
                    });
                }
            }
        }, 600);

        $(window).bind("resize.vamtam-equal-heights-full", function () {
            group_elements();
            fix_heights();
        });
        $(window).bind("resize.vamtam-equal-heights", fix_heights);

        if (
            "undefined" !== typeof wp &&
            wp.customize &&
            wp.customize.selectiveRefresh
        ) {
            wp.customize.selectiveRefresh.bind("sidebar-updated", function () {
                fix_heights();
            });
        }

        // deal with desktop safari's issues
        if (
            "vendor" in navigator &&
            navigator.vendor.match(/Apple Computer, Inc./) &&
            !navigator.userAgent.match(/(iPod|iPhone|iPad)/)
        ) {
            setInterval(function () {
                fix_heights();
            }, 1000);
        }
    });
})(jQuery);
(function ($, undefined) {
    "use strict";

    $(function () {
        var dropdown = $(".fixed-header-box .cart-dropdown"),
            link = $(".vamtam-cart-dropdown-link"),
            count = $(".products", link),
            widget = $(".widget", dropdown),
            isVisible = false;

        $("body").bind(
            "added_to_cart wc_fragments_refreshed wc_fragments_loaded",
            function () {
                var count_val = parseInt(
                    Cookies.get("woocommerce_items_in_cart") || 0,
                    10
                );

                if (count_val > 0) {
                    var count_real = 0;
                    $(".widget_shopping_cart:first li .quantity").each(
                        function () {
                            count_real += parseInt(
                                $(this)
                                    .clone()
                                    .children()
                                    .remove()
                                    .end()
                                    .contents()
                                    .text(),
                                10
                            );
                        }
                    );
                    count.text(count_real);
                    count.removeClass("cart-empty");
                    dropdown.removeClass("hidden");
                    $(this).addClass("header-cart-visible");
                } else {
                    count.addClass("cart-empty");
                    count.text("0");
                    // dropdown.addClass('hidden');
                    // $(this).removeClass('header-cart-visible');
                }
            }
        );

        var open = 0;

        var showCart = function () {
            open = +new Date();
            dropdown.addClass("state-hover");
            widget.stop(true, true).fadeIn(300, function () {
                isVisible = true;
            });
        };

        var hideCart = function () {
            var elapsed = new Date() - open;

            if (elapsed > 1000) {
                dropdown.removeClass("state-hover");
                widget.stop(true, true).fadeOut(300, function () {
                    isVisible = false;
                });
            } else {
                setTimeout(function () {
                    if (!dropdown.is(":hover")) {
                        hideCart();
                    }
                }, 1000 - elapsed);
            }
        };

        dropdown
            .bind("mouseenter", function () {
                showCart();
            })
            .bind("mouseleave", function () {
                hideCart();
            });

        link.not(".no-dropdown").bind("click", function (e) {
            if (isVisible) {
                hideCart();
            } else {
                showCart();
            }

            e.preventDefault();
        });
    });
})(jQuery);
(function ($, undefined) {
    "use strict";

    var transDuration = 700,
        body = $("body"),
        easeOutQuint = function (x, t, b, c, d) {
            return -c * ((t = t / d - 1) * t * t * t - 1) + b;
        };

    var doClose = function () {
        if ($(this).hasClass("state-closed")) return;

        body.unbind("touchstart.portfolio-overlay-close" + $(this).data("id"));

        $(this).addClass("state-closed").removeClass("state-open");

        $(".thumbnail-overlay", this).fadeOut(
            {
                opacity: 0,
            },
            {
                duration: transDuration,
                easing: easeOutQuint,
            }
        );
    };

    var doOpen = function () {
        var self = $(this);
        if (self.hasClass("state-open")) return;

        self.addClass("state-open").removeClass("state-closed");

        $(".thumbnail-overlay", this).stop(true, true).fadeIn({
            duration: transDuration,
            easing: "easeOutQuint",
        });

        if (Modernizr.touchevents) {
            var bodyEvent =
                "touchstart.portfolio-overlay-close" + self.data("id");
            body.bind(bodyEvent, function () {
                // console.log('event 2');
                body.unbind(bodyEvent);
                doClose.call(self);
            });
        } else {
            $(this).bind("mouseleave.portfolio-overlay-close", function () {
                // console.log('event 3');
                $(this).unbind("mouseleave.portfolio-overlay-close");
                doClose.call(this);
            });
        }
    };

    $(function () {
        var portfolios = $(".portfolios");

        if (Modernizr.touchevents) {
            var last_touch = 0;

            portfolios.on(
                "click.portfolio-overlay",
                ".vamtam-project",
                function () {
                    // console.log('event 4');
                    doOpen.call(this);
                }
            );

            portfolios.on("click", ".vamtam-project a", function (e) {
                if (+new Date() - last_touch < 1000) {
                    var self = $(this).closest(".portfolios .vamtam-project");

                    // console.log('event 5');
                    if ($(self).hasClass("state-closed")) {
                        e.preventDefault();
                    } else if (!$(this).hasClass("cbp-lightbox")) {
                        e.stopPropagation();
                    }
                }
            });

            portfolios.on("touchstart", ".vamtam-project a", function (e) {
                var self = $(this).closest(".portfolios .vamtam-project");

                last_touch = +new Date();

                // console.log('event 5.1');
                if (!$(self).hasClass("state-closed")) {
                    e.stopPropagation();
                }
            });
        } else {
            portfolios.on("mouseenter", ".vamtam-project", function () {
                // console.log('event 6');
                doOpen.call(this);
            });
        }
    });
})(jQuery);
(function ($, undefined) {
    "use strict";

    $(function () {
        var settings = {};

        var mediaElement = function (context) {
            if (typeof window._wpmejsSettings !== "undefined") {
                settings = $.extend(true, {}, window._wpmejsSettings);
            }

            settings.classPrefix = "mejs-";
            settings.success =
                settings.success ||
                function (mejs) {
                    var autoplay, loop;

                    if (
                        mejs.rendererName &&
                        -1 !== mejs.rendererName.indexOf("flash")
                    ) {
                        autoplay =
                            mejs.attributes.autoplay &&
                            "false" !== mejs.attributes.autoplay;
                        loop =
                            mejs.attributes.loop &&
                            "false" !== mejs.attributes.loop;

                        if (autoplay) {
                            mejs.addEventListener(
                                "canplay",
                                function () {
                                    mejs.play();
                                },
                                false
                            );
                        }

                        if (loop) {
                            mejs.addEventListener(
                                "ended",
                                function () {
                                    mejs.play();
                                },
                                false
                            );
                        }
                    }
                };

            if ("mediaelementplayer" in $.fn) {
                // Only initialize new media elements.
                $(".wp-audio-shortcode, .wp-video-shortcode", context)
                    .not(".mejs-container")
                    .filter(function () {
                        return !$(this).parent().hasClass("mejs-mediaelement");
                    })
                    .mediaelementplayer(settings);
            }
        };

        // infinite scrolling
        if ($("body").is(".pagination-infinite-scrolling")) {
            var last_auto_load = 0;
            $(window).bind("resize scroll", function (e) {
                var button = $(".lm-btn"),
                    now_time = e.timeStamp || new Date().getTime();

                if (
                    now_time - last_auto_load > 500 &&
                    parseFloat(button.css("opacity"), 10) === 1 &&
                    $(window).scrollTop() + $(window).height() >=
                        button.offset().top
                ) {
                    last_auto_load = now_time;
                    button.click();
                }
            });
        }

        $("body").on("click.pagination", ".load-more", function (e) {
            e.preventDefault();
            e.stopPropagation(); // customizer support

            var self = $(this);
            var list = self.prev();
            var link = self.find("a");

            if (self.hasClass("loading")) {
                return false;
            }

            self.addClass("loading").find("> *").animate({ opacity: 0 });

            $.post(
                VAMTAM_FRONT.ajaxurl,
                {
                    action: "vamtam-load-more",
                    query: link.data("query"),
                    other_vars: link.data("other-vars"),
                },
                function (result) {
                    var content = $(result.content);

                    mediaElement(content);

                    var visible = list.find(
                        ".cbp-item:not( .cbp-item-off )"
                    ).length;

                    list.cubeportfolio("appendItems", content, function () {
                        if (
                            visible ===
                            list.find(".cbp-item:not( .cbp-item-off )").length
                        ) {
                            var warning = $("<p />")
                                .addClass("vamtam-load-more-warning")
                                .text(list.data("hidden-by-filters"));

                            warning.insertAfter(self);

                            $("body").one("click", function () {
                                warning.remove();
                            });
                        }

                        self.replaceWith(result.button);

                        self.removeClass("loading")
                            .find("> *")
                            .animate({ opacity: 1 });

                        $(window).triggerHandler("resize.vamtam-video");
                    });
                }
            );
        });
    });
})(jQuery);
