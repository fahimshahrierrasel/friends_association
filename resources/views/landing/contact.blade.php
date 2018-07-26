@extends('landing.layouts.master')

@section('content')
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Contact with us any time</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
        </div>
    </div>
    <div class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Stay in touch with us</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group"><label>Your Name</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>Your Email</label><input class="form-control" type="email"></div>
                                <div class="form-group"><label>Subject</label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>Message</label><textarea class="form-control" rows="5"></textarea></div><button class="btn btn-outline-success float-right" type="button">SEND A MESSAGE</button></form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Our Address</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="font-size:20px;">124/5, Shajanpur, Dhaka-1224<br></p>
                            <p class="card-text" style="font-size:20px;"><i class="fa fa-phone" style="font-size:20px;"></i>&nbsp; 015983120391<br></p>
                            <p class="card-text" style="font-size:20px;"><i class="fa fa-envelope" style="font-size:20px;"></i>&nbsp; info@friendsassoci.com<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Location </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div id="google-map-area" class="google-map" style="width:100%;height:500px;"></div>
        </div>
    </div>
@endsection


@section('additional_js')
    <script src="http://maps.google.com/maps/api/js?key=&AIzaSyABjeTuxGvnbAEQZ58p1rotvyRTbpMq6zQsensor=false&ver=5.9"></script>
    {{--<script async defer--}}
            {{--src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">--}}
    {{--</script>--}}
    <script>
        function google_maps_54f9debc36473() {
            var latlng = new google.maps.LatLng(23.7460093,90.4241715);
            var myOptions = {
                zoom: 20,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [　{
                    "stylers": [　　　{
                        "hue": "#384bff"
                    }, 　　　 {
                        "lightness": 1
                    }, 　　　 {
                        "saturation": -11
                    }　]
                }],
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false,
                scrollwheel: false
            };
            var map = new google.maps.Map(document.getElementById("google-map-area"), myOptions);
            var marker = new google.maps.Marker({
                position: latlng,
                icon: "images/home_finance_contact_pin1.png",
                map: map
            });
        }
        jQuery(document).ready(function($) {
            google_maps_54f9debc36473();
        });
    </script>
@endsection