<?php
require "../db_connection.php";

$query = $db->prepare("SELECT * FROM `event` JOIN `venue` ON `event`.`event_id`=`venue`.`event_id`");
$query->execute();
$row = $query->fetchAll(PDO::FETCH_OBJ);

print_r(json_encode($row));
?>