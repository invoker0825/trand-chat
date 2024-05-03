<?php

function styleIcon($style = 1){
	$list = '';
	$list .= '<option ' . selCurrent($style, 1) . ' value="1">cam</option>';
	$list .= '<option ' . selCurrent($style, 2) . ' value="2">mic</option>';
	return $list;
}
function findLive(){
	global $mysqli, $data;
	$time = time();
	$custom = array();
	$getdata = $mysqli->query("SELECT * FROM boom_live WHERE uid = '{$data['user_id']}' AND type = 0 AND closed > '$time'");
	if($getdata->num_rows > 0){
		$custom = $getdata->fetch_assoc();
	}
	return $custom;
}
function findCustomLive($id){
	global $mysqli, $data;
	$custom = array();
	$getdata = $mysqli->query("SELECT * FROM boom_live WHERE tid = '$id'");
	if($getdata->num_rows > 0){
		$custom = $getdata->fetch_assoc();
	}
	return $custom;
}
function listLive(){
	global $mysqli, $lang, $data;
	$time = time();
	$lives_list = '';
	$live_list = $mysqli->query("SELECT * FROM boom_users WHERE user_live > '$time'");
	if($live_list->num_rows > 0){
		while($find = $live_list->fetch_assoc()){
			$lives_list .= userLazyCustom($find,2);
		}
	}
	if($lives_list == ''){
		$lives_list = emptyZone($lang['no_data']);
	}
	return $lives_list;
}
function userLazyCustom($user,$type){
	global $mysqli, $lang;
	if($type == 1){
		$click = '<button onclick="kickedLive('.$user['user_id'].');" class="reg_button delete_btn"><i class="fa fa-sign-out"></i> kicked</button>';
	}else{
		$click = '<button onclick="sendRequestLive('.$user['user_id'].');" class="reg_button sub_btn"><i class="fa fa-paper-plane"></i> Watch</button>';
	}
	return '<div class="ulist_item">
					<div class="ulist_avatar">
						<img onclick="getProfile('.$user['user_id'].');" class="lazyboom" data-img="'.$user['user_tumb'].'" src="'.myAvatar($user['user_tumb']).'"/>
					</div>
					<div class="ulist_name">
						<p class="username '. myColor($user) .'">'.$user['user_name'].'</p>
					</div>
					<div class="modal_top_empty bold">
					</div>
					'.$click.'
				</div>';
}
?>