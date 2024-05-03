<li class="other_logs splog w_box back_theme">
	<div class="avtrig chat_avatar" onclick="getProfile(<?php echo $boom['user_id']; ?>)">
		<img class="cavatar avav" src="<?php echo myavatar($boom['user_tumb']); ?>"/>
	</div>
    <div class="my_text">
		<div class="btable">
			<div class="cname w_tname" onclick="whisper(this);" data="<?php echo $boom['user_id']; ?>" value="<?php echo $boom['user_name']; ?>">
				<?php echo $boom['user_name']; ?> <i class="fa fa-reply"></i> <?php echo $lang['whisper_reply']; ?>
			</div>
		    <div onclick="hideThisPost(this)"; class="spclear"><i class="fa fa-times"></i></div>
		 </div>
		<div class="chat_message text_small sptext">
			<span class="my_notice"><?php echo $data['user_name']; ?></span>  <?php echo systemReplace($boom['message']); ?>
		</div>
	</div>
</li>