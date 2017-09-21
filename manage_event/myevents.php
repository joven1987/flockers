<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require '../db_connection.php';?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flockers | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>
<style >
    .fa {
        font-size: 15px !important;
        }
</style >

<body class="nav-md">
<?php
if (isset($_REQUEST['event_id'], $_REQUEST['amount'])) {
    function expiry_date($event_duration) {
        $duration = date("Y-m-d h:i:s", time() + ($event_duration * 2592000));
        return $duration;
    }

    $event_id = $_REQUEST['event_id'];
    $amount = $_REQUEST['amount'];

    $update_my_event = $db->prepare("SELECT * FROM `create_event_trans` JOIN `event` ON `create_event_trans`.`event_id`=`event`.`event_id` WHERE `create_event_trans`.`event_id`=?");
    $update_my_event->bindParam(1, $event_id);
    $update_my_event->execute();
    if ($update_my_event->rowCount() == 1) {
        $check_amount = $update_my_event->fetch(PDO::FETCH_OBJ);
        echo '<script>alert("found");</script>';
        if ($check_amount->total_amount_paid == $amount) {
            echo '<script>alert("amount check");</script>';
            $payment_status = 1;
            $adver_status = 1;
            $trans_date = date("Y-m-d h:i:s");
            $expiry_date = date("Y-m-d h:i:s", ($check_amount->subscription_duration * 2592000) + time());

       $update_trans = $db->prepare("UPDATE `create_event_trans` SET `payment_status`=?, `adver_status`=?, `trans_date`=?, `expiry_date`=? WHERE `event_id`=?");
       $update_trans->bindParam(1, $payment_status);
       $update_trans->bindParam(2, $adver_status);
       $update_trans->bindParam(3, $trans_date);
       $update_trans->bindParam(4, $expiry_date);
       $update_trans->bindParam(5, $event_id);
       $update_trans->execute();

            if ($update_trans->rowCount() == 1 ) {
                header('location: myevents.php?event_id='.$event_id);
            }
        }

    }else {
        echo '<script>alert("not found");</script>';
    }
}
?>
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <?php require "../includes/sideBarMenu.php";?>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <?php require "../includes/topNavBar.php";?>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="row top_tiles" style="margin: 10px 0;">

                    <?php if (isset($_REQUEST['event_id'])) {?>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard_graph x_panel">
                            <div class="row x_title">
                                <div class="col-md-6">
                                    <h3>Please complete the details of your event...</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="x_panel">
<!--                                    <form action="event_update.php" method="post">-->
                                        <input type="hidden" name="event_id" id="event_id" value="<?php echo $_REQUEST['event_id'];?>" >
                                    <div class="x_title">
                                        <h3>Complete the following...</h3>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                            <h2>Date and Time of the event</h2>
                                            <div class="clearfix"></div>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-calendar" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <input name="event_date" id="event_date_input" type="date" />
                                            </div>
                                            <div class="w_right w_55">
                                                <button id="event_date" class="btn btn-xs" onclick="save_data(this.id)"><i class="fa fa-floppy-o" style="font-size: 20px;"></i></button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-hourglass-start" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <input type="time" name="time_start" style="float: left;" title="time event start"/>
                                            </div>
                                            <div class="w_right w_55">
                                                <button id="time_start" class="btn btn-xs" onclick="save_data(this.id)"><i class="fa fa-floppy-o" style="font-size: 20px;"></i></button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-hourglass-end" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <input type="time" name="time_end" style="float: left;" title="time event end"/>
                                            </div>
                                            <div class="w_right w_55">
                                                <button id="time_end" class="btn btn-xs" onclick="save_data(this.id)"><i class="fa fa-floppy-o" style="font-size: 20px;"></i></button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                        <h2>Admission fee</h2>
                                        <div class="clearfix"></div>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-money" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <input type="number" name="set_admission_fee" style="float: left;" title="admission fee"/>
                                            </div>
                                            <div class="w_right w_55">
                                                <button id="set_admission_fee" class="btn btn-xs" onclick="save_data(this.id)"><i class="fa fa-floppy-o" style="font-size: 20px;"></i></button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                        <h2>Interests</h2>
                                        <div class="clearfix"></div>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-comments-o" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <p id="display_interest"></p>
                                            </div>
                                            <div class="w_right w_55">
                                                <button id="interest" class="btn btn-xs" onclick="save_data(this.id)"><i class="fa fa-plus-square" style="font-size: 20px;"></i></button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                        <h2>No. of participants who can join</h2>
                                        <div class="clearfix"></div>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-user-plus" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <input type="number" name="no_participants" placeholder="Max no. of flockers to participate    "/>
                                            </div>
                                            <div class="w_right w_55">
                                                <button id="no_participants" class="btn btn-xs" onclick="save_data(this.id)"><i class="fa fa-floppy-o" style="font-size: 20px;"></i></button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                    </div>
<!--                                    <button type="submit" class="btn btn-dark" name="save_complete" style="float: right;"><span>Update</span></button>-->
<!--                                    </form>-->
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <?php require 'db_queries/get_events.php'; ?>
                                        <h3><?php $event_data = get_event_data($_REQUEST['event_id'], $db); echo $event_data->event_title; ?></h3>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-info-circle" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                        <p>
                                                            <style >
                                                                p span{
                                                                    color: #73879C !important;
                                                                    }
                                                            </style >
                                                            <?php echo $event_data->event_desc; ?>
                                                        </p>
                                            </div>
                                            <div class="w_right w_20">
                                                <span><i class="fa fa-edit" style="font-size: 30px; cursor: pointer;"></i></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-calendar" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <p id="display_date">
                                                    <?php echo date("F d, Y", strtotime($event_data->event_date)); ?>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-hourglass-start" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <p id="display_time_start">
                                                    <?php echo "Starts at: " . date("h:i:s A", strtotime($event_data->event_start_time)); ?>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-hourglass-end" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <p id="display_time_end">
                                                    <?php echo "Ends at: " . date("h:i:s A", strtotime($event_data->event_end_time)); ?>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-money" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <p id="display_set_admission_fee">
                                                    <?php echo '₱ '.number_format($event_data->reg_fee).'.00'; ?>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-comments-o" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <p>
                                                    <?php $interest_name = get_interest_data($event_data->interest_id, $db); ?>
                                                    <?php print_r($interest_name); ?>
                                                    <input type="hidden" name="interest_id" value="<?php echo $event_data->interest_id;?>" />
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div><br>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span><i class="fa fa-users" style="font-size: 30px;"></i></span>
                                            </div>
                                            <div class="w_center w_55">
                                                <p id="display_no_participants">
                                                    <?php echo $event_data->max_no_participants==NULL ? 'No limit of participants': number_format($event_data->max_no_participants).' persons'; ?>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
     <!--   <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>-->
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- jQuery Sparklines -->
<script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- morris.js -->
<script src="../vendors/raphael/raphael.min.js"></script>
<script src="../vendors/morris.js/morris.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<script >

        function save_data(id) {
            var event_id = $('[name="event_id"]').val();
            if(id == 'event_date') {
                var event_date = $('[name="event_date"]').val();
                if (event_date != '') {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if(this.readyState == 4 && this.status == 200) {
                            xmlhttp2 = new XMLHttpRequest();
                            xmlhttp2.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("display_date").innerHTML = this.responseText;
                                }
                            };
                            xmlhttp2.open("GET" , "event_update.php?autoDisplayDate=true&&event_id="+event_id, true);
                            xmlhttp2.send();
                        }
                    };
                    xmlhttp.open("GET", "event_update.php?event_id="+event_id+"&&event_date="+event_date, true);
                    xmlhttp.send();
                }

            }else if (id == 'no_participants') {
                var no_participants = $('[name="no_participants"]').val();
                if (no_participants != '') {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if(this.readyState == 4 && this.status == 200) {
                            xmlhttp2 = new XMLHttpRequest();
                            xmlhttp2.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("display_no_participants").innerHTML = this.responseText;
                                }
                            };
                            xmlhttp2.open("GET" , "event_update.php?autoDisplayNoPart=true&&event_id="+event_id, true);
                            xmlhttp2.send();
                        }
                    };
                    xmlhttp.open("GET", "event_update.php?event_id="+event_id+"&&no_participants="+no_participants, true);
                    xmlhttp.send();
                }
            } else if (id == 'time_start') {
                var time_start = $('[name="time_start"]').val();
                if (time_start != '') {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if(this.readyState == 4 && this.status == 200) {
                            xmlhttp2 = new XMLHttpRequest();
                            xmlhttp2.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("display_time_start").innerHTML = this.responseText;
                                }
                            };
                            xmlhttp2.open("GET" , "event_update.php?autoDisplayTimeStart=true&&event_id="+event_id, true);
                            xmlhttp2.send();
                        }
                    };
                    xmlhttp.open("GET", "event_update.php?event_id="+event_id+"&&time_start="+time_start, true);
                    xmlhttp.send();
                }
            }else if (id == 'time_end') {
                var time_end = $('[name="time_end"]').val();
                if (time_end != '') {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if(this.readyState == 4 && this.status == 200) {
                            xmlhttp2 = new XMLHttpRequest();
                            xmlhttp2.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("display_time_end").innerHTML  = this.responseText;
                                }
                            };
                            xmlhttp2.open("GET" , "event_update.php?autoDisplayTimeEnd=true&&event_id="+event_id, true);
                            xmlhttp2.send();
                        }
                    };
                    xmlhttp.open("GET", "event_update.php?event_id="+event_id+"&&time_end="+time_end, true);
                    xmlhttp.send();
                }
            }else if (id == 'set_admission_fee') {
                var set_admission_fee = $('[name="set_admission_fee"]').val();
                if (set_admission_fee != '') {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if(this.readyState == 4 && this.status == 200) {
                            xmlhttp2 = new XMLHttpRequest();
                            xmlhttp2.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("display_set_admission_fee").innerHTML  = this.responseText;
                                }
                            };
                            xmlhttp2.open("GET" , "event_update.php?autoDisplayAdmissionFee=true&&event_id="+event_id, true);
                            xmlhttp2.send();
                        }
                    };
                    xmlhttp.open("GET", "event_update.php?event_id="+event_id+"&&set_admission_fee="+set_admission_fee, true);
                    xmlhttp.send();
                }
            } else if (id == 'interest') {
                var interest_id = $('[name="interest_id"]').val();
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if(this.readyState == 4 && this.status == 200) {
                            $('#display_interest').html(this.responseText);
                        }
                    };
                    xmlhttp.open("GET", "event_update.php?event_id="+event_id+"&&interest_id="+interest_id, true);
                    xmlhttp.send();
            }
        }

        function checkMe(val) {
            alert(val);
        }

</script >
</body>
</html>