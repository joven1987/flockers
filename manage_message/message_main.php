<?php
require '../db_connection.php';
session_start();
?>

<style >
    .my_message {
        color: red;
        }
    .from_message {
        color: blue;
        }
</style >


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
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <div class="x_panel">
                        <div class="x_content">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Private Message</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                                </li>
                            </ul>
                            <br>
                            <h4 id="recipient" style="text-transform: capitalize;"><?php echo (isset( $_GET['recipient_name'])) ? $_GET['recipient_name'] : '';?></h4>
                            <div class="dropzone dz-clickable">
                                <div class="dz-default dz-message" style="overflow-x: hidden; overflow-y: scroll; max-height: 300px;" id="conversation">
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <!--Area for typing a message-->
                                <textarea name="" id="type_message" rows="2" style="width: 88%;"></textarea >
                                <button class="btn btn-lg btn-primary" id="send" disabled style="height: 60px;" onclick="send_this()">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3" style="height: 500px;">
                    <div class="x_panel" id="flockers">
                        <div class="x_title">
                            <h3>Flockers</h3>
                        </div>
                        <div class="clearfix"></div>


                    </div>
                </div>
            </div>


        </div >
    </div >
</div >
</div>
</div>
</div>

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

<script >

//$(document).ready(function () {


    var to_user_id = "<?php echo isset($_GET['recipient_user_id']) ? $_GET['recipient_user_id']: '';?>";
    var my_user_id = "<?php echo $_SESSION['user_id'];?>";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
          var data = JSON.parse(this.responseText);
          var status ='';
          var i = 0;
          console.log(data);
          while (i < data.length) {
              var recipient_user_id = data[i]["id"];
              var recipient_name = data[i]["first_name"] + ' ' +data[i]["last_name"];
              status = data[i]["login_status"]==1 ? "<span style='float: right;'><i class='fa fa-circle' style='color: rgb(26, 187, 156);'></i></span> " : '';
              var t = ['<a href="message_main.php?recipient_user_id='+recipient_user_id+'&&recipient_name='+recipient_name+'">',
                      '<div>',
                      '<span style="text-transform: capitalize;">'
                      +data[i]["first_name"]+
                      '</span>'
                      +status+
                      '<hr style="width: 80%;">',
                      '</div>',
                      '</a>'].join('');
              i++;
              $('#flockers').append(t);
          }
      }
    };
    xmlhttp.open("GET", "user_online.php?users=true", true);
    xmlhttp.send();

var mess_id = 0;
var mess_id_2 = 0;
get_message(mess_id);
    function get_message(mess_id) {
        var xmlhttpMessage = new XMLHttpRequest();
        var send_this = '?to_user_id='+to_user_id+'&&mess_id='+mess_id;
        xmlhttpMessage.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText != 'no message') {
                    console.log(this.responseText);
                    var data = JSON.parse(this.responseText);
                    var i = 0;
                    while (i < data.length) {
                        var message = data[i]["message"];
                        var user_id = data[i]["from_user_id"];
                        append_message(user_id, message);
                        i++;
                    }
                    $('#conversation').animate({scrollTop: $('#conversation').prop('scrollHeight')});
                    mess_id_2 = data[i-1]["id"];
                    if (mess_id != mess_id_2) {
                        setTimeout(function () {
                            get_message(mess_id_2);
                        }, 1000);
                    }
                    /*for empty conversation*/
                }else if(this.responseText == 'no message'){
                        setTimeout(function () {
                            get_message(mess_id_2);
                        }, 1000);
                }
            }
        };
        xmlhttpMessage.open("GET", "user_online.php" + send_this, true);
        xmlhttpMessage.send();
    }

$('#type_message').on('keyup', function () {
    var type_message = $('#type_message').val();
    if(type_message != '') {
        $('#send').removeAttr('disabled');
    }else if (type_message == '') {
        $('#send').prop('disabled', 'true');
    }
});
function send_this() {
    var type_message = $('#type_message').val();
    if (type_message != '') {
        var xmlhttp = new XMLHttpRequest();
        var send_this = '?send=true&&to_user_id=' + to_user_id + '&&message=' + type_message;
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                $('#type_message').val(null);
                $('#send').prop('disabled', 'true');
            }
        };
        xmlhttp.open("GET", "message_send.php" + send_this, true);
        xmlhttp.send();
    }
}

function append_message(user_id, message) {
    if (user_id == my_user_id) {
        var me =[
            '<div class="row" style="margin-top: 10px;">',
            '<span style="margin-right: 50px; float: right; background-color: lightgrey; border-radius: 10px; padding: 5px 10px 5px 10px">'
            +message+
            '</span>',
            '</div>'].join('');
        $('#conversation').append(me);

    }else if (user_id == to_user_id) {
        var to = [
            '<div class="row" style="margin-top: 10px;">',
            '<span style="margin-left: 50px; background-color: #b1d6e8; border-radius: 10px; padding: 5px 10px 5px 10px">'
            +message+
            '</span>',
            '</div>'].join('');
        $('#conversation').append(to);


    }
}

    var space = 0;
    $(function() {
        $('#type_message').keydown(function(evt) {
            if (evt.keyCode == 32) {
                space += 1;
                if (space > 1) {
                    evt.preventDefault();
                }
            }else if(evt.keyCode == 13){
                send_this();
            }else {
                space = 0;
            }
        });
    });
//});
</script >
</body>
</html>
