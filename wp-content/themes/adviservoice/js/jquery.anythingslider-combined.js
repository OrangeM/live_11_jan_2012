

/*
 * jQuery EasIng v1.1.2 - http://gsgd.co.uk/sandbox/jquery.easIng.php
 *
 * Uses the built In easIng capabilities added In jQuery 1.1
 * to offer multiple easIng options
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */

// t: current time, b: begInnIng value, c: change In value, d: duration

jQuery.extend( jQuery.easing,
{
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});


/*	SWFObject v2.2 <http://code.google.com/p/swfobject/> 
	is released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/
var swfobject=function(){var D="undefined",r="object",S="Shockwave Flash",W="ShockwaveFlash.ShockwaveFlash",q="application/x-shockwave-flash",R="SWFObjectExprInst",x="onreadystatechange",O=window,j=document,t=navigator,T=false,U=[h],o=[],N=[],I=[],l,Q,E,B,J=false,a=false,n,G,m=true,M=function(){var aa=typeof j.getElementById!=D&&typeof j.getElementsByTagName!=D&&typeof j.createElement!=D,ah=t.userAgent.toLowerCase(),Y=t.platform.toLowerCase(),ae=Y?/win/.test(Y):/win/.test(ah),ac=Y?/mac/.test(Y):/mac/.test(ah),af=/webkit/.test(ah)?parseFloat(ah.replace(/^.*webkit\/(\d+(\.\d+)?).*$/,"$1")):false,X=!+"\v1",ag=[0,0,0],ab=null;if(typeof t.plugins!=D&&typeof t.plugins[S]==r){ab=t.plugins[S].description;if(ab&&!(typeof t.mimeTypes!=D&&t.mimeTypes[q]&&!t.mimeTypes[q].enabledPlugin)){T=true;X=false;ab=ab.replace(/^.*\s+(\S+\s+\S+$)/,"$1");ag[0]=parseInt(ab.replace(/^(.*)\..*$/,"$1"),10);ag[1]=parseInt(ab.replace(/^.*\.(.*)\s.*$/,"$1"),10);ag[2]=/[a-zA-Z]/.test(ab)?parseInt(ab.replace(/^.*[a-zA-Z]+(.*)$/,"$1"),10):0}}else{if(typeof O.ActiveXObject!=D){try{var ad=new ActiveXObject(W);if(ad){ab=ad.GetVariable("$version");if(ab){X=true;ab=ab.split(" ")[1].split(",");ag=[parseInt(ab[0],10),parseInt(ab[1],10),parseInt(ab[2],10)]}}}catch(Z){}}}return{w3:aa,pv:ag,wk:af,ie:X,win:ae,mac:ac}}(),k=function(){if(!M.w3){return}if((typeof j.readyState!=D&&j.readyState=="complete")||(typeof j.readyState==D&&(j.getElementsByTagName("body")[0]||j.body))){f()}if(!J){if(typeof j.addEventListener!=D){j.addEventListener("DOMContentLoaded",f,false)}if(M.ie&&M.win){j.attachEvent(x,function(){if(j.readyState=="complete"){j.detachEvent(x,arguments.callee);f()}});if(O==top){(function(){if(J){return}try{j.documentElement.doScroll("left")}catch(X){setTimeout(arguments.callee,0);return}f()})()}}if(M.wk){(function(){if(J){return}if(!/loaded|complete/.test(j.readyState)){setTimeout(arguments.callee,0);return}f()})()}s(f)}}();function f(){if(J){return}try{var Z=j.getElementsByTagName("body")[0].appendChild(C("span"));Z.parentNode.removeChild(Z)}catch(aa){return}J=true;var X=U.length;for(var Y=0;Y<X;Y++){U[Y]()}}function K(X){if(J){X()}else{U[U.length]=X}}function s(Y){if(typeof O.addEventListener!=D){O.addEventListener("load",Y,false)}else{if(typeof j.addEventListener!=D){j.addEventListener("load",Y,false)}else{if(typeof O.attachEvent!=D){i(O,"onload",Y)}else{if(typeof O.onload=="function"){var X=O.onload;O.onload=function(){X();Y()}}else{O.onload=Y}}}}}function h(){if(T){V()}else{H()}}function V(){var X=j.getElementsByTagName("body")[0];var aa=C(r);aa.setAttribute("type",q);var Z=X.appendChild(aa);if(Z){var Y=0;(function(){if(typeof Z.GetVariable!=D){var ab=Z.GetVariable("$version");if(ab){ab=ab.split(" ")[1].split(",");M.pv=[parseInt(ab[0],10),parseInt(ab[1],10),parseInt(ab[2],10)]}}else{if(Y<10){Y++;setTimeout(arguments.callee,10);return}}X.removeChild(aa);Z=null;H()})()}else{H()}}function H(){var ag=o.length;if(ag>0){for(var af=0;af<ag;af++){var Y=o[af].id;var ab=o[af].callbackFn;var aa={success:false,id:Y};if(M.pv[0]>0){var ae=c(Y);if(ae){if(F(o[af].swfVersion)&&!(M.wk&&M.wk<312)){w(Y,true);if(ab){aa.success=true;aa.ref=z(Y);ab(aa)}}else{if(o[af].expressInstall&&A()){var ai={};ai.data=o[af].expressInstall;ai.width=ae.getAttribute("width")||"0";ai.height=ae.getAttribute("height")||"0";if(ae.getAttribute("class")){ai.styleclass=ae.getAttribute("class")}if(ae.getAttribute("align")){ai.align=ae.getAttribute("align")}var ah={};var X=ae.getElementsByTagName("param");var ac=X.length;for(var ad=0;ad<ac;ad++){if(X[ad].getAttribute("name").toLowerCase()!="movie"){ah[X[ad].getAttribute("name")]=X[ad].getAttribute("value")}}P(ai,ah,Y,ab)}else{p(ae);if(ab){ab(aa)}}}}}else{w(Y,true);if(ab){var Z=z(Y);if(Z&&typeof Z.SetVariable!=D){aa.success=true;aa.ref=Z}ab(aa)}}}}}function z(aa){var X=null;var Y=c(aa);if(Y&&Y.nodeName=="OBJECT"){if(typeof Y.SetVariable!=D){X=Y}else{var Z=Y.getElementsByTagName(r)[0];if(Z){X=Z}}}return X}function A(){return !a&&F("6.0.65")&&(M.win||M.mac)&&!(M.wk&&M.wk<312)}function P(aa,ab,X,Z){a=true;E=Z||null;B={success:false,id:X};var ae=c(X);if(ae){if(ae.nodeName=="OBJECT"){l=g(ae);Q=null}else{l=ae;Q=X}aa.id=R;if(typeof aa.width==D||(!/%$/.test(aa.width)&&parseInt(aa.width,10)<310)){aa.width="310"}if(typeof aa.height==D||(!/%$/.test(aa.height)&&parseInt(aa.height,10)<137)){aa.height="137"}j.title=j.title.slice(0,47)+" - Flash Player Installation";var ad=M.ie&&M.win?"ActiveX":"PlugIn",ac="MMredirectURL="+O.location.toString().replace(/&/g,"%26")+"&MMplayerType="+ad+"&MMdoctitle="+j.title;if(typeof ab.flashvars!=D){ab.flashvars+="&"+ac}else{ab.flashvars=ac}if(M.ie&&M.win&&ae.readyState!=4){var Y=C("div");X+="SWFObjectNew";Y.setAttribute("id",X);ae.parentNode.insertBefore(Y,ae);ae.style.display="none";(function(){if(ae.readyState==4){ae.parentNode.removeChild(ae)}else{setTimeout(arguments.callee,10)}})()}u(aa,ab,X)}}function p(Y){if(M.ie&&M.win&&Y.readyState!=4){var X=C("div");Y.parentNode.insertBefore(X,Y);X.parentNode.replaceChild(g(Y),X);Y.style.display="none";(function(){if(Y.readyState==4){Y.parentNode.removeChild(Y)}else{setTimeout(arguments.callee,10)}})()}else{Y.parentNode.replaceChild(g(Y),Y)}}function g(ab){var aa=C("div");if(M.win&&M.ie){aa.innerHTML=ab.innerHTML}else{var Y=ab.getElementsByTagName(r)[0];if(Y){var ad=Y.childNodes;if(ad){var X=ad.length;for(var Z=0;Z<X;Z++){if(!(ad[Z].nodeType==1&&ad[Z].nodeName=="PARAM")&&!(ad[Z].nodeType==8)){aa.appendChild(ad[Z].cloneNode(true))}}}}}return aa}function u(ai,ag,Y){var X,aa=c(Y);if(M.wk&&M.wk<312){return X}if(aa){if(typeof ai.id==D){ai.id=Y}if(M.ie&&M.win){var ah="";for(var ae in ai){if(ai[ae]!=Object.prototype[ae]){if(ae.toLowerCase()=="data"){ag.movie=ai[ae]}else{if(ae.toLowerCase()=="styleclass"){ah+=' class="'+ai[ae]+'"'}else{if(ae.toLowerCase()!="classid"){ah+=" "+ae+'="'+ai[ae]+'"'}}}}}var af="";for(var ad in ag){if(ag[ad]!=Object.prototype[ad]){af+='<param name="'+ad+'" value="'+ag[ad]+'" />'}}aa.outerHTML='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'+ah+">"+af+"</object>";N[N.length]=ai.id;X=c(ai.id)}else{var Z=C(r);Z.setAttribute("type",q);for(var ac in ai){if(ai[ac]!=Object.prototype[ac]){if(ac.toLowerCase()=="styleclass"){Z.setAttribute("class",ai[ac])}else{if(ac.toLowerCase()!="classid"){Z.setAttribute(ac,ai[ac])}}}}for(var ab in ag){if(ag[ab]!=Object.prototype[ab]&&ab.toLowerCase()!="movie"){e(Z,ab,ag[ab])}}aa.parentNode.replaceChild(Z,aa);X=Z}}return X}function e(Z,X,Y){var aa=C("param");aa.setAttribute("name",X);aa.setAttribute("value",Y);Z.appendChild(aa)}function y(Y){var X=c(Y);if(X&&X.nodeName=="OBJECT"){if(M.ie&&M.win){X.style.display="none";(function(){if(X.readyState==4){b(Y)}else{setTimeout(arguments.callee,10)}})()}else{X.parentNode.removeChild(X)}}}function b(Z){var Y=c(Z);if(Y){for(var X in Y){if(typeof Y[X]=="function"){Y[X]=null}}Y.parentNode.removeChild(Y)}}function c(Z){var X=null;try{X=j.getElementById(Z)}catch(Y){}return X}function C(X){return j.createElement(X)}function i(Z,X,Y){Z.attachEvent(X,Y);I[I.length]=[Z,X,Y]}function F(Z){var Y=M.pv,X=Z.split(".");X[0]=parseInt(X[0],10);X[1]=parseInt(X[1],10)||0;X[2]=parseInt(X[2],10)||0;return(Y[0]>X[0]||(Y[0]==X[0]&&Y[1]>X[1])||(Y[0]==X[0]&&Y[1]==X[1]&&Y[2]>=X[2]))?true:false}function v(ac,Y,ad,ab){if(M.ie&&M.mac){return}var aa=j.getElementsByTagName("head")[0];if(!aa){return}var X=(ad&&typeof ad=="string")?ad:"screen";if(ab){n=null;G=null}if(!n||G!=X){var Z=C("style");Z.setAttribute("type","text/css");Z.setAttribute("media",X);n=aa.appendChild(Z);if(M.ie&&M.win&&typeof j.styleSheets!=D&&j.styleSheets.length>0){n=j.styleSheets[j.styleSheets.length-1]}G=X}if(M.ie&&M.win){if(n&&typeof n.addRule==r){n.addRule(ac,Y)}}else{if(n&&typeof j.createTextNode!=D){n.appendChild(j.createTextNode(ac+" {"+Y+"}"))}}}function w(Z,X){if(!m){return}var Y=X?"visible":"hidden";if(J&&c(Z)){c(Z).style.visibility=Y}else{v("#"+Z,"visibility:"+Y)}}function L(Y){var Z=/[\\\"<>\.;]/;var X=Z.exec(Y)!=null;return X&&typeof encodeURIComponent!=D?encodeURIComponent(Y):Y}var d=function(){if(M.ie&&M.win){window.attachEvent("onunload",function(){var ac=I.length;for(var ab=0;ab<ac;ab++){I[ab][0].detachEvent(I[ab][1],I[ab][2])}var Z=N.length;for(var aa=0;aa<Z;aa++){y(N[aa])}for(var Y in M){M[Y]=null}M=null;for(var X in swfobject){swfobject[X]=null}swfobject=null})}}();return{registerObject:function(ab,X,aa,Z){if(M.w3&&ab&&X){var Y={};Y.id=ab;Y.swfVersion=X;Y.expressInstall=aa;Y.callbackFn=Z;o[o.length]=Y;w(ab,false)}else{if(Z){Z({success:false,id:ab})}}},getObjectById:function(X){if(M.w3){return z(X)}},embedSWF:function(ab,ah,ae,ag,Y,aa,Z,ad,af,ac){var X={success:false,id:ah};if(M.w3&&!(M.wk&&M.wk<312)&&ab&&ah&&ae&&ag&&Y){w(ah,false);K(function(){ae+="";ag+="";var aj={};if(af&&typeof af===r){for(var al in af){aj[al]=af[al]}}aj.data=ab;aj.width=ae;aj.height=ag;var am={};if(ad&&typeof ad===r){for(var ak in ad){am[ak]=ad[ak]}}if(Z&&typeof Z===r){for(var ai in Z){if(typeof am.flashvars!=D){am.flashvars+="&"+ai+"="+Z[ai]}else{am.flashvars=ai+"="+Z[ai]}}}if(F(Y)){var an=u(aj,am,ah);if(aj.id==ah){w(ah,true)}X.success=true;X.ref=an}else{if(aa&&A()){aj.data=aa;P(aj,am,ah,ac);return}else{w(ah,true)}}if(ac){ac(X)}})}else{if(ac){ac(X)}}},switchOffAutoHideShow:function(){m=false},ua:M,getFlashPlayerVersion:function(){return{major:M.pv[0],minor:M.pv[1],release:M.pv[2]}},hasFlashPlayerVersion:F,createSWF:function(Z,Y,X){if(M.w3){return u(Z,Y,X)}else{return undefined}},showExpressInstall:function(Z,aa,X,Y){if(M.w3&&A()){P(Z,aa,X,Y)}},removeSWF:function(X){if(M.w3){y(X)}},createCSS:function(aa,Z,Y,X){if(M.w3){v(aa,Z,Y,X)}},addDomLoadEvent:K,addLoadEvent:s,getQueryParamValue:function(aa){var Z=j.location.search||j.location.hash;if(Z){if(/\?/.test(Z)){Z=Z.split("?")[1]}if(aa==null){return L(Z)}var Y=Z.split("&");for(var X=0;X<Y.length;X++){if(Y[X].substring(0,Y[X].indexOf("="))==aa){return L(Y[X].substring((Y[X].indexOf("=")+1)))}}}return""},expressInstallCallback:function(){if(a){var X=c(R);if(X&&l){X.parentNode.replaceChild(l,X);if(Q){w(Q,true);if(M.ie&&M.win){l.style.display="block"}}if(E){E(B)}}a=false}}}}();


/*
	AnythingSlider v1.4.6

	By Chris Coyier: http://css-tricks.com
	with major improvements by Doug Neiner: http://pixelgraphics.us/
	based on work by Remy Sharp: http://jqueryfordesigners.com/

	To use the navigationFormatter function, you must have a function that
	accepts two paramaters, and returns a string of HTML text.

	index = integer index (1 based);
	panel = jQuery wrapped LI item this tab references
	@return = Must return a string of HTML/Text

	navigationFormatter: function(index, panel){
		return "Panel #" + index; // This would have each tab with the text 'Panel #X' where X = index
	}
*/

