<?php
require '../../db_connection.php';
if (isset($_GET['event_id'])) {
    $txt = [];
    $event_id = $_GET['event_id'];
    $query = $db->prepare("SELECT * FROM `event` JOIN `venue` ON `event`.`event_id`=`venue`.`event_id` WHERE `event`.`event_id`=?");
    $query->bindParam(1, $event_id);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    $time_start = date("h:i:s A", strtotime($row["event_start_time"]));
    $time_end = date("h:i:s A", strtotime($row["event_end_time"]));
    array_push($row, $row["time_start"] = $time_start, $row["time_end"] = $time_end);
    array_push($txt, $row);

    echo json_encode($txt);
}
?>