@extends('agency.layouts.master')

@section('body')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title"></h3>
                    <div class="table-responsive">
                        @if (isset($leaves) && !is_null($leaves))
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Annual Leaves</th>
                                        <th class="border-top-0">Sick Leaves</th>
                                        <th class="border-top-0">Total Leaves</th>
                                        <th class="border-top-0">Used Leaves</th>
                                        <th class="border-top-0">Remaining Leaves</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $leaves->annual_leaves }}</td>
                                        <td>{{ $leaves->sick_leaves }}</td>
                                        {{-- 1 method --}}
                                        {{-- <td>{{ $leaves->annual_leaves + $leaves->sick_leaves }}</td> --}}
                                        <td>{{ $leaves->total_leaves }}</td>
                                        <td>{{ $used_leaves }}</td>
                                        <td>{{ $remaining_leaves }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Annual Leaves</th>
                                        <th class="border-top-0">Sick Leaves</th>
                                        <th class="border-top-0">Total Leaves</th>
                                        <th class="border-top-0">Used Leaves</th>
                                        <th class="border-top-0">Remaining Leaves</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <h3>Opps! You have no leaves yet...</h3>
                                </tbody>
                            </table>
                        @endif

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
