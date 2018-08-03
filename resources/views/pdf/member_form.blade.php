<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ base_path('/public/assets/vendor/pdf/css/theme.css')}}" type="stylesheet">
    <link href="{{ base_path('/public/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{--<img class="img-fluid d-block float-left" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" width="180" height="180">--}}
                <h1 class="display-1 text-center">Friends Association</h1>
                <p class="lead">Address:&nbsp;</p>
            </div>
        </div>
    </div>
</div>
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="">Member Information
                            <br> </h1>
                    </div>
                </div>
                {{--<img class="img-fluid d-block float-right" src="{{base_path('/public/images/member_images')}}/{{$member->member_image or ''}}" width="300">--}}
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="lead">National Identification Number (NID)</p>
                    </div>
                    <div class="col-md-6">
                        <p class="lead">{{$member->nid or ''}}</p>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="lead">Name</p>
                    </div>
                    <div class="col-md-6">
                        <p class="lead">{{$member->name or ''}} </p>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="lead">Father name</p>
                    </div>
                    <div class="col-md-6">
                        <p class="lead">{{$member->father_name or ''}}</p>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="lead">Mother name</p>
                    </div>
                    <div class="col-md-6">
                        <p class="lead">{{$member->mother_name or ''}}</p>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="lead">Husband/Spouse Name</p>
                    </div>
                    <div class="col-md-6">
                        <p class="lead">{{$member->hus_wife_name or ''}}</p>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="lead">Present Address</p>
                    </div>
                    <div class="col-md-8">
                        <p class="lead">{{$member->present_address or ''}}</p>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="lead">Permanent Address</p>
                    </div>
                    <div class="col-md-6">
                        <p class="lead">{{$member->permanent_address or ''}}</p>
                    </div>
                </div>
                <div class="row"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Date Of Birth</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$member->dob or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Education</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$member->education or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Gender</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$member->gender or ''}} </p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Nationality</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$member->nationality or 'Bangladeshi'}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Blood Group</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$member->blood_group or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Profession</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$member->profession or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Mobile No</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$member->mobile_no or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Email</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$member->email or ''}} </p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">NID Image</p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid d-block float-left" src="{{base_path('public/images/member_nids')}}/{{$member->member_nid or ''}}" width="300"> </div>
        </div>
        <br>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="">Nominee Information</h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">National Identification Number (NID)</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$nominee->nid or ''}} </p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Name</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$nominee->name or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Father name</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$nominee->father_name or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Mother name</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$nominee->mother_name or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-4">
                <p class="lead">Nominee's Address</p>
            </div>
            <div class="col-md-8">
                <p class="lead">{{$nominee->address or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Date Of Birth</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$nominee->dob or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Relation</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$nominee->relation or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Profession</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$nominee->profession or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Nominee's Mobile</p>
            </div>
            <div class="col-md-6">
                <p class="lead">{{$nominee->mobile_no or ''}}</p>
            </div>
        </div>
        <div class="row"></div>
    </div>
</div>
</body>

</html>