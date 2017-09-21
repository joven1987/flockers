<?php
require "../../db_connection.php";
function get_event_data($event_id, $db) {
    $get_event_data = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
    $get_event_data->bindParam(1, $event_id);
    $get_event_data->execute();
    $event_data = $get_event_data->fetch(PDO::FETCH_OBJ);
    return $event_data;
}

function get_interest_data($interest_id, $db) {
    $i_id = explode(",", $interest_id);
    $i_name = '';

    foreach ($i_id as $key=>$value) {
        $get_interest_data = $db->prepare("SELECT * FROM `interest` WHERE `id`=?");
        $get_interest_data->bindParam(1, $value);
        $get_interest_data->execute();
        $interest_data = $get_interest_data->fetch(PDO::FETCH_OBJ);
        $i_name .= $interest_data->interest_name . ' | ';
    }

    return $i_name;
}

function get_interest_id($interest_id, $db) {

}

if (isset($_POST['request']) == 'event_id') {
    $event_id = $_POST['event_id'];
    $get_event_data = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
    $get_event_data->bindParam(1, $event_id);
    $get_event_data->execute();
    $event_data = $get_event_data->fetch(PDO::FETCH_OBJ);
    echo json_encode($event_data);
}
?>

