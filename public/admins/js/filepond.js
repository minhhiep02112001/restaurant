/*!
 * FilePond 4.30.4
 * Licensed under MIT, https://opensource.org/licenses/MIT/
 * Please visit https://pqina.nl/filepond/ for details.
 */

/* eslint-disable */

!function (e, t) {
    "object" == typeof exports && "undefined" != typeof module ? t(exports) : "function" == typeof define && define.amd ? define(["exports"], t) : t((e = e || self).FilePond = {})
}(this, function (e) {
    "use strict";
    var t = function (e, t) {
            for (var n in e) e.hasOwnProperty(n) && t(n, e[n])
        }, n = function (e) {
            var n = {};
            return t(e, function (t) {
                !function (e, t, n) {
                    "function" != typeof n ? Object.defineProperty(e, t, Object.assign({}, n)) : e[t] = n
                }(n, t, e[t])
            }), n
        }, r = function (e, t) {
            var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null;
            if (null === n) return e.getAttribute(t) || e.hasAttribute(t);
            e.setAttribute(t, n)
        }, o = ["svg", "path"], i = function (e) {
            return o.includes(e)
        }, a = function (e, n) {
            var o = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
            "object" == typeof n && (o = n, n = null);
            var a = i(e) ? document.createElementNS("http://www.w3.org/2000/svg", e) : document.createElement(e);
            return n && (i(e) ? r(a, "class", n) : a.className = n), t(o, function (e, t) {
                r(a, e, t)
            }), a
        }, s = function (e, t) {
            return function (e, n) {
                return void 0 !== n ? t.splice(n, 0, e) : t.push(e), e
            }
        }, u = function (e, t) {
            return function (n) {
                return t.splice(t.indexOf(n), 1), n.element.parentNode && e.removeChild(n.element), n
            }
        }, l = "undefined" != typeof window && void 0 !== window.document, c = function () {
            return l
        }, f = "children" in (c() ? a("svg") : {}) ? function (e) {
            return e.children.length
        } : function (e) {
            return e.childNodes.length
        }, d = function (e, t, n, r) {
            var o = n[0] || e.left, i = n[1] || e.top, a = o + e.width, s = i + e.height * (r[1] || 1), u = {
                element: Object.assign({}, e),
                inner: {left: e.left, top: e.top, right: e.right, bottom: e.bottom},
                outer: {left: o, top: i, right: a, bottom: s}
            };
            return t.filter(function (e) {
                return !e.isRectIgnored()
            }).map(function (e) {
                return e.rect
            }).forEach(function (e) {
                p(u.inner, Object.assign({}, e.inner)), p(u.outer, Object.assign({}, e.outer))
            }), E(u.inner), u.outer.bottom += u.element.marginBottom, u.outer.right += u.element.marginRight, E(u.outer), u
        }, p = function (e, t) {
            t.top += e.top, t.right += e.left, t.bottom += e.top, t.left += e.left, t.bottom > e.bottom && (e.bottom = t.bottom), t.right > e.right && (e.right = t.right)
        }, E = function (e) {
            e.width = e.right - e.left, e.height = e.bottom - e.top
        }, _ = function (e) {
            return "number" == typeof e
        }, T = function (e) {
            return e < .5 ? 2 * e * e : (4 - 2 * e) * e - 1
        }, I = {
            spring: function () {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, t = e.stiffness,
                    r = void 0 === t ? .5 : t, o = e.damping, i = void 0 === o ? .75 : o, a = e.mass,
                    s = void 0 === a ? 10 : a, u = null, l = null, c = 0, f = !1, d = n({
                        interpolate: function (e, t) {
                            if (!f) {
                                if (!_(u) || !_(l)) return f = !0, void (c = 0);
                                (function (e, t, n) {
                                    var r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : .001;
                                    return Math.abs(e - t) < r && Math.abs(n) < r
                                })(l += c += -(l - u) * r / s, u, c *= i) || t ? (l = u, c = 0, f = !0, d.onupdate(l), d.oncomplete(l)) : d.onupdate(l)
                            }
                        }, target: {
                            set: function (e) {
                                if (_(e) && !_(l) && (l = e), null === u && (u = e, l = e), l === (u = e) || void 0 === u) return f = !0, c = 0, d.onupdate(l), void d.oncomplete(l);
                                f = !1
                            }, get: function () {
                                return u
                            }
                        }, resting: {
                            get: function () {
                                return f
                            }
                        }, onupdate: function (e) {
                        }, oncomplete: function (e) {
                        }
                    });
                return d
            }, tween: function () {
                var e, t, r = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, o = r.duration,
                    i = void 0 === o ? 500 : o, a = r.easing, s = void 0 === a ? T : a, u = r.delay,
                    l = void 0 === u ? 0 : u, c = null, f = !0, d = !1, p = null, E = n({
                        interpolate: function (n, r) {
                            f || null === p || (null === c && (c = n), n - c < l || ((e = n - c - l) >= i || r ? (e = 1, t = d ? 0 : 1, E.onupdate(t * p), E.oncomplete(t * p), f = !0) : (t = e / i, E.onupdate((e >= 0 ? s(d ? 1 - t : t) : 0) * p))))
                        }, target: {
                            get: function () {
                                return d ? 0 : p
                            }, set: function (e) {
                                if (null === p) return p = e, E.onupdate(e), void E.oncomplete(e);
                                e < p ? (p = 1, d = !0) : (d = !1, p = e), f = !1, c = null
                            }
                        }, resting: {
                            get: function () {
                                return f
                            }
                        }, onupdate: function (e) {
                        }, oncomplete: function (e) {
                        }
                    });
                return E
            }
        }, v = function (e, t, n) {
            var r = e[t] && "object" == typeof e[t][n] ? e[t][n] : e[t] || e, o = "string" == typeof r ? r : r.type,
                i = "object" == typeof r ? Object.assign({}, r) : {};
            return I[o] ? I[o](i) : null
        }, m = function (e, t, n) {
            var r = arguments.length > 3 && void 0 !== arguments[3] && arguments[3];
            (t = Array.isArray(t) ? t : [t]).forEach(function (t) {
                e.forEach(function (e) {
                    var o = e, i = function () {
                        return n[e]
                    }, a = function (t) {
                        return n[e] = t
                    };
                    "object" == typeof e && (o = e.key, i = e.getter || i, a = e.setter || a), t[o] && !r || (t[o] = {
                        get: i,
                        set: a
                    })
                })
            })
        }, h = function (e) {
            return null != e
        }, g = {
            opacity: 1,
            scaleX: 1,
            scaleY: 1,
            translateX: 0,
            translateY: 0,
            rotateX: 0,
            rotateY: 0,
            rotateZ: 0,
            originX: 0,
            originY: 0
        }, R = function (e, t) {
            if (Object.keys(e).length !== Object.keys(t).length) return !0;
            for (var n in t) if (t[n] !== e[n]) return !0;
            return !1
        }, O = function (e, t) {
            var n = t.opacity, r = t.perspective, o = t.translateX, i = t.translateY, a = t.scaleX, s = t.scaleY,
                u = t.rotateX, l = t.rotateY, c = t.rotateZ, f = t.originX, d = t.originY, p = t.width, E = t.height,
                _ = "", T = "";
            (h(f) || h(d)) && (T += "transform-origin: " + (f || 0) + "px " + (d || 0) + "px;"), h(r) && (_ += "perspective(" + r + "px) "), (h(o) || h(i)) && (_ += "translate3d(" + (o || 0) + "px, " + (i || 0) + "px, 0) "), (h(a) || h(s)) && (_ += "scale3d(" + (h(a) ? a : 1) + ", " + (h(s) ? s : 1) + ", 1) "), h(c) && (_ += "rotateZ(" + c + "rad) "), h(u) && (_ += "rotateX(" + u + "rad) "), h(l) && (_ += "rotateY(" + l + "rad) "), _.length && (T += "transform:" + _ + ";"), h(n) && (T += "opacity:" + n + ";", 0 === n && (T += "visibility:hidden;"), n < 1 && (T += "pointer-events:none;")), h(E) && (T += "height:" + E + "px;"), h(p) && (T += "width:" + p + "px;");
            var I = e.elementCurrentStyle || "";
            T.length === I.length && T === I || (e.style.cssText = T, e.elementCurrentStyle = T)
        }, y = {
            styles: function (e) {
                var t = e.mixinConfig, n = e.viewProps, r = e.viewInternalAPI, o = e.viewExternalAPI, i = e.view,
                    a = Object.assign({}, n), s = {};
                m(t, [r, o], n);
                var u = function () {
                    return i.rect ? d(i.rect, i.childViews, [n.translateX || 0, n.translateY || 0], [n.scaleX || 0, n.scaleY || 0]) : null
                };
                return r.rect = {get: u}, o.rect = {get: u}, t.forEach(function (e) {
                    n[e] = void 0 === a[e] ? g[e] : a[e]
                }), {
                    write: function () {
                        if (R(s, n)) return O(i.element, n), Object.assign(s, Object.assign({}, n)), !0
                    }, destroy: function () {
                    }
                }
            }, listeners: function (e) {
                e.mixinConfig, e.viewProps, e.viewInternalAPI;
                var t, n = e.viewExternalAPI, r = (e.viewState, e.view), o = [], i = (t = r.element, function (e, n) {
                    t.addEventListener(e, n)
                }), a = function (e) {
                    return function (t, n) {
                        e.removeEventListener(t, n)
                    }
                }(r.element);
                return n.on = function (e, t) {
                    o.push({type: e, fn: t}), i(e, t)
                }, n.off = function (e, t) {
                    o.splice(o.findIndex(function (n) {
                        return n.type === e && n.fn === t
                    }), 1), a(e, t)
                }, {
                    write: function () {
                        return !0
                    }, destroy: function () {
                        o.forEach(function (e) {
                            a(e.type, e.fn)
                        })
                    }
                }
            }, animations: function (e) {
                var n = e.mixinConfig, r = e.viewProps, o = e.viewInternalAPI, i = e.viewExternalAPI,
                    a = Object.assign({}, r), s = [];
                return t(n, function (e, t) {
                    var n = v(t);
                    n && (n.onupdate = function (t) {
                        r[e] = t
                    }, n.target = a[e], m([{
                        key: e, setter: function (e) {
                            n.target !== e && (n.target = e)
                        }, getter: function () {
                            return r[e]
                        }
                    }], [o, i], r, !0), s.push(n))
                }), {
                    write: function (e) {
                        var t = document.hidden, n = !0;
                        return s.forEach(function (r) {
                            r.resting || (n = !1), r.interpolate(e, t)
                        }), n
                    }, destroy: function () {
                    }
                }
            }, apis: function (e) {
                var t = e.mixinConfig, n = e.viewProps, r = e.viewExternalAPI;
                m(t, r, n)
            }
        }, D = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
            return t.layoutCalculated || (e.paddingTop = parseInt(n.paddingTop, 10) || 0, e.marginTop = parseInt(n.marginTop, 10) || 0, e.marginRight = parseInt(n.marginRight, 10) || 0, e.marginBottom = parseInt(n.marginBottom, 10) || 0, e.marginLeft = parseInt(n.marginLeft, 10) || 0, t.layoutCalculated = !0), e.left = t.offsetLeft || 0, e.top = t.offsetTop || 0, e.width = t.offsetWidth || 0, e.height = t.offsetHeight || 0, e.right = e.left + e.width, e.bottom = e.top + e.height, e.scrollTop = t.scrollTop, e.hidden = null === t.offsetParent, e
        }, S = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, t = e.tag,
                r = void 0 === t ? "div" : t, o = e.name, i = void 0 === o ? null : o, l = e.attributes,
                c = void 0 === l ? {} : l, p = e.read, E = void 0 === p ? function () {
                } : p, _ = e.write, T = void 0 === _ ? function () {
                } : _, I = e.create, v = void 0 === I ? function () {
                } : I, m = e.destroy, h = void 0 === m ? function () {
                } : m, g = e.filterFrameActionsForChild, R = void 0 === g ? function (e, t) {
                    return t
                } : g, O = e.didCreateView, S = void 0 === O ? function () {
                } : O, A = e.didWriteView, L = void 0 === A ? function () {
                } : A, b = e.ignoreRect, P = void 0 !== b && b, M = e.ignoreRectUpdate, w = void 0 !== M && M, C = e.mixins,
                N = void 0 === C ? [] : C;
            return function (e) {
                var t, o = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    l = a(r, "filepond--" + i, c), p = window.getComputedStyle(l, null), _ = D(), I = null, m = !1, g = [],
                    O = [], A = {}, b = {}, M = [T], C = [E], G = [h], U = function () {
                        return l
                    }, B = function () {
                        return g.concat()
                    }, F = function () {
                        return I || (I = d(_, g, [0, 0], [1, 1]))
                    }, q = {
                        element: {get: U}, style: {
                            get: function () {
                                return p
                            }
                        }, childViews: {get: B}
                    }, V = Object.assign({}, q, {
                        rect: {get: F}, ref: {
                            get: function () {
                                return A
                            }
                        }, is: function (e) {
                            return i === e
                        }, appendChild: (t = l, function (e, n) {
                            void 0 !== n && t.children[n] ? t.insertBefore(e, t.children[n]) : t.appendChild(e)
                        }), createChildView: function (e) {
                            return function (t, n) {
                                return t(e, n)
                            }
                        }(e), linkView: function (e) {
                            return g.push(e), e
                        }, unlinkView: function (e) {
                            g.splice(g.indexOf(e), 1)
                        }, appendChildView: s(0, g), removeChildView: u(l, g), registerWriter: function (e) {
                            return M.push(e)
                        }, registerReader: function (e) {
                            return C.push(e)
                        }, registerDestroyer: function (e) {
                            return G.push(e)
                        }, invalidateLayout: function () {
                            return l.layoutCalculated = !1
                        }, dispatch: e.dispatch, query: e.query
                    }), x = {
                        element: {get: U}, childViews: {get: B}, rect: {get: F}, resting: {
                            get: function () {
                                return m
                            }
                        }, isRectIgnored: function () {
                            return P
                        }, _read: function () {
                            I = null, g.forEach(function (e) {
                                return e._read()
                            }), !(w && _.width && _.height) && D(_, l, p);
                            var e = {root: k, props: o, rect: _};
                            C.forEach(function (t) {
                                return t(e)
                            })
                        }, _write: function (e, t, n) {
                            var r = 0 === t.length;
                            return M.forEach(function (i) {
                                !1 === i({props: o, root: k, actions: t, timestamp: e, shouldOptimize: n}) && (r = !1)
                            }), O.forEach(function (t) {
                                !1 === t.write(e) && (r = !1)
                            }), g.filter(function (e) {
                                return !!e.element.parentNode
                            }).forEach(function (o) {
                                o._write(e, R(o, t), n) || (r = !1)
                            }), g.forEach(function (o, i) {
                                o.element.parentNode || (k.appendChild(o.element, i), o._read(), o._write(e, R(o, t), n), r = !1)
                            }), m = r, L({props: o, root: k, actions: t, timestamp: e}), r
                        }, _destroy: function () {
                            O.forEach(function (e) {
                                return e.destroy()
                            }), G.forEach(function (e) {
                                e({root: k, props: o})
                            }), g.forEach(function (e) {
                                return e._destroy()
                            })
                        }
                    }, Y = Object.assign({}, q, {
                        rect: {
                            get: function () {
                                return _
                            }
                        }
                    });
                Object.keys(N).sort(function (e, t) {
                    return "styles" === e ? 1 : "styles" === t ? -1 : 0
                }).forEach(function (e) {
                    var t = y[e]({
                        mixinConfig: N[e],
                        viewProps: o,
                        viewState: b,
                        viewInternalAPI: V,
                        viewExternalAPI: x,
                        view: n(Y)
                    });
                    t && O.push(t)
                });
                var k = n(V);
                v({root: k, props: o});
                var j = f(l);
                return g.forEach(function (e, t) {
                    k.appendChild(e.element, j + t)
                }), S(k), n(x)
            }
        }, A = function (e, t) {
            return function (n) {
                var r = n.root, o = n.props, i = n.actions, a = void 0 === i ? [] : i, s = n.timestamp,
                    u = n.shouldOptimize;
                a.filter(function (t) {
                    return e[t.type]
                }).forEach(function (t) {
                    return e[t.type]({root: r, props: o, action: t.data, timestamp: s, shouldOptimize: u})
                }), t && t({root: r, props: o, actions: a, timestamp: s, shouldOptimize: u})
            }
        }, L = function (e, t) {
            return t.parentNode.insertBefore(e, t)
        }, b = function (e, t) {
            return t.parentNode.insertBefore(e, t.nextSibling)
        }, P = function (e) {
            return Array.isArray(e)
        }, M = function (e) {
            return null == e
        }, w = function (e) {
            return e.trim()
        }, C = function (e) {
            return "" + e
        }, N = function (e) {
            return "boolean" == typeof e
        }, G = function (e) {
            return N(e) ? e : "true" === e
        }, U = function (e) {
            return "string" == typeof e
        }, B = function (e) {
            return _(e) ? e : U(e) ? C(e).replace(/[a-z]+/gi, "") : 0
        }, F = function (e) {
            return parseInt(B(e), 10)
        }, q = function (e) {
            return parseFloat(B(e))
        }, V = function (e) {
            return _(e) && isFinite(e) && Math.floor(e) === e
        }, x = function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1e3;
            if (V(e)) return e;
            var n = C(e).trim();
            return /MB$/i.test(n) ? (n = n.replace(/MB$i/, "").trim(), F(n) * t * t) : /KB/i.test(n) ? (n = n.replace(/KB$i/, "").trim(), F(n) * t) : F(n)
        }, Y = function (e) {
            return "function" == typeof e
        }, k = {process: "POST", patch: "PATCH", revert: "DELETE", fetch: "GET", restore: "GET", load: "GET"},
        j = function (e, t, n, r, o) {
            if (null === t) return null;
            if ("function" == typeof t) return t;
            var i = {
                url: "GET" === n || "PATCH" === n ? "?" + e + "=" : "",
                method: n,
                headers: o,
                withCredentials: !1,
                timeout: r,
                onload: null,
                ondata: null,
                onerror: null
            };
            if (U(t)) return i.url = t, i;
            if (Object.assign(i, t), U(i.headers)) {
                var a = i.headers.split(/:(.+)/);
                i.headers = {header: a[0], value: a[1]}
            }
            return i.withCredentials = G(i.withCredentials), i
        }, H = function (e) {
            return "object" == typeof e && null !== e
        }, X = function (e) {
            return P(e) ? "array" : function (e) {
                return null === e
            }(e) ? "null" : V(e) ? "int" : /^[0-9]+ ?(?:GB|MB|KB)$/gi.test(e) ? "bytes" : function (e) {
                return H(e) && U(e.url) && H(e.process) && H(e.revert) && H(e.restore) && H(e.fetch)
            }(e) ? "api" : typeof e
        }, W = {
            array: function (e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : ",";
                return M(e) ? [] : P(e) ? e : C(e).split(t).map(w).filter(function (e) {
                    return e.length
                })
            }, boolean: G, int: function (e) {
                return "bytes" === X(e) ? x(e) : F(e)
            }, number: q, float: q, bytes: x, string: function (e) {
                return Y(e) ? e : C(e)
            }, function: function (e) {
                return function (e) {
                    for (var t = self, n = e.split("."), r = null; r = n.shift();) if (!(t = t[r])) return null;
                    return t
                }(e)
            }, serverapi: function (e) {
                return (r = {}).url = U(n = e) ? n : n.url || "", r.timeout = n.timeout ? parseInt(n.timeout, 10) : 0, r.headers = n.headers ? n.headers : {}, t(k, function (e) {
                    r[e] = j(e, n[e], k[e], r.timeout, r.headers)
                }), r.process = n.process || U(n) || n.url ? r.process : null, r.remove = n.remove || null, delete r.headers, r;
                var n, r
            }, object: function (e) {
                try {
                    return JSON.parse(e.replace(/{\s*'/g, '{"').replace(/'\s*}/g, '"}').replace(/'\s*:/g, '":').replace(/:\s*'/g, ':"').replace(/,\s*'/g, ',"').replace(/'\s*,/g, '",'))
                } catch (e) {
                    return null
                }
            }
        }, z = function (e, t, n) {
            if (e === t) return e;
            var r, o = X(e);
            if (o !== n) {
                var i = (r = e, W[n](r));
                if (o = X(i), null === i) throw'Trying to assign value with incorrect type to "' + option + '", allowed type: "' + n + '"';
                e = i
            }
            return e
        }, Q = function (e) {
            var r = {};
            return t(e, function (t) {
                var n, o, i, a = e[t];
                r[t] = (n = a[0], o = a[1], i = n, {
                    enumerable: !0, get: function () {
                        return i
                    }, set: function (e) {
                        i = z(e, n, o)
                    }
                })
            }), n(r)
        }, Z = function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "-";
            return e.split(/(?=[A-Z])/).map(function (e) {
                return e.toLowerCase()
            }).join(t)
        }, K = function (e) {
            return function (n, r, o) {
                var i = {};
                return t(e, function (e) {
                    var t = Z(e, "_").toUpperCase();
                    i["SET_" + t] = function (r) {
                        try {
                            o.options[e] = r.value
                        } catch (e) {
                        }
                        n("DID_SET_" + t, {value: o.options[e]})
                    }
                }), i
            }
        }, $ = function (e) {
            return function (n) {
                var r = {};
                return t(e, function (e) {
                    r["GET_" + Z(e, "_").toUpperCase()] = function (t) {
                        return n.options[e]
                    }
                }), r
            }
        }, J = 1, ee = 2, te = 3, ne = 4, re = 5, oe = function () {
            return Math.random().toString(36).substring(2, 11)
        };

    function ie(e) {
        this.wrapped = e
    }

    function ae(e) {
        var t, n;

        function r(t, n) {
            try {
                var i = e[t](n), a = i.value, s = a instanceof ie;
                Promise.resolve(s ? a.wrapped : a).then(function (e) {
                    s ? r("next", e) : o(i.done ? "return" : "normal", e)
                }, function (e) {
                    r("throw", e)
                })
            } catch (e) {
                o("throw", e)
            }
        }

        function o(e, o) {
            switch (e) {
                case"return":
                    t.resolve({value: o, done: !0});
                    break;
                case"throw":
                    t.reject(o);
                    break;
                default:
                    t.resolve({value: o, done: !1})
            }
            (t = t.next) ? r(t.key, t.arg) : n = null
        }

        this._invoke = function (e, o) {
            return new Promise(function (i, a) {
                var s = {key: e, arg: o, resolve: i, reject: a, next: null};
                n ? n = n.next = s : (t = n = s, r(e, o))
            })
        }, "function" != typeof e.return && (this.return = void 0)
    }

    function se(e, t) {
        if (null == e) return {};
        var n, r, o = function (e, t) {
            if (null == e) return {};
            var n, r, o = {}, i = Object.keys(e);
            for (r = 0; r < i.length; r++) n = i[r], t.indexOf(n) >= 0 || (o[n] = e[n]);
            return o
        }(e, t);
        if (Object.getOwnPropertySymbols) {
            var i = Object.getOwnPropertySymbols(e);
            for (r = 0; r < i.length; r++) n = i[r], t.indexOf(n) >= 0 || Object.prototype.propertyIsEnumerable.call(e, n) && (o[n] = e[n])
        }
        return o
    }

    "function" == typeof Symbol && Symbol.asyncIterator && (ae.prototype[Symbol.asyncIterator] = function () {
        return this
    }), ae.prototype.next = function (e) {
        return this._invoke("next", e)
    }, ae.prototype.throw = function (e) {
        return this._invoke("throw", e)
    }, ae.prototype.return = function (e) {
        return this._invoke("return", e)
    };

    function ue(e) {
        return function (e) {
            if (Array.isArray(e)) {
                for (var t = 0, n = new Array(e.length); t < e.length; t++) n[t] = e[t];
                return n
            }
        }(e) || le(e) || function () {
            throw new TypeError("Invalid attempt to spread non-iterable instance")
        }()
    }

    function le(e) {
        if (Symbol.iterator in Object(e) || "[object Arguments]" === Object.prototype.toString.call(e)) return Array.from(e)
    }

    var ce, fe, de = function (e, t) {
            return e.splice(t, 1)
        }, pe = function () {
            var e = [], t = function (t, n) {
                de(e, e.findIndex(function (e) {
                    return e.event === t && (e.cb === n || !n)
                }))
            }, n = function (t, n, r) {
                e.filter(function (e) {
                    return e.event === t
                }).map(function (e) {
                    return e.cb
                }).forEach(function (e) {
                    return function (e, t) {
                        t ? e() : document.hidden ? Promise.resolve(1).then(e) : setTimeout(e, 0)
                    }(function () {
                        return e.apply(void 0, ue(n))
                    }, r)
                })
            };
            return {
                fireSync: function (e) {
                    for (var t = arguments.length, r = new Array(t > 1 ? t - 1 : 0), o = 1; o < t; o++) r[o - 1] = arguments[o];
                    n(e, r, !0)
                }, fire: function (e) {
                    for (var t = arguments.length, r = new Array(t > 1 ? t - 1 : 0), o = 1; o < t; o++) r[o - 1] = arguments[o];
                    n(e, r, !1)
                }, on: function (t, n) {
                    e.push({event: t, cb: n})
                }, onOnce: function (n, r) {
                    e.push({
                        event: n, cb: function () {
                            t(n, r), r.apply(void 0, arguments)
                        }
                    })
                }, off: t
            }
        }, Ee = function (e, t, n) {
            Object.getOwnPropertyNames(e).filter(function (e) {
                return !n.includes(e)
            }).forEach(function (n) {
                return Object.defineProperty(t, n, Object.getOwnPropertyDescriptor(e, n))
            })
        },
        _e = ["fire", "process", "revert", "load", "on", "off", "onOnce", "retryLoad", "extend", "archive", "archived", "release", "released", "requestProcessing", "freeze"],
        Te = function (e) {
            var t = {};
            return Ee(e, t, _e), t
        }, Ie = {
            INIT: 1,
            IDLE: 2,
            PROCESSING_QUEUED: 9,
            PROCESSING: 3,
            PROCESSING_COMPLETE: 5,
            PROCESSING_ERROR: 6,
            PROCESSING_REVERT_ERROR: 10,
            LOADING: 7,
            LOAD_ERROR: 8
        }, ve = {INPUT: 1, LIMBO: 2, LOCAL: 3}, me = function (e) {
            return /[^0-9]+/.exec(e)
        }, he = function () {
            return me(1.1.toLocaleString())[0]
        }, ge = {
            BOOLEAN: "boolean",
            INT: "int",
            NUMBER: "number",
            STRING: "string",
            ARRAY: "array",
            OBJECT: "object",
            FUNCTION: "function",
            ACTION: "action",
            SERVER_API: "serverapi",
            REGEX: "regex"
        }, Re = [], Oe = function (e, t, n) {
            return new Promise(function (r, o) {
                var i = Re.filter(function (t) {
                    return t.key === e
                }).map(function (e) {
                    return e.cb
                });
                if (0 !== i.length) {
                    var a = i.shift();
                    i.reduce(function (e, t) {
                        return e.then(function (e) {
                            return t(e, n)
                        })
                    }, a(t, n)).then(function (e) {
                        return r(e)
                    }).catch(function (e) {
                        return o(e)
                    })
                } else r(t)
            })
        }, ye = function (e, t, n) {
            return Re.filter(function (t) {
                return t.key === e
            }).map(function (e) {
                return e.cb(t, n)
            })
        }, De = function (e, t) {
            return Re.push({key: e, cb: t})
        }, Se = function () {
            return Object.assign({}, Ae)
        }, Ae = {
            id: [null, ge.STRING],
            name: ["filepond", ge.STRING],
            disabled: [!1, ge.BOOLEAN],
            className: [null, ge.STRING],
            required: [!1, ge.BOOLEAN],
            captureMethod: [null, ge.STRING],
            allowSyncAcceptAttribute: [!0, ge.BOOLEAN],
            allowDrop: [!0, ge.BOOLEAN],
            allowBrowse: [!0, ge.BOOLEAN],
            allowPaste: [!0, ge.BOOLEAN],
            allowMultiple: [!1, ge.BOOLEAN],
            allowReplace: [!0, ge.BOOLEAN],
            allowRevert: [!0, ge.BOOLEAN],
            allowRemove: [!0, ge.BOOLEAN],
            allowProcess: [!0, ge.BOOLEAN],
            allowReorder: [!1, ge.BOOLEAN],
            allowDirectoriesOnly: [!1, ge.BOOLEAN],
            storeAsFile: [!1, ge.BOOLEAN],
            forceRevert: [!1, ge.BOOLEAN],
            maxFiles: [null, ge.INT],
            checkValidity: [!1, ge.BOOLEAN],
            itemInsertLocationFreedom: [!0, ge.BOOLEAN],
            itemInsertLocation: ["before", ge.STRING],
            itemInsertInterval: [75, ge.INT],
            dropOnPage: [!1, ge.BOOLEAN],
            dropOnElement: [!0, ge.BOOLEAN],
            dropValidation: [!1, ge.BOOLEAN],
            ignoredFiles: [[".ds_store", "thumbs.db", "desktop.ini"], ge.ARRAY],
            instantUpload: [!0, ge.BOOLEAN],
            maxParallelUploads: [2, ge.INT],
            allowMinimumUploadDuration: [!0, ge.BOOLEAN],
            chunkUploads: [!1, ge.BOOLEAN],
            chunkForce: [!1, ge.BOOLEAN],
            chunkSize: [5e6, ge.INT],
            chunkRetryDelays: [[500, 1e3, 3e3], ge.ARRAY],
            server: [null, ge.SERVER_API],
            fileSizeBase: [1e3, ge.INT],
            labelFileSizeBytes: ["bytes", ge.STRING],
            labelFileSizeKilobytes: ["KB", ge.STRING],
            labelFileSizeMegabytes: ["MB", ge.STRING],
            labelFileSizeGigabytes: ["GB", ge.STRING],
            labelDecimalSeparator: [he(), ge.STRING],
            labelThousandsSeparator: [(ce = he(), fe = 1e3.toLocaleString(), fe !== 1e3.toString() ? me(fe)[0] : "." === ce ? "," : "."), ge.STRING],
            labelIdle: ['Drag & Drop your files or <span class="filepond--label-action">Browse</span>', ge.STRING],
            labelInvalidField: ["Field contains invalid files", ge.STRING],
            labelFileWaitingForSize: ["Waiting for size", ge.STRING],
            labelFileSizeNotAvailable: ["Size not available", ge.STRING],
            labelFileCountSingular: ["file in list", ge.STRING],
            labelFileCountPlural: ["files in list", ge.STRING],
            labelFileLoading: ["Loading", ge.STRING],
            labelFileAdded: ["Added", ge.STRING],
            labelFileLoadError: ["Error during load", ge.STRING],
            labelFileRemoved: ["Removed", ge.STRING],
            labelFileRemoveError: ["Error during remove", ge.STRING],
            labelFileProcessing: ["Uploading", ge.STRING],
            labelFileProcessingComplete: ["Upload complete", ge.STRING],
            labelFileProcessingAborted: ["Upload cancelled", ge.STRING],
            labelFileProcessingError: ["Error during upload", ge.STRING],
            labelFileProcessingRevertError: ["Error during revert", ge.STRING],
            labelTapToCancel: ["tap to cancel", ge.STRING],
            labelTapToRetry: ["tap to retry", ge.STRING],
            labelTapToUndo: ["tap to undo", ge.STRING],
            labelButtonRemoveItem: ["Remove", ge.STRING],
            labelButtonAbortItemLoad: ["Abort", ge.STRING],
            labelButtonRetryItemLoad: ["Retry", ge.STRING],
            labelButtonAbortItemProcessing: ["Cancel", ge.STRING],
            labelButtonUndoItemProcessing: ["Undo", ge.STRING],
            labelButtonRetryItemProcessing: ["Retry", ge.STRING],
            labelButtonProcessItem: ["Upload", ge.STRING],
            iconRemove: ['<svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M11.586 13l-2.293 2.293a1 1 0 0 0 1.414 1.414L13 14.414l2.293 2.293a1 1 0 0 0 1.414-1.414L14.414 13l2.293-2.293a1 1 0 0 0-1.414-1.414L13 11.586l-2.293-2.293a1 1 0 0 0-1.414 1.414L11.586 13z" fill="currentColor" fill-rule="nonzero"/></svg>', ge.STRING],
            iconProcess: ['<svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M14 10.414v3.585a1 1 0 0 1-2 0v-3.585l-1.293 1.293a1 1 0 0 1-1.414-1.415l3-3a1 1 0 0 1 1.414 0l3 3a1 1 0 0 1-1.414 1.415L14 10.414zM9 18a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2H9z" fill="currentColor" fill-rule="evenodd"/></svg>', ge.STRING],
            iconRetry: ['<svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M10.81 9.185l-.038.02A4.997 4.997 0 0 0 8 13.683a5 5 0 0 0 5 5 5 5 0 0 0 5-5 1 1 0 0 1 2 0A7 7 0 1 1 9.722 7.496l-.842-.21a.999.999 0 1 1 .484-1.94l3.23.806c.535.133.86.675.73 1.21l-.804 3.233a.997.997 0 0 1-1.21.73.997.997 0 0 1-.73-1.21l.23-.928v-.002z" fill="currentColor" fill-rule="nonzero"/></svg>', ge.STRING],
            iconUndo: ['<svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M9.185 10.81l.02-.038A4.997 4.997 0 0 1 13.683 8a5 5 0 0 1 5 5 5 5 0 0 1-5 5 1 1 0 0 0 0 2A7 7 0 1 0 7.496 9.722l-.21-.842a.999.999 0 1 0-1.94.484l.806 3.23c.133.535.675.86 1.21.73l3.233-.803a.997.997 0 0 0 .73-1.21.997.997 0 0 0-1.21-.73l-.928.23-.002-.001z" fill="currentColor" fill-rule="nonzero"/></svg>', ge.STRING],
            iconDone: ['<svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M18.293 9.293a1 1 0 0 1 1.414 1.414l-7.002 7a1 1 0 0 1-1.414 0l-3.998-4a1 1 0 1 1 1.414-1.414L12 15.586l6.294-6.293z" fill="currentColor" fill-rule="nonzero"/></svg>', ge.STRING],
            oninit: [null, ge.FUNCTION],
            onwarning: [null, ge.FUNCTION],
            onerror: [null, ge.FUNCTION],
            onactivatefile: [null, ge.FUNCTION],
            oninitfile: [null, ge.FUNCTION],
            onaddfilestart: [null, ge.FUNCTION],
            onaddfileprogress: [null, ge.FUNCTION],
            onaddfile: [null, ge.FUNCTION],
            onprocessfilestart: [null, ge.FUNCTION],
            onprocessfileprogress: [null, ge.FUNCTION],
            onprocessfileabort: [null, ge.FUNCTION],
            onprocessfilerevert: [null, ge.FUNCTION],
            onprocessfile: [null, ge.FUNCTION],
            onprocessfiles: [null, ge.FUNCTION],
            onremovefile: [null, ge.FUNCTION],
            onpreparefile: [null, ge.FUNCTION],
            onupdatefiles: [null, ge.FUNCTION],
            onreorderfiles: [null, ge.FUNCTION],
            beforeDropFile: [null, ge.FUNCTION],
            beforeAddFile: [null, ge.FUNCTION],
            beforeRemoveFile: [null, ge.FUNCTION],
            beforePrepareFile: [null, ge.FUNCTION],
            stylePanelLayout: [null, ge.STRING],
            stylePanelAspectRatio: [null, ge.STRING],
            styleItemPanelAspectRatio: [null, ge.STRING],
            styleButtonRemoveItemPosition: ["left", ge.STRING],
            styleButtonProcessItemPosition: ["right", ge.STRING],
            styleLoadIndicatorPosition: ["right", ge.STRING],
            styleProgressIndicatorPosition: ["right", ge.STRING],
            styleButtonRemoveItemAlign: [!1, ge.BOOLEAN],
            files: [[], ge.ARRAY],
            credits: [["https://pqina.nl/", "Powered by PQINA"], ge.ARRAY]
        }, Le = function (e, t) {
            return M(t) ? e[0] || null : V(t) ? e[t] || null : ("object" == typeof t && (t = t.id), e.find(function (e) {
                return e.id === t
            }) || null)
        }, be = function (e) {
            if (M(e)) return e;
            if (/:/.test(e)) {
                var t = e.split(":");
                return t[1] / t[0]
            }
            return parseFloat(e)
        }, Pe = function (e) {
            return e.filter(function (e) {
                return !e.archived
            })
        }, Me = {EMPTY: 0, IDLE: 1, ERROR: 2, BUSY: 3, READY: 4}, we = null,
        Ce = [Ie.LOAD_ERROR, Ie.PROCESSING_ERROR, Ie.PROCESSING_REVERT_ERROR],
        Ne = [Ie.LOADING, Ie.PROCESSING, Ie.PROCESSING_QUEUED, Ie.INIT], Ge = [Ie.PROCESSING_COMPLETE],
        Ue = function (e) {
            return Ce.includes(e.status)
        }, Be = function (e) {
            return Ne.includes(e.status)
        }, Fe = function (e) {
            return Ge.includes(e.status)
        }, qe = function (e) {
            return H(e.options.server) && (H(e.options.server.process) || Y(e.options.server.process))
        }, Ve = function (e) {
            return {
                GET_STATUS: function () {
                    var t = Pe(e.items), n = Me.EMPTY, r = Me.ERROR, o = Me.BUSY, i = Me.IDLE, a = Me.READY;
                    return 0 === t.length ? n : t.some(Ue) ? r : t.some(Be) ? o : t.some(Fe) ? a : i
                }, GET_ITEM: function (t) {
                    return Le(e.items, t)
                }, GET_ACTIVE_ITEM: function (t) {
                    return Le(Pe(e.items), t)
                }, GET_ACTIVE_ITEMS: function () {
                    return Pe(e.items)
                }, GET_ITEMS: function () {
                    return e.items
                }, GET_ITEM_NAME: function (t) {
                    var n = Le(e.items, t);
                    return n ? n.filename : null
                }, GET_ITEM_SIZE: function (t) {
                    var n = Le(e.items, t);
                    return n ? n.fileSize : null
                }, GET_STYLES: function () {
                    return Object.keys(e.options).filter(function (e) {
                        return /^style/.test(e)
                    }).map(function (t) {
                        return {name: t, value: e.options[t]}
                    })
                }, GET_PANEL_ASPECT_RATIO: function () {
                    return /circle/.test(e.options.stylePanelLayout) ? 1 : be(e.options.stylePanelAspectRatio)
                }, GET_ITEM_PANEL_ASPECT_RATIO: function () {
                    return e.options.styleItemPanelAspectRatio
                }, GET_ITEMS_BY_STATUS: function (t) {
                    return Pe(e.items).filter(function (e) {
                        return e.status === t
                    })
                }, GET_TOTAL_ITEMS: function () {
                    return Pe(e.items).length
                }, SHOULD_UPDATE_FILE_INPUT: function () {
                    return e.options.storeAsFile && function () {
                        if (null === we) try {
                            var e = new DataTransfer;
                            e.items.add(new File(["hello world"], "This_Works.txt"));
                            var t = document.createElement("input");
                            t.setAttribute("type", "file"), t.files = e.files, we = 1 === t.files.length
                        } catch (e) {
                            we = !1
                        }
                        return we
                    }() && !qe(e)
                }, IS_ASYNC: function () {
                    return qe(e)
                }, GET_FILE_SIZE_LABELS: function (e) {
                    return {
                        labelBytes: e("GET_LABEL_FILE_SIZE_BYTES") || void 0,
                        labelKilobytes: e("GET_LABEL_FILE_SIZE_KILOBYTES") || void 0,
                        labelMegabytes: e("GET_LABEL_FILE_SIZE_MEGABYTES") || void 0,
                        labelGigabytes: e("GET_LABEL_FILE_SIZE_GIGABYTES") || void 0
                    }
                }
            }
        }, xe = function (e, t, n) {
            return Math.max(Math.min(n, e), t)
        }, Ye = function (e) {
            return /^\s*data:([a-z]+\/[a-z0-9-+.]+(;[a-z-]+=[a-z0-9-]+)?)?(;base64)?,([a-z0-9!$&',()*+;=\-._~:@\/?%\s]*)\s*$/i.test(e)
        }, ke = function (e) {
            return e.split("/").pop().split("?").shift()
        }, je = function (e) {
            return e.split(".").pop()
        }, He = function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "";
            return (t + e).slice(-t.length)
        }, Xe = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : new Date;
            return e.getFullYear() + "-" + He(e.getMonth() + 1, "00") + "-" + He(e.getDate(), "00") + "_" + He(e.getHours(), "00") + "-" + He(e.getMinutes(), "00") + "-" + He(e.getSeconds(), "00")
        }, We = function (e, t) {
            var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null,
                r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : null,
                o = "string" == typeof n ? e.slice(0, e.size, n) : e.slice(0, e.size, e.type);
            return o.lastModifiedDate = new Date, e._relativePath && (o._relativePath = e._relativePath), U(t) || (t = Xe()), t && null === r && je(t) ? o.name = t : (r = r || function (e) {
                if ("string" != typeof e) return "";
                var t = e.split("/").pop();
                return /svg/.test(t) ? "svg" : /zip|compressed/.test(t) ? "zip" : /plain/.test(t) ? "txt" : /msword/.test(t) ? "doc" : /[a-z]+/.test(t) ? "jpeg" === t ? "jpg" : t : ""
            }(o.type), o.name = t + (r ? "." + r : "")), o
        }, ze = function (e, t) {
            var n = window.BlobBuilder = window.BlobBuilder || window.WebKitBlobBuilder || window.MozBlobBuilder || window.MSBlobBuilder;
            if (n) {
                var r = new n;
                return r.append(e), r.getBlob(t)
            }
            return new Blob([e], {type: t})
        }, Qe = function (e) {
            return (/^data:(.+);/.exec(e) || [])[1] || null
        }, Ze = function (e) {
            var t = Qe(e);
            return function (e, t) {
                for (var n = new ArrayBuffer(e.length), r = new Uint8Array(n), o = 0; o < e.length; o++) r[o] = e.charCodeAt(o);
                return ze(n, t)
            }(function (e) {
                return atob(function (e) {
                    return e.split(",")[1].replace(/\s/g, "")
                }(e))
            }(e), t)
        }, Ke = function (e) {
            if (!/^content-disposition:/i.test(e)) return null;
            var t = e.split(/filename=|filename\*=.+''/).splice(1).map(function (e) {
                return e.trim().replace(/^["']|[;"']{0,2}$/g, "")
            }).filter(function (e) {
                return e.length
            });
            return t.length ? decodeURI(t[t.length - 1]) : null
        }, $e = function (e) {
            if (/content-length:/i.test(e)) {
                var t = e.match(/[0-9]+/)[0];
                return t ? parseInt(t, 10) : null
            }
            return null
        }, Je = function (e) {
            return /x-content-transfer-id:/i.test(e) && (e.split(":")[1] || "").trim() || null
        }, et = function (e) {
            var t = {source: null, name: null, size: null}, n = e.split("\n"), r = !0, o = !1, i = void 0;
            try {
                for (var a, s = n[Symbol.iterator](); !(r = (a = s.next()).done); r = !0) {
                    var u = a.value, l = Ke(u);
                    if (l) t.name = l; else {
                        var c = $e(u);
                        if (c) t.size = c; else {
                            var f = Je(u);
                            f && (t.source = f)
                        }
                    }
                }
            } catch (e) {
                o = !0, i = e
            } finally {
                try {
                    r || null == s.return || s.return()
                } finally {
                    if (o) throw i
                }
            }
            return t
        }, tt = function (e) {
            var t = {source: null, complete: !1, progress: 0, size: null, timestamp: null, duration: 0, request: null},
                n = function (n) {
                    e ? (t.timestamp = Date.now(), t.request = e(n, function (e) {
                        t.duration = Date.now() - t.timestamp, t.complete = !0, e instanceof Blob && (e = We(e, e.name || ke(n))), r.fire("load", e instanceof Blob ? e : e ? e.body : null)
                    }, function (e) {
                        r.fire("error", "string" == typeof e ? {type: "error", code: 0, body: e} : e)
                    }, function (e, n, o) {
                        o && (t.size = o), t.duration = Date.now() - t.timestamp, e ? (t.progress = n / o, r.fire("progress", t.progress)) : t.progress = null
                    }, function () {
                        r.fire("abort")
                    }, function (e) {
                        var n = et("string" == typeof e ? e : e.headers);
                        r.fire("meta", {size: t.size || n.size, filename: n.name, source: n.source})
                    })) : r.fire("error", {type: "error", body: "Can't load URL", code: 400})
                }, r = Object.assign({}, pe(), {
                    setSource: function (e) {
                        return t.source = e
                    }, getProgress: function () {
                        return t.progress
                    }, abort: function () {
                        t.request && t.request.abort && t.request.abort()
                    }, load: function () {
                        var e, o, i = t.source;
                        r.fire("init", i), i instanceof File ? r.fire("load", i) : i instanceof Blob ? r.fire("load", We(i, i.name)) : Ye(i) ? r.fire("load", We(Ze(i), e, null, o)) : n(i)
                    }
                });
            return r
        }, nt = function (e) {
            return /GET|HEAD/.test(e)
        }, rt = function (e, t, n) {
            var r = {
                onheaders: function () {
                }, onprogress: function () {
                }, onload: function () {
                }, ontimeout: function () {
                }, onerror: function () {
                }, onabort: function () {
                }, abort: function () {
                    o = !0, a.abort()
                }
            }, o = !1, i = !1;
            n = Object.assign({
                method: "POST",
                headers: {},
                withCredentials: !1
            }, n), t = encodeURI(t), nt(n.method) && e && (t = "" + t + encodeURIComponent("string" == typeof e ? e : JSON.stringify(e)));
            var a = new XMLHttpRequest;
            return (nt(n.method) ? a : a.upload).onprogress = function (e) {
                o || r.onprogress(e.lengthComputable, e.loaded, e.total)
            }, a.onreadystatechange = function () {
                a.readyState < 2 || 4 === a.readyState && 0 === a.status || i || (i = !0, r.onheaders(a))
            }, a.onload = function () {
                a.status >= 200 && a.status < 300 ? r.onload(a) : r.onerror(a)
            }, a.onerror = function () {
                return r.onerror(a)
            }, a.onabort = function () {
                o = !0, r.onabort()
            }, a.ontimeout = function () {
                return r.ontimeout(a)
            }, a.open(n.method, t, !0), V(n.timeout) && (a.timeout = n.timeout), Object.keys(n.headers).forEach(function (e) {
                var t = unescape(encodeURIComponent(n.headers[e]));
                a.setRequestHeader(e, t)
            }), n.responseType && (a.responseType = n.responseType), n.withCredentials && (a.withCredentials = !0), a.send(e), r
        }, ot = function (e, t, n, r) {
            return {type: e, code: t, body: n, headers: r}
        }, it = function (e) {
            return function (t) {
                e(ot("error", 0, "Timeout", t.getAllResponseHeaders()))
            }
        }, at = function (e) {
            return /\?/.test(e)
        }, st = function () {
            for (var e = "", t = arguments.length, n = new Array(t), r = 0; r < t; r++) n[r] = arguments[r];
            return n.forEach(function (t) {
                e += at(e) && at(t) ? t.replace(/\?/, "&") : t
            }), e
        }, ut = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                t = arguments.length > 1 ? arguments[1] : void 0;
            if ("function" == typeof t) return t;
            if (!t || !U(t.url)) return null;
            var n = t.onload || function (e) {
                return e
            }, r = t.onerror || function (e) {
                return null
            };
            return function (o, i, a, s, u, l) {
                var c = rt(o, st(e, t.url), Object.assign({}, t, {responseType: "blob"}));
                return c.onload = function (e) {
                    var r = e.getAllResponseHeaders(), a = et(r).name || ke(o);
                    i(ot("load", e.status, "HEAD" === t.method ? null : We(n(e.response), a), r))
                }, c.onerror = function (e) {
                    a(ot("error", e.status, r(e.response) || e.statusText, e.getAllResponseHeaders()))
                }, c.onheaders = function (e) {
                    l(ot("headers", e.status, null, e.getAllResponseHeaders()))
                }, c.ontimeout = it(a), c.onprogress = s, c.onabort = u, c
            }
        }, lt = 0, ct = 1, ft = 2, dt = 3, pt = 4, Et = function (e, t, n, r, o, i, a, s, u, l, c) {
            for (var f = [], d = c.chunkTransferId, p = c.chunkServer, E = c.chunkSize, _ = c.chunkRetryDelays, T = {
                serverId: d,
                aborted: !1
            }, I = t.ondata || function (e) {
                return e
            }, v = t.onload || function (e, t) {
                return "HEAD" === t ? e.getResponseHeader("Upload-Offset") : e.response
            }, m = t.onerror || function (e) {
                return null
            }, h = Math.floor(r.size / E), g = 0; g <= h; g++) {
                var R = g * E, O = r.slice(R, R + E, "application/offset+octet-stream");
                f[g] = {
                    index: g,
                    size: O.size,
                    offset: R,
                    data: O,
                    file: r,
                    progress: 0,
                    retries: ue(_),
                    status: lt,
                    error: null,
                    request: null,
                    timeout: null
                }
            }
            var y, D, S, A, L = function (e) {
                return e.status === lt || e.status === dt
            }, b = function (t) {
                if (!T.aborted) if (t = t || f.find(L)) {
                    t.status = ft, t.progress = null;
                    var n = p.ondata || function (e) {
                            return e
                        }, o = p.onerror || function (e) {
                            return null
                        }, s = st(e, p.url, T.serverId),
                        l = "function" == typeof p.headers ? p.headers(t) : Object.assign({}, p.headers, {
                            "Content-Type": "application/offset+octet-stream",
                            "Upload-Offset": t.offset,
                            "Upload-Length": r.size,
                            "Upload-Name": r.name
                        }), c = t.request = rt(n(t.data), s, Object.assign({}, p, {headers: l}));
                    c.onload = function () {
                        t.status = ct, t.request = null, w()
                    }, c.onprogress = function (e, n, r) {
                        t.progress = e ? n : null, M()
                    }, c.onerror = function (e) {
                        t.status = dt, t.request = null, t.error = o(e.response) || e.statusText, P(t) || a(ot("error", e.status, o(e.response) || e.statusText, e.getAllResponseHeaders()))
                    }, c.ontimeout = function (e) {
                        t.status = dt, t.request = null, P(t) || it(a)(e)
                    }, c.onabort = function () {
                        t.status = lt, t.request = null, u()
                    }
                } else f.every(function (e) {
                    return e.status === ct
                }) && i(T.serverId)
            }, P = function (e) {
                return 0 !== e.retries.length && (e.status = pt, clearTimeout(e.timeout), e.timeout = setTimeout(function () {
                    b(e)
                }, e.retries.shift()), !0)
            }, M = function () {
                var e = f.reduce(function (e, t) {
                    return null === e || null === t.progress ? null : e + t.progress
                }, 0);
                if (null === e) return s(!1, 0, 0);
                var t = f.reduce(function (e, t) {
                    return e + t.size
                }, 0);
                s(!0, e, t)
            }, w = function () {
                f.filter(function (e) {
                    return e.status === ft
                }).length >= 1 || b()
            };
            return T.serverId ? (y = function (e) {
                T.aborted || (f.filter(function (t) {
                    return t.offset < e
                }).forEach(function (e) {
                    e.status = ct, e.progress = e.size
                }), w())
            }, D = st(e, p.url, T.serverId), S = {
                headers: "function" == typeof t.headers ? t.headers(T.serverId) : Object.assign({}, t.headers),
                method: "HEAD"
            }, (A = rt(null, D, S)).onload = function (e) {
                return y(v(e, S.method))
            }, A.onerror = function (e) {
                return a(ot("error", e.status, m(e.response) || e.statusText, e.getAllResponseHeaders()))
            }, A.ontimeout = it(a)) : function (i) {
                var s = new FormData;
                H(o) && s.append(n, JSON.stringify(o));
                var u = "function" == typeof t.headers ? t.headers(r, o) : Object.assign({}, t.headers, {"Upload-Length": r.size}),
                    l = Object.assign({}, t, {headers: u}), c = rt(I(s), st(e, t.url), l);
                c.onload = function (e) {
                    return i(v(e, l.method))
                }, c.onerror = function (e) {
                    return a(ot("error", e.status, m(e.response) || e.statusText, e.getAllResponseHeaders()))
                }, c.ontimeout = it(a)
            }(function (e) {
                T.aborted || (l(e), T.serverId = e, w())
            }), {
                abort: function () {
                    T.aborted = !0, f.forEach(function (e) {
                        clearTimeout(e.timeout), e.request && e.request.abort()
                    })
                }
            }
        }, _t = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                t = arguments.length > 1 ? arguments[1] : void 0, n = arguments.length > 2 ? arguments[2] : void 0,
                r = arguments.length > 3 ? arguments[3] : void 0;
            return "function" == typeof t ? function () {
                for (var e = arguments.length, o = new Array(e), i = 0; i < e; i++) o[i] = arguments[i];
                return t.apply(void 0, [n].concat(o, [r]))
            } : t && U(t.url) ? function (e, t, n, r) {
                return function (o, i, a, s, u, l, c) {
                    if (o) {
                        var f = r.chunkUploads, d = f && o.size > r.chunkSize, p = f && (d || r.chunkForce);
                        if (o instanceof Blob && p) return Et(e, t, n, o, i, a, s, u, l, c, r);
                        var E = t.ondata || function (e) {
                                return e
                            }, _ = t.onload || function (e) {
                                return e
                            }, T = t.onerror || function (e) {
                                return null
                            }, I = "function" == typeof t.headers ? t.headers(o, i) || {} : Object.assign({}, t.headers),
                            v = Object.assign({}, t, {headers: I}), m = new FormData;
                        H(i) && m.append(n, JSON.stringify(i)), (o instanceof Blob ? [{
                            name: null,
                            file: o
                        }] : o).forEach(function (e) {
                            m.append(n, e.file, null === e.name ? e.file.name : "" + e.name + e.file.name)
                        });
                        var h = rt(E(m), st(e, t.url), v);
                        return h.onload = function (e) {
                            a(ot("load", e.status, _(e.response), e.getAllResponseHeaders()))
                        }, h.onerror = function (e) {
                            s(ot("error", e.status, T(e.response) || e.statusText, e.getAllResponseHeaders()))
                        }, h.ontimeout = it(s), h.onprogress = u, h.onabort = l, h
                    }
                }
            }(e, t, n, r) : null
        }, Tt = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                t = arguments.length > 1 ? arguments[1] : void 0;
            if ("function" == typeof t) return t;
            if (!t || !U(t.url)) return function (e, t) {
                return t()
            };
            var n = t.onload || function (e) {
                return e
            }, r = t.onerror || function (e) {
                return null
            };
            return function (o, i, a) {
                var s = rt(o, e + t.url, t);
                return s.onload = function (e) {
                    i(ot("load", e.status, n(e.response), e.getAllResponseHeaders()))
                }, s.onerror = function (e) {
                    a(ot("error", e.status, r(e.response) || e.statusText, e.getAllResponseHeaders()))
                }, s.ontimeout = it(a), s
            }
        }, It = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1;
            return e + Math.random() * (t - e)
        }, vt = function (e, t) {
            var n = {
                complete: !1,
                perceivedProgress: 0,
                perceivedPerformanceUpdater: null,
                progress: null,
                timestamp: null,
                perceivedDuration: 0,
                duration: 0,
                request: null,
                response: null
            }, r = t.allowMinimumUploadDuration, o = function () {
                n.request && (n.perceivedPerformanceUpdater.clear(), n.request.abort && n.request.abort(), n.complete = !0)
            }, i = r ? function () {
                return n.progress ? Math.min(n.progress, n.perceivedProgress) : null
            } : function () {
                return n.progress || null
            }, a = r ? function () {
                return Math.min(n.duration, n.perceivedDuration)
            } : function () {
                return n.duration
            }, s = Object.assign({}, pe(), {
                process: function (t, o) {
                    var i = function () {
                        0 !== n.duration && null !== n.progress && s.fire("progress", s.getProgress())
                    }, a = function () {
                        n.complete = !0, s.fire("load-perceived", n.response.body)
                    };
                    s.fire("start"), n.timestamp = Date.now(), n.perceivedPerformanceUpdater = function (e) {
                        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1e3,
                            n = (arguments.length > 2 && void 0 !== arguments[2] && arguments[2], arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 25),
                            r = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 250, o = null,
                            i = Date.now();
                        return t > 0 && function a() {
                            var s = Date.now() - i, u = It(n, r);
                            s + u > t && (u = s + u - t);
                            var l = s / t;
                            l >= 1 || document.hidden ? e(1) : (e(l), o = setTimeout(a, u))
                        }(), {
                            clear: function () {
                                clearTimeout(o)
                            }
                        }
                    }(function (e) {
                        n.perceivedProgress = e, n.perceivedDuration = Date.now() - n.timestamp, i(), n.response && 1 === n.perceivedProgress && !n.complete && a()
                    }, r ? It(750, 1500) : 0), n.request = e(t, o, function (e) {
                        n.response = H(e) ? e : {
                            type: "load",
                            code: 200,
                            body: "" + e,
                            headers: {}
                        }, n.duration = Date.now() - n.timestamp, n.progress = 1, s.fire("load", n.response.body), (!r || r && 1 === n.perceivedProgress) && a()
                    }, function (e) {
                        n.perceivedPerformanceUpdater.clear(), s.fire("error", H(e) ? e : {
                            type: "error",
                            code: 0,
                            body: "" + e
                        })
                    }, function (e, t, r) {
                        n.duration = Date.now() - n.timestamp, n.progress = e ? t / r : null, i()
                    }, function () {
                        n.perceivedPerformanceUpdater.clear(), s.fire("abort", n.response ? n.response.body : null)
                    }, function (e) {
                        s.fire("transfer", e)
                    })
                }, abort: o, getProgress: i, getDuration: a, reset: function () {
                    o(), n.complete = !1, n.perceivedProgress = 0, n.progress = 0, n.timestamp = null, n.perceivedDuration = 0, n.duration = 0, n.request = null, n.response = null
                }
            });
            return s
        }, mt = function (e) {
            return e.substring(0, e.lastIndexOf(".")) || e
        }, ht = function (e) {
            return !!(e instanceof File || e instanceof Blob && e.name)
        }, gt = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null,
                t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null,
                r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null, o = oe(), i = {
                    archived: !1,
                    frozen: !1,
                    released: !1,
                    source: null,
                    file: r,
                    serverFileReference: t,
                    transferId: null,
                    processingAborted: !1,
                    status: t ? Ie.PROCESSING_COMPLETE : Ie.INIT,
                    activeLoader: null,
                    activeProcessor: null
                }, a = null, s = {}, u = function (e) {
                    return i.status = e
                }, l = function (e) {
                    if (!i.released && !i.frozen) {
                        for (var t = arguments.length, n = new Array(t > 1 ? t - 1 : 0), r = 1; r < t; r++) n[r - 1] = arguments[r];
                        f.fire.apply(f, [e].concat(n))
                    }
                }, c = function (e, t, n) {
                    var r = e.split("."), o = r[0], i = r.pop(), a = s;
                    r.forEach(function (e) {
                        return a = a[e]
                    }), JSON.stringify(a[i]) !== JSON.stringify(t) && (a[i] = t, l("metadata-update", {
                        key: o,
                        value: s[o],
                        silent: n
                    }))
                }, f = Object.assign({
                    id: {
                        get: function () {
                            return o
                        }
                    }, origin: {
                        get: function () {
                            return e
                        }, set: function (t) {
                            return e = t
                        }
                    }, serverId: {
                        get: function () {
                            return i.serverFileReference
                        }
                    }, transferId: {
                        get: function () {
                            return i.transferId
                        }
                    }, status: {
                        get: function () {
                            return i.status
                        }
                    }, filename: {
                        get: function () {
                            return i.file.name
                        }
                    }, filenameWithoutExtension: {
                        get: function () {
                            return mt(i.file.name)
                        }
                    }, fileExtension: {
                        get: function () {
                            return je(i.file.name)
                        }
                    }, fileType: {
                        get: function () {
                            return i.file.type
                        }
                    }, fileSize: {
                        get: function () {
                            return i.file.size
                        }
                    }, file: {
                        get: function () {
                            return i.file
                        }
                    }, relativePath: {
                        get: function () {
                            return i.file._relativePath
                        }
                    }, source: {
                        get: function () {
                            return i.source
                        }
                    }, getMetadata: function (e) {
                        return function e(t) {
                            if (!H(t)) return t;
                            var n = P(t) ? [] : {};
                            for (var r in t) if (t.hasOwnProperty(r)) {
                                var o = t[r];
                                n[r] = o && H(o) ? e(o) : o
                            }
                            return n
                        }(e ? s[e] : s)
                    }, setMetadata: function (e, t, n) {
                        if (H(e)) {
                            var r = e;
                            return Object.keys(r).forEach(function (e) {
                                c(e, r[e], t)
                            }), e
                        }
                        return c(e, t, n), t
                    }, extend: function (e, t) {
                        return d[e] = t
                    }, abortLoad: function () {
                        i.activeLoader ? i.activeLoader.abort() : (u(Ie.INIT), l("load-abort"))
                    }, retryLoad: function () {
                        i.activeLoader && i.activeLoader.load()
                    }, requestProcessing: function () {
                        i.processingAborted = !1, u(Ie.PROCESSING_QUEUED)
                    }, abortProcessing: function () {
                        return new Promise(function (e) {
                            if (!i.activeProcessor) return i.processingAborted = !0, u(Ie.IDLE), l("process-abort"), void e();
                            a = function () {
                                e()
                            }, i.activeProcessor.abort()
                        })
                    }, load: function (t, n, r) {
                        i.source = t, f.fireSync("init"), i.file ? f.fireSync("load-skip") : (i.file = function (e) {
                            var t = [e.name, e.size, e.type];
                            return e instanceof Blob || Ye(e) ? t[0] = e.name || Xe() : Ye(e) ? (t[1] = e.length, t[2] = Qe(e)) : U(e) && (t[0] = ke(e), t[1] = 0, t[2] = "application/octet-stream"), {
                                name: t[0],
                                size: t[1],
                                type: t[2]
                            }
                        }(t), n.on("init", function () {
                            l("load-init")
                        }), n.on("meta", function (t) {
                            i.file.size = t.size, i.file.filename = t.filename, t.source && (e = ve.LIMBO, i.serverFileReference = t.source, i.status = Ie.PROCESSING_COMPLETE), l("load-meta")
                        }), n.on("progress", function (e) {
                            u(Ie.LOADING), l("load-progress", e)
                        }), n.on("error", function (e) {
                            u(Ie.LOAD_ERROR), l("load-request-error", e)
                        }), n.on("abort", function () {
                            u(Ie.INIT), l("load-abort")
                        }), n.on("load", function (t) {
                            i.activeLoader = null;
                            var n = function (t) {
                                i.file = ht(t) ? t : i.file, e === ve.LIMBO && i.serverFileReference ? u(Ie.PROCESSING_COMPLETE) : u(Ie.IDLE), l("load")
                            };
                            i.serverFileReference ? n(t) : r(t, n, function (e) {
                                i.file = t, l("load-meta"), u(Ie.LOAD_ERROR), l("load-file-error", e)
                            })
                        }), n.setSource(t), i.activeLoader = n, n.load())
                    }, process: function e(t, n) {
                        if (i.processingAborted) i.processingAborted = !1; else if (u(Ie.PROCESSING), a = null, i.file instanceof Blob) {
                            t.on("load", function (e) {
                                i.transferId = null, i.serverFileReference = e
                            }), t.on("transfer", function (e) {
                                i.transferId = e
                            }), t.on("load-perceived", function (e) {
                                i.activeProcessor = null, i.transferId = null, i.serverFileReference = e, u(Ie.PROCESSING_COMPLETE), l("process-complete", e)
                            }), t.on("start", function () {
                                l("process-start")
                            }), t.on("error", function (e) {
                                i.activeProcessor = null, u(Ie.PROCESSING_ERROR), l("process-error", e)
                            }), t.on("abort", function (e) {
                                i.activeProcessor = null, i.serverFileReference = e, u(Ie.IDLE), l("process-abort"), a && a()
                            }), t.on("progress", function (e) {
                                l("process-progress", e)
                            });
                            var r = console.error;
                            n(i.file, function (e) {
                                i.archived || t.process(e, Object.assign({}, s))
                            }, r), i.activeProcessor = t
                        } else f.on("load", function () {
                            e(t, n)
                        })
                    }, revert: function (e, t) {
                        return new Promise(function (n, r) {
                            var o = null !== i.serverFileReference ? i.serverFileReference : i.transferId;
                            null !== o ? (e(o, function () {
                                i.serverFileReference = null, i.transferId = null, n()
                            }, function (e) {
                                t ? (u(Ie.PROCESSING_REVERT_ERROR), l("process-revert-error"), r(e)) : n()
                            }), u(Ie.IDLE), l("process-revert")) : n()
                        })
                    }
                }, pe(), {
                    freeze: function () {
                        return i.frozen = !0
                    }, release: function () {
                        return i.released = !0
                    }, released: {
                        get: function () {
                            return i.released
                        }
                    }, archive: function () {
                        return i.archived = !0
                    }, archived: {
                        get: function () {
                            return i.archived
                        }
                    }
                }), d = n(f);
            return d
        }, Rt = function (e, t) {
            var n = function (e, t) {
                return M(t) ? 0 : U(t) ? e.findIndex(function (e) {
                    return e.id === t
                }) : -1
            }(e, t);
            if (!(n < 0)) return e[n] || null
        }, Ot = function (e, t, n, r, o, i) {
            var a = rt(null, e, {method: "GET", responseType: "blob"});
            return a.onload = function (n) {
                var r = n.getAllResponseHeaders(), o = et(r).name || ke(e);
                t(ot("load", n.status, We(n.response, o), r))
            }, a.onerror = function (e) {
                n(ot("error", e.status, e.statusText, e.getAllResponseHeaders()))
            }, a.onheaders = function (e) {
                i(ot("headers", e.status, null, e.getAllResponseHeaders()))
            }, a.ontimeout = it(n), a.onprogress = r, a.onabort = o, a
        }, yt = function (e) {
            return 0 === e.indexOf("//") && (e = location.protocol + e), e.toLowerCase().replace("blob:", "").replace(/([a-z])?:\/\//, "$1").split("/")[0]
        }, Dt = function (e) {
            return function () {
                return Y(e) ? e.apply(void 0, arguments) : e
            }
        }, St = function (e, t) {
            clearTimeout(t.listUpdateTimeout), t.listUpdateTimeout = setTimeout(function () {
                e("DID_UPDATE_ITEMS", {items: Pe(t.items)})
            }, 0)
        }, At = function (e) {
            for (var t = arguments.length, n = new Array(t > 1 ? t - 1 : 0), r = 1; r < t; r++) n[r - 1] = arguments[r];
            return new Promise(function (t) {
                if (!e) return t(!0);
                var r = e.apply(void 0, n);
                return null == r ? t(!0) : "boolean" == typeof r ? t(r) : void ("function" == typeof r.then && r.then(t))
            })
        }, Lt = function (e, t) {
            e.items.sort(function (e, n) {
                return t(Te(e), Te(n))
            })
        }, bt = function (e, t) {
            return function () {
                var n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, r = n.query, o = n.success,
                    i = void 0 === o ? function () {
                    } : o, a = n.failure, s = void 0 === a ? function () {
                    } : a, u = se(n, ["query", "success", "failure"]), l = Le(e.items, r);
                l ? t(l, i, s, u || {}) : s({error: ot("error", 0, "Item not found"), file: null})
            }
        }, Pt = function (e, t, n) {
            return {
                ABORT_ALL: function () {
                    Pe(n.items).forEach(function (e) {
                        e.freeze(), e.abortLoad(), e.abortProcessing()
                    })
                }, DID_SET_FILES: function (t) {
                    var r = t.value, o = (void 0 === r ? [] : r).map(function (e) {
                        return {source: e.source ? e.source : e, options: e.options}
                    }), i = Pe(n.items);
                    i.forEach(function (t) {
                        o.find(function (e) {
                            return e.source === t.source || e.source === t.file
                        }) || e("REMOVE_ITEM", {query: t, remove: !1})
                    }), i = Pe(n.items), o.forEach(function (t, n) {
                        i.find(function (e) {
                            return e.source === t.source || e.file === t.source
                        }) || e("ADD_ITEM", Object.assign({}, t, {interactionMethod: re, index: n}))
                    })
                }, DID_UPDATE_ITEM_METADATA: function (r) {
                    var o = r.id, i = r.action, a = r.change;
                    a.silent || (clearTimeout(n.itemUpdateTimeout), n.itemUpdateTimeout = setTimeout(function () {
                        var r = Rt(n.items, o);
                        if (t("IS_ASYNC")) {
                            r.origin === ve.LOCAL && e("DID_LOAD_ITEM", {
                                id: r.id,
                                error: null,
                                serverFileReference: r.source
                            });
                            var s, u = function () {
                                setTimeout(function () {
                                    e("REQUEST_ITEM_PROCESSING", {query: o})
                                }, 32)
                            };
                            return r.status === Ie.PROCESSING_COMPLETE ? (s = n.options.instantUpload, void r.revert(Tt(n.options.server.url, n.options.server.revert), t("GET_FORCE_REVERT")).then(s ? u : function () {
                            }).catch(function () {
                            })) : r.status === Ie.PROCESSING ? function (e) {
                                r.abortProcessing().then(e ? u : function () {
                                })
                            }(n.options.instantUpload) : void (n.options.instantUpload && u())
                        }
                        Oe("SHOULD_PREPARE_OUTPUT", !1, {item: r, query: t, action: i, change: a}).then(function (n) {
                            var i = t("GET_BEFORE_PREPARE_FILE");
                            i && (n = i(r, n)), n && e("REQUEST_PREPARE_OUTPUT", {
                                query: o, item: r, success: function (t) {
                                    e("DID_PREPARE_OUTPUT", {id: o, file: t})
                                }
                            }, !0)
                        })
                    }, 0))
                }, MOVE_ITEM: function (e) {
                    var t = e.query, r = e.index, o = Le(n.items, t);
                    if (o) {
                        var i = n.items.indexOf(o);
                        i !== (r = xe(r, 0, n.items.length - 1)) && n.items.splice(r, 0, n.items.splice(i, 1)[0])
                    }
                }, SORT: function (r) {
                    var o = r.compare;
                    Lt(n, o), e("DID_SORT_ITEMS", {items: t("GET_ACTIVE_ITEMS")})
                }, ADD_ITEMS: function (n) {
                    var r = n.items, o = n.index, i = n.interactionMethod, a = n.success, s = void 0 === a ? function () {
                    } : a, u = n.failure, l = void 0 === u ? function () {
                    } : u, c = o;
                    if (-1 === o || void 0 === o) {
                        var f = t("GET_ITEM_INSERT_LOCATION"), d = t("GET_TOTAL_ITEMS");
                        c = "before" === f ? 0 : d
                    }
                    var p = t("GET_IGNORED_FILES"), E = r.filter(function (e) {
                        return ht(e) ? !p.includes(e.name.toLowerCase()) : !M(e)
                    }).map(function (t) {
                        return new Promise(function (n, r) {
                            e("ADD_ITEM", {
                                interactionMethod: i,
                                source: t.source || t,
                                success: n,
                                failure: r,
                                index: c++,
                                options: t.options || {}
                            })
                        })
                    });
                    Promise.all(E).then(s).catch(l)
                }, ADD_ITEM: function (r) {
                    var o = r.source, i = r.index, a = void 0 === i ? -1 : i, s = r.interactionMethod, u = r.success,
                        l = void 0 === u ? function () {
                        } : u, c = r.failure, f = void 0 === c ? function () {
                        } : c, d = r.options, p = void 0 === d ? {} : d;
                    if (M(o)) f({
                        error: ot("error", 0, "No source"),
                        file: null
                    }); else if (!ht(o) || !n.options.ignoredFiles.includes(o.name.toLowerCase())) {
                        if (!function (e) {
                            var t = Pe(e.items).length;
                            if (!e.options.allowMultiple) return 0 === t;
                            var n = e.options.maxFiles;
                            return null === n || t < n
                        }(n)) {
                            if (n.options.allowMultiple || !n.options.allowMultiple && !n.options.allowReplace) {
                                var E = ot("warning", 0, "Max files");
                                return e("DID_THROW_MAX_FILES", {source: o, error: E}), void f({error: E, file: null})
                            }
                            var _ = Pe(n.items)[0];
                            if (_.status === Ie.PROCESSING_COMPLETE || _.status === Ie.PROCESSING_REVERT_ERROR) {
                                var T = t("GET_FORCE_REVERT");
                                if (_.revert(Tt(n.options.server.url, n.options.server.revert), T).then(function () {
                                    T && e("ADD_ITEM", {
                                        source: o,
                                        index: a,
                                        interactionMethod: s,
                                        success: l,
                                        failure: f,
                                        options: p
                                    })
                                }).catch(function () {
                                }), T) return
                            }
                            e("REMOVE_ITEM", {query: _.id})
                        }
                        var I = "local" === p.type ? ve.LOCAL : "limbo" === p.type ? ve.LIMBO : ve.INPUT,
                            v = gt(I, I === ve.INPUT ? null : o, p.file);
                        Object.keys(p.metadata || {}).forEach(function (e) {
                            v.setMetadata(e, p.metadata[e])
                        }), ye("DID_CREATE_ITEM", v, {query: t, dispatch: e});
                        var m = t("GET_ITEM_INSERT_LOCATION");
                        n.options.itemInsertLocationFreedom || (a = "before" === m ? -1 : n.items.length), function (e, t, n) {
                            M(t) || (void 0 === n ? e.push(t) : function (e, t, n) {
                                e.splice(t, 0, n)
                            }(e, n = xe(n, 0, e.length), t))
                        }(n.items, v, a), Y(m) && o && Lt(n, m);
                        var h = v.id;
                        v.on("init", function () {
                            e("DID_INIT_ITEM", {id: h})
                        }), v.on("load-init", function () {
                            e("DID_START_ITEM_LOAD", {id: h})
                        }), v.on("load-meta", function () {
                            e("DID_UPDATE_ITEM_META", {id: h})
                        }), v.on("load-progress", function (t) {
                            e("DID_UPDATE_ITEM_LOAD_PROGRESS", {id: h, progress: t})
                        }), v.on("load-request-error", function (t) {
                            var r = Dt(n.options.labelFileLoadError)(t);
                            if (t.code >= 400 && t.code < 500) return e("DID_THROW_ITEM_INVALID", {
                                id: h,
                                error: t,
                                status: {main: r, sub: t.code + " (" + t.body + ")"}
                            }), void f({error: t, file: Te(v)});
                            e("DID_THROW_ITEM_LOAD_ERROR", {
                                id: h,
                                error: t,
                                status: {main: r, sub: n.options.labelTapToRetry}
                            })
                        }), v.on("load-file-error", function (t) {
                            e("DID_THROW_ITEM_INVALID", {id: h, error: t.status, status: t.status}), f({
                                error: t.status,
                                file: Te(v)
                            })
                        }), v.on("load-abort", function () {
                            e("REMOVE_ITEM", {query: h})
                        }), v.on("load-skip", function () {
                            e("COMPLETE_LOAD_ITEM", {query: h, item: v, data: {source: o, success: l}})
                        }), v.on("load", function () {
                            var r = function (r) {
                                r ? (v.on("metadata-update", function (t) {
                                    e("DID_UPDATE_ITEM_METADATA", {id: h, change: t})
                                }), Oe("SHOULD_PREPARE_OUTPUT", !1, {item: v, query: t}).then(function (r) {
                                    var i = t("GET_BEFORE_PREPARE_FILE");
                                    i && (r = i(v, r));
                                    var a = function () {
                                        e("COMPLETE_LOAD_ITEM", {
                                            query: h,
                                            item: v,
                                            data: {source: o, success: l}
                                        }), St(e, n)
                                    };
                                    r ? e("REQUEST_PREPARE_OUTPUT", {
                                        query: h, item: v, success: function (t) {
                                            e("DID_PREPARE_OUTPUT", {id: h, file: t}), a()
                                        }
                                    }, !0) : a()
                                })) : e("REMOVE_ITEM", {query: h})
                            };
                            Oe("DID_LOAD_ITEM", v, {query: t, dispatch: e}).then(function () {
                                At(t("GET_BEFORE_ADD_FILE"), Te(v)).then(r)
                            }).catch(function (t) {
                                if (!t || !t.error || !t.status) return r(!1);
                                e("DID_THROW_ITEM_INVALID", {id: h, error: t.error, status: t.status})
                            })
                        }), v.on("process-start", function () {
                            e("DID_START_ITEM_PROCESSING", {id: h})
                        }), v.on("process-progress", function (t) {
                            e("DID_UPDATE_ITEM_PROCESS_PROGRESS", {id: h, progress: t})
                        }), v.on("process-error", function (t) {
                            e("DID_THROW_ITEM_PROCESSING_ERROR", {
                                id: h,
                                error: t,
                                status: {main: Dt(n.options.labelFileProcessingError)(t), sub: n.options.labelTapToRetry}
                            })
                        }), v.on("process-revert-error", function (t) {
                            e("DID_THROW_ITEM_PROCESSING_REVERT_ERROR", {
                                id: h,
                                error: t,
                                status: {
                                    main: Dt(n.options.labelFileProcessingRevertError)(t),
                                    sub: n.options.labelTapToRetry
                                }
                            })
                        }), v.on("process-complete", function (t) {
                            e("DID_COMPLETE_ITEM_PROCESSING", {
                                id: h,
                                error: null,
                                serverFileReference: t
                            }), e("DID_DEFINE_VALUE", {id: h, value: t})
                        }), v.on("process-abort", function () {
                            e("DID_ABORT_ITEM_PROCESSING", {id: h})
                        }), v.on("process-revert", function () {
                            e("DID_REVERT_ITEM_PROCESSING", {id: h}), e("DID_DEFINE_VALUE", {id: h, value: null})
                        }), e("DID_ADD_ITEM", {id: h, index: a, interactionMethod: s}), St(e, n);
                        var g = n.options.server || {}, R = g.url, O = g.load, y = g.restore, D = g.fetch;
                        v.load(o, tt(I === ve.INPUT ? U(o) && function (e) {
                            return (e.indexOf(":") > -1 || e.indexOf("//") > -1) && yt(location.href) !== yt(e)
                        }(o) && D ? ut(R, D) : Ot : ut(R, I === ve.LIMBO ? y : O)), function (e, n, r) {
                            Oe("LOAD_FILE", e, {query: t}).then(n).catch(r)
                        })
                    }
                }, REQUEST_PREPARE_OUTPUT: function (e) {
                    var n = e.item, r = e.success, o = e.failure, i = void 0 === o ? function () {
                    } : o, a = {error: ot("error", 0, "Item not found"), file: null};
                    if (n.archived) return i(a);
                    Oe("PREPARE_OUTPUT", n.file, {query: t, item: n}).then(function (e) {
                        Oe("COMPLETE_PREPARE_OUTPUT", e, {query: t, item: n}).then(function (e) {
                            if (n.archived) return i(a);
                            r(e)
                        })
                    })
                }, COMPLETE_LOAD_ITEM: function (r) {
                    var o = r.item, i = r.data, a = i.success, s = i.source, u = t("GET_ITEM_INSERT_LOCATION");
                    if (Y(u) && s && Lt(n, u), e("DID_LOAD_ITEM", {
                        id: o.id,
                        error: null,
                        serverFileReference: o.origin === ve.INPUT ? null : s
                    }), a(Te(o)), o.origin !== ve.LOCAL) return o.origin === ve.LIMBO ? (e("DID_COMPLETE_ITEM_PROCESSING", {
                        id: o.id,
                        error: null,
                        serverFileReference: s
                    }), void e("DID_DEFINE_VALUE", {
                        id: o.id,
                        value: o.serverId || s
                    })) : void (t("IS_ASYNC") && n.options.instantUpload && e("REQUEST_ITEM_PROCESSING", {query: o.id}));
                    e("DID_LOAD_LOCAL_ITEM", {id: o.id})
                }, RETRY_ITEM_LOAD: bt(n, function (e) {
                    e.retryLoad()
                }), REQUEST_ITEM_PREPARE: bt(n, function (t, n, r) {
                    e("REQUEST_PREPARE_OUTPUT", {
                        query: t.id, item: t, success: function (r) {
                            e("DID_PREPARE_OUTPUT", {id: t.id, file: r}), n({file: t, output: r})
                        }, failure: r
                    }, !0)
                }), REQUEST_ITEM_PROCESSING: bt(n, function (r, o, i) {
                    if (r.status === Ie.IDLE || r.status === Ie.PROCESSING_ERROR) r.status !== Ie.PROCESSING_QUEUED && (r.requestProcessing(), e("DID_REQUEST_ITEM_PROCESSING", {id: r.id}), e("PROCESS_ITEM", {
                        query: r,
                        success: o,
                        failure: i
                    }, !0)); else {
                        var a = function () {
                            return e("REQUEST_ITEM_PROCESSING", {query: r, success: o, failure: i})
                        }, s = function () {
                            return document.hidden ? a() : setTimeout(a, 32)
                        };
                        r.status === Ie.PROCESSING_COMPLETE || r.status === Ie.PROCESSING_REVERT_ERROR ? r.revert(Tt(n.options.server.url, n.options.server.revert), t("GET_FORCE_REVERT")).then(s).catch(function () {
                        }) : r.status === Ie.PROCESSING && r.abortProcessing().then(s)
                    }
                }), PROCESS_ITEM: bt(n, function (r, o, i) {
                    var a = t("GET_MAX_PARALLEL_UPLOADS");
                    if (t("GET_ITEMS_BY_STATUS", Ie.PROCESSING).length !== a) {
                        if (r.status !== Ie.PROCESSING) {
                            var s = function t() {
                                var r = n.processingQueue.shift();
                                if (r) {
                                    var o = r.id, i = r.success, a = r.failure, s = Le(n.items, o);
                                    s && !s.archived ? e("PROCESS_ITEM", {query: o, success: i, failure: a}, !0) : t()
                                }
                            };
                            r.onOnce("process-complete", function () {
                                o(Te(r)), s();
                                var i = n.options.server;
                                if (n.options.instantUpload && r.origin === ve.LOCAL && Y(i.remove)) {
                                    var a = function () {
                                    };
                                    r.origin = ve.LIMBO, n.options.server.remove(r.source, a, a)
                                }
                                t("GET_ITEMS_BY_STATUS", Ie.PROCESSING_COMPLETE).length === n.items.length && e("DID_COMPLETE_ITEM_PROCESSING_ALL")
                            }), r.onOnce("process-error", function (e) {
                                i({error: e, file: Te(r)}), s()
                            });
                            var u = n.options;
                            r.process(vt(_t(u.server.url, u.server.process, u.name, {
                                chunkTransferId: r.transferId,
                                chunkServer: u.server.patch,
                                chunkUploads: u.chunkUploads,
                                chunkForce: u.chunkForce,
                                chunkSize: u.chunkSize,
                                chunkRetryDelays: u.chunkRetryDelays
                            }), {allowMinimumUploadDuration: t("GET_ALLOW_MINIMUM_UPLOAD_DURATION")}), function (n, o, i) {
                                Oe("PREPARE_OUTPUT", n, {query: t, item: r}).then(function (t) {
                                    e("DID_PREPARE_OUTPUT", {id: r.id, file: t}), o(t)
                                }).catch(i)
                            })
                        }
                    } else n.processingQueue.push({id: r.id, success: o, failure: i})
                }), RETRY_ITEM_PROCESSING: bt(n, function (t) {
                    e("REQUEST_ITEM_PROCESSING", {query: t})
                }), REQUEST_REMOVE_ITEM: bt(n, function (n) {
                    At(t("GET_BEFORE_REMOVE_FILE"), Te(n)).then(function (t) {
                        t && e("REMOVE_ITEM", {query: n})
                    })
                }), RELEASE_ITEM: bt(n, function (e) {
                    e.release()
                }), REMOVE_ITEM: bt(n, function (r, o, i, a) {
                    var s = function () {
                        var t = r.id;
                        Rt(n.items, t).archive(), e("DID_REMOVE_ITEM", {error: null, id: t, item: r}), St(e, n), o(Te(r))
                    }, u = n.options.server;
                    r.origin === ve.LOCAL && u && Y(u.remove) && !1 !== a.remove ? (e("DID_START_ITEM_REMOVE", {id: r.id}), u.remove(r.source, function () {
                        return s()
                    }, function (t) {
                        e("DID_THROW_ITEM_REMOVE_ERROR", {
                            id: r.id,
                            error: ot("error", 0, t, null),
                            status: {main: Dt(n.options.labelFileRemoveError)(t), sub: n.options.labelTapToRetry}
                        })
                    })) : ((a.revert && r.origin !== ve.LOCAL && null !== r.serverId || n.options.chunkUploads && r.file.size > n.options.chunkSize || n.options.chunkUploads && n.options.chunkForce) && r.revert(Tt(n.options.server.url, n.options.server.revert), t("GET_FORCE_REVERT")), s())
                }), ABORT_ITEM_LOAD: bt(n, function (e) {
                    e.abortLoad()
                }), ABORT_ITEM_PROCESSING: bt(n, function (t) {
                    t.serverId ? e("REVERT_ITEM_PROCESSING", {id: t.id}) : t.abortProcessing().then(function () {
                        n.options.instantUpload && e("REMOVE_ITEM", {query: t.id})
                    })
                }), REQUEST_REVERT_ITEM_PROCESSING: bt(n, function (r) {
                    if (n.options.instantUpload) {
                        var o = function (t) {
                            t && e("REVERT_ITEM_PROCESSING", {query: r})
                        }, i = t("GET_BEFORE_REMOVE_FILE");
                        if (!i) return o(!0);
                        var a = i(Te(r));
                        return null == a ? o(!0) : "boolean" == typeof a ? o(a) : void ("function" == typeof a.then && a.then(o))
                    }
                    e("REVERT_ITEM_PROCESSING", {query: r})
                }), REVERT_ITEM_PROCESSING: bt(n, function (r) {
                    r.revert(Tt(n.options.server.url, n.options.server.revert), t("GET_FORCE_REVERT")).then(function () {
                        (n.options.instantUpload || function (e) {
                            return !ht(e.file)
                        }(r)) && e("REMOVE_ITEM", {query: r.id})
                    }).catch(function () {
                    })
                }), SET_OPTIONS: function (t) {
                    var n = t.options, r = Object.keys(n), o = Mt.filter(function (e) {
                        return r.includes(e)
                    });
                    [].concat(ue(o), ue(Object.keys(n).filter(function (e) {
                        return !o.includes(e)
                    }))).forEach(function (t) {
                        e("SET_" + Z(t, "_").toUpperCase(), {value: n[t]})
                    })
                }
            }
        }, Mt = ["server"], wt = function (e) {
            return e
        }, Ct = function (e) {
            return document.createElement(e)
        }, Nt = function (e, t) {
            var n = e.childNodes[0];
            n ? t !== n.nodeValue && (n.nodeValue = t) : (n = document.createTextNode(t), e.appendChild(n))
        }, Gt = function (e, t, n, r) {
            var o = (r % 360 - 90) * Math.PI / 180;
            return {x: e + n * Math.cos(o), y: t + n * Math.sin(o)}
        }, Ut = function (e, t, n, r, o) {
            var i = 1;
            return o > r && o - r <= .5 && (i = 0), r > o && r - o >= .5 && (i = 0), function (e, t, n, r, o, i) {
                var a = Gt(e, t, n, o), s = Gt(e, t, n, r);
                return ["M", a.x, a.y, "A", n, n, 0, i, 0, s.x, s.y].join(" ")
            }(e, t, n, 360 * Math.min(.9999, r), 360 * Math.min(.9999, o), i)
        }, Bt = S({
            tag: "div",
            name: "progress-indicator",
            ignoreRectUpdate: !0,
            ignoreRect: !0,
            create: function (e) {
                var t = e.root, n = e.props;
                n.spin = !1, n.progress = 0, n.opacity = 0;
                var r = a("svg");
                t.ref.path = a("path", {
                    "stroke-width": 2,
                    "stroke-linecap": "round"
                }), r.appendChild(t.ref.path), t.ref.svg = r, t.appendChild(r)
            },
            write: function (e) {
                var t = e.root, n = e.props;
                if (0 !== n.opacity) {
                    n.align && (t.element.dataset.align = n.align);
                    var o = parseInt(r(t.ref.path, "stroke-width"), 10), i = .5 * t.rect.element.width, a = 0, s = 0;
                    n.spin ? (a = 0, s = .5) : (a = 0, s = n.progress);
                    var u = Ut(i, i, i - o, a, s);
                    r(t.ref.path, "d", u), r(t.ref.path, "stroke-opacity", n.spin || n.progress > 0 ? 1 : 0)
                }
            },
            mixins: {
                apis: ["progress", "spin", "align"],
                styles: ["opacity"],
                animations: {
                    opacity: {type: "tween", duration: 500},
                    progress: {type: "spring", stiffness: .95, damping: .65, mass: 10}
                }
            }
        }), Ft = S({
            tag: "button",
            attributes: {type: "button"},
            ignoreRect: !0,
            ignoreRectUpdate: !0,
            name: "file-action-button",
            mixins: {
                apis: ["label"],
                styles: ["translateX", "translateY", "scaleX", "scaleY", "opacity"],
                animations: {
                    scaleX: "spring",
                    scaleY: "spring",
                    translateX: "spring",
                    translateY: "spring",
                    opacity: {type: "tween", duration: 250}
                },
                listeners: !0
            },
            create: function (e) {
                var t = e.root, n = e.props;
                t.element.innerHTML = (n.icon || "") + "<span>" + n.label + "</span>", n.isDisabled = !1
            },
            write: function (e) {
                var t = e.root, n = e.props, o = n.isDisabled, i = t.query("GET_DISABLED") || 0 === n.opacity;
                i && !o ? (n.isDisabled = !0, r(t.element, "disabled", "disabled")) : !i && o && (n.isDisabled = !1, t.element.removeAttribute("disabled"))
            }
        }), qt = function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : ".",
                n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1e3,
                r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {}, o = r.labelBytes,
                i = void 0 === o ? "bytes" : o, a = r.labelKilobytes, s = void 0 === a ? "KB" : a, u = r.labelMegabytes,
                l = void 0 === u ? "MB" : u, c = r.labelGigabytes, f = void 0 === c ? "GB" : c, d = n, p = n * n,
                E = n * n * n;
            return (e = Math.round(Math.abs(e))) < d ? e + " " + i : e < p ? Math.floor(e / d) + " " + s : e < E ? Vt(e / p, 1, t) + " " + l : Vt(e / E, 2, t) + " " + f
        }, Vt = function (e, t, n) {
            return e.toFixed(t).split(".").filter(function (e) {
                return "0" !== e
            }).join(n)
        }, xt = function (e) {
            var t = e.root, n = e.props;
            Nt(t.ref.fileSize, qt(t.query("GET_ITEM_SIZE", n.id), ".", t.query("GET_FILE_SIZE_BASE"), t.query("GET_FILE_SIZE_LABELS", t.query))), Nt(t.ref.fileName, wt(t.query("GET_ITEM_NAME", n.id)))
        }, Yt = function (e) {
            var t = e.root, n = e.props;
            V(t.query("GET_ITEM_SIZE", n.id)) ? xt({
                root: t,
                props: n
            }) : Nt(t.ref.fileSize, t.query("GET_LABEL_FILE_SIZE_NOT_AVAILABLE"))
        }, kt = S({
            name: "file-info",
            ignoreRect: !0,
            ignoreRectUpdate: !0,
            write: A({
                DID_LOAD_ITEM: xt,
                DID_UPDATE_ITEM_META: xt,
                DID_THROW_ITEM_LOAD_ERROR: Yt,
                DID_THROW_ITEM_INVALID: Yt
            }),
            didCreateView: function (e) {
                ye("CREATE_VIEW", Object.assign({}, e, {view: e}))
            },
            create: function (e) {
                var t = e.root, n = e.props, o = Ct("span");
                o.className = "filepond--file-info-main", r(o, "aria-hidden", "true"), t.appendChild(o), t.ref.fileName = o;
                var i = Ct("span");
                i.className = "filepond--file-info-sub", t.appendChild(i), t.ref.fileSize = i, Nt(i, t.query("GET_LABEL_FILE_WAITING_FOR_SIZE")), Nt(o, wt(t.query("GET_ITEM_NAME", n.id)))
            },
            mixins: {styles: ["translateX", "translateY"], animations: {translateX: "spring", translateY: "spring"}}
        }), jt = function (e) {
            return Math.round(100 * e)
        }, Ht = function (e) {
            var t = e.root, n = e.action,
                r = null === n.progress ? t.query("GET_LABEL_FILE_LOADING") : t.query("GET_LABEL_FILE_LOADING") + " " + jt(n.progress) + "%";
            Nt(t.ref.main, r), Nt(t.ref.sub, t.query("GET_LABEL_TAP_TO_CANCEL"))
        }, Xt = function (e) {
            var t = e.root;
            Nt(t.ref.main, ""), Nt(t.ref.sub, "")
        }, Wt = function (e) {
            var t = e.root, n = e.action;
            Nt(t.ref.main, n.status.main), Nt(t.ref.sub, n.status.sub)
        }, zt = S({
            name: "file-status",
            ignoreRect: !0,
            ignoreRectUpdate: !0,
            write: A({
                DID_LOAD_ITEM: Xt,
                DID_REVERT_ITEM_PROCESSING: Xt,
                DID_REQUEST_ITEM_PROCESSING: function (e) {
                    var t = e.root;
                    Nt(t.ref.main, t.query("GET_LABEL_FILE_PROCESSING")), Nt(t.ref.sub, t.query("GET_LABEL_TAP_TO_CANCEL"))
                },
                DID_ABORT_ITEM_PROCESSING: function (e) {
                    var t = e.root;
                    Nt(t.ref.main, t.query("GET_LABEL_FILE_PROCESSING_ABORTED")), Nt(t.ref.sub, t.query("GET_LABEL_TAP_TO_RETRY"))
                },
                DID_COMPLETE_ITEM_PROCESSING: function (e) {
                    var t = e.root;
                    Nt(t.ref.main, t.query("GET_LABEL_FILE_PROCESSING_COMPLETE")), Nt(t.ref.sub, t.query("GET_LABEL_TAP_TO_UNDO"))
                },
                DID_UPDATE_ITEM_PROCESS_PROGRESS: function (e) {
                    var t = e.root, n = e.action,
                        r = null === n.progress ? t.query("GET_LABEL_FILE_PROCESSING") : t.query("GET_LABEL_FILE_PROCESSING") + " " + jt(n.progress) + "%";
                    Nt(t.ref.main, r), Nt(t.ref.sub, t.query("GET_LABEL_TAP_TO_CANCEL"))
                },
                DID_UPDATE_ITEM_LOAD_PROGRESS: Ht,
                DID_THROW_ITEM_LOAD_ERROR: Wt,
                DID_THROW_ITEM_INVALID: Wt,
                DID_THROW_ITEM_PROCESSING_ERROR: Wt,
                DID_THROW_ITEM_PROCESSING_REVERT_ERROR: Wt,
                DID_THROW_ITEM_REMOVE_ERROR: Wt
            }),
            didCreateView: function (e) {
                ye("CREATE_VIEW", Object.assign({}, e, {view: e}))
            },
            create: function (e) {
                var t = e.root, n = Ct("span");
                n.className = "filepond--file-status-main", t.appendChild(n), t.ref.main = n;
                var r = Ct("span");
                r.className = "filepond--file-status-sub", t.appendChild(r), t.ref.sub = r, Ht({
                    root: t,
                    action: {progress: null}
                })
            },
            mixins: {
                styles: ["translateX", "translateY", "opacity"],
                animations: {opacity: {type: "tween", duration: 250}, translateX: "spring", translateY: "spring"}
            }
        }), Qt = {
            AbortItemLoad: {
                label: "GET_LABEL_BUTTON_ABORT_ITEM_LOAD",
                action: "ABORT_ITEM_LOAD",
                className: "filepond--action-abort-item-load",
                align: "LOAD_INDICATOR_POSITION"
            },
            RetryItemLoad: {
                label: "GET_LABEL_BUTTON_RETRY_ITEM_LOAD",
                action: "RETRY_ITEM_LOAD",
                icon: "GET_ICON_RETRY",
                className: "filepond--action-retry-item-load",
                align: "BUTTON_PROCESS_ITEM_POSITION"
            },
            RemoveItem: {
                label: "GET_LABEL_BUTTON_REMOVE_ITEM",
                action: "REQUEST_REMOVE_ITEM",
                icon: "GET_ICON_REMOVE",
                className: "filepond--action-remove-item",
                align: "BUTTON_REMOVE_ITEM_POSITION"
            },
            ProcessItem: {
                label: "GET_LABEL_BUTTON_PROCESS_ITEM",
                action: "REQUEST_ITEM_PROCESSING",
                icon: "GET_ICON_PROCESS",
                className: "filepond--action-process-item",
                align: "BUTTON_PROCESS_ITEM_POSITION"
            },
            AbortItemProcessing: {
                label: "GET_LABEL_BUTTON_ABORT_ITEM_PROCESSING",
                action: "ABORT_ITEM_PROCESSING",
                className: "filepond--action-abort-item-processing",
                align: "BUTTON_PROCESS_ITEM_POSITION"
            },
            RetryItemProcessing: {
                label: "GET_LABEL_BUTTON_RETRY_ITEM_PROCESSING",
                action: "RETRY_ITEM_PROCESSING",
                icon: "GET_ICON_RETRY",
                className: "filepond--action-retry-item-processing",
                align: "BUTTON_PROCESS_ITEM_POSITION"
            },
            RevertItemProcessing: {
                label: "GET_LABEL_BUTTON_UNDO_ITEM_PROCESSING",
                action: "REQUEST_REVERT_ITEM_PROCESSING",
                icon: "GET_ICON_UNDO",
                className: "filepond--action-revert-item-processing",
                align: "BUTTON_PROCESS_ITEM_POSITION"
            }
        }, Zt = [];
    t(Qt, function (e) {
        Zt.push(e)
    });
    var Kt, $t = function (e) {
            if ("right" === nn(e)) return 0;
            var t = e.ref.buttonRemoveItem.rect.element;
            return t.hidden ? null : t.width + t.left
        }, Jt = function (e) {
            return e.ref.buttonAbortItemLoad.rect.element.width
        }, en = function (e) {
            return Math.floor(e.ref.buttonRemoveItem.rect.element.height / 4)
        }, tn = function (e) {
            return Math.floor(e.ref.buttonRemoveItem.rect.element.left / 2)
        }, nn = function (e) {
            return e.query("GET_STYLE_BUTTON_REMOVE_ITEM_POSITION")
        }, rn = {
            buttonAbortItemLoad: {opacity: 0},
            buttonRetryItemLoad: {opacity: 0},
            buttonRemoveItem: {opacity: 0},
            buttonProcessItem: {opacity: 0},
            buttonAbortItemProcessing: {opacity: 0},
            buttonRetryItemProcessing: {opacity: 0},
            buttonRevertItemProcessing: {opacity: 0},
            loadProgressIndicator: {
                opacity: 0, align: function (e) {
                    return e.query("GET_STYLE_LOAD_INDICATOR_POSITION")
                }
            },
            processProgressIndicator: {
                opacity: 0, align: function (e) {
                    return e.query("GET_STYLE_PROGRESS_INDICATOR_POSITION")
                }
            },
            processingCompleteIndicator: {opacity: 0, scaleX: .75, scaleY: .75},
            info: {translateX: 0, translateY: 0, opacity: 0},
            status: {translateX: 0, translateY: 0, opacity: 0}
        }, on = {
            buttonRemoveItem: {opacity: 1},
            buttonProcessItem: {opacity: 1},
            info: {translateX: $t},
            status: {translateX: $t}
        }, an = {buttonAbortItemProcessing: {opacity: 1}, processProgressIndicator: {opacity: 1}, status: {opacity: 1}},
        sn = {
            DID_THROW_ITEM_INVALID: {
                buttonRemoveItem: {opacity: 1},
                info: {translateX: $t},
                status: {translateX: $t, opacity: 1}
            },
            DID_START_ITEM_LOAD: {
                buttonAbortItemLoad: {opacity: 1},
                loadProgressIndicator: {opacity: 1},
                status: {opacity: 1}
            },
            DID_THROW_ITEM_LOAD_ERROR: {
                buttonRetryItemLoad: {opacity: 1},
                buttonRemoveItem: {opacity: 1},
                info: {translateX: $t},
                status: {opacity: 1}
            },
            DID_START_ITEM_REMOVE: {
                processProgressIndicator: {opacity: 1, align: nn},
                info: {translateX: $t},
                status: {opacity: 0}
            },
            DID_THROW_ITEM_REMOVE_ERROR: {
                processProgressIndicator: {opacity: 0, align: nn},
                buttonRemoveItem: {opacity: 1},
                info: {translateX: $t},
                status: {opacity: 1, translateX: $t}
            },
            DID_LOAD_ITEM: on,
            DID_LOAD_LOCAL_ITEM: {buttonRemoveItem: {opacity: 1}, info: {translateX: $t}, status: {translateX: $t}},
            DID_START_ITEM_PROCESSING: an,
            DID_REQUEST_ITEM_PROCESSING: an,
            DID_UPDATE_ITEM_PROCESS_PROGRESS: an,
            DID_COMPLETE_ITEM_PROCESSING: {
                buttonRevertItemProcessing: {opacity: 1},
                info: {opacity: 1},
                status: {opacity: 1}
            },
            DID_THROW_ITEM_PROCESSING_ERROR: {
                buttonRemoveItem: {opacity: 1},
                buttonRetryItemProcessing: {opacity: 1},
                status: {opacity: 1},
                info: {translateX: $t}
            },
            DID_THROW_ITEM_PROCESSING_REVERT_ERROR: {
                buttonRevertItemProcessing: {opacity: 1},
                status: {opacity: 1},
                info: {opacity: 1}
            },
            DID_ABORT_ITEM_PROCESSING: {
                buttonRemoveItem: {opacity: 1},
                buttonProcessItem: {opacity: 1},
                info: {translateX: $t},
                status: {opacity: 1}
            },
            DID_REVERT_ITEM_PROCESSING: on
        }, un = S({
            create: function (e) {
                var t = e.root;
                t.element.innerHTML = t.query("GET_ICON_DONE")
            },
            name: "processing-complete-indicator",
            ignoreRect: !0,
            mixins: {
                styles: ["scaleX", "scaleY", "opacity"],
                animations: {scaleX: "spring", scaleY: "spring", opacity: {type: "tween", duration: 250}}
            }
        }), ln = A({
            DID_SET_LABEL_BUTTON_ABORT_ITEM_PROCESSING: function (e) {
                var t = e.root, n = e.action;
                t.ref.buttonAbortItemProcessing.label = n.value
            }, DID_SET_LABEL_BUTTON_ABORT_ITEM_LOAD: function (e) {
                var t = e.root, n = e.action;
                t.ref.buttonAbortItemLoad.label = n.value
            }, DID_SET_LABEL_BUTTON_ABORT_ITEM_REMOVAL: function (e) {
                var t = e.root, n = e.action;
                t.ref.buttonAbortItemRemoval.label = n.value
            }, DID_REQUEST_ITEM_PROCESSING: function (e) {
                var t = e.root;
                t.ref.processProgressIndicator.spin = !0, t.ref.processProgressIndicator.progress = 0
            }, DID_START_ITEM_LOAD: function (e) {
                var t = e.root;
                t.ref.loadProgressIndicator.spin = !0, t.ref.loadProgressIndicator.progress = 0
            }, DID_START_ITEM_REMOVE: function (e) {
                var t = e.root;
                t.ref.processProgressIndicator.spin = !0, t.ref.processProgressIndicator.progress = 0
            }, DID_UPDATE_ITEM_LOAD_PROGRESS: function (e) {
                var t = e.root, n = e.action;
                t.ref.loadProgressIndicator.spin = !1, t.ref.loadProgressIndicator.progress = n.progress
            }, DID_UPDATE_ITEM_PROCESS_PROGRESS: function (e) {
                var t = e.root, n = e.action;
                t.ref.processProgressIndicator.spin = !1, t.ref.processProgressIndicator.progress = n.progress
            }
        }), cn = S({
            create: function (e) {
                var n, r = e.root, o = e.props, i = Object.keys(Qt).reduce(function (e, t) {
                        return e[t] = Object.assign({}, Qt[t]), e
                    }, {}), a = o.id, s = r.query("GET_ALLOW_REVERT"), u = r.query("GET_ALLOW_REMOVE"),
                    l = r.query("GET_ALLOW_PROCESS"), c = r.query("GET_INSTANT_UPLOAD"), f = r.query("IS_ASYNC"),
                    d = r.query("GET_STYLE_BUTTON_REMOVE_ITEM_ALIGN");
                f ? l && !s ? n = function (e) {
                    return !/RevertItemProcessing/.test(e)
                } : !l && s ? n = function (e) {
                    return !/ProcessItem|RetryItemProcessing|AbortItemProcessing/.test(e)
                } : l || s || (n = function (e) {
                    return !/Process/.test(e)
                }) : n = function (e) {
                    return !/Process/.test(e)
                };
                var p = n ? Zt.filter(n) : Zt.concat();
                if (c && s && (i.RevertItemProcessing.label = "GET_LABEL_BUTTON_REMOVE_ITEM", i.RevertItemProcessing.icon = "GET_ICON_REMOVE"), f && !s) {
                    var E = sn.DID_COMPLETE_ITEM_PROCESSING;
                    E.info.translateX = tn, E.info.translateY = en, E.status.translateY = en, E.processingCompleteIndicator = {
                        opacity: 1,
                        scaleX: 1,
                        scaleY: 1
                    }
                }
                if (f && !l && (["DID_START_ITEM_PROCESSING", "DID_REQUEST_ITEM_PROCESSING", "DID_UPDATE_ITEM_PROCESS_PROGRESS", "DID_THROW_ITEM_PROCESSING_ERROR"].forEach(function (e) {
                    sn[e].status.translateY = en
                }), sn.DID_THROW_ITEM_PROCESSING_ERROR.status.translateX = Jt), d && s) {
                    i.RevertItemProcessing.align = "BUTTON_REMOVE_ITEM_POSITION";
                    var _ = sn.DID_COMPLETE_ITEM_PROCESSING;
                    _.info.translateX = $t, _.status.translateY = en, _.processingCompleteIndicator = {
                        opacity: 1,
                        scaleX: 1,
                        scaleY: 1
                    }
                }
                u || (i.RemoveItem.disabled = !0), t(i, function (e, t) {
                    var n = r.createChildView(Ft, {label: r.query(t.label), icon: r.query(t.icon), opacity: 0});
                    p.includes(e) && r.appendChildView(n), t.disabled && (n.element.setAttribute("disabled", "disabled"), n.element.setAttribute("hidden", "hidden")), n.element.dataset.align = r.query("GET_STYLE_" + t.align), n.element.classList.add(t.className), n.on("click", function (e) {
                        e.stopPropagation(), t.disabled || r.dispatch(t.action, {query: a})
                    }), r.ref["button" + e] = n
                }), r.ref.processingCompleteIndicator = r.appendChildView(r.createChildView(un)), r.ref.processingCompleteIndicator.element.dataset.align = r.query("GET_STYLE_BUTTON_PROCESS_ITEM_POSITION"), r.ref.info = r.appendChildView(r.createChildView(kt, {id: a})), r.ref.status = r.appendChildView(r.createChildView(zt, {id: a}));
                var T = r.appendChildView(r.createChildView(Bt, {
                    opacity: 0,
                    align: r.query("GET_STYLE_LOAD_INDICATOR_POSITION")
                }));
                T.element.classList.add("filepond--load-indicator"), r.ref.loadProgressIndicator = T;
                var I = r.appendChildView(r.createChildView(Bt, {
                    opacity: 0,
                    align: r.query("GET_STYLE_PROGRESS_INDICATOR_POSITION")
                }));
                I.element.classList.add("filepond--process-indicator"), r.ref.processProgressIndicator = I, r.ref.activeStyles = []
            }, write: function (e) {
                var n = e.root, r = e.actions, o = e.props;
                ln({root: n, actions: r, props: o});
                var i = r.concat().filter(function (e) {
                    return /^DID_/.test(e.type)
                }).reverse().find(function (e) {
                    return sn[e.type]
                });
                if (i) {
                    n.ref.activeStyles = [];
                    var a = sn[i.type];
                    t(rn, function (e, r) {
                        var o = n.ref[e];
                        t(r, function (t, r) {
                            var i = a[e] && void 0 !== a[e][t] ? a[e][t] : r;
                            n.ref.activeStyles.push({control: o, key: t, value: i})
                        })
                    })
                }
                n.ref.activeStyles.forEach(function (e) {
                    var t = e.control, r = e.key, o = e.value;
                    t[r] = "function" == typeof o ? o(n) : o
                })
            }, didCreateView: function (e) {
                ye("CREATE_VIEW", Object.assign({}, e, {view: e}))
            }, name: "file"
        }), fn = S({
            create: function (e) {
                var t = e.root, n = e.props;
                t.ref.fileName = Ct("legend"), t.appendChild(t.ref.fileName), t.ref.file = t.appendChildView(t.createChildView(cn, {id: n.id})), t.ref.data = !1
            }, ignoreRect: !0, write: A({
                DID_LOAD_ITEM: function (e) {
                    var t = e.root, n = e.props;
                    Nt(t.ref.fileName, wt(t.query("GET_ITEM_NAME", n.id)))
                }
            }), didCreateView: function (e) {
                ye("CREATE_VIEW", Object.assign({}, e, {view: e}))
            }, tag: "fieldset", name: "file-wrapper"
        }), dn = {type: "spring", damping: .6, mass: 7}, pn = function (e, t, n) {
            var r = S({name: "panel-" + t.name + " filepond--" + n, mixins: t.mixins, ignoreRectUpdate: !0}),
                o = e.createChildView(r, t.props);
            e.ref[t.name] = e.appendChildView(o)
        }, En = S({
            name: "panel", read: function (e) {
                var t = e.root;
                return e.props.heightCurrent = t.ref.bottom.translateY
            }, write: function (e) {
                var t = e.root, n = e.props;
                if (null !== t.ref.scalable && n.scalable === t.ref.scalable || (t.ref.scalable = !N(n.scalable) || n.scalable, t.element.dataset.scalable = t.ref.scalable), n.height) {
                    var r = t.ref.top.rect.element, o = t.ref.bottom.rect.element,
                        i = Math.max(r.height + o.height, n.height);
                    t.ref.center.translateY = r.height, t.ref.center.scaleY = (i - r.height - o.height) / 100, t.ref.bottom.translateY = i - o.height
                }
            }, create: function (e) {
                var t = e.root, n = e.props;
                [{name: "top"}, {
                    name: "center",
                    props: {translateY: null, scaleY: null},
                    mixins: {animations: {scaleY: dn}, styles: ["translateY", "scaleY"]}
                }, {
                    name: "bottom",
                    props: {translateY: null},
                    mixins: {animations: {translateY: dn}, styles: ["translateY"]}
                }].forEach(function (e) {
                    pn(t, e, n.name)
                }), t.element.classList.add("filepond--" + n.name), t.ref.scalable = null
            }, ignoreRect: !0, mixins: {apis: ["height", "heightCurrent", "scalable"]}
        }), _n = {type: "spring", stiffness: .75, damping: .45, mass: 10}, Tn = {
            DID_START_ITEM_LOAD: "busy",
            DID_UPDATE_ITEM_LOAD_PROGRESS: "loading",
            DID_THROW_ITEM_INVALID: "load-invalid",
            DID_THROW_ITEM_LOAD_ERROR: "load-error",
            DID_LOAD_ITEM: "idle",
            DID_THROW_ITEM_REMOVE_ERROR: "remove-error",
            DID_START_ITEM_REMOVE: "busy",
            DID_START_ITEM_PROCESSING: "busy processing",
            DID_REQUEST_ITEM_PROCESSING: "busy processing",
            DID_UPDATE_ITEM_PROCESS_PROGRESS: "processing",
            DID_COMPLETE_ITEM_PROCESSING: "processing-complete",
            DID_THROW_ITEM_PROCESSING_ERROR: "processing-error",
            DID_THROW_ITEM_PROCESSING_REVERT_ERROR: "processing-revert-error",
            DID_ABORT_ITEM_PROCESSING: "cancelled",
            DID_REVERT_ITEM_PROCESSING: "idle"
        }, In = A({
            DID_UPDATE_PANEL_HEIGHT: function (e) {
                var t = e.root, n = e.action;
                t.height = n.height
            }
        }), vn = A({
            DID_GRAB_ITEM: function (e) {
                var t = e.root;
                e.props.dragOrigin = {x: t.translateX, y: t.translateY}
            }, DID_DRAG_ITEM: function (e) {
                e.root.element.dataset.dragState = "drag"
            }, DID_DROP_ITEM: function (e) {
                var t = e.root, n = e.props;
                n.dragOffset = null, n.dragOrigin = null, t.element.dataset.dragState = "drop"
            }
        }, function (e) {
            var t = e.root, n = e.actions, r = e.props, o = e.shouldOptimize;
            "drop" === t.element.dataset.dragState && t.scaleX <= 1 && (t.element.dataset.dragState = "idle");
            var i = n.concat().filter(function (e) {
                return /^DID_/.test(e.type)
            }).reverse().find(function (e) {
                return Tn[e.type]
            });
            i && i.type !== r.currentState && (r.currentState = i.type, t.element.dataset.filepondItemState = Tn[r.currentState] || "");
            var a = t.query("GET_ITEM_PANEL_ASPECT_RATIO") || t.query("GET_PANEL_ASPECT_RATIO");
            a ? o || (t.height = t.rect.element.width * a) : (In({
                root: t,
                actions: n,
                props: r
            }), !t.height && t.ref.container.rect.element.height > 0 && (t.height = t.ref.container.rect.element.height)), o && (t.ref.panel.height = null), t.ref.panel.height = t.height
        }), mn = S({
            create: function (e) {
                var t = e.root, n = e.props;
                t.ref.handleClick = function (e) {
                    return t.dispatch("DID_ACTIVATE_ITEM", {id: n.id})
                }, t.element.id = "filepond--item-" + n.id, t.element.addEventListener("click", t.ref.handleClick), t.ref.container = t.appendChildView(t.createChildView(fn, {id: n.id})), t.ref.panel = t.appendChildView(t.createChildView(En, {name: "item-panel"})), t.ref.panel.height = null, n.markedForRemoval = !1, t.query("GET_ALLOW_REORDER") && (t.element.dataset.dragState = "idle", t.element.addEventListener("pointerdown", function (e) {
                    if (e.isPrimary) {
                        var r = !1, o = e.pageX, i = e.pageY;
                        n.dragOrigin = {x: t.translateX, y: t.translateY}, n.dragCenter = {x: e.offsetX, y: e.offsetY};
                        var a, s, u, l = (a = t.query("GET_ACTIVE_ITEMS"), s = a.map(function (e) {
                            return e.id
                        }), u = void 0, {
                            setIndex: function (e) {
                                u = e
                            }, getIndex: function () {
                                return u
                            }, getItemIndex: function (e) {
                                return s.indexOf(e.id)
                            }
                        });
                        t.dispatch("DID_GRAB_ITEM", {id: n.id, dragState: l});
                        var c = function (e) {
                            e.isPrimary && (e.stopPropagation(), e.preventDefault(), n.dragOffset = {
                                x: e.pageX - o,
                                y: e.pageY - i
                            }, n.dragOffset.x * n.dragOffset.x + n.dragOffset.y * n.dragOffset.y > 16 && !r && (r = !0, t.element.removeEventListener("click", t.ref.handleClick)), t.dispatch("DID_DRAG_ITEM", {
                                id: n.id,
                                dragState: l
                            }))
                        };
                        document.addEventListener("pointermove", c), document.addEventListener("pointerup", function e(a) {
                            a.isPrimary && (document.removeEventListener("pointermove", c), document.removeEventListener("pointerup", e), n.dragOffset = {
                                x: a.pageX - o,
                                y: a.pageY - i
                            }, t.dispatch("DID_DROP_ITEM", {id: n.id, dragState: l}), r && setTimeout(function () {
                                return t.element.addEventListener("click", t.ref.handleClick)
                            }, 0))
                        })
                    }
                }))
            },
            write: vn,
            destroy: function (e) {
                var t = e.root, n = e.props;
                t.element.removeEventListener("click", t.ref.handleClick), t.dispatch("RELEASE_ITEM", {query: n.id})
            },
            tag: "li",
            name: "item",
            mixins: {
                apis: ["id", "interactionMethod", "markedForRemoval", "spawnDate", "dragCenter", "dragOrigin", "dragOffset"],
                styles: ["translateX", "translateY", "scaleX", "scaleY", "opacity", "height"],
                animations: {
                    scaleX: "spring",
                    scaleY: "spring",
                    translateX: _n,
                    translateY: _n,
                    opacity: {type: "tween", duration: 150}
                }
            }
        }), hn = function (e, t) {
            return Math.max(1, Math.floor((e + 1) / t))
        }, gn = function (e, t, n) {
            if (n) {
                var r = e.rect.element.width, o = t.length, i = null;
                if (0 === o || n.top < t[0].rect.element.top) return -1;
                var a = t[0].rect.element, s = a.marginLeft + a.marginRight, u = a.width + s, l = hn(r, u);
                if (1 === l) {
                    for (var c = 0; c < o; c++) {
                        var f = t[c], d = f.rect.outer.top + .5 * f.rect.element.height;
                        if (n.top < d) return c
                    }
                    return o
                }
                for (var p = a.marginTop + a.marginBottom, E = a.height + p, _ = 0; _ < o; _++) {
                    var T = _ % l * u, I = Math.floor(_ / l) * E, v = I - a.marginTop, m = T + u,
                        h = I + E + a.marginBottom;
                    if (n.top < h && n.top > v) {
                        if (n.left < m) return _;
                        i = _ !== o - 1 ? _ : null
                    }
                }
                return null !== i ? i : o
            }
        }, Rn = {
            height: 0, width: 0, get getHeight() {
                return this.height
            }, set setHeight(e) {
                0 !== this.height && 0 !== e || (this.height = e)
            }, get getWidth() {
                return this.width
            }, set setWidth(e) {
                0 !== this.width && 0 !== e || (this.width = e)
            }, setDimensions: function (e, t) {
                0 !== this.height && 0 !== e || (this.height = e), 0 !== this.width && 0 !== t || (this.width = t)
            }
        }, On = function (e, t, n) {
            var r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 0,
                o = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 1;
            e.dragOffset ? (e.translateX = null, e.translateY = null, e.translateX = e.dragOrigin.x + e.dragOffset.x, e.translateY = e.dragOrigin.y + e.dragOffset.y, e.scaleX = 1.025, e.scaleY = 1.025) : (e.translateX = t, e.translateY = n, Date.now() > e.spawnDate && (0 === e.opacity && yn(e, t, n, r, o), e.scaleX = 1, e.scaleY = 1, e.opacity = 1))
        }, yn = function (e, t, n, r, o) {
            e.interactionMethod === re ? (e.translateX = null, e.translateX = t, e.translateY = null, e.translateY = n) : e.interactionMethod === ee ? (e.translateX = null, e.translateX = t - 20 * r, e.translateY = null, e.translateY = n - 10 * o, e.scaleX = .8, e.scaleY = .8) : e.interactionMethod === te ? (e.translateY = null, e.translateY = n - 30) : e.interactionMethod === J && (e.translateX = null, e.translateX = t - 30, e.translateY = null)
        }, Dn = function (e) {
            return e.rect.element.height + .5 * e.rect.element.marginBottom + .5 * e.rect.element.marginTop
        }, Sn = A({
            DID_ADD_ITEM: function (e) {
                var t = e.root, n = e.action, r = n.id, o = n.index, i = n.interactionMethod;
                t.ref.addIndex = o;
                var a = Date.now(), s = a, u = 1;
                if (i !== re) {
                    u = 0;
                    var l = t.query("GET_ITEM_INSERT_INTERVAL"), c = a - t.ref.lastItemSpanwDate;
                    s = c < l ? a + (l - c) : a
                }
                t.ref.lastItemSpanwDate = s, t.appendChildView(t.createChildView(mn, {
                    spawnDate: s,
                    id: r,
                    opacity: u,
                    interactionMethod: i
                }), o)
            }, DID_REMOVE_ITEM: function (e) {
                var t = e.root, n = e.action.id, r = t.childViews.find(function (e) {
                    return e.id === n
                });
                r && (r.scaleX = .9, r.scaleY = .9, r.opacity = 0, r.markedForRemoval = !0)
            }, DID_DRAG_ITEM: function (e) {
                var t = e.root, n = e.action, r = n.id, o = n.dragState, i = t.query("GET_ITEM", {id: r}),
                    a = t.childViews.find(function (e) {
                        return e.id === r
                    }), s = t.childViews.length, u = o.getItemIndex(i);
                if (a) {
                    var l, c = a.dragOrigin.x + a.dragOffset.x + a.dragCenter.x,
                        f = a.dragOrigin.y + a.dragOffset.y + a.dragCenter.y, d = Dn(a),
                        p = (l = a).rect.element.width + .5 * l.rect.element.marginLeft + .5 * l.rect.element.marginRight,
                        E = Math.floor(t.rect.outer.width / p);
                    E > s && (E = s);
                    var _ = Math.floor(s / E + 1);
                    Rn.setHeight = d * _, Rn.setWidth = p * E;
                    var T = {
                        y: Math.floor(f / d), x: Math.floor(c / p), getGridIndex: function () {
                            return f > Rn.getHeight || f < 0 || c > Rn.getWidth || c < 0 ? u : this.y * E + this.x
                        }, getColIndex: function () {
                            for (var e = t.query("GET_ACTIVE_ITEMS"), n = t.childViews.filter(function (e) {
                                return e.rect.element.height
                            }), r = e.map(function (e) {
                                return n.find(function (t) {
                                    return t.id === e.id
                                })
                            }), o = r.findIndex(function (e) {
                                return e === a
                            }), i = Dn(a), s = r.length, u = s, l = 0, c = 0, d = 0, p = 0; p < s; p++) if (l = Dn(r[p]), f < (c = (d = c) + l)) {
                                if (o > p) {
                                    if (f < d + i) {
                                        u = p;
                                        break
                                    }
                                    continue
                                }
                                u = p;
                                break
                            }
                            return u
                        }
                    }, I = E > 1 ? T.getGridIndex() : T.getColIndex();
                    t.dispatch("MOVE_ITEM", {query: a, index: I});
                    var v = o.getIndex();
                    if (void 0 === v || v !== I) {
                        if (o.setIndex(I), void 0 === v) return;
                        t.dispatch("DID_REORDER_ITEMS", {items: t.query("GET_ACTIVE_ITEMS"), origin: u, target: I})
                    }
                }
            }
        }), An = S({
            create: function (e) {
                var t = e.root;
                r(t.element, "role", "list"), t.ref.lastItemSpanwDate = Date.now()
            }, write: function (e) {
                var t = e.root, n = e.props, r = e.actions, o = e.shouldOptimize;
                Sn({root: t, props: n, actions: r});
                var i = n.dragCoordinates, a = t.rect.element.width, s = t.childViews.filter(function (e) {
                    return e.rect.element.height
                }), u = t.query("GET_ACTIVE_ITEMS").map(function (e) {
                    return s.find(function (t) {
                        return t.id === e.id
                    })
                }).filter(function (e) {
                    return e
                }), l = i ? gn(t, u, i) : null, c = t.ref.addIndex || null;
                t.ref.addIndex = null;
                var f = 0, d = 0, p = 0;
                if (0 !== u.length) {
                    var E = u[0].rect.element, _ = E.marginTop + E.marginBottom, T = E.marginLeft + E.marginRight,
                        I = E.width + T, v = E.height + _, m = hn(a, I);
                    if (1 === m) {
                        var h = 0, g = 0;
                        u.forEach(function (e, t) {
                            if (l) {
                                var n = t - l;
                                g = -2 === n ? .25 * -_ : -1 === n ? .75 * -_ : 0 === n ? .75 * _ : 1 === n ? .25 * _ : 0
                            }
                            o && (e.translateX = null, e.translateY = null), e.markedForRemoval || On(e, 0, h + g);
                            var r = (e.rect.element.height + _) * (e.markedForRemoval ? e.opacity : 1);
                            h += r
                        })
                    } else {
                        var R = 0, O = 0;
                        u.forEach(function (e, t) {
                            t === l && (f = 1), t === c && (p += 1), e.markedForRemoval && e.opacity < .5 && (d -= 1);
                            var n = t + p + f + d, r = n % m, i = Math.floor(n / m), a = r * I, s = i * v,
                                u = Math.sign(a - R), E = Math.sign(s - O);
                            R = a, O = s, e.markedForRemoval || (o && (e.translateX = null, e.translateY = null), On(e, a, s, u, E))
                        })
                    }
                }
            }, tag: "ul", name: "list", didWriteView: function (e) {
                var t = e.root;
                t.childViews.filter(function (e) {
                    return e.markedForRemoval && 0 === e.opacity && e.resting
                }).forEach(function (e) {
                    e._destroy(), t.removeChildView(e)
                })
            }, filterFrameActionsForChild: function (e, t) {
                return t.filter(function (t) {
                    return !t.data || !t.data.id || e.id === t.data.id
                })
            }, mixins: {apis: ["dragCoordinates"]}
        }), Ln = A({
            DID_DRAG: function (e) {
                var t = e.root, n = e.props, r = e.action;
                t.query("GET_ITEM_INSERT_LOCATION_FREEDOM") && (n.dragCoordinates = {
                    left: r.position.scopeLeft - t.ref.list.rect.element.left,
                    top: r.position.scopeTop - (t.rect.outer.top + t.rect.element.marginTop + t.rect.element.scrollTop)
                })
            }, DID_END_DRAG: function (e) {
                e.props.dragCoordinates = null
            }
        }), bn = S({
            create: function (e) {
                var t = e.root, n = e.props;
                t.ref.list = t.appendChildView(t.createChildView(An)), n.dragCoordinates = null, n.overflowing = !1
            },
            write: function (e) {
                var t = e.root, n = e.props, r = e.actions;
                if (Ln({
                    root: t,
                    props: n,
                    actions: r
                }), t.ref.list.dragCoordinates = n.dragCoordinates, n.overflowing && !n.overflow && (n.overflowing = !1, t.element.dataset.state = "", t.height = null), n.overflow) {
                    var o = Math.round(n.overflow);
                    o !== t.height && (n.overflowing = !0, t.element.dataset.state = "overflow", t.height = o)
                }
            },
            name: "list-scroller",
            mixins: {
                apis: ["overflow", "dragCoordinates"],
                styles: ["height", "translateY"],
                animations: {translateY: "spring"}
            }
        }), Pn = function (e, t, n) {
            var o = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : "";
            n ? r(e, t, o) : e.removeAttribute(t)
        }, Mn = function (e) {
            var t = e.root, n = e.action;
            t.query("GET_ALLOW_SYNC_ACCEPT_ATTRIBUTE") && Pn(t.element, "accept", !!n.value, n.value ? n.value.join(",") : "")
        }, wn = function (e) {
            var t = e.root, n = e.action;
            Pn(t.element, "multiple", n.value)
        }, Cn = function (e) {
            var t = e.root, n = e.action;
            Pn(t.element, "webkitdirectory", n.value)
        }, Nn = function (e) {
            var t = e.root, n = t.query("GET_DISABLED"), r = t.query("GET_ALLOW_BROWSE"), o = n || !r;
            Pn(t.element, "disabled", o)
        }, Gn = function (e) {
            var t = e.root;
            e.action.value ? 0 === t.query("GET_TOTAL_ITEMS") && Pn(t.element, "required", !0) : Pn(t.element, "required", !1)
        }, Un = function (e) {
            var t = e.root, n = e.action;
            Pn(t.element, "capture", !!n.value, !0 === n.value ? "" : n.value)
        }, Bn = function (e) {
            var t = e.root, n = t.element;
            t.query("GET_TOTAL_ITEMS") > 0 ? (Pn(n, "required", !1), Pn(n, "name", !1)) : (Pn(n, "name", !0, t.query("GET_NAME")), t.query("GET_CHECK_VALIDITY") && n.setCustomValidity(""), t.query("GET_REQUIRED") && Pn(n, "required", !0))
        }, Fn = S({
            tag: "input",
            name: "browser",
            ignoreRect: !0,
            ignoreRectUpdate: !0,
            attributes: {type: "file"},
            create: function (e) {
                var t = e.root, n = e.props;
                t.element.id = "filepond--browser-" + n.id, r(t.element, "name", t.query("GET_NAME")), r(t.element, "aria-controls", "filepond--assistant-" + n.id), r(t.element, "aria-labelledby", "filepond--drop-label-" + n.id), Mn({
                    root: t,
                    action: {value: t.query("GET_ACCEPTED_FILE_TYPES")}
                }), wn({root: t, action: {value: t.query("GET_ALLOW_MULTIPLE")}}), Cn({
                    root: t,
                    action: {value: t.query("GET_ALLOW_DIRECTORIES_ONLY")}
                }), Nn({root: t}), Gn({root: t, action: {value: t.query("GET_REQUIRED")}}), Un({
                    root: t,
                    action: {value: t.query("GET_CAPTURE_METHOD")}
                }), t.ref.handleChange = function (e) {
                    if (t.element.value) {
                        var r = Array.from(t.element.files).map(function (e) {
                            return e._relativePath = e.webkitRelativePath, e
                        });
                        setTimeout(function () {
                            n.onload(r), function (e) {
                                if (e && "" !== e.value) {
                                    try {
                                        e.value = ""
                                    } catch (e) {
                                    }
                                    if (e.value) {
                                        var t = Ct("form"), n = e.parentNode, r = e.nextSibling;
                                        t.appendChild(e), t.reset(), r ? n.insertBefore(e, r) : n.appendChild(e)
                                    }
                                }
                            }(t.element)
                        }, 250)
                    }
                }, t.element.addEventListener("change", t.ref.handleChange)
            },
            destroy: function (e) {
                var t = e.root;
                t.element.removeEventListener("change", t.ref.handleChange)
            },
            write: A({
                DID_LOAD_ITEM: Bn,
                DID_REMOVE_ITEM: Bn,
                DID_THROW_ITEM_INVALID: function (e) {
                    var t = e.root;
                    t.query("GET_CHECK_VALIDITY") && t.element.setCustomValidity(t.query("GET_LABEL_INVALID_FIELD"))
                },
                DID_SET_DISABLED: Nn,
                DID_SET_ALLOW_BROWSE: Nn,
                DID_SET_ALLOW_DIRECTORIES_ONLY: Cn,
                DID_SET_ALLOW_MULTIPLE: wn,
                DID_SET_ACCEPTED_FILE_TYPES: Mn,
                DID_SET_CAPTURE_METHOD: Un,
                DID_SET_REQUIRED: Gn
            })
        }), qn = 13, Vn = 32, xn = function (e, t) {
            e.innerHTML = t;
            var n = e.querySelector(".filepond--label-action");
            return n && r(n, "tabindex", "0"), t
        }, Yn = S({
            name: "drop-label",
            ignoreRect: !0,
            create: function (e) {
                var t = e.root, n = e.props, o = Ct("label");
                r(o, "for", "filepond--browser-" + n.id), r(o, "id", "filepond--drop-label-" + n.id), r(o, "aria-hidden", "true"), t.ref.handleKeyDown = function (e) {
                    (e.keyCode === qn || e.keyCode === Vn) && (e.preventDefault(), t.ref.label.click())
                }, t.ref.handleClick = function (e) {
                    e.target === o || o.contains(e.target) || t.ref.label.click()
                }, o.addEventListener("keydown", t.ref.handleKeyDown), t.element.addEventListener("click", t.ref.handleClick), xn(o, n.caption), t.appendChild(o), t.ref.label = o
            },
            destroy: function (e) {
                var t = e.root;
                t.ref.label.addEventListener("keydown", t.ref.handleKeyDown), t.element.removeEventListener("click", t.ref.handleClick)
            },
            write: A({
                DID_SET_LABEL_IDLE: function (e) {
                    var t = e.root, n = e.action;
                    xn(t.ref.label, n.value)
                }
            }),
            mixins: {
                styles: ["opacity", "translateX", "translateY"],
                animations: {opacity: {type: "tween", duration: 150}, translateX: "spring", translateY: "spring"}
            }
        }), kn = S({
            name: "drip-blob",
            ignoreRect: !0,
            mixins: {
                styles: ["translateX", "translateY", "scaleX", "scaleY", "opacity"],
                animations: {
                    scaleX: "spring",
                    scaleY: "spring",
                    translateX: "spring",
                    translateY: "spring",
                    opacity: {type: "tween", duration: 250}
                }
            }
        }), jn = A({
            DID_DRAG: function (e) {
                var t = e.root, n = e.action;
                t.ref.blob ? (t.ref.blob.translateX = n.position.scopeLeft, t.ref.blob.translateY = n.position.scopeTop, t.ref.blob.scaleX = 1, t.ref.blob.scaleY = 1, t.ref.blob.opacity = 1) : function (e) {
                    var t = e.root, n = .5 * t.rect.element.width, r = .5 * t.rect.element.height;
                    t.ref.blob = t.appendChildView(t.createChildView(kn, {
                        opacity: 0,
                        scaleX: 2.5,
                        scaleY: 2.5,
                        translateX: n,
                        translateY: r
                    }))
                }({root: t})
            }, DID_DROP: function (e) {
                var t = e.root;
                t.ref.blob && (t.ref.blob.scaleX = 2.5, t.ref.blob.scaleY = 2.5, t.ref.blob.opacity = 0)
            }, DID_END_DRAG: function (e) {
                var t = e.root;
                t.ref.blob && (t.ref.blob.opacity = 0)
            }
        }), Hn = S({
            ignoreRect: !0, ignoreRectUpdate: !0, name: "drip", write: function (e) {
                var t = e.root, n = e.props, r = e.actions;
                jn({root: t, props: n, actions: r});
                var o = t.ref.blob;
                0 === r.length && o && 0 === o.opacity && (t.removeChildView(o), t.ref.blob = null)
            }
        }), Xn = function (e, t) {
            try {
                var n = new DataTransfer;
                t.forEach(function (e) {
                    e instanceof File ? n.items.add(e) : n.items.add(new File([e], e.name, {type: e.type}))
                }), e.files = n.files
            } catch (e) {
                return !1
            }
            return !0
        }, Wn = function (e, t) {
            return e.ref.fields[t]
        }, zn = function (e) {
            e.query("GET_ACTIVE_ITEMS").forEach(function (t) {
                e.ref.fields[t.id] && e.element.appendChild(e.ref.fields[t.id])
            })
        }, Qn = function (e) {
            var t = e.root;
            return zn(t)
        }, Zn = A({
            DID_SET_DISABLED: function (e) {
                var t = e.root;
                t.element.disabled = t.query("GET_DISABLED")
            }, DID_ADD_ITEM: function (e) {
                var t = e.root, n = e.action,
                    r = !(t.query("GET_ITEM", n.id).origin === ve.LOCAL) && t.query("SHOULD_UPDATE_FILE_INPUT"),
                    o = Ct("input");
                o.type = r ? "file" : "hidden", o.name = t.query("GET_NAME"), o.disabled = t.query("GET_DISABLED"), t.ref.fields[n.id] = o, zn(t)
            }, DID_LOAD_ITEM: function (e) {
                var t = e.root, n = e.action, r = Wn(t, n.id);
                if (r && (null !== n.serverFileReference && (r.value = n.serverFileReference), t.query("SHOULD_UPDATE_FILE_INPUT"))) {
                    var o = t.query("GET_ITEM", n.id);
                    Xn(r, [o.file])
                }
            }, DID_REMOVE_ITEM: function (e) {
                var t = e.root, n = e.action, r = Wn(t, n.id);
                r && (r.parentNode && r.parentNode.removeChild(r), delete t.ref.fields[n.id])
            }, DID_DEFINE_VALUE: function (e) {
                var t = e.root, n = e.action, r = Wn(t, n.id);
                r && (null === n.value ? r.removeAttribute("value") : r.value = n.value, zn(t))
            }, DID_PREPARE_OUTPUT: function (e) {
                var t = e.root, n = e.action;
                t.query("SHOULD_UPDATE_FILE_INPUT") && setTimeout(function () {
                    var e = Wn(t, n.id);
                    e && Xn(e, [n.file])
                }, 0)
            }, DID_REORDER_ITEMS: Qn, DID_SORT_ITEMS: Qn
        }), Kn = S({
            tag: "fieldset", name: "data", create: function (e) {
                return e.root.ref.fields = {}
            }, write: Zn, ignoreRect: !0
        }), $n = ["jpg", "jpeg", "png", "gif", "bmp", "webp", "svg", "tiff"], Jn = ["css", "csv", "html", "txt"],
        er = {zip: "zip|compressed", epub: "application/epub+zip"}, tr = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "";
            return e = e.toLowerCase(), $n.includes(e) ? "image/" + ("jpg" === e ? "jpeg" : "svg" === e ? "svg+xml" : e) : Jn.includes(e) ? "text/" + e : er[e] || ""
        }, nr = function (e) {
            return new Promise(function (t, n) {
                var r = dr(e);
                if (r.length && !rr(e)) return t(r);
                or(e).then(t)
            })
        }, rr = function (e) {
            return !!e.files && e.files.length > 0
        }, or = function (e) {
            return new Promise(function (t, n) {
                var r = (e.items ? Array.from(e.items) : []).filter(function (e) {
                    return ir(e)
                }).map(function (e) {
                    return ar(e)
                });
                r.length ? Promise.all(r).then(function (e) {
                    var n = [];
                    e.forEach(function (e) {
                        n.push.apply(n, e)
                    }), t(n.filter(function (e) {
                        return e
                    }).map(function (e) {
                        return e._relativePath || (e._relativePath = e.webkitRelativePath), e
                    }))
                }).catch(console.error) : t(e.files ? Array.from(e.files) : [])
            })
        }, ir = function (e) {
            if (cr(e)) {
                var t = fr(e);
                if (t) return t.isFile || t.isDirectory
            }
            return "file" === e.kind
        }, ar = function (e) {
            return new Promise(function (t, n) {
                lr(e) ? sr(fr(e)).then(t).catch(n) : t([e.getAsFile()])
            })
        }, sr = function (e) {
            return new Promise(function (t, n) {
                var r = [], o = 0, i = 0, a = function () {
                    0 === i && 0 === o && t(r)
                };
                !function e(t) {
                    o++;
                    var s = t.createReader();
                    !function t() {
                        s.readEntries(function (n) {
                            if (0 === n.length) return o--, void a();
                            n.forEach(function (t) {
                                t.isDirectory ? e(t) : (i++, t.file(function (e) {
                                    var n = ur(e);
                                    t.fullPath && (n._relativePath = t.fullPath), r.push(n), i--, a()
                                }))
                            }), t()
                        }, n)
                    }()
                }(e)
            })
        }, ur = function (e) {
            if (e.type.length) return e;
            var t = e.lastModifiedDate, n = e.name, r = tr(je(e.name));
            return r.length ? ((e = e.slice(0, e.size, r)).name = n, e.lastModifiedDate = t, e) : e
        }, lr = function (e) {
            return cr(e) && (fr(e) || {}).isDirectory
        }, cr = function (e) {
            return "webkitGetAsEntry" in e
        }, fr = function (e) {
            return e.webkitGetAsEntry()
        }, dr = function (e) {
            var t = [];
            try {
                if ((t = Er(e)).length) return t;
                t = pr(e)
            } catch (e) {
            }
            return t
        }, pr = function (e) {
            var t = e.getData("url");
            return "string" == typeof t && t.length ? [t] : []
        }, Er = function (e) {
            var t = e.getData("text/html");
            if ("string" == typeof t && t.length) {
                var n = t.match(/src\s*=\s*"(.+?)"/);
                if (n) return [n[1]]
            }
            return []
        }, _r = [], Tr = function (e) {
            return {pageLeft: e.pageX, pageTop: e.pageY, scopeLeft: e.offsetX || e.layerX, scopeTop: e.offsetY || e.layerY}
        }, Ir = function (e) {
            var t = _r.find(function (t) {
                return t.element === e
            });
            if (t) return t;
            var n = vr(e);
            return _r.push(n), n
        }, vr = function (e) {
            var n = [], r = {dragenter: Rr, dragover: Or, dragleave: Dr, drop: yr}, o = {};
            t(r, function (t, r) {
                o[t] = r(e, n), e.addEventListener(t, o[t], !1)
            });
            var i = {
                element: e, addListener: function (a) {
                    return n.push(a), function () {
                        n.splice(n.indexOf(a), 1), 0 === n.length && (_r.splice(_r.indexOf(i), 1), t(r, function (t) {
                            e.removeEventListener(t, o[t], !1)
                        }))
                    }
                }
            };
            return i
        }, mr = function (e, t) {
            var n, r = function (e, t) {
                return "elementFromPoint" in e || (e = document), e.elementFromPoint(t.x, t.y)
            }("getRootNode" in (n = t) ? n.getRootNode() : document, {
                x: e.pageX - window.pageXOffset,
                y: e.pageY - window.pageYOffset
            });
            return r === t || t.contains(r)
        }, hr = null, gr = function (e, t) {
            try {
                e.dropEffect = t
            } catch (e) {
            }
        }, Rr = function (e, t) {
            return function (e) {
                e.preventDefault(), hr = e.target, t.forEach(function (t) {
                    var n = t.element, r = t.onenter;
                    mr(e, n) && (t.state = "enter", r(Tr(e)))
                })
            }
        }, Or = function (e, t) {
            return function (e) {
                e.preventDefault();
                var n = e.dataTransfer;
                nr(n).then(function (r) {
                    var o = !1;
                    t.some(function (t) {
                        var i = t.filterElement, a = t.element, s = t.onenter, u = t.onexit, l = t.ondrag, c = t.allowdrop;
                        gr(n, "copy");
                        var f = c(r);
                        if (f) if (mr(e, a)) {
                            if (o = !0, null === t.state) return t.state = "enter", void s(Tr(e));
                            if (t.state = "over", i && !f) return void gr(n, "none");
                            l(Tr(e))
                        } else i && !o && gr(n, "none"), t.state && (t.state = null, u(Tr(e))); else gr(n, "none")
                    })
                })
            }
        }, yr = function (e, t) {
            return function (e) {
                e.preventDefault();
                var n = e.dataTransfer;
                nr(n).then(function (n) {
                    t.forEach(function (t) {
                        var r = t.filterElement, o = t.element, i = t.ondrop, a = t.onexit, s = t.allowdrop;
                        if (t.state = null, !r || mr(e, o)) return s(n) ? void i(Tr(e), n) : a(Tr(e))
                    })
                })
            }
        }, Dr = function (e, t) {
            return function (e) {
                hr === e.target && t.forEach(function (t) {
                    var n = t.onexit;
                    t.state = null, n(Tr(e))
                })
            }
        }, Sr = function (e, t, n) {
            e.classList.add("filepond--hopper");
            var r = n.catchesDropsOnPage, o = n.requiresDropOnElement, i = n.filterItems, a = void 0 === i ? function (e) {
                return e
            } : i, s = function (e, t, n) {
                var r = Ir(t), o = {
                    element: e, filterElement: n, state: null, ondrop: function () {
                    }, onenter: function () {
                    }, ondrag: function () {
                    }, onexit: function () {
                    }, onload: function () {
                    }, allowdrop: function () {
                    }
                };
                return o.destroy = r.addListener(o), o
            }(e, r ? document.documentElement : e, o), u = "", l = "";
            s.allowdrop = function (e) {
                return t(a(e))
            }, s.ondrop = function (e, n) {
                var r = a(n);
                t(r) ? (l = "drag-drop", c.onload(r, e)) : c.ondragend(e)
            }, s.ondrag = function (e) {
                c.ondrag(e)
            }, s.onenter = function (e) {
                l = "drag-over", c.ondragstart(e)
            }, s.onexit = function (e) {
                l = "drag-exit", c.ondragend(e)
            };
            var c = {
                updateHopperState: function () {
                    u !== l && (e.dataset.hopperState = l, u = l)
                }, onload: function () {
                }, ondragstart: function () {
                }, ondrag: function () {
                }, ondragend: function () {
                }, destroy: function () {
                    s.destroy()
                }
            };
            return c
        }, Ar = !1, Lr = [], br = function (e) {
            var t = document.activeElement;
            if (t && /textarea|input/i.test(t.nodeName)) {
                for (var n = !1, r = t; r !== document.body;) {
                    if (r.classList.contains("filepond--root")) {
                        n = !0;
                        break
                    }
                    r = r.parentNode
                }
                if (!n) return
            }
            nr(e.clipboardData).then(function (e) {
                e.length && Lr.forEach(function (t) {
                    return t(e)
                })
            })
        }, Pr = function () {
            var e = function (e) {
                t.onload(e)
            }, t = {
                destroy: function () {
                    var t;
                    t = e, de(Lr, Lr.indexOf(t)), 0 === Lr.length && (document.removeEventListener("paste", br), Ar = !1)
                }, onload: function () {
                }
            };
            return function (e) {
                Lr.includes(e) || (Lr.push(e), Ar || (Ar = !0, document.addEventListener("paste", br)))
            }(e), t
        }, Mr = null, wr = null, Cr = [], Nr = function (e, t) {
            e.element.textContent = t
        }, Gr = function (e, t, n) {
            var r = e.query("GET_TOTAL_ITEMS");
            Nr(e, n + " " + t + ", " + r + " " + (1 === r ? e.query("GET_LABEL_FILE_COUNT_SINGULAR") : e.query("GET_LABEL_FILE_COUNT_PLURAL"))), clearTimeout(wr), wr = setTimeout(function () {
                !function (e) {
                    e.element.textContent = ""
                }(e)
            }, 1500)
        }, Ur = function (e) {
            return e.element.parentNode.contains(document.activeElement)
        }, Br = function (e) {
            var t = e.root, n = e.action, r = t.query("GET_ITEM", n.id).filename,
                o = t.query("GET_LABEL_FILE_PROCESSING_ABORTED");
            Nr(t, r + " " + o)
        }, Fr = function (e) {
            var t = e.root, n = e.action, r = t.query("GET_ITEM", n.id).filename;
            Nr(t, n.status.main + " " + r + " " + n.status.sub)
        }, qr = S({
            create: function (e) {
                var t = e.root, n = e.props;
                t.element.id = "filepond--assistant-" + n.id, r(t.element, "role", "status"), r(t.element, "aria-live", "polite"), r(t.element, "aria-relevant", "additions")
            }, ignoreRect: !0, ignoreRectUpdate: !0, write: A({
                DID_LOAD_ITEM: function (e) {
                    var t = e.root, n = e.action;
                    if (Ur(t)) {
                        t.element.textContent = "";
                        var r = t.query("GET_ITEM", n.id);
                        Cr.push(r.filename), clearTimeout(Mr), Mr = setTimeout(function () {
                            Gr(t, Cr.join(", "), t.query("GET_LABEL_FILE_ADDED")), Cr.length = 0
                        }, 750)
                    }
                },
                DID_REMOVE_ITEM: function (e) {
                    var t = e.root, n = e.action;
                    if (Ur(t)) {
                        var r = n.item;
                        Gr(t, r.filename, t.query("GET_LABEL_FILE_REMOVED"))
                    }
                },
                DID_COMPLETE_ITEM_PROCESSING: function (e) {
                    var t = e.root, n = e.action, r = t.query("GET_ITEM", n.id).filename,
                        o = t.query("GET_LABEL_FILE_PROCESSING_COMPLETE");
                    Nr(t, r + " " + o)
                },
                DID_ABORT_ITEM_PROCESSING: Br,
                DID_REVERT_ITEM_PROCESSING: Br,
                DID_THROW_ITEM_REMOVE_ERROR: Fr,
                DID_THROW_ITEM_LOAD_ERROR: Fr,
                DID_THROW_ITEM_INVALID: Fr,
                DID_THROW_ITEM_PROCESSING_ERROR: Fr
            }), tag: "span", name: "assistant"
        }), Vr = function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "-";
            return e.replace(new RegExp(t + ".", "g"), function (e) {
                return e.charAt(1).toUpperCase()
            })
        }, xr = function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 16,
                n = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2], r = Date.now(), o = null;
            return function () {
                for (var i = arguments.length, a = new Array(i), s = 0; s < i; s++) a[s] = arguments[s];
                clearTimeout(o);
                var u = Date.now() - r, l = function () {
                    r = Date.now(), e.apply(void 0, a)
                };
                u < t ? n || (o = setTimeout(l, t - u)) : l()
            }
        }, Yr = function (e) {
            return e.preventDefault()
        }, kr = function (e) {
            var t = e.ref.list.childViews[0].childViews[0];
            return t ? {top: t.rect.element.marginTop, bottom: t.rect.element.marginBottom} : {top: 0, bottom: 0}
        }, jr = function (e) {
            var t = 0, n = 0, r = e.ref.list, o = r.childViews[0], i = o.childViews.filter(function (e) {
                return e.rect.element.height
            }), a = e.query("GET_ACTIVE_ITEMS").map(function (e) {
                return i.find(function (t) {
                    return t.id === e.id
                })
            }).filter(function (e) {
                return e
            });
            if (0 === a.length) return {visual: t, bounds: n};
            var s = o.rect.element.width, u = gn(o, a, r.dragCoordinates), l = a[0].rect.element,
                c = l.marginTop + l.marginBottom, f = l.marginLeft + l.marginRight, d = l.width + f, p = l.height + c,
                E = void 0 !== u && u >= 0 ? 1 : 0, _ = a.find(function (e) {
                    return e.markedForRemoval && e.opacity < .45
                }) ? -1 : 0, T = a.length + E + _, I = hn(s, d);
            return 1 === I ? a.forEach(function (e) {
                var r = e.rect.element.height + c;
                n += r, t += r * e.opacity
            }) : (n = Math.ceil(T / I) * p, t = n), {visual: t, bounds: n}
        }, Hr = function (e) {
            var t = e.ref.measureHeight || null;
            return {cappedHeight: parseInt(e.style.maxHeight, 10) || null, fixedHeight: 0 === t ? null : t}
        }, Xr = function (e, t) {
            var n = e.query("GET_ALLOW_REPLACE"), r = e.query("GET_ALLOW_MULTIPLE"), o = e.query("GET_TOTAL_ITEMS"),
                i = e.query("GET_MAX_FILES"), a = t.length;
            return !r && a > 1 ? (e.dispatch("DID_THROW_MAX_FILES", {
                source: t,
                error: ot("warning", 0, "Max files")
            }), !0) : !(!r && n) && (!!(V(i = r ? i : 1) && o + a > i) && (e.dispatch("DID_THROW_MAX_FILES", {
                source: t,
                error: ot("warning", 0, "Max files")
            }), !0))
        }, Wr = function (e, t, n) {
            var r = e.childViews[0];
            return gn(r, t, {
                left: n.scopeLeft - r.rect.element.left,
                top: n.scopeTop - (e.rect.outer.top + e.rect.element.marginTop + e.rect.element.scrollTop)
            })
        }, zr = function (e) {
            var t = e.query("GET_ALLOW_DROP"), n = e.query("GET_DISABLED"), r = t && !n;
            if (r && !e.ref.hopper) {
                var o = Sr(e.element, function (t) {
                    var n = e.query("GET_BEFORE_DROP_FILE") || function () {
                        return !0
                    };
                    return !e.query("GET_DROP_VALIDATION") || t.every(function (t) {
                        return ye("ALLOW_HOPPER_ITEM", t, {query: e.query}).every(function (e) {
                            return !0 === e
                        }) && n(t)
                    })
                }, {
                    filterItems: function (t) {
                        var n = e.query("GET_IGNORED_FILES");
                        return t.filter(function (e) {
                            return !ht(e) || !n.includes(e.name.toLowerCase())
                        })
                    },
                    catchesDropsOnPage: e.query("GET_DROP_ON_PAGE"),
                    requiresDropOnElement: e.query("GET_DROP_ON_ELEMENT")
                });
                o.onload = function (t, n) {
                    var r = e.ref.list.childViews[0].childViews.filter(function (e) {
                        return e.rect.element.height
                    }), o = e.query("GET_ACTIVE_ITEMS").map(function (e) {
                        return r.find(function (t) {
                            return t.id === e.id
                        })
                    }).filter(function (e) {
                        return e
                    });
                    Oe("ADD_ITEMS", t, {dispatch: e.dispatch}).then(function (t) {
                        if (Xr(e, t)) return !1;
                        e.dispatch("ADD_ITEMS", {items: t, index: Wr(e.ref.list, o, n), interactionMethod: ee})
                    }), e.dispatch("DID_DROP", {position: n}), e.dispatch("DID_END_DRAG", {position: n})
                }, o.ondragstart = function (t) {
                    e.dispatch("DID_START_DRAG", {position: t})
                }, o.ondrag = xr(function (t) {
                    e.dispatch("DID_DRAG", {position: t})
                }), o.ondragend = function (t) {
                    e.dispatch("DID_END_DRAG", {position: t})
                }, e.ref.hopper = o, e.ref.drip = e.appendChildView(e.createChildView(Hn))
            } else !r && e.ref.hopper && (e.ref.hopper.destroy(), e.ref.hopper = null, e.removeChildView(e.ref.drip))
        }, Qr = function (e, t) {
            var n = e.query("GET_ALLOW_BROWSE"), r = e.query("GET_DISABLED"), o = n && !r;
            o && !e.ref.browser ? e.ref.browser = e.appendChildView(e.createChildView(Fn, Object.assign({}, t, {
                onload: function (t) {
                    Oe("ADD_ITEMS", t, {dispatch: e.dispatch}).then(function (t) {
                        if (Xr(e, t)) return !1;
                        e.dispatch("ADD_ITEMS", {items: t, index: -1, interactionMethod: te})
                    })
                }
            })), 0) : !o && e.ref.browser && (e.removeChildView(e.ref.browser), e.ref.browser = null)
        }, Zr = function (e) {
            var t = e.query("GET_ALLOW_PASTE"), n = e.query("GET_DISABLED"), r = t && !n;
            r && !e.ref.paster ? (e.ref.paster = Pr(), e.ref.paster.onload = function (t) {
                Oe("ADD_ITEMS", t, {dispatch: e.dispatch}).then(function (t) {
                    if (Xr(e, t)) return !1;
                    e.dispatch("ADD_ITEMS", {items: t, index: -1, interactionMethod: ne})
                })
            }) : !r && e.ref.paster && (e.ref.paster.destroy(), e.ref.paster = null)
        }, Kr = A({
            DID_SET_ALLOW_BROWSE: function (e) {
                var t = e.root, n = e.props;
                Qr(t, n)
            }, DID_SET_ALLOW_DROP: function (e) {
                var t = e.root;
                zr(t)
            }, DID_SET_ALLOW_PASTE: function (e) {
                var t = e.root;
                Zr(t)
            }, DID_SET_DISABLED: function (e) {
                var t = e.root, n = e.props;
                zr(t), Zr(t), Qr(t, n), t.query("GET_DISABLED") ? t.element.dataset.disabled = "disabled" : t.element.removeAttribute("data-disabled")
            }
        }), $r = S({
            name: "root", read: function (e) {
                var t = e.root;
                t.ref.measure && (t.ref.measureHeight = t.ref.measure.offsetHeight)
            }, create: function (e) {
                var t = e.root, n = e.props, r = t.query("GET_ID");
                r && (t.element.id = r);
                var o = t.query("GET_CLASS_NAME");
                o && o.split(" ").filter(function (e) {
                    return e.length
                }).forEach(function (e) {
                    t.element.classList.add(e)
                }), t.ref.label = t.appendChildView(t.createChildView(Yn, Object.assign({}, n, {
                    translateY: null,
                    caption: t.query("GET_LABEL_IDLE")
                }))), t.ref.list = t.appendChildView(t.createChildView(bn, {translateY: null})), t.ref.panel = t.appendChildView(t.createChildView(En, {name: "panel-root"})), t.ref.assistant = t.appendChildView(t.createChildView(qr, Object.assign({}, n))), t.ref.data = t.appendChildView(t.createChildView(Kn, Object.assign({}, n))), t.ref.measure = Ct("div"), t.ref.measure.style.height = "100%", t.element.appendChild(t.ref.measure), t.ref.bounds = null, t.query("GET_STYLES").filter(function (e) {
                    return !M(e.value)
                }).map(function (e) {
                    var n = e.name, r = e.value;
                    t.element.dataset[n] = r
                }), t.ref.widthPrevious = null, t.ref.widthUpdated = xr(function () {
                    t.ref.updateHistory = [], t.dispatch("DID_RESIZE_ROOT")
                }, 250), t.ref.previousAspectRatio = null, t.ref.updateHistory = [];
                var i = window.matchMedia("(pointer: fine) and (hover: hover)").matches, a = "PointerEvent" in window;
                t.query("GET_ALLOW_REORDER") && a && !i && (t.element.addEventListener("touchmove", Yr, {passive: !1}), t.element.addEventListener("gesturestart", Yr));
                var s = t.query("GET_CREDITS");
                if (2 === s.length) {
                    var u = document.createElement("a");
                    u.className = "filepond--credits", u.setAttribute("aria-hidden", "true"), u.href = s[0], u.tabindex = -1, u.target = "_blank", u.rel = "noopener noreferrer", u.textContent = s[1], t.element.appendChild(u), t.ref.credits = u
                }
            }, write: function (e) {
                var t = e.root, n = e.props, r = e.actions;
                if (Kr({root: t, props: n, actions: r}), r.filter(function (e) {
                    return /^DID_SET_STYLE_/.test(e.type)
                }).filter(function (e) {
                    return !M(e.data.value)
                }).map(function (e) {
                    var n = e.type, r = e.data, o = Vr(n.substring(8).toLowerCase(), "_");
                    t.element.dataset[o] = r.value, t.invalidateLayout()
                }), !t.rect.element.hidden) {
                    t.rect.element.width !== t.ref.widthPrevious && (t.ref.widthPrevious = t.rect.element.width, t.ref.widthUpdated());
                    var o = t.ref.bounds;
                    o || (o = t.ref.bounds = Hr(t), t.element.removeChild(t.ref.measure), t.ref.measure = null);
                    var i = t.ref, a = i.hopper, s = i.label, u = i.list, l = i.panel;
                    a && a.updateHopperState();
                    var c = t.query("GET_PANEL_ASPECT_RATIO"), f = t.query("GET_ALLOW_MULTIPLE"),
                        d = t.query("GET_TOTAL_ITEMS"), p = d === (f ? t.query("GET_MAX_FILES") || 1e6 : 1),
                        E = r.find(function (e) {
                            return "DID_ADD_ITEM" === e.type
                        });
                    if (p && E) {
                        var _ = E.data.interactionMethod;
                        s.opacity = 0, f ? s.translateY = -40 : _ === J ? s.translateX = 40 : s.translateY = _ === te ? 40 : 30
                    } else p || (s.opacity = 1, s.translateX = 0, s.translateY = 0);
                    var T = kr(t), I = jr(t), v = s.rect.element.height, m = !f || p ? 0 : v,
                        h = p ? u.rect.element.marginTop : 0, g = 0 === d ? 0 : u.rect.element.marginBottom,
                        R = m + h + I.visual + g, O = m + h + I.bounds + g;
                    if (u.translateY = Math.max(0, m - u.rect.element.marginTop) - T.top, c) {
                        var y = t.rect.element.width, D = y * c;
                        c !== t.ref.previousAspectRatio && (t.ref.previousAspectRatio = c, t.ref.updateHistory = []);
                        var S = t.ref.updateHistory;
                        if (S.push(y), S.length > 4) for (var A = S.length, L = A - 10, b = 0, P = A; P >= L; P--) if (S[P] === S[P - 2] && b++, b >= 2) return;
                        l.scalable = !1, l.height = D;
                        var w = D - m - (g - T.bottom) - (p ? h : 0);
                        I.visual > w ? u.overflow = w : u.overflow = null, t.height = D
                    } else if (o.fixedHeight) {
                        l.scalable = !1;
                        var C = o.fixedHeight - m - (g - T.bottom) - (p ? h : 0);
                        I.visual > C ? u.overflow = C : u.overflow = null
                    } else if (o.cappedHeight) {
                        var N = R >= o.cappedHeight, G = Math.min(o.cappedHeight, R);
                        l.scalable = !0, l.height = N ? G : G - T.top - T.bottom;
                        var U = G - m - (g - T.bottom) - (p ? h : 0);
                        R > o.cappedHeight && I.visual > U ? u.overflow = U : u.overflow = null, t.height = Math.min(o.cappedHeight, O - T.top - T.bottom)
                    } else {
                        var B = d > 0 ? T.top + T.bottom : 0;
                        l.scalable = !0, l.height = Math.max(v, R - B), t.height = Math.max(v, O - B)
                    }
                    t.ref.credits && l.heightCurrent && (t.ref.credits.style.transform = "translateY(" + l.heightCurrent + "px)")
                }
            }, destroy: function (e) {
                var t = e.root;
                t.ref.paster && t.ref.paster.destroy(), t.ref.hopper && t.ref.hopper.destroy(), t.element.removeEventListener("touchmove", Yr), t.element.removeEventListener("gesturestart", Yr)
            }, mixins: {styles: ["height"]}
        }), Jr = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, r = null, o = Se(),
                i = function (e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : [],
                        n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : [], r = Object.assign({}, e),
                        o = [], i = [], a = function (e, t, n) {
                            !n || document.hidden ? (c[e] && c[e](t), o.push({type: e, data: t})) : i.push({type: e, data: t})
                        }, s = function (e) {
                            for (var t, n = arguments.length, r = new Array(n > 1 ? n - 1 : 0), o = 1; o < n; o++) r[o - 1] = arguments[o];
                            return l[e] ? (t = l)[e].apply(t, r) : null
                        }, u = {
                            getState: function () {
                                return Object.assign({}, r)
                            }, processActionQueue: function () {
                                var e = [].concat(o);
                                return o.length = 0, e
                            }, processDispatchQueue: function () {
                                var e = [].concat(i);
                                i.length = 0, e.forEach(function (e) {
                                    var t = e.type, n = e.data;
                                    a(t, n)
                                })
                            }, dispatch: a, query: s
                        }, l = {};
                    t.forEach(function (e) {
                        l = Object.assign({}, e(r), {}, l)
                    });
                    var c = {};
                    return n.forEach(function (e) {
                        c = Object.assign({}, e(a, s, r), {}, c)
                    }), u
                }({
                    items: [],
                    listUpdateTimeout: null,
                    itemUpdateTimeout: null,
                    processingQueue: [],
                    options: Q(o)
                }, [Ve, $(o)], [Pt, K(o)]);
            i.dispatch("SET_OPTIONS", {options: e});
            var a = function () {
                document.hidden || i.dispatch("KICK")
            };
            document.addEventListener("visibilitychange", a);
            var s = null, u = !1, l = !1, c = null, f = null, d = function () {
                u || (u = !0), clearTimeout(s), s = setTimeout(function () {
                    u = !1, c = null, f = null, l && (l = !1, i.dispatch("DID_STOP_RESIZE"))
                }, 500)
            };
            window.addEventListener("resize", d);
            var p = $r(i, {id: oe()}), E = !1, T = !1, I = {
                _read: function () {
                    u && (f = window.innerWidth, c || (c = f), l || f === c || (i.dispatch("DID_START_RESIZE"), l = !0)), T && E && (E = null === p.element.offsetParent), E || (p._read(), T = p.rect.element.hidden)
                }, _write: function (e) {
                    var t, n = i.processActionQueue().filter(function (e) {
                        return !/^SET_/.test(e.type)
                    });
                    E && !n.length || (g(n), E = p._write(e, n, l), (t = i.query("GET_ITEMS")).forEach(function (e, n) {
                        e.released && de(t, n)
                    }), E && i.processDispatchQueue())
                }
            }, v = function (e) {
                return function (t) {
                    var n = {type: e};
                    if (!t) return n;
                    if (t.hasOwnProperty("error") && (n.error = t.error ? Object.assign({}, t.error) : null), t.status && (n.status = Object.assign({}, t.status)), t.file && (n.output = t.file), t.source) n.file = t.source; else if (t.item || t.id) {
                        var r = t.item ? t.item : i.query("GET_ITEM", t.id);
                        n.file = r ? Te(r) : null
                    }
                    return t.items && (n.items = t.items.map(Te)), /progress/.test(e) && (n.progress = t.progress), t.hasOwnProperty("origin") && t.hasOwnProperty("target") && (n.origin = t.origin, n.target = t.target), n
                }
            }, m = {
                DID_DESTROY: v("destroy"),
                DID_INIT: v("init"),
                DID_THROW_MAX_FILES: v("warning"),
                DID_INIT_ITEM: v("initfile"),
                DID_START_ITEM_LOAD: v("addfilestart"),
                DID_UPDATE_ITEM_LOAD_PROGRESS: v("addfileprogress"),
                DID_LOAD_ITEM: v("addfile"),
                DID_THROW_ITEM_INVALID: [v("error"), v("addfile")],
                DID_THROW_ITEM_LOAD_ERROR: [v("error"), v("addfile")],
                DID_THROW_ITEM_REMOVE_ERROR: [v("error"), v("removefile")],
                DID_PREPARE_OUTPUT: v("preparefile"),
                DID_START_ITEM_PROCESSING: v("processfilestart"),
                DID_UPDATE_ITEM_PROCESS_PROGRESS: v("processfileprogress"),
                DID_ABORT_ITEM_PROCESSING: v("processfileabort"),
                DID_COMPLETE_ITEM_PROCESSING: v("processfile"),
                DID_COMPLETE_ITEM_PROCESSING_ALL: v("processfiles"),
                DID_REVERT_ITEM_PROCESSING: v("processfilerevert"),
                DID_THROW_ITEM_PROCESSING_ERROR: [v("error"), v("processfile")],
                DID_REMOVE_ITEM: v("removefile"),
                DID_UPDATE_ITEMS: v("updatefiles"),
                DID_ACTIVATE_ITEM: v("activatefile"),
                DID_REORDER_ITEMS: v("reorderfiles")
            }, h = function (e) {
                var t = Object.assign({pond: A}, e);
                delete t.type, p.element.dispatchEvent(new CustomEvent("FilePond:" + e.type, {
                    detail: t,
                    bubbles: !0,
                    cancelable: !0,
                    composed: !0
                }));
                var n = [];
                e.hasOwnProperty("error") && n.push(e.error), e.hasOwnProperty("file") && n.push(e.file);
                var r = ["type", "error", "file"];
                Object.keys(e).filter(function (e) {
                    return !r.includes(e)
                }).forEach(function (t) {
                    return n.push(e[t])
                }), A.fire.apply(A, [e.type].concat(n));
                var o = i.query("GET_ON" + e.type.toUpperCase());
                o && o.apply(void 0, n)
            }, g = function (e) {
                e.length && e.filter(function (e) {
                    return m[e.type]
                }).forEach(function (e) {
                    var t = m[e.type];
                    (Array.isArray(t) ? t : [t]).forEach(function (t) {
                        "DID_INIT_ITEM" === e.type ? h(t(e.data)) : setTimeout(function () {
                            h(t(e.data))
                        }, 0)
                    })
                })
            }, R = function (e) {
                return new Promise(function (t, n) {
                    i.dispatch("REQUEST_ITEM_PREPARE", {
                        query: e, success: function (e) {
                            t(e)
                        }, failure: function (e) {
                            n(e)
                        }
                    })
                })
            }, O = function (e, t) {
                var n;
                return "object" != typeof e || (n = e).file && n.id || t || (t = e, e = void 0), i.dispatch("REMOVE_ITEM", Object.assign({}, t, {query: e})), null === i.query("GET_ACTIVE_ITEM", e)
            }, y = function () {
                for (var e = arguments.length, t = new Array(e), n = 0; n < e; n++) t[n] = arguments[n];
                return new Promise(function (e, n) {
                    var r = [], o = {};
                    if (P(t[0])) r.push.apply(r, t[0]), Object.assign(o, t[1] || {}); else {
                        var a = t[t.length - 1];
                        "object" != typeof a || a instanceof Blob || Object.assign(o, t.pop()), r.push.apply(r, t)
                    }
                    i.dispatch("ADD_ITEMS", {items: r, index: o.index, interactionMethod: J, success: e, failure: n})
                })
            }, D = function () {
                return i.query("GET_ACTIVE_ITEMS")
            }, S = function (e) {
                return new Promise(function (t, n) {
                    i.dispatch("REQUEST_ITEM_PROCESSING", {
                        query: e, success: function (e) {
                            t(e)
                        }, failure: function (e) {
                            n(e)
                        }
                    })
                })
            }, A = Object.assign({}, pe(), {}, I, {}, function (e, n) {
                var r = {};
                return t(n, function (t) {
                    r[t] = {
                        get: function () {
                            return e.getState().options[t]
                        }, set: function (n) {
                            e.dispatch("SET_" + Z(t, "_").toUpperCase(), {value: n})
                        }
                    }
                }), r
            }(i, o), {
                setOptions: function (e) {
                    return i.dispatch("SET_OPTIONS", {options: e})
                }, addFile: function (e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                    return new Promise(function (n, r) {
                        y([{source: e, options: t}], {index: t.index}).then(function (e) {
                            return n(e && e[0])
                        }).catch(r)
                    })
                }, addFiles: y, getFile: function (e) {
                    return i.query("GET_ACTIVE_ITEM", e)
                }, processFile: S, prepareFile: R, removeFile: O, moveFile: function (e, t) {
                    return i.dispatch("MOVE_ITEM", {query: e, index: t})
                }, getFiles: D, processFiles: function () {
                    for (var e = arguments.length, t = new Array(e), n = 0; n < e; n++) t[n] = arguments[n];
                    var r = Array.isArray(t[0]) ? t[0] : t;
                    if (!r.length) {
                        var o = D().filter(function (e) {
                            return !(e.status === Ie.IDLE && e.origin === ve.LOCAL) && e.status !== Ie.PROCESSING && e.status !== Ie.PROCESSING_COMPLETE && e.status !== Ie.PROCESSING_REVERT_ERROR
                        });
                        return Promise.all(o.map(S))
                    }
                    return Promise.all(r.map(S))
                }, removeFiles: function () {
                    for (var e = arguments.length, t = new Array(e), n = 0; n < e; n++) t[n] = arguments[n];
                    var r, o = Array.isArray(t[0]) ? t[0] : t;
                    "object" == typeof o[o.length - 1] ? r = o.pop() : Array.isArray(t[0]) && (r = t[1]);
                    var i = D();
                    return o.length ? o.map(function (e) {
                        return _(e) ? i[e] ? i[e].id : null : e
                    }).filter(function (e) {
                        return e
                    }).map(function (e) {
                        return O(e, r)
                    }) : Promise.all(i.map(function (e) {
                        return O(e, r)
                    }))
                }, prepareFiles: function () {
                    for (var e = arguments.length, t = new Array(e), n = 0; n < e; n++) t[n] = arguments[n];
                    var r = Array.isArray(t[0]) ? t[0] : t, o = r.length ? r : D();
                    return Promise.all(o.map(R))
                }, sort: function (e) {
                    return i.dispatch("SORT", {compare: e})
                }, browse: function () {
                    var e = p.element.querySelector("input[type=file]");
                    e && e.click()
                }, destroy: function () {
                    A.fire("destroy", p.element), i.dispatch("ABORT_ALL"), p._destroy(), window.removeEventListener("resize", d), document.removeEventListener("visibilitychange", a), i.dispatch("DID_DESTROY")
                }, insertBefore: function (e) {
                    return L(p.element, e)
                }, insertAfter: function (e) {
                    return b(p.element, e)
                }, appendTo: function (e) {
                    return e.appendChild(p.element)
                }, replaceElement: function (e) {
                    L(p.element, e), e.parentNode.removeChild(e), r = e
                }, restoreElement: function () {
                    r && (b(r, p.element), p.element.parentNode.removeChild(p.element), r = null)
                }, isAttachedTo: function (e) {
                    return p.element === e || r === e
                }, element: {
                    get: function () {
                        return p.element
                    }
                }, status: {
                    get: function () {
                        return i.query("GET_STATUS")
                    }
                }
            });
            return i.dispatch("DID_INIT"), n(A)
        }, eo = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, n = {};
            return t(Se(), function (e, t) {
                n[e] = t[0]
            }), Jr(Object.assign({}, n, {}, e))
        }, to = function (e) {
            var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}, o = [];
            t(e.attributes, function (t) {
                o.push(e.attributes[t])
            });
            var i = o.filter(function (e) {
                return e.name
            }).reduce(function (t, n) {
                var o, i = r(e, n.name);
                return t[(o = n.name, Vr(o.replace(/^data-/, "")))] = i === n.name || i, t
            }, {});
            return function e(n, r) {
                t(r, function (r, o) {
                    t(n, function (e, t) {
                        var i = new RegExp(r);
                        if (i.test(e) && (delete n[e], !1 !== o)) if (U(o)) n[o] = t; else {
                            var a, s = o.group;
                            H(o) && !n[s] && (n[s] = {}), n[s][(a = e.replace(i, ""), a.charAt(0).toLowerCase() + a.slice(1))] = t
                        }
                    }), o.mapping && e(n[o.group], o.mapping)
                })
            }(i, n), i
        }, no = function () {
            return (arguments.length <= 0 ? void 0 : arguments[0]) instanceof HTMLElement ? function (e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}, n = {
                    "^class$": "className",
                    "^multiple$": "allowMultiple",
                    "^capture$": "captureMethod",
                    "^webkitdirectory$": "allowDirectoriesOnly",
                    "^server": {
                        group: "server",
                        mapping: {
                            "^process": {group: "process"},
                            "^revert": {group: "revert"},
                            "^fetch": {group: "fetch"},
                            "^restore": {group: "restore"},
                            "^load": {group: "load"}
                        }
                    },
                    "^type$": !1,
                    "^files$": !1
                };
                ye("SET_ATTRIBUTE_TO_OPTION_MAP", n);
                var r = Object.assign({}, t),
                    o = to("FIELDSET" === e.nodeName ? e.querySelector("input[type=file]") : e, n);
                Object.keys(o).forEach(function (e) {
                    H(o[e]) ? (H(r[e]) || (r[e] = {}), Object.assign(r[e], o[e])) : r[e] = o[e]
                }), r.files = (t.files || []).concat(Array.from(e.querySelectorAll("input:not([type=file])")).map(function (e) {
                    return {source: e.value, options: {type: e.dataset.type}}
                }));
                var i = eo(r);
                return e.files && Array.from(e.files).forEach(function (e) {
                    i.addFile(e)
                }), i.replaceElement(e), i
            }.apply(void 0, arguments) : eo.apply(void 0, arguments)
        }, ro = ["fire", "_read", "_write"], oo = function (e) {
            var t = {};
            return Ee(e, t, ro), t
        }, io = function (e, t) {
            return e.replace(/(?:{([a-zA-Z]+)})/g, function (e, n) {
                return t[n]
            })
        }, ao = function (e) {
            var t = new Blob(["(", e.toString(), ")()"], {type: "application/javascript"}), n = URL.createObjectURL(t),
                r = new Worker(n);
            return {
                transfer: function (e, t) {
                }, post: function (e, t, n) {
                    var o = oe();
                    r.onmessage = function (e) {
                        e.data.id === o && t(e.data.message)
                    }, r.postMessage({id: o, message: e}, n)
                }, terminate: function () {
                    r.terminate(), URL.revokeObjectURL(n)
                }
            }
        }, so = function (e) {
            return new Promise(function (t, n) {
                var r = new Image;
                r.onload = function () {
                    t(r)
                }, r.onerror = function (e) {
                    n(e)
                }, r.src = e
            })
        }, uo = function (e, t) {
            var n = e.slice(0, e.size, e.type);
            return n.lastModifiedDate = e.lastModifiedDate, n.name = t, n
        }, lo = function (e) {
            return uo(e, e.name)
        }, co = [], fo = function (e) {
            if (!co.includes(e)) {
                co.push(e);
                var n, r = e({
                    addFilter: De,
                    utils: {
                        Type: ge,
                        forin: t,
                        isString: U,
                        isFile: ht,
                        toNaturalFileSize: qt,
                        replaceInString: io,
                        getExtensionFromFilename: je,
                        getFilenameWithoutExtension: mt,
                        guesstimateMimeType: tr,
                        getFileFromBlob: We,
                        getFilenameFromURL: ke,
                        createRoute: A,
                        createWorker: ao,
                        createView: S,
                        createItemAPI: Te,
                        loadImage: so,
                        copyFile: lo,
                        renameFile: uo,
                        createBlob: ze,
                        applyFilterChain: Oe,
                        text: Nt,
                        getNumericAspectRatioFromString: be
                    },
                    views: {fileActionButton: Ft}
                });
                n = r.options, Object.assign(Ae, n)
            }
        },
        po = (Kt = c() && !("[object OperaMini]" === Object.prototype.toString.call(window.operamini)) && "visibilityState" in document && "Promise" in window && "slice" in Blob.prototype && "URL" in window && "createObjectURL" in window.URL && "performance" in window && ("supports" in (window.CSS || {}) || /MSIE|Trident/.test(window.navigator.userAgent)), function () {
            return Kt
        }), Eo = {apps: []}, _o = function () {
        };
    if (e.Status = {}, e.FileStatus = {}, e.FileOrigin = {}, e.OptionTypes = {}, e.create = _o, e.destroy = _o, e.parse = _o, e.find = _o, e.registerPlugin = _o, e.getOptions = _o, e.setOptions = _o, po()) {
        !function (e, t) {
            var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 60, r = "__framePainter";
            if (window[r]) return window[r].readers.push(e), void window[r].writers.push(t);
            window[r] = {readers: [e], writers: [t]};
            var o = window[r], i = 1e3 / n, a = null, s = null, u = null, l = null, c = function () {
                document.hidden ? (u = function () {
                    return window.setTimeout(function () {
                        return f(performance.now())
                    }, i)
                }, l = function () {
                    return window.clearTimeout(s)
                }) : (u = function () {
                    return window.requestAnimationFrame(f)
                }, l = function () {
                    return window.cancelAnimationFrame(s)
                })
            };
            document.addEventListener("visibilitychange", function () {
                l && l(), c(), f(performance.now())
            });
            var f = function e(t) {
                s = u(e), a || (a = t);
                var n = t - a;
                n <= i || (a = t - n % i, o.readers.forEach(function (e) {
                    return e()
                }), o.writers.forEach(function (e) {
                    return e(t)
                }))
            };
            c(), f(performance.now())
        }(function () {
            Eo.apps.forEach(function (e) {
                return e._read()
            })
        }, function (e) {
            Eo.apps.forEach(function (t) {
                return t._write(e)
            })
        });
        var To = function t() {
            document.dispatchEvent(new CustomEvent("FilePond:loaded", {
                detail: {
                    supported: po,
                    create: e.create,
                    destroy: e.destroy,
                    parse: e.parse,
                    find: e.find,
                    registerPlugin: e.registerPlugin,
                    setOptions: e.setOptions
                }
            })), document.removeEventListener("DOMContentLoaded", t)
        };
        "loading" !== document.readyState ? setTimeout(function () {
            return To()
        }, 0) : document.addEventListener("DOMContentLoaded", To);
        var Io = function () {
            return t(Se(), function (t, n) {
                e.OptionTypes[t] = n[1]
            })
        };
        e.Status = Object.assign({}, Me), e.FileOrigin = Object.assign({}, ve), e.FileStatus = Object.assign({}, Ie), e.OptionTypes = {}, Io(), e.create = function () {
            var t = no.apply(void 0, arguments);
            return t.on("destroy", e.destroy), Eo.apps.push(t), oo(t)
        }, e.destroy = function (e) {
            var t = Eo.apps.findIndex(function (t) {
                return t.isAttachedTo(e)
            });
            return t >= 0 && (Eo.apps.splice(t, 1)[0].restoreElement(), !0)
        }, e.parse = function (t) {
            return Array.from(t.querySelectorAll(".filepond")).filter(function (e) {
                return !Eo.apps.find(function (t) {
                    return t.isAttachedTo(e)
                })
            }).map(function (t) {
                return e.create(t)
            })
        }, e.find = function (e) {
            var t = Eo.apps.find(function (t) {
                return t.isAttachedTo(e)
            });
            return t ? oo(t) : null
        }, e.registerPlugin = function () {
            for (var e = arguments.length, t = new Array(e), n = 0; n < e; n++) t[n] = arguments[n];
            t.forEach(fo), Io()
        }, e.getOptions = function () {
            var e = {};
            return t(Se(), function (t, n) {
                e[t] = n[0]
            }), e
        }, e.setOptions = function (n) {
            return H(n) && (Eo.apps.forEach(function (e) {
                e.setOptions(n)
            }), function (e) {
                t(e, function (e, t) {
                    Ae[e] && (Ae[e][0] = z(t, Ae[e][0], Ae[e][1]))
                })
            }(n)), e.getOptions()
        }
    }
    e.supported = po, Object.defineProperty(e, "__esModule", {value: !0})
});


