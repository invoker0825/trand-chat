<?php 
if(boomAllow($addons['addons_access'])){
require(addonsLang('whisper'));
?>

<script data-cfasync="false">
$(document).ready(function(){
    boomAddCss('addons/whisper/files/whisper.css');
    appAvMenu('other', 'hand-lizard-o theme_color','<?php echo $lang['whisper']; ?>', 'whisper(this);');
    appAvMenu('staff', 'hand-lizard-o theme_color', '<?php echo $lang['whisper']; ?>', 'whisper(this);');
     appAvMenu('roomstaff', 'hand-lizard-o theme_color', '<?php echo $lang['whisper']; ?>', 'whisper(this);');
    reset_whisper = function(){
        localStorage.setItem('wtarget', 0);
        localStorage.setItem('wtname', '');
        localStorage.setItem('wtmp', $('#content').attr("placeholder"));
    }
	
	set_whisper = function(target){
        localStorage.setItem('wtarget', $(target).attr('data'));
		localStorage.setItem('wtname', $(target).attr('value'));
		$('#content').attr('placeholder',' '+localStorage.getItem('wtname'));
		$('#content').focus(); 
    }
	
    unset_whisper = function(){
        localStorage.setItem('wtarget', 0);
        localStorage.setItem('wtname', '');
		$('#content').attr('placeholder',' '+localStorage.getItem('wtmp'));
		$('#content').focus();
    }
	
	whisper = function(target){
	    if( localStorage.getItem('wtarget') == 0 ){
			set_whisper(target);
	    } else {
		    unset_whisper();
	    }
    }
	var wWait = 0;
    $('#main_input').submit(function(event){
		var target = localStorage.getItem('wtarget');
		if(target == 0){
			return false;
		}
		var message = $('#content').val();
		$('#content').val('');
		if(message == ''){
			wWait = 0;
			event.preventDefault();
		} else if (/^\s+$/.test(message)){
			wWait = 0;
			event.preventDefault();
		} else {
			if(wWait == 0){
				wWait = 1;
				$.post('addons/whisper/system/action.php', {
					send_whisper: 1,
					target: target,
					content: message,
					token: utk,
					}, function(response) {
						if (response == 20){
				            callSaved(system.cannotContact, 3);
			            }
						else if (response == 100){
				            checkRm(2);
			            } else {
							$("#show_chat ul").append(response);
							var tname = localStorage.getItem('wtname');
						$('#show_chat ul .w_box:last .chat_message').prepend(tname+' ');
					        scrollIt(0);
						}
						unset_whisper();
						wWait = 0;
				});
			} else {
				event.preventDefault();
			}
		}
		return false;
	});

var wcount = <?php echo $data['wcount']; ?>;
getWhisper = function(){
	$.ajax({
			url: "addons/whisper/system/action.php",
			type: "post",
			cache: false,
			dataType: 'json',
			data: { 
				get_whisper: 1,
		        last: wcount,
		        token: utk
			},
			success: function(response){
				var code = response.code;
			    var count = response.count;
			    var msg = response.data;
			    if (code == 1 && count > wcount){
                    $("#show_chat ul").append(msg);
				    scrollIt(0);
				    usernamePlay();
					wcount = count;
			    }
			},
			error: function(){
				return false;
			}
		});
}

callWisper = setInterval(getWhisper, speed);
getWhisper();
reset_whisper();
});

</script>
<?php } ?>