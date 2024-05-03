<?php
require(__DIR__ . '/../../config_admin.php');

if(!canManageConsole()){
	die();
}
?>
<?php echo elementTitle($lang['system_logs']); ?>
<div class="page_full">
	<div class="page_element">
		<?php if(boomAllow(100)){ ?>
		<div class="bpad15">
			<button onclick="clearConsole();" class="reg_button delete_btn"><i class="fa fa-trash"></i> <?php echo $lang['clear']; ?></button>
		</div>
		<?php } ?>
		<div class="bpad15 console_logs_search">
			<input onkeyup="searchSystemConsole();" id="search_system_console" placeholder="&#xf002;" class="full_input" type="text"/>
		</div>
	</div>
	<div class="page_element">
		<div id="console_logs_box">
			<div id="console_results">
			</div>
			<div id="console_spinner" class="vpad10 centered_element">
				<i class="fa fa-circle-o-notch bspin fa-spin text_jumbo"></i>
			</div>
		</div>
	</div>
</div>