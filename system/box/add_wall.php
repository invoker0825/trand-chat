<?php
require('../config_session.php');

if(!useWall() || muted()){
	echo 0;
	die();
}
?>
<div class="modal_content">
	<div class="modal_title">
		<?php echo $lang['start_new_post']; ?>
	</div>
	<div class="post_input_container">
		<textarea onkeyup="textArea(this, 120);" id="friend_post" spellcheck="false" maxlength="500" placeholder="<?php echo $lang['type_something']; ?>" class="full_textarea" ></textarea>
		<div id="post_file_data" class="pad10 main_post_data tborder hidden" data-key="">
		</div>
		<div id="post_emo" class="post_emo_content hidden vpad5 back_box tborder">
			<?php echo listSmilies(3); ?>
		</div>
	</div>
	<div class="main_post_control">
		<div class="main_post_item" onclick="getWallOptions();">
			<i class="fa fa-cog"></i>
		</div>
		<div class="bcell_mid">
			<div id="comment_lock" value="1" class="hidden"></div>
			<div id="like_lock" value="1" class="hidden"></div>
		</div>
		<div class="main_post_item" onclick="showPostEmoticon();">
			<i class="fa fa-smile-o"></i>
		</div>
		<?php if(canUploadWall()){ ?>
		<div class="main_post_item">
			<i class="fa fa-paperclip"></i>
			<input id="wall_file" onchange="uploadWall();" type="file"/>
		</div>
		<?php } ?>
		<div class="main_post_item" onclick="postWall();">
			<i class="fa fa-send default_color"></i>
		</div>
	</div>
</div>