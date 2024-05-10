@extends('agency.layouts.master')

@section('body')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Employees Leaves</h3>
                    <a class="btn btn-info" href="{{ route('agency.application.create') }}">Create Leave Application</a>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Leave Type</th>
                                    <th class="border-top-0">Reason</th>
                                    <th class="border-top-0">Quantity</th>
                                    <th class="border-top-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leaveapplications as $leaveapplication)
                                    <tr>


                                        <td>{{ $leaveapplication->employee->name }}</td>
                                        <td>{{ $leaveapplication->leave_type }}</td>
                                        <td>{{ $leaveapplication->reason }}</td>
                                        <td>{{ $leaveapplication->quantity }}</td>
                                        <td>{{ $leaveapplication->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
@endsection
