<?php
require '../db_connection.php';
if (isset($_GET['event_date'], $_GET['event_id'])){
    $event_id = $_GET['event_id'];
    $event_date = $_GET['event_date'];

    $update_event_date = $db->prepare("UPDATE `event` SET `event_date`=? WHERE `event_id`=?");
    $update_event_date->bindParam(1,$event_date);
    $update_event_date->bindParam(2,$event_id);
    $update_event_date->execute();

    if ($update_event_date->rowCount() > 0) {
        echo  1;
    }else 0;
}

if (isset($_GET['event_id'], $_GET['no_participants'])) {
    $event_id = $_GET['event_id'];
    $event_participants = $_GET['no_participants'];
    $update_event_participants = $db->prepare("UPDATE `event` SET `max_no_participants`=? WHERE `event_id`=?");
    $update_event_participants->bindParam(1,$event_participants);
    $update_event_participants->bindParam(2,$event_id);
    $update_event_participants->execute();

    if ($update_event_participants->rowCount() > 0) {
        echo  3;
    }else 4;
}

if (isset($_GET['autoDisplayNoPart'])) {
    $event_id = $_GET['event_id'];
    $get_no_part = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
    $get_no_part->bindParam(1, $event_id);
    $get_no_part->execute();
    if ($get_no_part->rowCount() > 0) {
        $num_part = $get_no_part->fetch(PDO::FETCH_OBJ);
        echo number_format($num_part->max_no_participants) .' persons';
    }
}

if (isset($_GET['autoDisplayDate'])) {
    $event_id = $_GET['event_id'];
    $get_date = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
    $get_date->bindParam(1, $event_id);
    $get_date->execute();
    if ($get_date->rowCount() > 0) {
        $num_part = $get_date->fetch(PDO::FETCH_OBJ);
        echo date("F d, Y", strtotime($num_part->event_date));
    }
}

if (isset($_GET['autoDisplayTime'])) {
    $event_id = $_GET['event_id'];
    $get_time = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
    $get_time->bindParam(1, $event_id);
    $get_time->execute();
    if ($get_time->rowCount() > 0) {
        $num_part = $get_time->fetch(PDO::FETCH_OBJ);
        echo date("h:i:s A", strtotime($num_part->event_date));
    }
}



?>