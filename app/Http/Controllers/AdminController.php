<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PhpParser\Builder\Function_;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }


    public function index()
    {
        $employees = Employee::all();

        return view('admin.employee.index', compact('employees'));
    }
    public function create()
    {
        return view('admin.employee.create');
    }

    //create employee and store the value in user table also without relationships
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            //another method to store user role by default
            // 'user_role' => 2,
            'password' => Hash::make($request->password),
        ]);

        Employee::create([
            'name' => $request->name,
            'user_id' => $user->id,
            'email' => $request->email,
            'password' => $request->password,
            'job' => $request->job,
            'salary' => $request->salary,
            'cnic' => $request->cnic,
            'status' => $request->status,
            'joining_date' => $request->joining_date,
            'education' => $request->education,
            'department' => $request->department
        ]);


        // $email = Employee::get()->email;
        // Mail::send('email.welcome', [
        //     'email' => $request->email,
        // ], function ($message) use ($request) {
        //     $message->to($request->email)->subject('Thanks for joining us');
        // });

        $email = 'nidatahir@gmail.com';
        Mail::send('email.welcome', [
            'email' => $request->email,
            'password' => $request->password,
        ], function ($message) use ($email) {
            $message->to($email)->subject('Thanks for joining us');
        });
        return redirect()->back();
    }

    public function edit($id)
    {
        $employee = Employee::where('id', $id)->first();
        return view('admin.employee.edit', compact('employee'));
    }

    //updated employee and user together
    public function update(Request $request, $id)
    {
        $employee = Employee::where('id', $id)->first();
        $employee->name = $request->name;
        $employee->job = $request->job;
        $employee->salary = $request->salary;
        $employee->cnic = $request->cnic;
        $employee->status = $request->status;
        $employee->joining_date = $request->joining_date;
        $employee->education = $request->education;
        $employee->department = $request->department;

        $employee->save();

        // User::where('id', $id)->first()->update([
        //     'name' => $request->name,
        // ]);

        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->save();

        return redirect()->route('admin.index');
    }

    public function delete($id)
    {
        $employee = Employee::where('id', $id)->first();
        $employee->delete();

        $user = User::where('id', $id)->first();
        $user->delete();

        return redirect()->back();
    }
}
