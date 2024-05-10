<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\LeaveApplication;

class LeaveController extends Controller
{

    //application index

    public function appindex()
    {
        $leaveapplications = LeaveApplication::all();
        return view('admin.application.index', compact('leaveapplications'));
    }
    // Crud for leaves
    public function index()
    {
        $leaves = Leave::all();
        return view('admin.leaves.index', compact('leaves'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('admin.leaves.create', compact('employees'));
    }

    public function store(Request $request)
    {
        Leave::create([
            'annual_leaves' => $request->annual_leaves,
            'sick_leaves' => $request->sick_leaves,
            'total_leaves' => $request->annual_leaves + $request->sick_leaves,
            'employee_id' => $request->employee_id,
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $leave = LeaveApplication::where('id', $id)->first();
        $employee = $leave->employee;
        return view('admin.leaves.edit', compact('leave', 'employee'));
    }

    public function update(Request $request, $id)
    {
        $leaveapplication = LeaveApplication::where('id', $id)->first();
        if ($request->status == 'Approved') {
            $leaves = Leave::where('employee_id', $leaveapplication['employee_id'])->first();
            if ($leaveapplication['leave_type'] == 'Sick') {
                $leaves->update([
                    'sick_leaves' => $leaves['sick_leaves'] - $leaveapplication['quantity'],
                ]);
            } else {
                $leaves->update([
                    'annual_leaves' => $leaves['annual_leaves'] - $leaveapplication['quantity'],
                ]);
            }
        }
        $leaveapplication->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.application.index');
    }
}
