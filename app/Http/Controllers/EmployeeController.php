<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {

        return view('admin/employee/create');
    }

    public function create(Request $request)
    {
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'role_id' => 4
        ]);
        return redirect('/admin/dashboard');
    }

    public function dashboard()
    {
        return view('employee.employee-dashboard');
}

}


