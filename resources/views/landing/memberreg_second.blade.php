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
                                    <form method="POST" action="{{url('/become-member-2')}}" id="contactform" style="width: 640px; margin: 0 auto">
                                        {{ csrf_field() }}
                                        <div class="column one">
                                            <input placeholder="Nominee's National Identification Number (NID) / নমিনীর জাতীয় পরিচিতি নাম্বার" type="text" name="nid"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$member->nid or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Nominee's  name / নমিনীর নাম" type="text" name="nomineename"
                                                   size="40" aria-required="true" aria-invalid="false"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Nominee's Father name / নমিনীর পিতার নাম" type="text" name="nomineefathername"
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
