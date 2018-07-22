@extends('landing.layouts.master')

@section('content')
    <div class="entry-content">
        <div class="section full-width "
             style="padding-top:180px; padding-bottom:0px; background-image:url({{ asset('images/home_finance_slider2.jpg') }}); background-repeat:no-repeat; background-position:center bottom; ">
            <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                    <!-- One Second (1/2) Column -->
                    <div class="column one-second column_column">
                        <div class="column_attr animate" data-anim-type="fadeInLeft">
                            <div style="padding: 0 0 160px 50px;">
                                <h2>Maintain financial flow
                                    <br>
                                    and invest wisely</h2>
                                <hr class="no_line hrmargin_b_40"/>
                                <h4>Version proin gravida nibh vel velit auctor aliquet.
                                    <br>
                                    Aenean sollicitudin.</h4>
                                <hr class="no_line hrmargin_b_40"/>
                                <a class="button button_large button_theme button_js"
                                   href="{{ url('/') }}"><span
                                            class="button_label">See offer</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- One full width row-->
                    <div class="column one column_column">
                        <div class="column_attr animate" data-anim-type="fadeInUp">
                            <div class="quote_box">
                                <div class="inside">
                                    Lorem quis bibendum auctor, nisi elit consequat ipsum sagittis sem nibh
                                    id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris
                                    morbi accumsan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" style="padding-top:80px; padding-bottom:0px; ">
            <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                    <!-- One Second (1/2) Column -->
                    <div class="column one-second column_column">
                        <div class="column_attr align_center">
                            <div style="border-right: 1px solid #27c2d6; padding: 30px 8% 20px 0;">
                                <div class="image_frame no_link scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper"><img class="scale-with-grid"
                                                                    src="{{ asset('images/home_finance_pic_1.png') }}"
                                                                    alt="">
                                    </div>
                                </div>
                                <hr class="no_line hrmargin_b_10"/>
                                <h5>Quisque lorem tortor</h5>
                                <table>
                                    <tr>
                                        <td>
                                            <span style="background: url({{ asset('images/home_finance_icon_a.png') }}) no-repeat left center; padding-left: 22px;">Nulla ipsum dolor lacus</span>
                                        </td>
                                        <td>
                                            <span style="background: url({{ asset('images/home_finance_icon_b.png') }}) no-repeat left center; padding-left: 22px;">Aenean sollicitudin</span>
                                        </td>
                                        <td>
                                            <span style="background: url({{ asset('images/home_finance_icon_b.png') }}) no-repeat left center; padding-left: 22px;">Duis sed odio sit</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- One Fourth (1/4) Column -->
                    <div class="column one-fourth column_column">
                        <div class="column_attr align_center animate" data-anim-type="zoomIn">
                            <hr class="no_line" style="margin: 0 auto 50px;"/>
                            <div class="chart_box">
                                <div class="chart" data-percent="57" data-color="#27c2d6">
                                    <div class="num">
                                        57%
                                    </div>
                                </div>
                                <p>
                                    <span></span>
                                </p>
                            </div>
                            <h5>Nam pellentesque elit</h5>
                            <p style="color: #ababab; margin: 0 6%;">
                                Lorem ipsum primis in nibh vel risus. Sed vel lectus. Ut sagittis, ipsum
                                dolor
                            </p>
                        </div>
                    </div>
                    <!-- One Fourth (1/4) Column -->
                    <div class="column one-fourth column_column">
                        <div class="column_attr align_center animate" data-anim-type="zoomIn">
                            <hr class="no_line" style="margin: 0 auto 50px;"/>
                            <div class="chart_box">
                                <div class="chart" data-percent="76" data-color="#27c2d6">
                                    <div class="num">
                                        76%
                                    </div>
                                </div>
                                <p>
                                    <span></span>
                                </p>
                            </div>
                            <h5>Dapibus risus ante</h5>
                            <p style="color: #ababab; margin: 0 6%;">
                                Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section sections_style_4">
            <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                    <!-- One Third (1/3) Column -->
                    <div class="column one-third column_column">
                        <div class="column_attr ">
                            <div style="border-right: 1px solid #27c2d6; padding: 20px 8% 20px 0;">
                                <h3>Our offer</h3>
                                <div class="list_item lists_2 clearfix">
                                    <div class="list_left list_image"><img
                                                src="{{ asset('images/home_finance_offer_small1.png') }}"
                                                alt="Investment solutions" class="scale-with-grid"/>
                                    </div>
                                    <div class="list_right">
                                        <h4>Investment solutions</h4>
                                        <div class="desc">
                                            Vitae adipiscing turpis. Aenean ligula nibh in, molestie id
                                            viverra a, dapibus.
                                        </div>
                                    </div>
                                </div>
                                <hr class="no_line hrmargin_b_15">
                                <div class="list_item lists_2 clearfix">
                                    <div class="list_left list_image"><img
                                                src="{{ asset('images/home_finance_offer_small2.png') }}"
                                                alt="Strategy design" class="scale-with-grid"/>
                                    </div>
                                    <div class="list_right">
                                        <h4>Strategy design</h4>
                                        <div class="desc">
                                            Duis non cursus tellus! id. In pulvinar, est eget amet. Donec
                                            quis est non posuere.
                                        </div>
                                    </div>
                                </div>
                                <hr class="no_line hrmargin_b_15">
                                <div class="list_item lists_2 clearfix">
                                    <div class="list_left list_image"><img
                                                src="{{ asset('images/home_finance_offer_small3.png') }}"
                                                alt="Financial integration" class="scale-with-grid"/>
                                    </div>
                                    <div class="list_right">
                                        <h4>Financial integration</h4>
                                        <div class="desc">
                                            Proin a massa risus nullam. Suspendisse ut augue metus. Ut sed
                                            tellus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- One Third (1/3) Column -->
                    <div class="column one-third column_column">
                        <div class="column_attr align_left">
                            <div style="padding: 20px 8% 20px 8%;">
                                <h3>About us</h3>
                                <p class="big">
                                    Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies
                                    a, gravida vitae, dapibus risus ante sodales lectus blandit eu.
                                </p>
                                <p>
                                    Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                                    ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                    inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis
                                </p>
                                <a class="big" href="#">Inwest wisely</a>
                            </div>
                        </div>
                    </div>
                    <!-- One Third (1/3) Column -->
                    <div class="column one-third column_column">
                        <div class="column_attr align_center">
                            <div class="calltoaction_box"
                                 style="background: url({{ asset('images/home_finance_calltoaction.jpg') }}) center center;">
                                <div class="inside" style="padding: 80px 8% 65px">
                                    <div class="image_frame no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid"
                                                                        src="images/home_finance_value.png"
                                                                        alt="">
                                        </div>
                                    </div>
                                    <hr class="no_line hrmargin_b_20"/>
                                    <h3 style="color: #fff; font-weight: 500;">123,000,0000</h3>
                                    <p class="big" style="color: #fff;">
                                        Earned for you
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section sections_style_4">
            <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                    <!-- Page Title-->
                    <!-- One full width row-->
                    <div class="column one column_fancy_heading">
                        <div class="fancy_heading fancy_heading_icon">
                            <!-- Animated area -->
                            <div class="animate" data-anim-type="zoomInUp">
                                <h2 class="title">Here are the list of some of our best clients</h2>
                                <div class="inside">
                                    <p class="big" style="margin: 0 10% 0;">
                                        Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo
                                        vel bibendum sapien massa ac turpis
                                        <br> faucibus orci luctus nonconsectetuer lobortis quis, varius in,
                                        purus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- One full width row-->
                    <div class="column one column_clients">
                        <ul class="clients clearfix ">
                            <li style="width:16.667%">
                                <div class="client_wrapper">
                                    <a target="_blank" href="#" title="Client 1">
                                        <div class="gs-wrapper"><img width="145" height="75"
                                                                     src="{{ asset('images/client_1-145x75.png') }}"
                                                                     class="scale-with-grid wp-post-image"
                                                                     alt="client_1"/>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li style="width:16.667%">
                                <div class="client_wrapper">
                                    <a target="_blank" href="#" title="Client 2">
                                        <div class="gs-wrapper"><img width="145" height="75"
                                                                     src="{{ asset('images/client_2-145x75.png') }}"
                                                                     class="scale-with-grid wp-post-image"
                                                                     alt="client_2"/>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li style="width:16.667%">
                                <div class="client_wrapper">
                                    <a target="_blank" href="#" title="Client 3">
                                        <div class="gs-wrapper"><img width="145" height="75"
                                                                     src="{{ asset('images/client_3-145x75.png') }}"
                                                                     class="scale-with-grid wp-post-image"
                                                                     alt="client_3"/>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li style="width:16.667%">
                                <div class="client_wrapper">
                                    <a target="_blank" href="#" title="Client 4">
                                        <div class="gs-wrapper"><img width="145" height="75"
                                                                     src="{{ asset('images/client_4-145x75.png') }}"
                                                                     class="scale-with-grid wp-post-image"
                                                                     alt="client_4"/>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li style="width:16.667%">
                                <div class="client_wrapper">
                                    <a target="_blank" href="#" title="Client 5">
                                        <div class="gs-wrapper"><img width="145" height="75"
                                                                     src="{{ asset('images/client_5-145x75.png') }}"
                                                                     class="scale-with-grid wp-post-image"
                                                                     alt="client_5"/>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li style="width:16.667%">
                                <div class="client_wrapper">
                                    <a target="_blank" href="#" title="Client 6">
                                        <div class="gs-wrapper"><img width="145" height="75"
                                                                     src="{{ asset('images/client_6-145x75.png') }}"
                                                                     class="scale-with-grid wp-post-image"
                                                                     alt="client_6"/>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section dark "
             style="padding-top:100px; padding-bottom:60px; background-image:url({{ asset('images/home_finance_book.png') }}); background-repeat:no-repeat; background-position:center; ">
            <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                    <!-- One full width row-->
                    <div class="column one column_column">
                        <div class="column_attr align_center">
                            <div class="calltoaction_box">
                                <div class="inside" style="padding: 60px 50px 30px">
                                    <h3 style="display: inline-block; margin-right: 35px; position: relative; top: -30px;">
                                        Call for help now! <strong>+23 120 230 340</strong></h3><a
                                            class="button button_large button_stroke_custom button_js"
                                            href="{{ asset('contact-us.html')}}"
                                            style=" border-color:#fff !important; color:#fff;"><span
                                                class="button_label">Contact us</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
