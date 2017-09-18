<?php
require '../db_connection.php';
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
            <?php require "../includes/sideBarMenu.html"; ?>
        </div >

        <!-- top navigation -->
        <div class="top_nav" >
            <?php require "../includes/topNavBar.php"; ?>
        </div >
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main"style="/*height: 676px !important;*/">
            <div class="row">
                <div class="col-md-8" id="event_content">

                </div>
                <div class="col-md-4">
                    <div class="x_panel">
                        <div class="x_content" style="height: 500px;">
                            <h3>Right side bar content</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div >
    </div >
</div >
</div>
<!-- /page content -->

<!-- footer content -->
<!--<footer >
    <div class="pull-right" >
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com" >Colorlib</a >
    </div >
    <div class="clearfix" ></div >
</footer >-->
<!-- /footer content -->
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
<?php require '../includes/footer.php';?>
<script >

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if(this.readyState == 4 && this.status == 200) {
          var data = JSON.parse(this.responseText);
          var i = 0;
          while (i < data.length) {
              var reg_fee = Number(data[i]['reg_fee']) ? '₱ '+Number(data[i]['reg_fee']).toFixed(2) : 'Free';
              var button_val = data[i]['event_id'];
              var event_title = data[i]['event_title'];
              var venue = data[i]["address"];
              var e_date = new Date(data[i]["event_date"]);
              /*var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday',];*/
              var days = ['Jan. ', 'Feb. ', 'Mar. ', 'Apr. ', 'May ', 'June ', 'Jul', 'Aug. ', 'Sept. ', 'Oct. ', 'Nov. ', 'Dec. '];
              var event_date = days[e_date.getMonth()];
              event_date += e_date.getDate();
              event_date += ', ' + e_date.getFullYear();
              var app = ['<div class="col-md-12">',
                  '<div class="x_panel">',
                  '<div class="x_content" style="display: block;">',
                  '<div class="col-md-7 col-lg-7 col-sm-6">',
                  '<div class="img-container">',
                  '<img src="../landing_page/images/icon/logo.png" alt="" style="height: 80px; width: 100%; z-index:123; background-color: #0072bc;">',
                  '</div>',
                  '<div style="float: left;">',
                  '<h5>'
                  +reg_fee+
                  '</h5>',
                  '</div>',
                  '</div>',
                  '<div class="col-md-5 col-lg-5 col-sm-6">',
                  '<div>'
                  +event_date+
                  '</div>',
                  '<h4>'
                    +event_title+
                  '</h4>',
                  '<div>'
                  +venue+
                  '</div>',
                  '</div>',
                  '<div style="float: right; margin-top: 10px;">',
                  '<a href=event_details.php?event_id='+button_val+' value="" type="button" class="btn btn-sm btn-success">',
                  'I\'m Interested',
                  '</a>',
                  '</div>',
                  '<div class="clearfix"></div>',
                  '</div>',
                  '</div>',
                  '</div>'].join('');

              $('#event_content').append(app);
              i++;
          }
//          console.log(data);
      }
    };
    xmlhttp.open("GET", "get_events.php", true);
    xmlhttp.send();

</script >


</body >
</html >
