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

    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" >
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" >

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../src/style.css" />

</head >

<body class="nav-md" >
<div class="container body" >
    <div class="main_container" >
        <div class="col-md-3 left_col" >
           <?php require "../includes/sideBarMenu.html";?>
        </div >

        <!-- top navigation -->
        <div class="top_nav" >
           <?php require "../includes/topNavBar.php";?>
        </div >
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" >
            <div class="row" >
                <div class="col-md-12 col-sm-12 col-xs-12" >
                    <div class="dashboard_graph" >

                       <!-- <div class="row x_title" >
                            <div class="col-md-4" >
                                <h3 >Organize an Event</h3 >
                            </div >
                            <div class="col-md-8">
                                Step: <button class="btn-stepsNav" data-Id="step1" type="button">
                                <?php
                                    $step = isset($_GET['step']) ? $_GET['step'] : 1;
                                    echo $step;
                                ?>
                                    <input type="hidden" id="get_step" value="<?php echo $step;?>">
                                </button>
                            </div>
                        </div >
                        <div class="row x_title" >
                            <div class="col-md-12 col-sm-12 col-xs-12" >
                                <div id="create-event-placeholder" >
                                    step 1
                                    <div class="container">
                                        <div class="row" id="step1">
                                            <section class="step-section active-section" id="" data-Id="step1">
                                                <div id="location_holder" style="position: relative;">
                                                    <h4 >Where do you want to meet with other flockers?<br />
                                                        <i >
                                                            <small id="place_holder" ></small >&nbsp;&nbsp;
                                                            <small style="text-decoration: underline; cursor: pointer; color: blue;"
                                                                   id="change_location" >change
                                                            </small >
                                                        </i >
                                                    </h4 >
                                                </div >
                                                <div id="map_holder" style="width: 100%; height: 300px; background-color: #1ABB9C;" >

                                                </div >
                                            </section>
                                        </div><br>
                                        <div class="row" id="step2">
                                            <section class="step-section active-section" id="" data-Id="step2">
                                                <div id="location_holder" style="position: relative;">
                                                    <h4 >What your meetup would be about ?<br />
                                                    </h4 >

                                                </div >
                                            </section>
                                        </div>
                                        <div class="row" id="step3">
                                            <section class="step-section active-section" id="" data-Id="step3">
                                                <div id="location_holder" style="position: relative;">
                                                    <h4 >Provide short description of your meet up.<br />

                                                    </h4 >
                                                </div >
                                            </section>
                                        </div>
                                        <div class="row" id="step4">
                                            <section class="step-section active-section" id="" data-Id="step5">
                                                <div id="location_holder" style="position: relative;">
                                                    <h4 >Choose your plan ... <br />

                                                    </h4 >
                                                </div >
                                            </section>
                                        </div>
                                        <div class="row" id="step5">
                                            <section class="step-section active-section" id="" data-Id="step5">
                                                <div id="location_holder" style="position: relative;">
                                                    <h4 >Terms and agreement<br />

                                                    </h4 >
                                                </div >
                                            </section>
                                        </div>
                                        <a class="btn btn-info" style="<?php echo $step>=5 ? 'display:none': 'float: right'; ?>"  href="createevents.php?step=<?php echo $step+1?>"> Next</a>
                                        <a class="btn btn-info" style="<?php echo $step<=1 ? 'display:none': 'float: left'; ?>"  href="createevents.php?step=<?php echo $step-1?>"> Previous</a>
                                    </div>
                                </div >
                            </div >-->
                                    <!--<div class="page-title">
                                        <div class="title_left">
                                            <h3>Form Wizards</h3>
                                        </div>

                                        <div class="title_right">
                                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search for...">
                                                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <form action="../paypal/payments.php" method="post" target="_blank">
                                            <input type="hidden" name="cmd" value="_xclick" />
                                            <input type="hidden" name="no_note" value="1" />
                                            <input type="hidden" name="lc" value="PHP" />
                                            <input type="hidden" name="currency_code" value="GBP" />
                                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                                            <input type="hidden" name="first_name" value="Customer's First Name"  />
                                            <input type="hidden" name="last_name" value="Customer's Last Name"  />
                                            <input type="hidden" name="payer_email" value="customer@example.com"  />
                                            <input type="hidden" name="item_number" value="123456" />
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Create your event</h2>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">


                                                    <!-- Smart Wizard -->
                                                    <div id="wizard" class="form_wizard wizard_horizontal">
                                                        <ul class="wizard_steps">
                                                            <li>
                                                                <a href="#step-1">
                                                                    <span class="step_no">1</span>
                                                                    <span class="step_descr">

                                              <small>Choose a venue</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#step-2">
                                                                    <span class="step_no">2</span>
                                                                    <span class="step_descr">
                                              <small>Meetup topic</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#step-3">
                                                                    <span class="step_no">3</span>
                                                                    <span class="step_descr">
                                              <small>Meetup description</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#step-4">
                                                                    <span class="step_no">4</span>
                                                                    <span class="step_descr">
                                              Step 4<br />
                                              <small>Step 4 description</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div id="step-1">
