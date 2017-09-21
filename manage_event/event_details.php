<?php
session_start();
require '../db_connection.php';
if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
    $user_id = $_SESSION['user_id'];

    if (isset($_GET['notify'])) {
        $seen_status = 1;
        $update_notify_status = $db->prepare("UPDATE `event_user_notification` SET `seen_status`=? WHERE `event_id`=? AND `user_id`=?");
        $update_notify_status->bindParam(1, $seen_status);
        $update_notify_status->bindParam(2, $event_id);
        $update_notify_status->bindParam(3, $user_id);
        $update_notify_status->execute();
    }

    $query = $db->prepare("SELECT * FROM `event` WHERE `event_id`=?");
    $query->bindParam(1, $event_id);
    $query->execute();

}else exit();


?>
<!DOCTYPE html>
<html lang="en" >
<head >
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >

    <title >Flockers |</title >

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" >
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" >
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet" >

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" >
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" >

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet" >
</head >

<body class="nav-md" >
<div class="container body" >
    <div class="main_container" >
        <div class="col-md-3 left_col" >
            <?php require "../includes/sideBarMenu.php"; ?>
        </div >

        <!-- top navigation -->
        <div class="top_nav" >
            <?php require "../includes/topNavBar.php"; ?>
        </div >
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main"style="/*height: 676px !important;*/">
            <div class="row">
                <div class="col-md-8" id="event_details_content">

                </div>
                <div class="col-md-4">
                    <div class="x_panel">
                        <div class="x_content" style="height: 500px;" id="right_side_bar_content">
                            <h3>Participants</h3>
                            <hr >
                        </div>
                    </div>
                </div>
            </div>

        </div >
    </div >
</div >
<!--</div>
<!-- /page content
</div>
</div>-->

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js" ></script >
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js" ></script >
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js" ></script >
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js" ></script >
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js" ></script >
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js" ></script >
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js" ></script >
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js" ></script >
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js" ></script >
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js" ></script >
<script src="../vendors/Flot/jquery.flot.pie.js" ></script >
<script src="../vendors/Flot/jquery.flot.time.js" ></script >
<script src="../vendors/Flot/jquery.flot.stack.js" ></script >
<script src="../vendors/Flot/jquery.flot.resize.js" ></script >
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js" ></script >
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js" ></script >
<script src="../vendors/flot.curvedlines/curvedLines.js" ></script >
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js" ></script >
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js" ></script >
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js" ></script >
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js" ></script >
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js" ></script >
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js" ></script >

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js" ></script >
</body >

<script >
    var event_id = "<?php echo $_GET['event_id'];?>";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
            var event_details_content =
                ['<div class="col-md-12" >',
                    '<div class="x_panel" >',
                    '<div class="x_content" >',
                    '<div class="col-md-12 col-lg-12 col-sm-12">',
                    '<div class="img-container">',
                    '<img src="../landing_page/images/icon/logo.png" alt="" style="height: 350px; width: 100%; z-index:123; background-color: #0072bc;">',
                    '</div>',
                    '<div class="clearfix">',
                    '</div>',
                    '<hr >',
                    '<h4>',
                    'Description',
                    '</h4>'
                    +data[0]["event_desc"]+
                    '<hr >',
                    '</div>',
                    '</div >',
                    '</div >',
                    '</div >'].join('');

            $('#event_details_content').append(event_details_content);
            var join_button = '<a href="order_slip.php?order_start=true&&event_id='+event_id+'" type="button" class="btn btn-sm btn-warning">JOIN US</a>';
            $('#right_side_bar_content').append(join_button);
        }
    };
    xmlhttp.open("GET", "php/event_details_request.php?event_id="+event_id, true);
    xmlhttp.send()

</script >
</html >

