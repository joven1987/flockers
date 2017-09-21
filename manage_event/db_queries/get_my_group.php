<?php
session_start();
require '../../db_connection.php';
$user_id = $_SESSION['user_id'];
if (isset($_GET['get_group'])){
    $query = $db->prepare("SELECT * FROM `group_flockers` WHERE `admin_user_id`=?");
    $query->bindParam(1, $user_id);
    $query->execute();
    if ($query->rowCount() > 0) {
        $row = $query->fetchAll(PDO::FETCH_OBJ);
        echo json_encode($row);
    }
}
if (isset($_GET['reg_group'])) {
    $group_id = $_GET['group_id'];
    $query = $db->prepare("SELECT * FROM `group_flockers` JOIN `group_member` ON `group_flockers`.`id`=`group_member`.`group_id` JOIN `users` ON `group_member`.`user_id`=`users`.`id`  WHERE `group_flockers`.`id`=? AND `group_flockers`.`admin_user_id`=?");
    $query->bindParam(1, $group_id);
    $query->bindParam(2, $user_id);
    $query->execute();
    $row = $query->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($row);
}
?>