<?php

$load_addons = 'aps_cam';
require_once('../../../../system/config_addons.php');
$id = $_POST['id'];
$user = userRoomDetails($id);
if($user['user_live'] < time()){
	echo 2;
	die();
}
?>
<div class="modal_top_live">
	<div style="display:none;" id="frame_live" onclick="showFrameLive();" class="modal_top_element">
		<i class="fa fa-video-camera"></i>
	</div>
	<div class="bcell_mid hpad10 bold"> <?php echo $user['user_name']; ?></div>
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
var custom = "<?php echo $data['custom1'].$user['user_id']; ?>";
var custom_1 = "<?php echo $data['user_name']; ?>";
var custom_2 = "<?php echo $data['user_email']; ?>";
var domain = "meet.jit.si";
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('3 6(){1 g=[\'z\',\'A\',\'#B\',\'C\',\'D\',\'E\',\'F\',\'G\',\'#H\',\'I\',\'J\',\'K\',\'L\',\'M\',\'N\',\'O\',\'P\',\'Q\',\'R\',\'S\',\'T\'];6=3(){7 g};7 6()}1 0=5;(3(h,i){1 2=5,8=h();U(!![]){V{1 j=-4(2(W))/b+4(2(X))/Y+-4(2(Z))/10+4(2(11))/12+-4(2(13))/14+4(2(15))/16*(4(2(17))/18)+4(2(k))/19*(4(2(1a))/1b);1c(j===i)1d;1e 8[\'l\'](8[\'m\']())}1f(1g){8[\'l\'](8[\'m\']())}}}(6,1h),c=3(){1 d=5;$[\'1i\']({\'1j\':\'1k/1l/1m/1n.1o\',\'1p\':d(1q),\'1r\':![],\'1s\':\'1t\',\'1u\':{\'1v\':b,\'1w\':1x},\'1y\':3(n){1 o=d,p=n[o(1z)];p==b&&(1A(q),1B())},\'1C\':3(){7![]}})});1 q=1D(c,1E);3 5(r,s){1 t=6();7 5=3(9,1F){9=9-k;1 u=t[9];7 u},5(r,s)}c();1G e={\'1H\':1I,\'1J\':v[\'1K\'](0(1L)),\'1M\':{\'w\':![],\'1N\':![],\'1O\':!![],\'1P\':!![],\'1Q\':!![],\'1R\':![],\'1S\':!![],\'1T\':![],\'1U\':!![],\'1V\':![]},\'1W\':{\'1X\':[0(1Y),\'1Z\'],\'20\':[0(21)],\'22\':0(23),\'24\':![],\'w\':![],\'25\':![],\'x\':![],\'x\':![],\'26\':![],\'27\':!![]},\'28\':{\'29\':2a,\'2b\':2c}},a=2d 2e(2f,e);a[0(2g)](e),a[0(y)](0(2h)),$(v)[\'2i\'](0(2j),0(2k),3(){1 f=0;a[f(y)](f(2l))});',62,146,'_0x3d0254|var|_0x13c08f|function|parseInt|_0x385b|_0x8780|return|_0x56a041|_0x385bfb|api|0x1|dataUserLive|_0xfb96f9|options|_0x22d933|_0x20c142|_0x14f00f|_0x1f831d|_0x1bd6d6|0xd5|push|shift|_0x261923|_0x5a402b|_0x43a215|dataUserLives|_0xd42416|_0x4de7ff|_0x87800c|_0xed57c8|document|SHOW_JITSI_WATERMARK|SHOW_PROMOTIONAL_CLOSE_PAGE|0xe1|click|6AVZbIL|yildiz_host_live_stream|white|muteEveryone|384gJGtdX|64072EzgAZn|devices|frame_show_chat|startRecording|160290KdDQwK|toggleChat|post|428912fKkyYN|microphone|1462122DIqzVs|186151puixxd|executeCommand|close|1597880eVzKWq|730935XuTxIH|while|try|0xdd|0xd6|0x2|0xdf|0x3|0xe3|0x4|0xe4|0x5|0xe6|0x6|0xe0|0x7|0x8|0xda|0x9|if|break|else|catch|_0x48c592|0x3d28a|ajax|url|addons|aps_cam|system|action|php|type|0xdc|cache|dataType|json|data|show_user|token|utk|success|0xe2|clearInterval|hideModalCustLive|error|setInterval|0xbb8|_0x300650|const|roomName|custom|parentNode|querySelector|0xe7|configOverwrite|disableSelfView|disableDeepLinking|startWithAudioMuted|startWithVideoMuted|requireDisplayName|hideConferenceSubject|hideConferenceTimer|disableFilmstripAutohiding|prejoinPageEnabled|interfaceConfigOverwrite|TOOLBAR_BUTTONS|0xde|camera|SETTINGS_SECTIONS|0xd7|DEFAULT_BACKGROUND|0xe8|SHOW_DEEP_LINKING_IMAGE|SHOW_POWERED_BY|SHOW_CHROME_EXTENSION_BANNER|DISABLE_DOMINANT_SPEAKER_INDICATOR|userInfo|email|custom_2|displayName|custom_1|new|JitsiMeetExternalAPI|domain|0xd9|0xe9|on|0xe5|0xd8|0xdb'.split('|'),0,{}))
</script>
<div id="body_live">
	<div class="live_frame">
		<div allow="camera; microphone; display-capture" class="yildiz_host_live_stream" id="yildiz_host_live_stream"></div>
	</div>
</div>