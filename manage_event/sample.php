<?php

if (isset($_REQUEST['subscribe'])) {
    $city = $_REQUEST['city'];
    $cityLat = $_REQUEST['cityLat'];
    $cityLng = $_REQUEST['cityLng'];

    if (!empty($_REQUEST['topics'])) {
        /*foreach ($_REQUEST['topics'] as $topic) {

        }*/
//        $topics = implode(",", $_REQUEST['topics']);
    }

    echo $city.'<br>';
    echo $cityLat.'<br>';
    echo $cityLng.'<br>';
//    print_r($topics);
    echo $amount = $_REQUEST['subscribe'];
}
?>