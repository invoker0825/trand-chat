<?php

$load_addons = 'aps_cam';
require_once('../../../../system/config_addons.php');
$pass = $_POST['password_room'];
if($data['user_live'] > time()){
	echo 2;
	die();
}
?>
<div class="modal_top_live">
	<div style="display:none;" id="frame_live" onclick="showFrameLive();" class="modal_top_element">
		<i class="fa fa-video-camera"></i>
	</div>
	<div id="frame_live_users" onclick="listLive();" class="modal_top_element">
		<i class="fa fa-users"></i>
	</div>
	<div id="move_live" class="modal_top_empty bold">
	</div>
	<div class="modal_top_element">
		<i onclick="toggleLive(1);" class="fa fa-minus"></i>
	</div>
	<div class="modal_top_element close_modal_live">
		<i class="fa fa-times"></i>
	</div>
</div>
<script>
var custom = "<?php echo $data['custom1'].$data['user_id']; ?>";
var custom_1 = "<?php echo $data['user_name']; ?>";
var custom_2 = "<?php echo $data['user_email']; ?>";
var pass = "<?php echo $pass; ?>";
var domain = "meet.jit.si";
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('2 0=5;(4(i,j){2 1=5,7=i();A(!![]){B{2 k=-3(1(C))/l*(3(1(D))/E)+3(1(F))/G+-3(1(H))/I+3(1(J))/K*(-3(1(L))/M)+-3(1(N))/O*(-3(1(P))/Q)+-3(1(R))/S+3(1(T))/U*(3(1(m))/V);W(k===j)X;Y 7[\'n\'](7[\'o\']())}Z(10){7[\'n\'](7[\'o\']())}}}(8,11),c=4(){2 a=5;$[\'12\']({\'13\':\'14/15/16/17.18\',\'p\':a(19),\'1a\':![],\'1b\':a(1c),\'1d\':{\'1e\':l,\'1f\':1g},\'1h\':4(d){2 e=a,q=d[e(1i)],r=d[e(1j)];r==1k&&1l(q)},\'1m\':4(){9![]}})});4 8(){2 s=[\'1n\',\'1o\',\'1p\',\'1q\',\'1r\',\'1s\',\'#1t\',\'p\',\'1u\',\'1v\',\'1w\',\'1x\',\'1y\',\'1z\',\'1A\',\'1B\',\'1C\',\'1D\',\'1E\',\'1F\',\'1G\',\'#1H\',\'1I\',\'1J\',\'1K\',\'1L\'];8=4(){9 s};9 8()}2 1M=1N(c,1O);4 5(t,u){2 v=8();9 5=4(b,1P){b=b-m;2 w=v[b];9 w},5(t,u)}c();1Q f={\'1R\':1S,\'1T\':x[0(1U)](0(1V)),\'1W\':{\'1X\':![],\'1Y\':![],\'1Z\':!![],\'20\':!![],\'21\':!![],\'22\':![],\'23\':!![],\'24\':![],\'25\':!![],\'26\':![]},\'27\':{\'28\':[\'29\',0(2a)],\'2b\':[0(2c)],\'2d\':0(2e),\'2f\':![],\'2g\':![],\'2h\':![],\'2i\':![],\'2j\':!![]},\'2k\':{\'2l\':2m,\'2n\':2o}},6=2p 2q(2r,f);6[0(2s)](f),6[0(g)](\'2t\'),$(x)[\'2u\'](0(2v),0(2w),4(){2 h=0;6[h(g)](h(2x))});y!=\'\'&&6[\'2y\'](0(2z),4(2A){2 z=0;6[z(g)](\'2B\',y)});',62,162,'_0x1efe6c|_0x467735|var|parseInt|function|_0xaf78|api|_0x39524f|_0x4175|return|_0x1e493a|_0xaf7859|dataUserLive|_0xe0336d|_0xbf5ab7|options|0x1f6|_0x59e026|_0x5c4113|_0x5663bf|_0x5c497d|0x1|0x1f2|push|shift|type|_0x46be3c|_0x48c413|_0x326580|_0x587ba3|_0x50e891|_0x417506|_0x2731f1|document|pass|_0x2228ec|while|try|0x1f7|0x20b|0x2|0x1ff|0x3|0x1f8|0x4|0x207|0x5|0x201|0x6|0x205|0x7|0x1fa|0x8|0x208|0x9|0x206|0xa|0xb|if|break|else|catch|_0x43a07a|0x6df21|ajax|url|addons|aps_cam|system|action|php|0x203|cache|dataType|0x204|data|data_live|token|utk|success|0x1f4|0x1fc|0x0|userRequest|error|click|executeCommand|8008PeSZMB|2670432mabXxo|white|845816DyBJLB|yildiz_host_live_stream|startRecording|camera|1348146PXgXgH|devices|225510uIHArw|participantRoleChanged|post|json|7HfIcmb|10HkOTLN|5ZkPqED|4833720tbuAqt|querySelector|frame_show_chat|138cNxZsy|18590583TrmJcR|toggleChat|user_id|dataUserLives|setInterval|0xbb8|_0x20e567|const|roomName|custom|parentNode|0x209|0x1fb|configOverwrite|SHOW_JITSI_WATERMARK|disableSelfView|disableDeepLinking|startWithAudioMuted|startWithVideoMuted|requireDisplayName|hideConferenceSubject|hideConferenceTimer|disableFilmstripAutohiding|prejoinPageEnabled|interfaceConfigOverwrite|TOOLBAR_BUTTONS|microphone|0x1fe|SETTINGS_SECTIONS|0x200|DEFAULT_BACKGROUND|0x1f9|SHOW_DEEP_LINKING_IMAGE|SHOW_POWERED_BY|SHOW_PROMOTIONAL_CLOSE_PAGE|SHOW_CHROME_EXTENSION_BANNER|DISABLE_DOMINANT_SPEAKER_INDICATOR|userInfo|email|custom_2|displayName|custom_1|new|JitsiMeetExternalAPI|domain|0x1fd|muteEveryone|on|0x1f5|0x20a|0x1f3|addEventListener|0x202|_0x565df0|password'.split('|'),0,{}))
</script>
<div id="body_live">
	<div class="live_frame">
		<div allow="camera; microphone; display-capture" class="yildiz_host_live_stream" id="yildiz_host_live_stream"></div>
	</div>
	<div style="height: 300px;display: none;" class="live_users">
	</div>
</div>