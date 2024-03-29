@extends('admin.layouts.master')

@section('additional_css')
    <style>
        .table-borderless > tbody > tr > td,
        .table-borderless > tbody > tr > th,
        .table-borderless > tfoot > tr > td,
        .table-borderless > tfoot > tr > th,
        .table-borderless > thead > tr > td,
        .table-borderless > thead > tr > th {
            border: none;
        }
    </style>
@endsection

@section('page_header', $title)

@section('content')
    <div class="row">
        <div class="col-lg-9">
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#mem_info">Member Info</a></li>
                <li><a data-toggle="pill" href="#nom_info">Nominee Info</a></li>
                <li><a data-toggle="pill" href="#mem_img">Images &amp; Attachments</a></li>
            </ul>

            <div class="tab-content">
                <div id="mem_info" class="tab-pane fade in active" style="padding: 10px">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td class="col-md-4">NID</td>
                                <td><b>{{ $member->nid }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Name</td>
                                <td><b>{{ $member->name }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Father's Name</td>
                                <td><b>{{ $member->father_name }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Mother's Name</td>
                                <td><b>{{ $member->mother_name }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Husband / Wife Name</td>
                                <td><b>{{ $member->hus_wife_name }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Present Address</td>
                                <td><b>{{ $member->present_address }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Permanent Address</td>
                                <td><b>{{ $member->permanent_address }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Date of Birth</td>
                                <td><b>{{ $member->dob }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Education</td>
                                <td><b>{{ $member->education }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Nationality</td>
                                <td><b>{{ $member->nationality }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Gender</td>
                                <td><b>{{ $member->gender }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Profession</td>
                                <td><b>{{ $member->profession }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Blood Group</td>
                                <td><b>{{ $member->blood_group }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Mobile No</td>
                                <td><b>{{ $member->mobile_no }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Email</td>
                                <td><b>{{ $member->email }}</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="nom_info" class="tab-pane fade" style="padding: 10px">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td class="col-md-4">NID</td>
                                <td><b>{{ $member->nominee->nid }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Name</td>
                                <td><b>{{ $member->nominee->name }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Father's Name</td>
                                <td><b>{{ $member->nominee->father_name }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Mother's Name</td>
                                <td><b>{{ $member->nominee->mother_name }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Address</td>
                                <td><b>{{ $member->nominee->address }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Date of Birth</td>
                                <td><b>{{ $member->nominee->dob }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Relation</td>
                                <td><b>{{ $member->nominee->relation }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Profession</td>
                                <td><b>{{ $member->nominee->profession }}</b></td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Mobile No</td>
                                <td><b>{{ $member->nominee->mobile_no }}</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="mem_img" class="tab-pane fade" style="padding: 10px">
                    <h3>Photo</h3>
                    <img src="{{ url('/images/member_images') }}/{{ $member->member_image }}" class="img-responsive"
                         style="width: 400px;"
                         alt="Member Image">

                    <h3>NID</h3>
                    <img src="{{ url('/images/member_nids') }}/{{ $member->member_nid }}" class="img-responsive"
                         style="width: 400px;"
                         alt="Member NID">
                </div>
            </div>


        </div>
        <div class="col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Actions
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body text-center">
                    @if($member->status == "0")
                        {{--Form and Link to active an active member--}}
                        <a href="{{ url('/admin/member/active/') }}/{{ $member->id }}"
                           class="btn btn-outline btn-block btn-primary">
                            Active
                        </a>
                    @else
                        {{--Form and Link to inactive an active member--}}
                        <a href="{{ route('make-inactive') }}" class="btn btn-outline btn-block btn-danger"
                           onclick="event.preventDefault(); document.getElementById('inactive-form').submit();">
                            Inactive
                        </a>
                        <form id="inactive-form" action="{{ route('make-inactive') }}" method="POST"
                              style="display: none;">
                            @csrf
                            <input name="id" value="{{ $member->id }}">
                        </form>

                        <a href="{{ url('/admin/member/edit') }}/{{ $member->id }}"
                           class="btn btn-outline btn-block btn-warning" style="margin-top: 5px">Edit</a>
                        <a href="{{ url('/admin/installment/add') }}/{{ $member->id }}"
                           class="btn btn-outline btn-block btn-success" style="margin-top: 5px">Installment</a>
                    @endif
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>
@endsection