@extends('layouts.master')
@section('table')

    <h1><b> welcome </b></h1>
    <h2><b><i> {{\Illuminate\Support\Facades\Auth::user()->name}}</i> </b></h2>


    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-file"></i> Total leaves</span>
            <div class="count">{{\Illuminate\Support\Facades\Auth::user()->casual_leave + \Illuminate\Support\Facades\Auth::user()->medical_leave}}</div>
            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-file"></i> Remaining leaves</span>
            <div class="count">{{\Illuminate\Support\Facades\Auth::user()->casual_leave + \Illuminate\Support\Facades\Auth::user()->medical_leave - $approvedLeaves}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-file"></i> casual leaves</span>
            <div class="count green">{{\Illuminate\Support\Facades\Auth::user()->casual_leave}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-file"></i> Medical leaves</span>
            <div class="count">{{\Illuminate\Support\Facades\Auth::user()->medical_leave}}</div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-file"></i> Rejected leaves</span>
            <div class="count">{{$rejectedLeaves}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-file"></i> Approved leaves</span>
            <div class="count">{{$approvedLeaves}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
    </div>
 @endsection
@section('content')






    @endsection