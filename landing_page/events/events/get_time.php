<?php
function get_event_start_time($db, $event_id) {
	$query = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
	$query->bindParam(1, $event_id);
	$query->execute();
	
	$row = $query->fetch(PDO:: FETCH_OBJ);
	
	//return date("h:i:s A",strtotime($row->event_start_time));
	return $event_id;
}

?>