<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
require 'db_connection.php';
require 'get_time.php';
if (isset($_POST['login'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $query = $db->prepare("SELECT * FROM `users` WHERE `email_add`=? AND `password`=?");
    $query->bindParam(1,$user_email);
    $query->bindParam(2, $user_password);
    $query->execute();
    if($query->rowCount() > 0) {
        $row = $query->fetch(PDO:: FETCH_OBJ);
        $_SESSION['user_id'] = $row->id;
        $_SESSION['user_interest_id'] = $row->interests_id;
        $_SESSION['email_add'] = $row->email_add;
        $_SESSION['first_name'] = $row->first_name;
        $_SESSION['last_name'] = $row->last_name;
        echo '<script>console.log("'.$_SESSION['user_id'].'");</script>';
        $login_status_set = 1;
        $login_status = $db->prepare("UPDATE `users` SET `login_status`=? WHERE `id`=?");
        $login_status->bindParam(1, $login_status_set);
        $login_status->bindParam(2, $_SESSION['user_id']);
        $login_status->execute();
        header("location: ../../manage_event/upcomingevents.php");
    }
}
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flockers | Events</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link rel="stylesheet" type="text/css" href="css/design.css">
    <link rel="stylesheet" type="text/css" href="css/eventslogin.css">
    <!--<link rel="stylesheet" type="text/css" href="css/modalstyle.css">-->
    <link rel="stylesheet" media="screen" href="vendor/fonts/font-awesome/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,800" rel="stylesheet">

</head>

<body>






<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="images/icon/logo.png" style=" max-height: 45px; max-width: 195px; opacity: 1; position: absolute; top:10px; image-rendering: crisp-edges; ">
        </a>

        <form class="form-inline topfind" >
            <input class="form-control " type="text" placeholder="Search for events" id="topsearch">
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto navtext">
                <li class="nav-item">
                    <a class="nav-link" href="#" >HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#register" style="outline: none; box-shadow: none;">REGISTER</a>
                </li>
                <li class="nav-item">
                    <button type="button" id="create" class="btn create" data-toggle="modal" data-target="#login" style="outline: none;">CREATE EVENTS</button>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!---MODAL LOGIN-->


<div class="modal fade" id="login" style="background-image:url('images/bg/back.jpg'); width: 100%; height: 100%; ">
    <div class="modal-dialog" role="document" style="padding-top: 5%;">
        <div class="modal-content">

            <div class="modal-header">
                <div class="container">
                    <div class="row" style="padding-left: 100%;">
                        <button type="button" id="closebtn" class="align-right" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <img src="images/icon/icon.png" style="max-width: 250px; opacity: 1; margin: auto;  display: block; padding-bottom: 3%; " >
                <h2 id="logintext"  > Hi there, Sign in to Flockers </h2>
                <form action="index.php" method="post">
                    <div class="inner-addon right-addon" id="textfont">
                        <i class="fa fa-user" aria-hidden="true" ></i>
                        <input type="email" class="form-control" id="username" name="user_email" placeholder="Email" />
                    </div>
                    <div class="inner-addon right-addon" id="textfont" style="padding-top: 3.5%;">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" class="form-control" name="user_password" id="pw" placeholder="Password" />
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center" style="padding-top: 9%;">
                            <button id="btnsignin" name="login" class="btn">Sign In</button>
                </form>
                <button id="btnreg" name="singlebutton" class="btn" data-toggle="modal" data-target="#register"><span>Register</span></button>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="container" style="text-align:center;">
            <img src="images/icon/socialcon/fb.svg" class="logicon">
            <img src="images/icon/socialcon/twitter.svg" class="logicon">
            <img src="images/icon/socialcon/gp.svg" class="logicon">
        </div>
    </div>

</div>
</div>
</div>




<!---END--->







<!---MODAL REGISTER-->


<div class="modal fade" id="register" role="dialog" style="background-image:url('images/bg/back.jpg'); width: 100%; height: 100%; padding-top: 2%; ">
    <div class="modal-dialog modal-lg">
        <div class="modal-content registration">
            <div class="modal-header">

                <div class="container" style="padding-top: 1px;">
                    <div class="row" style="padding-left: 100%;">
                        <button type="button" id="closebtn" class="align-right" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="modal-body">

                <img src="images/icon/icon.png" style="max-width: 250px; opacity: 1; margin: auto;  display: block; padding-bottom: 1.3%; ">


                <form class="col-md-12" id="regdiv" action="register.php" method="post">

                    <h2 id="logintext" > Hi there, New to Flockers? </h2>


                    <div class="row">
                        <div class="inner-addon right-addon col-md-6" id="regfont">
                            <i class="fa fa-user" aria-hidden="true" ></i>
                            <input type="text" class="form-control" name="first_name"  id="regtext" placeholder="Firstname"/>
                        </div>

                        <div class="inner-addon right-addon col-md-6" id="regfont" >
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <input type="number" class="form-control"  name="mobile_no" id="regtext"placeholder="Mobile No"/>
                        </div>



                        <div class="inner-addon right-addon col-md-6" id="regfont">
                            <i class="fa fa-user" aria-hidden="true" ></i>
                            <input type="text" class="form-control"  name="middle_name" id="regtext" placeholder="Middlename"/>
                        </div>

                        <div class="inner-addon right-addon col-md-6" id="regfont" >
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <input type="email" class="form-control" name="paypal" id="regtext" placeholder="Paypal ID (Optional)"/>
                        </div>



                        <div class="inner-addon right-addon col-md-6" id="regfont">
                            <i class="fa fa-user" aria-hidden="true" ></i>
                            <input type="text" class="form-control" name="last_name" id="regtext"  placeholder="Lastname"/>
                        </div>

                        <div class="inner-addon right-addon col-md-6" id="regfont" >
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input type="password" class="form-control" name="password" id="regtext" placeholder="Password"/>
                        </div>



                        <div class="inner-addon right-addon col-md-6" id="regfont">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input type="email" class="form-control" name="email_add" id="regtext" placeholder="Email"/>
                        </div>

                        <div class="inner-addon right-addon col-md-6" id="regfont" >
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input type="password" class="form-control" name="cpassword" id="regtext" placeholder="Repeat Password"/>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-12 text-center" style="padding-top: 5%;">
                            <button id="btnlogin" name="singlebutton" class="btn" data-toggle="modal" data-target="#register"><span>Sign in</span></button>
                            <button type="submit" id="btnsignup" name="register" class="btn">Register</button>

                        </div>
                    </div>

                </form>

            </div>
            <div class="modal-footer">

                <div class="container" style="text-align:center;">
                    <img src="images/icon/socialcon/fb.svg" class="regicon">
                    <img src="images/icon/socialcon/twitter.svg" class="regicon">
                    <img src="images/icon/socialcon/gp.svg" class="regicon">

                </div>


            </div>
        </div>
    </div>
</div>
<!--</div>-->


<!---END--->





<div id="map"></div>
<script>
    function initMap() {
        var uluru = {lat: 10.3251540, lng: 123.9537480};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANi-e-bnWFOAd9HtT_6Podg12042Pf2yA&callback=initMap">
</script>










<!-- Page Content -->
<div class="container" style="padding-top: 27%;">

    <div class="navstyle">
        <nav class="navbar navbar-light bg-faded search">

            <div class="col-md-12" >
                <h4 class="col-md-12 searchtitle">Experience your next event</h4>
            </div>

            <div class="row">
                <form class="form-inline" id="textcolor">


                    <div class="dropdown col-md-3" style="border-right: 1px solid white;">
                        <button class="btn btn-primary " type="button" data-toggle="dropdown">CATEGORIES
                            <span><i class="fa fa-angle-down" aria-hidden="true" style="font-size:18px;"></i></span></button>
                        <ul class="dropdown-menu">
                            <li class="hover"><a href="#" class="aleft"><b>ALL CATEGORIES</b></a></li>
                            <li class="hover"><a href="#" class="aleft">Sports</a></li>
                            <li class="hover"><a href="#" class="aleft">Health</a></li>
                            <li  class="hover"><a href="#" class="aleft">Film</a></li>
                            <li  class="hover"><a href="#" class="aleft">Arts</a></li>
                            <li  class="hover"><a href="#" class="aleft">Technology</a></li>
                            <li  class="hover"><a href="#" class="aleft">Dance</a></li>
                            <li class="hover"><a href="#" class="aleft">Photography</a></li>
                            <li  class="hover"><a href="#" class="aleft">Music</a></li>
                            <li  class="hover"><a href="#" class="aleft">eSports</a></li>

                        </ul>
                    </div>

                    <div class="dropdown col-md-3" style="border-right: 1px solid white;">
                        <button class="btn btn-primary" type="button" data-toggle="dropdown">EVENT TYPE
                            <span><i class="fa fa-angle-down" aria-hidden="true" style="font-size:18px;"></i></span></button>
                        <ul class="dropdown-menu">
                            <li class="hover"><a href="#" class="aleft"><b>ALL EVENT TYPES</b></a></li>
                            <li class="hover"><a href="#" class="aleft">Expo</a></li>
                            <li class="hover"><a href="#" class="aleft">Seminar</a></li>
                            <li  class="hover"><a href="#" class="aleft">Class</a></li>
                            <li  class="hover"><a href="#" class="aleft">Conference</a></li>
                            <li  class="hover"><a href="#" class="aleft">Tournament</a></li>
                            <li  class="hover"><a href="#" class="aleft">Convention</a></li>
                            <li class="hover"><a href="#" class="aleft">Meetup</a></li>


                        </ul>
                    </div>

                    <div class="dropdown col-md-3" style="border-right: 1px solid white;">
                        <button class="btn btn-primary" type="button" data-toggle="dropdown">DATE
                            <span><i class="fa fa-angle-down" aria-hidden="true" style="font-size:18px;"></i></span></button>
                        <ul class="dropdown-menu">
                            <li class="hover"><a href="#" class="aleft"><b>ALL DATES</b></a></li>
                            <li class="hover"><a href="#" class="aleft">Today</a></li>
                            <li class="hover"><a href="#" class="aleft">Tommorow</a></li>
                            <li  class="hover"><a href="#" class="aleft">This Week</a></li>
                            <li  class="hover"><a href="#" class="aleft">This Weekend</a></li>
                            <li  class="hover"><a href="#" class="aleft">Next Week</a></li>
                            <li  class="hover"><a href="#" class="aleft">This Month</a></li>
                            <li class="hover"><a href="#" class="aleft">Custom Date</a></li>


                        </ul>
                    </div>

                    <div class="dropdown col-md-3">
                        <button class="btn btn-primary " type="button" data-toggle="dropdown">PRICE
                            <span><i class="fa fa-angle-down" aria-hidden="true" style="font-size:18px;"></i></span></button>
                        <ul class="dropdown-menu">
                            <li class="hover"><a href="#" class="aleft"><b>ALL PRICES</b></a></li>
                            <li class="hover"><a href="#" class="aleft">Free</a></li>
                            <li class="hover"><a href="#" class="aleft">Paid</a></li>



                        </ul>
                    </div>

                    <!--<button class="btn btn-outline-success my-2 my-sm-0 find" type="submit">Search</button>--->

                </form>
            </div>


        </nav>
    </div>
    <!-- Page Heading -->

    <!--.row-->
    <div class="row" style="padding-top: 4%;" id="events_list">

    </div>
</div>


<!-- /.container -->


<!-- Footer -->
<footer class="foot">
    <div class="container">

        <div class="row ftfont">
            <div class="col-md-3" >
                <label class="flab" >Use Flockers<label>
                        <text class="ft1">How it works</text><br>
                        <text class="ft1">For large and Complex Events</text><br>
                        <text class="ft1">Pricing</text><br>
                        <text class="ft1">Community Guidelines</text><br>
                        <text class="ft1">Event Organizing Resources</text><br>
                        <text class="ft1">Sitemap</text><br>
            </div>
            <div class="col-md-3">
                <label class="flab" >Plan Events<label>
                        <text class="ft1">Flockers Reviews</text><br>
                        <text class="ft1">Sell Tickets</text><br>
                        <text class="ft1">Event Management and Planning</text><br>
                        <text class="ft1">Online Event Registration</text><br>
                        <text class="ft1">Online RSVP</text><br>
                        <text class="ft1">Venu Booking and Management</text><br>
            </div>
            <div class="col-md-3">

                <text class="ft1">Lapu-Lapu Events</text><br>
                <text class="ft1">Mandaue Events</text><br>
                <text class="ft1">Cebu Events</text><br>
                <text class="ft1">Liloan Events</text><br>
                <text class="ft1">Mabolo Events</text><br>
                <text class="ft1">Talisay Events</text><br>
            </div>
            <div class="col-md-3">
                <label class="flab" >Connect With Us<label>
                        <img src="images/icon/email.svg" style="width: 7%;"><text class="ft4">Contact Support</text><br>
                        <img src="images/icon/email.svg" style="width: 7%;"><text class="ft4">Contact Sale</text><br>
                        <img src="images/icon/fb.svg" style="width: 7%;"><text class="ft4">Facebook</text><br>
                        <img src="images/icon/twitter.svg" style="width: 7%;"><text class="ft4">Twitter</text><br>
                        <img src="images/icon/linkedin.svg" style="width: 7%;"><text class="ft4">LinkedIn</text><br>
                        <img src="images/icon/gplus.svg" style="width: 7%;"><text class="ft4">Google+</text><br>

            </div>
        </div>



        <div class="row ftfont2">
            <div class="col-md-2"><p>HOME</p></div>
            <div class="col-md-2"><p>EVENTS</p></div>
            <div class="col-md-2"><p>CATEGORIES</p></div>
            <div class="col-md-2"><p>PRICING</p></div>
            <div class="col-md-2"><p>ABOUT</p></div>
            <div class="col-md-2"><p>CONTACT</p></div>
        </div>
        <!--      </div>-->

</footer>



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script>

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            var i = 0;
            while (i < data.length) {

                var reg_fee = data[i]["reg_fee"]? '₱'+data[i]["reg_fee"]: "Free";
                var event_title = data[i]["event_title"];
                var event_id = data[i]["event_id"];
                var banner = data[i]["cover_photo_link"];
                var month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                var e_date = new Date(data[i]["event_date"]);
                var event_date = month[e_date.getMonth()];
                event_date += ' ' + e_date.getDate();
                event_date += ', ' + e_date.getFullYear();
                var location = data[i]["address"];
                //var time = data[i]["event_start_time"] + ' - ' +data[i]["event_end_time"];
                //var time = <?php echo '10:20:30'?>;
                //var time = t.getHours();
                var tm = data[i]["event_id"];
                console.log(data[i]["event_id"]);
                var event_container = ['<div class="col-lg-4 col-sm-6 portfolio-item">',
                    '<div class="card h-100">',
                    '<a href="event-details.php?event_id='+event_id+'">',
                    '<img class="card-img-top" src="images/events/ev1.jpg" alt=""></a>',
                    '<div class="card-body">',
                    '<h4 class="card-title title">',
                    '<b>',
                    '<a href="event-details.php?event_id='+event_id+'">'
                    +event_title+
                    '</a>',
                    '</b>',
                    '<button class="pull-right viewmore" type="button" >'
                    +reg_fee+
                    '</button>',
                    '</h4>',
                    '<h4>',
                    '<img src="images/icon/calendar.svg" alt="" style="width: 6.5%;">',
                    '<text class="eventd">'
                    +event_date+
                    '</text>',
                    '</h4>',
                    '<h5 >',
                    '<img src="images/icon/placeholder.svg" alt="" style="width: 6.5%;">',
                    '<text class="eventd">'
                    +location+
                    '</text>',
                    '</h5>',
                    '<h5 >',
                    '<img src="images/icon/clock.svg" alt="" style="width: 6.5%;">',
                    '<text class="eventd">',
                    data[i]['start_time'],
                    '</text>',
                    '</h5>',
                    '<h5 >',
                    '<img src="images/icon/team.svg" alt="" style="width: 6.5%;">',
                    '<text class="eventd">300 Join</text>',
                    '</h5>',
                    '<div class="tags">',
                    '<button type="button" class="con">#Conference</button>',
                    '<button type="button" class="con">#Cebu</button>',
                    '<button type="button" class="con">#Expo</button>',
                    '<img class="pull-right" src="images/icon/bookmark.svg" alt="SAVE" style="width:8%;cursor: pointer;">',
                    '</div>',
                    '</div>',
                    '</div>'].join('');
                $('#events_list').append(event_container);
                i++;
            }
            console.log(data);
        }
    };
    xmlhttp.open("GET", "get_events.php", true);
    xmlhttp.send();


</script>

</body>

</html>