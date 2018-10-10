@extends('layouts.master')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Employee</h2>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Designation</th>
                    <th>Status</th>
                    <th>Date of joining</th>
                    <th>salaries</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @if(count($employee))
                    @foreach($employee as $value)
                        <tr>
                            <th>{{$value->name}}</th>
                            <th>{{$value->email}}</th>
                            <th>{{$value->designation}}</th>
                            <th>{{$value->status}}</th>
                            <th>{{$value->doj}}</th>
                            <th><button><a href="{{url('/salary/'.$value->id)}}">check salary</a></button></th>

                        </tr>

                    @endforeach
                @endif
                </tbody>
            </table>

        </div>
    </div>



    @endsection