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
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$nominee->nid or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Nominee's  name / নমিনীর নাম" type="text" name="name"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$nominee->name or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Nominee's Father name / নমিনীর পিতার নাম" type="text" name="father_name"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$nominee->father_name or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Nominee's Mother name / নমিনীর মাতার নাম" type="text" name="mother_name"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$nominee->mother_name or ''}}"/>
                                        </div>
                                        <div class="column one">
                                        <textarea placeholder="Nominee's Address / নমিনীর ঠিকানা" type="text" name="address"
                                                  style="width:100%;" rows="5" aria-invalid="false" value="{{$nominee->address or ''}}"></textarea>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Nominee's Date Of Birth / নমিনীর জন্ম তারিখ" type="date" name="dob"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$nominee->dob or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Relation with Nominee / নমিনীর সাথে সম্পর্ক" type="text" name="realation"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$nominee->relation or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Nominee's Profession / নমিনীর পেশা" type="text" name="profession"
                                                   size="40" aria-required="true" aria-invalid="false" value="{{$nominee->profession or ''}}"/>
                                        </div>
                                        <div class="column one">
                                            <input placeholder="Nominee's Mobile / নমিনীর মোবাইল" type="number" name="mobile_no" id="mobile" size="40"
                                                   aria-invalid="false" aria-required="true" value="{{$nominee->mobile_no or ''}}"/>
                                        </div>

                                        <div class="column one">
                                            <button type="submit" class="btn btn-primary" size="20"
                                                    aria-required="true" aria-invalid="false">Add Your Images</button>
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
