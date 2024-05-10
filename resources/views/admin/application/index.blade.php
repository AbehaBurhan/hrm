@extends('admin.layouts.master')

@section('body')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Employees Leaves</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Employee Name</th>
                                    <th class="border-top-0">Leave Type</th>
                                    <th class="border-top-0">From</th>
                                    <th class="border-top-0">To</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leaveapplications as $leaveapplication)
                                    <tr>


                                        <td>{{ $leaveapplication->employee->name }}</td>
                                        <td>{{ $leaveapplication->leave_type }}</td>
                                        <td>{{ $leaveapplication->start_date }}</td>
                                        <td>{{ $leaveapplication->end_date }}</td>
                                        <td>
                                            @if ($leaveapplication->status == 'Approved')
                                                Approved
                                            @elseif ($leaveapplication->status == 'Pending')
                                                Pending
                                            @elseif ($leaveapplication->status == 'Rejected')
                                                Rejected
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-info"
                                                href="{{ route('admin.leave.edit', $leaveapplication->id) }}">Edit</a>
                                        </td>
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
