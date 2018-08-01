@extends('admin.layouts.master')

@section('additional_css')
    <!-- DataTables CSS -->
    <link href="{{ asset('/assets/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('/assets/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
@endsection

@section('page_header', 'All Installments')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Installment
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th>Total Share</th>
                            <th>Amount</th>
                            <th>Late Submission</th>
                            <th>Installment Date</th>
                            <th class="no-sort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($installments as $installment)
                            <tr>
                                <td>{{ $installment->name }}</td>
                                <td>{{ $installment->mobile_no }}</td>
                                <td>{{ $installment->share_no }}</td>
                                <td>{{ $installment->amount }}</td>
                                <td>{{ $installment->late_fee ? "Yes" :"No"}}</td>
                                <td>{{ $installment->installment_date }}</td>
                                <td><a href="{{ url('/admin/installment/edit') }}/{{ $installment->member_id }}/{{ $installment->installment_id }}" class="">Edit <span class="fa fa-sm fa-edit"></span></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection

@section('additional_js')
    <script src="{{ asset('/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true,
                "columnDefs": [ {
                    "targets"  : 'no-sort',
                    "orderable": false,
                }]
            });
        });
    </script>
@endsection