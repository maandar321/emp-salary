<?php

namespace App\Http\Controllers;

use App\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamLeadController extends Controller
{
    public function dashboard()
    {
        return view('team-lead.dashboard');
    }

    public function teamleaves()
    {
        $leaves = Leave::where('status',0)->where('is_canceled',0)->whereHas('user' ,  function ($q){
            $q->where('team_lead',Auth::user()->id);
        })->get();
        return view('team-lead.team-leaves',compact('leaves'));
    }

    public function approvedLeaves()
    {
        $leaves = Leave::where('status',1)->whereHas('user' ,  function ($q){
            $q->where('team_lead',Auth::user()->id);
        })->get();
        return view('team-lead.approved-leaves',compact('leaves'));
    }
    public function rejectLeave()
    {
        $leaves = Leave::where('is_canceled',1)->whereHas('user' ,  function ($q){
            $q->where('team_lead',Auth::user()->id);
        })->get();
        return view('team-lead.reject-leaves',compact('leaves'));
    }


    public function applyLeave()
    {
        return view('team-lead.apply-leave');
    }

    public function storeLeave(Request $request)
    {
        Leave::create([
            'leave_type'=>$request->get('leaveType'),
            'start_date'=>$request->get('start_date'),
            'end_date'=>$request->get('end_date'),
            'half_day'=>$request->has('half_day') ? $request->get('half_day'):0,
            'text'=>$request->get('text'),
            'user_id'=>Auth::user()->id

        ]);

        return redirect('teamLead/dashboard');

    }

    public function showMyLeaves()
    {
        $leaves=Auth::user()->leaves;
        return view('team-lead.my-leaves',compact('leaves'));

    }

    public function updateTeamLeave(Request $request)
    {
        $leave = Leave::find($request->leaveId);

        $leave->update(['status' => 1]);

        return redirect()->back();
    }
    public function cancelLeave(Request $request)
    {
//        return $request->all();

        $leave=Leave::findOrFail($request->leave_id);
        if($leave) {
            $leave->update([
                'reject_notes' => $request->rejected_notes,
                'is_canceled' => 1
                ]);
        }

        return redirect()->back();



    }

}
