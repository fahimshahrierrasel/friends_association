@extends('admin.layouts.master')

@section('page_header', 'Installment')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="installment_date">Installment Date</label>
                            <input type="date" class="form-control" name="installment_date" id="installment_date">
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Late Fee
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