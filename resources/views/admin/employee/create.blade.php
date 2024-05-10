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
                    <a class="btn btn-info mb-3" href="{{ route('admin.index') }}">Back</a>

                    <form action="{{ route('admin.store') }}" method="Post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail4"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" name="password" id="inputPassword4"
                                    placeholder="Password">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control" name="status">
                                    <option selected value="">Choose Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Joining Date</label>
                                <input type="date" class="form-control" name="joining_date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Education</label>
                                <input type="text" class="form-control" placeholder="Enter Your last degree"
                                    name="education">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Department</label>
                                <select class="form-control" name="department">
                                    <option selected value="">Choose Your Department</option>
                                    <option value="1">Computer Science</option>
                                    <option value="2">Physics</option>
                                    <option value="3">Mathematics</option>
                                    <option value="4">Political Science</option>
                                    <option value="5">Biology</option>
                                    <option value="6">Chemistry</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Job</label>
                                <input type="text" class="form-control" name="job" placeholder="Enter Job">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Salary</label>
                                <input type="text" class="form-control" name="salary" placeholder="Enter Salary">
                            </div>
                            <div class="form-group col-md-4">
                                <label>CNIC</label>
                                <input type="text" class="form-control" name="cnic" placeholder="Enter CNIC">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Employee</button>
                    </form>

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
