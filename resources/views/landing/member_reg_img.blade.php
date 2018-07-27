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
                            <h5 class="text-center mb-0">Final Part: Member Images</h5>
                        </div>
                        <div class="card-body">
                            <form class="justify-content-center" method="POST" action="{{ url('/member-store') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Member Photograph / আপনার ছবি &nbsp;</label>
                                    <label style="color: red;">( Max File Size: 1 MB )</label>
                                    <input type="file" accept="image/*" name="member_image" required="">
                                    @if ($errors->has('member_image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mobile_no') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>NID Scanned Copy /&nbsp;জাতীয় পরিচিতি কার্ডের ছবি&nbsp;</label>
                                    <label style="color: red;">( Max File Size: 1 MB )</label>
                                    <input type="file" accept="image/*" name="member_nid" required="">
                                    @if ($errors->has('member_nid'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mobile_no') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <a class="btn btn-outline-primary btn-lg" href="{{ url('/nominee-reg-info') }}">Back to
                                    Nominee Info
                                </a>
                                <button class="btn btn-outline-primary btn-lg float-right" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection