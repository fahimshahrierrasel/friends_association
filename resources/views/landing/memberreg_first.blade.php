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
                            <h3>Part 1: Member Information</h3>
                        </div>
                    </div>

                    <div class="container">

                        <div class="column one column_column">
                            <div class="column_attr ">
                                <div id="contactWrapper">
                                    <form method="POST" action="{{url('/become-member-1')}}" id="contactform" style="width: 640px; margin: 0 auto">
                                        {{ csrf_field() }}
                                        <div class="column one">
                                            <input placeholder="National Identification Number (NID) / জাতীয় পরিচিতি নাম্বার" type="text" name="nid"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$member->nid or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Your name / আপনার নাম" type="text" name="name"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$member->name or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Father name / পিতার নাম" type="text" name="father_name"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$member->father_name or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Mother name / মাতার নাম" type="text" name="mother_name"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$member->mother_name or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Husband/Spouse Name / স্বামী/স্ত্রীর নাম" type="text" name="hus_wife_name"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$member->hus_wife_name or ''}}"/>
                                        </div>
                                        <div class="column one">
                                        <textarea placeholder="Present Address / বর্তমান ঠিকানা" type="text" name="present_address"
                                                  style="width:100%;" rows="10" aria-invalid="false">{{$member->present_address or ''}}</textarea>
                                        </div>
                                        <div class="column one">
                                        <textarea placeholder="Permanent Address / স্থায়ী ঠিকানা" type="text" name="permanent_address"
                                                  style="width:100%;" rows="10" aria-invalid="false">{{$member->permanent_address or ''}}</textarea>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Date Of Birth / জন্ম তারিখ" type="text" name="dob"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$member->dob or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Education / শিক্ষা" type="text" name="education"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$member->education or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Nationality / জাতীয়তা" type="text" name="nationality"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$member->nationality or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <select name="gender" id="gender">
                                                <option value="" disabled>Gender / লিঙ্গ </option>
                                                <option value="Male" {{ (isset($member->gender) && $member->gender === 'Male') ? "selected" : "" }}>Male / পুরুষ</option>
                                                <option value="Female" {{ (isset($member->gender) && $member->gender === 'Female') ? "selected=\"selected\"" : "" }}>Female / মহিলা</option>
                                                <option value="Others" {{ (isset($member->gender) && $member->gender === 'Others') ? "selected=\"selected\"" : "" }}>Others / অন্যান্য</option>
                                            </select>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Profession / পেশা" type="text" name="profession"
                                                   size="40" aria-required="true" aria-invalid="false"/>
                                        </div>

                                        <div class="column one">
                                            <select name="blood_group">
                                                <option value="" disabled selected>Blood Group / রক্তের গ্রুপ</option>
                                                <option value="A+" >A+ / এ+</option>
                                                <option value="A-" >A- / এ-</option>
                                                <option value="B+" >B+ / বি+</option>
                                                <option value="B-" >B- / বি-</option>
                                                <option value="O+" >O+ / ও+</option>
                                                <option value="O-" >O- / ও-</option>
                                                <option value="AB+" >AB+ / এবি+</option>
                                                <option value="AB-" >AB- / এবি-</option>
                                            </select>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Mobile / মোবাইল" type="text" name="mobile_no" id="mobile" size="40"
                                                   aria-invalid="false" aria-required="true"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Email / ইমেইল" type="email" name="email" id="email" size="40"
                                                   aria-required="true" aria-invalid="false"/>
                                        </div>

                                        <div class="column one">
                                            <button type="submit" class="btn btn-primary" size="20"
                                                    aria-required="true" aria-invalid="false">Add Nominee Information</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="column one column_column">
                            <div class="column_attr ">
                                <div id="contactWrapper">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <br>
    @endsection
