<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head >
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >

    <title >Flockers</title >
    <!--ckeditor-->
    <script src="../ckeditor/ckeditor.js"></script>
<!--<link rel="../ckeditor/samples/stylesheet" href="sample.css">-->

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
	
	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" >
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" >

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../src/style.css" />


</head >
<style >
    #step-1, #step-2, #step-3, #step-4, #step-5,#step-6 {
        width: 100% !important;
        height: 300px !important;
        }
</style >

<body class="nav-md" >
<div class="container body" >
    <div class="main_container" >
        <div class="col-md-3 left_col" >
           <?php require "../includes/sideBarMenu.php";?>
        </div >

        <!-- top navigation -->
        <div class="top_nav" >
           <?php require "../includes/topNavBar.php";?>
        </div >
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="background-color: white; min-height: 500px;">
            <div class="row" >
                <div class="col-md-12 col-sm-12 col-xs-12" >
                    <div class="dashboard_graph" >
                                    <div class="clearfix"></div>
                                    <div class="row">

                                        <form action="../paypal/payments.php" method="post" target="_blank" name="create_form">
                                            <input type="hidden" name="cmd" value="_xclick" />
                                            <input type="hidden" name="no_note" value="1" />
                                            <input type="hidden" name="lc" value="UK" />
                                            <input type="hidden" name="currency_code" value="PHP" />
                                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                                            <input type="hidden" name="first_name" value="Customer's First Name"  />
                                            <input type="hidden" name="last_name" value="Customer's Last Name"  />
                                            <input type="hidden" name="payer_email" value="customer@example.com"  />
                                            <input type="hidden" name="item_number" value="123456" />

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2><b>Hello there,</b> Let's start creating your events</h2>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">


                                                    <!-- Smart Wizard -->
                                                    <div id="wizard" class="form_wizard wizard_horizontal">
                                                        <ul class="wizard_steps">
                                                            <li>
                                                                <a href="#step-1">
                                                                    <span class="step_no">1</span>
                                                                    <span class="step_descr" style="color: #03a9f5;">

                                        <!--Get the address name and the latitude and longitude of the venue-->
                                            <input type="hidden" id="city" name="city" />
                                            <input type="hidden" id="cityLat" name="cityLat" />
                                            <input type="hidden" id="cityLng" name="cityLng" />

                                              <small>Choose a venue</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#step-2">
                                                                    <span class="step_no">2</span>
                                                                    <span class="step_descr" style="color: #03a9f5;">
                                              <small>Meetup topic</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#step-3">
                                                                    <span class="step_no">3</span>
                                                                    <span class="step_descr" style="color: #03a9f5;">
                                              <small>Meetup description</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#step-4">
                                                                    <span class="step_no">4</span>
                                                                    <span class="step_descr" style="color: #03a9f5;">
                                              <small>Admission</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#step-5">
                                                                    <span class="step_no">5</span>
                                                                    <span class="step_descr" style="color: #03a9f5;">
                                              <small>Terms and Agreement</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#step-6">
                                                                    <span class="step_no">6</span>
                                                                    <span class="step_descr" style="color: #03a9f5;">
                                              <small>Subscription</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                                            <div class="x_panel">
                                                        <div id="step-1">
<!--                                                            <form class="form-horizontal form-label-left">-->
                                                            <div id="location_holder" style="position: relative; ">
                                                                <div id="toptext">Where do you want to meet with other Flockers?<br />
																</div>
																<h4>
                                                                    <i>
                                                                        <small id="place_holder" ></small >&nbsp;&nbsp;
                                                                        <small style="text-decoration: none;
																				cursor: pointer;
																				color: white;
																				background-color: #03a9f5;
																				padding-left: 8px;
																				border: none;
																				padding-right: 13px;
																				padding-top: 5px;
																				padding-bottom: 8px;
																				font-family: 'Quicksand', sans-serif;
																				border-radius: 5px;"
                                                                               id="change_location" >Change Location
                                                                        </small >
                                                                    </i>
                                                                </h4 >
                                                            </div >
                                                            <div id="map_holder" style="width: 100%; height: 300px; margin-top: -7px !important; box-shadow: 0px -1px 44px -18px rgba(0,0,0,0.75); " >

                                                            </div >
