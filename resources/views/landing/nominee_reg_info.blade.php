@extends('landing.layouts.master')

@section('content')
    <div class="highlight-clean" style="padding-top:30px;padding-bottom:30px;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Become a proud member</h2>
            </div>
        </div>
    </div>
    <div style="padding-bottom:20px;">
        <div class="container">
            <div class="row">
                <div class="col col-sm-8 offset-sm-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center mb-0">Part 2: Nominee Information</h5>
                        </div>
                        <div class="card-body">
                            <form class="justify-content-center" method="POST" action="{{ url('/nominee-reg-info') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nid">National Identification Number (NID) / নমিনীর জাতীয় পরিচিতি নাম্বার</label>
                                    <input id="nid" class="form-control{{ $errors->has('nid') ? ' is-invalid' : '' }}"
                                           type="text" name="nid" value="{{$nominee->nid or ''}}" required>
                                    @if ($errors->has('nid'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nid') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="name">Nominee's name / নমিনীর নাম</label>
                                    <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           type="text" name="name" value="{{$nominee->name or ''}}" required>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="father_name">Father name / নমিনীর পিতার নাম</label>
                                            <input id="father_name"
                                                   class="form-control{{ $errors->has('father_name') ? ' is-invalid' : '' }}"
                                                   type="text" name="father_name" value="{{$nominee->father_name or ''}}" required>
                                            @if ($errors->has('father_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('father_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mother_name">Mother name / নমিনীর মাতার নাম</label>
                                            <input id="mother_name"
                                                   class="form-control{{ $errors->has('mother_name') ? ' is-invalid' : '' }}"
                                                   type="text" name="mother_name" value="{{$nominee->mother_name or ''}}" required>
                                            @if ($errors->has('mother_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('mother_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Nominee's Address / নমিনীর ঠিকানা</label>
                                    <textarea id="address"
                                              class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                              rows="3" name="address" required>{{$nominee->address or ''}}</textarea>
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="dob">Date Of Birth / জন্ম তারিখ</label>
                                            <input id="dob"
                                                   class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}"
                                                   type="date" name="dob" value="{{$nominee->dob or ''}}" required>
                                            @if ($errors->has('dob'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('dob') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="relation">Relation / নমিনীর সাথে সম্পর্ক</label>
                                            <input id="relation"
                                                   class="form-control{{ $errors->has('relation') ? ' is-invalid' : '' }}"
                                                   type="text" name="relation" value="{{$nominee->relation or ''}}" required>
                                            @if ($errors->has('relation'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('relation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="profession">Profession / পেশা</label>
                                            <input id="profession"
                                                   class="form-control{{ $errors->has('profession') ? ' is-invalid' : '' }}"
                                                   type="text" name="profession" value="{{$nominee->profession or ''}}" required>
                                            @if ($errors->has('profession'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('profession') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mobile_no">Nominee's Mobile / নমিনীর মোবাইল</label>
                                            <input id="mobile_no"
                                                   class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}"
                                                   type="text" name="mobile_no" value="{{$nominee->mobile_no or ''}}" required>
                                            @if ($errors->has('mobile_no'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('mobile_no') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-outline-primary btn-lg" href="{{ url('/member-reg-info') }}">Back to
                                    Member Info
                                </a>
                                <button class="btn btn-outline-primary btn-lg float-right" type="submit">Add Images
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
