<?php

namespace App\Http\Controllers;

use App\Leave;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class EmployeeController extends Controller
{
    public function index()
    {
        $teamLead =User::where('role_id',3)->get();
        return view('admin.employee.create',compact('teamLead') );
    }

    public function create(Request $request)
    {

        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'team_lead' => $request->get('team_lead'),
            'designation' => $request->get('designation'),
            'casual_leave' =>$request->get('casual_leave'),
            'medical_leave' =>$request->get('medical_leave'),
            'password' => Hash::make($request->get('password')),
            'role_id' => 4
        ]);
        return redirect('/admin/dashboard');
    }

    public function dashboard()
    {
        $approvedLeaves = Leave::where('user_id', Auth::user()->id)->where('is_approved',1)->count();
        $rejectedLeaves = Leave::where('user_id',Auth::user()->id)->where('is_canceled',1)->count();
        return view('employee.employee-dashboard',compact('approvedLeaves','rejectedLeaves'));
    }

    public function leave()
    {
        return view('employee.apply-leave');
    }

    public function myLeaves()
    {

        $leaves = Auth::user()->leaves;
        Return view('employee.my-leave',compact('leaves'));
    }

}


