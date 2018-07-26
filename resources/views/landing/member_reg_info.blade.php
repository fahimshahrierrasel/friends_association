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
                            <h5 class="text-center mb-0">Part 1: Member Information</h5>
                        </div>
                        <div class="card-body">
                            <form class="justify-content-center" method="POST" action="{{ url('/member-reg-info') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nid">National Identification Number (NID) / জাতীয় পরিচিতি
                                        নাম্বার</label>
                                    <input id="nid" class="form-control{{ $errors->has('nid') ? ' is-invalid' : '' }}"
                                           type="text" name="nid" value="{{$member->nid or ''}}" required>
                                    @if ($errors->has('nid'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nid') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name">Your name / আপনার নাম</label>
                                    <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           type="text" name="name" value="{{$member->name or ''}}" required>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="father_name">Father name / পিতার নাম</label>
                                            <input id="father_name"
                                                   class="form-control{{ $errors->has('father_name') ? ' is-invalid' : '' }}"
                                                   type="text" name="father_name" value="{{$member->father_name or ''}}" required>
                                            @if ($errors->has('father_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('father_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mother_name">Mother name / মাতার নাম</label>
                                            <input id="mother_name"
                                                   class="form-control{{ $errors->has('mother_name') ? ' is-invalid' : '' }}"
                                                   type="text" name="mother_name" value="{{$member->mother_name or ''}}" required>
                                            @if ($errors->has('mother_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('mother_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hus_wife_name">Husband/Spouse Name / স্বামী বা স্ত্রীর নাম</label>
                                    <input id="hus_wife_name"
                                           class="form-control{{ $errors->has('hus_wife_name') ? ' is-invalid' : '' }}"
                                           type="text" name="hus_wife_name" value="{{$member->hus_wife_name or ''}}">
                                    @if ($errors->has('hus_wife_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('hus_wife_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="present_address">Present Address / বর্তমান ঠিকানা</label>
                                    <textarea id="present_address"
                                              class="form-control{{ $errors->has('present_address') ? ' is-invalid' : '' }}"
                                              rows="3" name="present_address" required>{{$member->present_address or ''}}</textarea>
                                    @if ($errors->has('present_address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('present_address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="permanent_address">Permanent Address / স্থায়ী ঠিকানা</label>
                                    <textarea id="permanent_address"
                                              class="form-control{{ $errors->has('permanent_address') ? ' is-invalid' : '' }}"
                                              rows="3" name="permanent_address" required>{{$member->permanent_address or ''}}</textarea>
                                    @if ($errors->has('permanent_address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('permanent_address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="dob">Date Of Birth / জন্ম তারিখ</label>
                                            <input id="dob"
                                                   class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}"
                                                   type="date" name="dob" value="{{$member->dob or ''}}" required>
                                            @if ($errors->has('dob'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('dob') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="education">Education / শিক্ষা</label>
                                            <input id="education"
                                                   class="form-control{{ $errors->has('education') ? ' is-invalid' : '' }}"
                                                   type="text" name="education" value="{{$member->education or ''}}" required>
                                            @if ($errors->has('education'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('education') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="gender">Gender / লিঙ্গ</label>
                                            <select id="gender"
                                                    class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                                    name="gender">
                                                <optgroup label="Gender / লিঙ্গ">
                                                    <option value="Male" {{ !empty($member->gender) ? $member->gender == "Male" ? 'selected' : '' : 'selected' }}>Male / পুরুষ</option>
                                                    <option value="Female" {{ !empty($member->gender) ? $member->gender == "Female" ? 'selected' : '' : '' }}>Female / মহিলা</option>
                                                </optgroup>
                                            </select>
                                            @if ($errors->has('gender'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nationality">Nationality / জাতীয়তা</label>
                                            <input id="nationality"
                                                   class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}"
                                                   type="text" name="nationality"
                                                   value="{{$member->nationality or 'Bangladeshi'}}" required>
                                        </div>
                                        @if ($errors->has('nationality'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nationality') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="blood_group">Blood Group / রক্তের গ্রুপ</label>
                                            <select id="blood_group"
                                                    class="form-control{{ $errors->has('blood_group') ? ' is-invalid' : '' }}"
                                                    name="blood_group">
                                                <optgroup label="Blood Group / রক্তের গ্রুপ">
                                                    <option value="A+" {{ !empty($member->blood_group) ? $member->gender == "A-" ? 'selected' : '' : 'selected' }}>A+ / এ+</option>
                                                    <option value="A-" {{ !empty($member->blood_group) ? $member->gender == "A-" ? 'selected' : '' : '' }}>A- / এ-</option>
                                                    <option value="B+" {{ !empty($member->blood_group) ? $member->gender == "B+" ? 'selected' : '' : '' }}>B+ / বি+</option>
                                                    <option value="B-" {{ !empty($member->blood_group) ? $member->gender == "B-" ? 'selected' : '' : '' }}>B- / বি-</option>
                                                    <option value="O+" {{ !empty($member->blood_group) ? $member->gender == "O+" ? 'selected' : '' : '' }}>O+ / ও+</option>
                                                    <option value="O-" {{ !empty($member->blood_group) ? $member->gender == "O-" ? 'selected' : '' : '' }}>O- / ও-</option>
                                                    <option value="AB+" {{ !empty($member->blood_group) ? $member->gender == "AB+" ? 'selected' : '' : '' }}>AB+ / এবি+</option>
                                                    <option value="AB-" {{ !empty($member->blood_group) ? $member->gender == "AB-" ? 'selected' : '' : '' }}>AB- / এবি-</option>
                                                </optgroup>
                                            </select>
                                            @if ($errors->has('blood_group'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('blood_group') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="profession">Profession / পেশা</label>
                                            <input id="profession"
                                                   class="form-control{{ $errors->has('profession') ? ' is-invalid' : '' }}"
                                                   type="text" name="profession" value="{{$member->profession or ''}}" required>
                                            @if ($errors->has('profession'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('profession') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="mobile_no">Mobile No / মোবাইল নাম্বার</label>
                                            <input id="mobile_no"
                                                   class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}"
                                                   type="text" name="mobile_no" value="{{$member->mobile_no or ''}}" required>
                                            @if ($errors->has('mobile_no'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('mobile_no') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">Email / ইমেইল</label>
                                            <input id="email"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   type="email" name="email" value="{{$member->email or ''}}">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary btn-lg float-right" type="submit">Add Nominee
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