<!--                                                            </form>-->

                                                        </div>
                                                        <div id="step-2">
                                                            <h2 class="StepTitle"></h2>
                                                            <p >
                                                                What would be your event be about?<br />
                                                                <input type="text" id="topics" onkeydown="get_topics(this.value)" placeholder="Search for a topic" autofocus/>
                                                            </p>
                                                            <p id="topic_list"style="width: 100%; height: 300px;">
                                                                List of topics here
                                                            </p>
                                                        </div>
                                                        <div id="step-3">
                                                            <h2 class="StepTitle"></h2>
                                                            <p>
                                                                What will be your event will be?<br />
                                                                <input type="text" id="event_name" name="event_name" placeholder="Name your event" autofocus/>
                                                            </p>
                                                            <p>
                                                                Describe who should join, and what your meetup will do.
                                                            </p>
                                                            <!--wysywg-->
                                                            <!--<p style="width: 100%; height: 300px;">
                                                                <textarea name="event_desc" id="event_desc" cols="30"
                                                                          rows="10" ></textarea >
                                                            </p>-->
                                                            <textarea  name="event_desc" id="event_desc" class="validate[required]" rows="5" placeholder="Event Description"></textarea>
                                                            <script >
                                                                CKEDITOR.replace( 'event_desc' );
                                                            </script >
                                                            <!--wysywg-->
                                                        </div>
                                                        <div id="step-4">
                                                            <!--<h2 class="StepTitle">Step 4 Content</h2>-->
                                                            <p>
                                                                Admission Type: <br><br>
																
																
                                                                <input type="radio" id="free"    name="admission" onclick="admission_type(this.value)" value="1"/>Free<br /><br />
																
																
															
                                                                <input type="radio" id="premium" name="admission" onclick="admission_type(this.value)" value="2"/>Premium
																
                                                                <span id="prem"></span>
																
                                                            </p>
                                                        </div>
                                                        <div id="step-5">
															<h2 class="StepTitle" style="font-family: 'Quicksand', sans-serif; font-weight: 500; color: #03a9f5;">Terms and condition</h2>
                                                            
                                                            <p style="width: 100%; height: 300px; text-align: justify;">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>

                                                            </p>
                                                            <div class="">
                                                                <label>
                                                                    <input type="checkbox" class="js-switch" id="terms_agreement" dataswitchery="true"/> I Agree to the Terms and Agreement

                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div id="step-6">
                                                            <!--<h2 class="StepTitle">Step 5 Content</h2>-->
                                                            <p>
                                                                Subscribe to us...
                                                            </p>
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                                    <div class="x_panel">
                                                                        <sup>₱</sup>500.00<sub>/month</sub>
                                                                        <p>
                                                                            How many months you want your event to be advertised by the system?
                                                                        </p>
                                                                        <select name="subscribe" id="subscribe" onchange="payment_preview(this.value)" required>
                                                                            <option value="1" >1 month</option >
                                                                            <option value="2" >2 months</option >
                                                                            <option value="3" >3 months</option >
                                                                            <option value="4" >4 months</option >
                                                                            <option value="5" >5 months</option >
                                                                            <option value="6" >6 months</option >
                                                                            <option value="7" >7 months</option >
                                                                            <option value="8" >8 months</option >
                                                                            <option value="9" >9 months</option >
                                                                            <option value="10" >10 months</option >
                                                                            <option value="11" >11 months</option >
                                                                            <option value="12" >12 months</option >
                                                                        </select >
                                                                        <script >
                                                                            function payment_preview(val) {
                                                                                var prev ="₱ " + (val * 500);
                                                                                document.getElementById('preview').innerHTML = prev;

                                                                            }
                                                                        </script >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                                    <div class="x_panel">
                                                                        <div id="preview"></div>
                                                                        <button type="submit" name="checkout" class="btn btn-lg btn-dark">Check Out</button >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="x_panel" style="font-family: 'Quicksand', sans-serif; color:  #03a9f5; font-size: 15px; font-weight: 500;">
                                                                Preview Details
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
<!-- bootstrap-wysiwyg -->
<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="../vendors/google-code-prettify/src/prettify.js"></script>
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
    function display_subscr(val) {
        $('#pay').remove();
        $('#subscribe_content').remove();
        var app = "<select id='pay'>" +
                "<option value='"+val * 3+"'>3 Month</option>"+
                "<option value='"+val * 6+"'>6 Month</option>"+
                "<option value='"+val * 12+"'>1 Year</option>"+
            "</select>";
        $('#subscribe_content').append(app);
    }

    function admission_type(val) {
        var app = "";
        if(val == '2' && $('#admission_fee').length == 0) {
            app = "<input type='number' name='admission_fee' id='admission_fee' required/>";
            $('#prem').append(app);
        }else if(val == '1') {
            $('#admission_fee').remove();
        }
    }

    function get_topics(topic) {
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status == 200) {
                if(this.responseText != '') {
                    var data = JSON.parse(this.responseText);
                    var insert = '';
                    var i = 0;
                    while (i < data.length) {
                        insert += "<div class=''><label><input name='topics[]' type='checkbox' class='js-switch' id='terms_agreement' value='" + data[i]["id"] + "'/>" + data[i]['interest_name'] + "</label></div>";
                        i++;
                    }
                    document.getElementById('topic_list').innerHTML = insert;
                }
            }
        };
        xmlhttp.open("GET", "php/createevents_topics.php?topic=" +topic, true)
        xmlhttp.send();
    }

