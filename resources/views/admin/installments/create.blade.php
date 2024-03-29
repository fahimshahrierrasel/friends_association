@extends('admin.layouts.master')
@section('additional_css')
    <link rel="stylesheet" href="{{asset('/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" />
    @endsection
@section('page_header', 'Installment')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form method="POST" action="{{empty($currentInstallment) ? action("InstallmentController@store") : action("InstallmentController@update")}}">
                        @csrf
                        <input name="id" class="hidden" value="{{ $member->id }}">
                        <input name="installment_id" class="hidden" value="{{ empty($currentInstallment) ?:$currentInstallment->id }}">
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="text" class="form-control" id="amount" name="amount" value="{{empty($currentInstallment) ? ($memberAccount->share_no * 1000) : $currentInstallment->amount}}" placeholder="Amount" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="installment_date">Installment Date</label>
                            <input type="text" class="form-control" name="installment_date" id="installment_date" value="{{empty($currentInstallment) ? :$currentInstallment->installment_date}}" required>
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="late_fee" value="50" {{!empty($currentInstallment) && ($currentInstallment->late_fee===1)?"checked":""}}> Late Fee
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">Member Info</div>
                <div class="panel-body">
                    <table class="table table-borderless">
                        <tbody>
                        <tr>
                            <td class="col-md-4">Name</td>
                            <td><b>{{ $member->name }}</b></td>
                        </tr>
                        <tr>
                            <td class="col-md-4">Share No</td>
                            <td><b>{{ $memberAccount->share_no }}</b></td>
                        </tr>
                        <tr>
                            <td class="col-md-4">Balance</td>
                            <td><b>{{ $memberAccount->balance }}</b></td>
                        </tr>
                        <tr>
                            <td class="col-md-4">Profit</td>
                            <td><b>{{ $memberAccount->profit }}</b></td>
                        </tr>
                        <tr>
                            <td class="col-md-4">Mobile No</td>
                            <td><b>{{ $member->mobile_no }}</b></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Total Installments</div>
                <div class="panel-body">
                    <h4 class="text-center">{{ $count }}</h4>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">Last Installment</div>
                <div class="panel-body">
                    <h4 class="text-center">
                        {{ $count == 0 ? "No Installment Yet!!" : $lastInstallment->created_at->diffForHumans()}}
                    </h4>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('additional_js')
    <script src="{{ asset('/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#installment_date').datepicker({
                format: "yyyy-mm-dd",
                orientation: 'bottom'
            });
            var dateVal = $('#installment_date').val();
            if(dateVal==""){
                $('#installment_date').datepicker("setDate", new Date().toISOString().slice(0,10));
            }
            else{
                $('#installment_date').datepicker("setDate", '{{empty($currentInstallment) ? :$currentInstallment->installment_date}}');
            }
        });
    </script>
    @endsection