/*!
 * FilePondPluginImagePreview 4.6.11
 * Licensed under MIT, https://opensource.org/licenses/MIT/
 * Please visit https://pqina.nl/filepond/ for details.
 */

/* eslint-disable */

!function (e, t) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : (e = e || self).FilePondPluginImagePreview = t()
}(this, function () {
    "use strict";

    function e(e) {
        this.wrapped = e
    }

    function t(t) {
        var i, r;

        function a(i, r) {
            try {
                var o = t[i](r), c = o.value, s = c instanceof e;
                Promise.resolve(s ? c.wrapped : c).then(function (e) {
                    s ? a("next", e) : n(o.done ? "return" : "normal", e)
                }, function (e) {
                    a("throw", e)
                })
            } catch (e) {
                n("throw", e)
            }
        }

        function n(e, t) {
            switch (e) {
                case"return":
                    i.resolve({value: t, done: !0});
                    break;
                case"throw":
                    i.reject(t);
                    break;
                default:
                    i.resolve({value: t, done: !1})
            }
            (i = i.next) ? a(i.key, i.arg) : r = null
        }

        this._invoke = function (e, t) {
            return new Promise(function (n, o) {
                var c = {key: e, arg: t, resolve: n, reject: o, next: null};
                r ? r = r.next = c : (i = r = c, a(e, t))
            })
        }, "function" != typeof t.return && (this.return = void 0)
    }

    "function" == typeof Symbol && Symbol.asyncIterator && (t.prototype[Symbol.asyncIterator] = function () {
        return this
    }), t.prototype.next = function (e) {
        return this._invoke("next", e)
    }, t.prototype.throw = function (e) {
        return this._invoke("throw", e)
    }, t.prototype.return = function (e) {
        return this._invoke("return", e)
    };

    function i(e, t) {
        return r(e) || function (e, t) {
            var i = [], r = !0, a = !1, n = void 0;
            try {
                for (var o, c = e[Symbol.iterator](); !(r = (o = c.next()).done) && (i.push(o.value), !t || i.length !== t); r = !0) ;
            } catch (e) {
                a = !0, n = e
            } finally {
                try {
                    r || null == c.return || c.return()
                } finally {
                    if (a) throw n
                }
            }
            return i
        }(e, t) || a()
    }

    function r(e) {
        if (Array.isArray(e)) return e
    }

    function a() {
        throw new TypeError("Invalid attempt to destructure non-iterable instance")
    }

    var n = function (e, t) {
            return s(e.x * t, e.y * t)
        }, o = function (e, t) {
            return s(e.x + t.x, e.y + t.y)
        }, c = function (e, t, i) {
            var r = Math.cos(t), a = Math.sin(t), n = s(e.x - i.x, e.y - i.y);
            return s(i.x + r * n.x - a * n.y, i.y + a * n.x + r * n.y)
        }, s = function () {
            return {
                x: arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                y: arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0
            }
        }, h = function (e, t) {
            var i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1,
                r = arguments.length > 3 ? arguments[3] : void 0;
            return "string" == typeof e ? parseFloat(e) * i : "number" == typeof e ? e * (r ? t[r] : Math.min(t.width, t.height)) : void 0
        }, u = function (e) {
            return null != e
        }, l = function (e, t) {
            return Object.keys(t).forEach(function (i) {
                return e.setAttribute(i, t[i])
            })
        }, d = function (e, t) {
            var i = document.createElementNS("http://www.w3.org/2000/svg", e);
            return t && l(i, t), i
        }, f = {contain: "xMidYMid meet", cover: "xMidYMid slice"}, p = {left: "start", center: "middle", right: "end"},
        g = function (e) {
            return function (t) {
                return d(e, {id: t.id})
            }
        }, m = {
            image: function (e) {
                var t = d("image", {id: e.id, "stroke-linecap": "round", "stroke-linejoin": "round", opacity: "0"});
                return t.onload = function () {
                    t.setAttribute("opacity", e.opacity || 1)
                }, t.setAttributeNS("http://www.w3.org/1999/xlink", "xlink:href", e.src), t
            }, rect: g("rect"), ellipse: g("ellipse"), text: g("text"), path: g("path"), line: function (e) {
                var t = d("g", {id: e.id, "stroke-linecap": "round", "stroke-linejoin": "round"}), i = d("line");
                t.appendChild(i);
                var r = d("path");
                t.appendChild(r);
                var a = d("path");
                return t.appendChild(a), t
            }
        }, y = {
            rect: function (e) {
                return l(e, Object.assign({}, e.rect, e.styles))
            }, ellipse: function (e) {
                var t = e.rect.x + .5 * e.rect.width, i = e.rect.y + .5 * e.rect.height, r = .5 * e.rect.width,
                    a = .5 * e.rect.height;
                return l(e, Object.assign({cx: t, cy: i, rx: r, ry: a}, e.styles))
            }, image: function (e, t) {
                l(e, Object.assign({}, e.rect, e.styles, {preserveAspectRatio: f[t.fit] || "none"}))
            }, text: function (e, t, i, r) {
                var a = h(t.fontSize, i, r), n = t.fontFamily || "sans-serif", o = t.fontWeight || "normal",
                    c = p[t.textAlign] || "start";
                l(e, Object.assign({}, e.rect, e.styles, {
                    "stroke-width": 0,
                    "font-weight": o,
                    "font-size": a,
                    "font-family": n,
                    "text-anchor": c
                })), e.text !== t.text && (e.text = t.text, e.textContent = t.text.length ? t.text : " ")
            }, path: function (e, t, i, r) {
                var a;
                l(e, Object.assign({}, e.styles, {
                    fill: "none", d: (a = t.points.map(function (e) {
                        return {x: h(e.x, i, r, "width"), y: h(e.y, i, r, "height")}
                    }), a.map(function (e, t) {
                        return "".concat(0 === t ? "M" : "L", " ").concat(e.x, " ").concat(e.y)
                    }).join(" "))
                }))
            }, line: function (e, t, i, r) {
                l(e, Object.assign({}, e.rect, e.styles, {fill: "none"}));
                var a = e.childNodes[0], u = e.childNodes[1], d = e.childNodes[2], f = e.rect,
                    p = {x: e.rect.x + e.rect.width, y: e.rect.y + e.rect.height};
                if (l(a, {x1: f.x, y1: f.y, x2: p.x, y2: p.y}), t.lineDecoration) {
                    u.style.display = "none", d.style.display = "none";
                    var g = function (e) {
                        var t = Math.sqrt(e.x * e.x + e.y * e.y);
                        return 0 === t ? {x: 0, y: 0} : s(e.x / t, e.y / t)
                    }({x: p.x - f.x, y: p.y - f.y}), m = h(.05, i, r);
                    if (-1 !== t.lineDecoration.indexOf("arrow-begin")) {
                        var y = n(g, m), E = o(f, y), v = c(f, 2, E), w = c(f, -2, E);
                        l(u, {
                            style: "display:block;",
                            d: "M".concat(v.x, ",").concat(v.y, " L").concat(f.x, ",").concat(f.y, " L").concat(w.x, ",").concat(w.y)
                        })
                    }
                    if (-1 !== t.lineDecoration.indexOf("arrow-end")) {
                        var _ = n(g, -m), I = o(p, _), M = c(p, 2, I), x = c(p, -2, I);
                        l(d, {
                            style: "display:block;",
                            d: "M".concat(M.x, ",").concat(M.y, " L").concat(p.x, ",").concat(p.y, " L").concat(x.x, ",").concat(x.y)
                        })
                    }
                }
            }
        }, E = function (e, t, i, r, a) {
            "path" !== t && (e.rect = function (e, t) {
                var i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1,
                    r = h(e.x, t, i, "width") || h(e.left, t, i, "width"),
                    a = h(e.y, t, i, "height") || h(e.top, t, i, "height"), n = h(e.width, t, i, "width"),
                    o = h(e.height, t, i, "height"), c = h(e.right, t, i, "width"), s = h(e.bottom, t, i, "height");
                return u(a) || (a = u(o) && u(s) ? t.height - o - s : s), u(r) || (r = u(n) && u(c) ? t.width - n - c : c), u(n) || (n = u(r) && u(c) ? t.width - r - c : 0), u(o) || (o = u(a) && u(s) ? t.height - a - s : 0), {
                    x: r || 0,
                    y: a || 0,
                    width: n || 0,
                    height: o || 0
                }
            }(i, r, a)), e.styles = function (e, t, i) {
                var r = e.borderStyle || e.lineStyle || "solid", a = e.backgroundColor || e.fontColor || "transparent",
                    n = e.borderColor || e.lineColor || "transparent", o = h(e.borderWidth || e.lineWidth, t, i);
                return {
                    "stroke-linecap": e.lineCap || "round",
                    "stroke-linejoin": e.lineJoin || "round",
                    "stroke-width": o || 0,
                    "stroke-dasharray": "string" == typeof r ? "" : r.map(function (e) {
                        return h(e, t, i)
                    }).join(","),
                    stroke: n,
                    fill: a,
                    opacity: e.opacity || 1
                }
            }(i, r, a), y[t](e, i, r, a)
        }, v = ["x", "y", "left", "top", "right", "bottom", "width", "height"], w = function (e) {
            var t = i(e, 2), r = t[0], a = t[1], n = a.points ? {} : v.reduce(function (e, t) {
                var i;
                return e[t] = "string" == typeof (i = a[t]) && /%/.test(i) ? parseFloat(i) / 100 : i, e
            }, {});
            return [r, Object.assign({zIndex: 0}, a, n)]
        }, _ = function (e, t) {
            return e[1].zIndex > t[1].zIndex ? 1 : e[1].zIndex < t[1].zIndex ? -1 : 0
        }, I = function (e) {
            return e.utils.createView({
                name: "image-preview-markup",
                tag: "svg",
                ignoreRect: !0,
                mixins: {apis: ["width", "height", "crop", "markup", "resize", "dirty"]},
                write: function (e) {
                    var t = e.root, r = e.props;
                    if (r.dirty) {
                        var a = r.crop, n = r.resize, o = r.markup, c = r.width, s = r.height, h = a.width, u = a.height;
                        if (n) {
                            var l = n.size, d = l && l.width, f = l && l.height, p = n.mode, g = n.upscale;
                            d && !f && (f = d), f && !d && (d = f);
                            var y = h < d && u < f;
                            if (!y || y && g) {
                                var v, I = d / h, M = f / u;
                                if ("force" === p) h = d, u = f; else "cover" === p ? v = Math.max(I, M) : "contain" === p && (v = Math.min(I, M)), h *= v, u *= v
                            }
                        }
                        var x = {width: c, height: s};
                        t.element.setAttribute("width", x.width), t.element.setAttribute("height", x.height);
                        var T = Math.min(c / h, s / u);
                        t.element.innerHTML = "";
                        var A = t.query("GET_IMAGE_PREVIEW_MARKUP_FILTER");
                        o.filter(A).map(w).sort(_).forEach(function (e) {
                            var r = i(e, 2), a = r[0], n = r[1], o = function (e, t) {
                                return m[e](t)
                            }(a, n);
                            E(o, a, n, x, T), t.element.appendChild(o)
                        })
                    }
                }
            })
        }, M = function (e, t) {
            return {x: e, y: t}
        }, x = function (e, t) {
            return M(e.x - t.x, e.y - t.y)
        }, T = function (e, t) {
            return Math.sqrt(function (e, t) {
                return function (e, t) {
                    return e.x * t.x + e.y * t.y
                }(x(e, t), x(e, t))
            }(e, t))
        }, A = function (e, t) {
            var i = e, r = t, a = 1.5707963267948966 - t, n = Math.sin(1.5707963267948966), o = Math.sin(r),
                c = Math.sin(a), s = Math.cos(a), h = i / n;
            return M(s * (h * o), s * (h * c))
        }, R = function (e, t, i, r) {
            var a = r.x > .5 ? 1 - r.x : r.x, n = r.y > .5 ? 1 - r.y : r.y, o = 2 * a * e.width, c = 2 * n * e.height,
                s = function (e, t) {
                    var i = e.width, r = e.height, a = A(i, t), n = A(r, t),
                        o = M(e.x + Math.abs(a.x), e.y - Math.abs(a.y)),
                        c = M(e.x + e.width + Math.abs(n.y), e.y + Math.abs(n.x)),
                        s = M(e.x - Math.abs(n.y), e.y + e.height - Math.abs(n.x));
                    return {width: T(o, c), height: T(o, s)}
                }(t, i);
            return Math.max(s.width / o, s.height / c)
        }, P = function (e, t) {
            var i = e.width, r = i * t;
            return r > e.height && (i = (r = e.height) / t), {
                x: .5 * (e.width - i),
                y: .5 * (e.height - r),
                width: i,
                height: r
            }
        }, C = function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}, i = t.zoom, r = t.rotation,
                a = t.center, n = t.aspectRatio;
            n || (n = e.height / e.width);
            var o = function (e, t) {
                    var i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1, r = e.height / e.width, a = t,
                        n = 1, o = r;
                    o > a && (n = (o = a) / r);
                    var c = Math.max(1 / n, a / o), s = e.width / (i * c * n);
                    return {width: s, height: s * t}
                }(e, n, i), c = {x: .5 * o.width, y: .5 * o.height},
                s = {x: 0, y: 0, width: o.width, height: o.height, center: c}, h = void 0 === t.scaleToFit || t.scaleToFit,
                u = i * R(e, P(s, n), r, h ? a : {x: .5, y: .5});
            return {
                widthFloat: o.width / u,
                heightFloat: o.height / u,
                width: Math.round(o.width / u),
                height: Math.round(o.height / u)
            }
        }, k = {type: "spring", stiffness: .5, damping: .45, mass: 10}, D = function (e) {
            return e.utils.createView({
                name: "image-clip",
                tag: "div",
                ignoreRect: !0,
                mixins: {
                    apis: ["crop", "markup", "resize", "width", "height", "dirty", "background"],
                    styles: ["width", "height", "opacity"],
                    animations: {opacity: {type: "tween", duration: 250}}
                },
                didWriteView: function (e) {
                    var t = e.root, i = e.props;
                    i.background && (t.element.style.backgroundColor = i.background)
                },
                create: function (t) {
                    var i = t.root, r = t.props;
                    i.ref.image = i.appendChildView(i.createChildView(function (e) {
                        return e.utils.createView({
                            name: "image-canvas-wrapper",
                            tag: "div",
                            ignoreRect: !0,
                            mixins: {
                                apis: ["crop", "width", "height"],
                                styles: ["originX", "originY", "translateX", "translateY", "scaleX", "scaleY", "rotateZ"],
                                animations: {
                                    originX: k,
                                    originY: k,
                                    scaleX: k,
                                    scaleY: k,
                                    translateX: k,
                                    translateY: k,
                                    rotateZ: k
                                }
                            },
                            create: function (t) {
                                var i = t.root, r = t.props;
                                r.width = r.image.width, r.height = r.image.height, i.ref.bitmap = i.appendChildView(i.createChildView(function (e) {
                                    return e.utils.createView({
                                        name: "image-bitmap",
                                        ignoreRect: !0,
                                        mixins: {styles: ["scaleX", "scaleY"]},
                                        create: function (e) {
                                            var t = e.root, i = e.props;
                                            t.appendChild(i.image)
                                        }
                                    })
                                }(e), {image: r.image}))
                            },
                            write: function (e) {
                                var t = e.root, i = e.props.crop.flip, r = t.ref.bitmap;
                                r.scaleX = i.horizontal ? -1 : 1, r.scaleY = i.vertical ? -1 : 1
                            }
                        })
                    }(e), Object.assign({}, r))), i.ref.createMarkup = function () {
                        i.ref.markup || (i.ref.markup = i.appendChildView(i.createChildView(I(e), Object.assign({}, r))))
                    }, i.ref.destroyMarkup = function () {
                        i.ref.markup && (i.removeChildView(i.ref.markup), i.ref.markup = null)
                    };
                    var a = i.query("GET_IMAGE_PREVIEW_TRANSPARENCY_INDICATOR");
                    null !== a && (i.element.dataset.transparencyIndicator = "grid" === a ? a : "color")
                },
                write: function (e) {
                    var t = e.root, i = e.props, r = e.shouldOptimize, a = i.crop, n = i.markup, o = i.resize, c = i.dirty,
                        s = i.width, h = i.height;
                    t.ref.image.crop = a;
                    var u = {x: 0, y: 0, width: s, height: h, center: {x: .5 * s, y: .5 * h}},
                        l = {width: t.ref.image.width, height: t.ref.image.height},
                        d = {x: a.center.x * l.width, y: a.center.y * l.height},
                        f = {x: u.center.x - l.width * a.center.x, y: u.center.y - l.height * a.center.y},
                        p = 2 * Math.PI + a.rotation % (2 * Math.PI), g = a.aspectRatio || l.height / l.width,
                        m = void 0 === a.scaleToFit || a.scaleToFit, y = R(l, P(u, g), p, m ? a.center : {x: .5, y: .5}),
                        E = a.zoom * y;
                    n && n.length ? (t.ref.createMarkup(), t.ref.markup.width = s, t.ref.markup.height = h, t.ref.markup.resize = o, t.ref.markup.dirty = c, t.ref.markup.markup = n, t.ref.markup.crop = C(l, a)) : t.ref.markup && t.ref.destroyMarkup();
                    var v = t.ref.image;
                    if (r) return v.originX = null, v.originY = null, v.translateX = null, v.translateY = null, v.rotateZ = null, v.scaleX = null, void (v.scaleY = null);
                    v.originX = d.x, v.originY = d.y, v.translateX = f.x, v.translateY = f.y, v.rotateZ = p, v.scaleX = E, v.scaleY = E
                }
            })
        }, G = 0, V = function () {
            self.onmessage = function (e) {
                createImageBitmap(e.data.message.file).then(function (t) {
                    self.postMessage({id: e.data.id, message: t}, [t])
                })
            }
        }, O = function () {
            self.onmessage = function (e) {
                for (var t = e.data.message.imageData, i = e.data.message.colorMatrix, r = t.data, a = r.length, n = i[0], o = i[1], c = i[2], s = i[3], h = i[4], u = i[5], l = i[6], d = i[7], f = i[8], p = i[9], g = i[10], m = i[11], y = i[12], E = i[13], v = i[14], w = i[15], _ = i[16], I = i[17], M = i[18], x = i[19], T = 0, A = 0, R = 0, P = 0, C = 0; T < a; T += 4) A = r[T] / 255, R = r[T + 1] / 255, P = r[T + 2] / 255, C = r[T + 3] / 255, r[T] = Math.max(0, Math.min(255 * (A * n + R * o + P * c + C * s + h), 255)), r[T + 1] = Math.max(0, Math.min(255 * (A * u + R * l + P * d + C * f + p), 255)), r[T + 2] = Math.max(0, Math.min(255 * (A * g + R * m + P * y + C * E + v), 255)), r[T + 3] = Math.max(0, Math.min(255 * (A * w + R * _ + P * I + C * M + x), 255));
                self.postMessage({id: e.data.id, message: t}, [t.data.buffer])
            }
        }, b = {
            1: function () {
                return [1, 0, 0, 1, 0, 0]
            }, 2: function (e) {
                return [-1, 0, 0, 1, e, 0]
            }, 3: function (e, t) {
                return [-1, 0, 0, -1, e, t]
            }, 4: function (e, t) {
                return [1, 0, 0, -1, 0, t]
            }, 5: function () {
                return [0, 1, 1, 0, 0, 0]
            }, 6: function (e, t) {
                return [0, 1, -1, 0, t, 0]
            }, 7: function (e, t) {
                return [0, -1, -1, 0, t, e]
            }, 8: function (e) {
                return [0, -1, 1, 0, 0, e]
            }
        }, S = function (e, t, i, r) {
            t = Math.round(t), i = Math.round(i);
            var a = document.createElement("canvas");
            a.width = t, a.height = i;
            var n = a.getContext("2d");
            if (r >= 5 && r <= 8) {
                var o = [i, t];
                t = o[0], i = o[1]
            }
            return function (e, t, i, r) {
                -1 !== r && e.transform.apply(e, b[r](t, i))
            }(n, t, i, r), n.drawImage(e, 0, 0, t, i), a
        }, L = function (e) {
            return /^image/.test(e.type) && !/svg/.test(e.type)
        }, N = function (e) {
            var t = Math.min(10 / e.width, 10 / e.height), i = document.createElement("canvas"), r = i.getContext("2d"),
                a = i.width = Math.ceil(e.width * t), n = i.height = Math.ceil(e.height * t);
            r.drawImage(e, 0, 0, a, n);
            var o = null;
            try {
                o = r.getImageData(0, 0, a, n).data
            } catch (e) {
                return null
            }
            for (var c = o.length, s = 0, h = 0, u = 0, l = 0; l < c; l += 4) s += o[l] * o[l], h += o[l + 1] * o[l + 1], u += o[l + 2] * o[l + 2];
            return {r: s = W(s, c), g: h = W(h, c), b: u = W(u, c)}
        }, W = function (e, t) {
            return Math.floor(Math.sqrt(e / (t / 4)))
        }, z = function (e) {
            var t = e.utils.createView({
                name: "image-preview-overlay", tag: "div", ignoreRect: !0, create: function (e) {
                    var t = e.root, i = e.props,
                        r = '<svg width="500" height="200" viewBox="0 0 500 200" preserveAspectRatio="none">\n    <defs>\n        <radialGradient id="gradient-__UID__" cx=".5" cy="1.25" r="1.15">\n            <stop offset=\'50%\' stop-color=\'#000000\'/>\n            <stop offset=\'56%\' stop-color=\'#0a0a0a\'/>\n            <stop offset=\'63%\' stop-color=\'#262626\'/>\n            <stop offset=\'69%\' stop-color=\'#4f4f4f\'/>\n            <stop offset=\'75%\' stop-color=\'#808080\'/>\n            <stop offset=\'81%\' stop-color=\'#b1b1b1\'/>\n            <stop offset=\'88%\' stop-color=\'#dadada\'/>\n            <stop offset=\'94%\' stop-color=\'#f6f6f6\'/>\n            <stop offset=\'100%\' stop-color=\'#ffffff\'/>\n        </radialGradient>\n        <mask id="mask-__UID__">\n            <rect x="0" y="0" width="500" height="200" fill="url(#gradient-__UID__)"></rect>\n        </mask>\n    </defs>\n    <rect x="0" width="500" height="200" fill="currentColor" mask="url(#mask-__UID__)"></rect>\n</svg>';
                    if (document.querySelector("base")) {
                        var a = new URL(window.location.href.replace(window.location.hash, "")).href;
                        r = r.replace(/url\(\#/g, "url(" + a + "#")
                    }
                    G++, t.element.classList.add("filepond--image-preview-overlay-".concat(i.status)), t.element.innerHTML = r.replace(/__UID__/g, G)
                }, mixins: {styles: ["opacity"], animations: {opacity: {type: "spring", mass: 25}}}
            }), i = function (e) {
                return e.utils.createView({
                    name: "image-preview",
                    tag: "div",
                    ignoreRect: !0,
                    mixins: {
                        apis: ["image", "crop", "markup", "resize", "dirty", "background"],
                        styles: ["translateY", "scaleX", "scaleY", "opacity"],
                        animations: {scaleX: k, scaleY: k, translateY: k, opacity: {type: "tween", duration: 400}}
                    },
                    create: function (t) {
                        var i = t.root, r = t.props;
                        i.ref.clip = i.appendChildView(i.createChildView(D(e), {
                            id: r.id,
                            image: r.image,
                            crop: r.crop,
                            markup: r.markup,
                            resize: r.resize,
                            dirty: r.dirty,
                            background: r.background
                        }))
                    },
                    write: function (e) {
                        var t = e.root, i = e.props, r = e.shouldOptimize, a = t.ref.clip, n = i.image, o = i.crop,
                            c = i.markup, s = i.resize, h = i.dirty;
                        if (a.crop = o, a.markup = c, a.resize = s, a.dirty = h, a.opacity = r ? 0 : 1, !r && !t.rect.element.hidden) {
                            var u = n.height / n.width, l = o.aspectRatio || u, d = t.rect.inner.width,
                                f = t.rect.inner.height, p = t.query("GET_IMAGE_PREVIEW_HEIGHT"),
                                g = t.query("GET_IMAGE_PREVIEW_MIN_HEIGHT"), m = t.query("GET_IMAGE_PREVIEW_MAX_HEIGHT"),
                                y = t.query("GET_PANEL_ASPECT_RATIO"), E = t.query("GET_ALLOW_MULTIPLE");
                            y && !E && (p = d * y, l = y);
                            var v = null !== p ? p : Math.max(g, Math.min(d * l, m)), w = v / l;
                            w > d && (v = (w = d) * l), v > f && (v = f, w = f / l), a.width = w, a.height = v
                        }
                    }
                })
            }(e), r = e.utils.createWorker, a = function (e, t, i) {
                return new Promise(function (a) {
                    e.ref.imageData || (e.ref.imageData = i.getContext("2d").getImageData(0, 0, i.width, i.height));
                    var n = function (e) {
                        var t;
                        try {
                            t = new ImageData(e.width, e.height)
                        } catch (i) {
                            t = document.createElement("canvas").getContext("2d").createImageData(e.width, e.height)
                        }
                        return t.data.set(new Uint8ClampedArray(e.data)), t
                    }(e.ref.imageData);
                    if (!t || 20 !== t.length) return i.getContext("2d").putImageData(n, 0, 0), a();
                    var o = r(O);
                    o.post({imageData: n, colorMatrix: t}, function (e) {
                        i.getContext("2d").putImageData(e, 0, 0), o.terminate(), a()
                    }, [n.data.buffer])
                })
            }, n = function (e) {
                var t = e.root, r = e.props, a = e.image, n = r.id, o = t.query("GET_ITEM", {id: n});
                if (o) {
                    var c, s, h = o.getMetadata("crop") || {
                        center: {x: .5, y: .5},
                        flip: {horizontal: !1, vertical: !1},
                        zoom: 1,
                        rotation: 0,
                        aspectRatio: null
                    }, u = t.query("GET_IMAGE_TRANSFORM_CANVAS_BACKGROUND_COLOR"), l = !1;
                    t.query("GET_IMAGE_PREVIEW_MARKUP_SHOW") && (c = o.getMetadata("markup") || [], s = o.getMetadata("resize"), l = !0);
                    var d = t.appendChildView(t.createChildView(i, {
                        id: n,
                        image: a,
                        crop: h,
                        resize: s,
                        markup: c,
                        dirty: l,
                        background: u,
                        opacity: 0,
                        scaleX: 1.15,
                        scaleY: 1.15,
                        translateY: 15
                    }), t.childViews.length);
                    t.ref.images.push(d), d.opacity = 1, d.scaleX = 1, d.scaleY = 1, d.translateY = 0, setTimeout(function () {
                        t.dispatch("DID_IMAGE_PREVIEW_SHOW", {id: n})
                    }, 250)
                }
            }, o = function (e) {
                var t = e.root;
                t.ref.overlayShadow.opacity = 1, t.ref.overlayError.opacity = 0, t.ref.overlaySuccess.opacity = 0
            }, c = function (e) {
                var t = e.root;
                t.ref.overlayShadow.opacity = .25, t.ref.overlayError.opacity = 1
            };
            return e.utils.createView({
                name: "image-preview-wrapper", create: function (e) {
                    var i = e.root;
                    i.ref.images = [], i.ref.imageData = null, i.ref.imageViewBin = [], i.ref.overlayShadow = i.appendChildView(i.createChildView(t, {
                        opacity: 0,
                        status: "idle"
                    })), i.ref.overlaySuccess = i.appendChildView(i.createChildView(t, {
                        opacity: 0,
                        status: "success"
                    })), i.ref.overlayError = i.appendChildView(i.createChildView(t, {opacity: 0, status: "failure"}))
                }, styles: ["height"], apis: ["height"], destroy: function (e) {
                    e.root.ref.images.forEach(function (e) {
                        e.image.width = 1, e.image.height = 1
                    })
                }, didWriteView: function (e) {
                    e.root.ref.images.forEach(function (e) {
                        e.dirty = !1
                    })
                }, write: e.utils.createRoute({
                    DID_IMAGE_PREVIEW_DRAW: function (e) {
                        var t = e.root, i = t.ref.images[t.ref.images.length - 1];
                        i.translateY = 0, i.scaleX = 1, i.scaleY = 1, i.opacity = 1
                    },
                    DID_IMAGE_PREVIEW_CONTAINER_CREATE: function (e) {
                        var t = e.root, i = e.props.id, r = t.query("GET_ITEM", i);
                        if (r) {
                            var a, n, o, c = URL.createObjectURL(r.file);
                            a = c, n = function (e, r) {
                                t.dispatch("DID_IMAGE_PREVIEW_CALCULATE_SIZE", {id: i, width: e, height: r})
                            }, (o = new Image).onload = function () {
                                var e = o.naturalWidth, t = o.naturalHeight;
                                o = null, n(e, t)
                            }, o.src = a
                        }
                    },
                    DID_FINISH_CALCULATE_PREVIEWSIZE: function (e) {
                        var t = e.root, i = e.props, o = i.id, c = t.query("GET_ITEM", o);
                        if (c) {
                            var s, h, u = URL.createObjectURL(c.file), l = function () {
                                var e;
                                (e = u, new Promise(function (t, i) {
                                    var r = new Image;
                                    r.crossOrigin = "Anonymous", r.onload = function () {
                                        t(r)
                                    }, r.onerror = function (e) {
                                        i(e)
                                    }, r.src = e
                                })).then(d)
                            }, d = function (e) {
                                URL.revokeObjectURL(u);
                                var r = (c.getMetadata("exif") || {}).orientation || -1, o = e.width, s = e.height;
                                if (o && s) {
                                    if (r >= 5 && r <= 8) {
                                        var h = [s, o];
                                        o = h[0], s = h[1]
                                    }
                                    var l = Math.max(1, .75 * window.devicePixelRatio),
                                        d = t.query("GET_IMAGE_PREVIEW_ZOOM_FACTOR") * l, f = s / o,
                                        p = t.rect.element.width, g = t.rect.element.height, m = p, y = m * f;
                                    f > 1 ? y = (m = Math.min(o, p * d)) * f : m = (y = Math.min(s, g * d)) / f;
                                    var E = S(e, m, y, r), v = function () {
                                        var r = t.query("GET_IMAGE_PREVIEW_CALCULATE_AVERAGE_IMAGE_COLOR") ? N(data) : null;
                                        c.setMetadata("color", r, !0), "close" in e && e.close(), t.ref.overlayShadow.opacity = 1, n({
                                            root: t,
                                            props: i,
                                            image: E
                                        })
                                    }, w = c.getMetadata("filter");
                                    w ? a(t, w, E).then(v) : v()
                                }
                            };
                            if (s = c.file, !(((h = window.navigator.userAgent.match(/Firefox\/([0-9]+)\./)) ? parseInt(h[1]) : null) <= 58) && "createImageBitmap" in window && L(s)) {
                                var f = r(V);
                                f.post({file: c.file}, function (e) {
                                    f.terminate(), e ? d(e) : l()
                                })
                            } else l()
                        }
                    },
                    DID_UPDATE_ITEM_METADATA: function (e) {
                        var t = e.root, i = e.props, r = e.action;
                        if (/crop|filter|markup|resize/.test(r.change.key) && t.ref.images.length) {
                            var o = t.query("GET_ITEM", {id: i.id});
                            if (o) if (/filter/.test(r.change.key)) {
                                var c = t.ref.images[t.ref.images.length - 1];
                                a(t, r.change.value, c.image)
                            } else {
                                if (/crop|markup|resize/.test(r.change.key)) {
                                    var s = o.getMetadata("crop"), h = t.ref.images[t.ref.images.length - 1];
                                    if (s && s.aspectRatio && h.crop && h.crop.aspectRatio && Math.abs(s.aspectRatio - h.crop.aspectRatio) > 1e-5) {
                                        var u = function (e) {
                                            var t = e.root, i = t.ref.images.shift();
                                            return i.opacity = 0, i.translateY = -15, t.ref.imageViewBin.push(i), i
                                        }({root: t});
                                        n({
                                            root: t,
                                            props: i,
                                            image: (l = u.image, (d = d || document.createElement("canvas")).width = l.width, d.height = l.height, d.getContext("2d").drawImage(l, 0, 0), d)
                                        })
                                    } else !function (e) {
                                        var t = e.root, i = e.props, r = t.query("GET_ITEM", {id: i.id});
                                        if (r) {
                                            var a = t.ref.images[t.ref.images.length - 1];
                                            a.crop = r.getMetadata("crop"), a.background = t.query("GET_IMAGE_TRANSFORM_CANVAS_BACKGROUND_COLOR"), t.query("GET_IMAGE_PREVIEW_MARKUP_SHOW") && (a.dirty = !0, a.resize = r.getMetadata("resize"), a.markup = r.getMetadata("markup"))
                                        }
                                    }({root: t, props: i})
                                }
                                var l, d
                            }
                        }
                    },
                    DID_THROW_ITEM_LOAD_ERROR: c,
                    DID_THROW_ITEM_PROCESSING_ERROR: c,
                    DID_THROW_ITEM_INVALID: c,
                    DID_COMPLETE_ITEM_PROCESSING: function (e) {
                        var t = e.root;
                        t.ref.overlayShadow.opacity = .25, t.ref.overlaySuccess.opacity = 1
                    },
                    DID_START_ITEM_PROCESSING: o,
                    DID_REVERT_ITEM_PROCESSING: o
                }, function (e) {
                    var t = e.root, i = t.ref.imageViewBin.filter(function (e) {
                        return 0 === e.opacity
                    });
                    t.ref.imageViewBin = t.ref.imageViewBin.filter(function (e) {
                        return e.opacity > 0
                    }), i.forEach(function (e) {
                        return function (e, t) {
                            e.removeChildView(t), t.image.width = 1, t.image.height = 1, t._destroy()
                        }(t, e)
                    }), i.length = 0
                })
            })
        }, H = function (e) {
            var t = e.addFilter, i = e.utils, r = i.Type, a = i.createRoute, n = i.isFile, o = z(e);
            return t("CREATE_VIEW", function (e) {
                var t = e.is, i = e.view, r = e.query;
                if (t("file") && r("GET_ALLOW_IMAGE_PREVIEW")) {
                    var c = function (e) {
                        e.root.ref.shouldRescale = !0
                    };
                    i.registerWriter(a({
                        DID_RESIZE_ROOT: c, DID_STOP_RESIZE: c, DID_LOAD_ITEM: function (e) {
                            var t = e.root, a = e.props.id, c = r("GET_ITEM", a);
                            if (c && n(c.file) && !c.archived) {
                                var s = c.file;
                                if (function (e) {
                                    return /^image/.test(e.type)
                                }(s) && r("GET_IMAGE_PREVIEW_FILTER_ITEM")(c)) {
                                    var h = "createImageBitmap" in (window || {}), u = r("GET_IMAGE_PREVIEW_MAX_FILE_SIZE");
                                    if (!(!h && u && s.size > u)) {
                                        t.ref.imagePreview = i.appendChildView(i.createChildView(o, {id: a}));
                                        var l = t.query("GET_IMAGE_PREVIEW_HEIGHT");
                                        l && t.dispatch("DID_UPDATE_PANEL_HEIGHT", {id: c.id, height: l});
                                        var d = !h && s.size > r("GET_IMAGE_PREVIEW_MAX_INSTANT_PREVIEW_FILE_SIZE");
                                        t.dispatch("DID_IMAGE_PREVIEW_CONTAINER_CREATE", {id: a}, d)
                                    }
                                }
                            }
                        }, DID_IMAGE_PREVIEW_CALCULATE_SIZE: function (e) {
                            var t = e.root, i = e.action;
                            t.ref.imageWidth = i.width, t.ref.imageHeight = i.height, t.ref.shouldRescale = !0, t.ref.shouldDrawPreview = !0, t.dispatch("KICK")
                        }, DID_UPDATE_ITEM_METADATA: function (e) {
                            var t = e.root;
                            "crop" === e.action.change.key && (t.ref.shouldRescale = !0)
                        }
                    }, function (e) {
                        var t = e.root, i = e.props;
                        t.ref.imagePreview && (t.rect.element.hidden || (t.ref.shouldRescale && (!function (e, t) {
                            if (e.ref.imagePreview) {
                                var i = t.id, r = e.query("GET_ITEM", {id: i});
                                if (r) {
                                    var a = e.query("GET_PANEL_ASPECT_RATIO"), n = e.query("GET_ITEM_PANEL_ASPECT_RATIO"),
                                        o = e.query("GET_IMAGE_PREVIEW_HEIGHT");
                                    if (!(a || n || o)) {
                                        var c = e.ref, s = c.imageWidth, h = c.imageHeight;
                                        if (s && h) {
                                            var u = e.query("GET_IMAGE_PREVIEW_MIN_HEIGHT"),
                                                l = e.query("GET_IMAGE_PREVIEW_MAX_HEIGHT"),
                                                d = (r.getMetadata("exif") || {}).orientation || -1;
                                            if (d >= 5 && d <= 8) {
                                                var f = [h, s];
                                                s = f[0], h = f[1]
                                            }
                                            if (!L(r.file) || e.query("GET_IMAGE_PREVIEW_UPSCALE")) {
                                                var p = 2048 / s;
                                                s *= p, h *= p
                                            }
                                            var g = h / s, m = (r.getMetadata("crop") || {}).aspectRatio || g,
                                                y = Math.max(u, Math.min(h, l)), E = e.rect.element.width,
                                                v = Math.min(E * m, y);
                                            e.dispatch("DID_UPDATE_PANEL_HEIGHT", {id: r.id, height: v})
                                        }
                                    }
                                }
                            }
                        }(t, i), t.ref.shouldRescale = !1), t.ref.shouldDrawPreview && (requestAnimationFrame(function () {
                            requestAnimationFrame(function () {
                                t.dispatch("DID_FINISH_CALCULATE_PREVIEWSIZE", {id: i.id})
                            })
                        }), t.ref.shouldDrawPreview = !1)))
                    }))
                }
            }), {
                options: {
                    allowImagePreview: [!0, r.BOOLEAN],
                    imagePreviewFilterItem: [function () {
                        return !0
                    }, r.FUNCTION],
                    imagePreviewHeight: [null, r.INT],
                    imagePreviewMinHeight: [44, r.INT],
                    imagePreviewMaxHeight: [256, r.INT],
                    imagePreviewMaxFileSize: [null, r.INT],
                    imagePreviewZoomFactor: [2, r.INT],
                    imagePreviewUpscale: [!1, r.BOOLEAN],
                    imagePreviewMaxInstantPreviewFileSize: [1e6, r.INT],
                    imagePreviewTransparencyIndicator: [null, r.STRING],
                    imagePreviewCalculateAverageImageColor: [!1, r.BOOLEAN],
                    imagePreviewMarkupShow: [!0, r.BOOLEAN],
                    imagePreviewMarkupFilter: [function () {
                        return !0
                    }, r.FUNCTION]
                }
            }
        };
    return "undefined" != typeof window && void 0 !== window.document && document.dispatchEvent(new CustomEvent("FilePond:pluginloaded", {detail: H})), H
});


