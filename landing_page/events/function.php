<?php 
require '../../connection.php';
function get_event_data($event_id) {
	$query = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
	$query->bindParam(1, $event_id);
	$query->execute();
	$query_get_data = $query->fetch(PDO:: FETCH_OBJ);
	
	return $query_get_data;
}
?>