<?php
$load_addons = 'quizbot';
require('../../../system/config_addons.php');

if(!canManageAddons()){
	die();
}
?>
<style>
</style>
<?php echo elementTitle($addons['addons'], 'loadLob(\'admin/setting_addons.php\');'); ?>
<div class="page_full">
	<div class="page_element">
		<div class="config_section">
			<div class="setting_element ">
				<p class="label"><?php echo $lang['status']; ?></p>
				<select id="set_quiz_status">
					<?php echo onOff($addons['custom2']); ?>
				</select>
			</div>
			<div class="setting_element ">
				<p class="label"><?php echo $lang['room']; ?></p>
				<select id="set_quiz_room">
					<?php echo roomSelect($addons['custom1']); ?>
				</select>
			</div>
			<div class="setting_element ">
				<p class="label"><?php echo $lang['quiz_type']; ?></p>
				<select id="set_quiz_type">
					<?php echo quizType($addons['custom3']); ?>
				</select>
			</div>
			<div class="setting_element ">
				<p class="label"><?php echo $lang['quiz_file']; ?></p>
				<select id="set_quiz_file">
					<?php echo listQuiz($addons['custom4']); ?>
				</select>
			</div>
			<div class="setting_element ">
				<p class="label"><?php echo $lang['scramble_file']; ?></p>
				<select id="set_scramble_file">
					<?php echo listScramble($addons['custom5']); ?>
				</select>
			</div>
			<button id="save_quizbot" onclick="saveQuizbot();" type="button" class="tmargin10 reg_button theme_btn"><i class="fa fa-floppy-o"></i> <?php echo $lang['save']; ?></button>
			<button id="reset_quizbot" onclick="resetScore();" type="button" class="tmargin10 reg_button default_btn"><i class="fa fa-eraser"></i> <?php echo $lang['reset_score']; ?></button>
		</div>
		<div class="config_section">
			<script data-cfasync="false">
				saveQuizbot = function(){
					$.post('addons/quizbot/system/action.php', {
						save: 1,
						id: $('#set_quiz_name').attr('data'),
						room: $('#set_quiz_room').val(),
						status: $('#set_quiz_status').val(),
						type: $('#set_quiz_type').val(),
						quiz_file: $('#set_quiz_file').val(),
						scramble_file: $('#set_scramble_file').val(),
						}, function(response) {
							if(response == 5){
								callSuccess(system.saved);
							}
							else{
								callError(system.error);
							}
					});	
				}
				resetScore = function(){
					$.post('addons/quizbot/system/reset_score.php', {
						}, function(response) {
							showModal(response);
					});	
				}
				confirmQuizbotReset = function(){
					$.post('addons/quizbot/system/action.php', {
						reset_score: 1,
						}, function(response) {
							if(response == 1){
								callSuccess(system.actionComplete);
								hideModal();
							}
							else {
								callError(system.error);
								hideModal();
							}
					});
				}
			</script>
		</div>
	</div>
</div>
