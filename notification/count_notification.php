<?php
/*require '../db_connection.php';
$ie_id = '1,9';
echo count_notification($db, $ie_id, 0);*/

function count_notification($db, $ie_id, $return_condition) {
    $query = $db->prepare("SELECT * FROM `event`");
    $query->execute();

    $return_e_id = '';
    $return_count = false;
    $count = 0;
    $i_id = explode(',', $ie_id);
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
        $get_i_id = $row->interest_id;
        $exp_i_id = explode(',', $get_i_id);
            foreach ($i_id as $key1 => $value1) {
                foreach ($exp_i_id as $key2 => $value2) {
                    if ($value1 == $value2) {
                        set_seen_status_zero();
                        $return_count = true;
                        break;
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
function set_seen_status_zero() {

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
            '<a href="../manage_event/event_details.php?event_id='.$row->event_id.'">'.
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
