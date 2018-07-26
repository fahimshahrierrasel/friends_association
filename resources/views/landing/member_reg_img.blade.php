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
                                        <input placeholder="Father name / পিতার নাম" type="text" name="fathername"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Mother name / মাতার নাম" type="text" name="mothername"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Husband/Spouse Name / স্বামী/স্ত্রীর নাম" type="text" name="husbwifename"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <textarea placeholder="Present Address / বর্তমান ঠিকানা" type="text" name="presentaddress"
                                                  style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                    </div>
                                    <div class="column one">
                                        <textarea placeholder="Permanent Address / স্থায়ী ঠিকানা" type="text" name="permanentaddress"
                                                  style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Date Of Birth / জন্ম তারিখ" type="text" name="dateofbirth"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Education / শিক্ষা" type="text" name="education"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Profession / পেশা" type="text" name="profession"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Nationality / জাতীয়তা" type="text" name="nationality"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Gender / লিঙ্গ" type="text" name="gender"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <select name="gender">
                                            <option value="" disabled selected>Blood Group / রক্তের গ্রুপ</option>
                                            <option value="A+" >A+</option>
                                            <option value="A-" >A-</option>
                                            <option value="B+" >B+</option>
                                            <option value="B-" >B-</option>
                                            <option value="O+" >O+</option>
                                            <option value="O-" >O-</option>
                                            <option value="AB+" >AB+</option>
                                            <option value="AB-" >AB-</option>
                                        </select>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="e-mail / ইমেইল" type="email" name="email" id="email" size="40"
                                               aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Mobile / মোবাইল" type="number" name="mobile" id="mobile" size="40"
                                               aria-invalid="false" aria-required="true"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Nominee's  name / নমিনীর নাম" type="text" name="nomineename"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Nominee's Father/Husband name / নমিনীর পিতার/স্বামীর নাম" type="text" name="nomineefatherhusbandname"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Nominee's Mother name / নমিনীর মাতার নাম" type="text" name="nomineemothername"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <textarea placeholder="Nominee's Address / নমিনীর ঠিকানা" type="text" name="nomineeaddress"
                                                  style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Nominee's Date Of Birth / নমিনীর জন্ম তারিখ" type="text" name="nomineedateofbirth"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Relation with Nominee / নমিনীর সাথে সম্পর্ক" type="text" name="nomineeeducation"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Nominee's Profession / নমিনীর পেশা" type="text" name="nomineeprofession"
                                               size="40" aria-required="true" aria-invalid="false"/>
                                    </div>
                                    <div class="column one">
                                        <input placeholder="Nominee's Mobile / নমিনীর মোবাইল" type="number" name="nomineemobile" id="mobile" size="40"
                                               aria-invalid="false" aria-required="true"/>
                                    </div>

                                    {{--<div class="column one">--}}
                                    {{--<textarea placeholder="Message" name="body" id="body" style="width:100%;"--}}
                                    {{--rows="10" aria-invalid="false"></textarea>--}}
                                    {{--</div>--}}
                                    {{--<div class="column one">--}}
                                    {{--<input type="button" value="SEND A MESSAGE" id="submit"--}}
                                    {{--onClick="return check_values();">--}}
                                    {{--</div>--}}
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection