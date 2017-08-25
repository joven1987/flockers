
$(document).ready(function () {
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
});