<!--                                                            <form class="form-horizontal form-label-left">-->
                                                            <div id="location_holder" style="position: relative;">
                                                                <h4 >Where do you want to meet with other flockers?<br />
                                                                    <i >
                                                                        <small id="place_holder" ></small >&nbsp;&nbsp;
                                                                        <small style="text-decoration: underline; cursor: pointer; color: blue;"
                                                                               id="change_location" >change
                                                                        </small >
                                                                    </i >
                                                                </h4 >
                                                            </div >
                                                            <div id="map_holder" style="width: 100%; height: 300px;" >

                                                            </div >
<!--                                                            </form>-->

                                                        </div>
                                                        <div id="step-2">
                                                            <h2 class="StepTitle">Step 2 Content</h2>
                                                            <p >
                                                                What would be your event be about?
                                                                <input type="text" placeholder="Search for a topic"/>
                                                            </p>
                                                            <p id="topic_list"style="width: 100%; height: 300px;">
                                                                List of topics here
                                                            </p>
                                                        </div>
                                                        <div id="step-3">
                                                            <h2 class="StepTitle">Step 3 Content</h2>
                                                            <p>
                                                                What will be your event will be?
                                                                <input type="text" placeholder="Name your event"/>
                                                            </p>
                                                            <p>
                                                                Describe who should join, and what your meetup will do.
                                                            </p>
                                                            <p style="width: 100%; height: 300px;">
                                                                <textarea name="event_description" id="event_description" cols="30"
                                                                          rows="10" ></textarea >
                                                            </p>
                                                        </div>
                                                        <div id="step-4">
                                                            <h2 class="StepTitle">Terms and condition</h2>
                                                            <p>Terms and conditions
                                                            </p>
                                                            <p style="width: 100%; height: 300px;">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>

                                                            </p>
                                                            <div class="">
                                                                <label>
                                                                    <input type="checkbox" class="js-switch" checked /> Checked
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- End SmartWizard Content -->
                            <div class="clearfix" ></div >

                        </div >
                    </div >
                </div >
            </form >

            </div >
            <br />
        </div >
    </div >
</div >
</div>
<!-- /page content -->

<!-- footer content -->
<footer >
    <div class="pull-right" >
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com" >Colorlib</a >
    </div >
    <div class="clearfix" ></div >
</footer >
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

<!-- Switchery -->
<script src="../vendors/switchery/dist/switchery.min.js"></script>

<!-- jQuery Smart Wizard -->
<script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js" ></script >

<script >
//$('div.actionBar .buttonNext').on('click', function () {
//    if(('.content').css('display')=='block'){
//        alert('content ID');
//    }
//    console.log('content ID');
//});


