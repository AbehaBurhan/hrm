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

                    <form action="{{ route('admin.update', $employee->id) }}" method="Post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control" name="name" id="inputEmail4"
                                    value="{{ $employee->name }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" disabled name="email" id="inputEmail4"
                                    value="{{ $employee->email }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" disabled name="password" id="inputPassword4"
                                    value="{{ $employee->password }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control" name="status">
                                    <option selected value="">Choose Status</option>
                                    <option value="1" @if ($employee->status == 1) selected @endif>Active</option>
                                    <option value="0" @if ($employee->status == 0) selected @endif>Inactive
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Joining Date</label>
                                <input type="date" class="form-control" name="joining_date"
                                    value="{{ $employee->joining_date }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Education</label>
                                <input type="text" class="form-control" id="inputEmail4"
                                    value="{{ $employee->education }}" name="education">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputStatus">Department</label>
                                <select id="inputStatus" class="form-control" name="department">
                                    <option selected value="">Choose Your Department</option>
                                    <option value="1" @if ($employee->department == 1) selected @endif>Computer
                                        Science</option>
                                    <option value="2" @if ($employee->department == 2) selected @endif>Physics
                                    </option>
                                    <option value="3" @if ($employee->department == 3) selected @endif>Mathematics
                                    </option>
                                    <option value="4" @if ($employee->department == 4) selected @endif>Political
                                        Science</option>
                                    <option value="5" @if ($employee->department == 5) selected @endif>Biology
                                    </option>
                                    <option value="6" @if ($employee->department == 6) selected @endif>Chemistry
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Job</label>
                                <input type="text" class="form-control" id="inputEmail4" name="job"
                                    value="{{ $employee->job }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Salary</label>
                                <input type="text" class="form-control" id="inputPassword4" name="salary"
                                    value="{{ $employee->salary }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">CNIC</label>
                                <input type="text" class="form-control" id="inputPassword4" name="cnic"
                                    value="{{ $employee->cnic }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Employee</button>
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
