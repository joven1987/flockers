<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: ../landing_page/events/events/");
}else {
    $user_id = $_SESSION['user_id'];
    $event_id = $_GET['event_id'];
}
?>
    <title >Flockers |</title >
<head>
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
        <div class="right_col" role="main" style="/*height: 676px !important;*/">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12" id="event_details_content">
                    <!--order type button-->
                    <!--/order type button-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a id="bulk" class="btn btn-lg btn-primary btn-block order_type" href="order_slip.php?order_type=bulk&&event_id=<?php echo $event_id?>">Bulk Order</a >
                        </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a id="single" class="btn btn-lg btn-primary btn-block order_type" href="order_slip.php?order_type=single&&event_id=<?php echo $event_id?>">Single Order</a>
                        </div>
                    <!--Select My Group(s)-->
                    <!--/Select My Group(s)-->


                    <div class="x_panel bulk_content" style="display: none;">
                        <div class="x_content">
                            <div class="clear_fix"></div>
                                <div class="widget_summary" id="get_groups" style="cursor: pointer;">
                                    <div class="w_left w_10">
                                        <span id="event_date" class="btn btn-xs get_group" ><i class="fa fa-folder-open-o" style="font-size: 30px;"></i></span>
                                    </div>
                                    <div class="w_center w_55">
                                        <h4>Display & Select my group</h4>
                                    </div>
                                </div>
                            <hr >
                            <div class="widget_summary" style="cursor: pointer;">
                                <div class="w_center-200" id="my_groups" >

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-7  col-sm-7 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content" id="right_side_bar_content">
                            <h3>Order Slip Preview</h3>
                            <hr >
<!--                            <a href="#" id ><h4>Remove</h4></a >-->
                            <table class="table table-bordered table-hover" id="table_info">
                                <thead>
                                <tr>
                                    <th colspan="2" style="text-align: center" id="group_name">Group Name</th>
                                    <th id="total_members"></th>
                                </tr>
                                <tr>
                                    <th width="40%">Name</th>
                                    <th width="40%">Email</th>
                                    <th width="20%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="table_data">
                                </tbody>
                                </table>
                        </div>
                        <form action="../paypal/payments2.php" method="post" target="_blank" name="create_form">
                            <input type="hidden" name="cmd" value="_xclick" />
                            <input type="hidden" name="no_note" value="1" />
                            <input type="hidden" name="lc" value="PHP" />
                            <input type="hidden" name="currency_code" value="GBP" />
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                            <input type="hidden" name="first_name" value="Customer's First Name"  />
                            <input type="hidden" name="last_name" value="Customer's Last Name"  />
                            <input type="hidden" name="payer_email" value="customer@example.com"  />
                            <input type="hidden" name="item_number" value="123456" />
                            <input type="hidden" name="event_id" />
                            <input type="hidden"  name="amount" />
                            <input type="hidden"  name="total_members" />
                            <div class="x_content" id="order_slip_button" style="display: none;">
                                <button type="submit" name="checkout" value="reg_event" class="btn btn-lg btn-info" id="reg" style="float: right;">Get an order slip for this group</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div >
    </div >
</div >
<!--</div>-->
<!-- /page content -->
<!--</div>
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

<!--cropper-->

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js" ></script >
</body >

<script >
    $(document).ready(function () {
        $(window).bind("beforeunload",function(event) {
            if(error === true)
            return "You have some unsaved changes";
        });
    });

    function enroll_group(val) {
        console.log(val);
    }
    var error = false;
    /*display*/
    var order_start = "<?php echo isset($_GET['order_start']) ? $_GET['order_start'] : '';?>";
    var order_type= "<?php echo isset($_GET['order_type']) ? $_GET['order_type'] : '';?>";
    var event_id= "<?php echo $_GET['event_id'];?>";
    var user_id= "<?php echo $_SESSION['user_id'];?>";
    var selected_group_id = 0;
    
    var xml = $.ajax({
        type: "POST",
        url: "db_queries/get_events.php",
        data: {
            event_id: event_id,
            request: 'event_id'
        },
        success: function(text) {
            var txt = JSON.parse(text);
            $('[name="event_id"]').attr("value", txt.event_id);
            $('[name="amount"]').attr("value", txt.reg_fee);


        }
    });

    var button_content = $('.bulk_content');
        if(order_start != true) {
            if (order_type == 'bulk') {
                button_content.css({display: 'inline-block'});
                $("#bulk").css({pointerEvents: 'none'}).attr('disabled', 'true');
            }
            else
            if (order_type == 'single') {
                $("#single").css({pointerEvents: 'none'}).attr('disabled', 'true');
            }
        }

    var count = 0;
    $('#get_groups').on('click', function () {
        error = true;
        if (count == 0) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    var i = 0;
                    while (i < data.length) {
                        var group = [
                            '<button class="btn btn-sm btn-info reg" onclick="reg_group(this.value)" value="'+data[i]["id"]+'">'
                            + data[i]["group_name"] +
                            '<i class="fa fa-plus" style="margin-left: 5px;">',
                            '</i>',
                            '</button>'].join('');
                        if (count == 0) {
                            $('#my_groups').append(group);

                        }
                        i++;

                    }
                    count++;

                }

            };

            xmlhttp.open("GET", "db_queries/get_my_group.php?get_group=true", true);
            xmlhttp.send();
        }else
            alert("All your groups are already displayed!");
    });

    var count_table = 0;
    var count_data = 0;
    var group_id = 0;


    function reg_group(val) {
        error = true;
        var xmlhttp = new XMLHttpRequest();
        var send_this = '?reg_group=true&&group_id=' + val;
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                var group_name = data[0]["group_name"];
                var total_members = 0;
                var temp_td = null;
                var i = 0;
                var table_data = [];
                while (i < data.length) {
                    var name = data[i]["first_name"] + ' ' + data[i]["last_name"];
                    var email = data[i]["email_add"];
                    temp_td =  ['<tr>',
                                '<td>'
                                + name +
                                '</td>',
                                '<td>'
                                + email +
                                '</td>',
                                '<td style="text-align: center">',
                                '<button class="btn btn-danger btn-xs" title="remove this member">',
                                '<i class="fa fa-minus">',
                                '</i>',
                                '</button>',
                                '</td>',
                                '</tr>'].join('');
                    table_data.push(temp_td);
                    i++;
                    total_members++;
                }table_data.join('');

                $('#reg').attr('value',selected_group_id);
                $('#total_members').html(total_members +' member(s)');
                $('#table_info').find('#group_name').html(group_name);
                $('#table_data').empty();
                $('#table_data').append(table_data);
                $('#order_slip_button').show();
                $('[name="total_members"]').attr('value', total_members);

                console.log($('[name="total_members"]').val());
                console.log($('[name="event_id"]').val());
                console.log($('[name="amount"]').val());
            }
        }; xmlhttp.open("GET", "db_queries/get_my_group.php" + send_this, true);
        xmlhttp.send();
        selected_group_id = val;
    }



    /*.done(function() {
        alert(text);
    })
        .fail(function() {
            alert( "error" );
        })
        .always(function() {
            alert( "finished" );
        });*/



    $(document).ready(function () {

        $('#view_add_part_modal').on('click', function () {
            $('#add_part_modal').css({display: 'block'});
        });

        $('.close, #cancel_custo_modal').on('click', function () {

        });
    });

</script >
</html >