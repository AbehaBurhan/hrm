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
                    <a class="btn btn-info" href="">Add Employee</a>
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
                                <tr>
                                    <td>Salman</td>
                                    <td>salman@gmail.com</td>
                                    <td>Manager</td>
                                    <td>50,000</td>
                                    <td>3230132145174</td>
                                    <td>Active</td>
                                    <td>08/15/23</td>
                                    <td>computer science</td>
                                    <td>computer science</td>
                                    <td>
                                        <a class="btn btn-info" href="">Edit</a>
                                        <a class="btn btn-danger" href="">Delete</a>
                                    </td>
                                </tr>
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