(function($) {

	$.anythingSlider = function(el, options) {

		// To avoid scope issues, use 'base' instead of 'this'
		// to reference this class from internal events and functions.
		var base = this;

		// Wraps the ul in the necessary divs and then gives Access to jQuery element
		base.$el = $(el).addClass('anythingBase').wrap('<div class="anythingSlider"><div class="anythingWindow" /></div>');

		// Add a reverse reference to the DOM object
		base.$el.data("AnythingSlider", base);

		base.init = function(){

			base.options = $.extend({}, $.anythingSlider.defaults, options);

			// Cache existing DOM elements for later
			// base.$el = original ul
			// for wrap - get parent() then closest in case the ul has "anythingSlider" class
			base.$wrapper = base.$el.parent().closest('div.anythingSlider').addClass('anythingSlider-' + base.options.theme);
			base.$window = base.$el.closest('div.anythingWindow');
			base.$controls = $('<div class="anythingControls"></div>').appendTo(base.$wrapper);
			base.$items = base.$el.find('> li').addClass('panel');

			// Set up a few defaults & get details
			base.pages   = base.$items.length;
			base.timer   = null;  // slideshow timer (setInterval) container
			base.flag    = false; // event flag to prevent multiple calls (used in control click/focusin)
			base.playing = false; // slideshow state
			base.hovered = false; // actively hovering over the slider
			base.panelSize = [];  // will contain dimensions and left position of each panel
			base.currentPage = base.options.startPanel;
			base.hasEmb = !!base.$items.find('embed[src*=youtube]').length; // embedded youtube objects exist in the slider
			base.hasSwfo = (typeof(swfobject) !== 'undefined' && swfobject.hasOwnProperty('embedSWF') && $.isFunction(swfobject.embedSWF)) ? true : false; // is swfobject loaded?

			// Get index (run time) of this slider on the page
			base.runTimes = $('div.anythingSlider').index(base.$wrapper) + 1;

			// Make sure easing function exists.
			if (!$.isFunction($.easing[base.options.easing])) { base.options.easing = "swing"; }

			// Add theme stylesheet, if it isn't already loaded
			if (base.options.theme != 'default' && !$('link[href*=' + base.options.theme + ']').length){
				$('body').append('<link rel="stylesheet" href="' + base.options.themeDirectory.replace(/\{themeName\}/g, base.options.theme) + '" type="text/css" />');
			}

			// Initialize YouTube javascript api, if YouTube video is present
			if (base.hasEmb && base.hasSwfo) {
					base.$items.find('embed[src*=youtube]').each(function(i){
						// Older IE doesn't have an object - just make sure we are wrapping the correct element
						var $tar = ($(this).parent()[0].tagName == "OBJECT") ? $(this).parent() : $(this);
						$tar.wrap('<div id="ytvideo' + i + '"></div>');
						// use SWFObject if it exists, it replaces the wrapper with the object/embed
						swfobject.embedSWF($(this).attr('src') + '&enablejsapi=1&version=3&playerapiid=ytvideo' + i, 'ytvideo' + i, '100%', '100%', '10', null, null, { allowScriptAccess: "always", wmode : base.options.addWmodeToObject }, {});
					});
				}
				/***** Consider removing this portion completely, if users will use SWFObject *****
				// This commented out code will allow YouTube API functions to work for non-IE browsers
				 else if (base.hasEmb) {
					// initialize youtube api when swf isn't loaded - doesn't work in IE (even if you find('embed'))
					base.$items.find('object').each(function(i){
						if ($(this).find('[src*=youtube]').length){
							$(this)
								.prepend('<param name="wmode" value="' + base.options.addWmodeToObject +'"/>')
								.wrap('<div id="yt-temp"></div>')
								.find('embed[src*=youtube]').attr('src', function(j,s){ return s + '&enablejsapi=1&version=3&playerapiid=ytvideo' + i; })
								.attr('wmode',base.options.addWmodeToObject).end()
								.find('param[value*=youtube]').attr('value', function(j,v){ return v + '&enablejsapi=1&version=3&playerapiid=ytvideo' + i; }).end()
								// detach/appendTo required to initialize the wmode code
								.detach()
								.appendTo($('#yt-temp'))
								.attr('id', 'ytvideo' + i)
								.unwrap();
						}
					});
				}
			} // ***** End script removal consideration *****/

			// Set the dimensions
			if (base.options.resizeContents) {
				if (base.options.width) { base.$wrapper.add(base.$items).css('width', base.options.width); }
				if (base.options.height) { base.$wrapper.add(base.$items).css('height', base.options.height); }
				if (base.hasEmb){ base.$el.find('object, embed').css({ width : '100%', height: '100%' }); } // this only expands youtube videos
			}

			// Remove navigation & player if there is only one page
			if (base.pages === 1) {
				base.options.autoPlay = false;
				base.options.buildNavigation = false;
				base.options.buildArrows = false;
			}

			// If autoPlay functionality is included, then initialize the settings
			if (base.options.autoPlay) {
				base.playing = !base.options.startStopped; // Sets the playing variable to false if startStopped is true
				base.buildAutoPlay();
			}

			// Build the navigation
			base.buildNavigation();

			// Top and tail the list with 'visible' number of items, top has the last section, and tail has the first
			// This supports the "infinite" scrolling, also ensures any cloned elements don't duplicate an ID
			base.$el.prepend( base.$items.filter(':last').clone().addClass('cloned').removeAttr('id') );
			base.$el.append( base.$items.filter(':first').clone().addClass('cloned').removeAttr('id') );

			// We just added two items, time to re-cache the list, then get the dimensions of each panel
			base.$items = base.$el.find('> li');
			base.setDimensions();
			if (!base.options.resizeContents) { $(window).load(function(){ base.setDimensions(); }); } // set dimensions after all images load

			// Build forwards/backwards buttons
			if (base.options.buildArrows) { base.buildNextBackButtons(); }

			// If pauseOnHover then add hover effects
			if (base.options.pauseOnHover) {
				base.$wrapper.hover(function() {
					if (base.playing) {
						base.$el.trigger('slideshow_paused', base);
						if ($.isFunction(base.options.onShowPause)) { base.options.onShowPause(base); }
						base.clearTimer(true);
					}
				}, function() {
					if (base.playing) {
						base.$el.trigger('slideshow_unpaused', base);
						if ($.isFunction(base.options.onShowUnpause)) { base.options.onShowUnpause(base); }
						base.startStop(base.playing, true);
					}
				});
			}

			// If a hash can not be used to trigger the plugin, then go to start panel
			if ((base.options.hashTags === true && !base.gotoHash()) || base.options.hashTags === false) {
				base.setCurrentPage(base.options.startPanel, false);
			}

			// Fix tabbing through the page
			base.$items.find('a').focus(function(){
				base.$items.find('.focusedLink').removeClass('focusedLink');
				$(this).addClass('focusedLink');
				base.$items.each(function(i){
					if ($(this).find('a.focusedLink').length) {
						base.gotoPage(i);
						return false;
					}
				});
			});

			// Hide/Show navigation & play/stop controls
			base.slideControls(false);
			base.$wrapper.hover(function(e){
				base.hovered = (e.type=="mouseenter") ? true : false;
				base.slideControls( base.hovered, false );
			});

			// Add keyboard navigation
			$(document).keyup(function(e){
				if (base.$wrapper.is('.activeSlider')) {
					switch (e.which) {
						case 39: // right arrow
							base.goForward();
							break;
						case 37: //left arrow
							base.goBack();
							break;
					}
				}
			});

		};

		// Creates the numbered navigation links
		base.buildNavigation = function() {
			base.$nav = $('<ul class="thumbNav" />').appendTo(base.$controls);
			if (base.options.playRtl) { base.$wrapper.addClass('rtl'); }

			if (base.options.buildNavigation && (base.pages > 1)) {
				base.$items.each(function(i,el) {
					var index = i + 1,
						$a = $("<a href='#'></a>").addClass('panel' + index).wrap("<li />");
					base.$nav.append($a.parent()); // use $a.parent() so IE will add <li> instead of only the <a> to the <ul>

					// If a formatter function is present, use it
					if ($.isFunction(base.options.navigationFormatter)) {
						var tmp = base.options.navigationFormatter(index, $(this));
						$a.html(tmp);
						// Add formatting to title attribute if text is hidden
						if (parseInt($a.css('text-indent'),10) < 0) { $a.addClass(base.options.tooltipClass).attr('title', tmp); }
					} else {
						$a.text(index);
					}

					$a.bind(base.options.clickControls, function(e) {
						if (!base.flag) {
							// prevent running functions twice (once for click, second time for focusin)
							base.flag = true; setTimeout(function(){ base.flag = false; }, 100);
							base.gotoPage(index);
							if (base.options.hashTags) { base.setHash('panel' + base.runTimes + '-' + index); }
						}
						e.preventDefault();
					});

				});

			}
		};

		// Creates the Forward/Backward buttons
		base.buildNextBackButtons = function() {
			base.$forward = $('<span class="arrow forward"><a href="#">' + base.options.forwardText + '</a></span>');
			base.$back = $('<span class="arrow back"><a href="#">' + base.options.backText + '</a></span>');

			// Bind to the forward and back buttons
			base.$back.bind(base.options.clickArrows, function(e) {
				base.goBack();
				e.preventDefault();
			});
			base.$forward.bind(base.options.clickArrows, function(e) {
				base.goForward();
				e.preventDefault();
			});
			// using tab to get to arrow links will show they have focus (outline is disabled in css)
			base.$back.add(base.$forward).find('a').bind('focusin focusout',function(){
			 $(this).toggleClass('hover');
			});

			// Append elements to page
			base.$wrapper.prepend(base.$forward).prepend(base.$back);
			base.$arrowWidth = base.$forward.width();
		};

		// Creates the Start/Stop button
		base.buildAutoPlay = function(){
			base.$startStop = $("<a href='#' class='start-stop'></a>").html(base.playing ? base.options.stopText :  base.options.startText);
			base.$controls.append(base.$startStop);
			base.$startStop
				.bind(base.options.clickSlideshow, function(e) {
					base.startStop(!base.playing);
					if (base.playing) {
						if (base.options.playRtl) {
							base.goBack(true);
						} else {
							base.goForward(true);
						}
					}
					e.preventDefault();
				})
				// show button has focus while tabbing
				.bind('focusin focusout',function(){
					$(this).toggleClass('hover');
				});

			// Use the same setting, but trigger the start;
			base.startStop(base.playing);
		};

		// Set panel dimensions to either resize content or adjust panel to content
		base.setDimensions = function(){
			var w, h, c, cw, dw, leftEdge = 0, bww = base.$window.width(), winw = $(window).width();
			base.$items.each(function(i){
				c = $(this).children('*');
				if (base.options.resizeContents){
					// get viewport width & height from options (if set), or css
					w = parseInt(base.options.width,10) || bww;
					h = parseInt(base.options.height,10) || base.$window.height();
					// resize panel
					$(this).css({ width: w, height: h });
					// resize panel contents, if solitary (wrapped content or solitary image)
					if (c.length == 1){ c.css({ width: '100%', height: '100%' }); }
				} else {
					// get panel width & height and save it
					w = $(this).width(); // if not defined, it will return the width of the ul parent
					dw = (w >= winw) ? true : false; // width defined from css?
					if (c.length == 1 && dw){
						cw = (c.width() >= winw) ? bww : c.width(); // get width of solitary child
						$(this).css('width', cw); // set width of panel
						c.css('max-width', cw);   // set max width for all children
						w = cw;
					}
					w = (dw) ?  base.options.width || bww : w;
					$(this).css('width', w);
					h = $(this).outerHeight(); // get height after setting width
					$(this).css('height', h);
				}
				base.panelSize[i] = [w,h,leftEdge];
				leftEdge += w;
			});
			//  Set total width of slider, but don't go beyond the set max overall width (limited by Opera)
			base.$el.css('width', (leftEdge < base.options.maxOverallWidth) ? leftEdge : base.options.maxOverallWidth);
		};

		base.gotoPage = function(page, autoplay) {
			if (typeof(page) === "undefined" || page === null) {
				page = base.options.startPage;
				base.setCurrentPage(base.options.startPage);
			}

			// pause YouTube videos before scrolling or prevent change if playing
			if (base.checkVideo(base.playing)) { return; }

			base.$el.trigger('slide_init', base);
			if ($.isFunction(base.options.onSlideInit)) { base.options.onSlideInit(base); }

			base.slideControls(true, false);

			// Just check for bounds
			if (page > base.pages + 1) { page = base.pages; }
			if (page < 0 ) { page = 1; }

			// When autoplay isn't passed, we stop the timer
			if (autoplay !== true) { autoplay = false; }
			// Stop the slider when we reach the last page, if the option stopAtEnd is set to true
			if (!autoplay || (base.options.stopAtEnd && page == base.pages)) { base.startStop(false); }

			base.$el.trigger('slide_begin', base);
			if ($.isFunction(base.options.onSlideBegin)) { base.options.onSlideBegin(base); }

			// resize slider if content size varies
			if (!base.options.resizeContents) {
				// animating the wrapper resize before the window prevents flickering in Firefox
				base.$wrapper.filter(':not(:animated)').animate(
					{ width: base.panelSize[page][0], height: base.panelSize[page][1] },
					{ queue: false, duration: base.options.animationTime, easing: base.options.easing }
				);
			}
			// Animate Slider
			base.$window.filter(':not(:animated)').animate(
				{ scrollLeft : base.panelSize[page][2] },
				{ queue: false, duration: base.options.animationTime, easing: base.options.easing, complete: function(){ base.endAnimation(page); } }
			);

		};

		base.endAnimation = function(page){
			if (page === 0) {
				base.$window.scrollLeft(base.panelSize[base.pages][2]);
				page = base.pages;
			} else if (page > base.pages) {
				// reset back to start position
				base.$window.scrollLeft(base.panelSize[1][2]);
				page = 1;
			}
			base.setCurrentPage(page, false);

			if (!base.hovered) { base.slideControls(false); }

			// continue YouTube video if in current panel
			if (base.hasEmb){
				var emb = base.$items.eq(base.currentPage).find('object[id*=ytvideo], embed[id*=ytvideo]');
				// player states: unstarted (-1), ended (0), playing (1), paused (2), buffering (3), video cued (5).
				if (emb.length && $.isFunction(emb[0].getPlayerState) && emb[0].getPlayerState() > 0 && emb[0].getPlayerState() != 5) {
					emb[0].playVideo();
				}
			}

			base.$el.trigger('slide_complete', base);
			if ($.isFunction(base.options.onSlideComplete)) {
				// Added setTimeout (zero time) to ensure animation is complete... for some reason this code:
				// alert(base.$window.is(':animated')); // alerts true - http://dev.jquery.com/ticket/7156
				setTimeout(function(){ base.options.onSlideComplete(base); }, 0);
			}
		};

		base.setCurrentPage = function(page, move) {
			// Set visual
			if (base.options.buildNavigation){
				base.$nav.find('.cur').removeClass('cur');
				base.$nav.find('a').eq(page - 1).addClass('cur');
			}

			// Only change left if move does not equal false
			if (!move) {
				base.$wrapper.css({
					width: base.panelSize[page][0],
					height: base.panelSize[page][1]
				});
				base.$wrapper.scrollLeft(0); // reset in case tabbing changed this scrollLeft
				base.$window.scrollLeft( base.panelSize[page][2] );
			}
			// Update local variable
			base.currentPage = page;

			// Set current slider as active so keyboard navigation works properly
			if (!base.$wrapper.is('.activeSlider')){
				$('.activeSlider').removeClass('activeSlider');
				base.$wrapper.addClass('activeSlider');
			}
		};

		base.goForward = function(autoplay) {
			if (autoplay !== true) { autoplay = false; base.startStop(false); }
			base.gotoPage(base.currentPage + 1, autoplay);
		};

		base.goBack = function(autoplay) {
			if (autoplay !== true) { autoplay = false; base.startStop(false); }
			base.gotoPage(base.currentPage - 1, autoplay);
		};

		// This method tries to find a hash that matches panel-X
		// If found, it tries to find a matching item
		// If that is found as well, then that item starts visible
		base.gotoHash = function(){
			var hash = window.location.hash.match(/^#?panel(\d+)-(\d+)$/);
			if (hash) {
				var panel = parseInt(hash[1],10);
				if (panel == base.runTimes) {
					var slide = parseInt(hash[2],10),
						$item = base.$items.filter(':eq(' + slide + ')');
					if ($item.length !== 0) {
						base.setCurrentPage(slide, false);
						return true;
					}
				}
			}
			return false; // An item wasn't found;
		};

		// Taken from AJAXY jquery.history Plugin
		base.setHash = function (hash){
			// Write hash
			if ( typeof window.location.hash !== 'undefined' ) {
				if ( window.location.hash !== hash ) {
					window.location.hash = hash;
				}
			} else if ( location.hash !== hash ) {
				location.hash = hash;
			}

			// Done
			return hash;
		};
		// <-- End AJAXY code

		// Slide controls (nav and play/stop button up or down)
		base.slideControls = function(toggle, playing){
			var dir = (toggle) ? 'slideDown' : 'slideUp',
				t1 = (toggle) ? 0 : base.options.animationTime,
				t2 = (toggle) ? base.options.animationTime: 0,
				sign = (toggle) ? 0 : 1; // 0 = visible, 1 = hidden
			if (base.options.toggleControls) {
				base.$controls.stop(true,true).delay(t1)[dir](base.options.animationTime/2).delay(t2); 
			}
			if (base.options.toggleArrows) {
				if (!base.hovered && base.playing) { sign = 1; }
				base.$forward.stop(true,true).delay(t1).animate({ right: sign * base.$arrowWidth, opacity: t2 }, base.options.animationTime/2);
				base.$back.stop(true,true).delay(t1).animate({ left: sign * base.$arrowWidth, opacity: t2 }, base.options.animationTime/2);
			}
		};

		base.clearTimer = function(paused){
			// Clear the timer only if it is set
			if (base.timer) { 
				window.clearInterval(base.timer); 
				if (!paused) {
					base.$el.trigger('slideshow_stop', base); 
					if ($.isFunction(base.options.onShowStop)) { base.options.onShowStop(base); }
				}
			}
		};

		// Handles stopping and playing the slideshow
		// Pass startStop(false) to stop and startStop(true) to play
		base.startStop = function(playing, paused) {
			if (playing !== true) { playing = false; } // Default if not supplied is false

			if (playing && !paused) {
				base.$el.trigger('slideshow_start', base);
				if ($.isFunction(base.options.onShowStart)) { base.options.onShowStart(base); }
			}

			// Update variable
			base.playing = playing;

			// Toggle playing and text
			if (base.options.autoPlay) {
				base.$startStop.toggleClass('playing', playing).html( playing ? base.options.stopText : base.options.startText );
				// add button text to title attribute if it is hidden by text-indent
				if (parseInt(base.$startStop.css('text-indent'),10) < 0) {
					base.$startStop.addClass(base.options.tooltipClass).attr('title', playing ? 'Stop' : 'Start');
				}
			}

			if (playing){
				base.clearTimer(true); // Just in case this was triggered twice in a row
				base.timer = window.setInterval(function() {
					// prevent autoplay if video is playing
					if (!base.checkVideo(playing)) {
						if (base.options.playRtl) {
							base.goBack(true);
						} else {
							base.goForward(true);
						}
					}
				}, base.options.delay);
			} else {
				base.clearTimer();
			}
		};

		base.checkVideo = function(playing){
			// pause YouTube videos before scrolling?
			var emb, ps, stopAdvance = false;
			if (base.hasEmb){
				base.$items.find('object[id*=ytvideo], embed[id*=ytvideo]').each(function(){ // include embed for IE; if not using SWFObject, old detach/append code needs "object embed" here
					emb = $(this);
					if (emb.length && $.isFunction(emb[0].getPlayerState)) {
						// player states: unstarted (-1), ended (0), playing (1), paused (2), buffering (3), video cued (5).
						ps = emb[0].getPlayerState();
						// if autoplay, video playing, video is in current panel and resume option are true, then don't advance
						if (playing && (ps == 1 || ps > 2) && base.$items.index(emb.closest('li.panel')) == base.currentPage && base.options.resumeOnVideoEnd) {
							stopAdvance = true;
						} else {
							// pause video if not autoplaying (if already initialized)
							if (ps > 0) { emb[0].pauseVideo(); }
						}
					}
				});
			}
			return stopAdvance;
		};

		// Trigger the initialization
		base.init();
	};

	$.anythingSlider.defaults = {
		// Appearance
		width               : null,      // Override the default CSS width
		height              : null,      // Override the default CSS height
		resizeContents      : true,      // If true, solitary images/objects in the panel will expand to fit the viewport
		tooltipClass        : 'tooltip', // Class added to navigation & start/stop button (text copied to title if it is hidden by a negative text indent)
		theme               : 'default', // Theme name
		themeDirectory      : 'css/theme-{themeName}.css', // Theme directory & filename {themeName} is replaced by the theme value above

		// Navigation
		startPanel          : 1,         // This sets the initial panel
		hashTags            : true,      // Should links change the hashtag in the URL?
		buildArrows         : true,      // If true, builds the forwards and backwards buttons
		toggleArrows        : false,     // If true, side navigation arrows will slide out on hovering & hide @ other times
		buildNavigation     : true,      // If true, builds a list of anchor links to link to each panel
		toggleControls      : false,     // if true, slide in controls (navigation + play/stop button) on hover and slide change, hide @ other times
		navigationFormatter : null,      // Details at the top of the file on this use (advanced use)
		forwardText         : "&raquo;", // Link text used to move the slider forward (hidden by CSS, replaced with arrow image)
		backText            : "&laquo;", // Link text used to move the slider back (hidden by CSS, replace with arrow image)

		// Slideshow options
		autoPlay            : true,      // This turns off the entire slideshow FUNCTIONALY, not just if it starts running or not
		startStopped        : false,     // If autoPlay is on, this can force it to start stopped
		pauseOnHover        : true,      // If true & the slideshow is active, the slideshow will pause on hover
		resumeOnVideoEnd    : true,      // If true & the slideshow is active & a youtube video is playing, it will pause the autoplay until the video is complete
		stopAtEnd           : false,     // If true & the slideshow is active, the slideshow will stop on the last page
		playRtl             : false,     // If true, the slideshow will move right-to-left
		startText           : "Start",   // Start button text
		stopText            : "Stop",    // Stop button text
		delay               : 3000,      // How long between slideshow transitions in AutoPlay mode (in milliseconds)
		animationTime       : 600,       // How long the slideshow transition takes (in milliseconds)
		easing              : "swing",   // Anything other than "linear" or "swing" requires the easing plugin

		// Callbacks
		onShowStart         : null,      // Callback on slideshow start
		onShowStop          : null,      // Callback after slideshow stops
		onShowPause         : null,      // Callback when slideshow pauses
		onShowUnpause       : null,      // Callback when slideshow unpauses - may not trigger properly if user clicks on any controls
		onSlideInit         : null,      // Callback when slide initiates, before control animation
		onSlideBegin        : null,      // Callback before slide animates
		onSlideComplete     : null,      // Callback when slide completes

		// Interactivity
		clickArrows         : "click",         // Event used to activate arrow functionality (e.g. "click" or "mouseenter")
		clickControls       : "click focusin", // Events used to activate navigation control functionality
		clickSlideshow      : "click",         // Event used to activate slideshow play/stop button

		// Misc options
		addWmodeToObject    : "opaque", // If your slider has an embedded object, the script will automatically add a wmode parameter with this setting
		maxOverallWidth     : 32766     // Max width (in pixels) of combined sliders (side-to-side); set to 32766 to prevent problems with Opera
	};

	$.fn.anythingSlider = function(options) {

		// initialize the slider
		if ((typeof(options)).match('object|undefined')){
			return this.each(function(i){
				if ($(this).is('.anythingBase')) { return; } // prevent multiple initializations
				(new $.anythingSlider(this, options));
			});

		// If options is a number, process as an external link to page #: $(element).anythingSlider(#)
		} else if (/\d/.test(options) && !isNaN(options)) {
			return this.each(function(i) {
				var anySlide = $(this).data('AnythingSlider');
				if (anySlide) {
					var page = (typeof(options) == "number") ? options : parseInt($.trim(options),10); // accepts "  2  "
					// ignore out of bound pages
					if ( page < 1 || page > anySlide.pages ) { return; }
					anySlide.gotoPage(page);
				}
			});
		}

	};

})(jQuery);