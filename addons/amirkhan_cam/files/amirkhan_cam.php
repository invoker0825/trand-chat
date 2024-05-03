<?php if(boomAllow($addons['addons_access'])){ ?>
<script data-cfasync="false" type="text/javascript">
$(document).ready(function() {
	appLeftMenu('camera', 'video-cam', 'amirkhancam();');
});

amirkhancam = function() {
		$('#small_modal').resizable();
	$('#small_modal').draggable();
    $.post('addons/amirkhan_cam/system/AKC_template.php', {
		}, function(response) {
			showModal(response, 500);
	});
}
</script>
<?php } ?>