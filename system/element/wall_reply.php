<div data="<?php echo $boom['reply_id']; ?>" id="wreply<?php echo $boom['reply_id']; ?>" class="reply_item">
	<div class="reply_avatar get_info" data="<?php echo $boom['user_id']; ?>">
		<img class="lazy" data-src="<?php echo myAvatar($boom['user_tumb']); ?>" src="<?php echo imgLoader(); ?>"/>
	</div>
	<div class="reply_content">
		<div class="btable">
			<div class="bcell_top maxflow">
				<p class="<?php echo myColor($boom); ?> text_small username"><?php echo $boom['user_name']; ?></p>
				<p class="text_xsmall no_break sub_date"><?php echo displayDate($boom['reply_date']); ?></p>
			</div>
			<?php if(canDeleteWallReply($boom)){ ?>
			<div onclick="openDeletePost('wall_reply', <?php echo $boom['reply_id']; ?>);" class="reply_delete bcell_top">
				<i class="fa fa-times"></i>
			</div>
			<?php } ?>
		</div>
		<div class="text_small vpad3">
		<?php echo boomPostIt($boom, $boom['reply_content']); ?>
		</div>
	</div>
</div>