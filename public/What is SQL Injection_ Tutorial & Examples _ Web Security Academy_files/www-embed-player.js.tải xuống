(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
'use strict';var l;function aa(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}
var ba="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(a==Array.prototype||a==Object.prototype)return a;a[b]=c.value;return a};
function da(a){a=["object"==typeof globalThis&&globalThis,a,"object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global];for(var b=0;b<a.length;++b){var c=a[b];if(c&&c.Math==Math)return c}throw Error("Cannot find global object");}
var ea=da(this);function n(a,b){if(b)a:{var c=ea;a=a.split(".");for(var d=0;d<a.length-1;d++){var e=a[d];if(!(e in c))break a;c=c[e]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&null!=b&&ba(c,a,{configurable:!0,writable:!0,value:b})}}
n("Symbol",function(a){function b(f){if(this instanceof b)throw new TypeError("Symbol is not a constructor");return new c(d+(f||"")+"_"+e++,f)}
function c(f,g){this.i=f;ba(this,"description",{configurable:!0,writable:!0,value:g})}
if(a)return a;c.prototype.toString=function(){return this.i};
var d="jscomp_symbol_"+(1E9*Math.random()>>>0)+"_",e=0;return b});
n("Symbol.iterator",function(a){if(a)return a;a=Symbol("Symbol.iterator");for(var b="Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array".split(" "),c=0;c<b.length;c++){var d=ea[b[c]];"function"===typeof d&&"function"!=typeof d.prototype[a]&&ba(d.prototype,a,{configurable:!0,writable:!0,value:function(){return ha(aa(this))}})}return a});
function ha(a){a={next:a};a[Symbol.iterator]=function(){return this};
return a}
function p(a){var b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];return b?b.call(a):{next:aa(a)}}
function ia(a){if(!(a instanceof Array)){a=p(a);for(var b,c=[];!(b=a.next()).done;)c.push(b.value);a=c}return a}
function ja(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
var ka="function"==typeof Object.assign?Object.assign:function(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(d)for(var e in d)ja(d,e)&&(a[e]=d[e])}return a};
n("Object.assign",function(a){return a||ka});
var na="function"==typeof Object.create?Object.create:function(a){function b(){}
b.prototype=a;return new b},pa=function(){function a(){function c(){}
new c;Reflect.construct(c,[],function(){});
return new c instanceof c}
if("undefined"!=typeof Reflect&&Reflect.construct){if(a())return Reflect.construct;var b=Reflect.construct;return function(c,d,e){c=b(c,d);e&&Reflect.setPrototypeOf(c,e.prototype);return c}}return function(c,d,e){void 0===e&&(e=c);
e=na(e.prototype||Object.prototype);return Function.prototype.apply.call(c,e,d)||e}}(),qa;
if("function"==typeof Object.setPrototypeOf)qa=Object.setPrototypeOf;else{var ra;a:{var sa={a:!0},ta={};try{ta.__proto__=sa;ra=ta.a;break a}catch(a){}ra=!1}qa=ra?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var ua=qa;
function t(a,b){a.prototype=na(b.prototype);a.prototype.constructor=a;if(ua)ua(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.X=b.prototype}
function va(){this.C=!1;this.m=null;this.j=void 0;this.i=1;this.o=this.s=0;this.v=this.l=null}
function wa(a){if(a.C)throw new TypeError("Generator is already running");a.C=!0}
va.prototype.N=function(a){this.j=a};
function xa(a,b){a.l={Xb:b,fc:!0};a.i=a.s||a.o}
va.prototype.return=function(a){this.l={return:a};this.i=this.o};
function v(a,b,c){a.i=c;return{value:b}}
va.prototype.u=function(a){this.i=a};
function ya(a,b,c){a.s=b;void 0!=c&&(a.o=c)}
function za(a,b){a.i=b;a.s=0}
function Aa(a){a.s=0;var b=a.l.Xb;a.l=null;return b}
function Ba(a){a.v=[a.l];a.s=0;a.o=0}
function Ca(a){var b=a.v.splice(0)[0];(b=a.l=a.l||b)?b.fc?a.i=a.s||a.o:void 0!=b.u&&a.o<b.u?(a.i=b.u,a.l=null):a.i=a.o:a.i=0}
function Da(a){this.i=new va;this.j=a}
function Ea(a,b){wa(a.i);var c=a.i.m;if(c)return Fa(a,"return"in c?c["return"]:function(d){return{value:d,done:!0}},b,a.i.return);
a.i.return(b);return Ga(a)}
function Fa(a,b,c,d){try{var e=b.call(a.i.m,c);if(!(e instanceof Object))throw new TypeError("Iterator result "+e+" is not an object");if(!e.done)return a.i.C=!1,e;var f=e.value}catch(g){return a.i.m=null,xa(a.i,g),Ga(a)}a.i.m=null;d.call(a.i,f);return Ga(a)}
function Ga(a){for(;a.i.i;)try{var b=a.j(a.i);if(b)return a.i.C=!1,{value:b.value,done:!1}}catch(c){a.i.j=void 0,xa(a.i,c)}a.i.C=!1;if(a.i.l){b=a.i.l;a.i.l=null;if(b.fc)throw b.Xb;return{value:b.return,done:!0}}return{value:void 0,done:!0}}
function Ha(a){this.next=function(b){wa(a.i);a.i.m?b=Fa(a,a.i.m.next,b,a.i.N):(a.i.N(b),b=Ga(a));return b};
this.throw=function(b){wa(a.i);a.i.m?b=Fa(a,a.i.m["throw"],b,a.i.N):(xa(a.i,b),b=Ga(a));return b};
this.return=function(b){return Ea(a,b)};
this[Symbol.iterator]=function(){return this}}
function Ia(a){function b(d){return a.next(d)}
function c(d){return a.throw(d)}
return new Promise(function(d,e){function f(g){g.done?d(g.value):Promise.resolve(g.value).then(b,c).then(f,e)}
f(a.next())})}
function x(a){return Ia(new Ha(new Da(a)))}
function Ja(){for(var a=Number(this),b=[],c=a;c<arguments.length;c++)b[c-a]=arguments[c];return b}
n("Reflect",function(a){return a?a:{}});
n("Reflect.construct",function(){return pa});
n("Reflect.setPrototypeOf",function(a){return a?a:ua?function(b,c){try{return ua(b,c),!0}catch(d){return!1}}:null});
n("Promise",function(a){function b(g){this.i=0;this.l=void 0;this.j=[];this.C=!1;var h=this.m();try{g(h.resolve,h.reject)}catch(k){h.reject(k)}}
function c(){this.i=null}
function d(g){return g instanceof b?g:new b(function(h){h(g)})}
if(a)return a;c.prototype.j=function(g){if(null==this.i){this.i=[];var h=this;this.l(function(){h.o()})}this.i.push(g)};
var e=ea.setTimeout;c.prototype.l=function(g){e(g,0)};
c.prototype.o=function(){for(;this.i&&this.i.length;){var g=this.i;this.i=[];for(var h=0;h<g.length;++h){var k=g[h];g[h]=null;try{k()}catch(m){this.m(m)}}}this.i=null};
c.prototype.m=function(g){this.l(function(){throw g;})};
b.prototype.m=function(){function g(m){return function(q){k||(k=!0,m.call(h,q))}}
var h=this,k=!1;return{resolve:g(this.K),reject:g(this.o)}};
b.prototype.K=function(g){if(g===this)this.o(new TypeError("A Promise cannot resolve to itself"));else if(g instanceof b)this.R(g);else{a:switch(typeof g){case "object":var h=null!=g;break a;case "function":h=!0;break a;default:h=!1}h?this.J(g):this.s(g)}};
b.prototype.J=function(g){var h=void 0;try{h=g.then}catch(k){this.o(k);return}"function"==typeof h?this.T(h,g):this.s(g)};
b.prototype.o=function(g){this.N(2,g)};
b.prototype.s=function(g){this.N(1,g)};
b.prototype.N=function(g,h){if(0!=this.i)throw Error("Cannot settle("+g+", "+h+"): Promise already settled in state"+this.i);this.i=g;this.l=h;2===this.i&&this.P();this.v()};
b.prototype.P=function(){var g=this;e(function(){if(g.G()){var h=ea.console;"undefined"!==typeof h&&h.error(g.l)}},1)};
b.prototype.G=function(){if(this.C)return!1;var g=ea.CustomEvent,h=ea.Event,k=ea.dispatchEvent;if("undefined"===typeof k)return!0;"function"===typeof g?g=new g("unhandledrejection",{cancelable:!0}):"function"===typeof h?g=new h("unhandledrejection",{cancelable:!0}):(g=ea.document.createEvent("CustomEvent"),g.initCustomEvent("unhandledrejection",!1,!0,g));g.promise=this;g.reason=this.l;return k(g)};
b.prototype.v=function(){if(null!=this.j){for(var g=0;g<this.j.length;++g)f.j(this.j[g]);this.j=null}};
var f=new c;b.prototype.R=function(g){var h=this.m();g.Ya(h.resolve,h.reject)};
b.prototype.T=function(g,h){var k=this.m();try{g.call(h,k.resolve,k.reject)}catch(m){k.reject(m)}};
b.prototype.then=function(g,h){function k(w,u){return"function"==typeof w?function(A){try{m(w(A))}catch(E){q(E)}}:u}
var m,q,r=new b(function(w,u){m=w;q=u});
this.Ya(k(g,m),k(h,q));return r};
b.prototype.catch=function(g){return this.then(void 0,g)};
b.prototype.Ya=function(g,h){function k(){switch(m.i){case 1:g(m.l);break;case 2:h(m.l);break;default:throw Error("Unexpected state: "+m.i);}}
var m=this;null==this.j?f.j(k):this.j.push(k);this.C=!0};
b.resolve=d;b.reject=function(g){return new b(function(h,k){k(g)})};
b.race=function(g){return new b(function(h,k){for(var m=p(g),q=m.next();!q.done;q=m.next())d(q.value).Ya(h,k)})};
b.all=function(g){var h=p(g),k=h.next();return k.done?d([]):new b(function(m,q){function r(A){return function(E){w[A]=E;u--;0==u&&m(w)}}
var w=[],u=0;do w.push(void 0),u++,d(k.value).Ya(r(w.length-1),q),k=h.next();while(!k.done)})};
return b});
n("WeakMap",function(a){function b(k){this.i=(h+=Math.random()+1).toString();if(k){k=p(k);for(var m;!(m=k.next()).done;)m=m.value,this.set(m[0],m[1])}}
function c(){}
function d(k){var m=typeof k;return"object"===m&&null!==k||"function"===m}
function e(k){if(!ja(k,g)){var m=new c;ba(k,g,{value:m})}}
function f(k){var m=Object[k];m&&(Object[k]=function(q){if(q instanceof c)return q;Object.isExtensible(q)&&e(q);return m(q)})}
if(function(){if(!a||!Object.seal)return!1;try{var k=Object.seal({}),m=Object.seal({}),q=new a([[k,2],[m,3]]);if(2!=q.get(k)||3!=q.get(m))return!1;q.delete(k);q.set(m,4);return!q.has(k)&&4==q.get(m)}catch(r){return!1}}())return a;
var g="$jscomp_hidden_"+Math.random();f("freeze");f("preventExtensions");f("seal");var h=0;b.prototype.set=function(k,m){if(!d(k))throw Error("Invalid WeakMap key");e(k);if(!ja(k,g))throw Error("WeakMap key fail: "+k);k[g][this.i]=m;return this};
b.prototype.get=function(k){return d(k)&&ja(k,g)?k[g][this.i]:void 0};
b.prototype.has=function(k){return d(k)&&ja(k,g)&&ja(k[g],this.i)};
b.prototype.delete=function(k){return d(k)&&ja(k,g)&&ja(k[g],this.i)?delete k[g][this.i]:!1};
return b});
n("Map",function(a){function b(){var h={};return h.previous=h.next=h.head=h}
function c(h,k){var m=h.i;return ha(function(){if(m){for(;m.head!=h.i;)m=m.previous;for(;m.next!=m.head;)return m=m.next,{done:!1,value:k(m)};m=null}return{done:!0,value:void 0}})}
function d(h,k){var m=k&&typeof k;"object"==m||"function"==m?f.has(k)?m=f.get(k):(m=""+ ++g,f.set(k,m)):m="p_"+k;var q=h.data_[m];if(q&&ja(h.data_,m))for(h=0;h<q.length;h++){var r=q[h];if(k!==k&&r.key!==r.key||k===r.key)return{id:m,list:q,index:h,entry:r}}return{id:m,list:q,index:-1,entry:void 0}}
function e(h){this.data_={};this.i=b();this.size=0;if(h){h=p(h);for(var k;!(k=h.next()).done;)k=k.value,this.set(k[0],k[1])}}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var h=Object.seal({x:4}),k=new a(p([[h,"s"]]));if("s"!=k.get(h)||1!=k.size||k.get({x:4})||k.set({x:4},"t")!=k||2!=k.size)return!1;var m=k.entries(),q=m.next();if(q.done||q.value[0]!=h||"s"!=q.value[1])return!1;q=m.next();return q.done||4!=q.value[0].x||"t"!=q.value[1]||!m.next().done?!1:!0}catch(r){return!1}}())return a;
var f=new WeakMap;e.prototype.set=function(h,k){h=0===h?0:h;var m=d(this,h);m.list||(m.list=this.data_[m.id]=[]);m.entry?m.entry.value=k:(m.entry={next:this.i,previous:this.i.previous,head:this.i,key:h,value:k},m.list.push(m.entry),this.i.previous.next=m.entry,this.i.previous=m.entry,this.size++);return this};
e.prototype.delete=function(h){h=d(this,h);return h.entry&&h.list?(h.list.splice(h.index,1),h.list.length||delete this.data_[h.id],h.entry.previous.next=h.entry.next,h.entry.next.previous=h.entry.previous,h.entry.head=null,this.size--,!0):!1};
e.prototype.clear=function(){this.data_={};this.i=this.i.previous=b();this.size=0};
e.prototype.has=function(h){return!!d(this,h).entry};
e.prototype.get=function(h){return(h=d(this,h).entry)&&h.value};
e.prototype.entries=function(){return c(this,function(h){return[h.key,h.value]})};
e.prototype.keys=function(){return c(this,function(h){return h.key})};
e.prototype.values=function(){return c(this,function(h){return h.value})};
e.prototype.forEach=function(h,k){for(var m=this.entries(),q;!(q=m.next()).done;)q=q.value,h.call(k,q[1],q[0],this)};
e.prototype[Symbol.iterator]=e.prototype.entries;var g=0;return e});
function Ka(a,b,c){if(null==a)throw new TypeError("The 'this' value for String.prototype."+c+" must not be null or undefined");if(b instanceof RegExp)throw new TypeError("First argument to String.prototype."+c+" must not be a regular expression");return a+""}
n("String.prototype.endsWith",function(a){return a?a:function(b,c){var d=Ka(this,b,"endsWith");b+="";void 0===c&&(c=d.length);c=Math.max(0,Math.min(c|0,d.length));for(var e=b.length;0<e&&0<c;)if(d[--c]!=b[--e])return!1;return 0>=e}});
n("Array.prototype.find",function(a){return a?a:function(b,c){a:{var d=this;d instanceof String&&(d=String(d));for(var e=d.length,f=0;f<e;f++){var g=d[f];if(b.call(c,g,f,d)){b=g;break a}}b=void 0}return b}});
n("String.prototype.startsWith",function(a){return a?a:function(b,c){var d=Ka(this,b,"startsWith");b+="";var e=d.length,f=b.length;c=Math.max(0,Math.min(c|0,d.length));for(var g=0;g<f&&c<e;)if(d[c++]!=b[g++])return!1;return g>=f}});
n("Number.isFinite",function(a){return a?a:function(b){return"number"!==typeof b?!1:!isNaN(b)&&Infinity!==b&&-Infinity!==b}});
n("Number.isInteger",function(a){return a?a:function(b){return Number.isFinite(b)?b===Math.floor(b):!1}});
n("Number.MAX_SAFE_INTEGER",function(){return 9007199254740991});
function La(a,b){a instanceof String&&(a+="");var c=0,d=!1,e={next:function(){if(!d&&c<a.length){var f=c++;return{value:b(f,a[f]),done:!1}}d=!0;return{done:!0,value:void 0}}};
e[Symbol.iterator]=function(){return e};
return e}
n("Array.prototype.entries",function(a){return a?a:function(){return La(this,function(b,c){return[b,c]})}});
n("Number.isNaN",function(a){return a?a:function(b){return"number"===typeof b&&isNaN(b)}});
n("Array.prototype.keys",function(a){return a?a:function(){return La(this,function(b){return b})}});
n("Object.setPrototypeOf",function(a){return a||ua});
n("Set",function(a){function b(c){this.i=new Map;if(c){c=p(c);for(var d;!(d=c.next()).done;)this.add(d.value)}this.size=this.i.size}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var c=Object.seal({x:4}),d=new a(p([c]));if(!d.has(c)||1!=d.size||d.add(c)!=d||1!=d.size||d.add({x:4})!=d||2!=d.size)return!1;var e=d.entries(),f=e.next();if(f.done||f.value[0]!=c||f.value[1]!=c)return!1;f=e.next();return f.done||f.value[0]==c||4!=f.value[0].x||f.value[1]!=f.value[0]?!1:e.next().done}catch(g){return!1}}())return a;
b.prototype.add=function(c){c=0===c?0:c;this.i.set(c,c);this.size=this.i.size;return this};
b.prototype.delete=function(c){c=this.i.delete(c);this.size=this.i.size;return c};
b.prototype.clear=function(){this.i.clear();this.size=0};
b.prototype.has=function(c){return this.i.has(c)};
b.prototype.entries=function(){return this.i.entries()};
b.prototype.values=function(){return this.i.values()};
b.prototype.keys=b.prototype.values;b.prototype[Symbol.iterator]=b.prototype.values;b.prototype.forEach=function(c,d){var e=this;this.i.forEach(function(f){return c.call(d,f,f,e)})};
return b});
n("Array.from",function(a){return a?a:function(b,c,d){c=null!=c?c:function(h){return h};
var e=[],f="undefined"!=typeof Symbol&&Symbol.iterator&&b[Symbol.iterator];if("function"==typeof f){b=f.call(b);for(var g=0;!(f=b.next()).done;)e.push(c.call(d,f.value,g++))}else for(f=b.length,g=0;g<f;g++)e.push(c.call(d,b[g],g));return e}});
n("Object.entries",function(a){return a?a:function(b){var c=[],d;for(d in b)ja(b,d)&&c.push([d,b[d]]);return c}});
n("Array.prototype.values",function(a){return a?a:function(){return La(this,function(b,c){return c})}});
n("Object.is",function(a){return a?a:function(b,c){return b===c?0!==b||1/b===1/c:b!==b&&c!==c}});
n("Array.prototype.includes",function(a){return a?a:function(b,c){var d=this;d instanceof String&&(d=String(d));var e=d.length;c=c||0;for(0>c&&(c=Math.max(c+e,0));c<e;c++){var f=d[c];if(f===b||Object.is(f,b))return!0}return!1}});
n("String.prototype.includes",function(a){return a?a:function(b,c){return-1!==Ka(this,b,"includes").indexOf(b,c||0)}});
n("globalThis",function(a){return a||ea});
n("Object.values",function(a){return a?a:function(b){var c=[],d;for(d in b)ja(b,d)&&c.push(b[d]);return c}});
var Ma=Ma||{},y=this||self;function z(a,b,c){a=a.split(".");c=c||y;a[0]in c||"undefined"==typeof c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)a.length||void 0===b?c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}:c[d]=b}
function B(a,b){a=a.split(".");b=b||y;for(var c=0;c<a.length;c++)if(b=b[a[c]],null==b)return null;return b}
function Na(a){a.xb=void 0;a.getInstance=function(){return a.xb?a.xb:a.xb=new a}}
function Oa(a){var b=typeof a;return"object"!=b?b:a?Array.isArray(a)?"array":b:"null"}
function Pa(a){var b=Oa(a);return"array"==b||"object"==b&&"number"==typeof a.length}
function Qa(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}
function Ra(a){return Object.prototype.hasOwnProperty.call(a,Sa)&&a[Sa]||(a[Sa]=++Ta)}
var Sa="closure_uid_"+(1E9*Math.random()>>>0),Ta=0;function Ua(a,b,c){return a.call.apply(a.bind,arguments)}
function Va(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var e=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(e,d);return a.apply(b,e)}}return function(){return a.apply(b,arguments)}}
function Wa(a,b,c){Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?Wa=Ua:Wa=Va;return Wa.apply(null,arguments)}
function Ya(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var d=c.slice();d.push.apply(d,arguments);return a.apply(this,d)}}
function Za(a,b){function c(){}
c.prototype=b.prototype;a.X=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.Wq=function(d,e,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[e].apply(d,g)}}
function $a(a){return a}
;function ab(a,b){if(Error.captureStackTrace)Error.captureStackTrace(this,ab);else{var c=Error().stack;c&&(this.stack=c)}a&&(this.message=String(a));void 0!==b&&(this.cause=b)}
Za(ab,Error);ab.prototype.name="CustomError";function bb(a){a=a.url;var b=/[?&]dsh=1(&|$)/.test(a);this.l=!b&&/[?&]ae=1(&|$)/.test(a);this.m=!b&&/[?&]ae=2(&|$)/.test(a);if((this.i=/[?&]adurl=([^&]*)/.exec(a))&&this.i[1]){try{var c=decodeURIComponent(this.i[1])}catch(d){c=null}this.j=c}}
;function cb(){}
function db(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}
;var eb=Array.prototype.indexOf?function(a,b){return Array.prototype.indexOf.call(a,b,void 0)}:function(a,b){if("string"===typeof a)return"string"!==typeof b||1!=b.length?-1:a.indexOf(b,0);
for(var c=0;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},fb=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e="string"===typeof a?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},gb=Array.prototype.filter?function(a,b){return Array.prototype.filter.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=[],e=0,f="string"===typeof a?a.split(""):a,g=0;g<c;g++)if(g in f){var h=f[g];
b.call(void 0,h,g,a)&&(d[e++]=h)}return d},hb=Array.prototype.map?function(a,b){return Array.prototype.map.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=Array(c),e="string"===typeof a?a.split(""):a,f=0;f<c;f++)f in e&&(d[f]=b.call(void 0,e[f],f,a));
return d},ib=Array.prototype.reduce?function(a,b,c){return Array.prototype.reduce.call(a,b,c)}:function(a,b,c){var d=c;
fb(a,function(e,f){d=b.call(void 0,d,e,f,a)});
return d},jb=Array.prototype.every?function(a,b){return Array.prototype.every.call(a,b,void 0)}:function(a,b){for(var c=a.length,d="string"===typeof a?a.split(""):a,e=0;e<c;e++)if(e in d&&!b.call(void 0,d[e],e,a))return!1;
return!0};
function kb(a,b){a:{for(var c=a.length,d="string"===typeof a?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){b=e;break a}b=-1}return 0>b?null:"string"===typeof a?a.charAt(b):a[b]}
function lb(a,b){b=eb(a,b);var c;(c=0<=b)&&Array.prototype.splice.call(a,b,1);return c}
function mb(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(Pa(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}}
;function nb(a,b){for(var c in a)b.call(void 0,a[c],c,a)}
function ob(a){var b=qb,c;for(c in b)if(a.call(void 0,b[c],c,b))return c}
function rb(a){for(var b in a)return!1;return!0}
function sb(a,b){if(null!==a&&b in a)throw Error('The object already contains the key "'+b+'"');a[b]=!0}
function tb(a){return null!==a&&"privembed"in a?a.privembed:!1}
function ub(a,b){for(var c in a)if(!(c in b)||a[c]!==b[c])return!1;for(var d in b)if(!(d in a))return!1;return!0}
function vb(a){var b={},c;for(c in a)b[c]=a[c];return b}
function wb(a){if(!a||"object"!==typeof a)return a;if("function"===typeof a.clone)return a.clone();if("undefined"!==typeof Map&&a instanceof Map)return new Map(a);if("undefined"!==typeof Set&&a instanceof Set)return new Set(a);var b=Array.isArray(a)?[]:"function"!==typeof ArrayBuffer||"function"!==typeof ArrayBuffer.isView||!ArrayBuffer.isView(a)||a instanceof DataView?{}:new a.constructor(a.length),c;for(c in a)b[c]=wb(a[c]);return b}
var xb="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function yb(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<xb.length;f++)c=xb[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}}
;var zb;function Ab(){if(void 0===zb){var a=null,b=y.trustedTypes;if(b&&b.createPolicy){try{a=b.createPolicy("goog#html",{createHTML:$a,createScript:$a,createScriptURL:$a})}catch(c){y.console&&y.console.error(c.message)}zb=a}else zb=a}return zb}
;function Bb(a,b){this.l=a===Cb&&b||""}
Bb.prototype.j=!0;Bb.prototype.i=function(){return this.l};
function Db(a){return new Bb(Cb,a)}
var Cb={};Db("");var Eb={};function Fb(a){this.l=Eb===Eb?a:"";this.j=!0}
Fb.prototype.toString=function(){return this.l.toString()};
Fb.prototype.i=function(){return this.l.toString()};function Gb(a,b){this.l=b===Hb?a:""}
Gb.prototype.toString=function(){return this.l+""};
Gb.prototype.j=!0;Gb.prototype.i=function(){return this.l.toString()};
function Ib(a){if(a instanceof Gb&&a.constructor===Gb)return a.l;Oa(a);return"type_error:TrustedResourceUrl"}
var Hb={};function Lb(a){var b=Ab();a=b?b.createScriptURL(a):a;return new Gb(a,Hb)}
;var Mb=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]};
function Nb(a,b){return a<b?-1:a>b?1:0}
;function Ob(a,b){this.l=b===Pb?a:""}
Ob.prototype.toString=function(){return this.l.toString()};
Ob.prototype.j=!0;Ob.prototype.i=function(){return this.l.toString()};
function Qb(a){if(a instanceof Ob&&a.constructor===Ob)return a.l;Oa(a);return"type_error:SafeUrl"}
var Rb=/^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i,Pb={},Sb=new Ob("about:invalid#zClosurez",Pb);function Tb(){var a=y.navigator;return a&&(a=a.userAgent)?a:""}
function C(a){return-1!=Tb().indexOf(a)}
;function Ub(){return C("Trident")||C("MSIE")}
function Vb(){return C("Firefox")||C("FxiOS")}
function Wb(){return C("Safari")&&!(Xb()||C("Coast")||C("Opera")||C("Edge")||C("Edg/")||C("OPR")||Vb()||C("Silk")||C("Android"))}
function Xb(){return(C("Chrome")||C("CriOS"))&&!C("Edge")||C("Silk")}
function Yb(){return C("Android")&&!(Xb()||Vb()||C("Opera")||C("Silk"))}
function Zb(a){var b={};a.forEach(function(c){b[c[0]]=c[1]});
return function(c){return b[c.find(function(d){return d in b})]||""}}
function $b(a){var b=Tb();if("Internet Explorer"===a){if(Ub())if((a=/rv: *([\d\.]*)/.exec(b))&&a[1])b=a[1];else{a="";var c=/MSIE +([\d\.]+)/.exec(b);if(c&&c[1])if(b=/Trident\/(\d.\d)/.exec(b),"7.0"==c[1])if(b&&b[1])switch(b[1]){case "4.0":a="8.0";break;case "5.0":a="9.0";break;case "6.0":a="10.0";break;case "7.0":a="11.0"}else a="7.0";else a=c[1];b=a}else b="";return b}var d=RegExp("([A-Z][\\w ]+)/([^\\s]+)\\s*(?:\\((.*?)\\))?","g");c=[];for(var e;e=d.exec(b);)c.push([e[1],e[2],e[3]||void 0]);b=Zb(c);
switch(a){case "Opera":if(C("Opera"))return b(["Version","Opera"]);if(C("OPR"))return b(["OPR"]);break;case "Microsoft Edge":if(C("Edge"))return b(["Edge"]);if(C("Edg/"))return b(["Edg"]);break;case "Chromium":if(Xb())return b(["Chrome","CriOS","HeadlessChrome"])}return"Firefox"===a&&Vb()||"Safari"===a&&Wb()||"Android Browser"===a&&Yb()||"Silk"===a&&C("Silk")?(b=c[2])&&b[1]||"":""}
function ac(a){a=$b(a);if(""===a)return NaN;a=a.split(".");return 0===a.length?NaN:Number(a[0])}
;var bc={};function ec(a){this.l=bc===bc?a:"";this.j=!0}
ec.prototype.i=function(){return this.l.toString()};
ec.prototype.toString=function(){return this.l.toString()};function fc(a,b){b instanceof Ob||b instanceof Ob||(b="object"==typeof b&&b.j?b.i():String(b),Rb.test(b)||(b="about:invalid#zClosurez"),b=new Ob(b,Pb));a.href=Qb(b)}
function gc(a,b){a.rel="stylesheet";a.href=Ib(b).toString();(b=hc('style[nonce],link[rel="stylesheet"][nonce]',a.ownerDocument&&a.ownerDocument.defaultView))&&a.setAttribute("nonce",b)}
function ic(){return hc("script[nonce]")}
var jc=/^[\w+/_-]+[=]{0,2}$/;function hc(a,b){b=(b||y).document;return b.querySelector?(a=b.querySelector(a))&&(a=a.nonce||a.getAttribute("nonce"))&&jc.test(a)?a:"":""}
;function kc(a){for(var b=0,c=0;c<a.length;++c)b=31*b+a.charCodeAt(c)>>>0;return b}
;var lc=RegExp("^(?:([^:/?#.]+):)?(?://(?:([^\\\\/?#]*)@)?([^\\\\/?#]*?)(?::([0-9]+))?(?=[\\\\/?#]|$))?([^?#]+)?(?:\\?([^#]*))?(?:#([\\s\\S]*))?$");function mc(a){return a?decodeURI(a):a}
function nc(a,b){return b.match(lc)[a]||null}
function oc(a){return mc(nc(3,a))}
function pc(a){var b=a.match(lc);a=b[5];var c=b[6];b=b[7];var d="";a&&(d+=a);c&&(d+="?"+c);b&&(d+="#"+b);return d}
function qc(a,b){if(!b)return a;var c=a.indexOf("#");0>c&&(c=a.length);var d=a.indexOf("?");if(0>d||d>c){d=c;var e=""}else e=a.substring(d+1,c);a=[a.slice(0,d),e,a.slice(c)];c=a[1];a[1]=b?c?c+"&"+b:b:c;return a[0]+(a[1]?"?"+a[1]:"")+a[2]}
function rc(a,b,c){if(Array.isArray(b))for(var d=0;d<b.length;d++)rc(a,String(b[d]),c);else null!=b&&c.push(a+(""===b?"":"="+encodeURIComponent(String(b))))}
function sc(a,b){var c=[];for(b=b||0;b<a.length;b+=2)rc(a[b],a[b+1],c);return c.join("&")}
function tc(a){var b=[],c;for(c in a)rc(c,a[c],b);return b.join("&")}
function uc(a,b){var c=2==arguments.length?sc(arguments[1],0):sc(arguments,1);return qc(a,c)}
function vc(a,b){b=tc(b);return qc(a,b)}
function wc(a,b,c){c=null!=c?"="+encodeURIComponent(String(c)):"";return qc(a,b+c)}
function xc(a,b,c,d){for(var e=c.length;0<=(b=a.indexOf(c,b))&&b<d;){var f=a.charCodeAt(b-1);if(38==f||63==f)if(f=a.charCodeAt(b+e),!f||61==f||38==f||35==f)return b;b+=e+1}return-1}
var yc=/#|$/,zc=/[?&]($|#)/;function Ac(a,b){for(var c=a.search(yc),d=0,e,f=[];0<=(e=xc(a,d,b,c));)f.push(a.substring(d,e)),d=Math.min(a.indexOf("&",e)+1||c,c);f.push(a.slice(d));return f.join("").replace(zc,"$1")}
;function Bc(){return C("iPhone")&&!C("iPod")&&!C("iPad")}
function Cc(){var a=Tb();if(C("Windows")){var b=/Windows (?:NT|Phone) ([0-9.]+)/;b.exec(a)}else Bc()||C("iPad")||C("iPod")?(b=/(?:iPhone|iPod|iPad|CPU)\s+OS\s+(\S+)/,(a=b.exec(a))&&a[1].replace(/_/g,".")):C("Macintosh")?(b=/Mac OS X ([0-9_.]+)/,(a=b.exec(a))&&a[1].replace(/_/g,".")):-1!=Tb().toLowerCase().indexOf("kaios")?(b=/(?:KaiOS)\/(\S+)/i,b.exec(a)):C("Android")?(b=/Android\s+([^\);]+)(\)|;)/,b.exec(a)):C("CrOS")&&(b=/(?:CrOS\s+(?:i686|x86_64)\s+([0-9.]+))/,b.exec(a))}
;function Gc(a){Gc[" "](a);return a}
Gc[" "]=function(){};
function Hc(a){var b=Ic;return Object.prototype.hasOwnProperty.call(b,9)?b[9]:b[9]=a(9)}
;var Jc=C("Opera"),Kc=Ub(),Lc=C("Edge"),Mc=C("Gecko")&&!(-1!=Tb().toLowerCase().indexOf("webkit")&&!C("Edge"))&&!(C("Trident")||C("MSIE"))&&!C("Edge"),Nc=-1!=Tb().toLowerCase().indexOf("webkit")&&!C("Edge"),Oc=C("Android");function Pc(){var a=y.document;return a?a.documentMode:void 0}
var Qc;a:{var Rc="",Sc=function(){var a=Tb();if(Mc)return/rv:([^\);]+)(\)|;)/.exec(a);if(Lc)return/Edge\/([\d\.]+)/.exec(a);if(Kc)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(Nc)return/WebKit\/(\S+)/.exec(a);if(Jc)return/(?:Version)[ \/]?(\S+)/.exec(a)}();
Sc&&(Rc=Sc?Sc[1]:"");if(Kc){var Tc=Pc();if(null!=Tc&&Tc>parseFloat(Rc)){Qc=String(Tc);break a}}Qc=Rc}var Uc=Qc,Ic={};
function Vc(){return Hc(function(){for(var a=0,b=Mb(String(Uc)).split("."),c=Mb("9").split("."),d=Math.max(b.length,c.length),e=0;0==a&&e<d;e++){var f=b[e]||"",g=c[e]||"";do{f=/(\d*)(\D*)(.*)/.exec(f)||["","","",""];g=/(\d*)(\D*)(.*)/.exec(g)||["","","",""];if(0==f[0].length&&0==g[0].length)break;a=Nb(0==f[1].length?0:parseInt(f[1],10),0==g[1].length?0:parseInt(g[1],10))||Nb(0==f[2].length,0==g[2].length)||Nb(f[2],g[2]);f=f[3];g=g[3]}while(0==a)}return 0<=a})}
var Wc;if(y.document&&Kc){var Xc=Pc();Wc=Xc?Xc:parseInt(Uc,10)||void 0}else Wc=void 0;var Yc=Wc;var Zc=Bc()||C("iPod"),$c=C("iPad");Yb();Xb();var ad=Wb()&&!(Bc()||C("iPad")||C("iPod"));var bd={},cd=null;
function dd(a,b){Pa(a);void 0===b&&(b=0);if(!cd){cd={};for(var c="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""),d=["+/=","+/","-_=","-_.","-_"],e=0;5>e;e++){var f=c.concat(d[e].split(""));bd[e]=f;for(var g=0;g<f.length;g++){var h=f[g];void 0===cd[h]&&(cd[h]=g)}}}b=bd[b];c=Array(Math.floor(a.length/3));d=b[64]||"";for(e=f=0;f<a.length-2;f+=3){var k=a[f],m=a[f+1];h=a[f+2];g=b[k>>2];k=b[(k&3)<<4|m>>4];m=b[(m&15)<<2|h>>6];h=b[h&63];c[e++]=""+g+k+m+h}g=0;h=d;switch(a.length-
f){case 2:g=a[f+1],h=b[(g&15)<<2]||d;case 1:a=a[f],c[e]=""+b[a>>2]+b[(a&3)<<4|g>>4]+h+d}return c.join("")}
;var ed="undefined"!==typeof Uint8Array;function fd(a){return ed&&null!=a&&a instanceof Uint8Array}
var gd={};var hd;function id(a,b){if(b!==gd)throw Error("illegal external caller");this.ja=a;if(null!=a&&0===a.length)throw Error("ByteString should be constructed with non-empty values");}
function jd(){return hd||(hd=new id(null,gd))}
id.prototype.isEmpty=function(){return null==this.ja};var kd="function"===typeof Symbol&&"symbol"===typeof Symbol()?Symbol(void 0):void 0;function ld(a,b){Object.isFrozen(a)||(kd?a[kd]|=b:void 0!==a.fa?a.fa|=b:Object.defineProperties(a,{fa:{value:b,configurable:!0,writable:!0,enumerable:!1}}))}
function md(a,b){Object.isExtensible(a)&&(kd?a[kd]&&(a[kd]&=~b):void 0!==a.fa&&(a.fa&=~b))}
function nd(a){var b;kd?b=a[kd]:b=a.fa;return null==b?0:b}
function od(a,b){kd?a[kd]=b:void 0!==a.fa?a.fa=b:Object.defineProperties(a,{fa:{value:b,configurable:!0,writable:!0,enumerable:!1}})}
function pd(a){ld(a,1);return a}
function qd(a){ld(a,17);return a}
function rd(a){return a?!!(nd(a)&2):!1}
function sd(a){ld(a,16);return a}
function td(a){if(!Array.isArray(a))throw Error("cannot mark non-array as shared mutably");md(a,16)}
function ud(a,b){od(b,(nd(a)|0)&-51)}
;var vd={};function Ad(a){return null!==a&&"object"===typeof a&&!Array.isArray(a)&&a.constructor===Object}
var Bd,Cd=Object.freeze(pd([]));function Dd(a){if(rd(a.A))throw Error("Cannot mutate an immutable Message");}
;function Ed(a){return a.displayName||a.name||"unknown type name"}
function Fd(a,b){if(!(a instanceof b))throw Error("Expected instanceof "+Ed(b)+" but got "+(a&&Ed(a.constructor)));return a}
;function Gd(a){switch(typeof a){case "number":return isFinite(a)?a:String(a);case "object":if(a&&!Array.isArray(a)){if(fd(a))return dd(a);if(a instanceof id){var b=a.ja;return null==b?"":"string"===typeof b?b:a.ja=dd(b)}}}return a}
;function Hd(a,b,c){if(null!=a){if(Array.isArray(a))a=Id(a,b,c);else if(Ad(a)){var d={},e;for(e in a)d[e]=Hd(a[e],b,c);a=d}else a=b(a);return a}}
function Id(a,b,c){var d=Array.prototype.slice.call(a);c(a,d);for(a=0;a<d.length;a++)d[a]=Hd(d[a],b,c);return d}
function Jd(a){if(a.Ab===vd)return a.toJSON();a=Gd(a);return Array.isArray(a)?Id(a,Jd,Kd):a}
function Ld(a){if(!a)return a;if("object"===typeof a){if(fd(a))return new Uint8Array(a);if(a.Ab===vd)return a.clone()}return a}
function Kd(){}
;function Md(a){return a.i||(a.i=a.A[a.o+a.m]={})}
function Nd(a,b,c){return-1===b?null:b>=a.o?a.i?a.i[b]:void 0:(void 0===c?0:c)&&a.i&&(c=a.i[b],null!=c)?c:a.A[b+a.m]}
function D(a,b,c,d,e){d=void 0===d?!1:d;(void 0===e?0:e)||Dd(a);a.ec&&(a.ec=void 0);if(b>=a.o||d)return Md(a)[b]=c,a;void 0!==a.i&&a.o>=a.A.length?(d=a.A.length-1,e=b+a.m,e>=d?(a.A[d]=void 0,a.A[e]=c,a.A.push(a.i)):a.A[e]=c):a.A[b+a.m]=c;void 0!==a.i&&b in a.i&&delete a.i[b];return a}
function Od(a,b,c,d){var e=Nd(a,b,d);Array.isArray(e)||(e=Cd);var f=nd(e);f&1||pd(e);rd(a.A)?c&1||(ld(e,2),Object.freeze(e)):e===Cd||f&2?(e=pd(Array.prototype.slice.call(e)),D(a,b,e,d)):!(c&2)&&f&16&&td(e);return e}
function Pd(a,b,c){null==c?c=Cd:pd(c);return D(a,b,c)}
function Qd(a,b,c,d){Dd(a);(c=Rd(a,c))&&c!==b&&null!=d&&D(a,c,void 0,!1);return D(a,b,d)}
function Rd(a,b){for(var c=0,d=0;d<b.length;d++){var e=b[d];null!=Nd(a,e)&&(0!==c&&D(a,c,void 0,!1,!0),c=e)}return c}
function Sd(a,b,c,d){var e=d=void 0===d?!1:d,f=Nd(a,c,e);var g=!1;var h=null==f||"object"!==typeof f||(g=Array.isArray(f))||f.Ab!==vd?g?new b(f):void 0:f;h!==f&&null!=h&&(D(a,c,h,e,!0),ld(h.A,nd(a.A)&-33));b=h;if(null==b)return b;rd(b.A)&&!rd(a.A)&&(b=Td(b),D(a,c,b,d));return b}
function Ud(a,b,c,d,e){e=void 0===e?!0:e;a.j||(a.j={});var f=a.j[c];d=Od(a,c,2,d);var g=!!(nd(a.A)&16),h=rd(d);h=rd(a.A)||h;if(!f){f=[];for(var k=h,m=0;m<d.length;m++){var q=d[m];k=k||rd(q);var r=b,w=g,u=!1;u=void 0===u?!1:u;w=void 0===w?!1:w;q=Array.isArray(q)?new r(w?sd(q):q):u?new r:void 0;void 0!==q&&(f.push(q),h&&ld(q.A,2))}a.j[c]=f;b=!k;Object.isFrozen(d)||(g=nd(d)|33,od(d,b?g|8:g&-9))}e=h||e;d=rd(f);e&&!d&&(Object.isFrozen(f)&&(a.j[c]=f=f.slice()),ld(f,2),Object.freeze(f));!e&&d&&(a.j[c]=f=
f.slice());return f}
function Vd(a,b,c,d){d=void 0===d?!1:d;var e=rd(a.A);b=Ud(a,b,c,d,e);a=Od(a,c,3,d);if(!(c=e)&&(c=a)){if(!a)throw Error("cannot check mutability state of non-array");c=!(nd(a)&8)}if(c){for(c=0;c<b.length;c++)if((d=b[c])&&rd(d.A)&&!e){d=c;var f=Td(b[c]);b[d]=f;a[c]=b[c].A}ld(a,8)}return b}
function G(a,b,c,d){Dd(a);null!=d?Fd(d,b):d=void 0;return D(a,c,d)}
function Wd(a,b,c,d,e){Dd(a);null!=e?Fd(e,b):e=void 0;Qd(a,c,d,e)}
function Xd(a,b,c,d){Dd(a);if(null!=d){var e=pd([]);for(var f=!1,g=0;g<d.length;g++)e[g]=Fd(d[g],b).A,f=f||rd(e[g]);a.j||(a.j={});a.j[c]=d;b=e;f?md(b,8):ld(b,8)}else a.j&&(a.j[c]=void 0),e=Cd;return D(a,c,e)}
function Yd(a,b,c,d){Dd(a);var e=Ud(a,c,b,void 0,!1);c=null!=d?Fd(d,c):new c;a=Od(a,b,2);e.push(c);a.push(c.A);rd(c.A)&&md(a,8)}
function Zd(a,b){return Nd(a,b)}
function $d(a,b){return null==a?b:a}
;function ae(a,b,c,d,e,f){(a=a.j&&a.j[c])?(e=f.ob?pd(a.slice()):a,Xd(b,0<e.length?e[0].constructor:void 0,c,e)):(ed&&d instanceof Uint8Array?e=d.length?new id(new Uint8Array(d),gd):jd():(Array.isArray(d)&&(e?ld(d,2):d&&nd(d)&1&&f.ob?(e=Array.prototype.slice.call(d),od(e,(nd(d)|0)&-51),d=e):td(d)),e=d),D(b,c,e))}
;function Td(a){if(!rd(a.A))return a;var b={ob:!0},c=rd(a.A);if(c&&!b.ob)throw Error("copyRepeatedFields must be true for frozen messages");c||td(a.A);var d=new a.constructor;a.Ia&&(d.Ia=a.Ia.slice());for(var e=a.A,f=0;f<e.length;f++){var g=e[f];if(f===e.length-1&&Ad(g))for(var h in g){var k=+h;Number.isNaN(k)?Md(d)[h]=g[h]:ae(a,d,k,g[h],c,b)}else ae(a,d,f-a.m,g,c,b)}d.ec=a;return d}
;function I(a,b,c){a||(a=be);be=null;var d=this.constructor.i||0,e=0<d,f=this.constructor.j,g=!1;if(!a){var h=f?[f]:[];ld(h,48);a=h;h=!0}else if(h=!!(nd(a)&16))g=nd(a),od(a,g|32),g=!!(g&32);e&&0<a.length&&Ad(a[a.length-1])&&"g"in a[a.length-1]&&(d=0);this.m=(f?0:-1)-d;this.j=void 0;this.A=a;a:{f=this.A.length;d=f-1;if(f&&(f=this.A[d],Ad(f))){this.i=f;b=Object.keys(f);0<b.length&&jb(b,isNaN)?this.o=Number.MAX_VALUE:this.o=d-this.m;break a}void 0!==b&&-1<b?(this.o=Math.max(b,d+1-this.m),this.i=void 0):
this.o=Number.MAX_VALUE}if(!e&&this.i&&"g"in this.i)throw Error('Unexpected "g" flag in sparse object of message that is not a group type.');if(c)for(e=h&&!g?qd:pd,b=0;b<c.length;b++)h=c[b],h<this.o?(h+=this.m,(g=this.A[h])?Array.isArray(g)&&e(g):this.A[h]=Cd):(g=Md(this),(d=g[h])?Array.isArray(d)&&e(d):g[h]=Cd)}
l=I.prototype;l.toJSON=function(){var a=this.A;return Bd?a:Id(a,Jd,Kd)};
function ce(a){Bd=!0;try{return JSON.stringify(a.toJSON(),de)}finally{Bd=!1}}
l.clone=function(){var a=Id(this.A,Ld,ud);sd(a);be=a;a=new this.constructor(a);be=null;ee(a,this);return a};
l.isMutable=function(){return!rd(this.A)};
l.Ab=vd;l.toString=function(){return this.A.toString()};
function de(a,b){return Gd(b)}
function ee(a,b){b.Ia&&(a.Ia=b.Ia.slice());var c=b.j;if(c){b=b.i;for(var d in c){var e=c[d];if(e){var f=!(!b||!b[d]),g=+d;if(Array.isArray(e)){if(e.length)for(f=Vd(a,e[0].constructor,g,f),g=0;g<Math.min(f.length,e.length);g++)ee(f[g],e[g])}else throw Error("unexpected object: type: "+Oa(e)+": "+e);}}}}
var be;function fe(a){var b=this.i,c=this.j;return this.isRepeated?Vd(a,b,c,!0):Sd(a,b,c,!0)}
;function ge(a){this.Rb=a}
;function he(a,b,c){this.j=a;this.m=b;this.i=c||[];this.ya=new Map}
l=he.prototype;l.Dc=function(a){var b=Ja.apply(1,arguments),c=this.rb(b);c?c.push(new ge(a)):this.sc(a,b)};
l.sc=function(a){this.ya.set(this.Yb(Ja.apply(1,arguments)),[new ge(a)])};
l.rb=function(){var a=this.Yb(Ja.apply(0,arguments));return this.ya.has(a)?this.ya.get(a):void 0};
l.Qc=function(){var a=this.rb(Ja.apply(0,arguments));return a&&a.length?a[0]:void 0};
l.clear=function(){this.ya.clear()};
l.Yb=function(){var a=Ja.apply(0,arguments);return a?a.join(","):"key"};function ie(a,b){he.call(this,a,3,b)}
t(ie,he);ie.prototype.l=function(a){var b=Ja.apply(1,arguments),c=0,d=this.Qc(b);d&&(c=d.Rb);this.sc(c+a,b)};function je(a,b){he.call(this,a,2,b)}
t(je,he);je.prototype.l=function(a){this.Dc(a,Ja.apply(1,arguments))};function ke(a){a&&"function"==typeof a.dispose&&a.dispose()}
;function le(a){for(var b=0,c=arguments.length;b<c;++b){var d=arguments[b];Pa(d)?le.apply(null,d):ke(d)}}
;function J(){this.N=this.N;this.C=this.C}
J.prototype.N=!1;J.prototype.i=function(){return this.N};
J.prototype.dispose=function(){this.N||(this.N=!0,this.D())};
function me(a,b){ne(a,Ya(ke,b))}
function ne(a,b){a.N?b():(a.C||(a.C=[]),a.C.push(b))}
J.prototype.D=function(){if(this.C)for(;this.C.length;)this.C.shift()()};function oe(a,b){this.type=a;this.i=this.target=b;this.defaultPrevented=this.l=!1}
oe.prototype.stopPropagation=function(){this.l=!0};
oe.prototype.preventDefault=function(){this.defaultPrevented=!0};function pe(a){var b=B("window.location.href");null==a&&(a='Unknown Error of type "null/undefined"');if("string"===typeof a)return{message:a,name:"Unknown error",lineNumber:"Not available",fileName:b,stack:"Not available"};var c=!1;try{var d=a.lineNumber||a.line||"Not available"}catch(g){d="Not available",c=!0}try{var e=a.fileName||a.filename||a.sourceURL||y.$googDebugFname||b}catch(g){e="Not available",c=!0}b=qe(a);if(!(!c&&a.lineNumber&&a.fileName&&a.stack&&a.message&&a.name)){c=a.message;if(null==
c){if(a.constructor&&a.constructor instanceof Function){if(a.constructor.name)c=a.constructor.name;else if(c=a.constructor,re[c])c=re[c];else{c=String(c);if(!re[c]){var f=/function\s+([^\(]+)/m.exec(c);re[c]=f?f[1]:"[Anonymous]"}c=re[c]}c='Unknown Error of type "'+c+'"'}else c="Unknown Error of unknown type";"function"===typeof a.toString&&Object.prototype.toString!==a.toString&&(c+=": "+a.toString())}return{message:c,name:a.name||"UnknownError",lineNumber:d,fileName:e,stack:b||"Not available"}}a.stack=
b;return{message:a.message,name:a.name,lineNumber:a.lineNumber,fileName:a.fileName,stack:a.stack}}
function qe(a,b){b||(b={});b[se(a)]=!0;var c=a.stack||"";(a=a.cause)&&!b[se(a)]&&(c+="\nCaused by: ",a.stack&&0==a.stack.indexOf(a.toString())||(c+="string"===typeof a?a:a.message+"\n"),c+=qe(a,b));return c}
function se(a){var b="";"function"===typeof a.toString&&(b=""+a);return b+a.stack}
var re={};var te=function(){if(!y.addEventListener||!Object.defineProperty)return!1;var a=!1,b=Object.defineProperty({},"passive",{get:function(){a=!0}});
try{y.addEventListener("test",function(){},b),y.removeEventListener("test",function(){},b)}catch(c){}return a}();function ue(a,b){oe.call(this,a?a.type:"");this.relatedTarget=this.i=this.target=null;this.button=this.screenY=this.screenX=this.clientY=this.clientX=0;this.key="";this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=!1;this.state=null;this.pointerId=0;this.pointerType="";this.j=null;a&&this.init(a,b)}
Za(ue,oe);var ve={2:"touch",3:"pen",4:"mouse"};
ue.prototype.init=function(a,b){var c=this.type=a.type,d=a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:null;this.target=a.target||a.srcElement;this.i=b;if(b=a.relatedTarget){if(Mc){a:{try{Gc(b.nodeName);var e=!0;break a}catch(f){}e=!1}e||(b=null)}}else"mouseover"==c?b=a.fromElement:"mouseout"==c&&(b=a.toElement);this.relatedTarget=b;d?(this.clientX=void 0!==d.clientX?d.clientX:d.pageX,this.clientY=void 0!==d.clientY?d.clientY:d.pageY,this.screenX=d.screenX||0,this.screenY=d.screenY||
0):(this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY,this.screenX=a.screenX||0,this.screenY=a.screenY||0);this.button=a.button;this.keyCode=a.keyCode||0;this.key=a.key||"";this.charCode=a.charCode||("keypress"==c?a.keyCode:0);this.ctrlKey=a.ctrlKey;this.altKey=a.altKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.pointerId=a.pointerId||0;this.pointerType="string"===typeof a.pointerType?a.pointerType:ve[a.pointerType]||"";this.state=a.state;
this.j=a;a.defaultPrevented&&ue.X.preventDefault.call(this)};
ue.prototype.stopPropagation=function(){ue.X.stopPropagation.call(this);this.j.stopPropagation?this.j.stopPropagation():this.j.cancelBubble=!0};
ue.prototype.preventDefault=function(){ue.X.preventDefault.call(this);var a=this.j;a.preventDefault?a.preventDefault():a.returnValue=!1};var we="closure_listenable_"+(1E6*Math.random()|0);var xe=0;function ye(a,b,c,d,e){this.listener=a;this.proxy=null;this.src=b;this.type=c;this.capture=!!d;this.cb=e;this.key=++xe;this.Ka=this.Xa=!1}
function Ee(a){a.Ka=!0;a.listener=null;a.proxy=null;a.src=null;a.cb=null}
;function Fe(a){this.src=a;this.listeners={};this.i=0}
Fe.prototype.add=function(a,b,c,d,e){var f=a.toString();a=this.listeners[f];a||(a=this.listeners[f]=[],this.i++);var g=Ge(a,b,d,e);-1<g?(b=a[g],c||(b.Xa=!1)):(b=new ye(b,this.src,f,!!d,e),b.Xa=c,a.push(b));return b};
Fe.prototype.remove=function(a,b,c,d){a=a.toString();if(!(a in this.listeners))return!1;var e=this.listeners[a];b=Ge(e,b,c,d);return-1<b?(Ee(e[b]),Array.prototype.splice.call(e,b,1),0==e.length&&(delete this.listeners[a],this.i--),!0):!1};
function He(a,b){var c=b.type;c in a.listeners&&lb(a.listeners[c],b)&&(Ee(b),0==a.listeners[c].length&&(delete a.listeners[c],a.i--))}
function Ge(a,b,c,d){for(var e=0;e<a.length;++e){var f=a[e];if(!f.Ka&&f.listener==b&&f.capture==!!c&&f.cb==d)return e}return-1}
;var Ie="closure_lm_"+(1E6*Math.random()|0),Je={},Ke=0;function Le(a,b,c,d,e){if(d&&d.once)Me(a,b,c,d,e);else if(Array.isArray(b))for(var f=0;f<b.length;f++)Le(a,b[f],c,d,e);else c=Ne(c),a&&a[we]?a.Z(b,c,Qa(d)?!!d.capture:!!d,e):Oe(a,b,c,!1,d,e)}
function Oe(a,b,c,d,e,f){if(!b)throw Error("Invalid event type");var g=Qa(e)?!!e.capture:!!e,h=Pe(a);h||(a[Ie]=h=new Fe(a));c=h.add(b,c,d,g,f);if(!c.proxy){d=Qe();c.proxy=d;d.src=a;d.listener=c;if(a.addEventListener)te||(e=g),void 0===e&&(e=!1),a.addEventListener(b.toString(),d,e);else if(a.attachEvent)a.attachEvent(Re(b.toString()),d);else if(a.addListener&&a.removeListener)a.addListener(d);else throw Error("addEventListener and attachEvent are unavailable.");Ke++}}
function Qe(){function a(c){return b.call(a.src,a.listener,c)}
var b=Se;return a}
function Me(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)Me(a,b[f],c,d,e);else c=Ne(c),a&&a[we]?a.m.add(String(b),c,!0,Qa(d)?!!d.capture:!!d,e):Oe(a,b,c,!0,d,e)}
function Te(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)Te(a,b[f],c,d,e);else(d=Qa(d)?!!d.capture:!!d,c=Ne(c),a&&a[we])?a.m.remove(String(b),c,d,e):a&&(a=Pe(a))&&(b=a.listeners[b.toString()],a=-1,b&&(a=Ge(b,c,d,e)),(c=-1<a?b[a]:null)&&Ue(c))}
function Ue(a){if("number"!==typeof a&&a&&!a.Ka){var b=a.src;if(b&&b[we])He(b.m,a);else{var c=a.type,d=a.proxy;b.removeEventListener?b.removeEventListener(c,d,a.capture):b.detachEvent?b.detachEvent(Re(c),d):b.addListener&&b.removeListener&&b.removeListener(d);Ke--;(c=Pe(b))?(He(c,a),0==c.i&&(c.src=null,b[Ie]=null)):Ee(a)}}}
function Re(a){return a in Je?Je[a]:Je[a]="on"+a}
function Se(a,b){if(a.Ka)a=!0;else{b=new ue(b,this);var c=a.listener,d=a.cb||a.src;a.Xa&&Ue(a);a=c.call(d,b)}return a}
function Pe(a){a=a[Ie];return a instanceof Fe?a:null}
var Ve="__closure_events_fn_"+(1E9*Math.random()>>>0);function Ne(a){if("function"===typeof a)return a;a[Ve]||(a[Ve]=function(b){return a.handleEvent(b)});
return a[Ve]}
;function We(){J.call(this);this.m=new Fe(this);this.Ac=this;this.ka=null}
Za(We,J);We.prototype[we]=!0;We.prototype.addEventListener=function(a,b,c,d){Le(this,a,b,c,d)};
We.prototype.removeEventListener=function(a,b,c,d){Te(this,a,b,c,d)};
function Xe(a,b){var c=a.ka;if(c){var d=[];for(var e=1;c;c=c.ka)d.push(c),++e}a=a.Ac;c=b.type||b;"string"===typeof b?b=new oe(b,a):b instanceof oe?b.target=b.target||a:(e=b,b=new oe(c,a),yb(b,e));e=!0;if(d)for(var f=d.length-1;!b.l&&0<=f;f--){var g=b.i=d[f];e=Ye(g,c,!0,b)&&e}b.l||(g=b.i=a,e=Ye(g,c,!0,b)&&e,b.l||(e=Ye(g,c,!1,b)&&e));if(d)for(f=0;!b.l&&f<d.length;f++)g=b.i=d[f],e=Ye(g,c,!1,b)&&e}
We.prototype.D=function(){We.X.D.call(this);if(this.m){var a=this.m,b=0,c;for(c in a.listeners){for(var d=a.listeners[c],e=0;e<d.length;e++)++b,Ee(d[e]);delete a.listeners[c];a.i--}}this.ka=null};
We.prototype.Z=function(a,b,c,d){return this.m.add(String(a),b,!1,c,d)};
function Ye(a,b,c,d){b=a.m.listeners[String(b)];if(!b)return!0;b=b.concat();for(var e=!0,f=0;f<b.length;++f){var g=b[f];if(g&&!g.Ka&&g.capture==c){var h=g.listener,k=g.cb||g.src;g.Xa&&He(a.m,g);e=!1!==h.call(k,d)&&e}}return e&&!d.defaultPrevented}
;function Ze(a,b){this.l=a;this.m=b;this.j=0;this.i=null}
Ze.prototype.get=function(){if(0<this.j){this.j--;var a=this.i;this.i=a.next;a.next=null}else a=this.l();return a};
function $e(a,b){a.m(b);100>a.j&&(a.j++,b.next=a.i,a.i=b)}
;function af(a,b){return a+Math.random()*(b-a)}
;function bf(a,b){this.x=void 0!==a?a:0;this.y=void 0!==b?b:0}
l=bf.prototype;l.clone=function(){return new bf(this.x,this.y)};
l.equals=function(a){return a instanceof bf&&(this==a?!0:this&&a?this.x==a.x&&this.y==a.y:!1)};
l.ceil=function(){this.x=Math.ceil(this.x);this.y=Math.ceil(this.y);return this};
l.floor=function(){this.x=Math.floor(this.x);this.y=Math.floor(this.y);return this};
l.round=function(){this.x=Math.round(this.x);this.y=Math.round(this.y);return this};
l.scale=function(a,b){this.x*=a;this.y*="number"===typeof b?b:a;return this};function cf(a,b){this.width=a;this.height=b}
l=cf.prototype;l.clone=function(){return new cf(this.width,this.height)};
l.aspectRatio=function(){return this.width/this.height};
l.isEmpty=function(){return!(this.width*this.height)};
l.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
l.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
l.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};
l.scale=function(a,b){this.width*=a;this.height*="number"===typeof b?b:a;return this};function df(a){var b=document;return"string"===typeof a?b.getElementById(a):a}
function ef(a){var b=document;a=String(a);"application/xhtml+xml"===b.contentType&&(a=a.toLowerCase());return b.createElement(a)}
function ff(a,b){for(var c=0;a;){if(b(a))return a;a=a.parentNode;c++}return null}
;var gf;function hf(){var a=y.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!C("Presto")&&(a=function(){var e=ef("IFRAME");e.style.display="none";document.documentElement.appendChild(e);var f=e.contentWindow;e=f.document;e.open();e.close();var g="callImmediate"+Math.random(),h="file:"==f.location.protocol?"*":f.location.protocol+"//"+f.location.host;e=Wa(function(k){if(("*"==h||k.origin==h)&&k.data==g)this.port1.onmessage()},this);
f.addEventListener("message",e,!1);this.port1={};this.port2={postMessage:function(){f.postMessage(g,h)}}});
if("undefined"!==typeof a&&!Ub()){var b=new a,c={},d=c;b.port1.onmessage=function(){if(void 0!==c.next){c=c.next;var e=c.Qb;c.Qb=null;e()}};
return function(e){d.next={Qb:e};d=d.next;b.port2.postMessage(0)}}return function(e){y.setTimeout(e,0)}}
;function jf(a){y.setTimeout(function(){throw a;},0)}
;function kf(){this.j=this.i=null}
kf.prototype.add=function(a,b){var c=lf.get();c.set(a,b);this.j?this.j.next=c:this.i=c;this.j=c};
kf.prototype.remove=function(){var a=null;this.i&&(a=this.i,this.i=this.i.next,this.i||(this.j=null),a.next=null);return a};
var lf=new Ze(function(){return new mf},function(a){return a.reset()});
function mf(){this.next=this.scope=this.i=null}
mf.prototype.set=function(a,b){this.i=a;this.scope=b;this.next=null};
mf.prototype.reset=function(){this.next=this.scope=this.i=null};var nf,of=!1,pf=new kf;function qf(a,b){nf||rf();of||(nf(),of=!0);pf.add(a,b)}
function rf(){if(y.Promise&&y.Promise.resolve){var a=y.Promise.resolve(void 0);nf=function(){a.then(sf)}}else nf=function(){var b=sf;
"function"!==typeof y.setImmediate||y.Window&&y.Window.prototype&&!C("Edge")&&y.Window.prototype.setImmediate==y.setImmediate?(gf||(gf=hf()),gf(b)):y.setImmediate(b)}}
function sf(){for(var a;a=pf.remove();){try{a.i.call(a.scope)}catch(b){jf(b)}$e(lf,a)}of=!1}
;function tf(a){this.i=0;this.C=void 0;this.m=this.j=this.l=null;this.o=this.s=!1;if(a!=cb)try{var b=this;a.call(void 0,function(c){uf(b,2,c)},function(c){uf(b,3,c)})}catch(c){uf(this,3,c)}}
function vf(){this.next=this.context=this.onRejected=this.j=this.i=null;this.l=!1}
vf.prototype.reset=function(){this.context=this.onRejected=this.j=this.i=null;this.l=!1};
var wf=new Ze(function(){return new vf},function(a){a.reset()});
function xf(a,b,c){var d=wf.get();d.j=a;d.onRejected=b;d.context=c;return d}
function yf(a){return new tf(function(b,c){c(a)})}
tf.prototype.then=function(a,b,c){return zf(this,"function"===typeof a?a:null,"function"===typeof b?b:null,c)};
tf.prototype.$goog_Thenable=!0;l=tf.prototype;l.kb=function(a,b){return zf(this,null,a,b)};
l.catch=tf.prototype.kb;l.cancel=function(a){if(0==this.i){var b=new Af(a);qf(function(){Bf(this,b)},this)}};
function Bf(a,b){if(0==a.i)if(a.l){var c=a.l;if(c.j){for(var d=0,e=null,f=null,g=c.j;g&&(g.l||(d++,g.i==a&&(e=g),!(e&&1<d)));g=g.next)e||(f=g);e&&(0==c.i&&1==d?Bf(c,b):(f?(d=f,d.next==c.m&&(c.m=d),d.next=d.next.next):Cf(c),Df(c,e,3,b)))}a.l=null}else uf(a,3,b)}
function Ef(a,b){a.j||2!=a.i&&3!=a.i||Ff(a);a.m?a.m.next=b:a.j=b;a.m=b}
function zf(a,b,c,d){var e=xf(null,null,null);e.i=new tf(function(f,g){e.j=b?function(h){try{var k=b.call(d,h);f(k)}catch(m){g(m)}}:f;
e.onRejected=c?function(h){try{var k=c.call(d,h);void 0===k&&h instanceof Af?g(h):f(k)}catch(m){g(m)}}:g});
e.i.l=a;Ef(a,e);return e.i}
l.zd=function(a){this.i=0;uf(this,2,a)};
l.Ad=function(a){this.i=0;uf(this,3,a)};
function uf(a,b,c){if(0==a.i){a===c&&(b=3,c=new TypeError("Promise cannot resolve to itself"));a.i=1;a:{var d=c,e=a.zd,f=a.Ad;if(d instanceof tf){Ef(d,xf(e||cb,f||null,a));var g=!0}else{if(d)try{var h=!!d.$goog_Thenable}catch(m){h=!1}else h=!1;if(h)d.then(e,f,a),g=!0;else{if(Qa(d))try{var k=d.then;if("function"===typeof k){Gf(d,k,e,f,a);g=!0;break a}}catch(m){f.call(a,m);g=!0;break a}g=!1}}}g||(a.C=c,a.i=b,a.l=null,Ff(a),3!=b||c instanceof Af||Hf(a,c))}}
function Gf(a,b,c,d,e){function f(k){h||(h=!0,d.call(e,k))}
function g(k){h||(h=!0,c.call(e,k))}
var h=!1;try{b.call(a,g,f)}catch(k){f(k)}}
function Ff(a){a.s||(a.s=!0,qf(a.Oc,a))}
function Cf(a){var b=null;a.j&&(b=a.j,a.j=b.next,b.next=null);a.j||(a.m=null);return b}
l.Oc=function(){for(var a;a=Cf(this);)Df(this,a,this.i,this.C);this.s=!1};
function Df(a,b,c,d){if(3==c&&b.onRejected&&!b.l)for(;a&&a.o;a=a.l)a.o=!1;if(b.i)b.i.l=null,If(b,c,d);else try{b.l?b.j.call(b.context):If(b,c,d)}catch(e){Jf.call(null,e)}$e(wf,b)}
function If(a,b,c){2==b?a.j.call(a.context,c):a.onRejected&&a.onRejected.call(a.context,c)}
function Hf(a,b){a.o=!0;qf(function(){a.o&&Jf.call(null,b)})}
var Jf=jf;function Af(a){ab.call(this,a)}
Za(Af,ab);Af.prototype.name="cancel";function Kf(a,b){We.call(this);this.l=a||1;this.j=b||y;this.o=Wa(this.xd,this);this.s=Date.now()}
Za(Kf,We);l=Kf.prototype;l.enabled=!1;l.ba=null;function Lf(a,b){a.l=b;a.ba&&a.enabled?(a.stop(),a.start()):a.ba&&a.stop()}
l.xd=function(){if(this.enabled){var a=Date.now()-this.s;0<a&&a<.8*this.l?this.ba=this.j.setTimeout(this.o,this.l-a):(this.ba&&(this.j.clearTimeout(this.ba),this.ba=null),Xe(this,"tick"),this.enabled&&(this.stop(),this.start()))}};
l.start=function(){this.enabled=!0;this.ba||(this.ba=this.j.setTimeout(this.o,this.l),this.s=Date.now())};
l.stop=function(){this.enabled=!1;this.ba&&(this.j.clearTimeout(this.ba),this.ba=null)};
l.D=function(){Kf.X.D.call(this);this.stop();delete this.j};
function Mf(a,b,c){if("function"===typeof a)c&&(a=Wa(a,c));else if(a&&"function"==typeof a.handleEvent)a=Wa(a.handleEvent,a);else throw Error("Invalid listener argument");return 2147483647<Number(b)?-1:y.setTimeout(a,b||0)}
;function Nf(a){this.C=a;this.i=new Map;this.s=new Set;this.l=0;this.m=100;this.flushInterval=3E4;this.j=new Kf(this.flushInterval);this.j.Z("tick",this.mb,!1,this);this.o=!1}
l=Nf.prototype;l.pc=function(a){this.o=a;this.m=1};
function Of(a){a.j.enabled||a.j.start();a.l++;a.l>=a.m&&a.mb()}
l.mb=function(){var a=this.i.values();a=[].concat(ia(a)).filter(function(b){return b.ya.size});
a.length&&this.C.flush(a,this.o);Pf(a);this.l=0;this.j.enabled&&this.j.stop()};
l.Ec=function(a){var b=Ja.apply(1,arguments);this.i.has(a)||this.i.set(a,new ie(a,b))};
l.Ob=function(a){var b=Ja.apply(1,arguments);this.i.has(a)||this.i.set(a,new je(a,b))};
function Qf(a,b){return a.s.has(b)?void 0:a.i.get(b)}
l.Ib=function(a){this.yc.apply(this,[a,1].concat(ia(Ja.apply(1,arguments))))};
l.yc=function(a,b){var c=Ja.apply(2,arguments),d=Qf(this,a);d&&d instanceof ie&&(d.l(b,c),Of(this))};
l.lb=function(a,b){var c=Ja.apply(2,arguments),d=Qf(this,a);d&&d instanceof je&&(d.l(b,c),Of(this))};
function Pf(a){for(var b=0;b<a.length;b++)a[b].clear()}
;function Rf(a){this.i=a;this.i.Ob("/client_streamz/bg/fil",{qb:3,pb:"rk"})}
function Sf(a){this.i=a;this.i.Ec("/client_streamz/bg/fsc",{qb:3,pb:"rk"})}
function Tf(a){this.i=a;this.i.Ob("/client_streamz/bg/fsl",{qb:3,pb:"rk"})}
;function Uf(a){I.call(this,a,-1,Vf)}
t(Uf,I);function Wf(a){I.call(this,a,-1,Xf)}
t(Wf,I);function Yf(a){I.call(this,a)}
t(Yf,I);function Zf(a){I.call(this,a)}
t(Zf,I);var Vf=[3,6,4],Xf=[1],$f=[1,2,3],ag=[1,2,3];function bg(a){I.call(this,a,-1,cg)}
t(bg,I);var cg=[1];function dg(a){if(!a)return"";if(/^about:(?:blank|srcdoc)$/.test(a))return window.origin||"";a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");-1!=c&&(b=b.substring(0,c));c=a.substring(0,a.indexOf("://"));if(!c)throw Error("URI is missing protocol: "+a);if("http"!==c&&"https"!==c&&"chrome-extension"!==c&&"moz-extension"!==c&&"file"!==c&&"android-app"!==
c&&"chrome-search"!==c&&"chrome-untrusted"!==c&&"chrome"!==c&&"app"!==c&&"devtools"!==c)throw Error("Invalid URI scheme in origin: "+c);a="";var d=b.indexOf(":");if(-1!=d){var e=b.substring(d+1);b=b.substring(0,d);if("http"===c&&"80"!==e||"https"===c&&"443"!==e)a=":"+e}return c+"://"+b+a}
;function eg(){function a(){e[0]=1732584193;e[1]=4023233417;e[2]=2562383102;e[3]=271733878;e[4]=3285377520;q=m=0}
function b(r){for(var w=g,u=0;64>u;u+=4)w[u/4]=r[u]<<24|r[u+1]<<16|r[u+2]<<8|r[u+3];for(u=16;80>u;u++)r=w[u-3]^w[u-8]^w[u-14]^w[u-16],w[u]=(r<<1|r>>>31)&4294967295;r=e[0];var A=e[1],E=e[2],F=e[3],O=e[4];for(u=0;80>u;u++){if(40>u)if(20>u){var N=F^A&(E^F);var R=1518500249}else N=A^E^F,R=1859775393;else 60>u?(N=A&E|F&(A|E),R=2400959708):(N=A^E^F,R=3395469782);N=((r<<5|r>>>27)&4294967295)+N+O+R+w[u]&4294967295;O=F;F=E;E=(A<<30|A>>>2)&4294967295;A=r;r=N}e[0]=e[0]+r&4294967295;e[1]=e[1]+A&4294967295;e[2]=
e[2]+E&4294967295;e[3]=e[3]+F&4294967295;e[4]=e[4]+O&4294967295}
function c(r,w){if("string"===typeof r){r=unescape(encodeURIComponent(r));for(var u=[],A=0,E=r.length;A<E;++A)u.push(r.charCodeAt(A));r=u}w||(w=r.length);u=0;if(0==m)for(;u+64<w;)b(r.slice(u,u+64)),u+=64,q+=64;for(;u<w;)if(f[m++]=r[u++],q++,64==m)for(m=0,b(f);u+64<w;)b(r.slice(u,u+64)),u+=64,q+=64}
function d(){var r=[],w=8*q;56>m?c(h,56-m):c(h,64-(m-56));for(var u=63;56<=u;u--)f[u]=w&255,w>>>=8;b(f);for(u=w=0;5>u;u++)for(var A=24;0<=A;A-=8)r[w++]=e[u]>>A&255;return r}
for(var e=[],f=[],g=[],h=[128],k=1;64>k;++k)h[k]=0;var m,q;a();return{reset:a,update:c,digest:d,Kc:function(){for(var r=d(),w="",u=0;u<r.length;u++)w+="0123456789ABCDEF".charAt(Math.floor(r[u]/16))+"0123456789ABCDEF".charAt(r[u]%16);return w}}}
;function fg(a,b,c){var d=String(y.location.href);return d&&a&&b?[b,gg(dg(d),a,c||null)].join(" "):null}
function gg(a,b,c){var d=[],e=[];if(1==(Array.isArray(c)?2:1))return e=[b,a],fb(d,function(h){e.push(h)}),hg(e.join(" "));
var f=[],g=[];fb(c,function(h){g.push(h.key);f.push(h.value)});
c=Math.floor((new Date).getTime()/1E3);e=0==f.length?[c,b,a]:[f.join(":"),c,b,a];fb(d,function(h){e.push(h)});
a=hg(e.join(" "));a=[c,a];0==g.length||a.push(g.join(""));return a.join("_")}
function hg(a){var b=eg();b.update(a);return b.Kc().toLowerCase()}
;var ig={};function jg(a){this.i=a||{cookie:""}}
l=jg.prototype;l.isEnabled=function(){if(!y.navigator.cookieEnabled)return!1;if(!this.isEmpty())return!0;this.set("TESTCOOKIESENABLED","1",{fb:60});if("1"!==this.get("TESTCOOKIESENABLED"))return!1;this.remove("TESTCOOKIESENABLED");return!0};
l.set=function(a,b,c){var d=!1;if("object"===typeof c){var e=c.qr;d=c.secure||!1;var f=c.domain||void 0;var g=c.path||void 0;var h=c.fb}if(/[;=\s]/.test(a))throw Error('Invalid cookie name "'+a+'"');if(/[;\r\n]/.test(b))throw Error('Invalid cookie value "'+b+'"');void 0===h&&(h=-1);c=f?";domain="+f:"";g=g?";path="+g:"";d=d?";secure":"";h=0>h?"":0==h?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date(Date.now()+1E3*h)).toUTCString();this.i.cookie=a+"="+b+c+g+h+d+(null!=e?";samesite="+
e:"")};
l.get=function(a,b){for(var c=a+"=",d=(this.i.cookie||"").split(";"),e=0,f;e<d.length;e++){f=Mb(d[e]);if(0==f.lastIndexOf(c,0))return f.slice(c.length);if(f==a)return""}return b};
l.remove=function(a,b,c){var d=void 0!==this.get(a);this.set(a,"",{fb:0,path:b,domain:c});return d};
l.ub=function(){return kg(this).keys};
l.isEmpty=function(){return!this.i.cookie};
l.clear=function(){for(var a=kg(this).keys,b=a.length-1;0<=b;b--)this.remove(a[b])};
function kg(a){a=(a.i.cookie||"").split(";");for(var b=[],c=[],d,e,f=0;f<a.length;f++)e=Mb(a[f]),d=e.indexOf("="),-1==d?(b.push(""),c.push(e)):(b.push(e.substring(0,d)),c.push(e.substring(d+1)));return{keys:b,values:c}}
var lg=new jg("undefined"==typeof document?null:document);function mg(a){return!!ig.FPA_SAMESITE_PHASE2_MOD||!(void 0===a||!a)}
function ng(a){a=void 0===a?!1:a;var b=y.__SAPISID||y.__APISID||y.__3PSAPISID||y.__OVERRIDE_SID;mg(a)&&(b=b||y.__1PSAPISID);if(b)return!0;var c=new jg(document);b=c.get("SAPISID")||c.get("APISID")||c.get("__Secure-3PAPISID")||c.get("SID");mg(a)&&(b=b||c.get("__Secure-1PAPISID"));return!!b}
function og(a,b,c,d){(a=y[a])||(a=(new jg(document)).get(b));return a?fg(a,c,d):null}
function pg(a,b){b=void 0===b?!1:b;var c=dg(String(y.location.href)),d=[];if(ng(b)){c=0==c.indexOf("https:")||0==c.indexOf("chrome-extension:")||0==c.indexOf("moz-extension:");var e=c?y.__SAPISID:y.__APISID;e||(e=new jg(document),e=e.get(c?"SAPISID":"APISID")||e.get("__Secure-3PAPISID"));(e=e?fg(e,c?"SAPISIDHASH":"APISIDHASH",a):null)&&d.push(e);c&&mg(b)&&((b=og("__1PSAPISID","__Secure-1PAPISID","SAPISID1PHASH",a))&&d.push(b),(a=og("__3PSAPISID","__Secure-3PAPISID","SAPISID3PHASH",a))&&d.push(a))}return 0==
d.length?null:d.join(" ")}
;function qg(a){I.call(this,a,-1,rg)}
t(qg,I);var rg=[2];function sg(a){this.i=this.j=this.l=a}
sg.prototype.reset=function(){this.i=this.j=this.l};
sg.prototype.getValue=function(){return this.j};function tg(a){var b=[];ug(new vg,a,b);return b.join("")}
function vg(){}
function ug(a,b,c){if(null==b)c.push("null");else{if("object"==typeof b){if(Array.isArray(b)){var d=b;b=d.length;c.push("[");for(var e="",f=0;f<b;f++)c.push(e),ug(a,d[f],c),e=",";c.push("]");return}if(b instanceof String||b instanceof Number||b instanceof Boolean)b=b.valueOf();else{c.push("{");e="";for(d in b)Object.prototype.hasOwnProperty.call(b,d)&&(f=b[d],"function"!=typeof f&&(c.push(e),wg(d,c),c.push(":"),ug(a,f,c),e=","));c.push("}");return}}switch(typeof b){case "string":wg(b,c);break;case "number":c.push(isFinite(b)&&
!isNaN(b)?String(b):"null");break;case "boolean":c.push(String(b));break;case "function":c.push("null");break;default:throw Error("Unknown type: "+typeof b);}}}
var xg={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\v":"\\u000b"},yg=/\uffff/.test("\uffff")?/[\\"\x00-\x1f\x7f-\uffff]/g:/[\\"\x00-\x1f\x7f-\xff]/g;function wg(a,b){b.push('"',a.replace(yg,function(c){var d=xg[c];d||(d="\\u"+(c.charCodeAt(0)|65536).toString(16).slice(1),xg[c]=d);return d}),'"')}
;function zg(){}
zg.prototype.i=null;zg.prototype.getOptions=function(){var a;(a=this.i)||(a={},Ag(this)&&(a[0]=!0,a[1]=!0),a=this.i=a);return a};var Bg;function Cg(){}
Za(Cg,zg);function Dg(a){return(a=Ag(a))?new ActiveXObject(a):new XMLHttpRequest}
function Ag(a){if(!a.j&&"undefined"==typeof XMLHttpRequest&&"undefined"!=typeof ActiveXObject){for(var b=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],c=0;c<b.length;c++){var d=b[c];try{return new ActiveXObject(d),a.j=d}catch(e){}}throw Error("Could not create ActiveXObject. ActiveX might be disabled, or MSXML might not be installed");}return a.j}
Bg=new Cg;function Eg(a){We.call(this);this.headers=new Map;this.K=a||null;this.j=!1;this.J=this.B=null;this.o=this.T="";this.l=this.R=this.v=this.P=!1;this.s=0;this.G=null;this.ca="";this.V=this.W=!1}
Za(Eg,We);var Fg=/^https?$/i,Gg=["POST","PUT"],Hg=[];function Ig(a,b,c,d,e,f,g){var h=new Eg;Hg.push(h);b&&h.Z("complete",b);h.m.add("ready",h.Ic,!0,void 0,void 0);f&&(h.s=Math.max(0,f));g&&(h.W=g);h.send(a,c,d,e)}
l=Eg.prototype;l.Ic=function(){this.dispose();lb(Hg,this)};
l.send=function(a,b,c,d){if(this.B)throw Error("[goog.net.XhrIo] Object is active with another request="+this.T+"; newUri="+a);b=b?b.toUpperCase():"GET";this.T=a;this.o="";this.P=!1;this.j=!0;this.B=this.K?Dg(this.K):Dg(Bg);this.J=this.K?this.K.getOptions():Bg.getOptions();this.B.onreadystatechange=Wa(this.ic,this);try{this.getStatus(),this.R=!0,this.B.open(b,String(a),!0),this.R=!1}catch(g){this.getStatus();Jg(this,g);return}a=c||"";c=new Map(this.headers);if(d)if(Object.getPrototypeOf(d)===Object.prototype)for(var e in d)c.set(e,
d[e]);else if("function"===typeof d.keys&&"function"===typeof d.get){e=p(d.keys());for(var f=e.next();!f.done;f=e.next())f=f.value,c.set(f,d.get(f))}else throw Error("Unknown input type for opt_headers: "+String(d));d=Array.from(c.keys()).find(function(g){return"content-type"==g.toLowerCase()});
e=y.FormData&&a instanceof y.FormData;!(0<=eb(Gg,b))||d||e||c.set("Content-Type","application/x-www-form-urlencoded;charset=utf-8");b=p(c);for(d=b.next();!d.done;d=b.next())c=p(d.value),d=c.next().value,c=c.next().value,this.B.setRequestHeader(d,c);this.ca&&(this.B.responseType=this.ca);"withCredentials"in this.B&&this.B.withCredentials!==this.W&&(this.B.withCredentials=this.W);try{Kg(this),0<this.s&&(this.V=Lg(this.B),this.getStatus(),this.V?(this.B.timeout=this.s,this.B.ontimeout=Wa(this.uc,this)):
this.G=Mf(this.uc,this.s,this)),this.getStatus(),this.v=!0,this.B.send(a),this.v=!1}catch(g){this.getStatus(),Jg(this,g)}};
function Lg(a){return Kc&&Vc()&&"number"===typeof a.timeout&&void 0!==a.ontimeout}
l.uc=function(){"undefined"!=typeof Ma&&this.B&&(this.o="Timed out after "+this.s+"ms, aborting",this.getStatus(),Xe(this,"timeout"),this.abort(8))};
function Jg(a,b){a.j=!1;a.B&&(a.l=!0,a.B.abort(),a.l=!1);a.o=b;Mg(a);Ng(a)}
function Mg(a){a.P||(a.P=!0,Xe(a,"complete"),Xe(a,"error"))}
l.abort=function(){this.B&&this.j&&(this.getStatus(),this.j=!1,this.l=!0,this.B.abort(),this.l=!1,Xe(this,"complete"),Xe(this,"abort"),Ng(this))};
l.D=function(){this.B&&(this.j&&(this.j=!1,this.l=!0,this.B.abort(),this.l=!1),Ng(this,!0));Eg.X.D.call(this)};
l.ic=function(){this.i()||(this.R||this.v||this.l?Og(this):this.Zc())};
l.Zc=function(){Og(this)};
function Og(a){if(a.j&&"undefined"!=typeof Ma)if(a.J[1]&&4==Pg(a)&&2==a.getStatus())a.getStatus();else if(a.v&&4==Pg(a))Mf(a.ic,0,a);else if(Xe(a,"readystatechange"),a.isComplete()){a.getStatus();a.j=!1;try{if(Qg(a))Xe(a,"complete"),Xe(a,"success");else{try{var b=2<Pg(a)?a.B.statusText:""}catch(c){b=""}a.o=b+" ["+a.getStatus()+"]";Mg(a)}}finally{Ng(a)}}}
function Ng(a,b){if(a.B){Kg(a);var c=a.B,d=a.J[0]?function(){}:null;
a.B=null;a.J=null;b||Xe(a,"ready");try{c.onreadystatechange=d}catch(e){}}}
function Kg(a){a.B&&a.V&&(a.B.ontimeout=null);a.G&&(y.clearTimeout(a.G),a.G=null)}
l.isActive=function(){return!!this.B};
l.isComplete=function(){return 4==Pg(this)};
function Qg(a){var b=a.getStatus();a:switch(b){case 200:case 201:case 202:case 204:case 206:case 304:case 1223:var c=!0;break a;default:c=!1}if(!c){if(b=0===b)a=nc(1,String(a.T)),!a&&y.self&&y.self.location&&(a=y.self.location.protocol.slice(0,-1)),b=!Fg.test(a?a.toLowerCase():"");c=b}return c}
function Pg(a){return a.B?a.B.readyState:0}
l.getStatus=function(){try{return 2<Pg(this)?this.B.status:-1}catch(a){return-1}};
l.getLastError=function(){return"string"===typeof this.o?this.o:String(this.o)};function Rg(a){I.call(this,a)}
t(Rg,I);function Sg(a){I.call(this,a,-1,Vg)}
t(Sg,I);var Vg=[1];var Wg=["platform","platformVersion","architecture","model","uaFullVersion"];new Sg;function Xg(a){I.call(this,a)}
t(Xg,I);function Yg(a){I.call(this,a,31,Zg)}
t(Yg,I);var Zg=[3,20,27];function $g(a){I.call(this,a,17,ah)}
t($g,I);var ah=[3,5];function bh(a){I.call(this,a,6,ch)}
t(bh,I);var ch=[5];function dh(a){I.call(this,a)}
t(dh,I);var eh;eh=new function(a,b,c){this.j=a;this.fieldName=b;this.i=c;this.isRepeated=0;this.l=fe}(175237375,{er:0},dh);function fh(a,b,c,d,e,f,g,h,k,m,q){We.call(this);var r=this;this.P="";this.l=[];this.Mb="";this.Nb=this.ra=-1;this.Ua=!1;this.J=this.o=null;this.G=0;this.Bc=1;this.timeoutMillis=0;this.ca=!1;We.call(this);this.Lb=b||function(){};
this.v=new gh(a,f);this.zc=d;this.Ta=q;this.Cc=Ya(af,0,1);this.T=e||null;this.K=c||null;this.V=g||!1;this.pageId=k||null;this.logger=null;this.withCredentials=!h;this.Fa=f||!1;!this.Fa&&(65<=ac("Chromium")||45<=ac("Firefox")||12<=ac("Safari")||(Bc()||C("iPad")||C("iPod"))&&Cc());a=D(new Xg,1,1);hh(this.v,a);this.s=new sg(1E4);this.j=new Kf(this.s.getValue());me(this,this.j);m=ih(this,m);Le(this.j,"tick",m,!1,this);this.R=new Kf(6E5);me(this,this.R);Le(this.R,"tick",m,!1,this);this.V||this.R.start();
this.Fa||(Le(document,"visibilitychange",function(){"hidden"===document.visibilityState&&r.W()}),Le(document,"pagehide",this.W,!1,this))}
t(fh,We);function ih(a,b){return b?function(){b().then(function(){a.flush()})}:function(){a.flush()}}
fh.prototype.D=function(){this.W();We.prototype.D.call(this)};
function jh(a){a.T||(a.T=.01>a.Cc()?"https://www.google.com/log?format=json&hasfast=true":"https://play.google.com/log?format=json&hasfast=true");return a.T}
function kh(a,b){a.s=new sg(1>b?1:b);Lf(a.j,a.s.getValue())}
fh.prototype.log=function(a){a=a.clone();var b=this.Bc++;D(a,21,b);this.P&&D(a,26,this.P);if(!Nd(a,1)){b=a;var c=Date.now().toString();D(b,1,c)}null!=Nd(a,15,!1)||D(a,15,60*(new Date).getTimezoneOffset());this.o&&(b=this.o.clone(),G(a,qg,16,b));for(;1E3<=this.l.length;)this.l.shift(),++this.G;this.l.push(a);Xe(this,new lh(a));this.V||this.j.enabled||this.j.start()};
fh.prototype.flush=function(a,b){var c=this;if(0===this.l.length)a&&a();else if(this.ca)mh(this);else{var d=Date.now();if(this.Nb>d&&this.ra<d)b&&b("throttled");else{var e=nh(this.v,this.l,this.G);d={};var f=this.Lb();f&&(d.Authorization=f);var g=jh(this);this.K&&(d["X-Goog-AuthUser"]=this.K,g=wc(g,"authuser",this.K));this.pageId&&(d["X-Goog-PageId"]=this.pageId,g=wc(g,"pageId",this.pageId));if(f&&this.Mb===f)b&&b("stale-auth-token");else{this.l=[];this.j.enabled&&this.j.stop();this.G=0;var h=ce(e),
k;this.J&&this.J.isSupported(h.length)&&(k=this.J.compress(h));var m={url:g,body:h,Gc:1,Eb:d,requestType:"POST",withCredentials:this.withCredentials,timeoutMillis:this.timeoutMillis},q=function(u){c.s.reset();Lf(c.j,c.s.getValue());if(u){var A=null;try{var E=JSON.parse(u.replace(")]}'\n",""));A=new bh(E)}catch(F){}A&&(u=Number($d(Nd(A,1),"-1")),0<u&&(c.ra=Date.now(),c.Nb=c.ra+u),A=eh.l(A))&&(A=$d(Nd(A,1),-1),-1!=A&&(c.Ua||kh(c,A)))}a&&a()},r=function(u,A){var E=Vd(e,Yg,3),F=c.s;
F.i=Math.min(3E5,2*F.i);F.j=Math.min(3E5,F.i+Math.round(.2*(Math.random()-.5)*F.i));Lf(c.j,c.s.getValue());401===u&&f&&(c.Mb=f);void 0===A&&(A=500<=u&&600>u||401===u||0===u);A&&(c.l=E.concat(c.l),c.V||c.j.enabled||c.j.start());b&&b("net-send-failed",u)},w=function(){c.Ta?c.Ta.send(m,q,r):c.zc(m,q,r)};
k?k.then(function(u){m.Eb["Content-Encoding"]="gzip";m.Eb["Content-Type"]="application/binary";m.body=u;m.Gc=2;w()},function(){w()}):w()}}}};
fh.prototype.W=function(){this.flush()};
function mh(a){oh(a,function(b,c){b=wc(b,"format","json");b=window.navigator.sendBeacon(b,ce(c));a.ca&&!b&&(a.ca=!1);return b})}
function oh(a,b){if(0!==a.l.length){var c=Ac(jh(a),"format");c=uc(c,"auth",a.Lb(),"authuser",a.K||"0");for(var d=0;10>d&&a.l.length;++d){var e=a.l.slice(0,32),f=nh(a.v,e,a.G);if(!b(c,f))break;a.G=0;a.l=a.l.slice(e.length)}a.j.enabled&&a.j.stop()}}
function lh(){oe.call(this,"event-logged",void 0)}
t(lh,oe);function gh(a,b){this.j=b=void 0===b?!1:b;this.uach=this.locale=null;this.i=new $g;D(this.i,2,a);b||(this.locale=document.documentElement.getAttribute("lang"));hh(this,new Xg)}
function hh(a,b){G(a.i,Xg,1,b);Nd(b,1)||D(b,1,1);a.j||(b=ph(a),Nd(b,5)||D(b,5,a.locale));a.uach&&(b=ph(a),Sd(b,Sg,9)||G(b,Sg,9,a.uach))}
function qh(a,b){var c=void 0===c?Wg:c;b(window,c).then(function(d){a.uach=d;d=ph(a);G(d,Sg,9,a.uach);return!0}).catch(function(){return!1})}
function ph(a){a=Sd(a.i,Xg,1);var b=Sd(a,Rg,11);b||(b=new Rg,G(a,Rg,11,b));return b}
function nh(a,b,c){c=void 0===c?0:c;a=a.i.clone();var d=Date.now().toString();a=D(a,4,d);b=Xd(a,Yg,3,b);c&&D(b,14,c);return b}
;function rh(a,b,c){Ig(a.url,function(d){d=d.target;if(Qg(d)){try{var e=d.B?d.B.responseText:""}catch(f){e=""}b(e)}else c(d.getStatus())},a.requestType,a.body,a.Eb,a.timeoutMillis,a.withCredentials)}
;function sh(){this.l="https://play.google.com/log?format=json&hasfast=true";this.v=!1;this.o=rh;this.i=""}
;function th(){var a=void 0===a?"":a;var b=void 0===b?"":b;var c=new sh;c.i="";""!=a&&(c.l=a);b&&(c.j=b);a=new fh(1828,c.J?c.J:pg,"0",c.o,c.l,c.v,!1,c.R,void 0,void 0,c.s?c.s:void 0);c.N&&hh(a.v,c.N);if(c.j){b=c.j;var d=ph(a.v);D(d,7,b)}c.m&&(a.J=c.m);c.i&&(a.P=c.i);c.C&&((b=c.C)?(a.o||(a.o=new qg),b=ce(b),D(a.o,4,b)):a.o&&D(a.o,4,void 0,!1));c.K&&(b=c.K,a.o||(a.o=new qg),Pd(a.o,2,b));c.G&&(b=c.G,a.Ua=!0,kh(a,b));c.P&&qh(a.v,c.P);this.i=a}
th.prototype.flush=function(a){var b=a||[];if(b.length){a=new bg;for(var c=[],d=0;d<b.length;d++){var e=b[d],f=e;var g=new Uf;g=D(g,1,f.j);for(var h=f,k=[],m=0;m<h.i.length;m++)k.push(h.i[m].pb);g=Pd(g,3,k);h=[];k=[];m=p(f.ya.keys());for(var q=m.next();!q.done;q=m.next())k.push(q.value.split(","));for(m=0;m<k.length;m++){q=k[m];var r=f.m;for(var w=f.rb(q)||[],u=[],A=0;A<w.length;A++){var E=w[A];E=E&&E.Rb;var F=new Zf;switch(r){case 3:Qd(F,1,ag,Number(E));break;case 2:Qd(F,2,ag,Number(E))}u.push(F)}r=
u;for(w=0;w<r.length;w++){u=r[w];A=new Wf;u=G(A,Zf,2,u);A=q;E=[];F=f;for(var O=[],N=0;N<F.i.length;N++)O.push(F.i[N].qb);F=O;for(O=0;O<F.length;O++){N=F[O];var R=A[O],ca=new Yf;switch(N){case 3:Qd(ca,1,$f,String(R));break;case 2:Qd(ca,2,$f,Number(R));break;case 1:Qd(ca,3,$f,"true"==R)}E.push(ca)}Xd(u,Yf,1,E);h.push(u)}}Xd(g,Wf,4,h);c.push(g);e.clear()}Xd(a,Uf,1,c);b=this.i;a instanceof Yg?b.log(a):(c=new Yg,a=ce(a),a=D(c,8,a),b.log(a));this.i.flush()}};function uh(){this.o=vh();this.s=new th;this.i=new Nf(this.s);this.m=new Rf(this.i);this.j=new Sf(this.i);this.l=new Tf(this.i);this.Ba=window.document.location.hostname}
function vh(){var a,b,c;return null!=(c=null==(a=globalThis.performance)?void 0:null==(b=a.now)?void 0:b.call(a))?c:Date.now()}
;function wh(){var a=this;this.promise=new Promise(function(b,c){a.resolve=b;a.reject=c})}
;function xh(a){var b=this;this.ab=!1;if(a.ed){var c;this.sa=null!=(c=a.sa)?c:new uh}c=a.program;a=a.globalName;var d=new wh;this.j=d.promise;this.vd=p((0,y[a].a)(c,function(e,f){Promise.resolve().then(function(){var g;if(null!=(g=b.sa)){var h=vh()-g.o;g.m.i.lb("/client_streamz/bg/fil",h,g.Ba)}d.resolve({Fc:e,sd:f})})},!0)).next().value;
this.rd=d.promise.then(function(){})}
xh.prototype.snapshot=function(a){var b=this;if(this.ab)throw Error("Already disposed");var c=vh(),d;null!=(d=this.sa)&&d.j.i.Ib("/client_streamz/bg/fsc",d.Ba);return this.j.then(function(e){var f=e.Fc;return new Promise(function(g){f(function(h){var k;if(null!=(k=b.sa)){var m=vh()-c;k.l.i.lb("/client_streamz/bg/fsl",m,k.Ba)}g(h)},[a.Tb,
a.td])})})};
xh.prototype.dispose=function(){var a;null!=(a=this.sa)&&a.i.mb();this.ab=!0;this.j.then(function(b){(b=b.sd)&&b()})};
xh.prototype.i=function(){return this.ab};var yh=window;Db("csi.gstatic.com");Db("googleads.g.doubleclick.net");Db("partner.googleadservices.com");Db("pubads.g.doubleclick.net");Db("securepubads.g.doubleclick.net");Db("tpc.googlesyndication.com");/*

 SPDX-License-Identifier: Apache-2.0
*/
var zh;try{new URL("s://g"),zh=!0}catch(a){zh=!1}var Ah=zh;function Bh(a,b){a.src=Ib(b);var c,d;(c=(b=null==(d=(c=(a.ownerDocument&&a.ownerDocument.defaultView||window).document).querySelector)?void 0:d.call(c,"script[nonce]"))?b.nonce||b.getAttribute("nonce")||"":"")&&a.setAttribute("nonce",c)}
;function Ch(a){var b=Dh;if(b)for(var c in b)Object.prototype.hasOwnProperty.call(b,c)&&a(b[c],c,b)}
function Eh(){var a=[];Ch(function(b){a.push(b)});
return a}
var Dh={Od:"allow-forms",Pd:"allow-modals",Qd:"allow-orientation-lock",Rd:"allow-pointer-lock",Sd:"allow-popups",Td:"allow-popups-to-escape-sandbox",Ud:"allow-presentation",Vd:"allow-same-origin",Wd:"allow-scripts",Xd:"allow-top-navigation",Yd:"allow-top-navigation-by-user-activation"},Fh=db(function(){return Eh()});
function Gh(){var a=Hh(),b={};fb(Fh(),function(c){a.sandbox&&a.sandbox.supports&&a.sandbox.supports(c)&&(b[c]=!0)});
return b}
function Hh(){var a=void 0===a?document:a;return a.createElement("iframe")}
;function Ih(a){this.isValid=a}
function Jh(a){return new Ih(function(b){return b.substr(0,a.length+1).toLowerCase()===a+":"})}
var Kh=[Jh("data"),Jh("http"),Jh("https"),Jh("mailto"),Jh("ftp"),new Ih(function(a){return/^[^:]*([/?#]|$)/.test(a)})];function Lh(a){"number"==typeof a&&(a=Math.round(a)+"px");return a}
;var Mh=(new Date).getTime();var Nh="client_dev_domain client_dev_regex_map client_dev_root_url client_rollout_override expflag forcedCapability jsfeat jsmode mods".split(" ");ia(Nh);function Oh(a){We.call(this);var b=this;this.v=this.l=0;this.Y=null!=a?a:{S:function(e,f){return setTimeout(e,f)},
ea:function(e){clearTimeout(e)}};
var c,d;this.j=null!=(d=null==(c=window.navigator)?void 0:c.onLine)?d:!0;this.o=function(){return x(function(e){return v(e,Ph(b),0)})};
window.addEventListener("offline",this.o);window.addEventListener("online",this.o);this.v||Qh(this)}
t(Oh,We);function Rh(){var a=Sh;Oh.i||(Oh.i=new Oh(a));return Oh.i}
Oh.prototype.dispose=function(){window.removeEventListener("offline",this.o);window.removeEventListener("online",this.o);this.Y.ea(this.v);delete Oh.i};
Oh.prototype.L=function(){return this.j};
function Qh(a){a.v=a.Y.S(function(){var b;return x(function(c){if(1==c.i)return a.j?(null==(b=window.navigator)?0:b.onLine)?c.u(3):v(c,Ph(a),3):v(c,Ph(a),3);Qh(a);c.i=0})},3E4)}
function Ph(a,b){return a.s?a.s:a.s=new Promise(function(c){var d,e,f,g;return x(function(h){switch(h.i){case 1:return d=window.AbortController?new window.AbortController:void 0,f=null==(e=d)?void 0:e.signal,g=!1,ya(h,2,3),d&&(a.l=a.Y.S(function(){d.abort()},b||2E4)),v(h,fetch("/generate_204",{method:"HEAD",
signal:f}),5);case 5:g=!0;case 3:Ba(h);a.s=void 0;a.l&&(a.Y.ea(a.l),a.l=0);g!==a.j&&(a.j=g,a.j?Xe(a,"networkstatus-online"):Xe(a,"networkstatus-offline"));c(g);Ca(h);break;case 2:Aa(h),g=!1,h.u(3)}})})}
;var Th={li:"EMBEDDED_PLAYER_MODE_UNKNOWN",ii:"EMBEDDED_PLAYER_MODE_DEFAULT",ki:"EMBEDDED_PLAYER_MODE_PFP",ji:"EMBEDDED_PLAYER_MODE_PFL"},Uh={Bq:"WEB_DISPLAY_MODE_UNKNOWN",xq:"WEB_DISPLAY_MODE_BROWSER",zq:"WEB_DISPLAY_MODE_MINIMAL_UI",Aq:"WEB_DISPLAY_MODE_STANDALONE",yq:"WEB_DISPLAY_MODE_FULLSCREEN"};function Vh(){this.data_=[];this.i=-1}
Vh.prototype.set=function(a,b){b=void 0===b?!0:b;0<=a&&52>a&&Number.isInteger(a)&&this.data_[a]!==b&&(this.data_[a]=b,this.i=-1)};
Vh.prototype.get=function(a){return!!this.data_[a]};
function Wh(a){-1===a.i&&(a.i=ib(a.data_,function(b,c,d){return c?b+Math.pow(2,d):b},0));
return a.i}
;function Xh(a,b){this.i=a[y.Symbol.iterator]();this.j=b}
Xh.prototype[Symbol.iterator]=function(){return this};
Xh.prototype.next=function(){var a=this.i.next();return{value:a.done?void 0:this.j.call(void 0,a.value),done:a.done}};
function Yh(a,b){return new Xh(a,b)}
;function Zh(){this.blockSize=-1}
;function $h(){this.blockSize=-1;this.blockSize=64;this.i=[];this.o=[];this.s=[];this.l=[];this.l[0]=128;for(var a=1;a<this.blockSize;++a)this.l[a]=0;this.m=this.j=0;this.reset()}
Za($h,Zh);$h.prototype.reset=function(){this.i[0]=1732584193;this.i[1]=4023233417;this.i[2]=2562383102;this.i[3]=271733878;this.i[4]=3285377520;this.m=this.j=0};
function ai(a,b,c){c||(c=0);var d=a.s;if("string"===typeof b)for(var e=0;16>e;e++)d[e]=b.charCodeAt(c)<<24|b.charCodeAt(c+1)<<16|b.charCodeAt(c+2)<<8|b.charCodeAt(c+3),c+=4;else for(e=0;16>e;e++)d[e]=b[c]<<24|b[c+1]<<16|b[c+2]<<8|b[c+3],c+=4;for(e=16;80>e;e++){var f=d[e-3]^d[e-8]^d[e-14]^d[e-16];d[e]=(f<<1|f>>>31)&4294967295}b=a.i[0];c=a.i[1];var g=a.i[2],h=a.i[3],k=a.i[4];for(e=0;80>e;e++){if(40>e)if(20>e){f=h^c&(g^h);var m=1518500249}else f=c^g^h,m=1859775393;else 60>e?(f=c&g|h&(c|g),m=2400959708):
(f=c^g^h,m=3395469782);f=(b<<5|b>>>27)+f+k+m+d[e]&4294967295;k=h;h=g;g=(c<<30|c>>>2)&4294967295;c=b;b=f}a.i[0]=a.i[0]+b&4294967295;a.i[1]=a.i[1]+c&4294967295;a.i[2]=a.i[2]+g&4294967295;a.i[3]=a.i[3]+h&4294967295;a.i[4]=a.i[4]+k&4294967295}
$h.prototype.update=function(a,b){if(null!=a){void 0===b&&(b=a.length);for(var c=b-this.blockSize,d=0,e=this.o,f=this.j;d<b;){if(0==f)for(;d<=c;)ai(this,a,d),d+=this.blockSize;if("string"===typeof a)for(;d<b;){if(e[f]=a.charCodeAt(d),++f,++d,f==this.blockSize){ai(this,e);f=0;break}}else for(;d<b;)if(e[f]=a[d],++f,++d,f==this.blockSize){ai(this,e);f=0;break}}this.j=f;this.m+=b}};
$h.prototype.digest=function(){var a=[],b=8*this.m;56>this.j?this.update(this.l,56-this.j):this.update(this.l,this.blockSize-(this.j-56));for(var c=this.blockSize-1;56<=c;c--)this.o[c]=b&255,b/=256;ai(this,this.o);for(c=b=0;5>c;c++)for(var d=24;0<=d;d-=8)a[b]=this.i[c]>>d&255,++b;return a};function bi(a){return"string"==typeof a.className?a.className:a.getAttribute&&a.getAttribute("class")||""}
function ci(a,b){"string"==typeof a.className?a.className=b:a.setAttribute&&a.setAttribute("class",b)}
function di(a,b){a.classList?b=a.classList.contains(b):(a=a.classList?a.classList:bi(a).match(/\S+/g)||[],b=0<=eb(a,b));return b}
function ei(){var a=document.body;a.classList?a.classList.remove("inverted-hdpi"):di(a,"inverted-hdpi")&&ci(a,Array.prototype.filter.call(a.classList?a.classList:bi(a).match(/\S+/g)||[],function(b){return"inverted-hdpi"!=b}).join(" "))}
;function fi(){}
fi.prototype.next=function(){return gi};
var gi={done:!0,value:void 0};function hi(a){return{value:a,done:!1}}
fi.prototype.da=function(){return this};function ii(a){if(a instanceof ji||a instanceof ki||a instanceof li)return a;if("function"==typeof a.next)return new ji(function(){return a});
if("function"==typeof a[Symbol.iterator])return new ji(function(){return a[Symbol.iterator]()});
if("function"==typeof a.da)return new ji(function(){return a.da()});
throw Error("Not an iterator or iterable.");}
function ji(a){this.j=a}
ji.prototype.da=function(){return new ki(this.j())};
ji.prototype[Symbol.iterator]=function(){return new li(this.j())};
ji.prototype.i=function(){return new li(this.j())};
function ki(a){this.j=a}
t(ki,fi);ki.prototype.next=function(){return this.j.next()};
ki.prototype[Symbol.iterator]=function(){return new li(this.j)};
ki.prototype.i=function(){return new li(this.j)};
function li(a){ji.call(this,function(){return a});
this.l=a}
t(li,ji);li.prototype.next=function(){return this.l.next()};function mi(a,b){this.j={};this.i=[];this.na=this.size=0;var c=arguments.length;if(1<c){if(c%2)throw Error("Uneven number of arguments");for(var d=0;d<c;d+=2)this.set(arguments[d],arguments[d+1])}else if(a)if(a instanceof mi)for(c=a.ub(),d=0;d<c.length;d++)this.set(c[d],a.get(c[d]));else for(d in a)this.set(d,a[d])}
l=mi.prototype;l.ub=function(){ni(this);return this.i.concat()};
l.has=function(a){return oi(this.j,a)};
l.equals=function(a,b){if(this===a)return!0;if(this.size!=a.size)return!1;b=b||pi;ni(this);for(var c,d=0;c=this.i[d];d++)if(!b(this.get(c),a.get(c)))return!1;return!0};
function pi(a,b){return a===b}
l.isEmpty=function(){return 0==this.size};
l.clear=function(){this.j={};this.na=this.size=this.i.length=0};
l.remove=function(a){return this.delete(a)};
l.delete=function(a){return oi(this.j,a)?(delete this.j[a],--this.size,this.na++,this.i.length>2*this.size&&ni(this),!0):!1};
function ni(a){if(a.size!=a.i.length){for(var b=0,c=0;b<a.i.length;){var d=a.i[b];oi(a.j,d)&&(a.i[c++]=d);b++}a.i.length=c}if(a.size!=a.i.length){var e={};for(c=b=0;b<a.i.length;)d=a.i[b],oi(e,d)||(a.i[c++]=d,e[d]=1),b++;a.i.length=c}}
l.get=function(a,b){return oi(this.j,a)?this.j[a]:b};
l.set=function(a,b){oi(this.j,a)||(this.size+=1,this.i.push(a),this.na++);this.j[a]=b};
l.forEach=function(a,b){for(var c=this.ub(),d=0;d<c.length;d++){var e=c[d],f=this.get(e);a.call(b,f,e,this)}};
l.clone=function(){return new mi(this)};
l.keys=function(){return ii(this.da(!0)).i()};
l.values=function(){return ii(this.da(!1)).i()};
l.entries=function(){var a=this;return Yh(this.keys(),function(b){return[b,a.get(b)]})};
l.da=function(a){ni(this);var b=0,c=this.na,d=this,e=new fi;e.next=function(){if(c!=d.na)throw Error("The map has changed since the iterator was created");if(b>=d.i.length)return gi;var f=d.i[b++];return hi(a?f:d.j[f])};
return e};
function oi(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
;function K(a){J.call(this);this.s=1;this.m=[];this.o=0;this.j=[];this.l={};this.v=!!a}
Za(K,J);l=K.prototype;l.subscribe=function(a,b,c){var d=this.l[a];d||(d=this.l[a]=[]);var e=this.s;this.j[e]=a;this.j[e+1]=b;this.j[e+2]=c;this.s=e+3;d.push(e);return e};
function qi(a,b,c,d){if(b=a.l[b]){var e=a.j;(b=b.find(function(f){return e[f+1]==c&&e[f+2]==d}))&&a.Ea(b)}}
l.Ea=function(a){var b=this.j[a];if(b){var c=this.l[b];0!=this.o?(this.m.push(a),this.j[a+1]=function(){}):(c&&lb(c,a),delete this.j[a],delete this.j[a+1],delete this.j[a+2])}return!!b};
l.qa=function(a,b){var c=this.l[a];if(c){for(var d=Array(arguments.length-1),e=1,f=arguments.length;e<f;e++)d[e-1]=arguments[e];if(this.v)for(e=0;e<c.length;e++){var g=c[e];ri(this.j[g+1],this.j[g+2],d)}else{this.o++;try{for(e=0,f=c.length;e<f&&!this.i();e++)g=c[e],this.j[g+1].apply(this.j[g+2],d)}finally{if(this.o--,0<this.m.length&&0==this.o)for(;c=this.m.pop();)this.Ea(c)}}return 0!=e}return!1};
function ri(a,b,c){qf(function(){a.apply(b,c)})}
l.clear=function(a){if(a){var b=this.l[a];b&&(b.forEach(this.Ea,this),delete this.l[a])}else this.j.length=0,this.l={}};
l.D=function(){K.X.D.call(this);this.clear();this.m.length=0};function si(a){this.i=a}
si.prototype.set=function(a,b){void 0===b?this.i.remove(a):this.i.set(a,tg(b))};
si.prototype.get=function(a){try{var b=this.i.get(a)}catch(c){return}if(null!==b)try{return JSON.parse(b)}catch(c){throw"Storage: Invalid value was encountered";}};
si.prototype.remove=function(a){this.i.remove(a)};function ti(a){this.i=a}
Za(ti,si);function ui(a){this.data=a}
function vi(a){return void 0===a||a instanceof ui?a:new ui(a)}
ti.prototype.set=function(a,b){ti.X.set.call(this,a,vi(b))};
ti.prototype.j=function(a){a=ti.X.get.call(this,a);if(void 0===a||a instanceof Object)return a;throw"Storage: Invalid value was encountered";};
ti.prototype.get=function(a){if(a=this.j(a)){if(a=a.data,void 0===a)throw"Storage: Invalid value was encountered";}else a=void 0;return a};function wi(a){this.i=a}
Za(wi,ti);wi.prototype.set=function(a,b,c){if(b=vi(b)){if(c){if(c<Date.now()){wi.prototype.remove.call(this,a);return}b.expiration=c}b.creation=Date.now()}wi.X.set.call(this,a,b)};
wi.prototype.j=function(a){var b=wi.X.j.call(this,a);if(b){var c=b.creation,d=b.expiration;if(d&&d<Date.now()||c&&c>Date.now())wi.prototype.remove.call(this,a);else return b}};function xi(){}
;function yi(){}
Za(yi,xi);yi.prototype[Symbol.iterator]=function(){return ii(this.da(!0)).i()};
yi.prototype.clear=function(){var a=Array.from(this);a=p(a);for(var b=a.next();!b.done;b=a.next())this.remove(b.value)};function zi(a){this.i=a}
Za(zi,yi);l=zi.prototype;l.isAvailable=function(){if(!this.i)return!1;try{return this.i.setItem("__sak","1"),this.i.removeItem("__sak"),!0}catch(a){return!1}};
l.set=function(a,b){try{this.i.setItem(a,b)}catch(c){if(0==this.i.length)throw"Storage mechanism: Storage disabled";throw"Storage mechanism: Quota exceeded";}};
l.get=function(a){a=this.i.getItem(a);if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
l.remove=function(a){this.i.removeItem(a)};
l.da=function(a){var b=0,c=this.i,d=new fi;d.next=function(){if(b>=c.length)return gi;var e=c.key(b++);if(a)return hi(e);e=c.getItem(e);if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return hi(e)};
return d};
l.clear=function(){this.i.clear()};
l.key=function(a){return this.i.key(a)};function Ai(){var a=null;try{a=window.localStorage||null}catch(b){}this.i=a}
Za(Ai,zi);function Bi(a,b){this.j=a;this.i=null;var c;if(c=Kc)c=!(9<=Number(Yc));if(c){Ci||(Ci=new mi);this.i=Ci.get(a);this.i||(b?this.i=document.getElementById(b):(this.i=document.createElement("userdata"),this.i.addBehavior("#default#userData"),document.body.appendChild(this.i)),Ci.set(a,this.i));try{this.i.load(this.j)}catch(d){this.i=null}}}
Za(Bi,yi);var Di={".":".2E","!":".21","~":".7E","*":".2A","'":".27","(":".28",")":".29","%":"."},Ci=null;function Ei(a){return"_"+encodeURIComponent(a).replace(/[.!~*'()%]/g,function(b){return Di[b]})}
l=Bi.prototype;l.isAvailable=function(){return!!this.i};
l.set=function(a,b){this.i.setAttribute(Ei(a),b);Fi(this)};
l.get=function(a){a=this.i.getAttribute(Ei(a));if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
l.remove=function(a){this.i.removeAttribute(Ei(a));Fi(this)};
l.da=function(a){var b=0,c=this.i.XMLDocument.documentElement.attributes,d=new fi;d.next=function(){if(b>=c.length)return gi;var e=c[b++];if(a)return hi(decodeURIComponent(e.nodeName.replace(/\./g,"%")).slice(1));e=e.nodeValue;if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return hi(e)};
return d};
l.clear=function(){for(var a=this.i.XMLDocument.documentElement,b=a.attributes.length;0<b;b--)a.removeAttribute(a.attributes[b-1].nodeName);Fi(this)};
function Fi(a){try{a.i.save(a.j)}catch(b){throw"Storage mechanism: Quota exceeded";}}
;function Gi(a,b){this.j=a;this.i=b+"::"}
Za(Gi,yi);Gi.prototype.set=function(a,b){this.j.set(this.i+a,b)};
Gi.prototype.get=function(a){return this.j.get(this.i+a)};
Gi.prototype.remove=function(a){this.j.remove(this.i+a)};
Gi.prototype.da=function(a){var b=this.j[Symbol.iterator](),c=this,d=new fi;d.next=function(){var e=b.next();if(e.done)return e;for(e=e.value;e.slice(0,c.i.length)!=c.i;){e=b.next();if(e.done)return e;e=e.value}return hi(a?e.slice(c.i.length):c.j.get(e))};
return d};function Hi(a){I.call(this,a)}
t(Hi,I);function Ii(a){I.call(this,a)}
t(Ii,I);Ii.prototype.getKey=function(){return Nd(this,1)};
Ii.prototype.getValue=function(){return Zd(this,2===Rd(this,Ji)?2:-1)};
Ii.prototype.setValue=function(a){return Qd(this,2,Ji,a)};
var Ji=[2,3,4,5,6];function Ki(a){I.call(this,a)}
t(Ki,I);function Li(a){I.call(this,a)}
t(Li,I);function Mi(a){I.call(this,a,-1,Ni)}
t(Mi,I);var Ni=[2];function Oi(a){I.call(this,a,-1,Pi)}
t(Oi,I);Oi.prototype.getPlayerType=function(){return Nd(this,36)};
Oi.prototype.setHomeGroupInfo=function(a){return G(this,Mi,81,a)};
Oi.prototype.clearLocationPlayabilityToken=function(){return D(this,89,void 0,!1)};
var Pi=[9,66,24,32,86,100,101];function Qi(a){I.call(this,a,-1,Ri)}
t(Qi,I);var Ri=[15,26,28];function Si(a){I.call(this,a)}
t(Si,I);Si.prototype.setToken=function(a){return D(this,2,a)};function Ti(a){I.call(this,a,-1,Ui)}
t(Ti,I);Ti.prototype.setSafetyMode=function(a){return D(this,5,a)};
var Ui=[12];function Vi(a){I.call(this,a,-1,Wi)}
t(Vi,I);Vi.prototype.s=function(a){G(this,Oi,1,a)};
var Wi=[12];function Xi(a){this.name=a}
;var Yi=new Xi("continuationCommand");var Zi=new Xi("webCommandMetadata");var $i=new Xi("signalServiceEndpoint");var aj=new Xi("feedbackEndpoint");function bj(a){I.call(this,a,-1,cj)}
t(bj,I);function dj(a){I.call(this,a)}
t(dj,I);dj.prototype.getKey=function(){return $d(Nd(this,1),"")};
dj.prototype.getValue=function(){return $d(Nd(this,2),"")};
dj.prototype.setValue=function(a){return D(this,2,a)};
var cj=[4,5];function ej(a){I.call(this,a)}
t(ej,I);function fj(a){I.call(this,a)}
t(fj,I);var gj=[2,3,4];function hj(a){I.call(this,a)}
t(hj,I);hj.prototype.getMessage=function(){return $d(Nd(this,1),"")};function ij(a){I.call(this,a)}
t(ij,I);function jj(a){I.call(this,a)}
t(jj,I);function kj(a){I.call(this,a,-1,lj)}
t(kj,I);var lj=[10,17];function mj(a){I.call(this,a)}
t(mj,I);function nj(a){I.call(this,a)}
t(nj,I);function oj(a){I.call(this,a)}
t(oj,I);function pj(a){I.call(this,a)}
t(pj,I);function qj(a){I.call(this,a)}
t(qj,I);function rj(a,b){G(a,oj,1,b)}
qj.prototype.l=function(a){D(this,2,a)};
function sj(a){I.call(this,a)}
t(sj,I);function tj(a,b){G(a,oj,1,b)}
;function uj(a){I.call(this,a,-1,vj)}
t(uj,I);uj.prototype.l=function(a){D(this,1,a)};
function wj(a,b){G(a,oj,2,b)}
var vj=[3];function xj(a){I.call(this,a)}
t(xj,I);xj.prototype.l=function(a){D(this,1,a)};function yj(a){I.call(this,a)}
t(yj,I);yj.prototype.l=function(a){D(this,1,a)};function zj(a){I.call(this,a)}
t(zj,I);zj.prototype.l=function(a){D(this,1,a)};function Aj(a){I.call(this,a)}
t(Aj,I);Aj.prototype.l=function(a){D(this,1,a)};function Bj(a){I.call(this,a)}
t(Bj,I);function Cj(a){I.call(this,a)}
t(Cj,I);function Dj(a){I.call(this,a,-1,Ej)}
t(Dj,I);Dj.prototype.getPlayerType=function(){var a=Nd(this,7);return null==a?0:a};
Dj.prototype.setVideoId=function(a){return D(this,19,a)};
function Fj(a,b){Yd(a,68,Gj,b)}
function Gj(a){I.call(this,a)}
t(Gj,I);Gj.prototype.getId=function(){return $d(Nd(this,2),"")};
var Ej=[83,68];function Hj(a){I.call(this,a)}
t(Hj,I);function Ij(a){I.call(this,a)}
t(Ij,I);function Jj(a){I.call(this,a)}
t(Jj,I);function Kj(a){I.call(this,a,442)}
t(Kj,I);
var Lj=[23,24,11,6,7,5,2,3,13,20,21,22,28,32,37,229,241,45,59,225,288,72,73,78,208,156,202,215,74,76,79,80,111,85,91,97,100,102,105,119,126,127,136,146,148,151,157,158,159,163,164,168,176,222,383,177,178,179,411,184,188,189,190,191,193,194,195,196,197,198,199,200,201,402,320,203,204,205,206,258,259,260,261,327,209,219,226,227,232,233,234,240,244,247,248,249,251,256,257,266,254,255,270,272,278,291,293,300,304,308,309,310,311,313,314,319,321,323,324,328,330,331,332,334,337,338,340,344,348,350,351,352,
353,354,355,356,357,358,361,363,364,368,369,370,373,374,375,378,380,381,388,389,403,410,412,429,413,414,415,416,417,418,430,423,424,425,426,427,431,117,439,441];var Mj={mj:0,Xi:1,dj:2,ej:4,jj:8,fj:16,gj:32,lj:64,kj:128,Zi:256,bj:512,ij:1024,aj:2048,cj:4096,Yi:8192,hj:16384};function Nj(a){I.call(this,a)}
t(Nj,I);function Oj(a){I.call(this,a)}
t(Oj,I);Oj.prototype.setVideoId=function(a){return Qd(this,1,Pj,a)};
Oj.prototype.getPlaylistId=function(){return Zd(this,2===Rd(this,Pj)?2:-1)};
var Pj=[1,2];function Qj(a){I.call(this,a,-1,Rj)}
t(Qj,I);var Rj=[3];var Sj=new Xi("webPlayerShareEntityServiceEndpoint");var Tj=new Xi("playlistEditEndpoint");var Uj=new Xi("modifyChannelNotificationPreferenceEndpoint");var Vj=new Xi("unsubscribeEndpoint");var Wj=new Xi("subscribeEndpoint");function Xj(a,b){1<b.length?a[b[0]]=b[1]:1===b.length&&Object.assign(a,b[0])}
;var Yj=y.window,tk,uk,vk=(null==Yj?void 0:null==(tk=Yj.yt)?void 0:tk.config_)||(null==Yj?void 0:null==(uk=Yj.ytcfg)?void 0:uk.data_)||{};z("yt.config_",vk);function wk(){Xj(vk,arguments)}
function L(a,b){return a in vk?vk[a]:b}
function xk(){var a=vk.EXPERIMENT_FLAGS;return a?a.web_disable_gel_stp_ecatcher_killswitch:void 0}
;function M(a){a=yk(a);return"string"===typeof a&&"false"===a?!1:!!a}
function zk(a,b){a=yk(a);return void 0===a&&void 0!==b?b:Number(a||0)}
function Ak(){return L("EXPERIMENTS_TOKEN","")}
function yk(a){var b=L("EXPERIMENTS_FORCED_FLAGS",{});return void 0!==b[a]?b[a]:L("EXPERIMENT_FLAGS",{})[a]}
function Bk(){var a=[],b=L("EXPERIMENTS_FORCED_FLAGS",{});for(c in b)a.push({key:c,value:String(b[c])});var c=L("EXPERIMENT_FLAGS",{});for(var d in c)d.startsWith("force_")&&void 0===b[d]&&a.push({key:d,value:String(c[d])});return a}
;var Ck=[];function Dk(a){Ck.forEach(function(b){return b(a)})}
function Ek(a){return a&&window.yterr?function(){try{return a.apply(this,arguments)}catch(b){Fk(b)}}:a}
function Fk(a,b,c,d){var e=B("yt.logging.errors.log");e?e(a,"ERROR",b,c,d):(e=L("ERRORS",[]),e.push([a,"ERROR",b,c,d]),wk("ERRORS",e));Dk(a)}
function Gk(a,b,c,d){var e=B("yt.logging.errors.log");e?e(a,"WARNING",b,c,d):(e=L("ERRORS",[]),e.push([a,"WARNING",b,c,d]),wk("ERRORS",e))}
;function Hk(){var a=Ik;B("yt.ads.biscotti.getId_")||z("yt.ads.biscotti.getId_",a)}
function Jk(a){z("yt.ads.biscotti.lastId_",a)}
;var Kk=/^[\w.]*$/,Lk={q:!0,search_query:!0};function Mk(a,b){b=a.split(b);for(var c={},d=0,e=b.length;d<e;d++){var f=b[d].split("=");if(1==f.length&&f[0]||2==f.length)try{var g=Nk(f[0]||""),h=Nk(f[1]||"");g in c?Array.isArray(c[g])?mb(c[g],h):c[g]=[c[g],h]:c[g]=h}catch(r){var k=r,m=f[0],q=String(Mk);k.args=[{key:m,value:f[1],query:a,method:Ok==q?"unchanged":q}];Lk.hasOwnProperty(m)||Gk(k)}}return c}
var Ok=String(Mk);function Pk(a){var b=[];nb(a,function(c,d){var e=encodeURIComponent(String(d)),f;Array.isArray(c)?f=c:f=[c];fb(f,function(g){""==g?b.push(e):b.push(e+"="+encodeURIComponent(String(g)))})});
return b.join("&")}
function Qk(a){"?"==a.charAt(0)&&(a=a.substr(1));return Mk(a,"&")}
function Rk(a){return-1!=a.indexOf("?")?(a=(a||"").split("#")[0],a=a.split("?",2),Qk(1<a.length?a[1]:a[0])):{}}
function Sk(a,b,c){var d=a.split("#",2);a=d[0];d=1<d.length?"#"+d[1]:"";var e=a.split("?",2);a=e[0];e=Qk(e[1]||"");for(var f in b)!c&&null!==e&&f in e||(e[f]=b[f]);return vc(a,e)+d}
function Tk(a){if(!b)var b=window.location.href;var c=nc(1,a),d=oc(a);c&&d?(a=a.match(lc),b=b.match(lc),a=a[3]==b[3]&&a[1]==b[1]&&a[4]==b[4]):a=d?oc(b)==d&&(Number(nc(4,b))||null)==(Number(nc(4,a))||null):!0;return a}
function Nk(a){return a&&a.match(Kk)?a:decodeURIComponent(a.replace(/\+/g," "))}
;function Uk(a){var b=Vk;a=void 0===a?B("yt.ads.biscotti.lastId_")||"":a;var c=Object,d=c.assign,e={};e.dt=Mh;e.flash="0";a:{try{var f=b.i.top.location.href}catch(fa){f=2;break a}f=f?f===b.j.location.href?0:1:2}e=(e.frm=f,e);try{e.u_tz=-(new Date).getTimezoneOffset();var g=void 0===g?yh:g;try{var h=g.history.length}catch(fa){h=0}e.u_his=h;var k;e.u_h=null==(k=yh.screen)?void 0:k.height;var m;e.u_w=null==(m=yh.screen)?void 0:m.width;var q;e.u_ah=null==(q=yh.screen)?void 0:q.availHeight;var r;e.u_aw=
null==(r=yh.screen)?void 0:r.availWidth;var w;e.u_cd=null==(w=yh.screen)?void 0:w.colorDepth}catch(fa){}h=b.i;try{var u=h.screenX;var A=h.screenY}catch(fa){}try{var E=h.outerWidth;var F=h.outerHeight}catch(fa){}try{var O=h.innerWidth;var N=h.innerHeight}catch(fa){}try{var R=h.screenLeft;var ca=h.screenTop}catch(fa){}try{O=h.innerWidth,N=h.innerHeight}catch(fa){}try{var W=h.screen.availWidth;var pb=h.screen.availTop}catch(fa){}u=[R,ca,u,A,W,pb,E,F,O,N];try{var Xa=(b.i.top||window).document,ma="CSS1Compat"==
Xa.compatMode?Xa.documentElement:Xa.body;var H=(new cf(ma.clientWidth,ma.clientHeight)).round()}catch(fa){H=new cf(-12245933,-12245933)}Xa=H;H={};var la=void 0===la?y:la;ma=new Vh;la.SVGElement&&la.document.createElementNS&&ma.set(0);A=Gh();A["allow-top-navigation-by-user-activation"]&&ma.set(1);A["allow-popups-to-escape-sandbox"]&&ma.set(2);la.crypto&&la.crypto.subtle&&ma.set(3);la.TextDecoder&&la.TextEncoder&&ma.set(4);la=Wh(ma);H.bc=la;H.bih=Xa.height;H.biw=Xa.width;H.brdim=u.join();b=b.j;b=(H.vis=
b.prerendering?3:{visible:1,hidden:2,prerender:3,preview:4,unloaded:5}[b.visibilityState||b.webkitVisibilityState||b.mozVisibilityState||""]||0,H.wgl=!!yh.WebGLRenderingContext,H);c=d.call(c,e,b);c.ca_type="image";a&&(c.bid=a);return c}
var Vk=new function(){var a=window.document;this.i=window;this.j=a};
z("yt.ads_.signals_.getAdSignalsString",function(a){return Pk(Uk(a))});Date.now();var Wk="XMLHttpRequest"in y?function(){return new XMLHttpRequest}:null;
function Xk(){if(!Wk)return null;var a=Wk();return"open"in a?a:null}
function Yk(a){switch(a&&"status"in a?a.status:-1){case 200:case 201:case 202:case 203:case 204:case 205:case 206:case 304:return!0;default:return!1}}
;function Zk(a,b){"function"===typeof a&&(a=Ek(a));return window.setTimeout(a,b)}
function $k(a){window.clearTimeout(a)}
;var al={Authorization:"AUTHORIZATION","X-Goog-EOM-Visitor-Id":"EOM_VISITOR_DATA","X-Goog-Visitor-Id":"SANDBOXED_VISITOR_ID","X-Youtube-Domain-Admin-State":"DOMAIN_ADMIN_STATE","X-Youtube-Chrome-Connected":"CHROME_CONNECTED_HEADER","X-YouTube-Client-Name":"INNERTUBE_CONTEXT_CLIENT_NAME","X-YouTube-Client-Version":"INNERTUBE_CONTEXT_CLIENT_VERSION","X-YouTube-Delegation-Context":"INNERTUBE_CONTEXT_SERIALIZED_DELEGATION_CONTEXT","X-YouTube-Device":"DEVICE","X-Youtube-Identity-Token":"ID_TOKEN","X-YouTube-Page-CL":"PAGE_CL",
"X-YouTube-Page-Label":"PAGE_BUILD_LABEL","X-YouTube-Variants-Checksum":"VARIANTS_CHECKSUM"},bl="app debugcss debugjs expflag force_ad_params force_ad_encrypted force_viral_ad_response_params forced_experiments innertube_snapshots innertube_goldens internalcountrycode internalipoverride absolute_experiments conditional_experiments sbb sr_bns_address".split(" ").concat(ia(Nh)),cl=!1;
function dl(a,b){b=void 0===b?{}:b;var c=Tk(a),d=M("web_ajax_ignore_global_headers_if_set"),e;for(e in al){var f=L(al[e]);"X-Goog-Visitor-Id"!==e||f||(f=L("VISITOR_DATA"));!f||!c&&oc(a)||d&&void 0!==b[e]||(b[e]=f)}"X-Goog-EOM-Visitor-Id"in b&&"X-Goog-Visitor-Id"in b&&delete b["X-Goog-Visitor-Id"];if(c||!oc(a))b["X-YouTube-Utc-Offset"]=String(-(new Date).getTimezoneOffset());if(c||!oc(a)){try{var g=(new Intl.DateTimeFormat).resolvedOptions().timeZone}catch(h){}g&&(b["X-YouTube-Time-Zone"]=g)}if(c||
!oc(a))b["X-YouTube-Ad-Signals"]=Pk(Uk());return b}
function el(a){var b=window.location.search,c=oc(a);M("debug_handle_relative_url_for_query_forward_killswitch")||c||!Tk(a)||(c=document.location.hostname);var d=mc(nc(5,a));d=(c=c&&(c.endsWith("youtube.com")||c.endsWith("youtube-nocookie.com")))&&d&&d.startsWith("/api/");if(!c||d)return a;var e=Qk(b),f={};fb(bl,function(g){e[g]&&(f[g]=e[g])});
return Sk(a,f||{},!1)}
function fl(a,b){var c=b.format||"JSON";a=gl(a,b);var d=hl(a,b),e=!1,f=il(a,function(k){if(!e){e=!0;h&&$k(h);var m=Yk(k),q=null,r=400<=k.status&&500>k.status,w=500<=k.status&&600>k.status;if(m||r||w)q=jl(a,c,k,b.convertToSafeHtml);if(m)a:if(k&&204==k.status)m=!0;else{switch(c){case "XML":m=0==parseInt(q&&q.return_code,10);break a;case "RAW":m=!0;break a}m=!!q}q=q||{};r=b.context||y;m?b.onSuccess&&b.onSuccess.call(r,k,q):b.onError&&b.onError.call(r,k,q);b.onFinish&&b.onFinish.call(r,k,q)}},b.method,
d,b.headers,b.responseType,b.withCredentials);
d=b.timeout||0;if(b.onTimeout&&0<d){var g=b.onTimeout;var h=Zk(function(){e||(e=!0,f.abort(),$k(h),g.call(b.context||y,f))},d)}return f}
function gl(a,b){b.includeDomain&&(a=document.location.protocol+"//"+document.location.hostname+(document.location.port?":"+document.location.port:"")+a);var c=L("XSRF_FIELD_NAME");if(b=b.urlParams)b[c]&&delete b[c],a=Sk(a,b||{},!0);return a}
function hl(a,b){var c=L("XSRF_FIELD_NAME"),d=L("XSRF_TOKEN"),e=b.postBody||"",f=b.postParams,g=L("XSRF_FIELD_NAME"),h;b.headers&&(h=b.headers["Content-Type"]);b.excludeXsrf||oc(a)&&!b.withCredentials&&oc(a)!=document.location.hostname||"POST"!=b.method||h&&"application/x-www-form-urlencoded"!=h||b.postParams&&b.postParams[g]||(f||(f={}),f[c]=d);(M("ajax_parse_query_data_only_when_filled")&&f&&0<Object.keys(f).length||f)&&"string"===typeof e&&(e=Qk(e),yb(e,f),e=b.postBodyFormat&&"JSON"==b.postBodyFormat?
JSON.stringify(e):tc(e));f=e||f&&!rb(f);!cl&&f&&"POST"!=b.method&&(cl=!0,Fk(Error("AJAX request with postData should use POST")));return e}
function jl(a,b,c,d){var e=null;switch(b){case "JSON":try{var f=c.responseText}catch(g){throw d=Error("Error reading responseText"),d.params=a,Gk(d),g;}a=c.getResponseHeader("Content-Type")||"";f&&0<=a.indexOf("json")&&(")]}'\n"===f.substring(0,5)&&(f=f.substring(5)),e=JSON.parse(f));break;case "XML":if(a=(a=c.responseXML)?kl(a):null)e={},fb(a.getElementsByTagName("*"),function(g){e[g.tagName]=ll(g)})}d&&ml(e);
return e}
function ml(a){if(Qa(a))for(var b in a){var c;(c="html_content"==b)||(c=b.length-5,c=0<=c&&b.indexOf("_html",c)==c);if(c){c=b;Db("HTML that is escaped and sanitized server-side and passed through yt.net.ajax");var d=a[b],e=Ab();d=e?e.createHTML(d):d;a[c]=new ec(d)}else ml(a[b])}}
function kl(a){return a?(a=("responseXML"in a?a.responseXML:a).getElementsByTagName("root"))&&0<a.length?a[0]:null:null}
function ll(a){var b="";fb(a.childNodes,function(c){b+=c.nodeValue});
return b}
function il(a,b,c,d,e,f,g){function h(){4==(k&&"readyState"in k?k.readyState:0)&&b&&Ek(b)(k)}
c=void 0===c?"GET":c;d=void 0===d?"":d;var k=Xk();if(!k)return null;"onloadend"in k?k.addEventListener("loadend",h,!1):k.onreadystatechange=h;M("debug_forward_web_query_parameters")&&(a=el(a));k.open(c,a,!0);f&&(k.responseType=f);g&&(k.withCredentials=!0);c="POST"==c&&(void 0===window.FormData||!(d instanceof FormData));if(e=dl(a,e))for(var m in e)k.setRequestHeader(m,e[m]),"content-type"==m.toLowerCase()&&(c=!1);c&&k.setRequestHeader("Content-Type","application/x-www-form-urlencoded");k.send(d);
return k}
;function nl(a){var b=this;this.j=void 0;this.i=!1;a.addEventListener("beforeinstallprompt",function(c){c.preventDefault();b.j=c});
a.addEventListener("appinstalled",function(){b.i=!0},{once:!0})}
function ol(){if(!y.matchMedia)return"WEB_DISPLAY_MODE_UNKNOWN";try{return y.matchMedia("(display-mode: standalone)").matches?"WEB_DISPLAY_MODE_STANDALONE":y.matchMedia("(display-mode: minimal-ui)").matches?"WEB_DISPLAY_MODE_MINIMAL_UI":y.matchMedia("(display-mode: fullscreen)").matches?"WEB_DISPLAY_MODE_FULLSCREEN":y.matchMedia("(display-mode: browser)").matches?"WEB_DISPLAY_MODE_BROWSER":"WEB_DISPLAY_MODE_UNKNOWN"}catch(a){return"WEB_DISPLAY_MODE_UNKNOWN"}}
;function pl(a,b,c,d,e){lg.set(""+a,b,{fb:c,path:"/",domain:void 0===d?"youtube.com":d,secure:void 0===e?!1:e})}
function ql(a,b,c){lg.remove(""+a,void 0===b?"/":b,void 0===c?"youtube.com":c)}
function rl(){if(!lg.isEnabled())return!1;if(!lg.isEmpty())return!0;lg.set("TESTCOOKIESENABLED","1",{fb:60});if("1"!==lg.get("TESTCOOKIESENABLED"))return!1;lg.remove("TESTCOOKIESENABLED");return!0}
;var sl=B("ytglobal.prefsUserPrefsPrefs_")||{};z("ytglobal.prefsUserPrefsPrefs_",sl);function tl(){this.i=L("ALT_PREF_COOKIE_NAME","PREF");this.j=L("ALT_PREF_COOKIE_DOMAIN","youtube.com");var a=lg.get(""+this.i,void 0);if(a){a=decodeURIComponent(a).split("&");for(var b=0;b<a.length;b++){var c=a[b].split("="),d=c[0];(c=c[1])&&(sl[d]=c.toString())}}}
tl.prototype.get=function(a,b){ul(a);vl(a);a=void 0!==sl[a]?sl[a].toString():null;return null!=a?a:b?b:""};
tl.prototype.set=function(a,b){ul(a);vl(a);if(null==b)throw Error("ExpectedNotNull");sl[a]=b.toString()};
function wl(a){return!!((xl("f"+(Math.floor(a/31)+1))||0)&1<<a%31)}
tl.prototype.remove=function(a){ul(a);vl(a);delete sl[a]};
tl.prototype.clear=function(){for(var a in sl)delete sl[a]};
function vl(a){if(/^f([1-9][0-9]*)$/.test(a))throw Error("ExpectedRegexMatch: "+a);}
function ul(a){if(!/^\w+$/.test(a))throw Error("ExpectedRegexMismatch: "+a);}
function xl(a){a=void 0!==sl[a]?sl[a].toString():null;return null!=a&&/^[A-Fa-f0-9]+$/.test(a)?parseInt(a,16):null}
Na(tl);var yl={bluetooth:"CONN_DISCO",cellular:"CONN_CELLULAR_UNKNOWN",ethernet:"CONN_WIFI",none:"CONN_NONE",wifi:"CONN_WIFI",wimax:"CONN_CELLULAR_4G",other:"CONN_UNKNOWN",unknown:"CONN_UNKNOWN","slow-2g":"CONN_CELLULAR_2G","2g":"CONN_CELLULAR_2G","3g":"CONN_CELLULAR_3G","4g":"CONN_CELLULAR_4G"},zl={CONN_DEFAULT:0,CONN_UNKNOWN:1,CONN_NONE:2,CONN_WIFI:3,CONN_CELLULAR_2G:4,CONN_CELLULAR_3G:5,CONN_CELLULAR_4G:6,CONN_CELLULAR_UNKNOWN:7,CONN_DISCO:8,CONN_CELLULAR_5G:9,CONN_WIFI_METERED:10,CONN_CELLULAR_5G_SA:11,
CONN_CELLULAR_5G_NSA:12,CONN_INVALID:31},Al={EFFECTIVE_CONNECTION_TYPE_UNKNOWN:0,EFFECTIVE_CONNECTION_TYPE_OFFLINE:1,EFFECTIVE_CONNECTION_TYPE_SLOW_2G:2,EFFECTIVE_CONNECTION_TYPE_2G:3,EFFECTIVE_CONNECTION_TYPE_3G:4,EFFECTIVE_CONNECTION_TYPE_4G:5},Bl={"slow-2g":"EFFECTIVE_CONNECTION_TYPE_SLOW_2G","2g":"EFFECTIVE_CONNECTION_TYPE_2G","3g":"EFFECTIVE_CONNECTION_TYPE_3G","4g":"EFFECTIVE_CONNECTION_TYPE_4G"};function Cl(){var a=y.navigator;return a?a.connection:void 0}
function Dl(){var a=Cl();if(a){var b=yl[a.type||"unknown"]||"CONN_UNKNOWN";a=yl[a.effectiveType||"unknown"]||"CONN_UNKNOWN";"CONN_CELLULAR_UNKNOWN"===b&&"CONN_UNKNOWN"!==a&&(b=a);if("CONN_UNKNOWN"!==b)return b;if("CONN_UNKNOWN"!==a)return a}}
function El(){var a=Cl();if(null!=a&&a.effectiveType)return Bl.hasOwnProperty(a.effectiveType)?Bl[a.effectiveType]:"EFFECTIVE_CONNECTION_TYPE_UNKNOWN"}
;function Fl(){return"INNERTUBE_API_KEY"in vk&&"INNERTUBE_API_VERSION"in vk}
function Gl(){return{innertubeApiKey:L("INNERTUBE_API_KEY"),innertubeApiVersion:L("INNERTUBE_API_VERSION"),wb:L("INNERTUBE_CONTEXT_CLIENT_CONFIG_INFO"),ac:L("INNERTUBE_CONTEXT_CLIENT_NAME","WEB"),Sc:L("INNERTUBE_CONTEXT_CLIENT_NAME",1),innertubeContextClientVersion:L("INNERTUBE_CONTEXT_CLIENT_VERSION"),dc:L("INNERTUBE_CONTEXT_HL"),cc:L("INNERTUBE_CONTEXT_GL"),Tc:L("INNERTUBE_HOST_OVERRIDE")||"",Vc:!!L("INNERTUBE_USE_THIRD_PARTY_AUTH",!1),Uc:!!L("INNERTUBE_OMIT_API_KEY_WHEN_AUTH_HEADER_IS_PRESENT",
!1),appInstallData:L("SERIALIZED_CLIENT_CONFIG_DATA")}}
function Hl(a){var b={client:{hl:a.dc,gl:a.cc,clientName:a.ac,clientVersion:a.innertubeContextClientVersion,configInfo:a.wb}};navigator.userAgent&&(b.client.userAgent=String(navigator.userAgent));var c=y.devicePixelRatio;c&&1!=c&&(b.client.screenDensityFloat=String(c));c=Ak();""!==c&&(b.client.experimentsToken=c);c=Bk();0<c.length&&(b.request={internalExperimentFlags:c});Il(a,void 0,b);Jl(void 0,b);Kl(a,void 0,b);Ll(void 0,b);L("DELEGATED_SESSION_ID")&&!M("pageid_as_header_web")&&(b.user={onBehalfOfUser:L("DELEGATED_SESSION_ID")});
a=Object;c=a.assign;for(var d=b.client,e={},f=p(Object.entries(Qk(L("DEVICE","")))),g=f.next();!g.done;g=f.next()){var h=p(g.value);g=h.next().value;h=h.next().value;"cbrand"===g?e.deviceMake=h:"cmodel"===g?e.deviceModel=h:"cbr"===g?e.browserName=h:"cbrver"===g?e.browserVersion=h:"cos"===g?e.osName=h:"cosver"===g?e.osVersion=h:"cplatform"===g&&(e.platform=h)}b.client=c.call(a,d,e);return b}
function Ml(a){var b=new Vi,c=new Oi;D(c,1,a.dc);D(c,2,a.cc);D(c,16,a.Sc);D(c,17,a.innertubeContextClientVersion);if(a.wb){var d=a.wb,e=new Ki;d.coldConfigData&&D(e,1,d.coldConfigData);d.appInstallData&&D(e,6,d.appInstallData);d.coldHashData&&D(e,3,d.coldHashData);d.hotHashData&&D(e,5,d.hotHashData);G(c,Ki,62,e)}(d=y.devicePixelRatio)&&1!=d&&D(c,65,d);d=Ak();""!==d&&D(c,54,d);d=Bk();if(0<d.length){e=new Qi;for(var f=0;f<d.length;f++){var g=new Ii;D(g,1,d[f].key);g.setValue(d[f].value);Yd(e,15,Ii,
g)}G(b,Qi,5,e)}Il(a,c);Jl(c);Kl(a,c);Ll(c);L("DELEGATED_SESSION_ID")&&!M("pageid_as_header_web")&&(a=new Ti,D(a,3,L("DELEGATED_SESSION_ID")));a=p(Object.entries(Qk(L("DEVICE",""))));for(d=a.next();!d.done;d=a.next())e=p(d.value),d=e.next().value,e=e.next().value,"cbrand"===d?D(c,12,e):"cmodel"===d?D(c,13,e):"cbr"===d?D(c,87,e):"cbrver"===d?D(c,88,e):"cos"===d?D(c,18,e):"cosver"===d?D(c,19,e):"cplatform"===d&&D(c,42,e);b.s(c);return b}
function Il(a,b,c){a=a.ac;if("WEB"===a||"MWEB"===a||1===a||2===a)if(b){c=Sd(b,Li,96)||new Li;var d=ol();d=Object.keys(Uh).indexOf(d);d=-1===d?null:d;null!==d&&D(c,3,d);G(b,Li,96,c)}else c&&(c.client.mainAppWebInfo=null!=(d=c.client.mainAppWebInfo)?d:{},c.client.mainAppWebInfo.webDisplayMode=ol())}
function Jl(a,b){var c;if(M("web_log_memory_total_kbytes")&&(null==(c=y.navigator)?0:c.deviceMemory)){var d;c=null==(d=y.navigator)?void 0:d.deviceMemory;a?D(a,95,1E6*c):b&&(b.client.memoryTotalKbytes=""+1E6*c)}}
function Kl(a,b,c){if(a.appInstallData)if(b){var d;c=null!=(d=Sd(b,Ki,62))?d:new Ki;D(c,6,a.appInstallData);G(b,Ki,62,c)}else c&&(c.client.configInfo=c.client.configInfo||{},c.client.configInfo.appInstallData=a.appInstallData)}
function Ll(a,b){var c=Dl();c&&(a?D(a,61,zl[c]):b&&(b.client.connectionType=c));M("web_log_effective_connection_type")&&(c=El())&&(a?D(a,94,Al[c]):b&&(b.client.effectiveConnectionType=c))}
function Nl(a,b,c){c=void 0===c?{}:c;var d={};L("EOM_VISITOR_DATA")?d={"X-Goog-EOM-Visitor-Id":L("EOM_VISITOR_DATA")}:d={"X-Goog-Visitor-Id":c.visitorData||L("VISITOR_DATA","")};if(b&&b.includes("www.youtube-nocookie.com"))return d;(b=c.Vq||L("AUTHORIZATION"))||(a?b="Bearer "+B("gapi.auth.getToken")().Uq:b=pg([]));b&&(d.Authorization=b,d["X-Goog-AuthUser"]=L("SESSION_INDEX",0),M("pageid_as_header_web")&&(d["X-Goog-PageId"]=L("DELEGATED_SESSION_ID")));return d}
;function Ol(a){a=Object.assign({},a);delete a.Authorization;var b=pg();if(b){var c=new $h;c.update(L("INNERTUBE_API_KEY"));c.update(b);a.hash=dd(c.digest(),3)}return a}
;function Pl(a){var b=new Ai;(b=b.isAvailable()?a?new Gi(b,a):b:null)||(a=new Bi(a||"UserDataSharedStore"),b=a.isAvailable()?a:null);this.i=(a=b)?new wi(a):null;this.j=document.domain||window.location.hostname}
Pl.prototype.set=function(a,b,c,d){c=c||31104E3;this.remove(a);if(this.i)try{this.i.set(a,b,Date.now()+1E3*c);return}catch(f){}var e="";if(d)try{e=escape(tg(b))}catch(f){return}else e=escape(b);pl(a,e,c,this.j)};
Pl.prototype.get=function(a,b){var c=void 0,d=!this.i;if(!d)try{c=this.i.get(a)}catch(e){d=!0}if(d&&(c=lg.get(""+a,void 0))&&(c=unescape(c),b))try{c=JSON.parse(c)}catch(e){this.remove(a),c=void 0}return c};
Pl.prototype.remove=function(a){this.i&&this.i.remove(a);ql(a,"/",this.j)};var Ql=window,P=Ql.ytcsi&&Ql.ytcsi.now?Ql.ytcsi.now:Ql.performance&&Ql.performance.timing&&Ql.performance.now&&Ql.performance.timing.navigationStart?function(){return Ql.performance.timing.navigationStart+Ql.performance.now()}:function(){return(new Date).getTime()};var Rl;function Sl(){Rl||(Rl=new Pl("yt.innertube"));return Rl}
function Tl(a,b,c,d){if(d)return null;d=Sl().get("nextId",!0)||1;var e=Sl().get("requests",!0)||{};e[d]={method:a,request:b,authState:Ol(c),requestTime:Math.round(P())};Sl().set("nextId",d+1,86400,!0);Sl().set("requests",e,86400,!0);return d}
function Ul(a){var b=Sl().get("requests",!0)||{};delete b[a];Sl().set("requests",b,86400,!0)}
function Vl(a){var b=Sl().get("requests",!0);if(b){for(var c in b){var d=b[c];if(!(6E4>Math.round(P())-d.requestTime)){var e=d.authState,f=Ol(Nl(!1));ub(e,f)&&(e=d.request,"requestTimeMs"in e&&(e.requestTimeMs=Math.round(P())),Wl(a,d.method,e,{}));delete b[c]}}Sl().set("requests",b,86400,!0)}}
;function Xl(){}
Xl.prototype.S=function(a,b){return Yl(a,1,b)};
function Zl(a,b){Yl(a,2,b)}
function $l(a){var b=B("yt.scheduler.instance.addImmediateJob");b?b(a):a()}
;function am(){Xl.apply(this,arguments)}
t(am,Xl);function bm(){am.i||(am.i=new am);return am.i}
function Yl(a,b,c){void 0!==c&&Number.isNaN(Number(c))&&(c=void 0);var d=B("yt.scheduler.instance.addJob");return d?d(a,b,c):void 0===c?(a(),NaN):Zk(a,c||0)}
am.prototype.ea=function(a){if(void 0===a||!Number.isNaN(Number(a))){var b=B("yt.scheduler.instance.cancelJob");b?b(a):$k(a)}};
am.prototype.start=function(){var a=B("yt.scheduler.instance.start");a&&a()};
am.prototype.pause=function(){var a=B("yt.scheduler.instance.pause");a&&a()};var Sh=bm();var cm=Zc||$c;function dm(a){var b=Tb();return b?0<=b.toLowerCase().indexOf(a):!1}
;var em=function(){var a;return function(){a||(a=new Pl("ytidb"));return a}}();
function fm(){var a;return null==(a=em())?void 0:a.get("LAST_RESULT_ENTRY_KEY",!0)}
;var gm=[],hm,im=!1;function jm(){var a={};for(hm=new km(void 0===a.handleError?lm:a.handleError,void 0===a.logEvent?mm:a.logEvent);0<gm.length;)switch(a=gm.shift(),a.type){case "ERROR":hm.handleError(a.payload);break;case "EVENT":hm.logEvent(a.eventType,a.payload)}}
function nm(a){im||(hm?hm.handleError(a):(gm.push({type:"ERROR",payload:a}),10<gm.length&&gm.shift()))}
function om(a,b){im||(hm?hm.logEvent(a,b):(gm.push({type:"EVENT",eventType:a,payload:b}),10<gm.length&&gm.shift()))}
;function Q(a){var b=Ja.apply(1,arguments);var c=Error.call(this,a);this.message=c.message;"stack"in c&&(this.stack=c.stack);this.args=[].concat(ia(b))}
t(Q,Error);function pm(){try{return qm(),!0}catch(a){return!1}}
function qm(a){if(void 0!==L("DATASYNC_ID"))return L("DATASYNC_ID");throw new Q("Datasync ID not set",void 0===a?"unknown":a);}
;function rm(a){if(0<=a.indexOf(":"))throw Error("Database name cannot contain ':'");}
function sm(a){return a.substr(0,a.indexOf(":"))||a}
;var tm={},um=(tm.AUTH_INVALID="No user identifier specified.",tm.EXPLICIT_ABORT="Transaction was explicitly aborted.",tm.IDB_NOT_SUPPORTED="IndexedDB is not supported.",tm.MISSING_INDEX="Index not created.",tm.MISSING_OBJECT_STORES="Object stores not created.",tm.DB_DELETED_BY_MISSING_OBJECT_STORES="Database is deleted because expected object stores were not created.",tm.DB_REOPENED_BY_MISSING_OBJECT_STORES="Database is reopened because expected object stores were not created.",tm.UNKNOWN_ABORT="Transaction was aborted for unknown reasons.",
tm.QUOTA_EXCEEDED="The current transaction exceeded its quota limitations.",tm.QUOTA_MAYBE_EXCEEDED="The current transaction may have failed because of exceeding quota limitations.",tm.EXECUTE_TRANSACTION_ON_CLOSED_DB="Can't start a transaction on a closed database",tm.INCOMPATIBLE_DB_VERSION="The binary is incompatible with the database version",tm),vm={},wm=(vm.AUTH_INVALID="ERROR",vm.EXECUTE_TRANSACTION_ON_CLOSED_DB="WARNING",vm.EXPLICIT_ABORT="IGNORED",vm.IDB_NOT_SUPPORTED="ERROR",vm.MISSING_INDEX=
"WARNING",vm.MISSING_OBJECT_STORES="ERROR",vm.DB_DELETED_BY_MISSING_OBJECT_STORES="WARNING",vm.DB_REOPENED_BY_MISSING_OBJECT_STORES="WARNING",vm.QUOTA_EXCEEDED="WARNING",vm.QUOTA_MAYBE_EXCEEDED="WARNING",vm.UNKNOWN_ABORT="WARNING",vm.INCOMPATIBLE_DB_VERSION="WARNING",vm),xm={},ym=(xm.AUTH_INVALID=!1,xm.EXECUTE_TRANSACTION_ON_CLOSED_DB=!1,xm.EXPLICIT_ABORT=!1,xm.IDB_NOT_SUPPORTED=!1,xm.MISSING_INDEX=!1,xm.MISSING_OBJECT_STORES=!1,xm.DB_DELETED_BY_MISSING_OBJECT_STORES=!1,xm.DB_REOPENED_BY_MISSING_OBJECT_STORES=
!1,xm.QUOTA_EXCEEDED=!1,xm.QUOTA_MAYBE_EXCEEDED=!0,xm.UNKNOWN_ABORT=!0,xm.INCOMPATIBLE_DB_VERSION=!1,xm);function zm(a,b,c,d,e){b=void 0===b?{}:b;c=void 0===c?um[a]:c;d=void 0===d?wm[a]:d;e=void 0===e?ym[a]:e;Q.call(this,c,Object.assign({},{name:"YtIdbKnownError",isSw:void 0===self.document,isIframe:self!==self.top,type:a},b));this.type=a;this.message=c;this.level=d;this.i=e;Object.setPrototypeOf(this,zm.prototype)}
t(zm,Q);function Am(a,b){zm.call(this,"MISSING_OBJECT_STORES",{expectedObjectStores:b,foundObjectStores:a},um.MISSING_OBJECT_STORES);Object.setPrototypeOf(this,Am.prototype)}
t(Am,zm);function Bm(a,b){var c=Error.call(this);this.message=c.message;"stack"in c&&(this.stack=c.stack);this.index=a;this.objectStore=b;Object.setPrototypeOf(this,Bm.prototype)}
t(Bm,Error);var Cm=["The database connection is closing","Can't start a transaction on a closed database","A mutation operation was attempted on a database that did not allow mutations"];
function Dm(a,b,c,d){b=sm(b);var e=a instanceof Error?a:Error("Unexpected error: "+a);if(e instanceof zm)return e;a={objectStoreNames:c,dbName:b,dbVersion:d};if("QuotaExceededError"===e.name)return new zm("QUOTA_EXCEEDED",a);if(ad&&"UnknownError"===e.name)return new zm("QUOTA_MAYBE_EXCEEDED",a);if(e instanceof Bm)return new zm("MISSING_INDEX",Object.assign({},a,{objectStore:e.objectStore,index:e.index}));if("InvalidStateError"===e.name&&Cm.some(function(f){return e.message.includes(f)}))return new zm("EXECUTE_TRANSACTION_ON_CLOSED_DB",
a);
if("AbortError"===e.name)return new zm("UNKNOWN_ABORT",a,e.message);e.args=[Object.assign({},a,{name:"IdbError",jc:e.name})];e.level="WARNING";return e}
function Em(a,b,c){var d=fm();return new zm("IDB_NOT_SUPPORTED",{context:{caller:a,publicName:b,version:c,hasSucceededOnce:null==d?void 0:d.hasSucceededOnce}})}
;function Fm(a){if(!a)throw Error();throw a;}
function Gm(a){return a}
function Hm(a){this.i=a}
function Im(a){function b(e){if("PENDING"===d.state.status){d.state={status:"REJECTED",reason:e};e=p(d.onRejected);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
function c(e){if("PENDING"===d.state.status){d.state={status:"FULFILLED",value:e};e=p(d.i);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
var d=this;this.state={status:"PENDING"};this.i=[];this.onRejected=[];a=a.i;try{a(c,b)}catch(e){b(e)}}
Im.all=function(a){return new Im(new Hm(function(b,c){var d=[],e=a.length;0===e&&b(d);for(var f={xa:0};f.xa<a.length;f={xa:f.xa},++f.xa)Im.resolve(a[f.xa]).then(function(g){return function(h){d[g.xa]=h;e--;0===e&&b(d)}}(f)).catch(function(g){c(g)})}))};
Im.resolve=function(a){return new Im(new Hm(function(b,c){a instanceof Im?a.then(b,c):b(a)}))};
Im.reject=function(a){return new Im(new Hm(function(b,c){c(a)}))};
Im.prototype.then=function(a,b){var c=this,d=null!=a?a:Gm,e=null!=b?b:Fm;return new Im(new Hm(function(f,g){"PENDING"===c.state.status?(c.i.push(function(){Jm(c,c,d,f,g)}),c.onRejected.push(function(){Km(c,c,e,f,g)})):"FULFILLED"===c.state.status?Jm(c,c,d,f,g):"REJECTED"===c.state.status&&Km(c,c,e,f,g)}))};
Im.prototype.catch=function(a){return this.then(void 0,a)};
function Jm(a,b,c,d,e){try{if("FULFILLED"!==a.state.status)throw Error("calling handleResolve before the promise is fulfilled.");var f=c(a.state.value);f instanceof Im?Lm(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Km(a,b,c,d,e){try{if("REJECTED"!==a.state.status)throw Error("calling handleReject before the promise is rejected.");var f=c(a.state.reason);f instanceof Im?Lm(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Lm(a,b,c,d,e){b===c?e(new TypeError("Circular promise chain detected.")):c.then(function(f){f instanceof Im?Lm(a,b,f,d,e):d(f)},function(f){e(f)})}
;function Mm(a,b,c){function d(){c(a.error);f()}
function e(){b(a.result);f()}
function f(){try{a.removeEventListener("success",e),a.removeEventListener("error",d)}catch(g){}}
a.addEventListener("success",e);a.addEventListener("error",d)}
function Nm(a){return new Promise(function(b,c){Mm(a,b,c)})}
function Om(a){return new Im(new Hm(function(b,c){Mm(a,b,c)}))}
;function Pm(a,b){return new Im(new Hm(function(c,d){function e(){var f=a?b(a):null;f?f.then(function(g){a=g;e()},d):c()}
e()}))}
;function Qm(a,b){this.i=a;this.options=b;this.transactionCount=0;this.l=Math.round(P());this.j=!1}
l=Qm.prototype;l.add=function(a,b,c){return Rm(this,[a],{mode:"readwrite",U:!0},function(d){return d.objectStore(a).add(b,c)})};
l.clear=function(a){return Rm(this,[a],{mode:"readwrite",U:!0},function(b){return b.objectStore(a).clear()})};
l.close=function(){this.i.close();var a;(null==(a=this.options)?0:a.closed)&&this.options.closed()};
l.count=function(a,b){return Rm(this,[a],{mode:"readonly",U:!0},function(c){return c.objectStore(a).count(b)})};
function Sm(a,b,c){a=a.i.createObjectStore(b,c);return new Tm(a)}
l.delete=function(a,b){return Rm(this,[a],{mode:"readwrite",U:!0},function(c){return c.objectStore(a).delete(b)})};
l.get=function(a,b){return Rm(this,[a],{mode:"readonly",U:!0},function(c){return c.objectStore(a).get(b)})};
function Um(a,b){return Rm(a,["LogsRequestsStore"],{mode:"readwrite",U:!0},function(c){c=c.objectStore("LogsRequestsStore");return Om(c.i.put(b,void 0))})}
l.objectStoreNames=function(){return Array.from(this.i.objectStoreNames)};
function Rm(a,b,c,d){var e,f,g,h,k,m,q,r,w,u,A,E;return x(function(F){switch(F.i){case 1:var O={mode:"readonly",U:!1,tag:"IDB_TRANSACTION_TAG_UNKNOWN"};"string"===typeof c?O.mode=c:Object.assign(O,c);e=O;a.transactionCount++;f=e.U?3:1;g=0;case 2:if(h){F.u(3);break}g++;k=Math.round(P());ya(F,4);m=a.i.transaction(b,e.mode);O=new Vm(m);O=Wm(O,d);return v(F,O,6);case 6:return q=F.j,r=Math.round(P()),Xm(a,k,r,g,void 0,b.join(),e),F.return(q);case 4:w=Aa(F);u=Math.round(P());A=Dm(w,a.i.name,b.join(),a.i.version);
if((E=A instanceof zm&&!A.i)||g>=f)Xm(a,k,u,g,A,b.join(),e),h=A;F.u(2);break;case 3:return F.return(Promise.reject(h))}})}
function Xm(a,b,c,d,e,f,g){b=c-b;e?(e instanceof zm&&("QUOTA_EXCEEDED"===e.type||"QUOTA_MAYBE_EXCEEDED"===e.type)&&om("QUOTA_EXCEEDED",{dbName:sm(a.i.name),objectStoreNames:f,transactionCount:a.transactionCount,transactionMode:g.mode}),e instanceof zm&&"UNKNOWN_ABORT"===e.type&&(c-=a.l,0>c&&c>=Math.pow(2,31)&&(c=0),om("TRANSACTION_UNEXPECTEDLY_ABORTED",{objectStoreNames:f,transactionDuration:b,transactionCount:a.transactionCount,dbDuration:c}),a.j=!0),Ym(a,!1,d,f,b,g.tag),nm(e)):Ym(a,!0,d,f,b,g.tag)}
function Ym(a,b,c,d,e,f){om("TRANSACTION_ENDED",{objectStoreNames:d,connectionHasUnknownAbortedTransaction:a.j,duration:e,isSuccessful:b,tryCount:c,tag:void 0===f?"IDB_TRANSACTION_TAG_UNKNOWN":f})}
l.getName=function(){return this.i.name};
function Tm(a){this.i=a}
l=Tm.prototype;l.add=function(a,b){return Om(this.i.add(a,b))};
l.autoIncrement=function(){return this.i.autoIncrement};
l.clear=function(){return Om(this.i.clear()).then(function(){})};
l.count=function(a){return Om(this.i.count(a))};
function Zm(a,b){return $m(a,{query:b},function(c){return c.delete().then(function(){return c.continue()})}).then(function(){})}
l.delete=function(a){return a instanceof IDBKeyRange?Zm(this,a):Om(this.i.delete(a))};
l.get=function(a){return Om(this.i.get(a))};
l.index=function(a){try{return new an(this.i.index(a))}catch(b){if(b instanceof Error&&"NotFoundError"===b.name)throw new Bm(a,this.i.name);throw b;}};
l.getName=function(){return this.i.name};
l.keyPath=function(){return this.i.keyPath};
function $m(a,b,c){a=a.i.openCursor(b.query,b.direction);return bn(a).then(function(d){return Pm(d,c)})}
function Vm(a){var b=this;this.i=a;this.l=new Map;this.j=!1;this.done=new Promise(function(c,d){b.i.addEventListener("complete",function(){c()});
b.i.addEventListener("error",function(e){e.currentTarget===e.target&&d(b.i.error)});
b.i.addEventListener("abort",function(){var e=b.i.error;if(e)d(e);else if(!b.j){e=zm;for(var f=b.i.objectStoreNames,g=[],h=0;h<f.length;h++){var k=f.item(h);if(null===k)throw Error("Invariant: item in DOMStringList is null");g.push(k)}e=new e("UNKNOWN_ABORT",{objectStoreNames:g.join(),dbName:b.i.db.name,mode:b.i.mode});d(e)}})})}
function Wm(a,b){var c=new Promise(function(d,e){try{b(a).then(function(f){d(f)}).catch(e)}catch(f){e(f),a.abort()}});
return Promise.all([c,a.done]).then(function(d){return p(d).next().value})}
Vm.prototype.abort=function(){this.i.abort();this.j=!0;throw new zm("EXPLICIT_ABORT");};
Vm.prototype.objectStore=function(a){a=this.i.objectStore(a);var b=this.l.get(a);b||(b=new Tm(a),this.l.set(a,b));return b};
function an(a){this.i=a}
l=an.prototype;l.count=function(a){return Om(this.i.count(a))};
l.delete=function(a){return cn(this,{query:a},function(b){return b.delete().then(function(){return b.continue()})})};
l.get=function(a){return Om(this.i.get(a))};
l.getKey=function(a){return Om(this.i.getKey(a))};
l.keyPath=function(){return this.i.keyPath};
l.unique=function(){return this.i.unique};
function cn(a,b,c){a=a.i.openCursor(void 0===b.query?null:b.query,void 0===b.direction?"next":b.direction);return bn(a).then(function(d){return Pm(d,c)})}
function dn(a,b){this.request=a;this.cursor=b}
function bn(a){return Om(a).then(function(b){return b?new dn(a,b):null})}
l=dn.prototype;l.advance=function(a){this.cursor.advance(a);return bn(this.request)};
l.continue=function(a){this.cursor.continue(a);return bn(this.request)};
l.delete=function(){return Om(this.cursor.delete()).then(function(){})};
l.getKey=function(){return this.cursor.key};
l.getValue=function(){return this.cursor.value};
l.update=function(a){return Om(this.cursor.update(a))};function en(a,b,c){return new Promise(function(d,e){function f(){w||(w=new Qm(g.result,{closed:r}));return w}
var g=void 0!==b?self.indexedDB.open(a,b):self.indexedDB.open(a);var h=c.blocked,k=c.blocking,m=c.wd,q=c.upgrade,r=c.closed,w;g.addEventListener("upgradeneeded",function(u){try{if(null===u.newVersion)throw Error("Invariant: newVersion on IDbVersionChangeEvent is null");if(null===g.transaction)throw Error("Invariant: transaction on IDbOpenDbRequest is null");u.dataLoss&&"none"!==u.dataLoss&&om("IDB_DATA_CORRUPTED",{reason:u.dataLossMessage||"unknown reason",dbName:sm(a)});var A=f(),E=new Vm(g.transaction);
q&&q(A,function(F){return u.oldVersion<F&&u.newVersion>=F},E);
E.done.catch(function(F){e(F)})}catch(F){e(F)}});
g.addEventListener("success",function(){var u=g.result;k&&u.addEventListener("versionchange",function(){k(f())});
u.addEventListener("close",function(){om("IDB_UNEXPECTEDLY_CLOSED",{dbName:sm(a),dbVersion:u.version});m&&m()});
d(f())});
g.addEventListener("error",function(){e(g.error)});
h&&g.addEventListener("blocked",function(){h()})})}
function fn(a,b,c){c=void 0===c?{}:c;return en(a,b,c)}
function gn(a,b){b=void 0===b?{}:b;var c,d,e,f;return x(function(g){if(1==g.i)return ya(g,2),c=self.indexedDB.deleteDatabase(a),d=b,(e=d.blocked)&&c.addEventListener("blocked",function(){e()}),v(g,Nm(c),4);
if(2!=g.i)return za(g,0);f=Aa(g);throw Dm(f,a,"",-1);})}
;function hn(a){return new Promise(function(b){Zl(function(){b()},a)})}
function jn(a,b){this.name=a;this.options=b;this.m=!0;this.s=this.o=0;this.j=500}
jn.prototype.l=function(a,b,c){c=void 0===c?{}:c;return fn(a,b,c)};
jn.prototype.delete=function(a){a=void 0===a?{}:a;return gn(this.name,a)};
function kn(a,b){return new zm("INCOMPATIBLE_DB_VERSION",{dbName:a.name,oldVersion:a.options.version,newVersion:b})}
function ln(a,b){if(!b)throw Em("openWithToken",sm(a.name));return mn(a)}
function mn(a){function b(){var f,g,h,k,m,q,r,w,u,A;return x(function(E){switch(E.i){case 1:return g=null!=(f=Error().stack)?f:"",ya(E,2),v(E,a.l(a.name,a.options.version,d),4);case 4:h=E.j;for(var F=a.options,O=[],N=p(Object.keys(F.Ja)),R=N.next();!R.done;R=N.next()){R=R.value;var ca=F.Ja[R],W=void 0===ca.fd?Number.MAX_VALUE:ca.fd;!(h.i.version>=ca.nb)||h.i.version>=W||h.i.objectStoreNames.contains(R)||O.push(R)}k=O;if(0===k.length){E.u(5);break}m=Object.keys(a.options.Ja);q=h.objectStoreNames();
if(a.s<zk("ytidb_reopen_db_retries",0))return a.s++,h.close(),nm(new zm("DB_REOPENED_BY_MISSING_OBJECT_STORES",{dbName:a.name,expectedObjectStores:m,foundObjectStores:q})),E.return(b());if(!(a.o<zk("ytidb_remake_db_retries",1))){E.u(6);break}a.o++;if(!M("ytidb_remake_db_enable_backoff_delay")){E.u(7);break}return v(E,hn(a.j),8);case 8:a.j*=2;case 7:return v(E,a.delete(),9);case 9:return nm(new zm("DB_DELETED_BY_MISSING_OBJECT_STORES",{dbName:a.name,expectedObjectStores:m,foundObjectStores:q})),E.return(b());
case 6:throw new Am(q,m);case 5:return E.return(h);case 2:r=Aa(E);if(r instanceof DOMException?"VersionError"!==r.name:"DOMError"in self&&r instanceof DOMError?"VersionError"!==r.name:!(r instanceof Object&&"message"in r)||"An attempt was made to open a database using a lower version than the existing version."!==r.message){E.u(10);break}return v(E,a.l(a.name,void 0,Object.assign({},d,{upgrade:void 0})),11);case 11:w=E.j;u=w.i.version;if(void 0!==a.options.version&&u>a.options.version+1)throw w.close(),
a.m=!1,kn(a,u);return E.return(w);case 10:throw c(),r instanceof Error&&!M("ytidb_async_stack_killswitch")&&(r.stack=r.stack+"\n"+g.substring(g.indexOf("\n")+1)),Dm(r,a.name,"",null!=(A=a.options.version)?A:-1);}})}
function c(){a.i===e&&(a.i=void 0)}
if(!a.m)throw kn(a);if(a.i)return a.i;var d={blocking:function(f){f.close()},
closed:c,wd:c,upgrade:a.options.upgrade};var e=b();a.i=e;return a.i}
;var nn=new jn("YtIdbMeta",{Ja:{databases:{nb:1}},upgrade:function(a,b){b(1)&&Sm(a,"databases",{keyPath:"actualName"})}});
function on(a,b){var c;return x(function(d){if(1==d.i)return v(d,ln(nn,b),2);c=d.j;return d.return(Rm(c,["databases"],{U:!0,mode:"readwrite"},function(e){var f=e.objectStore("databases");return f.get(a.actualName).then(function(g){if(g?a.actualName!==g.actualName||a.publicName!==g.publicName||a.userIdentifier!==g.userIdentifier:1)return Om(f.i.put(a,void 0)).then(function(){})})}))})}
function pn(a,b){var c;return x(function(d){if(1==d.i)return a?v(d,ln(nn,b),2):d.return();c=d.j;return d.return(c.delete("databases",a))})}
function qn(a,b){var c,d;return x(function(e){return 1==e.i?(c=[],v(e,ln(nn,b),2)):3!=e.i?(d=e.j,v(e,Rm(d,["databases"],{U:!0,mode:"readonly"},function(f){c.length=0;return $m(f.objectStore("databases"),{},function(g){a(g.getValue())&&c.push(g.getValue());return g.continue()})}),3)):e.return(c)})}
function rn(a){return qn(function(b){return"LogsDatabaseV2"===b.publicName&&void 0!==b.userIdentifier},a)}
function sn(a,b,c){return qn(function(d){return c?void 0!==d.userIdentifier&&!a.includes(d.userIdentifier)&&c.includes(d.publicName):void 0!==d.userIdentifier&&!a.includes(d.userIdentifier)},b)}
function tn(a){var b,c;return x(function(d){if(1==d.i)return b=qm("YtIdbMeta hasAnyMeta other"),v(d,qn(function(e){return void 0!==e.userIdentifier&&e.userIdentifier!==b},a),2);
c=d.j;return d.return(0<c.length)})}
;var un,vn=new function(){}(new function(){});
function wn(){var a,b,c,d;return x(function(e){switch(e.i){case 1:a=fm();if(null==(b=a)?0:b.hasSucceededOnce)return e.return(!0);var f;if(f=cm)f=/WebKit\/([0-9]+)/.exec(Tb()),f=!!(f&&600<=parseInt(f[1],10));f&&(f=/WebKit\/([0-9]+)/.exec(Tb()),f=!(f&&602<=parseInt(f[1],10)));if(f||Lc)return e.return(!1);try{if(c=self,!(c.indexedDB&&c.IDBIndex&&c.IDBKeyRange&&c.IDBObjectStore))return e.return(!1)}catch(g){return e.return(!1)}if(!("IDBTransaction"in self&&"objectStoreNames"in IDBTransaction.prototype))return e.return(!1);
ya(e,2);d={actualName:"yt-idb-test-do-not-use",publicName:"yt-idb-test-do-not-use",userIdentifier:void 0};return v(e,on(d,vn),4);case 4:return v(e,pn("yt-idb-test-do-not-use",vn),5);case 5:return e.return(!0);case 2:return Aa(e),e.return(!1)}})}
function xn(){if(void 0!==un)return un;im=!0;return un=wn().then(function(a){im=!1;var b;if(null!=(b=em())&&b.i){var c;b={hasSucceededOnce:(null==(c=fm())?void 0:c.hasSucceededOnce)||a};var d;null==(d=em())||d.set("LAST_RESULT_ENTRY_KEY",b,2592E3,!0)}return a})}
function yn(){return B("ytglobal.idbToken_")||void 0}
function zn(){var a=yn();return a?Promise.resolve(a):xn().then(function(b){(b=b?vn:void 0)&&z("ytglobal.idbToken_",b);return b})}
;var An=0;function Bn(a,b){An||(An=Sh.S(function(){var c,d,e,f,g;return x(function(h){switch(h.i){case 1:return v(h,zn(),2);case 2:c=h.j;if(!c)return h.return();d=!0;ya(h,3);return v(h,sn(a,c,b),5);case 5:e=h.j;if(!e.length){d=!1;h.u(6);break}f=e[0];return v(h,gn(f.actualName),7);case 7:return v(h,pn(f.actualName,c),6);case 6:za(h,4);break;case 3:g=Aa(h),nm(g),d=!1;case 4:Sh.ea(An),An=0,d&&Bn(a,b),h.i=0}})}))}
function Cn(){var a;return x(function(b){return 1==b.i?v(b,zn(),2):(a=b.j)?b.return(tn(a)):b.return(!1)})}
new wh;function Dn(a){if(!pm())throw a=new zm("AUTH_INVALID",{dbName:a}),nm(a),a;var b=qm();return{actualName:a+":"+b,publicName:a,userIdentifier:b}}
function En(a,b,c,d){var e,f,g,h,k,m;return x(function(q){switch(q.i){case 1:return f=null!=(e=Error().stack)?e:"",v(q,zn(),2);case 2:g=q.j;if(!g)throw h=Em("openDbImpl",a,b),M("ytidb_async_stack_killswitch")||(h.stack=h.stack+"\n"+f.substring(f.indexOf("\n")+1)),nm(h),h;rm(a);k=c?{actualName:a,publicName:a,userIdentifier:void 0}:Dn(a);ya(q,3);return v(q,on(k,g),5);case 5:return v(q,fn(k.actualName,b,d),6);case 6:return q.return(q.j);case 3:return m=Aa(q),ya(q,7),v(q,pn(k.actualName,g),9);case 9:za(q,
8);break;case 7:Aa(q);case 8:throw m;}})}
function Fn(a,b,c){c=void 0===c?{}:c;return En(a,b,!1,c)}
function Gn(a,b,c){c=void 0===c?{}:c;return En(a,b,!0,c)}
function Hn(a,b){b=void 0===b?{}:b;var c,d;return x(function(e){if(1==e.i)return v(e,zn(),2);if(3!=e.i){c=e.j;if(!c)return e.return();rm(a);d=Dn(a);return v(e,gn(d.actualName,b),3)}return v(e,pn(d.actualName,c),0)})}
function In(a,b,c){a=a.map(function(d){return x(function(e){return 1==e.i?v(e,gn(d.actualName,b),2):v(e,pn(d.actualName,c),0)})});
return Promise.all(a).then(function(){})}
function Jn(){var a=void 0===a?{}:a;var b,c;return x(function(d){if(1==d.i)return v(d,zn(),2);if(3!=d.i){b=d.j;if(!b)return d.return();rm("LogsDatabaseV2");return v(d,rn(b),3)}c=d.j;return v(d,In(c,a,b),0)})}
function Kn(a,b){b=void 0===b?{}:b;var c;return x(function(d){if(1==d.i)return v(d,zn(),2);if(3!=d.i){c=d.j;if(!c)return d.return();rm(a);return v(d,gn(a,b),3)}return v(d,pn(a,c),0)})}
;function Ln(a){this.Wa=this.i=!1;this.potentialEsfErrorCounter=this.j=0;this.handleError=function(){};
this.Aa=function(){};
this.now=Date.now;this.Ha=!1;var b;this.tc=null!=(b=a.tc)?b:100;var c;this.oc=null!=(c=a.oc)?c:1;var d;this.mc=null!=(d=a.mc)?d:2592E6;var e;this.kc=null!=(e=a.kc)?e:12E4;var f;this.nc=null!=(f=a.nc)?f:5E3;var g;this.H=null!=(g=a.H)?g:void 0;this.bb=!!a.bb;var h;this.Za=null!=(h=a.Za)?h:.1;var k;this.hb=null!=(k=a.hb)?k:10;a.handleError&&(this.handleError=a.handleError);a.Aa&&(this.Aa=a.Aa);a.Ha&&(this.Ha=a.Ha);a.Wa&&(this.Wa=a.Wa);this.I=a.I;this.Y=a.Y;this.O=a.O;this.M=a.M;this.ia=a.ia;this.Cb=
a.Cb;this.Bb=a.Bb;Mn(this)&&(!this.I||this.I("networkless_logging"))&&Nn(this)}
function Nn(a){Mn(a)&&!a.Ha&&(a.i=!0,a.bb&&Math.random()<=a.Za&&a.O.Hc(a.H),On(a),a.M.L()&&a.Na(),a.M.Z(a.Cb,a.Na.bind(a)),a.M.Z(a.Bb,a.Pb.bind(a)))}
l=Ln.prototype;l.writeThenSend=function(a,b){var c=this;b=void 0===b?{}:b;if(Mn(this)&&this.i){var d={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0};this.O.set(d,this.H).then(function(e){d.id=e;c.M.L()&&Pn(c,d)}).catch(function(e){Pn(c,d);
Qn(c,e)})}else this.ia(a,b)};
l.sendThenWrite=function(a,b,c){var d=this;b=void 0===b?{}:b;if(Mn(this)&&this.i){var e={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0};this.I&&this.I("nwl_skip_retry")&&(e.skipRetry=c);if(this.M.L()||this.I&&this.I("nwl_aggressive_send_then_write")&&!e.skipRetry){if(!e.skipRetry){var f=b.onError?b.onError:function(){};
b.onError=function(g,h){return x(function(k){if(1==k.i)return v(k,d.O.set(e,d.H).catch(function(m){Qn(d,m)}),2);
f(g,h);k.i=0})}}this.ia(a,b,e.skipRetry)}else this.O.set(e,this.H).catch(function(g){d.ia(a,b,e.skipRetry);
Qn(d,g)})}else this.ia(a,b,this.I&&this.I("nwl_skip_retry")&&c)};
l.sendAndWrite=function(a,b){var c=this;b=void 0===b?{}:b;if(Mn(this)&&this.i){var d={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0},e=!1,f=b.onSuccess?b.onSuccess:function(){};
d.options.onSuccess=function(g,h){void 0!==d.id?c.O.za(d.id,c.H):e=!0;c.M.ha&&c.I&&c.I("vss_network_hint")&&c.M.ha(!0);f(g,h)};
this.ia(d.url,d.options);this.O.set(d,this.H).then(function(g){d.id=g;e&&c.O.za(d.id,c.H)}).catch(function(g){Qn(c,g)})}else this.ia(a,b)};
l.Na=function(){var a=this;if(!Mn(this))throw Em("throttleSend");this.j||(this.j=this.Y.S(function(){var b;return x(function(c){if(1==c.i)return v(c,a.O.Zb("NEW",a.H),2);if(3!=c.i)return b=c.j,b?v(c,Pn(a,b),3):(a.Pb(),c.return());a.j&&(a.j=0,a.Na());c.i=0})},this.tc))};
l.Pb=function(){this.Y.ea(this.j);this.j=0};
function Pn(a,b){var c,d;return x(function(e){switch(e.i){case 1:if(!Mn(a))throw c=Em("immediateSend"),c;if(void 0===b.id){e.u(2);break}return v(e,a.O.Xc(b.id,a.H),3);case 3:(d=e.j)?b=d:a.Aa(Error("The request cannot be found in the database."));case 2:if(Rn(a,b,a.mc)){e.u(4);break}a.Aa(Error("Networkless Logging: Stored logs request expired age limit"));if(void 0===b.id){e.u(5);break}return v(e,a.O.za(b.id,a.H),5);case 5:return e.return();case 4:b.skipRetry||(b=Sn(a,b));if(!b){e.u(0);break}if(!b.skipRetry||
void 0===b.id){e.u(8);break}return v(e,a.O.za(b.id,a.H),8);case 8:a.ia(b.url,b.options,!!b.skipRetry),e.i=0}})}
function Sn(a,b){if(!Mn(a))throw Em("updateRequestHandlers");var c=b.options.onError?b.options.onError:function(){};
b.options.onError=function(e,f){var g,h,k;return x(function(m){switch(m.i){case 1:g=Tn(f);if(!(a.I&&a.I("nwl_consider_error_code")&&g||a.I&&!a.I("nwl_consider_error_code")&&a.potentialEsfErrorCounter<=a.hb)){m.u(2);break}if(!a.M.La){m.u(3);break}return v(m,a.M.La(),3);case 3:if(a.M.L()){m.u(2);break}c(e,f);if(!a.I||!a.I("nwl_consider_error_code")||void 0===(null==(h=b)?void 0:h.id)){m.u(6);break}return v(m,a.O.Fb(b.id,a.H,!1),6);case 6:return m.return();case 2:if(a.I&&a.I("nwl_consider_error_code")&&
!g&&a.potentialEsfErrorCounter>a.hb)return m.return();a.potentialEsfErrorCounter++;if(void 0===(null==(k=b)?void 0:k.id)){m.u(8);break}return b.sendCount<a.oc?v(m,a.O.Fb(b.id,a.H),12):v(m,a.O.za(b.id,a.H),8);case 12:a.Y.S(function(){a.M.L()&&a.Na()},a.nc);
case 8:c(e,f),m.i=0}})};
var d=b.options.onSuccess?b.options.onSuccess:function(){};
b.options.onSuccess=function(e,f){var g;return x(function(h){if(1==h.i)return void 0===(null==(g=b)?void 0:g.id)?h.u(2):v(h,a.O.za(b.id,a.H),2);a.M.ha&&a.I&&a.I("vss_network_hint")&&a.M.ha(!0);d(e,f);h.i=0})};
return b}
function Rn(a,b,c){b=b.timestamp;return a.now()-b>=c?!1:!0}
function On(a){if(!Mn(a))throw Em("retryQueuedRequests");a.O.Zb("QUEUED",a.H).then(function(b){b&&!Rn(a,b,a.kc)?a.Y.S(function(){return x(function(c){if(1==c.i)return void 0===b.id?c.u(2):v(c,a.O.Fb(b.id,a.H),2);On(a);c.i=0})}):a.M.L()&&a.Na()})}
function Qn(a,b){a.xc&&!a.M.L()?a.xc(b):a.handleError(b)}
function Mn(a){return!!a.H||a.Wa}
function Tn(a){var b;return(a=null==a?void 0:null==(b=a.error)?void 0:b.code)&&400<=a&&599>=a?!1:!0}
;function Un(a,b){this.version=a;this.args=b}
;function Vn(a,b){this.topic=a;this.i=b}
Vn.prototype.toString=function(){return this.topic};var Wn=B("ytPubsub2Pubsub2Instance")||new K;K.prototype.subscribe=K.prototype.subscribe;K.prototype.unsubscribeByKey=K.prototype.Ea;K.prototype.publish=K.prototype.qa;K.prototype.clear=K.prototype.clear;z("ytPubsub2Pubsub2Instance",Wn);var Xn=B("ytPubsub2Pubsub2SubscribedKeys")||{};z("ytPubsub2Pubsub2SubscribedKeys",Xn);var Yn=B("ytPubsub2Pubsub2TopicToKeys")||{};z("ytPubsub2Pubsub2TopicToKeys",Yn);var Zn=B("ytPubsub2Pubsub2IsAsync")||{};z("ytPubsub2Pubsub2IsAsync",Zn);
z("ytPubsub2Pubsub2SkipSubKey",null);function $n(a,b){var c=ao();c&&c.publish.call(c,a.toString(),a,b)}
function bo(a){var b=co,c=ao();if(!c)return 0;var d=c.subscribe(b.toString(),function(e,f){var g=B("ytPubsub2Pubsub2SkipSubKey");g&&g==d||(g=function(){if(Xn[d])try{if(f&&b instanceof Vn&&b!=e)try{var h=b.i,k=f;if(!k.args||!k.version)throw Error("yt.pubsub2.Data.deserialize(): serializedData is incomplete.");try{if(!h.na){var m=new h;h.na=m.version}var q=h.na}catch(F){}if(!q||k.version!=q)throw Error("yt.pubsub2.Data.deserialize(): serializedData version is incompatible.");try{q=Reflect;var r=q.construct;
var w=k.args,u=w.length;if(0<u){var A=Array(u);for(k=0;k<u;k++)A[k]=w[k];var E=A}else E=[];f=r.call(q,h,E)}catch(F){throw F.message="yt.pubsub2.Data.deserialize(): "+F.message,F;}}catch(F){throw F.message="yt.pubsub2.pubsub2 cross-binary conversion error for "+b.toString()+": "+F.message,F;}a.call(window,f)}catch(F){Fk(F)}},Zn[b.toString()]?B("yt.scheduler.instance")?Sh.S(g):Zk(g,0):g())});
Xn[d]=!0;Yn[b.toString()]||(Yn[b.toString()]=[]);Yn[b.toString()].push(d);return d}
function eo(){var a=fo,b=bo(function(c){a.apply(void 0,arguments);go(b)});
return b}
function go(a){var b=ao();b&&("number"===typeof a&&(a=[a]),fb(a,function(c){b.unsubscribeByKey(c);delete Xn[c]}))}
function ao(){return B("ytPubsub2Pubsub2Instance")}
;function ho(a,b){jn.call(this,a,b);this.options=b;rm(a)}
t(ho,jn);function io(a,b){var c;return function(){c||(c=new ho(a,b));return c}}
ho.prototype.l=function(a,b,c){c=void 0===c?{}:c;return(this.options.Hb?Gn:Fn)(a,b,Object.assign({},c))};
ho.prototype.delete=function(a){a=void 0===a?{}:a;return(this.options.Hb?Kn:Hn)(this.name,a)};
function jo(a,b){return io(a,b)}
;var ko;
function lo(){if(ko)return ko();var a={};ko=jo("LogsDatabaseV2",{Ja:(a.LogsRequestsStore={nb:2},a),Hb:!1,upgrade:function(b,c,d){c(2)&&Sm(b,"LogsRequestsStore",{keyPath:"id",autoIncrement:!0});c(3);c(5)&&(d=d.objectStore("LogsRequestsStore"),d.i.indexNames.contains("newRequest")&&d.i.deleteIndex("newRequest"),d.i.createIndex("newRequestV2",["status","interface","timestamp"],{unique:!1}));c(7)&&b.i.objectStoreNames.contains("sapisid")&&b.i.deleteObjectStore("sapisid");c(9)&&b.i.objectStoreNames.contains("SWHealthLog")&&b.i.deleteObjectStore("SWHealthLog")},
version:9});return ko()}
;function mo(a){return ln(lo(),a)}
function no(a,b){var c,d,e,f;return x(function(g){if(1==g.i)return c={startTime:P(),transactionType:"YT_IDB_TRANSACTION_TYPE_WRITE"},v(g,mo(b),2);if(3!=g.i)return d=g.j,e=Object.assign({},a,{options:JSON.parse(JSON.stringify(a.options)),interface:L("INNERTUBE_CONTEXT_CLIENT_NAME",0)}),v(g,Um(d,e),3);f=g.j;c.yd=P();oo(c);return g.return(f)})}
function po(a,b){var c,d,e,f,g,h,k;return x(function(m){if(1==m.i)return c={startTime:P(),transactionType:"YT_IDB_TRANSACTION_TYPE_READ"},v(m,mo(b),2);if(3!=m.i)return d=m.j,e=L("INNERTUBE_CONTEXT_CLIENT_NAME",0),f=[a,e,0],g=[a,e,P()],h=IDBKeyRange.bound(f,g),k=void 0,v(m,Rm(d,["LogsRequestsStore"],{mode:"readwrite",U:!0},function(q){return cn(q.objectStore("LogsRequestsStore").index("newRequestV2"),{query:h,direction:"prev"},function(r){r.getValue()&&(k=r.getValue(),"NEW"===a&&(k.status="QUEUED",
r.update(k)))})}),3);
c.yd=P();oo(c);return m.return(k)})}
function qo(a,b){var c;return x(function(d){if(1==d.i)return v(d,mo(b),2);c=d.j;return d.return(Rm(c,["LogsRequestsStore"],{mode:"readwrite",U:!0},function(e){var f=e.objectStore("LogsRequestsStore");return f.get(a).then(function(g){if(g)return g.status="QUEUED",Om(f.i.put(g,void 0)).then(function(){return g})})}))})}
function ro(a,b,c){c=void 0===c?!0:c;var d;return x(function(e){if(1==e.i)return v(e,mo(b),2);d=e.j;return e.return(Rm(d,["LogsRequestsStore"],{mode:"readwrite",U:!0},function(f){var g=f.objectStore("LogsRequestsStore");return g.get(a).then(function(h){return h?(h.status="NEW",c&&(h.sendCount+=1),Om(g.i.put(h,void 0)).then(function(){return h})):Im.resolve(void 0)})}))})}
function so(a,b){var c;return x(function(d){if(1==d.i)return v(d,mo(b),2);c=d.j;return d.return(c.delete("LogsRequestsStore",a))})}
function to(a){var b,c;return x(function(d){if(1==d.i)return v(d,mo(a),2);b=d.j;c=P()-2592E6;return v(d,Rm(b,["LogsRequestsStore"],{mode:"readwrite",U:!0},function(e){return $m(e.objectStore("LogsRequestsStore"),{},function(f){if(f.getValue().timestamp<=c)return f.delete().then(function(){return f.continue()})})}),0)})}
function uo(){return x(function(a){return v(a,Jn(),0)})}
function oo(a){M("nwl_csi_killswitch")||.01>=Math.random()&&$n("nwl_transaction_latency_payload",a)}
;var vo={},wo=jo("ServiceWorkerLogsDatabase",{Ja:(vo.SWHealthLog={nb:1},vo),Hb:!0,upgrade:function(a,b){b(1)&&Sm(a,"SWHealthLog",{keyPath:"id",autoIncrement:!0}).i.createIndex("swHealthNewRequest",["interface","timestamp"],{unique:!1})},
version:1});function xo(a){return ln(wo(),a)}
function yo(a){var b,c;return x(function(d){if(1==d.i)return v(d,xo(a),2);b=d.j;c=P()-2592E6;return v(d,Rm(b,["SWHealthLog"],{mode:"readwrite",U:!0},function(e){return $m(e.objectStore("SWHealthLog"),{},function(f){if(f.getValue().timestamp<=c)return f.delete().then(function(){return f.continue()})})}),0)})}
function zo(a){var b;return x(function(c){if(1==c.i)return v(c,xo(a),2);b=c.j;return v(c,b.clear("SWHealthLog"),0)})}
;var Ao={},Bo=0;
function Co(a){var b=void 0===b?"":b;var c=void 0===c?!1:c;if(a)if(b)il(a,void 0,"POST",b);else if(L("USE_NET_AJAX_FOR_PING_TRANSPORT",!1))il(a,void 0,"GET","",void 0,void 0,c);else{b:{try{var d=new bb({url:a});if(d.l&&d.j||d.m){var e=mc(nc(5,a)),f;if(!(f=!e||!e.endsWith("/aclk"))){var g=a.search(yc),h=xc(a,0,"ri",g);if(0>h)var k=null;else{var m=a.indexOf("&",h);if(0>m||m>g)m=g;k=decodeURIComponent(a.slice(h+3,-1!==m?m:0).replace(/\+/g," "))}f="1"!==k}var q=!f;break b}}catch(w){}q=!1}if(q){b:{try{if(window.navigator&&
window.navigator.sendBeacon&&window.navigator.sendBeacon(a,"")){var r=!0;break b}}catch(w){}r=!1}b=r?!0:!1}else b=!1;b||Do(a)}}
function Do(a){var b=new Image,c=""+Bo++;Ao[c]=b;b.onload=b.onerror=function(){delete Ao[c]};
b.src=a}
;function Eo(){this.i=new Map;this.j=!1}
function Fo(){if(!Eo.i){var a=B("yt.networkRequestMonitor.instance")||new Eo;z("yt.networkRequestMonitor.instance",a);Eo.i=a}return Eo.i}
Eo.prototype.requestComplete=function(a,b){b&&(this.j=!0);a=this.removeParams(a);this.i.get(a)||this.i.set(a,b)};
Eo.prototype.isEndpointCFR=function(a){a=this.removeParams(a);return(a=this.i.get(a))?!1:!1===a&&this.j?!0:null};
Eo.prototype.removeParams=function(a){return a.split("?")[0]};
Eo.prototype.removeParams=Eo.prototype.removeParams;Eo.prototype.isEndpointCFR=Eo.prototype.isEndpointCFR;Eo.prototype.requestComplete=Eo.prototype.requestComplete;Eo.getInstance=Fo;var Go;function Ho(){Go||(Go=new Pl("yt.offline"));return Go}
function Io(a){if(M("offline_error_handling")){var b=Ho().get("errors",!0)||{};b[a.message]={name:a.name,stack:a.stack};a.level&&(b[a.message].level=a.level);Ho().set("errors",b,2592E3,!0)}}
;function Jo(){We.call(this);var a=this;this.l=!1;this.j=Rh();this.j.Z("networkstatus-online",function(){if(a.l&&M("offline_error_handling")){var b=Ho().get("errors",!0);if(b){for(var c in b)if(b[c]){var d=new Q(c,"sent via offline_errors");d.name=b[c].name;d.stack=b[c].stack;d.level=b[c].level;Fk(d)}Ho().set("errors",{},2592E3,!0)}}})}
t(Jo,We);function Ko(){if(!Jo.i){var a=B("yt.networkStatusManager.instance")||new Jo;z("yt.networkStatusManager.instance",a);Jo.i=a}return Jo.i}
l=Jo.prototype;l.L=function(){return this.j.L()};
l.ha=function(a){this.j.j=a};
l.Rc=function(){var a=window.navigator.onLine;return void 0===a?!0:a};
l.Lc=function(){this.l=!0};
l.Z=function(a,b){return this.j.Z(a,b)};
l.La=function(a){a=Ph(this.j,a);a.then(function(b){M("use_cfr_monitor")&&Fo().requestComplete("generate_204",b)});
return a};
Jo.prototype.sendNetworkCheckRequest=Jo.prototype.La;Jo.prototype.listen=Jo.prototype.Z;Jo.prototype.enableErrorFlushing=Jo.prototype.Lc;Jo.prototype.getWindowStatus=Jo.prototype.Rc;Jo.prototype.networkStatusHint=Jo.prototype.ha;Jo.prototype.isNetworkAvailable=Jo.prototype.L;Jo.getInstance=Ko;function Lo(a){a=void 0===a?{}:a;We.call(this);var b=this;this.j=this.s=0;this.l=Ko();var c=B("yt.networkStatusManager.instance.listen").bind(this.l);c&&(a.jb?(this.jb=a.jb,c("networkstatus-online",function(){Mo(b,"publicytnetworkstatus-online")}),c("networkstatus-offline",function(){Mo(b,"publicytnetworkstatus-offline")})):(c("networkstatus-online",function(){Xe(b,"publicytnetworkstatus-online")}),c("networkstatus-offline",function(){Xe(b,"publicytnetworkstatus-offline")})))}
t(Lo,We);Lo.prototype.L=function(){var a=B("yt.networkStatusManager.instance.isNetworkAvailable");return a?a.bind(this.l)():!0};
Lo.prototype.ha=function(a){var b=B("yt.networkStatusManager.instance.networkStatusHint").bind(this.l);b&&b(a)};
Lo.prototype.La=function(a){var b=this,c;return x(function(d){c=B("yt.networkStatusManager.instance.sendNetworkCheckRequest").bind(b.l);return M("skip_network_check_if_cfr")&&Fo().isEndpointCFR("generate_204")?d.return(new Promise(function(e){var f;b.ha((null==(f=window.navigator)?void 0:f.onLine)||!0);e(b.L())})):c?d.return(c(a)):d.return(!0)})};
function Mo(a,b){a.jb?a.j?(Sh.ea(a.s),a.s=Sh.S(function(){a.o!==b&&(Xe(a,b),a.o=b,a.j=P())},a.jb-(P()-a.j))):(Xe(a,b),a.o=b,a.j=P()):Xe(a,b)}
;var No;function Oo(){var a=Ln.call;No||(No=new Lo({Wc:!0,Mc:!0}));a.call(Ln,this,{O:{Hc:to,za:so,Zb:po,Xc:qo,Fb:ro,set:no},M:No,handleError:Fk,Aa:Gk,ia:Po,now:P,xc:Io,Y:bm(),Cb:"publicytnetworkstatus-online",Bb:"publicytnetworkstatus-offline",bb:!0,Za:.1,hb:zk("potential_esf_error_limit",10),I:M,Ha:!(pm()&&Qo())});this.l=new wh;M("networkless_immediately_drop_all_requests")&&uo();Kn("LogsDatabaseV2")}
t(Oo,Ln);function Ro(){var a=B("yt.networklessRequestController.instance");a||(a=new Oo,z("yt.networklessRequestController.instance",a),M("networkless_logging")&&zn().then(function(b){a.H=b;Nn(a);a.l.resolve();a.bb&&Math.random()<=a.Za&&a.H&&yo(a.H);M("networkless_immediately_drop_sw_health_store")&&So(a)}));
return a}
Oo.prototype.writeThenSend=function(a,b){b||(b={});pm()||(this.i=!1);Ln.prototype.writeThenSend.call(this,a,b)};
Oo.prototype.sendThenWrite=function(a,b,c){b||(b={});pm()||(this.i=!1);Ln.prototype.sendThenWrite.call(this,a,b,c)};
Oo.prototype.sendAndWrite=function(a,b){b||(b={});pm()||(this.i=!1);Ln.prototype.sendAndWrite.call(this,a,b)};
Oo.prototype.awaitInitialization=function(){return this.l.promise};
function So(a){var b;x(function(c){if(!a.H)throw b=Em("clearSWHealthLogsDb"),b;return c.return(zo(a.H).catch(function(d){a.handleError(d)}))})}
function Po(a,b,c){M("use_cfr_monitor")&&To(a,b);if(M("use_request_time_ms_header"))b.headers&&(b.headers["X-Goog-Request-Time"]=JSON.stringify(Math.round(P())));else{var d;if(null==(d=b.postParams)?0:d.requestTimeMs)b.postParams.requestTimeMs=Math.round(P())}c&&0===Object.keys(b).length?Co(a):fl(a,b)}
function To(a,b){var c=b.onError?b.onError:function(){};
b.onError=function(e,f){Fo().requestComplete(a,!1);c(e,f)};
var d=b.onSuccess?b.onSuccess:function(){};
b.onSuccess=function(e,f){Fo().requestComplete(a,!0);d(e,f)}}
function Qo(){return"www.youtube-nocookie.com"!==oc(document.location.toString())}
;var Uo=!1,Vo=0,Wo=0,Xo,Yo=y.ytNetworklessLoggingInitializationOptions||{isNwlInitialized:Uo,potentialEsfErrorCounter:Wo};z("ytNetworklessLoggingInitializationOptions",Yo);
function Zo(){var a;x(function(b){switch(b.i){case 1:return v(b,zn(),2);case 2:a=b.j;if(!a||!pm()&&!M("nwl_init_require_datasync_id_killswitch")||!Qo()){b.u(0);break}Uo=!0;Yo.isNwlInitialized=Uo;if(!M("use_new_nwl_initialization")){b.u(4);break}return v(b,Ro().awaitInitialization(),5);case 5:return b.return();case 4:return v(b,Kn("LogsDatabaseV2"),6);case 6:if(!(.1>=Math.random())){b.u(7);break}return v(b,to(a),8);case 8:return v(b,yo(a),7);case 7:$o();ap().L()&&bp();ap().Z("publicytnetworkstatus-online",
bp);ap().Z("publicytnetworkstatus-offline",cp);if(!M("networkless_immediately_drop_sw_health_store")){b.u(10);break}return v(b,dp(),10);case 10:if(M("networkless_immediately_drop_all_requests"))return v(b,uo(),0);b.u(0)}})}
function ep(a,b){function c(d){var e=ap().L();if(!fp()||!d||e&&M("vss_networkless_bypass_write"))gp(a,b);else{var f={url:a,options:b,timestamp:P(),status:"NEW",sendCount:0};no(f,d).then(function(g){f.id=g;ap().L()&&hp(f)}).catch(function(g){hp(f);
ap().L()?Fk(g):Io(g)})}}
b=void 0===b?{}:b;M("skip_is_supported_killswitch")?zn().then(function(d){c(d)}):c(yn())}
function ip(a,b){function c(d){if(fp()&&d){var e={url:a,options:b,timestamp:P(),status:"NEW",sendCount:0},f=!1,g=b.onSuccess?b.onSuccess:function(){};
e.options.onSuccess=function(k,m){M("use_cfr_monitor")&&Fo().requestComplete(e.url,!0);void 0!==e.id?so(e.id,d):f=!0;M("vss_network_hint")&&ap().ha(!0);g(k,m)};
if(M("use_cfr_monitor")){var h=b.onError?b.onError:function(){};
e.options.onError=function(k,m){Fo().requestComplete(e.url,!1);h(k,m)}}gp(e.url,e.options);
no(e,d).then(function(k){e.id=k;f&&so(e.id,d)}).catch(function(k){ap().L()?Fk(k):Io(k)})}else gp(a,b)}
b=void 0===b?{}:b;M("skip_is_supported_killswitch")?zn().then(function(d){c(d)}):c(yn())}
function bp(){var a=yn();if(!a)throw Em("throttleSend");Vo||(Vo=Sh.S(function(){var b;return x(function(c){if(1==c.i)return v(c,po("NEW",a),2);if(3!=c.i)return b=c.j,b?v(c,hp(b),3):(cp(),c.return());Vo&&(Vo=0,bp());c.i=0})},100))}
function cp(){Sh.ea(Vo);Vo=0}
function hp(a){var b,c,d;return x(function(e){switch(e.i){case 1:b=yn();if(!b)throw c=Em("immediateSend"),c;if(void 0===a.id){e.u(2);break}return v(e,qo(a.id,b),3);case 3:(d=e.j)?a=d:Gk(Error("The request cannot be found in the database."));case 2:if(jp(a,2592E6)){e.u(4);break}Gk(Error("Networkless Logging: Stored logs request expired age limit"));if(void 0===a.id){e.u(5);break}return v(e,so(a.id,b),5);case 5:return e.return();case 4:a.skipRetry||(a=kp(a));var f=a;if(M("use_request_time_ms_header")){var g;
if(null==f?0:null==(g=f.options)?0:g.headers)f.options.headers["X-Goog-Request-Time"]=JSON.stringify(Math.round(P()))}else{var h,k;if(null==f?0:null==(h=f.options)?0:null==(k=h.postParams)?0:k.requestTimeMs)f.options.postParams.requestTimeMs=Math.round(P())}a=f;if(!a){e.u(0);break}if(!a.skipRetry||void 0===a.id){e.u(8);break}return v(e,so(a.id,b),8);case 8:gp(a.url,a.options,!!a.skipRetry),e.i=0}})}
function kp(a){var b=yn();if(!b)throw Em("updateRequestHandlers");var c=a.options.onError?a.options.onError:function(){};
a.options.onError=function(e,f){var g,h,k;return x(function(m){switch(m.i){case 1:M("use_cfr_monitor")&&Fo().requestComplete(a.url,!1);g=Tn(f);if(!(M("nwl_consider_error_code")&&g||!M("nwl_consider_error_code")&&lp()<=zk("potential_esf_error_limit",10))){m.u(2);break}if(M("skip_checking_network_on_cfr_failure")&&(!M("skip_checking_network_on_cfr_failure")||Fo().isEndpointCFR(a.url))){m.u(3);break}return v(m,ap().La(),3);case 3:if(ap().L()){m.u(2);break}c(e,f);if(!M("nwl_consider_error_code")||void 0===
(null==(h=a)?void 0:h.id)){m.u(6);break}return v(m,ro(a.id,b,!1),6);case 6:return m.return();case 2:if(M("nwl_consider_error_code")&&!g&&lp()>zk("potential_esf_error_limit",10))return m.return();B("ytNetworklessLoggingInitializationOptions")&&Yo.potentialEsfErrorCounter++;Wo++;if(void 0===(null==(k=a)?void 0:k.id)){m.u(8);break}return 1>a.sendCount?v(m,ro(a.id,b),12):v(m,so(a.id,b),8);case 12:Sh.S(function(){ap().L()&&bp()},5E3);
case 8:c(e,f),m.i=0}})};
var d=a.options.onSuccess?a.options.onSuccess:function(){};
a.options.onSuccess=function(e,f){var g;return x(function(h){if(1==h.i)return M("use_cfr_monitor")&&Fo().requestComplete(a.url,!0),void 0===(null==(g=a)?void 0:g.id)?h.u(2):v(h,so(a.id,b),2);M("vss_network_hint")&&ap().ha(!0);d(e,f);h.i=0})};
return a}
function jp(a,b){a=a.timestamp;return P()-a>=b?!1:!0}
function $o(){var a=yn();if(!a)throw Em("retryQueuedRequests");po("QUEUED",a).then(function(b){b&&!jp(b,12E4)?Sh.S(function(){return x(function(c){if(1==c.i)return void 0===b.id?c.u(2):v(c,ro(b.id,a),2);$o();c.i=0})}):ap().L()&&bp()})}
function dp(){var a,b;return x(function(c){a=yn();if(!a)throw b=Em("clearSWHealthLogsDb"),b;return c.return(zo(a).catch(function(d){Fk(d)}))})}
function ap(){Xo||(Xo=new Lo({Wc:!0,Mc:!0}));return Xo}
function gp(a,b,c){c&&0===Object.keys(b).length?Co(a):fl(a,b)}
function fp(){return B("ytNetworklessLoggingInitializationOptions")?Yo.isNwlInitialized:Uo}
function lp(){return B("ytNetworklessLoggingInitializationOptions")?Yo.potentialEsfErrorCounter:Wo}
;function mp(a){var b=this;this.config_=null;a?this.config_=a:Fl()&&(this.config_=Gl());Yl(function(){Vl(b)},0,5E3)}
mp.prototype.isReady=function(){!this.config_&&Fl()&&(this.config_=Gl());return!!this.config_};
function Wl(a,b,c,d){function e(A){A=void 0===A?!1:A;var E;if(d.retry&&"www.youtube-nocookie.com"!=h&&(A||M("skip_ls_gel_retry")||"application/json"!==g.headers["Content-Type"]||(E=Tl(b,c,m,k)),E)){var F=g.onSuccess,O=g.onFetchSuccess;g.onSuccess=function(N,R){Ul(E);F(N,R)};
c.onFetchSuccess=function(N,R){Ul(E);O(N,R)}}try{A&&d.retry&&!d.hc.bypassNetworkless?(g.method="POST",d.hc.writeThenSend?M("use_new_nwl_wts")?Ro().writeThenSend(u,g):ep(u,g):M("use_new_nwl_saw")?Ro().sendAndWrite(u,g):ip(u,g)):M("web_all_payloads_via_jspb")?fl(u,g):(g.method="POST",g.postParams||(g.postParams={}),fl(u,g))}catch(N){if("InvalidAccessError"==N.name)E&&(Ul(E),E=0),Gk(Error("An extension is blocking network request."));
else throw N;}E&&Yl(function(){Vl(a)},0,5E3)}
!L("VISITOR_DATA")&&"visitor_id"!==b&&.01>Math.random()&&Gk(new Q("Missing VISITOR_DATA when sending innertube request.",b,c,d));if(!a.isReady()){var f=new Q("innertube xhrclient not ready",b,c,d);Fk(f);throw f;}var g={headers:d.headers||{},method:"POST",postParams:c,postBody:d.postBody,postBodyFormat:d.postBodyFormat||"JSON",onTimeout:function(){d.onTimeout()},
onFetchTimeout:d.onTimeout,onSuccess:function(A,E){if(d.onSuccess)d.onSuccess(E)},
onFetchSuccess:function(A){if(d.onSuccess)d.onSuccess(A)},
onError:function(A,E){if(d.onError)d.onError(E)},
onFetchError:function(A){if(d.onError)d.onError(A)},
timeout:d.timeout,withCredentials:!0};g.headers["Content-Type"]||(g.headers["Content-Type"]="application/json");var h="";(f=a.config_.Tc)&&(h=f);var k=a.config_.Vc||!1,m=Nl(k,h,d);Object.assign(g.headers,m);(f=g.headers.Authorization)&&!h&&(g.headers["x-origin"]=window.location.origin);var q="/youtubei/"+a.config_.innertubeApiVersion+"/"+b,r={alt:"json"},w=a.config_.Uc&&f;w=w&&f.startsWith("Bearer");w||(r.key=a.config_.innertubeApiKey);var u=Sk(""+h+q,r||{},!0);fp()?xn().then(function(A){e(A)}):e(!1)}
;var np=0,op=Nc?"webkit":Mc?"moz":Kc?"ms":Jc?"o":"";z("ytDomDomGetNextId",B("ytDomDomGetNextId")||function(){return++np});var pp={stopImmediatePropagation:1,stopPropagation:1,preventMouseEvent:1,preventManipulation:1,preventDefault:1,layerX:1,layerY:1,screenX:1,screenY:1,scale:1,rotation:1,webkitMovementX:1,webkitMovementY:1};
function Dp(a){this.type="";this.state=this.source=this.data=this.currentTarget=this.relatedTarget=this.target=null;this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.ctrlKey=this.altKey=!1;this.rotation=this.clientY=this.clientX=0;this.scale=1;this.changedTouches=this.touches=null;try{if(a=a||window.event){this.event=a;for(var b in a)b in pp||(this[b]=a[b]);this.scale=a.scale;this.rotation=a.rotation;var c=a.target||a.srcElement;c&&3==c.nodeType&&(c=c.parentNode);this.target=c;var d=a.relatedTarget;
if(d)try{d=d.nodeName?d:null}catch(e){d=null}else"mouseover"==this.type?d=a.fromElement:"mouseout"==this.type&&(d=a.toElement);this.relatedTarget=d;this.clientX=void 0!=a.clientX?a.clientX:a.pageX;this.clientY=void 0!=a.clientY?a.clientY:a.pageY;this.keyCode=a.keyCode?a.keyCode:a.which;this.charCode=a.charCode||("keypress"==this.type?this.keyCode:0);this.altKey=a.altKey;this.ctrlKey=a.ctrlKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.i=a.pageX;this.j=a.pageY}}catch(e){}}
function bq(a){if(document.body&&document.documentElement){var b=document.body.scrollTop+document.documentElement.scrollTop;a.i=a.clientX+(document.body.scrollLeft+document.documentElement.scrollLeft);a.j=a.clientY+b}}
Dp.prototype.preventDefault=function(){this.event&&(this.event.returnValue=!1,this.event.preventDefault&&this.event.preventDefault())};
Dp.prototype.stopPropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopPropagation&&this.event.stopPropagation())};
Dp.prototype.stopImmediatePropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopImmediatePropagation&&this.event.stopImmediatePropagation())};var qb=y.ytEventsEventsListeners||{};z("ytEventsEventsListeners",qb);var cq=y.ytEventsEventsCounter||{count:0};z("ytEventsEventsCounter",cq);
function dq(a,b,c,d){d=void 0===d?{}:d;a.addEventListener&&("mouseenter"!=b||"onmouseenter"in document?"mouseleave"!=b||"onmouseenter"in document?"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"):b="mouseout":b="mouseover");return ob(function(e){var f="boolean"===typeof e[4]&&e[4]==!!d,g=Qa(e[4])&&Qa(d)&&ub(e[4],d);return!!e.length&&e[0]==a&&e[1]==b&&e[2]==c&&(f||g)})}
var eq=db(function(){var a=!1;try{var b=Object.defineProperty({},"capture",{get:function(){a=!0}});
window.addEventListener("test",null,b)}catch(c){}return a});
function fq(a,b,c,d){d=void 0===d?{}:d;if(!a||!a.addEventListener&&!a.attachEvent)return"";var e=dq(a,b,c,d);if(e)return e;e=++cq.count+"";var f=!("mouseenter"!=b&&"mouseleave"!=b||!a.addEventListener||"onmouseenter"in document);var g=f?function(h){h=new Dp(h);if(!ff(h.relatedTarget,function(k){return k==a}))return h.currentTarget=a,h.type=b,c.call(a,h)}:function(h){h=new Dp(h);
h.currentTarget=a;return c.call(a,h)};
g=Ek(g);a.addEventListener?("mouseenter"==b&&f?b="mouseover":"mouseleave"==b&&f?b="mouseout":"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"),eq()||"boolean"===typeof d?a.addEventListener(b,g,d):a.addEventListener(b,g,!!d.capture)):a.attachEvent("on"+b,g);qb[e]=[a,b,c,g,d];return e}
function gq(a){a&&("string"==typeof a&&(a=[a]),fb(a,function(b){if(b in qb){var c=qb[b],d=c[0],e=c[1],f=c[3];c=c[4];d.removeEventListener?eq()||"boolean"===typeof c?d.removeEventListener(e,f,c):d.removeEventListener(e,f,!!c.capture):d.detachEvent&&d.detachEvent("on"+e,f);delete qb[b]}}))}
;var hq=window.ytcsi&&window.ytcsi.now?window.ytcsi.now:window.performance&&window.performance.timing&&window.performance.now&&window.performance.timing.navigationStart?function(){return window.performance.timing.navigationStart+window.performance.now()}:function(){return(new Date).getTime()};function iq(a){this.G=a;this.j=null;this.o=0;this.v=null;this.s=0;this.l=[];for(a=0;4>a;a++)this.l.push(0);this.m=0;this.K=fq(window,"mousemove",Wa(this.P,this));a=Wa(this.J,this);"function"===typeof a&&(a=Ek(a));this.R=window.setInterval(a,25)}
Za(iq,J);iq.prototype.P=function(a){void 0===a.i&&bq(a);var b=a.i;void 0===a.j&&bq(a);this.j=new bf(b,a.j)};
iq.prototype.J=function(){if(this.j){var a=hq();if(0!=this.o){var b=this.v,c=this.j,d=b.x-c.x;b=b.y-c.y;d=Math.sqrt(d*d+b*b)/(a-this.o);this.l[this.m]=.5<Math.abs((d-this.s)/this.s)?1:0;for(c=b=0;4>c;c++)b+=this.l[c]||0;3<=b&&this.G();this.s=d}this.o=a;this.v=this.j;this.m=(this.m+1)%4}};
iq.prototype.D=function(){window.clearInterval(this.R);gq(this.K)};var jq={};
function kq(a){var b=void 0===a?{}:a;a=void 0===b.cd?!1:b.cd;b=void 0===b.Nc?!0:b.Nc;if(null==B("_lact",window)){var c=parseInt(L("LACT"),10);c=isFinite(c)?Date.now()-Math.max(c,0):-1;z("_lact",c,window);z("_fact",c,window);-1==c&&lq();fq(document,"keydown",lq);fq(document,"keyup",lq);fq(document,"mousedown",lq);fq(document,"mouseup",lq);a?fq(window,"touchmove",function(){mq("touchmove",200)},{passive:!0}):(fq(window,"resize",function(){mq("resize",200)}),b&&fq(window,"scroll",function(){mq("scroll",200)}));
new iq(function(){mq("mouse",100)});
fq(document,"touchstart",lq,{passive:!0});fq(document,"touchend",lq,{passive:!0})}}
function mq(a,b){jq[a]||(jq[a]=!0,Sh.S(function(){lq();jq[a]=!1},b))}
function lq(){null==B("_lact",window)&&kq();var a=Date.now();z("_lact",a,window);-1==B("_fact",window)&&z("_fact",a,window);(a=B("ytglobal.ytUtilActivityCallback_"))&&a()}
function nq(){var a=B("_lact",window);return null==a?-1:Math.max(Date.now()-a,0)}
;var oq=y.ytPubsubPubsubInstance||new K,pq=y.ytPubsubPubsubSubscribedKeys||{},qq=y.ytPubsubPubsubTopicToKeys||{},rq=y.ytPubsubPubsubIsSynchronous||{};function sq(a,b){var c=tq();if(c&&b){var d=c.subscribe(a,function(){var e=arguments;var f=function(){pq[d]&&b.apply&&"function"==typeof b.apply&&b.apply(window,e)};
try{rq[a]?f():Zk(f,0)}catch(g){Fk(g)}},void 0);
pq[d]=!0;qq[a]||(qq[a]=[]);qq[a].push(d);return d}return 0}
function uq(a){var b=tq();b&&("number"===typeof a?a=[a]:"string"===typeof a&&(a=[parseInt(a,10)]),fb(a,function(c){b.unsubscribeByKey(c);delete pq[c]}))}
function vq(a,b){var c=tq();c&&c.publish.apply(c,arguments)}
function wq(a){var b=tq();if(b)if(b.clear(a),a)xq(a);else for(var c in qq)xq(c)}
function tq(){return y.ytPubsubPubsubInstance}
function xq(a){qq[a]&&(a=qq[a],fb(a,function(b){pq[b]&&delete pq[b]}),a.length=0)}
K.prototype.subscribe=K.prototype.subscribe;K.prototype.unsubscribeByKey=K.prototype.Ea;K.prototype.publish=K.prototype.qa;K.prototype.clear=K.prototype.clear;z("ytPubsubPubsubInstance",oq);z("ytPubsubPubsubTopicToKeys",qq);z("ytPubsubPubsubIsSynchronous",rq);z("ytPubsubPubsubSubscribedKeys",pq);function yq(){this.store=[];this.i={}}
yq.prototype.storePayload=function(a,b){this.store.push({payload:b,keys:a});a=zq(a);this.i[a]?this.i[a]++:this.i[a]=1;return a};
yq.prototype.extractMatchingEntries=function(a){for(var b=[],c=[],d=p(this.store),e=d.next();!e.done;e=d.next()){e=e.value;a:{var f=a;var g=Object.keys(f);g=p(g);for(var h=g.next();!h.done;h=g.next())if(h=h.value,e.keys[h]!==f[h]){f=!1;break a}f=!0}f?(b.push(e.payload),this.i[zq(e.keys)]--):c.push(e)}this.store=c;a=Aq(this,a);a=p(a);for(c=a.next();!c.done;c=a.next())c=c.value,0<this.i[c]&&Gk(new Q("Transport IMS did not fully extract entries for key:",{sequence:c,jr:b.length,ir:this.i[c]}));return b};
yq.prototype.getSequenceCount=function(a){var b=Aq(this,a);a=0;b=p(b);for(var c=b.next();!c.done;c=b.next())a+=this.i[c.value];return a};
function Aq(a,b){var c=Object.keys(b),d="THIS_KEY_FIELD_NOT_FILLED",e="THIS_KEY_FIELD_NOT_FILLED",f="THIS_KEY_FIELD_NOT_FILLED";c=p(c);for(var g=c.next();!g.done;g=c.next())g=g.value,"auth"===g?d=Bq(b.auth):"isJspb"===g?e=JSON.stringify(b.isJspb):"cttAuthInfo"===g&&(f=Bq(b.cttAuthInfo));b=[];d=[d,e,f];a=p(Object.keys(a.i));for(e=a.next();!e.done;e=a.next()){e=e.value;f=e.split("/");c=!0;for(g=0;g<d.length;g++)if("THIS_KEY_FIELD_NOT_FILLED"!==d[g]&&d[g]!==f[g]){c=!1;break}c&&b.push(e)}return b}
yq.prototype.getSequenceCount=yq.prototype.getSequenceCount;yq.prototype.extractMatchingEntries=yq.prototype.extractMatchingEntries;yq.prototype.storePayload=yq.prototype.storePayload;function zq(a){return[void 0===a.auth?"undefined":a.auth,void 0===a.isJspb?"undefined":a.isJspb,void 0===a.cttAuthInfo?"undefined":a.cttAuthInfo].join("/")}
function Bq(a){return void 0===a?"undefined":a}
;var Cq=zk("initial_gel_batch_timeout",2E3),Dq=Math.pow(2,16)-1,Eq=void 0;function Fq(){this.l=this.i=this.j=0}
var Gq=new Fq,Hq=new Fq,Iq,Jq=!0,Kq=y.ytLoggingTransportGELQueue_||new Map;z("ytLoggingTransportGELQueue_",Kq);var Lq=y.ytLoggingTransportGELProtoQueue_||new Map;z("ytLoggingTransportGELProtoQueue_",Lq);var Mq=y.ytLoggingTransportTokensToCttTargetIds_||{};z("ytLoggingTransportTokensToCttTargetIds_",Mq);var Nq=y.ytLoggingTransportTokensToJspbCttTargetIds_||{};z("ytLoggingTransportTokensToJspbCttTargetIds_",Nq);var Oq={};function Pq(){var a=B("yt.logging.ims");a||(a=new yq,z("yt.logging.ims",a));return a}
function Qq(a,b){M("web_all_payloads_via_jspb")&&Gk(new Q("transport.log called for JSON in JSPB only experiment"));if("log_event"===a.endpoint){Rq(a);var c=Sq(a);if(M("use_new_in_memory_storage")){Oq[c]=!0;var d={cttAuthInfo:c,isJspb:!1};Pq().storePayload(d,a.payload);Tq(b,[],c,!1,d)}else d=Kq.get(c)||[],Kq.set(c,d),d.push(a.payload),Tq(b,d,c)}}
function Uq(a,b){if("log_event"===a.endpoint){Rq(void 0,a);var c=Sq(a,!0);if(M("use_new_in_memory_storage")){Oq[c]=!0;var d={cttAuthInfo:c,isJspb:!0};Pq().storePayload(d,a.payload.toJSON());Tq(b,[],c,!0,d)}else d=Lq.get(c)||[],Lq.set(c,d),a=a.payload.toJSON(),d.push(a),Tq(b,d,c,!0)}}
function Tq(a,b,c,d,e){d=void 0===d?!1:d;a&&(Eq=new a);a=zk("tvhtml5_logging_max_batch")||zk("web_logging_max_batch")||100;var f=P(),g=d?Hq.l:Gq.l;b=b.length;e&&(b=Pq().getSequenceCount(e));b>=a?M("background_thread_flush_logs_due_to_batch_limit")?Iq||(Iq=Zk(function(){Vq({writeThenSend:!0},M("flush_only_full_queue")?c:void 0,d);Iq=void 0},0)):Vq({writeThenSend:!0},M("flush_only_full_queue")?c:void 0,d):10<=f-g&&(Wq(d),d?Hq.l=f:Gq.l=f)}
function Xq(a,b){M("web_all_payloads_via_jspb")&&Gk(new Q("transport.logIsolatedGelPayload called in JSPB only experiment"));if("log_event"===a.endpoint){Rq(a);var c=Sq(a),d=new Map;d.set(c,[a.payload]);b&&(Eq=new b);return new tf(function(e,f){Eq&&Eq.isReady()?Yq(d,Eq,e,f,{bypassNetworkless:!0},!0):e()})}}
function Zq(a,b){if("log_event"===a.endpoint){Rq(void 0,a);var c=Sq(a,!0),d=new Map;d.set(c,[a.payload.toJSON()]);b&&(Eq=new b);return new tf(function(e){Eq&&Eq.isReady()?$q(d,Eq,e,{bypassNetworkless:!0},!0):e()})}}
function Sq(a,b){var c="";if(a.Ga)c="visitorOnlyApprovedKey";else if(a.cttAuthInfo){if(void 0===b?0:b){b=a.cttAuthInfo.token;c=a.cttAuthInfo;var d=new Oj;c.videoId?d.setVideoId(c.videoId):c.playlistId&&Qd(d,2,Pj,c.playlistId);Nq[b]=d}else b=a.cttAuthInfo,c={},b.videoId?c.videoId=b.videoId:b.playlistId&&(c.playlistId=b.playlistId),Mq[a.cttAuthInfo.token]=c;c=a.cttAuthInfo.token}return c}
function Vq(a,b,c){a=void 0===a?{}:a;c=void 0===c?!1:c;!c&&M("web_all_payloads_via_jspb")&&Gk(new Q("transport.flushLogs called for JSON in JSPB only experiment"));new tf(function(d,e){c?($k(Hq.j),$k(Hq.i),Hq.i=0):($k(Gq.j),$k(Gq.i),Gq.i=0);if(Eq&&Eq.isReady())if(M("use_new_in_memory_storage")){var f=a,g=c,h=Eq;f=void 0===f?{}:f;g=void 0===g?!1:g;var k=new Map,m=new Map;if(void 0!==b)g?(e=Pq().extractMatchingEntries({isJspb:g,cttAuthInfo:b}),k.set(b,e),$q(k,h,d,f)):(k=Pq().extractMatchingEntries({isJspb:g,
cttAuthInfo:b}),m.set(b,k),Yq(m,h,d,e,f));else if(g){e=p(Object.keys(Oq));for(g=e.next();!g.done;g=e.next())m=g.value,g=Pq().extractMatchingEntries({isJspb:!0,cttAuthInfo:m}),0<g.length&&k.set(m,g),delete Oq[m];$q(k,h,d,f)}else{k=p(Object.keys(Oq));for(g=k.next();!g.done;g=k.next()){g=g.value;var q=Pq().extractMatchingEntries({isJspb:!1,cttAuthInfo:g});0<q.length&&m.set(g,q);delete Oq[g]}Yq(m,h,d,e,f)}}else f=a,k=c,h=Eq,f=void 0===f?{}:f,k=void 0===k?!1:k,void 0!==b?k?(e=new Map,k=Lq.get(b)||[],e.set(b,
k),$q(e,h,d,f),Lq.delete(b)):(k=new Map,m=Kq.get(b)||[],k.set(b,m),Yq(k,h,d,e,f),Kq.delete(b)):k?($q(Lq,h,d,f),Lq.clear()):(Yq(Kq,h,d,e,f),Kq.clear());else Wq(c),d()})}
function Wq(a){a=void 0===a?!1:a;if(M("web_gel_timeout_cap")&&(!a&&!Gq.i||a&&!Hq.i)){var b=Zk(function(){Vq({writeThenSend:!0},void 0,a)},6E4);
a?Hq.i=b:Gq.i=b}$k(a?Hq.j:Gq.j);b=L("LOGGING_BATCH_TIMEOUT",zk("web_gel_debounce_ms",1E4));M("shorten_initial_gel_batch_timeout")&&Jq&&(b=Cq);b=Zk(function(){Vq({writeThenSend:!0},void 0,a)},b);
a?Hq.j=b:Gq.j=b}
function Yq(a,b,c,d,e,f){e=void 0===e?{}:e;var g=Math.round(P()),h=a.size,k={};a=p(a);for(var m=a.next();!m.done;k={Qa:k.Qa,oa:k.oa,Ca:k.Ca,Sa:k.Sa,Ra:k.Ra},m=a.next()){var q=p(m.value);m=q.next().value;q=q.next().value;k.oa=wb({context:Hl(b.config_||Gl())});if(!Pa(q)&&!M("throw_err_when_logevent_malformed_killswitch")){d();break}k.oa.events=q;(q=Mq[m])&&ar(k.oa,m,q);delete Mq[m];k.Ca="visitorOnlyApprovedKey"===m;br(k.oa,g,k.Ca);cr(e);k.Sa=function(){h--;h||c()};
k.Qa=0;k.Ra=function(r){return function(){r.Qa++;if(e.bypassNetworkless&&M("log_errors_through_nwl_on_retry")&&1===r.Qa)try{Wl(b,"log_event",r.oa,dr({writeThenSend:!0},r.Ca,r.Sa,r.Ra,f)),Jq=!1}catch(w){Fk(w),d()}h--;h||c()}}(k);
try{Wl(b,"log_event",k.oa,dr(e,k.Ca,k.Sa,k.Ra,f)),Jq=!1}catch(r){Fk(r),d()}}}
function $q(a,b,c,d,e){d=void 0===d?{}:d;var f=Math.round(P()),g=a.size,h=new Map([].concat(ia(a)));h=p(h);for(var k=h.next();!k.done;k=h.next()){var m=p(k.value).next().value,q=a.get(m);k=new Qj;var r=Ml(b.config_||Gl());G(k,Vi,1,r);q=q?er(q):[];q=p(q);for(r=q.next();!r.done;r=q.next())Yd(k,3,Kj,r.value);(q=Nq[m])&&fr(k,m,q);delete Nq[m];m="visitorOnlyApprovedKey"===m;gr(k,f,m);cr(d);k=ce(k);m=dr(d,m,function(){g--;g||c()},function(){g--;
g||c()},e);
m.headers["Content-Type"]="application/json+protobuf";m.postBodyFormat="JSPB";m.postBody=k;Wl(b,"log_event","",m);Jq=!1}}
function cr(a){M("always_send_and_write")&&(a.writeThenSend=!1)}
function dr(a,b,c,d,e){a={retry:!0,onSuccess:c,onError:d,hc:a,Ga:b,Xq:!!e,headers:{},postBodyFormat:"",postBody:""};hr()&&(a.headers["X-Goog-Request-Time"]=JSON.stringify(Math.round(P())));return a}
function br(a,b,c){hr()||(a.requestTimeMs=String(b));M("unsplit_gel_payloads_in_logs")&&(a.unsplitGelPayloadsInLogs=!0);!c&&(b=L("EVENT_ID"))&&(c=ir(),a.serializedClientEventId={serializedEventId:b,clientCounter:String(c)})}
function gr(a,b,c){hr()||D(a,2,b);if(!c&&(b=L("EVENT_ID"))){c=ir();var d=new Nj;D(d,1,b);D(d,2,c);G(a,Nj,5,d)}}
function ir(){var a=L("BATCH_CLIENT_COUNTER")||0;a||(a=Math.floor(Math.random()*Dq/2));a++;a>Dq&&(a=1);wk("BATCH_CLIENT_COUNTER",a);return a}
function ar(a,b,c){if(c.videoId)var d="VIDEO";else if(c.playlistId)d="PLAYLIST";else return;a.credentialTransferTokenTargetId=c;a.context=a.context||{};a.context.user=a.context.user||{};a.context.user.credentialTransferTokens=[{token:b,scope:d}]}
function fr(a,b,c){if(Zd(c,1===Rd(c,Pj)?1:-1))var d=1;else if(c.getPlaylistId())d=2;else return;G(a,Oj,4,c);a=Sd(a,Vi,1)||new Vi;c=Sd(a,Ti,3)||new Ti;var e=new Si;e.setToken(b);D(e,1,d);Yd(c,12,Si,e);G(a,Ti,3,c)}
function er(a){for(var b=[],c=0;c<a.length;c++)try{b.push(new Kj(a[c]))}catch(d){Fk(new Q("Transport failed to deserialize "+String(a[c])))}return b}
function Rq(a,b){if(B("yt.logging.transport.enableScrapingForTest")){var c=B("yt.logging.transport.scrapedPayloadsForTesting"),d=B("yt.logging.transport.payloadToScrape","");b&&(b=B("yt.logging.transport.getScrapedPayloadFromClientEventsFunction").bind(b.payload)())&&c.push(b);a&&a.payload[d]&&c.push((null==a?void 0:a.payload)[d]);z("yt.logging.transport.scrapedPayloadsForTesting",c)}}
function hr(){return M("use_request_time_ms_header")||M("lr_use_request_time_ms_header")}
;var jr=y.ytLoggingGelSequenceIdObj_||{};z("ytLoggingGelSequenceIdObj_",jr);
function kr(a,b,c,d){d=void 0===d?{}:d;var e={},f=Math.round(d.timestamp||P());e.eventTimeMs=f<Number.MAX_SAFE_INTEGER?f:0;e[a]=b;M("enable_unknown_lact_fix_on_html5")&&kq();a=nq();e.context={lastActivityMs:String(d.timestamp||!isFinite(a)?-1:a)};M("log_sequence_info_on_gel_web")&&d.aa&&(a=e.context,b=d.aa,b={index:lr(b),groupKey:b},a.sequence=b,d.Wb&&delete jr[d.aa]);(d.pc?Xq:Qq)({endpoint:"log_event",payload:e,cttAuthInfo:d.cttAuthInfo,Ga:d.Ga},c)}
function mr(a){Vq(void 0,void 0,void 0===a?!1:a)}
function lr(a){jr[a]=a in jr?jr[a]+1:0;return jr[a]}
;var nr=y.ytLoggingGelSequenceIdObj_||{};z("ytLoggingGelSequenceIdObj_",nr);function or(a,b,c){c=void 0===c?{}:c;var d=Math.round(c.timestamp||P());D(a,1,d<Number.MAX_SAFE_INTEGER?d:0);var e=nq();d=new Jj;D(d,1,c.timestamp||!isFinite(e)?-1:e);if(M("log_sequence_info_on_gel_web")&&c.aa){e=c.aa;var f=lr(e),g=new Ij;D(g,2,f);D(g,1,e);G(d,Ij,3,g);c.Wb&&delete nr[c.aa]}G(a,Jj,33,d);(c.pc?Zq:Uq)({endpoint:"log_event",payload:a,cttAuthInfo:c.cttAuthInfo,Ga:c.Ga},b)}
;function pr(a,b){b=void 0===b?{}:b;var c=!1;L("ytLoggingEventsDefaultDisabled",!1)&&(c=!0);or(a,c?null:mp,b)}
;function qr(a,b){var c=new Kj;Wd(c,zj,72,Lj,a);pr(c,b)}
function rr(a,b,c){var d=new Kj;Wd(d,yj,73,Lj,a);c?or(d,c,b):pr(d,b)}
function sr(a,b,c){var d=new Kj;Wd(d,xj,78,Lj,a);c?or(d,c,b):pr(d,b)}
function tr(a,b,c){var d=new Kj;Wd(d,Aj,208,Lj,a);c?or(d,c,b):pr(d,b)}
function ur(a,b,c){var d=new Kj;Wd(d,qj,156,Lj,a);c?or(d,c,b):pr(d,b)}
function vr(a,b,c){var d=new Kj;Wd(d,uj,215,Lj,a);c?or(d,c,b):pr(d,b)}
function wr(a,b,c){var d=new Kj;Wd(d,pj,111,Lj,a);c?or(d,c,b):pr(d,b)}
;function mm(a,b,c){c=void 0===c?{}:c;if(M("migrate_events_to_ts")){c=void 0===c?{}:c;var d=mp;L("ytLoggingEventsDefaultDisabled",!1)&&mp===mp&&(d=null);M("web_all_payloads_via_jspb")&&Gk(new Q("Logs should be translated to JSPB but are sent as JSON instead",a));kr(a,b,d,c)}else d=mp,L("ytLoggingEventsDefaultDisabled",!1)&&mp==mp&&(d=null),kr(a,b,d,c)}
;var xr=[{zb:function(a){return"Cannot read property '"+a.key+"'"},
gb:{Error:[{regexp:/(Permission denied) to access property "([^']+)"/,groups:["reason","key"]}],TypeError:[{regexp:/Cannot read property '([^']+)' of (null|undefined)/,groups:["key","value"]},{regexp:/\u65e0\u6cd5\u83b7\u53d6\u672a\u5b9a\u4e49\u6216 (null|undefined) \u5f15\u7528\u7684\u5c5e\u6027\u201c([^\u201d]+)\u201d/,groups:["value","key"]},{regexp:/\uc815\uc758\ub418\uc9c0 \uc54a\uc74c \ub610\ub294 (null|undefined) \ucc38\uc870\uc778 '([^']+)' \uc18d\uc131\uc744 \uac00\uc838\uc62c \uc218 \uc5c6\uc2b5\ub2c8\ub2e4./,
groups:["value","key"]},{regexp:/No se puede obtener la propiedad '([^']+)' de referencia nula o sin definir/,groups:["key"]},{regexp:/Unable to get property '([^']+)' of (undefined or null) reference/,groups:["key","value"]},{regexp:/(null) is not an object \(evaluating '(?:([^.]+)\.)?([^']+)'\)/,groups:["value","base","key"]}]}},{zb:function(a){return"Cannot call '"+a.key+"'"},
gb:{TypeError:[{regexp:/(?:([^ ]+)?\.)?([^ ]+) is not a function/,groups:["base","key"]},{regexp:/([^ ]+) called on (null or undefined)/,groups:["key","value"]},{regexp:/Object (.*) has no method '([^ ]+)'/,groups:["base","key"]},{regexp:/Object doesn't support property or method '([^ ]+)'/,groups:["key"]},{regexp:/\u30aa\u30d6\u30b8\u30a7\u30af\u30c8\u306f '([^']+)' \u30d7\u30ed\u30d1\u30c6\u30a3\u307e\u305f\u306f\u30e1\u30bd\u30c3\u30c9\u3092\u30b5\u30dd\u30fc\u30c8\u3057\u3066\u3044\u307e\u305b\u3093/,
groups:["key"]},{regexp:/\uac1c\uccb4\uac00 '([^']+)' \uc18d\uc131\uc774\ub098 \uba54\uc11c\ub4dc\ub97c \uc9c0\uc6d0\ud558\uc9c0 \uc54a\uc2b5\ub2c8\ub2e4./,groups:["key"]}]}},{zb:function(a){return a.key+" is not defined"},
gb:{ReferenceError:[{regexp:/(.*) is not defined/,groups:["key"]},{regexp:/Can't find variable: (.*)/,groups:["key"]}]}}];var zr={ma:[],la:[{callback:yr,weight:500}]};function yr(a){if("JavaException"===a.name)return!0;a=a.stack;return a.includes("chrome://")||a.includes("chrome-extension://")||a.includes("moz-extension://")}
;function Ar(){this.la=[];this.ma=[]}
var Br;function Cr(){if(!Br){var a=Br=new Ar;a.ma.length=0;a.la.length=0;zr.ma&&a.ma.push.apply(a.ma,zr.ma);zr.la&&a.la.push.apply(a.la,zr.la)}return Br}
;var Dr=new K;function Er(a){function b(){return a.charCodeAt(d++)}
var c=a.length,d=0;do{var e=Fr(b);if(Infinity===e)break;var f=e>>3;switch(e&7){case 0:e=Fr(b);if(2===f)return e;break;case 1:if(2===f)return;d+=8;break;case 2:e=Fr(b);if(2===f)return a.substr(d,e);d+=e;break;case 5:if(2===f)return;d+=4;break;default:return}}while(d<c)}
function Fr(a){var b=a(),c=b&127;if(128>b)return c;b=a();c|=(b&127)<<7;if(128>b)return c;b=a();c|=(b&127)<<14;if(128>b)return c;b=a();return 128>b?c|(b&127)<<21:Infinity}
;function Gr(a,b,c,d){if(a)if(Array.isArray(a)){var e=d;for(d=0;d<a.length&&!(a[d]&&(e+=Hr(d,a[d],b,c),500<e));d++);d=e}else if("object"===typeof a)for(e in a){if(a[e]){var f=a[e];var g=b;var h=c;g="string"!==typeof f||"clickTrackingParams"!==e&&"trackingParams"!==e?0:(f=Er(atob(f.replace(/-/g,"+").replace(/_/g,"/"))))?Hr(e+".ve",f,g,h):0;d+=g;d+=Hr(e,a[e],b,c);if(500<d)break}}else c[b]=Ir(a),d+=c[b].length;else c[b]=Ir(a),d+=c[b].length;return d}
function Hr(a,b,c,d){c+="."+a;a=Ir(b);d[c]=a;return c.length+a.length}
function Ir(a){try{return("string"===typeof a?a:String(JSON.stringify(a))).substr(0,500)}catch(b){return"unable to serialize "+typeof a+" ("+b.message+")"}}
;var Jr=new Set,Kr=0,Lr=0,Mr=0,Nr=[],Or=["PhantomJS","Googlebot","TO STOP THIS SECURITY SCAN go/scan"];function lm(a){Pr(a)}
function Qr(a){Pr(a,"WARNING")}
function Pr(a,b,c,d,e,f){f=void 0===f?{}:f;f.name=c||L("INNERTUBE_CONTEXT_CLIENT_NAME",1);f.version=d||L("INNERTUBE_CONTEXT_CLIENT_VERSION");var g=f||{},h=void 0===b?"ERROR":b;h=void 0===h?"ERROR":h;if(a){a.hasOwnProperty("level")&&a.level&&(h=a.level);if(M("console_log_js_exceptions")){var k=[];k.push("Name: "+a.name);k.push("Message: "+a.message);a.hasOwnProperty("params")&&k.push("Error Params: "+JSON.stringify(a.params));a.hasOwnProperty("args")&&k.push("Error args: "+JSON.stringify(a.args));
k.push("File name: "+a.fileName);k.push("Stacktrace: "+a.stack);window.console.log(k.join("\n"),a)}if(!(5<=Kr)){var m=Nr,q=pe(a),r=q.message||"Unknown Error",w=q.name||"UnknownError",u=q.stack||a.j||"Not available";if(u.startsWith(w+": "+r)){var A=u.split("\n");A.shift();u=A.join("\n")}var E=q.lineNumber||"Not available",F=q.fileName||"Not available",O=u,N=0;if(a.hasOwnProperty("args")&&a.args&&a.args.length)for(var R=0;R<a.args.length&&!(N=Gr(a.args[R],"params."+R,g,N),500<=N);R++);else if(a.hasOwnProperty("params")&&
a.params){var ca=a.params;if("object"===typeof a.params)for(var W in ca){if(ca[W]){var pb="params."+W,Xa=Ir(ca[W]);g[pb]=Xa;N+=pb.length+Xa.length;if(500<N)break}}else g.params=Ir(ca)}if(m.length)for(var ma=0;ma<m.length&&!(N=Gr(m[ma],"params.context."+ma,g,N),500<=N);ma++);navigator.vendor&&!g.hasOwnProperty("vendor")&&(g["device.vendor"]=navigator.vendor);var H={message:r,name:w,lineNumber:E,fileName:F,stack:O,params:g,sampleWeight:1},la=Number(a.columnNumber);isNaN(la)||(H.lineNumber=H.lineNumber+
":"+la);if("IGNORED"===a.level)var fa=0;else a:{for(var ze=Cr(),Ae=p(ze.ma),wd=Ae.next();!wd.done;wd=Ae.next()){var oa=wd.value;if(H.message&&H.message.match(oa.hr)){fa=oa.weight;break a}}for(var qp=p(ze.la),Zj=qp.next();!Zj.done;Zj=qp.next()){var rp=Zj.value;if(rp.callback(H)){fa=rp.weight;break a}}fa=1}H.sampleWeight=fa;for(var sp=p(xr),ak=sp.next();!ak.done;ak=sp.next()){var bk=ak.value;if(bk.gb[H.name])for(var tp=p(bk.gb[H.name]),ck=tp.next();!ck.done;ck=tp.next()){var up=ck.value,Tg=H.message.match(up.regexp);
if(Tg){H.params["params.error.original"]=Tg[0];for(var dk=up.groups,vp={},xd=0;xd<dk.length;xd++)vp[dk[xd]]=Tg[xd+1],H.params["params.error."+dk[xd]]=Tg[xd+1];H.message=bk.zb(vp);break}}}H.params||(H.params={});var wp=Cr();H.params["params.errorServiceSignature"]="msg="+wp.ma.length+"&cb="+wp.la.length;H.params["params.serviceWorker"]="false";y.document&&y.document.querySelectorAll&&(H.params["params.fscripts"]=String(document.querySelectorAll("script:not([nonce])").length));Db("sample").constructor!==
Bb&&(H.params["params.fconst"]="true");window.yterr&&"function"===typeof window.yterr&&window.yterr(H);if(0!==H.sampleWeight&&!Jr.has(H.message)){if("ERROR"===h){Dr.qa("handleError",H);if(M("record_app_crashed_web")&&0===Mr&&1===H.sampleWeight)if(Mr++,M("errors_via_jspb")){var ek=new mj;D(ek,1,1);if(!M("report_client_error_with_app_crash_ks")){var xp=new hj;D(xp,1,H.message);var yp=new ij;G(yp,hj,3,xp);var zp=new jj;G(zp,ij,5,yp);var Ap=new kj;G(Ap,jj,9,zp);G(ek,kj,4,Ap)}var Bp=new Kj;Wd(Bp,mj,20,
Lj,ek);pr(Bp)}else{var Cp={appCrashType:"APP_CRASH_TYPE_BREAKPAD"};M("report_client_error_with_app_crash_ks")||(Cp.systemHealth={crashData:{clientError:{logMessage:{message:H.message}}}});mm("appCrashed",Cp)}Lr++}else"WARNING"===h&&Dr.qa("handleWarning",H);if(M("kevlar_gel_error_routing"))a:{var Be=h;if(M("errors_via_jspb")){if(Rr())var Ep=void 0;else{var yd=new ej;D(yd,1,H.stack);H.fileName&&D(yd,4,H.fileName);var Jb=H.lineNumber&&H.lineNumber.split?H.lineNumber.split(":"):[];0!==Jb.length&&(1!==
Jb.length||isNaN(Number(Jb[0]))?2!==Jb.length||isNaN(Number(Jb[0]))||isNaN(Number(Jb[1]))||(D(yd,2,Number(Jb[0])),D(yd,3,Number(Jb[1]))):D(yd,2,Number(Jb[0])));var Dc=new hj;D(Dc,1,H.message);D(Dc,3,H.name);D(Dc,6,H.sampleWeight);"ERROR"===Be?D(Dc,2,2):"WARNING"===Be?D(Dc,2,1):D(Dc,2,0);var fk=new fj;D(fk,1,!0);Wd(fk,ej,3,gj,yd);var cc=new bj;D(cc,3,window.location.href);for(var Fp=L("FEXP_EXPERIMENTS",[]),gk=0;gk<Fp.length;gk++){var Kv=Fp[gk];Dd(cc);Od(cc,5,2,!1).push(Kv)}var hk=L("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS");
if(!xk()&&hk)for(var Gp=p(Object.keys(hk)),Ec=Gp.next();!Ec.done;Ec=Gp.next()){var Hp=Ec.value,ik=new dj;D(ik,1,Hp);ik.setValue(String(hk[Hp]));Yd(cc,4,dj,ik)}var jk=H.params;if(jk){var Ip=p(Object.keys(jk));for(Ec=Ip.next();!Ec.done;Ec=Ip.next()){var Jp=Ec.value,kk=new dj;D(kk,1,"client."+Jp);kk.setValue(String(jk[Jp]));Yd(cc,4,dj,kk)}}var Kp=L("SERVER_NAME"),Lp=L("SERVER_VERSION");if(Kp&&Lp){var lk=new dj;D(lk,1,"server.name");lk.setValue(Kp);Yd(cc,4,dj,lk);var mk=new dj;D(mk,1,"server.version");
mk.setValue(Lp);Yd(cc,4,dj,mk)}var Ug=new ij;G(Ug,bj,1,cc);G(Ug,fj,2,fk);G(Ug,hj,3,Dc);Ep=Ug}var Mp=Ep;if(!Mp)break a;var Np=new Kj;Wd(Np,ij,163,Lj,Mp);pr(Np)}else{if(Rr())var Op=void 0;else{var Ce={stackTrace:H.stack};H.fileName&&(Ce.filename=H.fileName);var Kb=H.lineNumber&&H.lineNumber.split?H.lineNumber.split(":"):[];0!==Kb.length&&(1!==Kb.length||isNaN(Number(Kb[0]))?2!==Kb.length||isNaN(Number(Kb[0]))||isNaN(Number(Kb[1]))||(Ce.lineNumber=Number(Kb[0]),Ce.columnNumber=Number(Kb[1])):Ce.lineNumber=
Number(Kb[0]));var nk={level:"ERROR_LEVEL_UNKNOWN",message:H.message,errorClassName:H.name,sampleWeight:H.sampleWeight};"ERROR"===Be?nk.level="ERROR_LEVEL_ERROR":"WARNING"===Be&&(nk.level="ERROR_LEVEL_WARNNING");var Lv={isObfuscated:!0,browserStackInfo:Ce},zd={pageUrl:window.location.href,kvPairs:[]};L("FEXP_EXPERIMENTS")&&(zd.experimentIds=L("FEXP_EXPERIMENTS"));var ok=L("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS");if(!xk()&&ok)for(var Pp=p(Object.keys(ok)),Fc=Pp.next();!Fc.done;Fc=Pp.next()){var Qp=
Fc.value;zd.kvPairs.push({key:Qp,value:String(ok[Qp])})}var pk=H.params;if(pk){var Rp=p(Object.keys(pk));for(Fc=Rp.next();!Fc.done;Fc=Rp.next()){var Sp=Fc.value;zd.kvPairs.push({key:"client."+Sp,value:String(pk[Sp])})}}var Tp=L("SERVER_NAME"),Up=L("SERVER_VERSION");Tp&&Up&&(zd.kvPairs.push({key:"server.name",value:Tp}),zd.kvPairs.push({key:"server.version",value:Up}));Op={errorMetadata:zd,stackTrace:Lv,logMessage:nk}}var Vp=Op;if(!Vp)break a;mm("clientError",Vp)}if("ERROR"===Be||M("errors_flush_gel_always_killswitch"))b:if(M("migrate_events_to_ts"))c:{if(M("web_fp_via_jspb")&&
(mr(!0),!M("web_fp_via_jspb_and_json")))break c;mr()}else{if(M("web_fp_via_jspb")&&(mr(!0),!M("web_fp_via_jspb_and_json")))break b;mr()}}if(!M("suppress_error_204_logging")){var De=H.params||{},dc={urlParams:{a:"logerror",t:"jserror",type:H.name,msg:H.message.substr(0,250),line:H.lineNumber,level:h,"client.name":De.name},postParams:{url:L("PAGE_NAME",window.location.href),file:H.fileName},method:"POST"};De.version&&(dc["client.version"]=De.version);if(dc.postParams){H.stack&&(dc.postParams.stack=
H.stack);for(var Wp=p(Object.keys(De)),qk=Wp.next();!qk.done;qk=Wp.next()){var Xp=qk.value;dc.postParams["client."+Xp]=De[Xp]}var rk=L("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS");if(rk)for(var Yp=p(Object.keys(rk)),sk=Yp.next();!sk.done;sk=Yp.next()){var Zp=sk.value;dc.postParams[Zp]=rk[Zp]}var $p=L("SERVER_NAME"),aq=L("SERVER_VERSION");$p&&aq&&(dc.postParams["server.name"]=$p,dc.postParams["server.version"]=aq)}fl(L("ECATCHER_REPORT_HOST","")+"/error_204",dc)}try{Jr.add(H.message)}catch(ox){}Kr++}}}}
function Rr(){for(var a=p(Or),b=a.next();!b.done;b=a.next())if(dm(b.value.toLowerCase()))return!0;return!1}
function Sr(a){var b=Ja.apply(1,arguments);a.args||(a.args=[]);a.args.push.apply(a.args,ia(b))}
;function Tr(){this.register=new Map}
function Ur(a){a=p(a.register.values());for(var b=a.next();!b.done;b=a.next())b.value.mr("ABORTED")}
Tr.prototype.clear=function(){Ur(this);this.register.clear()};
var Vr=new Tr;var Wr=Date.now().toString();
function Xr(){a:{if(window.crypto&&window.crypto.getRandomValues)try{var a=Array(16),b=new Uint8Array(16);window.crypto.getRandomValues(b);for(var c=0;c<a.length;c++)a[c]=b[c];var d=a;break a}catch(e){}d=Array(16);for(a=0;16>a;a++){b=Date.now();for(c=0;c<b%23;c++)d[a]=Math.random();d[a]=Math.floor(256*Math.random())}if(Wr)for(a=1,b=0;b<Wr.length;b++)d[a%16]=d[a%16]^d[(a-1)%16]/4^Wr.charCodeAt(b),a++}a=[];for(b=0;b<d.length;b++)a.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(d[b]&63));
return a.join("")}
;var Yr=y.ytLoggingDocDocumentNonce_;Yr||(Yr=Xr(),z("ytLoggingDocDocumentNonce_",Yr));var Zr=Yr;var $r={Wh:0,se:1,De:2,Sl:3,Yh:4,nq:5,Im:6,vo:7,On:8,jo:9,0:"DEFAULT",1:"CHAT",2:"CONVERSATIONS",3:"MINIPLAYER",4:"DIALOG",5:"VOZ",6:"MUSIC_WATCH_TABS",7:"SHARE",8:"PUSH_NOTIFICATIONS",9:"RICH_GRID_WATCH"};function as(a){this.i=a}
function bs(a){return new as({trackingParams:a})}
as.prototype.getAsJson=function(){var a={};void 0!==this.i.trackingParams?a.trackingParams=this.i.trackingParams:(a.veType=this.i.veType,void 0!==this.i.veCounter&&(a.veCounter=this.i.veCounter),void 0!==this.i.elementIndex&&(a.elementIndex=this.i.elementIndex));void 0!==this.i.dataElement&&(a.dataElement=this.i.dataElement.getAsJson());void 0!==this.i.youtubeData&&(a.youtubeData=this.i.youtubeData);return a};
as.prototype.getAsJspb=function(){var a=new oj;if(void 0!==this.i.trackingParams){var b=this.i.trackingParams;if(null!=b)if("string"===typeof b)b=b?new id(b,gd):jd();else if(b.constructor!==id)if(fd(b))b=b.length?new id(new Uint8Array(b),gd):jd();else throw Error();D(a,1,b)}else void 0!==this.i.veType&&D(a,2,this.i.veType),void 0!==this.i.veCounter&&D(a,6,this.i.veCounter),void 0!==this.i.elementIndex&&D(a,3,this.i.elementIndex);void 0!==this.i.dataElement&&(b=this.i.dataElement.getAsJspb(),G(a,oj,
7,b));void 0!==this.i.youtubeData&&G(a,Hi,8,this.i.jspbYoutubeData);return a};
as.prototype.toString=function(){return JSON.stringify(this.getAsJson())};
as.prototype.isClientVe=function(){return!this.i.trackingParams&&!!this.i.veType};function cs(a){a=void 0===a?0:a;return 0===a?"client-screen-nonce":"client-screen-nonce."+a}
function ds(a){a=void 0===a?0:a;return 0===a?"ROOT_VE_TYPE":"ROOT_VE_TYPE."+a}
function es(a){return L(ds(void 0===a?0:a))}
z("yt_logging_screen.getRootVeType",es);function fs(a){return(a=es(void 0===a?0:a))?new as({veType:a,youtubeData:void 0,jspbYoutubeData:void 0}):null}
function gs(){var a=L("csn-to-ctt-auth-info");a||(a={},wk("csn-to-ctt-auth-info",a));return a}
function hs(a){a=L(cs(void 0===a?0:a));if(!a&&!L("USE_CSN_FALLBACK",!0))return null;a||(a="UNDEFINED_CSN");return a?a:null}
z("yt_logging_screen.getCurrentCsn",hs);function is(a,b,c){var d=gs();(c=hs(c))&&delete d[c];b&&(d[a]=b)}
function js(a){return gs()[a]}
z("yt_logging_screen.getCttAuthInfo",js);
function ks(a,b,c,d){c=void 0===c?0:c;if(a!==L(cs(c))||b!==L(ds(c)))if(is(a,d,c),wk(cs(c),a),wk(ds(c),b),b=function(){setTimeout(function(){if(a)if(M("web_time_via_jspb")){var e=new pj;D(e,1,Zr);D(e,2,a);M("use_default_heartbeat_client")?wr(e):wr(e,void 0,mp)}else e={clientDocumentNonce:Zr,clientScreenNonce:a},M("use_default_heartbeat_client")?mm("foregroundHeartbeatScreenAssociated",e):kr("foregroundHeartbeatScreenAssociated",e,mp)},0)},"requestAnimationFrame"in window)try{window.requestAnimationFrame(b)}catch(e){b()}else b()}
z("yt_logging_screen.setCurrentScreen",ks);var ls=window.yt&&window.yt.msgs_||window.ytcfg&&window.ytcfg.msgs||{};z("yt.msgs_",ls);function ms(a){Xj(ls,arguments)}
;var ns={re:3611,Cd:27686,Dd:85013,Ed:23462,Gd:157557,Hd:42016,Id:62407,Jd:26926,Fd:43781,Kd:51236,Ld:79148,Md:50160,Nd:77504,Zd:153587,ae:87907,be:18630,ce:54445,de:80935,ee:152172,ge:105675,he:150723,ie:37521,je:147285,ke:47786,le:98349,me:123695,ne:6827,oe:29434,pe:7282,qe:124448,ue:32276,te:76278,we:147868,xe:147869,ye:93911,ze:106531,Ae:27259,Be:27262,Ce:27263,Ee:21759,Fe:27107,Ge:62936,He:160866,Ie:49568,Je:160789,Ke:38408,Le:80637,Me:68727,Ne:68728,Oe:80353,Pe:80356,Qe:74610,Re:45707,Se:83962,
Te:83970,Ue:46713,Ve:89711,We:74612,Xe:155792,Ye:93265,Ze:74611,af:131380,cf:128979,df:139311,ef:128978,bf:131391,ff:105350,hf:139312,jf:134800,gf:131392,lf:113533,mf:93252,nf:99357,qf:94521,rf:114252,sf:113532,tf:94522,pf:94583,uf:88E3,vf:139580,wf:93253,xf:93254,yf:94387,zf:94388,Af:93255,Bf:97424,kf:72502,Cf:110111,Df:76019,Ff:117092,Gf:117093,Ef:89431,Hf:110466,If:77240,Jf:60508,Kf:148123,Lf:148124,Mf:137401,Nf:137402,Of:137046,Pf:73393,Qf:113534,Rf:92098,Sf:131381,Tf:84517,Uf:83759,Vf:80357,
Wf:86113,Xf:72598,Yf:72733,Zf:107349,ag:124275,cg:118203,dg:133275,eg:160157,fg:152569,gg:156651,hg:133274,ig:160159,jg:160158,kg:133272,lg:133273,mg:133276,ng:144507,og:143247,pg:156652,qg:143248,rg:143249,sg:143250,tg:143251,ug:156653,vg:144401,xg:117431,wg:133797,yg:153964,zg:128572,Ag:133405,Bg:117429,Cg:117430,Dg:117432,Eg:120080,Fg:117259,Gg:156655,Hg:156654,Ig:121692,Jg:145656,Kg:156656,Lg:145655,Mg:145653,Ng:145654,Og:145657,Pg:132972,Qg:133051,Rg:133658,Sg:132971,Tg:97615,Vg:143359,Ug:143356,
Xg:143361,Wg:143358,Zg:143360,Yg:143357,ah:142303,bh:143353,dh:143354,eh:144479,fh:143355,gh:31402,ih:133624,jh:146477,kh:133623,lh:133622,hh:133621,mh:84774,oh:160801,nh:95117,ph:150497,qh:98930,rh:98931,sh:98932,th:153320,uh:153321,vh:43347,wh:129889,xh:149123,yh:45474,zh:100352,Ah:84758,Bh:98443,Ch:117985,Dh:74613,Eh:155911,Fh:74614,Gh:64502,Hh:136032,Ih:74615,Jh:74616,Kh:122224,Lh:74617,Mh:77820,Nh:74618,Oh:93278,Ph:93274,Qh:93275,Rh:93276,Sh:22110,Th:29433,Uh:133798,Vh:132295,Xh:120541,Zh:82047,
ai:113550,bi:75836,ci:75837,di:42352,fi:84512,gi:76065,hi:75989,mi:16623,ni:32594,oi:27240,ri:32633,si:74858,ti:156999,wi:3945,vi:16989,xi:45520,yi:25488,zi:25492,Ai:25494,Bi:55760,Ci:14057,Di:18451,Ei:57204,Fi:57203,Gi:17897,Hi:57205,Ii:18198,Ji:17898,Ki:17909,Li:43980,Mi:46220,Ni:11721,Oi:147994,Pi:49954,Qi:96369,Ri:3854,Si:151633,Ti:56251,Ui:159108,Vi:25624,Wi:152036,nj:16906,oj:99999,pj:68172,qj:27068,rj:47973,sj:72773,tj:26970,uj:26971,vj:96805,wj:17752,xj:73233,yj:109512,zj:22256,Aj:14115,Bj:22696,
Cj:89278,Dj:89277,Ej:109513,Fj:43278,Gj:43459,Hj:43464,Ij:89279,Jj:43717,Kj:55764,Lj:22255,Mj:147912,Nj:89281,Oj:40963,Pj:43277,Qj:43442,Rj:91824,Sj:120137,Tj:96367,Uj:36850,Vj:72694,Wj:37414,Xj:36851,Zj:124863,Yj:121343,ak:73491,bk:54473,ck:43375,dk:46674,ek:143815,fk:139095,gk:144402,hk:149968,ik:149969,jk:32473,kk:72901,lk:72906,mk:50947,nk:50612,pk:50613,qk:50942,rk:84938,sk:84943,tk:84939,uk:84941,vk:84944,wk:84940,xk:84942,yk:35585,zk:51926,Ak:79983,Bk:63238,Ck:18921,Dk:63241,Ek:57893,Fk:41182,
Gk:135732,Hk:33424,Ik:22207,Jk:42993,Kk:36229,Lk:22206,Mk:22205,Nk:18993,Ok:19001,Pk:18990,Qk:18991,Rk:18997,Sk:18725,Tk:19003,Uk:36874,Vk:44763,Wk:33427,Xk:67793,Yk:22182,Zk:37091,al:34650,bl:50617,dl:47261,fl:22287,il:25144,jl:97917,kl:62397,ll:150871,ml:150874,nl:125598,ol:137935,pl:36961,ql:108035,rl:27426,sl:27857,ul:27846,vl:27854,wl:69692,xl:61411,yl:39299,zl:38696,Al:62520,Bl:36382,Cl:108701,Dl:50663,El:36387,Fl:14908,Gl:37533,Hl:105443,Il:61635,Jl:62274,Kl:161670,Ll:133818,Ml:65702,Nl:65703,
Ol:65701,Pl:76256,Ql:37671,Rl:49953,Tl:36216,Ul:28237,Vl:39553,Wl:29222,Xl:26107,Yl:38050,Zl:26108,bm:120745,am:26109,cm:26110,dm:66881,em:28236,fm:14586,gm:160598,hm:57929,im:74723,jm:44098,km:44099,nm:23528,om:61699,lm:134104,mm:134103,pm:59149,qm:101951,rm:97346,sm:118051,tm:95102,um:64882,vm:119505,wm:63595,xm:63349,ym:95101,zm:75240,Am:27039,Bm:68823,Cm:21537,Dm:83464,Em:75707,Fm:83113,Gm:101952,Hm:101953,Jm:79610,Km:125755,Lm:24402,Mm:24400,Nm:32925,Pm:57173,Om:156421,Qm:122502,Rm:145268,Sm:138480,
Tm:64423,Um:64424,Vm:33986,Wm:100828,Xm:129089,Ym:21409,cn:135155,dn:135156,en:135157,fn:135158,gn:158225,hn:135159,jn:135160,kn:135161,mn:135162,nn:135163,ln:158226,pn:158227,qn:135164,rn:135165,sn:135166,Zm:11070,an:11074,bn:17880,tn:14001,vn:30709,wn:30707,xn:30711,yn:30710,zn:30708,un:26984,An:146143,Bn:63648,Cn:63649,Dn:51879,En:111059,Fn:5754,Gn:20445,Hn:151308,In:151152,Kn:130975,Jn:130976,Ln:110386,Mn:113746,Nn:66557,Pn:17310,Qn:28631,Rn:21589,Sn:154946,Tn:68012,Un:60480,Vn:138664,Wn:141121,
Xn:31571,Yn:141978,Zn:150105,ao:150106,bo:150107,co:150108,eo:76980,fo:41577,ho:45469,ko:38669,lo:13768,mo:13777,no:141842,oo:62985,po:4724,qo:59369,ro:43927,so:43928,to:12924,uo:100355,xo:56219,yo:27669,zo:10337,wo:47896,Ao:122629,Co:139723,Bo:139722,Do:121258,Eo:107598,Fo:127991,Go:96639,Ho:107536,Io:130169,Jo:96661,Ko:145188,Lo:96658,Mo:116646,No:159428,Oo:121122,Po:96660,Qo:127738,Ro:127083,So:155281,To:147842,Uo:104443,Vo:96659,Wo:147595,Xo:106442,Yo:134840,Zo:63667,ap:63668,bp:63669,cp:130686,
ep:147036,fp:78314,gp:147799,hp:148649,ip:55761,jp:127098,kp:134841,lp:96368,mp:67374,np:48992,qp:146176,rp:49956,sp:31961,tp:26388,up:23811,vp:5E4,wp:126250,xp:96370,yp:47355,zp:47356,Ap:37935,Bp:45521,Cp:21760,Dp:83769,Ep:49977,Fp:49974,Gp:93497,Hp:93498,Ip:34325,Jp:140759,Kp:115803,Lp:123707,Mp:100081,Np:35309,Op:68314,Pp:25602,Qp:100339,Rp:143516,Sp:59018,Tp:18248,Up:50625,Vp:9729,Wp:37168,Xp:37169,Yp:21667,Zp:16749,aq:18635,bq:39305,cq:18046,fq:53969,gq:8213,hq:93926,iq:102852,jq:110099,kq:22678,
lq:69076,mq:137575,oq:139224,pq:100856,qq:154430,rq:17736,sq:3832,tq:147111,uq:55759,wq:64031,Cq:93044,Dq:93045,Eq:34388,Fq:17657,Gq:17655,Hq:39579,Iq:39578,Jq:77448,Kq:8196,Lq:11357,Mq:69877,Nq:8197,Oq:156512,Pq:161613,Qq:156509,Rq:161612,Sq:161614,Tq:82039};function os(){var a=vb(ps),b;return(new tf(function(c,d){a.onSuccess=function(e){Yk(e)?c(new qs(e)):d(new rs("Request failed, status="+(e&&"status"in e?e.status:-1),"net.badstatus",e))};
a.onError=function(e){d(new rs("Unknown request error","net.unknown",e))};
a.onTimeout=function(e){d(new rs("Request timed out","net.timeout",e))};
b=fl("//googleads.g.doubleclick.net/pagead/id",a)})).kb(function(c){c instanceof Af&&b.abort();
return yf(c)})}
function rs(a,b,c){ab.call(this,a+", errorCode="+b);this.errorCode=b;this.xhr=c;this.name="PromiseAjaxError"}
t(rs,ab);function qs(a){this.xhr=a}
;function ss(){this.i=0;this.ja=null}
ss.prototype.then=function(a,b,c){return 1===this.i&&a?(a=a.call(c,this.ja))&&"function"===typeof a.then?a:ts(a):2===this.i&&b?(a=b.call(c,this.ja))&&"function"===typeof a.then?a:us(a):this};
ss.prototype.getValue=function(){return this.ja};
ss.prototype.$goog_Thenable=!0;function us(a){var b=new ss;a=void 0===a?null:a;b.i=2;b.ja=void 0===a?null:a;return b}
function ts(a){var b=new ss;a=void 0===a?null:a;b.i=1;b.ja=void 0===a?null:a;return b}
;function vs(a,b){if(a)return a[b.name]}
;function ws(a,b){var c=void 0===c?{}:c;a={method:void 0===b?"POST":b,mode:Tk(a)?"same-origin":"cors",credentials:Tk(a)?"same-origin":"include"};b={};for(var d=p(Object.keys(c)),e=d.next();!e.done;e=d.next())e=e.value,c[e]&&(b[e]=c[e]);0<Object.keys(b).length&&(a.headers=b);return a}
;function xs(){return ng()||cm&&dm("applewebkit")&&!dm("version")&&(!dm("safari")||dm("gsa/"))||Oc&&dm("version/")?!0:L("EOM_VISITOR_DATA")?!1:!0}
;function ys(a){a:{var b=a.raw_embedded_player_response;if(!b&&(a=a.embedded_player_response))try{b=JSON.parse(a)}catch(d){b="EMBEDDED_PLAYER_MODE_UNKNOWN";break a}if(b)b:{for(var c in Th)if(Th[c]==b.embeddedPlayerMode){b=Th[c];break b}b="EMBEDDED_PLAYER_MODE_UNKNOWN"}else b="EMBEDDED_PLAYER_MODE_UNKNOWN"}return"EMBEDDED_PLAYER_MODE_PFL"===b}
;function zs(a){ab.call(this,a.message||a.description||a.name);this.isMissing=a instanceof As;this.isTimeout=a instanceof rs&&"net.timeout"==a.errorCode;this.isCanceled=a instanceof Af}
t(zs,ab);zs.prototype.name="BiscottiError";function As(){ab.call(this,"Biscotti ID is missing from server")}
t(As,ab);As.prototype.name="BiscottiMissingError";var ps={format:"RAW",method:"GET",timeout:5E3,withCredentials:!0},Bs=null;function Cs(){if(M("disable_biscotti_fetch_entirely_for_all_web_clients"))return Error("Biscotti id fetching has been disabled entirely.");if(!xs())return Error("User has not consented - not fetching biscotti id.");var a=L("PLAYER_VARS",{});if("1"==tb(a))return Error("Biscotti ID is not available in private embed mode");if(ys(a))return Error("Biscotti id fetching has been disabled for pfl.")}
function Ik(){var a=Cs();if(void 0!==a)return yf(a);Bs||(Bs=os().then(Ds).kb(function(b){return Es(2,b)}));
return Bs}
function Ds(a){a=a.xhr.responseText;if(0!=a.lastIndexOf(")]}'",0))throw new As;a=JSON.parse(a.substr(4));if(1<(a.type||1))throw new As;a=a.id;Jk(a);Bs=ts(a);Fs(18E5,2);return a}
function Es(a,b){b=new zs(b);Jk("");Bs=us(b);0<a&&Fs(12E4,a-1);throw b;}
function Fs(a,b){Zk(function(){os().then(Ds,function(c){return Es(b,c)}).kb(cb)},a)}
function Gs(){try{var a=B("yt.ads.biscotti.getId_");return a?a():Ik()}catch(b){return yf(b)}}
;function Hs(a){if("1"!=tb(L("PLAYER_VARS",{}))){a&&Hk();try{Gs().then(function(){},function(){}),Zk(Hs,18E5)}catch(b){Fk(b)}}}
;function Is(){this.ud=!0}
function Js(a){var b={},c=pg([]);c&&(b.Authorization=c,c=a=null==a?void 0:a.sessionIndex,void 0===c&&(c=Number(L("SESSION_INDEX",0)),c=isNaN(c)?0:c),M("voice_search_auth_header_removal")||(b["X-Goog-AuthUser"]=c),"INNERTUBE_HOST_OVERRIDE"in vk||(b["X-Origin"]=window.location.origin),void 0===a&&"DELEGATED_SESSION_ID"in vk&&(b["X-Goog-PageId"]=L("DELEGATED_SESSION_ID")));return b}
;var Ks={identityType:"UNAUTHENTICATED_IDENTITY_TYPE_UNKNOWN"};var Ls=new Map([["dark","USER_INTERFACE_THEME_DARK"],["light","USER_INTERFACE_THEME_LIGHT"]]);function Ms(){var a=void 0===a?window.location.href:a;if(M("kevlar_disable_theme_param"))return null;mc(nc(5,a));try{var b=Rk(a).theme;return Ls.get(b)||null}catch(c){}return null}
;function Ns(){this.i={};if(this.j=rl()){var a=lg.get("CONSISTENCY",void 0);a&&Os(this,{encryptedTokenJarContents:a})}}
Ns.prototype.handleResponse=function(a,b){if(!b)throw Error("request needs to be passed into ConsistencyService");var c,d;b=(null==(c=b.ga.context)?void 0:null==(d=c.request)?void 0:d.consistencyTokenJars)||[];var e;if(a=null==(e=a.responseContext)?void 0:e.consistencyTokenJar){e=p(b);for(c=e.next();!c.done;c=e.next())delete this.i[c.value.encryptedTokenJarContents];Os(this,a)}};
function Os(a,b){if(b.encryptedTokenJarContents&&(a.i[b.encryptedTokenJarContents]=b,"string"===typeof b.expirationSeconds)){var c=Number(b.expirationSeconds);setTimeout(function(){delete a.i[b.encryptedTokenJarContents]},1E3*c);
a.j&&pl("CONSISTENCY",b.encryptedTokenJarContents,c,void 0,!0)}}
;var Ps=window.location.hostname.split(".").slice(-2).join(".");function Qs(){var a=L("LOCATION_PLAYABILITY_TOKEN");"TVHTML5"===L("INNERTUBE_CLIENT_NAME")&&(this.i=Rs(this))&&(a=this.i.get("yt-location-playability-token"));a&&(this.locationPlayabilityToken=a,this.j=void 0)}
var Ss;Qs.getInstance=function(){Ss=B("yt.clientLocationService.instance");Ss||(Ss=new Qs,z("yt.clientLocationService.instance",Ss));return Ss};
l=Qs.prototype;l.setLocationOnInnerTubeContext=function(a){a.client||(a.client={});this.j?(a.client.locationInfo||(a.client.locationInfo={}),a.client.locationInfo.latitudeE7=Math.floor(1E7*this.j.coords.latitude),a.client.locationInfo.longitudeE7=Math.floor(1E7*this.j.coords.longitude),a.client.locationInfo.horizontalAccuracyMeters=Math.round(this.j.coords.accuracy),a.client.locationInfo.forceLocationPlayabilityTokenRefresh=!0):this.locationPlayabilityToken&&(a.client.locationPlayabilityToken=this.locationPlayabilityToken)};
l.handleResponse=function(a){var b;a=null==(b=a.responseContext)?void 0:b.locationPlayabilityToken;void 0!==a&&(this.locationPlayabilityToken=a,this.j=void 0,"TVHTML5"===L("INNERTUBE_CLIENT_NAME")?(this.i=Rs(this))&&this.i.set("yt-location-playability-token",a,15552E3):pl("YT_CL",JSON.stringify({loctok:a}),15552E3,Ps,!0))};
function Rs(a){return void 0===a.i?new Pl("yt-client-location"):a.i}
l.clearLocationPlayabilityToken=function(a){"TVHTML5"===a?(this.i=Rs(this))&&this.i.remove("yt-location-playability-token"):ql("YT_CL")};
l.getCurrentPositionFromGeolocation=function(){var a=this;if(!(navigator&&navigator.geolocation&&navigator.geolocation.getCurrentPosition))return Promise.reject(Error("Geolocation unsupported"));var b=!1,c=1E4;"MWEB"===L("INNERTUBE_CLIENT_NAME")&&(b=!0,c=15E3);return new Promise(function(d,e){navigator.geolocation.getCurrentPosition(function(f){a.j=f;d(f)},function(f){e(f)},{enableHighAccuracy:b,
maximumAge:0,timeout:c})})};
l.createUnpluggedLocationInfo=function(a){var b={};a=a.coords;if(null==a?0:a.latitude)b.latitudeE7=Math.floor(1E7*a.latitude);if(null==a?0:a.longitude)b.longitudeE7=Math.floor(1E7*a.longitude);if(null==a?0:a.accuracy)b.locationRadiusMeters=Math.round(a.accuracy);return b};function Ts(a,b){var c,d=null==(c=vs(a,$i))?void 0:c.signal;if(d&&b.Ma&&(c=b.Ma[d]))return c();var e;if((c=null==(e=vs(a,Yi))?void 0:e.request)&&b.Jc&&(e=b.Jc[c]))return e();for(var f in a)if(b.Sb[f]&&(a=b.Sb[f]))return a()}
;var Us=Symbol("injectionDeps");function Vs(a){this.name=a}
Vs.prototype.toString=function(){return"InjectionToken("+this.name+")"};
function Ws(){this.key=Xs}
function Ys(){this.providers=new Map;this.i=new Map}
Ys.prototype.resolve=function(a){return a instanceof Ws?Zs(this,a.key,[],!0):Zs(this,a,[])};
function Zs(a,b,c,d){d=void 0===d?!1:d;if(-1<c.indexOf(b))throw Error("Deps cycle for: "+b);if(a.i.has(b))return a.i.get(b);if(!a.providers.has(b)){if(d)return;throw Error("No provider for: "+b);}d=a.providers.get(b);c.push(b);if(d.wc)var e=d.wc;else if(d.Bd)e=d[Us]?$s(a,d[Us],c):[],e=d.Bd.apply(d,ia(e));else if(d.vc){e=d.vc;var f=e[Us]?$s(a,e[Us],c):[];e=new (Function.prototype.bind.apply(e,[null].concat(ia(f))))}else throw Error("Could not resolve providers for: "+b);c.pop();d.tr||a.i.set(b,e);
return e}
function $s(a,b,c){return b?b.map(function(d){return d instanceof Ws?Zs(a,d.key,c,!0):Zs(a,d,c)}):[]}
;var at;function bt(){at||(at=new Ys);return at}
;function ct(a){return function(){return new a}}
;var dt={},et=(dt.WEB_UNPLUGGED="^unplugged/",dt.WEB_UNPLUGGED_ONBOARDING="^unplugged/",dt.WEB_UNPLUGGED_OPS="^unplugged/",dt.WEB_UNPLUGGED_PUBLIC="^unplugged/",dt.WEB_CREATOR="^creator/",dt.WEB_KIDS="^kids/",dt.WEB_EXPERIMENTS="^experiments/",dt.WEB_MUSIC="^music/",dt.WEB_REMIX="^music/",dt.WEB_MUSIC_EMBEDDED_PLAYER="^music/",dt.WEB_MUSIC_EMBEDDED_PLAYER="^main_app/|^sfv/",dt);
function ft(a){var b=void 0===b?"UNKNOWN_INTERFACE":b;if(1===a.length)return a[0];var c=et[b];if(c){var d=new RegExp(c),e=p(a);for(c=e.next();!c.done;c=e.next())if(c=c.value,d.exec(c))return c}var f=[];Object.entries(et).forEach(function(g){var h=p(g);g=h.next().value;h=h.next().value;b!==g&&f.push(h)});
d=new RegExp(f.join("|"));a.sort(function(g,h){return g.length-h.length});
e=p(a);for(c=e.next();!c.done;c=e.next())if(c=c.value,!d.exec(c))return c;return a[0]}
;function gt(){}
gt.prototype.o=function(a,b,c){b=void 0===b?{}:b;c=void 0===c?Ks:c;var d=a.clickTrackingParams,e=this.m,f=!1;f=void 0===f?!1:f;e=void 0===e?!1:e;var g=L("INNERTUBE_CONTEXT");if(g){g=wb(g);M("web_no_tracking_params_in_shell_killswitch")||delete g.clickTracking;g.client||(g.client={});var h=g.client;"MWEB"===h.clientName&&(h.clientFormFactor=L("IS_TABLET")?"LARGE_FORM_FACTOR":"SMALL_FORM_FACTOR");h.screenWidthPoints=window.innerWidth;h.screenHeightPoints=window.innerHeight;h.screenPixelDensity=Math.round(window.devicePixelRatio||
1);h.screenDensityFloat=window.devicePixelRatio||1;h.utcOffsetMinutes=-Math.floor((new Date).getTimezoneOffset());var k=void 0===k?!1:k;tl.getInstance();var m="USER_INTERFACE_THEME_LIGHT";wl(165)?m="USER_INTERFACE_THEME_DARK":wl(174)?m="USER_INTERFACE_THEME_LIGHT":!M("kevlar_legacy_browsers")&&window.matchMedia&&window.matchMedia("(prefers-color-scheme)").matches&&window.matchMedia("(prefers-color-scheme: dark)").matches&&(m="USER_INTERFACE_THEME_DARK");k=k?m:Ms()||m;h.userInterfaceTheme=k;if(!f){if(k=
Dl())h.connectionType=k;M("web_log_effective_connection_type")&&(k=El())&&(g.client.effectiveConnectionType=k)}var q;if(M("web_log_memory_total_kbytes")&&(null==(q=y.navigator)?0:q.deviceMemory)){var r;q=null==(r=y.navigator)?void 0:r.deviceMemory;g.client.memoryTotalKbytes=""+1E6*q}r=Rk(y.location.href);!M("web_populate_internal_geo_killswitch")&&r.internalcountrycode&&(h.internalGeo=r.internalcountrycode);"MWEB"===h.clientName||"WEB"===h.clientName?(h.mainAppWebInfo={graftUrl:y.location.href},M("kevlar_woffle")&&
nl.i&&(r=nl.i,h.mainAppWebInfo.pwaInstallabilityStatus=!r.i&&r.j?"PWA_INSTALLABILITY_STATUS_CAN_BE_INSTALLED":"PWA_INSTALLABILITY_STATUS_UNKNOWN"),h.mainAppWebInfo.webDisplayMode=ol(),h.mainAppWebInfo.isWebNativeShareAvailable=navigator&&void 0!==navigator.share):"TVHTML5"===h.clientName&&(!M("web_lr_app_quality_killswitch")&&(r=L("LIVING_ROOM_APP_QUALITY"))&&(h.tvAppInfo=Object.assign(h.tvAppInfo||{},{appQuality:r})),r=L("LIVING_ROOM_CERTIFICATION_SCOPE"))&&(h.tvAppInfo=Object.assign(h.tvAppInfo||
{},{certificationScope:r}));if(!M("web_populate_time_zone_itc_killswitch")){b:{if("undefined"!==typeof Intl)try{var w=(new Intl.DateTimeFormat).resolvedOptions().timeZone;break b}catch(pb){}w=void 0}w&&(h.timeZone=w)}(w=Ak())?h.experimentsToken=w:delete h.experimentsToken;w=Bk();Ns.i||(Ns.i=new Ns);h=Ns.i.i;r=[];q=0;for(var u in h)r[q++]=h[u];g.request=Object.assign({},g.request,{internalExperimentFlags:w,consistencyTokenJars:r});!M("web_prequest_context_killswitch")&&(u=L("INNERTUBE_CONTEXT_PREQUEST_CONTEXT"))&&
(g.request.externalPrequestContext=u);w=tl.getInstance();u=wl(58);w=w.get("gsml","");g.user=Object.assign({},g.user);u&&(g.user.enableSafetyMode=u);w&&(g.user.lockedSafetyMode=!0);M("warm_op_csn_cleanup")?e&&(f=hs())&&(g.clientScreenNonce=f):!f&&(f=hs())&&(g.clientScreenNonce=f);d&&(g.clickTracking={clickTrackingParams:d});if(d=B("yt.mdx.remote.remoteClient_"))g.remoteClient=d;Qs.getInstance().setLocationOnInnerTubeContext(g);try{var A=Uk(),E=A.bid;delete A.bid;g.adSignalsInfo={params:[],bid:E};var F=
p(Object.entries(A));for(var O=F.next();!O.done;O=F.next()){var N=p(O.value),R=N.next().value,ca=N.next().value;A=R;E=ca;d=void 0;null==(d=g.adSignalsInfo.params)||d.push({key:A,value:""+E})}}catch(pb){Pr(pb)}F=g}else Pr(Error("Error: No InnerTubeContext shell provided in ytconfig.")),F={};F={context:F};if(O=this.i(a)){this.j(F,O,b);var W;b="/youtubei/v1/"+ft(this.l());(O=null==(W=vs(a.commandMetadata,Zi))?void 0:W.apiUrl)&&(b=O);W=b;(b=L("INNERTUBE_HOST_OVERRIDE"))&&(W=String(b)+String(pc(W)));b=
{};b.key=L("INNERTUBE_API_KEY");M("json_condensed_response")&&(b.prettyPrint="false");W=Sk(W,b||{},!1);a=M("kevlar_response_command_processor_page")?Object.assign({},{command:a},void 0):Object.assign({},void 0);a={input:W,va:ws(W),ga:F,config:a};a.config.Va?a.config.Va.identity=c:a.config.Va={identity:c};return a}Pr(new Q("Error: Failed to create Request from Command.",a))};
ea.Object.defineProperties(gt.prototype,{m:{configurable:!0,enumerable:!0,get:function(){return!1}}});function ht(){}
t(ht,gt);ht.prototype.o=function(){return{input:"/getDatasyncIdsEndpoint",va:ws("/getDatasyncIdsEndpoint","GET"),ga:{}}};
ht.prototype.l=function(){return[]};
ht.prototype.i=function(){};
ht.prototype.j=function(){};var jt={},kt=(jt.GET_DATASYNC_IDS=ct(ht),jt);function lt(a){var b=Ja.apply(1,arguments);if(!mt(a)||b.some(function(d){return!mt(d)}))throw Error("Only objects may be merged.");
b=p(b);for(var c=b.next();!c.done;c=b.next())nt(a,c.value);return a}
function nt(a,b){for(var c in b)if(mt(b[c])){if(c in a&&!mt(a[c]))throw Error("Cannot merge an object into a non-object.");c in a||(a[c]={});nt(a[c],b[c])}else if(ot(b[c])){if(c in a&&!ot(a[c]))throw Error("Cannot merge an array into a non-array.");c in a||(a[c]=[]);pt(a[c],b[c])}else a[c]=b[c];return a}
function pt(a,b){b=p(b);for(var c=b.next();!c.done;c=b.next())c=c.value,mt(c)?a.push(nt({},c)):ot(c)?a.push(pt([],c)):a.push(c);return a}
function mt(a){return"object"===typeof a&&!Array.isArray(a)}
function ot(a){return"object"===typeof a&&Array.isArray(a)}
;function qt(a,b){Un.call(this,1,arguments);this.timer=b}
t(qt,Un);var rt=new Vn("aft-recorded",qt);var st=window;function tt(){this.timing={};this.clearResourceTimings=function(){};
this.webkitClearResourceTimings=function(){};
this.mozClearResourceTimings=function(){};
this.msClearResourceTimings=function(){};
this.oClearResourceTimings=function(){}}
var S=st.performance||st.mozPerformance||st.msPerformance||st.webkitPerformance||new tt;var ut=!1,vt={'script[name="scheduler/scheduler"]':"sj",'script[name="player/base"]':"pj",'link[rel="stylesheet"][name="www-player"]':"pc",'link[rel="stylesheet"][name="player/www-player"]':"pc",'script[name="desktop_polymer/desktop_polymer"]':"dpj",'link[rel="import"][name="desktop_polymer"]':"dph",'script[name="mobile-c3"]':"mcj",'link[rel="stylesheet"][name="mobile-c3"]':"mcc",'script[name="player-plasma-ias-phone/base"]':"mcppj",'script[name="player-plasma-ias-tablet/base"]':"mcptj",'link[rel="stylesheet"][name="mobile-polymer-player-ias"]':"mcpc",
'link[rel="stylesheet"][name="mobile-polymer-player-svg-ias"]':"mcpsc",'script[name="mobile_blazer_core_mod"]':"mbcj",'link[rel="stylesheet"][name="mobile_blazer_css"]':"mbc",'script[name="mobile_blazer_logged_in_users_mod"]':"mbliuj",'script[name="mobile_blazer_logged_out_users_mod"]':"mblouj",'script[name="mobile_blazer_noncore_mod"]':"mbnj","#player_css":"mbpc",'script[name="mobile_blazer_desktopplayer_mod"]':"mbpj",'link[rel="stylesheet"][name="mobile_blazer_tablet_css"]':"mbtc",'script[name="mobile_blazer_watch_mod"]':"mbwj"};
Wa(S.clearResourceTimings||S.webkitClearResourceTimings||S.mozClearResourceTimings||S.msClearResourceTimings||S.oClearResourceTimings||cb,S);function wt(a){var b=xt(a);if(b.aft)return b.aft;a=L((a||"")+"TIMING_AFT_KEYS",["ol"]);for(var c=a.length,d=0;d<c;d++){var e=b[a[d]];if(e)return e}return NaN}
function zt(){var a;if(M("csi_use_performance_navigation_timing")||M("csi_use_performance_navigation_timing_tvhtml5")){var b,c,d,e=null==S?void 0:null==(a=S.getEntriesByType)?void 0:null==(b=a.call(S,"navigation"))?void 0:null==(c=b[0])?void 0:null==(d=c.toJSON)?void 0:d.call(c);e?(e.requestStart=At(e.requestStart),e.responseEnd=At(e.responseEnd),e.redirectStart=At(e.redirectStart),e.redirectEnd=At(e.redirectEnd),e.domainLookupEnd=At(e.domainLookupEnd),e.connectStart=At(e.connectStart),e.connectEnd=
At(e.connectEnd),e.responseStart=At(e.responseStart),e.secureConnectionStart=At(e.secureConnectionStart),e.domainLookupStart=At(e.domainLookupStart),e.isPerformanceNavigationTiming=!0,a=e):a=S.timing}else a=S.timing;return a}
function Bt(){return(M("csi_use_time_origin")||M("csi_use_time_origin_tvhtml5"))&&S.timeOrigin?Math.floor(S.timeOrigin):S.timing.navigationStart}
function At(a){return Math.round(Bt()+a)}
function Ct(a){var b;(b=B("ytcsi."+(a||"")+"data_"))||(b={tick:{},info:{}},z("ytcsi."+(a||"")+"data_",b));return b}
function Dt(a){a=Ct(a);a.info||(a.info={});return a.info}
function Et(a){a=Ct(a);a.metadata||(a.metadata={});return a.metadata}
function xt(a){a=Ct(a);a.tick||(a.tick={});return a.tick}
function Ft(a){a=Ct(a);if(a.gel){var b=a.gel;b.gelInfos||(b.gelInfos={});b.gelTicks||(b.gelTicks={})}else a.gel={gelTicks:{},gelInfos:{}};return a.gel}
function Gt(a){a=Ft(a);a.gelInfos||(a.gelInfos={});return a.gelInfos}
function Ht(a){a=Ft(a);a.jspbInfos||(a.jspbInfos=[]);return a.jspbInfos}
function It(a){var b=Ct(a).nonce;b||(b=Xr(),Ct(a).nonce=b);return b}
function Jt(a){var b=xt(a||""),c=wt(a);c&&!ut&&($n(rt,new qt(Math.round(c-b._start),a)),ut=!0)}
function Kt(a,b){for(var c=p(Object.keys(b)),d=c.next();!d.done;d=c.next())if(d=d.value,!Object.keys(a).includes(d)||"object"===typeof b[d]&&!Kt(a[d],b[d]))return!1;return!0}
;function Lt(){if(S.getEntriesByType){var a=S.getEntriesByType("paint");if(a=kb(a,function(b){return"first-paint"===b.name}))return At(a.startTime)}a=S.timing;
return a.Yc?Math.max(0,a.Yc):0}
;function Mt(){var a=B("ytcsi.debug");a||(a=[],z("ytcsi.debug",a),z("ytcsi.reference",{}));return a}
function Nt(a){a=a||"";var b=B("ytcsi.reference");b||(Mt(),b=B("ytcsi.reference"));if(b[a])return b[a];var c=Mt(),d={timerName:a,info:{},tick:{},span:{},jspbInfo:[]};c.push(d);return b[a]=d}
;var T={},Ot=(T.auto_search="LATENCY_ACTION_AUTO_SEARCH",T.ad_to_ad="LATENCY_ACTION_AD_TO_AD",T.ad_to_video="LATENCY_ACTION_AD_TO_VIDEO",T["analytics.explore"]="LATENCY_ACTION_CREATOR_ANALYTICS_EXPLORE",T.app_startup="LATENCY_ACTION_APP_STARTUP",T["artist.analytics"]="LATENCY_ACTION_CREATOR_ARTIST_ANALYTICS",T["artist.events"]="LATENCY_ACTION_CREATOR_ARTIST_CONCERTS",T["artist.presskit"]="LATENCY_ACTION_CREATOR_ARTIST_PROFILE",T["song.analytics"]="LATENCY_ACTION_CREATOR_SONG_ANALYTICS",T.browse="LATENCY_ACTION_BROWSE",
T.cast_splash="LATENCY_ACTION_CAST_SPLASH",T.channels="LATENCY_ACTION_CHANNELS",T.creator_channel_dashboard="LATENCY_ACTION_CREATOR_CHANNEL_DASHBOARD",T["channel.analytics"]="LATENCY_ACTION_CREATOR_CHANNEL_ANALYTICS",T["channel.comments"]="LATENCY_ACTION_CREATOR_CHANNEL_COMMENTS",T["channel.content"]="LATENCY_ACTION_CREATOR_POST_LIST",T["channel.content.promotions"]="LATENCY_ACTION_CREATOR_PROMOTION_LIST",T["channel.copyright"]="LATENCY_ACTION_CREATOR_CHANNEL_COPYRIGHT",T["channel.editing"]="LATENCY_ACTION_CREATOR_CHANNEL_EDITING",
T["channel.monetization"]="LATENCY_ACTION_CREATOR_CHANNEL_MONETIZATION",T["channel.music"]="LATENCY_ACTION_CREATOR_CHANNEL_MUSIC",T["channel.music_storefront"]="LATENCY_ACTION_CREATOR_CHANNEL_MUSIC_STOREFRONT",T["channel.playlists"]="LATENCY_ACTION_CREATOR_CHANNEL_PLAYLISTS",T["channel.translations"]="LATENCY_ACTION_CREATOR_CHANNEL_TRANSLATIONS",T["channel.videos"]="LATENCY_ACTION_CREATOR_CHANNEL_VIDEOS",T["channel.live_streaming"]="LATENCY_ACTION_CREATOR_LIVE_STREAMING",T.chips="LATENCY_ACTION_CHIPS",
T["dialog.copyright_strikes"]="LATENCY_ACTION_CREATOR_DIALOG_COPYRIGHT_STRIKES",T["dialog.video_copyright"]="LATENCY_ACTION_CREATOR_DIALOG_VIDEO_COPYRIGHT",T["dialog.uploads"]="LATENCY_ACTION_CREATOR_DIALOG_UPLOADS",T.direct_playback="LATENCY_ACTION_DIRECT_PLAYBACK",T.embed="LATENCY_ACTION_EMBED",T.entity_key_serialization_perf="LATENCY_ACTION_ENTITY_KEY_SERIALIZATION_PERF",T.entity_key_deserialization_perf="LATENCY_ACTION_ENTITY_KEY_DESERIALIZATION_PERF",T.explore="LATENCY_ACTION_EXPLORE",T.home=
"LATENCY_ACTION_HOME",T.library="LATENCY_ACTION_LIBRARY",T.live="LATENCY_ACTION_LIVE",T.live_pagination="LATENCY_ACTION_LIVE_PAGINATION",T.onboarding="LATENCY_ACTION_ONBOARDING",T.parent_profile_settings="LATENCY_ACTION_KIDS_PARENT_PROFILE_SETTINGS",T.parent_tools_collection="LATENCY_ACTION_PARENT_TOOLS_COLLECTION",T.parent_tools_dashboard="LATENCY_ACTION_PARENT_TOOLS_DASHBOARD",T.player_att="LATENCY_ACTION_PLAYER_ATTESTATION",T["post.comments"]="LATENCY_ACTION_CREATOR_POST_COMMENTS",T["post.edit"]=
"LATENCY_ACTION_CREATOR_POST_EDIT",T.prebuffer="LATENCY_ACTION_PREBUFFER",T.prefetch="LATENCY_ACTION_PREFETCH",T.profile_settings="LATENCY_ACTION_KIDS_PROFILE_SETTINGS",T.profile_switcher="LATENCY_ACTION_LOGIN",T.reel_watch="LATENCY_ACTION_REEL_WATCH",T.results="LATENCY_ACTION_RESULTS",T["promotion.edit"]="LATENCY_ACTION_CREATOR_PROMOTION_EDIT",T.search_ui="LATENCY_ACTION_SEARCH_UI",T.search_suggest="LATENCY_ACTION_SUGGEST",T.search_zero_state="LATENCY_ACTION_SEARCH_ZERO_STATE",T.secret_code="LATENCY_ACTION_KIDS_SECRET_CODE",
T.seek="LATENCY_ACTION_PLAYER_SEEK",T.settings="LATENCY_ACTION_SETTINGS",T.store="LATENCY_ACTION_STORE",T.tenx="LATENCY_ACTION_TENX",T.video_to_ad="LATENCY_ACTION_VIDEO_TO_AD",T.watch="LATENCY_ACTION_WATCH",T.watch_it_again="LATENCY_ACTION_KIDS_WATCH_IT_AGAIN",T["watch,watch7"]="LATENCY_ACTION_WATCH",T["watch,watch7_html5"]="LATENCY_ACTION_WATCH",T["watch,watch7ad"]="LATENCY_ACTION_WATCH",T["watch,watch7ad_html5"]="LATENCY_ACTION_WATCH",T.wn_comments="LATENCY_ACTION_LOAD_COMMENTS",T.ww_rqs="LATENCY_ACTION_WHO_IS_WATCHING",
T["video.analytics"]="LATENCY_ACTION_CREATOR_VIDEO_ANALYTICS",T["video.comments"]="LATENCY_ACTION_CREATOR_VIDEO_COMMENTS",T["video.edit"]="LATENCY_ACTION_CREATOR_VIDEO_EDIT",T["video.editor"]="LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR",T["video.editor_async"]="LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR_ASYNC",T["video.live_settings"]="LATENCY_ACTION_CREATOR_VIDEO_LIVE_SETTINGS",T["video.live_streaming"]="LATENCY_ACTION_CREATOR_VIDEO_LIVE_STREAMING",T["video.monetization"]="LATENCY_ACTION_CREATOR_VIDEO_MONETIZATION",
T["video.translations"]="LATENCY_ACTION_CREATOR_VIDEO_TRANSLATIONS",T.voice_assistant="LATENCY_ACTION_VOICE_ASSISTANT",T.cast_load_by_entity_to_watch="LATENCY_ACTION_CAST_LOAD_BY_ENTITY_TO_WATCH",T.networkless_performance="LATENCY_ACTION_NETWORKLESS_PERFORMANCE",T),U={},Pt=(U.ad_allowed="adTypesAllowed",U.yt_abt="adBreakType",U.ad_cpn="adClientPlaybackNonce",U.ad_docid="adVideoId",U.yt_ad_an="adNetworks",U.ad_at="adType",U.aida="appInstallDataAgeMs",U.browse_id="browseId",U.p="httpProtocol",U.t="transportProtocol",
U.cs="commandSource",U.cpn="clientPlaybackNonce",U.ccs="creatorInfo.creatorCanaryState",U.ctop="creatorInfo.topEntityType",U.csn="clientScreenNonce",U.docid="videoId",U.GetHome_rid="requestIds",U.GetSearch_rid="requestIds",U.GetPlayer_rid="requestIds",U.GetWatchNext_rid="requestIds",U.GetBrowse_rid="requestIds",U.GetLibrary_rid="requestIds",U.is_continuation="isContinuation",U.is_nav="isNavigation",U.b_p="kabukiInfo.browseParams",U.is_prefetch="kabukiInfo.isPrefetch",U.is_secondary_nav="kabukiInfo.isSecondaryNav",
U.nav_type="kabukiInfo.navigationType",U.prev_browse_id="kabukiInfo.prevBrowseId",U.query_source="kabukiInfo.querySource",U.voz_type="kabukiInfo.vozType",U.yt_lt="loadType",U.mver="creatorInfo.measurementVersion",U.yt_ad="isMonetized",U.nr="webInfo.navigationReason",U.nrsu="navigationRequestedSameUrl",U.pnt="performanceNavigationTiming",U.prt="playbackRequiresTap",U.plt="playerInfo.playbackType",U.pis="playerInfo.playerInitializedState",U.paused="playerInfo.isPausedOnLoad",U.yt_pt="playerType",U.fmt=
"playerInfo.itag",U.yt_pl="watchInfo.isPlaylist",U.yt_pre="playerInfo.preloadType",U.yt_ad_pr="prerollAllowed",U.pa="previousAction",U.yt_red="isRedSubscriber",U.rce="mwebInfo.responseContentEncoding",U.rc="resourceInfo.resourceCache",U.scrh="screenHeight",U.scrw="screenWidth",U.st="serverTimeMs",U.ssdm="shellStartupDurationMs",U.br_trs="tvInfo.bedrockTriggerState",U.kebqat="kabukiInfo.earlyBrowseRequestInfo.abandonmentType",U.kebqa="kabukiInfo.earlyBrowseRequestInfo.adopted",U.label="tvInfo.label",
U.is_mdx="tvInfo.isMdx",U.preloaded="tvInfo.isPreloaded",U.aac_type="tvInfo.authAccessCredentialType",U.upg_player_vis="playerInfo.visibilityState",U.query="unpluggedInfo.query",U.upg_chip_ids_string="unpluggedInfo.upgChipIdsString",U.yt_vst="videoStreamType",U.vph="viewportHeight",U.vpw="viewportWidth",U.yt_vis="isVisible",U.rcl="mwebInfo.responseContentLength",U.GetSettings_rid="requestIds",U.GetTrending_rid="requestIds",U.GetMusicSearchSuggestions_rid="requestIds",U.REQUEST_ID="requestIds",U),
Qt="isContinuation isNavigation kabukiInfo.earlyBrowseRequestInfo.adopted kabukiInfo.isPrefetch kabukiInfo.isSecondaryNav isMonetized navigationRequestedSameUrl performanceNavigationTiming playerInfo.isPausedOnLoad prerollAllowed isRedSubscriber tvInfo.isMdx tvInfo.isPreloaded isVisible watchInfo.isPlaylist playbackRequiresTap".split(" "),Rt={},St=(Rt.ccs="CANARY_STATE_",Rt.mver="MEASUREMENT_VERSION_",Rt.pis="PLAYER_INITIALIZED_STATE_",Rt.yt_pt="LATENCY_PLAYER_",Rt.pa="LATENCY_ACTION_",Rt.ctop="TOP_ENTITY_TYPE_",
Rt.yt_vst="VIDEO_STREAM_TYPE_",Rt),Tt="all_vc ap aq c cbr cbrand cbrver cmodel cos cosver cplatform ctheme cver ei l_an l_mm plid srt yt_fss yt_li vpst vpni2 vpil2 icrc icrt pa GetAccountOverview_rid GetHistory_rid cmt d_vpct d_vpnfi d_vpni nsru pc pfa pfeh pftr pnc prerender psc rc start tcrt tcrc ssr vpr vps yt_abt yt_fn yt_fs yt_pft yt_pre yt_pt yt_pvis ytu_pvis yt_ref yt_sts tds".split(" ");function Ut(a){return Ot[a]||"LATENCY_ACTION_UNKNOWN"}
function Vt(a,b,c){c=Ft(c);if(c.gelInfos)c.gelInfos[a]=!0;else{var d={};c.gelInfos=(d[a]=!0,d)}if(a.match("_rid")){var e=a.split("_rid")[0];a="REQUEST_ID"}if(a in Pt){c=Pt[a];0<=eb(Qt,c)&&(b=!!b);a in St&&"string"===typeof b&&(b=St[a]+b.toUpperCase());a=b;b=c.split(".");for(var f=d={},g=0;g<b.length-1;g++){var h=b[g];f[h]={};f=f[h]}f[b[b.length-1]]="requestIds"===c?[{id:a,endpoint:e}]:a;return lt({},d)}0<=eb(Tt,a)||Qr(new Q("Unknown label logged with GEL CSI",a))}
;var V={LATENCY_ACTION_SHORTS_VIDEO_INGESTION_TRANSCODING:179,LATENCY_ACTION_KIDS_PROFILE_SWITCHER:90,LATENCY_ACTION_OFFLINE_THUMBNAIL_TRANSFER:100,LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR_ASYNC:46,LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR:37,LATENCY_ACTION_SPINNER_DISPLAYED:14,LATENCY_ACTION_PLAYABILITY_CHECK:10,LATENCY_ACTION_PROCESS:9,LATENCY_ACTION_APP_STARTUP:5,LATENCY_ACTION_COMMERCE_TRANSACTION:184,LATENCY_ACTION_LOG_PAYMENT_SERVER_ANALYTICS_RPC:173,LATENCY_ACTION_GET_PAYMENT_INSTRUMENTS_PARAMS_RPC:172,
LATENCY_ACTION_GET_FIX_INSTRUMENT_PARAMS_RPC:171,LATENCY_ACTION_RESUME_SUBSCRIPTION_RPC:170,LATENCY_ACTION_PAUSE_SUBSCRIPTION_RPC:169,LATENCY_ACTION_GET_OFFLINE_UPSELL_RPC:168,LATENCY_ACTION_GET_OFFERS_RPC:167,LATENCY_ACTION_GET_CANCELLATION_YT_FLOW_RPC:166,LATENCY_ACTION_GET_CANCELLATION_FLOW_RPC:165,LATENCY_ACTION_UPDATE_CROSS_DEVICE_OFFLINE_STATE_RPC:164,LATENCY_ACTION_GET_OFFER_DETAILS_RPC:163,LATENCY_ACTION_CANCEL_RECURRENCE_TRANSACTION_RPC:162,LATENCY_ACTION_GET_TIP_MODULE_RPC:161,LATENCY_ACTION_HANDLE_TRANSACTION_RPC:160,
LATENCY_ACTION_COMPLETE_TRANSACTION_RPC:159,LATENCY_ACTION_GET_CART_RPC:158,LATENCY_ACTION_THUMBNAIL_FETCH:156,LATENCY_ACTION_ABANDONED_DIRECT_PLAYBACK:154,LATENCY_ACTION_SHARE_VIDEO:153,LATENCY_ACTION_AD_TO_VIDEO_INT:152,LATENCY_ACTION_ABANDONED_BROWSE:151,LATENCY_ACTION_PLAYER_ROTATION:150,LATENCY_ACTION_GENERIC_WEB_VIEW:183,LATENCY_ACTION_SHOPPING_IN_APP:124,LATENCY_ACTION_PLAYER_ATTESTATION:121,LATENCY_ACTION_PLAYER_SEEK:119,LATENCY_ACTION_SUPER_STICKER_BUY_FLOW:114,LATENCY_ACTION_DOWNLOADS_DATA_ACCESS:180,
LATENCY_ACTION_BLOCKS_PERFORMANCE:148,LATENCY_ACTION_ASSISTANT_QUERY:138,LATENCY_ACTION_ASSISTANT_SETTINGS:137,LATENCY_ACTION_ENTITY_KEY_DESERIALIZATION_PERF:129,LATENCY_ACTION_ENTITY_KEY_SERIALIZATION_PERF:128,LATENCY_ACTION_PROOF_OF_ORIGIN_TOKEN_CREATE:127,LATENCY_ACTION_EMBEDS_SDK_INITIALIZATION:123,LATENCY_ACTION_NETWORKLESS_PERFORMANCE:122,LATENCY_ACTION_DOWNLOADS_EXPANSION:133,LATENCY_ACTION_ENTITY_TRANSFORM:131,LATENCY_ACTION_DOWNLOADS_COMPATIBILITY_LAYER:96,LATENCY_ACTION_EMBEDS_SET_VIDEO:95,
LATENCY_ACTION_SETTINGS:93,LATENCY_ACTION_ABANDONED_STARTUP:81,LATENCY_ACTION_MEDIA_BROWSER_ALARM_PLAY:80,LATENCY_ACTION_MEDIA_BROWSER_SEARCH:79,LATENCY_ACTION_MEDIA_BROWSER_LOAD_TREE:78,LATENCY_ACTION_WHO_IS_WATCHING:77,LATENCY_ACTION_CAST_LOAD_BY_ENTITY_TO_WATCH:76,LATENCY_ACTION_LITE_SWITCH_ACCOUNT:73,LATENCY_ACTION_ELEMENTS_PERFORMANCE:70,LATENCY_ACTION_LOCATION_SIGNAL_COLLECTION:69,LATENCY_ACTION_MODIFY_CHANNEL_NOTIFICATION:65,LATENCY_ACTION_OFFLINE_STORE_START:61,LATENCY_ACTION_REEL_EDITOR:58,
LATENCY_ACTION_CHANNEL_SUBSCRIBE:56,LATENCY_ACTION_CHANNEL_PREVIEW:55,LATENCY_ACTION_PREFETCH:52,LATENCY_ACTION_ABANDONED_WATCH:45,LATENCY_ACTION_LOAD_COMMENT_REPLIES:26,LATENCY_ACTION_LOAD_COMMENTS:25,LATENCY_ACTION_EDIT_COMMENT:24,LATENCY_ACTION_NEW_COMMENT:23,LATENCY_ACTION_OFFLINE_SHARING_RECEIVER_PAIRING:19,LATENCY_ACTION_EMBED:18,LATENCY_ACTION_MDX_LAUNCH:15,LATENCY_ACTION_RESOLVE_URL:13,LATENCY_ACTION_CAST_SPLASH:149,LATENCY_ACTION_MDX_STREAM_TRANSFER:178,LATENCY_ACTION_MDX_CAST:120,LATENCY_ACTION_MDX_COMMAND:12,
LATENCY_ACTION_REEL_SELECT_SEGMENT:136,LATENCY_ACTION_ACCELERATED_EFFECTS:145,LATENCY_ACTION_EDIT_AUDIO_GEN:182,LATENCY_ACTION_UPLOAD_AUDIO_MIXER:147,LATENCY_ACTION_SHORTS_CLIENT_SIDE_RENDERING:157,LATENCY_ACTION_SHORTS_SEG_IMP_TRANSCODING:146,LATENCY_ACTION_SHORTS_AUDIO_PICKER_PLAYBACK:130,LATENCY_ACTION_SHORTS_WAVEFORM_DOWNLOAD:125,LATENCY_ACTION_SHORTS_VIDEO_INGESTION:155,LATENCY_ACTION_SHORTS_GALLERY:107,LATENCY_ACTION_SHORTS_TRIM:105,LATENCY_ACTION_SHORTS_EDIT:104,LATENCY_ACTION_SHORTS_CAMERA:103,
LATENCY_ACTION_PARENT_TOOLS_DASHBOARD:102,LATENCY_ACTION_PARENT_TOOLS_COLLECTION:101,LATENCY_ACTION_MUSIC_LOAD_RECOMMENDED_MEDIA_ITEMS:116,LATENCY_ACTION_MUSIC_LOAD_MEDIA_ITEMS:115,LATENCY_ACTION_MUSIC_ALBUM_DETAIL:72,LATENCY_ACTION_MUSIC_PLAYLIST_DETAIL:71,LATENCY_ACTION_STORE:175,LATENCY_ACTION_CHIPS:68,LATENCY_ACTION_SEARCH_ZERO_STATE:67,LATENCY_ACTION_LIVE_PAGINATION:117,LATENCY_ACTION_LIVE:20,LATENCY_ACTION_PREBUFFER:40,LATENCY_ACTION_TENX:39,LATENCY_ACTION_KIDS_PROFILE_SETTINGS:94,LATENCY_ACTION_KIDS_WATCH_IT_AGAIN:92,
LATENCY_ACTION_KIDS_SECRET_CODE:91,LATENCY_ACTION_KIDS_PARENT_PROFILE_SETTINGS:89,LATENCY_ACTION_KIDS_ONBOARDING:88,LATENCY_ACTION_KIDS_VOICE_SEARCH:82,LATENCY_ACTION_KIDS_CURATED_COLLECTION:62,LATENCY_ACTION_KIDS_LIBRARY:53,LATENCY_ACTION_CREATOR_PROMOTION_LIST:186,LATENCY_ACTION_CREATOR_PROMOTION_EDIT:185,LATENCY_ACTION_CREATOR_VIDEO_TRANSLATIONS:38,LATENCY_ACTION_CREATOR_VIDEO_MONETIZATION:74,LATENCY_ACTION_CREATOR_VIDEO_LIVE_STREAMING:141,LATENCY_ACTION_CREATOR_VIDEO_LIVE_SETTINGS:142,LATENCY_ACTION_CREATOR_VIDEO_EDITOR_ASYNC:51,
LATENCY_ACTION_CREATOR_VIDEO_EDITOR:50,LATENCY_ACTION_CREATOR_VIDEO_EDIT:36,LATENCY_ACTION_CREATOR_VIDEO_COMMENTS:34,LATENCY_ACTION_CREATOR_VIDEO_ANALYTICS:33,LATENCY_ACTION_CREATOR_SONG_ANALYTICS:176,LATENCY_ACTION_CREATOR_POST_LIST:112,LATENCY_ACTION_CREATOR_POST_EDIT:110,LATENCY_ACTION_CREATOR_POST_COMMENTS:111,LATENCY_ACTION_CREATOR_LIVE_STREAMING:108,LATENCY_ACTION_CREATOR_DIALOG_VIDEO_COPYRIGHT:174,LATENCY_ACTION_CREATOR_DIALOG_UPLOADS:86,LATENCY_ACTION_CREATOR_DIALOG_COPYRIGHT_STRIKES:87,LATENCY_ACTION_CREATOR_CHANNEL_VIDEOS:32,
LATENCY_ACTION_CREATOR_CHANNEL_TRANSLATIONS:48,LATENCY_ACTION_CREATOR_CHANNEL_PLAYLISTS:139,LATENCY_ACTION_CREATOR_CHANNEL_MUSIC_STOREFRONT:177,LATENCY_ACTION_CREATOR_CHANNEL_MUSIC:99,LATENCY_ACTION_CREATOR_CHANNEL_MONETIZATION:43,LATENCY_ACTION_CREATOR_CHANNEL_EDITING:113,LATENCY_ACTION_CREATOR_CHANNEL_DASHBOARD:49,LATENCY_ACTION_CREATOR_CHANNEL_COPYRIGHT:44,LATENCY_ACTION_CREATOR_CHANNEL_COMMENTS:66,LATENCY_ACTION_CREATOR_CHANNEL_ANALYTICS:31,LATENCY_ACTION_CREATOR_ARTIST_PROFILE:85,LATENCY_ACTION_CREATOR_ARTIST_CONCERTS:84,
LATENCY_ACTION_CREATOR_ARTIST_ANALYTICS:83,LATENCY_ACTION_CREATOR_ANALYTICS_EXPLORE:140,LATENCY_ACTION_EXPERIMENTAL_WATCH_UI:181,LATENCY_ACTION_STORYBOARD_THUMBNAILS:118,LATENCY_ACTION_SEARCH_THUMBNAILS:59,LATENCY_ACTION_ON_DEVICE_MODEL_DOWNLOAD:54,LATENCY_ACTION_VOICE_ASSISTANT:47,LATENCY_ACTION_SEARCH_UI:35,LATENCY_ACTION_SUGGEST:30,LATENCY_ACTION_AUTO_SEARCH:126,LATENCY_ACTION_DOWNLOADS:98,LATENCY_ACTION_EXPLORE:75,LATENCY_ACTION_VIDEO_LIST:63,LATENCY_ACTION_HOME_RESUME:60,LATENCY_ACTION_SUBSCRIPTIONS_LIST:57,
LATENCY_ACTION_THUMBNAIL_LOAD:42,LATENCY_ACTION_FIRST_THUMBNAIL_LOAD:29,LATENCY_ACTION_SUBSCRIPTIONS_FEED:109,LATENCY_ACTION_SUBSCRIPTIONS:28,LATENCY_ACTION_TRENDING:27,LATENCY_ACTION_LIBRARY:21,LATENCY_ACTION_VIDEO_THUMBNAIL:8,LATENCY_ACTION_SHOW_MORE:7,LATENCY_ACTION_VIDEO_PREVIEW:6,LATENCY_ACTION_AD_TO_AD:22,LATENCY_ACTION_VIDEO_TO_AD:17,LATENCY_ACTION_AD_TO_VIDEO:16,LATENCY_ACTION_DIRECT_PLAYBACK:132,LATENCY_ACTION_PREBUFFER_VIDEO:144,LATENCY_ACTION_PREFETCH_VIDEO:143,LATENCY_ACTION_STARTUP:106,
LATENCY_ACTION_ONBOARDING:135,LATENCY_ACTION_LOGIN:97,LATENCY_ACTION_REEL_WATCH:41,LATENCY_ACTION_WATCH:3,LATENCY_ACTION_RESULTS:2,LATENCY_ACTION_CHANNELS:4,LATENCY_ACTION_HOME:1,LATENCY_ACTION_BROWSE:11,LATENCY_ACTION_USER_ACTION:189,LATENCY_ACTION_INFRASTRUCTURE:188,LATENCY_ACTION_PAGE_NAVIGATION:187,LATENCY_ACTION_UNKNOWN:0};V[V.LATENCY_ACTION_SHORTS_VIDEO_INGESTION_TRANSCODING]="LATENCY_ACTION_SHORTS_VIDEO_INGESTION_TRANSCODING";V[V.LATENCY_ACTION_KIDS_PROFILE_SWITCHER]="LATENCY_ACTION_KIDS_PROFILE_SWITCHER";
V[V.LATENCY_ACTION_OFFLINE_THUMBNAIL_TRANSFER]="LATENCY_ACTION_OFFLINE_THUMBNAIL_TRANSFER";V[V.LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR_ASYNC]="LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR_ASYNC";V[V.LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR]="LATENCY_ACTION_CREATOR_VIDEO_VIDEO_EDITOR";V[V.LATENCY_ACTION_SPINNER_DISPLAYED]="LATENCY_ACTION_SPINNER_DISPLAYED";V[V.LATENCY_ACTION_PLAYABILITY_CHECK]="LATENCY_ACTION_PLAYABILITY_CHECK";V[V.LATENCY_ACTION_PROCESS]="LATENCY_ACTION_PROCESS";
V[V.LATENCY_ACTION_APP_STARTUP]="LATENCY_ACTION_APP_STARTUP";V[V.LATENCY_ACTION_COMMERCE_TRANSACTION]="LATENCY_ACTION_COMMERCE_TRANSACTION";V[V.LATENCY_ACTION_LOG_PAYMENT_SERVER_ANALYTICS_RPC]="LATENCY_ACTION_LOG_PAYMENT_SERVER_ANALYTICS_RPC";V[V.LATENCY_ACTION_GET_PAYMENT_INSTRUMENTS_PARAMS_RPC]="LATENCY_ACTION_GET_PAYMENT_INSTRUMENTS_PARAMS_RPC";V[V.LATENCY_ACTION_GET_FIX_INSTRUMENT_PARAMS_RPC]="LATENCY_ACTION_GET_FIX_INSTRUMENT_PARAMS_RPC";V[V.LATENCY_ACTION_RESUME_SUBSCRIPTION_RPC]="LATENCY_ACTION_RESUME_SUBSCRIPTION_RPC";
V[V.LATENCY_ACTION_PAUSE_SUBSCRIPTION_RPC]="LATENCY_ACTION_PAUSE_SUBSCRIPTION_RPC";V[V.LATENCY_ACTION_GET_OFFLINE_UPSELL_RPC]="LATENCY_ACTION_GET_OFFLINE_UPSELL_RPC";V[V.LATENCY_ACTION_GET_OFFERS_RPC]="LATENCY_ACTION_GET_OFFERS_RPC";V[V.LATENCY_ACTION_GET_CANCELLATION_YT_FLOW_RPC]="LATENCY_ACTION_GET_CANCELLATION_YT_FLOW_RPC";V[V.LATENCY_ACTION_GET_CANCELLATION_FLOW_RPC]="LATENCY_ACTION_GET_CANCELLATION_FLOW_RPC";V[V.LATENCY_ACTION_UPDATE_CROSS_DEVICE_OFFLINE_STATE_RPC]="LATENCY_ACTION_UPDATE_CROSS_DEVICE_OFFLINE_STATE_RPC";
V[V.LATENCY_ACTION_GET_OFFER_DETAILS_RPC]="LATENCY_ACTION_GET_OFFER_DETAILS_RPC";V[V.LATENCY_ACTION_CANCEL_RECURRENCE_TRANSACTION_RPC]="LATENCY_ACTION_CANCEL_RECURRENCE_TRANSACTION_RPC";V[V.LATENCY_ACTION_GET_TIP_MODULE_RPC]="LATENCY_ACTION_GET_TIP_MODULE_RPC";V[V.LATENCY_ACTION_HANDLE_TRANSACTION_RPC]="LATENCY_ACTION_HANDLE_TRANSACTION_RPC";V[V.LATENCY_ACTION_COMPLETE_TRANSACTION_RPC]="LATENCY_ACTION_COMPLETE_TRANSACTION_RPC";V[V.LATENCY_ACTION_GET_CART_RPC]="LATENCY_ACTION_GET_CART_RPC";
V[V.LATENCY_ACTION_THUMBNAIL_FETCH]="LATENCY_ACTION_THUMBNAIL_FETCH";V[V.LATENCY_ACTION_ABANDONED_DIRECT_PLAYBACK]="LATENCY_ACTION_ABANDONED_DIRECT_PLAYBACK";V[V.LATENCY_ACTION_SHARE_VIDEO]="LATENCY_ACTION_SHARE_VIDEO";V[V.LATENCY_ACTION_AD_TO_VIDEO_INT]="LATENCY_ACTION_AD_TO_VIDEO_INT";V[V.LATENCY_ACTION_ABANDONED_BROWSE]="LATENCY_ACTION_ABANDONED_BROWSE";V[V.LATENCY_ACTION_PLAYER_ROTATION]="LATENCY_ACTION_PLAYER_ROTATION";V[V.LATENCY_ACTION_GENERIC_WEB_VIEW]="LATENCY_ACTION_GENERIC_WEB_VIEW";
V[V.LATENCY_ACTION_SHOPPING_IN_APP]="LATENCY_ACTION_SHOPPING_IN_APP";V[V.LATENCY_ACTION_PLAYER_ATTESTATION]="LATENCY_ACTION_PLAYER_ATTESTATION";V[V.LATENCY_ACTION_PLAYER_SEEK]="LATENCY_ACTION_PLAYER_SEEK";V[V.LATENCY_ACTION_SUPER_STICKER_BUY_FLOW]="LATENCY_ACTION_SUPER_STICKER_BUY_FLOW";V[V.LATENCY_ACTION_DOWNLOADS_DATA_ACCESS]="LATENCY_ACTION_DOWNLOADS_DATA_ACCESS";V[V.LATENCY_ACTION_BLOCKS_PERFORMANCE]="LATENCY_ACTION_BLOCKS_PERFORMANCE";V[V.LATENCY_ACTION_ASSISTANT_QUERY]="LATENCY_ACTION_ASSISTANT_QUERY";
V[V.LATENCY_ACTION_ASSISTANT_SETTINGS]="LATENCY_ACTION_ASSISTANT_SETTINGS";V[V.LATENCY_ACTION_ENTITY_KEY_DESERIALIZATION_PERF]="LATENCY_ACTION_ENTITY_KEY_DESERIALIZATION_PERF";V[V.LATENCY_ACTION_ENTITY_KEY_SERIALIZATION_PERF]="LATENCY_ACTION_ENTITY_KEY_SERIALIZATION_PERF";V[V.LATENCY_ACTION_PROOF_OF_ORIGIN_TOKEN_CREATE]="LATENCY_ACTION_PROOF_OF_ORIGIN_TOKEN_CREATE";V[V.LATENCY_ACTION_EMBEDS_SDK_INITIALIZATION]="LATENCY_ACTION_EMBEDS_SDK_INITIALIZATION";
V[V.LATENCY_ACTION_NETWORKLESS_PERFORMANCE]="LATENCY_ACTION_NETWORKLESS_PERFORMANCE";V[V.LATENCY_ACTION_DOWNLOADS_EXPANSION]="LATENCY_ACTION_DOWNLOADS_EXPANSION";V[V.LATENCY_ACTION_ENTITY_TRANSFORM]="LATENCY_ACTION_ENTITY_TRANSFORM";V[V.LATENCY_ACTION_DOWNLOADS_COMPATIBILITY_LAYER]="LATENCY_ACTION_DOWNLOADS_COMPATIBILITY_LAYER";V[V.LATENCY_ACTION_EMBEDS_SET_VIDEO]="LATENCY_ACTION_EMBEDS_SET_VIDEO";V[V.LATENCY_ACTION_SETTINGS]="LATENCY_ACTION_SETTINGS";V[V.LATENCY_ACTION_ABANDONED_STARTUP]="LATENCY_ACTION_ABANDONED_STARTUP";
V[V.LATENCY_ACTION_MEDIA_BROWSER_ALARM_PLAY]="LATENCY_ACTION_MEDIA_BROWSER_ALARM_PLAY";V[V.LATENCY_ACTION_MEDIA_BROWSER_SEARCH]="LATENCY_ACTION_MEDIA_BROWSER_SEARCH";V[V.LATENCY_ACTION_MEDIA_BROWSER_LOAD_TREE]="LATENCY_ACTION_MEDIA_BROWSER_LOAD_TREE";V[V.LATENCY_ACTION_WHO_IS_WATCHING]="LATENCY_ACTION_WHO_IS_WATCHING";V[V.LATENCY_ACTION_CAST_LOAD_BY_ENTITY_TO_WATCH]="LATENCY_ACTION_CAST_LOAD_BY_ENTITY_TO_WATCH";V[V.LATENCY_ACTION_LITE_SWITCH_ACCOUNT]="LATENCY_ACTION_LITE_SWITCH_ACCOUNT";
V[V.LATENCY_ACTION_ELEMENTS_PERFORMANCE]="LATENCY_ACTION_ELEMENTS_PERFORMANCE";V[V.LATENCY_ACTION_LOCATION_SIGNAL_COLLECTION]="LATENCY_ACTION_LOCATION_SIGNAL_COLLECTION";V[V.LATENCY_ACTION_MODIFY_CHANNEL_NOTIFICATION]="LATENCY_ACTION_MODIFY_CHANNEL_NOTIFICATION";V[V.LATENCY_ACTION_OFFLINE_STORE_START]="LATENCY_ACTION_OFFLINE_STORE_START";V[V.LATENCY_ACTION_REEL_EDITOR]="LATENCY_ACTION_REEL_EDITOR";V[V.LATENCY_ACTION_CHANNEL_SUBSCRIBE]="LATENCY_ACTION_CHANNEL_SUBSCRIBE";
V[V.LATENCY_ACTION_CHANNEL_PREVIEW]="LATENCY_ACTION_CHANNEL_PREVIEW";V[V.LATENCY_ACTION_PREFETCH]="LATENCY_ACTION_PREFETCH";V[V.LATENCY_ACTION_ABANDONED_WATCH]="LATENCY_ACTION_ABANDONED_WATCH";V[V.LATENCY_ACTION_LOAD_COMMENT_REPLIES]="LATENCY_ACTION_LOAD_COMMENT_REPLIES";V[V.LATENCY_ACTION_LOAD_COMMENTS]="LATENCY_ACTION_LOAD_COMMENTS";V[V.LATENCY_ACTION_EDIT_COMMENT]="LATENCY_ACTION_EDIT_COMMENT";V[V.LATENCY_ACTION_NEW_COMMENT]="LATENCY_ACTION_NEW_COMMENT";
V[V.LATENCY_ACTION_OFFLINE_SHARING_RECEIVER_PAIRING]="LATENCY_ACTION_OFFLINE_SHARING_RECEIVER_PAIRING";V[V.LATENCY_ACTION_EMBED]="LATENCY_ACTION_EMBED";V[V.LATENCY_ACTION_MDX_LAUNCH]="LATENCY_ACTION_MDX_LAUNCH";V[V.LATENCY_ACTION_RESOLVE_URL]="LATENCY_ACTION_RESOLVE_URL";V[V.LATENCY_ACTION_CAST_SPLASH]="LATENCY_ACTION_CAST_SPLASH";V[V.LATENCY_ACTION_MDX_STREAM_TRANSFER]="LATENCY_ACTION_MDX_STREAM_TRANSFER";V[V.LATENCY_ACTION_MDX_CAST]="LATENCY_ACTION_MDX_CAST";V[V.LATENCY_ACTION_MDX_COMMAND]="LATENCY_ACTION_MDX_COMMAND";
V[V.LATENCY_ACTION_REEL_SELECT_SEGMENT]="LATENCY_ACTION_REEL_SELECT_SEGMENT";V[V.LATENCY_ACTION_ACCELERATED_EFFECTS]="LATENCY_ACTION_ACCELERATED_EFFECTS";V[V.LATENCY_ACTION_EDIT_AUDIO_GEN]="LATENCY_ACTION_EDIT_AUDIO_GEN";V[V.LATENCY_ACTION_UPLOAD_AUDIO_MIXER]="LATENCY_ACTION_UPLOAD_AUDIO_MIXER";V[V.LATENCY_ACTION_SHORTS_CLIENT_SIDE_RENDERING]="LATENCY_ACTION_SHORTS_CLIENT_SIDE_RENDERING";V[V.LATENCY_ACTION_SHORTS_SEG_IMP_TRANSCODING]="LATENCY_ACTION_SHORTS_SEG_IMP_TRANSCODING";
V[V.LATENCY_ACTION_SHORTS_AUDIO_PICKER_PLAYBACK]="LATENCY_ACTION_SHORTS_AUDIO_PICKER_PLAYBACK";V[V.LATENCY_ACTION_SHORTS_WAVEFORM_DOWNLOAD]="LATENCY_ACTION_SHORTS_WAVEFORM_DOWNLOAD";V[V.LATENCY_ACTION_SHORTS_VIDEO_INGESTION]="LATENCY_ACTION_SHORTS_VIDEO_INGESTION";V[V.LATENCY_ACTION_SHORTS_GALLERY]="LATENCY_ACTION_SHORTS_GALLERY";V[V.LATENCY_ACTION_SHORTS_TRIM]="LATENCY_ACTION_SHORTS_TRIM";V[V.LATENCY_ACTION_SHORTS_EDIT]="LATENCY_ACTION_SHORTS_EDIT";V[V.LATENCY_ACTION_SHORTS_CAMERA]="LATENCY_ACTION_SHORTS_CAMERA";
V[V.LATENCY_ACTION_PARENT_TOOLS_DASHBOARD]="LATENCY_ACTION_PARENT_TOOLS_DASHBOARD";V[V.LATENCY_ACTION_PARENT_TOOLS_COLLECTION]="LATENCY_ACTION_PARENT_TOOLS_COLLECTION";V[V.LATENCY_ACTION_MUSIC_LOAD_RECOMMENDED_MEDIA_ITEMS]="LATENCY_ACTION_MUSIC_LOAD_RECOMMENDED_MEDIA_ITEMS";V[V.LATENCY_ACTION_MUSIC_LOAD_MEDIA_ITEMS]="LATENCY_ACTION_MUSIC_LOAD_MEDIA_ITEMS";V[V.LATENCY_ACTION_MUSIC_ALBUM_DETAIL]="LATENCY_ACTION_MUSIC_ALBUM_DETAIL";V[V.LATENCY_ACTION_MUSIC_PLAYLIST_DETAIL]="LATENCY_ACTION_MUSIC_PLAYLIST_DETAIL";
V[V.LATENCY_ACTION_STORE]="LATENCY_ACTION_STORE";V[V.LATENCY_ACTION_CHIPS]="LATENCY_ACTION_CHIPS";V[V.LATENCY_ACTION_SEARCH_ZERO_STATE]="LATENCY_ACTION_SEARCH_ZERO_STATE";V[V.LATENCY_ACTION_LIVE_PAGINATION]="LATENCY_ACTION_LIVE_PAGINATION";V[V.LATENCY_ACTION_LIVE]="LATENCY_ACTION_LIVE";V[V.LATENCY_ACTION_PREBUFFER]="LATENCY_ACTION_PREBUFFER";V[V.LATENCY_ACTION_TENX]="LATENCY_ACTION_TENX";V[V.LATENCY_ACTION_KIDS_PROFILE_SETTINGS]="LATENCY_ACTION_KIDS_PROFILE_SETTINGS";
V[V.LATENCY_ACTION_KIDS_WATCH_IT_AGAIN]="LATENCY_ACTION_KIDS_WATCH_IT_AGAIN";V[V.LATENCY_ACTION_KIDS_SECRET_CODE]="LATENCY_ACTION_KIDS_SECRET_CODE";V[V.LATENCY_ACTION_KIDS_PARENT_PROFILE_SETTINGS]="LATENCY_ACTION_KIDS_PARENT_PROFILE_SETTINGS";V[V.LATENCY_ACTION_KIDS_ONBOARDING]="LATENCY_ACTION_KIDS_ONBOARDING";V[V.LATENCY_ACTION_KIDS_VOICE_SEARCH]="LATENCY_ACTION_KIDS_VOICE_SEARCH";V[V.LATENCY_ACTION_KIDS_CURATED_COLLECTION]="LATENCY_ACTION_KIDS_CURATED_COLLECTION";
V[V.LATENCY_ACTION_KIDS_LIBRARY]="LATENCY_ACTION_KIDS_LIBRARY";V[V.LATENCY_ACTION_CREATOR_PROMOTION_LIST]="LATENCY_ACTION_CREATOR_PROMOTION_LIST";V[V.LATENCY_ACTION_CREATOR_PROMOTION_EDIT]="LATENCY_ACTION_CREATOR_PROMOTION_EDIT";V[V.LATENCY_ACTION_CREATOR_VIDEO_TRANSLATIONS]="LATENCY_ACTION_CREATOR_VIDEO_TRANSLATIONS";V[V.LATENCY_ACTION_CREATOR_VIDEO_MONETIZATION]="LATENCY_ACTION_CREATOR_VIDEO_MONETIZATION";V[V.LATENCY_ACTION_CREATOR_VIDEO_LIVE_STREAMING]="LATENCY_ACTION_CREATOR_VIDEO_LIVE_STREAMING";
V[V.LATENCY_ACTION_CREATOR_VIDEO_LIVE_SETTINGS]="LATENCY_ACTION_CREATOR_VIDEO_LIVE_SETTINGS";V[V.LATENCY_ACTION_CREATOR_VIDEO_EDITOR_ASYNC]="LATENCY_ACTION_CREATOR_VIDEO_EDITOR_ASYNC";V[V.LATENCY_ACTION_CREATOR_VIDEO_EDITOR]="LATENCY_ACTION_CREATOR_VIDEO_EDITOR";V[V.LATENCY_ACTION_CREATOR_VIDEO_EDIT]="LATENCY_ACTION_CREATOR_VIDEO_EDIT";V[V.LATENCY_ACTION_CREATOR_VIDEO_COMMENTS]="LATENCY_ACTION_CREATOR_VIDEO_COMMENTS";V[V.LATENCY_ACTION_CREATOR_VIDEO_ANALYTICS]="LATENCY_ACTION_CREATOR_VIDEO_ANALYTICS";
V[V.LATENCY_ACTION_CREATOR_SONG_ANALYTICS]="LATENCY_ACTION_CREATOR_SONG_ANALYTICS";V[V.LATENCY_ACTION_CREATOR_POST_LIST]="LATENCY_ACTION_CREATOR_POST_LIST";V[V.LATENCY_ACTION_CREATOR_POST_EDIT]="LATENCY_ACTION_CREATOR_POST_EDIT";V[V.LATENCY_ACTION_CREATOR_POST_COMMENTS]="LATENCY_ACTION_CREATOR_POST_COMMENTS";V[V.LATENCY_ACTION_CREATOR_LIVE_STREAMING]="LATENCY_ACTION_CREATOR_LIVE_STREAMING";V[V.LATENCY_ACTION_CREATOR_DIALOG_VIDEO_COPYRIGHT]="LATENCY_ACTION_CREATOR_DIALOG_VIDEO_COPYRIGHT";
V[V.LATENCY_ACTION_CREATOR_DIALOG_UPLOADS]="LATENCY_ACTION_CREATOR_DIALOG_UPLOADS";V[V.LATENCY_ACTION_CREATOR_DIALOG_COPYRIGHT_STRIKES]="LATENCY_ACTION_CREATOR_DIALOG_COPYRIGHT_STRIKES";V[V.LATENCY_ACTION_CREATOR_CHANNEL_VIDEOS]="LATENCY_ACTION_CREATOR_CHANNEL_VIDEOS";V[V.LATENCY_ACTION_CREATOR_CHANNEL_TRANSLATIONS]="LATENCY_ACTION_CREATOR_CHANNEL_TRANSLATIONS";V[V.LATENCY_ACTION_CREATOR_CHANNEL_PLAYLISTS]="LATENCY_ACTION_CREATOR_CHANNEL_PLAYLISTS";
V[V.LATENCY_ACTION_CREATOR_CHANNEL_MUSIC_STOREFRONT]="LATENCY_ACTION_CREATOR_CHANNEL_MUSIC_STOREFRONT";V[V.LATENCY_ACTION_CREATOR_CHANNEL_MUSIC]="LATENCY_ACTION_CREATOR_CHANNEL_MUSIC";V[V.LATENCY_ACTION_CREATOR_CHANNEL_MONETIZATION]="LATENCY_ACTION_CREATOR_CHANNEL_MONETIZATION";V[V.LATENCY_ACTION_CREATOR_CHANNEL_EDITING]="LATENCY_ACTION_CREATOR_CHANNEL_EDITING";V[V.LATENCY_ACTION_CREATOR_CHANNEL_DASHBOARD]="LATENCY_ACTION_CREATOR_CHANNEL_DASHBOARD";V[V.LATENCY_ACTION_CREATOR_CHANNEL_COPYRIGHT]="LATENCY_ACTION_CREATOR_CHANNEL_COPYRIGHT";
V[V.LATENCY_ACTION_CREATOR_CHANNEL_COMMENTS]="LATENCY_ACTION_CREATOR_CHANNEL_COMMENTS";V[V.LATENCY_ACTION_CREATOR_CHANNEL_ANALYTICS]="LATENCY_ACTION_CREATOR_CHANNEL_ANALYTICS";V[V.LATENCY_ACTION_CREATOR_ARTIST_PROFILE]="LATENCY_ACTION_CREATOR_ARTIST_PROFILE";V[V.LATENCY_ACTION_CREATOR_ARTIST_CONCERTS]="LATENCY_ACTION_CREATOR_ARTIST_CONCERTS";V[V.LATENCY_ACTION_CREATOR_ARTIST_ANALYTICS]="LATENCY_ACTION_CREATOR_ARTIST_ANALYTICS";V[V.LATENCY_ACTION_CREATOR_ANALYTICS_EXPLORE]="LATENCY_ACTION_CREATOR_ANALYTICS_EXPLORE";
V[V.LATENCY_ACTION_EXPERIMENTAL_WATCH_UI]="LATENCY_ACTION_EXPERIMENTAL_WATCH_UI";V[V.LATENCY_ACTION_STORYBOARD_THUMBNAILS]="LATENCY_ACTION_STORYBOARD_THUMBNAILS";V[V.LATENCY_ACTION_SEARCH_THUMBNAILS]="LATENCY_ACTION_SEARCH_THUMBNAILS";V[V.LATENCY_ACTION_ON_DEVICE_MODEL_DOWNLOAD]="LATENCY_ACTION_ON_DEVICE_MODEL_DOWNLOAD";V[V.LATENCY_ACTION_VOICE_ASSISTANT]="LATENCY_ACTION_VOICE_ASSISTANT";V[V.LATENCY_ACTION_SEARCH_UI]="LATENCY_ACTION_SEARCH_UI";V[V.LATENCY_ACTION_SUGGEST]="LATENCY_ACTION_SUGGEST";
V[V.LATENCY_ACTION_AUTO_SEARCH]="LATENCY_ACTION_AUTO_SEARCH";V[V.LATENCY_ACTION_DOWNLOADS]="LATENCY_ACTION_DOWNLOADS";V[V.LATENCY_ACTION_EXPLORE]="LATENCY_ACTION_EXPLORE";V[V.LATENCY_ACTION_VIDEO_LIST]="LATENCY_ACTION_VIDEO_LIST";V[V.LATENCY_ACTION_HOME_RESUME]="LATENCY_ACTION_HOME_RESUME";V[V.LATENCY_ACTION_SUBSCRIPTIONS_LIST]="LATENCY_ACTION_SUBSCRIPTIONS_LIST";V[V.LATENCY_ACTION_THUMBNAIL_LOAD]="LATENCY_ACTION_THUMBNAIL_LOAD";V[V.LATENCY_ACTION_FIRST_THUMBNAIL_LOAD]="LATENCY_ACTION_FIRST_THUMBNAIL_LOAD";
V[V.LATENCY_ACTION_SUBSCRIPTIONS_FEED]="LATENCY_ACTION_SUBSCRIPTIONS_FEED";V[V.LATENCY_ACTION_SUBSCRIPTIONS]="LATENCY_ACTION_SUBSCRIPTIONS";V[V.LATENCY_ACTION_TRENDING]="LATENCY_ACTION_TRENDING";V[V.LATENCY_ACTION_LIBRARY]="LATENCY_ACTION_LIBRARY";V[V.LATENCY_ACTION_VIDEO_THUMBNAIL]="LATENCY_ACTION_VIDEO_THUMBNAIL";V[V.LATENCY_ACTION_SHOW_MORE]="LATENCY_ACTION_SHOW_MORE";V[V.LATENCY_ACTION_VIDEO_PREVIEW]="LATENCY_ACTION_VIDEO_PREVIEW";V[V.LATENCY_ACTION_AD_TO_AD]="LATENCY_ACTION_AD_TO_AD";
V[V.LATENCY_ACTION_VIDEO_TO_AD]="LATENCY_ACTION_VIDEO_TO_AD";V[V.LATENCY_ACTION_AD_TO_VIDEO]="LATENCY_ACTION_AD_TO_VIDEO";V[V.LATENCY_ACTION_DIRECT_PLAYBACK]="LATENCY_ACTION_DIRECT_PLAYBACK";V[V.LATENCY_ACTION_PREBUFFER_VIDEO]="LATENCY_ACTION_PREBUFFER_VIDEO";V[V.LATENCY_ACTION_PREFETCH_VIDEO]="LATENCY_ACTION_PREFETCH_VIDEO";V[V.LATENCY_ACTION_STARTUP]="LATENCY_ACTION_STARTUP";V[V.LATENCY_ACTION_ONBOARDING]="LATENCY_ACTION_ONBOARDING";V[V.LATENCY_ACTION_LOGIN]="LATENCY_ACTION_LOGIN";
V[V.LATENCY_ACTION_REEL_WATCH]="LATENCY_ACTION_REEL_WATCH";V[V.LATENCY_ACTION_WATCH]="LATENCY_ACTION_WATCH";V[V.LATENCY_ACTION_RESULTS]="LATENCY_ACTION_RESULTS";V[V.LATENCY_ACTION_CHANNELS]="LATENCY_ACTION_CHANNELS";V[V.LATENCY_ACTION_HOME]="LATENCY_ACTION_HOME";V[V.LATENCY_ACTION_BROWSE]="LATENCY_ACTION_BROWSE";V[V.LATENCY_ACTION_USER_ACTION]="LATENCY_ACTION_USER_ACTION";V[V.LATENCY_ACTION_INFRASTRUCTURE]="LATENCY_ACTION_INFRASTRUCTURE";V[V.LATENCY_ACTION_PAGE_NAVIGATION]="LATENCY_ACTION_PAGE_NAVIGATION";
V[V.LATENCY_ACTION_UNKNOWN]="LATENCY_ACTION_UNKNOWN";var Wt={LATENCY_NETWORK_MOBILE:2,LATENCY_NETWORK_WIFI:1,LATENCY_NETWORK_UNKNOWN:0};Wt[Wt.LATENCY_NETWORK_MOBILE]="LATENCY_NETWORK_MOBILE";Wt[Wt.LATENCY_NETWORK_WIFI]="LATENCY_NETWORK_WIFI";Wt[Wt.LATENCY_NETWORK_UNKNOWN]="LATENCY_NETWORK_UNKNOWN";
var X={CONN_INVALID:31,CONN_CELLULAR_5G_NSA:12,CONN_CELLULAR_5G_SA:11,CONN_WIFI_METERED:10,CONN_CELLULAR_5G:9,CONN_DISCO:8,CONN_CELLULAR_UNKNOWN:7,CONN_CELLULAR_4G:6,CONN_CELLULAR_3G:5,CONN_CELLULAR_2G:4,CONN_WIFI:3,CONN_NONE:2,CONN_UNKNOWN:1,CONN_DEFAULT:0};X[X.CONN_INVALID]="CONN_INVALID";X[X.CONN_CELLULAR_5G_NSA]="CONN_CELLULAR_5G_NSA";X[X.CONN_CELLULAR_5G_SA]="CONN_CELLULAR_5G_SA";X[X.CONN_WIFI_METERED]="CONN_WIFI_METERED";X[X.CONN_CELLULAR_5G]="CONN_CELLULAR_5G";X[X.CONN_DISCO]="CONN_DISCO";
X[X.CONN_CELLULAR_UNKNOWN]="CONN_CELLULAR_UNKNOWN";X[X.CONN_CELLULAR_4G]="CONN_CELLULAR_4G";X[X.CONN_CELLULAR_3G]="CONN_CELLULAR_3G";X[X.CONN_CELLULAR_2G]="CONN_CELLULAR_2G";X[X.CONN_WIFI]="CONN_WIFI";X[X.CONN_NONE]="CONN_NONE";X[X.CONN_UNKNOWN]="CONN_UNKNOWN";X[X.CONN_DEFAULT]="CONN_DEFAULT";
var Y={DETAILED_NETWORK_TYPE_NR_NSA:126,DETAILED_NETWORK_TYPE_NR_SA:125,DETAILED_NETWORK_TYPE_INTERNAL_WIFI_IMPAIRED:124,DETAILED_NETWORK_TYPE_APP_WIFI_HOTSPOT:123,DETAILED_NETWORK_TYPE_DISCONNECTED:122,DETAILED_NETWORK_TYPE_NON_MOBILE_UNKNOWN:121,DETAILED_NETWORK_TYPE_MOBILE_UNKNOWN:120,DETAILED_NETWORK_TYPE_WIMAX:119,DETAILED_NETWORK_TYPE_ETHERNET:118,DETAILED_NETWORK_TYPE_BLUETOOTH:117,DETAILED_NETWORK_TYPE_WIFI:116,DETAILED_NETWORK_TYPE_LTE:115,DETAILED_NETWORK_TYPE_HSPAP:114,DETAILED_NETWORK_TYPE_EHRPD:113,
DETAILED_NETWORK_TYPE_EVDO_B:112,DETAILED_NETWORK_TYPE_UMTS:111,DETAILED_NETWORK_TYPE_IDEN:110,DETAILED_NETWORK_TYPE_HSUPA:109,DETAILED_NETWORK_TYPE_HSPA:108,DETAILED_NETWORK_TYPE_HSDPA:107,DETAILED_NETWORK_TYPE_EVDO_A:106,DETAILED_NETWORK_TYPE_EVDO_0:105,DETAILED_NETWORK_TYPE_CDMA:104,DETAILED_NETWORK_TYPE_1_X_RTT:103,DETAILED_NETWORK_TYPE_GPRS:102,DETAILED_NETWORK_TYPE_EDGE:101,DETAILED_NETWORK_TYPE_UNKNOWN:0};Y[Y.DETAILED_NETWORK_TYPE_NR_NSA]="DETAILED_NETWORK_TYPE_NR_NSA";
Y[Y.DETAILED_NETWORK_TYPE_NR_SA]="DETAILED_NETWORK_TYPE_NR_SA";Y[Y.DETAILED_NETWORK_TYPE_INTERNAL_WIFI_IMPAIRED]="DETAILED_NETWORK_TYPE_INTERNAL_WIFI_IMPAIRED";Y[Y.DETAILED_NETWORK_TYPE_APP_WIFI_HOTSPOT]="DETAILED_NETWORK_TYPE_APP_WIFI_HOTSPOT";Y[Y.DETAILED_NETWORK_TYPE_DISCONNECTED]="DETAILED_NETWORK_TYPE_DISCONNECTED";Y[Y.DETAILED_NETWORK_TYPE_NON_MOBILE_UNKNOWN]="DETAILED_NETWORK_TYPE_NON_MOBILE_UNKNOWN";Y[Y.DETAILED_NETWORK_TYPE_MOBILE_UNKNOWN]="DETAILED_NETWORK_TYPE_MOBILE_UNKNOWN";
Y[Y.DETAILED_NETWORK_TYPE_WIMAX]="DETAILED_NETWORK_TYPE_WIMAX";Y[Y.DETAILED_NETWORK_TYPE_ETHERNET]="DETAILED_NETWORK_TYPE_ETHERNET";Y[Y.DETAILED_NETWORK_TYPE_BLUETOOTH]="DETAILED_NETWORK_TYPE_BLUETOOTH";Y[Y.DETAILED_NETWORK_TYPE_WIFI]="DETAILED_NETWORK_TYPE_WIFI";Y[Y.DETAILED_NETWORK_TYPE_LTE]="DETAILED_NETWORK_TYPE_LTE";Y[Y.DETAILED_NETWORK_TYPE_HSPAP]="DETAILED_NETWORK_TYPE_HSPAP";Y[Y.DETAILED_NETWORK_TYPE_EHRPD]="DETAILED_NETWORK_TYPE_EHRPD";Y[Y.DETAILED_NETWORK_TYPE_EVDO_B]="DETAILED_NETWORK_TYPE_EVDO_B";
Y[Y.DETAILED_NETWORK_TYPE_UMTS]="DETAILED_NETWORK_TYPE_UMTS";Y[Y.DETAILED_NETWORK_TYPE_IDEN]="DETAILED_NETWORK_TYPE_IDEN";Y[Y.DETAILED_NETWORK_TYPE_HSUPA]="DETAILED_NETWORK_TYPE_HSUPA";Y[Y.DETAILED_NETWORK_TYPE_HSPA]="DETAILED_NETWORK_TYPE_HSPA";Y[Y.DETAILED_NETWORK_TYPE_HSDPA]="DETAILED_NETWORK_TYPE_HSDPA";Y[Y.DETAILED_NETWORK_TYPE_EVDO_A]="DETAILED_NETWORK_TYPE_EVDO_A";Y[Y.DETAILED_NETWORK_TYPE_EVDO_0]="DETAILED_NETWORK_TYPE_EVDO_0";Y[Y.DETAILED_NETWORK_TYPE_CDMA]="DETAILED_NETWORK_TYPE_CDMA";
Y[Y.DETAILED_NETWORK_TYPE_1_X_RTT]="DETAILED_NETWORK_TYPE_1_X_RTT";Y[Y.DETAILED_NETWORK_TYPE_GPRS]="DETAILED_NETWORK_TYPE_GPRS";Y[Y.DETAILED_NETWORK_TYPE_EDGE]="DETAILED_NETWORK_TYPE_EDGE";Y[Y.DETAILED_NETWORK_TYPE_UNKNOWN]="DETAILED_NETWORK_TYPE_UNKNOWN";var Xt={LATENCY_PLAYER_RTSP:7,LATENCY_PLAYER_HTML5_INLINE:6,LATENCY_PLAYER_HTML5_FULLSCREEN:5,LATENCY_PLAYER_HTML5:4,LATENCY_PLAYER_FRAMEWORK:3,LATENCY_PLAYER_FLASH:2,LATENCY_PLAYER_EXO:1,LATENCY_PLAYER_UNKNOWN:0};Xt[Xt.LATENCY_PLAYER_RTSP]="LATENCY_PLAYER_RTSP";
Xt[Xt.LATENCY_PLAYER_HTML5_INLINE]="LATENCY_PLAYER_HTML5_INLINE";Xt[Xt.LATENCY_PLAYER_HTML5_FULLSCREEN]="LATENCY_PLAYER_HTML5_FULLSCREEN";Xt[Xt.LATENCY_PLAYER_HTML5]="LATENCY_PLAYER_HTML5";Xt[Xt.LATENCY_PLAYER_FRAMEWORK]="LATENCY_PLAYER_FRAMEWORK";Xt[Xt.LATENCY_PLAYER_FLASH]="LATENCY_PLAYER_FLASH";Xt[Xt.LATENCY_PLAYER_EXO]="LATENCY_PLAYER_EXO";Xt[Xt.LATENCY_PLAYER_UNKNOWN]="LATENCY_PLAYER_UNKNOWN";
var Yt={LATENCY_AD_BREAK_TYPE_POSTROLL:3,LATENCY_AD_BREAK_TYPE_MIDROLL:2,LATENCY_AD_BREAK_TYPE_PREROLL:1,LATENCY_AD_BREAK_TYPE_UNKNOWN:0};Yt[Yt.LATENCY_AD_BREAK_TYPE_POSTROLL]="LATENCY_AD_BREAK_TYPE_POSTROLL";Yt[Yt.LATENCY_AD_BREAK_TYPE_MIDROLL]="LATENCY_AD_BREAK_TYPE_MIDROLL";Yt[Yt.LATENCY_AD_BREAK_TYPE_PREROLL]="LATENCY_AD_BREAK_TYPE_PREROLL";Yt[Yt.LATENCY_AD_BREAK_TYPE_UNKNOWN]="LATENCY_AD_BREAK_TYPE_UNKNOWN";var Zt={LATENCY_ACTION_ERROR_STARTUP_TIMEOUT:1,LATENCY_ACTION_ERROR_UNSPECIFIED:0};
Zt[Zt.LATENCY_ACTION_ERROR_STARTUP_TIMEOUT]="LATENCY_ACTION_ERROR_STARTUP_TIMEOUT";Zt[Zt.LATENCY_ACTION_ERROR_UNSPECIFIED]="LATENCY_ACTION_ERROR_UNSPECIFIED";var $t={LIVE_STREAM_MODE_WINDOW:5,LIVE_STREAM_MODE_POST:4,LIVE_STREAM_MODE_LP:3,LIVE_STREAM_MODE_LIVE:2,LIVE_STREAM_MODE_DVR:1,LIVE_STREAM_MODE_UNKNOWN:0};$t[$t.LIVE_STREAM_MODE_WINDOW]="LIVE_STREAM_MODE_WINDOW";$t[$t.LIVE_STREAM_MODE_POST]="LIVE_STREAM_MODE_POST";$t[$t.LIVE_STREAM_MODE_LP]="LIVE_STREAM_MODE_LP";
$t[$t.LIVE_STREAM_MODE_LIVE]="LIVE_STREAM_MODE_LIVE";$t[$t.LIVE_STREAM_MODE_DVR]="LIVE_STREAM_MODE_DVR";$t[$t.LIVE_STREAM_MODE_UNKNOWN]="LIVE_STREAM_MODE_UNKNOWN";var au={VIDEO_STREAM_TYPE_VOD:3,VIDEO_STREAM_TYPE_DVR:2,VIDEO_STREAM_TYPE_LIVE:1,VIDEO_STREAM_TYPE_UNSPECIFIED:0};au[au.VIDEO_STREAM_TYPE_VOD]="VIDEO_STREAM_TYPE_VOD";au[au.VIDEO_STREAM_TYPE_DVR]="VIDEO_STREAM_TYPE_DVR";au[au.VIDEO_STREAM_TYPE_LIVE]="VIDEO_STREAM_TYPE_LIVE";au[au.VIDEO_STREAM_TYPE_UNSPECIFIED]="VIDEO_STREAM_TYPE_UNSPECIFIED";
var bu={YT_IDB_TRANSACTION_TYPE_READ:2,YT_IDB_TRANSACTION_TYPE_WRITE:1,YT_IDB_TRANSACTION_TYPE_UNKNOWN:0};bu[bu.YT_IDB_TRANSACTION_TYPE_READ]="YT_IDB_TRANSACTION_TYPE_READ";bu[bu.YT_IDB_TRANSACTION_TYPE_WRITE]="YT_IDB_TRANSACTION_TYPE_WRITE";bu[bu.YT_IDB_TRANSACTION_TYPE_UNKNOWN]="YT_IDB_TRANSACTION_TYPE_UNKNOWN";var cu={PLAYER_ROTATION_TYPE_PORTRAIT_TO_FULLSCREEN:2,PLAYER_ROTATION_TYPE_FULLSCREEN_TO_PORTRAIT:1,PLAYER_ROTATION_TYPE_UNKNOWN:0};cu[cu.PLAYER_ROTATION_TYPE_PORTRAIT_TO_FULLSCREEN]="PLAYER_ROTATION_TYPE_PORTRAIT_TO_FULLSCREEN";
cu[cu.PLAYER_ROTATION_TYPE_FULLSCREEN_TO_PORTRAIT]="PLAYER_ROTATION_TYPE_FULLSCREEN_TO_PORTRAIT";cu[cu.PLAYER_ROTATION_TYPE_UNKNOWN]="PLAYER_ROTATION_TYPE_UNKNOWN";var du="actionVisualElement spinnerInfo resourceInfo playerInfo commentInfo mdxInfo watchInfo thumbnailLoadInfo creatorInfo unpluggedInfo reelInfo subscriptionsFeedInfo requestIds mediaBrowserActionInfo musicLoadActionInfo shoppingInfo webViewInfo prefetchInfo accelerationSession commerceInfo webInfo tvInfo kabukiInfo mwebInfo musicInfo".split(" ");var eu=y.ytLoggingLatencyUsageStats_||{};z("ytLoggingLatencyUsageStats_",eu);function fu(){this.i=0}
function gu(){fu.i||(fu.i=new fu);return fu.i}
fu.prototype.tick=function(a,b,c,d){hu(this,"tick_"+a+"_"+b)||(c={timestamp:c,cttAuthInfo:d},M("web_csi_via_jspb")?(d=new Hj,D(d,1,a),D(d,2,b),a=new Kj,Wd(a,Hj,5,Lj,d),pr(a,c)):mm("latencyActionTicked",{tickName:a,clientActionNonce:b},c))};
fu.prototype.info=function(a,b,c){var d=Object.keys(a).join("");hu(this,"info_"+d+"_"+b)||(a=Object.assign({},a),a.clientActionNonce=b,mm("latencyActionInfo",a,{cttAuthInfo:c}))};
fu.prototype.jspbInfo=function(a,b,c){for(var d="",e=0;e<a.toJSON().length;e++)void 0!==a.toJSON()[e]&&(d=0===e?d.concat(""+e):d.concat("_"+e));hu(this,"info_"+d+"_"+b)||(D(a,2,b),b={cttAuthInfo:c},c=new Kj,Wd(c,Dj,7,Lj,a),pr(c,b))};
fu.prototype.span=function(a,b,c){var d=Object.keys(a).join("");hu(this,"span_"+d+"_"+b)||(a.clientActionNonce=b,mm("latencyActionSpan",a,{cttAuthInfo:c}))};
function hu(a,b){eu[b]=eu[b]||{count:0};var c=eu[b];c.count++;c.time=P();a.i||(a.i=Yl(function(){var d=P(),e;for(e in eu)eu[e]&&6E4<d-eu[e].time&&delete eu[e];a&&(a.i=0)},0,5E3));
return 5<c.count?(6===c.count&&1>1E5*Math.random()&&(c=new Q("CSI data exceeded logging limit with key",b.split("_")),0<=b.indexOf("plev")||Qr(c)),!0):!1}
;function iu(){var a=["ol"];Nt("").info.actionType="embed";a&&wk("TIMING_AFT_KEYS",a);wk("TIMING_ACTION","embed");if(M("web_csi_via_jspb")){a=L("TIMING_INFO",{});var b=new Dj;a=p(Object.entries(a));for(var c=a.next();!c.done;c=a.next()){var d=p(c.value);c=d.next().value;d=d.next().value;switch(c){case "GetBrowse_rid":var e=new Gj;D(e,1,c);D(e,2,String(d));Fj(b,e);break;case "GetGuide_rid":e=new Gj;D(e,1,c);D(e,2,String(d));Fj(b,e);break;case "GetHome_rid":e=new Gj;D(e,1,c);D(e,2,String(d));Fj(b,e);
break;case "GetPlayer_rid":e=new Gj;D(e,1,c);D(e,2,String(d));Fj(b,e);break;case "GetSearch_rid":e=new Gj;D(e,1,c);D(e,2,String(d));Fj(b,e);break;case "GetSettings_rid":e=new Gj;D(e,1,c);D(e,2,String(d));Fj(b,e);break;case "GetTrending_rid":e=new Gj;D(e,1,c);D(e,2,String(d));Fj(b,e);break;case "GetWatchNext_rid":e=new Gj;D(e,1,c);D(e,2,String(d));Fj(b,e);break;case "yt_red":D(b,14,!!d);break;case "yt_ad":D(b,9,!!d)}}ju(b);b=new Dj;b=D(b,25,!0);b=D(b,1,V[Ut(L("TIMING_ACTION"))]);(a=L("PREVIOUS_ACTION"))&&
D(b,13,V[Ut(a)]);(a=L("CLIENT_PROTOCOL"))&&D(b,33,a);(a=L("CLIENT_TRANSPORT"))&&D(b,34,a);(a=hs())&&"UNDEFINED_CSN"!==a&&D(b,4,a);a=ku();1!==a&&-1!==a||D(b,6,!0);a=Dt();if(M("skip_setting_info_in_csi_data_object"))Et();else{d=Ht();c=[];for(e=0;e<d.length;e++){var f=c,g=f.push;var h=d[e];var k=Dj;if(null==h||""==h)k=new k;else{h=JSON.parse(h);if(!Array.isArray(h))throw Error(void 0);be=h=sd(h);k=new k(h);be=null}g.call(f,k)}for(d=0;d<c.length&&"cold"!==$d(Nd(c[d],3),"");d++);}D(b,3,"cold");lu(a);a=
mu();if(0<a.length)for(a=p(a),c=a.next();!c.done;c=a.next())c=c.value,d=new Cj,D(d,1,c),Yd(b,83,Cj,d);ju(b)}else{a=L("TIMING_INFO",{});for(b in a)a.hasOwnProperty(b)&&nu(b,a[b]);b={isNavigation:!0,actionType:Ut(L("TIMING_ACTION"))};if(a=L("PREVIOUS_ACTION"))b.previousAction=Ut(a);if(a=L("CLIENT_PROTOCOL"))b.httpProtocol=a;if(a=L("CLIENT_TRANSPORT"))b.transportProtocol=a;(a=hs())&&"UNDEFINED_CSN"!==a&&(b.clientScreenNonce=a);a=ku();if(1===a||-1===a)b.isVisible=!0;M("skip_setting_info_in_csi_data_object")?
Et():Dt();b.loadType="cold";lu(Dt());a=mu();if(0<a.length)for(b.resourceInfo=[],a=p(a),c=a.next();!c.done;c=a.next())b.resourceInfo.push({resourceCache:c.value});ou(b)}b=Dt();a=Gt();if(!(M("skip_setting_info_in_csi_data_object")&&"cold"!==Et().loadType||"cold"!==b.yt_lt&&"cold"!==a.loadType)){c=xt();d=Ft();d=d.gelTicks?d.gelTicks:d.gelTicks={};for(var m in c)m in d||M("skip_invalid_ytcsi_ticks")&&"number"!==typeof c[m]||Z(m,c[m]);m={};c=!1;d=p(Object.keys(b));for(e=d.next();!e.done;e=d.next())e=e.value,
(e=Vt(e,b[e]))&&!Kt(Gt(),e)&&(lt(a,e),lt(m,e),c=!0);c&&ou(m)}z("ytglobal.timingready_",!0);m=L("TIMING_ACTION");B("ytglobal.timingready_")&&m&&"_start"in xt()&&wt()&&Jt()}
function nu(a,b,c,d){null!==b&&(Dt(c)[a]=b,(a=Vt(a,b,c))&&ou(a,c,d))}
function ou(a,b,c){if(!M("web_csi_via_jspb")||(void 0===c?0:c))c=Nt(b||""),lt(c.info,a),M("skip_setting_info_in_csi_data_object")&&a.loadType&&(c=a.loadType,Et(b).loadType=c),lt(Gt(b),a),c=It(b),b=Ct(b).cttAuthInfo,gu().info(a,c,b);else{c=new Dj;var d=Object.keys(a);a=Object.values(a);for(var e=0;e<d.length;e++){var f=d[e];try{switch(f){case "actionType":D(c,1,V[a[e]]);break;case "clientActionNonce":D(c,2,a[e]);break;case "clientScreenNonce":D(c,4,a[e]);break;case "loadType":D(c,3,a[e]);break;case "isPrewarmedLaunch":D(c,
92,a[e]);break;case "isFirstInstall":D(c,55,a[e]);break;case "networkType":D(c,5,Wt[a[e]]);break;case "connectionType":D(c,26,X[a[e]]);break;case "detailedConnectionType":D(c,27,Y[a[e]]);break;case "isVisible":D(c,6,a[e]);break;case "playerType":D(c,7,Xt[a[e]]);break;case "clientPlaybackNonce":D(c,8,a[e]);break;case "adClientPlaybackNonce":D(c,28,a[e]);break;case "previousCpn":D(c,77,a[e]);break;case "targetCpn":D(c,76,a[e]);break;case "isMonetized":D(c,9,a[e]);break;case "isPrerollAllowed":D(c,16,
a[e]);break;case "isPrerollShown":D(c,17,a[e]);break;case "adType":D(c,12,a[e]);break;case "adTypesAllowed":D(c,36,a[e]);break;case "adNetworks":D(c,37,a[e]);break;case "previousAction":D(c,13,V[a[e]]);break;case "isRedSubscriber":D(c,14,a[e]);break;case "serverTimeMs":D(c,15,a[e]);break;case "videoId":c.setVideoId(a[e]);break;case "adVideoId":D(c,20,a[e]);break;case "targetVideoId":D(c,78,a[e]);break;case "adBreakType":D(c,21,Yt[a[e]]);break;case "isNavigation":D(c,25,a[e]);break;case "viewportHeight":D(c,
29,a[e]);break;case "viewportWidth":D(c,30,a[e]);break;case "screenHeight":D(c,84,a[e]);break;case "screenWidth":D(c,85,a[e]);break;case "browseId":D(c,31,a[e]);break;case "isCacheHit":D(c,32,a[e]);break;case "httpProtocol":D(c,33,a[e]);break;case "transportProtocol":D(c,34,a[e]);break;case "searchQuery":D(c,41,a[e]);break;case "isContinuation":D(c,42,a[e]);break;case "availableProcessors":D(c,43,a[e]);break;case "sdk":D(c,44,a[e]);break;case "isLocalStream":D(c,45,a[e]);break;case "navigationRequestedSameUrl":D(c,
64,a[e]);break;case "shellStartupDurationMs":D(c,70,a[e]);break;case "appInstallDataAgeMs":D(c,73,a[e]);break;case "latencyActionError":D(c,71,Zt[a[e]]);break;case "actionStep":D(c,79,a[e]);break;case "jsHeapSizeLimit":D(c,80,a[e]);break;case "totalJsHeapSize":D(c,81,a[e]);break;case "usedJsHeapSize":D(c,82,a[e]);break;case "sourceVideoDurationMs":D(c,90,a[e]);break;case "videoOutputFrames":D(c,93,a[e]);break;case "isResume":D(c,104,a[e]);break;case "adPrebufferedTimeSecs":D(c,39,a[e]);break;case "isLivestream":D(c,
47,a[e]);break;case "liveStreamMode":D(c,91,$t[a[e]]);break;case "adCpn2":D(c,48,a[e]);break;case "adDaiDriftMillis":D(c,49,a[e]);break;case "videoStreamType":D(c,53,au[a[e]]);break;case "playbackRequiresTap":D(c,56,a[e]);break;case "performanceNavigationTiming":D(c,67,a[e]);break;case "transactionType":D(c,74,bu[a[e]]);break;case "playerRotationType":D(c,101,cu[a[e]]);break;case "allowedPreroll":D(c,10,a[e]);break;case "shownPreroll":D(c,11,a[e]);break;case "getHomeRequestId":D(c,57,a[e]);break;
case "getSearchRequestId":D(c,60,a[e]);break;case "getPlayerRequestId":D(c,61,a[e]);break;case "getWatchNextRequestId":D(c,62,a[e]);break;case "getBrowseRequestId":D(c,63,a[e]);break;case "getLibraryRequestId":D(c,66,a[e]);break;default:du.includes(f)&&Fk(new Q("Codegen laipb translator asked to translate message field",""+f))}}catch(g){Fk(Error("Codegen laipb translator failed to set "+f))}}ju(c,b)}}
function ju(a,b){if(M("skip_setting_info_in_csi_data_object")){var c=$d(Nd(a,3),"");c&&(Et(b).loadType=c)}else Ht(b).push(ce(a));Nt(b||"").jspbInfo.push(a);c=It(b);b=Ct(b).cttAuthInfo;gu().jspbInfo(a,c,b)}
function Z(a,b,c){if(!b&&"_"!==a[0]){var d=a;S.mark&&(0==d.lastIndexOf("mark_",0)||(d="mark_"+d),c&&(d+=" ("+c+")"),S.mark(d))}d=Nt(c||"");d.tick[a]=b||P();if(d.callback&&d.callback[a]){d=p(d.callback[a]);for(var e=d.next();!e.done;e=d.next())e=e.value,e()}d=Ft(c);d.gelTicks&&(d.gelTicks[a]=!0);d=xt(c);e=b||P();d[a]=e;e=It(c);var f=Ct(c).cttAuthInfo;if("_start"===a){var g=gu();hu(g,"baseline_"+e)||(b={timestamp:b,cttAuthInfo:f},M("web_csi_via_jspb")?(f=new Bj,D(f,1,e),e=new Kj,Wd(e,Bj,6,Lj,f),pr(e,
b)):mm("latencyActionBaselined",{clientActionNonce:e},b))}else gu().tick(a,e,b,f);Jt(c);return d[a]}
function pu(){var a=It();requestAnimationFrame(function(){setTimeout(function(){a===It()&&Z("ol",void 0,void 0)},0)})}
function ku(){var a=document;if("visibilityState"in a)a=a.visibilityState;else{var b=op+"VisibilityState";a=b in a?a[b]:void 0}switch(a){case "hidden":return 0;case "visible":return 1;case "prerender":return 2;case "unloaded":return 3;default:return-1}}
function lu(a){var b=zt(),c=Bt(),d=L("CSI_START_TIMESTAMP_MILLIS",0);0<d&&!M("embeds_web_enable_csi_start_override_killswitch")&&(c=d);c&&(Z("srt",b.responseStart),1!==a.prerender&&Z("_start",c,void 0));a=Lt();0<a&&Z("fpt",a);a=zt();a.isPerformanceNavigationTiming&&ou({performanceNavigationTiming:!0});Z("nreqs",a.requestStart,void 0);Z("nress",a.responseStart,void 0);Z("nrese",a.responseEnd,void 0);0<a.redirectEnd-a.redirectStart&&(Z("nrs",a.redirectStart,void 0),Z("nre",a.redirectEnd,void 0));0<
a.domainLookupEnd-a.domainLookupStart&&(Z("ndnss",a.domainLookupStart,void 0),Z("ndnse",a.domainLookupEnd,void 0));0<a.connectEnd-a.connectStart&&(Z("ntcps",a.connectStart,void 0),Z("ntcpe",a.connectEnd,void 0));a.secureConnectionStart>=Bt()&&0<a.connectEnd-a.secureConnectionStart&&(Z("nstcps",a.secureConnectionStart,void 0),Z("ntcpe",a.connectEnd,void 0));S&&"getEntriesByType"in S&&qu()}
function ru(a,b){a=document.querySelector(a);if(!a)return!1;var c="",d=a.nodeName;"SCRIPT"===d?(c=a.src,c||(c=a.getAttribute("data-timing-href"))&&(c=window.location.protocol+c)):"LINK"===d&&(c=a.href);ic()&&a.setAttribute("nonce",ic());return c?(a=S.getEntriesByName(c))&&a[0]&&(a=a[0],c=Bt(),Z("rsf_"+b,c+Math.round(a.fetchStart)),Z("rse_"+b,c+Math.round(a.responseEnd)),void 0!==a.transferSize&&0===a.transferSize)?!0:!1:!1}
function mu(){var a=[];if(document.querySelector&&S&&S.getEntriesByName)for(var b in vt)if(vt.hasOwnProperty(b)){var c=vt[b];ru(b,c)&&a.push(c)}return a}
function qu(){var a=window.location.protocol,b=S.getEntriesByType("resource");b=gb(b,function(c){return 0===c.name.indexOf(a+"//fonts.gstatic.com/s/")});
(b=ib(b,function(c,d){return d.duration>c.duration?d:c},{duration:0}))&&0<b.startTime&&0<b.responseEnd&&(Z("wffs",At(b.startTime)),Z("wffe",At(b.responseEnd)))}
var su=window;su.ytcsi&&(su.ytcsi.info=nu,su.ytcsi.tick=Z);var tu="tokens consistency mss client_location entities response_received_commands store PLAYER_PRELOAD".split(" "),uu=["type.googleapis.com/youtube.api.pfiinnertube.YoutubeApiInnertube.BrowseResponse"];function vu(a,b,c,d){this.o=a;this.M=b;this.m=c;this.l=d;this.j=void 0;this.i=new Map;a.Ma||(a.Ma={});a.Ma=Object.assign({},kt,a.Ma)}
function wu(a,b,c,d){if(void 0!==vu.i){if(d=vu.i,a=[a!==d.o,b!==d.M,c!==d.m,!1,!1,void 0!==d.j],a.some(function(e){return e}))throw new Q("InnerTubeTransportService is already initialized",a);
}else vu.i=new vu(a,b,c,d)}
function xu(a){var b={signalServiceEndpoint:{signal:"GET_DATASYNC_IDS"}};var c=void 0===c?Ks:c;var d=Ts(b,a.o);if(!d)return yf(new Q("Error: No request builder found for command.",b));var e=d.o(b,void 0,c);return e?new tf(function(f){var g,h,k;return x(function(m){if(1==m.i){h="cors"===(null==(g=e.va)?void 0:g.mode)?"cors":void 0;if(a.m.ud){var q=e.config,r;q=null==q?void 0:null==(r=q.Va)?void 0:r.sessionIndex;r=Js({sessionIndex:q});k=Object.assign({},yu(h),r);return m.u(2)}return v(m,zu(e.config,
h),3)}2!=m.i&&(k=m.j);f(Au(a,e,k));m.i=0})}):yf(new Q("Error: Failed to build request for command.",b))}
function Bu(a,b,c){var d;if(b&&!(null==b?0:null==(d=b.rr)?0:d.ur)&&a.l){d=p(tu);for(var e=d.next();!e.done;e=d.next())e=e.value,a.l[e]&&a.l[e].handleResponse(b,c)}}
function Au(a,b,c){var d,e,f,g,h,k,m,q,r,w,u,A,E,F,O,N,R,ca,W,pb,Xa,ma,H,la,fa,ze,Ae,wd;return x(function(oa){switch(oa.i){case 1:oa.u(2);break;case 3:if((d=oa.j)&&!d.isExpired())return oa.return(Promise.resolve(d.i()));case 2:if(null==(e=b)?0:null==(f=e.ga)?0:f.context)for(g=p([]),h=g.next();!h.done;h=g.next())k=h.value,k.lr(b.ga.context);if(null==(m=a.j)||!m.sr(b.input,b.ga)){oa.u(4);break}return v(oa,a.j.gr(b.input,b.ga),5);case 5:return q=oa.j,M("kevlar_process_local_innertube_responses_killswitch")||
Bu(a,q,b),oa.return(q);case 4:return(u=null==(w=b.config)?void 0:w.Ba)&&a.i.has(u)&&M("web_memoize_inflight_requests")?r=a.i.get(u):(A=JSON.stringify(b.ga),O=null!=(F=null==(E=b.va)?void 0:E.headers)?F:{},b.va=Object.assign({},b.va,{headers:Object.assign({},O,c)}),N=Object.assign({},b.va),"POST"===b.va.method&&(N=Object.assign({},N,{body:A})),(null==(R=b.config)?0:R.gd)&&Z(b.config.gd),ca=function(){return a.M.fetch(b.input,N,b.config)},r=ca(),u&&a.i.set(u,r)),v(oa,r,6);
case 6:W=oa.j;if(M("web_one_platform_error_handling")&&(null==(pb=W)?0:null==(Xa=pb.error)?0:Xa.details))for(ma=W.error.details,H=p(ma),la=H.next();!la.done;la=H.next())fa=la.value,(ze=fa["@type"])&&-1<uu.indexOf(ze)&&(delete fa["@type"],W=fa);u&&a.i.has(u)&&a.i.delete(u);(null==(Ae=b.config)?0:Ae.hd)&&Z(b.config.hd);if(W||null==(wd=a.j)||!wd.Yq(b.input,b.ga)){oa.u(7);break}return v(oa,a.j.fr(b.input,b.ga),8);case 8:W=oa.j;case 7:return Bu(a,W,b),oa.return(W)}})}
function zu(a,b){var c,d,e,f;return x(function(g){if(1==g.i){e=null==(c=a)?void 0:null==(d=c.Va)?void 0:d.sessionIndex;var h=Js({sessionIndex:e});if(!(h instanceof tf)){var k=new tf(cb);uf(k,2,h);h=k}return v(g,h,2)}f=g.j;return g.return(Promise.resolve(Object.assign({},yu(b),f)))})}
function yu(a){var b={"Content-Type":"application/json"};L("EOM_VISITOR_DATA")?b["X-Goog-EOM-Visitor-Id"]=L("EOM_VISITOR_DATA"):L("VISITOR_DATA")&&(b["X-Goog-Visitor-Id"]=L("VISITOR_DATA"));M("track_webfe_innertube_auth_mismatch")&&(b["X-Youtube-Bootstrap-Logged-In"]=L("LOGGED_IN",!1));"cors"!==a&&((a=L("INNERTUBE_CONTEXT_CLIENT_NAME"))&&(b["X-Youtube-Client-Name"]=a),(a=L("INNERTUBE_CONTEXT_CLIENT_VERSION"))&&(b["X-Youtube-Client-Version"]=a),(a=L("CHROME_CONNECTED_HEADER"))&&(b["X-Youtube-Chrome-Connected"]=
a),(a=L("DOMAIN_ADMIN_STATE"))&&(b["X-Youtube-Domain-Admin-State"]=a));return b}
;var Cu=new Vs("INNERTUBE_TRANSPORT_TOKEN");var Du=["share/get_web_player_share_panel"],Eu=["feedback"],Fu=["notification/modify_channel_preference"],Gu=["browse/edit_playlist"],Hu=["subscription/subscribe"],Iu=["subscription/unsubscribe"];function Ju(){}
t(Ju,gt);Ju.prototype.l=function(){return Hu};
Ju.prototype.i=function(a){return vs(a,Wj)||void 0};
Ju.prototype.j=function(a,b,c){c=void 0===c?{}:c;b.channelIds&&(a.channelIds=b.channelIds);b.siloName&&(a.siloName=b.siloName);b.params&&(a.params=b.params);c.botguardResponse&&(a.botguardResponse=c.botguardResponse);c.feature&&(a.clientFeature=c.feature)};
ea.Object.defineProperties(Ju.prototype,{m:{configurable:!0,enumerable:!0,get:function(){return!0}}});function Ku(){}
t(Ku,gt);Ku.prototype.l=function(){return Iu};
Ku.prototype.i=function(a){return vs(a,Vj)||void 0};
Ku.prototype.j=function(a,b){b.channelIds&&(a.channelIds=b.channelIds);b.siloName&&(a.siloName=b.siloName);b.params&&(a.params=b.params)};
ea.Object.defineProperties(Ku.prototype,{m:{configurable:!0,enumerable:!0,get:function(){return!0}}});function Lu(){}
t(Lu,gt);Lu.prototype.l=function(){return Eu};
Lu.prototype.i=function(a){return vs(a,aj)||void 0};
Lu.prototype.j=function(a,b,c){a.feedbackTokens=[];b.feedbackToken&&a.feedbackTokens.push(b.feedbackToken);if(b=b.cpn||c.cpn)a.feedbackContext={cpn:b};a.isFeedbackTokenUnencrypted=!!c.is_feedback_token_unencrypted;a.shouldMerge=!1;c.extra_feedback_tokens&&(a.shouldMerge=!0,a.feedbackTokens=a.feedbackTokens.concat(c.extra_feedback_tokens))};
ea.Object.defineProperties(Lu.prototype,{m:{configurable:!0,enumerable:!0,get:function(){return!0}}});function Mu(){}
t(Mu,gt);Mu.prototype.l=function(){return Fu};
Mu.prototype.i=function(a){return vs(a,Uj)||void 0};
Mu.prototype.j=function(a,b){b.params&&(a.params=b.params);b.secondaryParams&&(a.secondaryParams=b.secondaryParams)};function Nu(){}
t(Nu,gt);Nu.prototype.l=function(){return Gu};
Nu.prototype.i=function(a){return vs(a,Tj)||void 0};
Nu.prototype.j=function(a,b){b.actions&&(a.actions=b.actions);b.params&&(a.params=b.params);b.playlistId&&(a.playlistId=b.playlistId)};function Ou(){}
t(Ou,gt);Ou.prototype.l=function(){return Du};
Ou.prototype.i=function(a){return vs(a,Sj)};
Ou.prototype.j=function(a,b,c){c=void 0===c?{}:c;b.serializedShareEntity&&(a.serializedSharedEntity=b.serializedShareEntity);c.includeListId&&(a.includeListId=!0)};var Xs=new Vs("NETWORK_SLI_TOKEN");function Pu(a){this.i=a}
Pu.prototype.fetch=function(a,b){var c=this,d,e;return x(function(f){c.i&&(d=mc(nc(5,Ac(a,"key")))||"/UNKNOWN_PATH",c.i.start(d));e=new window.Request(a,b);return M("web_fetch_promise_cleanup_killswitch")?f.return(Promise.resolve(fetch(e).then(function(g){return c.handleResponse(g)}).catch(function(g){Qr(g)}))):f.return(fetch(e).then(function(g){return c.handleResponse(g)}).catch(function(g){Qr(g)}))})};
Pu.prototype.handleResponse=function(a){var b=a.text().then(function(c){return JSON.parse(c.replace(")]}'",""))});
a.redirected||a.ok?this.i&&this.i.success():(this.i&&this.i.failure(),b=b.then(function(c){Qr(new Q("Error: API fetch failed",a.status,a.url,c));return Object.assign({},c,{errorMetadata:{status:a.status}})}));
return b};
Pu[Us]=[new Ws];var Qu=new Vs("NETWORK_MANAGER_TOKEN");var Ru;function Su(a){Un.call(this,1,arguments);this.csn=a}
t(Su,Un);var co=new Vn("screen-created",Su),Tu=[],Vu=Uu,Wu=0;function Xu(a,b,c,d,e,f,g){function h(){Qr(new Q("newScreen() parent element does not have a VE - rootVe",b))}
var k=Vu(),m=new as({veType:b,youtubeData:f,jspbYoutubeData:void 0});f={aa:k};e&&(f.cttAuthInfo=e);M("il_via_jspb")?(e=new qj,e.l(k),rj(e,m.getAsJspb()),c&&c.visualElement?(m=new sj,c.clientScreenNonce&&D(m,2,c.clientScreenNonce),tj(m,c.visualElement.getAsJspb()),g&&D(m,4,Mj[g]),G(e,sj,5,m)):c&&h(),d&&D(e,3,d),ur(e,f,a)):(e={csn:k,pageVe:m.getAsJson()},c&&c.visualElement?(e.implicitGesture={parentCsn:c.clientScreenNonce,gesturedVe:c.visualElement.getAsJson()},g&&(e.implicitGesture.gestureType=g)):
c&&h(),d&&(e.cloneCsn=d),a?kr("screenCreated",e,a,f):mm("screenCreated",e,f));$n(co,new Su(k));return k}
function Yu(a,b,c,d){var e=d.filter(function(k){k.csn!==b?(k.csn=b,k=!0):k=!1;return k}),f={cttAuthInfo:js(b)||void 0,
aa:b};d=p(d);for(var g=d.next();!g.done;g=d.next())g=g.value.getAsJson(),(rb(g)||!g.trackingParams&&!g.veType)&&Qr(Error("Child VE logged with no data"));if(M("il_via_jspb")){var h=new uj;h.l(b);wj(h,c.getAsJspb());hb(e,function(k){k=k.getAsJspb();Yd(h,3,oj,k)});
"UNDEFINED_CSN"===b?Zu("visualElementAttached",f,void 0,h):vr(h,f,a)}else c={csn:b,parentVe:c.getAsJson(),childVes:hb(e,function(k){return k.getAsJson()})},"UNDEFINED_CSN"===b?Zu("visualElementAttached",f,c):a?kr("visualElementAttached",c,a,f):mm("visualElementAttached",c,f)}
function Uu(){for(var a=Math.random()+"",b=[],c=0,d=0;d<a.length;d++){var e=a.charCodeAt(d);255<e&&(b[c++]=e&255,e>>=8);b[c++]=e}return dd(b,3)}
function Zu(a,b,c,d){Tu.push({payloadName:a,payload:c,ta:d,options:b});Wu||(Wu=eo())}
function fo(a){if(Tu){for(var b=p(Tu),c=b.next();!c.done;c=b.next())if(c=c.value,c.payload)if(M("il_via_jspb"))switch(c.ta.l(a.csn),c.payloadName){case "screenCreated":ur(c.ta,c.options);break;case "visualElementAttached":vr(c.ta,c.options);break;case "visualElementShown":qr(c.ta,c.options);break;case "visualElementHidden":rr(c.ta,c.options);break;case "visualElementGestured":sr(c.ta,c.options);break;case "visualElementStateChanged":tr(c.ta,c.options);break;default:Qr(new Q("flushQueue unable to map payloadName to JSPB setter"))}else c.payload.csn=
a.csn,kr(c.payloadName,c.payload,null,c.options);Tu.length=0}Wu=0}
;function $u(){this.j=new Set;this.i=new Set;this.l=new Map}
$u.prototype.s=function(){};
$u.prototype.clear=function(){this.j.clear();this.i.clear();this.l.clear()};
Na($u);function av(){this.o=[];this.N=[];this.i=[];this.m=[];this.C=[];this.j=new Set;this.v=new Map}
av.prototype.s=function(a){this.client=a};
function bv(a,b,c){c=void 0===c?0:c;b.then(function(d){a.j.has(c)&&a.l&&a.l();var e=hs(c),f=fs(c);if(e&&f){var g;(null==d?0:null==(g=d.response)?0:g.trackingParams)&&Yu(a.client,e,f,[bs(d.response.trackingParams)]);var h;(null==d?0:null==(h=d.playerResponse)?0:h.trackingParams)&&Yu(a.client,e,f,[bs(d.playerResponse.trackingParams)])}})}
function cv(a,b,c,d){d=void 0===d?0:d;if(a.j.has(d))a.o.push([b,c]);else{var e=hs(d);c=c||fs(d);e&&c&&Yu(a.client,e,c,[b])}}
av.prototype.clickCommand=function(a,b,c){var d=a.clickTrackingParams;c=void 0===c?0:c;if(d)if(c=hs(void 0===c?0:c)){a=this.client;var e=bs(d);d={cttAuthInfo:js(c)||void 0,aa:c};M("il_via_jspb")?(b=new xj,b.l(c),e=e.getAsJspb(),G(b,oj,2,e),D(b,4,Mj.INTERACTION_LOGGING_GESTURE_TYPE_GENERIC_CLICK),"UNDEFINED_CSN"===c?Zu("visualElementGestured",d,void 0,b):sr(b,d,a)):(e={csn:c,ve:e.getAsJson(),gestureType:"INTERACTION_LOGGING_GESTURE_TYPE_GENERIC_CLICK"},b&&(e.clientData=b),"UNDEFINED_CSN"===c?Zu("visualElementGestured",
d,e):a?kr("visualElementGestured",e,a,d):mm("visualElementGestured",e,d));b=!0}else b=!1;else b=!1;return b};
function dv(a,b,c){c=void 0===c?{}:c;a.j.add(c.layer||0);a.l=function(){ev(a,b,c);var f=fs(c.layer);if(f){for(var g=p(a.o),h=g.next();!h.done;h=g.next())h=h.value,cv(a,h[0],h[1]||f,c.layer);f=p(a.N);for(g=f.next();!g.done;g=f.next()){var k=g.value;g=void 0;g=void 0===g?0:g;h=hs(g);var m=k[0]||fs(g);if(h&&m){g=a.client;var q=k[1];k={cttAuthInfo:js(h)||void 0,aa:h};M("il_via_jspb")?(q=new Aj,q.l(h),m=m.getAsJspb(),G(q,oj,2,m),"UNDEFINED_CSN"===h?Zu("visualElementStateChanged",k,void 0,q):tr(q,k,g)):
(m={csn:h,ve:m.getAsJson(),clientData:q},"UNDEFINED_CSN"===h?Zu("visualElementStateChanged",k,m):g?kr("visualElementStateChanged",m,g,k):mm("visualElementStateChanged",m,k))}}}};
hs(c.layer)||a.l();if(c.Vb)for(var d=p(c.Vb),e=d.next();!e.done;e=d.next())bv(a,e.value,c.layer);else Pr(Error("Delayed screen needs a data promise."))}
function ev(a,b,c){c=void 0===c?{}:c;c.layer||(c.layer=0);var d=void 0!==c.bd?c.bd:c.layer;var e=hs(d);d=fs(d);var f;d&&(void 0!==c.parentCsn?f={clientScreenNonce:c.parentCsn,visualElement:d}:e&&"UNDEFINED_CSN"!==e&&(f={clientScreenNonce:e,visualElement:d}));var g,h=L("EVENT_ID");"UNDEFINED_CSN"===e&&h&&(g={servletData:{serializedServletEventId:h}});try{var k=Xu(a.client,b,f,c.Ub,c.cttAuthInfo,g,c.dr)}catch(m){Sr(m,{pr:b,rootVe:d,parentVisualElement:void 0,Zq:e,kr:f,Ub:c.Ub});Pr(m);return}ks(k,b,
c.layer,c.cttAuthInfo);if(b=e&&"UNDEFINED_CSN"!==e&&d){a:{b=p(Object.values($r));for(f=b.next();!f.done;f=b.next())if(hs(f.value)===e){b=!0;break a}b=!1}b=!b}b&&(b=a.client,g=!0,h=(g=void 0===g?!1:g)?16:8,f={cttAuthInfo:js(e)||void 0,aa:e,Wb:g},M("il_via_jspb")?(h=new yj,h.l(e),d=d.getAsJspb(),G(h,oj,2,d),D(h,4,g?16:8),"UNDEFINED_CSN"===e?Zu("visualElementHidden",f,void 0,h):rr(h,f,b)):(d={csn:e,ve:d.getAsJson(),eventType:h},"UNDEFINED_CSN"===e?Zu("visualElementHidden",f,d):b?kr("visualElementHidden",
d,b,f):mm("visualElementHidden",d,f)));a.i[a.i.length-1]&&!a.i[a.i.length-1].csn&&(a.i[a.i.length-1].csn=k||"");ou({clientScreenNonce:k});$u.getInstance().clear();d=fs(c.layer);e&&"UNDEFINED_CSN"!==e&&d&&(M("web_mark_root_visible")||M("music_web_mark_root_visible"))&&(e=k,k={cttAuthInfo:js(e)||void 0,aa:e},M("il_via_jspb")?(b=new zj,b.l(e),f=d.getAsJspb(),G(b,oj,2,f),D(b,4,1),"UNDEFINED_CSN"===e?Zu("visualElementShown",k,void 0,b):qr(b,k)):(b={csn:e,ve:d.getAsJson(),eventType:1},"UNDEFINED_CSN"===
e?Zu("visualElementShown",k,b):mm("visualElementShown",b,k)));a.j.delete(c.layer||0);a.l=void 0;e=p(a.v);for(k=e.next();!k.done;k=e.next())b=p(k.value),k=b.next().value,b=b.next().value,b.has(c.layer)&&d&&cv(a,k,d,c.layer);for(c=0;c<a.m.length;c++){e=a.m[c];try{e()}catch(m){Pr(m)}}for(c=a.m.length=0;c<a.C.length;c++){e=a.C[c];try{e()}catch(m){Pr(m)}}}
;function fv(){var a,b;return x(function(c){if(1==c.i)return a=bt().resolve(Cu),a?v(c,xu(a),2):(Qr(Error("InnertubeTransportService unavailable in fetchDatasyncIds")),c.return(void 0));if(b=c.j)return b.errorMetadata?(Qr(Error("Datasync IDs fetch responded with "+b.errorMetadata.status+": "+b.error)),c.return(void 0)):c.return(b.br);Qr(Error("Network request to get Datasync IDs failed."));return c.return(void 0)})}
;var gv=y.caches,hv;function iv(a){var b=a.indexOf(":");return-1===b?{jc:a}:{jc:a.substring(0,b),datasyncId:a.substring(b+1)}}
function jv(){return x(function(a){if(void 0!==hv)return a.return(hv);hv=new Promise(function(b){var c;return x(function(d){switch(d.i){case 1:return ya(d,2),v(d,gv.open("test-only"),4);case 4:return v(d,gv.delete("test-only"),5);case 5:za(d,3);break;case 2:if(c=Aa(d),c instanceof Error&&"SecurityError"===c.name)return b(!1),d.return();case 3:b("caches"in window),d.i=0}})});
return a.return(hv)})}
function kv(a){var b,c,d,e,f,g,h;x(function(k){if(1==k.i)return v(k,jv(),2);if(3!=k.i){if(!k.j)return k.return(!1);b=[];return v(k,gv.keys(),3)}c=k.j;d=p(c);for(e=d.next();!e.done;e=d.next())f=e.value,g=iv(f),h=g.datasyncId,!h||a.includes(h)||b.push(gv.delete(f));return k.return(Promise.all(b).then(function(m){return m.some(function(q){return q})}))})}
function lv(){var a,b,c,d,e,f,g;return x(function(h){if(1==h.i)return v(h,jv(),2);if(3!=h.i){if(!h.j)return h.return(!1);a=qm("cache contains other");return v(h,gv.keys(),3)}b=h.j;c=p(b);for(d=c.next();!d.done;d=c.next())if(e=d.value,f=iv(e),(g=f.datasyncId)&&g!==a)return h.return(!0);return h.return(!1)})}
;function mv(){try{return!!self.localStorage}catch(a){return!1}}
;function nv(a){a=a.match(/(.*)::.*::.*/);if(null!==a)return a[1]}
function ov(a){if(mv()){var b=Object.keys(window.localStorage);b=p(b);for(var c=b.next();!c.done;c=b.next()){c=c.value;var d=nv(c);void 0===d||a.includes(d)||self.localStorage.removeItem(c)}}}
function pv(){if(!mv())return!1;var a=qm(),b=Object.keys(window.localStorage);b=p(b);for(var c=b.next();!c.done;c=b.next())if(c=nv(c.value),void 0!==c&&c!==a)return!0;return!1}
;function qv(){fv().then(function(a){a&&(Bn(a),kv(a),ov(a))})}
function rv(){var a=new Lo;Sh.S(function(){var b,c,d,e;return x(function(f){switch(f.i){case 1:if(M("ytidb_clear_optimizations_killswitch")){f.u(2);break}b=qm("clear");if(b.startsWith("V")){var g=[b];Bn(g);kv(g);ov(g);return f.return()}c=pv();return v(f,lv(),3);case 3:return d=f.j,v(f,Cn(),4);case 4:if(e=f.j,!c&&!d&&!e)return f.return();case 2:a.L()?qv():a.m.add("publicytnetworkstatus-online",qv,!0,void 0,void 0),f.i=0}})})}
;function sv(a){a&&(a.dataset?a.dataset[tv("loaded")]="true":a.setAttribute("data-loaded","true"))}
function uv(a,b){return a?a.dataset?a.dataset[tv(b)]:a.getAttribute("data-"+b):null}
var vv={};function tv(a){return vv[a]||(vv[a]=String(a).replace(/\-([a-z])/g,function(b,c){return c.toUpperCase()}))}
;var wv=/\.vflset|-vfl[a-zA-Z0-9_+=-]+/,xv=/-[a-zA-Z]{2,3}_[a-zA-Z]{2,3}(?=(\/|$))/;function yv(a,b,c){c=void 0===c?null:c;if(window.spf&&spf.script){c="";if(a){var d=a.indexOf("jsbin/"),e=a.lastIndexOf(".js"),f=d+6;-1<d&&-1<e&&e>f&&(c=a.substring(f,e),c=c.replace(wv,""),c=c.replace(xv,""),c=c.replace("debug-",""),c=c.replace("tracing-",""))}spf.script.load(a,c,b)}else zv(a,b,c)}
function zv(a,b,c){c=void 0===c?null:c;var d=Av(a),e=document.getElementById(d),f=e&&uv(e,"loaded"),g=e&&!f;f?b&&b():(b&&(f=sq(d,b),b=""+Ra(b),Bv[b]=f),g||(e=Cv(a,d,function(){uv(e,"loaded")||(sv(e),vq(d),Zk(Ya(wq,d),0))},c)))}
function Cv(a,b,c,d){d=void 0===d?null:d;var e=ef("SCRIPT");e.id=b;e.onload=function(){c&&setTimeout(c,0)};
e.onreadystatechange=function(){switch(e.readyState){case "loaded":case "complete":e.onload()}};
d&&e.setAttribute("nonce",d);Bh(e,Lb(a));a=document.getElementsByTagName("head")[0]||document.body;a.insertBefore(e,a.firstChild);return e}
function Dv(a){a=Av(a);var b=document.getElementById(a);b&&(wq(a),b.parentNode.removeChild(b))}
function Ev(a,b){a&&b&&(a=""+Ra(b),(a=Bv[a])&&uq(a))}
function Av(a){var b=document.createElement("a");fc(b,a);a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"js-"+kc(a)}
var Bv={};var Fv=[],Gv=!1;function Hv(){if(!M("disable_biscotti_fetch_for_ad_blocker_detection")&&!M("disable_biscotti_fetch_entirely_for_all_web_clients")&&xs()){var a=L("PLAYER_VARS",{});if("1"!=tb(a)&&!ys(a)){var b=function(){Gv=!0;"google_ad_status"in window?wk("DCLKSTAT",1):wk("DCLKSTAT",2)};
try{yv("//static.doubleclick.net/instream/ad_status.js",b)}catch(c){}Fv.push(Sh.S(function(){if(!(Gv||"google_ad_status"in window)){try{Ev("//static.doubleclick.net/instream/ad_status.js",b)}catch(c){}Gv=!0;wk("DCLKSTAT",3)}},5E3))}}}
function Iv(){var a=Number(L("DCLKSTAT",0));return isNaN(a)?0:a}
;function Jv(){this.state=1;this.i=null}
l=Jv.prototype;
l.initialize=function(a,b,c){if(a.program){var d,e=null!=(d=a.interpreterScript)?d:null,f;d=null!=(f=a.interpreterUrl)?f:null;a.interpreterSafeScript&&(e=a.interpreterSafeScript,Db("From proto message. b/166824318"),e=e.privateDoNotAccessOrElseSafeScriptWrappedValue||"",e=(f=Ab())?f.createScript(e):e,e=(new Fb(e)).toString());a.interpreterSafeUrl&&(d=a.interpreterSafeUrl,Db("From proto message. b/166824318"),d=Lb(d.privateDoNotAccessOrElseTrustedResourceUrlWrappedValue||"").toString());Mv(this,e,
d,a.program,b,c)}else Qr(Error("Cannot initialize botguard without program"))};
function Mv(a,b,c,d,e,f){var g=void 0===g?"trayride":g;c?(a.state=2,yv(c,function(){window[g]?Nv(a,d,g,e):(a.state=3,Dv(c),Qr(new Q("Unable to load Botguard","from "+c)))},f)):b?(f=ef("SCRIPT"),f.textContent=b,f.nonce=ic(),document.head.appendChild(f),document.head.removeChild(f),window[g]?Nv(a,d,g,e):(a.state=4,Qr(new Q("Unable to load Botguard from JS")))):Qr(new Q("Unable to load VM; no url or JS provided"))}
l.isInitialized=function(){return!!this.vb()};
function Nv(a,b,c,d){a.state=5;try{var e=new xh({program:b,globalName:c,ed:M("att_web_record_metrics")});e.rd.then(function(){a.state=6;d&&d(b)});
a.Gb(e)}catch(f){a.state=7,f instanceof Error&&Qr(f)}}
l.invoke=function(a){a=void 0===a?{}:a;var b=this.vb();if(b){var c={Tb:a};if(b.ab)throw Error("Already disposed");a=vh();var d;null!=(d=b.sa)&&d.j.i.Ib("/client_streamz/bg/fsc",d.Ba);d=b.vd([c.Tb,c.td]);null!=(b=b.sa)&&(a=vh()-a,b.l.i.lb("/client_streamz/bg/fsl",a,b.Ba));b=d}else b=null;return b};
l.dispose=function(){this.Jb()};
l.Jb=function(){this.Gb(null);this.state=8};
l.vb=function(){return this.i};
l.Gb=function(a){ke(this.i);this.i=a};function Ov(){Jv.apply(this,arguments)}
t(Ov,Jv);Ov.prototype.Jb=function(){this.state=8};
Ov.prototype.vb=function(){return B("yt.abuse.playerAttLoader")};
Ov.prototype.Gb=function(a){ke(B("yt.abuse.playerAttLoader"));z("yt.abuse.playerAttLoader",a);a&&z("yt.abuse.playerAttLoaderRun",function(b){return a.snapshot(b)})};var Pv=new Ov;var Qv=new Jv;function Rv(){return M("use_player_abuse_bg_library")?Pv.isInitialized():Qv.isInitialized()}
function Sv(a){a=void 0===a?{}:a;M("use_player_abuse_bg_library")?(a=void 0===a?{}:a,a=Pv.invoke(a)):a=Qv.invoke(a);return a}
;function Tv(a){var b=this;var c=void 0===c?0:c;var d=void 0===d?bm():d;this.m=c;this.l=d;this.j=new wh;this.i=a;a={};c=p(this.i.entries());for(d=c.next();!d.done;a={Da:a.Da,Oa:a.Oa},d=c.next()){var e=p(d.value);d=e.next().value;e=e.next().value;a.Oa=d;a.Da=e;d=function(f){return function(){f.Da.yb();b.i[f.Oa].ib=!0;b.i.every(function(g){return!0===g.ib})&&b.j.resolve()}}(a);
e=Yl(d,Uv(this,a.Da));this.i[a.Oa]=Object.assign({},a.Da,{yb:d,eb:e})}}
function Vv(a){var b=Array.from(a.i.keys()).sort(function(d,e){return Uv(a,a.i[e])-Uv(a,a.i[d])});
b=p(b);for(var c=b.next();!c.done;c=b.next())c=a.i[c.value],void 0===c.eb||c.ib||(a.l.ea(c.eb),Yl(c.yb,10))}
Tv.prototype.cancel=function(){for(var a=p(this.i),b=a.next();!b.done;b=a.next())b=b.value,void 0===b.eb||b.ib||this.l.ea(b.eb),b.ib=!0;this.j.resolve()};
function Uv(a,b){var c;return null!=(c=b.priority)?c:a.m}
;function Wv(a){this.state=a;this.plugins=[];this.s=void 0}
Wv.prototype.install=function(){this.plugins.push.apply(this.plugins,ia(Ja.apply(0,arguments)))};
Wv.prototype.uninstall=function(){var a=this;Ja.apply(0,arguments).forEach(function(b){b=a.plugins.indexOf(b);-1<b&&a.plugins.splice(b,1)})};
Wv.prototype.transition=function(a,b){var c=this,d=this.C.find(function(f){return f.from===c.state&&f.F===a});
if(d){this.l&&(Vv(this.l),this.l=void 0);this.state=a;d=d.action.bind(this);var e=this.plugins.filter(function(f){return f[a]}).map(function(f){return f[a]});
d(Xv(this,e,this.s),b)}else throw Error("no transition specified from "+this.state+" to "+a);};
function Xv(a,b,c){return function(){var d=Ja.apply(0,arguments),e=b.filter(function(k){var m;return 10===(null!=(m=null!=c?c:k.priority)?m:0)}),f=b.filter(function(k){var m;
return 10!==(null!=(m=null!=c?c:k.priority)?m:0)});
bm();var g={};e=p(e);for(var h=e.next();!h.done;g={Pa:g.Pa},h=e.next())g.Pa=h.value,$l(function(k){return function(){k.Pa.callback.apply(k.Pa,ia(d))}}(g));
f=f.map(function(k){var m;return{yb:function(){k.callback.apply(k,ia(d))},
priority:null!=(m=null!=c?c:k.priority)?m:0}});
f.length&&(a.l=new Tv(f))}}
ea.Object.defineProperties(Wv.prototype,{currentState:{configurable:!0,enumerable:!0,get:function(){return this.state}}});function Yv(a){Wv.call(this,void 0===a?"document_active":a);var b=this;this.s=10;this.i=new Map;this.C=[{from:"document_active",F:"document_disposed_preventable",action:this.N},{from:"document_active",F:"document_disposed",action:this.m},{from:"document_disposed_preventable",F:"document_disposed",action:this.m},{from:"document_disposed_preventable",F:"flush_logs",action:this.o},{from:"document_disposed_preventable",F:"document_active",action:this.j},{from:"document_disposed",F:"flush_logs",action:this.o},
{from:"document_disposed",F:"document_active",action:this.j},{from:"document_disposed",F:"document_disposed",action:function(){}},
{from:"flush_logs",F:"document_active",action:this.j}];window.addEventListener("pagehide",function(c){b.transition("document_disposed",{event:c})});
window.addEventListener("beforeunload",function(c){b.transition("document_disposed_preventable",{event:c})})}
t(Yv,Wv);Yv.prototype.N=function(a,b){if(!this.i.get("document_disposed_preventable")){a(null==b?void 0:b.event);var c,d;if((null==b?0:null==(c=b.event)?0:c.defaultPrevented)||(null==b?0:null==(d=b.event)?0:d.returnValue)){b.event.returnValue||(b.event.returnValue=!0);b.event.defaultPrevented||b.event.preventDefault();this.i=new Map;this.transition("document_active");return}}this.i.set("document_disposed_preventable",!0);this.i.get("document_disposed")?this.transition("flush_logs"):this.transition("document_disposed")};
Yv.prototype.m=function(a,b){this.i.get("document_disposed")?this.transition("document_active"):(a(null==b?void 0:b.event),this.i.set("document_disposed",!0),this.transition("flush_logs"))};
Yv.prototype.o=function(a,b){a(null==b?void 0:b.event);this.transition("document_active")};
Yv.prototype.j=function(){this.i=new Map};function Zv(a){Wv.call(this,void 0===a?"document_visibility_unknown":a);var b=this;this.C=[{from:"document_visibility_unknown",F:"document_visible",action:this.j},{from:"document_visibility_unknown",F:"document_hidden",action:this.i},{from:"document_visibility_unknown",F:"document_foregrounded",action:this.o},{from:"document_visibility_unknown",F:"document_backgrounded",action:this.m},{from:"document_visible",F:"document_hidden",action:this.i},{from:"document_visible",F:"document_foregrounded",action:this.o},
{from:"document_visible",F:"document_visible",action:this.j},{from:"document_foregrounded",F:"document_visible",action:this.j},{from:"document_foregrounded",F:"document_hidden",action:this.i},{from:"document_foregrounded",F:"document_foregrounded",action:this.o},{from:"document_hidden",F:"document_visible",action:this.j},{from:"document_hidden",F:"document_backgrounded",action:this.m},{from:"document_hidden",F:"document_hidden",action:this.i},{from:"document_backgrounded",F:"document_hidden",action:this.i},
{from:"document_backgrounded",F:"document_backgrounded",action:this.m},{from:"document_backgrounded",F:"document_visible",action:this.j}];document.addEventListener("visibilitychange",function(c){"visible"===document.visibilityState?b.transition("document_visible",{event:c}):b.transition("document_hidden",{event:c})});
M("visibility_lifecycles_dynamic_backgrounding")&&(window.addEventListener("blur",function(c){b.transition("document_backgrounded",{event:c})}),window.addEventListener("focus",function(c){b.transition("document_foregrounded",{event:c})}))}
t(Zv,Wv);Zv.prototype.j=function(a,b){a(null==b?void 0:b.event);M("visibility_lifecycles_dynamic_backgrounding")&&this.transition("document_foregrounded")};
Zv.prototype.i=function(a,b){a(null==b?void 0:b.event);M("visibility_lifecycles_dynamic_backgrounding")&&this.transition("document_backgrounded")};
Zv.prototype.m=function(a,b){a(null==b?void 0:b.event)};
Zv.prototype.o=function(a,b){a(null==b?void 0:b.event)};function $v(){this.i=new Yv;this.j=new Zv}
$v.prototype.install=function(){var a=Ja.apply(0,arguments);this.i.install.apply(this.i,ia(a));this.j.install.apply(this.j,ia(a))};function aw(){$v.call(this);var a={};this.install((a.document_disposed={callback:this.l},a));a={};this.install((a.flush_logs={callback:this.m},a))}
var bw;t(aw,$v);aw.prototype.m=function(){if(M("web_fp_via_jspb")){var a=new nj,b=hs();b&&D(a,1,b);b=new Kj;Wd(b,nj,380,Lj,a);pr(b);M("web_fp_via_jspb_and_json")&&mm("finalPayload",{csn:hs()})}else mm("finalPayload",{csn:hs()})};
aw.prototype.l=function(){Ur(Vr)};function cw(){}
cw.getInstance=function(){var a=B("ytglobal.storage_");a||(a=new cw,z("ytglobal.storage_",a));return a};
cw.prototype.estimate=function(){var a,b,c;return x(function(d){a=navigator;return(null==(b=a.storage)?0:b.estimate)?d.return(a.storage.estimate()):(null==(c=a.webkitTemporaryStorage)?0:c.queryUsageAndQuota)?d.return(dw()):d.return()})};
function dw(){var a=navigator;return new Promise(function(b,c){var d;null!=(d=a.webkitTemporaryStorage)&&d.queryUsageAndQuota?a.webkitTemporaryStorage.queryUsageAndQuota(function(e,f){b({usage:e,quota:f})},function(e){c(e)}):c(Error("webkitTemporaryStorage is not supported."))})}
z("ytglobal.storageClass_",cw);function km(a,b){var c=this;this.handleError=a;this.i=b;this.j=!1;void 0===self.document||self.addEventListener("beforeunload",function(){c.j=!0});
this.l=Math.random()<=zk("ytidb_transaction_ended_event_rate_limit",.02)}
km.prototype.logEvent=function(a,b){switch(a){case "IDB_DATA_CORRUPTED":M("idb_data_corrupted_killswitch")||this.i("idbDataCorrupted",b);break;case "IDB_UNEXPECTEDLY_CLOSED":this.i("idbUnexpectedlyClosed",b);break;case "IS_SUPPORTED_COMPLETED":M("idb_is_supported_completed_killswitch")||this.i("idbIsSupportedCompleted",b);break;case "QUOTA_EXCEEDED":ew(this,b);break;case "TRANSACTION_ENDED":this.l&&this.i("idbTransactionEnded",b);break;case "TRANSACTION_UNEXPECTEDLY_ABORTED":a=Object.assign({},b,
{hasWindowUnloaded:this.j}),this.i("idbTransactionAborted",a)}};
function ew(a,b){cw.getInstance().estimate().then(function(c){c=Object.assign({},b,{isSw:void 0===self.document,isIframe:self!==self.top,deviceStorageUsageMbytes:fw(null==c?void 0:c.usage),deviceStorageQuotaMbytes:fw(null==c?void 0:c.quota)});a.i("idbQuotaExceeded",c)})}
function fw(a){return"undefined"===typeof a?"-1":String(Math.ceil(a/1048576))}
;function gw(a,b,c){J.call(this);var d=this;c=c||L("POST_MESSAGE_ORIGIN")||window.document.location.protocol+"//"+window.document.location.hostname;this.l=b||null;this.targetOrigin="*";this.m=c;this.sessionId=null;this.channel="widget";this.G=!!a;this.v=function(e){a:if(!("*"!=d.m&&e.origin!=d.m||d.l&&e.source!=d.l||"string"!==typeof e.data)){try{var f=JSON.parse(e.data)}catch(g){break a}if(!(null==f||d.G&&(d.sessionId&&d.sessionId!=f.id||d.channel&&d.channel!=f.channel))&&f)switch(f.event){case "listening":"null"!=
e.origin&&(d.m=d.targetOrigin=e.origin);d.l=e.source;d.sessionId=f.id;d.j&&(d.j(),d.j=null);break;case "command":d.o&&(!d.s||0<=eb(d.s,f.func))&&d.o(f.func,f.args,e.origin)}}};
this.s=this.j=this.o=null;window.addEventListener("message",this.v)}
t(gw,J);gw.prototype.sendMessage=function(a,b){if(b=b||this.l){this.sessionId&&(a.id=this.sessionId);this.channel&&(a.channel=this.channel);try{var c=JSON.stringify(a);b.postMessage(c,this.targetOrigin)}catch(d){Gk(d)}}};
gw.prototype.D=function(){window.removeEventListener("message",this.v);J.prototype.D.call(this)};function hw(){this.j=[];this.isReady=!1;this.l={};var a=this.i=new gw(!!L("WIDGET_ID_ENFORCE")),b=this.dd.bind(this);a.o=b;a.s=null;this.i.channel="widget";if(a=L("WIDGET_ID"))this.i.sessionId=a}
l=hw.prototype;l.dd=function(a,b,c){"addEventListener"===a&&b?(a=b[0],this.l[a]||"onReady"===a||(this.addEventListener(a,iw(this,a)),this.l[a]=!0)):this.Kb(a,b,c)};
l.Kb=function(){};
function iw(a,b){return function(c){return a.sendMessage(b,c)}}
l.addEventListener=function(){};
l.Pc=function(){this.isReady=!0;this.sendMessage("initialDelivery",this.tb());this.sendMessage("onReady");fb(this.j,this.qc,this);this.j=[]};
l.tb=function(){return null};
function jw(a,b){a.sendMessage("infoDelivery",b)}
l.qc=function(a){this.isReady?this.i.sendMessage(a):this.j.push(a)};
l.sendMessage=function(a,b){this.qc({event:a,info:void 0===b?null:b})};
l.dispose=function(){this.i=null};var kw={},lw=(kw["api.invalidparam"]=2,kw.auth=150,kw["drm.auth"]=150,kw["heartbeat.net"]=150,kw["heartbeat.servererror"]=150,kw["heartbeat.stop"]=150,kw["html5.unsupportedads"]=5,kw["fmt.noneavailable"]=5,kw["fmt.decode"]=5,kw["fmt.unplayable"]=5,kw["html5.missingapi"]=5,kw["html5.unsupportedlive"]=5,kw["drm.unavailable"]=5,kw["mrm.blocked"]=151,kw);var mw=new Set("endSeconds startSeconds mediaContentUrl suggestedQuality videoId rct rctn".split(" "));function nw(a){return(0===a.search("cue")||0===a.search("load"))&&"loadModule"!==a}
function ow(a,b,c){if("string"===typeof a)return{videoId:a,startSeconds:b,suggestedQuality:c};b={};c=p(mw);for(var d=c.next();!d.done;d=c.next())d=d.value,a[d]&&(b[d]=a[d]);return b}
function pw(a,b,c,d){if(Qa(a)&&!Array.isArray(a)){b="playlist list listType index startSeconds suggestedQuality".split(" ");c={};for(d=0;d<b.length;d++){var e=b[d];a[e]&&(c[e]=a[e])}return c}b={index:b,startSeconds:c,suggestedQuality:d};"string"===typeof a&&16===a.length?b.list="PL"+a:b.playlist=a;return b}
;function qw(a){hw.call(this);this.listeners=[];this.api=a;this.addEventListener("onReady",this.onReady.bind(this));this.addEventListener("onVideoProgress",this.od.bind(this));this.addEventListener("onVolumeChange",this.pd.bind(this));this.addEventListener("onApiChange",this.jd.bind(this));this.addEventListener("onPlaybackQualityChange",this.ld.bind(this));this.addEventListener("onPlaybackRateChange",this.md.bind(this));this.addEventListener("onStateChange",this.nd.bind(this));this.addEventListener("onWebglSettingsChanged",
this.qd.bind(this))}
t(qw,hw);l=qw.prototype;
l.Kb=function(a,b,c){if(this.api.isExternalMethodAvailable(a,c)){b=b||[];if(0<b.length&&nw(a)){var d=b;if(Qa(d[0])&&!Array.isArray(d[0]))var e=d[0];else switch(e={},a){case "loadVideoById":case "cueVideoById":e=ow(d[0],void 0!==d[1]?Number(d[1]):void 0,d[2]);break;case "loadVideoByUrl":case "cueVideoByUrl":e=d[0];"string"===typeof e&&(e={mediaContentUrl:e,startSeconds:void 0!==d[1]?Number(d[1]):void 0,suggestedQuality:d[2]});b:{if((d=e.mediaContentUrl)&&(d=/\/([ve]|embed)\/([^#?]+)/.exec(d))&&d[2]){d=
d[2];break b}d=null}e.videoId=d;e=ow(e);break;case "loadPlaylist":case "cuePlaylist":e=pw(d[0],d[1],d[2],d[3])}b.length=1;b[0]=e}this.api.handleExternalCall(a,b,c);nw(a)&&jw(this,this.tb())}};
l.onReady=function(){var a=this.Pc.bind(this);this.i.j=a;a=this.api.getVideoData();if(!a.isPlayable){a=a.errorCode;var b=void 0===b?5:b;this.sendMessage("onError",(a?lw[a]||b:b).toString())}};
l.addEventListener=function(a,b){this.listeners.push({eventType:a,listener:b});this.api.addEventListener(a,b)};
l.tb=function(){if(!this.api)return null;var a=this.api.getApiInterface();lb(a,"getVideoData");for(var b={apiInterface:a},c=0,d=a.length;c<d;c++){var e=a[c];if(0===e.search("get")||0===e.search("is")){var f=0;0===e.search("get")?f=3:0===e.search("is")&&(f=2);f=e.charAt(f).toLowerCase()+e.substr(f+1);try{var g=this.api[e]();b[f]=g}catch(h){}}}b.videoData=this.api.getVideoData();b.currentTimeLastUpdated_=Date.now()/1E3;return b};
l.nd=function(a){a={playerState:a,currentTime:this.api.getCurrentTime(),duration:this.api.getDuration(),videoData:this.api.getVideoData(),videoStartBytes:0,videoBytesTotal:this.api.getVideoBytesTotal(),videoLoadedFraction:this.api.getVideoLoadedFraction(),playbackQuality:this.api.getPlaybackQuality(),availableQualityLevels:this.api.getAvailableQualityLevels(),currentTimeLastUpdated_:Date.now()/1E3,playbackRate:this.api.getPlaybackRate(),mediaReferenceTime:this.api.getMediaReferenceTime()};this.api.getVideoUrl&&
(a.videoUrl=this.api.getVideoUrl());this.api.getVideoContentRect&&(a.videoContentRect=this.api.getVideoContentRect());this.api.getProgressState&&(a.progressState=this.api.getProgressState());this.api.getPlaylist&&(a.playlist=this.api.getPlaylist());this.api.getPlaylistIndex&&(a.playlistIndex=this.api.getPlaylistIndex());this.api.getStoryboardFormat&&(a.storyboardFormat=this.api.getStoryboardFormat());jw(this,a)};
l.ld=function(a){jw(this,{playbackQuality:a})};
l.md=function(a){jw(this,{playbackRate:a})};
l.jd=function(){for(var a=this.api.getOptions(),b={namespaces:a},c=0,d=a.length;c<d;c++){var e=a[c],f=this.api.getOptions(e);b[e]={options:f};for(var g=0,h=f.length;g<h;g++){var k=f[g],m=this.api.getOption(e,k);b[e][k]=m}}this.sendMessage("apiInfoDelivery",b)};
l.pd=function(){jw(this,{muted:this.api.isMuted(),volume:this.api.getVolume()})};
l.od=function(a){a={currentTime:a,videoBytesLoaded:this.api.getVideoBytesLoaded(),videoLoadedFraction:this.api.getVideoLoadedFraction(),currentTimeLastUpdated_:Date.now()/1E3,playbackRate:this.api.getPlaybackRate(),mediaReferenceTime:this.api.getMediaReferenceTime()};this.api.getProgressState&&(a.progressState=this.api.getProgressState());jw(this,a)};
l.qd=function(){var a={sphericalProperties:this.api.getSphericalProperties()};jw(this,a)};
l.dispose=function(){hw.prototype.dispose.call(this);for(var a=0;a<this.listeners.length;a++){var b=this.listeners[a];this.api.removeEventListener(b.eventType,b.listener)}this.listeners=[]};function rw(a){J.call(this);this.j={};this.started=!1;this.connection=a;this.connection.subscribe("command",this.lc,this)}
t(rw,J);l=rw.prototype;l.start=function(){this.started||this.i()||(this.started=!0,this.connection.wa("RECEIVING"))};
l.wa=function(a,b){this.started&&!this.i()&&this.connection.wa(a,b)};
l.lc=function(a,b,c){if(this.started&&!this.i()){var d=b||{};switch(a){case "addEventListener":"string"===typeof d.event&&this.addListener(d.event);break;case "removeEventListener":"string"===typeof d.event&&this.removeListener(d.event);break;default:this.api.isReady()&&this.api.isExternalMethodAvailable(a,c||null)&&(b=sw(a,b||{}),c=this.api.handleExternalCall(a,b,c||null),(c=tw(a,c))&&this.wa(a,c))}}};
l.addListener=function(a){if(!(a in this.j)){var b=this.kd.bind(this,a);this.j[a]=b;this.addEventListener(a,b)}};
l.kd=function(a,b){this.started&&!this.i()&&this.connection.wa(a,this.sb(a,b))};
l.sb=function(a,b){if(null!=b)return{value:b}};
l.removeListener=function(a){a in this.j&&(this.removeEventListener(a,this.j[a]),delete this.j[a])};
l.D=function(){var a=this.connection;a.i()||qi(a.j,"command",this.lc,this);this.connection=null;for(var b in this.j)this.j.hasOwnProperty(b)&&this.removeListener(b);J.prototype.D.call(this)};function uw(a,b){rw.call(this,b);this.api=a;this.start()}
t(uw,rw);uw.prototype.addEventListener=function(a,b){this.api.addEventListener(a,b)};
uw.prototype.removeEventListener=function(a,b){this.api.removeEventListener(a,b)};
function sw(a,b){switch(a){case "loadVideoById":return a=ow(b),[a];case "cueVideoById":return a=ow(b),[a];case "loadVideoByPlayerVars":return[b];case "cueVideoByPlayerVars":return[b];case "loadPlaylist":return a=pw(b),[a];case "cuePlaylist":return a=pw(b),[a];case "seekTo":return[b.seconds,b.allowSeekAhead];case "playVideoAt":return[b.index];case "setVolume":return[b.volume];case "setPlaybackQuality":return[b.suggestedQuality];case "setPlaybackRate":return[b.suggestedRate];case "setLoop":return[b.loopPlaylists];
case "setShuffle":return[b.shufflePlaylist];case "getOptions":return[b.module];case "getOption":return[b.module,b.option];case "setOption":return[b.module,b.option,b.value];case "handleGlobalKeyDown":return[b.keyCode,b.shiftKey,b.ctrlKey,b.altKey,b.metaKey,b.key,b.code]}return[]}
function tw(a,b){switch(a){case "isMuted":return{muted:b};case "getVolume":return{volume:b};case "getPlaybackRate":return{playbackRate:b};case "getAvailablePlaybackRates":return{availablePlaybackRates:b};case "getVideoLoadedFraction":return{videoLoadedFraction:b};case "getPlayerState":return{playerState:b};case "getCurrentTime":return{currentTime:b};case "getPlaybackQuality":return{playbackQuality:b};case "getAvailableQualityLevels":return{availableQualityLevels:b};case "getDuration":return{duration:b};
case "getVideoUrl":return{videoUrl:b};case "getVideoEmbedCode":return{videoEmbedCode:b};case "getPlaylist":return{playlist:b};case "getPlaylistIndex":return{playlistIndex:b};case "getOptions":return{options:b};case "getOption":return{option:b}}}
uw.prototype.sb=function(a,b){switch(a){case "onReady":return;case "onStateChange":return{playerState:b};case "onPlaybackQualityChange":return{playbackQuality:b};case "onPlaybackRateChange":return{playbackRate:b};case "onError":return{errorCode:b}}return rw.prototype.sb.call(this,a,b)};
uw.prototype.D=function(){rw.prototype.D.call(this);delete this.api};function vw(a){a=void 0===a?!1:a;J.call(this);this.j=new K(a);me(this,this.j)}
Za(vw,J);vw.prototype.subscribe=function(a,b,c){return this.i()?0:this.j.subscribe(a,b,c)};
vw.prototype.m=function(a,b){this.i()||this.j.qa.apply(this.j,arguments)};function ww(a,b,c){vw.call(this);this.l=a;this.destination=b;this.id=c}
t(ww,vw);ww.prototype.wa=function(a,b){this.i()||this.l.wa(this.destination,this.id,a,b)};
ww.prototype.D=function(){this.destination=this.l=null;vw.prototype.D.call(this)};function xw(a,b,c){J.call(this);this.destination=a;this.origin=c;this.j=fq(window,"message",this.l.bind(this));this.connection=new ww(this,a,b);me(this,this.connection)}
t(xw,J);xw.prototype.wa=function(a,b,c,d){this.i()||a!==this.destination||(a={id:b,command:c},d&&(a.data=d),this.destination.postMessage(JSON.stringify(a),this.origin))};
xw.prototype.l=function(a){if(!this.i()&&a.origin===this.origin){var b=a.data;if("string"===typeof b){try{b=JSON.parse(b)}catch(d){return}if(b.command){var c=this.connection;c.i()||c.m("command",b.command,b.data,a.origin)}}}};
xw.prototype.D=function(){gq(this.j);this.destination=null;J.prototype.D.call(this)};function yw(a){a=a||{};var b={},c={};this.url=a.url||"";this.args=a.args||vb(b);this.assets=a.assets||{};this.attrs=a.attrs||vb(c);this.fallback=a.fallback||null;this.fallbackMessage=a.fallbackMessage||null;this.html5=!!a.html5;this.disable=a.disable||{};this.loaded=!!a.loaded;this.messages=a.messages||{}}
yw.prototype.clone=function(){var a=new yw,b;for(b in this)if(this.hasOwnProperty(b)){var c=this[b];"object"==Oa(c)?a[b]=vb(c):a[b]=c}return a};var zw=/cssbin\/(?:debug-)?([a-zA-Z0-9_-]+?)(?:-2x|-web|-rtl|-vfl|.css)/;function Aw(a){a=a||"";if(window.spf){var b=a.match(zw);spf.style.load(a,b?b[1]:"",void 0)}else Bw(a)}
function Bw(a){var b=Cw(a),c=document.getElementById(b),d=c&&uv(c,"loaded");d||c&&!d||(c=Dw(a,b,function(){uv(c,"loaded")||(sv(c),vq(b),Zk(Ya(wq,b),0))}))}
function Dw(a,b,c){var d=document.createElement("link");d.id=b;d.onload=function(){c&&setTimeout(c,0)};
a=Lb(a);gc(d,a);(document.getElementsByTagName("head")[0]||document.body).appendChild(d);return d}
function Cw(a){var b=ef("A");Db("This URL is never added to the DOM");fc(b,new Ob(a,Pb));a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"css-"+kc(a)}
;function Ew(){J.call(this);this.j=[]}
t(Ew,J);Ew.prototype.D=function(){for(;this.j.length;){var a=this.j.pop();a.target.removeEventListener(a.name,a.callback,void 0)}J.prototype.D.call(this)};function Fw(){Ew.apply(this,arguments)}
t(Fw,Ew);function Gw(a,b,c,d){J.call(this);var e=this;this.v=b;this.webPlayerContextConfig=d;this.ca=!1;this.api={};this.V=this.s=null;this.K=new K;this.j={};this.R=this.W=this.elementId=this.ra=this.config=null;this.P=!1;this.m=this.G=null;this.ka={};this.Ta=["onReady"];this.lastError=null;this.Fa=NaN;this.J={};this.Ua=new Fw(this);this.T=0;this.l=this.o=a;me(this,this.K);Hw(this);Iw(this);me(this,this.Ua);c?this.T=Zk(function(){e.loadNewVideoConfig(c)},0):d&&(Jw(this),Kw(this))}
t(Gw,J);l=Gw.prototype;l.getId=function(){return this.v};
l.loadNewVideoConfig=function(a){if(!this.i()){this.T&&($k(this.T),this.T=0);var b=a||{};b instanceof yw||(b=new yw(b));this.config=b;this.setConfig(a);Kw(this);this.isReady()&&Lw(this)}};
function Jw(a){var b;a.webPlayerContextConfig?b=a.webPlayerContextConfig.rootElementId:b=a.config.attrs.id;a.elementId=b||a.elementId;"video-player"===a.elementId&&(a.elementId=a.v,a.webPlayerContextConfig?a.webPlayerContextConfig.rootElementId=a.v:a.config.attrs.id=a.v);var c;(null==(c=a.l)?void 0:c.id)===a.elementId&&(a.elementId+="-player",a.webPlayerContextConfig?a.webPlayerContextConfig.rootElementId=a.elementId:a.config.attrs.id=a.elementId)}
l.setConfig=function(a){this.ra=a;this.config=Mw(a);Jw(this);if(!this.W){var b;this.W=Nw(this,(null==(b=this.config.args)?void 0:b.jsapicallback)||"onYouTubePlayerReady")}this.config.args?this.config.args.jsapicallback=null:this.config.args={jsapicallback:null};var c;if(null==(c=this.config)?0:c.attrs)a=this.config.attrs,(b=a.width)&&this.l&&(this.l.style.width=Lh(Number(b)||b)),(a=a.height)&&this.l&&(this.l.style.height=Lh(Number(a)||a))};
function Lw(a){if(a.config&&!0!==a.config.loaded)if(a.config.loaded=!0,!a.config.args||"0"!==a.config.args.autoplay&&0!==a.config.args.autoplay&&!1!==a.config.args.autoplay){var b;a.api.loadVideoByPlayerVars(null!=(b=a.config.args)?b:null)}else a.api.cueVideoByPlayerVars(a.config.args)}
function Ow(a){var b=!0,c=Pw(a);c&&a.config&&(a=Qw(a),b=uv(c,"version")===a);return b&&!!B("yt.player.Application.create")}
function Kw(a){if(!a.i()&&!a.P){var b=Ow(a);if(b&&"html5"===(Pw(a)?"html5":null))a.R="html5",a.isReady()||Rw(a);else if(Sw(a),a.R="html5",b&&a.m&&a.o)a.o.appendChild(a.m),Rw(a);else{a.config&&(a.config.loaded=!0);var c=!1;a.G=function(){c=!0;var d=Tw(a,"player_bootstrap_method")?B("yt.player.Application.createAlternate")||B("yt.player.Application.create"):B("yt.player.Application.create");var e=a.config?Mw(a.config):void 0;d&&d(a.o,e,a.webPlayerContextConfig);Rw(a)};
a.P=!0;b?a.G():(yv(Qw(a),a.G),(b=Uw(a))&&Aw(b),Vw(a)&&!c&&z("yt.player.Application.create",null))}}}
function Pw(a){var b=df(a.elementId);!b&&a.l&&a.l.querySelector&&(b=a.l.querySelector("#"+a.elementId));return b}
function Rw(a){if(!a.i()){var b=Pw(a),c=!1;b&&b.getApiInterface&&b.getApiInterface()&&(c=!0);if(c){a.P=!1;if(!Tw(a,"html5_remove_not_servable_check_killswitch")){var d;if((null==b?0:b.isNotServable)&&a.config&&(null==b?0:b.isNotServable(null==(d=a.config.args)?void 0:d.video_id)))return}Ww(a)}else a.Fa=Zk(function(){Rw(a)},50)}}
function Ww(a){Hw(a);a.ca=!0;var b=Pw(a);if(b){a.s=Xw(a,b,"addEventListener");a.V=Xw(a,b,"removeEventListener");var c=b.getApiInterface();c=c.concat(b.getInternalApiInterface());for(var d=a.api,e=0;e<c.length;e++){var f=c[e];d[f]||(d[f]=Xw(a,b,f))}}for(var g in a.j)a.j.hasOwnProperty(g)&&a.s&&a.s(g,a.j[g]);Lw(a);a.W&&a.W(a.api);a.K.qa("onReady",a.api)}
function Xw(a,b,c){var d=b[c];return function(){var e=Ja.apply(0,arguments);try{return a.lastError=null,d.apply(b,e)}catch(f){"sendAbandonmentPing"!==c&&(f.params=c,a.lastError=f,Qr(f))}}}
function Hw(a){a.ca=!1;if(a.V)for(var b in a.j)a.j.hasOwnProperty(b)&&a.V(b,a.j[b]);for(var c in a.J)a.J.hasOwnProperty(c)&&$k(Number(c));a.J={};a.s=null;a.V=null;b=a.api;for(var d in b)b.hasOwnProperty(d)&&(b[d]=null);b.addEventListener=function(e,f){a.addEventListener(e,f)};
b.removeEventListener=function(e,f){a.removeEventListener(e,f)};
b.destroy=function(){a.dispose()};
b.getLastError=function(){return a.getLastError()};
b.getPlayerType=function(){return a.getPlayerType()};
b.getCurrentVideoConfig=function(){return a.ra};
b.loadNewVideoConfig=function(e){a.loadNewVideoConfig(e)};
b.isReady=function(){return a.isReady()}}
l.isReady=function(){return this.ca};
function Iw(a){a.addEventListener("WATCH_LATER_VIDEO_ADDED",function(b){vq("WATCH_LATER_VIDEO_ADDED",b)});
a.addEventListener("WATCH_LATER_VIDEO_REMOVED",function(b){vq("WATCH_LATER_VIDEO_REMOVED",b)})}
l.addEventListener=function(a,b){var c=this,d=Nw(this,b);d&&(0<=eb(this.Ta,a)||this.j[a]||(b=Yw(this,a),this.s&&this.s(a,b)),this.K.subscribe(a,d),"onReady"===a&&this.isReady()&&Zk(function(){d(c.api)},0))};
l.removeEventListener=function(a,b){this.i()||(b=Nw(this,b))&&qi(this.K,a,b)};
function Nw(a,b){var c=b;if("string"===typeof b){if(a.ka[b])return a.ka[b];c=function(){var d=Ja.apply(0,arguments),e=B(b);if(e)try{e.apply(y,d)}catch(f){Pr(f)}};
a.ka[b]=c}return c?c:null}
function Yw(a,b){var c="ytPlayer"+b+a.v;a.j[b]=c;y[c]=function(d){var e=Zk(function(){if(!a.i()){try{a.K.qa(b,null!=d?d:void 0)}catch(h){Qr(new Q("PlayerProxy error when creating global callback",{error:h,event:b,playerId:a.v,data:d}))}var f=a.J,g=String(e);g in f&&delete f[g]}},0);
sb(a.J,String(e))};
return c}
l.getPlayerType=function(){return this.R||(Pw(this)?"html5":null)};
l.getLastError=function(){return this.lastError};
function Sw(a){a.cancel();Hw(a);a.R=null;a.config&&(a.config.loaded=!1);var b=Pw(a);b&&(Ow(a)||!Vw(a)?a.m=b:(b&&b.destroy&&b.destroy(),a.m=null));if(a.o)for(a=a.o;b=a.firstChild;)a.removeChild(b)}
l.cancel=function(){this.G&&Ev(Qw(this),this.G);$k(this.Fa);this.P=!1};
l.D=function(){Sw(this);if(this.m&&this.config&&this.m.destroy)try{this.m.destroy()}catch(b){Pr(b)}this.ka=null;for(var a in this.j)this.j.hasOwnProperty(a)&&(y[this.j[a]]=null);this.ra=this.config=this.api=null;delete this.o;delete this.l;J.prototype.D.call(this)};
function Vw(a){var b,c;a=null==(b=a.config)?void 0:null==(c=b.args)?void 0:c.fflags;return!!a&&-1!==a.indexOf("player_destroy_old_version=true")}
function Qw(a){return a.webPlayerContextConfig?a.webPlayerContextConfig.jsUrl:(a=a.config.assets)?a.js:""}
function Uw(a){return a.webPlayerContextConfig?a.webPlayerContextConfig.cssUrl:(a=a.config.assets)?a.css:""}
function Tw(a,b){if(a.webPlayerContextConfig)var c=a.webPlayerContextConfig.serializedExperimentFlags;else{var d;if(null==(d=a.config)?0:d.args)c=a.config.args.fflags}return"true"===Mk(c||"","&")[b]}
function Mw(a){for(var b={},c=p(Object.keys(a)),d=c.next();!d.done;d=c.next()){d=d.value;var e=a[d];b[d]="object"===typeof e?vb(e):e}return b}
;var Zw={},$w="player_uid_"+(1E9*Math.random()>>>0);function ax(a,b){var c="player",d=!1;d=void 0===d?!0:d;c="string"===typeof c?df(c):c;var e=$w+"_"+Ra(c),f=Zw[e];if(f&&d)return bx(a,b)?f.api.loadVideoByPlayerVars(a.args||null):f.loadNewVideoConfig(a),f.api;f=new Gw(c,e,a,b);Zw[e]=f;vq("player-added",f.api);ne(f,function(){delete Zw[f.getId()]});
return f.api}
function bx(a,b){return b&&b.serializedExperimentFlags?b.serializedExperimentFlags.includes("web_player_remove_playerproxy=true"):a&&a.args&&a.args.fflags?a.args.fflags.includes("web_player_remove_playerproxy=true"):!1}
;var cx=null,dx=null,ex=null;function fx(){gx()}
function hx(){gx()}
function gx(){var a=cx.getVideoData(1);a=a.title?a.title+" - YouTube":"YouTube";document.title!==a&&(document.title=a)}
function ix(){cx&&cx.sendAbandonmentPing&&cx.sendAbandonmentPing();L("PL_ATT")&&(M("use_player_abuse_bg_library")?Pv.dispose():Qv.dispose());for(var a=Sh,b=0,c=Fv.length;b<c;b++)a.ea(Fv[b]);Fv.length=0;Dv("//static.doubleclick.net/instream/ad_status.js");Gv=!1;wk("DCLKSTAT",0);le(ex,dx);cx&&(cx.removeEventListener("onVideoDataChange",fx),cx.destroy())}
;function jx(a,b,c){a="ST-"+kc(a).toString(36);b=b?tc(b):"";c=c||5;xs()&&pl(a,b,c)}
;function kx(a,b,c){b=void 0===b?{}:b;c=void 0===c?!1:c;var d=L("EVENT_ID");d&&(b.ei||(b.ei=d));if(b){d=a;var e=void 0===e?!0:e;var f=L("VALID_SESSION_TEMPDATA_DOMAINS",[]),g=oc(window.location.href);g&&f.push(g);g=oc(d);if(0<=eb(f,g)||!g&&0==d.lastIndexOf("/",0))if(M("autoescape_tempdata_url")&&(f=document.createElement("a"),fc(f,d),d=f.href),d&&(d=pc(d),f=d.indexOf("#"),d=0>f?d:d.slice(0,f)))if(e&&!b.csn&&(b.itct||b.ved)&&(b=Object.assign({csn:hs()},b)),h){var h=parseInt(h,10);isFinite(h)&&0<h&&
jx(d,b,h)}else jx(d,b)}if(c)return!1;if((window.ytspf||{}).enabled)spf.navigate(a);else{var k=void 0===k?{}:k;var m=void 0===m?"":m;var q=void 0===q?window:q;c=q.location;a=vc(a,k)+m;var r=void 0===r?Kh:r;a:{r=void 0===r?Kh:r;for(k=0;k<r.length;++k)if(m=r[k],m instanceof Ih&&m.isValid(a)){r=new Ob(a,Pb);break a}r=void 0}r=r||Sb;if(r instanceof Ob)var w=Qb(r);else{b:if(Ah){try{w=new URL(r)}catch(u){w="https:";break b}w=w.protocol}else c:{w=document.createElement("a");try{w.href=r}catch(u){w=void 0;
break c}w=w.protocol;w=":"===w||""===w?"https:":w}w="javascript:"!==w?r:void 0}void 0!==w&&(c.href=w)}return!0}
;z("yt.setConfig",wk);z("yt.config.set",wk);z("yt.setMsg",ms);z("yt.msgs.set",ms);z("yt.logging.errors.log",Pr);
z("writeEmbed",function(){var a=L("PLAYER_CONFIG");if(!a){var b=L("PLAYER_VARS");b&&(a={args:b})}Hs(!0);"gvn"===a.args.ps&&(document.body.style.backgroundColor="transparent");a.attrs||(a.attrs={width:"100%",height:"100%",id:"video-player"});var c=document.referrer;b=L("POST_MESSAGE_ORIGIN");window!==window.top&&c&&c!==document.URL&&(a.args.loaderUrl=c);M("embeds_js_api_set_1p_cookie")&&(c=Rk(window.location.href),c.embedsTokenValue&&(a.args.embedsTokenValue=c.embedsTokenValue));iu();c=L("WEB_PLAYER_CONTEXT_CONFIGS").WEB_PLAYER_CONTEXT_CONFIG_ID_EMBEDDED_PLAYER;
if(!c.serializedForcedExperimentIds){var d=Rk(window.location.href);d.forced_experiments&&(c.serializedForcedExperimentIds=d.forced_experiments)}cx=ax(a,c);cx.addEventListener("onVideoDataChange",fx);cx.addEventListener("onReady",hx);a=L("POST_MESSAGE_ID","player");L("ENABLE_JS_API")?ex=new qw(cx):L("ENABLE_POST_API")&&"string"===typeof a&&"string"===typeof b&&(dx=new xw(window.parent,a,b),ex=new uw(cx,dx.connection));Hv();M("ytidb_create_logger_embed_killswitch")||jm();a={};bw||(bw=new aw);bw.install((a.flush_logs=
{callback:function(){Vq()}},a));
M("embeds_web_enable_new_nwl")?Ro():Zo();M("ytidb_clear_embedded_player")&&Sh.S(function(){var e;if(!Ru){var f=bt(),g={Db:Qu,vc:Pu};f.providers.set(g.Db,g);g={Sb:{feedbackEndpoint:ct(Lu),modifyChannelNotificationPreferenceEndpoint:ct(Mu),playlistEditEndpoint:ct(Nu),subscribeEndpoint:ct(Ju),unsubscribeEndpoint:ct(Ku),webPlayerShareEntityServiceEndpoint:ct(Ou)}};var h=Qs.getInstance(),k={};h&&(k.client_location=h);if(void 0===m){Is.i||(Is.i=new Is);var m=Is.i}void 0===e&&(e=f.resolve(Qu));wu(g,e,m,
k);m={Db:Cu,wc:vu.i};f.providers.set(m.Db,m);Ru=f.resolve(Cu)}rv()})});
var lx=Ek(function(){pu();var a=tl.getInstance(),b=wl(119),c=1<window.devicePixelRatio;if(document.body&&di(document.body,"exp-invert-logo"))if(c&&!di(document.body,"inverted-hdpi")){var d=document.body;if(d.classList)d.classList.add("inverted-hdpi");else if(!di(d,"inverted-hdpi")){var e=bi(d);ci(d,e+(0<e.length?" inverted-hdpi":"inverted-hdpi"))}}else!c&&di(document.body,"inverted-hdpi")&&ei();if(b!=c){b="f"+(Math.floor(119/31)+1);d=xl(b)||0;d=c?d|67108864:d&-67108865;0==d?delete sl[b]:(c=d.toString(16),
sl[b]=c.toString());c=!0;M("web_secure_pref_cookie_killswitch")&&(c=!1);b=a.i;d=[];for(var f in sl)d.push(f+"="+encodeURIComponent(String(sl[f])));pl(b,d.join("&"),63072E3,a.j,c)}av.i||(av.i=new av);a=av.i;f=16623;var g=void 0===g?{}:g;Object.values(ns).includes(f)||(Qr(new Q("createClientScreen() called with a non-page VE",f)),f=83769);g.isHistoryNavigation||a.i.push({rootVe:f,key:g.key||""});a.o=[];a.N=[];g.Vb?dv(a,f,g):ev(a,f,g)}),mx=Ek(function(a){M("embeds_web_enable_dispose_player_if_page_not_cached_killswitch")?
ix():a.persisted||ix()}),nx=Ek(ix);
window.addEventListener?(window.addEventListener("load",lx),window.addEventListener("pagehide",mx)):window.attachEvent&&(window.attachEvent("onload",lx),window.attachEvent("onunload",nx));z("yt.abuse.player.botguardInitialized",B("yt.abuse.player.botguardInitialized")||Rv);z("yt.abuse.player.invokeBotguard",B("yt.abuse.player.invokeBotguard")||Sv);z("yt.abuse.dclkstatus.checkDclkStatus",B("yt.abuse.dclkstatus.checkDclkStatus")||Iv);z("yt.player.exports.navigate",B("yt.player.exports.navigate")||kx);
z("yt.util.activity.init",B("yt.util.activity.init")||kq);z("yt.util.activity.getTimeSinceActive",B("yt.util.activity.getTimeSinceActive")||nq);z("yt.util.activity.setTimestamp",B("yt.util.activity.setTimestamp")||lq);}).call(this);
