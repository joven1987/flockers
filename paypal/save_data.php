<?php

require "../db_connection.php";
    $u_id = '2';
    $s_id = '2';
    $query = $dbConnection->prepare("INSERT INTO `user_interest`(`user_id`, `sub_category_id`) VALUES(?,?)");
        $query->bindParam(1, $u_id);
        $query->bindParam(2, $s_id);
    $query->execute();
?>