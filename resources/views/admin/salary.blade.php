@extends('layouts.master')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Salary</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="#">Settings 1</a>--}}
                {{--</li>--}}
                {{--<li><a href="#">Settings 2</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Basic_Salary</th>
                    <th>Absence</th>
                    <th>Late</th>
                    <th>Other_Deduction</th>
                    <th>Lunch</th>
                    <th>Tax_Ded</th>
                    <th>Bonus</th>
                    <th>Total_Deduction</th>
                    <th>Net_Payable</th>
                    <th>Month</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @if(count($salary))
                    @foreach($salary as $value)
                        <tr>
                            <th>{{$value->email}}</th>
                            <th>{{$value->basic_salary}}</th>
                            <th>{{$value->absence}}</th>
                            <th>{{$value->late}}</th>
                            <th>{{$value->other_deduction}}</th>
                            <th>{{$value->lunch}}</th>
                            <th>{{$value->tax_ded}}</th>
                            <th>{{$value->bonus}}</th>
                            <th>{{$value->total_deduction}}</th>
                            <th>{{$value->net_payable}}</th>
                            <th>{{$value->date}}</th>
                        </tr>

                    @endforeach
                @endif
                </tbody>
            </table>

        </div>
    </div>



@endsection