(function ($, FilePond) {
    'use strict';

    // No jQuery No Go
    if (!$ || !FilePond) {
        return;
    }

    // Test if FilePond is supported
    if (!FilePond.supported()) {
        // add stub
        $.fn.filepond = function () {
        };
        return;
    }

    // Helpers
    function argsToArray(args) {
        return Array.prototype.slice.call(args);
    }

    function isFactory(args) {
        return !args.length || typeof args[0] === 'object';
    }

    function isGetter(obj, key) {
        var descriptor = Object.getOwnPropertyDescriptor(obj, key);
        return descriptor ? typeof descriptor.get !== 'undefined' : false;
    }

    function isSetter(obj, key) {
        var descriptor = Object.getOwnPropertyDescriptor(obj, key);
        return descriptor ? typeof descriptor.set !== 'undefined' : false;
    }

    function isMethod(obj, key) {
        return typeof obj[key] === 'function';
    }

    // Setup plugin
    $.fn.filepond = function () {

        // get arguments as array
        var args = argsToArray(arguments);

        // method results array
        var results = [];

        // Execute for every item in the list
        var items = this.each(function () {

            // test if is create call
            if (isFactory(args)) {
                FilePond.create(this, args[0])
                return;
            }

            // get a reference to the pond instance based on the element
            var pond = FilePond.find(this);

            // if no pond found, exit here
            if (!pond) {
                return;
            }

            // get property name or method name
            var key = args[0];

            // get params to pass
            var params = args.concat().slice(1);

            // run method
            if (isMethod(pond, key)) {
                results.push(pond[key].apply(pond, params));
                return;
            }

            // set setter
            if (isSetter(pond, key) && params.length) {
                pond[key] = params[0];
                return;
            }

            // get getter
            if (isGetter(pond, key)) {
                results.push(pond[key]);
                return;
            }

            console.warn('$().filepond("' + key + '") is an unknown property or method.');
        });

        // returns a jQuery object if no results returned
        return results.length ? this.length === 1 ? results[0] : results : items;
    };

    // Static API
    Object.keys(FilePond).forEach(function (key) {
        $.fn.filepond[key] = FilePond[key];
    });

    // Redirect setDefaults to setOptions
    $.fn.filepond.setDefaults = FilePond.setOptions;

}(jQuery, FilePond));
