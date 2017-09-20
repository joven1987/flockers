<?php
session_start();
$user_id = $_SESSION['user_id'];
require '../db_connection.php';

if (isset($_GET['users'])) {
    $login_status = 1;
    $query = $db->prepare("SELECT * FROM `users` WHERE `id` NOT IN ($user_id)");
    $query->bindParam(1, $login_status);
    $query->execute();
    $row = $query->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($row);
}

/*if (isset($_GET['message'])) {
    $to_user_id = $_GET['message'];
    $query1 = $db->prepare("SELECT * FROM `personal_message` WHERE (`from_user_id`=? AND `to_user_id`=?) OR (`from_user_id`=? AND `to_user_id`=?) ORDER BY `id` ASC");
    $query1->bindParam(1, $user_id);
    $query1->bindParam(2, $to_user_id);
    $query1->bindParam(3, $to_user_id);
    $query1->bindParam(4, $user_id);
    $query1->execute();
    if ($query1->rowCount() > 0) {
        $row = $query1->fetchAll(PDO::FETCH_OBJ);
        echo json_encode($row);
    }else {
        echo 'no message';
    }
}*/

if (isset($_GET['to_user_id'])) {
    $to_user_id = $_GET['to_user_id'];
    $last_message_id = $_GET['mess_id'];
    $query1 = $db->prepare("SELECT * FROM `personal_message` WHERE (`from_user_id`=? AND `to_user_id`=? AND `id`>?) OR (`from_user_id`=? AND `to_user_id`=? AND `id`>?) ORDER BY `id` ASC");
    $query1->bindParam(1, $user_id);
    $query1->bindParam(2, $to_user_id);
    $query1->bindParam(3, $last_message_id);
    $query1->bindParam(4, $to_user_id);
    $query1->bindParam(5, $user_id);
    $query1->bindParam(6, $last_message_id);
    $query1->execute();
    if ($query1->rowCount() > 0) {
        $row = $query1->fetchAll(PDO::FETCH_OBJ);
        echo json_encode($row);
    }else {
        echo 'no message';
    }

    //echo $_SERVER['REQUEST_URI'];
}
?>