<?php
require '../includes/db_connection.php';
if (isset($_REQUEST['topic'])) {
    $get_topic = $_REQUEST['topic'];

    $query_topic = $db->prepare("SELECT * FROM `main_category` WHERE `main_category_name` LIKE '%$get_topic%'");
    $query_topic->execute();

    if ($query_topic->rowCount() > 0) {
        $row = $query_topic->fetchAll(PDO::FETCH_OBJ);

        print_r(json_encode($row));
    }
}
?>