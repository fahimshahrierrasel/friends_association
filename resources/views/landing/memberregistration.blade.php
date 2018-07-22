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
                                    <h2 class="hrmargin_0">Become a honorable member</h2>
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
                    <div class="column one column_column">
                        <div class="column_attr ">

                            <div id="contactWrapper">
                                <form id="contactform" style="width: 640px; margin: 0 auto">
                                    <div class="column one">
                                        <input placeholder="Your name / আপনার নাম" type="text" name="name"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Father name / নাম" type="text" name="fathername"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Your e-mail" type="email" name="email" id="email" size="40"
                                               aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Subject" type="text" name="subject" id="subject" size="40"
                                               aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <textarea placeholder="Message" name="body" id="body" style="width:100%;"
                                                  rows="10" aria-invalid="false"></textarea>
                                    </div>
                                    <div class="column one">
                                        <input type="button" value="SEND A MESSAGE" id="submit"
                                               onClick="return check_values();">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection