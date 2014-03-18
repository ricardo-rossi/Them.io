<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">  
	<title>{{ $poll->slug }}</title>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background-color:lightgray;">
poll = {{ $poll->slug }}
<?php

for ($i=0; $i < rand(30,1000); $i++) { 
 echo "lorem "; 
}
?>
{{ Form::open() }}
{{ Form::submit() }}
{{ Form::close() }}
<script>
!function(){"use strict";function a(a,b){"addEventListener"in window?window.addEventListener(a,b,!1):"attachEvent"in window&&window.attachEvent("on"+a,b)}function b(a){return o+"["+q+"] "+a}function c(a){n&&"console"in window&&console.log(b(a))}function d(a){"console"in window&&console.warn(b(a))}function e(b){function e(){function d(){function a(a){return"true"===a?!0:!1}var c=b.data.substr(p).split(":");q=c[0],h=parseInt(c[1],g),i=void 0!==c[2]?a(c[2]):!1,n=void 0!==c[3]?a(c[3]):!1,l=void 0!==c[4]?parseInt(c[4],g):33,r=void 0!==c[5]?a(c[5]):!1,f=void 0!==c[6]?a(c[6]):!0,s=b.source}function e(){document.body.style.margin=h+"px",c("Body margin set to "+h+"px")}function j(){document.documentElement.style.height="auto",document.body.style.height="auto",c('HTML & body height set to "auto"')}function k(){a("resize",function(){u("resize","Window resized")})}function m(){!0===f?(k(),x()):c("Auto Resize disabled")}c("Initialising iFrame"),d(),e(),j(),v(),m()}function u(a,b,d,e){function f(a){return document.body["offset"+a]+2*h}function g(){c("Trigger event ("+b+") cancelled"),setTimeout(function(){m=a},50)}function k(){c("Trigger event: "+b),m=a}function l(){var b=q+":"+j+":"+t+":"+a;c("Sending msg to host page ("+b+")"),s.postMessage(o+b,"*")}function n(){j=p,t=r,k(),l()}var p=void 0!==d?d:f("Height"),r=void 0!==e?e:f("Width");m in{size:1,interval:1}&&"resize"===a?g():(j!==p||i&&t!==r)&&n()}function v(){r&&(c("Enabling public methods"),window.parentIFrame=window.iFrameSizer={size:function(a,b){var c=""+(a?a:"")+(b?","+b:"");u("size","window.parentIFrame.size("+c+")",a,b)},close:function(){u("close","window.parentIFrame.close()",0,0)}})}function w(){0!==l&&(c("setInterval: "+l+"ms"),setInterval(function(){u("interval","setInterval: "+l)},Math.abs(l)))}function x(){function a(){var a=document.querySelector("body"),d={attributes:!0,attributeOldValue:!1,characterData:!0,characterDataOldValue:!1,childList:!0,subtree:!0},e=new b(function(a){a.forEach(function(a){u("mutationObserver","mutationObserver: "+a.target+" "+a.type)})});c("Setup MutationObserver"),e.observe(a,d)}var b=window.MutationObserver||window.WebKitMutationObserver;b?0>l?w():a():(d("MutationObserver not supported in this browser!"),w())}function y(){return o===""+b.data.substr(0,p)}y()&&k&&(e(),u("init","Init message from host page"),k=!1)}var f=!0,g=10,h=0,i=!1,j=1,k=!0,l=32,m="",n=!1,o="[iFrameSizer]",p=o.length,q="",r=!1,s=null,t=1;try{a("message",e)}catch(u){d(u)}}();
</script>
</body>
</html>