//    $(document).ready(function () {
// search new place for event up
        function searchPlace() {
            var input = document.getElementById('search_new_place');
            var autocomplete = new google.maps.places.Autocomplete(input);
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                autocomplete.getPlace();
                //alert("This function is working!");
                //alert(place.name);
                // alert(place.address_components[0].long_name);

            });
        }

        jQuery("#change_location").click(function () {
            jQuery("#location_holder h4 i").css({display: "none"});
            jQuery("#location_holder h4").append("<input type='search' autocomplete='on' onfocus='searchPlace();' runat='server' size='50' style='width: 50%;' id='search_new_place' autofocus/>");


        });

//google map
        function initAutoComplete() {
            var map = new google.maps.Map(document.getElementById('map_holder'), {
                center: {lat: 10.3156, lng: 123.8854},
                zoom: 15,
                mapTyped: 'roadmap'
            });

            var geocoder = new google.maps.Geocoder;
            geocodeLatLng(geocoder, map);

            function geocodeLatLng(geocoder, map) {
                var input = "10.3156, 123.8854";
                var latlngStr = input.split(',', 2);
                var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
                geocoder.geocode({'location': latlng}, function (results, status) {
                    if (status === 'OK') {
                        if (results[1]) {
                            map.setZoom(16);
                            document.getElementById("place_holder").innerHTML = results[1].formatted_address;
                        }
                        else {
                            window.alert('No results found');
                        }
                    } else {
                        window.alert('Geocoder failed due to: ' + status);
                    }
                });
            }
        }



        var windowWidth = $('#step1').width();
        var slideCount = $('.slide').length;

        $('button#next').on('click', function() {
            var slideActive = $('.slide.active');
            var nextSlide = slideActive.next('.slide');

            slideActive.addClass('active').animate({
                'right' : windowWidth
            },500);

            if($('.slide').index(nextSlide) === -1){
                nextSlide = $('.slide').eq(0);
            }

            nextSlide.addClass('pre-active');

            setTimeout(function(){
                slideActive.css({'right':'0px'});
                nextSlide.removeClass('pre-active');
                slideActive.removeClass('active');
                nextSlide.addClass('active');
            },510);

        });

        $('button#prev').on('click', function() {
            var slideActive = $('.slide.active');
            var prevSlide = slideActive.prev('.slide');

            slideActive.addClass('active').animate({
                'left' : windowWidth
            },500);

            if($('.slide').index(prevSlide) === -1){
                prevSlide = $('.slide').eq(slideCount - 1);
            }

            prevSlide.addClass('pre-active');

            setTimeout(function(){
                slideActive.css({'left':'0px'});
                prevSlide.removeClass('pre-active');
                slideActive.removeClass('active');
                prevSlide.addClass('active');
            },510);

        });

        jQuery('.btn-stepsNav').click(function () {
            var dataId = $(this).attr("data-Id");
            jQuery('.active-section').removeClass('active-section');
            jQuery("#"+dataId).addClass('active-section');

        });
//    });
</script >
<!--<script >

    $(document).ready(function () {
        var step = document.getElementById('get_step').value;
       if(step == 1){
           document.getElementById('step2').style="display:none";
           document.getElementById('step3').style="display:none";
           document.getElementById('step4').style="display:none";
           document.getElementById('step5').style="display:none";
       } else if(step == 2) {
           document.getElementById('step1').style="display:none";
           document.getElementById('step3').style="display:none";
           document.getElementById('step4').style="display:none";
           document.getElementById('step5').style="display:none";
       }else if(step==3) {

           document.getElementById('step1').style="display:none";
           document.getElementById('step2').style="display:none";
           document.getElementById('step4').style="display:none";
           document.getElementById('step5').style="display:none";
       }else if(step==4) {

           document.getElementById('step1').style="display:none";
           document.getElementById('step2').style="display:none";
           document.getElementById('step3').style="display:none";
           document.getElementById('step5').style="display:none";
       }else if(step==5) {

           document.getElementById('step1').style="display:none";
           document.getElementById('step2').style="display:none";
           document.getElementById('step3').style="display:none";
           document.getElementById('step4').style="display:none";
       }
    });

</script >-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKsHRoSGi4ufnKBFUUPepgP8AUcWxxis8&libraries=places&callback=initAutoComplete" async defer ></script >


</body >
</html >
