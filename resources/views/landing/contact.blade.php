@extends('landing.layouts.master')

@section('content')
    <div class="entry-content">
        <div class="section full-width dark sections_style_0 ">
            <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                    <!-- One full width row-->
                    <div class="column one column_column">
                        <div class="column_attr ">
                            <div class="subheader_box">
                                <div class="inside">
                                    <h2 class="hrmargin_0">Stay in touch with us</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" style="padding-top:50px; padding-bottom:0px; ">
            <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                    <!-- One full width row-->
                    <div class="column one column_fancy_heading">
                        <div class="fancy_heading fancy_heading_icon">
                            <h2 class="title">We work from Monday till Friday from 8:00 a.m. to 7:00 p.m.</h2>
                        </div>
                    </div>
                    <!-- One Second (1/2) Column -->
                    <div class="column one-second column_column">
                        <div class="column_attr ">

                            <div id="contactWrapper">
                                <form id="contactform">
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second">
                                        <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                    </div>
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second">
                                        <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                    </div>
                                    <div class="column one">
                                        <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                    </div>
                                    <div class="column one">
                                        <input type="button" value="SEND A MESSAGE" id="submit" onClick="return check_values();">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- One Fourth (1/4) Column -->
                    <div class="column one-fourth column_our_team">
                        <!-- Team Member Area -->
                        <div class="team team_vertical">
                            <div class="image_frame no_link scale-with-grid">
                                <div class="image_wrapper"><img class="scale-with-grid" src="{{ asset('images/our_team_1.jpg') }}" alt="Alice Boyd" />
                                </div>
                            </div>
                            <div class="desc_wrapper">
                                <h4>Alice Boyd</h4>
                                <hr class="hr_color" />
                                <div class="desc">
                                    Aliquam interdum sapien sit amet tortor hendrerit condimentum. Suspendisse
                                </div>
                                <div class="links">
                                    <a href="mailto:#" class="icon_bar icon_bar_small"><span class="t"><i class="icon-mail"></i></span><span class="b"><i class="icon-mail"></i></span></a><a target="_blank" href="#" class="icon_bar icon_bar_small"><span class="t"><i class="icon-facebook"></i></span><span class="b"><i class="icon-facebook"></i></span></a><a target="_blank" href="#" class="icon_bar icon_bar_small"><span class="t"><i class="icon-twitter"></i></span><span class="b"><i class="icon-twitter"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- One Fourth (1/4) Column -->
                    <div class="column one-fourth column_column">
                        <div class="column_attr ">
                            <h3>Our address</h3>
                            <p class="big">
                                Level 13, 2 Elizabeth St,
                                <br> Melbourne, Victoria 3000
                            </p>
                            <hr class="hr_color hrmargin_b_30" />
                            <h5 class="hrmargin_b_4">Befinance Solutions Inc.</h5>
                            <p>
                                Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit pellentesque dui, non felis
                            </p>
                            <p class="hrmargin_b_4">
                                <a class="arrow_link" href="#">Send us e-mail</a>
                            </p>
                            <p class="hrmargin_b_4">
                                <a class="arrow_link" href="#">Call us: 233 455 775</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section full-width sections_style_0 ">
            <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                    <!-- One full width row-->
                    <div class="column one column_map">
                        < <!-- Google map area -->
                        <div class="google-map-wrapper no_border">
                            <div class="google-map" id="google-map-area-54f9debc36473" style="width:100%; height:500px;">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('additional_js')
    <script src="http://maps.google.com/maps/api/js?sensor=false&ver=5.9"></script>

    <script>
        function google_maps_54f9debc36473() {
            var latlng = new google.maps.LatLng(-33.8710, 151.2039);
            var myOptions = {
                zoom: 13,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [　{
                    "stylers": [　　　{
                        "hue": "#00d4ff"
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
            var map = new google.maps.Map(document.getElementById("google-map-area-54f9debc36473"), myOptions);
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