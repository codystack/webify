<?php
$page = 'contact';
include ('./components/header.php');
include ('./components/navbaralt_light.php');
include ('./components/mobile_navbar2.php');
?>
        <div class="content-wrap">
            <div class="py-160">
                <div class="container">
                    <div class="row mb-n8">
                        <div class="col-12 col-lg-10 col-xl-8 show-on-scroll" data-show-distance="10" data-show-duration="600">
                            <h1 class="h2 mt-15 pb-4 pb-sm-0 mb-130">For any enquiries, or to say hello, get in touch 👋</h1>
                        </div>
                    </div>
                    <div class="row gh-1 gv-2 pb-10">
                        <div class="col-12 col-lg-4">
                            <div class="mb-60 show-on-scroll" data-show-delay="100" data-show-distance="20" data-show-duration="500" data-show-origin="left">
                                <p class="lead mb-17 font-weight-medium">Contact info:</p>
                                <ul class="list-group borderless font-size-17">
                                    <li class="list-group-item">Email: <a href="#">hello@webify.com.ng</a></li>
                                    <li class="list-group-item">Phone: <a href="#">+234 (0)803-209-0933</a></li>
                                </ul>
                            </div>
                            <div class="mt-n15 show-on-scroll" data-show-delay="300" data-show-distance="20" data-show-duration="500" data-show-origin="left">
                                <p class="lead mb-17 font-weight-medium">Hours of Operation:</p>
                                <ul class="list-group borderless font-size-17">
                                    <li class="list-group-item">Monday - Friday</li>
                                    <li class="list-group-item">9:00 am - 4:00 pm</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 mt-5 mt-lg-0">
                            <form action="#">
                                <div class="row gh-1 gv-2">
                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="400" data-show-distance="10" data-show-delay="100">
                                        <input type="name" class="form-control" placeholder="Your Name *">
                                    </div>
                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="400" data-show-distance="10" data-show-delay="150">
                                        <input type="email" class="form-control" placeholder="Your Email *">
                                    </div>
                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="400" data-show-distance="10" data-show-delay="200">
                                        <input type="phone" class="form-control" placeholder="Your Phone *">
                                    </div>
                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="400" data-show-distance="10" data-show-delay="250">
                                        <input type="company" class="form-control" placeholder="Company">
                                    </div>
                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="400" data-show-distance="10" data-show-delay="300">
                                        <select class="form-control">
                                            <option selected>Purpose</option>
                                            <option>Complain</option>
                                            <option>New Project</option>
                                            <option>Account</option>
                                            <option>Customer Service</option>
                                            <option>Renewal</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="400" data-show-distance="10" data-show-delay="350">
                                        <select class="form-control">
                                            <option selected>Your Budget</option>
                                            <option>&lt; 10 000</option>
                                            <option>10-20k</option>
                                            <option>20-30k</option>
                                            <option>&gt; 30 000</option>
                                        </select>
                                    </div>
                                    <div class="col-12 show-on-scroll" data-show-duration="400" data-show-distance="10" data-show-delay="400">
                                        <input type="text" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="col-12 show-on-scroll" data-show-duration="400" data-show-distance="10" data-show-delay="450">
                                        <textarea class="form-control" rows="1" placeholder="Message *"></textarea>
                                    </div>
                                    <div class="col-12 show-on-scroll" data-show-duration="400" data-show-distance="10" data-show-delay="470">
                                        <button class="btn btn-dark btn-with-ball mt-20" type="button" name="button">submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--
                    <div id="map" class="gmaps mt-130"></div>
                    <script>
                        function initMap()
                        {
                            const uluru = {
                                lat: 6.430006489353075,
                                lng: 3.468164928594171
                            };
                            const map = new google.maps.Map(document.getElementById('map'),
                            {
                                zoom: 14,
                                scrollwheel: false,
                                mapTypeControl: false,
                                streetViewControl: false,
                                center: uluru,
                                zoomControl: true,
                                zoomControlOptions:
                                {
                                    position: google.maps.ControlPosition.LEFT_TOP
                                },
                                styles: [
                                {
                                    "featureType": "all",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                    {
                                        "saturation": 36
                                    },
                                    {
                                        "color": "#171717"
                                    },
                                    {
                                        "lightness": 40
                                    }]
                                },
                                {
                                    "featureType": "all",
                                    "elementType": "labels.text.stroke",
                                    "stylers": [
                                    {
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    },
                                    {
                                        "weight": "0.01"
                                    }]
                                },
                                {
                                    "featureType": "all",
                                    "elementType": "labels.icon",
                                    "stylers": [
                                    {
                                        "visibility": "off"
                                    }]
                                },
                                {
                                    "featureType": "administrative",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                    {
                                        "lightness": 20
                                    }]
                                },
                                {
                                    "featureType": "administrative",
                                    "elementType": "geometry.stroke",
                                    "stylers": [
                                    {
                                        "weight": 1.2
                                    }]
                                },
                                {
                                    "featureType": "landscape",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#cbcbcb"
                                    }]
                                },
                                {
                                    "featureType": "landscape",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                    {
                                        "color": "#f7f7f7"
                                    }]
                                },
                                {
                                    "featureType": "landscape",
                                    "elementType": "geometry.stroke",
                                    "stylers": [
                                    {
                                        "color": "#818181"
                                    },
                                    {
                                        "gamma": "3.01"
                                    }]
                                },
                                {
                                    "featureType": "poi",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#f6f6f6"
                                    },
                                    {
                                        "lightness": 21
                                    }]
                                },
                                {
                                    "featureType": "poi.park",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#dedede"
                                    },
                                    {
                                        "lightness": 21
                                    }]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 17
                                    }]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "geometry.stroke",
                                    "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 29
                                    },
                                    {
                                        "weight": 0.2
                                    }]
                                },
                                {
                                    "featureType": "road.local",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    }]
                                },
                                {
                                    "featureType": "transit",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#f2f2f2"
                                    },
                                    {
                                        "lightness": 19
                                    }]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "geometry",
                                    "stylers": [
                                    {
                                        "color": "#c2c2c2"
                                    },
                                    {
                                        "lightness": 17
                                    }]
                                }]
                            });
                            const marker = new google.maps.Marker(
                            {
                                position: uluru,
                                map: map,
                                icon: 'assets/images/location-icon.svg'
                            });
                        }
                    </script>
                    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDODKndJ8udk9xrwV_9KZwzziQOgsAR3Ew&amp;callback=initMap"></script>
                    -->
                </div>
            </div>
        </div>

<?php include ('./components/footer.php'); ?>