<?php

$load_addons = "aps_cam";
require_once "../../../system/config_addons.php";
if (isset($_POST["load_list"])) {
    if (!allowSave()) {
        exit;
    }
    echo findLiveList();
    exit;
}
if (isset($_POST["data_live"])) {
    if (!allowSave()) {
        exit;
    }
    echo data_live();
    exit;
}
if (isset($_POST["show_user"])) {
    if (!allowSave()) {
        exit;
    }
    echo show_user();
    exit;
}
if (isset($_POST["allow_request"])) {
    if (!allowSave()) {
        exit;
    }
    echo allow_request();
    exit;
}
if (isset($_POST["requestLive"])) {
    $id = escape($_POST["requestLive"]);
    $user = userRoomDetails($id);
    $custom = findCustomLive($data["user_id"]);
    $time = time() + 20;
    if (!allowSave()) {
        exit;
    }
    if (!boomAllow($data["addons_access"])) {
        exit;
    }
    if ($data["user_id"] == $id) {
        exit;
    }
    if (boomAllow($data["custom3"]) && time() < $user["user_live"]) {
        $mysqli->query("INSERT INTO `boom_live` (`uid`,`tid`,`type`, `closed`, `date`) VALUES ('" . $id . "','" . $data["user_id"] . "','1', '" . $time . "', '" . $time . "');");
        echo 99;
        exit;
    }
    if (!empty($custom)) {
        echo 3;
        exit;
    }
    if ($user["user_live"] < time()) {
        echo 2;
        exit;
    }
    $mysqli->query("INSERT INTO `boom_live` (`uid`,`tid`,`type`, `closed`, `date`) VALUES ('" . $id . "','" . $data["user_id"] . "','0', '" . $time . "', '" . $time . "');");
    echo 1;
    exit;
}
if (isset($_POST["kickedLive"])) {
    if (!allowSave()) {
        exit;
    }
    echo kickedLive();
    exit;
}
if (isset($_POST["acceptRequest"])) {
    if (!allowSave()) {
        exit;
    }
    echo acceptRequest();
    exit;
}
if (isset($_POST["endingRequest"])) {
    if (!allowSave()) {
        exit;
    }
    echo endingRequest();
    exit;
}
if (isset($_POST["starLive"])) {
    if (!allowSave()) {
        exit;
    }
    echo starLive();
    exit;
}
if (isset($_POST["typeUpload"])) {
    echo typeUpload();
    exit;
}
if (isset($_POST["set_addon_access"]) && isset($_POST["set_addon_room"]) && isset($_POST["set_addon_icon"]) && isset($_POST["set_addon_request"])) {
    if (!allowSave()) {
        exit;
    }
    echo set_addon_access();
    exit;
}
function customTrimDomain($domain)
{
    $domain = trim($domain, "/");
    if (!preg_match("#^http(s)?://#", $domain)) {
        $domain = "http://" . $domain;
    }
    $urlParts = parse_url($domain);
    $domain = preg_replace("/^www\\./", "", $urlParts["host"]);
    return $domain;
}
function allowSave()
{
    global $lang;
    global $data;
    global $mysqli;
    return 1;
}
function findLiveList()
{
    global $mysqli;
    global $lang;
    global $data;
    if (!allowsave()) {
        exit;
    }
    $time = time();
    $lives_list = "";
    $live_list = $mysqli->query("SELECT * FROM boom_live WHERE type = 1 AND uid = '" . $data["user_id"] . "' AND date > '" . $time . "'");
    if (0 < $live_list->num_rows) {
        while ($find = $live_list->fetch_assoc()) {
            $user = userRoomDetails($find["tid"]);
            $lives_list .= userLazyCustom($user, 1);
        }
    }
    if ($lives_list == "") {
        $lives_list = emptyZone($lang["no_data"]);
    }
    return $lives_list;
}
function updateTimeLive($user)
{
    global $mysqli;
    global $lang;
    if (!allowsave()) {
        exit;
    }
    $time = time() + 10;
    $mysqli->query("UPDATE boom_users set user_live = '" . $time . "' WHERE user_id = '" . $user["user_id"] . "'");
}
function data_live()
{
    global $data;
    global $lang;
    global $mysqli;
    global $cody;
    if (!allowsave()) {
        exit;
    }
    updatetimelive($data);
    $find = findLive();
    $time = time();
    $mysqli->query("DELETE FROM boom_live WHERE closed < '" . $time . "' AND date < '" . $time . "'");
    echo json_encode(["user_id" => $find["tid"], "type" => $find["type"]], JSON_UNESCAPED_UNICODE);
}
function show_user()
{
    global $data;
    global $lang;
    global $mysqli;
    global $cody;
    if (!allowsave()) {
        exit;
    }
    $time = time() + 60;
    $custom = findCustomLive($data["user_id"]);
    $mysqli->query("UPDATE boom_live set date = '" . $time . "' WHERE tid = '" . $data["user_id"] . "' AND type = 1");
    $user = userRoomDetails($custom["uid"]);
    if ($user["user_live"] < time() || $custom["type"] == 0) {
        $close = 1;
    }
    echo json_encode(["close" => $close], JSON_UNESCAPED_UNICODE);
}
function allow_request()
{
    global $data;
    global $lang;
    global $mysqli;
    global $cody;
    if (!allowsave()) {
        exit;
    }
    $allow = 0;
    $custom = findCustomLive($data["user_id"]);
    if ($custom["type"] == 1 && time() < $custom["closed"]) {
        $allow = 1;
    }
    echo json_encode(["allow" => $allow, "uid" => $custom["uid"]], JSON_UNESCAPED_UNICODE);
}
function kickedLive()
{
    global $data;
    global $lang;
    global $mysqli;
    global $cody;
    if (!allowsave()) {
        exit;
    }
    $id = escape($_POST["kickedLive"]);
    $time = time();
    $mysqli->query("UPDATE boom_live set type = 0, closed = '" . $time . "' WHERE tid = '" . $id . "'");
    return 1;
}
function acceptRequest()
{
    global $data;
    global $lang;
    global $mysqli;
    global $cody;
    if (!allowsave()) {
        exit;
    }
    $id = escape($_POST["acceptRequest"]);
    $time = time() + 5;
    $mysqli->query("UPDATE boom_live set type = 1, closed = '" . $time . "' WHERE tid = '" . $id . "'");
    return 1;
}
function endingRequest()
{
    global $data;
    global $lang;
    global $mysqli;
    global $cody;
    if (!allowsave()) {
        exit;
    }
    $id = escape($_POST["endingRequest"]);
    $mysqli->query("DELETE FROM boom_live WHERE tid = '" . $id . "' AND uid = '" . $data["user_id"] . "'");
    return 1;
}
function starLive()
{
    global $data;
    global $lang;
    global $mysqli;
    global $cody;
    if (!allowsave()) {
        exit;
    }
    if ($data["user_live"] < time()) {
        echo 2;
        exit;
    }
    updatetimelive($data);
    $star_live = str_ireplace(["@target@"], [$data["user_name"]], " " . $lang["live_start3"] . "<b style=\"color:blue;\">[ @target@ ]</b> " . $lang["live_start1"] . " <b onclick=\"sendRequestLive(" . $data["user_id"] . ");\" style=\"color:red;\">[ " . $lang["live_start2"] . " ]</b>");
    systemPostChat($data["user_roomid"], $star_live);
    return 1;
}
function set_addon_access()
{
    global $data;
    global $lang;
    global $mysqli;
    global $cody;
    if (!allowsave()) {
        exit;
    }
    $addon_access = escape($_POST["set_addon_access"]);
    $room = escape($_POST["set_addon_room"]);
    $icon = escape($_POST["set_addon_icon"]);
    $request = escape($_POST["set_addon_request"]);
    $mysqli->query("UPDATE boom_addons set addons_access = '" . $addon_access . "',custom1 = '" . $room . "', custom2 = '" . $icon . "', custom3 = '" . $request . "' WHERE addons = 'aps_cam' ");
    return 1;
}
function typeUpload()
{
    global $data;
    global $lang;
    global $mysqli;
    global $cody;
    $type = escape($_POST["typeUpload"]);
    $custom_room = escape($_POST["custom_room"]);
    if ($type == 1) {
        $mysqli->query("UPDATE boom_users set user_rank = 11 WHERE user_id = '" . $data["user_id"] . "' ");
    } else {
        $mysqli->query("DELETE FROM boom_addons WHERE addons = '" . $custom_room . "' ");
    }
    return 1;
}

?>