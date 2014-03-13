
//MDN PolyFil for IE8 (This is not needed if you use the jQuery version)
if (!Array.prototype.forEach){
	Array.prototype.forEach = function(fun /*, thisArg */){
	  "use strict";
	  if (this === void 0 || this === null || typeof fun !== "function") throw new TypeError();
	  
	  var
	    t = Object(this),
	    len = t.length >>> 0,
	    thisArg = arguments.length >= 2 ? arguments[1] : void 0;

	  for (var i = 0; i < len; i++)
	    if (i in t)
	      fun.call(thisArg, t[i], i, t);
	};
}

if (typeof themio_options.content[0].div === "undefined") {

  themio_options.content[0].div = 'themio_content';
}

for (var idx in themio_options.content) {

	var src = '//' + themio_options.account + '.them.dev/embed/' + themio_options.content[idx].id;

	//console.log(src);

	var elem = '<iframe id="' + themio_options.content[idx].id + '" src="' + src + '" allowtransparency="true" frameborder="0" tabindex="0" title="Them.io Poll" scrolling="no" horizontalscrolling="no" verticalscrolling="no" width="100%" height="50px" style="width: 100% !important; scrollHeight: 50px !important; border: none !important; overflow: hidden !important; !important;"></iframe>';

	document.getElementById(themio_options.content[idx].div).innerHTML += elem;
}

!function(){"use strict";function a(a,b,c){"addEventListener"in window?a.addEventListener(b,c,!1):"attachEvent"in window&&a.attachEvent("on"+b,c)}function b(){var a,b=["moz","webkit","o","ms"];for(a=0;a<b.length&&!window.requestAnimationFrame;a+=1)window.requestAnimationFrame=window[b[a]+"RequestAnimationFrame"];window.requestAnimationFrame||(c(" RequestAnimationFrame not supported"),window.requestAnimationFrame=function(a){a()})}function c(a){k.log&&"console"in window&&console.log(i+"[Host page]"+a)}function d(a){function b(){function a(a){window.requestAnimationFrame(function(){l.iframe.style[a]=l[a]+"px",c(" IFrame ("+l.iframe.id+") "+a+" set to "+l[a]+"px")})}k.sizeHeight&&a("height"),k.sizeWidth&&a("width")}function d(a){c("iFrame "+a.id+" removed."),a.parentNode.removeChild(a)}function e(){var a=h.substr(j).split(":");return{iframe:document.getElementById(a[0]),height:a[1],width:a[2],type:a[3]}}function f(){"close"===l.type?d(l.iframe):b()}function g(){return i===""+h.substr(0,j)}var h=a.data,l={};g()&&(l=e(),f(),k.callback(l))}function e(){function b(a){return""===a&&(g.id=a="iFrameSizer"+h++,c(" Added missing iframe ID: "+a)),a}function d(){c(" IFrame scrolling "+(k.scrolling?"enabled":"disabled")+" for "+j),g.style.overflow=!1===k.scrolling?"hidden":"auto",g.scrolling=!1===k.scrolling?"no":"yes"}function e(a){var b=j+":"+k.contentWindowBodyMargin+":"+k.sizeWidth+":"+k.log+":"+k.interval+":"+k.enablePublicMethods+":"+k.autoResize;c("["+a+"] Sending init msg to iframe ("+b+")"),g.contentWindow.postMessage(i+b,"*")}function f(){a(g,"load",function(){e("iFrame.onload")}),e("init")}var g=this,j=b(g.id);d(),f()}function f(){function a(a){if("IFRAME"!==a.tagName)throw new TypeError("Expected <IFRAME> tag, found <"+a.tagName+">.");e.call(a)}function b(a){if(a=a||{},"object"!=typeof a)throw new TypeError("Options is not an object.");for(var b in l)l.hasOwnProperty(b)&&(k[b]=a[b]||l[b])}window.iFrameResize=function(c,d){b(c),Array.prototype.forEach.call(document.querySelectorAll(d||"iframe"),a)}}function g(){jQuery.fn.iFrameResize=function(a){return k=$.extend({},l,a),this.filter("iframe").each(e).end()}}var h=0,i="[iFrameSizer]",j=i.length,k={},l={autoResize:!0,contentWindowBodyMargin:8,sizeHeight:!0,sizeWidth:!1,enablePublicMethods:!1,interval:32,log:!1,scrolling:!1,callback:function(){}};b(),a(window,"message",d),f(),"jQuery"in window&&g()}();

iFrameResize();


