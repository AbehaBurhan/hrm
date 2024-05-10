@extends('admin.layouts.master')

@section('body')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Employees</h3>
                    <a class="btn btn-info" href="{{ route('admin.create') }}">Create Employee</a>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Job</th>
                                    <th class="border-top-0">Salary</th>
                                    <th class="border-top-0">CNIC</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Joining Date</th>
                                    <th class="border-top-0">Education</th>
                                    <th class="border-top-0">Department</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->job }}</td>
                                        <td>{{ $employee->salary }}</td>
                                        <td>{{ $employee->cnic }}</td>
                                        <td>{{ $employee->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ $employee->joining_date }}</td>
                                        <td>{{ $employee->education }}</td>
                                        <td>
                                            @if ($employee->department == 1)
                                                Computer Science
                                            @elseif ($employee->department == 2)
                                                Physics
                                            @elseif ($employee->department == 3)
                                                Mathematics
                                            @elseif ($employee->department == 4)
                                                Political Science
                                            @elseif ($employee->department == 5)
                                                Biology
                                            @elseif ($employee->department == 6)
                                                Chemistry
                                            @endif

                                        </td>
                                        <td>
                                            <a class="btn btn-info" href="{{ route('admin.edit', $employee->id) }}">Edit</a>
                                            <a class="btn btn-danger"
                                                href="{{ route('admin.delete', $employee->id) }}">Delete</a>
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
