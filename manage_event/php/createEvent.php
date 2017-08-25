<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head >

    <meta charset="UTF-8" >
    <title >Event Creation</title >
    <link rel="stylesheet" href="../../frameworks/bootstrap-4.0.0/css/bootstrap-grid.css" >
    <link rel="stylesheet" href="../../frameworks/bootstrap-4.0.0/css/bootstrap-reboot.css" >
    <link rel="stylesheet" href="../../frameworks/bootstrap-4.0.0/css/bootstrap.css" >
</head >
<body >

<div id="id"></div>
<h2 >Choose Venue</h2 >
<div class="step-1" >
    <input id="searchTextField" type="text" size="50" placeholder="Enter a location" autocomplete="on" runat="server" />
    <input type="text" id="city2" name="city2" />
    <input type="text" id="cityLat" name="cityLat" />
    <input type="text" id="cityLng" name="cityLng" />
    <input type="button" id="submit" value="next" />

</div >
<div class="step-2" >
    <?php
    include '../../db_connection.php';

    $statement = $dbConnection->prepare("SELECT * FROM `main_category`");
    $result = $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    //parse the result to json type to be able to use with javascript
    /*$rest = $statement->fetchAll(PDO::FETCH_ASSOC);
    $obj = json_encode($rest);
    echo $obj;*/



    ?>
    <div class="container" >

        <?php
        $i = 1;
        $txt = '';
        while ($row_main = $statement->fetch()) {
            $main_id = $row_main["main_category_id"];
            $sub_statement =
                $dbConnection->prepare("SELECT * FROM `sub_category` 
                            INNER JOIN `main_category` ON `sub_category`.`main_category_id`=
                            `main_category`.`main_category_id` WHERE `sub_category`.`main_category_id`= $main_id");
            $sub_statement->execute();
            $sub_statement->setFetchMode(PDO::FETCH_ASSOC);


            if ($i % 3 == 1){
                $txt .= "<div class='row'>";
                $txt .= "<div class='col-md-3'>
                                <span style='font-weight: 500; background-color: #b1bc6f; padding-right: 40px;'>"
                    .$row_main['main_category_name'].
                    "</span><br />";
                while ($row_sub = $sub_statement->fetch()){
                    $checkBox = $row_sub['sub_category_id'];
                    $txt .= "<input type='checkbox' value='$checkBox'>" . $row_sub['sub_category_name'] .  "<br />";
                }$txt .= "</div>";
            }else {
                $txt .= "<div class='col-md-3'>
                                <span style='font-weight: 500; background-color: #b1bc6f; padding-right: 40px;'>".
                    $row_main['main_category_name'] . "
                                </span><br />";
                while ($row_sub = $sub_statement->fetch()){
                    $checkBox = $row_sub['sub_category_id'];
                    $txt .= "<input type='checkbox' value='$checkBox'>" . $row_sub['sub_category_name'] . "<br />";
                }$txt .= "</div>";
            }
            ?>




            <?php
            if ($i % 3 == 0) {
                $txt .= "</div><br />";
            }
            $i++;
        } echo $txt;
        ?>

    </div >
</div >

<script src="../../frameworks/jquery-3.2.1.min.js" ></script >
<script src="../../frameworks/bootstrap/bootstrap/js/bootstrap.js" ></script >
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBWFYr4z14aKZ0EefiszAmFSN9lSMkw7bk&libraries=places"
        type="text/javascript" ></script >
<script >
//    console.log(sessionStorage.getItem("Programmer"));
    console.log(localStorage.getItem("Programmer"));
//    localStorage.removeItem("Programmer");
</script >
<script type="text/javascript" >
    function initialize() {
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            var placeName = document.getElementById('city2').value = place.name;
            var latitudeVal = document.getElementById('cityLat').value = place.geometry.location.lat();
            var longitudeVal = document.getElementById('cityLng').value = place.geometry.location.lng();

            $('#submit').click(function () {

            });


        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script >
</body >
</html >