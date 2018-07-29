@extends('admin.layouts.master')

@section('page_header', $member->name)

@section('content')
    <div class="row">
        <div class="col-lg-9">
            <form class="form-horizontal" method="POST" action="{{ route('make-active') }}">
                @csrf
                <h3>New Member Information</h3>
                <input class="hidden" name="id" value="{{ $member->id }}">
                <div class="form-group">
                    <label for="share_no" class="col-sm-2 control-label">Number of Share</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" name="share_no" id="share_no" placeholder="No of Share" value="1">
                    </div>
                    <div class="col-sm-2">
                        <label for="share_no" class="control-label">x 1000</label>
                    </div>
                    <div class="col-sm-6">প্রত্যেক শেয়ার হল সর্বনিম্ন ফি এর গুণিতক যা সদস্যকে প্রতি মাসে দিতে হবে।</div>
                </div>

                <h3>New User Information</h3>
                <div class="form-group">
                    <label for="mobile_no" class="col-sm-2 control-label">Mobile No</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="mobile_no" id="mobile_no" value="{{ $member->mobile_no }}" placeholder="Mobile No">
                    </div>
                    <div class="col-sm-6">এই মোবাইল নাম্বার ব্যবহার করে সদস্য মোবাইল আপস দিয়ে তাঁর একাউন্টে প্রবেশ করবে।</div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Active Member</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection