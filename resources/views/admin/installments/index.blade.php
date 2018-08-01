@extends('admin.layouts.master')

@section('additional_css')
    <!-- DataTables CSS -->
    <link href="{{ asset('/assets/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('/assets/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
@endsection

@section('page_header', 'New Installments')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Member Pending Requests
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th>Total Share</th>
                            <th>Balance</th>
                            <th>Total Installment</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($memberInstallments as $member)
                            <tr>
                                <td><a href="{{ url('/admin/installment/add') }}/{{ $member->id }}">{{ $member->name }}</a></td>
                                <td>{{ $member->mobile_no }}</td>
                                <td>{{ $member->share_no }}</td>
                                <td>{{ $member->balance }}</td>
                                <td>{{ $member->count == null ? 0 : $member->count }}</td>
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
                responsive: true
            });
        });
    </script>
@endsection