$(document).ready(function () {

    $('#payment').remove();
    $('#next, #previous').on('click', function () {
        var selected = $('#wizard ul li a.selected').attr('rel');
        console.log(selected)
        if ((selected != '5' || selected != '4')) {
            /*$('#payment').addClass('buttonDisabled');*/
            $('#next').addClass('buttonDisabled');
                if($('#terms_agreement').attr('dataswitchery') == 'false'){
                   $('span.switchery.switchery-default').css({
                        boxShadow: "rgb(223, 223, 223) 0px 0px 0px 0px inset",
                        borderColor: "rgb(223, 223, 223)",
                        backgroundColor: "rgb(255, 255, 255)",
                        transition: "border 0.4s, box-shadow 0.4s"

                   });
                   $('span.switchery.switchery-default').find('small').css({
                       left: "0px",
                       transition: "background-color 0.4s, left 0.2s"
                   });
                   checked = false;
                }
        }

        if (selected) {

        }
    });


    $('#terms_agreement').click(function () {

        if(this.checked){
            $('#next').removeClass('buttonDisabled');
            $(this).attr('dataswitchery', 'false');
        }else {
            $('#next').addClass('buttonDisabled');
            $(this).attr('dataswitchery', 'true');
        }
    });






});
//    $(document).ready(function () {
// search new place for event up
        function searchPlace() {
            var input = document.getElementById('search_new_place');
            var autocomplete = new google.maps.places.Autocomplete(input);
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById('city').value = place.name;
                document.getElementById('cityLat').value = place.geometry.location.lat();
                document.getElementById('cityLng').value = place.geometry.location.lng();
            });
        }

        jQuery("#change_location").click(function () {
            jQuery("#location_holder h4 i").css({display: "none"});
            jQuery("#location_holder h4").append("<input type='search'  autocomplete='on' onfocus='searchPlace()' runat='server' size='50' style='width: 55%; ' id='search_new_place' name='venue' autofocus/>");
        });


//google map
        function initAutoComplete() {
            var map = new google.maps.Map(document.getElementById('map_holder'), {
                center: {lat: 10.325154, lng: 123.95374800000002},
                zoom: 3,
				
		styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ],
				
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKsHRoSGi4ufnKBFUUPepgP8AUcWxxis8&libraries=places&callback=initAutoComplete" async defer ></script >


</body >
</html >
