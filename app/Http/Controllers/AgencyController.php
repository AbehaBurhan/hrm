<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\LeaveApplication;
use Illuminate\Support\Facades\Auth;

class AgencyController extends Controller
{
    public function index()
    {
        $employee = Employee::where('user_id', auth()->id())->first();
        $leaves = $employee->leave;
        if ($leaves) {
            // $total_leaves = $leaves->annual_leaves + $leaves->sick_leaves;
            $approvedleaveapplication = LeaveApplication::where('employee_id', $employee->id)->where('status', 'Approved')->get();

            $used_leaves = 0;
            // dd($approvedleaveapplication->quantity);
            foreach ($approvedleaveapplication as $application) {
                $used_leaves += $application->quantity;
            }
            $remaining_leaves = $leaves['total_leaves'] - $used_leaves;
            return view('agency.leaves.index', compact('leaves', 'used_leaves', 'remaining_leaves'));
        }

        return view('agency.leaves.index', compact('leaves'));
    }
}
