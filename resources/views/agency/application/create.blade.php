@extends('agency.layouts.master')

@section('body')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <h3 class="box-title">Employees Leaves</h3>
                    <a class="btn btn-info mb-3" href="{{ route('admin.leave.create') }}">Back</a>

                    <form action="{{ route('agency.application.store') }}" method="Post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Leave Type</label>
                                <select name="leave_type" class="form-control">
                                    <option value="">Select Leave Type</option>
                                    <option value="Annual">Annual</option>
                                    <option value="Sick">Sick</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Quantity</label>
                                <input type="text" class="form-control" name="quantity" placeholder="Enter quantity">
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Start date</label>
                                <input type="date" class="form-control" name="start_date" placeholder="Enter start date">
                            </div>
                            <div class="form-group col-md-6">
                                <label>End date</label>
                                <input type="date" class="form-control" name="end_date" placeholder="Enter end date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Reason</label>
                                <textarea name="reason" class="form-control"></textarea>
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
