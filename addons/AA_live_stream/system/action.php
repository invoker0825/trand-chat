<?php
$load_addons = "AA_live_stream";
require_once "../../../system/config_addons.php";
if (isset($_POST["EndUserLiveW"]) && isset($_POST["id"])) {
    if (!boomAllow(8)) {
        exit;
    }
    $id = escape($_POST["id"]);
    $mysqli->query("UPDATE boom_users set user_live = 0 WHERE user_id = '" . $id . "'");
    $mysqli->query("UPDATE boom_users set user_action = user_action + 1 WHERE user_id = '" . $id . "'");
    echo 1;
    exit;
}
if (isset($_POST["delAllow"]) && isset($_POST["id"])) {
    $id = escape($_POST["id"]);
    $mysqli->query("DELETE FROM live_stream WHERE tid = '" . $id . "' && uid = '" . $data["user_id"] . "'");
    echo 1;
    exit;
}
if (isset($_POST["endUserliveSt"])) {
    $mysqli->query("UPDATE boom_users set user_live = 0 WHERE user_id = '" . $data["user_id"] . "'");
    echo 1;
    exit;
}
if (isset($_POST["set_show_live_access"]) && isset($_POST["set_addon_access"]) && isset($_POST["set_room_name"]) && isset($_POST["set_user_list"])) {
    echo addonaccesslive();
    exit;
}
if (isset($_POST["addAllow"]) && isset($_POST["id"])) {
    echo addallowlive();
    exit;
}
if (isset($_POST["userlive"])) {
    echo usersendlive();
    exit;
}
if (isset($_POST["acAllow"]) && isset($_POST["id"])) {
    echo acallowlive();
    exit;
}
function addonAccessLive()
{
    global $mysqli;
    global $data;
    global $lang;
    if (!boomAllow(8)) {
        exit;
    }
    $addon_access = escape($_POST["set_addon_access"]);
    $set_room_name = escape($_POST["set_room_name"]);
    $set_user_list = escape($_POST["set_user_list"]);
    $set_show_live_access = escape($_POST["set_show_live_access"]);
    $mysqli->query("UPDATE boom_addons set addons_access = '" . $addon_access . "' , custom1 = '" . $set_room_name . "', custom2 = '" . $set_user_list . "', custom3 = '" . $set_show_live_access . "' WHERE addons = 'AA_live_stream'");
    return 1;
}
function userSendlive()
{
    global $mysqli;
    global $data;
    global $lang;
    $mysqli->query("UPDATE boom_users set user_live = 1 WHERE user_id = '" . $data["user_id"] . "'");
    $star_live = str_ireplace(["@target@"], [$data["user_name"]], " " . $lang["live_start3"] . "<b style=\"color:blue;\">[ @target@ ]</b> " . $lang["live_start1"] . " <b onclick=\"addAllow(" . $data["user_id"] . ");\" style=\"color:red;\">[ " . $lang["live_start2"] . " ]</b>");
    if ($data["custom2"] == 1 && $data["user_live"] == 0) {
        systemPostChat($data["user_roomid"], $star_live);
    }
    return 1;
}
function acAllowLive()
{
    global $mysqli;
    global $data;
    global $lang;
    $id = escape($_POST["id"]);
    $mysqli->query("UPDATE live_stream set type = 1 , tid = '" . $data["user_id"] . "' , uid = '" . $id . "' WHERE tid = '" . $id . "' && uid = '" . $data["user_id"] . "'");
    return 1;
}
function addAllowLive()
{
    global $mysqli;
    global $data;
    global $lang;
    $id = escape($_POST["id"]);
    $user = findAllowUser($id);
    if (!empty($user)) {
        echo 2;
        exit;
    }
    $mysqli->query("INSERT INTO `live_stream` (`uid`,`tid`,`type`) VALUES ('" . $id . "','" . $data["user_id"] . "','0');");
    return 1;
}

?>