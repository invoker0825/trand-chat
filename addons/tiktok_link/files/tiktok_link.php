<?php if(boomAllow($addons['addons_access'])){ ?>
<script data-cfasync="false">
tiktokBox = function(t){
	$.post('addons/tiktok_link/system/tiktok_box.php', {
		type: t,
		token: utk,
		}, function(response) {
			showModal(response, 400);
	});
}

showTiktokVideo = function(data){
    var url = $(data).data('link');
	$.post('addons/tiktok_link/system/action.php', {
	    get_tiktok:1,
	    link: url,
		token: utk,
		}, function(response) {
			showModal(response, 400);
	});
}

sendTiktokLink = function(type){
	if (type == 1){
		 var tiktokTarget = 0;
	} else	{
		 var tiktokTarget = $('#get_private').attr('value');
	}
	$.post('addons/tiktok_link/system/action.php', {
		token: utk,
		send_tiktok: tiktokTarget,
		link: $('#share_tiktok').val(),
		}, function(response) {
			callSaved(system.saved, 1);
			hideModal();
	});
}



$(document).ready(function(){
    appInputMenu('addons/tiktok_link/files/icon.png', 'tiktokBox(1);');
    appPrivInputMenu('addons/tiktok_link/files/icon.png', 'tiktokBox(2);');
});
</script>
<?php } ?>
<script data-cfasync="false">
$(document).ready(function(){
    boomAddCss('addons/tiktok_link/files/tiktok_link.css');
});
</script>
