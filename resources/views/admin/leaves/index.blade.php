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
                    <a class="btn btn-info" href="{{ route('admin.leave.create') }}">Create Leave</a>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Employee Name</th>
                                    <th class="border-top-0">Annual Leaves</th>
                                    <th class="border-top-0">Sick Leaves</th>
                                    <th class="border-top-0">Total Leaves</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leaves as $leave)
                                    <tr>


                                        <td>{{ $leave->employee->name }}</td>
                                        <td>{{ $leave->annual_leaves }}</td>
                                        <td>{{ $leave->sick_leaves }}</td>
                                        <td>{{ $leave->total_leaves }}</td>
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
