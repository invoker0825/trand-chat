<?php if(canPrivate() && userCanPrivate($boom) && !mySelf($boom['user_id']) && !ignoring($boom) && insideChat($boom['cpage'])){ ?>
<div data="<?php echo $boom['user_id']; ?>" value="<?php echo $boom['user_name']; ?>" data-av="<?php echo myAvatar($boom['user_tumb']); ?>" class="gprivate sub_list_item bbackhover action_item">
	<div class="sub_list_icon"><i class="fa fa-comments"></i></div>
	<div class="sub_list_content"><?php echo $lang['private']; ?></div>
</div>
<?php } ?>
<?php if(canFriend($boom) && !ignored($boom) && !ignoring($boom) && isMember($data) && isMember($boom)){ ?>
<div onclick="addFriend(<?php echo $boom['user_id']; ?>);" class="sub_list_item bbackhover action_item">
	<div class="sub_list_icon"><i class="fa fa-user-plus success"></i></div>
	<div class="sub_list_content"><?php echo $lang['add_friend']; ?></div>
</div>
<?php } ?>
<?php if(!canFriend($boom) && !ignored($boom) && !ignoring($boom) && isMember($data) && isMember($boom)){ ?>
<div onclick="unFriend(<?php echo $boom['user_id']; ?>);" class="sub_list_item bbackhover action_item">
	<div class="sub_list_icon"><i class="fa fa-user-times error"></i></div>
	<div class="sub_list_content"><?php echo $lang['unfriend']; ?></div>
</div>
<?php } ?>
<?php if(canSendGift($boom)){ ?>
<div onclick="openSendGift(<?php echo $boom['user_id']; ?>);" class="sub_list_item bbackhover action_item">
	<div class="sub_list_icon"><i class="fa fa-gift"></i></div>
	<div class="sub_list_content"><?php echo $lang['send_gift']; ?></div>
</div>
<?php } ?>
<?php if(canShareGold($boom)){ ?>
<div onclick="openShareGold(<?php echo $boom['user_id']; ?>);" class="sub_list_item bbackhover action_item">
	<div class="sub_list_icon"><i class="fa fa-share"></i></div>
	<div class="sub_list_content"><?php echo $lang['gold_share']; ?></div>
</div>
<?php } ?>
<?php if(!ignoring($boom) && canIgnore($boom)){ ?>
<div onclick="ignoreUser(<?php echo $boom['user_id']; ?>);" class="sub_list_item bbackhover action_item">
	<div class="sub_list_icon"><i class="fa fa-ban error"></i></div>
	<div class="sub_list_content"><?php echo $lang['ignore']; ?></div>
</div>
<?php } ?>
<?php if(ignoring($boom)){ ?>
<div onclick="unIgnore(<?php echo $boom['user_id']; ?>);" class="sub_list_item bbackhover action_item">
	<div class="sub_list_icon"><i class="fa fa-ban success"></i></div>
	<div class="sub_list_content"><?php echo $lang['unignore']; ?></div>
</div>
<?php } ?>