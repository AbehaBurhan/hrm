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

                    <form action="{{ route('admin.leave.update', $leave->id) }}" method="Post">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Name</label>
                                <input type="text" name="name" disabled class="form-control"
                                    value="{{ $employee->name }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Leave Type</label>
                                <input type="text" name="leave_type" disabled class="form-control"
                                    value="{{ $employee->leave_type }}">

                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Reason</label>
                                <textarea name="reason" disabled class="form-control">{{ $leave->reason }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="Pending">Pending</option>
                                    <option value="Approved">Approved</option>
                                    <option value="Rejected">Rejected</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
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
