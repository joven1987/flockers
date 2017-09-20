<?php
session_start();
$user_id = $_SESSION['user_id'];
require '../db_connection.php';


if (isset($_GET['send'])) {
    $to_user_id = $_GET['to_user_id'];
    $date_sent = date("Y-m-d h:i:s");
    $message = $_GET['message'];

    $query = $db->prepare("INSERT INTO `personal_message` (`from_user_id`, `to_user_id`, `date_sent`, `message`) VALUES(?, ?, ?, ?)");
    $query->bindParam(1, $user_id);
    $query->bindParam(2, $to_user_id);
    $query->bindParam(3, $date_sent);
    $query->bindParam(4, $message);
    $query->execute();
    if ($query->rowCount() == 1) {
        $data = '[{"from_user_id":"'.$user_id.'", "to_user_id":"'.$to_user_id.'", "date_sent":"'.$date_sent.'", "message":"'.$message.'"}]';
        echo $data;
    }
}
?>