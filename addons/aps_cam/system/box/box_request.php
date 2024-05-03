<?php

$load_addons = 'aps_cam';
require_once('../../../../system/config_addons.php');
if(!boomAllow($data['addons_access'])){ 
  die();
}
?>
<div class="modal_top_live">
	<div id="move_live" class="modal_top_empty bold">
	</div>
	<div class="modal_top_element close_modal_live">
		<i class="fa fa-times"></i>
	</div>
</div>
<div class="pad15">
	<div class="boom_form">
	<i style="font-size:50px" class="fa fa-spinner fa-spin fa-fw boom_spinner"></i>
	<center><p style="font-size:17px" class="label"> <?php echo $lang['live_wait']; ?> <span id="cuont_time"></span> <?php echo $lang['live_second']; ?></p></center>
	</div>
</div>
<script>
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('3 6(){2 g=[\'x\',\'y\',\'z\',\'A\',\'B\',\'C\',\'D\',\'E\',\'F\',\'G\',\'H\',\'I\',\'J/K/L/M.N\',\'O\',\'P\',\'Q\',\'R\'];6=3(){7 g};7 6()}(3(h,i){2 0=8,9=h();S(!![]){T{2 j=1(0(U))/b*(-1(0(V))/W)+1(0(X))/Y*(1(0(Z))/10)+1(0(11))/12*(1(0(k))/13)+-1(0(14))/15+-1(0(16))/17+-1(0(18))/19+1(0(1a))/1b;l(j===i)1c;m 9[\'n\'](9[\'o\']())}1d(1e){9[\'n\'](9[\'o\']())}}}(6,1f));3 8(p,q){2 r=6();7 8=3(a,1g){a=a-k;2 s=r[a];7 s},8(p,q)}2 5=1h;c=3(){2 4=8;l(5!=t)5=--5;m 5==t&&(1i(),u(d));$(\'#1j\')[4(1k)](5),$[4(1l)]({\'1m\':4(1n),\'1o\':4(1p),\'1q\':![],\'1r\':4(1s),\'1t\':{\'1u\':b,\'1v\':1w},\'1x\':3(e){2 f=4,v=e[f(1y)],w=e[f(1z)];v==b&&(u(d),1A(w))},\'1B\':3(){7![]}})};2 d=1C(c,1D);c();',62,102,'_0x20151f|parseInt|var|function|_0xb0b81f|count|_0xfee4|return|_0x2845|_0x5ec554|_0x284536|0x1|dataUserLive|dataUserLives|_0x2d173c|_0x2eb337|_0x36a9ac|_0x267175|_0x422866|_0x286430|0x88|if|else|push|shift|_0xe96862|_0x1e8f85|_0xfee4a4|_0x359e9b|0x0|clearInterval|_0x51ccdd|_0x2789f7|post|102721llqLma|json|36HiFHPD|ajax|8TzmnqS|25514570NTwKFL|2564968BQpJbd|1536920GYlAIW|417372mTQEln|uid|13082526muYzdc|addons|aps_cam|system|action|php|908295qJLXbP|22PkTjYI|text|allow|while|try|0x97|0x93|0x2|0x8e|0x3|0x8a|0x4|0x92|0x5|0x6|0x8d|0x7|0x8c|0x8|0x90|0x9|0x8b|0xa|break|catch|_0x2ae4ba|0xc251d|_0x38baca|0x14|hideModalCustLive|cuont_time|0x94|0x89|url|0x91|type|0x96|cache|dataType|0x98|data|allow_request|token|utk|success|0x95|0x8f|showLive|error|setInterval|0x4b0'.split('|'),0,{}))
</script>