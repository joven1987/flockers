<?php
session_name();
/*require '../db_connection.php';
$ie_id = '1,9';
echo count_notification($db, $ie_id, 0);*/

$_SESSION['user_id'] = 1;


function count_notification($db, $ie_id, $return_condition) {
    $query = $db->prepare("SELECT * FROM `event`");
    $query->execute();

    $return_e_id = '';
    $return_count = false;
    $count = 0;
    $status = '';
    $i_id = explode(',', $ie_id);
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
        $get_i_id = $row->interest_id;
        $exp_i_id = explode(',', $get_i_id);
            foreach ($i_id as $key1 => $value1) {
                foreach ($exp_i_id as $key2 => $value2) {
                    if ($value1 == $value2) {
                        $status = set_seen_status_zero($db, $row->event_id);
                        if ($status == 0) {
                            $return_count = true;
                            break;
                        }
                    }
                }
            }
        if ($return_count == true) {
            $count++;
            $return_e_id .= $row->event_id .',';
            $return_count = false;
        }

    }
    $ids = json_encode(rtrim($return_e_id, ','));
    if($return_condition == 1) {
        return $count;
    }else if($return_condition == 0){
        return $ids;
    }
}
?>
<?php
function set_seen_status_zero($db, $event_id) {
    $user_id = $_SESSION['user_id'];
    $seen_status = 0;
    $query = $db->prepare("SELECT * FROM `event_user_notification` WHERE `event_id`=? AND `user_id`=?");
    $query->bindParam(1, $event_id);
    $query->bindParam(2, $user_id);
    $query->execute();

    if ($query->rowCount() == 0) {
        $insert=$db->prepare("INSERT INTO `event_user_notification` (`event_id`, `user_id`, `seen_status`) VALUES(?, ?, ?)");
        $insert->bindParam(1, $event_id);
        $insert->bindParam(2, $user_id);
        $insert->bindParam(3, $seen_status);
        $insert->execute();
        return 0;
    }else if($query->rowCount() == 1) {
        $seen_status = $query->fetch(PDO::FETCH_OBJ);
        if ($seen_status->seen_status == 0) {
            return 0;
        }else if($seen_status->seen_status == 1) {
            return 1;
        }

    }
}
?>

<?php
function get_event_details($db, $ie_id) {
    $e_id = str_replace('"', '', $ie_id);
    $event_id = explode(',', $e_id);
    $return_txt = '';
    foreach ($event_id as $key => $value) {
        $query = $db->prepare("SELECT * FROM `event` WHERE `event_id`= ?");
        $query->bindParam(1, $value);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_OBJ);

        $return_txt .=
            '<li >' .
            '<a href="../manage_event/event_details.php?notify=true&&event_id='.$row->event_id.'">'.
            '<span class="image"><img src="../images/img.jpg"  /></span >' .
            '<span >' .
            '<span >' .
            $row->event_title .
            '</span >' .
            '<span class="time" >3 mins ago</span >' .
            '</span >' .
            '<span class="message" >' .
            '</span >' .
            '</a >' .
            '</li >';

    }
    return $return_txt;

}

//}
?>
