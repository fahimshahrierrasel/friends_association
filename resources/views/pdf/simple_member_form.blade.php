    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Core CSS -->
    {{--<link href="{{url('/')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{ base_path('/public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    {{--<link href="https://stackpath.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" integrity="sha384-4FeI0trTH/PCsLWrGCD1mScoFu9Jf2NdknFdFoJhXZFwsvzZ3Bo5sAh7+zL8Xgnd" crossorigin="anonymous">--}}
    <!-- Custom Fonts -->
    {{--<link href="{{ asset('/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">--}}
    <style>
        .page-break {
            page-break-after: always;
        }
        .group        {
            position:relative;
            margin-bottom:45px;
        }
        input         {
            font-size:18px;
            padding:10px 10px 10px 5px;
            display:block;
            width:300px;
            border:none;
            border-bottom:1px solid #757575;
        }
        #content {
            margin-left: 210px;
        }
        #theDiv img {
            float: right;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="heading">
        <h1 style="text-align: center; padding-bottom: 0;">Friends Associations</h1>

        {{--<br>--}}
        <p class="lead" style="text-align: center;">Address</p>
        <h2 style="text-align: center;">Member Registration Form</h2>
    </div>
    <div class="secondary-heading" id="">
        <img src="{{base_path('/public/images/member_images')}}/{{$member->member_image or ''}}" alt="" style="height: 180px; width: 180px; float: right;">
        <div class="">

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="form-horizontal">
        <div class="form-group">
            <div class="alert alert-heading">
                <h3>Member Information</h3>
            </div>
            <br>
            <label for="nid">National Identification Number (NID) </label>
            <label ></label>
            <input id="nid" class="form-control"
                   type="text" name="nid" value="{{$member->nid or ''}}" required>

        </div>
        <div class="form-group">
            <label for="name">Your name</label>
            <input id="name" class="form-control"
                   type="text" name="name" value="{{$member->name or ''}}" required>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="father_name">Father name </label>
                    <input id="father_name"
                           class="form-control"
                           type="text" name="father_name" value="{{$member->father_name or ''}}" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="mother_name">Mother name </label>
                    <input id="mother_name"
                           class="form-control"
                           type="text" name="mother_name" value="{{$member->mother_name or ''}}" required>

                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="hus_wife_name">Husband/Spouse Name </label>
            <input id="hus_wife_name"
                   class="form-control"
                   type="text" name="hus_wife_name" value="{{$member->hus_wife_name or ''}}">

        </div>
        {{--<div class="page-break"></div>--}}
        <div class="form-group">
            <label for="present_address">Present Address </label>
            <textarea id="present_address"
                      class="form-control"
                      rows="3" name="present_address" required>{{$member->present_address or ''}}</textarea>

        </div>
        <div class="page-break"></div>
        <div class="form-group">
            <label for="permanent_address">Permanent Address</label>
            <textarea id="permanent_address"
                      class="form-control"
                      rows="3" name="permanent_address" required>{{$member->permanent_address or ''}}</textarea>

        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="dob">Date Of Birth </label>
                    <input id="dob"
                           class="form-control"
                           type="text" name="dob" value="{{$member->dob or ''}}" required>

                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="education">Education </label>
                    <input id="education"
                           class="form-control"
                           type="text" name="education" value="{{$member->education or ''}}" required>

                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="gender">Gender </label>
                    <input id="gender"
                           class="form-control"
                           type="text" name="gender" value="{{$member->gender or ''}}" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="nationality">Nationality </label>
                    <input id="nationality"
                           class="form-control"
                           type="text" name="nationality"
                           value="{{$member->nationality or 'Bangladeshi'}}" required>
                </div>

            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="blood_group">Blood Group </label>
                    <input id="blood_group"
                           class="form-control"
                           type="text" name="blood_group" value="{{$member->blood_group or ''}}" required>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="profession">Profession </label>
                    <input id="profession"
                           class="form-control{{ $errors->has('profession') ? ' is-invalid' : '' }}"
                           type="text" name="profession" value="{{$member->profession or ''}}" required>

                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="mobile_no">Mobile No </label>
                    <input id="mobile_no"
                           class="form-control"
                           type="text" name="mobile_no" value="{{$member->mobile_no or ''}}" required>

                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="email">Email </label>
                    <input id="email"
                           class="form-control"
                           type="email" name="email" value="{{$member->email or ''}}">

                </div>
            </div>
        </div>
        <div class="page-break"></div>
        <div class="alert alert-heading">
            <h3>Nominee Info</h3>
        </div>
        <div class="form-group">
            <label for="nid">National Identification Number (NID) </label>
            <input id="nid" class="form-control"
                   type="text" name="nid" value="{{$nominee->nid or ''}}" required>
        </div>

        <div class="form-group">
            <label for="name">Nominee's name </label>
            <input id="name" class="form-control"
                   type="text" name="name" value="{{$nominee->name or ''}}" required>

        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="father_name">Father name </label>
                    <input id="father_name"
                           class="form-control"
                           type="text" name="father_name" value="{{$nominee->father_name or ''}}" required>

                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="mother_name">Mother name </label>
                    <input id="mother_name"
                           class="form-control"
                           type="text" name="mother_name" value="{{$nominee->mother_name or ''}}" required>

                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Nominee's Address </label>
            <textarea id="address"
                      class="form-control"
                      rows="3" name="address" required>{{$nominee->address or ''}}</textarea>

        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="dob">Date Of Birth </label>
                    <input id="dob"
                           class="form-control"
                           type="text" name="dob" value="{{$nominee->dob or ''}}" required>

                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="relation">Relation </label>
                    <input id="relation"
                           class="form-control"
                           type="text" name="relation" value="{{$nominee->relation or ''}}" required>

                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="profession">Profession </label>
                    <input id="profession"
                           class="form-control"
                           type="text" name="profession" value="{{$nominee->profession or ''}}" required>

                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="mobile_no">Nominee's Mobile </label>
                    <input id="mobile_no"
                           class="form-control"
                           type="text" name="mobile_no" value="{{$nominee->mobile_no or ''}}" required>

                </div>
            </div>
        </div>
        <div class="alert alert-heading">
            <h3>Member Attachments</h3>
        </div>
        {{--<div class="form-group">--}}
            {{--<label>Member Photograph</label>--}}
            {{--<br>--}}
            {{--<div class="image">--}}
                {{--<img src="{{base_path('/public/images/member_images')}}/{{$member->member_image or ''}}" alt="" style="height: 200px; width: 200px;">--}}
            {{--</div>--}}

        {{--</div>--}}
        <div class="form-group">
            <label>NID Scanned Copy&nbsp;</label>
            <br>
            <div class="image">
                <img src="{{base_path('public/images/member_nids')}}/{{$member->member_nid or ''}}" alt="" style="height: 200px; width: 300px; float: right;">
            </div>

        </div>
    </div>
</div>





    <!-- jQuery -->
    {{--<script src="{{ asset('/assets/vendor/jquery/jquery.min.js') }}"></script>--}}

    <!-- Bootstrap Core JavaScript -->
    {{--<script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>--}}
</body>
</html>