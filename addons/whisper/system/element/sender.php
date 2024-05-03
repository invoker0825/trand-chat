<li class="other_logs splog w_box back_theme">
	<div class="avtrig chat_avatar" onclick="getProfile(<?php echo $boom['user_id']; ?>)">
		<img class="cavatar avav" src="<?php echo myavatar($boom['user_tumb']); ?>"/>
	</div>
    <div class="my_text">
		<div class="btable">
			<div class="cname w_tname">
				<?php echo base64_decode($boom['user_name']); ?> 
			</div>
		    <div onclick="hideThisPost(this)"; class="spclear"><i class="fa fa-times"></i></div>
		 </div>
		<div class="chat_message text_small sptext">
			<?php echo systemReplace($boom['message']); ?>
		</div>
	</div>
</li>