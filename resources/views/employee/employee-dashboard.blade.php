@extends('layouts.master')
@section('content')


<h1><b> welcome </b></h1>
    <h2><b><i> {{\Illuminate\Support\Facades\Auth::user()->name}}</i> </b></h2>



    @endsection