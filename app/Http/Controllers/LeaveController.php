<?php

namespace App\Http\Controllers;

use App\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    public function submit(Request $request)
    {
        Leave::create([
            'leave_type'=>$request->get('leaveType'),
            'start_date'=>$request->get('start_date'),
            'end_date'=>$request->get('end_date'),
            'half_day'=>$request->has('half_day') ? $request->get('half_day'):0,
            'text'=>$request->get('text'),
            'user_id'=>Auth::user()->id

        ]);

        return redirect('employee/dashboard');

    }


}
