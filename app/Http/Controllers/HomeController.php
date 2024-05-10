<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function redirect()
    {
        $userrole = Auth::user()->user_role;

        if ($userrole == '1') {
            return redirect()->route('admin.index');
        } elseif ($userrole == '2') {
            return redirect()->route('agency.leave.index');
        } else {
            return view('auth.login');
        }
    }
}
