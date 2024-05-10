<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Leave;
use App\Models\LeaveApplication;
use Illuminate\Http\Request;

class LeaveApplicationController extends Controller
{
    public function index()
    {
        $employee =  Employee::where('user_id', auth()->id())->first();
        $leaveapplications = $employee->leaveapplication;
        // dd($leaveapplication);
        return view('agency.application.index', compact('leaveapplications'));
    }

    public function create()
    {
        return view('agency.application.create');
    }

    public function store(Request $request)
    {
        $employee = Employee::where('user_id', Auth()->id())->first();
        $leaves =  $employee->leave;
        if ($leaves['annual_leaves'] > 0 && $leaves['annual_leaves'] >= $request->quantity) {
            LeaveApplication::create([
                'leave_type' => $request->leave_type,
                'quantity' => $request->quantity,
                'status' => 'Pending',
                'reason' => $request->reason,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'employee_id' => $employee->id


            ]);
            // dd('leave application submitted successfully');
            return redirect()->back();
        }
        if ($leaves['sick_leaves'] > 0 && $leaves['sick_leves'] >= $request->quantity) {
            LeaveApplication::create([
                'leave_type' => $request->leave_type,
                'quantity' => $request->quantity,
                'status' => 'Pending',
                'reason' => $request->reason,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'employee_id' => $employee->id


            ]);
            // dd('leave application submitted successfully');
            return redirect()->back();
        } else {
            return redirect()->back()->with('message', 'You donot have enough ' . $request->leave_type . ' leaves');
        }
    }
}
