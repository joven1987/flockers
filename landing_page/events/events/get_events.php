<?php
require 'db_connection.php';

$query = $db->prepare("SELECT * FROM `event` join `venue` ON `event`.`event_id`=`venue`.`event_id`");
$query->execute();
$txt = [];
while($row = $query->fetch(PDO:: FETCH_ASSOC)) {
	$time_start = date("h:i:s A", strtotime($row['event_start_time']));
	$time_end = date("h:i:s A", strtotime($row["event_end_time"]));
	array_push($row, $row['start_time'] = $time_start, $row["end_time"] = $time_end);
	array_push($txt, $row);
}

echo json_encode($txt);
?>