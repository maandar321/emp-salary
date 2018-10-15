@extends('layouts.master')
@section('content')


<h1>{{\Illuminate\Support\Facades\Auth::user()->name}}</h1>

@endsection