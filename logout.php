<?php
session_start();

require 'db_connection.php';

$login_status_set = 0;
$login_status = $db->prepare("UPDATE `users` SET `login_status`=? WHERE `id`=?");
$login_status->bindParam(1, $login_status_set);
$login_status->bindParam(2, $_SESSION['user_id']);
$login_status->execute();
//$_SESSION = array();
session_destroy();
header("location: landing_page/events/events");
?>