<script data-cfasync="false" type="text/javascript">
$(document).ready(function(){
reloadCss = function(addFile){
	$('head').append('<link rel="stylesheet" href="'+addFile+'?v='+Math.random()+'" type="text/css" />');
}
});
</script>
<?php if(boomAllow($addons['addons_access'])){ ?>
<input id="live_nick_gif_file" class="hidden" onchange="uploadLiveNickGif();" type="file"  accept="image/*"/>
<script data-cfasync="false" type="text/javascript">
$(document).ready(function(){
appInputMenu('addons/<?php echo $addons['addons']; ?>/files/icon.png', 'liveNickBox();');
liveNickBox = function(){
	$.post('addons/<?php echo $addons['addons']; ?>/system/action.php', {
		get_box: 1
		}, function(response) {
			showModal(response,400);
			setTimeout(function() {
				loadGlitters();
			}, 1000);
	});
}
loadGlitters = function(){
	if($('#ln_loader').is(':hidden')) $('#ln_loader').show();		
	$.ajax({
		url: "addons/<?php echo $addons['addons']; ?>/system/action.php",
		type: "post",
		cache: false,
			data: {
				load_glitter: 1
			},
			success: function(response){
				if (response == '') {
					$('#ln_loader').hide();
					$('#glitters').html(noDataTemplate());
				} else {
	                $('#ln_loader').hide();	
					$('#glitters').html(response);
					$('.ln_controls').show();
					$('#glitters').show();
				}
			},
	});
}
setLiveNickOptions = function(val){
	$('#preview_text').attr('style','');
	$('#preview_text').attr('style', 'background-image: url(addons/<?php echo $addons['addons']; ?>/files/glitter/'+ val +'.gif); -webkit-background-clip: text;color: transparent; background-size: 100% 100%');
}
setLiveNickCustomOptions = function(val){
	$('#preview_text').attr('style','');
	$('#preview_text').attr('style', 'background-image: url(upload/upload/'+ val +'); -webkit-background-clip: text;color: transparent; background-size: 100% 100%');
}
saveNickLive = function(){
	var newBg = $('.bgnick_choices').attr('data');
	$.post('addons/<?php echo $addons['addons']; ?>/system/action.php', {
		save_nick_bg: newBg,
		token: utk,
		}, function(response) {
			if(response == 1){
				hideModal();
			} else { 
			    callSaved(system.error, 3);
			}
			reloadCss('addons/<?php echo $addons['addons']; ?>/files/custom.css'); 
			userReload(1);
	    });
}
resetNickLiveColorSettings = function(){
	startLoadingBar();
	$.post('addons/<?php echo $addons['addons']; ?>/system/action.php', {
		reset_settings: 1,
		token: utk,
		}, function(response) {
			if(response == 1){
				$('#preview_text').attr('class','user');
				reloadCss('addons/<?php echo $addons['addons']; ?>/files/custom.css'); 
			    userReload(1);
				hideModal();
			} 
	    });
}
$(document).on('click', '.live_nick_choice', function() {	
		var curColor = $(this).attr('data');
		if($('.bgnick_choices').attr('data') == curColor){
			$('.bccheck').remove();
			$('#preview_text').attr('style', '');
		}
		else {
			$('.bccheck').remove();
			$(this).append('<i class="bccheck nick_bg_check fa fa-check"></i>');
			$('.bgnick_choices').attr('data', curColor);
		    setLiveNickOptions(curColor);
		}
});

selectNickGif = function(){
  $("#live_nick_gif_file").click();
}
var waitUpload = 0;
uploadLiveNickGif = function(){
	var file_data = $("#live_nick_gif_file").prop("files")[0];
	var filez = ($("#live_nick_gif_file")[0].files[0].size / 1024).toFixed(2);
	if( filez > <?php echo $addons['custom3']; ?> ){
		callSaved(system.fileBig, 3);
	}
	else if($("#live_nick_gif_file").val() === ""){
		callSaved(system.noFile, 3);
	}
	else {
		if(waitUpload == 0){
			waitUpload = 1;
			$('#customgif').html('<i class="fa-spinner fa fa-spin"></i>');
			var form_data = new FormData();
			form_data.append("file", file_data)
			form_data.append("token", utk)
			form_data.append("upload", 1)
			$.ajax({
				url: "addons/<?php echo $addons['addons']; ?>/system/action.php",
				dataType: 'json',
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				type: 'post',
				success: function(response){
					if(response.code == 1){
						callSaved(system.wrongFile, 3);
					} else if(response.code == 2) {
						$('#customgif').html('<i class="fa fa-plus"></i>');
				        reloadCss('addons/<?php echo $addons['addons']; ?>/files/custom.css'); 
			            userReload(1);
					    callSaved(system.saved, 1);
						setLiveNickCustomOptions(response.data);
						hideModal();
					}  else {
					    callSaved(system.error, 3);
					}
					waitUpload = 0;
				}
			})
		}
		else {
			return false;
		}
	}
}
});
</script>
<style><?php require_once($addons['addons'].'.css'); ?></style>
<?php } ?>
<style><?php require_once('custom.css'); ?></style>