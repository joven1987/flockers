<?php
require '../db_connection.php';
if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];

    if (isset($_GET['event_date'])) {
        $event_date = $_GET['event_date'];
        $update_event_date = $db->prepare("UPDATE `event` SET `event_date`=? WHERE `event_id`=?");
        $update_event_date->bindParam(1, $event_date);
        $update_event_date->bindParam(2, $event_id);
        $update_event_date->execute();

        /*if ($update_event_date->rowCount() > 0) {
            echo 1;
        } else 0;*/
    }

    if (isset($_GET['autoDisplayDate'])) {
        $get_date = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
        $get_date->bindParam(1, $event_id);
        $get_date->execute();
        if ($get_date->rowCount() > 0) {
            $num_part = $get_date->fetch(PDO::FETCH_OBJ);
            echo date("F d, Y", strtotime($num_part->event_date));
        }
    }

    /**/
    if (isset($_GET['no_participants'])) {
        $event_participants = $_GET['no_participants'];
        $update_event_participants = $db->prepare("UPDATE `event` SET `max_no_participants`=? WHERE `event_id`=?");
        $update_event_participants->bindParam(1, $event_participants);
        $update_event_participants->bindParam(2, $event_id);
        $update_event_participants->execute();

        if ($update_event_participants->rowCount() > 0) {
            echo 3;
        } else 4;
    }

    if (isset($_GET['autoDisplayNoPart'])) {
        $get_no_part = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
        $get_no_part->bindParam(1, $event_id);
        $get_no_part->execute();
        if ($get_no_part->rowCount() > 0) {
            $num_part = $get_no_part->fetch(PDO::FETCH_OBJ);
            echo number_format($num_part->max_no_participants) . ' persons';
        }
    }

    /**/
    if (isset($_GET['time_start'])) {
        $time_start = $_GET['time_start'];
        $update_time_start = $db->prepare("UPDATE `event` SET `event_start_time`=? WHERE `event_id`=?");
        $update_time_start->bindParam(1, $time_start);
        $update_time_start->bindParam(2, $event_id);
        $update_time_start->execute();

    }

    if (isset($_GET['autoDisplayTimeStart'])) {
        $get_time = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
        $get_time->bindParam(1, $event_id);
        $get_time->execute();
        if ($get_time->rowCount() > 0) {
            $get_time_start = $get_time->fetch(PDO::FETCH_OBJ);
            echo "Starts at: " . date("h:i:s A", strtotime($get_time_start->event_start_time));
        }
    }

    /**/
    if (isset($_GET['time_end'])) {
        $time_end = $_GET['time_end'];
        $update_time_start = $db->prepare("UPDATE `event` SET `event_end_time`=? WHERE `event_id`=?");
        $update_time_start->bindParam(1, $time_end);
        $update_time_start->bindParam(2, $event_id);
        $update_time_start->execute();

    }

    if (isset($_GET['autoDisplayTimeEnd'])) {
        $get_time = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
        $get_time->bindParam(1, $event_id);
        $get_time->execute();
        if ($get_time->rowCount() > 0) {
            $get_time_end = $get_time->fetch(PDO::FETCH_OBJ);
            echo "Ends at: " . date("h:i:s A", strtotime($get_time_end->event_end_time));
        }
    }

    /**/
    if (isset($_GET['set_admission_fee'])) {
        $set_admission_fee = $_GET['set_admission_fee'];
        $update_time_start = $db->prepare("UPDATE `event` SET `reg_fee`=? WHERE `event_id`=?");
        $update_time_start->bindParam(1, $set_admission_fee);
        $update_time_start->bindParam(2, $event_id);
        $update_time_start->execute();

    }

    if (isset($_GET['autoDisplayAdmissionFee'])) {
        $get_admission_fee = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
        $get_admission_fee->bindParam(1, $event_id);
        $get_admission_fee->execute();
        if ($get_admission_fee->rowCount() > 0) {
            $get_admission_fee_data = $get_admission_fee->fetch(PDO::FETCH_OBJ);
            echo '₱ '.number_format($get_admission_fee_data->reg_fee).'.00';
        }
    }


    /**/
    if (isset($_GET['interest_id'])) {
        $interest_id = $_GET['interest_id'];
        $get_interest_data = $db->prepare("SELECT * FROM `interest` WHERE `id` NOT IN($interest_id)");
        $get_interest_data->execute();
        $i_name = '';

        while ($row = $get_interest_data->fetch(PDO::FETCH_OBJ)) {
            $i_name .= '<button class="btn btn-sm btn-success" onclick="addMe(this.value)" value="' . $row->id . '">' . $row->interest_name . '</button>';

        }
        echo $i_name;
    }

}
?>