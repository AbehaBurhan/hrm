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
                    <a class="btn btn-info mb-3" href="{{ route('admin.leave.create') }}">Back</a>

                    <form action="{{ route('admin.leave.store') }}" method="Post">
                        @csrf

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Annual Leaves</label>
                                <input type="text" class="form-control" name="annual_leaves"
                                    placeholder="Enter annual leaves">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Sick Leaves</label>
                                <input type="text" class="form-control" name="sick_leaves"
                                    placeholder="Enter sick leaves">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Select Employee</label>
                                <select name="employee_id" class="form-control">
                                    <option value="">All Employees</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Leaves</button>
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
