@extends('layouts.home')
@section('content')
    <h3>
        @if (Auth::check())
           Xinh chào: {{Auth::user()->username}}
        @endif
    </h3>
@endsection